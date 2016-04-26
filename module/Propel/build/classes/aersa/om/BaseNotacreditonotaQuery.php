<?php


/**
 * Base class that represents a query for the 'notacreditonota' table.
 *
 *
 *
 * @method NotacreditonotaQuery orderByIdnotacreditonota($order = Criteria::ASC) Order by the idnotacreditonota column
 * @method NotacreditonotaQuery orderByIdnotacredito($order = Criteria::ASC) Order by the idnotacredito column
 * @method NotacreditonotaQuery orderByIdusuario($order = Criteria::ASC) Order by the idusuario column
 * @method NotacreditonotaQuery orderByNotacreditonotaNota($order = Criteria::ASC) Order by the notacreditonota_nota column
 *
 * @method NotacreditonotaQuery groupByIdnotacreditonota() Group by the idnotacreditonota column
 * @method NotacreditonotaQuery groupByIdnotacredito() Group by the idnotacredito column
 * @method NotacreditonotaQuery groupByIdusuario() Group by the idusuario column
 * @method NotacreditonotaQuery groupByNotacreditonotaNota() Group by the notacreditonota_nota column
 *
 * @method NotacreditonotaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method NotacreditonotaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method NotacreditonotaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method NotacreditonotaQuery leftJoinNotacredito($relationAlias = null) Adds a LEFT JOIN clause to the query using the Notacredito relation
 * @method NotacreditonotaQuery rightJoinNotacredito($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Notacredito relation
 * @method NotacreditonotaQuery innerJoinNotacredito($relationAlias = null) Adds a INNER JOIN clause to the query using the Notacredito relation
 *
 * @method NotacreditonotaQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method NotacreditonotaQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method NotacreditonotaQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method Notacreditonota findOne(PropelPDO $con = null) Return the first Notacreditonota matching the query
 * @method Notacreditonota findOneOrCreate(PropelPDO $con = null) Return the first Notacreditonota matching the query, or a new Notacreditonota object populated from the query conditions when no match is found
 *
 * @method Notacreditonota findOneByIdnotacredito(int $idnotacredito) Return the first Notacreditonota filtered by the idnotacredito column
 * @method Notacreditonota findOneByIdusuario(int $idusuario) Return the first Notacreditonota filtered by the idusuario column
 * @method Notacreditonota findOneByNotacreditonotaNota(string $notacreditonota_nota) Return the first Notacreditonota filtered by the notacreditonota_nota column
 *
 * @method array findByIdnotacreditonota(int $idnotacreditonota) Return Notacreditonota objects filtered by the idnotacreditonota column
 * @method array findByIdnotacredito(int $idnotacredito) Return Notacreditonota objects filtered by the idnotacredito column
 * @method array findByIdusuario(int $idusuario) Return Notacreditonota objects filtered by the idusuario column
 * @method array findByNotacreditonotaNota(string $notacreditonota_nota) Return Notacreditonota objects filtered by the notacreditonota_nota column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseNotacreditonotaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseNotacreditonotaQuery object.
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
            $modelName = 'Notacreditonota';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new NotacreditonotaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   NotacreditonotaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return NotacreditonotaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof NotacreditonotaQuery) {
            return $criteria;
        }
        $query = new NotacreditonotaQuery(null, null, $modelAlias);

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
     * @return   Notacreditonota|Notacreditonota[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = NotacreditonotaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(NotacreditonotaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Notacreditonota A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdnotacreditonota($key, $con = null)
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
     * @return                 Notacreditonota A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idnotacreditonota`, `idnotacredito`, `idusuario`, `notacreditonota_nota` FROM `notacreditonota` WHERE `idnotacreditonota` = :p0';
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
            $obj = new Notacreditonota();
            $obj->hydrate($row);
            NotacreditonotaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Notacreditonota|Notacreditonota[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Notacreditonota[]|mixed the list of results, formatted by the current formatter
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
     * @return NotacreditonotaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(NotacreditonotaPeer::IDNOTACREDITONOTA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return NotacreditonotaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(NotacreditonotaPeer::IDNOTACREDITONOTA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idnotacreditonota column
     *
     * Example usage:
     * <code>
     * $query->filterByIdnotacreditonota(1234); // WHERE idnotacreditonota = 1234
     * $query->filterByIdnotacreditonota(array(12, 34)); // WHERE idnotacreditonota IN (12, 34)
     * $query->filterByIdnotacreditonota(array('min' => 12)); // WHERE idnotacreditonota >= 12
     * $query->filterByIdnotacreditonota(array('max' => 12)); // WHERE idnotacreditonota <= 12
     * </code>
     *
     * @param     mixed $idnotacreditonota The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotacreditonotaQuery The current query, for fluid interface
     */
    public function filterByIdnotacreditonota($idnotacreditonota = null, $comparison = null)
    {
        if (is_array($idnotacreditonota)) {
            $useMinMax = false;
            if (isset($idnotacreditonota['min'])) {
                $this->addUsingAlias(NotacreditonotaPeer::IDNOTACREDITONOTA, $idnotacreditonota['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idnotacreditonota['max'])) {
                $this->addUsingAlias(NotacreditonotaPeer::IDNOTACREDITONOTA, $idnotacreditonota['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NotacreditonotaPeer::IDNOTACREDITONOTA, $idnotacreditonota, $comparison);
    }

    /**
     * Filter the query on the idnotacredito column
     *
     * Example usage:
     * <code>
     * $query->filterByIdnotacredito(1234); // WHERE idnotacredito = 1234
     * $query->filterByIdnotacredito(array(12, 34)); // WHERE idnotacredito IN (12, 34)
     * $query->filterByIdnotacredito(array('min' => 12)); // WHERE idnotacredito >= 12
     * $query->filterByIdnotacredito(array('max' => 12)); // WHERE idnotacredito <= 12
     * </code>
     *
     * @see       filterByNotacredito()
     *
     * @param     mixed $idnotacredito The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotacreditonotaQuery The current query, for fluid interface
     */
    public function filterByIdnotacredito($idnotacredito = null, $comparison = null)
    {
        if (is_array($idnotacredito)) {
            $useMinMax = false;
            if (isset($idnotacredito['min'])) {
                $this->addUsingAlias(NotacreditonotaPeer::IDNOTACREDITO, $idnotacredito['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idnotacredito['max'])) {
                $this->addUsingAlias(NotacreditonotaPeer::IDNOTACREDITO, $idnotacredito['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NotacreditonotaPeer::IDNOTACREDITO, $idnotacredito, $comparison);
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
     * @return NotacreditonotaQuery The current query, for fluid interface
     */
    public function filterByIdusuario($idusuario = null, $comparison = null)
    {
        if (is_array($idusuario)) {
            $useMinMax = false;
            if (isset($idusuario['min'])) {
                $this->addUsingAlias(NotacreditonotaPeer::IDUSUARIO, $idusuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idusuario['max'])) {
                $this->addUsingAlias(NotacreditonotaPeer::IDUSUARIO, $idusuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NotacreditonotaPeer::IDUSUARIO, $idusuario, $comparison);
    }

    /**
     * Filter the query on the notacreditonota_nota column
     *
     * Example usage:
     * <code>
     * $query->filterByNotacreditonotaNota('fooValue');   // WHERE notacreditonota_nota = 'fooValue'
     * $query->filterByNotacreditonotaNota('%fooValue%'); // WHERE notacreditonota_nota LIKE '%fooValue%'
     * </code>
     *
     * @param     string $notacreditonotaNota The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotacreditonotaQuery The current query, for fluid interface
     */
    public function filterByNotacreditonotaNota($notacreditonotaNota = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($notacreditonotaNota)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $notacreditonotaNota)) {
                $notacreditonotaNota = str_replace('*', '%', $notacreditonotaNota);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(NotacreditonotaPeer::NOTACREDITONOTA_NOTA, $notacreditonotaNota, $comparison);
    }

    /**
     * Filter the query by a related Notacredito object
     *
     * @param   Notacredito|PropelObjectCollection $notacredito The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 NotacreditonotaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByNotacredito($notacredito, $comparison = null)
    {
        if ($notacredito instanceof Notacredito) {
            return $this
                ->addUsingAlias(NotacreditonotaPeer::IDNOTACREDITO, $notacredito->getIdnotacredito(), $comparison);
        } elseif ($notacredito instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(NotacreditonotaPeer::IDNOTACREDITO, $notacredito->toKeyValue('PrimaryKey', 'Idnotacredito'), $comparison);
        } else {
            throw new PropelException('filterByNotacredito() only accepts arguments of type Notacredito or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Notacredito relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return NotacreditonotaQuery The current query, for fluid interface
     */
    public function joinNotacredito($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Notacredito');

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
            $this->addJoinObject($join, 'Notacredito');
        }

        return $this;
    }

    /**
     * Use the Notacredito relation Notacredito object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   NotacreditoQuery A secondary query class using the current class as primary query
     */
    public function useNotacreditoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinNotacredito($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Notacredito', 'NotacreditoQuery');
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 NotacreditonotaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(NotacreditonotaPeer::IDUSUARIO, $usuario->getIdusuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(NotacreditonotaPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
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
     * @return NotacreditonotaQuery The current query, for fluid interface
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
     * @param   Notacreditonota $notacreditonota Object to remove from the list of results
     *
     * @return NotacreditonotaQuery The current query, for fluid interface
     */
    public function prune($notacreditonota = null)
    {
        if ($notacreditonota) {
            $this->addUsingAlias(NotacreditonotaPeer::IDNOTACREDITONOTA, $notacreditonota->getIdnotacreditonota(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
