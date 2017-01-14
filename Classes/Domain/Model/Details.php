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
 * Details
 */
class Details extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

    /**
     * detail
     * 
     * @var string
     */
    protected $detail = '';

    /**
     * description
     * 
     * @var string
     */
    protected $description = '';

    /**
     * Returns the detail
     * 
     * @return string $detail
     */
    public function getDetail() {
        return $this->detail;
    }

    /**
     * Sets the detail
     * 
     * @param string $detail
     * @return void
     */
    public function setDetail($detail) {
        $this->detail = $detail;
    }

    /**
     * Returns the description
     * 
     * @return string $description
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Sets the description
     * 
     * @param string $description
     * @return void
     */
    public function setDescription($description) {
        $this->description = $description;
    }
}
