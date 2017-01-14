
# customsubcategory=settings=Settings:
# customsubcategory=storage=Storage:

plugin.tx_trader {
  settings {
    # cat=plugin.tx_trader/settings/05; type=options[Chf, €, $]; label=Currency Sign
    currencySign = $
    # cat=plugin.tx_trader/settings/10;  type=int+; label=Decimals
    decimals = 0
    # cat=plugin.tx_trader/settings/15; type=options[sqm, sqft]; label=Surface Measure
    surfaceMeasure = sqft
    # cat=plugin.tx_trader/settings/20; type=boolean; label=Dots in pagination
    displayDots = 1
    # cat=plugin.tx_trader/settings/25; type=boolean; label=Pagination above listing
    insertAbove = 0
    # cat=plugin.tx_trader/settings/30; type=boolean; label=Pagination below listing
    insertBelow = 1
    # cat=plugin.tx_trader/settings/35;  type=int+; label=Pagination visible pages
    maximumVisiblePages = 7
  }
  persistence {
    # cat=plugin.tx_trader/storage/a; type=string; label=Default storage PID
    storagePid =
    # cat=plugin.tx_trader/storage/b; type=string; label=Details storage PID
    detailsPid =
  }
}
