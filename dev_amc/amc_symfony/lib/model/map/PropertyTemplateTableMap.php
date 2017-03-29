<?php


/**
 * This class defines the structure of the 'property_template' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Sun Sep  9 21:40:33 2012
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class PropertyTemplateTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.PropertyTemplateTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('property_template');
		$this->setPhpName('PropertyTemplate');
		$this->setClassname('PropertyTemplate');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addForeignKey('PROPERTY_ID', 'PropertyId', 'INTEGER', 'property', 'ID', true, 10, 0);
		$this->addColumn('LOGO_IMAGE', 'LogoImage', 'VARCHAR', false, 50, null);
		$this->addColumn('HOME_IMAGE', 'HomeImage', 'VARCHAR', false, 50, null);
		$this->addColumn('WELCOME', 'Welcome', 'VARCHAR', false, 255, null);
		$this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', false, null, null);
		$this->addColumn('ANNOUNCEMENTS', 'Announcements', 'LONGVARCHAR', false, null, null);
		$this->addColumn('STYLE_COLOR', 'StyleColor', 'VARCHAR', false, 10, null);
		$this->addColumn('BACKGROUND_COLOR', 'BackgroundColor', 'VARCHAR', false, 10, null);
		$this->addColumn('CHAT', 'Chat', 'LONGVARCHAR', false, null, null);
		$this->addColumn('RENTALAPP_FILE', 'RentalappFile', 'VARCHAR', false, 50, null);
		$this->addColumn('MAP_HTML', 'MapHtml', 'LONGVARCHAR', false, null, null);
		$this->addColumn('MAP_FRAME_SRC', 'MapFrameSrc', 'LONGVARCHAR', false, null, null);
		$this->addColumn('COMMUNITY_IMAGE', 'CommunityImage', 'VARCHAR', false, 50, null);
		$this->addColumn('COMMUNITY_DESCRIPTION', 'CommunityDescription', 'LONGVARCHAR', false, null, null);
		$this->addColumn('COMMUNITY_ATTRACTIONS_LIST', 'CommunityAttractionsList', 'LONGVARCHAR', false, null, null);
		$this->addColumn('CUSTOM_PAGE_NAME', 'CustomPageName', 'VARCHAR', false, 128, null);
		$this->addColumn('CUSTOM_PAGE_PERMA_LINK', 'CustomPagePermaLink', 'VARCHAR', false, 255, null);
		$this->addColumn('CUSTOM_PAGE_CONTENT', 'CustomPageContent', 'LONGVARCHAR', false, null, null);
		$this->addColumn('HOME_FLASH', 'HomeFlash', 'VARCHAR', false, 50, null);
		$this->addColumn('TRACKING_CODE', 'TrackingCode', 'LONGVARCHAR', false, null, null);
		$this->addColumn('CONTACT_EMAIL_TEXT', 'ContactEmailText', 'LONGVARCHAR', false, null, null);
		$this->addColumn('SHOW_WALKSCORE', 'ShowWalkscore', 'BOOLEAN', true, 1, true);
		$this->addColumn('EMAIL', 'Email', 'LONGVARCHAR', false, null, null);
		$this->addColumn('FACEBOOK_URL', 'FacebookUrl', 'VARCHAR', false, 255, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Property', 'Property', RelationMap::MANY_TO_ONE, array('property_id' => 'id', ), 'CASCADE', 'CASCADE');
	} // buildRelations()

	/**
	 * 
	 * Gets the list of behaviors registered for this table
	 * 
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
		);
	} // getBehaviors()

} // PropertyTemplateTableMap
