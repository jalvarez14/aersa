<?php


/**
 * Base class that represents a query for the 'cuentaporcobrar' table.
 *
 *
 *
 * @method CuentaporcobrarQuery orderByIdcuentaporcobrar($order = Criteria::ASC) Order by the idcuentaporcobrar column
 * @method CuentaporcobrarQuery orderByIdempresa($order = Criteria::ASC) Order by the idempresa column
 * @method CuentaporcobrarQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method CuentaporcobrarQuery orderByIdusuario($order = Criteria::ASC) Order by the idusuario column
 * @method CuentaporcobrarQuery orderByCuentaporcobrarCantidad($order = Criteria::ASC) Order by the cuentaporcobrar_cantidad column
 * @method CuentaporcobrarQuery orderByCuentaporcobrarCliente($order = Criteria::ASC) Order by the cuentaporcobrar_cliente column
 * @method CuentaporcobrarQuery orderByCuentaporcobrarFecha($order = Criteria::ASC) Order by the cuentaporcobrar_fecha column
 * @method CuentaporcobrarQuery orderByCuentaporcobrarNota($order = Criteria::ASC) Order by the cuentaporcobrar_nota column
 *
 * @method CuentaporcobrarQuery groupByIdcuentaporcobrar() Group by the idcuentaporcobrar column
 * @method CuentaporcobrarQuery groupByIdempresa() Group by the idempresa column
 * @method CuentaporcobrarQuery groupByIdsucursal() Group by the idsucursal column
 * @method CuentaporcobrarQuery groupByIdusuario() Group by the idusuario column
 * @method CuentaporcobrarQuery groupByCuentaporcobrarCantidad() Group by the cuentaporcobrar_cantidad column
 * @method CuentaporcobrarQuery groupByCuentaporcobrarCliente() Group by the cuentaporcobrar_cliente column
 * @method CuentaporcobrarQuery groupByCuentaporcobrarFecha() Group by the cuentaporcobrar_fecha column
 * @method CuentaporcobrarQuery groupByCuentaporcobrarNota() Group by the cuentaporcobrar_nota column
 *
 * @method CuentaporcobrarQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CuentaporcobrarQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CuentaporcobrarQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CuentaporcobrarQuery leftJoinEmpresa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empresa relation
 * @method CuentaporcobrarQuery rightJoinEmpresa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empresa relation
 * @method CuentaporcobrarQuery innerJoinEmpresa($relationAlias = null) Adds a INNER JOIN clause to the query using the Empresa relation
 *
 * @method CuentaporcobrarQuery leftJoinSucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursal relation
 * @method CuentaporcobrarQuery rightJoinSucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursal relation
 * @method CuentaporcobrarQuery innerJoinSucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursal relation
 *
 * @method CuentaporcobrarQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method CuentaporcobrarQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method CuentaporcobrarQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method CuentaporcobrarQuery leftJoinFlujoefectivo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Flujoefectivo relation
 * @method CuentaporcobrarQuery rightJoinFlujoefectivo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Flujoefectivo relation
 * @method CuentaporcobrarQuery innerJoinFlujoefectivo($relationAlias = null) Adds a INNER JOIN clause to the query using the Flujoefectivo relation
 *
 * @method Cuentaporcobrar findOne(PropelPDO $con = null) Return the first Cuentaporcobrar matching the query
 * @method Cuentaporcobrar findOneOrCreate(PropelPDO $con = null) Return the first Cuentaporcobrar matching the query, or a new Cuentaporcobrar object populated from the query conditions when no match is found
 *
 * @method Cuentaporcobrar findOneByIdempresa(int $idempresa) Return the first Cuentaporcobrar filtered by the idempresa column
 * @method Cuentaporcobrar findOneByIdsucursal(int $idsucursal) Return the first Cuentaporcobrar filtered by the idsucursal column
 * @method Cuentaporcobrar findOneByIdusuario(int $idusuario) Return the first Cuentaporcobrar filtered by the idusuario column
 * @method Cuentaporcobrar findOneByCuentaporcobrarCantidad(string $cuentaporcobrar_cantidad) Return the first Cuentaporcobrar filtered by the cuentaporcobrar_cantidad column
 * @method Cuentaporcobrar findOneByCuentaporcobrarCliente(string $cuentaporcobrar_cliente) Return the first Cuentaporcobrar filtered by the cuentaporcobrar_cliente column
 * @method Cuentaporcobrar findOneByCuentaporcobrarFecha(string $cuentaporcobrar_fecha) Return the first Cuentaporcobrar filtered by the cuentaporcobrar_fecha column
 * @method Cuentaporcobrar findOneByCuentaporcobrarNota(string $cuentaporcobrar_nota) Return the first Cuentaporcobrar filtered by the cuentaporcobrar_nota column
 *
 * @method array findByIdcuentaporcobrar(int $idcuentaporcobrar) Return Cuentaporcobrar objects filtered by the idcuentaporcobrar column
 * @method array findByIdempresa(int $idempresa) Return Cuentaporcobrar objects filtered by the idempresa column
 * @method array findByIdsucursal(int $idsucursal) Return Cuentaporcobrar objects filtered by the idsucursal column
 * @method array findByIdusuario(int $idusuario) Return Cuentaporcobrar objects filtered by the idusuario column
 * @method array findByCuentaporcobrarCantidad(string $cuentaporcobrar_cantidad) Return Cuentaporcobrar objects filtered by the cuentaporcobrar_cantidad column
 * @method array findByCuentaporcobrarCliente(string $cuentaporcobrar_cliente) Return Cuentaporcobrar objects filtered by the cuentaporcobrar_cliente column
 * @method array findByCuentaporcobrarFecha(string $cuentaporcobrar_fecha) Return Cuentaporcobrar objects filtered by the cuentaporcobrar_fecha column
 * @method array findByCuentaporcobrarNota(string $cuentaporcobrar_nota) Return Cuentaporcobrar objects filtered by the cuentaporcobrar_nota column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseCuentaporcobrarQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCuentaporcobrarQuery object.
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
            $modelName = 'Cuentaporcobrar';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CuentaporcobrarQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CuentaporcobrarQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CuentaporcobrarQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CuentaporcobrarQuery) {
            return $criteria;
        }
        $query = new CuentaporcobrarQuery(null, null, $modelAlias);

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
     * @return   Cuentaporcobrar|Cuentaporcobrar[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CuentaporcobrarPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CuentaporcobrarPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Cuentaporcobrar A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdcuentaporcobrar($key, $con = null)
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
     * @return                 Cuentaporcobrar A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idcuentaporcobrar`, `idempresa`, `idsucursal`, `idusuario`, `cuentaporcobrar_cantidad`, `cuentaporcobrar_cliente`, `cuentaporcobrar_fecha`, `cuentaporcobrar_nota` FROM `cuentaporcobrar` WHERE `idcuentaporcobrar` = :p0';
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
            $obj = new Cuentaporcobrar();
            $obj->hydrate($row);
            CuentaporcobrarPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Cuentaporcobrar|Cuentaporcobrar[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Cuentaporcobrar[]|mixed the list of results, formatted by the current formatter
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
     * @return CuentaporcobrarQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CuentaporcobrarPeer::IDCUENTAPORCOBRAR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CuentaporcobrarQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CuentaporcobrarPeer::IDCUENTAPORCOBRAR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idcuentaporcobrar column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcuentaporcobrar(1234); // WHERE idcuentaporcobrar = 1234
     * $query->filterByIdcuentaporcobrar(array(12, 34)); // WHERE idcuentaporcobrar IN (12, 34)
     * $query->filterByIdcuentaporcobrar(array('min' => 12)); // WHERE idcuentaporcobrar >= 12
     * $query->filterByIdcuentaporcobrar(array('max' => 12)); // WHERE idcuentaporcobrar <= 12
     * </code>
     *
     * @param     mixed $idcuentaporcobrar The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentaporcobrarQuery The current query, for fluid interface
     */
    public function filterByIdcuentaporcobrar($idcuentaporcobrar = null, $comparison = null)
    {
        if (is_array($idcuentaporcobrar)) {
            $useMinMax = false;
            if (isset($idcuentaporcobrar['min'])) {
                $this->addUsingAlias(CuentaporcobrarPeer::IDCUENTAPORCOBRAR, $idcuentaporcobrar['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcuentaporcobrar['max'])) {
                $this->addUsingAlias(CuentaporcobrarPeer::IDCUENTAPORCOBRAR, $idcuentaporcobrar['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CuentaporcobrarPeer::IDCUENTAPORCOBRAR, $idcuentaporcobrar, $comparison);
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
     * @return CuentaporcobrarQuery The current query, for fluid interface
     */
    public function filterByIdempresa($idempresa = null, $comparison = null)
    {
        if (is_array($idempresa)) {
            $useMinMax = false;
            if (isset($idempresa['min'])) {
                $this->addUsingAlias(CuentaporcobrarPeer::IDEMPRESA, $idempresa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempresa['max'])) {
                $this->addUsingAlias(CuentaporcobrarPeer::IDEMPRESA, $idempresa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CuentaporcobrarPeer::IDEMPRESA, $idempresa, $comparison);
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
     * @return CuentaporcobrarQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(CuentaporcobrarPeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(CuentaporcobrarPeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CuentaporcobrarPeer::IDSUCURSAL, $idsucursal, $comparison);
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
     * @see       filterByUsuario()
     *
     * @param     mixed $idusuario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentaporcobrarQuery The current query, for fluid interface
     */
    public function filterByIdusuario($idusuario = null, $comparison = null)
    {
        if (is_array($idusuario)) {
            $useMinMax = false;
            if (isset($idusuario['min'])) {
                $this->addUsingAlias(CuentaporcobrarPeer::IDUSUARIO, $idusuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idusuario['max'])) {
                $this->addUsingAlias(CuentaporcobrarPeer::IDUSUARIO, $idusuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CuentaporcobrarPeer::IDUSUARIO, $idusuario, $comparison);
    }

    /**
     * Filter the query on the cuentaporcobrar_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByCuentaporcobrarCantidad(1234); // WHERE cuentaporcobrar_cantidad = 1234
     * $query->filterByCuentaporcobrarCantidad(array(12, 34)); // WHERE cuentaporcobrar_cantidad IN (12, 34)
     * $query->filterByCuentaporcobrarCantidad(array('min' => 12)); // WHERE cuentaporcobrar_cantidad >= 12
     * $query->filterByCuentaporcobrarCantidad(array('max' => 12)); // WHERE cuentaporcobrar_cantidad <= 12
     * </code>
     *
     * @param     mixed $cuentaporcobrarCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentaporcobrarQuery The current query, for fluid interface
     */
    public function filterByCuentaporcobrarCantidad($cuentaporcobrarCantidad = null, $comparison = null)
    {
        if (is_array($cuentaporcobrarCantidad)) {
            $useMinMax = false;
            if (isset($cuentaporcobrarCantidad['min'])) {
                $this->addUsingAlias(CuentaporcobrarPeer::CUENTAPORCOBRAR_CANTIDAD, $cuentaporcobrarCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cuentaporcobrarCantidad['max'])) {
                $this->addUsingAlias(CuentaporcobrarPeer::CUENTAPORCOBRAR_CANTIDAD, $cuentaporcobrarCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CuentaporcobrarPeer::CUENTAPORCOBRAR_CANTIDAD, $cuentaporcobrarCantidad, $comparison);
    }

    /**
     * Filter the query on the cuentaporcobrar_cliente column
     *
     * Example usage:
     * <code>
     * $query->filterByCuentaporcobrarCliente('fooValue');   // WHERE cuentaporcobrar_cliente = 'fooValue'
     * $query->filterByCuentaporcobrarCliente('%fooValue%'); // WHERE cuentaporcobrar_cliente LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cuentaporcobrarCliente The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentaporcobrarQuery The current query, for fluid interface
     */
    public function filterByCuentaporcobrarCliente($cuentaporcobrarCliente = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cuentaporcobrarCliente)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cuentaporcobrarCliente)) {
                $cuentaporcobrarCliente = str_replace('*', '%', $cuentaporcobrarCliente);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CuentaporcobrarPeer::CUENTAPORCOBRAR_CLIENTE, $cuentaporcobrarCliente, $comparison);
    }

    /**
     * Filter the query on the cuentaporcobrar_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByCuentaporcobrarFecha('2011-03-14'); // WHERE cuentaporcobrar_fecha = '2011-03-14'
     * $query->filterByCuentaporcobrarFecha('now'); // WHERE cuentaporcobrar_fecha = '2011-03-14'
     * $query->filterByCuentaporcobrarFecha(array('max' => 'yesterday')); // WHERE cuentaporcobrar_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $cuentaporcobrarFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentaporcobrarQuery The current query, for fluid interface
     */
    public function filterByCuentaporcobrarFecha($cuentaporcobrarFecha = null, $comparison = null)
    {
        if (is_array($cuentaporcobrarFecha)) {
            $useMinMax = false;
            if (isset($cuentaporcobrarFecha['min'])) {
                $this->addUsingAlias(CuentaporcobrarPeer::CUENTAPORCOBRAR_FECHA, $cuentaporcobrarFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cuentaporcobrarFecha['max'])) {
                $this->addUsingAlias(CuentaporcobrarPeer::CUENTAPORCOBRAR_FECHA, $cuentaporcobrarFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CuentaporcobrarPeer::CUENTAPORCOBRAR_FECHA, $cuentaporcobrarFecha, $comparison);
    }

    /**
     * Filter the query on the cuentaporcobrar_nota column
     *
     * Example usage:
     * <code>
     * $query->filterByCuentaporcobrarNota('fooValue');   // WHERE cuentaporcobrar_nota = 'fooValue'
     * $query->filterByCuentaporcobrarNota('%fooValue%'); // WHERE cuentaporcobrar_nota LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cuentaporcobrarNota The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentaporcobrarQuery The current query, for fluid interface
     */
    public function filterByCuentaporcobrarNota($cuentaporcobrarNota = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cuentaporcobrarNota)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cuentaporcobrarNota)) {
                $cuentaporcobrarNota = str_replace('*', '%', $cuentaporcobrarNota);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CuentaporcobrarPeer::CUENTAPORCOBRAR_NOTA, $cuentaporcobrarNota, $comparison);
    }

    /**
     * Filter the query by a related Empresa object
     *
     * @param   Empresa|PropelObjectCollection $empresa The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CuentaporcobrarQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpresa($empresa, $comparison = null)
    {
        if ($empresa instanceof Empresa) {
            return $this
                ->addUsingAlias(CuentaporcobrarPeer::IDEMPRESA, $empresa->getIdempresa(), $comparison);
        } elseif ($empresa instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CuentaporcobrarPeer::IDEMPRESA, $empresa->toKeyValue('PrimaryKey', 'Idempresa'), $comparison);
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
     * @return CuentaporcobrarQuery The current query, for fluid interface
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
     * Filter the query by a related Sucursal object
     *
     * @param   Sucursal|PropelObjectCollection $sucursal The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CuentaporcobrarQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursal($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(CuentaporcobrarPeer::IDSUCURSAL, $sucursal->getIdsucursal(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CuentaporcobrarPeer::IDSUCURSAL, $sucursal->toKeyValue('PrimaryKey', 'Idsucursal'), $comparison);
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
     * @return CuentaporcobrarQuery The current query, for fluid interface
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
     * @return                 CuentaporcobrarQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(CuentaporcobrarPeer::IDUSUARIO, $usuario->getIdusuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CuentaporcobrarPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
        } else {
            throw new PropelException('filterByUsuario() only accepts arguments of type Usuario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Usuario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CuentaporcobrarQuery The current query, for fluid interface
     */
    public function joinUsuario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Usuario');

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
            $this->addJoinObject($join, 'Usuario');
        }

        return $this;
    }

    /**
     * Use the Usuario relation Usuario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuarioQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUsuario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Usuario', 'UsuarioQuery');
    }

    /**
     * Filter the query by a related Flujoefectivo object
     *
     * @param   Flujoefectivo|PropelObjectCollection $flujoefectivo  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CuentaporcobrarQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFlujoefectivo($flujoefectivo, $comparison = null)
    {
        if ($flujoefectivo instanceof Flujoefectivo) {
            return $this
                ->addUsingAlias(CuentaporcobrarPeer::IDCUENTAPORCOBRAR, $flujoefectivo->getIdcuentaporcobrar(), $comparison);
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
     * @return CuentaporcobrarQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   Cuentaporcobrar $cuentaporcobrar Object to remove from the list of results
     *
     * @return CuentaporcobrarQuery The current query, for fluid interface
     */
    public function prune($cuentaporcobrar = null)
    {
        if ($cuentaporcobrar) {
            $this->addUsingAlias(CuentaporcobrarPeer::IDCUENTAPORCOBRAR, $cuentaporcobrar->getIdcuentaporcobrar(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
