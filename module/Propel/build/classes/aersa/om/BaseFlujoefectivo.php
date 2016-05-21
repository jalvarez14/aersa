<?php


/**
 * Base class that represents a row from the 'flujoefectivo' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseFlujoefectivo extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'FlujoefectivoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        FlujoefectivoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idflujoefectivo field.
     * @var        int
     */
    protected $idflujoefectivo;

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
     * The value for the flujoefectivo_origen field.
     * @var        string
     */
    protected $flujoefectivo_origen;

    /**
     * The value for the idcuentaporcobrar field.
     * @var        int
     */
    protected $idcuentaporcobrar;

    /**
     * The value for the idcompra field.
     * @var        int
     */
    protected $idcompra;

    /**
     * The value for the idingreso field.
     * @var        int
     */
    protected $idingreso;

    /**
     * The value for the ingresorubro field.
     * @var        string
     */
    protected $ingresorubro;

    /**
     * The value for the flujoefectivo_pago field.
     * @var        string
     */
    protected $flujoefectivo_pago;

    /**
     * The value for the idproveedor field.
     * @var        int
     */
    protected $idproveedor;

    /**
     * The value for the idcuentabancaria field.
     * @var        int
     */
    protected $idcuentabancaria;

    /**
     * The value for the flujoefectivo_cantidad field.
     * @var        string
     */
    protected $flujoefectivo_cantidad;

    /**
     * The value for the flujoefectivo_fecha field.
     * @var        string
     */
    protected $flujoefectivo_fecha;

    /**
     * The value for the flujoefectivo_referencia field.
     * @var        string
     */
    protected $flujoefectivo_referencia;

    /**
     * The value for the flujoefectivo_comprobante field.
     * @var        string
     */
    protected $flujoefectivo_comprobante;

    /**
     * The value for the flujoefectivo_mediodepago field.
     * @var        string
     */
    protected $flujoefectivo_mediodepago;

    /**
     * The value for the flujoefectivo_tipo field.
     * @var        string
     */
    protected $flujoefectivo_tipo;

    /**
     * The value for the flujoefectivo_chequecirculacion field.
     * @var        boolean
     */
    protected $flujoefectivo_chequecirculacion;

    /**
     * The value for the flujoefectivo_fechacobrocheque field.
     * @var        string
     */
    protected $flujoefectivo_fechacobrocheque;

    /**
     * @var        Compra
     */
    protected $aCompra;

    /**
     * @var        Cuentabancaria
     */
    protected $aCuentabancaria;

    /**
     * @var        Cuentaporcobrar
     */
    protected $aCuentaporcobrar;

    /**
     * @var        Empresa
     */
    protected $aEmpresa;

    /**
     * @var        Ingreso
     */
    protected $aIngreso;

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
     * Get the [idflujoefectivo] column value.
     *
     * @return int
     */
    public function getIdflujoefectivo()
    {

        return $this->idflujoefectivo;
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
     * Get the [flujoefectivo_origen] column value.
     *
     * @return string
     */
    public function getFlujoefectivoOrigen()
    {

        return $this->flujoefectivo_origen;
    }

    /**
     * Get the [idcuentaporcobrar] column value.
     *
     * @return int
     */
    public function getIdcuentaporcobrar()
    {

        return $this->idcuentaporcobrar;
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
     * Get the [idingreso] column value.
     *
     * @return int
     */
    public function getIdingreso()
    {

        return $this->idingreso;
    }

    /**
     * Get the [ingresorubro] column value.
     *
     * @return string
     */
    public function getIngresorubro()
    {

        return $this->ingresorubro;
    }

    /**
     * Get the [flujoefectivo_pago] column value.
     *
     * @return string
     */
    public function getFlujoefectivoPago()
    {

        return $this->flujoefectivo_pago;
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
     * Get the [idcuentabancaria] column value.
     *
     * @return int
     */
    public function getIdcuentabancaria()
    {

        return $this->idcuentabancaria;
    }

    /**
     * Get the [flujoefectivo_cantidad] column value.
     *
     * @return string
     */
    public function getFlujoefectivoCantidad()
    {

        return $this->flujoefectivo_cantidad;
    }

    /**
     * Get the [optionally formatted] temporal [flujoefectivo_fecha] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFlujoefectivoFecha($format = 'Y-m-d H:i:s')
    {
        if ($this->flujoefectivo_fecha === null) {
            return null;
        }

        if ($this->flujoefectivo_fecha === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->flujoefectivo_fecha);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->flujoefectivo_fecha, true), $x);
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
     * Get the [flujoefectivo_referencia] column value.
     *
     * @return string
     */
    public function getFlujoefectivoReferencia()
    {

        return $this->flujoefectivo_referencia;
    }

    /**
     * Get the [flujoefectivo_comprobante] column value.
     *
     * @return string
     */
    public function getFlujoefectivoComprobante()
    {

        return $this->flujoefectivo_comprobante;
    }

    /**
     * Get the [flujoefectivo_mediodepago] column value.
     *
     * @return string
     */
    public function getFlujoefectivoMediodepago()
    {

        return $this->flujoefectivo_mediodepago;
    }

    /**
     * Get the [flujoefectivo_tipo] column value.
     *
     * @return string
     */
    public function getFlujoefectivoTipo()
    {

        return $this->flujoefectivo_tipo;
    }

    /**
     * Get the [flujoefectivo_chequecirculacion] column value.
     *
     * @return boolean
     */
    public function getFlujoefectivoChequecirculacion()
    {

        return $this->flujoefectivo_chequecirculacion;
    }

    /**
     * Get the [optionally formatted] temporal [flujoefectivo_fechacobrocheque] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFlujoefectivoFechacobrocheque($format = 'Y-m-d H:i:s')
    {
        if ($this->flujoefectivo_fechacobrocheque === null) {
            return null;
        }

        if ($this->flujoefectivo_fechacobrocheque === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->flujoefectivo_fechacobrocheque);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->flujoefectivo_fechacobrocheque, true), $x);
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
     * Set the value of [idflujoefectivo] column.
     *
     * @param  int $v new value
     * @return Flujoefectivo The current object (for fluent API support)
     */
    public function setIdflujoefectivo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idflujoefectivo !== $v) {
            $this->idflujoefectivo = $v;
            $this->modifiedColumns[] = FlujoefectivoPeer::IDFLUJOEFECTIVO;
        }


        return $this;
    } // setIdflujoefectivo()

    /**
     * Set the value of [idempresa] column.
     *
     * @param  int $v new value
     * @return Flujoefectivo The current object (for fluent API support)
     */
    public function setIdempresa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempresa !== $v) {
            $this->idempresa = $v;
            $this->modifiedColumns[] = FlujoefectivoPeer::IDEMPRESA;
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
     * @return Flujoefectivo The current object (for fluent API support)
     */
    public function setIdsucursal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idsucursal !== $v) {
            $this->idsucursal = $v;
            $this->modifiedColumns[] = FlujoefectivoPeer::IDSUCURSAL;
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
     * @return Flujoefectivo The current object (for fluent API support)
     */
    public function setIdusuario($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idusuario !== $v) {
            $this->idusuario = $v;
            $this->modifiedColumns[] = FlujoefectivoPeer::IDUSUARIO;
        }

        if ($this->aUsuario !== null && $this->aUsuario->getIdusuario() !== $v) {
            $this->aUsuario = null;
        }


        return $this;
    } // setIdusuario()

    /**
     * Set the value of [flujoefectivo_origen] column.
     *
     * @param  string $v new value
     * @return Flujoefectivo The current object (for fluent API support)
     */
    public function setFlujoefectivoOrigen($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->flujoefectivo_origen !== $v) {
            $this->flujoefectivo_origen = $v;
            $this->modifiedColumns[] = FlujoefectivoPeer::FLUJOEFECTIVO_ORIGEN;
        }


        return $this;
    } // setFlujoefectivoOrigen()

    /**
     * Set the value of [idcuentaporcobrar] column.
     *
     * @param  int $v new value
     * @return Flujoefectivo The current object (for fluent API support)
     */
    public function setIdcuentaporcobrar($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcuentaporcobrar !== $v) {
            $this->idcuentaporcobrar = $v;
            $this->modifiedColumns[] = FlujoefectivoPeer::IDCUENTAPORCOBRAR;
        }

        if ($this->aCuentaporcobrar !== null && $this->aCuentaporcobrar->getIdcuentaporcobrar() !== $v) {
            $this->aCuentaporcobrar = null;
        }


        return $this;
    } // setIdcuentaporcobrar()

    /**
     * Set the value of [idcompra] column.
     *
     * @param  int $v new value
     * @return Flujoefectivo The current object (for fluent API support)
     */
    public function setIdcompra($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcompra !== $v) {
            $this->idcompra = $v;
            $this->modifiedColumns[] = FlujoefectivoPeer::IDCOMPRA;
        }

        if ($this->aCompra !== null && $this->aCompra->getIdcompra() !== $v) {
            $this->aCompra = null;
        }


        return $this;
    } // setIdcompra()

    /**
     * Set the value of [idingreso] column.
     *
     * @param  int $v new value
     * @return Flujoefectivo The current object (for fluent API support)
     */
    public function setIdingreso($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idingreso !== $v) {
            $this->idingreso = $v;
            $this->modifiedColumns[] = FlujoefectivoPeer::IDINGRESO;
        }

        if ($this->aIngreso !== null && $this->aIngreso->getIdingreso() !== $v) {
            $this->aIngreso = null;
        }


        return $this;
    } // setIdingreso()

    /**
     * Set the value of [ingresorubro] column.
     *
     * @param  string $v new value
     * @return Flujoefectivo The current object (for fluent API support)
     */
    public function setIngresorubro($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ingresorubro !== $v) {
            $this->ingresorubro = $v;
            $this->modifiedColumns[] = FlujoefectivoPeer::INGRESORUBRO;
        }


        return $this;
    } // setIngresorubro()

    /**
     * Set the value of [flujoefectivo_pago] column.
     *
     * @param  string $v new value
     * @return Flujoefectivo The current object (for fluent API support)
     */
    public function setFlujoefectivoPago($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->flujoefectivo_pago !== $v) {
            $this->flujoefectivo_pago = $v;
            $this->modifiedColumns[] = FlujoefectivoPeer::FLUJOEFECTIVO_PAGO;
        }


        return $this;
    } // setFlujoefectivoPago()

    /**
     * Set the value of [idproveedor] column.
     *
     * @param  int $v new value
     * @return Flujoefectivo The current object (for fluent API support)
     */
    public function setIdproveedor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproveedor !== $v) {
            $this->idproveedor = $v;
            $this->modifiedColumns[] = FlujoefectivoPeer::IDPROVEEDOR;
        }

        if ($this->aProveedor !== null && $this->aProveedor->getIdproveedor() !== $v) {
            $this->aProveedor = null;
        }


        return $this;
    } // setIdproveedor()

    /**
     * Set the value of [idcuentabancaria] column.
     *
     * @param  int $v new value
     * @return Flujoefectivo The current object (for fluent API support)
     */
    public function setIdcuentabancaria($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcuentabancaria !== $v) {
            $this->idcuentabancaria = $v;
            $this->modifiedColumns[] = FlujoefectivoPeer::IDCUENTABANCARIA;
        }

        if ($this->aCuentabancaria !== null && $this->aCuentabancaria->getIdcuentabancaria() !== $v) {
            $this->aCuentabancaria = null;
        }


        return $this;
    } // setIdcuentabancaria()

    /**
     * Set the value of [flujoefectivo_cantidad] column.
     *
     * @param  string $v new value
     * @return Flujoefectivo The current object (for fluent API support)
     */
    public function setFlujoefectivoCantidad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->flujoefectivo_cantidad !== $v) {
            $this->flujoefectivo_cantidad = $v;
            $this->modifiedColumns[] = FlujoefectivoPeer::FLUJOEFECTIVO_CANTIDAD;
        }


        return $this;
    } // setFlujoefectivoCantidad()

    /**
     * Sets the value of [flujoefectivo_fecha] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Flujoefectivo The current object (for fluent API support)
     */
    public function setFlujoefectivoFecha($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->flujoefectivo_fecha !== null || $dt !== null) {
            $currentDateAsString = ($this->flujoefectivo_fecha !== null && $tmpDt = new DateTime($this->flujoefectivo_fecha)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->flujoefectivo_fecha = $newDateAsString;
                $this->modifiedColumns[] = FlujoefectivoPeer::FLUJOEFECTIVO_FECHA;
            }
        } // if either are not null


        return $this;
    } // setFlujoefectivoFecha()

    /**
     * Set the value of [flujoefectivo_referencia] column.
     *
     * @param  string $v new value
     * @return Flujoefectivo The current object (for fluent API support)
     */
    public function setFlujoefectivoReferencia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->flujoefectivo_referencia !== $v) {
            $this->flujoefectivo_referencia = $v;
            $this->modifiedColumns[] = FlujoefectivoPeer::FLUJOEFECTIVO_REFERENCIA;
        }


        return $this;
    } // setFlujoefectivoReferencia()

    /**
     * Set the value of [flujoefectivo_comprobante] column.
     *
     * @param  string $v new value
     * @return Flujoefectivo The current object (for fluent API support)
     */
    public function setFlujoefectivoComprobante($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->flujoefectivo_comprobante !== $v) {
            $this->flujoefectivo_comprobante = $v;
            $this->modifiedColumns[] = FlujoefectivoPeer::FLUJOEFECTIVO_COMPROBANTE;
        }


        return $this;
    } // setFlujoefectivoComprobante()

    /**
     * Set the value of [flujoefectivo_mediodepago] column.
     *
     * @param  string $v new value
     * @return Flujoefectivo The current object (for fluent API support)
     */
    public function setFlujoefectivoMediodepago($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->flujoefectivo_mediodepago !== $v) {
            $this->flujoefectivo_mediodepago = $v;
            $this->modifiedColumns[] = FlujoefectivoPeer::FLUJOEFECTIVO_MEDIODEPAGO;
        }


        return $this;
    } // setFlujoefectivoMediodepago()

    /**
     * Set the value of [flujoefectivo_tipo] column.
     *
     * @param  string $v new value
     * @return Flujoefectivo The current object (for fluent API support)
     */
    public function setFlujoefectivoTipo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->flujoefectivo_tipo !== $v) {
            $this->flujoefectivo_tipo = $v;
            $this->modifiedColumns[] = FlujoefectivoPeer::FLUJOEFECTIVO_TIPO;
        }


        return $this;
    } // setFlujoefectivoTipo()

    /**
     * Sets the value of the [flujoefectivo_chequecirculacion] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Flujoefectivo The current object (for fluent API support)
     */
    public function setFlujoefectivoChequecirculacion($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->flujoefectivo_chequecirculacion !== $v) {
            $this->flujoefectivo_chequecirculacion = $v;
            $this->modifiedColumns[] = FlujoefectivoPeer::FLUJOEFECTIVO_CHEQUECIRCULACION;
        }


        return $this;
    } // setFlujoefectivoChequecirculacion()

    /**
     * Sets the value of [flujoefectivo_fechacobrocheque] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Flujoefectivo The current object (for fluent API support)
     */
    public function setFlujoefectivoFechacobrocheque($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->flujoefectivo_fechacobrocheque !== null || $dt !== null) {
            $currentDateAsString = ($this->flujoefectivo_fechacobrocheque !== null && $tmpDt = new DateTime($this->flujoefectivo_fechacobrocheque)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->flujoefectivo_fechacobrocheque = $newDateAsString;
                $this->modifiedColumns[] = FlujoefectivoPeer::FLUJOEFECTIVO_FECHACOBROCHEQUE;
            }
        } // if either are not null


        return $this;
    } // setFlujoefectivoFechacobrocheque()

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

            $this->idflujoefectivo = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idempresa = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idsucursal = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->idusuario = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->flujoefectivo_origen = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->idcuentaporcobrar = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->idcompra = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->idingreso = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->ingresorubro = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->flujoefectivo_pago = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->idproveedor = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->idcuentabancaria = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->flujoefectivo_cantidad = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->flujoefectivo_fecha = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->flujoefectivo_referencia = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->flujoefectivo_comprobante = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->flujoefectivo_mediodepago = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->flujoefectivo_tipo = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->flujoefectivo_chequecirculacion = ($row[$startcol + 18] !== null) ? (boolean) $row[$startcol + 18] : null;
            $this->flujoefectivo_fechacobrocheque = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 20; // 20 = FlujoefectivoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Flujoefectivo object", $e);
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
        if ($this->aUsuario !== null && $this->idusuario !== $this->aUsuario->getIdusuario()) {
            $this->aUsuario = null;
        }
        if ($this->aCuentaporcobrar !== null && $this->idcuentaporcobrar !== $this->aCuentaporcobrar->getIdcuentaporcobrar()) {
            $this->aCuentaporcobrar = null;
        }
        if ($this->aCompra !== null && $this->idcompra !== $this->aCompra->getIdcompra()) {
            $this->aCompra = null;
        }
        if ($this->aIngreso !== null && $this->idingreso !== $this->aIngreso->getIdingreso()) {
            $this->aIngreso = null;
        }
        if ($this->aProveedor !== null && $this->idproveedor !== $this->aProveedor->getIdproveedor()) {
            $this->aProveedor = null;
        }
        if ($this->aCuentabancaria !== null && $this->idcuentabancaria !== $this->aCuentabancaria->getIdcuentabancaria()) {
            $this->aCuentabancaria = null;
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
            $con = Propel::getConnection(FlujoefectivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = FlujoefectivoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCompra = null;
            $this->aCuentabancaria = null;
            $this->aCuentaporcobrar = null;
            $this->aEmpresa = null;
            $this->aIngreso = null;
            $this->aProveedor = null;
            $this->aSucursal = null;
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
            $con = Propel::getConnection(FlujoefectivoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = FlujoefectivoQuery::create()
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
            $con = Propel::getConnection(FlujoefectivoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                FlujoefectivoPeer::addInstanceToPool($this);
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

            if ($this->aCompra !== null) {
                if ($this->aCompra->isModified() || $this->aCompra->isNew()) {
                    $affectedRows += $this->aCompra->save($con);
                }
                $this->setCompra($this->aCompra);
            }

            if ($this->aCuentabancaria !== null) {
                if ($this->aCuentabancaria->isModified() || $this->aCuentabancaria->isNew()) {
                    $affectedRows += $this->aCuentabancaria->save($con);
                }
                $this->setCuentabancaria($this->aCuentabancaria);
            }

            if ($this->aCuentaporcobrar !== null) {
                if ($this->aCuentaporcobrar->isModified() || $this->aCuentaporcobrar->isNew()) {
                    $affectedRows += $this->aCuentaporcobrar->save($con);
                }
                $this->setCuentaporcobrar($this->aCuentaporcobrar);
            }

            if ($this->aEmpresa !== null) {
                if ($this->aEmpresa->isModified() || $this->aEmpresa->isNew()) {
                    $affectedRows += $this->aEmpresa->save($con);
                }
                $this->setEmpresa($this->aEmpresa);
            }

            if ($this->aIngreso !== null) {
                if ($this->aIngreso->isModified() || $this->aIngreso->isNew()) {
                    $affectedRows += $this->aIngreso->save($con);
                }
                $this->setIngreso($this->aIngreso);
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

        $this->modifiedColumns[] = FlujoefectivoPeer::IDFLUJOEFECTIVO;
        if (null !== $this->idflujoefectivo) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . FlujoefectivoPeer::IDFLUJOEFECTIVO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(FlujoefectivoPeer::IDFLUJOEFECTIVO)) {
            $modifiedColumns[':p' . $index++]  = '`idflujoefectivo`';
        }
        if ($this->isColumnModified(FlujoefectivoPeer::IDEMPRESA)) {
            $modifiedColumns[':p' . $index++]  = '`idempresa`';
        }
        if ($this->isColumnModified(FlujoefectivoPeer::IDSUCURSAL)) {
            $modifiedColumns[':p' . $index++]  = '`idsucursal`';
        }
        if ($this->isColumnModified(FlujoefectivoPeer::IDUSUARIO)) {
            $modifiedColumns[':p' . $index++]  = '`idusuario`';
        }
        if ($this->isColumnModified(FlujoefectivoPeer::FLUJOEFECTIVO_ORIGEN)) {
            $modifiedColumns[':p' . $index++]  = '`flujoefectivo_origen`';
        }
        if ($this->isColumnModified(FlujoefectivoPeer::IDCUENTAPORCOBRAR)) {
            $modifiedColumns[':p' . $index++]  = '`idcuentaporcobrar`';
        }
        if ($this->isColumnModified(FlujoefectivoPeer::IDCOMPRA)) {
            $modifiedColumns[':p' . $index++]  = '`idcompra`';
        }
        if ($this->isColumnModified(FlujoefectivoPeer::IDINGRESO)) {
            $modifiedColumns[':p' . $index++]  = '`idingreso`';
        }
        if ($this->isColumnModified(FlujoefectivoPeer::INGRESORUBRO)) {
            $modifiedColumns[':p' . $index++]  = '`ingresorubro`';
        }
        if ($this->isColumnModified(FlujoefectivoPeer::FLUJOEFECTIVO_PAGO)) {
            $modifiedColumns[':p' . $index++]  = '`flujoefectivo_pago`';
        }
        if ($this->isColumnModified(FlujoefectivoPeer::IDPROVEEDOR)) {
            $modifiedColumns[':p' . $index++]  = '`idproveedor`';
        }
        if ($this->isColumnModified(FlujoefectivoPeer::IDCUENTABANCARIA)) {
            $modifiedColumns[':p' . $index++]  = '`idcuentabancaria`';
        }
        if ($this->isColumnModified(FlujoefectivoPeer::FLUJOEFECTIVO_CANTIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`flujoefectivo_cantidad`';
        }
        if ($this->isColumnModified(FlujoefectivoPeer::FLUJOEFECTIVO_FECHA)) {
            $modifiedColumns[':p' . $index++]  = '`flujoefectivo_fecha`';
        }
        if ($this->isColumnModified(FlujoefectivoPeer::FLUJOEFECTIVO_REFERENCIA)) {
            $modifiedColumns[':p' . $index++]  = '`flujoefectivo_referencia`';
        }
        if ($this->isColumnModified(FlujoefectivoPeer::FLUJOEFECTIVO_COMPROBANTE)) {
            $modifiedColumns[':p' . $index++]  = '`flujoefectivo_comprobante`';
        }
        if ($this->isColumnModified(FlujoefectivoPeer::FLUJOEFECTIVO_MEDIODEPAGO)) {
            $modifiedColumns[':p' . $index++]  = '`flujoefectivo_mediodepago`';
        }
        if ($this->isColumnModified(FlujoefectivoPeer::FLUJOEFECTIVO_TIPO)) {
            $modifiedColumns[':p' . $index++]  = '`flujoefectivo_tipo`';
        }
        if ($this->isColumnModified(FlujoefectivoPeer::FLUJOEFECTIVO_CHEQUECIRCULACION)) {
            $modifiedColumns[':p' . $index++]  = '`flujoefectivo_chequecirculacion`';
        }
        if ($this->isColumnModified(FlujoefectivoPeer::FLUJOEFECTIVO_FECHACOBROCHEQUE)) {
            $modifiedColumns[':p' . $index++]  = '`flujoefectivo_fechacobrocheque`';
        }

        $sql = sprintf(
            'INSERT INTO `flujoefectivo` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idflujoefectivo`':
                        $stmt->bindValue($identifier, $this->idflujoefectivo, PDO::PARAM_INT);
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
                    case '`flujoefectivo_origen`':
                        $stmt->bindValue($identifier, $this->flujoefectivo_origen, PDO::PARAM_STR);
                        break;
                    case '`idcuentaporcobrar`':
                        $stmt->bindValue($identifier, $this->idcuentaporcobrar, PDO::PARAM_INT);
                        break;
                    case '`idcompra`':
                        $stmt->bindValue($identifier, $this->idcompra, PDO::PARAM_INT);
                        break;
                    case '`idingreso`':
                        $stmt->bindValue($identifier, $this->idingreso, PDO::PARAM_INT);
                        break;
                    case '`ingresorubro`':
                        $stmt->bindValue($identifier, $this->ingresorubro, PDO::PARAM_STR);
                        break;
                    case '`flujoefectivo_pago`':
                        $stmt->bindValue($identifier, $this->flujoefectivo_pago, PDO::PARAM_STR);
                        break;
                    case '`idproveedor`':
                        $stmt->bindValue($identifier, $this->idproveedor, PDO::PARAM_INT);
                        break;
                    case '`idcuentabancaria`':
                        $stmt->bindValue($identifier, $this->idcuentabancaria, PDO::PARAM_INT);
                        break;
                    case '`flujoefectivo_cantidad`':
                        $stmt->bindValue($identifier, $this->flujoefectivo_cantidad, PDO::PARAM_STR);
                        break;
                    case '`flujoefectivo_fecha`':
                        $stmt->bindValue($identifier, $this->flujoefectivo_fecha, PDO::PARAM_STR);
                        break;
                    case '`flujoefectivo_referencia`':
                        $stmt->bindValue($identifier, $this->flujoefectivo_referencia, PDO::PARAM_STR);
                        break;
                    case '`flujoefectivo_comprobante`':
                        $stmt->bindValue($identifier, $this->flujoefectivo_comprobante, PDO::PARAM_STR);
                        break;
                    case '`flujoefectivo_mediodepago`':
                        $stmt->bindValue($identifier, $this->flujoefectivo_mediodepago, PDO::PARAM_STR);
                        break;
                    case '`flujoefectivo_tipo`':
                        $stmt->bindValue($identifier, $this->flujoefectivo_tipo, PDO::PARAM_STR);
                        break;
                    case '`flujoefectivo_chequecirculacion`':
                        $stmt->bindValue($identifier, (int) $this->flujoefectivo_chequecirculacion, PDO::PARAM_INT);
                        break;
                    case '`flujoefectivo_fechacobrocheque`':
                        $stmt->bindValue($identifier, $this->flujoefectivo_fechacobrocheque, PDO::PARAM_STR);
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
        $this->setIdflujoefectivo($pk);

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

            if ($this->aCompra !== null) {
                if (!$this->aCompra->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCompra->getValidationFailures());
                }
            }

            if ($this->aCuentabancaria !== null) {
                if (!$this->aCuentabancaria->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCuentabancaria->getValidationFailures());
                }
            }

            if ($this->aCuentaporcobrar !== null) {
                if (!$this->aCuentaporcobrar->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCuentaporcobrar->getValidationFailures());
                }
            }

            if ($this->aEmpresa !== null) {
                if (!$this->aEmpresa->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEmpresa->getValidationFailures());
                }
            }

            if ($this->aIngreso !== null) {
                if (!$this->aIngreso->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aIngreso->getValidationFailures());
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

            if ($this->aUsuario !== null) {
                if (!$this->aUsuario->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUsuario->getValidationFailures());
                }
            }


            if (($retval = FlujoefectivoPeer::doValidate($this, $columns)) !== true) {
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
        $pos = FlujoefectivoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdflujoefectivo();
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
                return $this->getFlujoefectivoOrigen();
                break;
            case 5:
                return $this->getIdcuentaporcobrar();
                break;
            case 6:
                return $this->getIdcompra();
                break;
            case 7:
                return $this->getIdingreso();
                break;
            case 8:
                return $this->getIngresorubro();
                break;
            case 9:
                return $this->getFlujoefectivoPago();
                break;
            case 10:
                return $this->getIdproveedor();
                break;
            case 11:
                return $this->getIdcuentabancaria();
                break;
            case 12:
                return $this->getFlujoefectivoCantidad();
                break;
            case 13:
                return $this->getFlujoefectivoFecha();
                break;
            case 14:
                return $this->getFlujoefectivoReferencia();
                break;
            case 15:
                return $this->getFlujoefectivoComprobante();
                break;
            case 16:
                return $this->getFlujoefectivoMediodepago();
                break;
            case 17:
                return $this->getFlujoefectivoTipo();
                break;
            case 18:
                return $this->getFlujoefectivoChequecirculacion();
                break;
            case 19:
                return $this->getFlujoefectivoFechacobrocheque();
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
        if (isset($alreadyDumpedObjects['Flujoefectivo'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Flujoefectivo'][$this->getPrimaryKey()] = true;
        $keys = FlujoefectivoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdflujoefectivo(),
            $keys[1] => $this->getIdempresa(),
            $keys[2] => $this->getIdsucursal(),
            $keys[3] => $this->getIdusuario(),
            $keys[4] => $this->getFlujoefectivoOrigen(),
            $keys[5] => $this->getIdcuentaporcobrar(),
            $keys[6] => $this->getIdcompra(),
            $keys[7] => $this->getIdingreso(),
            $keys[8] => $this->getIngresorubro(),
            $keys[9] => $this->getFlujoefectivoPago(),
            $keys[10] => $this->getIdproveedor(),
            $keys[11] => $this->getIdcuentabancaria(),
            $keys[12] => $this->getFlujoefectivoCantidad(),
            $keys[13] => $this->getFlujoefectivoFecha(),
            $keys[14] => $this->getFlujoefectivoReferencia(),
            $keys[15] => $this->getFlujoefectivoComprobante(),
            $keys[16] => $this->getFlujoefectivoMediodepago(),
            $keys[17] => $this->getFlujoefectivoTipo(),
            $keys[18] => $this->getFlujoefectivoChequecirculacion(),
            $keys[19] => $this->getFlujoefectivoFechacobrocheque(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aCompra) {
                $result['Compra'] = $this->aCompra->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCuentabancaria) {
                $result['Cuentabancaria'] = $this->aCuentabancaria->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCuentaporcobrar) {
                $result['Cuentaporcobrar'] = $this->aCuentaporcobrar->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aEmpresa) {
                $result['Empresa'] = $this->aEmpresa->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aIngreso) {
                $result['Ingreso'] = $this->aIngreso->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aProveedor) {
                $result['Proveedor'] = $this->aProveedor->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSucursal) {
                $result['Sucursal'] = $this->aSucursal->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = FlujoefectivoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdflujoefectivo($value);
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
                $this->setFlujoefectivoOrigen($value);
                break;
            case 5:
                $this->setIdcuentaporcobrar($value);
                break;
            case 6:
                $this->setIdcompra($value);
                break;
            case 7:
                $this->setIdingreso($value);
                break;
            case 8:
                $this->setIngresorubro($value);
                break;
            case 9:
                $this->setFlujoefectivoPago($value);
                break;
            case 10:
                $this->setIdproveedor($value);
                break;
            case 11:
                $this->setIdcuentabancaria($value);
                break;
            case 12:
                $this->setFlujoefectivoCantidad($value);
                break;
            case 13:
                $this->setFlujoefectivoFecha($value);
                break;
            case 14:
                $this->setFlujoefectivoReferencia($value);
                break;
            case 15:
                $this->setFlujoefectivoComprobante($value);
                break;
            case 16:
                $this->setFlujoefectivoMediodepago($value);
                break;
            case 17:
                $this->setFlujoefectivoTipo($value);
                break;
            case 18:
                $this->setFlujoefectivoChequecirculacion($value);
                break;
            case 19:
                $this->setFlujoefectivoFechacobrocheque($value);
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
        $keys = FlujoefectivoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdflujoefectivo($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdempresa($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdsucursal($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdusuario($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setFlujoefectivoOrigen($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdcuentaporcobrar($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdcompra($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdingreso($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setIngresorubro($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setFlujoefectivoPago($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setIdproveedor($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setIdcuentabancaria($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setFlujoefectivoCantidad($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setFlujoefectivoFecha($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setFlujoefectivoReferencia($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setFlujoefectivoComprobante($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setFlujoefectivoMediodepago($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setFlujoefectivoTipo($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setFlujoefectivoChequecirculacion($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setFlujoefectivoFechacobrocheque($arr[$keys[19]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(FlujoefectivoPeer::DATABASE_NAME);

        if ($this->isColumnModified(FlujoefectivoPeer::IDFLUJOEFECTIVO)) $criteria->add(FlujoefectivoPeer::IDFLUJOEFECTIVO, $this->idflujoefectivo);
        if ($this->isColumnModified(FlujoefectivoPeer::IDEMPRESA)) $criteria->add(FlujoefectivoPeer::IDEMPRESA, $this->idempresa);
        if ($this->isColumnModified(FlujoefectivoPeer::IDSUCURSAL)) $criteria->add(FlujoefectivoPeer::IDSUCURSAL, $this->idsucursal);
        if ($this->isColumnModified(FlujoefectivoPeer::IDUSUARIO)) $criteria->add(FlujoefectivoPeer::IDUSUARIO, $this->idusuario);
        if ($this->isColumnModified(FlujoefectivoPeer::FLUJOEFECTIVO_ORIGEN)) $criteria->add(FlujoefectivoPeer::FLUJOEFECTIVO_ORIGEN, $this->flujoefectivo_origen);
        if ($this->isColumnModified(FlujoefectivoPeer::IDCUENTAPORCOBRAR)) $criteria->add(FlujoefectivoPeer::IDCUENTAPORCOBRAR, $this->idcuentaporcobrar);
        if ($this->isColumnModified(FlujoefectivoPeer::IDCOMPRA)) $criteria->add(FlujoefectivoPeer::IDCOMPRA, $this->idcompra);
        if ($this->isColumnModified(FlujoefectivoPeer::IDINGRESO)) $criteria->add(FlujoefectivoPeer::IDINGRESO, $this->idingreso);
        if ($this->isColumnModified(FlujoefectivoPeer::INGRESORUBRO)) $criteria->add(FlujoefectivoPeer::INGRESORUBRO, $this->ingresorubro);
        if ($this->isColumnModified(FlujoefectivoPeer::FLUJOEFECTIVO_PAGO)) $criteria->add(FlujoefectivoPeer::FLUJOEFECTIVO_PAGO, $this->flujoefectivo_pago);
        if ($this->isColumnModified(FlujoefectivoPeer::IDPROVEEDOR)) $criteria->add(FlujoefectivoPeer::IDPROVEEDOR, $this->idproveedor);
        if ($this->isColumnModified(FlujoefectivoPeer::IDCUENTABANCARIA)) $criteria->add(FlujoefectivoPeer::IDCUENTABANCARIA, $this->idcuentabancaria);
        if ($this->isColumnModified(FlujoefectivoPeer::FLUJOEFECTIVO_CANTIDAD)) $criteria->add(FlujoefectivoPeer::FLUJOEFECTIVO_CANTIDAD, $this->flujoefectivo_cantidad);
        if ($this->isColumnModified(FlujoefectivoPeer::FLUJOEFECTIVO_FECHA)) $criteria->add(FlujoefectivoPeer::FLUJOEFECTIVO_FECHA, $this->flujoefectivo_fecha);
        if ($this->isColumnModified(FlujoefectivoPeer::FLUJOEFECTIVO_REFERENCIA)) $criteria->add(FlujoefectivoPeer::FLUJOEFECTIVO_REFERENCIA, $this->flujoefectivo_referencia);
        if ($this->isColumnModified(FlujoefectivoPeer::FLUJOEFECTIVO_COMPROBANTE)) $criteria->add(FlujoefectivoPeer::FLUJOEFECTIVO_COMPROBANTE, $this->flujoefectivo_comprobante);
        if ($this->isColumnModified(FlujoefectivoPeer::FLUJOEFECTIVO_MEDIODEPAGO)) $criteria->add(FlujoefectivoPeer::FLUJOEFECTIVO_MEDIODEPAGO, $this->flujoefectivo_mediodepago);
        if ($this->isColumnModified(FlujoefectivoPeer::FLUJOEFECTIVO_TIPO)) $criteria->add(FlujoefectivoPeer::FLUJOEFECTIVO_TIPO, $this->flujoefectivo_tipo);
        if ($this->isColumnModified(FlujoefectivoPeer::FLUJOEFECTIVO_CHEQUECIRCULACION)) $criteria->add(FlujoefectivoPeer::FLUJOEFECTIVO_CHEQUECIRCULACION, $this->flujoefectivo_chequecirculacion);
        if ($this->isColumnModified(FlujoefectivoPeer::FLUJOEFECTIVO_FECHACOBROCHEQUE)) $criteria->add(FlujoefectivoPeer::FLUJOEFECTIVO_FECHACOBROCHEQUE, $this->flujoefectivo_fechacobrocheque);

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
        $criteria = new Criteria(FlujoefectivoPeer::DATABASE_NAME);
        $criteria->add(FlujoefectivoPeer::IDFLUJOEFECTIVO, $this->idflujoefectivo);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdflujoefectivo();
    }

    /**
     * Generic method to set the primary key (idflujoefectivo column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdflujoefectivo($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdflujoefectivo();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Flujoefectivo (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdempresa($this->getIdempresa());
        $copyObj->setIdsucursal($this->getIdsucursal());
        $copyObj->setIdusuario($this->getIdusuario());
        $copyObj->setFlujoefectivoOrigen($this->getFlujoefectivoOrigen());
        $copyObj->setIdcuentaporcobrar($this->getIdcuentaporcobrar());
        $copyObj->setIdcompra($this->getIdcompra());
        $copyObj->setIdingreso($this->getIdingreso());
        $copyObj->setIngresorubro($this->getIngresorubro());
        $copyObj->setFlujoefectivoPago($this->getFlujoefectivoPago());
        $copyObj->setIdproveedor($this->getIdproveedor());
        $copyObj->setIdcuentabancaria($this->getIdcuentabancaria());
        $copyObj->setFlujoefectivoCantidad($this->getFlujoefectivoCantidad());
        $copyObj->setFlujoefectivoFecha($this->getFlujoefectivoFecha());
        $copyObj->setFlujoefectivoReferencia($this->getFlujoefectivoReferencia());
        $copyObj->setFlujoefectivoComprobante($this->getFlujoefectivoComprobante());
        $copyObj->setFlujoefectivoMediodepago($this->getFlujoefectivoMediodepago());
        $copyObj->setFlujoefectivoTipo($this->getFlujoefectivoTipo());
        $copyObj->setFlujoefectivoChequecirculacion($this->getFlujoefectivoChequecirculacion());
        $copyObj->setFlujoefectivoFechacobrocheque($this->getFlujoefectivoFechacobrocheque());

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
            $copyObj->setIdflujoefectivo(NULL); // this is a auto-increment column, so set to default value
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
     * @return Flujoefectivo Clone of current object.
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
     * @return FlujoefectivoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new FlujoefectivoPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Compra object.
     *
     * @param                  Compra $v
     * @return Flujoefectivo The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCompra(Compra $v = null)
    {
        if ($v === null) {
            $this->setIdcompra(NULL);
        } else {
            $this->setIdcompra($v->getIdcompra());
        }

        $this->aCompra = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Compra object, it will not be re-added.
        if ($v !== null) {
            $v->addFlujoefectivo($this);
        }


        return $this;
    }


    /**
     * Get the associated Compra object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Compra The associated Compra object.
     * @throws PropelException
     */
    public function getCompra(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCompra === null && ($this->idcompra !== null) && $doQuery) {
            $this->aCompra = CompraQuery::create()->findPk($this->idcompra, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCompra->addFlujoefectivos($this);
             */
        }

        return $this->aCompra;
    }

    /**
     * Declares an association between this object and a Cuentabancaria object.
     *
     * @param                  Cuentabancaria $v
     * @return Flujoefectivo The current object (for fluent API support)
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
            $v->addFlujoefectivo($this);
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
                $this->aCuentabancaria->addFlujoefectivos($this);
             */
        }

        return $this->aCuentabancaria;
    }

    /**
     * Declares an association between this object and a Cuentaporcobrar object.
     *
     * @param                  Cuentaporcobrar $v
     * @return Flujoefectivo The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCuentaporcobrar(Cuentaporcobrar $v = null)
    {
        if ($v === null) {
            $this->setIdcuentaporcobrar(NULL);
        } else {
            $this->setIdcuentaporcobrar($v->getIdcuentaporcobrar());
        }

        $this->aCuentaporcobrar = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Cuentaporcobrar object, it will not be re-added.
        if ($v !== null) {
            $v->addFlujoefectivo($this);
        }


        return $this;
    }


    /**
     * Get the associated Cuentaporcobrar object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Cuentaporcobrar The associated Cuentaporcobrar object.
     * @throws PropelException
     */
    public function getCuentaporcobrar(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCuentaporcobrar === null && ($this->idcuentaporcobrar !== null) && $doQuery) {
            $this->aCuentaporcobrar = CuentaporcobrarQuery::create()->findPk($this->idcuentaporcobrar, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCuentaporcobrar->addFlujoefectivos($this);
             */
        }

        return $this->aCuentaporcobrar;
    }

    /**
     * Declares an association between this object and a Empresa object.
     *
     * @param                  Empresa $v
     * @return Flujoefectivo The current object (for fluent API support)
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
            $v->addFlujoefectivo($this);
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
                $this->aEmpresa->addFlujoefectivos($this);
             */
        }

        return $this->aEmpresa;
    }

    /**
     * Declares an association between this object and a Ingreso object.
     *
     * @param                  Ingreso $v
     * @return Flujoefectivo The current object (for fluent API support)
     * @throws PropelException
     */
    public function setIngreso(Ingreso $v = null)
    {
        if ($v === null) {
            $this->setIdingreso(NULL);
        } else {
            $this->setIdingreso($v->getIdingreso());
        }

        $this->aIngreso = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Ingreso object, it will not be re-added.
        if ($v !== null) {
            $v->addFlujoefectivo($this);
        }


        return $this;
    }


    /**
     * Get the associated Ingreso object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Ingreso The associated Ingreso object.
     * @throws PropelException
     */
    public function getIngreso(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aIngreso === null && ($this->idingreso !== null) && $doQuery) {
            $this->aIngreso = IngresoQuery::create()->findPk($this->idingreso, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aIngreso->addFlujoefectivos($this);
             */
        }

        return $this->aIngreso;
    }

    /**
     * Declares an association between this object and a Proveedor object.
     *
     * @param                  Proveedor $v
     * @return Flujoefectivo The current object (for fluent API support)
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
            $v->addFlujoefectivo($this);
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
                $this->aProveedor->addFlujoefectivos($this);
             */
        }

        return $this->aProveedor;
    }

    /**
     * Declares an association between this object and a Sucursal object.
     *
     * @param                  Sucursal $v
     * @return Flujoefectivo The current object (for fluent API support)
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
            $v->addFlujoefectivo($this);
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
                $this->aSucursal->addFlujoefectivos($this);
             */
        }

        return $this->aSucursal;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param                  Usuario $v
     * @return Flujoefectivo The current object (for fluent API support)
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
            $v->addFlujoefectivo($this);
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
                $this->aUsuario->addFlujoefectivos($this);
             */
        }

        return $this->aUsuario;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idflujoefectivo = null;
        $this->idempresa = null;
        $this->idsucursal = null;
        $this->idusuario = null;
        $this->flujoefectivo_origen = null;
        $this->idcuentaporcobrar = null;
        $this->idcompra = null;
        $this->idingreso = null;
        $this->ingresorubro = null;
        $this->flujoefectivo_pago = null;
        $this->idproveedor = null;
        $this->idcuentabancaria = null;
        $this->flujoefectivo_cantidad = null;
        $this->flujoefectivo_fecha = null;
        $this->flujoefectivo_referencia = null;
        $this->flujoefectivo_comprobante = null;
        $this->flujoefectivo_mediodepago = null;
        $this->flujoefectivo_tipo = null;
        $this->flujoefectivo_chequecirculacion = null;
        $this->flujoefectivo_fechacobrocheque = null;
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
            if ($this->aCompra instanceof Persistent) {
              $this->aCompra->clearAllReferences($deep);
            }
            if ($this->aCuentabancaria instanceof Persistent) {
              $this->aCuentabancaria->clearAllReferences($deep);
            }
            if ($this->aCuentaporcobrar instanceof Persistent) {
              $this->aCuentaporcobrar->clearAllReferences($deep);
            }
            if ($this->aEmpresa instanceof Persistent) {
              $this->aEmpresa->clearAllReferences($deep);
            }
            if ($this->aIngreso instanceof Persistent) {
              $this->aIngreso->clearAllReferences($deep);
            }
            if ($this->aProveedor instanceof Persistent) {
              $this->aProveedor->clearAllReferences($deep);
            }
            if ($this->aSucursal instanceof Persistent) {
              $this->aSucursal->clearAllReferences($deep);
            }
            if ($this->aUsuario instanceof Persistent) {
              $this->aUsuario->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCompra = null;
        $this->aCuentabancaria = null;
        $this->aCuentaporcobrar = null;
        $this->aEmpresa = null;
        $this->aIngreso = null;
        $this->aProveedor = null;
        $this->aSucursal = null;
        $this->aUsuario = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(FlujoefectivoPeer::DEFAULT_STRING_FORMAT);
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
