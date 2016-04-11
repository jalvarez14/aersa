<?php


/**
 * Base class that represents a row from the 'usuario' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseUsuario extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'UsuarioPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        UsuarioPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idusuario field.
     * @var        int
     */
    protected $idusuario;

    /**
     * The value for the idrol field.
     * @var        int
     */
    protected $idrol;

    /**
     * The value for the usuario_nombre field.
     * @var        string
     */
    protected $usuario_nombre;

    /**
     * The value for the usuario_estatus field.
     * @var        boolean
     */
    protected $usuario_estatus;

    /**
     * The value for the usuario_username field.
     * @var        string
     */
    protected $usuario_username;

    /**
     * The value for the usuario_password field.
     * @var        string
     */
    protected $usuario_password;

    /**
     * @var        Rol
     */
    protected $aRol;

    /**
     * @var        PropelObjectCollection|Devolucion[] Collection to store aggregation of Devolucion objects.
     */
    protected $collDevolucionsRelatedByIdauditor;
    protected $collDevolucionsRelatedByIdauditorPartial;

    /**
     * @var        PropelObjectCollection|Devolucion[] Collection to store aggregation of Devolucion objects.
     */
    protected $collDevolucionsRelatedByIdusuario;
    protected $collDevolucionsRelatedByIdusuarioPartial;

    /**
     * @var        PropelObjectCollection|Inventariomes[] Collection to store aggregation of Inventariomes objects.
     */
    protected $collInventariomessRelatedByIdauditor;
    protected $collInventariomessRelatedByIdauditorPartial;

    /**
     * @var        PropelObjectCollection|Inventariomes[] Collection to store aggregation of Inventariomes objects.
     */
    protected $collInventariomessRelatedByIdusuario;
    protected $collInventariomessRelatedByIdusuarioPartial;

    /**
     * @var        PropelObjectCollection|Inventariomesdetallenota[] Collection to store aggregation of Inventariomesdetallenota objects.
     */
    protected $collInventariomesdetallenotas;
    protected $collInventariomesdetallenotasPartial;

    /**
     * @var        PropelObjectCollection|Notacredito[] Collection to store aggregation of Notacredito objects.
     */
    protected $collNotacreditosRelatedByIdauditor;
    protected $collNotacreditosRelatedByIdauditorPartial;

    /**
     * @var        PropelObjectCollection|Notacredito[] Collection to store aggregation of Notacredito objects.
     */
    protected $collNotacreditosRelatedByIdusuario;
    protected $collNotacreditosRelatedByIdusuarioPartial;

    /**
     * @var        PropelObjectCollection|Requisicion[] Collection to store aggregation of Requisicion objects.
     */
    protected $collRequisicionsRelatedByIdauditor;
    protected $collRequisicionsRelatedByIdauditorPartial;

    /**
     * @var        PropelObjectCollection|Requisicion[] Collection to store aggregation of Requisicion objects.
     */
    protected $collRequisicionsRelatedByIdusuario;
    protected $collRequisicionsRelatedByIdusuarioPartial;

    /**
     * @var        PropelObjectCollection|Usuarioempresa[] Collection to store aggregation of Usuarioempresa objects.
     */
    protected $collUsuarioempresas;
    protected $collUsuarioempresasPartial;

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
    protected $devolucionsRelatedByIdauditorScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $devolucionsRelatedByIdusuarioScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $inventariomessRelatedByIdauditorScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $inventariomessRelatedByIdusuarioScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $inventariomesdetallenotasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $notacreditosRelatedByIdauditorScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $notacreditosRelatedByIdusuarioScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $requisicionsRelatedByIdauditorScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $requisicionsRelatedByIdusuarioScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $usuarioempresasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $usuariosucursalsScheduledForDeletion = null;

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
     * Get the [idrol] column value.
     *
     * @return int
     */
    public function getIdrol()
    {

        return $this->idrol;
    }

    /**
     * Get the [usuario_nombre] column value.
     *
     * @return string
     */
    public function getUsuarioNombre()
    {

        return $this->usuario_nombre;
    }

    /**
     * Get the [usuario_estatus] column value.
     *
     * @return boolean
     */
    public function getUsuarioEstatus()
    {

        return $this->usuario_estatus;
    }

    /**
     * Get the [usuario_username] column value.
     *
     * @return string
     */
    public function getUsuarioUsername()
    {

        return $this->usuario_username;
    }

    /**
     * Get the [usuario_password] column value.
     *
     * @return string
     */
    public function getUsuarioPassword()
    {

        return $this->usuario_password;
    }

    /**
     * Set the value of [idusuario] column.
     *
     * @param  int $v new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setIdusuario($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idusuario !== $v) {
            $this->idusuario = $v;
            $this->modifiedColumns[] = UsuarioPeer::IDUSUARIO;
        }


        return $this;
    } // setIdusuario()

    /**
     * Set the value of [idrol] column.
     *
     * @param  int $v new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setIdrol($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idrol !== $v) {
            $this->idrol = $v;
            $this->modifiedColumns[] = UsuarioPeer::IDROL;
        }

        if ($this->aRol !== null && $this->aRol->getIdrol() !== $v) {
            $this->aRol = null;
        }


        return $this;
    } // setIdrol()

    /**
     * Set the value of [usuario_nombre] column.
     *
     * @param  string $v new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setUsuarioNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usuario_nombre !== $v) {
            $this->usuario_nombre = $v;
            $this->modifiedColumns[] = UsuarioPeer::USUARIO_NOMBRE;
        }


        return $this;
    } // setUsuarioNombre()

    /**
     * Sets the value of the [usuario_estatus] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setUsuarioEstatus($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->usuario_estatus !== $v) {
            $this->usuario_estatus = $v;
            $this->modifiedColumns[] = UsuarioPeer::USUARIO_ESTATUS;
        }


        return $this;
    } // setUsuarioEstatus()

    /**
     * Set the value of [usuario_username] column.
     *
     * @param  string $v new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setUsuarioUsername($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usuario_username !== $v) {
            $this->usuario_username = $v;
            $this->modifiedColumns[] = UsuarioPeer::USUARIO_USERNAME;
        }


        return $this;
    } // setUsuarioUsername()

    /**
     * Set the value of [usuario_password] column.
     *
     * @param  string $v new value
     * @return Usuario The current object (for fluent API support)
     */
    public function setUsuarioPassword($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usuario_password !== $v) {
            $this->usuario_password = $v;
            $this->modifiedColumns[] = UsuarioPeer::USUARIO_PASSWORD;
        }


        return $this;
    } // setUsuarioPassword()

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

            $this->idusuario = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idrol = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->usuario_nombre = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->usuario_estatus = ($row[$startcol + 3] !== null) ? (boolean) $row[$startcol + 3] : null;
            $this->usuario_username = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->usuario_password = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 6; // 6 = UsuarioPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Usuario object", $e);
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

        if ($this->aRol !== null && $this->idrol !== $this->aRol->getIdrol()) {
            $this->aRol = null;
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
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = UsuarioPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aRol = null;
            $this->collDevolucionsRelatedByIdauditor = null;

            $this->collDevolucionsRelatedByIdusuario = null;

            $this->collInventariomessRelatedByIdauditor = null;

            $this->collInventariomessRelatedByIdusuario = null;

            $this->collInventariomesdetallenotas = null;

            $this->collNotacreditosRelatedByIdauditor = null;

            $this->collNotacreditosRelatedByIdusuario = null;

            $this->collRequisicionsRelatedByIdauditor = null;

            $this->collRequisicionsRelatedByIdusuario = null;

            $this->collUsuarioempresas = null;

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
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = UsuarioQuery::create()
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
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                UsuarioPeer::addInstanceToPool($this);
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

            if ($this->aRol !== null) {
                if ($this->aRol->isModified() || $this->aRol->isNew()) {
                    $affectedRows += $this->aRol->save($con);
                }
                $this->setRol($this->aRol);
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

            if ($this->devolucionsRelatedByIdauditorScheduledForDeletion !== null) {
                if (!$this->devolucionsRelatedByIdauditorScheduledForDeletion->isEmpty()) {
                    DevolucionQuery::create()
                        ->filterByPrimaryKeys($this->devolucionsRelatedByIdauditorScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->devolucionsRelatedByIdauditorScheduledForDeletion = null;
                }
            }

            if ($this->collDevolucionsRelatedByIdauditor !== null) {
                foreach ($this->collDevolucionsRelatedByIdauditor as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->devolucionsRelatedByIdusuarioScheduledForDeletion !== null) {
                if (!$this->devolucionsRelatedByIdusuarioScheduledForDeletion->isEmpty()) {
                    DevolucionQuery::create()
                        ->filterByPrimaryKeys($this->devolucionsRelatedByIdusuarioScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->devolucionsRelatedByIdusuarioScheduledForDeletion = null;
                }
            }

            if ($this->collDevolucionsRelatedByIdusuario !== null) {
                foreach ($this->collDevolucionsRelatedByIdusuario as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->inventariomessRelatedByIdauditorScheduledForDeletion !== null) {
                if (!$this->inventariomessRelatedByIdauditorScheduledForDeletion->isEmpty()) {
                    InventariomesQuery::create()
                        ->filterByPrimaryKeys($this->inventariomessRelatedByIdauditorScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->inventariomessRelatedByIdauditorScheduledForDeletion = null;
                }
            }

            if ($this->collInventariomessRelatedByIdauditor !== null) {
                foreach ($this->collInventariomessRelatedByIdauditor as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->inventariomessRelatedByIdusuarioScheduledForDeletion !== null) {
                if (!$this->inventariomessRelatedByIdusuarioScheduledForDeletion->isEmpty()) {
                    foreach ($this->inventariomessRelatedByIdusuarioScheduledForDeletion as $inventariomesRelatedByIdusuario) {
                        // need to save related object because we set the relation to null
                        $inventariomesRelatedByIdusuario->save($con);
                    }
                    $this->inventariomessRelatedByIdusuarioScheduledForDeletion = null;
                }
            }

            if ($this->collInventariomessRelatedByIdusuario !== null) {
                foreach ($this->collInventariomessRelatedByIdusuario as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

            if ($this->notacreditosRelatedByIdauditorScheduledForDeletion !== null) {
                if (!$this->notacreditosRelatedByIdauditorScheduledForDeletion->isEmpty()) {
                    NotacreditoQuery::create()
                        ->filterByPrimaryKeys($this->notacreditosRelatedByIdauditorScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->notacreditosRelatedByIdauditorScheduledForDeletion = null;
                }
            }

            if ($this->collNotacreditosRelatedByIdauditor !== null) {
                foreach ($this->collNotacreditosRelatedByIdauditor as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->notacreditosRelatedByIdusuarioScheduledForDeletion !== null) {
                if (!$this->notacreditosRelatedByIdusuarioScheduledForDeletion->isEmpty()) {
                    NotacreditoQuery::create()
                        ->filterByPrimaryKeys($this->notacreditosRelatedByIdusuarioScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->notacreditosRelatedByIdusuarioScheduledForDeletion = null;
                }
            }

            if ($this->collNotacreditosRelatedByIdusuario !== null) {
                foreach ($this->collNotacreditosRelatedByIdusuario as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->requisicionsRelatedByIdauditorScheduledForDeletion !== null) {
                if (!$this->requisicionsRelatedByIdauditorScheduledForDeletion->isEmpty()) {
                    RequisicionQuery::create()
                        ->filterByPrimaryKeys($this->requisicionsRelatedByIdauditorScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->requisicionsRelatedByIdauditorScheduledForDeletion = null;
                }
            }

            if ($this->collRequisicionsRelatedByIdauditor !== null) {
                foreach ($this->collRequisicionsRelatedByIdauditor as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->requisicionsRelatedByIdusuarioScheduledForDeletion !== null) {
                if (!$this->requisicionsRelatedByIdusuarioScheduledForDeletion->isEmpty()) {
                    RequisicionQuery::create()
                        ->filterByPrimaryKeys($this->requisicionsRelatedByIdusuarioScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->requisicionsRelatedByIdusuarioScheduledForDeletion = null;
                }
            }

            if ($this->collRequisicionsRelatedByIdusuario !== null) {
                foreach ($this->collRequisicionsRelatedByIdusuario as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->usuarioempresasScheduledForDeletion !== null) {
                if (!$this->usuarioempresasScheduledForDeletion->isEmpty()) {
                    UsuarioempresaQuery::create()
                        ->filterByPrimaryKeys($this->usuarioempresasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->usuarioempresasScheduledForDeletion = null;
                }
            }

            if ($this->collUsuarioempresas !== null) {
                foreach ($this->collUsuarioempresas as $referrerFK) {
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

        $this->modifiedColumns[] = UsuarioPeer::IDUSUARIO;
        if (null !== $this->idusuario) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . UsuarioPeer::IDUSUARIO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(UsuarioPeer::IDUSUARIO)) {
            $modifiedColumns[':p' . $index++]  = '`idusuario`';
        }
        if ($this->isColumnModified(UsuarioPeer::IDROL)) {
            $modifiedColumns[':p' . $index++]  = '`idrol`';
        }
        if ($this->isColumnModified(UsuarioPeer::USUARIO_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`usuario_nombre`';
        }
        if ($this->isColumnModified(UsuarioPeer::USUARIO_ESTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`usuario_estatus`';
        }
        if ($this->isColumnModified(UsuarioPeer::USUARIO_USERNAME)) {
            $modifiedColumns[':p' . $index++]  = '`usuario_username`';
        }
        if ($this->isColumnModified(UsuarioPeer::USUARIO_PASSWORD)) {
            $modifiedColumns[':p' . $index++]  = '`usuario_password`';
        }

        $sql = sprintf(
            'INSERT INTO `usuario` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idusuario`':
                        $stmt->bindValue($identifier, $this->idusuario, PDO::PARAM_INT);
                        break;
                    case '`idrol`':
                        $stmt->bindValue($identifier, $this->idrol, PDO::PARAM_INT);
                        break;
                    case '`usuario_nombre`':
                        $stmt->bindValue($identifier, $this->usuario_nombre, PDO::PARAM_STR);
                        break;
                    case '`usuario_estatus`':
                        $stmt->bindValue($identifier, (int) $this->usuario_estatus, PDO::PARAM_INT);
                        break;
                    case '`usuario_username`':
                        $stmt->bindValue($identifier, $this->usuario_username, PDO::PARAM_STR);
                        break;
                    case '`usuario_password`':
                        $stmt->bindValue($identifier, $this->usuario_password, PDO::PARAM_STR);
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
        $this->setIdusuario($pk);

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

            if ($this->aRol !== null) {
                if (!$this->aRol->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRol->getValidationFailures());
                }
            }


            if (($retval = UsuarioPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collDevolucionsRelatedByIdauditor !== null) {
                    foreach ($this->collDevolucionsRelatedByIdauditor as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collDevolucionsRelatedByIdusuario !== null) {
                    foreach ($this->collDevolucionsRelatedByIdusuario as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collInventariomessRelatedByIdauditor !== null) {
                    foreach ($this->collInventariomessRelatedByIdauditor as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collInventariomessRelatedByIdusuario !== null) {
                    foreach ($this->collInventariomessRelatedByIdusuario as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collInventariomesdetallenotas !== null) {
                    foreach ($this->collInventariomesdetallenotas as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collNotacreditosRelatedByIdauditor !== null) {
                    foreach ($this->collNotacreditosRelatedByIdauditor as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collNotacreditosRelatedByIdusuario !== null) {
                    foreach ($this->collNotacreditosRelatedByIdusuario as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collRequisicionsRelatedByIdauditor !== null) {
                    foreach ($this->collRequisicionsRelatedByIdauditor as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collRequisicionsRelatedByIdusuario !== null) {
                    foreach ($this->collRequisicionsRelatedByIdusuario as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collUsuarioempresas !== null) {
                    foreach ($this->collUsuarioempresas as $referrerFK) {
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
        $pos = UsuarioPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdusuario();
                break;
            case 1:
                return $this->getIdrol();
                break;
            case 2:
                return $this->getUsuarioNombre();
                break;
            case 3:
                return $this->getUsuarioEstatus();
                break;
            case 4:
                return $this->getUsuarioUsername();
                break;
            case 5:
                return $this->getUsuarioPassword();
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
        if (isset($alreadyDumpedObjects['Usuario'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Usuario'][$this->getPrimaryKey()] = true;
        $keys = UsuarioPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdusuario(),
            $keys[1] => $this->getIdrol(),
            $keys[2] => $this->getUsuarioNombre(),
            $keys[3] => $this->getUsuarioEstatus(),
            $keys[4] => $this->getUsuarioUsername(),
            $keys[5] => $this->getUsuarioPassword(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aRol) {
                $result['Rol'] = $this->aRol->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collDevolucionsRelatedByIdauditor) {
                $result['DevolucionsRelatedByIdauditor'] = $this->collDevolucionsRelatedByIdauditor->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collDevolucionsRelatedByIdusuario) {
                $result['DevolucionsRelatedByIdusuario'] = $this->collDevolucionsRelatedByIdusuario->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collInventariomessRelatedByIdauditor) {
                $result['InventariomessRelatedByIdauditor'] = $this->collInventariomessRelatedByIdauditor->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collInventariomessRelatedByIdusuario) {
                $result['InventariomessRelatedByIdusuario'] = $this->collInventariomessRelatedByIdusuario->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collInventariomesdetallenotas) {
                $result['Inventariomesdetallenotas'] = $this->collInventariomesdetallenotas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collNotacreditosRelatedByIdauditor) {
                $result['NotacreditosRelatedByIdauditor'] = $this->collNotacreditosRelatedByIdauditor->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collNotacreditosRelatedByIdusuario) {
                $result['NotacreditosRelatedByIdusuario'] = $this->collNotacreditosRelatedByIdusuario->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collRequisicionsRelatedByIdauditor) {
                $result['RequisicionsRelatedByIdauditor'] = $this->collRequisicionsRelatedByIdauditor->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collRequisicionsRelatedByIdusuario) {
                $result['RequisicionsRelatedByIdusuario'] = $this->collRequisicionsRelatedByIdusuario->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collUsuarioempresas) {
                $result['Usuarioempresas'] = $this->collUsuarioempresas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = UsuarioPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdusuario($value);
                break;
            case 1:
                $this->setIdrol($value);
                break;
            case 2:
                $this->setUsuarioNombre($value);
                break;
            case 3:
                $this->setUsuarioEstatus($value);
                break;
            case 4:
                $this->setUsuarioUsername($value);
                break;
            case 5:
                $this->setUsuarioPassword($value);
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
        $keys = UsuarioPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdusuario($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdrol($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setUsuarioNombre($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setUsuarioEstatus($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setUsuarioUsername($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setUsuarioPassword($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(UsuarioPeer::DATABASE_NAME);

        if ($this->isColumnModified(UsuarioPeer::IDUSUARIO)) $criteria->add(UsuarioPeer::IDUSUARIO, $this->idusuario);
        if ($this->isColumnModified(UsuarioPeer::IDROL)) $criteria->add(UsuarioPeer::IDROL, $this->idrol);
        if ($this->isColumnModified(UsuarioPeer::USUARIO_NOMBRE)) $criteria->add(UsuarioPeer::USUARIO_NOMBRE, $this->usuario_nombre);
        if ($this->isColumnModified(UsuarioPeer::USUARIO_ESTATUS)) $criteria->add(UsuarioPeer::USUARIO_ESTATUS, $this->usuario_estatus);
        if ($this->isColumnModified(UsuarioPeer::USUARIO_USERNAME)) $criteria->add(UsuarioPeer::USUARIO_USERNAME, $this->usuario_username);
        if ($this->isColumnModified(UsuarioPeer::USUARIO_PASSWORD)) $criteria->add(UsuarioPeer::USUARIO_PASSWORD, $this->usuario_password);

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
        $criteria = new Criteria(UsuarioPeer::DATABASE_NAME);
        $criteria->add(UsuarioPeer::IDUSUARIO, $this->idusuario);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdusuario();
    }

    /**
     * Generic method to set the primary key (idusuario column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdusuario($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdusuario();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Usuario (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdrol($this->getIdrol());
        $copyObj->setUsuarioNombre($this->getUsuarioNombre());
        $copyObj->setUsuarioEstatus($this->getUsuarioEstatus());
        $copyObj->setUsuarioUsername($this->getUsuarioUsername());
        $copyObj->setUsuarioPassword($this->getUsuarioPassword());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getDevolucionsRelatedByIdauditor() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addDevolucionRelatedByIdauditor($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getDevolucionsRelatedByIdusuario() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addDevolucionRelatedByIdusuario($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getInventariomessRelatedByIdauditor() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInventariomesRelatedByIdauditor($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getInventariomessRelatedByIdusuario() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInventariomesRelatedByIdusuario($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getInventariomesdetallenotas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInventariomesdetallenota($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getNotacreditosRelatedByIdauditor() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addNotacreditoRelatedByIdauditor($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getNotacreditosRelatedByIdusuario() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addNotacreditoRelatedByIdusuario($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getRequisicionsRelatedByIdauditor() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addRequisicionRelatedByIdauditor($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getRequisicionsRelatedByIdusuario() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addRequisicionRelatedByIdusuario($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getUsuarioempresas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addUsuarioempresa($relObj->copy($deepCopy));
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
            $copyObj->setIdusuario(NULL); // this is a auto-increment column, so set to default value
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
     * @return Usuario Clone of current object.
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
     * @return UsuarioPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new UsuarioPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Rol object.
     *
     * @param                  Rol $v
     * @return Usuario The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRol(Rol $v = null)
    {
        if ($v === null) {
            $this->setIdrol(NULL);
        } else {
            $this->setIdrol($v->getIdrol());
        }

        $this->aRol = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Rol object, it will not be re-added.
        if ($v !== null) {
            $v->addUsuario($this);
        }


        return $this;
    }


    /**
     * Get the associated Rol object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Rol The associated Rol object.
     * @throws PropelException
     */
    public function getRol(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRol === null && ($this->idrol !== null) && $doQuery) {
            $this->aRol = RolQuery::create()->findPk($this->idrol, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRol->addUsuarios($this);
             */
        }

        return $this->aRol;
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
        if ('DevolucionRelatedByIdauditor' == $relationName) {
            $this->initDevolucionsRelatedByIdauditor();
        }
        if ('DevolucionRelatedByIdusuario' == $relationName) {
            $this->initDevolucionsRelatedByIdusuario();
        }
        if ('InventariomesRelatedByIdauditor' == $relationName) {
            $this->initInventariomessRelatedByIdauditor();
        }
        if ('InventariomesRelatedByIdusuario' == $relationName) {
            $this->initInventariomessRelatedByIdusuario();
        }
        if ('Inventariomesdetallenota' == $relationName) {
            $this->initInventariomesdetallenotas();
        }
        if ('NotacreditoRelatedByIdauditor' == $relationName) {
            $this->initNotacreditosRelatedByIdauditor();
        }
        if ('NotacreditoRelatedByIdusuario' == $relationName) {
            $this->initNotacreditosRelatedByIdusuario();
        }
        if ('RequisicionRelatedByIdauditor' == $relationName) {
            $this->initRequisicionsRelatedByIdauditor();
        }
        if ('RequisicionRelatedByIdusuario' == $relationName) {
            $this->initRequisicionsRelatedByIdusuario();
        }
        if ('Usuarioempresa' == $relationName) {
            $this->initUsuarioempresas();
        }
        if ('Usuariosucursal' == $relationName) {
            $this->initUsuariosucursals();
        }
    }

    /**
     * Clears out the collDevolucionsRelatedByIdauditor collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Usuario The current object (for fluent API support)
     * @see        addDevolucionsRelatedByIdauditor()
     */
    public function clearDevolucionsRelatedByIdauditor()
    {
        $this->collDevolucionsRelatedByIdauditor = null; // important to set this to null since that means it is uninitialized
        $this->collDevolucionsRelatedByIdauditorPartial = null;

        return $this;
    }

    /**
     * reset is the collDevolucionsRelatedByIdauditor collection loaded partially
     *
     * @return void
     */
    public function resetPartialDevolucionsRelatedByIdauditor($v = true)
    {
        $this->collDevolucionsRelatedByIdauditorPartial = $v;
    }

    /**
     * Initializes the collDevolucionsRelatedByIdauditor collection.
     *
     * By default this just sets the collDevolucionsRelatedByIdauditor collection to an empty array (like clearcollDevolucionsRelatedByIdauditor());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initDevolucionsRelatedByIdauditor($overrideExisting = true)
    {
        if (null !== $this->collDevolucionsRelatedByIdauditor && !$overrideExisting) {
            return;
        }
        $this->collDevolucionsRelatedByIdauditor = new PropelObjectCollection();
        $this->collDevolucionsRelatedByIdauditor->setModel('Devolucion');
    }

    /**
     * Gets an array of Devolucion objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Usuario is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Devolucion[] List of Devolucion objects
     * @throws PropelException
     */
    public function getDevolucionsRelatedByIdauditor($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collDevolucionsRelatedByIdauditorPartial && !$this->isNew();
        if (null === $this->collDevolucionsRelatedByIdauditor || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collDevolucionsRelatedByIdauditor) {
                // return empty collection
                $this->initDevolucionsRelatedByIdauditor();
            } else {
                $collDevolucionsRelatedByIdauditor = DevolucionQuery::create(null, $criteria)
                    ->filterByUsuarioRelatedByIdauditor($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collDevolucionsRelatedByIdauditorPartial && count($collDevolucionsRelatedByIdauditor)) {
                      $this->initDevolucionsRelatedByIdauditor(false);

                      foreach ($collDevolucionsRelatedByIdauditor as $obj) {
                        if (false == $this->collDevolucionsRelatedByIdauditor->contains($obj)) {
                          $this->collDevolucionsRelatedByIdauditor->append($obj);
                        }
                      }

                      $this->collDevolucionsRelatedByIdauditorPartial = true;
                    }

                    $collDevolucionsRelatedByIdauditor->getInternalIterator()->rewind();

                    return $collDevolucionsRelatedByIdauditor;
                }

                if ($partial && $this->collDevolucionsRelatedByIdauditor) {
                    foreach ($this->collDevolucionsRelatedByIdauditor as $obj) {
                        if ($obj->isNew()) {
                            $collDevolucionsRelatedByIdauditor[] = $obj;
                        }
                    }
                }

                $this->collDevolucionsRelatedByIdauditor = $collDevolucionsRelatedByIdauditor;
                $this->collDevolucionsRelatedByIdauditorPartial = false;
            }
        }

        return $this->collDevolucionsRelatedByIdauditor;
    }

    /**
     * Sets a collection of DevolucionRelatedByIdauditor objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $devolucionsRelatedByIdauditor A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Usuario The current object (for fluent API support)
     */
    public function setDevolucionsRelatedByIdauditor(PropelCollection $devolucionsRelatedByIdauditor, PropelPDO $con = null)
    {
        $devolucionsRelatedByIdauditorToDelete = $this->getDevolucionsRelatedByIdauditor(new Criteria(), $con)->diff($devolucionsRelatedByIdauditor);


        $this->devolucionsRelatedByIdauditorScheduledForDeletion = $devolucionsRelatedByIdauditorToDelete;

        foreach ($devolucionsRelatedByIdauditorToDelete as $devolucionRelatedByIdauditorRemoved) {
            $devolucionRelatedByIdauditorRemoved->setUsuarioRelatedByIdauditor(null);
        }

        $this->collDevolucionsRelatedByIdauditor = null;
        foreach ($devolucionsRelatedByIdauditor as $devolucionRelatedByIdauditor) {
            $this->addDevolucionRelatedByIdauditor($devolucionRelatedByIdauditor);
        }

        $this->collDevolucionsRelatedByIdauditor = $devolucionsRelatedByIdauditor;
        $this->collDevolucionsRelatedByIdauditorPartial = false;

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
    public function countDevolucionsRelatedByIdauditor(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collDevolucionsRelatedByIdauditorPartial && !$this->isNew();
        if (null === $this->collDevolucionsRelatedByIdauditor || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collDevolucionsRelatedByIdauditor) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getDevolucionsRelatedByIdauditor());
            }
            $query = DevolucionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUsuarioRelatedByIdauditor($this)
                ->count($con);
        }

        return count($this->collDevolucionsRelatedByIdauditor);
    }

    /**
     * Method called to associate a Devolucion object to this object
     * through the Devolucion foreign key attribute.
     *
     * @param    Devolucion $l Devolucion
     * @return Usuario The current object (for fluent API support)
     */
    public function addDevolucionRelatedByIdauditor(Devolucion $l)
    {
        if ($this->collDevolucionsRelatedByIdauditor === null) {
            $this->initDevolucionsRelatedByIdauditor();
            $this->collDevolucionsRelatedByIdauditorPartial = true;
        }

        if (!in_array($l, $this->collDevolucionsRelatedByIdauditor->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddDevolucionRelatedByIdauditor($l);

            if ($this->devolucionsRelatedByIdauditorScheduledForDeletion and $this->devolucionsRelatedByIdauditorScheduledForDeletion->contains($l)) {
                $this->devolucionsRelatedByIdauditorScheduledForDeletion->remove($this->devolucionsRelatedByIdauditorScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	DevolucionRelatedByIdauditor $devolucionRelatedByIdauditor The devolucionRelatedByIdauditor object to add.
     */
    protected function doAddDevolucionRelatedByIdauditor($devolucionRelatedByIdauditor)
    {
        $this->collDevolucionsRelatedByIdauditor[]= $devolucionRelatedByIdauditor;
        $devolucionRelatedByIdauditor->setUsuarioRelatedByIdauditor($this);
    }

    /**
     * @param	DevolucionRelatedByIdauditor $devolucionRelatedByIdauditor The devolucionRelatedByIdauditor object to remove.
     * @return Usuario The current object (for fluent API support)
     */
    public function removeDevolucionRelatedByIdauditor($devolucionRelatedByIdauditor)
    {
        if ($this->getDevolucionsRelatedByIdauditor()->contains($devolucionRelatedByIdauditor)) {
            $this->collDevolucionsRelatedByIdauditor->remove($this->collDevolucionsRelatedByIdauditor->search($devolucionRelatedByIdauditor));
            if (null === $this->devolucionsRelatedByIdauditorScheduledForDeletion) {
                $this->devolucionsRelatedByIdauditorScheduledForDeletion = clone $this->collDevolucionsRelatedByIdauditor;
                $this->devolucionsRelatedByIdauditorScheduledForDeletion->clear();
            }
            $this->devolucionsRelatedByIdauditorScheduledForDeletion[]= clone $devolucionRelatedByIdauditor;
            $devolucionRelatedByIdauditor->setUsuarioRelatedByIdauditor(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Usuario is new, it will return
     * an empty collection; or if this Usuario has previously
     * been saved, it will retrieve related DevolucionsRelatedByIdauditor from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Usuario.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Devolucion[] List of Devolucion objects
     */
    public function getDevolucionsRelatedByIdauditorJoinAlmacen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = DevolucionQuery::create(null, $criteria);
        $query->joinWith('Almacen', $join_behavior);

        return $this->getDevolucionsRelatedByIdauditor($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Usuario is new, it will return
     * an empty collection; or if this Usuario has previously
     * been saved, it will retrieve related DevolucionsRelatedByIdauditor from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Usuario.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Devolucion[] List of Devolucion objects
     */
    public function getDevolucionsRelatedByIdauditorJoinSucursal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = DevolucionQuery::create(null, $criteria);
        $query->joinWith('Sucursal', $join_behavior);

        return $this->getDevolucionsRelatedByIdauditor($query, $con);
    }

    /**
     * Clears out the collDevolucionsRelatedByIdusuario collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Usuario The current object (for fluent API support)
     * @see        addDevolucionsRelatedByIdusuario()
     */
    public function clearDevolucionsRelatedByIdusuario()
    {
        $this->collDevolucionsRelatedByIdusuario = null; // important to set this to null since that means it is uninitialized
        $this->collDevolucionsRelatedByIdusuarioPartial = null;

        return $this;
    }

    /**
     * reset is the collDevolucionsRelatedByIdusuario collection loaded partially
     *
     * @return void
     */
    public function resetPartialDevolucionsRelatedByIdusuario($v = true)
    {
        $this->collDevolucionsRelatedByIdusuarioPartial = $v;
    }

    /**
     * Initializes the collDevolucionsRelatedByIdusuario collection.
     *
     * By default this just sets the collDevolucionsRelatedByIdusuario collection to an empty array (like clearcollDevolucionsRelatedByIdusuario());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initDevolucionsRelatedByIdusuario($overrideExisting = true)
    {
        if (null !== $this->collDevolucionsRelatedByIdusuario && !$overrideExisting) {
            return;
        }
        $this->collDevolucionsRelatedByIdusuario = new PropelObjectCollection();
        $this->collDevolucionsRelatedByIdusuario->setModel('Devolucion');
    }

    /**
     * Gets an array of Devolucion objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Usuario is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Devolucion[] List of Devolucion objects
     * @throws PropelException
     */
    public function getDevolucionsRelatedByIdusuario($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collDevolucionsRelatedByIdusuarioPartial && !$this->isNew();
        if (null === $this->collDevolucionsRelatedByIdusuario || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collDevolucionsRelatedByIdusuario) {
                // return empty collection
                $this->initDevolucionsRelatedByIdusuario();
            } else {
                $collDevolucionsRelatedByIdusuario = DevolucionQuery::create(null, $criteria)
                    ->filterByUsuarioRelatedByIdusuario($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collDevolucionsRelatedByIdusuarioPartial && count($collDevolucionsRelatedByIdusuario)) {
                      $this->initDevolucionsRelatedByIdusuario(false);

                      foreach ($collDevolucionsRelatedByIdusuario as $obj) {
                        if (false == $this->collDevolucionsRelatedByIdusuario->contains($obj)) {
                          $this->collDevolucionsRelatedByIdusuario->append($obj);
                        }
                      }

                      $this->collDevolucionsRelatedByIdusuarioPartial = true;
                    }

                    $collDevolucionsRelatedByIdusuario->getInternalIterator()->rewind();

                    return $collDevolucionsRelatedByIdusuario;
                }

                if ($partial && $this->collDevolucionsRelatedByIdusuario) {
                    foreach ($this->collDevolucionsRelatedByIdusuario as $obj) {
                        if ($obj->isNew()) {
                            $collDevolucionsRelatedByIdusuario[] = $obj;
                        }
                    }
                }

                $this->collDevolucionsRelatedByIdusuario = $collDevolucionsRelatedByIdusuario;
                $this->collDevolucionsRelatedByIdusuarioPartial = false;
            }
        }

        return $this->collDevolucionsRelatedByIdusuario;
    }

    /**
     * Sets a collection of DevolucionRelatedByIdusuario objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $devolucionsRelatedByIdusuario A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Usuario The current object (for fluent API support)
     */
    public function setDevolucionsRelatedByIdusuario(PropelCollection $devolucionsRelatedByIdusuario, PropelPDO $con = null)
    {
        $devolucionsRelatedByIdusuarioToDelete = $this->getDevolucionsRelatedByIdusuario(new Criteria(), $con)->diff($devolucionsRelatedByIdusuario);


        $this->devolucionsRelatedByIdusuarioScheduledForDeletion = $devolucionsRelatedByIdusuarioToDelete;

        foreach ($devolucionsRelatedByIdusuarioToDelete as $devolucionRelatedByIdusuarioRemoved) {
            $devolucionRelatedByIdusuarioRemoved->setUsuarioRelatedByIdusuario(null);
        }

        $this->collDevolucionsRelatedByIdusuario = null;
        foreach ($devolucionsRelatedByIdusuario as $devolucionRelatedByIdusuario) {
            $this->addDevolucionRelatedByIdusuario($devolucionRelatedByIdusuario);
        }

        $this->collDevolucionsRelatedByIdusuario = $devolucionsRelatedByIdusuario;
        $this->collDevolucionsRelatedByIdusuarioPartial = false;

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
    public function countDevolucionsRelatedByIdusuario(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collDevolucionsRelatedByIdusuarioPartial && !$this->isNew();
        if (null === $this->collDevolucionsRelatedByIdusuario || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collDevolucionsRelatedByIdusuario) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getDevolucionsRelatedByIdusuario());
            }
            $query = DevolucionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUsuarioRelatedByIdusuario($this)
                ->count($con);
        }

        return count($this->collDevolucionsRelatedByIdusuario);
    }

    /**
     * Method called to associate a Devolucion object to this object
     * through the Devolucion foreign key attribute.
     *
     * @param    Devolucion $l Devolucion
     * @return Usuario The current object (for fluent API support)
     */
    public function addDevolucionRelatedByIdusuario(Devolucion $l)
    {
        if ($this->collDevolucionsRelatedByIdusuario === null) {
            $this->initDevolucionsRelatedByIdusuario();
            $this->collDevolucionsRelatedByIdusuarioPartial = true;
        }

        if (!in_array($l, $this->collDevolucionsRelatedByIdusuario->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddDevolucionRelatedByIdusuario($l);

            if ($this->devolucionsRelatedByIdusuarioScheduledForDeletion and $this->devolucionsRelatedByIdusuarioScheduledForDeletion->contains($l)) {
                $this->devolucionsRelatedByIdusuarioScheduledForDeletion->remove($this->devolucionsRelatedByIdusuarioScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	DevolucionRelatedByIdusuario $devolucionRelatedByIdusuario The devolucionRelatedByIdusuario object to add.
     */
    protected function doAddDevolucionRelatedByIdusuario($devolucionRelatedByIdusuario)
    {
        $this->collDevolucionsRelatedByIdusuario[]= $devolucionRelatedByIdusuario;
        $devolucionRelatedByIdusuario->setUsuarioRelatedByIdusuario($this);
    }

    /**
     * @param	DevolucionRelatedByIdusuario $devolucionRelatedByIdusuario The devolucionRelatedByIdusuario object to remove.
     * @return Usuario The current object (for fluent API support)
     */
    public function removeDevolucionRelatedByIdusuario($devolucionRelatedByIdusuario)
    {
        if ($this->getDevolucionsRelatedByIdusuario()->contains($devolucionRelatedByIdusuario)) {
            $this->collDevolucionsRelatedByIdusuario->remove($this->collDevolucionsRelatedByIdusuario->search($devolucionRelatedByIdusuario));
            if (null === $this->devolucionsRelatedByIdusuarioScheduledForDeletion) {
                $this->devolucionsRelatedByIdusuarioScheduledForDeletion = clone $this->collDevolucionsRelatedByIdusuario;
                $this->devolucionsRelatedByIdusuarioScheduledForDeletion->clear();
            }
            $this->devolucionsRelatedByIdusuarioScheduledForDeletion[]= clone $devolucionRelatedByIdusuario;
            $devolucionRelatedByIdusuario->setUsuarioRelatedByIdusuario(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Usuario is new, it will return
     * an empty collection; or if this Usuario has previously
     * been saved, it will retrieve related DevolucionsRelatedByIdusuario from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Usuario.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Devolucion[] List of Devolucion objects
     */
    public function getDevolucionsRelatedByIdusuarioJoinAlmacen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = DevolucionQuery::create(null, $criteria);
        $query->joinWith('Almacen', $join_behavior);

        return $this->getDevolucionsRelatedByIdusuario($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Usuario is new, it will return
     * an empty collection; or if this Usuario has previously
     * been saved, it will retrieve related DevolucionsRelatedByIdusuario from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Usuario.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Devolucion[] List of Devolucion objects
     */
    public function getDevolucionsRelatedByIdusuarioJoinSucursal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = DevolucionQuery::create(null, $criteria);
        $query->joinWith('Sucursal', $join_behavior);

        return $this->getDevolucionsRelatedByIdusuario($query, $con);
    }

    /**
     * Clears out the collInventariomessRelatedByIdauditor collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Usuario The current object (for fluent API support)
     * @see        addInventariomessRelatedByIdauditor()
     */
    public function clearInventariomessRelatedByIdauditor()
    {
        $this->collInventariomessRelatedByIdauditor = null; // important to set this to null since that means it is uninitialized
        $this->collInventariomessRelatedByIdauditorPartial = null;

        return $this;
    }

    /**
     * reset is the collInventariomessRelatedByIdauditor collection loaded partially
     *
     * @return void
     */
    public function resetPartialInventariomessRelatedByIdauditor($v = true)
    {
        $this->collInventariomessRelatedByIdauditorPartial = $v;
    }

    /**
     * Initializes the collInventariomessRelatedByIdauditor collection.
     *
     * By default this just sets the collInventariomessRelatedByIdauditor collection to an empty array (like clearcollInventariomessRelatedByIdauditor());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInventariomessRelatedByIdauditor($overrideExisting = true)
    {
        if (null !== $this->collInventariomessRelatedByIdauditor && !$overrideExisting) {
            return;
        }
        $this->collInventariomessRelatedByIdauditor = new PropelObjectCollection();
        $this->collInventariomessRelatedByIdauditor->setModel('Inventariomes');
    }

    /**
     * Gets an array of Inventariomes objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Usuario is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Inventariomes[] List of Inventariomes objects
     * @throws PropelException
     */
    public function getInventariomessRelatedByIdauditor($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collInventariomessRelatedByIdauditorPartial && !$this->isNew();
        if (null === $this->collInventariomessRelatedByIdauditor || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInventariomessRelatedByIdauditor) {
                // return empty collection
                $this->initInventariomessRelatedByIdauditor();
            } else {
                $collInventariomessRelatedByIdauditor = InventariomesQuery::create(null, $criteria)
                    ->filterByUsuarioRelatedByIdauditor($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collInventariomessRelatedByIdauditorPartial && count($collInventariomessRelatedByIdauditor)) {
                      $this->initInventariomessRelatedByIdauditor(false);

                      foreach ($collInventariomessRelatedByIdauditor as $obj) {
                        if (false == $this->collInventariomessRelatedByIdauditor->contains($obj)) {
                          $this->collInventariomessRelatedByIdauditor->append($obj);
                        }
                      }

                      $this->collInventariomessRelatedByIdauditorPartial = true;
                    }

                    $collInventariomessRelatedByIdauditor->getInternalIterator()->rewind();

                    return $collInventariomessRelatedByIdauditor;
                }

                if ($partial && $this->collInventariomessRelatedByIdauditor) {
                    foreach ($this->collInventariomessRelatedByIdauditor as $obj) {
                        if ($obj->isNew()) {
                            $collInventariomessRelatedByIdauditor[] = $obj;
                        }
                    }
                }

                $this->collInventariomessRelatedByIdauditor = $collInventariomessRelatedByIdauditor;
                $this->collInventariomessRelatedByIdauditorPartial = false;
            }
        }

        return $this->collInventariomessRelatedByIdauditor;
    }

    /**
     * Sets a collection of InventariomesRelatedByIdauditor objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $inventariomessRelatedByIdauditor A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Usuario The current object (for fluent API support)
     */
    public function setInventariomessRelatedByIdauditor(PropelCollection $inventariomessRelatedByIdauditor, PropelPDO $con = null)
    {
        $inventariomessRelatedByIdauditorToDelete = $this->getInventariomessRelatedByIdauditor(new Criteria(), $con)->diff($inventariomessRelatedByIdauditor);


        $this->inventariomessRelatedByIdauditorScheduledForDeletion = $inventariomessRelatedByIdauditorToDelete;

        foreach ($inventariomessRelatedByIdauditorToDelete as $inventariomesRelatedByIdauditorRemoved) {
            $inventariomesRelatedByIdauditorRemoved->setUsuarioRelatedByIdauditor(null);
        }

        $this->collInventariomessRelatedByIdauditor = null;
        foreach ($inventariomessRelatedByIdauditor as $inventariomesRelatedByIdauditor) {
            $this->addInventariomesRelatedByIdauditor($inventariomesRelatedByIdauditor);
        }

        $this->collInventariomessRelatedByIdauditor = $inventariomessRelatedByIdauditor;
        $this->collInventariomessRelatedByIdauditorPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Inventariomes objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Inventariomes objects.
     * @throws PropelException
     */
    public function countInventariomessRelatedByIdauditor(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collInventariomessRelatedByIdauditorPartial && !$this->isNew();
        if (null === $this->collInventariomessRelatedByIdauditor || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInventariomessRelatedByIdauditor) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInventariomessRelatedByIdauditor());
            }
            $query = InventariomesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUsuarioRelatedByIdauditor($this)
                ->count($con);
        }

        return count($this->collInventariomessRelatedByIdauditor);
    }

    /**
     * Method called to associate a Inventariomes object to this object
     * through the Inventariomes foreign key attribute.
     *
     * @param    Inventariomes $l Inventariomes
     * @return Usuario The current object (for fluent API support)
     */
    public function addInventariomesRelatedByIdauditor(Inventariomes $l)
    {
        if ($this->collInventariomessRelatedByIdauditor === null) {
            $this->initInventariomessRelatedByIdauditor();
            $this->collInventariomessRelatedByIdauditorPartial = true;
        }

        if (!in_array($l, $this->collInventariomessRelatedByIdauditor->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddInventariomesRelatedByIdauditor($l);

            if ($this->inventariomessRelatedByIdauditorScheduledForDeletion and $this->inventariomessRelatedByIdauditorScheduledForDeletion->contains($l)) {
                $this->inventariomessRelatedByIdauditorScheduledForDeletion->remove($this->inventariomessRelatedByIdauditorScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	InventariomesRelatedByIdauditor $inventariomesRelatedByIdauditor The inventariomesRelatedByIdauditor object to add.
     */
    protected function doAddInventariomesRelatedByIdauditor($inventariomesRelatedByIdauditor)
    {
        $this->collInventariomessRelatedByIdauditor[]= $inventariomesRelatedByIdauditor;
        $inventariomesRelatedByIdauditor->setUsuarioRelatedByIdauditor($this);
    }

    /**
     * @param	InventariomesRelatedByIdauditor $inventariomesRelatedByIdauditor The inventariomesRelatedByIdauditor object to remove.
     * @return Usuario The current object (for fluent API support)
     */
    public function removeInventariomesRelatedByIdauditor($inventariomesRelatedByIdauditor)
    {
        if ($this->getInventariomessRelatedByIdauditor()->contains($inventariomesRelatedByIdauditor)) {
            $this->collInventariomessRelatedByIdauditor->remove($this->collInventariomessRelatedByIdauditor->search($inventariomesRelatedByIdauditor));
            if (null === $this->inventariomessRelatedByIdauditorScheduledForDeletion) {
                $this->inventariomessRelatedByIdauditorScheduledForDeletion = clone $this->collInventariomessRelatedByIdauditor;
                $this->inventariomessRelatedByIdauditorScheduledForDeletion->clear();
            }
            $this->inventariomessRelatedByIdauditorScheduledForDeletion[]= clone $inventariomesRelatedByIdauditor;
            $inventariomesRelatedByIdauditor->setUsuarioRelatedByIdauditor(null);
        }

        return $this;
    }

    /**
     * Clears out the collInventariomessRelatedByIdusuario collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Usuario The current object (for fluent API support)
     * @see        addInventariomessRelatedByIdusuario()
     */
    public function clearInventariomessRelatedByIdusuario()
    {
        $this->collInventariomessRelatedByIdusuario = null; // important to set this to null since that means it is uninitialized
        $this->collInventariomessRelatedByIdusuarioPartial = null;

        return $this;
    }

    /**
     * reset is the collInventariomessRelatedByIdusuario collection loaded partially
     *
     * @return void
     */
    public function resetPartialInventariomessRelatedByIdusuario($v = true)
    {
        $this->collInventariomessRelatedByIdusuarioPartial = $v;
    }

    /**
     * Initializes the collInventariomessRelatedByIdusuario collection.
     *
     * By default this just sets the collInventariomessRelatedByIdusuario collection to an empty array (like clearcollInventariomessRelatedByIdusuario());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInventariomessRelatedByIdusuario($overrideExisting = true)
    {
        if (null !== $this->collInventariomessRelatedByIdusuario && !$overrideExisting) {
            return;
        }
        $this->collInventariomessRelatedByIdusuario = new PropelObjectCollection();
        $this->collInventariomessRelatedByIdusuario->setModel('Inventariomes');
    }

    /**
     * Gets an array of Inventariomes objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Usuario is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Inventariomes[] List of Inventariomes objects
     * @throws PropelException
     */
    public function getInventariomessRelatedByIdusuario($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collInventariomessRelatedByIdusuarioPartial && !$this->isNew();
        if (null === $this->collInventariomessRelatedByIdusuario || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInventariomessRelatedByIdusuario) {
                // return empty collection
                $this->initInventariomessRelatedByIdusuario();
            } else {
                $collInventariomessRelatedByIdusuario = InventariomesQuery::create(null, $criteria)
                    ->filterByUsuarioRelatedByIdusuario($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collInventariomessRelatedByIdusuarioPartial && count($collInventariomessRelatedByIdusuario)) {
                      $this->initInventariomessRelatedByIdusuario(false);

                      foreach ($collInventariomessRelatedByIdusuario as $obj) {
                        if (false == $this->collInventariomessRelatedByIdusuario->contains($obj)) {
                          $this->collInventariomessRelatedByIdusuario->append($obj);
                        }
                      }

                      $this->collInventariomessRelatedByIdusuarioPartial = true;
                    }

                    $collInventariomessRelatedByIdusuario->getInternalIterator()->rewind();

                    return $collInventariomessRelatedByIdusuario;
                }

                if ($partial && $this->collInventariomessRelatedByIdusuario) {
                    foreach ($this->collInventariomessRelatedByIdusuario as $obj) {
                        if ($obj->isNew()) {
                            $collInventariomessRelatedByIdusuario[] = $obj;
                        }
                    }
                }

                $this->collInventariomessRelatedByIdusuario = $collInventariomessRelatedByIdusuario;
                $this->collInventariomessRelatedByIdusuarioPartial = false;
            }
        }

        return $this->collInventariomessRelatedByIdusuario;
    }

    /**
     * Sets a collection of InventariomesRelatedByIdusuario objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $inventariomessRelatedByIdusuario A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Usuario The current object (for fluent API support)
     */
    public function setInventariomessRelatedByIdusuario(PropelCollection $inventariomessRelatedByIdusuario, PropelPDO $con = null)
    {
        $inventariomessRelatedByIdusuarioToDelete = $this->getInventariomessRelatedByIdusuario(new Criteria(), $con)->diff($inventariomessRelatedByIdusuario);


        $this->inventariomessRelatedByIdusuarioScheduledForDeletion = $inventariomessRelatedByIdusuarioToDelete;

        foreach ($inventariomessRelatedByIdusuarioToDelete as $inventariomesRelatedByIdusuarioRemoved) {
            $inventariomesRelatedByIdusuarioRemoved->setUsuarioRelatedByIdusuario(null);
        }

        $this->collInventariomessRelatedByIdusuario = null;
        foreach ($inventariomessRelatedByIdusuario as $inventariomesRelatedByIdusuario) {
            $this->addInventariomesRelatedByIdusuario($inventariomesRelatedByIdusuario);
        }

        $this->collInventariomessRelatedByIdusuario = $inventariomessRelatedByIdusuario;
        $this->collInventariomessRelatedByIdusuarioPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Inventariomes objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Inventariomes objects.
     * @throws PropelException
     */
    public function countInventariomessRelatedByIdusuario(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collInventariomessRelatedByIdusuarioPartial && !$this->isNew();
        if (null === $this->collInventariomessRelatedByIdusuario || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInventariomessRelatedByIdusuario) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInventariomessRelatedByIdusuario());
            }
            $query = InventariomesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUsuarioRelatedByIdusuario($this)
                ->count($con);
        }

        return count($this->collInventariomessRelatedByIdusuario);
    }

    /**
     * Method called to associate a Inventariomes object to this object
     * through the Inventariomes foreign key attribute.
     *
     * @param    Inventariomes $l Inventariomes
     * @return Usuario The current object (for fluent API support)
     */
    public function addInventariomesRelatedByIdusuario(Inventariomes $l)
    {
        if ($this->collInventariomessRelatedByIdusuario === null) {
            $this->initInventariomessRelatedByIdusuario();
            $this->collInventariomessRelatedByIdusuarioPartial = true;
        }

        if (!in_array($l, $this->collInventariomessRelatedByIdusuario->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddInventariomesRelatedByIdusuario($l);

            if ($this->inventariomessRelatedByIdusuarioScheduledForDeletion and $this->inventariomessRelatedByIdusuarioScheduledForDeletion->contains($l)) {
                $this->inventariomessRelatedByIdusuarioScheduledForDeletion->remove($this->inventariomessRelatedByIdusuarioScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	InventariomesRelatedByIdusuario $inventariomesRelatedByIdusuario The inventariomesRelatedByIdusuario object to add.
     */
    protected function doAddInventariomesRelatedByIdusuario($inventariomesRelatedByIdusuario)
    {
        $this->collInventariomessRelatedByIdusuario[]= $inventariomesRelatedByIdusuario;
        $inventariomesRelatedByIdusuario->setUsuarioRelatedByIdusuario($this);
    }

    /**
     * @param	InventariomesRelatedByIdusuario $inventariomesRelatedByIdusuario The inventariomesRelatedByIdusuario object to remove.
     * @return Usuario The current object (for fluent API support)
     */
    public function removeInventariomesRelatedByIdusuario($inventariomesRelatedByIdusuario)
    {
        if ($this->getInventariomessRelatedByIdusuario()->contains($inventariomesRelatedByIdusuario)) {
            $this->collInventariomessRelatedByIdusuario->remove($this->collInventariomessRelatedByIdusuario->search($inventariomesRelatedByIdusuario));
            if (null === $this->inventariomessRelatedByIdusuarioScheduledForDeletion) {
                $this->inventariomessRelatedByIdusuarioScheduledForDeletion = clone $this->collInventariomessRelatedByIdusuario;
                $this->inventariomessRelatedByIdusuarioScheduledForDeletion->clear();
            }
            $this->inventariomessRelatedByIdusuarioScheduledForDeletion[]= $inventariomesRelatedByIdusuario;
            $inventariomesRelatedByIdusuario->setUsuarioRelatedByIdusuario(null);
        }

        return $this;
    }

    /**
     * Clears out the collInventariomesdetallenotas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Usuario The current object (for fluent API support)
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
     * If this Usuario is new, it will return
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
                    ->filterByUsuario($this)
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
     * @return Usuario The current object (for fluent API support)
     */
    public function setInventariomesdetallenotas(PropelCollection $inventariomesdetallenotas, PropelPDO $con = null)
    {
        $inventariomesdetallenotasToDelete = $this->getInventariomesdetallenotas(new Criteria(), $con)->diff($inventariomesdetallenotas);


        $this->inventariomesdetallenotasScheduledForDeletion = $inventariomesdetallenotasToDelete;

        foreach ($inventariomesdetallenotasToDelete as $inventariomesdetallenotaRemoved) {
            $inventariomesdetallenotaRemoved->setUsuario(null);
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
                ->filterByUsuario($this)
                ->count($con);
        }

        return count($this->collInventariomesdetallenotas);
    }

    /**
     * Method called to associate a Inventariomesdetallenota object to this object
     * through the Inventariomesdetallenota foreign key attribute.
     *
     * @param    Inventariomesdetallenota $l Inventariomesdetallenota
     * @return Usuario The current object (for fluent API support)
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
        $inventariomesdetallenota->setUsuario($this);
    }

    /**
     * @param	Inventariomesdetallenota $inventariomesdetallenota The inventariomesdetallenota object to remove.
     * @return Usuario The current object (for fluent API support)
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
            $inventariomesdetallenota->setUsuario(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Usuario is new, it will return
     * an empty collection; or if this Usuario has previously
     * been saved, it will retrieve related Inventariomesdetallenotas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Usuario.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Inventariomesdetallenota[] List of Inventariomesdetallenota objects
     */
    public function getInventariomesdetallenotasJoinInventariomesdetalle($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = InventariomesdetallenotaQuery::create(null, $criteria);
        $query->joinWith('Inventariomesdetalle', $join_behavior);

        return $this->getInventariomesdetallenotas($query, $con);
    }

    /**
     * Clears out the collNotacreditosRelatedByIdauditor collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Usuario The current object (for fluent API support)
     * @see        addNotacreditosRelatedByIdauditor()
     */
    public function clearNotacreditosRelatedByIdauditor()
    {
        $this->collNotacreditosRelatedByIdauditor = null; // important to set this to null since that means it is uninitialized
        $this->collNotacreditosRelatedByIdauditorPartial = null;

        return $this;
    }

    /**
     * reset is the collNotacreditosRelatedByIdauditor collection loaded partially
     *
     * @return void
     */
    public function resetPartialNotacreditosRelatedByIdauditor($v = true)
    {
        $this->collNotacreditosRelatedByIdauditorPartial = $v;
    }

    /**
     * Initializes the collNotacreditosRelatedByIdauditor collection.
     *
     * By default this just sets the collNotacreditosRelatedByIdauditor collection to an empty array (like clearcollNotacreditosRelatedByIdauditor());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initNotacreditosRelatedByIdauditor($overrideExisting = true)
    {
        if (null !== $this->collNotacreditosRelatedByIdauditor && !$overrideExisting) {
            return;
        }
        $this->collNotacreditosRelatedByIdauditor = new PropelObjectCollection();
        $this->collNotacreditosRelatedByIdauditor->setModel('Notacredito');
    }

    /**
     * Gets an array of Notacredito objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Usuario is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Notacredito[] List of Notacredito objects
     * @throws PropelException
     */
    public function getNotacreditosRelatedByIdauditor($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collNotacreditosRelatedByIdauditorPartial && !$this->isNew();
        if (null === $this->collNotacreditosRelatedByIdauditor || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collNotacreditosRelatedByIdauditor) {
                // return empty collection
                $this->initNotacreditosRelatedByIdauditor();
            } else {
                $collNotacreditosRelatedByIdauditor = NotacreditoQuery::create(null, $criteria)
                    ->filterByUsuarioRelatedByIdauditor($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collNotacreditosRelatedByIdauditorPartial && count($collNotacreditosRelatedByIdauditor)) {
                      $this->initNotacreditosRelatedByIdauditor(false);

                      foreach ($collNotacreditosRelatedByIdauditor as $obj) {
                        if (false == $this->collNotacreditosRelatedByIdauditor->contains($obj)) {
                          $this->collNotacreditosRelatedByIdauditor->append($obj);
                        }
                      }

                      $this->collNotacreditosRelatedByIdauditorPartial = true;
                    }

                    $collNotacreditosRelatedByIdauditor->getInternalIterator()->rewind();

                    return $collNotacreditosRelatedByIdauditor;
                }

                if ($partial && $this->collNotacreditosRelatedByIdauditor) {
                    foreach ($this->collNotacreditosRelatedByIdauditor as $obj) {
                        if ($obj->isNew()) {
                            $collNotacreditosRelatedByIdauditor[] = $obj;
                        }
                    }
                }

                $this->collNotacreditosRelatedByIdauditor = $collNotacreditosRelatedByIdauditor;
                $this->collNotacreditosRelatedByIdauditorPartial = false;
            }
        }

        return $this->collNotacreditosRelatedByIdauditor;
    }

    /**
     * Sets a collection of NotacreditoRelatedByIdauditor objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $notacreditosRelatedByIdauditor A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Usuario The current object (for fluent API support)
     */
    public function setNotacreditosRelatedByIdauditor(PropelCollection $notacreditosRelatedByIdauditor, PropelPDO $con = null)
    {
        $notacreditosRelatedByIdauditorToDelete = $this->getNotacreditosRelatedByIdauditor(new Criteria(), $con)->diff($notacreditosRelatedByIdauditor);


        $this->notacreditosRelatedByIdauditorScheduledForDeletion = $notacreditosRelatedByIdauditorToDelete;

        foreach ($notacreditosRelatedByIdauditorToDelete as $notacreditoRelatedByIdauditorRemoved) {
            $notacreditoRelatedByIdauditorRemoved->setUsuarioRelatedByIdauditor(null);
        }

        $this->collNotacreditosRelatedByIdauditor = null;
        foreach ($notacreditosRelatedByIdauditor as $notacreditoRelatedByIdauditor) {
            $this->addNotacreditoRelatedByIdauditor($notacreditoRelatedByIdauditor);
        }

        $this->collNotacreditosRelatedByIdauditor = $notacreditosRelatedByIdauditor;
        $this->collNotacreditosRelatedByIdauditorPartial = false;

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
    public function countNotacreditosRelatedByIdauditor(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collNotacreditosRelatedByIdauditorPartial && !$this->isNew();
        if (null === $this->collNotacreditosRelatedByIdauditor || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collNotacreditosRelatedByIdauditor) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getNotacreditosRelatedByIdauditor());
            }
            $query = NotacreditoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUsuarioRelatedByIdauditor($this)
                ->count($con);
        }

        return count($this->collNotacreditosRelatedByIdauditor);
    }

    /**
     * Method called to associate a Notacredito object to this object
     * through the Notacredito foreign key attribute.
     *
     * @param    Notacredito $l Notacredito
     * @return Usuario The current object (for fluent API support)
     */
    public function addNotacreditoRelatedByIdauditor(Notacredito $l)
    {
        if ($this->collNotacreditosRelatedByIdauditor === null) {
            $this->initNotacreditosRelatedByIdauditor();
            $this->collNotacreditosRelatedByIdauditorPartial = true;
        }

        if (!in_array($l, $this->collNotacreditosRelatedByIdauditor->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddNotacreditoRelatedByIdauditor($l);

            if ($this->notacreditosRelatedByIdauditorScheduledForDeletion and $this->notacreditosRelatedByIdauditorScheduledForDeletion->contains($l)) {
                $this->notacreditosRelatedByIdauditorScheduledForDeletion->remove($this->notacreditosRelatedByIdauditorScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	NotacreditoRelatedByIdauditor $notacreditoRelatedByIdauditor The notacreditoRelatedByIdauditor object to add.
     */
    protected function doAddNotacreditoRelatedByIdauditor($notacreditoRelatedByIdauditor)
    {
        $this->collNotacreditosRelatedByIdauditor[]= $notacreditoRelatedByIdauditor;
        $notacreditoRelatedByIdauditor->setUsuarioRelatedByIdauditor($this);
    }

    /**
     * @param	NotacreditoRelatedByIdauditor $notacreditoRelatedByIdauditor The notacreditoRelatedByIdauditor object to remove.
     * @return Usuario The current object (for fluent API support)
     */
    public function removeNotacreditoRelatedByIdauditor($notacreditoRelatedByIdauditor)
    {
        if ($this->getNotacreditosRelatedByIdauditor()->contains($notacreditoRelatedByIdauditor)) {
            $this->collNotacreditosRelatedByIdauditor->remove($this->collNotacreditosRelatedByIdauditor->search($notacreditoRelatedByIdauditor));
            if (null === $this->notacreditosRelatedByIdauditorScheduledForDeletion) {
                $this->notacreditosRelatedByIdauditorScheduledForDeletion = clone $this->collNotacreditosRelatedByIdauditor;
                $this->notacreditosRelatedByIdauditorScheduledForDeletion->clear();
            }
            $this->notacreditosRelatedByIdauditorScheduledForDeletion[]= clone $notacreditoRelatedByIdauditor;
            $notacreditoRelatedByIdauditor->setUsuarioRelatedByIdauditor(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Usuario is new, it will return
     * an empty collection; or if this Usuario has previously
     * been saved, it will retrieve related NotacreditosRelatedByIdauditor from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Usuario.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Notacredito[] List of Notacredito objects
     */
    public function getNotacreditosRelatedByIdauditorJoinAlmacen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = NotacreditoQuery::create(null, $criteria);
        $query->joinWith('Almacen', $join_behavior);

        return $this->getNotacreditosRelatedByIdauditor($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Usuario is new, it will return
     * an empty collection; or if this Usuario has previously
     * been saved, it will retrieve related NotacreditosRelatedByIdauditor from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Usuario.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Notacredito[] List of Notacredito objects
     */
    public function getNotacreditosRelatedByIdauditorJoinSucursal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = NotacreditoQuery::create(null, $criteria);
        $query->joinWith('Sucursal', $join_behavior);

        return $this->getNotacreditosRelatedByIdauditor($query, $con);
    }

    /**
     * Clears out the collNotacreditosRelatedByIdusuario collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Usuario The current object (for fluent API support)
     * @see        addNotacreditosRelatedByIdusuario()
     */
    public function clearNotacreditosRelatedByIdusuario()
    {
        $this->collNotacreditosRelatedByIdusuario = null; // important to set this to null since that means it is uninitialized
        $this->collNotacreditosRelatedByIdusuarioPartial = null;

        return $this;
    }

    /**
     * reset is the collNotacreditosRelatedByIdusuario collection loaded partially
     *
     * @return void
     */
    public function resetPartialNotacreditosRelatedByIdusuario($v = true)
    {
        $this->collNotacreditosRelatedByIdusuarioPartial = $v;
    }

    /**
     * Initializes the collNotacreditosRelatedByIdusuario collection.
     *
     * By default this just sets the collNotacreditosRelatedByIdusuario collection to an empty array (like clearcollNotacreditosRelatedByIdusuario());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initNotacreditosRelatedByIdusuario($overrideExisting = true)
    {
        if (null !== $this->collNotacreditosRelatedByIdusuario && !$overrideExisting) {
            return;
        }
        $this->collNotacreditosRelatedByIdusuario = new PropelObjectCollection();
        $this->collNotacreditosRelatedByIdusuario->setModel('Notacredito');
    }

    /**
     * Gets an array of Notacredito objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Usuario is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Notacredito[] List of Notacredito objects
     * @throws PropelException
     */
    public function getNotacreditosRelatedByIdusuario($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collNotacreditosRelatedByIdusuarioPartial && !$this->isNew();
        if (null === $this->collNotacreditosRelatedByIdusuario || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collNotacreditosRelatedByIdusuario) {
                // return empty collection
                $this->initNotacreditosRelatedByIdusuario();
            } else {
                $collNotacreditosRelatedByIdusuario = NotacreditoQuery::create(null, $criteria)
                    ->filterByUsuarioRelatedByIdusuario($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collNotacreditosRelatedByIdusuarioPartial && count($collNotacreditosRelatedByIdusuario)) {
                      $this->initNotacreditosRelatedByIdusuario(false);

                      foreach ($collNotacreditosRelatedByIdusuario as $obj) {
                        if (false == $this->collNotacreditosRelatedByIdusuario->contains($obj)) {
                          $this->collNotacreditosRelatedByIdusuario->append($obj);
                        }
                      }

                      $this->collNotacreditosRelatedByIdusuarioPartial = true;
                    }

                    $collNotacreditosRelatedByIdusuario->getInternalIterator()->rewind();

                    return $collNotacreditosRelatedByIdusuario;
                }

                if ($partial && $this->collNotacreditosRelatedByIdusuario) {
                    foreach ($this->collNotacreditosRelatedByIdusuario as $obj) {
                        if ($obj->isNew()) {
                            $collNotacreditosRelatedByIdusuario[] = $obj;
                        }
                    }
                }

                $this->collNotacreditosRelatedByIdusuario = $collNotacreditosRelatedByIdusuario;
                $this->collNotacreditosRelatedByIdusuarioPartial = false;
            }
        }

        return $this->collNotacreditosRelatedByIdusuario;
    }

    /**
     * Sets a collection of NotacreditoRelatedByIdusuario objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $notacreditosRelatedByIdusuario A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Usuario The current object (for fluent API support)
     */
    public function setNotacreditosRelatedByIdusuario(PropelCollection $notacreditosRelatedByIdusuario, PropelPDO $con = null)
    {
        $notacreditosRelatedByIdusuarioToDelete = $this->getNotacreditosRelatedByIdusuario(new Criteria(), $con)->diff($notacreditosRelatedByIdusuario);


        $this->notacreditosRelatedByIdusuarioScheduledForDeletion = $notacreditosRelatedByIdusuarioToDelete;

        foreach ($notacreditosRelatedByIdusuarioToDelete as $notacreditoRelatedByIdusuarioRemoved) {
            $notacreditoRelatedByIdusuarioRemoved->setUsuarioRelatedByIdusuario(null);
        }

        $this->collNotacreditosRelatedByIdusuario = null;
        foreach ($notacreditosRelatedByIdusuario as $notacreditoRelatedByIdusuario) {
            $this->addNotacreditoRelatedByIdusuario($notacreditoRelatedByIdusuario);
        }

        $this->collNotacreditosRelatedByIdusuario = $notacreditosRelatedByIdusuario;
        $this->collNotacreditosRelatedByIdusuarioPartial = false;

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
    public function countNotacreditosRelatedByIdusuario(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collNotacreditosRelatedByIdusuarioPartial && !$this->isNew();
        if (null === $this->collNotacreditosRelatedByIdusuario || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collNotacreditosRelatedByIdusuario) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getNotacreditosRelatedByIdusuario());
            }
            $query = NotacreditoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUsuarioRelatedByIdusuario($this)
                ->count($con);
        }

        return count($this->collNotacreditosRelatedByIdusuario);
    }

    /**
     * Method called to associate a Notacredito object to this object
     * through the Notacredito foreign key attribute.
     *
     * @param    Notacredito $l Notacredito
     * @return Usuario The current object (for fluent API support)
     */
    public function addNotacreditoRelatedByIdusuario(Notacredito $l)
    {
        if ($this->collNotacreditosRelatedByIdusuario === null) {
            $this->initNotacreditosRelatedByIdusuario();
            $this->collNotacreditosRelatedByIdusuarioPartial = true;
        }

        if (!in_array($l, $this->collNotacreditosRelatedByIdusuario->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddNotacreditoRelatedByIdusuario($l);

            if ($this->notacreditosRelatedByIdusuarioScheduledForDeletion and $this->notacreditosRelatedByIdusuarioScheduledForDeletion->contains($l)) {
                $this->notacreditosRelatedByIdusuarioScheduledForDeletion->remove($this->notacreditosRelatedByIdusuarioScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	NotacreditoRelatedByIdusuario $notacreditoRelatedByIdusuario The notacreditoRelatedByIdusuario object to add.
     */
    protected function doAddNotacreditoRelatedByIdusuario($notacreditoRelatedByIdusuario)
    {
        $this->collNotacreditosRelatedByIdusuario[]= $notacreditoRelatedByIdusuario;
        $notacreditoRelatedByIdusuario->setUsuarioRelatedByIdusuario($this);
    }

    /**
     * @param	NotacreditoRelatedByIdusuario $notacreditoRelatedByIdusuario The notacreditoRelatedByIdusuario object to remove.
     * @return Usuario The current object (for fluent API support)
     */
    public function removeNotacreditoRelatedByIdusuario($notacreditoRelatedByIdusuario)
    {
        if ($this->getNotacreditosRelatedByIdusuario()->contains($notacreditoRelatedByIdusuario)) {
            $this->collNotacreditosRelatedByIdusuario->remove($this->collNotacreditosRelatedByIdusuario->search($notacreditoRelatedByIdusuario));
            if (null === $this->notacreditosRelatedByIdusuarioScheduledForDeletion) {
                $this->notacreditosRelatedByIdusuarioScheduledForDeletion = clone $this->collNotacreditosRelatedByIdusuario;
                $this->notacreditosRelatedByIdusuarioScheduledForDeletion->clear();
            }
            $this->notacreditosRelatedByIdusuarioScheduledForDeletion[]= clone $notacreditoRelatedByIdusuario;
            $notacreditoRelatedByIdusuario->setUsuarioRelatedByIdusuario(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Usuario is new, it will return
     * an empty collection; or if this Usuario has previously
     * been saved, it will retrieve related NotacreditosRelatedByIdusuario from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Usuario.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Notacredito[] List of Notacredito objects
     */
    public function getNotacreditosRelatedByIdusuarioJoinAlmacen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = NotacreditoQuery::create(null, $criteria);
        $query->joinWith('Almacen', $join_behavior);

        return $this->getNotacreditosRelatedByIdusuario($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Usuario is new, it will return
     * an empty collection; or if this Usuario has previously
     * been saved, it will retrieve related NotacreditosRelatedByIdusuario from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Usuario.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Notacredito[] List of Notacredito objects
     */
    public function getNotacreditosRelatedByIdusuarioJoinSucursal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = NotacreditoQuery::create(null, $criteria);
        $query->joinWith('Sucursal', $join_behavior);

        return $this->getNotacreditosRelatedByIdusuario($query, $con);
    }

    /**
     * Clears out the collRequisicionsRelatedByIdauditor collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Usuario The current object (for fluent API support)
     * @see        addRequisicionsRelatedByIdauditor()
     */
    public function clearRequisicionsRelatedByIdauditor()
    {
        $this->collRequisicionsRelatedByIdauditor = null; // important to set this to null since that means it is uninitialized
        $this->collRequisicionsRelatedByIdauditorPartial = null;

        return $this;
    }

    /**
     * reset is the collRequisicionsRelatedByIdauditor collection loaded partially
     *
     * @return void
     */
    public function resetPartialRequisicionsRelatedByIdauditor($v = true)
    {
        $this->collRequisicionsRelatedByIdauditorPartial = $v;
    }

    /**
     * Initializes the collRequisicionsRelatedByIdauditor collection.
     *
     * By default this just sets the collRequisicionsRelatedByIdauditor collection to an empty array (like clearcollRequisicionsRelatedByIdauditor());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initRequisicionsRelatedByIdauditor($overrideExisting = true)
    {
        if (null !== $this->collRequisicionsRelatedByIdauditor && !$overrideExisting) {
            return;
        }
        $this->collRequisicionsRelatedByIdauditor = new PropelObjectCollection();
        $this->collRequisicionsRelatedByIdauditor->setModel('Requisicion');
    }

    /**
     * Gets an array of Requisicion objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Usuario is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     * @throws PropelException
     */
    public function getRequisicionsRelatedByIdauditor($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collRequisicionsRelatedByIdauditorPartial && !$this->isNew();
        if (null === $this->collRequisicionsRelatedByIdauditor || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collRequisicionsRelatedByIdauditor) {
                // return empty collection
                $this->initRequisicionsRelatedByIdauditor();
            } else {
                $collRequisicionsRelatedByIdauditor = RequisicionQuery::create(null, $criteria)
                    ->filterByUsuarioRelatedByIdauditor($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collRequisicionsRelatedByIdauditorPartial && count($collRequisicionsRelatedByIdauditor)) {
                      $this->initRequisicionsRelatedByIdauditor(false);

                      foreach ($collRequisicionsRelatedByIdauditor as $obj) {
                        if (false == $this->collRequisicionsRelatedByIdauditor->contains($obj)) {
                          $this->collRequisicionsRelatedByIdauditor->append($obj);
                        }
                      }

                      $this->collRequisicionsRelatedByIdauditorPartial = true;
                    }

                    $collRequisicionsRelatedByIdauditor->getInternalIterator()->rewind();

                    return $collRequisicionsRelatedByIdauditor;
                }

                if ($partial && $this->collRequisicionsRelatedByIdauditor) {
                    foreach ($this->collRequisicionsRelatedByIdauditor as $obj) {
                        if ($obj->isNew()) {
                            $collRequisicionsRelatedByIdauditor[] = $obj;
                        }
                    }
                }

                $this->collRequisicionsRelatedByIdauditor = $collRequisicionsRelatedByIdauditor;
                $this->collRequisicionsRelatedByIdauditorPartial = false;
            }
        }

        return $this->collRequisicionsRelatedByIdauditor;
    }

    /**
     * Sets a collection of RequisicionRelatedByIdauditor objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $requisicionsRelatedByIdauditor A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Usuario The current object (for fluent API support)
     */
    public function setRequisicionsRelatedByIdauditor(PropelCollection $requisicionsRelatedByIdauditor, PropelPDO $con = null)
    {
        $requisicionsRelatedByIdauditorToDelete = $this->getRequisicionsRelatedByIdauditor(new Criteria(), $con)->diff($requisicionsRelatedByIdauditor);


        $this->requisicionsRelatedByIdauditorScheduledForDeletion = $requisicionsRelatedByIdauditorToDelete;

        foreach ($requisicionsRelatedByIdauditorToDelete as $requisicionRelatedByIdauditorRemoved) {
            $requisicionRelatedByIdauditorRemoved->setUsuarioRelatedByIdauditor(null);
        }

        $this->collRequisicionsRelatedByIdauditor = null;
        foreach ($requisicionsRelatedByIdauditor as $requisicionRelatedByIdauditor) {
            $this->addRequisicionRelatedByIdauditor($requisicionRelatedByIdauditor);
        }

        $this->collRequisicionsRelatedByIdauditor = $requisicionsRelatedByIdauditor;
        $this->collRequisicionsRelatedByIdauditorPartial = false;

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
    public function countRequisicionsRelatedByIdauditor(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collRequisicionsRelatedByIdauditorPartial && !$this->isNew();
        if (null === $this->collRequisicionsRelatedByIdauditor || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collRequisicionsRelatedByIdauditor) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getRequisicionsRelatedByIdauditor());
            }
            $query = RequisicionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUsuarioRelatedByIdauditor($this)
                ->count($con);
        }

        return count($this->collRequisicionsRelatedByIdauditor);
    }

    /**
     * Method called to associate a Requisicion object to this object
     * through the Requisicion foreign key attribute.
     *
     * @param    Requisicion $l Requisicion
     * @return Usuario The current object (for fluent API support)
     */
    public function addRequisicionRelatedByIdauditor(Requisicion $l)
    {
        if ($this->collRequisicionsRelatedByIdauditor === null) {
            $this->initRequisicionsRelatedByIdauditor();
            $this->collRequisicionsRelatedByIdauditorPartial = true;
        }

        if (!in_array($l, $this->collRequisicionsRelatedByIdauditor->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddRequisicionRelatedByIdauditor($l);

            if ($this->requisicionsRelatedByIdauditorScheduledForDeletion and $this->requisicionsRelatedByIdauditorScheduledForDeletion->contains($l)) {
                $this->requisicionsRelatedByIdauditorScheduledForDeletion->remove($this->requisicionsRelatedByIdauditorScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	RequisicionRelatedByIdauditor $requisicionRelatedByIdauditor The requisicionRelatedByIdauditor object to add.
     */
    protected function doAddRequisicionRelatedByIdauditor($requisicionRelatedByIdauditor)
    {
        $this->collRequisicionsRelatedByIdauditor[]= $requisicionRelatedByIdauditor;
        $requisicionRelatedByIdauditor->setUsuarioRelatedByIdauditor($this);
    }

    /**
     * @param	RequisicionRelatedByIdauditor $requisicionRelatedByIdauditor The requisicionRelatedByIdauditor object to remove.
     * @return Usuario The current object (for fluent API support)
     */
    public function removeRequisicionRelatedByIdauditor($requisicionRelatedByIdauditor)
    {
        if ($this->getRequisicionsRelatedByIdauditor()->contains($requisicionRelatedByIdauditor)) {
            $this->collRequisicionsRelatedByIdauditor->remove($this->collRequisicionsRelatedByIdauditor->search($requisicionRelatedByIdauditor));
            if (null === $this->requisicionsRelatedByIdauditorScheduledForDeletion) {
                $this->requisicionsRelatedByIdauditorScheduledForDeletion = clone $this->collRequisicionsRelatedByIdauditor;
                $this->requisicionsRelatedByIdauditorScheduledForDeletion->clear();
            }
            $this->requisicionsRelatedByIdauditorScheduledForDeletion[]= clone $requisicionRelatedByIdauditor;
            $requisicionRelatedByIdauditor->setUsuarioRelatedByIdauditor(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Usuario is new, it will return
     * an empty collection; or if this Usuario has previously
     * been saved, it will retrieve related RequisicionsRelatedByIdauditor from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Usuario.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsRelatedByIdauditorJoinConceptosalida($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('Conceptosalida', $join_behavior);

        return $this->getRequisicionsRelatedByIdauditor($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Usuario is new, it will return
     * an empty collection; or if this Usuario has previously
     * been saved, it will retrieve related RequisicionsRelatedByIdauditor from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Usuario.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsRelatedByIdauditorJoinEmpresa($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('Empresa', $join_behavior);

        return $this->getRequisicionsRelatedByIdauditor($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Usuario is new, it will return
     * an empty collection; or if this Usuario has previously
     * been saved, it will retrieve related RequisicionsRelatedByIdauditor from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Usuario.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsRelatedByIdauditorJoinSucursal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('Sucursal', $join_behavior);

        return $this->getRequisicionsRelatedByIdauditor($query, $con);
    }

    /**
     * Clears out the collRequisicionsRelatedByIdusuario collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Usuario The current object (for fluent API support)
     * @see        addRequisicionsRelatedByIdusuario()
     */
    public function clearRequisicionsRelatedByIdusuario()
    {
        $this->collRequisicionsRelatedByIdusuario = null; // important to set this to null since that means it is uninitialized
        $this->collRequisicionsRelatedByIdusuarioPartial = null;

        return $this;
    }

    /**
     * reset is the collRequisicionsRelatedByIdusuario collection loaded partially
     *
     * @return void
     */
    public function resetPartialRequisicionsRelatedByIdusuario($v = true)
    {
        $this->collRequisicionsRelatedByIdusuarioPartial = $v;
    }

    /**
     * Initializes the collRequisicionsRelatedByIdusuario collection.
     *
     * By default this just sets the collRequisicionsRelatedByIdusuario collection to an empty array (like clearcollRequisicionsRelatedByIdusuario());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initRequisicionsRelatedByIdusuario($overrideExisting = true)
    {
        if (null !== $this->collRequisicionsRelatedByIdusuario && !$overrideExisting) {
            return;
        }
        $this->collRequisicionsRelatedByIdusuario = new PropelObjectCollection();
        $this->collRequisicionsRelatedByIdusuario->setModel('Requisicion');
    }

    /**
     * Gets an array of Requisicion objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Usuario is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     * @throws PropelException
     */
    public function getRequisicionsRelatedByIdusuario($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collRequisicionsRelatedByIdusuarioPartial && !$this->isNew();
        if (null === $this->collRequisicionsRelatedByIdusuario || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collRequisicionsRelatedByIdusuario) {
                // return empty collection
                $this->initRequisicionsRelatedByIdusuario();
            } else {
                $collRequisicionsRelatedByIdusuario = RequisicionQuery::create(null, $criteria)
                    ->filterByUsuarioRelatedByIdusuario($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collRequisicionsRelatedByIdusuarioPartial && count($collRequisicionsRelatedByIdusuario)) {
                      $this->initRequisicionsRelatedByIdusuario(false);

                      foreach ($collRequisicionsRelatedByIdusuario as $obj) {
                        if (false == $this->collRequisicionsRelatedByIdusuario->contains($obj)) {
                          $this->collRequisicionsRelatedByIdusuario->append($obj);
                        }
                      }

                      $this->collRequisicionsRelatedByIdusuarioPartial = true;
                    }

                    $collRequisicionsRelatedByIdusuario->getInternalIterator()->rewind();

                    return $collRequisicionsRelatedByIdusuario;
                }

                if ($partial && $this->collRequisicionsRelatedByIdusuario) {
                    foreach ($this->collRequisicionsRelatedByIdusuario as $obj) {
                        if ($obj->isNew()) {
                            $collRequisicionsRelatedByIdusuario[] = $obj;
                        }
                    }
                }

                $this->collRequisicionsRelatedByIdusuario = $collRequisicionsRelatedByIdusuario;
                $this->collRequisicionsRelatedByIdusuarioPartial = false;
            }
        }

        return $this->collRequisicionsRelatedByIdusuario;
    }

    /**
     * Sets a collection of RequisicionRelatedByIdusuario objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $requisicionsRelatedByIdusuario A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Usuario The current object (for fluent API support)
     */
    public function setRequisicionsRelatedByIdusuario(PropelCollection $requisicionsRelatedByIdusuario, PropelPDO $con = null)
    {
        $requisicionsRelatedByIdusuarioToDelete = $this->getRequisicionsRelatedByIdusuario(new Criteria(), $con)->diff($requisicionsRelatedByIdusuario);


        $this->requisicionsRelatedByIdusuarioScheduledForDeletion = $requisicionsRelatedByIdusuarioToDelete;

        foreach ($requisicionsRelatedByIdusuarioToDelete as $requisicionRelatedByIdusuarioRemoved) {
            $requisicionRelatedByIdusuarioRemoved->setUsuarioRelatedByIdusuario(null);
        }

        $this->collRequisicionsRelatedByIdusuario = null;
        foreach ($requisicionsRelatedByIdusuario as $requisicionRelatedByIdusuario) {
            $this->addRequisicionRelatedByIdusuario($requisicionRelatedByIdusuario);
        }

        $this->collRequisicionsRelatedByIdusuario = $requisicionsRelatedByIdusuario;
        $this->collRequisicionsRelatedByIdusuarioPartial = false;

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
    public function countRequisicionsRelatedByIdusuario(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collRequisicionsRelatedByIdusuarioPartial && !$this->isNew();
        if (null === $this->collRequisicionsRelatedByIdusuario || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collRequisicionsRelatedByIdusuario) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getRequisicionsRelatedByIdusuario());
            }
            $query = RequisicionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUsuarioRelatedByIdusuario($this)
                ->count($con);
        }

        return count($this->collRequisicionsRelatedByIdusuario);
    }

    /**
     * Method called to associate a Requisicion object to this object
     * through the Requisicion foreign key attribute.
     *
     * @param    Requisicion $l Requisicion
     * @return Usuario The current object (for fluent API support)
     */
    public function addRequisicionRelatedByIdusuario(Requisicion $l)
    {
        if ($this->collRequisicionsRelatedByIdusuario === null) {
            $this->initRequisicionsRelatedByIdusuario();
            $this->collRequisicionsRelatedByIdusuarioPartial = true;
        }

        if (!in_array($l, $this->collRequisicionsRelatedByIdusuario->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddRequisicionRelatedByIdusuario($l);

            if ($this->requisicionsRelatedByIdusuarioScheduledForDeletion and $this->requisicionsRelatedByIdusuarioScheduledForDeletion->contains($l)) {
                $this->requisicionsRelatedByIdusuarioScheduledForDeletion->remove($this->requisicionsRelatedByIdusuarioScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	RequisicionRelatedByIdusuario $requisicionRelatedByIdusuario The requisicionRelatedByIdusuario object to add.
     */
    protected function doAddRequisicionRelatedByIdusuario($requisicionRelatedByIdusuario)
    {
        $this->collRequisicionsRelatedByIdusuario[]= $requisicionRelatedByIdusuario;
        $requisicionRelatedByIdusuario->setUsuarioRelatedByIdusuario($this);
    }

    /**
     * @param	RequisicionRelatedByIdusuario $requisicionRelatedByIdusuario The requisicionRelatedByIdusuario object to remove.
     * @return Usuario The current object (for fluent API support)
     */
    public function removeRequisicionRelatedByIdusuario($requisicionRelatedByIdusuario)
    {
        if ($this->getRequisicionsRelatedByIdusuario()->contains($requisicionRelatedByIdusuario)) {
            $this->collRequisicionsRelatedByIdusuario->remove($this->collRequisicionsRelatedByIdusuario->search($requisicionRelatedByIdusuario));
            if (null === $this->requisicionsRelatedByIdusuarioScheduledForDeletion) {
                $this->requisicionsRelatedByIdusuarioScheduledForDeletion = clone $this->collRequisicionsRelatedByIdusuario;
                $this->requisicionsRelatedByIdusuarioScheduledForDeletion->clear();
            }
            $this->requisicionsRelatedByIdusuarioScheduledForDeletion[]= clone $requisicionRelatedByIdusuario;
            $requisicionRelatedByIdusuario->setUsuarioRelatedByIdusuario(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Usuario is new, it will return
     * an empty collection; or if this Usuario has previously
     * been saved, it will retrieve related RequisicionsRelatedByIdusuario from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Usuario.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsRelatedByIdusuarioJoinConceptosalida($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('Conceptosalida', $join_behavior);

        return $this->getRequisicionsRelatedByIdusuario($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Usuario is new, it will return
     * an empty collection; or if this Usuario has previously
     * been saved, it will retrieve related RequisicionsRelatedByIdusuario from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Usuario.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsRelatedByIdusuarioJoinEmpresa($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('Empresa', $join_behavior);

        return $this->getRequisicionsRelatedByIdusuario($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Usuario is new, it will return
     * an empty collection; or if this Usuario has previously
     * been saved, it will retrieve related RequisicionsRelatedByIdusuario from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Usuario.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Requisicion[] List of Requisicion objects
     */
    public function getRequisicionsRelatedByIdusuarioJoinSucursal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = RequisicionQuery::create(null, $criteria);
        $query->joinWith('Sucursal', $join_behavior);

        return $this->getRequisicionsRelatedByIdusuario($query, $con);
    }

    /**
     * Clears out the collUsuarioempresas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Usuario The current object (for fluent API support)
     * @see        addUsuarioempresas()
     */
    public function clearUsuarioempresas()
    {
        $this->collUsuarioempresas = null; // important to set this to null since that means it is uninitialized
        $this->collUsuarioempresasPartial = null;

        return $this;
    }

    /**
     * reset is the collUsuarioempresas collection loaded partially
     *
     * @return void
     */
    public function resetPartialUsuarioempresas($v = true)
    {
        $this->collUsuarioempresasPartial = $v;
    }

    /**
     * Initializes the collUsuarioempresas collection.
     *
     * By default this just sets the collUsuarioempresas collection to an empty array (like clearcollUsuarioempresas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initUsuarioempresas($overrideExisting = true)
    {
        if (null !== $this->collUsuarioempresas && !$overrideExisting) {
            return;
        }
        $this->collUsuarioempresas = new PropelObjectCollection();
        $this->collUsuarioempresas->setModel('Usuarioempresa');
    }

    /**
     * Gets an array of Usuarioempresa objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Usuario is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Usuarioempresa[] List of Usuarioempresa objects
     * @throws PropelException
     */
    public function getUsuarioempresas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collUsuarioempresasPartial && !$this->isNew();
        if (null === $this->collUsuarioempresas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collUsuarioempresas) {
                // return empty collection
                $this->initUsuarioempresas();
            } else {
                $collUsuarioempresas = UsuarioempresaQuery::create(null, $criteria)
                    ->filterByUsuario($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collUsuarioempresasPartial && count($collUsuarioempresas)) {
                      $this->initUsuarioempresas(false);

                      foreach ($collUsuarioempresas as $obj) {
                        if (false == $this->collUsuarioempresas->contains($obj)) {
                          $this->collUsuarioempresas->append($obj);
                        }
                      }

                      $this->collUsuarioempresasPartial = true;
                    }

                    $collUsuarioempresas->getInternalIterator()->rewind();

                    return $collUsuarioempresas;
                }

                if ($partial && $this->collUsuarioempresas) {
                    foreach ($this->collUsuarioempresas as $obj) {
                        if ($obj->isNew()) {
                            $collUsuarioempresas[] = $obj;
                        }
                    }
                }

                $this->collUsuarioempresas = $collUsuarioempresas;
                $this->collUsuarioempresasPartial = false;
            }
        }

        return $this->collUsuarioempresas;
    }

    /**
     * Sets a collection of Usuarioempresa objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $usuarioempresas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Usuario The current object (for fluent API support)
     */
    public function setUsuarioempresas(PropelCollection $usuarioempresas, PropelPDO $con = null)
    {
        $usuarioempresasToDelete = $this->getUsuarioempresas(new Criteria(), $con)->diff($usuarioempresas);


        $this->usuarioempresasScheduledForDeletion = $usuarioempresasToDelete;

        foreach ($usuarioempresasToDelete as $usuarioempresaRemoved) {
            $usuarioempresaRemoved->setUsuario(null);
        }

        $this->collUsuarioempresas = null;
        foreach ($usuarioempresas as $usuarioempresa) {
            $this->addUsuarioempresa($usuarioempresa);
        }

        $this->collUsuarioempresas = $usuarioempresas;
        $this->collUsuarioempresasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Usuarioempresa objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Usuarioempresa objects.
     * @throws PropelException
     */
    public function countUsuarioempresas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collUsuarioempresasPartial && !$this->isNew();
        if (null === $this->collUsuarioempresas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collUsuarioempresas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getUsuarioempresas());
            }
            $query = UsuarioempresaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUsuario($this)
                ->count($con);
        }

        return count($this->collUsuarioempresas);
    }

    /**
     * Method called to associate a Usuarioempresa object to this object
     * through the Usuarioempresa foreign key attribute.
     *
     * @param    Usuarioempresa $l Usuarioempresa
     * @return Usuario The current object (for fluent API support)
     */
    public function addUsuarioempresa(Usuarioempresa $l)
    {
        if ($this->collUsuarioempresas === null) {
            $this->initUsuarioempresas();
            $this->collUsuarioempresasPartial = true;
        }

        if (!in_array($l, $this->collUsuarioempresas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddUsuarioempresa($l);

            if ($this->usuarioempresasScheduledForDeletion and $this->usuarioempresasScheduledForDeletion->contains($l)) {
                $this->usuarioempresasScheduledForDeletion->remove($this->usuarioempresasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Usuarioempresa $usuarioempresa The usuarioempresa object to add.
     */
    protected function doAddUsuarioempresa($usuarioempresa)
    {
        $this->collUsuarioempresas[]= $usuarioempresa;
        $usuarioempresa->setUsuario($this);
    }

    /**
     * @param	Usuarioempresa $usuarioempresa The usuarioempresa object to remove.
     * @return Usuario The current object (for fluent API support)
     */
    public function removeUsuarioempresa($usuarioempresa)
    {
        if ($this->getUsuarioempresas()->contains($usuarioempresa)) {
            $this->collUsuarioempresas->remove($this->collUsuarioempresas->search($usuarioempresa));
            if (null === $this->usuarioempresasScheduledForDeletion) {
                $this->usuarioempresasScheduledForDeletion = clone $this->collUsuarioempresas;
                $this->usuarioempresasScheduledForDeletion->clear();
            }
            $this->usuarioempresasScheduledForDeletion[]= clone $usuarioempresa;
            $usuarioempresa->setUsuario(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Usuario is new, it will return
     * an empty collection; or if this Usuario has previously
     * been saved, it will retrieve related Usuarioempresas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Usuario.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Usuarioempresa[] List of Usuarioempresa objects
     */
    public function getUsuarioempresasJoinEmpresa($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = UsuarioempresaQuery::create(null, $criteria);
        $query->joinWith('Empresa', $join_behavior);

        return $this->getUsuarioempresas($query, $con);
    }

    /**
     * Clears out the collUsuariosucursals collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Usuario The current object (for fluent API support)
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
     * If this Usuario is new, it will return
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
                    ->filterByUsuario($this)
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
     * @return Usuario The current object (for fluent API support)
     */
    public function setUsuariosucursals(PropelCollection $usuariosucursals, PropelPDO $con = null)
    {
        $usuariosucursalsToDelete = $this->getUsuariosucursals(new Criteria(), $con)->diff($usuariosucursals);


        $this->usuariosucursalsScheduledForDeletion = $usuariosucursalsToDelete;

        foreach ($usuariosucursalsToDelete as $usuariosucursalRemoved) {
            $usuariosucursalRemoved->setUsuario(null);
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
                ->filterByUsuario($this)
                ->count($con);
        }

        return count($this->collUsuariosucursals);
    }

    /**
     * Method called to associate a Usuariosucursal object to this object
     * through the Usuariosucursal foreign key attribute.
     *
     * @param    Usuariosucursal $l Usuariosucursal
     * @return Usuario The current object (for fluent API support)
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
        $usuariosucursal->setUsuario($this);
    }

    /**
     * @param	Usuariosucursal $usuariosucursal The usuariosucursal object to remove.
     * @return Usuario The current object (for fluent API support)
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
            $usuariosucursal->setUsuario(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Usuario is new, it will return
     * an empty collection; or if this Usuario has previously
     * been saved, it will retrieve related Usuariosucursals from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Usuario.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Usuariosucursal[] List of Usuariosucursal objects
     */
    public function getUsuariosucursalsJoinSucursal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = UsuariosucursalQuery::create(null, $criteria);
        $query->joinWith('Sucursal', $join_behavior);

        return $this->getUsuariosucursals($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idusuario = null;
        $this->idrol = null;
        $this->usuario_nombre = null;
        $this->usuario_estatus = null;
        $this->usuario_username = null;
        $this->usuario_password = null;
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
            if ($this->collDevolucionsRelatedByIdauditor) {
                foreach ($this->collDevolucionsRelatedByIdauditor as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collDevolucionsRelatedByIdusuario) {
                foreach ($this->collDevolucionsRelatedByIdusuario as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collInventariomessRelatedByIdauditor) {
                foreach ($this->collInventariomessRelatedByIdauditor as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collInventariomessRelatedByIdusuario) {
                foreach ($this->collInventariomessRelatedByIdusuario as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collInventariomesdetallenotas) {
                foreach ($this->collInventariomesdetallenotas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collNotacreditosRelatedByIdauditor) {
                foreach ($this->collNotacreditosRelatedByIdauditor as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collNotacreditosRelatedByIdusuario) {
                foreach ($this->collNotacreditosRelatedByIdusuario as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collRequisicionsRelatedByIdauditor) {
                foreach ($this->collRequisicionsRelatedByIdauditor as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collRequisicionsRelatedByIdusuario) {
                foreach ($this->collRequisicionsRelatedByIdusuario as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collUsuarioempresas) {
                foreach ($this->collUsuarioempresas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collUsuariosucursals) {
                foreach ($this->collUsuariosucursals as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aRol instanceof Persistent) {
              $this->aRol->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collDevolucionsRelatedByIdauditor instanceof PropelCollection) {
            $this->collDevolucionsRelatedByIdauditor->clearIterator();
        }
        $this->collDevolucionsRelatedByIdauditor = null;
        if ($this->collDevolucionsRelatedByIdusuario instanceof PropelCollection) {
            $this->collDevolucionsRelatedByIdusuario->clearIterator();
        }
        $this->collDevolucionsRelatedByIdusuario = null;
        if ($this->collInventariomessRelatedByIdauditor instanceof PropelCollection) {
            $this->collInventariomessRelatedByIdauditor->clearIterator();
        }
        $this->collInventariomessRelatedByIdauditor = null;
        if ($this->collInventariomessRelatedByIdusuario instanceof PropelCollection) {
            $this->collInventariomessRelatedByIdusuario->clearIterator();
        }
        $this->collInventariomessRelatedByIdusuario = null;
        if ($this->collInventariomesdetallenotas instanceof PropelCollection) {
            $this->collInventariomesdetallenotas->clearIterator();
        }
        $this->collInventariomesdetallenotas = null;
        if ($this->collNotacreditosRelatedByIdauditor instanceof PropelCollection) {
            $this->collNotacreditosRelatedByIdauditor->clearIterator();
        }
        $this->collNotacreditosRelatedByIdauditor = null;
        if ($this->collNotacreditosRelatedByIdusuario instanceof PropelCollection) {
            $this->collNotacreditosRelatedByIdusuario->clearIterator();
        }
        $this->collNotacreditosRelatedByIdusuario = null;
        if ($this->collRequisicionsRelatedByIdauditor instanceof PropelCollection) {
            $this->collRequisicionsRelatedByIdauditor->clearIterator();
        }
        $this->collRequisicionsRelatedByIdauditor = null;
        if ($this->collRequisicionsRelatedByIdusuario instanceof PropelCollection) {
            $this->collRequisicionsRelatedByIdusuario->clearIterator();
        }
        $this->collRequisicionsRelatedByIdusuario = null;
        if ($this->collUsuarioempresas instanceof PropelCollection) {
            $this->collUsuarioempresas->clearIterator();
        }
        $this->collUsuarioempresas = null;
        if ($this->collUsuariosucursals instanceof PropelCollection) {
            $this->collUsuariosucursals->clearIterator();
        }
        $this->collUsuariosucursals = null;
        $this->aRol = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(UsuarioPeer::DEFAULT_STRING_FORMAT);
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
