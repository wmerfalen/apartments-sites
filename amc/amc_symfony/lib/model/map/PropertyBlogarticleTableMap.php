<?php


/**
 * This class defines the structure of the 'property_blogarticle' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Thu Jan 19 10:10:53 2017
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class PropertyBlogarticleTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.PropertyBlogarticleTableMap';

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
		$this->setName('property_blogarticle');
		$this->setPhpName('PropertyBlogarticle');
		$this->setClassname('PropertyBlogarticle');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addForeignKey('PROPERTY_ID', 'PropertyId', 'INTEGER', 'property', 'ID', true, 10, 0);
		$this->addColumn('TITLE', 'Title', 'VARCHAR', false, 255, null);
		$this->addColumn('PERMA_LINK', 'PermaLink', 'VARCHAR', false, 255, null);
		$this->addColumn('ARTICLE_IMAGE1', 'ArticleImage1', 'VARCHAR', false, 50, null);
		$this->addColumn('ARTICLE_IMAGE2', 'ArticleImage2', 'VARCHAR', false, 50, null);
		$this->addColumn('ARTICLE_CONTENT', 'ArticleContent', 'LONGVARCHAR', false, null, null);
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

} // PropertyBlogarticleTableMap
