<?php
namespace FupaNet\FupaNet\Controller;

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
 * TeamController
 */
class TeamController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * teamRepository
     *
     * @var \FupaNet\FupaNet\Domain\Repository\TeamRepository
     * @inject
     */
    protected $teamRepository = null;

    /**
     * action team
     *
     * @return void
     */
    public function teamAction()
    {
        $team = $this->teamRepository->findByUid((int) $this->settings['team']);
        $widgetHash = $this->calculateWidgetHash($team->getUid());
        
        $this->view->assignMultiple([
            'team' => $team,
            'widgetHash' => $widgetHash
        ]);

    }
    /**
     * action stats
     *
     * 
     * @return void
     */
    public function statsAction()
    {
        $team = $this->teamRepository->findByUid((int) $this->settings['team']);
        $widgetHash = $this->calculateWidgetHash($team->getUid());

        $this->view->assignMultiple([
            'team' => $team,
            'widgetHash' => $widgetHash
        ]);
    }

    /**
     * action schedule
     *
     * @return void
     */
    public function scheduleAction()
    {
        $team = $this->teamRepository->findByUid((int) $this->settings['team']);
        $widgetHash = $this->calculateWidgetHash($team->getUid());

        $this->view->assignMultiple([
            'team' => $team,
            'widgetHash' => $widgetHash
        ]);
    }

    /**
     * action standings
     *
     * @return void
     */
    public function standingsAction()
    {
        $team = $this->teamRepository->findByUid((int) $this->settings['team']);
        $widgetHash = $this->calculateWidgetHash($team->getUid());

        $this->view->assignMultiple([
            'team' => $team,
            'widgetHash' => $widgetHash
        ]);
    }

    /**
     * @param $teamUid
     * @return int
     */
    protected function calculateWidgetHash($teamUid) {
        $contentObject = $this->configurationManager->getContentObject();
        return \TYPO3\CMS\Core\Utility\GeneralUtility::md5int($teamUid . $contentObject->data['uid']);
    }
}
