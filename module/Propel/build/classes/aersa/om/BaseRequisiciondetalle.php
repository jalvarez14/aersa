<?php


/**
 * Base class that represents a row from the 'requisiciondetalle' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseRequisiciondetalle extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'RequisiciondetallePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        RequisiciondetallePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idrequisiciondetalle field.
     * @var        int
     */
    protected $idrequisiciondetalle;

    /**
     * The value for the idrequisicion field.
     * @var        int
     */
    protected $idrequisicion;

    /**
     * The value for the idproducto field.
     * @var        int
     */
    protected $idproducto;

    /**
     * The value for the requisiciondetalle_cantidad field.
     * @var        double
     */
    protected $requisiciondetalle_cantidad;

    /**
     * The value for the requisiciondetalle_revisada field.
     * @var        boolean
     */
    protected $requisiciondetalle_revisada;

    /**
     * The value for the requisiciondetalle_preciounitario field.
     * @var        string
     */
    protected $requisiciondetalle_preciounitario;

    /**
     * The value for the requisiciondetalle_subtotal field.
     * @var        string
     */
    protected $requisiciondetalle_subtotal;

    /**
     * The value for the idpadre field.
     * @var        int
     */
    protected $idpadre;

    /**
     * The value for the requisiciondetalle_contable field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $requisiciondetalle_contable;

    /**
     * @var        Requisiciondetalle
     */
    protected $aRequisiciondetalleRelatedByIdpadre;

    /**
     * @var        Producto
     */
    protected $aProducto;

    /**
     * @var        Requisicion
     */
    protected $aRequisicion;

    /**
     * @var        PropelObjectCollection|Requisiciondetalle[] Collection to store aggregation of Requisiciondetalle objects.
     */
    protected $collRequisiciondetallesRelatedByIdrequisiciondetalle;
    protected $collRequisiciondetallesRelatedByIdrequisiciondetallePartial;

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
    protected $requisiciondetallesRelatedByIdrequisiciondetalleScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->requisiciondetalle_contable = false;
    }

    /**
     * Initializes internal state of BaseRequisiciondetalle object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [idrequisiciondetalle] column value.
     *
     * @return int
     */
    public function getIdrequisiciondetalle()
    {

        return $this->idrequisiciondetalle;
    }

    /**
     * Get the [idrequisicion] column value.
     *
     * @return int
     */
    public function getIdrequisicion()
    {

        return $this->idrequisicion;
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
     * Get the [requisiciondetalle_cantidad] column value.
     *
     * @return double
     */
    public function getRequisiciondetalleCantidad()
    {

        return $this->requisiciondetalle_cantidad;
    }

    /**
     * Get the [requisiciondetalle_revisada] column value.
     *
     * @return boolean
     */
    public function getRequisiciondetalleRevisada()
    {

        return $this->requisiciondetalle_revisada;
    }

    /**
     * Get the [requisiciondetalle_preciounitario] column value.
     *
     * @return string
     */
    public function getRequisiciondetallePreciounitario()
    {

        return $this->requisiciondetalle_preciounitario;
    }

    /**
     * Get the [requisiciondetalle_subtotal] column value.
     *
     * @return string
     */
    public function getRequisiciondetalleSubtotal()
    {

        return $this->requisiciondetalle_subtotal;
    }

    /**
     * Get the [idpadre] column value.
     *
     * @return int
     */
    public function getIdpadre()
    {

        return $this->idpadre;
    }

    /**
     * Get the [requisiciondetalle_contable] column value.
     *
     * @return boolean
     */
    public function getRequisiciondetalleContable()
    {

        return $this->requisiciondetalle_contable;
    }

    /**
     * Set the value of [idrequisiciondetalle] column.
     *
     * @param  int $v new value
     * @return Requisiciondetalle The current object (for fluent API support)
     */
    public function setIdrequisiciondetalle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idrequisiciondetalle !== $v) {
            $this->idrequisiciondetalle = $v;
            $this->modifiedColumns[] = RequisiciondetallePeer::IDREQUISICIONDETALLE;
        }


        return $this;
    } // setIdrequisiciondetalle()

    /**
     * Set the value of [idrequisicion] column.
     *
     * @param  int $v new value
     * @return Requisiciondetalle The current object (for fluent API support)
     */
    public function setIdrequisicion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idrequisicion !== $v) {
            $this->idrequisicion = $v;
            $this->modifiedColumns[] = RequisiciondetallePeer::IDREQUISICION;
        }

        if ($this->aRequisicion !== null && $this->aRequisicion->getIdrequisicion() !== $v) {
            $this->aRequisicion = null;
        }


        return $this;
    } // setIdrequisicion()

    /**
     * Set the value of [idproducto] column.
     *
     * @param  int $v new value
     * @return Requisiciondetalle The current object (for fluent API support)
     */
    public function setIdproducto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproducto !== $v) {
            $this->idproducto = $v;
            $this->modifiedColumns[] = RequisiciondetallePeer::IDPRODUCTO;
        }

        if ($this->aProducto !== null && $this->aProducto->getIdproducto() !== $v) {
            $this->aProducto = null;
        }


        return $this;
    } // setIdproducto()

    /**
     * Set the value of [requisiciondetalle_cantidad] column.
     *
     * @param  double $v new value
     * @return Requisiciondetalle The current object (for fluent API support)
     */
    public function setRequisiciondetalleCantidad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->requisiciondetalle_cantidad !== $v) {
            $this->requisiciondetalle_cantidad = $v;
            $this->modifiedColumns[] = RequisiciondetallePeer::REQUISICIONDETALLE_CANTIDAD;
        }


        return $this;
    } // setRequisiciondetalleCantidad()

    /**
     * Sets the value of the [requisiciondetalle_revisada] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Requisiciondetalle The current object (for fluent API support)
     */
    public function setRequisiciondetalleRevisada($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->requisiciondetalle_revisada !== $v) {
            $this->requisiciondetalle_revisada = $v;
            $this->modifiedColumns[] = RequisiciondetallePeer::REQUISICIONDETALLE_REVISADA;
        }


        return $this;
    } // setRequisiciondetalleRevisada()

    /**
     * Set the value of [requisiciondetalle_preciounitario] column.
     *
     * @param  string $v new value
     * @return Requisiciondetalle The current object (for fluent API support)
     */
    public function setRequisiciondetallePreciounitario($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->requisiciondetalle_preciounitario !== $v) {
            $this->requisiciondetalle_preciounitario = $v;
            $this->modifiedColumns[] = RequisiciondetallePeer::REQUISICIONDETALLE_PRECIOUNITARIO;
        }


        return $this;
    } // setRequisiciondetallePreciounitario()

    /**
     * Set the value of [requisiciondetalle_subtotal] column.
     *
     * @param  string $v new value
     * @return Requisiciondetalle The current object (for fluent API support)
     */
    public function setRequisiciondetalleSubtotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->requisiciondetalle_subtotal !== $v) {
            $this->requisiciondetalle_subtotal = $v;
            $this->modifiedColumns[] = RequisiciondetallePeer::REQUISICIONDETALLE_SUBTOTAL;
        }


        return $this;
    } // setRequisiciondetalleSubtotal()

    /**
     * Set the value of [idpadre] column.
     *
     * @param  int $v new value
     * @return Requisiciondetalle The current object (for fluent API support)
     */
    public function setIdpadre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idpadre !== $v) {
            $this->idpadre = $v;
            $this->modifiedColumns[] = RequisiciondetallePeer::IDPADRE;
        }

        if ($this->aRequisiciondetalleRelatedByIdpadre !== null && $this->aRequisiciondetalleRelatedByIdpadre->getIdrequisiciondetalle() !== $v) {
            $this->aRequisiciondetalleRelatedByIdpadre = null;
        }


        return $this;
    } // setIdpadre()

    /**
     * Sets the value of the [requisiciondetalle_contable] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Requisiciondetalle The current object (for fluent API support)
     */
    public function setRequisiciondetalleContable($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->requisiciondetalle_contable !== $v) {
            $this->requisiciondetalle_contable = $v;
            $this->modifiedColumns[] = RequisiciondetallePeer::REQUISICIONDETALLE_CONTABLE;
        }


        return $this;
    } // setRequisiciondetalleContable()

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
            if ($this->requisiciondetalle_contable !== false) {
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

            $this->idrequisiciondetalle = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idrequisicion = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idproducto = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->requisiciondetalle_cantidad = ($row[$startcol + 3] !== null) ? (double) $row[$startcol + 3] : null;
            $this->requisiciondetalle_revisada = ($row[$startcol + 4] !== null) ? (boolean) $row[$startcol + 4] : null;
            $this->requisiciondetalle_preciounitario = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->requisiciondetalle_subtotal = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->idpadre = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->requisiciondetalle_contable = ($row[$startcol + 8] !== null) ? (boolean) $row[$startcol + 8] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 9; // 9 = RequisiciondetallePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Requisiciondetalle object", $e);
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

        if ($this->aRequisicion !== null && $this->idrequisicion !== $this->aRequisicion->getIdrequisicion()) {
            $this->aRequisicion = null;
        }
        if ($this->aProducto !== null && $this->idproducto !== $this->aProducto->getIdproducto()) {
            $this->aProducto = null;
        }
        if ($this->aRequisiciondetalleRelatedByIdpadre !== null && $this->idpadre !== $this->aRequisiciondetalleRelatedByIdpadre->getIdrequisiciondetalle()) {
            $this->aRequisiciondetalleRelatedByIdpadre = null;
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
            $con = Propel::getConnection(RequisiciondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = RequisiciondetallePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aRequisiciondetalleRelatedByIdpadre = null;
            $this->aProducto = null;
            $this->aRequisicion = null;
            $this->collRequisiciondetallesRelatedByIdrequisiciondetalle = null;

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
            $con = Propel::getConnection(RequisiciondetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = RequisiciondetalleQuery::create()
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
            $con = Propel::getConnection(RequisiciondetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                RequisiciondetallePeer::addInstanceToPool($this);
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

            if ($this->aRequisiciondetalleRelatedByIdpadre !== null) {
                if ($this->aRequisiciondetalleRelatedByIdpadre->isModified() || $this->aRequisiciondetalleRelatedByIdpadre->isNew()) {
                    $affectedRows += $this->aRequisiciondetalleRelatedByIdpadre->save($con);
                }
                $this->setRequisiciondetalleRelatedByIdpadre($this->aRequisiciondetalleRelatedByIdpadre);
            }

            if ($this->aProducto !== null) {
                if ($this->aProducto->isModified() || $this->aProducto->isNew()) {
                    $affectedRows += $this->aProducto->save($con);
                }
                $this->setProducto($this->aProducto);
            }

            if ($this->aRequisicion !== null) {
                if ($this->aRequisicion->isModified() || $this->aRequisicion->isNew()) {
                    $affectedRows += $this->aRequisicion->save($con);
                }
                $this->setRequisicion($this->aRequisicion);
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

            if ($this->requisiciondetallesRelatedByIdrequisiciondetalleScheduledForDeletion !== null) {
                if (!$this->requisiciondetallesRelatedByIdrequisiciondetalleScheduledForDeletion->isEmpty()) {
                    RequisiciondetalleQuery::create()
                        ->filterByPrimaryKeys($this->requisiciondetallesRelatedByIdrequisiciondetalleScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->requisiciondetallesRelatedByIdrequisiciondetalleScheduledForDeletion = null;
                }
            }

            if ($this->collRequisiciondetallesRelatedByIdrequisiciondetalle !== null) {
                foreach ($this->collRequisiciondetallesRelatedByIdrequisiciondetalle as $referrerFK) {
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

        $this->modifiedColumns[] = RequisiciondetallePeer::IDREQUISICIONDETALLE;
        if (null !== $this->idrequisiciondetalle) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . RequisiciondetallePeer::IDREQUISICIONDETALLE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(RequisiciondetallePeer::IDREQUISICIONDETALLE)) {
            $modifiedColumns[':p' . $index++]  = '`idrequisiciondetalle`';
        }
        if ($this->isColumnModified(RequisiciondetallePeer::IDREQUISICION)) {
            $modifiedColumns[':p' . $index++]  = '`idrequisicion`';
        }
        if ($this->isColumnModified(RequisiciondetallePeer::IDPRODUCTO)) {
            $modifiedColumns[':p' . $index++]  = '`idproducto`';
        }
        if ($this->isColumnModified(RequisiciondetallePeer::REQUISICIONDETALLE_CANTIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`requisiciondetalle_cantidad`';
        }
        if ($this->isColumnModified(RequisiciondetallePeer::REQUISICIONDETALLE_REVISADA)) {
            $modifiedColumns[':p' . $index++]  = '`requisiciondetalle_revisada`';
        }
        if ($this->isColumnModified(RequisiciondetallePeer::REQUISICIONDETALLE_PRECIOUNITARIO)) {
            $modifiedColumns[':p' . $index++]  = '`requisiciondetalle_preciounitario`';
        }
        if ($this->isColumnModified(RequisiciondetallePeer::REQUISICIONDETALLE_SUBTOTAL)) {
            $modifiedColumns[':p' . $index++]  = '`requisiciondetalle_subtotal`';
        }
        if ($this->isColumnModified(RequisiciondetallePeer::IDPADRE)) {
            $modifiedColumns[':p' . $index++]  = '`idpadre`';
        }
        if ($this->isColumnModified(RequisiciondetallePeer::REQUISICIONDETALLE_CONTABLE)) {
            $modifiedColumns[':p' . $index++]  = '`requisiciondetalle_contable`';
        }

        $sql = sprintf(
            'INSERT INTO `requisiciondetalle` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idrequisiciondetalle`':
                        $stmt->bindValue($identifier, $this->idrequisiciondetalle, PDO::PARAM_INT);
                        break;
                    case '`idrequisicion`':
                        $stmt->bindValue($identifier, $this->idrequisicion, PDO::PARAM_INT);
                        break;
                    case '`idproducto`':
                        $stmt->bindValue($identifier, $this->idproducto, PDO::PARAM_INT);
                        break;
                    case '`requisiciondetalle_cantidad`':
                        $stmt->bindValue($identifier, $this->requisiciondetalle_cantidad, PDO::PARAM_STR);
                        break;
                    case '`requisiciondetalle_revisada`':
                        $stmt->bindValue($identifier, (int) $this->requisiciondetalle_revisada, PDO::PARAM_INT);
                        break;
                    case '`requisiciondetalle_preciounitario`':
                        $stmt->bindValue($identifier, $this->requisiciondetalle_preciounitario, PDO::PARAM_STR);
                        break;
                    case '`requisiciondetalle_subtotal`':
                        $stmt->bindValue($identifier, $this->requisiciondetalle_subtotal, PDO::PARAM_STR);
                        break;
                    case '`idpadre`':
                        $stmt->bindValue($identifier, $this->idpadre, PDO::PARAM_INT);
                        break;
                    case '`requisiciondetalle_contable`':
                        $stmt->bindValue($identifier, (int) $this->requisiciondetalle_contable, PDO::PARAM_INT);
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
        $this->setIdrequisiciondetalle($pk);

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

            if ($this->aRequisiciondetalleRelatedByIdpadre !== null) {
                if (!$this->aRequisiciondetalleRelatedByIdpadre->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRequisiciondetalleRelatedByIdpadre->getValidationFailures());
                }
            }

            if ($this->aProducto !== null) {
                if (!$this->aProducto->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aProducto->getValidationFailures());
                }
            }

            if ($this->aRequisicion !== null) {
                if (!$this->aRequisicion->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRequisicion->getValidationFailures());
                }
            }


            if (($retval = RequisiciondetallePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collRequisiciondetallesRelatedByIdrequisiciondetalle !== null) {
                    foreach ($this->collRequisiciondetallesRelatedByIdrequisiciondetalle as $referrerFK) {
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
        $pos = RequisiciondetallePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdrequisiciondetalle();
                break;
            case 1:
                return $this->getIdrequisicion();
                break;
            case 2:
                return $this->getIdproducto();
                break;
            case 3:
                return $this->getRequisiciondetalleCantidad();
                break;
            case 4:
                return $this->getRequisiciondetalleRevisada();
                break;
            case 5:
                return $this->getRequisiciondetallePreciounitario();
                break;
            case 6:
                return $this->getRequisiciondetalleSubtotal();
                break;
            case 7:
                return $this->getIdpadre();
                break;
            case 8:
                return $this->getRequisiciondetalleContable();
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
        if (isset($alreadyDumpedObjects['Requisiciondetalle'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Requisiciondetalle'][$this->getPrimaryKey()] = true;
        $keys = RequisiciondetallePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdrequisiciondetalle(),
            $keys[1] => $this->getIdrequisicion(),
            $keys[2] => $this->getIdproducto(),
            $keys[3] => $this->getRequisiciondetalleCantidad(),
            $keys[4] => $this->getRequisiciondetalleRevisada(),
            $keys[5] => $this->getRequisiciondetallePreciounitario(),
            $keys[6] => $this->getRequisiciondetalleSubtotal(),
            $keys[7] => $this->getIdpadre(),
            $keys[8] => $this->getRequisiciondetalleContable(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aRequisiciondetalleRelatedByIdpadre) {
                $result['RequisiciondetalleRelatedByIdpadre'] = $this->aRequisiciondetalleRelatedByIdpadre->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aProducto) {
                $result['Producto'] = $this->aProducto->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRequisicion) {
                $result['Requisicion'] = $this->aRequisicion->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collRequisiciondetallesRelatedByIdrequisiciondetalle) {
                $result['RequisiciondetallesRelatedByIdrequisiciondetalle'] = $this->collRequisiciondetallesRelatedByIdrequisiciondetalle->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = RequisiciondetallePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdrequisiciondetalle($value);
                break;
            case 1:
                $this->setIdrequisicion($value);
                break;
            case 2:
                $this->setIdproducto($value);
                break;
            case 3:
                $this->setRequisiciondetalleCantidad($value);
                break;
            case 4:
                $this->setRequisiciondetalleRevisada($value);
                break;
            case 5:
                $this->setRequisiciondetallePreciounitario($value);
                break;
            case 6:
                $this->setRequisiciondetalleSubtotal($value);
                break;
            case 7:
                $this->setIdpadre($value);
                break;
            case 8:
                $this->setRequisiciondetalleContable($value);
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
        $keys = RequisiciondetallePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdrequisiciondetalle($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdrequisicion($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdproducto($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setRequisiciondetalleCantidad($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setRequisiciondetalleRevisada($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setRequisiciondetallePreciounitario($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setRequisiciondetalleSubtotal($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdpadre($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setRequisiciondetalleContable($arr[$keys[8]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(RequisiciondetallePeer::DATABASE_NAME);

        if ($this->isColumnModified(RequisiciondetallePeer::IDREQUISICIONDETALLE)) $criteria->add(RequisiciondetallePeer::IDREQUISICIONDETALLE, $this->idrequisiciondetalle);
        if ($this->isColumnModified(RequisiciondetallePeer::IDREQUISICION)) $criteria->add(RequisiciondetallePeer::IDREQUISICION, $this->idrequisicion);
        if ($this->isColumnModified(RequisiciondetallePeer::IDPRODUCTO)) $criteria->add(RequisiciondetallePeer::IDPRODUCTO, $this->idproducto);
        if ($this->isColumnModified(RequisiciondetallePeer::REQUISICIONDETALLE_CANTIDAD)) $criteria->add(RequisiciondetallePeer::REQUISICIONDETALLE_CANTIDAD, $this->requisiciondetalle_cantidad);
        if ($this->isColumnModified(RequisiciondetallePeer::REQUISICIONDETALLE_REVISADA)) $criteria->add(RequisiciondetallePeer::REQUISICIONDETALLE_REVISADA, $this->requisiciondetalle_revisada);
        if ($this->isColumnModified(RequisiciondetallePeer::REQUISICIONDETALLE_PRECIOUNITARIO)) $criteria->add(RequisiciondetallePeer::REQUISICIONDETALLE_PRECIOUNITARIO, $this->requisiciondetalle_preciounitario);
        if ($this->isColumnModified(RequisiciondetallePeer::REQUISICIONDETALLE_SUBTOTAL)) $criteria->add(RequisiciondetallePeer::REQUISICIONDETALLE_SUBTOTAL, $this->requisiciondetalle_subtotal);
        if ($this->isColumnModified(RequisiciondetallePeer::IDPADRE)) $criteria->add(RequisiciondetallePeer::IDPADRE, $this->idpadre);
        if ($this->isColumnModified(RequisiciondetallePeer::REQUISICIONDETALLE_CONTABLE)) $criteria->add(RequisiciondetallePeer::REQUISICIONDETALLE_CONTABLE, $this->requisiciondetalle_contable);

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
        $criteria = new Criteria(RequisiciondetallePeer::DATABASE_NAME);
        $criteria->add(RequisiciondetallePeer::IDREQUISICIONDETALLE, $this->idrequisiciondetalle);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdrequisiciondetalle();
    }

    /**
     * Generic method to set the primary key (idrequisiciondetalle column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdrequisiciondetalle($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdrequisiciondetalle();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Requisiciondetalle (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdrequisicion($this->getIdrequisicion());
        $copyObj->setIdproducto($this->getIdproducto());
        $copyObj->setRequisiciondetalleCantidad($this->getRequisiciondetalleCantidad());
        $copyObj->setRequisiciondetalleRevisada($this->getRequisiciondetalleRevisada());
        $copyObj->setRequisiciondetallePreciounitario($this->getRequisiciondetallePreciounitario());
        $copyObj->setRequisiciondetalleSubtotal($this->getRequisiciondetalleSubtotal());
        $copyObj->setIdpadre($this->getIdpadre());
        $copyObj->setRequisiciondetalleContable($this->getRequisiciondetalleContable());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getRequisiciondetallesRelatedByIdrequisiciondetalle() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addRequisiciondetalleRelatedByIdrequisiciondetalle($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdrequisiciondetalle(NULL); // this is a auto-increment column, so set to default value
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
     * @return Requisiciondetalle Clone of current object.
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
     * @return RequisiciondetallePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new RequisiciondetallePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Requisiciondetalle object.
     *
     * @param                  Requisiciondetalle $v
     * @return Requisiciondetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRequisiciondetalleRelatedByIdpadre(Requisiciondetalle $v = null)
    {
        if ($v === null) {
            $this->setIdpadre(NULL);
        } else {
            $this->setIdpadre($v->getIdrequisiciondetalle());
        }

        $this->aRequisiciondetalleRelatedByIdpadre = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Requisiciondetalle object, it will not be re-added.
        if ($v !== null) {
            $v->addRequisiciondetalleRelatedByIdrequisiciondetalle($this);
        }


        return $this;
    }


    /**
     * Get the associated Requisiciondetalle object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Requisiciondetalle The associated Requisiciondetalle object.
     * @throws PropelException
     */
    public function getRequisiciondetalleRelatedByIdpadre(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRequisiciondetalleRelatedByIdpadre === null && ($this->idpadre !== null) && $doQuery) {
            $this->aRequisiciondetalleRelatedByIdpadre = RequisiciondetalleQuery::create()->findPk($this->idpadre, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRequisiciondetalleRelatedByIdpadre->addRequisiciondetallesRelatedByIdrequisiciondetalle($this);
             */
        }

        return $this->aRequisiciondetalleRelatedByIdpadre;
    }

    /**
     * Declares an association between this object and a Producto object.
     *
     * @param                  Producto $v
     * @return Requisiciondetalle The current object (for fluent API support)
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
            $v->addRequisiciondetalle($this);
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
                $this->aProducto->addRequisiciondetalles($this);
             */
        }

        return $this->aProducto;
    }

    /**
     * Declares an association between this object and a Requisicion object.
     *
     * @param                  Requisicion $v
     * @return Requisiciondetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRequisicion(Requisicion $v = null)
    {
        if ($v === null) {
            $this->setIdrequisicion(NULL);
        } else {
            $this->setIdrequisicion($v->getIdrequisicion());
        }

        $this->aRequisicion = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Requisicion object, it will not be re-added.
        if ($v !== null) {
            $v->addRequisiciondetalle($this);
        }


        return $this;
    }


    /**
     * Get the associated Requisicion object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Requisicion The associated Requisicion object.
     * @throws PropelException
     */
    public function getRequisicion(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRequisicion === null && ($this->idrequisicion !== null) && $doQuery) {
            $this->aRequisicion = RequisicionQuery::create()->findPk($this->idrequisicion, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRequisicion->addRequisiciondetalles($this);
             */
        }

        return $this->aRequisicion;
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
        if ('RequisiciondetalleRelatedByIdrequisiciondetalle' == $relationName) {
            $this->initRequisiciondetallesRelatedByIdrequisiciondetalle();
        }
    }

    /**
     * Clears out the collRequisiciondetallesRelatedByIdrequisiciondetalle collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Requisiciondetalle The current object (for fluent API support)
     * @see        addRequisiciondetallesRelatedByIdrequisiciondetalle()
     */
    public function clearRequisiciondetallesRelatedByIdrequisiciondetalle()
    {
        $this->collRequisiciondetallesRelatedByIdrequisiciondetalle = null; // important to set this to null since that means it is uninitialized
        $this->collRequisiciondetallesRelatedByIdrequisiciondetallePartial = null;

        return $this;
    }

    /**
     * reset is the collRequisiciondetallesRelatedByIdrequisiciondetalle collection loaded partially
     *
     * @return void
     */
    public function resetPartialRequisiciondetallesRelatedByIdrequisiciondetalle($v = true)
    {
        $this->collRequisiciondetallesRelatedByIdrequisiciondetallePartial = $v;
    }

    /**
     * Initializes the collRequisiciondetallesRelatedByIdrequisiciondetalle collection.
     *
     * By default this just sets the collRequisiciondetallesRelatedByIdrequisiciondetalle collection to an empty array (like clearcollRequisiciondetallesRelatedByIdrequisiciondetalle());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initRequisiciondetallesRelatedByIdrequisiciondetalle($overrideExisting = true)
    {
        if (null !== $this->collRequisiciondetallesRelatedByIdrequisiciondetalle && !$overrideExisting) {
            return;
        }
        $this->collRequisiciondetallesRelatedByIdrequisiciondetalle = new PropelObjectCollection();
        $this->collRequisiciondetallesRelatedByIdrequisiciondetalle->setModel('Requisiciondetalle');
    }

    /**
     * Gets an array of Requisiciondetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Requisiciondetalle is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Requisiciondetalle[] List of Requisiciondetalle objects
     * @throws PropelException
     */
    public function getRequisiciondetallesRelatedByIdrequisiciondetalle($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collRequisiciondetallesRelatedByIdrequisiciondetallePartial && !$this->isNew();
        if (null === $this->collRequisiciondetallesRelatedByIdrequisiciondetalle || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collRequisiciondetallesRelatedByIdrequisiciondetalle) {
                // return empty collection
                $this->initRequisiciondetallesRelatedByIdrequisiciondetalle();
            } else {
                $collRequisiciondetallesRelatedByIdrequisiciondetalle = RequisiciondetalleQuery::create(null, $criteria)
                    ->filterByRequisiciondetalleRelatedByIdpadre($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collRequisiciondetallesRelatedByIdrequisiciondetallePartial && count($collRequisiciondetallesRelatedByIdrequisiciondetalle)) {
                      $this->initRequisiciondetallesRelatedByIdrequisiciondetalle(false);

                      foreach ($collRequisiciondetallesRelatedByIdrequisiciondetalle as $obj) {
                        if (false == $this->collRequisiciondetallesRelatedByIdrequisiciondetalle->contains($obj)) {
                          $this->collRequisiciondetallesRelatedByIdrequisiciondetalle->append($obj);
                        }
                      }

                      $this->collRequisiciondetallesRelatedByIdrequisiciondetallePartial = true;
                    }

                    $collRequisiciondetallesRelatedByIdrequisiciondetalle->getInternalIterator()->rewind();

                    return $collRequisiciondetallesRelatedByIdrequisiciondetalle;
                }

                if ($partial && $this->collRequisiciondetallesRelatedByIdrequisiciondetalle) {
                    foreach ($this->collRequisiciondetallesRelatedByIdrequisiciondetalle as $obj) {
                        if ($obj->isNew()) {
                            $collRequisiciondetallesRelatedByIdrequisiciondetalle[] = $obj;
                        }
                    }
                }

                $this->collRequisiciondetallesRelatedByIdrequisiciondetalle = $collRequisiciondetallesRelatedByIdrequisiciondetalle;
                $this->collRequisiciondetallesRelatedByIdrequisiciondetallePartial = false;
            }
        }

        return $this->collRequisiciondetallesRelatedByIdrequisiciondetalle;
    }

    /**
     * Sets a collection of RequisiciondetalleRelatedByIdrequisiciondetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $requisiciondetallesRelatedByIdrequisiciondetalle A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Requisiciondetalle The current object (for fluent API support)
     */
    public function setRequisiciondetallesRelatedByIdrequisiciondetalle(PropelCollection $requisiciondetallesRelatedByIdrequisiciondetalle, PropelPDO $con = null)
    {
        $requisiciondetallesRelatedByIdrequisiciondetalleToDelete = $this->getRequisiciondetallesRelatedByIdrequisiciondetalle(new Criteria(), $con)->diff($requisiciondetallesRelatedByIdrequisiciondetalle);


        $this->requisiciondetallesRelatedByIdrequisiciondetalleScheduledForDeletion = $requisiciondetallesRelatedByIdrequisiciondetalleToDelete;

        foreach ($requisiciondetallesRelatedByIdrequisiciondetalleToDelete as $requisiciondetalleRelatedByIdrequisiciondetalleRemoved) {
            $requisiciondetalleRelatedByIdrequisiciondetalleRemoved->setRequisiciondetalleRelatedByIdpadre(null);
        }

        $this->collRequisiciondetallesRelatedByIdrequisiciondetalle = null;
        foreach ($requisiciondetallesRelatedByIdrequisiciondetalle as $requisiciondetalleRelatedByIdrequisiciondetalle) {
            $this->addRequisiciondetalleRelatedByIdrequisiciondetalle($requisiciondetalleRelatedByIdrequisiciondetalle);
        }

        $this->collRequisiciondetallesRelatedByIdrequisiciondetalle = $requisiciondetallesRelatedByIdrequisiciondetalle;
        $this->collRequisiciondetallesRelatedByIdrequisiciondetallePartial = false;

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
    public function countRequisiciondetallesRelatedByIdrequisiciondetalle(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collRequisiciondetallesRelatedByIdrequisiciondetallePartial && !$this->isNew();
        if (null === $this->collRequisiciondetallesRelatedByIdrequisiciondetalle || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collRequisiciondetallesRelatedByIdrequisiciondetalle) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getRequisiciondetallesRelatedByIdrequisiciondetalle());
            }
            $query = RequisiciondetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRequisiciondetalleRelatedByIdpadre($this)
                ->count($con);
        }

        return count($this->collRequisiciondetallesRelatedByIdrequisiciondetalle);
    }

    /**
     * Method called to associate a Requisiciondetalle object to this object
     * through the Requisiciondetalle foreign key attribute.
     *
     * @param    Requisiciondetalle $l Requisiciondetalle
     * @return Requisiciondetalle The current object (for fluent API support)
     */
    public function addRequisiciondetalleRelatedByIdrequisiciondetalle(Requisiciondetalle $l)
    {
        if ($this->collRequisiciondetallesRelatedByIdrequisiciondetalle === null) {
            $this->initRequisiciondetallesRelatedByIdrequisiciondetalle();
            $this->collRequisiciondetallesRelatedByIdrequisiciondetallePartial = true;
        }

        if (!in_array($l, $this->collRequisiciondetallesRelatedByIdrequisiciondetalle->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddRequisiciondetalleRelatedByIdrequisiciondetalle($l);

            if ($this->requisiciondetallesRelatedByIdrequisiciondetalleScheduledForDeletion and $this->requisiciondetallesRelatedByIdrequisiciondetalleScheduledForDeletion->contains($l)) {
                $this->requisiciondetallesRelatedByIdrequisiciondetalleScheduledForDeletion->remove($this->requisiciondetallesRelatedByIdrequisiciondetalleScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	RequisiciondetalleRelatedByIdrequisiciondetalle $requisiciondetalleRelatedByIdrequisiciondetalle The requisiciondetalleRelatedByIdrequisiciondetalle object to add.
     */
    protected function doAddRequisiciondetalleRelatedByIdrequisiciondetalle($requisiciondetalleRelatedByIdrequisiciondetalle)
    {
        $this->collRequisiciondetallesRelatedByIdrequisiciondetalle[]= $requisiciondetalleRelatedByIdrequisiciondetalle;
        $requisiciondetalleRelatedByIdrequisiciondetalle->setRequisiciondetalleRelatedByIdpadre($this);
    }

    /**
     * @param	RequisiciondetalleRelatedByIdrequisiciondetalle $requisiciondetalleRelatedByIdrequisiciondetalle The requisiciondetalleRelatedByIdrequisiciondetalle object to remove.
     * @return Requisiciondetalle The current object (for fluent API support)
     */
    public function removeRequisiciondetalleRelatedByIdrequisiciondetalle($requisiciondetalleRelatedByIdrequisiciondetalle)
    {
        if ($this->getRequisiciondetallesRelatedByIdrequisiciondetalle()->contains($requisiciondetalleRelatedByIdrequisiciondetalle)) {
            $this->collRequisiciondetallesRelatedByIdrequisiciondetalle->remove($this->collRequisiciondetallesRelatedByIdrequisiciondetalle->search($requisiciondetalleRelatedByIdrequisiciondetalle));
            if (null === $this->requisiciondetallesRelatedByIdrequisiciondetalleScheduledForDeletion) {
                $this->requisiciondetallesRelatedByIdrequisiciondetalleScheduledForDeletion = clone $this->collRequisiciondetallesRelatedByIdrequisiciondetalle;
                $this->requisiciondetallesRelatedByIdrequisiciondetalleScheduledForDeletion->clear();
            }
            $this->requisiciondetallesRelatedByIdrequisiciondetalleScheduledForDeletion[]= $requisiciondetalleRelatedByIdrequisiciondetalle;
            $requisiciondetalleRelatedByIdrequisiciondetalle->setRequisiciondetalleRelatedByIdpadre(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Requisiciondetalle is new, it will return
     * an empty collection; or if this Requisiciondetalle has previously
     * been saved, it will retrieve related RequisiciondetallesRelatedByIdrequisiciondetalle from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Requisiciondetalle.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisiciondetalle[] List of Requisiciondetalle objects
     */
    public function getRequisiciondetallesRelatedByIdrequisiciondetalleJoinProducto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisiciondetalleQuery::create(null, $criteria);
        $query->joinWith('Producto', $join_behavior);

        return $this->getRequisiciondetallesRelatedByIdrequisiciondetalle($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Requisiciondetalle is new, it will return
     * an empty collection; or if this Requisiciondetalle has previously
     * been saved, it will retrieve related RequisiciondetallesRelatedByIdrequisiciondetalle from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Requisiciondetalle.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisiciondetalle[] List of Requisiciondetalle objects
     */
    public function getRequisiciondetallesRelatedByIdrequisiciondetalleJoinRequisicion($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisiciondetalleQuery::create(null, $criteria);
        $query->joinWith('Requisicion', $join_behavior);

        return $this->getRequisiciondetallesRelatedByIdrequisiciondetalle($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idrequisiciondetalle = null;
        $this->idrequisicion = null;
        $this->idproducto = null;
        $this->requisiciondetalle_cantidad = null;
        $this->requisiciondetalle_revisada = null;
        $this->requisiciondetalle_preciounitario = null;
        $this->requisiciondetalle_subtotal = null;
        $this->idpadre = null;
        $this->requisiciondetalle_contable = null;
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
            if ($this->collRequisiciondetallesRelatedByIdrequisiciondetalle) {
                foreach ($this->collRequisiciondetallesRelatedByIdrequisiciondetalle as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aRequisiciondetalleRelatedByIdpadre instanceof Persistent) {
              $this->aRequisiciondetalleRelatedByIdpadre->clearAllReferences($deep);
            }
            if ($this->aProducto instanceof Persistent) {
              $this->aProducto->clearAllReferences($deep);
            }
            if ($this->aRequisicion instanceof Persistent) {
              $this->aRequisicion->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collRequisiciondetallesRelatedByIdrequisiciondetalle instanceof PropelCollection) {
            $this->collRequisiciondetallesRelatedByIdrequisiciondetalle->clearIterator();
        }
        $this->collRequisiciondetallesRelatedByIdrequisiciondetalle = null;
        $this->aRequisiciondetalleRelatedByIdpadre = null;
        $this->aProducto = null;
        $this->aRequisicion = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(RequisiciondetallePeer::DEFAULT_STRING_FORMAT);
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
