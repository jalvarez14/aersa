<?php


/**
 * Base class that represents a query for the 'receta' table.
 *
 *
 *
 * @method RecetaQuery orderByIdreceta($order = Criteria::ASC) Order by the idreceta column
 * @method RecetaQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 * @method RecetaQuery orderByIdproductoreceta($order = Criteria::ASC) Order by the idproductoreceta column
 * @method RecetaQuery orderByRecetaCantidad($order = Criteria::ASC) Order by the receta_cantidad column
 * @method RecetaQuery orderByRecetaCantidadoriginal($order = Criteria::ASC) Order by the receta_cantidadoriginal column
 * @method RecetaQuery orderByRecetaUnidad($order = Criteria::ASC) Order by the receta_unidad column
 *
 * @method RecetaQuery groupByIdreceta() Group by the idreceta column
 * @method RecetaQuery groupByIdproducto() Group by the idproducto column
 * @method RecetaQuery groupByIdproductoreceta() Group by the idproductoreceta column
 * @method RecetaQuery groupByRecetaCantidad() Group by the receta_cantidad column
 * @method RecetaQuery groupByRecetaCantidadoriginal() Group by the receta_cantidadoriginal column
 * @method RecetaQuery groupByRecetaUnidad() Group by the receta_unidad column
 *
 * @method RecetaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RecetaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RecetaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RecetaQuery leftJoinProductoRelatedByIdproducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the ProductoRelatedByIdproducto relation
 * @method RecetaQuery rightJoinProductoRelatedByIdproducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ProductoRelatedByIdproducto relation
 * @method RecetaQuery innerJoinProductoRelatedByIdproducto($relationAlias = null) Adds a INNER JOIN clause to the query using the ProductoRelatedByIdproducto relation
 *
 * @method RecetaQuery leftJoinProductoRelatedByIdproductoreceta($relationAlias = null) Adds a LEFT JOIN clause to the query using the ProductoRelatedByIdproductoreceta relation
 * @method RecetaQuery rightJoinProductoRelatedByIdproductoreceta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ProductoRelatedByIdproductoreceta relation
 * @method RecetaQuery innerJoinProductoRelatedByIdproductoreceta($relationAlias = null) Adds a INNER JOIN clause to the query using the ProductoRelatedByIdproductoreceta relation
 *
 * @method Receta findOne(PropelPDO $con = null) Return the first Receta matching the query
 * @method Receta findOneOrCreate(PropelPDO $con = null) Return the first Receta matching the query, or a new Receta object populated from the query conditions when no match is found
 *
 * @method Receta findOneByIdproducto(int $idproducto) Return the first Receta filtered by the idproducto column
 * @method Receta findOneByIdproductoreceta(int $idproductoreceta) Return the first Receta filtered by the idproductoreceta column
 * @method Receta findOneByRecetaCantidad(double $receta_cantidad) Return the first Receta filtered by the receta_cantidad column
 * @method Receta findOneByRecetaCantidadoriginal(double $receta_cantidadoriginal) Return the first Receta filtered by the receta_cantidadoriginal column
 * @method Receta findOneByRecetaUnidad(string $receta_unidad) Return the first Receta filtered by the receta_unidad column
 *
 * @method array findByIdreceta(int $idreceta) Return Receta objects filtered by the idreceta column
 * @method array findByIdproducto(int $idproducto) Return Receta objects filtered by the idproducto column
 * @method array findByIdproductoreceta(int $idproductoreceta) Return Receta objects filtered by the idproductoreceta column
 * @method array findByRecetaCantidad(double $receta_cantidad) Return Receta objects filtered by the receta_cantidad column
 * @method array findByRecetaCantidadoriginal(double $receta_cantidadoriginal) Return Receta objects filtered by the receta_cantidadoriginal column
 * @method array findByRecetaUnidad(string $receta_unidad) Return Receta objects filtered by the receta_unidad column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseRecetaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRecetaQuery object.
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
            $modelName = 'Receta';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RecetaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RecetaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RecetaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RecetaQuery) {
            return $criteria;
        }
        $query = new RecetaQuery(null, null, $modelAlias);

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
     * @return   Receta|Receta[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RecetaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RecetaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Receta A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdreceta($key, $con = null)
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
     * @return                 Receta A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idreceta`, `idproducto`, `idproductoreceta`, `receta_cantidad`, `receta_cantidadoriginal`, `receta_unidad` FROM `receta` WHERE `idreceta` = :p0';
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
            $obj = new Receta();
            $obj->hydrate($row);
            RecetaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Receta|Receta[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Receta[]|mixed the list of results, formatted by the current formatter
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
     * @return RecetaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RecetaPeer::IDRECETA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RecetaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RecetaPeer::IDRECETA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idreceta column
     *
     * Example usage:
     * <code>
     * $query->filterByIdreceta(1234); // WHERE idreceta = 1234
     * $query->filterByIdreceta(array(12, 34)); // WHERE idreceta IN (12, 34)
     * $query->filterByIdreceta(array('min' => 12)); // WHERE idreceta >= 12
     * $query->filterByIdreceta(array('max' => 12)); // WHERE idreceta <= 12
     * </code>
     *
     * @param     mixed $idreceta The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RecetaQuery The current query, for fluid interface
     */
    public function filterByIdreceta($idreceta = null, $comparison = null)
    {
        if (is_array($idreceta)) {
            $useMinMax = false;
            if (isset($idreceta['min'])) {
                $this->addUsingAlias(RecetaPeer::IDRECETA, $idreceta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idreceta['max'])) {
                $this->addUsingAlias(RecetaPeer::IDRECETA, $idreceta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RecetaPeer::IDRECETA, $idreceta, $comparison);
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
     * @see       filterByProductoRelatedByIdproducto()
     *
     * @param     mixed $idproducto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RecetaQuery The current query, for fluid interface
     */
    public function filterByIdproducto($idproducto = null, $comparison = null)
    {
        if (is_array($idproducto)) {
            $useMinMax = false;
            if (isset($idproducto['min'])) {
                $this->addUsingAlias(RecetaPeer::IDPRODUCTO, $idproducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproducto['max'])) {
                $this->addUsingAlias(RecetaPeer::IDPRODUCTO, $idproducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RecetaPeer::IDPRODUCTO, $idproducto, $comparison);
    }

    /**
     * Filter the query on the idproductoreceta column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproductoreceta(1234); // WHERE idproductoreceta = 1234
     * $query->filterByIdproductoreceta(array(12, 34)); // WHERE idproductoreceta IN (12, 34)
     * $query->filterByIdproductoreceta(array('min' => 12)); // WHERE idproductoreceta >= 12
     * $query->filterByIdproductoreceta(array('max' => 12)); // WHERE idproductoreceta <= 12
     * </code>
     *
     * @see       filterByProductoRelatedByIdproductoreceta()
     *
     * @param     mixed $idproductoreceta The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RecetaQuery The current query, for fluid interface
     */
    public function filterByIdproductoreceta($idproductoreceta = null, $comparison = null)
    {
        if (is_array($idproductoreceta)) {
            $useMinMax = false;
            if (isset($idproductoreceta['min'])) {
                $this->addUsingAlias(RecetaPeer::IDPRODUCTORECETA, $idproductoreceta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproductoreceta['max'])) {
                $this->addUsingAlias(RecetaPeer::IDPRODUCTORECETA, $idproductoreceta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RecetaPeer::IDPRODUCTORECETA, $idproductoreceta, $comparison);
    }

    /**
     * Filter the query on the receta_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByRecetaCantidad(1234); // WHERE receta_cantidad = 1234
     * $query->filterByRecetaCantidad(array(12, 34)); // WHERE receta_cantidad IN (12, 34)
     * $query->filterByRecetaCantidad(array('min' => 12)); // WHERE receta_cantidad >= 12
     * $query->filterByRecetaCantidad(array('max' => 12)); // WHERE receta_cantidad <= 12
     * </code>
     *
     * @param     mixed $recetaCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RecetaQuery The current query, for fluid interface
     */
    public function filterByRecetaCantidad($recetaCantidad = null, $comparison = null)
    {
        if (is_array($recetaCantidad)) {
            $useMinMax = false;
            if (isset($recetaCantidad['min'])) {
                $this->addUsingAlias(RecetaPeer::RECETA_CANTIDAD, $recetaCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($recetaCantidad['max'])) {
                $this->addUsingAlias(RecetaPeer::RECETA_CANTIDAD, $recetaCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RecetaPeer::RECETA_CANTIDAD, $recetaCantidad, $comparison);
    }

    /**
     * Filter the query on the receta_cantidadoriginal column
     *
     * Example usage:
     * <code>
     * $query->filterByRecetaCantidadoriginal(1234); // WHERE receta_cantidadoriginal = 1234
     * $query->filterByRecetaCantidadoriginal(array(12, 34)); // WHERE receta_cantidadoriginal IN (12, 34)
     * $query->filterByRecetaCantidadoriginal(array('min' => 12)); // WHERE receta_cantidadoriginal >= 12
     * $query->filterByRecetaCantidadoriginal(array('max' => 12)); // WHERE receta_cantidadoriginal <= 12
     * </code>
     *
     * @param     mixed $recetaCantidadoriginal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RecetaQuery The current query, for fluid interface
     */
    public function filterByRecetaCantidadoriginal($recetaCantidadoriginal = null, $comparison = null)
    {
        if (is_array($recetaCantidadoriginal)) {
            $useMinMax = false;
            if (isset($recetaCantidadoriginal['min'])) {
                $this->addUsingAlias(RecetaPeer::RECETA_CANTIDADORIGINAL, $recetaCantidadoriginal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($recetaCantidadoriginal['max'])) {
                $this->addUsingAlias(RecetaPeer::RECETA_CANTIDADORIGINAL, $recetaCantidadoriginal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RecetaPeer::RECETA_CANTIDADORIGINAL, $recetaCantidadoriginal, $comparison);
    }

    /**
     * Filter the query on the receta_unidad column
     *
     * Example usage:
     * <code>
     * $query->filterByRecetaUnidad('fooValue');   // WHERE receta_unidad = 'fooValue'
     * $query->filterByRecetaUnidad('%fooValue%'); // WHERE receta_unidad LIKE '%fooValue%'
     * </code>
     *
     * @param     string $recetaUnidad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RecetaQuery The current query, for fluid interface
     */
    public function filterByRecetaUnidad($recetaUnidad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($recetaUnidad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $recetaUnidad)) {
                $recetaUnidad = str_replace('*', '%', $recetaUnidad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RecetaPeer::RECETA_UNIDAD, $recetaUnidad, $comparison);
    }

    /**
     * Filter the query by a related Producto object
     *
     * @param   Producto|PropelObjectCollection $producto The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RecetaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductoRelatedByIdproducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(RecetaPeer::IDPRODUCTO, $producto->getIdproducto(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RecetaPeer::IDPRODUCTO, $producto->toKeyValue('PrimaryKey', 'Idproducto'), $comparison);
        } else {
            throw new PropelException('filterByProductoRelatedByIdproducto() only accepts arguments of type Producto or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ProductoRelatedByIdproducto relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RecetaQuery The current query, for fluid interface
     */
    public function joinProductoRelatedByIdproducto($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ProductoRelatedByIdproducto');

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
            $this->addJoinObject($join, 'ProductoRelatedByIdproducto');
        }

        return $this;
    }

    /**
     * Use the ProductoRelatedByIdproducto relation Producto object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProductoQuery A secondary query class using the current class as primary query
     */
    public function useProductoRelatedByIdproductoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProductoRelatedByIdproducto($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ProductoRelatedByIdproducto', 'ProductoQuery');
    }

    /**
     * Filter the query by a related Producto object
     *
     * @param   Producto|PropelObjectCollection $producto The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RecetaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductoRelatedByIdproductoreceta($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(RecetaPeer::IDPRODUCTORECETA, $producto->getIdproducto(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RecetaPeer::IDPRODUCTORECETA, $producto->toKeyValue('PrimaryKey', 'Idproducto'), $comparison);
        } else {
            throw new PropelException('filterByProductoRelatedByIdproductoreceta() only accepts arguments of type Producto or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ProductoRelatedByIdproductoreceta relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RecetaQuery The current query, for fluid interface
     */
    public function joinProductoRelatedByIdproductoreceta($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ProductoRelatedByIdproductoreceta');

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
            $this->addJoinObject($join, 'ProductoRelatedByIdproductoreceta');
        }

        return $this;
    }

    /**
     * Use the ProductoRelatedByIdproductoreceta relation Producto object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProductoQuery A secondary query class using the current class as primary query
     */
    public function useProductoRelatedByIdproductorecetaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProductoRelatedByIdproductoreceta($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ProductoRelatedByIdproductoreceta', 'ProductoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Receta $receta Object to remove from the list of results
     *
     * @return RecetaQuery The current query, for fluid interface
     */
    public function prune($receta = null)
    {
        if ($receta) {
            $this->addUsingAlias(RecetaPeer::IDRECETA, $receta->getIdreceta(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
