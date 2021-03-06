<?php


/**
 * Base class that represents a row from the 'conceptosalida' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseConceptosalida extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ConceptosalidaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ConceptosalidaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idconceptosalida field.
     * @var        int
     */
    protected $idconceptosalida;

    /**
     * The value for the conceptosalida_nombre field.
     * @var        string
     */
    protected $conceptosalida_nombre;

    /**
     * The value for the almacenorigen field.
     * @var        string
     */
    protected $almacenorigen;

    /**
     * The value for the almacendestino field.
     * @var        string
     */
    protected $almacendestino;

    /**
     * The value for the mismasucursal field.
     * @var        boolean
     */
    protected $mismasucursal;

    /**
     * @var        PropelObjectCollection|Requisicion[] Collection to store aggregation of Requisicion objects.
     */
    protected $collRequisicions;
    protected $collRequisicionsPartial;

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

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $requisicionsScheduledForDeletion = null;

    /**
     * Get the [idconceptosalida] column value.
     *
     * @return int
     */
    public function getIdconceptosalida()
    {

        return $this->idconceptosalida;
    }

    /**
     * Get the [conceptosalida_nombre] column value.
     *
     * @return string
     */
    public function getConceptosalidaNombre()
    {

        return $this->conceptosalida_nombre;
    }

    /**
     * Get the [almacenorigen] column value.
     *
     * @return string
     */
    public function getAlmacenorigen()
    {

        return $this->almacenorigen;
    }

    /**
     * Get the [almacendestino] column value.
     *
     * @return string
     */
    public function getAlmacendestino()
    {

        return $this->almacendestino;
    }

    /**
     * Get the [mismasucursal] column value.
     *
     * @return boolean
     */
    public function getMismasucursal()
    {

        return $this->mismasucursal;
    }

    /**
     * Set the value of [idconceptosalida] column.
     *
     * @param  int $v new value
     * @return Conceptosalida The current object (for fluent API support)
     */
    public function setIdconceptosalida($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idconceptosalida !== $v) {
            $this->idconceptosalida = $v;
            $this->modifiedColumns[] = ConceptosalidaPeer::IDCONCEPTOSALIDA;
        }


        return $this;
    } // setIdconceptosalida()

    /**
     * Set the value of [conceptosalida_nombre] column.
     *
     * @param  string $v new value
     * @return Conceptosalida The current object (for fluent API support)
     */
    public function setConceptosalidaNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->conceptosalida_nombre !== $v) {
            $this->conceptosalida_nombre = $v;
            $this->modifiedColumns[] = ConceptosalidaPeer::CONCEPTOSALIDA_NOMBRE;
        }


        return $this;
    } // setConceptosalidaNombre()

    /**
     * Set the value of [almacenorigen] column.
     *
     * @param  string $v new value
     * @return Conceptosalida The current object (for fluent API support)
     */
    public function setAlmacenorigen($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->almacenorigen !== $v) {
            $this->almacenorigen = $v;
            $this->modifiedColumns[] = ConceptosalidaPeer::ALMACENORIGEN;
        }


        return $this;
    } // setAlmacenorigen()

    /**
     * Set the value of [almacendestino] column.
     *
     * @param  string $v new value
     * @return Conceptosalida The current object (for fluent API support)
     */
    public function setAlmacendestino($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->almacendestino !== $v) {
            $this->almacendestino = $v;
            $this->modifiedColumns[] = ConceptosalidaPeer::ALMACENDESTINO;
        }


        return $this;
    } // setAlmacendestino()

    /**
     * Sets the value of the [mismasucursal] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Conceptosalida The current object (for fluent API support)
     */
    public function setMismasucursal($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->mismasucursal !== $v) {
            $this->mismasucursal = $v;
            $this->modifiedColumns[] = ConceptosalidaPeer::MISMASUCURSAL;
        }


        return $this;
    } // setMismasucursal()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
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
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->idconceptosalida = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->conceptosalida_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->almacenorigen = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->almacendestino = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->mismasucursal = ($row[$startcol + 4] !== null) ? (boolean) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = ConceptosalidaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Conceptosalida object", $e);
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
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
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
            $con = Propel::getConnection(ConceptosalidaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ConceptosalidaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collRequisicions = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ConceptosalidaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ConceptosalidaQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
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
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ConceptosalidaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
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
                ConceptosalidaPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
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
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->requisicionsScheduledForDeletion !== null) {
                if (!$this->requisicionsScheduledForDeletion->isEmpty()) {
                    RequisicionQuery::create()
                        ->filterByPrimaryKeys($this->requisicionsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->requisicionsScheduledForDeletion = null;
                }
            }

            if ($this->collRequisicions !== null) {
                foreach ($this->collRequisicions as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = ConceptosalidaPeer::IDCONCEPTOSALIDA;
        if (null !== $this->idconceptosalida) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ConceptosalidaPeer::IDCONCEPTOSALIDA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ConceptosalidaPeer::IDCONCEPTOSALIDA)) {
            $modifiedColumns[':p' . $index++]  = '`idconceptosalida`';
        }
        if ($this->isColumnModified(ConceptosalidaPeer::CONCEPTOSALIDA_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`conceptosalida_nombre`';
        }
        if ($this->isColumnModified(ConceptosalidaPeer::ALMACENORIGEN)) {
            $modifiedColumns[':p' . $index++]  = '`almacenorigen`';
        }
        if ($this->isColumnModified(ConceptosalidaPeer::ALMACENDESTINO)) {
            $modifiedColumns[':p' . $index++]  = '`almacendestino`';
        }
        if ($this->isColumnModified(ConceptosalidaPeer::MISMASUCURSAL)) {
            $modifiedColumns[':p' . $index++]  = '`mismasucursal`';
        }

        $sql = sprintf(
            'INSERT INTO `conceptosalida` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idconceptosalida`':
                        $stmt->bindValue($identifier, $this->idconceptosalida, PDO::PARAM_INT);
                        break;
                    case '`conceptosalida_nombre`':
                        $stmt->bindValue($identifier, $this->conceptosalida_nombre, PDO::PARAM_STR);
                        break;
                    case '`almacenorigen`':
                        $stmt->bindValue($identifier, $this->almacenorigen, PDO::PARAM_STR);
                        break;
                    case '`almacendestino`':
                        $stmt->bindValue($identifier, $this->almacendestino, PDO::PARAM_STR);
                        break;
                    case '`mismasucursal`':
                        $stmt->bindValue($identifier, (int) $this->mismasucursal, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setIdconceptosalida($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
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
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = ConceptosalidaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collRequisicions !== null) {
                    foreach ($this->collRequisicions as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = ConceptosalidaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getIdconceptosalida();
                break;
            case 1:
                return $this->getConceptosalidaNombre();
                break;
            case 2:
                return $this->getAlmacenorigen();
                break;
            case 3:
                return $this->getAlmacendestino();
                break;
            case 4:
                return $this->getMismasucursal();
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
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Conceptosalida'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Conceptosalida'][$this->getPrimaryKey()] = true;
        $keys = ConceptosalidaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdconceptosalida(),
            $keys[1] => $this->getConceptosalidaNombre(),
            $keys[2] => $this->getAlmacenorigen(),
            $keys[3] => $this->getAlmacendestino(),
            $keys[4] => $this->getMismasucursal(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collRequisicions) {
                $result['Requisicions'] = $this->collRequisicions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = ConceptosalidaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdconceptosalida($value);
                break;
            case 1:
                $this->setConceptosalidaNombre($value);
                break;
            case 2:
                $this->setAlmacenorigen($value);
                break;
            case 3:
                $this->setAlmacendestino($value);
                break;
            case 4:
                $this->setMismasucursal($value);
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
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = ConceptosalidaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdconceptosalida($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setConceptosalidaNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setAlmacenorigen($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setAlmacendestino($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setMismasucursal($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ConceptosalidaPeer::DATABASE_NAME);

        if ($this->isColumnModified(ConceptosalidaPeer::IDCONCEPTOSALIDA)) $criteria->add(ConceptosalidaPeer::IDCONCEPTOSALIDA, $this->idconceptosalida);
        if ($this->isColumnModified(ConceptosalidaPeer::CONCEPTOSALIDA_NOMBRE)) $criteria->add(ConceptosalidaPeer::CONCEPTOSALIDA_NOMBRE, $this->conceptosalida_nombre);
        if ($this->isColumnModified(ConceptosalidaPeer::ALMACENORIGEN)) $criteria->add(ConceptosalidaPeer::ALMACENORIGEN, $this->almacenorigen);
        if ($this->isColumnModified(ConceptosalidaPeer::ALMACENDESTINO)) $criteria->add(ConceptosalidaPeer::ALMACENDESTINO, $this->almacendestino);
        if ($this->isColumnModified(ConceptosalidaPeer::MISMASUCURSAL)) $criteria->add(ConceptosalidaPeer::MISMASUCURSAL, $this->mismasucursal);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(ConceptosalidaPeer::DATABASE_NAME);
        $criteria->add(ConceptosalidaPeer::IDCONCEPTOSALIDA, $this->idconceptosalida);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdconceptosalida();
    }

    /**
     * Generic method to set the primary key (idconceptosalida column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdconceptosalida($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdconceptosalida();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Conceptosalida (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setConceptosalidaNombre($this->getConceptosalidaNombre());
        $copyObj->setAlmacenorigen($this->getAlmacenorigen());
        $copyObj->setAlmacendestino($this->getAlmacendestino());
        $copyObj->setMismasucursal($this->getMismasucursal());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getRequisicions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addRequisicion($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdconceptosalida(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Conceptosalida Clone of current object.
     * @throws PropelException
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
     * @return ConceptosalidaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ConceptosalidaPeer();
        }

        return self::$peer;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('Requisicion' == $relationName) {
            $this->initRequisicions();
        }
    }

    /**
     * Clears out the collRequisicions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Conceptosalida The current object (for fluent API support)
     * @see        addRequisicions()
     */
    public function clearRequisicions()
    {
        $this->collRequisicions = null; // important to set this to null since that means it is uninitialized
        $this->collRequisicionsPartial = null;

        return $this;
    }

    /**
     * reset is the collRequisicions collection loaded partially
     *
     * @return void
     */
    public function resetPartialRequisicions($v = true)
    {
        $this->collRequisicionsPartial = $v;
    }

    /**
     * Initializes the collRequisicions collection.
     *
     * By default this just sets the collRequisicions collection to an empty array (like clearcollRequisicions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initRequisicions($overrideExisting = true)
    {
        if (null !== $this->collRequisicions && !$overrideExisting) {
            return;
        }
        $this->collRequisicions = new PropelObjectCollection();
        $this->collRequisicions->setModel('Requisicion');
    }

    /**
     * Gets an array of Requisicion objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Conceptosalida is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     * @throws PropelException
     */
    public function getRequisicions($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collRequisicionsPartial && !$this->isNew();
        if (null === $this->collRequisicions || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collRequisicions) {
                // return empty collection
                $this->initRequisicions();
            } else {
                $collRequisicions = RequisicionQuery::create(null, $criteria)
                    ->filterByConceptosalida($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collRequisicionsPartial && count($collRequisicions)) {
                      $this->initRequisicions(false);

                      foreach ($collRequisicions as $obj) {
                        if (false == $this->collRequisicions->contains($obj)) {
                          $this->collRequisicions->append($obj);
                        }
                      }

                      $this->collRequisicionsPartial = true;
                    }

                    $collRequisicions->getInternalIterator()->rewind();

                    return $collRequisicions;
                }

                if ($partial && $this->collRequisicions) {
                    foreach ($this->collRequisicions as $obj) {
                        if ($obj->isNew()) {
                            $collRequisicions[] = $obj;
                        }
                    }
                }

                $this->collRequisicions = $collRequisicions;
                $this->collRequisicionsPartial = false;
            }
        }

        return $this->collRequisicions;
    }

    /**
     * Sets a collection of Requisicion objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $requisicions A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Conceptosalida The current object (for fluent API support)
     */
    public function setRequisicions(PropelCollection $requisicions, PropelPDO $con = null)
    {
        $requisicionsToDelete = $this->getRequisicions(new Criteria(), $con)->diff($requisicions);


        $this->requisicionsScheduledForDeletion = $requisicionsToDelete;

        foreach ($requisicionsToDelete as $requisicionRemoved) {
            $requisicionRemoved->setConceptosalida(null);
        }

        $this->collRequisicions = null;
        foreach ($requisicions as $requisicion) {
            $this->addRequisicion($requisicion);
        }

        $this->collRequisicions = $requisicions;
        $this->collRequisicionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Requisicion objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Requisicion objects.
     * @throws PropelException
     */
    public function countRequisicions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collRequisicionsPartial && !$this->isNew();
        if (null === $this->collRequisicions || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collRequisicions) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getRequisicions());
            }
            $query = RequisicionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByConceptosalida($this)
                ->count($con);
        }

        return count($this->collRequisicions);
    }

    /**
     * Method called to associate a Requisicion object to this object
     * through the Requisicion foreign key attribute.
     *
     * @param    Requisicion $l Requisicion
     * @return Conceptosalida The current object (for fluent API support)
     */
    public function addRequisicion(Requisicion $l)
    {
        if ($this->collRequisicions === null) {
            $this->initRequisicions();
            $this->collRequisicionsPartial = true;
        }

        if (!in_array($l, $this->collRequisicions->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddRequisicion($l);

            if ($this->requisicionsScheduledForDeletion and $this->requisicionsScheduledForDeletion->contains($l)) {
                $this->requisicionsScheduledForDeletion->remove($this->requisicionsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Requisicion $requisicion The requisicion object to add.
     */
    protected function doAddRequisicion($requisicion)
    {
        $this->collRequisicions[]= $requisicion;
        $requisicion->setConceptosalida($this);
    }

    /**
     * @param	Requisicion $requisicion The requisicion object to remove.
     * @return Conceptosalida The current object (for fluent API support)
     */
    public function removeRequisicion($requisicion)
    {
        if ($this->getRequisicions()->contains($requisicion)) {
            $this->collRequisicions->remove($this->collRequisicions->search($requisicion));
            if (null === $this->requisicionsScheduledForDeletion) {
                $this->requisicionsScheduledForDeletion = clone $this->collRequisicions;
                $this->requisicionsScheduledForDeletion->clear();
            }
            $this->requisicionsScheduledForDeletion[]= clone $requisicion;
            $requisicion->setConceptosalida(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Conceptosalida is new, it will return
     * an empty collection; or if this Conceptosalida has previously
     * been saved, it will retrieve related Requisicions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Conceptosalida.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsJoinAlmacenRelatedByIdalmacendestino($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('AlmacenRelatedByIdalmacendestino', $join_behavior);

        return $this->getRequisicions($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Conceptosalida is new, it will return
     * an empty collection; or if this Conceptosalida has previously
     * been saved, it will retrieve related Requisicions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Conceptosalida.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsJoinAlmacenRelatedByIdalmacenorigen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('AlmacenRelatedByIdalmacenorigen', $join_behavior);

        return $this->getRequisicions($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Conceptosalida is new, it will return
     * an empty collection; or if this Conceptosalida has previously
     * been saved, it will retrieve related Requisicions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Conceptosalida.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsJoinUsuarioRelatedByIdauditor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdauditor', $join_behavior);

        return $this->getRequisicions($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Conceptosalida is new, it will return
     * an empty collection; or if this Conceptosalida has previously
     * been saved, it will retrieve related Requisicions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Conceptosalida.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsJoinEmpresa($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('Empresa', $join_behavior);

        return $this->getRequisicions($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Conceptosalida is new, it will return
     * an empty collection; or if this Conceptosalida has previously
     * been saved, it will retrieve related Requisicions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Conceptosalida.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsJoinSucursalRelatedByIdsucursaldestino($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('SucursalRelatedByIdsucursaldestino', $join_behavior);

        return $this->getRequisicions($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Conceptosalida is new, it will return
     * an empty collection; or if this Conceptosalida has previously
     * been saved, it will retrieve related Requisicions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Conceptosalida.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsJoinSucursalRelatedByIdsucursalorigen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('SucursalRelatedByIdsucursalorigen', $join_behavior);

        return $this->getRequisicions($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Conceptosalida is new, it will return
     * an empty collection; or if this Conceptosalida has previously
     * been saved, it will retrieve related Requisicions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Conceptosalida.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsJoinUsuarioRelatedByIdusuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdusuario', $join_behavior);

        return $this->getRequisicions($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idconceptosalida = null;
        $this->conceptosalida_nombre = null;
        $this->almacenorigen = null;
        $this->almacendestino = null;
        $this->mismasucursal = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->collRequisicions) {
                foreach ($this->collRequisicions as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collRequisicions instanceof PropelCollection) {
            $this->collRequisicions->clearIterator();
        }
        $this->collRequisicions = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ConceptosalidaPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
