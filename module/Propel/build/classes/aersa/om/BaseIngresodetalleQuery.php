<?php


/**
 * Base class that represents a query for the 'ingresodetalle' table.
 *
 *
 *
 * @method IngresodetalleQuery orderByIdingresodetalle($order = Criteria::ASC) Order by the idingresodetalle column
 * @method IngresodetalleQuery orderByIdingreso($order = Criteria::ASC) Order by the idingreso column
 * @method IngresodetalleQuery orderByIdrubroingreso($order = Criteria::ASC) Order by the idrubroingreso column
 * @method IngresodetalleQuery orderByIdconceptoingreso($order = Criteria::ASC) Order by the idconceptoingreso column
 * @method IngresodetalleQuery orderByIngresodetalleSub($order = Criteria::ASC) Order by the ingresodetalle_sub column
 * @method IngresodetalleQuery orderByIngresodetalleIva($order = Criteria::ASC) Order by the ingresodetalle_IVA column
 * @method IngresodetalleQuery orderByIngresodetalleTotal($order = Criteria::ASC) Order by the ingresodetalle_total column
 * @method IngresodetalleQuery orderByIngresodetalleRevisada($order = Criteria::ASC) Order by the ingresodetalle_revisada column
 *
 * @method IngresodetalleQuery groupByIdingresodetalle() Group by the idingresodetalle column
 * @method IngresodetalleQuery groupByIdingreso() Group by the idingreso column
 * @method IngresodetalleQuery groupByIdrubroingreso() Group by the idrubroingreso column
 * @method IngresodetalleQuery groupByIdconceptoingreso() Group by the idconceptoingreso column
 * @method IngresodetalleQuery groupByIngresodetalleSub() Group by the ingresodetalle_sub column
 * @method IngresodetalleQuery groupByIngresodetalleIva() Group by the ingresodetalle_IVA column
 * @method IngresodetalleQuery groupByIngresodetalleTotal() Group by the ingresodetalle_total column
 * @method IngresodetalleQuery groupByIngresodetalleRevisada() Group by the ingresodetalle_revisada column
 *
 * @method IngresodetalleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method IngresodetalleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method IngresodetalleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method IngresodetalleQuery leftJoinConceptoingreso($relationAlias = null) Adds a LEFT JOIN clause to the query using the Conceptoingreso relation
 * @method IngresodetalleQuery rightJoinConceptoingreso($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Conceptoingreso relation
 * @method IngresodetalleQuery innerJoinConceptoingreso($relationAlias = null) Adds a INNER JOIN clause to the query using the Conceptoingreso relation
 *
 * @method IngresodetalleQuery leftJoinIngreso($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ingreso relation
 * @method IngresodetalleQuery rightJoinIngreso($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ingreso relation
 * @method IngresodetalleQuery innerJoinIngreso($relationAlias = null) Adds a INNER JOIN clause to the query using the Ingreso relation
 *
 * @method IngresodetalleQuery leftJoinRubroingreso($relationAlias = null) Adds a LEFT JOIN clause to the query using the Rubroingreso relation
 * @method IngresodetalleQuery rightJoinRubroingreso($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Rubroingreso relation
 * @method IngresodetalleQuery innerJoinRubroingreso($relationAlias = null) Adds a INNER JOIN clause to the query using the Rubroingreso relation
 *
 * @method Ingresodetalle findOne(PropelPDO $con = null) Return the first Ingresodetalle matching the query
 * @method Ingresodetalle findOneOrCreate(PropelPDO $con = null) Return the first Ingresodetalle matching the query, or a new Ingresodetalle object populated from the query conditions when no match is found
 *
 * @method Ingresodetalle findOneByIdingreso(int $idingreso) Return the first Ingresodetalle filtered by the idingreso column
 * @method Ingresodetalle findOneByIdrubroingreso(int $idrubroingreso) Return the first Ingresodetalle filtered by the idrubroingreso column
 * @method Ingresodetalle findOneByIdconceptoingreso(int $idconceptoingreso) Return the first Ingresodetalle filtered by the idconceptoingreso column
 * @method Ingresodetalle findOneByIngresodetalleSub(string $ingresodetalle_sub) Return the first Ingresodetalle filtered by the ingresodetalle_sub column
 * @method Ingresodetalle findOneByIngresodetalleIva(string $ingresodetalle_IVA) Return the first Ingresodetalle filtered by the ingresodetalle_IVA column
 * @method Ingresodetalle findOneByIngresodetalleTotal(string $ingresodetalle_total) Return the first Ingresodetalle filtered by the ingresodetalle_total column
 * @method Ingresodetalle findOneByIngresodetalleRevisada(boolean $ingresodetalle_revisada) Return the first Ingresodetalle filtered by the ingresodetalle_revisada column
 *
 * @method array findByIdingresodetalle(int $idingresodetalle) Return Ingresodetalle objects filtered by the idingresodetalle column
 * @method array findByIdingreso(int $idingreso) Return Ingresodetalle objects filtered by the idingreso column
 * @method array findByIdrubroingreso(int $idrubroingreso) Return Ingresodetalle objects filtered by the idrubroingreso column
 * @method array findByIdconceptoingreso(int $idconceptoingreso) Return Ingresodetalle objects filtered by the idconceptoingreso column
 * @method array findByIngresodetalleSub(string $ingresodetalle_sub) Return Ingresodetalle objects filtered by the ingresodetalle_sub column
 * @method array findByIngresodetalleIva(string $ingresodetalle_IVA) Return Ingresodetalle objects filtered by the ingresodetalle_IVA column
 * @method array findByIngresodetalleTotal(string $ingresodetalle_total) Return Ingresodetalle objects filtered by the ingresodetalle_total column
 * @method array findByIngresodetalleRevisada(boolean $ingresodetalle_revisada) Return Ingresodetalle objects filtered by the ingresodetalle_revisada column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseIngresodetalleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseIngresodetalleQuery object.
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
            $modelName = 'Ingresodetalle';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new IngresodetalleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   IngresodetalleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return IngresodetalleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof IngresodetalleQuery) {
            return $criteria;
        }
        $query = new IngresodetalleQuery(null, null, $modelAlias);

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
     * @return   Ingresodetalle|Ingresodetalle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = IngresodetallePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(IngresodetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Ingresodetalle A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdingresodetalle($key, $con = null)
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
     * @return                 Ingresodetalle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idingresodetalle`, `idingreso`, `idrubroingreso`, `idconceptoingreso`, `ingresodetalle_sub`, `ingresodetalle_IVA`, `ingresodetalle_total`, `ingresodetalle_revisada` FROM `ingresodetalle` WHERE `idingresodetalle` = :p0';
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
            $obj = new Ingresodetalle();
            $obj->hydrate($row);
            IngresodetallePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Ingresodetalle|Ingresodetalle[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Ingresodetalle[]|mixed the list of results, formatted by the current formatter
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
     * @return IngresodetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(IngresodetallePeer::IDINGRESODETALLE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return IngresodetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(IngresodetallePeer::IDINGRESODETALLE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idingresodetalle column
     *
     * Example usage:
     * <code>
     * $query->filterByIdingresodetalle(1234); // WHERE idingresodetalle = 1234
     * $query->filterByIdingresodetalle(array(12, 34)); // WHERE idingresodetalle IN (12, 34)
     * $query->filterByIdingresodetalle(array('min' => 12)); // WHERE idingresodetalle >= 12
     * $query->filterByIdingresodetalle(array('max' => 12)); // WHERE idingresodetalle <= 12
     * </code>
     *
     * @param     mixed $idingresodetalle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IngresodetalleQuery The current query, for fluid interface
     */
    public function filterByIdingresodetalle($idingresodetalle = null, $comparison = null)
    {
        if (is_array($idingresodetalle)) {
            $useMinMax = false;
            if (isset($idingresodetalle['min'])) {
                $this->addUsingAlias(IngresodetallePeer::IDINGRESODETALLE, $idingresodetalle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idingresodetalle['max'])) {
                $this->addUsingAlias(IngresodetallePeer::IDINGRESODETALLE, $idingresodetalle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IngresodetallePeer::IDINGRESODETALLE, $idingresodetalle, $comparison);
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
     * @return IngresodetalleQuery The current query, for fluid interface
     */
    public function filterByIdingreso($idingreso = null, $comparison = null)
    {
        if (is_array($idingreso)) {
            $useMinMax = false;
            if (isset($idingreso['min'])) {
                $this->addUsingAlias(IngresodetallePeer::IDINGRESO, $idingreso['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idingreso['max'])) {
                $this->addUsingAlias(IngresodetallePeer::IDINGRESO, $idingreso['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IngresodetallePeer::IDINGRESO, $idingreso, $comparison);
    }

    /**
     * Filter the query on the idrubroingreso column
     *
     * Example usage:
     * <code>
     * $query->filterByIdrubroingreso(1234); // WHERE idrubroingreso = 1234
     * $query->filterByIdrubroingreso(array(12, 34)); // WHERE idrubroingreso IN (12, 34)
     * $query->filterByIdrubroingreso(array('min' => 12)); // WHERE idrubroingreso >= 12
     * $query->filterByIdrubroingreso(array('max' => 12)); // WHERE idrubroingreso <= 12
     * </code>
     *
     * @see       filterByRubroingreso()
     *
     * @param     mixed $idrubroingreso The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IngresodetalleQuery The current query, for fluid interface
     */
    public function filterByIdrubroingreso($idrubroingreso = null, $comparison = null)
    {
        if (is_array($idrubroingreso)) {
            $useMinMax = false;
            if (isset($idrubroingreso['min'])) {
                $this->addUsingAlias(IngresodetallePeer::IDRUBROINGRESO, $idrubroingreso['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idrubroingreso['max'])) {
                $this->addUsingAlias(IngresodetallePeer::IDRUBROINGRESO, $idrubroingreso['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IngresodetallePeer::IDRUBROINGRESO, $idrubroingreso, $comparison);
    }

    /**
     * Filter the query on the idconceptoingreso column
     *
     * Example usage:
     * <code>
     * $query->filterByIdconceptoingreso(1234); // WHERE idconceptoingreso = 1234
     * $query->filterByIdconceptoingreso(array(12, 34)); // WHERE idconceptoingreso IN (12, 34)
     * $query->filterByIdconceptoingreso(array('min' => 12)); // WHERE idconceptoingreso >= 12
     * $query->filterByIdconceptoingreso(array('max' => 12)); // WHERE idconceptoingreso <= 12
     * </code>
     *
     * @see       filterByConceptoingreso()
     *
     * @param     mixed $idconceptoingreso The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IngresodetalleQuery The current query, for fluid interface
     */
    public function filterByIdconceptoingreso($idconceptoingreso = null, $comparison = null)
    {
        if (is_array($idconceptoingreso)) {
            $useMinMax = false;
            if (isset($idconceptoingreso['min'])) {
                $this->addUsingAlias(IngresodetallePeer::IDCONCEPTOINGRESO, $idconceptoingreso['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idconceptoingreso['max'])) {
                $this->addUsingAlias(IngresodetallePeer::IDCONCEPTOINGRESO, $idconceptoingreso['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IngresodetallePeer::IDCONCEPTOINGRESO, $idconceptoingreso, $comparison);
    }

    /**
     * Filter the query on the ingresodetalle_sub column
     *
     * Example usage:
     * <code>
     * $query->filterByIngresodetalleSub(1234); // WHERE ingresodetalle_sub = 1234
     * $query->filterByIngresodetalleSub(array(12, 34)); // WHERE ingresodetalle_sub IN (12, 34)
     * $query->filterByIngresodetalleSub(array('min' => 12)); // WHERE ingresodetalle_sub >= 12
     * $query->filterByIngresodetalleSub(array('max' => 12)); // WHERE ingresodetalle_sub <= 12
     * </code>
     *
     * @param     mixed $ingresodetalleSub The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IngresodetalleQuery The current query, for fluid interface
     */
    public function filterByIngresodetalleSub($ingresodetalleSub = null, $comparison = null)
    {
        if (is_array($ingresodetalleSub)) {
            $useMinMax = false;
            if (isset($ingresodetalleSub['min'])) {
                $this->addUsingAlias(IngresodetallePeer::INGRESODETALLE_SUB, $ingresodetalleSub['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ingresodetalleSub['max'])) {
                $this->addUsingAlias(IngresodetallePeer::INGRESODETALLE_SUB, $ingresodetalleSub['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IngresodetallePeer::INGRESODETALLE_SUB, $ingresodetalleSub, $comparison);
    }

    /**
     * Filter the query on the ingresodetalle_IVA column
     *
     * Example usage:
     * <code>
     * $query->filterByIngresodetalleIva(1234); // WHERE ingresodetalle_IVA = 1234
     * $query->filterByIngresodetalleIva(array(12, 34)); // WHERE ingresodetalle_IVA IN (12, 34)
     * $query->filterByIngresodetalleIva(array('min' => 12)); // WHERE ingresodetalle_IVA >= 12
     * $query->filterByIngresodetalleIva(array('max' => 12)); // WHERE ingresodetalle_IVA <= 12
     * </code>
     *
     * @param     mixed $ingresodetalleIva The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IngresodetalleQuery The current query, for fluid interface
     */
    public function filterByIngresodetalleIva($ingresodetalleIva = null, $comparison = null)
    {
        if (is_array($ingresodetalleIva)) {
            $useMinMax = false;
            if (isset($ingresodetalleIva['min'])) {
                $this->addUsingAlias(IngresodetallePeer::INGRESODETALLE_IVA, $ingresodetalleIva['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ingresodetalleIva['max'])) {
                $this->addUsingAlias(IngresodetallePeer::INGRESODETALLE_IVA, $ingresodetalleIva['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IngresodetallePeer::INGRESODETALLE_IVA, $ingresodetalleIva, $comparison);
    }

    /**
     * Filter the query on the ingresodetalle_total column
     *
     * Example usage:
     * <code>
     * $query->filterByIngresodetalleTotal(1234); // WHERE ingresodetalle_total = 1234
     * $query->filterByIngresodetalleTotal(array(12, 34)); // WHERE ingresodetalle_total IN (12, 34)
     * $query->filterByIngresodetalleTotal(array('min' => 12)); // WHERE ingresodetalle_total >= 12
     * $query->filterByIngresodetalleTotal(array('max' => 12)); // WHERE ingresodetalle_total <= 12
     * </code>
     *
     * @param     mixed $ingresodetalleTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IngresodetalleQuery The current query, for fluid interface
     */
    public function filterByIngresodetalleTotal($ingresodetalleTotal = null, $comparison = null)
    {
        if (is_array($ingresodetalleTotal)) {
            $useMinMax = false;
            if (isset($ingresodetalleTotal['min'])) {
                $this->addUsingAlias(IngresodetallePeer::INGRESODETALLE_TOTAL, $ingresodetalleTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ingresodetalleTotal['max'])) {
                $this->addUsingAlias(IngresodetallePeer::INGRESODETALLE_TOTAL, $ingresodetalleTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IngresodetallePeer::INGRESODETALLE_TOTAL, $ingresodetalleTotal, $comparison);
    }

    /**
     * Filter the query on the ingresodetalle_revisada column
     *
     * Example usage:
     * <code>
     * $query->filterByIngresodetalleRevisada(true); // WHERE ingresodetalle_revisada = true
     * $query->filterByIngresodetalleRevisada('yes'); // WHERE ingresodetalle_revisada = true
     * </code>
     *
     * @param     boolean|string $ingresodetalleRevisada The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IngresodetalleQuery The current query, for fluid interface
     */
    public function filterByIngresodetalleRevisada($ingresodetalleRevisada = null, $comparison = null)
    {
        if (is_string($ingresodetalleRevisada)) {
            $ingresodetalleRevisada = in_array(strtolower($ingresodetalleRevisada), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(IngresodetallePeer::INGRESODETALLE_REVISADA, $ingresodetalleRevisada, $comparison);
    }

    /**
     * Filter the query by a related Conceptoingreso object
     *
     * @param   Conceptoingreso|PropelObjectCollection $conceptoingreso The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 IngresodetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByConceptoingreso($conceptoingreso, $comparison = null)
    {
        if ($conceptoingreso instanceof Conceptoingreso) {
            return $this
                ->addUsingAlias(IngresodetallePeer::IDCONCEPTOINGRESO, $conceptoingreso->getIdconceptoingreso(), $comparison);
        } elseif ($conceptoingreso instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(IngresodetallePeer::IDCONCEPTOINGRESO, $conceptoingreso->toKeyValue('PrimaryKey', 'Idconceptoingreso'), $comparison);
        } else {
            throw new PropelException('filterByConceptoingreso() only accepts arguments of type Conceptoingreso or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Conceptoingreso relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return IngresodetalleQuery The current query, for fluid interface
     */
    public function joinConceptoingreso($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Conceptoingreso');

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
            $this->addJoinObject($join, 'Conceptoingreso');
        }

        return $this;
    }

    /**
     * Use the Conceptoingreso relation Conceptoingreso object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ConceptoingresoQuery A secondary query class using the current class as primary query
     */
    public function useConceptoingresoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinConceptoingreso($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Conceptoingreso', 'ConceptoingresoQuery');
    }

    /**
     * Filter the query by a related Ingreso object
     *
     * @param   Ingreso|PropelObjectCollection $ingreso The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 IngresodetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByIngreso($ingreso, $comparison = null)
    {
        if ($ingreso instanceof Ingreso) {
            return $this
                ->addUsingAlias(IngresodetallePeer::IDINGRESO, $ingreso->getIdingreso(), $comparison);
        } elseif ($ingreso instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(IngresodetallePeer::IDINGRESO, $ingreso->toKeyValue('PrimaryKey', 'Idingreso'), $comparison);
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
     * @return IngresodetalleQuery The current query, for fluid interface
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
     * Filter the query by a related Rubroingreso object
     *
     * @param   Rubroingreso|PropelObjectCollection $rubroingreso The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 IngresodetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRubroingreso($rubroingreso, $comparison = null)
    {
        if ($rubroingreso instanceof Rubroingreso) {
            return $this
                ->addUsingAlias(IngresodetallePeer::IDRUBROINGRESO, $rubroingreso->getIdrubroingreso(), $comparison);
        } elseif ($rubroingreso instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(IngresodetallePeer::IDRUBROINGRESO, $rubroingreso->toKeyValue('PrimaryKey', 'Idrubroingreso'), $comparison);
        } else {
            throw new PropelException('filterByRubroingreso() only accepts arguments of type Rubroingreso or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Rubroingreso relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return IngresodetalleQuery The current query, for fluid interface
     */
    public function joinRubroingreso($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Rubroingreso');

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
            $this->addJoinObject($join, 'Rubroingreso');
        }

        return $this;
    }

    /**
     * Use the Rubroingreso relation Rubroingreso object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RubroingresoQuery A secondary query class using the current class as primary query
     */
    public function useRubroingresoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRubroingreso($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Rubroingreso', 'RubroingresoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Ingresodetalle $ingresodetalle Object to remove from the list of results
     *
     * @return IngresodetalleQuery The current query, for fluid interface
     */
    public function prune($ingresodetalle = null)
    {
        if ($ingresodetalle) {
            $this->addUsingAlias(IngresodetallePeer::IDINGRESODETALLE, $ingresodetalle->getIdingresodetalle(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
