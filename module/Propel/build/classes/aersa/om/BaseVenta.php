<?php


/**
 * Base class that represents a row from the 'venta' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseVenta extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'VentaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        VentaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idventa field.
     * @var        int
     */
    protected $idventa;

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
     * The value for the idusuario field.
     * @var        int
     */
    protected $idusuario;

    /**
     * The value for the idauditor field.
     * @var        int
     */
    protected $idauditor;

    /**
     * The value for the venta_revisada field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $venta_revisada;

    /**
     * The value for the venta_fechaventa field.
     * @var        string
     */
    protected $venta_fechaventa;

    /**
     * The value for the venta_fechacreacion field.
     * @var        string
     */
    protected $venta_fechacreacion;

    /**
     * The value for the venta_total field.
     * @var        string
     */
    protected $venta_total;

    /**
     * The value for the venta_folio field.
     * @var        string
     */
    protected $venta_folio;

    /**
     * The value for the notaauditorempresa field.
     * Note: this column has a database default value of: true
     * @var        boolean
     */
    protected $notaauditorempresa;

    /**
     * The value for the notaalmacenistaempresa field.
     * Note: this column has a database default value of: true
     * @var        boolean
     */
    protected $notaalmacenistaempresa;

    /**
     * The value for the notaauditoraersa field.
     * Note: this column has a database default value of: true
     * @var        boolean
     */
    protected $notaauditoraersa;

    /**
     * @var        Usuario
     */
    protected $aUsuarioRelatedByIdauditor;

    /**
     * @var        Empresa
     */
    protected $aEmpresa;

    /**
     * @var        Sucursal
     */
    protected $aSucursal;

    /**
     * @var        Usuario
     */
    protected $aUsuarioRelatedByIdusuario;

    /**
     * @var        PropelObjectCollection|Ventadetalle[] Collection to store aggregation of Ventadetalle objects.
     */
    protected $collVentadetalles;
    protected $collVentadetallesPartial;

    /**
     * @var        PropelObjectCollection|Ventanota[] Collection to store aggregation of Ventanota objects.
     */
    protected $collVentanotas;
    protected $collVentanotasPartial;

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
    protected $ventadetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ventanotasScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->venta_revisada = false;
        $this->notaauditorempresa = true;
        $this->notaalmacenistaempresa = true;
        $this->notaauditoraersa = true;
    }

    /**
     * Initializes internal state of BaseVenta object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [idventa] column value.
     *
     * @return int
     */
    public function getIdventa()
    {

        return $this->idventa;
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
     * Get the [idusuario] column value.
     *
     * @return int
     */
    public function getIdusuario()
    {

        return $this->idusuario;
    }

    /**
     * Get the [idauditor] column value.
     *
     * @return int
     */
    public function getIdauditor()
    {

        return $this->idauditor;
    }

    /**
     * Get the [venta_revisada] column value.
     *
     * @return boolean
     */
    public function getVentaRevisada()
    {

        return $this->venta_revisada;
    }

    /**
     * Get the [optionally formatted] temporal [venta_fechaventa] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getVentaFechaventa($format = 'Y-m-d H:i:s')
    {
        if ($this->venta_fechaventa === null) {
            return null;
        }

        if ($this->venta_fechaventa === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->venta_fechaventa);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->venta_fechaventa, true), $x);
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
     * Get the [optionally formatted] temporal [venta_fechacreacion] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getVentaFechacreacion($format = 'Y-m-d H:i:s')
    {
        if ($this->venta_fechacreacion === null) {
            return null;
        }

        if ($this->venta_fechacreacion === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->venta_fechacreacion);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->venta_fechacreacion, true), $x);
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
     * Get the [venta_total] column value.
     *
     * @return string
     */
    public function getVentaTotal()
    {

        return $this->venta_total;
    }

    /**
     * Get the [venta_folio] column value.
     *
     * @return string
     */
    public function getVentaFolio()
    {

        return $this->venta_folio;
    }

    /**
     * Get the [notaauditorempresa] column value.
     *
     * @return boolean
     */
    public function getNotaauditorempresa()
    {

        return $this->notaauditorempresa;
    }

    /**
     * Get the [notaalmacenistaempresa] column value.
     *
     * @return boolean
     */
    public function getNotaalmacenistaempresa()
    {

        return $this->notaalmacenistaempresa;
    }

    /**
     * Get the [notaauditoraersa] column value.
     *
     * @return boolean
     */
    public function getNotaauditoraersa()
    {

        return $this->notaauditoraersa;
    }

    /**
     * Set the value of [idventa] column.
     *
     * @param  int $v new value
     * @return Venta The current object (for fluent API support)
     */
    public function setIdventa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idventa !== $v) {
            $this->idventa = $v;
            $this->modifiedColumns[] = VentaPeer::IDVENTA;
        }


        return $this;
    } // setIdventa()

    /**
     * Set the value of [idempresa] column.
     *
     * @param  int $v new value
     * @return Venta The current object (for fluent API support)
     */
    public function setIdempresa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempresa !== $v) {
            $this->idempresa = $v;
            $this->modifiedColumns[] = VentaPeer::IDEMPRESA;
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
     * @return Venta The current object (for fluent API support)
     */
    public function setIdsucursal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idsucursal !== $v) {
            $this->idsucursal = $v;
            $this->modifiedColumns[] = VentaPeer::IDSUCURSAL;
        }

        if ($this->aSucursal !== null && $this->aSucursal->getIdsucursal() !== $v) {
            $this->aSucursal = null;
        }


        return $this;
    } // setIdsucursal()

    /**
     * Set the value of [idusuario] column.
     *
     * @param  int $v new value
     * @return Venta The current object (for fluent API support)
     */
    public function setIdusuario($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idusuario !== $v) {
            $this->idusuario = $v;
            $this->modifiedColumns[] = VentaPeer::IDUSUARIO;
        }

        if ($this->aUsuarioRelatedByIdusuario !== null && $this->aUsuarioRelatedByIdusuario->getIdusuario() !== $v) {
            $this->aUsuarioRelatedByIdusuario = null;
        }


        return $this;
    } // setIdusuario()

    /**
     * Set the value of [idauditor] column.
     *
     * @param  int $v new value
     * @return Venta The current object (for fluent API support)
     */
    public function setIdauditor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idauditor !== $v) {
            $this->idauditor = $v;
            $this->modifiedColumns[] = VentaPeer::IDAUDITOR;
        }

        if ($this->aUsuarioRelatedByIdauditor !== null && $this->aUsuarioRelatedByIdauditor->getIdusuario() !== $v) {
            $this->aUsuarioRelatedByIdauditor = null;
        }


        return $this;
    } // setIdauditor()

    /**
     * Sets the value of the [venta_revisada] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Venta The current object (for fluent API support)
     */
    public function setVentaRevisada($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->venta_revisada !== $v) {
            $this->venta_revisada = $v;
            $this->modifiedColumns[] = VentaPeer::VENTA_REVISADA;
        }


        return $this;
    } // setVentaRevisada()

    /**
     * Sets the value of [venta_fechaventa] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Venta The current object (for fluent API support)
     */
    public function setVentaFechaventa($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->venta_fechaventa !== null || $dt !== null) {
            $currentDateAsString = ($this->venta_fechaventa !== null && $tmpDt = new DateTime($this->venta_fechaventa)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->venta_fechaventa = $newDateAsString;
                $this->modifiedColumns[] = VentaPeer::VENTA_FECHAVENTA;
            }
        } // if either are not null


        return $this;
    } // setVentaFechaventa()

    /**
     * Sets the value of [venta_fechacreacion] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Venta The current object (for fluent API support)
     */
    public function setVentaFechacreacion($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->venta_fechacreacion !== null || $dt !== null) {
            $currentDateAsString = ($this->venta_fechacreacion !== null && $tmpDt = new DateTime($this->venta_fechacreacion)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->venta_fechacreacion = $newDateAsString;
                $this->modifiedColumns[] = VentaPeer::VENTA_FECHACREACION;
            }
        } // if either are not null


        return $this;
    } // setVentaFechacreacion()

    /**
     * Set the value of [venta_total] column.
     *
     * @param  string $v new value
     * @return Venta The current object (for fluent API support)
     */
    public function setVentaTotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->venta_total !== $v) {
            $this->venta_total = $v;
            $this->modifiedColumns[] = VentaPeer::VENTA_TOTAL;
        }


        return $this;
    } // setVentaTotal()

    /**
     * Set the value of [venta_folio] column.
     *
     * @param  string $v new value
     * @return Venta The current object (for fluent API support)
     */
    public function setVentaFolio($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->venta_folio !== $v) {
            $this->venta_folio = $v;
            $this->modifiedColumns[] = VentaPeer::VENTA_FOLIO;
        }


        return $this;
    } // setVentaFolio()

    /**
     * Sets the value of the [notaauditorempresa] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Venta The current object (for fluent API support)
     */
    public function setNotaauditorempresa($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->notaauditorempresa !== $v) {
            $this->notaauditorempresa = $v;
            $this->modifiedColumns[] = VentaPeer::NOTAAUDITOREMPRESA;
        }


        return $this;
    } // setNotaauditorempresa()

    /**
     * Sets the value of the [notaalmacenistaempresa] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Venta The current object (for fluent API support)
     */
    public function setNotaalmacenistaempresa($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->notaalmacenistaempresa !== $v) {
            $this->notaalmacenistaempresa = $v;
            $this->modifiedColumns[] = VentaPeer::NOTAALMACENISTAEMPRESA;
        }


        return $this;
    } // setNotaalmacenistaempresa()

    /**
     * Sets the value of the [notaauditoraersa] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Venta The current object (for fluent API support)
     */
    public function setNotaauditoraersa($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->notaauditoraersa !== $v) {
            $this->notaauditoraersa = $v;
            $this->modifiedColumns[] = VentaPeer::NOTAAUDITORAERSA;
        }


        return $this;
    } // setNotaauditoraersa()

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
            if ($this->venta_revisada !== false) {
                return false;
            }

            if ($this->notaauditorempresa !== true) {
                return false;
            }

            if ($this->notaalmacenistaempresa !== true) {
                return false;
            }

            if ($this->notaauditoraersa !== true) {
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

            $this->idventa = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idempresa = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idsucursal = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->idusuario = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->idauditor = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->venta_revisada = ($row[$startcol + 5] !== null) ? (boolean) $row[$startcol + 5] : null;
            $this->venta_fechaventa = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->venta_fechacreacion = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->venta_total = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->venta_folio = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->notaauditorempresa = ($row[$startcol + 10] !== null) ? (boolean) $row[$startcol + 10] : null;
            $this->notaalmacenistaempresa = ($row[$startcol + 11] !== null) ? (boolean) $row[$startcol + 11] : null;
            $this->notaauditoraersa = ($row[$startcol + 12] !== null) ? (boolean) $row[$startcol + 12] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 13; // 13 = VentaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Venta object", $e);
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
        if ($this->aUsuarioRelatedByIdusuario !== null && $this->idusuario !== $this->aUsuarioRelatedByIdusuario->getIdusuario()) {
            $this->aUsuarioRelatedByIdusuario = null;
        }
        if ($this->aUsuarioRelatedByIdauditor !== null && $this->idauditor !== $this->aUsuarioRelatedByIdauditor->getIdusuario()) {
            $this->aUsuarioRelatedByIdauditor = null;
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
            $con = Propel::getConnection(VentaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = VentaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aUsuarioRelatedByIdauditor = null;
            $this->aEmpresa = null;
            $this->aSucursal = null;
            $this->aUsuarioRelatedByIdusuario = null;
            $this->collVentadetalles = null;

            $this->collVentanotas = null;

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
            $con = Propel::getConnection(VentaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = VentaQuery::create()
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
            $con = Propel::getConnection(VentaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                VentaPeer::addInstanceToPool($this);
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

            if ($this->aUsuarioRelatedByIdauditor !== null) {
                if ($this->aUsuarioRelatedByIdauditor->isModified() || $this->aUsuarioRelatedByIdauditor->isNew()) {
                    $affectedRows += $this->aUsuarioRelatedByIdauditor->save($con);
                }
                $this->setUsuarioRelatedByIdauditor($this->aUsuarioRelatedByIdauditor);
            }

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

            if ($this->aUsuarioRelatedByIdusuario !== null) {
                if ($this->aUsuarioRelatedByIdusuario->isModified() || $this->aUsuarioRelatedByIdusuario->isNew()) {
                    $affectedRows += $this->aUsuarioRelatedByIdusuario->save($con);
                }
                $this->setUsuarioRelatedByIdusuario($this->aUsuarioRelatedByIdusuario);
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

            if ($this->ventanotasScheduledForDeletion !== null) {
                if (!$this->ventanotasScheduledForDeletion->isEmpty()) {
                    VentanotaQuery::create()
                        ->filterByPrimaryKeys($this->ventanotasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->ventanotasScheduledForDeletion = null;
                }
            }

            if ($this->collVentanotas !== null) {
                foreach ($this->collVentanotas as $referrerFK) {
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

        $this->modifiedColumns[] = VentaPeer::IDVENTA;
        if (null !== $this->idventa) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . VentaPeer::IDVENTA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(VentaPeer::IDVENTA)) {
            $modifiedColumns[':p' . $index++]  = '`idventa`';
        }
        if ($this->isColumnModified(VentaPeer::IDEMPRESA)) {
            $modifiedColumns[':p' . $index++]  = '`idempresa`';
        }
        if ($this->isColumnModified(VentaPeer::IDSUCURSAL)) {
            $modifiedColumns[':p' . $index++]  = '`idsucursal`';
        }
        if ($this->isColumnModified(VentaPeer::IDUSUARIO)) {
            $modifiedColumns[':p' . $index++]  = '`idusuario`';
        }
        if ($this->isColumnModified(VentaPeer::IDAUDITOR)) {
            $modifiedColumns[':p' . $index++]  = '`idauditor`';
        }
        if ($this->isColumnModified(VentaPeer::VENTA_REVISADA)) {
            $modifiedColumns[':p' . $index++]  = '`venta_revisada`';
        }
        if ($this->isColumnModified(VentaPeer::VENTA_FECHAVENTA)) {
            $modifiedColumns[':p' . $index++]  = '`venta_fechaventa`';
        }
        if ($this->isColumnModified(VentaPeer::VENTA_FECHACREACION)) {
            $modifiedColumns[':p' . $index++]  = '`venta_fechacreacion`';
        }
        if ($this->isColumnModified(VentaPeer::VENTA_TOTAL)) {
            $modifiedColumns[':p' . $index++]  = '`venta_total`';
        }
        if ($this->isColumnModified(VentaPeer::VENTA_FOLIO)) {
            $modifiedColumns[':p' . $index++]  = '`venta_folio`';
        }
        if ($this->isColumnModified(VentaPeer::NOTAAUDITOREMPRESA)) {
            $modifiedColumns[':p' . $index++]  = '`notaauditorempresa`';
        }
        if ($this->isColumnModified(VentaPeer::NOTAALMACENISTAEMPRESA)) {
            $modifiedColumns[':p' . $index++]  = '`notaalmacenistaempresa`';
        }
        if ($this->isColumnModified(VentaPeer::NOTAAUDITORAERSA)) {
            $modifiedColumns[':p' . $index++]  = '`notaauditoraersa`';
        }

        $sql = sprintf(
            'INSERT INTO `venta` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idventa`':
                        $stmt->bindValue($identifier, $this->idventa, PDO::PARAM_INT);
                        break;
                    case '`idempresa`':
                        $stmt->bindValue($identifier, $this->idempresa, PDO::PARAM_INT);
                        break;
                    case '`idsucursal`':
                        $stmt->bindValue($identifier, $this->idsucursal, PDO::PARAM_INT);
                        break;
                    case '`idusuario`':
                        $stmt->bindValue($identifier, $this->idusuario, PDO::PARAM_INT);
                        break;
                    case '`idauditor`':
                        $stmt->bindValue($identifier, $this->idauditor, PDO::PARAM_INT);
                        break;
                    case '`venta_revisada`':
                        $stmt->bindValue($identifier, (int) $this->venta_revisada, PDO::PARAM_INT);
                        break;
                    case '`venta_fechaventa`':
                        $stmt->bindValue($identifier, $this->venta_fechaventa, PDO::PARAM_STR);
                        break;
                    case '`venta_fechacreacion`':
                        $stmt->bindValue($identifier, $this->venta_fechacreacion, PDO::PARAM_STR);
                        break;
                    case '`venta_total`':
                        $stmt->bindValue($identifier, $this->venta_total, PDO::PARAM_STR);
                        break;
                    case '`venta_folio`':
                        $stmt->bindValue($identifier, $this->venta_folio, PDO::PARAM_STR);
                        break;
                    case '`notaauditorempresa`':
                        $stmt->bindValue($identifier, (int) $this->notaauditorempresa, PDO::PARAM_INT);
                        break;
                    case '`notaalmacenistaempresa`':
                        $stmt->bindValue($identifier, (int) $this->notaalmacenistaempresa, PDO::PARAM_INT);
                        break;
                    case '`notaauditoraersa`':
                        $stmt->bindValue($identifier, (int) $this->notaauditoraersa, PDO::PARAM_INT);
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
        $this->setIdventa($pk);

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

            if ($this->aUsuarioRelatedByIdauditor !== null) {
                if (!$this->aUsuarioRelatedByIdauditor->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUsuarioRelatedByIdauditor->getValidationFailures());
                }
            }

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

            if ($this->aUsuarioRelatedByIdusuario !== null) {
                if (!$this->aUsuarioRelatedByIdusuario->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUsuarioRelatedByIdusuario->getValidationFailures());
                }
            }


            if (($retval = VentaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collVentadetalles !== null) {
                    foreach ($this->collVentadetalles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collVentanotas !== null) {
                    foreach ($this->collVentanotas as $referrerFK) {
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
        $pos = VentaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdventa();
                break;
            case 1:
                return $this->getIdempresa();
                break;
            case 2:
                return $this->getIdsucursal();
                break;
            case 3:
                return $this->getIdusuario();
                break;
            case 4:
                return $this->getIdauditor();
                break;
            case 5:
                return $this->getVentaRevisada();
                break;
            case 6:
                return $this->getVentaFechaventa();
                break;
            case 7:
                return $this->getVentaFechacreacion();
                break;
            case 8:
                return $this->getVentaTotal();
                break;
            case 9:
                return $this->getVentaFolio();
                break;
            case 10:
                return $this->getNotaauditorempresa();
                break;
            case 11:
                return $this->getNotaalmacenistaempresa();
                break;
            case 12:
                return $this->getNotaauditoraersa();
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
        if (isset($alreadyDumpedObjects['Venta'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Venta'][$this->getPrimaryKey()] = true;
        $keys = VentaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdventa(),
            $keys[1] => $this->getIdempresa(),
            $keys[2] => $this->getIdsucursal(),
            $keys[3] => $this->getIdusuario(),
            $keys[4] => $this->getIdauditor(),
            $keys[5] => $this->getVentaRevisada(),
            $keys[6] => $this->getVentaFechaventa(),
            $keys[7] => $this->getVentaFechacreacion(),
            $keys[8] => $this->getVentaTotal(),
            $keys[9] => $this->getVentaFolio(),
            $keys[10] => $this->getNotaauditorempresa(),
            $keys[11] => $this->getNotaalmacenistaempresa(),
            $keys[12] => $this->getNotaauditoraersa(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aUsuarioRelatedByIdauditor) {
                $result['UsuarioRelatedByIdauditor'] = $this->aUsuarioRelatedByIdauditor->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aEmpresa) {
                $result['Empresa'] = $this->aEmpresa->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSucursal) {
                $result['Sucursal'] = $this->aSucursal->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aUsuarioRelatedByIdusuario) {
                $result['UsuarioRelatedByIdusuario'] = $this->aUsuarioRelatedByIdusuario->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collVentadetalles) {
                $result['Ventadetalles'] = $this->collVentadetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collVentanotas) {
                $result['Ventanotas'] = $this->collVentanotas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = VentaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdventa($value);
                break;
            case 1:
                $this->setIdempresa($value);
                break;
            case 2:
                $this->setIdsucursal($value);
                break;
            case 3:
                $this->setIdusuario($value);
                break;
            case 4:
                $this->setIdauditor($value);
                break;
            case 5:
                $this->setVentaRevisada($value);
                break;
            case 6:
                $this->setVentaFechaventa($value);
                break;
            case 7:
                $this->setVentaFechacreacion($value);
                break;
            case 8:
                $this->setVentaTotal($value);
                break;
            case 9:
                $this->setVentaFolio($value);
                break;
            case 10:
                $this->setNotaauditorempresa($value);
                break;
            case 11:
                $this->setNotaalmacenistaempresa($value);
                break;
            case 12:
                $this->setNotaauditoraersa($value);
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
        $keys = VentaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdventa($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdempresa($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdsucursal($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdusuario($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdauditor($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setVentaRevisada($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setVentaFechaventa($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setVentaFechacreacion($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setVentaTotal($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setVentaFolio($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setNotaauditorempresa($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setNotaalmacenistaempresa($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setNotaauditoraersa($arr[$keys[12]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(VentaPeer::DATABASE_NAME);

        if ($this->isColumnModified(VentaPeer::IDVENTA)) $criteria->add(VentaPeer::IDVENTA, $this->idventa);
        if ($this->isColumnModified(VentaPeer::IDEMPRESA)) $criteria->add(VentaPeer::IDEMPRESA, $this->idempresa);
        if ($this->isColumnModified(VentaPeer::IDSUCURSAL)) $criteria->add(VentaPeer::IDSUCURSAL, $this->idsucursal);
        if ($this->isColumnModified(VentaPeer::IDUSUARIO)) $criteria->add(VentaPeer::IDUSUARIO, $this->idusuario);
        if ($this->isColumnModified(VentaPeer::IDAUDITOR)) $criteria->add(VentaPeer::IDAUDITOR, $this->idauditor);
        if ($this->isColumnModified(VentaPeer::VENTA_REVISADA)) $criteria->add(VentaPeer::VENTA_REVISADA, $this->venta_revisada);
        if ($this->isColumnModified(VentaPeer::VENTA_FECHAVENTA)) $criteria->add(VentaPeer::VENTA_FECHAVENTA, $this->venta_fechaventa);
        if ($this->isColumnModified(VentaPeer::VENTA_FECHACREACION)) $criteria->add(VentaPeer::VENTA_FECHACREACION, $this->venta_fechacreacion);
        if ($this->isColumnModified(VentaPeer::VENTA_TOTAL)) $criteria->add(VentaPeer::VENTA_TOTAL, $this->venta_total);
        if ($this->isColumnModified(VentaPeer::VENTA_FOLIO)) $criteria->add(VentaPeer::VENTA_FOLIO, $this->venta_folio);
        if ($this->isColumnModified(VentaPeer::NOTAAUDITOREMPRESA)) $criteria->add(VentaPeer::NOTAAUDITOREMPRESA, $this->notaauditorempresa);
        if ($this->isColumnModified(VentaPeer::NOTAALMACENISTAEMPRESA)) $criteria->add(VentaPeer::NOTAALMACENISTAEMPRESA, $this->notaalmacenistaempresa);
        if ($this->isColumnModified(VentaPeer::NOTAAUDITORAERSA)) $criteria->add(VentaPeer::NOTAAUDITORAERSA, $this->notaauditoraersa);

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
        $criteria = new Criteria(VentaPeer::DATABASE_NAME);
        $criteria->add(VentaPeer::IDVENTA, $this->idventa);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdventa();
    }

    /**
     * Generic method to set the primary key (idventa column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdventa($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdventa();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Venta (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdempresa($this->getIdempresa());
        $copyObj->setIdsucursal($this->getIdsucursal());
        $copyObj->setIdusuario($this->getIdusuario());
        $copyObj->setIdauditor($this->getIdauditor());
        $copyObj->setVentaRevisada($this->getVentaRevisada());
        $copyObj->setVentaFechaventa($this->getVentaFechaventa());
        $copyObj->setVentaFechacreacion($this->getVentaFechacreacion());
        $copyObj->setVentaTotal($this->getVentaTotal());
        $copyObj->setVentaFolio($this->getVentaFolio());
        $copyObj->setNotaauditorempresa($this->getNotaauditorempresa());
        $copyObj->setNotaalmacenistaempresa($this->getNotaalmacenistaempresa());
        $copyObj->setNotaauditoraersa($this->getNotaauditoraersa());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getVentadetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addVentadetalle($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getVentanotas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addVentanota($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdventa(NULL); // this is a auto-increment column, so set to default value
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
     * @return Venta Clone of current object.
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
     * @return VentaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new VentaPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param                  Usuario $v
     * @return Venta The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUsuarioRelatedByIdauditor(Usuario $v = null)
    {
        if ($v === null) {
            $this->setIdauditor(NULL);
        } else {
            $this->setIdauditor($v->getIdusuario());
        }

        $this->aUsuarioRelatedByIdauditor = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Usuario object, it will not be re-added.
        if ($v !== null) {
            $v->addVentaRelatedByIdauditor($this);
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
    public function getUsuarioRelatedByIdauditor(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aUsuarioRelatedByIdauditor === null && ($this->idauditor !== null) && $doQuery) {
            $this->aUsuarioRelatedByIdauditor = UsuarioQuery::create()->findPk($this->idauditor, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUsuarioRelatedByIdauditor->addVentasRelatedByIdauditor($this);
             */
        }

        return $this->aUsuarioRelatedByIdauditor;
    }

    /**
     * Declares an association between this object and a Empresa object.
     *
     * @param                  Empresa $v
     * @return Venta The current object (for fluent API support)
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
            $v->addVenta($this);
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
                $this->aEmpresa->addVentas($this);
             */
        }

        return $this->aEmpresa;
    }

    /**
     * Declares an association between this object and a Sucursal object.
     *
     * @param                  Sucursal $v
     * @return Venta The current object (for fluent API support)
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
            $v->addVenta($this);
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
                $this->aSucursal->addVentas($this);
             */
        }

        return $this->aSucursal;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param                  Usuario $v
     * @return Venta The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUsuarioRelatedByIdusuario(Usuario $v = null)
    {
        if ($v === null) {
            $this->setIdusuario(NULL);
        } else {
            $this->setIdusuario($v->getIdusuario());
        }

        $this->aUsuarioRelatedByIdusuario = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Usuario object, it will not be re-added.
        if ($v !== null) {
            $v->addVentaRelatedByIdusuario($this);
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
    public function getUsuarioRelatedByIdusuario(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aUsuarioRelatedByIdusuario === null && ($this->idusuario !== null) && $doQuery) {
            $this->aUsuarioRelatedByIdusuario = UsuarioQuery::create()->findPk($this->idusuario, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUsuarioRelatedByIdusuario->addVentasRelatedByIdusuario($this);
             */
        }

        return $this->aUsuarioRelatedByIdusuario;
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
        if ('Ventadetalle' == $relationName) {
            $this->initVentadetalles();
        }
        if ('Ventanota' == $relationName) {
            $this->initVentanotas();
        }
    }

    /**
     * Clears out the collVentadetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Venta The current object (for fluent API support)
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
     * If this Venta is new, it will return
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
                    ->filterByVenta($this)
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
     * @return Venta The current object (for fluent API support)
     */
    public function setVentadetalles(PropelCollection $ventadetalles, PropelPDO $con = null)
    {
        $ventadetallesToDelete = $this->getVentadetalles(new Criteria(), $con)->diff($ventadetalles);


        $this->ventadetallesScheduledForDeletion = $ventadetallesToDelete;

        foreach ($ventadetallesToDelete as $ventadetalleRemoved) {
            $ventadetalleRemoved->setVenta(null);
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
                ->filterByVenta($this)
                ->count($con);
        }

        return count($this->collVentadetalles);
    }

    /**
     * Method called to associate a Ventadetalle object to this object
     * through the Ventadetalle foreign key attribute.
     *
     * @param    Ventadetalle $l Ventadetalle
     * @return Venta The current object (for fluent API support)
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
        $ventadetalle->setVenta($this);
    }

    /**
     * @param	Ventadetalle $ventadetalle The ventadetalle object to remove.
     * @return Venta The current object (for fluent API support)
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
            $ventadetalle->setVenta(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Venta is new, it will return
     * an empty collection; or if this Venta has previously
     * been saved, it will retrieve related Ventadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Venta.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ventadetalle[] List of Ventadetalle objects
     */
    public function getVentadetallesJoinAlmacen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VentadetalleQuery::create(null, $criteria);
        $query->joinWith('Almacen', $join_behavior);

        return $this->getVentadetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Venta is new, it will return
     * an empty collection; or if this Venta has previously
     * been saved, it will retrieve related Ventadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Venta.
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
     * Otherwise if this Venta is new, it will return
     * an empty collection; or if this Venta has previously
     * been saved, it will retrieve related Ventadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Venta.
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
     * Clears out the collVentanotas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Venta The current object (for fluent API support)
     * @see        addVentanotas()
     */
    public function clearVentanotas()
    {
        $this->collVentanotas = null; // important to set this to null since that means it is uninitialized
        $this->collVentanotasPartial = null;

        return $this;
    }

    /**
     * reset is the collVentanotas collection loaded partially
     *
     * @return void
     */
    public function resetPartialVentanotas($v = true)
    {
        $this->collVentanotasPartial = $v;
    }

    /**
     * Initializes the collVentanotas collection.
     *
     * By default this just sets the collVentanotas collection to an empty array (like clearcollVentanotas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initVentanotas($overrideExisting = true)
    {
        if (null !== $this->collVentanotas && !$overrideExisting) {
            return;
        }
        $this->collVentanotas = new PropelObjectCollection();
        $this->collVentanotas->setModel('Ventanota');
    }

    /**
     * Gets an array of Ventanota objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Venta is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Ventanota[] List of Ventanota objects
     * @throws PropelException
     */
    public function getVentanotas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collVentanotasPartial && !$this->isNew();
        if (null === $this->collVentanotas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collVentanotas) {
                // return empty collection
                $this->initVentanotas();
            } else {
                $collVentanotas = VentanotaQuery::create(null, $criteria)
                    ->filterByVenta($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collVentanotasPartial && count($collVentanotas)) {
                      $this->initVentanotas(false);

                      foreach ($collVentanotas as $obj) {
                        if (false == $this->collVentanotas->contains($obj)) {
                          $this->collVentanotas->append($obj);
                        }
                      }

                      $this->collVentanotasPartial = true;
                    }

                    $collVentanotas->getInternalIterator()->rewind();

                    return $collVentanotas;
                }

                if ($partial && $this->collVentanotas) {
                    foreach ($this->collVentanotas as $obj) {
                        if ($obj->isNew()) {
                            $collVentanotas[] = $obj;
                        }
                    }
                }

                $this->collVentanotas = $collVentanotas;
                $this->collVentanotasPartial = false;
            }
        }

        return $this->collVentanotas;
    }

    /**
     * Sets a collection of Ventanota objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ventanotas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Venta The current object (for fluent API support)
     */
    public function setVentanotas(PropelCollection $ventanotas, PropelPDO $con = null)
    {
        $ventanotasToDelete = $this->getVentanotas(new Criteria(), $con)->diff($ventanotas);


        $this->ventanotasScheduledForDeletion = $ventanotasToDelete;

        foreach ($ventanotasToDelete as $ventanotaRemoved) {
            $ventanotaRemoved->setVenta(null);
        }

        $this->collVentanotas = null;
        foreach ($ventanotas as $ventanota) {
            $this->addVentanota($ventanota);
        }

        $this->collVentanotas = $ventanotas;
        $this->collVentanotasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Ventanota objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Ventanota objects.
     * @throws PropelException
     */
    public function countVentanotas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collVentanotasPartial && !$this->isNew();
        if (null === $this->collVentanotas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collVentanotas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getVentanotas());
            }
            $query = VentanotaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByVenta($this)
                ->count($con);
        }

        return count($this->collVentanotas);
    }

    /**
     * Method called to associate a Ventanota object to this object
     * through the Ventanota foreign key attribute.
     *
     * @param    Ventanota $l Ventanota
     * @return Venta The current object (for fluent API support)
     */
    public function addVentanota(Ventanota $l)
    {
        if ($this->collVentanotas === null) {
            $this->initVentanotas();
            $this->collVentanotasPartial = true;
        }

        if (!in_array($l, $this->collVentanotas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddVentanota($l);

            if ($this->ventanotasScheduledForDeletion and $this->ventanotasScheduledForDeletion->contains($l)) {
                $this->ventanotasScheduledForDeletion->remove($this->ventanotasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Ventanota $ventanota The ventanota object to add.
     */
    protected function doAddVentanota($ventanota)
    {
        $this->collVentanotas[]= $ventanota;
        $ventanota->setVenta($this);
    }

    /**
     * @param	Ventanota $ventanota The ventanota object to remove.
     * @return Venta The current object (for fluent API support)
     */
    public function removeVentanota($ventanota)
    {
        if ($this->getVentanotas()->contains($ventanota)) {
            $this->collVentanotas->remove($this->collVentanotas->search($ventanota));
            if (null === $this->ventanotasScheduledForDeletion) {
                $this->ventanotasScheduledForDeletion = clone $this->collVentanotas;
                $this->ventanotasScheduledForDeletion->clear();
            }
            $this->ventanotasScheduledForDeletion[]= clone $ventanota;
            $ventanota->setVenta(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Venta is new, it will return
     * an empty collection; or if this Venta has previously
     * been saved, it will retrieve related Ventanotas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Venta.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ventanota[] List of Ventanota objects
     */
    public function getVentanotasJoinUsuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VentanotaQuery::create(null, $criteria);
        $query->joinWith('Usuario', $join_behavior);

        return $this->getVentanotas($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idventa = null;
        $this->idempresa = null;
        $this->idsucursal = null;
        $this->idusuario = null;
        $this->idauditor = null;
        $this->venta_revisada = null;
        $this->venta_fechaventa = null;
        $this->venta_fechacreacion = null;
        $this->venta_total = null;
        $this->venta_folio = null;
        $this->notaauditorempresa = null;
        $this->notaalmacenistaempresa = null;
        $this->notaauditoraersa = null;
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
            if ($this->collVentadetalles) {
                foreach ($this->collVentadetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collVentanotas) {
                foreach ($this->collVentanotas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aUsuarioRelatedByIdauditor instanceof Persistent) {
              $this->aUsuarioRelatedByIdauditor->clearAllReferences($deep);
            }
            if ($this->aEmpresa instanceof Persistent) {
              $this->aEmpresa->clearAllReferences($deep);
            }
            if ($this->aSucursal instanceof Persistent) {
              $this->aSucursal->clearAllReferences($deep);
            }
            if ($this->aUsuarioRelatedByIdusuario instanceof Persistent) {
              $this->aUsuarioRelatedByIdusuario->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collVentadetalles instanceof PropelCollection) {
            $this->collVentadetalles->clearIterator();
        }
        $this->collVentadetalles = null;
        if ($this->collVentanotas instanceof PropelCollection) {
            $this->collVentanotas->clearIterator();
        }
        $this->collVentanotas = null;
        $this->aUsuarioRelatedByIdauditor = null;
        $this->aEmpresa = null;
        $this->aSucursal = null;
        $this->aUsuarioRelatedByIdusuario = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(VentaPeer::DEFAULT_STRING_FORMAT);
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
