
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

plugin.tx_fupanet._CSS_DEFAULT_STYLE (
        textarea.f3-form-error {
                background-color:#FF9F9F;
                border: 1px #FF0000 solid;
        }

        input.f3-form-error {
                background-color:#FF9F9F;
                border: 1px #FF0000 solid;
        }

        .{extension.cssClassName} table {
                border-collapse:separate;
                border-spacing:10px;
        }

        .{extension.cssClassName} table th {
                font-weight:bold;
        }

        .{extension.cssClassName} table td {
                vertical-align:top;
        }

        .typo3-messages .message-error {
                color:red;
        }

        .typo3-messages .message-ok {
                color:green;
        }
)
