<?php


/**
 * This class adds structure of 'property_template' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Mon May  9 22:37:46 2011
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class PropertyTemplateMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.PropertyTemplateMapBuilder';

	/**
	 * The database map.
	 */
	private $dbMap;

	/**
	 * Tells us if this DatabaseMapBuilder is built so that we
	 * don't have to re-build it every time.
	 *
	 * @return     boolean true if this DatabaseMapBuilder is built, false otherwise.
	 */
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	/**
	 * Gets the databasemap this map builder built.
	 *
	 * @return     the databasemap
	 */
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	/**
	 * The doBuild() method builds the DatabaseMap
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap(PropertyTemplatePeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(PropertyTemplatePeer::TABLE_NAME);
		$tMap->setPhpName('PropertyTemplate');
		$tMap->setClassname('PropertyTemplate');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10);

		$tMap->addForeignKey('PROPERTY_ID', 'PropertyId', 'INTEGER', 'property', 'ID', true, 10);

		$tMap->addColumn('LOGO_IMAGE', 'LogoImage', 'VARCHAR', false, 50);

		$tMap->addColumn('HOME_IMAGE', 'HomeImage', 'VARCHAR', false, 50);

		$tMap->addColumn('WELCOME', 'Welcome', 'VARCHAR', false, 255);

		$tMap->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', false, null);

		$tMap->addColumn('ANNOUNCEMENTS', 'Announcements', 'LONGVARCHAR', false, null);

		$tMap->addColumn('STYLE_COLOR', 'StyleColor', 'VARCHAR', false, 10);

		$tMap->addColumn('BACKGROUND_COLOR', 'BackgroundColor', 'VARCHAR', false, 10);

		$tMap->addColumn('CHAT', 'Chat', 'LONGVARCHAR', false, null);

		$tMap->addColumn('RENTALAPP_FILE', 'RentalappFile', 'VARCHAR', false, 50);

		$tMap->addColumn('MAP_HTML', 'MapHtml', 'LONGVARCHAR', false, null);

		$tMap->addColumn('MAP_FRAME_SRC', 'MapFrameSrc', 'LONGVARCHAR', false, null);

		$tMap->addColumn('COMMUNITY_IMAGE', 'CommunityImage', 'VARCHAR', false, 50);

		$tMap->addColumn('COMMUNITY_DESCRIPTION', 'CommunityDescription', 'LONGVARCHAR', false, null);

		$tMap->addColumn('COMMUNITY_ATTRACTIONS_LIST', 'CommunityAttractionsList', 'LONGVARCHAR', false, null);

		$tMap->addColumn('CUSTOM_PAGE_NAME', 'CustomPageName', 'VARCHAR', false, 128);

		$tMap->addColumn('CUSTOM_PAGE_PERMA_LINK', 'CustomPagePermaLink', 'VARCHAR', false, 255);

		$tMap->addColumn('CUSTOM_PAGE_CONTENT', 'CustomPageContent', 'LONGVARCHAR', false, null);

		$tMap->addColumn('HOME_FLASH', 'HomeFlash', 'VARCHAR', false, 50);

		$tMap->addColumn('TRACKING_CODE', 'TrackingCode', 'LONGVARCHAR', false, null);

		$tMap->addColumn('CONTACT_EMAIL_TEXT', 'ContactEmailText', 'LONGVARCHAR', false, null);

		$tMap->addColumn('SHOW_WALKSCORE', 'ShowWalkscore', 'BOOLEAN', true, 1);

		$tMap->addColumn('EMAIL', 'Email', 'LONGVARCHAR', false, null);

		$tMap->addColumn('FACEBOOK_URL', 'FacebookUrl', 'VARCHAR', false, 255);

	} // doBuild()

} // PropertyTemplateMapBuilder
