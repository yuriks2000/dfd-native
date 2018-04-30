<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }

$output .=  'body.dfd-custom-padding-html {'
				.'margin:'. (int)$vars['layout_whitespace_size'] .'px;'
			.'}'
			.'body.dfd-custom-padding-html .dfd-frame-line.line-top, body.dfd-custom-padding-html .dfd-frame-line.line-bottom {'
				.'height:'. (int)$vars['layout_whitespace_size'] .'px;'
			.'}'
			.'body.dfd-custom-padding-html .dfd-frame-line.line-left, body.dfd-custom-padding-html .dfd-frame-line.line-right {'
				.'width:'. (int)$vars['layout_whitespace_size'] .'px;'
			.'}'
			. 'body.dfd-custom-padding-html #header-container:not(.header-style-12):not(.header-style-13):not(.header-style-14) #header,body.dfd-custom-padding-html #header-container:not(.header-style-12):not(.header-style-13):not(.header-style-14) .header {'
				.'padding: 0 '. (int)$vars['layout_whitespace_size'] .'px;'
			. '}'
			.'body.dfd-custom-padding-html #top-panel-inner .top-panel-inner-wrapper {'
				. 'padding:0 '. (int)$vars['layout_whitespace_size'] .'px;'
			. '}'
			.'body.dfd-custom-padding-html #top-panel-inner .top-inner-page {'
				.'margin-right:'. (int)$vars['layout_whitespace_size'] .'px;'
			.'}'
			.'body.dfd-custom-padding-html .body-back-to-top {'
				.'right:'. ((int)$vars['layout_whitespace_size'] + 40) .'px;'
			.'}'
			.'body.dfd-custom-padding-html .body-back-to-top.visible {'
				.'bottom:'. ((int)$vars['layout_whitespace_size'] + 40) .'px;'
			.'}'
			.'body.dfd-custom-padding-html .body-back-to-top.visible.lifted {'
				.'bottom:'. ((int)$vars['layout_whitespace_size'] + 130) .'px;'
			.'}'
			.'@media only screen and (min-width: 800px) {'
				.'body.dfd-custom-padding-html .dfd-parallax-footer { margin-bottom:0; }'
				.'body.dfd-custom-padding-html .dfd-parallax-footer #footer-wrap {'
					.'padding-left:'. (int)$vars['layout_whitespace_size'] .'px;'
					.'padding-right:'. (int)$vars['layout_whitespace_size'] .'px;'
					.'margin-bottom:'. (int)$vars['layout_whitespace_size'] .'px;'
				.'}'
			.'}'
			.'body.dfd-custom-padding-html .dfd-single-pagination.fixed.lifted .page-inner-nav {'
				.'bottom:'. ((int)$vars['layout_whitespace_size'] + 30) .'px;'
			.'}'
			.'body.dfd-custom-padding-html .dfd-single-pagination.fixed .page-inner-nav.nav-prev {'
				.'left:'. ((int)$vars['layout_whitespace_size'] + 30) .'px;'
			.'}'
			.'body.dfd-custom-padding-html .dfd-single-pagination.fixed .page-inner-nav.nav-next {'
				.'right:'. ((int)$vars['layout_whitespace_size'] + 30) .'px;'
			.'}'
			.'@media only screen and (min-width: 640px) {'
				.'body.dfd-custom-padding-html div.dfd-custom-theme .pp_gallery {'
					.'width:auto;'
					.'bottom:'. (int)$vars['layout_whitespace_size'] .'px;'
					.'left:'. (int)$vars['layout_whitespace_size'] .'px;'
					.'right:'. (int)$vars['layout_whitespace_size'] .'px;'
				.'}'
				.'body.dfd-custom-padding-html a.pp_previous > span {'
					.'margin-right:-'. ((int)$vars['layout_whitespace_size'] + 36) .'px;'
				.'}'
				.'body.dfd-custom-padding-html a.pp_next > span {'
					.'margin-left:-'. ((int)$vars['layout_whitespace_size'] + 36) .'px;'
				.'}'
			.'}'
			.'.dfd-custom-padding-html #side-area {'
				.'top:'. (int)$vars['layout_whitespace_size'] .'px;'
				.'bottom:'. (int)$vars['layout_whitespace_size'] .'px;'
			.'}'
			.'.dfd-custom-padding-html #side-area.opened { right:'. (int)$vars['layout_whitespace_size'] .'px; }'
			.'.dfd-custom-padding-html #side-area.opened.side-area-left { left:'. (int)$vars['layout_whitespace_size'] .'px; }'
			.'.dfd-custom-padding-html.admin-bar #side-area { top:'. ((int)$vars['layout_whitespace_size'] + 32) .'px; }'
			.'.dfd-custom-padding-html.admin-bar .form-search-section { top:'. ((int)$vars['layout_whitespace_size'] + 32) .'px; }'
			.'body.admin-bar.dfd-custom-padding-html #qLoverlay #qLbar_wrap #qLbar.dfd-preloader-bar-top { top:'. ((int)$vars['layout_whitespace_size'] + 32) .'px; }'
			.'body.dfd-custom-padding-html #qLoverlay #qLbar_wrap #qLbar.dfd-preloader-bar-top { top:'. ((int)$vars['layout_whitespace_size'] + 32) .'px; }'
			.'body.dfd-custom-padding-html #qLoverlay #qLbar_wrap #qLbar.dfd-preloader-bar-bottom { bottom:'. (int)$vars['layout_whitespace_size'] .'px; }'
			.'.dfd-custom-padding-html .form-search-section {'
				.'top:'. (int)$vars['layout_whitespace_size'] .'px;'
				.'bottom:'. (int)$vars['layout_whitespace_size'] .'px;'
				.'left:'. (int)$vars['layout_whitespace_size'] .'px;'
				.'right:'. (int)$vars['layout_whitespace_size'] .'px;'
			.'}'
			.'@media only screen and (min-width: 1101px) {'
				.'body.dfd-custom-padding-html #header-container.menu-position-bottom:not(.small) { bottom:'. (int)$vars['layout_whitespace_size'] .'px; }'
				.'body.dfd-custom-padding-html #header-container.header-style-8 #header .header-wrap,'
				.'body.dfd-custom-padding-html #header-container.header-style-9 #header .header-wrap {'
					.'top:'. (int)$vars['layout_whitespace_size'] .'px;'
					.'bottom:'. (int)$vars['layout_whitespace_size'] .'px;'
					.'left:'. (int)$vars['layout_whitespace_size'] .'px;'
					.'right:'. (int)$vars['layout_whitespace_size'] .'px;'
				.'}'
				.'body.dfd-custom-padding-html #header-container.header-style-12 #header,'
				.'body.dfd-custom-padding-html #header-container.header-style-13 #header,'
				.'body.dfd-custom-padding-html #header-container.header-style-14 #header {'
					.'top:'. (int)$vars['layout_whitespace_size'] .'px;'
					.'bottom:'. (int)$vars['layout_whitespace_size'] .'px;'
					.'left:'. (int)$vars['layout_whitespace_size'] .'px;'
				.'}'
				.'body.dfd-custom-padding-html #header-container.header-style-12.right,'
				.'body.dfd-custom-padding-html #header-container.header-style-13.right,'
				.'body.dfd-custom-padding-html #header-container.header-style-14.right {'
					.'right:'. (int)$vars['layout_whitespace_size'] .'px;'
				.'}'
				.'body.dfd-custom-padding-html.admin-bar #header-container.header-style-8 #header .header-wrap,'
				.'body.dfd-custom-padding-html.admin-bar #header-container.header-style-9 #header .header-wrap {'
					.'top:'. ((int)$vars['layout_whitespace_size'] + 32) .'px;'
				.'}'
				.'body.dfd-custom-padding-html.admin-bar #header-container.header-style-12 #header,'
				.'body.dfd-custom-padding-html.admin-bar #header-container.header-style-13 #header,'
				.'body.dfd-custom-padding-html.admin-bar #header-container.header-style-14 #header {'
					.'top:'. ((int)$vars['layout_whitespace_size'] + 32) .'px;'
				.'}'
			.'}'
			.'body.dfd-custom-padding-html #top-panel-inner {'
				. 'margin-top:'. (int)$vars['layout_whitespace_size'] .'px;'
			. '}'
			.'body.admin-bar.dfd-custom-padding-html #top-panel-inner {'
				. 'margin-top:'. ((int)$vars['layout_whitespace_size'] + 32) .'px;'
			. '}'
			.'@media only screen and (min-width: 640px) and (max-width: 782px) {'
				.'body.dfd-custom-padding-html.admin-bar .form-search-section {'
					. 'top: '. ((int)$vars['layout_whitespace_size'] + 46) .'px;'
				.'}'
			.'}'
			.'@media only screen and (max-width: 782px) {'
				.'body.admin-bar.dfd-custom-padding-html #wpadminbar {'
					. 'padding:0 '. (int)$vars['layout_whitespace_size'] .'px;'
				. '}'
			.'}'
			.'@media only screen and (max-width: '. (1068 + (int)$vars['layout_whitespace_size'] * 2) .'px) {'
				.'body.dfd-custom-padding-html #header-container.header-style-5 +  #main-wrap .row {'
					. 'min-width: 0;'
					. 'width: auto;'
				. '}'
			.'}'
			.'@media only screen and (min-width: 799px) {'
				.'body.dfd-custom-padding-html .tp-leftarrow.custom {'
					.'margin-left:'. (int)$vars['layout_whitespace_size'] .'px;'
				.'}'
				.'body.dfd-custom-padding-html .tp-rightarrow.custom {'
					.'margin-right:'. (int)$vars['layout_whitespace_size'] .'px;'
				.'}'
			.'}'
			.'.dfd-custom-padding-html .dfd-parallax-bg-container.active {'
				.'left:0;'
			.'}'
			.'.dfd-custom-padding-html .dfd-parallax-bg-container.active > div {'
				.'left:'. (int)$vars['layout_whitespace_size'] .'px !important;'
				.'right:'. (int)$vars['layout_whitespace_size'] .'px !important;'
			.'}'
			.'.dfd-custom-padding-html.admin-bar .dfd-full-screen-scroll-content-wrapper { padding-top:'. ((int)$vars['layout_whitespace_size'] + 32) .'px; }'
			.'.dfd-custom-padding-html .dfd-full-screen-scroll-content-wrapper { padding-top:'. (int)$vars['layout_whitespace_size'] .'px; }'
			.'.dfd-custom-padding-html #multiscroll-nav.right { margin-right:'. (int)$vars['layout_whitespace_size'] .'px; }'
			.'.dfd-custom-padding-html #multiscroll-nav.left { margin-left:'. (int)$vars['layout_whitespace_size'] .'px; }'
			.'body.dfd-custom-padding-html .dfd-fullscreen-video-container {'
				.'top:'. (int)$vars['layout_whitespace_size'] .'px;'
				.'bottom:'. (int)$vars['layout_whitespace_size'] .'px;'
				.'left:'. (int)$vars['layout_whitespace_size'] .'px;'
				.'right:'. (int)$vars['layout_whitespace_size'] .'px;'
			.'}'
			.'body.dfd-custom-padding-html .woocommerce.woo-msg { top:'. (int)$vars['layout_whitespace_size'] .'px !important; }'
			. 'body.dfd-custom-padding-html #fp-nav.left {left:'. ((int)$vars['layout_whitespace_size'] + 17) .'px !important;}'
			. 'body.dfd-custom-padding-html #fp-nav.right {right:'. ((int)$vars['layout_whitespace_size'] + 17) .'px !important;}'
			. 'body.dfd-custom-padding-html .sidr {'
				.'padding-top:'. ((int)$vars['layout_whitespace_size']) .'px;'
				.'padding-bottom:'. ((int)$vars['layout_whitespace_size']) .'px;'
				.'padding-left:'. ((int)$vars['layout_whitespace_size']) .'px;'
			. '}'
			. 'body.dfd-custom-padding-html .sidr .sidr-widgets {'
				.'padding-left:'. ((int)$vars['layout_whitespace_size'] + 25) .'px;'
			. '}'
			. 'body.admin-bar.dfd-custom-padding-html .sidr {'
				.'padding-top:'. ((int)$vars['layout_whitespace_size'] + 32) .'px;'
			. '}'
			. '@media only screen and (max-width: 782px) {body.admin-bar.dfd-custom-padding-html .sidr{'
				.'padding-top:'. ((int)$vars['layout_whitespace_size'] + 46) .'px;'
			. '}}';

$output .= 'body.dfd-custom-padding-html .dfd-frame-line.line-left,'
		. 'body.dfd-custom-padding-html .dfd-frame-line.line-right,'
		. 'body.dfd-custom-padding-html .dfd-frame-line.line-top,'
		. 'body.dfd-custom-padding-html .dfd-frame-line.line-bottom {'
			. 'background: '.$vars['layout_whitespace_color']
		. '}';

$output .= 'body.dfd-custom-padding-html.side-area-opened #side-area {'
			. '-webkit-transform: translateX(-'. (int)$vars['layout_whitespace_size'] .'px);'
			. '-moz-transform: translateX(-'. (int)$vars['layout_whitespace_size'] .'px);'
			. '-o-transform: translateX(-'. (int)$vars['layout_whitespace_size'] .'px);'
			. 'transform: translateX(-'. (int)$vars['layout_whitespace_size'] .'px);'
		. '}';