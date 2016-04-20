<?php


/**
 * Base class that represents a row from the 'proveedor' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseProveedor extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ProveedorPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ProveedorPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idproveedor field.
     * @var        int
     */
    protected $idproveedor;

    /**
     * The value for the idempresa field.
     * @var        int
     */
    protected $idempresa;

    /**
     * The value for the proveedor_nombrecomercial field.
     * @var        string
     */
    protected $proveedor_nombrecomercial;

    /**
     * The value for the proveedor_razonsocial field.
     * @var        string
     */
    protected $proveedor_razonsocial;

    /**
     * The value for the proveedor_rfc field.
     * @var        string
     */
    protected $proveedor_rfc;

    /**
     * The value for the proveedor_telefono field.
     * @var        string
     */
    protected $proveedor_telefono;

    /**
     * The value for the proveedor_calle field.
     * @var        string
     */
    protected $proveedor_calle;

    /**
     * The value for the proveedor_numero field.
     * @var        string
     */
    protected $proveedor_numero;

    /**
     * The value for the proveedor_interior field.
     * @var        string
     */
    protected $proveedor_interior;

    /**
     * The value for the proveedor_colonia field.
     * @var        string
     */
    protected $proveedor_colonia;

    /**
     * The value for the proveedor_ciudad field.
     * @var        string
     */
    protected $proveedor_ciudad;

    /**
     * The value for the proveedor_estado field.
     * @var        string
     */
    protected $proveedor_estado;

    /**
     * The value for the proveedor_codigopostal field.
     * @var        string
     */
    protected $proveedor_codigopostal;

    /**
     * @var        Empresa
     */
    protected $aEmpresa;

    /**
     * @var        PropelObjectCollection|Compra[] Collection to store aggregation of Compra objects.
     */
    protected $collCompras;
    protected $collComprasPartial;

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
    protected $comprasScheduledForDeletion = null;

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
     * Get the [idempresa] column value.
     *
     * @return int
     */
    public function getIdempresa()
    {

        return $this->idempresa;
    }

    /**
     * Get the [proveedor_nombrecomercial] column value.
     *
     * @return string
     */
    public function getProveedorNombrecomercial()
    {

        return $this->proveedor_nombrecomercial;
    }

    /**
     * Get the [proveedor_razonsocial] column value.
     *
     * @return string
     */
    public function getProveedorRazonsocial()
    {

        return $this->proveedor_razonsocial;
    }

    /**
     * Get the [proveedor_rfc] column value.
     *
     * @return string
     */
    public function getProveedorRfc()
    {

        return $this->proveedor_rfc;
    }

    /**
     * Get the [proveedor_telefono] column value.
     *
     * @return string
     */
    public function getProveedorTelefono()
    {

        return $this->proveedor_telefono;
    }

    /**
     * Get the [proveedor_calle] column value.
     *
     * @return string
     */
    public function getProveedorCalle()
    {

        return $this->proveedor_calle;
    }

    /**
     * Get the [proveedor_numero] column value.
     *
     * @return string
     */
    public function getProveedorNumero()
    {

        return $this->proveedor_numero;
    }

    /**
     * Get the [proveedor_interior] column value.
     *
     * @return string
     */
    public function getProveedorInterior()
    {

        return $this->proveedor_interior;
    }

    /**
     * Get the [proveedor_colonia] column value.
     *
     * @return string
     */
    public function getProveedorColonia()
    {

        return $this->proveedor_colonia;
    }

    /**
     * Get the [proveedor_ciudad] column value.
     *
     * @return string
     */
    public function getProveedorCiudad()
    {

        return $this->proveedor_ciudad;
    }

    /**
     * Get the [proveedor_estado] column value.
     *
     * @return string
     */
    public function getProveedorEstado()
    {

        return $this->proveedor_estado;
    }

    /**
     * Get the [proveedor_codigopostal] column value.
     *
     * @return string
     */
    public function getProveedorCodigopostal()
    {

        return $this->proveedor_codigopostal;
    }

    /**
     * Set the value of [idproveedor] column.
     *
     * @param  int $v new value
     * @return Proveedor The current object (for fluent API support)
     */
    public function setIdproveedor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproveedor !== $v) {
            $this->idproveedor = $v;
            $this->modifiedColumns[] = ProveedorPeer::IDPROVEEDOR;
        }


        return $this;
    } // setIdproveedor()

    /**
     * Set the value of [idempresa] column.
     *
     * @param  int $v new value
     * @return Proveedor The current object (for fluent API support)
     */
    public function setIdempresa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempresa !== $v) {
            $this->idempresa = $v;
            $this->modifiedColumns[] = ProveedorPeer::IDEMPRESA;
        }

        if ($this->aEmpresa !== null && $this->aEmpresa->getIdempresa() !== $v) {
            $this->aEmpresa = null;
        }


        return $this;
    } // setIdempresa()

    /**
     * Set the value of [proveedor_nombrecomercial] column.
     *
     * @param  string $v new value
     * @return Proveedor The current object (for fluent API support)
     */
    public function setProveedorNombrecomercial($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedor_nombrecomercial !== $v) {
            $this->proveedor_nombrecomercial = $v;
            $this->modifiedColumns[] = ProveedorPeer::PROVEEDOR_NOMBRECOMERCIAL;
        }


        return $this;
    } // setProveedorNombrecomercial()

    /**
     * Set the value of [proveedor_razonsocial] column.
     *
     * @param  string $v new value
     * @return Proveedor The current object (for fluent API support)
     */
    public function setProveedorRazonsocial($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedor_razonsocial !== $v) {
            $this->proveedor_razonsocial = $v;
            $this->modifiedColumns[] = ProveedorPeer::PROVEEDOR_RAZONSOCIAL;
        }


        return $this;
    } // setProveedorRazonsocial()

    /**
     * Set the value of [proveedor_rfc] column.
     *
     * @param  string $v new value
     * @return Proveedor The current object (for fluent API support)
     */
    public function setProveedorRfc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedor_rfc !== $v) {
            $this->proveedor_rfc = $v;
            $this->modifiedColumns[] = ProveedorPeer::PROVEEDOR_RFC;
        }


        return $this;
    } // setProveedorRfc()

    /**
     * Set the value of [proveedor_telefono] column.
     *
     * @param  string $v new value
     * @return Proveedor The current object (for fluent API support)
     */
    public function setProveedorTelefono($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedor_telefono !== $v) {
            $this->proveedor_telefono = $v;
            $this->modifiedColumns[] = ProveedorPeer::PROVEEDOR_TELEFONO;
        }


        return $this;
    } // setProveedorTelefono()

    /**
     * Set the value of [proveedor_calle] column.
     *
     * @param  string $v new value
     * @return Proveedor The current object (for fluent API support)
     */
    public function setProveedorCalle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedor_calle !== $v) {
            $this->proveedor_calle = $v;
            $this->modifiedColumns[] = ProveedorPeer::PROVEEDOR_CALLE;
        }


        return $this;
    } // setProveedorCalle()

    /**
     * Set the value of [proveedor_numero] column.
     *
     * @param  string $v new value
     * @return Proveedor The current object (for fluent API support)
     */
    public function setProveedorNumero($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedor_numero !== $v) {
            $this->proveedor_numero = $v;
            $this->modifiedColumns[] = ProveedorPeer::PROVEEDOR_NUMERO;
        }


        return $this;
    } // setProveedorNumero()

    /**
     * Set the value of [proveedor_interior] column.
     *
     * @param  string $v new value
     * @return Proveedor The current object (for fluent API support)
     */
    public function setProveedorInterior($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedor_interior !== $v) {
            $this->proveedor_interior = $v;
            $this->modifiedColumns[] = ProveedorPeer::PROVEEDOR_INTERIOR;
        }


        return $this;
    } // setProveedorInterior()

    /**
     * Set the value of [proveedor_colonia] column.
     *
     * @param  string $v new value
     * @return Proveedor The current object (for fluent API support)
     */
    public function setProveedorColonia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedor_colonia !== $v) {
            $this->proveedor_colonia = $v;
            $this->modifiedColumns[] = ProveedorPeer::PROVEEDOR_COLONIA;
        }


        return $this;
    } // setProveedorColonia()

    /**
     * Set the value of [proveedor_ciudad] column.
     *
     * @param  string $v new value
     * @return Proveedor The current object (for fluent API support)
     */
    public function setProveedorCiudad($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedor_ciudad !== $v) {
            $this->proveedor_ciudad = $v;
            $this->modifiedColumns[] = ProveedorPeer::PROVEEDOR_CIUDAD;
        }


        return $this;
    } // setProveedorCiudad()

    /**
     * Set the value of [proveedor_estado] column.
     *
     * @param  string $v new value
     * @return Proveedor The current object (for fluent API support)
     */
    public function setProveedorEstado($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedor_estado !== $v) {
            $this->proveedor_estado = $v;
            $this->modifiedColumns[] = ProveedorPeer::PROVEEDOR_ESTADO;
        }


        return $this;
    } // setProveedorEstado()

    /**
     * Set the value of [proveedor_codigopostal] column.
     *
     * @param  string $v new value
     * @return Proveedor The current object (for fluent API support)
     */
    public function setProveedorCodigopostal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedor_codigopostal !== $v) {
            $this->proveedor_codigopostal = $v;
            $this->modifiedColumns[] = ProveedorPeer::PROVEEDOR_CODIGOPOSTAL;
        }


        return $this;
    } // setProveedorCodigopostal()

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

            $this->idproveedor = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idempresa = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->proveedor_nombrecomercial = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->proveedor_razonsocial = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->proveedor_rfc = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->proveedor_telefono = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->proveedor_calle = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->proveedor_numero = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->proveedor_interior = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->proveedor_colonia = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->proveedor_ciudad = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->proveedor_estado = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->proveedor_codigopostal = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 13; // 13 = ProveedorPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Proveedor object", $e);
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
            $con = Propel::getConnection(ProveedorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ProveedorPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aEmpresa = null;
            $this->collCompras = null;

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
            $con = Propel::getConnection(ProveedorPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ProveedorQuery::create()
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
            $con = Propel::getConnection(ProveedorPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ProveedorPeer::addInstanceToPool($this);
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

            if ($this->comprasScheduledForDeletion !== null) {
                if (!$this->comprasScheduledForDeletion->isEmpty()) {
                    CompraQuery::create()
                        ->filterByPrimaryKeys($this->comprasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->comprasScheduledForDeletion = null;
                }
            }

            if ($this->collCompras !== null) {
                foreach ($this->collCompras as $referrerFK) {
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

        $this->modifiedColumns[] = ProveedorPeer::IDPROVEEDOR;
        if (null !== $this->idproveedor) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ProveedorPeer::IDPROVEEDOR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ProveedorPeer::IDPROVEEDOR)) {
            $modifiedColumns[':p' . $index++]  = '`idproveedor`';
        }
        if ($this->isColumnModified(ProveedorPeer::IDEMPRESA)) {
            $modifiedColumns[':p' . $index++]  = '`idempresa`';
        }
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_NOMBRECOMERCIAL)) {
            $modifiedColumns[':p' . $index++]  = '`proveedor_nombrecomercial`';
        }
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_RAZONSOCIAL)) {
            $modifiedColumns[':p' . $index++]  = '`proveedor_razonsocial`';
        }
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_RFC)) {
            $modifiedColumns[':p' . $index++]  = '`proveedor_RFC`';
        }
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_TELEFONO)) {
            $modifiedColumns[':p' . $index++]  = '`proveedor_telefono`';
        }
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_CALLE)) {
            $modifiedColumns[':p' . $index++]  = '`proveedor_calle`';
        }
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`proveedor_numero`';
        }
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_INTERIOR)) {
            $modifiedColumns[':p' . $index++]  = '`proveedor_interior`';
        }
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_COLONIA)) {
            $modifiedColumns[':p' . $index++]  = '`proveedor_colonia`';
        }
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_CIUDAD)) {
            $modifiedColumns[':p' . $index++]  = '`proveedor_ciudad`';
        }
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_ESTADO)) {
            $modifiedColumns[':p' . $index++]  = '`proveedor_estado`';
        }
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_CODIGOPOSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`proveedor_codigopostal`';
        }

        $sql = sprintf(
            'INSERT INTO `proveedor` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idproveedor`':
                        $stmt->bindValue($identifier, $this->idproveedor, PDO::PARAM_INT);
                        break;
                    case '`idempresa`':
                        $stmt->bindValue($identifier, $this->idempresa, PDO::PARAM_INT);
                        break;
                    case '`proveedor_nombrecomercial`':
                        $stmt->bindValue($identifier, $this->proveedor_nombrecomercial, PDO::PARAM_STR);
                        break;
                    case '`proveedor_razonsocial`':
                        $stmt->bindValue($identifier, $this->proveedor_razonsocial, PDO::PARAM_STR);
                        break;
                    case '`proveedor_RFC`':
                        $stmt->bindValue($identifier, $this->proveedor_rfc, PDO::PARAM_STR);
                        break;
                    case '`proveedor_telefono`':
                        $stmt->bindValue($identifier, $this->proveedor_telefono, PDO::PARAM_STR);
                        break;
                    case '`proveedor_calle`':
                        $stmt->bindValue($identifier, $this->proveedor_calle, PDO::PARAM_STR);
                        break;
                    case '`proveedor_numero`':
                        $stmt->bindValue($identifier, $this->proveedor_numero, PDO::PARAM_STR);
                        break;
                    case '`proveedor_interior`':
                        $stmt->bindValue($identifier, $this->proveedor_interior, PDO::PARAM_STR);
                        break;
                    case '`proveedor_colonia`':
                        $stmt->bindValue($identifier, $this->proveedor_colonia, PDO::PARAM_STR);
                        break;
                    case '`proveedor_ciudad`':
                        $stmt->bindValue($identifier, $this->proveedor_ciudad, PDO::PARAM_STR);
                        break;
                    case '`proveedor_estado`':
                        $stmt->bindValue($identifier, $this->proveedor_estado, PDO::PARAM_STR);
                        break;
                    case '`proveedor_codigopostal`':
                        $stmt->bindValue($identifier, $this->proveedor_codigopostal, PDO::PARAM_STR);
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
        $this->setIdproveedor($pk);

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


            if (($retval = ProveedorPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCompras !== null) {
                    foreach ($this->collCompras as $referrerFK) {
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
        $pos = ProveedorPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdproveedor();
                break;
            case 1:
                return $this->getIdempresa();
                break;
            case 2:
                return $this->getProveedorNombrecomercial();
                break;
            case 3:
                return $this->getProveedorRazonsocial();
                break;
            case 4:
                return $this->getProveedorRfc();
                break;
            case 5:
                return $this->getProveedorTelefono();
                break;
            case 6:
                return $this->getProveedorCalle();
                break;
            case 7:
                return $this->getProveedorNumero();
                break;
            case 8:
                return $this->getProveedorInterior();
                break;
            case 9:
                return $this->getProveedorColonia();
                break;
            case 10:
                return $this->getProveedorCiudad();
                break;
            case 11:
                return $this->getProveedorEstado();
                break;
            case 12:
                return $this->getProveedorCodigopostal();
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
        if (isset($alreadyDumpedObjects['Proveedor'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Proveedor'][$this->getPrimaryKey()] = true;
        $keys = ProveedorPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdproveedor(),
            $keys[1] => $this->getIdempresa(),
            $keys[2] => $this->getProveedorNombrecomercial(),
            $keys[3] => $this->getProveedorRazonsocial(),
            $keys[4] => $this->getProveedorRfc(),
            $keys[5] => $this->getProveedorTelefono(),
            $keys[6] => $this->getProveedorCalle(),
            $keys[7] => $this->getProveedorNumero(),
            $keys[8] => $this->getProveedorInterior(),
            $keys[9] => $this->getProveedorColonia(),
            $keys[10] => $this->getProveedorCiudad(),
            $keys[11] => $this->getProveedorEstado(),
            $keys[12] => $this->getProveedorCodigopostal(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aEmpresa) {
                $result['Empresa'] = $this->aEmpresa->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCompras) {
                $result['Compras'] = $this->collCompras->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ProveedorPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdproveedor($value);
                break;
            case 1:
                $this->setIdempresa($value);
                break;
            case 2:
                $this->setProveedorNombrecomercial($value);
                break;
            case 3:
                $this->setProveedorRazonsocial($value);
                break;
            case 4:
                $this->setProveedorRfc($value);
                break;
            case 5:
                $this->setProveedorTelefono($value);
                break;
            case 6:
                $this->setProveedorCalle($value);
                break;
            case 7:
                $this->setProveedorNumero($value);
                break;
            case 8:
                $this->setProveedorInterior($value);
                break;
            case 9:
                $this->setProveedorColonia($value);
                break;
            case 10:
                $this->setProveedorCiudad($value);
                break;
            case 11:
                $this->setProveedorEstado($value);
                break;
            case 12:
                $this->setProveedorCodigopostal($value);
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
        $keys = ProveedorPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdproveedor($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdempresa($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setProveedorNombrecomercial($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setProveedorRazonsocial($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setProveedorRfc($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setProveedorTelefono($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setProveedorCalle($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setProveedorNumero($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setProveedorInterior($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setProveedorColonia($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setProveedorCiudad($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setProveedorEstado($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setProveedorCodigopostal($arr[$keys[12]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ProveedorPeer::DATABASE_NAME);

        if ($this->isColumnModified(ProveedorPeer::IDPROVEEDOR)) $criteria->add(ProveedorPeer::IDPROVEEDOR, $this->idproveedor);
        if ($this->isColumnModified(ProveedorPeer::IDEMPRESA)) $criteria->add(ProveedorPeer::IDEMPRESA, $this->idempresa);
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_NOMBRECOMERCIAL)) $criteria->add(ProveedorPeer::PROVEEDOR_NOMBRECOMERCIAL, $this->proveedor_nombrecomercial);
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_RAZONSOCIAL)) $criteria->add(ProveedorPeer::PROVEEDOR_RAZONSOCIAL, $this->proveedor_razonsocial);
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_RFC)) $criteria->add(ProveedorPeer::PROVEEDOR_RFC, $this->proveedor_rfc);
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_TELEFONO)) $criteria->add(ProveedorPeer::PROVEEDOR_TELEFONO, $this->proveedor_telefono);
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_CALLE)) $criteria->add(ProveedorPeer::PROVEEDOR_CALLE, $this->proveedor_calle);
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_NUMERO)) $criteria->add(ProveedorPeer::PROVEEDOR_NUMERO, $this->proveedor_numero);
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_INTERIOR)) $criteria->add(ProveedorPeer::PROVEEDOR_INTERIOR, $this->proveedor_interior);
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_COLONIA)) $criteria->add(ProveedorPeer::PROVEEDOR_COLONIA, $this->proveedor_colonia);
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_CIUDAD)) $criteria->add(ProveedorPeer::PROVEEDOR_CIUDAD, $this->proveedor_ciudad);
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_ESTADO)) $criteria->add(ProveedorPeer::PROVEEDOR_ESTADO, $this->proveedor_estado);
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_CODIGOPOSTAL)) $criteria->add(ProveedorPeer::PROVEEDOR_CODIGOPOSTAL, $this->proveedor_codigopostal);

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
        $criteria = new Criteria(ProveedorPeer::DATABASE_NAME);
        $criteria->add(ProveedorPeer::IDPROVEEDOR, $this->idproveedor);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdproveedor();
    }

    /**
     * Generic method to set the primary key (idproveedor column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdproveedor($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdproveedor();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Proveedor (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdempresa($this->getIdempresa());
        $copyObj->setProveedorNombrecomercial($this->getProveedorNombrecomercial());
        $copyObj->setProveedorRazonsocial($this->getProveedorRazonsocial());
        $copyObj->setProveedorRfc($this->getProveedorRfc());
        $copyObj->setProveedorTelefono($this->getProveedorTelefono());
        $copyObj->setProveedorCalle($this->getProveedorCalle());
        $copyObj->setProveedorNumero($this->getProveedorNumero());
        $copyObj->setProveedorInterior($this->getProveedorInterior());
        $copyObj->setProveedorColonia($this->getProveedorColonia());
        $copyObj->setProveedorCiudad($this->getProveedorCiudad());
        $copyObj->setProveedorEstado($this->getProveedorEstado());
        $copyObj->setProveedorCodigopostal($this->getProveedorCodigopostal());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCompras() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCompra($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdproveedor(NULL); // this is a auto-increment column, so set to default value
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
     * @return Proveedor Clone of current object.
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
     * @return ProveedorPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ProveedorPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Empresa object.
     *
     * @param                  Empresa $v
     * @return Proveedor The current object (for fluent API support)
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
            $v->addProveedor($this);
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
                $this->aEmpresa->addProveedors($this);
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
        if ('Compra' == $relationName) {
            $this->initCompras();
        }
    }

    /**
     * Clears out the collCompras collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Proveedor The current object (for fluent API support)
     * @see        addCompras()
     */
    public function clearCompras()
    {
        $this->collCompras = null; // important to set this to null since that means it is uninitialized
        $this->collComprasPartial = null;

        return $this;
    }

    /**
     * reset is the collCompras collection loaded partially
     *
     * @return void
     */
    public function resetPartialCompras($v = true)
    {
        $this->collComprasPartial = $v;
    }

    /**
     * Initializes the collCompras collection.
     *
     * By default this just sets the collCompras collection to an empty array (like clearcollCompras());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCompras($overrideExisting = true)
    {
        if (null !== $this->collCompras && !$overrideExisting) {
            return;
        }
        $this->collCompras = new PropelObjectCollection();
        $this->collCompras->setModel('Compra');
    }

    /**
     * Gets an array of Compra objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Proveedor is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Compra[] List of Compra objects
     * @throws PropelException
     */
    public function getCompras($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collComprasPartial && !$this->isNew();
        if (null === $this->collCompras || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCompras) {
                // return empty collection
                $this->initCompras();
            } else {
                $collCompras = CompraQuery::create(null, $criteria)
                    ->filterByProveedor($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collComprasPartial && count($collCompras)) {
                      $this->initCompras(false);

                      foreach ($collCompras as $obj) {
                        if (false == $this->collCompras->contains($obj)) {
                          $this->collCompras->append($obj);
                        }
                      }

                      $this->collComprasPartial = true;
                    }

                    $collCompras->getInternalIterator()->rewind();

                    return $collCompras;
                }

                if ($partial && $this->collCompras) {
                    foreach ($this->collCompras as $obj) {
                        if ($obj->isNew()) {
                            $collCompras[] = $obj;
                        }
                    }
                }

                $this->collCompras = $collCompras;
                $this->collComprasPartial = false;
            }
        }

        return $this->collCompras;
    }

    /**
     * Sets a collection of Compra objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $compras A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Proveedor The current object (for fluent API support)
     */
    public function setCompras(PropelCollection $compras, PropelPDO $con = null)
    {
        $comprasToDelete = $this->getCompras(new Criteria(), $con)->diff($compras);


        $this->comprasScheduledForDeletion = $comprasToDelete;

        foreach ($comprasToDelete as $compraRemoved) {
            $compraRemoved->setProveedor(null);
        }

        $this->collCompras = null;
        foreach ($compras as $compra) {
            $this->addCompra($compra);
        }

        $this->collCompras = $compras;
        $this->collComprasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Compra objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Compra objects.
     * @throws PropelException
     */
    public function countCompras(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collComprasPartial && !$this->isNew();
        if (null === $this->collCompras || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCompras) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCompras());
            }
            $query = CompraQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProveedor($this)
                ->count($con);
        }

        return count($this->collCompras);
    }

    /**
     * Method called to associate a Compra object to this object
     * through the Compra foreign key attribute.
     *
     * @param    Compra $l Compra
     * @return Proveedor The current object (for fluent API support)
     */
    public function addCompra(Compra $l)
    {
        if ($this->collCompras === null) {
            $this->initCompras();
            $this->collComprasPartial = true;
        }

        if (!in_array($l, $this->collCompras->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCompra($l);

            if ($this->comprasScheduledForDeletion and $this->comprasScheduledForDeletion->contains($l)) {
                $this->comprasScheduledForDeletion->remove($this->comprasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Compra $compra The compra object to add.
     */
    protected function doAddCompra($compra)
    {
        $this->collCompras[]= $compra;
        $compra->setProveedor($this);
    }

    /**
     * @param	Compra $compra The compra object to remove.
     * @return Proveedor The current object (for fluent API support)
     */
    public function removeCompra($compra)
    {
        if ($this->getCompras()->contains($compra)) {
            $this->collCompras->remove($this->collCompras->search($compra));
            if (null === $this->comprasScheduledForDeletion) {
                $this->comprasScheduledForDeletion = clone $this->collCompras;
                $this->comprasScheduledForDeletion->clear();
            }
            $this->comprasScheduledForDeletion[]= clone $compra;
            $compra->setProveedor(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Proveedor is new, it will return
     * an empty collection; or if this Proveedor has previously
     * been saved, it will retrieve related Compras from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Proveedor.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Compra[] List of Compra objects
     */
    public function getComprasJoinAlmacen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CompraQuery::create(null, $criteria);
        $query->joinWith('Almacen', $join_behavior);

        return $this->getCompras($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Proveedor is new, it will return
     * an empty collection; or if this Proveedor has previously
     * been saved, it will retrieve related Compras from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Proveedor.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Compra[] List of Compra objects
     */
    public function getComprasJoinUsuarioRelatedByIdauditor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CompraQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdauditor', $join_behavior);

        return $this->getCompras($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Proveedor is new, it will return
     * an empty collection; or if this Proveedor has previously
     * been saved, it will retrieve related Compras from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Proveedor.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Compra[] List of Compra objects
     */
    public function getComprasJoinEmpresa($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CompraQuery::create(null, $criteria);
        $query->joinWith('Empresa', $join_behavior);

        return $this->getCompras($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Proveedor is new, it will return
     * an empty collection; or if this Proveedor has previously
     * been saved, it will retrieve related Compras from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Proveedor.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Compra[] List of Compra objects
     */
    public function getComprasJoinSucursal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CompraQuery::create(null, $criteria);
        $query->joinWith('Sucursal', $join_behavior);

        return $this->getCompras($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Proveedor is new, it will return
     * an empty collection; or if this Proveedor has previously
     * been saved, it will retrieve related Compras from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Proveedor.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Compra[] List of Compra objects
     */
    public function getComprasJoinUsuarioRelatedByIdusuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CompraQuery::create(null, $criteria);
        $query->joinWith('UsuarioRelatedByIdusuario', $join_behavior);

        return $this->getCompras($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idproveedor = null;
        $this->idempresa = null;
        $this->proveedor_nombrecomercial = null;
        $this->proveedor_razonsocial = null;
        $this->proveedor_rfc = null;
        $this->proveedor_telefono = null;
        $this->proveedor_calle = null;
        $this->proveedor_numero = null;
        $this->proveedor_interior = null;
        $this->proveedor_colonia = null;
        $this->proveedor_ciudad = null;
        $this->proveedor_estado = null;
        $this->proveedor_codigopostal = null;
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
            if ($this->collCompras) {
                foreach ($this->collCompras as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aEmpresa instanceof Persistent) {
              $this->aEmpresa->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCompras instanceof PropelCollection) {
            $this->collCompras->clearIterator();
        }
        $this->collCompras = null;
        $this->aEmpresa = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ProveedorPeer::DEFAULT_STRING_FORMAT);
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
