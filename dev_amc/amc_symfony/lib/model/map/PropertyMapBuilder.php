<?php


/**
 * This class adds structure of 'property' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Wed Nov 30 22:14:38 2011
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class PropertyMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.PropertyMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(PropertyPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(PropertyPeer::TABLE_NAME);
		$tMap->setPhpName('Property');
		$tMap->setClassname('Property');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10);

		$tMap->addColumn('CODE', 'Code', 'VARCHAR', true, 50);

		$tMap->addColumn('NAME', 'Name', 'VARCHAR', true, 50);

		$tMap->addColumn('ADDRESS', 'Address', 'VARCHAR', true, 128);

		$tMap->addColumn('CITY', 'City', 'VARCHAR', true, 50);

		$tMap->addForeignKey('STATE_ID', 'StateId', 'INTEGER', 'state', 'ID', true, 10);

		$tMap->addColumn('ZIP', 'Zip', 'VARCHAR', true, 20);

		$tMap->addColumn('PHONE', 'Phone', 'VARCHAR', true, 20);

		$tMap->addColumn('FAX', 'Fax', 'VARCHAR', true, 20);

		$tMap->addColumn('EMAIL', 'Email', 'VARCHAR', true, 128);

		$tMap->addColumn('IMAGE', 'Image', 'VARCHAR', true, 50);

		$tMap->addColumn('URL', 'Url', 'VARCHAR', true, 150);

		$tMap->addColumn('PRICE_RANGE', 'PriceRange', 'VARCHAR', true, 50);

		$tMap->addColumn('UNIT_TYPE', 'UnitType', 'VARCHAR', true, 50);

		$tMap->addColumn('SPECIAL', 'Special', 'VARCHAR', true, 100);

		$tMap->addColumn('MERCIAL', 'Mercial', 'VARCHAR', true, 150);

		$tMap->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', true, null);

		$tMap->addColumn('HOURS', 'Hours', 'LONGVARCHAR', true, null);

		$tMap->addColumn('PET_POLICY', 'PetPolicy', 'LONGVARCHAR', true, null);

		$tMap->addColumn('DIRECTIONS', 'Directions', 'LONGVARCHAR', true, null);

		$tMap->addColumn('FEATURED', 'Featured', 'BOOLEAN', true, 1);

		$tMap->addForeignKey('STATUS_ID', 'StatusId', 'INTEGER', 'status', 'ID', true, 10);

	} // doBuild()

} // PropertyMapBuilder