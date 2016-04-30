<?php


/**
 * Base class that represents a query for the 'conceptoingreso' table.
 *
 *
 *
 * @method ConceptoingresoQuery orderByIdconceptoingreso($order = Criteria::ASC) Order by the idconceptoingreso column
 * @method ConceptoingresoQuery orderByConceptoingresoNombre($order = Criteria::ASC) Order by the conceptoingreso_nombre column
 * @method ConceptoingresoQuery orderByConceptoingresoDescripcion($order = Criteria::ASC) Order by the conceptoingreso_descripcion column
 *
 * @method ConceptoingresoQuery groupByIdconceptoingreso() Group by the idconceptoingreso column
 * @method ConceptoingresoQuery groupByConceptoingresoNombre() Group by the conceptoingreso_nombre column
 * @method ConceptoingresoQuery groupByConceptoingresoDescripcion() Group by the conceptoingreso_descripcion column
 *
 * @method ConceptoingresoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ConceptoingresoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ConceptoingresoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ConceptoingresoQuery leftJoinIngresodetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ingresodetalle relation
 * @method ConceptoingresoQuery rightJoinIngresodetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ingresodetalle relation
 * @method ConceptoingresoQuery innerJoinIngresodetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Ingresodetalle relation
 *
 * @method Conceptoingreso findOne(PropelPDO $con = null) Return the first Conceptoingreso matching the query
 * @method Conceptoingreso findOneOrCreate(PropelPDO $con = null) Return the first Conceptoingreso matching the query, or a new Conceptoingreso object populated from the query conditions when no match is found
 *
 * @method Conceptoingreso findOneByConceptoingresoNombre(string $conceptoingreso_nombre) Return the first Conceptoingreso filtered by the conceptoingreso_nombre column
 * @method Conceptoingreso findOneByConceptoingresoDescripcion(string $conceptoingreso_descripcion) Return the first Conceptoingreso filtered by the conceptoingreso_descripcion column
 *
 * @method array findByIdconceptoingreso(int $idconceptoingreso) Return Conceptoingreso objects filtered by the idconceptoingreso column
 * @method array findByConceptoingresoNombre(string $conceptoingreso_nombre) Return Conceptoingreso objects filtered by the conceptoingreso_nombre column
 * @method array findByConceptoingresoDescripcion(string $conceptoingreso_descripcion) Return Conceptoingreso objects filtered by the conceptoingreso_descripcion column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseConceptoingresoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseConceptoingresoQuery object.
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
            $modelName = 'Conceptoingreso';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ConceptoingresoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ConceptoingresoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ConceptoingresoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ConceptoingresoQuery) {
            return $criteria;
        }
        $query = new ConceptoingresoQuery(null, null, $modelAlias);

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
     * @return   Conceptoingreso|Conceptoingreso[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ConceptoingresoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ConceptoingresoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Conceptoingreso A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdconceptoingreso($key, $con = null)
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
     * @return                 Conceptoingreso A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idconceptoingreso`, `conceptoingreso_nombre`, `conceptoingreso_descripcion` FROM `conceptoingreso` WHERE `idconceptoingreso` = :p0';
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
            $obj = new Conceptoingreso();
            $obj->hydrate($row);
            ConceptoingresoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Conceptoingreso|Conceptoingreso[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Conceptoingreso[]|mixed the list of results, formatted by the current formatter
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
     * @return ConceptoingresoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ConceptoingresoPeer::IDCONCEPTOINGRESO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ConceptoingresoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ConceptoingresoPeer::IDCONCEPTOINGRESO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idconceptoingreso column
     *
     * Example usage:
     * <code>
     * $query->filterByIdconceptoingreso(1234); // WHERE idconceptoingreso = 1234
     * $query->filterByIdconceptoingreso(array(12, 34)); // WHERE idconceptoingreso IN (12, 34)
     * $query->filterByIdconceptoingreso(array('min' => 12)); // WHERE idconceptoingreso >= 12
     * $query->filterByIdconceptoingreso(array('max' => 12)); // WHERE idconceptoingreso <= 12
     * </code>
     *
     * @param     mixed $idconceptoingreso The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConceptoingresoQuery The current query, for fluid interface
     */
    public function filterByIdconceptoingreso($idconceptoingreso = null, $comparison = null)
    {
        if (is_array($idconceptoingreso)) {
            $useMinMax = false;
            if (isset($idconceptoingreso['min'])) {
                $this->addUsingAlias(ConceptoingresoPeer::IDCONCEPTOINGRESO, $idconceptoingreso['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idconceptoingreso['max'])) {
                $this->addUsingAlias(ConceptoingresoPeer::IDCONCEPTOINGRESO, $idconceptoingreso['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConceptoingresoPeer::IDCONCEPTOINGRESO, $idconceptoingreso, $comparison);
    }

    /**
     * Filter the query on the conceptoingreso_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByConceptoingresoNombre('fooValue');   // WHERE conceptoingreso_nombre = 'fooValue'
     * $query->filterByConceptoingresoNombre('%fooValue%'); // WHERE conceptoingreso_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $conceptoingresoNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConceptoingresoQuery The current query, for fluid interface
     */
    public function filterByConceptoingresoNombre($conceptoingresoNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($conceptoingresoNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $conceptoingresoNombre)) {
                $conceptoingresoNombre = str_replace('*', '%', $conceptoingresoNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConceptoingresoPeer::CONCEPTOINGRESO_NOMBRE, $conceptoingresoNombre, $comparison);
    }

    /**
     * Filter the query on the conceptoingreso_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByConceptoingresoDescripcion('fooValue');   // WHERE conceptoingreso_descripcion = 'fooValue'
     * $query->filterByConceptoingresoDescripcion('%fooValue%'); // WHERE conceptoingreso_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $conceptoingresoDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConceptoingresoQuery The current query, for fluid interface
     */
    public function filterByConceptoingresoDescripcion($conceptoingresoDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($conceptoingresoDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $conceptoingresoDescripcion)) {
                $conceptoingresoDescripcion = str_replace('*', '%', $conceptoingresoDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConceptoingresoPeer::CONCEPTOINGRESO_DESCRIPCION, $conceptoingresoDescripcion, $comparison);
    }

    /**
     * Filter the query by a related Ingresodetalle object
     *
     * @param   Ingresodetalle|PropelObjectCollection $ingresodetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ConceptoingresoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByIngresodetalle($ingresodetalle, $comparison = null)
    {
        if ($ingresodetalle instanceof Ingresodetalle) {
            return $this
                ->addUsingAlias(ConceptoingresoPeer::IDCONCEPTOINGRESO, $ingresodetalle->getIdconceptoingreso(), $comparison);
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
     * @return ConceptoingresoQuery The current query, for fluid interface
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
     * @param   Conceptoingreso $conceptoingreso Object to remove from the list of results
     *
     * @return ConceptoingresoQuery The current query, for fluid interface
     */
    public function prune($conceptoingreso = null)
    {
        if ($conceptoingreso) {
            $this->addUsingAlias(ConceptoingresoPeer::IDCONCEPTOINGRESO, $conceptoingreso->getIdconceptoingreso(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
