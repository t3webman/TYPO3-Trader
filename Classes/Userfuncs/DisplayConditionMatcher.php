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
 * Class DisplayConditionMatcher
 */
 class DisplayConditionMatcher {

    /**
     * Checks for already existing mm relation of object
     * Returns true, if no mm relation found
     * 
     * @param array $configuration
     * @param \TYPO3\CMS\Backend\Form\FormDataProvider\EvaluateDisplayConditions $evaluateDisplayConditions
     * @return bool
     */
    public function displayObjectNoMM(array $configuration, $evaluateDisplayConditions = null) {
        $result = false;
        if (isset($configuration['record']['uid'])) {
            $countRows = $GLOBALS['TYPO3_DB']->exec_SELECTcountRows(
                'uid_foreign',
                'tx_trader_object_object_mm',
                'uid_foreign = ' . intval($configuration['record']['uid'])
            );
            if ($countRows > 0) {
                $result = true;
            }
        }
        if (isset($configuration['conditionParameters'][0]) && $configuration['conditionParameters'][0] === 'negate') {
            $result = !$result;
        }
        return $result;
    }
}