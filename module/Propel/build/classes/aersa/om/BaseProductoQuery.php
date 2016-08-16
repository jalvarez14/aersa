<?php


/**
 * Base class that represents a query for the 'producto' table.
 *
 *
 *
 * @method ProductoQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 * @method ProductoQuery orderByIdempresa($order = Criteria::ASC) Order by the idempresa column
 * @method ProductoQuery orderByIdunidadmedida($order = Criteria::ASC) Order by the idunidadmedida column
 * @method ProductoQuery orderByProductoNombre($order = Criteria::ASC) Order by the producto_nombre column
 * @method ProductoQuery orderByIdcategoria($order = Criteria::ASC) Order by the idcategoria column
 * @method ProductoQuery orderByIdsubcategoria($order = Criteria::ASC) Order by the idsubcategoria column
 * @method ProductoQuery orderByProductoRendimiento($order = Criteria::ASC) Order by the producto_rendimiento column
 * @method ProductoQuery orderByProductoUltimocosto($order = Criteria::ASC) Order by the producto_ultimocosto column
 * @method ProductoQuery orderByProductoBaja($order = Criteria::ASC) Order by the producto_baja column
 * @method ProductoQuery orderByProductoTipo($order = Criteria::ASC) Order by the producto_tipo column
 * @method ProductoQuery orderByProductoCosto($order = Criteria::ASC) Order by the producto_costo column
 * @method ProductoQuery orderByProductoIva($order = Criteria::ASC) Order by the producto_iva column
 * @method ProductoQuery orderByProductoPrecio($order = Criteria::ASC) Order by the producto_precio column
 * @method ProductoQuery orderByProductoRendimientooriginal($order = Criteria::ASC) Order by the producto_rendimientooriginal column
 *
 * @method ProductoQuery groupByIdproducto() Group by the idproducto column
 * @method ProductoQuery groupByIdempresa() Group by the idempresa column
 * @method ProductoQuery groupByIdunidadmedida() Group by the idunidadmedida column
 * @method ProductoQuery groupByProductoNombre() Group by the producto_nombre column
 * @method ProductoQuery groupByIdcategoria() Group by the idcategoria column
 * @method ProductoQuery groupByIdsubcategoria() Group by the idsubcategoria column
 * @method ProductoQuery groupByProductoRendimiento() Group by the producto_rendimiento column
 * @method ProductoQuery groupByProductoUltimocosto() Group by the producto_ultimocosto column
 * @method ProductoQuery groupByProductoBaja() Group by the producto_baja column
 * @method ProductoQuery groupByProductoTipo() Group by the producto_tipo column
 * @method ProductoQuery groupByProductoCosto() Group by the producto_costo column
 * @method ProductoQuery groupByProductoIva() Group by the producto_iva column
 * @method ProductoQuery groupByProductoPrecio() Group by the producto_precio column
 * @method ProductoQuery groupByProductoRendimientooriginal() Group by the producto_rendimientooriginal column
 *
 * @method ProductoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProductoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProductoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProductoQuery leftJoinCategoriaRelatedByIdcategoria($relationAlias = null) Adds a LEFT JOIN clause to the query using the CategoriaRelatedByIdcategoria relation
 * @method ProductoQuery rightJoinCategoriaRelatedByIdcategoria($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CategoriaRelatedByIdcategoria relation
 * @method ProductoQuery innerJoinCategoriaRelatedByIdcategoria($relationAlias = null) Adds a INNER JOIN clause to the query using the CategoriaRelatedByIdcategoria relation
 *
 * @method ProductoQuery leftJoinEmpresa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empresa relation
 * @method ProductoQuery rightJoinEmpresa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empresa relation
 * @method ProductoQuery innerJoinEmpresa($relationAlias = null) Adds a INNER JOIN clause to the query using the Empresa relation
 *
 * @method ProductoQuery leftJoinCategoriaRelatedByIdsubcategoria($relationAlias = null) Adds a LEFT JOIN clause to the query using the CategoriaRelatedByIdsubcategoria relation
 * @method ProductoQuery rightJoinCategoriaRelatedByIdsubcategoria($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CategoriaRelatedByIdsubcategoria relation
 * @method ProductoQuery innerJoinCategoriaRelatedByIdsubcategoria($relationAlias = null) Adds a INNER JOIN clause to the query using the CategoriaRelatedByIdsubcategoria relation
 *
 * @method ProductoQuery leftJoinUnidadmedida($relationAlias = null) Adds a LEFT JOIN clause to the query using the Unidadmedida relation
 * @method ProductoQuery rightJoinUnidadmedida($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Unidadmedida relation
 * @method ProductoQuery innerJoinUnidadmedida($relationAlias = null) Adds a INNER JOIN clause to the query using the Unidadmedida relation
 *
 * @method ProductoQuery leftJoinAjusteinventario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ajusteinventario relation
 * @method ProductoQuery rightJoinAjusteinventario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ajusteinventario relation
 * @method ProductoQuery innerJoinAjusteinventario($relationAlias = null) Adds a INNER JOIN clause to the query using the Ajusteinventario relation
 *
 * @method ProductoQuery leftJoinCodigobarras($relationAlias = null) Adds a LEFT JOIN clause to the query using the Codigobarras relation
 * @method ProductoQuery rightJoinCodigobarras($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Codigobarras relation
 * @method ProductoQuery innerJoinCodigobarras($relationAlias = null) Adds a INNER JOIN clause to the query using the Codigobarras relation
 *
 * @method ProductoQuery leftJoinCompradetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Compradetalle relation
 * @method ProductoQuery rightJoinCompradetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Compradetalle relation
 * @method ProductoQuery innerJoinCompradetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Compradetalle relation
 *
 * @method ProductoQuery leftJoinConceptoscfdi($relationAlias = null) Adds a LEFT JOIN clause to the query using the Conceptoscfdi relation
 * @method ProductoQuery rightJoinConceptoscfdi($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Conceptoscfdi relation
 * @method ProductoQuery innerJoinConceptoscfdi($relationAlias = null) Adds a INNER JOIN clause to the query using the Conceptoscfdi relation
 *
 * @method ProductoQuery leftJoinDevoluciondetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Devoluciondetalle relation
 * @method ProductoQuery rightJoinDevoluciondetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Devoluciondetalle relation
 * @method ProductoQuery innerJoinDevoluciondetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Devoluciondetalle relation
 *
 * @method ProductoQuery leftJoinNotacreditodetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Notacreditodetalle relation
 * @method ProductoQuery rightJoinNotacreditodetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Notacreditodetalle relation
 * @method ProductoQuery innerJoinNotacreditodetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Notacreditodetalle relation
 *
 * @method ProductoQuery leftJoinOrdentablajeria($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ordentablajeria relation
 * @method ProductoQuery rightJoinOrdentablajeria($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ordentablajeria relation
 * @method ProductoQuery innerJoinOrdentablajeria($relationAlias = null) Adds a INNER JOIN clause to the query using the Ordentablajeria relation
 *
 * @method ProductoQuery leftJoinOrdentablajeriadetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ordentablajeriadetalle relation
 * @method ProductoQuery rightJoinOrdentablajeriadetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ordentablajeriadetalle relation
 * @method ProductoQuery innerJoinOrdentablajeriadetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Ordentablajeriadetalle relation
 *
 * @method ProductoQuery leftJoinPlantillatablajeria($relationAlias = null) Adds a LEFT JOIN clause to the query using the Plantillatablajeria relation
 * @method ProductoQuery rightJoinPlantillatablajeria($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Plantillatablajeria relation
 * @method ProductoQuery innerJoinPlantillatablajeria($relationAlias = null) Adds a INNER JOIN clause to the query using the Plantillatablajeria relation
 *
 * @method ProductoQuery leftJoinPlantillatablajeriadetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Plantillatablajeriadetalle relation
 * @method ProductoQuery rightJoinPlantillatablajeriadetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Plantillatablajeriadetalle relation
 * @method ProductoQuery innerJoinPlantillatablajeriadetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Plantillatablajeriadetalle relation
 *
 * @method ProductoQuery leftJoinProductocfdi($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productocfdi relation
 * @method ProductoQuery rightJoinProductocfdi($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productocfdi relation
 * @method ProductoQuery innerJoinProductocfdi($relationAlias = null) Adds a INNER JOIN clause to the query using the Productocfdi relation
 *
 * @method ProductoQuery leftJoinProductosucursalalmacen($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productosucursalalmacen relation
 * @method ProductoQuery rightJoinProductosucursalalmacen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productosucursalalmacen relation
 * @method ProductoQuery innerJoinProductosucursalalmacen($relationAlias = null) Adds a INNER JOIN clause to the query using the Productosucursalalmacen relation
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
 * @method ProductoQuery leftJoinVentadetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ventadetalle relation
 * @method ProductoQuery rightJoinVentadetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ventadetalle relation
 * @method ProductoQuery innerJoinVentadetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Ventadetalle relation
 *
 * @method Producto findOne(PropelPDO $con = null) Return the first Producto matching the query
 * @method Producto findOneOrCreate(PropelPDO $con = null) Return the first Producto matching the query, or a new Producto object populated from the query conditions when no match is found
 *
 * @method Producto findOneByIdempresa(int $idempresa) Return the first Producto filtered by the idempresa column
 * @method Producto findOneByIdunidadmedida(int $idunidadmedida) Return the first Producto filtered by the idunidadmedida column
 * @method Producto findOneByProductoNombre(string $producto_nombre) Return the first Producto filtered by the producto_nombre column
 * @method Producto findOneByIdcategoria(int $idcategoria) Return the first Producto filtered by the idcategoria column
 * @method Producto findOneByIdsubcategoria(int $idsubcategoria) Return the first Producto filtered by the idsubcategoria column
 * @method Producto findOneByProductoRendimiento(double $producto_rendimiento) Return the first Producto filtered by the producto_rendimiento column
 * @method Producto findOneByProductoUltimocosto(double $producto_ultimocosto) Return the first Producto filtered by the producto_ultimocosto column
 * @method Producto findOneByProductoBaja(boolean $producto_baja) Return the first Producto filtered by the producto_baja column
 * @method Producto findOneByProductoTipo(string $producto_tipo) Return the first Producto filtered by the producto_tipo column
 * @method Producto findOneByProductoCosto(double $producto_costo) Return the first Producto filtered by the producto_costo column
 * @method Producto findOneByProductoIva(boolean $producto_iva) Return the first Producto filtered by the producto_iva column
 * @method Producto findOneByProductoPrecio(double $producto_precio) Return the first Producto filtered by the producto_precio column
 * @method Producto findOneByProductoRendimientooriginal(double $producto_rendimientooriginal) Return the first Producto filtered by the producto_rendimientooriginal column
 *
 * @method array findByIdproducto(int $idproducto) Return Producto objects filtered by the idproducto column
 * @method array findByIdempresa(int $idempresa) Return Producto objects filtered by the idempresa column
 * @method array findByIdunidadmedida(int $idunidadmedida) Return Producto objects filtered by the idunidadmedida column
 * @method array findByProductoNombre(string $producto_nombre) Return Producto objects filtered by the producto_nombre column
 * @method array findByIdcategoria(int $idcategoria) Return Producto objects filtered by the idcategoria column
 * @method array findByIdsubcategoria(int $idsubcategoria) Return Producto objects filtered by the idsubcategoria column
 * @method array findByProductoRendimiento(double $producto_rendimiento) Return Producto objects filtered by the producto_rendimiento column
 * @method array findByProductoUltimocosto(double $producto_ultimocosto) Return Producto objects filtered by the producto_ultimocosto column
 * @method array findByProductoBaja(boolean $producto_baja) Return Producto objects filtered by the producto_baja column
 * @method array findByProductoTipo(string $producto_tipo) Return Producto objects filtered by the producto_tipo column
 * @method array findByProductoCosto(double $producto_costo) Return Producto objects filtered by the producto_costo column
 * @method array findByProductoIva(boolean $producto_iva) Return Producto objects filtered by the producto_iva column
 * @method array findByProductoPrecio(double $producto_precio) Return Producto objects filtered by the producto_precio column
 * @method array findByProductoRendimientooriginal(double $producto_rendimientooriginal) Return Producto objects filtered by the producto_rendimientooriginal column
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
        $sql = 'SELECT `idproducto`, `idempresa`, `idunidadmedida`, `producto_nombre`, `idcategoria`, `idsubcategoria`, `producto_rendimiento`, `producto_ultimocosto`, `producto_baja`, `producto_tipo`, `producto_costo`, `producto_iva`, `producto_precio`, `producto_rendimientooriginal` FROM `producto` WHERE `idproducto` = :p0';
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
     * Filter the query on the idempresa column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempresa(1234); // WHERE idempresa = 1234
     * $query->filterByIdempresa(array(12, 34)); // WHERE idempresa IN (12, 34)
     * $query->filterByIdempresa(array('min' => 12)); // WHERE idempresa >= 12
     * $query->filterByIdempresa(array('max' => 12)); // WHERE idempresa <= 12
     * </code>
     *
     * @see       filterByEmpresa()
     *
     * @param     mixed $idempresa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByIdempresa($idempresa = null, $comparison = null)
    {
        if (is_array($idempresa)) {
            $useMinMax = false;
            if (isset($idempresa['min'])) {
                $this->addUsingAlias(ProductoPeer::IDEMPRESA, $idempresa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempresa['max'])) {
                $this->addUsingAlias(ProductoPeer::IDEMPRESA, $idempresa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoPeer::IDEMPRESA, $idempresa, $comparison);
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
     * @see       filterByCategoriaRelatedByIdcategoria()
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
     * @see       filterByCategoriaRelatedByIdsubcategoria()
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
     * Filter the query on the producto_iva column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoIva(true); // WHERE producto_iva = true
     * $query->filterByProductoIva('yes'); // WHERE producto_iva = true
     * </code>
     *
     * @param     boolean|string $productoIva The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByProductoIva($productoIva = null, $comparison = null)
    {
        if (is_string($productoIva)) {
            $productoIva = in_array(strtolower($productoIva), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ProductoPeer::PRODUCTO_IVA, $productoIva, $comparison);
    }

    /**
     * Filter the query on the producto_precio column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoPrecio(1234); // WHERE producto_precio = 1234
     * $query->filterByProductoPrecio(array(12, 34)); // WHERE producto_precio IN (12, 34)
     * $query->filterByProductoPrecio(array('min' => 12)); // WHERE producto_precio >= 12
     * $query->filterByProductoPrecio(array('max' => 12)); // WHERE producto_precio <= 12
     * </code>
     *
     * @param     mixed $productoPrecio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByProductoPrecio($productoPrecio = null, $comparison = null)
    {
        if (is_array($productoPrecio)) {
            $useMinMax = false;
            if (isset($productoPrecio['min'])) {
                $this->addUsingAlias(ProductoPeer::PRODUCTO_PRECIO, $productoPrecio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productoPrecio['max'])) {
                $this->addUsingAlias(ProductoPeer::PRODUCTO_PRECIO, $productoPrecio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoPeer::PRODUCTO_PRECIO, $productoPrecio, $comparison);
    }

    /**
     * Filter the query on the producto_rendimientooriginal column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoRendimientooriginal(1234); // WHERE producto_rendimientooriginal = 1234
     * $query->filterByProductoRendimientooriginal(array(12, 34)); // WHERE producto_rendimientooriginal IN (12, 34)
     * $query->filterByProductoRendimientooriginal(array('min' => 12)); // WHERE producto_rendimientooriginal >= 12
     * $query->filterByProductoRendimientooriginal(array('max' => 12)); // WHERE producto_rendimientooriginal <= 12
     * </code>
     *
     * @param     mixed $productoRendimientooriginal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByProductoRendimientooriginal($productoRendimientooriginal = null, $comparison = null)
    {
        if (is_array($productoRendimientooriginal)) {
            $useMinMax = false;
            if (isset($productoRendimientooriginal['min'])) {
                $this->addUsingAlias(ProductoPeer::PRODUCTO_RENDIMIENTOORIGINAL, $productoRendimientooriginal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productoRendimientooriginal['max'])) {
                $this->addUsingAlias(ProductoPeer::PRODUCTO_RENDIMIENTOORIGINAL, $productoRendimientooriginal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoPeer::PRODUCTO_RENDIMIENTOORIGINAL, $productoRendimientooriginal, $comparison);
    }

    /**
     * Filter the query by a related Categoria object
     *
     * @param   Categoria|PropelObjectCollection $categoria The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCategoriaRelatedByIdcategoria($categoria, $comparison = null)
    {
        if ($categoria instanceof Categoria) {
            return $this
                ->addUsingAlias(ProductoPeer::IDCATEGORIA, $categoria->getIdcategoria(), $comparison);
        } elseif ($categoria instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProductoPeer::IDCATEGORIA, $categoria->toKeyValue('PrimaryKey', 'Idcategoria'), $comparison);
        } else {
            throw new PropelException('filterByCategoriaRelatedByIdcategoria() only accepts arguments of type Categoria or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CategoriaRelatedByIdcategoria relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinCategoriaRelatedByIdcategoria($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CategoriaRelatedByIdcategoria');

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
            $this->addJoinObject($join, 'CategoriaRelatedByIdcategoria');
        }

        return $this;
    }

    /**
     * Use the CategoriaRelatedByIdcategoria relation Categoria object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CategoriaQuery A secondary query class using the current class as primary query
     */
    public function useCategoriaRelatedByIdcategoriaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCategoriaRelatedByIdcategoria($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CategoriaRelatedByIdcategoria', 'CategoriaQuery');
    }

    /**
     * Filter the query by a related Empresa object
     *
     * @param   Empresa|PropelObjectCollection $empresa The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpresa($empresa, $comparison = null)
    {
        if ($empresa instanceof Empresa) {
            return $this
                ->addUsingAlias(ProductoPeer::IDEMPRESA, $empresa->getIdempresa(), $comparison);
        } elseif ($empresa instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProductoPeer::IDEMPRESA, $empresa->toKeyValue('PrimaryKey', 'Idempresa'), $comparison);
        } else {
            throw new PropelException('filterByEmpresa() only accepts arguments of type Empresa or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Empresa relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinEmpresa($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Empresa');

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
            $this->addJoinObject($join, 'Empresa');
        }

        return $this;
    }

    /**
     * Use the Empresa relation Empresa object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpresaQuery A secondary query class using the current class as primary query
     */
    public function useEmpresaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpresa($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Empresa', 'EmpresaQuery');
    }

    /**
     * Filter the query by a related Categoria object
     *
     * @param   Categoria|PropelObjectCollection $categoria The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCategoriaRelatedByIdsubcategoria($categoria, $comparison = null)
    {
        if ($categoria instanceof Categoria) {
            return $this
                ->addUsingAlias(ProductoPeer::IDSUBCATEGORIA, $categoria->getIdcategoria(), $comparison);
        } elseif ($categoria instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProductoPeer::IDSUBCATEGORIA, $categoria->toKeyValue('PrimaryKey', 'Idcategoria'), $comparison);
        } else {
            throw new PropelException('filterByCategoriaRelatedByIdsubcategoria() only accepts arguments of type Categoria or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CategoriaRelatedByIdsubcategoria relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinCategoriaRelatedByIdsubcategoria($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CategoriaRelatedByIdsubcategoria');

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
            $this->addJoinObject($join, 'CategoriaRelatedByIdsubcategoria');
        }

        return $this;
    }

    /**
     * Use the CategoriaRelatedByIdsubcategoria relation Categoria object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CategoriaQuery A secondary query class using the current class as primary query
     */
    public function useCategoriaRelatedByIdsubcategoriaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCategoriaRelatedByIdsubcategoria($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CategoriaRelatedByIdsubcategoria', 'CategoriaQuery');
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
    public function joinUnidadmedida($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useUnidadmedidaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUnidadmedida($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Unidadmedida', 'UnidadmedidaQuery');
    }

    /**
     * Filter the query by a related Ajusteinventario object
     *
     * @param   Ajusteinventario|PropelObjectCollection $ajusteinventario  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAjusteinventario($ajusteinventario, $comparison = null)
    {
        if ($ajusteinventario instanceof Ajusteinventario) {
            return $this
                ->addUsingAlias(ProductoPeer::IDPRODUCTO, $ajusteinventario->getIdproducto(), $comparison);
        } elseif ($ajusteinventario instanceof PropelObjectCollection) {
            return $this
                ->useAjusteinventarioQuery()
                ->filterByPrimaryKeys($ajusteinventario->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAjusteinventario() only accepts arguments of type Ajusteinventario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Ajusteinventario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinAjusteinventario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Ajusteinventario');

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
            $this->addJoinObject($join, 'Ajusteinventario');
        }

        return $this;
    }

    /**
     * Use the Ajusteinventario relation Ajusteinventario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AjusteinventarioQuery A secondary query class using the current class as primary query
     */
    public function useAjusteinventarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAjusteinventario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ajusteinventario', 'AjusteinventarioQuery');
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
     * Filter the query by a related Conceptoscfdi object
     *
     * @param   Conceptoscfdi|PropelObjectCollection $conceptoscfdi  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByConceptoscfdi($conceptoscfdi, $comparison = null)
    {
        if ($conceptoscfdi instanceof Conceptoscfdi) {
            return $this
                ->addUsingAlias(ProductoPeer::IDPRODUCTO, $conceptoscfdi->getIdproducto(), $comparison);
        } elseif ($conceptoscfdi instanceof PropelObjectCollection) {
            return $this
                ->useConceptoscfdiQuery()
                ->filterByPrimaryKeys($conceptoscfdi->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByConceptoscfdi() only accepts arguments of type Conceptoscfdi or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Conceptoscfdi relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinConceptoscfdi($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Conceptoscfdi');

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
            $this->addJoinObject($join, 'Conceptoscfdi');
        }

        return $this;
    }

    /**
     * Use the Conceptoscfdi relation Conceptoscfdi object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ConceptoscfdiQuery A secondary query class using the current class as primary query
     */
    public function useConceptoscfdiQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinConceptoscfdi($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Conceptoscfdi', 'ConceptoscfdiQuery');
    }

    /**
     * Filter the query by a related Devoluciondetalle object
     *
     * @param   Devoluciondetalle|PropelObjectCollection $devoluciondetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDevoluciondetalle($devoluciondetalle, $comparison = null)
    {
        if ($devoluciondetalle instanceof Devoluciondetalle) {
            return $this
                ->addUsingAlias(ProductoPeer::IDPRODUCTO, $devoluciondetalle->getIdproducto(), $comparison);
        } elseif ($devoluciondetalle instanceof PropelObjectCollection) {
            return $this
                ->useDevoluciondetalleQuery()
                ->filterByPrimaryKeys($devoluciondetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByDevoluciondetalle() only accepts arguments of type Devoluciondetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Devoluciondetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinDevoluciondetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Devoluciondetalle');

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
            $this->addJoinObject($join, 'Devoluciondetalle');
        }

        return $this;
    }

    /**
     * Use the Devoluciondetalle relation Devoluciondetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DevoluciondetalleQuery A secondary query class using the current class as primary query
     */
    public function useDevoluciondetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDevoluciondetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Devoluciondetalle', 'DevoluciondetalleQuery');
    }

    /**
     * Filter the query by a related Notacreditodetalle object
     *
     * @param   Notacreditodetalle|PropelObjectCollection $notacreditodetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByNotacreditodetalle($notacreditodetalle, $comparison = null)
    {
        if ($notacreditodetalle instanceof Notacreditodetalle) {
            return $this
                ->addUsingAlias(ProductoPeer::IDPRODUCTO, $notacreditodetalle->getIdproducto(), $comparison);
        } elseif ($notacreditodetalle instanceof PropelObjectCollection) {
            return $this
                ->useNotacreditodetalleQuery()
                ->filterByPrimaryKeys($notacreditodetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByNotacreditodetalle() only accepts arguments of type Notacreditodetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Notacreditodetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinNotacreditodetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Notacreditodetalle');

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
            $this->addJoinObject($join, 'Notacreditodetalle');
        }

        return $this;
    }

    /**
     * Use the Notacreditodetalle relation Notacreditodetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   NotacreditodetalleQuery A secondary query class using the current class as primary query
     */
    public function useNotacreditodetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinNotacreditodetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Notacreditodetalle', 'NotacreditodetalleQuery');
    }

    /**
     * Filter the query by a related Ordentablajeria object
     *
     * @param   Ordentablajeria|PropelObjectCollection $ordentablajeria  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOrdentablajeria($ordentablajeria, $comparison = null)
    {
        if ($ordentablajeria instanceof Ordentablajeria) {
            return $this
                ->addUsingAlias(ProductoPeer::IDPRODUCTO, $ordentablajeria->getIdproducto(), $comparison);
        } elseif ($ordentablajeria instanceof PropelObjectCollection) {
            return $this
                ->useOrdentablajeriaQuery()
                ->filterByPrimaryKeys($ordentablajeria->getPrimaryKeys())
                ->endUse();
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
     * @return ProductoQuery The current query, for fluid interface
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
     * Filter the query by a related Ordentablajeriadetalle object
     *
     * @param   Ordentablajeriadetalle|PropelObjectCollection $ordentablajeriadetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOrdentablajeriadetalle($ordentablajeriadetalle, $comparison = null)
    {
        if ($ordentablajeriadetalle instanceof Ordentablajeriadetalle) {
            return $this
                ->addUsingAlias(ProductoPeer::IDPRODUCTO, $ordentablajeriadetalle->getIdproducto(), $comparison);
        } elseif ($ordentablajeriadetalle instanceof PropelObjectCollection) {
            return $this
                ->useOrdentablajeriadetalleQuery()
                ->filterByPrimaryKeys($ordentablajeriadetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOrdentablajeriadetalle() only accepts arguments of type Ordentablajeriadetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Ordentablajeriadetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinOrdentablajeriadetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Ordentablajeriadetalle');

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
            $this->addJoinObject($join, 'Ordentablajeriadetalle');
        }

        return $this;
    }

    /**
     * Use the Ordentablajeriadetalle relation Ordentablajeriadetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OrdentablajeriadetalleQuery A secondary query class using the current class as primary query
     */
    public function useOrdentablajeriadetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOrdentablajeriadetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ordentablajeriadetalle', 'OrdentablajeriadetalleQuery');
    }

    /**
     * Filter the query by a related Plantillatablajeria object
     *
     * @param   Plantillatablajeria|PropelObjectCollection $plantillatablajeria  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPlantillatablajeria($plantillatablajeria, $comparison = null)
    {
        if ($plantillatablajeria instanceof Plantillatablajeria) {
            return $this
                ->addUsingAlias(ProductoPeer::IDPRODUCTO, $plantillatablajeria->getIdproducto(), $comparison);
        } elseif ($plantillatablajeria instanceof PropelObjectCollection) {
            return $this
                ->usePlantillatablajeriaQuery()
                ->filterByPrimaryKeys($plantillatablajeria->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPlantillatablajeria() only accepts arguments of type Plantillatablajeria or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Plantillatablajeria relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinPlantillatablajeria($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Plantillatablajeria');

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
            $this->addJoinObject($join, 'Plantillatablajeria');
        }

        return $this;
    }

    /**
     * Use the Plantillatablajeria relation Plantillatablajeria object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PlantillatablajeriaQuery A secondary query class using the current class as primary query
     */
    public function usePlantillatablajeriaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPlantillatablajeria($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Plantillatablajeria', 'PlantillatablajeriaQuery');
    }

    /**
     * Filter the query by a related Plantillatablajeriadetalle object
     *
     * @param   Plantillatablajeriadetalle|PropelObjectCollection $plantillatablajeriadetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPlantillatablajeriadetalle($plantillatablajeriadetalle, $comparison = null)
    {
        if ($plantillatablajeriadetalle instanceof Plantillatablajeriadetalle) {
            return $this
                ->addUsingAlias(ProductoPeer::IDPRODUCTO, $plantillatablajeriadetalle->getIdproducto(), $comparison);
        } elseif ($plantillatablajeriadetalle instanceof PropelObjectCollection) {
            return $this
                ->usePlantillatablajeriadetalleQuery()
                ->filterByPrimaryKeys($plantillatablajeriadetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPlantillatablajeriadetalle() only accepts arguments of type Plantillatablajeriadetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Plantillatablajeriadetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinPlantillatablajeriadetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Plantillatablajeriadetalle');

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
            $this->addJoinObject($join, 'Plantillatablajeriadetalle');
        }

        return $this;
    }

    /**
     * Use the Plantillatablajeriadetalle relation Plantillatablajeriadetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PlantillatablajeriadetalleQuery A secondary query class using the current class as primary query
     */
    public function usePlantillatablajeriadetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPlantillatablajeriadetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Plantillatablajeriadetalle', 'PlantillatablajeriadetalleQuery');
    }

    /**
     * Filter the query by a related Productocfdi object
     *
     * @param   Productocfdi|PropelObjectCollection $productocfdi  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductocfdi($productocfdi, $comparison = null)
    {
        if ($productocfdi instanceof Productocfdi) {
            return $this
                ->addUsingAlias(ProductoPeer::IDPRODUCTO, $productocfdi->getIdproducto(), $comparison);
        } elseif ($productocfdi instanceof PropelObjectCollection) {
            return $this
                ->useProductocfdiQuery()
                ->filterByPrimaryKeys($productocfdi->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProductocfdi() only accepts arguments of type Productocfdi or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Productocfdi relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinProductocfdi($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Productocfdi');

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
            $this->addJoinObject($join, 'Productocfdi');
        }

        return $this;
    }

    /**
     * Use the Productocfdi relation Productocfdi object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProductocfdiQuery A secondary query class using the current class as primary query
     */
    public function useProductocfdiQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProductocfdi($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Productocfdi', 'ProductocfdiQuery');
    }

    /**
     * Filter the query by a related Productosucursalalmacen object
     *
     * @param   Productosucursalalmacen|PropelObjectCollection $productosucursalalmacen  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductosucursalalmacen($productosucursalalmacen, $comparison = null)
    {
        if ($productosucursalalmacen instanceof Productosucursalalmacen) {
            return $this
                ->addUsingAlias(ProductoPeer::IDPRODUCTO, $productosucursalalmacen->getIdproducto(), $comparison);
        } elseif ($productosucursalalmacen instanceof PropelObjectCollection) {
            return $this
                ->useProductosucursalalmacenQuery()
                ->filterByPrimaryKeys($productosucursalalmacen->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProductosucursalalmacen() only accepts arguments of type Productosucursalalmacen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Productosucursalalmacen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinProductosucursalalmacen($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Productosucursalalmacen');

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
            $this->addJoinObject($join, 'Productosucursalalmacen');
        }

        return $this;
    }

    /**
     * Use the Productosucursalalmacen relation Productosucursalalmacen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProductosucursalalmacenQuery A secondary query class using the current class as primary query
     */
    public function useProductosucursalalmacenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProductosucursalalmacen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Productosucursalalmacen', 'ProductosucursalalmacenQuery');
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
     * Filter the query by a related Ventadetalle object
     *
     * @param   Ventadetalle|PropelObjectCollection $ventadetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVentadetalle($ventadetalle, $comparison = null)
    {
        if ($ventadetalle instanceof Ventadetalle) {
            return $this
                ->addUsingAlias(ProductoPeer::IDPRODUCTO, $ventadetalle->getIdproducto(), $comparison);
        } elseif ($ventadetalle instanceof PropelObjectCollection) {
            return $this
                ->useVentadetalleQuery()
                ->filterByPrimaryKeys($ventadetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByVentadetalle() only accepts arguments of type Ventadetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Ventadetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinVentadetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Ventadetalle');

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
            $this->addJoinObject($join, 'Ventadetalle');
        }

        return $this;
    }

    /**
     * Use the Ventadetalle relation Ventadetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   VentadetalleQuery A secondary query class using the current class as primary query
     */
    public function useVentadetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVentadetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ventadetalle', 'VentadetalleQuery');
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
