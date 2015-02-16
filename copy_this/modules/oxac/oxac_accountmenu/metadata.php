<?php

/**
 * Metadata version
 */
$sMetadataVersion = '1.2';

/**
 * Module information
 */
$aModule = array(
	    'id'			=> 'oxac_accountmenu',
	    'title'			=> array(
				'de'		=> '&bdquo;Mein Konto&rdquo;-Menü für CMS-Seiten',
				'en'		=> '&quot;My Account&quot; menu für cms pages',
	    ),
	    'description'	=> array(
				'de'		=> 'Blendet das Menü aus dem Bereich &quot;Mein Konto&quot; auf CMS-Seiten ein, deren Ident &quot;oxac_my&quot; enthält.',
				'en'		=> 'Displays the &quot;My Account&quot; menu on cms pages that have an ident containing &quot;oxac_my&quot;.',
	    ),
	    'thumbnail'		=> '',
	    'version'		=> '0.3.1',
	    'author'		=> 'Johannes Ackermann',
	    'url'			=> 'http://www.oxid-esales.com/',
	    'email'			=> 'johannes.ackermann@oxid-esales.com',
	    'extend'		=> array(
	    		'oxviewconfig'			=>	'oxac/oxac_accountmenu/core/oxac_accountmenu_oxviewconfig',
	    ),
		'blocks'		=>	array(				
				array(
						'template'	=> 'layout/sidebar.tpl',
						'block'		=> 'sidebar_categoriestree',
						'file'		=> 'views/blocks/sidebaraccountmenu.tpl'
				),
				array(
						'template'	=> 'widget/header/servicebox.tpl',
						'block'		=> 'widget_header_servicebox_items',
						'file'		=> 'views/blocks/headeraccountmenu.tpl'
				),
		),
);
