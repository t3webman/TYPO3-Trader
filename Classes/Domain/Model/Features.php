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
 * Features
 */
class Features extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {
    /**
     * feature
     * 
     * @var string
     */
    protected $feature = '';

    /**
     * icon
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $icon = null;

    /**
     * searchname
     * 
     * @var string
     */
    protected $searchname = '';

    /**
     * searchitem
     * 
     * @var bool
     */
    protected $searchitem = false;

    /**
     * Returns the feature
     * 
     * @return string $feature
     */
    public function getFeature() {
        return $this->feature;
    }

    /**
     * Sets the feature
     * 
     * @param string $feature
     * @return void
     */
    public function setFeature($feature) {
        $this->feature = $feature;
    }

    /**
     * Returns the searchname
     * 
     * @return string $searchname
     */
    public function getSearchname() {
        return $this->searchname;
    }

    /**
     * Sets the searchname
     * 
     * @param string $searchname
     * @return void
     */
    public function setSearchname($searchname) {
        $this->searchname = $searchname;
    }

    /**
     * Returns the searchitem
     * 
     * @return bool $searchitem
     */
    public function getSearchitem() {
        return $this->searchitem;
    }

    /**
     * Sets the searchitem
     * 
     * @param bool $searchitem
     * @return void
     */
    public function setSearchitem($searchitem) {
        $this->searchitem = $searchitem;
    }

    /**
     * Returns the boolean state of searchitem
     * 
     * @return bool
     */
    public function isSearchitem() {
        return $this->searchitem;
    }

    /**
     * Returns the icon
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $icon
     */
    public function getIcon() {
        return $this->icon;
    }

    /**
     * Sets the icon
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $icon
     * @return void
     */
    public function setIcon(\TYPO3\CMS\Extbase\Domain\Model\FileReference $icon) {
        $this->icon = $icon;
    }
}
