<?php


/**
 * Base class that represents a row from the 'cuentabancaria' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseCuentabancaria extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CuentabancariaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CuentabancariaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idcuentabancaria field.
     * @var        int
     */
    protected $idcuentabancaria;

    /**
     * The value for the idempresa field.
     * @var        int
     */
    protected $idempresa;

    /**
     * The value for the idsucursal field.
     * @var        int
     */
    protected $idsucursal;

    /**
     * The value for the cuentabancaria_banco field.
     * @var        string
     */
    protected $cuentabancaria_banco;

    /**
     * The value for the cuentabancaria_nocuenta field.
     * @var        string
     */
    protected $cuentabancaria_nocuenta;

    /**
     * The value for the cuentabancaria_balance field.
     * @var        string
     */
    protected $cuentabancaria_balance;

    /**
     * @var        Empresa
     */
    protected $aEmpresa;

    /**
     * @var        Sucursal
     */
    protected $aSucursal;

    /**
     * @var        PropelObjectCollection|Abonoproveedordetalle[] Collection to store aggregation of Abonoproveedordetalle objects.
     */
    protected $collAbonoproveedordetalles;
    protected $collAbonoproveedordetallesPartial;

    /**
     * @var        PropelObjectCollection|Flujoefectivo[] Collection to store aggregation of Flujoefectivo objects.
     */
    protected $collFlujoefectivos;
    protected $collFlujoefectivosPartial;

    /**
     * @var        PropelObjectCollection|Traspaso[] Collection to store aggregation of Traspaso objects.
     */
    protected $collTraspasosRelatedByIdcuentabancariadestino;
    protected $collTraspasosRelatedByIdcuentabancariadestinoPartial;

    /**
     * @var        PropelObjectCollection|Traspaso[] Collection to store aggregation of Traspaso objects.
     */
    protected $collTraspasosRelatedByIdcuentabancariaorigen;
    protected $collTraspasosRelatedByIdcuentabancariaorigenPartial;

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
    protected $abonoproveedordetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $flujoefectivosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $traspasosRelatedByIdcuentabancariadestinoScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $traspasosRelatedByIdcuentabancariaorigenScheduledForDeletion = null;

    /**
     * Get the [idcuentabancaria] column value.
     *
     * @return int
     */
    public function getIdcuentabancaria()
    {

        return $this->idcuentabancaria;
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
     * Get the [idsucursal] column value.
     *
     * @return int
     */
    public function getIdsucursal()
    {

        return $this->idsucursal;
    }

    /**
     * Get the [cuentabancaria_banco] column value.
     *
     * @return string
     */
    public function getCuentabancariaBanco()
    {

        return $this->cuentabancaria_banco;
    }

    /**
     * Get the [cuentabancaria_nocuenta] column value.
     *
     * @return string
     */
    public function getCuentabancariaNocuenta()
    {

        return $this->cuentabancaria_nocuenta;
    }

    /**
     * Get the [cuentabancaria_balance] column value.
     *
     * @return string
     */
    public function getCuentabancariaBalance()
    {

        return $this->cuentabancaria_balance;
    }

    /**
     * Set the value of [idcuentabancaria] column.
     *
     * @param  int $v new value
     * @return Cuentabancaria The current object (for fluent API support)
     */
    public function setIdcuentabancaria($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcuentabancaria !== $v) {
            $this->idcuentabancaria = $v;
            $this->modifiedColumns[] = CuentabancariaPeer::IDCUENTABANCARIA;
        }


        return $this;
    } // setIdcuentabancaria()

    /**
     * Set the value of [idempresa] column.
     *
     * @param  int $v new value
     * @return Cuentabancaria The current object (for fluent API support)
     */
    public function setIdempresa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempresa !== $v) {
            $this->idempresa = $v;
            $this->modifiedColumns[] = CuentabancariaPeer::IDEMPRESA;
        }

        if ($this->aEmpresa !== null && $this->aEmpresa->getIdempresa() !== $v) {
            $this->aEmpresa = null;
        }


        return $this;
    } // setIdempresa()

    /**
     * Set the value of [idsucursal] column.
     *
     * @param  int $v new value
     * @return Cuentabancaria The current object (for fluent API support)
     */
    public function setIdsucursal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idsucursal !== $v) {
            $this->idsucursal = $v;
            $this->modifiedColumns[] = CuentabancariaPeer::IDSUCURSAL;
        }

        if ($this->aSucursal !== null && $this->aSucursal->getIdsucursal() !== $v) {
            $this->aSucursal = null;
        }


        return $this;
    } // setIdsucursal()

    /**
     * Set the value of [cuentabancaria_banco] column.
     *
     * @param  string $v new value
     * @return Cuentabancaria The current object (for fluent API support)
     */
    public function setCuentabancariaBanco($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cuentabancaria_banco !== $v) {
            $this->cuentabancaria_banco = $v;
            $this->modifiedColumns[] = CuentabancariaPeer::CUENTABANCARIA_BANCO;
        }


        return $this;
    } // setCuentabancariaBanco()

    /**
     * Set the value of [cuentabancaria_nocuenta] column.
     *
     * @param  string $v new value
     * @return Cuentabancaria The current object (for fluent API support)
     */
    public function setCuentabancariaNocuenta($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cuentabancaria_nocuenta !== $v) {
            $this->cuentabancaria_nocuenta = $v;
            $this->modifiedColumns[] = CuentabancariaPeer::CUENTABANCARIA_NOCUENTA;
        }


        return $this;
    } // setCuentabancariaNocuenta()

    /**
     * Set the value of [cuentabancaria_balance] column.
     *
     * @param  string $v new value
     * @return Cuentabancaria The current object (for fluent API support)
     */
    public function setCuentabancariaBalance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cuentabancaria_balance !== $v) {
            $this->cuentabancaria_balance = $v;
            $this->modifiedColumns[] = CuentabancariaPeer::CUENTABANCARIA_BALANCE;
        }


        return $this;
    } // setCuentabancariaBalance()

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

            $this->idcuentabancaria = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idempresa = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idsucursal = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->cuentabancaria_banco = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->cuentabancaria_nocuenta = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->cuentabancaria_balance = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 6; // 6 = CuentabancariaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Cuentabancaria object", $e);
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
        if ($this->aSucursal !== null && $this->idsucursal !== $this->aSucursal->getIdsucursal()) {
            $this->aSucursal = null;
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
            $con = Propel::getConnection(CuentabancariaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CuentabancariaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aEmpresa = null;
            $this->aSucursal = null;
            $this->collAbonoproveedordetalles = null;

            $this->collFlujoefectivos = null;

            $this->collTraspasosRelatedByIdcuentabancariadestino = null;

            $this->collTraspasosRelatedByIdcuentabancariaorigen = null;

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
            $con = Propel::getConnection(CuentabancariaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CuentabancariaQuery::create()
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
            $con = Propel::getConnection(CuentabancariaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CuentabancariaPeer::addInstanceToPool($this);
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

            if ($this->aSucursal !== null) {
                if ($this->aSucursal->isModified() || $this->aSucursal->isNew()) {
                    $affectedRows += $this->aSucursal->save($con);
                }
                $this->setSucursal($this->aSucursal);
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

            if ($this->abonoproveedordetallesScheduledForDeletion !== null) {
                if (!$this->abonoproveedordetallesScheduledForDeletion->isEmpty()) {
                    AbonoproveedordetalleQuery::create()
                        ->filterByPrimaryKeys($this->abonoproveedordetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->abonoproveedordetallesScheduledForDeletion = null;
                }
            }

            if ($this->collAbonoproveedordetalles !== null) {
                foreach ($this->collAbonoproveedordetalles as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->flujoefectivosScheduledForDeletion !== null) {
                if (!$this->flujoefectivosScheduledForDeletion->isEmpty()) {
                    foreach ($this->flujoefectivosScheduledForDeletion as $flujoefectivo) {
                        // need to save related object because we set the relation to null
                        $flujoefectivo->save($con);
                    }
                    $this->flujoefectivosScheduledForDeletion = null;
                }
            }

            if ($this->collFlujoefectivos !== null) {
                foreach ($this->collFlujoefectivos as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->traspasosRelatedByIdcuentabancariadestinoScheduledForDeletion !== null) {
                if (!$this->traspasosRelatedByIdcuentabancariadestinoScheduledForDeletion->isEmpty()) {
                    TraspasoQuery::create()
                        ->filterByPrimaryKeys($this->traspasosRelatedByIdcuentabancariadestinoScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->traspasosRelatedByIdcuentabancariadestinoScheduledForDeletion = null;
                }
            }

            if ($this->collTraspasosRelatedByIdcuentabancariadestino !== null) {
                foreach ($this->collTraspasosRelatedByIdcuentabancariadestino as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->traspasosRelatedByIdcuentabancariaorigenScheduledForDeletion !== null) {
                if (!$this->traspasosRelatedByIdcuentabancariaorigenScheduledForDeletion->isEmpty()) {
                    TraspasoQuery::create()
                        ->filterByPrimaryKeys($this->traspasosRelatedByIdcuentabancariaorigenScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->traspasosRelatedByIdcuentabancariaorigenScheduledForDeletion = null;
                }
            }

            if ($this->collTraspasosRelatedByIdcuentabancariaorigen !== null) {
                foreach ($this->collTraspasosRelatedByIdcuentabancariaorigen as $referrerFK) {
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

        $this->modifiedColumns[] = CuentabancariaPeer::IDCUENTABANCARIA;
        if (null !== $this->idcuentabancaria) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CuentabancariaPeer::IDCUENTABANCARIA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CuentabancariaPeer::IDCUENTABANCARIA)) {
            $modifiedColumns[':p' . $index++]  = '`idcuentabancaria`';
        }
        if ($this->isColumnModified(CuentabancariaPeer::IDEMPRESA)) {
            $modifiedColumns[':p' . $index++]  = '`idempresa`';
        }
        if ($this->isColumnModified(CuentabancariaPeer::IDSUCURSAL)) {
            $modifiedColumns[':p' . $index++]  = '`idsucursal`';
        }
        if ($this->isColumnModified(CuentabancariaPeer::CUENTABANCARIA_BANCO)) {
            $modifiedColumns[':p' . $index++]  = '`cuentabancaria_banco`';
        }
        if ($this->isColumnModified(CuentabancariaPeer::CUENTABANCARIA_NOCUENTA)) {
            $modifiedColumns[':p' . $index++]  = '`cuentabancaria_nocuenta`';
        }
        if ($this->isColumnModified(CuentabancariaPeer::CUENTABANCARIA_BALANCE)) {
            $modifiedColumns[':p' . $index++]  = '`cuentabancaria_balance`';
        }

        $sql = sprintf(
            'INSERT INTO `cuentabancaria` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idcuentabancaria`':
                        $stmt->bindValue($identifier, $this->idcuentabancaria, PDO::PARAM_INT);
                        break;
                    case '`idempresa`':
                        $stmt->bindValue($identifier, $this->idempresa, PDO::PARAM_INT);
                        break;
                    case '`idsucursal`':
                        $stmt->bindValue($identifier, $this->idsucursal, PDO::PARAM_INT);
                        break;
                    case '`cuentabancaria_banco`':
                        $stmt->bindValue($identifier, $this->cuentabancaria_banco, PDO::PARAM_STR);
                        break;
                    case '`cuentabancaria_nocuenta`':
                        $stmt->bindValue($identifier, $this->cuentabancaria_nocuenta, PDO::PARAM_STR);
                        break;
                    case '`cuentabancaria_balance`':
                        $stmt->bindValue($identifier, $this->cuentabancaria_balance, PDO::PARAM_STR);
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
        $this->setIdcuentabancaria($pk);

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

            if ($this->aSucursal !== null) {
                if (!$this->aSucursal->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aSucursal->getValidationFailures());
                }
            }


            if (($retval = CuentabancariaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collAbonoproveedordetalles !== null) {
                    foreach ($this->collAbonoproveedordetalles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collFlujoefectivos !== null) {
                    foreach ($this->collFlujoefectivos as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collTraspasosRelatedByIdcuentabancariadestino !== null) {
                    foreach ($this->collTraspasosRelatedByIdcuentabancariadestino as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collTraspasosRelatedByIdcuentabancariaorigen !== null) {
                    foreach ($this->collTraspasosRelatedByIdcuentabancariaorigen as $referrerFK) {
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
        $pos = CuentabancariaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdcuentabancaria();
                break;
            case 1:
                return $this->getIdempresa();
                break;
            case 2:
                return $this->getIdsucursal();
                break;
            case 3:
                return $this->getCuentabancariaBanco();
                break;
            case 4:
                return $this->getCuentabancariaNocuenta();
                break;
            case 5:
                return $this->getCuentabancariaBalance();
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
        if (isset($alreadyDumpedObjects['Cuentabancaria'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Cuentabancaria'][$this->getPrimaryKey()] = true;
        $keys = CuentabancariaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdcuentabancaria(),
            $keys[1] => $this->getIdempresa(),
            $keys[2] => $this->getIdsucursal(),
            $keys[3] => $this->getCuentabancariaBanco(),
            $keys[4] => $this->getCuentabancariaNocuenta(),
            $keys[5] => $this->getCuentabancariaBalance(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aEmpresa) {
                $result['Empresa'] = $this->aEmpresa->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSucursal) {
                $result['Sucursal'] = $this->aSucursal->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collAbonoproveedordetalles) {
                $result['Abonoproveedordetalles'] = $this->collAbonoproveedordetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collFlujoefectivos) {
                $result['Flujoefectivos'] = $this->collFlujoefectivos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collTraspasosRelatedByIdcuentabancariadestino) {
                $result['TraspasosRelatedByIdcuentabancariadestino'] = $this->collTraspasosRelatedByIdcuentabancariadestino->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collTraspasosRelatedByIdcuentabancariaorigen) {
                $result['TraspasosRelatedByIdcuentabancariaorigen'] = $this->collTraspasosRelatedByIdcuentabancariaorigen->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CuentabancariaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdcuentabancaria($value);
                break;
            case 1:
                $this->setIdempresa($value);
                break;
            case 2:
                $this->setIdsucursal($value);
                break;
            case 3:
                $this->setCuentabancariaBanco($value);
                break;
            case 4:
                $this->setCuentabancariaNocuenta($value);
                break;
            case 5:
                $this->setCuentabancariaBalance($value);
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
        $keys = CuentabancariaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdcuentabancaria($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdempresa($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdsucursal($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCuentabancariaBanco($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCuentabancariaNocuenta($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCuentabancariaBalance($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CuentabancariaPeer::DATABASE_NAME);

        if ($this->isColumnModified(CuentabancariaPeer::IDCUENTABANCARIA)) $criteria->add(CuentabancariaPeer::IDCUENTABANCARIA, $this->idcuentabancaria);
        if ($this->isColumnModified(CuentabancariaPeer::IDEMPRESA)) $criteria->add(CuentabancariaPeer::IDEMPRESA, $this->idempresa);
        if ($this->isColumnModified(CuentabancariaPeer::IDSUCURSAL)) $criteria->add(CuentabancariaPeer::IDSUCURSAL, $this->idsucursal);
        if ($this->isColumnModified(CuentabancariaPeer::CUENTABANCARIA_BANCO)) $criteria->add(CuentabancariaPeer::CUENTABANCARIA_BANCO, $this->cuentabancaria_banco);
        if ($this->isColumnModified(CuentabancariaPeer::CUENTABANCARIA_NOCUENTA)) $criteria->add(CuentabancariaPeer::CUENTABANCARIA_NOCUENTA, $this->cuentabancaria_nocuenta);
        if ($this->isColumnModified(CuentabancariaPeer::CUENTABANCARIA_BALANCE)) $criteria->add(CuentabancariaPeer::CUENTABANCARIA_BALANCE, $this->cuentabancaria_balance);

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
        $criteria = new Criteria(CuentabancariaPeer::DATABASE_NAME);
        $criteria->add(CuentabancariaPeer::IDCUENTABANCARIA, $this->idcuentabancaria);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdcuentabancaria();
    }

    /**
     * Generic method to set the primary key (idcuentabancaria column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdcuentabancaria($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdcuentabancaria();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Cuentabancaria (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdempresa($this->getIdempresa());
        $copyObj->setIdsucursal($this->getIdsucursal());
        $copyObj->setCuentabancariaBanco($this->getCuentabancariaBanco());
        $copyObj->setCuentabancariaNocuenta($this->getCuentabancariaNocuenta());
        $copyObj->setCuentabancariaBalance($this->getCuentabancariaBalance());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getAbonoproveedordetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addAbonoproveedordetalle($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getFlujoefectivos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addFlujoefectivo($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getTraspasosRelatedByIdcuentabancariadestino() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTraspasoRelatedByIdcuentabancariadestino($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getTraspasosRelatedByIdcuentabancariaorigen() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTraspasoRelatedByIdcuentabancariaorigen($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdcuentabancaria(NULL); // this is a auto-increment column, so set to default value
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
     * @return Cuentabancaria Clone of current object.
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
     * @return CuentabancariaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CuentabancariaPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Empresa object.
     *
     * @param                  Empresa $v
     * @return Cuentabancaria The current object (for fluent API support)
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
            $v->addCuentabancaria($this);
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
                $this->aEmpresa->addCuentabancarias($this);
             */
        }

        return $this->aEmpresa;
    }

    /**
     * Declares an association between this object and a Sucursal object.
     *
     * @param                  Sucursal $v
     * @return Cuentabancaria The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSucursal(Sucursal $v = null)
    {
        if ($v === null) {
            $this->setIdsucursal(NULL);
        } else {
            $this->setIdsucursal($v->getIdsucursal());
        }

        $this->aSucursal = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Sucursal object, it will not be re-added.
        if ($v !== null) {
            $v->addCuentabancaria($this);
        }


        return $this;
    }


    /**
     * Get the associated Sucursal object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Sucursal The associated Sucursal object.
     * @throws PropelException
     */
    public function getSucursal(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aSucursal === null && ($this->idsucursal !== null) && $doQuery) {
            $this->aSucursal = SucursalQuery::create()->findPk($this->idsucursal, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSucursal->addCuentabancarias($this);
             */
        }

        return $this->aSucursal;
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
        if ('Abonoproveedordetalle' == $relationName) {
            $this->initAbonoproveedordetalles();
        }
        if ('Flujoefectivo' == $relationName) {
            $this->initFlujoefectivos();
        }
        if ('TraspasoRelatedByIdcuentabancariadestino' == $relationName) {
            $this->initTraspasosRelatedByIdcuentabancariadestino();
        }
        if ('TraspasoRelatedByIdcuentabancariaorigen' == $relationName) {
            $this->initTraspasosRelatedByIdcuentabancariaorigen();
        }
    }

    /**
     * Clears out the collAbonoproveedordetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Cuentabancaria The current object (for fluent API support)
     * @see        addAbonoproveedordetalles()
     */
    public function clearAbonoproveedordetalles()
    {
        $this->collAbonoproveedordetalles = null; // important to set this to null since that means it is uninitialized
        $this->collAbonoproveedordetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collAbonoproveedordetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialAbonoproveedordetalles($v = true)
    {
        $this->collAbonoproveedordetallesPartial = $v;
    }

    /**
     * Initializes the collAbonoproveedordetalles collection.
     *
     * By default this just sets the collAbonoproveedordetalles collection to an empty array (like clearcollAbonoproveedordetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initAbonoproveedordetalles($overrideExisting = true)
    {
        if (null !== $this->collAbonoproveedordetalles && !$overrideExisting) {
            return;
        }
        $this->collAbonoproveedordetalles = new PropelObjectCollection();
        $this->collAbonoproveedordetalles->setModel('Abonoproveedordetalle');
    }

    /**
     * Gets an array of Abonoproveedordetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Cuentabancaria is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Abonoproveedordetalle[] List of Abonoproveedordetalle objects
     * @throws PropelException
     */
    public function getAbonoproveedordetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collAbonoproveedordetallesPartial && !$this->isNew();
        if (null === $this->collAbonoproveedordetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collAbonoproveedordetalles) {
                // return empty collection
                $this->initAbonoproveedordetalles();
            } else {
                $collAbonoproveedordetalles = AbonoproveedordetalleQuery::create(null, $criteria)
                    ->filterByCuentabancaria($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collAbonoproveedordetallesPartial && count($collAbonoproveedordetalles)) {
                      $this->initAbonoproveedordetalles(false);

                      foreach ($collAbonoproveedordetalles as $obj) {
                        if (false == $this->collAbonoproveedordetalles->contains($obj)) {
                          $this->collAbonoproveedordetalles->append($obj);
                        }
                      }

                      $this->collAbonoproveedordetallesPartial = true;
                    }

                    $collAbonoproveedordetalles->getInternalIterator()->rewind();

                    return $collAbonoproveedordetalles;
                }

                if ($partial && $this->collAbonoproveedordetalles) {
                    foreach ($this->collAbonoproveedordetalles as $obj) {
                        if ($obj->isNew()) {
                            $collAbonoproveedordetalles[] = $obj;
                        }
                    }
                }

                $this->collAbonoproveedordetalles = $collAbonoproveedordetalles;
                $this->collAbonoproveedordetallesPartial = false;
            }
        }

        return $this->collAbonoproveedordetalles;
    }

    /**
     * Sets a collection of Abonoproveedordetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $abonoproveedordetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Cuentabancaria The current object (for fluent API support)
     */
    public function setAbonoproveedordetalles(PropelCollection $abonoproveedordetalles, PropelPDO $con = null)
    {
        $abonoproveedordetallesToDelete = $this->getAbonoproveedordetalles(new Criteria(), $con)->diff($abonoproveedordetalles);


        $this->abonoproveedordetallesScheduledForDeletion = $abonoproveedordetallesToDelete;

        foreach ($abonoproveedordetallesToDelete as $abonoproveedordetalleRemoved) {
            $abonoproveedordetalleRemoved->setCuentabancaria(null);
        }

        $this->collAbonoproveedordetalles = null;
        foreach ($abonoproveedordetalles as $abonoproveedordetalle) {
            $this->addAbonoproveedordetalle($abonoproveedordetalle);
        }

        $this->collAbonoproveedordetalles = $abonoproveedordetalles;
        $this->collAbonoproveedordetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Abonoproveedordetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Abonoproveedordetalle objects.
     * @throws PropelException
     */
    public function countAbonoproveedordetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collAbonoproveedordetallesPartial && !$this->isNew();
        if (null === $this->collAbonoproveedordetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collAbonoproveedordetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getAbonoproveedordetalles());
            }
            $query = AbonoproveedordetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCuentabancaria($this)
                ->count($con);
        }

        return count($this->collAbonoproveedordetalles);
    }

    /**
     * Method called to associate a Abonoproveedordetalle object to this object
     * through the Abonoproveedordetalle foreign key attribute.
     *
     * @param    Abonoproveedordetalle $l Abonoproveedordetalle
     * @return Cuentabancaria The current object (for fluent API support)
     */
    public function addAbonoproveedordetalle(Abonoproveedordetalle $l)
    {
        if ($this->collAbonoproveedordetalles === null) {
            $this->initAbonoproveedordetalles();
            $this->collAbonoproveedordetallesPartial = true;
        }

        if (!in_array($l, $this->collAbonoproveedordetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddAbonoproveedordetalle($l);

            if ($this->abonoproveedordetallesScheduledForDeletion and $this->abonoproveedordetallesScheduledForDeletion->contains($l)) {
                $this->abonoproveedordetallesScheduledForDeletion->remove($this->abonoproveedordetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Abonoproveedordetalle $abonoproveedordetalle The abonoproveedordetalle object to add.
     */
    protected function doAddAbonoproveedordetalle($abonoproveedordetalle)
    {
        $this->collAbonoproveedordetalles[]= $abonoproveedordetalle;
        $abonoproveedordetalle->setCuentabancaria($this);
    }

    /**
     * @param	Abonoproveedordetalle $abonoproveedordetalle The abonoproveedordetalle object to remove.
     * @return Cuentabancaria The current object (for fluent API support)
     */
    public function removeAbonoproveedordetalle($abonoproveedordetalle)
    {
        if ($this->getAbonoproveedordetalles()->contains($abonoproveedordetalle)) {
            $this->collAbonoproveedordetalles->remove($this->collAbonoproveedordetalles->search($abonoproveedordetalle));
            if (null === $this->abonoproveedordetallesScheduledForDeletion) {
                $this->abonoproveedordetallesScheduledForDeletion = clone $this->collAbonoproveedordetalles;
                $this->abonoproveedordetallesScheduledForDeletion->clear();
            }
            $this->abonoproveedordetallesScheduledForDeletion[]= $abonoproveedordetalle;
            $abonoproveedordetalle->setCuentabancaria(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Cuentabancaria is new, it will return
     * an empty collection; or if this Cuentabancaria has previously
     * been saved, it will retrieve related Abonoproveedordetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Cuentabancaria.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Abonoproveedordetalle[] List of Abonoproveedordetalle objects
     */
    public function getAbonoproveedordetallesJoinAbonoproveedor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = AbonoproveedordetalleQuery::create(null, $criteria);
        $query->joinWith('Abonoproveedor', $join_behavior);

        return $this->getAbonoproveedordetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Cuentabancaria is new, it will return
     * an empty collection; or if this Cuentabancaria has previously
     * been saved, it will retrieve related Abonoproveedordetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Cuentabancaria.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Abonoproveedordetalle[] List of Abonoproveedordetalle objects
     */
    public function getAbonoproveedordetallesJoinUsuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = AbonoproveedordetalleQuery::create(null, $criteria);
        $query->joinWith('Usuario', $join_behavior);

        return $this->getAbonoproveedordetalles($query, $con);
    }

    /**
     * Clears out the collFlujoefectivos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Cuentabancaria The current object (for fluent API support)
     * @see        addFlujoefectivos()
     */
    public function clearFlujoefectivos()
    {
        $this->collFlujoefectivos = null; // important to set this to null since that means it is uninitialized
        $this->collFlujoefectivosPartial = null;

        return $this;
    }

    /**
     * reset is the collFlujoefectivos collection loaded partially
     *
     * @return void
     */
    public function resetPartialFlujoefectivos($v = true)
    {
        $this->collFlujoefectivosPartial = $v;
    }

    /**
     * Initializes the collFlujoefectivos collection.
     *
     * By default this just sets the collFlujoefectivos collection to an empty array (like clearcollFlujoefectivos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initFlujoefectivos($overrideExisting = true)
    {
        if (null !== $this->collFlujoefectivos && !$overrideExisting) {
            return;
        }
        $this->collFlujoefectivos = new PropelObjectCollection();
        $this->collFlujoefectivos->setModel('Flujoefectivo');
    }

    /**
     * Gets an array of Flujoefectivo objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Cuentabancaria is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Flujoefectivo[] List of Flujoefectivo objects
     * @throws PropelException
     */
    public function getFlujoefectivos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collFlujoefectivosPartial && !$this->isNew();
        if (null === $this->collFlujoefectivos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collFlujoefectivos) {
                // return empty collection
                $this->initFlujoefectivos();
            } else {
                $collFlujoefectivos = FlujoefectivoQuery::create(null, $criteria)
                    ->filterByCuentabancaria($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collFlujoefectivosPartial && count($collFlujoefectivos)) {
                      $this->initFlujoefectivos(false);

                      foreach ($collFlujoefectivos as $obj) {
                        if (false == $this->collFlujoefectivos->contains($obj)) {
                          $this->collFlujoefectivos->append($obj);
                        }
                      }

                      $this->collFlujoefectivosPartial = true;
                    }

                    $collFlujoefectivos->getInternalIterator()->rewind();

                    return $collFlujoefectivos;
                }

                if ($partial && $this->collFlujoefectivos) {
                    foreach ($this->collFlujoefectivos as $obj) {
                        if ($obj->isNew()) {
                            $collFlujoefectivos[] = $obj;
                        }
                    }
                }

                $this->collFlujoefectivos = $collFlujoefectivos;
                $this->collFlujoefectivosPartial = false;
            }
        }

        return $this->collFlujoefectivos;
    }

    /**
     * Sets a collection of Flujoefectivo objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $flujoefectivos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Cuentabancaria The current object (for fluent API support)
     */
    public function setFlujoefectivos(PropelCollection $flujoefectivos, PropelPDO $con = null)
    {
        $flujoefectivosToDelete = $this->getFlujoefectivos(new Criteria(), $con)->diff($flujoefectivos);


        $this->flujoefectivosScheduledForDeletion = $flujoefectivosToDelete;

        foreach ($flujoefectivosToDelete as $flujoefectivoRemoved) {
            $flujoefectivoRemoved->setCuentabancaria(null);
        }

        $this->collFlujoefectivos = null;
        foreach ($flujoefectivos as $flujoefectivo) {
            $this->addFlujoefectivo($flujoefectivo);
        }

        $this->collFlujoefectivos = $flujoefectivos;
        $this->collFlujoefectivosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Flujoefectivo objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Flujoefectivo objects.
     * @throws PropelException
     */
    public function countFlujoefectivos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collFlujoefectivosPartial && !$this->isNew();
        if (null === $this->collFlujoefectivos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collFlujoefectivos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getFlujoefectivos());
            }
            $query = FlujoefectivoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCuentabancaria($this)
                ->count($con);
        }

        return count($this->collFlujoefectivos);
    }

    /**
     * Method called to associate a Flujoefectivo object to this object
     * through the Flujoefectivo foreign key attribute.
     *
     * @param    Flujoefectivo $l Flujoefectivo
     * @return Cuentabancaria The current object (for fluent API support)
     */
    public function addFlujoefectivo(Flujoefectivo $l)
    {
        if ($this->collFlujoefectivos === null) {
            $this->initFlujoefectivos();
            $this->collFlujoefectivosPartial = true;
        }

        if (!in_array($l, $this->collFlujoefectivos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddFlujoefectivo($l);

            if ($this->flujoefectivosScheduledForDeletion and $this->flujoefectivosScheduledForDeletion->contains($l)) {
                $this->flujoefectivosScheduledForDeletion->remove($this->flujoefectivosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Flujoefectivo $flujoefectivo The flujoefectivo object to add.
     */
    protected function doAddFlujoefectivo($flujoefectivo)
    {
        $this->collFlujoefectivos[]= $flujoefectivo;
        $flujoefectivo->setCuentabancaria($this);
    }

    /**
     * @param	Flujoefectivo $flujoefectivo The flujoefectivo object to remove.
     * @return Cuentabancaria The current object (for fluent API support)
     */
    public function removeFlujoefectivo($flujoefectivo)
    {
        if ($this->getFlujoefectivos()->contains($flujoefectivo)) {
            $this->collFlujoefectivos->remove($this->collFlujoefectivos->search($flujoefectivo));
            if (null === $this->flujoefectivosScheduledForDeletion) {
                $this->flujoefectivosScheduledForDeletion = clone $this->collFlujoefectivos;
                $this->flujoefectivosScheduledForDeletion->clear();
            }
            $this->flujoefectivosScheduledForDeletion[]= $flujoefectivo;
            $flujoefectivo->setCuentabancaria(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Cuentabancaria is new, it will return
     * an empty collection; or if this Cuentabancaria has previously
     * been saved, it will retrieve related Flujoefectivos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Cuentabancaria.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Flujoefectivo[] List of Flujoefectivo objects
     */
    public function getFlujoefectivosJoinCompra($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FlujoefectivoQuery::create(null, $criteria);
        $query->joinWith('Compra', $join_behavior);

        return $this->getFlujoefectivos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Cuentabancaria is new, it will return
     * an empty collection; or if this Cuentabancaria has previously
     * been saved, it will retrieve related Flujoefectivos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Cuentabancaria.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Flujoefectivo[] List of Flujoefectivo objects
     */
    public function getFlujoefectivosJoinCuentaporcobrar($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FlujoefectivoQuery::create(null, $criteria);
        $query->joinWith('Cuentaporcobrar', $join_behavior);

        return $this->getFlujoefectivos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Cuentabancaria is new, it will return
     * an empty collection; or if this Cuentabancaria has previously
     * been saved, it will retrieve related Flujoefectivos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Cuentabancaria.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Flujoefectivo[] List of Flujoefectivo objects
     */
    public function getFlujoefectivosJoinEmpresa($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FlujoefectivoQuery::create(null, $criteria);
        $query->joinWith('Empresa', $join_behavior);

        return $this->getFlujoefectivos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Cuentabancaria is new, it will return
     * an empty collection; or if this Cuentabancaria has previously
     * been saved, it will retrieve related Flujoefectivos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Cuentabancaria.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Flujoefectivo[] List of Flujoefectivo objects
     */
    public function getFlujoefectivosJoinIngreso($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FlujoefectivoQuery::create(null, $criteria);
        $query->joinWith('Ingreso', $join_behavior);

        return $this->getFlujoefectivos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Cuentabancaria is new, it will return
     * an empty collection; or if this Cuentabancaria has previously
     * been saved, it will retrieve related Flujoefectivos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Cuentabancaria.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Flujoefectivo[] List of Flujoefectivo objects
     */
    public function getFlujoefectivosJoinProveedor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FlujoefectivoQuery::create(null, $criteria);
        $query->joinWith('Proveedor', $join_behavior);

        return $this->getFlujoefectivos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Cuentabancaria is new, it will return
     * an empty collection; or if this Cuentabancaria has previously
     * been saved, it will retrieve related Flujoefectivos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Cuentabancaria.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Flujoefectivo[] List of Flujoefectivo objects
     */
    public function getFlujoefectivosJoinSucursal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FlujoefectivoQuery::create(null, $criteria);
        $query->joinWith('Sucursal', $join_behavior);

        return $this->getFlujoefectivos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Cuentabancaria is new, it will return
     * an empty collection; or if this Cuentabancaria has previously
     * been saved, it will retrieve related Flujoefectivos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Cuentabancaria.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Flujoefectivo[] List of Flujoefectivo objects
     */
    public function getFlujoefectivosJoinUsuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FlujoefectivoQuery::create(null, $criteria);
        $query->joinWith('Usuario', $join_behavior);

        return $this->getFlujoefectivos($query, $con);
    }

    /**
     * Clears out the collTraspasosRelatedByIdcuentabancariadestino collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Cuentabancaria The current object (for fluent API support)
     * @see        addTraspasosRelatedByIdcuentabancariadestino()
     */
    public function clearTraspasosRelatedByIdcuentabancariadestino()
    {
        $this->collTraspasosRelatedByIdcuentabancariadestino = null; // important to set this to null since that means it is uninitialized
        $this->collTraspasosRelatedByIdcuentabancariadestinoPartial = null;

        return $this;
    }

    /**
     * reset is the collTraspasosRelatedByIdcuentabancariadestino collection loaded partially
     *
     * @return void
     */
    public function resetPartialTraspasosRelatedByIdcuentabancariadestino($v = true)
    {
        $this->collTraspasosRelatedByIdcuentabancariadestinoPartial = $v;
    }

    /**
     * Initializes the collTraspasosRelatedByIdcuentabancariadestino collection.
     *
     * By default this just sets the collTraspasosRelatedByIdcuentabancariadestino collection to an empty array (like clearcollTraspasosRelatedByIdcuentabancariadestino());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTraspasosRelatedByIdcuentabancariadestino($overrideExisting = true)
    {
        if (null !== $this->collTraspasosRelatedByIdcuentabancariadestino && !$overrideExisting) {
            return;
        }
        $this->collTraspasosRelatedByIdcuentabancariadestino = new PropelObjectCollection();
        $this->collTraspasosRelatedByIdcuentabancariadestino->setModel('Traspaso');
    }

    /**
     * Gets an array of Traspaso objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Cuentabancaria is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Traspaso[] List of Traspaso objects
     * @throws PropelException
     */
    public function getTraspasosRelatedByIdcuentabancariadestino($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTraspasosRelatedByIdcuentabancariadestinoPartial && !$this->isNew();
        if (null === $this->collTraspasosRelatedByIdcuentabancariadestino || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTraspasosRelatedByIdcuentabancariadestino) {
                // return empty collection
                $this->initTraspasosRelatedByIdcuentabancariadestino();
            } else {
                $collTraspasosRelatedByIdcuentabancariadestino = TraspasoQuery::create(null, $criteria)
                    ->filterByCuentabancariaRelatedByIdcuentabancariadestino($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTraspasosRelatedByIdcuentabancariadestinoPartial && count($collTraspasosRelatedByIdcuentabancariadestino)) {
                      $this->initTraspasosRelatedByIdcuentabancariadestino(false);

                      foreach ($collTraspasosRelatedByIdcuentabancariadestino as $obj) {
                        if (false == $this->collTraspasosRelatedByIdcuentabancariadestino->contains($obj)) {
                          $this->collTraspasosRelatedByIdcuentabancariadestino->append($obj);
                        }
                      }

                      $this->collTraspasosRelatedByIdcuentabancariadestinoPartial = true;
                    }

                    $collTraspasosRelatedByIdcuentabancariadestino->getInternalIterator()->rewind();

                    return $collTraspasosRelatedByIdcuentabancariadestino;
                }

                if ($partial && $this->collTraspasosRelatedByIdcuentabancariadestino) {
                    foreach ($this->collTraspasosRelatedByIdcuentabancariadestino as $obj) {
                        if ($obj->isNew()) {
                            $collTraspasosRelatedByIdcuentabancariadestino[] = $obj;
                        }
                    }
                }

                $this->collTraspasosRelatedByIdcuentabancariadestino = $collTraspasosRelatedByIdcuentabancariadestino;
                $this->collTraspasosRelatedByIdcuentabancariadestinoPartial = false;
            }
        }

        return $this->collTraspasosRelatedByIdcuentabancariadestino;
    }

    /**
     * Sets a collection of TraspasoRelatedByIdcuentabancariadestino objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $traspasosRelatedByIdcuentabancariadestino A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Cuentabancaria The current object (for fluent API support)
     */
    public function setTraspasosRelatedByIdcuentabancariadestino(PropelCollection $traspasosRelatedByIdcuentabancariadestino, PropelPDO $con = null)
    {
        $traspasosRelatedByIdcuentabancariadestinoToDelete = $this->getTraspasosRelatedByIdcuentabancariadestino(new Criteria(), $con)->diff($traspasosRelatedByIdcuentabancariadestino);


        $this->traspasosRelatedByIdcuentabancariadestinoScheduledForDeletion = $traspasosRelatedByIdcuentabancariadestinoToDelete;

        foreach ($traspasosRelatedByIdcuentabancariadestinoToDelete as $traspasoRelatedByIdcuentabancariadestinoRemoved) {
            $traspasoRelatedByIdcuentabancariadestinoRemoved->setCuentabancariaRelatedByIdcuentabancariadestino(null);
        }

        $this->collTraspasosRelatedByIdcuentabancariadestino = null;
        foreach ($traspasosRelatedByIdcuentabancariadestino as $traspasoRelatedByIdcuentabancariadestino) {
            $this->addTraspasoRelatedByIdcuentabancariadestino($traspasoRelatedByIdcuentabancariadestino);
        }

        $this->collTraspasosRelatedByIdcuentabancariadestino = $traspasosRelatedByIdcuentabancariadestino;
        $this->collTraspasosRelatedByIdcuentabancariadestinoPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Traspaso objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Traspaso objects.
     * @throws PropelException
     */
    public function countTraspasosRelatedByIdcuentabancariadestino(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTraspasosRelatedByIdcuentabancariadestinoPartial && !$this->isNew();
        if (null === $this->collTraspasosRelatedByIdcuentabancariadestino || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTraspasosRelatedByIdcuentabancariadestino) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTraspasosRelatedByIdcuentabancariadestino());
            }
            $query = TraspasoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCuentabancariaRelatedByIdcuentabancariadestino($this)
                ->count($con);
        }

        return count($this->collTraspasosRelatedByIdcuentabancariadestino);
    }

    /**
     * Method called to associate a Traspaso object to this object
     * through the Traspaso foreign key attribute.
     *
     * @param    Traspaso $l Traspaso
     * @return Cuentabancaria The current object (for fluent API support)
     */
    public function addTraspasoRelatedByIdcuentabancariadestino(Traspaso $l)
    {
        if ($this->collTraspasosRelatedByIdcuentabancariadestino === null) {
            $this->initTraspasosRelatedByIdcuentabancariadestino();
            $this->collTraspasosRelatedByIdcuentabancariadestinoPartial = true;
        }

        if (!in_array($l, $this->collTraspasosRelatedByIdcuentabancariadestino->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTraspasoRelatedByIdcuentabancariadestino($l);

            if ($this->traspasosRelatedByIdcuentabancariadestinoScheduledForDeletion and $this->traspasosRelatedByIdcuentabancariadestinoScheduledForDeletion->contains($l)) {
                $this->traspasosRelatedByIdcuentabancariadestinoScheduledForDeletion->remove($this->traspasosRelatedByIdcuentabancariadestinoScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	TraspasoRelatedByIdcuentabancariadestino $traspasoRelatedByIdcuentabancariadestino The traspasoRelatedByIdcuentabancariadestino object to add.
     */
    protected function doAddTraspasoRelatedByIdcuentabancariadestino($traspasoRelatedByIdcuentabancariadestino)
    {
        $this->collTraspasosRelatedByIdcuentabancariadestino[]= $traspasoRelatedByIdcuentabancariadestino;
        $traspasoRelatedByIdcuentabancariadestino->setCuentabancariaRelatedByIdcuentabancariadestino($this);
    }

    /**
     * @param	TraspasoRelatedByIdcuentabancariadestino $traspasoRelatedByIdcuentabancariadestino The traspasoRelatedByIdcuentabancariadestino object to remove.
     * @return Cuentabancaria The current object (for fluent API support)
     */
    public function removeTraspasoRelatedByIdcuentabancariadestino($traspasoRelatedByIdcuentabancariadestino)
    {
        if ($this->getTraspasosRelatedByIdcuentabancariadestino()->contains($traspasoRelatedByIdcuentabancariadestino)) {
            $this->collTraspasosRelatedByIdcuentabancariadestino->remove($this->collTraspasosRelatedByIdcuentabancariadestino->search($traspasoRelatedByIdcuentabancariadestino));
            if (null === $this->traspasosRelatedByIdcuentabancariadestinoScheduledForDeletion) {
                $this->traspasosRelatedByIdcuentabancariadestinoScheduledForDeletion = clone $this->collTraspasosRelatedByIdcuentabancariadestino;
                $this->traspasosRelatedByIdcuentabancariadestinoScheduledForDeletion->clear();
            }
            $this->traspasosRelatedByIdcuentabancariadestinoScheduledForDeletion[]= clone $traspasoRelatedByIdcuentabancariadestino;
            $traspasoRelatedByIdcuentabancariadestino->setCuentabancariaRelatedByIdcuentabancariadestino(null);
        }

        return $this;
    }

    /**
     * Clears out the collTraspasosRelatedByIdcuentabancariaorigen collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Cuentabancaria The current object (for fluent API support)
     * @see        addTraspasosRelatedByIdcuentabancariaorigen()
     */
    public function clearTraspasosRelatedByIdcuentabancariaorigen()
    {
        $this->collTraspasosRelatedByIdcuentabancariaorigen = null; // important to set this to null since that means it is uninitialized
        $this->collTraspasosRelatedByIdcuentabancariaorigenPartial = null;

        return $this;
    }

    /**
     * reset is the collTraspasosRelatedByIdcuentabancariaorigen collection loaded partially
     *
     * @return void
     */
    public function resetPartialTraspasosRelatedByIdcuentabancariaorigen($v = true)
    {
        $this->collTraspasosRelatedByIdcuentabancariaorigenPartial = $v;
    }

    /**
     * Initializes the collTraspasosRelatedByIdcuentabancariaorigen collection.
     *
     * By default this just sets the collTraspasosRelatedByIdcuentabancariaorigen collection to an empty array (like clearcollTraspasosRelatedByIdcuentabancariaorigen());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTraspasosRelatedByIdcuentabancariaorigen($overrideExisting = true)
    {
        if (null !== $this->collTraspasosRelatedByIdcuentabancariaorigen && !$overrideExisting) {
            return;
        }
        $this->collTraspasosRelatedByIdcuentabancariaorigen = new PropelObjectCollection();
        $this->collTraspasosRelatedByIdcuentabancariaorigen->setModel('Traspaso');
    }

    /**
     * Gets an array of Traspaso objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Cuentabancaria is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Traspaso[] List of Traspaso objects
     * @throws PropelException
     */
    public function getTraspasosRelatedByIdcuentabancariaorigen($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTraspasosRelatedByIdcuentabancariaorigenPartial && !$this->isNew();
        if (null === $this->collTraspasosRelatedByIdcuentabancariaorigen || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTraspasosRelatedByIdcuentabancariaorigen) {
                // return empty collection
                $this->initTraspasosRelatedByIdcuentabancariaorigen();
            } else {
                $collTraspasosRelatedByIdcuentabancariaorigen = TraspasoQuery::create(null, $criteria)
                    ->filterByCuentabancariaRelatedByIdcuentabancariaorigen($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTraspasosRelatedByIdcuentabancariaorigenPartial && count($collTraspasosRelatedByIdcuentabancariaorigen)) {
                      $this->initTraspasosRelatedByIdcuentabancariaorigen(false);

                      foreach ($collTraspasosRelatedByIdcuentabancariaorigen as $obj) {
                        if (false == $this->collTraspasosRelatedByIdcuentabancariaorigen->contains($obj)) {
                          $this->collTraspasosRelatedByIdcuentabancariaorigen->append($obj);
                        }
                      }

                      $this->collTraspasosRelatedByIdcuentabancariaorigenPartial = true;
                    }

                    $collTraspasosRelatedByIdcuentabancariaorigen->getInternalIterator()->rewind();

                    return $collTraspasosRelatedByIdcuentabancariaorigen;
                }

                if ($partial && $this->collTraspasosRelatedByIdcuentabancariaorigen) {
                    foreach ($this->collTraspasosRelatedByIdcuentabancariaorigen as $obj) {
                        if ($obj->isNew()) {
                            $collTraspasosRelatedByIdcuentabancariaorigen[] = $obj;
                        }
                    }
                }

                $this->collTraspasosRelatedByIdcuentabancariaorigen = $collTraspasosRelatedByIdcuentabancariaorigen;
                $this->collTraspasosRelatedByIdcuentabancariaorigenPartial = false;
            }
        }

        return $this->collTraspasosRelatedByIdcuentabancariaorigen;
    }

    /**
     * Sets a collection of TraspasoRelatedByIdcuentabancariaorigen objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $traspasosRelatedByIdcuentabancariaorigen A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Cuentabancaria The current object (for fluent API support)
     */
    public function setTraspasosRelatedByIdcuentabancariaorigen(PropelCollection $traspasosRelatedByIdcuentabancariaorigen, PropelPDO $con = null)
    {
        $traspasosRelatedByIdcuentabancariaorigenToDelete = $this->getTraspasosRelatedByIdcuentabancariaorigen(new Criteria(), $con)->diff($traspasosRelatedByIdcuentabancariaorigen);


        $this->traspasosRelatedByIdcuentabancariaorigenScheduledForDeletion = $traspasosRelatedByIdcuentabancariaorigenToDelete;

        foreach ($traspasosRelatedByIdcuentabancariaorigenToDelete as $traspasoRelatedByIdcuentabancariaorigenRemoved) {
            $traspasoRelatedByIdcuentabancariaorigenRemoved->setCuentabancariaRelatedByIdcuentabancariaorigen(null);
        }

        $this->collTraspasosRelatedByIdcuentabancariaorigen = null;
        foreach ($traspasosRelatedByIdcuentabancariaorigen as $traspasoRelatedByIdcuentabancariaorigen) {
            $this->addTraspasoRelatedByIdcuentabancariaorigen($traspasoRelatedByIdcuentabancariaorigen);
        }

        $this->collTraspasosRelatedByIdcuentabancariaorigen = $traspasosRelatedByIdcuentabancariaorigen;
        $this->collTraspasosRelatedByIdcuentabancariaorigenPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Traspaso objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Traspaso objects.
     * @throws PropelException
     */
    public function countTraspasosRelatedByIdcuentabancariaorigen(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTraspasosRelatedByIdcuentabancariaorigenPartial && !$this->isNew();
        if (null === $this->collTraspasosRelatedByIdcuentabancariaorigen || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTraspasosRelatedByIdcuentabancariaorigen) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTraspasosRelatedByIdcuentabancariaorigen());
            }
            $query = TraspasoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCuentabancariaRelatedByIdcuentabancariaorigen($this)
                ->count($con);
        }

        return count($this->collTraspasosRelatedByIdcuentabancariaorigen);
    }

    /**
     * Method called to associate a Traspaso object to this object
     * through the Traspaso foreign key attribute.
     *
     * @param    Traspaso $l Traspaso
     * @return Cuentabancaria The current object (for fluent API support)
     */
    public function addTraspasoRelatedByIdcuentabancariaorigen(Traspaso $l)
    {
        if ($this->collTraspasosRelatedByIdcuentabancariaorigen === null) {
            $this->initTraspasosRelatedByIdcuentabancariaorigen();
            $this->collTraspasosRelatedByIdcuentabancariaorigenPartial = true;
        }

        if (!in_array($l, $this->collTraspasosRelatedByIdcuentabancariaorigen->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTraspasoRelatedByIdcuentabancariaorigen($l);

            if ($this->traspasosRelatedByIdcuentabancariaorigenScheduledForDeletion and $this->traspasosRelatedByIdcuentabancariaorigenScheduledForDeletion->contains($l)) {
                $this->traspasosRelatedByIdcuentabancariaorigenScheduledForDeletion->remove($this->traspasosRelatedByIdcuentabancariaorigenScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	TraspasoRelatedByIdcuentabancariaorigen $traspasoRelatedByIdcuentabancariaorigen The traspasoRelatedByIdcuentabancariaorigen object to add.
     */
    protected function doAddTraspasoRelatedByIdcuentabancariaorigen($traspasoRelatedByIdcuentabancariaorigen)
    {
        $this->collTraspasosRelatedByIdcuentabancariaorigen[]= $traspasoRelatedByIdcuentabancariaorigen;
        $traspasoRelatedByIdcuentabancariaorigen->setCuentabancariaRelatedByIdcuentabancariaorigen($this);
    }

    /**
     * @param	TraspasoRelatedByIdcuentabancariaorigen $traspasoRelatedByIdcuentabancariaorigen The traspasoRelatedByIdcuentabancariaorigen object to remove.
     * @return Cuentabancaria The current object (for fluent API support)
     */
    public function removeTraspasoRelatedByIdcuentabancariaorigen($traspasoRelatedByIdcuentabancariaorigen)
    {
        if ($this->getTraspasosRelatedByIdcuentabancariaorigen()->contains($traspasoRelatedByIdcuentabancariaorigen)) {
            $this->collTraspasosRelatedByIdcuentabancariaorigen->remove($this->collTraspasosRelatedByIdcuentabancariaorigen->search($traspasoRelatedByIdcuentabancariaorigen));
            if (null === $this->traspasosRelatedByIdcuentabancariaorigenScheduledForDeletion) {
                $this->traspasosRelatedByIdcuentabancariaorigenScheduledForDeletion = clone $this->collTraspasosRelatedByIdcuentabancariaorigen;
                $this->traspasosRelatedByIdcuentabancariaorigenScheduledForDeletion->clear();
            }
            $this->traspasosRelatedByIdcuentabancariaorigenScheduledForDeletion[]= clone $traspasoRelatedByIdcuentabancariaorigen;
            $traspasoRelatedByIdcuentabancariaorigen->setCuentabancariaRelatedByIdcuentabancariaorigen(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idcuentabancaria = null;
        $this->idempresa = null;
        $this->idsucursal = null;
        $this->cuentabancaria_banco = null;
        $this->cuentabancaria_nocuenta = null;
        $this->cuentabancaria_balance = null;
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
            if ($this->collAbonoproveedordetalles) {
                foreach ($this->collAbonoproveedordetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collFlujoefectivos) {
                foreach ($this->collFlujoefectivos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collTraspasosRelatedByIdcuentabancariadestino) {
                foreach ($this->collTraspasosRelatedByIdcuentabancariadestino as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collTraspasosRelatedByIdcuentabancariaorigen) {
                foreach ($this->collTraspasosRelatedByIdcuentabancariaorigen as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aEmpresa instanceof Persistent) {
              $this->aEmpresa->clearAllReferences($deep);
            }
            if ($this->aSucursal instanceof Persistent) {
              $this->aSucursal->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collAbonoproveedordetalles instanceof PropelCollection) {
            $this->collAbonoproveedordetalles->clearIterator();
        }
        $this->collAbonoproveedordetalles = null;
        if ($this->collFlujoefectivos instanceof PropelCollection) {
            $this->collFlujoefectivos->clearIterator();
        }
        $this->collFlujoefectivos = null;
        if ($this->collTraspasosRelatedByIdcuentabancariadestino instanceof PropelCollection) {
            $this->collTraspasosRelatedByIdcuentabancariadestino->clearIterator();
        }
        $this->collTraspasosRelatedByIdcuentabancariadestino = null;
        if ($this->collTraspasosRelatedByIdcuentabancariaorigen instanceof PropelCollection) {
            $this->collTraspasosRelatedByIdcuentabancariaorigen->clearIterator();
        }
        $this->collTraspasosRelatedByIdcuentabancariaorigen = null;
        $this->aEmpresa = null;
        $this->aSucursal = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CuentabancariaPeer::DEFAULT_STRING_FORMAT);
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
