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
 * Contacts
 */
class Contacts extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {
    /**
     * contactname
     * 
     * @var string
     */
    protected $contactname = '';

    /**
     * contactadress
     * 
     * @var string
     */
    protected $contactadress = '';

    /**
     * contactemail
     * 
     * @var string
     */
    protected $contactemail = '';

    /**
     * contactphone
     * 
     * @var string
     */
    protected $contactphone = '';

    /**
     * contactcell
     * 
     * @var string
     */
    protected $contactcell = '';

    /**
     * Returns the contactname
     * 
     * @return string $contactname
     */
    public function getContactname() {
        return $this->contactname;
    }

    /**
     * Sets the contactname
     * 
     * @param string $contactname
     * @return void
     */
    public function setContactname($contactname) {
        $this->contactname = $contactname;
    }

    /**
     * Returns the contactadress
     * 
     * @return string $contactadress
     */
    public function getContactadress() {
        return $this->contactadress;
    }

    /**
     * Sets the contactadress
     * 
     * @param string $contactadress
     * @return void
     */
    public function setContactadress($contactadress) {
        $this->contactadress = $contactadress;
    }

    /**
     * Returns the contactemail
     * 
     * @return string $contactemail
     */
    public function getContactemail() {
        return $this->contactemail;
    }

    /**
     * Sets the contactemail
     * 
     * @param string $contactemail
     * @return void
     */
    public function setContactemail($contactemail) {
        $this->contactemail = $contactemail;
    }

    /**
     * Returns the contactphone
     * 
     * @return string $contactphone
     */
    public function getContactphone() {
        return $this->contactphone;
    }

    /**
     * Sets the contactphone
     * 
     * @param string $contactphone
     * @return void
     */
    public function setContactphone($contactphone) {
        $this->contactphone = $contactphone;
    }

    /**
     * Returns the contactcell
     * 
     * @return string $contactcell
     */
    public function getContactcell() {
        return $this->contactcell;
    }

    /**
     * Sets the contactcell
     * 
     * @param string $contactcell
     * @return void
     */
    public function setContactcell($contactcell) {
        $this->contactcell = $contactcell;
    }
}
