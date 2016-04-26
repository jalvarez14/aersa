<?php


/**
 * Base class that represents a row from the 'sucursal' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseSucursal extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SucursalPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SucursalPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idsucursal field.
     * @var        int
     */
    protected $idsucursal;

    /**
     * The value for the idempresa field.
     * @var        int
     */
    protected $idempresa;

    /**
     * The value for the sucursal_nombre field.
     * @var        string
     */
    protected $sucursal_nombre;

    /**
     * The value for the sucursal_habilitarproductos field.
     * Note: this column has a database default value of: true
     * @var        boolean
     */
    protected $sucursal_habilitarproductos;

    /**
     * The value for the sucursal_habilitarrecetas field.
     * Note: this column has a database default value of: true
     * @var        boolean
     */
    protected $sucursal_habilitarrecetas;

    /**
     * The value for the sucursal_estatus field.
     * Note: this column has a database default value of: true
     * @var        boolean
     */
    protected $sucursal_estatus;

    /**
     * The value for the sucursal_anioactivo field.
     * @var        int
     */
    protected $sucursal_anioactivo;

    /**
     * The value for the sucursal_mesactivo field.
     * @var        int
     */
    protected $sucursal_mesactivo;

    /**
     * @var        Empresa
     */
    protected $aEmpresa;

    /**
     * @var        PropelObjectCollection|Almacen[] Collection to store aggregation of Almacen objects.
     */
    protected $collAlmacens;
    protected $collAlmacensPartial;

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
     * @var        PropelObjectCollection|Requisicion[] Collection to store aggregation of Requisicion objects.
     */
    protected $collRequisicionsRelatedByIdsucursaldestino;
    protected $collRequisicionsRelatedByIdsucursaldestinoPartial;

    /**
     * @var        PropelObjectCollection|Requisicion[] Collection to store aggregation of Requisicion objects.
     */
    protected $collRequisicionsRelatedByIdsucursalorigen;
    protected $collRequisicionsRelatedByIdsucursalorigenPartial;

    /**
     * @var        PropelObjectCollection|Trabajadorpromedio[] Collection to store aggregation of Trabajadorpromedio objects.
     */
    protected $collTrabajadorpromedios;
    protected $collTrabajadorpromediosPartial;

    /**
     * @var        PropelObjectCollection|Usuariosucursal[] Collection to store aggregation of Usuariosucursal objects.
     */
    protected $collUsuariosucursals;
    protected $collUsuariosucursalsPartial;

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
    protected $almacensScheduledForDeletion = null;

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
    protected $requisicionsRelatedByIdsucursaldestinoScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $requisicionsRelatedByIdsucursalorigenScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $trabajadorpromediosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $usuariosucursalsScheduledForDeletion = null;

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
        $this->sucursal_habilitarproductos = true;
        $this->sucursal_habilitarrecetas = true;
        $this->sucursal_estatus = true;
    }

    /**
     * Initializes internal state of BaseSucursal object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
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
     * Get the [idempresa] column value.
     *
     * @return int
     */
    public function getIdempresa()
    {

        return $this->idempresa;
    }

    /**
     * Get the [sucursal_nombre] column value.
     *
     * @return string
     */
    public function getSucursalNombre()
    {

        return $this->sucursal_nombre;
    }

    /**
     * Get the [sucursal_habilitarproductos] column value.
     *
     * @return boolean
     */
    public function getSucursalHabilitarproductos()
    {

        return $this->sucursal_habilitarproductos;
    }

    /**
     * Get the [sucursal_habilitarrecetas] column value.
     *
     * @return boolean
     */
    public function getSucursalHabilitarrecetas()
    {

        return $this->sucursal_habilitarrecetas;
    }

    /**
     * Get the [sucursal_estatus] column value.
     *
     * @return boolean
     */
    public function getSucursalEstatus()
    {

        return $this->sucursal_estatus;
    }

    /**
     * Get the [sucursal_anioactivo] column value.
     *
     * @return int
     */
    public function getSucursalAnioactivo()
    {

        return $this->sucursal_anioactivo;
    }

    /**
     * Get the [sucursal_mesactivo] column value.
     *
     * @return int
     */
    public function getSucursalMesactivo()
    {

        return $this->sucursal_mesactivo;
    }

    /**
     * Set the value of [idsucursal] column.
     *
     * @param  int $v new value
     * @return Sucursal The current object (for fluent API support)
     */
    public function setIdsucursal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idsucursal !== $v) {
            $this->idsucursal = $v;
            $this->modifiedColumns[] = SucursalPeer::IDSUCURSAL;
        }


        return $this;
    } // setIdsucursal()

    /**
     * Set the value of [idempresa] column.
     *
     * @param  int $v new value
     * @return Sucursal The current object (for fluent API support)
     */
    public function setIdempresa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempresa !== $v) {
            $this->idempresa = $v;
            $this->modifiedColumns[] = SucursalPeer::IDEMPRESA;
        }

        if ($this->aEmpresa !== null && $this->aEmpresa->getIdempresa() !== $v) {
            $this->aEmpresa = null;
        }


        return $this;
    } // setIdempresa()

    /**
     * Set the value of [sucursal_nombre] column.
     *
     * @param  string $v new value
     * @return Sucursal The current object (for fluent API support)
     */
    public function setSucursalNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sucursal_nombre !== $v) {
            $this->sucursal_nombre = $v;
            $this->modifiedColumns[] = SucursalPeer::SUCURSAL_NOMBRE;
        }


        return $this;
    } // setSucursalNombre()

    /**
     * Sets the value of the [sucursal_habilitarproductos] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Sucursal The current object (for fluent API support)
     */
    public function setSucursalHabilitarproductos($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->sucursal_habilitarproductos !== $v) {
            $this->sucursal_habilitarproductos = $v;
            $this->modifiedColumns[] = SucursalPeer::SUCURSAL_HABILITARPRODUCTOS;
        }


        return $this;
    } // setSucursalHabilitarproductos()

    /**
     * Sets the value of the [sucursal_habilitarrecetas] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Sucursal The current object (for fluent API support)
     */
    public function setSucursalHabilitarrecetas($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->sucursal_habilitarrecetas !== $v) {
            $this->sucursal_habilitarrecetas = $v;
            $this->modifiedColumns[] = SucursalPeer::SUCURSAL_HABILITARRECETAS;
        }


        return $this;
    } // setSucursalHabilitarrecetas()

    /**
     * Sets the value of the [sucursal_estatus] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Sucursal The current object (for fluent API support)
     */
    public function setSucursalEstatus($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->sucursal_estatus !== $v) {
            $this->sucursal_estatus = $v;
            $this->modifiedColumns[] = SucursalPeer::SUCURSAL_ESTATUS;
        }


        return $this;
    } // setSucursalEstatus()

    /**
     * Set the value of [sucursal_anioactivo] column.
     *
     * @param  int $v new value
     * @return Sucursal The current object (for fluent API support)
     */
    public function setSucursalAnioactivo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sucursal_anioactivo !== $v) {
            $this->sucursal_anioactivo = $v;
            $this->modifiedColumns[] = SucursalPeer::SUCURSAL_ANIOACTIVO;
        }


        return $this;
    } // setSucursalAnioactivo()

    /**
     * Set the value of [sucursal_mesactivo] column.
     *
     * @param  int $v new value
     * @return Sucursal The current object (for fluent API support)
     */
    public function setSucursalMesactivo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sucursal_mesactivo !== $v) {
            $this->sucursal_mesactivo = $v;
            $this->modifiedColumns[] = SucursalPeer::SUCURSAL_MESACTIVO;
        }


        return $this;
    } // setSucursalMesactivo()

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
            if ($this->sucursal_habilitarproductos !== true) {
                return false;
            }

            if ($this->sucursal_habilitarrecetas !== true) {
                return false;
            }

            if ($this->sucursal_estatus !== true) {
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

            $this->idsucursal = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idempresa = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->sucursal_nombre = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->sucursal_habilitarproductos = ($row[$startcol + 3] !== null) ? (boolean) $row[$startcol + 3] : null;
            $this->sucursal_habilitarrecetas = ($row[$startcol + 4] !== null) ? (boolean) $row[$startcol + 4] : null;
            $this->sucursal_estatus = ($row[$startcol + 5] !== null) ? (boolean) $row[$startcol + 5] : null;
            $this->sucursal_anioactivo = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->sucursal_mesactivo = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = SucursalPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Sucursal object", $e);
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
            $con = Propel::getConnection(SucursalPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SucursalPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aEmpresa = null;
            $this->collAlmacens = null;

            $this->collCompras = null;

            $this->collDevolucions = null;

            $this->collIngresos = null;

            $this->collInventariomess = null;

            $this->collNotacreditos = null;

            $this->collOrdentablajerias = null;

            $this->collRequisicionsRelatedByIdsucursaldestino = null;

            $this->collRequisicionsRelatedByIdsucursalorigen = null;

            $this->collTrabajadorpromedios = null;

            $this->collUsuariosucursals = null;

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
            $con = Propel::getConnection(SucursalPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SucursalQuery::create()
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
            $con = Propel::getConnection(SucursalPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                SucursalPeer::addInstanceToPool($this);
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

            if ($this->almacensScheduledForDeletion !== null) {
                if (!$this->almacensScheduledForDeletion->isEmpty()) {
                    AlmacenQuery::create()
                        ->filterByPrimaryKeys($this->almacensScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->almacensScheduledForDeletion = null;
                }
            }

            if ($this->collAlmacens !== null) {
                foreach ($this->collAlmacens as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

            if ($this->requisicionsRelatedByIdsucursaldestinoScheduledForDeletion !== null) {
                if (!$this->requisicionsRelatedByIdsucursaldestinoScheduledForDeletion->isEmpty()) {
                    RequisicionQuery::create()
                        ->filterByPrimaryKeys($this->requisicionsRelatedByIdsucursaldestinoScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->requisicionsRelatedByIdsucursaldestinoScheduledForDeletion = null;
                }
            }

            if ($this->collRequisicionsRelatedByIdsucursaldestino !== null) {
                foreach ($this->collRequisicionsRelatedByIdsucursaldestino as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->requisicionsRelatedByIdsucursalorigenScheduledForDeletion !== null) {
                if (!$this->requisicionsRelatedByIdsucursalorigenScheduledForDeletion->isEmpty()) {
                    RequisicionQuery::create()
                        ->filterByPrimaryKeys($this->requisicionsRelatedByIdsucursalorigenScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->requisicionsRelatedByIdsucursalorigenScheduledForDeletion = null;
                }
            }

            if ($this->collRequisicionsRelatedByIdsucursalorigen !== null) {
                foreach ($this->collRequisicionsRelatedByIdsucursalorigen as $referrerFK) {
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

            if ($this->usuariosucursalsScheduledForDeletion !== null) {
                if (!$this->usuariosucursalsScheduledForDeletion->isEmpty()) {
                    UsuariosucursalQuery::create()
                        ->filterByPrimaryKeys($this->usuariosucursalsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->usuariosucursalsScheduledForDeletion = null;
                }
            }

            if ($this->collUsuariosucursals !== null) {
                foreach ($this->collUsuariosucursals as $referrerFK) {
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

        $this->modifiedColumns[] = SucursalPeer::IDSUCURSAL;
        if (null !== $this->idsucursal) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SucursalPeer::IDSUCURSAL . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SucursalPeer::IDSUCURSAL)) {
            $modifiedColumns[':p' . $index++]  = '`idsucursal`';
        }
        if ($this->isColumnModified(SucursalPeer::IDEMPRESA)) {
            $modifiedColumns[':p' . $index++]  = '`idempresa`';
        }
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`sucursal_nombre`';
        }
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_HABILITARPRODUCTOS)) {
            $modifiedColumns[':p' . $index++]  = '`sucursal_habilitarproductos`';
        }
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_HABILITARRECETAS)) {
            $modifiedColumns[':p' . $index++]  = '`sucursal_habilitarrecetas`';
        }
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_ESTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`sucursal_estatus`';
        }
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_ANIOACTIVO)) {
            $modifiedColumns[':p' . $index++]  = '`sucursal_anioactivo`';
        }
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_MESACTIVO)) {
            $modifiedColumns[':p' . $index++]  = '`sucursal_mesactivo`';
        }

        $sql = sprintf(
            'INSERT INTO `sucursal` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idsucursal`':
                        $stmt->bindValue($identifier, $this->idsucursal, PDO::PARAM_INT);
                        break;
                    case '`idempresa`':
                        $stmt->bindValue($identifier, $this->idempresa, PDO::PARAM_INT);
                        break;
                    case '`sucursal_nombre`':
                        $stmt->bindValue($identifier, $this->sucursal_nombre, PDO::PARAM_STR);
                        break;
                    case '`sucursal_habilitarproductos`':
                        $stmt->bindValue($identifier, (int) $this->sucursal_habilitarproductos, PDO::PARAM_INT);
                        break;
                    case '`sucursal_habilitarrecetas`':
                        $stmt->bindValue($identifier, (int) $this->sucursal_habilitarrecetas, PDO::PARAM_INT);
                        break;
                    case '`sucursal_estatus`':
                        $stmt->bindValue($identifier, (int) $this->sucursal_estatus, PDO::PARAM_INT);
                        break;
                    case '`sucursal_anioactivo`':
                        $stmt->bindValue($identifier, $this->sucursal_anioactivo, PDO::PARAM_INT);
                        break;
                    case '`sucursal_mesactivo`':
                        $stmt->bindValue($identifier, $this->sucursal_mesactivo, PDO::PARAM_INT);
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
        $this->setIdsucursal($pk);

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


            if (($retval = SucursalPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collAlmacens !== null) {
                    foreach ($this->collAlmacens as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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

                if ($this->collRequisicionsRelatedByIdsucursaldestino !== null) {
                    foreach ($this->collRequisicionsRelatedByIdsucursaldestino as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collRequisicionsRelatedByIdsucursalorigen !== null) {
                    foreach ($this->collRequisicionsRelatedByIdsucursalorigen as $referrerFK) {
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

                if ($this->collUsuariosucursals !== null) {
                    foreach ($this->collUsuariosucursals as $referrerFK) {
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
        $pos = SucursalPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdsucursal();
                break;
            case 1:
                return $this->getIdempresa();
                break;
            case 2:
                return $this->getSucursalNombre();
                break;
            case 3:
                return $this->getSucursalHabilitarproductos();
                break;
            case 4:
                return $this->getSucursalHabilitarrecetas();
                break;
            case 5:
                return $this->getSucursalEstatus();
                break;
            case 6:
                return $this->getSucursalAnioactivo();
                break;
            case 7:
                return $this->getSucursalMesactivo();
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
        if (isset($alreadyDumpedObjects['Sucursal'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Sucursal'][$this->getPrimaryKey()] = true;
        $keys = SucursalPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdsucursal(),
            $keys[1] => $this->getIdempresa(),
            $keys[2] => $this->getSucursalNombre(),
            $keys[3] => $this->getSucursalHabilitarproductos(),
            $keys[4] => $this->getSucursalHabilitarrecetas(),
            $keys[5] => $this->getSucursalEstatus(),
            $keys[6] => $this->getSucursalAnioactivo(),
            $keys[7] => $this->getSucursalMesactivo(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aEmpresa) {
                $result['Empresa'] = $this->aEmpresa->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collAlmacens) {
                $result['Almacens'] = $this->collAlmacens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
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
            if (null !== $this->collRequisicionsRelatedByIdsucursaldestino) {
                $result['RequisicionsRelatedByIdsucursaldestino'] = $this->collRequisicionsRelatedByIdsucursaldestino->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collRequisicionsRelatedByIdsucursalorigen) {
                $result['RequisicionsRelatedByIdsucursalorigen'] = $this->collRequisicionsRelatedByIdsucursalorigen->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collTrabajadorpromedios) {
                $result['Trabajadorpromedios'] = $this->collTrabajadorpromedios->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collUsuariosucursals) {
                $result['Usuariosucursals'] = $this->collUsuariosucursals->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = SucursalPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdsucursal($value);
                break;
            case 1:
                $this->setIdempresa($value);
                break;
            case 2:
                $this->setSucursalNombre($value);
                break;
            case 3:
                $this->setSucursalHabilitarproductos($value);
                break;
            case 4:
                $this->setSucursalHabilitarrecetas($value);
                break;
            case 5:
                $this->setSucursalEstatus($value);
                break;
            case 6:
                $this->setSucursalAnioactivo($value);
                break;
            case 7:
                $this->setSucursalMesactivo($value);
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
        $keys = SucursalPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdsucursal($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdempresa($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSucursalNombre($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSucursalHabilitarproductos($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSucursalHabilitarrecetas($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setSucursalEstatus($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setSucursalAnioactivo($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setSucursalMesactivo($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SucursalPeer::DATABASE_NAME);

        if ($this->isColumnModified(SucursalPeer::IDSUCURSAL)) $criteria->add(SucursalPeer::IDSUCURSAL, $this->idsucursal);
        if ($this->isColumnModified(SucursalPeer::IDEMPRESA)) $criteria->add(SucursalPeer::IDEMPRESA, $this->idempresa);
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_NOMBRE)) $criteria->add(SucursalPeer::SUCURSAL_NOMBRE, $this->sucursal_nombre);
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_HABILITARPRODUCTOS)) $criteria->add(SucursalPeer::SUCURSAL_HABILITARPRODUCTOS, $this->sucursal_habilitarproductos);
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_HABILITARRECETAS)) $criteria->add(SucursalPeer::SUCURSAL_HABILITARRECETAS, $this->sucursal_habilitarrecetas);
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_ESTATUS)) $criteria->add(SucursalPeer::SUCURSAL_ESTATUS, $this->sucursal_estatus);
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_ANIOACTIVO)) $criteria->add(SucursalPeer::SUCURSAL_ANIOACTIVO, $this->sucursal_anioactivo);
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_MESACTIVO)) $criteria->add(SucursalPeer::SUCURSAL_MESACTIVO, $this->sucursal_mesactivo);

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
        $criteria = new Criteria(SucursalPeer::DATABASE_NAME);
        $criteria->add(SucursalPeer::IDSUCURSAL, $this->idsucursal);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdsucursal();
    }

    /**
     * Generic method to set the primary key (idsucursal column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdsucursal($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdsucursal();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Sucursal (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdempresa($this->getIdempresa());
        $copyObj->setSucursalNombre($this->getSucursalNombre());
        $copyObj->setSucursalHabilitarproductos($this->getSucursalHabilitarproductos());
        $copyObj->setSucursalHabilitarrecetas($this->getSucursalHabilitarrecetas());
        $copyObj->setSucursalEstatus($this->getSucursalEstatus());
        $copyObj->setSucursalAnioactivo($this->getSucursalAnioactivo());
        $copyObj->setSucursalMesactivo($this->getSucursalMesactivo());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getAlmacens() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addAlmacen($relObj->copy($deepCopy));
                }
            }

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

            foreach ($this->getRequisicionsRelatedByIdsucursaldestino() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addRequisicionRelatedByIdsucursaldestino($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getRequisicionsRelatedByIdsucursalorigen() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addRequisicionRelatedByIdsucursalorigen($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getTrabajadorpromedios() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTrabajadorpromedio($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getUsuariosucursals() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addUsuariosucursal($relObj->copy($deepCopy));
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
            $copyObj->setIdsucursal(NULL); // this is a auto-increment column, so set to default value
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
     * @return Sucursal Clone of current object.
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
     * @return SucursalPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SucursalPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Empresa object.
     *
     * @param                  Empresa $v
     * @return Sucursal The current object (for fluent API support)
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
            $v->addSucursal($this);
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
                $this->aEmpresa->addSucursals($this);
             */
        }

        return $this->aEmpresa;
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
        if ('Almacen' == $relationName) {
            $this->initAlmacens();
        }
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
        if ('RequisicionRelatedByIdsucursaldestino' == $relationName) {
            $this->initRequisicionsRelatedByIdsucursaldestino();
        }
        if ('RequisicionRelatedByIdsucursalorigen' == $relationName) {
            $this->initRequisicionsRelatedByIdsucursalorigen();
        }
        if ('Trabajadorpromedio' == $relationName) {
            $this->initTrabajadorpromedios();
        }
        if ('Usuariosucursal' == $relationName) {
            $this->initUsuariosucursals();
        }
        if ('Venta' == $relationName) {
            $this->initVentas();
        }
    }

    /**
     * Clears out the collAlmacens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Sucursal The current object (for fluent API support)
     * @see        addAlmacens()
     */
    public function clearAlmacens()
    {
        $this->collAlmacens = null; // important to set this to null since that means it is uninitialized
        $this->collAlmacensPartial = null;

        return $this;
    }

    /**
     * reset is the collAlmacens collection loaded partially
     *
     * @return void
     */
    public function resetPartialAlmacens($v = true)
    {
        $this->collAlmacensPartial = $v;
    }

    /**
     * Initializes the collAlmacens collection.
     *
     * By default this just sets the collAlmacens collection to an empty array (like clearcollAlmacens());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initAlmacens($overrideExisting = true)
    {
        if (null !== $this->collAlmacens && !$overrideExisting) {
            return;
        }
        $this->collAlmacens = new PropelObjectCollection();
        $this->collAlmacens->setModel('Almacen');
    }

    /**
     * Gets an array of Almacen objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Sucursal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Almacen[] List of Almacen objects
     * @throws PropelException
     */
    public function getAlmacens($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collAlmacensPartial && !$this->isNew();
        if (null === $this->collAlmacens || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collAlmacens) {
                // return empty collection
                $this->initAlmacens();
            } else {
                $collAlmacens = AlmacenQuery::create(null, $criteria)
                    ->filterBySucursal($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collAlmacensPartial && count($collAlmacens)) {
                      $this->initAlmacens(false);

                      foreach ($collAlmacens as $obj) {
                        if (false == $this->collAlmacens->contains($obj)) {
                          $this->collAlmacens->append($obj);
                        }
                      }

                      $this->collAlmacensPartial = true;
                    }

                    $collAlmacens->getInternalIterator()->rewind();

                    return $collAlmacens;
                }

                if ($partial && $this->collAlmacens) {
                    foreach ($this->collAlmacens as $obj) {
                        if ($obj->isNew()) {
                            $collAlmacens[] = $obj;
                        }
                    }
                }

                $this->collAlmacens = $collAlmacens;
                $this->collAlmacensPartial = false;
            }
        }

        return $this->collAlmacens;
    }

    /**
     * Sets a collection of Almacen objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $almacens A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Sucursal The current object (for fluent API support)
     */
    public function setAlmacens(PropelCollection $almacens, PropelPDO $con = null)
    {
        $almacensToDelete = $this->getAlmacens(new Criteria(), $con)->diff($almacens);


        $this->almacensScheduledForDeletion = $almacensToDelete;

        foreach ($almacensToDelete as $almacenRemoved) {
            $almacenRemoved->setSucursal(null);
        }

        $this->collAlmacens = null;
        foreach ($almacens as $almacen) {
            $this->addAlmacen($almacen);
        }

        $this->collAlmacens = $almacens;
        $this->collAlmacensPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Almacen objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Almacen objects.
     * @throws PropelException
     */
    public function countAlmacens(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collAlmacensPartial && !$this->isNew();
        if (null === $this->collAlmacens || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collAlmacens) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getAlmacens());
            }
            $query = AlmacenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySucursal($this)
                ->count($con);
        }

        return count($this->collAlmacens);
    }

    /**
     * Method called to associate a Almacen object to this object
     * through the Almacen foreign key attribute.
     *
     * @param    Almacen $l Almacen
     * @return Sucursal The current object (for fluent API support)
     */
    public function addAlmacen(Almacen $l)
    {
        if ($this->collAlmacens === null) {
            $this->initAlmacens();
            $this->collAlmacensPartial = true;
        }

        if (!in_array($l, $this->collAlmacens->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddAlmacen($l);

            if ($this->almacensScheduledForDeletion and $this->almacensScheduledForDeletion->contains($l)) {
                $this->almacensScheduledForDeletion->remove($this->almacensScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Almacen $almacen The almacen object to add.
     */
    protected function doAddAlmacen($almacen)
    {
        $this->collAlmacens[]= $almacen;
        $almacen->setSucursal($this);
    }

    /**
     * @param	Almacen $almacen The almacen object to remove.
     * @return Sucursal The current object (for fluent API support)
     */
    public function removeAlmacen($almacen)
    {
        if ($this->getAlmacens()->contains($almacen)) {
            $this->collAlmacens->remove($this->collAlmacens->search($almacen));
            if (null === $this->almacensScheduledForDeletion) {
                $this->almacensScheduledForDeletion = clone $this->collAlmacens;
                $this->almacensScheduledForDeletion->clear();
            }
            $this->almacensScheduledForDeletion[]= clone $almacen;
            $almacen->setSucursal(null);
        }

        return $this;
    }

    /**
     * Clears out the collCompras collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Sucursal The current object (for fluent API support)
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
     * If this Sucursal is new, it will return
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
                    ->filterBySucursal($this)
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
     * @return Sucursal The current object (for fluent API support)
     */
    public function setCompras(PropelCollection $compras, PropelPDO $con = null)
    {
        $comprasToDelete = $this->getCompras(new Criteria(), $con)->diff($compras);


        $this->comprasScheduledForDeletion = $comprasToDelete;

        foreach ($comprasToDelete as $compraRemoved) {
            $compraRemoved->setSucursal(null);
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
                ->filterBySucursal($this)
                ->count($con);
        }

        return count($this->collCompras);
    }

    /**
     * Method called to associate a Compra object to this object
     * through the Compra foreign key attribute.
     *
     * @param    Compra $l Compra
     * @return Sucursal The current object (for fluent API support)
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
        $compra->setSucursal($this);
    }

    /**
     * @param	Compra $compra The compra object to remove.
     * @return Sucursal The current object (for fluent API support)
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
            $compra->setSucursal(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Compras from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
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
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Compras from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
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
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Compras from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
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
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Compras from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
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
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Compras from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
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
     * @return Sucursal The current object (for fluent API support)
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
     * If this Sucursal is new, it will return
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
                    ->filterBySucursal($this)
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
     * @return Sucursal The current object (for fluent API support)
     */
    public function setDevolucions(PropelCollection $devolucions, PropelPDO $con = null)
    {
        $devolucionsToDelete = $this->getDevolucions(new Criteria(), $con)->diff($devolucions);


        $this->devolucionsScheduledForDeletion = $devolucionsToDelete;

        foreach ($devolucionsToDelete as $devolucionRemoved) {
            $devolucionRemoved->setSucursal(null);
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
                ->filterBySucursal($this)
                ->count($con);
        }

        return count($this->collDevolucions);
    }

    /**
     * Method called to associate a Devolucion object to this object
     * through the Devolucion foreign key attribute.
     *
     * @param    Devolucion $l Devolucion
     * @return Sucursal The current object (for fluent API support)
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
        $devolucion->setSucursal($this);
    }

    /**
     * @param	Devolucion $devolucion The devolucion object to remove.
     * @return Sucursal The current object (for fluent API support)
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
            $devolucion->setSucursal(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Devolucions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
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
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Devolucions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
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
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Devolucions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
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
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Devolucions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
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
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Devolucions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
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
     * @return Sucursal The current object (for fluent API support)
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
     * If this Sucursal is new, it will return
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
                    ->filterBySucursal($this)
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
     * @return Sucursal The current object (for fluent API support)
     */
    public function setIngresos(PropelCollection $ingresos, PropelPDO $con = null)
    {
        $ingresosToDelete = $this->getIngresos(new Criteria(), $con)->diff($ingresos);


        $this->ingresosScheduledForDeletion = $ingresosToDelete;

        foreach ($ingresosToDelete as $ingresoRemoved) {
            $ingresoRemoved->setSucursal(null);
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
                ->filterBySucursal($this)
                ->count($con);
        }

        return count($this->collIngresos);
    }

    /**
     * Method called to associate a Ingreso object to this object
     * through the Ingreso foreign key attribute.
     *
     * @param    Ingreso $l Ingreso
     * @return Sucursal The current object (for fluent API support)
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
        $ingreso->setSucursal($this);
    }

    /**
     * @param	Ingreso $ingreso The ingreso object to remove.
     * @return Sucursal The current object (for fluent API support)
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
            $ingreso->setSucursal(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Ingresos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
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
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Ingresos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ingreso[] List of Ingreso objects
     */
    public function getIngresosJoinEmpresa($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = IngresoQuery::create(null, $criteria);
        $query->joinWith('Empresa', $join_behavior);

        return $this->getIngresos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Ingresos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
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
     * @return Sucursal The current object (for fluent API support)
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
     * If this Sucursal is new, it will return
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
                    ->filterBySucursal($this)
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
     * @return Sucursal The current object (for fluent API support)
     */
    public function setInventariomess(PropelCollection $inventariomess, PropelPDO $con = null)
    {
        $inventariomessToDelete = $this->getInventariomess(new Criteria(), $con)->diff($inventariomess);


        $this->inventariomessScheduledForDeletion = $inventariomessToDelete;

        foreach ($inventariomessToDelete as $inventariomesRemoved) {
            $inventariomesRemoved->setSucursal(null);
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
                ->filterBySucursal($this)
                ->count($con);
        }

        return count($this->collInventariomess);
    }

    /**
     * Method called to associate a Inventariomes object to this object
     * through the Inventariomes foreign key attribute.
     *
     * @param    Inventariomes $l Inventariomes
     * @return Sucursal The current object (for fluent API support)
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
        $inventariomes->setSucursal($this);
    }

    /**
     * @param	Inventariomes $inventariomes The inventariomes object to remove.
     * @return Sucursal The current object (for fluent API support)
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
            $inventariomes->setSucursal(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Inventariomess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
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
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Inventariomess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
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
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Inventariomess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
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
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Inventariomess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
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
     * @return Sucursal The current object (for fluent API support)
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
     * If this Sucursal is new, it will return
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
                    ->filterBySucursal($this)
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
     * @return Sucursal The current object (for fluent API support)
     */
    public function setNotacreditos(PropelCollection $notacreditos, PropelPDO $con = null)
    {
        $notacreditosToDelete = $this->getNotacreditos(new Criteria(), $con)->diff($notacreditos);


        $this->notacreditosScheduledForDeletion = $notacreditosToDelete;

        foreach ($notacreditosToDelete as $notacreditoRemoved) {
            $notacreditoRemoved->setSucursal(null);
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
                ->filterBySucursal($this)
                ->count($con);
        }

        return count($this->collNotacreditos);
    }

    /**
     * Method called to associate a Notacredito object to this object
     * through the Notacredito foreign key attribute.
     *
     * @param    Notacredito $l Notacredito
     * @return Sucursal The current object (for fluent API support)
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
        $notacredito->setSucursal($this);
    }

    /**
     * @param	Notacredito $notacredito The notacredito object to remove.
     * @return Sucursal The current object (for fluent API support)
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
            $notacredito->setSucursal(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Notacreditos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
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
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Notacreditos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
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
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Notacreditos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
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
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Notacreditos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
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
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Notacreditos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
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
     * @return Sucursal The current object (for fluent API support)
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
     * If this Sucursal is new, it will return
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
                    ->filterBySucursal($this)
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
     * @return Sucursal The current object (for fluent API support)
     */
    public function setOrdentablajerias(PropelCollection $ordentablajerias, PropelPDO $con = null)
    {
        $ordentablajeriasToDelete = $this->getOrdentablajerias(new Criteria(), $con)->diff($ordentablajerias);


        $this->ordentablajeriasScheduledForDeletion = $ordentablajeriasToDelete;

        foreach ($ordentablajeriasToDelete as $ordentablajeriaRemoved) {
            $ordentablajeriaRemoved->setSucursal(null);
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
                ->filterBySucursal($this)
                ->count($con);
        }

        return count($this->collOrdentablajerias);
    }

    /**
     * Method called to associate a Ordentablajeria object to this object
     * through the Ordentablajeria foreign key attribute.
     *
     * @param    Ordentablajeria $l Ordentablajeria
     * @return Sucursal The current object (for fluent API support)
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
        $ordentablajeria->setSucursal($this);
    }

    /**
     * @param	Ordentablajeria $ordentablajeria The ordentablajeria object to remove.
     * @return Sucursal The current object (for fluent API support)
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
            $ordentablajeria->setSucursal(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Ordentablajerias from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
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
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Ordentablajerias from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
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
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Ordentablajerias from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
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
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Ordentablajerias from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ordentablajeria[] List of Ordentablajeria objects
     */
    public function getOrdentablajeriasJoinEmpresa($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OrdentablajeriaQuery::create(null, $criteria);
        $query->joinWith('Empresa', $join_behavior);

        return $this->getOrdentablajerias($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Ordentablajerias from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
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
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Ordentablajerias from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
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
     * Clears out the collRequisicionsRelatedByIdsucursaldestino collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Sucursal The current object (for fluent API support)
     * @see        addRequisicionsRelatedByIdsucursaldestino()
     */
    public function clearRequisicionsRelatedByIdsucursaldestino()
    {
        $this->collRequisicionsRelatedByIdsucursaldestino = null; // important to set this to null since that means it is uninitialized
        $this->collRequisicionsRelatedByIdsucursaldestinoPartial = null;

        return $this;
    }

    /**
     * reset is the collRequisicionsRelatedByIdsucursaldestino collection loaded partially
     *
     * @return void
     */
    public function resetPartialRequisicionsRelatedByIdsucursaldestino($v = true)
    {
        $this->collRequisicionsRelatedByIdsucursaldestinoPartial = $v;
    }

    /**
     * Initializes the collRequisicionsRelatedByIdsucursaldestino collection.
     *
     * By default this just sets the collRequisicionsRelatedByIdsucursaldestino collection to an empty array (like clearcollRequisicionsRelatedByIdsucursaldestino());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initRequisicionsRelatedByIdsucursaldestino($overrideExisting = true)
    {
        if (null !== $this->collRequisicionsRelatedByIdsucursaldestino && !$overrideExisting) {
            return;
        }
        $this->collRequisicionsRelatedByIdsucursaldestino = new PropelObjectCollection();
        $this->collRequisicionsRelatedByIdsucursaldestino->setModel('Requisicion');
    }

    /**
     * Gets an array of Requisicion objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Sucursal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     * @throws PropelException
     */
    public function getRequisicionsRelatedByIdsucursaldestino($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collRequisicionsRelatedByIdsucursaldestinoPartial && !$this->isNew();
        if (null === $this->collRequisicionsRelatedByIdsucursaldestino || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collRequisicionsRelatedByIdsucursaldestino) {
                // return empty collection
                $this->initRequisicionsRelatedByIdsucursaldestino();
            } else {
                $collRequisicionsRelatedByIdsucursaldestino = RequisicionQuery::create(null, $criteria)
                    ->filterBySucursalRelatedByIdsucursaldestino($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collRequisicionsRelatedByIdsucursaldestinoPartial && count($collRequisicionsRelatedByIdsucursaldestino)) {
                      $this->initRequisicionsRelatedByIdsucursaldestino(false);

                      foreach ($collRequisicionsRelatedByIdsucursaldestino as $obj) {
                        if (false == $this->collRequisicionsRelatedByIdsucursaldestino->contains($obj)) {
                          $this->collRequisicionsRelatedByIdsucursaldestino->append($obj);
                        }
                      }

                      $this->collRequisicionsRelatedByIdsucursaldestinoPartial = true;
                    }

                    $collRequisicionsRelatedByIdsucursaldestino->getInternalIterator()->rewind();

                    return $collRequisicionsRelatedByIdsucursaldestino;
                }

                if ($partial && $this->collRequisicionsRelatedByIdsucursaldestino) {
                    foreach ($this->collRequisicionsRelatedByIdsucursaldestino as $obj) {
                        if ($obj->isNew()) {
                            $collRequisicionsRelatedByIdsucursaldestino[] = $obj;
                        }
                    }
                }

                $this->collRequisicionsRelatedByIdsucursaldestino = $collRequisicionsRelatedByIdsucursaldestino;
                $this->collRequisicionsRelatedByIdsucursaldestinoPartial = false;
            }
        }

        return $this->collRequisicionsRelatedByIdsucursaldestino;
    }

    /**
     * Sets a collection of RequisicionRelatedByIdsucursaldestino objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $requisicionsRelatedByIdsucursaldestino A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Sucursal The current object (for fluent API support)
     */
    public function setRequisicionsRelatedByIdsucursaldestino(PropelCollection $requisicionsRelatedByIdsucursaldestino, PropelPDO $con = null)
    {
        $requisicionsRelatedByIdsucursaldestinoToDelete = $this->getRequisicionsRelatedByIdsucursaldestino(new Criteria(), $con)->diff($requisicionsRelatedByIdsucursaldestino);


        $this->requisicionsRelatedByIdsucursaldestinoScheduledForDeletion = $requisicionsRelatedByIdsucursaldestinoToDelete;

        foreach ($requisicionsRelatedByIdsucursaldestinoToDelete as $requisicionRelatedByIdsucursaldestinoRemoved) {
            $requisicionRelatedByIdsucursaldestinoRemoved->setSucursalRelatedByIdsucursaldestino(null);
        }

        $this->collRequisicionsRelatedByIdsucursaldestino = null;
        foreach ($requisicionsRelatedByIdsucursaldestino as $requisicionRelatedByIdsucursaldestino) {
            $this->addRequisicionRelatedByIdsucursaldestino($requisicionRelatedByIdsucursaldestino);
        }

        $this->collRequisicionsRelatedByIdsucursaldestino = $requisicionsRelatedByIdsucursaldestino;
        $this->collRequisicionsRelatedByIdsucursaldestinoPartial = false;

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
    public function countRequisicionsRelatedByIdsucursaldestino(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collRequisicionsRelatedByIdsucursaldestinoPartial && !$this->isNew();
        if (null === $this->collRequisicionsRelatedByIdsucursaldestino || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collRequisicionsRelatedByIdsucursaldestino) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getRequisicionsRelatedByIdsucursaldestino());
            }
            $query = RequisicionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySucursalRelatedByIdsucursaldestino($this)
                ->count($con);
        }

        return count($this->collRequisicionsRelatedByIdsucursaldestino);
    }

    /**
     * Method called to associate a Requisicion object to this object
     * through the Requisicion foreign key attribute.
     *
     * @param    Requisicion $l Requisicion
     * @return Sucursal The current object (for fluent API support)
     */
    public function addRequisicionRelatedByIdsucursaldestino(Requisicion $l)
    {
        if ($this->collRequisicionsRelatedByIdsucursaldestino === null) {
            $this->initRequisicionsRelatedByIdsucursaldestino();
            $this->collRequisicionsRelatedByIdsucursaldestinoPartial = true;
        }

        if (!in_array($l, $this->collRequisicionsRelatedByIdsucursaldestino->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddRequisicionRelatedByIdsucursaldestino($l);

            if ($this->requisicionsRelatedByIdsucursaldestinoScheduledForDeletion and $this->requisicionsRelatedByIdsucursaldestinoScheduledForDeletion->contains($l)) {
                $this->requisicionsRelatedByIdsucursaldestinoScheduledForDeletion->remove($this->requisicionsRelatedByIdsucursaldestinoScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	RequisicionRelatedByIdsucursaldestino $requisicionRelatedByIdsucursaldestino The requisicionRelatedByIdsucursaldestino object to add.
     */
    protected function doAddRequisicionRelatedByIdsucursaldestino($requisicionRelatedByIdsucursaldestino)
    {
        $this->collRequisicionsRelatedByIdsucursaldestino[]= $requisicionRelatedByIdsucursaldestino;
        $requisicionRelatedByIdsucursaldestino->setSucursalRelatedByIdsucursaldestino($this);
    }

    /**
     * @param	RequisicionRelatedByIdsucursaldestino $requisicionRelatedByIdsucursaldestino The requisicionRelatedByIdsucursaldestino object to remove.
     * @return Sucursal The current object (for fluent API support)
     */
    public function removeRequisicionRelatedByIdsucursaldestino($requisicionRelatedByIdsucursaldestino)
    {
        if ($this->getRequisicionsRelatedByIdsucursaldestino()->contains($requisicionRelatedByIdsucursaldestino)) {
            $this->collRequisicionsRelatedByIdsucursaldestino->remove($this->collRequisicionsRelatedByIdsucursaldestino->search($requisicionRelatedByIdsucursaldestino));
            if (null === $this->requisicionsRelatedByIdsucursaldestinoScheduledForDeletion) {
                $this->requisicionsRelatedByIdsucursaldestinoScheduledForDeletion = clone $this->collRequisicionsRelatedByIdsucursaldestino;
                $this->requisicionsRelatedByIdsucursaldestinoScheduledForDeletion->clear();
            }
            $this->requisicionsRelatedByIdsucursaldestinoScheduledForDeletion[]= clone $requisicionRelatedByIdsucursaldestino;
            $requisicionRelatedByIdsucursaldestino->setSucursalRelatedByIdsucursaldestino(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related RequisicionsRelatedByIdsucursaldestino from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsRelatedByIdsucursaldestinoJoinAlmacenRelatedByIdalmacendestino($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('AlmacenRelatedByIdalmacendestino', $join_behavior);

        return $this->getRequisicionsRelatedByIdsucursaldestino($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related RequisicionsRelatedByIdsucursaldestino from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsRelatedByIdsucursaldestinoJoinAlmacenRelatedByIdalmacenorigen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('AlmacenRelatedByIdalmacenorigen', $join_behavior);

        return $this->getRequisicionsRelatedByIdsucursaldestino($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related RequisicionsRelatedByIdsucursaldestino from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsRelatedByIdsucursaldestinoJoinUsuarioRelatedByIdauditor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdauditor', $join_behavior);

        return $this->getRequisicionsRelatedByIdsucursaldestino($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related RequisicionsRelatedByIdsucursaldestino from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsRelatedByIdsucursaldestinoJoinConceptosalida($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('Conceptosalida', $join_behavior);

        return $this->getRequisicionsRelatedByIdsucursaldestino($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related RequisicionsRelatedByIdsucursaldestino from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsRelatedByIdsucursaldestinoJoinEmpresa($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('Empresa', $join_behavior);

        return $this->getRequisicionsRelatedByIdsucursaldestino($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related RequisicionsRelatedByIdsucursaldestino from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsRelatedByIdsucursaldestinoJoinUsuarioRelatedByIdusuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdusuario', $join_behavior);

        return $this->getRequisicionsRelatedByIdsucursaldestino($query, $con);
    }

    /**
     * Clears out the collRequisicionsRelatedByIdsucursalorigen collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Sucursal The current object (for fluent API support)
     * @see        addRequisicionsRelatedByIdsucursalorigen()
     */
    public function clearRequisicionsRelatedByIdsucursalorigen()
    {
        $this->collRequisicionsRelatedByIdsucursalorigen = null; // important to set this to null since that means it is uninitialized
        $this->collRequisicionsRelatedByIdsucursalorigenPartial = null;

        return $this;
    }

    /**
     * reset is the collRequisicionsRelatedByIdsucursalorigen collection loaded partially
     *
     * @return void
     */
    public function resetPartialRequisicionsRelatedByIdsucursalorigen($v = true)
    {
        $this->collRequisicionsRelatedByIdsucursalorigenPartial = $v;
    }

    /**
     * Initializes the collRequisicionsRelatedByIdsucursalorigen collection.
     *
     * By default this just sets the collRequisicionsRelatedByIdsucursalorigen collection to an empty array (like clearcollRequisicionsRelatedByIdsucursalorigen());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initRequisicionsRelatedByIdsucursalorigen($overrideExisting = true)
    {
        if (null !== $this->collRequisicionsRelatedByIdsucursalorigen && !$overrideExisting) {
            return;
        }
        $this->collRequisicionsRelatedByIdsucursalorigen = new PropelObjectCollection();
        $this->collRequisicionsRelatedByIdsucursalorigen->setModel('Requisicion');
    }

    /**
     * Gets an array of Requisicion objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Sucursal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     * @throws PropelException
     */
    public function getRequisicionsRelatedByIdsucursalorigen($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collRequisicionsRelatedByIdsucursalorigenPartial && !$this->isNew();
        if (null === $this->collRequisicionsRelatedByIdsucursalorigen || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collRequisicionsRelatedByIdsucursalorigen) {
                // return empty collection
                $this->initRequisicionsRelatedByIdsucursalorigen();
            } else {
                $collRequisicionsRelatedByIdsucursalorigen = RequisicionQuery::create(null, $criteria)
                    ->filterBySucursalRelatedByIdsucursalorigen($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collRequisicionsRelatedByIdsucursalorigenPartial && count($collRequisicionsRelatedByIdsucursalorigen)) {
                      $this->initRequisicionsRelatedByIdsucursalorigen(false);

                      foreach ($collRequisicionsRelatedByIdsucursalorigen as $obj) {
                        if (false == $this->collRequisicionsRelatedByIdsucursalorigen->contains($obj)) {
                          $this->collRequisicionsRelatedByIdsucursalorigen->append($obj);
                        }
                      }

                      $this->collRequisicionsRelatedByIdsucursalorigenPartial = true;
                    }

                    $collRequisicionsRelatedByIdsucursalorigen->getInternalIterator()->rewind();

                    return $collRequisicionsRelatedByIdsucursalorigen;
                }

                if ($partial && $this->collRequisicionsRelatedByIdsucursalorigen) {
                    foreach ($this->collRequisicionsRelatedByIdsucursalorigen as $obj) {
                        if ($obj->isNew()) {
                            $collRequisicionsRelatedByIdsucursalorigen[] = $obj;
                        }
                    }
                }

                $this->collRequisicionsRelatedByIdsucursalorigen = $collRequisicionsRelatedByIdsucursalorigen;
                $this->collRequisicionsRelatedByIdsucursalorigenPartial = false;
            }
        }

        return $this->collRequisicionsRelatedByIdsucursalorigen;
    }

    /**
     * Sets a collection of RequisicionRelatedByIdsucursalorigen objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $requisicionsRelatedByIdsucursalorigen A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Sucursal The current object (for fluent API support)
     */
    public function setRequisicionsRelatedByIdsucursalorigen(PropelCollection $requisicionsRelatedByIdsucursalorigen, PropelPDO $con = null)
    {
        $requisicionsRelatedByIdsucursalorigenToDelete = $this->getRequisicionsRelatedByIdsucursalorigen(new Criteria(), $con)->diff($requisicionsRelatedByIdsucursalorigen);


        $this->requisicionsRelatedByIdsucursalorigenScheduledForDeletion = $requisicionsRelatedByIdsucursalorigenToDelete;

        foreach ($requisicionsRelatedByIdsucursalorigenToDelete as $requisicionRelatedByIdsucursalorigenRemoved) {
            $requisicionRelatedByIdsucursalorigenRemoved->setSucursalRelatedByIdsucursalorigen(null);
        }

        $this->collRequisicionsRelatedByIdsucursalorigen = null;
        foreach ($requisicionsRelatedByIdsucursalorigen as $requisicionRelatedByIdsucursalorigen) {
            $this->addRequisicionRelatedByIdsucursalorigen($requisicionRelatedByIdsucursalorigen);
        }

        $this->collRequisicionsRelatedByIdsucursalorigen = $requisicionsRelatedByIdsucursalorigen;
        $this->collRequisicionsRelatedByIdsucursalorigenPartial = false;

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
    public function countRequisicionsRelatedByIdsucursalorigen(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collRequisicionsRelatedByIdsucursalorigenPartial && !$this->isNew();
        if (null === $this->collRequisicionsRelatedByIdsucursalorigen || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collRequisicionsRelatedByIdsucursalorigen) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getRequisicionsRelatedByIdsucursalorigen());
            }
            $query = RequisicionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySucursalRelatedByIdsucursalorigen($this)
                ->count($con);
        }

        return count($this->collRequisicionsRelatedByIdsucursalorigen);
    }

    /**
     * Method called to associate a Requisicion object to this object
     * through the Requisicion foreign key attribute.
     *
     * @param    Requisicion $l Requisicion
     * @return Sucursal The current object (for fluent API support)
     */
    public function addRequisicionRelatedByIdsucursalorigen(Requisicion $l)
    {
        if ($this->collRequisicionsRelatedByIdsucursalorigen === null) {
            $this->initRequisicionsRelatedByIdsucursalorigen();
            $this->collRequisicionsRelatedByIdsucursalorigenPartial = true;
        }

        if (!in_array($l, $this->collRequisicionsRelatedByIdsucursalorigen->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddRequisicionRelatedByIdsucursalorigen($l);

            if ($this->requisicionsRelatedByIdsucursalorigenScheduledForDeletion and $this->requisicionsRelatedByIdsucursalorigenScheduledForDeletion->contains($l)) {
                $this->requisicionsRelatedByIdsucursalorigenScheduledForDeletion->remove($this->requisicionsRelatedByIdsucursalorigenScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	RequisicionRelatedByIdsucursalorigen $requisicionRelatedByIdsucursalorigen The requisicionRelatedByIdsucursalorigen object to add.
     */
    protected function doAddRequisicionRelatedByIdsucursalorigen($requisicionRelatedByIdsucursalorigen)
    {
        $this->collRequisicionsRelatedByIdsucursalorigen[]= $requisicionRelatedByIdsucursalorigen;
        $requisicionRelatedByIdsucursalorigen->setSucursalRelatedByIdsucursalorigen($this);
    }

    /**
     * @param	RequisicionRelatedByIdsucursalorigen $requisicionRelatedByIdsucursalorigen The requisicionRelatedByIdsucursalorigen object to remove.
     * @return Sucursal The current object (for fluent API support)
     */
    public function removeRequisicionRelatedByIdsucursalorigen($requisicionRelatedByIdsucursalorigen)
    {
        if ($this->getRequisicionsRelatedByIdsucursalorigen()->contains($requisicionRelatedByIdsucursalorigen)) {
            $this->collRequisicionsRelatedByIdsucursalorigen->remove($this->collRequisicionsRelatedByIdsucursalorigen->search($requisicionRelatedByIdsucursalorigen));
            if (null === $this->requisicionsRelatedByIdsucursalorigenScheduledForDeletion) {
                $this->requisicionsRelatedByIdsucursalorigenScheduledForDeletion = clone $this->collRequisicionsRelatedByIdsucursalorigen;
                $this->requisicionsRelatedByIdsucursalorigenScheduledForDeletion->clear();
            }
            $this->requisicionsRelatedByIdsucursalorigenScheduledForDeletion[]= clone $requisicionRelatedByIdsucursalorigen;
            $requisicionRelatedByIdsucursalorigen->setSucursalRelatedByIdsucursalorigen(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related RequisicionsRelatedByIdsucursalorigen from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsRelatedByIdsucursalorigenJoinAlmacenRelatedByIdalmacendestino($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('AlmacenRelatedByIdalmacendestino', $join_behavior);

        return $this->getRequisicionsRelatedByIdsucursalorigen($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related RequisicionsRelatedByIdsucursalorigen from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsRelatedByIdsucursalorigenJoinAlmacenRelatedByIdalmacenorigen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('AlmacenRelatedByIdalmacenorigen', $join_behavior);

        return $this->getRequisicionsRelatedByIdsucursalorigen($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related RequisicionsRelatedByIdsucursalorigen from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsRelatedByIdsucursalorigenJoinUsuarioRelatedByIdauditor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdauditor', $join_behavior);

        return $this->getRequisicionsRelatedByIdsucursalorigen($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related RequisicionsRelatedByIdsucursalorigen from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsRelatedByIdsucursalorigenJoinConceptosalida($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('Conceptosalida', $join_behavior);

        return $this->getRequisicionsRelatedByIdsucursalorigen($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related RequisicionsRelatedByIdsucursalorigen from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsRelatedByIdsucursalorigenJoinEmpresa($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('Empresa', $join_behavior);

        return $this->getRequisicionsRelatedByIdsucursalorigen($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related RequisicionsRelatedByIdsucursalorigen from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsRelatedByIdsucursalorigenJoinUsuarioRelatedByIdusuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdusuario', $join_behavior);

        return $this->getRequisicionsRelatedByIdsucursalorigen($query, $con);
    }

    /**
     * Clears out the collTrabajadorpromedios collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Sucursal The current object (for fluent API support)
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
     * If this Sucursal is new, it will return
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
                    ->filterBySucursal($this)
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
     * @return Sucursal The current object (for fluent API support)
     */
    public function setTrabajadorpromedios(PropelCollection $trabajadorpromedios, PropelPDO $con = null)
    {
        $trabajadorpromediosToDelete = $this->getTrabajadorpromedios(new Criteria(), $con)->diff($trabajadorpromedios);


        $this->trabajadorpromediosScheduledForDeletion = $trabajadorpromediosToDelete;

        foreach ($trabajadorpromediosToDelete as $trabajadorpromedioRemoved) {
            $trabajadorpromedioRemoved->setSucursal(null);
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
                ->filterBySucursal($this)
                ->count($con);
        }

        return count($this->collTrabajadorpromedios);
    }

    /**
     * Method called to associate a Trabajadorpromedio object to this object
     * through the Trabajadorpromedio foreign key attribute.
     *
     * @param    Trabajadorpromedio $l Trabajadorpromedio
     * @return Sucursal The current object (for fluent API support)
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
        $trabajadorpromedio->setSucursal($this);
    }

    /**
     * @param	Trabajadorpromedio $trabajadorpromedio The trabajadorpromedio object to remove.
     * @return Sucursal The current object (for fluent API support)
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
            $trabajadorpromedio->setSucursal(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Trabajadorpromedios from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Trabajadorpromedio[] List of Trabajadorpromedio objects
     */
    public function getTrabajadorpromediosJoinEmpresa($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TrabajadorpromedioQuery::create(null, $criteria);
        $query->joinWith('Empresa', $join_behavior);

        return $this->getTrabajadorpromedios($query, $con);
    }

    /**
     * Clears out the collUsuariosucursals collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Sucursal The current object (for fluent API support)
     * @see        addUsuariosucursals()
     */
    public function clearUsuariosucursals()
    {
        $this->collUsuariosucursals = null; // important to set this to null since that means it is uninitialized
        $this->collUsuariosucursalsPartial = null;

        return $this;
    }

    /**
     * reset is the collUsuariosucursals collection loaded partially
     *
     * @return void
     */
    public function resetPartialUsuariosucursals($v = true)
    {
        $this->collUsuariosucursalsPartial = $v;
    }

    /**
     * Initializes the collUsuariosucursals collection.
     *
     * By default this just sets the collUsuariosucursals collection to an empty array (like clearcollUsuariosucursals());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initUsuariosucursals($overrideExisting = true)
    {
        if (null !== $this->collUsuariosucursals && !$overrideExisting) {
            return;
        }
        $this->collUsuariosucursals = new PropelObjectCollection();
        $this->collUsuariosucursals->setModel('Usuariosucursal');
    }

    /**
     * Gets an array of Usuariosucursal objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Sucursal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Usuariosucursal[] List of Usuariosucursal objects
     * @throws PropelException
     */
    public function getUsuariosucursals($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collUsuariosucursalsPartial && !$this->isNew();
        if (null === $this->collUsuariosucursals || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collUsuariosucursals) {
                // return empty collection
                $this->initUsuariosucursals();
            } else {
                $collUsuariosucursals = UsuariosucursalQuery::create(null, $criteria)
                    ->filterBySucursal($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collUsuariosucursalsPartial && count($collUsuariosucursals)) {
                      $this->initUsuariosucursals(false);

                      foreach ($collUsuariosucursals as $obj) {
                        if (false == $this->collUsuariosucursals->contains($obj)) {
                          $this->collUsuariosucursals->append($obj);
                        }
                      }

                      $this->collUsuariosucursalsPartial = true;
                    }

                    $collUsuariosucursals->getInternalIterator()->rewind();

                    return $collUsuariosucursals;
                }

                if ($partial && $this->collUsuariosucursals) {
                    foreach ($this->collUsuariosucursals as $obj) {
                        if ($obj->isNew()) {
                            $collUsuariosucursals[] = $obj;
                        }
                    }
                }

                $this->collUsuariosucursals = $collUsuariosucursals;
                $this->collUsuariosucursalsPartial = false;
            }
        }

        return $this->collUsuariosucursals;
    }

    /**
     * Sets a collection of Usuariosucursal objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $usuariosucursals A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Sucursal The current object (for fluent API support)
     */
    public function setUsuariosucursals(PropelCollection $usuariosucursals, PropelPDO $con = null)
    {
        $usuariosucursalsToDelete = $this->getUsuariosucursals(new Criteria(), $con)->diff($usuariosucursals);


        $this->usuariosucursalsScheduledForDeletion = $usuariosucursalsToDelete;

        foreach ($usuariosucursalsToDelete as $usuariosucursalRemoved) {
            $usuariosucursalRemoved->setSucursal(null);
        }

        $this->collUsuariosucursals = null;
        foreach ($usuariosucursals as $usuariosucursal) {
            $this->addUsuariosucursal($usuariosucursal);
        }

        $this->collUsuariosucursals = $usuariosucursals;
        $this->collUsuariosucursalsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Usuariosucursal objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Usuariosucursal objects.
     * @throws PropelException
     */
    public function countUsuariosucursals(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collUsuariosucursalsPartial && !$this->isNew();
        if (null === $this->collUsuariosucursals || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collUsuariosucursals) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getUsuariosucursals());
            }
            $query = UsuariosucursalQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySucursal($this)
                ->count($con);
        }

        return count($this->collUsuariosucursals);
    }

    /**
     * Method called to associate a Usuariosucursal object to this object
     * through the Usuariosucursal foreign key attribute.
     *
     * @param    Usuariosucursal $l Usuariosucursal
     * @return Sucursal The current object (for fluent API support)
     */
    public function addUsuariosucursal(Usuariosucursal $l)
    {
        if ($this->collUsuariosucursals === null) {
            $this->initUsuariosucursals();
            $this->collUsuariosucursalsPartial = true;
        }

        if (!in_array($l, $this->collUsuariosucursals->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddUsuariosucursal($l);

            if ($this->usuariosucursalsScheduledForDeletion and $this->usuariosucursalsScheduledForDeletion->contains($l)) {
                $this->usuariosucursalsScheduledForDeletion->remove($this->usuariosucursalsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Usuariosucursal $usuariosucursal The usuariosucursal object to add.
     */
    protected function doAddUsuariosucursal($usuariosucursal)
    {
        $this->collUsuariosucursals[]= $usuariosucursal;
        $usuariosucursal->setSucursal($this);
    }

    /**
     * @param	Usuariosucursal $usuariosucursal The usuariosucursal object to remove.
     * @return Sucursal The current object (for fluent API support)
     */
    public function removeUsuariosucursal($usuariosucursal)
    {
        if ($this->getUsuariosucursals()->contains($usuariosucursal)) {
            $this->collUsuariosucursals->remove($this->collUsuariosucursals->search($usuariosucursal));
            if (null === $this->usuariosucursalsScheduledForDeletion) {
                $this->usuariosucursalsScheduledForDeletion = clone $this->collUsuariosucursals;
                $this->usuariosucursalsScheduledForDeletion->clear();
            }
            $this->usuariosucursalsScheduledForDeletion[]= clone $usuariosucursal;
            $usuariosucursal->setSucursal(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Usuariosucursals from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Usuariosucursal[] List of Usuariosucursal objects
     */
    public function getUsuariosucursalsJoinUsuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = UsuariosucursalQuery::create(null, $criteria);
        $query->joinWith('Usuario', $join_behavior);

        return $this->getUsuariosucursals($query, $con);
    }

    /**
     * Clears out the collVentas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Sucursal The current object (for fluent API support)
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
     * If this Sucursal is new, it will return
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
                    ->filterBySucursal($this)
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
     * @return Sucursal The current object (for fluent API support)
     */
    public function setVentas(PropelCollection $ventas, PropelPDO $con = null)
    {
        $ventasToDelete = $this->getVentas(new Criteria(), $con)->diff($ventas);


        $this->ventasScheduledForDeletion = $ventasToDelete;

        foreach ($ventasToDelete as $ventaRemoved) {
            $ventaRemoved->setSucursal(null);
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
                ->filterBySucursal($this)
                ->count($con);
        }

        return count($this->collVentas);
    }

    /**
     * Method called to associate a Venta object to this object
     * through the Venta foreign key attribute.
     *
     * @param    Venta $l Venta
     * @return Sucursal The current object (for fluent API support)
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
        $venta->setSucursal($this);
    }

    /**
     * @param	Venta $venta The venta object to remove.
     * @return Sucursal The current object (for fluent API support)
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
            $venta->setSucursal(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Ventas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
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
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Ventas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
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
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Ventas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Venta[] List of Venta objects
     */
    public function getVentasJoinEmpresa($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VentaQuery::create(null, $criteria);
        $query->joinWith('Empresa', $join_behavior);

        return $this->getVentas($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Ventas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
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
        $this->idsucursal = null;
        $this->idempresa = null;
        $this->sucursal_nombre = null;
        $this->sucursal_habilitarproductos = null;
        $this->sucursal_habilitarrecetas = null;
        $this->sucursal_estatus = null;
        $this->sucursal_anioactivo = null;
        $this->sucursal_mesactivo = null;
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
            if ($this->collAlmacens) {
                foreach ($this->collAlmacens as $o) {
                    $o->clearAllReferences($deep);
                }
            }
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
            if ($this->collRequisicionsRelatedByIdsucursaldestino) {
                foreach ($this->collRequisicionsRelatedByIdsucursaldestino as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collRequisicionsRelatedByIdsucursalorigen) {
                foreach ($this->collRequisicionsRelatedByIdsucursalorigen as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collTrabajadorpromedios) {
                foreach ($this->collTrabajadorpromedios as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collUsuariosucursals) {
                foreach ($this->collUsuariosucursals as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collVentas) {
                foreach ($this->collVentas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aEmpresa instanceof Persistent) {
              $this->aEmpresa->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collAlmacens instanceof PropelCollection) {
            $this->collAlmacens->clearIterator();
        }
        $this->collAlmacens = null;
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
        if ($this->collRequisicionsRelatedByIdsucursaldestino instanceof PropelCollection) {
            $this->collRequisicionsRelatedByIdsucursaldestino->clearIterator();
        }
        $this->collRequisicionsRelatedByIdsucursaldestino = null;
        if ($this->collRequisicionsRelatedByIdsucursalorigen instanceof PropelCollection) {
            $this->collRequisicionsRelatedByIdsucursalorigen->clearIterator();
        }
        $this->collRequisicionsRelatedByIdsucursalorigen = null;
        if ($this->collTrabajadorpromedios instanceof PropelCollection) {
            $this->collTrabajadorpromedios->clearIterator();
        }
        $this->collTrabajadorpromedios = null;
        if ($this->collUsuariosucursals instanceof PropelCollection) {
            $this->collUsuariosucursals->clearIterator();
        }
        $this->collUsuariosucursals = null;
        if ($this->collVentas instanceof PropelCollection) {
            $this->collVentas->clearIterator();
        }
        $this->collVentas = null;
        $this->aEmpresa = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SucursalPeer::DEFAULT_STRING_FORMAT);
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
