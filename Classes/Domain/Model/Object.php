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
 * The  Marketed Object
 */
class Object extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {
    /**
     * reference
     * 
     * @var string
     */
    protected $reference = '';

    /**
     * tag
     * 
     * @var \Newred\Trader\Domain\Model\Tags
     */
    protected $tag = null;

    /**
     * featured
     * 
     * @var bool
     */
    protected $featured = false;

    /**
     * isproject
     * 
     * @var bool
     */
    protected $isproject = false;

    /**
     * objects
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Newred\Trader\Domain\Model\Object>
     */
    protected $objects = null;

    /**
     * title
     * 
     * @var string
     */
    protected $title = '';

    /**
     * teaser
     * 
     * @var string
     */
    protected $teaser = '';

    /**
     * description
     * 
     * @var string
     */
    protected $description = '';

    /**
     * details
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Newred\Trader\Domain\Model\Details>
     * @cascade remove
     */
    protected $details = null;

    /**
     * status
     * 
     * @var int
     */
    protected $status = 0;

    /**
     * builddate
     * 
     * @var \DateTime
     */
    protected $builddate = null;

    /**
     * availdate
     * 
     * @var \DateTime
     */
    protected $availdate = null;

    /**
     * auctiondate
     * 
     * @var \DateTime
     */
    protected $auctiondate = null;

    /**
     * rented
     * 
     * @var bool
     */
    protected $rented = false;

    /**
     * rentdate
     * 
     * @var \DateTime
     */
    protected $rentdate = null;

    /**
     * marketing
     * 
     * @var int
     */
    protected $marketing = null;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Newred\Trader\Domain\Model\Category>
     * @lazy
     */
    protected $categories;

    /**
     * street
     * 
     * @var string
     */
    protected $street = '';

    /**
     * number
     * 
     * @var string
     */
    protected $number = '';

    /**
     * zip
     * 
     * @var string
     */
    protected $zip = '';

    /**
     * city
     * 
     * @var string
     */
    protected $city = '';

    /**
     * region
     * 
     * @var string
     */
    protected $region = '';

    /**
     * province
     * 
     * @var string
     */
    protected $province = '';

    /**
     * country
     * 
     * @var int
     */
    protected $country = 0;

    /**
     * latitude
     * 
     * @var float
     */
    protected $latitude = null;

    /**
     * longitude
     * 
     * @var float
     */
    protected $longitude = null;

    /**
     * hideadress
     * 
     * @var bool
     */
    protected $hideadress = false;

    /**
     * hidecontact
     * 
     * @var bool
     */
    protected $hidecontact = '';

    /**
     * far
     * 
     * @var float
     */
    protected $far = 0;

    /**
     * fsi
     * 
     * @var float
     */
    protected $fsi = 0;

    /**
     * areatotal
     * 
     * @var float
     */
    protected $areatotal = null;

    /**
     * areausable
     * 
     * @var float
     */
    protected $areausable = 0.0;

    /**
     * arealiving
     * 
     * @var float
     */
    protected $arealiving = 0.0;

    /**
     * areabase
     * 
     * @var float
     */
    protected $areabase = 0.0;

    /**
     * floor
     * 
     * @var int
     */
    protected $floor = 0;

    /**
     * floors
     * 
     * @var int
     */
    protected $floors = 0;

    /**
     * norooms
     * 
     * @var float
     */
    protected $norooms = null;

    /**
     * nobedrooms
     * 
     * @var int
     */
    protected $nobedrooms = null;

    /**
     * nobathrooms
     * 
     * @var int
     */
    protected $nobathrooms = null;

    /**
     * noparking
     * 
     * @var int
     */
    protected $noparking = 0;

    /**
     * typeparking
     * 
     * @var int
     */
    protected $typeparking = 0;

    /**
     * pricetotal
     * 
     * @var float
     */
    protected $pricetotal = null;

    /**
     * pricesqm
     * 
     * @var float
     */
    protected $pricesqm = 0.0;

    /**
     * pricetax
     * 
     * @var float
     */
    protected $pricetax = 0.0;

    /**
     * priceinc
     * 
     * @var bool
     */
    protected $priceinc = false;

    /**
     * pricereserved
     * 
     * @var bool
     */
    protected $pricereserved = false;

