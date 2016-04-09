<?php


/**
 * Base class that represents a row from the 'inventariomesdetalle' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseInventariomesdetalle extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'InventariomesdetallePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        InventariomesdetallePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idinventariomesdetalle field.
     * @var        int
     */
    protected $idinventariomesdetalle;

    /**
     * The value for the idinventariomes field.
     * @var        int
     */
    protected $idinventariomes;

    /**
     * The value for the idproducto field.
     * @var        int
     */
    protected $idproducto;

    /**
     * The value for the inventariomesdetalle_stockinicial field.
     * @var        double
     */
    protected $inventariomesdetalle_stockinicial;

    /**
     * The value for the inventariomesdetalle_stockteorico field.
     * @var        double
     */
    protected $inventariomesdetalle_stockteorico;

    /**
     * The value for the inventariomesdetalle_stockfisico field.
     * @var        double
     */
    protected $inventariomesdetalle_stockfisico;

    /**
     * The value for the inventariomesdetalle_diferencia field.
     * @var        double
     */
    protected $inventariomesdetalle_diferencia;

    /**
     * The value for the inventariomesdetalle_revisada field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $inventariomesdetalle_revisada;

    /**
     * The value for the inventariomesdetalle_ingresocompra field.
     * @var        double
     */
    protected $inventariomesdetalle_ingresocompra;

    /**
     * The value for the inventariomesdetalle_ingresorequisicion field.
     * @var        double
     */
    protected $inventariomesdetalle_ingresorequisicion;

    /**
     * The value for the inventariomesdetalle_egresorequisicion field.
     * @var        double
     */
    protected $inventariomesdetalle_egresorequisicion;

    /**
     * The value for the inventariomesdetalle_egresoventa field.
     * @var        double
     */
    protected $inventariomesdetalle_egresoventa;

    /**
     * The value for the inventariomesdetalle_ingresoordentablajeria field.
     * @var        double
     */
    protected $inventariomesdetalle_ingresoordentablajeria;

    /**
     * The value for the inventariomesdetalle_egresoordentablajeria field.
     * @var        double
     */
    protected $inventariomesdetalle_egresoordentablajeria;

    /**
     * The value for the inventariomesdetalle_egresodevolucion field.
     * @var        double
     */
    protected $inventariomesdetalle_egresodevolucion;

    /**
     * @var        Inventariomes
     */
    protected $aInventariomes;

    /**
     * @var        PropelObjectCollection|Inventariomesdetallenota[] Collection to store aggregation of Inventariomesdetallenota objects.
     */
    protected $collInventariomesdetallenotas;
    protected $collInventariomesdetallenotasPartial;

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
    protected $inventariomesdetallenotasScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->inventariomesdetalle_revisada = false;
    }

    /**
     * Initializes internal state of BaseInventariomesdetalle object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [idinventariomesdetalle] column value.
     *
     * @return int
     */
    public function getIdinventariomesdetalle()
    {

        return $this->idinventariomesdetalle;
    }

    /**
     * Get the [idinventariomes] column value.
     *
     * @return int
     */
    public function getIdinventariomes()
    {

        return $this->idinventariomes;
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
     * Get the [inventariomesdetalle_stockinicial] column value.
     *
     * @return double
     */
    public function getInventariomesdetalleStockinicial()
    {

        return $this->inventariomesdetalle_stockinicial;
    }

    /**
     * Get the [inventariomesdetalle_stockteorico] column value.
     *
     * @return double
     */
    public function getInventariomesdetalleStockteorico()
    {

        return $this->inventariomesdetalle_stockteorico;
    }

    /**
     * Get the [inventariomesdetalle_stockfisico] column value.
     *
     * @return double
     */
    public function getInventariomesdetalleStockfisico()
    {

        return $this->inventariomesdetalle_stockfisico;
    }

    /**
     * Get the [inventariomesdetalle_diferencia] column value.
     *
     * @return double
     */
    public function getInventariomesdetalleDiferencia()
    {

        return $this->inventariomesdetalle_diferencia;
    }

    /**
     * Get the [inventariomesdetalle_revisada] column value.
     *
     * @return boolean
     */
    public function getInventariomesdetalleRevisada()
    {

        return $this->inventariomesdetalle_revisada;
    }

    /**
     * Get the [inventariomesdetalle_ingresocompra] column value.
     *
     * @return double
     */
    public function getInventariomesdetalleIngresocompra()
    {

        return $this->inventariomesdetalle_ingresocompra;
    }

    /**
     * Get the [inventariomesdetalle_ingresorequisicion] column value.
     *
     * @return double
     */
    public function getInventariomesdetalleIngresorequisicion()
    {

        return $this->inventariomesdetalle_ingresorequisicion;
    }

    /**
     * Get the [inventariomesdetalle_egresorequisicion] column value.
     *
     * @return double
     */
    public function getInventariomesdetalleEgresorequisicion()
    {

        return $this->inventariomesdetalle_egresorequisicion;
    }

    /**
     * Get the [inventariomesdetalle_egresoventa] column value.
     *
     * @return double
     */
    public function getInventariomesdetalleEgresoventa()
    {

        return $this->inventariomesdetalle_egresoventa;
    }

    /**
     * Get the [inventariomesdetalle_ingresoordentablajeria] column value.
     *
     * @return double
     */
    public function getInventariomesdetalleIngresoordentablajeria()
    {

        return $this->inventariomesdetalle_ingresoordentablajeria;
    }

    /**
     * Get the [inventariomesdetalle_egresoordentablajeria] column value.
     *
     * @return double
     */
    public function getInventariomesdetalleEgresoordentablajeria()
    {

        return $this->inventariomesdetalle_egresoordentablajeria;
    }

    /**
     * Get the [inventariomesdetalle_egresodevolucion] column value.
     *
     * @return double
     */
    public function getInventariomesdetalleEgresodevolucion()
    {

        return $this->inventariomesdetalle_egresodevolucion;
    }

    /**
     * Set the value of [idinventariomesdetalle] column.
     *
     * @param  int $v new value
     * @return Inventariomesdetalle The current object (for fluent API support)
     */
    public function setIdinventariomesdetalle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idinventariomesdetalle !== $v) {
            $this->idinventariomesdetalle = $v;
            $this->modifiedColumns[] = InventariomesdetallePeer::IDINVENTARIOMESDETALLE;
        }


        return $this;
    } // setIdinventariomesdetalle()

    /**
     * Set the value of [idinventariomes] column.
     *
     * @param  int $v new value
     * @return Inventariomesdetalle The current object (for fluent API support)
     */
    public function setIdinventariomes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idinventariomes !== $v) {
            $this->idinventariomes = $v;
            $this->modifiedColumns[] = InventariomesdetallePeer::IDINVENTARIOMES;
        }

        if ($this->aInventariomes !== null && $this->aInventariomes->getIdinventariomes() !== $v) {
            $this->aInventariomes = null;
        }


        return $this;
    } // setIdinventariomes()

    /**
     * Set the value of [idproducto] column.
     *
     * @param  int $v new value
     * @return Inventariomesdetalle The current object (for fluent API support)
     */
    public function setIdproducto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproducto !== $v) {
            $this->idproducto = $v;
            $this->modifiedColumns[] = InventariomesdetallePeer::IDPRODUCTO;
        }


        return $this;
    } // setIdproducto()

    /**
     * Set the value of [inventariomesdetalle_stockinicial] column.
     *
     * @param  double $v new value
     * @return Inventariomesdetalle The current object (for fluent API support)
     */
    public function setInventariomesdetalleStockinicial($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->inventariomesdetalle_stockinicial !== $v) {
            $this->inventariomesdetalle_stockinicial = $v;
            $this->modifiedColumns[] = InventariomesdetallePeer::INVENTARIOMESDETALLE_STOCKINICIAL;
        }


        return $this;
    } // setInventariomesdetalleStockinicial()

    /**
     * Set the value of [inventariomesdetalle_stockteorico] column.
     *
     * @param  double $v new value
     * @return Inventariomesdetalle The current object (for fluent API support)
     */
    public function setInventariomesdetalleStockteorico($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->inventariomesdetalle_stockteorico !== $v) {
            $this->inventariomesdetalle_stockteorico = $v;
            $this->modifiedColumns[] = InventariomesdetallePeer::INVENTARIOMESDETALLE_STOCKTEORICO;
        }


        return $this;
    } // setInventariomesdetalleStockteorico()

    /**
     * Set the value of [inventariomesdetalle_stockfisico] column.
     *
     * @param  double $v new value
     * @return Inventariomesdetalle The current object (for fluent API support)
     */
    public function setInventariomesdetalleStockfisico($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->inventariomesdetalle_stockfisico !== $v) {
            $this->inventariomesdetalle_stockfisico = $v;
            $this->modifiedColumns[] = InventariomesdetallePeer::INVENTARIOMESDETALLE_STOCKFISICO;
        }


        return $this;
    } // setInventariomesdetalleStockfisico()

    /**
     * Set the value of [inventariomesdetalle_diferencia] column.
     *
     * @param  double $v new value
     * @return Inventariomesdetalle The current object (for fluent API support)
     */
    public function setInventariomesdetalleDiferencia($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->inventariomesdetalle_diferencia !== $v) {
            $this->inventariomesdetalle_diferencia = $v;
            $this->modifiedColumns[] = InventariomesdetallePeer::INVENTARIOMESDETALLE_DIFERENCIA;
        }


        return $this;
    } // setInventariomesdetalleDiferencia()

    /**
     * Sets the value of the [inventariomesdetalle_revisada] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Inventariomesdetalle The current object (for fluent API support)
     */
    public function setInventariomesdetalleRevisada($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->inventariomesdetalle_revisada !== $v) {
            $this->inventariomesdetalle_revisada = $v;
            $this->modifiedColumns[] = InventariomesdetallePeer::INVENTARIOMESDETALLE_REVISADA;
        }


        return $this;
    } // setInventariomesdetalleRevisada()

    /**
     * Set the value of [inventariomesdetalle_ingresocompra] column.
     *
     * @param  double $v new value
     * @return Inventariomesdetalle The current object (for fluent API support)
     */
    public function setInventariomesdetalleIngresocompra($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->inventariomesdetalle_ingresocompra !== $v) {
            $this->inventariomesdetalle_ingresocompra = $v;
            $this->modifiedColumns[] = InventariomesdetallePeer::INVENTARIOMESDETALLE_INGRESOCOMPRA;
        }


        return $this;
    } // setInventariomesdetalleIngresocompra()

    /**
     * Set the value of [inventariomesdetalle_ingresorequisicion] column.
     *
     * @param  double $v new value
     * @return Inventariomesdetalle The current object (for fluent API support)
     */
    public function setInventariomesdetalleIngresorequisicion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->inventariomesdetalle_ingresorequisicion !== $v) {
            $this->inventariomesdetalle_ingresorequisicion = $v;
            $this->modifiedColumns[] = InventariomesdetallePeer::INVENTARIOMESDETALLE_INGRESOREQUISICION;
        }


        return $this;
    } // setInventariomesdetalleIngresorequisicion()

    /**
     * Set the value of [inventariomesdetalle_egresorequisicion] column.
     *
     * @param  double $v new value
     * @return Inventariomesdetalle The current object (for fluent API support)
     */
    public function setInventariomesdetalleEgresorequisicion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->inventariomesdetalle_egresorequisicion !== $v) {
            $this->inventariomesdetalle_egresorequisicion = $v;
            $this->modifiedColumns[] = InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESOREQUISICION;
        }


        return $this;
    } // setInventariomesdetalleEgresorequisicion()

    /**
     * Set the value of [inventariomesdetalle_egresoventa] column.
     *
     * @param  double $v new value
     * @return Inventariomesdetalle The current object (for fluent API support)
     */
    public function setInventariomesdetalleEgresoventa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->inventariomesdetalle_egresoventa !== $v) {
            $this->inventariomesdetalle_egresoventa = $v;
            $this->modifiedColumns[] = InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESOVENTA;
        }


        return $this;
    } // setInventariomesdetalleEgresoventa()

    /**
     * Set the value of [inventariomesdetalle_ingresoordentablajeria] column.
     *
     * @param  double $v new value
     * @return Inventariomesdetalle The current object (for fluent API support)
     */
    public function setInventariomesdetalleIngresoordentablajeria($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->inventariomesdetalle_ingresoordentablajeria !== $v) {
            $this->inventariomesdetalle_ingresoordentablajeria = $v;
            $this->modifiedColumns[] = InventariomesdetallePeer::INVENTARIOMESDETALLE_INGRESOORDENTABLAJERIA;
        }


        return $this;
    } // setInventariomesdetalleIngresoordentablajeria()

    /**
     * Set the value of [inventariomesdetalle_egresoordentablajeria] column.
     *
     * @param  double $v new value
     * @return Inventariomesdetalle The current object (for fluent API support)
     */
    public function setInventariomesdetalleEgresoordentablajeria($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->inventariomesdetalle_egresoordentablajeria !== $v) {
            $this->inventariomesdetalle_egresoordentablajeria = $v;
            $this->modifiedColumns[] = InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESOORDENTABLAJERIA;
        }


        return $this;
    } // setInventariomesdetalleEgresoordentablajeria()

    /**
     * Set the value of [inventariomesdetalle_egresodevolucion] column.
     *
     * @param  double $v new value
     * @return Inventariomesdetalle The current object (for fluent API support)
     */
    public function setInventariomesdetalleEgresodevolucion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->inventariomesdetalle_egresodevolucion !== $v) {
            $this->inventariomesdetalle_egresodevolucion = $v;
            $this->modifiedColumns[] = InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESODEVOLUCION;
        }


        return $this;
    } // setInventariomesdetalleEgresodevolucion()

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
            if ($this->inventariomesdetalle_revisada !== false) {
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

            $this->idinventariomesdetalle = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idinventariomes = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idproducto = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->inventariomesdetalle_stockinicial = ($row[$startcol + 3] !== null) ? (double) $row[$startcol + 3] : null;
            $this->inventariomesdetalle_stockteorico = ($row[$startcol + 4] !== null) ? (double) $row[$startcol + 4] : null;
            $this->inventariomesdetalle_stockfisico = ($row[$startcol + 5] !== null) ? (double) $row[$startcol + 5] : null;
            $this->inventariomesdetalle_diferencia = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
            $this->inventariomesdetalle_revisada = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
            $this->inventariomesdetalle_ingresocompra = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
            $this->inventariomesdetalle_ingresorequisicion = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
            $this->inventariomesdetalle_egresorequisicion = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->inventariomesdetalle_egresoventa = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
            $this->inventariomesdetalle_ingresoordentablajeria = ($row[$startcol + 12] !== null) ? (double) $row[$startcol + 12] : null;
            $this->inventariomesdetalle_egresoordentablajeria = ($row[$startcol + 13] !== null) ? (double) $row[$startcol + 13] : null;
            $this->inventariomesdetalle_egresodevolucion = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 15; // 15 = InventariomesdetallePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Inventariomesdetalle object", $e);
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

        if ($this->aInventariomes !== null && $this->idinventariomes !== $this->aInventariomes->getIdinventariomes()) {
            $this->aInventariomes = null;
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
            $con = Propel::getConnection(InventariomesdetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = InventariomesdetallePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aInventariomes = null;
            $this->collInventariomesdetallenotas = null;

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
            $con = Propel::getConnection(InventariomesdetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = InventariomesdetalleQuery::create()
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
            $con = Propel::getConnection(InventariomesdetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                InventariomesdetallePeer::addInstanceToPool($this);
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

            if ($this->aInventariomes !== null) {
                if ($this->aInventariomes->isModified() || $this->aInventariomes->isNew()) {
                    $affectedRows += $this->aInventariomes->save($con);
                }
                $this->setInventariomes($this->aInventariomes);
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

            if ($this->inventariomesdetallenotasScheduledForDeletion !== null) {
                if (!$this->inventariomesdetallenotasScheduledForDeletion->isEmpty()) {
                    InventariomesdetallenotaQuery::create()
                        ->filterByPrimaryKeys($this->inventariomesdetallenotasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->inventariomesdetallenotasScheduledForDeletion = null;
                }
            }

            if ($this->collInventariomesdetallenotas !== null) {
                foreach ($this->collInventariomesdetallenotas as $referrerFK) {
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

        $this->modifiedColumns[] = InventariomesdetallePeer::IDINVENTARIOMESDETALLE;
        if (null !== $this->idinventariomesdetalle) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . InventariomesdetallePeer::IDINVENTARIOMESDETALLE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(InventariomesdetallePeer::IDINVENTARIOMESDETALLE)) {
            $modifiedColumns[':p' . $index++]  = '`idinventariomesdetalle`';
        }
        if ($this->isColumnModified(InventariomesdetallePeer::IDINVENTARIOMES)) {
            $modifiedColumns[':p' . $index++]  = '`idinventariomes`';
        }
        if ($this->isColumnModified(InventariomesdetallePeer::IDPRODUCTO)) {
            $modifiedColumns[':p' . $index++]  = '`idproducto`';
        }
        if ($this->isColumnModified(InventariomesdetallePeer::INVENTARIOMESDETALLE_STOCKINICIAL)) {
            $modifiedColumns[':p' . $index++]  = '`inventariomesdetalle_stockinicial`';
        }
        if ($this->isColumnModified(InventariomesdetallePeer::INVENTARIOMESDETALLE_STOCKTEORICO)) {
            $modifiedColumns[':p' . $index++]  = '`inventariomesdetalle_stockteorico`';
        }
        if ($this->isColumnModified(InventariomesdetallePeer::INVENTARIOMESDETALLE_STOCKFISICO)) {
            $modifiedColumns[':p' . $index++]  = '`inventariomesdetalle_stockfisico`';
        }
        if ($this->isColumnModified(InventariomesdetallePeer::INVENTARIOMESDETALLE_DIFERENCIA)) {
            $modifiedColumns[':p' . $index++]  = '`inventariomesdetalle_diferencia`';
        }
        if ($this->isColumnModified(InventariomesdetallePeer::INVENTARIOMESDETALLE_REVISADA)) {
            $modifiedColumns[':p' . $index++]  = '`inventariomesdetalle_revisada`';
        }
        if ($this->isColumnModified(InventariomesdetallePeer::INVENTARIOMESDETALLE_INGRESOCOMPRA)) {
            $modifiedColumns[':p' . $index++]  = '`inventariomesdetalle_ingresocompra`';
        }
        if ($this->isColumnModified(InventariomesdetallePeer::INVENTARIOMESDETALLE_INGRESOREQUISICION)) {
            $modifiedColumns[':p' . $index++]  = '`inventariomesdetalle_ingresorequisicion`';
        }
        if ($this->isColumnModified(InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESOREQUISICION)) {
            $modifiedColumns[':p' . $index++]  = '`inventariomesdetalle_egresorequisicion`';
        }
        if ($this->isColumnModified(InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESOVENTA)) {
            $modifiedColumns[':p' . $index++]  = '`inventariomesdetalle_egresoventa`';
        }
        if ($this->isColumnModified(InventariomesdetallePeer::INVENTARIOMESDETALLE_INGRESOORDENTABLAJERIA)) {
            $modifiedColumns[':p' . $index++]  = '`inventariomesdetalle_ingresoordentablajeria`';
        }
        if ($this->isColumnModified(InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESOORDENTABLAJERIA)) {
            $modifiedColumns[':p' . $index++]  = '`inventariomesdetalle_egresoordentablajeria`';
        }
        if ($this->isColumnModified(InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESODEVOLUCION)) {
            $modifiedColumns[':p' . $index++]  = '`inventariomesdetalle_egresodevolucion`';
        }

        $sql = sprintf(
            'INSERT INTO `inventariomesdetalle` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idinventariomesdetalle`':
                        $stmt->bindValue($identifier, $this->idinventariomesdetalle, PDO::PARAM_INT);
                        break;
                    case '`idinventariomes`':
                        $stmt->bindValue($identifier, $this->idinventariomes, PDO::PARAM_INT);
                        break;
                    case '`idproducto`':
                        $stmt->bindValue($identifier, $this->idproducto, PDO::PARAM_INT);
                        break;
                    case '`inventariomesdetalle_stockinicial`':
                        $stmt->bindValue($identifier, $this->inventariomesdetalle_stockinicial, PDO::PARAM_STR);
                        break;
                    case '`inventariomesdetalle_stockteorico`':
                        $stmt->bindValue($identifier, $this->inventariomesdetalle_stockteorico, PDO::PARAM_STR);
                        break;
                    case '`inventariomesdetalle_stockfisico`':
                        $stmt->bindValue($identifier, $this->inventariomesdetalle_stockfisico, PDO::PARAM_STR);
                        break;
                    case '`inventariomesdetalle_diferencia`':
                        $stmt->bindValue($identifier, $this->inventariomesdetalle_diferencia, PDO::PARAM_STR);
                        break;
                    case '`inventariomesdetalle_revisada`':
                        $stmt->bindValue($identifier, (int) $this->inventariomesdetalle_revisada, PDO::PARAM_INT);
                        break;
                    case '`inventariomesdetalle_ingresocompra`':
                        $stmt->bindValue($identifier, $this->inventariomesdetalle_ingresocompra, PDO::PARAM_STR);
                        break;
                    case '`inventariomesdetalle_ingresorequisicion`':
                        $stmt->bindValue($identifier, $this->inventariomesdetalle_ingresorequisicion, PDO::PARAM_STR);
                        break;
                    case '`inventariomesdetalle_egresorequisicion`':
                        $stmt->bindValue($identifier, $this->inventariomesdetalle_egresorequisicion, PDO::PARAM_STR);
                        break;
                    case '`inventariomesdetalle_egresoventa`':
                        $stmt->bindValue($identifier, $this->inventariomesdetalle_egresoventa, PDO::PARAM_STR);
                        break;
                    case '`inventariomesdetalle_ingresoordentablajeria`':
                        $stmt->bindValue($identifier, $this->inventariomesdetalle_ingresoordentablajeria, PDO::PARAM_STR);
                        break;
                    case '`inventariomesdetalle_egresoordentablajeria`':
                        $stmt->bindValue($identifier, $this->inventariomesdetalle_egresoordentablajeria, PDO::PARAM_STR);
                        break;
                    case '`inventariomesdetalle_egresodevolucion`':
                        $stmt->bindValue($identifier, $this->inventariomesdetalle_egresodevolucion, PDO::PARAM_STR);
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
        $this->setIdinventariomesdetalle($pk);

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

            if ($this->aInventariomes !== null) {
                if (!$this->aInventariomes->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aInventariomes->getValidationFailures());
                }
            }


            if (($retval = InventariomesdetallePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collInventariomesdetallenotas !== null) {
                    foreach ($this->collInventariomesdetallenotas as $referrerFK) {
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
        $pos = InventariomesdetallePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdinventariomesdetalle();
                break;
            case 1:
                return $this->getIdinventariomes();
                break;
            case 2:
                return $this->getIdproducto();
                break;
            case 3:
                return $this->getInventariomesdetalleStockinicial();
                break;
            case 4:
                return $this->getInventariomesdetalleStockteorico();
                break;
            case 5:
                return $this->getInventariomesdetalleStockfisico();
                break;
            case 6:
                return $this->getInventariomesdetalleDiferencia();
                break;
            case 7:
                return $this->getInventariomesdetalleRevisada();
                break;
            case 8:
                return $this->getInventariomesdetalleIngresocompra();
                break;
            case 9:
                return $this->getInventariomesdetalleIngresorequisicion();
                break;
            case 10:
                return $this->getInventariomesdetalleEgresorequisicion();
                break;
            case 11:
                return $this->getInventariomesdetalleEgresoventa();
                break;
            case 12:
                return $this->getInventariomesdetalleIngresoordentablajeria();
                break;
            case 13:
                return $this->getInventariomesdetalleEgresoordentablajeria();
                break;
            case 14:
                return $this->getInventariomesdetalleEgresodevolucion();
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
        if (isset($alreadyDumpedObjects['Inventariomesdetalle'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Inventariomesdetalle'][$this->getPrimaryKey()] = true;
        $keys = InventariomesdetallePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdinventariomesdetalle(),
            $keys[1] => $this->getIdinventariomes(),
            $keys[2] => $this->getIdproducto(),
            $keys[3] => $this->getInventariomesdetalleStockinicial(),
            $keys[4] => $this->getInventariomesdetalleStockteorico(),
            $keys[5] => $this->getInventariomesdetalleStockfisico(),
            $keys[6] => $this->getInventariomesdetalleDiferencia(),
            $keys[7] => $this->getInventariomesdetalleRevisada(),
            $keys[8] => $this->getInventariomesdetalleIngresocompra(),
            $keys[9] => $this->getInventariomesdetalleIngresorequisicion(),
            $keys[10] => $this->getInventariomesdetalleEgresorequisicion(),
            $keys[11] => $this->getInventariomesdetalleEgresoventa(),
            $keys[12] => $this->getInventariomesdetalleIngresoordentablajeria(),
            $keys[13] => $this->getInventariomesdetalleEgresoordentablajeria(),
            $keys[14] => $this->getInventariomesdetalleEgresodevolucion(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aInventariomes) {
                $result['Inventariomes'] = $this->aInventariomes->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collInventariomesdetallenotas) {
                $result['Inventariomesdetallenotas'] = $this->collInventariomesdetallenotas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = InventariomesdetallePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdinventariomesdetalle($value);
                break;
            case 1:
                $this->setIdinventariomes($value);
                break;
            case 2:
                $this->setIdproducto($value);
                break;
            case 3:
                $this->setInventariomesdetalleStockinicial($value);
                break;
            case 4:
                $this->setInventariomesdetalleStockteorico($value);
                break;
            case 5:
                $this->setInventariomesdetalleStockfisico($value);
                break;
            case 6:
                $this->setInventariomesdetalleDiferencia($value);
                break;
            case 7:
                $this->setInventariomesdetalleRevisada($value);
                break;
            case 8:
                $this->setInventariomesdetalleIngresocompra($value);
                break;
            case 9:
                $this->setInventariomesdetalleIngresorequisicion($value);
                break;
            case 10:
                $this->setInventariomesdetalleEgresorequisicion($value);
                break;
            case 11:
                $this->setInventariomesdetalleEgresoventa($value);
                break;
            case 12:
                $this->setInventariomesdetalleIngresoordentablajeria($value);
                break;
            case 13:
                $this->setInventariomesdetalleEgresoordentablajeria($value);
                break;
            case 14:
                $this->setInventariomesdetalleEgresodevolucion($value);
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
        $keys = InventariomesdetallePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdinventariomesdetalle($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdinventariomes($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdproducto($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setInventariomesdetalleStockinicial($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setInventariomesdetalleStockteorico($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setInventariomesdetalleStockfisico($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setInventariomesdetalleDiferencia($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setInventariomesdetalleRevisada($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setInventariomesdetalleIngresocompra($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setInventariomesdetalleIngresorequisicion($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setInventariomesdetalleEgresorequisicion($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setInventariomesdetalleEgresoventa($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setInventariomesdetalleIngresoordentablajeria($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setInventariomesdetalleEgresoordentablajeria($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setInventariomesdetalleEgresodevolucion($arr[$keys[14]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(InventariomesdetallePeer::DATABASE_NAME);

        if ($this->isColumnModified(InventariomesdetallePeer::IDINVENTARIOMESDETALLE)) $criteria->add(InventariomesdetallePeer::IDINVENTARIOMESDETALLE, $this->idinventariomesdetalle);
        if ($this->isColumnModified(InventariomesdetallePeer::IDINVENTARIOMES)) $criteria->add(InventariomesdetallePeer::IDINVENTARIOMES, $this->idinventariomes);
        if ($this->isColumnModified(InventariomesdetallePeer::IDPRODUCTO)) $criteria->add(InventariomesdetallePeer::IDPRODUCTO, $this->idproducto);
        if ($this->isColumnModified(InventariomesdetallePeer::INVENTARIOMESDETALLE_STOCKINICIAL)) $criteria->add(InventariomesdetallePeer::INVENTARIOMESDETALLE_STOCKINICIAL, $this->inventariomesdetalle_stockinicial);
        if ($this->isColumnModified(InventariomesdetallePeer::INVENTARIOMESDETALLE_STOCKTEORICO)) $criteria->add(InventariomesdetallePeer::INVENTARIOMESDETALLE_STOCKTEORICO, $this->inventariomesdetalle_stockteorico);
        if ($this->isColumnModified(InventariomesdetallePeer::INVENTARIOMESDETALLE_STOCKFISICO)) $criteria->add(InventariomesdetallePeer::INVENTARIOMESDETALLE_STOCKFISICO, $this->inventariomesdetalle_stockfisico);
        if ($this->isColumnModified(InventariomesdetallePeer::INVENTARIOMESDETALLE_DIFERENCIA)) $criteria->add(InventariomesdetallePeer::INVENTARIOMESDETALLE_DIFERENCIA, $this->inventariomesdetalle_diferencia);
        if ($this->isColumnModified(InventariomesdetallePeer::INVENTARIOMESDETALLE_REVISADA)) $criteria->add(InventariomesdetallePeer::INVENTARIOMESDETALLE_REVISADA, $this->inventariomesdetalle_revisada);
        if ($this->isColumnModified(InventariomesdetallePeer::INVENTARIOMESDETALLE_INGRESOCOMPRA)) $criteria->add(InventariomesdetallePeer::INVENTARIOMESDETALLE_INGRESOCOMPRA, $this->inventariomesdetalle_ingresocompra);
        if ($this->isColumnModified(InventariomesdetallePeer::INVENTARIOMESDETALLE_INGRESOREQUISICION)) $criteria->add(InventariomesdetallePeer::INVENTARIOMESDETALLE_INGRESOREQUISICION, $this->inventariomesdetalle_ingresorequisicion);
        if ($this->isColumnModified(InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESOREQUISICION)) $criteria->add(InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESOREQUISICION, $this->inventariomesdetalle_egresorequisicion);
        if ($this->isColumnModified(InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESOVENTA)) $criteria->add(InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESOVENTA, $this->inventariomesdetalle_egresoventa);
        if ($this->isColumnModified(InventariomesdetallePeer::INVENTARIOMESDETALLE_INGRESOORDENTABLAJERIA)) $criteria->add(InventariomesdetallePeer::INVENTARIOMESDETALLE_INGRESOORDENTABLAJERIA, $this->inventariomesdetalle_ingresoordentablajeria);
        if ($this->isColumnModified(InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESOORDENTABLAJERIA)) $criteria->add(InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESOORDENTABLAJERIA, $this->inventariomesdetalle_egresoordentablajeria);
        if ($this->isColumnModified(InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESODEVOLUCION)) $criteria->add(InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESODEVOLUCION, $this->inventariomesdetalle_egresodevolucion);

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
        $criteria = new Criteria(InventariomesdetallePeer::DATABASE_NAME);
        $criteria->add(InventariomesdetallePeer::IDINVENTARIOMESDETALLE, $this->idinventariomesdetalle);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdinventariomesdetalle();
    }

    /**
     * Generic method to set the primary key (idinventariomesdetalle column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdinventariomesdetalle($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdinventariomesdetalle();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Inventariomesdetalle (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdinventariomes($this->getIdinventariomes());
        $copyObj->setIdproducto($this->getIdproducto());
        $copyObj->setInventariomesdetalleStockinicial($this->getInventariomesdetalleStockinicial());
        $copyObj->setInventariomesdetalleStockteorico($this->getInventariomesdetalleStockteorico());
        $copyObj->setInventariomesdetalleStockfisico($this->getInventariomesdetalleStockfisico());
        $copyObj->setInventariomesdetalleDiferencia($this->getInventariomesdetalleDiferencia());
        $copyObj->setInventariomesdetalleRevisada($this->getInventariomesdetalleRevisada());
        $copyObj->setInventariomesdetalleIngresocompra($this->getInventariomesdetalleIngresocompra());
        $copyObj->setInventariomesdetalleIngresorequisicion($this->getInventariomesdetalleIngresorequisicion());
        $copyObj->setInventariomesdetalleEgresorequisicion($this->getInventariomesdetalleEgresorequisicion());
        $copyObj->setInventariomesdetalleEgresoventa($this->getInventariomesdetalleEgresoventa());
        $copyObj->setInventariomesdetalleIngresoordentablajeria($this->getInventariomesdetalleIngresoordentablajeria());
        $copyObj->setInventariomesdetalleEgresoordentablajeria($this->getInventariomesdetalleEgresoordentablajeria());
        $copyObj->setInventariomesdetalleEgresodevolucion($this->getInventariomesdetalleEgresodevolucion());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getInventariomesdetallenotas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInventariomesdetallenota($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdinventariomesdetalle(NULL); // this is a auto-increment column, so set to default value
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
     * @return Inventariomesdetalle Clone of current object.
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
     * @return InventariomesdetallePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new InventariomesdetallePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Inventariomes object.
     *
     * @param                  Inventariomes $v
     * @return Inventariomesdetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setInventariomes(Inventariomes $v = null)
    {
        if ($v === null) {
            $this->setIdinventariomes(NULL);
        } else {
            $this->setIdinventariomes($v->getIdinventariomes());
        }

        $this->aInventariomes = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Inventariomes object, it will not be re-added.
        if ($v !== null) {
            $v->addInventariomesdetalle($this);
        }


        return $this;
    }


    /**
     * Get the associated Inventariomes object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Inventariomes The associated Inventariomes object.
     * @throws PropelException
     */
    public function getInventariomes(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aInventariomes === null && ($this->idinventariomes !== null) && $doQuery) {
            $this->aInventariomes = InventariomesQuery::create()->findPk($this->idinventariomes, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aInventariomes->addInventariomesdetalles($this);
             */
        }

        return $this->aInventariomes;
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
        if ('Inventariomesdetallenota' == $relationName) {
            $this->initInventariomesdetallenotas();
        }
    }

    /**
     * Clears out the collInventariomesdetallenotas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Inventariomesdetalle The current object (for fluent API support)
     * @see        addInventariomesdetallenotas()
     */
    public function clearInventariomesdetallenotas()
    {
        $this->collInventariomesdetallenotas = null; // important to set this to null since that means it is uninitialized
        $this->collInventariomesdetallenotasPartial = null;

        return $this;
    }

    /**
     * reset is the collInventariomesdetallenotas collection loaded partially
     *
     * @return void
     */
    public function resetPartialInventariomesdetallenotas($v = true)
    {
        $this->collInventariomesdetallenotasPartial = $v;
    }

    /**
     * Initializes the collInventariomesdetallenotas collection.
     *
     * By default this just sets the collInventariomesdetallenotas collection to an empty array (like clearcollInventariomesdetallenotas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInventariomesdetallenotas($overrideExisting = true)
    {
        if (null !== $this->collInventariomesdetallenotas && !$overrideExisting) {
            return;
        }
        $this->collInventariomesdetallenotas = new PropelObjectCollection();
        $this->collInventariomesdetallenotas->setModel('Inventariomesdetallenota');
    }

    /**
     * Gets an array of Inventariomesdetallenota objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Inventariomesdetalle is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Inventariomesdetallenota[] List of Inventariomesdetallenota objects
     * @throws PropelException
     */
    public function getInventariomesdetallenotas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collInventariomesdetallenotasPartial && !$this->isNew();
        if (null === $this->collInventariomesdetallenotas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInventariomesdetallenotas) {
                // return empty collection
                $this->initInventariomesdetallenotas();
            } else {
                $collInventariomesdetallenotas = InventariomesdetallenotaQuery::create(null, $criteria)
                    ->filterByInventariomesdetalle($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collInventariomesdetallenotasPartial && count($collInventariomesdetallenotas)) {
                      $this->initInventariomesdetallenotas(false);

                      foreach ($collInventariomesdetallenotas as $obj) {
                        if (false == $this->collInventariomesdetallenotas->contains($obj)) {
                          $this->collInventariomesdetallenotas->append($obj);
                        }
                      }

                      $this->collInventariomesdetallenotasPartial = true;
                    }

                    $collInventariomesdetallenotas->getInternalIterator()->rewind();

                    return $collInventariomesdetallenotas;
                }

                if ($partial && $this->collInventariomesdetallenotas) {
                    foreach ($this->collInventariomesdetallenotas as $obj) {
                        if ($obj->isNew()) {
                            $collInventariomesdetallenotas[] = $obj;
                        }
                    }
                }

                $this->collInventariomesdetallenotas = $collInventariomesdetallenotas;
                $this->collInventariomesdetallenotasPartial = false;
            }
        }

        return $this->collInventariomesdetallenotas;
    }

    /**
     * Sets a collection of Inventariomesdetallenota objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $inventariomesdetallenotas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Inventariomesdetalle The current object (for fluent API support)
     */
    public function setInventariomesdetallenotas(PropelCollection $inventariomesdetallenotas, PropelPDO $con = null)
    {
        $inventariomesdetallenotasToDelete = $this->getInventariomesdetallenotas(new Criteria(), $con)->diff($inventariomesdetallenotas);


        $this->inventariomesdetallenotasScheduledForDeletion = $inventariomesdetallenotasToDelete;

        foreach ($inventariomesdetallenotasToDelete as $inventariomesdetallenotaRemoved) {
            $inventariomesdetallenotaRemoved->setInventariomesdetalle(null);
        }

        $this->collInventariomesdetallenotas = null;
        foreach ($inventariomesdetallenotas as $inventariomesdetallenota) {
            $this->addInventariomesdetallenota($inventariomesdetallenota);
        }

        $this->collInventariomesdetallenotas = $inventariomesdetallenotas;
        $this->collInventariomesdetallenotasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Inventariomesdetallenota objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Inventariomesdetallenota objects.
     * @throws PropelException
     */
    public function countInventariomesdetallenotas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collInventariomesdetallenotasPartial && !$this->isNew();
        if (null === $this->collInventariomesdetallenotas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInventariomesdetallenotas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInventariomesdetallenotas());
            }
            $query = InventariomesdetallenotaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByInventariomesdetalle($this)
                ->count($con);
        }

        return count($this->collInventariomesdetallenotas);
    }

    /**
     * Method called to associate a Inventariomesdetallenota object to this object
     * through the Inventariomesdetallenota foreign key attribute.
     *
     * @param    Inventariomesdetallenota $l Inventariomesdetallenota
     * @return Inventariomesdetalle The current object (for fluent API support)
     */
    public function addInventariomesdetallenota(Inventariomesdetallenota $l)
    {
        if ($this->collInventariomesdetallenotas === null) {
            $this->initInventariomesdetallenotas();
            $this->collInventariomesdetallenotasPartial = true;
        }

        if (!in_array($l, $this->collInventariomesdetallenotas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddInventariomesdetallenota($l);

            if ($this->inventariomesdetallenotasScheduledForDeletion and $this->inventariomesdetallenotasScheduledForDeletion->contains($l)) {
                $this->inventariomesdetallenotasScheduledForDeletion->remove($this->inventariomesdetallenotasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Inventariomesdetallenota $inventariomesdetallenota The inventariomesdetallenota object to add.
     */
    protected function doAddInventariomesdetallenota($inventariomesdetallenota)
    {
        $this->collInventariomesdetallenotas[]= $inventariomesdetallenota;
        $inventariomesdetallenota->setInventariomesdetalle($this);
    }

    /**
     * @param	Inventariomesdetallenota $inventariomesdetallenota The inventariomesdetallenota object to remove.
     * @return Inventariomesdetalle The current object (for fluent API support)
     */
    public function removeInventariomesdetallenota($inventariomesdetallenota)
    {
        if ($this->getInventariomesdetallenotas()->contains($inventariomesdetallenota)) {
            $this->collInventariomesdetallenotas->remove($this->collInventariomesdetallenotas->search($inventariomesdetallenota));
            if (null === $this->inventariomesdetallenotasScheduledForDeletion) {
                $this->inventariomesdetallenotasScheduledForDeletion = clone $this->collInventariomesdetallenotas;
                $this->inventariomesdetallenotasScheduledForDeletion->clear();
            }
            $this->inventariomesdetallenotasScheduledForDeletion[]= clone $inventariomesdetallenota;
            $inventariomesdetallenota->setInventariomesdetalle(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Inventariomesdetalle is new, it will return
     * an empty collection; or if this Inventariomesdetalle has previously
     * been saved, it will retrieve related Inventariomesdetallenotas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Inventariomesdetalle.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Inventariomesdetallenota[] List of Inventariomesdetallenota objects
     */
    public function getInventariomesdetallenotasJoinUsuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = InventariomesdetallenotaQuery::create(null, $criteria);
        $query->joinWith('Usuario', $join_behavior);

        return $this->getInventariomesdetallenotas($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idinventariomesdetalle = null;
        $this->idinventariomes = null;
        $this->idproducto = null;
        $this->inventariomesdetalle_stockinicial = null;
        $this->inventariomesdetalle_stockteorico = null;
        $this->inventariomesdetalle_stockfisico = null;
        $this->inventariomesdetalle_diferencia = null;
        $this->inventariomesdetalle_revisada = null;
        $this->inventariomesdetalle_ingresocompra = null;
        $this->inventariomesdetalle_ingresorequisicion = null;
        $this->inventariomesdetalle_egresorequisicion = null;
        $this->inventariomesdetalle_egresoventa = null;
        $this->inventariomesdetalle_ingresoordentablajeria = null;
        $this->inventariomesdetalle_egresoordentablajeria = null;
        $this->inventariomesdetalle_egresodevolucion = null;
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
            if ($this->collInventariomesdetallenotas) {
                foreach ($this->collInventariomesdetallenotas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aInventariomes instanceof Persistent) {
              $this->aInventariomes->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collInventariomesdetallenotas instanceof PropelCollection) {
            $this->collInventariomesdetallenotas->clearIterator();
        }
        $this->collInventariomesdetallenotas = null;
        $this->aInventariomes = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(InventariomesdetallePeer::DEFAULT_STRING_FORMAT);
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
