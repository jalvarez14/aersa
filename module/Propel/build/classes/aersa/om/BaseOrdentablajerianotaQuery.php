<?php


/**
 * Base class that represents a query for the 'ordentablajerianota' table.
 *
 *
 *
 * @method OrdentablajerianotaQuery orderByIdordentablajerianota($order = Criteria::ASC) Order by the idordentablajerianota column
 * @method OrdentablajerianotaQuery orderByIdusuario($order = Criteria::ASC) Order by the idusuario column
 * @method OrdentablajerianotaQuery orderByIdordentablajeria($order = Criteria::ASC) Order by the idordentablajeria column
 * @method OrdentablajerianotaQuery orderByOrdentablajerianotaNota($order = Criteria::ASC) Order by the ordentablajerianota_nota column
 * @method OrdentablajerianotaQuery orderByOrdentablajerianotaFecha($order = Criteria::ASC) Order by the ordentablajerianota_fecha column
 *
 * @method OrdentablajerianotaQuery groupByIdordentablajerianota() Group by the idordentablajerianota column
 * @method OrdentablajerianotaQuery groupByIdusuario() Group by the idusuario column
 * @method OrdentablajerianotaQuery groupByIdordentablajeria() Group by the idordentablajeria column
 * @method OrdentablajerianotaQuery groupByOrdentablajerianotaNota() Group by the ordentablajerianota_nota column
 * @method OrdentablajerianotaQuery groupByOrdentablajerianotaFecha() Group by the ordentablajerianota_fecha column
 *
 * @method OrdentablajerianotaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method OrdentablajerianotaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method OrdentablajerianotaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method OrdentablajerianotaQuery leftJoinOrdentablajeria($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ordentablajeria relation
 * @method OrdentablajerianotaQuery rightJoinOrdentablajeria($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ordentablajeria relation
 * @method OrdentablajerianotaQuery innerJoinOrdentablajeria($relationAlias = null) Adds a INNER JOIN clause to the query using the Ordentablajeria relation
 *
 * @method OrdentablajerianotaQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method OrdentablajerianotaQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method OrdentablajerianotaQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method Ordentablajerianota findOne(PropelPDO $con = null) Return the first Ordentablajerianota matching the query
 * @method Ordentablajerianota findOneOrCreate(PropelPDO $con = null) Return the first Ordentablajerianota matching the query, or a new Ordentablajerianota object populated from the query conditions when no match is found
 *
 * @method Ordentablajerianota findOneByIdusuario(int $idusuario) Return the first Ordentablajerianota filtered by the idusuario column
 * @method Ordentablajerianota findOneByIdordentablajeria(int $idordentablajeria) Return the first Ordentablajerianota filtered by the idordentablajeria column
 * @method Ordentablajerianota findOneByOrdentablajerianotaNota(string $ordentablajerianota_nota) Return the first Ordentablajerianota filtered by the ordentablajerianota_nota column
 * @method Ordentablajerianota findOneByOrdentablajerianotaFecha(string $ordentablajerianota_fecha) Return the first Ordentablajerianota filtered by the ordentablajerianota_fecha column
 *
 * @method array findByIdordentablajerianota(int $idordentablajerianota) Return Ordentablajerianota objects filtered by the idordentablajerianota column
 * @method array findByIdusuario(int $idusuario) Return Ordentablajerianota objects filtered by the idusuario column
 * @method array findByIdordentablajeria(int $idordentablajeria) Return Ordentablajerianota objects filtered by the idordentablajeria column
 * @method array findByOrdentablajerianotaNota(string $ordentablajerianota_nota) Return Ordentablajerianota objects filtered by the ordentablajerianota_nota column
 * @method array findByOrdentablajerianotaFecha(string $ordentablajerianota_fecha) Return Ordentablajerianota objects filtered by the ordentablajerianota_fecha column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseOrdentablajerianotaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseOrdentablajerianotaQuery object.
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
            $modelName = 'Ordentablajerianota';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OrdentablajerianotaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   OrdentablajerianotaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return OrdentablajerianotaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OrdentablajerianotaQuery) {
            return $criteria;
        }
        $query = new OrdentablajerianotaQuery(null, null, $modelAlias);

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
     * @return   Ordentablajerianota|Ordentablajerianota[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = OrdentablajerianotaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(OrdentablajerianotaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Ordentablajerianota A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdordentablajerianota($key, $con = null)
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
     * @return                 Ordentablajerianota A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idordentablajerianota`, `idusuario`, `idordentablajeria`, `ordentablajerianota_nota`, `ordentablajerianota_fecha` FROM `ordentablajerianota` WHERE `idordentablajerianota` = :p0';
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
            $obj = new Ordentablajerianota();
            $obj->hydrate($row);
            OrdentablajerianotaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Ordentablajerianota|Ordentablajerianota[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Ordentablajerianota[]|mixed the list of results, formatted by the current formatter
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
     * @return OrdentablajerianotaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(OrdentablajerianotaPeer::IDORDENTABLAJERIANOTA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return OrdentablajerianotaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(OrdentablajerianotaPeer::IDORDENTABLAJERIANOTA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idordentablajerianota column
     *
     * Example usage:
     * <code>
     * $query->filterByIdordentablajerianota(1234); // WHERE idordentablajerianota = 1234
     * $query->filterByIdordentablajerianota(array(12, 34)); // WHERE idordentablajerianota IN (12, 34)
     * $query->filterByIdordentablajerianota(array('min' => 12)); // WHERE idordentablajerianota >= 12
     * $query->filterByIdordentablajerianota(array('max' => 12)); // WHERE idordentablajerianota <= 12
     * </code>
     *
     * @param     mixed $idordentablajerianota The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajerianotaQuery The current query, for fluid interface
     */
    public function filterByIdordentablajerianota($idordentablajerianota = null, $comparison = null)
    {
        if (is_array($idordentablajerianota)) {
            $useMinMax = false;
            if (isset($idordentablajerianota['min'])) {
                $this->addUsingAlias(OrdentablajerianotaPeer::IDORDENTABLAJERIANOTA, $idordentablajerianota['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idordentablajerianota['max'])) {
                $this->addUsingAlias(OrdentablajerianotaPeer::IDORDENTABLAJERIANOTA, $idordentablajerianota['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajerianotaPeer::IDORDENTABLAJERIANOTA, $idordentablajerianota, $comparison);
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
     * @return OrdentablajerianotaQuery The current query, for fluid interface
     */
    public function filterByIdusuario($idusuario = null, $comparison = null)
    {
        if (is_array($idusuario)) {
            $useMinMax = false;
            if (isset($idusuario['min'])) {
                $this->addUsingAlias(OrdentablajerianotaPeer::IDUSUARIO, $idusuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idusuario['max'])) {
                $this->addUsingAlias(OrdentablajerianotaPeer::IDUSUARIO, $idusuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajerianotaPeer::IDUSUARIO, $idusuario, $comparison);
    }

    /**
     * Filter the query on the idordentablajeria column
     *
     * Example usage:
     * <code>
     * $query->filterByIdordentablajeria(1234); // WHERE idordentablajeria = 1234
     * $query->filterByIdordentablajeria(array(12, 34)); // WHERE idordentablajeria IN (12, 34)
     * $query->filterByIdordentablajeria(array('min' => 12)); // WHERE idordentablajeria >= 12
     * $query->filterByIdordentablajeria(array('max' => 12)); // WHERE idordentablajeria <= 12
     * </code>
     *
     * @see       filterByOrdentablajeria()
     *
     * @param     mixed $idordentablajeria The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajerianotaQuery The current query, for fluid interface
     */
    public function filterByIdordentablajeria($idordentablajeria = null, $comparison = null)
    {
        if (is_array($idordentablajeria)) {
            $useMinMax = false;
            if (isset($idordentablajeria['min'])) {
                $this->addUsingAlias(OrdentablajerianotaPeer::IDORDENTABLAJERIA, $idordentablajeria['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idordentablajeria['max'])) {
                $this->addUsingAlias(OrdentablajerianotaPeer::IDORDENTABLAJERIA, $idordentablajeria['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajerianotaPeer::IDORDENTABLAJERIA, $idordentablajeria, $comparison);
    }

    /**
     * Filter the query on the ordentablajerianota_nota column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdentablajerianotaNota('fooValue');   // WHERE ordentablajerianota_nota = 'fooValue'
     * $query->filterByOrdentablajerianotaNota('%fooValue%'); // WHERE ordentablajerianota_nota LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ordentablajerianotaNota The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajerianotaQuery The current query, for fluid interface
     */
    public function filterByOrdentablajerianotaNota($ordentablajerianotaNota = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ordentablajerianotaNota)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ordentablajerianotaNota)) {
                $ordentablajerianotaNota = str_replace('*', '%', $ordentablajerianotaNota);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdentablajerianotaPeer::ORDENTABLAJERIANOTA_NOTA, $ordentablajerianotaNota, $comparison);
    }

    /**
     * Filter the query on the ordentablajerianota_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdentablajerianotaFecha('2011-03-14'); // WHERE ordentablajerianota_fecha = '2011-03-14'
     * $query->filterByOrdentablajerianotaFecha('now'); // WHERE ordentablajerianota_fecha = '2011-03-14'
     * $query->filterByOrdentablajerianotaFecha(array('max' => 'yesterday')); // WHERE ordentablajerianota_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $ordentablajerianotaFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajerianotaQuery The current query, for fluid interface
     */
    public function filterByOrdentablajerianotaFecha($ordentablajerianotaFecha = null, $comparison = null)
    {
        if (is_array($ordentablajerianotaFecha)) {
            $useMinMax = false;
            if (isset($ordentablajerianotaFecha['min'])) {
                $this->addUsingAlias(OrdentablajerianotaPeer::ORDENTABLAJERIANOTA_FECHA, $ordentablajerianotaFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordentablajerianotaFecha['max'])) {
                $this->addUsingAlias(OrdentablajerianotaPeer::ORDENTABLAJERIANOTA_FECHA, $ordentablajerianotaFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajerianotaPeer::ORDENTABLAJERIANOTA_FECHA, $ordentablajerianotaFecha, $comparison);
    }

    /**
     * Filter the query by a related Ordentablajeria object
     *
     * @param   Ordentablajeria|PropelObjectCollection $ordentablajeria The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OrdentablajerianotaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOrdentablajeria($ordentablajeria, $comparison = null)
    {
        if ($ordentablajeria instanceof Ordentablajeria) {
            return $this
                ->addUsingAlias(OrdentablajerianotaPeer::IDORDENTABLAJERIA, $ordentablajeria->getIdordentablajeria(), $comparison);
        } elseif ($ordentablajeria instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OrdentablajerianotaPeer::IDORDENTABLAJERIA, $ordentablajeria->toKeyValue('PrimaryKey', 'Idordentablajeria'), $comparison);
        } else {
            throw new PropelException('filterByOrdentablajeria() only accepts arguments of type Ordentablajeria or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Ordentablajeria relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OrdentablajerianotaQuery The current query, for fluid interface
     */
    public function joinOrdentablajeria($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Ordentablajeria');

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
            $this->addJoinObject($join, 'Ordentablajeria');
        }

        return $this;
    }

    /**
     * Use the Ordentablajeria relation Ordentablajeria object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OrdentablajeriaQuery A secondary query class using the current class as primary query
     */
    public function useOrdentablajeriaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOrdentablajeria($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ordentablajeria', 'OrdentablajeriaQuery');
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OrdentablajerianotaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(OrdentablajerianotaPeer::IDUSUARIO, $usuario->getIdusuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OrdentablajerianotaPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
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
     * @return OrdentablajerianotaQuery The current query, for fluid interface
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
     * @param   Ordentablajerianota $ordentablajerianota Object to remove from the list of results
     *
     * @return OrdentablajerianotaQuery The current query, for fluid interface
     */
    public function prune($ordentablajerianota = null)
    {
        if ($ordentablajerianota) {
            $this->addUsingAlias(OrdentablajerianotaPeer::IDORDENTABLAJERIANOTA, $ordentablajerianota->getIdordentablajerianota(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
