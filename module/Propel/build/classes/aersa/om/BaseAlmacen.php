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
     * @var        PropelObjectCollection|Compra[] Collection to store aggregation of Compra objects.
     */
    protected $collCompras;
    protected $collComprasPartial;

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
     * @var        PropelObjectCollection|Inventariomes[] Collection to store aggregation of Inventariomes objects.
     */
    protected $collInventariomess;
    protected $collInventariomessPartial;

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
     * @var        PropelObjectCollection|Ordentablajeria[] Collection to store aggregation of Ordentablajeria objects.
     */
    protected $collOrdentablajeriasRelatedByIdalmacendestino;
    protected $collOrdentablajeriasRelatedByIdalmacendestinoPartial;

    /**
     * @var        PropelObjectCollection|Ordentablajeria[] Collection to store aggregation of Ordentablajeria objects.
     */
    protected $collOrdentablajeriasRelatedByIdalmacenorigen;
    protected $collOrdentablajeriasRelatedByIdalmacenorigenPartial;

    /**
     * @var        PropelObjectCollection|Productosucursalalmacen[] Collection to store aggregation of Productosucursalalmacen objects.
     */
    protected $collProductosucursalalmacens;
    protected $collProductosucursalalmacensPartial;

    /**
     * @var        PropelObjectCollection|Requisicion[] Collection to store aggregation of Requisicion objects.
     */
    protected $collRequisicionsRelatedByIdalmacendestino;
    protected $collRequisicionsRelatedByIdalmacendestinoPartial;

    /**
     * @var        PropelObjectCollection|Requisicion[] Collection to store aggregation of Requisicion objects.
     */
    protected $collRequisicionsRelatedByIdalmacenorigen;
    protected $collRequisicionsRelatedByIdalmacenorigenPartial;

    /**
     * @var        PropelObjectCollection|Ventadetalle[] Collection to store aggregation of Ventadetalle objects.
     */
    protected $collVentadetalles;
    protected $collVentadetallesPartial;

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
    protected $comprasScheduledForDeletion = null;

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
    protected $inventariomessScheduledForDeletion = null;

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
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ordentablajeriasRelatedByIdalmacendestinoScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ordentablajeriasRelatedByIdalmacenorigenScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $productosucursalalmacensScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $requisicionsRelatedByIdalmacendestinoScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $requisicionsRelatedByIdalmacenorigenScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ventadetallesScheduledForDeletion = null;

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
            $this->collCompras = null;

            $this->collCompradetalles = null;

            $this->collDevolucions = null;

            $this->collDevoluciondetalles = null;

            $this->collInventariomess = null;

            $this->collNotacreditos = null;

            $this->collNotacreditodetalles = null;

            $this->collOrdentablajeriasRelatedByIdalmacendestino = null;

            $this->collOrdentablajeriasRelatedByIdalmacenorigen = null;

            $this->collProductosucursalalmacens = null;

            $this->collRequisicionsRelatedByIdalmacendestino = null;

            $this->collRequisicionsRelatedByIdalmacenorigen = null;

            $this->collVentadetalles = null;

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

            if ($this->comprasScheduledForDeletion !== null) {
                if (!$this->comprasScheduledForDeletion->isEmpty()) {
                    CompraQuery::create()
                        ->filterByPrimaryKeys($this->comprasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->comprasScheduledForDeletion = null;
                }
            }

            if ($this->collCompras !== null) {
                foreach ($this->collCompras as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

            if ($this->inventariomessScheduledForDeletion !== null) {
                if (!$this->inventariomessScheduledForDeletion->isEmpty()) {
                    InventariomesQuery::create()
                        ->filterByPrimaryKeys($this->inventariomessScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->inventariomessScheduledForDeletion = null;
                }
            }

            if ($this->collInventariomess !== null) {
                foreach ($this->collInventariomess as $referrerFK) {
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

            if ($this->ordentablajeriasRelatedByIdalmacendestinoScheduledForDeletion !== null) {
                if (!$this->ordentablajeriasRelatedByIdalmacendestinoScheduledForDeletion->isEmpty()) {
                    OrdentablajeriaQuery::create()
                        ->filterByPrimaryKeys($this->ordentablajeriasRelatedByIdalmacendestinoScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->ordentablajeriasRelatedByIdalmacendestinoScheduledForDeletion = null;
                }
            }

            if ($this->collOrdentablajeriasRelatedByIdalmacendestino !== null) {
                foreach ($this->collOrdentablajeriasRelatedByIdalmacendestino as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ordentablajeriasRelatedByIdalmacenorigenScheduledForDeletion !== null) {
                if (!$this->ordentablajeriasRelatedByIdalmacenorigenScheduledForDeletion->isEmpty()) {
                    OrdentablajeriaQuery::create()
                        ->filterByPrimaryKeys($this->ordentablajeriasRelatedByIdalmacenorigenScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->ordentablajeriasRelatedByIdalmacenorigenScheduledForDeletion = null;
                }
            }

            if ($this->collOrdentablajeriasRelatedByIdalmacenorigen !== null) {
                foreach ($this->collOrdentablajeriasRelatedByIdalmacenorigen as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->productosucursalalmacensScheduledForDeletion !== null) {
                if (!$this->productosucursalalmacensScheduledForDeletion->isEmpty()) {
                    ProductosucursalalmacenQuery::create()
                        ->filterByPrimaryKeys($this->productosucursalalmacensScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->productosucursalalmacensScheduledForDeletion = null;
                }
            }

            if ($this->collProductosucursalalmacens !== null) {
                foreach ($this->collProductosucursalalmacens as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->requisicionsRelatedByIdalmacendestinoScheduledForDeletion !== null) {
                if (!$this->requisicionsRelatedByIdalmacendestinoScheduledForDeletion->isEmpty()) {
                    RequisicionQuery::create()
                        ->filterByPrimaryKeys($this->requisicionsRelatedByIdalmacendestinoScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->requisicionsRelatedByIdalmacendestinoScheduledForDeletion = null;
                }
            }

            if ($this->collRequisicionsRelatedByIdalmacendestino !== null) {
                foreach ($this->collRequisicionsRelatedByIdalmacendestino as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->requisicionsRelatedByIdalmacenorigenScheduledForDeletion !== null) {
                if (!$this->requisicionsRelatedByIdalmacenorigenScheduledForDeletion->isEmpty()) {
                    RequisicionQuery::create()
                        ->filterByPrimaryKeys($this->requisicionsRelatedByIdalmacenorigenScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->requisicionsRelatedByIdalmacenorigenScheduledForDeletion = null;
                }
            }

            if ($this->collRequisicionsRelatedByIdalmacenorigen !== null) {
                foreach ($this->collRequisicionsRelatedByIdalmacenorigen as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ventadetallesScheduledForDeletion !== null) {
                if (!$this->ventadetallesScheduledForDeletion->isEmpty()) {
                    VentadetalleQuery::create()
                        ->filterByPrimaryKeys($this->ventadetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->ventadetallesScheduledForDeletion = null;
                }
            }

            if ($this->collVentadetalles !== null) {
                foreach ($this->collVentadetalles as $referrerFK) {
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


                if ($this->collCompras !== null) {
                    foreach ($this->collCompras as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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

                if ($this->collInventariomess !== null) {
                    foreach ($this->collInventariomess as $referrerFK) {
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

                if ($this->collOrdentablajeriasRelatedByIdalmacendestino !== null) {
                    foreach ($this->collOrdentablajeriasRelatedByIdalmacendestino as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collOrdentablajeriasRelatedByIdalmacenorigen !== null) {
                    foreach ($this->collOrdentablajeriasRelatedByIdalmacenorigen as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collProductosucursalalmacens !== null) {
                    foreach ($this->collProductosucursalalmacens as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collRequisicionsRelatedByIdalmacendestino !== null) {
                    foreach ($this->collRequisicionsRelatedByIdalmacendestino as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collRequisicionsRelatedByIdalmacenorigen !== null) {
                    foreach ($this->collRequisicionsRelatedByIdalmacenorigen as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collVentadetalles !== null) {
                    foreach ($this->collVentadetalles as $referrerFK) {
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
            if (null !== $this->collCompras) {
                $result['Compras'] = $this->collCompras->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
            if (null !== $this->collInventariomess) {
                $result['Inventariomess'] = $this->collInventariomess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collNotacreditos) {
                $result['Notacreditos'] = $this->collNotacreditos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collNotacreditodetalles) {
                $result['Notacreditodetalles'] = $this->collNotacreditodetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collOrdentablajeriasRelatedByIdalmacendestino) {
                $result['OrdentablajeriasRelatedByIdalmacendestino'] = $this->collOrdentablajeriasRelatedByIdalmacendestino->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collOrdentablajeriasRelatedByIdalmacenorigen) {
                $result['OrdentablajeriasRelatedByIdalmacenorigen'] = $this->collOrdentablajeriasRelatedByIdalmacenorigen->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collProductosucursalalmacens) {
                $result['Productosucursalalmacens'] = $this->collProductosucursalalmacens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collRequisicionsRelatedByIdalmacendestino) {
                $result['RequisicionsRelatedByIdalmacendestino'] = $this->collRequisicionsRelatedByIdalmacendestino->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collRequisicionsRelatedByIdalmacenorigen) {
                $result['RequisicionsRelatedByIdalmacenorigen'] = $this->collRequisicionsRelatedByIdalmacenorigen->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collVentadetalles) {
                $result['Ventadetalles'] = $this->collVentadetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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

            foreach ($this->getCompras() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCompra($relObj->copy($deepCopy));
                }
            }

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

            foreach ($this->getInventariomess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInventariomes($relObj->copy($deepCopy));
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

            foreach ($this->getOrdentablajeriasRelatedByIdalmacendestino() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOrdentablajeriaRelatedByIdalmacendestino($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getOrdentablajeriasRelatedByIdalmacenorigen() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOrdentablajeriaRelatedByIdalmacenorigen($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getProductosucursalalmacens() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addProductosucursalalmacen($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getRequisicionsRelatedByIdalmacendestino() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addRequisicionRelatedByIdalmacendestino($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getRequisicionsRelatedByIdalmacenorigen() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addRequisicionRelatedByIdalmacenorigen($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getVentadetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addVentadetalle($relObj->copy($deepCopy));
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
        if ('Compra' == $relationName) {
            $this->initCompras();
        }
        if ('Compradetalle' == $relationName) {
            $this->initCompradetalles();
        }
        if ('Devolucion' == $relationName) {
            $this->initDevolucions();
        }
        if ('Devoluciondetalle' == $relationName) {
            $this->initDevoluciondetalles();
        }
        if ('Inventariomes' == $relationName) {
            $this->initInventariomess();
        }
        if ('Notacredito' == $relationName) {
            $this->initNotacreditos();
        }
        if ('Notacreditodetalle' == $relationName) {
            $this->initNotacreditodetalles();
        }
        if ('OrdentablajeriaRelatedByIdalmacendestino' == $relationName) {
            $this->initOrdentablajeriasRelatedByIdalmacendestino();
        }
        if ('OrdentablajeriaRelatedByIdalmacenorigen' == $relationName) {
            $this->initOrdentablajeriasRelatedByIdalmacenorigen();
        }
        if ('Productosucursalalmacen' == $relationName) {
            $this->initProductosucursalalmacens();
        }
        if ('RequisicionRelatedByIdalmacendestino' == $relationName) {
            $this->initRequisicionsRelatedByIdalmacendestino();
        }
        if ('RequisicionRelatedByIdalmacenorigen' == $relationName) {
            $this->initRequisicionsRelatedByIdalmacenorigen();
        }
        if ('Ventadetalle' == $relationName) {
            $this->initVentadetalles();
        }
    }

    /**
     * Clears out the collCompras collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Almacen The current object (for fluent API support)
     * @see        addCompras()
     */
    public function clearCompras()
    {
        $this->collCompras = null; // important to set this to null since that means it is uninitialized
        $this->collComprasPartial = null;

        return $this;
    }

    /**
     * reset is the collCompras collection loaded partially
     *
     * @return void
     */
    public function resetPartialCompras($v = true)
    {
        $this->collComprasPartial = $v;
    }

    /**
     * Initializes the collCompras collection.
     *
     * By default this just sets the collCompras collection to an empty array (like clearcollCompras());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCompras($overrideExisting = true)
    {
        if (null !== $this->collCompras && !$overrideExisting) {
            return;
        }
        $this->collCompras = new PropelObjectCollection();
        $this->collCompras->setModel('Compra');
    }

    /**
     * Gets an array of Compra objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Almacen is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Compra[] List of Compra objects
     * @throws PropelException
     */
    public function getCompras($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collComprasPartial && !$this->isNew();
        if (null === $this->collCompras || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCompras) {
                // return empty collection
                $this->initCompras();
            } else {
                $collCompras = CompraQuery::create(null, $criteria)
                    ->filterByAlmacen($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collComprasPartial && count($collCompras)) {
                      $this->initCompras(false);

                      foreach ($collCompras as $obj) {
                        if (false == $this->collCompras->contains($obj)) {
                          $this->collCompras->append($obj);
                        }
                      }

                      $this->collComprasPartial = true;
                    }

                    $collCompras->getInternalIterator()->rewind();

                    return $collCompras;
                }

                if ($partial && $this->collCompras) {
                    foreach ($this->collCompras as $obj) {
                        if ($obj->isNew()) {
                            $collCompras[] = $obj;
                        }
                    }
                }

                $this->collCompras = $collCompras;
                $this->collComprasPartial = false;
            }
        }

        return $this->collCompras;
    }

    /**
     * Sets a collection of Compra objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $compras A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Almacen The current object (for fluent API support)
     */
    public function setCompras(PropelCollection $compras, PropelPDO $con = null)
    {
        $comprasToDelete = $this->getCompras(new Criteria(), $con)->diff($compras);


        $this->comprasScheduledForDeletion = $comprasToDelete;

        foreach ($comprasToDelete as $compraRemoved) {
            $compraRemoved->setAlmacen(null);
        }

        $this->collCompras = null;
        foreach ($compras as $compra) {
            $this->addCompra($compra);
        }

        $this->collCompras = $compras;
        $this->collComprasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Compra objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Compra objects.
     * @throws PropelException
     */
    public function countCompras(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collComprasPartial && !$this->isNew();
        if (null === $this->collCompras || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCompras) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCompras());
            }
            $query = CompraQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByAlmacen($this)
                ->count($con);
        }

        return count($this->collCompras);
    }

    /**
     * Method called to associate a Compra object to this object
     * through the Compra foreign key attribute.
     *
     * @param    Compra $l Compra
     * @return Almacen The current object (for fluent API support)
     */
    public function addCompra(Compra $l)
    {
        if ($this->collCompras === null) {
            $this->initCompras();
            $this->collComprasPartial = true;
        }

        if (!in_array($l, $this->collCompras->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCompra($l);

            if ($this->comprasScheduledForDeletion and $this->comprasScheduledForDeletion->contains($l)) {
                $this->comprasScheduledForDeletion->remove($this->comprasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Compra $compra The compra object to add.
     */
    protected function doAddCompra($compra)
    {
        $this->collCompras[]= $compra;
        $compra->setAlmacen($this);
    }

    /**
     * @param	Compra $compra The compra object to remove.
     * @return Almacen The current object (for fluent API support)
     */
    public function removeCompra($compra)
    {
        if ($this->getCompras()->contains($compra)) {
            $this->collCompras->remove($this->collCompras->search($compra));
            if (null === $this->comprasScheduledForDeletion) {
                $this->comprasScheduledForDeletion = clone $this->collCompras;
                $this->comprasScheduledForDeletion->clear();
            }
            $this->comprasScheduledForDeletion[]= $compra;
            $compra->setAlmacen(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related Compras from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Compra[] List of Compra objects
     */
    public function getComprasJoinUsuarioRelatedByIdauditor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CompraQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdauditor', $join_behavior);

        return $this->getCompras($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related Compras from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Compra[] List of Compra objects
     */
    public function getComprasJoinEmpresa($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CompraQuery::create(null, $criteria);
        $query->joinWith('Empresa', $join_behavior);

        return $this->getCompras($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related Compras from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Compra[] List of Compra objects
     */
    public function getComprasJoinProveedor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CompraQuery::create(null, $criteria);
        $query->joinWith('Proveedor', $join_behavior);

        return $this->getCompras($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related Compras from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Compra[] List of Compra objects
     */
    public function getComprasJoinSucursal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CompraQuery::create(null, $criteria);
        $query->joinWith('Sucursal', $join_behavior);

        return $this->getCompras($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related Compras from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Compra[] List of Compra objects
     */
    public function getComprasJoinUsuarioRelatedByIdusuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CompraQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdusuario', $join_behavior);

        return $this->getCompras($query, $con);
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
            $this->compradetallesScheduledForDeletion[]= $compradetalle;
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
    public function getDevolucionsJoinEmpresa($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = DevolucionQuery::create(null, $criteria);
        $query->joinWith('Empresa', $join_behavior);

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
    public function getDevolucionsJoinProveedor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = DevolucionQuery::create(null, $criteria);
        $query->joinWith('Proveedor', $join_behavior);

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
     * Clears out the collInventariomess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Almacen The current object (for fluent API support)
     * @see        addInventariomess()
     */
    public function clearInventariomess()
    {
        $this->collInventariomess = null; // important to set this to null since that means it is uninitialized
        $this->collInventariomessPartial = null;

        return $this;
    }

    /**
     * reset is the collInventariomess collection loaded partially
     *
     * @return void
     */
    public function resetPartialInventariomess($v = true)
    {
        $this->collInventariomessPartial = $v;
    }

    /**
     * Initializes the collInventariomess collection.
     *
     * By default this just sets the collInventariomess collection to an empty array (like clearcollInventariomess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInventariomess($overrideExisting = true)
    {
        if (null !== $this->collInventariomess && !$overrideExisting) {
            return;
        }
        $this->collInventariomess = new PropelObjectCollection();
        $this->collInventariomess->setModel('Inventariomes');
    }

    /**
     * Gets an array of Inventariomes objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Almacen is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Inventariomes[] List of Inventariomes objects
     * @throws PropelException
     */
    public function getInventariomess($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collInventariomessPartial && !$this->isNew();
        if (null === $this->collInventariomess || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInventariomess) {
                // return empty collection
                $this->initInventariomess();
            } else {
                $collInventariomess = InventariomesQuery::create(null, $criteria)
                    ->filterByAlmacen($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collInventariomessPartial && count($collInventariomess)) {
                      $this->initInventariomess(false);

                      foreach ($collInventariomess as $obj) {
                        if (false == $this->collInventariomess->contains($obj)) {
                          $this->collInventariomess->append($obj);
                        }
                      }

                      $this->collInventariomessPartial = true;
                    }

                    $collInventariomess->getInternalIterator()->rewind();

                    return $collInventariomess;
                }

                if ($partial && $this->collInventariomess) {
                    foreach ($this->collInventariomess as $obj) {
                        if ($obj->isNew()) {
                            $collInventariomess[] = $obj;
                        }
                    }
                }

                $this->collInventariomess = $collInventariomess;
                $this->collInventariomessPartial = false;
            }
        }

        return $this->collInventariomess;
    }

    /**
     * Sets a collection of Inventariomes objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $inventariomess A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Almacen The current object (for fluent API support)
     */
    public function setInventariomess(PropelCollection $inventariomess, PropelPDO $con = null)
    {
        $inventariomessToDelete = $this->getInventariomess(new Criteria(), $con)->diff($inventariomess);


        $this->inventariomessScheduledForDeletion = $inventariomessToDelete;

        foreach ($inventariomessToDelete as $inventariomesRemoved) {
            $inventariomesRemoved->setAlmacen(null);
        }

        $this->collInventariomess = null;
        foreach ($inventariomess as $inventariomes) {
            $this->addInventariomes($inventariomes);
        }

        $this->collInventariomess = $inventariomess;
        $this->collInventariomessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Inventariomes objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Inventariomes objects.
     * @throws PropelException
     */
    public function countInventariomess(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collInventariomessPartial && !$this->isNew();
        if (null === $this->collInventariomess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInventariomess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInventariomess());
            }
            $query = InventariomesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByAlmacen($this)
                ->count($con);
        }

        return count($this->collInventariomess);
    }

    /**
     * Method called to associate a Inventariomes object to this object
     * through the Inventariomes foreign key attribute.
     *
     * @param    Inventariomes $l Inventariomes
     * @return Almacen The current object (for fluent API support)
     */
    public function addInventariomes(Inventariomes $l)
    {
        if ($this->collInventariomess === null) {
            $this->initInventariomess();
            $this->collInventariomessPartial = true;
        }

        if (!in_array($l, $this->collInventariomess->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddInventariomes($l);

            if ($this->inventariomessScheduledForDeletion and $this->inventariomessScheduledForDeletion->contains($l)) {
                $this->inventariomessScheduledForDeletion->remove($this->inventariomessScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Inventariomes $inventariomes The inventariomes object to add.
     */
    protected function doAddInventariomes($inventariomes)
    {
        $this->collInventariomess[]= $inventariomes;
        $inventariomes->setAlmacen($this);
    }

    /**
     * @param	Inventariomes $inventariomes The inventariomes object to remove.
     * @return Almacen The current object (for fluent API support)
     */
    public function removeInventariomes($inventariomes)
    {
        if ($this->getInventariomess()->contains($inventariomes)) {
            $this->collInventariomess->remove($this->collInventariomess->search($inventariomes));
            if (null === $this->inventariomessScheduledForDeletion) {
                $this->inventariomessScheduledForDeletion = clone $this->collInventariomess;
                $this->inventariomessScheduledForDeletion->clear();
            }
            $this->inventariomessScheduledForDeletion[]= clone $inventariomes;
            $inventariomes->setAlmacen(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related Inventariomess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Inventariomes[] List of Inventariomes objects
     */
    public function getInventariomessJoinUsuarioRelatedByIdauditor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = InventariomesQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdauditor', $join_behavior);

        return $this->getInventariomess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related Inventariomess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Inventariomes[] List of Inventariomes objects
     */
    public function getInventariomessJoinEmpresa($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = InventariomesQuery::create(null, $criteria);
        $query->joinWith('Empresa', $join_behavior);

        return $this->getInventariomess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related Inventariomess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Inventariomes[] List of Inventariomes objects
     */
    public function getInventariomessJoinSucursal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = InventariomesQuery::create(null, $criteria);
        $query->joinWith('Sucursal', $join_behavior);

        return $this->getInventariomess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related Inventariomess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Inventariomes[] List of Inventariomes objects
     */
    public function getInventariomessJoinUsuarioRelatedByIdusuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = InventariomesQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdusuario', $join_behavior);

        return $this->getInventariomess($query, $con);
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
    public function getNotacreditosJoinEmpresa($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = NotacreditoQuery::create(null, $criteria);
        $query->joinWith('Empresa', $join_behavior);

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
    public function getNotacreditosJoinProveedor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = NotacreditoQuery::create(null, $criteria);
        $query->joinWith('Proveedor', $join_behavior);

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
     * Clears out the collOrdentablajeriasRelatedByIdalmacendestino collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Almacen The current object (for fluent API support)
     * @see        addOrdentablajeriasRelatedByIdalmacendestino()
     */
    public function clearOrdentablajeriasRelatedByIdalmacendestino()
    {
        $this->collOrdentablajeriasRelatedByIdalmacendestino = null; // important to set this to null since that means it is uninitialized
        $this->collOrdentablajeriasRelatedByIdalmacendestinoPartial = null;

        return $this;
    }

    /**
     * reset is the collOrdentablajeriasRelatedByIdalmacendestino collection loaded partially
     *
     * @return void
     */
    public function resetPartialOrdentablajeriasRelatedByIdalmacendestino($v = true)
    {
        $this->collOrdentablajeriasRelatedByIdalmacendestinoPartial = $v;
    }

    /**
     * Initializes the collOrdentablajeriasRelatedByIdalmacendestino collection.
     *
     * By default this just sets the collOrdentablajeriasRelatedByIdalmacendestino collection to an empty array (like clearcollOrdentablajeriasRelatedByIdalmacendestino());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOrdentablajeriasRelatedByIdalmacendestino($overrideExisting = true)
    {
        if (null !== $this->collOrdentablajeriasRelatedByIdalmacendestino && !$overrideExisting) {
            return;
        }
        $this->collOrdentablajeriasRelatedByIdalmacendestino = new PropelObjectCollection();
        $this->collOrdentablajeriasRelatedByIdalmacendestino->setModel('Ordentablajeria');
    }

    /**
     * Gets an array of Ordentablajeria objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Almacen is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Ordentablajeria[] List of Ordentablajeria objects
     * @throws PropelException
     */
    public function getOrdentablajeriasRelatedByIdalmacendestino($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOrdentablajeriasRelatedByIdalmacendestinoPartial && !$this->isNew();
        if (null === $this->collOrdentablajeriasRelatedByIdalmacendestino || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOrdentablajeriasRelatedByIdalmacendestino) {
                // return empty collection
                $this->initOrdentablajeriasRelatedByIdalmacendestino();
            } else {
                $collOrdentablajeriasRelatedByIdalmacendestino = OrdentablajeriaQuery::create(null, $criteria)
                    ->filterByAlmacenRelatedByIdalmacendestino($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOrdentablajeriasRelatedByIdalmacendestinoPartial && count($collOrdentablajeriasRelatedByIdalmacendestino)) {
                      $this->initOrdentablajeriasRelatedByIdalmacendestino(false);

                      foreach ($collOrdentablajeriasRelatedByIdalmacendestino as $obj) {
                        if (false == $this->collOrdentablajeriasRelatedByIdalmacendestino->contains($obj)) {
                          $this->collOrdentablajeriasRelatedByIdalmacendestino->append($obj);
                        }
                      }

                      $this->collOrdentablajeriasRelatedByIdalmacendestinoPartial = true;
                    }

                    $collOrdentablajeriasRelatedByIdalmacendestino->getInternalIterator()->rewind();

                    return $collOrdentablajeriasRelatedByIdalmacendestino;
                }

                if ($partial && $this->collOrdentablajeriasRelatedByIdalmacendestino) {
                    foreach ($this->collOrdentablajeriasRelatedByIdalmacendestino as $obj) {
                        if ($obj->isNew()) {
                            $collOrdentablajeriasRelatedByIdalmacendestino[] = $obj;
                        }
                    }
                }

                $this->collOrdentablajeriasRelatedByIdalmacendestino = $collOrdentablajeriasRelatedByIdalmacendestino;
                $this->collOrdentablajeriasRelatedByIdalmacendestinoPartial = false;
            }
        }

        return $this->collOrdentablajeriasRelatedByIdalmacendestino;
    }

    /**
     * Sets a collection of OrdentablajeriaRelatedByIdalmacendestino objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ordentablajeriasRelatedByIdalmacendestino A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Almacen The current object (for fluent API support)
     */
    public function setOrdentablajeriasRelatedByIdalmacendestino(PropelCollection $ordentablajeriasRelatedByIdalmacendestino, PropelPDO $con = null)
    {
        $ordentablajeriasRelatedByIdalmacendestinoToDelete = $this->getOrdentablajeriasRelatedByIdalmacendestino(new Criteria(), $con)->diff($ordentablajeriasRelatedByIdalmacendestino);


        $this->ordentablajeriasRelatedByIdalmacendestinoScheduledForDeletion = $ordentablajeriasRelatedByIdalmacendestinoToDelete;

        foreach ($ordentablajeriasRelatedByIdalmacendestinoToDelete as $ordentablajeriaRelatedByIdalmacendestinoRemoved) {
            $ordentablajeriaRelatedByIdalmacendestinoRemoved->setAlmacenRelatedByIdalmacendestino(null);
        }

        $this->collOrdentablajeriasRelatedByIdalmacendestino = null;
        foreach ($ordentablajeriasRelatedByIdalmacendestino as $ordentablajeriaRelatedByIdalmacendestino) {
            $this->addOrdentablajeriaRelatedByIdalmacendestino($ordentablajeriaRelatedByIdalmacendestino);
        }

        $this->collOrdentablajeriasRelatedByIdalmacendestino = $ordentablajeriasRelatedByIdalmacendestino;
        $this->collOrdentablajeriasRelatedByIdalmacendestinoPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Ordentablajeria objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Ordentablajeria objects.
     * @throws PropelException
     */
    public function countOrdentablajeriasRelatedByIdalmacendestino(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOrdentablajeriasRelatedByIdalmacendestinoPartial && !$this->isNew();
        if (null === $this->collOrdentablajeriasRelatedByIdalmacendestino || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOrdentablajeriasRelatedByIdalmacendestino) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOrdentablajeriasRelatedByIdalmacendestino());
            }
            $query = OrdentablajeriaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByAlmacenRelatedByIdalmacendestino($this)
                ->count($con);
        }

        return count($this->collOrdentablajeriasRelatedByIdalmacendestino);
    }

    /**
     * Method called to associate a Ordentablajeria object to this object
     * through the Ordentablajeria foreign key attribute.
     *
     * @param    Ordentablajeria $l Ordentablajeria
     * @return Almacen The current object (for fluent API support)
     */
    public function addOrdentablajeriaRelatedByIdalmacendestino(Ordentablajeria $l)
    {
        if ($this->collOrdentablajeriasRelatedByIdalmacendestino === null) {
            $this->initOrdentablajeriasRelatedByIdalmacendestino();
            $this->collOrdentablajeriasRelatedByIdalmacendestinoPartial = true;
        }

        if (!in_array($l, $this->collOrdentablajeriasRelatedByIdalmacendestino->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOrdentablajeriaRelatedByIdalmacendestino($l);

            if ($this->ordentablajeriasRelatedByIdalmacendestinoScheduledForDeletion and $this->ordentablajeriasRelatedByIdalmacendestinoScheduledForDeletion->contains($l)) {
                $this->ordentablajeriasRelatedByIdalmacendestinoScheduledForDeletion->remove($this->ordentablajeriasRelatedByIdalmacendestinoScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	OrdentablajeriaRelatedByIdalmacendestino $ordentablajeriaRelatedByIdalmacendestino The ordentablajeriaRelatedByIdalmacendestino object to add.
     */
    protected function doAddOrdentablajeriaRelatedByIdalmacendestino($ordentablajeriaRelatedByIdalmacendestino)
    {
        $this->collOrdentablajeriasRelatedByIdalmacendestino[]= $ordentablajeriaRelatedByIdalmacendestino;
        $ordentablajeriaRelatedByIdalmacendestino->setAlmacenRelatedByIdalmacendestino($this);
    }

    /**
     * @param	OrdentablajeriaRelatedByIdalmacendestino $ordentablajeriaRelatedByIdalmacendestino The ordentablajeriaRelatedByIdalmacendestino object to remove.
     * @return Almacen The current object (for fluent API support)
     */
    public function removeOrdentablajeriaRelatedByIdalmacendestino($ordentablajeriaRelatedByIdalmacendestino)
    {
        if ($this->getOrdentablajeriasRelatedByIdalmacendestino()->contains($ordentablajeriaRelatedByIdalmacendestino)) {
            $this->collOrdentablajeriasRelatedByIdalmacendestino->remove($this->collOrdentablajeriasRelatedByIdalmacendestino->search($ordentablajeriaRelatedByIdalmacendestino));
            if (null === $this->ordentablajeriasRelatedByIdalmacendestinoScheduledForDeletion) {
                $this->ordentablajeriasRelatedByIdalmacendestinoScheduledForDeletion = clone $this->collOrdentablajeriasRelatedByIdalmacendestino;
                $this->ordentablajeriasRelatedByIdalmacendestinoScheduledForDeletion->clear();
            }
            $this->ordentablajeriasRelatedByIdalmacendestinoScheduledForDeletion[]= clone $ordentablajeriaRelatedByIdalmacendestino;
            $ordentablajeriaRelatedByIdalmacendestino->setAlmacenRelatedByIdalmacendestino(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related OrdentablajeriasRelatedByIdalmacendestino from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ordentablajeria[] List of Ordentablajeria objects
     */
    public function getOrdentablajeriasRelatedByIdalmacendestinoJoinUsuarioRelatedByIdauditor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OrdentablajeriaQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdauditor', $join_behavior);

        return $this->getOrdentablajeriasRelatedByIdalmacendestino($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related OrdentablajeriasRelatedByIdalmacendestino from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ordentablajeria[] List of Ordentablajeria objects
     */
    public function getOrdentablajeriasRelatedByIdalmacendestinoJoinEmpresa($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OrdentablajeriaQuery::create(null, $criteria);
        $query->joinWith('Empresa', $join_behavior);

        return $this->getOrdentablajeriasRelatedByIdalmacendestino($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related OrdentablajeriasRelatedByIdalmacendestino from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ordentablajeria[] List of Ordentablajeria objects
     */
    public function getOrdentablajeriasRelatedByIdalmacendestinoJoinProducto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OrdentablajeriaQuery::create(null, $criteria);
        $query->joinWith('Producto', $join_behavior);

        return $this->getOrdentablajeriasRelatedByIdalmacendestino($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related OrdentablajeriasRelatedByIdalmacendestino from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ordentablajeria[] List of Ordentablajeria objects
     */
    public function getOrdentablajeriasRelatedByIdalmacendestinoJoinSucursal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OrdentablajeriaQuery::create(null, $criteria);
        $query->joinWith('Sucursal', $join_behavior);

        return $this->getOrdentablajeriasRelatedByIdalmacendestino($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related OrdentablajeriasRelatedByIdalmacendestino from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ordentablajeria[] List of Ordentablajeria objects
     */
    public function getOrdentablajeriasRelatedByIdalmacendestinoJoinUsuarioRelatedByIdusuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OrdentablajeriaQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdusuario', $join_behavior);

        return $this->getOrdentablajeriasRelatedByIdalmacendestino($query, $con);
    }

    /**
     * Clears out the collOrdentablajeriasRelatedByIdalmacenorigen collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Almacen The current object (for fluent API support)
     * @see        addOrdentablajeriasRelatedByIdalmacenorigen()
     */
    public function clearOrdentablajeriasRelatedByIdalmacenorigen()
    {
        $this->collOrdentablajeriasRelatedByIdalmacenorigen = null; // important to set this to null since that means it is uninitialized
        $this->collOrdentablajeriasRelatedByIdalmacenorigenPartial = null;

        return $this;
    }

    /**
     * reset is the collOrdentablajeriasRelatedByIdalmacenorigen collection loaded partially
     *
     * @return void
     */
    public function resetPartialOrdentablajeriasRelatedByIdalmacenorigen($v = true)
    {
        $this->collOrdentablajeriasRelatedByIdalmacenorigenPartial = $v;
    }

    /**
     * Initializes the collOrdentablajeriasRelatedByIdalmacenorigen collection.
     *
     * By default this just sets the collOrdentablajeriasRelatedByIdalmacenorigen collection to an empty array (like clearcollOrdentablajeriasRelatedByIdalmacenorigen());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOrdentablajeriasRelatedByIdalmacenorigen($overrideExisting = true)
    {
        if (null !== $this->collOrdentablajeriasRelatedByIdalmacenorigen && !$overrideExisting) {
            return;
        }
        $this->collOrdentablajeriasRelatedByIdalmacenorigen = new PropelObjectCollection();
        $this->collOrdentablajeriasRelatedByIdalmacenorigen->setModel('Ordentablajeria');
    }

    /**
     * Gets an array of Ordentablajeria objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Almacen is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Ordentablajeria[] List of Ordentablajeria objects
     * @throws PropelException
     */
    public function getOrdentablajeriasRelatedByIdalmacenorigen($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOrdentablajeriasRelatedByIdalmacenorigenPartial && !$this->isNew();
        if (null === $this->collOrdentablajeriasRelatedByIdalmacenorigen || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOrdentablajeriasRelatedByIdalmacenorigen) {
                // return empty collection
                $this->initOrdentablajeriasRelatedByIdalmacenorigen();
            } else {
                $collOrdentablajeriasRelatedByIdalmacenorigen = OrdentablajeriaQuery::create(null, $criteria)
                    ->filterByAlmacenRelatedByIdalmacenorigen($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOrdentablajeriasRelatedByIdalmacenorigenPartial && count($collOrdentablajeriasRelatedByIdalmacenorigen)) {
                      $this->initOrdentablajeriasRelatedByIdalmacenorigen(false);

                      foreach ($collOrdentablajeriasRelatedByIdalmacenorigen as $obj) {
                        if (false == $this->collOrdentablajeriasRelatedByIdalmacenorigen->contains($obj)) {
                          $this->collOrdentablajeriasRelatedByIdalmacenorigen->append($obj);
                        }
                      }

                      $this->collOrdentablajeriasRelatedByIdalmacenorigenPartial = true;
                    }

                    $collOrdentablajeriasRelatedByIdalmacenorigen->getInternalIterator()->rewind();

                    return $collOrdentablajeriasRelatedByIdalmacenorigen;
                }

                if ($partial && $this->collOrdentablajeriasRelatedByIdalmacenorigen) {
                    foreach ($this->collOrdentablajeriasRelatedByIdalmacenorigen as $obj) {
                        if ($obj->isNew()) {
                            $collOrdentablajeriasRelatedByIdalmacenorigen[] = $obj;
                        }
                    }
                }

                $this->collOrdentablajeriasRelatedByIdalmacenorigen = $collOrdentablajeriasRelatedByIdalmacenorigen;
                $this->collOrdentablajeriasRelatedByIdalmacenorigenPartial = false;
            }
        }

        return $this->collOrdentablajeriasRelatedByIdalmacenorigen;
    }

    /**
     * Sets a collection of OrdentablajeriaRelatedByIdalmacenorigen objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ordentablajeriasRelatedByIdalmacenorigen A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Almacen The current object (for fluent API support)
     */
    public function setOrdentablajeriasRelatedByIdalmacenorigen(PropelCollection $ordentablajeriasRelatedByIdalmacenorigen, PropelPDO $con = null)
    {
        $ordentablajeriasRelatedByIdalmacenorigenToDelete = $this->getOrdentablajeriasRelatedByIdalmacenorigen(new Criteria(), $con)->diff($ordentablajeriasRelatedByIdalmacenorigen);


        $this->ordentablajeriasRelatedByIdalmacenorigenScheduledForDeletion = $ordentablajeriasRelatedByIdalmacenorigenToDelete;

        foreach ($ordentablajeriasRelatedByIdalmacenorigenToDelete as $ordentablajeriaRelatedByIdalmacenorigenRemoved) {
            $ordentablajeriaRelatedByIdalmacenorigenRemoved->setAlmacenRelatedByIdalmacenorigen(null);
        }

        $this->collOrdentablajeriasRelatedByIdalmacenorigen = null;
        foreach ($ordentablajeriasRelatedByIdalmacenorigen as $ordentablajeriaRelatedByIdalmacenorigen) {
            $this->addOrdentablajeriaRelatedByIdalmacenorigen($ordentablajeriaRelatedByIdalmacenorigen);
        }

        $this->collOrdentablajeriasRelatedByIdalmacenorigen = $ordentablajeriasRelatedByIdalmacenorigen;
        $this->collOrdentablajeriasRelatedByIdalmacenorigenPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Ordentablajeria objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Ordentablajeria objects.
     * @throws PropelException
     */
    public function countOrdentablajeriasRelatedByIdalmacenorigen(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOrdentablajeriasRelatedByIdalmacenorigenPartial && !$this->isNew();
        if (null === $this->collOrdentablajeriasRelatedByIdalmacenorigen || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOrdentablajeriasRelatedByIdalmacenorigen) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOrdentablajeriasRelatedByIdalmacenorigen());
            }
            $query = OrdentablajeriaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByAlmacenRelatedByIdalmacenorigen($this)
                ->count($con);
        }

        return count($this->collOrdentablajeriasRelatedByIdalmacenorigen);
    }

    /**
     * Method called to associate a Ordentablajeria object to this object
     * through the Ordentablajeria foreign key attribute.
     *
     * @param    Ordentablajeria $l Ordentablajeria
     * @return Almacen The current object (for fluent API support)
     */
    public function addOrdentablajeriaRelatedByIdalmacenorigen(Ordentablajeria $l)
    {
        if ($this->collOrdentablajeriasRelatedByIdalmacenorigen === null) {
            $this->initOrdentablajeriasRelatedByIdalmacenorigen();
            $this->collOrdentablajeriasRelatedByIdalmacenorigenPartial = true;
        }

        if (!in_array($l, $this->collOrdentablajeriasRelatedByIdalmacenorigen->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOrdentablajeriaRelatedByIdalmacenorigen($l);

            if ($this->ordentablajeriasRelatedByIdalmacenorigenScheduledForDeletion and $this->ordentablajeriasRelatedByIdalmacenorigenScheduledForDeletion->contains($l)) {
                $this->ordentablajeriasRelatedByIdalmacenorigenScheduledForDeletion->remove($this->ordentablajeriasRelatedByIdalmacenorigenScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	OrdentablajeriaRelatedByIdalmacenorigen $ordentablajeriaRelatedByIdalmacenorigen The ordentablajeriaRelatedByIdalmacenorigen object to add.
     */
    protected function doAddOrdentablajeriaRelatedByIdalmacenorigen($ordentablajeriaRelatedByIdalmacenorigen)
    {
        $this->collOrdentablajeriasRelatedByIdalmacenorigen[]= $ordentablajeriaRelatedByIdalmacenorigen;
        $ordentablajeriaRelatedByIdalmacenorigen->setAlmacenRelatedByIdalmacenorigen($this);
    }

    /**
     * @param	OrdentablajeriaRelatedByIdalmacenorigen $ordentablajeriaRelatedByIdalmacenorigen The ordentablajeriaRelatedByIdalmacenorigen object to remove.
     * @return Almacen The current object (for fluent API support)
     */
    public function removeOrdentablajeriaRelatedByIdalmacenorigen($ordentablajeriaRelatedByIdalmacenorigen)
    {
        if ($this->getOrdentablajeriasRelatedByIdalmacenorigen()->contains($ordentablajeriaRelatedByIdalmacenorigen)) {
            $this->collOrdentablajeriasRelatedByIdalmacenorigen->remove($this->collOrdentablajeriasRelatedByIdalmacenorigen->search($ordentablajeriaRelatedByIdalmacenorigen));
            if (null === $this->ordentablajeriasRelatedByIdalmacenorigenScheduledForDeletion) {
                $this->ordentablajeriasRelatedByIdalmacenorigenScheduledForDeletion = clone $this->collOrdentablajeriasRelatedByIdalmacenorigen;
                $this->ordentablajeriasRelatedByIdalmacenorigenScheduledForDeletion->clear();
            }
            $this->ordentablajeriasRelatedByIdalmacenorigenScheduledForDeletion[]= clone $ordentablajeriaRelatedByIdalmacenorigen;
            $ordentablajeriaRelatedByIdalmacenorigen->setAlmacenRelatedByIdalmacenorigen(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related OrdentablajeriasRelatedByIdalmacenorigen from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ordentablajeria[] List of Ordentablajeria objects
     */
    public function getOrdentablajeriasRelatedByIdalmacenorigenJoinUsuarioRelatedByIdauditor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OrdentablajeriaQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdauditor', $join_behavior);

        return $this->getOrdentablajeriasRelatedByIdalmacenorigen($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related OrdentablajeriasRelatedByIdalmacenorigen from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ordentablajeria[] List of Ordentablajeria objects
     */
    public function getOrdentablajeriasRelatedByIdalmacenorigenJoinEmpresa($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OrdentablajeriaQuery::create(null, $criteria);
        $query->joinWith('Empresa', $join_behavior);

        return $this->getOrdentablajeriasRelatedByIdalmacenorigen($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related OrdentablajeriasRelatedByIdalmacenorigen from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ordentablajeria[] List of Ordentablajeria objects
     */
    public function getOrdentablajeriasRelatedByIdalmacenorigenJoinProducto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OrdentablajeriaQuery::create(null, $criteria);
        $query->joinWith('Producto', $join_behavior);

        return $this->getOrdentablajeriasRelatedByIdalmacenorigen($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related OrdentablajeriasRelatedByIdalmacenorigen from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ordentablajeria[] List of Ordentablajeria objects
     */
    public function getOrdentablajeriasRelatedByIdalmacenorigenJoinSucursal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OrdentablajeriaQuery::create(null, $criteria);
        $query->joinWith('Sucursal', $join_behavior);

        return $this->getOrdentablajeriasRelatedByIdalmacenorigen($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related OrdentablajeriasRelatedByIdalmacenorigen from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ordentablajeria[] List of Ordentablajeria objects
     */
    public function getOrdentablajeriasRelatedByIdalmacenorigenJoinUsuarioRelatedByIdusuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OrdentablajeriaQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdusuario', $join_behavior);

        return $this->getOrdentablajeriasRelatedByIdalmacenorigen($query, $con);
    }

    /**
     * Clears out the collProductosucursalalmacens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Almacen The current object (for fluent API support)
     * @see        addProductosucursalalmacens()
     */
    public function clearProductosucursalalmacens()
    {
        $this->collProductosucursalalmacens = null; // important to set this to null since that means it is uninitialized
        $this->collProductosucursalalmacensPartial = null;

        return $this;
    }

    /**
     * reset is the collProductosucursalalmacens collection loaded partially
     *
     * @return void
     */
    public function resetPartialProductosucursalalmacens($v = true)
    {
        $this->collProductosucursalalmacensPartial = $v;
    }

    /**
     * Initializes the collProductosucursalalmacens collection.
     *
     * By default this just sets the collProductosucursalalmacens collection to an empty array (like clearcollProductosucursalalmacens());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initProductosucursalalmacens($overrideExisting = true)
    {
        if (null !== $this->collProductosucursalalmacens && !$overrideExisting) {
            return;
        }
        $this->collProductosucursalalmacens = new PropelObjectCollection();
        $this->collProductosucursalalmacens->setModel('Productosucursalalmacen');
    }

    /**
     * Gets an array of Productosucursalalmacen objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Almacen is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Productosucursalalmacen[] List of Productosucursalalmacen objects
     * @throws PropelException
     */
    public function getProductosucursalalmacens($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collProductosucursalalmacensPartial && !$this->isNew();
        if (null === $this->collProductosucursalalmacens || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collProductosucursalalmacens) {
                // return empty collection
                $this->initProductosucursalalmacens();
            } else {
                $collProductosucursalalmacens = ProductosucursalalmacenQuery::create(null, $criteria)
                    ->filterByAlmacen($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collProductosucursalalmacensPartial && count($collProductosucursalalmacens)) {
                      $this->initProductosucursalalmacens(false);

                      foreach ($collProductosucursalalmacens as $obj) {
                        if (false == $this->collProductosucursalalmacens->contains($obj)) {
                          $this->collProductosucursalalmacens->append($obj);
                        }
                      }

                      $this->collProductosucursalalmacensPartial = true;
                    }

                    $collProductosucursalalmacens->getInternalIterator()->rewind();

                    return $collProductosucursalalmacens;
                }

                if ($partial && $this->collProductosucursalalmacens) {
                    foreach ($this->collProductosucursalalmacens as $obj) {
                        if ($obj->isNew()) {
                            $collProductosucursalalmacens[] = $obj;
                        }
                    }
                }

                $this->collProductosucursalalmacens = $collProductosucursalalmacens;
                $this->collProductosucursalalmacensPartial = false;
            }
        }

        return $this->collProductosucursalalmacens;
    }

    /**
     * Sets a collection of Productosucursalalmacen objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $productosucursalalmacens A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Almacen The current object (for fluent API support)
     */
    public function setProductosucursalalmacens(PropelCollection $productosucursalalmacens, PropelPDO $con = null)
    {
        $productosucursalalmacensToDelete = $this->getProductosucursalalmacens(new Criteria(), $con)->diff($productosucursalalmacens);


        $this->productosucursalalmacensScheduledForDeletion = $productosucursalalmacensToDelete;

        foreach ($productosucursalalmacensToDelete as $productosucursalalmacenRemoved) {
            $productosucursalalmacenRemoved->setAlmacen(null);
        }

        $this->collProductosucursalalmacens = null;
        foreach ($productosucursalalmacens as $productosucursalalmacen) {
            $this->addProductosucursalalmacen($productosucursalalmacen);
        }

        $this->collProductosucursalalmacens = $productosucursalalmacens;
        $this->collProductosucursalalmacensPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Productosucursalalmacen objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Productosucursalalmacen objects.
     * @throws PropelException
     */
    public function countProductosucursalalmacens(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collProductosucursalalmacensPartial && !$this->isNew();
        if (null === $this->collProductosucursalalmacens || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collProductosucursalalmacens) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getProductosucursalalmacens());
            }
            $query = ProductosucursalalmacenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByAlmacen($this)
                ->count($con);
        }

        return count($this->collProductosucursalalmacens);
    }

    /**
     * Method called to associate a Productosucursalalmacen object to this object
     * through the Productosucursalalmacen foreign key attribute.
     *
     * @param    Productosucursalalmacen $l Productosucursalalmacen
     * @return Almacen The current object (for fluent API support)
     */
    public function addProductosucursalalmacen(Productosucursalalmacen $l)
    {
        if ($this->collProductosucursalalmacens === null) {
            $this->initProductosucursalalmacens();
            $this->collProductosucursalalmacensPartial = true;
        }

        if (!in_array($l, $this->collProductosucursalalmacens->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddProductosucursalalmacen($l);

            if ($this->productosucursalalmacensScheduledForDeletion and $this->productosucursalalmacensScheduledForDeletion->contains($l)) {
                $this->productosucursalalmacensScheduledForDeletion->remove($this->productosucursalalmacensScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Productosucursalalmacen $productosucursalalmacen The productosucursalalmacen object to add.
     */
    protected function doAddProductosucursalalmacen($productosucursalalmacen)
    {
        $this->collProductosucursalalmacens[]= $productosucursalalmacen;
        $productosucursalalmacen->setAlmacen($this);
    }

    /**
     * @param	Productosucursalalmacen $productosucursalalmacen The productosucursalalmacen object to remove.
     * @return Almacen The current object (for fluent API support)
     */
    public function removeProductosucursalalmacen($productosucursalalmacen)
    {
        if ($this->getProductosucursalalmacens()->contains($productosucursalalmacen)) {
            $this->collProductosucursalalmacens->remove($this->collProductosucursalalmacens->search($productosucursalalmacen));
            if (null === $this->productosucursalalmacensScheduledForDeletion) {
                $this->productosucursalalmacensScheduledForDeletion = clone $this->collProductosucursalalmacens;
                $this->productosucursalalmacensScheduledForDeletion->clear();
            }
            $this->productosucursalalmacensScheduledForDeletion[]= clone $productosucursalalmacen;
            $productosucursalalmacen->setAlmacen(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related Productosucursalalmacens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Productosucursalalmacen[] List of Productosucursalalmacen objects
     */
    public function getProductosucursalalmacensJoinEmpresa($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProductosucursalalmacenQuery::create(null, $criteria);
        $query->joinWith('Empresa', $join_behavior);

        return $this->getProductosucursalalmacens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related Productosucursalalmacens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Productosucursalalmacen[] List of Productosucursalalmacen objects
     */
    public function getProductosucursalalmacensJoinProducto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProductosucursalalmacenQuery::create(null, $criteria);
        $query->joinWith('Producto', $join_behavior);

        return $this->getProductosucursalalmacens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related Productosucursalalmacens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Productosucursalalmacen[] List of Productosucursalalmacen objects
     */
    public function getProductosucursalalmacensJoinSucursal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProductosucursalalmacenQuery::create(null, $criteria);
        $query->joinWith('Sucursal', $join_behavior);

        return $this->getProductosucursalalmacens($query, $con);
    }

    /**
     * Clears out the collRequisicionsRelatedByIdalmacendestino collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Almacen The current object (for fluent API support)
     * @see        addRequisicionsRelatedByIdalmacendestino()
     */
    public function clearRequisicionsRelatedByIdalmacendestino()
    {
        $this->collRequisicionsRelatedByIdalmacendestino = null; // important to set this to null since that means it is uninitialized
        $this->collRequisicionsRelatedByIdalmacendestinoPartial = null;

        return $this;
    }

    /**
     * reset is the collRequisicionsRelatedByIdalmacendestino collection loaded partially
     *
     * @return void
     */
    public function resetPartialRequisicionsRelatedByIdalmacendestino($v = true)
    {
        $this->collRequisicionsRelatedByIdalmacendestinoPartial = $v;
    }

    /**
     * Initializes the collRequisicionsRelatedByIdalmacendestino collection.
     *
     * By default this just sets the collRequisicionsRelatedByIdalmacendestino collection to an empty array (like clearcollRequisicionsRelatedByIdalmacendestino());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initRequisicionsRelatedByIdalmacendestino($overrideExisting = true)
    {
        if (null !== $this->collRequisicionsRelatedByIdalmacendestino && !$overrideExisting) {
            return;
        }
        $this->collRequisicionsRelatedByIdalmacendestino = new PropelObjectCollection();
        $this->collRequisicionsRelatedByIdalmacendestino->setModel('Requisicion');
    }

    /**
     * Gets an array of Requisicion objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Almacen is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     * @throws PropelException
     */
    public function getRequisicionsRelatedByIdalmacendestino($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collRequisicionsRelatedByIdalmacendestinoPartial && !$this->isNew();
        if (null === $this->collRequisicionsRelatedByIdalmacendestino || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collRequisicionsRelatedByIdalmacendestino) {
                // return empty collection
                $this->initRequisicionsRelatedByIdalmacendestino();
            } else {
                $collRequisicionsRelatedByIdalmacendestino = RequisicionQuery::create(null, $criteria)
                    ->filterByAlmacenRelatedByIdalmacendestino($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collRequisicionsRelatedByIdalmacendestinoPartial && count($collRequisicionsRelatedByIdalmacendestino)) {
                      $this->initRequisicionsRelatedByIdalmacendestino(false);

                      foreach ($collRequisicionsRelatedByIdalmacendestino as $obj) {
                        if (false == $this->collRequisicionsRelatedByIdalmacendestino->contains($obj)) {
                          $this->collRequisicionsRelatedByIdalmacendestino->append($obj);
                        }
                      }

                      $this->collRequisicionsRelatedByIdalmacendestinoPartial = true;
                    }

                    $collRequisicionsRelatedByIdalmacendestino->getInternalIterator()->rewind();

                    return $collRequisicionsRelatedByIdalmacendestino;
                }

                if ($partial && $this->collRequisicionsRelatedByIdalmacendestino) {
                    foreach ($this->collRequisicionsRelatedByIdalmacendestino as $obj) {
                        if ($obj->isNew()) {
                            $collRequisicionsRelatedByIdalmacendestino[] = $obj;
                        }
                    }
                }

                $this->collRequisicionsRelatedByIdalmacendestino = $collRequisicionsRelatedByIdalmacendestino;
                $this->collRequisicionsRelatedByIdalmacendestinoPartial = false;
            }
        }

        return $this->collRequisicionsRelatedByIdalmacendestino;
    }

    /**
     * Sets a collection of RequisicionRelatedByIdalmacendestino objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $requisicionsRelatedByIdalmacendestino A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Almacen The current object (for fluent API support)
     */
    public function setRequisicionsRelatedByIdalmacendestino(PropelCollection $requisicionsRelatedByIdalmacendestino, PropelPDO $con = null)
    {
        $requisicionsRelatedByIdalmacendestinoToDelete = $this->getRequisicionsRelatedByIdalmacendestino(new Criteria(), $con)->diff($requisicionsRelatedByIdalmacendestino);


        $this->requisicionsRelatedByIdalmacendestinoScheduledForDeletion = $requisicionsRelatedByIdalmacendestinoToDelete;

        foreach ($requisicionsRelatedByIdalmacendestinoToDelete as $requisicionRelatedByIdalmacendestinoRemoved) {
            $requisicionRelatedByIdalmacendestinoRemoved->setAlmacenRelatedByIdalmacendestino(null);
        }

        $this->collRequisicionsRelatedByIdalmacendestino = null;
        foreach ($requisicionsRelatedByIdalmacendestino as $requisicionRelatedByIdalmacendestino) {
            $this->addRequisicionRelatedByIdalmacendestino($requisicionRelatedByIdalmacendestino);
        }

        $this->collRequisicionsRelatedByIdalmacendestino = $requisicionsRelatedByIdalmacendestino;
        $this->collRequisicionsRelatedByIdalmacendestinoPartial = false;

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
    public function countRequisicionsRelatedByIdalmacendestino(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collRequisicionsRelatedByIdalmacendestinoPartial && !$this->isNew();
        if (null === $this->collRequisicionsRelatedByIdalmacendestino || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collRequisicionsRelatedByIdalmacendestino) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getRequisicionsRelatedByIdalmacendestino());
            }
            $query = RequisicionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByAlmacenRelatedByIdalmacendestino($this)
                ->count($con);
        }

        return count($this->collRequisicionsRelatedByIdalmacendestino);
    }

    /**
     * Method called to associate a Requisicion object to this object
     * through the Requisicion foreign key attribute.
     *
     * @param    Requisicion $l Requisicion
     * @return Almacen The current object (for fluent API support)
     */
    public function addRequisicionRelatedByIdalmacendestino(Requisicion $l)
    {
        if ($this->collRequisicionsRelatedByIdalmacendestino === null) {
            $this->initRequisicionsRelatedByIdalmacendestino();
            $this->collRequisicionsRelatedByIdalmacendestinoPartial = true;
        }

        if (!in_array($l, $this->collRequisicionsRelatedByIdalmacendestino->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddRequisicionRelatedByIdalmacendestino($l);

            if ($this->requisicionsRelatedByIdalmacendestinoScheduledForDeletion and $this->requisicionsRelatedByIdalmacendestinoScheduledForDeletion->contains($l)) {
                $this->requisicionsRelatedByIdalmacendestinoScheduledForDeletion->remove($this->requisicionsRelatedByIdalmacendestinoScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	RequisicionRelatedByIdalmacendestino $requisicionRelatedByIdalmacendestino The requisicionRelatedByIdalmacendestino object to add.
     */
    protected function doAddRequisicionRelatedByIdalmacendestino($requisicionRelatedByIdalmacendestino)
    {
        $this->collRequisicionsRelatedByIdalmacendestino[]= $requisicionRelatedByIdalmacendestino;
        $requisicionRelatedByIdalmacendestino->setAlmacenRelatedByIdalmacendestino($this);
    }

    /**
     * @param	RequisicionRelatedByIdalmacendestino $requisicionRelatedByIdalmacendestino The requisicionRelatedByIdalmacendestino object to remove.
     * @return Almacen The current object (for fluent API support)
     */
    public function removeRequisicionRelatedByIdalmacendestino($requisicionRelatedByIdalmacendestino)
    {
        if ($this->getRequisicionsRelatedByIdalmacendestino()->contains($requisicionRelatedByIdalmacendestino)) {
            $this->collRequisicionsRelatedByIdalmacendestino->remove($this->collRequisicionsRelatedByIdalmacendestino->search($requisicionRelatedByIdalmacendestino));
            if (null === $this->requisicionsRelatedByIdalmacendestinoScheduledForDeletion) {
                $this->requisicionsRelatedByIdalmacendestinoScheduledForDeletion = clone $this->collRequisicionsRelatedByIdalmacendestino;
                $this->requisicionsRelatedByIdalmacendestinoScheduledForDeletion->clear();
            }
            $this->requisicionsRelatedByIdalmacendestinoScheduledForDeletion[]= clone $requisicionRelatedByIdalmacendestino;
            $requisicionRelatedByIdalmacendestino->setAlmacenRelatedByIdalmacendestino(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related RequisicionsRelatedByIdalmacendestino from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsRelatedByIdalmacendestinoJoinUsuarioRelatedByIdauditor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdauditor', $join_behavior);

        return $this->getRequisicionsRelatedByIdalmacendestino($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related RequisicionsRelatedByIdalmacendestino from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsRelatedByIdalmacendestinoJoinConceptosalida($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('Conceptosalida', $join_behavior);

        return $this->getRequisicionsRelatedByIdalmacendestino($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related RequisicionsRelatedByIdalmacendestino from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsRelatedByIdalmacendestinoJoinEmpresa($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('Empresa', $join_behavior);

        return $this->getRequisicionsRelatedByIdalmacendestino($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related RequisicionsRelatedByIdalmacendestino from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsRelatedByIdalmacendestinoJoinSucursalRelatedByIdsucursaldestino($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('SucursalRelatedByIdsucursaldestino', $join_behavior);

        return $this->getRequisicionsRelatedByIdalmacendestino($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related RequisicionsRelatedByIdalmacendestino from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsRelatedByIdalmacendestinoJoinSucursalRelatedByIdsucursalorigen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('SucursalRelatedByIdsucursalorigen', $join_behavior);

        return $this->getRequisicionsRelatedByIdalmacendestino($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related RequisicionsRelatedByIdalmacendestino from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsRelatedByIdalmacendestinoJoinUsuarioRelatedByIdusuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdusuario', $join_behavior);

        return $this->getRequisicionsRelatedByIdalmacendestino($query, $con);
    }

    /**
     * Clears out the collRequisicionsRelatedByIdalmacenorigen collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Almacen The current object (for fluent API support)
     * @see        addRequisicionsRelatedByIdalmacenorigen()
     */
    public function clearRequisicionsRelatedByIdalmacenorigen()
    {
        $this->collRequisicionsRelatedByIdalmacenorigen = null; // important to set this to null since that means it is uninitialized
        $this->collRequisicionsRelatedByIdalmacenorigenPartial = null;

        return $this;
    }

    /**
     * reset is the collRequisicionsRelatedByIdalmacenorigen collection loaded partially
     *
     * @return void
     */
    public function resetPartialRequisicionsRelatedByIdalmacenorigen($v = true)
    {
        $this->collRequisicionsRelatedByIdalmacenorigenPartial = $v;
    }

    /**
     * Initializes the collRequisicionsRelatedByIdalmacenorigen collection.
     *
     * By default this just sets the collRequisicionsRelatedByIdalmacenorigen collection to an empty array (like clearcollRequisicionsRelatedByIdalmacenorigen());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initRequisicionsRelatedByIdalmacenorigen($overrideExisting = true)
    {
        if (null !== $this->collRequisicionsRelatedByIdalmacenorigen && !$overrideExisting) {
            return;
        }
        $this->collRequisicionsRelatedByIdalmacenorigen = new PropelObjectCollection();
        $this->collRequisicionsRelatedByIdalmacenorigen->setModel('Requisicion');
    }

    /**
     * Gets an array of Requisicion objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Almacen is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     * @throws PropelException
     */
    public function getRequisicionsRelatedByIdalmacenorigen($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collRequisicionsRelatedByIdalmacenorigenPartial && !$this->isNew();
        if (null === $this->collRequisicionsRelatedByIdalmacenorigen || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collRequisicionsRelatedByIdalmacenorigen) {
                // return empty collection
                $this->initRequisicionsRelatedByIdalmacenorigen();
            } else {
                $collRequisicionsRelatedByIdalmacenorigen = RequisicionQuery::create(null, $criteria)
                    ->filterByAlmacenRelatedByIdalmacenorigen($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collRequisicionsRelatedByIdalmacenorigenPartial && count($collRequisicionsRelatedByIdalmacenorigen)) {
                      $this->initRequisicionsRelatedByIdalmacenorigen(false);

                      foreach ($collRequisicionsRelatedByIdalmacenorigen as $obj) {
                        if (false == $this->collRequisicionsRelatedByIdalmacenorigen->contains($obj)) {
                          $this->collRequisicionsRelatedByIdalmacenorigen->append($obj);
                        }
                      }

                      $this->collRequisicionsRelatedByIdalmacenorigenPartial = true;
                    }

                    $collRequisicionsRelatedByIdalmacenorigen->getInternalIterator()->rewind();

                    return $collRequisicionsRelatedByIdalmacenorigen;
                }

                if ($partial && $this->collRequisicionsRelatedByIdalmacenorigen) {
                    foreach ($this->collRequisicionsRelatedByIdalmacenorigen as $obj) {
                        if ($obj->isNew()) {
                            $collRequisicionsRelatedByIdalmacenorigen[] = $obj;
                        }
                    }
                }

                $this->collRequisicionsRelatedByIdalmacenorigen = $collRequisicionsRelatedByIdalmacenorigen;
                $this->collRequisicionsRelatedByIdalmacenorigenPartial = false;
            }
        }

        return $this->collRequisicionsRelatedByIdalmacenorigen;
    }

    /**
     * Sets a collection of RequisicionRelatedByIdalmacenorigen objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $requisicionsRelatedByIdalmacenorigen A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Almacen The current object (for fluent API support)
     */
    public function setRequisicionsRelatedByIdalmacenorigen(PropelCollection $requisicionsRelatedByIdalmacenorigen, PropelPDO $con = null)
    {
        $requisicionsRelatedByIdalmacenorigenToDelete = $this->getRequisicionsRelatedByIdalmacenorigen(new Criteria(), $con)->diff($requisicionsRelatedByIdalmacenorigen);


        $this->requisicionsRelatedByIdalmacenorigenScheduledForDeletion = $requisicionsRelatedByIdalmacenorigenToDelete;

        foreach ($requisicionsRelatedByIdalmacenorigenToDelete as $requisicionRelatedByIdalmacenorigenRemoved) {
            $requisicionRelatedByIdalmacenorigenRemoved->setAlmacenRelatedByIdalmacenorigen(null);
        }

        $this->collRequisicionsRelatedByIdalmacenorigen = null;
        foreach ($requisicionsRelatedByIdalmacenorigen as $requisicionRelatedByIdalmacenorigen) {
            $this->addRequisicionRelatedByIdalmacenorigen($requisicionRelatedByIdalmacenorigen);
        }

        $this->collRequisicionsRelatedByIdalmacenorigen = $requisicionsRelatedByIdalmacenorigen;
        $this->collRequisicionsRelatedByIdalmacenorigenPartial = false;

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
    public function countRequisicionsRelatedByIdalmacenorigen(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collRequisicionsRelatedByIdalmacenorigenPartial && !$this->isNew();
        if (null === $this->collRequisicionsRelatedByIdalmacenorigen || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collRequisicionsRelatedByIdalmacenorigen) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getRequisicionsRelatedByIdalmacenorigen());
            }
            $query = RequisicionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByAlmacenRelatedByIdalmacenorigen($this)
                ->count($con);
        }

        return count($this->collRequisicionsRelatedByIdalmacenorigen);
    }

    /**
     * Method called to associate a Requisicion object to this object
     * through the Requisicion foreign key attribute.
     *
     * @param    Requisicion $l Requisicion
     * @return Almacen The current object (for fluent API support)
     */
    public function addRequisicionRelatedByIdalmacenorigen(Requisicion $l)
    {
        if ($this->collRequisicionsRelatedByIdalmacenorigen === null) {
            $this->initRequisicionsRelatedByIdalmacenorigen();
            $this->collRequisicionsRelatedByIdalmacenorigenPartial = true;
        }

        if (!in_array($l, $this->collRequisicionsRelatedByIdalmacenorigen->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddRequisicionRelatedByIdalmacenorigen($l);

            if ($this->requisicionsRelatedByIdalmacenorigenScheduledForDeletion and $this->requisicionsRelatedByIdalmacenorigenScheduledForDeletion->contains($l)) {
                $this->requisicionsRelatedByIdalmacenorigenScheduledForDeletion->remove($this->requisicionsRelatedByIdalmacenorigenScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	RequisicionRelatedByIdalmacenorigen $requisicionRelatedByIdalmacenorigen The requisicionRelatedByIdalmacenorigen object to add.
     */
    protected function doAddRequisicionRelatedByIdalmacenorigen($requisicionRelatedByIdalmacenorigen)
    {
        $this->collRequisicionsRelatedByIdalmacenorigen[]= $requisicionRelatedByIdalmacenorigen;
        $requisicionRelatedByIdalmacenorigen->setAlmacenRelatedByIdalmacenorigen($this);
    }

    /**
     * @param	RequisicionRelatedByIdalmacenorigen $requisicionRelatedByIdalmacenorigen The requisicionRelatedByIdalmacenorigen object to remove.
     * @return Almacen The current object (for fluent API support)
     */
    public function removeRequisicionRelatedByIdalmacenorigen($requisicionRelatedByIdalmacenorigen)
    {
        if ($this->getRequisicionsRelatedByIdalmacenorigen()->contains($requisicionRelatedByIdalmacenorigen)) {
            $this->collRequisicionsRelatedByIdalmacenorigen->remove($this->collRequisicionsRelatedByIdalmacenorigen->search($requisicionRelatedByIdalmacenorigen));
            if (null === $this->requisicionsRelatedByIdalmacenorigenScheduledForDeletion) {
                $this->requisicionsRelatedByIdalmacenorigenScheduledForDeletion = clone $this->collRequisicionsRelatedByIdalmacenorigen;
                $this->requisicionsRelatedByIdalmacenorigenScheduledForDeletion->clear();
            }
            $this->requisicionsRelatedByIdalmacenorigenScheduledForDeletion[]= clone $requisicionRelatedByIdalmacenorigen;
            $requisicionRelatedByIdalmacenorigen->setAlmacenRelatedByIdalmacenorigen(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related RequisicionsRelatedByIdalmacenorigen from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsRelatedByIdalmacenorigenJoinUsuarioRelatedByIdauditor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdauditor', $join_behavior);

        return $this->getRequisicionsRelatedByIdalmacenorigen($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related RequisicionsRelatedByIdalmacenorigen from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsRelatedByIdalmacenorigenJoinConceptosalida($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('Conceptosalida', $join_behavior);

        return $this->getRequisicionsRelatedByIdalmacenorigen($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related RequisicionsRelatedByIdalmacenorigen from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsRelatedByIdalmacenorigenJoinEmpresa($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('Empresa', $join_behavior);

        return $this->getRequisicionsRelatedByIdalmacenorigen($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related RequisicionsRelatedByIdalmacenorigen from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsRelatedByIdalmacenorigenJoinSucursalRelatedByIdsucursaldestino($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('SucursalRelatedByIdsucursaldestino', $join_behavior);

        return $this->getRequisicionsRelatedByIdalmacenorigen($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related RequisicionsRelatedByIdalmacenorigen from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsRelatedByIdalmacenorigenJoinSucursalRelatedByIdsucursalorigen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('SucursalRelatedByIdsucursalorigen', $join_behavior);

        return $this->getRequisicionsRelatedByIdalmacenorigen($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related RequisicionsRelatedByIdalmacenorigen from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsRelatedByIdalmacenorigenJoinUsuarioRelatedByIdusuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdusuario', $join_behavior);

        return $this->getRequisicionsRelatedByIdalmacenorigen($query, $con);
    }

    /**
     * Clears out the collVentadetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Almacen The current object (for fluent API support)
     * @see        addVentadetalles()
     */
    public function clearVentadetalles()
    {
        $this->collVentadetalles = null; // important to set this to null since that means it is uninitialized
        $this->collVentadetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collVentadetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialVentadetalles($v = true)
    {
        $this->collVentadetallesPartial = $v;
    }

    /**
     * Initializes the collVentadetalles collection.
     *
     * By default this just sets the collVentadetalles collection to an empty array (like clearcollVentadetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initVentadetalles($overrideExisting = true)
    {
        if (null !== $this->collVentadetalles && !$overrideExisting) {
            return;
        }
        $this->collVentadetalles = new PropelObjectCollection();
        $this->collVentadetalles->setModel('Ventadetalle');
    }

    /**
     * Gets an array of Ventadetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Almacen is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Ventadetalle[] List of Ventadetalle objects
     * @throws PropelException
     */
    public function getVentadetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collVentadetallesPartial && !$this->isNew();
        if (null === $this->collVentadetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collVentadetalles) {
                // return empty collection
                $this->initVentadetalles();
            } else {
                $collVentadetalles = VentadetalleQuery::create(null, $criteria)
                    ->filterByAlmacen($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collVentadetallesPartial && count($collVentadetalles)) {
                      $this->initVentadetalles(false);

                      foreach ($collVentadetalles as $obj) {
                        if (false == $this->collVentadetalles->contains($obj)) {
                          $this->collVentadetalles->append($obj);
                        }
                      }

                      $this->collVentadetallesPartial = true;
                    }

                    $collVentadetalles->getInternalIterator()->rewind();

                    return $collVentadetalles;
                }

                if ($partial && $this->collVentadetalles) {
                    foreach ($this->collVentadetalles as $obj) {
                        if ($obj->isNew()) {
                            $collVentadetalles[] = $obj;
                        }
                    }
                }

                $this->collVentadetalles = $collVentadetalles;
                $this->collVentadetallesPartial = false;
            }
        }

        return $this->collVentadetalles;
    }

    /**
     * Sets a collection of Ventadetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ventadetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Almacen The current object (for fluent API support)
     */
    public function setVentadetalles(PropelCollection $ventadetalles, PropelPDO $con = null)
    {
        $ventadetallesToDelete = $this->getVentadetalles(new Criteria(), $con)->diff($ventadetalles);


        $this->ventadetallesScheduledForDeletion = $ventadetallesToDelete;

        foreach ($ventadetallesToDelete as $ventadetalleRemoved) {
            $ventadetalleRemoved->setAlmacen(null);
        }

        $this->collVentadetalles = null;
        foreach ($ventadetalles as $ventadetalle) {
            $this->addVentadetalle($ventadetalle);
        }

        $this->collVentadetalles = $ventadetalles;
        $this->collVentadetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Ventadetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Ventadetalle objects.
     * @throws PropelException
     */
    public function countVentadetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collVentadetallesPartial && !$this->isNew();
        if (null === $this->collVentadetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collVentadetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getVentadetalles());
            }
            $query = VentadetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByAlmacen($this)
                ->count($con);
        }

        return count($this->collVentadetalles);
    }

    /**
     * Method called to associate a Ventadetalle object to this object
     * through the Ventadetalle foreign key attribute.
     *
     * @param    Ventadetalle $l Ventadetalle
     * @return Almacen The current object (for fluent API support)
     */
    public function addVentadetalle(Ventadetalle $l)
    {
        if ($this->collVentadetalles === null) {
            $this->initVentadetalles();
            $this->collVentadetallesPartial = true;
        }

        if (!in_array($l, $this->collVentadetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddVentadetalle($l);

            if ($this->ventadetallesScheduledForDeletion and $this->ventadetallesScheduledForDeletion->contains($l)) {
                $this->ventadetallesScheduledForDeletion->remove($this->ventadetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Ventadetalle $ventadetalle The ventadetalle object to add.
     */
    protected function doAddVentadetalle($ventadetalle)
    {
        $this->collVentadetalles[]= $ventadetalle;
        $ventadetalle->setAlmacen($this);
    }

    /**
     * @param	Ventadetalle $ventadetalle The ventadetalle object to remove.
     * @return Almacen The current object (for fluent API support)
     */
    public function removeVentadetalle($ventadetalle)
    {
        if ($this->getVentadetalles()->contains($ventadetalle)) {
            $this->collVentadetalles->remove($this->collVentadetalles->search($ventadetalle));
            if (null === $this->ventadetallesScheduledForDeletion) {
                $this->ventadetallesScheduledForDeletion = clone $this->collVentadetalles;
                $this->ventadetallesScheduledForDeletion->clear();
            }
            $this->ventadetallesScheduledForDeletion[]= clone $ventadetalle;
            $ventadetalle->setAlmacen(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related Ventadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ventadetalle[] List of Ventadetalle objects
     */
    public function getVentadetallesJoinVentadetalleRelatedByIdpadre($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VentadetalleQuery::create(null, $criteria);
        $query->joinWith('VentadetalleRelatedByIdpadre', $join_behavior);

        return $this->getVentadetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related Ventadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ventadetalle[] List of Ventadetalle objects
     */
    public function getVentadetallesJoinProducto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VentadetalleQuery::create(null, $criteria);
        $query->joinWith('Producto', $join_behavior);

        return $this->getVentadetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Almacen is new, it will return
     * an empty collection; or if this Almacen has previously
     * been saved, it will retrieve related Ventadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Almacen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ventadetalle[] List of Ventadetalle objects
     */
    public function getVentadetallesJoinVenta($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VentadetalleQuery::create(null, $criteria);
        $query->joinWith('Venta', $join_behavior);

        return $this->getVentadetalles($query, $con);
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
            if ($this->collCompras) {
                foreach ($this->collCompras as $o) {
                    $o->clearAllReferences($deep);
                }
            }
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
            if ($this->collInventariomess) {
                foreach ($this->collInventariomess as $o) {
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
            if ($this->collOrdentablajeriasRelatedByIdalmacendestino) {
                foreach ($this->collOrdentablajeriasRelatedByIdalmacendestino as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collOrdentablajeriasRelatedByIdalmacenorigen) {
                foreach ($this->collOrdentablajeriasRelatedByIdalmacenorigen as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collProductosucursalalmacens) {
                foreach ($this->collProductosucursalalmacens as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collRequisicionsRelatedByIdalmacendestino) {
                foreach ($this->collRequisicionsRelatedByIdalmacendestino as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collRequisicionsRelatedByIdalmacenorigen) {
                foreach ($this->collRequisicionsRelatedByIdalmacenorigen as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collVentadetalles) {
                foreach ($this->collVentadetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aSucursal instanceof Persistent) {
              $this->aSucursal->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCompras instanceof PropelCollection) {
            $this->collCompras->clearIterator();
        }
        $this->collCompras = null;
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
        if ($this->collInventariomess instanceof PropelCollection) {
            $this->collInventariomess->clearIterator();
        }
        $this->collInventariomess = null;
        if ($this->collNotacreditos instanceof PropelCollection) {
            $this->collNotacreditos->clearIterator();
        }
        $this->collNotacreditos = null;
        if ($this->collNotacreditodetalles instanceof PropelCollection) {
            $this->collNotacreditodetalles->clearIterator();
        }
        $this->collNotacreditodetalles = null;
        if ($this->collOrdentablajeriasRelatedByIdalmacendestino instanceof PropelCollection) {
            $this->collOrdentablajeriasRelatedByIdalmacendestino->clearIterator();
        }
        $this->collOrdentablajeriasRelatedByIdalmacendestino = null;
        if ($this->collOrdentablajeriasRelatedByIdalmacenorigen instanceof PropelCollection) {
            $this->collOrdentablajeriasRelatedByIdalmacenorigen->clearIterator();
        }
        $this->collOrdentablajeriasRelatedByIdalmacenorigen = null;
        if ($this->collProductosucursalalmacens instanceof PropelCollection) {
            $this->collProductosucursalalmacens->clearIterator();
        }
        $this->collProductosucursalalmacens = null;
        if ($this->collRequisicionsRelatedByIdalmacendestino instanceof PropelCollection) {
            $this->collRequisicionsRelatedByIdalmacendestino->clearIterator();
        }
        $this->collRequisicionsRelatedByIdalmacendestino = null;
        if ($this->collRequisicionsRelatedByIdalmacenorigen instanceof PropelCollection) {
            $this->collRequisicionsRelatedByIdalmacenorigen->clearIterator();
        }
        $this->collRequisicionsRelatedByIdalmacenorigen = null;
        if ($this->collVentadetalles instanceof PropelCollection) {
            $this->collVentadetalles->clearIterator();
        }
        $this->collVentadetalles = null;
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
