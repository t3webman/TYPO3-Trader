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

class FormatViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper  {

     /**
     * @param string $string
     * @return
     */

    public function render($string) {
	return mb_convert_case($string, MB_CASE_TITLE, "UTF-8");
    }
}