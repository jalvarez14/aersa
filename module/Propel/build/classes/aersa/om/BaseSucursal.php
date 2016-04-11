<?php


/**
 * Base class that represents a row from the 'sucursal' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseSucursal extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SucursalPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SucursalPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idsucursal field.
     * @var        int
     */
    protected $idsucursal;

    /**
     * The value for the sucursal_nombre field.
     * @var        string
     */
    protected $sucursal_nombre;

    /**
     * The value for the idempresa field.
     * @var        int
     */
    protected $idempresa;

    /**
     * @var        Empresa
     */
    protected $aEmpresa;

    /**
     * @var        PropelObjectCollection|Almacen[] Collection to store aggregation of Almacen objects.
     */
    protected $collAlmacens;
    protected $collAlmacensPartial;

    /**
     * @var        PropelObjectCollection|Devolucion[] Collection to store aggregation of Devolucion objects.
     */
    protected $collDevolucions;
    protected $collDevolucionsPartial;

    /**
     * @var        PropelObjectCollection|Notacredito[] Collection to store aggregation of Notacredito objects.
     */
    protected $collNotacreditos;
    protected $collNotacreditosPartial;

    /**
     * @var        PropelObjectCollection|Requisicion[] Collection to store aggregation of Requisicion objects.
     */
    protected $collRequisicions;
    protected $collRequisicionsPartial;

    /**
     * @var        PropelObjectCollection|Trabajadorpromedio[] Collection to store aggregation of Trabajadorpromedio objects.
     */
    protected $collTrabajadorpromedios;
    protected $collTrabajadorpromediosPartial;

    /**
     * @var        PropelObjectCollection|Usuariosucursal[] Collection to store aggregation of Usuariosucursal objects.
     */
    protected $collUsuariosucursals;
    protected $collUsuariosucursalsPartial;

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
    protected $almacensScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $devolucionsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $notacreditosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $requisicionsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $trabajadorpromediosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $usuariosucursalsScheduledForDeletion = null;

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
     * Get the [sucursal_nombre] column value.
     *
     * @return string
     */
    public function getSucursalNombre()
    {

        return $this->sucursal_nombre;
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
     * Set the value of [idsucursal] column.
     *
     * @param  int $v new value
     * @return Sucursal The current object (for fluent API support)
     */
    public function setIdsucursal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idsucursal !== $v) {
            $this->idsucursal = $v;
            $this->modifiedColumns[] = SucursalPeer::IDSUCURSAL;
        }


        return $this;
    } // setIdsucursal()

    /**
     * Set the value of [sucursal_nombre] column.
     *
     * @param  string $v new value
     * @return Sucursal The current object (for fluent API support)
     */
    public function setSucursalNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sucursal_nombre !== $v) {
            $this->sucursal_nombre = $v;
            $this->modifiedColumns[] = SucursalPeer::SUCURSAL_NOMBRE;
        }


        return $this;
    } // setSucursalNombre()

    /**
     * Set the value of [idempresa] column.
     *
     * @param  int $v new value
     * @return Sucursal The current object (for fluent API support)
     */
    public function setIdempresa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempresa !== $v) {
            $this->idempresa = $v;
            $this->modifiedColumns[] = SucursalPeer::IDEMPRESA;
        }

        if ($this->aEmpresa !== null && $this->aEmpresa->getIdempresa() !== $v) {
            $this->aEmpresa = null;
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

            $this->idsucursal = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->sucursal_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->idempresa = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 3; // 3 = SucursalPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Sucursal object", $e);
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
            $con = Propel::getConnection(SucursalPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SucursalPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aEmpresa = null;
            $this->collAlmacens = null;

            $this->collDevolucions = null;

            $this->collNotacreditos = null;

            $this->collRequisicions = null;

            $this->collTrabajadorpromedios = null;

            $this->collUsuariosucursals = null;

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
            $con = Propel::getConnection(SucursalPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SucursalQuery::create()
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
            $con = Propel::getConnection(SucursalPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                SucursalPeer::addInstanceToPool($this);
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

            if ($this->aEmpresa !== null) {
                if ($this->aEmpresa->isModified() || $this->aEmpresa->isNew()) {
                    $affectedRows += $this->aEmpresa->save($con);
                }
                $this->setEmpresa($this->aEmpresa);
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

            if ($this->almacensScheduledForDeletion !== null) {
                if (!$this->almacensScheduledForDeletion->isEmpty()) {
                    AlmacenQuery::create()
                        ->filterByPrimaryKeys($this->almacensScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->almacensScheduledForDeletion = null;
                }
            }

            if ($this->collAlmacens !== null) {
                foreach ($this->collAlmacens as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->devolucionsScheduledForDeletion !== null) {
                if (!$this->devolucionsScheduledForDeletion->isEmpty()) {
                    DevolucionQuery::create()
                        ->filterByPrimaryKeys($this->devolucionsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->devolucionsScheduledForDeletion = null;
                }
            }

            if ($this->collDevolucions !== null) {
                foreach ($this->collDevolucions as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->notacreditosScheduledForDeletion !== null) {
                if (!$this->notacreditosScheduledForDeletion->isEmpty()) {
                    NotacreditoQuery::create()
                        ->filterByPrimaryKeys($this->notacreditosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->notacreditosScheduledForDeletion = null;
                }
            }

            if ($this->collNotacreditos !== null) {
                foreach ($this->collNotacreditos as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->requisicionsScheduledForDeletion !== null) {
                if (!$this->requisicionsScheduledForDeletion->isEmpty()) {
                    RequisicionQuery::create()
                        ->filterByPrimaryKeys($this->requisicionsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->requisicionsScheduledForDeletion = null;
                }
            }

            if ($this->collRequisicions !== null) {
                foreach ($this->collRequisicions as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->trabajadorpromediosScheduledForDeletion !== null) {
                if (!$this->trabajadorpromediosScheduledForDeletion->isEmpty()) {
                    TrabajadorpromedioQuery::create()
                        ->filterByPrimaryKeys($this->trabajadorpromediosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->trabajadorpromediosScheduledForDeletion = null;
                }
            }

            if ($this->collTrabajadorpromedios !== null) {
                foreach ($this->collTrabajadorpromedios as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->usuariosucursalsScheduledForDeletion !== null) {
                if (!$this->usuariosucursalsScheduledForDeletion->isEmpty()) {
                    UsuariosucursalQuery::create()
                        ->filterByPrimaryKeys($this->usuariosucursalsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->usuariosucursalsScheduledForDeletion = null;
                }
            }

            if ($this->collUsuariosucursals !== null) {
                foreach ($this->collUsuariosucursals as $referrerFK) {
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

        $this->modifiedColumns[] = SucursalPeer::IDSUCURSAL;
        if (null !== $this->idsucursal) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SucursalPeer::IDSUCURSAL . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SucursalPeer::IDSUCURSAL)) {
            $modifiedColumns[':p' . $index++]  = '`idsucursal`';
        }
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`sucursal_nombre`';
        }
        if ($this->isColumnModified(SucursalPeer::IDEMPRESA)) {
            $modifiedColumns[':p' . $index++]  = '`idempresa`';
        }

        $sql = sprintf(
            'INSERT INTO `sucursal` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idsucursal`':
                        $stmt->bindValue($identifier, $this->idsucursal, PDO::PARAM_INT);
                        break;
                    case '`sucursal_nombre`':
                        $stmt->bindValue($identifier, $this->sucursal_nombre, PDO::PARAM_STR);
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
        $this->setIdsucursal($pk);

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

            if ($this->aEmpresa !== null) {
                if (!$this->aEmpresa->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEmpresa->getValidationFailures());
                }
            }


            if (($retval = SucursalPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collAlmacens !== null) {
                    foreach ($this->collAlmacens as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collDevolucions !== null) {
                    foreach ($this->collDevolucions as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collNotacreditos !== null) {
                    foreach ($this->collNotacreditos as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collRequisicions !== null) {
                    foreach ($this->collRequisicions as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collTrabajadorpromedios !== null) {
                    foreach ($this->collTrabajadorpromedios as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collUsuariosucursals !== null) {
                    foreach ($this->collUsuariosucursals as $referrerFK) {
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
        $pos = SucursalPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdsucursal();
                break;
            case 1:
                return $this->getSucursalNombre();
                break;
            case 2:
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
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Sucursal'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Sucursal'][$this->getPrimaryKey()] = true;
        $keys = SucursalPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdsucursal(),
            $keys[1] => $this->getSucursalNombre(),
            $keys[2] => $this->getIdempresa(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aEmpresa) {
                $result['Empresa'] = $this->aEmpresa->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collAlmacens) {
                $result['Almacens'] = $this->collAlmacens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collDevolucions) {
                $result['Devolucions'] = $this->collDevolucions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collNotacreditos) {
                $result['Notacreditos'] = $this->collNotacreditos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collRequisicions) {
                $result['Requisicions'] = $this->collRequisicions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collTrabajadorpromedios) {
                $result['Trabajadorpromedios'] = $this->collTrabajadorpromedios->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collUsuariosucursals) {
                $result['Usuariosucursals'] = $this->collUsuariosucursals->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = SucursalPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdsucursal($value);
                break;
            case 1:
                $this->setSucursalNombre($value);
                break;
            case 2:
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
        $keys = SucursalPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdsucursal($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSucursalNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdempresa($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SucursalPeer::DATABASE_NAME);

        if ($this->isColumnModified(SucursalPeer::IDSUCURSAL)) $criteria->add(SucursalPeer::IDSUCURSAL, $this->idsucursal);
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_NOMBRE)) $criteria->add(SucursalPeer::SUCURSAL_NOMBRE, $this->sucursal_nombre);
        if ($this->isColumnModified(SucursalPeer::IDEMPRESA)) $criteria->add(SucursalPeer::IDEMPRESA, $this->idempresa);

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
        $criteria = new Criteria(SucursalPeer::DATABASE_NAME);
        $criteria->add(SucursalPeer::IDSUCURSAL, $this->idsucursal);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdsucursal();
    }

    /**
     * Generic method to set the primary key (idsucursal column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdsucursal($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdsucursal();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Sucursal (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSucursalNombre($this->getSucursalNombre());
        $copyObj->setIdempresa($this->getIdempresa());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getAlmacens() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addAlmacen($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getDevolucions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addDevolucion($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getNotacreditos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addNotacredito($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getRequisicions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addRequisicion($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getTrabajadorpromedios() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTrabajadorpromedio($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getUsuariosucursals() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addUsuariosucursal($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdsucursal(NULL); // this is a auto-increment column, so set to default value
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
     * @return Sucursal Clone of current object.
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
     * @return SucursalPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SucursalPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Empresa object.
     *
     * @param                  Empresa $v
     * @return Sucursal The current object (for fluent API support)
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
            $v->addSucursal($this);
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
                $this->aEmpresa->addSucursals($this);
             */
        }

        return $this->aEmpresa;
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
        if ('Almacen' == $relationName) {
            $this->initAlmacens();
        }
        if ('Devolucion' == $relationName) {
            $this->initDevolucions();
        }
        if ('Notacredito' == $relationName) {
            $this->initNotacreditos();
        }
        if ('Requisicion' == $relationName) {
            $this->initRequisicions();
        }
        if ('Trabajadorpromedio' == $relationName) {
            $this->initTrabajadorpromedios();
        }
        if ('Usuariosucursal' == $relationName) {
            $this->initUsuariosucursals();
        }
    }

    /**
     * Clears out the collAlmacens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Sucursal The current object (for fluent API support)
     * @see        addAlmacens()
     */
    public function clearAlmacens()
    {
        $this->collAlmacens = null; // important to set this to null since that means it is uninitialized
        $this->collAlmacensPartial = null;

        return $this;
    }

    /**
     * reset is the collAlmacens collection loaded partially
     *
     * @return void
     */
    public function resetPartialAlmacens($v = true)
    {
        $this->collAlmacensPartial = $v;
    }

    /**
     * Initializes the collAlmacens collection.
     *
     * By default this just sets the collAlmacens collection to an empty array (like clearcollAlmacens());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initAlmacens($overrideExisting = true)
    {
        if (null !== $this->collAlmacens && !$overrideExisting) {
            return;
        }
        $this->collAlmacens = new PropelObjectCollection();
        $this->collAlmacens->setModel('Almacen');
    }

    /**
     * Gets an array of Almacen objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Sucursal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Almacen[] List of Almacen objects
     * @throws PropelException
     */
    public function getAlmacens($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collAlmacensPartial && !$this->isNew();
        if (null === $this->collAlmacens || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collAlmacens) {
                // return empty collection
                $this->initAlmacens();
            } else {
                $collAlmacens = AlmacenQuery::create(null, $criteria)
                    ->filterBySucursal($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collAlmacensPartial && count($collAlmacens)) {
                      $this->initAlmacens(false);

                      foreach ($collAlmacens as $obj) {
                        if (false == $this->collAlmacens->contains($obj)) {
                          $this->collAlmacens->append($obj);
                        }
                      }

                      $this->collAlmacensPartial = true;
                    }

                    $collAlmacens->getInternalIterator()->rewind();

                    return $collAlmacens;
                }

                if ($partial && $this->collAlmacens) {
                    foreach ($this->collAlmacens as $obj) {
                        if ($obj->isNew()) {
                            $collAlmacens[] = $obj;
                        }
                    }
                }

                $this->collAlmacens = $collAlmacens;
                $this->collAlmacensPartial = false;
            }
        }

        return $this->collAlmacens;
    }

    /**
     * Sets a collection of Almacen objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $almacens A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Sucursal The current object (for fluent API support)
     */
    public function setAlmacens(PropelCollection $almacens, PropelPDO $con = null)
    {
        $almacensToDelete = $this->getAlmacens(new Criteria(), $con)->diff($almacens);


        $this->almacensScheduledForDeletion = $almacensToDelete;

        foreach ($almacensToDelete as $almacenRemoved) {
            $almacenRemoved->setSucursal(null);
        }

        $this->collAlmacens = null;
        foreach ($almacens as $almacen) {
            $this->addAlmacen($almacen);
        }

        $this->collAlmacens = $almacens;
        $this->collAlmacensPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Almacen objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Almacen objects.
     * @throws PropelException
     */
    public function countAlmacens(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collAlmacensPartial && !$this->isNew();
        if (null === $this->collAlmacens || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collAlmacens) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getAlmacens());
            }
            $query = AlmacenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySucursal($this)
                ->count($con);
        }

        return count($this->collAlmacens);
    }

    /**
     * Method called to associate a Almacen object to this object
     * through the Almacen foreign key attribute.
     *
     * @param    Almacen $l Almacen
     * @return Sucursal The current object (for fluent API support)
     */
    public function addAlmacen(Almacen $l)
    {
        if ($this->collAlmacens === null) {
            $this->initAlmacens();
            $this->collAlmacensPartial = true;
        }

        if (!in_array($l, $this->collAlmacens->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddAlmacen($l);

            if ($this->almacensScheduledForDeletion and $this->almacensScheduledForDeletion->contains($l)) {
                $this->almacensScheduledForDeletion->remove($this->almacensScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Almacen $almacen The almacen object to add.
     */
    protected function doAddAlmacen($almacen)
    {
        $this->collAlmacens[]= $almacen;
        $almacen->setSucursal($this);
    }

    /**
     * @param	Almacen $almacen The almacen object to remove.
     * @return Sucursal The current object (for fluent API support)
     */
    public function removeAlmacen($almacen)
    {
        if ($this->getAlmacens()->contains($almacen)) {
            $this->collAlmacens->remove($this->collAlmacens->search($almacen));
            if (null === $this->almacensScheduledForDeletion) {
                $this->almacensScheduledForDeletion = clone $this->collAlmacens;
                $this->almacensScheduledForDeletion->clear();
            }
            $this->almacensScheduledForDeletion[]= clone $almacen;
            $almacen->setSucursal(null);
        }

        return $this;
    }

    /**
     * Clears out the collDevolucions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Sucursal The current object (for fluent API support)
     * @see        addDevolucions()
     */
    public function clearDevolucions()
    {
        $this->collDevolucions = null; // important to set this to null since that means it is uninitialized
        $this->collDevolucionsPartial = null;

        return $this;
    }

    /**
     * reset is the collDevolucions collection loaded partially
     *
     * @return void
     */
    public function resetPartialDevolucions($v = true)
    {
        $this->collDevolucionsPartial = $v;
    }

    /**
     * Initializes the collDevolucions collection.
     *
     * By default this just sets the collDevolucions collection to an empty array (like clearcollDevolucions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initDevolucions($overrideExisting = true)
    {
        if (null !== $this->collDevolucions && !$overrideExisting) {
            return;
        }
        $this->collDevolucions = new PropelObjectCollection();
        $this->collDevolucions->setModel('Devolucion');
    }

    /**
     * Gets an array of Devolucion objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Sucursal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Devolucion[] List of Devolucion objects
     * @throws PropelException
     */
    public function getDevolucions($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collDevolucionsPartial && !$this->isNew();
        if (null === $this->collDevolucions || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collDevolucions) {
                // return empty collection
                $this->initDevolucions();
            } else {
                $collDevolucions = DevolucionQuery::create(null, $criteria)
                    ->filterBySucursal($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collDevolucionsPartial && count($collDevolucions)) {
                      $this->initDevolucions(false);

                      foreach ($collDevolucions as $obj) {
                        if (false == $this->collDevolucions->contains($obj)) {
                          $this->collDevolucions->append($obj);
                        }
                      }

                      $this->collDevolucionsPartial = true;
                    }

                    $collDevolucions->getInternalIterator()->rewind();

                    return $collDevolucions;
                }

                if ($partial && $this->collDevolucions) {
                    foreach ($this->collDevolucions as $obj) {
                        if ($obj->isNew()) {
                            $collDevolucions[] = $obj;
                        }
                    }
                }

                $this->collDevolucions = $collDevolucions;
                $this->collDevolucionsPartial = false;
            }
        }

        return $this->collDevolucions;
    }

    /**
     * Sets a collection of Devolucion objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $devolucions A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Sucursal The current object (for fluent API support)
     */
    public function setDevolucions(PropelCollection $devolucions, PropelPDO $con = null)
    {
        $devolucionsToDelete = $this->getDevolucions(new Criteria(), $con)->diff($devolucions);


        $this->devolucionsScheduledForDeletion = $devolucionsToDelete;

        foreach ($devolucionsToDelete as $devolucionRemoved) {
            $devolucionRemoved->setSucursal(null);
        }

        $this->collDevolucions = null;
        foreach ($devolucions as $devolucion) {
            $this->addDevolucion($devolucion);
        }

        $this->collDevolucions = $devolucions;
        $this->collDevolucionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Devolucion objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Devolucion objects.
     * @throws PropelException
     */
    public function countDevolucions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collDevolucionsPartial && !$this->isNew();
        if (null === $this->collDevolucions || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collDevolucions) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getDevolucions());
            }
            $query = DevolucionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySucursal($this)
                ->count($con);
        }

        return count($this->collDevolucions);
    }

    /**
     * Method called to associate a Devolucion object to this object
     * through the Devolucion foreign key attribute.
     *
     * @param    Devolucion $l Devolucion
     * @return Sucursal The current object (for fluent API support)
     */
    public function addDevolucion(Devolucion $l)
    {
        if ($this->collDevolucions === null) {
            $this->initDevolucions();
            $this->collDevolucionsPartial = true;
        }

        if (!in_array($l, $this->collDevolucions->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddDevolucion($l);

            if ($this->devolucionsScheduledForDeletion and $this->devolucionsScheduledForDeletion->contains($l)) {
                $this->devolucionsScheduledForDeletion->remove($this->devolucionsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Devolucion $devolucion The devolucion object to add.
     */
    protected function doAddDevolucion($devolucion)
    {
        $this->collDevolucions[]= $devolucion;
        $devolucion->setSucursal($this);
    }

    /**
     * @param	Devolucion $devolucion The devolucion object to remove.
     * @return Sucursal The current object (for fluent API support)
     */
    public function removeDevolucion($devolucion)
    {
        if ($this->getDevolucions()->contains($devolucion)) {
            $this->collDevolucions->remove($this->collDevolucions->search($devolucion));
            if (null === $this->devolucionsScheduledForDeletion) {
                $this->devolucionsScheduledForDeletion = clone $this->collDevolucions;
                $this->devolucionsScheduledForDeletion->clear();
            }
            $this->devolucionsScheduledForDeletion[]= clone $devolucion;
            $devolucion->setSucursal(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Devolucions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Devolucion[] List of Devolucion objects
     */
    public function getDevolucionsJoinAlmacen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = DevolucionQuery::create(null, $criteria);
        $query->joinWith('Almacen', $join_behavior);

        return $this->getDevolucions($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Devolucions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Devolucion[] List of Devolucion objects
     */
    public function getDevolucionsJoinUsuarioRelatedByIdauditor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = DevolucionQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdauditor', $join_behavior);

        return $this->getDevolucions($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Devolucions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Devolucion[] List of Devolucion objects
     */
    public function getDevolucionsJoinUsuarioRelatedByIdusuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = DevolucionQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdusuario', $join_behavior);

        return $this->getDevolucions($query, $con);
    }

    /**
     * Clears out the collNotacreditos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Sucursal The current object (for fluent API support)
     * @see        addNotacreditos()
     */
    public function clearNotacreditos()
    {
        $this->collNotacreditos = null; // important to set this to null since that means it is uninitialized
        $this->collNotacreditosPartial = null;

        return $this;
    }

    /**
     * reset is the collNotacreditos collection loaded partially
     *
     * @return void
     */
    public function resetPartialNotacreditos($v = true)
    {
        $this->collNotacreditosPartial = $v;
    }

    /**
     * Initializes the collNotacreditos collection.
     *
     * By default this just sets the collNotacreditos collection to an empty array (like clearcollNotacreditos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initNotacreditos($overrideExisting = true)
    {
        if (null !== $this->collNotacreditos && !$overrideExisting) {
            return;
        }
        $this->collNotacreditos = new PropelObjectCollection();
        $this->collNotacreditos->setModel('Notacredito');
    }

    /**
     * Gets an array of Notacredito objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Sucursal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Notacredito[] List of Notacredito objects
     * @throws PropelException
     */
    public function getNotacreditos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collNotacreditosPartial && !$this->isNew();
        if (null === $this->collNotacreditos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collNotacreditos) {
                // return empty collection
                $this->initNotacreditos();
            } else {
                $collNotacreditos = NotacreditoQuery::create(null, $criteria)
                    ->filterBySucursal($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collNotacreditosPartial && count($collNotacreditos)) {
                      $this->initNotacreditos(false);

                      foreach ($collNotacreditos as $obj) {
                        if (false == $this->collNotacreditos->contains($obj)) {
                          $this->collNotacreditos->append($obj);
                        }
                      }

                      $this->collNotacreditosPartial = true;
                    }

                    $collNotacreditos->getInternalIterator()->rewind();

                    return $collNotacreditos;
                }

                if ($partial && $this->collNotacreditos) {
                    foreach ($this->collNotacreditos as $obj) {
                        if ($obj->isNew()) {
                            $collNotacreditos[] = $obj;
                        }
                    }
                }

                $this->collNotacreditos = $collNotacreditos;
                $this->collNotacreditosPartial = false;
            }
        }

        return $this->collNotacreditos;
    }

    /**
     * Sets a collection of Notacredito objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $notacreditos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Sucursal The current object (for fluent API support)
     */
    public function setNotacreditos(PropelCollection $notacreditos, PropelPDO $con = null)
    {
        $notacreditosToDelete = $this->getNotacreditos(new Criteria(), $con)->diff($notacreditos);


        $this->notacreditosScheduledForDeletion = $notacreditosToDelete;

        foreach ($notacreditosToDelete as $notacreditoRemoved) {
            $notacreditoRemoved->setSucursal(null);
        }

        $this->collNotacreditos = null;
        foreach ($notacreditos as $notacredito) {
            $this->addNotacredito($notacredito);
        }

        $this->collNotacreditos = $notacreditos;
        $this->collNotacreditosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Notacredito objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Notacredito objects.
     * @throws PropelException
     */
    public function countNotacreditos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collNotacreditosPartial && !$this->isNew();
        if (null === $this->collNotacreditos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collNotacreditos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getNotacreditos());
            }
            $query = NotacreditoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySucursal($this)
                ->count($con);
        }

        return count($this->collNotacreditos);
    }

    /**
     * Method called to associate a Notacredito object to this object
     * through the Notacredito foreign key attribute.
     *
     * @param    Notacredito $l Notacredito
     * @return Sucursal The current object (for fluent API support)
     */
    public function addNotacredito(Notacredito $l)
    {
        if ($this->collNotacreditos === null) {
            $this->initNotacreditos();
            $this->collNotacreditosPartial = true;
        }

        if (!in_array($l, $this->collNotacreditos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddNotacredito($l);

            if ($this->notacreditosScheduledForDeletion and $this->notacreditosScheduledForDeletion->contains($l)) {
                $this->notacreditosScheduledForDeletion->remove($this->notacreditosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Notacredito $notacredito The notacredito object to add.
     */
    protected function doAddNotacredito($notacredito)
    {
        $this->collNotacreditos[]= $notacredito;
        $notacredito->setSucursal($this);
    }

    /**
     * @param	Notacredito $notacredito The notacredito object to remove.
     * @return Sucursal The current object (for fluent API support)
     */
    public function removeNotacredito($notacredito)
    {
        if ($this->getNotacreditos()->contains($notacredito)) {
            $this->collNotacreditos->remove($this->collNotacreditos->search($notacredito));
            if (null === $this->notacreditosScheduledForDeletion) {
                $this->notacreditosScheduledForDeletion = clone $this->collNotacreditos;
                $this->notacreditosScheduledForDeletion->clear();
            }
            $this->notacreditosScheduledForDeletion[]= clone $notacredito;
            $notacredito->setSucursal(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Notacreditos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Notacredito[] List of Notacredito objects
     */
    public function getNotacreditosJoinAlmacen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = NotacreditoQuery::create(null, $criteria);
        $query->joinWith('Almacen', $join_behavior);

        return $this->getNotacreditos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Notacreditos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Notacredito[] List of Notacredito objects
     */
    public function getNotacreditosJoinUsuarioRelatedByIdauditor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = NotacreditoQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdauditor', $join_behavior);

        return $this->getNotacreditos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Notacreditos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Notacredito[] List of Notacredito objects
     */
    public function getNotacreditosJoinUsuarioRelatedByIdusuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = NotacreditoQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdusuario', $join_behavior);

        return $this->getNotacreditos($query, $con);
    }

    /**
     * Clears out the collRequisicions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Sucursal The current object (for fluent API support)
     * @see        addRequisicions()
     */
    public function clearRequisicions()
    {
        $this->collRequisicions = null; // important to set this to null since that means it is uninitialized
        $this->collRequisicionsPartial = null;

        return $this;
    }

    /**
     * reset is the collRequisicions collection loaded partially
     *
     * @return void
     */
    public function resetPartialRequisicions($v = true)
    {
        $this->collRequisicionsPartial = $v;
    }

    /**
     * Initializes the collRequisicions collection.
     *
     * By default this just sets the collRequisicions collection to an empty array (like clearcollRequisicions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initRequisicions($overrideExisting = true)
    {
        if (null !== $this->collRequisicions && !$overrideExisting) {
            return;
        }
        $this->collRequisicions = new PropelObjectCollection();
        $this->collRequisicions->setModel('Requisicion');
    }

    /**
     * Gets an array of Requisicion objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Sucursal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     * @throws PropelException
     */
    public function getRequisicions($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collRequisicionsPartial && !$this->isNew();
        if (null === $this->collRequisicions || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collRequisicions) {
                // return empty collection
                $this->initRequisicions();
            } else {
                $collRequisicions = RequisicionQuery::create(null, $criteria)
                    ->filterBySucursal($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collRequisicionsPartial && count($collRequisicions)) {
                      $this->initRequisicions(false);

                      foreach ($collRequisicions as $obj) {
                        if (false == $this->collRequisicions->contains($obj)) {
                          $this->collRequisicions->append($obj);
                        }
                      }

                      $this->collRequisicionsPartial = true;
                    }

                    $collRequisicions->getInternalIterator()->rewind();

                    return $collRequisicions;
                }

                if ($partial && $this->collRequisicions) {
                    foreach ($this->collRequisicions as $obj) {
                        if ($obj->isNew()) {
                            $collRequisicions[] = $obj;
                        }
                    }
                }

                $this->collRequisicions = $collRequisicions;
                $this->collRequisicionsPartial = false;
            }
        }

        return $this->collRequisicions;
    }

    /**
     * Sets a collection of Requisicion objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $requisicions A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Sucursal The current object (for fluent API support)
     */
    public function setRequisicions(PropelCollection $requisicions, PropelPDO $con = null)
    {
        $requisicionsToDelete = $this->getRequisicions(new Criteria(), $con)->diff($requisicions);


        $this->requisicionsScheduledForDeletion = $requisicionsToDelete;

        foreach ($requisicionsToDelete as $requisicionRemoved) {
            $requisicionRemoved->setSucursal(null);
        }

        $this->collRequisicions = null;
        foreach ($requisicions as $requisicion) {
            $this->addRequisicion($requisicion);
        }

        $this->collRequisicions = $requisicions;
        $this->collRequisicionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Requisicion objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Requisicion objects.
     * @throws PropelException
     */
    public function countRequisicions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collRequisicionsPartial && !$this->isNew();
        if (null === $this->collRequisicions || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collRequisicions) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getRequisicions());
            }
            $query = RequisicionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySucursal($this)
                ->count($con);
        }

        return count($this->collRequisicions);
    }

    /**
     * Method called to associate a Requisicion object to this object
     * through the Requisicion foreign key attribute.
     *
     * @param    Requisicion $l Requisicion
     * @return Sucursal The current object (for fluent API support)
     */
    public function addRequisicion(Requisicion $l)
    {
        if ($this->collRequisicions === null) {
            $this->initRequisicions();
            $this->collRequisicionsPartial = true;
        }

        if (!in_array($l, $this->collRequisicions->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddRequisicion($l);

            if ($this->requisicionsScheduledForDeletion and $this->requisicionsScheduledForDeletion->contains($l)) {
                $this->requisicionsScheduledForDeletion->remove($this->requisicionsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Requisicion $requisicion The requisicion object to add.
     */
    protected function doAddRequisicion($requisicion)
    {
        $this->collRequisicions[]= $requisicion;
        $requisicion->setSucursal($this);
    }

    /**
     * @param	Requisicion $requisicion The requisicion object to remove.
     * @return Sucursal The current object (for fluent API support)
     */
    public function removeRequisicion($requisicion)
    {
        if ($this->getRequisicions()->contains($requisicion)) {
            $this->collRequisicions->remove($this->collRequisicions->search($requisicion));
            if (null === $this->requisicionsScheduledForDeletion) {
                $this->requisicionsScheduledForDeletion = clone $this->collRequisicions;
                $this->requisicionsScheduledForDeletion->clear();
            }
            $this->requisicionsScheduledForDeletion[]= clone $requisicion;
            $requisicion->setSucursal(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Requisicions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsJoinUsuarioRelatedByIdauditor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdauditor', $join_behavior);

        return $this->getRequisicions($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Requisicions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsJoinConceptosalida($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('Conceptosalida', $join_behavior);

        return $this->getRequisicions($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Requisicions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsJoinEmpresa($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('Empresa', $join_behavior);

        return $this->getRequisicions($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Requisicions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsJoinUsuarioRelatedByIdusuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdusuario', $join_behavior);

        return $this->getRequisicions($query, $con);
    }

    /**
     * Clears out the collTrabajadorpromedios collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Sucursal The current object (for fluent API support)
     * @see        addTrabajadorpromedios()
     */
    public function clearTrabajadorpromedios()
    {
        $this->collTrabajadorpromedios = null; // important to set this to null since that means it is uninitialized
        $this->collTrabajadorpromediosPartial = null;

        return $this;
    }

    /**
     * reset is the collTrabajadorpromedios collection loaded partially
     *
     * @return void
     */
    public function resetPartialTrabajadorpromedios($v = true)
    {
        $this->collTrabajadorpromediosPartial = $v;
    }

    /**
     * Initializes the collTrabajadorpromedios collection.
     *
     * By default this just sets the collTrabajadorpromedios collection to an empty array (like clearcollTrabajadorpromedios());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTrabajadorpromedios($overrideExisting = true)
    {
        if (null !== $this->collTrabajadorpromedios && !$overrideExisting) {
            return;
        }
        $this->collTrabajadorpromedios = new PropelObjectCollection();
        $this->collTrabajadorpromedios->setModel('Trabajadorpromedio');
    }

    /**
     * Gets an array of Trabajadorpromedio objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Sucursal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Trabajadorpromedio[] List of Trabajadorpromedio objects
     * @throws PropelException
     */
    public function getTrabajadorpromedios($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTrabajadorpromediosPartial && !$this->isNew();
        if (null === $this->collTrabajadorpromedios || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTrabajadorpromedios) {
                // return empty collection
                $this->initTrabajadorpromedios();
            } else {
                $collTrabajadorpromedios = TrabajadorpromedioQuery::create(null, $criteria)
                    ->filterBySucursal($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTrabajadorpromediosPartial && count($collTrabajadorpromedios)) {
                      $this->initTrabajadorpromedios(false);

                      foreach ($collTrabajadorpromedios as $obj) {
                        if (false == $this->collTrabajadorpromedios->contains($obj)) {
                          $this->collTrabajadorpromedios->append($obj);
                        }
                      }

                      $this->collTrabajadorpromediosPartial = true;
                    }

                    $collTrabajadorpromedios->getInternalIterator()->rewind();

                    return $collTrabajadorpromedios;
                }

                if ($partial && $this->collTrabajadorpromedios) {
                    foreach ($this->collTrabajadorpromedios as $obj) {
                        if ($obj->isNew()) {
                            $collTrabajadorpromedios[] = $obj;
                        }
                    }
                }

                $this->collTrabajadorpromedios = $collTrabajadorpromedios;
                $this->collTrabajadorpromediosPartial = false;
            }
        }

        return $this->collTrabajadorpromedios;
    }

    /**
     * Sets a collection of Trabajadorpromedio objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $trabajadorpromedios A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Sucursal The current object (for fluent API support)
     */
    public function setTrabajadorpromedios(PropelCollection $trabajadorpromedios, PropelPDO $con = null)
    {
        $trabajadorpromediosToDelete = $this->getTrabajadorpromedios(new Criteria(), $con)->diff($trabajadorpromedios);


        $this->trabajadorpromediosScheduledForDeletion = $trabajadorpromediosToDelete;

        foreach ($trabajadorpromediosToDelete as $trabajadorpromedioRemoved) {
            $trabajadorpromedioRemoved->setSucursal(null);
        }

        $this->collTrabajadorpromedios = null;
        foreach ($trabajadorpromedios as $trabajadorpromedio) {
            $this->addTrabajadorpromedio($trabajadorpromedio);
        }

        $this->collTrabajadorpromedios = $trabajadorpromedios;
        $this->collTrabajadorpromediosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Trabajadorpromedio objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Trabajadorpromedio objects.
     * @throws PropelException
     */
    public function countTrabajadorpromedios(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTrabajadorpromediosPartial && !$this->isNew();
        if (null === $this->collTrabajadorpromedios || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTrabajadorpromedios) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTrabajadorpromedios());
            }
            $query = TrabajadorpromedioQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySucursal($this)
                ->count($con);
        }

        return count($this->collTrabajadorpromedios);
    }

    /**
     * Method called to associate a Trabajadorpromedio object to this object
     * through the Trabajadorpromedio foreign key attribute.
     *
     * @param    Trabajadorpromedio $l Trabajadorpromedio
     * @return Sucursal The current object (for fluent API support)
     */
    public function addTrabajadorpromedio(Trabajadorpromedio $l)
    {
        if ($this->collTrabajadorpromedios === null) {
            $this->initTrabajadorpromedios();
            $this->collTrabajadorpromediosPartial = true;
        }

        if (!in_array($l, $this->collTrabajadorpromedios->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTrabajadorpromedio($l);

            if ($this->trabajadorpromediosScheduledForDeletion and $this->trabajadorpromediosScheduledForDeletion->contains($l)) {
                $this->trabajadorpromediosScheduledForDeletion->remove($this->trabajadorpromediosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Trabajadorpromedio $trabajadorpromedio The trabajadorpromedio object to add.
     */
    protected function doAddTrabajadorpromedio($trabajadorpromedio)
    {
        $this->collTrabajadorpromedios[]= $trabajadorpromedio;
        $trabajadorpromedio->setSucursal($this);
    }

    /**
     * @param	Trabajadorpromedio $trabajadorpromedio The trabajadorpromedio object to remove.
     * @return Sucursal The current object (for fluent API support)
     */
    public function removeTrabajadorpromedio($trabajadorpromedio)
    {
        if ($this->getTrabajadorpromedios()->contains($trabajadorpromedio)) {
            $this->collTrabajadorpromedios->remove($this->collTrabajadorpromedios->search($trabajadorpromedio));
            if (null === $this->trabajadorpromediosScheduledForDeletion) {
                $this->trabajadorpromediosScheduledForDeletion = clone $this->collTrabajadorpromedios;
                $this->trabajadorpromediosScheduledForDeletion->clear();
            }
            $this->trabajadorpromediosScheduledForDeletion[]= clone $trabajadorpromedio;
            $trabajadorpromedio->setSucursal(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Trabajadorpromedios from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Trabajadorpromedio[] List of Trabajadorpromedio objects
     */
    public function getTrabajadorpromediosJoinEmpresa($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TrabajadorpromedioQuery::create(null, $criteria);
        $query->joinWith('Empresa', $join_behavior);

        return $this->getTrabajadorpromedios($query, $con);
    }

    /**
     * Clears out the collUsuariosucursals collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Sucursal The current object (for fluent API support)
     * @see        addUsuariosucursals()
     */
    public function clearUsuariosucursals()
    {
        $this->collUsuariosucursals = null; // important to set this to null since that means it is uninitialized
        $this->collUsuariosucursalsPartial = null;

        return $this;
    }

    /**
     * reset is the collUsuariosucursals collection loaded partially
     *
     * @return void
     */
    public function resetPartialUsuariosucursals($v = true)
    {
        $this->collUsuariosucursalsPartial = $v;
    }

    /**
     * Initializes the collUsuariosucursals collection.
     *
     * By default this just sets the collUsuariosucursals collection to an empty array (like clearcollUsuariosucursals());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initUsuariosucursals($overrideExisting = true)
    {
        if (null !== $this->collUsuariosucursals && !$overrideExisting) {
            return;
        }
        $this->collUsuariosucursals = new PropelObjectCollection();
        $this->collUsuariosucursals->setModel('Usuariosucursal');
    }

    /**
     * Gets an array of Usuariosucursal objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Sucursal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Usuariosucursal[] List of Usuariosucursal objects
     * @throws PropelException
     */
    public function getUsuariosucursals($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collUsuariosucursalsPartial && !$this->isNew();
        if (null === $this->collUsuariosucursals || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collUsuariosucursals) {
                // return empty collection
                $this->initUsuariosucursals();
            } else {
                $collUsuariosucursals = UsuariosucursalQuery::create(null, $criteria)
                    ->filterBySucursal($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collUsuariosucursalsPartial && count($collUsuariosucursals)) {
                      $this->initUsuariosucursals(false);

                      foreach ($collUsuariosucursals as $obj) {
                        if (false == $this->collUsuariosucursals->contains($obj)) {
                          $this->collUsuariosucursals->append($obj);
                        }
                      }

                      $this->collUsuariosucursalsPartial = true;
                    }

                    $collUsuariosucursals->getInternalIterator()->rewind();

                    return $collUsuariosucursals;
                }

                if ($partial && $this->collUsuariosucursals) {
                    foreach ($this->collUsuariosucursals as $obj) {
                        if ($obj->isNew()) {
                            $collUsuariosucursals[] = $obj;
                        }
                    }
                }

                $this->collUsuariosucursals = $collUsuariosucursals;
                $this->collUsuariosucursalsPartial = false;
            }
        }

        return $this->collUsuariosucursals;
    }

    /**
     * Sets a collection of Usuariosucursal objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $usuariosucursals A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Sucursal The current object (for fluent API support)
     */
    public function setUsuariosucursals(PropelCollection $usuariosucursals, PropelPDO $con = null)
    {
        $usuariosucursalsToDelete = $this->getUsuariosucursals(new Criteria(), $con)->diff($usuariosucursals);


        $this->usuariosucursalsScheduledForDeletion = $usuariosucursalsToDelete;

        foreach ($usuariosucursalsToDelete as $usuariosucursalRemoved) {
            $usuariosucursalRemoved->setSucursal(null);
        }

        $this->collUsuariosucursals = null;
        foreach ($usuariosucursals as $usuariosucursal) {
            $this->addUsuariosucursal($usuariosucursal);
        }

        $this->collUsuariosucursals = $usuariosucursals;
        $this->collUsuariosucursalsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Usuariosucursal objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Usuariosucursal objects.
     * @throws PropelException
     */
    public function countUsuariosucursals(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collUsuariosucursalsPartial && !$this->isNew();
        if (null === $this->collUsuariosucursals || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collUsuariosucursals) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getUsuariosucursals());
            }
            $query = UsuariosucursalQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySucursal($this)
                ->count($con);
        }

        return count($this->collUsuariosucursals);
    }

    /**
     * Method called to associate a Usuariosucursal object to this object
     * through the Usuariosucursal foreign key attribute.
     *
     * @param    Usuariosucursal $l Usuariosucursal
     * @return Sucursal The current object (for fluent API support)
     */
    public function addUsuariosucursal(Usuariosucursal $l)
    {
        if ($this->collUsuariosucursals === null) {
            $this->initUsuariosucursals();
            $this->collUsuariosucursalsPartial = true;
        }

        if (!in_array($l, $this->collUsuariosucursals->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddUsuariosucursal($l);

            if ($this->usuariosucursalsScheduledForDeletion and $this->usuariosucursalsScheduledForDeletion->contains($l)) {
                $this->usuariosucursalsScheduledForDeletion->remove($this->usuariosucursalsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Usuariosucursal $usuariosucursal The usuariosucursal object to add.
     */
    protected function doAddUsuariosucursal($usuariosucursal)
    {
        $this->collUsuariosucursals[]= $usuariosucursal;
        $usuariosucursal->setSucursal($this);
    }

    /**
     * @param	Usuariosucursal $usuariosucursal The usuariosucursal object to remove.
     * @return Sucursal The current object (for fluent API support)
     */
    public function removeUsuariosucursal($usuariosucursal)
    {
        if ($this->getUsuariosucursals()->contains($usuariosucursal)) {
            $this->collUsuariosucursals->remove($this->collUsuariosucursals->search($usuariosucursal));
            if (null === $this->usuariosucursalsScheduledForDeletion) {
                $this->usuariosucursalsScheduledForDeletion = clone $this->collUsuariosucursals;
                $this->usuariosucursalsScheduledForDeletion->clear();
            }
            $this->usuariosucursalsScheduledForDeletion[]= clone $usuariosucursal;
            $usuariosucursal->setSucursal(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Usuariosucursals from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Usuariosucursal[] List of Usuariosucursal objects
     */
    public function getUsuariosucursalsJoinUsuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = UsuariosucursalQuery::create(null, $criteria);
        $query->joinWith('Usuario', $join_behavior);

        return $this->getUsuariosucursals($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idsucursal = null;
        $this->sucursal_nombre = null;
        $this->idempresa = null;
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
            if ($this->collAlmacens) {
                foreach ($this->collAlmacens as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collDevolucions) {
                foreach ($this->collDevolucions as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collNotacreditos) {
                foreach ($this->collNotacreditos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collRequisicions) {
                foreach ($this->collRequisicions as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collTrabajadorpromedios) {
                foreach ($this->collTrabajadorpromedios as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collUsuariosucursals) {
                foreach ($this->collUsuariosucursals as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aEmpresa instanceof Persistent) {
              $this->aEmpresa->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collAlmacens instanceof PropelCollection) {
            $this->collAlmacens->clearIterator();
        }
        $this->collAlmacens = null;
        if ($this->collDevolucions instanceof PropelCollection) {
            $this->collDevolucions->clearIterator();
        }
        $this->collDevolucions = null;
        if ($this->collNotacreditos instanceof PropelCollection) {
            $this->collNotacreditos->clearIterator();
        }
        $this->collNotacreditos = null;
        if ($this->collRequisicions instanceof PropelCollection) {
            $this->collRequisicions->clearIterator();
        }
        $this->collRequisicions = null;
        if ($this->collTrabajadorpromedios instanceof PropelCollection) {
            $this->collTrabajadorpromedios->clearIterator();
        }
        $this->collTrabajadorpromedios = null;
        if ($this->collUsuariosucursals instanceof PropelCollection) {
            $this->collUsuariosucursals->clearIterator();
        }
        $this->collUsuariosucursals = null;
        $this->aEmpresa = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SucursalPeer::DEFAULT_STRING_FORMAT);
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
