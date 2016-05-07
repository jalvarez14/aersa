<?php


/**
 * Base class that represents a query for the 'requisiciondetalle' table.
 *
 *
 *
 * @method RequisiciondetalleQuery orderByIdrequisiciondetalle($order = Criteria::ASC) Order by the idrequisiciondetalle column
 * @method RequisiciondetalleQuery orderByIdrequisicion($order = Criteria::ASC) Order by the idrequisicion column
 * @method RequisiciondetalleQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 * @method RequisiciondetalleQuery orderByRequisiciondetalleCantidad($order = Criteria::ASC) Order by the requisiciondetalle_cantidad column
 * @method RequisiciondetalleQuery orderByRequisiciondetalleRevisada($order = Criteria::ASC) Order by the requisiciondetalle_revisada column
 * @method RequisiciondetalleQuery orderByRequisiciondetallePreciounitario($order = Criteria::ASC) Order by the requisiciondetalle_preciounitario column
 * @method RequisiciondetalleQuery orderByRequisiciondetalleSubtotal($order = Criteria::ASC) Order by the requisiciondetalle_subtotal column
 * @method RequisiciondetalleQuery orderByIdpadre($order = Criteria::ASC) Order by the idpadre column
 * @method RequisiciondetalleQuery orderByRequisiciondetallecol($order = Criteria::ASC) Order by the requisiciondetallecol column
 *
 * @method RequisiciondetalleQuery groupByIdrequisiciondetalle() Group by the idrequisiciondetalle column
 * @method RequisiciondetalleQuery groupByIdrequisicion() Group by the idrequisicion column
 * @method RequisiciondetalleQuery groupByIdproducto() Group by the idproducto column
 * @method RequisiciondetalleQuery groupByRequisiciondetalleCantidad() Group by the requisiciondetalle_cantidad column
 * @method RequisiciondetalleQuery groupByRequisiciondetalleRevisada() Group by the requisiciondetalle_revisada column
 * @method RequisiciondetalleQuery groupByRequisiciondetallePreciounitario() Group by the requisiciondetalle_preciounitario column
 * @method RequisiciondetalleQuery groupByRequisiciondetalleSubtotal() Group by the requisiciondetalle_subtotal column
 * @method RequisiciondetalleQuery groupByIdpadre() Group by the idpadre column
 * @method RequisiciondetalleQuery groupByRequisiciondetallecol() Group by the requisiciondetallecol column
 *
 * @method RequisiciondetalleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RequisiciondetalleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RequisiciondetalleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RequisiciondetalleQuery leftJoinRequisiciondetalleRelatedByIdpadre($relationAlias = null) Adds a LEFT JOIN clause to the query using the RequisiciondetalleRelatedByIdpadre relation
 * @method RequisiciondetalleQuery rightJoinRequisiciondetalleRelatedByIdpadre($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RequisiciondetalleRelatedByIdpadre relation
 * @method RequisiciondetalleQuery innerJoinRequisiciondetalleRelatedByIdpadre($relationAlias = null) Adds a INNER JOIN clause to the query using the RequisiciondetalleRelatedByIdpadre relation
 *
 * @method RequisiciondetalleQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method RequisiciondetalleQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method RequisiciondetalleQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method RequisiciondetalleQuery leftJoinRequisicion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Requisicion relation
 * @method RequisiciondetalleQuery rightJoinRequisicion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Requisicion relation
 * @method RequisiciondetalleQuery innerJoinRequisicion($relationAlias = null) Adds a INNER JOIN clause to the query using the Requisicion relation
 *
 * @method RequisiciondetalleQuery leftJoinRequisiciondetalleRelatedByIdrequisiciondetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the RequisiciondetalleRelatedByIdrequisiciondetalle relation
 * @method RequisiciondetalleQuery rightJoinRequisiciondetalleRelatedByIdrequisiciondetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RequisiciondetalleRelatedByIdrequisiciondetalle relation
 * @method RequisiciondetalleQuery innerJoinRequisiciondetalleRelatedByIdrequisiciondetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the RequisiciondetalleRelatedByIdrequisiciondetalle relation
 *
 * @method Requisiciondetalle findOne(PropelPDO $con = null) Return the first Requisiciondetalle matching the query
 * @method Requisiciondetalle findOneOrCreate(PropelPDO $con = null) Return the first Requisiciondetalle matching the query, or a new Requisiciondetalle object populated from the query conditions when no match is found
 *
 * @method Requisiciondetalle findOneByIdrequisicion(int $idrequisicion) Return the first Requisiciondetalle filtered by the idrequisicion column
 * @method Requisiciondetalle findOneByIdproducto(int $idproducto) Return the first Requisiciondetalle filtered by the idproducto column
 * @method Requisiciondetalle findOneByRequisiciondetalleCantidad(double $requisiciondetalle_cantidad) Return the first Requisiciondetalle filtered by the requisiciondetalle_cantidad column
 * @method Requisiciondetalle findOneByRequisiciondetalleRevisada(boolean $requisiciondetalle_revisada) Return the first Requisiciondetalle filtered by the requisiciondetalle_revisada column
 * @method Requisiciondetalle findOneByRequisiciondetallePreciounitario(string $requisiciondetalle_preciounitario) Return the first Requisiciondetalle filtered by the requisiciondetalle_preciounitario column
 * @method Requisiciondetalle findOneByRequisiciondetalleSubtotal(string $requisiciondetalle_subtotal) Return the first Requisiciondetalle filtered by the requisiciondetalle_subtotal column
 * @method Requisiciondetalle findOneByIdpadre(int $idpadre) Return the first Requisiciondetalle filtered by the idpadre column
 * @method Requisiciondetalle findOneByRequisiciondetallecol(string $requisiciondetallecol) Return the first Requisiciondetalle filtered by the requisiciondetallecol column
 *
 * @method array findByIdrequisiciondetalle(int $idrequisiciondetalle) Return Requisiciondetalle objects filtered by the idrequisiciondetalle column
 * @method array findByIdrequisicion(int $idrequisicion) Return Requisiciondetalle objects filtered by the idrequisicion column
 * @method array findByIdproducto(int $idproducto) Return Requisiciondetalle objects filtered by the idproducto column
 * @method array findByRequisiciondetalleCantidad(double $requisiciondetalle_cantidad) Return Requisiciondetalle objects filtered by the requisiciondetalle_cantidad column
 * @method array findByRequisiciondetalleRevisada(boolean $requisiciondetalle_revisada) Return Requisiciondetalle objects filtered by the requisiciondetalle_revisada column
 * @method array findByRequisiciondetallePreciounitario(string $requisiciondetalle_preciounitario) Return Requisiciondetalle objects filtered by the requisiciondetalle_preciounitario column
 * @method array findByRequisiciondetalleSubtotal(string $requisiciondetalle_subtotal) Return Requisiciondetalle objects filtered by the requisiciondetalle_subtotal column
 * @method array findByIdpadre(int $idpadre) Return Requisiciondetalle objects filtered by the idpadre column
 * @method array findByRequisiciondetallecol(string $requisiciondetallecol) Return Requisiciondetalle objects filtered by the requisiciondetallecol column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseRequisiciondetalleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRequisiciondetalleQuery object.
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
            $modelName = 'Requisiciondetalle';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RequisiciondetalleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RequisiciondetalleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RequisiciondetalleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RequisiciondetalleQuery) {
            return $criteria;
        }
        $query = new RequisiciondetalleQuery(null, null, $modelAlias);

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
     * @return   Requisiciondetalle|Requisiciondetalle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RequisiciondetallePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RequisiciondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Requisiciondetalle A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdrequisiciondetalle($key, $con = null)
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
     * @return                 Requisiciondetalle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idrequisiciondetalle`, `idrequisicion`, `idproducto`, `requisiciondetalle_cantidad`, `requisiciondetalle_revisada`, `requisiciondetalle_preciounitario`, `requisiciondetalle_subtotal`, `idpadre`, `requisiciondetallecol` FROM `requisiciondetalle` WHERE `idrequisiciondetalle` = :p0';
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
            $obj = new Requisiciondetalle();
            $obj->hydrate($row);
            RequisiciondetallePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Requisiciondetalle|Requisiciondetalle[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Requisiciondetalle[]|mixed the list of results, formatted by the current formatter
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
     * @return RequisiciondetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RequisiciondetallePeer::IDREQUISICIONDETALLE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RequisiciondetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RequisiciondetallePeer::IDREQUISICIONDETALLE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idrequisiciondetalle column
     *
     * Example usage:
     * <code>
     * $query->filterByIdrequisiciondetalle(1234); // WHERE idrequisiciondetalle = 1234
     * $query->filterByIdrequisiciondetalle(array(12, 34)); // WHERE idrequisiciondetalle IN (12, 34)
     * $query->filterByIdrequisiciondetalle(array('min' => 12)); // WHERE idrequisiciondetalle >= 12
     * $query->filterByIdrequisiciondetalle(array('max' => 12)); // WHERE idrequisiciondetalle <= 12
     * </code>
     *
     * @param     mixed $idrequisiciondetalle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RequisiciondetalleQuery The current query, for fluid interface
     */
    public function filterByIdrequisiciondetalle($idrequisiciondetalle = null, $comparison = null)
    {
        if (is_array($idrequisiciondetalle)) {
            $useMinMax = false;
            if (isset($idrequisiciondetalle['min'])) {
                $this->addUsingAlias(RequisiciondetallePeer::IDREQUISICIONDETALLE, $idrequisiciondetalle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idrequisiciondetalle['max'])) {
                $this->addUsingAlias(RequisiciondetallePeer::IDREQUISICIONDETALLE, $idrequisiciondetalle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RequisiciondetallePeer::IDREQUISICIONDETALLE, $idrequisiciondetalle, $comparison);
    }

    /**
     * Filter the query on the idrequisicion column
     *
     * Example usage:
     * <code>
     * $query->filterByIdrequisicion(1234); // WHERE idrequisicion = 1234
     * $query->filterByIdrequisicion(array(12, 34)); // WHERE idrequisicion IN (12, 34)
     * $query->filterByIdrequisicion(array('min' => 12)); // WHERE idrequisicion >= 12
     * $query->filterByIdrequisicion(array('max' => 12)); // WHERE idrequisicion <= 12
     * </code>
     *
     * @see       filterByRequisicion()
     *
     * @param     mixed $idrequisicion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RequisiciondetalleQuery The current query, for fluid interface
     */
    public function filterByIdrequisicion($idrequisicion = null, $comparison = null)
    {
        if (is_array($idrequisicion)) {
            $useMinMax = false;
            if (isset($idrequisicion['min'])) {
                $this->addUsingAlias(RequisiciondetallePeer::IDREQUISICION, $idrequisicion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idrequisicion['max'])) {
                $this->addUsingAlias(RequisiciondetallePeer::IDREQUISICION, $idrequisicion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RequisiciondetallePeer::IDREQUISICION, $idrequisicion, $comparison);
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
     * @return RequisiciondetalleQuery The current query, for fluid interface
     */
    public function filterByIdproducto($idproducto = null, $comparison = null)
    {
        if (is_array($idproducto)) {
            $useMinMax = false;
            if (isset($idproducto['min'])) {
                $this->addUsingAlias(RequisiciondetallePeer::IDPRODUCTO, $idproducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproducto['max'])) {
                $this->addUsingAlias(RequisiciondetallePeer::IDPRODUCTO, $idproducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RequisiciondetallePeer::IDPRODUCTO, $idproducto, $comparison);
    }

    /**
     * Filter the query on the requisiciondetalle_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByRequisiciondetalleCantidad(1234); // WHERE requisiciondetalle_cantidad = 1234
     * $query->filterByRequisiciondetalleCantidad(array(12, 34)); // WHERE requisiciondetalle_cantidad IN (12, 34)
     * $query->filterByRequisiciondetalleCantidad(array('min' => 12)); // WHERE requisiciondetalle_cantidad >= 12
     * $query->filterByRequisiciondetalleCantidad(array('max' => 12)); // WHERE requisiciondetalle_cantidad <= 12
     * </code>
     *
     * @param     mixed $requisiciondetalleCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RequisiciondetalleQuery The current query, for fluid interface
     */
    public function filterByRequisiciondetalleCantidad($requisiciondetalleCantidad = null, $comparison = null)
    {
        if (is_array($requisiciondetalleCantidad)) {
            $useMinMax = false;
            if (isset($requisiciondetalleCantidad['min'])) {
                $this->addUsingAlias(RequisiciondetallePeer::REQUISICIONDETALLE_CANTIDAD, $requisiciondetalleCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($requisiciondetalleCantidad['max'])) {
                $this->addUsingAlias(RequisiciondetallePeer::REQUISICIONDETALLE_CANTIDAD, $requisiciondetalleCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RequisiciondetallePeer::REQUISICIONDETALLE_CANTIDAD, $requisiciondetalleCantidad, $comparison);
    }

    /**
     * Filter the query on the requisiciondetalle_revisada column
     *
     * Example usage:
     * <code>
     * $query->filterByRequisiciondetalleRevisada(true); // WHERE requisiciondetalle_revisada = true
     * $query->filterByRequisiciondetalleRevisada('yes'); // WHERE requisiciondetalle_revisada = true
     * </code>
     *
     * @param     boolean|string $requisiciondetalleRevisada The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RequisiciondetalleQuery The current query, for fluid interface
     */
    public function filterByRequisiciondetalleRevisada($requisiciondetalleRevisada = null, $comparison = null)
    {
        if (is_string($requisiciondetalleRevisada)) {
            $requisiciondetalleRevisada = in_array(strtolower($requisiciondetalleRevisada), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(RequisiciondetallePeer::REQUISICIONDETALLE_REVISADA, $requisiciondetalleRevisada, $comparison);
    }

    /**
     * Filter the query on the requisiciondetalle_preciounitario column
     *
     * Example usage:
     * <code>
     * $query->filterByRequisiciondetallePreciounitario(1234); // WHERE requisiciondetalle_preciounitario = 1234
     * $query->filterByRequisiciondetallePreciounitario(array(12, 34)); // WHERE requisiciondetalle_preciounitario IN (12, 34)
     * $query->filterByRequisiciondetallePreciounitario(array('min' => 12)); // WHERE requisiciondetalle_preciounitario >= 12
     * $query->filterByRequisiciondetallePreciounitario(array('max' => 12)); // WHERE requisiciondetalle_preciounitario <= 12
     * </code>
     *
     * @param     mixed $requisiciondetallePreciounitario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RequisiciondetalleQuery The current query, for fluid interface
     */
    public function filterByRequisiciondetallePreciounitario($requisiciondetallePreciounitario = null, $comparison = null)
    {
        if (is_array($requisiciondetallePreciounitario)) {
            $useMinMax = false;
            if (isset($requisiciondetallePreciounitario['min'])) {
                $this->addUsingAlias(RequisiciondetallePeer::REQUISICIONDETALLE_PRECIOUNITARIO, $requisiciondetallePreciounitario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($requisiciondetallePreciounitario['max'])) {
                $this->addUsingAlias(RequisiciondetallePeer::REQUISICIONDETALLE_PRECIOUNITARIO, $requisiciondetallePreciounitario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RequisiciondetallePeer::REQUISICIONDETALLE_PRECIOUNITARIO, $requisiciondetallePreciounitario, $comparison);
    }

    /**
     * Filter the query on the requisiciondetalle_subtotal column
     *
     * Example usage:
     * <code>
     * $query->filterByRequisiciondetalleSubtotal(1234); // WHERE requisiciondetalle_subtotal = 1234
     * $query->filterByRequisiciondetalleSubtotal(array(12, 34)); // WHERE requisiciondetalle_subtotal IN (12, 34)
     * $query->filterByRequisiciondetalleSubtotal(array('min' => 12)); // WHERE requisiciondetalle_subtotal >= 12
     * $query->filterByRequisiciondetalleSubtotal(array('max' => 12)); // WHERE requisiciondetalle_subtotal <= 12
     * </code>
     *
     * @param     mixed $requisiciondetalleSubtotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RequisiciondetalleQuery The current query, for fluid interface
     */
    public function filterByRequisiciondetalleSubtotal($requisiciondetalleSubtotal = null, $comparison = null)
    {
        if (is_array($requisiciondetalleSubtotal)) {
            $useMinMax = false;
            if (isset($requisiciondetalleSubtotal['min'])) {
                $this->addUsingAlias(RequisiciondetallePeer::REQUISICIONDETALLE_SUBTOTAL, $requisiciondetalleSubtotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($requisiciondetalleSubtotal['max'])) {
                $this->addUsingAlias(RequisiciondetallePeer::REQUISICIONDETALLE_SUBTOTAL, $requisiciondetalleSubtotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RequisiciondetallePeer::REQUISICIONDETALLE_SUBTOTAL, $requisiciondetalleSubtotal, $comparison);
    }

    /**
     * Filter the query on the idpadre column
     *
     * Example usage:
     * <code>
     * $query->filterByIdpadre(1234); // WHERE idpadre = 1234
     * $query->filterByIdpadre(array(12, 34)); // WHERE idpadre IN (12, 34)
     * $query->filterByIdpadre(array('min' => 12)); // WHERE idpadre >= 12
     * $query->filterByIdpadre(array('max' => 12)); // WHERE idpadre <= 12
     * </code>
     *
     * @see       filterByRequisiciondetalleRelatedByIdpadre()
     *
     * @param     mixed $idpadre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RequisiciondetalleQuery The current query, for fluid interface
     */
    public function filterByIdpadre($idpadre = null, $comparison = null)
    {
        if (is_array($idpadre)) {
            $useMinMax = false;
            if (isset($idpadre['min'])) {
                $this->addUsingAlias(RequisiciondetallePeer::IDPADRE, $idpadre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpadre['max'])) {
                $this->addUsingAlias(RequisiciondetallePeer::IDPADRE, $idpadre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RequisiciondetallePeer::IDPADRE, $idpadre, $comparison);
    }

    /**
     * Filter the query on the requisiciondetallecol column
     *
     * Example usage:
     * <code>
     * $query->filterByRequisiciondetallecol('fooValue');   // WHERE requisiciondetallecol = 'fooValue'
     * $query->filterByRequisiciondetallecol('%fooValue%'); // WHERE requisiciondetallecol LIKE '%fooValue%'
     * </code>
     *
     * @param     string $requisiciondetallecol The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RequisiciondetalleQuery The current query, for fluid interface
     */
    public function filterByRequisiciondetallecol($requisiciondetallecol = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($requisiciondetallecol)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $requisiciondetallecol)) {
                $requisiciondetallecol = str_replace('*', '%', $requisiciondetallecol);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RequisiciondetallePeer::REQUISICIONDETALLECOL, $requisiciondetallecol, $comparison);
    }

    /**
     * Filter the query by a related Requisiciondetalle object
     *
     * @param   Requisiciondetalle|PropelObjectCollection $requisiciondetalle The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RequisiciondetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRequisiciondetalleRelatedByIdpadre($requisiciondetalle, $comparison = null)
    {
        if ($requisiciondetalle instanceof Requisiciondetalle) {
            return $this
                ->addUsingAlias(RequisiciondetallePeer::IDPADRE, $requisiciondetalle->getIdrequisiciondetalle(), $comparison);
        } elseif ($requisiciondetalle instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RequisiciondetallePeer::IDPADRE, $requisiciondetalle->toKeyValue('PrimaryKey', 'Idrequisiciondetalle'), $comparison);
        } else {
            throw new PropelException('filterByRequisiciondetalleRelatedByIdpadre() only accepts arguments of type Requisiciondetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RequisiciondetalleRelatedByIdpadre relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RequisiciondetalleQuery The current query, for fluid interface
     */
    public function joinRequisiciondetalleRelatedByIdpadre($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RequisiciondetalleRelatedByIdpadre');

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
            $this->addJoinObject($join, 'RequisiciondetalleRelatedByIdpadre');
        }

        return $this;
    }

    /**
     * Use the RequisiciondetalleRelatedByIdpadre relation Requisiciondetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RequisiciondetalleQuery A secondary query class using the current class as primary query
     */
    public function useRequisiciondetalleRelatedByIdpadreQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRequisiciondetalleRelatedByIdpadre($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RequisiciondetalleRelatedByIdpadre', 'RequisiciondetalleQuery');
    }

    /**
     * Filter the query by a related Producto object
     *
     * @param   Producto|PropelObjectCollection $producto The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RequisiciondetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(RequisiciondetallePeer::IDPRODUCTO, $producto->getIdproducto(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RequisiciondetallePeer::IDPRODUCTO, $producto->toKeyValue('PrimaryKey', 'Idproducto'), $comparison);
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
     * @return RequisiciondetalleQuery The current query, for fluid interface
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
     * Filter the query by a related Requisicion object
     *
     * @param   Requisicion|PropelObjectCollection $requisicion The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RequisiciondetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRequisicion($requisicion, $comparison = null)
    {
        if ($requisicion instanceof Requisicion) {
            return $this
                ->addUsingAlias(RequisiciondetallePeer::IDREQUISICION, $requisicion->getIdrequisicion(), $comparison);
        } elseif ($requisicion instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RequisiciondetallePeer::IDREQUISICION, $requisicion->toKeyValue('PrimaryKey', 'Idrequisicion'), $comparison);
        } else {
            throw new PropelException('filterByRequisicion() only accepts arguments of type Requisicion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Requisicion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RequisiciondetalleQuery The current query, for fluid interface
     */
    public function joinRequisicion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Requisicion');

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
            $this->addJoinObject($join, 'Requisicion');
        }

        return $this;
    }

    /**
     * Use the Requisicion relation Requisicion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RequisicionQuery A secondary query class using the current class as primary query
     */
    public function useRequisicionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRequisicion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Requisicion', 'RequisicionQuery');
    }

    /**
     * Filter the query by a related Requisiciondetalle object
     *
     * @param   Requisiciondetalle|PropelObjectCollection $requisiciondetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RequisiciondetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRequisiciondetalleRelatedByIdrequisiciondetalle($requisiciondetalle, $comparison = null)
    {
        if ($requisiciondetalle instanceof Requisiciondetalle) {
            return $this
                ->addUsingAlias(RequisiciondetallePeer::IDREQUISICIONDETALLE, $requisiciondetalle->getIdpadre(), $comparison);
        } elseif ($requisiciondetalle instanceof PropelObjectCollection) {
            return $this
                ->useRequisiciondetalleRelatedByIdrequisiciondetalleQuery()
                ->filterByPrimaryKeys($requisiciondetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRequisiciondetalleRelatedByIdrequisiciondetalle() only accepts arguments of type Requisiciondetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RequisiciondetalleRelatedByIdrequisiciondetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RequisiciondetalleQuery The current query, for fluid interface
     */
    public function joinRequisiciondetalleRelatedByIdrequisiciondetalle($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RequisiciondetalleRelatedByIdrequisiciondetalle');

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
            $this->addJoinObject($join, 'RequisiciondetalleRelatedByIdrequisiciondetalle');
        }

        return $this;
    }

    /**
     * Use the RequisiciondetalleRelatedByIdrequisiciondetalle relation Requisiciondetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RequisiciondetalleQuery A secondary query class using the current class as primary query
     */
    public function useRequisiciondetalleRelatedByIdrequisiciondetalleQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRequisiciondetalleRelatedByIdrequisiciondetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RequisiciondetalleRelatedByIdrequisiciondetalle', 'RequisiciondetalleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Requisiciondetalle $requisiciondetalle Object to remove from the list of results
     *
     * @return RequisiciondetalleQuery The current query, for fluid interface
     */
    public function prune($requisiciondetalle = null)
    {
        if ($requisiciondetalle) {
            $this->addUsingAlias(RequisiciondetallePeer::IDREQUISICIONDETALLE, $requisiciondetalle->getIdrequisiciondetalle(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
