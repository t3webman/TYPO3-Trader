<?php

$ll = 'LLL:EXT:trader/Resources/Private/Language/locallang_be.xlf:';
return [
    'ctrl' => [
        'title'	=> $ll . 'tx_trader_domain_model_object',
        'label' => 'reference',
        'label_userFunc' => 'Newred\\Trader\\Userfuncs\\Tca->objectTitle',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => 1,
		'versioningWS' => 2,
        'versioning_followPages' => true,
        'sortby' => 'sorting',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
        'enablecolumns' => [
			'disabled' => 'hidden',
			'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'requestUpdate' => 'isproject,marketing',
        'searchFields' => 'reference,tag,featured,title,teaser,description,details,status,builddate,availdate,auctiondate,rented,rentdate,isproject,objects,marketing,categories,street,number,zip,city,regio,province,country,latitude,longitude,hideadress,hidecontact,far,fsi,areatotal,areausable,arealiving,areabase,floor,floors,norooms,nobedrooms,nobathrooms,noparking,typeparking,pricetotal,pricesqm,pricetax,priceinc,pricereserved,rent,pricedeposit,commisionint,commintinc,commisionext,commextinc,priceparking,rentparking,heating,expenses,images,floorplans,video,documents,features,contact,owner,broker',
        'iconfile' => 'EXT:trader/Resources/Public/Icons/ext_object.svg'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, reference, tag, featured, title, teaser, description, details, status, builddate, availdate, auctiondate, rented, rentdate, isproject, objects, marketing, categories, street, number, zip, city, region, province, country, latitude, longitude, hideadress, hidecontact, far, fsi, areatotal, areausable, arealiving, areabase, floor, floors, norooms, nobedrooms, nobathrooms, noparking, typeparking, pricetotal, pricesqm, pricetax, priceinc, pricereserved, rent, pricedeposit, commisionint, commintinc, commisionext, commextinc, priceparking, rentparking, heating, expenses, images, floorplans, video, documents, features, contact, owner, broker',
    ],
    'types' => [
        '1' => [
        	'showitem' => '
        			--palette--;;paletteReference,
        			--palette--;;paletteProject,
        			title, teaser, description,
        		--div--;' . $ll . 'tx_trader_domain_model_object.details, details,
        		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
        			--palette--;;paletteLanguage,
        			--palette--;;paletteTiming,
        			categories,
        		--div--;' . $ll . 'tx_trader_domain_model_object.tab.marketing,
        			marketing, status,
        			--palette--;;paletteMarketing,
        		--div--;' . $ll . 'tx_trader_domain_model_object.tab.address,
        			--palette--;;paletteStreet,
        			--palette--;;paletteZip, country,
        			--palette--;;paletteGeo, hideadress,
        		--div--;' . $ll . 'tx_trader_domain_model_object.tab.contacts,
        			contact, owner, broker, hidecontact,
        		--div--;' . $ll . 'tx_trader_domain_model_object.tab.features,
        			--palette--;;paletteFar,
        			--palette--;;paletteArea,
        			--palette--;;paletteFloor,
        			--palette--;;paletteRooms,
        			typeparking, features,
        		--div--;' . $ll . 'tx_trader_domain_model_object.tab.financial,
        			--palette--;;palettePrice,
        			--palette--;;paletteRent,
        			--palette--;;paletteCommInt,
        			--palette--;;paletteCommExt,
        			--palette--;;paletteParking,
        			heating, expenses,
        		--div--;' . $ll . 'tx_trader_domain_model_object.tab.media, images, floorplans, video, documents'
        	],
    ],
    'palettes' => [
        'paletteReference' => [
            'showitem' => 'reference, tag, featured',
            'canNotCollapse' => true
        ],
        'paletteProject' => [
            'showitem' => 'isproject, --linebreak--, objects',
            'canNotCollapse' => true
        ],
        'paletteLanguage' => [
            'showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden',
            'canNotCollapse' => true
        ],
        'paletteTiming' => [
            'showitem' => 'starttime, endtime',
            'canNotCollapse' => true
        ],
        'paletteMarketing' => [
            'showitem' => 'builddate, availdate, --linebreak--, auctiondate, rented, rentdate',
            'canNotCollapse' => true
        ],
        'paletteStreet' => [
            'showitem' => 'street, number',
            'canNotCollapse' => true
        ],
        'paletteZip' => [
            'showitem' => 'zip, city, region, province',
            'canNotCollapse' => true
        ],
        'paletteGeo' => [
            'showitem' => 'latitude, longitude',
            'canNotCollapse' => true
        ],
        'paletteFar' => [
            'showitem' => 'far, fsi',
            'canNotCollapse' => true
        ],
        'paletteArea' => [
            'showitem' => 'areatotal, areausable, arealiving, areabase',
            'canNotCollapse' => true
        ],
        'paletteFloor' => [
            'showitem' => 'floor, floors',
            'canNotCollapse' => true
        ],
        'paletteRooms' => [
            'showitem' => 'norooms, nobedrooms, nobathrooms, noparking',
            'canNotCollapse' => true
        ],
        'palettePrice' => [
            'showitem' => 'pricetotal, pricesqm, pricereserved, --linebreak--, pricetax, priceinc',
            'canNotCollapse' => true
        ],
        'paletteRent' => [
            'showitem' => 'rent, pricedeposit',
            'canNotCollapse' => true
        ],
        'paletteCommInt' => [
            'showitem' => 'commisionint, commintinc',
            'canNotCollapse' => true
        ],
        'paletteCommExt' => [
            'showitem' => 'commisionext, commextinc',
            'canNotCollapse' => true
        ],
        'paletteParking' => [
            'showitem' => 'priceparking, rentparking',
            'canNotCollapse' => true
        ],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages'
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_trader_domain_model_object',
                'foreign_table_where' => 'AND tx_trader_domain_model_object.pid=###CURRENT_PID### AND tx_trader_domain_model_object.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'sorting' => [
            'config' => [
            	'type' => 'passthrough',
            ],
        ],
        'starttime' => [
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => [
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ],
            ],
        ],
        'endtime' => [
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => [
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ],
            ],
        ],

	    'reference' => [
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.reference',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'trim'
			],
	        
	    ],
	    'tag' => [
	        'exclude' => 0,
	        'label' => $ll . 'tx_trader_domain_model_object.tag',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'items' => [
			        [$ll . 'tx_trader_domain_model_object.select.none' , 0]
			    ],
			    'foreign_table' => 'tx_trader_domain_model_tags',
			    'foreign_table_where' => ' AND tx_trader_domain_model_tags.sys_language_uid IN (-1, 0) ORDER BY tx_trader_domain_model_tags.tag',
			    'MM' => 'tx_trader_object_tags_mm',
			    'maxitems' => 1,
			    'multiple' => 0,
			    'default' => 0,
/*			    'wizards' => [
			        '_PADDING' => 1,
			        '_HORIZONTAL' => 1,
			        'edit' => [
			            'module' => [
			                'name' => 'wizard_edit',
			            ],
			            'type' => 'popup',
			            'title' => 'Edit', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.edit
			            'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_edit.gif',
			            'popup_onlyOpenIfSelected' => 1,
			            'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
			        ],
			        'add' => [
			            'module' => [
			                'name' => 'wizard_add',
			            ],
			            'type' => 'script',
			            'title' => 'Create new', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.add
			            'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_add.gif',
			            'params' => [
			                'table' => 'tx_trader_domain_model_tags',
			                'pid' => '###CURRENT_PID###',
			                'setValue' => 'prepend'
			            ],
			        ],
			    ],*/
			],

	    ],
	    'featured' => [
	        'exclude' => 0,
	        'label' => $ll . 'tx_trader_domain_model_object.featured',
	        'config' => [
			    'type' => 'check',
			    'items' => [
			        '1' => [
			            '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
			        ]
			    ],
			    'default' => 0
			]
	        
	    ],
	    'isproject' => [
	        'displayCond' => 'USER:Newred\\Trader\\Userfuncs\\DisplayConditionMatcher->displayObjectNoMM:negate',
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.isproject',
	        'config' => [
			    'type' => 'check',
			    'items' => [
			        '1' => [
			            '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
			        ]
			    ],
			    'default' => 0
			]
	        
	    ],
	    'objects' => [
	        'displayCond' => 'FIELD:isproject:=:1',
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.objects',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectMultipleSideBySide',
			    'foreign_table' => 'tx_trader_domain_model_object',
			    'foreign_table_where' => 'AND isproject = 0 AND tx_trader_domain_model_object.uid NOT IN (SELECT uid_foreign FROM tx_trader_object_object_mm WHERE uid_local != ###THIS_UID###)',
			    'MM' => 'tx_trader_object_object_mm',
			    'size' => 10,
			    'autoSizeMax' => 30,
			    'maxitems' => 9999,
			    'multiple' => 0,
/*			    'wizards' => [
			        '_PADDING' => 1,
			        '_VERTICAL' => 1,
			        'edit' => [
			            'module' => [
			                'name' => 'wizard_edit',
			            ],
			            'type' => 'popup',
			            'title' => 'Edit', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.edit
			            'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_edit.gif',
			            'popup_onlyOpenIfSelected' => 1,
			            'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
			        ],
			        'add' => [
			            'module' => [
			                'name' => 'wizard_add',
			            ],
			            'type' => 'script',
			            'title' => 'Create new', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.add
			            'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_add.gif',
			            'params' => [
			                'table' => 'tx_trader_domain_model_features',
			                'pid' => '###CURRENT_PID###',
			                'setValue' => 'prepend'
			            ],
			        ],
			    ],*/
			],
	        
	    ],
	    'title' => [
	        'exclude' => 0,
	        'label' => $ll . 'tx_trader_domain_model_object.title',
	        'config' => [
			    'type' => 'input',
			    'size' => 60,
			    'eval' => 'trim,required'
			],
	        
	    ],
	    'teaser' => [
	        'exclude' => 0,
	        'label' => $ll . 'tx_trader_domain_model_object.teaser',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 5,
			    'eval' => 'trim'
			],
	        /* 'defaultExtras' => 'richtext:rte_transform[mode=ts_css]' */
	        
	    ],
	    'description' => [
	        'exclude' => 0,
	        'label' => $ll . 'tx_trader_domain_model_object.description',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 15,
			    'eval' => 'trim,required'
			],
	        /* 'defaultExtras' => 'richtext:rte_transform[mode=ts_css]' */
	        
	    ],
	    'details' => [
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.details',
	        'config' => [
			    'type' => 'inline',
			    'foreign_table' => 'tx_trader_domain_model_details',
			    'foreign_field' => 'object',
			    'maxitems' => 10,
			    'appearance' => [
			        'collapseAll' => 1,
			        'levelLinksPosition' => 'top',
			        'showSynchronizationLink' => 1,
			        'showPossibleLocalizationRecords' => 1,
			        'showAllLocalizationLink' => 1
			    ],
			],

	    ],
	    'marketing' => [
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.marketing',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'items' => [
			        [$ll . 'tx_trader_domain_model_object.marketing.0', null],
			        [$ll . 'tx_trader_domain_model_object.marketing.1', 1],
			        [$ll . 'tx_trader_domain_model_object.marketing.2', 2],
			    ],
			    'size' => 1,
			    'maxitems' => 1,
			    'eval' => 'required'
			],
	        
	    ],
	    'status' => [
	        'displayCond' => 'FIELD:isproject:=:0',
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.status',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'items' => [
			        [$ll . 'tx_trader_domain_model_object.status.0', 0],
			        [$ll . 'tx_trader_domain_model_object.status.1', 1],
			        [$ll . 'tx_trader_domain_model_object.status.2', 2],
			        [$ll . 'tx_trader_domain_model_object.status.3', 3],
			    ],
			    'size' => 1,
			    'maxitems' => 1,
			    'eval' => ''
			],
	        
	    ],
	    'builddate' => [
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.builddate',
	        'config' => [
			    'dbType' => 'date',
			    'type' => 'input',
			    'size' => 7,
			    'eval' => 'date',
			    'checkbox' => 0,
			    'default' => '0000-00-00'
			]
	        
	    ],
	    'availdate' => [
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.availdate',
	        'config' => [
			    'dbType' => 'date',
			    'type' => 'input',
			    'size' => 7,
			    'eval' => 'date',
			    'checkbox' => 0,
			    'default' => '0000-00-00'
			]
	        
	    ],
	    'auctiondate' => [
	        'displayCond' => 'FIELD:isproject:=:0',
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.auctiondate',
	        'config' => [
			    'dbType' => 'date',
			    'type' => 'input',
			    'size' => 7,
			    'eval' => 'date',
			    'checkbox' => 0,
			    'default' => '0000-00-00'
			]
	        
	    ],
	    'rented' => [
	        'displayCond' => 'FIELD:isproject:=:0',
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.rented',
	        'config' => [
			    'type' => 'check',
			    'items' => [
			        '1' => [
			            '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
			        ]
			    ],
			    'default' => 0
			]
	        
	    ],
	    'rentdate' => [
	        'displayCond' => 'FIELD:isproject:=:0',
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.rentdate',
	        'config' => [
			    'dbType' => 'date',
			    'type' => 'input',
			    'size' => 7,
			    'eval' => 'date',
			    'checkbox' => 0,
			    'default' => '0000-00-00'
			],
	        
	    ],
	    'categories' => [
	    	'exclude' => 1,
	    	'l10n_mode' => 'mergeIfNotBlank',
	    	'label' => $ll . 'tx_trader_domain_model_object.categories',
	    	'config' => [
	    		'type' => 'select',
	    		'renderType' => 'selectTree',
	    		'treeConfig' => [
	    			'dataProvider' => \Newred\Trader\TreeProvider\DatabaseTreeDataProvider::class,
	    			'parentField' => 'parent',
	    			'appearance' => [
	    				'showHeader' => true,
	    				'expandAll' => true,
	    				'maxLevels' => 99,
	    			],
	    		],
	    		'MM' => 'sys_category_record_mm',
	    		'MM_match_fields' => [
	    			'fieldname' => 'categories',
	    			'tablenames' => 'tx_trader_domain_model_object',
	    		],
	    		'MM_opposite_field' => 'items',
	    		'foreign_table' => 'sys_category',
	    		'foreign_table_where' => ' AND (sys_category.sys_language_uid = 0 OR sys_category.l10n_parent = 0) ORDER BY sys_category.sorting',
	    		'size' => 10,
	    		'minitems' => 0,
	    		'maxitems' => 99,
	    	]
	    ],
	    'street' => [
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.street',
	        'config' => [
			    'type' => 'input',
			    'size' => 20,
			    'eval' => 'trim'
			],
	        
	    ],
	    'number' => [
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.number',
	        'config' => [
			    'type' => 'input',
			    'size' => 4,
			    'eval' => 'trim'
			],
	        
	    ],
	    'zip' => [
	        'exclude' => 0,
	        'label' => $ll . 'tx_trader_domain_model_object.zip',
	        'config' => [
			    'type' => 'input',
			    'size' => 6,
			    'eval' => 'trim,required'
			],
	        
	    ],
	    'city' => [
	        'exclude' => 0,
	        'label' => $ll . 'tx_trader_domain_model_object.city',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'trim,required'
			],
	        
	    ],
	    'region' => [
	        'exclude' => 0,
	        'label' => $ll . 'tx_trader_domain_model_object.region',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'trim'
			],
	        
	    ],
	    'province' => [
	        'exclude' => 0,
	        'label' => $ll . 'tx_trader_domain_model_object.province',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'trim'
			],
	        
	    ],
	    'country' => [
	        'exclude' => 0,
	        'label' => $ll . 'tx_trader_domain_model_object.country',
	        'config' => [
	        	'type' => 'select',
	        	'renderType' => 'selectSingle',
	        	'items' => [
	        		[$ll . 'tx_trader_domain_model_object.country.0', 0],
	        		[$ll . 'tx_trader_domain_model_object.country.1', 1],
	        		[$ll . 'tx_trader_domain_model_object.country.2', 2],
	        	],
	        	'size' => 1,
	        	'maxitems' => 1,
	        	'eval' => 'required'
	            ],
	        
	    ],
	    'latitude' => [
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.latitude',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'trim'
			]
	        
	    ],
	    'longitude' => [
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.longitude',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'trim'
			],
	        
	    ],
	    'hideadress' => [
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.hideadress',
	        'config' => [
			    'type' => 'check',
			    'items' => [
			        '1' => [
			            '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
			        ]
			    ],
			    'default' => 0
			]
	        
	    ],
	    'contact' => [
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.contact',
	        'config' => [
			    'type' => 'select',
			    'items' => [
			        [$ll . 'tx_trader_domain_model_object.select.none' , 0]
			    ],
			    'foreign_table' => 'tx_trader_domain_model_contacts',
			    'foreign_field' => 'contactname',
			    'maxitems' => 1,
			    'default' => 0
			],
	        
	    ],
	    'owner' => [
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.owner',
	        'config' => [
			    'type' => 'select',
			    'items' => [
			        [$ll . 'tx_trader_domain_model_object.select.none' , 0]
			    ],
			    'foreign_table' => 'tx_trader_domain_model_contacts',
			    'foreign_field' => 'contactname',
			    'maxitems' => 1,
			    'default' => 0
			],
	        
	    ],
	    'broker' => [
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.broker',
	        'config' => [
			    'type' => 'select',
			    'items' => [
			        [$ll . 'tx_trader_domain_model_object.select.none' , 0]
			    ],
			    'foreign_table' => 'tx_trader_domain_model_contacts',
			    'foreign_field' => 'contactname',
			    'maxitems' => 1,
			    'default' => 0
			],
	        
	    ],
	    'hidecontact' => [
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.hidecontact',
	        'config' => [
			    'type' => 'check',
			    'items' => [
			        '1' => [
			            '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
			        ]
			    ],
			    'default' => 0
			]
	        
	    ],
	    'far' => [
	        'displayCond' => 'FIELD:isproject:=:0',
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.far',
	        'config' => [
			    'type' => 'input',
			    'size' => 4,
			    'eval' => 'double2'
			]
	        
	    ],
	    'fsi' => [
	        'displayCond' => 'FIELD:isproject:=:0',
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.fsi',
	        'config' => [
			    'type' => 'input',
			    'size' => 4,
			    'eval' => 'double2'
			]
	        
	    ],
	    'areatotal' => [
	        'displayCond' => 'FIELD:isproject:=:0',
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.areatotal',
	        'config' => [
			    'type' => 'input',
			    'size' => 4,
			    'eval' => 'double2,required'
			]
	        
	    ],
	    'areausable' => [
	        'displayCond' => 'FIELD:isproject:=:0',
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.areausable',
	        'config' => [
			    'type' => 'input',
			    'size' => 4,
			    'eval' => 'double2'
			]
	        
	    ],
	    'arealiving' => [
	        'displayCond' => 'FIELD:isproject:=:0',
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.arealiving',
	        'config' => [
			    'type' => 'input',
			    'size' => 4,
			    'eval' => 'double2'
			]
	        
	    ],
	    'areabase' => [
	        'displayCond' => 'FIELD:isproject:=:0',
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.areabase',
	        'config' => [
			    'type' => 'input',
			    'size' => 4,
			    'eval' => 'double2'
			]
	        
	    ],
	    'floor' => [
	        'displayCond' => 'FIELD:isproject:=:0',
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.floor',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'items' => [
			        [$ll . 'tx_trader_domain_model_object.floor.0', 0],
			        [$ll . 'tx_trader_domain_model_object.floor.1', 1],
			        [$ll . 'tx_trader_domain_model_object.floor.2', 2],
			        [$ll . 'tx_trader_domain_model_object.floor.3', 3],
			        [$ll . 'tx_trader_domain_model_object.floor.4', 4],
			        [$ll . 'tx_trader_domain_model_object.floor.5', 5],
			        [$ll . 'tx_trader_domain_model_object.floor.6', 6],
			        [$ll . 'tx_trader_domain_model_object.floor.7', 7],
			        [$ll . 'tx_trader_domain_model_object.floor.8', 8],
			        [$ll . 'tx_trader_domain_model_object.floor.9', 9],
			        [$ll . 'tx_trader_domain_model_object.floor.50', 50],
			        [$ll . 'tx_trader_domain_model_object.floor.100', 100],
			    ],
			    'size' => 1,
			    'maxitems' => 1,
			    'eval' => ''
			],
	        
	    ],
	    'floors' => [
	        'displayCond' => 'FIELD:isproject:=:0',
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.floors',
	        'config' => [
			    'type' => 'input',
			    'size' => 4,
			    'eval' => 'int'
			]
	        
	    ],
	    'norooms' => [
	        'displayCond' => 'FIELD:isproject:=:0',
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.norooms',
	        'config' => [
			    'type' => 'input',
			    'size' => 4,
			    'eval' => 'double2,required'
			]
	        
	    ],
	    'nobedrooms' => [
	        'displayCond' => 'FIELD:isproject:=:0',
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.nobedrooms',
	        'config' => [
			    'type' => 'input',
			    'size' => 4,
			    'eval' => 'int,required'
			]
	        
	    ],
	    'nobathrooms' => [
	        'displayCond' => 'FIELD:isproject:=:0',
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.nobathrooms',
	        'config' => [
			    'type' => 'input',
			    'size' => 4,
			    'eval' => 'int,required'
			]
	        
	    ],
	    'noparking' => [
	        'displayCond' => 'FIELD:isproject:=:0',
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.noparking',
	        'config' => [
			    'type' => 'input',
			    'size' => 4,
			    'eval' => 'int'
			]
	        
	    ],
	    'typeparking' => [
	        'displayCond' => 'FIELD:isproject:=:0',
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.typeparking',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'items' => [
			        [$ll . 'tx_trader_domain_model_object.typeparking.0', 0],
			        [$ll . 'tx_trader_domain_model_object.typeparking.1', 1],
			        [$ll . 'tx_trader_domain_model_object.typeparking.2', 2],
			        [$ll . 'tx_trader_domain_model_object.typeparking.3', 3],
			        [$ll . 'tx_trader_domain_model_object.typeparking.4', 4],
			    ],
			    'size' => 1,
			    'maxitems' => 1,
			    'eval' => ''
			],
	        
	    ],
	    'features' => [
	        'displayCond' => 'FIELD:isproject:=:0',
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.features',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectMultipleSideBySide',
			    'foreign_table' => 'tx_trader_domain_model_features',
			    'foreign_table_where' => ' AND tx_trader_domain_model_features.sys_language_uid IN (-1, 0) ORDER BY tx_trader_domain_model_features.feature',
			    'MM' => 'tx_trader_object_features_mm',
			    'size' => 10,
			    'autoSizeMax' => 30,
			    'maxitems' => 9999,
			    'multiple' => 0,
/*			    'wizards' => [
			        '_PADDING' => 1,
			        '_VERTICAL' => 1,
			        'edit' => [
			            'module' => [
			                'name' => 'wizard_edit',
			            ],
			            'type' => 'popup',
			            'title' => 'Edit', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.edit
			            'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_edit.gif',
			            'popup_onlyOpenIfSelected' => 1,
			            'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
			        ],
			        'add' => [
			            'module' => [
			                'name' => 'wizard_add',
			            ],
			            'type' => 'script',
			            'title' => 'Create new', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.add
			            'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_add.gif',
			            'params' => [
			                'table' => 'tx_trader_domain_model_features',
			                'pid' => '###CURRENT_PID###',
			                'setValue' => 'prepend'
			            ],
			        ],
			    ],*/
			],

	    ],
	    'pricetotal' => [
	        'displayCond' => [
	        	'AND' => [
	        		'FIELD:isproject:=:0',
	        		'FIELD:marketing:=:2',
	        	],
	        ],
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.pricetotal',
	        'config' => [
			    'type' => 'input',
			    'size' => 8,
			    'eval' => 'double2,required'
			]
	        
	    ],
	    'pricesqm' => [
	        'displayCond' => [
	        	'AND' => [
	        		'FIELD:isproject:=:0',
	        		'FIELD:marketing:=:2',
	        	],
	        ],
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.pricesqm',
	        'config' => [
			    'type' => 'input',
			    'size' => 8,
			    'eval' => 'double2'
			]
	        
	    ],
	    'pricetax' => [
	        'displayCond' => [
	        	'AND' => [
	        		'FIELD:isproject:=:0',
	        		'FIELD:marketing:=:2',
	        	],
	        ],
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.pricetax',
	        'config' => [
			    'type' => 'input',
			    'size' => 8,
			    'eval' => 'double2'
			]
	        
	    ],
	    'priceinc' => [
	        'displayCond' => [
	        	'AND' => [
	        		'FIELD:isproject:=:0',
	        		'FIELD:marketing:=:2',
	        	],
	        ],
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.priceinc',
	        'config' => [
			    'type' => 'check',
			    'items' => [
			        '1' => [
			            '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
			        ]
			    ],
			    'default' => 0
			]
	        
	    ],
	    'pricereserved' => [
	        'displayCond' => [
	        	'AND' => [
	        		'FIELD:isproject:=:0',
	        		'FIELD:marketing:=:2',
	        	],
	        ],
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.pricereserved',
	        'config' => [
			    'type' => 'check',
			    'items' => [
			        '1' => [
			            '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
			        ]
			    ],
			    'default' => 0
			]
	        
	    ],
	    'rent' => [
	        'displayCond' => [
	        	'AND' => [
	        		'FIELD:isproject:=:0',
	        		'FIELD:marketing:=:1',
	        	],
	        ],
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.rent',
	        'config' => [
			    'type' => 'input',
			    'size' => 8,
			    'eval' => 'double2,required'
			]
	        
	    ],
	    'pricedeposit' => [
	        'displayCond' => [
	        	'AND' => [
	        		'FIELD:isproject:=:0',
	        		'FIELD:marketing:=:1',
	        	],
	        ],
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.pricedeposit',
	        'config' => [
			    'type' => 'input',
			    'size' => 8,
			    'eval' => 'double2'
			]
	        
	    ],
	    'commisionint' => [
	        'displayCond' => 'FIELD:isproject:=:0',
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.commisionint',
	        'config' => [
			    'type' => 'input',
			    'size' => 8,
			    'eval' => 'double2'
			]
	        
	    ],
	    'commintinc' => [
	        'displayCond' => 'FIELD:isproject:=:0',
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.commintinc',
	        'config' => [
			    'type' => 'check',
			    'items' => [
			        '1' => [
			            '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
			        ]
			    ],
			    'default' => 0
			]
	        
	    ],
	    'commisionext' => [
	        'displayCond' => 'FIELD:isproject:=:0',
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.commisionext',
	        'config' => [
			    'type' => 'input',
			    'size' => 8,
			    'eval' => 'double2'
			]
	        
	    ],
	    'commextinc' => [
	        'displayCond' => 'FIELD:isproject:=:0',
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.commextinc',
	        'config' => [
			    'type' => 'check',
			    'items' => [
			        '1' => [
			            '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
			        ]
			    ],
			    'default' => 0
			]
	        
	    ],
	    'priceparking' => [
	        'displayCond' => 'FIELD:isproject:=:0',
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.priceparking',
	        'config' => [
			    'type' => 'input',
			    'size' => 8,
			    'eval' => 'double2'
			]
	        
	    ],
	    'rentparking' => [
	        'displayCond' => 'FIELD:isproject:=:0',
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.rentparking',
	        'config' => [
			    'type' => 'input',
			    'size' => 8,
			    'eval' => 'double2'
			]
	        
	    ],
	    'heating' => [
	        'displayCond' => 'FIELD:isproject:=:0',
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.heating',
	        'config' => [
			    'type' => 'input',
			    'size' => 8,
			    'eval' => 'double2'
			]
	        
	    ],
	    'expenses' => [
	        'displayCond' => 'FIELD:isproject:=:0',
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.expenses',
	        'config' => [
			    'type' => 'input',
			    'size' => 8,
			    'eval' => 'double2'
			]
	        
	    ],
	    'images' => [
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.images',
	        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
			    'images',
			    [
			        'appearance' => [
			            'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
			        ],
			        'foreign_types' => [
			            '0' => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ]
			        ]
			    ],
			    $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
	        
	    ],
	    'floorplans' => [
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.floorplans',
	        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
			    'floorplans',
			    [
			        'appearance' => [
			            'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
			        ],
			        'foreign_types' => [
			            '0' => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ]
			        ]
			    ],
			    $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
	        
	    ],
	    'video' => [
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.video',
	        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
			    'video',
			    [
			        'appearance' => [
			            'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
			        ],
			        'foreign_types' => [
			            '0' => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ]
			        ],
			        'maxitems' => 1
			    ],
			    $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
	        
	    ],
	    'documents' => [
	        'exclude' => 1,
	        'label' => $ll . 'tx_trader_domain_model_object.documents',
	        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'documents',
				[
					'appearance' => [
						'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.addFileReference'
					],
					'foreign_types' => [
						'0' => [
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						],
						\TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						],
						\TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						],
						\TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						],
						\TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						],
						\TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
							'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
						]
					]
				]
			),
	        
	    ],
        
    ],
];
