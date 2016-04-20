<?php


/**
 * Base class that represents a query for the 'ordentablajeriadetalle' table.
 *
 *
 *
 * @method OrdentablajeriadetalleQuery orderByIdordentablajeriadetalle($order = Criteria::ASC) Order by the idordentablajeriadetalle column
 * @method OrdentablajeriadetalleQuery orderByIdordentablajeria($order = Criteria::ASC) Order by the idordentablajeria column
 * @method OrdentablajeriadetalleQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 * @method OrdentablajeriadetalleQuery orderByOrdentablajeriadetalleCantidad($order = Criteria::ASC) Order by the ordentablajeriadetalle_cantidad column
 * @method OrdentablajeriadetalleQuery orderByOrdentablajeriadetallePorcion($order = Criteria::ASC) Order by the ordentablajeriadetalle_porcion column
 *
 * @method OrdentablajeriadetalleQuery groupByIdordentablajeriadetalle() Group by the idordentablajeriadetalle column
 * @method OrdentablajeriadetalleQuery groupByIdordentablajeria() Group by the idordentablajeria column
 * @method OrdentablajeriadetalleQuery groupByIdproducto() Group by the idproducto column
 * @method OrdentablajeriadetalleQuery groupByOrdentablajeriadetalleCantidad() Group by the ordentablajeriadetalle_cantidad column
 * @method OrdentablajeriadetalleQuery groupByOrdentablajeriadetallePorcion() Group by the ordentablajeriadetalle_porcion column
 *
 * @method OrdentablajeriadetalleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method OrdentablajeriadetalleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method OrdentablajeriadetalleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method OrdentablajeriadetalleQuery leftJoinOrdentablajeria($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ordentablajeria relation
 * @method OrdentablajeriadetalleQuery rightJoinOrdentablajeria($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ordentablajeria relation
 * @method OrdentablajeriadetalleQuery innerJoinOrdentablajeria($relationAlias = null) Adds a INNER JOIN clause to the query using the Ordentablajeria relation
 *
 * @method Ordentablajeriadetalle findOne(PropelPDO $con = null) Return the first Ordentablajeriadetalle matching the query
 * @method Ordentablajeriadetalle findOneOrCreate(PropelPDO $con = null) Return the first Ordentablajeriadetalle matching the query, or a new Ordentablajeriadetalle object populated from the query conditions when no match is found
 *
 * @method Ordentablajeriadetalle findOneByIdordentablajeria(int $idordentablajeria) Return the first Ordentablajeriadetalle filtered by the idordentablajeria column
 * @method Ordentablajeriadetalle findOneByIdproducto(string $idproducto) Return the first Ordentablajeriadetalle filtered by the idproducto column
 * @method Ordentablajeriadetalle findOneByOrdentablajeriadetalleCantidad(double $ordentablajeriadetalle_cantidad) Return the first Ordentablajeriadetalle filtered by the ordentablajeriadetalle_cantidad column
 * @method Ordentablajeriadetalle findOneByOrdentablajeriadetallePorcion(double $ordentablajeriadetalle_porcion) Return the first Ordentablajeriadetalle filtered by the ordentablajeriadetalle_porcion column
 *
 * @method array findByIdordentablajeriadetalle(int $idordentablajeriadetalle) Return Ordentablajeriadetalle objects filtered by the idordentablajeriadetalle column
 * @method array findByIdordentablajeria(int $idordentablajeria) Return Ordentablajeriadetalle objects filtered by the idordentablajeria column
 * @method array findByIdproducto(string $idproducto) Return Ordentablajeriadetalle objects filtered by the idproducto column
 * @method array findByOrdentablajeriadetalleCantidad(double $ordentablajeriadetalle_cantidad) Return Ordentablajeriadetalle objects filtered by the ordentablajeriadetalle_cantidad column
 * @method array findByOrdentablajeriadetallePorcion(double $ordentablajeriadetalle_porcion) Return Ordentablajeriadetalle objects filtered by the ordentablajeriadetalle_porcion column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseOrdentablajeriadetalleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseOrdentablajeriadetalleQuery object.
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
            $modelName = 'Ordentablajeriadetalle';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OrdentablajeriadetalleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   OrdentablajeriadetalleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return OrdentablajeriadetalleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OrdentablajeriadetalleQuery) {
            return $criteria;
        }
        $query = new OrdentablajeriadetalleQuery(null, null, $modelAlias);

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
     * @return   Ordentablajeriadetalle|Ordentablajeriadetalle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = OrdentablajeriadetallePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(OrdentablajeriadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Ordentablajeriadetalle A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdordentablajeriadetalle($key, $con = null)
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
     * @return                 Ordentablajeriadetalle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idordentablajeriadetalle`, `idordentablajeria`, `idproducto`, `ordentablajeriadetalle_cantidad`, `ordentablajeriadetalle_porcion` FROM `ordentablajeriadetalle` WHERE `idordentablajeriadetalle` = :p0';
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
            $obj = new Ordentablajeriadetalle();
            $obj->hydrate($row);
            OrdentablajeriadetallePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Ordentablajeriadetalle|Ordentablajeriadetalle[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Ordentablajeriadetalle[]|mixed the list of results, formatted by the current formatter
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
     * @return OrdentablajeriadetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(OrdentablajeriadetallePeer::IDORDENTABLAJERIADETALLE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return OrdentablajeriadetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(OrdentablajeriadetallePeer::IDORDENTABLAJERIADETALLE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idordentablajeriadetalle column
     *
     * Example usage:
     * <code>
     * $query->filterByIdordentablajeriadetalle(1234); // WHERE idordentablajeriadetalle = 1234
     * $query->filterByIdordentablajeriadetalle(array(12, 34)); // WHERE idordentablajeriadetalle IN (12, 34)
     * $query->filterByIdordentablajeriadetalle(array('min' => 12)); // WHERE idordentablajeriadetalle >= 12
     * $query->filterByIdordentablajeriadetalle(array('max' => 12)); // WHERE idordentablajeriadetalle <= 12
     * </code>
     *
     * @param     mixed $idordentablajeriadetalle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriadetalleQuery The current query, for fluid interface
     */
    public function filterByIdordentablajeriadetalle($idordentablajeriadetalle = null, $comparison = null)
    {
        if (is_array($idordentablajeriadetalle)) {
            $useMinMax = false;
            if (isset($idordentablajeriadetalle['min'])) {
                $this->addUsingAlias(OrdentablajeriadetallePeer::IDORDENTABLAJERIADETALLE, $idordentablajeriadetalle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idordentablajeriadetalle['max'])) {
                $this->addUsingAlias(OrdentablajeriadetallePeer::IDORDENTABLAJERIADETALLE, $idordentablajeriadetalle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriadetallePeer::IDORDENTABLAJERIADETALLE, $idordentablajeriadetalle, $comparison);
    }

    /**
     * Filter the query on the idordentablajeria column
     *
     * Example usage:
     * <code>
     * $query->filterByIdordentablajeria(1234); // WHERE idordentablajeria = 1234
     * $query->filterByIdordentablajeria(array(12, 34)); // WHERE idordentablajeria IN (12, 34)
     * $query->filterByIdordentablajeria(array('min' => 12)); // WHERE idordentablajeria >= 12
     * $query->filterByIdordentablajeria(array('max' => 12)); // WHERE idordentablajeria <= 12
     * </code>
     *
     * @see       filterByOrdentablajeria()
     *
     * @param     mixed $idordentablajeria The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriadetalleQuery The current query, for fluid interface
     */
    public function filterByIdordentablajeria($idordentablajeria = null, $comparison = null)
    {
        if (is_array($idordentablajeria)) {
            $useMinMax = false;
            if (isset($idordentablajeria['min'])) {
                $this->addUsingAlias(OrdentablajeriadetallePeer::IDORDENTABLAJERIA, $idordentablajeria['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idordentablajeria['max'])) {
                $this->addUsingAlias(OrdentablajeriadetallePeer::IDORDENTABLAJERIA, $idordentablajeria['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriadetallePeer::IDORDENTABLAJERIA, $idordentablajeria, $comparison);
    }

    /**
     * Filter the query on the idproducto column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproducto('fooValue');   // WHERE idproducto = 'fooValue'
     * $query->filterByIdproducto('%fooValue%'); // WHERE idproducto LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idproducto The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriadetalleQuery The current query, for fluid interface
     */
    public function filterByIdproducto($idproducto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idproducto)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idproducto)) {
                $idproducto = str_replace('*', '%', $idproducto);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdentablajeriadetallePeer::IDPRODUCTO, $idproducto, $comparison);
    }

    /**
     * Filter the query on the ordentablajeriadetalle_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdentablajeriadetalleCantidad(1234); // WHERE ordentablajeriadetalle_cantidad = 1234
     * $query->filterByOrdentablajeriadetalleCantidad(array(12, 34)); // WHERE ordentablajeriadetalle_cantidad IN (12, 34)
     * $query->filterByOrdentablajeriadetalleCantidad(array('min' => 12)); // WHERE ordentablajeriadetalle_cantidad >= 12
     * $query->filterByOrdentablajeriadetalleCantidad(array('max' => 12)); // WHERE ordentablajeriadetalle_cantidad <= 12
     * </code>
     *
     * @param     mixed $ordentablajeriadetalleCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriadetalleQuery The current query, for fluid interface
     */
    public function filterByOrdentablajeriadetalleCantidad($ordentablajeriadetalleCantidad = null, $comparison = null)
    {
        if (is_array($ordentablajeriadetalleCantidad)) {
            $useMinMax = false;
            if (isset($ordentablajeriadetalleCantidad['min'])) {
                $this->addUsingAlias(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_CANTIDAD, $ordentablajeriadetalleCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordentablajeriadetalleCantidad['max'])) {
                $this->addUsingAlias(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_CANTIDAD, $ordentablajeriadetalleCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_CANTIDAD, $ordentablajeriadetalleCantidad, $comparison);
    }

    /**
     * Filter the query on the ordentablajeriadetalle_porcion column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdentablajeriadetallePorcion(1234); // WHERE ordentablajeriadetalle_porcion = 1234
     * $query->filterByOrdentablajeriadetallePorcion(array(12, 34)); // WHERE ordentablajeriadetalle_porcion IN (12, 34)
     * $query->filterByOrdentablajeriadetallePorcion(array('min' => 12)); // WHERE ordentablajeriadetalle_porcion >= 12
     * $query->filterByOrdentablajeriadetallePorcion(array('max' => 12)); // WHERE ordentablajeriadetalle_porcion <= 12
     * </code>
     *
     * @param     mixed $ordentablajeriadetallePorcion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriadetalleQuery The current query, for fluid interface
     */
    public function filterByOrdentablajeriadetallePorcion($ordentablajeriadetallePorcion = null, $comparison = null)
    {
        if (is_array($ordentablajeriadetallePorcion)) {
            $useMinMax = false;
            if (isset($ordentablajeriadetallePorcion['min'])) {
                $this->addUsingAlias(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PORCION, $ordentablajeriadetallePorcion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordentablajeriadetallePorcion['max'])) {
                $this->addUsingAlias(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PORCION, $ordentablajeriadetallePorcion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PORCION, $ordentablajeriadetallePorcion, $comparison);
    }

    /**
     * Filter the query by a related Ordentablajeria object
     *
     * @param   Ordentablajeria|PropelObjectCollection $ordentablajeria The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OrdentablajeriadetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOrdentablajeria($ordentablajeria, $comparison = null)
    {
        if ($ordentablajeria instanceof Ordentablajeria) {
            return $this
                ->addUsingAlias(OrdentablajeriadetallePeer::IDORDENTABLAJERIA, $ordentablajeria->getIdordentablajeria(), $comparison);
        } elseif ($ordentablajeria instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OrdentablajeriadetallePeer::IDORDENTABLAJERIA, $ordentablajeria->toKeyValue('PrimaryKey', 'Idordentablajeria'), $comparison);
        } else {
            throw new PropelException('filterByOrdentablajeria() only accepts arguments of type Ordentablajeria or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Ordentablajeria relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OrdentablajeriadetalleQuery The current query, for fluid interface
     */
    public function joinOrdentablajeria($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Ordentablajeria');

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
            $this->addJoinObject($join, 'Ordentablajeria');
        }

        return $this;
    }

    /**
     * Use the Ordentablajeria relation Ordentablajeria object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OrdentablajeriaQuery A secondary query class using the current class as primary query
     */
    public function useOrdentablajeriaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOrdentablajeria($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ordentablajeria', 'OrdentablajeriaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Ordentablajeriadetalle $ordentablajeriadetalle Object to remove from the list of results
     *
     * @return OrdentablajeriadetalleQuery The current query, for fluid interface
     */
    public function prune($ordentablajeriadetalle = null)
    {
        if ($ordentablajeriadetalle) {
            $this->addUsingAlias(OrdentablajeriadetallePeer::IDORDENTABLAJERIADETALLE, $ordentablajeriadetalle->getIdordentablajeriadetalle(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
