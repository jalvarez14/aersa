<?php


/**
 * Base class that represents a row from the 'categoria' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseCategoria extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CategoriaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CategoriaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idcategoria field.
     * @var        int
     */
    protected $idcategoria;

    /**
     * The value for the categoria_nombre field.
     * @var        string
     */
    protected $categoria_nombre;

    /**
     * The value for the idcategoriapadre field.
     * @var        int
     */
    protected $idcategoriapadre;

    /**
     * The value for the categoria_almacenable field.
     * @var        boolean
     */
    protected $categoria_almacenable;

    /**
     * @var        Categoria
     */
    protected $aCategoriaRelatedByIdcategoriapadre;

    /**
     * @var        PropelObjectCollection|Categoria[] Collection to store aggregation of Categoria objects.
     */
    protected $collCategoriasRelatedByIdcategoria;
    protected $collCategoriasRelatedByIdcategoriaPartial;

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
    protected $categoriasRelatedByIdcategoriaScheduledForDeletion = null;

    /**
     * Get the [idcategoria] column value.
     *
     * @return int
     */
    public function getIdcategoria()
    {

        return $this->idcategoria;
    }

    /**
     * Get the [categoria_nombre] column value.
     *
     * @return string
     */
    public function getCategoriaNombre()
    {

        return $this->categoria_nombre;
    }

    /**
     * Get the [idcategoriapadre] column value.
     *
     * @return int
     */
    public function getIdcategoriapadre()
    {

        return $this->idcategoriapadre;
    }

    /**
     * Get the [categoria_almacenable] column value.
     *
     * @return boolean
     */
    public function getCategoriaAlmacenable()
    {

        return $this->categoria_almacenable;
    }

    /**
     * Set the value of [idcategoria] column.
     *
     * @param  int $v new value
     * @return Categoria The current object (for fluent API support)
     */
    public function setIdcategoria($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcategoria !== $v) {
            $this->idcategoria = $v;
            $this->modifiedColumns[] = CategoriaPeer::IDCATEGORIA;
        }


        return $this;
    } // setIdcategoria()

    /**
     * Set the value of [categoria_nombre] column.
     *
     * @param  string $v new value
     * @return Categoria The current object (for fluent API support)
     */
    public function setCategoriaNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->categoria_nombre !== $v) {
            $this->categoria_nombre = $v;
            $this->modifiedColumns[] = CategoriaPeer::CATEGORIA_NOMBRE;
        }


        return $this;
    } // setCategoriaNombre()

    /**
     * Set the value of [idcategoriapadre] column.
     *
     * @param  int $v new value
     * @return Categoria The current object (for fluent API support)
     */
    public function setIdcategoriapadre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcategoriapadre !== $v) {
            $this->idcategoriapadre = $v;
            $this->modifiedColumns[] = CategoriaPeer::IDCATEGORIAPADRE;
        }

        if ($this->aCategoriaRelatedByIdcategoriapadre !== null && $this->aCategoriaRelatedByIdcategoriapadre->getIdcategoria() !== $v) {
            $this->aCategoriaRelatedByIdcategoriapadre = null;
        }


        return $this;
    } // setIdcategoriapadre()

    /**
     * Sets the value of the [categoria_almacenable] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Categoria The current object (for fluent API support)
     */
    public function setCategoriaAlmacenable($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->categoria_almacenable !== $v) {
            $this->categoria_almacenable = $v;
            $this->modifiedColumns[] = CategoriaPeer::CATEGORIA_ALMACENABLE;
        }


        return $this;
    } // setCategoriaAlmacenable()

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

            $this->idcategoria = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->categoria_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->idcategoriapadre = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->categoria_almacenable = ($row[$startcol + 3] !== null) ? (boolean) $row[$startcol + 3] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 4; // 4 = CategoriaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Categoria object", $e);
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

        if ($this->aCategoriaRelatedByIdcategoriapadre !== null && $this->idcategoriapadre !== $this->aCategoriaRelatedByIdcategoriapadre->getIdcategoria()) {
            $this->aCategoriaRelatedByIdcategoriapadre = null;
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
            $con = Propel::getConnection(CategoriaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CategoriaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCategoriaRelatedByIdcategoriapadre = null;
            $this->collCategoriasRelatedByIdcategoria = null;

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
            $con = Propel::getConnection(CategoriaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CategoriaQuery::create()
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
            $con = Propel::getConnection(CategoriaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CategoriaPeer::addInstanceToPool($this);
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

            if ($this->aCategoriaRelatedByIdcategoriapadre !== null) {
                if ($this->aCategoriaRelatedByIdcategoriapadre->isModified() || $this->aCategoriaRelatedByIdcategoriapadre->isNew()) {
                    $affectedRows += $this->aCategoriaRelatedByIdcategoriapadre->save($con);
                }
                $this->setCategoriaRelatedByIdcategoriapadre($this->aCategoriaRelatedByIdcategoriapadre);
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

            if ($this->categoriasRelatedByIdcategoriaScheduledForDeletion !== null) {
                if (!$this->categoriasRelatedByIdcategoriaScheduledForDeletion->isEmpty()) {
                    CategoriaQuery::create()
                        ->filterByPrimaryKeys($this->categoriasRelatedByIdcategoriaScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->categoriasRelatedByIdcategoriaScheduledForDeletion = null;
                }
            }

            if ($this->collCategoriasRelatedByIdcategoria !== null) {
                foreach ($this->collCategoriasRelatedByIdcategoria as $referrerFK) {
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

        $this->modifiedColumns[] = CategoriaPeer::IDCATEGORIA;
        if (null !== $this->idcategoria) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CategoriaPeer::IDCATEGORIA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CategoriaPeer::IDCATEGORIA)) {
            $modifiedColumns[':p' . $index++]  = '`idcategoria`';
        }
        if ($this->isColumnModified(CategoriaPeer::CATEGORIA_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`categoria_nombre`';
        }
        if ($this->isColumnModified(CategoriaPeer::IDCATEGORIAPADRE)) {
            $modifiedColumns[':p' . $index++]  = '`idcategoriapadre`';
        }
        if ($this->isColumnModified(CategoriaPeer::CATEGORIA_ALMACENABLE)) {
            $modifiedColumns[':p' . $index++]  = '`categoria_almacenable`';
        }

        $sql = sprintf(
            'INSERT INTO `categoria` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idcategoria`':
                        $stmt->bindValue($identifier, $this->idcategoria, PDO::PARAM_INT);
                        break;
                    case '`categoria_nombre`':
                        $stmt->bindValue($identifier, $this->categoria_nombre, PDO::PARAM_STR);
                        break;
                    case '`idcategoriapadre`':
                        $stmt->bindValue($identifier, $this->idcategoriapadre, PDO::PARAM_INT);
                        break;
                    case '`categoria_almacenable`':
                        $stmt->bindValue($identifier, (int) $this->categoria_almacenable, PDO::PARAM_INT);
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
        $this->setIdcategoria($pk);

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

            if ($this->aCategoriaRelatedByIdcategoriapadre !== null) {
                if (!$this->aCategoriaRelatedByIdcategoriapadre->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCategoriaRelatedByIdcategoriapadre->getValidationFailures());
                }
            }


            if (($retval = CategoriaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCategoriasRelatedByIdcategoria !== null) {
                    foreach ($this->collCategoriasRelatedByIdcategoria as $referrerFK) {
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
        $pos = CategoriaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdcategoria();
                break;
            case 1:
                return $this->getCategoriaNombre();
                break;
            case 2:
                return $this->getIdcategoriapadre();
                break;
            case 3:
                return $this->getCategoriaAlmacenable();
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
        if (isset($alreadyDumpedObjects['Categoria'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Categoria'][$this->getPrimaryKey()] = true;
        $keys = CategoriaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdcategoria(),
            $keys[1] => $this->getCategoriaNombre(),
            $keys[2] => $this->getIdcategoriapadre(),
            $keys[3] => $this->getCategoriaAlmacenable(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aCategoriaRelatedByIdcategoriapadre) {
                $result['CategoriaRelatedByIdcategoriapadre'] = $this->aCategoriaRelatedByIdcategoriapadre->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCategoriasRelatedByIdcategoria) {
                $result['CategoriasRelatedByIdcategoria'] = $this->collCategoriasRelatedByIdcategoria->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CategoriaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdcategoria($value);
                break;
            case 1:
                $this->setCategoriaNombre($value);
                break;
            case 2:
                $this->setIdcategoriapadre($value);
                break;
            case 3:
                $this->setCategoriaAlmacenable($value);
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
        $keys = CategoriaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdcategoria($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setCategoriaNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdcategoriapadre($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCategoriaAlmacenable($arr[$keys[3]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CategoriaPeer::DATABASE_NAME);

        if ($this->isColumnModified(CategoriaPeer::IDCATEGORIA)) $criteria->add(CategoriaPeer::IDCATEGORIA, $this->idcategoria);
        if ($this->isColumnModified(CategoriaPeer::CATEGORIA_NOMBRE)) $criteria->add(CategoriaPeer::CATEGORIA_NOMBRE, $this->categoria_nombre);
        if ($this->isColumnModified(CategoriaPeer::IDCATEGORIAPADRE)) $criteria->add(CategoriaPeer::IDCATEGORIAPADRE, $this->idcategoriapadre);
        if ($this->isColumnModified(CategoriaPeer::CATEGORIA_ALMACENABLE)) $criteria->add(CategoriaPeer::CATEGORIA_ALMACENABLE, $this->categoria_almacenable);

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
        $criteria = new Criteria(CategoriaPeer::DATABASE_NAME);
        $criteria->add(CategoriaPeer::IDCATEGORIA, $this->idcategoria);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdcategoria();
    }

    /**
     * Generic method to set the primary key (idcategoria column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdcategoria($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdcategoria();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Categoria (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCategoriaNombre($this->getCategoriaNombre());
        $copyObj->setIdcategoriapadre($this->getIdcategoriapadre());
        $copyObj->setCategoriaAlmacenable($this->getCategoriaAlmacenable());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCategoriasRelatedByIdcategoria() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCategoriaRelatedByIdcategoria($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdcategoria(NULL); // this is a auto-increment column, so set to default value
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
     * @return Categoria Clone of current object.
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
     * @return CategoriaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CategoriaPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Categoria object.
     *
     * @param                  Categoria $v
     * @return Categoria The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCategoriaRelatedByIdcategoriapadre(Categoria $v = null)
    {
        if ($v === null) {
            $this->setIdcategoriapadre(NULL);
        } else {
            $this->setIdcategoriapadre($v->getIdcategoria());
        }

        $this->aCategoriaRelatedByIdcategoriapadre = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Categoria object, it will not be re-added.
        if ($v !== null) {
            $v->addCategoriaRelatedByIdcategoria($this);
        }


        return $this;
    }


    /**
     * Get the associated Categoria object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Categoria The associated Categoria object.
     * @throws PropelException
     */
    public function getCategoriaRelatedByIdcategoriapadre(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCategoriaRelatedByIdcategoriapadre === null && ($this->idcategoriapadre !== null) && $doQuery) {
            $this->aCategoriaRelatedByIdcategoriapadre = CategoriaQuery::create()->findPk($this->idcategoriapadre, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCategoriaRelatedByIdcategoriapadre->addCategoriasRelatedByIdcategoria($this);
             */
        }

        return $this->aCategoriaRelatedByIdcategoriapadre;
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
        if ('CategoriaRelatedByIdcategoria' == $relationName) {
            $this->initCategoriasRelatedByIdcategoria();
        }
    }

    /**
     * Clears out the collCategoriasRelatedByIdcategoria collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Categoria The current object (for fluent API support)
     * @see        addCategoriasRelatedByIdcategoria()
     */
    public function clearCategoriasRelatedByIdcategoria()
    {
        $this->collCategoriasRelatedByIdcategoria = null; // important to set this to null since that means it is uninitialized
        $this->collCategoriasRelatedByIdcategoriaPartial = null;

        return $this;
    }

    /**
     * reset is the collCategoriasRelatedByIdcategoria collection loaded partially
     *
     * @return void
     */
    public function resetPartialCategoriasRelatedByIdcategoria($v = true)
    {
        $this->collCategoriasRelatedByIdcategoriaPartial = $v;
    }

    /**
     * Initializes the collCategoriasRelatedByIdcategoria collection.
     *
     * By default this just sets the collCategoriasRelatedByIdcategoria collection to an empty array (like clearcollCategoriasRelatedByIdcategoria());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCategoriasRelatedByIdcategoria($overrideExisting = true)
    {
        if (null !== $this->collCategoriasRelatedByIdcategoria && !$overrideExisting) {
            return;
        }
        $this->collCategoriasRelatedByIdcategoria = new PropelObjectCollection();
        $this->collCategoriasRelatedByIdcategoria->setModel('Categoria');
    }

    /**
     * Gets an array of Categoria objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Categoria is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Categoria[] List of Categoria objects
     * @throws PropelException
     */
    public function getCategoriasRelatedByIdcategoria($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCategoriasRelatedByIdcategoriaPartial && !$this->isNew();
        if (null === $this->collCategoriasRelatedByIdcategoria || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCategoriasRelatedByIdcategoria) {
                // return empty collection
                $this->initCategoriasRelatedByIdcategoria();
            } else {
                $collCategoriasRelatedByIdcategoria = CategoriaQuery::create(null, $criteria)
                    ->filterByCategoriaRelatedByIdcategoriapadre($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCategoriasRelatedByIdcategoriaPartial && count($collCategoriasRelatedByIdcategoria)) {
                      $this->initCategoriasRelatedByIdcategoria(false);

                      foreach ($collCategoriasRelatedByIdcategoria as $obj) {
                        if (false == $this->collCategoriasRelatedByIdcategoria->contains($obj)) {
                          $this->collCategoriasRelatedByIdcategoria->append($obj);
                        }
                      }

                      $this->collCategoriasRelatedByIdcategoriaPartial = true;
                    }

                    $collCategoriasRelatedByIdcategoria->getInternalIterator()->rewind();

                    return $collCategoriasRelatedByIdcategoria;
                }

                if ($partial && $this->collCategoriasRelatedByIdcategoria) {
                    foreach ($this->collCategoriasRelatedByIdcategoria as $obj) {
                        if ($obj->isNew()) {
                            $collCategoriasRelatedByIdcategoria[] = $obj;
                        }
                    }
                }

                $this->collCategoriasRelatedByIdcategoria = $collCategoriasRelatedByIdcategoria;
                $this->collCategoriasRelatedByIdcategoriaPartial = false;
            }
        }

        return $this->collCategoriasRelatedByIdcategoria;
    }

    /**
     * Sets a collection of CategoriaRelatedByIdcategoria objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $categoriasRelatedByIdcategoria A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Categoria The current object (for fluent API support)
     */
    public function setCategoriasRelatedByIdcategoria(PropelCollection $categoriasRelatedByIdcategoria, PropelPDO $con = null)
    {
        $categoriasRelatedByIdcategoriaToDelete = $this->getCategoriasRelatedByIdcategoria(new Criteria(), $con)->diff($categoriasRelatedByIdcategoria);


        $this->categoriasRelatedByIdcategoriaScheduledForDeletion = $categoriasRelatedByIdcategoriaToDelete;

        foreach ($categoriasRelatedByIdcategoriaToDelete as $categoriaRelatedByIdcategoriaRemoved) {
            $categoriaRelatedByIdcategoriaRemoved->setCategoriaRelatedByIdcategoriapadre(null);
        }

        $this->collCategoriasRelatedByIdcategoria = null;
        foreach ($categoriasRelatedByIdcategoria as $categoriaRelatedByIdcategoria) {
            $this->addCategoriaRelatedByIdcategoria($categoriaRelatedByIdcategoria);
        }

        $this->collCategoriasRelatedByIdcategoria = $categoriasRelatedByIdcategoria;
        $this->collCategoriasRelatedByIdcategoriaPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Categoria objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Categoria objects.
     * @throws PropelException
     */
    public function countCategoriasRelatedByIdcategoria(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCategoriasRelatedByIdcategoriaPartial && !$this->isNew();
        if (null === $this->collCategoriasRelatedByIdcategoria || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCategoriasRelatedByIdcategoria) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCategoriasRelatedByIdcategoria());
            }
            $query = CategoriaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCategoriaRelatedByIdcategoriapadre($this)
                ->count($con);
        }

        return count($this->collCategoriasRelatedByIdcategoria);
    }

    /**
     * Method called to associate a Categoria object to this object
     * through the Categoria foreign key attribute.
     *
     * @param    Categoria $l Categoria
     * @return Categoria The current object (for fluent API support)
     */
    public function addCategoriaRelatedByIdcategoria(Categoria $l)
    {
        if ($this->collCategoriasRelatedByIdcategoria === null) {
            $this->initCategoriasRelatedByIdcategoria();
            $this->collCategoriasRelatedByIdcategoriaPartial = true;
        }

        if (!in_array($l, $this->collCategoriasRelatedByIdcategoria->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCategoriaRelatedByIdcategoria($l);

            if ($this->categoriasRelatedByIdcategoriaScheduledForDeletion and $this->categoriasRelatedByIdcategoriaScheduledForDeletion->contains($l)) {
                $this->categoriasRelatedByIdcategoriaScheduledForDeletion->remove($this->categoriasRelatedByIdcategoriaScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	CategoriaRelatedByIdcategoria $categoriaRelatedByIdcategoria The categoriaRelatedByIdcategoria object to add.
     */
    protected function doAddCategoriaRelatedByIdcategoria($categoriaRelatedByIdcategoria)
    {
        $this->collCategoriasRelatedByIdcategoria[]= $categoriaRelatedByIdcategoria;
        $categoriaRelatedByIdcategoria->setCategoriaRelatedByIdcategoriapadre($this);
    }

    /**
     * @param	CategoriaRelatedByIdcategoria $categoriaRelatedByIdcategoria The categoriaRelatedByIdcategoria object to remove.
     * @return Categoria The current object (for fluent API support)
     */
    public function removeCategoriaRelatedByIdcategoria($categoriaRelatedByIdcategoria)
    {
        if ($this->getCategoriasRelatedByIdcategoria()->contains($categoriaRelatedByIdcategoria)) {
            $this->collCategoriasRelatedByIdcategoria->remove($this->collCategoriasRelatedByIdcategoria->search($categoriaRelatedByIdcategoria));
            if (null === $this->categoriasRelatedByIdcategoriaScheduledForDeletion) {
                $this->categoriasRelatedByIdcategoriaScheduledForDeletion = clone $this->collCategoriasRelatedByIdcategoria;
                $this->categoriasRelatedByIdcategoriaScheduledForDeletion->clear();
            }
            $this->categoriasRelatedByIdcategoriaScheduledForDeletion[]= clone $categoriaRelatedByIdcategoria;
            $categoriaRelatedByIdcategoria->setCategoriaRelatedByIdcategoriapadre(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idcategoria = null;
        $this->categoria_nombre = null;
        $this->idcategoriapadre = null;
        $this->categoria_almacenable = null;
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
            if ($this->collCategoriasRelatedByIdcategoria) {
                foreach ($this->collCategoriasRelatedByIdcategoria as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCategoriaRelatedByIdcategoriapadre instanceof Persistent) {
              $this->aCategoriaRelatedByIdcategoriapadre->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCategoriasRelatedByIdcategoria instanceof PropelCollection) {
            $this->collCategoriasRelatedByIdcategoria->clearIterator();
        }
        $this->collCategoriasRelatedByIdcategoria = null;
        $this->aCategoriaRelatedByIdcategoriapadre = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CategoriaPeer::DEFAULT_STRING_FORMAT);
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
