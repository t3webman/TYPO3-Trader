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
use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * <nr:includeFile path="{settings.cssFile}" />
 */

class IncludeFileViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

    /**
     * Include a CSS/JS file
     *
     * @param string $path Path to the CSS/JS file which should be included
     * @param bool $compress Define if file should be compressed
     * @return void
     */
    public function render($path, $compress = false) {
        $pageRenderer = GeneralUtility::makeInstance(PageRenderer::class);
        if (TYPO3_MODE === 'FE') {
            $path = $GLOBALS['TSFE']->tmpl->getFileName($path);
        }

        // JS
        if (strtolower(substr($path, -3)) === '.js') {
            $pageRenderer->addJsFooterFile($path, null, $compress);

        // CSS
        } elseif (strtolower(substr($path, -4)) === '.css') {
            $pageRenderer->addCssFile($path, 'stylesheet', 'all', '', $compress);
        }
    }
}
