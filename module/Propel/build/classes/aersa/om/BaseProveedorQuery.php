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
 *
 * @method ProveedorQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProveedorQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProveedorQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProveedorQuery leftJoinEmpresa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empresa relation
 * @method ProveedorQuery rightJoinEmpresa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empresa relation
 * @method ProveedorQuery innerJoinEmpresa($relationAlias = null) Adds a INNER JOIN clause to the query using the Empresa relation
 *
 * @method ProveedorQuery leftJoinCompra($relationAlias = null) Adds a LEFT JOIN clause to the query using the Compra relation
 * @method ProveedorQuery rightJoinCompra($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Compra relation
 * @method ProveedorQuery innerJoinCompra($relationAlias = null) Adds a INNER JOIN clause to the query using the Compra relation
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
        $sql = 'SELECT `idproveedor`, `idempresa`, `proveedor_nombrecomercial`, `proveedor_razonsocial`, `proveedor_RFC`, `proveedor_telefono`, `proveedor_calle`, `proveedor_numero`, `proveedor_interior`, `proveedor_colonia`, `proveedor_ciudad`, `proveedor_estado`, `proveedor_codigopostal` FROM `proveedor` WHERE `idproveedor` = :p0';
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
