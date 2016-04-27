<?php


/**
 * Base class that represents a query for the 'compra' table.
 *
 *
 *
 * @method CompraQuery orderByIdcompra($order = Criteria::ASC) Order by the idcompra column
 * @method CompraQuery orderByIdempresa($order = Criteria::ASC) Order by the idempresa column
 * @method CompraQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method CompraQuery orderByIdproveedor($order = Criteria::ASC) Order by the idproveedor column
 * @method CompraQuery orderByIdusuario($order = Criteria::ASC) Order by the idusuario column
 * @method CompraQuery orderByIdauditor($order = Criteria::ASC) Order by the idauditor column
 * @method CompraQuery orderByIdalmacen($order = Criteria::ASC) Order by the idalmacen column
 * @method CompraQuery orderByCompraFolio($order = Criteria::ASC) Order by the compra_folio column
 * @method CompraQuery orderByCompraRevisada($order = Criteria::ASC) Order by the compra_revisada column
 * @method CompraQuery orderByCompraFactura($order = Criteria::ASC) Order by the compra_factura column
 * @method CompraQuery orderByCompraFechacreacion($order = Criteria::ASC) Order by the compra_fechacreacion column
 * @method CompraQuery orderByCompraFechacompra($order = Criteria::ASC) Order by the compra_fechacompra column
 * @method CompraQuery orderByCompraFechaentrega($order = Criteria::ASC) Order by the compra_fechaentrega column
 * @method CompraQuery orderByCompraIeps($order = Criteria::ASC) Order by the compra_ieps column
 * @method CompraQuery orderByCompraIva($order = Criteria::ASC) Order by the compra_iva column
 * @method CompraQuery orderByCompraSubtotal($order = Criteria::ASC) Order by the compra_subtotal column
 * @method CompraQuery orderByCompraTotal($order = Criteria::ASC) Order by the compra_total column
 * @method CompraQuery orderByCompraTipo($order = Criteria::ASC) Order by the compra_tipo column
 *
 * @method CompraQuery groupByIdcompra() Group by the idcompra column
 * @method CompraQuery groupByIdempresa() Group by the idempresa column
 * @method CompraQuery groupByIdsucursal() Group by the idsucursal column
 * @method CompraQuery groupByIdproveedor() Group by the idproveedor column
 * @method CompraQuery groupByIdusuario() Group by the idusuario column
 * @method CompraQuery groupByIdauditor() Group by the idauditor column
 * @method CompraQuery groupByIdalmacen() Group by the idalmacen column
 * @method CompraQuery groupByCompraFolio() Group by the compra_folio column
 * @method CompraQuery groupByCompraRevisada() Group by the compra_revisada column
 * @method CompraQuery groupByCompraFactura() Group by the compra_factura column
 * @method CompraQuery groupByCompraFechacreacion() Group by the compra_fechacreacion column
 * @method CompraQuery groupByCompraFechacompra() Group by the compra_fechacompra column
 * @method CompraQuery groupByCompraFechaentrega() Group by the compra_fechaentrega column
 * @method CompraQuery groupByCompraIeps() Group by the compra_ieps column
 * @method CompraQuery groupByCompraIva() Group by the compra_iva column
 * @method CompraQuery groupByCompraSubtotal() Group by the compra_subtotal column
 * @method CompraQuery groupByCompraTotal() Group by the compra_total column
 * @method CompraQuery groupByCompraTipo() Group by the compra_tipo column
 *
 * @method CompraQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CompraQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CompraQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CompraQuery leftJoinAlmacen($relationAlias = null) Adds a LEFT JOIN clause to the query using the Almacen relation
 * @method CompraQuery rightJoinAlmacen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Almacen relation
 * @method CompraQuery innerJoinAlmacen($relationAlias = null) Adds a INNER JOIN clause to the query using the Almacen relation
 *
 * @method CompraQuery leftJoinUsuarioRelatedByIdauditor($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioRelatedByIdauditor relation
 * @method CompraQuery rightJoinUsuarioRelatedByIdauditor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioRelatedByIdauditor relation
 * @method CompraQuery innerJoinUsuarioRelatedByIdauditor($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioRelatedByIdauditor relation
 *
 * @method CompraQuery leftJoinEmpresa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empresa relation
 * @method CompraQuery rightJoinEmpresa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empresa relation
 * @method CompraQuery innerJoinEmpresa($relationAlias = null) Adds a INNER JOIN clause to the query using the Empresa relation
 *
 * @method CompraQuery leftJoinProveedor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Proveedor relation
 * @method CompraQuery rightJoinProveedor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Proveedor relation
 * @method CompraQuery innerJoinProveedor($relationAlias = null) Adds a INNER JOIN clause to the query using the Proveedor relation
 *
 * @method CompraQuery leftJoinSucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursal relation
 * @method CompraQuery rightJoinSucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursal relation
 * @method CompraQuery innerJoinSucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursal relation
 *
 * @method CompraQuery leftJoinUsuarioRelatedByIdusuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioRelatedByIdusuario relation
 * @method CompraQuery rightJoinUsuarioRelatedByIdusuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioRelatedByIdusuario relation
 * @method CompraQuery innerJoinUsuarioRelatedByIdusuario($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioRelatedByIdusuario relation
 *
 * @method CompraQuery leftJoinCompradetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Compradetalle relation
 * @method CompraQuery rightJoinCompradetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Compradetalle relation
 * @method CompraQuery innerJoinCompradetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Compradetalle relation
 *
 * @method CompraQuery leftJoinCompranota($relationAlias = null) Adds a LEFT JOIN clause to the query using the Compranota relation
 * @method CompraQuery rightJoinCompranota($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Compranota relation
 * @method CompraQuery innerJoinCompranota($relationAlias = null) Adds a INNER JOIN clause to the query using the Compranota relation
 *
 * @method Compra findOne(PropelPDO $con = null) Return the first Compra matching the query
 * @method Compra findOneOrCreate(PropelPDO $con = null) Return the first Compra matching the query, or a new Compra object populated from the query conditions when no match is found
 *
 * @method Compra findOneByIdempresa(int $idempresa) Return the first Compra filtered by the idempresa column
 * @method Compra findOneByIdsucursal(int $idsucursal) Return the first Compra filtered by the idsucursal column
 * @method Compra findOneByIdproveedor(int $idproveedor) Return the first Compra filtered by the idproveedor column
 * @method Compra findOneByIdusuario(int $idusuario) Return the first Compra filtered by the idusuario column
 * @method Compra findOneByIdauditor(int $idauditor) Return the first Compra filtered by the idauditor column
 * @method Compra findOneByIdalmacen(int $idalmacen) Return the first Compra filtered by the idalmacen column
 * @method Compra findOneByCompraFolio(string $compra_folio) Return the first Compra filtered by the compra_folio column
 * @method Compra findOneByCompraRevisada(boolean $compra_revisada) Return the first Compra filtered by the compra_revisada column
 * @method Compra findOneByCompraFactura(string $compra_factura) Return the first Compra filtered by the compra_factura column
 * @method Compra findOneByCompraFechacreacion(string $compra_fechacreacion) Return the first Compra filtered by the compra_fechacreacion column
 * @method Compra findOneByCompraFechacompra(string $compra_fechacompra) Return the first Compra filtered by the compra_fechacompra column
 * @method Compra findOneByCompraFechaentrega(string $compra_fechaentrega) Return the first Compra filtered by the compra_fechaentrega column
 * @method Compra findOneByCompraIeps(string $compra_ieps) Return the first Compra filtered by the compra_ieps column
 * @method Compra findOneByCompraIva(string $compra_iva) Return the first Compra filtered by the compra_iva column
 * @method Compra findOneByCompraSubtotal(string $compra_subtotal) Return the first Compra filtered by the compra_subtotal column
 * @method Compra findOneByCompraTotal(string $compra_total) Return the first Compra filtered by the compra_total column
 * @method Compra findOneByCompraTipo(string $compra_tipo) Return the first Compra filtered by the compra_tipo column
 *
 * @method array findByIdcompra(int $idcompra) Return Compra objects filtered by the idcompra column
 * @method array findByIdempresa(int $idempresa) Return Compra objects filtered by the idempresa column
 * @method array findByIdsucursal(int $idsucursal) Return Compra objects filtered by the idsucursal column
 * @method array findByIdproveedor(int $idproveedor) Return Compra objects filtered by the idproveedor column
 * @method array findByIdusuario(int $idusuario) Return Compra objects filtered by the idusuario column
 * @method array findByIdauditor(int $idauditor) Return Compra objects filtered by the idauditor column
 * @method array findByIdalmacen(int $idalmacen) Return Compra objects filtered by the idalmacen column
 * @method array findByCompraFolio(string $compra_folio) Return Compra objects filtered by the compra_folio column
 * @method array findByCompraRevisada(boolean $compra_revisada) Return Compra objects filtered by the compra_revisada column
 * @method array findByCompraFactura(string $compra_factura) Return Compra objects filtered by the compra_factura column
 * @method array findByCompraFechacreacion(string $compra_fechacreacion) Return Compra objects filtered by the compra_fechacreacion column
 * @method array findByCompraFechacompra(string $compra_fechacompra) Return Compra objects filtered by the compra_fechacompra column
 * @method array findByCompraFechaentrega(string $compra_fechaentrega) Return Compra objects filtered by the compra_fechaentrega column
 * @method array findByCompraIeps(string $compra_ieps) Return Compra objects filtered by the compra_ieps column
 * @method array findByCompraIva(string $compra_iva) Return Compra objects filtered by the compra_iva column
 * @method array findByCompraSubtotal(string $compra_subtotal) Return Compra objects filtered by the compra_subtotal column
 * @method array findByCompraTotal(string $compra_total) Return Compra objects filtered by the compra_total column
 * @method array findByCompraTipo(string $compra_tipo) Return Compra objects filtered by the compra_tipo column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseCompraQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCompraQuery object.
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
            $modelName = 'Compra';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CompraQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CompraQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CompraQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CompraQuery) {
            return $criteria;
        }
        $query = new CompraQuery(null, null, $modelAlias);

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
     * @return   Compra|Compra[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CompraPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Compra A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdcompra($key, $con = null)
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
     * @return                 Compra A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idcompra`, `idempresa`, `idsucursal`, `idproveedor`, `idusuario`, `idauditor`, `idalmacen`, `compra_folio`, `compra_revisada`, `compra_factura`, `compra_fechacreacion`, `compra_fechacompra`, `compra_fechaentrega`, `compra_ieps`, `compra_iva`, `compra_subtotal`, `compra_total`, `compra_tipo` FROM `compra` WHERE `idcompra` = :p0';
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
            $obj = new Compra();
            $obj->hydrate($row);
            CompraPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Compra|Compra[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Compra[]|mixed the list of results, formatted by the current formatter
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
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CompraPeer::IDCOMPRA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CompraPeer::IDCOMPRA, $keys, Criteria::IN);
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
     * @param     mixed $idcompra The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByIdcompra($idcompra = null, $comparison = null)
    {
        if (is_array($idcompra)) {
            $useMinMax = false;
            if (isset($idcompra['min'])) {
                $this->addUsingAlias(CompraPeer::IDCOMPRA, $idcompra['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcompra['max'])) {
                $this->addUsingAlias(CompraPeer::IDCOMPRA, $idcompra['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::IDCOMPRA, $idcompra, $comparison);
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
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByIdempresa($idempresa = null, $comparison = null)
    {
        if (is_array($idempresa)) {
            $useMinMax = false;
            if (isset($idempresa['min'])) {
                $this->addUsingAlias(CompraPeer::IDEMPRESA, $idempresa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempresa['max'])) {
                $this->addUsingAlias(CompraPeer::IDEMPRESA, $idempresa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::IDEMPRESA, $idempresa, $comparison);
    }

    /**
     * Filter the query on the idsucursal column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsucursal(1234); // WHERE idsucursal = 1234
     * $query->filterByIdsucursal(array(12, 34)); // WHERE idsucursal IN (12, 34)
     * $query->filterByIdsucursal(array('min' => 12)); // WHERE idsucursal >= 12
     * $query->filterByIdsucursal(array('max' => 12)); // WHERE idsucursal <= 12
     * </code>
     *
     * @see       filterBySucursal()
     *
     * @param     mixed $idsucursal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(CompraPeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(CompraPeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::IDSUCURSAL, $idsucursal, $comparison);
    }

    /**
     * Filter the query on the idproveedor column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproveedor(1234); // WHERE idproveedor = 1234
     * $query->filterByIdproveedor(array(12, 34)); // WHERE idproveedor IN (12, 34)
     * $query->filterByIdproveedor(array('min' => 12)); // WHERE idproveedor >= 12
     * $query->filterByIdproveedor(array('max' => 12)); // WHERE idproveedor <= 12
     * </code>
     *
     * @see       filterByProveedor()
     *
     * @param     mixed $idproveedor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByIdproveedor($idproveedor = null, $comparison = null)
    {
        if (is_array($idproveedor)) {
            $useMinMax = false;
            if (isset($idproveedor['min'])) {
                $this->addUsingAlias(CompraPeer::IDPROVEEDOR, $idproveedor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproveedor['max'])) {
                $this->addUsingAlias(CompraPeer::IDPROVEEDOR, $idproveedor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::IDPROVEEDOR, $idproveedor, $comparison);
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
     * @see       filterByUsuarioRelatedByIdusuario()
     *
     * @param     mixed $idusuario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByIdusuario($idusuario = null, $comparison = null)
    {
        if (is_array($idusuario)) {
            $useMinMax = false;
            if (isset($idusuario['min'])) {
                $this->addUsingAlias(CompraPeer::IDUSUARIO, $idusuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idusuario['max'])) {
                $this->addUsingAlias(CompraPeer::IDUSUARIO, $idusuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::IDUSUARIO, $idusuario, $comparison);
    }

    /**
     * Filter the query on the idauditor column
     *
     * Example usage:
     * <code>
     * $query->filterByIdauditor(1234); // WHERE idauditor = 1234
     * $query->filterByIdauditor(array(12, 34)); // WHERE idauditor IN (12, 34)
     * $query->filterByIdauditor(array('min' => 12)); // WHERE idauditor >= 12
     * $query->filterByIdauditor(array('max' => 12)); // WHERE idauditor <= 12
     * </code>
     *
     * @see       filterByUsuarioRelatedByIdauditor()
     *
     * @param     mixed $idauditor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByIdauditor($idauditor = null, $comparison = null)
    {
        if (is_array($idauditor)) {
            $useMinMax = false;
            if (isset($idauditor['min'])) {
                $this->addUsingAlias(CompraPeer::IDAUDITOR, $idauditor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idauditor['max'])) {
                $this->addUsingAlias(CompraPeer::IDAUDITOR, $idauditor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::IDAUDITOR, $idauditor, $comparison);
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
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByIdalmacen($idalmacen = null, $comparison = null)
    {
        if (is_array($idalmacen)) {
            $useMinMax = false;
            if (isset($idalmacen['min'])) {
                $this->addUsingAlias(CompraPeer::IDALMACEN, $idalmacen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idalmacen['max'])) {
                $this->addUsingAlias(CompraPeer::IDALMACEN, $idalmacen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::IDALMACEN, $idalmacen, $comparison);
    }

    /**
     * Filter the query on the compra_folio column
     *
     * Example usage:
     * <code>
     * $query->filterByCompraFolio('fooValue');   // WHERE compra_folio = 'fooValue'
     * $query->filterByCompraFolio('%fooValue%'); // WHERE compra_folio LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compraFolio The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByCompraFolio($compraFolio = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compraFolio)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compraFolio)) {
                $compraFolio = str_replace('*', '%', $compraFolio);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CompraPeer::COMPRA_FOLIO, $compraFolio, $comparison);
    }

    /**
     * Filter the query on the compra_revisada column
     *
     * Example usage:
     * <code>
     * $query->filterByCompraRevisada(true); // WHERE compra_revisada = true
     * $query->filterByCompraRevisada('yes'); // WHERE compra_revisada = true
     * </code>
     *
     * @param     boolean|string $compraRevisada The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByCompraRevisada($compraRevisada = null, $comparison = null)
    {
        if (is_string($compraRevisada)) {
            $compraRevisada = in_array(strtolower($compraRevisada), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CompraPeer::COMPRA_REVISADA, $compraRevisada, $comparison);
    }

    /**
     * Filter the query on the compra_factura column
     *
     * Example usage:
     * <code>
     * $query->filterByCompraFactura('fooValue');   // WHERE compra_factura = 'fooValue'
     * $query->filterByCompraFactura('%fooValue%'); // WHERE compra_factura LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compraFactura The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByCompraFactura($compraFactura = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compraFactura)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compraFactura)) {
                $compraFactura = str_replace('*', '%', $compraFactura);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CompraPeer::COMPRA_FACTURA, $compraFactura, $comparison);
    }

    /**
     * Filter the query on the compra_fechacreacion column
     *
     * Example usage:
     * <code>
     * $query->filterByCompraFechacreacion('2011-03-14'); // WHERE compra_fechacreacion = '2011-03-14'
     * $query->filterByCompraFechacreacion('now'); // WHERE compra_fechacreacion = '2011-03-14'
     * $query->filterByCompraFechacreacion(array('max' => 'yesterday')); // WHERE compra_fechacreacion < '2011-03-13'
     * </code>
     *
     * @param     mixed $compraFechacreacion The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByCompraFechacreacion($compraFechacreacion = null, $comparison = null)
    {
        if (is_array($compraFechacreacion)) {
            $useMinMax = false;
            if (isset($compraFechacreacion['min'])) {
                $this->addUsingAlias(CompraPeer::COMPRA_FECHACREACION, $compraFechacreacion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($compraFechacreacion['max'])) {
                $this->addUsingAlias(CompraPeer::COMPRA_FECHACREACION, $compraFechacreacion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::COMPRA_FECHACREACION, $compraFechacreacion, $comparison);
    }

    /**
     * Filter the query on the compra_fechacompra column
     *
     * Example usage:
     * <code>
     * $query->filterByCompraFechacompra('2011-03-14'); // WHERE compra_fechacompra = '2011-03-14'
     * $query->filterByCompraFechacompra('now'); // WHERE compra_fechacompra = '2011-03-14'
     * $query->filterByCompraFechacompra(array('max' => 'yesterday')); // WHERE compra_fechacompra < '2011-03-13'
     * </code>
     *
     * @param     mixed $compraFechacompra The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByCompraFechacompra($compraFechacompra = null, $comparison = null)
    {
        if (is_array($compraFechacompra)) {
            $useMinMax = false;
            if (isset($compraFechacompra['min'])) {
                $this->addUsingAlias(CompraPeer::COMPRA_FECHACOMPRA, $compraFechacompra['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($compraFechacompra['max'])) {
                $this->addUsingAlias(CompraPeer::COMPRA_FECHACOMPRA, $compraFechacompra['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::COMPRA_FECHACOMPRA, $compraFechacompra, $comparison);
    }

    /**
     * Filter the query on the compra_fechaentrega column
     *
     * Example usage:
     * <code>
     * $query->filterByCompraFechaentrega('2011-03-14'); // WHERE compra_fechaentrega = '2011-03-14'
     * $query->filterByCompraFechaentrega('now'); // WHERE compra_fechaentrega = '2011-03-14'
     * $query->filterByCompraFechaentrega(array('max' => 'yesterday')); // WHERE compra_fechaentrega < '2011-03-13'
     * </code>
     *
     * @param     mixed $compraFechaentrega The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByCompraFechaentrega($compraFechaentrega = null, $comparison = null)
    {
        if (is_array($compraFechaentrega)) {
            $useMinMax = false;
            if (isset($compraFechaentrega['min'])) {
                $this->addUsingAlias(CompraPeer::COMPRA_FECHAENTREGA, $compraFechaentrega['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($compraFechaentrega['max'])) {
                $this->addUsingAlias(CompraPeer::COMPRA_FECHAENTREGA, $compraFechaentrega['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::COMPRA_FECHAENTREGA, $compraFechaentrega, $comparison);
    }

    /**
     * Filter the query on the compra_ieps column
     *
     * Example usage:
     * <code>
     * $query->filterByCompraIeps(1234); // WHERE compra_ieps = 1234
     * $query->filterByCompraIeps(array(12, 34)); // WHERE compra_ieps IN (12, 34)
     * $query->filterByCompraIeps(array('min' => 12)); // WHERE compra_ieps >= 12
     * $query->filterByCompraIeps(array('max' => 12)); // WHERE compra_ieps <= 12
     * </code>
     *
     * @param     mixed $compraIeps The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByCompraIeps($compraIeps = null, $comparison = null)
    {
        if (is_array($compraIeps)) {
            $useMinMax = false;
            if (isset($compraIeps['min'])) {
                $this->addUsingAlias(CompraPeer::COMPRA_IEPS, $compraIeps['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($compraIeps['max'])) {
                $this->addUsingAlias(CompraPeer::COMPRA_IEPS, $compraIeps['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::COMPRA_IEPS, $compraIeps, $comparison);
    }

    /**
     * Filter the query on the compra_iva column
     *
     * Example usage:
     * <code>
     * $query->filterByCompraIva(1234); // WHERE compra_iva = 1234
     * $query->filterByCompraIva(array(12, 34)); // WHERE compra_iva IN (12, 34)
     * $query->filterByCompraIva(array('min' => 12)); // WHERE compra_iva >= 12
     * $query->filterByCompraIva(array('max' => 12)); // WHERE compra_iva <= 12
     * </code>
     *
     * @param     mixed $compraIva The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByCompraIva($compraIva = null, $comparison = null)
    {
        if (is_array($compraIva)) {
            $useMinMax = false;
            if (isset($compraIva['min'])) {
                $this->addUsingAlias(CompraPeer::COMPRA_IVA, $compraIva['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($compraIva['max'])) {
                $this->addUsingAlias(CompraPeer::COMPRA_IVA, $compraIva['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::COMPRA_IVA, $compraIva, $comparison);
    }

    /**
     * Filter the query on the compra_subtotal column
     *
     * Example usage:
     * <code>
     * $query->filterByCompraSubtotal(1234); // WHERE compra_subtotal = 1234
     * $query->filterByCompraSubtotal(array(12, 34)); // WHERE compra_subtotal IN (12, 34)
     * $query->filterByCompraSubtotal(array('min' => 12)); // WHERE compra_subtotal >= 12
     * $query->filterByCompraSubtotal(array('max' => 12)); // WHERE compra_subtotal <= 12
     * </code>
     *
     * @param     mixed $compraSubtotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByCompraSubtotal($compraSubtotal = null, $comparison = null)
    {
        if (is_array($compraSubtotal)) {
            $useMinMax = false;
            if (isset($compraSubtotal['min'])) {
                $this->addUsingAlias(CompraPeer::COMPRA_SUBTOTAL, $compraSubtotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($compraSubtotal['max'])) {
                $this->addUsingAlias(CompraPeer::COMPRA_SUBTOTAL, $compraSubtotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::COMPRA_SUBTOTAL, $compraSubtotal, $comparison);
    }

    /**
     * Filter the query on the compra_total column
     *
     * Example usage:
     * <code>
     * $query->filterByCompraTotal(1234); // WHERE compra_total = 1234
     * $query->filterByCompraTotal(array(12, 34)); // WHERE compra_total IN (12, 34)
     * $query->filterByCompraTotal(array('min' => 12)); // WHERE compra_total >= 12
     * $query->filterByCompraTotal(array('max' => 12)); // WHERE compra_total <= 12
     * </code>
     *
     * @param     mixed $compraTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByCompraTotal($compraTotal = null, $comparison = null)
    {
        if (is_array($compraTotal)) {
            $useMinMax = false;
            if (isset($compraTotal['min'])) {
                $this->addUsingAlias(CompraPeer::COMPRA_TOTAL, $compraTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($compraTotal['max'])) {
                $this->addUsingAlias(CompraPeer::COMPRA_TOTAL, $compraTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::COMPRA_TOTAL, $compraTotal, $comparison);
    }

    /**
     * Filter the query on the compra_tipo column
     *
     * Example usage:
     * <code>
     * $query->filterByCompraTipo('fooValue');   // WHERE compra_tipo = 'fooValue'
     * $query->filterByCompraTipo('%fooValue%'); // WHERE compra_tipo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compraTipo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByCompraTipo($compraTipo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compraTipo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compraTipo)) {
                $compraTipo = str_replace('*', '%', $compraTipo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CompraPeer::COMPRA_TIPO, $compraTipo, $comparison);
    }

    /**
     * Filter the query by a related Almacen object
     *
     * @param   Almacen|PropelObjectCollection $almacen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CompraQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAlmacen($almacen, $comparison = null)
    {
        if ($almacen instanceof Almacen) {
            return $this
                ->addUsingAlias(CompraPeer::IDALMACEN, $almacen->getIdalmacen(), $comparison);
        } elseif ($almacen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CompraPeer::IDALMACEN, $almacen->toKeyValue('PrimaryKey', 'Idalmacen'), $comparison);
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
     * @return CompraQuery The current query, for fluid interface
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
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CompraQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuarioRelatedByIdauditor($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(CompraPeer::IDAUDITOR, $usuario->getIdusuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CompraPeer::IDAUDITOR, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
        } else {
            throw new PropelException('filterByUsuarioRelatedByIdauditor() only accepts arguments of type Usuario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UsuarioRelatedByIdauditor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function joinUsuarioRelatedByIdauditor($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UsuarioRelatedByIdauditor');

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
            $this->addJoinObject($join, 'UsuarioRelatedByIdauditor');
        }

        return $this;
    }

    /**
     * Use the UsuarioRelatedByIdauditor relation Usuario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuarioQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioRelatedByIdauditorQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinUsuarioRelatedByIdauditor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UsuarioRelatedByIdauditor', 'UsuarioQuery');
    }

    /**
     * Filter the query by a related Empresa object
     *
     * @param   Empresa|PropelObjectCollection $empresa The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CompraQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpresa($empresa, $comparison = null)
    {
        if ($empresa instanceof Empresa) {
            return $this
                ->addUsingAlias(CompraPeer::IDEMPRESA, $empresa->getIdempresa(), $comparison);
        } elseif ($empresa instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CompraPeer::IDEMPRESA, $empresa->toKeyValue('PrimaryKey', 'Idempresa'), $comparison);
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
     * @return CompraQuery The current query, for fluid interface
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
     * Filter the query by a related Proveedor object
     *
     * @param   Proveedor|PropelObjectCollection $proveedor The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CompraQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProveedor($proveedor, $comparison = null)
    {
        if ($proveedor instanceof Proveedor) {
            return $this
                ->addUsingAlias(CompraPeer::IDPROVEEDOR, $proveedor->getIdproveedor(), $comparison);
        } elseif ($proveedor instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CompraPeer::IDPROVEEDOR, $proveedor->toKeyValue('PrimaryKey', 'Idproveedor'), $comparison);
        } else {
            throw new PropelException('filterByProveedor() only accepts arguments of type Proveedor or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Proveedor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function joinProveedor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Proveedor');

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
            $this->addJoinObject($join, 'Proveedor');
        }

        return $this;
    }

    /**
     * Use the Proveedor relation Proveedor object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProveedorQuery A secondary query class using the current class as primary query
     */
    public function useProveedorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProveedor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Proveedor', 'ProveedorQuery');
    }

    /**
     * Filter the query by a related Sucursal object
     *
     * @param   Sucursal|PropelObjectCollection $sucursal The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CompraQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursal($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(CompraPeer::IDSUCURSAL, $sucursal->getIdsucursal(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CompraPeer::IDSUCURSAL, $sucursal->toKeyValue('PrimaryKey', 'Idsucursal'), $comparison);
        } else {
            throw new PropelException('filterBySucursal() only accepts arguments of type Sucursal or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Sucursal relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function joinSucursal($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Sucursal');

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
            $this->addJoinObject($join, 'Sucursal');
        }

        return $this;
    }

    /**
     * Use the Sucursal relation Sucursal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SucursalQuery A secondary query class using the current class as primary query
     */
    public function useSucursalQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSucursal($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Sucursal', 'SucursalQuery');
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CompraQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuarioRelatedByIdusuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(CompraPeer::IDUSUARIO, $usuario->getIdusuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CompraPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
        } else {
            throw new PropelException('filterByUsuarioRelatedByIdusuario() only accepts arguments of type Usuario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UsuarioRelatedByIdusuario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function joinUsuarioRelatedByIdusuario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UsuarioRelatedByIdusuario');

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
            $this->addJoinObject($join, 'UsuarioRelatedByIdusuario');
        }

        return $this;
    }

    /**
     * Use the UsuarioRelatedByIdusuario relation Usuario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuarioQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioRelatedByIdusuarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUsuarioRelatedByIdusuario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UsuarioRelatedByIdusuario', 'UsuarioQuery');
    }

    /**
     * Filter the query by a related Compradetalle object
     *
     * @param   Compradetalle|PropelObjectCollection $compradetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CompraQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCompradetalle($compradetalle, $comparison = null)
    {
        if ($compradetalle instanceof Compradetalle) {
            return $this
                ->addUsingAlias(CompraPeer::IDCOMPRA, $compradetalle->getIdcompra(), $comparison);
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
     * @return CompraQuery The current query, for fluid interface
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
     * Filter the query by a related Compranota object
     *
     * @param   Compranota|PropelObjectCollection $compranota  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CompraQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCompranota($compranota, $comparison = null)
    {
        if ($compranota instanceof Compranota) {
            return $this
                ->addUsingAlias(CompraPeer::IDCOMPRA, $compranota->getIdcompra(), $comparison);
        } elseif ($compranota instanceof PropelObjectCollection) {
            return $this
                ->useCompranotaQuery()
                ->filterByPrimaryKeys($compranota->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCompranota() only accepts arguments of type Compranota or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Compranota relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function joinCompranota($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Compranota');

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
            $this->addJoinObject($join, 'Compranota');
        }

        return $this;
    }

    /**
     * Use the Compranota relation Compranota object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CompranotaQuery A secondary query class using the current class as primary query
     */
    public function useCompranotaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCompranota($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Compranota', 'CompranotaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Compra $compra Object to remove from the list of results
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function prune($compra = null)
    {
        if ($compra) {
            $this->addUsingAlias(CompraPeer::IDCOMPRA, $compra->getIdcompra(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
