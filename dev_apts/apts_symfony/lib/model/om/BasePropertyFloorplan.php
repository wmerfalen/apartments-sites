<?php

/**
 * Base class that represents a row from the 'property_floorplan' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Fri Mar  1 14:31:01 2013
 *
 * @package    lib.model.om
 */
abstract class BasePropertyFloorplan extends BaseObject  implements Persistent {


	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        PropertyFloorplanPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the property_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $property_id;

	/**
	 * The value for the name field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $name;

	/**
	 * The value for the bedrooms field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $bedrooms;

	/**
	 * The value for the bathrooms field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $bathrooms;

	/**
	 * The value for the square_feet field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $square_feet;

	/**
	 * The value for the price field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $price;

	/**
	 * The value for the lease_term field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $lease_term;

	/**
	 * The value for the deposit field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $deposit;

	/**
	 * The value for the image field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $image;

	/**
	 * The value for the availability_link field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $availability_link;

	/**
	 * @var        Property
	 */
	protected $aProperty;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	// symfony behavior
	
	const PEER = 'PropertyFloorplanPeer';

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
		$this->property_id = 0;
		$this->name = '';
		$this->bedrooms = 0;
		$this->bathrooms = 0;
		$this->square_feet = '';
		$this->price = '';
		$this->lease_term = '';
		$this->deposit = '';
		$this->image = '';
		$this->availability_link = '';
	}

	/**
	 * Initializes internal state of BasePropertyFloorplan object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [property_id] column value.
	 * 
	 * @return     int
	 */
	public function getPropertyId()
	{
		return $this->property_id;
	}

	/**
	 * Get the [name] column value.
	 * 
	 * @return     string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Get the [bedrooms] column value.
	 * 
	 * @return     int
	 */
	public function getBedrooms()
	{
		return $this->bedrooms;
	}

	/**
	 * Get the [bathrooms] column value.
	 * 
	 * @return     int
	 */
	public function getBathrooms()
	{
		return $this->bathrooms;
	}

	/**
	 * Get the [square_feet] column value.
	 * 
	 * @return     string
	 */
	public function getSquareFeet()
	{
		return $this->square_feet;
	}

	/**
	 * Get the [price] column value.
	 * 
	 * @return     string
	 */
	public function getPrice()
	{
		return $this->price;
	}

	/**
	 * Get the [lease_term] column value.
	 * 
	 * @return     string
	 */
	public function getLeaseTerm()
	{
		return $this->lease_term;
	}

	/**
	 * Get the [deposit] column value.
	 * 
	 * @return     string
	 */
	public function getDeposit()
	{
		return $this->deposit;
	}

	/**
	 * Get the [image] column value.
	 * 
	 * @return     string
	 */
	public function getImage()
	{
		return $this->image;
	}

	/**
	 * Get the [availability_link] column value.
	 * 
	 * @return     string
	 */
	public function getAvailabilityLink()
	{
		return $this->availability_link;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     PropertyFloorplan The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = PropertyFloorplanPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [property_id] column.
	 * 
	 * @param      int $v new value
	 * @return     PropertyFloorplan The current object (for fluent API support)
	 */
	public function setPropertyId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->property_id !== $v || $this->isNew()) {
			$this->property_id = $v;
			$this->modifiedColumns[] = PropertyFloorplanPeer::PROPERTY_ID;
		}

		if ($this->aProperty !== null && $this->aProperty->getId() !== $v) {
			$this->aProperty = null;
		}

		return $this;
	} // setPropertyId()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     PropertyFloorplan The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v || $this->isNew()) {
			$this->name = $v;
			$this->modifiedColumns[] = PropertyFloorplanPeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Set the value of [bedrooms] column.
	 * 
	 * @param      int $v new value
	 * @return     PropertyFloorplan The current object (for fluent API support)
	 */
	public function setBedrooms($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->bedrooms !== $v || $this->isNew()) {
			$this->bedrooms = $v;
			$this->modifiedColumns[] = PropertyFloorplanPeer::BEDROOMS;
		}

		return $this;
	} // setBedrooms()

	/**
	 * Set the value of [bathrooms] column.
	 * 
	 * @param      int $v new value
	 * @return     PropertyFloorplan The current object (for fluent API support)
	 */
	public function setBathrooms($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->bathrooms !== $v || $this->isNew()) {
			$this->bathrooms = $v;
			$this->modifiedColumns[] = PropertyFloorplanPeer::BATHROOMS;
		}

		return $this;
	} // setBathrooms()

	/**
	 * Set the value of [square_feet] column.
	 * 
	 * @param      string $v new value
	 * @return     PropertyFloorplan The current object (for fluent API support)
	 */
	public function setSquareFeet($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->square_feet !== $v || $this->isNew()) {
			$this->square_feet = $v;
			$this->modifiedColumns[] = PropertyFloorplanPeer::SQUARE_FEET;
		}

		return $this;
	} // setSquareFeet()

	/**
	 * Set the value of [price] column.
	 * 
	 * @param      string $v new value
	 * @return     PropertyFloorplan The current object (for fluent API support)
	 */
	public function setPrice($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->price !== $v || $this->isNew()) {
			$this->price = $v;
			$this->modifiedColumns[] = PropertyFloorplanPeer::PRICE;
		}

		return $this;
	} // setPrice()

	/**
	 * Set the value of [lease_term] column.
	 * 
	 * @param      string $v new value
	 * @return     PropertyFloorplan The current object (for fluent API support)
	 */
	public function setLeaseTerm($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->lease_term !== $v || $this->isNew()) {
			$this->lease_term = $v;
			$this->modifiedColumns[] = PropertyFloorplanPeer::LEASE_TERM;
		}

		return $this;
	} // setLeaseTerm()

	/**
	 * Set the value of [deposit] column.
	 * 
	 * @param      string $v new value
	 * @return     PropertyFloorplan The current object (for fluent API support)
	 */
	public function setDeposit($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->deposit !== $v || $this->isNew()) {
			$this->deposit = $v;
			$this->modifiedColumns[] = PropertyFloorplanPeer::DEPOSIT;
		}

		return $this;
	} // setDeposit()

	/**
	 * Set the value of [image] column.
	 * 
	 * @param      string $v new value
	 * @return     PropertyFloorplan The current object (for fluent API support)
	 */
	public function setImage($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->image !== $v || $this->isNew()) {
			$this->image = $v;
			$this->modifiedColumns[] = PropertyFloorplanPeer::IMAGE;
		}

		return $this;
	} // setImage()

	/**
	 * Set the value of [availability_link] column.
	 * 
	 * @param      string $v new value
	 * @return     PropertyFloorplan The current object (for fluent API support)
	 */
	public function setAvailabilityLink($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->availability_link !== $v || $this->isNew()) {
			$this->availability_link = $v;
			$this->modifiedColumns[] = PropertyFloorplanPeer::AVAILABILITY_LINK;
		}

		return $this;
	} // setAvailabilityLink()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
			if ($this->property_id !== 0) {
				return false;
			}

			if ($this->name !== '') {
				return false;
			}

			if ($this->bedrooms !== 0) {
				return false;
			}

			if ($this->bathrooms !== 0) {
				return false;
			}

			if ($this->square_feet !== '') {
				return false;
			}

			if ($this->price !== '') {
				return false;
			}

			if ($this->lease_term !== '') {
				return false;
			}

			if ($this->deposit !== '') {
				return false;
			}

			if ($this->image !== '') {
				return false;
			}

			if ($this->availability_link !== '') {
				return false;
			}

		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->property_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->bedrooms = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->bathrooms = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->square_feet = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->price = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->lease_term = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->deposit = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->image = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->availability_link = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 11; // 11 = PropertyFloorplanPeer::NUM_COLUMNS - PropertyFloorplanPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating PropertyFloorplan object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

		if ($this->aProperty !== null && $this->property_id !== $this->aProperty->getId()) {
			$this->aProperty = null;
		}
	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PropertyFloorplanPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = PropertyFloorplanPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aProperty = null;
		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PropertyFloorplanPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BasePropertyFloorplan:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			
			    return;
			  }
			}

			if ($ret) {
				PropertyFloorplanPeer::doDelete($this, $con);
				$this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BasePropertyFloorplan:delete:post') as $callable)
				{
				  call_user_func($callable, $this, $con);
				}

				$this->setDeleted(true);
				$con->commit();
			} else {
				$con->commit();
			}
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PropertyFloorplanPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BasePropertyFloorplan:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			    $con->commit();
			
			    return $affectedRows;
			  }
			}

			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BasePropertyFloorplan:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				PropertyFloorplanPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aProperty !== null) {
				if ($this->aProperty->isModified() || $this->aProperty->isNew()) {
					$affectedRows += $this->aProperty->save($con);
				}
				$this->setProperty($this->aProperty);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = PropertyFloorplanPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = PropertyFloorplanPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += PropertyFloorplanPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aProperty !== null) {
				if (!$this->aProperty->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aProperty->getValidationFailures());
				}
			}


			if (($retval = PropertyFloorplanPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PropertyFloorplanPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getPropertyId();
				break;
			case 2:
				return $this->getName();
				break;
			case 3:
				return $this->getBedrooms();
				break;
			case 4:
				return $this->getBathrooms();
				break;
			case 5:
				return $this->getSquareFeet();
				break;
			case 6:
				return $this->getPrice();
				break;
			case 7:
				return $this->getLeaseTerm();
				break;
			case 8:
				return $this->getDeposit();
				break;
			case 9:
				return $this->getImage();
				break;
			case 10:
				return $this->getAvailabilityLink();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param      string $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                        BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. Defaults to BasePeer::TYPE_PHPNAME.
	 * @param      boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns.  Defaults to TRUE.
	 * @return     an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true)
	{
		$keys = PropertyFloorplanPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getPropertyId(),
			$keys[2] => $this->getName(),
			$keys[3] => $this->getBedrooms(),
			$keys[4] => $this->getBathrooms(),
			$keys[5] => $this->getSquareFeet(),
			$keys[6] => $this->getPrice(),
			$keys[7] => $this->getLeaseTerm(),
			$keys[8] => $this->getDeposit(),
			$keys[9] => $this->getImage(),
			$keys[10] => $this->getAvailabilityLink(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PropertyFloorplanPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setPropertyId($value);
				break;
			case 2:
				$this->setName($value);
				break;
			case 3:
				$this->setBedrooms($value);
				break;
			case 4:
				$this->setBathrooms($value);
				break;
			case 5:
				$this->setSquareFeet($value);
				break;
			case 6:
				$this->setPrice($value);
				break;
			case 7:
				$this->setLeaseTerm($value);
				break;
			case 8:
				$this->setDeposit($value);
				break;
			case 9:
				$this->setImage($value);
				break;
			case 10:
				$this->setAvailabilityLink($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = PropertyFloorplanPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setPropertyId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setBedrooms($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setBathrooms($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setSquareFeet($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setPrice($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setLeaseTerm($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDeposit($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setImage($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setAvailabilityLink($arr[$keys[10]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(PropertyFloorplanPeer::DATABASE_NAME);

		if ($this->isColumnModified(PropertyFloorplanPeer::ID)) $criteria->add(PropertyFloorplanPeer::ID, $this->id);
		if ($this->isColumnModified(PropertyFloorplanPeer::PROPERTY_ID)) $criteria->add(PropertyFloorplanPeer::PROPERTY_ID, $this->property_id);
		if ($this->isColumnModified(PropertyFloorplanPeer::NAME)) $criteria->add(PropertyFloorplanPeer::NAME, $this->name);
		if ($this->isColumnModified(PropertyFloorplanPeer::BEDROOMS)) $criteria->add(PropertyFloorplanPeer::BEDROOMS, $this->bedrooms);
		if ($this->isColumnModified(PropertyFloorplanPeer::BATHROOMS)) $criteria->add(PropertyFloorplanPeer::BATHROOMS, $this->bathrooms);
		if ($this->isColumnModified(PropertyFloorplanPeer::SQUARE_FEET)) $criteria->add(PropertyFloorplanPeer::SQUARE_FEET, $this->square_feet);
		if ($this->isColumnModified(PropertyFloorplanPeer::PRICE)) $criteria->add(PropertyFloorplanPeer::PRICE, $this->price);
		if ($this->isColumnModified(PropertyFloorplanPeer::LEASE_TERM)) $criteria->add(PropertyFloorplanPeer::LEASE_TERM, $this->lease_term);
		if ($this->isColumnModified(PropertyFloorplanPeer::DEPOSIT)) $criteria->add(PropertyFloorplanPeer::DEPOSIT, $this->deposit);
		if ($this->isColumnModified(PropertyFloorplanPeer::IMAGE)) $criteria->add(PropertyFloorplanPeer::IMAGE, $this->image);
		if ($this->isColumnModified(PropertyFloorplanPeer::AVAILABILITY_LINK)) $criteria->add(PropertyFloorplanPeer::AVAILABILITY_LINK, $this->availability_link);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(PropertyFloorplanPeer::DATABASE_NAME);

		$criteria->add(PropertyFloorplanPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of PropertyFloorplan (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setPropertyId($this->property_id);

		$copyObj->setName($this->name);

		$copyObj->setBedrooms($this->bedrooms);

		$copyObj->setBathrooms($this->bathrooms);

		$copyObj->setSquareFeet($this->square_feet);

		$copyObj->setPrice($this->price);

		$copyObj->setLeaseTerm($this->lease_term);

		$copyObj->setDeposit($this->deposit);

		$copyObj->setImage($this->image);

		$copyObj->setAvailabilityLink($this->availability_link);


		$copyObj->setNew(true);

		$copyObj->setId(NULL); // this is a auto-increment column, so set to default value

	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     PropertyFloorplan Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     PropertyFloorplanPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new PropertyFloorplanPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Property object.
	 *
	 * @param      Property $v
	 * @return     PropertyFloorplan The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setProperty(Property $v = null)
	{
		if ($v === null) {
			$this->setPropertyId(0);
		} else {
			$this->setPropertyId($v->getId());
		}

		$this->aProperty = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Property object, it will not be re-added.
		if ($v !== null) {
			$v->addPropertyFloorplan($this);
		}

		return $this;
	}


	/**
	 * Get the associated Property object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Property The associated Property object.
	 * @throws     PropelException
	 */
	public function getProperty(PropelPDO $con = null)
	{
		if ($this->aProperty === null && ($this->property_id !== null)) {
			$this->aProperty = PropertyPeer::retrieveByPk($this->property_id);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aProperty->addPropertyFloorplans($this);
			 */
		}
		return $this->aProperty;
	}

	/**
	 * Resets all collections of referencing foreign keys.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect objects
	 * with circular references.  This is currently necessary when using Propel in certain
	 * daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all associated objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

			$this->aProperty = null;
	}

	// symfony_behaviors behavior
	
	/**
	 * Calls methods defined via {@link sfMixer}.
	 */
	public function __call($method, $arguments)
	{
	  if (!$callable = sfMixer::getCallable('BasePropertyFloorplan:'.$method))
	  {
	    throw new sfException(sprintf('Call to undefined method BasePropertyFloorplan::%s', $method));
	  }
	
	  array_unshift($arguments, $this);
	
	  return call_user_func_array($callable, $arguments);
	}

} // BasePropertyFloorplan
