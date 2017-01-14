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
 * Category Model
 *
 */
class Category extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

    /**
     * @var int
     */
    protected $sorting;

    /**
     * @var \DateTime
     */
    protected $crdate;

    /**
     * @var \DateTime
     */
    protected $tstamp;

    /**
     * @var \DateTime
     */
    protected $starttime;

    /**
     * @var bool
     */
    protected $hidden;

    /**
     * @var \DateTime
     */
    protected $endtime;

    /**
     * @var int
     */
    protected $sysLanguageUid;

    /**
     * @var int
     */
    protected $l10nParent;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var \Newred\Trader\Domain\Model\Category
     * @lazy
     */
    protected $parentcategory;

    /**
     * Get creation date
     *
     * @return \DateTime
     */
    public function getCrdate() {
        return $this->crdate;
    }

    /**
     * Set Creation Date
     *
     * @param \DateTime $crdate crdate
     * @return void
     */
    public function setCrdate($crdate) {
        $this->crdate = $crdate;
    }

    /**
     * Get Tstamp
     *
     * @return \DateTime
     */
    public function getTstamp() {
        return $this->tstamp;
    }

    /**
     * Set tstamp
     *
     * @param \DateTime $tstamp tstamp
     * @return void
     */
    public function setTstamp($tstamp) {
        $this->tstamp = $tstamp;
    }

    /**
     * Get starttime
     *
     * @return \DateTime
     */
    public function getStarttime() {
        return $this->starttime;
    }

    /**
     * Set starttime
     *
     * @param \DateTime $starttime starttime
     * @return void
     */
    public function setStarttime($starttime) {
        $this->starttime = $starttime;
    }

    /**
     * Get Endtime
     *
     * @return \DateTime
     */
    public function getEndtime() {
        return $this->endtime;
    }

    /**
     * Set Endtime
     *
     * @param \DateTime $endtime endttime
     * @return void
     */
    public function setEndtime($endtime) {
        $this->endtime = $endtime;
    }

    /**
     * Get Hidden
     *
     * @return bool
     */
    public function getHidden() {
        return $this->hidden;
    }

    /**
     * Set Hidden
     *
     * @param bool $hidden
     * @return void
     */
    public function setHidden($hidden) {
        $this->hidden = $hidden;
    }

    /**
     * Get sys language
     *
     * @return int
     */
    public function getSysLanguageUid() {
        return $this->_languageUid;
    }

    /**
     * Set sys language
     *
     * @param int $sysLanguageUid language uid
     * @return void
     */
    public function setSysLanguageUid($sysLanguageUid) {
        $this->_languageUid = $sysLanguageUid;
    }

    /**
     * Get language parent
     *
     * @return int
     */
    public function getL10nParent() {
        return $this->l10nParent;
    }

    /**
     * Set language parent
     *
     * @param int $l10nParent l10nParent
     * @return void
     */
    public function setL10nParent($l10nParent) {
        $this->l10nParent = $l10nParent;
    }

    /**
     * Get category title
     *
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set category title
     *
     * @param string $title title
     * @return void
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set description
     *
     * @param string $description description
     * @return void
     */
    public function setDescription($description) {
        $this->description = $description;
    }

    /**
     * Get parent category
     *
     * @return \GeorgRinger\News\Domain\Model\Category
     */
    public function getParentcategory() {
        return $this->parentcategory;
    }

    /**
     * Set parent category
     *
     * @param \GeorgRinger\News\Domain\Model\Category $category parent category
     * @return void
     */
    public function setParentcategory(Category $category) {
        $this->parentcategory = $category;
    }

    /**
     * Get sorting id
     *
     * @return int sorting id
     */
    public function getSorting() {
        return $this->sorting;
    }

    /**
     * Set sorting id
     *
     * @param int $sorting sorting id
     * @return void
     */
    public function setSorting($sorting) {
        $this->sorting = $sorting;
    }
}
