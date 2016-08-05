<?php


/**
 * Base class that represents a query for the 'productocfdi' table.
 *
 *
 *
 * @method ProductocfdiQuery orderByIdproductocfdi($order = Criteria::ASC) Order by the idproductocfdi column
 * @method ProductocfdiQuery orderByIdempresa($order = Criteria::ASC) Order by the idempresa column
 * @method ProductocfdiQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 * @method ProductocfdiQuery orderByProductocfdiNombre($order = Criteria::ASC) Order by the productocfdi_nombre column
 *
 * @method ProductocfdiQuery groupByIdproductocfdi() Group by the idproductocfdi column
 * @method ProductocfdiQuery groupByIdempresa() Group by the idempresa column
 * @method ProductocfdiQuery groupByIdproducto() Group by the idproducto column
 * @method ProductocfdiQuery groupByProductocfdiNombre() Group by the productocfdi_nombre column
 *
 * @method ProductocfdiQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProductocfdiQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProductocfdiQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProductocfdiQuery leftJoinEmpresa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empresa relation
 * @method ProductocfdiQuery rightJoinEmpresa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empresa relation
 * @method ProductocfdiQuery innerJoinEmpresa($relationAlias = null) Adds a INNER JOIN clause to the query using the Empresa relation
 *
 * @method ProductocfdiQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method ProductocfdiQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method ProductocfdiQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method Productocfdi findOne(PropelPDO $con = null) Return the first Productocfdi matching the query
 * @method Productocfdi findOneOrCreate(PropelPDO $con = null) Return the first Productocfdi matching the query, or a new Productocfdi object populated from the query conditions when no match is found
 *
 * @method Productocfdi findOneByIdempresa(int $idempresa) Return the first Productocfdi filtered by the idempresa column
 * @method Productocfdi findOneByIdproducto(int $idproducto) Return the first Productocfdi filtered by the idproducto column
 * @method Productocfdi findOneByProductocfdiNombre(string $productocfdi_nombre) Return the first Productocfdi filtered by the productocfdi_nombre column
 *
 * @method array findByIdproductocfdi(int $idproductocfdi) Return Productocfdi objects filtered by the idproductocfdi column
 * @method array findByIdempresa(int $idempresa) Return Productocfdi objects filtered by the idempresa column
 * @method array findByIdproducto(int $idproducto) Return Productocfdi objects filtered by the idproducto column
 * @method array findByProductocfdiNombre(string $productocfdi_nombre) Return Productocfdi objects filtered by the productocfdi_nombre column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseProductocfdiQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseProductocfdiQuery object.
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
            $modelName = 'Productocfdi';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProductocfdiQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProductocfdiQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProductocfdiQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProductocfdiQuery) {
            return $criteria;
        }
        $query = new ProductocfdiQuery(null, null, $modelAlias);

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
     * @return   Productocfdi|Productocfdi[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProductocfdiPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProductocfdiPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Productocfdi A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdproductocfdi($key, $con = null)
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
     * @return                 Productocfdi A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idproductocfdi`, `idempresa`, `idproducto`, `productocfdi_nombre` FROM `productocfdi` WHERE `idproductocfdi` = :p0';
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
            $obj = new Productocfdi();
            $obj->hydrate($row);
            ProductocfdiPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Productocfdi|Productocfdi[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Productocfdi[]|mixed the list of results, formatted by the current formatter
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
     * @return ProductocfdiQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProductocfdiPeer::IDPRODUCTOCFDI, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProductocfdiQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProductocfdiPeer::IDPRODUCTOCFDI, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idproductocfdi column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproductocfdi(1234); // WHERE idproductocfdi = 1234
     * $query->filterByIdproductocfdi(array(12, 34)); // WHERE idproductocfdi IN (12, 34)
     * $query->filterByIdproductocfdi(array('min' => 12)); // WHERE idproductocfdi >= 12
     * $query->filterByIdproductocfdi(array('max' => 12)); // WHERE idproductocfdi <= 12
     * </code>
     *
     * @param     mixed $idproductocfdi The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductocfdiQuery The current query, for fluid interface
     */
    public function filterByIdproductocfdi($idproductocfdi = null, $comparison = null)
    {
        if (is_array($idproductocfdi)) {
            $useMinMax = false;
            if (isset($idproductocfdi['min'])) {
                $this->addUsingAlias(ProductocfdiPeer::IDPRODUCTOCFDI, $idproductocfdi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproductocfdi['max'])) {
                $this->addUsingAlias(ProductocfdiPeer::IDPRODUCTOCFDI, $idproductocfdi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductocfdiPeer::IDPRODUCTOCFDI, $idproductocfdi, $comparison);
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
     * @return ProductocfdiQuery The current query, for fluid interface
     */
    public function filterByIdempresa($idempresa = null, $comparison = null)
    {
        if (is_array($idempresa)) {
            $useMinMax = false;
            if (isset($idempresa['min'])) {
                $this->addUsingAlias(ProductocfdiPeer::IDEMPRESA, $idempresa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempresa['max'])) {
                $this->addUsingAlias(ProductocfdiPeer::IDEMPRESA, $idempresa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductocfdiPeer::IDEMPRESA, $idempresa, $comparison);
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
     * @return ProductocfdiQuery The current query, for fluid interface
     */
    public function filterByIdproducto($idproducto = null, $comparison = null)
    {
        if (is_array($idproducto)) {
            $useMinMax = false;
            if (isset($idproducto['min'])) {
                $this->addUsingAlias(ProductocfdiPeer::IDPRODUCTO, $idproducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproducto['max'])) {
                $this->addUsingAlias(ProductocfdiPeer::IDPRODUCTO, $idproducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductocfdiPeer::IDPRODUCTO, $idproducto, $comparison);
    }

    /**
     * Filter the query on the productocfdi_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByProductocfdiNombre('fooValue');   // WHERE productocfdi_nombre = 'fooValue'
     * $query->filterByProductocfdiNombre('%fooValue%'); // WHERE productocfdi_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $productocfdiNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductocfdiQuery The current query, for fluid interface
     */
    public function filterByProductocfdiNombre($productocfdiNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($productocfdiNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $productocfdiNombre)) {
                $productocfdiNombre = str_replace('*', '%', $productocfdiNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProductocfdiPeer::PRODUCTOCFDI_NOMBRE, $productocfdiNombre, $comparison);
    }

    /**
     * Filter the query by a related Empresa object
     *
     * @param   Empresa|PropelObjectCollection $empresa The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductocfdiQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpresa($empresa, $comparison = null)
    {
        if ($empresa instanceof Empresa) {
            return $this
                ->addUsingAlias(ProductocfdiPeer::IDEMPRESA, $empresa->getIdempresa(), $comparison);
        } elseif ($empresa instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProductocfdiPeer::IDEMPRESA, $empresa->toKeyValue('PrimaryKey', 'Idempresa'), $comparison);
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
     * @return ProductocfdiQuery The current query, for fluid interface
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
     * Filter the query by a related Producto object
     *
     * @param   Producto|PropelObjectCollection $producto The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductocfdiQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(ProductocfdiPeer::IDPRODUCTO, $producto->getIdproducto(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProductocfdiPeer::IDPRODUCTO, $producto->toKeyValue('PrimaryKey', 'Idproducto'), $comparison);
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
     * @return ProductocfdiQuery The current query, for fluid interface
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
     * @param   Productocfdi $productocfdi Object to remove from the list of results
     *
     * @return ProductocfdiQuery The current query, for fluid interface
     */
    public function prune($productocfdi = null)
    {
        if ($productocfdi) {
            $this->addUsingAlias(ProductocfdiPeer::IDPRODUCTOCFDI, $productocfdi->getIdproductocfdi(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
