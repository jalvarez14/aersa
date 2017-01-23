<?php


/**
 * Base class that represents a query for the 'asociacionempresa' table.
 *
 *
 *
 * @method AsociacionempresaQuery orderByIdasociacionempresa($order = Criteria::ASC) Order by the idasociacionempresa column
 * @method AsociacionempresaQuery orderByIdempresaproveedor($order = Criteria::ASC) Order by the idempresaproveedor column
 * @method AsociacionempresaQuery orderByIdempresacliente($order = Criteria::ASC) Order by the idempresacliente column
 *
 * @method AsociacionempresaQuery groupByIdasociacionempresa() Group by the idasociacionempresa column
 * @method AsociacionempresaQuery groupByIdempresaproveedor() Group by the idempresaproveedor column
 * @method AsociacionempresaQuery groupByIdempresacliente() Group by the idempresacliente column
 *
 * @method AsociacionempresaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AsociacionempresaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AsociacionempresaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method AsociacionempresaQuery leftJoinEmpresaRelatedByIdempresacliente($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmpresaRelatedByIdempresacliente relation
 * @method AsociacionempresaQuery rightJoinEmpresaRelatedByIdempresacliente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmpresaRelatedByIdempresacliente relation
 * @method AsociacionempresaQuery innerJoinEmpresaRelatedByIdempresacliente($relationAlias = null) Adds a INNER JOIN clause to the query using the EmpresaRelatedByIdempresacliente relation
 *
 * @method AsociacionempresaQuery leftJoinEmpresaRelatedByIdempresaproveedor($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmpresaRelatedByIdempresaproveedor relation
 * @method AsociacionempresaQuery rightJoinEmpresaRelatedByIdempresaproveedor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmpresaRelatedByIdempresaproveedor relation
 * @method AsociacionempresaQuery innerJoinEmpresaRelatedByIdempresaproveedor($relationAlias = null) Adds a INNER JOIN clause to the query using the EmpresaRelatedByIdempresaproveedor relation
 *
 * @method Asociacionempresa findOne(PropelPDO $con = null) Return the first Asociacionempresa matching the query
 * @method Asociacionempresa findOneOrCreate(PropelPDO $con = null) Return the first Asociacionempresa matching the query, or a new Asociacionempresa object populated from the query conditions when no match is found
 *
 * @method Asociacionempresa findOneByIdempresaproveedor(int $idempresaproveedor) Return the first Asociacionempresa filtered by the idempresaproveedor column
 * @method Asociacionempresa findOneByIdempresacliente(int $idempresacliente) Return the first Asociacionempresa filtered by the idempresacliente column
 *
 * @method array findByIdasociacionempresa(int $idasociacionempresa) Return Asociacionempresa objects filtered by the idasociacionempresa column
 * @method array findByIdempresaproveedor(int $idempresaproveedor) Return Asociacionempresa objects filtered by the idempresaproveedor column
 * @method array findByIdempresacliente(int $idempresacliente) Return Asociacionempresa objects filtered by the idempresacliente column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseAsociacionempresaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAsociacionempresaQuery object.
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
            $modelName = 'Asociacionempresa';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AsociacionempresaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AsociacionempresaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AsociacionempresaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AsociacionempresaQuery) {
            return $criteria;
        }
        $query = new AsociacionempresaQuery(null, null, $modelAlias);

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
     * @return   Asociacionempresa|Asociacionempresa[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AsociacionempresaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AsociacionempresaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Asociacionempresa A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdasociacionempresa($key, $con = null)
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
     * @return                 Asociacionempresa A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idasociacionempresa`, `idempresaproveedor`, `idempresacliente` FROM `asociacionempresa` WHERE `idasociacionempresa` = :p0';
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
            $obj = new Asociacionempresa();
            $obj->hydrate($row);
            AsociacionempresaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Asociacionempresa|Asociacionempresa[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Asociacionempresa[]|mixed the list of results, formatted by the current formatter
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
     * @return AsociacionempresaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AsociacionempresaPeer::IDASOCIACIONEMPRESA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AsociacionempresaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AsociacionempresaPeer::IDASOCIACIONEMPRESA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idasociacionempresa column
     *
     * Example usage:
     * <code>
     * $query->filterByIdasociacionempresa(1234); // WHERE idasociacionempresa = 1234
     * $query->filterByIdasociacionempresa(array(12, 34)); // WHERE idasociacionempresa IN (12, 34)
     * $query->filterByIdasociacionempresa(array('min' => 12)); // WHERE idasociacionempresa >= 12
     * $query->filterByIdasociacionempresa(array('max' => 12)); // WHERE idasociacionempresa <= 12
     * </code>
     *
     * @param     mixed $idasociacionempresa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AsociacionempresaQuery The current query, for fluid interface
     */
    public function filterByIdasociacionempresa($idasociacionempresa = null, $comparison = null)
    {
        if (is_array($idasociacionempresa)) {
            $useMinMax = false;
            if (isset($idasociacionempresa['min'])) {
                $this->addUsingAlias(AsociacionempresaPeer::IDASOCIACIONEMPRESA, $idasociacionempresa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idasociacionempresa['max'])) {
                $this->addUsingAlias(AsociacionempresaPeer::IDASOCIACIONEMPRESA, $idasociacionempresa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AsociacionempresaPeer::IDASOCIACIONEMPRESA, $idasociacionempresa, $comparison);
    }

    /**
     * Filter the query on the idempresaproveedor column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempresaproveedor(1234); // WHERE idempresaproveedor = 1234
     * $query->filterByIdempresaproveedor(array(12, 34)); // WHERE idempresaproveedor IN (12, 34)
     * $query->filterByIdempresaproveedor(array('min' => 12)); // WHERE idempresaproveedor >= 12
     * $query->filterByIdempresaproveedor(array('max' => 12)); // WHERE idempresaproveedor <= 12
     * </code>
     *
     * @see       filterByEmpresaRelatedByIdempresaproveedor()
     *
     * @param     mixed $idempresaproveedor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AsociacionempresaQuery The current query, for fluid interface
     */
    public function filterByIdempresaproveedor($idempresaproveedor = null, $comparison = null)
    {
        if (is_array($idempresaproveedor)) {
            $useMinMax = false;
            if (isset($idempresaproveedor['min'])) {
                $this->addUsingAlias(AsociacionempresaPeer::IDEMPRESAPROVEEDOR, $idempresaproveedor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempresaproveedor['max'])) {
                $this->addUsingAlias(AsociacionempresaPeer::IDEMPRESAPROVEEDOR, $idempresaproveedor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AsociacionempresaPeer::IDEMPRESAPROVEEDOR, $idempresaproveedor, $comparison);
    }

    /**
     * Filter the query on the idempresacliente column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempresacliente(1234); // WHERE idempresacliente = 1234
     * $query->filterByIdempresacliente(array(12, 34)); // WHERE idempresacliente IN (12, 34)
     * $query->filterByIdempresacliente(array('min' => 12)); // WHERE idempresacliente >= 12
     * $query->filterByIdempresacliente(array('max' => 12)); // WHERE idempresacliente <= 12
     * </code>
     *
     * @see       filterByEmpresaRelatedByIdempresacliente()
     *
     * @param     mixed $idempresacliente The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AsociacionempresaQuery The current query, for fluid interface
     */
    public function filterByIdempresacliente($idempresacliente = null, $comparison = null)
    {
        if (is_array($idempresacliente)) {
            $useMinMax = false;
            if (isset($idempresacliente['min'])) {
                $this->addUsingAlias(AsociacionempresaPeer::IDEMPRESACLIENTE, $idempresacliente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempresacliente['max'])) {
                $this->addUsingAlias(AsociacionempresaPeer::IDEMPRESACLIENTE, $idempresacliente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AsociacionempresaPeer::IDEMPRESACLIENTE, $idempresacliente, $comparison);
    }

    /**
     * Filter the query by a related Empresa object
     *
     * @param   Empresa|PropelObjectCollection $empresa The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AsociacionempresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpresaRelatedByIdempresacliente($empresa, $comparison = null)
    {
        if ($empresa instanceof Empresa) {
            return $this
                ->addUsingAlias(AsociacionempresaPeer::IDEMPRESACLIENTE, $empresa->getIdempresa(), $comparison);
        } elseif ($empresa instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AsociacionempresaPeer::IDEMPRESACLIENTE, $empresa->toKeyValue('PrimaryKey', 'Idempresa'), $comparison);
        } else {
            throw new PropelException('filterByEmpresaRelatedByIdempresacliente() only accepts arguments of type Empresa or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EmpresaRelatedByIdempresacliente relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AsociacionempresaQuery The current query, for fluid interface
     */
    public function joinEmpresaRelatedByIdempresacliente($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EmpresaRelatedByIdempresacliente');

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
            $this->addJoinObject($join, 'EmpresaRelatedByIdempresacliente');
        }

        return $this;
    }

    /**
     * Use the EmpresaRelatedByIdempresacliente relation Empresa object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpresaQuery A secondary query class using the current class as primary query
     */
    public function useEmpresaRelatedByIdempresaclienteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpresaRelatedByIdempresacliente($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EmpresaRelatedByIdempresacliente', 'EmpresaQuery');
    }

    /**
     * Filter the query by a related Empresa object
     *
     * @param   Empresa|PropelObjectCollection $empresa The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AsociacionempresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpresaRelatedByIdempresaproveedor($empresa, $comparison = null)
    {
        if ($empresa instanceof Empresa) {
            return $this
                ->addUsingAlias(AsociacionempresaPeer::IDEMPRESAPROVEEDOR, $empresa->getIdempresa(), $comparison);
        } elseif ($empresa instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AsociacionempresaPeer::IDEMPRESAPROVEEDOR, $empresa->toKeyValue('PrimaryKey', 'Idempresa'), $comparison);
        } else {
            throw new PropelException('filterByEmpresaRelatedByIdempresaproveedor() only accepts arguments of type Empresa or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EmpresaRelatedByIdempresaproveedor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AsociacionempresaQuery The current query, for fluid interface
     */
    public function joinEmpresaRelatedByIdempresaproveedor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EmpresaRelatedByIdempresaproveedor');

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
            $this->addJoinObject($join, 'EmpresaRelatedByIdempresaproveedor');
        }

        return $this;
    }

    /**
     * Use the EmpresaRelatedByIdempresaproveedor relation Empresa object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpresaQuery A secondary query class using the current class as primary query
     */
    public function useEmpresaRelatedByIdempresaproveedorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpresaRelatedByIdempresaproveedor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EmpresaRelatedByIdempresaproveedor', 'EmpresaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Asociacionempresa $asociacionempresa Object to remove from the list of results
     *
     * @return AsociacionempresaQuery The current query, for fluid interface
     */
    public function prune($asociacionempresa = null)
    {
        if ($asociacionempresa) {
            $this->addUsingAlias(AsociacionempresaPeer::IDASOCIACIONEMPRESA, $asociacionempresa->getIdasociacionempresa(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
