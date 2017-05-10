<?php


/**
 * This class adds structure of 'property_apartment_feature' table to 'propel' DatabaseMap object.
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
class PropertyApartmentFeatureMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.PropertyApartmentFeatureMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(PropertyApartmentFeaturePeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(PropertyApartmentFeaturePeer::TABLE_NAME);
		$tMap->setPhpName('PropertyApartmentFeature');
		$tMap->setClassname('PropertyApartmentFeature');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10);

		$tMap->addForeignKey('PROPERTY_ID', 'PropertyId', 'INTEGER', 'property', 'ID', true, 10);

		$tMap->addForeignKey('APARTMENT_FEATURE_ID', 'ApartmentFeatureId', 'INTEGER', 'apartment_feature', 'ID', true, 10);

	} // doBuild()

} // PropertyApartmentFeatureMapBuilder