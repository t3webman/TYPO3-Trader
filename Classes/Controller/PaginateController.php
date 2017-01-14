<?php
namespace Newred\Trader\Controller;

/***
 *
 * This file is part of the "Trader" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2016 Gert-jan Dikkescheij <gerry@newred.ch>, Newred sagl
 *
 ***/

/**
 * PaginateController
 */
class PaginateController extends \TYPO3\CMS\Fluid\Core\Widget\AbstractWidgetController {

	/**
	 * @var array
	 */
	protected $configuration = array('itemsPerPage' => 6, 'insertAbove' => FALSE, 'insertBelow' => TRUE, 'maximumVisiblePages' => 7, 'displayDots' => FALSE);

	/**
	 * @var array
	 */
	protected $objects;

	/**
	 * @var integer
	 */
	protected $currentPage = 1;

	/**
	 * @var integer
	 */
	protected $numberOfPages = 1;

	/**
	 * @var integer
	 */
	protected $itemsPerPage = 0;

	/**
	 * Initialize Action of the widget controller
	 *
	 * @return void
	 */
	public function initializeAction()
	{
		$this->objects = $this->widgetConfiguration['objects'];
		if (version_compare(TYPO3_branch, '6.2', '<')) {
			$this->configuration = \TYPO3\CMS\Core\Utility\GeneralUtility::array_merge_recursive_overrule($this->configuration, $this->widgetConfiguration['configuration'], TRUE);
		} else {
			if (version_compare(TYPO3_branch, '8.0', '<')) {
				$this->configuration = \TYPO3\CMS\Core\Utility\GeneralUtility::array_merge($this->configuration, $this->widgetConfiguration['configuration'], TRUE);
			}else{
				$this->configuration = array_merge($this->configuration, $this->widgetConfiguration['configuration']);
			}
		}
	}

	/**
	 * Returns the items per page
	 *
	 * @return integer the items per page
	 */
	public function getItemsPerPage()
	{
		return $this->itemsPerPage;
	}

	/**
	 * Sets the items per page
	 *
	 * @param integer $itemsPerPage the items per page
	 *
	 * @return void
	 */
	public function setItemsPerPage($itemsPerPage)
	{
		if (empty($itemsPerPage)) {
			$this->itemsPerPage = (integer)$this->configuration['itemsPerPage'];
		} else {
			$this->itemsPerPage = $itemsPerPage;
		}
	}

	/**
	 * Returns the number of pages
	 *
	 * @return integer
	 */
	public function getNumberOfPages()
	{
		return $this->numberOfPages;
	}

	/**
	 * Sets the number of pages
	 *
	 * @param integer $numberOfPages the number of pages
	 *
	 * @return void
	 */
	public function setNumberOfPages($numberOfPages)
	{
		$this->numberOfPages = $numberOfPages;
	}

	/**
	 * Returns the current page
	 *
	 * @return integer the current page
	 */
	public function getCurrentPage()
	{
		return $this->currentPage;
	}

	/**
	 * Sets the current page and limits it between 1 and $this->numberOfPages.
	 *
	 * @param integer $currentPage the current page
	 *
	 * @return void
	 */
	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		if ($this->currentPage < 1) {
			$this->currentPage = 1;
		} elseif ($this->currentPage > $this->numberOfPages) {
			$this->currentPage = $this->numberOfPages;
		}
	}

	/**
	 * Returns all visible objects within a range, depending on itemsPerPage and the currentPage.
	 *
	 * @param \TYPO3\CMS\ExtBase\Persistence\QueryResult|array $objects the list of objects
	 *
	 * @return array<mixed> the list of visible objects
	 */
	public function getVisibleObjects($objects)
	{
		$i = 0;
		$modifiedObjects = array();
		$indexMin = $this->itemsPerPage * ($this->currentPage - 1);
		$indexMax = $this->itemsPerPage * $this->currentPage - 1;

		foreach ($objects as $object) {
			if ($i >= $indexMin && $i <= $indexMax) {
				$modifiedObjects[] = $object;
			}
			$i++;
		}

		return $modifiedObjects;
	}

	/**
	 * Index action of the widget controller
	 *
	 * @param integer $currentPage
	 * @param integer $itemsPerPage
	 *
	 * @return void
	 */
	public function indexAction($currentPage = 1, $itemsPerPage = 0)
	{
		$this->setItemsPerPage($itemsPerPage);
		$this->setNumberOfPages(intval(ceil(count($this->objects) / (integer)$this->itemsPerPage)));
		$this->setCurrentPage((integer)$currentPage);

		$this->view->assign('contentArguments', array(
			$this->widgetConfiguration['as'] => $this->getVisibleObjects($this->objects)
		));
		$this->view->assign('configuration', $this->configuration);
		if($this->numberOfPages >= 2) {
			$this->view->assign('pagination', $this->buildPagination());		  
		}
		$this->view->assign('itemsPerPage', $this->itemsPerPage);
	}

	/**
	 * Returns an array with the keys "pages", "current", "numberOfPages", "nextPage" & "previousPage"
	 *
	 * @return array
	 */
	protected function buildPagination()
	{
		
		$sidePageCount = intval($this->configuration['maximumVisiblePages']) >> 1;

		$firstPage = max($this->currentPage - $sidePageCount, 1);
		$lastPage = min($firstPage + $sidePageCount * 2, $this->numberOfPages);
		$firstPage = max($lastPage - $sidePageCount * 2, 1);

		$pages = array();
		foreach (range($firstPage, $lastPage) as $index) {
			$pages[] = array(
				'number' => $index,
				'isCurrent' => ($index === $this->currentPage)
			);
		}

		$pagination = array(
			'pages' => $pages,
			'current' => $this->currentPage,
			'numberOfPages' => $this->numberOfPages,
			'itemsPerPage' => $this->itemsPerPage,
			'firstPage' => 1,
			'lastPage' => $this->numberOfPages,
			'isFirstPage' => ($this->currentPage == 1),
			'isLastPage' => ($this->currentPage == $this->numberOfPages),
			'hasLessPages' => $firstPage > 2,
			'hasMorePages' => $lastPage + 1 < $this->numberOfPages
		);

		return $this->addPreviousAndNextPage($pagination);
	}

	/**
	 * Adds the nextPage and the previousPage to the pagination array
	 *
	 * @param array $pagination the pagination array which get previous and
	 *	  next page
	 *
	 * @return array the pagination array which contains some meta data and
	 *	   another array which are the pages
	 */
	protected function addPreviousAndNextPage($pagination)
	{
		if ($this->currentPage < $this->numberOfPages) {
			$pagination['nextPage'] = $this->currentPage + 1;
		}
		if ($this->currentPage > 1) {
			$pagination['previousPage'] = $this->currentPage - 1;
		}

		return $pagination;
	}
}
?>