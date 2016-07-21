<?php


/**
 * Base class that represents a row from the 'producto' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseProducto extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ProductoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ProductoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idproducto field.
     * @var        int
     */
    protected $idproducto;

    /**
     * The value for the idempresa field.
     * @var        int
     */
    protected $idempresa;

    /**
     * The value for the idunidadmedida field.
     * @var        int
     */
    protected $idunidadmedida;

    /**
     * The value for the producto_nombre field.
     * @var        string
     */
    protected $producto_nombre;

    /**
     * The value for the idcategoria field.
     * @var        int
     */
    protected $idcategoria;

    /**
     * The value for the idsubcategoria field.
     * @var        int
     */
    protected $idsubcategoria;

    /**
     * The value for the producto_rendimiento field.
     * @var        double
     */
    protected $producto_rendimiento;

    /**
     * The value for the producto_ultimocosto field.
     * @var        double
     */
    protected $producto_ultimocosto;

    /**
     * The value for the producto_baja field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $producto_baja;

    /**
     * The value for the producto_tipo field.
     * @var        string
     */
    protected $producto_tipo;

    /**
     * The value for the producto_costo field.
     * @var        double
     */
    protected $producto_costo;

    /**
     * The value for the producto_iva field.
     * @var        boolean
     */
    protected $producto_iva;

    /**
     * The value for the producto_precio field.
     * @var        double
     */
    protected $producto_precio;

    /**
     * @var        Categoria
     */
    protected $aCategoriaRelatedByIdcategoria;

    /**
     * @var        Empresa
     */
    protected $aEmpresa;

    /**
     * @var        Categoria
     */
    protected $aCategoriaRelatedByIdsubcategoria;

    /**
     * @var        Unidadmedida
     */
    protected $aUnidadmedida;

    /**
     * @var        PropelObjectCollection|Codigobarras[] Collection to store aggregation of Codigobarras objects.
     */
    protected $collCodigobarrass;
    protected $collCodigobarrassPartial;

    /**
     * @var        PropelObjectCollection|Compradetalle[] Collection to store aggregation of Compradetalle objects.
     */
    protected $collCompradetalles;
    protected $collCompradetallesPartial;

    /**
     * @var        PropelObjectCollection|Devoluciondetalle[] Collection to store aggregation of Devoluciondetalle objects.
     */
    protected $collDevoluciondetalles;
    protected $collDevoluciondetallesPartial;

    /**
     * @var        PropelObjectCollection|Notacreditodetalle[] Collection to store aggregation of Notacreditodetalle objects.
     */
    protected $collNotacreditodetalles;
    protected $collNotacreditodetallesPartial;

    /**
     * @var        PropelObjectCollection|Ordentablajeria[] Collection to store aggregation of Ordentablajeria objects.
     */
    protected $collOrdentablajerias;
    protected $collOrdentablajeriasPartial;

    /**
     * @var        PropelObjectCollection|Ordentablajeriadetalle[] Collection to store aggregation of Ordentablajeriadetalle objects.
     */
    protected $collOrdentablajeriadetalles;
    protected $collOrdentablajeriadetallesPartial;

    /**
     * @var        PropelObjectCollection|Plantillatablajeria[] Collection to store aggregation of Plantillatablajeria objects.
     */
    protected $collPlantillatablajerias;
    protected $collPlantillatablajeriasPartial;

    /**
     * @var        PropelObjectCollection|Plantillatablajeriadetalle[] Collection to store aggregation of Plantillatablajeriadetalle objects.
     */
    protected $collPlantillatablajeriadetalles;
    protected $collPlantillatablajeriadetallesPartial;

    /**
     * @var        PropelObjectCollection|Productosucursalalmacen[] Collection to store aggregation of Productosucursalalmacen objects.
     */
    protected $collProductosucursalalmacens;
    protected $collProductosucursalalmacensPartial;

    /**
     * @var        PropelObjectCollection|Receta[] Collection to store aggregation of Receta objects.
     */
    protected $collRecetasRelatedByIdproducto;
    protected $collRecetasRelatedByIdproductoPartial;

    /**
     * @var        PropelObjectCollection|Receta[] Collection to store aggregation of Receta objects.
     */
    protected $collRecetasRelatedByIdproductoreceta;
    protected $collRecetasRelatedByIdproductorecetaPartial;

    /**
     * @var        PropelObjectCollection|Requisiciondetalle[] Collection to store aggregation of Requisiciondetalle objects.
     */
    protected $collRequisiciondetalles;
    protected $collRequisiciondetallesPartial;

    /**
     * @var        PropelObjectCollection|Ventadetalle[] Collection to store aggregation of Ventadetalle objects.
     */
    protected $collVentadetalles;
    protected $collVentadetallesPartial;

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
    protected $codigobarrassScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $compradetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $devoluciondetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $notacreditodetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ordentablajeriasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ordentablajeriadetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $plantillatablajeriasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $plantillatablajeriadetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $productosucursalalmacensScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $recetasRelatedByIdproductoScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $recetasRelatedByIdproductorecetaScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $requisiciondetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ventadetallesScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->producto_baja = false;
    }

    /**
     * Initializes internal state of BaseProducto object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
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
     * Get the [idempresa] column value.
     *
     * @return int
     */
    public function getIdempresa()
    {

        return $this->idempresa;
    }

    /**
     * Get the [idunidadmedida] column value.
     *
     * @return int
     */
    public function getIdunidadmedida()
    {

        return $this->idunidadmedida;
    }

    /**
     * Get the [producto_nombre] column value.
     *
     * @return string
     */
    public function getProductoNombre()
    {

        return $this->producto_nombre;
    }

    /**
     * Get the [idcategoria] column value.
     *
     * @return int
     */
    public function getIdcategoria()
    {

        return $this->idcategoria;
    }

    /**
     * Get the [idsubcategoria] column value.
     *
     * @return int
     */
    public function getIdsubcategoria()
    {

        return $this->idsubcategoria;
    }

    /**
     * Get the [producto_rendimiento] column value.
     *
     * @return double
     */
    public function getProductoRendimiento()
    {

        return $this->producto_rendimiento;
    }

    /**
     * Get the [producto_ultimocosto] column value.
     *
     * @return double
     */
    public function getProductoUltimocosto()
    {

        return $this->producto_ultimocosto;
    }

    /**
     * Get the [producto_baja] column value.
     *
     * @return boolean
     */
    public function getProductoBaja()
    {

        return $this->producto_baja;
    }

    /**
     * Get the [producto_tipo] column value.
     *
     * @return string
     */
    public function getProductoTipo()
    {

        return $this->producto_tipo;
    }

    /**
     * Get the [producto_costo] column value.
     *
     * @return double
     */
    public function getProductoCosto()
    {

        return $this->producto_costo;
    }

    /**
     * Get the [producto_iva] column value.
     *
     * @return boolean
     */
    public function getProductoIva()
    {

        return $this->producto_iva;
    }

    /**
     * Get the [producto_precio] column value.
     *
     * @return double
     */
    public function getProductoPrecio()
    {

        return $this->producto_precio;
    }

    /**
     * Set the value of [idproducto] column.
     *
     * @param  int $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setIdproducto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproducto !== $v) {
            $this->idproducto = $v;
            $this->modifiedColumns[] = ProductoPeer::IDPRODUCTO;
        }


        return $this;
    } // setIdproducto()

    /**
     * Set the value of [idempresa] column.
     *
     * @param  int $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setIdempresa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempresa !== $v) {
            $this->idempresa = $v;
            $this->modifiedColumns[] = ProductoPeer::IDEMPRESA;
        }

        if ($this->aEmpresa !== null && $this->aEmpresa->getIdempresa() !== $v) {
            $this->aEmpresa = null;
        }


        return $this;
    } // setIdempresa()

    /**
     * Set the value of [idunidadmedida] column.
     *
     * @param  int $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setIdunidadmedida($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idunidadmedida !== $v) {
            $this->idunidadmedida = $v;
            $this->modifiedColumns[] = ProductoPeer::IDUNIDADMEDIDA;
        }

        if ($this->aUnidadmedida !== null && $this->aUnidadmedida->getIdunidadmedida() !== $v) {
            $this->aUnidadmedida = null;
        }


        return $this;
    } // setIdunidadmedida()

    /**
     * Set the value of [producto_nombre] column.
     *
     * @param  string $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setProductoNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->producto_nombre !== $v) {
            $this->producto_nombre = $v;
            $this->modifiedColumns[] = ProductoPeer::PRODUCTO_NOMBRE;
        }


        return $this;
    } // setProductoNombre()

    /**
     * Set the value of [idcategoria] column.
     *
     * @param  int $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setIdcategoria($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcategoria !== $v) {
            $this->idcategoria = $v;
            $this->modifiedColumns[] = ProductoPeer::IDCATEGORIA;
        }

        if ($this->aCategoriaRelatedByIdcategoria !== null && $this->aCategoriaRelatedByIdcategoria->getIdcategoria() !== $v) {
            $this->aCategoriaRelatedByIdcategoria = null;
        }


        return $this;
    } // setIdcategoria()

    /**
     * Set the value of [idsubcategoria] column.
     *
     * @param  int $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setIdsubcategoria($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idsubcategoria !== $v) {
            $this->idsubcategoria = $v;
            $this->modifiedColumns[] = ProductoPeer::IDSUBCATEGORIA;
        }

        if ($this->aCategoriaRelatedByIdsubcategoria !== null && $this->aCategoriaRelatedByIdsubcategoria->getIdcategoria() !== $v) {
            $this->aCategoriaRelatedByIdsubcategoria = null;
        }


        return $this;
    } // setIdsubcategoria()

    /**
     * Set the value of [producto_rendimiento] column.
     *
     * @param  double $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setProductoRendimiento($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->producto_rendimiento !== $v) {
            $this->producto_rendimiento = $v;
            $this->modifiedColumns[] = ProductoPeer::PRODUCTO_RENDIMIENTO;
        }


        return $this;
    } // setProductoRendimiento()

    /**
     * Set the value of [producto_ultimocosto] column.
     *
     * @param  double $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setProductoUltimocosto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->producto_ultimocosto !== $v) {
            $this->producto_ultimocosto = $v;
            $this->modifiedColumns[] = ProductoPeer::PRODUCTO_ULTIMOCOSTO;
        }


        return $this;
    } // setProductoUltimocosto()

    /**
     * Sets the value of the [producto_baja] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Producto The current object (for fluent API support)
     */
    public function setProductoBaja($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->producto_baja !== $v) {
            $this->producto_baja = $v;
            $this->modifiedColumns[] = ProductoPeer::PRODUCTO_BAJA;
        }


        return $this;
    } // setProductoBaja()

    /**
     * Set the value of [producto_tipo] column.
     *
     * @param  string $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setProductoTipo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->producto_tipo !== $v) {
            $this->producto_tipo = $v;
            $this->modifiedColumns[] = ProductoPeer::PRODUCTO_TIPO;
        }


        return $this;
    } // setProductoTipo()

    /**
     * Set the value of [producto_costo] column.
     *
     * @param  double $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setProductoCosto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->producto_costo !== $v) {
            $this->producto_costo = $v;
            $this->modifiedColumns[] = ProductoPeer::PRODUCTO_COSTO;
        }


        return $this;
    } // setProductoCosto()

    /**
     * Sets the value of the [producto_iva] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Producto The current object (for fluent API support)
     */
    public function setProductoIva($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->producto_iva !== $v) {
            $this->producto_iva = $v;
            $this->modifiedColumns[] = ProductoPeer::PRODUCTO_IVA;
        }


        return $this;
    } // setProductoIva()

    /**
     * Set the value of [producto_precio] column.
     *
     * @param  double $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setProductoPrecio($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->producto_precio !== $v) {
            $this->producto_precio = $v;
            $this->modifiedColumns[] = ProductoPeer::PRODUCTO_PRECIO;
        }


        return $this;
    } // setProductoPrecio()

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
            if ($this->producto_baja !== false) {
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

            $this->idproducto = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idempresa = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idunidadmedida = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->producto_nombre = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->idcategoria = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->idsubcategoria = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->producto_rendimiento = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
            $this->producto_ultimocosto = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->producto_baja = ($row[$startcol + 8] !== null) ? (boolean) $row[$startcol + 8] : null;
            $this->producto_tipo = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->producto_costo = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->producto_iva = ($row[$startcol + 11] !== null) ? (boolean) $row[$startcol + 11] : null;
            $this->producto_precio = ($row[$startcol + 12] !== null) ? (double) $row[$startcol + 12] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 13; // 13 = ProductoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Producto object", $e);
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
        if ($this->aUnidadmedida !== null && $this->idunidadmedida !== $this->aUnidadmedida->getIdunidadmedida()) {
            $this->aUnidadmedida = null;
        }
        if ($this->aCategoriaRelatedByIdcategoria !== null && $this->idcategoria !== $this->aCategoriaRelatedByIdcategoria->getIdcategoria()) {
            $this->aCategoriaRelatedByIdcategoria = null;
        }
        if ($this->aCategoriaRelatedByIdsubcategoria !== null && $this->idsubcategoria !== $this->aCategoriaRelatedByIdsubcategoria->getIdcategoria()) {
            $this->aCategoriaRelatedByIdsubcategoria = null;
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
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ProductoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCategoriaRelatedByIdcategoria = null;
            $this->aEmpresa = null;
            $this->aCategoriaRelatedByIdsubcategoria = null;
            $this->aUnidadmedida = null;
            $this->collCodigobarrass = null;

            $this->collCompradetalles = null;

            $this->collDevoluciondetalles = null;

            $this->collNotacreditodetalles = null;

            $this->collOrdentablajerias = null;

            $this->collOrdentablajeriadetalles = null;

            $this->collPlantillatablajerias = null;

            $this->collPlantillatablajeriadetalles = null;

            $this->collProductosucursalalmacens = null;

            $this->collRecetasRelatedByIdproducto = null;

            $this->collRecetasRelatedByIdproductoreceta = null;

            $this->collRequisiciondetalles = null;

            $this->collVentadetalles = null;

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
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ProductoQuery::create()
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
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ProductoPeer::addInstanceToPool($this);
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

            if ($this->aCategoriaRelatedByIdcategoria !== null) {
                if ($this->aCategoriaRelatedByIdcategoria->isModified() || $this->aCategoriaRelatedByIdcategoria->isNew()) {
                    $affectedRows += $this->aCategoriaRelatedByIdcategoria->save($con);
                }
                $this->setCategoriaRelatedByIdcategoria($this->aCategoriaRelatedByIdcategoria);
            }

            if ($this->aEmpresa !== null) {
                if ($this->aEmpresa->isModified() || $this->aEmpresa->isNew()) {
                    $affectedRows += $this->aEmpresa->save($con);
                }
                $this->setEmpresa($this->aEmpresa);
            }

            if ($this->aCategoriaRelatedByIdsubcategoria !== null) {
                if ($this->aCategoriaRelatedByIdsubcategoria->isModified() || $this->aCategoriaRelatedByIdsubcategoria->isNew()) {
                    $affectedRows += $this->aCategoriaRelatedByIdsubcategoria->save($con);
                }
                $this->setCategoriaRelatedByIdsubcategoria($this->aCategoriaRelatedByIdsubcategoria);
            }

            if ($this->aUnidadmedida !== null) {
                if ($this->aUnidadmedida->isModified() || $this->aUnidadmedida->isNew()) {
                    $affectedRows += $this->aUnidadmedida->save($con);
                }
                $this->setUnidadmedida($this->aUnidadmedida);
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

            if ($this->codigobarrassScheduledForDeletion !== null) {
                if (!$this->codigobarrassScheduledForDeletion->isEmpty()) {
                    CodigobarrasQuery::create()
                        ->filterByPrimaryKeys($this->codigobarrassScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->codigobarrassScheduledForDeletion = null;
                }
            }

            if ($this->collCodigobarrass !== null) {
                foreach ($this->collCodigobarrass as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

            if ($this->plantillatablajeriadetallesScheduledForDeletion !== null) {
                if (!$this->plantillatablajeriadetallesScheduledForDeletion->isEmpty()) {
                    PlantillatablajeriadetalleQuery::create()
                        ->filterByPrimaryKeys($this->plantillatablajeriadetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->plantillatablajeriadetallesScheduledForDeletion = null;
                }
            }

            if ($this->collPlantillatablajeriadetalles !== null) {
                foreach ($this->collPlantillatablajeriadetalles as $referrerFK) {
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

            if ($this->recetasRelatedByIdproductoScheduledForDeletion !== null) {
                if (!$this->recetasRelatedByIdproductoScheduledForDeletion->isEmpty()) {
                    RecetaQuery::create()
                        ->filterByPrimaryKeys($this->recetasRelatedByIdproductoScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->recetasRelatedByIdproductoScheduledForDeletion = null;
                }
            }

            if ($this->collRecetasRelatedByIdproducto !== null) {
                foreach ($this->collRecetasRelatedByIdproducto as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->recetasRelatedByIdproductorecetaScheduledForDeletion !== null) {
                if (!$this->recetasRelatedByIdproductorecetaScheduledForDeletion->isEmpty()) {
                    RecetaQuery::create()
                        ->filterByPrimaryKeys($this->recetasRelatedByIdproductorecetaScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->recetasRelatedByIdproductorecetaScheduledForDeletion = null;
                }
            }

            if ($this->collRecetasRelatedByIdproductoreceta !== null) {
                foreach ($this->collRecetasRelatedByIdproductoreceta as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->requisiciondetallesScheduledForDeletion !== null) {
                if (!$this->requisiciondetallesScheduledForDeletion->isEmpty()) {
                    RequisiciondetalleQuery::create()
                        ->filterByPrimaryKeys($this->requisiciondetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->requisiciondetallesScheduledForDeletion = null;
                }
            }

            if ($this->collRequisiciondetalles !== null) {
                foreach ($this->collRequisiciondetalles as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[] = ProductoPeer::IDPRODUCTO;
        if (null !== $this->idproducto) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ProductoPeer::IDPRODUCTO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ProductoPeer::IDPRODUCTO)) {
            $modifiedColumns[':p' . $index++]  = '`idproducto`';
        }
        if ($this->isColumnModified(ProductoPeer::IDEMPRESA)) {
            $modifiedColumns[':p' . $index++]  = '`idempresa`';
        }
        if ($this->isColumnModified(ProductoPeer::IDUNIDADMEDIDA)) {
            $modifiedColumns[':p' . $index++]  = '`idunidadmedida`';
        }
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`producto_nombre`';
        }
        if ($this->isColumnModified(ProductoPeer::IDCATEGORIA)) {
            $modifiedColumns[':p' . $index++]  = '`idcategoria`';
        }
        if ($this->isColumnModified(ProductoPeer::IDSUBCATEGORIA)) {
            $modifiedColumns[':p' . $index++]  = '`idsubcategoria`';
        }
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_RENDIMIENTO)) {
            $modifiedColumns[':p' . $index++]  = '`producto_rendimiento`';
        }
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_ULTIMOCOSTO)) {
            $modifiedColumns[':p' . $index++]  = '`producto_ultimocosto`';
        }
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_BAJA)) {
            $modifiedColumns[':p' . $index++]  = '`producto_baja`';
        }
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_TIPO)) {
            $modifiedColumns[':p' . $index++]  = '`producto_tipo`';
        }
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_COSTO)) {
            $modifiedColumns[':p' . $index++]  = '`producto_costo`';
        }
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_IVA)) {
            $modifiedColumns[':p' . $index++]  = '`producto_iva`';
        }
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_PRECIO)) {
            $modifiedColumns[':p' . $index++]  = '`producto_precio`';
        }

        $sql = sprintf(
            'INSERT INTO `producto` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idproducto`':
                        $stmt->bindValue($identifier, $this->idproducto, PDO::PARAM_INT);
                        break;
                    case '`idempresa`':
                        $stmt->bindValue($identifier, $this->idempresa, PDO::PARAM_INT);
                        break;
                    case '`idunidadmedida`':
                        $stmt->bindValue($identifier, $this->idunidadmedida, PDO::PARAM_INT);
                        break;
                    case '`producto_nombre`':
                        $stmt->bindValue($identifier, $this->producto_nombre, PDO::PARAM_STR);
                        break;
                    case '`idcategoria`':
                        $stmt->bindValue($identifier, $this->idcategoria, PDO::PARAM_INT);
                        break;
                    case '`idsubcategoria`':
                        $stmt->bindValue($identifier, $this->idsubcategoria, PDO::PARAM_INT);
                        break;
                    case '`producto_rendimiento`':
                        $stmt->bindValue($identifier, $this->producto_rendimiento, PDO::PARAM_STR);
                        break;
                    case '`producto_ultimocosto`':
                        $stmt->bindValue($identifier, $this->producto_ultimocosto, PDO::PARAM_STR);
                        break;
                    case '`producto_baja`':
                        $stmt->bindValue($identifier, (int) $this->producto_baja, PDO::PARAM_INT);
                        break;
                    case '`producto_tipo`':
                        $stmt->bindValue($identifier, $this->producto_tipo, PDO::PARAM_STR);
                        break;
                    case '`producto_costo`':
                        $stmt->bindValue($identifier, $this->producto_costo, PDO::PARAM_STR);
                        break;
                    case '`producto_iva`':
                        $stmt->bindValue($identifier, (int) $this->producto_iva, PDO::PARAM_INT);
                        break;
                    case '`producto_precio`':
                        $stmt->bindValue($identifier, $this->producto_precio, PDO::PARAM_STR);
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
        $this->setIdproducto($pk);

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

            if ($this->aCategoriaRelatedByIdcategoria !== null) {
                if (!$this->aCategoriaRelatedByIdcategoria->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCategoriaRelatedByIdcategoria->getValidationFailures());
                }
            }

            if ($this->aEmpresa !== null) {
                if (!$this->aEmpresa->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEmpresa->getValidationFailures());
                }
            }

            if ($this->aCategoriaRelatedByIdsubcategoria !== null) {
                if (!$this->aCategoriaRelatedByIdsubcategoria->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCategoriaRelatedByIdsubcategoria->getValidationFailures());
                }
            }

            if ($this->aUnidadmedida !== null) {
                if (!$this->aUnidadmedida->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUnidadmedida->getValidationFailures());
                }
            }


            if (($retval = ProductoPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCodigobarrass !== null) {
                    foreach ($this->collCodigobarrass as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCompradetalles !== null) {
                    foreach ($this->collCompradetalles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collDevoluciondetalles !== null) {
                    foreach ($this->collDevoluciondetalles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collNotacreditodetalles !== null) {
                    foreach ($this->collNotacreditodetalles as $referrerFK) {
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

                if ($this->collOrdentablajeriadetalles !== null) {
                    foreach ($this->collOrdentablajeriadetalles as $referrerFK) {
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

                if ($this->collPlantillatablajeriadetalles !== null) {
                    foreach ($this->collPlantillatablajeriadetalles as $referrerFK) {
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

                if ($this->collRecetasRelatedByIdproducto !== null) {
                    foreach ($this->collRecetasRelatedByIdproducto as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collRecetasRelatedByIdproductoreceta !== null) {
                    foreach ($this->collRecetasRelatedByIdproductoreceta as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collRequisiciondetalles !== null) {
                    foreach ($this->collRequisiciondetalles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collVentadetalles !== null) {
                    foreach ($this->collVentadetalles as $referrerFK) {
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
        $pos = ProductoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdproducto();
                break;
            case 1:
                return $this->getIdempresa();
                break;
            case 2:
                return $this->getIdunidadmedida();
                break;
            case 3:
                return $this->getProductoNombre();
                break;
            case 4:
                return $this->getIdcategoria();
                break;
            case 5:
                return $this->getIdsubcategoria();
                break;
            case 6:
                return $this->getProductoRendimiento();
                break;
            case 7:
                return $this->getProductoUltimocosto();
                break;
            case 8:
                return $this->getProductoBaja();
                break;
            case 9:
                return $this->getProductoTipo();
                break;
            case 10:
                return $this->getProductoCosto();
                break;
            case 11:
                return $this->getProductoIva();
                break;
            case 12:
                return $this->getProductoPrecio();
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
        if (isset($alreadyDumpedObjects['Producto'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Producto'][$this->getPrimaryKey()] = true;
        $keys = ProductoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdproducto(),
            $keys[1] => $this->getIdempresa(),
            $keys[2] => $this->getIdunidadmedida(),
            $keys[3] => $this->getProductoNombre(),
            $keys[4] => $this->getIdcategoria(),
            $keys[5] => $this->getIdsubcategoria(),
            $keys[6] => $this->getProductoRendimiento(),
            $keys[7] => $this->getProductoUltimocosto(),
            $keys[8] => $this->getProductoBaja(),
            $keys[9] => $this->getProductoTipo(),
            $keys[10] => $this->getProductoCosto(),
            $keys[11] => $this->getProductoIva(),
            $keys[12] => $this->getProductoPrecio(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aCategoriaRelatedByIdcategoria) {
                $result['CategoriaRelatedByIdcategoria'] = $this->aCategoriaRelatedByIdcategoria->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aEmpresa) {
                $result['Empresa'] = $this->aEmpresa->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCategoriaRelatedByIdsubcategoria) {
                $result['CategoriaRelatedByIdsubcategoria'] = $this->aCategoriaRelatedByIdsubcategoria->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aUnidadmedida) {
                $result['Unidadmedida'] = $this->aUnidadmedida->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCodigobarrass) {
                $result['Codigobarrass'] = $this->collCodigobarrass->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCompradetalles) {
                $result['Compradetalles'] = $this->collCompradetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collDevoluciondetalles) {
                $result['Devoluciondetalles'] = $this->collDevoluciondetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collNotacreditodetalles) {
                $result['Notacreditodetalles'] = $this->collNotacreditodetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collOrdentablajerias) {
                $result['Ordentablajerias'] = $this->collOrdentablajerias->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collOrdentablajeriadetalles) {
                $result['Ordentablajeriadetalles'] = $this->collOrdentablajeriadetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPlantillatablajerias) {
                $result['Plantillatablajerias'] = $this->collPlantillatablajerias->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPlantillatablajeriadetalles) {
                $result['Plantillatablajeriadetalles'] = $this->collPlantillatablajeriadetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collProductosucursalalmacens) {
                $result['Productosucursalalmacens'] = $this->collProductosucursalalmacens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collRecetasRelatedByIdproducto) {
                $result['RecetasRelatedByIdproducto'] = $this->collRecetasRelatedByIdproducto->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collRecetasRelatedByIdproductoreceta) {
                $result['RecetasRelatedByIdproductoreceta'] = $this->collRecetasRelatedByIdproductoreceta->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collRequisiciondetalles) {
                $result['Requisiciondetalles'] = $this->collRequisiciondetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collVentadetalles) {
                $result['Ventadetalles'] = $this->collVentadetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ProductoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdproducto($value);
                break;
            case 1:
                $this->setIdempresa($value);
                break;
            case 2:
                $this->setIdunidadmedida($value);
                break;
            case 3:
                $this->setProductoNombre($value);
                break;
            case 4:
                $this->setIdcategoria($value);
                break;
            case 5:
                $this->setIdsubcategoria($value);
                break;
            case 6:
                $this->setProductoRendimiento($value);
                break;
            case 7:
                $this->setProductoUltimocosto($value);
                break;
            case 8:
                $this->setProductoBaja($value);
                break;
            case 9:
                $this->setProductoTipo($value);
                break;
            case 10:
                $this->setProductoCosto($value);
                break;
            case 11:
                $this->setProductoIva($value);
                break;
            case 12:
                $this->setProductoPrecio($value);
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
        $keys = ProductoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdproducto($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdempresa($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdunidadmedida($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setProductoNombre($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdcategoria($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdsubcategoria($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setProductoRendimiento($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setProductoUltimocosto($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setProductoBaja($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setProductoTipo($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setProductoCosto($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setProductoIva($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setProductoPrecio($arr[$keys[12]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ProductoPeer::DATABASE_NAME);

        if ($this->isColumnModified(ProductoPeer::IDPRODUCTO)) $criteria->add(ProductoPeer::IDPRODUCTO, $this->idproducto);
        if ($this->isColumnModified(ProductoPeer::IDEMPRESA)) $criteria->add(ProductoPeer::IDEMPRESA, $this->idempresa);
        if ($this->isColumnModified(ProductoPeer::IDUNIDADMEDIDA)) $criteria->add(ProductoPeer::IDUNIDADMEDIDA, $this->idunidadmedida);
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_NOMBRE)) $criteria->add(ProductoPeer::PRODUCTO_NOMBRE, $this->producto_nombre);
        if ($this->isColumnModified(ProductoPeer::IDCATEGORIA)) $criteria->add(ProductoPeer::IDCATEGORIA, $this->idcategoria);
        if ($this->isColumnModified(ProductoPeer::IDSUBCATEGORIA)) $criteria->add(ProductoPeer::IDSUBCATEGORIA, $this->idsubcategoria);
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_RENDIMIENTO)) $criteria->add(ProductoPeer::PRODUCTO_RENDIMIENTO, $this->producto_rendimiento);
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_ULTIMOCOSTO)) $criteria->add(ProductoPeer::PRODUCTO_ULTIMOCOSTO, $this->producto_ultimocosto);
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_BAJA)) $criteria->add(ProductoPeer::PRODUCTO_BAJA, $this->producto_baja);
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_TIPO)) $criteria->add(ProductoPeer::PRODUCTO_TIPO, $this->producto_tipo);
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_COSTO)) $criteria->add(ProductoPeer::PRODUCTO_COSTO, $this->producto_costo);
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_IVA)) $criteria->add(ProductoPeer::PRODUCTO_IVA, $this->producto_iva);
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_PRECIO)) $criteria->add(ProductoPeer::PRODUCTO_PRECIO, $this->producto_precio);

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
        $criteria = new Criteria(ProductoPeer::DATABASE_NAME);
        $criteria->add(ProductoPeer::IDPRODUCTO, $this->idproducto);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdproducto();
    }

    /**
     * Generic method to set the primary key (idproducto column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdproducto($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdproducto();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Producto (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdempresa($this->getIdempresa());
        $copyObj->setIdunidadmedida($this->getIdunidadmedida());
        $copyObj->setProductoNombre($this->getProductoNombre());
        $copyObj->setIdcategoria($this->getIdcategoria());
        $copyObj->setIdsubcategoria($this->getIdsubcategoria());
        $copyObj->setProductoRendimiento($this->getProductoRendimiento());
        $copyObj->setProductoUltimocosto($this->getProductoUltimocosto());
        $copyObj->setProductoBaja($this->getProductoBaja());
        $copyObj->setProductoTipo($this->getProductoTipo());
        $copyObj->setProductoCosto($this->getProductoCosto());
        $copyObj->setProductoIva($this->getProductoIva());
        $copyObj->setProductoPrecio($this->getProductoPrecio());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCodigobarrass() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCodigobarras($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCompradetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCompradetalle($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getDevoluciondetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addDevoluciondetalle($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getNotacreditodetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addNotacreditodetalle($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getOrdentablajerias() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOrdentablajeria($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getOrdentablajeriadetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOrdentablajeriadetalle($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPlantillatablajerias() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPlantillatablajeria($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPlantillatablajeriadetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPlantillatablajeriadetalle($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getProductosucursalalmacens() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addProductosucursalalmacen($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getRecetasRelatedByIdproducto() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addRecetaRelatedByIdproducto($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getRecetasRelatedByIdproductoreceta() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addRecetaRelatedByIdproductoreceta($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getRequisiciondetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addRequisiciondetalle($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getVentadetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addVentadetalle($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdproducto(NULL); // this is a auto-increment column, so set to default value
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
     * @return Producto Clone of current object.
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
     * @return ProductoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ProductoPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Categoria object.
     *
     * @param                  Categoria $v
     * @return Producto The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCategoriaRelatedByIdcategoria(Categoria $v = null)
    {
        if ($v === null) {
            $this->setIdcategoria(NULL);
        } else {
            $this->setIdcategoria($v->getIdcategoria());
        }

        $this->aCategoriaRelatedByIdcategoria = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Categoria object, it will not be re-added.
        if ($v !== null) {
            $v->addProductoRelatedByIdcategoria($this);
        }


        return $this;
    }


    /**
     * Get the associated Categoria object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Categoria The associated Categoria object.
     * @throws PropelException
     */
    public function getCategoriaRelatedByIdcategoria(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCategoriaRelatedByIdcategoria === null && ($this->idcategoria !== null) && $doQuery) {
            $this->aCategoriaRelatedByIdcategoria = CategoriaQuery::create()->findPk($this->idcategoria, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCategoriaRelatedByIdcategoria->addProductosRelatedByIdcategoria($this);
             */
        }

        return $this->aCategoriaRelatedByIdcategoria;
    }

    /**
     * Declares an association between this object and a Empresa object.
     *
     * @param                  Empresa $v
     * @return Producto The current object (for fluent API support)
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
            $v->addProducto($this);
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
                $this->aEmpresa->addProductos($this);
             */
        }

        return $this->aEmpresa;
    }

    /**
     * Declares an association between this object and a Categoria object.
     *
     * @param                  Categoria $v
     * @return Producto The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCategoriaRelatedByIdsubcategoria(Categoria $v = null)
    {
        if ($v === null) {
            $this->setIdsubcategoria(NULL);
        } else {
            $this->setIdsubcategoria($v->getIdcategoria());
        }

        $this->aCategoriaRelatedByIdsubcategoria = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Categoria object, it will not be re-added.
        if ($v !== null) {
            $v->addProductoRelatedByIdsubcategoria($this);
        }


        return $this;
    }


    /**
     * Get the associated Categoria object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Categoria The associated Categoria object.
     * @throws PropelException
     */
    public function getCategoriaRelatedByIdsubcategoria(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCategoriaRelatedByIdsubcategoria === null && ($this->idsubcategoria !== null) && $doQuery) {
            $this->aCategoriaRelatedByIdsubcategoria = CategoriaQuery::create()->findPk($this->idsubcategoria, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCategoriaRelatedByIdsubcategoria->addProductosRelatedByIdsubcategoria($this);
             */
        }

        return $this->aCategoriaRelatedByIdsubcategoria;
    }

    /**
     * Declares an association between this object and a Unidadmedida object.
     *
     * @param                  Unidadmedida $v
     * @return Producto The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUnidadmedida(Unidadmedida $v = null)
    {
        if ($v === null) {
            $this->setIdunidadmedida(NULL);
        } else {
            $this->setIdunidadmedida($v->getIdunidadmedida());
        }

        $this->aUnidadmedida = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Unidadmedida object, it will not be re-added.
        if ($v !== null) {
            $v->addProducto($this);
        }


        return $this;
    }


    /**
     * Get the associated Unidadmedida object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Unidadmedida The associated Unidadmedida object.
     * @throws PropelException
     */
    public function getUnidadmedida(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aUnidadmedida === null && ($this->idunidadmedida !== null) && $doQuery) {
            $this->aUnidadmedida = UnidadmedidaQuery::create()->findPk($this->idunidadmedida, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUnidadmedida->addProductos($this);
             */
        }

        return $this->aUnidadmedida;
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
        if ('Codigobarras' == $relationName) {
            $this->initCodigobarrass();
        }
        if ('Compradetalle' == $relationName) {
            $this->initCompradetalles();
        }
        if ('Devoluciondetalle' == $relationName) {
            $this->initDevoluciondetalles();
        }
        if ('Notacreditodetalle' == $relationName) {
            $this->initNotacreditodetalles();
        }
        if ('Ordentablajeria' == $relationName) {
            $this->initOrdentablajerias();
        }
        if ('Ordentablajeriadetalle' == $relationName) {
            $this->initOrdentablajeriadetalles();
        }
        if ('Plantillatablajeria' == $relationName) {
            $this->initPlantillatablajerias();
        }
        if ('Plantillatablajeriadetalle' == $relationName) {
            $this->initPlantillatablajeriadetalles();
        }
        if ('Productosucursalalmacen' == $relationName) {
            $this->initProductosucursalalmacens();
        }
        if ('RecetaRelatedByIdproducto' == $relationName) {
            $this->initRecetasRelatedByIdproducto();
        }
        if ('RecetaRelatedByIdproductoreceta' == $relationName) {
            $this->initRecetasRelatedByIdproductoreceta();
        }
        if ('Requisiciondetalle' == $relationName) {
            $this->initRequisiciondetalles();
        }
        if ('Ventadetalle' == $relationName) {
            $this->initVentadetalles();
        }
    }

    /**
     * Clears out the collCodigobarrass collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Producto The current object (for fluent API support)
     * @see        addCodigobarrass()
     */
    public function clearCodigobarrass()
    {
        $this->collCodigobarrass = null; // important to set this to null since that means it is uninitialized
        $this->collCodigobarrassPartial = null;

        return $this;
    }

    /**
     * reset is the collCodigobarrass collection loaded partially
     *
     * @return void
     */
    public function resetPartialCodigobarrass($v = true)
    {
        $this->collCodigobarrassPartial = $v;
    }

    /**
     * Initializes the collCodigobarrass collection.
     *
     * By default this just sets the collCodigobarrass collection to an empty array (like clearcollCodigobarrass());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCodigobarrass($overrideExisting = true)
    {
        if (null !== $this->collCodigobarrass && !$overrideExisting) {
            return;
        }
        $this->collCodigobarrass = new PropelObjectCollection();
        $this->collCodigobarrass->setModel('Codigobarras');
    }

    /**
     * Gets an array of Codigobarras objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Producto is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Codigobarras[] List of Codigobarras objects
     * @throws PropelException
     */
    public function getCodigobarrass($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCodigobarrassPartial && !$this->isNew();
        if (null === $this->collCodigobarrass || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCodigobarrass) {
                // return empty collection
                $this->initCodigobarrass();
            } else {
                $collCodigobarrass = CodigobarrasQuery::create(null, $criteria)
                    ->filterByProducto($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCodigobarrassPartial && count($collCodigobarrass)) {
                      $this->initCodigobarrass(false);

                      foreach ($collCodigobarrass as $obj) {
                        if (false == $this->collCodigobarrass->contains($obj)) {
                          $this->collCodigobarrass->append($obj);
                        }
                      }

                      $this->collCodigobarrassPartial = true;
                    }

                    $collCodigobarrass->getInternalIterator()->rewind();

                    return $collCodigobarrass;
                }

                if ($partial && $this->collCodigobarrass) {
                    foreach ($this->collCodigobarrass as $obj) {
                        if ($obj->isNew()) {
                            $collCodigobarrass[] = $obj;
                        }
                    }
                }

                $this->collCodigobarrass = $collCodigobarrass;
                $this->collCodigobarrassPartial = false;
            }
        }

        return $this->collCodigobarrass;
    }

    /**
     * Sets a collection of Codigobarras objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $codigobarrass A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Producto The current object (for fluent API support)
     */
    public function setCodigobarrass(PropelCollection $codigobarrass, PropelPDO $con = null)
    {
        $codigobarrassToDelete = $this->getCodigobarrass(new Criteria(), $con)->diff($codigobarrass);


        $this->codigobarrassScheduledForDeletion = $codigobarrassToDelete;

        foreach ($codigobarrassToDelete as $codigobarrasRemoved) {
            $codigobarrasRemoved->setProducto(null);
        }

        $this->collCodigobarrass = null;
        foreach ($codigobarrass as $codigobarras) {
            $this->addCodigobarras($codigobarras);
        }

        $this->collCodigobarrass = $codigobarrass;
        $this->collCodigobarrassPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Codigobarras objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Codigobarras objects.
     * @throws PropelException
     */
    public function countCodigobarrass(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCodigobarrassPartial && !$this->isNew();
        if (null === $this->collCodigobarrass || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCodigobarrass) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCodigobarrass());
            }
            $query = CodigobarrasQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProducto($this)
                ->count($con);
        }

        return count($this->collCodigobarrass);
    }

    /**
     * Method called to associate a Codigobarras object to this object
     * through the Codigobarras foreign key attribute.
     *
     * @param    Codigobarras $l Codigobarras
     * @return Producto The current object (for fluent API support)
     */
    public function addCodigobarras(Codigobarras $l)
    {
        if ($this->collCodigobarrass === null) {
            $this->initCodigobarrass();
            $this->collCodigobarrassPartial = true;
        }

        if (!in_array($l, $this->collCodigobarrass->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCodigobarras($l);

            if ($this->codigobarrassScheduledForDeletion and $this->codigobarrassScheduledForDeletion->contains($l)) {
                $this->codigobarrassScheduledForDeletion->remove($this->codigobarrassScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Codigobarras $codigobarras The codigobarras object to add.
     */
    protected function doAddCodigobarras($codigobarras)
    {
        $this->collCodigobarrass[]= $codigobarras;
        $codigobarras->setProducto($this);
    }

    /**
     * @param	Codigobarras $codigobarras The codigobarras object to remove.
     * @return Producto The current object (for fluent API support)
     */
    public function removeCodigobarras($codigobarras)
    {
        if ($this->getCodigobarrass()->contains($codigobarras)) {
            $this->collCodigobarrass->remove($this->collCodigobarrass->search($codigobarras));
            if (null === $this->codigobarrassScheduledForDeletion) {
                $this->codigobarrassScheduledForDeletion = clone $this->collCodigobarrass;
                $this->codigobarrassScheduledForDeletion->clear();
            }
            $this->codigobarrassScheduledForDeletion[]= clone $codigobarras;
            $codigobarras->setProducto(null);
        }

        return $this;
    }

    /**
     * Clears out the collCompradetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Producto The current object (for fluent API support)
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
     * If this Producto is new, it will return
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
                    ->filterByProducto($this)
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
     * @return Producto The current object (for fluent API support)
     */
    public function setCompradetalles(PropelCollection $compradetalles, PropelPDO $con = null)
    {
        $compradetallesToDelete = $this->getCompradetalles(new Criteria(), $con)->diff($compradetalles);


        $this->compradetallesScheduledForDeletion = $compradetallesToDelete;

        foreach ($compradetallesToDelete as $compradetalleRemoved) {
            $compradetalleRemoved->setProducto(null);
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
                ->filterByProducto($this)
                ->count($con);
        }

        return count($this->collCompradetalles);
    }

    /**
     * Method called to associate a Compradetalle object to this object
     * through the Compradetalle foreign key attribute.
     *
     * @param    Compradetalle $l Compradetalle
     * @return Producto The current object (for fluent API support)
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
        $compradetalle->setProducto($this);
    }

    /**
     * @param	Compradetalle $compradetalle The compradetalle object to remove.
     * @return Producto The current object (for fluent API support)
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
            $compradetalle->setProducto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Compradetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
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
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Compradetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Compradetalle[] List of Compradetalle objects
     */
    public function getCompradetallesJoinCompra($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CompradetalleQuery::create(null, $criteria);
        $query->joinWith('Compra', $join_behavior);

        return $this->getCompradetalles($query, $con);
    }

    /**
     * Clears out the collDevoluciondetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Producto The current object (for fluent API support)
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
     * If this Producto is new, it will return
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
                    ->filterByProducto($this)
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
     * @return Producto The current object (for fluent API support)
     */
    public function setDevoluciondetalles(PropelCollection $devoluciondetalles, PropelPDO $con = null)
    {
        $devoluciondetallesToDelete = $this->getDevoluciondetalles(new Criteria(), $con)->diff($devoluciondetalles);


        $this->devoluciondetallesScheduledForDeletion = $devoluciondetallesToDelete;

        foreach ($devoluciondetallesToDelete as $devoluciondetalleRemoved) {
            $devoluciondetalleRemoved->setProducto(null);
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
                ->filterByProducto($this)
                ->count($con);
        }

        return count($this->collDevoluciondetalles);
    }

    /**
     * Method called to associate a Devoluciondetalle object to this object
     * through the Devoluciondetalle foreign key attribute.
     *
     * @param    Devoluciondetalle $l Devoluciondetalle
     * @return Producto The current object (for fluent API support)
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
        $devoluciondetalle->setProducto($this);
    }

    /**
     * @param	Devoluciondetalle $devoluciondetalle The devoluciondetalle object to remove.
     * @return Producto The current object (for fluent API support)
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
            $devoluciondetalle->setProducto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Devoluciondetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
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
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Devoluciondetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Devoluciondetalle[] List of Devoluciondetalle objects
     */
    public function getDevoluciondetallesJoinDevolucion($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = DevoluciondetalleQuery::create(null, $criteria);
        $query->joinWith('Devolucion', $join_behavior);

        return $this->getDevoluciondetalles($query, $con);
    }

    /**
     * Clears out the collNotacreditodetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Producto The current object (for fluent API support)
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
     * If this Producto is new, it will return
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
                    ->filterByProducto($this)
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
     * @return Producto The current object (for fluent API support)
     */
    public function setNotacreditodetalles(PropelCollection $notacreditodetalles, PropelPDO $con = null)
    {
        $notacreditodetallesToDelete = $this->getNotacreditodetalles(new Criteria(), $con)->diff($notacreditodetalles);


        $this->notacreditodetallesScheduledForDeletion = $notacreditodetallesToDelete;

        foreach ($notacreditodetallesToDelete as $notacreditodetalleRemoved) {
            $notacreditodetalleRemoved->setProducto(null);
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
                ->filterByProducto($this)
                ->count($con);
        }

        return count($this->collNotacreditodetalles);
    }

    /**
     * Method called to associate a Notacreditodetalle object to this object
     * through the Notacreditodetalle foreign key attribute.
     *
     * @param    Notacreditodetalle $l Notacreditodetalle
     * @return Producto The current object (for fluent API support)
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
        $notacreditodetalle->setProducto($this);
    }

    /**
     * @param	Notacreditodetalle $notacreditodetalle The notacreditodetalle object to remove.
     * @return Producto The current object (for fluent API support)
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
            $notacreditodetalle->setProducto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Notacreditodetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
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
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Notacreditodetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Notacreditodetalle[] List of Notacreditodetalle objects
     */
    public function getNotacreditodetallesJoinNotacredito($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = NotacreditodetalleQuery::create(null, $criteria);
        $query->joinWith('Notacredito', $join_behavior);

        return $this->getNotacreditodetalles($query, $con);
    }

    /**
     * Clears out the collOrdentablajerias collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Producto The current object (for fluent API support)
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
     * If this Producto is new, it will return
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
                    ->filterByProducto($this)
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
     * @return Producto The current object (for fluent API support)
     */
    public function setOrdentablajerias(PropelCollection $ordentablajerias, PropelPDO $con = null)
    {
        $ordentablajeriasToDelete = $this->getOrdentablajerias(new Criteria(), $con)->diff($ordentablajerias);


        $this->ordentablajeriasScheduledForDeletion = $ordentablajeriasToDelete;

        foreach ($ordentablajeriasToDelete as $ordentablajeriaRemoved) {
            $ordentablajeriaRemoved->setProducto(null);
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
                ->filterByProducto($this)
                ->count($con);
        }

        return count($this->collOrdentablajerias);
    }

    /**
     * Method called to associate a Ordentablajeria object to this object
     * through the Ordentablajeria foreign key attribute.
     *
     * @param    Ordentablajeria $l Ordentablajeria
     * @return Producto The current object (for fluent API support)
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
        $ordentablajeria->setProducto($this);
    }

    /**
     * @param	Ordentablajeria $ordentablajeria The ordentablajeria object to remove.
     * @return Producto The current object (for fluent API support)
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
            $ordentablajeria->setProducto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Ordentablajerias from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
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
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Ordentablajerias from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
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
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Ordentablajerias from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
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
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Ordentablajerias from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
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
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Ordentablajerias from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
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
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Ordentablajerias from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
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
     * Clears out the collOrdentablajeriadetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Producto The current object (for fluent API support)
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
     * If this Producto is new, it will return
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
                    ->filterByProducto($this)
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
     * @return Producto The current object (for fluent API support)
     */
    public function setOrdentablajeriadetalles(PropelCollection $ordentablajeriadetalles, PropelPDO $con = null)
    {
        $ordentablajeriadetallesToDelete = $this->getOrdentablajeriadetalles(new Criteria(), $con)->diff($ordentablajeriadetalles);


        $this->ordentablajeriadetallesScheduledForDeletion = $ordentablajeriadetallesToDelete;

        foreach ($ordentablajeriadetallesToDelete as $ordentablajeriadetalleRemoved) {
            $ordentablajeriadetalleRemoved->setProducto(null);
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
                ->filterByProducto($this)
                ->count($con);
        }

        return count($this->collOrdentablajeriadetalles);
    }

    /**
     * Method called to associate a Ordentablajeriadetalle object to this object
     * through the Ordentablajeriadetalle foreign key attribute.
     *
     * @param    Ordentablajeriadetalle $l Ordentablajeriadetalle
     * @return Producto The current object (for fluent API support)
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
        $ordentablajeriadetalle->setProducto($this);
    }

    /**
     * @param	Ordentablajeriadetalle $ordentablajeriadetalle The ordentablajeriadetalle object to remove.
     * @return Producto The current object (for fluent API support)
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
            $ordentablajeriadetalle->setProducto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Ordentablajeriadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ordentablajeriadetalle[] List of Ordentablajeriadetalle objects
     */
    public function getOrdentablajeriadetallesJoinOrdentablajeria($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OrdentablajeriadetalleQuery::create(null, $criteria);
        $query->joinWith('Ordentablajeria', $join_behavior);

        return $this->getOrdentablajeriadetalles($query, $con);
    }

    /**
     * Clears out the collPlantillatablajerias collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Producto The current object (for fluent API support)
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
     * If this Producto is new, it will return
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
                    ->filterByProducto($this)
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
     * @return Producto The current object (for fluent API support)
     */
    public function setPlantillatablajerias(PropelCollection $plantillatablajerias, PropelPDO $con = null)
    {
        $plantillatablajeriasToDelete = $this->getPlantillatablajerias(new Criteria(), $con)->diff($plantillatablajerias);


        $this->plantillatablajeriasScheduledForDeletion = $plantillatablajeriasToDelete;

        foreach ($plantillatablajeriasToDelete as $plantillatablajeriaRemoved) {
            $plantillatablajeriaRemoved->setProducto(null);
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
                ->filterByProducto($this)
                ->count($con);
        }

        return count($this->collPlantillatablajerias);
    }

    /**
     * Method called to associate a Plantillatablajeria object to this object
     * through the Plantillatablajeria foreign key attribute.
     *
     * @param    Plantillatablajeria $l Plantillatablajeria
     * @return Producto The current object (for fluent API support)
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
        $plantillatablajeria->setProducto($this);
    }

    /**
     * @param	Plantillatablajeria $plantillatablajeria The plantillatablajeria object to remove.
     * @return Producto The current object (for fluent API support)
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
            $plantillatablajeria->setProducto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Plantillatablajerias from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Plantillatablajeria[] List of Plantillatablajeria objects
     */
    public function getPlantillatablajeriasJoinEmpresa($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PlantillatablajeriaQuery::create(null, $criteria);
        $query->joinWith('Empresa', $join_behavior);

        return $this->getPlantillatablajerias($query, $con);
    }

    /**
     * Clears out the collPlantillatablajeriadetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Producto The current object (for fluent API support)
     * @see        addPlantillatablajeriadetalles()
     */
    public function clearPlantillatablajeriadetalles()
    {
        $this->collPlantillatablajeriadetalles = null; // important to set this to null since that means it is uninitialized
        $this->collPlantillatablajeriadetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collPlantillatablajeriadetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialPlantillatablajeriadetalles($v = true)
    {
        $this->collPlantillatablajeriadetallesPartial = $v;
    }

    /**
     * Initializes the collPlantillatablajeriadetalles collection.
     *
     * By default this just sets the collPlantillatablajeriadetalles collection to an empty array (like clearcollPlantillatablajeriadetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPlantillatablajeriadetalles($overrideExisting = true)
    {
        if (null !== $this->collPlantillatablajeriadetalles && !$overrideExisting) {
            return;
        }
        $this->collPlantillatablajeriadetalles = new PropelObjectCollection();
        $this->collPlantillatablajeriadetalles->setModel('Plantillatablajeriadetalle');
    }

    /**
     * Gets an array of Plantillatablajeriadetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Producto is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Plantillatablajeriadetalle[] List of Plantillatablajeriadetalle objects
     * @throws PropelException
     */
    public function getPlantillatablajeriadetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collPlantillatablajeriadetallesPartial && !$this->isNew();
        if (null === $this->collPlantillatablajeriadetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPlantillatablajeriadetalles) {
                // return empty collection
                $this->initPlantillatablajeriadetalles();
            } else {
                $collPlantillatablajeriadetalles = PlantillatablajeriadetalleQuery::create(null, $criteria)
                    ->filterByProducto($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collPlantillatablajeriadetallesPartial && count($collPlantillatablajeriadetalles)) {
                      $this->initPlantillatablajeriadetalles(false);

                      foreach ($collPlantillatablajeriadetalles as $obj) {
                        if (false == $this->collPlantillatablajeriadetalles->contains($obj)) {
                          $this->collPlantillatablajeriadetalles->append($obj);
                        }
                      }

                      $this->collPlantillatablajeriadetallesPartial = true;
                    }

                    $collPlantillatablajeriadetalles->getInternalIterator()->rewind();

                    return $collPlantillatablajeriadetalles;
                }

                if ($partial && $this->collPlantillatablajeriadetalles) {
                    foreach ($this->collPlantillatablajeriadetalles as $obj) {
                        if ($obj->isNew()) {
                            $collPlantillatablajeriadetalles[] = $obj;
                        }
                    }
                }

                $this->collPlantillatablajeriadetalles = $collPlantillatablajeriadetalles;
                $this->collPlantillatablajeriadetallesPartial = false;
            }
        }

        return $this->collPlantillatablajeriadetalles;
    }

    /**
     * Sets a collection of Plantillatablajeriadetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $plantillatablajeriadetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Producto The current object (for fluent API support)
     */
    public function setPlantillatablajeriadetalles(PropelCollection $plantillatablajeriadetalles, PropelPDO $con = null)
    {
        $plantillatablajeriadetallesToDelete = $this->getPlantillatablajeriadetalles(new Criteria(), $con)->diff($plantillatablajeriadetalles);


        $this->plantillatablajeriadetallesScheduledForDeletion = $plantillatablajeriadetallesToDelete;

        foreach ($plantillatablajeriadetallesToDelete as $plantillatablajeriadetalleRemoved) {
            $plantillatablajeriadetalleRemoved->setProducto(null);
        }

        $this->collPlantillatablajeriadetalles = null;
        foreach ($plantillatablajeriadetalles as $plantillatablajeriadetalle) {
            $this->addPlantillatablajeriadetalle($plantillatablajeriadetalle);
        }

        $this->collPlantillatablajeriadetalles = $plantillatablajeriadetalles;
        $this->collPlantillatablajeriadetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Plantillatablajeriadetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Plantillatablajeriadetalle objects.
     * @throws PropelException
     */
    public function countPlantillatablajeriadetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collPlantillatablajeriadetallesPartial && !$this->isNew();
        if (null === $this->collPlantillatablajeriadetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPlantillatablajeriadetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPlantillatablajeriadetalles());
            }
            $query = PlantillatablajeriadetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProducto($this)
                ->count($con);
        }

        return count($this->collPlantillatablajeriadetalles);
    }

    /**
     * Method called to associate a Plantillatablajeriadetalle object to this object
     * through the Plantillatablajeriadetalle foreign key attribute.
     *
     * @param    Plantillatablajeriadetalle $l Plantillatablajeriadetalle
     * @return Producto The current object (for fluent API support)
     */
    public function addPlantillatablajeriadetalle(Plantillatablajeriadetalle $l)
    {
        if ($this->collPlantillatablajeriadetalles === null) {
            $this->initPlantillatablajeriadetalles();
            $this->collPlantillatablajeriadetallesPartial = true;
        }

        if (!in_array($l, $this->collPlantillatablajeriadetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddPlantillatablajeriadetalle($l);

            if ($this->plantillatablajeriadetallesScheduledForDeletion and $this->plantillatablajeriadetallesScheduledForDeletion->contains($l)) {
                $this->plantillatablajeriadetallesScheduledForDeletion->remove($this->plantillatablajeriadetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Plantillatablajeriadetalle $plantillatablajeriadetalle The plantillatablajeriadetalle object to add.
     */
    protected function doAddPlantillatablajeriadetalle($plantillatablajeriadetalle)
    {
        $this->collPlantillatablajeriadetalles[]= $plantillatablajeriadetalle;
        $plantillatablajeriadetalle->setProducto($this);
    }

    /**
     * @param	Plantillatablajeriadetalle $plantillatablajeriadetalle The plantillatablajeriadetalle object to remove.
     * @return Producto The current object (for fluent API support)
     */
    public function removePlantillatablajeriadetalle($plantillatablajeriadetalle)
    {
        if ($this->getPlantillatablajeriadetalles()->contains($plantillatablajeriadetalle)) {
            $this->collPlantillatablajeriadetalles->remove($this->collPlantillatablajeriadetalles->search($plantillatablajeriadetalle));
            if (null === $this->plantillatablajeriadetallesScheduledForDeletion) {
                $this->plantillatablajeriadetallesScheduledForDeletion = clone $this->collPlantillatablajeriadetalles;
                $this->plantillatablajeriadetallesScheduledForDeletion->clear();
            }
            $this->plantillatablajeriadetallesScheduledForDeletion[]= clone $plantillatablajeriadetalle;
            $plantillatablajeriadetalle->setProducto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Plantillatablajeriadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Plantillatablajeriadetalle[] List of Plantillatablajeriadetalle objects
     */
    public function getPlantillatablajeriadetallesJoinPlantillatablajeria($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PlantillatablajeriadetalleQuery::create(null, $criteria);
        $query->joinWith('Plantillatablajeria', $join_behavior);

        return $this->getPlantillatablajeriadetalles($query, $con);
    }

    /**
     * Clears out the collProductosucursalalmacens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Producto The current object (for fluent API support)
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
     * If this Producto is new, it will return
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
                    ->filterByProducto($this)
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
     * @return Producto The current object (for fluent API support)
     */
    public function setProductosucursalalmacens(PropelCollection $productosucursalalmacens, PropelPDO $con = null)
    {
        $productosucursalalmacensToDelete = $this->getProductosucursalalmacens(new Criteria(), $con)->diff($productosucursalalmacens);


        $this->productosucursalalmacensScheduledForDeletion = $productosucursalalmacensToDelete;

        foreach ($productosucursalalmacensToDelete as $productosucursalalmacenRemoved) {
            $productosucursalalmacenRemoved->setProducto(null);
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
                ->filterByProducto($this)
                ->count($con);
        }

        return count($this->collProductosucursalalmacens);
    }

    /**
     * Method called to associate a Productosucursalalmacen object to this object
     * through the Productosucursalalmacen foreign key attribute.
     *
     * @param    Productosucursalalmacen $l Productosucursalalmacen
     * @return Producto The current object (for fluent API support)
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
        $productosucursalalmacen->setProducto($this);
    }

    /**
     * @param	Productosucursalalmacen $productosucursalalmacen The productosucursalalmacen object to remove.
     * @return Producto The current object (for fluent API support)
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
            $productosucursalalmacen->setProducto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Productosucursalalmacens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
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
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Productosucursalalmacens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Productosucursalalmacen[] List of Productosucursalalmacen objects
     */
    public function getProductosucursalalmacensJoinEmpresa($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProductosucursalalmacenQuery::create(null, $criteria);
        $query->joinWith('Empresa', $join_behavior);

        return $this->getProductosucursalalmacens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Productosucursalalmacens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
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
     * Clears out the collRecetasRelatedByIdproducto collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Producto The current object (for fluent API support)
     * @see        addRecetasRelatedByIdproducto()
     */
    public function clearRecetasRelatedByIdproducto()
    {
        $this->collRecetasRelatedByIdproducto = null; // important to set this to null since that means it is uninitialized
        $this->collRecetasRelatedByIdproductoPartial = null;

        return $this;
    }

    /**
     * reset is the collRecetasRelatedByIdproducto collection loaded partially
     *
     * @return void
     */
    public function resetPartialRecetasRelatedByIdproducto($v = true)
    {
        $this->collRecetasRelatedByIdproductoPartial = $v;
    }

    /**
     * Initializes the collRecetasRelatedByIdproducto collection.
     *
     * By default this just sets the collRecetasRelatedByIdproducto collection to an empty array (like clearcollRecetasRelatedByIdproducto());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initRecetasRelatedByIdproducto($overrideExisting = true)
    {
        if (null !== $this->collRecetasRelatedByIdproducto && !$overrideExisting) {
            return;
        }
        $this->collRecetasRelatedByIdproducto = new PropelObjectCollection();
        $this->collRecetasRelatedByIdproducto->setModel('Receta');
    }

    /**
     * Gets an array of Receta objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Producto is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Receta[] List of Receta objects
     * @throws PropelException
     */
    public function getRecetasRelatedByIdproducto($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collRecetasRelatedByIdproductoPartial && !$this->isNew();
        if (null === $this->collRecetasRelatedByIdproducto || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collRecetasRelatedByIdproducto) {
                // return empty collection
                $this->initRecetasRelatedByIdproducto();
            } else {
                $collRecetasRelatedByIdproducto = RecetaQuery::create(null, $criteria)
                    ->filterByProductoRelatedByIdproducto($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collRecetasRelatedByIdproductoPartial && count($collRecetasRelatedByIdproducto)) {
                      $this->initRecetasRelatedByIdproducto(false);

                      foreach ($collRecetasRelatedByIdproducto as $obj) {
                        if (false == $this->collRecetasRelatedByIdproducto->contains($obj)) {
                          $this->collRecetasRelatedByIdproducto->append($obj);
                        }
                      }

                      $this->collRecetasRelatedByIdproductoPartial = true;
                    }

                    $collRecetasRelatedByIdproducto->getInternalIterator()->rewind();

                    return $collRecetasRelatedByIdproducto;
                }

                if ($partial && $this->collRecetasRelatedByIdproducto) {
                    foreach ($this->collRecetasRelatedByIdproducto as $obj) {
                        if ($obj->isNew()) {
                            $collRecetasRelatedByIdproducto[] = $obj;
                        }
                    }
                }

                $this->collRecetasRelatedByIdproducto = $collRecetasRelatedByIdproducto;
                $this->collRecetasRelatedByIdproductoPartial = false;
            }
        }

        return $this->collRecetasRelatedByIdproducto;
    }

    /**
     * Sets a collection of RecetaRelatedByIdproducto objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $recetasRelatedByIdproducto A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Producto The current object (for fluent API support)
     */
    public function setRecetasRelatedByIdproducto(PropelCollection $recetasRelatedByIdproducto, PropelPDO $con = null)
    {
        $recetasRelatedByIdproductoToDelete = $this->getRecetasRelatedByIdproducto(new Criteria(), $con)->diff($recetasRelatedByIdproducto);


        $this->recetasRelatedByIdproductoScheduledForDeletion = $recetasRelatedByIdproductoToDelete;

        foreach ($recetasRelatedByIdproductoToDelete as $recetaRelatedByIdproductoRemoved) {
            $recetaRelatedByIdproductoRemoved->setProductoRelatedByIdproducto(null);
        }

        $this->collRecetasRelatedByIdproducto = null;
        foreach ($recetasRelatedByIdproducto as $recetaRelatedByIdproducto) {
            $this->addRecetaRelatedByIdproducto($recetaRelatedByIdproducto);
        }

        $this->collRecetasRelatedByIdproducto = $recetasRelatedByIdproducto;
        $this->collRecetasRelatedByIdproductoPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Receta objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Receta objects.
     * @throws PropelException
     */
    public function countRecetasRelatedByIdproducto(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collRecetasRelatedByIdproductoPartial && !$this->isNew();
        if (null === $this->collRecetasRelatedByIdproducto || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collRecetasRelatedByIdproducto) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getRecetasRelatedByIdproducto());
            }
            $query = RecetaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProductoRelatedByIdproducto($this)
                ->count($con);
        }

        return count($this->collRecetasRelatedByIdproducto);
    }

    /**
     * Method called to associate a Receta object to this object
     * through the Receta foreign key attribute.
     *
     * @param    Receta $l Receta
     * @return Producto The current object (for fluent API support)
     */
    public function addRecetaRelatedByIdproducto(Receta $l)
    {
        if ($this->collRecetasRelatedByIdproducto === null) {
            $this->initRecetasRelatedByIdproducto();
            $this->collRecetasRelatedByIdproductoPartial = true;
        }

        if (!in_array($l, $this->collRecetasRelatedByIdproducto->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddRecetaRelatedByIdproducto($l);

            if ($this->recetasRelatedByIdproductoScheduledForDeletion and $this->recetasRelatedByIdproductoScheduledForDeletion->contains($l)) {
                $this->recetasRelatedByIdproductoScheduledForDeletion->remove($this->recetasRelatedByIdproductoScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	RecetaRelatedByIdproducto $recetaRelatedByIdproducto The recetaRelatedByIdproducto object to add.
     */
    protected function doAddRecetaRelatedByIdproducto($recetaRelatedByIdproducto)
    {
        $this->collRecetasRelatedByIdproducto[]= $recetaRelatedByIdproducto;
        $recetaRelatedByIdproducto->setProductoRelatedByIdproducto($this);
    }

    /**
     * @param	RecetaRelatedByIdproducto $recetaRelatedByIdproducto The recetaRelatedByIdproducto object to remove.
     * @return Producto The current object (for fluent API support)
     */
    public function removeRecetaRelatedByIdproducto($recetaRelatedByIdproducto)
    {
        if ($this->getRecetasRelatedByIdproducto()->contains($recetaRelatedByIdproducto)) {
            $this->collRecetasRelatedByIdproducto->remove($this->collRecetasRelatedByIdproducto->search($recetaRelatedByIdproducto));
            if (null === $this->recetasRelatedByIdproductoScheduledForDeletion) {
                $this->recetasRelatedByIdproductoScheduledForDeletion = clone $this->collRecetasRelatedByIdproducto;
                $this->recetasRelatedByIdproductoScheduledForDeletion->clear();
            }
            $this->recetasRelatedByIdproductoScheduledForDeletion[]= clone $recetaRelatedByIdproducto;
            $recetaRelatedByIdproducto->setProductoRelatedByIdproducto(null);
        }

        return $this;
    }

    /**
     * Clears out the collRecetasRelatedByIdproductoreceta collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Producto The current object (for fluent API support)
     * @see        addRecetasRelatedByIdproductoreceta()
     */
    public function clearRecetasRelatedByIdproductoreceta()
    {
        $this->collRecetasRelatedByIdproductoreceta = null; // important to set this to null since that means it is uninitialized
        $this->collRecetasRelatedByIdproductorecetaPartial = null;

        return $this;
    }

    /**
     * reset is the collRecetasRelatedByIdproductoreceta collection loaded partially
     *
     * @return void
     */
    public function resetPartialRecetasRelatedByIdproductoreceta($v = true)
    {
        $this->collRecetasRelatedByIdproductorecetaPartial = $v;
    }

    /**
     * Initializes the collRecetasRelatedByIdproductoreceta collection.
     *
     * By default this just sets the collRecetasRelatedByIdproductoreceta collection to an empty array (like clearcollRecetasRelatedByIdproductoreceta());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initRecetasRelatedByIdproductoreceta($overrideExisting = true)
    {
        if (null !== $this->collRecetasRelatedByIdproductoreceta && !$overrideExisting) {
            return;
        }
        $this->collRecetasRelatedByIdproductoreceta = new PropelObjectCollection();
        $this->collRecetasRelatedByIdproductoreceta->setModel('Receta');
    }

    /**
     * Gets an array of Receta objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Producto is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Receta[] List of Receta objects
     * @throws PropelException
     */
    public function getRecetasRelatedByIdproductoreceta($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collRecetasRelatedByIdproductorecetaPartial && !$this->isNew();
        if (null === $this->collRecetasRelatedByIdproductoreceta || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collRecetasRelatedByIdproductoreceta) {
                // return empty collection
                $this->initRecetasRelatedByIdproductoreceta();
            } else {
                $collRecetasRelatedByIdproductoreceta = RecetaQuery::create(null, $criteria)
                    ->filterByProductoRelatedByIdproductoreceta($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collRecetasRelatedByIdproductorecetaPartial && count($collRecetasRelatedByIdproductoreceta)) {
                      $this->initRecetasRelatedByIdproductoreceta(false);

                      foreach ($collRecetasRelatedByIdproductoreceta as $obj) {
                        if (false == $this->collRecetasRelatedByIdproductoreceta->contains($obj)) {
                          $this->collRecetasRelatedByIdproductoreceta->append($obj);
                        }
                      }

                      $this->collRecetasRelatedByIdproductorecetaPartial = true;
                    }

                    $collRecetasRelatedByIdproductoreceta->getInternalIterator()->rewind();

                    return $collRecetasRelatedByIdproductoreceta;
                }

                if ($partial && $this->collRecetasRelatedByIdproductoreceta) {
                    foreach ($this->collRecetasRelatedByIdproductoreceta as $obj) {
                        if ($obj->isNew()) {
                            $collRecetasRelatedByIdproductoreceta[] = $obj;
                        }
                    }
                }

                $this->collRecetasRelatedByIdproductoreceta = $collRecetasRelatedByIdproductoreceta;
                $this->collRecetasRelatedByIdproductorecetaPartial = false;
            }
        }

        return $this->collRecetasRelatedByIdproductoreceta;
    }

    /**
     * Sets a collection of RecetaRelatedByIdproductoreceta objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $recetasRelatedByIdproductoreceta A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Producto The current object (for fluent API support)
     */
    public function setRecetasRelatedByIdproductoreceta(PropelCollection $recetasRelatedByIdproductoreceta, PropelPDO $con = null)
    {
        $recetasRelatedByIdproductorecetaToDelete = $this->getRecetasRelatedByIdproductoreceta(new Criteria(), $con)->diff($recetasRelatedByIdproductoreceta);


        $this->recetasRelatedByIdproductorecetaScheduledForDeletion = $recetasRelatedByIdproductorecetaToDelete;

        foreach ($recetasRelatedByIdproductorecetaToDelete as $recetaRelatedByIdproductorecetaRemoved) {
            $recetaRelatedByIdproductorecetaRemoved->setProductoRelatedByIdproductoreceta(null);
        }

        $this->collRecetasRelatedByIdproductoreceta = null;
        foreach ($recetasRelatedByIdproductoreceta as $recetaRelatedByIdproductoreceta) {
            $this->addRecetaRelatedByIdproductoreceta($recetaRelatedByIdproductoreceta);
        }

        $this->collRecetasRelatedByIdproductoreceta = $recetasRelatedByIdproductoreceta;
        $this->collRecetasRelatedByIdproductorecetaPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Receta objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Receta objects.
     * @throws PropelException
     */
    public function countRecetasRelatedByIdproductoreceta(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collRecetasRelatedByIdproductorecetaPartial && !$this->isNew();
        if (null === $this->collRecetasRelatedByIdproductoreceta || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collRecetasRelatedByIdproductoreceta) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getRecetasRelatedByIdproductoreceta());
            }
            $query = RecetaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProductoRelatedByIdproductoreceta($this)
                ->count($con);
        }

        return count($this->collRecetasRelatedByIdproductoreceta);
    }

    /**
     * Method called to associate a Receta object to this object
     * through the Receta foreign key attribute.
     *
     * @param    Receta $l Receta
     * @return Producto The current object (for fluent API support)
     */
    public function addRecetaRelatedByIdproductoreceta(Receta $l)
    {
        if ($this->collRecetasRelatedByIdproductoreceta === null) {
            $this->initRecetasRelatedByIdproductoreceta();
            $this->collRecetasRelatedByIdproductorecetaPartial = true;
        }

        if (!in_array($l, $this->collRecetasRelatedByIdproductoreceta->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddRecetaRelatedByIdproductoreceta($l);

            if ($this->recetasRelatedByIdproductorecetaScheduledForDeletion and $this->recetasRelatedByIdproductorecetaScheduledForDeletion->contains($l)) {
                $this->recetasRelatedByIdproductorecetaScheduledForDeletion->remove($this->recetasRelatedByIdproductorecetaScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	RecetaRelatedByIdproductoreceta $recetaRelatedByIdproductoreceta The recetaRelatedByIdproductoreceta object to add.
     */
    protected function doAddRecetaRelatedByIdproductoreceta($recetaRelatedByIdproductoreceta)
    {
        $this->collRecetasRelatedByIdproductoreceta[]= $recetaRelatedByIdproductoreceta;
        $recetaRelatedByIdproductoreceta->setProductoRelatedByIdproductoreceta($this);
    }

    /**
     * @param	RecetaRelatedByIdproductoreceta $recetaRelatedByIdproductoreceta The recetaRelatedByIdproductoreceta object to remove.
     * @return Producto The current object (for fluent API support)
     */
    public function removeRecetaRelatedByIdproductoreceta($recetaRelatedByIdproductoreceta)
    {
        if ($this->getRecetasRelatedByIdproductoreceta()->contains($recetaRelatedByIdproductoreceta)) {
            $this->collRecetasRelatedByIdproductoreceta->remove($this->collRecetasRelatedByIdproductoreceta->search($recetaRelatedByIdproductoreceta));
            if (null === $this->recetasRelatedByIdproductorecetaScheduledForDeletion) {
                $this->recetasRelatedByIdproductorecetaScheduledForDeletion = clone $this->collRecetasRelatedByIdproductoreceta;
                $this->recetasRelatedByIdproductorecetaScheduledForDeletion->clear();
            }
            $this->recetasRelatedByIdproductorecetaScheduledForDeletion[]= clone $recetaRelatedByIdproductoreceta;
            $recetaRelatedByIdproductoreceta->setProductoRelatedByIdproductoreceta(null);
        }

        return $this;
    }

    /**
     * Clears out the collRequisiciondetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Producto The current object (for fluent API support)
     * @see        addRequisiciondetalles()
     */
    public function clearRequisiciondetalles()
    {
        $this->collRequisiciondetalles = null; // important to set this to null since that means it is uninitialized
        $this->collRequisiciondetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collRequisiciondetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialRequisiciondetalles($v = true)
    {
        $this->collRequisiciondetallesPartial = $v;
    }

    /**
     * Initializes the collRequisiciondetalles collection.
     *
     * By default this just sets the collRequisiciondetalles collection to an empty array (like clearcollRequisiciondetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initRequisiciondetalles($overrideExisting = true)
    {
        if (null !== $this->collRequisiciondetalles && !$overrideExisting) {
            return;
        }
        $this->collRequisiciondetalles = new PropelObjectCollection();
        $this->collRequisiciondetalles->setModel('Requisiciondetalle');
    }

    /**
     * Gets an array of Requisiciondetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Producto is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Requisiciondetalle[] List of Requisiciondetalle objects
     * @throws PropelException
     */
    public function getRequisiciondetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collRequisiciondetallesPartial && !$this->isNew();
        if (null === $this->collRequisiciondetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collRequisiciondetalles) {
                // return empty collection
                $this->initRequisiciondetalles();
            } else {
                $collRequisiciondetalles = RequisiciondetalleQuery::create(null, $criteria)
                    ->filterByProducto($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collRequisiciondetallesPartial && count($collRequisiciondetalles)) {
                      $this->initRequisiciondetalles(false);

                      foreach ($collRequisiciondetalles as $obj) {
                        if (false == $this->collRequisiciondetalles->contains($obj)) {
                          $this->collRequisiciondetalles->append($obj);
                        }
                      }

                      $this->collRequisiciondetallesPartial = true;
                    }

                    $collRequisiciondetalles->getInternalIterator()->rewind();

                    return $collRequisiciondetalles;
                }

                if ($partial && $this->collRequisiciondetalles) {
                    foreach ($this->collRequisiciondetalles as $obj) {
                        if ($obj->isNew()) {
                            $collRequisiciondetalles[] = $obj;
                        }
                    }
                }

                $this->collRequisiciondetalles = $collRequisiciondetalles;
                $this->collRequisiciondetallesPartial = false;
            }
        }

        return $this->collRequisiciondetalles;
    }

    /**
     * Sets a collection of Requisiciondetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $requisiciondetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Producto The current object (for fluent API support)
     */
    public function setRequisiciondetalles(PropelCollection $requisiciondetalles, PropelPDO $con = null)
    {
        $requisiciondetallesToDelete = $this->getRequisiciondetalles(new Criteria(), $con)->diff($requisiciondetalles);


        $this->requisiciondetallesScheduledForDeletion = $requisiciondetallesToDelete;

        foreach ($requisiciondetallesToDelete as $requisiciondetalleRemoved) {
            $requisiciondetalleRemoved->setProducto(null);
        }

        $this->collRequisiciondetalles = null;
        foreach ($requisiciondetalles as $requisiciondetalle) {
            $this->addRequisiciondetalle($requisiciondetalle);
        }

        $this->collRequisiciondetalles = $requisiciondetalles;
        $this->collRequisiciondetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Requisiciondetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Requisiciondetalle objects.
     * @throws PropelException
     */
    public function countRequisiciondetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collRequisiciondetallesPartial && !$this->isNew();
        if (null === $this->collRequisiciondetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collRequisiciondetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getRequisiciondetalles());
            }
            $query = RequisiciondetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProducto($this)
                ->count($con);
        }

        return count($this->collRequisiciondetalles);
    }

    /**
     * Method called to associate a Requisiciondetalle object to this object
     * through the Requisiciondetalle foreign key attribute.
     *
     * @param    Requisiciondetalle $l Requisiciondetalle
     * @return Producto The current object (for fluent API support)
     */
    public function addRequisiciondetalle(Requisiciondetalle $l)
    {
        if ($this->collRequisiciondetalles === null) {
            $this->initRequisiciondetalles();
            $this->collRequisiciondetallesPartial = true;
        }

        if (!in_array($l, $this->collRequisiciondetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddRequisiciondetalle($l);

            if ($this->requisiciondetallesScheduledForDeletion and $this->requisiciondetallesScheduledForDeletion->contains($l)) {
                $this->requisiciondetallesScheduledForDeletion->remove($this->requisiciondetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Requisiciondetalle $requisiciondetalle The requisiciondetalle object to add.
     */
    protected function doAddRequisiciondetalle($requisiciondetalle)
    {
        $this->collRequisiciondetalles[]= $requisiciondetalle;
        $requisiciondetalle->setProducto($this);
    }

    /**
     * @param	Requisiciondetalle $requisiciondetalle The requisiciondetalle object to remove.
     * @return Producto The current object (for fluent API support)
     */
    public function removeRequisiciondetalle($requisiciondetalle)
    {
        if ($this->getRequisiciondetalles()->contains($requisiciondetalle)) {
            $this->collRequisiciondetalles->remove($this->collRequisiciondetalles->search($requisiciondetalle));
            if (null === $this->requisiciondetallesScheduledForDeletion) {
                $this->requisiciondetallesScheduledForDeletion = clone $this->collRequisiciondetalles;
                $this->requisiciondetallesScheduledForDeletion->clear();
            }
            $this->requisiciondetallesScheduledForDeletion[]= clone $requisiciondetalle;
            $requisiciondetalle->setProducto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Requisiciondetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisiciondetalle[] List of Requisiciondetalle objects
     */
    public function getRequisiciondetallesJoinRequisiciondetalleRelatedByIdpadre($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisiciondetalleQuery::create(null, $criteria);
        $query->joinWith('RequisiciondetalleRelatedByIdpadre', $join_behavior);

        return $this->getRequisiciondetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Requisiciondetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisiciondetalle[] List of Requisiciondetalle objects
     */
    public function getRequisiciondetallesJoinRequisicion($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisiciondetalleQuery::create(null, $criteria);
        $query->joinWith('Requisicion', $join_behavior);

        return $this->getRequisiciondetalles($query, $con);
    }

    /**
     * Clears out the collVentadetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Producto The current object (for fluent API support)
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
     * If this Producto is new, it will return
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
                    ->filterByProducto($this)
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
     * @return Producto The current object (for fluent API support)
     */
    public function setVentadetalles(PropelCollection $ventadetalles, PropelPDO $con = null)
    {
        $ventadetallesToDelete = $this->getVentadetalles(new Criteria(), $con)->diff($ventadetalles);


        $this->ventadetallesScheduledForDeletion = $ventadetallesToDelete;

        foreach ($ventadetallesToDelete as $ventadetalleRemoved) {
            $ventadetalleRemoved->setProducto(null);
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
                ->filterByProducto($this)
                ->count($con);
        }

        return count($this->collVentadetalles);
    }

    /**
     * Method called to associate a Ventadetalle object to this object
     * through the Ventadetalle foreign key attribute.
     *
     * @param    Ventadetalle $l Ventadetalle
     * @return Producto The current object (for fluent API support)
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
        $ventadetalle->setProducto($this);
    }

    /**
     * @param	Ventadetalle $ventadetalle The ventadetalle object to remove.
     * @return Producto The current object (for fluent API support)
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
            $ventadetalle->setProducto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Ventadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
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
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Ventadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
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
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Ventadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ventadetalle[] List of Ventadetalle objects
     */
    public function getVentadetallesJoinVenta($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VentadetalleQuery::create(null, $criteria);
        $query->joinWith('Venta', $join_behavior);

        return $this->getVentadetalles($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idproducto = null;
        $this->idempresa = null;
        $this->idunidadmedida = null;
        $this->producto_nombre = null;
        $this->idcategoria = null;
        $this->idsubcategoria = null;
        $this->producto_rendimiento = null;
        $this->producto_ultimocosto = null;
        $this->producto_baja = null;
        $this->producto_tipo = null;
        $this->producto_costo = null;
        $this->producto_iva = null;
        $this->producto_precio = null;
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
            if ($this->collCodigobarrass) {
                foreach ($this->collCodigobarrass as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCompradetalles) {
                foreach ($this->collCompradetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collDevoluciondetalles) {
                foreach ($this->collDevoluciondetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collNotacreditodetalles) {
                foreach ($this->collNotacreditodetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collOrdentablajerias) {
                foreach ($this->collOrdentablajerias as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collOrdentablajeriadetalles) {
                foreach ($this->collOrdentablajeriadetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPlantillatablajerias) {
                foreach ($this->collPlantillatablajerias as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPlantillatablajeriadetalles) {
                foreach ($this->collPlantillatablajeriadetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collProductosucursalalmacens) {
                foreach ($this->collProductosucursalalmacens as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collRecetasRelatedByIdproducto) {
                foreach ($this->collRecetasRelatedByIdproducto as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collRecetasRelatedByIdproductoreceta) {
                foreach ($this->collRecetasRelatedByIdproductoreceta as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collRequisiciondetalles) {
                foreach ($this->collRequisiciondetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collVentadetalles) {
                foreach ($this->collVentadetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCategoriaRelatedByIdcategoria instanceof Persistent) {
              $this->aCategoriaRelatedByIdcategoria->clearAllReferences($deep);
            }
            if ($this->aEmpresa instanceof Persistent) {
              $this->aEmpresa->clearAllReferences($deep);
            }
            if ($this->aCategoriaRelatedByIdsubcategoria instanceof Persistent) {
              $this->aCategoriaRelatedByIdsubcategoria->clearAllReferences($deep);
            }
            if ($this->aUnidadmedida instanceof Persistent) {
              $this->aUnidadmedida->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCodigobarrass instanceof PropelCollection) {
            $this->collCodigobarrass->clearIterator();
        }
        $this->collCodigobarrass = null;
        if ($this->collCompradetalles instanceof PropelCollection) {
            $this->collCompradetalles->clearIterator();
        }
        $this->collCompradetalles = null;
        if ($this->collDevoluciondetalles instanceof PropelCollection) {
            $this->collDevoluciondetalles->clearIterator();
        }
        $this->collDevoluciondetalles = null;
        if ($this->collNotacreditodetalles instanceof PropelCollection) {
            $this->collNotacreditodetalles->clearIterator();
        }
        $this->collNotacreditodetalles = null;
        if ($this->collOrdentablajerias instanceof PropelCollection) {
            $this->collOrdentablajerias->clearIterator();
        }
        $this->collOrdentablajerias = null;
        if ($this->collOrdentablajeriadetalles instanceof PropelCollection) {
            $this->collOrdentablajeriadetalles->clearIterator();
        }
        $this->collOrdentablajeriadetalles = null;
        if ($this->collPlantillatablajerias instanceof PropelCollection) {
            $this->collPlantillatablajerias->clearIterator();
        }
        $this->collPlantillatablajerias = null;
        if ($this->collPlantillatablajeriadetalles instanceof PropelCollection) {
            $this->collPlantillatablajeriadetalles->clearIterator();
        }
        $this->collPlantillatablajeriadetalles = null;
        if ($this->collProductosucursalalmacens instanceof PropelCollection) {
            $this->collProductosucursalalmacens->clearIterator();
        }
        $this->collProductosucursalalmacens = null;
        if ($this->collRecetasRelatedByIdproducto instanceof PropelCollection) {
            $this->collRecetasRelatedByIdproducto->clearIterator();
        }
        $this->collRecetasRelatedByIdproducto = null;
        if ($this->collRecetasRelatedByIdproductoreceta instanceof PropelCollection) {
            $this->collRecetasRelatedByIdproductoreceta->clearIterator();
        }
        $this->collRecetasRelatedByIdproductoreceta = null;
        if ($this->collRequisiciondetalles instanceof PropelCollection) {
            $this->collRequisiciondetalles->clearIterator();
        }
        $this->collRequisiciondetalles = null;
        if ($this->collVentadetalles instanceof PropelCollection) {
            $this->collVentadetalles->clearIterator();
        }
        $this->collVentadetalles = null;
        $this->aCategoriaRelatedByIdcategoria = null;
        $this->aEmpresa = null;
        $this->aCategoriaRelatedByIdsubcategoria = null;
        $this->aUnidadmedida = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ProductoPeer::DEFAULT_STRING_FORMAT);
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
