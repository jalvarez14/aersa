<?php


/**
 * Base class that represents a row from the 'compra' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseCompra extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CompraPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CompraPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idcompra field.
     * @var        int
     */
    protected $idcompra;

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
     * The value for the compra_folio field.
     * @var        string
     */
    protected $compra_folio;

    /**
     * The value for the compra_revisada field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $compra_revisada;

    /**
     * The value for the compra_factura field.
     * @var        string
     */
    protected $compra_factura;

    /**
     * The value for the compra_fechacreacion field.
     * @var        string
     */
    protected $compra_fechacreacion;

    /**
     * The value for the compra_fechacompra field.
     * @var        string
     */
    protected $compra_fechacompra;

    /**
     * The value for the compra_fechaentrega field.
     * @var        string
     */
    protected $compra_fechaentrega;

    /**
     * The value for the compra_ieps field.
     * @var        string
     */
    protected $compra_ieps;

    /**
     * The value for the compra_iva field.
     * @var        string
     */
    protected $compra_iva;

    /**
     * The value for the compra_subtotal field.
     * @var        string
     */
    protected $compra_subtotal;

    /**
     * The value for the compra_total field.
     * @var        string
     */
    protected $compra_total;

    /**
     * The value for the compra_tipo field.
     * @var        string
     */
    protected $compra_tipo;

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
     * The value for the compra_estatuspago field.
<<<<<<< HEAD
     * Note: this column has a database default value of: 'nopagada'
