<?php
namespace Newred\Trader\ViewHelpers;

/***
 * Copyright notice
 * (c) 2016 Gert-jan Dikkescheij <gerry@newred.ch>, Newred Sagl
 * All rights reserved
 *
 * This file is part of the "Trader" Extension for TYPO3 CMS.
 *
 ***/

 
class PaginateViewHelper extends \TYPO3\CMS\Fluid\Core\Widget\AbstractWidgetViewHelper
{
 
    /**
     * @var \Newred\Trader\Controller\PaginateController
     */
    protected $controller;
 
    /**
     * Injection of widget controller
     *
     * @param \Newred\Trader\Controller\PaginateController $controller
     * @return void
     */
    public function injectController(\Newred\Trader\Controller\PaginateController $controller)
    {
        $this->controller = $controller;
    }
 
    /**
     * The render method of widget
     *
     * @param mixed $objects \TYPO3\CMS\ExtBase\Persistence\QueryResultInterface,
     *        \TYPO3\CMS\ExtBase\Persistence\ObjectStorage object or array
     * @param string $as
     * @param array $configuration
     * @return string
     */
    public function render(
        $objects,
        $as,
        array $configuration = array('itemsPerPage' => 6, 'insertAbove' => FALSE, 'insertBelow' => TRUE)
    ) {
        return $this->initiateSubRequest();
    }
}
 
?>