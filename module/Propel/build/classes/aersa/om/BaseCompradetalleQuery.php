<?php


/**
 * Base class that represents a query for the 'compradetalle' table.
 *
 *
 *
 * @method CompradetalleQuery orderByIdcompradetalle($order = Criteria::ASC) Order by the idcompradetalle column
 * @method CompradetalleQuery orderByIdcompra($order = Criteria::ASC) Order by the idcompra column
 * @method CompradetalleQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 * @method CompradetalleQuery orderByIdalmacen($order = Criteria::ASC) Order by the idalmacen column
 * @method CompradetalleQuery orderByCompradetalleCantidad($order = Criteria::ASC) Order by the compradetalle_cantidad column
 * @method CompradetalleQuery orderByCompradetallePrecio($order = Criteria::ASC) Order by the compradetalle_precio column
 * @method CompradetalleQuery orderByCompradetalleRevisada($order = Criteria::ASC) Order by the compradetalle_revisada column
 * @method CompradetalleQuery orderByCompradetalleCostounitario($order = Criteria::ASC) Order by the compradetalle_costounitario column
 * @method CompradetalleQuery orderByCompradetalleCostounitarioneto($order = Criteria::ASC) Order by the compradetalle_costounitarioneto column
 * @method CompradetalleQuery orderByCompradetalleDescuento($order = Criteria::ASC) Order by the compradetalle_descuento column
 * @method CompradetalleQuery orderByCompradetalleIeps($order = Criteria::ASC) Order by the compradetalle_ieps column
 * @method CompradetalleQuery orderByCompradetalleSubtotal($order = Criteria::ASC) Order by the compradetalle_subtotal column
 *
 * @method CompradetalleQuery groupByIdcompradetalle() Group by the idcompradetalle column
 * @method CompradetalleQuery groupByIdcompra() Group by the idcompra column
 * @method CompradetalleQuery groupByIdproducto() Group by the idproducto column
 * @method CompradetalleQuery groupByIdalmacen() Group by the idalmacen column
 * @method CompradetalleQuery groupByCompradetalleCantidad() Group by the compradetalle_cantidad column
 * @method CompradetalleQuery groupByCompradetallePrecio() Group by the compradetalle_precio column
 * @method CompradetalleQuery groupByCompradetalleRevisada() Group by the compradetalle_revisada column
 * @method CompradetalleQuery groupByCompradetalleCostounitario() Group by the compradetalle_costounitario column
 * @method CompradetalleQuery groupByCompradetalleCostounitarioneto() Group by the compradetalle_costounitarioneto column
 * @method CompradetalleQuery groupByCompradetalleDescuento() Group by the compradetalle_descuento column
 * @method CompradetalleQuery groupByCompradetalleIeps() Group by the compradetalle_ieps column
 * @method CompradetalleQuery groupByCompradetalleSubtotal() Group by the compradetalle_subtotal column
 *
 * @method CompradetalleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CompradetalleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CompradetalleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CompradetalleQuery leftJoinAlmacen($relationAlias = null) Adds a LEFT JOIN clause to the query using the Almacen relation
 * @method CompradetalleQuery rightJoinAlmacen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Almacen relation
 * @method CompradetalleQuery innerJoinAlmacen($relationAlias = null) Adds a INNER JOIN clause to the query using the Almacen relation
 *
 * @method CompradetalleQuery leftJoinCompra($relationAlias = null) Adds a LEFT JOIN clause to the query using the Compra relation
 * @method CompradetalleQuery rightJoinCompra($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Compra relation
 * @method CompradetalleQuery innerJoinCompra($relationAlias = null) Adds a INNER JOIN clause to the query using the Compra relation
 *
 * @method CompradetalleQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method CompradetalleQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method CompradetalleQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method Compradetalle findOne(PropelPDO $con = null) Return the first Compradetalle matching the query
 * @method Compradetalle findOneOrCreate(PropelPDO $con = null) Return the first Compradetalle matching the query, or a new Compradetalle object populated from the query conditions when no match is found
 *
 * @method Compradetalle findOneByIdcompra(int $idcompra) Return the first Compradetalle filtered by the idcompra column
 * @method Compradetalle findOneByIdproducto(int $idproducto) Return the first Compradetalle filtered by the idproducto column
 * @method Compradetalle findOneByIdalmacen(int $idalmacen) Return the first Compradetalle filtered by the idalmacen column
 * @method Compradetalle findOneByCompradetalleCantidad(double $compradetalle_cantidad) Return the first Compradetalle filtered by the compradetalle_cantidad column
 * @method Compradetalle findOneByCompradetallePrecio(string $compradetalle_precio) Return the first Compradetalle filtered by the compradetalle_precio column
 * @method Compradetalle findOneByCompradetalleRevisada(boolean $compradetalle_revisada) Return the first Compradetalle filtered by the compradetalle_revisada column
 * @method Compradetalle findOneByCompradetalleCostounitario(string $compradetalle_costounitario) Return the first Compradetalle filtered by the compradetalle_costounitario column
 * @method Compradetalle findOneByCompradetalleCostounitarioneto(string $compradetalle_costounitarioneto) Return the first Compradetalle filtered by the compradetalle_costounitarioneto column
 * @method Compradetalle findOneByCompradetalleDescuento(double $compradetalle_descuento) Return the first Compradetalle filtered by the compradetalle_descuento column
 * @method Compradetalle findOneByCompradetalleIeps(double $compradetalle_ieps) Return the first Compradetalle filtered by the compradetalle_ieps column
 * @method Compradetalle findOneByCompradetalleSubtotal(string $compradetalle_subtotal) Return the first Compradetalle filtered by the compradetalle_subtotal column
 *
 * @method array findByIdcompradetalle(int $idcompradetalle) Return Compradetalle objects filtered by the idcompradetalle column
 * @method array findByIdcompra(int $idcompra) Return Compradetalle objects filtered by the idcompra column
 * @method array findByIdproducto(int $idproducto) Return Compradetalle objects filtered by the idproducto column
 * @method array findByIdalmacen(int $idalmacen) Return Compradetalle objects filtered by the idalmacen column
 * @method array findByCompradetalleCantidad(double $compradetalle_cantidad) Return Compradetalle objects filtered by the compradetalle_cantidad column
 * @method array findByCompradetallePrecio(string $compradetalle_precio) Return Compradetalle objects filtered by the compradetalle_precio column
 * @method array findByCompradetalleRevisada(boolean $compradetalle_revisada) Return Compradetalle objects filtered by the compradetalle_revisada column
 * @method array findByCompradetalleCostounitario(string $compradetalle_costounitario) Return Compradetalle objects filtered by the compradetalle_costounitario column
 * @method array findByCompradetalleCostounitarioneto(string $compradetalle_costounitarioneto) Return Compradetalle objects filtered by the compradetalle_costounitarioneto column
 * @method array findByCompradetalleDescuento(double $compradetalle_descuento) Return Compradetalle objects filtered by the compradetalle_descuento column
 * @method array findByCompradetalleIeps(double $compradetalle_ieps) Return Compradetalle objects filtered by the compradetalle_ieps column
 * @method array findByCompradetalleSubtotal(string $compradetalle_subtotal) Return Compradetalle objects filtered by the compradetalle_subtotal column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseCompradetalleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCompradetalleQuery object.
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
            $modelName = 'Compradetalle';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CompradetalleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CompradetalleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CompradetalleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CompradetalleQuery) {
            return $criteria;
        }
        $query = new CompradetalleQuery(null, null, $modelAlias);

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
     * @return   Compradetalle|Compradetalle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CompradetallePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CompradetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Compradetalle A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdcompradetalle($key, $con = null)
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
     * @return                 Compradetalle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idcompradetalle`, `idcompra`, `idproducto`, `idalmacen`, `compradetalle_cantidad`, `compradetalle_precio`, `compradetalle_revisada`, `compradetalle_costounitario`, `compradetalle_costounitarioneto`, `compradetalle_descuento`, `compradetalle_ieps`, `compradetalle_subtotal` FROM `compradetalle` WHERE `idcompradetalle` = :p0';
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
            $obj = new Compradetalle();
            $obj->hydrate($row);
            CompradetallePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Compradetalle|Compradetalle[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Compradetalle[]|mixed the list of results, formatted by the current formatter
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
     * @return CompradetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CompradetallePeer::IDCOMPRADETALLE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CompradetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CompradetallePeer::IDCOMPRADETALLE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idcompradetalle column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcompradetalle(1234); // WHERE idcompradetalle = 1234
     * $query->filterByIdcompradetalle(array(12, 34)); // WHERE idcompradetalle IN (12, 34)
     * $query->filterByIdcompradetalle(array('min' => 12)); // WHERE idcompradetalle >= 12
     * $query->filterByIdcompradetalle(array('max' => 12)); // WHERE idcompradetalle <= 12
     * </code>
     *
     * @param     mixed $idcompradetalle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompradetalleQuery The current query, for fluid interface
     */
    public function filterByIdcompradetalle($idcompradetalle = null, $comparison = null)
    {
        if (is_array($idcompradetalle)) {
            $useMinMax = false;
            if (isset($idcompradetalle['min'])) {
                $this->addUsingAlias(CompradetallePeer::IDCOMPRADETALLE, $idcompradetalle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcompradetalle['max'])) {
                $this->addUsingAlias(CompradetallePeer::IDCOMPRADETALLE, $idcompradetalle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompradetallePeer::IDCOMPRADETALLE, $idcompradetalle, $comparison);
    }

    /**
     * Filter the query on the idcompra column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcompra(1234); // WHERE idcompra = 1234
     * $query->filterByIdcompra(array(12, 34)); // WHERE idcompra IN (12, 34)
     * $query->filterByIdcompra(array('min' => 12)); // WHERE idcompra >= 12
     * $query->filterByIdcompra(array('max' => 12)); // WHERE idcompra <= 12
     * </code>
     *
     * @see       filterByCompra()
     *
     * @param     mixed $idcompra The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompradetalleQuery The current query, for fluid interface
     */
    public function filterByIdcompra($idcompra = null, $comparison = null)
    {
        if (is_array($idcompra)) {
            $useMinMax = false;
            if (isset($idcompra['min'])) {
                $this->addUsingAlias(CompradetallePeer::IDCOMPRA, $idcompra['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcompra['max'])) {
                $this->addUsingAlias(CompradetallePeer::IDCOMPRA, $idcompra['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompradetallePeer::IDCOMPRA, $idcompra, $comparison);
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
     * @return CompradetalleQuery The current query, for fluid interface
     */
    public function filterByIdproducto($idproducto = null, $comparison = null)
    {
        if (is_array($idproducto)) {
            $useMinMax = false;
            if (isset($idproducto['min'])) {
                $this->addUsingAlias(CompradetallePeer::IDPRODUCTO, $idproducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproducto['max'])) {
                $this->addUsingAlias(CompradetallePeer::IDPRODUCTO, $idproducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompradetallePeer::IDPRODUCTO, $idproducto, $comparison);
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
     * @return CompradetalleQuery The current query, for fluid interface
     */
    public function filterByIdalmacen($idalmacen = null, $comparison = null)
    {
        if (is_array($idalmacen)) {
            $useMinMax = false;
            if (isset($idalmacen['min'])) {
                $this->addUsingAlias(CompradetallePeer::IDALMACEN, $idalmacen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idalmacen['max'])) {
                $this->addUsingAlias(CompradetallePeer::IDALMACEN, $idalmacen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompradetallePeer::IDALMACEN, $idalmacen, $comparison);
    }

    /**
     * Filter the query on the compradetalle_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByCompradetalleCantidad(1234); // WHERE compradetalle_cantidad = 1234
     * $query->filterByCompradetalleCantidad(array(12, 34)); // WHERE compradetalle_cantidad IN (12, 34)
     * $query->filterByCompradetalleCantidad(array('min' => 12)); // WHERE compradetalle_cantidad >= 12
     * $query->filterByCompradetalleCantidad(array('max' => 12)); // WHERE compradetalle_cantidad <= 12
     * </code>
     *
     * @param     mixed $compradetalleCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompradetalleQuery The current query, for fluid interface
     */
    public function filterByCompradetalleCantidad($compradetalleCantidad = null, $comparison = null)
    {
        if (is_array($compradetalleCantidad)) {
            $useMinMax = false;
            if (isset($compradetalleCantidad['min'])) {
                $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_CANTIDAD, $compradetalleCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($compradetalleCantidad['max'])) {
                $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_CANTIDAD, $compradetalleCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_CANTIDAD, $compradetalleCantidad, $comparison);
    }

    /**
     * Filter the query on the compradetalle_precio column
     *
     * Example usage:
     * <code>
     * $query->filterByCompradetallePrecio(1234); // WHERE compradetalle_precio = 1234
     * $query->filterByCompradetallePrecio(array(12, 34)); // WHERE compradetalle_precio IN (12, 34)
     * $query->filterByCompradetallePrecio(array('min' => 12)); // WHERE compradetalle_precio >= 12
     * $query->filterByCompradetallePrecio(array('max' => 12)); // WHERE compradetalle_precio <= 12
     * </code>
     *
     * @param     mixed $compradetallePrecio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompradetalleQuery The current query, for fluid interface
     */
    public function filterByCompradetallePrecio($compradetallePrecio = null, $comparison = null)
    {
        if (is_array($compradetallePrecio)) {
            $useMinMax = false;
            if (isset($compradetallePrecio['min'])) {
                $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_PRECIO, $compradetallePrecio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($compradetallePrecio['max'])) {
                $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_PRECIO, $compradetallePrecio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_PRECIO, $compradetallePrecio, $comparison);
    }

    /**
     * Filter the query on the compradetalle_revisada column
     *
     * Example usage:
     * <code>
     * $query->filterByCompradetalleRevisada(true); // WHERE compradetalle_revisada = true
     * $query->filterByCompradetalleRevisada('yes'); // WHERE compradetalle_revisada = true
     * </code>
     *
     * @param     boolean|string $compradetalleRevisada The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompradetalleQuery The current query, for fluid interface
     */
    public function filterByCompradetalleRevisada($compradetalleRevisada = null, $comparison = null)
    {
        if (is_string($compradetalleRevisada)) {
            $compradetalleRevisada = in_array(strtolower($compradetalleRevisada), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_REVISADA, $compradetalleRevisada, $comparison);
    }

    /**
     * Filter the query on the compradetalle_costounitario column
     *
     * Example usage:
     * <code>
     * $query->filterByCompradetalleCostounitario(1234); // WHERE compradetalle_costounitario = 1234
     * $query->filterByCompradetalleCostounitario(array(12, 34)); // WHERE compradetalle_costounitario IN (12, 34)
     * $query->filterByCompradetalleCostounitario(array('min' => 12)); // WHERE compradetalle_costounitario >= 12
     * $query->filterByCompradetalleCostounitario(array('max' => 12)); // WHERE compradetalle_costounitario <= 12
     * </code>
     *
     * @param     mixed $compradetalleCostounitario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompradetalleQuery The current query, for fluid interface
     */
    public function filterByCompradetalleCostounitario($compradetalleCostounitario = null, $comparison = null)
    {
        if (is_array($compradetalleCostounitario)) {
            $useMinMax = false;
            if (isset($compradetalleCostounitario['min'])) {
                $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_COSTOUNITARIO, $compradetalleCostounitario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($compradetalleCostounitario['max'])) {
                $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_COSTOUNITARIO, $compradetalleCostounitario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_COSTOUNITARIO, $compradetalleCostounitario, $comparison);
    }

    /**
     * Filter the query on the compradetalle_costounitarioneto column
     *
     * Example usage:
     * <code>
     * $query->filterByCompradetalleCostounitarioneto(1234); // WHERE compradetalle_costounitarioneto = 1234
     * $query->filterByCompradetalleCostounitarioneto(array(12, 34)); // WHERE compradetalle_costounitarioneto IN (12, 34)
     * $query->filterByCompradetalleCostounitarioneto(array('min' => 12)); // WHERE compradetalle_costounitarioneto >= 12
     * $query->filterByCompradetalleCostounitarioneto(array('max' => 12)); // WHERE compradetalle_costounitarioneto <= 12
     * </code>
     *
     * @param     mixed $compradetalleCostounitarioneto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompradetalleQuery The current query, for fluid interface
     */
    public function filterByCompradetalleCostounitarioneto($compradetalleCostounitarioneto = null, $comparison = null)
    {
        if (is_array($compradetalleCostounitarioneto)) {
            $useMinMax = false;
            if (isset($compradetalleCostounitarioneto['min'])) {
                $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_COSTOUNITARIONETO, $compradetalleCostounitarioneto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($compradetalleCostounitarioneto['max'])) {
                $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_COSTOUNITARIONETO, $compradetalleCostounitarioneto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_COSTOUNITARIONETO, $compradetalleCostounitarioneto, $comparison);
    }

    /**
     * Filter the query on the compradetalle_descuento column
     *
     * Example usage:
     * <code>
     * $query->filterByCompradetalleDescuento(1234); // WHERE compradetalle_descuento = 1234
     * $query->filterByCompradetalleDescuento(array(12, 34)); // WHERE compradetalle_descuento IN (12, 34)
     * $query->filterByCompradetalleDescuento(array('min' => 12)); // WHERE compradetalle_descuento >= 12
     * $query->filterByCompradetalleDescuento(array('max' => 12)); // WHERE compradetalle_descuento <= 12
     * </code>
     *
     * @param     mixed $compradetalleDescuento The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompradetalleQuery The current query, for fluid interface
     */
    public function filterByCompradetalleDescuento($compradetalleDescuento = null, $comparison = null)
    {
        if (is_array($compradetalleDescuento)) {
            $useMinMax = false;
            if (isset($compradetalleDescuento['min'])) {
                $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_DESCUENTO, $compradetalleDescuento['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($compradetalleDescuento['max'])) {
                $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_DESCUENTO, $compradetalleDescuento['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_DESCUENTO, $compradetalleDescuento, $comparison);
    }

    /**
     * Filter the query on the compradetalle_ieps column
     *
     * Example usage:
     * <code>
     * $query->filterByCompradetalleIeps(1234); // WHERE compradetalle_ieps = 1234
     * $query->filterByCompradetalleIeps(array(12, 34)); // WHERE compradetalle_ieps IN (12, 34)
     * $query->filterByCompradetalleIeps(array('min' => 12)); // WHERE compradetalle_ieps >= 12
     * $query->filterByCompradetalleIeps(array('max' => 12)); // WHERE compradetalle_ieps <= 12
     * </code>
     *
     * @param     mixed $compradetalleIeps The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompradetalleQuery The current query, for fluid interface
     */
    public function filterByCompradetalleIeps($compradetalleIeps = null, $comparison = null)
    {
        if (is_array($compradetalleIeps)) {
            $useMinMax = false;
            if (isset($compradetalleIeps['min'])) {
                $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_IEPS, $compradetalleIeps['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($compradetalleIeps['max'])) {
                $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_IEPS, $compradetalleIeps['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_IEPS, $compradetalleIeps, $comparison);
    }

    /**
     * Filter the query on the compradetalle_subtotal column
     *
     * Example usage:
     * <code>
     * $query->filterByCompradetalleSubtotal(1234); // WHERE compradetalle_subtotal = 1234
     * $query->filterByCompradetalleSubtotal(array(12, 34)); // WHERE compradetalle_subtotal IN (12, 34)
     * $query->filterByCompradetalleSubtotal(array('min' => 12)); // WHERE compradetalle_subtotal >= 12
     * $query->filterByCompradetalleSubtotal(array('max' => 12)); // WHERE compradetalle_subtotal <= 12
     * </code>
     *
     * @param     mixed $compradetalleSubtotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompradetalleQuery The current query, for fluid interface
     */
    public function filterByCompradetalleSubtotal($compradetalleSubtotal = null, $comparison = null)
    {
        if (is_array($compradetalleSubtotal)) {
            $useMinMax = false;
            if (isset($compradetalleSubtotal['min'])) {
                $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_SUBTOTAL, $compradetalleSubtotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($compradetalleSubtotal['max'])) {
                $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_SUBTOTAL, $compradetalleSubtotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_SUBTOTAL, $compradetalleSubtotal, $comparison);
    }

    /**
     * Filter the query by a related Almacen object
     *
     * @param   Almacen|PropelObjectCollection $almacen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CompradetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAlmacen($almacen, $comparison = null)
    {
        if ($almacen instanceof Almacen) {
            return $this
                ->addUsingAlias(CompradetallePeer::IDALMACEN, $almacen->getIdalmacen(), $comparison);
        } elseif ($almacen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CompradetallePeer::IDALMACEN, $almacen->toKeyValue('PrimaryKey', 'Idalmacen'), $comparison);
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
     * @return CompradetalleQuery The current query, for fluid interface
     */
    public function joinAlmacen($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useAlmacenQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinAlmacen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Almacen', 'AlmacenQuery');
    }

    /**
     * Filter the query by a related Compra object
     *
     * @param   Compra|PropelObjectCollection $compra The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CompradetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCompra($compra, $comparison = null)
    {
        if ($compra instanceof Compra) {
            return $this
                ->addUsingAlias(CompradetallePeer::IDCOMPRA, $compra->getIdcompra(), $comparison);
        } elseif ($compra instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CompradetallePeer::IDCOMPRA, $compra->toKeyValue('PrimaryKey', 'Idcompra'), $comparison);
        } else {
            throw new PropelException('filterByCompra() only accepts arguments of type Compra or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Compra relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CompradetalleQuery The current query, for fluid interface
     */
    public function joinCompra($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Compra');

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
            $this->addJoinObject($join, 'Compra');
        }

        return $this;
    }

    /**
     * Use the Compra relation Compra object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CompraQuery A secondary query class using the current class as primary query
     */
    public function useCompraQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCompra($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Compra', 'CompraQuery');
    }

    /**
     * Filter the query by a related Producto object
     *
     * @param   Producto|PropelObjectCollection $producto The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CompradetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(CompradetallePeer::IDPRODUCTO, $producto->getIdproducto(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CompradetallePeer::IDPRODUCTO, $producto->toKeyValue('PrimaryKey', 'Idproducto'), $comparison);
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
     * @return CompradetalleQuery The current query, for fluid interface
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
     * @param   Compradetalle $compradetalle Object to remove from the list of results
     *
     * @return CompradetalleQuery The current query, for fluid interface
     */
    public function prune($compradetalle = null)
    {
        if ($compradetalle) {
            $this->addUsingAlias(CompradetallePeer::IDCOMPRADETALLE, $compradetalle->getIdcompradetalle(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
