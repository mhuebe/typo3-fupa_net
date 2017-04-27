
plugin.tx_fupanet_team {
    view {
        templateRootPaths.0 = EXT:fupa_net/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_fupanet_team.view.templateRootPath}
        partialRootPaths.0 = EXT:fupa_net/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_fupanet_team.view.partialRootPath}
        layoutRootPaths.0 = EXT:fupa_net/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_fupanet_team.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_fupanet_team.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

page.includeJS {
    fupa_widget = //www.fupa.net/fupa/widget.min.js
    fupa_widget.external = 1
    fupa_widget.disableCompression = 1
}