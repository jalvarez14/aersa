<?php


/**
 * Base class that represents a row from the 'almacen' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseAlmacen extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'AlmacenPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        AlmacenPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idalmacen field.
     * @var        int
     */
    protected $idalmacen;

    /**
     * The value for the idsucursal field.
     * @var        int
     */
    protected $idsucursal;

    /**
     * The value for the almacen_nombre field.
     * @var        string
     */
    protected $almacen_nombre;

    /**
     * The value for the almacen_encargado field.
     * @var        string
     */
    protected $almacen_encargado;

    /**
     * The value for the almacen_estatus field.
     * @var        boolean
     */
    protected $almacen_estatus;

    /**
     * @var        Sucursal
     */
    protected $aSucursal;

    /**
     * @var        PropelObjectCollection|Compradetalle[] Collection to store aggregation of Compradetalle objects.
     */
    protected $collCompradetalles;
    protected $collCompradetallesPartial;

    /**
     * @var        PropelObjectCollection|Devolucion[] Collection to store aggregation of Devolucion objects.
     */
    protected $collDevolucions;
    protected $collDevolucionsPartial;

    /**
     * @var        PropelObjectCollection|Devoluciondetalle[] Collection to store aggregation of Devoluciondetalle objects.
     */
    protected $collDevoluciondetalles;
    protected $collDevoluciondetallesPartial;

    /**
     * @var        PropelObjectCollection|Notacredito[] Collection to store aggregation of Notacredito objects.
     */
    protected $collNotacreditos;
    protected $collNotacreditosPartial;

    /**
     * @var        PropelObjectCollection|Notacreditodetalle[] Collection to store aggregation of Notacreditodetalle objects.
     */
    protected $collNotacreditodetalles;
    protected $collNotacreditodetallesPartial;

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
    protected $compradetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $devolucionsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $devoluciondetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $notacreditosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $notacreditodetallesScheduledForDeletion = null;

    /**
     * Get the [idalmacen] column value.
     *
     * @return int
     */
    public function getIdalmacen()
    {

        return $this->idalmacen;
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
     * Get the [almacen_nombre] column value.
     *
     * @return string
     */
    public function getAlmacenNombre()
    {

        return $this->almacen_nombre;
    }

    /**
     * Get the [almacen_encargado] column value.
     *
     * @return string
     */
    public function getAlmacenEncargado()
    {

        return $this->almacen_encargado;
    }

    /**
     * Get the [almacen_estatus] column value.
     *
     * @return boolean
     */
    public function getAlmacenEstatus()
    {

        return $this->almacen_estatus;
    }

    /**
     * Set the value of [idalmacen] column.
     *
     * @param  int $v new value
     * @return Almacen The current object (for fluent API support)
     */
    public function setIdalmacen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idalmacen !== $v) {
            $this->idalmacen = $v;
            $this->modifiedColumns[] = AlmacenPeer::IDALMACEN;
        }


        return $this;
    } // setIdalmacen()

    /**
     * Set the value of [idsucursal] column.
     *
     * @param  int $v new value
     * @return Almacen The current object (for fluent API support)
     */
    public function setIdsucursal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idsucursal !== $v) {
            $this->idsucursal = $v;
            $this->modifiedColumns[] = AlmacenPeer::IDSUCURSAL;
        }

        if ($this->aSucursal !== null && $this->aSucursal->getIdsucursal() !== $v) {
            $this->aSucursal = null;
        }


        return $this;
    } // setIdsucursal()

    /**
     * Set the value of [almacen_nombre] column.
     *
     * @param  string $v new value
     * @return Almacen The current object (for fluent API support)
     */
    public function setAlmacenNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->almacen_nombre !== $v) {
            $this->almacen_nombre = $v;
            $this->modifiedColumns[] = AlmacenPeer::ALMACEN_NOMBRE;
        }


        return $this;
    } // setAlmacenNombre()

    /**
     * Set the value of [almacen_encargado] column.
     *
     * @param  string $v new value
     * @return Almacen The current object (for fluent API support)
     */
    public function setAlmacenEncargado($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->almacen_encargado !== $v) {
            $this->almacen_encargado = $v;
            $this->modifiedColumns[] = AlmacenPeer::ALMACEN_ENCARGADO;
        }


        return $this;
    } // setAlmacenEncargado()

    /**
     * Sets the value of the [almacen_estatus] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Almacen The current object (for fluent API support)
     */
    public function setAlmacenEstatus($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->almacen_estatus !== $v) {
            $this->almacen_estatus = $v;
            $this->modifiedColumns[] = AlmacenPeer::ALMACEN_ESTATUS;
        }


        return $this;
    } // setAlmacenEstatus()

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

            $this->idalmacen = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idsucursal = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->almacen_nombre = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->almacen_encargado = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->almacen_estatus = ($row[$startcol + 4] !== null) ? (boolean) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = AlmacenPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Almacen object", $e);
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
            $con = Propel::getConnection(AlmacenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = AlmacenPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aSucursal = null;
            $this->collCompradetalles = null;

            $this->collDevolucions = null;

            $this->collDevoluciondetalles = null;

            $this->collNotacreditos = null;

            $this->collNotacreditodetalles = null;

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
            $con = Propel::getConnection(AlmacenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = AlmacenQuery::create()
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
            $con = Propel::getConnection(AlmacenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                AlmacenPeer::addInstanceToPool($this);
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

            if ($this->compradetallesScheduledForDeletion !== null) {
                if (!$this->compradetallesScheduledForDeletion->isEmpty()) {
                    CompradetalleQuery::create()
                        ->filterByPrimaryKeys($this->compradetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->compradetallesScheduledForDeletion = null;
                }
            }

            if ($this->collCompradetalles !== null) {
                foreach ($this->collCompradetalles as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->devolucionsScheduledForDeletion !== null) {
                if (!$this->devolucionsScheduledForDeletion->isEmpty()) {
                    DevolucionQuery::create()
                        ->filterByPrimaryKeys($this->devolucionsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->devolucionsScheduledForDeletion = null;
                }
            }

            if ($this->collDevolucions !== null) {
                foreach ($this->collDevolucions as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->devoluciondetallesScheduledForDeletion !== null) {
                if (!$this->devoluciondetallesScheduledForDeletion->isEmpty()) {
                    DevoluciondetalleQuery::create()
                        ->filterByPrimaryKeys($this->devoluciondetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->devoluciondetallesScheduledForDeletion = null;
                }
            }

            if ($this->collDevoluciondetalles !== null) {
                foreach ($this->collDevoluciondetalles as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->notacreditosScheduledForDeletion !== null) {
                if (!$this->notacreditosScheduledForDeletion->isEmpty()) {
                    NotacreditoQuery::create()
                        ->filterByPrimaryKeys($this->notacreditosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->notacreditosScheduledForDeletion = null;
                }
            }

            if ($this->collNotacreditos !== null) {
                foreach ($this->collNotacreditos as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->notacreditodetallesScheduledForDeletion !== null) {
                if (!$this->notacreditodetallesScheduledForDeletion->isEmpty()) {
                    NotacreditodetalleQuery::create()
                        ->filterByPrimaryKeys($this->notacreditodetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->notacreditodetallesScheduledForDeletion = null;
                }
            }

            if ($this->collNotacreditodetalles !== null) {
                foreach ($this->collNotacreditodetalles as $referrerFK) {
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

        $this->modifiedColumns[] = AlmacenPeer::IDALMACEN;
        if (null !== $this->idalmacen) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . AlmacenPeer::IDALMACEN . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(AlmacenPeer::IDALMACEN)) {
            $modifiedColumns[':p' . $index++]  = '`idalmacen`';
        }
        if ($this->isColumnModified(AlmacenPeer::IDSUCURSAL)) {
            $modifiedColumns[':p' . $index++]  = '`idsucursal`';
        }
        if ($this->isColumnModified(AlmacenPeer::ALMACEN_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`almacen_nombre`';
        }
        if ($this->isColumnModified(AlmacenPeer::ALMACEN_ENCARGADO)) {
            $modifiedColumns[':p' . $index++]  = '`almacen_encargado`';
        }
        if ($this->isColumnModified(AlmacenPeer::ALMACEN_ESTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`almacen_estatus`';
        }

        $sql = sprintf(
            'INSERT INTO `almacen` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idalmacen`':
                        $stmt->bindValue($identifier, $this->idalmacen, PDO::PARAM_INT);
                        break;
                    case '`idsucursal`':
                        $stmt->bindValue($identifier, $this->idsucursal, PDO::PARAM_INT);
                        break;
                    case '`almacen_nombre`':
                        $stmt->bindValue($identifier, $this->almacen_nombre, PDO::PARAM_STR);
                        break;
                    case '`almacen_encargado`':
                        $stmt->bindValue($identifier, $this->almacen_encargado, PDO::PARAM_STR);
                        break;
                    case '`almacen_estatus`':
                        $stmt->bindValue($identifier, (int) $this->almacen_estatus, PDO::PARAM_INT);
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
        $this->setIdalmacen($pk);

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

            if ($this->aSucursal !== null) {
                if (!$this->aSucursal->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aSucursal->getValidationFailures());
                }
            }


            if (($retval = AlmacenPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCompradetalles !== null) {
                    foreach ($this->collCompradetalles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collDevolucions !== null) {
                    foreach ($this->collDevolucions as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collDevoluciondetalles !== null) {
                    foreach ($this->collDevoluciondetalles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collNotacreditos !== null) {
                    foreach ($this->collNotacreditos as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collNotacreditodetalles !== null) {
                    foreach ($this->collNotacreditodetalles as $referrerFK) {
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
        $pos = AlmacenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdalmacen();
                break;
            case 1:
                return $this->getIdsucursal();
                break;
            case 2:
                return $this->getAlmacenNombre();
                break;
            case 3:
                return $this->getAlmacenEncargado();
                break;
            case 4:
                return $this->getAlmacenEstatus();
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
        if (isset($alreadyDumpedObjects['Almacen'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Almacen'][$this->getPrimaryKey()] = true;
        $keys = AlmacenPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdalmacen(),
            $keys[1] => $this->getIdsucursal(),
            $keys[2] => $this->getAlmacenNombre(),
            $keys[3] => $this->getAlmacenEncargado(),
            $keys[4] => $this->getAlmacenEstatus(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aSucursal) {
                $result['Sucursal'] = $this->aSucursal->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCompradetalles) {
                $result['Compradetalles'] = $this->collCompradetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collDevolucions) {
                $result['Devolucions'] = $this->collDevolucions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collDevoluciondetalles) {
                $result['Devoluciondetalles'] = $this->collDevoluciondetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collNotacreditos) {
                $result['Notacreditos'] = $this->collNotacreditos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collNotacreditodetalles) {
                $result['Notacreditodetalles'] = $this->collNotacreditodetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = AlmacenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdalmacen($value);
                break;
            case 1:
                $this->setIdsucursal($value);
                break;
            case 2:
                $this->setAlmacenNombre($value);
                break;
            case 3:
                $this->setAlmacenEncargado($value);
                break;
            case 4:
                $this->setAlmacenEstatus($value);
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
        $keys = AlmacenPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdalmacen($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdsucursal($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setAlmacenNombre($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setAlmacenEncargado($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setAlmacenEstatus($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(AlmacenPeer::DATABASE_NAME);

        if ($this->isColumnModified(AlmacenPeer::IDALMACEN)) $criteria->add(AlmacenPeer::IDALMACEN, $this->idalmacen);
        if ($this->isColumnModified(AlmacenPeer::IDSUCURSAL)) $criteria->add(AlmacenPeer::IDSUCURSAL, $this->idsucursal);
        if ($this->isColumnModified(AlmacenPeer::ALMACEN_NOMBRE)) $criteria->add(AlmacenPeer::ALMACEN_NOMBRE, $this->almacen_nombre);
        if ($this->isColumnModified(AlmacenPeer::ALMACEN_ENCARGADO)) $criteria->add(AlmacenPeer::ALMACEN_ENCARGADO, $this->almacen_encargado);
        if ($this->isColumnModified(AlmacenPeer::ALMACEN_ESTATUS)) $criteria->add(AlmacenPeer::ALMACEN_ESTATUS, $this->almacen_estatus);

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
        $criteria = new Criteria(AlmacenPeer::DATABASE_NAME);
        $criteria->add(AlmacenPeer::IDALMACEN, $this->idalmacen);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdalmacen();
    }

    /**
     * Generic method to set the primary key (idalmacen column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdalmacen($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdalmacen();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Almacen (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdsucursal($this->getIdsucursal());
        $copyObj->setAlmacenNombre($this->getAlmacenNombre());
        $copyObj->setAlmacenEncargado($this->getAlmacenEncargado());
        $copyObj->setAlmacenEstatus($this->getAlmacenEstatus());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCompradetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCompradetalle($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getDevolucions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addDevolucion($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getDevoluciondetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addDevoluciondetalle($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getNotacreditos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addNotacredito($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getNotacreditodetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addNotacreditodetalle($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdalmacen(NULL); // this is a auto-increment column, so set to default value
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
     * @return Almacen Clone of current object.
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
     * @return AlmacenPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new AlmacenPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Sucursal object.
     *
     * @param                  Sucursal $v
     * @return Almacen The current object (for fluent API support)
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
            $v->addAlmacen($this);
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
                $this->aSucursal->addAlmacens($this);
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
        if ('Compradetalle' == $relationName) {
            $this->initCompradetalles();
        }
        if ('Devolucion' == $relationName) {
            $this->initDevolucions();
        }
        if ('Devoluciondetalle' == $relationName) {
            $this->initDevoluciondetalles();
        }
        if ('Notacredito' == $relationName) {
            $this->initNotacreditos();
        }
        if ('Notacreditodetalle' == $relationName) {
            $this->initNotacreditodetalles();
        }
    }

    /**
     * Clears out the collCompradetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Almacen The current object (for fluent API support)
     * @see        addCompradetalles()
     */
    public function clearCompradetalles()
    {
        $this->collCompradetalles = null; // important to set this to null since that means it is uninitialized
        $this->collCompradetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collCompradetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialCompradetalles($v = true)
    {
        $this->collCompradetallesPartial = $v;
    }

    /**
     * Initializes the collCompradetalles collection.
     *
     * By default this just sets the collCompradetalles collection to an empty array (like clearcollCompradetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCompradetalles($overrideExisting = true)
    {
        if (null !== $this->collCompradetalles && !$overrideExisting) {
            return;
        }
        $this->collCompradetalles = new PropelObjectCollection();
        $this->collCompradetalles->setModel('Compradetalle');
    }

    /**
     * Gets an array of Compradetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Almacen is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Compradetalle[] List of Compradetalle objects
     * @throws PropelException
     */
    public function getCompradetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCompradetallesPartial && !$this->isNew();
        if (null === $this->collCompradetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCompradetalles) {
                // return empty collection
                $this->initCompradetalles();
            } else {
                $collCompradetalles = CompradetalleQuery::create(null, $criteria)
                    ->filterByAlmacen($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCompradetallesPartial && count($collCompradetalles)) {
                      $this->initCompradetalles(false);

                      foreach ($collCompradetalles as $obj) {
                        if (false == $this->collCompradetalles->contains($obj)) {
                          $this->collCompradetalles->append($obj);
                        }
                      }

                      $this->collCompradetallesPartial = true;
                    }

                    $collCompradetalles->getInternalIterator()->rewind();

                    return $collCompradetalles;
                }

                if ($partial && $this->collCompradetalles) {
                    foreach ($this->collCompradetalles as $obj) {
                        if ($obj->isNew()) {
                            $collCompradetalles[] = $obj;
                        }
                    }
                }

                $this->collCompradetalles = $collCompradetalles;
                $this->collCompradetallesPartial = false;
            }
        }

        return $this->collCompradetalles;
    }

    /**
     * Sets a collection of Compradetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $compradetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Almacen The current object (for fluent API support)
     */
    public function setCompradetalles(PropelCollection $compradetalles, PropelPDO $con = null)
    {
        $compradetallesToDelete = $this->getCompradetalles(new Criteria(), $con)->diff($compradetalles);


        $this->compradetallesScheduledForDeletion = $compradetallesToDelete;

        foreach ($compradetallesToDelete as $compradetalleRemoved) {
            $compradetalleRemoved->setAlmacen(null);
        }

        $this->collCompradetalles = null;
        foreach ($compradetalles as $compradetalle) {
            $this->addCompradetalle($compradetalle);
        }

        $this->collCompradetalles = $compradetalles;
        $this->collCompradetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Compradetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Compradetalle objects.
     * @throws PropelException
     */
    public function countCompradetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCompradetallesPartial && !$this->isNew();
        if (null === $this->collCompradetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCompradetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCompradetalles());
            }
            $query = CompradetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByAlmacen($this)
                ->count($con);
        }

        return count($this->collCompradetalles);
    }

    /**
     * Method called to associate a Compradetalle object to this object
     * through the Compradetalle foreign key attribute.
     *
     * @param    Compradetalle $l Compradetalle
     * @return Almacen The current object (for fluent API support)
     */
    public function addCompradetalle(Compradetalle $l)
    {
        if ($this->collCompradetalles === null) {
            $this->initCompradetalles();
            $this->collCompradetallesPartial = true;
        }

        if (!in_array($l, $this->collCompradetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCompradetalle($l);

            if ($this->compradetallesScheduledForDeletion and $this->compradetallesScheduledForDeletion->contains($l)) {
                $this->compradetallesScheduledForDeletion->remove($this->compradetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Compradetalle $compradetalle The compradetalle object to add.
     */
    protected function doAddCompradetalle($compradetalle)
    {
        $this->collCompradetalles[]= $compradetalle;
        $compradetalle->setAlmacen($this);
    }

    /**
     * @param	Compradetalle $compradetalle The compradetalle object to remove.
     * @return Almacen The current object (for fluent API support)
     */
    public function removeCompradetalle($compradetalle)
    {
        if ($this->getCompradetalles()->contains($compradetalle)) {
            $this->collCompradetalles->remove($this->collCompradetalles->search($compradetalle));
            if (null === $this->compradetallesScheduledForDeletion) {
                $this->compradetallesScheduledForDeletion = clone $this->collCompradetalles;
                $this->compradetallesScheduledForDeletion->clear();
            }
            $this->compradetallesScheduledForDeletion[]= clone $compradetalle;
            $compradetalle->setAlmacen(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related Compradetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Compradetalle[] List of Compradetalle objects
     */
    public function getCompradetallesJoinCompra($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CompradetalleQuery::create(null, $criteria);
        $query->joinWith('Compra', $join_behavior);

        return $this->getCompradetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related Compradetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Compradetalle[] List of Compradetalle objects
     */
    public function getCompradetallesJoinProducto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CompradetalleQuery::create(null, $criteria);
        $query->joinWith('Producto', $join_behavior);

        return $this->getCompradetalles($query, $con);
    }

    /**
     * Clears out the collDevolucions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Almacen The current object (for fluent API support)
     * @see        addDevolucions()
     */
    public function clearDevolucions()
    {
        $this->collDevolucions = null; // important to set this to null since that means it is uninitialized
        $this->collDevolucionsPartial = null;

        return $this;
    }

    /**
     * reset is the collDevolucions collection loaded partially
     *
     * @return void
     */
    public function resetPartialDevolucions($v = true)
    {
        $this->collDevolucionsPartial = $v;
    }

    /**
     * Initializes the collDevolucions collection.
     *
     * By default this just sets the collDevolucions collection to an empty array (like clearcollDevolucions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initDevolucions($overrideExisting = true)
    {
        if (null !== $this->collDevolucions && !$overrideExisting) {
            return;
        }
        $this->collDevolucions = new PropelObjectCollection();
        $this->collDevolucions->setModel('Devolucion');
    }

    /**
     * Gets an array of Devolucion objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Almacen is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Devolucion[] List of Devolucion objects
     * @throws PropelException
     */
    public function getDevolucions($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collDevolucionsPartial && !$this->isNew();
        if (null === $this->collDevolucions || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collDevolucions) {
                // return empty collection
                $this->initDevolucions();
            } else {
                $collDevolucions = DevolucionQuery::create(null, $criteria)
                    ->filterByAlmacen($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collDevolucionsPartial && count($collDevolucions)) {
                      $this->initDevolucions(false);

                      foreach ($collDevolucions as $obj) {
                        if (false == $this->collDevolucions->contains($obj)) {
                          $this->collDevolucions->append($obj);
                        }
                      }

                      $this->collDevolucionsPartial = true;
                    }

                    $collDevolucions->getInternalIterator()->rewind();

                    return $collDevolucions;
                }

                if ($partial && $this->collDevolucions) {
                    foreach ($this->collDevolucions as $obj) {
                        if ($obj->isNew()) {
                            $collDevolucions[] = $obj;
                        }
                    }
                }

                $this->collDevolucions = $collDevolucions;
                $this->collDevolucionsPartial = false;
            }
        }

        return $this->collDevolucions;
    }

    /**
     * Sets a collection of Devolucion objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $devolucions A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Almacen The current object (for fluent API support)
     */
    public function setDevolucions(PropelCollection $devolucions, PropelPDO $con = null)
    {
        $devolucionsToDelete = $this->getDevolucions(new Criteria(), $con)->diff($devolucions);


        $this->devolucionsScheduledForDeletion = $devolucionsToDelete;

        foreach ($devolucionsToDelete as $devolucionRemoved) {
            $devolucionRemoved->setAlmacen(null);
        }

        $this->collDevolucions = null;
        foreach ($devolucions as $devolucion) {
            $this->addDevolucion($devolucion);
        }

        $this->collDevolucions = $devolucions;
        $this->collDevolucionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Devolucion objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Devolucion objects.
     * @throws PropelException
     */
    public function countDevolucions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collDevolucionsPartial && !$this->isNew();
        if (null === $this->collDevolucions || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collDevolucions) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getDevolucions());
            }
            $query = DevolucionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByAlmacen($this)
                ->count($con);
        }

        return count($this->collDevolucions);
    }

    /**
     * Method called to associate a Devolucion object to this object
     * through the Devolucion foreign key attribute.
     *
     * @param    Devolucion $l Devolucion
     * @return Almacen The current object (for fluent API support)
     */
    public function addDevolucion(Devolucion $l)
    {
        if ($this->collDevolucions === null) {
            $this->initDevolucions();
            $this->collDevolucionsPartial = true;
        }

        if (!in_array($l, $this->collDevolucions->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddDevolucion($l);

            if ($this->devolucionsScheduledForDeletion and $this->devolucionsScheduledForDeletion->contains($l)) {
                $this->devolucionsScheduledForDeletion->remove($this->devolucionsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Devolucion $devolucion The devolucion object to add.
     */
    protected function doAddDevolucion($devolucion)
    {
        $this->collDevolucions[]= $devolucion;
        $devolucion->setAlmacen($this);
    }

    /**
     * @param	Devolucion $devolucion The devolucion object to remove.
     * @return Almacen The current object (for fluent API support)
     */
    public function removeDevolucion($devolucion)
    {
        if ($this->getDevolucions()->contains($devolucion)) {
            $this->collDevolucions->remove($this->collDevolucions->search($devolucion));
            if (null === $this->devolucionsScheduledForDeletion) {
                $this->devolucionsScheduledForDeletion = clone $this->collDevolucions;
                $this->devolucionsScheduledForDeletion->clear();
            }
            $this->devolucionsScheduledForDeletion[]= clone $devolucion;
            $devolucion->setAlmacen(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related Devolucions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Devolucion[] List of Devolucion objects
     */
    public function getDevolucionsJoinUsuarioRelatedByIdauditor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = DevolucionQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdauditor', $join_behavior);

        return $this->getDevolucions($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related Devolucions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Devolucion[] List of Devolucion objects
     */
    public function getDevolucionsJoinSucursal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = DevolucionQuery::create(null, $criteria);
        $query->joinWith('Sucursal', $join_behavior);

        return $this->getDevolucions($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related Devolucions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Devolucion[] List of Devolucion objects
     */
    public function getDevolucionsJoinUsuarioRelatedByIdusuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = DevolucionQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdusuario', $join_behavior);

        return $this->getDevolucions($query, $con);
    }

    /**
     * Clears out the collDevoluciondetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Almacen The current object (for fluent API support)
     * @see        addDevoluciondetalles()
     */
    public function clearDevoluciondetalles()
    {
        $this->collDevoluciondetalles = null; // important to set this to null since that means it is uninitialized
        $this->collDevoluciondetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collDevoluciondetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialDevoluciondetalles($v = true)
    {
        $this->collDevoluciondetallesPartial = $v;
    }

    /**
     * Initializes the collDevoluciondetalles collection.
     *
     * By default this just sets the collDevoluciondetalles collection to an empty array (like clearcollDevoluciondetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initDevoluciondetalles($overrideExisting = true)
    {
        if (null !== $this->collDevoluciondetalles && !$overrideExisting) {
            return;
        }
        $this->collDevoluciondetalles = new PropelObjectCollection();
        $this->collDevoluciondetalles->setModel('Devoluciondetalle');
    }

    /**
     * Gets an array of Devoluciondetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Almacen is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Devoluciondetalle[] List of Devoluciondetalle objects
     * @throws PropelException
     */
    public function getDevoluciondetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collDevoluciondetallesPartial && !$this->isNew();
        if (null === $this->collDevoluciondetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collDevoluciondetalles) {
                // return empty collection
                $this->initDevoluciondetalles();
            } else {
                $collDevoluciondetalles = DevoluciondetalleQuery::create(null, $criteria)
                    ->filterByAlmacen($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collDevoluciondetallesPartial && count($collDevoluciondetalles)) {
                      $this->initDevoluciondetalles(false);

                      foreach ($collDevoluciondetalles as $obj) {
                        if (false == $this->collDevoluciondetalles->contains($obj)) {
                          $this->collDevoluciondetalles->append($obj);
                        }
                      }

                      $this->collDevoluciondetallesPartial = true;
                    }

                    $collDevoluciondetalles->getInternalIterator()->rewind();

                    return $collDevoluciondetalles;
                }

                if ($partial && $this->collDevoluciondetalles) {
                    foreach ($this->collDevoluciondetalles as $obj) {
                        if ($obj->isNew()) {
                            $collDevoluciondetalles[] = $obj;
                        }
                    }
                }

                $this->collDevoluciondetalles = $collDevoluciondetalles;
                $this->collDevoluciondetallesPartial = false;
            }
        }

        return $this->collDevoluciondetalles;
    }

    /**
     * Sets a collection of Devoluciondetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $devoluciondetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Almacen The current object (for fluent API support)
     */
    public function setDevoluciondetalles(PropelCollection $devoluciondetalles, PropelPDO $con = null)
    {
        $devoluciondetallesToDelete = $this->getDevoluciondetalles(new Criteria(), $con)->diff($devoluciondetalles);


        $this->devoluciondetallesScheduledForDeletion = $devoluciondetallesToDelete;

        foreach ($devoluciondetallesToDelete as $devoluciondetalleRemoved) {
            $devoluciondetalleRemoved->setAlmacen(null);
        }

        $this->collDevoluciondetalles = null;
        foreach ($devoluciondetalles as $devoluciondetalle) {
            $this->addDevoluciondetalle($devoluciondetalle);
        }

        $this->collDevoluciondetalles = $devoluciondetalles;
        $this->collDevoluciondetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Devoluciondetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Devoluciondetalle objects.
     * @throws PropelException
     */
    public function countDevoluciondetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collDevoluciondetallesPartial && !$this->isNew();
        if (null === $this->collDevoluciondetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collDevoluciondetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getDevoluciondetalles());
            }
            $query = DevoluciondetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByAlmacen($this)
                ->count($con);
        }

        return count($this->collDevoluciondetalles);
    }

    /**
     * Method called to associate a Devoluciondetalle object to this object
     * through the Devoluciondetalle foreign key attribute.
     *
     * @param    Devoluciondetalle $l Devoluciondetalle
     * @return Almacen The current object (for fluent API support)
     */
    public function addDevoluciondetalle(Devoluciondetalle $l)
    {
        if ($this->collDevoluciondetalles === null) {
            $this->initDevoluciondetalles();
            $this->collDevoluciondetallesPartial = true;
        }

        if (!in_array($l, $this->collDevoluciondetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddDevoluciondetalle($l);

            if ($this->devoluciondetallesScheduledForDeletion and $this->devoluciondetallesScheduledForDeletion->contains($l)) {
                $this->devoluciondetallesScheduledForDeletion->remove($this->devoluciondetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Devoluciondetalle $devoluciondetalle The devoluciondetalle object to add.
     */
    protected function doAddDevoluciondetalle($devoluciondetalle)
    {
        $this->collDevoluciondetalles[]= $devoluciondetalle;
        $devoluciondetalle->setAlmacen($this);
    }

    /**
     * @param	Devoluciondetalle $devoluciondetalle The devoluciondetalle object to remove.
     * @return Almacen The current object (for fluent API support)
     */
    public function removeDevoluciondetalle($devoluciondetalle)
    {
        if ($this->getDevoluciondetalles()->contains($devoluciondetalle)) {
            $this->collDevoluciondetalles->remove($this->collDevoluciondetalles->search($devoluciondetalle));
            if (null === $this->devoluciondetallesScheduledForDeletion) {
                $this->devoluciondetallesScheduledForDeletion = clone $this->collDevoluciondetalles;
                $this->devoluciondetallesScheduledForDeletion->clear();
            }
            $this->devoluciondetallesScheduledForDeletion[]= clone $devoluciondetalle;
            $devoluciondetalle->setAlmacen(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related Devoluciondetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Devoluciondetalle[] List of Devoluciondetalle objects
     */
    public function getDevoluciondetallesJoinDevolucion($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = DevoluciondetalleQuery::create(null, $criteria);
        $query->joinWith('Devolucion', $join_behavior);

        return $this->getDevoluciondetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related Devoluciondetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Devoluciondetalle[] List of Devoluciondetalle objects
     */
    public function getDevoluciondetallesJoinProducto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = DevoluciondetalleQuery::create(null, $criteria);
        $query->joinWith('Producto', $join_behavior);

        return $this->getDevoluciondetalles($query, $con);
    }

    /**
     * Clears out the collNotacreditos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Almacen The current object (for fluent API support)
     * @see        addNotacreditos()
     */
    public function clearNotacreditos()
    {
        $this->collNotacreditos = null; // important to set this to null since that means it is uninitialized
        $this->collNotacreditosPartial = null;

        return $this;
    }

    /**
     * reset is the collNotacreditos collection loaded partially
     *
     * @return void
     */
    public function resetPartialNotacreditos($v = true)
    {
        $this->collNotacreditosPartial = $v;
    }

    /**
     * Initializes the collNotacreditos collection.
     *
     * By default this just sets the collNotacreditos collection to an empty array (like clearcollNotacreditos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initNotacreditos($overrideExisting = true)
    {
        if (null !== $this->collNotacreditos && !$overrideExisting) {
            return;
        }
        $this->collNotacreditos = new PropelObjectCollection();
        $this->collNotacreditos->setModel('Notacredito');
    }

    /**
     * Gets an array of Notacredito objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Almacen is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Notacredito[] List of Notacredito objects
     * @throws PropelException
     */
    public function getNotacreditos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collNotacreditosPartial && !$this->isNew();
        if (null === $this->collNotacreditos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collNotacreditos) {
                // return empty collection
                $this->initNotacreditos();
            } else {
                $collNotacreditos = NotacreditoQuery::create(null, $criteria)
                    ->filterByAlmacen($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collNotacreditosPartial && count($collNotacreditos)) {
                      $this->initNotacreditos(false);

                      foreach ($collNotacreditos as $obj) {
                        if (false == $this->collNotacreditos->contains($obj)) {
                          $this->collNotacreditos->append($obj);
                        }
                      }

                      $this->collNotacreditosPartial = true;
                    }

                    $collNotacreditos->getInternalIterator()->rewind();

                    return $collNotacreditos;
                }

                if ($partial && $this->collNotacreditos) {
                    foreach ($this->collNotacreditos as $obj) {
                        if ($obj->isNew()) {
                            $collNotacreditos[] = $obj;
                        }
                    }
                }

                $this->collNotacreditos = $collNotacreditos;
                $this->collNotacreditosPartial = false;
            }
        }

        return $this->collNotacreditos;
    }

    /**
     * Sets a collection of Notacredito objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $notacreditos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Almacen The current object (for fluent API support)
     */
    public function setNotacreditos(PropelCollection $notacreditos, PropelPDO $con = null)
    {
        $notacreditosToDelete = $this->getNotacreditos(new Criteria(), $con)->diff($notacreditos);


        $this->notacreditosScheduledForDeletion = $notacreditosToDelete;

        foreach ($notacreditosToDelete as $notacreditoRemoved) {
            $notacreditoRemoved->setAlmacen(null);
        }

        $this->collNotacreditos = null;
        foreach ($notacreditos as $notacredito) {
            $this->addNotacredito($notacredito);
        }

        $this->collNotacreditos = $notacreditos;
        $this->collNotacreditosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Notacredito objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Notacredito objects.
     * @throws PropelException
     */
    public function countNotacreditos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collNotacreditosPartial && !$this->isNew();
        if (null === $this->collNotacreditos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collNotacreditos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getNotacreditos());
            }
            $query = NotacreditoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByAlmacen($this)
                ->count($con);
        }

        return count($this->collNotacreditos);
    }

    /**
     * Method called to associate a Notacredito object to this object
     * through the Notacredito foreign key attribute.
     *
     * @param    Notacredito $l Notacredito
     * @return Almacen The current object (for fluent API support)
     */
    public function addNotacredito(Notacredito $l)
    {
        if ($this->collNotacreditos === null) {
            $this->initNotacreditos();
            $this->collNotacreditosPartial = true;
        }

        if (!in_array($l, $this->collNotacreditos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddNotacredito($l);

            if ($this->notacreditosScheduledForDeletion and $this->notacreditosScheduledForDeletion->contains($l)) {
                $this->notacreditosScheduledForDeletion->remove($this->notacreditosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Notacredito $notacredito The notacredito object to add.
     */
    protected function doAddNotacredito($notacredito)
    {
        $this->collNotacreditos[]= $notacredito;
        $notacredito->setAlmacen($this);
    }

    /**
     * @param	Notacredito $notacredito The notacredito object to remove.
     * @return Almacen The current object (for fluent API support)
     */
    public function removeNotacredito($notacredito)
    {
        if ($this->getNotacreditos()->contains($notacredito)) {
            $this->collNotacreditos->remove($this->collNotacreditos->search($notacredito));
            if (null === $this->notacreditosScheduledForDeletion) {
                $this->notacreditosScheduledForDeletion = clone $this->collNotacreditos;
                $this->notacreditosScheduledForDeletion->clear();
            }
            $this->notacreditosScheduledForDeletion[]= clone $notacredito;
            $notacredito->setAlmacen(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related Notacreditos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Notacredito[] List of Notacredito objects
     */
    public function getNotacreditosJoinUsuarioRelatedByIdauditor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = NotacreditoQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdauditor', $join_behavior);

        return $this->getNotacreditos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related Notacreditos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Notacredito[] List of Notacredito objects
     */
    public function getNotacreditosJoinSucursal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = NotacreditoQuery::create(null, $criteria);
        $query->joinWith('Sucursal', $join_behavior);

        return $this->getNotacreditos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related Notacreditos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Notacredito[] List of Notacredito objects
     */
    public function getNotacreditosJoinUsuarioRelatedByIdusuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = NotacreditoQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdusuario', $join_behavior);

        return $this->getNotacreditos($query, $con);
    }

    /**
     * Clears out the collNotacreditodetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Almacen The current object (for fluent API support)
     * @see        addNotacreditodetalles()
     */
    public function clearNotacreditodetalles()
    {
        $this->collNotacreditodetalles = null; // important to set this to null since that means it is uninitialized
        $this->collNotacreditodetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collNotacreditodetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialNotacreditodetalles($v = true)
    {
        $this->collNotacreditodetallesPartial = $v;
    }

    /**
     * Initializes the collNotacreditodetalles collection.
     *
     * By default this just sets the collNotacreditodetalles collection to an empty array (like clearcollNotacreditodetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initNotacreditodetalles($overrideExisting = true)
    {
        if (null !== $this->collNotacreditodetalles && !$overrideExisting) {
            return;
        }
        $this->collNotacreditodetalles = new PropelObjectCollection();
        $this->collNotacreditodetalles->setModel('Notacreditodetalle');
    }

    /**
     * Gets an array of Notacreditodetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Almacen is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Notacreditodetalle[] List of Notacreditodetalle objects
     * @throws PropelException
     */
    public function getNotacreditodetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collNotacreditodetallesPartial && !$this->isNew();
        if (null === $this->collNotacreditodetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collNotacreditodetalles) {
                // return empty collection
                $this->initNotacreditodetalles();
            } else {
                $collNotacreditodetalles = NotacreditodetalleQuery::create(null, $criteria)
                    ->filterByAlmacen($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collNotacreditodetallesPartial && count($collNotacreditodetalles)) {
                      $this->initNotacreditodetalles(false);

                      foreach ($collNotacreditodetalles as $obj) {
                        if (false == $this->collNotacreditodetalles->contains($obj)) {
                          $this->collNotacreditodetalles->append($obj);
                        }
                      }

                      $this->collNotacreditodetallesPartial = true;
                    }

                    $collNotacreditodetalles->getInternalIterator()->rewind();

                    return $collNotacreditodetalles;
                }

                if ($partial && $this->collNotacreditodetalles) {
                    foreach ($this->collNotacreditodetalles as $obj) {
                        if ($obj->isNew()) {
                            $collNotacreditodetalles[] = $obj;
                        }
                    }
                }

                $this->collNotacreditodetalles = $collNotacreditodetalles;
                $this->collNotacreditodetallesPartial = false;
            }
        }

        return $this->collNotacreditodetalles;
    }

    /**
     * Sets a collection of Notacreditodetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $notacreditodetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Almacen The current object (for fluent API support)
     */
    public function setNotacreditodetalles(PropelCollection $notacreditodetalles, PropelPDO $con = null)
    {
        $notacreditodetallesToDelete = $this->getNotacreditodetalles(new Criteria(), $con)->diff($notacreditodetalles);


        $this->notacreditodetallesScheduledForDeletion = $notacreditodetallesToDelete;

        foreach ($notacreditodetallesToDelete as $notacreditodetalleRemoved) {
            $notacreditodetalleRemoved->setAlmacen(null);
        }

        $this->collNotacreditodetalles = null;
        foreach ($notacreditodetalles as $notacreditodetalle) {
            $this->addNotacreditodetalle($notacreditodetalle);
        }

        $this->collNotacreditodetalles = $notacreditodetalles;
        $this->collNotacreditodetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Notacreditodetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Notacreditodetalle objects.
     * @throws PropelException
     */
    public function countNotacreditodetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collNotacreditodetallesPartial && !$this->isNew();
        if (null === $this->collNotacreditodetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collNotacreditodetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getNotacreditodetalles());
            }
            $query = NotacreditodetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByAlmacen($this)
                ->count($con);
        }

        return count($this->collNotacreditodetalles);
    }

    /**
     * Method called to associate a Notacreditodetalle object to this object
     * through the Notacreditodetalle foreign key attribute.
     *
     * @param    Notacreditodetalle $l Notacreditodetalle
     * @return Almacen The current object (for fluent API support)
     */
    public function addNotacreditodetalle(Notacreditodetalle $l)
    {
        if ($this->collNotacreditodetalles === null) {
            $this->initNotacreditodetalles();
            $this->collNotacreditodetallesPartial = true;
        }

        if (!in_array($l, $this->collNotacreditodetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddNotacreditodetalle($l);

            if ($this->notacreditodetallesScheduledForDeletion and $this->notacreditodetallesScheduledForDeletion->contains($l)) {
                $this->notacreditodetallesScheduledForDeletion->remove($this->notacreditodetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Notacreditodetalle $notacreditodetalle The notacreditodetalle object to add.
     */
    protected function doAddNotacreditodetalle($notacreditodetalle)
    {
        $this->collNotacreditodetalles[]= $notacreditodetalle;
        $notacreditodetalle->setAlmacen($this);
    }

    /**
     * @param	Notacreditodetalle $notacreditodetalle The notacreditodetalle object to remove.
     * @return Almacen The current object (for fluent API support)
     */
    public function removeNotacreditodetalle($notacreditodetalle)
    {
        if ($this->getNotacreditodetalles()->contains($notacreditodetalle)) {
            $this->collNotacreditodetalles->remove($this->collNotacreditodetalles->search($notacreditodetalle));
            if (null === $this->notacreditodetallesScheduledForDeletion) {
                $this->notacreditodetallesScheduledForDeletion = clone $this->collNotacreditodetalles;
                $this->notacreditodetallesScheduledForDeletion->clear();
            }
            $this->notacreditodetallesScheduledForDeletion[]= clone $notacreditodetalle;
            $notacreditodetalle->setAlmacen(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related Notacreditodetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Notacreditodetalle[] List of Notacreditodetalle objects
     */
    public function getNotacreditodetallesJoinNotacredito($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = NotacreditodetalleQuery::create(null, $criteria);
        $query->joinWith('Notacredito', $join_behavior);

        return $this->getNotacreditodetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related Notacreditodetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Notacreditodetalle[] List of Notacreditodetalle objects
     */
    public function getNotacreditodetallesJoinProducto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = NotacreditodetalleQuery::create(null, $criteria);
        $query->joinWith('Producto', $join_behavior);

        return $this->getNotacreditodetalles($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idalmacen = null;
        $this->idsucursal = null;
        $this->almacen_nombre = null;
        $this->almacen_encargado = null;
        $this->almacen_estatus = null;
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
            if ($this->collCompradetalles) {
                foreach ($this->collCompradetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collDevolucions) {
                foreach ($this->collDevolucions as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collDevoluciondetalles) {
                foreach ($this->collDevoluciondetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collNotacreditos) {
                foreach ($this->collNotacreditos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collNotacreditodetalles) {
                foreach ($this->collNotacreditodetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aSucursal instanceof Persistent) {
              $this->aSucursal->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCompradetalles instanceof PropelCollection) {
            $this->collCompradetalles->clearIterator();
        }
        $this->collCompradetalles = null;
        if ($this->collDevolucions instanceof PropelCollection) {
            $this->collDevolucions->clearIterator();
        }
        $this->collDevolucions = null;
        if ($this->collDevoluciondetalles instanceof PropelCollection) {
            $this->collDevoluciondetalles->clearIterator();
        }
        $this->collDevoluciondetalles = null;
        if ($this->collNotacreditos instanceof PropelCollection) {
            $this->collNotacreditos->clearIterator();
        }
        $this->collNotacreditos = null;
        if ($this->collNotacreditodetalles instanceof PropelCollection) {
            $this->collNotacreditodetalles->clearIterator();
        }
        $this->collNotacreditodetalles = null;
        $this->aSucursal = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(AlmacenPeer::DEFAULT_STRING_FORMAT);
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