    /**
     * rent
     * 
     * @var float
     */
    protected $rent = null;

    /**
     * pricedeposit
     * 
     * @var float
     */
    protected $pricedeposit = 0.0;

    /**
     * commisionint
     * 
     * @var float
     */
    protected $commisionint = 0.0;

    /**
     * commintinc
     * 
     * @var bool
     */
    protected $commintinc = false;

    /**
     * commisionext
     * 
     * @var float
     */
    protected $commisionext = 0.0;

    /**
     * commextinc
     * 
     * @var bool
     */
    protected $commextinc = false;

    /**
     * priceparking
     * 
     * @var float
     */
    protected $priceparking = 0.0;

    /**
     * rentparking
     * 
     * @var float
     */
    protected $rentparking = 0.0;

    /**
     * heating
     * 
     * @var float
     */
    protected $heating = 0.0;

    /**
     * expenses
     * 
     * @var float
     */
    protected $expenses = 0.0;

    /**
     * images
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @lazy
     */
    protected $images = null;

    /**
     * floorplans
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @lazy
     */
    protected $floorplans = null;

    /**
     * video
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @lazy
     */
    protected $video = null;

    /**
     * documents
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @lazy
     */
    protected $documents = null;

    /**
     * features
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Newred\Trader\Domain\Model\Features>
     * @cascade remove
     */
    protected $features = null;

    /**
     * contact
     * 
     * @var \Newred\Trader\Domain\Model\Contacts
     */
    protected $contact = 0;

    /**
     * owner
     * 
     * @var \Newred\Trader\Domain\Model\Contacts
     */
    protected $owner = 0;

    /**
     * broker
     * 
     * @var \Newred\Trader\Domain\Model\Contacts
     */
    protected $broker = 0;

