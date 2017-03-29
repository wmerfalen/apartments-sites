<?php


/**
 * This class defines the structure of the 'zip_code' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Tue Jun 17 22:51:28 2014
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class ZipCodeTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.ZipCodeTableMap';

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
		$this->setName('zip_code');
		$this->setPhpName('ZipCode');
		$this->setClassname('ZipCode');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('ZIP_CODE', 'ZipCode', 'VARCHAR', true, 5, null);
		$this->addColumn('ZIP_CODE_TYPE', 'ZipCodeType', 'VARCHAR', true, 32, null);
		$this->addColumn('CITY', 'City', 'VARCHAR', true, 128, null);
		$this->addColumn('STATE', 'State', 'VARCHAR', true, 4, null);
		$this->addColumn('LOCATION_TYPE', 'LocationType', 'VARCHAR', true, 32, null);
		$this->addColumn('LAT', 'Lat', 'DECIMAL', true, 10, null);
		$this->addColumn('LONG', 'Long', 'DECIMAL', true, 10, null);
		$this->addColumn('LOCATION', 'Location', 'VARCHAR', true, 32, null);
		$this->addColumn('DECOMMISIONED', 'Decommisioned', 'VARCHAR', true, 12, null);
		$this->addColumn('TAX_RETURNS_FILED', 'TaxReturnsFiled', 'INTEGER', false, 11, null);
		$this->addColumn('ESTIMATED_POPULATION', 'EstimatedPopulation', 'INTEGER', false, 11, null);
		$this->addColumn('TOTAL_WAGES', 'TotalWages', 'INTEGER', false, 11, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
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

} // ZipCodeTableMap
