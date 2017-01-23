<?php


/**
 * Base class that represents a query for the 'traspaso' table.
 *
 *
 *
 * @method TraspasoQuery orderByIdtraspaso($order = Criteria::ASC) Order by the idtraspaso column
 * @method TraspasoQuery orderByIdcuentabancariaorigen($order = Criteria::ASC) Order by the idcuentabancariaorigen column
 * @method TraspasoQuery orderByIdcuentabancariadestino($order = Criteria::ASC) Order by the idcuentabancariadestino column
 * @method TraspasoQuery orderByTraspasoFecha($order = Criteria::ASC) Order by the traspaso_fecha column
 * @method TraspasoQuery orderByTraspasoCantidad($order = Criteria::ASC) Order by the traspaso_cantidad column
 * @method TraspasoQuery orderByTraspasoNota($order = Criteria::ASC) Order by the traspaso_nota column
 *
 * @method TraspasoQuery groupByIdtraspaso() Group by the idtraspaso column
 * @method TraspasoQuery groupByIdcuentabancariaorigen() Group by the idcuentabancariaorigen column
 * @method TraspasoQuery groupByIdcuentabancariadestino() Group by the idcuentabancariadestino column
 * @method TraspasoQuery groupByTraspasoFecha() Group by the traspaso_fecha column
 * @method TraspasoQuery groupByTraspasoCantidad() Group by the traspaso_cantidad column
 * @method TraspasoQuery groupByTraspasoNota() Group by the traspaso_nota column
 *
 * @method TraspasoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TraspasoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TraspasoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TraspasoQuery leftJoinCuentabancariaRelatedByIdcuentabancariadestino($relationAlias = null) Adds a LEFT JOIN clause to the query using the CuentabancariaRelatedByIdcuentabancariadestino relation
 * @method TraspasoQuery rightJoinCuentabancariaRelatedByIdcuentabancariadestino($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CuentabancariaRelatedByIdcuentabancariadestino relation
 * @method TraspasoQuery innerJoinCuentabancariaRelatedByIdcuentabancariadestino($relationAlias = null) Adds a INNER JOIN clause to the query using the CuentabancariaRelatedByIdcuentabancariadestino relation
 *
 * @method TraspasoQuery leftJoinCuentabancariaRelatedByIdcuentabancariaorigen($relationAlias = null) Adds a LEFT JOIN clause to the query using the CuentabancariaRelatedByIdcuentabancariaorigen relation
 * @method TraspasoQuery rightJoinCuentabancariaRelatedByIdcuentabancariaorigen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CuentabancariaRelatedByIdcuentabancariaorigen relation
 * @method TraspasoQuery innerJoinCuentabancariaRelatedByIdcuentabancariaorigen($relationAlias = null) Adds a INNER JOIN clause to the query using the CuentabancariaRelatedByIdcuentabancariaorigen relation
 *
 * @method Traspaso findOne(PropelPDO $con = null) Return the first Traspaso matching the query
 * @method Traspaso findOneOrCreate(PropelPDO $con = null) Return the first Traspaso matching the query, or a new Traspaso object populated from the query conditions when no match is found
 *
 * @method Traspaso findOneByIdcuentabancariaorigen(int $idcuentabancariaorigen) Return the first Traspaso filtered by the idcuentabancariaorigen column
 * @method Traspaso findOneByIdcuentabancariadestino(int $idcuentabancariadestino) Return the first Traspaso filtered by the idcuentabancariadestino column
 * @method Traspaso findOneByTraspasoFecha(string $traspaso_fecha) Return the first Traspaso filtered by the traspaso_fecha column
 * @method Traspaso findOneByTraspasoCantidad(string $traspaso_cantidad) Return the first Traspaso filtered by the traspaso_cantidad column
 * @method Traspaso findOneByTraspasoNota(string $traspaso_nota) Return the first Traspaso filtered by the traspaso_nota column
 *
 * @method array findByIdtraspaso(int $idtraspaso) Return Traspaso objects filtered by the idtraspaso column
 * @method array findByIdcuentabancariaorigen(int $idcuentabancariaorigen) Return Traspaso objects filtered by the idcuentabancariaorigen column
 * @method array findByIdcuentabancariadestino(int $idcuentabancariadestino) Return Traspaso objects filtered by the idcuentabancariadestino column
 * @method array findByTraspasoFecha(string $traspaso_fecha) Return Traspaso objects filtered by the traspaso_fecha column
 * @method array findByTraspasoCantidad(string $traspaso_cantidad) Return Traspaso objects filtered by the traspaso_cantidad column
 * @method array findByTraspasoNota(string $traspaso_nota) Return Traspaso objects filtered by the traspaso_nota column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseTraspasoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTraspasoQuery object.
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
            $modelName = 'Traspaso';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TraspasoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TraspasoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TraspasoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TraspasoQuery) {
            return $criteria;
        }
        $query = new TraspasoQuery(null, null, $modelAlias);

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
     * @return   Traspaso|Traspaso[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TraspasoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TraspasoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Traspaso A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdtraspaso($key, $con = null)
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
     * @return                 Traspaso A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idtraspaso`, `idcuentabancariaorigen`, `idcuentabancariadestino`, `traspaso_fecha`, `traspaso_cantidad`, `traspaso_nota` FROM `traspaso` WHERE `idtraspaso` = :p0';
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
            $obj = new Traspaso();
            $obj->hydrate($row);
            TraspasoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Traspaso|Traspaso[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Traspaso[]|mixed the list of results, formatted by the current formatter
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
     * @return TraspasoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TraspasoPeer::IDTRASPASO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TraspasoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TraspasoPeer::IDTRASPASO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idtraspaso column
     *
     * Example usage:
     * <code>
     * $query->filterByIdtraspaso(1234); // WHERE idtraspaso = 1234
     * $query->filterByIdtraspaso(array(12, 34)); // WHERE idtraspaso IN (12, 34)
     * $query->filterByIdtraspaso(array('min' => 12)); // WHERE idtraspaso >= 12
     * $query->filterByIdtraspaso(array('max' => 12)); // WHERE idtraspaso <= 12
     * </code>
     *
     * @param     mixed $idtraspaso The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TraspasoQuery The current query, for fluid interface
     */
    public function filterByIdtraspaso($idtraspaso = null, $comparison = null)
    {
        if (is_array($idtraspaso)) {
            $useMinMax = false;
            if (isset($idtraspaso['min'])) {
                $this->addUsingAlias(TraspasoPeer::IDTRASPASO, $idtraspaso['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idtraspaso['max'])) {
                $this->addUsingAlias(TraspasoPeer::IDTRASPASO, $idtraspaso['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TraspasoPeer::IDTRASPASO, $idtraspaso, $comparison);
    }

    /**
     * Filter the query on the idcuentabancariaorigen column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcuentabancariaorigen(1234); // WHERE idcuentabancariaorigen = 1234
     * $query->filterByIdcuentabancariaorigen(array(12, 34)); // WHERE idcuentabancariaorigen IN (12, 34)
     * $query->filterByIdcuentabancariaorigen(array('min' => 12)); // WHERE idcuentabancariaorigen >= 12
     * $query->filterByIdcuentabancariaorigen(array('max' => 12)); // WHERE idcuentabancariaorigen <= 12
     * </code>
     *
     * @see       filterByCuentabancariaRelatedByIdcuentabancariaorigen()
     *
     * @param     mixed $idcuentabancariaorigen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TraspasoQuery The current query, for fluid interface
     */
    public function filterByIdcuentabancariaorigen($idcuentabancariaorigen = null, $comparison = null)
    {
        if (is_array($idcuentabancariaorigen)) {
            $useMinMax = false;
            if (isset($idcuentabancariaorigen['min'])) {
                $this->addUsingAlias(TraspasoPeer::IDCUENTABANCARIAORIGEN, $idcuentabancariaorigen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcuentabancariaorigen['max'])) {
                $this->addUsingAlias(TraspasoPeer::IDCUENTABANCARIAORIGEN, $idcuentabancariaorigen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TraspasoPeer::IDCUENTABANCARIAORIGEN, $idcuentabancariaorigen, $comparison);
    }

    /**
     * Filter the query on the idcuentabancariadestino column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcuentabancariadestino(1234); // WHERE idcuentabancariadestino = 1234
     * $query->filterByIdcuentabancariadestino(array(12, 34)); // WHERE idcuentabancariadestino IN (12, 34)
     * $query->filterByIdcuentabancariadestino(array('min' => 12)); // WHERE idcuentabancariadestino >= 12
     * $query->filterByIdcuentabancariadestino(array('max' => 12)); // WHERE idcuentabancariadestino <= 12
     * </code>
     *
     * @see       filterByCuentabancariaRelatedByIdcuentabancariadestino()
     *
     * @param     mixed $idcuentabancariadestino The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TraspasoQuery The current query, for fluid interface
     */
    public function filterByIdcuentabancariadestino($idcuentabancariadestino = null, $comparison = null)
    {
        if (is_array($idcuentabancariadestino)) {
            $useMinMax = false;
            if (isset($idcuentabancariadestino['min'])) {
                $this->addUsingAlias(TraspasoPeer::IDCUENTABANCARIADESTINO, $idcuentabancariadestino['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcuentabancariadestino['max'])) {
                $this->addUsingAlias(TraspasoPeer::IDCUENTABANCARIADESTINO, $idcuentabancariadestino['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TraspasoPeer::IDCUENTABANCARIADESTINO, $idcuentabancariadestino, $comparison);
    }

    /**
     * Filter the query on the traspaso_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByTraspasoFecha('2011-03-14'); // WHERE traspaso_fecha = '2011-03-14'
     * $query->filterByTraspasoFecha('now'); // WHERE traspaso_fecha = '2011-03-14'
     * $query->filterByTraspasoFecha(array('max' => 'yesterday')); // WHERE traspaso_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $traspasoFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TraspasoQuery The current query, for fluid interface
     */
    public function filterByTraspasoFecha($traspasoFecha = null, $comparison = null)
    {
        if (is_array($traspasoFecha)) {
            $useMinMax = false;
            if (isset($traspasoFecha['min'])) {
                $this->addUsingAlias(TraspasoPeer::TRASPASO_FECHA, $traspasoFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($traspasoFecha['max'])) {
                $this->addUsingAlias(TraspasoPeer::TRASPASO_FECHA, $traspasoFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TraspasoPeer::TRASPASO_FECHA, $traspasoFecha, $comparison);
    }

    /**
     * Filter the query on the traspaso_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByTraspasoCantidad(1234); // WHERE traspaso_cantidad = 1234
     * $query->filterByTraspasoCantidad(array(12, 34)); // WHERE traspaso_cantidad IN (12, 34)
     * $query->filterByTraspasoCantidad(array('min' => 12)); // WHERE traspaso_cantidad >= 12
     * $query->filterByTraspasoCantidad(array('max' => 12)); // WHERE traspaso_cantidad <= 12
     * </code>
     *
     * @param     mixed $traspasoCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TraspasoQuery The current query, for fluid interface
     */
    public function filterByTraspasoCantidad($traspasoCantidad = null, $comparison = null)
    {
        if (is_array($traspasoCantidad)) {
            $useMinMax = false;
            if (isset($traspasoCantidad['min'])) {
                $this->addUsingAlias(TraspasoPeer::TRASPASO_CANTIDAD, $traspasoCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($traspasoCantidad['max'])) {
                $this->addUsingAlias(TraspasoPeer::TRASPASO_CANTIDAD, $traspasoCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TraspasoPeer::TRASPASO_CANTIDAD, $traspasoCantidad, $comparison);
    }

    /**
     * Filter the query on the traspaso_nota column
     *
     * Example usage:
     * <code>
     * $query->filterByTraspasoNota('fooValue');   // WHERE traspaso_nota = 'fooValue'
     * $query->filterByTraspasoNota('%fooValue%'); // WHERE traspaso_nota LIKE '%fooValue%'
     * </code>
     *
     * @param     string $traspasoNota The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TraspasoQuery The current query, for fluid interface
     */
    public function filterByTraspasoNota($traspasoNota = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($traspasoNota)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $traspasoNota)) {
                $traspasoNota = str_replace('*', '%', $traspasoNota);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TraspasoPeer::TRASPASO_NOTA, $traspasoNota, $comparison);
    }

    /**
     * Filter the query by a related Cuentabancaria object
     *
     * @param   Cuentabancaria|PropelObjectCollection $cuentabancaria The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TraspasoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCuentabancariaRelatedByIdcuentabancariadestino($cuentabancaria, $comparison = null)
    {
        if ($cuentabancaria instanceof Cuentabancaria) {
            return $this
                ->addUsingAlias(TraspasoPeer::IDCUENTABANCARIADESTINO, $cuentabancaria->getIdcuentabancaria(), $comparison);
        } elseif ($cuentabancaria instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TraspasoPeer::IDCUENTABANCARIADESTINO, $cuentabancaria->toKeyValue('PrimaryKey', 'Idcuentabancaria'), $comparison);
        } else {
            throw new PropelException('filterByCuentabancariaRelatedByIdcuentabancariadestino() only accepts arguments of type Cuentabancaria or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CuentabancariaRelatedByIdcuentabancariadestino relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TraspasoQuery The current query, for fluid interface
     */
    public function joinCuentabancariaRelatedByIdcuentabancariadestino($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CuentabancariaRelatedByIdcuentabancariadestino');

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
            $this->addJoinObject($join, 'CuentabancariaRelatedByIdcuentabancariadestino');
        }

        return $this;
    }

    /**
     * Use the CuentabancariaRelatedByIdcuentabancariadestino relation Cuentabancaria object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CuentabancariaQuery A secondary query class using the current class as primary query
     */
    public function useCuentabancariaRelatedByIdcuentabancariadestinoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCuentabancariaRelatedByIdcuentabancariadestino($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CuentabancariaRelatedByIdcuentabancariadestino', 'CuentabancariaQuery');
    }

    /**
     * Filter the query by a related Cuentabancaria object
     *
     * @param   Cuentabancaria|PropelObjectCollection $cuentabancaria The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TraspasoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCuentabancariaRelatedByIdcuentabancariaorigen($cuentabancaria, $comparison = null)
    {
        if ($cuentabancaria instanceof Cuentabancaria) {
            return $this
                ->addUsingAlias(TraspasoPeer::IDCUENTABANCARIAORIGEN, $cuentabancaria->getIdcuentabancaria(), $comparison);
        } elseif ($cuentabancaria instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TraspasoPeer::IDCUENTABANCARIAORIGEN, $cuentabancaria->toKeyValue('PrimaryKey', 'Idcuentabancaria'), $comparison);
        } else {
            throw new PropelException('filterByCuentabancariaRelatedByIdcuentabancariaorigen() only accepts arguments of type Cuentabancaria or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CuentabancariaRelatedByIdcuentabancariaorigen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TraspasoQuery The current query, for fluid interface
     */
    public function joinCuentabancariaRelatedByIdcuentabancariaorigen($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CuentabancariaRelatedByIdcuentabancariaorigen');

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
            $this->addJoinObject($join, 'CuentabancariaRelatedByIdcuentabancariaorigen');
        }

        return $this;
    }

    /**
     * Use the CuentabancariaRelatedByIdcuentabancariaorigen relation Cuentabancaria object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CuentabancariaQuery A secondary query class using the current class as primary query
     */
    public function useCuentabancariaRelatedByIdcuentabancariaorigenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCuentabancariaRelatedByIdcuentabancariaorigen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CuentabancariaRelatedByIdcuentabancariaorigen', 'CuentabancariaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Traspaso $traspaso Object to remove from the list of results
     *
     * @return TraspasoQuery The current query, for fluid interface
     */
    public function prune($traspaso = null)
    {
        if ($traspaso) {
            $this->addUsingAlias(TraspasoPeer::IDTRASPASO, $traspaso->getIdtraspaso(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
