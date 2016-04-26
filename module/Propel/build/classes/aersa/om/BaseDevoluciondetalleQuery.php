<?php


/**
 * Base class that represents a query for the 'devoluciondetalle' table.
 *
 *
 *
 * @method DevoluciondetalleQuery orderByIddevoluciondetalle($order = Criteria::ASC) Order by the iddevoluciondetalle column
 * @method DevoluciondetalleQuery orderByIddevolucion($order = Criteria::ASC) Order by the iddevolucion column
 * @method DevoluciondetalleQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 * @method DevoluciondetalleQuery orderByIdalmacen($order = Criteria::ASC) Order by the idalmacen column
 * @method DevoluciondetalleQuery orderByDevoluciondetalleCantidad($order = Criteria::ASC) Order by the devoluciondetalle_cantidad column
 * @method DevoluciondetalleQuery orderByDevoluciondetalleRevisada($order = Criteria::ASC) Order by the devoluciondetalle_revisada column
 * @method DevoluciondetalleQuery orderByDevoluciondetalleSubtotal($order = Criteria::ASC) Order by the devoluciondetalle_subtotal column
 * @method DevoluciondetalleQuery orderByDevoluciondetalleIeps($order = Criteria::ASC) Order by the devoluciondetalle_ieps column
 * @method DevoluciondetalleQuery orderByDevoluciondetalleDescuento($order = Criteria::ASC) Order by the devoluciondetalle_descuento column
 *
 * @method DevoluciondetalleQuery groupByIddevoluciondetalle() Group by the iddevoluciondetalle column
 * @method DevoluciondetalleQuery groupByIddevolucion() Group by the iddevolucion column
 * @method DevoluciondetalleQuery groupByIdproducto() Group by the idproducto column
 * @method DevoluciondetalleQuery groupByIdalmacen() Group by the idalmacen column
 * @method DevoluciondetalleQuery groupByDevoluciondetalleCantidad() Group by the devoluciondetalle_cantidad column
 * @method DevoluciondetalleQuery groupByDevoluciondetalleRevisada() Group by the devoluciondetalle_revisada column
 * @method DevoluciondetalleQuery groupByDevoluciondetalleSubtotal() Group by the devoluciondetalle_subtotal column
 * @method DevoluciondetalleQuery groupByDevoluciondetalleIeps() Group by the devoluciondetalle_ieps column
 * @method DevoluciondetalleQuery groupByDevoluciondetalleDescuento() Group by the devoluciondetalle_descuento column
 *
 * @method DevoluciondetalleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method DevoluciondetalleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method DevoluciondetalleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method DevoluciondetalleQuery leftJoinAlmacen($relationAlias = null) Adds a LEFT JOIN clause to the query using the Almacen relation
 * @method DevoluciondetalleQuery rightJoinAlmacen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Almacen relation
 * @method DevoluciondetalleQuery innerJoinAlmacen($relationAlias = null) Adds a INNER JOIN clause to the query using the Almacen relation
 *
 * @method DevoluciondetalleQuery leftJoinDevolucion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Devolucion relation
 * @method DevoluciondetalleQuery rightJoinDevolucion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Devolucion relation
 * @method DevoluciondetalleQuery innerJoinDevolucion($relationAlias = null) Adds a INNER JOIN clause to the query using the Devolucion relation
 *
 * @method DevoluciondetalleQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method DevoluciondetalleQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method DevoluciondetalleQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method Devoluciondetalle findOne(PropelPDO $con = null) Return the first Devoluciondetalle matching the query
 * @method Devoluciondetalle findOneOrCreate(PropelPDO $con = null) Return the first Devoluciondetalle matching the query, or a new Devoluciondetalle object populated from the query conditions when no match is found
 *
 * @method Devoluciondetalle findOneByIddevolucion(int $iddevolucion) Return the first Devoluciondetalle filtered by the iddevolucion column
 * @method Devoluciondetalle findOneByIdproducto(int $idproducto) Return the first Devoluciondetalle filtered by the idproducto column
 * @method Devoluciondetalle findOneByIdalmacen(int $idalmacen) Return the first Devoluciondetalle filtered by the idalmacen column
 * @method Devoluciondetalle findOneByDevoluciondetalleCantidad(double $devoluciondetalle_cantidad) Return the first Devoluciondetalle filtered by the devoluciondetalle_cantidad column
 * @method Devoluciondetalle findOneByDevoluciondetalleRevisada(boolean $devoluciondetalle_revisada) Return the first Devoluciondetalle filtered by the devoluciondetalle_revisada column
 * @method Devoluciondetalle findOneByDevoluciondetalleSubtotal(string $devoluciondetalle_subtotal) Return the first Devoluciondetalle filtered by the devoluciondetalle_subtotal column
 * @method Devoluciondetalle findOneByDevoluciondetalleIeps(double $devoluciondetalle_ieps) Return the first Devoluciondetalle filtered by the devoluciondetalle_ieps column
 * @method Devoluciondetalle findOneByDevoluciondetalleDescuento(double $devoluciondetalle_descuento) Return the first Devoluciondetalle filtered by the devoluciondetalle_descuento column
 *
 * @method array findByIddevoluciondetalle(int $iddevoluciondetalle) Return Devoluciondetalle objects filtered by the iddevoluciondetalle column
 * @method array findByIddevolucion(int $iddevolucion) Return Devoluciondetalle objects filtered by the iddevolucion column
 * @method array findByIdproducto(int $idproducto) Return Devoluciondetalle objects filtered by the idproducto column
 * @method array findByIdalmacen(int $idalmacen) Return Devoluciondetalle objects filtered by the idalmacen column
 * @method array findByDevoluciondetalleCantidad(double $devoluciondetalle_cantidad) Return Devoluciondetalle objects filtered by the devoluciondetalle_cantidad column
 * @method array findByDevoluciondetalleRevisada(boolean $devoluciondetalle_revisada) Return Devoluciondetalle objects filtered by the devoluciondetalle_revisada column
 * @method array findByDevoluciondetalleSubtotal(string $devoluciondetalle_subtotal) Return Devoluciondetalle objects filtered by the devoluciondetalle_subtotal column
 * @method array findByDevoluciondetalleIeps(double $devoluciondetalle_ieps) Return Devoluciondetalle objects filtered by the devoluciondetalle_ieps column
 * @method array findByDevoluciondetalleDescuento(double $devoluciondetalle_descuento) Return Devoluciondetalle objects filtered by the devoluciondetalle_descuento column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseDevoluciondetalleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseDevoluciondetalleQuery object.
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
            $modelName = 'Devoluciondetalle';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DevoluciondetalleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   DevoluciondetalleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return DevoluciondetalleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DevoluciondetalleQuery) {
            return $criteria;
        }
        $query = new DevoluciondetalleQuery(null, null, $modelAlias);

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
     * @return   Devoluciondetalle|Devoluciondetalle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = DevoluciondetallePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(DevoluciondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Devoluciondetalle A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIddevoluciondetalle($key, $con = null)
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
     * @return                 Devoluciondetalle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `iddevoluciondetalle`, `iddevolucion`, `idproducto`, `idalmacen`, `devoluciondetalle_cantidad`, `devoluciondetalle_revisada`, `devoluciondetalle_subtotal`, `devoluciondetalle_ieps`, `devoluciondetalle_descuento` FROM `devoluciondetalle` WHERE `iddevoluciondetalle` = :p0';
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
            $obj = new Devoluciondetalle();
            $obj->hydrate($row);
            DevoluciondetallePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Devoluciondetalle|Devoluciondetalle[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Devoluciondetalle[]|mixed the list of results, formatted by the current formatter
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
     * @return DevoluciondetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(DevoluciondetallePeer::IDDEVOLUCIONDETALLE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return DevoluciondetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(DevoluciondetallePeer::IDDEVOLUCIONDETALLE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the iddevoluciondetalle column
     *
     * Example usage:
     * <code>
     * $query->filterByIddevoluciondetalle(1234); // WHERE iddevoluciondetalle = 1234
     * $query->filterByIddevoluciondetalle(array(12, 34)); // WHERE iddevoluciondetalle IN (12, 34)
     * $query->filterByIddevoluciondetalle(array('min' => 12)); // WHERE iddevoluciondetalle >= 12
     * $query->filterByIddevoluciondetalle(array('max' => 12)); // WHERE iddevoluciondetalle <= 12
     * </code>
     *
     * @param     mixed $iddevoluciondetalle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DevoluciondetalleQuery The current query, for fluid interface
     */
    public function filterByIddevoluciondetalle($iddevoluciondetalle = null, $comparison = null)
    {
        if (is_array($iddevoluciondetalle)) {
            $useMinMax = false;
            if (isset($iddevoluciondetalle['min'])) {
                $this->addUsingAlias(DevoluciondetallePeer::IDDEVOLUCIONDETALLE, $iddevoluciondetalle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iddevoluciondetalle['max'])) {
                $this->addUsingAlias(DevoluciondetallePeer::IDDEVOLUCIONDETALLE, $iddevoluciondetalle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DevoluciondetallePeer::IDDEVOLUCIONDETALLE, $iddevoluciondetalle, $comparison);
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
     * @return DevoluciondetalleQuery The current query, for fluid interface
     */
    public function filterByIddevolucion($iddevolucion = null, $comparison = null)
    {
        if (is_array($iddevolucion)) {
            $useMinMax = false;
            if (isset($iddevolucion['min'])) {
                $this->addUsingAlias(DevoluciondetallePeer::IDDEVOLUCION, $iddevolucion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iddevolucion['max'])) {
                $this->addUsingAlias(DevoluciondetallePeer::IDDEVOLUCION, $iddevolucion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DevoluciondetallePeer::IDDEVOLUCION, $iddevolucion, $comparison);
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
     * @return DevoluciondetalleQuery The current query, for fluid interface
     */
    public function filterByIdproducto($idproducto = null, $comparison = null)
    {
        if (is_array($idproducto)) {
            $useMinMax = false;
            if (isset($idproducto['min'])) {
                $this->addUsingAlias(DevoluciondetallePeer::IDPRODUCTO, $idproducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproducto['max'])) {
                $this->addUsingAlias(DevoluciondetallePeer::IDPRODUCTO, $idproducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DevoluciondetallePeer::IDPRODUCTO, $idproducto, $comparison);
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
     * @return DevoluciondetalleQuery The current query, for fluid interface
     */
    public function filterByIdalmacen($idalmacen = null, $comparison = null)
    {
        if (is_array($idalmacen)) {
            $useMinMax = false;
            if (isset($idalmacen['min'])) {
                $this->addUsingAlias(DevoluciondetallePeer::IDALMACEN, $idalmacen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idalmacen['max'])) {
                $this->addUsingAlias(DevoluciondetallePeer::IDALMACEN, $idalmacen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DevoluciondetallePeer::IDALMACEN, $idalmacen, $comparison);
    }

    /**
     * Filter the query on the devoluciondetalle_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByDevoluciondetalleCantidad(1234); // WHERE devoluciondetalle_cantidad = 1234
     * $query->filterByDevoluciondetalleCantidad(array(12, 34)); // WHERE devoluciondetalle_cantidad IN (12, 34)
     * $query->filterByDevoluciondetalleCantidad(array('min' => 12)); // WHERE devoluciondetalle_cantidad >= 12
     * $query->filterByDevoluciondetalleCantidad(array('max' => 12)); // WHERE devoluciondetalle_cantidad <= 12
     * </code>
     *
     * @param     mixed $devoluciondetalleCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DevoluciondetalleQuery The current query, for fluid interface
     */
    public function filterByDevoluciondetalleCantidad($devoluciondetalleCantidad = null, $comparison = null)
    {
        if (is_array($devoluciondetalleCantidad)) {
            $useMinMax = false;
            if (isset($devoluciondetalleCantidad['min'])) {
                $this->addUsingAlias(DevoluciondetallePeer::DEVOLUCIONDETALLE_CANTIDAD, $devoluciondetalleCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($devoluciondetalleCantidad['max'])) {
                $this->addUsingAlias(DevoluciondetallePeer::DEVOLUCIONDETALLE_CANTIDAD, $devoluciondetalleCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DevoluciondetallePeer::DEVOLUCIONDETALLE_CANTIDAD, $devoluciondetalleCantidad, $comparison);
    }

    /**
     * Filter the query on the devoluciondetalle_revisada column
     *
     * Example usage:
     * <code>
     * $query->filterByDevoluciondetalleRevisada(true); // WHERE devoluciondetalle_revisada = true
     * $query->filterByDevoluciondetalleRevisada('yes'); // WHERE devoluciondetalle_revisada = true
     * </code>
     *
     * @param     boolean|string $devoluciondetalleRevisada The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DevoluciondetalleQuery The current query, for fluid interface
     */
    public function filterByDevoluciondetalleRevisada($devoluciondetalleRevisada = null, $comparison = null)
    {
        if (is_string($devoluciondetalleRevisada)) {
            $devoluciondetalleRevisada = in_array(strtolower($devoluciondetalleRevisada), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(DevoluciondetallePeer::DEVOLUCIONDETALLE_REVISADA, $devoluciondetalleRevisada, $comparison);
    }

    /**
     * Filter the query on the devoluciondetalle_subtotal column
     *
     * Example usage:
     * <code>
     * $query->filterByDevoluciondetalleSubtotal(1234); // WHERE devoluciondetalle_subtotal = 1234
     * $query->filterByDevoluciondetalleSubtotal(array(12, 34)); // WHERE devoluciondetalle_subtotal IN (12, 34)
     * $query->filterByDevoluciondetalleSubtotal(array('min' => 12)); // WHERE devoluciondetalle_subtotal >= 12
     * $query->filterByDevoluciondetalleSubtotal(array('max' => 12)); // WHERE devoluciondetalle_subtotal <= 12
     * </code>
     *
     * @param     mixed $devoluciondetalleSubtotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DevoluciondetalleQuery The current query, for fluid interface
     */
    public function filterByDevoluciondetalleSubtotal($devoluciondetalleSubtotal = null, $comparison = null)
    {
        if (is_array($devoluciondetalleSubtotal)) {
            $useMinMax = false;
            if (isset($devoluciondetalleSubtotal['min'])) {
                $this->addUsingAlias(DevoluciondetallePeer::DEVOLUCIONDETALLE_SUBTOTAL, $devoluciondetalleSubtotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($devoluciondetalleSubtotal['max'])) {
                $this->addUsingAlias(DevoluciondetallePeer::DEVOLUCIONDETALLE_SUBTOTAL, $devoluciondetalleSubtotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DevoluciondetallePeer::DEVOLUCIONDETALLE_SUBTOTAL, $devoluciondetalleSubtotal, $comparison);
    }

    /**
     * Filter the query on the devoluciondetalle_ieps column
     *
     * Example usage:
     * <code>
     * $query->filterByDevoluciondetalleIeps(1234); // WHERE devoluciondetalle_ieps = 1234
     * $query->filterByDevoluciondetalleIeps(array(12, 34)); // WHERE devoluciondetalle_ieps IN (12, 34)
     * $query->filterByDevoluciondetalleIeps(array('min' => 12)); // WHERE devoluciondetalle_ieps >= 12
     * $query->filterByDevoluciondetalleIeps(array('max' => 12)); // WHERE devoluciondetalle_ieps <= 12
     * </code>
     *
     * @param     mixed $devoluciondetalleIeps The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DevoluciondetalleQuery The current query, for fluid interface
     */
    public function filterByDevoluciondetalleIeps($devoluciondetalleIeps = null, $comparison = null)
    {
        if (is_array($devoluciondetalleIeps)) {
            $useMinMax = false;
            if (isset($devoluciondetalleIeps['min'])) {
                $this->addUsingAlias(DevoluciondetallePeer::DEVOLUCIONDETALLE_IEPS, $devoluciondetalleIeps['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($devoluciondetalleIeps['max'])) {
                $this->addUsingAlias(DevoluciondetallePeer::DEVOLUCIONDETALLE_IEPS, $devoluciondetalleIeps['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DevoluciondetallePeer::DEVOLUCIONDETALLE_IEPS, $devoluciondetalleIeps, $comparison);
    }

    /**
     * Filter the query on the devoluciondetalle_descuento column
     *
     * Example usage:
     * <code>
     * $query->filterByDevoluciondetalleDescuento(1234); // WHERE devoluciondetalle_descuento = 1234
     * $query->filterByDevoluciondetalleDescuento(array(12, 34)); // WHERE devoluciondetalle_descuento IN (12, 34)
     * $query->filterByDevoluciondetalleDescuento(array('min' => 12)); // WHERE devoluciondetalle_descuento >= 12
     * $query->filterByDevoluciondetalleDescuento(array('max' => 12)); // WHERE devoluciondetalle_descuento <= 12
     * </code>
     *
     * @param     mixed $devoluciondetalleDescuento The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DevoluciondetalleQuery The current query, for fluid interface
     */
    public function filterByDevoluciondetalleDescuento($devoluciondetalleDescuento = null, $comparison = null)
    {
        if (is_array($devoluciondetalleDescuento)) {
            $useMinMax = false;
            if (isset($devoluciondetalleDescuento['min'])) {
                $this->addUsingAlias(DevoluciondetallePeer::DEVOLUCIONDETALLE_DESCUENTO, $devoluciondetalleDescuento['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($devoluciondetalleDescuento['max'])) {
                $this->addUsingAlias(DevoluciondetallePeer::DEVOLUCIONDETALLE_DESCUENTO, $devoluciondetalleDescuento['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DevoluciondetallePeer::DEVOLUCIONDETALLE_DESCUENTO, $devoluciondetalleDescuento, $comparison);
    }

    /**
     * Filter the query by a related Almacen object
     *
     * @param   Almacen|PropelObjectCollection $almacen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 DevoluciondetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAlmacen($almacen, $comparison = null)
    {
        if ($almacen instanceof Almacen) {
            return $this
                ->addUsingAlias(DevoluciondetallePeer::IDALMACEN, $almacen->getIdalmacen(), $comparison);
        } elseif ($almacen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DevoluciondetallePeer::IDALMACEN, $almacen->toKeyValue('PrimaryKey', 'Idalmacen'), $comparison);
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
     * @return DevoluciondetalleQuery The current query, for fluid interface
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
     * Filter the query by a related Devolucion object
     *
     * @param   Devolucion|PropelObjectCollection $devolucion The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 DevoluciondetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDevolucion($devolucion, $comparison = null)
    {
        if ($devolucion instanceof Devolucion) {
            return $this
                ->addUsingAlias(DevoluciondetallePeer::IDDEVOLUCION, $devolucion->getIddevolucion(), $comparison);
        } elseif ($devolucion instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DevoluciondetallePeer::IDDEVOLUCION, $devolucion->toKeyValue('PrimaryKey', 'Iddevolucion'), $comparison);
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
     * @return DevoluciondetalleQuery The current query, for fluid interface
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
     * Filter the query by a related Producto object
     *
     * @param   Producto|PropelObjectCollection $producto The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 DevoluciondetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(DevoluciondetallePeer::IDPRODUCTO, $producto->getIdproducto(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DevoluciondetallePeer::IDPRODUCTO, $producto->toKeyValue('PrimaryKey', 'Idproducto'), $comparison);
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
     * @return DevoluciondetalleQuery The current query, for fluid interface
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
     * @param   Devoluciondetalle $devoluciondetalle Object to remove from the list of results
     *
     * @return DevoluciondetalleQuery The current query, for fluid interface
     */
    public function prune($devoluciondetalle = null)
    {
        if ($devoluciondetalle) {
            $this->addUsingAlias(DevoluciondetallePeer::IDDEVOLUCIONDETALLE, $devoluciondetalle->getIddevoluciondetalle(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
