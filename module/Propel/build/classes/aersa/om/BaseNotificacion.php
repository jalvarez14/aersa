<?php


/**
 * Base class that represents a row from the 'notificacion' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseNotificacion extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'NotificacionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        NotificacionPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idnotificacion field.
     * @var        int
     */
    protected $idnotificacion;

    /**
     * The value for the notificacion_proceso field.
     * @var        string
     */
    protected $notificacion_proceso;

    /**
     * The value for the idproceso field.
     * @var        int
     */
    protected $idproceso;

    /**
     * The value for the rol1 field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $rol1;

    /**
     * The value for the rol2 field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $rol2;

    /**
     * The value for the rol3 field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $rol3;

    /**
     * The value for the rol4 field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $rol4;

    /**
     * The value for the rol5 field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $rol5;

    /**
     * The value for the idsucursal field.
     * @var        int
     */
    protected $idsucursal;

    /**
     * The value for the idempresa field.
     * @var        int
     */
    protected $idempresa;

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
        $this->rol1 = false;
        $this->rol2 = false;
        $this->rol3 = false;
        $this->rol4 = false;
        $this->rol5 = false;
    }

    /**
     * Initializes internal state of BaseNotificacion object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [idnotificacion] column value.
     *
     * @return int
     */
    public function getIdnotificacion()
    {

        return $this->idnotificacion;
    }

    /**
     * Get the [notificacion_proceso] column value.
     *
     * @return string
     */
    public function getNotificacionProceso()
    {

        return $this->notificacion_proceso;
    }

    /**
     * Get the [idproceso] column value.
     *
     * @return int
     */
    public function getIdproceso()
    {

        return $this->idproceso;
    }

    /**
     * Get the [rol1] column value.
     *
     * @return boolean
     */
    public function getRol1()
    {

        return $this->rol1;
    }

    /**
     * Get the [rol2] column value.
     *
     * @return boolean
     */
    public function getRol2()
    {

        return $this->rol2;
    }

    /**
     * Get the [rol3] column value.
     *
     * @return boolean
     */
    public function getRol3()
    {

        return $this->rol3;
    }

    /**
     * Get the [rol4] column value.
     *
     * @return boolean
     */
    public function getRol4()
    {

        return $this->rol4;
    }

    /**
     * Get the [rol5] column value.
     *
     * @return boolean
     */
    public function getRol5()
    {

        return $this->rol5;
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
     * Get the [idempresa] column value.
     *
     * @return int
     */
    public function getIdempresa()
    {

        return $this->idempresa;
    }

    /**
     * Set the value of [idnotificacion] column.
     *
     * @param  int $v new value
     * @return Notificacion The current object (for fluent API support)
     */
    public function setIdnotificacion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idnotificacion !== $v) {
            $this->idnotificacion = $v;
            $this->modifiedColumns[] = NotificacionPeer::IDNOTIFICACION;
        }


        return $this;
    } // setIdnotificacion()

    /**
     * Set the value of [notificacion_proceso] column.
     *
     * @param  string $v new value
     * @return Notificacion The current object (for fluent API support)
     */
    public function setNotificacionProceso($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->notificacion_proceso !== $v) {
            $this->notificacion_proceso = $v;
            $this->modifiedColumns[] = NotificacionPeer::NOTIFICACION_PROCESO;
        }


        return $this;
    } // setNotificacionProceso()

    /**
     * Set the value of [idproceso] column.
     *
     * @param  int $v new value
     * @return Notificacion The current object (for fluent API support)
     */
    public function setIdproceso($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproceso !== $v) {
            $this->idproceso = $v;
            $this->modifiedColumns[] = NotificacionPeer::IDPROCESO;
        }


        return $this;
    } // setIdproceso()

    /**
     * Sets the value of the [rol1] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Notificacion The current object (for fluent API support)
     */
    public function setRol1($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->rol1 !== $v) {
            $this->rol1 = $v;
            $this->modifiedColumns[] = NotificacionPeer::ROL1;
        }


        return $this;
    } // setRol1()

    /**
     * Sets the value of the [rol2] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Notificacion The current object (for fluent API support)
     */
    public function setRol2($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->rol2 !== $v) {
            $this->rol2 = $v;
            $this->modifiedColumns[] = NotificacionPeer::ROL2;
        }


        return $this;
    } // setRol2()

    /**
     * Sets the value of the [rol3] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Notificacion The current object (for fluent API support)
     */
    public function setRol3($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->rol3 !== $v) {
            $this->rol3 = $v;
            $this->modifiedColumns[] = NotificacionPeer::ROL3;
        }


        return $this;
    } // setRol3()

    /**
     * Sets the value of the [rol4] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Notificacion The current object (for fluent API support)
     */
    public function setRol4($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->rol4 !== $v) {
            $this->rol4 = $v;
            $this->modifiedColumns[] = NotificacionPeer::ROL4;
        }


        return $this;
    } // setRol4()

    /**
     * Sets the value of the [rol5] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Notificacion The current object (for fluent API support)
     */
    public function setRol5($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->rol5 !== $v) {
            $this->rol5 = $v;
            $this->modifiedColumns[] = NotificacionPeer::ROL5;
        }


        return $this;
    } // setRol5()

    /**
     * Set the value of [idsucursal] column.
     *
     * @param  int $v new value
     * @return Notificacion The current object (for fluent API support)
     */
    public function setIdsucursal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idsucursal !== $v) {
            $this->idsucursal = $v;
            $this->modifiedColumns[] = NotificacionPeer::IDSUCURSAL;
        }


        return $this;
    } // setIdsucursal()

    /**
     * Set the value of [idempresa] column.
     *
     * @param  int $v new value
     * @return Notificacion The current object (for fluent API support)
     */
    public function setIdempresa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempresa !== $v) {
            $this->idempresa = $v;
            $this->modifiedColumns[] = NotificacionPeer::IDEMPRESA;
        }


        return $this;
    } // setIdempresa()

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
            if ($this->rol1 !== false) {
                return false;
            }

            if ($this->rol2 !== false) {
                return false;
            }

            if ($this->rol3 !== false) {
                return false;
            }

            if ($this->rol4 !== false) {
                return false;
            }

            if ($this->rol5 !== false) {
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

            $this->idnotificacion = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->notificacion_proceso = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->idproceso = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->rol1 = ($row[$startcol + 3] !== null) ? (boolean) $row[$startcol + 3] : null;
            $this->rol2 = ($row[$startcol + 4] !== null) ? (boolean) $row[$startcol + 4] : null;
            $this->rol3 = ($row[$startcol + 5] !== null) ? (boolean) $row[$startcol + 5] : null;
            $this->rol4 = ($row[$startcol + 6] !== null) ? (boolean) $row[$startcol + 6] : null;
            $this->rol5 = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
            $this->idsucursal = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->idempresa = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 10; // 10 = NotificacionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Notificacion object", $e);
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
            $con = Propel::getConnection(NotificacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = NotificacionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

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
            $con = Propel::getConnection(NotificacionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = NotificacionQuery::create()
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
            $con = Propel::getConnection(NotificacionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                NotificacionPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = NotificacionPeer::IDNOTIFICACION;
        if (null !== $this->idnotificacion) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . NotificacionPeer::IDNOTIFICACION . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(NotificacionPeer::IDNOTIFICACION)) {
            $modifiedColumns[':p' . $index++]  = '`idnotificacion`';
        }
        if ($this->isColumnModified(NotificacionPeer::NOTIFICACION_PROCESO)) {
            $modifiedColumns[':p' . $index++]  = '`notificacion_proceso`';
        }
        if ($this->isColumnModified(NotificacionPeer::IDPROCESO)) {
            $modifiedColumns[':p' . $index++]  = '`idproceso`';
        }
        if ($this->isColumnModified(NotificacionPeer::ROL1)) {
            $modifiedColumns[':p' . $index++]  = '`rol1`';
        }
        if ($this->isColumnModified(NotificacionPeer::ROL2)) {
            $modifiedColumns[':p' . $index++]  = '`rol2`';
        }
        if ($this->isColumnModified(NotificacionPeer::ROL3)) {
            $modifiedColumns[':p' . $index++]  = '`rol3`';
        }
        if ($this->isColumnModified(NotificacionPeer::ROL4)) {
            $modifiedColumns[':p' . $index++]  = '`rol4`';
        }
        if ($this->isColumnModified(NotificacionPeer::ROL5)) {
            $modifiedColumns[':p' . $index++]  = '`rol5`';
        }
        if ($this->isColumnModified(NotificacionPeer::IDSUCURSAL)) {
            $modifiedColumns[':p' . $index++]  = '`idsucursal`';
        }
        if ($this->isColumnModified(NotificacionPeer::IDEMPRESA)) {
            $modifiedColumns[':p' . $index++]  = '`idempresa`';
        }

        $sql = sprintf(
            'INSERT INTO `notificacion` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idnotificacion`':
                        $stmt->bindValue($identifier, $this->idnotificacion, PDO::PARAM_INT);
                        break;
                    case '`notificacion_proceso`':
                        $stmt->bindValue($identifier, $this->notificacion_proceso, PDO::PARAM_STR);
                        break;
                    case '`idproceso`':
                        $stmt->bindValue($identifier, $this->idproceso, PDO::PARAM_INT);
                        break;
                    case '`rol1`':
                        $stmt->bindValue($identifier, (int) $this->rol1, PDO::PARAM_INT);
                        break;
                    case '`rol2`':
                        $stmt->bindValue($identifier, (int) $this->rol2, PDO::PARAM_INT);
                        break;
                    case '`rol3`':
                        $stmt->bindValue($identifier, (int) $this->rol3, PDO::PARAM_INT);
                        break;
                    case '`rol4`':
                        $stmt->bindValue($identifier, (int) $this->rol4, PDO::PARAM_INT);
                        break;
                    case '`rol5`':
                        $stmt->bindValue($identifier, (int) $this->rol5, PDO::PARAM_INT);
                        break;
                    case '`idsucursal`':
                        $stmt->bindValue($identifier, $this->idsucursal, PDO::PARAM_INT);
                        break;
                    case '`idempresa`':
                        $stmt->bindValue($identifier, $this->idempresa, PDO::PARAM_INT);
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
        $this->setIdnotificacion($pk);

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


            if (($retval = NotificacionPeer::doValidate($this, $columns)) !== true) {
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
        $pos = NotificacionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdnotificacion();
                break;
            case 1:
                return $this->getNotificacionProceso();
                break;
            case 2:
                return $this->getIdproceso();
                break;
            case 3:
                return $this->getRol1();
                break;
            case 4:
                return $this->getRol2();
                break;
            case 5:
                return $this->getRol3();
                break;
            case 6:
                return $this->getRol4();
                break;
            case 7:
                return $this->getRol5();
                break;
            case 8:
                return $this->getIdsucursal();
                break;
            case 9:
                return $this->getIdempresa();
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
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['Notificacion'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Notificacion'][$this->getPrimaryKey()] = true;
        $keys = NotificacionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdnotificacion(),
            $keys[1] => $this->getNotificacionProceso(),
            $keys[2] => $this->getIdproceso(),
            $keys[3] => $this->getRol1(),
            $keys[4] => $this->getRol2(),
            $keys[5] => $this->getRol3(),
            $keys[6] => $this->getRol4(),
            $keys[7] => $this->getRol5(),
            $keys[8] => $this->getIdsucursal(),
            $keys[9] => $this->getIdempresa(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
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
        $pos = NotificacionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdnotificacion($value);
                break;
            case 1:
                $this->setNotificacionProceso($value);
                break;
            case 2:
                $this->setIdproceso($value);
                break;
            case 3:
                $this->setRol1($value);
                break;
            case 4:
                $this->setRol2($value);
                break;
            case 5:
                $this->setRol3($value);
                break;
            case 6:
                $this->setRol4($value);
                break;
            case 7:
                $this->setRol5($value);
                break;
            case 8:
                $this->setIdsucursal($value);
                break;
            case 9:
                $this->setIdempresa($value);
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
        $keys = NotificacionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdnotificacion($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setNotificacionProceso($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdproceso($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setRol1($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setRol2($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setRol3($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setRol4($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setRol5($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setIdsucursal($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setIdempresa($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(NotificacionPeer::DATABASE_NAME);

        if ($this->isColumnModified(NotificacionPeer::IDNOTIFICACION)) $criteria->add(NotificacionPeer::IDNOTIFICACION, $this->idnotificacion);
        if ($this->isColumnModified(NotificacionPeer::NOTIFICACION_PROCESO)) $criteria->add(NotificacionPeer::NOTIFICACION_PROCESO, $this->notificacion_proceso);
        if ($this->isColumnModified(NotificacionPeer::IDPROCESO)) $criteria->add(NotificacionPeer::IDPROCESO, $this->idproceso);
        if ($this->isColumnModified(NotificacionPeer::ROL1)) $criteria->add(NotificacionPeer::ROL1, $this->rol1);
        if ($this->isColumnModified(NotificacionPeer::ROL2)) $criteria->add(NotificacionPeer::ROL2, $this->rol2);
        if ($this->isColumnModified(NotificacionPeer::ROL3)) $criteria->add(NotificacionPeer::ROL3, $this->rol3);
        if ($this->isColumnModified(NotificacionPeer::ROL4)) $criteria->add(NotificacionPeer::ROL4, $this->rol4);
        if ($this->isColumnModified(NotificacionPeer::ROL5)) $criteria->add(NotificacionPeer::ROL5, $this->rol5);
        if ($this->isColumnModified(NotificacionPeer::IDSUCURSAL)) $criteria->add(NotificacionPeer::IDSUCURSAL, $this->idsucursal);
        if ($this->isColumnModified(NotificacionPeer::IDEMPRESA)) $criteria->add(NotificacionPeer::IDEMPRESA, $this->idempresa);

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
        $criteria = new Criteria(NotificacionPeer::DATABASE_NAME);
        $criteria->add(NotificacionPeer::IDNOTIFICACION, $this->idnotificacion);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdnotificacion();
    }

    /**
     * Generic method to set the primary key (idnotificacion column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdnotificacion($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdnotificacion();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Notificacion (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setNotificacionProceso($this->getNotificacionProceso());
        $copyObj->setIdproceso($this->getIdproceso());
        $copyObj->setRol1($this->getRol1());
        $copyObj->setRol2($this->getRol2());
        $copyObj->setRol3($this->getRol3());
        $copyObj->setRol4($this->getRol4());
        $copyObj->setRol5($this->getRol5());
        $copyObj->setIdsucursal($this->getIdsucursal());
        $copyObj->setIdempresa($this->getIdempresa());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdnotificacion(NULL); // this is a auto-increment column, so set to default value
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
     * @return Notificacion Clone of current object.
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
     * @return NotificacionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new NotificacionPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idnotificacion = null;
        $this->notificacion_proceso = null;
        $this->idproceso = null;
        $this->rol1 = null;
        $this->rol2 = null;
        $this->rol3 = null;
        $this->rol4 = null;
        $this->rol5 = null;
        $this->idsucursal = null;
        $this->idempresa = null;
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

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(NotificacionPeer::DEFAULT_STRING_FORMAT);
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
