{"version":3,"file":"script.min.js","sources":["script.js"],"names":["window","BX","CatalogMenu","items","idCnt","currentItem","overItem","outItem","timeoutOver","timeoutOut","getItem","item","type","isDomNode","id","isNotEmptyString","this","CatalogMenuItem","itemOver","menuItem","clearTimeout","setTimeout","itemOut","removeHover","curItem","parentNode","querySelectorAll","i","length","hasClass","removeClass","element","popup","findChild","className","isLastItem","lastChild","prototype","addClass","popupRightEdge","getBoundingClientRect","left","offsetWidth","document","body","clientWidth","style","right","namespace","Main","Menu","CatalogHorizontal","menuBlockId","itemImgDesc","resizeMenu","bind","proxy","clickInMobile","event","findParent","preventDefault","onclick","toggleInMobile","parentObj","arrow","firstChild","templateWrap","menuMobile","querySelector","menuMobileButton","create","attrs","data-role","children","clone","insertBefore","events","click","overflow","changeSectionPicure","itemId","curLi","imgDescObj","imgObj","tagName","src","linkObj","href","descObj","innerHTML"],"mappings":"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"}