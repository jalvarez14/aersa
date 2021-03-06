<?php


/**
 * Base class that represents a row from the 'inventariomes' table.
 *
 *
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseInventariomes extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'InventariomesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        InventariomesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idinventariomes field.
     * @var        int
     */
    protected $idinventariomes;

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
     * The value for the idalmacen field.
     * @var        int
     */
    protected $idalmacen;

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
     * The value for the inventariomes_fecha field.
     * @var        string
     */
    protected $inventariomes_fecha;

    /**
     * The value for the inventariomes_revisada field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $inventariomes_revisada;

    /**
     * The value for the inventariomes_finalalimentos field.
     * @var        string
     */
    protected $inventariomes_finalalimentos;

    /**
     * The value for the inventariomes_finalbebidas field.
     * @var        string
     */
    protected $inventariomes_finalbebidas;

    /**
     * The value for the inventariomes_faltantes field.
     * @var        string
     */
    protected $inventariomes_faltantes;

    /**
     * The value for the inventariomes_sobrantes field.
     * @var        string
     */
    protected $inventariomes_sobrantes;

    /**
     * The value for the inventariomes_total field.
     * @var        string
     */
    protected $inventariomes_total;

    /**
     * The value for the inventariomes_totalimportefisico field.
     * @var        string
     */
    protected $inventariomes_totalimportefisico;

    /**
     * @var        Almacen
     */
    protected $aAlmacen;

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
     * @var        PropelObjectCollection|Cierresemananota[] Collection to store aggregation of Cierresemananota objects.
     */
    protected $collCierresemananotas;
    protected $collCierresemananotasPartial;

    /**
     * @var        PropelObjectCollection|Inventariomesdetalle[] Collection to store aggregation of Inventariomesdetalle objects.
     */
    protected $collInventariomesdetalles;
    protected $collInventariomesdetallesPartial;

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
    protected $cierresemananotasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $inventariomesdetallesScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->inventariomes_revisada = false;
    }

    /**
     * Initializes internal state of BaseInventariomes object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [idinventariomes] column value.
     *
     * @return int
     */
    public function getIdinventariomes()
    {

        return $this->idinventariomes;
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
     * Get the [idalmacen] column value.
     *
     * @return int
     */
    public function getIdalmacen()
    {

        return $this->idalmacen;
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
     * Get the [optionally formatted] temporal [inventariomes_fecha] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getInventariomesFecha($format = '%x')
    {
        if ($this->inventariomes_fecha === null) {
            return null;
        }

        if ($this->inventariomes_fecha === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->inventariomes_fecha);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->inventariomes_fecha, true), $x);
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
     * Get the [inventariomes_revisada] column value.
     *
     * @return boolean
     */
    public function getInventariomesRevisada()
    {

        return $this->inventariomes_revisada;
    }

    /**
     * Get the [inventariomes_finalalimentos] column value.
     *
     * @return string
     */
    public function getInventariomesFinalalimentos()
    {

        return $this->inventariomes_finalalimentos;
    }

    /**
     * Get the [inventariomes_finalbebidas] column value.
     *
     * @return string
     */
    public function getInventariomesFinalbebidas()
    {

        return $this->inventariomes_finalbebidas;
    }

    /**
     * Get the [inventariomes_faltantes] column value.
     *
     * @return string
     */
    public function getInventariomesFaltantes()
    {

        return $this->inventariomes_faltantes;
    }

    /**
     * Get the [inventariomes_sobrantes] column value.
     *
     * @return string
     */
    public function getInventariomesSobrantes()
    {

        return $this->inventariomes_sobrantes;
    }

    /**
     * Get the [inventariomes_total] column value.
     *
     * @return string
     */
    public function getInventariomesTotal()
    {

        return $this->inventariomes_total;
    }

    /**
     * Get the [inventariomes_totalimportefisico] column value.
     *
     * @return string
     */
    public function getInventariomesTotalimportefisico()
    {

        return $this->inventariomes_totalimportefisico;
    }

    /**
     * Set the value of [idinventariomes] column.
     *
     * @param  int $v new value
     * @return Inventariomes The current object (for fluent API support)
     */
    public function setIdinventariomes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idinventariomes !== $v) {
            $this->idinventariomes = $v;
            $this->modifiedColumns[] = InventariomesPeer::IDINVENTARIOMES;
        }


        return $this;
    } // setIdinventariomes()

    /**
     * Set the value of [idempresa] column.
     *
     * @param  int $v new value
     * @return Inventariomes The current object (for fluent API support)
     */
    public function setIdempresa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempresa !== $v) {
            $this->idempresa = $v;
            $this->modifiedColumns[] = InventariomesPeer::IDEMPRESA;
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
     * @return Inventariomes The current object (for fluent API support)
     */
    public function setIdsucursal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idsucursal !== $v) {
            $this->idsucursal = $v;
            $this->modifiedColumns[] = InventariomesPeer::IDSUCURSAL;
        }

        if ($this->aSucursal !== null && $this->aSucursal->getIdsucursal() !== $v) {
            $this->aSucursal = null;
        }


        return $this;
    } // setIdsucursal()

    /**
     * Set the value of [idalmacen] column.
     *
     * @param  int $v new value
     * @return Inventariomes The current object (for fluent API support)
     */
    public function setIdalmacen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idalmacen !== $v) {
            $this->idalmacen = $v;
            $this->modifiedColumns[] = InventariomesPeer::IDALMACEN;
        }

        if ($this->aAlmacen !== null && $this->aAlmacen->getIdalmacen() !== $v) {
            $this->aAlmacen = null;
        }


        return $this;
    } // setIdalmacen()

    /**
     * Set the value of [idusuario] column.
     *
     * @param  int $v new value
     * @return Inventariomes The current object (for fluent API support)
     */
    public function setIdusuario($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idusuario !== $v) {
            $this->idusuario = $v;
            $this->modifiedColumns[] = InventariomesPeer::IDUSUARIO;
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
     * @return Inventariomes The current object (for fluent API support)
     */
    public function setIdauditor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idauditor !== $v) {
            $this->idauditor = $v;
            $this->modifiedColumns[] = InventariomesPeer::IDAUDITOR;
        }

        if ($this->aUsuarioRelatedByIdauditor !== null && $this->aUsuarioRelatedByIdauditor->getIdusuario() !== $v) {
            $this->aUsuarioRelatedByIdauditor = null;
        }


        return $this;
    } // setIdauditor()

    /**
     * Sets the value of [inventariomes_fecha] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Inventariomes The current object (for fluent API support)
     */
    public function setInventariomesFecha($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->inventariomes_fecha !== null || $dt !== null) {
            $currentDateAsString = ($this->inventariomes_fecha !== null && $tmpDt = new DateTime($this->inventariomes_fecha)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->inventariomes_fecha = $newDateAsString;
                $this->modifiedColumns[] = InventariomesPeer::INVENTARIOMES_FECHA;
            }
        } // if either are not null


        return $this;
    } // setInventariomesFecha()

    /**
     * Sets the value of the [inventariomes_revisada] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Inventariomes The current object (for fluent API support)
     */
    public function setInventariomesRevisada($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->inventariomes_revisada !== $v) {
            $this->inventariomes_revisada = $v;
            $this->modifiedColumns[] = InventariomesPeer::INVENTARIOMES_REVISADA;
        }


        return $this;
    } // setInventariomesRevisada()

    /**
     * Set the value of [inventariomes_finalalimentos] column.
     *
     * @param  string $v new value
     * @return Inventariomes The current object (for fluent API support)
     */
    public function setInventariomesFinalalimentos($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->inventariomes_finalalimentos !== $v) {
            $this->inventariomes_finalalimentos = $v;
            $this->modifiedColumns[] = InventariomesPeer::INVENTARIOMES_FINALALIMENTOS;
        }


        return $this;
    } // setInventariomesFinalalimentos()

    /**
     * Set the value of [inventariomes_finalbebidas] column.
     *
     * @param  string $v new value
     * @return Inventariomes The current object (for fluent API support)
     */
    public function setInventariomesFinalbebidas($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->inventariomes_finalbebidas !== $v) {
            $this->inventariomes_finalbebidas = $v;
            $this->modifiedColumns[] = InventariomesPeer::INVENTARIOMES_FINALBEBIDAS;
        }


        return $this;
    } // setInventariomesFinalbebidas()

    /**
     * Set the value of [inventariomes_faltantes] column.
     *
     * @param  string $v new value
     * @return Inventariomes The current object (for fluent API support)
     */
    public function setInventariomesFaltantes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->inventariomes_faltantes !== $v) {
            $this->inventariomes_faltantes = $v;
            $this->modifiedColumns[] = InventariomesPeer::INVENTARIOMES_FALTANTES;
        }


        return $this;
    } // setInventariomesFaltantes()

    /**
     * Set the value of [inventariomes_sobrantes] column.
     *
     * @param  string $v new value
     * @return Inventariomes The current object (for fluent API support)
     */
    public function setInventariomesSobrantes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->inventariomes_sobrantes !== $v) {
            $this->inventariomes_sobrantes = $v;
            $this->modifiedColumns[] = InventariomesPeer::INVENTARIOMES_SOBRANTES;
        }


        return $this;
    } // setInventariomesSobrantes()

    /**
     * Set the value of [inventariomes_total] column.
     *
     * @param  string $v new value
     * @return Inventariomes The current object (for fluent API support)
     */
    public function setInventariomesTotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->inventariomes_total !== $v) {
            $this->inventariomes_total = $v;
            $this->modifiedColumns[] = InventariomesPeer::INVENTARIOMES_TOTAL;
        }


        return $this;
    } // setInventariomesTotal()

    /**
     * Set the value of [inventariomes_totalimportefisico] column.
     *
     * @param  string $v new value
     * @return Inventariomes The current object (for fluent API support)
     */
    public function setInventariomesTotalimportefisico($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->inventariomes_totalimportefisico !== $v) {
            $this->inventariomes_totalimportefisico = $v;
            $this->modifiedColumns[] = InventariomesPeer::INVENTARIOMES_TOTALIMPORTEFISICO;
        }


        return $this;
    } // setInventariomesTotalimportefisico()

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
            if ($this->inventariomes_revisada !== false) {
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

            $this->idinventariomes = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idempresa = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idsucursal = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->idalmacen = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->idusuario = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->idauditor = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->inventariomes_fecha = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->inventariomes_revisada = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
            $this->inventariomes_finalalimentos = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->inventariomes_finalbebidas = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->inventariomes_faltantes = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->inventariomes_sobrantes = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->inventariomes_total = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->inventariomes_totalimportefisico = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 14; // 14 = InventariomesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Inventariomes object", $e);
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
        if ($this->aAlmacen !== null && $this->idalmacen !== $this->aAlmacen->getIdalmacen()) {
            $this->aAlmacen = null;
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
            $con = Propel::getConnection(InventariomesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = InventariomesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aAlmacen = null;
            $this->aUsuarioRelatedByIdauditor = null;
            $this->aEmpresa = null;
            $this->aSucursal = null;
            $this->aUsuarioRelatedByIdusuario = null;
            $this->collCierresemananotas = null;

            $this->collInventariomesdetalles = null;

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
            $con = Propel::getConnection(InventariomesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = InventariomesQuery::create()
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
            $con = Propel::getConnection(InventariomesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                InventariomesPeer::addInstanceToPool($this);
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

            if ($this->cierresemananotasScheduledForDeletion !== null) {
                if (!$this->cierresemananotasScheduledForDeletion->isEmpty()) {
                    CierresemananotaQuery::create()
                        ->filterByPrimaryKeys($this->cierresemananotasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->cierresemananotasScheduledForDeletion = null;
                }
            }

            if ($this->collCierresemananotas !== null) {
                foreach ($this->collCierresemananotas as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->inventariomesdetallesScheduledForDeletion !== null) {
                if (!$this->inventariomesdetallesScheduledForDeletion->isEmpty()) {
                    InventariomesdetalleQuery::create()
                        ->filterByPrimaryKeys($this->inventariomesdetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->inventariomesdetallesScheduledForDeletion = null;
                }
            }

            if ($this->collInventariomesdetalles !== null) {
                foreach ($this->collInventariomesdetalles as $referrerFK) {
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

        $this->modifiedColumns[] = InventariomesPeer::IDINVENTARIOMES;
        if (null !== $this->idinventariomes) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . InventariomesPeer::IDINVENTARIOMES . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(InventariomesPeer::IDINVENTARIOMES)) {
            $modifiedColumns[':p' . $index++]  = '`idinventariomes`';
        }
        if ($this->isColumnModified(InventariomesPeer::IDEMPRESA)) {
            $modifiedColumns[':p' . $index++]  = '`idempresa`';
        }
        if ($this->isColumnModified(InventariomesPeer::IDSUCURSAL)) {
            $modifiedColumns[':p' . $index++]  = '`idsucursal`';
        }
        if ($this->isColumnModified(InventariomesPeer::IDALMACEN)) {
            $modifiedColumns[':p' . $index++]  = '`idalmacen`';
        }
        if ($this->isColumnModified(InventariomesPeer::IDUSUARIO)) {
            $modifiedColumns[':p' . $index++]  = '`idusuario`';
        }
        if ($this->isColumnModified(InventariomesPeer::IDAUDITOR)) {
            $modifiedColumns[':p' . $index++]  = '`idauditor`';
        }
        if ($this->isColumnModified(InventariomesPeer::INVENTARIOMES_FECHA)) {
            $modifiedColumns[':p' . $index++]  = '`inventariomes_fecha`';
        }
        if ($this->isColumnModified(InventariomesPeer::INVENTARIOMES_REVISADA)) {
            $modifiedColumns[':p' . $index++]  = '`inventariomes_revisada`';
        }
        if ($this->isColumnModified(InventariomesPeer::INVENTARIOMES_FINALALIMENTOS)) {
            $modifiedColumns[':p' . $index++]  = '`inventariomes_finalalimentos`';
        }
        if ($this->isColumnModified(InventariomesPeer::INVENTARIOMES_FINALBEBIDAS)) {
            $modifiedColumns[':p' . $index++]  = '`inventariomes_finalbebidas`';
        }
        if ($this->isColumnModified(InventariomesPeer::INVENTARIOMES_FALTANTES)) {
            $modifiedColumns[':p' . $index++]  = '`inventariomes_faltantes`';
        }
        if ($this->isColumnModified(InventariomesPeer::INVENTARIOMES_SOBRANTES)) {
            $modifiedColumns[':p' . $index++]  = '`inventariomes_sobrantes`';
        }
        if ($this->isColumnModified(InventariomesPeer::INVENTARIOMES_TOTAL)) {
            $modifiedColumns[':p' . $index++]  = '`inventariomes_total`';
        }
        if ($this->isColumnModified(InventariomesPeer::INVENTARIOMES_TOTALIMPORTEFISICO)) {
            $modifiedColumns[':p' . $index++]  = '`inventariomes_totalimportefisico`';
        }

        $sql = sprintf(
            'INSERT INTO `inventariomes` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idinventariomes`':
                        $stmt->bindValue($identifier, $this->idinventariomes, PDO::PARAM_INT);
                        break;
                    case '`idempresa`':
                        $stmt->bindValue($identifier, $this->idempresa, PDO::PARAM_INT);
                        break;
                    case '`idsucursal`':
                        $stmt->bindValue($identifier, $this->idsucursal, PDO::PARAM_INT);
                        break;
                    case '`idalmacen`':
                        $stmt->bindValue($identifier, $this->idalmacen, PDO::PARAM_INT);
                        break;
                    case '`idusuario`':
                        $stmt->bindValue($identifier, $this->idusuario, PDO::PARAM_INT);
                        break;
                    case '`idauditor`':
                        $stmt->bindValue($identifier, $this->idauditor, PDO::PARAM_INT);
                        break;
                    case '`inventariomes_fecha`':
                        $stmt->bindValue($identifier, $this->inventariomes_fecha, PDO::PARAM_STR);
                        break;
                    case '`inventariomes_revisada`':
                        $stmt->bindValue($identifier, (int) $this->inventariomes_revisada, PDO::PARAM_INT);
                        break;
                    case '`inventariomes_finalalimentos`':
                        $stmt->bindValue($identifier, $this->inventariomes_finalalimentos, PDO::PARAM_STR);
                        break;
                    case '`inventariomes_finalbebidas`':
                        $stmt->bindValue($identifier, $this->inventariomes_finalbebidas, PDO::PARAM_STR);
                        break;
                    case '`inventariomes_faltantes`':
                        $stmt->bindValue($identifier, $this->inventariomes_faltantes, PDO::PARAM_STR);
                        break;
                    case '`inventariomes_sobrantes`':
                        $stmt->bindValue($identifier, $this->inventariomes_sobrantes, PDO::PARAM_STR);
                        break;
                    case '`inventariomes_total`':
                        $stmt->bindValue($identifier, $this->inventariomes_total, PDO::PARAM_STR);
                        break;
                    case '`inventariomes_totalimportefisico`':
                        $stmt->bindValue($identifier, $this->inventariomes_totalimportefisico, PDO::PARAM_STR);
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
        $this->setIdinventariomes($pk);

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


            if (($retval = InventariomesPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCierresemananotas !== null) {
                    foreach ($this->collCierresemananotas as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collInventariomesdetalles !== null) {
                    foreach ($this->collInventariomesdetalles as $referrerFK) {
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
        $pos = InventariomesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdinventariomes();
                break;
            case 1:
                return $this->getIdempresa();
                break;
            case 2:
                return $this->getIdsucursal();
                break;
            case 3:
                return $this->getIdalmacen();
                break;
            case 4:
                return $this->getIdusuario();
                break;
            case 5:
                return $this->getIdauditor();
                break;
            case 6:
                return $this->getInventariomesFecha();
                break;
            case 7:
                return $this->getInventariomesRevisada();
                break;
            case 8:
                return $this->getInventariomesFinalalimentos();
                break;
            case 9:
                return $this->getInventariomesFinalbebidas();
                break;
            case 10:
                return $this->getInventariomesFaltantes();
                break;
            case 11:
                return $this->getInventariomesSobrantes();
                break;
            case 12:
                return $this->getInventariomesTotal();
                break;
            case 13:
                return $this->getInventariomesTotalimportefisico();
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
        if (isset($alreadyDumpedObjects['Inventariomes'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Inventariomes'][$this->getPrimaryKey()] = true;
        $keys = InventariomesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdinventariomes(),
            $keys[1] => $this->getIdempresa(),
            $keys[2] => $this->getIdsucursal(),
            $keys[3] => $this->getIdalmacen(),
            $keys[4] => $this->getIdusuario(),
            $keys[5] => $this->getIdauditor(),
            $keys[6] => $this->getInventariomesFecha(),
            $keys[7] => $this->getInventariomesRevisada(),
            $keys[8] => $this->getInventariomesFinalalimentos(),
            $keys[9] => $this->getInventariomesFinalbebidas(),
            $keys[10] => $this->getInventariomesFaltantes(),
            $keys[11] => $this->getInventariomesSobrantes(),
            $keys[12] => $this->getInventariomesTotal(),
            $keys[13] => $this->getInventariomesTotalimportefisico(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aAlmacen) {
                $result['Almacen'] = $this->aAlmacen->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
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
            if (null !== $this->collCierresemananotas) {
                $result['Cierresemananotas'] = $this->collCierresemananotas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collInventariomesdetalles) {
                $result['Inventariomesdetalles'] = $this->collInventariomesdetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = InventariomesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdinventariomes($value);
                break;
            case 1:
                $this->setIdempresa($value);
                break;
            case 2:
                $this->setIdsucursal($value);
                break;
            case 3:
                $this->setIdalmacen($value);
                break;
            case 4:
                $this->setIdusuario($value);
                break;
            case 5:
                $this->setIdauditor($value);
                break;
            case 6:
                $this->setInventariomesFecha($value);
                break;
            case 7:
                $this->setInventariomesRevisada($value);
                break;
            case 8:
                $this->setInventariomesFinalalimentos($value);
                break;
            case 9:
                $this->setInventariomesFinalbebidas($value);
                break;
            case 10:
                $this->setInventariomesFaltantes($value);
                break;
            case 11:
                $this->setInventariomesSobrantes($value);
                break;
            case 12:
                $this->setInventariomesTotal($value);
                break;
            case 13:
                $this->setInventariomesTotalimportefisico($value);
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
        $keys = InventariomesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdinventariomes($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdempresa($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdsucursal($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdalmacen($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdusuario($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdauditor($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setInventariomesFecha($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setInventariomesRevisada($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setInventariomesFinalalimentos($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setInventariomesFinalbebidas($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setInventariomesFaltantes($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setInventariomesSobrantes($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setInventariomesTotal($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setInventariomesTotalimportefisico($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(InventariomesPeer::DATABASE_NAME);

        if ($this->isColumnModified(InventariomesPeer::IDINVENTARIOMES)) $criteria->add(InventariomesPeer::IDINVENTARIOMES, $this->idinventariomes);
        if ($this->isColumnModified(InventariomesPeer::IDEMPRESA)) $criteria->add(InventariomesPeer::IDEMPRESA, $this->idempresa);
        if ($this->isColumnModified(InventariomesPeer::IDSUCURSAL)) $criteria->add(InventariomesPeer::IDSUCURSAL, $this->idsucursal);
        if ($this->isColumnModified(InventariomesPeer::IDALMACEN)) $criteria->add(InventariomesPeer::IDALMACEN, $this->idalmacen);
        if ($this->isColumnModified(InventariomesPeer::IDUSUARIO)) $criteria->add(InventariomesPeer::IDUSUARIO, $this->idusuario);
        if ($this->isColumnModified(InventariomesPeer::IDAUDITOR)) $criteria->add(InventariomesPeer::IDAUDITOR, $this->idauditor);
        if ($this->isColumnModified(InventariomesPeer::INVENTARIOMES_FECHA)) $criteria->add(InventariomesPeer::INVENTARIOMES_FECHA, $this->inventariomes_fecha);
        if ($this->isColumnModified(InventariomesPeer::INVENTARIOMES_REVISADA)) $criteria->add(InventariomesPeer::INVENTARIOMES_REVISADA, $this->inventariomes_revisada);
        if ($this->isColumnModified(InventariomesPeer::INVENTARIOMES_FINALALIMENTOS)) $criteria->add(InventariomesPeer::INVENTARIOMES_FINALALIMENTOS, $this->inventariomes_finalalimentos);
        if ($this->isColumnModified(InventariomesPeer::INVENTARIOMES_FINALBEBIDAS)) $criteria->add(InventariomesPeer::INVENTARIOMES_FINALBEBIDAS, $this->inventariomes_finalbebidas);
        if ($this->isColumnModified(InventariomesPeer::INVENTARIOMES_FALTANTES)) $criteria->add(InventariomesPeer::INVENTARIOMES_FALTANTES, $this->inventariomes_faltantes);
        if ($this->isColumnModified(InventariomesPeer::INVENTARIOMES_SOBRANTES)) $criteria->add(InventariomesPeer::INVENTARIOMES_SOBRANTES, $this->inventariomes_sobrantes);
        if ($this->isColumnModified(InventariomesPeer::INVENTARIOMES_TOTAL)) $criteria->add(InventariomesPeer::INVENTARIOMES_TOTAL, $this->inventariomes_total);
        if ($this->isColumnModified(InventariomesPeer::INVENTARIOMES_TOTALIMPORTEFISICO)) $criteria->add(InventariomesPeer::INVENTARIOMES_TOTALIMPORTEFISICO, $this->inventariomes_totalimportefisico);

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
        $criteria = new Criteria(InventariomesPeer::DATABASE_NAME);
        $criteria->add(InventariomesPeer::IDINVENTARIOMES, $this->idinventariomes);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdinventariomes();
    }

    /**
     * Generic method to set the primary key (idinventariomes column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdinventariomes($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdinventariomes();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Inventariomes (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdempresa($this->getIdempresa());
        $copyObj->setIdsucursal($this->getIdsucursal());
        $copyObj->setIdalmacen($this->getIdalmacen());
        $copyObj->setIdusuario($this->getIdusuario());
        $copyObj->setIdauditor($this->getIdauditor());
        $copyObj->setInventariomesFecha($this->getInventariomesFecha());
        $copyObj->setInventariomesRevisada($this->getInventariomesRevisada());
        $copyObj->setInventariomesFinalalimentos($this->getInventariomesFinalalimentos());
        $copyObj->setInventariomesFinalbebidas($this->getInventariomesFinalbebidas());
        $copyObj->setInventariomesFaltantes($this->getInventariomesFaltantes());
        $copyObj->setInventariomesSobrantes($this->getInventariomesSobrantes());
        $copyObj->setInventariomesTotal($this->getInventariomesTotal());
        $copyObj->setInventariomesTotalimportefisico($this->getInventariomesTotalimportefisico());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCierresemananotas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCierresemananota($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getInventariomesdetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInventariomesdetalle($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdinventariomes(NULL); // this is a auto-increment column, so set to default value
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
     * @return Inventariomes Clone of current object.
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
     * @return InventariomesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new InventariomesPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Almacen object.
     *
     * @param                  Almacen $v
     * @return Inventariomes The current object (for fluent API support)
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
            $v->addInventariomes($this);
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
                $this->aAlmacen->addInventariomess($this);
             */
        }

        return $this->aAlmacen;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param                  Usuario $v
     * @return Inventariomes The current object (for fluent API support)
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
            $v->addInventariomesRelatedByIdauditor($this);
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
                $this->aUsuarioRelatedByIdauditor->addInventariomessRelatedByIdauditor($this);
             */
        }

        return $this->aUsuarioRelatedByIdauditor;
    }

    /**
     * Declares an association between this object and a Empresa object.
     *
     * @param                  Empresa $v
     * @return Inventariomes The current object (for fluent API support)
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
            $v->addInventariomes($this);
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
                $this->aEmpresa->addInventariomess($this);
             */
        }

        return $this->aEmpresa;
    }

    /**
     * Declares an association between this object and a Sucursal object.
     *
     * @param                  Sucursal $v
     * @return Inventariomes The current object (for fluent API support)
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
            $v->addInventariomes($this);
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
                $this->aSucursal->addInventariomess($this);
             */
        }

        return $this->aSucursal;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param                  Usuario $v
     * @return Inventariomes The current object (for fluent API support)
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
            $v->addInventariomesRelatedByIdusuario($this);
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
                $this->aUsuarioRelatedByIdusuario->addInventariomessRelatedByIdusuario($this);
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
        if ('Cierresemananota' == $relationName) {
            $this->initCierresemananotas();
        }
        if ('Inventariomesdetalle' == $relationName) {
            $this->initInventariomesdetalles();
        }
    }

    /**
     * Clears out the collCierresemananotas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Inventariomes The current object (for fluent API support)
     * @see        addCierresemananotas()
     */
    public function clearCierresemananotas()
    {
        $this->collCierresemananotas = null; // important to set this to null since that means it is uninitialized
        $this->collCierresemananotasPartial = null;

        return $this;
    }

    /**
     * reset is the collCierresemananotas collection loaded partially
     *
     * @return void
     */
    public function resetPartialCierresemananotas($v = true)
    {
        $this->collCierresemananotasPartial = $v;
    }

    /**
     * Initializes the collCierresemananotas collection.
     *
     * By default this just sets the collCierresemananotas collection to an empty array (like clearcollCierresemananotas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCierresemananotas($overrideExisting = true)
    {
        if (null !== $this->collCierresemananotas && !$overrideExisting) {
            return;
        }
        $this->collCierresemananotas = new PropelObjectCollection();
        $this->collCierresemananotas->setModel('Cierresemananota');
    }

    /**
     * Gets an array of Cierresemananota objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Inventariomes is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Cierresemananota[] List of Cierresemananota objects
     * @throws PropelException
     */
    public function getCierresemananotas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCierresemananotasPartial && !$this->isNew();
        if (null === $this->collCierresemananotas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCierresemananotas) {
                // return empty collection
                $this->initCierresemananotas();
            } else {
                $collCierresemananotas = CierresemananotaQuery::create(null, $criteria)
                    ->filterByInventariomes($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCierresemananotasPartial && count($collCierresemananotas)) {
                      $this->initCierresemananotas(false);

                      foreach ($collCierresemananotas as $obj) {
                        if (false == $this->collCierresemananotas->contains($obj)) {
                          $this->collCierresemananotas->append($obj);
                        }
                      }

                      $this->collCierresemananotasPartial = true;
                    }

                    $collCierresemananotas->getInternalIterator()->rewind();

                    return $collCierresemananotas;
                }

                if ($partial && $this->collCierresemananotas) {
                    foreach ($this->collCierresemananotas as $obj) {
                        if ($obj->isNew()) {
                            $collCierresemananotas[] = $obj;
                        }
                    }
                }

                $this->collCierresemananotas = $collCierresemananotas;
                $this->collCierresemananotasPartial = false;
            }
        }

        return $this->collCierresemananotas;
    }

    /**
     * Sets a collection of Cierresemananota objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $cierresemananotas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Inventariomes The current object (for fluent API support)
     */
    public function setCierresemananotas(PropelCollection $cierresemananotas, PropelPDO $con = null)
    {
        $cierresemananotasToDelete = $this->getCierresemananotas(new Criteria(), $con)->diff($cierresemananotas);


        $this->cierresemananotasScheduledForDeletion = $cierresemananotasToDelete;

        foreach ($cierresemananotasToDelete as $cierresemananotaRemoved) {
            $cierresemananotaRemoved->setInventariomes(null);
        }

        $this->collCierresemananotas = null;
        foreach ($cierresemananotas as $cierresemananota) {
            $this->addCierresemananota($cierresemananota);
        }

        $this->collCierresemananotas = $cierresemananotas;
        $this->collCierresemananotasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Cierresemananota objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Cierresemananota objects.
     * @throws PropelException
     */
    public function countCierresemananotas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCierresemananotasPartial && !$this->isNew();
        if (null === $this->collCierresemananotas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCierresemananotas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCierresemananotas());
            }
            $query = CierresemananotaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByInventariomes($this)
                ->count($con);
        }

        return count($this->collCierresemananotas);
    }

    /**
     * Method called to associate a Cierresemananota object to this object
     * through the Cierresemananota foreign key attribute.
     *
     * @param    Cierresemananota $l Cierresemananota
     * @return Inventariomes The current object (for fluent API support)
     */
    public function addCierresemananota(Cierresemananota $l)
    {
        if ($this->collCierresemananotas === null) {
            $this->initCierresemananotas();
            $this->collCierresemananotasPartial = true;
        }

        if (!in_array($l, $this->collCierresemananotas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCierresemananota($l);

            if ($this->cierresemananotasScheduledForDeletion and $this->cierresemananotasScheduledForDeletion->contains($l)) {
                $this->cierresemananotasScheduledForDeletion->remove($this->cierresemananotasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Cierresemananota $cierresemananota The cierresemananota object to add.
     */
    protected function doAddCierresemananota($cierresemananota)
    {
        $this->collCierresemananotas[]= $cierresemananota;
        $cierresemananota->setInventariomes($this);
    }

    /**
     * @param	Cierresemananota $cierresemananota The cierresemananota object to remove.
     * @return Inventariomes The current object (for fluent API support)
     */
    public function removeCierresemananota($cierresemananota)
    {
        if ($this->getCierresemananotas()->contains($cierresemananota)) {
            $this->collCierresemananotas->remove($this->collCierresemananotas->search($cierresemananota));
            if (null === $this->cierresemananotasScheduledForDeletion) {
                $this->cierresemananotasScheduledForDeletion = clone $this->collCierresemananotas;
                $this->cierresemananotasScheduledForDeletion->clear();
            }
            $this->cierresemananotasScheduledForDeletion[]= clone $cierresemananota;
            $cierresemananota->setInventariomes(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Inventariomes is new, it will return
     * an empty collection; or if this Inventariomes has previously
     * been saved, it will retrieve related Cierresemananotas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Inventariomes.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Cierresemananota[] List of Cierresemananota objects
     */
    public function getCierresemananotasJoinUsuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CierresemananotaQuery::create(null, $criteria);
        $query->joinWith('Usuario', $join_behavior);

        return $this->getCierresemananotas($query, $con);
    }

    /**
     * Clears out the collInventariomesdetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Inventariomes The current object (for fluent API support)
     * @see        addInventariomesdetalles()
     */
    public function clearInventariomesdetalles()
    {
        $this->collInventariomesdetalles = null; // important to set this to null since that means it is uninitialized
        $this->collInventariomesdetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collInventariomesdetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialInventariomesdetalles($v = true)
    {
        $this->collInventariomesdetallesPartial = $v;
    }

    /**
     * Initializes the collInventariomesdetalles collection.
     *
     * By default this just sets the collInventariomesdetalles collection to an empty array (like clearcollInventariomesdetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInventariomesdetalles($overrideExisting = true)
    {
        if (null !== $this->collInventariomesdetalles && !$overrideExisting) {
            return;
        }
        $this->collInventariomesdetalles = new PropelObjectCollection();
        $this->collInventariomesdetalles->setModel('Inventariomesdetalle');
    }

    /**
     * Gets an array of Inventariomesdetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Inventariomes is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Inventariomesdetalle[] List of Inventariomesdetalle objects
     * @throws PropelException
     */
    public function getInventariomesdetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collInventariomesdetallesPartial && !$this->isNew();
        if (null === $this->collInventariomesdetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInventariomesdetalles) {
                // return empty collection
                $this->initInventariomesdetalles();
            } else {
                $collInventariomesdetalles = InventariomesdetalleQuery::create(null, $criteria)
                    ->filterByInventariomes($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collInventariomesdetallesPartial && count($collInventariomesdetalles)) {
                      $this->initInventariomesdetalles(false);

                      foreach ($collInventariomesdetalles as $obj) {
                        if (false == $this->collInventariomesdetalles->contains($obj)) {
                          $this->collInventariomesdetalles->append($obj);
                        }
                      }

                      $this->collInventariomesdetallesPartial = true;
                    }

                    $collInventariomesdetalles->getInternalIterator()->rewind();

                    return $collInventariomesdetalles;
                }

                if ($partial && $this->collInventariomesdetalles) {
                    foreach ($this->collInventariomesdetalles as $obj) {
                        if ($obj->isNew()) {
                            $collInventariomesdetalles[] = $obj;
                        }
                    }
                }

                $this->collInventariomesdetalles = $collInventariomesdetalles;
                $this->collInventariomesdetallesPartial = false;
            }
        }

        return $this->collInventariomesdetalles;
    }

    /**
     * Sets a collection of Inventariomesdetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $inventariomesdetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Inventariomes The current object (for fluent API support)
     */
    public function setInventariomesdetalles(PropelCollection $inventariomesdetalles, PropelPDO $con = null)
    {
        $inventariomesdetallesToDelete = $this->getInventariomesdetalles(new Criteria(), $con)->diff($inventariomesdetalles);


        $this->inventariomesdetallesScheduledForDeletion = $inventariomesdetallesToDelete;

        foreach ($inventariomesdetallesToDelete as $inventariomesdetalleRemoved) {
            $inventariomesdetalleRemoved->setInventariomes(null);
        }

        $this->collInventariomesdetalles = null;
        foreach ($inventariomesdetalles as $inventariomesdetalle) {
            $this->addInventariomesdetalle($inventariomesdetalle);
        }

        $this->collInventariomesdetalles = $inventariomesdetalles;
        $this->collInventariomesdetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Inventariomesdetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Inventariomesdetalle objects.
     * @throws PropelException
     */
    public function countInventariomesdetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collInventariomesdetallesPartial && !$this->isNew();
        if (null === $this->collInventariomesdetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInventariomesdetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInventariomesdetalles());
            }
            $query = InventariomesdetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByInventariomes($this)
                ->count($con);
        }

        return count($this->collInventariomesdetalles);
    }

    /**
     * Method called to associate a Inventariomesdetalle object to this object
     * through the Inventariomesdetalle foreign key attribute.
     *
     * @param    Inventariomesdetalle $l Inventariomesdetalle
     * @return Inventariomes The current object (for fluent API support)
     */
    public function addInventariomesdetalle(Inventariomesdetalle $l)
    {
        if ($this->collInventariomesdetalles === null) {
            $this->initInventariomesdetalles();
            $this->collInventariomesdetallesPartial = true;
        }

        if (!in_array($l, $this->collInventariomesdetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddInventariomesdetalle($l);

            if ($this->inventariomesdetallesScheduledForDeletion and $this->inventariomesdetallesScheduledForDeletion->contains($l)) {
                $this->inventariomesdetallesScheduledForDeletion->remove($this->inventariomesdetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Inventariomesdetalle $inventariomesdetalle The inventariomesdetalle object to add.
     */
    protected function doAddInventariomesdetalle($inventariomesdetalle)
    {
        $this->collInventariomesdetalles[]= $inventariomesdetalle;
        $inventariomesdetalle->setInventariomes($this);
    }

    /**
     * @param	Inventariomesdetalle $inventariomesdetalle The inventariomesdetalle object to remove.
     * @return Inventariomes The current object (for fluent API support)
     */
    public function removeInventariomesdetalle($inventariomesdetalle)
    {
        if ($this->getInventariomesdetalles()->contains($inventariomesdetalle)) {
            $this->collInventariomesdetalles->remove($this->collInventariomesdetalles->search($inventariomesdetalle));
            if (null === $this->inventariomesdetallesScheduledForDeletion) {
                $this->inventariomesdetallesScheduledForDeletion = clone $this->collInventariomesdetalles;
                $this->inventariomesdetallesScheduledForDeletion->clear();
            }
            $this->inventariomesdetallesScheduledForDeletion[]= clone $inventariomesdetalle;
            $inventariomesdetalle->setInventariomes(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idinventariomes = null;
        $this->idempresa = null;
        $this->idsucursal = null;
        $this->idalmacen = null;
        $this->idusuario = null;
        $this->idauditor = null;
        $this->inventariomes_fecha = null;
        $this->inventariomes_revisada = null;
        $this->inventariomes_finalalimentos = null;
        $this->inventariomes_finalbebidas = null;
        $this->inventariomes_faltantes = null;
        $this->inventariomes_sobrantes = null;
        $this->inventariomes_total = null;
        $this->inventariomes_totalimportefisico = null;
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
            if ($this->collCierresemananotas) {
                foreach ($this->collCierresemananotas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collInventariomesdetalles) {
                foreach ($this->collInventariomesdetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aAlmacen instanceof Persistent) {
              $this->aAlmacen->clearAllReferences($deep);
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

        if ($this->collCierresemananotas instanceof PropelCollection) {
            $this->collCierresemananotas->clearIterator();
        }
        $this->collCierresemananotas = null;
        if ($this->collInventariomesdetalles instanceof PropelCollection) {
            $this->collInventariomesdetalles->clearIterator();
        }
        $this->collInventariomesdetalles = null;
        $this->aAlmacen = null;
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
        return (string) $this->exportTo(InventariomesPeer::DEFAULT_STRING_FORMAT);
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
