<?php


/**
 * Base class that represents a row from the 'abonoproveedordetalle' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseAbonoproveedordetalle extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'AbonoproveedordetallePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        AbonoproveedordetallePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idabonoproveedordetalle field.
     * @var        int
     */
    protected $idabonoproveedordetalle;

    /**
     * The value for the idabonoproveedor field.
     * @var        int
     */
    protected $idabonoproveedor;

    /**
     * The value for the idcuentabancaria field.
     * @var        int
     */
    protected $idcuentabancaria;

    /**
     * The value for the idusuario field.
     * @var        int
     */
    protected $idusuario;

    /**
     * The value for the abonoproveedordetalle_fechaabono field.
     * @var        string
     */
    protected $abonoproveedordetalle_fechaabono;

    /**
     * The value for the abonoproveedordetalle_cantidad field.
     * @var        string
     */
    protected $abonoproveedordetalle_cantidad;

    /**
     * The value for the abonoproveedordetalle_tipo field.
     * @var        string
     */
    protected $abonoproveedordetalle_tipo;

    /**
     * The value for the abonoproveedordetalle_referencia field.
     * @var        string
     */
    protected $abonoproveedordetalle_referencia;

    /**
     * The value for the abonoproveedordetalle_comprobante field.
     * @var        string
     */
    protected $abonoproveedordetalle_comprobante;

    /**
     * The value for the abonoproveedordetalle_mediodepago field.
     * @var        string
     */
    protected $abonoproveedordetalle_mediodepago;

    /**
     * The value for the abonoproveedordetalle_chequecirculacion field.
     * @var        boolean
     */
    protected $abonoproveedordetalle_chequecirculacion;

    /**
     * The value for the abonoproveedordetalle_fechacobrocheque field.
     * @var        string
     */
    protected $abonoproveedordetalle_fechacobrocheque;

    /**
     * @var        Abonoproveedor
     */
    protected $aAbonoproveedor;

    /**
     * @var        Cuentabancaria
     */
    protected $aCuentabancaria;

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
     * Get the [idabonoproveedordetalle] column value.
     *
     * @return int
     */
    public function getIdabonoproveedordetalle()
    {

        return $this->idabonoproveedordetalle;
    }

    /**
     * Get the [idabonoproveedor] column value.
     *
     * @return int
     */
    public function getIdabonoproveedor()
    {

        return $this->idabonoproveedor;
    }

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
     * Get the [idusuario] column value.
     *
     * @return int
     */
    public function getIdusuario()
    {

        return $this->idusuario;
    }

    /**
     * Get the [optionally formatted] temporal [abonoproveedordetalle_fechaabono] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getAbonoproveedordetalleFechaabono($format = 'Y-m-d H:i:s')
    {
        if ($this->abonoproveedordetalle_fechaabono === null) {
            return null;
        }

        if ($this->abonoproveedordetalle_fechaabono === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->abonoproveedordetalle_fechaabono);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->abonoproveedordetalle_fechaabono, true), $x);
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
     * Get the [abonoproveedordetalle_cantidad] column value.
     *
     * @return string
     */
    public function getAbonoproveedordetalleCantidad()
    {

        return $this->abonoproveedordetalle_cantidad;
    }

    /**
     * Get the [abonoproveedordetalle_tipo] column value.
     *
     * @return string
     */
    public function getAbonoproveedordetalleTipo()
    {

        return $this->abonoproveedordetalle_tipo;
    }

    /**
     * Get the [abonoproveedordetalle_referencia] column value.
     *
     * @return string
     */
    public function getAbonoproveedordetalleReferencia()
    {

        return $this->abonoproveedordetalle_referencia;
    }

    /**
     * Get the [abonoproveedordetalle_comprobante] column value.
     *
     * @return string
     */
    public function getAbonoproveedordetalleComprobante()
    {

        return $this->abonoproveedordetalle_comprobante;
    }

    /**
     * Get the [abonoproveedordetalle_mediodepago] column value.
     *
     * @return string
     */
    public function getAbonoproveedordetalleMediodepago()
    {

        return $this->abonoproveedordetalle_mediodepago;
    }

    /**
     * Get the [abonoproveedordetalle_chequecirculacion] column value.
     *
     * @return boolean
     */
    public function getAbonoproveedordetalleChequecirculacion()
    {

        return $this->abonoproveedordetalle_chequecirculacion;
    }

    /**
     * Get the [optionally formatted] temporal [abonoproveedordetalle_fechacobrocheque] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getAbonoproveedordetalleFechacobrocheque($format = 'Y-m-d H:i:s')
    {
        if ($this->abonoproveedordetalle_fechacobrocheque === null) {
            return null;
        }

        if ($this->abonoproveedordetalle_fechacobrocheque === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->abonoproveedordetalle_fechacobrocheque);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->abonoproveedordetalle_fechacobrocheque, true), $x);
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
     * Set the value of [idabonoproveedordetalle] column.
     *
     * @param  int $v new value
     * @return Abonoproveedordetalle The current object (for fluent API support)
     */
    public function setIdabonoproveedordetalle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idabonoproveedordetalle !== $v) {
            $this->idabonoproveedordetalle = $v;
            $this->modifiedColumns[] = AbonoproveedordetallePeer::IDABONOPROVEEDORDETALLE;
        }


        return $this;
    } // setIdabonoproveedordetalle()

    /**
     * Set the value of [idabonoproveedor] column.
     *
     * @param  int $v new value
     * @return Abonoproveedordetalle The current object (for fluent API support)
     */
    public function setIdabonoproveedor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idabonoproveedor !== $v) {
            $this->idabonoproveedor = $v;
            $this->modifiedColumns[] = AbonoproveedordetallePeer::IDABONOPROVEEDOR;
        }

        if ($this->aAbonoproveedor !== null && $this->aAbonoproveedor->getIdabonoproveedor() !== $v) {
            $this->aAbonoproveedor = null;
        }


        return $this;
    } // setIdabonoproveedor()

    /**
     * Set the value of [idcuentabancaria] column.
     *
     * @param  int $v new value
     * @return Abonoproveedordetalle The current object (for fluent API support)
     */
    public function setIdcuentabancaria($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcuentabancaria !== $v) {
            $this->idcuentabancaria = $v;
            $this->modifiedColumns[] = AbonoproveedordetallePeer::IDCUENTABANCARIA;
        }

        if ($this->aCuentabancaria !== null && $this->aCuentabancaria->getIdcuentabancaria() !== $v) {
            $this->aCuentabancaria = null;
        }


        return $this;
    } // setIdcuentabancaria()

    /**
     * Set the value of [idusuario] column.
     *
     * @param  int $v new value
     * @return Abonoproveedordetalle The current object (for fluent API support)
     */
    public function setIdusuario($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idusuario !== $v) {
            $this->idusuario = $v;
            $this->modifiedColumns[] = AbonoproveedordetallePeer::IDUSUARIO;
        }

        if ($this->aUsuario !== null && $this->aUsuario->getIdusuario() !== $v) {
            $this->aUsuario = null;
        }


        return $this;
    } // setIdusuario()

    /**
     * Sets the value of [abonoproveedordetalle_fechaabono] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Abonoproveedordetalle The current object (for fluent API support)
     */
    public function setAbonoproveedordetalleFechaabono($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->abonoproveedordetalle_fechaabono !== null || $dt !== null) {
            $currentDateAsString = ($this->abonoproveedordetalle_fechaabono !== null && $tmpDt = new DateTime($this->abonoproveedordetalle_fechaabono)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->abonoproveedordetalle_fechaabono = $newDateAsString;
                $this->modifiedColumns[] = AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_FECHAABONO;
            }
        } // if either are not null


        return $this;
    } // setAbonoproveedordetalleFechaabono()

    /**
     * Set the value of [abonoproveedordetalle_cantidad] column.
     *
     * @param  string $v new value
     * @return Abonoproveedordetalle The current object (for fluent API support)
     */
    public function setAbonoproveedordetalleCantidad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->abonoproveedordetalle_cantidad !== $v) {
            $this->abonoproveedordetalle_cantidad = $v;
            $this->modifiedColumns[] = AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_CANTIDAD;
        }


        return $this;
    } // setAbonoproveedordetalleCantidad()

    /**
     * Set the value of [abonoproveedordetalle_tipo] column.
     *
     * @param  string $v new value
     * @return Abonoproveedordetalle The current object (for fluent API support)
     */
    public function setAbonoproveedordetalleTipo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->abonoproveedordetalle_tipo !== $v) {
            $this->abonoproveedordetalle_tipo = $v;
            $this->modifiedColumns[] = AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_TIPO;
        }


        return $this;
    } // setAbonoproveedordetalleTipo()

    /**
     * Set the value of [abonoproveedordetalle_referencia] column.
     *
     * @param  string $v new value
     * @return Abonoproveedordetalle The current object (for fluent API support)
     */
    public function setAbonoproveedordetalleReferencia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->abonoproveedordetalle_referencia !== $v) {
            $this->abonoproveedordetalle_referencia = $v;
            $this->modifiedColumns[] = AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_REFERENCIA;
        }


        return $this;
    } // setAbonoproveedordetalleReferencia()

    /**
     * Set the value of [abonoproveedordetalle_comprobante] column.
     *
     * @param  string $v new value
     * @return Abonoproveedordetalle The current object (for fluent API support)
     */
    public function setAbonoproveedordetalleComprobante($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->abonoproveedordetalle_comprobante !== $v) {
            $this->abonoproveedordetalle_comprobante = $v;
            $this->modifiedColumns[] = AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_COMPROBANTE;
        }


        return $this;
    } // setAbonoproveedordetalleComprobante()

    /**
     * Set the value of [abonoproveedordetalle_mediodepago] column.
     *
     * @param  string $v new value
     * @return Abonoproveedordetalle The current object (for fluent API support)
     */
    public function setAbonoproveedordetalleMediodepago($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->abonoproveedordetalle_mediodepago !== $v) {
            $this->abonoproveedordetalle_mediodepago = $v;
            $this->modifiedColumns[] = AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_MEDIODEPAGO;
        }


        return $this;
    } // setAbonoproveedordetalleMediodepago()

    /**
     * Sets the value of the [abonoproveedordetalle_chequecirculacion] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Abonoproveedordetalle The current object (for fluent API support)
     */
    public function setAbonoproveedordetalleChequecirculacion($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->abonoproveedordetalle_chequecirculacion !== $v) {
            $this->abonoproveedordetalle_chequecirculacion = $v;
            $this->modifiedColumns[] = AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_CHEQUECIRCULACION;
        }


        return $this;
    } // setAbonoproveedordetalleChequecirculacion()

    /**
     * Sets the value of [abonoproveedordetalle_fechacobrocheque] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Abonoproveedordetalle The current object (for fluent API support)
     */
    public function setAbonoproveedordetalleFechacobrocheque($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->abonoproveedordetalle_fechacobrocheque !== null || $dt !== null) {
            $currentDateAsString = ($this->abonoproveedordetalle_fechacobrocheque !== null && $tmpDt = new DateTime($this->abonoproveedordetalle_fechacobrocheque)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->abonoproveedordetalle_fechacobrocheque = $newDateAsString;
                $this->modifiedColumns[] = AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_FECHACOBROCHEQUE;
            }
        } // if either are not null


        return $this;
    } // setAbonoproveedordetalleFechacobrocheque()

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

            $this->idabonoproveedordetalle = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idabonoproveedor = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idcuentabancaria = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->idusuario = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->abonoproveedordetalle_fechaabono = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->abonoproveedordetalle_cantidad = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->abonoproveedordetalle_tipo = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->abonoproveedordetalle_referencia = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->abonoproveedordetalle_comprobante = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->abonoproveedordetalle_mediodepago = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->abonoproveedordetalle_chequecirculacion = ($row[$startcol + 10] !== null) ? (boolean) $row[$startcol + 10] : null;
            $this->abonoproveedordetalle_fechacobrocheque = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = AbonoproveedordetallePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Abonoproveedordetalle object", $e);
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

        if ($this->aAbonoproveedor !== null && $this->idabonoproveedor !== $this->aAbonoproveedor->getIdabonoproveedor()) {
            $this->aAbonoproveedor = null;
        }
        if ($this->aCuentabancaria !== null && $this->idcuentabancaria !== $this->aCuentabancaria->getIdcuentabancaria()) {
            $this->aCuentabancaria = null;
        }
        if ($this->aUsuario !== null && $this->idusuario !== $this->aUsuario->getIdusuario()) {
            $this->aUsuario = null;
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
            $con = Propel::getConnection(AbonoproveedordetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = AbonoproveedordetallePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aAbonoproveedor = null;
            $this->aCuentabancaria = null;
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
            $con = Propel::getConnection(AbonoproveedordetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = AbonoproveedordetalleQuery::create()
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
            $con = Propel::getConnection(AbonoproveedordetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                AbonoproveedordetallePeer::addInstanceToPool($this);
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

            if ($this->aAbonoproveedor !== null) {
                if ($this->aAbonoproveedor->isModified() || $this->aAbonoproveedor->isNew()) {
                    $affectedRows += $this->aAbonoproveedor->save($con);
                }
                $this->setAbonoproveedor($this->aAbonoproveedor);
            }

            if ($this->aCuentabancaria !== null) {
                if ($this->aCuentabancaria->isModified() || $this->aCuentabancaria->isNew()) {
                    $affectedRows += $this->aCuentabancaria->save($con);
                }
                $this->setCuentabancaria($this->aCuentabancaria);
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

        $this->modifiedColumns[] = AbonoproveedordetallePeer::IDABONOPROVEEDORDETALLE;
        if (null !== $this->idabonoproveedordetalle) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . AbonoproveedordetallePeer::IDABONOPROVEEDORDETALLE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(AbonoproveedordetallePeer::IDABONOPROVEEDORDETALLE)) {
            $modifiedColumns[':p' . $index++]  = '`idabonoproveedordetalle`';
        }
        if ($this->isColumnModified(AbonoproveedordetallePeer::IDABONOPROVEEDOR)) {
            $modifiedColumns[':p' . $index++]  = '`idabonoproveedor`';
        }
        if ($this->isColumnModified(AbonoproveedordetallePeer::IDCUENTABANCARIA)) {
            $modifiedColumns[':p' . $index++]  = '`idcuentabancaria`';
        }
        if ($this->isColumnModified(AbonoproveedordetallePeer::IDUSUARIO)) {
            $modifiedColumns[':p' . $index++]  = '`idusuario`';
        }
        if ($this->isColumnModified(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_FECHAABONO)) {
            $modifiedColumns[':p' . $index++]  = '`abonoproveedordetalle_fechaabono`';
        }
        if ($this->isColumnModified(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_CANTIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`abonoproveedordetalle_cantidad`';
        }
        if ($this->isColumnModified(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_TIPO)) {
            $modifiedColumns[':p' . $index++]  = '`abonoproveedordetalle_tipo`';
        }
        if ($this->isColumnModified(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_REFERENCIA)) {
            $modifiedColumns[':p' . $index++]  = '`abonoproveedordetalle_referencia`';
        }
        if ($this->isColumnModified(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_COMPROBANTE)) {
            $modifiedColumns[':p' . $index++]  = '`abonoproveedordetalle_comprobante`';
        }
        if ($this->isColumnModified(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_MEDIODEPAGO)) {
            $modifiedColumns[':p' . $index++]  = '`abonoproveedordetalle_mediodepago`';
        }
        if ($this->isColumnModified(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_CHEQUECIRCULACION)) {
            $modifiedColumns[':p' . $index++]  = '`abonoproveedordetalle_chequecirculacion`';
        }
        if ($this->isColumnModified(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_FECHACOBROCHEQUE)) {
            $modifiedColumns[':p' . $index++]  = '`abonoproveedordetalle_fechacobrocheque`';
        }

        $sql = sprintf(
            'INSERT INTO `abonoproveedordetalle` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idabonoproveedordetalle`':
                        $stmt->bindValue($identifier, $this->idabonoproveedordetalle, PDO::PARAM_INT);
                        break;
                    case '`idabonoproveedor`':
                        $stmt->bindValue($identifier, $this->idabonoproveedor, PDO::PARAM_INT);
                        break;
                    case '`idcuentabancaria`':
                        $stmt->bindValue($identifier, $this->idcuentabancaria, PDO::PARAM_INT);
                        break;
                    case '`idusuario`':
                        $stmt->bindValue($identifier, $this->idusuario, PDO::PARAM_INT);
                        break;
                    case '`abonoproveedordetalle_fechaabono`':
                        $stmt->bindValue($identifier, $this->abonoproveedordetalle_fechaabono, PDO::PARAM_STR);
                        break;
                    case '`abonoproveedordetalle_cantidad`':
                        $stmt->bindValue($identifier, $this->abonoproveedordetalle_cantidad, PDO::PARAM_STR);
                        break;
                    case '`abonoproveedordetalle_tipo`':
                        $stmt->bindValue($identifier, $this->abonoproveedordetalle_tipo, PDO::PARAM_STR);
                        break;
                    case '`abonoproveedordetalle_referencia`':
                        $stmt->bindValue($identifier, $this->abonoproveedordetalle_referencia, PDO::PARAM_STR);
                        break;
                    case '`abonoproveedordetalle_comprobante`':
                        $stmt->bindValue($identifier, $this->abonoproveedordetalle_comprobante, PDO::PARAM_STR);
                        break;
                    case '`abonoproveedordetalle_mediodepago`':
                        $stmt->bindValue($identifier, $this->abonoproveedordetalle_mediodepago, PDO::PARAM_STR);
                        break;
                    case '`abonoproveedordetalle_chequecirculacion`':
                        $stmt->bindValue($identifier, (int) $this->abonoproveedordetalle_chequecirculacion, PDO::PARAM_INT);
                        break;
                    case '`abonoproveedordetalle_fechacobrocheque`':
                        $stmt->bindValue($identifier, $this->abonoproveedordetalle_fechacobrocheque, PDO::PARAM_STR);
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
        $this->setIdabonoproveedordetalle($pk);

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

            if ($this->aAbonoproveedor !== null) {
                if (!$this->aAbonoproveedor->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aAbonoproveedor->getValidationFailures());
                }
            }

            if ($this->aCuentabancaria !== null) {
                if (!$this->aCuentabancaria->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCuentabancaria->getValidationFailures());
                }
            }

            if ($this->aUsuario !== null) {
                if (!$this->aUsuario->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUsuario->getValidationFailures());
                }
            }


            if (($retval = AbonoproveedordetallePeer::doValidate($this, $columns)) !== true) {
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
        $pos = AbonoproveedordetallePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdabonoproveedordetalle();
                break;
            case 1:
                return $this->getIdabonoproveedor();
                break;
            case 2:
                return $this->getIdcuentabancaria();
                break;
            case 3:
                return $this->getIdusuario();
                break;
            case 4:
                return $this->getAbonoproveedordetalleFechaabono();
                break;
            case 5:
                return $this->getAbonoproveedordetalleCantidad();
                break;
            case 6:
                return $this->getAbonoproveedordetalleTipo();
                break;
            case 7:
                return $this->getAbonoproveedordetalleReferencia();
                break;
            case 8:
                return $this->getAbonoproveedordetalleComprobante();
                break;
            case 9:
                return $this->getAbonoproveedordetalleMediodepago();
                break;
            case 10:
                return $this->getAbonoproveedordetalleChequecirculacion();
                break;
            case 11:
                return $this->getAbonoproveedordetalleFechacobrocheque();
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
        if (isset($alreadyDumpedObjects['Abonoproveedordetalle'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Abonoproveedordetalle'][$this->getPrimaryKey()] = true;
        $keys = AbonoproveedordetallePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdabonoproveedordetalle(),
            $keys[1] => $this->getIdabonoproveedor(),
            $keys[2] => $this->getIdcuentabancaria(),
            $keys[3] => $this->getIdusuario(),
            $keys[4] => $this->getAbonoproveedordetalleFechaabono(),
            $keys[5] => $this->getAbonoproveedordetalleCantidad(),
            $keys[6] => $this->getAbonoproveedordetalleTipo(),
            $keys[7] => $this->getAbonoproveedordetalleReferencia(),
            $keys[8] => $this->getAbonoproveedordetalleComprobante(),
            $keys[9] => $this->getAbonoproveedordetalleMediodepago(),
            $keys[10] => $this->getAbonoproveedordetalleChequecirculacion(),
            $keys[11] => $this->getAbonoproveedordetalleFechacobrocheque(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aAbonoproveedor) {
                $result['Abonoproveedor'] = $this->aAbonoproveedor->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCuentabancaria) {
                $result['Cuentabancaria'] = $this->aCuentabancaria->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = AbonoproveedordetallePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdabonoproveedordetalle($value);
                break;
            case 1:
                $this->setIdabonoproveedor($value);
                break;
            case 2:
                $this->setIdcuentabancaria($value);
                break;
            case 3:
                $this->setIdusuario($value);
                break;
            case 4:
                $this->setAbonoproveedordetalleFechaabono($value);
                break;
            case 5:
                $this->setAbonoproveedordetalleCantidad($value);
                break;
            case 6:
                $this->setAbonoproveedordetalleTipo($value);
                break;
            case 7:
                $this->setAbonoproveedordetalleReferencia($value);
                break;
            case 8:
                $this->setAbonoproveedordetalleComprobante($value);
                break;
            case 9:
                $this->setAbonoproveedordetalleMediodepago($value);
                break;
            case 10:
                $this->setAbonoproveedordetalleChequecirculacion($value);
                break;
            case 11:
                $this->setAbonoproveedordetalleFechacobrocheque($value);
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
        $keys = AbonoproveedordetallePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdabonoproveedordetalle($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdabonoproveedor($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdcuentabancaria($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdusuario($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setAbonoproveedordetalleFechaabono($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAbonoproveedordetalleCantidad($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setAbonoproveedordetalleTipo($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setAbonoproveedordetalleReferencia($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setAbonoproveedordetalleComprobante($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setAbonoproveedordetalleMediodepago($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setAbonoproveedordetalleChequecirculacion($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setAbonoproveedordetalleFechacobrocheque($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(AbonoproveedordetallePeer::DATABASE_NAME);

        if ($this->isColumnModified(AbonoproveedordetallePeer::IDABONOPROVEEDORDETALLE)) $criteria->add(AbonoproveedordetallePeer::IDABONOPROVEEDORDETALLE, $this->idabonoproveedordetalle);
        if ($this->isColumnModified(AbonoproveedordetallePeer::IDABONOPROVEEDOR)) $criteria->add(AbonoproveedordetallePeer::IDABONOPROVEEDOR, $this->idabonoproveedor);
        if ($this->isColumnModified(AbonoproveedordetallePeer::IDCUENTABANCARIA)) $criteria->add(AbonoproveedordetallePeer::IDCUENTABANCARIA, $this->idcuentabancaria);
        if ($this->isColumnModified(AbonoproveedordetallePeer::IDUSUARIO)) $criteria->add(AbonoproveedordetallePeer::IDUSUARIO, $this->idusuario);
        if ($this->isColumnModified(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_FECHAABONO)) $criteria->add(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_FECHAABONO, $this->abonoproveedordetalle_fechaabono);
        if ($this->isColumnModified(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_CANTIDAD)) $criteria->add(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_CANTIDAD, $this->abonoproveedordetalle_cantidad);
        if ($this->isColumnModified(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_TIPO)) $criteria->add(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_TIPO, $this->abonoproveedordetalle_tipo);
        if ($this->isColumnModified(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_REFERENCIA)) $criteria->add(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_REFERENCIA, $this->abonoproveedordetalle_referencia);
        if ($this->isColumnModified(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_COMPROBANTE)) $criteria->add(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_COMPROBANTE, $this->abonoproveedordetalle_comprobante);
        if ($this->isColumnModified(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_MEDIODEPAGO)) $criteria->add(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_MEDIODEPAGO, $this->abonoproveedordetalle_mediodepago);
        if ($this->isColumnModified(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_CHEQUECIRCULACION)) $criteria->add(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_CHEQUECIRCULACION, $this->abonoproveedordetalle_chequecirculacion);
        if ($this->isColumnModified(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_FECHACOBROCHEQUE)) $criteria->add(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_FECHACOBROCHEQUE, $this->abonoproveedordetalle_fechacobrocheque);

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
        $criteria = new Criteria(AbonoproveedordetallePeer::DATABASE_NAME);
        $criteria->add(AbonoproveedordetallePeer::IDABONOPROVEEDORDETALLE, $this->idabonoproveedordetalle);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdabonoproveedordetalle();
    }

    /**
     * Generic method to set the primary key (idabonoproveedordetalle column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdabonoproveedordetalle($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdabonoproveedordetalle();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Abonoproveedordetalle (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdabonoproveedor($this->getIdabonoproveedor());
        $copyObj->setIdcuentabancaria($this->getIdcuentabancaria());
        $copyObj->setIdusuario($this->getIdusuario());
        $copyObj->setAbonoproveedordetalleFechaabono($this->getAbonoproveedordetalleFechaabono());
        $copyObj->setAbonoproveedordetalleCantidad($this->getAbonoproveedordetalleCantidad());
        $copyObj->setAbonoproveedordetalleTipo($this->getAbonoproveedordetalleTipo());
        $copyObj->setAbonoproveedordetalleReferencia($this->getAbonoproveedordetalleReferencia());
        $copyObj->setAbonoproveedordetalleComprobante($this->getAbonoproveedordetalleComprobante());
        $copyObj->setAbonoproveedordetalleMediodepago($this->getAbonoproveedordetalleMediodepago());
        $copyObj->setAbonoproveedordetalleChequecirculacion($this->getAbonoproveedordetalleChequecirculacion());
        $copyObj->setAbonoproveedordetalleFechacobrocheque($this->getAbonoproveedordetalleFechacobrocheque());

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
            $copyObj->setIdabonoproveedordetalle(NULL); // this is a auto-increment column, so set to default value
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
     * @return Abonoproveedordetalle Clone of current object.
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
     * @return AbonoproveedordetallePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new AbonoproveedordetallePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Abonoproveedor object.
     *
     * @param                  Abonoproveedor $v
     * @return Abonoproveedordetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setAbonoproveedor(Abonoproveedor $v = null)
    {
        if ($v === null) {
            $this->setIdabonoproveedor(NULL);
        } else {
            $this->setIdabonoproveedor($v->getIdabonoproveedor());
        }

        $this->aAbonoproveedor = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Abonoproveedor object, it will not be re-added.
        if ($v !== null) {
            $v->addAbonoproveedordetalle($this);
        }


        return $this;
    }


    /**
     * Get the associated Abonoproveedor object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Abonoproveedor The associated Abonoproveedor object.
     * @throws PropelException
     */
    public function getAbonoproveedor(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aAbonoproveedor === null && ($this->idabonoproveedor !== null) && $doQuery) {
            $this->aAbonoproveedor = AbonoproveedorQuery::create()->findPk($this->idabonoproveedor, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aAbonoproveedor->addAbonoproveedordetalles($this);
             */
        }

        return $this->aAbonoproveedor;
    }

    /**
     * Declares an association between this object and a Cuentabancaria object.
     *
     * @param                  Cuentabancaria $v
     * @return Abonoproveedordetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCuentabancaria(Cuentabancaria $v = null)
    {
        if ($v === null) {
            $this->setIdcuentabancaria(NULL);
        } else {
            $this->setIdcuentabancaria($v->getIdcuentabancaria());
        }

        $this->aCuentabancaria = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Cuentabancaria object, it will not be re-added.
        if ($v !== null) {
            $v->addAbonoproveedordetalle($this);
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
    public function getCuentabancaria(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCuentabancaria === null && ($this->idcuentabancaria !== null) && $doQuery) {
            $this->aCuentabancaria = CuentabancariaQuery::create()->findPk($this->idcuentabancaria, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCuentabancaria->addAbonoproveedordetalles($this);
             */
        }

        return $this->aCuentabancaria;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param                  Usuario $v
     * @return Abonoproveedordetalle The current object (for fluent API support)
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
            $v->addAbonoproveedordetalle($this);
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
                $this->aUsuario->addAbonoproveedordetalles($this);
             */
        }

        return $this->aUsuario;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idabonoproveedordetalle = null;
        $this->idabonoproveedor = null;
        $this->idcuentabancaria = null;
        $this->idusuario = null;
        $this->abonoproveedordetalle_fechaabono = null;
        $this->abonoproveedordetalle_cantidad = null;
        $this->abonoproveedordetalle_tipo = null;
        $this->abonoproveedordetalle_referencia = null;
        $this->abonoproveedordetalle_comprobante = null;
        $this->abonoproveedordetalle_mediodepago = null;
        $this->abonoproveedordetalle_chequecirculacion = null;
        $this->abonoproveedordetalle_fechacobrocheque = null;
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
            if ($this->aAbonoproveedor instanceof Persistent) {
              $this->aAbonoproveedor->clearAllReferences($deep);
            }
            if ($this->aCuentabancaria instanceof Persistent) {
              $this->aCuentabancaria->clearAllReferences($deep);
            }
            if ($this->aUsuario instanceof Persistent) {
              $this->aUsuario->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aAbonoproveedor = null;
        $this->aCuentabancaria = null;
        $this->aUsuario = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(AbonoproveedordetallePeer::DEFAULT_STRING_FORMAT);
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
