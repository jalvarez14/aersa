<?php


/**
 * Base class that represents a query for the 'abonoproveedordetalle' table.
 *
 *
 *
 * @method AbonoproveedordetalleQuery orderByIdabonoproveedordetalle($order = Criteria::ASC) Order by the idabonoproveedordetalle column
 * @method AbonoproveedordetalleQuery orderByIdabonoproveedor($order = Criteria::ASC) Order by the idabonoproveedor column
 * @method AbonoproveedordetalleQuery orderByIdcuentabancaria($order = Criteria::ASC) Order by the idcuentabancaria column
 * @method AbonoproveedordetalleQuery orderByIdusuario($order = Criteria::ASC) Order by the idusuario column
 * @method AbonoproveedordetalleQuery orderByAbonoproveedordetalleFechaabono($order = Criteria::ASC) Order by the abonoproveedordetalle_fechaabono column
 * @method AbonoproveedordetalleQuery orderByAbonoproveedordetalleCantidad($order = Criteria::ASC) Order by the abonoproveedordetalle_cantidad column
 * @method AbonoproveedordetalleQuery orderByAbonoproveedordetalleTipo($order = Criteria::ASC) Order by the abonoproveedordetalle_tipo column
 * @method AbonoproveedordetalleQuery orderByAbonoproveedordetalleReferencia($order = Criteria::ASC) Order by the abonoproveedordetalle_referencia column
 * @method AbonoproveedordetalleQuery orderByAbonoproveedordetalleComprobante($order = Criteria::ASC) Order by the abonoproveedordetalle_comprobante column
 * @method AbonoproveedordetalleQuery orderByAbonoproveedordetalleMediodepago($order = Criteria::ASC) Order by the abonoproveedordetalle_mediodepago column
 * @method AbonoproveedordetalleQuery orderByAbonoproveedordetalleChequecirculacion($order = Criteria::ASC) Order by the abonoproveedordetalle_chequecirculacion column
 * @method AbonoproveedordetalleQuery orderByAbonoproveedordetalleFechacobrocheque($order = Criteria::ASC) Order by the abonoproveedordetalle_fechacobrocheque column
 *
 * @method AbonoproveedordetalleQuery groupByIdabonoproveedordetalle() Group by the idabonoproveedordetalle column
 * @method AbonoproveedordetalleQuery groupByIdabonoproveedor() Group by the idabonoproveedor column
 * @method AbonoproveedordetalleQuery groupByIdcuentabancaria() Group by the idcuentabancaria column
 * @method AbonoproveedordetalleQuery groupByIdusuario() Group by the idusuario column
 * @method AbonoproveedordetalleQuery groupByAbonoproveedordetalleFechaabono() Group by the abonoproveedordetalle_fechaabono column
 * @method AbonoproveedordetalleQuery groupByAbonoproveedordetalleCantidad() Group by the abonoproveedordetalle_cantidad column
 * @method AbonoproveedordetalleQuery groupByAbonoproveedordetalleTipo() Group by the abonoproveedordetalle_tipo column
 * @method AbonoproveedordetalleQuery groupByAbonoproveedordetalleReferencia() Group by the abonoproveedordetalle_referencia column
 * @method AbonoproveedordetalleQuery groupByAbonoproveedordetalleComprobante() Group by the abonoproveedordetalle_comprobante column
 * @method AbonoproveedordetalleQuery groupByAbonoproveedordetalleMediodepago() Group by the abonoproveedordetalle_mediodepago column
 * @method AbonoproveedordetalleQuery groupByAbonoproveedordetalleChequecirculacion() Group by the abonoproveedordetalle_chequecirculacion column
 * @method AbonoproveedordetalleQuery groupByAbonoproveedordetalleFechacobrocheque() Group by the abonoproveedordetalle_fechacobrocheque column
 *
 * @method AbonoproveedordetalleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AbonoproveedordetalleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AbonoproveedordetalleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method AbonoproveedordetalleQuery leftJoinAbonoproveedor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Abonoproveedor relation
 * @method AbonoproveedordetalleQuery rightJoinAbonoproveedor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Abonoproveedor relation
 * @method AbonoproveedordetalleQuery innerJoinAbonoproveedor($relationAlias = null) Adds a INNER JOIN clause to the query using the Abonoproveedor relation
 *
 * @method AbonoproveedordetalleQuery leftJoinCuentabancaria($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cuentabancaria relation
 * @method AbonoproveedordetalleQuery rightJoinCuentabancaria($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cuentabancaria relation
 * @method AbonoproveedordetalleQuery innerJoinCuentabancaria($relationAlias = null) Adds a INNER JOIN clause to the query using the Cuentabancaria relation
 *
 * @method AbonoproveedordetalleQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method AbonoproveedordetalleQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method AbonoproveedordetalleQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method Abonoproveedordetalle findOne(PropelPDO $con = null) Return the first Abonoproveedordetalle matching the query
 * @method Abonoproveedordetalle findOneOrCreate(PropelPDO $con = null) Return the first Abonoproveedordetalle matching the query, or a new Abonoproveedordetalle object populated from the query conditions when no match is found
 *
 * @method Abonoproveedordetalle findOneByIdabonoproveedor(int $idabonoproveedor) Return the first Abonoproveedordetalle filtered by the idabonoproveedor column
 * @method Abonoproveedordetalle findOneByIdcuentabancaria(int $idcuentabancaria) Return the first Abonoproveedordetalle filtered by the idcuentabancaria column
 * @method Abonoproveedordetalle findOneByIdusuario(int $idusuario) Return the first Abonoproveedordetalle filtered by the idusuario column
 * @method Abonoproveedordetalle findOneByAbonoproveedordetalleFechaabono(string $abonoproveedordetalle_fechaabono) Return the first Abonoproveedordetalle filtered by the abonoproveedordetalle_fechaabono column
 * @method Abonoproveedordetalle findOneByAbonoproveedordetalleCantidad(string $abonoproveedordetalle_cantidad) Return the first Abonoproveedordetalle filtered by the abonoproveedordetalle_cantidad column
 * @method Abonoproveedordetalle findOneByAbonoproveedordetalleTipo(string $abonoproveedordetalle_tipo) Return the first Abonoproveedordetalle filtered by the abonoproveedordetalle_tipo column
 * @method Abonoproveedordetalle findOneByAbonoproveedordetalleReferencia(string $abonoproveedordetalle_referencia) Return the first Abonoproveedordetalle filtered by the abonoproveedordetalle_referencia column
 * @method Abonoproveedordetalle findOneByAbonoproveedordetalleComprobante(string $abonoproveedordetalle_comprobante) Return the first Abonoproveedordetalle filtered by the abonoproveedordetalle_comprobante column
 * @method Abonoproveedordetalle findOneByAbonoproveedordetalleMediodepago(string $abonoproveedordetalle_mediodepago) Return the first Abonoproveedordetalle filtered by the abonoproveedordetalle_mediodepago column
 * @method Abonoproveedordetalle findOneByAbonoproveedordetalleChequecirculacion(boolean $abonoproveedordetalle_chequecirculacion) Return the first Abonoproveedordetalle filtered by the abonoproveedordetalle_chequecirculacion column
 * @method Abonoproveedordetalle findOneByAbonoproveedordetalleFechacobrocheque(string $abonoproveedordetalle_fechacobrocheque) Return the first Abonoproveedordetalle filtered by the abonoproveedordetalle_fechacobrocheque column
 *
 * @method array findByIdabonoproveedordetalle(int $idabonoproveedordetalle) Return Abonoproveedordetalle objects filtered by the idabonoproveedordetalle column
 * @method array findByIdabonoproveedor(int $idabonoproveedor) Return Abonoproveedordetalle objects filtered by the idabonoproveedor column
 * @method array findByIdcuentabancaria(int $idcuentabancaria) Return Abonoproveedordetalle objects filtered by the idcuentabancaria column
 * @method array findByIdusuario(int $idusuario) Return Abonoproveedordetalle objects filtered by the idusuario column
 * @method array findByAbonoproveedordetalleFechaabono(string $abonoproveedordetalle_fechaabono) Return Abonoproveedordetalle objects filtered by the abonoproveedordetalle_fechaabono column
 * @method array findByAbonoproveedordetalleCantidad(string $abonoproveedordetalle_cantidad) Return Abonoproveedordetalle objects filtered by the abonoproveedordetalle_cantidad column
 * @method array findByAbonoproveedordetalleTipo(string $abonoproveedordetalle_tipo) Return Abonoproveedordetalle objects filtered by the abonoproveedordetalle_tipo column
 * @method array findByAbonoproveedordetalleReferencia(string $abonoproveedordetalle_referencia) Return Abonoproveedordetalle objects filtered by the abonoproveedordetalle_referencia column
 * @method array findByAbonoproveedordetalleComprobante(string $abonoproveedordetalle_comprobante) Return Abonoproveedordetalle objects filtered by the abonoproveedordetalle_comprobante column
 * @method array findByAbonoproveedordetalleMediodepago(string $abonoproveedordetalle_mediodepago) Return Abonoproveedordetalle objects filtered by the abonoproveedordetalle_mediodepago column
 * @method array findByAbonoproveedordetalleChequecirculacion(boolean $abonoproveedordetalle_chequecirculacion) Return Abonoproveedordetalle objects filtered by the abonoproveedordetalle_chequecirculacion column
 * @method array findByAbonoproveedordetalleFechacobrocheque(string $abonoproveedordetalle_fechacobrocheque) Return Abonoproveedordetalle objects filtered by the abonoproveedordetalle_fechacobrocheque column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseAbonoproveedordetalleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAbonoproveedordetalleQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'aersa';
        }
        if (null === $modelName) {
            $modelName = 'Abonoproveedordetalle';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AbonoproveedordetalleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AbonoproveedordetalleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AbonoproveedordetalleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AbonoproveedordetalleQuery) {
            return $criteria;
        }
        $query = new AbonoproveedordetalleQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Abonoproveedordetalle|Abonoproveedordetalle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AbonoproveedordetallePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AbonoproveedordetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Abonoproveedordetalle A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdabonoproveedordetalle($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Abonoproveedordetalle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idabonoproveedordetalle`, `idabonoproveedor`, `idcuentabancaria`, `idusuario`, `abonoproveedordetalle_fechaabono`, `abonoproveedordetalle_cantidad`, `abonoproveedordetalle_tipo`, `abonoproveedordetalle_referencia`, `abonoproveedordetalle_comprobante`, `abonoproveedordetalle_mediodepago`, `abonoproveedordetalle_chequecirculacion`, `abonoproveedordetalle_fechacobrocheque` FROM `abonoproveedordetalle` WHERE `idabonoproveedordetalle` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Abonoproveedordetalle();
            $obj->hydrate($row);
            AbonoproveedordetallePeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Abonoproveedordetalle|Abonoproveedordetalle[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Abonoproveedordetalle[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return AbonoproveedordetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AbonoproveedordetallePeer::IDABONOPROVEEDORDETALLE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AbonoproveedordetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AbonoproveedordetallePeer::IDABONOPROVEEDORDETALLE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idabonoproveedordetalle column
     *
     * Example usage:
     * <code>
     * $query->filterByIdabonoproveedordetalle(1234); // WHERE idabonoproveedordetalle = 1234
     * $query->filterByIdabonoproveedordetalle(array(12, 34)); // WHERE idabonoproveedordetalle IN (12, 34)
     * $query->filterByIdabonoproveedordetalle(array('min' => 12)); // WHERE idabonoproveedordetalle >= 12
     * $query->filterByIdabonoproveedordetalle(array('max' => 12)); // WHERE idabonoproveedordetalle <= 12
     * </code>
     *
     * @param     mixed $idabonoproveedordetalle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbonoproveedordetalleQuery The current query, for fluid interface
     */
    public function filterByIdabonoproveedordetalle($idabonoproveedordetalle = null, $comparison = null)
    {
        if (is_array($idabonoproveedordetalle)) {
            $useMinMax = false;
            if (isset($idabonoproveedordetalle['min'])) {
                $this->addUsingAlias(AbonoproveedordetallePeer::IDABONOPROVEEDORDETALLE, $idabonoproveedordetalle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idabonoproveedordetalle['max'])) {
                $this->addUsingAlias(AbonoproveedordetallePeer::IDABONOPROVEEDORDETALLE, $idabonoproveedordetalle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbonoproveedordetallePeer::IDABONOPROVEEDORDETALLE, $idabonoproveedordetalle, $comparison);
    }

    /**
     * Filter the query on the idabonoproveedor column
     *
     * Example usage:
     * <code>
     * $query->filterByIdabonoproveedor(1234); // WHERE idabonoproveedor = 1234
     * $query->filterByIdabonoproveedor(array(12, 34)); // WHERE idabonoproveedor IN (12, 34)
     * $query->filterByIdabonoproveedor(array('min' => 12)); // WHERE idabonoproveedor >= 12
     * $query->filterByIdabonoproveedor(array('max' => 12)); // WHERE idabonoproveedor <= 12
     * </code>
     *
     * @see       filterByAbonoproveedor()
     *
     * @param     mixed $idabonoproveedor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbonoproveedordetalleQuery The current query, for fluid interface
     */
    public function filterByIdabonoproveedor($idabonoproveedor = null, $comparison = null)
    {
        if (is_array($idabonoproveedor)) {
            $useMinMax = false;
            if (isset($idabonoproveedor['min'])) {
                $this->addUsingAlias(AbonoproveedordetallePeer::IDABONOPROVEEDOR, $idabonoproveedor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idabonoproveedor['max'])) {
                $this->addUsingAlias(AbonoproveedordetallePeer::IDABONOPROVEEDOR, $idabonoproveedor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbonoproveedordetallePeer::IDABONOPROVEEDOR, $idabonoproveedor, $comparison);
    }

    /**
     * Filter the query on the idcuentabancaria column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcuentabancaria(1234); // WHERE idcuentabancaria = 1234
     * $query->filterByIdcuentabancaria(array(12, 34)); // WHERE idcuentabancaria IN (12, 34)
     * $query->filterByIdcuentabancaria(array('min' => 12)); // WHERE idcuentabancaria >= 12
     * $query->filterByIdcuentabancaria(array('max' => 12)); // WHERE idcuentabancaria <= 12
     * </code>
     *
     * @see       filterByCuentabancaria()
     *
     * @param     mixed $idcuentabancaria The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbonoproveedordetalleQuery The current query, for fluid interface
     */
    public function filterByIdcuentabancaria($idcuentabancaria = null, $comparison = null)
    {
        if (is_array($idcuentabancaria)) {
            $useMinMax = false;
            if (isset($idcuentabancaria['min'])) {
                $this->addUsingAlias(AbonoproveedordetallePeer::IDCUENTABANCARIA, $idcuentabancaria['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcuentabancaria['max'])) {
                $this->addUsingAlias(AbonoproveedordetallePeer::IDCUENTABANCARIA, $idcuentabancaria['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbonoproveedordetallePeer::IDCUENTABANCARIA, $idcuentabancaria, $comparison);
    }

    /**
     * Filter the query on the idusuario column
     *
     * Example usage:
     * <code>
     * $query->filterByIdusuario(1234); // WHERE idusuario = 1234
     * $query->filterByIdusuario(array(12, 34)); // WHERE idusuario IN (12, 34)
     * $query->filterByIdusuario(array('min' => 12)); // WHERE idusuario >= 12
     * $query->filterByIdusuario(array('max' => 12)); // WHERE idusuario <= 12
     * </code>
     *
     * @see       filterByUsuario()
     *
     * @param     mixed $idusuario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbonoproveedordetalleQuery The current query, for fluid interface
     */
    public function filterByIdusuario($idusuario = null, $comparison = null)
    {
        if (is_array($idusuario)) {
            $useMinMax = false;
            if (isset($idusuario['min'])) {
                $this->addUsingAlias(AbonoproveedordetallePeer::IDUSUARIO, $idusuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idusuario['max'])) {
                $this->addUsingAlias(AbonoproveedordetallePeer::IDUSUARIO, $idusuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbonoproveedordetallePeer::IDUSUARIO, $idusuario, $comparison);
    }

    /**
     * Filter the query on the abonoproveedordetalle_fechaabono column
     *
     * Example usage:
     * <code>
     * $query->filterByAbonoproveedordetalleFechaabono('2011-03-14'); // WHERE abonoproveedordetalle_fechaabono = '2011-03-14'
     * $query->filterByAbonoproveedordetalleFechaabono('now'); // WHERE abonoproveedordetalle_fechaabono = '2011-03-14'
     * $query->filterByAbonoproveedordetalleFechaabono(array('max' => 'yesterday')); // WHERE abonoproveedordetalle_fechaabono < '2011-03-13'
     * </code>
     *
     * @param     mixed $abonoproveedordetalleFechaabono The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbonoproveedordetalleQuery The current query, for fluid interface
     */
    public function filterByAbonoproveedordetalleFechaabono($abonoproveedordetalleFechaabono = null, $comparison = null)
    {
        if (is_array($abonoproveedordetalleFechaabono)) {
            $useMinMax = false;
            if (isset($abonoproveedordetalleFechaabono['min'])) {
                $this->addUsingAlias(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_FECHAABONO, $abonoproveedordetalleFechaabono['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($abonoproveedordetalleFechaabono['max'])) {
                $this->addUsingAlias(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_FECHAABONO, $abonoproveedordetalleFechaabono['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_FECHAABONO, $abonoproveedordetalleFechaabono, $comparison);
    }

    /**
     * Filter the query on the abonoproveedordetalle_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByAbonoproveedordetalleCantidad(1234); // WHERE abonoproveedordetalle_cantidad = 1234
     * $query->filterByAbonoproveedordetalleCantidad(array(12, 34)); // WHERE abonoproveedordetalle_cantidad IN (12, 34)
     * $query->filterByAbonoproveedordetalleCantidad(array('min' => 12)); // WHERE abonoproveedordetalle_cantidad >= 12
     * $query->filterByAbonoproveedordetalleCantidad(array('max' => 12)); // WHERE abonoproveedordetalle_cantidad <= 12
     * </code>
     *
     * @param     mixed $abonoproveedordetalleCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbonoproveedordetalleQuery The current query, for fluid interface
     */
    public function filterByAbonoproveedordetalleCantidad($abonoproveedordetalleCantidad = null, $comparison = null)
    {
        if (is_array($abonoproveedordetalleCantidad)) {
            $useMinMax = false;
            if (isset($abonoproveedordetalleCantidad['min'])) {
                $this->addUsingAlias(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_CANTIDAD, $abonoproveedordetalleCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($abonoproveedordetalleCantidad['max'])) {
                $this->addUsingAlias(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_CANTIDAD, $abonoproveedordetalleCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_CANTIDAD, $abonoproveedordetalleCantidad, $comparison);
    }

    /**
     * Filter the query on the abonoproveedordetalle_tipo column
     *
     * Example usage:
     * <code>
     * $query->filterByAbonoproveedordetalleTipo('fooValue');   // WHERE abonoproveedordetalle_tipo = 'fooValue'
     * $query->filterByAbonoproveedordetalleTipo('%fooValue%'); // WHERE abonoproveedordetalle_tipo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $abonoproveedordetalleTipo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbonoproveedordetalleQuery The current query, for fluid interface
     */
    public function filterByAbonoproveedordetalleTipo($abonoproveedordetalleTipo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($abonoproveedordetalleTipo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $abonoproveedordetalleTipo)) {
                $abonoproveedordetalleTipo = str_replace('*', '%', $abonoproveedordetalleTipo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_TIPO, $abonoproveedordetalleTipo, $comparison);
    }

    /**
     * Filter the query on the abonoproveedordetalle_referencia column
     *
     * Example usage:
     * <code>
     * $query->filterByAbonoproveedordetalleReferencia('fooValue');   // WHERE abonoproveedordetalle_referencia = 'fooValue'
     * $query->filterByAbonoproveedordetalleReferencia('%fooValue%'); // WHERE abonoproveedordetalle_referencia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $abonoproveedordetalleReferencia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbonoproveedordetalleQuery The current query, for fluid interface
     */
    public function filterByAbonoproveedordetalleReferencia($abonoproveedordetalleReferencia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($abonoproveedordetalleReferencia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $abonoproveedordetalleReferencia)) {
                $abonoproveedordetalleReferencia = str_replace('*', '%', $abonoproveedordetalleReferencia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_REFERENCIA, $abonoproveedordetalleReferencia, $comparison);
    }

    /**
     * Filter the query on the abonoproveedordetalle_comprobante column
     *
     * Example usage:
     * <code>
     * $query->filterByAbonoproveedordetalleComprobante('fooValue');   // WHERE abonoproveedordetalle_comprobante = 'fooValue'
     * $query->filterByAbonoproveedordetalleComprobante('%fooValue%'); // WHERE abonoproveedordetalle_comprobante LIKE '%fooValue%'
     * </code>
     *
     * @param     string $abonoproveedordetalleComprobante The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbonoproveedordetalleQuery The current query, for fluid interface
     */
    public function filterByAbonoproveedordetalleComprobante($abonoproveedordetalleComprobante = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($abonoproveedordetalleComprobante)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $abonoproveedordetalleComprobante)) {
                $abonoproveedordetalleComprobante = str_replace('*', '%', $abonoproveedordetalleComprobante);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_COMPROBANTE, $abonoproveedordetalleComprobante, $comparison);
    }

    /**
     * Filter the query on the abonoproveedordetalle_mediodepago column
     *
     * Example usage:
     * <code>
     * $query->filterByAbonoproveedordetalleMediodepago('fooValue');   // WHERE abonoproveedordetalle_mediodepago = 'fooValue'
     * $query->filterByAbonoproveedordetalleMediodepago('%fooValue%'); // WHERE abonoproveedordetalle_mediodepago LIKE '%fooValue%'
     * </code>
     *
     * @param     string $abonoproveedordetalleMediodepago The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbonoproveedordetalleQuery The current query, for fluid interface
     */
    public function filterByAbonoproveedordetalleMediodepago($abonoproveedordetalleMediodepago = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($abonoproveedordetalleMediodepago)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $abonoproveedordetalleMediodepago)) {
                $abonoproveedordetalleMediodepago = str_replace('*', '%', $abonoproveedordetalleMediodepago);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_MEDIODEPAGO, $abonoproveedordetalleMediodepago, $comparison);
    }

    /**
     * Filter the query on the abonoproveedordetalle_chequecirculacion column
     *
     * Example usage:
     * <code>
     * $query->filterByAbonoproveedordetalleChequecirculacion(true); // WHERE abonoproveedordetalle_chequecirculacion = true
     * $query->filterByAbonoproveedordetalleChequecirculacion('yes'); // WHERE abonoproveedordetalle_chequecirculacion = true
     * </code>
     *
     * @param     boolean|string $abonoproveedordetalleChequecirculacion The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbonoproveedordetalleQuery The current query, for fluid interface
     */
    public function filterByAbonoproveedordetalleChequecirculacion($abonoproveedordetalleChequecirculacion = null, $comparison = null)
    {
        if (is_string($abonoproveedordetalleChequecirculacion)) {
            $abonoproveedordetalleChequecirculacion = in_array(strtolower($abonoproveedordetalleChequecirculacion), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_CHEQUECIRCULACION, $abonoproveedordetalleChequecirculacion, $comparison);
    }

    /**
     * Filter the query on the abonoproveedordetalle_fechacobrocheque column
     *
     * Example usage:
     * <code>
     * $query->filterByAbonoproveedordetalleFechacobrocheque('2011-03-14'); // WHERE abonoproveedordetalle_fechacobrocheque = '2011-03-14'
     * $query->filterByAbonoproveedordetalleFechacobrocheque('now'); // WHERE abonoproveedordetalle_fechacobrocheque = '2011-03-14'
     * $query->filterByAbonoproveedordetalleFechacobrocheque(array('max' => 'yesterday')); // WHERE abonoproveedordetalle_fechacobrocheque < '2011-03-13'
     * </code>
     *
     * @param     mixed $abonoproveedordetalleFechacobrocheque The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbonoproveedordetalleQuery The current query, for fluid interface
     */
    public function filterByAbonoproveedordetalleFechacobrocheque($abonoproveedordetalleFechacobrocheque = null, $comparison = null)
    {
        if (is_array($abonoproveedordetalleFechacobrocheque)) {
            $useMinMax = false;
            if (isset($abonoproveedordetalleFechacobrocheque['min'])) {
                $this->addUsingAlias(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_FECHACOBROCHEQUE, $abonoproveedordetalleFechacobrocheque['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($abonoproveedordetalleFechacobrocheque['max'])) {
                $this->addUsingAlias(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_FECHACOBROCHEQUE, $abonoproveedordetalleFechacobrocheque['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_FECHACOBROCHEQUE, $abonoproveedordetalleFechacobrocheque, $comparison);
    }

    /**
     * Filter the query by a related Abonoproveedor object
     *
     * @param   Abonoproveedor|PropelObjectCollection $abonoproveedor The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AbonoproveedordetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAbonoproveedor($abonoproveedor, $comparison = null)
    {
        if ($abonoproveedor instanceof Abonoproveedor) {
            return $this
                ->addUsingAlias(AbonoproveedordetallePeer::IDABONOPROVEEDOR, $abonoproveedor->getIdabonoproveedor(), $comparison);
        } elseif ($abonoproveedor instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AbonoproveedordetallePeer::IDABONOPROVEEDOR, $abonoproveedor->toKeyValue('PrimaryKey', 'Idabonoproveedor'), $comparison);
        } else {
            throw new PropelException('filterByAbonoproveedor() only accepts arguments of type Abonoproveedor or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Abonoproveedor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AbonoproveedordetalleQuery The current query, for fluid interface
     */
    public function joinAbonoproveedor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Abonoproveedor');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Abonoproveedor');
        }

        return $this;
    }

    /**
     * Use the Abonoproveedor relation Abonoproveedor object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AbonoproveedorQuery A secondary query class using the current class as primary query
     */
    public function useAbonoproveedorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAbonoproveedor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Abonoproveedor', 'AbonoproveedorQuery');
    }

    /**
     * Filter the query by a related Cuentabancaria object
     *
     * @param   Cuentabancaria|PropelObjectCollection $cuentabancaria The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AbonoproveedordetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCuentabancaria($cuentabancaria, $comparison = null)
    {
        if ($cuentabancaria instanceof Cuentabancaria) {
            return $this
                ->addUsingAlias(AbonoproveedordetallePeer::IDCUENTABANCARIA, $cuentabancaria->getIdcuentabancaria(), $comparison);
        } elseif ($cuentabancaria instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AbonoproveedordetallePeer::IDCUENTABANCARIA, $cuentabancaria->toKeyValue('PrimaryKey', 'Idcuentabancaria'), $comparison);
        } else {
            throw new PropelException('filterByCuentabancaria() only accepts arguments of type Cuentabancaria or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Cuentabancaria relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AbonoproveedordetalleQuery The current query, for fluid interface
     */
    public function joinCuentabancaria($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Cuentabancaria');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Cuentabancaria');
        }

        return $this;
    }

    /**
     * Use the Cuentabancaria relation Cuentabancaria object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CuentabancariaQuery A secondary query class using the current class as primary query
     */
    public function useCuentabancariaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCuentabancaria($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Cuentabancaria', 'CuentabancariaQuery');
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AbonoproveedordetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(AbonoproveedordetallePeer::IDUSUARIO, $usuario->getIdusuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AbonoproveedordetallePeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
        } else {
            throw new PropelException('filterByUsuario() only accepts arguments of type Usuario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Usuario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AbonoproveedordetalleQuery The current query, for fluid interface
     */
    public function joinUsuario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Usuario');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Usuario');
        }

        return $this;
    }

    /**
     * Use the Usuario relation Usuario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuarioQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUsuario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Usuario', 'UsuarioQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Abonoproveedordetalle $abonoproveedordetalle Object to remove from the list of results
     *
     * @return AbonoproveedordetalleQuery The current query, for fluid interface
     */
    public function prune($abonoproveedordetalle = null)
    {
        if ($abonoproveedordetalle) {
            $this->addUsingAlias(AbonoproveedordetallePeer::IDABONOPROVEEDORDETALLE, $abonoproveedordetalle->getIdabonoproveedordetalle(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
