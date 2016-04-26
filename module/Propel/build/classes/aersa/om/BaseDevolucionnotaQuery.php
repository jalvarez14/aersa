<?php


/**
 * Base class that represents a query for the 'devolucionnota' table.
 *
 *
 *
 * @method DevolucionnotaQuery orderByIddevolucionnota($order = Criteria::ASC) Order by the iddevolucionnota column
 * @method DevolucionnotaQuery orderByIddevolucion($order = Criteria::ASC) Order by the iddevolucion column
 * @method DevolucionnotaQuery orderByIdusuario($order = Criteria::ASC) Order by the idusuario column
 * @method DevolucionnotaQuery orderByDevolucionnotaNota($order = Criteria::ASC) Order by the devolucionnota_nota column
 * @method DevolucionnotaQuery orderByDevolucionnotaFecha($order = Criteria::ASC) Order by the devolucionnota_fecha column
 *
 * @method DevolucionnotaQuery groupByIddevolucionnota() Group by the iddevolucionnota column
 * @method DevolucionnotaQuery groupByIddevolucion() Group by the iddevolucion column
 * @method DevolucionnotaQuery groupByIdusuario() Group by the idusuario column
 * @method DevolucionnotaQuery groupByDevolucionnotaNota() Group by the devolucionnota_nota column
 * @method DevolucionnotaQuery groupByDevolucionnotaFecha() Group by the devolucionnota_fecha column
 *
 * @method DevolucionnotaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method DevolucionnotaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method DevolucionnotaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method DevolucionnotaQuery leftJoinDevolucion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Devolucion relation
 * @method DevolucionnotaQuery rightJoinDevolucion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Devolucion relation
 * @method DevolucionnotaQuery innerJoinDevolucion($relationAlias = null) Adds a INNER JOIN clause to the query using the Devolucion relation
 *
 * @method DevolucionnotaQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method DevolucionnotaQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method DevolucionnotaQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method Devolucionnota findOne(PropelPDO $con = null) Return the first Devolucionnota matching the query
 * @method Devolucionnota findOneOrCreate(PropelPDO $con = null) Return the first Devolucionnota matching the query, or a new Devolucionnota object populated from the query conditions when no match is found
 *
 * @method Devolucionnota findOneByIddevolucion(int $iddevolucion) Return the first Devolucionnota filtered by the iddevolucion column
 * @method Devolucionnota findOneByIdusuario(int $idusuario) Return the first Devolucionnota filtered by the idusuario column
 * @method Devolucionnota findOneByDevolucionnotaNota(string $devolucionnota_nota) Return the first Devolucionnota filtered by the devolucionnota_nota column
 * @method Devolucionnota findOneByDevolucionnotaFecha(string $devolucionnota_fecha) Return the first Devolucionnota filtered by the devolucionnota_fecha column
 *
 * @method array findByIddevolucionnota(int $iddevolucionnota) Return Devolucionnota objects filtered by the iddevolucionnota column
 * @method array findByIddevolucion(int $iddevolucion) Return Devolucionnota objects filtered by the iddevolucion column
 * @method array findByIdusuario(int $idusuario) Return Devolucionnota objects filtered by the idusuario column
 * @method array findByDevolucionnotaNota(string $devolucionnota_nota) Return Devolucionnota objects filtered by the devolucionnota_nota column
 * @method array findByDevolucionnotaFecha(string $devolucionnota_fecha) Return Devolucionnota objects filtered by the devolucionnota_fecha column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseDevolucionnotaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseDevolucionnotaQuery object.
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
            $modelName = 'Devolucionnota';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DevolucionnotaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   DevolucionnotaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return DevolucionnotaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DevolucionnotaQuery) {
            return $criteria;
        }
        $query = new DevolucionnotaQuery(null, null, $modelAlias);

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
     * @return   Devolucionnota|Devolucionnota[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = DevolucionnotaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(DevolucionnotaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Devolucionnota A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIddevolucionnota($key, $con = null)
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
     * @return                 Devolucionnota A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `iddevolucionnota`, `iddevolucion`, `idusuario`, `devolucionnota_nota`, `devolucionnota_fecha` FROM `devolucionnota` WHERE `iddevolucionnota` = :p0';
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
            $obj = new Devolucionnota();
            $obj->hydrate($row);
            DevolucionnotaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Devolucionnota|Devolucionnota[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Devolucionnota[]|mixed the list of results, formatted by the current formatter
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
     * @return DevolucionnotaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(DevolucionnotaPeer::IDDEVOLUCIONNOTA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return DevolucionnotaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(DevolucionnotaPeer::IDDEVOLUCIONNOTA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the iddevolucionnota column
     *
     * Example usage:
     * <code>
     * $query->filterByIddevolucionnota(1234); // WHERE iddevolucionnota = 1234
     * $query->filterByIddevolucionnota(array(12, 34)); // WHERE iddevolucionnota IN (12, 34)
     * $query->filterByIddevolucionnota(array('min' => 12)); // WHERE iddevolucionnota >= 12
     * $query->filterByIddevolucionnota(array('max' => 12)); // WHERE iddevolucionnota <= 12
     * </code>
     *
     * @param     mixed $iddevolucionnota The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DevolucionnotaQuery The current query, for fluid interface
     */
    public function filterByIddevolucionnota($iddevolucionnota = null, $comparison = null)
    {
        if (is_array($iddevolucionnota)) {
            $useMinMax = false;
            if (isset($iddevolucionnota['min'])) {
                $this->addUsingAlias(DevolucionnotaPeer::IDDEVOLUCIONNOTA, $iddevolucionnota['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iddevolucionnota['max'])) {
                $this->addUsingAlias(DevolucionnotaPeer::IDDEVOLUCIONNOTA, $iddevolucionnota['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DevolucionnotaPeer::IDDEVOLUCIONNOTA, $iddevolucionnota, $comparison);
    }

    /**
     * Filter the query on the iddevolucion column
     *
     * Example usage:
     * <code>
     * $query->filterByIddevolucion(1234); // WHERE iddevolucion = 1234
     * $query->filterByIddevolucion(array(12, 34)); // WHERE iddevolucion IN (12, 34)
     * $query->filterByIddevolucion(array('min' => 12)); // WHERE iddevolucion >= 12
     * $query->filterByIddevolucion(array('max' => 12)); // WHERE iddevolucion <= 12
     * </code>
     *
     * @see       filterByDevolucion()
     *
     * @param     mixed $iddevolucion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DevolucionnotaQuery The current query, for fluid interface
     */
    public function filterByIddevolucion($iddevolucion = null, $comparison = null)
    {
        if (is_array($iddevolucion)) {
            $useMinMax = false;
            if (isset($iddevolucion['min'])) {
                $this->addUsingAlias(DevolucionnotaPeer::IDDEVOLUCION, $iddevolucion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iddevolucion['max'])) {
                $this->addUsingAlias(DevolucionnotaPeer::IDDEVOLUCION, $iddevolucion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DevolucionnotaPeer::IDDEVOLUCION, $iddevolucion, $comparison);
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
     * @return DevolucionnotaQuery The current query, for fluid interface
     */
    public function filterByIdusuario($idusuario = null, $comparison = null)
    {
        if (is_array($idusuario)) {
            $useMinMax = false;
            if (isset($idusuario['min'])) {
                $this->addUsingAlias(DevolucionnotaPeer::IDUSUARIO, $idusuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idusuario['max'])) {
                $this->addUsingAlias(DevolucionnotaPeer::IDUSUARIO, $idusuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DevolucionnotaPeer::IDUSUARIO, $idusuario, $comparison);
    }

    /**
     * Filter the query on the devolucionnota_nota column
     *
     * Example usage:
     * <code>
     * $query->filterByDevolucionnotaNota('fooValue');   // WHERE devolucionnota_nota = 'fooValue'
     * $query->filterByDevolucionnotaNota('%fooValue%'); // WHERE devolucionnota_nota LIKE '%fooValue%'
     * </code>
     *
     * @param     string $devolucionnotaNota The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DevolucionnotaQuery The current query, for fluid interface
     */
    public function filterByDevolucionnotaNota($devolucionnotaNota = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($devolucionnotaNota)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $devolucionnotaNota)) {
                $devolucionnotaNota = str_replace('*', '%', $devolucionnotaNota);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DevolucionnotaPeer::DEVOLUCIONNOTA_NOTA, $devolucionnotaNota, $comparison);
    }

    /**
     * Filter the query on the devolucionnota_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByDevolucionnotaFecha('2011-03-14'); // WHERE devolucionnota_fecha = '2011-03-14'
     * $query->filterByDevolucionnotaFecha('now'); // WHERE devolucionnota_fecha = '2011-03-14'
     * $query->filterByDevolucionnotaFecha(array('max' => 'yesterday')); // WHERE devolucionnota_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $devolucionnotaFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DevolucionnotaQuery The current query, for fluid interface
     */
    public function filterByDevolucionnotaFecha($devolucionnotaFecha = null, $comparison = null)
    {
        if (is_array($devolucionnotaFecha)) {
            $useMinMax = false;
            if (isset($devolucionnotaFecha['min'])) {
                $this->addUsingAlias(DevolucionnotaPeer::DEVOLUCIONNOTA_FECHA, $devolucionnotaFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($devolucionnotaFecha['max'])) {
                $this->addUsingAlias(DevolucionnotaPeer::DEVOLUCIONNOTA_FECHA, $devolucionnotaFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DevolucionnotaPeer::DEVOLUCIONNOTA_FECHA, $devolucionnotaFecha, $comparison);
    }

    /**
     * Filter the query by a related Devolucion object
     *
     * @param   Devolucion|PropelObjectCollection $devolucion The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 DevolucionnotaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDevolucion($devolucion, $comparison = null)
    {
        if ($devolucion instanceof Devolucion) {
            return $this
                ->addUsingAlias(DevolucionnotaPeer::IDDEVOLUCION, $devolucion->getIddevolucion(), $comparison);
        } elseif ($devolucion instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DevolucionnotaPeer::IDDEVOLUCION, $devolucion->toKeyValue('PrimaryKey', 'Iddevolucion'), $comparison);
        } else {
            throw new PropelException('filterByDevolucion() only accepts arguments of type Devolucion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Devolucion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return DevolucionnotaQuery The current query, for fluid interface
     */
    public function joinDevolucion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Devolucion');

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
            $this->addJoinObject($join, 'Devolucion');
        }

        return $this;
    }

    /**
     * Use the Devolucion relation Devolucion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DevolucionQuery A secondary query class using the current class as primary query
     */
    public function useDevolucionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDevolucion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Devolucion', 'DevolucionQuery');
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 DevolucionnotaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(DevolucionnotaPeer::IDUSUARIO, $usuario->getIdusuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DevolucionnotaPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
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
     * @return DevolucionnotaQuery The current query, for fluid interface
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
     * @param   Devolucionnota $devolucionnota Object to remove from the list of results
     *
     * @return DevolucionnotaQuery The current query, for fluid interface
     */
    public function prune($devolucionnota = null)
    {
        if ($devolucionnota) {
            $this->addUsingAlias(DevolucionnotaPeer::IDDEVOLUCIONNOTA, $devolucionnota->getIddevolucionnota(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
