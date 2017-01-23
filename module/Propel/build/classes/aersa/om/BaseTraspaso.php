<?php


/**
 * Base class that represents a row from the 'traspaso' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseTraspaso extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'TraspasoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        TraspasoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idtraspaso field.
     * @var        int
     */
    protected $idtraspaso;

    /**
     * The value for the idcuentabancariaorigen field.
     * @var        int
     */
    protected $idcuentabancariaorigen;

    /**
     * The value for the idcuentabancariadestino field.
     * @var        int
     */
    protected $idcuentabancariadestino;

    /**
     * The value for the traspaso_fecha field.
     * @var        string
     */
    protected $traspaso_fecha;

    /**
     * The value for the traspaso_cantidad field.
     * @var        string
     */
    protected $traspaso_cantidad;

    /**
     * The value for the traspaso_nota field.
     * @var        string
     */
    protected $traspaso_nota;

    /**
     * @var        Cuentabancaria
     */
    protected $aCuentabancariaRelatedByIdcuentabancariadestino;

    /**
     * @var        Cuentabancaria
     */
    protected $aCuentabancariaRelatedByIdcuentabancariaorigen;

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
     * Get the [idtraspaso] column value.
     *
     * @return int
     */
    public function getIdtraspaso()
    {

        return $this->idtraspaso;
    }

    /**
     * Get the [idcuentabancariaorigen] column value.
     *
     * @return int
     */
    public function getIdcuentabancariaorigen()
    {

        return $this->idcuentabancariaorigen;
    }

    /**
     * Get the [idcuentabancariadestino] column value.
     *
     * @return int
     */
    public function getIdcuentabancariadestino()
    {

        return $this->idcuentabancariadestino;
    }

    /**
     * Get the [optionally formatted] temporal [traspaso_fecha] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getTraspasoFecha($format = '%x')
    {
        if ($this->traspaso_fecha === null) {
            return null;
        }

        if ($this->traspaso_fecha === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->traspaso_fecha);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->traspaso_fecha, true), $x);
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
     * Get the [traspaso_cantidad] column value.
     *
     * @return string
     */
    public function getTraspasoCantidad()
    {

        return $this->traspaso_cantidad;
    }

    /**
     * Get the [traspaso_nota] column value.
     *
     * @return string
     */
    public function getTraspasoNota()
    {

        return $this->traspaso_nota;
    }

    /**
     * Set the value of [idtraspaso] column.
     *
     * @param  int $v new value
     * @return Traspaso The current object (for fluent API support)
     */
    public function setIdtraspaso($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idtraspaso !== $v) {
            $this->idtraspaso = $v;
            $this->modifiedColumns[] = TraspasoPeer::IDTRASPASO;
        }


        return $this;
    } // setIdtraspaso()

    /**
     * Set the value of [idcuentabancariaorigen] column.
     *
     * @param  int $v new value
     * @return Traspaso The current object (for fluent API support)
     */
    public function setIdcuentabancariaorigen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcuentabancariaorigen !== $v) {
            $this->idcuentabancariaorigen = $v;
            $this->modifiedColumns[] = TraspasoPeer::IDCUENTABANCARIAORIGEN;
        }

        if ($this->aCuentabancariaRelatedByIdcuentabancariaorigen !== null && $this->aCuentabancariaRelatedByIdcuentabancariaorigen->getIdcuentabancaria() !== $v) {
            $this->aCuentabancariaRelatedByIdcuentabancariaorigen = null;
        }


        return $this;
    } // setIdcuentabancariaorigen()

    /**
     * Set the value of [idcuentabancariadestino] column.
     *
     * @param  int $v new value
     * @return Traspaso The current object (for fluent API support)
     */
    public function setIdcuentabancariadestino($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcuentabancariadestino !== $v) {
            $this->idcuentabancariadestino = $v;
            $this->modifiedColumns[] = TraspasoPeer::IDCUENTABANCARIADESTINO;
        }

        if ($this->aCuentabancariaRelatedByIdcuentabancariadestino !== null && $this->aCuentabancariaRelatedByIdcuentabancariadestino->getIdcuentabancaria() !== $v) {
            $this->aCuentabancariaRelatedByIdcuentabancariadestino = null;
        }


        return $this;
    } // setIdcuentabancariadestino()

    /**
     * Sets the value of [traspaso_fecha] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Traspaso The current object (for fluent API support)
     */
    public function setTraspasoFecha($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->traspaso_fecha !== null || $dt !== null) {
            $currentDateAsString = ($this->traspaso_fecha !== null && $tmpDt = new DateTime($this->traspaso_fecha)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->traspaso_fecha = $newDateAsString;
                $this->modifiedColumns[] = TraspasoPeer::TRASPASO_FECHA;
            }
        } // if either are not null


        return $this;
    } // setTraspasoFecha()

    /**
     * Set the value of [traspaso_cantidad] column.
     *
     * @param  string $v new value
     * @return Traspaso The current object (for fluent API support)
     */
    public function setTraspasoCantidad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->traspaso_cantidad !== $v) {
            $this->traspaso_cantidad = $v;
            $this->modifiedColumns[] = TraspasoPeer::TRASPASO_CANTIDAD;
        }


        return $this;
    } // setTraspasoCantidad()

    /**
     * Set the value of [traspaso_nota] column.
     *
     * @param  string $v new value
     * @return Traspaso The current object (for fluent API support)
     */
    public function setTraspasoNota($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->traspaso_nota !== $v) {
            $this->traspaso_nota = $v;
            $this->modifiedColumns[] = TraspasoPeer::TRASPASO_NOTA;
        }


        return $this;
    } // setTraspasoNota()

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

            $this->idtraspaso = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idcuentabancariaorigen = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idcuentabancariadestino = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->traspaso_fecha = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->traspaso_cantidad = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->traspaso_nota = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 6; // 6 = TraspasoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Traspaso object", $e);
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

        if ($this->aCuentabancariaRelatedByIdcuentabancariaorigen !== null && $this->idcuentabancariaorigen !== $this->aCuentabancariaRelatedByIdcuentabancariaorigen->getIdcuentabancaria()) {
            $this->aCuentabancariaRelatedByIdcuentabancariaorigen = null;
        }
        if ($this->aCuentabancariaRelatedByIdcuentabancariadestino !== null && $this->idcuentabancariadestino !== $this->aCuentabancariaRelatedByIdcuentabancariadestino->getIdcuentabancaria()) {
            $this->aCuentabancariaRelatedByIdcuentabancariadestino = null;
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
            $con = Propel::getConnection(TraspasoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = TraspasoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCuentabancariaRelatedByIdcuentabancariadestino = null;
            $this->aCuentabancariaRelatedByIdcuentabancariaorigen = null;
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
            $con = Propel::getConnection(TraspasoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = TraspasoQuery::create()
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
            $con = Propel::getConnection(TraspasoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                TraspasoPeer::addInstanceToPool($this);
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

            if ($this->aCuentabancariaRelatedByIdcuentabancariadestino !== null) {
                if ($this->aCuentabancariaRelatedByIdcuentabancariadestino->isModified() || $this->aCuentabancariaRelatedByIdcuentabancariadestino->isNew()) {
                    $affectedRows += $this->aCuentabancariaRelatedByIdcuentabancariadestino->save($con);
                }
                $this->setCuentabancariaRelatedByIdcuentabancariadestino($this->aCuentabancariaRelatedByIdcuentabancariadestino);
            }

            if ($this->aCuentabancariaRelatedByIdcuentabancariaorigen !== null) {
                if ($this->aCuentabancariaRelatedByIdcuentabancariaorigen->isModified() || $this->aCuentabancariaRelatedByIdcuentabancariaorigen->isNew()) {
                    $affectedRows += $this->aCuentabancariaRelatedByIdcuentabancariaorigen->save($con);
                }
                $this->setCuentabancariaRelatedByIdcuentabancariaorigen($this->aCuentabancariaRelatedByIdcuentabancariaorigen);
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

        $this->modifiedColumns[] = TraspasoPeer::IDTRASPASO;
        if (null !== $this->idtraspaso) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TraspasoPeer::IDTRASPASO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TraspasoPeer::IDTRASPASO)) {
            $modifiedColumns[':p' . $index++]  = '`idtraspaso`';
        }
        if ($this->isColumnModified(TraspasoPeer::IDCUENTABANCARIAORIGEN)) {
            $modifiedColumns[':p' . $index++]  = '`idcuentabancariaorigen`';
        }
        if ($this->isColumnModified(TraspasoPeer::IDCUENTABANCARIADESTINO)) {
            $modifiedColumns[':p' . $index++]  = '`idcuentabancariadestino`';
        }
        if ($this->isColumnModified(TraspasoPeer::TRASPASO_FECHA)) {
            $modifiedColumns[':p' . $index++]  = '`traspaso_fecha`';
        }
        if ($this->isColumnModified(TraspasoPeer::TRASPASO_CANTIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`traspaso_cantidad`';
        }
        if ($this->isColumnModified(TraspasoPeer::TRASPASO_NOTA)) {
            $modifiedColumns[':p' . $index++]  = '`traspaso_nota`';
        }

        $sql = sprintf(
            'INSERT INTO `traspaso` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idtraspaso`':
                        $stmt->bindValue($identifier, $this->idtraspaso, PDO::PARAM_INT);
                        break;
                    case '`idcuentabancariaorigen`':
                        $stmt->bindValue($identifier, $this->idcuentabancariaorigen, PDO::PARAM_INT);
                        break;
                    case '`idcuentabancariadestino`':
                        $stmt->bindValue($identifier, $this->idcuentabancariadestino, PDO::PARAM_INT);
                        break;
                    case '`traspaso_fecha`':
                        $stmt->bindValue($identifier, $this->traspaso_fecha, PDO::PARAM_STR);
                        break;
                    case '`traspaso_cantidad`':
                        $stmt->bindValue($identifier, $this->traspaso_cantidad, PDO::PARAM_STR);
                        break;
                    case '`traspaso_nota`':
                        $stmt->bindValue($identifier, $this->traspaso_nota, PDO::PARAM_STR);
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
        $this->setIdtraspaso($pk);

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

            if ($this->aCuentabancariaRelatedByIdcuentabancariadestino !== null) {
                if (!$this->aCuentabancariaRelatedByIdcuentabancariadestino->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCuentabancariaRelatedByIdcuentabancariadestino->getValidationFailures());
                }
            }

            if ($this->aCuentabancariaRelatedByIdcuentabancariaorigen !== null) {
                if (!$this->aCuentabancariaRelatedByIdcuentabancariaorigen->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCuentabancariaRelatedByIdcuentabancariaorigen->getValidationFailures());
                }
            }


            if (($retval = TraspasoPeer::doValidate($this, $columns)) !== true) {
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
        $pos = TraspasoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdtraspaso();
                break;
            case 1:
                return $this->getIdcuentabancariaorigen();
                break;
            case 2:
                return $this->getIdcuentabancariadestino();
                break;
            case 3:
                return $this->getTraspasoFecha();
                break;
            case 4:
                return $this->getTraspasoCantidad();
                break;
            case 5:
                return $this->getTraspasoNota();
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
        if (isset($alreadyDumpedObjects['Traspaso'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Traspaso'][$this->getPrimaryKey()] = true;
        $keys = TraspasoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdtraspaso(),
            $keys[1] => $this->getIdcuentabancariaorigen(),
            $keys[2] => $this->getIdcuentabancariadestino(),
            $keys[3] => $this->getTraspasoFecha(),
            $keys[4] => $this->getTraspasoCantidad(),
            $keys[5] => $this->getTraspasoNota(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aCuentabancariaRelatedByIdcuentabancariadestino) {
                $result['CuentabancariaRelatedByIdcuentabancariadestino'] = $this->aCuentabancariaRelatedByIdcuentabancariadestino->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCuentabancariaRelatedByIdcuentabancariaorigen) {
                $result['CuentabancariaRelatedByIdcuentabancariaorigen'] = $this->aCuentabancariaRelatedByIdcuentabancariaorigen->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = TraspasoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdtraspaso($value);
                break;
            case 1:
                $this->setIdcuentabancariaorigen($value);
                break;
            case 2:
                $this->setIdcuentabancariadestino($value);
                break;
            case 3:
                $this->setTraspasoFecha($value);
                break;
            case 4:
                $this->setTraspasoCantidad($value);
                break;
            case 5:
                $this->setTraspasoNota($value);
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
        $keys = TraspasoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdtraspaso($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdcuentabancariaorigen($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdcuentabancariadestino($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setTraspasoFecha($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTraspasoCantidad($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setTraspasoNota($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TraspasoPeer::DATABASE_NAME);

        if ($this->isColumnModified(TraspasoPeer::IDTRASPASO)) $criteria->add(TraspasoPeer::IDTRASPASO, $this->idtraspaso);
        if ($this->isColumnModified(TraspasoPeer::IDCUENTABANCARIAORIGEN)) $criteria->add(TraspasoPeer::IDCUENTABANCARIAORIGEN, $this->idcuentabancariaorigen);
        if ($this->isColumnModified(TraspasoPeer::IDCUENTABANCARIADESTINO)) $criteria->add(TraspasoPeer::IDCUENTABANCARIADESTINO, $this->idcuentabancariadestino);
        if ($this->isColumnModified(TraspasoPeer::TRASPASO_FECHA)) $criteria->add(TraspasoPeer::TRASPASO_FECHA, $this->traspaso_fecha);
        if ($this->isColumnModified(TraspasoPeer::TRASPASO_CANTIDAD)) $criteria->add(TraspasoPeer::TRASPASO_CANTIDAD, $this->traspaso_cantidad);
        if ($this->isColumnModified(TraspasoPeer::TRASPASO_NOTA)) $criteria->add(TraspasoPeer::TRASPASO_NOTA, $this->traspaso_nota);

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
        $criteria = new Criteria(TraspasoPeer::DATABASE_NAME);
        $criteria->add(TraspasoPeer::IDTRASPASO, $this->idtraspaso);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdtraspaso();
    }

    /**
     * Generic method to set the primary key (idtraspaso column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdtraspaso($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdtraspaso();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Traspaso (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdcuentabancariaorigen($this->getIdcuentabancariaorigen());
        $copyObj->setIdcuentabancariadestino($this->getIdcuentabancariadestino());
        $copyObj->setTraspasoFecha($this->getTraspasoFecha());
        $copyObj->setTraspasoCantidad($this->getTraspasoCantidad());
        $copyObj->setTraspasoNota($this->getTraspasoNota());

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
            $copyObj->setIdtraspaso(NULL); // this is a auto-increment column, so set to default value
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
     * @return Traspaso Clone of current object.
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
     * @return TraspasoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new TraspasoPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Cuentabancaria object.
     *
     * @param                  Cuentabancaria $v
     * @return Traspaso The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCuentabancariaRelatedByIdcuentabancariadestino(Cuentabancaria $v = null)
    {
        if ($v === null) {
            $this->setIdcuentabancariadestino(NULL);
        } else {
            $this->setIdcuentabancariadestino($v->getIdcuentabancaria());
        }

        $this->aCuentabancariaRelatedByIdcuentabancariadestino = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Cuentabancaria object, it will not be re-added.
        if ($v !== null) {
            $v->addTraspasoRelatedByIdcuentabancariadestino($this);
        }


        return $this;
    }


    /**
     * Get the associated Cuentabancaria object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Cuentabancaria The associated Cuentabancaria object.
     * @throws PropelException
     */
    public function getCuentabancariaRelatedByIdcuentabancariadestino(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCuentabancariaRelatedByIdcuentabancariadestino === null && ($this->idcuentabancariadestino !== null) && $doQuery) {
            $this->aCuentabancariaRelatedByIdcuentabancariadestino = CuentabancariaQuery::create()->findPk($this->idcuentabancariadestino, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCuentabancariaRelatedByIdcuentabancariadestino->addTraspasosRelatedByIdcuentabancariadestino($this);
             */
        }

        return $this->aCuentabancariaRelatedByIdcuentabancariadestino;
    }

    /**
     * Declares an association between this object and a Cuentabancaria object.
     *
     * @param                  Cuentabancaria $v
     * @return Traspaso The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCuentabancariaRelatedByIdcuentabancariaorigen(Cuentabancaria $v = null)
    {
        if ($v === null) {
            $this->setIdcuentabancariaorigen(NULL);
        } else {
            $this->setIdcuentabancariaorigen($v->getIdcuentabancaria());
        }

        $this->aCuentabancariaRelatedByIdcuentabancariaorigen = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Cuentabancaria object, it will not be re-added.
        if ($v !== null) {
            $v->addTraspasoRelatedByIdcuentabancariaorigen($this);
        }


        return $this;
    }


    /**
     * Get the associated Cuentabancaria object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Cuentabancaria The associated Cuentabancaria object.
     * @throws PropelException
     */
    public function getCuentabancariaRelatedByIdcuentabancariaorigen(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCuentabancariaRelatedByIdcuentabancariaorigen === null && ($this->idcuentabancariaorigen !== null) && $doQuery) {
            $this->aCuentabancariaRelatedByIdcuentabancariaorigen = CuentabancariaQuery::create()->findPk($this->idcuentabancariaorigen, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCuentabancariaRelatedByIdcuentabancariaorigen->addTraspasosRelatedByIdcuentabancariaorigen($this);
             */
        }

        return $this->aCuentabancariaRelatedByIdcuentabancariaorigen;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idtraspaso = null;
        $this->idcuentabancariaorigen = null;
        $this->idcuentabancariadestino = null;
        $this->traspaso_fecha = null;
        $this->traspaso_cantidad = null;
        $this->traspaso_nota = null;
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
            if ($this->aCuentabancariaRelatedByIdcuentabancariadestino instanceof Persistent) {
              $this->aCuentabancariaRelatedByIdcuentabancariadestino->clearAllReferences($deep);
            }
            if ($this->aCuentabancariaRelatedByIdcuentabancariaorigen instanceof Persistent) {
              $this->aCuentabancariaRelatedByIdcuentabancariaorigen->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCuentabancariaRelatedByIdcuentabancariadestino = null;
        $this->aCuentabancariaRelatedByIdcuentabancariaorigen = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(TraspasoPeer::DEFAULT_STRING_FORMAT);
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
