<?php


/**
 * Base class that represents a row from the 'ingreso' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseIngreso extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'IngresoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        IngresoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idingreso field.
     * @var        int
     */
    protected $idingreso;

    /**
     * The value for the idempresa field.
     * @var        int
     */
    protected $idempresa;

    /**
     * The value for the idsucursal field.
     * @var        int
     */
    protected $idsucursal;

    /**
     * The value for the idusuario field.
     * @var        int
     */
    protected $idusuario;

    /**
     * The value for the idauditor field.
     * @var        int
     */
    protected $idauditor;

    /**
     * The value for the ingreso_folio field.
     * @var        string
     */
    protected $ingreso_folio;

    /**
     * The value for the ingreso_revisada field.
     * @var        boolean
     */
    protected $ingreso_revisada;

    /**
     * The value for the ingreso_totalalimento field.
     * @var        string
     */
    protected $ingreso_totalalimento;

    /**
     * The value for the ingreso_totalbebida field.
     * @var        string
     */
    protected $ingreso_totalbebida;

    /**
     * The value for the ingreso_totalmiscelanea field.
     * @var        string
     */
    protected $ingreso_totalmiscelanea;

    /**
     * The value for the ingreso_fecha field.
     * @var        string
     */
    protected $ingreso_fecha;

    /**
     * The value for the ingreso_fechacreacion field.
     * @var        string
     */
    protected $ingreso_fechacreacion;

    /**
     * @var        Usuario
     */
    protected $aUsuarioRelatedByIdauditor;

    /**
     * @var        Empresa
     */
    protected $aEmpresa;

    /**
     * @var        Sucursal
     */
    protected $aSucursal;

    /**
     * @var        Usuario
     */
    protected $aUsuarioRelatedByIdusuario;

    /**
     * @var        PropelObjectCollection|Ingresodetalle[] Collection to store aggregation of Ingresodetalle objects.
     */
    protected $collIngresodetalles;
    protected $collIngresodetallesPartial;

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
    protected $ingresodetallesScheduledForDeletion = null;

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
     * Get the [idempresa] column value.
     *
     * @return int
     */
    public function getIdempresa()
    {

        return $this->idempresa;
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
     * Get the [idusuario] column value.
     *
     * @return int
     */
    public function getIdusuario()
    {

        return $this->idusuario;
    }

    /**
     * Get the [idauditor] column value.
     *
     * @return int
     */
    public function getIdauditor()
    {

        return $this->idauditor;
    }

    /**
     * Get the [ingreso_folio] column value.
     *
     * @return string
     */
    public function getIngresoFolio()
    {

        return $this->ingreso_folio;
    }

    /**
     * Get the [ingreso_revisada] column value.
     *
     * @return boolean
     */
    public function getIngresoRevisada()
    {

        return $this->ingreso_revisada;
    }

    /**
     * Get the [ingreso_totalalimento] column value.
     *
     * @return string
     */
    public function getIngresoTotalalimento()
    {

        return $this->ingreso_totalalimento;
    }

    /**
     * Get the [ingreso_totalbebida] column value.
     *
     * @return string
     */
    public function getIngresoTotalbebida()
    {

        return $this->ingreso_totalbebida;
    }

    /**
     * Get the [ingreso_totalmiscelanea] column value.
     *
     * @return string
     */
    public function getIngresoTotalmiscelanea()
    {

        return $this->ingreso_totalmiscelanea;
    }

    /**
     * Get the [optionally formatted] temporal [ingreso_fecha] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getIngresoFecha($format = 'Y-m-d H:i:s')
    {
        if ($this->ingreso_fecha === null) {
            return null;
        }

        if ($this->ingreso_fecha === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->ingreso_fecha);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->ingreso_fecha, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [optionally formatted] temporal [ingreso_fechacreacion] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getIngresoFechacreacion($format = 'Y-m-d H:i:s')
    {
        if ($this->ingreso_fechacreacion === null) {
            return null;
        }

        if ($this->ingreso_fechacreacion === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->ingreso_fechacreacion);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->ingreso_fechacreacion, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Set the value of [idingreso] column.
     *
     * @param  int $v new value
     * @return Ingreso The current object (for fluent API support)
     */
    public function setIdingreso($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idingreso !== $v) {
            $this->idingreso = $v;
            $this->modifiedColumns[] = IngresoPeer::IDINGRESO;
        }


        return $this;
    } // setIdingreso()

    /**
     * Set the value of [idempresa] column.
     *
     * @param  int $v new value
     * @return Ingreso The current object (for fluent API support)
     */
    public function setIdempresa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempresa !== $v) {
            $this->idempresa = $v;
            $this->modifiedColumns[] = IngresoPeer::IDEMPRESA;
        }

        if ($this->aEmpresa !== null && $this->aEmpresa->getIdempresa() !== $v) {
            $this->aEmpresa = null;
        }


        return $this;
    } // setIdempresa()

    /**
     * Set the value of [idsucursal] column.
     *
     * @param  int $v new value
     * @return Ingreso The current object (for fluent API support)
     */
    public function setIdsucursal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idsucursal !== $v) {
            $this->idsucursal = $v;
            $this->modifiedColumns[] = IngresoPeer::IDSUCURSAL;
        }

        if ($this->aSucursal !== null && $this->aSucursal->getIdsucursal() !== $v) {
            $this->aSucursal = null;
        }


        return $this;
    } // setIdsucursal()

    /**
     * Set the value of [idusuario] column.
     *
     * @param  int $v new value
     * @return Ingreso The current object (for fluent API support)
     */
    public function setIdusuario($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idusuario !== $v) {
            $this->idusuario = $v;
            $this->modifiedColumns[] = IngresoPeer::IDUSUARIO;
        }

        if ($this->aUsuarioRelatedByIdusuario !== null && $this->aUsuarioRelatedByIdusuario->getIdusuario() !== $v) {
            $this->aUsuarioRelatedByIdusuario = null;
        }


        return $this;
    } // setIdusuario()

    /**
     * Set the value of [idauditor] column.
     *
     * @param  int $v new value
     * @return Ingreso The current object (for fluent API support)
     */
    public function setIdauditor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idauditor !== $v) {
            $this->idauditor = $v;
            $this->modifiedColumns[] = IngresoPeer::IDAUDITOR;
        }

        if ($this->aUsuarioRelatedByIdauditor !== null && $this->aUsuarioRelatedByIdauditor->getIdusuario() !== $v) {
            $this->aUsuarioRelatedByIdauditor = null;
        }


        return $this;
    } // setIdauditor()

    /**
     * Set the value of [ingreso_folio] column.
     *
     * @param  string $v new value
     * @return Ingreso The current object (for fluent API support)
     */
    public function setIngresoFolio($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ingreso_folio !== $v) {
            $this->ingreso_folio = $v;
            $this->modifiedColumns[] = IngresoPeer::INGRESO_FOLIO;
        }


        return $this;
    } // setIngresoFolio()

    /**
     * Sets the value of the [ingreso_revisada] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Ingreso The current object (for fluent API support)
     */
    public function setIngresoRevisada($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->ingreso_revisada !== $v) {
            $this->ingreso_revisada = $v;
            $this->modifiedColumns[] = IngresoPeer::INGRESO_REVISADA;
        }


        return $this;
    } // setIngresoRevisada()

    /**
     * Set the value of [ingreso_totalalimento] column.
     *
     * @param  string $v new value
     * @return Ingreso The current object (for fluent API support)
     */
    public function setIngresoTotalalimento($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ingreso_totalalimento !== $v) {
            $this->ingreso_totalalimento = $v;
            $this->modifiedColumns[] = IngresoPeer::INGRESO_TOTALALIMENTO;
        }


        return $this;
    } // setIngresoTotalalimento()

    /**
     * Set the value of [ingreso_totalbebida] column.
     *
     * @param  string $v new value
     * @return Ingreso The current object (for fluent API support)
     */
    public function setIngresoTotalbebida($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ingreso_totalbebida !== $v) {
            $this->ingreso_totalbebida = $v;
            $this->modifiedColumns[] = IngresoPeer::INGRESO_TOTALBEBIDA;
        }


        return $this;
    } // setIngresoTotalbebida()

    /**
     * Set the value of [ingreso_totalmiscelanea] column.
     *
     * @param  string $v new value
     * @return Ingreso The current object (for fluent API support)
     */
    public function setIngresoTotalmiscelanea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ingreso_totalmiscelanea !== $v) {
            $this->ingreso_totalmiscelanea = $v;
            $this->modifiedColumns[] = IngresoPeer::INGRESO_TOTALMISCELANEA;
        }


        return $this;
    } // setIngresoTotalmiscelanea()

    /**
     * Sets the value of [ingreso_fecha] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Ingreso The current object (for fluent API support)
     */
    public function setIngresoFecha($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ingreso_fecha !== null || $dt !== null) {
            $currentDateAsString = ($this->ingreso_fecha !== null && $tmpDt = new DateTime($this->ingreso_fecha)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ingreso_fecha = $newDateAsString;
                $this->modifiedColumns[] = IngresoPeer::INGRESO_FECHA;
            }
        } // if either are not null


        return $this;
    } // setIngresoFecha()

    /**
     * Sets the value of [ingreso_fechacreacion] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Ingreso The current object (for fluent API support)
     */
    public function setIngresoFechacreacion($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->ingreso_fechacreacion !== null || $dt !== null) {
            $currentDateAsString = ($this->ingreso_fechacreacion !== null && $tmpDt = new DateTime($this->ingreso_fechacreacion)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->ingreso_fechacreacion = $newDateAsString;
                $this->modifiedColumns[] = IngresoPeer::INGRESO_FECHACREACION;
            }
        } // if either are not null


        return $this;
    } // setIngresoFechacreacion()

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

            $this->idingreso = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idempresa = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idsucursal = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->idusuario = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->idauditor = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->ingreso_folio = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->ingreso_revisada = ($row[$startcol + 6] !== null) ? (boolean) $row[$startcol + 6] : null;
            $this->ingreso_totalalimento = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->ingreso_totalbebida = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->ingreso_totalmiscelanea = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->ingreso_fecha = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->ingreso_fechacreacion = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = IngresoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Ingreso object", $e);
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
        if ($this->aSucursal !== null && $this->idsucursal !== $this->aSucursal->getIdsucursal()) {
            $this->aSucursal = null;
        }
        if ($this->aUsuarioRelatedByIdusuario !== null && $this->idusuario !== $this->aUsuarioRelatedByIdusuario->getIdusuario()) {
            $this->aUsuarioRelatedByIdusuario = null;
        }
        if ($this->aUsuarioRelatedByIdauditor !== null && $this->idauditor !== $this->aUsuarioRelatedByIdauditor->getIdusuario()) {
            $this->aUsuarioRelatedByIdauditor = null;
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
            $con = Propel::getConnection(IngresoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = IngresoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aUsuarioRelatedByIdauditor = null;
            $this->aEmpresa = null;
            $this->aSucursal = null;
            $this->aUsuarioRelatedByIdusuario = null;
            $this->collIngresodetalles = null;

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
            $con = Propel::getConnection(IngresoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = IngresoQuery::create()
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
            $con = Propel::getConnection(IngresoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                IngresoPeer::addInstanceToPool($this);
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

            if ($this->aUsuarioRelatedByIdauditor !== null) {
                if ($this->aUsuarioRelatedByIdauditor->isModified() || $this->aUsuarioRelatedByIdauditor->isNew()) {
                    $affectedRows += $this->aUsuarioRelatedByIdauditor->save($con);
                }
                $this->setUsuarioRelatedByIdauditor($this->aUsuarioRelatedByIdauditor);
            }

            if ($this->aEmpresa !== null) {
                if ($this->aEmpresa->isModified() || $this->aEmpresa->isNew()) {
                    $affectedRows += $this->aEmpresa->save($con);
                }
                $this->setEmpresa($this->aEmpresa);
            }

            if ($this->aSucursal !== null) {
                if ($this->aSucursal->isModified() || $this->aSucursal->isNew()) {
                    $affectedRows += $this->aSucursal->save($con);
                }
                $this->setSucursal($this->aSucursal);
            }

            if ($this->aUsuarioRelatedByIdusuario !== null) {
                if ($this->aUsuarioRelatedByIdusuario->isModified() || $this->aUsuarioRelatedByIdusuario->isNew()) {
                    $affectedRows += $this->aUsuarioRelatedByIdusuario->save($con);
                }
                $this->setUsuarioRelatedByIdusuario($this->aUsuarioRelatedByIdusuario);
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

            if ($this->ingresodetallesScheduledForDeletion !== null) {
                if (!$this->ingresodetallesScheduledForDeletion->isEmpty()) {
                    IngresodetalleQuery::create()
                        ->filterByPrimaryKeys($this->ingresodetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->ingresodetallesScheduledForDeletion = null;
                }
            }

            if ($this->collIngresodetalles !== null) {
                foreach ($this->collIngresodetalles as $referrerFK) {
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

        $this->modifiedColumns[] = IngresoPeer::IDINGRESO;
        if (null !== $this->idingreso) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . IngresoPeer::IDINGRESO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(IngresoPeer::IDINGRESO)) {
            $modifiedColumns[':p' . $index++]  = '`idingreso`';
        }
        if ($this->isColumnModified(IngresoPeer::IDEMPRESA)) {
            $modifiedColumns[':p' . $index++]  = '`idempresa`';
        }
        if ($this->isColumnModified(IngresoPeer::IDSUCURSAL)) {
            $modifiedColumns[':p' . $index++]  = '`idsucursal`';
        }
        if ($this->isColumnModified(IngresoPeer::IDUSUARIO)) {
            $modifiedColumns[':p' . $index++]  = '`idusuario`';
        }
        if ($this->isColumnModified(IngresoPeer::IDAUDITOR)) {
            $modifiedColumns[':p' . $index++]  = '`idauditor`';
        }
        if ($this->isColumnModified(IngresoPeer::INGRESO_FOLIO)) {
            $modifiedColumns[':p' . $index++]  = '`ingreso_folio`';
        }
        if ($this->isColumnModified(IngresoPeer::INGRESO_REVISADA)) {
            $modifiedColumns[':p' . $index++]  = '`ingreso_revisada`';
        }
        if ($this->isColumnModified(IngresoPeer::INGRESO_TOTALALIMENTO)) {
            $modifiedColumns[':p' . $index++]  = '`ingreso_totalalimento`';
        }
        if ($this->isColumnModified(IngresoPeer::INGRESO_TOTALBEBIDA)) {
            $modifiedColumns[':p' . $index++]  = '`ingreso_totalbebida`';
        }
        if ($this->isColumnModified(IngresoPeer::INGRESO_TOTALMISCELANEA)) {
            $modifiedColumns[':p' . $index++]  = '`ingreso_totalmiscelanea`';
        }
        if ($this->isColumnModified(IngresoPeer::INGRESO_FECHA)) {
            $modifiedColumns[':p' . $index++]  = '`ingreso_fecha`';
        }
        if ($this->isColumnModified(IngresoPeer::INGRESO_FECHACREACION)) {
            $modifiedColumns[':p' . $index++]  = '`ingreso_fechacreacion`';
        }

        $sql = sprintf(
            'INSERT INTO `ingreso` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idingreso`':
                        $stmt->bindValue($identifier, $this->idingreso, PDO::PARAM_INT);
                        break;
                    case '`idempresa`':
                        $stmt->bindValue($identifier, $this->idempresa, PDO::PARAM_INT);
                        break;
                    case '`idsucursal`':
                        $stmt->bindValue($identifier, $this->idsucursal, PDO::PARAM_INT);
                        break;
                    case '`idusuario`':
                        $stmt->bindValue($identifier, $this->idusuario, PDO::PARAM_INT);
                        break;
                    case '`idauditor`':
                        $stmt->bindValue($identifier, $this->idauditor, PDO::PARAM_INT);
                        break;
                    case '`ingreso_folio`':
                        $stmt->bindValue($identifier, $this->ingreso_folio, PDO::PARAM_STR);
                        break;
                    case '`ingreso_revisada`':
                        $stmt->bindValue($identifier, (int) $this->ingreso_revisada, PDO::PARAM_INT);
                        break;
                    case '`ingreso_totalalimento`':
                        $stmt->bindValue($identifier, $this->ingreso_totalalimento, PDO::PARAM_STR);
                        break;
                    case '`ingreso_totalbebida`':
                        $stmt->bindValue($identifier, $this->ingreso_totalbebida, PDO::PARAM_STR);
                        break;
                    case '`ingreso_totalmiscelanea`':
                        $stmt->bindValue($identifier, $this->ingreso_totalmiscelanea, PDO::PARAM_STR);
                        break;
                    case '`ingreso_fecha`':
                        $stmt->bindValue($identifier, $this->ingreso_fecha, PDO::PARAM_STR);
                        break;
                    case '`ingreso_fechacreacion`':
                        $stmt->bindValue($identifier, $this->ingreso_fechacreacion, PDO::PARAM_STR);
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
        $this->setIdingreso($pk);

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

            if ($this->aUsuarioRelatedByIdauditor !== null) {
                if (!$this->aUsuarioRelatedByIdauditor->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUsuarioRelatedByIdauditor->getValidationFailures());
                }
            }

            if ($this->aEmpresa !== null) {
                if (!$this->aEmpresa->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEmpresa->getValidationFailures());
                }
            }

            if ($this->aSucursal !== null) {
                if (!$this->aSucursal->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aSucursal->getValidationFailures());
                }
            }

            if ($this->aUsuarioRelatedByIdusuario !== null) {
                if (!$this->aUsuarioRelatedByIdusuario->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUsuarioRelatedByIdusuario->getValidationFailures());
                }
            }


            if (($retval = IngresoPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collIngresodetalles !== null) {
                    foreach ($this->collIngresodetalles as $referrerFK) {
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
        $pos = IngresoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdingreso();
                break;
            case 1:
                return $this->getIdempresa();
                break;
            case 2:
                return $this->getIdsucursal();
                break;
            case 3:
                return $this->getIdusuario();
                break;
            case 4:
                return $this->getIdauditor();
                break;
            case 5:
                return $this->getIngresoFolio();
                break;
            case 6:
                return $this->getIngresoRevisada();
                break;
            case 7:
                return $this->getIngresoTotalalimento();
                break;
            case 8:
                return $this->getIngresoTotalbebida();
                break;
            case 9:
                return $this->getIngresoTotalmiscelanea();
                break;
            case 10:
                return $this->getIngresoFecha();
                break;
            case 11:
                return $this->getIngresoFechacreacion();
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
        if (isset($alreadyDumpedObjects['Ingreso'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Ingreso'][$this->getPrimaryKey()] = true;
        $keys = IngresoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdingreso(),
            $keys[1] => $this->getIdempresa(),
            $keys[2] => $this->getIdsucursal(),
            $keys[3] => $this->getIdusuario(),
            $keys[4] => $this->getIdauditor(),
            $keys[5] => $this->getIngresoFolio(),
            $keys[6] => $this->getIngresoRevisada(),
            $keys[7] => $this->getIngresoTotalalimento(),
            $keys[8] => $this->getIngresoTotalbebida(),
            $keys[9] => $this->getIngresoTotalmiscelanea(),
            $keys[10] => $this->getIngresoFecha(),
            $keys[11] => $this->getIngresoFechacreacion(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aUsuarioRelatedByIdauditor) {
                $result['UsuarioRelatedByIdauditor'] = $this->aUsuarioRelatedByIdauditor->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aEmpresa) {
                $result['Empresa'] = $this->aEmpresa->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSucursal) {
                $result['Sucursal'] = $this->aSucursal->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aUsuarioRelatedByIdusuario) {
                $result['UsuarioRelatedByIdusuario'] = $this->aUsuarioRelatedByIdusuario->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collIngresodetalles) {
                $result['Ingresodetalles'] = $this->collIngresodetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = IngresoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdingreso($value);
                break;
            case 1:
                $this->setIdempresa($value);
                break;
            case 2:
                $this->setIdsucursal($value);
                break;
            case 3:
                $this->setIdusuario($value);
                break;
            case 4:
                $this->setIdauditor($value);
                break;
            case 5:
                $this->setIngresoFolio($value);
                break;
            case 6:
                $this->setIngresoRevisada($value);
                break;
            case 7:
                $this->setIngresoTotalalimento($value);
                break;
            case 8:
                $this->setIngresoTotalbebida($value);
                break;
            case 9:
                $this->setIngresoTotalmiscelanea($value);
                break;
            case 10:
                $this->setIngresoFecha($value);
                break;
            case 11:
                $this->setIngresoFechacreacion($value);
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
        $keys = IngresoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdingreso($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdempresa($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdsucursal($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdusuario($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdauditor($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIngresoFolio($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIngresoRevisada($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIngresoTotalalimento($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setIngresoTotalbebida($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setIngresoTotalmiscelanea($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setIngresoFecha($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setIngresoFechacreacion($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(IngresoPeer::DATABASE_NAME);

        if ($this->isColumnModified(IngresoPeer::IDINGRESO)) $criteria->add(IngresoPeer::IDINGRESO, $this->idingreso);
        if ($this->isColumnModified(IngresoPeer::IDEMPRESA)) $criteria->add(IngresoPeer::IDEMPRESA, $this->idempresa);
        if ($this->isColumnModified(IngresoPeer::IDSUCURSAL)) $criteria->add(IngresoPeer::IDSUCURSAL, $this->idsucursal);
        if ($this->isColumnModified(IngresoPeer::IDUSUARIO)) $criteria->add(IngresoPeer::IDUSUARIO, $this->idusuario);
        if ($this->isColumnModified(IngresoPeer::IDAUDITOR)) $criteria->add(IngresoPeer::IDAUDITOR, $this->idauditor);
        if ($this->isColumnModified(IngresoPeer::INGRESO_FOLIO)) $criteria->add(IngresoPeer::INGRESO_FOLIO, $this->ingreso_folio);
        if ($this->isColumnModified(IngresoPeer::INGRESO_REVISADA)) $criteria->add(IngresoPeer::INGRESO_REVISADA, $this->ingreso_revisada);
        if ($this->isColumnModified(IngresoPeer::INGRESO_TOTALALIMENTO)) $criteria->add(IngresoPeer::INGRESO_TOTALALIMENTO, $this->ingreso_totalalimento);
        if ($this->isColumnModified(IngresoPeer::INGRESO_TOTALBEBIDA)) $criteria->add(IngresoPeer::INGRESO_TOTALBEBIDA, $this->ingreso_totalbebida);
        if ($this->isColumnModified(IngresoPeer::INGRESO_TOTALMISCELANEA)) $criteria->add(IngresoPeer::INGRESO_TOTALMISCELANEA, $this->ingreso_totalmiscelanea);
        if ($this->isColumnModified(IngresoPeer::INGRESO_FECHA)) $criteria->add(IngresoPeer::INGRESO_FECHA, $this->ingreso_fecha);
        if ($this->isColumnModified(IngresoPeer::INGRESO_FECHACREACION)) $criteria->add(IngresoPeer::INGRESO_FECHACREACION, $this->ingreso_fechacreacion);

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
        $criteria = new Criteria(IngresoPeer::DATABASE_NAME);
        $criteria->add(IngresoPeer::IDINGRESO, $this->idingreso);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdingreso();
    }

    /**
     * Generic method to set the primary key (idingreso column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdingreso($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdingreso();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Ingreso (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdempresa($this->getIdempresa());
        $copyObj->setIdsucursal($this->getIdsucursal());
        $copyObj->setIdusuario($this->getIdusuario());
        $copyObj->setIdauditor($this->getIdauditor());
        $copyObj->setIngresoFolio($this->getIngresoFolio());
        $copyObj->setIngresoRevisada($this->getIngresoRevisada());
        $copyObj->setIngresoTotalalimento($this->getIngresoTotalalimento());
        $copyObj->setIngresoTotalbebida($this->getIngresoTotalbebida());
        $copyObj->setIngresoTotalmiscelanea($this->getIngresoTotalmiscelanea());
        $copyObj->setIngresoFecha($this->getIngresoFecha());
        $copyObj->setIngresoFechacreacion($this->getIngresoFechacreacion());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getIngresodetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addIngresodetalle($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdingreso(NULL); // this is a auto-increment column, so set to default value
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
     * @return Ingreso Clone of current object.
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
     * @return IngresoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new IngresoPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param                  Usuario $v
     * @return Ingreso The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUsuarioRelatedByIdauditor(Usuario $v = null)
    {
        if ($v === null) {
            $this->setIdauditor(NULL);
        } else {
            $this->setIdauditor($v->getIdusuario());
        }

        $this->aUsuarioRelatedByIdauditor = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Usuario object, it will not be re-added.
        if ($v !== null) {
            $v->addIngresoRelatedByIdauditor($this);
        }


        return $this;
    }


    /**
     * Get the associated Usuario object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Usuario The associated Usuario object.
     * @throws PropelException
     */
    public function getUsuarioRelatedByIdauditor(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aUsuarioRelatedByIdauditor === null && ($this->idauditor !== null) && $doQuery) {
            $this->aUsuarioRelatedByIdauditor = UsuarioQuery::create()->findPk($this->idauditor, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUsuarioRelatedByIdauditor->addIngresosRelatedByIdauditor($this);
             */
        }

        return $this->aUsuarioRelatedByIdauditor;
    }

    /**
     * Declares an association between this object and a Empresa object.
     *
     * @param                  Empresa $v
     * @return Ingreso The current object (for fluent API support)
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
            $v->addIngreso($this);
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
                $this->aEmpresa->addIngresos($this);
             */
        }

        return $this->aEmpresa;
    }

    /**
     * Declares an association between this object and a Sucursal object.
     *
     * @param                  Sucursal $v
     * @return Ingreso The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSucursal(Sucursal $v = null)
    {
        if ($v === null) {
            $this->setIdsucursal(NULL);
        } else {
            $this->setIdsucursal($v->getIdsucursal());
        }

        $this->aSucursal = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Sucursal object, it will not be re-added.
        if ($v !== null) {
            $v->addIngreso($this);
        }


        return $this;
    }


    /**
     * Get the associated Sucursal object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Sucursal The associated Sucursal object.
     * @throws PropelException
     */
    public function getSucursal(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aSucursal === null && ($this->idsucursal !== null) && $doQuery) {
            $this->aSucursal = SucursalQuery::create()->findPk($this->idsucursal, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSucursal->addIngresos($this);
             */
        }

        return $this->aSucursal;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param                  Usuario $v
     * @return Ingreso The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUsuarioRelatedByIdusuario(Usuario $v = null)
    {
        if ($v === null) {
            $this->setIdusuario(NULL);
        } else {
            $this->setIdusuario($v->getIdusuario());
        }

        $this->aUsuarioRelatedByIdusuario = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Usuario object, it will not be re-added.
        if ($v !== null) {
            $v->addIngresoRelatedByIdusuario($this);
        }


        return $this;
    }


    /**
     * Get the associated Usuario object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Usuario The associated Usuario object.
     * @throws PropelException
     */
    public function getUsuarioRelatedByIdusuario(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aUsuarioRelatedByIdusuario === null && ($this->idusuario !== null) && $doQuery) {
            $this->aUsuarioRelatedByIdusuario = UsuarioQuery::create()->findPk($this->idusuario, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUsuarioRelatedByIdusuario->addIngresosRelatedByIdusuario($this);
             */
        }

        return $this->aUsuarioRelatedByIdusuario;
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
        if ('Ingresodetalle' == $relationName) {
            $this->initIngresodetalles();
        }
    }

    /**
     * Clears out the collIngresodetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Ingreso The current object (for fluent API support)
     * @see        addIngresodetalles()
     */
    public function clearIngresodetalles()
    {
        $this->collIngresodetalles = null; // important to set this to null since that means it is uninitialized
        $this->collIngresodetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collIngresodetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialIngresodetalles($v = true)
    {
        $this->collIngresodetallesPartial = $v;
    }

    /**
     * Initializes the collIngresodetalles collection.
     *
     * By default this just sets the collIngresodetalles collection to an empty array (like clearcollIngresodetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initIngresodetalles($overrideExisting = true)
    {
        if (null !== $this->collIngresodetalles && !$overrideExisting) {
            return;
        }
        $this->collIngresodetalles = new PropelObjectCollection();
        $this->collIngresodetalles->setModel('Ingresodetalle');
    }

    /**
     * Gets an array of Ingresodetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Ingreso is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Ingresodetalle[] List of Ingresodetalle objects
     * @throws PropelException
     */
    public function getIngresodetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collIngresodetallesPartial && !$this->isNew();
        if (null === $this->collIngresodetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collIngresodetalles) {
                // return empty collection
                $this->initIngresodetalles();
            } else {
                $collIngresodetalles = IngresodetalleQuery::create(null, $criteria)
                    ->filterByIngreso($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collIngresodetallesPartial && count($collIngresodetalles)) {
                      $this->initIngresodetalles(false);

                      foreach ($collIngresodetalles as $obj) {
                        if (false == $this->collIngresodetalles->contains($obj)) {
                          $this->collIngresodetalles->append($obj);
                        }
                      }

                      $this->collIngresodetallesPartial = true;
                    }

                    $collIngresodetalles->getInternalIterator()->rewind();

                    return $collIngresodetalles;
                }

                if ($partial && $this->collIngresodetalles) {
                    foreach ($this->collIngresodetalles as $obj) {
                        if ($obj->isNew()) {
                            $collIngresodetalles[] = $obj;
                        }
                    }
                }

                $this->collIngresodetalles = $collIngresodetalles;
                $this->collIngresodetallesPartial = false;
            }
        }

        return $this->collIngresodetalles;
    }

    /**
     * Sets a collection of Ingresodetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ingresodetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Ingreso The current object (for fluent API support)
     */
    public function setIngresodetalles(PropelCollection $ingresodetalles, PropelPDO $con = null)
    {
        $ingresodetallesToDelete = $this->getIngresodetalles(new Criteria(), $con)->diff($ingresodetalles);


        $this->ingresodetallesScheduledForDeletion = $ingresodetallesToDelete;

        foreach ($ingresodetallesToDelete as $ingresodetalleRemoved) {
            $ingresodetalleRemoved->setIngreso(null);
        }

        $this->collIngresodetalles = null;
        foreach ($ingresodetalles as $ingresodetalle) {
            $this->addIngresodetalle($ingresodetalle);
        }

        $this->collIngresodetalles = $ingresodetalles;
        $this->collIngresodetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Ingresodetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Ingresodetalle objects.
     * @throws PropelException
     */
    public function countIngresodetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collIngresodetallesPartial && !$this->isNew();
        if (null === $this->collIngresodetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collIngresodetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getIngresodetalles());
            }
            $query = IngresodetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByIngreso($this)
                ->count($con);
        }

        return count($this->collIngresodetalles);
    }

    /**
     * Method called to associate a Ingresodetalle object to this object
     * through the Ingresodetalle foreign key attribute.
     *
     * @param    Ingresodetalle $l Ingresodetalle
     * @return Ingreso The current object (for fluent API support)
     */
    public function addIngresodetalle(Ingresodetalle $l)
    {
        if ($this->collIngresodetalles === null) {
            $this->initIngresodetalles();
            $this->collIngresodetallesPartial = true;
        }

        if (!in_array($l, $this->collIngresodetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddIngresodetalle($l);

            if ($this->ingresodetallesScheduledForDeletion and $this->ingresodetallesScheduledForDeletion->contains($l)) {
                $this->ingresodetallesScheduledForDeletion->remove($this->ingresodetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Ingresodetalle $ingresodetalle The ingresodetalle object to add.
     */
    protected function doAddIngresodetalle($ingresodetalle)
    {
        $this->collIngresodetalles[]= $ingresodetalle;
        $ingresodetalle->setIngreso($this);
    }

    /**
     * @param	Ingresodetalle $ingresodetalle The ingresodetalle object to remove.
     * @return Ingreso The current object (for fluent API support)
     */
    public function removeIngresodetalle($ingresodetalle)
    {
        if ($this->getIngresodetalles()->contains($ingresodetalle)) {
            $this->collIngresodetalles->remove($this->collIngresodetalles->search($ingresodetalle));
            if (null === $this->ingresodetallesScheduledForDeletion) {
                $this->ingresodetallesScheduledForDeletion = clone $this->collIngresodetalles;
                $this->ingresodetallesScheduledForDeletion->clear();
            }
            $this->ingresodetallesScheduledForDeletion[]= clone $ingresodetalle;
            $ingresodetalle->setIngreso(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Ingreso is new, it will return
     * an empty collection; or if this Ingreso has previously
     * been saved, it will retrieve related Ingresodetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Ingreso.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ingresodetalle[] List of Ingresodetalle objects
     */
    public function getIngresodetallesJoinConceptoingreso($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = IngresodetalleQuery::create(null, $criteria);
        $query->joinWith('Conceptoingreso', $join_behavior);

        return $this->getIngresodetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Ingreso is new, it will return
     * an empty collection; or if this Ingreso has previously
     * been saved, it will retrieve related Ingresodetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Ingreso.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ingresodetalle[] List of Ingresodetalle objects
     */
    public function getIngresodetallesJoinRubroingreso($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = IngresodetalleQuery::create(null, $criteria);
        $query->joinWith('Rubroingreso', $join_behavior);

        return $this->getIngresodetalles($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idingreso = null;
        $this->idempresa = null;
        $this->idsucursal = null;
        $this->idusuario = null;
        $this->idauditor = null;
        $this->ingreso_folio = null;
        $this->ingreso_revisada = null;
        $this->ingreso_totalalimento = null;
        $this->ingreso_totalbebida = null;
        $this->ingreso_totalmiscelanea = null;
        $this->ingreso_fecha = null;
        $this->ingreso_fechacreacion = null;
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
            if ($this->collIngresodetalles) {
                foreach ($this->collIngresodetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aUsuarioRelatedByIdauditor instanceof Persistent) {
              $this->aUsuarioRelatedByIdauditor->clearAllReferences($deep);
            }
            if ($this->aEmpresa instanceof Persistent) {
              $this->aEmpresa->clearAllReferences($deep);
            }
            if ($this->aSucursal instanceof Persistent) {
              $this->aSucursal->clearAllReferences($deep);
            }
            if ($this->aUsuarioRelatedByIdusuario instanceof Persistent) {
              $this->aUsuarioRelatedByIdusuario->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collIngresodetalles instanceof PropelCollection) {
            $this->collIngresodetalles->clearIterator();
        }
        $this->collIngresodetalles = null;
        $this->aUsuarioRelatedByIdauditor = null;
        $this->aEmpresa = null;
        $this->aSucursal = null;
        $this->aUsuarioRelatedByIdusuario = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(IngresoPeer::DEFAULT_STRING_FORMAT);
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