=======
>>>>>>> fc0fb6af431cd2ef6eabc53fd587157b5180b930
     * @var        string
     */
    protected $compra_estatuspago;

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
     * @var        PropelObjectCollection|Compradetalle[] Collection to store aggregation of Compradetalle objects.
     */
    protected $collCompradetalles;
    protected $collCompradetallesPartial;

    /**
     * @var        PropelObjectCollection|Compranota[] Collection to store aggregation of Compranota objects.
     */
    protected $collCompranotas;
    protected $collCompranotasPartial;

    /**
     * @var        PropelObjectCollection|Flujoefectivo[] Collection to store aggregation of Flujoefectivo objects.
     */
    protected $collFlujoefectivos;
    protected $collFlujoefectivosPartial;

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
    protected $compranotasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $flujoefectivosScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->compra_revisada = false;
        $this->notaauditorempresa = true;
        $this->notaalmacenistaempresa = true;
        $this->notaauditoraersa = true;
        $this->compra_estatuspago = 'nopagada';
    }

    /**
     * Initializes internal state of BaseCompra object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [idcompra] column value.
     *
     * @return int
     */
    public function getIdcompra()
    {

        return $this->idcompra;
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
     * Get the [compra_folio] column value.
     *
     * @return string
     */
    public function getCompraFolio()
    {

        return $this->compra_folio;
    }

    /**
     * Get the [compra_revisada] column value.
     *
     * @return boolean
     */
    public function getCompraRevisada()
    {

        return $this->compra_revisada;
    }

    /**
     * Get the [compra_factura] column value.
     *
     * @return string
     */
    public function getCompraFactura()
    {

        return $this->compra_factura;
    }

    /**
     * Get the [optionally formatted] temporal [compra_fechacreacion] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCompraFechacreacion($format = 'Y-m-d H:i:s')
    {
        if ($this->compra_fechacreacion === null) {
            return null;
        }

        if ($this->compra_fechacreacion === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->compra_fechacreacion);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->compra_fechacreacion, true), $x);
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
     * Get the [optionally formatted] temporal [compra_fechacompra] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCompraFechacompra($format = 'Y-m-d H:i:s')
    {
        if ($this->compra_fechacompra === null) {
            return null;
        }

        if ($this->compra_fechacompra === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->compra_fechacompra);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->compra_fechacompra, true), $x);
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
     * Get the [optionally formatted] temporal [compra_fechaentrega] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCompraFechaentrega($format = 'Y-m-d H:i:s')
    {
        if ($this->compra_fechaentrega === null) {
            return null;
        }

        if ($this->compra_fechaentrega === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->compra_fechaentrega);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->compra_fechaentrega, true), $x);
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
     * Get the [compra_ieps] column value.
     *
     * @return string
     */
    public function getCompraIeps()
    {

        return $this->compra_ieps;
    }

    /**
     * Get the [compra_iva] column value.
     *
     * @return string
     */
    public function getCompraIva()
    {

        return $this->compra_iva;
    }

    /**
     * Get the [compra_subtotal] column value.
     *
     * @return string
     */
    public function getCompraSubtotal()
    {

        return $this->compra_subtotal;
    }

    /**
     * Get the [compra_total] column value.
     *
     * @return string
     */
    public function getCompraTotal()
    {

        return $this->compra_total;
    }

    /**
     * Get the [compra_tipo] column value.
     *
     * @return string
     */
    public function getCompraTipo()
    {

        return $this->compra_tipo;
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
     * Get the [compra_estatuspago] column value.
     *
     * @return string
     */
    public function getCompraEstatuspago()
    {

        return $this->compra_estatuspago;
    }

    /**
     * Set the value of [idcompra] column.
     *
     * @param  int $v new value
     * @return Compra The current object (for fluent API support)
     */
    public function setIdcompra($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcompra !== $v) {
            $this->idcompra = $v;
            $this->modifiedColumns[] = CompraPeer::IDCOMPRA;
        }


        return $this;
    } // setIdcompra()

    /**
     * Set the value of [idempresa] column.
     *
     * @param  int $v new value
     * @return Compra The current object (for fluent API support)
     */
    public function setIdempresa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempresa !== $v) {
            $this->idempresa = $v;
            $this->modifiedColumns[] = CompraPeer::IDEMPRESA;
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
     * @return Compra The current object (for fluent API support)
     */
    public function setIdsucursal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idsucursal !== $v) {
            $this->idsucursal = $v;
            $this->modifiedColumns[] = CompraPeer::IDSUCURSAL;
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
     * @return Compra The current object (for fluent API support)
     */
    public function setIdproveedor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproveedor !== $v) {
            $this->idproveedor = $v;
            $this->modifiedColumns[] = CompraPeer::IDPROVEEDOR;
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
     * @return Compra The current object (for fluent API support)
     */
    public function setIdusuario($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idusuario !== $v) {
            $this->idusuario = $v;
            $this->modifiedColumns[] = CompraPeer::IDUSUARIO;
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
     * @return Compra The current object (for fluent API support)
     */
    public function setIdauditor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idauditor !== $v) {
            $this->idauditor = $v;
            $this->modifiedColumns[] = CompraPeer::IDAUDITOR;
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
     * @return Compra The current object (for fluent API support)
     */
    public function setIdalmacen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idalmacen !== $v) {
            $this->idalmacen = $v;
            $this->modifiedColumns[] = CompraPeer::IDALMACEN;
        }

        if ($this->aAlmacen !== null && $this->aAlmacen->getIdalmacen() !== $v) {
            $this->aAlmacen = null;
        }


        return $this;
    } // setIdalmacen()

    /**
     * Set the value of [compra_folio] column.
     *
     * @param  string $v new value
     * @return Compra The current object (for fluent API support)
     */
    public function setCompraFolio($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->compra_folio !== $v) {
            $this->compra_folio = $v;
            $this->modifiedColumns[] = CompraPeer::COMPRA_FOLIO;
        }


        return $this;
    } // setCompraFolio()

    /**
     * Sets the value of the [compra_revisada] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Compra The current object (for fluent API support)
     */
    public function setCompraRevisada($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->compra_revisada !== $v) {
            $this->compra_revisada = $v;
            $this->modifiedColumns[] = CompraPeer::COMPRA_REVISADA;
        }


        return $this;
    } // setCompraRevisada()

    /**
     * Set the value of [compra_factura] column.
     *
     * @param  string $v new value
     * @return Compra The current object (for fluent API support)
     */
    public function setCompraFactura($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->compra_factura !== $v) {
            $this->compra_factura = $v;
            $this->modifiedColumns[] = CompraPeer::COMPRA_FACTURA;
        }


        return $this;
    } // setCompraFactura()

    /**
     * Sets the value of [compra_fechacreacion] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Compra The current object (for fluent API support)
     */
    public function setCompraFechacreacion($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->compra_fechacreacion !== null || $dt !== null) {
            $currentDateAsString = ($this->compra_fechacreacion !== null && $tmpDt = new DateTime($this->compra_fechacreacion)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->compra_fechacreacion = $newDateAsString;
                $this->modifiedColumns[] = CompraPeer::COMPRA_FECHACREACION;
            }
        } // if either are not null


        return $this;
    } // setCompraFechacreacion()

    /**
     * Sets the value of [compra_fechacompra] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Compra The current object (for fluent API support)
     */
    public function setCompraFechacompra($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->compra_fechacompra !== null || $dt !== null) {
            $currentDateAsString = ($this->compra_fechacompra !== null && $tmpDt = new DateTime($this->compra_fechacompra)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->compra_fechacompra = $newDateAsString;
                $this->modifiedColumns[] = CompraPeer::COMPRA_FECHACOMPRA;
            }
        } // if either are not null


        return $this;
    } // setCompraFechacompra()

    /**
     * Sets the value of [compra_fechaentrega] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Compra The current object (for fluent API support)
     */
    public function setCompraFechaentrega($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->compra_fechaentrega !== null || $dt !== null) {
            $currentDateAsString = ($this->compra_fechaentrega !== null && $tmpDt = new DateTime($this->compra_fechaentrega)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->compra_fechaentrega = $newDateAsString;
                $this->modifiedColumns[] = CompraPeer::COMPRA_FECHAENTREGA;
            }
        } // if either are not null


        return $this;
    } // setCompraFechaentrega()

    /**
     * Set the value of [compra_ieps] column.
     *
     * @param  string $v new value
     * @return Compra The current object (for fluent API support)
     */
    public function setCompraIeps($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compra_ieps !== $v) {
            $this->compra_ieps = $v;
            $this->modifiedColumns[] = CompraPeer::COMPRA_IEPS;
        }


        return $this;
    } // setCompraIeps()

    /**
     * Set the value of [compra_iva] column.
     *
     * @param  string $v new value
     * @return Compra The current object (for fluent API support)
     */
    public function setCompraIva($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compra_iva !== $v) {
            $this->compra_iva = $v;
            $this->modifiedColumns[] = CompraPeer::COMPRA_IVA;
        }


        return $this;
    } // setCompraIva()

    /**
     * Set the value of [compra_subtotal] column.
     *
     * @param  string $v new value
     * @return Compra The current object (for fluent API support)
     */
    public function setCompraSubtotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compra_subtotal !== $v) {
            $this->compra_subtotal = $v;
            $this->modifiedColumns[] = CompraPeer::COMPRA_SUBTOTAL;
        }


        return $this;
    } // setCompraSubtotal()

    /**
     * Set the value of [compra_total] column.
     *
     * @param  string $v new value
     * @return Compra The current object (for fluent API support)
     */
    public function setCompraTotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compra_total !== $v) {
            $this->compra_total = $v;
            $this->modifiedColumns[] = CompraPeer::COMPRA_TOTAL;
        }


        return $this;
    } // setCompraTotal()

    /**
     * Set the value of [compra_tipo] column.
     *
     * @param  string $v new value
     * @return Compra The current object (for fluent API support)
     */
    public function setCompraTipo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->compra_tipo !== $v) {
            $this->compra_tipo = $v;
            $this->modifiedColumns[] = CompraPeer::COMPRA_TIPO;
        }


        return $this;
    } // setCompraTipo()

    /**
     * Sets the value of the [notaauditorempresa] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Compra The current object (for fluent API support)
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
            $this->modifiedColumns[] = CompraPeer::NOTAAUDITOREMPRESA;
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
     * @return Compra The current object (for fluent API support)
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
            $this->modifiedColumns[] = CompraPeer::NOTAALMACENISTAEMPRESA;
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
     * @return Compra The current object (for fluent API support)
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
            $this->modifiedColumns[] = CompraPeer::NOTAAUDITORAERSA;
        }


        return $this;
    } // setNotaauditoraersa()

    /**
     * Set the value of [compra_estatuspago] column.
     *
     * @param  string $v new value
     * @return Compra The current object (for fluent API support)
     */
    public function setCompraEstatuspago($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->compra_estatuspago !== $v) {
            $this->compra_estatuspago = $v;
            $this->modifiedColumns[] = CompraPeer::COMPRA_ESTATUSPAGO;
        }


        return $this;
    } // setCompraEstatuspago()

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
            if ($this->compra_revisada !== false) {
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

            if ($this->compra_estatuspago !== 'nopagada') {
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

            $this->idcompra = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idempresa = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idsucursal = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->idproveedor = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->idusuario = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->idauditor = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->idalmacen = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->compra_folio = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->compra_revisada = ($row[$startcol + 8] !== null) ? (boolean) $row[$startcol + 8] : null;
            $this->compra_factura = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->compra_fechacreacion = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->compra_fechacompra = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->compra_fechaentrega = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->compra_ieps = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->compra_iva = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->compra_subtotal = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->compra_total = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->compra_tipo = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->notaauditorempresa = ($row[$startcol + 18] !== null) ? (boolean) $row[$startcol + 18] : null;
            $this->notaalmacenistaempresa = ($row[$startcol + 19] !== null) ? (boolean) $row[$startcol + 19] : null;
            $this->notaauditoraersa = ($row[$startcol + 20] !== null) ? (boolean) $row[$startcol + 20] : null;
            $this->compra_estatuspago = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 22; // 22 = CompraPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Compra object", $e);
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
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CompraPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $this->collCompradetalles = null;

            $this->collCompranotas = null;

            $this->collFlujoefectivos = null;

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
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CompraQuery::create()
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
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CompraPeer::addInstanceToPool($this);
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

            if ($this->compranotasScheduledForDeletion !== null) {
                if (!$this->compranotasScheduledForDeletion->isEmpty()) {
                    CompranotaQuery::create()
                        ->filterByPrimaryKeys($this->compranotasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->compranotasScheduledForDeletion = null;
                }
            }

            if ($this->collCompranotas !== null) {
                foreach ($this->collCompranotas as $referrerFK) {
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

        $this->modifiedColumns[] = CompraPeer::IDCOMPRA;
        if (null !== $this->idcompra) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CompraPeer::IDCOMPRA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CompraPeer::IDCOMPRA)) {
            $modifiedColumns[':p' . $index++]  = '`idcompra`';
        }
        if ($this->isColumnModified(CompraPeer::IDEMPRESA)) {
            $modifiedColumns[':p' . $index++]  = '`idempresa`';
        }
        if ($this->isColumnModified(CompraPeer::IDSUCURSAL)) {
            $modifiedColumns[':p' . $index++]  = '`idsucursal`';
        }
        if ($this->isColumnModified(CompraPeer::IDPROVEEDOR)) {
            $modifiedColumns[':p' . $index++]  = '`idproveedor`';
        }
        if ($this->isColumnModified(CompraPeer::IDUSUARIO)) {
            $modifiedColumns[':p' . $index++]  = '`idusuario`';
        }
        if ($this->isColumnModified(CompraPeer::IDAUDITOR)) {
            $modifiedColumns[':p' . $index++]  = '`idauditor`';
        }
        if ($this->isColumnModified(CompraPeer::IDALMACEN)) {
            $modifiedColumns[':p' . $index++]  = '`idalmacen`';
        }
        if ($this->isColumnModified(CompraPeer::COMPRA_FOLIO)) {
            $modifiedColumns[':p' . $index++]  = '`compra_folio`';
        }
        if ($this->isColumnModified(CompraPeer::COMPRA_REVISADA)) {
            $modifiedColumns[':p' . $index++]  = '`compra_revisada`';
        }
        if ($this->isColumnModified(CompraPeer::COMPRA_FACTURA)) {
            $modifiedColumns[':p' . $index++]  = '`compra_factura`';
        }
        if ($this->isColumnModified(CompraPeer::COMPRA_FECHACREACION)) {
            $modifiedColumns[':p' . $index++]  = '`compra_fechacreacion`';
        }
        if ($this->isColumnModified(CompraPeer::COMPRA_FECHACOMPRA)) {
            $modifiedColumns[':p' . $index++]  = '`compra_fechacompra`';
        }
        if ($this->isColumnModified(CompraPeer::COMPRA_FECHAENTREGA)) {
            $modifiedColumns[':p' . $index++]  = '`compra_fechaentrega`';
        }
        if ($this->isColumnModified(CompraPeer::COMPRA_IEPS)) {
            $modifiedColumns[':p' . $index++]  = '`compra_ieps`';
        }
        if ($this->isColumnModified(CompraPeer::COMPRA_IVA)) {
            $modifiedColumns[':p' . $index++]  = '`compra_iva`';
        }
        if ($this->isColumnModified(CompraPeer::COMPRA_SUBTOTAL)) {
            $modifiedColumns[':p' . $index++]  = '`compra_subtotal`';
        }
        if ($this->isColumnModified(CompraPeer::COMPRA_TOTAL)) {
            $modifiedColumns[':p' . $index++]  = '`compra_total`';
        }
        if ($this->isColumnModified(CompraPeer::COMPRA_TIPO)) {
            $modifiedColumns[':p' . $index++]  = '`compra_tipo`';
        }
        if ($this->isColumnModified(CompraPeer::NOTAAUDITOREMPRESA)) {
            $modifiedColumns[':p' . $index++]  = '`notaauditorempresa`';
        }
        if ($this->isColumnModified(CompraPeer::NOTAALMACENISTAEMPRESA)) {
            $modifiedColumns[':p' . $index++]  = '`notaalmacenistaempresa`';
        }
        if ($this->isColumnModified(CompraPeer::NOTAAUDITORAERSA)) {
            $modifiedColumns[':p' . $index++]  = '`notaauditoraersa`';
        }
        if ($this->isColumnModified(CompraPeer::COMPRA_ESTATUSPAGO)) {
            $modifiedColumns[':p' . $index++]  = '`compra_estatuspago`';
        }

        $sql = sprintf(
            'INSERT INTO `compra` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idcompra`':
                        $stmt->bindValue($identifier, $this->idcompra, PDO::PARAM_INT);
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
                    case '`compra_folio`':
                        $stmt->bindValue($identifier, $this->compra_folio, PDO::PARAM_STR);
                        break;
                    case '`compra_revisada`':
                        $stmt->bindValue($identifier, (int) $this->compra_revisada, PDO::PARAM_INT);
                        break;
                    case '`compra_factura`':
                        $stmt->bindValue($identifier, $this->compra_factura, PDO::PARAM_STR);
                        break;
                    case '`compra_fechacreacion`':
                        $stmt->bindValue($identifier, $this->compra_fechacreacion, PDO::PARAM_STR);
                        break;
                    case '`compra_fechacompra`':
                        $stmt->bindValue($identifier, $this->compra_fechacompra, PDO::PARAM_STR);
                        break;
                    case '`compra_fechaentrega`':
                        $stmt->bindValue($identifier, $this->compra_fechaentrega, PDO::PARAM_STR);
                        break;
                    case '`compra_ieps`':
                        $stmt->bindValue($identifier, $this->compra_ieps, PDO::PARAM_STR);
                        break;
                    case '`compra_iva`':
                        $stmt->bindValue($identifier, $this->compra_iva, PDO::PARAM_STR);
                        break;
                    case '`compra_subtotal`':
                        $stmt->bindValue($identifier, $this->compra_subtotal, PDO::PARAM_STR);
                        break;
                    case '`compra_total`':
                        $stmt->bindValue($identifier, $this->compra_total, PDO::PARAM_STR);
                        break;
                    case '`compra_tipo`':
                        $stmt->bindValue($identifier, $this->compra_tipo, PDO::PARAM_STR);
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
                    case '`compra_estatuspago`':
                        $stmt->bindValue($identifier, $this->compra_estatuspago, PDO::PARAM_STR);
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
        $this->setIdcompra($pk);

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


            if (($retval = CompraPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCompradetalles !== null) {
                    foreach ($this->collCompradetalles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCompranotas !== null) {
                    foreach ($this->collCompranotas as $referrerFK) {
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
        $pos = CompraPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdcompra();
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
                return $this->getCompraFolio();
                break;
            case 8:
                return $this->getCompraRevisada();
                break;
            case 9:
                return $this->getCompraFactura();
                break;
            case 10:
                return $this->getCompraFechacreacion();
                break;
            case 11:
                return $this->getCompraFechacompra();
                break;
            case 12:
                return $this->getCompraFechaentrega();
                break;
            case 13:
                return $this->getCompraIeps();
                break;
            case 14:
                return $this->getCompraIva();
                break;
            case 15:
                return $this->getCompraSubtotal();
                break;
            case 16:
                return $this->getCompraTotal();
                break;
            case 17:
                return $this->getCompraTipo();
                break;
            case 18:
                return $this->getNotaauditorempresa();
                break;
            case 19:
                return $this->getNotaalmacenistaempresa();
                break;
            case 20:
                return $this->getNotaauditoraersa();
                break;
            case 21:
                return $this->getCompraEstatuspago();
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
        if (isset($alreadyDumpedObjects['Compra'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Compra'][$this->getPrimaryKey()] = true;
        $keys = CompraPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdcompra(),
            $keys[1] => $this->getIdempresa(),
            $keys[2] => $this->getIdsucursal(),
            $keys[3] => $this->getIdproveedor(),
            $keys[4] => $this->getIdusuario(),
            $keys[5] => $this->getIdauditor(),
            $keys[6] => $this->getIdalmacen(),
            $keys[7] => $this->getCompraFolio(),
            $keys[8] => $this->getCompraRevisada(),
            $keys[9] => $this->getCompraFactura(),
            $keys[10] => $this->getCompraFechacreacion(),
            $keys[11] => $this->getCompraFechacompra(),
            $keys[12] => $this->getCompraFechaentrega(),
            $keys[13] => $this->getCompraIeps(),
            $keys[14] => $this->getCompraIva(),
            $keys[15] => $this->getCompraSubtotal(),
            $keys[16] => $this->getCompraTotal(),
            $keys[17] => $this->getCompraTipo(),
            $keys[18] => $this->getNotaauditorempresa(),
            $keys[19] => $this->getNotaalmacenistaempresa(),
            $keys[20] => $this->getNotaauditoraersa(),
            $keys[21] => $this->getCompraEstatuspago(),
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
            if (null !== $this->collCompradetalles) {
                $result['Compradetalles'] = $this->collCompradetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCompranotas) {
                $result['Compranotas'] = $this->collCompranotas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collFlujoefectivos) {
                $result['Flujoefectivos'] = $this->collFlujoefectivos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CompraPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdcompra($value);
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
                $this->setCompraFolio($value);
                break;
            case 8:
                $this->setCompraRevisada($value);
                break;
            case 9:
                $this->setCompraFactura($value);
                break;
            case 10:
                $this->setCompraFechacreacion($value);
                break;
            case 11:
                $this->setCompraFechacompra($value);
                break;
            case 12:
                $this->setCompraFechaentrega($value);
                break;
            case 13:
                $this->setCompraIeps($value);
                break;
            case 14:
                $this->setCompraIva($value);
                break;
            case 15:
                $this->setCompraSubtotal($value);
                break;
            case 16:
                $this->setCompraTotal($value);
                break;
            case 17:
                $this->setCompraTipo($value);
                break;
            case 18:
                $this->setNotaauditorempresa($value);
                break;
            case 19:
                $this->setNotaalmacenistaempresa($value);
                break;
            case 20:
                $this->setNotaauditoraersa($value);
                break;
            case 21:
                $this->setCompraEstatuspago($value);
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
        $keys = CompraPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdcompra($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdempresa($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdsucursal($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdproveedor($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdusuario($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdauditor($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdalmacen($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCompraFolio($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCompraRevisada($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCompraFactura($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setCompraFechacreacion($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setCompraFechacompra($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setCompraFechaentrega($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setCompraIeps($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setCompraIva($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setCompraSubtotal($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setCompraTotal($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setCompraTipo($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setNotaauditorempresa($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setNotaalmacenistaempresa($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setNotaauditoraersa($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setCompraEstatuspago($arr[$keys[21]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CompraPeer::DATABASE_NAME);

        if ($this->isColumnModified(CompraPeer::IDCOMPRA)) $criteria->add(CompraPeer::IDCOMPRA, $this->idcompra);
        if ($this->isColumnModified(CompraPeer::IDEMPRESA)) $criteria->add(CompraPeer::IDEMPRESA, $this->idempresa);
        if ($this->isColumnModified(CompraPeer::IDSUCURSAL)) $criteria->add(CompraPeer::IDSUCURSAL, $this->idsucursal);
        if ($this->isColumnModified(CompraPeer::IDPROVEEDOR)) $criteria->add(CompraPeer::IDPROVEEDOR, $this->idproveedor);
        if ($this->isColumnModified(CompraPeer::IDUSUARIO)) $criteria->add(CompraPeer::IDUSUARIO, $this->idusuario);
        if ($this->isColumnModified(CompraPeer::IDAUDITOR)) $criteria->add(CompraPeer::IDAUDITOR, $this->idauditor);
        if ($this->isColumnModified(CompraPeer::IDALMACEN)) $criteria->add(CompraPeer::IDALMACEN, $this->idalmacen);
        if ($this->isColumnModified(CompraPeer::COMPRA_FOLIO)) $criteria->add(CompraPeer::COMPRA_FOLIO, $this->compra_folio);
        if ($this->isColumnModified(CompraPeer::COMPRA_REVISADA)) $criteria->add(CompraPeer::COMPRA_REVISADA, $this->compra_revisada);
        if ($this->isColumnModified(CompraPeer::COMPRA_FACTURA)) $criteria->add(CompraPeer::COMPRA_FACTURA, $this->compra_factura);
        if ($this->isColumnModified(CompraPeer::COMPRA_FECHACREACION)) $criteria->add(CompraPeer::COMPRA_FECHACREACION, $this->compra_fechacreacion);
        if ($this->isColumnModified(CompraPeer::COMPRA_FECHACOMPRA)) $criteria->add(CompraPeer::COMPRA_FECHACOMPRA, $this->compra_fechacompra);
        if ($this->isColumnModified(CompraPeer::COMPRA_FECHAENTREGA)) $criteria->add(CompraPeer::COMPRA_FECHAENTREGA, $this->compra_fechaentrega);
        if ($this->isColumnModified(CompraPeer::COMPRA_IEPS)) $criteria->add(CompraPeer::COMPRA_IEPS, $this->compra_ieps);
        if ($this->isColumnModified(CompraPeer::COMPRA_IVA)) $criteria->add(CompraPeer::COMPRA_IVA, $this->compra_iva);
        if ($this->isColumnModified(CompraPeer::COMPRA_SUBTOTAL)) $criteria->add(CompraPeer::COMPRA_SUBTOTAL, $this->compra_subtotal);
        if ($this->isColumnModified(CompraPeer::COMPRA_TOTAL)) $criteria->add(CompraPeer::COMPRA_TOTAL, $this->compra_total);
        if ($this->isColumnModified(CompraPeer::COMPRA_TIPO)) $criteria->add(CompraPeer::COMPRA_TIPO, $this->compra_tipo);
        if ($this->isColumnModified(CompraPeer::NOTAAUDITOREMPRESA)) $criteria->add(CompraPeer::NOTAAUDITOREMPRESA, $this->notaauditorempresa);
        if ($this->isColumnModified(CompraPeer::NOTAALMACENISTAEMPRESA)) $criteria->add(CompraPeer::NOTAALMACENISTAEMPRESA, $this->notaalmacenistaempresa);
        if ($this->isColumnModified(CompraPeer::NOTAAUDITORAERSA)) $criteria->add(CompraPeer::NOTAAUDITORAERSA, $this->notaauditoraersa);
        if ($this->isColumnModified(CompraPeer::COMPRA_ESTATUSPAGO)) $criteria->add(CompraPeer::COMPRA_ESTATUSPAGO, $this->compra_estatuspago);

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
        $criteria = new Criteria(CompraPeer::DATABASE_NAME);
        $criteria->add(CompraPeer::IDCOMPRA, $this->idcompra);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdcompra();
    }

    /**
     * Generic method to set the primary key (idcompra column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdcompra($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdcompra();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Compra (or compatible) type.
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
        $copyObj->setCompraFolio($this->getCompraFolio());
        $copyObj->setCompraRevisada($this->getCompraRevisada());
        $copyObj->setCompraFactura($this->getCompraFactura());
        $copyObj->setCompraFechacreacion($this->getCompraFechacreacion());
        $copyObj->setCompraFechacompra($this->getCompraFechacompra());
        $copyObj->setCompraFechaentrega($this->getCompraFechaentrega());
        $copyObj->setCompraIeps($this->getCompraIeps());
        $copyObj->setCompraIva($this->getCompraIva());
        $copyObj->setCompraSubtotal($this->getCompraSubtotal());
        $copyObj->setCompraTotal($this->getCompraTotal());
        $copyObj->setCompraTipo($this->getCompraTipo());
        $copyObj->setNotaauditorempresa($this->getNotaauditorempresa());
        $copyObj->setNotaalmacenistaempresa($this->getNotaalmacenistaempresa());
        $copyObj->setNotaauditoraersa($this->getNotaauditoraersa());
        $copyObj->setCompraEstatuspago($this->getCompraEstatuspago());

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

            foreach ($this->getCompranotas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCompranota($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getFlujoefectivos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addFlujoefectivo($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdcompra(NULL); // this is a auto-increment column, so set to default value
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
     * @return Compra Clone of current object.
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
     * @return CompraPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CompraPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Almacen object.
     *
     * @param                  Almacen $v
     * @return Compra The current object (for fluent API support)
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
            $v->addCompra($this);
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
                $this->aAlmacen->addCompras($this);
             */
        }

        return $this->aAlmacen;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param                  Usuario $v
     * @return Compra The current object (for fluent API support)
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
            $v->addCompraRelatedByIdauditor($this);
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
                $this->aUsuarioRelatedByIdauditor->addComprasRelatedByIdauditor($this);
             */
        }

        return $this->aUsuarioRelatedByIdauditor;
    }

    /**
     * Declares an association between this object and a Empresa object.
     *
     * @param                  Empresa $v
     * @return Compra The current object (for fluent API support)
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
            $v->addCompra($this);
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
                $this->aEmpresa->addCompras($this);
             */
        }

        return $this->aEmpresa;
    }

    /**
     * Declares an association between this object and a Proveedor object.
     *
     * @param                  Proveedor $v
     * @return Compra The current object (for fluent API support)
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
            $v->addCompra($this);
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
                $this->aProveedor->addCompras($this);
             */
        }

        return $this->aProveedor;
    }

    /**
     * Declares an association between this object and a Sucursal object.
     *
     * @param                  Sucursal $v
     * @return Compra The current object (for fluent API support)
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
            $v->addCompra($this);
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
                $this->aSucursal->addCompras($this);
             */
        }

        return $this->aSucursal;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param                  Usuario $v
     * @return Compra The current object (for fluent API support)
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
            $v->addCompraRelatedByIdusuario($this);
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
                $this->aUsuarioRelatedByIdusuario->addComprasRelatedByIdusuario($this);
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
        if ('Compradetalle' == $relationName) {
            $this->initCompradetalles();
        }
        if ('Compranota' == $relationName) {
            $this->initCompranotas();
        }
        if ('Flujoefectivo' == $relationName) {
            $this->initFlujoefectivos();
        }
    }

    /**
     * Clears out the collCompradetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Compra The current object (for fluent API support)
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
     * If this Compra is new, it will return
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
                    ->filterByCompra($this)
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
     * @return Compra The current object (for fluent API support)
     */
    public function setCompradetalles(PropelCollection $compradetalles, PropelPDO $con = null)
    {
        $compradetallesToDelete = $this->getCompradetalles(new Criteria(), $con)->diff($compradetalles);


        $this->compradetallesScheduledForDeletion = $compradetallesToDelete;

        foreach ($compradetallesToDelete as $compradetalleRemoved) {
            $compradetalleRemoved->setCompra(null);
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
                ->filterByCompra($this)
                ->count($con);
        }

        return count($this->collCompradetalles);
    }

    /**
     * Method called to associate a Compradetalle object to this object
     * through the Compradetalle foreign key attribute.
     *
     * @param    Compradetalle $l Compradetalle
     * @return Compra The current object (for fluent API support)
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
        $compradetalle->setCompra($this);
    }

    /**
     * @param	Compradetalle $compradetalle The compradetalle object to remove.
     * @return Compra The current object (for fluent API support)
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
            $compradetalle->setCompra(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Compra is new, it will return
     * an empty collection; or if this Compra has previously
     * been saved, it will retrieve related Compradetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Compra.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Compradetalle[] List of Compradetalle objects
     */
    public function getCompradetallesJoinAlmacen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CompradetalleQuery::create(null, $criteria);
        $query->joinWith('Almacen', $join_behavior);

        return $this->getCompradetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Compra is new, it will return
     * an empty collection; or if this Compra has previously
     * been saved, it will retrieve related Compradetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Compra.
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
     * Clears out the collCompranotas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Compra The current object (for fluent API support)
     * @see        addCompranotas()
     */
    public function clearCompranotas()
    {
        $this->collCompranotas = null; // important to set this to null since that means it is uninitialized
        $this->collCompranotasPartial = null;

        return $this;
    }

    /**
     * reset is the collCompranotas collection loaded partially
     *
     * @return void
     */
    public function resetPartialCompranotas($v = true)
    {
        $this->collCompranotasPartial = $v;
    }

    /**
     * Initializes the collCompranotas collection.
     *
     * By default this just sets the collCompranotas collection to an empty array (like clearcollCompranotas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCompranotas($overrideExisting = true)
    {
        if (null !== $this->collCompranotas && !$overrideExisting) {
            return;
        }
        $this->collCompranotas = new PropelObjectCollection();
        $this->collCompranotas->setModel('Compranota');
    }

    /**
     * Gets an array of Compranota objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Compra is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Compranota[] List of Compranota objects
     * @throws PropelException
     */
    public function getCompranotas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCompranotasPartial && !$this->isNew();
        if (null === $this->collCompranotas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCompranotas) {
                // return empty collection
                $this->initCompranotas();
            } else {
                $collCompranotas = CompranotaQuery::create(null, $criteria)
                    ->filterByCompra($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCompranotasPartial && count($collCompranotas)) {
                      $this->initCompranotas(false);

                      foreach ($collCompranotas as $obj) {
                        if (false == $this->collCompranotas->contains($obj)) {
                          $this->collCompranotas->append($obj);
                        }
                      }

                      $this->collCompranotasPartial = true;
                    }

                    $collCompranotas->getInternalIterator()->rewind();

                    return $collCompranotas;
                }

                if ($partial && $this->collCompranotas) {
                    foreach ($this->collCompranotas as $obj) {
                        if ($obj->isNew()) {
                            $collCompranotas[] = $obj;
                        }
                    }
                }

                $this->collCompranotas = $collCompranotas;
                $this->collCompranotasPartial = false;
            }
        }

        return $this->collCompranotas;
    }

    /**
     * Sets a collection of Compranota objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $compranotas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Compra The current object (for fluent API support)
     */
    public function setCompranotas(PropelCollection $compranotas, PropelPDO $con = null)
    {
        $compranotasToDelete = $this->getCompranotas(new Criteria(), $con)->diff($compranotas);


        $this->compranotasScheduledForDeletion = $compranotasToDelete;

        foreach ($compranotasToDelete as $compranotaRemoved) {
            $compranotaRemoved->setCompra(null);
        }

        $this->collCompranotas = null;
        foreach ($compranotas as $compranota) {
            $this->addCompranota($compranota);
        }

        $this->collCompranotas = $compranotas;
        $this->collCompranotasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Compranota objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Compranota objects.
     * @throws PropelException
     */
    public function countCompranotas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCompranotasPartial && !$this->isNew();
        if (null === $this->collCompranotas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCompranotas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCompranotas());
            }
            $query = CompranotaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCompra($this)
                ->count($con);
        }

        return count($this->collCompranotas);
    }

    /**
     * Method called to associate a Compranota object to this object
     * through the Compranota foreign key attribute.
     *
     * @param    Compranota $l Compranota
     * @return Compra The current object (for fluent API support)
     */
    public function addCompranota(Compranota $l)
    {
        if ($this->collCompranotas === null) {
            $this->initCompranotas();
            $this->collCompranotasPartial = true;
        }

        if (!in_array($l, $this->collCompranotas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCompranota($l);

            if ($this->compranotasScheduledForDeletion and $this->compranotasScheduledForDeletion->contains($l)) {
                $this->compranotasScheduledForDeletion->remove($this->compranotasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Compranota $compranota The compranota object to add.
     */
    protected function doAddCompranota($compranota)
    {
        $this->collCompranotas[]= $compranota;
        $compranota->setCompra($this);
    }

    /**
     * @param	Compranota $compranota The compranota object to remove.
     * @return Compra The current object (for fluent API support)
     */
    public function removeCompranota($compranota)
    {
        if ($this->getCompranotas()->contains($compranota)) {
            $this->collCompranotas->remove($this->collCompranotas->search($compranota));
            if (null === $this->compranotasScheduledForDeletion) {
                $this->compranotasScheduledForDeletion = clone $this->collCompranotas;
                $this->compranotasScheduledForDeletion->clear();
            }
            $this->compranotasScheduledForDeletion[]= clone $compranota;
            $compranota->setCompra(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Compra is new, it will return
     * an empty collection; or if this Compra has previously
     * been saved, it will retrieve related Compranotas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Compra.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Compranota[] List of Compranota objects
     */
    public function getCompranotasJoinUsuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CompranotaQuery::create(null, $criteria);
        $query->joinWith('Usuario', $join_behavior);

        return $this->getCompranotas($query, $con);
    }

    /**
     * Clears out the collFlujoefectivos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Compra The current object (for fluent API support)
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
     * If this Compra is new, it will return
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
                    ->filterByCompra($this)
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
     * @return Compra The current object (for fluent API support)
     */
    public function setFlujoefectivos(PropelCollection $flujoefectivos, PropelPDO $con = null)
    {
        $flujoefectivosToDelete = $this->getFlujoefectivos(new Criteria(), $con)->diff($flujoefectivos);


        $this->flujoefectivosScheduledForDeletion = $flujoefectivosToDelete;

        foreach ($flujoefectivosToDelete as $flujoefectivoRemoved) {
            $flujoefectivoRemoved->setCompra(null);
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
                ->filterByCompra($this)
                ->count($con);
        }

        return count($this->collFlujoefectivos);
    }

    /**
     * Method called to associate a Flujoefectivo object to this object
     * through the Flujoefectivo foreign key attribute.
     *
     * @param    Flujoefectivo $l Flujoefectivo
     * @return Compra The current object (for fluent API support)
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
        $flujoefectivo->setCompra($this);
    }

    /**
     * @param	Flujoefectivo $flujoefectivo The flujoefectivo object to remove.
     * @return Compra The current object (for fluent API support)
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
            $flujoefectivo->setCompra(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Compra is new, it will return
     * an empty collection; or if this Compra has previously
     * been saved, it will retrieve related Flujoefectivos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Compra.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Flujoefectivo[] List of Flujoefectivo objects
     */
    public function getFlujoefectivosJoinCuentabancaria($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FlujoefectivoQuery::create(null, $criteria);
        $query->joinWith('Cuentabancaria', $join_behavior);

        return $this->getFlujoefectivos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Compra is new, it will return
     * an empty collection; or if this Compra has previously
     * been saved, it will retrieve related Flujoefectivos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Compra.
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
     * Otherwise if this Compra is new, it will return
     * an empty collection; or if this Compra has previously
     * been saved, it will retrieve related Flujoefectivos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Compra.
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
     * Otherwise if this Compra is new, it will return
     * an empty collection; or if this Compra has previously
     * been saved, it will retrieve related Flujoefectivos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Compra.
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
     * Otherwise if this Compra is new, it will return
     * an empty collection; or if this Compra has previously
     * been saved, it will retrieve related Flujoefectivos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Compra.
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
     * Otherwise if this Compra is new, it will return
     * an empty collection; or if this Compra has previously
     * been saved, it will retrieve related Flujoefectivos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Compra.
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
     * Otherwise if this Compra is new, it will return
     * an empty collection; or if this Compra has previously
     * been saved, it will retrieve related Flujoefectivos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Compra.
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
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idcompra = null;
        $this->idempresa = null;
        $this->idsucursal = null;
        $this->idproveedor = null;
        $this->idusuario = null;
        $this->idauditor = null;
        $this->idalmacen = null;
        $this->compra_folio = null;
        $this->compra_revisada = null;
        $this->compra_factura = null;
        $this->compra_fechacreacion = null;
        $this->compra_fechacompra = null;
        $this->compra_fechaentrega = null;
        $this->compra_ieps = null;
        $this->compra_iva = null;
        $this->compra_subtotal = null;
        $this->compra_total = null;
        $this->compra_tipo = null;
        $this->notaauditorempresa = null;
        $this->notaalmacenistaempresa = null;
        $this->notaauditoraersa = null;
        $this->compra_estatuspago = null;
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
            if ($this->collCompradetalles) {
                foreach ($this->collCompradetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCompranotas) {
                foreach ($this->collCompranotas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collFlujoefectivos) {
                foreach ($this->collFlujoefectivos as $o) {
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

        if ($this->collCompradetalles instanceof PropelCollection) {
            $this->collCompradetalles->clearIterator();
        }
        $this->collCompradetalles = null;
        if ($this->collCompranotas instanceof PropelCollection) {
            $this->collCompranotas->clearIterator();
        }
        $this->collCompranotas = null;
        if ($this->collFlujoefectivos instanceof PropelCollection) {
            $this->collFlujoefectivos->clearIterator();
        }
        $this->collFlujoefectivos = null;
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
        return (string) $this->exportTo(CompraPeer::DEFAULT_STRING_FORMAT);
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
