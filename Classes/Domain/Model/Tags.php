<?php
namespace Newred\Trader\Domain\Model;

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
 * Tags
 */
class Tags extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {
    /**
     * tag
     * 
     * @var string
     */
    protected $tag = '';

    /**
     * Returns the tag
     * 
     * @return string $tag
     */
    public function getTag() {
        return $this->tag;
    }

    /**
     * Sets the tag
     * 
     * @param string $tag
     * @return void
     */
    public function setTag($tag) {
        $this->tag = $tag;
    }
}
