<?php


/**
 * Base class that represents a row from the 'contrarecibodetalle' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseContrarecibodetalle extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ContrarecibodetallePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ContrarecibodetallePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idcontrarecibodetalle field.
     * @var        int
     */
    protected $idcontrarecibodetalle;

    /**
     * The value for the idcontrarecibo field.
     * @var        int
     */
    protected $idcontrarecibo;

    /**
     * The value for the contrarecibodetalle_xml field.
     * @var        string
     */
    protected $contrarecibodetalle_xml;

    /**
     * The value for the contrarecibodetalle_pdf field.
     * @var        string
     */
    protected $contrarecibodetalle_pdf;

    /**
     * The value for the contrarecibodetalle_folio field.
     * @var        string
     */
    protected $contrarecibodetalle_folio;

    /**
     * The value for the contrarecibodetalle_cantidad field.
     * @var        string
     */
    protected $contrarecibodetalle_cantidad;

    /**
     * The value for the contrarecibodetalle_tipo field.
     * @var        string
     */
    protected $contrarecibodetalle_tipo;

    /**
     * The value for the contrarecibodetalle_pagado field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $contrarecibodetalle_pagado;

    /**
     * @var        Contrarecibo
     */
    protected $aContrarecibo;

    /**
     * @var        PropelObjectCollection|Pagocontrarecibo[] Collection to store aggregation of Pagocontrarecibo objects.
     */
    protected $collPagocontrarecibos;
    protected $collPagocontrarecibosPartial;

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
    protected $pagocontrarecibosScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->contrarecibodetalle_pagado = false;
    }

    /**
     * Initializes internal state of BaseContrarecibodetalle object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [idcontrarecibodetalle] column value.
     *
     * @return int
     */
    public function getIdcontrarecibodetalle()
    {

        return $this->idcontrarecibodetalle;
    }

    /**
     * Get the [idcontrarecibo] column value.
     *
     * @return int
     */
    public function getIdcontrarecibo()
    {

        return $this->idcontrarecibo;
    }

    /**
     * Get the [contrarecibodetalle_xml] column value.
     *
     * @return string
     */
    public function getContrarecibodetalleXml()
    {

        return $this->contrarecibodetalle_xml;
    }

    /**
     * Get the [contrarecibodetalle_pdf] column value.
     *
     * @return string
     */
    public function getContrarecibodetallePdf()
    {

        return $this->contrarecibodetalle_pdf;
    }

    /**
     * Get the [contrarecibodetalle_folio] column value.
     *
     * @return string
     */
    public function getContrarecibodetalleFolio()
    {

        return $this->contrarecibodetalle_folio;
    }

    /**
     * Get the [contrarecibodetalle_cantidad] column value.
     *
     * @return string
     */
    public function getContrarecibodetalleCantidad()
    {

        return $this->contrarecibodetalle_cantidad;
    }

    /**
     * Get the [contrarecibodetalle_tipo] column value.
     *
     * @return string
     */
    public function getContrarecibodetalleTipo()
    {

        return $this->contrarecibodetalle_tipo;
    }

    /**
     * Get the [contrarecibodetalle_pagado] column value.
     *
     * @return boolean
     */
    public function getContrarecibodetallePagado()
    {

        return $this->contrarecibodetalle_pagado;
    }

    /**
     * Set the value of [idcontrarecibodetalle] column.
     *
     * @param  int $v new value
     * @return Contrarecibodetalle The current object (for fluent API support)
     */
    public function setIdcontrarecibodetalle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcontrarecibodetalle !== $v) {
            $this->idcontrarecibodetalle = $v;
            $this->modifiedColumns[] = ContrarecibodetallePeer::IDCONTRARECIBODETALLE;
        }


        return $this;
    } // setIdcontrarecibodetalle()

    /**
     * Set the value of [idcontrarecibo] column.
     *
     * @param  int $v new value
     * @return Contrarecibodetalle The current object (for fluent API support)
     */
    public function setIdcontrarecibo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcontrarecibo !== $v) {
            $this->idcontrarecibo = $v;
            $this->modifiedColumns[] = ContrarecibodetallePeer::IDCONTRARECIBO;
        }

        if ($this->aContrarecibo !== null && $this->aContrarecibo->getIdcontrarecibo() !== $v) {
            $this->aContrarecibo = null;
        }


        return $this;
    } // setIdcontrarecibo()

    /**
     * Set the value of [contrarecibodetalle_xml] column.
     *
     * @param  string $v new value
     * @return Contrarecibodetalle The current object (for fluent API support)
     */
    public function setContrarecibodetalleXml($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->contrarecibodetalle_xml !== $v) {
            $this->contrarecibodetalle_xml = $v;
            $this->modifiedColumns[] = ContrarecibodetallePeer::CONTRARECIBODETALLE_XML;
        }


        return $this;
    } // setContrarecibodetalleXml()

    /**
     * Set the value of [contrarecibodetalle_pdf] column.
     *
     * @param  string $v new value
     * @return Contrarecibodetalle The current object (for fluent API support)
     */
    public function setContrarecibodetallePdf($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->contrarecibodetalle_pdf !== $v) {
            $this->contrarecibodetalle_pdf = $v;
            $this->modifiedColumns[] = ContrarecibodetallePeer::CONTRARECIBODETALLE_PDF;
        }


        return $this;
    } // setContrarecibodetallePdf()

    /**
     * Set the value of [contrarecibodetalle_folio] column.
     *
     * @param  string $v new value
     * @return Contrarecibodetalle The current object (for fluent API support)
     */
    public function setContrarecibodetalleFolio($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->contrarecibodetalle_folio !== $v) {
            $this->contrarecibodetalle_folio = $v;
            $this->modifiedColumns[] = ContrarecibodetallePeer::CONTRARECIBODETALLE_FOLIO;
        }


        return $this;
    } // setContrarecibodetalleFolio()

    /**
     * Set the value of [contrarecibodetalle_cantidad] column.
     *
     * @param  string $v new value
     * @return Contrarecibodetalle The current object (for fluent API support)
     */
    public function setContrarecibodetalleCantidad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->contrarecibodetalle_cantidad !== $v) {
            $this->contrarecibodetalle_cantidad = $v;
            $this->modifiedColumns[] = ContrarecibodetallePeer::CONTRARECIBODETALLE_CANTIDAD;
        }


        return $this;
    } // setContrarecibodetalleCantidad()

    /**
     * Set the value of [contrarecibodetalle_tipo] column.
     *
     * @param  string $v new value
     * @return Contrarecibodetalle The current object (for fluent API support)
     */
    public function setContrarecibodetalleTipo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->contrarecibodetalle_tipo !== $v) {
            $this->contrarecibodetalle_tipo = $v;
            $this->modifiedColumns[] = ContrarecibodetallePeer::CONTRARECIBODETALLE_TIPO;
        }


        return $this;
    } // setContrarecibodetalleTipo()

    /**
     * Sets the value of the [contrarecibodetalle_pagado] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Contrarecibodetalle The current object (for fluent API support)
     */
    public function setContrarecibodetallePagado($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->contrarecibodetalle_pagado !== $v) {
            $this->contrarecibodetalle_pagado = $v;
            $this->modifiedColumns[] = ContrarecibodetallePeer::CONTRARECIBODETALLE_PAGADO;
        }


        return $this;
    } // setContrarecibodetallePagado()

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
            if ($this->contrarecibodetalle_pagado !== false) {
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

            $this->idcontrarecibodetalle = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idcontrarecibo = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->contrarecibodetalle_xml = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->contrarecibodetalle_pdf = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->contrarecibodetalle_folio = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->contrarecibodetalle_cantidad = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->contrarecibodetalle_tipo = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->contrarecibodetalle_pagado = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = ContrarecibodetallePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Contrarecibodetalle object", $e);
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

        if ($this->aContrarecibo !== null && $this->idcontrarecibo !== $this->aContrarecibo->getIdcontrarecibo()) {
            $this->aContrarecibo = null;
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
            $con = Propel::getConnection(ContrarecibodetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ContrarecibodetallePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aContrarecibo = null;
            $this->collPagocontrarecibos = null;

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
            $con = Propel::getConnection(ContrarecibodetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ContrarecibodetalleQuery::create()
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
            $con = Propel::getConnection(ContrarecibodetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ContrarecibodetallePeer::addInstanceToPool($this);
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

            if ($this->aContrarecibo !== null) {
                if ($this->aContrarecibo->isModified() || $this->aContrarecibo->isNew()) {
                    $affectedRows += $this->aContrarecibo->save($con);
                }
                $this->setContrarecibo($this->aContrarecibo);
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

            if ($this->pagocontrarecibosScheduledForDeletion !== null) {
                if (!$this->pagocontrarecibosScheduledForDeletion->isEmpty()) {
                    PagocontrareciboQuery::create()
                        ->filterByPrimaryKeys($this->pagocontrarecibosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->pagocontrarecibosScheduledForDeletion = null;
                }
            }

            if ($this->collPagocontrarecibos !== null) {
                foreach ($this->collPagocontrarecibos as $referrerFK) {
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

        $this->modifiedColumns[] = ContrarecibodetallePeer::IDCONTRARECIBODETALLE;
        if (null !== $this->idcontrarecibodetalle) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ContrarecibodetallePeer::IDCONTRARECIBODETALLE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ContrarecibodetallePeer::IDCONTRARECIBODETALLE)) {
            $modifiedColumns[':p' . $index++]  = '`idcontrarecibodetalle`';
        }
        if ($this->isColumnModified(ContrarecibodetallePeer::IDCONTRARECIBO)) {
            $modifiedColumns[':p' . $index++]  = '`idcontrarecibo`';
        }
        if ($this->isColumnModified(ContrarecibodetallePeer::CONTRARECIBODETALLE_XML)) {
            $modifiedColumns[':p' . $index++]  = '`contrarecibodetalle_xml`';
        }
        if ($this->isColumnModified(ContrarecibodetallePeer::CONTRARECIBODETALLE_PDF)) {
            $modifiedColumns[':p' . $index++]  = '`contrarecibodetalle_pdf`';
        }
        if ($this->isColumnModified(ContrarecibodetallePeer::CONTRARECIBODETALLE_FOLIO)) {
            $modifiedColumns[':p' . $index++]  = '`contrarecibodetalle_folio`';
        }
        if ($this->isColumnModified(ContrarecibodetallePeer::CONTRARECIBODETALLE_CANTIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`contrarecibodetalle_cantidad`';
        }
        if ($this->isColumnModified(ContrarecibodetallePeer::CONTRARECIBODETALLE_TIPO)) {
            $modifiedColumns[':p' . $index++]  = '`contrarecibodetalle_tipo`';
        }
        if ($this->isColumnModified(ContrarecibodetallePeer::CONTRARECIBODETALLE_PAGADO)) {
            $modifiedColumns[':p' . $index++]  = '`contrarecibodetalle_pagado`';
        }

        $sql = sprintf(
            'INSERT INTO `contrarecibodetalle` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idcontrarecibodetalle`':
                        $stmt->bindValue($identifier, $this->idcontrarecibodetalle, PDO::PARAM_INT);
                        break;
                    case '`idcontrarecibo`':
                        $stmt->bindValue($identifier, $this->idcontrarecibo, PDO::PARAM_INT);
                        break;
                    case '`contrarecibodetalle_xml`':
                        $stmt->bindValue($identifier, $this->contrarecibodetalle_xml, PDO::PARAM_STR);
                        break;
                    case '`contrarecibodetalle_pdf`':
                        $stmt->bindValue($identifier, $this->contrarecibodetalle_pdf, PDO::PARAM_STR);
                        break;
                    case '`contrarecibodetalle_folio`':
                        $stmt->bindValue($identifier, $this->contrarecibodetalle_folio, PDO::PARAM_STR);
                        break;
                    case '`contrarecibodetalle_cantidad`':
                        $stmt->bindValue($identifier, $this->contrarecibodetalle_cantidad, PDO::PARAM_STR);
                        break;
                    case '`contrarecibodetalle_tipo`':
                        $stmt->bindValue($identifier, $this->contrarecibodetalle_tipo, PDO::PARAM_STR);
                        break;
                    case '`contrarecibodetalle_pagado`':
                        $stmt->bindValue($identifier, (int) $this->contrarecibodetalle_pagado, PDO::PARAM_INT);
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
        $this->setIdcontrarecibodetalle($pk);

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

            if ($this->aContrarecibo !== null) {
                if (!$this->aContrarecibo->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aContrarecibo->getValidationFailures());
                }
            }


            if (($retval = ContrarecibodetallePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collPagocontrarecibos !== null) {
                    foreach ($this->collPagocontrarecibos as $referrerFK) {
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
        $pos = ContrarecibodetallePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdcontrarecibodetalle();
                break;
            case 1:
                return $this->getIdcontrarecibo();
                break;
            case 2:
                return $this->getContrarecibodetalleXml();
                break;
            case 3:
                return $this->getContrarecibodetallePdf();
                break;
            case 4:
                return $this->getContrarecibodetalleFolio();
                break;
            case 5:
                return $this->getContrarecibodetalleCantidad();
                break;
            case 6:
                return $this->getContrarecibodetalleTipo();
                break;
            case 7:
                return $this->getContrarecibodetallePagado();
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
        if (isset($alreadyDumpedObjects['Contrarecibodetalle'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Contrarecibodetalle'][$this->getPrimaryKey()] = true;
        $keys = ContrarecibodetallePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdcontrarecibodetalle(),
            $keys[1] => $this->getIdcontrarecibo(),
            $keys[2] => $this->getContrarecibodetalleXml(),
            $keys[3] => $this->getContrarecibodetallePdf(),
            $keys[4] => $this->getContrarecibodetalleFolio(),
            $keys[5] => $this->getContrarecibodetalleCantidad(),
            $keys[6] => $this->getContrarecibodetalleTipo(),
            $keys[7] => $this->getContrarecibodetallePagado(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aContrarecibo) {
                $result['Contrarecibo'] = $this->aContrarecibo->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collPagocontrarecibos) {
                $result['Pagocontrarecibos'] = $this->collPagocontrarecibos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ContrarecibodetallePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdcontrarecibodetalle($value);
                break;
            case 1:
                $this->setIdcontrarecibo($value);
                break;
            case 2:
                $this->setContrarecibodetalleXml($value);
                break;
            case 3:
                $this->setContrarecibodetallePdf($value);
                break;
            case 4:
                $this->setContrarecibodetalleFolio($value);
                break;
            case 5:
                $this->setContrarecibodetalleCantidad($value);
                break;
            case 6:
                $this->setContrarecibodetalleTipo($value);
                break;
            case 7:
                $this->setContrarecibodetallePagado($value);
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
        $keys = ContrarecibodetallePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdcontrarecibodetalle($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdcontrarecibo($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setContrarecibodetalleXml($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setContrarecibodetallePdf($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setContrarecibodetalleFolio($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setContrarecibodetalleCantidad($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setContrarecibodetalleTipo($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setContrarecibodetallePagado($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ContrarecibodetallePeer::DATABASE_NAME);

        if ($this->isColumnModified(ContrarecibodetallePeer::IDCONTRARECIBODETALLE)) $criteria->add(ContrarecibodetallePeer::IDCONTRARECIBODETALLE, $this->idcontrarecibodetalle);
        if ($this->isColumnModified(ContrarecibodetallePeer::IDCONTRARECIBO)) $criteria->add(ContrarecibodetallePeer::IDCONTRARECIBO, $this->idcontrarecibo);
        if ($this->isColumnModified(ContrarecibodetallePeer::CONTRARECIBODETALLE_XML)) $criteria->add(ContrarecibodetallePeer::CONTRARECIBODETALLE_XML, $this->contrarecibodetalle_xml);
        if ($this->isColumnModified(ContrarecibodetallePeer::CONTRARECIBODETALLE_PDF)) $criteria->add(ContrarecibodetallePeer::CONTRARECIBODETALLE_PDF, $this->contrarecibodetalle_pdf);
        if ($this->isColumnModified(ContrarecibodetallePeer::CONTRARECIBODETALLE_FOLIO)) $criteria->add(ContrarecibodetallePeer::CONTRARECIBODETALLE_FOLIO, $this->contrarecibodetalle_folio);
        if ($this->isColumnModified(ContrarecibodetallePeer::CONTRARECIBODETALLE_CANTIDAD)) $criteria->add(ContrarecibodetallePeer::CONTRARECIBODETALLE_CANTIDAD, $this->contrarecibodetalle_cantidad);
        if ($this->isColumnModified(ContrarecibodetallePeer::CONTRARECIBODETALLE_TIPO)) $criteria->add(ContrarecibodetallePeer::CONTRARECIBODETALLE_TIPO, $this->contrarecibodetalle_tipo);
        if ($this->isColumnModified(ContrarecibodetallePeer::CONTRARECIBODETALLE_PAGADO)) $criteria->add(ContrarecibodetallePeer::CONTRARECIBODETALLE_PAGADO, $this->contrarecibodetalle_pagado);

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
        $criteria = new Criteria(ContrarecibodetallePeer::DATABASE_NAME);
        $criteria->add(ContrarecibodetallePeer::IDCONTRARECIBODETALLE, $this->idcontrarecibodetalle);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdcontrarecibodetalle();
    }

    /**
     * Generic method to set the primary key (idcontrarecibodetalle column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdcontrarecibodetalle($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdcontrarecibodetalle();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Contrarecibodetalle (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdcontrarecibo($this->getIdcontrarecibo());
        $copyObj->setContrarecibodetalleXml($this->getContrarecibodetalleXml());
        $copyObj->setContrarecibodetallePdf($this->getContrarecibodetallePdf());
        $copyObj->setContrarecibodetalleFolio($this->getContrarecibodetalleFolio());
        $copyObj->setContrarecibodetalleCantidad($this->getContrarecibodetalleCantidad());
        $copyObj->setContrarecibodetalleTipo($this->getContrarecibodetalleTipo());
        $copyObj->setContrarecibodetallePagado($this->getContrarecibodetallePagado());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getPagocontrarecibos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPagocontrarecibo($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdcontrarecibodetalle(NULL); // this is a auto-increment column, so set to default value
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
     * @return Contrarecibodetalle Clone of current object.
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
     * @return ContrarecibodetallePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ContrarecibodetallePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Contrarecibo object.
     *
     * @param                  Contrarecibo $v
     * @return Contrarecibodetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setContrarecibo(Contrarecibo $v = null)
    {
        if ($v === null) {
            $this->setIdcontrarecibo(NULL);
        } else {
            $this->setIdcontrarecibo($v->getIdcontrarecibo());
        }

        $this->aContrarecibo = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Contrarecibo object, it will not be re-added.
        if ($v !== null) {
            $v->addContrarecibodetalle($this);
        }


        return $this;
    }


    /**
     * Get the associated Contrarecibo object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Contrarecibo The associated Contrarecibo object.
     * @throws PropelException
     */
    public function getContrarecibo(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aContrarecibo === null && ($this->idcontrarecibo !== null) && $doQuery) {
            $this->aContrarecibo = ContrareciboQuery::create()->findPk($this->idcontrarecibo, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aContrarecibo->addContrarecibodetalles($this);
             */
        }

        return $this->aContrarecibo;
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
        if ('Pagocontrarecibo' == $relationName) {
            $this->initPagocontrarecibos();
        }
    }

    /**
     * Clears out the collPagocontrarecibos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Contrarecibodetalle The current object (for fluent API support)
     * @see        addPagocontrarecibos()
     */
    public function clearPagocontrarecibos()
    {
        $this->collPagocontrarecibos = null; // important to set this to null since that means it is uninitialized
        $this->collPagocontrarecibosPartial = null;

        return $this;
    }

    /**
     * reset is the collPagocontrarecibos collection loaded partially
     *
     * @return void
     */
    public function resetPartialPagocontrarecibos($v = true)
    {
        $this->collPagocontrarecibosPartial = $v;
    }

    /**
     * Initializes the collPagocontrarecibos collection.
     *
     * By default this just sets the collPagocontrarecibos collection to an empty array (like clearcollPagocontrarecibos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPagocontrarecibos($overrideExisting = true)
    {
        if (null !== $this->collPagocontrarecibos && !$overrideExisting) {
            return;
        }
        $this->collPagocontrarecibos = new PropelObjectCollection();
        $this->collPagocontrarecibos->setModel('Pagocontrarecibo');
    }

    /**
     * Gets an array of Pagocontrarecibo objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Contrarecibodetalle is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Pagocontrarecibo[] List of Pagocontrarecibo objects
     * @throws PropelException
     */
    public function getPagocontrarecibos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collPagocontrarecibosPartial && !$this->isNew();
        if (null === $this->collPagocontrarecibos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPagocontrarecibos) {
                // return empty collection
                $this->initPagocontrarecibos();
            } else {
                $collPagocontrarecibos = PagocontrareciboQuery::create(null, $criteria)
                    ->filterByContrarecibodetalle($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collPagocontrarecibosPartial && count($collPagocontrarecibos)) {
                      $this->initPagocontrarecibos(false);

                      foreach ($collPagocontrarecibos as $obj) {
                        if (false == $this->collPagocontrarecibos->contains($obj)) {
                          $this->collPagocontrarecibos->append($obj);
                        }
                      }

                      $this->collPagocontrarecibosPartial = true;
                    }

                    $collPagocontrarecibos->getInternalIterator()->rewind();

                    return $collPagocontrarecibos;
                }

                if ($partial && $this->collPagocontrarecibos) {
                    foreach ($this->collPagocontrarecibos as $obj) {
                        if ($obj->isNew()) {
                            $collPagocontrarecibos[] = $obj;
                        }
                    }
                }

                $this->collPagocontrarecibos = $collPagocontrarecibos;
                $this->collPagocontrarecibosPartial = false;
            }
        }

        return $this->collPagocontrarecibos;
    }

    /**
     * Sets a collection of Pagocontrarecibo objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $pagocontrarecibos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Contrarecibodetalle The current object (for fluent API support)
     */
    public function setPagocontrarecibos(PropelCollection $pagocontrarecibos, PropelPDO $con = null)
    {
        $pagocontrarecibosToDelete = $this->getPagocontrarecibos(new Criteria(), $con)->diff($pagocontrarecibos);


        $this->pagocontrarecibosScheduledForDeletion = $pagocontrarecibosToDelete;

        foreach ($pagocontrarecibosToDelete as $pagocontrareciboRemoved) {
            $pagocontrareciboRemoved->setContrarecibodetalle(null);
        }

        $this->collPagocontrarecibos = null;
        foreach ($pagocontrarecibos as $pagocontrarecibo) {
            $this->addPagocontrarecibo($pagocontrarecibo);
        }

        $this->collPagocontrarecibos = $pagocontrarecibos;
        $this->collPagocontrarecibosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Pagocontrarecibo objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Pagocontrarecibo objects.
     * @throws PropelException
     */
    public function countPagocontrarecibos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collPagocontrarecibosPartial && !$this->isNew();
        if (null === $this->collPagocontrarecibos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPagocontrarecibos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPagocontrarecibos());
            }
            $query = PagocontrareciboQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByContrarecibodetalle($this)
                ->count($con);
        }

        return count($this->collPagocontrarecibos);
    }

    /**
     * Method called to associate a Pagocontrarecibo object to this object
     * through the Pagocontrarecibo foreign key attribute.
     *
     * @param    Pagocontrarecibo $l Pagocontrarecibo
     * @return Contrarecibodetalle The current object (for fluent API support)
     */
    public function addPagocontrarecibo(Pagocontrarecibo $l)
    {
        if ($this->collPagocontrarecibos === null) {
            $this->initPagocontrarecibos();
            $this->collPagocontrarecibosPartial = true;
        }

        if (!in_array($l, $this->collPagocontrarecibos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddPagocontrarecibo($l);

            if ($this->pagocontrarecibosScheduledForDeletion and $this->pagocontrarecibosScheduledForDeletion->contains($l)) {
                $this->pagocontrarecibosScheduledForDeletion->remove($this->pagocontrarecibosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Pagocontrarecibo $pagocontrarecibo The pagocontrarecibo object to add.
     */
    protected function doAddPagocontrarecibo($pagocontrarecibo)
    {
        $this->collPagocontrarecibos[]= $pagocontrarecibo;
        $pagocontrarecibo->setContrarecibodetalle($this);
    }

    /**
     * @param	Pagocontrarecibo $pagocontrarecibo The pagocontrarecibo object to remove.
     * @return Contrarecibodetalle The current object (for fluent API support)
     */
    public function removePagocontrarecibo($pagocontrarecibo)
    {
        if ($this->getPagocontrarecibos()->contains($pagocontrarecibo)) {
            $this->collPagocontrarecibos->remove($this->collPagocontrarecibos->search($pagocontrarecibo));
            if (null === $this->pagocontrarecibosScheduledForDeletion) {
                $this->pagocontrarecibosScheduledForDeletion = clone $this->collPagocontrarecibos;
                $this->pagocontrarecibosScheduledForDeletion->clear();
            }
            $this->pagocontrarecibosScheduledForDeletion[]= clone $pagocontrarecibo;
            $pagocontrarecibo->setContrarecibodetalle(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Contrarecibodetalle is new, it will return
     * an empty collection; or if this Contrarecibodetalle has previously
     * been saved, it will retrieve related Pagocontrarecibos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Contrarecibodetalle.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Pagocontrarecibo[] List of Pagocontrarecibo objects
     */
    public function getPagocontrarecibosJoinUsuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PagocontrareciboQuery::create(null, $criteria);
        $query->joinWith('Usuario', $join_behavior);

        return $this->getPagocontrarecibos($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idcontrarecibodetalle = null;
        $this->idcontrarecibo = null;
        $this->contrarecibodetalle_xml = null;
        $this->contrarecibodetalle_pdf = null;
        $this->contrarecibodetalle_folio = null;
        $this->contrarecibodetalle_cantidad = null;
        $this->contrarecibodetalle_tipo = null;
        $this->contrarecibodetalle_pagado = null;
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
            if ($this->collPagocontrarecibos) {
                foreach ($this->collPagocontrarecibos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aContrarecibo instanceof Persistent) {
              $this->aContrarecibo->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collPagocontrarecibos instanceof PropelCollection) {
            $this->collPagocontrarecibos->clearIterator();
        }
        $this->collPagocontrarecibos = null;
        $this->aContrarecibo = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ContrarecibodetallePeer::DEFAULT_STRING_FORMAT);
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
