<?php
namespace Newred\Trader\Hooks;

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

use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * ItemsProcFuncHook
 */
class ItemsProcFuncHook {

    /**
     * Sets the available actions for settings.switchableControllerActions
     *
     * @param array &$config
     * @return void
     */
    public function getItemsForSwitchableControllerActions(array &$config) {
        $availableActions = array(
            'list' => 'Object->list;Object->show',
            'detail' => 'Object->detail',
            'counter' => 'Object->count',
        );
        $extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['trader']);
        $allowedActions = array(
            'list' => 'Object->list;Object->show',
        );
        $allowedActionsFromExtConf = array();
        if (!empty($extConf['allowedActionsInFlexforms'])) {
            $allowedActionsFromExtConf = GeneralUtility::trimExplode(',', $extConf['allowedActionsInFlexforms']);
        }
        foreach ($allowedActionsFromExtConf as $allowedActionFromExtConf) {
            if (!empty($availableActions[$allowedActionFromExtConf])) {
                $allowedActions[$allowedActionFromExtConf] = $availableActions[$allowedActionFromExtConf];
            }
        }
        if (count($allowedActions) > 1) {
            foreach ($config['items'] as $key => $item) {
                if (!in_array($item[1], $allowedActions)) {
                    unset($config['items'][$key]);
                }
            }
        }
    }

}