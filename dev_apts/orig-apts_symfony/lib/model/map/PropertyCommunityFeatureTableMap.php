<?php


/**
 * This class defines the structure of the 'property_community_feature' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Sun Sep  9 23:07:37 2012
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class PropertyCommunityFeatureTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.PropertyCommunityFeatureTableMap';

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
		$this->setName('property_community_feature');
		$this->setPhpName('PropertyCommunityFeature');
		$this->setClassname('PropertyCommunityFeature');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addForeignKey('PROPERTY_ID', 'PropertyId', 'INTEGER', 'property', 'ID', true, 10, 0);
		$this->addForeignKey('COMMUNITY_FEATURE_ID', 'CommunityFeatureId', 'INTEGER', 'community_feature', 'ID', true, 10, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Property', 'Property', RelationMap::MANY_TO_ONE, array('property_id' => 'id', ), 'CASCADE', 'CASCADE');
    $this->addRelation('CommunityFeature', 'CommunityFeature', RelationMap::MANY_TO_ONE, array('community_feature_id' => 'id', ), 'CASCADE', 'CASCADE');
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

} // PropertyCommunityFeatureTableMap
