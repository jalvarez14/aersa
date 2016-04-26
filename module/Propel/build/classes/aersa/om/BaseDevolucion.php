<?php


/**
 * Base class that represents a row from the 'devolucion' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseDevolucion extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'DevolucionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        DevolucionPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the iddevolucion field.
     * @var        int
     */
    protected $iddevolucion;

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
     * The value for the idalmacen field.
     * @var        int
     */
    protected $idalmacen;

    /**
     * The value for the idproveedor field.
     * @var        int
     */
    protected $idproveedor;

    /**
     * The value for the devolucion_folio field.
     * @var        string
     */
    protected $devolucion_folio;

    /**
     * The value for the devolucion_revisada field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $devolucion_revisada;

    /**
     * The value for the devolucion_factura field.
     * @var        string
     */
    protected $devolucion_factura;

    /**
     * The value for the devolucion_fechacreacion field.
     * @var        string
     */
    protected $devolucion_fechacreacion;

    /**
     * The value for the devolucion_fechaentrega field.
     * @var        string
     */
    protected $devolucion_fechaentrega;

    /**
     * The value for the devolucion_ieps field.
     * @var        string
     */
    protected $devolucion_ieps;

    /**
     * The value for the devolucion_iva field.
     * @var        string
     */
    protected $devolucion_iva;

    /**
     * The value for the devolucion_total field.
     * @var        string
     */
    protected $devolucion_total;

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
     * @var        PropelObjectCollection|Devoluciondetalle[] Collection to store aggregation of Devoluciondetalle objects.
     */
    protected $collDevoluciondetalles;
    protected $collDevoluciondetallesPartial;

    /**
     * @var        PropelObjectCollection|Devolucionnota[] Collection to store aggregation of Devolucionnota objects.
     */
    protected $collDevolucionnotas;
    protected $collDevolucionnotasPartial;

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
    protected $devoluciondetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $devolucionnotasScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->devolucion_revisada = false;
    }

    /**
     * Initializes internal state of BaseDevolucion object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [iddevolucion] column value.
     *
     * @return int
     */
    public function getIddevolucion()
    {

        return $this->iddevolucion;
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
     * Get the [idalmacen] column value.
     *
     * @return int
     */
    public function getIdalmacen()
    {

        return $this->idalmacen;
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
     * Get the [devolucion_folio] column value.
     *
     * @return string
     */
    public function getDevolucionFolio()
    {

        return $this->devolucion_folio;
    }

    /**
     * Get the [devolucion_revisada] column value.
     *
     * @return boolean
     */
    public function getDevolucionRevisada()
    {

        return $this->devolucion_revisada;
    }

    /**
     * Get the [devolucion_factura] column value.
     *
     * @return string
     */
    public function getDevolucionFactura()
    {

        return $this->devolucion_factura;
    }

    /**
     * Get the [optionally formatted] temporal [devolucion_fechacreacion] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDevolucionFechacreacion($format = 'Y-m-d H:i:s')
    {
        if ($this->devolucion_fechacreacion === null) {
            return null;
        }

        if ($this->devolucion_fechacreacion === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->devolucion_fechacreacion);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->devolucion_fechacreacion, true), $x);
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
     * Get the [devolucion_fechaentrega] column value.
     *
     * @return string
     */
    public function getDevolucionFechaentrega()
    {

        return $this->devolucion_fechaentrega;
    }

    /**
     * Get the [devolucion_ieps] column value.
     *
     * @return string
     */
    public function getDevolucionIeps()
    {

        return $this->devolucion_ieps;
    }

    /**
     * Get the [devolucion_iva] column value.
     *
     * @return string
     */
    public function getDevolucionIva()
    {

        return $this->devolucion_iva;
    }

    /**
     * Get the [devolucion_total] column value.
     *
     * @return string
     */
    public function getDevolucionTotal()
    {

        return $this->devolucion_total;
    }

    /**
     * Set the value of [iddevolucion] column.
     *
     * @param  int $v new value
     * @return Devolucion The current object (for fluent API support)
     */
    public function setIddevolucion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->iddevolucion !== $v) {
            $this->iddevolucion = $v;
            $this->modifiedColumns[] = DevolucionPeer::IDDEVOLUCION;
        }


        return $this;
    } // setIddevolucion()

    /**
     * Set the value of [idempresa] column.
     *
     * @param  int $v new value
     * @return Devolucion The current object (for fluent API support)
     */
    public function setIdempresa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempresa !== $v) {
            $this->idempresa = $v;
            $this->modifiedColumns[] = DevolucionPeer::IDEMPRESA;
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
     * @return Devolucion The current object (for fluent API support)
     */
    public function setIdsucursal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idsucursal !== $v) {
            $this->idsucursal = $v;
            $this->modifiedColumns[] = DevolucionPeer::IDSUCURSAL;
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
     * @return Devolucion The current object (for fluent API support)
     */
    public function setIdusuario($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idusuario !== $v) {
            $this->idusuario = $v;
            $this->modifiedColumns[] = DevolucionPeer::IDUSUARIO;
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
     * @return Devolucion The current object (for fluent API support)
     */
    public function setIdauditor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idauditor !== $v) {
            $this->idauditor = $v;
            $this->modifiedColumns[] = DevolucionPeer::IDAUDITOR;
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
     * @return Devolucion The current object (for fluent API support)
     */
    public function setIdalmacen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idalmacen !== $v) {
            $this->idalmacen = $v;
            $this->modifiedColumns[] = DevolucionPeer::IDALMACEN;
        }

        if ($this->aAlmacen !== null && $this->aAlmacen->getIdalmacen() !== $v) {
            $this->aAlmacen = null;
        }


        return $this;
    } // setIdalmacen()

    /**
     * Set the value of [idproveedor] column.
     *
     * @param  int $v new value
     * @return Devolucion The current object (for fluent API support)
     */
    public function setIdproveedor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproveedor !== $v) {
            $this->idproveedor = $v;
            $this->modifiedColumns[] = DevolucionPeer::IDPROVEEDOR;
        }

        if ($this->aProveedor !== null && $this->aProveedor->getIdproveedor() !== $v) {
            $this->aProveedor = null;
        }


        return $this;
    } // setIdproveedor()

    /**
     * Set the value of [devolucion_folio] column.
     *
     * @param  string $v new value
     * @return Devolucion The current object (for fluent API support)
     */
    public function setDevolucionFolio($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->devolucion_folio !== $v) {
            $this->devolucion_folio = $v;
            $this->modifiedColumns[] = DevolucionPeer::DEVOLUCION_FOLIO;
        }


        return $this;
    } // setDevolucionFolio()

    /**
     * Sets the value of the [devolucion_revisada] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Devolucion The current object (for fluent API support)
     */
    public function setDevolucionRevisada($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->devolucion_revisada !== $v) {
            $this->devolucion_revisada = $v;
            $this->modifiedColumns[] = DevolucionPeer::DEVOLUCION_REVISADA;
        }


        return $this;
    } // setDevolucionRevisada()

    /**
     * Set the value of [devolucion_factura] column.
     *
     * @param  string $v new value
     * @return Devolucion The current object (for fluent API support)
     */
    public function setDevolucionFactura($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->devolucion_factura !== $v) {
            $this->devolucion_factura = $v;
            $this->modifiedColumns[] = DevolucionPeer::DEVOLUCION_FACTURA;
        }


        return $this;
    } // setDevolucionFactura()

    /**
     * Sets the value of [devolucion_fechacreacion] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Devolucion The current object (for fluent API support)
     */
    public function setDevolucionFechacreacion($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->devolucion_fechacreacion !== null || $dt !== null) {
            $currentDateAsString = ($this->devolucion_fechacreacion !== null && $tmpDt = new DateTime($this->devolucion_fechacreacion)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->devolucion_fechacreacion = $newDateAsString;
                $this->modifiedColumns[] = DevolucionPeer::DEVOLUCION_FECHACREACION;
            }
        } // if either are not null


        return $this;
    } // setDevolucionFechacreacion()

    /**
     * Set the value of [devolucion_fechaentrega] column.
     *
     * @param  string $v new value
     * @return Devolucion The current object (for fluent API support)
     */
    public function setDevolucionFechaentrega($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->devolucion_fechaentrega !== $v) {
            $this->devolucion_fechaentrega = $v;
            $this->modifiedColumns[] = DevolucionPeer::DEVOLUCION_FECHAENTREGA;
        }


        return $this;
    } // setDevolucionFechaentrega()

    /**
     * Set the value of [devolucion_ieps] column.
     *
     * @param  string $v new value
     * @return Devolucion The current object (for fluent API support)
     */
    public function setDevolucionIeps($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->devolucion_ieps !== $v) {
            $this->devolucion_ieps = $v;
            $this->modifiedColumns[] = DevolucionPeer::DEVOLUCION_IEPS;
        }


        return $this;
    } // setDevolucionIeps()

    /**
     * Set the value of [devolucion_iva] column.
     *
     * @param  string $v new value
     * @return Devolucion The current object (for fluent API support)
     */
    public function setDevolucionIva($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->devolucion_iva !== $v) {
            $this->devolucion_iva = $v;
            $this->modifiedColumns[] = DevolucionPeer::DEVOLUCION_IVA;
        }


        return $this;
    } // setDevolucionIva()

    /**
     * Set the value of [devolucion_total] column.
     *
     * @param  string $v new value
     * @return Devolucion The current object (for fluent API support)
     */
    public function setDevolucionTotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->devolucion_total !== $v) {
            $this->devolucion_total = $v;
            $this->modifiedColumns[] = DevolucionPeer::DEVOLUCION_TOTAL;
        }


        return $this;
    } // setDevolucionTotal()

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
            if ($this->devolucion_revisada !== false) {
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

            $this->iddevolucion = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idempresa = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idsucursal = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->idusuario = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->idauditor = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->idalmacen = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->idproveedor = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->devolucion_folio = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->devolucion_revisada = ($row[$startcol + 8] !== null) ? (boolean) $row[$startcol + 8] : null;
            $this->devolucion_factura = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->devolucion_fechacreacion = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->devolucion_fechaentrega = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->devolucion_ieps = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->devolucion_iva = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->devolucion_total = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 15; // 15 = DevolucionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Devolucion object", $e);
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
        if ($this->aAlmacen !== null && $this->idalmacen !== $this->aAlmacen->getIdalmacen()) {
            $this->aAlmacen = null;
        }
        if ($this->aProveedor !== null && $this->idproveedor !== $this->aProveedor->getIdproveedor()) {
            $this->aProveedor = null;
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
            $con = Propel::getConnection(DevolucionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = DevolucionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $this->collDevoluciondetalles = null;

            $this->collDevolucionnotas = null;

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
            $con = Propel::getConnection(DevolucionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = DevolucionQuery::create()
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
            $con = Propel::getConnection(DevolucionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                DevolucionPeer::addInstanceToPool($this);
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

            if ($this->devolucionnotasScheduledForDeletion !== null) {
                if (!$this->devolucionnotasScheduledForDeletion->isEmpty()) {
                    DevolucionnotaQuery::create()
                        ->filterByPrimaryKeys($this->devolucionnotasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->devolucionnotasScheduledForDeletion = null;
                }
            }

            if ($this->collDevolucionnotas !== null) {
                foreach ($this->collDevolucionnotas as $referrerFK) {
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

        $this->modifiedColumns[] = DevolucionPeer::IDDEVOLUCION;
        if (null !== $this->iddevolucion) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . DevolucionPeer::IDDEVOLUCION . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(DevolucionPeer::IDDEVOLUCION)) {
            $modifiedColumns[':p' . $index++]  = '`iddevolucion`';
        }
        if ($this->isColumnModified(DevolucionPeer::IDEMPRESA)) {
            $modifiedColumns[':p' . $index++]  = '`idempresa`';
        }
        if ($this->isColumnModified(DevolucionPeer::IDSUCURSAL)) {
            $modifiedColumns[':p' . $index++]  = '`idsucursal`';
        }
        if ($this->isColumnModified(DevolucionPeer::IDUSUARIO)) {
            $modifiedColumns[':p' . $index++]  = '`idusuario`';
        }
        if ($this->isColumnModified(DevolucionPeer::IDAUDITOR)) {
            $modifiedColumns[':p' . $index++]  = '`idauditor`';
        }
        if ($this->isColumnModified(DevolucionPeer::IDALMACEN)) {
            $modifiedColumns[':p' . $index++]  = '`idalmacen`';
        }
        if ($this->isColumnModified(DevolucionPeer::IDPROVEEDOR)) {
            $modifiedColumns[':p' . $index++]  = '`idproveedor`';
        }
        if ($this->isColumnModified(DevolucionPeer::DEVOLUCION_FOLIO)) {
            $modifiedColumns[':p' . $index++]  = '`devolucion_folio`';
        }
        if ($this->isColumnModified(DevolucionPeer::DEVOLUCION_REVISADA)) {
            $modifiedColumns[':p' . $index++]  = '`devolucion_revisada`';
        }
        if ($this->isColumnModified(DevolucionPeer::DEVOLUCION_FACTURA)) {
            $modifiedColumns[':p' . $index++]  = '`devolucion_factura`';
        }
        if ($this->isColumnModified(DevolucionPeer::DEVOLUCION_FECHACREACION)) {
            $modifiedColumns[':p' . $index++]  = '`devolucion_fechacreacion`';
        }
        if ($this->isColumnModified(DevolucionPeer::DEVOLUCION_FECHAENTREGA)) {
            $modifiedColumns[':p' . $index++]  = '`devolucion_fechaentrega`';
        }
        if ($this->isColumnModified(DevolucionPeer::DEVOLUCION_IEPS)) {
            $modifiedColumns[':p' . $index++]  = '`devolucion_ieps`';
        }
        if ($this->isColumnModified(DevolucionPeer::DEVOLUCION_IVA)) {
            $modifiedColumns[':p' . $index++]  = '`devolucion_iva`';
        }
        if ($this->isColumnModified(DevolucionPeer::DEVOLUCION_TOTAL)) {
            $modifiedColumns[':p' . $index++]  = '`devolucion_total`';
        }

        $sql = sprintf(
            'INSERT INTO `devolucion` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`iddevolucion`':
                        $stmt->bindValue($identifier, $this->iddevolucion, PDO::PARAM_INT);
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
                    case '`idalmacen`':
                        $stmt->bindValue($identifier, $this->idalmacen, PDO::PARAM_INT);
                        break;
                    case '`idproveedor`':
                        $stmt->bindValue($identifier, $this->idproveedor, PDO::PARAM_INT);
                        break;
                    case '`devolucion_folio`':
                        $stmt->bindValue($identifier, $this->devolucion_folio, PDO::PARAM_STR);
                        break;
                    case '`devolucion_revisada`':
                        $stmt->bindValue($identifier, (int) $this->devolucion_revisada, PDO::PARAM_INT);
                        break;
                    case '`devolucion_factura`':
                        $stmt->bindValue($identifier, $this->devolucion_factura, PDO::PARAM_STR);
                        break;
                    case '`devolucion_fechacreacion`':
                        $stmt->bindValue($identifier, $this->devolucion_fechacreacion, PDO::PARAM_STR);
                        break;
                    case '`devolucion_fechaentrega`':
                        $stmt->bindValue($identifier, $this->devolucion_fechaentrega, PDO::PARAM_STR);
                        break;
                    case '`devolucion_ieps`':
                        $stmt->bindValue($identifier, $this->devolucion_ieps, PDO::PARAM_STR);
                        break;
                    case '`devolucion_iva`':
                        $stmt->bindValue($identifier, $this->devolucion_iva, PDO::PARAM_STR);
                        break;
                    case '`devolucion_total`':
                        $stmt->bindValue($identifier, $this->devolucion_total, PDO::PARAM_STR);
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
        $this->setIddevolucion($pk);

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


            if (($retval = DevolucionPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collDevoluciondetalles !== null) {
                    foreach ($this->collDevoluciondetalles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collDevolucionnotas !== null) {
                    foreach ($this->collDevolucionnotas as $referrerFK) {
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
        $pos = DevolucionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIddevolucion();
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
                return $this->getIdalmacen();
                break;
            case 6:
                return $this->getIdproveedor();
                break;
            case 7:
                return $this->getDevolucionFolio();
                break;
            case 8:
                return $this->getDevolucionRevisada();
                break;
            case 9:
                return $this->getDevolucionFactura();
                break;
            case 10:
                return $this->getDevolucionFechacreacion();
                break;
            case 11:
                return $this->getDevolucionFechaentrega();
                break;
            case 12:
                return $this->getDevolucionIeps();
                break;
            case 13:
                return $this->getDevolucionIva();
                break;
            case 14:
                return $this->getDevolucionTotal();
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
        if (isset($alreadyDumpedObjects['Devolucion'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Devolucion'][$this->getPrimaryKey()] = true;
        $keys = DevolucionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIddevolucion(),
            $keys[1] => $this->getIdempresa(),
            $keys[2] => $this->getIdsucursal(),
            $keys[3] => $this->getIdusuario(),
            $keys[4] => $this->getIdauditor(),
            $keys[5] => $this->getIdalmacen(),
            $keys[6] => $this->getIdproveedor(),
            $keys[7] => $this->getDevolucionFolio(),
            $keys[8] => $this->getDevolucionRevisada(),
            $keys[9] => $this->getDevolucionFactura(),
            $keys[10] => $this->getDevolucionFechacreacion(),
            $keys[11] => $this->getDevolucionFechaentrega(),
            $keys[12] => $this->getDevolucionIeps(),
            $keys[13] => $this->getDevolucionIva(),
            $keys[14] => $this->getDevolucionTotal(),
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
            if (null !== $this->collDevoluciondetalles) {
                $result['Devoluciondetalles'] = $this->collDevoluciondetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collDevolucionnotas) {
                $result['Devolucionnotas'] = $this->collDevolucionnotas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = DevolucionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIddevolucion($value);
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
                $this->setIdalmacen($value);
                break;
            case 6:
                $this->setIdproveedor($value);
                break;
            case 7:
                $this->setDevolucionFolio($value);
                break;
            case 8:
                $this->setDevolucionRevisada($value);
                break;
            case 9:
                $this->setDevolucionFactura($value);
                break;
            case 10:
                $this->setDevolucionFechacreacion($value);
                break;
            case 11:
                $this->setDevolucionFechaentrega($value);
                break;
            case 12:
                $this->setDevolucionIeps($value);
                break;
            case 13:
                $this->setDevolucionIva($value);
                break;
            case 14:
                $this->setDevolucionTotal($value);
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
        $keys = DevolucionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIddevolucion($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdempresa($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdsucursal($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdusuario($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdauditor($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdalmacen($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdproveedor($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDevolucionFolio($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDevolucionRevisada($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDevolucionFactura($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDevolucionFechacreacion($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDevolucionFechaentrega($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDevolucionIeps($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDevolucionIva($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setDevolucionTotal($arr[$keys[14]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(DevolucionPeer::DATABASE_NAME);

        if ($this->isColumnModified(DevolucionPeer::IDDEVOLUCION)) $criteria->add(DevolucionPeer::IDDEVOLUCION, $this->iddevolucion);
        if ($this->isColumnModified(DevolucionPeer::IDEMPRESA)) $criteria->add(DevolucionPeer::IDEMPRESA, $this->idempresa);
        if ($this->isColumnModified(DevolucionPeer::IDSUCURSAL)) $criteria->add(DevolucionPeer::IDSUCURSAL, $this->idsucursal);
        if ($this->isColumnModified(DevolucionPeer::IDUSUARIO)) $criteria->add(DevolucionPeer::IDUSUARIO, $this->idusuario);
        if ($this->isColumnModified(DevolucionPeer::IDAUDITOR)) $criteria->add(DevolucionPeer::IDAUDITOR, $this->idauditor);
        if ($this->isColumnModified(DevolucionPeer::IDALMACEN)) $criteria->add(DevolucionPeer::IDALMACEN, $this->idalmacen);
        if ($this->isColumnModified(DevolucionPeer::IDPROVEEDOR)) $criteria->add(DevolucionPeer::IDPROVEEDOR, $this->idproveedor);
        if ($this->isColumnModified(DevolucionPeer::DEVOLUCION_FOLIO)) $criteria->add(DevolucionPeer::DEVOLUCION_FOLIO, $this->devolucion_folio);
        if ($this->isColumnModified(DevolucionPeer::DEVOLUCION_REVISADA)) $criteria->add(DevolucionPeer::DEVOLUCION_REVISADA, $this->devolucion_revisada);
        if ($this->isColumnModified(DevolucionPeer::DEVOLUCION_FACTURA)) $criteria->add(DevolucionPeer::DEVOLUCION_FACTURA, $this->devolucion_factura);
        if ($this->isColumnModified(DevolucionPeer::DEVOLUCION_FECHACREACION)) $criteria->add(DevolucionPeer::DEVOLUCION_FECHACREACION, $this->devolucion_fechacreacion);
        if ($this->isColumnModified(DevolucionPeer::DEVOLUCION_FECHAENTREGA)) $criteria->add(DevolucionPeer::DEVOLUCION_FECHAENTREGA, $this->devolucion_fechaentrega);
        if ($this->isColumnModified(DevolucionPeer::DEVOLUCION_IEPS)) $criteria->add(DevolucionPeer::DEVOLUCION_IEPS, $this->devolucion_ieps);
        if ($this->isColumnModified(DevolucionPeer::DEVOLUCION_IVA)) $criteria->add(DevolucionPeer::DEVOLUCION_IVA, $this->devolucion_iva);
        if ($this->isColumnModified(DevolucionPeer::DEVOLUCION_TOTAL)) $criteria->add(DevolucionPeer::DEVOLUCION_TOTAL, $this->devolucion_total);

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
        $criteria = new Criteria(DevolucionPeer::DATABASE_NAME);
        $criteria->add(DevolucionPeer::IDDEVOLUCION, $this->iddevolucion);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIddevolucion();
    }

    /**
     * Generic method to set the primary key (iddevolucion column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIddevolucion($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIddevolucion();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Devolucion (or compatible) type.
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
        $copyObj->setIdalmacen($this->getIdalmacen());
        $copyObj->setIdproveedor($this->getIdproveedor());
        $copyObj->setDevolucionFolio($this->getDevolucionFolio());
        $copyObj->setDevolucionRevisada($this->getDevolucionRevisada());
        $copyObj->setDevolucionFactura($this->getDevolucionFactura());
        $copyObj->setDevolucionFechacreacion($this->getDevolucionFechacreacion());
        $copyObj->setDevolucionFechaentrega($this->getDevolucionFechaentrega());
        $copyObj->setDevolucionIeps($this->getDevolucionIeps());
        $copyObj->setDevolucionIva($this->getDevolucionIva());
        $copyObj->setDevolucionTotal($this->getDevolucionTotal());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getDevoluciondetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addDevoluciondetalle($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getDevolucionnotas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addDevolucionnota($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIddevolucion(NULL); // this is a auto-increment column, so set to default value
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
     * @return Devolucion Clone of current object.
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
     * @return DevolucionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new DevolucionPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Almacen object.
     *
     * @param                  Almacen $v
     * @return Devolucion The current object (for fluent API support)
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
            $v->addDevolucion($this);
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
                $this->aAlmacen->addDevolucions($this);
             */
        }

        return $this->aAlmacen;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param                  Usuario $v
     * @return Devolucion The current object (for fluent API support)
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
            $v->addDevolucionRelatedByIdauditor($this);
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
                $this->aUsuarioRelatedByIdauditor->addDevolucionsRelatedByIdauditor($this);
             */
        }

        return $this->aUsuarioRelatedByIdauditor;
    }

    /**
     * Declares an association between this object and a Empresa object.
     *
     * @param                  Empresa $v
     * @return Devolucion The current object (for fluent API support)
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
            $v->addDevolucion($this);
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
                $this->aEmpresa->addDevolucions($this);
             */
        }

        return $this->aEmpresa;
    }

    /**
     * Declares an association between this object and a Proveedor object.
     *
     * @param                  Proveedor $v
     * @return Devolucion The current object (for fluent API support)
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
            $v->addDevolucion($this);
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
                $this->aProveedor->addDevolucions($this);
             */
        }

        return $this->aProveedor;
    }

    /**
     * Declares an association between this object and a Sucursal object.
     *
     * @param                  Sucursal $v
     * @return Devolucion The current object (for fluent API support)
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
            $v->addDevolucion($this);
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
                $this->aSucursal->addDevolucions($this);
             */
        }

        return $this->aSucursal;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param                  Usuario $v
     * @return Devolucion The current object (for fluent API support)
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
            $v->addDevolucionRelatedByIdusuario($this);
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
                $this->aUsuarioRelatedByIdusuario->addDevolucionsRelatedByIdusuario($this);
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
        if ('Devoluciondetalle' == $relationName) {
            $this->initDevoluciondetalles();
        }
        if ('Devolucionnota' == $relationName) {
            $this->initDevolucionnotas();
        }
    }

    /**
     * Clears out the collDevoluciondetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Devolucion The current object (for fluent API support)
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
     * If this Devolucion is new, it will return
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
                    ->filterByDevolucion($this)
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
     * @return Devolucion The current object (for fluent API support)
     */
    public function setDevoluciondetalles(PropelCollection $devoluciondetalles, PropelPDO $con = null)
    {
        $devoluciondetallesToDelete = $this->getDevoluciondetalles(new Criteria(), $con)->diff($devoluciondetalles);


        $this->devoluciondetallesScheduledForDeletion = $devoluciondetallesToDelete;

        foreach ($devoluciondetallesToDelete as $devoluciondetalleRemoved) {
            $devoluciondetalleRemoved->setDevolucion(null);
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
                ->filterByDevolucion($this)
                ->count($con);
        }

        return count($this->collDevoluciondetalles);
    }

    /**
     * Method called to associate a Devoluciondetalle object to this object
     * through the Devoluciondetalle foreign key attribute.
     *
     * @param    Devoluciondetalle $l Devoluciondetalle
     * @return Devolucion The current object (for fluent API support)
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
        $devoluciondetalle->setDevolucion($this);
    }

    /**
     * @param	Devoluciondetalle $devoluciondetalle The devoluciondetalle object to remove.
     * @return Devolucion The current object (for fluent API support)
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
            $devoluciondetalle->setDevolucion(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Devolucion is new, it will return
     * an empty collection; or if this Devolucion has previously
     * been saved, it will retrieve related Devoluciondetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Devolucion.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Devoluciondetalle[] List of Devoluciondetalle objects
     */
    public function getDevoluciondetallesJoinAlmacen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = DevoluciondetalleQuery::create(null, $criteria);
        $query->joinWith('Almacen', $join_behavior);

        return $this->getDevoluciondetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Devolucion is new, it will return
     * an empty collection; or if this Devolucion has previously
     * been saved, it will retrieve related Devoluciondetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Devolucion.
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
     * Clears out the collDevolucionnotas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Devolucion The current object (for fluent API support)
     * @see        addDevolucionnotas()
     */
    public function clearDevolucionnotas()
    {
        $this->collDevolucionnotas = null; // important to set this to null since that means it is uninitialized
        $this->collDevolucionnotasPartial = null;

        return $this;
    }

    /**
     * reset is the collDevolucionnotas collection loaded partially
     *
     * @return void
     */
    public function resetPartialDevolucionnotas($v = true)
    {
        $this->collDevolucionnotasPartial = $v;
    }

    /**
     * Initializes the collDevolucionnotas collection.
     *
     * By default this just sets the collDevolucionnotas collection to an empty array (like clearcollDevolucionnotas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initDevolucionnotas($overrideExisting = true)
    {
        if (null !== $this->collDevolucionnotas && !$overrideExisting) {
            return;
        }
        $this->collDevolucionnotas = new PropelObjectCollection();
        $this->collDevolucionnotas->setModel('Devolucionnota');
    }

    /**
     * Gets an array of Devolucionnota objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Devolucion is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Devolucionnota[] List of Devolucionnota objects
     * @throws PropelException
     */
    public function getDevolucionnotas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collDevolucionnotasPartial && !$this->isNew();
        if (null === $this->collDevolucionnotas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collDevolucionnotas) {
                // return empty collection
                $this->initDevolucionnotas();
            } else {
                $collDevolucionnotas = DevolucionnotaQuery::create(null, $criteria)
                    ->filterByDevolucion($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collDevolucionnotasPartial && count($collDevolucionnotas)) {
                      $this->initDevolucionnotas(false);

                      foreach ($collDevolucionnotas as $obj) {
                        if (false == $this->collDevolucionnotas->contains($obj)) {
                          $this->collDevolucionnotas->append($obj);
                        }
                      }

                      $this->collDevolucionnotasPartial = true;
                    }

                    $collDevolucionnotas->getInternalIterator()->rewind();

                    return $collDevolucionnotas;
                }

                if ($partial && $this->collDevolucionnotas) {
                    foreach ($this->collDevolucionnotas as $obj) {
                        if ($obj->isNew()) {
                            $collDevolucionnotas[] = $obj;
                        }
                    }
                }

                $this->collDevolucionnotas = $collDevolucionnotas;
                $this->collDevolucionnotasPartial = false;
            }
        }

        return $this->collDevolucionnotas;
    }

    /**
     * Sets a collection of Devolucionnota objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $devolucionnotas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Devolucion The current object (for fluent API support)
     */
    public function setDevolucionnotas(PropelCollection $devolucionnotas, PropelPDO $con = null)
    {
        $devolucionnotasToDelete = $this->getDevolucionnotas(new Criteria(), $con)->diff($devolucionnotas);


        $this->devolucionnotasScheduledForDeletion = $devolucionnotasToDelete;

        foreach ($devolucionnotasToDelete as $devolucionnotaRemoved) {
            $devolucionnotaRemoved->setDevolucion(null);
        }

        $this->collDevolucionnotas = null;
        foreach ($devolucionnotas as $devolucionnota) {
            $this->addDevolucionnota($devolucionnota);
        }

        $this->collDevolucionnotas = $devolucionnotas;
        $this->collDevolucionnotasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Devolucionnota objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Devolucionnota objects.
     * @throws PropelException
     */
    public function countDevolucionnotas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collDevolucionnotasPartial && !$this->isNew();
        if (null === $this->collDevolucionnotas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collDevolucionnotas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getDevolucionnotas());
            }
            $query = DevolucionnotaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByDevolucion($this)
                ->count($con);
        }

        return count($this->collDevolucionnotas);
    }

    /**
     * Method called to associate a Devolucionnota object to this object
     * through the Devolucionnota foreign key attribute.
     *
     * @param    Devolucionnota $l Devolucionnota
     * @return Devolucion The current object (for fluent API support)
     */
    public function addDevolucionnota(Devolucionnota $l)
    {
        if ($this->collDevolucionnotas === null) {
            $this->initDevolucionnotas();
            $this->collDevolucionnotasPartial = true;
        }

        if (!in_array($l, $this->collDevolucionnotas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddDevolucionnota($l);

            if ($this->devolucionnotasScheduledForDeletion and $this->devolucionnotasScheduledForDeletion->contains($l)) {
                $this->devolucionnotasScheduledForDeletion->remove($this->devolucionnotasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Devolucionnota $devolucionnota The devolucionnota object to add.
     */
    protected function doAddDevolucionnota($devolucionnota)
    {
        $this->collDevolucionnotas[]= $devolucionnota;
        $devolucionnota->setDevolucion($this);
    }

    /**
     * @param	Devolucionnota $devolucionnota The devolucionnota object to remove.
     * @return Devolucion The current object (for fluent API support)
     */
    public function removeDevolucionnota($devolucionnota)
    {
        if ($this->getDevolucionnotas()->contains($devolucionnota)) {
            $this->collDevolucionnotas->remove($this->collDevolucionnotas->search($devolucionnota));
            if (null === $this->devolucionnotasScheduledForDeletion) {
                $this->devolucionnotasScheduledForDeletion = clone $this->collDevolucionnotas;
                $this->devolucionnotasScheduledForDeletion->clear();
            }
            $this->devolucionnotasScheduledForDeletion[]= clone $devolucionnota;
            $devolucionnota->setDevolucion(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Devolucion is new, it will return
     * an empty collection; or if this Devolucion has previously
     * been saved, it will retrieve related Devolucionnotas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Devolucion.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Devolucionnota[] List of Devolucionnota objects
     */
    public function getDevolucionnotasJoinUsuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = DevolucionnotaQuery::create(null, $criteria);
        $query->joinWith('Usuario', $join_behavior);

        return $this->getDevolucionnotas($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->iddevolucion = null;
        $this->idempresa = null;
        $this->idsucursal = null;
        $this->idusuario = null;
        $this->idauditor = null;
        $this->idalmacen = null;
        $this->idproveedor = null;
        $this->devolucion_folio = null;
        $this->devolucion_revisada = null;
        $this->devolucion_factura = null;
        $this->devolucion_fechacreacion = null;
        $this->devolucion_fechaentrega = null;
        $this->devolucion_ieps = null;
        $this->devolucion_iva = null;
        $this->devolucion_total = null;
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
            if ($this->collDevoluciondetalles) {
                foreach ($this->collDevoluciondetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collDevolucionnotas) {
                foreach ($this->collDevolucionnotas as $o) {
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

        if ($this->collDevoluciondetalles instanceof PropelCollection) {
            $this->collDevoluciondetalles->clearIterator();
        }
        $this->collDevoluciondetalles = null;
        if ($this->collDevolucionnotas instanceof PropelCollection) {
            $this->collDevolucionnotas->clearIterator();
        }
        $this->collDevolucionnotas = null;
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
        return (string) $this->exportTo(DevolucionPeer::DEFAULT_STRING_FORMAT);
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
