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

use TYPO3\CMS\Extbase\Persistence\Generic\Query;
use TYPO3\CMS\Extbase\Persistence\Generic\QueryResult;
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
     * Get list ordered with limits. Returns an array like:
     *
     * @param string $entryInclude what to inlcude: obj|pro|proobj
     * @param integer $entryLimit number of entries: null
     * @return QueryResult
     */
    public function findList($entryInclude = 'obj', $entryLimit = null)
    {
        $result = null;
        switch ($entryInclude) {
            case 'obj':
                $result = $this->findByIsproject(0, (int)$entryLimit);
                break;
            case 'pro':
                $result = $this->findByIsproject(1, (int)$entryLimit);
                break;
            case 'proobj':
                $result = $this->findProjectless((int)$entryLimit);
                break;
        }
        return $result;
    }

    /**
     * Find by isproject
     * 
     * @param integer $isprojekt Boolean value for field isproject to search for
     * @param integer $limit Max count query results
     * @return QueryResult
     */
    public function findByIsproject($isprojekt = 0, $limit = null)
    {
        /** @var Query $query */
        $query = $this->createQuery();
        $constraints = $query->equals('isproject', intval($isprojekt));
        $query->matching($constraints);
        if ($limit !== null && intval($limit) >= 1) {
            $query->setLimit((int)$limit);
        }
        return $query->execute();
    }

    /**
     * Find projectless
     * Searches for all objects, which are part of projects, and uses them as exclude constraint
     * !Attention: this query can be memory intensiv, when thousands of db entries are involved.
     * For better perfomance, data modelling should adapted.
     * 
     * @param integer $limit Max count query results
     * @return QueryResult
     */
    public function findProjectless($limit = null)
    {
        $projectsObjects = [];
        /** @var QueryResult $projects */
        $projects = $this->findByIsproject(1);
        if ($projects instanceof QueryResult) {
            if (!empty($projects)) {
                foreach ($projects as $project) {
                    $projectObjects = $project->getObjects();
                    if (!empty($projectObjects)) {
                        foreach ($projectObjects as $projectObject) {
                            $projectsObjects[] = $projectObject;
                        }
                    }
                }
            }
        }

        /** @var Query $query */
        $query = $this->createQuery();
        $constraints = [
            $query->equals('isproject', 1),
            $query->logicalNot($query->in('uid', $projectsObjects))
        ];
        $query->matching($query->logicalOr($constraints));
        if ($limit !== null && intval($limit) >= 1) {
            $query->setLimit((int)$limit);
        }
        return $query->execute();
    }

    /**
     * Count list with limits.
     *
     * @return QueryResult
     */
    public function countList()
    {
    	$objects = [];
    	$objects['total'] = $this->createQuery()->execute()->count();
        return $objects;
    }
}
