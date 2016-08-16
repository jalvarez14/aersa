<?php


/**
 * Base class that represents a query for the 'conceptoscfdi' table.
 *
 *
 *
 * @method ConceptoscfdiQuery orderByIdconceptoscfdi($order = Criteria::ASC) Order by the idconceptoscfdi column
 * @method ConceptoscfdiQuery orderByConceptoscfdiNombre($order = Criteria::ASC) Order by the conceptoscfdi_nombre column
 * @method ConceptoscfdiQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 * @method ConceptoscfdiQuery orderByIdempresa($order = Criteria::ASC) Order by the idempresa column
 *
 * @method ConceptoscfdiQuery groupByIdconceptoscfdi() Group by the idconceptoscfdi column
 * @method ConceptoscfdiQuery groupByConceptoscfdiNombre() Group by the conceptoscfdi_nombre column
 * @method ConceptoscfdiQuery groupByIdproducto() Group by the idproducto column
 * @method ConceptoscfdiQuery groupByIdempresa() Group by the idempresa column
 *
 * @method ConceptoscfdiQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ConceptoscfdiQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ConceptoscfdiQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ConceptoscfdiQuery leftJoinEmpresa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empresa relation
 * @method ConceptoscfdiQuery rightJoinEmpresa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empresa relation
 * @method ConceptoscfdiQuery innerJoinEmpresa($relationAlias = null) Adds a INNER JOIN clause to the query using the Empresa relation
 *
 * @method ConceptoscfdiQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method ConceptoscfdiQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method ConceptoscfdiQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method Conceptoscfdi findOne(PropelPDO $con = null) Return the first Conceptoscfdi matching the query
 * @method Conceptoscfdi findOneOrCreate(PropelPDO $con = null) Return the first Conceptoscfdi matching the query, or a new Conceptoscfdi object populated from the query conditions when no match is found
 *
 * @method Conceptoscfdi findOneByConceptoscfdiNombre(string $conceptoscfdi_nombre) Return the first Conceptoscfdi filtered by the conceptoscfdi_nombre column
 * @method Conceptoscfdi findOneByIdproducto(int $idproducto) Return the first Conceptoscfdi filtered by the idproducto column
 * @method Conceptoscfdi findOneByIdempresa(int $idempresa) Return the first Conceptoscfdi filtered by the idempresa column
 *
 * @method array findByIdconceptoscfdi(int $idconceptoscfdi) Return Conceptoscfdi objects filtered by the idconceptoscfdi column
 * @method array findByConceptoscfdiNombre(string $conceptoscfdi_nombre) Return Conceptoscfdi objects filtered by the conceptoscfdi_nombre column
 * @method array findByIdproducto(int $idproducto) Return Conceptoscfdi objects filtered by the idproducto column
 * @method array findByIdempresa(int $idempresa) Return Conceptoscfdi objects filtered by the idempresa column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseConceptoscfdiQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseConceptoscfdiQuery object.
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
            $modelName = 'Conceptoscfdi';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ConceptoscfdiQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ConceptoscfdiQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ConceptoscfdiQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ConceptoscfdiQuery) {
            return $criteria;
        }
        $query = new ConceptoscfdiQuery(null, null, $modelAlias);

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
     * @return   Conceptoscfdi|Conceptoscfdi[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ConceptoscfdiPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ConceptoscfdiPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Conceptoscfdi A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdconceptoscfdi($key, $con = null)
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
     * @return                 Conceptoscfdi A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idconceptoscfdi`, `conceptoscfdi_nombre`, `idproducto`, `idempresa` FROM `conceptoscfdi` WHERE `idconceptoscfdi` = :p0';
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
            $obj = new Conceptoscfdi();
            $obj->hydrate($row);
            ConceptoscfdiPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Conceptoscfdi|Conceptoscfdi[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Conceptoscfdi[]|mixed the list of results, formatted by the current formatter
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
     * @return ConceptoscfdiQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ConceptoscfdiPeer::IDCONCEPTOSCFDI, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ConceptoscfdiQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ConceptoscfdiPeer::IDCONCEPTOSCFDI, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idconceptoscfdi column
     *
     * Example usage:
     * <code>
     * $query->filterByIdconceptoscfdi(1234); // WHERE idconceptoscfdi = 1234
     * $query->filterByIdconceptoscfdi(array(12, 34)); // WHERE idconceptoscfdi IN (12, 34)
     * $query->filterByIdconceptoscfdi(array('min' => 12)); // WHERE idconceptoscfdi >= 12
     * $query->filterByIdconceptoscfdi(array('max' => 12)); // WHERE idconceptoscfdi <= 12
     * </code>
     *
     * @param     mixed $idconceptoscfdi The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConceptoscfdiQuery The current query, for fluid interface
     */
    public function filterByIdconceptoscfdi($idconceptoscfdi = null, $comparison = null)
    {
        if (is_array($idconceptoscfdi)) {
            $useMinMax = false;
            if (isset($idconceptoscfdi['min'])) {
                $this->addUsingAlias(ConceptoscfdiPeer::IDCONCEPTOSCFDI, $idconceptoscfdi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idconceptoscfdi['max'])) {
                $this->addUsingAlias(ConceptoscfdiPeer::IDCONCEPTOSCFDI, $idconceptoscfdi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConceptoscfdiPeer::IDCONCEPTOSCFDI, $idconceptoscfdi, $comparison);
    }

    /**
     * Filter the query on the conceptoscfdi_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByConceptoscfdiNombre('fooValue');   // WHERE conceptoscfdi_nombre = 'fooValue'
     * $query->filterByConceptoscfdiNombre('%fooValue%'); // WHERE conceptoscfdi_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $conceptoscfdiNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConceptoscfdiQuery The current query, for fluid interface
     */
    public function filterByConceptoscfdiNombre($conceptoscfdiNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($conceptoscfdiNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $conceptoscfdiNombre)) {
                $conceptoscfdiNombre = str_replace('*', '%', $conceptoscfdiNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConceptoscfdiPeer::CONCEPTOSCFDI_NOMBRE, $conceptoscfdiNombre, $comparison);
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
     * @return ConceptoscfdiQuery The current query, for fluid interface
     */
    public function filterByIdproducto($idproducto = null, $comparison = null)
    {
        if (is_array($idproducto)) {
            $useMinMax = false;
            if (isset($idproducto['min'])) {
                $this->addUsingAlias(ConceptoscfdiPeer::IDPRODUCTO, $idproducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproducto['max'])) {
                $this->addUsingAlias(ConceptoscfdiPeer::IDPRODUCTO, $idproducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConceptoscfdiPeer::IDPRODUCTO, $idproducto, $comparison);
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
     * @return ConceptoscfdiQuery The current query, for fluid interface
     */
    public function filterByIdempresa($idempresa = null, $comparison = null)
    {
        if (is_array($idempresa)) {
            $useMinMax = false;
            if (isset($idempresa['min'])) {
                $this->addUsingAlias(ConceptoscfdiPeer::IDEMPRESA, $idempresa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempresa['max'])) {
                $this->addUsingAlias(ConceptoscfdiPeer::IDEMPRESA, $idempresa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConceptoscfdiPeer::IDEMPRESA, $idempresa, $comparison);
    }

    /**
     * Filter the query by a related Empresa object
     *
     * @param   Empresa|PropelObjectCollection $empresa The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ConceptoscfdiQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpresa($empresa, $comparison = null)
    {
        if ($empresa instanceof Empresa) {
            return $this
                ->addUsingAlias(ConceptoscfdiPeer::IDEMPRESA, $empresa->getIdempresa(), $comparison);
        } elseif ($empresa instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ConceptoscfdiPeer::IDEMPRESA, $empresa->toKeyValue('PrimaryKey', 'Idempresa'), $comparison);
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
     * @return ConceptoscfdiQuery The current query, for fluid interface
     */
    public function joinEmpresa($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useEmpresaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
     * @return                 ConceptoscfdiQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(ConceptoscfdiPeer::IDPRODUCTO, $producto->getIdproducto(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ConceptoscfdiPeer::IDPRODUCTO, $producto->toKeyValue('PrimaryKey', 'Idproducto'), $comparison);
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
     * @return ConceptoscfdiQuery The current query, for fluid interface
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
     * @param   Conceptoscfdi $conceptoscfdi Object to remove from the list of results
     *
     * @return ConceptoscfdiQuery The current query, for fluid interface
     */
    public function prune($conceptoscfdi = null)
    {
        if ($conceptoscfdi) {
            $this->addUsingAlias(ConceptoscfdiPeer::IDCONCEPTOSCFDI, $conceptoscfdi->getIdconceptoscfdi(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
