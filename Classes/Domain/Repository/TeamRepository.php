<?php
namespace FupaNet\FupaNet\Domain\Repository;

/***
 *
 * This file is part of the "Fupa.net" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Michael Hübe <typo3@huebe.it>
 *
 ***/

/**
 * The repository for Teams
 */
class TeamRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * @var array
     */
    protected $defaultOrderings = [
        'sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
    ];
}
