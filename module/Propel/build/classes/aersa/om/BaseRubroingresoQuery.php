<?php


/**
 * Base class that represents a query for the 'rubroingreso' table.
 *
 *
 *
 * @method RubroingresoQuery orderByIdrubroingreso($order = Criteria::ASC) Order by the idrubroingreso column
 * @method RubroingresoQuery orderByRubroingresoNombre($order = Criteria::ASC) Order by the rubroingreso_nombre column
 * @method RubroingresoQuery orderByRubroingresoDescripcion($order = Criteria::ASC) Order by the rubroingreso_descripcion column
 *
 * @method RubroingresoQuery groupByIdrubroingreso() Group by the idrubroingreso column
 * @method RubroingresoQuery groupByRubroingresoNombre() Group by the rubroingreso_nombre column
 * @method RubroingresoQuery groupByRubroingresoDescripcion() Group by the rubroingreso_descripcion column
 *
 * @method RubroingresoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RubroingresoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RubroingresoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RubroingresoQuery leftJoinIngresodetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ingresodetalle relation
 * @method RubroingresoQuery rightJoinIngresodetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ingresodetalle relation
 * @method RubroingresoQuery innerJoinIngresodetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Ingresodetalle relation
 *
 * @method Rubroingreso findOne(PropelPDO $con = null) Return the first Rubroingreso matching the query
 * @method Rubroingreso findOneOrCreate(PropelPDO $con = null) Return the first Rubroingreso matching the query, or a new Rubroingreso object populated from the query conditions when no match is found
 *
 * @method Rubroingreso findOneByRubroingresoNombre(string $rubroingreso_nombre) Return the first Rubroingreso filtered by the rubroingreso_nombre column
 * @method Rubroingreso findOneByRubroingresoDescripcion(string $rubroingreso_descripcion) Return the first Rubroingreso filtered by the rubroingreso_descripcion column
 *
 * @method array findByIdrubroingreso(int $idrubroingreso) Return Rubroingreso objects filtered by the idrubroingreso column
 * @method array findByRubroingresoNombre(string $rubroingreso_nombre) Return Rubroingreso objects filtered by the rubroingreso_nombre column
 * @method array findByRubroingresoDescripcion(string $rubroingreso_descripcion) Return Rubroingreso objects filtered by the rubroingreso_descripcion column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseRubroingresoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRubroingresoQuery object.
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
            $modelName = 'Rubroingreso';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RubroingresoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RubroingresoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RubroingresoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RubroingresoQuery) {
            return $criteria;
        }
        $query = new RubroingresoQuery(null, null, $modelAlias);

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
     * @return   Rubroingreso|Rubroingreso[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RubroingresoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RubroingresoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Rubroingreso A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdrubroingreso($key, $con = null)
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
     * @return                 Rubroingreso A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idrubroingreso`, `rubroingreso_nombre`, `rubroingreso_descripcion` FROM `rubroingreso` WHERE `idrubroingreso` = :p0';
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
            $obj = new Rubroingreso();
            $obj->hydrate($row);
            RubroingresoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Rubroingreso|Rubroingreso[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Rubroingreso[]|mixed the list of results, formatted by the current formatter
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
     * @return RubroingresoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RubroingresoPeer::IDRUBROINGRESO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RubroingresoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RubroingresoPeer::IDRUBROINGRESO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idrubroingreso column
     *
     * Example usage:
     * <code>
     * $query->filterByIdrubroingreso(1234); // WHERE idrubroingreso = 1234
     * $query->filterByIdrubroingreso(array(12, 34)); // WHERE idrubroingreso IN (12, 34)
     * $query->filterByIdrubroingreso(array('min' => 12)); // WHERE idrubroingreso >= 12
     * $query->filterByIdrubroingreso(array('max' => 12)); // WHERE idrubroingreso <= 12
     * </code>
     *
     * @param     mixed $idrubroingreso The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RubroingresoQuery The current query, for fluid interface
     */
    public function filterByIdrubroingreso($idrubroingreso = null, $comparison = null)
    {
        if (is_array($idrubroingreso)) {
            $useMinMax = false;
            if (isset($idrubroingreso['min'])) {
                $this->addUsingAlias(RubroingresoPeer::IDRUBROINGRESO, $idrubroingreso['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idrubroingreso['max'])) {
                $this->addUsingAlias(RubroingresoPeer::IDRUBROINGRESO, $idrubroingreso['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RubroingresoPeer::IDRUBROINGRESO, $idrubroingreso, $comparison);
    }

    /**
     * Filter the query on the rubroingreso_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByRubroingresoNombre('fooValue');   // WHERE rubroingreso_nombre = 'fooValue'
     * $query->filterByRubroingresoNombre('%fooValue%'); // WHERE rubroingreso_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rubroingresoNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RubroingresoQuery The current query, for fluid interface
     */
    public function filterByRubroingresoNombre($rubroingresoNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rubroingresoNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rubroingresoNombre)) {
                $rubroingresoNombre = str_replace('*', '%', $rubroingresoNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RubroingresoPeer::RUBROINGRESO_NOMBRE, $rubroingresoNombre, $comparison);
    }

    /**
     * Filter the query on the rubroingreso_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByRubroingresoDescripcion('fooValue');   // WHERE rubroingreso_descripcion = 'fooValue'
     * $query->filterByRubroingresoDescripcion('%fooValue%'); // WHERE rubroingreso_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rubroingresoDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RubroingresoQuery The current query, for fluid interface
     */
    public function filterByRubroingresoDescripcion($rubroingresoDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rubroingresoDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rubroingresoDescripcion)) {
                $rubroingresoDescripcion = str_replace('*', '%', $rubroingresoDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RubroingresoPeer::RUBROINGRESO_DESCRIPCION, $rubroingresoDescripcion, $comparison);
    }

    /**
     * Filter the query by a related Ingresodetalle object
     *
     * @param   Ingresodetalle|PropelObjectCollection $ingresodetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RubroingresoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByIngresodetalle($ingresodetalle, $comparison = null)
    {
        if ($ingresodetalle instanceof Ingresodetalle) {
            return $this
                ->addUsingAlias(RubroingresoPeer::IDRUBROINGRESO, $ingresodetalle->getIdrubroingreso(), $comparison);
        } elseif ($ingresodetalle instanceof PropelObjectCollection) {
            return $this
                ->useIngresodetalleQuery()
                ->filterByPrimaryKeys($ingresodetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByIngresodetalle() only accepts arguments of type Ingresodetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Ingresodetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RubroingresoQuery The current query, for fluid interface
     */
    public function joinIngresodetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Ingresodetalle');

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
            $this->addJoinObject($join, 'Ingresodetalle');
        }

        return $this;
    }

    /**
     * Use the Ingresodetalle relation Ingresodetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   IngresodetalleQuery A secondary query class using the current class as primary query
     */
    public function useIngresodetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinIngresodetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ingresodetalle', 'IngresodetalleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Rubroingreso $rubroingreso Object to remove from the list of results
     *
     * @return RubroingresoQuery The current query, for fluid interface
     */
    public function prune($rubroingreso = null)
    {
        if ($rubroingreso) {
            $this->addUsingAlias(RubroingresoPeer::IDRUBROINGRESO, $rubroingreso->getIdrubroingreso(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
