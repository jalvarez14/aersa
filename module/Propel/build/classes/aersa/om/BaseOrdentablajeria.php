<?php


/**
 * Base class that represents a row from the 'ordentablajeria' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseOrdentablajeria extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'OrdentablajeriaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        OrdentablajeriaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idordentablajeria field.
     * @var        int
     */
    protected $idordentablajeria;

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
     * The value for the idalmacenorigen field.
     * @var        int
     */
    protected $idalmacenorigen;

    /**
     * The value for the idalmacendestino field.
     * @var        int
     */
    protected $idalmacendestino;

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
     * The value for the idproducto field.
     * @var        int
     */
    protected $idproducto;

    /**
     * The value for the ordentablajeria_pesobruto field.
     * @var        double
     */
    protected $ordentablajeria_pesobruto;

    /**
     * The value for the ordentablajeria_preciokilo field.
     * @var        string
     */
    protected $ordentablajeria_preciokilo;

    /**
     * The value for the ordentablajeria_pesoneto field.
     * @var        double
     */
    protected $ordentablajeria_pesoneto;

    /**
     * The value for the ordentablajeria_precioneto field.
     * @var        string
     */
    protected $ordentablajeria_precioneto;

    /**
     * The value for the ordentablajeria_inyeccion field.
     * @var        double
     */
    protected $ordentablajeria_inyeccion;

    /**
     * The value for the ordentablajeria_merma field.
     * @var        double
     */
    protected $ordentablajeria_merma;

    /**
     * The value for the ordentablajeria_aprovechamiento field.
     * @var        double
     */
    protected $ordentablajeria_aprovechamiento;

    /**
     * The value for the ordentablajeria_revisada field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $ordentablajeria_revisada;

    /**
     * The value for the ordentablajeria_folio field.
     * @var        string
     */
    protected $ordentablajeria_folio;

    /**
     * @var        Almacen
     */
    protected $aAlmacenRelatedByIdalmacendestino;

    /**
     * @var        Almacen
     */
    protected $aAlmacenRelatedByIdalmacenorigen;

    /**
     * @var        Usuario
     */
    protected $aUsuarioRelatedByIdauditor;

    /**
     * @var        Empresa
     */
    protected $aEmpresa;

    /**
     * @var        Producto
     */
    protected $aProducto;

    /**
     * @var        Sucursal
     */
    protected $aSucursal;

    /**
     * @var        Usuario
     */
    protected $aUsuarioRelatedByIdusuario;

    /**
     * @var        PropelObjectCollection|Ordentablajeriadetalle[] Collection to store aggregation of Ordentablajeriadetalle objects.
     */
    protected $collOrdentablajeriadetalles;
    protected $collOrdentablajeriadetallesPartial;

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
    protected $ordentablajeriadetallesScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->ordentablajeria_revisada = false;
    }

    /**
     * Initializes internal state of BaseOrdentablajeria object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [idordentablajeria] column value.
     *
     * @return int
     */
    public function getIdordentablajeria()
    {

        return $this->idordentablajeria;
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
     * Get the [idalmacenorigen] column value.
     *
     * @return int
     */
    public function getIdalmacenorigen()
    {

        return $this->idalmacenorigen;
    }

    /**
     * Get the [idalmacendestino] column value.
     *
     * @return int
     */
    public function getIdalmacendestino()
    {

        return $this->idalmacendestino;
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
     * Get the [idproducto] column value.
     *
     * @return int
     */
    public function getIdproducto()
    {

        return $this->idproducto;
    }

    /**
     * Get the [ordentablajeria_pesobruto] column value.
     *
     * @return double
     */
    public function getOrdentablajeriaPesobruto()
    {

        return $this->ordentablajeria_pesobruto;
    }

    /**
     * Get the [ordentablajeria_preciokilo] column value.
     *
     * @return string
     */
    public function getOrdentablajeriaPreciokilo()
    {

        return $this->ordentablajeria_preciokilo;
    }

    /**
     * Get the [ordentablajeria_pesoneto] column value.
     *
     * @return double
     */
    public function getOrdentablajeriaPesoneto()
    {

        return $this->ordentablajeria_pesoneto;
    }

    /**
     * Get the [ordentablajeria_precioneto] column value.
     *
     * @return string
     */
    public function getOrdentablajeriaPrecioneto()
    {

        return $this->ordentablajeria_precioneto;
    }

    /**
     * Get the [ordentablajeria_inyeccion] column value.
     *
     * @return double
     */
    public function getOrdentablajeriaInyeccion()
    {

        return $this->ordentablajeria_inyeccion;
    }

    /**
     * Get the [ordentablajeria_merma] column value.
     *
     * @return double
     */
    public function getOrdentablajeriaMerma()
    {

        return $this->ordentablajeria_merma;
    }

    /**
     * Get the [ordentablajeria_aprovechamiento] column value.
     *
     * @return double
     */
    public function getOrdentablajeriaAprovechamiento()
    {

        return $this->ordentablajeria_aprovechamiento;
    }

    /**
     * Get the [ordentablajeria_revisada] column value.
     *
     * @return boolean
     */
    public function getOrdentablajeriaRevisada()
    {

        return $this->ordentablajeria_revisada;
    }

    /**
     * Get the [ordentablajeria_folio] column value.
     *
     * @return string
     */
    public function getOrdentablajeriaFolio()
    {

        return $this->ordentablajeria_folio;
    }

    /**
     * Set the value of [idordentablajeria] column.
     *
     * @param  int $v new value
     * @return Ordentablajeria The current object (for fluent API support)
     */
    public function setIdordentablajeria($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idordentablajeria !== $v) {
            $this->idordentablajeria = $v;
            $this->modifiedColumns[] = OrdentablajeriaPeer::IDORDENTABLAJERIA;
        }


        return $this;
    } // setIdordentablajeria()

    /**
     * Set the value of [idempresa] column.
     *
     * @param  int $v new value
     * @return Ordentablajeria The current object (for fluent API support)
     */
    public function setIdempresa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempresa !== $v) {
            $this->idempresa = $v;
            $this->modifiedColumns[] = OrdentablajeriaPeer::IDEMPRESA;
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
     * @return Ordentablajeria The current object (for fluent API support)
     */
    public function setIdsucursal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idsucursal !== $v) {
            $this->idsucursal = $v;
            $this->modifiedColumns[] = OrdentablajeriaPeer::IDSUCURSAL;
        }

        if ($this->aSucursal !== null && $this->aSucursal->getIdsucursal() !== $v) {
            $this->aSucursal = null;
        }


        return $this;
    } // setIdsucursal()

    /**
     * Set the value of [idalmacenorigen] column.
     *
     * @param  int $v new value
     * @return Ordentablajeria The current object (for fluent API support)
     */
    public function setIdalmacenorigen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idalmacenorigen !== $v) {
            $this->idalmacenorigen = $v;
            $this->modifiedColumns[] = OrdentablajeriaPeer::IDALMACENORIGEN;
        }

        if ($this->aAlmacenRelatedByIdalmacenorigen !== null && $this->aAlmacenRelatedByIdalmacenorigen->getIdalmacen() !== $v) {
            $this->aAlmacenRelatedByIdalmacenorigen = null;
        }


        return $this;
    } // setIdalmacenorigen()

    /**
     * Set the value of [idalmacendestino] column.
     *
     * @param  int $v new value
     * @return Ordentablajeria The current object (for fluent API support)
     */
    public function setIdalmacendestino($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idalmacendestino !== $v) {
            $this->idalmacendestino = $v;
            $this->modifiedColumns[] = OrdentablajeriaPeer::IDALMACENDESTINO;
        }

        if ($this->aAlmacenRelatedByIdalmacendestino !== null && $this->aAlmacenRelatedByIdalmacendestino->getIdalmacen() !== $v) {
            $this->aAlmacenRelatedByIdalmacendestino = null;
        }


        return $this;
    } // setIdalmacendestino()

    /**
     * Set the value of [idusuario] column.
     *
     * @param  int $v new value
     * @return Ordentablajeria The current object (for fluent API support)
     */
    public function setIdusuario($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idusuario !== $v) {
            $this->idusuario = $v;
            $this->modifiedColumns[] = OrdentablajeriaPeer::IDUSUARIO;
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
     * @return Ordentablajeria The current object (for fluent API support)
     */
    public function setIdauditor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idauditor !== $v) {
            $this->idauditor = $v;
            $this->modifiedColumns[] = OrdentablajeriaPeer::IDAUDITOR;
        }

        if ($this->aUsuarioRelatedByIdauditor !== null && $this->aUsuarioRelatedByIdauditor->getIdusuario() !== $v) {
            $this->aUsuarioRelatedByIdauditor = null;
        }


        return $this;
    } // setIdauditor()

    /**
     * Set the value of [idproducto] column.
     *
     * @param  int $v new value
     * @return Ordentablajeria The current object (for fluent API support)
     */
    public function setIdproducto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproducto !== $v) {
            $this->idproducto = $v;
            $this->modifiedColumns[] = OrdentablajeriaPeer::IDPRODUCTO;
        }

        if ($this->aProducto !== null && $this->aProducto->getIdproducto() !== $v) {
            $this->aProducto = null;
        }


        return $this;
    } // setIdproducto()

    /**
     * Set the value of [ordentablajeria_pesobruto] column.
     *
     * @param  double $v new value
     * @return Ordentablajeria The current object (for fluent API support)
     */
    public function setOrdentablajeriaPesobruto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ordentablajeria_pesobruto !== $v) {
            $this->ordentablajeria_pesobruto = $v;
            $this->modifiedColumns[] = OrdentablajeriaPeer::ORDENTABLAJERIA_PESOBRUTO;
        }


        return $this;
    } // setOrdentablajeriaPesobruto()

    /**
     * Set the value of [ordentablajeria_preciokilo] column.
     *
     * @param  string $v new value
     * @return Ordentablajeria The current object (for fluent API support)
     */
    public function setOrdentablajeriaPreciokilo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ordentablajeria_preciokilo !== $v) {
            $this->ordentablajeria_preciokilo = $v;
            $this->modifiedColumns[] = OrdentablajeriaPeer::ORDENTABLAJERIA_PRECIOKILO;
        }


        return $this;
    } // setOrdentablajeriaPreciokilo()

    /**
     * Set the value of [ordentablajeria_pesoneto] column.
     *
     * @param  double $v new value
     * @return Ordentablajeria The current object (for fluent API support)
     */
    public function setOrdentablajeriaPesoneto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ordentablajeria_pesoneto !== $v) {
            $this->ordentablajeria_pesoneto = $v;
            $this->modifiedColumns[] = OrdentablajeriaPeer::ORDENTABLAJERIA_PESONETO;
        }


        return $this;
    } // setOrdentablajeriaPesoneto()

    /**
     * Set the value of [ordentablajeria_precioneto] column.
     *
     * @param  string $v new value
     * @return Ordentablajeria The current object (for fluent API support)
     */
    public function setOrdentablajeriaPrecioneto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ordentablajeria_precioneto !== $v) {
            $this->ordentablajeria_precioneto = $v;
            $this->modifiedColumns[] = OrdentablajeriaPeer::ORDENTABLAJERIA_PRECIONETO;
        }


        return $this;
    } // setOrdentablajeriaPrecioneto()

    /**
     * Set the value of [ordentablajeria_inyeccion] column.
     *
     * @param  double $v new value
     * @return Ordentablajeria The current object (for fluent API support)
     */
    public function setOrdentablajeriaInyeccion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ordentablajeria_inyeccion !== $v) {
            $this->ordentablajeria_inyeccion = $v;
            $this->modifiedColumns[] = OrdentablajeriaPeer::ORDENTABLAJERIA_INYECCION;
        }


        return $this;
    } // setOrdentablajeriaInyeccion()

    /**
     * Set the value of [ordentablajeria_merma] column.
     *
     * @param  double $v new value
     * @return Ordentablajeria The current object (for fluent API support)
     */
    public function setOrdentablajeriaMerma($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ordentablajeria_merma !== $v) {
            $this->ordentablajeria_merma = $v;
            $this->modifiedColumns[] = OrdentablajeriaPeer::ORDENTABLAJERIA_MERMA;
        }


        return $this;
    } // setOrdentablajeriaMerma()

    /**
     * Set the value of [ordentablajeria_aprovechamiento] column.
     *
     * @param  double $v new value
     * @return Ordentablajeria The current object (for fluent API support)
     */
    public function setOrdentablajeriaAprovechamiento($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ordentablajeria_aprovechamiento !== $v) {
            $this->ordentablajeria_aprovechamiento = $v;
            $this->modifiedColumns[] = OrdentablajeriaPeer::ORDENTABLAJERIA_APROVECHAMIENTO;
        }


        return $this;
    } // setOrdentablajeriaAprovechamiento()

    /**
     * Sets the value of the [ordentablajeria_revisada] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Ordentablajeria The current object (for fluent API support)
     */
    public function setOrdentablajeriaRevisada($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->ordentablajeria_revisada !== $v) {
            $this->ordentablajeria_revisada = $v;
            $this->modifiedColumns[] = OrdentablajeriaPeer::ORDENTABLAJERIA_REVISADA;
        }


        return $this;
    } // setOrdentablajeriaRevisada()

    /**
     * Set the value of [ordentablajeria_folio] column.
     *
     * @param  string $v new value
     * @return Ordentablajeria The current object (for fluent API support)
     */
    public function setOrdentablajeriaFolio($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ordentablajeria_folio !== $v) {
            $this->ordentablajeria_folio = $v;
            $this->modifiedColumns[] = OrdentablajeriaPeer::ORDENTABLAJERIA_FOLIO;
        }


        return $this;
    } // setOrdentablajeriaFolio()

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
            if ($this->ordentablajeria_revisada !== false) {
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

            $this->idordentablajeria = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idempresa = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idsucursal = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->idalmacenorigen = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->idalmacendestino = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->idusuario = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->idauditor = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->idproducto = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->ordentablajeria_pesobruto = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
            $this->ordentablajeria_preciokilo = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->ordentablajeria_pesoneto = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->ordentablajeria_precioneto = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->ordentablajeria_inyeccion = ($row[$startcol + 12] !== null) ? (double) $row[$startcol + 12] : null;
            $this->ordentablajeria_merma = ($row[$startcol + 13] !== null) ? (double) $row[$startcol + 13] : null;
            $this->ordentablajeria_aprovechamiento = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
            $this->ordentablajeria_revisada = ($row[$startcol + 15] !== null) ? (boolean) $row[$startcol + 15] : null;
            $this->ordentablajeria_folio = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 17; // 17 = OrdentablajeriaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Ordentablajeria object", $e);
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
        if ($this->aAlmacenRelatedByIdalmacenorigen !== null && $this->idalmacenorigen !== $this->aAlmacenRelatedByIdalmacenorigen->getIdalmacen()) {
            $this->aAlmacenRelatedByIdalmacenorigen = null;
        }
        if ($this->aAlmacenRelatedByIdalmacendestino !== null && $this->idalmacendestino !== $this->aAlmacenRelatedByIdalmacendestino->getIdalmacen()) {
            $this->aAlmacenRelatedByIdalmacendestino = null;
        }
        if ($this->aUsuarioRelatedByIdusuario !== null && $this->idusuario !== $this->aUsuarioRelatedByIdusuario->getIdusuario()) {
            $this->aUsuarioRelatedByIdusuario = null;
        }
        if ($this->aUsuarioRelatedByIdauditor !== null && $this->idauditor !== $this->aUsuarioRelatedByIdauditor->getIdusuario()) {
            $this->aUsuarioRelatedByIdauditor = null;
        }
        if ($this->aProducto !== null && $this->idproducto !== $this->aProducto->getIdproducto()) {
            $this->aProducto = null;
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
            $con = Propel::getConnection(OrdentablajeriaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = OrdentablajeriaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aAlmacenRelatedByIdalmacendestino = null;
            $this->aAlmacenRelatedByIdalmacenorigen = null;
            $this->aUsuarioRelatedByIdauditor = null;
            $this->aEmpresa = null;
            $this->aProducto = null;
            $this->aSucursal = null;
            $this->aUsuarioRelatedByIdusuario = null;
            $this->collOrdentablajeriadetalles = null;

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
            $con = Propel::getConnection(OrdentablajeriaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = OrdentablajeriaQuery::create()
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
            $con = Propel::getConnection(OrdentablajeriaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                OrdentablajeriaPeer::addInstanceToPool($this);
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

            if ($this->aAlmacenRelatedByIdalmacendestino !== null) {
                if ($this->aAlmacenRelatedByIdalmacendestino->isModified() || $this->aAlmacenRelatedByIdalmacendestino->isNew()) {
                    $affectedRows += $this->aAlmacenRelatedByIdalmacendestino->save($con);
                }
                $this->setAlmacenRelatedByIdalmacendestino($this->aAlmacenRelatedByIdalmacendestino);
            }

            if ($this->aAlmacenRelatedByIdalmacenorigen !== null) {
                if ($this->aAlmacenRelatedByIdalmacenorigen->isModified() || $this->aAlmacenRelatedByIdalmacenorigen->isNew()) {
                    $affectedRows += $this->aAlmacenRelatedByIdalmacenorigen->save($con);
                }
                $this->setAlmacenRelatedByIdalmacenorigen($this->aAlmacenRelatedByIdalmacenorigen);
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

            if ($this->aProducto !== null) {
                if ($this->aProducto->isModified() || $this->aProducto->isNew()) {
                    $affectedRows += $this->aProducto->save($con);
                }
                $this->setProducto($this->aProducto);
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

            if ($this->ordentablajeriadetallesScheduledForDeletion !== null) {
                if (!$this->ordentablajeriadetallesScheduledForDeletion->isEmpty()) {
                    OrdentablajeriadetalleQuery::create()
                        ->filterByPrimaryKeys($this->ordentablajeriadetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->ordentablajeriadetallesScheduledForDeletion = null;
                }
            }

            if ($this->collOrdentablajeriadetalles !== null) {
                foreach ($this->collOrdentablajeriadetalles as $referrerFK) {
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

        $this->modifiedColumns[] = OrdentablajeriaPeer::IDORDENTABLAJERIA;
        if (null !== $this->idordentablajeria) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . OrdentablajeriaPeer::IDORDENTABLAJERIA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(OrdentablajeriaPeer::IDORDENTABLAJERIA)) {
            $modifiedColumns[':p' . $index++]  = '`idordentablajeria`';
        }
        if ($this->isColumnModified(OrdentablajeriaPeer::IDEMPRESA)) {
            $modifiedColumns[':p' . $index++]  = '`idempresa`';
        }
        if ($this->isColumnModified(OrdentablajeriaPeer::IDSUCURSAL)) {
            $modifiedColumns[':p' . $index++]  = '`idsucursal`';
        }
        if ($this->isColumnModified(OrdentablajeriaPeer::IDALMACENORIGEN)) {
            $modifiedColumns[':p' . $index++]  = '`idalmacenorigen`';
        }
        if ($this->isColumnModified(OrdentablajeriaPeer::IDALMACENDESTINO)) {
            $modifiedColumns[':p' . $index++]  = '`idalmacendestino`';
        }
        if ($this->isColumnModified(OrdentablajeriaPeer::IDUSUARIO)) {
            $modifiedColumns[':p' . $index++]  = '`idusuario`';
        }
        if ($this->isColumnModified(OrdentablajeriaPeer::IDAUDITOR)) {
            $modifiedColumns[':p' . $index++]  = '`idauditor`';
        }
        if ($this->isColumnModified(OrdentablajeriaPeer::IDPRODUCTO)) {
            $modifiedColumns[':p' . $index++]  = '`idproducto`';
        }
        if ($this->isColumnModified(OrdentablajeriaPeer::ORDENTABLAJERIA_PESOBRUTO)) {
            $modifiedColumns[':p' . $index++]  = '`ordentablajeria_pesobruto`';
        }
        if ($this->isColumnModified(OrdentablajeriaPeer::ORDENTABLAJERIA_PRECIOKILO)) {
            $modifiedColumns[':p' . $index++]  = '`ordentablajeria_preciokilo`';
        }
        if ($this->isColumnModified(OrdentablajeriaPeer::ORDENTABLAJERIA_PESONETO)) {
            $modifiedColumns[':p' . $index++]  = '`ordentablajeria_pesoneto`';
        }
        if ($this->isColumnModified(OrdentablajeriaPeer::ORDENTABLAJERIA_PRECIONETO)) {
            $modifiedColumns[':p' . $index++]  = '`ordentablajeria_precioneto`';
        }
        if ($this->isColumnModified(OrdentablajeriaPeer::ORDENTABLAJERIA_INYECCION)) {
            $modifiedColumns[':p' . $index++]  = '`ordentablajeria_inyeccion`';
        }
        if ($this->isColumnModified(OrdentablajeriaPeer::ORDENTABLAJERIA_MERMA)) {
            $modifiedColumns[':p' . $index++]  = '`ordentablajeria_merma`';
        }
        if ($this->isColumnModified(OrdentablajeriaPeer::ORDENTABLAJERIA_APROVECHAMIENTO)) {
            $modifiedColumns[':p' . $index++]  = '`ordentablajeria_aprovechamiento`';
        }
        if ($this->isColumnModified(OrdentablajeriaPeer::ORDENTABLAJERIA_REVISADA)) {
            $modifiedColumns[':p' . $index++]  = '`ordentablajeria_revisada`';
        }
        if ($this->isColumnModified(OrdentablajeriaPeer::ORDENTABLAJERIA_FOLIO)) {
            $modifiedColumns[':p' . $index++]  = '`ordentablajeria_folio`';
        }

        $sql = sprintf(
            'INSERT INTO `ordentablajeria` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idordentablajeria`':
                        $stmt->bindValue($identifier, $this->idordentablajeria, PDO::PARAM_INT);
                        break;
                    case '`idempresa`':
                        $stmt->bindValue($identifier, $this->idempresa, PDO::PARAM_INT);
                        break;
                    case '`idsucursal`':
                        $stmt->bindValue($identifier, $this->idsucursal, PDO::PARAM_INT);
                        break;
                    case '`idalmacenorigen`':
                        $stmt->bindValue($identifier, $this->idalmacenorigen, PDO::PARAM_INT);
                        break;
                    case '`idalmacendestino`':
                        $stmt->bindValue($identifier, $this->idalmacendestino, PDO::PARAM_INT);
                        break;
                    case '`idusuario`':
                        $stmt->bindValue($identifier, $this->idusuario, PDO::PARAM_INT);
                        break;
                    case '`idauditor`':
                        $stmt->bindValue($identifier, $this->idauditor, PDO::PARAM_INT);
                        break;
                    case '`idproducto`':
                        $stmt->bindValue($identifier, $this->idproducto, PDO::PARAM_INT);
                        break;
                    case '`ordentablajeria_pesobruto`':
                        $stmt->bindValue($identifier, $this->ordentablajeria_pesobruto, PDO::PARAM_STR);
                        break;
                    case '`ordentablajeria_preciokilo`':
                        $stmt->bindValue($identifier, $this->ordentablajeria_preciokilo, PDO::PARAM_STR);
                        break;
                    case '`ordentablajeria_pesoneto`':
                        $stmt->bindValue($identifier, $this->ordentablajeria_pesoneto, PDO::PARAM_STR);
                        break;
                    case '`ordentablajeria_precioneto`':
                        $stmt->bindValue($identifier, $this->ordentablajeria_precioneto, PDO::PARAM_STR);
                        break;
                    case '`ordentablajeria_inyeccion`':
                        $stmt->bindValue($identifier, $this->ordentablajeria_inyeccion, PDO::PARAM_STR);
                        break;
                    case '`ordentablajeria_merma`':
                        $stmt->bindValue($identifier, $this->ordentablajeria_merma, PDO::PARAM_STR);
                        break;
                    case '`ordentablajeria_aprovechamiento`':
                        $stmt->bindValue($identifier, $this->ordentablajeria_aprovechamiento, PDO::PARAM_STR);
                        break;
                    case '`ordentablajeria_revisada`':
                        $stmt->bindValue($identifier, (int) $this->ordentablajeria_revisada, PDO::PARAM_INT);
                        break;
                    case '`ordentablajeria_folio`':
                        $stmt->bindValue($identifier, $this->ordentablajeria_folio, PDO::PARAM_STR);
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
        $this->setIdordentablajeria($pk);

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

            if ($this->aAlmacenRelatedByIdalmacendestino !== null) {
                if (!$this->aAlmacenRelatedByIdalmacendestino->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aAlmacenRelatedByIdalmacendestino->getValidationFailures());
                }
            }

            if ($this->aAlmacenRelatedByIdalmacenorigen !== null) {
                if (!$this->aAlmacenRelatedByIdalmacenorigen->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aAlmacenRelatedByIdalmacenorigen->getValidationFailures());
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

            if ($this->aProducto !== null) {
                if (!$this->aProducto->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aProducto->getValidationFailures());
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


            if (($retval = OrdentablajeriaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collOrdentablajeriadetalles !== null) {
                    foreach ($this->collOrdentablajeriadetalles as $referrerFK) {
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
        $pos = OrdentablajeriaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdordentablajeria();
                break;
            case 1:
                return $this->getIdempresa();
                break;
            case 2:
                return $this->getIdsucursal();
                break;
            case 3:
                return $this->getIdalmacenorigen();
                break;
            case 4:
                return $this->getIdalmacendestino();
                break;
            case 5:
                return $this->getIdusuario();
                break;
            case 6:
                return $this->getIdauditor();
                break;
            case 7:
                return $this->getIdproducto();
                break;
            case 8:
                return $this->getOrdentablajeriaPesobruto();
                break;
            case 9:
                return $this->getOrdentablajeriaPreciokilo();
                break;
            case 10:
                return $this->getOrdentablajeriaPesoneto();
                break;
            case 11:
                return $this->getOrdentablajeriaPrecioneto();
                break;
            case 12:
                return $this->getOrdentablajeriaInyeccion();
                break;
            case 13:
                return $this->getOrdentablajeriaMerma();
                break;
            case 14:
                return $this->getOrdentablajeriaAprovechamiento();
                break;
            case 15:
                return $this->getOrdentablajeriaRevisada();
                break;
            case 16:
                return $this->getOrdentablajeriaFolio();
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
        if (isset($alreadyDumpedObjects['Ordentablajeria'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Ordentablajeria'][$this->getPrimaryKey()] = true;
        $keys = OrdentablajeriaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdordentablajeria(),
            $keys[1] => $this->getIdempresa(),
            $keys[2] => $this->getIdsucursal(),
            $keys[3] => $this->getIdalmacenorigen(),
            $keys[4] => $this->getIdalmacendestino(),
            $keys[5] => $this->getIdusuario(),
            $keys[6] => $this->getIdauditor(),
            $keys[7] => $this->getIdproducto(),
            $keys[8] => $this->getOrdentablajeriaPesobruto(),
            $keys[9] => $this->getOrdentablajeriaPreciokilo(),
            $keys[10] => $this->getOrdentablajeriaPesoneto(),
            $keys[11] => $this->getOrdentablajeriaPrecioneto(),
            $keys[12] => $this->getOrdentablajeriaInyeccion(),
            $keys[13] => $this->getOrdentablajeriaMerma(),
            $keys[14] => $this->getOrdentablajeriaAprovechamiento(),
            $keys[15] => $this->getOrdentablajeriaRevisada(),
            $keys[16] => $this->getOrdentablajeriaFolio(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aAlmacenRelatedByIdalmacendestino) {
                $result['AlmacenRelatedByIdalmacendestino'] = $this->aAlmacenRelatedByIdalmacendestino->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aAlmacenRelatedByIdalmacenorigen) {
                $result['AlmacenRelatedByIdalmacenorigen'] = $this->aAlmacenRelatedByIdalmacenorigen->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aUsuarioRelatedByIdauditor) {
                $result['UsuarioRelatedByIdauditor'] = $this->aUsuarioRelatedByIdauditor->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aEmpresa) {
                $result['Empresa'] = $this->aEmpresa->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aProducto) {
                $result['Producto'] = $this->aProducto->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSucursal) {
                $result['Sucursal'] = $this->aSucursal->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aUsuarioRelatedByIdusuario) {
                $result['UsuarioRelatedByIdusuario'] = $this->aUsuarioRelatedByIdusuario->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collOrdentablajeriadetalles) {
                $result['Ordentablajeriadetalles'] = $this->collOrdentablajeriadetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = OrdentablajeriaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdordentablajeria($value);
                break;
            case 1:
                $this->setIdempresa($value);
                break;
            case 2:
                $this->setIdsucursal($value);
                break;
            case 3:
                $this->setIdalmacenorigen($value);
                break;
            case 4:
                $this->setIdalmacendestino($value);
                break;
            case 5:
                $this->setIdusuario($value);
                break;
            case 6:
                $this->setIdauditor($value);
                break;
            case 7:
                $this->setIdproducto($value);
                break;
            case 8:
                $this->setOrdentablajeriaPesobruto($value);
                break;
            case 9:
                $this->setOrdentablajeriaPreciokilo($value);
                break;
            case 10:
                $this->setOrdentablajeriaPesoneto($value);
                break;
            case 11:
                $this->setOrdentablajeriaPrecioneto($value);
                break;
            case 12:
                $this->setOrdentablajeriaInyeccion($value);
                break;
            case 13:
                $this->setOrdentablajeriaMerma($value);
                break;
            case 14:
                $this->setOrdentablajeriaAprovechamiento($value);
                break;
            case 15:
                $this->setOrdentablajeriaRevisada($value);
                break;
            case 16:
                $this->setOrdentablajeriaFolio($value);
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
        $keys = OrdentablajeriaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdordentablajeria($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdempresa($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdsucursal($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdalmacenorigen($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdalmacendestino($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdusuario($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdauditor($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdproducto($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setOrdentablajeriaPesobruto($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setOrdentablajeriaPreciokilo($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setOrdentablajeriaPesoneto($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setOrdentablajeriaPrecioneto($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setOrdentablajeriaInyeccion($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setOrdentablajeriaMerma($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setOrdentablajeriaAprovechamiento($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setOrdentablajeriaRevisada($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setOrdentablajeriaFolio($arr[$keys[16]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(OrdentablajeriaPeer::DATABASE_NAME);

        if ($this->isColumnModified(OrdentablajeriaPeer::IDORDENTABLAJERIA)) $criteria->add(OrdentablajeriaPeer::IDORDENTABLAJERIA, $this->idordentablajeria);
        if ($this->isColumnModified(OrdentablajeriaPeer::IDEMPRESA)) $criteria->add(OrdentablajeriaPeer::IDEMPRESA, $this->idempresa);
        if ($this->isColumnModified(OrdentablajeriaPeer::IDSUCURSAL)) $criteria->add(OrdentablajeriaPeer::IDSUCURSAL, $this->idsucursal);
        if ($this->isColumnModified(OrdentablajeriaPeer::IDALMACENORIGEN)) $criteria->add(OrdentablajeriaPeer::IDALMACENORIGEN, $this->idalmacenorigen);
        if ($this->isColumnModified(OrdentablajeriaPeer::IDALMACENDESTINO)) $criteria->add(OrdentablajeriaPeer::IDALMACENDESTINO, $this->idalmacendestino);
        if ($this->isColumnModified(OrdentablajeriaPeer::IDUSUARIO)) $criteria->add(OrdentablajeriaPeer::IDUSUARIO, $this->idusuario);
        if ($this->isColumnModified(OrdentablajeriaPeer::IDAUDITOR)) $criteria->add(OrdentablajeriaPeer::IDAUDITOR, $this->idauditor);
        if ($this->isColumnModified(OrdentablajeriaPeer::IDPRODUCTO)) $criteria->add(OrdentablajeriaPeer::IDPRODUCTO, $this->idproducto);
        if ($this->isColumnModified(OrdentablajeriaPeer::ORDENTABLAJERIA_PESOBRUTO)) $criteria->add(OrdentablajeriaPeer::ORDENTABLAJERIA_PESOBRUTO, $this->ordentablajeria_pesobruto);
        if ($this->isColumnModified(OrdentablajeriaPeer::ORDENTABLAJERIA_PRECIOKILO)) $criteria->add(OrdentablajeriaPeer::ORDENTABLAJERIA_PRECIOKILO, $this->ordentablajeria_preciokilo);
        if ($this->isColumnModified(OrdentablajeriaPeer::ORDENTABLAJERIA_PESONETO)) $criteria->add(OrdentablajeriaPeer::ORDENTABLAJERIA_PESONETO, $this->ordentablajeria_pesoneto);
        if ($this->isColumnModified(OrdentablajeriaPeer::ORDENTABLAJERIA_PRECIONETO)) $criteria->add(OrdentablajeriaPeer::ORDENTABLAJERIA_PRECIONETO, $this->ordentablajeria_precioneto);
        if ($this->isColumnModified(OrdentablajeriaPeer::ORDENTABLAJERIA_INYECCION)) $criteria->add(OrdentablajeriaPeer::ORDENTABLAJERIA_INYECCION, $this->ordentablajeria_inyeccion);
        if ($this->isColumnModified(OrdentablajeriaPeer::ORDENTABLAJERIA_MERMA)) $criteria->add(OrdentablajeriaPeer::ORDENTABLAJERIA_MERMA, $this->ordentablajeria_merma);
        if ($this->isColumnModified(OrdentablajeriaPeer::ORDENTABLAJERIA_APROVECHAMIENTO)) $criteria->add(OrdentablajeriaPeer::ORDENTABLAJERIA_APROVECHAMIENTO, $this->ordentablajeria_aprovechamiento);
        if ($this->isColumnModified(OrdentablajeriaPeer::ORDENTABLAJERIA_REVISADA)) $criteria->add(OrdentablajeriaPeer::ORDENTABLAJERIA_REVISADA, $this->ordentablajeria_revisada);
        if ($this->isColumnModified(OrdentablajeriaPeer::ORDENTABLAJERIA_FOLIO)) $criteria->add(OrdentablajeriaPeer::ORDENTABLAJERIA_FOLIO, $this->ordentablajeria_folio);

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
        $criteria = new Criteria(OrdentablajeriaPeer::DATABASE_NAME);
        $criteria->add(OrdentablajeriaPeer::IDORDENTABLAJERIA, $this->idordentablajeria);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdordentablajeria();
    }

    /**
     * Generic method to set the primary key (idordentablajeria column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdordentablajeria($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdordentablajeria();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Ordentablajeria (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdempresa($this->getIdempresa());
        $copyObj->setIdsucursal($this->getIdsucursal());
        $copyObj->setIdalmacenorigen($this->getIdalmacenorigen());
        $copyObj->setIdalmacendestino($this->getIdalmacendestino());
        $copyObj->setIdusuario($this->getIdusuario());
        $copyObj->setIdauditor($this->getIdauditor());
        $copyObj->setIdproducto($this->getIdproducto());
        $copyObj->setOrdentablajeriaPesobruto($this->getOrdentablajeriaPesobruto());
        $copyObj->setOrdentablajeriaPreciokilo($this->getOrdentablajeriaPreciokilo());
        $copyObj->setOrdentablajeriaPesoneto($this->getOrdentablajeriaPesoneto());
        $copyObj->setOrdentablajeriaPrecioneto($this->getOrdentablajeriaPrecioneto());
        $copyObj->setOrdentablajeriaInyeccion($this->getOrdentablajeriaInyeccion());
        $copyObj->setOrdentablajeriaMerma($this->getOrdentablajeriaMerma());
        $copyObj->setOrdentablajeriaAprovechamiento($this->getOrdentablajeriaAprovechamiento());
        $copyObj->setOrdentablajeriaRevisada($this->getOrdentablajeriaRevisada());
        $copyObj->setOrdentablajeriaFolio($this->getOrdentablajeriaFolio());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getOrdentablajeriadetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOrdentablajeriadetalle($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdordentablajeria(NULL); // this is a auto-increment column, so set to default value
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
     * @return Ordentablajeria Clone of current object.
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
     * @return OrdentablajeriaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new OrdentablajeriaPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Almacen object.
     *
     * @param                  Almacen $v
     * @return Ordentablajeria The current object (for fluent API support)
     * @throws PropelException
     */
    public function setAlmacenRelatedByIdalmacendestino(Almacen $v = null)
    {
        if ($v === null) {
            $this->setIdalmacendestino(NULL);
        } else {
            $this->setIdalmacendestino($v->getIdalmacen());
        }

        $this->aAlmacenRelatedByIdalmacendestino = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Almacen object, it will not be re-added.
        if ($v !== null) {
            $v->addOrdentablajeriaRelatedByIdalmacendestino($this);
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
    public function getAlmacenRelatedByIdalmacendestino(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aAlmacenRelatedByIdalmacendestino === null && ($this->idalmacendestino !== null) && $doQuery) {
            $this->aAlmacenRelatedByIdalmacendestino = AlmacenQuery::create()->findPk($this->idalmacendestino, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aAlmacenRelatedByIdalmacendestino->addOrdentablajeriasRelatedByIdalmacendestino($this);
             */
        }

        return $this->aAlmacenRelatedByIdalmacendestino;
    }

    /**
     * Declares an association between this object and a Almacen object.
     *
     * @param                  Almacen $v
     * @return Ordentablajeria The current object (for fluent API support)
     * @throws PropelException
     */
    public function setAlmacenRelatedByIdalmacenorigen(Almacen $v = null)
    {
        if ($v === null) {
            $this->setIdalmacenorigen(NULL);
        } else {
            $this->setIdalmacenorigen($v->getIdalmacen());
        }

        $this->aAlmacenRelatedByIdalmacenorigen = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Almacen object, it will not be re-added.
        if ($v !== null) {
            $v->addOrdentablajeriaRelatedByIdalmacenorigen($this);
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
    public function getAlmacenRelatedByIdalmacenorigen(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aAlmacenRelatedByIdalmacenorigen === null && ($this->idalmacenorigen !== null) && $doQuery) {
            $this->aAlmacenRelatedByIdalmacenorigen = AlmacenQuery::create()->findPk($this->idalmacenorigen, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aAlmacenRelatedByIdalmacenorigen->addOrdentablajeriasRelatedByIdalmacenorigen($this);
             */
        }

        return $this->aAlmacenRelatedByIdalmacenorigen;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param                  Usuario $v
     * @return Ordentablajeria The current object (for fluent API support)
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
            $v->addOrdentablajeriaRelatedByIdauditor($this);
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
                $this->aUsuarioRelatedByIdauditor->addOrdentablajeriasRelatedByIdauditor($this);
             */
        }

        return $this->aUsuarioRelatedByIdauditor;
    }

    /**
     * Declares an association between this object and a Empresa object.
     *
     * @param                  Empresa $v
     * @return Ordentablajeria The current object (for fluent API support)
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
            $v->addOrdentablajeria($this);
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
                $this->aEmpresa->addOrdentablajerias($this);
             */
        }

        return $this->aEmpresa;
    }

    /**
     * Declares an association between this object and a Producto object.
     *
     * @param                  Producto $v
     * @return Ordentablajeria The current object (for fluent API support)
     * @throws PropelException
     */
    public function setProducto(Producto $v = null)
    {
        if ($v === null) {
            $this->setIdproducto(NULL);
        } else {
            $this->setIdproducto($v->getIdproducto());
        }

        $this->aProducto = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Producto object, it will not be re-added.
        if ($v !== null) {
            $v->addOrdentablajeria($this);
        }


        return $this;
    }


    /**
     * Get the associated Producto object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Producto The associated Producto object.
     * @throws PropelException
     */
    public function getProducto(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aProducto === null && ($this->idproducto !== null) && $doQuery) {
            $this->aProducto = ProductoQuery::create()->findPk($this->idproducto, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aProducto->addOrdentablajerias($this);
             */
        }

        return $this->aProducto;
    }

    /**
     * Declares an association between this object and a Sucursal object.
     *
     * @param                  Sucursal $v
     * @return Ordentablajeria The current object (for fluent API support)
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
            $v->addOrdentablajeria($this);
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
                $this->aSucursal->addOrdentablajerias($this);
             */
        }

        return $this->aSucursal;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param                  Usuario $v
     * @return Ordentablajeria The current object (for fluent API support)
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
            $v->addOrdentablajeriaRelatedByIdusuario($this);
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
                $this->aUsuarioRelatedByIdusuario->addOrdentablajeriasRelatedByIdusuario($this);
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
        if ('Ordentablajeriadetalle' == $relationName) {
            $this->initOrdentablajeriadetalles();
        }
    }

    /**
     * Clears out the collOrdentablajeriadetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Ordentablajeria The current object (for fluent API support)
     * @see        addOrdentablajeriadetalles()
     */
    public function clearOrdentablajeriadetalles()
    {
        $this->collOrdentablajeriadetalles = null; // important to set this to null since that means it is uninitialized
        $this->collOrdentablajeriadetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collOrdentablajeriadetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialOrdentablajeriadetalles($v = true)
    {
        $this->collOrdentablajeriadetallesPartial = $v;
    }

    /**
     * Initializes the collOrdentablajeriadetalles collection.
     *
     * By default this just sets the collOrdentablajeriadetalles collection to an empty array (like clearcollOrdentablajeriadetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOrdentablajeriadetalles($overrideExisting = true)
    {
        if (null !== $this->collOrdentablajeriadetalles && !$overrideExisting) {
            return;
        }
        $this->collOrdentablajeriadetalles = new PropelObjectCollection();
        $this->collOrdentablajeriadetalles->setModel('Ordentablajeriadetalle');
    }

    /**
     * Gets an array of Ordentablajeriadetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Ordentablajeria is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Ordentablajeriadetalle[] List of Ordentablajeriadetalle objects
     * @throws PropelException
     */
    public function getOrdentablajeriadetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOrdentablajeriadetallesPartial && !$this->isNew();
        if (null === $this->collOrdentablajeriadetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOrdentablajeriadetalles) {
                // return empty collection
                $this->initOrdentablajeriadetalles();
            } else {
                $collOrdentablajeriadetalles = OrdentablajeriadetalleQuery::create(null, $criteria)
                    ->filterByOrdentablajeria($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOrdentablajeriadetallesPartial && count($collOrdentablajeriadetalles)) {
                      $this->initOrdentablajeriadetalles(false);

                      foreach ($collOrdentablajeriadetalles as $obj) {
                        if (false == $this->collOrdentablajeriadetalles->contains($obj)) {
                          $this->collOrdentablajeriadetalles->append($obj);
                        }
                      }

                      $this->collOrdentablajeriadetallesPartial = true;
                    }

                    $collOrdentablajeriadetalles->getInternalIterator()->rewind();

                    return $collOrdentablajeriadetalles;
                }

                if ($partial && $this->collOrdentablajeriadetalles) {
                    foreach ($this->collOrdentablajeriadetalles as $obj) {
                        if ($obj->isNew()) {
                            $collOrdentablajeriadetalles[] = $obj;
                        }
                    }
                }

                $this->collOrdentablajeriadetalles = $collOrdentablajeriadetalles;
                $this->collOrdentablajeriadetallesPartial = false;
            }
        }

        return $this->collOrdentablajeriadetalles;
    }

    /**
     * Sets a collection of Ordentablajeriadetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ordentablajeriadetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Ordentablajeria The current object (for fluent API support)
     */
    public function setOrdentablajeriadetalles(PropelCollection $ordentablajeriadetalles, PropelPDO $con = null)
    {
        $ordentablajeriadetallesToDelete = $this->getOrdentablajeriadetalles(new Criteria(), $con)->diff($ordentablajeriadetalles);


        $this->ordentablajeriadetallesScheduledForDeletion = $ordentablajeriadetallesToDelete;

        foreach ($ordentablajeriadetallesToDelete as $ordentablajeriadetalleRemoved) {
            $ordentablajeriadetalleRemoved->setOrdentablajeria(null);
        }

        $this->collOrdentablajeriadetalles = null;
        foreach ($ordentablajeriadetalles as $ordentablajeriadetalle) {
            $this->addOrdentablajeriadetalle($ordentablajeriadetalle);
        }

        $this->collOrdentablajeriadetalles = $ordentablajeriadetalles;
        $this->collOrdentablajeriadetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Ordentablajeriadetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Ordentablajeriadetalle objects.
     * @throws PropelException
     */
    public function countOrdentablajeriadetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOrdentablajeriadetallesPartial && !$this->isNew();
        if (null === $this->collOrdentablajeriadetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOrdentablajeriadetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOrdentablajeriadetalles());
            }
            $query = OrdentablajeriadetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOrdentablajeria($this)
                ->count($con);
        }

        return count($this->collOrdentablajeriadetalles);
    }

    /**
     * Method called to associate a Ordentablajeriadetalle object to this object
     * through the Ordentablajeriadetalle foreign key attribute.
     *
     * @param    Ordentablajeriadetalle $l Ordentablajeriadetalle
     * @return Ordentablajeria The current object (for fluent API support)
     */
    public function addOrdentablajeriadetalle(Ordentablajeriadetalle $l)
    {
        if ($this->collOrdentablajeriadetalles === null) {
            $this->initOrdentablajeriadetalles();
            $this->collOrdentablajeriadetallesPartial = true;
        }

        if (!in_array($l, $this->collOrdentablajeriadetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOrdentablajeriadetalle($l);

            if ($this->ordentablajeriadetallesScheduledForDeletion and $this->ordentablajeriadetallesScheduledForDeletion->contains($l)) {
                $this->ordentablajeriadetallesScheduledForDeletion->remove($this->ordentablajeriadetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Ordentablajeriadetalle $ordentablajeriadetalle The ordentablajeriadetalle object to add.
     */
    protected function doAddOrdentablajeriadetalle($ordentablajeriadetalle)
    {
        $this->collOrdentablajeriadetalles[]= $ordentablajeriadetalle;
        $ordentablajeriadetalle->setOrdentablajeria($this);
    }

    /**
     * @param	Ordentablajeriadetalle $ordentablajeriadetalle The ordentablajeriadetalle object to remove.
     * @return Ordentablajeria The current object (for fluent API support)
     */
    public function removeOrdentablajeriadetalle($ordentablajeriadetalle)
    {
        if ($this->getOrdentablajeriadetalles()->contains($ordentablajeriadetalle)) {
            $this->collOrdentablajeriadetalles->remove($this->collOrdentablajeriadetalles->search($ordentablajeriadetalle));
            if (null === $this->ordentablajeriadetallesScheduledForDeletion) {
                $this->ordentablajeriadetallesScheduledForDeletion = clone $this->collOrdentablajeriadetalles;
                $this->ordentablajeriadetallesScheduledForDeletion->clear();
            }
            $this->ordentablajeriadetallesScheduledForDeletion[]= clone $ordentablajeriadetalle;
            $ordentablajeriadetalle->setOrdentablajeria(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idordentablajeria = null;
        $this->idempresa = null;
        $this->idsucursal = null;
        $this->idalmacenorigen = null;
        $this->idalmacendestino = null;
        $this->idusuario = null;
        $this->idauditor = null;
        $this->idproducto = null;
        $this->ordentablajeria_pesobruto = null;
        $this->ordentablajeria_preciokilo = null;
        $this->ordentablajeria_pesoneto = null;
        $this->ordentablajeria_precioneto = null;
        $this->ordentablajeria_inyeccion = null;
        $this->ordentablajeria_merma = null;
        $this->ordentablajeria_aprovechamiento = null;
        $this->ordentablajeria_revisada = null;
        $this->ordentablajeria_folio = null;
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
            if ($this->collOrdentablajeriadetalles) {
                foreach ($this->collOrdentablajeriadetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aAlmacenRelatedByIdalmacendestino instanceof Persistent) {
              $this->aAlmacenRelatedByIdalmacendestino->clearAllReferences($deep);
            }
            if ($this->aAlmacenRelatedByIdalmacenorigen instanceof Persistent) {
              $this->aAlmacenRelatedByIdalmacenorigen->clearAllReferences($deep);
            }
            if ($this->aUsuarioRelatedByIdauditor instanceof Persistent) {
              $this->aUsuarioRelatedByIdauditor->clearAllReferences($deep);
            }
            if ($this->aEmpresa instanceof Persistent) {
              $this->aEmpresa->clearAllReferences($deep);
            }
            if ($this->aProducto instanceof Persistent) {
              $this->aProducto->clearAllReferences($deep);
            }
            if ($this->aSucursal instanceof Persistent) {
              $this->aSucursal->clearAllReferences($deep);
            }
            if ($this->aUsuarioRelatedByIdusuario instanceof Persistent) {
              $this->aUsuarioRelatedByIdusuario->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collOrdentablajeriadetalles instanceof PropelCollection) {
            $this->collOrdentablajeriadetalles->clearIterator();
        }
        $this->collOrdentablajeriadetalles = null;
        $this->aAlmacenRelatedByIdalmacendestino = null;
        $this->aAlmacenRelatedByIdalmacenorigen = null;
        $this->aUsuarioRelatedByIdauditor = null;
        $this->aEmpresa = null;
        $this->aProducto = null;
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
        return (string) $this->exportTo(OrdentablajeriaPeer::DEFAULT_STRING_FORMAT);
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
