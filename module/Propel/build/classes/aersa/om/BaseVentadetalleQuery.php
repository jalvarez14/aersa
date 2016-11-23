<?php


/**
 * Base class that represents a query for the 'ventadetalle' table.
 *
 *
 *
 * @method VentadetalleQuery orderByIdventadetalle($order = Criteria::ASC) Order by the idventadetalle column
 * @method VentadetalleQuery orderByIdventa($order = Criteria::ASC) Order by the idventa column
 * @method VentadetalleQuery orderByIdalmacen($order = Criteria::ASC) Order by the idalmacen column
 * @method VentadetalleQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 * @method VentadetalleQuery orderByVentadetalleCantidad($order = Criteria::ASC) Order by the ventadetalle_cantidad column
 * @method VentadetalleQuery orderByVentadetalleSubtotal($order = Criteria::ASC) Order by the ventadetalle_subtotal column
 * @method VentadetalleQuery orderByIdpadre($order = Criteria::ASC) Order by the idpadre column
 * @method VentadetalleQuery orderByVentadetalleRevisada($order = Criteria::ASC) Order by the ventadetalle_revisada column
 * @method VentadetalleQuery orderByVentadetalleContable($order = Criteria::ASC) Order by the ventadetalle_contable column
 *
 * @method VentadetalleQuery groupByIdventadetalle() Group by the idventadetalle column
 * @method VentadetalleQuery groupByIdventa() Group by the idventa column
 * @method VentadetalleQuery groupByIdalmacen() Group by the idalmacen column
 * @method VentadetalleQuery groupByIdproducto() Group by the idproducto column
 * @method VentadetalleQuery groupByVentadetalleCantidad() Group by the ventadetalle_cantidad column
 * @method VentadetalleQuery groupByVentadetalleSubtotal() Group by the ventadetalle_subtotal column
 * @method VentadetalleQuery groupByIdpadre() Group by the idpadre column
 * @method VentadetalleQuery groupByVentadetalleRevisada() Group by the ventadetalle_revisada column
 * @method VentadetalleQuery groupByVentadetalleContable() Group by the ventadetalle_contable column
 *
 * @method VentadetalleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method VentadetalleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method VentadetalleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Ventadetalle findOne(PropelPDO $con = null) Return the first Ventadetalle matching the query
 * @method Ventadetalle findOneOrCreate(PropelPDO $con = null) Return the first Ventadetalle matching the query, or a new Ventadetalle object populated from the query conditions when no match is found
 *
 * @method Ventadetalle findOneByIdventa(int $idventa) Return the first Ventadetalle filtered by the idventa column
 * @method Ventadetalle findOneByIdalmacen(int $idalmacen) Return the first Ventadetalle filtered by the idalmacen column
 * @method Ventadetalle findOneByIdproducto(int $idproducto) Return the first Ventadetalle filtered by the idproducto column
 * @method Ventadetalle findOneByVentadetalleCantidad(double $ventadetalle_cantidad) Return the first Ventadetalle filtered by the ventadetalle_cantidad column
 * @method Ventadetalle findOneByVentadetalleSubtotal(string $ventadetalle_subtotal) Return the first Ventadetalle filtered by the ventadetalle_subtotal column
 * @method Ventadetalle findOneByIdpadre(int $idpadre) Return the first Ventadetalle filtered by the idpadre column
 * @method Ventadetalle findOneByVentadetalleRevisada(boolean $ventadetalle_revisada) Return the first Ventadetalle filtered by the ventadetalle_revisada column
 * @method Ventadetalle findOneByVentadetalleContable(boolean $ventadetalle_contable) Return the first Ventadetalle filtered by the ventadetalle_contable column
 *
 * @method array findByIdventadetalle(int $idventadetalle) Return Ventadetalle objects filtered by the idventadetalle column
 * @method array findByIdventa(int $idventa) Return Ventadetalle objects filtered by the idventa column
 * @method array findByIdalmacen(int $idalmacen) Return Ventadetalle objects filtered by the idalmacen column
 * @method array findByIdproducto(int $idproducto) Return Ventadetalle objects filtered by the idproducto column
 * @method array findByVentadetalleCantidad(double $ventadetalle_cantidad) Return Ventadetalle objects filtered by the ventadetalle_cantidad column
 * @method array findByVentadetalleSubtotal(string $ventadetalle_subtotal) Return Ventadetalle objects filtered by the ventadetalle_subtotal column
 * @method array findByIdpadre(int $idpadre) Return Ventadetalle objects filtered by the idpadre column
 * @method array findByVentadetalleRevisada(boolean $ventadetalle_revisada) Return Ventadetalle objects filtered by the ventadetalle_revisada column
 * @method array findByVentadetalleContable(boolean $ventadetalle_contable) Return Ventadetalle objects filtered by the ventadetalle_contable column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseVentadetalleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseVentadetalleQuery object.
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
            $modelName = 'Ventadetalle';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new VentadetalleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   VentadetalleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return VentadetalleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof VentadetalleQuery) {
            return $criteria;
        }
        $query = new VentadetalleQuery(null, null, $modelAlias);

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
     * @return   Ventadetalle|Ventadetalle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = VentadetallePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(VentadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Ventadetalle A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdventadetalle($key, $con = null)
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
     * @return                 Ventadetalle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idventadetalle`, `idventa`, `idalmacen`, `idproducto`, `ventadetalle_cantidad`, `ventadetalle_subtotal`, `idpadre`, `ventadetalle_revisada`, `ventadetalle_contable` FROM `ventadetalle` WHERE `idventadetalle` = :p0';
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
            $obj = new Ventadetalle();
            $obj->hydrate($row);
            VentadetallePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Ventadetalle|Ventadetalle[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Ventadetalle[]|mixed the list of results, formatted by the current formatter
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
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(VentadetallePeer::IDVENTADETALLE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(VentadetallePeer::IDVENTADETALLE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idventadetalle column
     *
     * Example usage:
     * <code>
     * $query->filterByIdventadetalle(1234); // WHERE idventadetalle = 1234
     * $query->filterByIdventadetalle(array(12, 34)); // WHERE idventadetalle IN (12, 34)
     * $query->filterByIdventadetalle(array('min' => 12)); // WHERE idventadetalle >= 12
     * $query->filterByIdventadetalle(array('max' => 12)); // WHERE idventadetalle <= 12
     * </code>
     *
     * @param     mixed $idventadetalle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function filterByIdventadetalle($idventadetalle = null, $comparison = null)
    {
        if (is_array($idventadetalle)) {
            $useMinMax = false;
            if (isset($idventadetalle['min'])) {
                $this->addUsingAlias(VentadetallePeer::IDVENTADETALLE, $idventadetalle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idventadetalle['max'])) {
                $this->addUsingAlias(VentadetallePeer::IDVENTADETALLE, $idventadetalle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentadetallePeer::IDVENTADETALLE, $idventadetalle, $comparison);
    }

    /**
     * Filter the query on the idventa column
     *
     * Example usage:
     * <code>
     * $query->filterByIdventa(1234); // WHERE idventa = 1234
     * $query->filterByIdventa(array(12, 34)); // WHERE idventa IN (12, 34)
     * $query->filterByIdventa(array('min' => 12)); // WHERE idventa >= 12
     * $query->filterByIdventa(array('max' => 12)); // WHERE idventa <= 12
     * </code>
     *
     * @param     mixed $idventa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function filterByIdventa($idventa = null, $comparison = null)
    {
        if (is_array($idventa)) {
            $useMinMax = false;
            if (isset($idventa['min'])) {
                $this->addUsingAlias(VentadetallePeer::IDVENTA, $idventa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idventa['max'])) {
                $this->addUsingAlias(VentadetallePeer::IDVENTA, $idventa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentadetallePeer::IDVENTA, $idventa, $comparison);
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
     * @param     mixed $idalmacen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function filterByIdalmacen($idalmacen = null, $comparison = null)
    {
        if (is_array($idalmacen)) {
            $useMinMax = false;
            if (isset($idalmacen['min'])) {
                $this->addUsingAlias(VentadetallePeer::IDALMACEN, $idalmacen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idalmacen['max'])) {
                $this->addUsingAlias(VentadetallePeer::IDALMACEN, $idalmacen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentadetallePeer::IDALMACEN, $idalmacen, $comparison);
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
     * @param     mixed $idproducto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function filterByIdproducto($idproducto = null, $comparison = null)
    {
        if (is_array($idproducto)) {
            $useMinMax = false;
            if (isset($idproducto['min'])) {
                $this->addUsingAlias(VentadetallePeer::IDPRODUCTO, $idproducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproducto['max'])) {
                $this->addUsingAlias(VentadetallePeer::IDPRODUCTO, $idproducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentadetallePeer::IDPRODUCTO, $idproducto, $comparison);
    }

    /**
     * Filter the query on the ventadetalle_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByVentadetalleCantidad(1234); // WHERE ventadetalle_cantidad = 1234
     * $query->filterByVentadetalleCantidad(array(12, 34)); // WHERE ventadetalle_cantidad IN (12, 34)
     * $query->filterByVentadetalleCantidad(array('min' => 12)); // WHERE ventadetalle_cantidad >= 12
     * $query->filterByVentadetalleCantidad(array('max' => 12)); // WHERE ventadetalle_cantidad <= 12
     * </code>
     *
     * @param     mixed $ventadetalleCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function filterByVentadetalleCantidad($ventadetalleCantidad = null, $comparison = null)
    {
        if (is_array($ventadetalleCantidad)) {
            $useMinMax = false;
            if (isset($ventadetalleCantidad['min'])) {
                $this->addUsingAlias(VentadetallePeer::VENTADETALLE_CANTIDAD, $ventadetalleCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ventadetalleCantidad['max'])) {
                $this->addUsingAlias(VentadetallePeer::VENTADETALLE_CANTIDAD, $ventadetalleCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentadetallePeer::VENTADETALLE_CANTIDAD, $ventadetalleCantidad, $comparison);
    }

    /**
     * Filter the query on the ventadetalle_subtotal column
     *
     * Example usage:
     * <code>
     * $query->filterByVentadetalleSubtotal(1234); // WHERE ventadetalle_subtotal = 1234
     * $query->filterByVentadetalleSubtotal(array(12, 34)); // WHERE ventadetalle_subtotal IN (12, 34)
     * $query->filterByVentadetalleSubtotal(array('min' => 12)); // WHERE ventadetalle_subtotal >= 12
     * $query->filterByVentadetalleSubtotal(array('max' => 12)); // WHERE ventadetalle_subtotal <= 12
     * </code>
     *
     * @param     mixed $ventadetalleSubtotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function filterByVentadetalleSubtotal($ventadetalleSubtotal = null, $comparison = null)
    {
        if (is_array($ventadetalleSubtotal)) {
            $useMinMax = false;
            if (isset($ventadetalleSubtotal['min'])) {
                $this->addUsingAlias(VentadetallePeer::VENTADETALLE_SUBTOTAL, $ventadetalleSubtotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ventadetalleSubtotal['max'])) {
                $this->addUsingAlias(VentadetallePeer::VENTADETALLE_SUBTOTAL, $ventadetalleSubtotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentadetallePeer::VENTADETALLE_SUBTOTAL, $ventadetalleSubtotal, $comparison);
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
     * @param     mixed $idpadre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function filterByIdpadre($idpadre = null, $comparison = null)
    {
        if (is_array($idpadre)) {
            $useMinMax = false;
            if (isset($idpadre['min'])) {
                $this->addUsingAlias(VentadetallePeer::IDPADRE, $idpadre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpadre['max'])) {
                $this->addUsingAlias(VentadetallePeer::IDPADRE, $idpadre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentadetallePeer::IDPADRE, $idpadre, $comparison);
    }

    /**
     * Filter the query on the ventadetalle_revisada column
     *
     * Example usage:
     * <code>
     * $query->filterByVentadetalleRevisada(true); // WHERE ventadetalle_revisada = true
     * $query->filterByVentadetalleRevisada('yes'); // WHERE ventadetalle_revisada = true
     * </code>
     *
     * @param     boolean|string $ventadetalleRevisada The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function filterByVentadetalleRevisada($ventadetalleRevisada = null, $comparison = null)
    {
        if (is_string($ventadetalleRevisada)) {
            $ventadetalleRevisada = in_array(strtolower($ventadetalleRevisada), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(VentadetallePeer::VENTADETALLE_REVISADA, $ventadetalleRevisada, $comparison);
    }

    /**
     * Filter the query on the ventadetalle_contable column
     *
     * Example usage:
     * <code>
     * $query->filterByVentadetalleContable(true); // WHERE ventadetalle_contable = true
     * $query->filterByVentadetalleContable('yes'); // WHERE ventadetalle_contable = true
     * </code>
     *
     * @param     boolean|string $ventadetalleContable The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function filterByVentadetalleContable($ventadetalleContable = null, $comparison = null)
    {
        if (is_string($ventadetalleContable)) {
            $ventadetalleContable = in_array(strtolower($ventadetalleContable), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(VentadetallePeer::VENTADETALLE_CONTABLE, $ventadetalleContable, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Ventadetalle $ventadetalle Object to remove from the list of results
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function prune($ventadetalle = null)
    {
        if ($ventadetalle) {
            $this->addUsingAlias(VentadetallePeer::IDVENTADETALLE, $ventadetalle->getIdventadetalle(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
