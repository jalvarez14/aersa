<?php


/**
 * Base class that represents a query for the 'unidadmedida' table.
 *
 *
 *
 * @method UnidadmedidaQuery orderByIdunidadmedida($order = Criteria::ASC) Order by the idunidadmedida column
 * @method UnidadmedidaQuery orderByUnidadmedidaNombre($order = Criteria::ASC) Order by the unidadmedida_nombre column
 *
 * @method UnidadmedidaQuery groupByIdunidadmedida() Group by the idunidadmedida column
 * @method UnidadmedidaQuery groupByUnidadmedidaNombre() Group by the unidadmedida_nombre column
 *
 * @method UnidadmedidaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method UnidadmedidaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method UnidadmedidaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method UnidadmedidaQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method UnidadmedidaQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method UnidadmedidaQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method Unidadmedida findOne(PropelPDO $con = null) Return the first Unidadmedida matching the query
 * @method Unidadmedida findOneOrCreate(PropelPDO $con = null) Return the first Unidadmedida matching the query, or a new Unidadmedida object populated from the query conditions when no match is found
 *
 * @method Unidadmedida findOneByUnidadmedidaNombre(string $unidadmedida_nombre) Return the first Unidadmedida filtered by the unidadmedida_nombre column
 *
 * @method array findByIdunidadmedida(int $idunidadmedida) Return Unidadmedida objects filtered by the idunidadmedida column
 * @method array findByUnidadmedidaNombre(string $unidadmedida_nombre) Return Unidadmedida objects filtered by the unidadmedida_nombre column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseUnidadmedidaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseUnidadmedidaQuery object.
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
            $modelName = 'Unidadmedida';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UnidadmedidaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   UnidadmedidaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return UnidadmedidaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UnidadmedidaQuery) {
            return $criteria;
        }
        $query = new UnidadmedidaQuery(null, null, $modelAlias);

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
     * @return   Unidadmedida|Unidadmedida[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = UnidadmedidaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(UnidadmedidaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Unidadmedida A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdunidadmedida($key, $con = null)
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
     * @return                 Unidadmedida A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idunidadmedida`, `unidadmedida_nombre` FROM `unidadmedida` WHERE `idunidadmedida` = :p0';
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
            $obj = new Unidadmedida();
            $obj->hydrate($row);
            UnidadmedidaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Unidadmedida|Unidadmedida[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Unidadmedida[]|mixed the list of results, formatted by the current formatter
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
     * @return UnidadmedidaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UnidadmedidaPeer::IDUNIDADMEDIDA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return UnidadmedidaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UnidadmedidaPeer::IDUNIDADMEDIDA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idunidadmedida column
     *
     * Example usage:
     * <code>
     * $query->filterByIdunidadmedida(1234); // WHERE idunidadmedida = 1234
     * $query->filterByIdunidadmedida(array(12, 34)); // WHERE idunidadmedida IN (12, 34)
     * $query->filterByIdunidadmedida(array('min' => 12)); // WHERE idunidadmedida >= 12
     * $query->filterByIdunidadmedida(array('max' => 12)); // WHERE idunidadmedida <= 12
     * </code>
     *
     * @param     mixed $idunidadmedida The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UnidadmedidaQuery The current query, for fluid interface
     */
    public function filterByIdunidadmedida($idunidadmedida = null, $comparison = null)
    {
        if (is_array($idunidadmedida)) {
            $useMinMax = false;
            if (isset($idunidadmedida['min'])) {
                $this->addUsingAlias(UnidadmedidaPeer::IDUNIDADMEDIDA, $idunidadmedida['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idunidadmedida['max'])) {
                $this->addUsingAlias(UnidadmedidaPeer::IDUNIDADMEDIDA, $idunidadmedida['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UnidadmedidaPeer::IDUNIDADMEDIDA, $idunidadmedida, $comparison);
    }

    /**
     * Filter the query on the unidadmedida_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByUnidadmedidaNombre('fooValue');   // WHERE unidadmedida_nombre = 'fooValue'
     * $query->filterByUnidadmedidaNombre('%fooValue%'); // WHERE unidadmedida_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $unidadmedidaNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UnidadmedidaQuery The current query, for fluid interface
     */
    public function filterByUnidadmedidaNombre($unidadmedidaNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unidadmedidaNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $unidadmedidaNombre)) {
                $unidadmedidaNombre = str_replace('*', '%', $unidadmedidaNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UnidadmedidaPeer::UNIDADMEDIDA_NOMBRE, $unidadmedidaNombre, $comparison);
    }

    /**
     * Filter the query by a related Producto object
     *
     * @param   Producto|PropelObjectCollection $producto  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UnidadmedidaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(UnidadmedidaPeer::IDUNIDADMEDIDA, $producto->getIdunidadmedida(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            return $this
                ->useProductoQuery()
                ->filterByPrimaryKeys($producto->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProducto() only accepts arguments of type Producto or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Producto relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UnidadmedidaQuery The current query, for fluid interface
     */
    public function joinProducto($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Producto');

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
            $this->addJoinObject($join, 'Producto');
        }

        return $this;
    }

    /**
     * Use the Producto relation Producto object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProductoQuery A secondary query class using the current class as primary query
     */
    public function useProductoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinProducto($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Producto', 'ProductoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Unidadmedida $unidadmedida Object to remove from the list of results
     *
     * @return UnidadmedidaQuery The current query, for fluid interface
     */
    public function prune($unidadmedida = null)
    {
        if ($unidadmedida) {
            $this->addUsingAlias(UnidadmedidaPeer::IDUNIDADMEDIDA, $unidadmedida->getIdunidadmedida(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
