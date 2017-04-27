
plugin.tx_fupanet_team {
    view {
        # cat=plugin.tx_fupanet_team/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:fupa_net/Resources/Private/Templates/
        # cat=plugin.tx_fupanet_team/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:fupa_net/Resources/Private/Partials/
        # cat=plugin.tx_fupanet_team/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:fupa_net/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_fupanet_team//a; type=string; label=Default storage PID
        storagePid =
    }
}
