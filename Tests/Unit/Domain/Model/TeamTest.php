<?php
namespace FupaNet\FupaNet\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Michael Hübe <typo3@huebe.it>
 */
class TeamTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \FupaNet\FupaNet\Domain\Model\Team
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \FupaNet\FupaNet\Domain\Model\Team();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );

    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getIdentifierReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getIdentifier()
        );

    }

    /**
     * @test
     */
    public function setIdentifierForStringSetsIdentifier()
    {
        $this->subject->setIdentifier('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'identifier',
            $this->subject
        );

    }
}
