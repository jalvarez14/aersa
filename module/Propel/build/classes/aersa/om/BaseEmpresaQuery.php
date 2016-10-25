<?php


/**
 * Base class that represents a query for the 'empresa' table.
 *
 *
 *
 * @method EmpresaQuery orderByIdempresa($order = Criteria::ASC) Order by the idempresa column
 * @method EmpresaQuery orderByEmpresaNombrecomercial($order = Criteria::ASC) Order by the empresa_nombrecomercial column
 * @method EmpresaQuery orderByEmpresaRazonsocial($order = Criteria::ASC) Order by the empresa_razonsocial column
 * @method EmpresaQuery orderByEmpresaEstatus($order = Criteria::ASC) Order by the empresa_estatus column
 * @method EmpresaQuery orderByEmpresaAdministracion($order = Criteria::ASC) Order by the empresa_administracion column
 * @method EmpresaQuery orderByEmpresaHabilitarrecetas($order = Criteria::ASC) Order by the empresa_habilitarrecetas column
 * @method EmpresaQuery orderByEmpresaHabilitarproductos($order = Criteria::ASC) Order by the empresa_habilitarproductos column
 *
 * @method EmpresaQuery groupByIdempresa() Group by the idempresa column
 * @method EmpresaQuery groupByEmpresaNombrecomercial() Group by the empresa_nombrecomercial column
 * @method EmpresaQuery groupByEmpresaRazonsocial() Group by the empresa_razonsocial column
 * @method EmpresaQuery groupByEmpresaEstatus() Group by the empresa_estatus column
 * @method EmpresaQuery groupByEmpresaAdministracion() Group by the empresa_administracion column
 * @method EmpresaQuery groupByEmpresaHabilitarrecetas() Group by the empresa_habilitarrecetas column
 * @method EmpresaQuery groupByEmpresaHabilitarproductos() Group by the empresa_habilitarproductos column
 *
 * @method EmpresaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EmpresaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EmpresaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method EmpresaQuery leftJoinAbonoproveedor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Abonoproveedor relation
 * @method EmpresaQuery rightJoinAbonoproveedor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Abonoproveedor relation
 * @method EmpresaQuery innerJoinAbonoproveedor($relationAlias = null) Adds a INNER JOIN clause to the query using the Abonoproveedor relation
 *
 * @method EmpresaQuery leftJoinAjusteinventario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ajusteinventario relation
 * @method EmpresaQuery rightJoinAjusteinventario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ajusteinventario relation
 * @method EmpresaQuery innerJoinAjusteinventario($relationAlias = null) Adds a INNER JOIN clause to the query using the Ajusteinventario relation
 *
 * @method EmpresaQuery leftJoinCompra($relationAlias = null) Adds a LEFT JOIN clause to the query using the Compra relation
 * @method EmpresaQuery rightJoinCompra($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Compra relation
 * @method EmpresaQuery innerJoinCompra($relationAlias = null) Adds a INNER JOIN clause to the query using the Compra relation
 *
 * @method EmpresaQuery leftJoinConceptoscfdi($relationAlias = null) Adds a LEFT JOIN clause to the query using the Conceptoscfdi relation
 * @method EmpresaQuery rightJoinConceptoscfdi($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Conceptoscfdi relation
 * @method EmpresaQuery innerJoinConceptoscfdi($relationAlias = null) Adds a INNER JOIN clause to the query using the Conceptoscfdi relation
 *
 * @method EmpresaQuery leftJoinCuentabancaria($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cuentabancaria relation
 * @method EmpresaQuery rightJoinCuentabancaria($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cuentabancaria relation
 * @method EmpresaQuery innerJoinCuentabancaria($relationAlias = null) Adds a INNER JOIN clause to the query using the Cuentabancaria relation
 *
 * @method EmpresaQuery leftJoinCuentaporcobrar($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cuentaporcobrar relation
 * @method EmpresaQuery rightJoinCuentaporcobrar($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cuentaporcobrar relation
 * @method EmpresaQuery innerJoinCuentaporcobrar($relationAlias = null) Adds a INNER JOIN clause to the query using the Cuentaporcobrar relation
 *
 * @method EmpresaQuery leftJoinDevolucion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Devolucion relation
 * @method EmpresaQuery rightJoinDevolucion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Devolucion relation
 * @method EmpresaQuery innerJoinDevolucion($relationAlias = null) Adds a INNER JOIN clause to the query using the Devolucion relation
 *
 * @method EmpresaQuery leftJoinFlujoefectivo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Flujoefectivo relation
 * @method EmpresaQuery rightJoinFlujoefectivo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Flujoefectivo relation
 * @method EmpresaQuery innerJoinFlujoefectivo($relationAlias = null) Adds a INNER JOIN clause to the query using the Flujoefectivo relation
 *
 * @method EmpresaQuery leftJoinFoliorequisicion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Foliorequisicion relation
 * @method EmpresaQuery rightJoinFoliorequisicion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Foliorequisicion relation
 * @method EmpresaQuery innerJoinFoliorequisicion($relationAlias = null) Adds a INNER JOIN clause to the query using the Foliorequisicion relation
 *
 * @method EmpresaQuery leftJoinIngreso($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ingreso relation
 * @method EmpresaQuery rightJoinIngreso($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ingreso relation
 * @method EmpresaQuery innerJoinIngreso($relationAlias = null) Adds a INNER JOIN clause to the query using the Ingreso relation
 *
 * @method EmpresaQuery leftJoinInventariomes($relationAlias = null) Adds a LEFT JOIN clause to the query using the Inventariomes relation
 * @method EmpresaQuery rightJoinInventariomes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Inventariomes relation
 * @method EmpresaQuery innerJoinInventariomes($relationAlias = null) Adds a INNER JOIN clause to the query using the Inventariomes relation
 *
 * @method EmpresaQuery leftJoinNotacredito($relationAlias = null) Adds a LEFT JOIN clause to the query using the Notacredito relation
 * @method EmpresaQuery rightJoinNotacredito($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Notacredito relation
 * @method EmpresaQuery innerJoinNotacredito($relationAlias = null) Adds a INNER JOIN clause to the query using the Notacredito relation
 *
 * @method EmpresaQuery leftJoinOrdentablajeria($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ordentablajeria relation
 * @method EmpresaQuery rightJoinOrdentablajeria($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ordentablajeria relation
 * @method EmpresaQuery innerJoinOrdentablajeria($relationAlias = null) Adds a INNER JOIN clause to the query using the Ordentablajeria relation
 *
 * @method EmpresaQuery leftJoinPlantillatablajeria($relationAlias = null) Adds a LEFT JOIN clause to the query using the Plantillatablajeria relation
 * @method EmpresaQuery rightJoinPlantillatablajeria($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Plantillatablajeria relation
 * @method EmpresaQuery innerJoinPlantillatablajeria($relationAlias = null) Adds a INNER JOIN clause to the query using the Plantillatablajeria relation
 *
 * @method EmpresaQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method EmpresaQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method EmpresaQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method EmpresaQuery leftJoinProductocfdi($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productocfdi relation
 * @method EmpresaQuery rightJoinProductocfdi($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productocfdi relation
 * @method EmpresaQuery innerJoinProductocfdi($relationAlias = null) Adds a INNER JOIN clause to the query using the Productocfdi relation
 *
 * @method EmpresaQuery leftJoinProductosucursalalmacen($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productosucursalalmacen relation
 * @method EmpresaQuery rightJoinProductosucursalalmacen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productosucursalalmacen relation
 * @method EmpresaQuery innerJoinProductosucursalalmacen($relationAlias = null) Adds a INNER JOIN clause to the query using the Productosucursalalmacen relation
 *
 * @method EmpresaQuery leftJoinProveedor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Proveedor relation
 * @method EmpresaQuery rightJoinProveedor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Proveedor relation
 * @method EmpresaQuery innerJoinProveedor($relationAlias = null) Adds a INNER JOIN clause to the query using the Proveedor relation
 *
 * @method EmpresaQuery leftJoinProveedorescfdi($relationAlias = null) Adds a LEFT JOIN clause to the query using the Proveedorescfdi relation
 * @method EmpresaQuery rightJoinProveedorescfdi($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Proveedorescfdi relation
 * @method EmpresaQuery innerJoinProveedorescfdi($relationAlias = null) Adds a INNER JOIN clause to the query using the Proveedorescfdi relation
 *
 * @method EmpresaQuery leftJoinRequisicion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Requisicion relation
 * @method EmpresaQuery rightJoinRequisicion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Requisicion relation
 * @method EmpresaQuery innerJoinRequisicion($relationAlias = null) Adds a INNER JOIN clause to the query using the Requisicion relation
 *
 * @method EmpresaQuery leftJoinSemanarevisada($relationAlias = null) Adds a LEFT JOIN clause to the query using the Semanarevisada relation
 * @method EmpresaQuery rightJoinSemanarevisada($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Semanarevisada relation
 * @method EmpresaQuery innerJoinSemanarevisada($relationAlias = null) Adds a INNER JOIN clause to the query using the Semanarevisada relation
 *
 * @method EmpresaQuery leftJoinSucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursal relation
 * @method EmpresaQuery rightJoinSucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursal relation
 * @method EmpresaQuery innerJoinSucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursal relation
 *
 * @method EmpresaQuery leftJoinTrabajadorespromedio($relationAlias = null) Adds a LEFT JOIN clause to the query using the Trabajadorespromedio relation
 * @method EmpresaQuery rightJoinTrabajadorespromedio($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Trabajadorespromedio relation
 * @method EmpresaQuery innerJoinTrabajadorespromedio($relationAlias = null) Adds a INNER JOIN clause to the query using the Trabajadorespromedio relation
 *
 * @method EmpresaQuery leftJoinUsuarioempresa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuarioempresa relation
 * @method EmpresaQuery rightJoinUsuarioempresa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuarioempresa relation
 * @method EmpresaQuery innerJoinUsuarioempresa($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuarioempresa relation
 *
 * @method EmpresaQuery leftJoinVenta($relationAlias = null) Adds a LEFT JOIN clause to the query using the Venta relation
 * @method EmpresaQuery rightJoinVenta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Venta relation
 * @method EmpresaQuery innerJoinVenta($relationAlias = null) Adds a INNER JOIN clause to the query using the Venta relation
 *
 * @method Empresa findOne(PropelPDO $con = null) Return the first Empresa matching the query
 * @method Empresa findOneOrCreate(PropelPDO $con = null) Return the first Empresa matching the query, or a new Empresa object populated from the query conditions when no match is found
 *
 * @method Empresa findOneByEmpresaNombrecomercial(string $empresa_nombrecomercial) Return the first Empresa filtered by the empresa_nombrecomercial column
 * @method Empresa findOneByEmpresaRazonsocial(string $empresa_razonsocial) Return the first Empresa filtered by the empresa_razonsocial column
 * @method Empresa findOneByEmpresaEstatus(boolean $empresa_estatus) Return the first Empresa filtered by the empresa_estatus column
 * @method Empresa findOneByEmpresaAdministracion(boolean $empresa_administracion) Return the first Empresa filtered by the empresa_administracion column
 * @method Empresa findOneByEmpresaHabilitarrecetas(boolean $empresa_habilitarrecetas) Return the first Empresa filtered by the empresa_habilitarrecetas column
 * @method Empresa findOneByEmpresaHabilitarproductos(boolean $empresa_habilitarproductos) Return the first Empresa filtered by the empresa_habilitarproductos column
 *
 * @method array findByIdempresa(int $idempresa) Return Empresa objects filtered by the idempresa column
 * @method array findByEmpresaNombrecomercial(string $empresa_nombrecomercial) Return Empresa objects filtered by the empresa_nombrecomercial column
 * @method array findByEmpresaRazonsocial(string $empresa_razonsocial) Return Empresa objects filtered by the empresa_razonsocial column
 * @method array findByEmpresaEstatus(boolean $empresa_estatus) Return Empresa objects filtered by the empresa_estatus column
 * @method array findByEmpresaAdministracion(boolean $empresa_administracion) Return Empresa objects filtered by the empresa_administracion column
 * @method array findByEmpresaHabilitarrecetas(boolean $empresa_habilitarrecetas) Return Empresa objects filtered by the empresa_habilitarrecetas column
 * @method array findByEmpresaHabilitarproductos(boolean $empresa_habilitarproductos) Return Empresa objects filtered by the empresa_habilitarproductos column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseEmpresaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEmpresaQuery object.
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
            $modelName = 'Empresa';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EmpresaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EmpresaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EmpresaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EmpresaQuery) {
            return $criteria;
        }
        $query = new EmpresaQuery(null, null, $modelAlias);

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
     * @return   Empresa|Empresa[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EmpresaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EmpresaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Empresa A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdempresa($key, $con = null)
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
     * @return                 Empresa A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idempresa`, `empresa_nombrecomercial`, `empresa_razonsocial`, `empresa_estatus`, `empresa_administracion`, `empresa_habilitarrecetas`, `empresa_habilitarproductos` FROM `empresa` WHERE `idempresa` = :p0';
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
            $obj = new Empresa();
            $obj->hydrate($row);
            EmpresaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Empresa|Empresa[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Empresa[]|mixed the list of results, formatted by the current formatter
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
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EmpresaPeer::IDEMPRESA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EmpresaPeer::IDEMPRESA, $keys, Criteria::IN);
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
     * @param     mixed $idempresa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function filterByIdempresa($idempresa = null, $comparison = null)
    {
        if (is_array($idempresa)) {
            $useMinMax = false;
            if (isset($idempresa['min'])) {
                $this->addUsingAlias(EmpresaPeer::IDEMPRESA, $idempresa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempresa['max'])) {
                $this->addUsingAlias(EmpresaPeer::IDEMPRESA, $idempresa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpresaPeer::IDEMPRESA, $idempresa, $comparison);
    }

    /**
     * Filter the query on the empresa_nombrecomercial column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpresaNombrecomercial('fooValue');   // WHERE empresa_nombrecomercial = 'fooValue'
     * $query->filterByEmpresaNombrecomercial('%fooValue%'); // WHERE empresa_nombrecomercial LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empresaNombrecomercial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function filterByEmpresaNombrecomercial($empresaNombrecomercial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empresaNombrecomercial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empresaNombrecomercial)) {
                $empresaNombrecomercial = str_replace('*', '%', $empresaNombrecomercial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpresaPeer::EMPRESA_NOMBRECOMERCIAL, $empresaNombrecomercial, $comparison);
    }

    /**
     * Filter the query on the empresa_razonsocial column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpresaRazonsocial('fooValue');   // WHERE empresa_razonsocial = 'fooValue'
     * $query->filterByEmpresaRazonsocial('%fooValue%'); // WHERE empresa_razonsocial LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empresaRazonsocial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function filterByEmpresaRazonsocial($empresaRazonsocial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empresaRazonsocial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empresaRazonsocial)) {
                $empresaRazonsocial = str_replace('*', '%', $empresaRazonsocial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpresaPeer::EMPRESA_RAZONSOCIAL, $empresaRazonsocial, $comparison);
    }

    /**
     * Filter the query on the empresa_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpresaEstatus(true); // WHERE empresa_estatus = true
     * $query->filterByEmpresaEstatus('yes'); // WHERE empresa_estatus = true
     * </code>
     *
     * @param     boolean|string $empresaEstatus The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function filterByEmpresaEstatus($empresaEstatus = null, $comparison = null)
    {
        if (is_string($empresaEstatus)) {
            $empresaEstatus = in_array(strtolower($empresaEstatus), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(EmpresaPeer::EMPRESA_ESTATUS, $empresaEstatus, $comparison);
    }

    /**
     * Filter the query on the empresa_administracion column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpresaAdministracion(true); // WHERE empresa_administracion = true
     * $query->filterByEmpresaAdministracion('yes'); // WHERE empresa_administracion = true
     * </code>
     *
     * @param     boolean|string $empresaAdministracion The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function filterByEmpresaAdministracion($empresaAdministracion = null, $comparison = null)
    {
        if (is_string($empresaAdministracion)) {
            $empresaAdministracion = in_array(strtolower($empresaAdministracion), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(EmpresaPeer::EMPRESA_ADMINISTRACION, $empresaAdministracion, $comparison);
    }

    /**
     * Filter the query on the empresa_habilitarrecetas column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpresaHabilitarrecetas(true); // WHERE empresa_habilitarrecetas = true
     * $query->filterByEmpresaHabilitarrecetas('yes'); // WHERE empresa_habilitarrecetas = true
     * </code>
     *
     * @param     boolean|string $empresaHabilitarrecetas The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function filterByEmpresaHabilitarrecetas($empresaHabilitarrecetas = null, $comparison = null)
    {
        if (is_string($empresaHabilitarrecetas)) {
            $empresaHabilitarrecetas = in_array(strtolower($empresaHabilitarrecetas), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(EmpresaPeer::EMPRESA_HABILITARRECETAS, $empresaHabilitarrecetas, $comparison);
    }

    /**
     * Filter the query on the empresa_habilitarproductos column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpresaHabilitarproductos(true); // WHERE empresa_habilitarproductos = true
     * $query->filterByEmpresaHabilitarproductos('yes'); // WHERE empresa_habilitarproductos = true
     * </code>
     *
     * @param     boolean|string $empresaHabilitarproductos The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function filterByEmpresaHabilitarproductos($empresaHabilitarproductos = null, $comparison = null)
    {
        if (is_string($empresaHabilitarproductos)) {
            $empresaHabilitarproductos = in_array(strtolower($empresaHabilitarproductos), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(EmpresaPeer::EMPRESA_HABILITARPRODUCTOS, $empresaHabilitarproductos, $comparison);
    }

    /**
     * Filter the query by a related Abonoproveedor object
     *
     * @param   Abonoproveedor|PropelObjectCollection $abonoproveedor  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAbonoproveedor($abonoproveedor, $comparison = null)
    {
        if ($abonoproveedor instanceof Abonoproveedor) {
            return $this
                ->addUsingAlias(EmpresaPeer::IDEMPRESA, $abonoproveedor->getIdempresa(), $comparison);
        } elseif ($abonoproveedor instanceof PropelObjectCollection) {
            return $this
                ->useAbonoproveedorQuery()
                ->filterByPrimaryKeys($abonoproveedor->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAbonoproveedor() only accepts arguments of type Abonoproveedor or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Abonoproveedor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function joinAbonoproveedor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Abonoproveedor');

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
            $this->addJoinObject($join, 'Abonoproveedor');
        }

        return $this;
    }

    /**
     * Use the Abonoproveedor relation Abonoproveedor object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AbonoproveedorQuery A secondary query class using the current class as primary query
     */
    public function useAbonoproveedorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAbonoproveedor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Abonoproveedor', 'AbonoproveedorQuery');
    }

    /**
     * Filter the query by a related Ajusteinventario object
     *
     * @param   Ajusteinventario|PropelObjectCollection $ajusteinventario  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAjusteinventario($ajusteinventario, $comparison = null)
    {
        if ($ajusteinventario instanceof Ajusteinventario) {
            return $this
                ->addUsingAlias(EmpresaPeer::IDEMPRESA, $ajusteinventario->getIdempresa(), $comparison);
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
     * @return EmpresaQuery The current query, for fluid interface
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
     * Filter the query by a related Compra object
     *
     * @param   Compra|PropelObjectCollection $compra  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCompra($compra, $comparison = null)
    {
        if ($compra instanceof Compra) {
            return $this
                ->addUsingAlias(EmpresaPeer::IDEMPRESA, $compra->getIdempresa(), $comparison);
        } elseif ($compra instanceof PropelObjectCollection) {
            return $this
                ->useCompraQuery()
                ->filterByPrimaryKeys($compra->getPrimaryKeys())
                ->endUse();
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
     * @return EmpresaQuery The current query, for fluid interface
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
     * Filter the query by a related Conceptoscfdi object
     *
     * @param   Conceptoscfdi|PropelObjectCollection $conceptoscfdi  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByConceptoscfdi($conceptoscfdi, $comparison = null)
    {
        if ($conceptoscfdi instanceof Conceptoscfdi) {
            return $this
                ->addUsingAlias(EmpresaPeer::IDEMPRESA, $conceptoscfdi->getIdempresa(), $comparison);
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
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function joinConceptoscfdi($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useConceptoscfdiQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinConceptoscfdi($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Conceptoscfdi', 'ConceptoscfdiQuery');
    }

    /**
     * Filter the query by a related Cuentabancaria object
     *
     * @param   Cuentabancaria|PropelObjectCollection $cuentabancaria  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCuentabancaria($cuentabancaria, $comparison = null)
    {
        if ($cuentabancaria instanceof Cuentabancaria) {
            return $this
                ->addUsingAlias(EmpresaPeer::IDEMPRESA, $cuentabancaria->getIdempresa(), $comparison);
        } elseif ($cuentabancaria instanceof PropelObjectCollection) {
            return $this
                ->useCuentabancariaQuery()
                ->filterByPrimaryKeys($cuentabancaria->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCuentabancaria() only accepts arguments of type Cuentabancaria or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Cuentabancaria relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function joinCuentabancaria($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Cuentabancaria');

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
            $this->addJoinObject($join, 'Cuentabancaria');
        }

        return $this;
    }

    /**
     * Use the Cuentabancaria relation Cuentabancaria object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CuentabancariaQuery A secondary query class using the current class as primary query
     */
    public function useCuentabancariaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCuentabancaria($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Cuentabancaria', 'CuentabancariaQuery');
    }

    /**
     * Filter the query by a related Cuentaporcobrar object
     *
     * @param   Cuentaporcobrar|PropelObjectCollection $cuentaporcobrar  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCuentaporcobrar($cuentaporcobrar, $comparison = null)
    {
        if ($cuentaporcobrar instanceof Cuentaporcobrar) {
            return $this
                ->addUsingAlias(EmpresaPeer::IDEMPRESA, $cuentaporcobrar->getIdempresa(), $comparison);
        } elseif ($cuentaporcobrar instanceof PropelObjectCollection) {
            return $this
                ->useCuentaporcobrarQuery()
                ->filterByPrimaryKeys($cuentaporcobrar->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCuentaporcobrar() only accepts arguments of type Cuentaporcobrar or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Cuentaporcobrar relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function joinCuentaporcobrar($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Cuentaporcobrar');

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
            $this->addJoinObject($join, 'Cuentaporcobrar');
        }

        return $this;
    }

    /**
     * Use the Cuentaporcobrar relation Cuentaporcobrar object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CuentaporcobrarQuery A secondary query class using the current class as primary query
     */
    public function useCuentaporcobrarQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCuentaporcobrar($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Cuentaporcobrar', 'CuentaporcobrarQuery');
    }

    /**
     * Filter the query by a related Devolucion object
     *
     * @param   Devolucion|PropelObjectCollection $devolucion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDevolucion($devolucion, $comparison = null)
    {
        if ($devolucion instanceof Devolucion) {
            return $this
                ->addUsingAlias(EmpresaPeer::IDEMPRESA, $devolucion->getIdempresa(), $comparison);
        } elseif ($devolucion instanceof PropelObjectCollection) {
            return $this
                ->useDevolucionQuery()
                ->filterByPrimaryKeys($devolucion->getPrimaryKeys())
                ->endUse();
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
     * @return EmpresaQuery The current query, for fluid interface
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
     * Filter the query by a related Flujoefectivo object
     *
     * @param   Flujoefectivo|PropelObjectCollection $flujoefectivo  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFlujoefectivo($flujoefectivo, $comparison = null)
    {
        if ($flujoefectivo instanceof Flujoefectivo) {
            return $this
                ->addUsingAlias(EmpresaPeer::IDEMPRESA, $flujoefectivo->getIdempresa(), $comparison);
        } elseif ($flujoefectivo instanceof PropelObjectCollection) {
            return $this
                ->useFlujoefectivoQuery()
                ->filterByPrimaryKeys($flujoefectivo->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFlujoefectivo() only accepts arguments of type Flujoefectivo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Flujoefectivo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function joinFlujoefectivo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Flujoefectivo');

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
            $this->addJoinObject($join, 'Flujoefectivo');
        }

        return $this;
    }

    /**
     * Use the Flujoefectivo relation Flujoefectivo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FlujoefectivoQuery A secondary query class using the current class as primary query
     */
    public function useFlujoefectivoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinFlujoefectivo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Flujoefectivo', 'FlujoefectivoQuery');
    }

    /**
     * Filter the query by a related Foliorequisicion object
     *
     * @param   Foliorequisicion|PropelObjectCollection $foliorequisicion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFoliorequisicion($foliorequisicion, $comparison = null)
    {
        if ($foliorequisicion instanceof Foliorequisicion) {
            return $this
                ->addUsingAlias(EmpresaPeer::IDEMPRESA, $foliorequisicion->getIdempresa(), $comparison);
        } elseif ($foliorequisicion instanceof PropelObjectCollection) {
            return $this
                ->useFoliorequisicionQuery()
                ->filterByPrimaryKeys($foliorequisicion->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFoliorequisicion() only accepts arguments of type Foliorequisicion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Foliorequisicion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function joinFoliorequisicion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Foliorequisicion');

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
            $this->addJoinObject($join, 'Foliorequisicion');
        }

        return $this;
    }

    /**
     * Use the Foliorequisicion relation Foliorequisicion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FoliorequisicionQuery A secondary query class using the current class as primary query
     */
    public function useFoliorequisicionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinFoliorequisicion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Foliorequisicion', 'FoliorequisicionQuery');
    }

    /**
     * Filter the query by a related Ingreso object
     *
     * @param   Ingreso|PropelObjectCollection $ingreso  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByIngreso($ingreso, $comparison = null)
    {
        if ($ingreso instanceof Ingreso) {
            return $this
                ->addUsingAlias(EmpresaPeer::IDEMPRESA, $ingreso->getIdempresa(), $comparison);
        } elseif ($ingreso instanceof PropelObjectCollection) {
            return $this
                ->useIngresoQuery()
                ->filterByPrimaryKeys($ingreso->getPrimaryKeys())
                ->endUse();
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
     * @return EmpresaQuery The current query, for fluid interface
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
     * Filter the query by a related Inventariomes object
     *
     * @param   Inventariomes|PropelObjectCollection $inventariomes  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByInventariomes($inventariomes, $comparison = null)
    {
        if ($inventariomes instanceof Inventariomes) {
            return $this
                ->addUsingAlias(EmpresaPeer::IDEMPRESA, $inventariomes->getIdempresa(), $comparison);
        } elseif ($inventariomes instanceof PropelObjectCollection) {
            return $this
                ->useInventariomesQuery()
                ->filterByPrimaryKeys($inventariomes->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByInventariomes() only accepts arguments of type Inventariomes or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Inventariomes relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function joinInventariomes($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Inventariomes');

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
            $this->addJoinObject($join, 'Inventariomes');
        }

        return $this;
    }

    /**
     * Use the Inventariomes relation Inventariomes object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   InventariomesQuery A secondary query class using the current class as primary query
     */
    public function useInventariomesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInventariomes($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Inventariomes', 'InventariomesQuery');
    }

    /**
     * Filter the query by a related Notacredito object
     *
     * @param   Notacredito|PropelObjectCollection $notacredito  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByNotacredito($notacredito, $comparison = null)
    {
        if ($notacredito instanceof Notacredito) {
            return $this
                ->addUsingAlias(EmpresaPeer::IDEMPRESA, $notacredito->getIdempresa(), $comparison);
        } elseif ($notacredito instanceof PropelObjectCollection) {
            return $this
                ->useNotacreditoQuery()
                ->filterByPrimaryKeys($notacredito->getPrimaryKeys())
                ->endUse();
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
     * @return EmpresaQuery The current query, for fluid interface
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
     * Filter the query by a related Ordentablajeria object
     *
     * @param   Ordentablajeria|PropelObjectCollection $ordentablajeria  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOrdentablajeria($ordentablajeria, $comparison = null)
    {
        if ($ordentablajeria instanceof Ordentablajeria) {
            return $this
                ->addUsingAlias(EmpresaPeer::IDEMPRESA, $ordentablajeria->getIdempresa(), $comparison);
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
     * @return EmpresaQuery The current query, for fluid interface
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
     * Filter the query by a related Plantillatablajeria object
     *
     * @param   Plantillatablajeria|PropelObjectCollection $plantillatablajeria  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPlantillatablajeria($plantillatablajeria, $comparison = null)
    {
        if ($plantillatablajeria instanceof Plantillatablajeria) {
            return $this
                ->addUsingAlias(EmpresaPeer::IDEMPRESA, $plantillatablajeria->getIdempresa(), $comparison);
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
     * @return EmpresaQuery The current query, for fluid interface
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
     * Filter the query by a related Producto object
     *
     * @param   Producto|PropelObjectCollection $producto  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(EmpresaPeer::IDEMPRESA, $producto->getIdempresa(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            return $this
                ->useProductoQuery()
                ->filterByPrimaryKeys($producto->getPrimaryKeys())
                ->endUse();
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
     * @return EmpresaQuery The current query, for fluid interface
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
     * Filter the query by a related Productocfdi object
     *
     * @param   Productocfdi|PropelObjectCollection $productocfdi  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductocfdi($productocfdi, $comparison = null)
    {
        if ($productocfdi instanceof Productocfdi) {
            return $this
                ->addUsingAlias(EmpresaPeer::IDEMPRESA, $productocfdi->getIdempresa(), $comparison);
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
     * @return EmpresaQuery The current query, for fluid interface
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
     * @return                 EmpresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductosucursalalmacen($productosucursalalmacen, $comparison = null)
    {
        if ($productosucursalalmacen instanceof Productosucursalalmacen) {
            return $this
                ->addUsingAlias(EmpresaPeer::IDEMPRESA, $productosucursalalmacen->getIdempresa(), $comparison);
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
     * @return EmpresaQuery The current query, for fluid interface
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
     * Filter the query by a related Proveedor object
     *
     * @param   Proveedor|PropelObjectCollection $proveedor  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProveedor($proveedor, $comparison = null)
    {
        if ($proveedor instanceof Proveedor) {
            return $this
                ->addUsingAlias(EmpresaPeer::IDEMPRESA, $proveedor->getIdempresa(), $comparison);
        } elseif ($proveedor instanceof PropelObjectCollection) {
            return $this
                ->useProveedorQuery()
                ->filterByPrimaryKeys($proveedor->getPrimaryKeys())
                ->endUse();
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
     * @return EmpresaQuery The current query, for fluid interface
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
     * Filter the query by a related Proveedorescfdi object
     *
     * @param   Proveedorescfdi|PropelObjectCollection $proveedorescfdi  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProveedorescfdi($proveedorescfdi, $comparison = null)
    {
        if ($proveedorescfdi instanceof Proveedorescfdi) {
            return $this
                ->addUsingAlias(EmpresaPeer::IDEMPRESA, $proveedorescfdi->getIdempresa(), $comparison);
        } elseif ($proveedorescfdi instanceof PropelObjectCollection) {
            return $this
                ->useProveedorescfdiQuery()
                ->filterByPrimaryKeys($proveedorescfdi->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProveedorescfdi() only accepts arguments of type Proveedorescfdi or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Proveedorescfdi relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function joinProveedorescfdi($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Proveedorescfdi');

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
            $this->addJoinObject($join, 'Proveedorescfdi');
        }

        return $this;
    }

    /**
     * Use the Proveedorescfdi relation Proveedorescfdi object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProveedorescfdiQuery A secondary query class using the current class as primary query
     */
    public function useProveedorescfdiQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProveedorescfdi($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Proveedorescfdi', 'ProveedorescfdiQuery');
    }

    /**
     * Filter the query by a related Requisicion object
     *
     * @param   Requisicion|PropelObjectCollection $requisicion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRequisicion($requisicion, $comparison = null)
    {
        if ($requisicion instanceof Requisicion) {
            return $this
                ->addUsingAlias(EmpresaPeer::IDEMPRESA, $requisicion->getIdempresa(), $comparison);
        } elseif ($requisicion instanceof PropelObjectCollection) {
            return $this
                ->useRequisicionQuery()
                ->filterByPrimaryKeys($requisicion->getPrimaryKeys())
                ->endUse();
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
     * @return EmpresaQuery The current query, for fluid interface
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
     * Filter the query by a related Semanarevisada object
     *
     * @param   Semanarevisada|PropelObjectCollection $semanarevisada  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySemanarevisada($semanarevisada, $comparison = null)
    {
        if ($semanarevisada instanceof Semanarevisada) {
            return $this
                ->addUsingAlias(EmpresaPeer::IDEMPRESA, $semanarevisada->getIdempresa(), $comparison);
        } elseif ($semanarevisada instanceof PropelObjectCollection) {
            return $this
                ->useSemanarevisadaQuery()
                ->filterByPrimaryKeys($semanarevisada->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySemanarevisada() only accepts arguments of type Semanarevisada or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Semanarevisada relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function joinSemanarevisada($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Semanarevisada');

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
            $this->addJoinObject($join, 'Semanarevisada');
        }

        return $this;
    }

    /**
     * Use the Semanarevisada relation Semanarevisada object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SemanarevisadaQuery A secondary query class using the current class as primary query
     */
    public function useSemanarevisadaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSemanarevisada($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Semanarevisada', 'SemanarevisadaQuery');
    }

    /**
     * Filter the query by a related Sucursal object
     *
     * @param   Sucursal|PropelObjectCollection $sucursal  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursal($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(EmpresaPeer::IDEMPRESA, $sucursal->getIdempresa(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            return $this
                ->useSucursalQuery()
                ->filterByPrimaryKeys($sucursal->getPrimaryKeys())
                ->endUse();
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
     * @return EmpresaQuery The current query, for fluid interface
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
     * Filter the query by a related Trabajadorespromedio object
     *
     * @param   Trabajadorespromedio|PropelObjectCollection $trabajadorespromedio  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTrabajadorespromedio($trabajadorespromedio, $comparison = null)
    {
        if ($trabajadorespromedio instanceof Trabajadorespromedio) {
            return $this
                ->addUsingAlias(EmpresaPeer::IDEMPRESA, $trabajadorespromedio->getIdempresa(), $comparison);
        } elseif ($trabajadorespromedio instanceof PropelObjectCollection) {
            return $this
                ->useTrabajadorespromedioQuery()
                ->filterByPrimaryKeys($trabajadorespromedio->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTrabajadorespromedio() only accepts arguments of type Trabajadorespromedio or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Trabajadorespromedio relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function joinTrabajadorespromedio($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Trabajadorespromedio');

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
            $this->addJoinObject($join, 'Trabajadorespromedio');
        }

        return $this;
    }

    /**
     * Use the Trabajadorespromedio relation Trabajadorespromedio object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TrabajadorespromedioQuery A secondary query class using the current class as primary query
     */
    public function useTrabajadorespromedioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTrabajadorespromedio($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Trabajadorespromedio', 'TrabajadorespromedioQuery');
    }

    /**
     * Filter the query by a related Usuarioempresa object
     *
     * @param   Usuarioempresa|PropelObjectCollection $usuarioempresa  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuarioempresa($usuarioempresa, $comparison = null)
    {
        if ($usuarioempresa instanceof Usuarioempresa) {
            return $this
                ->addUsingAlias(EmpresaPeer::IDEMPRESA, $usuarioempresa->getIdempresa(), $comparison);
        } elseif ($usuarioempresa instanceof PropelObjectCollection) {
            return $this
                ->useUsuarioempresaQuery()
                ->filterByPrimaryKeys($usuarioempresa->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByUsuarioempresa() only accepts arguments of type Usuarioempresa or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Usuarioempresa relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function joinUsuarioempresa($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Usuarioempresa');

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
            $this->addJoinObject($join, 'Usuarioempresa');
        }

        return $this;
    }

    /**
     * Use the Usuarioempresa relation Usuarioempresa object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuarioempresaQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioempresaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUsuarioempresa($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Usuarioempresa', 'UsuarioempresaQuery');
    }

    /**
     * Filter the query by a related Venta object
     *
     * @param   Venta|PropelObjectCollection $venta  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVenta($venta, $comparison = null)
    {
        if ($venta instanceof Venta) {
            return $this
                ->addUsingAlias(EmpresaPeer::IDEMPRESA, $venta->getIdempresa(), $comparison);
        } elseif ($venta instanceof PropelObjectCollection) {
            return $this
                ->useVentaQuery()
                ->filterByPrimaryKeys($venta->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByVenta() only accepts arguments of type Venta or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Venta relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function joinVenta($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Venta');

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
            $this->addJoinObject($join, 'Venta');
        }

        return $this;
    }

    /**
     * Use the Venta relation Venta object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   VentaQuery A secondary query class using the current class as primary query
     */
    public function useVentaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVenta($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Venta', 'VentaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Empresa $empresa Object to remove from the list of results
     *
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function prune($empresa = null)
    {
        if ($empresa) {
            $this->addUsingAlias(EmpresaPeer::IDEMPRESA, $empresa->getIdempresa(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
