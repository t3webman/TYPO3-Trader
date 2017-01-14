<?php
namespace Newred\Trader\Controller;

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
 * DetailsController
 */
class DetailsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {
    /**
     * detailRepository
     * 
     * @var \Newred\Trader\Domain\Repository\DetailsRepository
     * @inject
     */
    protected $detailsRepository = null;

    /**
     * action create
     * 
     * @return void
     */
    public function createAction() {
        $detail->setPid($this->settings['detailPid']);
        $this->detailsRepository->add($detail);
    }
}
