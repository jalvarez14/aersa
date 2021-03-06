<?php


/**
 * Base class that represents a row from the 'notacreditodetalle' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseNotacreditodetalle extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'NotacreditodetallePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        NotacreditodetallePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idnotacreditodetalle field.
     * @var        int
     */
    protected $idnotacreditodetalle;

    /**
     * The value for the idnotacredito field.
     * @var        int
     */
    protected $idnotacredito;

    /**
     * The value for the idproducto field.
     * @var        int
     */
    protected $idproducto;

    /**
     * The value for the idalmacen field.
     * @var        int
     */
    protected $idalmacen;

    /**
     * The value for the notacreditodetalle_cantidad field.
     * @var        double
     */
    protected $notacreditodetalle_cantidad;

    /**
     * The value for the notacreditodetalle_revisada field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $notacreditodetalle_revisada;

    /**
     * The value for the notacreditodetalle_ieps field.
     * @var        double
     */
    protected $notacreditodetalle_ieps;

    /**
     * The value for the notacreditodetalle_descuento field.
     * @var        double
     */
    protected $notacreditodetalle_descuento;

    /**
     * The value for the notacreditodetalle_subtotal field.
     * @var        string
     */
    protected $notacreditodetalle_subtotal;

    /**
     * The value for the notacreditodetalle_costounitario field.
     * @var        string
     */
    protected $notacreditodetalle_costounitario;

    /**
     * The value for the notacreditodetalle_costounitarioneto field.
     * @var        string
     */
    protected $notacreditodetalle_costounitarioneto;

    /**
     * @var        Almacen
     */
    protected $aAlmacen;

    /**
     * @var        Notacredito
     */
    protected $aNotacredito;

    /**
     * @var        Producto
     */
    protected $aProducto;

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
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->notacreditodetalle_revisada = false;
    }

    /**
     * Initializes internal state of BaseNotacreditodetalle object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [idnotacreditodetalle] column value.
     *
     * @return int
     */
    public function getIdnotacreditodetalle()
    {

        return $this->idnotacreditodetalle;
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
     * Get the [idproducto] column value.
     *
     * @return int
     */
    public function getIdproducto()
    {

        return $this->idproducto;
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
     * Get the [notacreditodetalle_cantidad] column value.
     *
     * @return double
     */
    public function getNotacreditodetalleCantidad()
    {

        return $this->notacreditodetalle_cantidad;
    }

    /**
     * Get the [notacreditodetalle_revisada] column value.
     *
     * @return boolean
     */
    public function getNotacreditodetalleRevisada()
    {

        return $this->notacreditodetalle_revisada;
    }

    /**
     * Get the [notacreditodetalle_ieps] column value.
     *
     * @return double
     */
    public function getNotacreditodetalleIeps()
    {

        return $this->notacreditodetalle_ieps;
    }

    /**
     * Get the [notacreditodetalle_descuento] column value.
     *
     * @return double
     */
    public function getNotacreditodetalleDescuento()
    {

        return $this->notacreditodetalle_descuento;
    }

    /**
     * Get the [notacreditodetalle_subtotal] column value.
     *
     * @return string
     */
    public function getNotacreditodetalleSubtotal()
    {

        return $this->notacreditodetalle_subtotal;
    }

    /**
     * Get the [notacreditodetalle_costounitario] column value.
     *
     * @return string
     */
    public function getNotacreditodetalleCostounitario()
    {

        return $this->notacreditodetalle_costounitario;
    }

    /**
     * Get the [notacreditodetalle_costounitarioneto] column value.
     *
     * @return string
     */
    public function getNotacreditodetalleCostounitarioneto()
    {

        return $this->notacreditodetalle_costounitarioneto;
    }

    /**
     * Set the value of [idnotacreditodetalle] column.
     *
     * @param  int $v new value
     * @return Notacreditodetalle The current object (for fluent API support)
     */
    public function setIdnotacreditodetalle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idnotacreditodetalle !== $v) {
            $this->idnotacreditodetalle = $v;
            $this->modifiedColumns[] = NotacreditodetallePeer::IDNOTACREDITODETALLE;
        }


        return $this;
    } // setIdnotacreditodetalle()

    /**
     * Set the value of [idnotacredito] column.
     *
     * @param  int $v new value
     * @return Notacreditodetalle The current object (for fluent API support)
     */
    public function setIdnotacredito($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idnotacredito !== $v) {
            $this->idnotacredito = $v;
            $this->modifiedColumns[] = NotacreditodetallePeer::IDNOTACREDITO;
        }

        if ($this->aNotacredito !== null && $this->aNotacredito->getIdnotacredito() !== $v) {
            $this->aNotacredito = null;
        }


        return $this;
    } // setIdnotacredito()

    /**
     * Set the value of [idproducto] column.
     *
     * @param  int $v new value
     * @return Notacreditodetalle The current object (for fluent API support)
     */
    public function setIdproducto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproducto !== $v) {
            $this->idproducto = $v;
            $this->modifiedColumns[] = NotacreditodetallePeer::IDPRODUCTO;
        }

        if ($this->aProducto !== null && $this->aProducto->getIdproducto() !== $v) {
            $this->aProducto = null;
        }


        return $this;
    } // setIdproducto()

    /**
     * Set the value of [idalmacen] column.
     *
     * @param  int $v new value
     * @return Notacreditodetalle The current object (for fluent API support)
     */
    public function setIdalmacen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idalmacen !== $v) {
            $this->idalmacen = $v;
            $this->modifiedColumns[] = NotacreditodetallePeer::IDALMACEN;
        }

        if ($this->aAlmacen !== null && $this->aAlmacen->getIdalmacen() !== $v) {
            $this->aAlmacen = null;
        }


        return $this;
    } // setIdalmacen()

    /**
     * Set the value of [notacreditodetalle_cantidad] column.
     *
     * @param  double $v new value
     * @return Notacreditodetalle The current object (for fluent API support)
     */
    public function setNotacreditodetalleCantidad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->notacreditodetalle_cantidad !== $v) {
            $this->notacreditodetalle_cantidad = $v;
            $this->modifiedColumns[] = NotacreditodetallePeer::NOTACREDITODETALLE_CANTIDAD;
        }


        return $this;
    } // setNotacreditodetalleCantidad()

    /**
     * Sets the value of the [notacreditodetalle_revisada] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Notacreditodetalle The current object (for fluent API support)
     */
    public function setNotacreditodetalleRevisada($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->notacreditodetalle_revisada !== $v) {
            $this->notacreditodetalle_revisada = $v;
            $this->modifiedColumns[] = NotacreditodetallePeer::NOTACREDITODETALLE_REVISADA;
        }


        return $this;
    } // setNotacreditodetalleRevisada()

    /**
     * Set the value of [notacreditodetalle_ieps] column.
     *
     * @param  double $v new value
     * @return Notacreditodetalle The current object (for fluent API support)
     */
    public function setNotacreditodetalleIeps($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->notacreditodetalle_ieps !== $v) {
            $this->notacreditodetalle_ieps = $v;
            $this->modifiedColumns[] = NotacreditodetallePeer::NOTACREDITODETALLE_IEPS;
        }


        return $this;
    } // setNotacreditodetalleIeps()

    /**
     * Set the value of [notacreditodetalle_descuento] column.
     *
     * @param  double $v new value
     * @return Notacreditodetalle The current object (for fluent API support)
     */
    public function setNotacreditodetalleDescuento($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->notacreditodetalle_descuento !== $v) {
            $this->notacreditodetalle_descuento = $v;
            $this->modifiedColumns[] = NotacreditodetallePeer::NOTACREDITODETALLE_DESCUENTO;
        }


        return $this;
    } // setNotacreditodetalleDescuento()

    /**
     * Set the value of [notacreditodetalle_subtotal] column.
     *
     * @param  string $v new value
     * @return Notacreditodetalle The current object (for fluent API support)
     */
    public function setNotacreditodetalleSubtotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->notacreditodetalle_subtotal !== $v) {
            $this->notacreditodetalle_subtotal = $v;
            $this->modifiedColumns[] = NotacreditodetallePeer::NOTACREDITODETALLE_SUBTOTAL;
        }


        return $this;
    } // setNotacreditodetalleSubtotal()

    /**
     * Set the value of [notacreditodetalle_costounitario] column.
     *
     * @param  string $v new value
     * @return Notacreditodetalle The current object (for fluent API support)
     */
    public function setNotacreditodetalleCostounitario($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->notacreditodetalle_costounitario !== $v) {
            $this->notacreditodetalle_costounitario = $v;
            $this->modifiedColumns[] = NotacreditodetallePeer::NOTACREDITODETALLE_COSTOUNITARIO;
        }


        return $this;
    } // setNotacreditodetalleCostounitario()

    /**
     * Set the value of [notacreditodetalle_costounitarioneto] column.
     *
     * @param  string $v new value
     * @return Notacreditodetalle The current object (for fluent API support)
     */
    public function setNotacreditodetalleCostounitarioneto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->notacreditodetalle_costounitarioneto !== $v) {
            $this->notacreditodetalle_costounitarioneto = $v;
            $this->modifiedColumns[] = NotacreditodetallePeer::NOTACREDITODETALLE_COSTOUNITARIONETO;
        }


        return $this;
    } // setNotacreditodetalleCostounitarioneto()

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
            if ($this->notacreditodetalle_revisada !== false) {
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

            $this->idnotacreditodetalle = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idnotacredito = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idproducto = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->idalmacen = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->notacreditodetalle_cantidad = ($row[$startcol + 4] !== null) ? (double) $row[$startcol + 4] : null;
            $this->notacreditodetalle_revisada = ($row[$startcol + 5] !== null) ? (boolean) $row[$startcol + 5] : null;
            $this->notacreditodetalle_ieps = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
            $this->notacreditodetalle_descuento = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->notacreditodetalle_subtotal = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->notacreditodetalle_costounitario = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->notacreditodetalle_costounitarioneto = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 11; // 11 = NotacreditodetallePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Notacreditodetalle object", $e);
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

        if ($this->aNotacredito !== null && $this->idnotacredito !== $this->aNotacredito->getIdnotacredito()) {
            $this->aNotacredito = null;
        }
        if ($this->aProducto !== null && $this->idproducto !== $this->aProducto->getIdproducto()) {
            $this->aProducto = null;
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
            $con = Propel::getConnection(NotacreditodetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = NotacreditodetallePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aAlmacen = null;
            $this->aNotacredito = null;
            $this->aProducto = null;
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
            $con = Propel::getConnection(NotacreditodetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = NotacreditodetalleQuery::create()
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
            $con = Propel::getConnection(NotacreditodetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                NotacreditodetallePeer::addInstanceToPool($this);
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

            if ($this->aNotacredito !== null) {
                if ($this->aNotacredito->isModified() || $this->aNotacredito->isNew()) {
                    $affectedRows += $this->aNotacredito->save($con);
                }
                $this->setNotacredito($this->aNotacredito);
            }

            if ($this->aProducto !== null) {
                if ($this->aProducto->isModified() || $this->aProducto->isNew()) {
                    $affectedRows += $this->aProducto->save($con);
                }
                $this->setProducto($this->aProducto);
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

        $this->modifiedColumns[] = NotacreditodetallePeer::IDNOTACREDITODETALLE;
        if (null !== $this->idnotacreditodetalle) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . NotacreditodetallePeer::IDNOTACREDITODETALLE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(NotacreditodetallePeer::IDNOTACREDITODETALLE)) {
            $modifiedColumns[':p' . $index++]  = '`idnotacreditodetalle`';
        }
        if ($this->isColumnModified(NotacreditodetallePeer::IDNOTACREDITO)) {
            $modifiedColumns[':p' . $index++]  = '`idnotacredito`';
        }
        if ($this->isColumnModified(NotacreditodetallePeer::IDPRODUCTO)) {
            $modifiedColumns[':p' . $index++]  = '`idproducto`';
        }
        if ($this->isColumnModified(NotacreditodetallePeer::IDALMACEN)) {
            $modifiedColumns[':p' . $index++]  = '`idalmacen`';
        }
        if ($this->isColumnModified(NotacreditodetallePeer::NOTACREDITODETALLE_CANTIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`notacreditodetalle_cantidad`';
        }
        if ($this->isColumnModified(NotacreditodetallePeer::NOTACREDITODETALLE_REVISADA)) {
            $modifiedColumns[':p' . $index++]  = '`notacreditodetalle_revisada`';
        }
        if ($this->isColumnModified(NotacreditodetallePeer::NOTACREDITODETALLE_IEPS)) {
            $modifiedColumns[':p' . $index++]  = '`notacreditodetalle_ieps`';
        }
        if ($this->isColumnModified(NotacreditodetallePeer::NOTACREDITODETALLE_DESCUENTO)) {
            $modifiedColumns[':p' . $index++]  = '`notacreditodetalle_descuento`';
        }
        if ($this->isColumnModified(NotacreditodetallePeer::NOTACREDITODETALLE_SUBTOTAL)) {
            $modifiedColumns[':p' . $index++]  = '`notacreditodetalle_subtotal`';
        }
        if ($this->isColumnModified(NotacreditodetallePeer::NOTACREDITODETALLE_COSTOUNITARIO)) {
            $modifiedColumns[':p' . $index++]  = '`notacreditodetalle_costounitario`';
        }
        if ($this->isColumnModified(NotacreditodetallePeer::NOTACREDITODETALLE_COSTOUNITARIONETO)) {
            $modifiedColumns[':p' . $index++]  = '`notacreditodetalle_costounitarioneto`';
        }

        $sql = sprintf(
            'INSERT INTO `notacreditodetalle` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idnotacreditodetalle`':
                        $stmt->bindValue($identifier, $this->idnotacreditodetalle, PDO::PARAM_INT);
                        break;
                    case '`idnotacredito`':
                        $stmt->bindValue($identifier, $this->idnotacredito, PDO::PARAM_INT);
                        break;
                    case '`idproducto`':
                        $stmt->bindValue($identifier, $this->idproducto, PDO::PARAM_INT);
                        break;
                    case '`idalmacen`':
                        $stmt->bindValue($identifier, $this->idalmacen, PDO::PARAM_INT);
                        break;
                    case '`notacreditodetalle_cantidad`':
                        $stmt->bindValue($identifier, $this->notacreditodetalle_cantidad, PDO::PARAM_STR);
                        break;
                    case '`notacreditodetalle_revisada`':
                        $stmt->bindValue($identifier, (int) $this->notacreditodetalle_revisada, PDO::PARAM_INT);
                        break;
                    case '`notacreditodetalle_ieps`':
                        $stmt->bindValue($identifier, $this->notacreditodetalle_ieps, PDO::PARAM_STR);
                        break;
                    case '`notacreditodetalle_descuento`':
                        $stmt->bindValue($identifier, $this->notacreditodetalle_descuento, PDO::PARAM_STR);
                        break;
                    case '`notacreditodetalle_subtotal`':
                        $stmt->bindValue($identifier, $this->notacreditodetalle_subtotal, PDO::PARAM_STR);
                        break;
                    case '`notacreditodetalle_costounitario`':
                        $stmt->bindValue($identifier, $this->notacreditodetalle_costounitario, PDO::PARAM_STR);
                        break;
                    case '`notacreditodetalle_costounitarioneto`':
                        $stmt->bindValue($identifier, $this->notacreditodetalle_costounitarioneto, PDO::PARAM_STR);
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
        $this->setIdnotacreditodetalle($pk);

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

            if ($this->aNotacredito !== null) {
                if (!$this->aNotacredito->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aNotacredito->getValidationFailures());
                }
            }

            if ($this->aProducto !== null) {
                if (!$this->aProducto->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aProducto->getValidationFailures());
                }
            }


            if (($retval = NotacreditodetallePeer::doValidate($this, $columns)) !== true) {
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
        $pos = NotacreditodetallePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdnotacreditodetalle();
                break;
            case 1:
                return $this->getIdnotacredito();
                break;
            case 2:
                return $this->getIdproducto();
                break;
            case 3:
                return $this->getIdalmacen();
                break;
            case 4:
                return $this->getNotacreditodetalleCantidad();
                break;
            case 5:
                return $this->getNotacreditodetalleRevisada();
                break;
            case 6:
                return $this->getNotacreditodetalleIeps();
                break;
            case 7:
                return $this->getNotacreditodetalleDescuento();
                break;
            case 8:
                return $this->getNotacreditodetalleSubtotal();
                break;
            case 9:
                return $this->getNotacreditodetalleCostounitario();
                break;
            case 10:
                return $this->getNotacreditodetalleCostounitarioneto();
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
        if (isset($alreadyDumpedObjects['Notacreditodetalle'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Notacreditodetalle'][$this->getPrimaryKey()] = true;
        $keys = NotacreditodetallePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdnotacreditodetalle(),
            $keys[1] => $this->getIdnotacredito(),
            $keys[2] => $this->getIdproducto(),
            $keys[3] => $this->getIdalmacen(),
            $keys[4] => $this->getNotacreditodetalleCantidad(),
            $keys[5] => $this->getNotacreditodetalleRevisada(),
            $keys[6] => $this->getNotacreditodetalleIeps(),
            $keys[7] => $this->getNotacreditodetalleDescuento(),
            $keys[8] => $this->getNotacreditodetalleSubtotal(),
            $keys[9] => $this->getNotacreditodetalleCostounitario(),
            $keys[10] => $this->getNotacreditodetalleCostounitarioneto(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aAlmacen) {
                $result['Almacen'] = $this->aAlmacen->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aNotacredito) {
                $result['Notacredito'] = $this->aNotacredito->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aProducto) {
                $result['Producto'] = $this->aProducto->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = NotacreditodetallePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdnotacreditodetalle($value);
                break;
            case 1:
                $this->setIdnotacredito($value);
                break;
            case 2:
                $this->setIdproducto($value);
                break;
            case 3:
                $this->setIdalmacen($value);
                break;
            case 4:
                $this->setNotacreditodetalleCantidad($value);
                break;
            case 5:
                $this->setNotacreditodetalleRevisada($value);
                break;
            case 6:
                $this->setNotacreditodetalleIeps($value);
                break;
            case 7:
                $this->setNotacreditodetalleDescuento($value);
                break;
            case 8:
                $this->setNotacreditodetalleSubtotal($value);
                break;
            case 9:
                $this->setNotacreditodetalleCostounitario($value);
                break;
            case 10:
                $this->setNotacreditodetalleCostounitarioneto($value);
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
        $keys = NotacreditodetallePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdnotacreditodetalle($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdnotacredito($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdproducto($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdalmacen($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setNotacreditodetalleCantidad($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setNotacreditodetalleRevisada($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setNotacreditodetalleIeps($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setNotacreditodetalleDescuento($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setNotacreditodetalleSubtotal($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setNotacreditodetalleCostounitario($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setNotacreditodetalleCostounitarioneto($arr[$keys[10]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(NotacreditodetallePeer::DATABASE_NAME);

        if ($this->isColumnModified(NotacreditodetallePeer::IDNOTACREDITODETALLE)) $criteria->add(NotacreditodetallePeer::IDNOTACREDITODETALLE, $this->idnotacreditodetalle);
        if ($this->isColumnModified(NotacreditodetallePeer::IDNOTACREDITO)) $criteria->add(NotacreditodetallePeer::IDNOTACREDITO, $this->idnotacredito);
        if ($this->isColumnModified(NotacreditodetallePeer::IDPRODUCTO)) $criteria->add(NotacreditodetallePeer::IDPRODUCTO, $this->idproducto);
        if ($this->isColumnModified(NotacreditodetallePeer::IDALMACEN)) $criteria->add(NotacreditodetallePeer::IDALMACEN, $this->idalmacen);
        if ($this->isColumnModified(NotacreditodetallePeer::NOTACREDITODETALLE_CANTIDAD)) $criteria->add(NotacreditodetallePeer::NOTACREDITODETALLE_CANTIDAD, $this->notacreditodetalle_cantidad);
        if ($this->isColumnModified(NotacreditodetallePeer::NOTACREDITODETALLE_REVISADA)) $criteria->add(NotacreditodetallePeer::NOTACREDITODETALLE_REVISADA, $this->notacreditodetalle_revisada);
        if ($this->isColumnModified(NotacreditodetallePeer::NOTACREDITODETALLE_IEPS)) $criteria->add(NotacreditodetallePeer::NOTACREDITODETALLE_IEPS, $this->notacreditodetalle_ieps);
        if ($this->isColumnModified(NotacreditodetallePeer::NOTACREDITODETALLE_DESCUENTO)) $criteria->add(NotacreditodetallePeer::NOTACREDITODETALLE_DESCUENTO, $this->notacreditodetalle_descuento);
        if ($this->isColumnModified(NotacreditodetallePeer::NOTACREDITODETALLE_SUBTOTAL)) $criteria->add(NotacreditodetallePeer::NOTACREDITODETALLE_SUBTOTAL, $this->notacreditodetalle_subtotal);
        if ($this->isColumnModified(NotacreditodetallePeer::NOTACREDITODETALLE_COSTOUNITARIO)) $criteria->add(NotacreditodetallePeer::NOTACREDITODETALLE_COSTOUNITARIO, $this->notacreditodetalle_costounitario);
        if ($this->isColumnModified(NotacreditodetallePeer::NOTACREDITODETALLE_COSTOUNITARIONETO)) $criteria->add(NotacreditodetallePeer::NOTACREDITODETALLE_COSTOUNITARIONETO, $this->notacreditodetalle_costounitarioneto);

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
        $criteria = new Criteria(NotacreditodetallePeer::DATABASE_NAME);
        $criteria->add(NotacreditodetallePeer::IDNOTACREDITODETALLE, $this->idnotacreditodetalle);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdnotacreditodetalle();
    }

    /**
     * Generic method to set the primary key (idnotacreditodetalle column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdnotacreditodetalle($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdnotacreditodetalle();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Notacreditodetalle (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdnotacredito($this->getIdnotacredito());
        $copyObj->setIdproducto($this->getIdproducto());
        $copyObj->setIdalmacen($this->getIdalmacen());
        $copyObj->setNotacreditodetalleCantidad($this->getNotacreditodetalleCantidad());
        $copyObj->setNotacreditodetalleRevisada($this->getNotacreditodetalleRevisada());
        $copyObj->setNotacreditodetalleIeps($this->getNotacreditodetalleIeps());
        $copyObj->setNotacreditodetalleDescuento($this->getNotacreditodetalleDescuento());
        $copyObj->setNotacreditodetalleSubtotal($this->getNotacreditodetalleSubtotal());
        $copyObj->setNotacreditodetalleCostounitario($this->getNotacreditodetalleCostounitario());
        $copyObj->setNotacreditodetalleCostounitarioneto($this->getNotacreditodetalleCostounitarioneto());

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
            $copyObj->setIdnotacreditodetalle(NULL); // this is a auto-increment column, so set to default value
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
     * @return Notacreditodetalle Clone of current object.
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
     * @return NotacreditodetallePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new NotacreditodetallePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Almacen object.
     *
     * @param                  Almacen $v
     * @return Notacreditodetalle The current object (for fluent API support)
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
            $v->addNotacreditodetalle($this);
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
                $this->aAlmacen->addNotacreditodetalles($this);
             */
        }

        return $this->aAlmacen;
    }

    /**
     * Declares an association between this object and a Notacredito object.
     *
     * @param                  Notacredito $v
     * @return Notacreditodetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setNotacredito(Notacredito $v = null)
    {
        if ($v === null) {
            $this->setIdnotacredito(NULL);
        } else {
            $this->setIdnotacredito($v->getIdnotacredito());
        }

        $this->aNotacredito = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Notacredito object, it will not be re-added.
        if ($v !== null) {
            $v->addNotacreditodetalle($this);
        }


        return $this;
    }


    /**
     * Get the associated Notacredito object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Notacredito The associated Notacredito object.
     * @throws PropelException
     */
    public function getNotacredito(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aNotacredito === null && ($this->idnotacredito !== null) && $doQuery) {
            $this->aNotacredito = NotacreditoQuery::create()->findPk($this->idnotacredito, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aNotacredito->addNotacreditodetalles($this);
             */
        }

        return $this->aNotacredito;
    }

    /**
     * Declares an association between this object and a Producto object.
     *
     * @param                  Producto $v
     * @return Notacreditodetalle The current object (for fluent API support)
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
            $v->addNotacreditodetalle($this);
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
                $this->aProducto->addNotacreditodetalles($this);
             */
        }

        return $this->aProducto;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idnotacreditodetalle = null;
        $this->idnotacredito = null;
        $this->idproducto = null;
        $this->idalmacen = null;
        $this->notacreditodetalle_cantidad = null;
        $this->notacreditodetalle_revisada = null;
        $this->notacreditodetalle_ieps = null;
        $this->notacreditodetalle_descuento = null;
        $this->notacreditodetalle_subtotal = null;
        $this->notacreditodetalle_costounitario = null;
        $this->notacreditodetalle_costounitarioneto = null;
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
            if ($this->aAlmacen instanceof Persistent) {
              $this->aAlmacen->clearAllReferences($deep);
            }
            if ($this->aNotacredito instanceof Persistent) {
              $this->aNotacredito->clearAllReferences($deep);
            }
            if ($this->aProducto instanceof Persistent) {
              $this->aProducto->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aAlmacen = null;
        $this->aNotacredito = null;
        $this->aProducto = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(NotacreditodetallePeer::DEFAULT_STRING_FORMAT);
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
