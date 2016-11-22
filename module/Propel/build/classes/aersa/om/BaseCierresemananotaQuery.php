<?php


/**
 * Base class that represents a query for the 'cierresemananota' table.
 *
 *
 *
 * @method CierresemananotaQuery orderByIdcierresemananota($order = Criteria::ASC) Order by the idcierresemananota column
 * @method CierresemananotaQuery orderByIdusuario($order = Criteria::ASC) Order by the idusuario column
 * @method CierresemananotaQuery orderByIdcierresemana($order = Criteria::ASC) Order by the idcierresemana column
 * @method CierresemananotaQuery orderByCierresemananotaNota($order = Criteria::ASC) Order by the cierresemananota_nota column
 * @method CierresemananotaQuery orderByCierresemananotaFecha($order = Criteria::ASC) Order by the cierresemananota_fecha column
 *
 * @method CierresemananotaQuery groupByIdcierresemananota() Group by the idcierresemananota column
 * @method CierresemananotaQuery groupByIdusuario() Group by the idusuario column
 * @method CierresemananotaQuery groupByIdcierresemana() Group by the idcierresemana column
 * @method CierresemananotaQuery groupByCierresemananotaNota() Group by the cierresemananota_nota column
 * @method CierresemananotaQuery groupByCierresemananotaFecha() Group by the cierresemananota_fecha column
 *
 * @method CierresemananotaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CierresemananotaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CierresemananotaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CierresemananotaQuery leftJoinInventariomes($relationAlias = null) Adds a LEFT JOIN clause to the query using the Inventariomes relation
 * @method CierresemananotaQuery rightJoinInventariomes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Inventariomes relation
 * @method CierresemananotaQuery innerJoinInventariomes($relationAlias = null) Adds a INNER JOIN clause to the query using the Inventariomes relation
 *
 * @method CierresemananotaQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method CierresemananotaQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method CierresemananotaQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method Cierresemananota findOne(PropelPDO $con = null) Return the first Cierresemananota matching the query
 * @method Cierresemananota findOneOrCreate(PropelPDO $con = null) Return the first Cierresemananota matching the query, or a new Cierresemananota object populated from the query conditions when no match is found
 *
 * @method Cierresemananota findOneByIdusuario(int $idusuario) Return the first Cierresemananota filtered by the idusuario column
 * @method Cierresemananota findOneByIdcierresemana(int $idcierresemana) Return the first Cierresemananota filtered by the idcierresemana column
 * @method Cierresemananota findOneByCierresemananotaNota(string $cierresemananota_nota) Return the first Cierresemananota filtered by the cierresemananota_nota column
 * @method Cierresemananota findOneByCierresemananotaFecha(string $cierresemananota_fecha) Return the first Cierresemananota filtered by the cierresemananota_fecha column
 *
 * @method array findByIdcierresemananota(int $idcierresemananota) Return Cierresemananota objects filtered by the idcierresemananota column
 * @method array findByIdusuario(int $idusuario) Return Cierresemananota objects filtered by the idusuario column
 * @method array findByIdcierresemana(int $idcierresemana) Return Cierresemananota objects filtered by the idcierresemana column
 * @method array findByCierresemananotaNota(string $cierresemananota_nota) Return Cierresemananota objects filtered by the cierresemananota_nota column
 * @method array findByCierresemananotaFecha(string $cierresemananota_fecha) Return Cierresemananota objects filtered by the cierresemananota_fecha column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseCierresemananotaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCierresemananotaQuery object.
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
            $modelName = 'Cierresemananota';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CierresemananotaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CierresemananotaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CierresemananotaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CierresemananotaQuery) {
            return $criteria;
        }
        $query = new CierresemananotaQuery(null, null, $modelAlias);

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
     * @return   Cierresemananota|Cierresemananota[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CierresemananotaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CierresemananotaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Cierresemananota A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdcierresemananota($key, $con = null)
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
     * @return                 Cierresemananota A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idcierresemananota`, `idusuario`, `idcierresemana`, `cierresemananota_nota`, `cierresemananota_fecha` FROM `cierresemananota` WHERE `idcierresemananota` = :p0';
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
            $obj = new Cierresemananota();
            $obj->hydrate($row);
            CierresemananotaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Cierresemananota|Cierresemananota[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Cierresemananota[]|mixed the list of results, formatted by the current formatter
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
     * @return CierresemananotaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CierresemananotaPeer::IDCIERRESEMANANOTA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CierresemananotaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CierresemananotaPeer::IDCIERRESEMANANOTA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idcierresemananota column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcierresemananota(1234); // WHERE idcierresemananota = 1234
     * $query->filterByIdcierresemananota(array(12, 34)); // WHERE idcierresemananota IN (12, 34)
     * $query->filterByIdcierresemananota(array('min' => 12)); // WHERE idcierresemananota >= 12
     * $query->filterByIdcierresemananota(array('max' => 12)); // WHERE idcierresemananota <= 12
     * </code>
     *
     * @param     mixed $idcierresemananota The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CierresemananotaQuery The current query, for fluid interface
     */
    public function filterByIdcierresemananota($idcierresemananota = null, $comparison = null)
    {
        if (is_array($idcierresemananota)) {
            $useMinMax = false;
            if (isset($idcierresemananota['min'])) {
                $this->addUsingAlias(CierresemananotaPeer::IDCIERRESEMANANOTA, $idcierresemananota['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcierresemananota['max'])) {
                $this->addUsingAlias(CierresemananotaPeer::IDCIERRESEMANANOTA, $idcierresemananota['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CierresemananotaPeer::IDCIERRESEMANANOTA, $idcierresemananota, $comparison);
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
     * @return CierresemananotaQuery The current query, for fluid interface
     */
    public function filterByIdusuario($idusuario = null, $comparison = null)
    {
        if (is_array($idusuario)) {
            $useMinMax = false;
            if (isset($idusuario['min'])) {
                $this->addUsingAlias(CierresemananotaPeer::IDUSUARIO, $idusuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idusuario['max'])) {
                $this->addUsingAlias(CierresemananotaPeer::IDUSUARIO, $idusuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CierresemananotaPeer::IDUSUARIO, $idusuario, $comparison);
    }

    /**
     * Filter the query on the idcierresemana column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcierresemana(1234); // WHERE idcierresemana = 1234
     * $query->filterByIdcierresemana(array(12, 34)); // WHERE idcierresemana IN (12, 34)
     * $query->filterByIdcierresemana(array('min' => 12)); // WHERE idcierresemana >= 12
     * $query->filterByIdcierresemana(array('max' => 12)); // WHERE idcierresemana <= 12
     * </code>
     *
     * @see       filterByInventariomes()
     *
     * @param     mixed $idcierresemana The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CierresemananotaQuery The current query, for fluid interface
     */
    public function filterByIdcierresemana($idcierresemana = null, $comparison = null)
    {
        if (is_array($idcierresemana)) {
            $useMinMax = false;
            if (isset($idcierresemana['min'])) {
                $this->addUsingAlias(CierresemananotaPeer::IDCIERRESEMANA, $idcierresemana['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcierresemana['max'])) {
                $this->addUsingAlias(CierresemananotaPeer::IDCIERRESEMANA, $idcierresemana['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CierresemananotaPeer::IDCIERRESEMANA, $idcierresemana, $comparison);
    }

    /**
     * Filter the query on the cierresemananota_nota column
     *
     * Example usage:
     * <code>
     * $query->filterByCierresemananotaNota('fooValue');   // WHERE cierresemananota_nota = 'fooValue'
     * $query->filterByCierresemananotaNota('%fooValue%'); // WHERE cierresemananota_nota LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cierresemananotaNota The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CierresemananotaQuery The current query, for fluid interface
     */
    public function filterByCierresemananotaNota($cierresemananotaNota = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cierresemananotaNota)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cierresemananotaNota)) {
                $cierresemananotaNota = str_replace('*', '%', $cierresemananotaNota);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CierresemananotaPeer::CIERRESEMANANOTA_NOTA, $cierresemananotaNota, $comparison);
    }

    /**
     * Filter the query on the cierresemananota_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByCierresemananotaFecha('2011-03-14'); // WHERE cierresemananota_fecha = '2011-03-14'
     * $query->filterByCierresemananotaFecha('now'); // WHERE cierresemananota_fecha = '2011-03-14'
     * $query->filterByCierresemananotaFecha(array('max' => 'yesterday')); // WHERE cierresemananota_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $cierresemananotaFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CierresemananotaQuery The current query, for fluid interface
     */
    public function filterByCierresemananotaFecha($cierresemananotaFecha = null, $comparison = null)
    {
        if (is_array($cierresemananotaFecha)) {
            $useMinMax = false;
            if (isset($cierresemananotaFecha['min'])) {
                $this->addUsingAlias(CierresemananotaPeer::CIERRESEMANANOTA_FECHA, $cierresemananotaFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cierresemananotaFecha['max'])) {
                $this->addUsingAlias(CierresemananotaPeer::CIERRESEMANANOTA_FECHA, $cierresemananotaFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CierresemananotaPeer::CIERRESEMANANOTA_FECHA, $cierresemananotaFecha, $comparison);
    }

    /**
     * Filter the query by a related Inventariomes object
     *
     * @param   Inventariomes|PropelObjectCollection $inventariomes The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CierresemananotaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByInventariomes($inventariomes, $comparison = null)
    {
        if ($inventariomes instanceof Inventariomes) {
            return $this
                ->addUsingAlias(CierresemananotaPeer::IDCIERRESEMANA, $inventariomes->getIdinventariomes(), $comparison);
        } elseif ($inventariomes instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CierresemananotaPeer::IDCIERRESEMANA, $inventariomes->toKeyValue('PrimaryKey', 'Idinventariomes'), $comparison);
        } else {
            throw new PropelException('filterByInventariomes() only accepts arguments of type Inventariomes or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Inventariomes relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CierresemananotaQuery The current query, for fluid interface
     */
    public function joinInventariomes($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Inventariomes');

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
            $this->addJoinObject($join, 'Inventariomes');
        }

        return $this;
    }

    /**
     * Use the Inventariomes relation Inventariomes object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   InventariomesQuery A secondary query class using the current class as primary query
     */
    public function useInventariomesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInventariomes($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Inventariomes', 'InventariomesQuery');
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CierresemananotaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(CierresemananotaPeer::IDUSUARIO, $usuario->getIdusuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CierresemananotaPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
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
     * @return CierresemananotaQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   Cierresemananota $cierresemananota Object to remove from the list of results
     *
     * @return CierresemananotaQuery The current query, for fluid interface
     */
    public function prune($cierresemananota = null)
    {
        if ($cierresemananota) {
            $this->addUsingAlias(CierresemananotaPeer::IDCIERRESEMANANOTA, $cierresemananota->getIdcierresemananota(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
