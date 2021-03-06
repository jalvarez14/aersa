<?php


/**
 * Base class that represents a query for the 'proveedor' table.
 *
 *
 *
 * @method ProveedorQuery orderByIdproveedor($order = Criteria::ASC) Order by the idproveedor column
 * @method ProveedorQuery orderByIdempresa($order = Criteria::ASC) Order by the idempresa column
 * @method ProveedorQuery orderByProveedorNombrecomercial($order = Criteria::ASC) Order by the proveedor_nombrecomercial column
 * @method ProveedorQuery orderByProveedorRazonsocial($order = Criteria::ASC) Order by the proveedor_razonsocial column
 * @method ProveedorQuery orderByProveedorRfc($order = Criteria::ASC) Order by the proveedor_RFC column
 * @method ProveedorQuery orderByProveedorTelefono($order = Criteria::ASC) Order by the proveedor_telefono column
 * @method ProveedorQuery orderByProveedorCalle($order = Criteria::ASC) Order by the proveedor_calle column
 * @method ProveedorQuery orderByProveedorNumero($order = Criteria::ASC) Order by the proveedor_numero column
 * @method ProveedorQuery orderByProveedorInterior($order = Criteria::ASC) Order by the proveedor_interior column
 * @method ProveedorQuery orderByProveedorColonia($order = Criteria::ASC) Order by the proveedor_colonia column
 * @method ProveedorQuery orderByProveedorCiudad($order = Criteria::ASC) Order by the proveedor_ciudad column
 * @method ProveedorQuery orderByProveedorEstado($order = Criteria::ASC) Order by the proveedor_estado column
 * @method ProveedorQuery orderByProveedorCodigopostal($order = Criteria::ASC) Order by the proveedor_codigopostal column
 * @method ProveedorQuery orderByProveedorEstatus($order = Criteria::ASC) Order by the proveedor_estatus column
 *
 * @method ProveedorQuery groupByIdproveedor() Group by the idproveedor column
 * @method ProveedorQuery groupByIdempresa() Group by the idempresa column
 * @method ProveedorQuery groupByProveedorNombrecomercial() Group by the proveedor_nombrecomercial column
 * @method ProveedorQuery groupByProveedorRazonsocial() Group by the proveedor_razonsocial column
 * @method ProveedorQuery groupByProveedorRfc() Group by the proveedor_RFC column
 * @method ProveedorQuery groupByProveedorTelefono() Group by the proveedor_telefono column
 * @method ProveedorQuery groupByProveedorCalle() Group by the proveedor_calle column
 * @method ProveedorQuery groupByProveedorNumero() Group by the proveedor_numero column
 * @method ProveedorQuery groupByProveedorInterior() Group by the proveedor_interior column
 * @method ProveedorQuery groupByProveedorColonia() Group by the proveedor_colonia column
 * @method ProveedorQuery groupByProveedorCiudad() Group by the proveedor_ciudad column
 * @method ProveedorQuery groupByProveedorEstado() Group by the proveedor_estado column
 * @method ProveedorQuery groupByProveedorCodigopostal() Group by the proveedor_codigopostal column
 * @method ProveedorQuery groupByProveedorEstatus() Group by the proveedor_estatus column
 *
 * @method ProveedorQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProveedorQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProveedorQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProveedorQuery leftJoinEmpresa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empresa relation
 * @method ProveedorQuery rightJoinEmpresa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empresa relation
 * @method ProveedorQuery innerJoinEmpresa($relationAlias = null) Adds a INNER JOIN clause to the query using the Empresa relation
 *
 * @method ProveedorQuery leftJoinAbonoproveedor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Abonoproveedor relation
 * @method ProveedorQuery rightJoinAbonoproveedor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Abonoproveedor relation
 * @method ProveedorQuery innerJoinAbonoproveedor($relationAlias = null) Adds a INNER JOIN clause to the query using the Abonoproveedor relation
 *
 * @method ProveedorQuery leftJoinCompra($relationAlias = null) Adds a LEFT JOIN clause to the query using the Compra relation
 * @method ProveedorQuery rightJoinCompra($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Compra relation
 * @method ProveedorQuery innerJoinCompra($relationAlias = null) Adds a INNER JOIN clause to the query using the Compra relation
 *
 * @method ProveedorQuery leftJoinDevolucion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Devolucion relation
 * @method ProveedorQuery rightJoinDevolucion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Devolucion relation
 * @method ProveedorQuery innerJoinDevolucion($relationAlias = null) Adds a INNER JOIN clause to the query using the Devolucion relation
 *
 * @method ProveedorQuery leftJoinFlujoefectivo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Flujoefectivo relation
 * @method ProveedorQuery rightJoinFlujoefectivo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Flujoefectivo relation
 * @method ProveedorQuery innerJoinFlujoefectivo($relationAlias = null) Adds a INNER JOIN clause to the query using the Flujoefectivo relation
 *
 * @method ProveedorQuery leftJoinNotacredito($relationAlias = null) Adds a LEFT JOIN clause to the query using the Notacredito relation
 * @method ProveedorQuery rightJoinNotacredito($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Notacredito relation
 * @method ProveedorQuery innerJoinNotacredito($relationAlias = null) Adds a INNER JOIN clause to the query using the Notacredito relation
 *
 * @method ProveedorQuery leftJoinProveedorescfdi($relationAlias = null) Adds a LEFT JOIN clause to the query using the Proveedorescfdi relation
 * @method ProveedorQuery rightJoinProveedorescfdi($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Proveedorescfdi relation
 * @method ProveedorQuery innerJoinProveedorescfdi($relationAlias = null) Adds a INNER JOIN clause to the query using the Proveedorescfdi relation
 *
 * @method Proveedor findOne(PropelPDO $con = null) Return the first Proveedor matching the query
 * @method Proveedor findOneOrCreate(PropelPDO $con = null) Return the first Proveedor matching the query, or a new Proveedor object populated from the query conditions when no match is found
 *
 * @method Proveedor findOneByIdempresa(int $idempresa) Return the first Proveedor filtered by the idempresa column
 * @method Proveedor findOneByProveedorNombrecomercial(string $proveedor_nombrecomercial) Return the first Proveedor filtered by the proveedor_nombrecomercial column
 * @method Proveedor findOneByProveedorRazonsocial(string $proveedor_razonsocial) Return the first Proveedor filtered by the proveedor_razonsocial column
 * @method Proveedor findOneByProveedorRfc(string $proveedor_RFC) Return the first Proveedor filtered by the proveedor_RFC column
 * @method Proveedor findOneByProveedorTelefono(string $proveedor_telefono) Return the first Proveedor filtered by the proveedor_telefono column
 * @method Proveedor findOneByProveedorCalle(string $proveedor_calle) Return the first Proveedor filtered by the proveedor_calle column
 * @method Proveedor findOneByProveedorNumero(string $proveedor_numero) Return the first Proveedor filtered by the proveedor_numero column
 * @method Proveedor findOneByProveedorInterior(string $proveedor_interior) Return the first Proveedor filtered by the proveedor_interior column
 * @method Proveedor findOneByProveedorColonia(string $proveedor_colonia) Return the first Proveedor filtered by the proveedor_colonia column
 * @method Proveedor findOneByProveedorCiudad(string $proveedor_ciudad) Return the first Proveedor filtered by the proveedor_ciudad column
 * @method Proveedor findOneByProveedorEstado(string $proveedor_estado) Return the first Proveedor filtered by the proveedor_estado column
 * @method Proveedor findOneByProveedorCodigopostal(string $proveedor_codigopostal) Return the first Proveedor filtered by the proveedor_codigopostal column
 * @method Proveedor findOneByProveedorEstatus(boolean $proveedor_estatus) Return the first Proveedor filtered by the proveedor_estatus column
 *
 * @method array findByIdproveedor(int $idproveedor) Return Proveedor objects filtered by the idproveedor column
 * @method array findByIdempresa(int $idempresa) Return Proveedor objects filtered by the idempresa column
 * @method array findByProveedorNombrecomercial(string $proveedor_nombrecomercial) Return Proveedor objects filtered by the proveedor_nombrecomercial column
 * @method array findByProveedorRazonsocial(string $proveedor_razonsocial) Return Proveedor objects filtered by the proveedor_razonsocial column
 * @method array findByProveedorRfc(string $proveedor_RFC) Return Proveedor objects filtered by the proveedor_RFC column
 * @method array findByProveedorTelefono(string $proveedor_telefono) Return Proveedor objects filtered by the proveedor_telefono column
 * @method array findByProveedorCalle(string $proveedor_calle) Return Proveedor objects filtered by the proveedor_calle column
 * @method array findByProveedorNumero(string $proveedor_numero) Return Proveedor objects filtered by the proveedor_numero column
 * @method array findByProveedorInterior(string $proveedor_interior) Return Proveedor objects filtered by the proveedor_interior column
 * @method array findByProveedorColonia(string $proveedor_colonia) Return Proveedor objects filtered by the proveedor_colonia column
 * @method array findByProveedorCiudad(string $proveedor_ciudad) Return Proveedor objects filtered by the proveedor_ciudad column
 * @method array findByProveedorEstado(string $proveedor_estado) Return Proveedor objects filtered by the proveedor_estado column
 * @method array findByProveedorCodigopostal(string $proveedor_codigopostal) Return Proveedor objects filtered by the proveedor_codigopostal column
 * @method array findByProveedorEstatus(boolean $proveedor_estatus) Return Proveedor objects filtered by the proveedor_estatus column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseProveedorQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseProveedorQuery object.
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
            $modelName = 'Proveedor';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProveedorQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProveedorQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProveedorQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProveedorQuery) {
            return $criteria;
        }
        $query = new ProveedorQuery(null, null, $modelAlias);

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
     * @return   Proveedor|Proveedor[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProveedorPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProveedorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Proveedor A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdproveedor($key, $con = null)
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
     * @return                 Proveedor A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idproveedor`, `idempresa`, `proveedor_nombrecomercial`, `proveedor_razonsocial`, `proveedor_RFC`, `proveedor_telefono`, `proveedor_calle`, `proveedor_numero`, `proveedor_interior`, `proveedor_colonia`, `proveedor_ciudad`, `proveedor_estado`, `proveedor_codigopostal`, `proveedor_estatus` FROM `proveedor` WHERE `idproveedor` = :p0';
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
            $obj = new Proveedor();
            $obj->hydrate($row);
            ProveedorPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Proveedor|Proveedor[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Proveedor[]|mixed the list of results, formatted by the current formatter
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
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProveedorPeer::IDPROVEEDOR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProveedorPeer::IDPROVEEDOR, $keys, Criteria::IN);
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
     * @param     mixed $idproveedor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByIdproveedor($idproveedor = null, $comparison = null)
    {
        if (is_array($idproveedor)) {
            $useMinMax = false;
            if (isset($idproveedor['min'])) {
                $this->addUsingAlias(ProveedorPeer::IDPROVEEDOR, $idproveedor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproveedor['max'])) {
                $this->addUsingAlias(ProveedorPeer::IDPROVEEDOR, $idproveedor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::IDPROVEEDOR, $idproveedor, $comparison);
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
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByIdempresa($idempresa = null, $comparison = null)
    {
        if (is_array($idempresa)) {
            $useMinMax = false;
            if (isset($idempresa['min'])) {
                $this->addUsingAlias(ProveedorPeer::IDEMPRESA, $idempresa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempresa['max'])) {
                $this->addUsingAlias(ProveedorPeer::IDEMPRESA, $idempresa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::IDEMPRESA, $idempresa, $comparison);
    }

    /**
     * Filter the query on the proveedor_nombrecomercial column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorNombrecomercial('fooValue');   // WHERE proveedor_nombrecomercial = 'fooValue'
     * $query->filterByProveedorNombrecomercial('%fooValue%'); // WHERE proveedor_nombrecomercial LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorNombrecomercial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorNombrecomercial($proveedorNombrecomercial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorNombrecomercial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorNombrecomercial)) {
                $proveedorNombrecomercial = str_replace('*', '%', $proveedorNombrecomercial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_NOMBRECOMERCIAL, $proveedorNombrecomercial, $comparison);
    }

    /**
     * Filter the query on the proveedor_razonsocial column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorRazonsocial('fooValue');   // WHERE proveedor_razonsocial = 'fooValue'
     * $query->filterByProveedorRazonsocial('%fooValue%'); // WHERE proveedor_razonsocial LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorRazonsocial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorRazonsocial($proveedorRazonsocial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorRazonsocial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorRazonsocial)) {
                $proveedorRazonsocial = str_replace('*', '%', $proveedorRazonsocial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_RAZONSOCIAL, $proveedorRazonsocial, $comparison);
    }

    /**
     * Filter the query on the proveedor_RFC column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorRfc('fooValue');   // WHERE proveedor_RFC = 'fooValue'
     * $query->filterByProveedorRfc('%fooValue%'); // WHERE proveedor_RFC LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorRfc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorRfc($proveedorRfc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorRfc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorRfc)) {
                $proveedorRfc = str_replace('*', '%', $proveedorRfc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_RFC, $proveedorRfc, $comparison);
    }

    /**
     * Filter the query on the proveedor_telefono column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorTelefono('fooValue');   // WHERE proveedor_telefono = 'fooValue'
     * $query->filterByProveedorTelefono('%fooValue%'); // WHERE proveedor_telefono LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorTelefono The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorTelefono($proveedorTelefono = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorTelefono)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorTelefono)) {
                $proveedorTelefono = str_replace('*', '%', $proveedorTelefono);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_TELEFONO, $proveedorTelefono, $comparison);
    }

    /**
     * Filter the query on the proveedor_calle column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorCalle('fooValue');   // WHERE proveedor_calle = 'fooValue'
     * $query->filterByProveedorCalle('%fooValue%'); // WHERE proveedor_calle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorCalle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorCalle($proveedorCalle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorCalle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorCalle)) {
                $proveedorCalle = str_replace('*', '%', $proveedorCalle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_CALLE, $proveedorCalle, $comparison);
    }

    /**
     * Filter the query on the proveedor_numero column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorNumero('fooValue');   // WHERE proveedor_numero = 'fooValue'
     * $query->filterByProveedorNumero('%fooValue%'); // WHERE proveedor_numero LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorNumero The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorNumero($proveedorNumero = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorNumero)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorNumero)) {
                $proveedorNumero = str_replace('*', '%', $proveedorNumero);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_NUMERO, $proveedorNumero, $comparison);
    }

    /**
     * Filter the query on the proveedor_interior column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorInterior('fooValue');   // WHERE proveedor_interior = 'fooValue'
     * $query->filterByProveedorInterior('%fooValue%'); // WHERE proveedor_interior LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorInterior The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorInterior($proveedorInterior = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorInterior)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorInterior)) {
                $proveedorInterior = str_replace('*', '%', $proveedorInterior);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_INTERIOR, $proveedorInterior, $comparison);
    }

    /**
     * Filter the query on the proveedor_colonia column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorColonia('fooValue');   // WHERE proveedor_colonia = 'fooValue'
     * $query->filterByProveedorColonia('%fooValue%'); // WHERE proveedor_colonia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorColonia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorColonia($proveedorColonia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorColonia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorColonia)) {
                $proveedorColonia = str_replace('*', '%', $proveedorColonia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_COLONIA, $proveedorColonia, $comparison);
    }

    /**
     * Filter the query on the proveedor_ciudad column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorCiudad('fooValue');   // WHERE proveedor_ciudad = 'fooValue'
     * $query->filterByProveedorCiudad('%fooValue%'); // WHERE proveedor_ciudad LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorCiudad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorCiudad($proveedorCiudad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorCiudad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorCiudad)) {
                $proveedorCiudad = str_replace('*', '%', $proveedorCiudad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_CIUDAD, $proveedorCiudad, $comparison);
    }

    /**
     * Filter the query on the proveedor_estado column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorEstado('fooValue');   // WHERE proveedor_estado = 'fooValue'
     * $query->filterByProveedorEstado('%fooValue%'); // WHERE proveedor_estado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorEstado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorEstado($proveedorEstado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorEstado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorEstado)) {
                $proveedorEstado = str_replace('*', '%', $proveedorEstado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_ESTADO, $proveedorEstado, $comparison);
    }

    /**
     * Filter the query on the proveedor_codigopostal column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorCodigopostal('fooValue');   // WHERE proveedor_codigopostal = 'fooValue'
     * $query->filterByProveedorCodigopostal('%fooValue%'); // WHERE proveedor_codigopostal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorCodigopostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorCodigopostal($proveedorCodigopostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorCodigopostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorCodigopostal)) {
                $proveedorCodigopostal = str_replace('*', '%', $proveedorCodigopostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_CODIGOPOSTAL, $proveedorCodigopostal, $comparison);
    }

    /**
     * Filter the query on the proveedor_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorEstatus(true); // WHERE proveedor_estatus = true
     * $query->filterByProveedorEstatus('yes'); // WHERE proveedor_estatus = true
     * </code>
     *
     * @param     boolean|string $proveedorEstatus The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorEstatus($proveedorEstatus = null, $comparison = null)
    {
        if (is_string($proveedorEstatus)) {
            $proveedorEstatus = in_array(strtolower($proveedorEstatus), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_ESTATUS, $proveedorEstatus, $comparison);
    }

    /**
     * Filter the query by a related Empresa object
     *
     * @param   Empresa|PropelObjectCollection $empresa The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProveedorQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpresa($empresa, $comparison = null)
    {
        if ($empresa instanceof Empresa) {
            return $this
                ->addUsingAlias(ProveedorPeer::IDEMPRESA, $empresa->getIdempresa(), $comparison);
        } elseif ($empresa instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProveedorPeer::IDEMPRESA, $empresa->toKeyValue('PrimaryKey', 'Idempresa'), $comparison);
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
     * @return ProveedorQuery The current query, for fluid interface
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
     * Filter the query by a related Abonoproveedor object
     *
     * @param   Abonoproveedor|PropelObjectCollection $abonoproveedor  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProveedorQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAbonoproveedor($abonoproveedor, $comparison = null)
    {
        if ($abonoproveedor instanceof Abonoproveedor) {
            return $this
                ->addUsingAlias(ProveedorPeer::IDPROVEEDOR, $abonoproveedor->getIdproveedor(), $comparison);
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
     * @return ProveedorQuery The current query, for fluid interface
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
     * Filter the query by a related Compra object
     *
     * @param   Compra|PropelObjectCollection $compra  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProveedorQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCompra($compra, $comparison = null)
    {
        if ($compra instanceof Compra) {
            return $this
                ->addUsingAlias(ProveedorPeer::IDPROVEEDOR, $compra->getIdproveedor(), $comparison);
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
     * @return ProveedorQuery The current query, for fluid interface
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
     * Filter the query by a related Devolucion object
     *
     * @param   Devolucion|PropelObjectCollection $devolucion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProveedorQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDevolucion($devolucion, $comparison = null)
    {
        if ($devolucion instanceof Devolucion) {
            return $this
                ->addUsingAlias(ProveedorPeer::IDPROVEEDOR, $devolucion->getIdproveedor(), $comparison);
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
     * @return ProveedorQuery The current query, for fluid interface
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
     * @return                 ProveedorQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFlujoefectivo($flujoefectivo, $comparison = null)
    {
        if ($flujoefectivo instanceof Flujoefectivo) {
            return $this
                ->addUsingAlias(ProveedorPeer::IDPROVEEDOR, $flujoefectivo->getIdproveedor(), $comparison);
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
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function joinFlujoefectivo($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useFlujoefectivoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinFlujoefectivo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Flujoefectivo', 'FlujoefectivoQuery');
    }

    /**
     * Filter the query by a related Notacredito object
     *
     * @param   Notacredito|PropelObjectCollection $notacredito  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProveedorQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByNotacredito($notacredito, $comparison = null)
    {
        if ($notacredito instanceof Notacredito) {
            return $this
                ->addUsingAlias(ProveedorPeer::IDPROVEEDOR, $notacredito->getIdproveedor(), $comparison);
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
     * @return ProveedorQuery The current query, for fluid interface
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
     * Filter the query by a related Proveedorescfdi object
     *
     * @param   Proveedorescfdi|PropelObjectCollection $proveedorescfdi  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProveedorQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProveedorescfdi($proveedorescfdi, $comparison = null)
    {
        if ($proveedorescfdi instanceof Proveedorescfdi) {
            return $this
                ->addUsingAlias(ProveedorPeer::IDPROVEEDOR, $proveedorescfdi->getIdproveedor(), $comparison);
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
     * @return ProveedorQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   Proveedor $proveedor Object to remove from the list of results
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function prune($proveedor = null)
    {
        if ($proveedor) {
            $this->addUsingAlias(ProveedorPeer::IDPROVEEDOR, $proveedor->getIdproveedor(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
