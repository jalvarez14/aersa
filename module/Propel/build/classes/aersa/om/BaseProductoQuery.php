<?php


/**
 * Base class that represents a query for the 'producto' table.
 *
 *
 *
 * @method ProductoQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 * @method ProductoQuery orderByProductoNombre($order = Criteria::ASC) Order by the producto_nombre column
 * @method ProductoQuery orderByIdcategoria($order = Criteria::ASC) Order by the idcategoria column
 * @method ProductoQuery orderByIdsubcategoria($order = Criteria::ASC) Order by the idsubcategoria column
 * @method ProductoQuery orderByProductoRendimiento($order = Criteria::ASC) Order by the producto_rendimiento column
 * @method ProductoQuery orderByProductoUltimocosto($order = Criteria::ASC) Order by the producto_ultimocosto column
 * @method ProductoQuery orderByIdunidadmedida($order = Criteria::ASC) Order by the idunidadmedida column
 * @method ProductoQuery orderByProductoBaja($order = Criteria::ASC) Order by the producto_baja column
 * @method ProductoQuery orderByProductoTipo($order = Criteria::ASC) Order by the producto_tipo column
 * @method ProductoQuery orderByProductoCosto($order = Criteria::ASC) Order by the producto_costo column
 *
 * @method ProductoQuery groupByIdproducto() Group by the idproducto column
 * @method ProductoQuery groupByProductoNombre() Group by the producto_nombre column
 * @method ProductoQuery groupByIdcategoria() Group by the idcategoria column
 * @method ProductoQuery groupByIdsubcategoria() Group by the idsubcategoria column
 * @method ProductoQuery groupByProductoRendimiento() Group by the producto_rendimiento column
 * @method ProductoQuery groupByProductoUltimocosto() Group by the producto_ultimocosto column
 * @method ProductoQuery groupByIdunidadmedida() Group by the idunidadmedida column
 * @method ProductoQuery groupByProductoBaja() Group by the producto_baja column
 * @method ProductoQuery groupByProductoTipo() Group by the producto_tipo column
 * @method ProductoQuery groupByProductoCosto() Group by the producto_costo column
 *
 * @method ProductoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProductoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProductoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProductoQuery leftJoinUnidadmedida($relationAlias = null) Adds a LEFT JOIN clause to the query using the Unidadmedida relation
 * @method ProductoQuery rightJoinUnidadmedida($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Unidadmedida relation
 * @method ProductoQuery innerJoinUnidadmedida($relationAlias = null) Adds a INNER JOIN clause to the query using the Unidadmedida relation
 *
 * @method ProductoQuery leftJoinCodigobarras($relationAlias = null) Adds a LEFT JOIN clause to the query using the Codigobarras relation
 * @method ProductoQuery rightJoinCodigobarras($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Codigobarras relation
 * @method ProductoQuery innerJoinCodigobarras($relationAlias = null) Adds a INNER JOIN clause to the query using the Codigobarras relation
 *
 * @method ProductoQuery leftJoinCompradetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Compradetalle relation
 * @method ProductoQuery rightJoinCompradetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Compradetalle relation
 * @method ProductoQuery innerJoinCompradetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Compradetalle relation
 *
 * @method ProductoQuery leftJoinRecetaRelatedByIdproducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the RecetaRelatedByIdproducto relation
 * @method ProductoQuery rightJoinRecetaRelatedByIdproducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RecetaRelatedByIdproducto relation
 * @method ProductoQuery innerJoinRecetaRelatedByIdproducto($relationAlias = null) Adds a INNER JOIN clause to the query using the RecetaRelatedByIdproducto relation
 *
 * @method ProductoQuery leftJoinRecetaRelatedByIdproductoreceta($relationAlias = null) Adds a LEFT JOIN clause to the query using the RecetaRelatedByIdproductoreceta relation
 * @method ProductoQuery rightJoinRecetaRelatedByIdproductoreceta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RecetaRelatedByIdproductoreceta relation
 * @method ProductoQuery innerJoinRecetaRelatedByIdproductoreceta($relationAlias = null) Adds a INNER JOIN clause to the query using the RecetaRelatedByIdproductoreceta relation
 *
 * @method ProductoQuery leftJoinRequisiciondetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Requisiciondetalle relation
 * @method ProductoQuery rightJoinRequisiciondetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Requisiciondetalle relation
 * @method ProductoQuery innerJoinRequisiciondetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Requisiciondetalle relation
 *
 * @method Producto findOne(PropelPDO $con = null) Return the first Producto matching the query
 * @method Producto findOneOrCreate(PropelPDO $con = null) Return the first Producto matching the query, or a new Producto object populated from the query conditions when no match is found
 *
 * @method Producto findOneByProductoNombre(string $producto_nombre) Return the first Producto filtered by the producto_nombre column
 * @method Producto findOneByIdcategoria(int $idcategoria) Return the first Producto filtered by the idcategoria column
 * @method Producto findOneByIdsubcategoria(int $idsubcategoria) Return the first Producto filtered by the idsubcategoria column
 * @method Producto findOneByProductoRendimiento(int $producto_rendimiento) Return the first Producto filtered by the producto_rendimiento column
 * @method Producto findOneByProductoUltimocosto(double $producto_ultimocosto) Return the first Producto filtered by the producto_ultimocosto column
 * @method Producto findOneByIdunidadmedida(int $idunidadmedida) Return the first Producto filtered by the idunidadmedida column
 * @method Producto findOneByProductoBaja(boolean $producto_baja) Return the first Producto filtered by the producto_baja column
 * @method Producto findOneByProductoTipo(string $producto_tipo) Return the first Producto filtered by the producto_tipo column
 * @method Producto findOneByProductoCosto(double $producto_costo) Return the first Producto filtered by the producto_costo column
 *
 * @method array findByIdproducto(int $idproducto) Return Producto objects filtered by the idproducto column
 * @method array findByProductoNombre(string $producto_nombre) Return Producto objects filtered by the producto_nombre column
 * @method array findByIdcategoria(int $idcategoria) Return Producto objects filtered by the idcategoria column
 * @method array findByIdsubcategoria(int $idsubcategoria) Return Producto objects filtered by the idsubcategoria column
 * @method array findByProductoRendimiento(int $producto_rendimiento) Return Producto objects filtered by the producto_rendimiento column
 * @method array findByProductoUltimocosto(double $producto_ultimocosto) Return Producto objects filtered by the producto_ultimocosto column
 * @method array findByIdunidadmedida(int $idunidadmedida) Return Producto objects filtered by the idunidadmedida column
 * @method array findByProductoBaja(boolean $producto_baja) Return Producto objects filtered by the producto_baja column
 * @method array findByProductoTipo(string $producto_tipo) Return Producto objects filtered by the producto_tipo column
 * @method array findByProductoCosto(double $producto_costo) Return Producto objects filtered by the producto_costo column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseProductoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseProductoQuery object.
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
            $modelName = 'Producto';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProductoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProductoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProductoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProductoQuery) {
            return $criteria;
        }
        $query = new ProductoQuery(null, null, $modelAlias);

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
     * @return   Producto|Producto[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProductoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Producto A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdproducto($key, $con = null)
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
     * @return                 Producto A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idproducto`, `producto_nombre`, `idcategoria`, `idsubcategoria`, `producto_rendimiento`, `producto_ultimocosto`, `idunidadmedida`, `producto_baja`, `producto_tipo`, `producto_costo` FROM `producto` WHERE `idproducto` = :p0';
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
            $obj = new Producto();
            $obj->hydrate($row);
            ProductoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Producto|Producto[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Producto[]|mixed the list of results, formatted by the current formatter
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
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProductoPeer::IDPRODUCTO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProductoPeer::IDPRODUCTO, $keys, Criteria::IN);
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
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByIdproducto($idproducto = null, $comparison = null)
    {
        if (is_array($idproducto)) {
            $useMinMax = false;
            if (isset($idproducto['min'])) {
                $this->addUsingAlias(ProductoPeer::IDPRODUCTO, $idproducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproducto['max'])) {
                $this->addUsingAlias(ProductoPeer::IDPRODUCTO, $idproducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoPeer::IDPRODUCTO, $idproducto, $comparison);
    }

    /**
     * Filter the query on the producto_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoNombre('fooValue');   // WHERE producto_nombre = 'fooValue'
     * $query->filterByProductoNombre('%fooValue%'); // WHERE producto_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $productoNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByProductoNombre($productoNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($productoNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $productoNombre)) {
                $productoNombre = str_replace('*', '%', $productoNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProductoPeer::PRODUCTO_NOMBRE, $productoNombre, $comparison);
    }

    /**
     * Filter the query on the idcategoria column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcategoria(1234); // WHERE idcategoria = 1234
     * $query->filterByIdcategoria(array(12, 34)); // WHERE idcategoria IN (12, 34)
     * $query->filterByIdcategoria(array('min' => 12)); // WHERE idcategoria >= 12
     * $query->filterByIdcategoria(array('max' => 12)); // WHERE idcategoria <= 12
     * </code>
     *
     * @param     mixed $idcategoria The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByIdcategoria($idcategoria = null, $comparison = null)
    {
        if (is_array($idcategoria)) {
            $useMinMax = false;
            if (isset($idcategoria['min'])) {
                $this->addUsingAlias(ProductoPeer::IDCATEGORIA, $idcategoria['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcategoria['max'])) {
                $this->addUsingAlias(ProductoPeer::IDCATEGORIA, $idcategoria['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoPeer::IDCATEGORIA, $idcategoria, $comparison);
    }

    /**
     * Filter the query on the idsubcategoria column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsubcategoria(1234); // WHERE idsubcategoria = 1234
     * $query->filterByIdsubcategoria(array(12, 34)); // WHERE idsubcategoria IN (12, 34)
     * $query->filterByIdsubcategoria(array('min' => 12)); // WHERE idsubcategoria >= 12
     * $query->filterByIdsubcategoria(array('max' => 12)); // WHERE idsubcategoria <= 12
     * </code>
     *
     * @param     mixed $idsubcategoria The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByIdsubcategoria($idsubcategoria = null, $comparison = null)
    {
        if (is_array($idsubcategoria)) {
            $useMinMax = false;
            if (isset($idsubcategoria['min'])) {
                $this->addUsingAlias(ProductoPeer::IDSUBCATEGORIA, $idsubcategoria['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsubcategoria['max'])) {
                $this->addUsingAlias(ProductoPeer::IDSUBCATEGORIA, $idsubcategoria['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoPeer::IDSUBCATEGORIA, $idsubcategoria, $comparison);
    }

    /**
     * Filter the query on the producto_rendimiento column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoRendimiento(1234); // WHERE producto_rendimiento = 1234
     * $query->filterByProductoRendimiento(array(12, 34)); // WHERE producto_rendimiento IN (12, 34)
     * $query->filterByProductoRendimiento(array('min' => 12)); // WHERE producto_rendimiento >= 12
     * $query->filterByProductoRendimiento(array('max' => 12)); // WHERE producto_rendimiento <= 12
     * </code>
     *
     * @param     mixed $productoRendimiento The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByProductoRendimiento($productoRendimiento = null, $comparison = null)
    {
        if (is_array($productoRendimiento)) {
            $useMinMax = false;
            if (isset($productoRendimiento['min'])) {
                $this->addUsingAlias(ProductoPeer::PRODUCTO_RENDIMIENTO, $productoRendimiento['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productoRendimiento['max'])) {
                $this->addUsingAlias(ProductoPeer::PRODUCTO_RENDIMIENTO, $productoRendimiento['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoPeer::PRODUCTO_RENDIMIENTO, $productoRendimiento, $comparison);
    }

    /**
     * Filter the query on the producto_ultimocosto column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoUltimocosto(1234); // WHERE producto_ultimocosto = 1234
     * $query->filterByProductoUltimocosto(array(12, 34)); // WHERE producto_ultimocosto IN (12, 34)
     * $query->filterByProductoUltimocosto(array('min' => 12)); // WHERE producto_ultimocosto >= 12
     * $query->filterByProductoUltimocosto(array('max' => 12)); // WHERE producto_ultimocosto <= 12
     * </code>
     *
     * @param     mixed $productoUltimocosto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByProductoUltimocosto($productoUltimocosto = null, $comparison = null)
    {
        if (is_array($productoUltimocosto)) {
            $useMinMax = false;
            if (isset($productoUltimocosto['min'])) {
                $this->addUsingAlias(ProductoPeer::PRODUCTO_ULTIMOCOSTO, $productoUltimocosto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productoUltimocosto['max'])) {
                $this->addUsingAlias(ProductoPeer::PRODUCTO_ULTIMOCOSTO, $productoUltimocosto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoPeer::PRODUCTO_ULTIMOCOSTO, $productoUltimocosto, $comparison);
    }

    /**
     * Filter the query on the idunidadmedida column
     *
     * Example usage:
     * <code>
     * $query->filterByIdunidadmedida(1234); // WHERE idunidadmedida = 1234
     * $query->filterByIdunidadmedida(array(12, 34)); // WHERE idunidadmedida IN (12, 34)
     * $query->filterByIdunidadmedida(array('min' => 12)); // WHERE idunidadmedida >= 12
     * $query->filterByIdunidadmedida(array('max' => 12)); // WHERE idunidadmedida <= 12
     * </code>
     *
     * @see       filterByUnidadmedida()
     *
     * @param     mixed $idunidadmedida The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByIdunidadmedida($idunidadmedida = null, $comparison = null)
    {
        if (is_array($idunidadmedida)) {
            $useMinMax = false;
            if (isset($idunidadmedida['min'])) {
                $this->addUsingAlias(ProductoPeer::IDUNIDADMEDIDA, $idunidadmedida['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idunidadmedida['max'])) {
                $this->addUsingAlias(ProductoPeer::IDUNIDADMEDIDA, $idunidadmedida['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoPeer::IDUNIDADMEDIDA, $idunidadmedida, $comparison);
    }

    /**
     * Filter the query on the producto_baja column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoBaja(true); // WHERE producto_baja = true
     * $query->filterByProductoBaja('yes'); // WHERE producto_baja = true
     * </code>
     *
     * @param     boolean|string $productoBaja The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByProductoBaja($productoBaja = null, $comparison = null)
    {
        if (is_string($productoBaja)) {
            $productoBaja = in_array(strtolower($productoBaja), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ProductoPeer::PRODUCTO_BAJA, $productoBaja, $comparison);
    }

    /**
     * Filter the query on the producto_tipo column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoTipo('fooValue');   // WHERE producto_tipo = 'fooValue'
     * $query->filterByProductoTipo('%fooValue%'); // WHERE producto_tipo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $productoTipo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByProductoTipo($productoTipo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($productoTipo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $productoTipo)) {
                $productoTipo = str_replace('*', '%', $productoTipo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProductoPeer::PRODUCTO_TIPO, $productoTipo, $comparison);
    }

    /**
     * Filter the query on the producto_costo column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoCosto(1234); // WHERE producto_costo = 1234
     * $query->filterByProductoCosto(array(12, 34)); // WHERE producto_costo IN (12, 34)
     * $query->filterByProductoCosto(array('min' => 12)); // WHERE producto_costo >= 12
     * $query->filterByProductoCosto(array('max' => 12)); // WHERE producto_costo <= 12
     * </code>
     *
     * @param     mixed $productoCosto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByProductoCosto($productoCosto = null, $comparison = null)
    {
        if (is_array($productoCosto)) {
            $useMinMax = false;
            if (isset($productoCosto['min'])) {
                $this->addUsingAlias(ProductoPeer::PRODUCTO_COSTO, $productoCosto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productoCosto['max'])) {
                $this->addUsingAlias(ProductoPeer::PRODUCTO_COSTO, $productoCosto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoPeer::PRODUCTO_COSTO, $productoCosto, $comparison);
    }

    /**
     * Filter the query by a related Unidadmedida object
     *
     * @param   Unidadmedida|PropelObjectCollection $unidadmedida The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUnidadmedida($unidadmedida, $comparison = null)
    {
        if ($unidadmedida instanceof Unidadmedida) {
            return $this
                ->addUsingAlias(ProductoPeer::IDUNIDADMEDIDA, $unidadmedida->getIdunidadmedida(), $comparison);
        } elseif ($unidadmedida instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProductoPeer::IDUNIDADMEDIDA, $unidadmedida->toKeyValue('PrimaryKey', 'Idunidadmedida'), $comparison);
        } else {
            throw new PropelException('filterByUnidadmedida() only accepts arguments of type Unidadmedida or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Unidadmedida relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinUnidadmedida($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Unidadmedida');

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
            $this->addJoinObject($join, 'Unidadmedida');
        }

        return $this;
    }

    /**
     * Use the Unidadmedida relation Unidadmedida object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UnidadmedidaQuery A secondary query class using the current class as primary query
     */
    public function useUnidadmedidaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinUnidadmedida($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Unidadmedida', 'UnidadmedidaQuery');
    }

    /**
     * Filter the query by a related Codigobarras object
     *
     * @param   Codigobarras|PropelObjectCollection $codigobarras  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCodigobarras($codigobarras, $comparison = null)
    {
        if ($codigobarras instanceof Codigobarras) {
            return $this
                ->addUsingAlias(ProductoPeer::IDPRODUCTO, $codigobarras->getIdproducto(), $comparison);
        } elseif ($codigobarras instanceof PropelObjectCollection) {
            return $this
                ->useCodigobarrasQuery()
                ->filterByPrimaryKeys($codigobarras->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCodigobarras() only accepts arguments of type Codigobarras or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Codigobarras relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinCodigobarras($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Codigobarras');

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
            $this->addJoinObject($join, 'Codigobarras');
        }

        return $this;
    }

    /**
     * Use the Codigobarras relation Codigobarras object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CodigobarrasQuery A secondary query class using the current class as primary query
     */
    public function useCodigobarrasQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCodigobarras($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Codigobarras', 'CodigobarrasQuery');
    }

    /**
     * Filter the query by a related Compradetalle object
     *
     * @param   Compradetalle|PropelObjectCollection $compradetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCompradetalle($compradetalle, $comparison = null)
    {
        if ($compradetalle instanceof Compradetalle) {
            return $this
                ->addUsingAlias(ProductoPeer::IDPRODUCTO, $compradetalle->getIdproducto(), $comparison);
        } elseif ($compradetalle instanceof PropelObjectCollection) {
            return $this
                ->useCompradetalleQuery()
                ->filterByPrimaryKeys($compradetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCompradetalle() only accepts arguments of type Compradetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Compradetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinCompradetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Compradetalle');

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
            $this->addJoinObject($join, 'Compradetalle');
        }

        return $this;
    }

    /**
     * Use the Compradetalle relation Compradetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CompradetalleQuery A secondary query class using the current class as primary query
     */
    public function useCompradetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCompradetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Compradetalle', 'CompradetalleQuery');
    }

    /**
     * Filter the query by a related Receta object
     *
     * @param   Receta|PropelObjectCollection $receta  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRecetaRelatedByIdproducto($receta, $comparison = null)
    {
        if ($receta instanceof Receta) {
            return $this
                ->addUsingAlias(ProductoPeer::IDPRODUCTO, $receta->getIdproducto(), $comparison);
        } elseif ($receta instanceof PropelObjectCollection) {
            return $this
                ->useRecetaRelatedByIdproductoQuery()
                ->filterByPrimaryKeys($receta->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRecetaRelatedByIdproducto() only accepts arguments of type Receta or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RecetaRelatedByIdproducto relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinRecetaRelatedByIdproducto($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RecetaRelatedByIdproducto');

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
            $this->addJoinObject($join, 'RecetaRelatedByIdproducto');
        }

        return $this;
    }

    /**
     * Use the RecetaRelatedByIdproducto relation Receta object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RecetaQuery A secondary query class using the current class as primary query
     */
    public function useRecetaRelatedByIdproductoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRecetaRelatedByIdproducto($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RecetaRelatedByIdproducto', 'RecetaQuery');
    }

    /**
     * Filter the query by a related Receta object
     *
     * @param   Receta|PropelObjectCollection $receta  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRecetaRelatedByIdproductoreceta($receta, $comparison = null)
    {
        if ($receta instanceof Receta) {
            return $this
                ->addUsingAlias(ProductoPeer::IDPRODUCTO, $receta->getIdproductoreceta(), $comparison);
        } elseif ($receta instanceof PropelObjectCollection) {
            return $this
                ->useRecetaRelatedByIdproductorecetaQuery()
                ->filterByPrimaryKeys($receta->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRecetaRelatedByIdproductoreceta() only accepts arguments of type Receta or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RecetaRelatedByIdproductoreceta relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinRecetaRelatedByIdproductoreceta($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RecetaRelatedByIdproductoreceta');

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
            $this->addJoinObject($join, 'RecetaRelatedByIdproductoreceta');
        }

        return $this;
    }

    /**
     * Use the RecetaRelatedByIdproductoreceta relation Receta object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RecetaQuery A secondary query class using the current class as primary query
     */
    public function useRecetaRelatedByIdproductorecetaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRecetaRelatedByIdproductoreceta($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RecetaRelatedByIdproductoreceta', 'RecetaQuery');
    }

    /**
     * Filter the query by a related Requisiciondetalle object
     *
     * @param   Requisiciondetalle|PropelObjectCollection $requisiciondetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRequisiciondetalle($requisiciondetalle, $comparison = null)
    {
        if ($requisiciondetalle instanceof Requisiciondetalle) {
            return $this
                ->addUsingAlias(ProductoPeer::IDPRODUCTO, $requisiciondetalle->getIdproducto(), $comparison);
        } elseif ($requisiciondetalle instanceof PropelObjectCollection) {
            return $this
                ->useRequisiciondetalleQuery()
                ->filterByPrimaryKeys($requisiciondetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRequisiciondetalle() only accepts arguments of type Requisiciondetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Requisiciondetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinRequisiciondetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Requisiciondetalle');

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
            $this->addJoinObject($join, 'Requisiciondetalle');
        }

        return $this;
    }

    /**
     * Use the Requisiciondetalle relation Requisiciondetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RequisiciondetalleQuery A secondary query class using the current class as primary query
     */
    public function useRequisiciondetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRequisiciondetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Requisiciondetalle', 'RequisiciondetalleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Producto $producto Object to remove from the list of results
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function prune($producto = null)
    {
        if ($producto) {
            $this->addUsingAlias(ProductoPeer::IDPRODUCTO, $producto->getIdproducto(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
