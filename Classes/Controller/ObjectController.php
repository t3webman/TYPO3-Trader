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
 * ObjectController
 */
class ObjectController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * objectRepository
     * 
     * @var \Newred\Trader\Domain\Repository\ObjectRepository
     * @inject
     */
    protected $objectRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $objects = $this->objectRepository->findList(
            $this->settings['entryInclude'],
            (int)$this->settings['entryLimit']
        );

        /**
         * if($this->settings['startingPoint'] != '')
         * \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($this->settings['startingPoint']);
         * \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($this->settings);
         * 
         */
$GLOBALS['TYPO3_DB']->debugOutput = 1;
        $this->view->assign('objects', $objects);
    }

    /**
     * action count
     * 
     * @return void
     */
    public function countAction()
    {
        $objects = $this->objectRepository->countList();

        $this->view->assign('objects', $objects);
    }

    /**
     * action show
     * 
     * @param \Newred\Trader\Domain\Model\Object $object
     * @return void
     */
    public function showAction(\Newred\Trader\Domain\Model\Object $object)
    {
        $this->view->assign('object', $object);
    }
}
