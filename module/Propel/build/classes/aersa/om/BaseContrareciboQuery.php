<?php


/**
 * Base class that represents a query for the 'contrarecibo' table.
 *
 *
 *
 * @method ContrareciboQuery orderByIdcontrarecibo($order = Criteria::ASC) Order by the idcontrarecibo column
 * @method ContrareciboQuery orderByContrareciboMoneda($order = Criteria::ASC) Order by the contrarecibo_moneda column
 * @method ContrareciboQuery orderByContrareciboTotal($order = Criteria::ASC) Order by the contrarecibo_total column
 * @method ContrareciboQuery orderByIdempresaproveedor($order = Criteria::ASC) Order by the idempresaproveedor column
 * @method ContrareciboQuery orderByIdsucursalproveedor($order = Criteria::ASC) Order by the idsucursalproveedor column
 * @method ContrareciboQuery orderByIdempresacliente($order = Criteria::ASC) Order by the idempresacliente column
 * @method ContrareciboQuery orderByIdsucursalcliente($order = Criteria::ASC) Order by the idsucursalcliente column
 * @method ContrareciboQuery orderByContrareciboFechacreacion($order = Criteria::ASC) Order by the contrarecibo_fechacreacion column
 * @method ContrareciboQuery orderByContrareciboEstatus($order = Criteria::ASC) Order by the contrarecibo_estatus column
 * @method ContrareciboQuery orderByContrareciboFechapago($order = Criteria::ASC) Order by the contrarecibo_fechapago column
 * @method ContrareciboQuery orderByContrareciboFechavalidacion($order = Criteria::ASC) Order by the contrarecibo_fechavalidacion column
 *
 * @method ContrareciboQuery groupByIdcontrarecibo() Group by the idcontrarecibo column
 * @method ContrareciboQuery groupByContrareciboMoneda() Group by the contrarecibo_moneda column
 * @method ContrareciboQuery groupByContrareciboTotal() Group by the contrarecibo_total column
 * @method ContrareciboQuery groupByIdempresaproveedor() Group by the idempresaproveedor column
 * @method ContrareciboQuery groupByIdsucursalproveedor() Group by the idsucursalproveedor column
 * @method ContrareciboQuery groupByIdempresacliente() Group by the idempresacliente column
 * @method ContrareciboQuery groupByIdsucursalcliente() Group by the idsucursalcliente column
 * @method ContrareciboQuery groupByContrareciboFechacreacion() Group by the contrarecibo_fechacreacion column
 * @method ContrareciboQuery groupByContrareciboEstatus() Group by the contrarecibo_estatus column
 * @method ContrareciboQuery groupByContrareciboFechapago() Group by the contrarecibo_fechapago column
 * @method ContrareciboQuery groupByContrareciboFechavalidacion() Group by the contrarecibo_fechavalidacion column
 *
 * @method ContrareciboQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ContrareciboQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ContrareciboQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ContrareciboQuery leftJoinCompra($relationAlias = null) Adds a LEFT JOIN clause to the query using the Compra relation
 * @method ContrareciboQuery rightJoinCompra($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Compra relation
 * @method ContrareciboQuery innerJoinCompra($relationAlias = null) Adds a INNER JOIN clause to the query using the Compra relation
 *
 * @method ContrareciboQuery leftJoinContrarecibodetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Contrarecibodetalle relation
 * @method ContrareciboQuery rightJoinContrarecibodetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Contrarecibodetalle relation
 * @method ContrareciboQuery innerJoinContrarecibodetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Contrarecibodetalle relation
 *
 * @method ContrareciboQuery leftJoinEventocontrarecibo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Eventocontrarecibo relation
 * @method ContrareciboQuery rightJoinEventocontrarecibo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Eventocontrarecibo relation
 * @method ContrareciboQuery innerJoinEventocontrarecibo($relationAlias = null) Adds a INNER JOIN clause to the query using the Eventocontrarecibo relation
 *
 * @method Contrarecibo findOne(PropelPDO $con = null) Return the first Contrarecibo matching the query
 * @method Contrarecibo findOneOrCreate(PropelPDO $con = null) Return the first Contrarecibo matching the query, or a new Contrarecibo object populated from the query conditions when no match is found
 *
 * @method Contrarecibo findOneByContrareciboMoneda(string $contrarecibo_moneda) Return the first Contrarecibo filtered by the contrarecibo_moneda column
 * @method Contrarecibo findOneByContrareciboTotal(string $contrarecibo_total) Return the first Contrarecibo filtered by the contrarecibo_total column
 * @method Contrarecibo findOneByIdempresaproveedor(int $idempresaproveedor) Return the first Contrarecibo filtered by the idempresaproveedor column
 * @method Contrarecibo findOneByIdsucursalproveedor(int $idsucursalproveedor) Return the first Contrarecibo filtered by the idsucursalproveedor column
 * @method Contrarecibo findOneByIdempresacliente(int $idempresacliente) Return the first Contrarecibo filtered by the idempresacliente column
 * @method Contrarecibo findOneByIdsucursalcliente(int $idsucursalcliente) Return the first Contrarecibo filtered by the idsucursalcliente column
 * @method Contrarecibo findOneByContrareciboFechacreacion(string $contrarecibo_fechacreacion) Return the first Contrarecibo filtered by the contrarecibo_fechacreacion column
 * @method Contrarecibo findOneByContrareciboEstatus(string $contrarecibo_estatus) Return the first Contrarecibo filtered by the contrarecibo_estatus column
 * @method Contrarecibo findOneByContrareciboFechapago(string $contrarecibo_fechapago) Return the first Contrarecibo filtered by the contrarecibo_fechapago column
 * @method Contrarecibo findOneByContrareciboFechavalidacion(string $contrarecibo_fechavalidacion) Return the first Contrarecibo filtered by the contrarecibo_fechavalidacion column
 *
 * @method array findByIdcontrarecibo(int $idcontrarecibo) Return Contrarecibo objects filtered by the idcontrarecibo column
 * @method array findByContrareciboMoneda(string $contrarecibo_moneda) Return Contrarecibo objects filtered by the contrarecibo_moneda column
 * @method array findByContrareciboTotal(string $contrarecibo_total) Return Contrarecibo objects filtered by the contrarecibo_total column
 * @method array findByIdempresaproveedor(int $idempresaproveedor) Return Contrarecibo objects filtered by the idempresaproveedor column
 * @method array findByIdsucursalproveedor(int $idsucursalproveedor) Return Contrarecibo objects filtered by the idsucursalproveedor column
 * @method array findByIdempresacliente(int $idempresacliente) Return Contrarecibo objects filtered by the idempresacliente column
 * @method array findByIdsucursalcliente(int $idsucursalcliente) Return Contrarecibo objects filtered by the idsucursalcliente column
 * @method array findByContrareciboFechacreacion(string $contrarecibo_fechacreacion) Return Contrarecibo objects filtered by the contrarecibo_fechacreacion column
 * @method array findByContrareciboEstatus(string $contrarecibo_estatus) Return Contrarecibo objects filtered by the contrarecibo_estatus column
 * @method array findByContrareciboFechapago(string $contrarecibo_fechapago) Return Contrarecibo objects filtered by the contrarecibo_fechapago column
 * @method array findByContrareciboFechavalidacion(string $contrarecibo_fechavalidacion) Return Contrarecibo objects filtered by the contrarecibo_fechavalidacion column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseContrareciboQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseContrareciboQuery object.
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
            $modelName = 'Contrarecibo';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ContrareciboQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ContrareciboQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ContrareciboQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ContrareciboQuery) {
            return $criteria;
        }
        $query = new ContrareciboQuery(null, null, $modelAlias);

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
     * @return   Contrarecibo|Contrarecibo[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ContrareciboPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ContrareciboPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Contrarecibo A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdcontrarecibo($key, $con = null)
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
     * @return                 Contrarecibo A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idcontrarecibo`, `contrarecibo_moneda`, `contrarecibo_total`, `idempresaproveedor`, `idsucursalproveedor`, `idempresacliente`, `idsucursalcliente`, `contrarecibo_fechacreacion`, `contrarecibo_estatus`, `contrarecibo_fechapago`, `contrarecibo_fechavalidacion` FROM `contrarecibo` WHERE `idcontrarecibo` = :p0';
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
            $obj = new Contrarecibo();
            $obj->hydrate($row);
            ContrareciboPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Contrarecibo|Contrarecibo[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Contrarecibo[]|mixed the list of results, formatted by the current formatter
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
     * @return ContrareciboQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ContrareciboPeer::IDCONTRARECIBO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ContrareciboQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ContrareciboPeer::IDCONTRARECIBO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idcontrarecibo column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcontrarecibo(1234); // WHERE idcontrarecibo = 1234
     * $query->filterByIdcontrarecibo(array(12, 34)); // WHERE idcontrarecibo IN (12, 34)
     * $query->filterByIdcontrarecibo(array('min' => 12)); // WHERE idcontrarecibo >= 12
     * $query->filterByIdcontrarecibo(array('max' => 12)); // WHERE idcontrarecibo <= 12
     * </code>
     *
     * @param     mixed $idcontrarecibo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContrareciboQuery The current query, for fluid interface
     */
    public function filterByIdcontrarecibo($idcontrarecibo = null, $comparison = null)
    {
        if (is_array($idcontrarecibo)) {
            $useMinMax = false;
            if (isset($idcontrarecibo['min'])) {
                $this->addUsingAlias(ContrareciboPeer::IDCONTRARECIBO, $idcontrarecibo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcontrarecibo['max'])) {
                $this->addUsingAlias(ContrareciboPeer::IDCONTRARECIBO, $idcontrarecibo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContrareciboPeer::IDCONTRARECIBO, $idcontrarecibo, $comparison);
    }

    /**
     * Filter the query on the contrarecibo_moneda column
     *
     * Example usage:
     * <code>
     * $query->filterByContrareciboMoneda('fooValue');   // WHERE contrarecibo_moneda = 'fooValue'
     * $query->filterByContrareciboMoneda('%fooValue%'); // WHERE contrarecibo_moneda LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contrareciboMoneda The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContrareciboQuery The current query, for fluid interface
     */
    public function filterByContrareciboMoneda($contrareciboMoneda = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contrareciboMoneda)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contrareciboMoneda)) {
                $contrareciboMoneda = str_replace('*', '%', $contrareciboMoneda);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ContrareciboPeer::CONTRARECIBO_MONEDA, $contrareciboMoneda, $comparison);
    }

    /**
     * Filter the query on the contrarecibo_total column
     *
     * Example usage:
     * <code>
     * $query->filterByContrareciboTotal(1234); // WHERE contrarecibo_total = 1234
     * $query->filterByContrareciboTotal(array(12, 34)); // WHERE contrarecibo_total IN (12, 34)
     * $query->filterByContrareciboTotal(array('min' => 12)); // WHERE contrarecibo_total >= 12
     * $query->filterByContrareciboTotal(array('max' => 12)); // WHERE contrarecibo_total <= 12
     * </code>
     *
     * @param     mixed $contrareciboTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContrareciboQuery The current query, for fluid interface
     */
    public function filterByContrareciboTotal($contrareciboTotal = null, $comparison = null)
    {
        if (is_array($contrareciboTotal)) {
            $useMinMax = false;
            if (isset($contrareciboTotal['min'])) {
                $this->addUsingAlias(ContrareciboPeer::CONTRARECIBO_TOTAL, $contrareciboTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($contrareciboTotal['max'])) {
                $this->addUsingAlias(ContrareciboPeer::CONTRARECIBO_TOTAL, $contrareciboTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContrareciboPeer::CONTRARECIBO_TOTAL, $contrareciboTotal, $comparison);
    }

    /**
     * Filter the query on the idempresaproveedor column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempresaproveedor(1234); // WHERE idempresaproveedor = 1234
     * $query->filterByIdempresaproveedor(array(12, 34)); // WHERE idempresaproveedor IN (12, 34)
     * $query->filterByIdempresaproveedor(array('min' => 12)); // WHERE idempresaproveedor >= 12
     * $query->filterByIdempresaproveedor(array('max' => 12)); // WHERE idempresaproveedor <= 12
     * </code>
     *
     * @param     mixed $idempresaproveedor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContrareciboQuery The current query, for fluid interface
     */
    public function filterByIdempresaproveedor($idempresaproveedor = null, $comparison = null)
    {
        if (is_array($idempresaproveedor)) {
            $useMinMax = false;
            if (isset($idempresaproveedor['min'])) {
                $this->addUsingAlias(ContrareciboPeer::IDEMPRESAPROVEEDOR, $idempresaproveedor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempresaproveedor['max'])) {
                $this->addUsingAlias(ContrareciboPeer::IDEMPRESAPROVEEDOR, $idempresaproveedor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContrareciboPeer::IDEMPRESAPROVEEDOR, $idempresaproveedor, $comparison);
    }

    /**
     * Filter the query on the idsucursalproveedor column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsucursalproveedor(1234); // WHERE idsucursalproveedor = 1234
     * $query->filterByIdsucursalproveedor(array(12, 34)); // WHERE idsucursalproveedor IN (12, 34)
     * $query->filterByIdsucursalproveedor(array('min' => 12)); // WHERE idsucursalproveedor >= 12
     * $query->filterByIdsucursalproveedor(array('max' => 12)); // WHERE idsucursalproveedor <= 12
     * </code>
     *
     * @param     mixed $idsucursalproveedor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContrareciboQuery The current query, for fluid interface
     */
    public function filterByIdsucursalproveedor($idsucursalproveedor = null, $comparison = null)
    {
        if (is_array($idsucursalproveedor)) {
            $useMinMax = false;
            if (isset($idsucursalproveedor['min'])) {
                $this->addUsingAlias(ContrareciboPeer::IDSUCURSALPROVEEDOR, $idsucursalproveedor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursalproveedor['max'])) {
                $this->addUsingAlias(ContrareciboPeer::IDSUCURSALPROVEEDOR, $idsucursalproveedor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContrareciboPeer::IDSUCURSALPROVEEDOR, $idsucursalproveedor, $comparison);
    }

    /**
     * Filter the query on the idempresacliente column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempresacliente(1234); // WHERE idempresacliente = 1234
     * $query->filterByIdempresacliente(array(12, 34)); // WHERE idempresacliente IN (12, 34)
     * $query->filterByIdempresacliente(array('min' => 12)); // WHERE idempresacliente >= 12
     * $query->filterByIdempresacliente(array('max' => 12)); // WHERE idempresacliente <= 12
     * </code>
     *
     * @param     mixed $idempresacliente The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContrareciboQuery The current query, for fluid interface
     */
    public function filterByIdempresacliente($idempresacliente = null, $comparison = null)
    {
        if (is_array($idempresacliente)) {
            $useMinMax = false;
            if (isset($idempresacliente['min'])) {
                $this->addUsingAlias(ContrareciboPeer::IDEMPRESACLIENTE, $idempresacliente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempresacliente['max'])) {
                $this->addUsingAlias(ContrareciboPeer::IDEMPRESACLIENTE, $idempresacliente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContrareciboPeer::IDEMPRESACLIENTE, $idempresacliente, $comparison);
    }

    /**
     * Filter the query on the idsucursalcliente column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsucursalcliente(1234); // WHERE idsucursalcliente = 1234
     * $query->filterByIdsucursalcliente(array(12, 34)); // WHERE idsucursalcliente IN (12, 34)
     * $query->filterByIdsucursalcliente(array('min' => 12)); // WHERE idsucursalcliente >= 12
     * $query->filterByIdsucursalcliente(array('max' => 12)); // WHERE idsucursalcliente <= 12
     * </code>
     *
     * @param     mixed $idsucursalcliente The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContrareciboQuery The current query, for fluid interface
     */
    public function filterByIdsucursalcliente($idsucursalcliente = null, $comparison = null)
    {
        if (is_array($idsucursalcliente)) {
            $useMinMax = false;
            if (isset($idsucursalcliente['min'])) {
                $this->addUsingAlias(ContrareciboPeer::IDSUCURSALCLIENTE, $idsucursalcliente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursalcliente['max'])) {
                $this->addUsingAlias(ContrareciboPeer::IDSUCURSALCLIENTE, $idsucursalcliente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContrareciboPeer::IDSUCURSALCLIENTE, $idsucursalcliente, $comparison);
    }

    /**
     * Filter the query on the contrarecibo_fechacreacion column
     *
     * Example usage:
     * <code>
     * $query->filterByContrareciboFechacreacion('2011-03-14'); // WHERE contrarecibo_fechacreacion = '2011-03-14'
     * $query->filterByContrareciboFechacreacion('now'); // WHERE contrarecibo_fechacreacion = '2011-03-14'
     * $query->filterByContrareciboFechacreacion(array('max' => 'yesterday')); // WHERE contrarecibo_fechacreacion < '2011-03-13'
     * </code>
     *
     * @param     mixed $contrareciboFechacreacion The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContrareciboQuery The current query, for fluid interface
     */
    public function filterByContrareciboFechacreacion($contrareciboFechacreacion = null, $comparison = null)
    {
        if (is_array($contrareciboFechacreacion)) {
            $useMinMax = false;
            if (isset($contrareciboFechacreacion['min'])) {
                $this->addUsingAlias(ContrareciboPeer::CONTRARECIBO_FECHACREACION, $contrareciboFechacreacion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($contrareciboFechacreacion['max'])) {
                $this->addUsingAlias(ContrareciboPeer::CONTRARECIBO_FECHACREACION, $contrareciboFechacreacion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContrareciboPeer::CONTRARECIBO_FECHACREACION, $contrareciboFechacreacion, $comparison);
    }

    /**
     * Filter the query on the contrarecibo_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterByContrareciboEstatus('fooValue');   // WHERE contrarecibo_estatus = 'fooValue'
     * $query->filterByContrareciboEstatus('%fooValue%'); // WHERE contrarecibo_estatus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contrareciboEstatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContrareciboQuery The current query, for fluid interface
     */
    public function filterByContrareciboEstatus($contrareciboEstatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contrareciboEstatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contrareciboEstatus)) {
                $contrareciboEstatus = str_replace('*', '%', $contrareciboEstatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ContrareciboPeer::CONTRARECIBO_ESTATUS, $contrareciboEstatus, $comparison);
    }

    /**
     * Filter the query on the contrarecibo_fechapago column
     *
     * Example usage:
     * <code>
     * $query->filterByContrareciboFechapago('2011-03-14'); // WHERE contrarecibo_fechapago = '2011-03-14'
     * $query->filterByContrareciboFechapago('now'); // WHERE contrarecibo_fechapago = '2011-03-14'
     * $query->filterByContrareciboFechapago(array('max' => 'yesterday')); // WHERE contrarecibo_fechapago < '2011-03-13'
     * </code>
     *
     * @param     mixed $contrareciboFechapago The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContrareciboQuery The current query, for fluid interface
     */
    public function filterByContrareciboFechapago($contrareciboFechapago = null, $comparison = null)
    {
        if (is_array($contrareciboFechapago)) {
            $useMinMax = false;
            if (isset($contrareciboFechapago['min'])) {
                $this->addUsingAlias(ContrareciboPeer::CONTRARECIBO_FECHAPAGO, $contrareciboFechapago['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($contrareciboFechapago['max'])) {
                $this->addUsingAlias(ContrareciboPeer::CONTRARECIBO_FECHAPAGO, $contrareciboFechapago['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContrareciboPeer::CONTRARECIBO_FECHAPAGO, $contrareciboFechapago, $comparison);
    }

    /**
     * Filter the query on the contrarecibo_fechavalidacion column
     *
     * Example usage:
     * <code>
     * $query->filterByContrareciboFechavalidacion('2011-03-14'); // WHERE contrarecibo_fechavalidacion = '2011-03-14'
     * $query->filterByContrareciboFechavalidacion('now'); // WHERE contrarecibo_fechavalidacion = '2011-03-14'
     * $query->filterByContrareciboFechavalidacion(array('max' => 'yesterday')); // WHERE contrarecibo_fechavalidacion < '2011-03-13'
     * </code>
     *
     * @param     mixed $contrareciboFechavalidacion The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContrareciboQuery The current query, for fluid interface
     */
    public function filterByContrareciboFechavalidacion($contrareciboFechavalidacion = null, $comparison = null)
    {
        if (is_array($contrareciboFechavalidacion)) {
            $useMinMax = false;
            if (isset($contrareciboFechavalidacion['min'])) {
                $this->addUsingAlias(ContrareciboPeer::CONTRARECIBO_FECHAVALIDACION, $contrareciboFechavalidacion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($contrareciboFechavalidacion['max'])) {
                $this->addUsingAlias(ContrareciboPeer::CONTRARECIBO_FECHAVALIDACION, $contrareciboFechavalidacion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContrareciboPeer::CONTRARECIBO_FECHAVALIDACION, $contrareciboFechavalidacion, $comparison);
    }

    /**
     * Filter the query by a related Compra object
     *
     * @param   Compra|PropelObjectCollection $compra  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ContrareciboQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCompra($compra, $comparison = null)
    {
        if ($compra instanceof Compra) {
            return $this
                ->addUsingAlias(ContrareciboPeer::IDCONTRARECIBO, $compra->getIdcontrarecibo(), $comparison);
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
     * @return ContrareciboQuery The current query, for fluid interface
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
     * Filter the query by a related Contrarecibodetalle object
     *
     * @param   Contrarecibodetalle|PropelObjectCollection $contrarecibodetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ContrareciboQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByContrarecibodetalle($contrarecibodetalle, $comparison = null)
    {
        if ($contrarecibodetalle instanceof Contrarecibodetalle) {
            return $this
                ->addUsingAlias(ContrareciboPeer::IDCONTRARECIBO, $contrarecibodetalle->getIdcontrarecibo(), $comparison);
        } elseif ($contrarecibodetalle instanceof PropelObjectCollection) {
            return $this
                ->useContrarecibodetalleQuery()
                ->filterByPrimaryKeys($contrarecibodetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByContrarecibodetalle() only accepts arguments of type Contrarecibodetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Contrarecibodetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ContrareciboQuery The current query, for fluid interface
     */
    public function joinContrarecibodetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Contrarecibodetalle');

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
            $this->addJoinObject($join, 'Contrarecibodetalle');
        }

        return $this;
    }

    /**
     * Use the Contrarecibodetalle relation Contrarecibodetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ContrarecibodetalleQuery A secondary query class using the current class as primary query
     */
    public function useContrarecibodetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinContrarecibodetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Contrarecibodetalle', 'ContrarecibodetalleQuery');
    }

    /**
     * Filter the query by a related Eventocontrarecibo object
     *
     * @param   Eventocontrarecibo|PropelObjectCollection $eventocontrarecibo  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ContrareciboQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEventocontrarecibo($eventocontrarecibo, $comparison = null)
    {
        if ($eventocontrarecibo instanceof Eventocontrarecibo) {
            return $this
                ->addUsingAlias(ContrareciboPeer::IDCONTRARECIBO, $eventocontrarecibo->getIdcontrarecibo(), $comparison);
        } elseif ($eventocontrarecibo instanceof PropelObjectCollection) {
            return $this
                ->useEventocontrareciboQuery()
                ->filterByPrimaryKeys($eventocontrarecibo->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByEventocontrarecibo() only accepts arguments of type Eventocontrarecibo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Eventocontrarecibo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ContrareciboQuery The current query, for fluid interface
     */
    public function joinEventocontrarecibo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Eventocontrarecibo');

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
            $this->addJoinObject($join, 'Eventocontrarecibo');
        }

        return $this;
    }

    /**
     * Use the Eventocontrarecibo relation Eventocontrarecibo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EventocontrareciboQuery A secondary query class using the current class as primary query
     */
    public function useEventocontrareciboQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEventocontrarecibo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Eventocontrarecibo', 'EventocontrareciboQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Contrarecibo $contrarecibo Object to remove from the list of results
     *
     * @return ContrareciboQuery The current query, for fluid interface
     */
    public function prune($contrarecibo = null)
    {
        if ($contrarecibo) {
            $this->addUsingAlias(ContrareciboPeer::IDCONTRARECIBO, $contrarecibo->getIdcontrarecibo(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
