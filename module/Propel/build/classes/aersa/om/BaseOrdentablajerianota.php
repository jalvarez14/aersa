<?php


/**
 * Base class that represents a row from the 'ordentablajerianota' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseOrdentablajerianota extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'OrdentablajerianotaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        OrdentablajerianotaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idordentablajerianota field.
     * @var        int
     */
    protected $idordentablajerianota;

    /**
     * The value for the idusuario field.
     * @var        int
     */
    protected $idusuario;

    /**
     * The value for the idordentablajeria field.
     * @var        int
     */
    protected $idordentablajeria;

    /**
     * The value for the ordentablajerianota_nota field.
     * @var        string
     */
    protected $ordentablajerianota_nota;

    /**
     * The value for the ordentablajerianota_fecha field.
     * @var        string
     */
    protected $ordentablajerianota_fecha;

    /**
     * @var        Ordentablajeria
     */
    protected $aOrdentablajeria;

    /**
     * @var        Usuario
     */
    protected $aUsuario;

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
     * Get the [idordentablajerianota] column value.
     *
     * @return int
     */
    public function getIdordentablajerianota()
    {

        return $this->idordentablajerianota;
    }

    /**
     * Get the [idusuario] column value.
     *
     * @return int
     */
    public function getIdusuario()
    {

        return $this->idusuario;
    }

    /**
     * Get the [idordentablajeria] column value.
     *
     * @return int
     */
    public function getIdordentablajeria()
    {

        return $this->idordentablajeria;
    }

    /**
     * Get the [ordentablajerianota_nota] column value.
     *
     * @return string
     */
    public function getOrdentablajerianotaNota()
    {

        return $this->ordentablajerianota_nota;
    }

    /**
     * Get the [optionally formatted] temporal [ordentablajerianota_fecha] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getOrdentablajerianotaFecha($format = 'Y-m-d H:i:s')
    {
        if ($this->ordentablajerianota_fecha === null) {
            return null;
        }

        if ($this->ordentablajerianota_fecha === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->ordentablajerianota_fecha);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->ordentablajerianota_fecha, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Set the value of [idordentablajerianota] column.
     *
     * @param  int $v new value
     * @return Ordentablajerianota The current object (for fluent API support)
     */
    public function setIdordentablajerianota($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idordentablajerianota !== $v) {
            $this->idordentablajerianota = $v;
            $this->modifiedColumns[] = OrdentablajerianotaPeer::IDORDENTABLAJERIANOTA;
        }


        return $this;
    } // setIdordentablajerianota()

    /**
     * Set the value of [idusuario] column.
     *
     * @param  int $v new value
     * @return Ordentablajerianota The current object (for fluent API support)
     */
    public function setIdusuario($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idusuario !== $v) {
            $this->idusuario = $v;
            $this->modifiedColumns[] = OrdentablajerianotaPeer::IDUSUARIO;
        }

        if ($this->aUsuario !== null && $this->aUsuario->getIdusuario() !== $v) {
            $this->aUsuario = null;
        }


        return $this;
    } // setIdusuario()

    /**
     * Set the value of [idordentablajeria] column.
     *
     * @param  int $v new value
     * @return Ordentablajerianota The current object (for fluent API support)
     */
    public function setIdordentablajeria($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idordentablajeria !== $v) {
            $this->idordentablajeria = $v;
            $this->modifiedColumns[] = OrdentablajerianotaPeer::IDORDENTABLAJERIA;
        }

        if ($this->aOrdentablajeria !== null && $this->aOrdentablajeria->getIdordentablajeria() !== $v) {
            $this->aOrdentablajeria = null;
        }


        return $this;
    } // setIdordentablajeria()

    /**
     * Set the value of [ordentablajerianota_nota] column.
     *
     * @param  string $v new value
     * @return Ordentablajerianota The current object (for fluent API support)
     */
    public function setOrdentablajerianotaNota($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ordentablajerianota_nota !== $v) {
            $this->ordentablajerianota_nota = $v;
            $this->modifiedColumns[] = OrdentablajerianotaPeer::ORDENTABLAJERIANOTA_NOTA;
        }


        return $this;
    } // setOrdentablajerianotaNota()

    /**
     * Sets the value of [ordentablajerianota_fecha] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Ordentablajerianota The current object (for fluent API support)
     */
    public function setOrdentablajerianotaFecha($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ordentablajerianota_fecha !== null || $dt !== null) {
            $currentDateAsString = ($this->ordentablajerianota_fecha !== null && $tmpDt = new DateTime($this->ordentablajerianota_fecha)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ordentablajerianota_fecha = $newDateAsString;
                $this->modifiedColumns[] = OrdentablajerianotaPeer::ORDENTABLAJERIANOTA_FECHA;
            }
        } // if either are not null


        return $this;
    } // setOrdentablajerianotaFecha()

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

            $this->idordentablajerianota = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idusuario = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idordentablajeria = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->ordentablajerianota_nota = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->ordentablajerianota_fecha = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = OrdentablajerianotaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Ordentablajerianota object", $e);
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

        if ($this->aUsuario !== null && $this->idusuario !== $this->aUsuario->getIdusuario()) {
            $this->aUsuario = null;
        }
        if ($this->aOrdentablajeria !== null && $this->idordentablajeria !== $this->aOrdentablajeria->getIdordentablajeria()) {
            $this->aOrdentablajeria = null;
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
            $con = Propel::getConnection(OrdentablajerianotaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = OrdentablajerianotaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aOrdentablajeria = null;
            $this->aUsuario = null;
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
            $con = Propel::getConnection(OrdentablajerianotaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = OrdentablajerianotaQuery::create()
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
            $con = Propel::getConnection(OrdentablajerianotaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                OrdentablajerianotaPeer::addInstanceToPool($this);
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

            if ($this->aOrdentablajeria !== null) {
                if ($this->aOrdentablajeria->isModified() || $this->aOrdentablajeria->isNew()) {
                    $affectedRows += $this->aOrdentablajeria->save($con);
                }
                $this->setOrdentablajeria($this->aOrdentablajeria);
            }

            if ($this->aUsuario !== null) {
                if ($this->aUsuario->isModified() || $this->aUsuario->isNew()) {
                    $affectedRows += $this->aUsuario->save($con);
                }
                $this->setUsuario($this->aUsuario);
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

        $this->modifiedColumns[] = OrdentablajerianotaPeer::IDORDENTABLAJERIANOTA;
        if (null !== $this->idordentablajerianota) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . OrdentablajerianotaPeer::IDORDENTABLAJERIANOTA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(OrdentablajerianotaPeer::IDORDENTABLAJERIANOTA)) {
            $modifiedColumns[':p' . $index++]  = '`idordentablajerianota`';
        }
        if ($this->isColumnModified(OrdentablajerianotaPeer::IDUSUARIO)) {
            $modifiedColumns[':p' . $index++]  = '`idusuario`';
        }
        if ($this->isColumnModified(OrdentablajerianotaPeer::IDORDENTABLAJERIA)) {
            $modifiedColumns[':p' . $index++]  = '`idordentablajeria`';
        }
        if ($this->isColumnModified(OrdentablajerianotaPeer::ORDENTABLAJERIANOTA_NOTA)) {
            $modifiedColumns[':p' . $index++]  = '`ordentablajerianota_nota`';
        }
        if ($this->isColumnModified(OrdentablajerianotaPeer::ORDENTABLAJERIANOTA_FECHA)) {
            $modifiedColumns[':p' . $index++]  = '`ordentablajerianota_fecha`';
        }

        $sql = sprintf(
            'INSERT INTO `ordentablajerianota` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idordentablajerianota`':
                        $stmt->bindValue($identifier, $this->idordentablajerianota, PDO::PARAM_INT);
                        break;
                    case '`idusuario`':
                        $stmt->bindValue($identifier, $this->idusuario, PDO::PARAM_INT);
                        break;
                    case '`idordentablajeria`':
                        $stmt->bindValue($identifier, $this->idordentablajeria, PDO::PARAM_INT);
                        break;
                    case '`ordentablajerianota_nota`':
                        $stmt->bindValue($identifier, $this->ordentablajerianota_nota, PDO::PARAM_STR);
                        break;
                    case '`ordentablajerianota_fecha`':
                        $stmt->bindValue($identifier, $this->ordentablajerianota_fecha, PDO::PARAM_STR);
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
        $this->setIdordentablajerianota($pk);

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

            if ($this->aOrdentablajeria !== null) {
                if (!$this->aOrdentablajeria->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aOrdentablajeria->getValidationFailures());
                }
            }

            if ($this->aUsuario !== null) {
                if (!$this->aUsuario->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUsuario->getValidationFailures());
                }
            }


            if (($retval = OrdentablajerianotaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
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
        $pos = OrdentablajerianotaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdordentablajerianota();
                break;
            case 1:
                return $this->getIdusuario();
                break;
            case 2:
                return $this->getIdordentablajeria();
                break;
            case 3:
                return $this->getOrdentablajerianotaNota();
                break;
            case 4:
                return $this->getOrdentablajerianotaFecha();
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
        if (isset($alreadyDumpedObjects['Ordentablajerianota'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Ordentablajerianota'][$this->getPrimaryKey()] = true;
        $keys = OrdentablajerianotaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdordentablajerianota(),
            $keys[1] => $this->getIdusuario(),
            $keys[2] => $this->getIdordentablajeria(),
            $keys[3] => $this->getOrdentablajerianotaNota(),
            $keys[4] => $this->getOrdentablajerianotaFecha(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aOrdentablajeria) {
                $result['Ordentablajeria'] = $this->aOrdentablajeria->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aUsuario) {
                $result['Usuario'] = $this->aUsuario->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = OrdentablajerianotaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdordentablajerianota($value);
                break;
            case 1:
                $this->setIdusuario($value);
                break;
            case 2:
                $this->setIdordentablajeria($value);
                break;
            case 3:
                $this->setOrdentablajerianotaNota($value);
                break;
            case 4:
                $this->setOrdentablajerianotaFecha($value);
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
        $keys = OrdentablajerianotaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdordentablajerianota($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdusuario($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdordentablajeria($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setOrdentablajerianotaNota($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setOrdentablajerianotaFecha($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(OrdentablajerianotaPeer::DATABASE_NAME);

        if ($this->isColumnModified(OrdentablajerianotaPeer::IDORDENTABLAJERIANOTA)) $criteria->add(OrdentablajerianotaPeer::IDORDENTABLAJERIANOTA, $this->idordentablajerianota);
        if ($this->isColumnModified(OrdentablajerianotaPeer::IDUSUARIO)) $criteria->add(OrdentablajerianotaPeer::IDUSUARIO, $this->idusuario);
        if ($this->isColumnModified(OrdentablajerianotaPeer::IDORDENTABLAJERIA)) $criteria->add(OrdentablajerianotaPeer::IDORDENTABLAJERIA, $this->idordentablajeria);
        if ($this->isColumnModified(OrdentablajerianotaPeer::ORDENTABLAJERIANOTA_NOTA)) $criteria->add(OrdentablajerianotaPeer::ORDENTABLAJERIANOTA_NOTA, $this->ordentablajerianota_nota);
        if ($this->isColumnModified(OrdentablajerianotaPeer::ORDENTABLAJERIANOTA_FECHA)) $criteria->add(OrdentablajerianotaPeer::ORDENTABLAJERIANOTA_FECHA, $this->ordentablajerianota_fecha);

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
        $criteria = new Criteria(OrdentablajerianotaPeer::DATABASE_NAME);
        $criteria->add(OrdentablajerianotaPeer::IDORDENTABLAJERIANOTA, $this->idordentablajerianota);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdordentablajerianota();
    }

    /**
     * Generic method to set the primary key (idordentablajerianota column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdordentablajerianota($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdordentablajerianota();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Ordentablajerianota (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdusuario($this->getIdusuario());
        $copyObj->setIdordentablajeria($this->getIdordentablajeria());
        $copyObj->setOrdentablajerianotaNota($this->getOrdentablajerianotaNota());
        $copyObj->setOrdentablajerianotaFecha($this->getOrdentablajerianotaFecha());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdordentablajerianota(NULL); // this is a auto-increment column, so set to default value
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
     * @return Ordentablajerianota Clone of current object.
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
     * @return OrdentablajerianotaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new OrdentablajerianotaPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Ordentablajeria object.
     *
     * @param                  Ordentablajeria $v
     * @return Ordentablajerianota The current object (for fluent API support)
     * @throws PropelException
     */
    public function setOrdentablajeria(Ordentablajeria $v = null)
    {
        if ($v === null) {
            $this->setIdordentablajeria(NULL);
        } else {
            $this->setIdordentablajeria($v->getIdordentablajeria());
        }

        $this->aOrdentablajeria = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Ordentablajeria object, it will not be re-added.
        if ($v !== null) {
            $v->addOrdentablajerianota($this);
        }


        return $this;
    }


    /**
     * Get the associated Ordentablajeria object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Ordentablajeria The associated Ordentablajeria object.
     * @throws PropelException
     */
    public function getOrdentablajeria(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aOrdentablajeria === null && ($this->idordentablajeria !== null) && $doQuery) {
            $this->aOrdentablajeria = OrdentablajeriaQuery::create()->findPk($this->idordentablajeria, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aOrdentablajeria->addOrdentablajerianotas($this);
             */
        }

        return $this->aOrdentablajeria;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param                  Usuario $v
     * @return Ordentablajerianota The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUsuario(Usuario $v = null)
    {
        if ($v === null) {
            $this->setIdusuario(NULL);
        } else {
            $this->setIdusuario($v->getIdusuario());
        }

        $this->aUsuario = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Usuario object, it will not be re-added.
        if ($v !== null) {
            $v->addOrdentablajerianota($this);
        }


        return $this;
    }


    /**
     * Get the associated Usuario object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Usuario The associated Usuario object.
     * @throws PropelException
     */
    public function getUsuario(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aUsuario === null && ($this->idusuario !== null) && $doQuery) {
            $this->aUsuario = UsuarioQuery::create()->findPk($this->idusuario, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUsuario->addOrdentablajerianotas($this);
             */
        }

        return $this->aUsuario;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idordentablajerianota = null;
        $this->idusuario = null;
        $this->idordentablajeria = null;
        $this->ordentablajerianota_nota = null;
        $this->ordentablajerianota_fecha = null;
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
            if ($this->aOrdentablajeria instanceof Persistent) {
              $this->aOrdentablajeria->clearAllReferences($deep);
            }
            if ($this->aUsuario instanceof Persistent) {
              $this->aUsuario->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aOrdentablajeria = null;
        $this->aUsuario = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(OrdentablajerianotaPeer::DEFAULT_STRING_FORMAT);
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
