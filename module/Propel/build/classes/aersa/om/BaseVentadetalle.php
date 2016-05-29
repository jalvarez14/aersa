<?php


/**
 * Base class that represents a row from the 'ventadetalle' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseVentadetalle extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'VentadetallePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        VentadetallePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idventadetalle field.
     * @var        int
     */
    protected $idventadetalle;

    /**
     * The value for the idventa field.
     * @var        int
     */
    protected $idventa;

    /**
     * The value for the idalmacen field.
     * @var        int
     */
    protected $idalmacen;

    /**
     * The value for the idproducto field.
     * @var        int
     */
    protected $idproducto;

    /**
     * The value for the ventadetalle_cantidad field.
     * @var        double
     */
    protected $ventadetalle_cantidad;

    /**
     * The value for the ventadetalle_subtotal field.
     * @var        string
     */
    protected $ventadetalle_subtotal;

    /**
     * The value for the idpadre field.
     * @var        int
     */
    protected $idpadre;

    /**
     * The value for the ventadetalle_revisada field.
     * @var        boolean
     */
    protected $ventadetalle_revisada;

    /**
     * @var        Almacen
     */
    protected $aAlmacen;

    /**
     * @var        Ventadetalle
     */
    protected $aVentadetalleRelatedByIdpadre;

    /**
     * @var        Producto
     */
    protected $aProducto;

    /**
     * @var        Venta
     */
    protected $aVenta;

    /**
     * @var        PropelObjectCollection|Ventadetalle[] Collection to store aggregation of Ventadetalle objects.
     */
    protected $collVentadetallesRelatedByIdventadetalle;
    protected $collVentadetallesRelatedByIdventadetallePartial;

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
    protected $ventadetallesRelatedByIdventadetalleScheduledForDeletion = null;

    /**
     * Get the [idventadetalle] column value.
     *
     * @return int
     */
    public function getIdventadetalle()
    {

        return $this->idventadetalle;
    }

    /**
     * Get the [idventa] column value.
     *
     * @return int
     */
    public function getIdventa()
    {

        return $this->idventa;
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
     * Get the [idproducto] column value.
     *
     * @return int
     */
    public function getIdproducto()
    {

        return $this->idproducto;
    }

    /**
     * Get the [ventadetalle_cantidad] column value.
     *
     * @return double
     */
    public function getVentadetalleCantidad()
    {

        return $this->ventadetalle_cantidad;
    }

    /**
     * Get the [ventadetalle_subtotal] column value.
     *
     * @return string
     */
    public function getVentadetalleSubtotal()
    {

        return $this->ventadetalle_subtotal;
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
     * Get the [ventadetalle_revisada] column value.
     *
     * @return boolean
     */
    public function getVentadetalleRevisada()
    {

        return $this->ventadetalle_revisada;
    }

    /**
     * Set the value of [idventadetalle] column.
     *
     * @param  int $v new value
     * @return Ventadetalle The current object (for fluent API support)
     */
    public function setIdventadetalle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idventadetalle !== $v) {
            $this->idventadetalle = $v;
            $this->modifiedColumns[] = VentadetallePeer::IDVENTADETALLE;
        }


        return $this;
    } // setIdventadetalle()

    /**
     * Set the value of [idventa] column.
     *
     * @param  int $v new value
     * @return Ventadetalle The current object (for fluent API support)
     */
    public function setIdventa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idventa !== $v) {
            $this->idventa = $v;
            $this->modifiedColumns[] = VentadetallePeer::IDVENTA;
        }

        if ($this->aVenta !== null && $this->aVenta->getIdventa() !== $v) {
            $this->aVenta = null;
        }


        return $this;
    } // setIdventa()

    /**
     * Set the value of [idalmacen] column.
     *
     * @param  int $v new value
     * @return Ventadetalle The current object (for fluent API support)
     */
    public function setIdalmacen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idalmacen !== $v) {
            $this->idalmacen = $v;
            $this->modifiedColumns[] = VentadetallePeer::IDALMACEN;
        }

        if ($this->aAlmacen !== null && $this->aAlmacen->getIdalmacen() !== $v) {
            $this->aAlmacen = null;
        }


        return $this;
    } // setIdalmacen()

    /**
     * Set the value of [idproducto] column.
     *
     * @param  int $v new value
     * @return Ventadetalle The current object (for fluent API support)
     */
    public function setIdproducto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproducto !== $v) {
            $this->idproducto = $v;
            $this->modifiedColumns[] = VentadetallePeer::IDPRODUCTO;
        }

        if ($this->aProducto !== null && $this->aProducto->getIdproducto() !== $v) {
            $this->aProducto = null;
        }


        return $this;
    } // setIdproducto()

    /**
     * Set the value of [ventadetalle_cantidad] column.
     *
     * @param  double $v new value
     * @return Ventadetalle The current object (for fluent API support)
     */
    public function setVentadetalleCantidad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ventadetalle_cantidad !== $v) {
            $this->ventadetalle_cantidad = $v;
            $this->modifiedColumns[] = VentadetallePeer::VENTADETALLE_CANTIDAD;
        }


        return $this;
    } // setVentadetalleCantidad()

    /**
     * Set the value of [ventadetalle_subtotal] column.
     *
     * @param  string $v new value
     * @return Ventadetalle The current object (for fluent API support)
     */
    public function setVentadetalleSubtotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ventadetalle_subtotal !== $v) {
            $this->ventadetalle_subtotal = $v;
            $this->modifiedColumns[] = VentadetallePeer::VENTADETALLE_SUBTOTAL;
        }


        return $this;
    } // setVentadetalleSubtotal()

    /**
     * Set the value of [idpadre] column.
     *
     * @param  int $v new value
     * @return Ventadetalle The current object (for fluent API support)
     */
    public function setIdpadre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idpadre !== $v) {
            $this->idpadre = $v;
            $this->modifiedColumns[] = VentadetallePeer::IDPADRE;
        }

        if ($this->aVentadetalleRelatedByIdpadre !== null && $this->aVentadetalleRelatedByIdpadre->getIdventadetalle() !== $v) {
            $this->aVentadetalleRelatedByIdpadre = null;
        }


        return $this;
    } // setIdpadre()

    /**
     * Sets the value of the [ventadetalle_revisada] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Ventadetalle The current object (for fluent API support)
     */
    public function setVentadetalleRevisada($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->ventadetalle_revisada !== $v) {
            $this->ventadetalle_revisada = $v;
            $this->modifiedColumns[] = VentadetallePeer::VENTADETALLE_REVISADA;
        }


        return $this;
    } // setVentadetalleRevisada()

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

            $this->idventadetalle = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idventa = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idalmacen = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->idproducto = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->ventadetalle_cantidad = ($row[$startcol + 4] !== null) ? (double) $row[$startcol + 4] : null;
            $this->ventadetalle_subtotal = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->idpadre = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->ventadetalle_revisada = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = VentadetallePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Ventadetalle object", $e);
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

        if ($this->aVenta !== null && $this->idventa !== $this->aVenta->getIdventa()) {
            $this->aVenta = null;
        }
        if ($this->aAlmacen !== null && $this->idalmacen !== $this->aAlmacen->getIdalmacen()) {
            $this->aAlmacen = null;
        }
        if ($this->aProducto !== null && $this->idproducto !== $this->aProducto->getIdproducto()) {
            $this->aProducto = null;
        }
        if ($this->aVentadetalleRelatedByIdpadre !== null && $this->idpadre !== $this->aVentadetalleRelatedByIdpadre->getIdventadetalle()) {
            $this->aVentadetalleRelatedByIdpadre = null;
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
            $con = Propel::getConnection(VentadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = VentadetallePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aAlmacen = null;
            $this->aVentadetalleRelatedByIdpadre = null;
            $this->aProducto = null;
            $this->aVenta = null;
            $this->collVentadetallesRelatedByIdventadetalle = null;

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
            $con = Propel::getConnection(VentadetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = VentadetalleQuery::create()
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
            $con = Propel::getConnection(VentadetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                VentadetallePeer::addInstanceToPool($this);
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

            if ($this->aVentadetalleRelatedByIdpadre !== null) {
                if ($this->aVentadetalleRelatedByIdpadre->isModified() || $this->aVentadetalleRelatedByIdpadre->isNew()) {
                    $affectedRows += $this->aVentadetalleRelatedByIdpadre->save($con);
                }
                $this->setVentadetalleRelatedByIdpadre($this->aVentadetalleRelatedByIdpadre);
            }

            if ($this->aProducto !== null) {
                if ($this->aProducto->isModified() || $this->aProducto->isNew()) {
                    $affectedRows += $this->aProducto->save($con);
                }
                $this->setProducto($this->aProducto);
            }

            if ($this->aVenta !== null) {
                if ($this->aVenta->isModified() || $this->aVenta->isNew()) {
                    $affectedRows += $this->aVenta->save($con);
                }
                $this->setVenta($this->aVenta);
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

            if ($this->ventadetallesRelatedByIdventadetalleScheduledForDeletion !== null) {
                if (!$this->ventadetallesRelatedByIdventadetalleScheduledForDeletion->isEmpty()) {
                    VentadetalleQuery::create()
                        ->filterByPrimaryKeys($this->ventadetallesRelatedByIdventadetalleScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->ventadetallesRelatedByIdventadetalleScheduledForDeletion = null;
                }
            }

            if ($this->collVentadetallesRelatedByIdventadetalle !== null) {
                foreach ($this->collVentadetallesRelatedByIdventadetalle as $referrerFK) {
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

        $this->modifiedColumns[] = VentadetallePeer::IDVENTADETALLE;
        if (null !== $this->idventadetalle) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . VentadetallePeer::IDVENTADETALLE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(VentadetallePeer::IDVENTADETALLE)) {
            $modifiedColumns[':p' . $index++]  = '`idventadetalle`';
        }
        if ($this->isColumnModified(VentadetallePeer::IDVENTA)) {
            $modifiedColumns[':p' . $index++]  = '`idventa`';
        }
        if ($this->isColumnModified(VentadetallePeer::IDALMACEN)) {
            $modifiedColumns[':p' . $index++]  = '`idalmacen`';
        }
        if ($this->isColumnModified(VentadetallePeer::IDPRODUCTO)) {
            $modifiedColumns[':p' . $index++]  = '`idproducto`';
        }
        if ($this->isColumnModified(VentadetallePeer::VENTADETALLE_CANTIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`ventadetalle_cantidad`';
        }
        if ($this->isColumnModified(VentadetallePeer::VENTADETALLE_SUBTOTAL)) {
            $modifiedColumns[':p' . $index++]  = '`ventadetalle_subtotal`';
        }
        if ($this->isColumnModified(VentadetallePeer::IDPADRE)) {
            $modifiedColumns[':p' . $index++]  = '`idpadre`';
        }
        if ($this->isColumnModified(VentadetallePeer::VENTADETALLE_REVISADA)) {
            $modifiedColumns[':p' . $index++]  = '`ventadetalle_revisada`';
        }

        $sql = sprintf(
            'INSERT INTO `ventadetalle` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idventadetalle`':
                        $stmt->bindValue($identifier, $this->idventadetalle, PDO::PARAM_INT);
                        break;
                    case '`idventa`':
                        $stmt->bindValue($identifier, $this->idventa, PDO::PARAM_INT);
                        break;
                    case '`idalmacen`':
                        $stmt->bindValue($identifier, $this->idalmacen, PDO::PARAM_INT);
                        break;
                    case '`idproducto`':
                        $stmt->bindValue($identifier, $this->idproducto, PDO::PARAM_INT);
                        break;
                    case '`ventadetalle_cantidad`':
                        $stmt->bindValue($identifier, $this->ventadetalle_cantidad, PDO::PARAM_STR);
                        break;
                    case '`ventadetalle_subtotal`':
                        $stmt->bindValue($identifier, $this->ventadetalle_subtotal, PDO::PARAM_STR);
                        break;
                    case '`idpadre`':
                        $stmt->bindValue($identifier, $this->idpadre, PDO::PARAM_INT);
                        break;
                    case '`ventadetalle_revisada`':
                        $stmt->bindValue($identifier, (int) $this->ventadetalle_revisada, PDO::PARAM_INT);
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
        $this->setIdventadetalle($pk);

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

            if ($this->aVentadetalleRelatedByIdpadre !== null) {
                if (!$this->aVentadetalleRelatedByIdpadre->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aVentadetalleRelatedByIdpadre->getValidationFailures());
                }
            }

            if ($this->aProducto !== null) {
                if (!$this->aProducto->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aProducto->getValidationFailures());
                }
            }

            if ($this->aVenta !== null) {
                if (!$this->aVenta->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aVenta->getValidationFailures());
                }
            }


            if (($retval = VentadetallePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collVentadetallesRelatedByIdventadetalle !== null) {
                    foreach ($this->collVentadetallesRelatedByIdventadetalle as $referrerFK) {
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
        $pos = VentadetallePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdventadetalle();
                break;
            case 1:
                return $this->getIdventa();
                break;
            case 2:
                return $this->getIdalmacen();
                break;
            case 3:
                return $this->getIdproducto();
                break;
            case 4:
                return $this->getVentadetalleCantidad();
                break;
            case 5:
                return $this->getVentadetalleSubtotal();
                break;
            case 6:
                return $this->getIdpadre();
                break;
            case 7:
                return $this->getVentadetalleRevisada();
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
        if (isset($alreadyDumpedObjects['Ventadetalle'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Ventadetalle'][$this->getPrimaryKey()] = true;
        $keys = VentadetallePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdventadetalle(),
            $keys[1] => $this->getIdventa(),
            $keys[2] => $this->getIdalmacen(),
            $keys[3] => $this->getIdproducto(),
            $keys[4] => $this->getVentadetalleCantidad(),
            $keys[5] => $this->getVentadetalleSubtotal(),
            $keys[6] => $this->getIdpadre(),
            $keys[7] => $this->getVentadetalleRevisada(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aAlmacen) {
                $result['Almacen'] = $this->aAlmacen->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aVentadetalleRelatedByIdpadre) {
                $result['VentadetalleRelatedByIdpadre'] = $this->aVentadetalleRelatedByIdpadre->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aProducto) {
                $result['Producto'] = $this->aProducto->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aVenta) {
                $result['Venta'] = $this->aVenta->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collVentadetallesRelatedByIdventadetalle) {
                $result['VentadetallesRelatedByIdventadetalle'] = $this->collVentadetallesRelatedByIdventadetalle->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = VentadetallePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdventadetalle($value);
                break;
            case 1:
                $this->setIdventa($value);
                break;
            case 2:
                $this->setIdalmacen($value);
                break;
            case 3:
                $this->setIdproducto($value);
                break;
            case 4:
                $this->setVentadetalleCantidad($value);
                break;
            case 5:
                $this->setVentadetalleSubtotal($value);
                break;
            case 6:
                $this->setIdpadre($value);
                break;
            case 7:
                $this->setVentadetalleRevisada($value);
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
        $keys = VentadetallePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdventadetalle($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdventa($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdalmacen($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdproducto($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setVentadetalleCantidad($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setVentadetalleSubtotal($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdpadre($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setVentadetalleRevisada($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(VentadetallePeer::DATABASE_NAME);

        if ($this->isColumnModified(VentadetallePeer::IDVENTADETALLE)) $criteria->add(VentadetallePeer::IDVENTADETALLE, $this->idventadetalle);
        if ($this->isColumnModified(VentadetallePeer::IDVENTA)) $criteria->add(VentadetallePeer::IDVENTA, $this->idventa);
        if ($this->isColumnModified(VentadetallePeer::IDALMACEN)) $criteria->add(VentadetallePeer::IDALMACEN, $this->idalmacen);
        if ($this->isColumnModified(VentadetallePeer::IDPRODUCTO)) $criteria->add(VentadetallePeer::IDPRODUCTO, $this->idproducto);
        if ($this->isColumnModified(VentadetallePeer::VENTADETALLE_CANTIDAD)) $criteria->add(VentadetallePeer::VENTADETALLE_CANTIDAD, $this->ventadetalle_cantidad);
        if ($this->isColumnModified(VentadetallePeer::VENTADETALLE_SUBTOTAL)) $criteria->add(VentadetallePeer::VENTADETALLE_SUBTOTAL, $this->ventadetalle_subtotal);
        if ($this->isColumnModified(VentadetallePeer::IDPADRE)) $criteria->add(VentadetallePeer::IDPADRE, $this->idpadre);
        if ($this->isColumnModified(VentadetallePeer::VENTADETALLE_REVISADA)) $criteria->add(VentadetallePeer::VENTADETALLE_REVISADA, $this->ventadetalle_revisada);

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
        $criteria = new Criteria(VentadetallePeer::DATABASE_NAME);
        $criteria->add(VentadetallePeer::IDVENTADETALLE, $this->idventadetalle);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdventadetalle();
    }

    /**
     * Generic method to set the primary key (idventadetalle column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdventadetalle($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdventadetalle();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Ventadetalle (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdventa($this->getIdventa());
        $copyObj->setIdalmacen($this->getIdalmacen());
        $copyObj->setIdproducto($this->getIdproducto());
        $copyObj->setVentadetalleCantidad($this->getVentadetalleCantidad());
        $copyObj->setVentadetalleSubtotal($this->getVentadetalleSubtotal());
        $copyObj->setIdpadre($this->getIdpadre());
        $copyObj->setVentadetalleRevisada($this->getVentadetalleRevisada());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getVentadetallesRelatedByIdventadetalle() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addVentadetalleRelatedByIdventadetalle($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdventadetalle(NULL); // this is a auto-increment column, so set to default value
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
     * @return Ventadetalle Clone of current object.
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
     * @return VentadetallePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new VentadetallePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Almacen object.
     *
     * @param                  Almacen $v
     * @return Ventadetalle The current object (for fluent API support)
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
            $v->addVentadetalle($this);
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
                $this->aAlmacen->addVentadetalles($this);
             */
        }

        return $this->aAlmacen;
    }

    /**
     * Declares an association between this object and a Ventadetalle object.
     *
     * @param                  Ventadetalle $v
     * @return Ventadetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setVentadetalleRelatedByIdpadre(Ventadetalle $v = null)
    {
        if ($v === null) {
            $this->setIdpadre(NULL);
        } else {
            $this->setIdpadre($v->getIdventadetalle());
        }

        $this->aVentadetalleRelatedByIdpadre = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Ventadetalle object, it will not be re-added.
        if ($v !== null) {
            $v->addVentadetalleRelatedByIdventadetalle($this);
        }


        return $this;
    }


    /**
     * Get the associated Ventadetalle object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Ventadetalle The associated Ventadetalle object.
     * @throws PropelException
     */
    public function getVentadetalleRelatedByIdpadre(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aVentadetalleRelatedByIdpadre === null && ($this->idpadre !== null) && $doQuery) {
            $this->aVentadetalleRelatedByIdpadre = VentadetalleQuery::create()->findPk($this->idpadre, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aVentadetalleRelatedByIdpadre->addVentadetallesRelatedByIdventadetalle($this);
             */
        }

        return $this->aVentadetalleRelatedByIdpadre;
    }

    /**
     * Declares an association between this object and a Producto object.
     *
     * @param                  Producto $v
     * @return Ventadetalle The current object (for fluent API support)
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
            $v->addVentadetalle($this);
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
                $this->aProducto->addVentadetalles($this);
             */
        }

        return $this->aProducto;
    }

    /**
     * Declares an association between this object and a Venta object.
     *
     * @param                  Venta $v
     * @return Ventadetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setVenta(Venta $v = null)
    {
        if ($v === null) {
            $this->setIdventa(NULL);
        } else {
            $this->setIdventa($v->getIdventa());
        }

        $this->aVenta = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Venta object, it will not be re-added.
        if ($v !== null) {
            $v->addVentadetalle($this);
        }


        return $this;
    }


    /**
     * Get the associated Venta object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Venta The associated Venta object.
     * @throws PropelException
     */
    public function getVenta(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aVenta === null && ($this->idventa !== null) && $doQuery) {
            $this->aVenta = VentaQuery::create()->findPk($this->idventa, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aVenta->addVentadetalles($this);
             */
        }

        return $this->aVenta;
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
        if ('VentadetalleRelatedByIdventadetalle' == $relationName) {
            $this->initVentadetallesRelatedByIdventadetalle();
        }
    }

    /**
     * Clears out the collVentadetallesRelatedByIdventadetalle collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Ventadetalle The current object (for fluent API support)
     * @see        addVentadetallesRelatedByIdventadetalle()
     */
    public function clearVentadetallesRelatedByIdventadetalle()
    {
        $this->collVentadetallesRelatedByIdventadetalle = null; // important to set this to null since that means it is uninitialized
        $this->collVentadetallesRelatedByIdventadetallePartial = null;

        return $this;
    }

    /**
     * reset is the collVentadetallesRelatedByIdventadetalle collection loaded partially
     *
     * @return void
     */
    public function resetPartialVentadetallesRelatedByIdventadetalle($v = true)
    {
        $this->collVentadetallesRelatedByIdventadetallePartial = $v;
    }

    /**
     * Initializes the collVentadetallesRelatedByIdventadetalle collection.
     *
     * By default this just sets the collVentadetallesRelatedByIdventadetalle collection to an empty array (like clearcollVentadetallesRelatedByIdventadetalle());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initVentadetallesRelatedByIdventadetalle($overrideExisting = true)
    {
        if (null !== $this->collVentadetallesRelatedByIdventadetalle && !$overrideExisting) {
            return;
        }
        $this->collVentadetallesRelatedByIdventadetalle = new PropelObjectCollection();
        $this->collVentadetallesRelatedByIdventadetalle->setModel('Ventadetalle');
    }

    /**
     * Gets an array of Ventadetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Ventadetalle is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Ventadetalle[] List of Ventadetalle objects
     * @throws PropelException
     */
    public function getVentadetallesRelatedByIdventadetalle($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collVentadetallesRelatedByIdventadetallePartial && !$this->isNew();
        if (null === $this->collVentadetallesRelatedByIdventadetalle || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collVentadetallesRelatedByIdventadetalle) {
                // return empty collection
                $this->initVentadetallesRelatedByIdventadetalle();
            } else {
                $collVentadetallesRelatedByIdventadetalle = VentadetalleQuery::create(null, $criteria)
                    ->filterByVentadetalleRelatedByIdpadre($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collVentadetallesRelatedByIdventadetallePartial && count($collVentadetallesRelatedByIdventadetalle)) {
                      $this->initVentadetallesRelatedByIdventadetalle(false);

                      foreach ($collVentadetallesRelatedByIdventadetalle as $obj) {
                        if (false == $this->collVentadetallesRelatedByIdventadetalle->contains($obj)) {
                          $this->collVentadetallesRelatedByIdventadetalle->append($obj);
                        }
                      }

                      $this->collVentadetallesRelatedByIdventadetallePartial = true;
                    }

                    $collVentadetallesRelatedByIdventadetalle->getInternalIterator()->rewind();

                    return $collVentadetallesRelatedByIdventadetalle;
                }

                if ($partial && $this->collVentadetallesRelatedByIdventadetalle) {
                    foreach ($this->collVentadetallesRelatedByIdventadetalle as $obj) {
                        if ($obj->isNew()) {
                            $collVentadetallesRelatedByIdventadetalle[] = $obj;
                        }
                    }
                }

                $this->collVentadetallesRelatedByIdventadetalle = $collVentadetallesRelatedByIdventadetalle;
                $this->collVentadetallesRelatedByIdventadetallePartial = false;
            }
        }

        return $this->collVentadetallesRelatedByIdventadetalle;
    }

    /**
     * Sets a collection of VentadetalleRelatedByIdventadetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ventadetallesRelatedByIdventadetalle A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Ventadetalle The current object (for fluent API support)
     */
    public function setVentadetallesRelatedByIdventadetalle(PropelCollection $ventadetallesRelatedByIdventadetalle, PropelPDO $con = null)
    {
        $ventadetallesRelatedByIdventadetalleToDelete = $this->getVentadetallesRelatedByIdventadetalle(new Criteria(), $con)->diff($ventadetallesRelatedByIdventadetalle);


        $this->ventadetallesRelatedByIdventadetalleScheduledForDeletion = $ventadetallesRelatedByIdventadetalleToDelete;

        foreach ($ventadetallesRelatedByIdventadetalleToDelete as $ventadetalleRelatedByIdventadetalleRemoved) {
            $ventadetalleRelatedByIdventadetalleRemoved->setVentadetalleRelatedByIdpadre(null);
        }

        $this->collVentadetallesRelatedByIdventadetalle = null;
        foreach ($ventadetallesRelatedByIdventadetalle as $ventadetalleRelatedByIdventadetalle) {
            $this->addVentadetalleRelatedByIdventadetalle($ventadetalleRelatedByIdventadetalle);
        }

        $this->collVentadetallesRelatedByIdventadetalle = $ventadetallesRelatedByIdventadetalle;
        $this->collVentadetallesRelatedByIdventadetallePartial = false;

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
    public function countVentadetallesRelatedByIdventadetalle(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collVentadetallesRelatedByIdventadetallePartial && !$this->isNew();
        if (null === $this->collVentadetallesRelatedByIdventadetalle || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collVentadetallesRelatedByIdventadetalle) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getVentadetallesRelatedByIdventadetalle());
            }
            $query = VentadetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByVentadetalleRelatedByIdpadre($this)
                ->count($con);
        }

        return count($this->collVentadetallesRelatedByIdventadetalle);
    }

    /**
     * Method called to associate a Ventadetalle object to this object
     * through the Ventadetalle foreign key attribute.
     *
     * @param    Ventadetalle $l Ventadetalle
     * @return Ventadetalle The current object (for fluent API support)
     */
    public function addVentadetalleRelatedByIdventadetalle(Ventadetalle $l)
    {
        if ($this->collVentadetallesRelatedByIdventadetalle === null) {
            $this->initVentadetallesRelatedByIdventadetalle();
            $this->collVentadetallesRelatedByIdventadetallePartial = true;
        }

        if (!in_array($l, $this->collVentadetallesRelatedByIdventadetalle->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddVentadetalleRelatedByIdventadetalle($l);

            if ($this->ventadetallesRelatedByIdventadetalleScheduledForDeletion and $this->ventadetallesRelatedByIdventadetalleScheduledForDeletion->contains($l)) {
                $this->ventadetallesRelatedByIdventadetalleScheduledForDeletion->remove($this->ventadetallesRelatedByIdventadetalleScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	VentadetalleRelatedByIdventadetalle $ventadetalleRelatedByIdventadetalle The ventadetalleRelatedByIdventadetalle object to add.
     */
    protected function doAddVentadetalleRelatedByIdventadetalle($ventadetalleRelatedByIdventadetalle)
    {
        $this->collVentadetallesRelatedByIdventadetalle[]= $ventadetalleRelatedByIdventadetalle;
        $ventadetalleRelatedByIdventadetalle->setVentadetalleRelatedByIdpadre($this);
    }

    /**
     * @param	VentadetalleRelatedByIdventadetalle $ventadetalleRelatedByIdventadetalle The ventadetalleRelatedByIdventadetalle object to remove.
     * @return Ventadetalle The current object (for fluent API support)
     */
    public function removeVentadetalleRelatedByIdventadetalle($ventadetalleRelatedByIdventadetalle)
    {
        if ($this->getVentadetallesRelatedByIdventadetalle()->contains($ventadetalleRelatedByIdventadetalle)) {
            $this->collVentadetallesRelatedByIdventadetalle->remove($this->collVentadetallesRelatedByIdventadetalle->search($ventadetalleRelatedByIdventadetalle));
            if (null === $this->ventadetallesRelatedByIdventadetalleScheduledForDeletion) {
                $this->ventadetallesRelatedByIdventadetalleScheduledForDeletion = clone $this->collVentadetallesRelatedByIdventadetalle;
                $this->ventadetallesRelatedByIdventadetalleScheduledForDeletion->clear();
            }
            $this->ventadetallesRelatedByIdventadetalleScheduledForDeletion[]= $ventadetalleRelatedByIdventadetalle;
            $ventadetalleRelatedByIdventadetalle->setVentadetalleRelatedByIdpadre(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Ventadetalle is new, it will return
     * an empty collection; or if this Ventadetalle has previously
     * been saved, it will retrieve related VentadetallesRelatedByIdventadetalle from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Ventadetalle.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ventadetalle[] List of Ventadetalle objects
     */
    public function getVentadetallesRelatedByIdventadetalleJoinAlmacen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VentadetalleQuery::create(null, $criteria);
        $query->joinWith('Almacen', $join_behavior);

        return $this->getVentadetallesRelatedByIdventadetalle($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Ventadetalle is new, it will return
     * an empty collection; or if this Ventadetalle has previously
     * been saved, it will retrieve related VentadetallesRelatedByIdventadetalle from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Ventadetalle.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ventadetalle[] List of Ventadetalle objects
     */
    public function getVentadetallesRelatedByIdventadetalleJoinProducto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VentadetalleQuery::create(null, $criteria);
        $query->joinWith('Producto', $join_behavior);

        return $this->getVentadetallesRelatedByIdventadetalle($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Ventadetalle is new, it will return
     * an empty collection; or if this Ventadetalle has previously
     * been saved, it will retrieve related VentadetallesRelatedByIdventadetalle from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Ventadetalle.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ventadetalle[] List of Ventadetalle objects
     */
    public function getVentadetallesRelatedByIdventadetalleJoinVenta($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VentadetalleQuery::create(null, $criteria);
        $query->joinWith('Venta', $join_behavior);

        return $this->getVentadetallesRelatedByIdventadetalle($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idventadetalle = null;
        $this->idventa = null;
        $this->idalmacen = null;
        $this->idproducto = null;
        $this->ventadetalle_cantidad = null;
        $this->ventadetalle_subtotal = null;
        $this->idpadre = null;
        $this->ventadetalle_revisada = null;
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
            if ($this->collVentadetallesRelatedByIdventadetalle) {
                foreach ($this->collVentadetallesRelatedByIdventadetalle as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aAlmacen instanceof Persistent) {
              $this->aAlmacen->clearAllReferences($deep);
            }
            if ($this->aVentadetalleRelatedByIdpadre instanceof Persistent) {
              $this->aVentadetalleRelatedByIdpadre->clearAllReferences($deep);
            }
            if ($this->aProducto instanceof Persistent) {
              $this->aProducto->clearAllReferences($deep);
            }
            if ($this->aVenta instanceof Persistent) {
              $this->aVenta->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collVentadetallesRelatedByIdventadetalle instanceof PropelCollection) {
            $this->collVentadetallesRelatedByIdventadetalle->clearIterator();
        }
        $this->collVentadetallesRelatedByIdventadetalle = null;
        $this->aAlmacen = null;
        $this->aVentadetalleRelatedByIdpadre = null;
        $this->aProducto = null;
        $this->aVenta = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(VentadetallePeer::DEFAULT_STRING_FORMAT);
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