    /**
     * Constructor
     *
     * @return AbstractObject
     */
    public function __construct() {
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects() {
        $this->objects = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->categories = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->features = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->details = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->images = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->floorplans = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->videos = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->documents = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the reference
     * 
     * @return string $reference
     */
    public function getReference() {
        return $this->reference;
    }

    /**
     * Sets the reference
     * 
     * @param string $reference
     * @return void
     */
    public function setReference($reference) {
        $this->reference = $reference;
    }

    /**
     * Returns the featured
     * 
     * @return bool $featured
     */
    public function getFeatured() {
        return $this->featured;
    }

    /**
     * Sets the featured
     * 
     * @param bool $featured
     * @return void
     */
    public function setFeatured($featured) {
        $this->featured = $featured;
    }

    /**
     * Returns the boolean state of featured
     * 
     * @return bool
     */
    public function isFeatured() {
        return $this->featured;
    }

    /**
     * Returns the isproject
     * 
     * @return bool $isproject
     */
    public function getIsproject() {
        return $this->isproject;
    }

    /**
     * Sets the isproject
     * 
     * @param bool $isproject
     * @return void
     */
    public function setIsproject($isproject) {
        $this->isproject = $isproject;
    }

    /**
     * Returns the boolean state of isproject
     * 
     * @return bool
     */
    public function isIsproject() {
        return $this->isproject;
    }

    /**
     * Adds a Object
     * 
     * @param \Newred\Trader\Domain\Model\Object $object
     * @return void
     */
    public function addObject(\Newred\Trader\Domain\Model\Object $object) {
        $this->objects->attach($object);
    }

    /**
     * Removes a Object
     * 
     * @param \Newred\Trader\Domain\Model\Object $objectToRemove The Object to be removed
     * @return void
     */
    public function removeObject(\Newred\Trader\Domain\Model\Object $objectToRemove) {
        $this->objects->detach($objectToRemove);
    }

    /**
     * Returns the objects
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Newred\Trader\Domain\Model\Object> $objects
     */
    public function getObjects() {
        return $this->objects;
    }

    /**
     * Sets the objects
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Newred\Trader\Domain\Model\Object> $objects
     * @return void
     */
    public function setObjects(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $objects) {
        $this->objects = $objects;
    }

    /**
     * Returns the title
     * 
     * @return string $title
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Sets the title
     * 
     * @param string $title
     * @return void
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * Returns the teaser
     * 
     * @return string $teaser
     */
    public function getTeaser() {
        return $this->teaser;
    }

    /**
     * Sets the teaser
     * 
     * @param string $teaser
     * @return void
     */
    public function setTeaser($teaser) {
        $this->teaser = $teaser;
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

    /**
     * Adds a Details
     * 
     * @param \Newred\Trader\Domain\Model\Details $detail
     * @return void
     */
    public function addDetail(\Newred\Trader\Domain\Model\Details $detail) {
        $this->details->attach($detail);
    }

    /**
     * Removes a Details
     * 
     * @param \Newred\Trader\Domain\Model\Details $detailToRemove The Details to be removed
     * @return void
     */
    public function removeDetail(\Newred\Trader\Domain\Model\Details $detailToRemove) {
        $this->details->detach($detailToRemove);
    }

    /**
     * Returns the details
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Newred\Trader\Domain\Model\Details> $details
     */
    public function getDetails() {
        return $this->details;
    }

    /**
     * Sets the details
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Newred\Trader\Domain\Model\Details> $details
     * @return void
     */
    public function setDetails(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $details) {
        $this->details = $details;
    }

    /**
     * Returns the marketing
     * 
     * @return int $marketing
     */
    public function getMarketing() {
        return $this->marketing;
    }

    /**
     * Sets the marketing
     * 
     * @param int $marketing
     * @return void
     */
    public function setMarketing($marketing) {
        $this->marketing = $marketing;
    }

    /**
     * Get categories
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Newred\Trader\Domain\Model\Category>
     */
    public function getCategories() {
        return $this->categories;
    }

    /**
     * Get first category
     *
     * @return Category
     */
    public function getFirstCategory() {
        $categories = $this->getCategories();
        if (!is_null($categories)) {
            $categories->rewind();
            return $categories->current();
        } else {
            return null;
        }
    }

    /**
     * Set categories
     *
     * @param  \TYPO3\CMS\Extbase\Persistence\ObjectStorage $categories
     * @return void
     */
    public function setCategories($categories) {
        $this->categories = $categories;
    }

    /**
     * Adds a category to this categories.
     *
     * @param Category $category
     * @return void
     */
    public function addCategory(Category $category) {
        $this->getCategories()->attach($category);
    }

    /**
     * Returns the status
     * 
     * @return int $status
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Sets the status
     * 
     * @param int $status
     * @return void
     */
    public function setStatus($status) {
        $this->status = $status;
    }

    /**
     * Returns the builddate
     * 
     * @return int $builddate
     */
    public function getBuilddate() {
        return $this->builddate;
    }

    /**
     * Sets the builddate
     * 
     * @param \DateTime $builddate
     * @return void
     */
    public function setBuilddate(\DateTime $builddate) {
        $this->builddate = $builddate;
    }

    /**
     * Returns the availdate
     * 
     * @return \DateTime $availdate
     */
    public function getAvaildate() {
        return $this->availdate;
    }

    /**
     * Sets the availdate
     * 
     * @param \DateTime $availdate
     * @return void
     */
    public function setAvaildate(\DateTime $availdate) {
        $this->availdate = $availdate;
    }

    /**
     * Returns the auctiondate
     * 
     * @return \DateTime $auctiondate
     */
    public function getAuctiondate() {
        return $this->auctiondate;
    }

    /**
     * Sets the auctiondate
     * 
     * @param \DateTime $auctiondate
     * @return void
     */
    public function setAuctiondate(\DateTime $auctiondate) {
        $this->auctiondate = $auctiondate;
    }

    /**
     * Returns the rented
     * 
     * @return bool $rented
     */
    public function getRented() {
        return $this->rented;
    }

    /**
     * Sets the rented
     * 
     * @param bool $rented
     * @return void
     */
    public function setRented($rented) {
        $this->rented = $rented;
    }

    /**
     * Returns the boolean state of rented
     * 
     * @return bool
     */
    public function isRented() {
        return $this->rented;
    }

    /**
     * Returns the rentdate
     * 
     * @return \DateTime $rentdate
     */
    public function getRentdate() {
        return $this->rentdate;
    }

    /**
     * Sets the rentdate
     * 
     * @param \DateTime $rentdate
     * @return void
     */
    public function setRentdate(\DateTime $rentdate) {
        $this->rentdate = $rentdate;
    }

    /**
     * Returns the street
     * 
     * @return string $street
     */
    public function getStreet() {
        return $this->street;
    }

    /**
     * Sets the street
     * 
     * @param string $street
     * @return void
     */
    public function setStreet($street) {
        $this->street = $street;
    }

    /**
     * Returns the number
     * 
     * @return string $number
     */
    public function getNumber() {
        return $this->number;
    }

    /**
     * Sets the number
     * 
     * @param string $number
     * @return void
     */
    public function setNumber($number) {
        $this->number = $number;
    }

    /**
     * Returns the zip
     * 
     * @return string $zip
     */
    public function getZip() {
        return $this->zip;
    }

    /**
     * Sets the zip
     * 
     * @param string $zip
     * @return void
     */
    public function setZip($zip) {
        $this->zip = $zip;
    }

    /**
     * Returns the city
     * 
     * @return string $city
     */
    public function getCity() {
        return $this->city;
    }

    /**
     * Sets the city
     * 
     * @param string $city
     * @return void
     */
    public function setCity($city) {
        $this->city = $city;
    }

    /**
     * Returns the region
     * 
     * @return string $region
     */
    public function getRegion() {
        return $this->region;
    }

    /**
     * Sets the region
     * 
     * @param string $region
     * @return void
     */
    public function setRegion($region) {
        $this->region = $region;
    }

    /**
     * Returns the province
     * 
     * @return string $province
     */
    public function getProvince() {
        return $this->province;
    }

    /**
     * Sets the province
     * 
     * @param string $province
     * @return void
     */
    public function setProvince($province) {
        $this->province = $province;
    }

    /**
     * Returns the country
     * 
     * @return string $country
     */
    public function getCountry() {
        return $this->country;
    }

    /**
     * Sets the country
     * 
     * @param string $country
     * @return void
     */
    public function setCountry($country) {
        $this->country = $country;
    }

    /**
     * Returns the latitude
     * 
     * @return float $latitude
     */
    public function getLatitude() {
        return $this->latitude;
    }

    /**
     * Sets the latitude
     * 
     * @param float $latitude
     * @return void
     */
    public function setLatitude($latitude) {
        $this->latitude = $latitude;
    }

    /**
     * Returns the longitude
     * 
     * @return string $longitude
     */
    public function getLongitude() {
        return $this->longitude;
    }

    /**
     * Sets the longitude
     * 
     * @param string $longitude
     * @return void
     */
    public function setLongitude($longitude) {
        $this->longitude = $longitude;
    }

    /**
     * Returns the hideadress
     * 
     * @return bool $hideadress
     */
    public function getHideadress() {
        return $this->hideadress;
    }

    /**
     * Sets the hideadress
     * 
     * @param bool $hideadress
     * @return void
     */
    public function setHideadress($hideadress) {
        $this->hideadress = $hideadress;
    }

    /**
     * Returns the boolean state of hideadress
     * 
     * @return bool
     */
    public function isHideadress() {
        return $this->hideadress;
    }

    /**
     * Returns the areatotal
     * 
     * @return float $areatotal
     */
    public function getAreatotal() {
        return $this->areatotal;
    }

    /**
     * Sets the areatotal
     * 
     * @param float $areatotal
     * @return void
     */
    public function setAreatotal($areatotal) {
        $this->areatotal = $areatotal;
    }

    /**
     * Returns the areausable
     * 
     * @return float $areausable
     */
    public function getAreausable() {
        return $this->areausable;
    }

    /**
     * Sets the areausable
     * 
     * @param float $areausable
     * @return void
     */
    public function setAreausable($areausable) {
        $this->areausable = $areausable;
    }

    /**
     * Returns the areabase
     * 
     * @return float $areabase
     */
    public function getAreabase() {
        return $this->areabase;
    }

    /**
     * Sets the areabase
     * 
     * @param float $areabase
     * @return void
     */
    public function setAreabase($areabase) {
        $this->areabase = $areabase;
    }

    /**
     * Returns the floor
     * 
     * @return int $floor
     */
    public function getFloor() {
        return $this->floor;
    }

    /**
     * Sets the floor
     * 
     * @param int $floor
     * @return void
     */
    public function setFloor($floor) {
        $this->floor = $floor;
    }

    /**
     * Returns the floors
     * 
     * @return int $floors
     */
    public function getFloors() {
        return $this->floors;
    }

    /**
     * Sets the floors
     * 
     * @param int $floors
     * @return void
     */
    public function setFloors($floors) {
        $this->floors = $floors;
    }

    /**
     * Returns the norooms
     * 
     * @return float $norooms
     */
    public function getNorooms() {
        return $this->norooms;
    }

    /**
     * Sets the norooms
     * 
     * @param float $norooms
     * @return void
     */
    public function setNorooms($norooms) {
        $this->norooms = $norooms;
    }

    /**
     * Returns the nobedrooms
     * 
     * @return int $nobedrooms
     */
    public function getNobedrooms() {
        return $this->nobedrooms;
    }

    /**
     * Sets the nobedrooms
     * 
     * @param int $nobedrooms
     * @return void
     */
    public function setNobedrooms($nobedrooms) {
        $this->nobedrooms = $nobedrooms;
    }

    /**
     * Returns the nobathrooms
     * 
     * @return int $nobathrooms
     */
    public function getNobathrooms() {
        return $this->nobathrooms;
    }

    /**
     * Sets the nobathrooms
     * 
     * @param int $nobathrooms
     * @return void
     */
    public function setNobathrooms($nobathrooms) {
        $this->nobathrooms = $nobathrooms;
    }

    /**
     * Returns the noparking
     * 
     * @return int $noparking
     */
    public function getNoparking() {
        return $this->noparking;
    }

    /**
     * Sets the noparking
     * 
     * @param int $noparking
     * @return void
     */
    public function setNoparking($noparking) {
        $this->noparking = $noparking;
    }

    /**
     * Returns the typeparking
     * 
     * @return int $typeparking
     */
    public function getTypeparking() {
        return $this->typeparking;
    }

    /**
     * Sets the typeparking
     * 
     * @param int $typeparking
     * @return void
     */
    public function setTypeparking($typeparking) {
        $this->typeparking = $typeparking;
    }

    /**
     * Returns the pricetotal
     * 
     * @return float $pricetotal
     */
    public function getPricetotal() {
        return $this->pricetotal;
    }

    /**
     * Sets the pricetotal
     * 
     * @param float $pricetotal
     * @return void
     */
    public function setPricetotal($pricetotal) {
        $this->pricetotal = $pricetotal;
    }

    /**
     * Returns the pricesqm
     * 
     * @return float $pricesqm
     */
    public function getPricesqm() {
        return $this->pricesqm;
    }

    /**
     * Sets the pricesqm
     * 
     * @param float $pricesqm
     * @return void
     */
    public function setPricesqm($pricesqm) {
        $this->pricesqm = $pricesqm;
    }

    /**
     * Returns the pricetax
     * 
     * @return float $pricetax
     */
    public function getPricetax() {
        return $this->pricetax;
    }

    /**
     * Sets the pricetax
     * 
     * @param float $pricetax
     * @return void
     */
    public function setPricetax($pricetax)  {
        $this->pricetax = $pricetax;
    }

    /**
     * Returns the priceinc
     * 
     * @return bool $priceinc
     */
    public function getPriceinc() {
        return $this->priceinc;
    }

    /**
     * Sets the priceinc
     * 
     * @param bool $priceinc
     * @return void
     */
    public function setPriceinc($priceinc) {
        $this->priceinc = $priceinc;
    }

    /**
     * Returns the boolean state of priceinc
     * 
     * @return bool
     */
    public function isPriceinc() {
        return $this->priceinc;
    }

    /**
     * Returns the pricereserved
     * 
     * @return bool $pricereserved
     */
    public function getPricereserved() {
        return $this->pricereserved;
    }

    /**
     * Sets the pricereserved
     * 
     * @param bool $pricereserved
     * @return void
     */
    public function setPricereserved($pricereserved) {
        $this->pricereserved = $pricereserved;
    }

    /**
     * Returns the boolean state of pricereserved
     * 
     * @return bool
     */
    public function isPricereserved() {
        return $this->pricereserved;
    }

    /**
     * Returns the rent
     * 
     * @return float $rent
     */
    public function getRent() {
        return $this->rent;
    }

    /**
     * Sets the rent
     * 
     * @param float $rent
     * @return void
     */
    public function setRent($rent) {
        $this->rent = $rent;
    }

    /**
     * Returns the pricedeposit
     * 
     * @return float $pricedeposit
     */
    public function getPricedeposit() {
        return $this->pricedeposit;
    }

    /**
     * Sets the pricedeposit
     * 
     * @param float $pricedeposit
     * @return void
     */
    public function setPricedeposit($pricedeposit) {
        $this->pricedeposit = $pricedeposit;
    }

    /**
     * Returns the commisionint
     * 
     * @return float $commisionint
     */
    public function getCommisionint() {
        return $this->commisionint;
    }

    /**
     * Sets the commisionint
     * 
     * @param float $commisionint
     * @return void
     */
    public function setCommisionint($commisionint) {
        $this->commisionint = $commisionint;
    }

    /**
     * Returns the commintinc
     * 
     * @return bool $commintinc
     */
    public function getCommintinc() {
        return $this->commintinc;
    }

    /**
     * Sets the commintinc
     * 
     * @param bool $commintinc
     * @return void
     */
    public function setCommintinc($commintinc) {
        $this->commintinc = $commintinc;
    }

    /**
     * Returns the boolean state of commintinc
     * 
     * @return bool
     */
    public function isCommintinc() {
        return $this->commintinc;
    }

    /**
     * Returns the commisionext
     * 
     * @return float $commisionext
     */
    public function getCommisionext() {
        return $this->commisionext;
    }

    /**
     * Sets the commisionext
     * 
     * @param float $commisionext
     * @return void
     */
    public function setCommisionext($commisionext) {
        $this->commisionext = $commisionext;
    }

    /**
     * Returns the commextinc
     * 
     * @return bool $commextinc
     */
    public function getCommextinc() {
        return $this->commextinc;
    }

    /**
     * Sets the commextinc
     * 
     * @param bool $commextinc
     * @return void
     */
    public function setCommextinc($commextinc) {
        $this->commextinc = $commextinc;
    }

    /**
     * Returns the boolean state of commextinc
     * 
     * @return bool
     */
    public function isCommextinc() {
        return $this->commextinc;
    }

    /**
     * Returns the heating
     * 
     * @return float $heating
     */
    public function getHeating() {
        return $this->heating;
    }

    /**
     * Sets the heating
     * 
     * @param float $heating
     * @return void
     */
    public function setHeating($heating) {
        $this->heating = $heating;
    }

    /**
     * Returns the expenses
     * 
     * @return float $expenses
     */
    public function getExpenses() {
        return $this->expenses;
    }

    /**
     * Sets the expenses
     * 
     * @param float $expenses
     * @return void
     */
    public function setExpenses($expenses) {
        $this->expenses = $expenses;
    }

    /**
     * Returns the images
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage $images
     */
    public function getImages() {
        return $this->images;
    }

    /**
     * Sets the images
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $images
     * @return void
     */
    public function setImages(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $images) {
        $this->images = $images;
    }

    /**
     * Returns the floorplans
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage $floorplans
     */
    public function getFloorplans() {
        return $this->floorplans;
    }

    /**
     * Sets the floorplans
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $floorplans
     * @return void
     */
    public function setFloorplans(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $floorplans) {
        $this->floorplans = $floorplans;
    }

    /**
     * Returns the video
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage $video
     */
    public function getVideo() {
        return $this->video;
    }

    /**
     * Sets the video
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $video
     * @return void
     */
    public function setVideo(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $video) {
        $this->video = $video;
    }

    /**
     * Returns the documents
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage $documents
     */
    public function getDocuments() {
        return $this->documents;
    }

    /**
     * Sets the documents
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $documents
     * @return void
     */
    public function setDocuments(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $documents) {
        $this->documents = $documents;
    }

    /**
     * Adds a Features
     * 
     * @param \Newred\Trader\Domain\Model\Features $feature
     * @return void
     */
    public function addFeature(\Newred\Trader\Domain\Model\Features $feature) {
        $this->features->attach($feature);
    }

    /**
     * Removes a Features
     * 
     * @param \Newred\Trader\Domain\Model\Features $featureToRemove The Features to be removed
     * @return void
     */
    public function removeFeature(\Newred\Trader\Domain\Model\Features $featureToRemove) {
        $this->features->detach($featureToRemove);
    }

    /**
     * Returns the features
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Newred\Trader\Domain\Model\Features> $features
     */
    public function getFeatures() {
        return $this->features;
    }

    /**
     * Sets the features
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Newred\Trader\Domain\Model\Features> $features
     * @return void
     */
    public function setFeatures(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $features) {
        $this->features = $features;
    }

    /**
     * Returns the tag
     * 
     * @return \Newred\Trader\Domain\Model\Tags $tag
     */
    public function getTag() {
        return $this->tag;
    }

    /**
     * Sets the tag
     * 
     * @param \Newred\Trader\Domain\Model\Tags $tag
     * @return void
     */
    public function setTag(\Newred\Trader\Domain\Model\Tags $tag) {
        $this->tag = $tag;
    }

    /**
     * Returns the contact
     * 
     * @return \Newred\Trader\Domain\Model\Contacts $contact
     */
    public function getContact() {
        return $this->contact;
    }

    /**
     * Sets the contact
     * 
     * @param \Newred\Trader\Domain\Model\Contacts $contact
     * @return void
     */
    public function setContact(\Newred\Trader\Domain\Model\Contacts $contact) {
        $this->contact = $contact;
    }

    /**
     * Returns the owner
     * 
     * @return \Newred\Trader\Domain\Model\Contacts $owner
     */
    public function getOwner() {
        return $this->owner;
    }

    /**
     * Sets the owner
     * 
     * @param \Newred\Trader\Domain\Model\Contacts $owner
     * @return void
     */
    public function setOwner(\Newred\Trader\Domain\Model\Contacts $owner) {
        $this->owner = $owner;
    }

    /**
     * Returns the broker
     * 
     * @return \Newred\Trader\Domain\Model\Contacts $broker
     */
    public function getBroker() {
        return $this->broker;
    }

    /**
     * Sets the broker
     * 
     * @param \Newred\Trader\Domain\Model\Contacts $broker
     * @return void
     */
    public function setBroker(\Newred\Trader\Domain\Model\Contacts $broker) {
        $this->broker = $broker;
    }

    /**
     * Returns the far
     * 
     * @return float far
     */
    public function getFar() {
        return $this->far;
    }

    /**
     * Sets the far
     * 
     * @param int $far
     * @return void
     */
    public function setFar($far) {
        $this->far = $far;
    }

    /**
     * Returns the fsi
     * 
     * @return float fsi
     */
    public function getFsi() {
        return $this->fsi;
    }

    /**
     * Sets the fsi
     * 
     * @param int $fsi
     * @return void
     */
    public function setFsi($fsi) {
        $this->fsi = $fsi;
    }

    /**
     * Returns the arealiving
     * 
     * @return float $arealiving
     */
    public function getArealiving() {
        return $this->arealiving;
    }

    /**
     * Sets the arealiving
     * 
     * @param float $arealiving
     * @return void
     */
    public function setArealiving($arealiving) {
        $this->arealiving = $arealiving;
    }

    /**
     * Returns the priceparking
     * 
     * @return float priceparking
     */
    public function getPriceparking() {
        return $this->priceparking;
    }

    /**
     * Sets the priceparking
     * 
     * @param float $priceparking
     * @return void
     */
    public function setPriceparking($priceparking) {
        $this->priceparking = $priceparking;
    }

    /**
     * Returns the rentparking
     * 
     * @return float rentparking
     */
    public function getRentparking() {
        return $this->rentparking;
    }

    /**
     * Sets the rentparking
     * 
     * @param float $rentparking
     * @return void
     */
    public function setRentparking($rentparking) {
        $this->rentparking = $rentparking;
    }

    /**
     * Returns the hidecontact
     * 
     * @return bool hidecontact
     */
    public function getHidecontact() {
        return $this->hidecontact;
    }

    /**
     * Sets the hidecontact
     * 
     * @param string $hidecontact
     * @return void
     */
    public function setHidecontact($hidecontact) {
        $this->hidecontact = $hidecontact;
    }
}
