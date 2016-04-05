<?php


/**
 * Base class that represents a query for the 'sucursal' table.
 *
 *
 *
 * @method SucursalQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method SucursalQuery orderBySucursalNombre($order = Criteria::ASC) Order by the sucursal_nombre column
 * @method SucursalQuery orderByIdempresa($order = Criteria::ASC) Order by the idempresa column
 *
 * @method SucursalQuery groupByIdsucursal() Group by the idsucursal column
 * @method SucursalQuery groupBySucursalNombre() Group by the sucursal_nombre column
 * @method SucursalQuery groupByIdempresa() Group by the idempresa column
 *
 * @method SucursalQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SucursalQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SucursalQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SucursalQuery leftJoinEmpresa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empresa relation
 * @method SucursalQuery rightJoinEmpresa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empresa relation
 * @method SucursalQuery innerJoinEmpresa($relationAlias = null) Adds a INNER JOIN clause to the query using the Empresa relation
 *
 * @method SucursalQuery leftJoinAlmacen($relationAlias = null) Adds a LEFT JOIN clause to the query using the Almacen relation
 * @method SucursalQuery rightJoinAlmacen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Almacen relation
 * @method SucursalQuery innerJoinAlmacen($relationAlias = null) Adds a INNER JOIN clause to the query using the Almacen relation
 *
 * @method SucursalQuery leftJoinUsuariosucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuariosucursal relation
 * @method SucursalQuery rightJoinUsuariosucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuariosucursal relation
 * @method SucursalQuery innerJoinUsuariosucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuariosucursal relation
 *
 * @method Sucursal findOne(PropelPDO $con = null) Return the first Sucursal matching the query
 * @method Sucursal findOneOrCreate(PropelPDO $con = null) Return the first Sucursal matching the query, or a new Sucursal object populated from the query conditions when no match is found
 *
 * @method Sucursal findOneBySucursalNombre(string $sucursal_nombre) Return the first Sucursal filtered by the sucursal_nombre column
 * @method Sucursal findOneByIdempresa(int $idempresa) Return the first Sucursal filtered by the idempresa column
 *
 * @method array findByIdsucursal(int $idsucursal) Return Sucursal objects filtered by the idsucursal column
 * @method array findBySucursalNombre(string $sucursal_nombre) Return Sucursal objects filtered by the sucursal_nombre column
 * @method array findByIdempresa(int $idempresa) Return Sucursal objects filtered by the idempresa column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseSucursalQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSucursalQuery object.
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
            $modelName = 'Sucursal';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SucursalQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SucursalQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SucursalQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SucursalQuery) {
            return $criteria;
        }
        $query = new SucursalQuery(null, null, $modelAlias);

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
     * @return   Sucursal|Sucursal[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SucursalPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SucursalPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Sucursal A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdsucursal($key, $con = null)
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
     * @return                 Sucursal A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idsucursal`, `sucursal_nombre`, `idempresa` FROM `sucursal` WHERE `idsucursal` = :p0';
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
            $obj = new Sucursal();
            $obj->hydrate($row);
            SucursalPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Sucursal|Sucursal[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Sucursal[]|mixed the list of results, formatted by the current formatter
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
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SucursalPeer::IDSUCURSAL, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SucursalPeer::IDSUCURSAL, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idsucursal column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsucursal(1234); // WHERE idsucursal = 1234
     * $query->filterByIdsucursal(array(12, 34)); // WHERE idsucursal IN (12, 34)
     * $query->filterByIdsucursal(array('min' => 12)); // WHERE idsucursal >= 12
     * $query->filterByIdsucursal(array('max' => 12)); // WHERE idsucursal <= 12
     * </code>
     *
     * @param     mixed $idsucursal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(SucursalPeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(SucursalPeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SucursalPeer::IDSUCURSAL, $idsucursal, $comparison);
    }

    /**
     * Filter the query on the sucursal_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterBySucursalNombre('fooValue');   // WHERE sucursal_nombre = 'fooValue'
     * $query->filterBySucursalNombre('%fooValue%'); // WHERE sucursal_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sucursalNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterBySucursalNombre($sucursalNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sucursalNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sucursalNombre)) {
                $sucursalNombre = str_replace('*', '%', $sucursalNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SucursalPeer::SUCURSAL_NOMBRE, $sucursalNombre, $comparison);
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
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterByIdempresa($idempresa = null, $comparison = null)
    {
        if (is_array($idempresa)) {
            $useMinMax = false;
            if (isset($idempresa['min'])) {
                $this->addUsingAlias(SucursalPeer::IDEMPRESA, $idempresa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempresa['max'])) {
                $this->addUsingAlias(SucursalPeer::IDEMPRESA, $idempresa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SucursalPeer::IDEMPRESA, $idempresa, $comparison);
    }

    /**
     * Filter the query by a related Empresa object
     *
     * @param   Empresa|PropelObjectCollection $empresa The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpresa($empresa, $comparison = null)
    {
        if ($empresa instanceof Empresa) {
            return $this
                ->addUsingAlias(SucursalPeer::IDEMPRESA, $empresa->getIdempresa(), $comparison);
        } elseif ($empresa instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SucursalPeer::IDEMPRESA, $empresa->toKeyValue('PrimaryKey', 'Idempresa'), $comparison);
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
     * @return SucursalQuery The current query, for fluid interface
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
     * Filter the query by a related Almacen object
     *
     * @param   Almacen|PropelObjectCollection $almacen  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAlmacen($almacen, $comparison = null)
    {
        if ($almacen instanceof Almacen) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $almacen->getIdsucursal(), $comparison);
        } elseif ($almacen instanceof PropelObjectCollection) {
            return $this
                ->useAlmacenQuery()
                ->filterByPrimaryKeys($almacen->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAlmacen() only accepts arguments of type Almacen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Almacen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinAlmacen($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Almacen');

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
            $this->addJoinObject($join, 'Almacen');
        }

        return $this;
    }

    /**
     * Use the Almacen relation Almacen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AlmacenQuery A secondary query class using the current class as primary query
     */
    public function useAlmacenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAlmacen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Almacen', 'AlmacenQuery');
    }

    /**
     * Filter the query by a related Usuariosucursal object
     *
     * @param   Usuariosucursal|PropelObjectCollection $usuariosucursal  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuariosucursal($usuariosucursal, $comparison = null)
    {
        if ($usuariosucursal instanceof Usuariosucursal) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $usuariosucursal->getIdsucursal(), $comparison);
        } elseif ($usuariosucursal instanceof PropelObjectCollection) {
            return $this
                ->useUsuariosucursalQuery()
                ->filterByPrimaryKeys($usuariosucursal->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByUsuariosucursal() only accepts arguments of type Usuariosucursal or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Usuariosucursal relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinUsuariosucursal($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Usuariosucursal');

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
            $this->addJoinObject($join, 'Usuariosucursal');
        }

        return $this;
    }

    /**
     * Use the Usuariosucursal relation Usuariosucursal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuariosucursalQuery A secondary query class using the current class as primary query
     */
    public function useUsuariosucursalQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUsuariosucursal($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Usuariosucursal', 'UsuariosucursalQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Sucursal $sucursal Object to remove from the list of results
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function prune($sucursal = null)
    {
        if ($sucursal) {
            $this->addUsingAlias(SucursalPeer::IDSUCURSAL, $sucursal->getIdsucursal(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
