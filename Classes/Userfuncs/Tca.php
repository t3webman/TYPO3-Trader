<?php
namespace Newred\Trader\Userfuncs;

/***
 * Copyright notice
 * (c) 2016 Gert-jan Dikkescheij <gerry@newred.ch>, Newred Sagl
 * All rights reserved
 *
 * This file is part of the "Trader" Extension for TYPO3 CMS.
 *
 ***/

/**
 * Class Tca
 */
 class Tca {

    /**
     * Loads a custom title for the object list view
     *
     * @return void
     */
    public function objectTitle(&$parameters, $parentObject) {
        $record = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord($parameters['table'], $parameters['row']['uid']);
        $newTitle = $record['reference'];
        $tag = strip_tags($record['title']);
        $newTitle .= ' - ' . substr($tag, 0, 30);
        if(strlen($tag) > 30) $newTitle .= '...';
        $parameters['title'] = $newTitle;
    }
}