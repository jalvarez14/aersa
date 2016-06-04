<?php


/**
 * Base class that represents a query for the 'ventanota' table.
 *
 *
 *
 * @method VentanotaQuery orderByIdventanota($order = Criteria::ASC) Order by the idventanota column
 * @method VentanotaQuery orderByIdusuario($order = Criteria::ASC) Order by the idusuario column
 * @method VentanotaQuery orderByIdventa($order = Criteria::ASC) Order by the idventa column
 * @method VentanotaQuery orderByVentanotaNota($order = Criteria::ASC) Order by the ventanota_nota column
 * @method VentanotaQuery orderByVentanotaFecha($order = Criteria::ASC) Order by the ventanota_fecha column
 *
 * @method VentanotaQuery groupByIdventanota() Group by the idventanota column
 * @method VentanotaQuery groupByIdusuario() Group by the idusuario column
 * @method VentanotaQuery groupByIdventa() Group by the idventa column
 * @method VentanotaQuery groupByVentanotaNota() Group by the ventanota_nota column
 * @method VentanotaQuery groupByVentanotaFecha() Group by the ventanota_fecha column
 *
 * @method VentanotaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method VentanotaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method VentanotaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method VentanotaQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method VentanotaQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method VentanotaQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method VentanotaQuery leftJoinVenta($relationAlias = null) Adds a LEFT JOIN clause to the query using the Venta relation
 * @method VentanotaQuery rightJoinVenta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Venta relation
 * @method VentanotaQuery innerJoinVenta($relationAlias = null) Adds a INNER JOIN clause to the query using the Venta relation
 *
 * @method Ventanota findOne(PropelPDO $con = null) Return the first Ventanota matching the query
 * @method Ventanota findOneOrCreate(PropelPDO $con = null) Return the first Ventanota matching the query, or a new Ventanota object populated from the query conditions when no match is found
 *
 * @method Ventanota findOneByIdusuario(int $idusuario) Return the first Ventanota filtered by the idusuario column
 * @method Ventanota findOneByIdventa(int $idventa) Return the first Ventanota filtered by the idventa column
 * @method Ventanota findOneByVentanotaNota(string $ventanota_nota) Return the first Ventanota filtered by the ventanota_nota column
 * @method Ventanota findOneByVentanotaFecha(string $ventanota_fecha) Return the first Ventanota filtered by the ventanota_fecha column
 *
 * @method array findByIdventanota(int $idventanota) Return Ventanota objects filtered by the idventanota column
 * @method array findByIdusuario(int $idusuario) Return Ventanota objects filtered by the idusuario column
 * @method array findByIdventa(int $idventa) Return Ventanota objects filtered by the idventa column
 * @method array findByVentanotaNota(string $ventanota_nota) Return Ventanota objects filtered by the ventanota_nota column
 * @method array findByVentanotaFecha(string $ventanota_fecha) Return Ventanota objects filtered by the ventanota_fecha column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseVentanotaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseVentanotaQuery object.
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
            $modelName = 'Ventanota';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new VentanotaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   VentanotaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return VentanotaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof VentanotaQuery) {
            return $criteria;
        }
        $query = new VentanotaQuery(null, null, $modelAlias);

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
     * @return   Ventanota|Ventanota[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = VentanotaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(VentanotaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Ventanota A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdventanota($key, $con = null)
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
     * @return                 Ventanota A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idventanota`, `idusuario`, `idventa`, `ventanota_nota`, `ventanota_fecha` FROM `ventanota` WHERE `idventanota` = :p0';
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
            $obj = new Ventanota();
            $obj->hydrate($row);
            VentanotaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Ventanota|Ventanota[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Ventanota[]|mixed the list of results, formatted by the current formatter
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
     * @return VentanotaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(VentanotaPeer::IDVENTANOTA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return VentanotaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(VentanotaPeer::IDVENTANOTA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idventanota column
     *
     * Example usage:
     * <code>
     * $query->filterByIdventanota(1234); // WHERE idventanota = 1234
     * $query->filterByIdventanota(array(12, 34)); // WHERE idventanota IN (12, 34)
     * $query->filterByIdventanota(array('min' => 12)); // WHERE idventanota >= 12
     * $query->filterByIdventanota(array('max' => 12)); // WHERE idventanota <= 12
     * </code>
     *
     * @param     mixed $idventanota The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentanotaQuery The current query, for fluid interface
     */
    public function filterByIdventanota($idventanota = null, $comparison = null)
    {
        if (is_array($idventanota)) {
            $useMinMax = false;
            if (isset($idventanota['min'])) {
                $this->addUsingAlias(VentanotaPeer::IDVENTANOTA, $idventanota['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idventanota['max'])) {
                $this->addUsingAlias(VentanotaPeer::IDVENTANOTA, $idventanota['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentanotaPeer::IDVENTANOTA, $idventanota, $comparison);
    }

    /**
     * Filter the query on the idusuario column
     *
     * Example usage:
     * <code>
     * $query->filterByIdusuario(1234); // WHERE idusuario = 1234
     * $query->filterByIdusuario(array(12, 34)); // WHERE idusuario IN (12, 34)
     * $query->filterByIdusuario(array('min' => 12)); // WHERE idusuario >= 12
     * $query->filterByIdusuario(array('max' => 12)); // WHERE idusuario <= 12
     * </code>
     *
     * @see       filterByUsuario()
     *
     * @param     mixed $idusuario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentanotaQuery The current query, for fluid interface
     */
    public function filterByIdusuario($idusuario = null, $comparison = null)
    {
        if (is_array($idusuario)) {
            $useMinMax = false;
            if (isset($idusuario['min'])) {
                $this->addUsingAlias(VentanotaPeer::IDUSUARIO, $idusuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idusuario['max'])) {
                $this->addUsingAlias(VentanotaPeer::IDUSUARIO, $idusuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentanotaPeer::IDUSUARIO, $idusuario, $comparison);
    }

    /**
     * Filter the query on the idventa column
     *
     * Example usage:
     * <code>
     * $query->filterByIdventa(1234); // WHERE idventa = 1234
     * $query->filterByIdventa(array(12, 34)); // WHERE idventa IN (12, 34)
     * $query->filterByIdventa(array('min' => 12)); // WHERE idventa >= 12
     * $query->filterByIdventa(array('max' => 12)); // WHERE idventa <= 12
     * </code>
     *
     * @see       filterByVenta()
     *
     * @param     mixed $idventa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentanotaQuery The current query, for fluid interface
     */
    public function filterByIdventa($idventa = null, $comparison = null)
    {
        if (is_array($idventa)) {
            $useMinMax = false;
            if (isset($idventa['min'])) {
                $this->addUsingAlias(VentanotaPeer::IDVENTA, $idventa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idventa['max'])) {
                $this->addUsingAlias(VentanotaPeer::IDVENTA, $idventa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentanotaPeer::IDVENTA, $idventa, $comparison);
    }

    /**
     * Filter the query on the ventanota_nota column
     *
     * Example usage:
     * <code>
     * $query->filterByVentanotaNota('fooValue');   // WHERE ventanota_nota = 'fooValue'
     * $query->filterByVentanotaNota('%fooValue%'); // WHERE ventanota_nota LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ventanotaNota The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentanotaQuery The current query, for fluid interface
     */
    public function filterByVentanotaNota($ventanotaNota = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ventanotaNota)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ventanotaNota)) {
                $ventanotaNota = str_replace('*', '%', $ventanotaNota);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VentanotaPeer::VENTANOTA_NOTA, $ventanotaNota, $comparison);
    }

    /**
     * Filter the query on the ventanota_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByVentanotaFecha('2011-03-14'); // WHERE ventanota_fecha = '2011-03-14'
     * $query->filterByVentanotaFecha('now'); // WHERE ventanota_fecha = '2011-03-14'
     * $query->filterByVentanotaFecha(array('max' => 'yesterday')); // WHERE ventanota_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $ventanotaFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentanotaQuery The current query, for fluid interface
     */
    public function filterByVentanotaFecha($ventanotaFecha = null, $comparison = null)
    {
        if (is_array($ventanotaFecha)) {
            $useMinMax = false;
            if (isset($ventanotaFecha['min'])) {
                $this->addUsingAlias(VentanotaPeer::VENTANOTA_FECHA, $ventanotaFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ventanotaFecha['max'])) {
                $this->addUsingAlias(VentanotaPeer::VENTANOTA_FECHA, $ventanotaFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentanotaPeer::VENTANOTA_FECHA, $ventanotaFecha, $comparison);
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VentanotaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(VentanotaPeer::IDUSUARIO, $usuario->getIdusuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(VentanotaPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
        } else {
            throw new PropelException('filterByUsuario() only accepts arguments of type Usuario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Usuario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return VentanotaQuery The current query, for fluid interface
     */
    public function joinUsuario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Usuario');

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
            $this->addJoinObject($join, 'Usuario');
        }

        return $this;
    }

    /**
     * Use the Usuario relation Usuario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuarioQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUsuario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Usuario', 'UsuarioQuery');
    }

    /**
     * Filter the query by a related Venta object
     *
     * @param   Venta|PropelObjectCollection $venta The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VentanotaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVenta($venta, $comparison = null)
    {
        if ($venta instanceof Venta) {
            return $this
                ->addUsingAlias(VentanotaPeer::IDVENTA, $venta->getIdventa(), $comparison);
        } elseif ($venta instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(VentanotaPeer::IDVENTA, $venta->toKeyValue('PrimaryKey', 'Idventa'), $comparison);
        } else {
            throw new PropelException('filterByVenta() only accepts arguments of type Venta or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Venta relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return VentanotaQuery The current query, for fluid interface
     */
    public function joinVenta($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Venta');

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
            $this->addJoinObject($join, 'Venta');
        }

        return $this;
    }

    /**
     * Use the Venta relation Venta object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   VentaQuery A secondary query class using the current class as primary query
     */
    public function useVentaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVenta($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Venta', 'VentaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Ventanota $ventanota Object to remove from the list of results
     *
     * @return VentanotaQuery The current query, for fluid interface
     */
    public function prune($ventanota = null)
    {
        if ($ventanota) {
            $this->addUsingAlias(VentanotaPeer::IDVENTANOTA, $ventanota->getIdventanota(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
