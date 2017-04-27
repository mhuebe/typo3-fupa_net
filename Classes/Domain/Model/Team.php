<?php
namespace FupaNet\FupaNet\Domain\Model;

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
 * Team
 */
class Team extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Teamname
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * identifier
     *
     * @var string
     * @validate NotEmpty
     */
    protected $identifier = '';

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the identifier
     *
     * @return string $identifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets the identifier
     *
     * @param string $identifier
     * @return void
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }
}
