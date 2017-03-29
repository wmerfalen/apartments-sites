<?php


/**
 * This class defines the structure of the 'property_floorplan' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Tue Jun 17 21:49:00 2014
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class PropertyFloorplanTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.PropertyFloorplanTableMap';

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
		$this->setName('property_floorplan');
		$this->setPhpName('PropertyFloorplan');
		$this->setClassname('PropertyFloorplan');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addForeignKey('PROPERTY_ID', 'PropertyId', 'INTEGER', 'property', 'ID', true, 10, 0);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 50, '');
		$this->addColumn('BEDROOMS', 'Bedrooms', 'INTEGER', true, 10, 0);
		$this->addColumn('BATHROOMS', 'Bathrooms', 'VARCHAR', true, 16, '0');
		$this->addColumn('SQUARE_FEET', 'SquareFeet', 'VARCHAR', true, 50, '');
		$this->addColumn('PRICE', 'Price', 'VARCHAR', true, 50, '');
		$this->addColumn('LEASE_TERM', 'LeaseTerm', 'VARCHAR', true, 50, '');
		$this->addColumn('DEPOSIT', 'Deposit', 'VARCHAR', true, 50, '');
		$this->addColumn('IMAGE', 'Image', 'VARCHAR', true, 50, '');
		$this->addColumn('AVAILABILITY_LINK', 'AvailabilityLink', 'VARCHAR', true, 255, '');
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

} // PropertyFloorplanTableMap
