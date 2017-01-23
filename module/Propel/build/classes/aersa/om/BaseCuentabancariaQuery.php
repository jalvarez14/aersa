<?php


/**
 * Base class that represents a query for the 'cuentabancaria' table.
 *
 *
 *
 * @method CuentabancariaQuery orderByIdcuentabancaria($order = Criteria::ASC) Order by the idcuentabancaria column
 * @method CuentabancariaQuery orderByIdempresa($order = Criteria::ASC) Order by the idempresa column
 * @method CuentabancariaQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method CuentabancariaQuery orderByCuentabancariaBanco($order = Criteria::ASC) Order by the cuentabancaria_banco column
 * @method CuentabancariaQuery orderByCuentabancariaNocuenta($order = Criteria::ASC) Order by the cuentabancaria_nocuenta column
 * @method CuentabancariaQuery orderByCuentabancariaBalance($order = Criteria::ASC) Order by the cuentabancaria_balance column
 *
 * @method CuentabancariaQuery groupByIdcuentabancaria() Group by the idcuentabancaria column
 * @method CuentabancariaQuery groupByIdempresa() Group by the idempresa column
 * @method CuentabancariaQuery groupByIdsucursal() Group by the idsucursal column
 * @method CuentabancariaQuery groupByCuentabancariaBanco() Group by the cuentabancaria_banco column
 * @method CuentabancariaQuery groupByCuentabancariaNocuenta() Group by the cuentabancaria_nocuenta column
 * @method CuentabancariaQuery groupByCuentabancariaBalance() Group by the cuentabancaria_balance column
 *
 * @method CuentabancariaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CuentabancariaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CuentabancariaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CuentabancariaQuery leftJoinEmpresa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empresa relation
 * @method CuentabancariaQuery rightJoinEmpresa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empresa relation
 * @method CuentabancariaQuery innerJoinEmpresa($relationAlias = null) Adds a INNER JOIN clause to the query using the Empresa relation
 *
 * @method CuentabancariaQuery leftJoinSucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursal relation
 * @method CuentabancariaQuery rightJoinSucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursal relation
 * @method CuentabancariaQuery innerJoinSucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursal relation
 *
 * @method CuentabancariaQuery leftJoinAbonoproveedordetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Abonoproveedordetalle relation
 * @method CuentabancariaQuery rightJoinAbonoproveedordetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Abonoproveedordetalle relation
 * @method CuentabancariaQuery innerJoinAbonoproveedordetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Abonoproveedordetalle relation
 *
 * @method CuentabancariaQuery leftJoinFlujoefectivo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Flujoefectivo relation
 * @method CuentabancariaQuery rightJoinFlujoefectivo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Flujoefectivo relation
 * @method CuentabancariaQuery innerJoinFlujoefectivo($relationAlias = null) Adds a INNER JOIN clause to the query using the Flujoefectivo relation
 *
 * @method CuentabancariaQuery leftJoinTraspasoRelatedByIdcuentabancariadestino($relationAlias = null) Adds a LEFT JOIN clause to the query using the TraspasoRelatedByIdcuentabancariadestino relation
 * @method CuentabancariaQuery rightJoinTraspasoRelatedByIdcuentabancariadestino($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TraspasoRelatedByIdcuentabancariadestino relation
 * @method CuentabancariaQuery innerJoinTraspasoRelatedByIdcuentabancariadestino($relationAlias = null) Adds a INNER JOIN clause to the query using the TraspasoRelatedByIdcuentabancariadestino relation
 *
 * @method CuentabancariaQuery leftJoinTraspasoRelatedByIdcuentabancariaorigen($relationAlias = null) Adds a LEFT JOIN clause to the query using the TraspasoRelatedByIdcuentabancariaorigen relation
 * @method CuentabancariaQuery rightJoinTraspasoRelatedByIdcuentabancariaorigen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TraspasoRelatedByIdcuentabancariaorigen relation
 * @method CuentabancariaQuery innerJoinTraspasoRelatedByIdcuentabancariaorigen($relationAlias = null) Adds a INNER JOIN clause to the query using the TraspasoRelatedByIdcuentabancariaorigen relation
 *
 * @method Cuentabancaria findOne(PropelPDO $con = null) Return the first Cuentabancaria matching the query
 * @method Cuentabancaria findOneOrCreate(PropelPDO $con = null) Return the first Cuentabancaria matching the query, or a new Cuentabancaria object populated from the query conditions when no match is found
 *
 * @method Cuentabancaria findOneByIdempresa(int $idempresa) Return the first Cuentabancaria filtered by the idempresa column
 * @method Cuentabancaria findOneByIdsucursal(int $idsucursal) Return the first Cuentabancaria filtered by the idsucursal column
 * @method Cuentabancaria findOneByCuentabancariaBanco(string $cuentabancaria_banco) Return the first Cuentabancaria filtered by the cuentabancaria_banco column
 * @method Cuentabancaria findOneByCuentabancariaNocuenta(string $cuentabancaria_nocuenta) Return the first Cuentabancaria filtered by the cuentabancaria_nocuenta column
 * @method Cuentabancaria findOneByCuentabancariaBalance(string $cuentabancaria_balance) Return the first Cuentabancaria filtered by the cuentabancaria_balance column
 *
 * @method array findByIdcuentabancaria(int $idcuentabancaria) Return Cuentabancaria objects filtered by the idcuentabancaria column
 * @method array findByIdempresa(int $idempresa) Return Cuentabancaria objects filtered by the idempresa column
 * @method array findByIdsucursal(int $idsucursal) Return Cuentabancaria objects filtered by the idsucursal column
 * @method array findByCuentabancariaBanco(string $cuentabancaria_banco) Return Cuentabancaria objects filtered by the cuentabancaria_banco column
 * @method array findByCuentabancariaNocuenta(string $cuentabancaria_nocuenta) Return Cuentabancaria objects filtered by the cuentabancaria_nocuenta column
 * @method array findByCuentabancariaBalance(string $cuentabancaria_balance) Return Cuentabancaria objects filtered by the cuentabancaria_balance column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseCuentabancariaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCuentabancariaQuery object.
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
            $modelName = 'Cuentabancaria';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CuentabancariaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CuentabancariaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CuentabancariaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CuentabancariaQuery) {
            return $criteria;
        }
        $query = new CuentabancariaQuery(null, null, $modelAlias);

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
     * @return   Cuentabancaria|Cuentabancaria[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CuentabancariaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CuentabancariaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Cuentabancaria A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdcuentabancaria($key, $con = null)
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
     * @return                 Cuentabancaria A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idcuentabancaria`, `idempresa`, `idsucursal`, `cuentabancaria_banco`, `cuentabancaria_nocuenta`, `cuentabancaria_balance` FROM `cuentabancaria` WHERE `idcuentabancaria` = :p0';
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
            $obj = new Cuentabancaria();
            $obj->hydrate($row);
            CuentabancariaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Cuentabancaria|Cuentabancaria[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Cuentabancaria[]|mixed the list of results, formatted by the current formatter
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
     * @return CuentabancariaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CuentabancariaPeer::IDCUENTABANCARIA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CuentabancariaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CuentabancariaPeer::IDCUENTABANCARIA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idcuentabancaria column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcuentabancaria(1234); // WHERE idcuentabancaria = 1234
     * $query->filterByIdcuentabancaria(array(12, 34)); // WHERE idcuentabancaria IN (12, 34)
     * $query->filterByIdcuentabancaria(array('min' => 12)); // WHERE idcuentabancaria >= 12
     * $query->filterByIdcuentabancaria(array('max' => 12)); // WHERE idcuentabancaria <= 12
     * </code>
     *
     * @param     mixed $idcuentabancaria The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentabancariaQuery The current query, for fluid interface
     */
    public function filterByIdcuentabancaria($idcuentabancaria = null, $comparison = null)
    {
        if (is_array($idcuentabancaria)) {
            $useMinMax = false;
            if (isset($idcuentabancaria['min'])) {
                $this->addUsingAlias(CuentabancariaPeer::IDCUENTABANCARIA, $idcuentabancaria['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcuentabancaria['max'])) {
                $this->addUsingAlias(CuentabancariaPeer::IDCUENTABANCARIA, $idcuentabancaria['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CuentabancariaPeer::IDCUENTABANCARIA, $idcuentabancaria, $comparison);
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
     * @return CuentabancariaQuery The current query, for fluid interface
     */
    public function filterByIdempresa($idempresa = null, $comparison = null)
    {
        if (is_array($idempresa)) {
            $useMinMax = false;
            if (isset($idempresa['min'])) {
                $this->addUsingAlias(CuentabancariaPeer::IDEMPRESA, $idempresa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempresa['max'])) {
                $this->addUsingAlias(CuentabancariaPeer::IDEMPRESA, $idempresa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CuentabancariaPeer::IDEMPRESA, $idempresa, $comparison);
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
     * @see       filterBySucursal()
     *
     * @param     mixed $idsucursal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentabancariaQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(CuentabancariaPeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(CuentabancariaPeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CuentabancariaPeer::IDSUCURSAL, $idsucursal, $comparison);
    }

    /**
     * Filter the query on the cuentabancaria_banco column
     *
     * Example usage:
     * <code>
     * $query->filterByCuentabancariaBanco('fooValue');   // WHERE cuentabancaria_banco = 'fooValue'
     * $query->filterByCuentabancariaBanco('%fooValue%'); // WHERE cuentabancaria_banco LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cuentabancariaBanco The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentabancariaQuery The current query, for fluid interface
     */
    public function filterByCuentabancariaBanco($cuentabancariaBanco = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cuentabancariaBanco)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cuentabancariaBanco)) {
                $cuentabancariaBanco = str_replace('*', '%', $cuentabancariaBanco);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CuentabancariaPeer::CUENTABANCARIA_BANCO, $cuentabancariaBanco, $comparison);
    }

    /**
     * Filter the query on the cuentabancaria_nocuenta column
     *
     * Example usage:
     * <code>
     * $query->filterByCuentabancariaNocuenta('fooValue');   // WHERE cuentabancaria_nocuenta = 'fooValue'
     * $query->filterByCuentabancariaNocuenta('%fooValue%'); // WHERE cuentabancaria_nocuenta LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cuentabancariaNocuenta The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentabancariaQuery The current query, for fluid interface
     */
    public function filterByCuentabancariaNocuenta($cuentabancariaNocuenta = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cuentabancariaNocuenta)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cuentabancariaNocuenta)) {
                $cuentabancariaNocuenta = str_replace('*', '%', $cuentabancariaNocuenta);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CuentabancariaPeer::CUENTABANCARIA_NOCUENTA, $cuentabancariaNocuenta, $comparison);
    }

    /**
     * Filter the query on the cuentabancaria_balance column
     *
     * Example usage:
     * <code>
     * $query->filterByCuentabancariaBalance(1234); // WHERE cuentabancaria_balance = 1234
     * $query->filterByCuentabancariaBalance(array(12, 34)); // WHERE cuentabancaria_balance IN (12, 34)
     * $query->filterByCuentabancariaBalance(array('min' => 12)); // WHERE cuentabancaria_balance >= 12
     * $query->filterByCuentabancariaBalance(array('max' => 12)); // WHERE cuentabancaria_balance <= 12
     * </code>
     *
     * @param     mixed $cuentabancariaBalance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentabancariaQuery The current query, for fluid interface
     */
    public function filterByCuentabancariaBalance($cuentabancariaBalance = null, $comparison = null)
    {
        if (is_array($cuentabancariaBalance)) {
            $useMinMax = false;
            if (isset($cuentabancariaBalance['min'])) {
                $this->addUsingAlias(CuentabancariaPeer::CUENTABANCARIA_BALANCE, $cuentabancariaBalance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cuentabancariaBalance['max'])) {
                $this->addUsingAlias(CuentabancariaPeer::CUENTABANCARIA_BALANCE, $cuentabancariaBalance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CuentabancariaPeer::CUENTABANCARIA_BALANCE, $cuentabancariaBalance, $comparison);
    }

    /**
     * Filter the query by a related Empresa object
     *
     * @param   Empresa|PropelObjectCollection $empresa The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CuentabancariaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpresa($empresa, $comparison = null)
    {
        if ($empresa instanceof Empresa) {
            return $this
                ->addUsingAlias(CuentabancariaPeer::IDEMPRESA, $empresa->getIdempresa(), $comparison);
        } elseif ($empresa instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CuentabancariaPeer::IDEMPRESA, $empresa->toKeyValue('PrimaryKey', 'Idempresa'), $comparison);
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
     * @return CuentabancariaQuery The current query, for fluid interface
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
     * Filter the query by a related Sucursal object
     *
     * @param   Sucursal|PropelObjectCollection $sucursal The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CuentabancariaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursal($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(CuentabancariaPeer::IDSUCURSAL, $sucursal->getIdsucursal(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CuentabancariaPeer::IDSUCURSAL, $sucursal->toKeyValue('PrimaryKey', 'Idsucursal'), $comparison);
        } else {
            throw new PropelException('filterBySucursal() only accepts arguments of type Sucursal or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Sucursal relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CuentabancariaQuery The current query, for fluid interface
     */
    public function joinSucursal($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Sucursal');

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
            $this->addJoinObject($join, 'Sucursal');
        }

        return $this;
    }

    /**
     * Use the Sucursal relation Sucursal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SucursalQuery A secondary query class using the current class as primary query
     */
    public function useSucursalQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSucursal($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Sucursal', 'SucursalQuery');
    }

    /**
     * Filter the query by a related Abonoproveedordetalle object
     *
     * @param   Abonoproveedordetalle|PropelObjectCollection $abonoproveedordetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CuentabancariaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAbonoproveedordetalle($abonoproveedordetalle, $comparison = null)
    {
        if ($abonoproveedordetalle instanceof Abonoproveedordetalle) {
            return $this
                ->addUsingAlias(CuentabancariaPeer::IDCUENTABANCARIA, $abonoproveedordetalle->getIdcuentabancaria(), $comparison);
        } elseif ($abonoproveedordetalle instanceof PropelObjectCollection) {
            return $this
                ->useAbonoproveedordetalleQuery()
                ->filterByPrimaryKeys($abonoproveedordetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAbonoproveedordetalle() only accepts arguments of type Abonoproveedordetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Abonoproveedordetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CuentabancariaQuery The current query, for fluid interface
     */
    public function joinAbonoproveedordetalle($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Abonoproveedordetalle');

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
            $this->addJoinObject($join, 'Abonoproveedordetalle');
        }

        return $this;
    }

    /**
     * Use the Abonoproveedordetalle relation Abonoproveedordetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AbonoproveedordetalleQuery A secondary query class using the current class as primary query
     */
    public function useAbonoproveedordetalleQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinAbonoproveedordetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Abonoproveedordetalle', 'AbonoproveedordetalleQuery');
    }

    /**
     * Filter the query by a related Flujoefectivo object
     *
     * @param   Flujoefectivo|PropelObjectCollection $flujoefectivo  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CuentabancariaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFlujoefectivo($flujoefectivo, $comparison = null)
    {
        if ($flujoefectivo instanceof Flujoefectivo) {
            return $this
                ->addUsingAlias(CuentabancariaPeer::IDCUENTABANCARIA, $flujoefectivo->getIdcuentabancaria(), $comparison);
        } elseif ($flujoefectivo instanceof PropelObjectCollection) {
            return $this
                ->useFlujoefectivoQuery()
                ->filterByPrimaryKeys($flujoefectivo->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFlujoefectivo() only accepts arguments of type Flujoefectivo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Flujoefectivo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CuentabancariaQuery The current query, for fluid interface
     */
    public function joinFlujoefectivo($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Flujoefectivo');

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
            $this->addJoinObject($join, 'Flujoefectivo');
        }

        return $this;
    }

    /**
     * Use the Flujoefectivo relation Flujoefectivo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FlujoefectivoQuery A secondary query class using the current class as primary query
     */
    public function useFlujoefectivoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinFlujoefectivo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Flujoefectivo', 'FlujoefectivoQuery');
    }

    /**
     * Filter the query by a related Traspaso object
     *
     * @param   Traspaso|PropelObjectCollection $traspaso  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CuentabancariaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTraspasoRelatedByIdcuentabancariadestino($traspaso, $comparison = null)
    {
        if ($traspaso instanceof Traspaso) {
            return $this
                ->addUsingAlias(CuentabancariaPeer::IDCUENTABANCARIA, $traspaso->getIdcuentabancariadestino(), $comparison);
        } elseif ($traspaso instanceof PropelObjectCollection) {
            return $this
                ->useTraspasoRelatedByIdcuentabancariadestinoQuery()
                ->filterByPrimaryKeys($traspaso->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTraspasoRelatedByIdcuentabancariadestino() only accepts arguments of type Traspaso or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TraspasoRelatedByIdcuentabancariadestino relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CuentabancariaQuery The current query, for fluid interface
     */
    public function joinTraspasoRelatedByIdcuentabancariadestino($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TraspasoRelatedByIdcuentabancariadestino');

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
            $this->addJoinObject($join, 'TraspasoRelatedByIdcuentabancariadestino');
        }

        return $this;
    }

    /**
     * Use the TraspasoRelatedByIdcuentabancariadestino relation Traspaso object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TraspasoQuery A secondary query class using the current class as primary query
     */
    public function useTraspasoRelatedByIdcuentabancariadestinoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTraspasoRelatedByIdcuentabancariadestino($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TraspasoRelatedByIdcuentabancariadestino', 'TraspasoQuery');
    }

    /**
     * Filter the query by a related Traspaso object
     *
     * @param   Traspaso|PropelObjectCollection $traspaso  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CuentabancariaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTraspasoRelatedByIdcuentabancariaorigen($traspaso, $comparison = null)
    {
        if ($traspaso instanceof Traspaso) {
            return $this
                ->addUsingAlias(CuentabancariaPeer::IDCUENTABANCARIA, $traspaso->getIdcuentabancariaorigen(), $comparison);
        } elseif ($traspaso instanceof PropelObjectCollection) {
            return $this
                ->useTraspasoRelatedByIdcuentabancariaorigenQuery()
                ->filterByPrimaryKeys($traspaso->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTraspasoRelatedByIdcuentabancariaorigen() only accepts arguments of type Traspaso or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TraspasoRelatedByIdcuentabancariaorigen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CuentabancariaQuery The current query, for fluid interface
     */
    public function joinTraspasoRelatedByIdcuentabancariaorigen($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TraspasoRelatedByIdcuentabancariaorigen');

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
            $this->addJoinObject($join, 'TraspasoRelatedByIdcuentabancariaorigen');
        }

        return $this;
    }

    /**
     * Use the TraspasoRelatedByIdcuentabancariaorigen relation Traspaso object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TraspasoQuery A secondary query class using the current class as primary query
     */
    public function useTraspasoRelatedByIdcuentabancariaorigenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTraspasoRelatedByIdcuentabancariaorigen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TraspasoRelatedByIdcuentabancariaorigen', 'TraspasoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Cuentabancaria $cuentabancaria Object to remove from the list of results
     *
     * @return CuentabancariaQuery The current query, for fluid interface
     */
    public function prune($cuentabancaria = null)
    {
        if ($cuentabancaria) {
            $this->addUsingAlias(CuentabancariaPeer::IDCUENTABANCARIA, $cuentabancaria->getIdcuentabancaria(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
