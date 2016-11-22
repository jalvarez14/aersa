<?php


/**
 * Base class that represents a query for the 'ajusteinventarionota' table.
 *
 *
 *
 * @method AjusteinventarionotaQuery orderByIdajusteinventarionota($order = Criteria::ASC) Order by the idajusteinventarionota column
 * @method AjusteinventarionotaQuery orderByIdusuario($order = Criteria::ASC) Order by the idusuario column
 * @method AjusteinventarionotaQuery orderByIdajusteinventario($order = Criteria::ASC) Order by the idajusteinventario column
 * @method AjusteinventarionotaQuery orderByAjusteinventarionotaNota($order = Criteria::ASC) Order by the ajusteinventarionota_nota column
 * @method AjusteinventarionotaQuery orderByAjusteinventarionotaFecha($order = Criteria::ASC) Order by the ajusteinventarionota_fecha column
 *
 * @method AjusteinventarionotaQuery groupByIdajusteinventarionota() Group by the idajusteinventarionota column
 * @method AjusteinventarionotaQuery groupByIdusuario() Group by the idusuario column
 * @method AjusteinventarionotaQuery groupByIdajusteinventario() Group by the idajusteinventario column
 * @method AjusteinventarionotaQuery groupByAjusteinventarionotaNota() Group by the ajusteinventarionota_nota column
 * @method AjusteinventarionotaQuery groupByAjusteinventarionotaFecha() Group by the ajusteinventarionota_fecha column
 *
 * @method AjusteinventarionotaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AjusteinventarionotaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AjusteinventarionotaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method AjusteinventarionotaQuery leftJoinAjusteinventario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ajusteinventario relation
 * @method AjusteinventarionotaQuery rightJoinAjusteinventario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ajusteinventario relation
 * @method AjusteinventarionotaQuery innerJoinAjusteinventario($relationAlias = null) Adds a INNER JOIN clause to the query using the Ajusteinventario relation
 *
 * @method AjusteinventarionotaQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method AjusteinventarionotaQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method AjusteinventarionotaQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method Ajusteinventarionota findOne(PropelPDO $con = null) Return the first Ajusteinventarionota matching the query
 * @method Ajusteinventarionota findOneOrCreate(PropelPDO $con = null) Return the first Ajusteinventarionota matching the query, or a new Ajusteinventarionota object populated from the query conditions when no match is found
 *
 * @method Ajusteinventarionota findOneByIdusuario(int $idusuario) Return the first Ajusteinventarionota filtered by the idusuario column
 * @method Ajusteinventarionota findOneByIdajusteinventario(int $idajusteinventario) Return the first Ajusteinventarionota filtered by the idajusteinventario column
 * @method Ajusteinventarionota findOneByAjusteinventarionotaNota(string $ajusteinventarionota_nota) Return the first Ajusteinventarionota filtered by the ajusteinventarionota_nota column
 * @method Ajusteinventarionota findOneByAjusteinventarionotaFecha(string $ajusteinventarionota_fecha) Return the first Ajusteinventarionota filtered by the ajusteinventarionota_fecha column
 *
 * @method array findByIdajusteinventarionota(int $idajusteinventarionota) Return Ajusteinventarionota objects filtered by the idajusteinventarionota column
 * @method array findByIdusuario(int $idusuario) Return Ajusteinventarionota objects filtered by the idusuario column
 * @method array findByIdajusteinventario(int $idajusteinventario) Return Ajusteinventarionota objects filtered by the idajusteinventario column
 * @method array findByAjusteinventarionotaNota(string $ajusteinventarionota_nota) Return Ajusteinventarionota objects filtered by the ajusteinventarionota_nota column
 * @method array findByAjusteinventarionotaFecha(string $ajusteinventarionota_fecha) Return Ajusteinventarionota objects filtered by the ajusteinventarionota_fecha column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseAjusteinventarionotaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAjusteinventarionotaQuery object.
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
            $modelName = 'Ajusteinventarionota';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AjusteinventarionotaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AjusteinventarionotaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AjusteinventarionotaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AjusteinventarionotaQuery) {
            return $criteria;
        }
        $query = new AjusteinventarionotaQuery(null, null, $modelAlias);

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
     * @return   Ajusteinventarionota|Ajusteinventarionota[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AjusteinventarionotaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AjusteinventarionotaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Ajusteinventarionota A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdajusteinventarionota($key, $con = null)
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
     * @return                 Ajusteinventarionota A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idajusteinventarionota`, `idusuario`, `idajusteinventario`, `ajusteinventarionota_nota`, `ajusteinventarionota_fecha` FROM `ajusteinventarionota` WHERE `idajusteinventarionota` = :p0';
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
            $obj = new Ajusteinventarionota();
            $obj->hydrate($row);
            AjusteinventarionotaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Ajusteinventarionota|Ajusteinventarionota[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Ajusteinventarionota[]|mixed the list of results, formatted by the current formatter
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
     * @return AjusteinventarionotaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AjusteinventarionotaPeer::IDAJUSTEINVENTARIONOTA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AjusteinventarionotaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AjusteinventarionotaPeer::IDAJUSTEINVENTARIONOTA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idajusteinventarionota column
     *
     * Example usage:
     * <code>
     * $query->filterByIdajusteinventarionota(1234); // WHERE idajusteinventarionota = 1234
     * $query->filterByIdajusteinventarionota(array(12, 34)); // WHERE idajusteinventarionota IN (12, 34)
     * $query->filterByIdajusteinventarionota(array('min' => 12)); // WHERE idajusteinventarionota >= 12
     * $query->filterByIdajusteinventarionota(array('max' => 12)); // WHERE idajusteinventarionota <= 12
     * </code>
     *
     * @param     mixed $idajusteinventarionota The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AjusteinventarionotaQuery The current query, for fluid interface
     */
    public function filterByIdajusteinventarionota($idajusteinventarionota = null, $comparison = null)
    {
        if (is_array($idajusteinventarionota)) {
            $useMinMax = false;
            if (isset($idajusteinventarionota['min'])) {
                $this->addUsingAlias(AjusteinventarionotaPeer::IDAJUSTEINVENTARIONOTA, $idajusteinventarionota['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idajusteinventarionota['max'])) {
                $this->addUsingAlias(AjusteinventarionotaPeer::IDAJUSTEINVENTARIONOTA, $idajusteinventarionota['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AjusteinventarionotaPeer::IDAJUSTEINVENTARIONOTA, $idajusteinventarionota, $comparison);
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
     * @return AjusteinventarionotaQuery The current query, for fluid interface
     */
    public function filterByIdusuario($idusuario = null, $comparison = null)
    {
        if (is_array($idusuario)) {
            $useMinMax = false;
            if (isset($idusuario['min'])) {
                $this->addUsingAlias(AjusteinventarionotaPeer::IDUSUARIO, $idusuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idusuario['max'])) {
                $this->addUsingAlias(AjusteinventarionotaPeer::IDUSUARIO, $idusuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AjusteinventarionotaPeer::IDUSUARIO, $idusuario, $comparison);
    }

    /**
     * Filter the query on the idajusteinventario column
     *
     * Example usage:
     * <code>
     * $query->filterByIdajusteinventario(1234); // WHERE idajusteinventario = 1234
     * $query->filterByIdajusteinventario(array(12, 34)); // WHERE idajusteinventario IN (12, 34)
     * $query->filterByIdajusteinventario(array('min' => 12)); // WHERE idajusteinventario >= 12
     * $query->filterByIdajusteinventario(array('max' => 12)); // WHERE idajusteinventario <= 12
     * </code>
     *
     * @see       filterByAjusteinventario()
     *
     * @param     mixed $idajusteinventario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AjusteinventarionotaQuery The current query, for fluid interface
     */
    public function filterByIdajusteinventario($idajusteinventario = null, $comparison = null)
    {
        if (is_array($idajusteinventario)) {
            $useMinMax = false;
            if (isset($idajusteinventario['min'])) {
                $this->addUsingAlias(AjusteinventarionotaPeer::IDAJUSTEINVENTARIO, $idajusteinventario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idajusteinventario['max'])) {
                $this->addUsingAlias(AjusteinventarionotaPeer::IDAJUSTEINVENTARIO, $idajusteinventario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AjusteinventarionotaPeer::IDAJUSTEINVENTARIO, $idajusteinventario, $comparison);
    }

    /**
     * Filter the query on the ajusteinventarionota_nota column
     *
     * Example usage:
     * <code>
     * $query->filterByAjusteinventarionotaNota('fooValue');   // WHERE ajusteinventarionota_nota = 'fooValue'
     * $query->filterByAjusteinventarionotaNota('%fooValue%'); // WHERE ajusteinventarionota_nota LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ajusteinventarionotaNota The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AjusteinventarionotaQuery The current query, for fluid interface
     */
    public function filterByAjusteinventarionotaNota($ajusteinventarionotaNota = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ajusteinventarionotaNota)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ajusteinventarionotaNota)) {
                $ajusteinventarionotaNota = str_replace('*', '%', $ajusteinventarionotaNota);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AjusteinventarionotaPeer::AJUSTEINVENTARIONOTA_NOTA, $ajusteinventarionotaNota, $comparison);
    }

    /**
     * Filter the query on the ajusteinventarionota_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByAjusteinventarionotaFecha('2011-03-14'); // WHERE ajusteinventarionota_fecha = '2011-03-14'
     * $query->filterByAjusteinventarionotaFecha('now'); // WHERE ajusteinventarionota_fecha = '2011-03-14'
     * $query->filterByAjusteinventarionotaFecha(array('max' => 'yesterday')); // WHERE ajusteinventarionota_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $ajusteinventarionotaFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AjusteinventarionotaQuery The current query, for fluid interface
     */
    public function filterByAjusteinventarionotaFecha($ajusteinventarionotaFecha = null, $comparison = null)
    {
        if (is_array($ajusteinventarionotaFecha)) {
            $useMinMax = false;
            if (isset($ajusteinventarionotaFecha['min'])) {
                $this->addUsingAlias(AjusteinventarionotaPeer::AJUSTEINVENTARIONOTA_FECHA, $ajusteinventarionotaFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ajusteinventarionotaFecha['max'])) {
                $this->addUsingAlias(AjusteinventarionotaPeer::AJUSTEINVENTARIONOTA_FECHA, $ajusteinventarionotaFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AjusteinventarionotaPeer::AJUSTEINVENTARIONOTA_FECHA, $ajusteinventarionotaFecha, $comparison);
    }

    /**
     * Filter the query by a related Ajusteinventario object
     *
     * @param   Ajusteinventario|PropelObjectCollection $ajusteinventario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AjusteinventarionotaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAjusteinventario($ajusteinventario, $comparison = null)
    {
        if ($ajusteinventario instanceof Ajusteinventario) {
            return $this
                ->addUsingAlias(AjusteinventarionotaPeer::IDAJUSTEINVENTARIO, $ajusteinventario->getIdajusteinventario(), $comparison);
        } elseif ($ajusteinventario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AjusteinventarionotaPeer::IDAJUSTEINVENTARIO, $ajusteinventario->toKeyValue('PrimaryKey', 'Idajusteinventario'), $comparison);
        } else {
            throw new PropelException('filterByAjusteinventario() only accepts arguments of type Ajusteinventario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Ajusteinventario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AjusteinventarionotaQuery The current query, for fluid interface
     */
    public function joinAjusteinventario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Ajusteinventario');

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
            $this->addJoinObject($join, 'Ajusteinventario');
        }

        return $this;
    }

    /**
     * Use the Ajusteinventario relation Ajusteinventario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AjusteinventarioQuery A secondary query class using the current class as primary query
     */
    public function useAjusteinventarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAjusteinventario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ajusteinventario', 'AjusteinventarioQuery');
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AjusteinventarionotaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(AjusteinventarionotaPeer::IDUSUARIO, $usuario->getIdusuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AjusteinventarionotaPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
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
     * @return AjusteinventarionotaQuery The current query, for fluid interface
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
     * @param   Ajusteinventarionota $ajusteinventarionota Object to remove from the list of results
     *
     * @return AjusteinventarionotaQuery The current query, for fluid interface
     */
    public function prune($ajusteinventarionota = null)
    {
        if ($ajusteinventarionota) {
            $this->addUsingAlias(AjusteinventarionotaPeer::IDAJUSTEINVENTARIONOTA, $ajusteinventarionota->getIdajusteinventarionota(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
