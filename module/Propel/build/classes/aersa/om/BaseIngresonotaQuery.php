<?php


/**
 * Base class that represents a query for the 'ingresonota' table.
 *
 *
 *
 * @method IngresonotaQuery orderByIdingresonota($order = Criteria::ASC) Order by the idingresonota column
 * @method IngresonotaQuery orderByIdusuario($order = Criteria::ASC) Order by the idusuario column
 * @method IngresonotaQuery orderByIdingreso($order = Criteria::ASC) Order by the idingreso column
 * @method IngresonotaQuery orderByIngresonotaNota($order = Criteria::ASC) Order by the ingresonota_nota column
 * @method IngresonotaQuery orderByIngresonotaFecha($order = Criteria::ASC) Order by the ingresonota_fecha column
 *
 * @method IngresonotaQuery groupByIdingresonota() Group by the idingresonota column
 * @method IngresonotaQuery groupByIdusuario() Group by the idusuario column
 * @method IngresonotaQuery groupByIdingreso() Group by the idingreso column
 * @method IngresonotaQuery groupByIngresonotaNota() Group by the ingresonota_nota column
 * @method IngresonotaQuery groupByIngresonotaFecha() Group by the ingresonota_fecha column
 *
 * @method IngresonotaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method IngresonotaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method IngresonotaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method IngresonotaQuery leftJoinIngreso($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ingreso relation
 * @method IngresonotaQuery rightJoinIngreso($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ingreso relation
 * @method IngresonotaQuery innerJoinIngreso($relationAlias = null) Adds a INNER JOIN clause to the query using the Ingreso relation
 *
 * @method IngresonotaQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method IngresonotaQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method IngresonotaQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method Ingresonota findOne(PropelPDO $con = null) Return the first Ingresonota matching the query
 * @method Ingresonota findOneOrCreate(PropelPDO $con = null) Return the first Ingresonota matching the query, or a new Ingresonota object populated from the query conditions when no match is found
 *
 * @method Ingresonota findOneByIdusuario(int $idusuario) Return the first Ingresonota filtered by the idusuario column
 * @method Ingresonota findOneByIdingreso(int $idingreso) Return the first Ingresonota filtered by the idingreso column
 * @method Ingresonota findOneByIngresonotaNota(string $ingresonota_nota) Return the first Ingresonota filtered by the ingresonota_nota column
 * @method Ingresonota findOneByIngresonotaFecha(string $ingresonota_fecha) Return the first Ingresonota filtered by the ingresonota_fecha column
 *
 * @method array findByIdingresonota(int $idingresonota) Return Ingresonota objects filtered by the idingresonota column
 * @method array findByIdusuario(int $idusuario) Return Ingresonota objects filtered by the idusuario column
 * @method array findByIdingreso(int $idingreso) Return Ingresonota objects filtered by the idingreso column
 * @method array findByIngresonotaNota(string $ingresonota_nota) Return Ingresonota objects filtered by the ingresonota_nota column
 * @method array findByIngresonotaFecha(string $ingresonota_fecha) Return Ingresonota objects filtered by the ingresonota_fecha column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseIngresonotaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseIngresonotaQuery object.
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
            $modelName = 'Ingresonota';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new IngresonotaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   IngresonotaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return IngresonotaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof IngresonotaQuery) {
            return $criteria;
        }
        $query = new IngresonotaQuery(null, null, $modelAlias);

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
     * @return   Ingresonota|Ingresonota[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = IngresonotaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(IngresonotaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Ingresonota A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdingresonota($key, $con = null)
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
     * @return                 Ingresonota A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idingresonota`, `idusuario`, `idingreso`, `ingresonota_nota`, `ingresonota_fecha` FROM `ingresonota` WHERE `idingresonota` = :p0';
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
            $obj = new Ingresonota();
            $obj->hydrate($row);
            IngresonotaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Ingresonota|Ingresonota[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Ingresonota[]|mixed the list of results, formatted by the current formatter
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
     * @return IngresonotaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(IngresonotaPeer::IDINGRESONOTA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return IngresonotaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(IngresonotaPeer::IDINGRESONOTA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idingresonota column
     *
     * Example usage:
     * <code>
     * $query->filterByIdingresonota(1234); // WHERE idingresonota = 1234
     * $query->filterByIdingresonota(array(12, 34)); // WHERE idingresonota IN (12, 34)
     * $query->filterByIdingresonota(array('min' => 12)); // WHERE idingresonota >= 12
     * $query->filterByIdingresonota(array('max' => 12)); // WHERE idingresonota <= 12
     * </code>
     *
     * @param     mixed $idingresonota The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IngresonotaQuery The current query, for fluid interface
     */
    public function filterByIdingresonota($idingresonota = null, $comparison = null)
    {
        if (is_array($idingresonota)) {
            $useMinMax = false;
            if (isset($idingresonota['min'])) {
                $this->addUsingAlias(IngresonotaPeer::IDINGRESONOTA, $idingresonota['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idingresonota['max'])) {
                $this->addUsingAlias(IngresonotaPeer::IDINGRESONOTA, $idingresonota['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IngresonotaPeer::IDINGRESONOTA, $idingresonota, $comparison);
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
     * @return IngresonotaQuery The current query, for fluid interface
     */
    public function filterByIdusuario($idusuario = null, $comparison = null)
    {
        if (is_array($idusuario)) {
            $useMinMax = false;
            if (isset($idusuario['min'])) {
                $this->addUsingAlias(IngresonotaPeer::IDUSUARIO, $idusuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idusuario['max'])) {
                $this->addUsingAlias(IngresonotaPeer::IDUSUARIO, $idusuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IngresonotaPeer::IDUSUARIO, $idusuario, $comparison);
    }

    /**
     * Filter the query on the idingreso column
     *
     * Example usage:
     * <code>
     * $query->filterByIdingreso(1234); // WHERE idingreso = 1234
     * $query->filterByIdingreso(array(12, 34)); // WHERE idingreso IN (12, 34)
     * $query->filterByIdingreso(array('min' => 12)); // WHERE idingreso >= 12
     * $query->filterByIdingreso(array('max' => 12)); // WHERE idingreso <= 12
     * </code>
     *
     * @see       filterByIngreso()
     *
     * @param     mixed $idingreso The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IngresonotaQuery The current query, for fluid interface
     */
    public function filterByIdingreso($idingreso = null, $comparison = null)
    {
        if (is_array($idingreso)) {
            $useMinMax = false;
            if (isset($idingreso['min'])) {
                $this->addUsingAlias(IngresonotaPeer::IDINGRESO, $idingreso['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idingreso['max'])) {
                $this->addUsingAlias(IngresonotaPeer::IDINGRESO, $idingreso['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IngresonotaPeer::IDINGRESO, $idingreso, $comparison);
    }

    /**
     * Filter the query on the ingresonota_nota column
     *
     * Example usage:
     * <code>
     * $query->filterByIngresonotaNota('fooValue');   // WHERE ingresonota_nota = 'fooValue'
     * $query->filterByIngresonotaNota('%fooValue%'); // WHERE ingresonota_nota LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ingresonotaNota The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IngresonotaQuery The current query, for fluid interface
     */
    public function filterByIngresonotaNota($ingresonotaNota = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ingresonotaNota)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ingresonotaNota)) {
                $ingresonotaNota = str_replace('*', '%', $ingresonotaNota);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IngresonotaPeer::INGRESONOTA_NOTA, $ingresonotaNota, $comparison);
    }

    /**
     * Filter the query on the ingresonota_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByIngresonotaFecha('2011-03-14'); // WHERE ingresonota_fecha = '2011-03-14'
     * $query->filterByIngresonotaFecha('now'); // WHERE ingresonota_fecha = '2011-03-14'
     * $query->filterByIngresonotaFecha(array('max' => 'yesterday')); // WHERE ingresonota_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $ingresonotaFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IngresonotaQuery The current query, for fluid interface
     */
    public function filterByIngresonotaFecha($ingresonotaFecha = null, $comparison = null)
    {
        if (is_array($ingresonotaFecha)) {
            $useMinMax = false;
            if (isset($ingresonotaFecha['min'])) {
                $this->addUsingAlias(IngresonotaPeer::INGRESONOTA_FECHA, $ingresonotaFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ingresonotaFecha['max'])) {
                $this->addUsingAlias(IngresonotaPeer::INGRESONOTA_FECHA, $ingresonotaFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IngresonotaPeer::INGRESONOTA_FECHA, $ingresonotaFecha, $comparison);
    }

    /**
     * Filter the query by a related Ingreso object
     *
     * @param   Ingreso|PropelObjectCollection $ingreso The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 IngresonotaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByIngreso($ingreso, $comparison = null)
    {
        if ($ingreso instanceof Ingreso) {
            return $this
                ->addUsingAlias(IngresonotaPeer::IDINGRESO, $ingreso->getIdingreso(), $comparison);
        } elseif ($ingreso instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(IngresonotaPeer::IDINGRESO, $ingreso->toKeyValue('PrimaryKey', 'Idingreso'), $comparison);
        } else {
            throw new PropelException('filterByIngreso() only accepts arguments of type Ingreso or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Ingreso relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return IngresonotaQuery The current query, for fluid interface
     */
    public function joinIngreso($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Ingreso');

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
            $this->addJoinObject($join, 'Ingreso');
        }

        return $this;
    }

    /**
     * Use the Ingreso relation Ingreso object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   IngresoQuery A secondary query class using the current class as primary query
     */
    public function useIngresoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinIngreso($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ingreso', 'IngresoQuery');
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 IngresonotaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(IngresonotaPeer::IDUSUARIO, $usuario->getIdusuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(IngresonotaPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
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
     * @return IngresonotaQuery The current query, for fluid interface
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
     * @param   Ingresonota $ingresonota Object to remove from the list of results
     *
     * @return IngresonotaQuery The current query, for fluid interface
     */
    public function prune($ingresonota = null)
    {
        if ($ingresonota) {
            $this->addUsingAlias(IngresonotaPeer::IDINGRESONOTA, $ingresonota->getIdingresonota(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
