#
# Table structure for table 'tx_trader_domain_model_object'
#
CREATE TABLE tx_trader_domain_model_object (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	reference varchar(255) DEFAULT '' NOT NULL,
	tag int(11) unsigned DEFAULT '0' NOT NULL,
	featured tinyint(1) unsigned DEFAULT '0' NOT NULL,
	isproject tinyint(1) unsigned DEFAULT '0' NOT NULL,
	objects int(11) unsigned DEFAULT '0' NOT NULL,
	title varchar(255) DEFAULT '' NOT NULL,
	teaser text NOT NULL,
	description text NOT NULL,
	details int(11) unsigned DEFAULT '0' NOT NULL,

	marketing int(11) DEFAULT NULL,
	status int(11) DEFAULT '0' NOT NULL,
	builddate date DEFAULT '0000-00-00',
	availdate date DEFAULT '0000-00-00',
	auctiondate date DEFAULT '0000-00-00',
	rented tinyint(1) unsigned DEFAULT '0' NOT NULL,
	rentdate date DEFAULT '0000-00-00',
	categories int(11) DEFAULT '0' NOT NULL,

	street varchar(255) DEFAULT '' NOT NULL,
	number varchar(255) DEFAULT '' NOT NULL,
	zip varchar(255) DEFAULT '' NOT NULL,
	city varchar(255) DEFAULT '' NOT NULL,
	region varchar(255) DEFAULT '' NOT NULL,
	province varchar(255) DEFAULT '' NOT NULL,
	country int(11) DEFAULT '0' NOT NULL,
	latitude double(10,7) DEFAULT NULL,
	longitude double(10,7) DEFAULT NULL,
	hideadress tinyint(1) unsigned DEFAULT '0' NOT NULL,

	contact int(11) unsigned DEFAULT '0' NOT NULL,
	owner int(11) unsigned DEFAULT '0' NOT NULL,
	broker int(11) unsigned DEFAULT '0' NOT NULL,
	hidecontact tinyint(1) unsigned DEFAULT '0' NOT NULL,

	far double(11,2) DEFAULT '0.00' NOT NULL,
	fsi double(11,2) DEFAULT '0.00' NOT NULL,
	areatotal double(11,2) DEFAULT NULL,
	areausable double(11,2) DEFAULT '0.00' NOT NULL,
	arealiving double(11,2) DEFAULT '0.00' NOT NULL,
	areabase double(11,2) DEFAULT '0.00' NOT NULL,
	floor int(11) DEFAULT '0' NOT NULL,
	floors int(11) DEFAULT '1' NOT NULL,
	norooms double(11,2) DEFAULT NULL,
	nobedrooms int(11) DEFAULT '0' NOT NULL,
	nobathrooms int(11) DEFAULT '0' NOT NULL,
	noparking int(11) DEFAULT '0' NOT NULL,
	typeparking int(11) DEFAULT '0' NOT NULL,
	features int(11) unsigned DEFAULT '0' NOT NULL,

	pricetotal double(11,2) DEFAULT NULL,
	pricesqm double(11,2) DEFAULT '0.00' NOT NULL,
	pricetax double(11,2) DEFAULT '0.00' NOT NULL,
	priceinc tinyint(1) unsigned DEFAULT '0' NOT NULL,
	pricereserved tinyint(1) unsigned DEFAULT '0' NOT NULL,
	rent double(11,2) DEFAULT NULL,
	pricedeposit double(11,2) DEFAULT '0.00' NOT NULL,
	commisionint double(11,2) DEFAULT '0.00' NOT NULL,
	commintinc tinyint(1) unsigned DEFAULT '0' NOT NULL,
	commisionext double(11,2) DEFAULT '0.00' NOT NULL,
	commextinc tinyint(1) unsigned DEFAULT '0' NOT NULL,
	priceparking double(11,2) DEFAULT '0.00' NOT NULL,
	rentparking double(11,2) DEFAULT '0.00' NOT NULL,
	heating double(11,2) DEFAULT '0.00' NOT NULL,
	expenses double(11,2) DEFAULT '0.00' NOT NULL,

	images int(11) unsigned NOT NULL default '0',
	floorplans int(11) unsigned NOT NULL default '0',
	video int(11) unsigned NOT NULL default '0',
	documents int(11) unsigned NOT NULL default '0',

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_trader_domain_model_details'
#
CREATE TABLE tx_trader_domain_model_details (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	object int(11) unsigned DEFAULT '0' NOT NULL,

	detail varchar(255) DEFAULT '' NOT NULL,
	description text NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_trader_domain_model_features'
#
CREATE TABLE tx_trader_domain_model_features (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	feature varchar(255) DEFAULT '' NOT NULL,
	icon int(11) unsigned NOT NULL default '0',
	searchname varchar(255) DEFAULT '' NOT NULL,
	searchitem tinyint(1) unsigned DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_trader_domain_model_contacts'
#
CREATE TABLE tx_trader_domain_model_contacts (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	contactname varchar(255) DEFAULT '' NOT NULL,
	contactadress varchar(255) DEFAULT '' NOT NULL,
	contactemail varchar(255) DEFAULT '' NOT NULL,
	contactphone varchar(255) DEFAULT '' NOT NULL,
	contactcell varchar(255) DEFAULT '' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_trader_domain_model_tags'
#
CREATE TABLE tx_trader_domain_model_tags (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	tag varchar(255) DEFAULT '' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_trader_object_objects_mm'
#
CREATE TABLE tx_trader_object_object_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_trader_object_features_mm'
#
CREATE TABLE tx_trader_object_features_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_trader_object_tags_mm'
#
CREATE TABLE tx_trader_object_tags_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
