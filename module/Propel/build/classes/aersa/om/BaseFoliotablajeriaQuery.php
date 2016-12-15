<?php


/**
 * Base class that represents a query for the 'foliotablajeria' table.
 *
 *
 *
 * @method FoliotablajeriaQuery orderByIdfoliotablajeria($order = Criteria::ASC) Order by the idfoliotablajeria column
 * @method FoliotablajeriaQuery orderByFolio($order = Criteria::ASC) Order by the folio column
 * @method FoliotablajeriaQuery orderByIdempresa($order = Criteria::ASC) Order by the idempresa column
 * @method FoliotablajeriaQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 *
 * @method FoliotablajeriaQuery groupByIdfoliotablajeria() Group by the idfoliotablajeria column
 * @method FoliotablajeriaQuery groupByFolio() Group by the folio column
 * @method FoliotablajeriaQuery groupByIdempresa() Group by the idempresa column
 * @method FoliotablajeriaQuery groupByIdsucursal() Group by the idsucursal column
 *
 * @method FoliotablajeriaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FoliotablajeriaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FoliotablajeriaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method FoliotablajeriaQuery leftJoinEmpresa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empresa relation
 * @method FoliotablajeriaQuery rightJoinEmpresa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empresa relation
 * @method FoliotablajeriaQuery innerJoinEmpresa($relationAlias = null) Adds a INNER JOIN clause to the query using the Empresa relation
 *
 * @method FoliotablajeriaQuery leftJoinSucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursal relation
 * @method FoliotablajeriaQuery rightJoinSucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursal relation
 * @method FoliotablajeriaQuery innerJoinSucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursal relation
 *
 * @method Foliotablajeria findOne(PropelPDO $con = null) Return the first Foliotablajeria matching the query
 * @method Foliotablajeria findOneOrCreate(PropelPDO $con = null) Return the first Foliotablajeria matching the query, or a new Foliotablajeria object populated from the query conditions when no match is found
 *
 * @method Foliotablajeria findOneByFolio(int $folio) Return the first Foliotablajeria filtered by the folio column
 * @method Foliotablajeria findOneByIdempresa(int $idempresa) Return the first Foliotablajeria filtered by the idempresa column
 * @method Foliotablajeria findOneByIdsucursal(int $idsucursal) Return the first Foliotablajeria filtered by the idsucursal column
 *
 * @method array findByIdfoliotablajeria(int $idfoliotablajeria) Return Foliotablajeria objects filtered by the idfoliotablajeria column
 * @method array findByFolio(int $folio) Return Foliotablajeria objects filtered by the folio column
 * @method array findByIdempresa(int $idempresa) Return Foliotablajeria objects filtered by the idempresa column
 * @method array findByIdsucursal(int $idsucursal) Return Foliotablajeria objects filtered by the idsucursal column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseFoliotablajeriaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFoliotablajeriaQuery object.
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
            $modelName = 'Foliotablajeria';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FoliotablajeriaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FoliotablajeriaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FoliotablajeriaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FoliotablajeriaQuery) {
            return $criteria;
        }
        $query = new FoliotablajeriaQuery(null, null, $modelAlias);

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
     * @return   Foliotablajeria|Foliotablajeria[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FoliotablajeriaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FoliotablajeriaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Foliotablajeria A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdfoliotablajeria($key, $con = null)
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
     * @return                 Foliotablajeria A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idfoliotablajeria`, `folio`, `idempresa`, `idsucursal` FROM `foliotablajeria` WHERE `idfoliotablajeria` = :p0';
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
            $obj = new Foliotablajeria();
            $obj->hydrate($row);
            FoliotablajeriaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Foliotablajeria|Foliotablajeria[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Foliotablajeria[]|mixed the list of results, formatted by the current formatter
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
     * @return FoliotablajeriaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FoliotablajeriaPeer::IDFOLIOTABLAJERIA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FoliotablajeriaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FoliotablajeriaPeer::IDFOLIOTABLAJERIA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idfoliotablajeria column
     *
     * Example usage:
     * <code>
     * $query->filterByIdfoliotablajeria(1234); // WHERE idfoliotablajeria = 1234
     * $query->filterByIdfoliotablajeria(array(12, 34)); // WHERE idfoliotablajeria IN (12, 34)
     * $query->filterByIdfoliotablajeria(array('min' => 12)); // WHERE idfoliotablajeria >= 12
     * $query->filterByIdfoliotablajeria(array('max' => 12)); // WHERE idfoliotablajeria <= 12
     * </code>
     *
     * @param     mixed $idfoliotablajeria The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FoliotablajeriaQuery The current query, for fluid interface
     */
    public function filterByIdfoliotablajeria($idfoliotablajeria = null, $comparison = null)
    {
        if (is_array($idfoliotablajeria)) {
            $useMinMax = false;
            if (isset($idfoliotablajeria['min'])) {
                $this->addUsingAlias(FoliotablajeriaPeer::IDFOLIOTABLAJERIA, $idfoliotablajeria['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idfoliotablajeria['max'])) {
                $this->addUsingAlias(FoliotablajeriaPeer::IDFOLIOTABLAJERIA, $idfoliotablajeria['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FoliotablajeriaPeer::IDFOLIOTABLAJERIA, $idfoliotablajeria, $comparison);
    }

    /**
     * Filter the query on the folio column
     *
     * Example usage:
     * <code>
     * $query->filterByFolio(1234); // WHERE folio = 1234
     * $query->filterByFolio(array(12, 34)); // WHERE folio IN (12, 34)
     * $query->filterByFolio(array('min' => 12)); // WHERE folio >= 12
     * $query->filterByFolio(array('max' => 12)); // WHERE folio <= 12
     * </code>
     *
     * @param     mixed $folio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FoliotablajeriaQuery The current query, for fluid interface
     */
    public function filterByFolio($folio = null, $comparison = null)
    {
        if (is_array($folio)) {
            $useMinMax = false;
            if (isset($folio['min'])) {
                $this->addUsingAlias(FoliotablajeriaPeer::FOLIO, $folio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($folio['max'])) {
                $this->addUsingAlias(FoliotablajeriaPeer::FOLIO, $folio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FoliotablajeriaPeer::FOLIO, $folio, $comparison);
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
     * @return FoliotablajeriaQuery The current query, for fluid interface
     */
    public function filterByIdempresa($idempresa = null, $comparison = null)
    {
        if (is_array($idempresa)) {
            $useMinMax = false;
            if (isset($idempresa['min'])) {
                $this->addUsingAlias(FoliotablajeriaPeer::IDEMPRESA, $idempresa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempresa['max'])) {
                $this->addUsingAlias(FoliotablajeriaPeer::IDEMPRESA, $idempresa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FoliotablajeriaPeer::IDEMPRESA, $idempresa, $comparison);
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
     * @return FoliotablajeriaQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(FoliotablajeriaPeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(FoliotablajeriaPeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FoliotablajeriaPeer::IDSUCURSAL, $idsucursal, $comparison);
    }

    /**
     * Filter the query by a related Empresa object
     *
     * @param   Empresa|PropelObjectCollection $empresa The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FoliotablajeriaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpresa($empresa, $comparison = null)
    {
        if ($empresa instanceof Empresa) {
            return $this
                ->addUsingAlias(FoliotablajeriaPeer::IDEMPRESA, $empresa->getIdempresa(), $comparison);
        } elseif ($empresa instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FoliotablajeriaPeer::IDEMPRESA, $empresa->toKeyValue('PrimaryKey', 'Idempresa'), $comparison);
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
     * @return FoliotablajeriaQuery The current query, for fluid interface
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
     * Filter the query by a related Sucursal object
     *
     * @param   Sucursal|PropelObjectCollection $sucursal The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FoliotablajeriaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursal($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(FoliotablajeriaPeer::IDSUCURSAL, $sucursal->getIdsucursal(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FoliotablajeriaPeer::IDSUCURSAL, $sucursal->toKeyValue('PrimaryKey', 'Idsucursal'), $comparison);
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
     * @return FoliotablajeriaQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   Foliotablajeria $foliotablajeria Object to remove from the list of results
     *
     * @return FoliotablajeriaQuery The current query, for fluid interface
     */
    public function prune($foliotablajeria = null)
    {
        if ($foliotablajeria) {
            $this->addUsingAlias(FoliotablajeriaPeer::IDFOLIOTABLAJERIA, $foliotablajeria->getIdfoliotablajeria(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
