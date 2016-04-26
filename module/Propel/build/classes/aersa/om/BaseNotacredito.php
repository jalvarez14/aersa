<?php


/**
 * Base class that represents a row from the 'notacredito' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseNotacredito extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'NotacreditoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        NotacreditoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idnotacredito field.
     * @var        int
     */
    protected $idnotacredito;

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
     * The value for the idproveedor field.
     * @var        int
     */
    protected $idproveedor;

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
     * The value for the idalmacen field.
     * @var        int
     */
    protected $idalmacen;

    /**
     * The value for the notacredito_folio field.
     * @var        string
     */
    protected $notacredito_folio;

    /**
     * The value for the notacredito_revisada field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $notacredito_revisada;

    /**
     * The value for the notacredito_factura field.
     * @var        string
     */
    protected $notacredito_factura;

    /**
     * The value for the notacredito_fechacreacion field.
     * @var        string
     */
    protected $notacredito_fechacreacion;

    /**
     * The value for the notacredito_fechaentrega field.
     * @var        string
     */
    protected $notacredito_fechaentrega;

    /**
     * The value for the notacredito_ieps field.
     * @var        string
     */
    protected $notacredito_ieps;

    /**
     * The value for the notacredito_iva field.
     * @var        string
     */
    protected $notacredito_iva;

    /**
     * The value for the notacredito_total field.
     * @var        string
     */
    protected $notacredito_total;

    /**
     * The value for the notacredito_subtotal field.
     * @var        string
     */
    protected $notacredito_subtotal;

    /**
     * @var        Almacen
     */
    protected $aAlmacen;

    /**
     * @var        Usuario
     */
    protected $aUsuarioRelatedByIdauditor;

    /**
     * @var        Empresa
     */
    protected $aEmpresa;

    /**
     * @var        Proveedor
     */
    protected $aProveedor;

    /**
     * @var        Sucursal
     */
    protected $aSucursal;

    /**
     * @var        Usuario
     */
    protected $aUsuarioRelatedByIdusuario;

    /**
     * @var        PropelObjectCollection|Notacreditodetalle[] Collection to store aggregation of Notacreditodetalle objects.
     */
    protected $collNotacreditodetalles;
    protected $collNotacreditodetallesPartial;

    /**
     * @var        PropelObjectCollection|Notacreditonota[] Collection to store aggregation of Notacreditonota objects.
     */
    protected $collNotacreditonotas;
    protected $collNotacreditonotasPartial;

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
    protected $notacreditodetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $notacreditonotasScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->notacredito_revisada = false;
    }

    /**
     * Initializes internal state of BaseNotacredito object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [idnotacredito] column value.
     *
     * @return int
     */
    public function getIdnotacredito()
    {

        return $this->idnotacredito;
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
     * Get the [idproveedor] column value.
     *
     * @return int
     */
    public function getIdproveedor()
    {

        return $this->idproveedor;
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
     * Get the [idalmacen] column value.
     *
     * @return int
     */
    public function getIdalmacen()
    {

        return $this->idalmacen;
    }

    /**
     * Get the [notacredito_folio] column value.
     *
     * @return string
     */
    public function getNotacreditoFolio()
    {

        return $this->notacredito_folio;
    }

    /**
     * Get the [notacredito_revisada] column value.
     *
     * @return boolean
     */
    public function getNotacreditoRevisada()
    {

        return $this->notacredito_revisada;
    }

    /**
     * Get the [notacredito_factura] column value.
     *
     * @return string
     */
    public function getNotacreditoFactura()
    {

        return $this->notacredito_factura;
    }

    /**
     * Get the [optionally formatted] temporal [notacredito_fechacreacion] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getNotacreditoFechacreacion($format = 'Y-m-d H:i:s')
    {
        if ($this->notacredito_fechacreacion === null) {
            return null;
        }

        if ($this->notacredito_fechacreacion === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->notacredito_fechacreacion);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->notacredito_fechacreacion, true), $x);
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
     * Get the [optionally formatted] temporal [notacredito_fechaentrega] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getNotacreditoFechaentrega($format = 'Y-m-d H:i:s')
    {
        if ($this->notacredito_fechaentrega === null) {
            return null;
        }

        if ($this->notacredito_fechaentrega === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->notacredito_fechaentrega);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->notacredito_fechaentrega, true), $x);
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
     * Get the [notacredito_ieps] column value.
     *
     * @return string
     */
    public function getNotacreditoIeps()
    {

        return $this->notacredito_ieps;
    }

    /**
     * Get the [notacredito_iva] column value.
     *
     * @return string
     */
    public function getNotacreditoIva()
    {

        return $this->notacredito_iva;
    }

    /**
     * Get the [notacredito_total] column value.
     *
     * @return string
     */
    public function getNotacreditoTotal()
    {

        return $this->notacredito_total;
    }

    /**
     * Get the [notacredito_subtotal] column value.
     *
     * @return string
     */
    public function getNotacreditoSubtotal()
    {

        return $this->notacredito_subtotal;
    }

    /**
     * Set the value of [idnotacredito] column.
     *
     * @param  int $v new value
     * @return Notacredito The current object (for fluent API support)
     */
    public function setIdnotacredito($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idnotacredito !== $v) {
            $this->idnotacredito = $v;
            $this->modifiedColumns[] = NotacreditoPeer::IDNOTACREDITO;
        }


        return $this;
    } // setIdnotacredito()

    /**
     * Set the value of [idempresa] column.
     *
     * @param  int $v new value
     * @return Notacredito The current object (for fluent API support)
     */
    public function setIdempresa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempresa !== $v) {
            $this->idempresa = $v;
            $this->modifiedColumns[] = NotacreditoPeer::IDEMPRESA;
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
     * @return Notacredito The current object (for fluent API support)
     */
    public function setIdsucursal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idsucursal !== $v) {
            $this->idsucursal = $v;
            $this->modifiedColumns[] = NotacreditoPeer::IDSUCURSAL;
        }

        if ($this->aSucursal !== null && $this->aSucursal->getIdsucursal() !== $v) {
            $this->aSucursal = null;
        }


        return $this;
    } // setIdsucursal()

    /**
     * Set the value of [idproveedor] column.
     *
     * @param  int $v new value
     * @return Notacredito The current object (for fluent API support)
     */
    public function setIdproveedor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproveedor !== $v) {
            $this->idproveedor = $v;
            $this->modifiedColumns[] = NotacreditoPeer::IDPROVEEDOR;
        }

        if ($this->aProveedor !== null && $this->aProveedor->getIdproveedor() !== $v) {
            $this->aProveedor = null;
        }


        return $this;
    } // setIdproveedor()

    /**
     * Set the value of [idusuario] column.
     *
     * @param  int $v new value
     * @return Notacredito The current object (for fluent API support)
     */
    public function setIdusuario($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idusuario !== $v) {
            $this->idusuario = $v;
            $this->modifiedColumns[] = NotacreditoPeer::IDUSUARIO;
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
     * @return Notacredito The current object (for fluent API support)
     */
    public function setIdauditor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idauditor !== $v) {
            $this->idauditor = $v;
            $this->modifiedColumns[] = NotacreditoPeer::IDAUDITOR;
        }

        if ($this->aUsuarioRelatedByIdauditor !== null && $this->aUsuarioRelatedByIdauditor->getIdusuario() !== $v) {
            $this->aUsuarioRelatedByIdauditor = null;
        }


        return $this;
    } // setIdauditor()

    /**
     * Set the value of [idalmacen] column.
     *
     * @param  int $v new value
     * @return Notacredito The current object (for fluent API support)
     */
    public function setIdalmacen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idalmacen !== $v) {
            $this->idalmacen = $v;
            $this->modifiedColumns[] = NotacreditoPeer::IDALMACEN;
        }

        if ($this->aAlmacen !== null && $this->aAlmacen->getIdalmacen() !== $v) {
            $this->aAlmacen = null;
        }


        return $this;
    } // setIdalmacen()

    /**
     * Set the value of [notacredito_folio] column.
     *
     * @param  string $v new value
     * @return Notacredito The current object (for fluent API support)
     */
    public function setNotacreditoFolio($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->notacredito_folio !== $v) {
            $this->notacredito_folio = $v;
            $this->modifiedColumns[] = NotacreditoPeer::NOTACREDITO_FOLIO;
        }


        return $this;
    } // setNotacreditoFolio()

    /**
     * Sets the value of the [notacredito_revisada] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Notacredito The current object (for fluent API support)
     */
    public function setNotacreditoRevisada($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->notacredito_revisada !== $v) {
            $this->notacredito_revisada = $v;
            $this->modifiedColumns[] = NotacreditoPeer::NOTACREDITO_REVISADA;
        }


        return $this;
    } // setNotacreditoRevisada()

    /**
     * Set the value of [notacredito_factura] column.
     *
     * @param  string $v new value
     * @return Notacredito The current object (for fluent API support)
     */
    public function setNotacreditoFactura($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->notacredito_factura !== $v) {
            $this->notacredito_factura = $v;
            $this->modifiedColumns[] = NotacreditoPeer::NOTACREDITO_FACTURA;
        }


        return $this;
    } // setNotacreditoFactura()

    /**
     * Sets the value of [notacredito_fechacreacion] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Notacredito The current object (for fluent API support)
     */
    public function setNotacreditoFechacreacion($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->notacredito_fechacreacion !== null || $dt !== null) {
            $currentDateAsString = ($this->notacredito_fechacreacion !== null && $tmpDt = new DateTime($this->notacredito_fechacreacion)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->notacredito_fechacreacion = $newDateAsString;
                $this->modifiedColumns[] = NotacreditoPeer::NOTACREDITO_FECHACREACION;
            }
        } // if either are not null


        return $this;
    } // setNotacreditoFechacreacion()

    /**
     * Sets the value of [notacredito_fechaentrega] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Notacredito The current object (for fluent API support)
     */
    public function setNotacreditoFechaentrega($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->notacredito_fechaentrega !== null || $dt !== null) {
            $currentDateAsString = ($this->notacredito_fechaentrega !== null && $tmpDt = new DateTime($this->notacredito_fechaentrega)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->notacredito_fechaentrega = $newDateAsString;
                $this->modifiedColumns[] = NotacreditoPeer::NOTACREDITO_FECHAENTREGA;
            }
        } // if either are not null


        return $this;
    } // setNotacreditoFechaentrega()

    /**
     * Set the value of [notacredito_ieps] column.
     *
     * @param  string $v new value
     * @return Notacredito The current object (for fluent API support)
     */
    public function setNotacreditoIeps($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->notacredito_ieps !== $v) {
            $this->notacredito_ieps = $v;
            $this->modifiedColumns[] = NotacreditoPeer::NOTACREDITO_IEPS;
        }


        return $this;
    } // setNotacreditoIeps()

    /**
     * Set the value of [notacredito_iva] column.
     *
     * @param  string $v new value
     * @return Notacredito The current object (for fluent API support)
     */
    public function setNotacreditoIva($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->notacredito_iva !== $v) {
            $this->notacredito_iva = $v;
            $this->modifiedColumns[] = NotacreditoPeer::NOTACREDITO_IVA;
        }


        return $this;
    } // setNotacreditoIva()

    /**
     * Set the value of [notacredito_total] column.
     *
     * @param  string $v new value
     * @return Notacredito The current object (for fluent API support)
     */
    public function setNotacreditoTotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->notacredito_total !== $v) {
            $this->notacredito_total = $v;
            $this->modifiedColumns[] = NotacreditoPeer::NOTACREDITO_TOTAL;
        }


        return $this;
    } // setNotacreditoTotal()

    /**
     * Set the value of [notacredito_subtotal] column.
     *
     * @param  string $v new value
     * @return Notacredito The current object (for fluent API support)
     */
    public function setNotacreditoSubtotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->notacredito_subtotal !== $v) {
            $this->notacredito_subtotal = $v;
            $this->modifiedColumns[] = NotacreditoPeer::NOTACREDITO_SUBTOTAL;
        }


        return $this;
    } // setNotacreditoSubtotal()

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
            if ($this->notacredito_revisada !== false) {
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

            $this->idnotacredito = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idempresa = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idsucursal = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->idproveedor = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->idusuario = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->idauditor = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->idalmacen = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->notacredito_folio = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->notacredito_revisada = ($row[$startcol + 8] !== null) ? (boolean) $row[$startcol + 8] : null;
            $this->notacredito_factura = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->notacredito_fechacreacion = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->notacredito_fechaentrega = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->notacredito_ieps = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->notacredito_iva = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->notacredito_total = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->notacredito_subtotal = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 16; // 16 = NotacreditoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Notacredito object", $e);
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
        if ($this->aProveedor !== null && $this->idproveedor !== $this->aProveedor->getIdproveedor()) {
            $this->aProveedor = null;
        }
        if ($this->aUsuarioRelatedByIdusuario !== null && $this->idusuario !== $this->aUsuarioRelatedByIdusuario->getIdusuario()) {
            $this->aUsuarioRelatedByIdusuario = null;
        }
        if ($this->aUsuarioRelatedByIdauditor !== null && $this->idauditor !== $this->aUsuarioRelatedByIdauditor->getIdusuario()) {
            $this->aUsuarioRelatedByIdauditor = null;
        }
        if ($this->aAlmacen !== null && $this->idalmacen !== $this->aAlmacen->getIdalmacen()) {
            $this->aAlmacen = null;
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
            $con = Propel::getConnection(NotacreditoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = NotacreditoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aAlmacen = null;
            $this->aUsuarioRelatedByIdauditor = null;
            $this->aEmpresa = null;
            $this->aProveedor = null;
            $this->aSucursal = null;
            $this->aUsuarioRelatedByIdusuario = null;
            $this->collNotacreditodetalles = null;

            $this->collNotacreditonotas = null;

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
            $con = Propel::getConnection(NotacreditoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = NotacreditoQuery::create()
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
            $con = Propel::getConnection(NotacreditoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                NotacreditoPeer::addInstanceToPool($this);
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

            if ($this->aAlmacen !== null) {
                if ($this->aAlmacen->isModified() || $this->aAlmacen->isNew()) {
                    $affectedRows += $this->aAlmacen->save($con);
                }
                $this->setAlmacen($this->aAlmacen);
            }

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

            if ($this->aProveedor !== null) {
                if ($this->aProveedor->isModified() || $this->aProveedor->isNew()) {
                    $affectedRows += $this->aProveedor->save($con);
                }
                $this->setProveedor($this->aProveedor);
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

            if ($this->notacreditonotasScheduledForDeletion !== null) {
                if (!$this->notacreditonotasScheduledForDeletion->isEmpty()) {
                    NotacreditonotaQuery::create()
                        ->filterByPrimaryKeys($this->notacreditonotasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->notacreditonotasScheduledForDeletion = null;
                }
            }

            if ($this->collNotacreditonotas !== null) {
                foreach ($this->collNotacreditonotas as $referrerFK) {
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

        $this->modifiedColumns[] = NotacreditoPeer::IDNOTACREDITO;
        if (null !== $this->idnotacredito) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . NotacreditoPeer::IDNOTACREDITO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(NotacreditoPeer::IDNOTACREDITO)) {
            $modifiedColumns[':p' . $index++]  = '`idnotacredito`';
        }
        if ($this->isColumnModified(NotacreditoPeer::IDEMPRESA)) {
            $modifiedColumns[':p' . $index++]  = '`idempresa`';
        }
        if ($this->isColumnModified(NotacreditoPeer::IDSUCURSAL)) {
            $modifiedColumns[':p' . $index++]  = '`idsucursal`';
        }
        if ($this->isColumnModified(NotacreditoPeer::IDPROVEEDOR)) {
            $modifiedColumns[':p' . $index++]  = '`idproveedor`';
        }
        if ($this->isColumnModified(NotacreditoPeer::IDUSUARIO)) {
            $modifiedColumns[':p' . $index++]  = '`idusuario`';
        }
        if ($this->isColumnModified(NotacreditoPeer::IDAUDITOR)) {
            $modifiedColumns[':p' . $index++]  = '`idauditor`';
        }
        if ($this->isColumnModified(NotacreditoPeer::IDALMACEN)) {
            $modifiedColumns[':p' . $index++]  = '`idalmacen`';
        }
        if ($this->isColumnModified(NotacreditoPeer::NOTACREDITO_FOLIO)) {
            $modifiedColumns[':p' . $index++]  = '`notacredito_folio`';
        }
        if ($this->isColumnModified(NotacreditoPeer::NOTACREDITO_REVISADA)) {
            $modifiedColumns[':p' . $index++]  = '`notacredito_revisada`';
        }
        if ($this->isColumnModified(NotacreditoPeer::NOTACREDITO_FACTURA)) {
            $modifiedColumns[':p' . $index++]  = '`notacredito_factura`';
        }
        if ($this->isColumnModified(NotacreditoPeer::NOTACREDITO_FECHACREACION)) {
            $modifiedColumns[':p' . $index++]  = '`notacredito_fechacreacion`';
        }
        if ($this->isColumnModified(NotacreditoPeer::NOTACREDITO_FECHAENTREGA)) {
            $modifiedColumns[':p' . $index++]  = '`notacredito_fechaentrega`';
        }
        if ($this->isColumnModified(NotacreditoPeer::NOTACREDITO_IEPS)) {
            $modifiedColumns[':p' . $index++]  = '`notacredito_ieps`';
        }
        if ($this->isColumnModified(NotacreditoPeer::NOTACREDITO_IVA)) {
            $modifiedColumns[':p' . $index++]  = '`notacredito_iva`';
        }
        if ($this->isColumnModified(NotacreditoPeer::NOTACREDITO_TOTAL)) {
            $modifiedColumns[':p' . $index++]  = '`notacredito_total`';
        }
        if ($this->isColumnModified(NotacreditoPeer::NOTACREDITO_SUBTOTAL)) {
            $modifiedColumns[':p' . $index++]  = '`notacredito_subtotal`';
        }

        $sql = sprintf(
            'INSERT INTO `notacredito` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idnotacredito`':
                        $stmt->bindValue($identifier, $this->idnotacredito, PDO::PARAM_INT);
                        break;
                    case '`idempresa`':
                        $stmt->bindValue($identifier, $this->idempresa, PDO::PARAM_INT);
                        break;
                    case '`idsucursal`':
                        $stmt->bindValue($identifier, $this->idsucursal, PDO::PARAM_INT);
                        break;
                    case '`idproveedor`':
                        $stmt->bindValue($identifier, $this->idproveedor, PDO::PARAM_INT);
                        break;
                    case '`idusuario`':
                        $stmt->bindValue($identifier, $this->idusuario, PDO::PARAM_INT);
                        break;
                    case '`idauditor`':
                        $stmt->bindValue($identifier, $this->idauditor, PDO::PARAM_INT);
                        break;
                    case '`idalmacen`':
                        $stmt->bindValue($identifier, $this->idalmacen, PDO::PARAM_INT);
                        break;
                    case '`notacredito_folio`':
                        $stmt->bindValue($identifier, $this->notacredito_folio, PDO::PARAM_STR);
                        break;
                    case '`notacredito_revisada`':
                        $stmt->bindValue($identifier, (int) $this->notacredito_revisada, PDO::PARAM_INT);
                        break;
                    case '`notacredito_factura`':
                        $stmt->bindValue($identifier, $this->notacredito_factura, PDO::PARAM_STR);
                        break;
                    case '`notacredito_fechacreacion`':
                        $stmt->bindValue($identifier, $this->notacredito_fechacreacion, PDO::PARAM_STR);
                        break;
                    case '`notacredito_fechaentrega`':
                        $stmt->bindValue($identifier, $this->notacredito_fechaentrega, PDO::PARAM_STR);
                        break;
                    case '`notacredito_ieps`':
                        $stmt->bindValue($identifier, $this->notacredito_ieps, PDO::PARAM_STR);
                        break;
                    case '`notacredito_iva`':
                        $stmt->bindValue($identifier, $this->notacredito_iva, PDO::PARAM_STR);
                        break;
                    case '`notacredito_total`':
                        $stmt->bindValue($identifier, $this->notacredito_total, PDO::PARAM_STR);
                        break;
                    case '`notacredito_subtotal`':
                        $stmt->bindValue($identifier, $this->notacredito_subtotal, PDO::PARAM_STR);
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
        $this->setIdnotacredito($pk);

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

            if ($this->aAlmacen !== null) {
                if (!$this->aAlmacen->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aAlmacen->getValidationFailures());
                }
            }

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

            if ($this->aProveedor !== null) {
                if (!$this->aProveedor->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aProveedor->getValidationFailures());
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


            if (($retval = NotacreditoPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collNotacreditodetalles !== null) {
                    foreach ($this->collNotacreditodetalles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collNotacreditonotas !== null) {
                    foreach ($this->collNotacreditonotas as $referrerFK) {
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
        $pos = NotacreditoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdnotacredito();
                break;
            case 1:
                return $this->getIdempresa();
                break;
            case 2:
                return $this->getIdsucursal();
                break;
            case 3:
                return $this->getIdproveedor();
                break;
            case 4:
                return $this->getIdusuario();
                break;
            case 5:
                return $this->getIdauditor();
                break;
            case 6:
                return $this->getIdalmacen();
                break;
            case 7:
                return $this->getNotacreditoFolio();
                break;
            case 8:
                return $this->getNotacreditoRevisada();
                break;
            case 9:
                return $this->getNotacreditoFactura();
                break;
            case 10:
                return $this->getNotacreditoFechacreacion();
                break;
            case 11:
                return $this->getNotacreditoFechaentrega();
                break;
            case 12:
                return $this->getNotacreditoIeps();
                break;
            case 13:
                return $this->getNotacreditoIva();
                break;
            case 14:
                return $this->getNotacreditoTotal();
                break;
            case 15:
                return $this->getNotacreditoSubtotal();
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
        if (isset($alreadyDumpedObjects['Notacredito'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Notacredito'][$this->getPrimaryKey()] = true;
        $keys = NotacreditoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdnotacredito(),
            $keys[1] => $this->getIdempresa(),
            $keys[2] => $this->getIdsucursal(),
            $keys[3] => $this->getIdproveedor(),
            $keys[4] => $this->getIdusuario(),
            $keys[5] => $this->getIdauditor(),
            $keys[6] => $this->getIdalmacen(),
            $keys[7] => $this->getNotacreditoFolio(),
            $keys[8] => $this->getNotacreditoRevisada(),
            $keys[9] => $this->getNotacreditoFactura(),
            $keys[10] => $this->getNotacreditoFechacreacion(),
            $keys[11] => $this->getNotacreditoFechaentrega(),
            $keys[12] => $this->getNotacreditoIeps(),
            $keys[13] => $this->getNotacreditoIva(),
            $keys[14] => $this->getNotacreditoTotal(),
            $keys[15] => $this->getNotacreditoSubtotal(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aAlmacen) {
                $result['Almacen'] = $this->aAlmacen->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aUsuarioRelatedByIdauditor) {
                $result['UsuarioRelatedByIdauditor'] = $this->aUsuarioRelatedByIdauditor->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aEmpresa) {
                $result['Empresa'] = $this->aEmpresa->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aProveedor) {
                $result['Proveedor'] = $this->aProveedor->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSucursal) {
                $result['Sucursal'] = $this->aSucursal->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aUsuarioRelatedByIdusuario) {
                $result['UsuarioRelatedByIdusuario'] = $this->aUsuarioRelatedByIdusuario->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collNotacreditodetalles) {
                $result['Notacreditodetalles'] = $this->collNotacreditodetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collNotacreditonotas) {
                $result['Notacreditonotas'] = $this->collNotacreditonotas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = NotacreditoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdnotacredito($value);
                break;
            case 1:
                $this->setIdempresa($value);
                break;
            case 2:
                $this->setIdsucursal($value);
                break;
            case 3:
                $this->setIdproveedor($value);
                break;
            case 4:
                $this->setIdusuario($value);
                break;
            case 5:
                $this->setIdauditor($value);
                break;
            case 6:
                $this->setIdalmacen($value);
                break;
            case 7:
                $this->setNotacreditoFolio($value);
                break;
            case 8:
                $this->setNotacreditoRevisada($value);
                break;
            case 9:
                $this->setNotacreditoFactura($value);
                break;
            case 10:
                $this->setNotacreditoFechacreacion($value);
                break;
            case 11:
                $this->setNotacreditoFechaentrega($value);
                break;
            case 12:
                $this->setNotacreditoIeps($value);
                break;
            case 13:
                $this->setNotacreditoIva($value);
                break;
            case 14:
                $this->setNotacreditoTotal($value);
                break;
            case 15:
                $this->setNotacreditoSubtotal($value);
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
        $keys = NotacreditoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdnotacredito($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdempresa($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdsucursal($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdproveedor($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdusuario($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdauditor($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdalmacen($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setNotacreditoFolio($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setNotacreditoRevisada($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setNotacreditoFactura($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setNotacreditoFechacreacion($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setNotacreditoFechaentrega($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setNotacreditoIeps($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setNotacreditoIva($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setNotacreditoTotal($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setNotacreditoSubtotal($arr[$keys[15]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(NotacreditoPeer::DATABASE_NAME);

        if ($this->isColumnModified(NotacreditoPeer::IDNOTACREDITO)) $criteria->add(NotacreditoPeer::IDNOTACREDITO, $this->idnotacredito);
        if ($this->isColumnModified(NotacreditoPeer::IDEMPRESA)) $criteria->add(NotacreditoPeer::IDEMPRESA, $this->idempresa);
        if ($this->isColumnModified(NotacreditoPeer::IDSUCURSAL)) $criteria->add(NotacreditoPeer::IDSUCURSAL, $this->idsucursal);
        if ($this->isColumnModified(NotacreditoPeer::IDPROVEEDOR)) $criteria->add(NotacreditoPeer::IDPROVEEDOR, $this->idproveedor);
        if ($this->isColumnModified(NotacreditoPeer::IDUSUARIO)) $criteria->add(NotacreditoPeer::IDUSUARIO, $this->idusuario);
        if ($this->isColumnModified(NotacreditoPeer::IDAUDITOR)) $criteria->add(NotacreditoPeer::IDAUDITOR, $this->idauditor);
        if ($this->isColumnModified(NotacreditoPeer::IDALMACEN)) $criteria->add(NotacreditoPeer::IDALMACEN, $this->idalmacen);
        if ($this->isColumnModified(NotacreditoPeer::NOTACREDITO_FOLIO)) $criteria->add(NotacreditoPeer::NOTACREDITO_FOLIO, $this->notacredito_folio);
        if ($this->isColumnModified(NotacreditoPeer::NOTACREDITO_REVISADA)) $criteria->add(NotacreditoPeer::NOTACREDITO_REVISADA, $this->notacredito_revisada);
        if ($this->isColumnModified(NotacreditoPeer::NOTACREDITO_FACTURA)) $criteria->add(NotacreditoPeer::NOTACREDITO_FACTURA, $this->notacredito_factura);
        if ($this->isColumnModified(NotacreditoPeer::NOTACREDITO_FECHACREACION)) $criteria->add(NotacreditoPeer::NOTACREDITO_FECHACREACION, $this->notacredito_fechacreacion);
        if ($this->isColumnModified(NotacreditoPeer::NOTACREDITO_FECHAENTREGA)) $criteria->add(NotacreditoPeer::NOTACREDITO_FECHAENTREGA, $this->notacredito_fechaentrega);
        if ($this->isColumnModified(NotacreditoPeer::NOTACREDITO_IEPS)) $criteria->add(NotacreditoPeer::NOTACREDITO_IEPS, $this->notacredito_ieps);
        if ($this->isColumnModified(NotacreditoPeer::NOTACREDITO_IVA)) $criteria->add(NotacreditoPeer::NOTACREDITO_IVA, $this->notacredito_iva);
        if ($this->isColumnModified(NotacreditoPeer::NOTACREDITO_TOTAL)) $criteria->add(NotacreditoPeer::NOTACREDITO_TOTAL, $this->notacredito_total);
        if ($this->isColumnModified(NotacreditoPeer::NOTACREDITO_SUBTOTAL)) $criteria->add(NotacreditoPeer::NOTACREDITO_SUBTOTAL, $this->notacredito_subtotal);

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
        $criteria = new Criteria(NotacreditoPeer::DATABASE_NAME);
        $criteria->add(NotacreditoPeer::IDNOTACREDITO, $this->idnotacredito);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdnotacredito();
    }

    /**
     * Generic method to set the primary key (idnotacredito column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdnotacredito($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdnotacredito();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Notacredito (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdempresa($this->getIdempresa());
        $copyObj->setIdsucursal($this->getIdsucursal());
        $copyObj->setIdproveedor($this->getIdproveedor());
        $copyObj->setIdusuario($this->getIdusuario());
        $copyObj->setIdauditor($this->getIdauditor());
        $copyObj->setIdalmacen($this->getIdalmacen());
        $copyObj->setNotacreditoFolio($this->getNotacreditoFolio());
        $copyObj->setNotacreditoRevisada($this->getNotacreditoRevisada());
        $copyObj->setNotacreditoFactura($this->getNotacreditoFactura());
        $copyObj->setNotacreditoFechacreacion($this->getNotacreditoFechacreacion());
        $copyObj->setNotacreditoFechaentrega($this->getNotacreditoFechaentrega());
        $copyObj->setNotacreditoIeps($this->getNotacreditoIeps());
        $copyObj->setNotacreditoIva($this->getNotacreditoIva());
        $copyObj->setNotacreditoTotal($this->getNotacreditoTotal());
        $copyObj->setNotacreditoSubtotal($this->getNotacreditoSubtotal());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getNotacreditodetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addNotacreditodetalle($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getNotacreditonotas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addNotacreditonota($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdnotacredito(NULL); // this is a auto-increment column, so set to default value
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
     * @return Notacredito Clone of current object.
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
     * @return NotacreditoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new NotacreditoPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Almacen object.
     *
     * @param                  Almacen $v
     * @return Notacredito The current object (for fluent API support)
     * @throws PropelException
     */
    public function setAlmacen(Almacen $v = null)
    {
        if ($v === null) {
            $this->setIdalmacen(NULL);
        } else {
            $this->setIdalmacen($v->getIdalmacen());
        }

        $this->aAlmacen = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Almacen object, it will not be re-added.
        if ($v !== null) {
            $v->addNotacredito($this);
        }


        return $this;
    }


    /**
     * Get the associated Almacen object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Almacen The associated Almacen object.
     * @throws PropelException
     */
    public function getAlmacen(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aAlmacen === null && ($this->idalmacen !== null) && $doQuery) {
            $this->aAlmacen = AlmacenQuery::create()->findPk($this->idalmacen, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aAlmacen->addNotacreditos($this);
             */
        }

        return $this->aAlmacen;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param                  Usuario $v
     * @return Notacredito The current object (for fluent API support)
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
            $v->addNotacreditoRelatedByIdauditor($this);
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
                $this->aUsuarioRelatedByIdauditor->addNotacreditosRelatedByIdauditor($this);
             */
        }

        return $this->aUsuarioRelatedByIdauditor;
    }

    /**
     * Declares an association between this object and a Empresa object.
     *
     * @param                  Empresa $v
     * @return Notacredito The current object (for fluent API support)
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
            $v->addNotacredito($this);
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
                $this->aEmpresa->addNotacreditos($this);
             */
        }

        return $this->aEmpresa;
    }

    /**
     * Declares an association between this object and a Proveedor object.
     *
     * @param                  Proveedor $v
     * @return Notacredito The current object (for fluent API support)
     * @throws PropelException
     */
    public function setProveedor(Proveedor $v = null)
    {
        if ($v === null) {
            $this->setIdproveedor(NULL);
        } else {
            $this->setIdproveedor($v->getIdproveedor());
        }

        $this->aProveedor = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Proveedor object, it will not be re-added.
        if ($v !== null) {
            $v->addNotacredito($this);
        }


        return $this;
    }


    /**
     * Get the associated Proveedor object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Proveedor The associated Proveedor object.
     * @throws PropelException
     */
    public function getProveedor(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aProveedor === null && ($this->idproveedor !== null) && $doQuery) {
            $this->aProveedor = ProveedorQuery::create()->findPk($this->idproveedor, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aProveedor->addNotacreditos($this);
             */
        }

        return $this->aProveedor;
    }

    /**
     * Declares an association between this object and a Sucursal object.
     *
     * @param                  Sucursal $v
     * @return Notacredito The current object (for fluent API support)
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
            $v->addNotacredito($this);
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
                $this->aSucursal->addNotacreditos($this);
             */
        }

        return $this->aSucursal;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param                  Usuario $v
     * @return Notacredito The current object (for fluent API support)
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
            $v->addNotacreditoRelatedByIdusuario($this);
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
                $this->aUsuarioRelatedByIdusuario->addNotacreditosRelatedByIdusuario($this);
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
        if ('Notacreditodetalle' == $relationName) {
            $this->initNotacreditodetalles();
        }
        if ('Notacreditonota' == $relationName) {
            $this->initNotacreditonotas();
        }
    }

    /**
     * Clears out the collNotacreditodetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Notacredito The current object (for fluent API support)
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
     * If this Notacredito is new, it will return
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
                    ->filterByNotacredito($this)
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
     * @return Notacredito The current object (for fluent API support)
     */
    public function setNotacreditodetalles(PropelCollection $notacreditodetalles, PropelPDO $con = null)
    {
        $notacreditodetallesToDelete = $this->getNotacreditodetalles(new Criteria(), $con)->diff($notacreditodetalles);


        $this->notacreditodetallesScheduledForDeletion = $notacreditodetallesToDelete;

        foreach ($notacreditodetallesToDelete as $notacreditodetalleRemoved) {
            $notacreditodetalleRemoved->setNotacredito(null);
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
                ->filterByNotacredito($this)
                ->count($con);
        }

        return count($this->collNotacreditodetalles);
    }

    /**
     * Method called to associate a Notacreditodetalle object to this object
     * through the Notacreditodetalle foreign key attribute.
     *
     * @param    Notacreditodetalle $l Notacreditodetalle
     * @return Notacredito The current object (for fluent API support)
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
        $notacreditodetalle->setNotacredito($this);
    }

    /**
     * @param	Notacreditodetalle $notacreditodetalle The notacreditodetalle object to remove.
     * @return Notacredito The current object (for fluent API support)
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
            $notacreditodetalle->setNotacredito(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Notacredito is new, it will return
     * an empty collection; or if this Notacredito has previously
     * been saved, it will retrieve related Notacreditodetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Notacredito.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Notacreditodetalle[] List of Notacreditodetalle objects
     */
    public function getNotacreditodetallesJoinAlmacen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = NotacreditodetalleQuery::create(null, $criteria);
        $query->joinWith('Almacen', $join_behavior);

        return $this->getNotacreditodetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Notacredito is new, it will return
     * an empty collection; or if this Notacredito has previously
     * been saved, it will retrieve related Notacreditodetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Notacredito.
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
     * Clears out the collNotacreditonotas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Notacredito The current object (for fluent API support)
     * @see        addNotacreditonotas()
     */
    public function clearNotacreditonotas()
    {
        $this->collNotacreditonotas = null; // important to set this to null since that means it is uninitialized
        $this->collNotacreditonotasPartial = null;

        return $this;
    }

    /**
     * reset is the collNotacreditonotas collection loaded partially
     *
     * @return void
     */
    public function resetPartialNotacreditonotas($v = true)
    {
        $this->collNotacreditonotasPartial = $v;
    }

    /**
     * Initializes the collNotacreditonotas collection.
     *
     * By default this just sets the collNotacreditonotas collection to an empty array (like clearcollNotacreditonotas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initNotacreditonotas($overrideExisting = true)
    {
        if (null !== $this->collNotacreditonotas && !$overrideExisting) {
            return;
        }
        $this->collNotacreditonotas = new PropelObjectCollection();
        $this->collNotacreditonotas->setModel('Notacreditonota');
    }

    /**
     * Gets an array of Notacreditonota objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Notacredito is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Notacreditonota[] List of Notacreditonota objects
     * @throws PropelException
     */
    public function getNotacreditonotas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collNotacreditonotasPartial && !$this->isNew();
        if (null === $this->collNotacreditonotas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collNotacreditonotas) {
                // return empty collection
                $this->initNotacreditonotas();
            } else {
                $collNotacreditonotas = NotacreditonotaQuery::create(null, $criteria)
                    ->filterByNotacredito($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collNotacreditonotasPartial && count($collNotacreditonotas)) {
                      $this->initNotacreditonotas(false);

                      foreach ($collNotacreditonotas as $obj) {
                        if (false == $this->collNotacreditonotas->contains($obj)) {
                          $this->collNotacreditonotas->append($obj);
                        }
                      }

                      $this->collNotacreditonotasPartial = true;
                    }

                    $collNotacreditonotas->getInternalIterator()->rewind();

                    return $collNotacreditonotas;
                }

                if ($partial && $this->collNotacreditonotas) {
                    foreach ($this->collNotacreditonotas as $obj) {
                        if ($obj->isNew()) {
                            $collNotacreditonotas[] = $obj;
                        }
                    }
                }

                $this->collNotacreditonotas = $collNotacreditonotas;
                $this->collNotacreditonotasPartial = false;
            }
        }

        return $this->collNotacreditonotas;
    }

    /**
     * Sets a collection of Notacreditonota objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $notacreditonotas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Notacredito The current object (for fluent API support)
     */
    public function setNotacreditonotas(PropelCollection $notacreditonotas, PropelPDO $con = null)
    {
        $notacreditonotasToDelete = $this->getNotacreditonotas(new Criteria(), $con)->diff($notacreditonotas);


        $this->notacreditonotasScheduledForDeletion = $notacreditonotasToDelete;

        foreach ($notacreditonotasToDelete as $notacreditonotaRemoved) {
            $notacreditonotaRemoved->setNotacredito(null);
        }

        $this->collNotacreditonotas = null;
        foreach ($notacreditonotas as $notacreditonota) {
            $this->addNotacreditonota($notacreditonota);
        }

        $this->collNotacreditonotas = $notacreditonotas;
        $this->collNotacreditonotasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Notacreditonota objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Notacreditonota objects.
     * @throws PropelException
     */
    public function countNotacreditonotas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collNotacreditonotasPartial && !$this->isNew();
        if (null === $this->collNotacreditonotas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collNotacreditonotas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getNotacreditonotas());
            }
            $query = NotacreditonotaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByNotacredito($this)
                ->count($con);
        }

        return count($this->collNotacreditonotas);
    }

    /**
     * Method called to associate a Notacreditonota object to this object
     * through the Notacreditonota foreign key attribute.
     *
     * @param    Notacreditonota $l Notacreditonota
     * @return Notacredito The current object (for fluent API support)
     */
    public function addNotacreditonota(Notacreditonota $l)
    {
        if ($this->collNotacreditonotas === null) {
            $this->initNotacreditonotas();
            $this->collNotacreditonotasPartial = true;
        }

        if (!in_array($l, $this->collNotacreditonotas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddNotacreditonota($l);

            if ($this->notacreditonotasScheduledForDeletion and $this->notacreditonotasScheduledForDeletion->contains($l)) {
                $this->notacreditonotasScheduledForDeletion->remove($this->notacreditonotasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Notacreditonota $notacreditonota The notacreditonota object to add.
     */
    protected function doAddNotacreditonota($notacreditonota)
    {
        $this->collNotacreditonotas[]= $notacreditonota;
        $notacreditonota->setNotacredito($this);
    }

    /**
     * @param	Notacreditonota $notacreditonota The notacreditonota object to remove.
     * @return Notacredito The current object (for fluent API support)
     */
    public function removeNotacreditonota($notacreditonota)
    {
        if ($this->getNotacreditonotas()->contains($notacreditonota)) {
            $this->collNotacreditonotas->remove($this->collNotacreditonotas->search($notacreditonota));
            if (null === $this->notacreditonotasScheduledForDeletion) {
                $this->notacreditonotasScheduledForDeletion = clone $this->collNotacreditonotas;
                $this->notacreditonotasScheduledForDeletion->clear();
            }
            $this->notacreditonotasScheduledForDeletion[]= clone $notacreditonota;
            $notacreditonota->setNotacredito(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Notacredito is new, it will return
     * an empty collection; or if this Notacredito has previously
     * been saved, it will retrieve related Notacreditonotas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Notacredito.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Notacreditonota[] List of Notacreditonota objects
     */
    public function getNotacreditonotasJoinUsuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = NotacreditonotaQuery::create(null, $criteria);
        $query->joinWith('Usuario', $join_behavior);

        return $this->getNotacreditonotas($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idnotacredito = null;
        $this->idempresa = null;
        $this->idsucursal = null;
        $this->idproveedor = null;
        $this->idusuario = null;
        $this->idauditor = null;
        $this->idalmacen = null;
        $this->notacredito_folio = null;
        $this->notacredito_revisada = null;
        $this->notacredito_factura = null;
        $this->notacredito_fechacreacion = null;
        $this->notacredito_fechaentrega = null;
        $this->notacredito_ieps = null;
        $this->notacredito_iva = null;
        $this->notacredito_total = null;
        $this->notacredito_subtotal = null;
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
            if ($this->collNotacreditodetalles) {
                foreach ($this->collNotacreditodetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collNotacreditonotas) {
                foreach ($this->collNotacreditonotas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aAlmacen instanceof Persistent) {
              $this->aAlmacen->clearAllReferences($deep);
            }
            if ($this->aUsuarioRelatedByIdauditor instanceof Persistent) {
              $this->aUsuarioRelatedByIdauditor->clearAllReferences($deep);
            }
            if ($this->aEmpresa instanceof Persistent) {
              $this->aEmpresa->clearAllReferences($deep);
            }
            if ($this->aProveedor instanceof Persistent) {
              $this->aProveedor->clearAllReferences($deep);
            }
            if ($this->aSucursal instanceof Persistent) {
              $this->aSucursal->clearAllReferences($deep);
            }
            if ($this->aUsuarioRelatedByIdusuario instanceof Persistent) {
              $this->aUsuarioRelatedByIdusuario->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collNotacreditodetalles instanceof PropelCollection) {
            $this->collNotacreditodetalles->clearIterator();
        }
        $this->collNotacreditodetalles = null;
        if ($this->collNotacreditonotas instanceof PropelCollection) {
            $this->collNotacreditonotas->clearIterator();
        }
        $this->collNotacreditonotas = null;
        $this->aAlmacen = null;
        $this->aUsuarioRelatedByIdauditor = null;
        $this->aEmpresa = null;
        $this->aProveedor = null;
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
        return (string) $this->exportTo(NotacreditoPeer::DEFAULT_STRING_FORMAT);
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
