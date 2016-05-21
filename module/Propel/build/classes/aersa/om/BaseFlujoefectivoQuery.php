<?php


/**
 * Base class that represents a query for the 'flujoefectivo' table.
 *
 *
 *
 * @method FlujoefectivoQuery orderByIdflujoefectivo($order = Criteria::ASC) Order by the idflujoefectivo column
 * @method FlujoefectivoQuery orderByIdempresa($order = Criteria::ASC) Order by the idempresa column
 * @method FlujoefectivoQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method FlujoefectivoQuery orderByIdusuario($order = Criteria::ASC) Order by the idusuario column
 * @method FlujoefectivoQuery orderByFlujoefectivoOrigen($order = Criteria::ASC) Order by the flujoefectivo_origen column
 * @method FlujoefectivoQuery orderByIdcuentaporcobrar($order = Criteria::ASC) Order by the idcuentaporcobrar column
 * @method FlujoefectivoQuery orderByIdcompra($order = Criteria::ASC) Order by the idcompra column
 * @method FlujoefectivoQuery orderByIdingreso($order = Criteria::ASC) Order by the idingreso column
 * @method FlujoefectivoQuery orderByIngresorubro($order = Criteria::ASC) Order by the ingresorubro column
 * @method FlujoefectivoQuery orderByFlujoefectivoPago($order = Criteria::ASC) Order by the flujoefectivo_pago column
 * @method FlujoefectivoQuery orderByIdproveedor($order = Criteria::ASC) Order by the idproveedor column
 * @method FlujoefectivoQuery orderByIdcuentabancaria($order = Criteria::ASC) Order by the idcuentabancaria column
 * @method FlujoefectivoQuery orderByFlujoefectivoCantidad($order = Criteria::ASC) Order by the flujoefectivo_cantidad column
 * @method FlujoefectivoQuery orderByFlujoefectivoFecha($order = Criteria::ASC) Order by the flujoefectivo_fecha column
 * @method FlujoefectivoQuery orderByFlujoefectivoReferencia($order = Criteria::ASC) Order by the flujoefectivo_referencia column
 * @method FlujoefectivoQuery orderByFlujoefectivoComprobante($order = Criteria::ASC) Order by the flujoefectivo_comprobante column
 * @method FlujoefectivoQuery orderByFlujoefectivoMediodepago($order = Criteria::ASC) Order by the flujoefectivo_mediodepago column
 * @method FlujoefectivoQuery orderByFlujoefectivoTipo($order = Criteria::ASC) Order by the flujoefectivo_tipo column
 * @method FlujoefectivoQuery orderByFlujoefectivoChequecirculacion($order = Criteria::ASC) Order by the flujoefectivo_chequecirculacion column
 * @method FlujoefectivoQuery orderByFlujoefectivoFechacobrocheque($order = Criteria::ASC) Order by the flujoefectivo_fechacobrocheque column
 *
 * @method FlujoefectivoQuery groupByIdflujoefectivo() Group by the idflujoefectivo column
 * @method FlujoefectivoQuery groupByIdempresa() Group by the idempresa column
 * @method FlujoefectivoQuery groupByIdsucursal() Group by the idsucursal column
 * @method FlujoefectivoQuery groupByIdusuario() Group by the idusuario column
 * @method FlujoefectivoQuery groupByFlujoefectivoOrigen() Group by the flujoefectivo_origen column
 * @method FlujoefectivoQuery groupByIdcuentaporcobrar() Group by the idcuentaporcobrar column
 * @method FlujoefectivoQuery groupByIdcompra() Group by the idcompra column
 * @method FlujoefectivoQuery groupByIdingreso() Group by the idingreso column
 * @method FlujoefectivoQuery groupByIngresorubro() Group by the ingresorubro column
 * @method FlujoefectivoQuery groupByFlujoefectivoPago() Group by the flujoefectivo_pago column
 * @method FlujoefectivoQuery groupByIdproveedor() Group by the idproveedor column
 * @method FlujoefectivoQuery groupByIdcuentabancaria() Group by the idcuentabancaria column
 * @method FlujoefectivoQuery groupByFlujoefectivoCantidad() Group by the flujoefectivo_cantidad column
 * @method FlujoefectivoQuery groupByFlujoefectivoFecha() Group by the flujoefectivo_fecha column
 * @method FlujoefectivoQuery groupByFlujoefectivoReferencia() Group by the flujoefectivo_referencia column
 * @method FlujoefectivoQuery groupByFlujoefectivoComprobante() Group by the flujoefectivo_comprobante column
 * @method FlujoefectivoQuery groupByFlujoefectivoMediodepago() Group by the flujoefectivo_mediodepago column
 * @method FlujoefectivoQuery groupByFlujoefectivoTipo() Group by the flujoefectivo_tipo column
 * @method FlujoefectivoQuery groupByFlujoefectivoChequecirculacion() Group by the flujoefectivo_chequecirculacion column
 * @method FlujoefectivoQuery groupByFlujoefectivoFechacobrocheque() Group by the flujoefectivo_fechacobrocheque column
 *
 * @method FlujoefectivoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FlujoefectivoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FlujoefectivoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method FlujoefectivoQuery leftJoinCompra($relationAlias = null) Adds a LEFT JOIN clause to the query using the Compra relation
 * @method FlujoefectivoQuery rightJoinCompra($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Compra relation
 * @method FlujoefectivoQuery innerJoinCompra($relationAlias = null) Adds a INNER JOIN clause to the query using the Compra relation
 *
 * @method FlujoefectivoQuery leftJoinCuentabancaria($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cuentabancaria relation
 * @method FlujoefectivoQuery rightJoinCuentabancaria($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cuentabancaria relation
 * @method FlujoefectivoQuery innerJoinCuentabancaria($relationAlias = null) Adds a INNER JOIN clause to the query using the Cuentabancaria relation
 *
 * @method FlujoefectivoQuery leftJoinCuentaporcobrar($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cuentaporcobrar relation
 * @method FlujoefectivoQuery rightJoinCuentaporcobrar($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cuentaporcobrar relation
 * @method FlujoefectivoQuery innerJoinCuentaporcobrar($relationAlias = null) Adds a INNER JOIN clause to the query using the Cuentaporcobrar relation
 *
 * @method FlujoefectivoQuery leftJoinEmpresa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empresa relation
 * @method FlujoefectivoQuery rightJoinEmpresa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empresa relation
 * @method FlujoefectivoQuery innerJoinEmpresa($relationAlias = null) Adds a INNER JOIN clause to the query using the Empresa relation
 *
 * @method FlujoefectivoQuery leftJoinIngreso($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ingreso relation
 * @method FlujoefectivoQuery rightJoinIngreso($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ingreso relation
 * @method FlujoefectivoQuery innerJoinIngreso($relationAlias = null) Adds a INNER JOIN clause to the query using the Ingreso relation
 *
 * @method FlujoefectivoQuery leftJoinProveedor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Proveedor relation
 * @method FlujoefectivoQuery rightJoinProveedor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Proveedor relation
 * @method FlujoefectivoQuery innerJoinProveedor($relationAlias = null) Adds a INNER JOIN clause to the query using the Proveedor relation
 *
 * @method FlujoefectivoQuery leftJoinSucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursal relation
 * @method FlujoefectivoQuery rightJoinSucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursal relation
 * @method FlujoefectivoQuery innerJoinSucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursal relation
 *
 * @method FlujoefectivoQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method FlujoefectivoQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method FlujoefectivoQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method Flujoefectivo findOne(PropelPDO $con = null) Return the first Flujoefectivo matching the query
 * @method Flujoefectivo findOneOrCreate(PropelPDO $con = null) Return the first Flujoefectivo matching the query, or a new Flujoefectivo object populated from the query conditions when no match is found
 *
 * @method Flujoefectivo findOneByIdempresa(int $idempresa) Return the first Flujoefectivo filtered by the idempresa column
 * @method Flujoefectivo findOneByIdsucursal(int $idsucursal) Return the first Flujoefectivo filtered by the idsucursal column
 * @method Flujoefectivo findOneByIdusuario(int $idusuario) Return the first Flujoefectivo filtered by the idusuario column
 * @method Flujoefectivo findOneByFlujoefectivoOrigen(string $flujoefectivo_origen) Return the first Flujoefectivo filtered by the flujoefectivo_origen column
 * @method Flujoefectivo findOneByIdcuentaporcobrar(int $idcuentaporcobrar) Return the first Flujoefectivo filtered by the idcuentaporcobrar column
 * @method Flujoefectivo findOneByIdcompra(int $idcompra) Return the first Flujoefectivo filtered by the idcompra column
 * @method Flujoefectivo findOneByIdingreso(int $idingreso) Return the first Flujoefectivo filtered by the idingreso column
 * @method Flujoefectivo findOneByIngresorubro(string $ingresorubro) Return the first Flujoefectivo filtered by the ingresorubro column
 * @method Flujoefectivo findOneByFlujoefectivoPago(string $flujoefectivo_pago) Return the first Flujoefectivo filtered by the flujoefectivo_pago column
 * @method Flujoefectivo findOneByIdproveedor(int $idproveedor) Return the first Flujoefectivo filtered by the idproveedor column
 * @method Flujoefectivo findOneByIdcuentabancaria(int $idcuentabancaria) Return the first Flujoefectivo filtered by the idcuentabancaria column
 * @method Flujoefectivo findOneByFlujoefectivoCantidad(string $flujoefectivo_cantidad) Return the first Flujoefectivo filtered by the flujoefectivo_cantidad column
 * @method Flujoefectivo findOneByFlujoefectivoFecha(string $flujoefectivo_fecha) Return the first Flujoefectivo filtered by the flujoefectivo_fecha column
 * @method Flujoefectivo findOneByFlujoefectivoReferencia(string $flujoefectivo_referencia) Return the first Flujoefectivo filtered by the flujoefectivo_referencia column
 * @method Flujoefectivo findOneByFlujoefectivoComprobante(string $flujoefectivo_comprobante) Return the first Flujoefectivo filtered by the flujoefectivo_comprobante column
 * @method Flujoefectivo findOneByFlujoefectivoMediodepago(string $flujoefectivo_mediodepago) Return the first Flujoefectivo filtered by the flujoefectivo_mediodepago column
 * @method Flujoefectivo findOneByFlujoefectivoTipo(string $flujoefectivo_tipo) Return the first Flujoefectivo filtered by the flujoefectivo_tipo column
 * @method Flujoefectivo findOneByFlujoefectivoChequecirculacion(boolean $flujoefectivo_chequecirculacion) Return the first Flujoefectivo filtered by the flujoefectivo_chequecirculacion column
 * @method Flujoefectivo findOneByFlujoefectivoFechacobrocheque(string $flujoefectivo_fechacobrocheque) Return the first Flujoefectivo filtered by the flujoefectivo_fechacobrocheque column
 *
 * @method array findByIdflujoefectivo(int $idflujoefectivo) Return Flujoefectivo objects filtered by the idflujoefectivo column
 * @method array findByIdempresa(int $idempresa) Return Flujoefectivo objects filtered by the idempresa column
 * @method array findByIdsucursal(int $idsucursal) Return Flujoefectivo objects filtered by the idsucursal column
 * @method array findByIdusuario(int $idusuario) Return Flujoefectivo objects filtered by the idusuario column
 * @method array findByFlujoefectivoOrigen(string $flujoefectivo_origen) Return Flujoefectivo objects filtered by the flujoefectivo_origen column
 * @method array findByIdcuentaporcobrar(int $idcuentaporcobrar) Return Flujoefectivo objects filtered by the idcuentaporcobrar column
 * @method array findByIdcompra(int $idcompra) Return Flujoefectivo objects filtered by the idcompra column
 * @method array findByIdingreso(int $idingreso) Return Flujoefectivo objects filtered by the idingreso column
 * @method array findByIngresorubro(string $ingresorubro) Return Flujoefectivo objects filtered by the ingresorubro column
 * @method array findByFlujoefectivoPago(string $flujoefectivo_pago) Return Flujoefectivo objects filtered by the flujoefectivo_pago column
 * @method array findByIdproveedor(int $idproveedor) Return Flujoefectivo objects filtered by the idproveedor column
 * @method array findByIdcuentabancaria(int $idcuentabancaria) Return Flujoefectivo objects filtered by the idcuentabancaria column
 * @method array findByFlujoefectivoCantidad(string $flujoefectivo_cantidad) Return Flujoefectivo objects filtered by the flujoefectivo_cantidad column
 * @method array findByFlujoefectivoFecha(string $flujoefectivo_fecha) Return Flujoefectivo objects filtered by the flujoefectivo_fecha column
 * @method array findByFlujoefectivoReferencia(string $flujoefectivo_referencia) Return Flujoefectivo objects filtered by the flujoefectivo_referencia column
 * @method array findByFlujoefectivoComprobante(string $flujoefectivo_comprobante) Return Flujoefectivo objects filtered by the flujoefectivo_comprobante column
 * @method array findByFlujoefectivoMediodepago(string $flujoefectivo_mediodepago) Return Flujoefectivo objects filtered by the flujoefectivo_mediodepago column
 * @method array findByFlujoefectivoTipo(string $flujoefectivo_tipo) Return Flujoefectivo objects filtered by the flujoefectivo_tipo column
 * @method array findByFlujoefectivoChequecirculacion(boolean $flujoefectivo_chequecirculacion) Return Flujoefectivo objects filtered by the flujoefectivo_chequecirculacion column
 * @method array findByFlujoefectivoFechacobrocheque(string $flujoefectivo_fechacobrocheque) Return Flujoefectivo objects filtered by the flujoefectivo_fechacobrocheque column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseFlujoefectivoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFlujoefectivoQuery object.
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
            $modelName = 'Flujoefectivo';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FlujoefectivoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FlujoefectivoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FlujoefectivoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FlujoefectivoQuery) {
            return $criteria;
        }
        $query = new FlujoefectivoQuery(null, null, $modelAlias);

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
     * @return   Flujoefectivo|Flujoefectivo[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FlujoefectivoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FlujoefectivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Flujoefectivo A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdflujoefectivo($key, $con = null)
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
     * @return                 Flujoefectivo A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idflujoefectivo`, `idempresa`, `idsucursal`, `idusuario`, `flujoefectivo_origen`, `idcuentaporcobrar`, `idcompra`, `idingreso`, `ingresorubro`, `flujoefectivo_pago`, `idproveedor`, `idcuentabancaria`, `flujoefectivo_cantidad`, `flujoefectivo_fecha`, `flujoefectivo_referencia`, `flujoefectivo_comprobante`, `flujoefectivo_mediodepago`, `flujoefectivo_tipo`, `flujoefectivo_chequecirculacion`, `flujoefectivo_fechacobrocheque` FROM `flujoefectivo` WHERE `idflujoefectivo` = :p0';
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
            $obj = new Flujoefectivo();
            $obj->hydrate($row);
            FlujoefectivoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Flujoefectivo|Flujoefectivo[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Flujoefectivo[]|mixed the list of results, formatted by the current formatter
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
     * @return FlujoefectivoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FlujoefectivoPeer::IDFLUJOEFECTIVO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FlujoefectivoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FlujoefectivoPeer::IDFLUJOEFECTIVO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idflujoefectivo column
     *
     * Example usage:
     * <code>
     * $query->filterByIdflujoefectivo(1234); // WHERE idflujoefectivo = 1234
     * $query->filterByIdflujoefectivo(array(12, 34)); // WHERE idflujoefectivo IN (12, 34)
     * $query->filterByIdflujoefectivo(array('min' => 12)); // WHERE idflujoefectivo >= 12
     * $query->filterByIdflujoefectivo(array('max' => 12)); // WHERE idflujoefectivo <= 12
     * </code>
     *
     * @param     mixed $idflujoefectivo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlujoefectivoQuery The current query, for fluid interface
     */
    public function filterByIdflujoefectivo($idflujoefectivo = null, $comparison = null)
    {
        if (is_array($idflujoefectivo)) {
            $useMinMax = false;
            if (isset($idflujoefectivo['min'])) {
                $this->addUsingAlias(FlujoefectivoPeer::IDFLUJOEFECTIVO, $idflujoefectivo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idflujoefectivo['max'])) {
                $this->addUsingAlias(FlujoefectivoPeer::IDFLUJOEFECTIVO, $idflujoefectivo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlujoefectivoPeer::IDFLUJOEFECTIVO, $idflujoefectivo, $comparison);
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
     * @return FlujoefectivoQuery The current query, for fluid interface
     */
    public function filterByIdempresa($idempresa = null, $comparison = null)
    {
        if (is_array($idempresa)) {
            $useMinMax = false;
            if (isset($idempresa['min'])) {
                $this->addUsingAlias(FlujoefectivoPeer::IDEMPRESA, $idempresa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempresa['max'])) {
                $this->addUsingAlias(FlujoefectivoPeer::IDEMPRESA, $idempresa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlujoefectivoPeer::IDEMPRESA, $idempresa, $comparison);
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
     * @return FlujoefectivoQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(FlujoefectivoPeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(FlujoefectivoPeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlujoefectivoPeer::IDSUCURSAL, $idsucursal, $comparison);
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
     * @return FlujoefectivoQuery The current query, for fluid interface
     */
    public function filterByIdusuario($idusuario = null, $comparison = null)
    {
        if (is_array($idusuario)) {
            $useMinMax = false;
            if (isset($idusuario['min'])) {
                $this->addUsingAlias(FlujoefectivoPeer::IDUSUARIO, $idusuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idusuario['max'])) {
                $this->addUsingAlias(FlujoefectivoPeer::IDUSUARIO, $idusuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlujoefectivoPeer::IDUSUARIO, $idusuario, $comparison);
    }

    /**
     * Filter the query on the flujoefectivo_origen column
     *
     * Example usage:
     * <code>
     * $query->filterByFlujoefectivoOrigen('fooValue');   // WHERE flujoefectivo_origen = 'fooValue'
     * $query->filterByFlujoefectivoOrigen('%fooValue%'); // WHERE flujoefectivo_origen LIKE '%fooValue%'
     * </code>
     *
     * @param     string $flujoefectivoOrigen The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlujoefectivoQuery The current query, for fluid interface
     */
    public function filterByFlujoefectivoOrigen($flujoefectivoOrigen = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($flujoefectivoOrigen)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $flujoefectivoOrigen)) {
                $flujoefectivoOrigen = str_replace('*', '%', $flujoefectivoOrigen);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlujoefectivoPeer::FLUJOEFECTIVO_ORIGEN, $flujoefectivoOrigen, $comparison);
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
     * @see       filterByCuentaporcobrar()
     *
     * @param     mixed $idcuentaporcobrar The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlujoefectivoQuery The current query, for fluid interface
     */
    public function filterByIdcuentaporcobrar($idcuentaporcobrar = null, $comparison = null)
    {
        if (is_array($idcuentaporcobrar)) {
            $useMinMax = false;
            if (isset($idcuentaporcobrar['min'])) {
                $this->addUsingAlias(FlujoefectivoPeer::IDCUENTAPORCOBRAR, $idcuentaporcobrar['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcuentaporcobrar['max'])) {
                $this->addUsingAlias(FlujoefectivoPeer::IDCUENTAPORCOBRAR, $idcuentaporcobrar['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlujoefectivoPeer::IDCUENTAPORCOBRAR, $idcuentaporcobrar, $comparison);
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
     * @return FlujoefectivoQuery The current query, for fluid interface
     */
    public function filterByIdcompra($idcompra = null, $comparison = null)
    {
        if (is_array($idcompra)) {
            $useMinMax = false;
            if (isset($idcompra['min'])) {
                $this->addUsingAlias(FlujoefectivoPeer::IDCOMPRA, $idcompra['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcompra['max'])) {
                $this->addUsingAlias(FlujoefectivoPeer::IDCOMPRA, $idcompra['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlujoefectivoPeer::IDCOMPRA, $idcompra, $comparison);
    }

    /**
     * Filter the query on the idingreso column
     *
     * Example usage:
     * <code>
     * $query->filterByIdingreso(1234); // WHERE idingreso = 1234
     * $query->filterByIdingreso(array(12, 34)); // WHERE idingreso IN (12, 34)
     * $query->filterByIdingreso(array('min' => 12)); // WHERE idingreso >= 12
     * $query->filterByIdingreso(array('max' => 12)); // WHERE idingreso <= 12
     * </code>
     *
     * @see       filterByIngreso()
     *
     * @param     mixed $idingreso The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlujoefectivoQuery The current query, for fluid interface
     */
    public function filterByIdingreso($idingreso = null, $comparison = null)
    {
        if (is_array($idingreso)) {
            $useMinMax = false;
            if (isset($idingreso['min'])) {
                $this->addUsingAlias(FlujoefectivoPeer::IDINGRESO, $idingreso['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idingreso['max'])) {
                $this->addUsingAlias(FlujoefectivoPeer::IDINGRESO, $idingreso['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlujoefectivoPeer::IDINGRESO, $idingreso, $comparison);
    }

    /**
     * Filter the query on the ingresorubro column
     *
     * Example usage:
     * <code>
     * $query->filterByIngresorubro('fooValue');   // WHERE ingresorubro = 'fooValue'
     * $query->filterByIngresorubro('%fooValue%'); // WHERE ingresorubro LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ingresorubro The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlujoefectivoQuery The current query, for fluid interface
     */
    public function filterByIngresorubro($ingresorubro = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ingresorubro)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ingresorubro)) {
                $ingresorubro = str_replace('*', '%', $ingresorubro);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlujoefectivoPeer::INGRESORUBRO, $ingresorubro, $comparison);
    }

    /**
     * Filter the query on the flujoefectivo_pago column
     *
     * Example usage:
     * <code>
     * $query->filterByFlujoefectivoPago('fooValue');   // WHERE flujoefectivo_pago = 'fooValue'
     * $query->filterByFlujoefectivoPago('%fooValue%'); // WHERE flujoefectivo_pago LIKE '%fooValue%'
     * </code>
     *
     * @param     string $flujoefectivoPago The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlujoefectivoQuery The current query, for fluid interface
     */
    public function filterByFlujoefectivoPago($flujoefectivoPago = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($flujoefectivoPago)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $flujoefectivoPago)) {
                $flujoefectivoPago = str_replace('*', '%', $flujoefectivoPago);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlujoefectivoPeer::FLUJOEFECTIVO_PAGO, $flujoefectivoPago, $comparison);
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
     * @return FlujoefectivoQuery The current query, for fluid interface
     */
    public function filterByIdproveedor($idproveedor = null, $comparison = null)
    {
        if (is_array($idproveedor)) {
            $useMinMax = false;
            if (isset($idproveedor['min'])) {
                $this->addUsingAlias(FlujoefectivoPeer::IDPROVEEDOR, $idproveedor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproveedor['max'])) {
                $this->addUsingAlias(FlujoefectivoPeer::IDPROVEEDOR, $idproveedor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlujoefectivoPeer::IDPROVEEDOR, $idproveedor, $comparison);
    }

    /**
     * Filter the query on the idcuentabancaria column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcuentabancaria(1234); // WHERE idcuentabancaria = 1234
     * $query->filterByIdcuentabancaria(array(12, 34)); // WHERE idcuentabancaria IN (12, 34)
     * $query->filterByIdcuentabancaria(array('min' => 12)); // WHERE idcuentabancaria >= 12
     * $query->filterByIdcuentabancaria(array('max' => 12)); // WHERE idcuentabancaria <= 12
     * </code>
     *
     * @see       filterByCuentabancaria()
     *
     * @param     mixed $idcuentabancaria The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlujoefectivoQuery The current query, for fluid interface
     */
    public function filterByIdcuentabancaria($idcuentabancaria = null, $comparison = null)
    {
        if (is_array($idcuentabancaria)) {
            $useMinMax = false;
            if (isset($idcuentabancaria['min'])) {
                $this->addUsingAlias(FlujoefectivoPeer::IDCUENTABANCARIA, $idcuentabancaria['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcuentabancaria['max'])) {
                $this->addUsingAlias(FlujoefectivoPeer::IDCUENTABANCARIA, $idcuentabancaria['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlujoefectivoPeer::IDCUENTABANCARIA, $idcuentabancaria, $comparison);
    }

    /**
     * Filter the query on the flujoefectivo_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByFlujoefectivoCantidad(1234); // WHERE flujoefectivo_cantidad = 1234
     * $query->filterByFlujoefectivoCantidad(array(12, 34)); // WHERE flujoefectivo_cantidad IN (12, 34)
     * $query->filterByFlujoefectivoCantidad(array('min' => 12)); // WHERE flujoefectivo_cantidad >= 12
     * $query->filterByFlujoefectivoCantidad(array('max' => 12)); // WHERE flujoefectivo_cantidad <= 12
     * </code>
     *
     * @param     mixed $flujoefectivoCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlujoefectivoQuery The current query, for fluid interface
     */
    public function filterByFlujoefectivoCantidad($flujoefectivoCantidad = null, $comparison = null)
    {
        if (is_array($flujoefectivoCantidad)) {
            $useMinMax = false;
            if (isset($flujoefectivoCantidad['min'])) {
                $this->addUsingAlias(FlujoefectivoPeer::FLUJOEFECTIVO_CANTIDAD, $flujoefectivoCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($flujoefectivoCantidad['max'])) {
                $this->addUsingAlias(FlujoefectivoPeer::FLUJOEFECTIVO_CANTIDAD, $flujoefectivoCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlujoefectivoPeer::FLUJOEFECTIVO_CANTIDAD, $flujoefectivoCantidad, $comparison);
    }

    /**
     * Filter the query on the flujoefectivo_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByFlujoefectivoFecha('2011-03-14'); // WHERE flujoefectivo_fecha = '2011-03-14'
     * $query->filterByFlujoefectivoFecha('now'); // WHERE flujoefectivo_fecha = '2011-03-14'
     * $query->filterByFlujoefectivoFecha(array('max' => 'yesterday')); // WHERE flujoefectivo_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $flujoefectivoFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlujoefectivoQuery The current query, for fluid interface
     */
    public function filterByFlujoefectivoFecha($flujoefectivoFecha = null, $comparison = null)
    {
        if (is_array($flujoefectivoFecha)) {
            $useMinMax = false;
            if (isset($flujoefectivoFecha['min'])) {
                $this->addUsingAlias(FlujoefectivoPeer::FLUJOEFECTIVO_FECHA, $flujoefectivoFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($flujoefectivoFecha['max'])) {
                $this->addUsingAlias(FlujoefectivoPeer::FLUJOEFECTIVO_FECHA, $flujoefectivoFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlujoefectivoPeer::FLUJOEFECTIVO_FECHA, $flujoefectivoFecha, $comparison);
    }

    /**
     * Filter the query on the flujoefectivo_referencia column
     *
     * Example usage:
     * <code>
     * $query->filterByFlujoefectivoReferencia('fooValue');   // WHERE flujoefectivo_referencia = 'fooValue'
     * $query->filterByFlujoefectivoReferencia('%fooValue%'); // WHERE flujoefectivo_referencia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $flujoefectivoReferencia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlujoefectivoQuery The current query, for fluid interface
     */
    public function filterByFlujoefectivoReferencia($flujoefectivoReferencia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($flujoefectivoReferencia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $flujoefectivoReferencia)) {
                $flujoefectivoReferencia = str_replace('*', '%', $flujoefectivoReferencia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlujoefectivoPeer::FLUJOEFECTIVO_REFERENCIA, $flujoefectivoReferencia, $comparison);
    }

    /**
     * Filter the query on the flujoefectivo_comprobante column
     *
     * Example usage:
     * <code>
     * $query->filterByFlujoefectivoComprobante('fooValue');   // WHERE flujoefectivo_comprobante = 'fooValue'
     * $query->filterByFlujoefectivoComprobante('%fooValue%'); // WHERE flujoefectivo_comprobante LIKE '%fooValue%'
     * </code>
     *
     * @param     string $flujoefectivoComprobante The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlujoefectivoQuery The current query, for fluid interface
     */
    public function filterByFlujoefectivoComprobante($flujoefectivoComprobante = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($flujoefectivoComprobante)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $flujoefectivoComprobante)) {
                $flujoefectivoComprobante = str_replace('*', '%', $flujoefectivoComprobante);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlujoefectivoPeer::FLUJOEFECTIVO_COMPROBANTE, $flujoefectivoComprobante, $comparison);
    }

    /**
     * Filter the query on the flujoefectivo_mediodepago column
     *
     * Example usage:
     * <code>
     * $query->filterByFlujoefectivoMediodepago('fooValue');   // WHERE flujoefectivo_mediodepago = 'fooValue'
     * $query->filterByFlujoefectivoMediodepago('%fooValue%'); // WHERE flujoefectivo_mediodepago LIKE '%fooValue%'
     * </code>
     *
     * @param     string $flujoefectivoMediodepago The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlujoefectivoQuery The current query, for fluid interface
     */
    public function filterByFlujoefectivoMediodepago($flujoefectivoMediodepago = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($flujoefectivoMediodepago)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $flujoefectivoMediodepago)) {
                $flujoefectivoMediodepago = str_replace('*', '%', $flujoefectivoMediodepago);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlujoefectivoPeer::FLUJOEFECTIVO_MEDIODEPAGO, $flujoefectivoMediodepago, $comparison);
    }

    /**
     * Filter the query on the flujoefectivo_tipo column
     *
     * Example usage:
     * <code>
     * $query->filterByFlujoefectivoTipo('fooValue');   // WHERE flujoefectivo_tipo = 'fooValue'
     * $query->filterByFlujoefectivoTipo('%fooValue%'); // WHERE flujoefectivo_tipo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $flujoefectivoTipo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlujoefectivoQuery The current query, for fluid interface
     */
    public function filterByFlujoefectivoTipo($flujoefectivoTipo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($flujoefectivoTipo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $flujoefectivoTipo)) {
                $flujoefectivoTipo = str_replace('*', '%', $flujoefectivoTipo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlujoefectivoPeer::FLUJOEFECTIVO_TIPO, $flujoefectivoTipo, $comparison);
    }

    /**
     * Filter the query on the flujoefectivo_chequecirculacion column
     *
     * Example usage:
     * <code>
     * $query->filterByFlujoefectivoChequecirculacion(true); // WHERE flujoefectivo_chequecirculacion = true
     * $query->filterByFlujoefectivoChequecirculacion('yes'); // WHERE flujoefectivo_chequecirculacion = true
     * </code>
     *
     * @param     boolean|string $flujoefectivoChequecirculacion The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlujoefectivoQuery The current query, for fluid interface
     */
    public function filterByFlujoefectivoChequecirculacion($flujoefectivoChequecirculacion = null, $comparison = null)
    {
        if (is_string($flujoefectivoChequecirculacion)) {
            $flujoefectivoChequecirculacion = in_array(strtolower($flujoefectivoChequecirculacion), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(FlujoefectivoPeer::FLUJOEFECTIVO_CHEQUECIRCULACION, $flujoefectivoChequecirculacion, $comparison);
    }

    /**
     * Filter the query on the flujoefectivo_fechacobrocheque column
     *
     * Example usage:
     * <code>
     * $query->filterByFlujoefectivoFechacobrocheque('2011-03-14'); // WHERE flujoefectivo_fechacobrocheque = '2011-03-14'
     * $query->filterByFlujoefectivoFechacobrocheque('now'); // WHERE flujoefectivo_fechacobrocheque = '2011-03-14'
     * $query->filterByFlujoefectivoFechacobrocheque(array('max' => 'yesterday')); // WHERE flujoefectivo_fechacobrocheque < '2011-03-13'
     * </code>
     *
     * @param     mixed $flujoefectivoFechacobrocheque The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlujoefectivoQuery The current query, for fluid interface
     */
    public function filterByFlujoefectivoFechacobrocheque($flujoefectivoFechacobrocheque = null, $comparison = null)
    {
        if (is_array($flujoefectivoFechacobrocheque)) {
            $useMinMax = false;
            if (isset($flujoefectivoFechacobrocheque['min'])) {
                $this->addUsingAlias(FlujoefectivoPeer::FLUJOEFECTIVO_FECHACOBROCHEQUE, $flujoefectivoFechacobrocheque['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($flujoefectivoFechacobrocheque['max'])) {
                $this->addUsingAlias(FlujoefectivoPeer::FLUJOEFECTIVO_FECHACOBROCHEQUE, $flujoefectivoFechacobrocheque['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlujoefectivoPeer::FLUJOEFECTIVO_FECHACOBROCHEQUE, $flujoefectivoFechacobrocheque, $comparison);
    }

    /**
     * Filter the query by a related Compra object
     *
     * @param   Compra|PropelObjectCollection $compra The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FlujoefectivoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCompra($compra, $comparison = null)
    {
        if ($compra instanceof Compra) {
            return $this
                ->addUsingAlias(FlujoefectivoPeer::IDCOMPRA, $compra->getIdcompra(), $comparison);
        } elseif ($compra instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FlujoefectivoPeer::IDCOMPRA, $compra->toKeyValue('PrimaryKey', 'Idcompra'), $comparison);
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
     * @return FlujoefectivoQuery The current query, for fluid interface
     */
    public function joinCompra($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useCompraQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCompra($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Compra', 'CompraQuery');
    }

    /**
     * Filter the query by a related Cuentabancaria object
     *
     * @param   Cuentabancaria|PropelObjectCollection $cuentabancaria The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FlujoefectivoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCuentabancaria($cuentabancaria, $comparison = null)
    {
        if ($cuentabancaria instanceof Cuentabancaria) {
            return $this
                ->addUsingAlias(FlujoefectivoPeer::IDCUENTABANCARIA, $cuentabancaria->getIdcuentabancaria(), $comparison);
        } elseif ($cuentabancaria instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FlujoefectivoPeer::IDCUENTABANCARIA, $cuentabancaria->toKeyValue('PrimaryKey', 'Idcuentabancaria'), $comparison);
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
     * @return FlujoefectivoQuery The current query, for fluid interface
     */
    public function joinCuentabancaria($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useCuentabancariaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCuentabancaria($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Cuentabancaria', 'CuentabancariaQuery');
    }

    /**
     * Filter the query by a related Cuentaporcobrar object
     *
     * @param   Cuentaporcobrar|PropelObjectCollection $cuentaporcobrar The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FlujoefectivoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCuentaporcobrar($cuentaporcobrar, $comparison = null)
    {
        if ($cuentaporcobrar instanceof Cuentaporcobrar) {
            return $this
                ->addUsingAlias(FlujoefectivoPeer::IDCUENTAPORCOBRAR, $cuentaporcobrar->getIdcuentaporcobrar(), $comparison);
        } elseif ($cuentaporcobrar instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FlujoefectivoPeer::IDCUENTAPORCOBRAR, $cuentaporcobrar->toKeyValue('PrimaryKey', 'Idcuentaporcobrar'), $comparison);
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
     * @return FlujoefectivoQuery The current query, for fluid interface
     */
    public function joinCuentaporcobrar($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useCuentaporcobrarQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCuentaporcobrar($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Cuentaporcobrar', 'CuentaporcobrarQuery');
    }

    /**
     * Filter the query by a related Empresa object
     *
     * @param   Empresa|PropelObjectCollection $empresa The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FlujoefectivoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpresa($empresa, $comparison = null)
    {
        if ($empresa instanceof Empresa) {
            return $this
                ->addUsingAlias(FlujoefectivoPeer::IDEMPRESA, $empresa->getIdempresa(), $comparison);
        } elseif ($empresa instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FlujoefectivoPeer::IDEMPRESA, $empresa->toKeyValue('PrimaryKey', 'Idempresa'), $comparison);
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
     * @return FlujoefectivoQuery The current query, for fluid interface
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
     * Filter the query by a related Ingreso object
     *
     * @param   Ingreso|PropelObjectCollection $ingreso The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FlujoefectivoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByIngreso($ingreso, $comparison = null)
    {
        if ($ingreso instanceof Ingreso) {
            return $this
                ->addUsingAlias(FlujoefectivoPeer::IDINGRESO, $ingreso->getIdingreso(), $comparison);
        } elseif ($ingreso instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FlujoefectivoPeer::IDINGRESO, $ingreso->toKeyValue('PrimaryKey', 'Idingreso'), $comparison);
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
     * @return FlujoefectivoQuery The current query, for fluid interface
     */
    public function joinIngreso($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useIngresoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinIngreso($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ingreso', 'IngresoQuery');
    }

    /**
     * Filter the query by a related Proveedor object
     *
     * @param   Proveedor|PropelObjectCollection $proveedor The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FlujoefectivoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProveedor($proveedor, $comparison = null)
    {
        if ($proveedor instanceof Proveedor) {
            return $this
                ->addUsingAlias(FlujoefectivoPeer::IDPROVEEDOR, $proveedor->getIdproveedor(), $comparison);
        } elseif ($proveedor instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FlujoefectivoPeer::IDPROVEEDOR, $proveedor->toKeyValue('PrimaryKey', 'Idproveedor'), $comparison);
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
     * @return FlujoefectivoQuery The current query, for fluid interface
     */
    public function joinProveedor($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useProveedorQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
     * @return                 FlujoefectivoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursal($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(FlujoefectivoPeer::IDSUCURSAL, $sucursal->getIdsucursal(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FlujoefectivoPeer::IDSUCURSAL, $sucursal->toKeyValue('PrimaryKey', 'Idsucursal'), $comparison);
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
     * @return FlujoefectivoQuery The current query, for fluid interface
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
     * @return                 FlujoefectivoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(FlujoefectivoPeer::IDUSUARIO, $usuario->getIdusuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FlujoefectivoPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
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
     * @return FlujoefectivoQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   Flujoefectivo $flujoefectivo Object to remove from the list of results
     *
     * @return FlujoefectivoQuery The current query, for fluid interface
     */
    public function prune($flujoefectivo = null)
    {
        if ($flujoefectivo) {
            $this->addUsingAlias(FlujoefectivoPeer::IDFLUJOEFECTIVO, $flujoefectivo->getIdflujoefectivo(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
