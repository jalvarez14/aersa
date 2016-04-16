<?php


/**
 * Base class that represents a row from the 'plantillatablajeria' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BasePlantillatablajeria extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PlantillatablajeriaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PlantillatablajeriaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idplantillatablajeria field.
     * @var        int
     */
    protected $idplantillatablajeria;

    /**
     * The value for the idempresa field.
     * @var        int
     */
    protected $idempresa;

    /**
     * The value for the idproducto field.
     * @var        int
     */
    protected $idproducto;

    /**
     * The value for the plantillatablajeria_nombre field.
     * @var        string
     */
    protected $plantillatablajeria_nombre;

    /**
     * The value for the plantillatablajeria_descripcion field.
     * @var        string
     */
    protected $plantillatablajeria_descripcion;

    /**
     * @var        Empresa
     */
    protected $aEmpresa;

    /**
     * @var        Producto
     */
    protected $aProducto;

    /**
     * @var        PropelObjectCollection|Plantillatablajeriadetalle[] Collection to store aggregation of Plantillatablajeriadetalle objects.
     */
    protected $collPlantillatablajeriadetalles;
    protected $collPlantillatablajeriadetallesPartial;

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
    protected $plantillatablajeriadetallesScheduledForDeletion = null;

    /**
     * Get the [idplantillatablajeria] column value.
     *
     * @return int
     */
    public function getIdplantillatablajeria()
    {

        return $this->idplantillatablajeria;
    }

    /**
     * Get the [idempresa] column value.
     *
     * @return int
     */
    public function getIdempresa()
    {

        return $this->idempresa;
    }

    /**
     * Get the [idproducto] column value.
     *
     * @return int
     */
    public function getIdproducto()
    {

        return $this->idproducto;
    }

    /**
     * Get the [plantillatablajeria_nombre] column value.
     *
     * @return string
     */
    public function getPlantillatablajeriaNombre()
    {

        return $this->plantillatablajeria_nombre;
    }

    /**
     * Get the [plantillatablajeria_descripcion] column value.
     *
     * @return string
     */
    public function getPlantillatablajeriaDescripcion()
    {

        return $this->plantillatablajeria_descripcion;
    }

    /**
     * Set the value of [idplantillatablajeria] column.
     *
     * @param  int $v new value
     * @return Plantillatablajeria The current object (for fluent API support)
     */
    public function setIdplantillatablajeria($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idplantillatablajeria !== $v) {
            $this->idplantillatablajeria = $v;
            $this->modifiedColumns[] = PlantillatablajeriaPeer::IDPLANTILLATABLAJERIA;
        }


        return $this;
    } // setIdplantillatablajeria()

    /**
     * Set the value of [idempresa] column.
     *
     * @param  int $v new value
     * @return Plantillatablajeria The current object (for fluent API support)
     */
    public function setIdempresa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempresa !== $v) {
            $this->idempresa = $v;
            $this->modifiedColumns[] = PlantillatablajeriaPeer::IDEMPRESA;
        }

        if ($this->aEmpresa !== null && $this->aEmpresa->getIdempresa() !== $v) {
            $this->aEmpresa = null;
        }


        return $this;
    } // setIdempresa()

    /**
     * Set the value of [idproducto] column.
     *
     * @param  int $v new value
     * @return Plantillatablajeria The current object (for fluent API support)
     */
    public function setIdproducto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproducto !== $v) {
            $this->idproducto = $v;
            $this->modifiedColumns[] = PlantillatablajeriaPeer::IDPRODUCTO;
        }

        if ($this->aProducto !== null && $this->aProducto->getIdproducto() !== $v) {
            $this->aProducto = null;
        }


        return $this;
    } // setIdproducto()

    /**
     * Set the value of [plantillatablajeria_nombre] column.
     *
     * @param  string $v new value
     * @return Plantillatablajeria The current object (for fluent API support)
     */
    public function setPlantillatablajeriaNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->plantillatablajeria_nombre !== $v) {
            $this->plantillatablajeria_nombre = $v;
            $this->modifiedColumns[] = PlantillatablajeriaPeer::PLANTILLATABLAJERIA_NOMBRE;
        }


        return $this;
    } // setPlantillatablajeriaNombre()

    /**
     * Set the value of [plantillatablajeria_descripcion] column.
     *
     * @param  string $v new value
     * @return Plantillatablajeria The current object (for fluent API support)
     */
    public function setPlantillatablajeriaDescripcion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->plantillatablajeria_descripcion !== $v) {
            $this->plantillatablajeria_descripcion = $v;
            $this->modifiedColumns[] = PlantillatablajeriaPeer::PLANTILLATABLAJERIA_DESCRIPCION;
        }


        return $this;
    } // setPlantillatablajeriaDescripcion()

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

            $this->idplantillatablajeria = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idempresa = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idproducto = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->plantillatablajeria_nombre = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->plantillatablajeria_descripcion = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = PlantillatablajeriaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Plantillatablajeria object", $e);
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

        if ($this->aEmpresa !== null && $this->idempresa !== $this->aEmpresa->getIdempresa()) {
            $this->aEmpresa = null;
        }
        if ($this->aProducto !== null && $this->idproducto !== $this->aProducto->getIdproducto()) {
            $this->aProducto = null;
        }
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
            $con = Propel::getConnection(PlantillatablajeriaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PlantillatablajeriaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aEmpresa = null;
            $this->aProducto = null;
            $this->collPlantillatablajeriadetalles = null;

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
            $con = Propel::getConnection(PlantillatablajeriaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PlantillatablajeriaQuery::create()
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
            $con = Propel::getConnection(PlantillatablajeriaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                PlantillatablajeriaPeer::addInstanceToPool($this);
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

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aEmpresa !== null) {
                if ($this->aEmpresa->isModified() || $this->aEmpresa->isNew()) {
                    $affectedRows += $this->aEmpresa->save($con);
                }
                $this->setEmpresa($this->aEmpresa);
            }

            if ($this->aProducto !== null) {
                if ($this->aProducto->isModified() || $this->aProducto->isNew()) {
                    $affectedRows += $this->aProducto->save($con);
                }
                $this->setProducto($this->aProducto);
            }

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

            if ($this->plantillatablajeriadetallesScheduledForDeletion !== null) {
                if (!$this->plantillatablajeriadetallesScheduledForDeletion->isEmpty()) {
                    PlantillatablajeriadetalleQuery::create()
                        ->filterByPrimaryKeys($this->plantillatablajeriadetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->plantillatablajeriadetallesScheduledForDeletion = null;
                }
            }

            if ($this->collPlantillatablajeriadetalles !== null) {
                foreach ($this->collPlantillatablajeriadetalles as $referrerFK) {
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

        $this->modifiedColumns[] = PlantillatablajeriaPeer::IDPLANTILLATABLAJERIA;
        if (null !== $this->idplantillatablajeria) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PlantillatablajeriaPeer::IDPLANTILLATABLAJERIA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PlantillatablajeriaPeer::IDPLANTILLATABLAJERIA)) {
            $modifiedColumns[':p' . $index++]  = '`idplantillatablajeria`';
        }
        if ($this->isColumnModified(PlantillatablajeriaPeer::IDEMPRESA)) {
            $modifiedColumns[':p' . $index++]  = '`idempresa`';
        }
        if ($this->isColumnModified(PlantillatablajeriaPeer::IDPRODUCTO)) {
            $modifiedColumns[':p' . $index++]  = '`idproducto`';
        }
        if ($this->isColumnModified(PlantillatablajeriaPeer::PLANTILLATABLAJERIA_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`plantillatablajeria_nombre`';
        }
        if ($this->isColumnModified(PlantillatablajeriaPeer::PLANTILLATABLAJERIA_DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = '`plantillatablajeria_descripcion`';
        }

        $sql = sprintf(
            'INSERT INTO `plantillatablajeria` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idplantillatablajeria`':
                        $stmt->bindValue($identifier, $this->idplantillatablajeria, PDO::PARAM_INT);
                        break;
                    case '`idempresa`':
                        $stmt->bindValue($identifier, $this->idempresa, PDO::PARAM_INT);
                        break;
                    case '`idproducto`':
                        $stmt->bindValue($identifier, $this->idproducto, PDO::PARAM_INT);
                        break;
                    case '`plantillatablajeria_nombre`':
                        $stmt->bindValue($identifier, $this->plantillatablajeria_nombre, PDO::PARAM_STR);
                        break;
                    case '`plantillatablajeria_descripcion`':
                        $stmt->bindValue($identifier, $this->plantillatablajeria_descripcion, PDO::PARAM_STR);
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
        $this->setIdplantillatablajeria($pk);

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


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aEmpresa !== null) {
                if (!$this->aEmpresa->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEmpresa->getValidationFailures());
                }
            }

            if ($this->aProducto !== null) {
                if (!$this->aProducto->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aProducto->getValidationFailures());
                }
            }


            if (($retval = PlantillatablajeriaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collPlantillatablajeriadetalles !== null) {
                    foreach ($this->collPlantillatablajeriadetalles as $referrerFK) {
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
        $pos = PlantillatablajeriaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdplantillatablajeria();
                break;
            case 1:
                return $this->getIdempresa();
                break;
            case 2:
                return $this->getIdproducto();
                break;
            case 3:
                return $this->getPlantillatablajeriaNombre();
                break;
            case 4:
                return $this->getPlantillatablajeriaDescripcion();
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
        if (isset($alreadyDumpedObjects['Plantillatablajeria'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Plantillatablajeria'][$this->getPrimaryKey()] = true;
        $keys = PlantillatablajeriaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdplantillatablajeria(),
            $keys[1] => $this->getIdempresa(),
            $keys[2] => $this->getIdproducto(),
            $keys[3] => $this->getPlantillatablajeriaNombre(),
            $keys[4] => $this->getPlantillatablajeriaDescripcion(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aEmpresa) {
                $result['Empresa'] = $this->aEmpresa->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aProducto) {
                $result['Producto'] = $this->aProducto->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collPlantillatablajeriadetalles) {
                $result['Plantillatablajeriadetalles'] = $this->collPlantillatablajeriadetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = PlantillatablajeriaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdplantillatablajeria($value);
                break;
            case 1:
                $this->setIdempresa($value);
                break;
            case 2:
                $this->setIdproducto($value);
                break;
            case 3:
                $this->setPlantillatablajeriaNombre($value);
                break;
            case 4:
                $this->setPlantillatablajeriaDescripcion($value);
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
        $keys = PlantillatablajeriaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdplantillatablajeria($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdempresa($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdproducto($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPlantillatablajeriaNombre($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPlantillatablajeriaDescripcion($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PlantillatablajeriaPeer::DATABASE_NAME);

        if ($this->isColumnModified(PlantillatablajeriaPeer::IDPLANTILLATABLAJERIA)) $criteria->add(PlantillatablajeriaPeer::IDPLANTILLATABLAJERIA, $this->idplantillatablajeria);
        if ($this->isColumnModified(PlantillatablajeriaPeer::IDEMPRESA)) $criteria->add(PlantillatablajeriaPeer::IDEMPRESA, $this->idempresa);
        if ($this->isColumnModified(PlantillatablajeriaPeer::IDPRODUCTO)) $criteria->add(PlantillatablajeriaPeer::IDPRODUCTO, $this->idproducto);
        if ($this->isColumnModified(PlantillatablajeriaPeer::PLANTILLATABLAJERIA_NOMBRE)) $criteria->add(PlantillatablajeriaPeer::PLANTILLATABLAJERIA_NOMBRE, $this->plantillatablajeria_nombre);
        if ($this->isColumnModified(PlantillatablajeriaPeer::PLANTILLATABLAJERIA_DESCRIPCION)) $criteria->add(PlantillatablajeriaPeer::PLANTILLATABLAJERIA_DESCRIPCION, $this->plantillatablajeria_descripcion);

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
        $criteria = new Criteria(PlantillatablajeriaPeer::DATABASE_NAME);
        $criteria->add(PlantillatablajeriaPeer::IDPLANTILLATABLAJERIA, $this->idplantillatablajeria);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdplantillatablajeria();
    }

    /**
     * Generic method to set the primary key (idplantillatablajeria column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdplantillatablajeria($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdplantillatablajeria();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Plantillatablajeria (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdempresa($this->getIdempresa());
        $copyObj->setIdproducto($this->getIdproducto());
        $copyObj->setPlantillatablajeriaNombre($this->getPlantillatablajeriaNombre());
        $copyObj->setPlantillatablajeriaDescripcion($this->getPlantillatablajeriaDescripcion());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getPlantillatablajeriadetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPlantillatablajeriadetalle($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdplantillatablajeria(NULL); // this is a auto-increment column, so set to default value
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
     * @return Plantillatablajeria Clone of current object.
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
     * @return PlantillatablajeriaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PlantillatablajeriaPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Empresa object.
     *
     * @param                  Empresa $v
     * @return Plantillatablajeria The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEmpresa(Empresa $v = null)
    {
        if ($v === null) {
            $this->setIdempresa(NULL);
        } else {
            $this->setIdempresa($v->getIdempresa());
        }

        $this->aEmpresa = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Empresa object, it will not be re-added.
        if ($v !== null) {
            $v->addPlantillatablajeria($this);
        }


        return $this;
    }


    /**
     * Get the associated Empresa object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Empresa The associated Empresa object.
     * @throws PropelException
     */
    public function getEmpresa(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aEmpresa === null && ($this->idempresa !== null) && $doQuery) {
            $this->aEmpresa = EmpresaQuery::create()->findPk($this->idempresa, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEmpresa->addPlantillatablajerias($this);
             */
        }

        return $this->aEmpresa;
    }

    /**
     * Declares an association between this object and a Producto object.
     *
     * @param                  Producto $v
     * @return Plantillatablajeria The current object (for fluent API support)
     * @throws PropelException
     */
    public function setProducto(Producto $v = null)
    {
        if ($v === null) {
            $this->setIdproducto(NULL);
        } else {
            $this->setIdproducto($v->getIdproducto());
        }

        $this->aProducto = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Producto object, it will not be re-added.
        if ($v !== null) {
            $v->addPlantillatablajeria($this);
        }


        return $this;
    }


    /**
     * Get the associated Producto object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Producto The associated Producto object.
     * @throws PropelException
     */
    public function getProducto(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aProducto === null && ($this->idproducto !== null) && $doQuery) {
            $this->aProducto = ProductoQuery::create()->findPk($this->idproducto, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aProducto->addPlantillatablajerias($this);
             */
        }

        return $this->aProducto;
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
        if ('Plantillatablajeriadetalle' == $relationName) {
            $this->initPlantillatablajeriadetalles();
        }
    }

    /**
     * Clears out the collPlantillatablajeriadetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Plantillatablajeria The current object (for fluent API support)
     * @see        addPlantillatablajeriadetalles()
     */
    public function clearPlantillatablajeriadetalles()
    {
        $this->collPlantillatablajeriadetalles = null; // important to set this to null since that means it is uninitialized
        $this->collPlantillatablajeriadetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collPlantillatablajeriadetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialPlantillatablajeriadetalles($v = true)
    {
        $this->collPlantillatablajeriadetallesPartial = $v;
    }

    /**
     * Initializes the collPlantillatablajeriadetalles collection.
     *
     * By default this just sets the collPlantillatablajeriadetalles collection to an empty array (like clearcollPlantillatablajeriadetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPlantillatablajeriadetalles($overrideExisting = true)
    {
        if (null !== $this->collPlantillatablajeriadetalles && !$overrideExisting) {
            return;
        }
        $this->collPlantillatablajeriadetalles = new PropelObjectCollection();
        $this->collPlantillatablajeriadetalles->setModel('Plantillatablajeriadetalle');
    }

    /**
     * Gets an array of Plantillatablajeriadetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Plantillatablajeria is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Plantillatablajeriadetalle[] List of Plantillatablajeriadetalle objects
     * @throws PropelException
     */
    public function getPlantillatablajeriadetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collPlantillatablajeriadetallesPartial && !$this->isNew();
        if (null === $this->collPlantillatablajeriadetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPlantillatablajeriadetalles) {
                // return empty collection
                $this->initPlantillatablajeriadetalles();
            } else {
                $collPlantillatablajeriadetalles = PlantillatablajeriadetalleQuery::create(null, $criteria)
                    ->filterByPlantillatablajeria($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collPlantillatablajeriadetallesPartial && count($collPlantillatablajeriadetalles)) {
                      $this->initPlantillatablajeriadetalles(false);

                      foreach ($collPlantillatablajeriadetalles as $obj) {
                        if (false == $this->collPlantillatablajeriadetalles->contains($obj)) {
                          $this->collPlantillatablajeriadetalles->append($obj);
                        }
                      }

                      $this->collPlantillatablajeriadetallesPartial = true;
                    }

                    $collPlantillatablajeriadetalles->getInternalIterator()->rewind();

                    return $collPlantillatablajeriadetalles;
                }

                if ($partial && $this->collPlantillatablajeriadetalles) {
                    foreach ($this->collPlantillatablajeriadetalles as $obj) {
                        if ($obj->isNew()) {
                            $collPlantillatablajeriadetalles[] = $obj;
                        }
                    }
                }

                $this->collPlantillatablajeriadetalles = $collPlantillatablajeriadetalles;
                $this->collPlantillatablajeriadetallesPartial = false;
            }
        }

        return $this->collPlantillatablajeriadetalles;
    }

    /**
     * Sets a collection of Plantillatablajeriadetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $plantillatablajeriadetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Plantillatablajeria The current object (for fluent API support)
     */
    public function setPlantillatablajeriadetalles(PropelCollection $plantillatablajeriadetalles, PropelPDO $con = null)
    {
        $plantillatablajeriadetallesToDelete = $this->getPlantillatablajeriadetalles(new Criteria(), $con)->diff($plantillatablajeriadetalles);


        $this->plantillatablajeriadetallesScheduledForDeletion = $plantillatablajeriadetallesToDelete;

        foreach ($plantillatablajeriadetallesToDelete as $plantillatablajeriadetalleRemoved) {
            $plantillatablajeriadetalleRemoved->setPlantillatablajeria(null);
        }

        $this->collPlantillatablajeriadetalles = null;
        foreach ($plantillatablajeriadetalles as $plantillatablajeriadetalle) {
            $this->addPlantillatablajeriadetalle($plantillatablajeriadetalle);
        }

        $this->collPlantillatablajeriadetalles = $plantillatablajeriadetalles;
        $this->collPlantillatablajeriadetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Plantillatablajeriadetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Plantillatablajeriadetalle objects.
     * @throws PropelException
     */
    public function countPlantillatablajeriadetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collPlantillatablajeriadetallesPartial && !$this->isNew();
        if (null === $this->collPlantillatablajeriadetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPlantillatablajeriadetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPlantillatablajeriadetalles());
            }
            $query = PlantillatablajeriadetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByPlantillatablajeria($this)
                ->count($con);
        }

        return count($this->collPlantillatablajeriadetalles);
    }

    /**
     * Method called to associate a Plantillatablajeriadetalle object to this object
     * through the Plantillatablajeriadetalle foreign key attribute.
     *
     * @param    Plantillatablajeriadetalle $l Plantillatablajeriadetalle
     * @return Plantillatablajeria The current object (for fluent API support)
     */
    public function addPlantillatablajeriadetalle(Plantillatablajeriadetalle $l)
    {
        if ($this->collPlantillatablajeriadetalles === null) {
            $this->initPlantillatablajeriadetalles();
            $this->collPlantillatablajeriadetallesPartial = true;
        }

        if (!in_array($l, $this->collPlantillatablajeriadetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddPlantillatablajeriadetalle($l);

            if ($this->plantillatablajeriadetallesScheduledForDeletion and $this->plantillatablajeriadetallesScheduledForDeletion->contains($l)) {
                $this->plantillatablajeriadetallesScheduledForDeletion->remove($this->plantillatablajeriadetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Plantillatablajeriadetalle $plantillatablajeriadetalle The plantillatablajeriadetalle object to add.
     */
    protected function doAddPlantillatablajeriadetalle($plantillatablajeriadetalle)
    {
        $this->collPlantillatablajeriadetalles[]= $plantillatablajeriadetalle;
        $plantillatablajeriadetalle->setPlantillatablajeria($this);
    }

    /**
     * @param	Plantillatablajeriadetalle $plantillatablajeriadetalle The plantillatablajeriadetalle object to remove.
     * @return Plantillatablajeria The current object (for fluent API support)
     */
    public function removePlantillatablajeriadetalle($plantillatablajeriadetalle)
    {
        if ($this->getPlantillatablajeriadetalles()->contains($plantillatablajeriadetalle)) {
            $this->collPlantillatablajeriadetalles->remove($this->collPlantillatablajeriadetalles->search($plantillatablajeriadetalle));
            if (null === $this->plantillatablajeriadetallesScheduledForDeletion) {
                $this->plantillatablajeriadetallesScheduledForDeletion = clone $this->collPlantillatablajeriadetalles;
                $this->plantillatablajeriadetallesScheduledForDeletion->clear();
            }
            $this->plantillatablajeriadetallesScheduledForDeletion[]= clone $plantillatablajeriadetalle;
            $plantillatablajeriadetalle->setPlantillatablajeria(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Plantillatablajeria is new, it will return
     * an empty collection; or if this Plantillatablajeria has previously
     * been saved, it will retrieve related Plantillatablajeriadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Plantillatablajeria.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Plantillatablajeriadetalle[] List of Plantillatablajeriadetalle objects
     */
    public function getPlantillatablajeriadetallesJoinProducto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PlantillatablajeriadetalleQuery::create(null, $criteria);
        $query->joinWith('Producto', $join_behavior);

        return $this->getPlantillatablajeriadetalles($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idplantillatablajeria = null;
        $this->idempresa = null;
        $this->idproducto = null;
        $this->plantillatablajeria_nombre = null;
        $this->plantillatablajeria_descripcion = null;
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
            if ($this->collPlantillatablajeriadetalles) {
                foreach ($this->collPlantillatablajeriadetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aEmpresa instanceof Persistent) {
              $this->aEmpresa->clearAllReferences($deep);
            }
            if ($this->aProducto instanceof Persistent) {
              $this->aProducto->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collPlantillatablajeriadetalles instanceof PropelCollection) {
            $this->collPlantillatablajeriadetalles->clearIterator();
        }
        $this->collPlantillatablajeriadetalles = null;
        $this->aEmpresa = null;
        $this->aProducto = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(PlantillatablajeriaPeer::DEFAULT_STRING_FORMAT);
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
