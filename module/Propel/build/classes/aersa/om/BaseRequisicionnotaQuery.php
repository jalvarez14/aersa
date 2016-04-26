<?php


/**
 * Base class that represents a query for the 'requisicionnota' table.
 *
 *
 *
 * @method RequisicionnotaQuery orderByIdrequisicionnota($order = Criteria::ASC) Order by the idrequisicionnota column
 * @method RequisicionnotaQuery orderByIdrequisicion($order = Criteria::ASC) Order by the idrequisicion column
 * @method RequisicionnotaQuery orderByIdusuario($order = Criteria::ASC) Order by the idusuario column
 * @method RequisicionnotaQuery orderByRequisicionnotaNota($order = Criteria::ASC) Order by the requisicionnota_nota column
 * @method RequisicionnotaQuery orderByRequisicionnotaFecha($order = Criteria::ASC) Order by the requisicionnota_fecha column
 *
 * @method RequisicionnotaQuery groupByIdrequisicionnota() Group by the idrequisicionnota column
 * @method RequisicionnotaQuery groupByIdrequisicion() Group by the idrequisicion column
 * @method RequisicionnotaQuery groupByIdusuario() Group by the idusuario column
 * @method RequisicionnotaQuery groupByRequisicionnotaNota() Group by the requisicionnota_nota column
 * @method RequisicionnotaQuery groupByRequisicionnotaFecha() Group by the requisicionnota_fecha column
 *
 * @method RequisicionnotaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RequisicionnotaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RequisicionnotaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RequisicionnotaQuery leftJoinRequisicion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Requisicion relation
 * @method RequisicionnotaQuery rightJoinRequisicion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Requisicion relation
 * @method RequisicionnotaQuery innerJoinRequisicion($relationAlias = null) Adds a INNER JOIN clause to the query using the Requisicion relation
 *
 * @method RequisicionnotaQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method RequisicionnotaQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method RequisicionnotaQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method Requisicionnota findOne(PropelPDO $con = null) Return the first Requisicionnota matching the query
 * @method Requisicionnota findOneOrCreate(PropelPDO $con = null) Return the first Requisicionnota matching the query, or a new Requisicionnota object populated from the query conditions when no match is found
 *
 * @method Requisicionnota findOneByIdrequisicion(int $idrequisicion) Return the first Requisicionnota filtered by the idrequisicion column
 * @method Requisicionnota findOneByIdusuario(int $idusuario) Return the first Requisicionnota filtered by the idusuario column
 * @method Requisicionnota findOneByRequisicionnotaNota(string $requisicionnota_nota) Return the first Requisicionnota filtered by the requisicionnota_nota column
 * @method Requisicionnota findOneByRequisicionnotaFecha(string $requisicionnota_fecha) Return the first Requisicionnota filtered by the requisicionnota_fecha column
 *
 * @method array findByIdrequisicionnota(int $idrequisicionnota) Return Requisicionnota objects filtered by the idrequisicionnota column
 * @method array findByIdrequisicion(int $idrequisicion) Return Requisicionnota objects filtered by the idrequisicion column
 * @method array findByIdusuario(int $idusuario) Return Requisicionnota objects filtered by the idusuario column
 * @method array findByRequisicionnotaNota(string $requisicionnota_nota) Return Requisicionnota objects filtered by the requisicionnota_nota column
 * @method array findByRequisicionnotaFecha(string $requisicionnota_fecha) Return Requisicionnota objects filtered by the requisicionnota_fecha column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseRequisicionnotaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRequisicionnotaQuery object.
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
            $modelName = 'Requisicionnota';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RequisicionnotaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RequisicionnotaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RequisicionnotaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RequisicionnotaQuery) {
            return $criteria;
        }
        $query = new RequisicionnotaQuery(null, null, $modelAlias);

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
     * @return   Requisicionnota|Requisicionnota[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RequisicionnotaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RequisicionnotaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Requisicionnota A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdrequisicionnota($key, $con = null)
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
     * @return                 Requisicionnota A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idrequisicionnota`, `idrequisicion`, `idusuario`, `requisicionnota_nota`, `requisicionnota_fecha` FROM `requisicionnota` WHERE `idrequisicionnota` = :p0';
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
            $obj = new Requisicionnota();
            $obj->hydrate($row);
            RequisicionnotaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Requisicionnota|Requisicionnota[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Requisicionnota[]|mixed the list of results, formatted by the current formatter
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
     * @return RequisicionnotaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RequisicionnotaPeer::IDREQUISICIONNOTA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RequisicionnotaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RequisicionnotaPeer::IDREQUISICIONNOTA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idrequisicionnota column
     *
     * Example usage:
     * <code>
     * $query->filterByIdrequisicionnota(1234); // WHERE idrequisicionnota = 1234
     * $query->filterByIdrequisicionnota(array(12, 34)); // WHERE idrequisicionnota IN (12, 34)
     * $query->filterByIdrequisicionnota(array('min' => 12)); // WHERE idrequisicionnota >= 12
     * $query->filterByIdrequisicionnota(array('max' => 12)); // WHERE idrequisicionnota <= 12
     * </code>
     *
     * @param     mixed $idrequisicionnota The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RequisicionnotaQuery The current query, for fluid interface
     */
    public function filterByIdrequisicionnota($idrequisicionnota = null, $comparison = null)
    {
        if (is_array($idrequisicionnota)) {
            $useMinMax = false;
            if (isset($idrequisicionnota['min'])) {
                $this->addUsingAlias(RequisicionnotaPeer::IDREQUISICIONNOTA, $idrequisicionnota['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idrequisicionnota['max'])) {
                $this->addUsingAlias(RequisicionnotaPeer::IDREQUISICIONNOTA, $idrequisicionnota['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RequisicionnotaPeer::IDREQUISICIONNOTA, $idrequisicionnota, $comparison);
    }

    /**
     * Filter the query on the idrequisicion column
     *
     * Example usage:
     * <code>
     * $query->filterByIdrequisicion(1234); // WHERE idrequisicion = 1234
     * $query->filterByIdrequisicion(array(12, 34)); // WHERE idrequisicion IN (12, 34)
     * $query->filterByIdrequisicion(array('min' => 12)); // WHERE idrequisicion >= 12
     * $query->filterByIdrequisicion(array('max' => 12)); // WHERE idrequisicion <= 12
     * </code>
     *
     * @see       filterByRequisicion()
     *
     * @param     mixed $idrequisicion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RequisicionnotaQuery The current query, for fluid interface
     */
    public function filterByIdrequisicion($idrequisicion = null, $comparison = null)
    {
        if (is_array($idrequisicion)) {
            $useMinMax = false;
            if (isset($idrequisicion['min'])) {
                $this->addUsingAlias(RequisicionnotaPeer::IDREQUISICION, $idrequisicion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idrequisicion['max'])) {
                $this->addUsingAlias(RequisicionnotaPeer::IDREQUISICION, $idrequisicion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RequisicionnotaPeer::IDREQUISICION, $idrequisicion, $comparison);
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
     * @return RequisicionnotaQuery The current query, for fluid interface
     */
    public function filterByIdusuario($idusuario = null, $comparison = null)
    {
        if (is_array($idusuario)) {
            $useMinMax = false;
            if (isset($idusuario['min'])) {
                $this->addUsingAlias(RequisicionnotaPeer::IDUSUARIO, $idusuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idusuario['max'])) {
                $this->addUsingAlias(RequisicionnotaPeer::IDUSUARIO, $idusuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RequisicionnotaPeer::IDUSUARIO, $idusuario, $comparison);
    }

    /**
     * Filter the query on the requisicionnota_nota column
     *
     * Example usage:
     * <code>
     * $query->filterByRequisicionnotaNota('fooValue');   // WHERE requisicionnota_nota = 'fooValue'
     * $query->filterByRequisicionnotaNota('%fooValue%'); // WHERE requisicionnota_nota LIKE '%fooValue%'
     * </code>
     *
     * @param     string $requisicionnotaNota The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RequisicionnotaQuery The current query, for fluid interface
     */
    public function filterByRequisicionnotaNota($requisicionnotaNota = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($requisicionnotaNota)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $requisicionnotaNota)) {
                $requisicionnotaNota = str_replace('*', '%', $requisicionnotaNota);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RequisicionnotaPeer::REQUISICIONNOTA_NOTA, $requisicionnotaNota, $comparison);
    }

    /**
     * Filter the query on the requisicionnota_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByRequisicionnotaFecha('2011-03-14'); // WHERE requisicionnota_fecha = '2011-03-14'
     * $query->filterByRequisicionnotaFecha('now'); // WHERE requisicionnota_fecha = '2011-03-14'
     * $query->filterByRequisicionnotaFecha(array('max' => 'yesterday')); // WHERE requisicionnota_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $requisicionnotaFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RequisicionnotaQuery The current query, for fluid interface
     */
    public function filterByRequisicionnotaFecha($requisicionnotaFecha = null, $comparison = null)
    {
        if (is_array($requisicionnotaFecha)) {
            $useMinMax = false;
            if (isset($requisicionnotaFecha['min'])) {
                $this->addUsingAlias(RequisicionnotaPeer::REQUISICIONNOTA_FECHA, $requisicionnotaFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($requisicionnotaFecha['max'])) {
                $this->addUsingAlias(RequisicionnotaPeer::REQUISICIONNOTA_FECHA, $requisicionnotaFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RequisicionnotaPeer::REQUISICIONNOTA_FECHA, $requisicionnotaFecha, $comparison);
    }

    /**
     * Filter the query by a related Requisicion object
     *
     * @param   Requisicion|PropelObjectCollection $requisicion The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RequisicionnotaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRequisicion($requisicion, $comparison = null)
    {
        if ($requisicion instanceof Requisicion) {
            return $this
                ->addUsingAlias(RequisicionnotaPeer::IDREQUISICION, $requisicion->getIdrequisicion(), $comparison);
        } elseif ($requisicion instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RequisicionnotaPeer::IDREQUISICION, $requisicion->toKeyValue('PrimaryKey', 'Idrequisicion'), $comparison);
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
     * @return RequisicionnotaQuery The current query, for fluid interface
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
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RequisicionnotaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(RequisicionnotaPeer::IDUSUARIO, $usuario->getIdusuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RequisicionnotaPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
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
     * @return RequisicionnotaQuery The current query, for fluid interface
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
     * @param   Requisicionnota $requisicionnota Object to remove from the list of results
     *
     * @return RequisicionnotaQuery The current query, for fluid interface
     */
    public function prune($requisicionnota = null)
    {
        if ($requisicionnota) {
            $this->addUsingAlias(RequisicionnotaPeer::IDREQUISICIONNOTA, $requisicionnota->getIdrequisicionnota(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
