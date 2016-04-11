<?php


/**
 * Base class that represents a query for the 'notacreditodetalle' table.
 *
 *
 *
 * @method NotacreditodetalleQuery orderByIdnotacreditodetalle($order = Criteria::ASC) Order by the idnotacreditodetalle column
 * @method NotacreditodetalleQuery orderByIdnotacredito($order = Criteria::ASC) Order by the idnotacredito column
 * @method NotacreditodetalleQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 * @method NotacreditodetalleQuery orderByIdalmacen($order = Criteria::ASC) Order by the idalmacen column
 * @method NotacreditodetalleQuery orderByNotacreditodetalleCantidad($order = Criteria::ASC) Order by the notacreditodetalle_cantidad column
 * @method NotacreditodetalleQuery orderByNotacreditodetalleRevisada($order = Criteria::ASC) Order by the notacreditodetalle_revisada column
 *
 * @method NotacreditodetalleQuery groupByIdnotacreditodetalle() Group by the idnotacreditodetalle column
 * @method NotacreditodetalleQuery groupByIdnotacredito() Group by the idnotacredito column
 * @method NotacreditodetalleQuery groupByIdproducto() Group by the idproducto column
 * @method NotacreditodetalleQuery groupByIdalmacen() Group by the idalmacen column
 * @method NotacreditodetalleQuery groupByNotacreditodetalleCantidad() Group by the notacreditodetalle_cantidad column
 * @method NotacreditodetalleQuery groupByNotacreditodetalleRevisada() Group by the notacreditodetalle_revisada column
 *
 * @method NotacreditodetalleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method NotacreditodetalleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method NotacreditodetalleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method NotacreditodetalleQuery leftJoinAlmacen($relationAlias = null) Adds a LEFT JOIN clause to the query using the Almacen relation
 * @method NotacreditodetalleQuery rightJoinAlmacen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Almacen relation
 * @method NotacreditodetalleQuery innerJoinAlmacen($relationAlias = null) Adds a INNER JOIN clause to the query using the Almacen relation
 *
 * @method NotacreditodetalleQuery leftJoinNotacredito($relationAlias = null) Adds a LEFT JOIN clause to the query using the Notacredito relation
 * @method NotacreditodetalleQuery rightJoinNotacredito($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Notacredito relation
 * @method NotacreditodetalleQuery innerJoinNotacredito($relationAlias = null) Adds a INNER JOIN clause to the query using the Notacredito relation
 *
 * @method NotacreditodetalleQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method NotacreditodetalleQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method NotacreditodetalleQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method Notacreditodetalle findOne(PropelPDO $con = null) Return the first Notacreditodetalle matching the query
 * @method Notacreditodetalle findOneOrCreate(PropelPDO $con = null) Return the first Notacreditodetalle matching the query, or a new Notacreditodetalle object populated from the query conditions when no match is found
 *
 * @method Notacreditodetalle findOneByIdnotacredito(int $idnotacredito) Return the first Notacreditodetalle filtered by the idnotacredito column
 * @method Notacreditodetalle findOneByIdproducto(int $idproducto) Return the first Notacreditodetalle filtered by the idproducto column
 * @method Notacreditodetalle findOneByIdalmacen(int $idalmacen) Return the first Notacreditodetalle filtered by the idalmacen column
 * @method Notacreditodetalle findOneByNotacreditodetalleCantidad(double $notacreditodetalle_cantidad) Return the first Notacreditodetalle filtered by the notacreditodetalle_cantidad column
 * @method Notacreditodetalle findOneByNotacreditodetalleRevisada(boolean $notacreditodetalle_revisada) Return the first Notacreditodetalle filtered by the notacreditodetalle_revisada column
 *
 * @method array findByIdnotacreditodetalle(int $idnotacreditodetalle) Return Notacreditodetalle objects filtered by the idnotacreditodetalle column
 * @method array findByIdnotacredito(int $idnotacredito) Return Notacreditodetalle objects filtered by the idnotacredito column
 * @method array findByIdproducto(int $idproducto) Return Notacreditodetalle objects filtered by the idproducto column
 * @method array findByIdalmacen(int $idalmacen) Return Notacreditodetalle objects filtered by the idalmacen column
 * @method array findByNotacreditodetalleCantidad(double $notacreditodetalle_cantidad) Return Notacreditodetalle objects filtered by the notacreditodetalle_cantidad column
 * @method array findByNotacreditodetalleRevisada(boolean $notacreditodetalle_revisada) Return Notacreditodetalle objects filtered by the notacreditodetalle_revisada column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseNotacreditodetalleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseNotacreditodetalleQuery object.
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
            $modelName = 'Notacreditodetalle';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new NotacreditodetalleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   NotacreditodetalleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return NotacreditodetalleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof NotacreditodetalleQuery) {
            return $criteria;
        }
        $query = new NotacreditodetalleQuery(null, null, $modelAlias);

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
     * @return   Notacreditodetalle|Notacreditodetalle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = NotacreditodetallePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(NotacreditodetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Notacreditodetalle A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdnotacreditodetalle($key, $con = null)
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
     * @return                 Notacreditodetalle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idnotacreditodetalle`, `idnotacredito`, `idproducto`, `idalmacen`, `notacreditodetalle_cantidad`, `notacreditodetalle_revisada` FROM `notacreditodetalle` WHERE `idnotacreditodetalle` = :p0';
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
            $obj = new Notacreditodetalle();
            $obj->hydrate($row);
            NotacreditodetallePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Notacreditodetalle|Notacreditodetalle[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Notacreditodetalle[]|mixed the list of results, formatted by the current formatter
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
     * @return NotacreditodetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(NotacreditodetallePeer::IDNOTACREDITODETALLE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return NotacreditodetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(NotacreditodetallePeer::IDNOTACREDITODETALLE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idnotacreditodetalle column
     *
     * Example usage:
     * <code>
     * $query->filterByIdnotacreditodetalle(1234); // WHERE idnotacreditodetalle = 1234
     * $query->filterByIdnotacreditodetalle(array(12, 34)); // WHERE idnotacreditodetalle IN (12, 34)
     * $query->filterByIdnotacreditodetalle(array('min' => 12)); // WHERE idnotacreditodetalle >= 12
     * $query->filterByIdnotacreditodetalle(array('max' => 12)); // WHERE idnotacreditodetalle <= 12
     * </code>
     *
     * @param     mixed $idnotacreditodetalle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotacreditodetalleQuery The current query, for fluid interface
     */
    public function filterByIdnotacreditodetalle($idnotacreditodetalle = null, $comparison = null)
    {
        if (is_array($idnotacreditodetalle)) {
            $useMinMax = false;
            if (isset($idnotacreditodetalle['min'])) {
                $this->addUsingAlias(NotacreditodetallePeer::IDNOTACREDITODETALLE, $idnotacreditodetalle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idnotacreditodetalle['max'])) {
                $this->addUsingAlias(NotacreditodetallePeer::IDNOTACREDITODETALLE, $idnotacreditodetalle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NotacreditodetallePeer::IDNOTACREDITODETALLE, $idnotacreditodetalle, $comparison);
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
     * @return NotacreditodetalleQuery The current query, for fluid interface
     */
    public function filterByIdnotacredito($idnotacredito = null, $comparison = null)
    {
        if (is_array($idnotacredito)) {
            $useMinMax = false;
            if (isset($idnotacredito['min'])) {
                $this->addUsingAlias(NotacreditodetallePeer::IDNOTACREDITO, $idnotacredito['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idnotacredito['max'])) {
                $this->addUsingAlias(NotacreditodetallePeer::IDNOTACREDITO, $idnotacredito['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NotacreditodetallePeer::IDNOTACREDITO, $idnotacredito, $comparison);
    }

    /**
     * Filter the query on the idproducto column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproducto(1234); // WHERE idproducto = 1234
     * $query->filterByIdproducto(array(12, 34)); // WHERE idproducto IN (12, 34)
     * $query->filterByIdproducto(array('min' => 12)); // WHERE idproducto >= 12
     * $query->filterByIdproducto(array('max' => 12)); // WHERE idproducto <= 12
     * </code>
     *
     * @see       filterByProducto()
     *
     * @param     mixed $idproducto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotacreditodetalleQuery The current query, for fluid interface
     */
    public function filterByIdproducto($idproducto = null, $comparison = null)
    {
        if (is_array($idproducto)) {
            $useMinMax = false;
            if (isset($idproducto['min'])) {
                $this->addUsingAlias(NotacreditodetallePeer::IDPRODUCTO, $idproducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproducto['max'])) {
                $this->addUsingAlias(NotacreditodetallePeer::IDPRODUCTO, $idproducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NotacreditodetallePeer::IDPRODUCTO, $idproducto, $comparison);
    }

    /**
     * Filter the query on the idalmacen column
     *
     * Example usage:
     * <code>
     * $query->filterByIdalmacen(1234); // WHERE idalmacen = 1234
     * $query->filterByIdalmacen(array(12, 34)); // WHERE idalmacen IN (12, 34)
     * $query->filterByIdalmacen(array('min' => 12)); // WHERE idalmacen >= 12
     * $query->filterByIdalmacen(array('max' => 12)); // WHERE idalmacen <= 12
     * </code>
     *
     * @see       filterByAlmacen()
     *
     * @param     mixed $idalmacen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotacreditodetalleQuery The current query, for fluid interface
     */
    public function filterByIdalmacen($idalmacen = null, $comparison = null)
    {
        if (is_array($idalmacen)) {
            $useMinMax = false;
            if (isset($idalmacen['min'])) {
                $this->addUsingAlias(NotacreditodetallePeer::IDALMACEN, $idalmacen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idalmacen['max'])) {
                $this->addUsingAlias(NotacreditodetallePeer::IDALMACEN, $idalmacen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NotacreditodetallePeer::IDALMACEN, $idalmacen, $comparison);
    }

    /**
     * Filter the query on the notacreditodetalle_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByNotacreditodetalleCantidad(1234); // WHERE notacreditodetalle_cantidad = 1234
     * $query->filterByNotacreditodetalleCantidad(array(12, 34)); // WHERE notacreditodetalle_cantidad IN (12, 34)
     * $query->filterByNotacreditodetalleCantidad(array('min' => 12)); // WHERE notacreditodetalle_cantidad >= 12
     * $query->filterByNotacreditodetalleCantidad(array('max' => 12)); // WHERE notacreditodetalle_cantidad <= 12
     * </code>
     *
     * @param     mixed $notacreditodetalleCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotacreditodetalleQuery The current query, for fluid interface
     */
    public function filterByNotacreditodetalleCantidad($notacreditodetalleCantidad = null, $comparison = null)
    {
        if (is_array($notacreditodetalleCantidad)) {
            $useMinMax = false;
            if (isset($notacreditodetalleCantidad['min'])) {
                $this->addUsingAlias(NotacreditodetallePeer::NOTACREDITODETALLE_CANTIDAD, $notacreditodetalleCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($notacreditodetalleCantidad['max'])) {
                $this->addUsingAlias(NotacreditodetallePeer::NOTACREDITODETALLE_CANTIDAD, $notacreditodetalleCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NotacreditodetallePeer::NOTACREDITODETALLE_CANTIDAD, $notacreditodetalleCantidad, $comparison);
    }

    /**
     * Filter the query on the notacreditodetalle_revisada column
     *
     * Example usage:
     * <code>
     * $query->filterByNotacreditodetalleRevisada(true); // WHERE notacreditodetalle_revisada = true
     * $query->filterByNotacreditodetalleRevisada('yes'); // WHERE notacreditodetalle_revisada = true
     * </code>
     *
     * @param     boolean|string $notacreditodetalleRevisada The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotacreditodetalleQuery The current query, for fluid interface
     */
    public function filterByNotacreditodetalleRevisada($notacreditodetalleRevisada = null, $comparison = null)
    {
        if (is_string($notacreditodetalleRevisada)) {
            $notacreditodetalleRevisada = in_array(strtolower($notacreditodetalleRevisada), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(NotacreditodetallePeer::NOTACREDITODETALLE_REVISADA, $notacreditodetalleRevisada, $comparison);
    }

    /**
     * Filter the query by a related Almacen object
     *
     * @param   Almacen|PropelObjectCollection $almacen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 NotacreditodetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAlmacen($almacen, $comparison = null)
    {
        if ($almacen instanceof Almacen) {
            return $this
                ->addUsingAlias(NotacreditodetallePeer::IDALMACEN, $almacen->getIdalmacen(), $comparison);
        } elseif ($almacen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(NotacreditodetallePeer::IDALMACEN, $almacen->toKeyValue('PrimaryKey', 'Idalmacen'), $comparison);
        } else {
            throw new PropelException('filterByAlmacen() only accepts arguments of type Almacen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Almacen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return NotacreditodetalleQuery The current query, for fluid interface
     */
    public function joinAlmacen($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Almacen');

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
            $this->addJoinObject($join, 'Almacen');
        }

        return $this;
    }

    /**
     * Use the Almacen relation Almacen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AlmacenQuery A secondary query class using the current class as primary query
     */
    public function useAlmacenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAlmacen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Almacen', 'AlmacenQuery');
    }

    /**
     * Filter the query by a related Notacredito object
     *
     * @param   Notacredito|PropelObjectCollection $notacredito The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 NotacreditodetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByNotacredito($notacredito, $comparison = null)
    {
        if ($notacredito instanceof Notacredito) {
            return $this
                ->addUsingAlias(NotacreditodetallePeer::IDNOTACREDITO, $notacredito->getIdnotacredito(), $comparison);
        } elseif ($notacredito instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(NotacreditodetallePeer::IDNOTACREDITO, $notacredito->toKeyValue('PrimaryKey', 'Idnotacredito'), $comparison);
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
     * @return NotacreditodetalleQuery The current query, for fluid interface
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
     * Filter the query by a related Producto object
     *
     * @param   Producto|PropelObjectCollection $producto The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 NotacreditodetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(NotacreditodetallePeer::IDPRODUCTO, $producto->getIdproducto(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(NotacreditodetallePeer::IDPRODUCTO, $producto->toKeyValue('PrimaryKey', 'Idproducto'), $comparison);
        } else {
            throw new PropelException('filterByProducto() only accepts arguments of type Producto or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Producto relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return NotacreditodetalleQuery The current query, for fluid interface
     */
    public function joinProducto($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Producto');

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
            $this->addJoinObject($join, 'Producto');
        }

        return $this;
    }

    /**
     * Use the Producto relation Producto object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProductoQuery A secondary query class using the current class as primary query
     */
    public function useProductoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProducto($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Producto', 'ProductoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Notacreditodetalle $notacreditodetalle Object to remove from the list of results
     *
     * @return NotacreditodetalleQuery The current query, for fluid interface
     */
    public function prune($notacreditodetalle = null)
    {
        if ($notacreditodetalle) {
            $this->addUsingAlias(NotacreditodetallePeer::IDNOTACREDITODETALLE, $notacreditodetalle->getIdnotacreditodetalle(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
