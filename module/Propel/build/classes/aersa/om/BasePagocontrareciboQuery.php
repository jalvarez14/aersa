<?php


/**
 * Base class that represents a query for the 'pagocontrarecibo' table.
 *
 *
 *
 * @method PagocontrareciboQuery orderByIdpagocontrarecibo($order = Criteria::ASC) Order by the idpagocontrarecibo column
 * @method PagocontrareciboQuery orderByPagocontrareciboComprobante($order = Criteria::ASC) Order by the pagocontrarecibo_comprobante column
 * @method PagocontrareciboQuery orderByPagocontrareciboFechapago($order = Criteria::ASC) Order by the pagocontrarecibo_fechapago column
 * @method PagocontrareciboQuery orderByPagocontrareciboCantidad($order = Criteria::ASC) Order by the pagocontrarecibo_cantidad column
 * @method PagocontrareciboQuery orderByIdcontrarecibodetalle($order = Criteria::ASC) Order by the idcontrarecibodetalle column
 * @method PagocontrareciboQuery orderByIdusuario($order = Criteria::ASC) Order by the idusuario column
 *
 * @method PagocontrareciboQuery groupByIdpagocontrarecibo() Group by the idpagocontrarecibo column
 * @method PagocontrareciboQuery groupByPagocontrareciboComprobante() Group by the pagocontrarecibo_comprobante column
 * @method PagocontrareciboQuery groupByPagocontrareciboFechapago() Group by the pagocontrarecibo_fechapago column
 * @method PagocontrareciboQuery groupByPagocontrareciboCantidad() Group by the pagocontrarecibo_cantidad column
 * @method PagocontrareciboQuery groupByIdcontrarecibodetalle() Group by the idcontrarecibodetalle column
 * @method PagocontrareciboQuery groupByIdusuario() Group by the idusuario column
 *
 * @method PagocontrareciboQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PagocontrareciboQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PagocontrareciboQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PagocontrareciboQuery leftJoinContrarecibodetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Contrarecibodetalle relation
 * @method PagocontrareciboQuery rightJoinContrarecibodetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Contrarecibodetalle relation
 * @method PagocontrareciboQuery innerJoinContrarecibodetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Contrarecibodetalle relation
 *
 * @method PagocontrareciboQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method PagocontrareciboQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method PagocontrareciboQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method Pagocontrarecibo findOne(PropelPDO $con = null) Return the first Pagocontrarecibo matching the query
 * @method Pagocontrarecibo findOneOrCreate(PropelPDO $con = null) Return the first Pagocontrarecibo matching the query, or a new Pagocontrarecibo object populated from the query conditions when no match is found
 *
 * @method Pagocontrarecibo findOneByPagocontrareciboComprobante(string $pagocontrarecibo_comprobante) Return the first Pagocontrarecibo filtered by the pagocontrarecibo_comprobante column
 * @method Pagocontrarecibo findOneByPagocontrareciboFechapago(string $pagocontrarecibo_fechapago) Return the first Pagocontrarecibo filtered by the pagocontrarecibo_fechapago column
 * @method Pagocontrarecibo findOneByPagocontrareciboCantidad(string $pagocontrarecibo_cantidad) Return the first Pagocontrarecibo filtered by the pagocontrarecibo_cantidad column
 * @method Pagocontrarecibo findOneByIdcontrarecibodetalle(int $idcontrarecibodetalle) Return the first Pagocontrarecibo filtered by the idcontrarecibodetalle column
 * @method Pagocontrarecibo findOneByIdusuario(int $idusuario) Return the first Pagocontrarecibo filtered by the idusuario column
 *
 * @method array findByIdpagocontrarecibo(int $idpagocontrarecibo) Return Pagocontrarecibo objects filtered by the idpagocontrarecibo column
 * @method array findByPagocontrareciboComprobante(string $pagocontrarecibo_comprobante) Return Pagocontrarecibo objects filtered by the pagocontrarecibo_comprobante column
 * @method array findByPagocontrareciboFechapago(string $pagocontrarecibo_fechapago) Return Pagocontrarecibo objects filtered by the pagocontrarecibo_fechapago column
 * @method array findByPagocontrareciboCantidad(string $pagocontrarecibo_cantidad) Return Pagocontrarecibo objects filtered by the pagocontrarecibo_cantidad column
 * @method array findByIdcontrarecibodetalle(int $idcontrarecibodetalle) Return Pagocontrarecibo objects filtered by the idcontrarecibodetalle column
 * @method array findByIdusuario(int $idusuario) Return Pagocontrarecibo objects filtered by the idusuario column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BasePagocontrareciboQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePagocontrareciboQuery object.
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
            $modelName = 'Pagocontrarecibo';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PagocontrareciboQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PagocontrareciboQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PagocontrareciboQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PagocontrareciboQuery) {
            return $criteria;
        }
        $query = new PagocontrareciboQuery(null, null, $modelAlias);

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
     * @return   Pagocontrarecibo|Pagocontrarecibo[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PagocontrareciboPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PagocontrareciboPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Pagocontrarecibo A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdpagocontrarecibo($key, $con = null)
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
     * @return                 Pagocontrarecibo A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idpagocontrarecibo`, `pagocontrarecibo_comprobante`, `pagocontrarecibo_fechapago`, `pagocontrarecibo_cantidad`, `idcontrarecibodetalle`, `idusuario` FROM `pagocontrarecibo` WHERE `idpagocontrarecibo` = :p0';
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
            $obj = new Pagocontrarecibo();
            $obj->hydrate($row);
            PagocontrareciboPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Pagocontrarecibo|Pagocontrarecibo[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Pagocontrarecibo[]|mixed the list of results, formatted by the current formatter
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
     * @return PagocontrareciboQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PagocontrareciboPeer::IDPAGOCONTRARECIBO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PagocontrareciboQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PagocontrareciboPeer::IDPAGOCONTRARECIBO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idpagocontrarecibo column
     *
     * Example usage:
     * <code>
     * $query->filterByIdpagocontrarecibo(1234); // WHERE idpagocontrarecibo = 1234
     * $query->filterByIdpagocontrarecibo(array(12, 34)); // WHERE idpagocontrarecibo IN (12, 34)
     * $query->filterByIdpagocontrarecibo(array('min' => 12)); // WHERE idpagocontrarecibo >= 12
     * $query->filterByIdpagocontrarecibo(array('max' => 12)); // WHERE idpagocontrarecibo <= 12
     * </code>
     *
     * @param     mixed $idpagocontrarecibo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagocontrareciboQuery The current query, for fluid interface
     */
    public function filterByIdpagocontrarecibo($idpagocontrarecibo = null, $comparison = null)
    {
        if (is_array($idpagocontrarecibo)) {
            $useMinMax = false;
            if (isset($idpagocontrarecibo['min'])) {
                $this->addUsingAlias(PagocontrareciboPeer::IDPAGOCONTRARECIBO, $idpagocontrarecibo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpagocontrarecibo['max'])) {
                $this->addUsingAlias(PagocontrareciboPeer::IDPAGOCONTRARECIBO, $idpagocontrarecibo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PagocontrareciboPeer::IDPAGOCONTRARECIBO, $idpagocontrarecibo, $comparison);
    }

    /**
     * Filter the query on the pagocontrarecibo_comprobante column
     *
     * Example usage:
     * <code>
     * $query->filterByPagocontrareciboComprobante('fooValue');   // WHERE pagocontrarecibo_comprobante = 'fooValue'
     * $query->filterByPagocontrareciboComprobante('%fooValue%'); // WHERE pagocontrarecibo_comprobante LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pagocontrareciboComprobante The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagocontrareciboQuery The current query, for fluid interface
     */
    public function filterByPagocontrareciboComprobante($pagocontrareciboComprobante = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pagocontrareciboComprobante)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pagocontrareciboComprobante)) {
                $pagocontrareciboComprobante = str_replace('*', '%', $pagocontrareciboComprobante);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PagocontrareciboPeer::PAGOCONTRARECIBO_COMPROBANTE, $pagocontrareciboComprobante, $comparison);
    }

    /**
     * Filter the query on the pagocontrarecibo_fechapago column
     *
     * Example usage:
     * <code>
     * $query->filterByPagocontrareciboFechapago('2011-03-14'); // WHERE pagocontrarecibo_fechapago = '2011-03-14'
     * $query->filterByPagocontrareciboFechapago('now'); // WHERE pagocontrarecibo_fechapago = '2011-03-14'
     * $query->filterByPagocontrareciboFechapago(array('max' => 'yesterday')); // WHERE pagocontrarecibo_fechapago < '2011-03-13'
     * </code>
     *
     * @param     mixed $pagocontrareciboFechapago The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagocontrareciboQuery The current query, for fluid interface
     */
    public function filterByPagocontrareciboFechapago($pagocontrareciboFechapago = null, $comparison = null)
    {
        if (is_array($pagocontrareciboFechapago)) {
            $useMinMax = false;
            if (isset($pagocontrareciboFechapago['min'])) {
                $this->addUsingAlias(PagocontrareciboPeer::PAGOCONTRARECIBO_FECHAPAGO, $pagocontrareciboFechapago['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pagocontrareciboFechapago['max'])) {
                $this->addUsingAlias(PagocontrareciboPeer::PAGOCONTRARECIBO_FECHAPAGO, $pagocontrareciboFechapago['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PagocontrareciboPeer::PAGOCONTRARECIBO_FECHAPAGO, $pagocontrareciboFechapago, $comparison);
    }

    /**
     * Filter the query on the pagocontrarecibo_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByPagocontrareciboCantidad(1234); // WHERE pagocontrarecibo_cantidad = 1234
     * $query->filterByPagocontrareciboCantidad(array(12, 34)); // WHERE pagocontrarecibo_cantidad IN (12, 34)
     * $query->filterByPagocontrareciboCantidad(array('min' => 12)); // WHERE pagocontrarecibo_cantidad >= 12
     * $query->filterByPagocontrareciboCantidad(array('max' => 12)); // WHERE pagocontrarecibo_cantidad <= 12
     * </code>
     *
     * @param     mixed $pagocontrareciboCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagocontrareciboQuery The current query, for fluid interface
     */
    public function filterByPagocontrareciboCantidad($pagocontrareciboCantidad = null, $comparison = null)
    {
        if (is_array($pagocontrareciboCantidad)) {
            $useMinMax = false;
            if (isset($pagocontrareciboCantidad['min'])) {
                $this->addUsingAlias(PagocontrareciboPeer::PAGOCONTRARECIBO_CANTIDAD, $pagocontrareciboCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pagocontrareciboCantidad['max'])) {
                $this->addUsingAlias(PagocontrareciboPeer::PAGOCONTRARECIBO_CANTIDAD, $pagocontrareciboCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PagocontrareciboPeer::PAGOCONTRARECIBO_CANTIDAD, $pagocontrareciboCantidad, $comparison);
    }

    /**
     * Filter the query on the idcontrarecibodetalle column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcontrarecibodetalle(1234); // WHERE idcontrarecibodetalle = 1234
     * $query->filterByIdcontrarecibodetalle(array(12, 34)); // WHERE idcontrarecibodetalle IN (12, 34)
     * $query->filterByIdcontrarecibodetalle(array('min' => 12)); // WHERE idcontrarecibodetalle >= 12
     * $query->filterByIdcontrarecibodetalle(array('max' => 12)); // WHERE idcontrarecibodetalle <= 12
     * </code>
     *
     * @see       filterByContrarecibodetalle()
     *
     * @param     mixed $idcontrarecibodetalle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PagocontrareciboQuery The current query, for fluid interface
     */
    public function filterByIdcontrarecibodetalle($idcontrarecibodetalle = null, $comparison = null)
    {
        if (is_array($idcontrarecibodetalle)) {
            $useMinMax = false;
            if (isset($idcontrarecibodetalle['min'])) {
                $this->addUsingAlias(PagocontrareciboPeer::IDCONTRARECIBODETALLE, $idcontrarecibodetalle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcontrarecibodetalle['max'])) {
                $this->addUsingAlias(PagocontrareciboPeer::IDCONTRARECIBODETALLE, $idcontrarecibodetalle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PagocontrareciboPeer::IDCONTRARECIBODETALLE, $idcontrarecibodetalle, $comparison);
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
     * @return PagocontrareciboQuery The current query, for fluid interface
     */
    public function filterByIdusuario($idusuario = null, $comparison = null)
    {
        if (is_array($idusuario)) {
            $useMinMax = false;
            if (isset($idusuario['min'])) {
                $this->addUsingAlias(PagocontrareciboPeer::IDUSUARIO, $idusuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idusuario['max'])) {
                $this->addUsingAlias(PagocontrareciboPeer::IDUSUARIO, $idusuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PagocontrareciboPeer::IDUSUARIO, $idusuario, $comparison);
    }

    /**
     * Filter the query by a related Contrarecibodetalle object
     *
     * @param   Contrarecibodetalle|PropelObjectCollection $contrarecibodetalle The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PagocontrareciboQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByContrarecibodetalle($contrarecibodetalle, $comparison = null)
    {
        if ($contrarecibodetalle instanceof Contrarecibodetalle) {
            return $this
                ->addUsingAlias(PagocontrareciboPeer::IDCONTRARECIBODETALLE, $contrarecibodetalle->getIdcontrarecibodetalle(), $comparison);
        } elseif ($contrarecibodetalle instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PagocontrareciboPeer::IDCONTRARECIBODETALLE, $contrarecibodetalle->toKeyValue('PrimaryKey', 'Idcontrarecibodetalle'), $comparison);
        } else {
            throw new PropelException('filterByContrarecibodetalle() only accepts arguments of type Contrarecibodetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Contrarecibodetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PagocontrareciboQuery The current query, for fluid interface
     */
    public function joinContrarecibodetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Contrarecibodetalle');

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
            $this->addJoinObject($join, 'Contrarecibodetalle');
        }

        return $this;
    }

    /**
     * Use the Contrarecibodetalle relation Contrarecibodetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ContrarecibodetalleQuery A secondary query class using the current class as primary query
     */
    public function useContrarecibodetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinContrarecibodetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Contrarecibodetalle', 'ContrarecibodetalleQuery');
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PagocontrareciboQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(PagocontrareciboPeer::IDUSUARIO, $usuario->getIdusuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PagocontrareciboPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
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
     * @return PagocontrareciboQuery The current query, for fluid interface
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
     * @param   Pagocontrarecibo $pagocontrarecibo Object to remove from the list of results
     *
     * @return PagocontrareciboQuery The current query, for fluid interface
     */
    public function prune($pagocontrarecibo = null)
    {
        if ($pagocontrarecibo) {
            $this->addUsingAlias(PagocontrareciboPeer::IDPAGOCONTRARECIBO, $pagocontrarecibo->getIdpagocontrarecibo(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
