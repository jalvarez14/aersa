<?php


/**
 * Base class that represents a row from the 'ingresodetalle' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseIngresodetalle extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'IngresodetallePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        IngresodetallePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idingresodetalle field.
     * @var        int
     */
    protected $idingresodetalle;

    /**
     * The value for the idingreso field.
     * @var        int
     */
    protected $idingreso;

    /**
     * The value for the idrubroingreso field.
     * @var        int
     */
    protected $idrubroingreso;

    /**
     * The value for the idconceptoingreso field.
     * @var        int
     */
    protected $idconceptoingreso;

    /**
     * The value for the ingresodetalle_sub field.
     * @var        string
     */
    protected $ingresodetalle_sub;

    /**
     * The value for the ingresodetalle_iva field.
     * @var        string
     */
    protected $ingresodetalle_iva;

    /**
     * The value for the ingresodetalle_total field.
     * @var        string
     */
    protected $ingresodetalle_total;

    /**
     * The value for the ingresodetalle_credfact field.
     * @var        string
     */
    protected $ingresodetalle_credfact;

    /**
     * The value for the ingresodetalle_revisada field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $ingresodetalle_revisada;

    /**
     * @var        Conceptoingreso
     */
    protected $aConceptoingreso;

    /**
     * @var        Ingreso
     */
    protected $aIngreso;

    /**
     * @var        Rubroingreso
     */
    protected $aRubroingreso;

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
        $this->ingresodetalle_revisada = false;
    }

    /**
     * Initializes internal state of BaseIngresodetalle object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [idingresodetalle] column value.
     *
     * @return int
     */
    public function getIdingresodetalle()
    {

        return $this->idingresodetalle;
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
     * Get the [idrubroingreso] column value.
     *
     * @return int
     */
    public function getIdrubroingreso()
    {

        return $this->idrubroingreso;
    }

    /**
     * Get the [idconceptoingreso] column value.
     *
     * @return int
     */
    public function getIdconceptoingreso()
    {

        return $this->idconceptoingreso;
    }

    /**
     * Get the [ingresodetalle_sub] column value.
     *
     * @return string
     */
    public function getIngresodetalleSub()
    {

        return $this->ingresodetalle_sub;
    }

    /**
     * Get the [ingresodetalle_iva] column value.
     *
     * @return string
     */
    public function getIngresodetalleIva()
    {

        return $this->ingresodetalle_iva;
    }

    /**
     * Get the [ingresodetalle_total] column value.
     *
     * @return string
     */
    public function getIngresodetalleTotal()
    {

        return $this->ingresodetalle_total;
    }

    /**
     * Get the [ingresodetalle_credfact] column value.
     *
     * @return string
     */
    public function getIngresodetalleCredfact()
    {

        return $this->ingresodetalle_credfact;
    }

    /**
     * Get the [ingresodetalle_revisada] column value.
     *
     * @return boolean
     */
    public function getIngresodetalleRevisada()
    {

        return $this->ingresodetalle_revisada;
    }

    /**
     * Set the value of [idingresodetalle] column.
     *
     * @param  int $v new value
     * @return Ingresodetalle The current object (for fluent API support)
     */
    public function setIdingresodetalle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idingresodetalle !== $v) {
            $this->idingresodetalle = $v;
            $this->modifiedColumns[] = IngresodetallePeer::IDINGRESODETALLE;
        }


        return $this;
    } // setIdingresodetalle()

    /**
     * Set the value of [idingreso] column.
     *
     * @param  int $v new value
     * @return Ingresodetalle The current object (for fluent API support)
     */
    public function setIdingreso($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idingreso !== $v) {
            $this->idingreso = $v;
            $this->modifiedColumns[] = IngresodetallePeer::IDINGRESO;
        }

        if ($this->aIngreso !== null && $this->aIngreso->getIdingreso() !== $v) {
            $this->aIngreso = null;
        }


        return $this;
    } // setIdingreso()

    /**
     * Set the value of [idrubroingreso] column.
     *
     * @param  int $v new value
     * @return Ingresodetalle The current object (for fluent API support)
     */
    public function setIdrubroingreso($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idrubroingreso !== $v) {
            $this->idrubroingreso = $v;
            $this->modifiedColumns[] = IngresodetallePeer::IDRUBROINGRESO;
        }

        if ($this->aRubroingreso !== null && $this->aRubroingreso->getIdrubroingreso() !== $v) {
            $this->aRubroingreso = null;
        }


        return $this;
    } // setIdrubroingreso()

    /**
     * Set the value of [idconceptoingreso] column.
     *
     * @param  int $v new value
     * @return Ingresodetalle The current object (for fluent API support)
     */
    public function setIdconceptoingreso($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idconceptoingreso !== $v) {
            $this->idconceptoingreso = $v;
            $this->modifiedColumns[] = IngresodetallePeer::IDCONCEPTOINGRESO;
        }

        if ($this->aConceptoingreso !== null && $this->aConceptoingreso->getIdconceptoingreso() !== $v) {
            $this->aConceptoingreso = null;
        }


        return $this;
    } // setIdconceptoingreso()

    /**
     * Set the value of [ingresodetalle_sub] column.
     *
     * @param  string $v new value
     * @return Ingresodetalle The current object (for fluent API support)
     */
    public function setIngresodetalleSub($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ingresodetalle_sub !== $v) {
            $this->ingresodetalle_sub = $v;
            $this->modifiedColumns[] = IngresodetallePeer::INGRESODETALLE_SUB;
        }


        return $this;
    } // setIngresodetalleSub()

    /**
     * Set the value of [ingresodetalle_iva] column.
     *
     * @param  string $v new value
     * @return Ingresodetalle The current object (for fluent API support)
     */
    public function setIngresodetalleIva($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ingresodetalle_iva !== $v) {
            $this->ingresodetalle_iva = $v;
            $this->modifiedColumns[] = IngresodetallePeer::INGRESODETALLE_IVA;
        }


        return $this;
    } // setIngresodetalleIva()

    /**
     * Set the value of [ingresodetalle_total] column.
     *
     * @param  string $v new value
     * @return Ingresodetalle The current object (for fluent API support)
     */
    public function setIngresodetalleTotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ingresodetalle_total !== $v) {
            $this->ingresodetalle_total = $v;
            $this->modifiedColumns[] = IngresodetallePeer::INGRESODETALLE_TOTAL;
        }


        return $this;
    } // setIngresodetalleTotal()

    /**
     * Set the value of [ingresodetalle_credfact] column.
     *
     * @param  string $v new value
     * @return Ingresodetalle The current object (for fluent API support)
     */
    public function setIngresodetalleCredfact($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ingresodetalle_credfact !== $v) {
            $this->ingresodetalle_credfact = $v;
            $this->modifiedColumns[] = IngresodetallePeer::INGRESODETALLE_CREDFACT;
        }


        return $this;
    } // setIngresodetalleCredfact()

    /**
     * Sets the value of the [ingresodetalle_revisada] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Ingresodetalle The current object (for fluent API support)
     */
    public function setIngresodetalleRevisada($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->ingresodetalle_revisada !== $v) {
            $this->ingresodetalle_revisada = $v;
            $this->modifiedColumns[] = IngresodetallePeer::INGRESODETALLE_REVISADA;
        }


        return $this;
    } // setIngresodetalleRevisada()

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
            if ($this->ingresodetalle_revisada !== false) {
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

            $this->idingresodetalle = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idingreso = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idrubroingreso = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->idconceptoingreso = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->ingresodetalle_sub = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->ingresodetalle_iva = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->ingresodetalle_total = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->ingresodetalle_credfact = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->ingresodetalle_revisada = ($row[$startcol + 8] !== null) ? (boolean) $row[$startcol + 8] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 9; // 9 = IngresodetallePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Ingresodetalle object", $e);
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

        if ($this->aIngreso !== null && $this->idingreso !== $this->aIngreso->getIdingreso()) {
            $this->aIngreso = null;
        }
        if ($this->aRubroingreso !== null && $this->idrubroingreso !== $this->aRubroingreso->getIdrubroingreso()) {
            $this->aRubroingreso = null;
        }
        if ($this->aConceptoingreso !== null && $this->idconceptoingreso !== $this->aConceptoingreso->getIdconceptoingreso()) {
            $this->aConceptoingreso = null;
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
            $con = Propel::getConnection(IngresodetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = IngresodetallePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aConceptoingreso = null;
            $this->aIngreso = null;
            $this->aRubroingreso = null;
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
            $con = Propel::getConnection(IngresodetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = IngresodetalleQuery::create()
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
            $con = Propel::getConnection(IngresodetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                IngresodetallePeer::addInstanceToPool($this);
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

            if ($this->aConceptoingreso !== null) {
                if ($this->aConceptoingreso->isModified() || $this->aConceptoingreso->isNew()) {
                    $affectedRows += $this->aConceptoingreso->save($con);
                }
                $this->setConceptoingreso($this->aConceptoingreso);
            }

            if ($this->aIngreso !== null) {
                if ($this->aIngreso->isModified() || $this->aIngreso->isNew()) {
                    $affectedRows += $this->aIngreso->save($con);
                }
                $this->setIngreso($this->aIngreso);
            }

            if ($this->aRubroingreso !== null) {
                if ($this->aRubroingreso->isModified() || $this->aRubroingreso->isNew()) {
                    $affectedRows += $this->aRubroingreso->save($con);
                }
                $this->setRubroingreso($this->aRubroingreso);
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

        $this->modifiedColumns[] = IngresodetallePeer::IDINGRESODETALLE;
        if (null !== $this->idingresodetalle) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . IngresodetallePeer::IDINGRESODETALLE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(IngresodetallePeer::IDINGRESODETALLE)) {
            $modifiedColumns[':p' . $index++]  = '`idingresodetalle`';
        }
        if ($this->isColumnModified(IngresodetallePeer::IDINGRESO)) {
            $modifiedColumns[':p' . $index++]  = '`idingreso`';
        }
        if ($this->isColumnModified(IngresodetallePeer::IDRUBROINGRESO)) {
            $modifiedColumns[':p' . $index++]  = '`idrubroingreso`';
        }
        if ($this->isColumnModified(IngresodetallePeer::IDCONCEPTOINGRESO)) {
            $modifiedColumns[':p' . $index++]  = '`idconceptoingreso`';
        }
        if ($this->isColumnModified(IngresodetallePeer::INGRESODETALLE_SUB)) {
            $modifiedColumns[':p' . $index++]  = '`ingresodetalle_sub`';
        }
        if ($this->isColumnModified(IngresodetallePeer::INGRESODETALLE_IVA)) {
            $modifiedColumns[':p' . $index++]  = '`ingresodetalle_IVA`';
        }
        if ($this->isColumnModified(IngresodetallePeer::INGRESODETALLE_TOTAL)) {
            $modifiedColumns[':p' . $index++]  = '`ingresodetalle_total`';
        }
        if ($this->isColumnModified(IngresodetallePeer::INGRESODETALLE_CREDFACT)) {
            $modifiedColumns[':p' . $index++]  = '`ingresodetalle_credfact`';
        }
        if ($this->isColumnModified(IngresodetallePeer::INGRESODETALLE_REVISADA)) {
            $modifiedColumns[':p' . $index++]  = '`ingresodetalle_revisada`';
        }

        $sql = sprintf(
            'INSERT INTO `ingresodetalle` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idingresodetalle`':
                        $stmt->bindValue($identifier, $this->idingresodetalle, PDO::PARAM_INT);
                        break;
                    case '`idingreso`':
                        $stmt->bindValue($identifier, $this->idingreso, PDO::PARAM_INT);
                        break;
                    case '`idrubroingreso`':
                        $stmt->bindValue($identifier, $this->idrubroingreso, PDO::PARAM_INT);
                        break;
                    case '`idconceptoingreso`':
                        $stmt->bindValue($identifier, $this->idconceptoingreso, PDO::PARAM_INT);
                        break;
                    case '`ingresodetalle_sub`':
                        $stmt->bindValue($identifier, $this->ingresodetalle_sub, PDO::PARAM_STR);
                        break;
                    case '`ingresodetalle_IVA`':
                        $stmt->bindValue($identifier, $this->ingresodetalle_iva, PDO::PARAM_STR);
                        break;
                    case '`ingresodetalle_total`':
                        $stmt->bindValue($identifier, $this->ingresodetalle_total, PDO::PARAM_STR);
                        break;
                    case '`ingresodetalle_credfact`':
                        $stmt->bindValue($identifier, $this->ingresodetalle_credfact, PDO::PARAM_STR);
                        break;
                    case '`ingresodetalle_revisada`':
                        $stmt->bindValue($identifier, (int) $this->ingresodetalle_revisada, PDO::PARAM_INT);
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
        $this->setIdingresodetalle($pk);

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

            if ($this->aConceptoingreso !== null) {
                if (!$this->aConceptoingreso->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aConceptoingreso->getValidationFailures());
                }
            }

            if ($this->aIngreso !== null) {
                if (!$this->aIngreso->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aIngreso->getValidationFailures());
                }
            }

            if ($this->aRubroingreso !== null) {
                if (!$this->aRubroingreso->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRubroingreso->getValidationFailures());
                }
            }


            if (($retval = IngresodetallePeer::doValidate($this, $columns)) !== true) {
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
        $pos = IngresodetallePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdingresodetalle();
                break;
            case 1:
                return $this->getIdingreso();
                break;
            case 2:
                return $this->getIdrubroingreso();
                break;
            case 3:
                return $this->getIdconceptoingreso();
                break;
            case 4:
                return $this->getIngresodetalleSub();
                break;
            case 5:
                return $this->getIngresodetalleIva();
                break;
            case 6:
                return $this->getIngresodetalleTotal();
                break;
            case 7:
                return $this->getIngresodetalleCredfact();
                break;
            case 8:
                return $this->getIngresodetalleRevisada();
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
        if (isset($alreadyDumpedObjects['Ingresodetalle'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Ingresodetalle'][$this->getPrimaryKey()] = true;
        $keys = IngresodetallePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdingresodetalle(),
            $keys[1] => $this->getIdingreso(),
            $keys[2] => $this->getIdrubroingreso(),
            $keys[3] => $this->getIdconceptoingreso(),
            $keys[4] => $this->getIngresodetalleSub(),
            $keys[5] => $this->getIngresodetalleIva(),
            $keys[6] => $this->getIngresodetalleTotal(),
            $keys[7] => $this->getIngresodetalleCredfact(),
            $keys[8] => $this->getIngresodetalleRevisada(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aConceptoingreso) {
                $result['Conceptoingreso'] = $this->aConceptoingreso->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aIngreso) {
                $result['Ingreso'] = $this->aIngreso->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRubroingreso) {
                $result['Rubroingreso'] = $this->aRubroingreso->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = IngresodetallePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdingresodetalle($value);
                break;
            case 1:
                $this->setIdingreso($value);
                break;
            case 2:
                $this->setIdrubroingreso($value);
                break;
            case 3:
                $this->setIdconceptoingreso($value);
                break;
            case 4:
                $this->setIngresodetalleSub($value);
                break;
            case 5:
                $this->setIngresodetalleIva($value);
                break;
            case 6:
                $this->setIngresodetalleTotal($value);
                break;
            case 7:
                $this->setIngresodetalleCredfact($value);
                break;
            case 8:
                $this->setIngresodetalleRevisada($value);
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
        $keys = IngresodetallePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdingresodetalle($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdingreso($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdrubroingreso($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdconceptoingreso($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIngresodetalleSub($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIngresodetalleIva($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIngresodetalleTotal($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIngresodetalleCredfact($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setIngresodetalleRevisada($arr[$keys[8]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(IngresodetallePeer::DATABASE_NAME);

        if ($this->isColumnModified(IngresodetallePeer::IDINGRESODETALLE)) $criteria->add(IngresodetallePeer::IDINGRESODETALLE, $this->idingresodetalle);
        if ($this->isColumnModified(IngresodetallePeer::IDINGRESO)) $criteria->add(IngresodetallePeer::IDINGRESO, $this->idingreso);
        if ($this->isColumnModified(IngresodetallePeer::IDRUBROINGRESO)) $criteria->add(IngresodetallePeer::IDRUBROINGRESO, $this->idrubroingreso);
        if ($this->isColumnModified(IngresodetallePeer::IDCONCEPTOINGRESO)) $criteria->add(IngresodetallePeer::IDCONCEPTOINGRESO, $this->idconceptoingreso);
        if ($this->isColumnModified(IngresodetallePeer::INGRESODETALLE_SUB)) $criteria->add(IngresodetallePeer::INGRESODETALLE_SUB, $this->ingresodetalle_sub);
        if ($this->isColumnModified(IngresodetallePeer::INGRESODETALLE_IVA)) $criteria->add(IngresodetallePeer::INGRESODETALLE_IVA, $this->ingresodetalle_iva);
        if ($this->isColumnModified(IngresodetallePeer::INGRESODETALLE_TOTAL)) $criteria->add(IngresodetallePeer::INGRESODETALLE_TOTAL, $this->ingresodetalle_total);
        if ($this->isColumnModified(IngresodetallePeer::INGRESODETALLE_CREDFACT)) $criteria->add(IngresodetallePeer::INGRESODETALLE_CREDFACT, $this->ingresodetalle_credfact);
        if ($this->isColumnModified(IngresodetallePeer::INGRESODETALLE_REVISADA)) $criteria->add(IngresodetallePeer::INGRESODETALLE_REVISADA, $this->ingresodetalle_revisada);

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
        $criteria = new Criteria(IngresodetallePeer::DATABASE_NAME);
        $criteria->add(IngresodetallePeer::IDINGRESODETALLE, $this->idingresodetalle);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdingresodetalle();
    }

    /**
     * Generic method to set the primary key (idingresodetalle column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdingresodetalle($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdingresodetalle();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Ingresodetalle (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdingreso($this->getIdingreso());
        $copyObj->setIdrubroingreso($this->getIdrubroingreso());
        $copyObj->setIdconceptoingreso($this->getIdconceptoingreso());
        $copyObj->setIngresodetalleSub($this->getIngresodetalleSub());
        $copyObj->setIngresodetalleIva($this->getIngresodetalleIva());
        $copyObj->setIngresodetalleTotal($this->getIngresodetalleTotal());
        $copyObj->setIngresodetalleCredfact($this->getIngresodetalleCredfact());
        $copyObj->setIngresodetalleRevisada($this->getIngresodetalleRevisada());

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
            $copyObj->setIdingresodetalle(NULL); // this is a auto-increment column, so set to default value
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
     * @return Ingresodetalle Clone of current object.
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
     * @return IngresodetallePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new IngresodetallePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Conceptoingreso object.
     *
     * @param                  Conceptoingreso $v
     * @return Ingresodetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setConceptoingreso(Conceptoingreso $v = null)
    {
        if ($v === null) {
            $this->setIdconceptoingreso(NULL);
        } else {
            $this->setIdconceptoingreso($v->getIdconceptoingreso());
        }

        $this->aConceptoingreso = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Conceptoingreso object, it will not be re-added.
        if ($v !== null) {
            $v->addIngresodetalle($this);
        }


        return $this;
    }


    /**
     * Get the associated Conceptoingreso object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Conceptoingreso The associated Conceptoingreso object.
     * @throws PropelException
     */
    public function getConceptoingreso(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aConceptoingreso === null && ($this->idconceptoingreso !== null) && $doQuery) {
            $this->aConceptoingreso = ConceptoingresoQuery::create()->findPk($this->idconceptoingreso, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aConceptoingreso->addIngresodetalles($this);
             */
        }

        return $this->aConceptoingreso;
    }

    /**
     * Declares an association between this object and a Ingreso object.
     *
     * @param                  Ingreso $v
     * @return Ingresodetalle The current object (for fluent API support)
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
            $v->addIngresodetalle($this);
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
                $this->aIngreso->addIngresodetalles($this);
             */
        }

        return $this->aIngreso;
    }

    /**
     * Declares an association between this object and a Rubroingreso object.
     *
     * @param                  Rubroingreso $v
     * @return Ingresodetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRubroingreso(Rubroingreso $v = null)
    {
        if ($v === null) {
            $this->setIdrubroingreso(NULL);
        } else {
            $this->setIdrubroingreso($v->getIdrubroingreso());
        }

        $this->aRubroingreso = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Rubroingreso object, it will not be re-added.
        if ($v !== null) {
            $v->addIngresodetalle($this);
        }


        return $this;
    }


    /**
     * Get the associated Rubroingreso object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Rubroingreso The associated Rubroingreso object.
     * @throws PropelException
     */
    public function getRubroingreso(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRubroingreso === null && ($this->idrubroingreso !== null) && $doQuery) {
            $this->aRubroingreso = RubroingresoQuery::create()->findPk($this->idrubroingreso, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRubroingreso->addIngresodetalles($this);
             */
        }

        return $this->aRubroingreso;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idingresodetalle = null;
        $this->idingreso = null;
        $this->idrubroingreso = null;
        $this->idconceptoingreso = null;
        $this->ingresodetalle_sub = null;
        $this->ingresodetalle_iva = null;
        $this->ingresodetalle_total = null;
        $this->ingresodetalle_credfact = null;
        $this->ingresodetalle_revisada = null;
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
            if ($this->aConceptoingreso instanceof Persistent) {
              $this->aConceptoingreso->clearAllReferences($deep);
            }
            if ($this->aIngreso instanceof Persistent) {
              $this->aIngreso->clearAllReferences($deep);
            }
            if ($this->aRubroingreso instanceof Persistent) {
              $this->aRubroingreso->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aConceptoingreso = null;
        $this->aIngreso = null;
        $this->aRubroingreso = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(IngresodetallePeer::DEFAULT_STRING_FORMAT);
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
