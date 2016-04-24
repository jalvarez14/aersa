<?php


/**
 * Base class that represents a query for the 'plantillatablajeriadetalle' table.
 *
 *
 *
 * @method PlantillatablajeriadetalleQuery orderByIdplantillatablajeriadetalle($order = Criteria::ASC) Order by the idplantillatablajeriadetalle column
 * @method PlantillatablajeriadetalleQuery orderByIdplantillatablajeria($order = Criteria::ASC) Order by the idplantillatablajeria column
 * @method PlantillatablajeriadetalleQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 *
 * @method PlantillatablajeriadetalleQuery groupByIdplantillatablajeriadetalle() Group by the idplantillatablajeriadetalle column
 * @method PlantillatablajeriadetalleQuery groupByIdplantillatablajeria() Group by the idplantillatablajeria column
 * @method PlantillatablajeriadetalleQuery groupByIdproducto() Group by the idproducto column
 *
 * @method PlantillatablajeriadetalleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PlantillatablajeriadetalleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PlantillatablajeriadetalleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PlantillatablajeriadetalleQuery leftJoinPlantillatablajeria($relationAlias = null) Adds a LEFT JOIN clause to the query using the Plantillatablajeria relation
 * @method PlantillatablajeriadetalleQuery rightJoinPlantillatablajeria($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Plantillatablajeria relation
 * @method PlantillatablajeriadetalleQuery innerJoinPlantillatablajeria($relationAlias = null) Adds a INNER JOIN clause to the query using the Plantillatablajeria relation
 *
 * @method PlantillatablajeriadetalleQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method PlantillatablajeriadetalleQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method PlantillatablajeriadetalleQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method Plantillatablajeriadetalle findOne(PropelPDO $con = null) Return the first Plantillatablajeriadetalle matching the query
 * @method Plantillatablajeriadetalle findOneOrCreate(PropelPDO $con = null) Return the first Plantillatablajeriadetalle matching the query, or a new Plantillatablajeriadetalle object populated from the query conditions when no match is found
 *
 * @method Plantillatablajeriadetalle findOneByIdplantillatablajeria(int $idplantillatablajeria) Return the first Plantillatablajeriadetalle filtered by the idplantillatablajeria column
 * @method Plantillatablajeriadetalle findOneByIdproducto(int $idproducto) Return the first Plantillatablajeriadetalle filtered by the idproducto column
 *
 * @method array findByIdplantillatablajeriadetalle(int $idplantillatablajeriadetalle) Return Plantillatablajeriadetalle objects filtered by the idplantillatablajeriadetalle column
 * @method array findByIdplantillatablajeria(int $idplantillatablajeria) Return Plantillatablajeriadetalle objects filtered by the idplantillatablajeria column
 * @method array findByIdproducto(int $idproducto) Return Plantillatablajeriadetalle objects filtered by the idproducto column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BasePlantillatablajeriadetalleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePlantillatablajeriadetalleQuery object.
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
            $modelName = 'Plantillatablajeriadetalle';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PlantillatablajeriadetalleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PlantillatablajeriadetalleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PlantillatablajeriadetalleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PlantillatablajeriadetalleQuery) {
            return $criteria;
        }
        $query = new PlantillatablajeriadetalleQuery(null, null, $modelAlias);

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
     * @return   Plantillatablajeriadetalle|Plantillatablajeriadetalle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PlantillatablajeriadetallePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PlantillatablajeriadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Plantillatablajeriadetalle A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdplantillatablajeriadetalle($key, $con = null)
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
     * @return                 Plantillatablajeriadetalle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idplantillatablajeriadetalle`, `idplantillatablajeria`, `idproducto` FROM `plantillatablajeriadetalle` WHERE `idplantillatablajeriadetalle` = :p0';
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
            $obj = new Plantillatablajeriadetalle();
            $obj->hydrate($row);
            PlantillatablajeriadetallePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Plantillatablajeriadetalle|Plantillatablajeriadetalle[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Plantillatablajeriadetalle[]|mixed the list of results, formatted by the current formatter
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
     * @return PlantillatablajeriadetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PlantillatablajeriadetallePeer::IDPLANTILLATABLAJERIADETALLE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PlantillatablajeriadetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PlantillatablajeriadetallePeer::IDPLANTILLATABLAJERIADETALLE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idplantillatablajeriadetalle column
     *
     * Example usage:
     * <code>
     * $query->filterByIdplantillatablajeriadetalle(1234); // WHERE idplantillatablajeriadetalle = 1234
     * $query->filterByIdplantillatablajeriadetalle(array(12, 34)); // WHERE idplantillatablajeriadetalle IN (12, 34)
     * $query->filterByIdplantillatablajeriadetalle(array('min' => 12)); // WHERE idplantillatablajeriadetalle >= 12
     * $query->filterByIdplantillatablajeriadetalle(array('max' => 12)); // WHERE idplantillatablajeriadetalle <= 12
     * </code>
     *
     * @param     mixed $idplantillatablajeriadetalle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PlantillatablajeriadetalleQuery The current query, for fluid interface
     */
    public function filterByIdplantillatablajeriadetalle($idplantillatablajeriadetalle = null, $comparison = null)
    {
        if (is_array($idplantillatablajeriadetalle)) {
            $useMinMax = false;
            if (isset($idplantillatablajeriadetalle['min'])) {
                $this->addUsingAlias(PlantillatablajeriadetallePeer::IDPLANTILLATABLAJERIADETALLE, $idplantillatablajeriadetalle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idplantillatablajeriadetalle['max'])) {
                $this->addUsingAlias(PlantillatablajeriadetallePeer::IDPLANTILLATABLAJERIADETALLE, $idplantillatablajeriadetalle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PlantillatablajeriadetallePeer::IDPLANTILLATABLAJERIADETALLE, $idplantillatablajeriadetalle, $comparison);
    }

    /**
     * Filter the query on the idplantillatablajeria column
     *
     * Example usage:
     * <code>
     * $query->filterByIdplantillatablajeria(1234); // WHERE idplantillatablajeria = 1234
     * $query->filterByIdplantillatablajeria(array(12, 34)); // WHERE idplantillatablajeria IN (12, 34)
     * $query->filterByIdplantillatablajeria(array('min' => 12)); // WHERE idplantillatablajeria >= 12
     * $query->filterByIdplantillatablajeria(array('max' => 12)); // WHERE idplantillatablajeria <= 12
     * </code>
     *
     * @see       filterByPlantillatablajeria()
     *
     * @param     mixed $idplantillatablajeria The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PlantillatablajeriadetalleQuery The current query, for fluid interface
     */
    public function filterByIdplantillatablajeria($idplantillatablajeria = null, $comparison = null)
    {
        if (is_array($idplantillatablajeria)) {
            $useMinMax = false;
            if (isset($idplantillatablajeria['min'])) {
                $this->addUsingAlias(PlantillatablajeriadetallePeer::IDPLANTILLATABLAJERIA, $idplantillatablajeria['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idplantillatablajeria['max'])) {
                $this->addUsingAlias(PlantillatablajeriadetallePeer::IDPLANTILLATABLAJERIA, $idplantillatablajeria['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PlantillatablajeriadetallePeer::IDPLANTILLATABLAJERIA, $idplantillatablajeria, $comparison);
    }

    /**
     * Filter the query on the idproducto column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproducto(1234); // WHERE idproducto = 1234
     * $query->filterByIdproducto(array(12, 34)); // WHERE idproducto IN (12, 34)
     * $query->filterByIdproducto(array('min' => 12)); // WHERE idproducto >= 12
     * $query->filterByIdproducto(array('max' => 12)); // WHERE idproducto <= 12
     * </code>
     *
     * @see       filterByProducto()
     *
     * @param     mixed $idproducto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PlantillatablajeriadetalleQuery The current query, for fluid interface
     */
    public function filterByIdproducto($idproducto = null, $comparison = null)
    {
        if (is_array($idproducto)) {
            $useMinMax = false;
            if (isset($idproducto['min'])) {
                $this->addUsingAlias(PlantillatablajeriadetallePeer::IDPRODUCTO, $idproducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproducto['max'])) {
                $this->addUsingAlias(PlantillatablajeriadetallePeer::IDPRODUCTO, $idproducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PlantillatablajeriadetallePeer::IDPRODUCTO, $idproducto, $comparison);
    }

    /**
     * Filter the query by a related Plantillatablajeria object
     *
     * @param   Plantillatablajeria|PropelObjectCollection $plantillatablajeria The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PlantillatablajeriadetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPlantillatablajeria($plantillatablajeria, $comparison = null)
    {
        if ($plantillatablajeria instanceof Plantillatablajeria) {
            return $this
                ->addUsingAlias(PlantillatablajeriadetallePeer::IDPLANTILLATABLAJERIA, $plantillatablajeria->getIdplantillatablajeria(), $comparison);
        } elseif ($plantillatablajeria instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PlantillatablajeriadetallePeer::IDPLANTILLATABLAJERIA, $plantillatablajeria->toKeyValue('PrimaryKey', 'Idplantillatablajeria'), $comparison);
        } else {
            throw new PropelException('filterByPlantillatablajeria() only accepts arguments of type Plantillatablajeria or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Plantillatablajeria relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PlantillatablajeriadetalleQuery The current query, for fluid interface
     */
    public function joinPlantillatablajeria($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Plantillatablajeria');

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
            $this->addJoinObject($join, 'Plantillatablajeria');
        }

        return $this;
    }

    /**
     * Use the Plantillatablajeria relation Plantillatablajeria object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PlantillatablajeriaQuery A secondary query class using the current class as primary query
     */
    public function usePlantillatablajeriaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPlantillatablajeria($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Plantillatablajeria', 'PlantillatablajeriaQuery');
    }

    /**
     * Filter the query by a related Producto object
     *
     * @param   Producto|PropelObjectCollection $producto The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PlantillatablajeriadetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(PlantillatablajeriadetallePeer::IDPRODUCTO, $producto->getIdproducto(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PlantillatablajeriadetallePeer::IDPRODUCTO, $producto->toKeyValue('PrimaryKey', 'Idproducto'), $comparison);
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
     * @return PlantillatablajeriadetalleQuery The current query, for fluid interface
     */
    public function joinProducto($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useProductoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProducto($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Producto', 'ProductoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Plantillatablajeriadetalle $plantillatablajeriadetalle Object to remove from the list of results
     *
     * @return PlantillatablajeriadetalleQuery The current query, for fluid interface
     */
    public function prune($plantillatablajeriadetalle = null)
    {
        if ($plantillatablajeriadetalle) {
            $this->addUsingAlias(PlantillatablajeriadetallePeer::IDPLANTILLATABLAJERIADETALLE, $plantillatablajeriadetalle->getIdplantillatablajeriadetalle(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
