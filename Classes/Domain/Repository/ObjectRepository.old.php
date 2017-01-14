<?php
namespace Newred\Trader\Domain\Repository;

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

use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;

/**
 * The repository for Objects
 */
class ObjectRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /**
     * @var array default ordering
     */
    protected $defaultOrderings = array(
        'isproject' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING,
        'featured' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING,
        'sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
    );

    /**
     * Get list constraints
     *
     * @param string $entryInclude what to inlcude: obj|pro|proobj
     * @return constrains
     */
    protected function createContraints(
        QueryInterface $query,
        $include = 'obj'
    ) {
        switch ($include) {
            case 'proobj':
                $foreign_uids = $this->createQuery()
                    ->statement('SELECT uid_foreign FROM tx_trader_object_objects_mm')
                    ->execute();
            	$constraints = [
            	    $query->equals('isproject', 1),
            	    $query->logicalNot($query->in('uid', $foreign_uids))
            	];
            	break;
            case 'pro':
            	$constraints = $query->equals('isproject', 1);
            	break;
            default:
            	$constraints = $query->equals('isproject', 0);
            	break;
        }
        
        return $constraints;
    }

    /**
     * Get list ordered with limits. Returns an array like:
     * 
     * @param integer $entryLimit number of entries: null (no limit) or integer
     * @return array list ordered with limits
     */

    public function findList($entryInclude, $entryLimit = null)
    {

        /** @var \TYPO3\CMS\Extbase\Persistence\Generic\Query $query */
        $query = $this->createQuery();

        $constraints[] = $this->createContraints(
            $query,
            $entryInclude
        );

        $query->matching($query->logicalAnd($constraints));
        if ($entryLimit !== null && intval($entryLimit) >= 1) {
            $query->setLimit((int)$entryLimit);
        }

        return $query->execute();
    }

}
