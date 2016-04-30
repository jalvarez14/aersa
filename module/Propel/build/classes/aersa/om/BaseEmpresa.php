<?php


/**
 * Base class that represents a row from the 'empresa' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseEmpresa extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'EmpresaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        EmpresaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idempresa field.
     * @var        int
     */
    protected $idempresa;

    /**
     * The value for the empresa_nombrecomercial field.
     * @var        string
     */
    protected $empresa_nombrecomercial;

    /**
     * The value for the empresa_razonsocial field.
     * @var        string
     */
    protected $empresa_razonsocial;

    /**
     * The value for the empresa_estatus field.
     * Note: this column has a database default value of: true
     * @var        boolean
     */
    protected $empresa_estatus;

    /**
     * The value for the empresa_administracion field.
     * @var        boolean
     */
    protected $empresa_administracion;

    /**
     * @var        PropelObjectCollection|Compra[] Collection to store aggregation of Compra objects.
     */
    protected $collCompras;
    protected $collComprasPartial;

    /**
     * @var        PropelObjectCollection|Devolucion[] Collection to store aggregation of Devolucion objects.
     */
    protected $collDevolucions;
    protected $collDevolucionsPartial;

    /**
     * @var        PropelObjectCollection|Ingreso[] Collection to store aggregation of Ingreso objects.
     */
    protected $collIngresos;
    protected $collIngresosPartial;

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
     * @var        PropelObjectCollection|Ordentablajeria[] Collection to store aggregation of Ordentablajeria objects.
     */
    protected $collOrdentablajerias;
    protected $collOrdentablajeriasPartial;

    /**
     * @var        PropelObjectCollection|Plantillatablajeria[] Collection to store aggregation of Plantillatablajeria objects.
     */
    protected $collPlantillatablajerias;
    protected $collPlantillatablajeriasPartial;

    /**
     * @var        PropelObjectCollection|Producto[] Collection to store aggregation of Producto objects.
     */
    protected $collProductos;
    protected $collProductosPartial;

    /**
     * @var        PropelObjectCollection|Productosucursalalmacen[] Collection to store aggregation of Productosucursalalmacen objects.
     */
    protected $collProductosucursalalmacens;
    protected $collProductosucursalalmacensPartial;

    /**
     * @var        PropelObjectCollection|Proveedor[] Collection to store aggregation of Proveedor objects.
     */
    protected $collProveedors;
    protected $collProveedorsPartial;

    /**
     * @var        PropelObjectCollection|Requisicion[] Collection to store aggregation of Requisicion objects.
     */
    protected $collRequisicions;
    protected $collRequisicionsPartial;

    /**
     * @var        PropelObjectCollection|Sucursal[] Collection to store aggregation of Sucursal objects.
     */
    protected $collSucursals;
    protected $collSucursalsPartial;

    /**
     * @var        PropelObjectCollection|Trabajadorespromedio[] Collection to store aggregation of Trabajadorespromedio objects.
     */
    protected $collTrabajadorespromedios;
    protected $collTrabajadorespromediosPartial;

    /**
     * @var        PropelObjectCollection|Trabajadorpromedio[] Collection to store aggregation of Trabajadorpromedio objects.
     */
    protected $collTrabajadorpromedios;
    protected $collTrabajadorpromediosPartial;

    /**
     * @var        PropelObjectCollection|Usuarioempresa[] Collection to store aggregation of Usuarioempresa objects.
     */
    protected $collUsuarioempresas;
    protected $collUsuarioempresasPartial;

    /**
     * @var        PropelObjectCollection|Venta[] Collection to store aggregation of Venta objects.
     */
    protected $collVentas;
    protected $collVentasPartial;

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
    protected $devolucionsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ingresosScheduledForDeletion = null;

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
    protected $ordentablajeriasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $plantillatablajeriasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $productosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $productosucursalalmacensScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $proveedorsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $requisicionsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $sucursalsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $trabajadorespromediosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $trabajadorpromediosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $usuarioempresasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ventasScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->empresa_estatus = true;
    }

    /**
     * Initializes internal state of BaseEmpresa object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
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
     * Get the [empresa_nombrecomercial] column value.
     *
     * @return string
     */
    public function getEmpresaNombrecomercial()
    {

        return $this->empresa_nombrecomercial;
    }

    /**
     * Get the [empresa_razonsocial] column value.
     *
     * @return string
     */
    public function getEmpresaRazonsocial()
    {

        return $this->empresa_razonsocial;
    }

    /**
     * Get the [empresa_estatus] column value.
     *
     * @return boolean
     */
    public function getEmpresaEstatus()
    {

        return $this->empresa_estatus;
    }

    /**
     * Get the [empresa_administracion] column value.
     *
     * @return boolean
     */
    public function getEmpresaAdministracion()
    {

        return $this->empresa_administracion;
    }

    /**
     * Set the value of [idempresa] column.
     *
     * @param  int $v new value
     * @return Empresa The current object (for fluent API support)
     */
    public function setIdempresa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempresa !== $v) {
            $this->idempresa = $v;
            $this->modifiedColumns[] = EmpresaPeer::IDEMPRESA;
        }


        return $this;
    } // setIdempresa()

    /**
     * Set the value of [empresa_nombrecomercial] column.
     *
     * @param  string $v new value
     * @return Empresa The current object (for fluent API support)
     */
    public function setEmpresaNombrecomercial($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empresa_nombrecomercial !== $v) {
            $this->empresa_nombrecomercial = $v;
            $this->modifiedColumns[] = EmpresaPeer::EMPRESA_NOMBRECOMERCIAL;
        }


        return $this;
    } // setEmpresaNombrecomercial()

    /**
     * Set the value of [empresa_razonsocial] column.
     *
     * @param  string $v new value
     * @return Empresa The current object (for fluent API support)
     */
    public function setEmpresaRazonsocial($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empresa_razonsocial !== $v) {
            $this->empresa_razonsocial = $v;
            $this->modifiedColumns[] = EmpresaPeer::EMPRESA_RAZONSOCIAL;
        }


        return $this;
    } // setEmpresaRazonsocial()

    /**
     * Sets the value of the [empresa_estatus] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Empresa The current object (for fluent API support)
     */
    public function setEmpresaEstatus($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->empresa_estatus !== $v) {
            $this->empresa_estatus = $v;
            $this->modifiedColumns[] = EmpresaPeer::EMPRESA_ESTATUS;
        }


        return $this;
    } // setEmpresaEstatus()

    /**
     * Sets the value of the [empresa_administracion] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Empresa The current object (for fluent API support)
     */
    public function setEmpresaAdministracion($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->empresa_administracion !== $v) {
            $this->empresa_administracion = $v;
            $this->modifiedColumns[] = EmpresaPeer::EMPRESA_ADMINISTRACION;
        }


        return $this;
    } // setEmpresaAdministracion()

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
            if ($this->empresa_estatus !== true) {
                return false;
            }

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

            $this->idempresa = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->empresa_nombrecomercial = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->empresa_razonsocial = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->empresa_estatus = ($row[$startcol + 3] !== null) ? (boolean) $row[$startcol + 3] : null;
            $this->empresa_administracion = ($row[$startcol + 4] !== null) ? (boolean) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = EmpresaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Empresa object", $e);
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
            $con = Propel::getConnection(EmpresaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = EmpresaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collCompras = null;

            $this->collDevolucions = null;

            $this->collIngresos = null;

            $this->collInventariomess = null;

            $this->collNotacreditos = null;

            $this->collOrdentablajerias = null;

            $this->collPlantillatablajerias = null;

            $this->collProductos = null;

            $this->collProductosucursalalmacens = null;

            $this->collProveedors = null;

            $this->collRequisicions = null;

            $this->collSucursals = null;

            $this->collTrabajadorespromedios = null;

            $this->collTrabajadorpromedios = null;

            $this->collUsuarioempresas = null;

            $this->collVentas = null;

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
            $con = Propel::getConnection(EmpresaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = EmpresaQuery::create()
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
            $con = Propel::getConnection(EmpresaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                EmpresaPeer::addInstanceToPool($this);
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

            if ($this->ingresosScheduledForDeletion !== null) {
                if (!$this->ingresosScheduledForDeletion->isEmpty()) {
                    IngresoQuery::create()
                        ->filterByPrimaryKeys($this->ingresosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->ingresosScheduledForDeletion = null;
                }
            }

            if ($this->collIngresos !== null) {
                foreach ($this->collIngresos as $referrerFK) {
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

            if ($this->ordentablajeriasScheduledForDeletion !== null) {
                if (!$this->ordentablajeriasScheduledForDeletion->isEmpty()) {
                    OrdentablajeriaQuery::create()
                        ->filterByPrimaryKeys($this->ordentablajeriasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->ordentablajeriasScheduledForDeletion = null;
                }
            }

            if ($this->collOrdentablajerias !== null) {
                foreach ($this->collOrdentablajerias as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->plantillatablajeriasScheduledForDeletion !== null) {
                if (!$this->plantillatablajeriasScheduledForDeletion->isEmpty()) {
                    PlantillatablajeriaQuery::create()
                        ->filterByPrimaryKeys($this->plantillatablajeriasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->plantillatablajeriasScheduledForDeletion = null;
                }
            }

            if ($this->collPlantillatablajerias !== null) {
                foreach ($this->collPlantillatablajerias as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->productosScheduledForDeletion !== null) {
                if (!$this->productosScheduledForDeletion->isEmpty()) {
                    ProductoQuery::create()
                        ->filterByPrimaryKeys($this->productosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->productosScheduledForDeletion = null;
                }
            }

            if ($this->collProductos !== null) {
                foreach ($this->collProductos as $referrerFK) {
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

            if ($this->proveedorsScheduledForDeletion !== null) {
                if (!$this->proveedorsScheduledForDeletion->isEmpty()) {
                    ProveedorQuery::create()
                        ->filterByPrimaryKeys($this->proveedorsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->proveedorsScheduledForDeletion = null;
                }
            }

            if ($this->collProveedors !== null) {
                foreach ($this->collProveedors as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

            if ($this->sucursalsScheduledForDeletion !== null) {
                if (!$this->sucursalsScheduledForDeletion->isEmpty()) {
                    SucursalQuery::create()
                        ->filterByPrimaryKeys($this->sucursalsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->sucursalsScheduledForDeletion = null;
                }
            }

            if ($this->collSucursals !== null) {
                foreach ($this->collSucursals as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->trabajadorespromediosScheduledForDeletion !== null) {
                if (!$this->trabajadorespromediosScheduledForDeletion->isEmpty()) {
                    TrabajadorespromedioQuery::create()
                        ->filterByPrimaryKeys($this->trabajadorespromediosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->trabajadorespromediosScheduledForDeletion = null;
                }
            }

            if ($this->collTrabajadorespromedios !== null) {
                foreach ($this->collTrabajadorespromedios as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->trabajadorpromediosScheduledForDeletion !== null) {
                if (!$this->trabajadorpromediosScheduledForDeletion->isEmpty()) {
                    TrabajadorpromedioQuery::create()
                        ->filterByPrimaryKeys($this->trabajadorpromediosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->trabajadorpromediosScheduledForDeletion = null;
                }
            }

            if ($this->collTrabajadorpromedios !== null) {
                foreach ($this->collTrabajadorpromedios as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->usuarioempresasScheduledForDeletion !== null) {
                if (!$this->usuarioempresasScheduledForDeletion->isEmpty()) {
                    UsuarioempresaQuery::create()
                        ->filterByPrimaryKeys($this->usuarioempresasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->usuarioempresasScheduledForDeletion = null;
                }
            }

            if ($this->collUsuarioempresas !== null) {
                foreach ($this->collUsuarioempresas as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ventasScheduledForDeletion !== null) {
                if (!$this->ventasScheduledForDeletion->isEmpty()) {
                    VentaQuery::create()
                        ->filterByPrimaryKeys($this->ventasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->ventasScheduledForDeletion = null;
                }
            }

            if ($this->collVentas !== null) {
                foreach ($this->collVentas as $referrerFK) {
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

        $this->modifiedColumns[] = EmpresaPeer::IDEMPRESA;
        if (null !== $this->idempresa) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . EmpresaPeer::IDEMPRESA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(EmpresaPeer::IDEMPRESA)) {
            $modifiedColumns[':p' . $index++]  = '`idempresa`';
        }
        if ($this->isColumnModified(EmpresaPeer::EMPRESA_NOMBRECOMERCIAL)) {
            $modifiedColumns[':p' . $index++]  = '`empresa_nombrecomercial`';
        }
        if ($this->isColumnModified(EmpresaPeer::EMPRESA_RAZONSOCIAL)) {
            $modifiedColumns[':p' . $index++]  = '`empresa_razonsocial`';
        }
        if ($this->isColumnModified(EmpresaPeer::EMPRESA_ESTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`empresa_estatus`';
        }
        if ($this->isColumnModified(EmpresaPeer::EMPRESA_ADMINISTRACION)) {
            $modifiedColumns[':p' . $index++]  = '`empresa_administracion`';
        }

        $sql = sprintf(
            'INSERT INTO `empresa` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idempresa`':
                        $stmt->bindValue($identifier, $this->idempresa, PDO::PARAM_INT);
                        break;
                    case '`empresa_nombrecomercial`':
                        $stmt->bindValue($identifier, $this->empresa_nombrecomercial, PDO::PARAM_STR);
                        break;
                    case '`empresa_razonsocial`':
                        $stmt->bindValue($identifier, $this->empresa_razonsocial, PDO::PARAM_STR);
                        break;
                    case '`empresa_estatus`':
                        $stmt->bindValue($identifier, (int) $this->empresa_estatus, PDO::PARAM_INT);
                        break;
                    case '`empresa_administracion`':
                        $stmt->bindValue($identifier, (int) $this->empresa_administracion, PDO::PARAM_INT);
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
        $this->setIdempresa($pk);

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


            if (($retval = EmpresaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCompras !== null) {
                    foreach ($this->collCompras as $referrerFK) {
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

                if ($this->collIngresos !== null) {
                    foreach ($this->collIngresos as $referrerFK) {
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

                if ($this->collOrdentablajerias !== null) {
                    foreach ($this->collOrdentablajerias as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collPlantillatablajerias !== null) {
                    foreach ($this->collPlantillatablajerias as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collProductos !== null) {
                    foreach ($this->collProductos as $referrerFK) {
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

                if ($this->collProveedors !== null) {
                    foreach ($this->collProveedors as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collRequisicions !== null) {
                    foreach ($this->collRequisicions as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collSucursals !== null) {
                    foreach ($this->collSucursals as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collTrabajadorespromedios !== null) {
                    foreach ($this->collTrabajadorespromedios as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collTrabajadorpromedios !== null) {
                    foreach ($this->collTrabajadorpromedios as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collUsuarioempresas !== null) {
                    foreach ($this->collUsuarioempresas as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collVentas !== null) {
                    foreach ($this->collVentas as $referrerFK) {
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
        $pos = EmpresaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdempresa();
                break;
            case 1:
                return $this->getEmpresaNombrecomercial();
                break;
            case 2:
                return $this->getEmpresaRazonsocial();
                break;
            case 3:
                return $this->getEmpresaEstatus();
                break;
            case 4:
                return $this->getEmpresaAdministracion();
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
        if (isset($alreadyDumpedObjects['Empresa'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Empresa'][$this->getPrimaryKey()] = true;
        $keys = EmpresaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdempresa(),
            $keys[1] => $this->getEmpresaNombrecomercial(),
            $keys[2] => $this->getEmpresaRazonsocial(),
            $keys[3] => $this->getEmpresaEstatus(),
            $keys[4] => $this->getEmpresaAdministracion(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collCompras) {
                $result['Compras'] = $this->collCompras->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collDevolucions) {
                $result['Devolucions'] = $this->collDevolucions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collIngresos) {
                $result['Ingresos'] = $this->collIngresos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collInventariomess) {
                $result['Inventariomess'] = $this->collInventariomess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collNotacreditos) {
                $result['Notacreditos'] = $this->collNotacreditos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collOrdentablajerias) {
                $result['Ordentablajerias'] = $this->collOrdentablajerias->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPlantillatablajerias) {
                $result['Plantillatablajerias'] = $this->collPlantillatablajerias->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collProductos) {
                $result['Productos'] = $this->collProductos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collProductosucursalalmacens) {
                $result['Productosucursalalmacens'] = $this->collProductosucursalalmacens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collProveedors) {
                $result['Proveedors'] = $this->collProveedors->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collRequisicions) {
                $result['Requisicions'] = $this->collRequisicions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSucursals) {
                $result['Sucursals'] = $this->collSucursals->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collTrabajadorespromedios) {
                $result['Trabajadorespromedios'] = $this->collTrabajadorespromedios->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collTrabajadorpromedios) {
                $result['Trabajadorpromedios'] = $this->collTrabajadorpromedios->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collUsuarioempresas) {
                $result['Usuarioempresas'] = $this->collUsuarioempresas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collVentas) {
                $result['Ventas'] = $this->collVentas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = EmpresaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdempresa($value);
                break;
            case 1:
                $this->setEmpresaNombrecomercial($value);
                break;
            case 2:
                $this->setEmpresaRazonsocial($value);
                break;
            case 3:
                $this->setEmpresaEstatus($value);
                break;
            case 4:
                $this->setEmpresaAdministracion($value);
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
        $keys = EmpresaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdempresa($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setEmpresaNombrecomercial($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setEmpresaRazonsocial($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setEmpresaEstatus($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setEmpresaAdministracion($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(EmpresaPeer::DATABASE_NAME);

        if ($this->isColumnModified(EmpresaPeer::IDEMPRESA)) $criteria->add(EmpresaPeer::IDEMPRESA, $this->idempresa);
        if ($this->isColumnModified(EmpresaPeer::EMPRESA_NOMBRECOMERCIAL)) $criteria->add(EmpresaPeer::EMPRESA_NOMBRECOMERCIAL, $this->empresa_nombrecomercial);
        if ($this->isColumnModified(EmpresaPeer::EMPRESA_RAZONSOCIAL)) $criteria->add(EmpresaPeer::EMPRESA_RAZONSOCIAL, $this->empresa_razonsocial);
        if ($this->isColumnModified(EmpresaPeer::EMPRESA_ESTATUS)) $criteria->add(EmpresaPeer::EMPRESA_ESTATUS, $this->empresa_estatus);
        if ($this->isColumnModified(EmpresaPeer::EMPRESA_ADMINISTRACION)) $criteria->add(EmpresaPeer::EMPRESA_ADMINISTRACION, $this->empresa_administracion);

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
        $criteria = new Criteria(EmpresaPeer::DATABASE_NAME);
        $criteria->add(EmpresaPeer::IDEMPRESA, $this->idempresa);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdempresa();
    }

    /**
     * Generic method to set the primary key (idempresa column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdempresa($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdempresa();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Empresa (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setEmpresaNombrecomercial($this->getEmpresaNombrecomercial());
        $copyObj->setEmpresaRazonsocial($this->getEmpresaRazonsocial());
        $copyObj->setEmpresaEstatus($this->getEmpresaEstatus());
        $copyObj->setEmpresaAdministracion($this->getEmpresaAdministracion());

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

            foreach ($this->getDevolucions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addDevolucion($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getIngresos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addIngreso($relObj->copy($deepCopy));
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

            foreach ($this->getOrdentablajerias() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOrdentablajeria($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPlantillatablajerias() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPlantillatablajeria($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getProductos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addProducto($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getProductosucursalalmacens() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addProductosucursalalmacen($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getProveedors() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addProveedor($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getRequisicions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addRequisicion($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSucursals() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSucursal($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getTrabajadorespromedios() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTrabajadorespromedio($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getTrabajadorpromedios() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTrabajadorpromedio($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getUsuarioempresas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addUsuarioempresa($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getVentas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addVenta($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdempresa(NULL); // this is a auto-increment column, so set to default value
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
     * @return Empresa Clone of current object.
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
     * @return EmpresaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new EmpresaPeer();
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
        if ('Compra' == $relationName) {
            $this->initCompras();
        }
        if ('Devolucion' == $relationName) {
            $this->initDevolucions();
        }
        if ('Ingreso' == $relationName) {
            $this->initIngresos();
        }
        if ('Inventariomes' == $relationName) {
            $this->initInventariomess();
        }
        if ('Notacredito' == $relationName) {
            $this->initNotacreditos();
        }
        if ('Ordentablajeria' == $relationName) {
            $this->initOrdentablajerias();
        }
        if ('Plantillatablajeria' == $relationName) {
            $this->initPlantillatablajerias();
        }
        if ('Producto' == $relationName) {
            $this->initProductos();
        }
        if ('Productosucursalalmacen' == $relationName) {
            $this->initProductosucursalalmacens();
        }
        if ('Proveedor' == $relationName) {
            $this->initProveedors();
        }
        if ('Requisicion' == $relationName) {
            $this->initRequisicions();
        }
        if ('Sucursal' == $relationName) {
            $this->initSucursals();
        }
        if ('Trabajadorespromedio' == $relationName) {
            $this->initTrabajadorespromedios();
        }
        if ('Trabajadorpromedio' == $relationName) {
            $this->initTrabajadorpromedios();
        }
        if ('Usuarioempresa' == $relationName) {
            $this->initUsuarioempresas();
        }
        if ('Venta' == $relationName) {
            $this->initVentas();
        }
    }

    /**
     * Clears out the collCompras collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empresa The current object (for fluent API support)
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
     * If this Empresa is new, it will return
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
                    ->filterByEmpresa($this)
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
     * @return Empresa The current object (for fluent API support)
     */
    public function setCompras(PropelCollection $compras, PropelPDO $con = null)
    {
        $comprasToDelete = $this->getCompras(new Criteria(), $con)->diff($compras);


        $this->comprasScheduledForDeletion = $comprasToDelete;

        foreach ($comprasToDelete as $compraRemoved) {
            $compraRemoved->setEmpresa(null);
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
                ->filterByEmpresa($this)
                ->count($con);
        }

        return count($this->collCompras);
    }

    /**
     * Method called to associate a Compra object to this object
     * through the Compra foreign key attribute.
     *
     * @param    Compra $l Compra
     * @return Empresa The current object (for fluent API support)
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
        $compra->setEmpresa($this);
    }

    /**
     * @param	Compra $compra The compra object to remove.
     * @return Empresa The current object (for fluent API support)
     */
    public function removeCompra($compra)
    {
        if ($this->getCompras()->contains($compra)) {
            $this->collCompras->remove($this->collCompras->search($compra));
            if (null === $this->comprasScheduledForDeletion) {
                $this->comprasScheduledForDeletion = clone $this->collCompras;
                $this->comprasScheduledForDeletion->clear();
            }
            $this->comprasScheduledForDeletion[]= clone $compra;
            $compra->setEmpresa(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Compras from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Compra[] List of Compra objects
     */
    public function getComprasJoinAlmacen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CompraQuery::create(null, $criteria);
        $query->joinWith('Almacen', $join_behavior);

        return $this->getCompras($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Compras from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
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
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Compras from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
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
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Compras from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
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
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Compras from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
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
     * Clears out the collDevolucions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empresa The current object (for fluent API support)
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
     * If this Empresa is new, it will return
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
                    ->filterByEmpresa($this)
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
     * @return Empresa The current object (for fluent API support)
     */
    public function setDevolucions(PropelCollection $devolucions, PropelPDO $con = null)
    {
        $devolucionsToDelete = $this->getDevolucions(new Criteria(), $con)->diff($devolucions);


        $this->devolucionsScheduledForDeletion = $devolucionsToDelete;

        foreach ($devolucionsToDelete as $devolucionRemoved) {
            $devolucionRemoved->setEmpresa(null);
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
                ->filterByEmpresa($this)
                ->count($con);
        }

        return count($this->collDevolucions);
    }

    /**
     * Method called to associate a Devolucion object to this object
     * through the Devolucion foreign key attribute.
     *
     * @param    Devolucion $l Devolucion
     * @return Empresa The current object (for fluent API support)
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
        $devolucion->setEmpresa($this);
    }

    /**
     * @param	Devolucion $devolucion The devolucion object to remove.
     * @return Empresa The current object (for fluent API support)
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
            $devolucion->setEmpresa(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Devolucions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Devolucion[] List of Devolucion objects
     */
    public function getDevolucionsJoinAlmacen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = DevolucionQuery::create(null, $criteria);
        $query->joinWith('Almacen', $join_behavior);

        return $this->getDevolucions($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Devolucions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
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
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Devolucions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
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
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Devolucions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
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
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Devolucions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
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
     * Clears out the collIngresos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empresa The current object (for fluent API support)
     * @see        addIngresos()
     */
    public function clearIngresos()
    {
        $this->collIngresos = null; // important to set this to null since that means it is uninitialized
        $this->collIngresosPartial = null;

        return $this;
    }

    /**
     * reset is the collIngresos collection loaded partially
     *
     * @return void
     */
    public function resetPartialIngresos($v = true)
    {
        $this->collIngresosPartial = $v;
    }

    /**
     * Initializes the collIngresos collection.
     *
     * By default this just sets the collIngresos collection to an empty array (like clearcollIngresos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initIngresos($overrideExisting = true)
    {
        if (null !== $this->collIngresos && !$overrideExisting) {
            return;
        }
        $this->collIngresos = new PropelObjectCollection();
        $this->collIngresos->setModel('Ingreso');
    }

    /**
     * Gets an array of Ingreso objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empresa is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Ingreso[] List of Ingreso objects
     * @throws PropelException
     */
    public function getIngresos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collIngresosPartial && !$this->isNew();
        if (null === $this->collIngresos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collIngresos) {
                // return empty collection
                $this->initIngresos();
            } else {
                $collIngresos = IngresoQuery::create(null, $criteria)
                    ->filterByEmpresa($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collIngresosPartial && count($collIngresos)) {
                      $this->initIngresos(false);

                      foreach ($collIngresos as $obj) {
                        if (false == $this->collIngresos->contains($obj)) {
                          $this->collIngresos->append($obj);
                        }
                      }

                      $this->collIngresosPartial = true;
                    }

                    $collIngresos->getInternalIterator()->rewind();

                    return $collIngresos;
                }

                if ($partial && $this->collIngresos) {
                    foreach ($this->collIngresos as $obj) {
                        if ($obj->isNew()) {
                            $collIngresos[] = $obj;
                        }
                    }
                }

                $this->collIngresos = $collIngresos;
                $this->collIngresosPartial = false;
            }
        }

        return $this->collIngresos;
    }

    /**
     * Sets a collection of Ingreso objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ingresos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empresa The current object (for fluent API support)
     */
    public function setIngresos(PropelCollection $ingresos, PropelPDO $con = null)
    {
        $ingresosToDelete = $this->getIngresos(new Criteria(), $con)->diff($ingresos);


        $this->ingresosScheduledForDeletion = $ingresosToDelete;

        foreach ($ingresosToDelete as $ingresoRemoved) {
            $ingresoRemoved->setEmpresa(null);
        }

        $this->collIngresos = null;
        foreach ($ingresos as $ingreso) {
            $this->addIngreso($ingreso);
        }

        $this->collIngresos = $ingresos;
        $this->collIngresosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Ingreso objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Ingreso objects.
     * @throws PropelException
     */
    public function countIngresos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collIngresosPartial && !$this->isNew();
        if (null === $this->collIngresos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collIngresos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getIngresos());
            }
            $query = IngresoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpresa($this)
                ->count($con);
        }

        return count($this->collIngresos);
    }

    /**
     * Method called to associate a Ingreso object to this object
     * through the Ingreso foreign key attribute.
     *
     * @param    Ingreso $l Ingreso
     * @return Empresa The current object (for fluent API support)
     */
    public function addIngreso(Ingreso $l)
    {
        if ($this->collIngresos === null) {
            $this->initIngresos();
            $this->collIngresosPartial = true;
        }

        if (!in_array($l, $this->collIngresos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddIngreso($l);

            if ($this->ingresosScheduledForDeletion and $this->ingresosScheduledForDeletion->contains($l)) {
                $this->ingresosScheduledForDeletion->remove($this->ingresosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Ingreso $ingreso The ingreso object to add.
     */
    protected function doAddIngreso($ingreso)
    {
        $this->collIngresos[]= $ingreso;
        $ingreso->setEmpresa($this);
    }

    /**
     * @param	Ingreso $ingreso The ingreso object to remove.
     * @return Empresa The current object (for fluent API support)
     */
    public function removeIngreso($ingreso)
    {
        if ($this->getIngresos()->contains($ingreso)) {
            $this->collIngresos->remove($this->collIngresos->search($ingreso));
            if (null === $this->ingresosScheduledForDeletion) {
                $this->ingresosScheduledForDeletion = clone $this->collIngresos;
                $this->ingresosScheduledForDeletion->clear();
            }
            $this->ingresosScheduledForDeletion[]= clone $ingreso;
            $ingreso->setEmpresa(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Ingresos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ingreso[] List of Ingreso objects
     */
    public function getIngresosJoinUsuarioRelatedByIdauditor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = IngresoQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdauditor', $join_behavior);

        return $this->getIngresos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Ingresos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ingreso[] List of Ingreso objects
     */
    public function getIngresosJoinSucursal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = IngresoQuery::create(null, $criteria);
        $query->joinWith('Sucursal', $join_behavior);

        return $this->getIngresos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Ingresos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ingreso[] List of Ingreso objects
     */
    public function getIngresosJoinUsuarioRelatedByIdusuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = IngresoQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdusuario', $join_behavior);

        return $this->getIngresos($query, $con);
    }

    /**
     * Clears out the collInventariomess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empresa The current object (for fluent API support)
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
     * If this Empresa is new, it will return
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
                    ->filterByEmpresa($this)
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
     * @return Empresa The current object (for fluent API support)
     */
    public function setInventariomess(PropelCollection $inventariomess, PropelPDO $con = null)
    {
        $inventariomessToDelete = $this->getInventariomess(new Criteria(), $con)->diff($inventariomess);


        $this->inventariomessScheduledForDeletion = $inventariomessToDelete;

        foreach ($inventariomessToDelete as $inventariomesRemoved) {
            $inventariomesRemoved->setEmpresa(null);
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
                ->filterByEmpresa($this)
                ->count($con);
        }

        return count($this->collInventariomess);
    }

    /**
     * Method called to associate a Inventariomes object to this object
     * through the Inventariomes foreign key attribute.
     *
     * @param    Inventariomes $l Inventariomes
     * @return Empresa The current object (for fluent API support)
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
        $inventariomes->setEmpresa($this);
    }

    /**
     * @param	Inventariomes $inventariomes The inventariomes object to remove.
     * @return Empresa The current object (for fluent API support)
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
            $inventariomes->setEmpresa(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Inventariomess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Inventariomes[] List of Inventariomes objects
     */
    public function getInventariomessJoinAlmacen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = InventariomesQuery::create(null, $criteria);
        $query->joinWith('Almacen', $join_behavior);

        return $this->getInventariomess($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Inventariomess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
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
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Inventariomess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
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
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Inventariomess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
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
     * @return Empresa The current object (for fluent API support)
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
     * If this Empresa is new, it will return
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
                    ->filterByEmpresa($this)
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
     * @return Empresa The current object (for fluent API support)
     */
    public function setNotacreditos(PropelCollection $notacreditos, PropelPDO $con = null)
    {
        $notacreditosToDelete = $this->getNotacreditos(new Criteria(), $con)->diff($notacreditos);


        $this->notacreditosScheduledForDeletion = $notacreditosToDelete;

        foreach ($notacreditosToDelete as $notacreditoRemoved) {
            $notacreditoRemoved->setEmpresa(null);
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
                ->filterByEmpresa($this)
                ->count($con);
        }

        return count($this->collNotacreditos);
    }

    /**
     * Method called to associate a Notacredito object to this object
     * through the Notacredito foreign key attribute.
     *
     * @param    Notacredito $l Notacredito
     * @return Empresa The current object (for fluent API support)
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
        $notacredito->setEmpresa($this);
    }

    /**
     * @param	Notacredito $notacredito The notacredito object to remove.
     * @return Empresa The current object (for fluent API support)
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
            $notacredito->setEmpresa(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Notacreditos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Notacredito[] List of Notacredito objects
     */
    public function getNotacreditosJoinAlmacen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = NotacreditoQuery::create(null, $criteria);
        $query->joinWith('Almacen', $join_behavior);

        return $this->getNotacreditos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Notacreditos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
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
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Notacreditos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
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
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Notacreditos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
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
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Notacreditos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
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
     * Clears out the collOrdentablajerias collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empresa The current object (for fluent API support)
     * @see        addOrdentablajerias()
     */
    public function clearOrdentablajerias()
    {
        $this->collOrdentablajerias = null; // important to set this to null since that means it is uninitialized
        $this->collOrdentablajeriasPartial = null;

        return $this;
    }

    /**
     * reset is the collOrdentablajerias collection loaded partially
     *
     * @return void
     */
    public function resetPartialOrdentablajerias($v = true)
    {
        $this->collOrdentablajeriasPartial = $v;
    }

    /**
     * Initializes the collOrdentablajerias collection.
     *
     * By default this just sets the collOrdentablajerias collection to an empty array (like clearcollOrdentablajerias());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOrdentablajerias($overrideExisting = true)
    {
        if (null !== $this->collOrdentablajerias && !$overrideExisting) {
            return;
        }
        $this->collOrdentablajerias = new PropelObjectCollection();
        $this->collOrdentablajerias->setModel('Ordentablajeria');
    }

    /**
     * Gets an array of Ordentablajeria objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empresa is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Ordentablajeria[] List of Ordentablajeria objects
     * @throws PropelException
     */
    public function getOrdentablajerias($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOrdentablajeriasPartial && !$this->isNew();
        if (null === $this->collOrdentablajerias || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOrdentablajerias) {
                // return empty collection
                $this->initOrdentablajerias();
            } else {
                $collOrdentablajerias = OrdentablajeriaQuery::create(null, $criteria)
                    ->filterByEmpresa($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOrdentablajeriasPartial && count($collOrdentablajerias)) {
                      $this->initOrdentablajerias(false);

                      foreach ($collOrdentablajerias as $obj) {
                        if (false == $this->collOrdentablajerias->contains($obj)) {
                          $this->collOrdentablajerias->append($obj);
                        }
                      }

                      $this->collOrdentablajeriasPartial = true;
                    }

                    $collOrdentablajerias->getInternalIterator()->rewind();

                    return $collOrdentablajerias;
                }

                if ($partial && $this->collOrdentablajerias) {
                    foreach ($this->collOrdentablajerias as $obj) {
                        if ($obj->isNew()) {
                            $collOrdentablajerias[] = $obj;
                        }
                    }
                }

                $this->collOrdentablajerias = $collOrdentablajerias;
                $this->collOrdentablajeriasPartial = false;
            }
        }

        return $this->collOrdentablajerias;
    }

    /**
     * Sets a collection of Ordentablajeria objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ordentablajerias A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empresa The current object (for fluent API support)
     */
    public function setOrdentablajerias(PropelCollection $ordentablajerias, PropelPDO $con = null)
    {
        $ordentablajeriasToDelete = $this->getOrdentablajerias(new Criteria(), $con)->diff($ordentablajerias);


        $this->ordentablajeriasScheduledForDeletion = $ordentablajeriasToDelete;

        foreach ($ordentablajeriasToDelete as $ordentablajeriaRemoved) {
            $ordentablajeriaRemoved->setEmpresa(null);
        }

        $this->collOrdentablajerias = null;
        foreach ($ordentablajerias as $ordentablajeria) {
            $this->addOrdentablajeria($ordentablajeria);
        }

        $this->collOrdentablajerias = $ordentablajerias;
        $this->collOrdentablajeriasPartial = false;

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
    public function countOrdentablajerias(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOrdentablajeriasPartial && !$this->isNew();
        if (null === $this->collOrdentablajerias || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOrdentablajerias) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOrdentablajerias());
            }
            $query = OrdentablajeriaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpresa($this)
                ->count($con);
        }

        return count($this->collOrdentablajerias);
    }

    /**
     * Method called to associate a Ordentablajeria object to this object
     * through the Ordentablajeria foreign key attribute.
     *
     * @param    Ordentablajeria $l Ordentablajeria
     * @return Empresa The current object (for fluent API support)
     */
    public function addOrdentablajeria(Ordentablajeria $l)
    {
        if ($this->collOrdentablajerias === null) {
            $this->initOrdentablajerias();
            $this->collOrdentablajeriasPartial = true;
        }

        if (!in_array($l, $this->collOrdentablajerias->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOrdentablajeria($l);

            if ($this->ordentablajeriasScheduledForDeletion and $this->ordentablajeriasScheduledForDeletion->contains($l)) {
                $this->ordentablajeriasScheduledForDeletion->remove($this->ordentablajeriasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Ordentablajeria $ordentablajeria The ordentablajeria object to add.
     */
    protected function doAddOrdentablajeria($ordentablajeria)
    {
        $this->collOrdentablajerias[]= $ordentablajeria;
        $ordentablajeria->setEmpresa($this);
    }

    /**
     * @param	Ordentablajeria $ordentablajeria The ordentablajeria object to remove.
     * @return Empresa The current object (for fluent API support)
     */
    public function removeOrdentablajeria($ordentablajeria)
    {
        if ($this->getOrdentablajerias()->contains($ordentablajeria)) {
            $this->collOrdentablajerias->remove($this->collOrdentablajerias->search($ordentablajeria));
            if (null === $this->ordentablajeriasScheduledForDeletion) {
                $this->ordentablajeriasScheduledForDeletion = clone $this->collOrdentablajerias;
                $this->ordentablajeriasScheduledForDeletion->clear();
            }
            $this->ordentablajeriasScheduledForDeletion[]= clone $ordentablajeria;
            $ordentablajeria->setEmpresa(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Ordentablajerias from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ordentablajeria[] List of Ordentablajeria objects
     */
    public function getOrdentablajeriasJoinAlmacenRelatedByIdalmacendestino($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OrdentablajeriaQuery::create(null, $criteria);
        $query->joinWith('AlmacenRelatedByIdalmacendestino', $join_behavior);

        return $this->getOrdentablajerias($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Ordentablajerias from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ordentablajeria[] List of Ordentablajeria objects
     */
    public function getOrdentablajeriasJoinAlmacenRelatedByIdalmacenorigen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OrdentablajeriaQuery::create(null, $criteria);
        $query->joinWith('AlmacenRelatedByIdalmacenorigen', $join_behavior);

        return $this->getOrdentablajerias($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Ordentablajerias from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ordentablajeria[] List of Ordentablajeria objects
     */
    public function getOrdentablajeriasJoinUsuarioRelatedByIdauditor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OrdentablajeriaQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdauditor', $join_behavior);

        return $this->getOrdentablajerias($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Ordentablajerias from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ordentablajeria[] List of Ordentablajeria objects
     */
    public function getOrdentablajeriasJoinProducto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OrdentablajeriaQuery::create(null, $criteria);
        $query->joinWith('Producto', $join_behavior);

        return $this->getOrdentablajerias($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Ordentablajerias from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ordentablajeria[] List of Ordentablajeria objects
     */
    public function getOrdentablajeriasJoinSucursal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OrdentablajeriaQuery::create(null, $criteria);
        $query->joinWith('Sucursal', $join_behavior);

        return $this->getOrdentablajerias($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Ordentablajerias from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ordentablajeria[] List of Ordentablajeria objects
     */
    public function getOrdentablajeriasJoinUsuarioRelatedByIdusuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OrdentablajeriaQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdusuario', $join_behavior);

        return $this->getOrdentablajerias($query, $con);
    }

    /**
     * Clears out the collPlantillatablajerias collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empresa The current object (for fluent API support)
     * @see        addPlantillatablajerias()
     */
    public function clearPlantillatablajerias()
    {
        $this->collPlantillatablajerias = null; // important to set this to null since that means it is uninitialized
        $this->collPlantillatablajeriasPartial = null;

        return $this;
    }

    /**
     * reset is the collPlantillatablajerias collection loaded partially
     *
     * @return void
     */
    public function resetPartialPlantillatablajerias($v = true)
    {
        $this->collPlantillatablajeriasPartial = $v;
    }

    /**
     * Initializes the collPlantillatablajerias collection.
     *
     * By default this just sets the collPlantillatablajerias collection to an empty array (like clearcollPlantillatablajerias());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPlantillatablajerias($overrideExisting = true)
    {
        if (null !== $this->collPlantillatablajerias && !$overrideExisting) {
            return;
        }
        $this->collPlantillatablajerias = new PropelObjectCollection();
        $this->collPlantillatablajerias->setModel('Plantillatablajeria');
    }

    /**
     * Gets an array of Plantillatablajeria objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empresa is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Plantillatablajeria[] List of Plantillatablajeria objects
     * @throws PropelException
     */
    public function getPlantillatablajerias($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collPlantillatablajeriasPartial && !$this->isNew();
        if (null === $this->collPlantillatablajerias || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPlantillatablajerias) {
                // return empty collection
                $this->initPlantillatablajerias();
            } else {
                $collPlantillatablajerias = PlantillatablajeriaQuery::create(null, $criteria)
                    ->filterByEmpresa($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collPlantillatablajeriasPartial && count($collPlantillatablajerias)) {
                      $this->initPlantillatablajerias(false);

                      foreach ($collPlantillatablajerias as $obj) {
                        if (false == $this->collPlantillatablajerias->contains($obj)) {
                          $this->collPlantillatablajerias->append($obj);
                        }
                      }

                      $this->collPlantillatablajeriasPartial = true;
                    }

                    $collPlantillatablajerias->getInternalIterator()->rewind();

                    return $collPlantillatablajerias;
                }

                if ($partial && $this->collPlantillatablajerias) {
                    foreach ($this->collPlantillatablajerias as $obj) {
                        if ($obj->isNew()) {
                            $collPlantillatablajerias[] = $obj;
                        }
                    }
                }

                $this->collPlantillatablajerias = $collPlantillatablajerias;
                $this->collPlantillatablajeriasPartial = false;
            }
        }

        return $this->collPlantillatablajerias;
    }

    /**
     * Sets a collection of Plantillatablajeria objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $plantillatablajerias A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empresa The current object (for fluent API support)
     */
    public function setPlantillatablajerias(PropelCollection $plantillatablajerias, PropelPDO $con = null)
    {
        $plantillatablajeriasToDelete = $this->getPlantillatablajerias(new Criteria(), $con)->diff($plantillatablajerias);


        $this->plantillatablajeriasScheduledForDeletion = $plantillatablajeriasToDelete;

        foreach ($plantillatablajeriasToDelete as $plantillatablajeriaRemoved) {
            $plantillatablajeriaRemoved->setEmpresa(null);
        }

        $this->collPlantillatablajerias = null;
        foreach ($plantillatablajerias as $plantillatablajeria) {
            $this->addPlantillatablajeria($plantillatablajeria);
        }

        $this->collPlantillatablajerias = $plantillatablajerias;
        $this->collPlantillatablajeriasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Plantillatablajeria objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Plantillatablajeria objects.
     * @throws PropelException
     */
    public function countPlantillatablajerias(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collPlantillatablajeriasPartial && !$this->isNew();
        if (null === $this->collPlantillatablajerias || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPlantillatablajerias) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPlantillatablajerias());
            }
            $query = PlantillatablajeriaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpresa($this)
                ->count($con);
        }

        return count($this->collPlantillatablajerias);
    }

    /**
     * Method called to associate a Plantillatablajeria object to this object
     * through the Plantillatablajeria foreign key attribute.
     *
     * @param    Plantillatablajeria $l Plantillatablajeria
     * @return Empresa The current object (for fluent API support)
     */
    public function addPlantillatablajeria(Plantillatablajeria $l)
    {
        if ($this->collPlantillatablajerias === null) {
            $this->initPlantillatablajerias();
            $this->collPlantillatablajeriasPartial = true;
        }

        if (!in_array($l, $this->collPlantillatablajerias->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddPlantillatablajeria($l);

            if ($this->plantillatablajeriasScheduledForDeletion and $this->plantillatablajeriasScheduledForDeletion->contains($l)) {
                $this->plantillatablajeriasScheduledForDeletion->remove($this->plantillatablajeriasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Plantillatablajeria $plantillatablajeria The plantillatablajeria object to add.
     */
    protected function doAddPlantillatablajeria($plantillatablajeria)
    {
        $this->collPlantillatablajerias[]= $plantillatablajeria;
        $plantillatablajeria->setEmpresa($this);
    }

    /**
     * @param	Plantillatablajeria $plantillatablajeria The plantillatablajeria object to remove.
     * @return Empresa The current object (for fluent API support)
     */
    public function removePlantillatablajeria($plantillatablajeria)
    {
        if ($this->getPlantillatablajerias()->contains($plantillatablajeria)) {
            $this->collPlantillatablajerias->remove($this->collPlantillatablajerias->search($plantillatablajeria));
            if (null === $this->plantillatablajeriasScheduledForDeletion) {
                $this->plantillatablajeriasScheduledForDeletion = clone $this->collPlantillatablajerias;
                $this->plantillatablajeriasScheduledForDeletion->clear();
            }
            $this->plantillatablajeriasScheduledForDeletion[]= clone $plantillatablajeria;
            $plantillatablajeria->setEmpresa(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Plantillatablajerias from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Plantillatablajeria[] List of Plantillatablajeria objects
     */
    public function getPlantillatablajeriasJoinProducto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PlantillatablajeriaQuery::create(null, $criteria);
        $query->joinWith('Producto', $join_behavior);

        return $this->getPlantillatablajerias($query, $con);
    }

    /**
     * Clears out the collProductos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empresa The current object (for fluent API support)
     * @see        addProductos()
     */
    public function clearProductos()
    {
        $this->collProductos = null; // important to set this to null since that means it is uninitialized
        $this->collProductosPartial = null;

        return $this;
    }

    /**
     * reset is the collProductos collection loaded partially
     *
     * @return void
     */
    public function resetPartialProductos($v = true)
    {
        $this->collProductosPartial = $v;
    }

    /**
     * Initializes the collProductos collection.
     *
     * By default this just sets the collProductos collection to an empty array (like clearcollProductos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initProductos($overrideExisting = true)
    {
        if (null !== $this->collProductos && !$overrideExisting) {
            return;
        }
        $this->collProductos = new PropelObjectCollection();
        $this->collProductos->setModel('Producto');
    }

    /**
     * Gets an array of Producto objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empresa is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Producto[] List of Producto objects
     * @throws PropelException
     */
    public function getProductos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collProductosPartial && !$this->isNew();
        if (null === $this->collProductos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collProductos) {
                // return empty collection
                $this->initProductos();
            } else {
                $collProductos = ProductoQuery::create(null, $criteria)
                    ->filterByEmpresa($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collProductosPartial && count($collProductos)) {
                      $this->initProductos(false);

                      foreach ($collProductos as $obj) {
                        if (false == $this->collProductos->contains($obj)) {
                          $this->collProductos->append($obj);
                        }
                      }

                      $this->collProductosPartial = true;
                    }

                    $collProductos->getInternalIterator()->rewind();

                    return $collProductos;
                }

                if ($partial && $this->collProductos) {
                    foreach ($this->collProductos as $obj) {
                        if ($obj->isNew()) {
                            $collProductos[] = $obj;
                        }
                    }
                }

                $this->collProductos = $collProductos;
                $this->collProductosPartial = false;
            }
        }

        return $this->collProductos;
    }

    /**
     * Sets a collection of Producto objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $productos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empresa The current object (for fluent API support)
     */
    public function setProductos(PropelCollection $productos, PropelPDO $con = null)
    {
        $productosToDelete = $this->getProductos(new Criteria(), $con)->diff($productos);


        $this->productosScheduledForDeletion = $productosToDelete;

        foreach ($productosToDelete as $productoRemoved) {
            $productoRemoved->setEmpresa(null);
        }

        $this->collProductos = null;
        foreach ($productos as $producto) {
            $this->addProducto($producto);
        }

        $this->collProductos = $productos;
        $this->collProductosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Producto objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Producto objects.
     * @throws PropelException
     */
    public function countProductos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collProductosPartial && !$this->isNew();
        if (null === $this->collProductos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collProductos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getProductos());
            }
            $query = ProductoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpresa($this)
                ->count($con);
        }

        return count($this->collProductos);
    }

    /**
     * Method called to associate a Producto object to this object
     * through the Producto foreign key attribute.
     *
     * @param    Producto $l Producto
     * @return Empresa The current object (for fluent API support)
     */
    public function addProducto(Producto $l)
    {
        if ($this->collProductos === null) {
            $this->initProductos();
            $this->collProductosPartial = true;
        }

        if (!in_array($l, $this->collProductos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddProducto($l);

            if ($this->productosScheduledForDeletion and $this->productosScheduledForDeletion->contains($l)) {
                $this->productosScheduledForDeletion->remove($this->productosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Producto $producto The producto object to add.
     */
    protected function doAddProducto($producto)
    {
        $this->collProductos[]= $producto;
        $producto->setEmpresa($this);
    }

    /**
     * @param	Producto $producto The producto object to remove.
     * @return Empresa The current object (for fluent API support)
     */
    public function removeProducto($producto)
    {
        if ($this->getProductos()->contains($producto)) {
            $this->collProductos->remove($this->collProductos->search($producto));
            if (null === $this->productosScheduledForDeletion) {
                $this->productosScheduledForDeletion = clone $this->collProductos;
                $this->productosScheduledForDeletion->clear();
            }
            $this->productosScheduledForDeletion[]= clone $producto;
            $producto->setEmpresa(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Productos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Producto[] List of Producto objects
     */
    public function getProductosJoinCategoriaRelatedByIdcategoria($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProductoQuery::create(null, $criteria);
        $query->joinWith('CategoriaRelatedByIdcategoria', $join_behavior);

        return $this->getProductos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Productos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Producto[] List of Producto objects
     */
    public function getProductosJoinCategoriaRelatedByIdsubcategoria($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProductoQuery::create(null, $criteria);
        $query->joinWith('CategoriaRelatedByIdsubcategoria', $join_behavior);

        return $this->getProductos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Productos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Producto[] List of Producto objects
     */
    public function getProductosJoinUnidadmedida($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProductoQuery::create(null, $criteria);
        $query->joinWith('Unidadmedida', $join_behavior);

        return $this->getProductos($query, $con);
    }

    /**
     * Clears out the collProductosucursalalmacens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empresa The current object (for fluent API support)
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
     * If this Empresa is new, it will return
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
                    ->filterByEmpresa($this)
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
     * @return Empresa The current object (for fluent API support)
     */
    public function setProductosucursalalmacens(PropelCollection $productosucursalalmacens, PropelPDO $con = null)
    {
        $productosucursalalmacensToDelete = $this->getProductosucursalalmacens(new Criteria(), $con)->diff($productosucursalalmacens);


        $this->productosucursalalmacensScheduledForDeletion = $productosucursalalmacensToDelete;

        foreach ($productosucursalalmacensToDelete as $productosucursalalmacenRemoved) {
            $productosucursalalmacenRemoved->setEmpresa(null);
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
                ->filterByEmpresa($this)
                ->count($con);
        }

        return count($this->collProductosucursalalmacens);
    }

    /**
     * Method called to associate a Productosucursalalmacen object to this object
     * through the Productosucursalalmacen foreign key attribute.
     *
     * @param    Productosucursalalmacen $l Productosucursalalmacen
     * @return Empresa The current object (for fluent API support)
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
        $productosucursalalmacen->setEmpresa($this);
    }

    /**
     * @param	Productosucursalalmacen $productosucursalalmacen The productosucursalalmacen object to remove.
     * @return Empresa The current object (for fluent API support)
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
            $productosucursalalmacen->setEmpresa(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Productosucursalalmacens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Productosucursalalmacen[] List of Productosucursalalmacen objects
     */
    public function getProductosucursalalmacensJoinAlmacen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProductosucursalalmacenQuery::create(null, $criteria);
        $query->joinWith('Almacen', $join_behavior);

        return $this->getProductosucursalalmacens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Productosucursalalmacens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
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
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Productosucursalalmacens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
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
     * Clears out the collProveedors collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empresa The current object (for fluent API support)
     * @see        addProveedors()
     */
    public function clearProveedors()
    {
        $this->collProveedors = null; // important to set this to null since that means it is uninitialized
        $this->collProveedorsPartial = null;

        return $this;
    }

    /**
     * reset is the collProveedors collection loaded partially
     *
     * @return void
     */
    public function resetPartialProveedors($v = true)
    {
        $this->collProveedorsPartial = $v;
    }

    /**
     * Initializes the collProveedors collection.
     *
     * By default this just sets the collProveedors collection to an empty array (like clearcollProveedors());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initProveedors($overrideExisting = true)
    {
        if (null !== $this->collProveedors && !$overrideExisting) {
            return;
        }
        $this->collProveedors = new PropelObjectCollection();
        $this->collProveedors->setModel('Proveedor');
    }

    /**
     * Gets an array of Proveedor objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empresa is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Proveedor[] List of Proveedor objects
     * @throws PropelException
     */
    public function getProveedors($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collProveedorsPartial && !$this->isNew();
        if (null === $this->collProveedors || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collProveedors) {
                // return empty collection
                $this->initProveedors();
            } else {
                $collProveedors = ProveedorQuery::create(null, $criteria)
                    ->filterByEmpresa($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collProveedorsPartial && count($collProveedors)) {
                      $this->initProveedors(false);

                      foreach ($collProveedors as $obj) {
                        if (false == $this->collProveedors->contains($obj)) {
                          $this->collProveedors->append($obj);
                        }
                      }

                      $this->collProveedorsPartial = true;
                    }

                    $collProveedors->getInternalIterator()->rewind();

                    return $collProveedors;
                }

                if ($partial && $this->collProveedors) {
                    foreach ($this->collProveedors as $obj) {
                        if ($obj->isNew()) {
                            $collProveedors[] = $obj;
                        }
                    }
                }

                $this->collProveedors = $collProveedors;
                $this->collProveedorsPartial = false;
            }
        }

        return $this->collProveedors;
    }

    /**
     * Sets a collection of Proveedor objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $proveedors A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empresa The current object (for fluent API support)
     */
    public function setProveedors(PropelCollection $proveedors, PropelPDO $con = null)
    {
        $proveedorsToDelete = $this->getProveedors(new Criteria(), $con)->diff($proveedors);


        $this->proveedorsScheduledForDeletion = $proveedorsToDelete;

        foreach ($proveedorsToDelete as $proveedorRemoved) {
            $proveedorRemoved->setEmpresa(null);
        }

        $this->collProveedors = null;
        foreach ($proveedors as $proveedor) {
            $this->addProveedor($proveedor);
        }

        $this->collProveedors = $proveedors;
        $this->collProveedorsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Proveedor objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Proveedor objects.
     * @throws PropelException
     */
    public function countProveedors(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collProveedorsPartial && !$this->isNew();
        if (null === $this->collProveedors || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collProveedors) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getProveedors());
            }
            $query = ProveedorQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpresa($this)
                ->count($con);
        }

        return count($this->collProveedors);
    }

    /**
     * Method called to associate a Proveedor object to this object
     * through the Proveedor foreign key attribute.
     *
     * @param    Proveedor $l Proveedor
     * @return Empresa The current object (for fluent API support)
     */
    public function addProveedor(Proveedor $l)
    {
        if ($this->collProveedors === null) {
            $this->initProveedors();
            $this->collProveedorsPartial = true;
        }

        if (!in_array($l, $this->collProveedors->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddProveedor($l);

            if ($this->proveedorsScheduledForDeletion and $this->proveedorsScheduledForDeletion->contains($l)) {
                $this->proveedorsScheduledForDeletion->remove($this->proveedorsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Proveedor $proveedor The proveedor object to add.
     */
    protected function doAddProveedor($proveedor)
    {
        $this->collProveedors[]= $proveedor;
        $proveedor->setEmpresa($this);
    }

    /**
     * @param	Proveedor $proveedor The proveedor object to remove.
     * @return Empresa The current object (for fluent API support)
     */
    public function removeProveedor($proveedor)
    {
        if ($this->getProveedors()->contains($proveedor)) {
            $this->collProveedors->remove($this->collProveedors->search($proveedor));
            if (null === $this->proveedorsScheduledForDeletion) {
                $this->proveedorsScheduledForDeletion = clone $this->collProveedors;
                $this->proveedorsScheduledForDeletion->clear();
            }
            $this->proveedorsScheduledForDeletion[]= clone $proveedor;
            $proveedor->setEmpresa(null);
        }

        return $this;
    }

    /**
     * Clears out the collRequisicions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empresa The current object (for fluent API support)
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
     * If this Empresa is new, it will return
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
                    ->filterByEmpresa($this)
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
     * @return Empresa The current object (for fluent API support)
     */
    public function setRequisicions(PropelCollection $requisicions, PropelPDO $con = null)
    {
        $requisicionsToDelete = $this->getRequisicions(new Criteria(), $con)->diff($requisicions);


        $this->requisicionsScheduledForDeletion = $requisicionsToDelete;

        foreach ($requisicionsToDelete as $requisicionRemoved) {
            $requisicionRemoved->setEmpresa(null);
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
                ->filterByEmpresa($this)
                ->count($con);
        }

        return count($this->collRequisicions);
    }

    /**
     * Method called to associate a Requisicion object to this object
     * through the Requisicion foreign key attribute.
     *
     * @param    Requisicion $l Requisicion
     * @return Empresa The current object (for fluent API support)
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
        $requisicion->setEmpresa($this);
    }

    /**
     * @param	Requisicion $requisicion The requisicion object to remove.
     * @return Empresa The current object (for fluent API support)
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
            $requisicion->setEmpresa(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Requisicions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
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
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Requisicions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
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
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Requisicions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
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
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Requisicions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsJoinConceptosalida($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('Conceptosalida', $join_behavior);

        return $this->getRequisicions($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Requisicions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
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
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Requisicions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
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
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Requisicions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
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
     * Clears out the collSucursals collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empresa The current object (for fluent API support)
     * @see        addSucursals()
     */
    public function clearSucursals()
    {
        $this->collSucursals = null; // important to set this to null since that means it is uninitialized
        $this->collSucursalsPartial = null;

        return $this;
    }

    /**
     * reset is the collSucursals collection loaded partially
     *
     * @return void
     */
    public function resetPartialSucursals($v = true)
    {
        $this->collSucursalsPartial = $v;
    }

    /**
     * Initializes the collSucursals collection.
     *
     * By default this just sets the collSucursals collection to an empty array (like clearcollSucursals());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSucursals($overrideExisting = true)
    {
        if (null !== $this->collSucursals && !$overrideExisting) {
            return;
        }
        $this->collSucursals = new PropelObjectCollection();
        $this->collSucursals->setModel('Sucursal');
    }

    /**
     * Gets an array of Sucursal objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empresa is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Sucursal[] List of Sucursal objects
     * @throws PropelException
     */
    public function getSucursals($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collSucursalsPartial && !$this->isNew();
        if (null === $this->collSucursals || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSucursals) {
                // return empty collection
                $this->initSucursals();
            } else {
                $collSucursals = SucursalQuery::create(null, $criteria)
                    ->filterByEmpresa($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collSucursalsPartial && count($collSucursals)) {
                      $this->initSucursals(false);

                      foreach ($collSucursals as $obj) {
                        if (false == $this->collSucursals->contains($obj)) {
                          $this->collSucursals->append($obj);
                        }
                      }

                      $this->collSucursalsPartial = true;
                    }

                    $collSucursals->getInternalIterator()->rewind();

                    return $collSucursals;
                }

                if ($partial && $this->collSucursals) {
                    foreach ($this->collSucursals as $obj) {
                        if ($obj->isNew()) {
                            $collSucursals[] = $obj;
                        }
                    }
                }

                $this->collSucursals = $collSucursals;
                $this->collSucursalsPartial = false;
            }
        }

        return $this->collSucursals;
    }

    /**
     * Sets a collection of Sucursal objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $sucursals A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empresa The current object (for fluent API support)
     */
    public function setSucursals(PropelCollection $sucursals, PropelPDO $con = null)
    {
        $sucursalsToDelete = $this->getSucursals(new Criteria(), $con)->diff($sucursals);


        $this->sucursalsScheduledForDeletion = $sucursalsToDelete;

        foreach ($sucursalsToDelete as $sucursalRemoved) {
            $sucursalRemoved->setEmpresa(null);
        }

        $this->collSucursals = null;
        foreach ($sucursals as $sucursal) {
            $this->addSucursal($sucursal);
        }

        $this->collSucursals = $sucursals;
        $this->collSucursalsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Sucursal objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Sucursal objects.
     * @throws PropelException
     */
    public function countSucursals(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collSucursalsPartial && !$this->isNew();
        if (null === $this->collSucursals || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSucursals) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSucursals());
            }
            $query = SucursalQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpresa($this)
                ->count($con);
        }

        return count($this->collSucursals);
    }

    /**
     * Method called to associate a Sucursal object to this object
     * through the Sucursal foreign key attribute.
     *
     * @param    Sucursal $l Sucursal
     * @return Empresa The current object (for fluent API support)
     */
    public function addSucursal(Sucursal $l)
    {
        if ($this->collSucursals === null) {
            $this->initSucursals();
            $this->collSucursalsPartial = true;
        }

        if (!in_array($l, $this->collSucursals->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddSucursal($l);

            if ($this->sucursalsScheduledForDeletion and $this->sucursalsScheduledForDeletion->contains($l)) {
                $this->sucursalsScheduledForDeletion->remove($this->sucursalsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Sucursal $sucursal The sucursal object to add.
     */
    protected function doAddSucursal($sucursal)
    {
        $this->collSucursals[]= $sucursal;
        $sucursal->setEmpresa($this);
    }

    /**
     * @param	Sucursal $sucursal The sucursal object to remove.
     * @return Empresa The current object (for fluent API support)
     */
    public function removeSucursal($sucursal)
    {
        if ($this->getSucursals()->contains($sucursal)) {
            $this->collSucursals->remove($this->collSucursals->search($sucursal));
            if (null === $this->sucursalsScheduledForDeletion) {
                $this->sucursalsScheduledForDeletion = clone $this->collSucursals;
                $this->sucursalsScheduledForDeletion->clear();
            }
            $this->sucursalsScheduledForDeletion[]= clone $sucursal;
            $sucursal->setEmpresa(null);
        }

        return $this;
    }

    /**
     * Clears out the collTrabajadorespromedios collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empresa The current object (for fluent API support)
     * @see        addTrabajadorespromedios()
     */
    public function clearTrabajadorespromedios()
    {
        $this->collTrabajadorespromedios = null; // important to set this to null since that means it is uninitialized
        $this->collTrabajadorespromediosPartial = null;

        return $this;
    }

    /**
     * reset is the collTrabajadorespromedios collection loaded partially
     *
     * @return void
     */
    public function resetPartialTrabajadorespromedios($v = true)
    {
        $this->collTrabajadorespromediosPartial = $v;
    }

    /**
     * Initializes the collTrabajadorespromedios collection.
     *
     * By default this just sets the collTrabajadorespromedios collection to an empty array (like clearcollTrabajadorespromedios());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTrabajadorespromedios($overrideExisting = true)
    {
        if (null !== $this->collTrabajadorespromedios && !$overrideExisting) {
            return;
        }
        $this->collTrabajadorespromedios = new PropelObjectCollection();
        $this->collTrabajadorespromedios->setModel('Trabajadorespromedio');
    }

    /**
     * Gets an array of Trabajadorespromedio objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empresa is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Trabajadorespromedio[] List of Trabajadorespromedio objects
     * @throws PropelException
     */
    public function getTrabajadorespromedios($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTrabajadorespromediosPartial && !$this->isNew();
        if (null === $this->collTrabajadorespromedios || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTrabajadorespromedios) {
                // return empty collection
                $this->initTrabajadorespromedios();
            } else {
                $collTrabajadorespromedios = TrabajadorespromedioQuery::create(null, $criteria)
                    ->filterByEmpresa($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTrabajadorespromediosPartial && count($collTrabajadorespromedios)) {
                      $this->initTrabajadorespromedios(false);

                      foreach ($collTrabajadorespromedios as $obj) {
                        if (false == $this->collTrabajadorespromedios->contains($obj)) {
                          $this->collTrabajadorespromedios->append($obj);
                        }
                      }

                      $this->collTrabajadorespromediosPartial = true;
                    }

                    $collTrabajadorespromedios->getInternalIterator()->rewind();

                    return $collTrabajadorespromedios;
                }

                if ($partial && $this->collTrabajadorespromedios) {
                    foreach ($this->collTrabajadorespromedios as $obj) {
                        if ($obj->isNew()) {
                            $collTrabajadorespromedios[] = $obj;
                        }
                    }
                }

                $this->collTrabajadorespromedios = $collTrabajadorespromedios;
                $this->collTrabajadorespromediosPartial = false;
            }
        }

        return $this->collTrabajadorespromedios;
    }

    /**
     * Sets a collection of Trabajadorespromedio objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $trabajadorespromedios A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empresa The current object (for fluent API support)
     */
    public function setTrabajadorespromedios(PropelCollection $trabajadorespromedios, PropelPDO $con = null)
    {
        $trabajadorespromediosToDelete = $this->getTrabajadorespromedios(new Criteria(), $con)->diff($trabajadorespromedios);


        $this->trabajadorespromediosScheduledForDeletion = $trabajadorespromediosToDelete;

        foreach ($trabajadorespromediosToDelete as $trabajadorespromedioRemoved) {
            $trabajadorespromedioRemoved->setEmpresa(null);
        }

        $this->collTrabajadorespromedios = null;
        foreach ($trabajadorespromedios as $trabajadorespromedio) {
            $this->addTrabajadorespromedio($trabajadorespromedio);
        }

        $this->collTrabajadorespromedios = $trabajadorespromedios;
        $this->collTrabajadorespromediosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Trabajadorespromedio objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Trabajadorespromedio objects.
     * @throws PropelException
     */
    public function countTrabajadorespromedios(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTrabajadorespromediosPartial && !$this->isNew();
        if (null === $this->collTrabajadorespromedios || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTrabajadorespromedios) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTrabajadorespromedios());
            }
            $query = TrabajadorespromedioQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpresa($this)
                ->count($con);
        }

        return count($this->collTrabajadorespromedios);
    }

    /**
     * Method called to associate a Trabajadorespromedio object to this object
     * through the Trabajadorespromedio foreign key attribute.
     *
     * @param    Trabajadorespromedio $l Trabajadorespromedio
     * @return Empresa The current object (for fluent API support)
     */
    public function addTrabajadorespromedio(Trabajadorespromedio $l)
    {
        if ($this->collTrabajadorespromedios === null) {
            $this->initTrabajadorespromedios();
            $this->collTrabajadorespromediosPartial = true;
        }

        if (!in_array($l, $this->collTrabajadorespromedios->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTrabajadorespromedio($l);

            if ($this->trabajadorespromediosScheduledForDeletion and $this->trabajadorespromediosScheduledForDeletion->contains($l)) {
                $this->trabajadorespromediosScheduledForDeletion->remove($this->trabajadorespromediosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Trabajadorespromedio $trabajadorespromedio The trabajadorespromedio object to add.
     */
    protected function doAddTrabajadorespromedio($trabajadorespromedio)
    {
        $this->collTrabajadorespromedios[]= $trabajadorespromedio;
        $trabajadorespromedio->setEmpresa($this);
    }

    /**
     * @param	Trabajadorespromedio $trabajadorespromedio The trabajadorespromedio object to remove.
     * @return Empresa The current object (for fluent API support)
     */
    public function removeTrabajadorespromedio($trabajadorespromedio)
    {
        if ($this->getTrabajadorespromedios()->contains($trabajadorespromedio)) {
            $this->collTrabajadorespromedios->remove($this->collTrabajadorespromedios->search($trabajadorespromedio));
            if (null === $this->trabajadorespromediosScheduledForDeletion) {
                $this->trabajadorespromediosScheduledForDeletion = clone $this->collTrabajadorespromedios;
                $this->trabajadorespromediosScheduledForDeletion->clear();
            }
            $this->trabajadorespromediosScheduledForDeletion[]= clone $trabajadorespromedio;
            $trabajadorespromedio->setEmpresa(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Trabajadorespromedios from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Trabajadorespromedio[] List of Trabajadorespromedio objects
     */
    public function getTrabajadorespromediosJoinSucursal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TrabajadorespromedioQuery::create(null, $criteria);
        $query->joinWith('Sucursal', $join_behavior);

        return $this->getTrabajadorespromedios($query, $con);
    }

    /**
     * Clears out the collTrabajadorpromedios collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empresa The current object (for fluent API support)
     * @see        addTrabajadorpromedios()
     */
    public function clearTrabajadorpromedios()
    {
        $this->collTrabajadorpromedios = null; // important to set this to null since that means it is uninitialized
        $this->collTrabajadorpromediosPartial = null;

        return $this;
    }

    /**
     * reset is the collTrabajadorpromedios collection loaded partially
     *
     * @return void
     */
    public function resetPartialTrabajadorpromedios($v = true)
    {
        $this->collTrabajadorpromediosPartial = $v;
    }

    /**
     * Initializes the collTrabajadorpromedios collection.
     *
     * By default this just sets the collTrabajadorpromedios collection to an empty array (like clearcollTrabajadorpromedios());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTrabajadorpromedios($overrideExisting = true)
    {
        if (null !== $this->collTrabajadorpromedios && !$overrideExisting) {
            return;
        }
        $this->collTrabajadorpromedios = new PropelObjectCollection();
        $this->collTrabajadorpromedios->setModel('Trabajadorpromedio');
    }

    /**
     * Gets an array of Trabajadorpromedio objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empresa is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Trabajadorpromedio[] List of Trabajadorpromedio objects
     * @throws PropelException
     */
    public function getTrabajadorpromedios($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTrabajadorpromediosPartial && !$this->isNew();
        if (null === $this->collTrabajadorpromedios || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTrabajadorpromedios) {
                // return empty collection
                $this->initTrabajadorpromedios();
            } else {
                $collTrabajadorpromedios = TrabajadorpromedioQuery::create(null, $criteria)
                    ->filterByEmpresa($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTrabajadorpromediosPartial && count($collTrabajadorpromedios)) {
                      $this->initTrabajadorpromedios(false);

                      foreach ($collTrabajadorpromedios as $obj) {
                        if (false == $this->collTrabajadorpromedios->contains($obj)) {
                          $this->collTrabajadorpromedios->append($obj);
                        }
                      }

                      $this->collTrabajadorpromediosPartial = true;
                    }

                    $collTrabajadorpromedios->getInternalIterator()->rewind();

                    return $collTrabajadorpromedios;
                }

                if ($partial && $this->collTrabajadorpromedios) {
                    foreach ($this->collTrabajadorpromedios as $obj) {
                        if ($obj->isNew()) {
                            $collTrabajadorpromedios[] = $obj;
                        }
                    }
                }

                $this->collTrabajadorpromedios = $collTrabajadorpromedios;
                $this->collTrabajadorpromediosPartial = false;
            }
        }

        return $this->collTrabajadorpromedios;
    }

    /**
     * Sets a collection of Trabajadorpromedio objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $trabajadorpromedios A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empresa The current object (for fluent API support)
     */
    public function setTrabajadorpromedios(PropelCollection $trabajadorpromedios, PropelPDO $con = null)
    {
        $trabajadorpromediosToDelete = $this->getTrabajadorpromedios(new Criteria(), $con)->diff($trabajadorpromedios);


        $this->trabajadorpromediosScheduledForDeletion = $trabajadorpromediosToDelete;

        foreach ($trabajadorpromediosToDelete as $trabajadorpromedioRemoved) {
            $trabajadorpromedioRemoved->setEmpresa(null);
        }

        $this->collTrabajadorpromedios = null;
        foreach ($trabajadorpromedios as $trabajadorpromedio) {
            $this->addTrabajadorpromedio($trabajadorpromedio);
        }

        $this->collTrabajadorpromedios = $trabajadorpromedios;
        $this->collTrabajadorpromediosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Trabajadorpromedio objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Trabajadorpromedio objects.
     * @throws PropelException
     */
    public function countTrabajadorpromedios(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTrabajadorpromediosPartial && !$this->isNew();
        if (null === $this->collTrabajadorpromedios || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTrabajadorpromedios) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTrabajadorpromedios());
            }
            $query = TrabajadorpromedioQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpresa($this)
                ->count($con);
        }

        return count($this->collTrabajadorpromedios);
    }

    /**
     * Method called to associate a Trabajadorpromedio object to this object
     * through the Trabajadorpromedio foreign key attribute.
     *
     * @param    Trabajadorpromedio $l Trabajadorpromedio
     * @return Empresa The current object (for fluent API support)
     */
    public function addTrabajadorpromedio(Trabajadorpromedio $l)
    {
        if ($this->collTrabajadorpromedios === null) {
            $this->initTrabajadorpromedios();
            $this->collTrabajadorpromediosPartial = true;
        }

        if (!in_array($l, $this->collTrabajadorpromedios->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTrabajadorpromedio($l);

            if ($this->trabajadorpromediosScheduledForDeletion and $this->trabajadorpromediosScheduledForDeletion->contains($l)) {
                $this->trabajadorpromediosScheduledForDeletion->remove($this->trabajadorpromediosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Trabajadorpromedio $trabajadorpromedio The trabajadorpromedio object to add.
     */
    protected function doAddTrabajadorpromedio($trabajadorpromedio)
    {
        $this->collTrabajadorpromedios[]= $trabajadorpromedio;
        $trabajadorpromedio->setEmpresa($this);
    }

    /**
     * @param	Trabajadorpromedio $trabajadorpromedio The trabajadorpromedio object to remove.
     * @return Empresa The current object (for fluent API support)
     */
    public function removeTrabajadorpromedio($trabajadorpromedio)
    {
        if ($this->getTrabajadorpromedios()->contains($trabajadorpromedio)) {
            $this->collTrabajadorpromedios->remove($this->collTrabajadorpromedios->search($trabajadorpromedio));
            if (null === $this->trabajadorpromediosScheduledForDeletion) {
                $this->trabajadorpromediosScheduledForDeletion = clone $this->collTrabajadorpromedios;
                $this->trabajadorpromediosScheduledForDeletion->clear();
            }
            $this->trabajadorpromediosScheduledForDeletion[]= clone $trabajadorpromedio;
            $trabajadorpromedio->setEmpresa(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Trabajadorpromedios from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Trabajadorpromedio[] List of Trabajadorpromedio objects
     */
    public function getTrabajadorpromediosJoinSucursal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TrabajadorpromedioQuery::create(null, $criteria);
        $query->joinWith('Sucursal', $join_behavior);

        return $this->getTrabajadorpromedios($query, $con);
    }

    /**
     * Clears out the collUsuarioempresas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empresa The current object (for fluent API support)
     * @see        addUsuarioempresas()
     */
    public function clearUsuarioempresas()
    {
        $this->collUsuarioempresas = null; // important to set this to null since that means it is uninitialized
        $this->collUsuarioempresasPartial = null;

        return $this;
    }

    /**
     * reset is the collUsuarioempresas collection loaded partially
     *
     * @return void
     */
    public function resetPartialUsuarioempresas($v = true)
    {
        $this->collUsuarioempresasPartial = $v;
    }

    /**
     * Initializes the collUsuarioempresas collection.
     *
     * By default this just sets the collUsuarioempresas collection to an empty array (like clearcollUsuarioempresas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initUsuarioempresas($overrideExisting = true)
    {
        if (null !== $this->collUsuarioempresas && !$overrideExisting) {
            return;
        }
        $this->collUsuarioempresas = new PropelObjectCollection();
        $this->collUsuarioempresas->setModel('Usuarioempresa');
    }

    /**
     * Gets an array of Usuarioempresa objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empresa is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Usuarioempresa[] List of Usuarioempresa objects
     * @throws PropelException
     */
    public function getUsuarioempresas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collUsuarioempresasPartial && !$this->isNew();
        if (null === $this->collUsuarioempresas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collUsuarioempresas) {
                // return empty collection
                $this->initUsuarioempresas();
            } else {
                $collUsuarioempresas = UsuarioempresaQuery::create(null, $criteria)
                    ->filterByEmpresa($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collUsuarioempresasPartial && count($collUsuarioempresas)) {
                      $this->initUsuarioempresas(false);

                      foreach ($collUsuarioempresas as $obj) {
                        if (false == $this->collUsuarioempresas->contains($obj)) {
                          $this->collUsuarioempresas->append($obj);
                        }
                      }

                      $this->collUsuarioempresasPartial = true;
                    }

                    $collUsuarioempresas->getInternalIterator()->rewind();

                    return $collUsuarioempresas;
                }

                if ($partial && $this->collUsuarioempresas) {
                    foreach ($this->collUsuarioempresas as $obj) {
                        if ($obj->isNew()) {
                            $collUsuarioempresas[] = $obj;
                        }
                    }
                }

                $this->collUsuarioempresas = $collUsuarioempresas;
                $this->collUsuarioempresasPartial = false;
            }
        }

        return $this->collUsuarioempresas;
    }

    /**
     * Sets a collection of Usuarioempresa objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $usuarioempresas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empresa The current object (for fluent API support)
     */
    public function setUsuarioempresas(PropelCollection $usuarioempresas, PropelPDO $con = null)
    {
        $usuarioempresasToDelete = $this->getUsuarioempresas(new Criteria(), $con)->diff($usuarioempresas);


        $this->usuarioempresasScheduledForDeletion = $usuarioempresasToDelete;

        foreach ($usuarioempresasToDelete as $usuarioempresaRemoved) {
            $usuarioempresaRemoved->setEmpresa(null);
        }

        $this->collUsuarioempresas = null;
        foreach ($usuarioempresas as $usuarioempresa) {
            $this->addUsuarioempresa($usuarioempresa);
        }

        $this->collUsuarioempresas = $usuarioempresas;
        $this->collUsuarioempresasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Usuarioempresa objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Usuarioempresa objects.
     * @throws PropelException
     */
    public function countUsuarioempresas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collUsuarioempresasPartial && !$this->isNew();
        if (null === $this->collUsuarioempresas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collUsuarioempresas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getUsuarioempresas());
            }
            $query = UsuarioempresaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpresa($this)
                ->count($con);
        }

        return count($this->collUsuarioempresas);
    }

    /**
     * Method called to associate a Usuarioempresa object to this object
     * through the Usuarioempresa foreign key attribute.
     *
     * @param    Usuarioempresa $l Usuarioempresa
     * @return Empresa The current object (for fluent API support)
     */
    public function addUsuarioempresa(Usuarioempresa $l)
    {
        if ($this->collUsuarioempresas === null) {
            $this->initUsuarioempresas();
            $this->collUsuarioempresasPartial = true;
        }

        if (!in_array($l, $this->collUsuarioempresas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddUsuarioempresa($l);

            if ($this->usuarioempresasScheduledForDeletion and $this->usuarioempresasScheduledForDeletion->contains($l)) {
                $this->usuarioempresasScheduledForDeletion->remove($this->usuarioempresasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Usuarioempresa $usuarioempresa The usuarioempresa object to add.
     */
    protected function doAddUsuarioempresa($usuarioempresa)
    {
        $this->collUsuarioempresas[]= $usuarioempresa;
        $usuarioempresa->setEmpresa($this);
    }

    /**
     * @param	Usuarioempresa $usuarioempresa The usuarioempresa object to remove.
     * @return Empresa The current object (for fluent API support)
     */
    public function removeUsuarioempresa($usuarioempresa)
    {
        if ($this->getUsuarioempresas()->contains($usuarioempresa)) {
            $this->collUsuarioempresas->remove($this->collUsuarioempresas->search($usuarioempresa));
            if (null === $this->usuarioempresasScheduledForDeletion) {
                $this->usuarioempresasScheduledForDeletion = clone $this->collUsuarioempresas;
                $this->usuarioempresasScheduledForDeletion->clear();
            }
            $this->usuarioempresasScheduledForDeletion[]= clone $usuarioempresa;
            $usuarioempresa->setEmpresa(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Usuarioempresas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Usuarioempresa[] List of Usuarioempresa objects
     */
    public function getUsuarioempresasJoinUsuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = UsuarioempresaQuery::create(null, $criteria);
        $query->joinWith('Usuario', $join_behavior);

        return $this->getUsuarioempresas($query, $con);
    }

    /**
     * Clears out the collVentas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empresa The current object (for fluent API support)
     * @see        addVentas()
     */
    public function clearVentas()
    {
        $this->collVentas = null; // important to set this to null since that means it is uninitialized
        $this->collVentasPartial = null;

        return $this;
    }

    /**
     * reset is the collVentas collection loaded partially
     *
     * @return void
     */
    public function resetPartialVentas($v = true)
    {
        $this->collVentasPartial = $v;
    }

    /**
     * Initializes the collVentas collection.
     *
     * By default this just sets the collVentas collection to an empty array (like clearcollVentas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initVentas($overrideExisting = true)
    {
        if (null !== $this->collVentas && !$overrideExisting) {
            return;
        }
        $this->collVentas = new PropelObjectCollection();
        $this->collVentas->setModel('Venta');
    }

    /**
     * Gets an array of Venta objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empresa is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Venta[] List of Venta objects
     * @throws PropelException
     */
    public function getVentas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collVentasPartial && !$this->isNew();
        if (null === $this->collVentas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collVentas) {
                // return empty collection
                $this->initVentas();
            } else {
                $collVentas = VentaQuery::create(null, $criteria)
                    ->filterByEmpresa($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collVentasPartial && count($collVentas)) {
                      $this->initVentas(false);

                      foreach ($collVentas as $obj) {
                        if (false == $this->collVentas->contains($obj)) {
                          $this->collVentas->append($obj);
                        }
                      }

                      $this->collVentasPartial = true;
                    }

                    $collVentas->getInternalIterator()->rewind();

                    return $collVentas;
                }

                if ($partial && $this->collVentas) {
                    foreach ($this->collVentas as $obj) {
                        if ($obj->isNew()) {
                            $collVentas[] = $obj;
                        }
                    }
                }

                $this->collVentas = $collVentas;
                $this->collVentasPartial = false;
            }
        }

        return $this->collVentas;
    }

    /**
     * Sets a collection of Venta objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ventas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empresa The current object (for fluent API support)
     */
    public function setVentas(PropelCollection $ventas, PropelPDO $con = null)
    {
        $ventasToDelete = $this->getVentas(new Criteria(), $con)->diff($ventas);


        $this->ventasScheduledForDeletion = $ventasToDelete;

        foreach ($ventasToDelete as $ventaRemoved) {
            $ventaRemoved->setEmpresa(null);
        }

        $this->collVentas = null;
        foreach ($ventas as $venta) {
            $this->addVenta($venta);
        }

        $this->collVentas = $ventas;
        $this->collVentasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Venta objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Venta objects.
     * @throws PropelException
     */
    public function countVentas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collVentasPartial && !$this->isNew();
        if (null === $this->collVentas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collVentas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getVentas());
            }
            $query = VentaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpresa($this)
                ->count($con);
        }

        return count($this->collVentas);
    }

    /**
     * Method called to associate a Venta object to this object
     * through the Venta foreign key attribute.
     *
     * @param    Venta $l Venta
     * @return Empresa The current object (for fluent API support)
     */
    public function addVenta(Venta $l)
    {
        if ($this->collVentas === null) {
            $this->initVentas();
            $this->collVentasPartial = true;
        }

        if (!in_array($l, $this->collVentas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddVenta($l);

            if ($this->ventasScheduledForDeletion and $this->ventasScheduledForDeletion->contains($l)) {
                $this->ventasScheduledForDeletion->remove($this->ventasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Venta $venta The venta object to add.
     */
    protected function doAddVenta($venta)
    {
        $this->collVentas[]= $venta;
        $venta->setEmpresa($this);
    }

    /**
     * @param	Venta $venta The venta object to remove.
     * @return Empresa The current object (for fluent API support)
     */
    public function removeVenta($venta)
    {
        if ($this->getVentas()->contains($venta)) {
            $this->collVentas->remove($this->collVentas->search($venta));
            if (null === $this->ventasScheduledForDeletion) {
                $this->ventasScheduledForDeletion = clone $this->collVentas;
                $this->ventasScheduledForDeletion->clear();
            }
            $this->ventasScheduledForDeletion[]= clone $venta;
            $venta->setEmpresa(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Ventas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Venta[] List of Venta objects
     */
    public function getVentasJoinAlmacen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VentaQuery::create(null, $criteria);
        $query->joinWith('Almacen', $join_behavior);

        return $this->getVentas($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Ventas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Venta[] List of Venta objects
     */
    public function getVentasJoinUsuarioRelatedByIdauditor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VentaQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdauditor', $join_behavior);

        return $this->getVentas($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Ventas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Venta[] List of Venta objects
     */
    public function getVentasJoinSucursal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VentaQuery::create(null, $criteria);
        $query->joinWith('Sucursal', $join_behavior);

        return $this->getVentas($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empresa is new, it will return
     * an empty collection; or if this Empresa has previously
     * been saved, it will retrieve related Ventas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empresa.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Venta[] List of Venta objects
     */
    public function getVentasJoinUsuarioRelatedByIdusuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VentaQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdusuario', $join_behavior);

        return $this->getVentas($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idempresa = null;
        $this->empresa_nombrecomercial = null;
        $this->empresa_razonsocial = null;
        $this->empresa_estatus = null;
        $this->empresa_administracion = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
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
            if ($this->collDevolucions) {
                foreach ($this->collDevolucions as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collIngresos) {
                foreach ($this->collIngresos as $o) {
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
            if ($this->collOrdentablajerias) {
                foreach ($this->collOrdentablajerias as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPlantillatablajerias) {
                foreach ($this->collPlantillatablajerias as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collProductos) {
                foreach ($this->collProductos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collProductosucursalalmacens) {
                foreach ($this->collProductosucursalalmacens as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collProveedors) {
                foreach ($this->collProveedors as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collRequisicions) {
                foreach ($this->collRequisicions as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSucursals) {
                foreach ($this->collSucursals as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collTrabajadorespromedios) {
                foreach ($this->collTrabajadorespromedios as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collTrabajadorpromedios) {
                foreach ($this->collTrabajadorpromedios as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collUsuarioempresas) {
                foreach ($this->collUsuarioempresas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collVentas) {
                foreach ($this->collVentas as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCompras instanceof PropelCollection) {
            $this->collCompras->clearIterator();
        }
        $this->collCompras = null;
        if ($this->collDevolucions instanceof PropelCollection) {
            $this->collDevolucions->clearIterator();
        }
        $this->collDevolucions = null;
        if ($this->collIngresos instanceof PropelCollection) {
            $this->collIngresos->clearIterator();
        }
        $this->collIngresos = null;
        if ($this->collInventariomess instanceof PropelCollection) {
            $this->collInventariomess->clearIterator();
        }
        $this->collInventariomess = null;
        if ($this->collNotacreditos instanceof PropelCollection) {
            $this->collNotacreditos->clearIterator();
        }
        $this->collNotacreditos = null;
        if ($this->collOrdentablajerias instanceof PropelCollection) {
            $this->collOrdentablajerias->clearIterator();
        }
        $this->collOrdentablajerias = null;
        if ($this->collPlantillatablajerias instanceof PropelCollection) {
            $this->collPlantillatablajerias->clearIterator();
        }
        $this->collPlantillatablajerias = null;
        if ($this->collProductos instanceof PropelCollection) {
            $this->collProductos->clearIterator();
        }
        $this->collProductos = null;
        if ($this->collProductosucursalalmacens instanceof PropelCollection) {
            $this->collProductosucursalalmacens->clearIterator();
        }
        $this->collProductosucursalalmacens = null;
        if ($this->collProveedors instanceof PropelCollection) {
            $this->collProveedors->clearIterator();
        }
        $this->collProveedors = null;
        if ($this->collRequisicions instanceof PropelCollection) {
            $this->collRequisicions->clearIterator();
        }
        $this->collRequisicions = null;
        if ($this->collSucursals instanceof PropelCollection) {
            $this->collSucursals->clearIterator();
        }
        $this->collSucursals = null;
        if ($this->collTrabajadorespromedios instanceof PropelCollection) {
            $this->collTrabajadorespromedios->clearIterator();
        }
        $this->collTrabajadorespromedios = null;
        if ($this->collTrabajadorpromedios instanceof PropelCollection) {
            $this->collTrabajadorpromedios->clearIterator();
        }
        $this->collTrabajadorpromedios = null;
        if ($this->collUsuarioempresas instanceof PropelCollection) {
            $this->collUsuarioempresas->clearIterator();
        }
        $this->collUsuarioempresas = null;
        if ($this->collVentas instanceof PropelCollection) {
            $this->collVentas->clearIterator();
        }
        $this->collVentas = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(EmpresaPeer::DEFAULT_STRING_FORMAT);
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
