<?php


/**
 * Base class that represents a query for the 'conceptosalida' table.
 *
 *
 *
 * @method ConceptosalidaQuery orderByIdconceptosalida($order = Criteria::ASC) Order by the idconceptosalida column
 * @method ConceptosalidaQuery orderByConceptosalidaNombre($order = Criteria::ASC) Order by the conceptosalida_nombre column
 * @method ConceptosalidaQuery orderByAlmacenorigen($order = Criteria::ASC) Order by the almacenorigen column
 * @method ConceptosalidaQuery orderByAlmacendestino($order = Criteria::ASC) Order by the almacendestino column
 * @method ConceptosalidaQuery orderByMismasucursal($order = Criteria::ASC) Order by the mismasucursal column
 *
 * @method ConceptosalidaQuery groupByIdconceptosalida() Group by the idconceptosalida column
 * @method ConceptosalidaQuery groupByConceptosalidaNombre() Group by the conceptosalida_nombre column
 * @method ConceptosalidaQuery groupByAlmacenorigen() Group by the almacenorigen column
 * @method ConceptosalidaQuery groupByAlmacendestino() Group by the almacendestino column
 * @method ConceptosalidaQuery groupByMismasucursal() Group by the mismasucursal column
 *
 * @method ConceptosalidaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ConceptosalidaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ConceptosalidaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ConceptosalidaQuery leftJoinRequisicion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Requisicion relation
 * @method ConceptosalidaQuery rightJoinRequisicion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Requisicion relation
 * @method ConceptosalidaQuery innerJoinRequisicion($relationAlias = null) Adds a INNER JOIN clause to the query using the Requisicion relation
 *
 * @method Conceptosalida findOne(PropelPDO $con = null) Return the first Conceptosalida matching the query
 * @method Conceptosalida findOneOrCreate(PropelPDO $con = null) Return the first Conceptosalida matching the query, or a new Conceptosalida object populated from the query conditions when no match is found
 *
 * @method Conceptosalida findOneByConceptosalidaNombre(string $conceptosalida_nombre) Return the first Conceptosalida filtered by the conceptosalida_nombre column
 * @method Conceptosalida findOneByAlmacenorigen(string $almacenorigen) Return the first Conceptosalida filtered by the almacenorigen column
 * @method Conceptosalida findOneByAlmacendestino(string $almacendestino) Return the first Conceptosalida filtered by the almacendestino column
 * @method Conceptosalida findOneByMismasucursal(boolean $mismasucursal) Return the first Conceptosalida filtered by the mismasucursal column
 *
 * @method array findByIdconceptosalida(int $idconceptosalida) Return Conceptosalida objects filtered by the idconceptosalida column
 * @method array findByConceptosalidaNombre(string $conceptosalida_nombre) Return Conceptosalida objects filtered by the conceptosalida_nombre column
 * @method array findByAlmacenorigen(string $almacenorigen) Return Conceptosalida objects filtered by the almacenorigen column
 * @method array findByAlmacendestino(string $almacendestino) Return Conceptosalida objects filtered by the almacendestino column
 * @method array findByMismasucursal(boolean $mismasucursal) Return Conceptosalida objects filtered by the mismasucursal column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseConceptosalidaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseConceptosalidaQuery object.
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
            $modelName = 'Conceptosalida';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ConceptosalidaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ConceptosalidaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ConceptosalidaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ConceptosalidaQuery) {
            return $criteria;
        }
        $query = new ConceptosalidaQuery(null, null, $modelAlias);

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
     * @return   Conceptosalida|Conceptosalida[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ConceptosalidaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ConceptosalidaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Conceptosalida A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdconceptosalida($key, $con = null)
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
     * @return                 Conceptosalida A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idconceptosalida`, `conceptosalida_nombre`, `almacenorigen`, `almacendestino`, `mismasucursal` FROM `conceptosalida` WHERE `idconceptosalida` = :p0';
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
            $obj = new Conceptosalida();
            $obj->hydrate($row);
            ConceptosalidaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Conceptosalida|Conceptosalida[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Conceptosalida[]|mixed the list of results, formatted by the current formatter
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
     * @return ConceptosalidaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ConceptosalidaPeer::IDCONCEPTOSALIDA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ConceptosalidaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ConceptosalidaPeer::IDCONCEPTOSALIDA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idconceptosalida column
     *
     * Example usage:
     * <code>
     * $query->filterByIdconceptosalida(1234); // WHERE idconceptosalida = 1234
     * $query->filterByIdconceptosalida(array(12, 34)); // WHERE idconceptosalida IN (12, 34)
     * $query->filterByIdconceptosalida(array('min' => 12)); // WHERE idconceptosalida >= 12
     * $query->filterByIdconceptosalida(array('max' => 12)); // WHERE idconceptosalida <= 12
     * </code>
     *
     * @param     mixed $idconceptosalida The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConceptosalidaQuery The current query, for fluid interface
     */
    public function filterByIdconceptosalida($idconceptosalida = null, $comparison = null)
    {
        if (is_array($idconceptosalida)) {
            $useMinMax = false;
            if (isset($idconceptosalida['min'])) {
                $this->addUsingAlias(ConceptosalidaPeer::IDCONCEPTOSALIDA, $idconceptosalida['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idconceptosalida['max'])) {
                $this->addUsingAlias(ConceptosalidaPeer::IDCONCEPTOSALIDA, $idconceptosalida['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConceptosalidaPeer::IDCONCEPTOSALIDA, $idconceptosalida, $comparison);
    }

    /**
     * Filter the query on the conceptosalida_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByConceptosalidaNombre('fooValue');   // WHERE conceptosalida_nombre = 'fooValue'
     * $query->filterByConceptosalidaNombre('%fooValue%'); // WHERE conceptosalida_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $conceptosalidaNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConceptosalidaQuery The current query, for fluid interface
     */
    public function filterByConceptosalidaNombre($conceptosalidaNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($conceptosalidaNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $conceptosalidaNombre)) {
                $conceptosalidaNombre = str_replace('*', '%', $conceptosalidaNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConceptosalidaPeer::CONCEPTOSALIDA_NOMBRE, $conceptosalidaNombre, $comparison);
    }

    /**
     * Filter the query on the almacenorigen column
     *
     * Example usage:
     * <code>
     * $query->filterByAlmacenorigen('fooValue');   // WHERE almacenorigen = 'fooValue'
     * $query->filterByAlmacenorigen('%fooValue%'); // WHERE almacenorigen LIKE '%fooValue%'
     * </code>
     *
     * @param     string $almacenorigen The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConceptosalidaQuery The current query, for fluid interface
     */
    public function filterByAlmacenorigen($almacenorigen = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($almacenorigen)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $almacenorigen)) {
                $almacenorigen = str_replace('*', '%', $almacenorigen);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConceptosalidaPeer::ALMACENORIGEN, $almacenorigen, $comparison);
    }

    /**
     * Filter the query on the almacendestino column
     *
     * Example usage:
     * <code>
     * $query->filterByAlmacendestino('fooValue');   // WHERE almacendestino = 'fooValue'
     * $query->filterByAlmacendestino('%fooValue%'); // WHERE almacendestino LIKE '%fooValue%'
     * </code>
     *
     * @param     string $almacendestino The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConceptosalidaQuery The current query, for fluid interface
     */
    public function filterByAlmacendestino($almacendestino = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($almacendestino)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $almacendestino)) {
                $almacendestino = str_replace('*', '%', $almacendestino);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConceptosalidaPeer::ALMACENDESTINO, $almacendestino, $comparison);
    }

    /**
     * Filter the query on the mismasucursal column
     *
     * Example usage:
     * <code>
     * $query->filterByMismasucursal(true); // WHERE mismasucursal = true
     * $query->filterByMismasucursal('yes'); // WHERE mismasucursal = true
     * </code>
     *
     * @param     boolean|string $mismasucursal The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConceptosalidaQuery The current query, for fluid interface
     */
    public function filterByMismasucursal($mismasucursal = null, $comparison = null)
    {
        if (is_string($mismasucursal)) {
            $mismasucursal = in_array(strtolower($mismasucursal), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ConceptosalidaPeer::MISMASUCURSAL, $mismasucursal, $comparison);
    }

    /**
     * Filter the query by a related Requisicion object
     *
     * @param   Requisicion|PropelObjectCollection $requisicion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ConceptosalidaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRequisicion($requisicion, $comparison = null)
    {
        if ($requisicion instanceof Requisicion) {
            return $this
                ->addUsingAlias(ConceptosalidaPeer::IDCONCEPTOSALIDA, $requisicion->getIdconceptosalida(), $comparison);
        } elseif ($requisicion instanceof PropelObjectCollection) {
            return $this
                ->useRequisicionQuery()
                ->filterByPrimaryKeys($requisicion->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRequisicion() only accepts arguments of type Requisicion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Requisicion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ConceptosalidaQuery The current query, for fluid interface
     */
    public function joinRequisicion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Requisicion');

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
            $this->addJoinObject($join, 'Requisicion');
        }

        return $this;
    }

    /**
     * Use the Requisicion relation Requisicion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RequisicionQuery A secondary query class using the current class as primary query
     */
    public function useRequisicionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRequisicion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Requisicion', 'RequisicionQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Conceptosalida $conceptosalida Object to remove from the list of results
     *
     * @return ConceptosalidaQuery The current query, for fluid interface
     */
    public function prune($conceptosalida = null)
    {
        if ($conceptosalida) {
            $this->addUsingAlias(ConceptosalidaPeer::IDCONCEPTOSALIDA, $conceptosalida->getIdconceptosalida(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
