<?php
namespace FupaNet\FupaNet\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Michael Hübe <typo3@huebe.it>
 */
class TeamControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \FupaNet\FupaNet\Controller\TeamController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\FupaNet\FupaNet\Controller\TeamController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

}
