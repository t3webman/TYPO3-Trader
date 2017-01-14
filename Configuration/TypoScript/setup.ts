
<INCLUDE_TYPOSCRIPT:source="DIR: EXT:trader/Configuration/TypoScript/Setup" extensione="ts">

plugin.tx_trader_objects {
  view {
    templateRootPaths {
      0 = EXT:trader/Resources/Private/Templates/
      1 = {$trader_theme.view.templateRootPath}
    }
    partialRootPaths {
      0 = EXT:trader/Resources/Private/Partials/
      1 = {$trader_theme.view.partialRootPath}
    }
    layoutRootPaths {
      0 = EXT:trader/Resources/Private/Layouts/
      1 = {$trader_theme.view.layoutRootPath}
    }
  }
  persistence {
    storagePid = {$plugin.tx_trader.persistence.storagePid},{$plugin.tx_trader.persistence.detailsPid}
    classes {
      Newred\Trader\Domain\Model\Details {
        newRecordStoragePid = {$plugin.tx_trader.persistence.detailsPid}
      }
    }
  }
  settings {
    titleCrop = 32
    teaserCrop = 200
    currencySign = {$plugin.tx_trader.settings.currencySign}
    decimals = {$plugin.tx_trader.settings.decimals}
    surfaceMeasure = {$plugin.tx_trader.settings.surfaceMeasure}

    paginate {
      displayDots = {$plugin.tx_trader.settings.displayDots}
      insertAbove = {$plugin.tx_trader.settings.insertAbove}
      insertBelow = {$plugin.tx_trader.settings.insertBelow}
      maximumVisiblePages = {$plugin.tx_trader.settings.maximumVisiblePages}
    }

    # 2560x1440 : 1920x1080 : 1280x720 : 960x560 : 640x360 : 480x270 : 320x180 : 160x90
    detail {
      media {
        image {
          maxWidth = 1920
          maxHeight = 900
        }
        thumb {
          maxWidth = 320
          maxHeight = 150
        }
        fullScreen = 2560
        noBackground = typo3conf/ext/trader/Resources/Public/Images/no-background.png
      }
    }

    list {
      media {
        image {
          maxWidth = 640
          maxHeight = 360
        }
        noImage = typo3conf/ext/trader/Resources/Public/Images/no-photo.png
      }
    }
  }
}
