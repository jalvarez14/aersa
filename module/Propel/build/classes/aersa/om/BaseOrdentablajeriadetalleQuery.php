<?php


/**
 * Base class that represents a query for the 'ordentablajeriadetalle' table.
 *
 *
 *
 * @method OrdentablajeriadetalleQuery orderByIdordentablajeriadetalle($order = Criteria::ASC) Order by the idordentablajeriadetalle column
 * @method OrdentablajeriadetalleQuery orderByIdordentablajeria($order = Criteria::ASC) Order by the idordentablajeria column
 * @method OrdentablajeriadetalleQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 * @method OrdentablajeriadetalleQuery orderByOrdentablajeriadetalleCantidad($order = Criteria::ASC) Order by the ordentablajeriadetalle_cantidad column
 * @method OrdentablajeriadetalleQuery orderByOrdentablajeriadetallePesoporcion($order = Criteria::ASC) Order by the ordentablajeriadetalle_pesoporcion column
 * @method OrdentablajeriadetalleQuery orderByOrdentablajeriadetallePrecioporcion($order = Criteria::ASC) Order by the ordentablajeriadetalle_precioporcion column
 * @method OrdentablajeriadetalleQuery orderByOrdentablajeriadetallePesototal($order = Criteria::ASC) Order by the ordentablajeriadetalle_pesototal column
 * @method OrdentablajeriadetalleQuery orderByOrdentablajeriadetalleSubtotal($order = Criteria::ASC) Order by the ordentablajeriadetalle_subtotal column
 * @method OrdentablajeriadetalleQuery orderByOrdentablajeriadetalleRevisada($order = Criteria::ASC) Order by the ordentablajeriadetalle_revisada column
 *
 * @method OrdentablajeriadetalleQuery groupByIdordentablajeriadetalle() Group by the idordentablajeriadetalle column
 * @method OrdentablajeriadetalleQuery groupByIdordentablajeria() Group by the idordentablajeria column
 * @method OrdentablajeriadetalleQuery groupByIdproducto() Group by the idproducto column
 * @method OrdentablajeriadetalleQuery groupByOrdentablajeriadetalleCantidad() Group by the ordentablajeriadetalle_cantidad column
 * @method OrdentablajeriadetalleQuery groupByOrdentablajeriadetallePesoporcion() Group by the ordentablajeriadetalle_pesoporcion column
 * @method OrdentablajeriadetalleQuery groupByOrdentablajeriadetallePrecioporcion() Group by the ordentablajeriadetalle_precioporcion column
 * @method OrdentablajeriadetalleQuery groupByOrdentablajeriadetallePesototal() Group by the ordentablajeriadetalle_pesototal column
 * @method OrdentablajeriadetalleQuery groupByOrdentablajeriadetalleSubtotal() Group by the ordentablajeriadetalle_subtotal column
 * @method OrdentablajeriadetalleQuery groupByOrdentablajeriadetalleRevisada() Group by the ordentablajeriadetalle_revisada column
 *
 * @method OrdentablajeriadetalleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method OrdentablajeriadetalleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method OrdentablajeriadetalleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method OrdentablajeriadetalleQuery leftJoinOrdentablajeria($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ordentablajeria relation
 * @method OrdentablajeriadetalleQuery rightJoinOrdentablajeria($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ordentablajeria relation
 * @method OrdentablajeriadetalleQuery innerJoinOrdentablajeria($relationAlias = null) Adds a INNER JOIN clause to the query using the Ordentablajeria relation
 *
 * @method OrdentablajeriadetalleQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method OrdentablajeriadetalleQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method OrdentablajeriadetalleQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method Ordentablajeriadetalle findOne(PropelPDO $con = null) Return the first Ordentablajeriadetalle matching the query
 * @method Ordentablajeriadetalle findOneOrCreate(PropelPDO $con = null) Return the first Ordentablajeriadetalle matching the query, or a new Ordentablajeriadetalle object populated from the query conditions when no match is found
 *
 * @method Ordentablajeriadetalle findOneByIdordentablajeria(int $idordentablajeria) Return the first Ordentablajeriadetalle filtered by the idordentablajeria column
 * @method Ordentablajeriadetalle findOneByIdproducto(int $idproducto) Return the first Ordentablajeriadetalle filtered by the idproducto column
 * @method Ordentablajeriadetalle findOneByOrdentablajeriadetalleCantidad(double $ordentablajeriadetalle_cantidad) Return the first Ordentablajeriadetalle filtered by the ordentablajeriadetalle_cantidad column
 * @method Ordentablajeriadetalle findOneByOrdentablajeriadetallePesoporcion(double $ordentablajeriadetalle_pesoporcion) Return the first Ordentablajeriadetalle filtered by the ordentablajeriadetalle_pesoporcion column
 * @method Ordentablajeriadetalle findOneByOrdentablajeriadetallePrecioporcion(string $ordentablajeriadetalle_precioporcion) Return the first Ordentablajeriadetalle filtered by the ordentablajeriadetalle_precioporcion column
 * @method Ordentablajeriadetalle findOneByOrdentablajeriadetallePesototal(double $ordentablajeriadetalle_pesototal) Return the first Ordentablajeriadetalle filtered by the ordentablajeriadetalle_pesototal column
 * @method Ordentablajeriadetalle findOneByOrdentablajeriadetalleSubtotal(string $ordentablajeriadetalle_subtotal) Return the first Ordentablajeriadetalle filtered by the ordentablajeriadetalle_subtotal column
 * @method Ordentablajeriadetalle findOneByOrdentablajeriadetalleRevisada(boolean $ordentablajeriadetalle_revisada) Return the first Ordentablajeriadetalle filtered by the ordentablajeriadetalle_revisada column
 *
 * @method array findByIdordentablajeriadetalle(int $idordentablajeriadetalle) Return Ordentablajeriadetalle objects filtered by the idordentablajeriadetalle column
 * @method array findByIdordentablajeria(int $idordentablajeria) Return Ordentablajeriadetalle objects filtered by the idordentablajeria column
 * @method array findByIdproducto(int $idproducto) Return Ordentablajeriadetalle objects filtered by the idproducto column
 * @method array findByOrdentablajeriadetalleCantidad(double $ordentablajeriadetalle_cantidad) Return Ordentablajeriadetalle objects filtered by the ordentablajeriadetalle_cantidad column
 * @method array findByOrdentablajeriadetallePesoporcion(double $ordentablajeriadetalle_pesoporcion) Return Ordentablajeriadetalle objects filtered by the ordentablajeriadetalle_pesoporcion column
 * @method array findByOrdentablajeriadetallePrecioporcion(string $ordentablajeriadetalle_precioporcion) Return Ordentablajeriadetalle objects filtered by the ordentablajeriadetalle_precioporcion column
 * @method array findByOrdentablajeriadetallePesototal(double $ordentablajeriadetalle_pesototal) Return Ordentablajeriadetalle objects filtered by the ordentablajeriadetalle_pesototal column
 * @method array findByOrdentablajeriadetalleSubtotal(string $ordentablajeriadetalle_subtotal) Return Ordentablajeriadetalle objects filtered by the ordentablajeriadetalle_subtotal column
 * @method array findByOrdentablajeriadetalleRevisada(boolean $ordentablajeriadetalle_revisada) Return Ordentablajeriadetalle objects filtered by the ordentablajeriadetalle_revisada column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseOrdentablajeriadetalleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseOrdentablajeriadetalleQuery object.
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
            $modelName = 'Ordentablajeriadetalle';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OrdentablajeriadetalleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   OrdentablajeriadetalleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return OrdentablajeriadetalleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OrdentablajeriadetalleQuery) {
            return $criteria;
        }
        $query = new OrdentablajeriadetalleQuery(null, null, $modelAlias);

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
     * @return   Ordentablajeriadetalle|Ordentablajeriadetalle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = OrdentablajeriadetallePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(OrdentablajeriadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Ordentablajeriadetalle A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdordentablajeriadetalle($key, $con = null)
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
     * @return                 Ordentablajeriadetalle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idordentablajeriadetalle`, `idordentablajeria`, `idproducto`, `ordentablajeriadetalle_cantidad`, `ordentablajeriadetalle_pesoporcion`, `ordentablajeriadetalle_precioporcion`, `ordentablajeriadetalle_pesototal`, `ordentablajeriadetalle_subtotal`, `ordentablajeriadetalle_revisada` FROM `ordentablajeriadetalle` WHERE `idordentablajeriadetalle` = :p0';
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
            $obj = new Ordentablajeriadetalle();
            $obj->hydrate($row);
            OrdentablajeriadetallePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Ordentablajeriadetalle|Ordentablajeriadetalle[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Ordentablajeriadetalle[]|mixed the list of results, formatted by the current formatter
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
     * @return OrdentablajeriadetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(OrdentablajeriadetallePeer::IDORDENTABLAJERIADETALLE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return OrdentablajeriadetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(OrdentablajeriadetallePeer::IDORDENTABLAJERIADETALLE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idordentablajeriadetalle column
     *
     * Example usage:
     * <code>
     * $query->filterByIdordentablajeriadetalle(1234); // WHERE idordentablajeriadetalle = 1234
     * $query->filterByIdordentablajeriadetalle(array(12, 34)); // WHERE idordentablajeriadetalle IN (12, 34)
     * $query->filterByIdordentablajeriadetalle(array('min' => 12)); // WHERE idordentablajeriadetalle >= 12
     * $query->filterByIdordentablajeriadetalle(array('max' => 12)); // WHERE idordentablajeriadetalle <= 12
     * </code>
     *
     * @param     mixed $idordentablajeriadetalle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriadetalleQuery The current query, for fluid interface
     */
    public function filterByIdordentablajeriadetalle($idordentablajeriadetalle = null, $comparison = null)
    {
        if (is_array($idordentablajeriadetalle)) {
            $useMinMax = false;
            if (isset($idordentablajeriadetalle['min'])) {
                $this->addUsingAlias(OrdentablajeriadetallePeer::IDORDENTABLAJERIADETALLE, $idordentablajeriadetalle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idordentablajeriadetalle['max'])) {
                $this->addUsingAlias(OrdentablajeriadetallePeer::IDORDENTABLAJERIADETALLE, $idordentablajeriadetalle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriadetallePeer::IDORDENTABLAJERIADETALLE, $idordentablajeriadetalle, $comparison);
    }

    /**
     * Filter the query on the idordentablajeria column
     *
     * Example usage:
     * <code>
     * $query->filterByIdordentablajeria(1234); // WHERE idordentablajeria = 1234
     * $query->filterByIdordentablajeria(array(12, 34)); // WHERE idordentablajeria IN (12, 34)
     * $query->filterByIdordentablajeria(array('min' => 12)); // WHERE idordentablajeria >= 12
     * $query->filterByIdordentablajeria(array('max' => 12)); // WHERE idordentablajeria <= 12
     * </code>
     *
     * @see       filterByOrdentablajeria()
     *
     * @param     mixed $idordentablajeria The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriadetalleQuery The current query, for fluid interface
     */
    public function filterByIdordentablajeria($idordentablajeria = null, $comparison = null)
    {
        if (is_array($idordentablajeria)) {
            $useMinMax = false;
            if (isset($idordentablajeria['min'])) {
                $this->addUsingAlias(OrdentablajeriadetallePeer::IDORDENTABLAJERIA, $idordentablajeria['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idordentablajeria['max'])) {
                $this->addUsingAlias(OrdentablajeriadetallePeer::IDORDENTABLAJERIA, $idordentablajeria['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriadetallePeer::IDORDENTABLAJERIA, $idordentablajeria, $comparison);
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
     * @return OrdentablajeriadetalleQuery The current query, for fluid interface
     */
    public function filterByIdproducto($idproducto = null, $comparison = null)
    {
        if (is_array($idproducto)) {
            $useMinMax = false;
            if (isset($idproducto['min'])) {
                $this->addUsingAlias(OrdentablajeriadetallePeer::IDPRODUCTO, $idproducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproducto['max'])) {
                $this->addUsingAlias(OrdentablajeriadetallePeer::IDPRODUCTO, $idproducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriadetallePeer::IDPRODUCTO, $idproducto, $comparison);
    }

    /**
     * Filter the query on the ordentablajeriadetalle_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdentablajeriadetalleCantidad(1234); // WHERE ordentablajeriadetalle_cantidad = 1234
     * $query->filterByOrdentablajeriadetalleCantidad(array(12, 34)); // WHERE ordentablajeriadetalle_cantidad IN (12, 34)
     * $query->filterByOrdentablajeriadetalleCantidad(array('min' => 12)); // WHERE ordentablajeriadetalle_cantidad >= 12
     * $query->filterByOrdentablajeriadetalleCantidad(array('max' => 12)); // WHERE ordentablajeriadetalle_cantidad <= 12
     * </code>
     *
     * @param     mixed $ordentablajeriadetalleCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriadetalleQuery The current query, for fluid interface
     */
    public function filterByOrdentablajeriadetalleCantidad($ordentablajeriadetalleCantidad = null, $comparison = null)
    {
        if (is_array($ordentablajeriadetalleCantidad)) {
            $useMinMax = false;
            if (isset($ordentablajeriadetalleCantidad['min'])) {
                $this->addUsingAlias(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_CANTIDAD, $ordentablajeriadetalleCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordentablajeriadetalleCantidad['max'])) {
                $this->addUsingAlias(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_CANTIDAD, $ordentablajeriadetalleCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_CANTIDAD, $ordentablajeriadetalleCantidad, $comparison);
    }

    /**
     * Filter the query on the ordentablajeriadetalle_pesoporcion column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdentablajeriadetallePesoporcion(1234); // WHERE ordentablajeriadetalle_pesoporcion = 1234
     * $query->filterByOrdentablajeriadetallePesoporcion(array(12, 34)); // WHERE ordentablajeriadetalle_pesoporcion IN (12, 34)
     * $query->filterByOrdentablajeriadetallePesoporcion(array('min' => 12)); // WHERE ordentablajeriadetalle_pesoporcion >= 12
     * $query->filterByOrdentablajeriadetallePesoporcion(array('max' => 12)); // WHERE ordentablajeriadetalle_pesoporcion <= 12
     * </code>
     *
     * @param     mixed $ordentablajeriadetallePesoporcion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriadetalleQuery The current query, for fluid interface
     */
    public function filterByOrdentablajeriadetallePesoporcion($ordentablajeriadetallePesoporcion = null, $comparison = null)
    {
        if (is_array($ordentablajeriadetallePesoporcion)) {
            $useMinMax = false;
            if (isset($ordentablajeriadetallePesoporcion['min'])) {
                $this->addUsingAlias(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PESOPORCION, $ordentablajeriadetallePesoporcion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordentablajeriadetallePesoporcion['max'])) {
                $this->addUsingAlias(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PESOPORCION, $ordentablajeriadetallePesoporcion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PESOPORCION, $ordentablajeriadetallePesoporcion, $comparison);
    }

    /**
     * Filter the query on the ordentablajeriadetalle_precioporcion column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdentablajeriadetallePrecioporcion(1234); // WHERE ordentablajeriadetalle_precioporcion = 1234
     * $query->filterByOrdentablajeriadetallePrecioporcion(array(12, 34)); // WHERE ordentablajeriadetalle_precioporcion IN (12, 34)
     * $query->filterByOrdentablajeriadetallePrecioporcion(array('min' => 12)); // WHERE ordentablajeriadetalle_precioporcion >= 12
     * $query->filterByOrdentablajeriadetallePrecioporcion(array('max' => 12)); // WHERE ordentablajeriadetalle_precioporcion <= 12
     * </code>
     *
     * @param     mixed $ordentablajeriadetallePrecioporcion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriadetalleQuery The current query, for fluid interface
     */
    public function filterByOrdentablajeriadetallePrecioporcion($ordentablajeriadetallePrecioporcion = null, $comparison = null)
    {
        if (is_array($ordentablajeriadetallePrecioporcion)) {
            $useMinMax = false;
            if (isset($ordentablajeriadetallePrecioporcion['min'])) {
                $this->addUsingAlias(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PRECIOPORCION, $ordentablajeriadetallePrecioporcion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordentablajeriadetallePrecioporcion['max'])) {
                $this->addUsingAlias(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PRECIOPORCION, $ordentablajeriadetallePrecioporcion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PRECIOPORCION, $ordentablajeriadetallePrecioporcion, $comparison);
    }

    /**
     * Filter the query on the ordentablajeriadetalle_pesototal column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdentablajeriadetallePesototal(1234); // WHERE ordentablajeriadetalle_pesototal = 1234
     * $query->filterByOrdentablajeriadetallePesototal(array(12, 34)); // WHERE ordentablajeriadetalle_pesototal IN (12, 34)
     * $query->filterByOrdentablajeriadetallePesototal(array('min' => 12)); // WHERE ordentablajeriadetalle_pesototal >= 12
     * $query->filterByOrdentablajeriadetallePesototal(array('max' => 12)); // WHERE ordentablajeriadetalle_pesototal <= 12
     * </code>
     *
     * @param     mixed $ordentablajeriadetallePesototal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriadetalleQuery The current query, for fluid interface
     */
    public function filterByOrdentablajeriadetallePesototal($ordentablajeriadetallePesototal = null, $comparison = null)
    {
        if (is_array($ordentablajeriadetallePesototal)) {
            $useMinMax = false;
            if (isset($ordentablajeriadetallePesototal['min'])) {
                $this->addUsingAlias(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PESOTOTAL, $ordentablajeriadetallePesototal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordentablajeriadetallePesototal['max'])) {
                $this->addUsingAlias(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PESOTOTAL, $ordentablajeriadetallePesototal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PESOTOTAL, $ordentablajeriadetallePesototal, $comparison);
    }

    /**
     * Filter the query on the ordentablajeriadetalle_subtotal column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdentablajeriadetalleSubtotal(1234); // WHERE ordentablajeriadetalle_subtotal = 1234
     * $query->filterByOrdentablajeriadetalleSubtotal(array(12, 34)); // WHERE ordentablajeriadetalle_subtotal IN (12, 34)
     * $query->filterByOrdentablajeriadetalleSubtotal(array('min' => 12)); // WHERE ordentablajeriadetalle_subtotal >= 12
     * $query->filterByOrdentablajeriadetalleSubtotal(array('max' => 12)); // WHERE ordentablajeriadetalle_subtotal <= 12
     * </code>
     *
     * @param     mixed $ordentablajeriadetalleSubtotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriadetalleQuery The current query, for fluid interface
     */
    public function filterByOrdentablajeriadetalleSubtotal($ordentablajeriadetalleSubtotal = null, $comparison = null)
    {
        if (is_array($ordentablajeriadetalleSubtotal)) {
            $useMinMax = false;
            if (isset($ordentablajeriadetalleSubtotal['min'])) {
                $this->addUsingAlias(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_SUBTOTAL, $ordentablajeriadetalleSubtotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordentablajeriadetalleSubtotal['max'])) {
                $this->addUsingAlias(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_SUBTOTAL, $ordentablajeriadetalleSubtotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_SUBTOTAL, $ordentablajeriadetalleSubtotal, $comparison);
    }

    /**
     * Filter the query on the ordentablajeriadetalle_revisada column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdentablajeriadetalleRevisada(true); // WHERE ordentablajeriadetalle_revisada = true
     * $query->filterByOrdentablajeriadetalleRevisada('yes'); // WHERE ordentablajeriadetalle_revisada = true
     * </code>
     *
     * @param     boolean|string $ordentablajeriadetalleRevisada The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriadetalleQuery The current query, for fluid interface
     */
    public function filterByOrdentablajeriadetalleRevisada($ordentablajeriadetalleRevisada = null, $comparison = null)
    {
        if (is_string($ordentablajeriadetalleRevisada)) {
            $ordentablajeriadetalleRevisada = in_array(strtolower($ordentablajeriadetalleRevisada), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_REVISADA, $ordentablajeriadetalleRevisada, $comparison);
    }

    /**
     * Filter the query by a related Ordentablajeria object
     *
     * @param   Ordentablajeria|PropelObjectCollection $ordentablajeria The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OrdentablajeriadetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOrdentablajeria($ordentablajeria, $comparison = null)
    {
        if ($ordentablajeria instanceof Ordentablajeria) {
            return $this
                ->addUsingAlias(OrdentablajeriadetallePeer::IDORDENTABLAJERIA, $ordentablajeria->getIdordentablajeria(), $comparison);
        } elseif ($ordentablajeria instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OrdentablajeriadetallePeer::IDORDENTABLAJERIA, $ordentablajeria->toKeyValue('PrimaryKey', 'Idordentablajeria'), $comparison);
        } else {
            throw new PropelException('filterByOrdentablajeria() only accepts arguments of type Ordentablajeria or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Ordentablajeria relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OrdentablajeriadetalleQuery The current query, for fluid interface
     */
    public function joinOrdentablajeria($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Ordentablajeria');

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
            $this->addJoinObject($join, 'Ordentablajeria');
        }

        return $this;
    }

    /**
     * Use the Ordentablajeria relation Ordentablajeria object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OrdentablajeriaQuery A secondary query class using the current class as primary query
     */
    public function useOrdentablajeriaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOrdentablajeria($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ordentablajeria', 'OrdentablajeriaQuery');
    }

    /**
     * Filter the query by a related Producto object
     *
     * @param   Producto|PropelObjectCollection $producto The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OrdentablajeriadetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(OrdentablajeriadetallePeer::IDPRODUCTO, $producto->getIdproducto(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OrdentablajeriadetallePeer::IDPRODUCTO, $producto->toKeyValue('PrimaryKey', 'Idproducto'), $comparison);
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
     * @return OrdentablajeriadetalleQuery The current query, for fluid interface
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
     * @param   Ordentablajeriadetalle $ordentablajeriadetalle Object to remove from the list of results
     *
     * @return OrdentablajeriadetalleQuery The current query, for fluid interface
     */
    public function prune($ordentablajeriadetalle = null)
    {
        if ($ordentablajeriadetalle) {
            $this->addUsingAlias(OrdentablajeriadetallePeer::IDORDENTABLAJERIADETALLE, $ordentablajeriadetalle->getIdordentablajeriadetalle(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
