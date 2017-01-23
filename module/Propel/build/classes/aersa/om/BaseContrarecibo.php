<?php


/**
 * Base class that represents a row from the 'contrarecibo' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseContrarecibo extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ContrareciboPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ContrareciboPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idcontrarecibo field.
     * @var        int
     */
    protected $idcontrarecibo;

    /**
     * The value for the contrarecibo_moneda field.
     * @var        string
     */
    protected $contrarecibo_moneda;

    /**
     * The value for the contrarecibo_total field.
     * @var        string
     */
    protected $contrarecibo_total;

    /**
     * The value for the idempresaproveedor field.
     * @var        int
     */
    protected $idempresaproveedor;

    /**
     * The value for the idsucursalproveedor field.
     * @var        int
     */
    protected $idsucursalproveedor;

    /**
     * The value for the idempresacliente field.
     * @var        int
     */
    protected $idempresacliente;

    /**
     * The value for the idsucursalcliente field.
     * @var        int
     */
    protected $idsucursalcliente;

    /**
     * The value for the contrarecibo_fechacreacion field.
     * @var        string
     */
    protected $contrarecibo_fechacreacion;

    /**
     * The value for the contrarecibo_estatus field.
     * @var        string
     */
    protected $contrarecibo_estatus;

    /**
     * The value for the contrarecibo_fechapago field.
     * @var        string
     */
    protected $contrarecibo_fechapago;

    /**
     * The value for the contrarecibo_fechavalidacion field.
     * @var        string
     */
    protected $contrarecibo_fechavalidacion;

    /**
     * @var        PropelObjectCollection|Compra[] Collection to store aggregation of Compra objects.
     */
    protected $collCompras;
    protected $collComprasPartial;

    /**
     * @var        PropelObjectCollection|Contrarecibodetalle[] Collection to store aggregation of Contrarecibodetalle objects.
     */
    protected $collContrarecibodetalles;
    protected $collContrarecibodetallesPartial;

    /**
     * @var        PropelObjectCollection|Eventocontrarecibo[] Collection to store aggregation of Eventocontrarecibo objects.
     */
    protected $collEventocontrarecibos;
    protected $collEventocontrarecibosPartial;

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
    protected $contrarecibodetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $eventocontrarecibosScheduledForDeletion = null;

    /**
     * Get the [idcontrarecibo] column value.
     *
     * @return int
     */
    public function getIdcontrarecibo()
    {

        return $this->idcontrarecibo;
    }

    /**
     * Get the [contrarecibo_moneda] column value.
     *
     * @return string
     */
    public function getContrareciboMoneda()
    {

        return $this->contrarecibo_moneda;
    }

    /**
     * Get the [contrarecibo_total] column value.
     *
     * @return string
     */
    public function getContrareciboTotal()
    {

        return $this->contrarecibo_total;
    }

    /**
     * Get the [idempresaproveedor] column value.
     *
     * @return int
     */
    public function getIdempresaproveedor()
    {

        return $this->idempresaproveedor;
    }

    /**
     * Get the [idsucursalproveedor] column value.
     *
     * @return int
     */
    public function getIdsucursalproveedor()
    {

        return $this->idsucursalproveedor;
    }

    /**
     * Get the [idempresacliente] column value.
     *
     * @return int
     */
    public function getIdempresacliente()
    {

        return $this->idempresacliente;
    }

    /**
     * Get the [idsucursalcliente] column value.
     *
     * @return int
     */
    public function getIdsucursalcliente()
    {

        return $this->idsucursalcliente;
    }

    /**
     * Get the [optionally formatted] temporal [contrarecibo_fechacreacion] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getContrareciboFechacreacion($format = 'Y-m-d H:i:s')
    {
        if ($this->contrarecibo_fechacreacion === null) {
            return null;
        }

        if ($this->contrarecibo_fechacreacion === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->contrarecibo_fechacreacion);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->contrarecibo_fechacreacion, true), $x);
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
     * Get the [contrarecibo_estatus] column value.
     *
     * @return string
     */
    public function getContrareciboEstatus()
    {

        return $this->contrarecibo_estatus;
    }

    /**
     * Get the [optionally formatted] temporal [contrarecibo_fechapago] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getContrareciboFechapago($format = 'Y-m-d H:i:s')
    {
        if ($this->contrarecibo_fechapago === null) {
            return null;
        }

        if ($this->contrarecibo_fechapago === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->contrarecibo_fechapago);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->contrarecibo_fechapago, true), $x);
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
     * Get the [optionally formatted] temporal [contrarecibo_fechavalidacion] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getContrareciboFechavalidacion($format = 'Y-m-d H:i:s')
    {
        if ($this->contrarecibo_fechavalidacion === null) {
            return null;
        }

        if ($this->contrarecibo_fechavalidacion === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->contrarecibo_fechavalidacion);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->contrarecibo_fechavalidacion, true), $x);
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
     * Set the value of [idcontrarecibo] column.
     *
     * @param  int $v new value
     * @return Contrarecibo The current object (for fluent API support)
     */
    public function setIdcontrarecibo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcontrarecibo !== $v) {
            $this->idcontrarecibo = $v;
            $this->modifiedColumns[] = ContrareciboPeer::IDCONTRARECIBO;
        }


        return $this;
    } // setIdcontrarecibo()

    /**
     * Set the value of [contrarecibo_moneda] column.
     *
     * @param  string $v new value
     * @return Contrarecibo The current object (for fluent API support)
     */
    public function setContrareciboMoneda($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->contrarecibo_moneda !== $v) {
            $this->contrarecibo_moneda = $v;
            $this->modifiedColumns[] = ContrareciboPeer::CONTRARECIBO_MONEDA;
        }


        return $this;
    } // setContrareciboMoneda()

    /**
     * Set the value of [contrarecibo_total] column.
     *
     * @param  string $v new value
     * @return Contrarecibo The current object (for fluent API support)
     */
    public function setContrareciboTotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->contrarecibo_total !== $v) {
            $this->contrarecibo_total = $v;
            $this->modifiedColumns[] = ContrareciboPeer::CONTRARECIBO_TOTAL;
        }


        return $this;
    } // setContrareciboTotal()

    /**
     * Set the value of [idempresaproveedor] column.
     *
     * @param  int $v new value
     * @return Contrarecibo The current object (for fluent API support)
     */
    public function setIdempresaproveedor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempresaproveedor !== $v) {
            $this->idempresaproveedor = $v;
            $this->modifiedColumns[] = ContrareciboPeer::IDEMPRESAPROVEEDOR;
        }


        return $this;
    } // setIdempresaproveedor()

    /**
     * Set the value of [idsucursalproveedor] column.
     *
     * @param  int $v new value
     * @return Contrarecibo The current object (for fluent API support)
     */
    public function setIdsucursalproveedor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idsucursalproveedor !== $v) {
            $this->idsucursalproveedor = $v;
            $this->modifiedColumns[] = ContrareciboPeer::IDSUCURSALPROVEEDOR;
        }


        return $this;
    } // setIdsucursalproveedor()

    /**
     * Set the value of [idempresacliente] column.
     *
     * @param  int $v new value
     * @return Contrarecibo The current object (for fluent API support)
     */
    public function setIdempresacliente($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempresacliente !== $v) {
            $this->idempresacliente = $v;
            $this->modifiedColumns[] = ContrareciboPeer::IDEMPRESACLIENTE;
        }


        return $this;
    } // setIdempresacliente()

    /**
     * Set the value of [idsucursalcliente] column.
     *
     * @param  int $v new value
     * @return Contrarecibo The current object (for fluent API support)
     */
    public function setIdsucursalcliente($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idsucursalcliente !== $v) {
            $this->idsucursalcliente = $v;
            $this->modifiedColumns[] = ContrareciboPeer::IDSUCURSALCLIENTE;
        }


        return $this;
    } // setIdsucursalcliente()

    /**
     * Sets the value of [contrarecibo_fechacreacion] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Contrarecibo The current object (for fluent API support)
     */
    public function setContrareciboFechacreacion($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->contrarecibo_fechacreacion !== null || $dt !== null) {
            $currentDateAsString = ($this->contrarecibo_fechacreacion !== null && $tmpDt = new DateTime($this->contrarecibo_fechacreacion)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->contrarecibo_fechacreacion = $newDateAsString;
                $this->modifiedColumns[] = ContrareciboPeer::CONTRARECIBO_FECHACREACION;
            }
        } // if either are not null


        return $this;
    } // setContrareciboFechacreacion()

    /**
     * Set the value of [contrarecibo_estatus] column.
     *
     * @param  string $v new value
     * @return Contrarecibo The current object (for fluent API support)
     */
    public function setContrareciboEstatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->contrarecibo_estatus !== $v) {
            $this->contrarecibo_estatus = $v;
            $this->modifiedColumns[] = ContrareciboPeer::CONTRARECIBO_ESTATUS;
        }


        return $this;
    } // setContrareciboEstatus()

    /**
     * Sets the value of [contrarecibo_fechapago] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Contrarecibo The current object (for fluent API support)
     */
    public function setContrareciboFechapago($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->contrarecibo_fechapago !== null || $dt !== null) {
            $currentDateAsString = ($this->contrarecibo_fechapago !== null && $tmpDt = new DateTime($this->contrarecibo_fechapago)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->contrarecibo_fechapago = $newDateAsString;
                $this->modifiedColumns[] = ContrareciboPeer::CONTRARECIBO_FECHAPAGO;
            }
        } // if either are not null


        return $this;
    } // setContrareciboFechapago()

    /**
     * Sets the value of [contrarecibo_fechavalidacion] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Contrarecibo The current object (for fluent API support)
     */
    public function setContrareciboFechavalidacion($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->contrarecibo_fechavalidacion !== null || $dt !== null) {
            $currentDateAsString = ($this->contrarecibo_fechavalidacion !== null && $tmpDt = new DateTime($this->contrarecibo_fechavalidacion)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->contrarecibo_fechavalidacion = $newDateAsString;
                $this->modifiedColumns[] = ContrareciboPeer::CONTRARECIBO_FECHAVALIDACION;
            }
        } // if either are not null


        return $this;
    } // setContrareciboFechavalidacion()

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

            $this->idcontrarecibo = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->contrarecibo_moneda = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->contrarecibo_total = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->idempresaproveedor = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->idsucursalproveedor = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->idempresacliente = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->idsucursalcliente = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->contrarecibo_fechacreacion = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->contrarecibo_estatus = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->contrarecibo_fechapago = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->contrarecibo_fechavalidacion = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 11; // 11 = ContrareciboPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Contrarecibo object", $e);
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
            $con = Propel::getConnection(ContrareciboPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ContrareciboPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collCompras = null;

            $this->collContrarecibodetalles = null;

            $this->collEventocontrarecibos = null;

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
            $con = Propel::getConnection(ContrareciboPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ContrareciboQuery::create()
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
            $con = Propel::getConnection(ContrareciboPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ContrareciboPeer::addInstanceToPool($this);
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

            if ($this->contrarecibodetallesScheduledForDeletion !== null) {
                if (!$this->contrarecibodetallesScheduledForDeletion->isEmpty()) {
                    ContrarecibodetalleQuery::create()
                        ->filterByPrimaryKeys($this->contrarecibodetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->contrarecibodetallesScheduledForDeletion = null;
                }
            }

            if ($this->collContrarecibodetalles !== null) {
                foreach ($this->collContrarecibodetalles as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->eventocontrarecibosScheduledForDeletion !== null) {
                if (!$this->eventocontrarecibosScheduledForDeletion->isEmpty()) {
                    EventocontrareciboQuery::create()
                        ->filterByPrimaryKeys($this->eventocontrarecibosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->eventocontrarecibosScheduledForDeletion = null;
                }
            }

            if ($this->collEventocontrarecibos !== null) {
                foreach ($this->collEventocontrarecibos as $referrerFK) {
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

        $this->modifiedColumns[] = ContrareciboPeer::IDCONTRARECIBO;
        if (null !== $this->idcontrarecibo) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ContrareciboPeer::IDCONTRARECIBO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ContrareciboPeer::IDCONTRARECIBO)) {
            $modifiedColumns[':p' . $index++]  = '`idcontrarecibo`';
        }
        if ($this->isColumnModified(ContrareciboPeer::CONTRARECIBO_MONEDA)) {
            $modifiedColumns[':p' . $index++]  = '`contrarecibo_moneda`';
        }
        if ($this->isColumnModified(ContrareciboPeer::CONTRARECIBO_TOTAL)) {
            $modifiedColumns[':p' . $index++]  = '`contrarecibo_total`';
        }
        if ($this->isColumnModified(ContrareciboPeer::IDEMPRESAPROVEEDOR)) {
            $modifiedColumns[':p' . $index++]  = '`idempresaproveedor`';
        }
        if ($this->isColumnModified(ContrareciboPeer::IDSUCURSALPROVEEDOR)) {
            $modifiedColumns[':p' . $index++]  = '`idsucursalproveedor`';
        }
        if ($this->isColumnModified(ContrareciboPeer::IDEMPRESACLIENTE)) {
            $modifiedColumns[':p' . $index++]  = '`idempresacliente`';
        }
        if ($this->isColumnModified(ContrareciboPeer::IDSUCURSALCLIENTE)) {
            $modifiedColumns[':p' . $index++]  = '`idsucursalcliente`';
        }
        if ($this->isColumnModified(ContrareciboPeer::CONTRARECIBO_FECHACREACION)) {
            $modifiedColumns[':p' . $index++]  = '`contrarecibo_fechacreacion`';
        }
        if ($this->isColumnModified(ContrareciboPeer::CONTRARECIBO_ESTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`contrarecibo_estatus`';
        }
        if ($this->isColumnModified(ContrareciboPeer::CONTRARECIBO_FECHAPAGO)) {
            $modifiedColumns[':p' . $index++]  = '`contrarecibo_fechapago`';
        }
        if ($this->isColumnModified(ContrareciboPeer::CONTRARECIBO_FECHAVALIDACION)) {
            $modifiedColumns[':p' . $index++]  = '`contrarecibo_fechavalidacion`';
        }

        $sql = sprintf(
            'INSERT INTO `contrarecibo` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idcontrarecibo`':
                        $stmt->bindValue($identifier, $this->idcontrarecibo, PDO::PARAM_INT);
                        break;
                    case '`contrarecibo_moneda`':
                        $stmt->bindValue($identifier, $this->contrarecibo_moneda, PDO::PARAM_STR);
                        break;
                    case '`contrarecibo_total`':
                        $stmt->bindValue($identifier, $this->contrarecibo_total, PDO::PARAM_STR);
                        break;
                    case '`idempresaproveedor`':
                        $stmt->bindValue($identifier, $this->idempresaproveedor, PDO::PARAM_INT);
                        break;
                    case '`idsucursalproveedor`':
                        $stmt->bindValue($identifier, $this->idsucursalproveedor, PDO::PARAM_INT);
                        break;
                    case '`idempresacliente`':
                        $stmt->bindValue($identifier, $this->idempresacliente, PDO::PARAM_INT);
                        break;
                    case '`idsucursalcliente`':
                        $stmt->bindValue($identifier, $this->idsucursalcliente, PDO::PARAM_INT);
                        break;
                    case '`contrarecibo_fechacreacion`':
                        $stmt->bindValue($identifier, $this->contrarecibo_fechacreacion, PDO::PARAM_STR);
                        break;
                    case '`contrarecibo_estatus`':
                        $stmt->bindValue($identifier, $this->contrarecibo_estatus, PDO::PARAM_STR);
                        break;
                    case '`contrarecibo_fechapago`':
                        $stmt->bindValue($identifier, $this->contrarecibo_fechapago, PDO::PARAM_STR);
                        break;
                    case '`contrarecibo_fechavalidacion`':
                        $stmt->bindValue($identifier, $this->contrarecibo_fechavalidacion, PDO::PARAM_STR);
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
        $this->setIdcontrarecibo($pk);

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


            if (($retval = ContrareciboPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCompras !== null) {
                    foreach ($this->collCompras as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collContrarecibodetalles !== null) {
                    foreach ($this->collContrarecibodetalles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collEventocontrarecibos !== null) {
                    foreach ($this->collEventocontrarecibos as $referrerFK) {
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
        $pos = ContrareciboPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdcontrarecibo();
                break;
            case 1:
                return $this->getContrareciboMoneda();
                break;
            case 2:
                return $this->getContrareciboTotal();
                break;
            case 3:
                return $this->getIdempresaproveedor();
                break;
            case 4:
                return $this->getIdsucursalproveedor();
                break;
            case 5:
                return $this->getIdempresacliente();
                break;
            case 6:
                return $this->getIdsucursalcliente();
                break;
            case 7:
                return $this->getContrareciboFechacreacion();
                break;
            case 8:
                return $this->getContrareciboEstatus();
                break;
            case 9:
                return $this->getContrareciboFechapago();
                break;
            case 10:
                return $this->getContrareciboFechavalidacion();
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
        if (isset($alreadyDumpedObjects['Contrarecibo'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Contrarecibo'][$this->getPrimaryKey()] = true;
        $keys = ContrareciboPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdcontrarecibo(),
            $keys[1] => $this->getContrareciboMoneda(),
            $keys[2] => $this->getContrareciboTotal(),
            $keys[3] => $this->getIdempresaproveedor(),
            $keys[4] => $this->getIdsucursalproveedor(),
            $keys[5] => $this->getIdempresacliente(),
            $keys[6] => $this->getIdsucursalcliente(),
            $keys[7] => $this->getContrareciboFechacreacion(),
            $keys[8] => $this->getContrareciboEstatus(),
            $keys[9] => $this->getContrareciboFechapago(),
            $keys[10] => $this->getContrareciboFechavalidacion(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collCompras) {
                $result['Compras'] = $this->collCompras->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collContrarecibodetalles) {
                $result['Contrarecibodetalles'] = $this->collContrarecibodetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collEventocontrarecibos) {
                $result['Eventocontrarecibos'] = $this->collEventocontrarecibos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ContrareciboPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdcontrarecibo($value);
                break;
            case 1:
                $this->setContrareciboMoneda($value);
                break;
            case 2:
                $this->setContrareciboTotal($value);
                break;
            case 3:
                $this->setIdempresaproveedor($value);
                break;
            case 4:
                $this->setIdsucursalproveedor($value);
                break;
            case 5:
                $this->setIdempresacliente($value);
                break;
            case 6:
                $this->setIdsucursalcliente($value);
                break;
            case 7:
                $this->setContrareciboFechacreacion($value);
                break;
            case 8:
                $this->setContrareciboEstatus($value);
                break;
            case 9:
                $this->setContrareciboFechapago($value);
                break;
            case 10:
                $this->setContrareciboFechavalidacion($value);
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
        $keys = ContrareciboPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdcontrarecibo($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setContrareciboMoneda($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setContrareciboTotal($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdempresaproveedor($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdsucursalproveedor($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdempresacliente($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdsucursalcliente($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setContrareciboFechacreacion($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setContrareciboEstatus($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setContrareciboFechapago($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setContrareciboFechavalidacion($arr[$keys[10]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ContrareciboPeer::DATABASE_NAME);

        if ($this->isColumnModified(ContrareciboPeer::IDCONTRARECIBO)) $criteria->add(ContrareciboPeer::IDCONTRARECIBO, $this->idcontrarecibo);
        if ($this->isColumnModified(ContrareciboPeer::CONTRARECIBO_MONEDA)) $criteria->add(ContrareciboPeer::CONTRARECIBO_MONEDA, $this->contrarecibo_moneda);
        if ($this->isColumnModified(ContrareciboPeer::CONTRARECIBO_TOTAL)) $criteria->add(ContrareciboPeer::CONTRARECIBO_TOTAL, $this->contrarecibo_total);
        if ($this->isColumnModified(ContrareciboPeer::IDEMPRESAPROVEEDOR)) $criteria->add(ContrareciboPeer::IDEMPRESAPROVEEDOR, $this->idempresaproveedor);
        if ($this->isColumnModified(ContrareciboPeer::IDSUCURSALPROVEEDOR)) $criteria->add(ContrareciboPeer::IDSUCURSALPROVEEDOR, $this->idsucursalproveedor);
        if ($this->isColumnModified(ContrareciboPeer::IDEMPRESACLIENTE)) $criteria->add(ContrareciboPeer::IDEMPRESACLIENTE, $this->idempresacliente);
        if ($this->isColumnModified(ContrareciboPeer::IDSUCURSALCLIENTE)) $criteria->add(ContrareciboPeer::IDSUCURSALCLIENTE, $this->idsucursalcliente);
        if ($this->isColumnModified(ContrareciboPeer::CONTRARECIBO_FECHACREACION)) $criteria->add(ContrareciboPeer::CONTRARECIBO_FECHACREACION, $this->contrarecibo_fechacreacion);
        if ($this->isColumnModified(ContrareciboPeer::CONTRARECIBO_ESTATUS)) $criteria->add(ContrareciboPeer::CONTRARECIBO_ESTATUS, $this->contrarecibo_estatus);
        if ($this->isColumnModified(ContrareciboPeer::CONTRARECIBO_FECHAPAGO)) $criteria->add(ContrareciboPeer::CONTRARECIBO_FECHAPAGO, $this->contrarecibo_fechapago);
        if ($this->isColumnModified(ContrareciboPeer::CONTRARECIBO_FECHAVALIDACION)) $criteria->add(ContrareciboPeer::CONTRARECIBO_FECHAVALIDACION, $this->contrarecibo_fechavalidacion);

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
        $criteria = new Criteria(ContrareciboPeer::DATABASE_NAME);
        $criteria->add(ContrareciboPeer::IDCONTRARECIBO, $this->idcontrarecibo);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdcontrarecibo();
    }

    /**
     * Generic method to set the primary key (idcontrarecibo column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdcontrarecibo($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdcontrarecibo();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Contrarecibo (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setContrareciboMoneda($this->getContrareciboMoneda());
        $copyObj->setContrareciboTotal($this->getContrareciboTotal());
        $copyObj->setIdempresaproveedor($this->getIdempresaproveedor());
        $copyObj->setIdsucursalproveedor($this->getIdsucursalproveedor());
        $copyObj->setIdempresacliente($this->getIdempresacliente());
        $copyObj->setIdsucursalcliente($this->getIdsucursalcliente());
        $copyObj->setContrareciboFechacreacion($this->getContrareciboFechacreacion());
        $copyObj->setContrareciboEstatus($this->getContrareciboEstatus());
        $copyObj->setContrareciboFechapago($this->getContrareciboFechapago());
        $copyObj->setContrareciboFechavalidacion($this->getContrareciboFechavalidacion());

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

            foreach ($this->getContrarecibodetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addContrarecibodetalle($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getEventocontrarecibos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addEventocontrarecibo($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdcontrarecibo(NULL); // this is a auto-increment column, so set to default value
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
     * @return Contrarecibo Clone of current object.
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
     * @return ContrareciboPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ContrareciboPeer();
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
        if ('Contrarecibodetalle' == $relationName) {
            $this->initContrarecibodetalles();
        }
        if ('Eventocontrarecibo' == $relationName) {
            $this->initEventocontrarecibos();
        }
    }

    /**
     * Clears out the collCompras collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Contrarecibo The current object (for fluent API support)
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
     * If this Contrarecibo is new, it will return
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
                    ->filterByContrarecibo($this)
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
     * @return Contrarecibo The current object (for fluent API support)
     */
    public function setCompras(PropelCollection $compras, PropelPDO $con = null)
    {
        $comprasToDelete = $this->getCompras(new Criteria(), $con)->diff($compras);


        $this->comprasScheduledForDeletion = $comprasToDelete;

        foreach ($comprasToDelete as $compraRemoved) {
            $compraRemoved->setContrarecibo(null);
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
                ->filterByContrarecibo($this)
                ->count($con);
        }

        return count($this->collCompras);
    }

    /**
     * Method called to associate a Compra object to this object
     * through the Compra foreign key attribute.
     *
     * @param    Compra $l Compra
     * @return Contrarecibo The current object (for fluent API support)
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
        $compra->setContrarecibo($this);
    }

    /**
     * @param	Compra $compra The compra object to remove.
     * @return Contrarecibo The current object (for fluent API support)
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
            $compra->setContrarecibo(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contrarecibo is new, it will return
     * an empty collection; or if this Contrarecibo has previously
     * been saved, it will retrieve related Compras from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contrarecibo.
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
     * Otherwise if this Contrarecibo is new, it will return
     * an empty collection; or if this Contrarecibo has previously
     * been saved, it will retrieve related Compras from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contrarecibo.
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
     * Otherwise if this Contrarecibo is new, it will return
     * an empty collection; or if this Contrarecibo has previously
     * been saved, it will retrieve related Compras from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contrarecibo.
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
     * Otherwise if this Contrarecibo is new, it will return
     * an empty collection; or if this Contrarecibo has previously
     * been saved, it will retrieve related Compras from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contrarecibo.
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
     * Otherwise if this Contrarecibo is new, it will return
     * an empty collection; or if this Contrarecibo has previously
     * been saved, it will retrieve related Compras from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contrarecibo.
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
     * Otherwise if this Contrarecibo is new, it will return
     * an empty collection; or if this Contrarecibo has previously
     * been saved, it will retrieve related Compras from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contrarecibo.
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
     * Clears out the collContrarecibodetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Contrarecibo The current object (for fluent API support)
     * @see        addContrarecibodetalles()
     */
    public function clearContrarecibodetalles()
    {
        $this->collContrarecibodetalles = null; // important to set this to null since that means it is uninitialized
        $this->collContrarecibodetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collContrarecibodetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialContrarecibodetalles($v = true)
    {
        $this->collContrarecibodetallesPartial = $v;
    }

    /**
     * Initializes the collContrarecibodetalles collection.
     *
     * By default this just sets the collContrarecibodetalles collection to an empty array (like clearcollContrarecibodetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initContrarecibodetalles($overrideExisting = true)
    {
        if (null !== $this->collContrarecibodetalles && !$overrideExisting) {
            return;
        }
        $this->collContrarecibodetalles = new PropelObjectCollection();
        $this->collContrarecibodetalles->setModel('Contrarecibodetalle');
    }

    /**
     * Gets an array of Contrarecibodetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Contrarecibo is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Contrarecibodetalle[] List of Contrarecibodetalle objects
     * @throws PropelException
     */
    public function getContrarecibodetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collContrarecibodetallesPartial && !$this->isNew();
        if (null === $this->collContrarecibodetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collContrarecibodetalles) {
                // return empty collection
                $this->initContrarecibodetalles();
            } else {
                $collContrarecibodetalles = ContrarecibodetalleQuery::create(null, $criteria)
                    ->filterByContrarecibo($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collContrarecibodetallesPartial && count($collContrarecibodetalles)) {
                      $this->initContrarecibodetalles(false);

                      foreach ($collContrarecibodetalles as $obj) {
                        if (false == $this->collContrarecibodetalles->contains($obj)) {
                          $this->collContrarecibodetalles->append($obj);
                        }
                      }

                      $this->collContrarecibodetallesPartial = true;
                    }

                    $collContrarecibodetalles->getInternalIterator()->rewind();

                    return $collContrarecibodetalles;
                }

                if ($partial && $this->collContrarecibodetalles) {
                    foreach ($this->collContrarecibodetalles as $obj) {
                        if ($obj->isNew()) {
                            $collContrarecibodetalles[] = $obj;
                        }
                    }
                }

                $this->collContrarecibodetalles = $collContrarecibodetalles;
                $this->collContrarecibodetallesPartial = false;
            }
        }

        return $this->collContrarecibodetalles;
    }

    /**
     * Sets a collection of Contrarecibodetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $contrarecibodetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Contrarecibo The current object (for fluent API support)
     */
    public function setContrarecibodetalles(PropelCollection $contrarecibodetalles, PropelPDO $con = null)
    {
        $contrarecibodetallesToDelete = $this->getContrarecibodetalles(new Criteria(), $con)->diff($contrarecibodetalles);


        $this->contrarecibodetallesScheduledForDeletion = $contrarecibodetallesToDelete;

        foreach ($contrarecibodetallesToDelete as $contrarecibodetalleRemoved) {
            $contrarecibodetalleRemoved->setContrarecibo(null);
        }

        $this->collContrarecibodetalles = null;
        foreach ($contrarecibodetalles as $contrarecibodetalle) {
            $this->addContrarecibodetalle($contrarecibodetalle);
        }

        $this->collContrarecibodetalles = $contrarecibodetalles;
        $this->collContrarecibodetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Contrarecibodetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Contrarecibodetalle objects.
     * @throws PropelException
     */
    public function countContrarecibodetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collContrarecibodetallesPartial && !$this->isNew();
        if (null === $this->collContrarecibodetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collContrarecibodetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getContrarecibodetalles());
            }
            $query = ContrarecibodetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByContrarecibo($this)
                ->count($con);
        }

        return count($this->collContrarecibodetalles);
    }

    /**
     * Method called to associate a Contrarecibodetalle object to this object
     * through the Contrarecibodetalle foreign key attribute.
     *
     * @param    Contrarecibodetalle $l Contrarecibodetalle
     * @return Contrarecibo The current object (for fluent API support)
     */
    public function addContrarecibodetalle(Contrarecibodetalle $l)
    {
        if ($this->collContrarecibodetalles === null) {
            $this->initContrarecibodetalles();
            $this->collContrarecibodetallesPartial = true;
        }

        if (!in_array($l, $this->collContrarecibodetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddContrarecibodetalle($l);

            if ($this->contrarecibodetallesScheduledForDeletion and $this->contrarecibodetallesScheduledForDeletion->contains($l)) {
                $this->contrarecibodetallesScheduledForDeletion->remove($this->contrarecibodetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Contrarecibodetalle $contrarecibodetalle The contrarecibodetalle object to add.
     */
    protected function doAddContrarecibodetalle($contrarecibodetalle)
    {
        $this->collContrarecibodetalles[]= $contrarecibodetalle;
        $contrarecibodetalle->setContrarecibo($this);
    }

    /**
     * @param	Contrarecibodetalle $contrarecibodetalle The contrarecibodetalle object to remove.
     * @return Contrarecibo The current object (for fluent API support)
     */
    public function removeContrarecibodetalle($contrarecibodetalle)
    {
        if ($this->getContrarecibodetalles()->contains($contrarecibodetalle)) {
            $this->collContrarecibodetalles->remove($this->collContrarecibodetalles->search($contrarecibodetalle));
            if (null === $this->contrarecibodetallesScheduledForDeletion) {
                $this->contrarecibodetallesScheduledForDeletion = clone $this->collContrarecibodetalles;
                $this->contrarecibodetallesScheduledForDeletion->clear();
            }
            $this->contrarecibodetallesScheduledForDeletion[]= clone $contrarecibodetalle;
            $contrarecibodetalle->setContrarecibo(null);
        }

        return $this;
    }

    /**
     * Clears out the collEventocontrarecibos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Contrarecibo The current object (for fluent API support)
     * @see        addEventocontrarecibos()
     */
    public function clearEventocontrarecibos()
    {
        $this->collEventocontrarecibos = null; // important to set this to null since that means it is uninitialized
        $this->collEventocontrarecibosPartial = null;

        return $this;
    }

    /**
     * reset is the collEventocontrarecibos collection loaded partially
     *
     * @return void
     */
    public function resetPartialEventocontrarecibos($v = true)
    {
        $this->collEventocontrarecibosPartial = $v;
    }

    /**
     * Initializes the collEventocontrarecibos collection.
     *
     * By default this just sets the collEventocontrarecibos collection to an empty array (like clearcollEventocontrarecibos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initEventocontrarecibos($overrideExisting = true)
    {
        if (null !== $this->collEventocontrarecibos && !$overrideExisting) {
            return;
        }
        $this->collEventocontrarecibos = new PropelObjectCollection();
        $this->collEventocontrarecibos->setModel('Eventocontrarecibo');
    }

    /**
     * Gets an array of Eventocontrarecibo objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Contrarecibo is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Eventocontrarecibo[] List of Eventocontrarecibo objects
     * @throws PropelException
     */
    public function getEventocontrarecibos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collEventocontrarecibosPartial && !$this->isNew();
        if (null === $this->collEventocontrarecibos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collEventocontrarecibos) {
                // return empty collection
                $this->initEventocontrarecibos();
            } else {
                $collEventocontrarecibos = EventocontrareciboQuery::create(null, $criteria)
                    ->filterByContrarecibo($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collEventocontrarecibosPartial && count($collEventocontrarecibos)) {
                      $this->initEventocontrarecibos(false);

                      foreach ($collEventocontrarecibos as $obj) {
                        if (false == $this->collEventocontrarecibos->contains($obj)) {
                          $this->collEventocontrarecibos->append($obj);
                        }
                      }

                      $this->collEventocontrarecibosPartial = true;
                    }

                    $collEventocontrarecibos->getInternalIterator()->rewind();

                    return $collEventocontrarecibos;
                }

                if ($partial && $this->collEventocontrarecibos) {
                    foreach ($this->collEventocontrarecibos as $obj) {
                        if ($obj->isNew()) {
                            $collEventocontrarecibos[] = $obj;
                        }
                    }
                }

                $this->collEventocontrarecibos = $collEventocontrarecibos;
                $this->collEventocontrarecibosPartial = false;
            }
        }

        return $this->collEventocontrarecibos;
    }

    /**
     * Sets a collection of Eventocontrarecibo objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $eventocontrarecibos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Contrarecibo The current object (for fluent API support)
     */
    public function setEventocontrarecibos(PropelCollection $eventocontrarecibos, PropelPDO $con = null)
    {
        $eventocontrarecibosToDelete = $this->getEventocontrarecibos(new Criteria(), $con)->diff($eventocontrarecibos);


        $this->eventocontrarecibosScheduledForDeletion = $eventocontrarecibosToDelete;

        foreach ($eventocontrarecibosToDelete as $eventocontrareciboRemoved) {
            $eventocontrareciboRemoved->setContrarecibo(null);
        }

        $this->collEventocontrarecibos = null;
        foreach ($eventocontrarecibos as $eventocontrarecibo) {
            $this->addEventocontrarecibo($eventocontrarecibo);
        }

        $this->collEventocontrarecibos = $eventocontrarecibos;
        $this->collEventocontrarecibosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Eventocontrarecibo objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Eventocontrarecibo objects.
     * @throws PropelException
     */
    public function countEventocontrarecibos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collEventocontrarecibosPartial && !$this->isNew();
        if (null === $this->collEventocontrarecibos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collEventocontrarecibos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getEventocontrarecibos());
            }
            $query = EventocontrareciboQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByContrarecibo($this)
                ->count($con);
        }

        return count($this->collEventocontrarecibos);
    }

    /**
     * Method called to associate a Eventocontrarecibo object to this object
     * through the Eventocontrarecibo foreign key attribute.
     *
     * @param    Eventocontrarecibo $l Eventocontrarecibo
     * @return Contrarecibo The current object (for fluent API support)
     */
    public function addEventocontrarecibo(Eventocontrarecibo $l)
    {
        if ($this->collEventocontrarecibos === null) {
            $this->initEventocontrarecibos();
            $this->collEventocontrarecibosPartial = true;
        }

        if (!in_array($l, $this->collEventocontrarecibos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddEventocontrarecibo($l);

            if ($this->eventocontrarecibosScheduledForDeletion and $this->eventocontrarecibosScheduledForDeletion->contains($l)) {
                $this->eventocontrarecibosScheduledForDeletion->remove($this->eventocontrarecibosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Eventocontrarecibo $eventocontrarecibo The eventocontrarecibo object to add.
     */
    protected function doAddEventocontrarecibo($eventocontrarecibo)
    {
        $this->collEventocontrarecibos[]= $eventocontrarecibo;
        $eventocontrarecibo->setContrarecibo($this);
    }

    /**
     * @param	Eventocontrarecibo $eventocontrarecibo The eventocontrarecibo object to remove.
     * @return Contrarecibo The current object (for fluent API support)
     */
    public function removeEventocontrarecibo($eventocontrarecibo)
    {
        if ($this->getEventocontrarecibos()->contains($eventocontrarecibo)) {
            $this->collEventocontrarecibos->remove($this->collEventocontrarecibos->search($eventocontrarecibo));
            if (null === $this->eventocontrarecibosScheduledForDeletion) {
                $this->eventocontrarecibosScheduledForDeletion = clone $this->collEventocontrarecibos;
                $this->eventocontrarecibosScheduledForDeletion->clear();
            }
            $this->eventocontrarecibosScheduledForDeletion[]= clone $eventocontrarecibo;
            $eventocontrarecibo->setContrarecibo(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idcontrarecibo = null;
        $this->contrarecibo_moneda = null;
        $this->contrarecibo_total = null;
        $this->idempresaproveedor = null;
        $this->idsucursalproveedor = null;
        $this->idempresacliente = null;
        $this->idsucursalcliente = null;
        $this->contrarecibo_fechacreacion = null;
        $this->contrarecibo_estatus = null;
        $this->contrarecibo_fechapago = null;
        $this->contrarecibo_fechavalidacion = null;
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
            if ($this->collContrarecibodetalles) {
                foreach ($this->collContrarecibodetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collEventocontrarecibos) {
                foreach ($this->collEventocontrarecibos as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCompras instanceof PropelCollection) {
            $this->collCompras->clearIterator();
        }
        $this->collCompras = null;
        if ($this->collContrarecibodetalles instanceof PropelCollection) {
            $this->collContrarecibodetalles->clearIterator();
        }
        $this->collContrarecibodetalles = null;
        if ($this->collEventocontrarecibos instanceof PropelCollection) {
            $this->collEventocontrarecibos->clearIterator();
        }
        $this->collEventocontrarecibos = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ContrareciboPeer::DEFAULT_STRING_FORMAT);
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
