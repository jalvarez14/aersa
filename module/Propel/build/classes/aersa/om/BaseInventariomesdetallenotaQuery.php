<?php


/**
 * Base class that represents a query for the 'inventariomesdetallenota' table.
 *
 *
 *
 * @method InventariomesdetallenotaQuery orderByIdinventariomesdetallenota($order = Criteria::ASC) Order by the idinventariomesdetallenota column
 * @method InventariomesdetallenotaQuery orderByIdusuario($order = Criteria::ASC) Order by the idusuario column
 * @method InventariomesdetallenotaQuery orderByIdinventariomesdetalle($order = Criteria::ASC) Order by the idinventariomesdetalle column
 * @method InventariomesdetallenotaQuery orderByInventariomesdetallenotaNota($order = Criteria::ASC) Order by the inventariomesdetallenota_nota column
 * @method InventariomesdetallenotaQuery orderByInventariomesdetallenotaFecha($order = Criteria::ASC) Order by the inventariomesdetallenota_fecha column
 *
 * @method InventariomesdetallenotaQuery groupByIdinventariomesdetallenota() Group by the idinventariomesdetallenota column
 * @method InventariomesdetallenotaQuery groupByIdusuario() Group by the idusuario column
 * @method InventariomesdetallenotaQuery groupByIdinventariomesdetalle() Group by the idinventariomesdetalle column
 * @method InventariomesdetallenotaQuery groupByInventariomesdetallenotaNota() Group by the inventariomesdetallenota_nota column
 * @method InventariomesdetallenotaQuery groupByInventariomesdetallenotaFecha() Group by the inventariomesdetallenota_fecha column
 *
 * @method InventariomesdetallenotaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method InventariomesdetallenotaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method InventariomesdetallenotaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method InventariomesdetallenotaQuery leftJoinInventariomesdetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Inventariomesdetalle relation
 * @method InventariomesdetallenotaQuery rightJoinInventariomesdetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Inventariomesdetalle relation
 * @method InventariomesdetallenotaQuery innerJoinInventariomesdetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Inventariomesdetalle relation
 *
 * @method InventariomesdetallenotaQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method InventariomesdetallenotaQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method InventariomesdetallenotaQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method Inventariomesdetallenota findOne(PropelPDO $con = null) Return the first Inventariomesdetallenota matching the query
 * @method Inventariomesdetallenota findOneOrCreate(PropelPDO $con = null) Return the first Inventariomesdetallenota matching the query, or a new Inventariomesdetallenota object populated from the query conditions when no match is found
 *
 * @method Inventariomesdetallenota findOneByIdusuario(int $idusuario) Return the first Inventariomesdetallenota filtered by the idusuario column
 * @method Inventariomesdetallenota findOneByIdinventariomesdetalle(int $idinventariomesdetalle) Return the first Inventariomesdetallenota filtered by the idinventariomesdetalle column
 * @method Inventariomesdetallenota findOneByInventariomesdetallenotaNota(string $inventariomesdetallenota_nota) Return the first Inventariomesdetallenota filtered by the inventariomesdetallenota_nota column
 * @method Inventariomesdetallenota findOneByInventariomesdetallenotaFecha(string $inventariomesdetallenota_fecha) Return the first Inventariomesdetallenota filtered by the inventariomesdetallenota_fecha column
 *
 * @method array findByIdinventariomesdetallenota(int $idinventariomesdetallenota) Return Inventariomesdetallenota objects filtered by the idinventariomesdetallenota column
 * @method array findByIdusuario(int $idusuario) Return Inventariomesdetallenota objects filtered by the idusuario column
 * @method array findByIdinventariomesdetalle(int $idinventariomesdetalle) Return Inventariomesdetallenota objects filtered by the idinventariomesdetalle column
 * @method array findByInventariomesdetallenotaNota(string $inventariomesdetallenota_nota) Return Inventariomesdetallenota objects filtered by the inventariomesdetallenota_nota column
 * @method array findByInventariomesdetallenotaFecha(string $inventariomesdetallenota_fecha) Return Inventariomesdetallenota objects filtered by the inventariomesdetallenota_fecha column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseInventariomesdetallenotaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseInventariomesdetallenotaQuery object.
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
            $modelName = 'Inventariomesdetallenota';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new InventariomesdetallenotaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   InventariomesdetallenotaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return InventariomesdetallenotaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof InventariomesdetallenotaQuery) {
            return $criteria;
        }
        $query = new InventariomesdetallenotaQuery(null, null, $modelAlias);

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
     * @return   Inventariomesdetallenota|Inventariomesdetallenota[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = InventariomesdetallenotaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(InventariomesdetallenotaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Inventariomesdetallenota A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdinventariomesdetallenota($key, $con = null)
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
     * @return                 Inventariomesdetallenota A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idinventariomesdetallenota`, `idusuario`, `idinventariomesdetalle`, `inventariomesdetallenota_nota`, `inventariomesdetallenota_fecha` FROM `inventariomesdetallenota` WHERE `idinventariomesdetallenota` = :p0';
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
            $obj = new Inventariomesdetallenota();
            $obj->hydrate($row);
            InventariomesdetallenotaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Inventariomesdetallenota|Inventariomesdetallenota[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Inventariomesdetallenota[]|mixed the list of results, formatted by the current formatter
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
     * @return InventariomesdetallenotaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(InventariomesdetallenotaPeer::IDINVENTARIOMESDETALLENOTA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return InventariomesdetallenotaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(InventariomesdetallenotaPeer::IDINVENTARIOMESDETALLENOTA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idinventariomesdetallenota column
     *
     * Example usage:
     * <code>
     * $query->filterByIdinventariomesdetallenota(1234); // WHERE idinventariomesdetallenota = 1234
     * $query->filterByIdinventariomesdetallenota(array(12, 34)); // WHERE idinventariomesdetallenota IN (12, 34)
     * $query->filterByIdinventariomesdetallenota(array('min' => 12)); // WHERE idinventariomesdetallenota >= 12
     * $query->filterByIdinventariomesdetallenota(array('max' => 12)); // WHERE idinventariomesdetallenota <= 12
     * </code>
     *
     * @param     mixed $idinventariomesdetallenota The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InventariomesdetallenotaQuery The current query, for fluid interface
     */
    public function filterByIdinventariomesdetallenota($idinventariomesdetallenota = null, $comparison = null)
    {
        if (is_array($idinventariomesdetallenota)) {
            $useMinMax = false;
            if (isset($idinventariomesdetallenota['min'])) {
                $this->addUsingAlias(InventariomesdetallenotaPeer::IDINVENTARIOMESDETALLENOTA, $idinventariomesdetallenota['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idinventariomesdetallenota['max'])) {
                $this->addUsingAlias(InventariomesdetallenotaPeer::IDINVENTARIOMESDETALLENOTA, $idinventariomesdetallenota['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesdetallenotaPeer::IDINVENTARIOMESDETALLENOTA, $idinventariomesdetallenota, $comparison);
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
     * @return InventariomesdetallenotaQuery The current query, for fluid interface
     */
    public function filterByIdusuario($idusuario = null, $comparison = null)
    {
        if (is_array($idusuario)) {
            $useMinMax = false;
            if (isset($idusuario['min'])) {
                $this->addUsingAlias(InventariomesdetallenotaPeer::IDUSUARIO, $idusuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idusuario['max'])) {
                $this->addUsingAlias(InventariomesdetallenotaPeer::IDUSUARIO, $idusuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesdetallenotaPeer::IDUSUARIO, $idusuario, $comparison);
    }

    /**
     * Filter the query on the idinventariomesdetalle column
     *
     * Example usage:
     * <code>
     * $query->filterByIdinventariomesdetalle(1234); // WHERE idinventariomesdetalle = 1234
     * $query->filterByIdinventariomesdetalle(array(12, 34)); // WHERE idinventariomesdetalle IN (12, 34)
     * $query->filterByIdinventariomesdetalle(array('min' => 12)); // WHERE idinventariomesdetalle >= 12
     * $query->filterByIdinventariomesdetalle(array('max' => 12)); // WHERE idinventariomesdetalle <= 12
     * </code>
     *
     * @see       filterByInventariomesdetalle()
     *
     * @param     mixed $idinventariomesdetalle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InventariomesdetallenotaQuery The current query, for fluid interface
     */
    public function filterByIdinventariomesdetalle($idinventariomesdetalle = null, $comparison = null)
    {
        if (is_array($idinventariomesdetalle)) {
            $useMinMax = false;
            if (isset($idinventariomesdetalle['min'])) {
                $this->addUsingAlias(InventariomesdetallenotaPeer::IDINVENTARIOMESDETALLE, $idinventariomesdetalle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idinventariomesdetalle['max'])) {
                $this->addUsingAlias(InventariomesdetallenotaPeer::IDINVENTARIOMESDETALLE, $idinventariomesdetalle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesdetallenotaPeer::IDINVENTARIOMESDETALLE, $idinventariomesdetalle, $comparison);
    }

    /**
     * Filter the query on the inventariomesdetallenota_nota column
     *
     * Example usage:
     * <code>
     * $query->filterByInventariomesdetallenotaNota('fooValue');   // WHERE inventariomesdetallenota_nota = 'fooValue'
     * $query->filterByInventariomesdetallenotaNota('%fooValue%'); // WHERE inventariomesdetallenota_nota LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inventariomesdetallenotaNota The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InventariomesdetallenotaQuery The current query, for fluid interface
     */
    public function filterByInventariomesdetallenotaNota($inventariomesdetallenotaNota = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inventariomesdetallenotaNota)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $inventariomesdetallenotaNota)) {
                $inventariomesdetallenotaNota = str_replace('*', '%', $inventariomesdetallenotaNota);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(InventariomesdetallenotaPeer::INVENTARIOMESDETALLENOTA_NOTA, $inventariomesdetallenotaNota, $comparison);
    }

    /**
     * Filter the query on the inventariomesdetallenota_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByInventariomesdetallenotaFecha('2011-03-14'); // WHERE inventariomesdetallenota_fecha = '2011-03-14'
     * $query->filterByInventariomesdetallenotaFecha('now'); // WHERE inventariomesdetallenota_fecha = '2011-03-14'
     * $query->filterByInventariomesdetallenotaFecha(array('max' => 'yesterday')); // WHERE inventariomesdetallenota_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $inventariomesdetallenotaFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InventariomesdetallenotaQuery The current query, for fluid interface
     */
    public function filterByInventariomesdetallenotaFecha($inventariomesdetallenotaFecha = null, $comparison = null)
    {
        if (is_array($inventariomesdetallenotaFecha)) {
            $useMinMax = false;
            if (isset($inventariomesdetallenotaFecha['min'])) {
                $this->addUsingAlias(InventariomesdetallenotaPeer::INVENTARIOMESDETALLENOTA_FECHA, $inventariomesdetallenotaFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inventariomesdetallenotaFecha['max'])) {
                $this->addUsingAlias(InventariomesdetallenotaPeer::INVENTARIOMESDETALLENOTA_FECHA, $inventariomesdetallenotaFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesdetallenotaPeer::INVENTARIOMESDETALLENOTA_FECHA, $inventariomesdetallenotaFecha, $comparison);
    }

    /**
     * Filter the query by a related Inventariomesdetalle object
     *
     * @param   Inventariomesdetalle|PropelObjectCollection $inventariomesdetalle The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 InventariomesdetallenotaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByInventariomesdetalle($inventariomesdetalle, $comparison = null)
    {
        if ($inventariomesdetalle instanceof Inventariomesdetalle) {
            return $this
                ->addUsingAlias(InventariomesdetallenotaPeer::IDINVENTARIOMESDETALLE, $inventariomesdetalle->getIdinventariomesdetalle(), $comparison);
        } elseif ($inventariomesdetalle instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InventariomesdetallenotaPeer::IDINVENTARIOMESDETALLE, $inventariomesdetalle->toKeyValue('PrimaryKey', 'Idinventariomesdetalle'), $comparison);
        } else {
            throw new PropelException('filterByInventariomesdetalle() only accepts arguments of type Inventariomesdetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Inventariomesdetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return InventariomesdetallenotaQuery The current query, for fluid interface
     */
    public function joinInventariomesdetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Inventariomesdetalle');

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
            $this->addJoinObject($join, 'Inventariomesdetalle');
        }

        return $this;
    }

    /**
     * Use the Inventariomesdetalle relation Inventariomesdetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   InventariomesdetalleQuery A secondary query class using the current class as primary query
     */
    public function useInventariomesdetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInventariomesdetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Inventariomesdetalle', 'InventariomesdetalleQuery');
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 InventariomesdetallenotaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(InventariomesdetallenotaPeer::IDUSUARIO, $usuario->getIdusuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InventariomesdetallenotaPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
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
     * @return InventariomesdetallenotaQuery The current query, for fluid interface
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
     * @param   Inventariomesdetallenota $inventariomesdetallenota Object to remove from the list of results
     *
     * @return InventariomesdetallenotaQuery The current query, for fluid interface
     */
    public function prune($inventariomesdetallenota = null)
    {
        if ($inventariomesdetallenota) {
            $this->addUsingAlias(InventariomesdetallenotaPeer::IDINVENTARIOMESDETALLENOTA, $inventariomesdetallenota->getIdinventariomesdetallenota(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
