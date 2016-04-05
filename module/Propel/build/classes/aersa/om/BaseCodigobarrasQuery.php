<?php


/**
 * Base class that represents a query for the 'codigobarras' table.
 *
 *
 *
 * @method CodigobarrasQuery orderByIdcodigobarras($order = Criteria::ASC) Order by the idcodigobarras column
 * @method CodigobarrasQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 * @method CodigobarrasQuery orderByCodigobarrasCodigo($order = Criteria::ASC) Order by the codigobarras_codigo column
 * @method CodigobarrasQuery orderByCodigobarrasCantidad($order = Criteria::ASC) Order by the codigobarras_cantidad column
 *
 * @method CodigobarrasQuery groupByIdcodigobarras() Group by the idcodigobarras column
 * @method CodigobarrasQuery groupByIdproducto() Group by the idproducto column
 * @method CodigobarrasQuery groupByCodigobarrasCodigo() Group by the codigobarras_codigo column
 * @method CodigobarrasQuery groupByCodigobarrasCantidad() Group by the codigobarras_cantidad column
 *
 * @method CodigobarrasQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CodigobarrasQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CodigobarrasQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CodigobarrasQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method CodigobarrasQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method CodigobarrasQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method Codigobarras findOne(PropelPDO $con = null) Return the first Codigobarras matching the query
 * @method Codigobarras findOneOrCreate(PropelPDO $con = null) Return the first Codigobarras matching the query, or a new Codigobarras object populated from the query conditions when no match is found
 *
 * @method Codigobarras findOneByIdproducto(int $idproducto) Return the first Codigobarras filtered by the idproducto column
 * @method Codigobarras findOneByCodigobarrasCodigo(string $codigobarras_codigo) Return the first Codigobarras filtered by the codigobarras_codigo column
 * @method Codigobarras findOneByCodigobarrasCantidad(double $codigobarras_cantidad) Return the first Codigobarras filtered by the codigobarras_cantidad column
 *
 * @method array findByIdcodigobarras(int $idcodigobarras) Return Codigobarras objects filtered by the idcodigobarras column
 * @method array findByIdproducto(int $idproducto) Return Codigobarras objects filtered by the idproducto column
 * @method array findByCodigobarrasCodigo(string $codigobarras_codigo) Return Codigobarras objects filtered by the codigobarras_codigo column
 * @method array findByCodigobarrasCantidad(double $codigobarras_cantidad) Return Codigobarras objects filtered by the codigobarras_cantidad column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseCodigobarrasQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCodigobarrasQuery object.
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
            $modelName = 'Codigobarras';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CodigobarrasQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CodigobarrasQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CodigobarrasQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CodigobarrasQuery) {
            return $criteria;
        }
        $query = new CodigobarrasQuery(null, null, $modelAlias);

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
     * @return   Codigobarras|Codigobarras[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CodigobarrasPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CodigobarrasPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Codigobarras A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdcodigobarras($key, $con = null)
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
     * @return                 Codigobarras A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idcodigobarras`, `idproducto`, `codigobarras_codigo`, `codigobarras_cantidad` FROM `codigobarras` WHERE `idcodigobarras` = :p0';
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
            $obj = new Codigobarras();
            $obj->hydrate($row);
            CodigobarrasPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Codigobarras|Codigobarras[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Codigobarras[]|mixed the list of results, formatted by the current formatter
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
     * @return CodigobarrasQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CodigobarrasPeer::IDCODIGOBARRAS, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CodigobarrasQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CodigobarrasPeer::IDCODIGOBARRAS, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idcodigobarras column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcodigobarras(1234); // WHERE idcodigobarras = 1234
     * $query->filterByIdcodigobarras(array(12, 34)); // WHERE idcodigobarras IN (12, 34)
     * $query->filterByIdcodigobarras(array('min' => 12)); // WHERE idcodigobarras >= 12
     * $query->filterByIdcodigobarras(array('max' => 12)); // WHERE idcodigobarras <= 12
     * </code>
     *
     * @param     mixed $idcodigobarras The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CodigobarrasQuery The current query, for fluid interface
     */
    public function filterByIdcodigobarras($idcodigobarras = null, $comparison = null)
    {
        if (is_array($idcodigobarras)) {
            $useMinMax = false;
            if (isset($idcodigobarras['min'])) {
                $this->addUsingAlias(CodigobarrasPeer::IDCODIGOBARRAS, $idcodigobarras['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcodigobarras['max'])) {
                $this->addUsingAlias(CodigobarrasPeer::IDCODIGOBARRAS, $idcodigobarras['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CodigobarrasPeer::IDCODIGOBARRAS, $idcodigobarras, $comparison);
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
     * @return CodigobarrasQuery The current query, for fluid interface
     */
    public function filterByIdproducto($idproducto = null, $comparison = null)
    {
        if (is_array($idproducto)) {
            $useMinMax = false;
            if (isset($idproducto['min'])) {
                $this->addUsingAlias(CodigobarrasPeer::IDPRODUCTO, $idproducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproducto['max'])) {
                $this->addUsingAlias(CodigobarrasPeer::IDPRODUCTO, $idproducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CodigobarrasPeer::IDPRODUCTO, $idproducto, $comparison);
    }

    /**
     * Filter the query on the codigobarras_codigo column
     *
     * Example usage:
     * <code>
     * $query->filterByCodigobarrasCodigo('fooValue');   // WHERE codigobarras_codigo = 'fooValue'
     * $query->filterByCodigobarrasCodigo('%fooValue%'); // WHERE codigobarras_codigo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codigobarrasCodigo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CodigobarrasQuery The current query, for fluid interface
     */
    public function filterByCodigobarrasCodigo($codigobarrasCodigo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codigobarrasCodigo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codigobarrasCodigo)) {
                $codigobarrasCodigo = str_replace('*', '%', $codigobarrasCodigo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CodigobarrasPeer::CODIGOBARRAS_CODIGO, $codigobarrasCodigo, $comparison);
    }

    /**
     * Filter the query on the codigobarras_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByCodigobarrasCantidad(1234); // WHERE codigobarras_cantidad = 1234
     * $query->filterByCodigobarrasCantidad(array(12, 34)); // WHERE codigobarras_cantidad IN (12, 34)
     * $query->filterByCodigobarrasCantidad(array('min' => 12)); // WHERE codigobarras_cantidad >= 12
     * $query->filterByCodigobarrasCantidad(array('max' => 12)); // WHERE codigobarras_cantidad <= 12
     * </code>
     *
     * @param     mixed $codigobarrasCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CodigobarrasQuery The current query, for fluid interface
     */
    public function filterByCodigobarrasCantidad($codigobarrasCantidad = null, $comparison = null)
    {
        if (is_array($codigobarrasCantidad)) {
            $useMinMax = false;
            if (isset($codigobarrasCantidad['min'])) {
                $this->addUsingAlias(CodigobarrasPeer::CODIGOBARRAS_CANTIDAD, $codigobarrasCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($codigobarrasCantidad['max'])) {
                $this->addUsingAlias(CodigobarrasPeer::CODIGOBARRAS_CANTIDAD, $codigobarrasCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CodigobarrasPeer::CODIGOBARRAS_CANTIDAD, $codigobarrasCantidad, $comparison);
    }

    /**
     * Filter the query by a related Producto object
     *
     * @param   Producto|PropelObjectCollection $producto The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CodigobarrasQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(CodigobarrasPeer::IDPRODUCTO, $producto->getIdproducto(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CodigobarrasPeer::IDPRODUCTO, $producto->toKeyValue('PrimaryKey', 'Idproducto'), $comparison);
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
     * @return CodigobarrasQuery The current query, for fluid interface
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
     * @param   Codigobarras $codigobarras Object to remove from the list of results
     *
     * @return CodigobarrasQuery The current query, for fluid interface
     */
    public function prune($codigobarras = null)
    {
        if ($codigobarras) {
            $this->addUsingAlias(CodigobarrasPeer::IDCODIGOBARRAS, $codigobarras->getIdcodigobarras(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
