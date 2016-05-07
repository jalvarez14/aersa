<?php


/**
 * Base class that represents a query for the 'abonoproveedor' table.
 *
 *
 *
 * @method AbonoproveedorQuery orderByIdabonoproveedor($order = Criteria::ASC) Order by the idabonoproveedor column
 * @method AbonoproveedorQuery orderByIdproveedor($order = Criteria::ASC) Order by the idproveedor column
 * @method AbonoproveedorQuery orderByIdempresa($order = Criteria::ASC) Order by the idempresa column
 * @method AbonoproveedorQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method AbonoproveedorQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 *
 * @method AbonoproveedorQuery groupByIdabonoproveedor() Group by the idabonoproveedor column
 * @method AbonoproveedorQuery groupByIdproveedor() Group by the idproveedor column
 * @method AbonoproveedorQuery groupByIdempresa() Group by the idempresa column
 * @method AbonoproveedorQuery groupByIdsucursal() Group by the idsucursal column
 * @method AbonoproveedorQuery groupByIdempleado() Group by the idempleado column
 *
 * @method AbonoproveedorQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AbonoproveedorQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AbonoproveedorQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Abonoproveedor findOne(PropelPDO $con = null) Return the first Abonoproveedor matching the query
 * @method Abonoproveedor findOneOrCreate(PropelPDO $con = null) Return the first Abonoproveedor matching the query, or a new Abonoproveedor object populated from the query conditions when no match is found
 *
 * @method Abonoproveedor findOneByIdproveedor(int $idproveedor) Return the first Abonoproveedor filtered by the idproveedor column
 * @method Abonoproveedor findOneByIdempresa(int $idempresa) Return the first Abonoproveedor filtered by the idempresa column
 * @method Abonoproveedor findOneByIdsucursal(int $idsucursal) Return the first Abonoproveedor filtered by the idsucursal column
 * @method Abonoproveedor findOneByIdempleado(int $idempleado) Return the first Abonoproveedor filtered by the idempleado column
 *
 * @method array findByIdabonoproveedor(int $idabonoproveedor) Return Abonoproveedor objects filtered by the idabonoproveedor column
 * @method array findByIdproveedor(int $idproveedor) Return Abonoproveedor objects filtered by the idproveedor column
 * @method array findByIdempresa(int $idempresa) Return Abonoproveedor objects filtered by the idempresa column
 * @method array findByIdsucursal(int $idsucursal) Return Abonoproveedor objects filtered by the idsucursal column
 * @method array findByIdempleado(int $idempleado) Return Abonoproveedor objects filtered by the idempleado column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseAbonoproveedorQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAbonoproveedorQuery object.
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
            $modelName = 'Abonoproveedor';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AbonoproveedorQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AbonoproveedorQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AbonoproveedorQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AbonoproveedorQuery) {
            return $criteria;
        }
        $query = new AbonoproveedorQuery(null, null, $modelAlias);

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
     * @return   Abonoproveedor|Abonoproveedor[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AbonoproveedorPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AbonoproveedorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Abonoproveedor A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdabonoproveedor($key, $con = null)
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
     * @return                 Abonoproveedor A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idabonoproveedor`, `idproveedor`, `idempresa`, `idsucursal`, `idempleado` FROM `abonoproveedor` WHERE `idabonoproveedor` = :p0';
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
            $obj = new Abonoproveedor();
            $obj->hydrate($row);
            AbonoproveedorPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Abonoproveedor|Abonoproveedor[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Abonoproveedor[]|mixed the list of results, formatted by the current formatter
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
     * @return AbonoproveedorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AbonoproveedorPeer::IDABONOPROVEEDOR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AbonoproveedorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AbonoproveedorPeer::IDABONOPROVEEDOR, $keys, Criteria::IN);
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
     * @param     mixed $idabonoproveedor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbonoproveedorQuery The current query, for fluid interface
     */
    public function filterByIdabonoproveedor($idabonoproveedor = null, $comparison = null)
    {
        if (is_array($idabonoproveedor)) {
            $useMinMax = false;
            if (isset($idabonoproveedor['min'])) {
                $this->addUsingAlias(AbonoproveedorPeer::IDABONOPROVEEDOR, $idabonoproveedor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idabonoproveedor['max'])) {
                $this->addUsingAlias(AbonoproveedorPeer::IDABONOPROVEEDOR, $idabonoproveedor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbonoproveedorPeer::IDABONOPROVEEDOR, $idabonoproveedor, $comparison);
    }

    /**
     * Filter the query on the idproveedor column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproveedor(1234); // WHERE idproveedor = 1234
     * $query->filterByIdproveedor(array(12, 34)); // WHERE idproveedor IN (12, 34)
     * $query->filterByIdproveedor(array('min' => 12)); // WHERE idproveedor >= 12
     * $query->filterByIdproveedor(array('max' => 12)); // WHERE idproveedor <= 12
     * </code>
     *
     * @param     mixed $idproveedor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbonoproveedorQuery The current query, for fluid interface
     */
    public function filterByIdproveedor($idproveedor = null, $comparison = null)
    {
        if (is_array($idproveedor)) {
            $useMinMax = false;
            if (isset($idproveedor['min'])) {
                $this->addUsingAlias(AbonoproveedorPeer::IDPROVEEDOR, $idproveedor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproveedor['max'])) {
                $this->addUsingAlias(AbonoproveedorPeer::IDPROVEEDOR, $idproveedor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbonoproveedorPeer::IDPROVEEDOR, $idproveedor, $comparison);
    }

    /**
     * Filter the query on the idempresa column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempresa(1234); // WHERE idempresa = 1234
     * $query->filterByIdempresa(array(12, 34)); // WHERE idempresa IN (12, 34)
     * $query->filterByIdempresa(array('min' => 12)); // WHERE idempresa >= 12
     * $query->filterByIdempresa(array('max' => 12)); // WHERE idempresa <= 12
     * </code>
     *
     * @param     mixed $idempresa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbonoproveedorQuery The current query, for fluid interface
     */
    public function filterByIdempresa($idempresa = null, $comparison = null)
    {
        if (is_array($idempresa)) {
            $useMinMax = false;
            if (isset($idempresa['min'])) {
                $this->addUsingAlias(AbonoproveedorPeer::IDEMPRESA, $idempresa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempresa['max'])) {
                $this->addUsingAlias(AbonoproveedorPeer::IDEMPRESA, $idempresa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbonoproveedorPeer::IDEMPRESA, $idempresa, $comparison);
    }

    /**
     * Filter the query on the idsucursal column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsucursal(1234); // WHERE idsucursal = 1234
     * $query->filterByIdsucursal(array(12, 34)); // WHERE idsucursal IN (12, 34)
     * $query->filterByIdsucursal(array('min' => 12)); // WHERE idsucursal >= 12
     * $query->filterByIdsucursal(array('max' => 12)); // WHERE idsucursal <= 12
     * </code>
     *
     * @param     mixed $idsucursal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbonoproveedorQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(AbonoproveedorPeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(AbonoproveedorPeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbonoproveedorPeer::IDSUCURSAL, $idsucursal, $comparison);
    }

    /**
     * Filter the query on the idempleado column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempleado(1234); // WHERE idempleado = 1234
     * $query->filterByIdempleado(array(12, 34)); // WHERE idempleado IN (12, 34)
     * $query->filterByIdempleado(array('min' => 12)); // WHERE idempleado >= 12
     * $query->filterByIdempleado(array('max' => 12)); // WHERE idempleado <= 12
     * </code>
     *
     * @param     mixed $idempleado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbonoproveedorQuery The current query, for fluid interface
     */
    public function filterByIdempleado($idempleado = null, $comparison = null)
    {
        if (is_array($idempleado)) {
            $useMinMax = false;
            if (isset($idempleado['min'])) {
                $this->addUsingAlias(AbonoproveedorPeer::IDEMPLEADO, $idempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleado['max'])) {
                $this->addUsingAlias(AbonoproveedorPeer::IDEMPLEADO, $idempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbonoproveedorPeer::IDEMPLEADO, $idempleado, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Abonoproveedor $abonoproveedor Object to remove from the list of results
     *
     * @return AbonoproveedorQuery The current query, for fluid interface
     */
    public function prune($abonoproveedor = null)
    {
        if ($abonoproveedor) {
            $this->addUsingAlias(AbonoproveedorPeer::IDABONOPROVEEDOR, $abonoproveedor->getIdabonoproveedor(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
