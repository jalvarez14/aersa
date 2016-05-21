<?php


/**
 * Base class that represents a query for the 'abonoproveedor' table.
 *
 *
 *
 * @method AbonoproveedorQuery orderByIdabonoproveedor($order = Criteria::ASC) Order by the idabonoproveedor column
 * @method AbonoproveedorQuery orderByIdempresa($order = Criteria::ASC) Order by the idempresa column
 * @method AbonoproveedorQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method AbonoproveedorQuery orderByIdproveedor($order = Criteria::ASC) Order by the idproveedor column
 * @method AbonoproveedorQuery orderByAbonoproveedorBalance($order = Criteria::ASC) Order by the abonoproveedor_balance column
 *
 * @method AbonoproveedorQuery groupByIdabonoproveedor() Group by the idabonoproveedor column
 * @method AbonoproveedorQuery groupByIdempresa() Group by the idempresa column
 * @method AbonoproveedorQuery groupByIdsucursal() Group by the idsucursal column
 * @method AbonoproveedorQuery groupByIdproveedor() Group by the idproveedor column
 * @method AbonoproveedorQuery groupByAbonoproveedorBalance() Group by the abonoproveedor_balance column
 *
 * @method AbonoproveedorQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AbonoproveedorQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AbonoproveedorQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method AbonoproveedorQuery leftJoinEmpresa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empresa relation
 * @method AbonoproveedorQuery rightJoinEmpresa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empresa relation
 * @method AbonoproveedorQuery innerJoinEmpresa($relationAlias = null) Adds a INNER JOIN clause to the query using the Empresa relation
 *
 * @method AbonoproveedorQuery leftJoinProveedor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Proveedor relation
 * @method AbonoproveedorQuery rightJoinProveedor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Proveedor relation
 * @method AbonoproveedorQuery innerJoinProveedor($relationAlias = null) Adds a INNER JOIN clause to the query using the Proveedor relation
 *
 * @method AbonoproveedorQuery leftJoinSucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursal relation
 * @method AbonoproveedorQuery rightJoinSucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursal relation
 * @method AbonoproveedorQuery innerJoinSucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursal relation
 *
 * @method AbonoproveedorQuery leftJoinAbonoproveedordetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Abonoproveedordetalle relation
 * @method AbonoproveedorQuery rightJoinAbonoproveedordetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Abonoproveedordetalle relation
 * @method AbonoproveedorQuery innerJoinAbonoproveedordetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Abonoproveedordetalle relation
 *
 * @method Abonoproveedor findOne(PropelPDO $con = null) Return the first Abonoproveedor matching the query
 * @method Abonoproveedor findOneOrCreate(PropelPDO $con = null) Return the first Abonoproveedor matching the query, or a new Abonoproveedor object populated from the query conditions when no match is found
 *
 * @method Abonoproveedor findOneByIdempresa(int $idempresa) Return the first Abonoproveedor filtered by the idempresa column
 * @method Abonoproveedor findOneByIdsucursal(int $idsucursal) Return the first Abonoproveedor filtered by the idsucursal column
 * @method Abonoproveedor findOneByIdproveedor(int $idproveedor) Return the first Abonoproveedor filtered by the idproveedor column
 * @method Abonoproveedor findOneByAbonoproveedorBalance(string $abonoproveedor_balance) Return the first Abonoproveedor filtered by the abonoproveedor_balance column
 *
 * @method array findByIdabonoproveedor(int $idabonoproveedor) Return Abonoproveedor objects filtered by the idabonoproveedor column
 * @method array findByIdempresa(int $idempresa) Return Abonoproveedor objects filtered by the idempresa column
 * @method array findByIdsucursal(int $idsucursal) Return Abonoproveedor objects filtered by the idsucursal column
 * @method array findByIdproveedor(int $idproveedor) Return Abonoproveedor objects filtered by the idproveedor column
 * @method array findByAbonoproveedorBalance(string $abonoproveedor_balance) Return Abonoproveedor objects filtered by the abonoproveedor_balance column
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
        $sql = 'SELECT `idabonoproveedor`, `idempresa`, `idsucursal`, `idproveedor`, `abonoproveedor_balance` FROM `abonoproveedor` WHERE `idabonoproveedor` = :p0';
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
     * @see       filterByEmpresa()
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
     * @see       filterBySucursal()
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
     * @see       filterByProveedor()
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
     * Filter the query on the abonoproveedor_balance column
     *
     * Example usage:
     * <code>
     * $query->filterByAbonoproveedorBalance(1234); // WHERE abonoproveedor_balance = 1234
     * $query->filterByAbonoproveedorBalance(array(12, 34)); // WHERE abonoproveedor_balance IN (12, 34)
     * $query->filterByAbonoproveedorBalance(array('min' => 12)); // WHERE abonoproveedor_balance >= 12
     * $query->filterByAbonoproveedorBalance(array('max' => 12)); // WHERE abonoproveedor_balance <= 12
     * </code>
     *
     * @param     mixed $abonoproveedorBalance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbonoproveedorQuery The current query, for fluid interface
     */
    public function filterByAbonoproveedorBalance($abonoproveedorBalance = null, $comparison = null)
    {
        if (is_array($abonoproveedorBalance)) {
            $useMinMax = false;
            if (isset($abonoproveedorBalance['min'])) {
                $this->addUsingAlias(AbonoproveedorPeer::ABONOPROVEEDOR_BALANCE, $abonoproveedorBalance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($abonoproveedorBalance['max'])) {
                $this->addUsingAlias(AbonoproveedorPeer::ABONOPROVEEDOR_BALANCE, $abonoproveedorBalance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbonoproveedorPeer::ABONOPROVEEDOR_BALANCE, $abonoproveedorBalance, $comparison);
    }

    /**
     * Filter the query by a related Empresa object
     *
     * @param   Empresa|PropelObjectCollection $empresa The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AbonoproveedorQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpresa($empresa, $comparison = null)
    {
        if ($empresa instanceof Empresa) {
            return $this
                ->addUsingAlias(AbonoproveedorPeer::IDEMPRESA, $empresa->getIdempresa(), $comparison);
        } elseif ($empresa instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AbonoproveedorPeer::IDEMPRESA, $empresa->toKeyValue('PrimaryKey', 'Idempresa'), $comparison);
        } else {
            throw new PropelException('filterByEmpresa() only accepts arguments of type Empresa or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Empresa relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AbonoproveedorQuery The current query, for fluid interface
     */
    public function joinEmpresa($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Empresa');

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
            $this->addJoinObject($join, 'Empresa');
        }

        return $this;
    }

    /**
     * Use the Empresa relation Empresa object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpresaQuery A secondary query class using the current class as primary query
     */
    public function useEmpresaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpresa($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Empresa', 'EmpresaQuery');
    }

    /**
     * Filter the query by a related Proveedor object
     *
     * @param   Proveedor|PropelObjectCollection $proveedor The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AbonoproveedorQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProveedor($proveedor, $comparison = null)
    {
        if ($proveedor instanceof Proveedor) {
            return $this
                ->addUsingAlias(AbonoproveedorPeer::IDPROVEEDOR, $proveedor->getIdproveedor(), $comparison);
        } elseif ($proveedor instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AbonoproveedorPeer::IDPROVEEDOR, $proveedor->toKeyValue('PrimaryKey', 'Idproveedor'), $comparison);
        } else {
            throw new PropelException('filterByProveedor() only accepts arguments of type Proveedor or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Proveedor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AbonoproveedorQuery The current query, for fluid interface
     */
    public function joinProveedor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Proveedor');

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
            $this->addJoinObject($join, 'Proveedor');
        }

        return $this;
    }

    /**
     * Use the Proveedor relation Proveedor object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProveedorQuery A secondary query class using the current class as primary query
     */
    public function useProveedorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProveedor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Proveedor', 'ProveedorQuery');
    }

    /**
     * Filter the query by a related Sucursal object
     *
     * @param   Sucursal|PropelObjectCollection $sucursal The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AbonoproveedorQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursal($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(AbonoproveedorPeer::IDSUCURSAL, $sucursal->getIdsucursal(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AbonoproveedorPeer::IDSUCURSAL, $sucursal->toKeyValue('PrimaryKey', 'Idsucursal'), $comparison);
        } else {
            throw new PropelException('filterBySucursal() only accepts arguments of type Sucursal or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Sucursal relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AbonoproveedorQuery The current query, for fluid interface
     */
    public function joinSucursal($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Sucursal');

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
            $this->addJoinObject($join, 'Sucursal');
        }

        return $this;
    }

    /**
     * Use the Sucursal relation Sucursal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SucursalQuery A secondary query class using the current class as primary query
     */
    public function useSucursalQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSucursal($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Sucursal', 'SucursalQuery');
    }

    /**
     * Filter the query by a related Abonoproveedordetalle object
     *
     * @param   Abonoproveedordetalle|PropelObjectCollection $abonoproveedordetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AbonoproveedorQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAbonoproveedordetalle($abonoproveedordetalle, $comparison = null)
    {
        if ($abonoproveedordetalle instanceof Abonoproveedordetalle) {
            return $this
                ->addUsingAlias(AbonoproveedorPeer::IDABONOPROVEEDOR, $abonoproveedordetalle->getIdabonoproveedor(), $comparison);
        } elseif ($abonoproveedordetalle instanceof PropelObjectCollection) {
            return $this
                ->useAbonoproveedordetalleQuery()
                ->filterByPrimaryKeys($abonoproveedordetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAbonoproveedordetalle() only accepts arguments of type Abonoproveedordetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Abonoproveedordetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AbonoproveedorQuery The current query, for fluid interface
     */
    public function joinAbonoproveedordetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Abonoproveedordetalle');

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
            $this->addJoinObject($join, 'Abonoproveedordetalle');
        }

        return $this;
    }

    /**
     * Use the Abonoproveedordetalle relation Abonoproveedordetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AbonoproveedordetalleQuery A secondary query class using the current class as primary query
     */
    public function useAbonoproveedordetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAbonoproveedordetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Abonoproveedordetalle', 'AbonoproveedordetalleQuery');
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
