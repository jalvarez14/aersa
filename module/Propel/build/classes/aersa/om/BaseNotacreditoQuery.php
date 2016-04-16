<?php


/**
 * Base class that represents a query for the 'notacredito' table.
 *
 *
 *
 * @method NotacreditoQuery orderByIdnotacredito($order = Criteria::ASC) Order by the idnotacredito column
 * @method NotacreditoQuery orderByIdempresa($order = Criteria::ASC) Order by the idempresa column
 * @method NotacreditoQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method NotacreditoQuery orderByIdusuario($order = Criteria::ASC) Order by the idusuario column
 * @method NotacreditoQuery orderByIdauditor($order = Criteria::ASC) Order by the idauditor column
 * @method NotacreditoQuery orderByIdalmacen($order = Criteria::ASC) Order by the idalmacen column
 * @method NotacreditoQuery orderByNotacreditoFolio($order = Criteria::ASC) Order by the notacredito_folio column
 * @method NotacreditoQuery orderByNotacreditoRevisada($order = Criteria::ASC) Order by the notacredito_revisada column
 * @method NotacreditoQuery orderByNotacreditoFactura($order = Criteria::ASC) Order by the notacredito_factura column
 * @method NotacreditoQuery orderByNotacreditoFechacreacion($order = Criteria::ASC) Order by the notacredito_fechacreacion column
 * @method NotacreditoQuery orderByNotacreditoFechaentrega($order = Criteria::ASC) Order by the notacredito_fechaentrega column
 * @method NotacreditoQuery orderByNotacreditoIeps($order = Criteria::ASC) Order by the notacredito_ieps column
 * @method NotacreditoQuery orderByNotacreditoIva($order = Criteria::ASC) Order by the notacredito_iva column
 * @method NotacreditoQuery orderByNotacreditoTotal($order = Criteria::ASC) Order by the notacredito_total column
 *
 * @method NotacreditoQuery groupByIdnotacredito() Group by the idnotacredito column
 * @method NotacreditoQuery groupByIdempresa() Group by the idempresa column
 * @method NotacreditoQuery groupByIdsucursal() Group by the idsucursal column
 * @method NotacreditoQuery groupByIdusuario() Group by the idusuario column
 * @method NotacreditoQuery groupByIdauditor() Group by the idauditor column
 * @method NotacreditoQuery groupByIdalmacen() Group by the idalmacen column
 * @method NotacreditoQuery groupByNotacreditoFolio() Group by the notacredito_folio column
 * @method NotacreditoQuery groupByNotacreditoRevisada() Group by the notacredito_revisada column
 * @method NotacreditoQuery groupByNotacreditoFactura() Group by the notacredito_factura column
 * @method NotacreditoQuery groupByNotacreditoFechacreacion() Group by the notacredito_fechacreacion column
 * @method NotacreditoQuery groupByNotacreditoFechaentrega() Group by the notacredito_fechaentrega column
 * @method NotacreditoQuery groupByNotacreditoIeps() Group by the notacredito_ieps column
 * @method NotacreditoQuery groupByNotacreditoIva() Group by the notacredito_iva column
 * @method NotacreditoQuery groupByNotacreditoTotal() Group by the notacredito_total column
 *
 * @method NotacreditoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method NotacreditoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method NotacreditoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method NotacreditoQuery leftJoinAlmacen($relationAlias = null) Adds a LEFT JOIN clause to the query using the Almacen relation
 * @method NotacreditoQuery rightJoinAlmacen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Almacen relation
 * @method NotacreditoQuery innerJoinAlmacen($relationAlias = null) Adds a INNER JOIN clause to the query using the Almacen relation
 *
 * @method NotacreditoQuery leftJoinUsuarioRelatedByIdauditor($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioRelatedByIdauditor relation
 * @method NotacreditoQuery rightJoinUsuarioRelatedByIdauditor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioRelatedByIdauditor relation
 * @method NotacreditoQuery innerJoinUsuarioRelatedByIdauditor($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioRelatedByIdauditor relation
 *
 * @method NotacreditoQuery leftJoinEmpresa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empresa relation
 * @method NotacreditoQuery rightJoinEmpresa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empresa relation
 * @method NotacreditoQuery innerJoinEmpresa($relationAlias = null) Adds a INNER JOIN clause to the query using the Empresa relation
 *
 * @method NotacreditoQuery leftJoinSucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursal relation
 * @method NotacreditoQuery rightJoinSucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursal relation
 * @method NotacreditoQuery innerJoinSucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursal relation
 *
 * @method NotacreditoQuery leftJoinUsuarioRelatedByIdusuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioRelatedByIdusuario relation
 * @method NotacreditoQuery rightJoinUsuarioRelatedByIdusuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioRelatedByIdusuario relation
 * @method NotacreditoQuery innerJoinUsuarioRelatedByIdusuario($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioRelatedByIdusuario relation
 *
 * @method NotacreditoQuery leftJoinNotacreditodetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Notacreditodetalle relation
 * @method NotacreditoQuery rightJoinNotacreditodetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Notacreditodetalle relation
 * @method NotacreditoQuery innerJoinNotacreditodetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Notacreditodetalle relation
 *
 * @method NotacreditoQuery leftJoinNotacreditonota($relationAlias = null) Adds a LEFT JOIN clause to the query using the Notacreditonota relation
 * @method NotacreditoQuery rightJoinNotacreditonota($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Notacreditonota relation
 * @method NotacreditoQuery innerJoinNotacreditonota($relationAlias = null) Adds a INNER JOIN clause to the query using the Notacreditonota relation
 *
 * @method Notacredito findOne(PropelPDO $con = null) Return the first Notacredito matching the query
 * @method Notacredito findOneOrCreate(PropelPDO $con = null) Return the first Notacredito matching the query, or a new Notacredito object populated from the query conditions when no match is found
 *
 * @method Notacredito findOneByIdempresa(int $idempresa) Return the first Notacredito filtered by the idempresa column
 * @method Notacredito findOneByIdsucursal(int $idsucursal) Return the first Notacredito filtered by the idsucursal column
 * @method Notacredito findOneByIdusuario(int $idusuario) Return the first Notacredito filtered by the idusuario column
 * @method Notacredito findOneByIdauditor(int $idauditor) Return the first Notacredito filtered by the idauditor column
 * @method Notacredito findOneByIdalmacen(int $idalmacen) Return the first Notacredito filtered by the idalmacen column
 * @method Notacredito findOneByNotacreditoFolio(string $notacredito_folio) Return the first Notacredito filtered by the notacredito_folio column
 * @method Notacredito findOneByNotacreditoRevisada(boolean $notacredito_revisada) Return the first Notacredito filtered by the notacredito_revisada column
 * @method Notacredito findOneByNotacreditoFactura(string $notacredito_factura) Return the first Notacredito filtered by the notacredito_factura column
 * @method Notacredito findOneByNotacreditoFechacreacion(string $notacredito_fechacreacion) Return the first Notacredito filtered by the notacredito_fechacreacion column
 * @method Notacredito findOneByNotacreditoFechaentrega(string $notacredito_fechaentrega) Return the first Notacredito filtered by the notacredito_fechaentrega column
 * @method Notacredito findOneByNotacreditoIeps(string $notacredito_ieps) Return the first Notacredito filtered by the notacredito_ieps column
 * @method Notacredito findOneByNotacreditoIva(string $notacredito_iva) Return the first Notacredito filtered by the notacredito_iva column
 * @method Notacredito findOneByNotacreditoTotal(string $notacredito_total) Return the first Notacredito filtered by the notacredito_total column
 *
 * @method array findByIdnotacredito(int $idnotacredito) Return Notacredito objects filtered by the idnotacredito column
 * @method array findByIdempresa(int $idempresa) Return Notacredito objects filtered by the idempresa column
 * @method array findByIdsucursal(int $idsucursal) Return Notacredito objects filtered by the idsucursal column
 * @method array findByIdusuario(int $idusuario) Return Notacredito objects filtered by the idusuario column
 * @method array findByIdauditor(int $idauditor) Return Notacredito objects filtered by the idauditor column
 * @method array findByIdalmacen(int $idalmacen) Return Notacredito objects filtered by the idalmacen column
 * @method array findByNotacreditoFolio(string $notacredito_folio) Return Notacredito objects filtered by the notacredito_folio column
 * @method array findByNotacreditoRevisada(boolean $notacredito_revisada) Return Notacredito objects filtered by the notacredito_revisada column
 * @method array findByNotacreditoFactura(string $notacredito_factura) Return Notacredito objects filtered by the notacredito_factura column
 * @method array findByNotacreditoFechacreacion(string $notacredito_fechacreacion) Return Notacredito objects filtered by the notacredito_fechacreacion column
 * @method array findByNotacreditoFechaentrega(string $notacredito_fechaentrega) Return Notacredito objects filtered by the notacredito_fechaentrega column
 * @method array findByNotacreditoIeps(string $notacredito_ieps) Return Notacredito objects filtered by the notacredito_ieps column
 * @method array findByNotacreditoIva(string $notacredito_iva) Return Notacredito objects filtered by the notacredito_iva column
 * @method array findByNotacreditoTotal(string $notacredito_total) Return Notacredito objects filtered by the notacredito_total column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseNotacreditoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseNotacreditoQuery object.
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
            $modelName = 'Notacredito';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new NotacreditoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   NotacreditoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return NotacreditoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof NotacreditoQuery) {
            return $criteria;
        }
        $query = new NotacreditoQuery(null, null, $modelAlias);

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
     * @return   Notacredito|Notacredito[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = NotacreditoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(NotacreditoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Notacredito A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdnotacredito($key, $con = null)
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
     * @return                 Notacredito A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idnotacredito`, `idempresa`, `idsucursal`, `idusuario`, `idauditor`, `idalmacen`, `notacredito_folio`, `notacredito_revisada`, `notacredito_factura`, `notacredito_fechacreacion`, `notacredito_fechaentrega`, `notacredito_ieps`, `notacredito_iva`, `notacredito_total` FROM `notacredito` WHERE `idnotacredito` = :p0';
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
            $obj = new Notacredito();
            $obj->hydrate($row);
            NotacreditoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Notacredito|Notacredito[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Notacredito[]|mixed the list of results, formatted by the current formatter
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
     * @return NotacreditoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(NotacreditoPeer::IDNOTACREDITO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return NotacreditoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(NotacreditoPeer::IDNOTACREDITO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idnotacredito column
     *
     * Example usage:
     * <code>
     * $query->filterByIdnotacredito(1234); // WHERE idnotacredito = 1234
     * $query->filterByIdnotacredito(array(12, 34)); // WHERE idnotacredito IN (12, 34)
     * $query->filterByIdnotacredito(array('min' => 12)); // WHERE idnotacredito >= 12
     * $query->filterByIdnotacredito(array('max' => 12)); // WHERE idnotacredito <= 12
     * </code>
     *
     * @param     mixed $idnotacredito The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotacreditoQuery The current query, for fluid interface
     */
    public function filterByIdnotacredito($idnotacredito = null, $comparison = null)
    {
        if (is_array($idnotacredito)) {
            $useMinMax = false;
            if (isset($idnotacredito['min'])) {
                $this->addUsingAlias(NotacreditoPeer::IDNOTACREDITO, $idnotacredito['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idnotacredito['max'])) {
                $this->addUsingAlias(NotacreditoPeer::IDNOTACREDITO, $idnotacredito['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NotacreditoPeer::IDNOTACREDITO, $idnotacredito, $comparison);
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
     * @return NotacreditoQuery The current query, for fluid interface
     */
    public function filterByIdempresa($idempresa = null, $comparison = null)
    {
        if (is_array($idempresa)) {
            $useMinMax = false;
            if (isset($idempresa['min'])) {
                $this->addUsingAlias(NotacreditoPeer::IDEMPRESA, $idempresa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempresa['max'])) {
                $this->addUsingAlias(NotacreditoPeer::IDEMPRESA, $idempresa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NotacreditoPeer::IDEMPRESA, $idempresa, $comparison);
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
     * @return NotacreditoQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(NotacreditoPeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(NotacreditoPeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NotacreditoPeer::IDSUCURSAL, $idsucursal, $comparison);
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
     * @return NotacreditoQuery The current query, for fluid interface
     */
    public function filterByIdusuario($idusuario = null, $comparison = null)
    {
        if (is_array($idusuario)) {
            $useMinMax = false;
            if (isset($idusuario['min'])) {
                $this->addUsingAlias(NotacreditoPeer::IDUSUARIO, $idusuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idusuario['max'])) {
                $this->addUsingAlias(NotacreditoPeer::IDUSUARIO, $idusuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NotacreditoPeer::IDUSUARIO, $idusuario, $comparison);
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
     * @return NotacreditoQuery The current query, for fluid interface
     */
    public function filterByIdauditor($idauditor = null, $comparison = null)
    {
        if (is_array($idauditor)) {
            $useMinMax = false;
            if (isset($idauditor['min'])) {
                $this->addUsingAlias(NotacreditoPeer::IDAUDITOR, $idauditor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idauditor['max'])) {
                $this->addUsingAlias(NotacreditoPeer::IDAUDITOR, $idauditor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NotacreditoPeer::IDAUDITOR, $idauditor, $comparison);
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
     * @return NotacreditoQuery The current query, for fluid interface
     */
    public function filterByIdalmacen($idalmacen = null, $comparison = null)
    {
        if (is_array($idalmacen)) {
            $useMinMax = false;
            if (isset($idalmacen['min'])) {
                $this->addUsingAlias(NotacreditoPeer::IDALMACEN, $idalmacen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idalmacen['max'])) {
                $this->addUsingAlias(NotacreditoPeer::IDALMACEN, $idalmacen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NotacreditoPeer::IDALMACEN, $idalmacen, $comparison);
    }

    /**
     * Filter the query on the notacredito_folio column
     *
     * Example usage:
     * <code>
     * $query->filterByNotacreditoFolio('fooValue');   // WHERE notacredito_folio = 'fooValue'
     * $query->filterByNotacreditoFolio('%fooValue%'); // WHERE notacredito_folio LIKE '%fooValue%'
     * </code>
     *
     * @param     string $notacreditoFolio The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotacreditoQuery The current query, for fluid interface
     */
    public function filterByNotacreditoFolio($notacreditoFolio = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($notacreditoFolio)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $notacreditoFolio)) {
                $notacreditoFolio = str_replace('*', '%', $notacreditoFolio);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(NotacreditoPeer::NOTACREDITO_FOLIO, $notacreditoFolio, $comparison);
    }

    /**
     * Filter the query on the notacredito_revisada column
     *
     * Example usage:
     * <code>
     * $query->filterByNotacreditoRevisada(true); // WHERE notacredito_revisada = true
     * $query->filterByNotacreditoRevisada('yes'); // WHERE notacredito_revisada = true
     * </code>
     *
     * @param     boolean|string $notacreditoRevisada The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotacreditoQuery The current query, for fluid interface
     */
    public function filterByNotacreditoRevisada($notacreditoRevisada = null, $comparison = null)
    {
        if (is_string($notacreditoRevisada)) {
            $notacreditoRevisada = in_array(strtolower($notacreditoRevisada), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(NotacreditoPeer::NOTACREDITO_REVISADA, $notacreditoRevisada, $comparison);
    }

    /**
     * Filter the query on the notacredito_factura column
     *
     * Example usage:
     * <code>
     * $query->filterByNotacreditoFactura('fooValue');   // WHERE notacredito_factura = 'fooValue'
     * $query->filterByNotacreditoFactura('%fooValue%'); // WHERE notacredito_factura LIKE '%fooValue%'
     * </code>
     *
     * @param     string $notacreditoFactura The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotacreditoQuery The current query, for fluid interface
     */
    public function filterByNotacreditoFactura($notacreditoFactura = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($notacreditoFactura)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $notacreditoFactura)) {
                $notacreditoFactura = str_replace('*', '%', $notacreditoFactura);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(NotacreditoPeer::NOTACREDITO_FACTURA, $notacreditoFactura, $comparison);
    }

    /**
     * Filter the query on the notacredito_fechacreacion column
     *
     * Example usage:
     * <code>
     * $query->filterByNotacreditoFechacreacion('2011-03-14'); // WHERE notacredito_fechacreacion = '2011-03-14'
     * $query->filterByNotacreditoFechacreacion('now'); // WHERE notacredito_fechacreacion = '2011-03-14'
     * $query->filterByNotacreditoFechacreacion(array('max' => 'yesterday')); // WHERE notacredito_fechacreacion < '2011-03-13'
     * </code>
     *
     * @param     mixed $notacreditoFechacreacion The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotacreditoQuery The current query, for fluid interface
     */
    public function filterByNotacreditoFechacreacion($notacreditoFechacreacion = null, $comparison = null)
    {
        if (is_array($notacreditoFechacreacion)) {
            $useMinMax = false;
            if (isset($notacreditoFechacreacion['min'])) {
                $this->addUsingAlias(NotacreditoPeer::NOTACREDITO_FECHACREACION, $notacreditoFechacreacion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($notacreditoFechacreacion['max'])) {
                $this->addUsingAlias(NotacreditoPeer::NOTACREDITO_FECHACREACION, $notacreditoFechacreacion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NotacreditoPeer::NOTACREDITO_FECHACREACION, $notacreditoFechacreacion, $comparison);
    }

    /**
     * Filter the query on the notacredito_fechaentrega column
     *
     * Example usage:
     * <code>
     * $query->filterByNotacreditoFechaentrega('fooValue');   // WHERE notacredito_fechaentrega = 'fooValue'
     * $query->filterByNotacreditoFechaentrega('%fooValue%'); // WHERE notacredito_fechaentrega LIKE '%fooValue%'
     * </code>
     *
     * @param     string $notacreditoFechaentrega The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotacreditoQuery The current query, for fluid interface
     */
    public function filterByNotacreditoFechaentrega($notacreditoFechaentrega = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($notacreditoFechaentrega)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $notacreditoFechaentrega)) {
                $notacreditoFechaentrega = str_replace('*', '%', $notacreditoFechaentrega);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(NotacreditoPeer::NOTACREDITO_FECHAENTREGA, $notacreditoFechaentrega, $comparison);
    }

    /**
     * Filter the query on the notacredito_ieps column
     *
     * Example usage:
     * <code>
     * $query->filterByNotacreditoIeps(1234); // WHERE notacredito_ieps = 1234
     * $query->filterByNotacreditoIeps(array(12, 34)); // WHERE notacredito_ieps IN (12, 34)
     * $query->filterByNotacreditoIeps(array('min' => 12)); // WHERE notacredito_ieps >= 12
     * $query->filterByNotacreditoIeps(array('max' => 12)); // WHERE notacredito_ieps <= 12
     * </code>
     *
     * @param     mixed $notacreditoIeps The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotacreditoQuery The current query, for fluid interface
     */
    public function filterByNotacreditoIeps($notacreditoIeps = null, $comparison = null)
    {
        if (is_array($notacreditoIeps)) {
            $useMinMax = false;
            if (isset($notacreditoIeps['min'])) {
                $this->addUsingAlias(NotacreditoPeer::NOTACREDITO_IEPS, $notacreditoIeps['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($notacreditoIeps['max'])) {
                $this->addUsingAlias(NotacreditoPeer::NOTACREDITO_IEPS, $notacreditoIeps['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NotacreditoPeer::NOTACREDITO_IEPS, $notacreditoIeps, $comparison);
    }

    /**
     * Filter the query on the notacredito_iva column
     *
     * Example usage:
     * <code>
     * $query->filterByNotacreditoIva(1234); // WHERE notacredito_iva = 1234
     * $query->filterByNotacreditoIva(array(12, 34)); // WHERE notacredito_iva IN (12, 34)
     * $query->filterByNotacreditoIva(array('min' => 12)); // WHERE notacredito_iva >= 12
     * $query->filterByNotacreditoIva(array('max' => 12)); // WHERE notacredito_iva <= 12
     * </code>
     *
     * @param     mixed $notacreditoIva The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotacreditoQuery The current query, for fluid interface
     */
    public function filterByNotacreditoIva($notacreditoIva = null, $comparison = null)
    {
        if (is_array($notacreditoIva)) {
            $useMinMax = false;
            if (isset($notacreditoIva['min'])) {
                $this->addUsingAlias(NotacreditoPeer::NOTACREDITO_IVA, $notacreditoIva['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($notacreditoIva['max'])) {
                $this->addUsingAlias(NotacreditoPeer::NOTACREDITO_IVA, $notacreditoIva['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NotacreditoPeer::NOTACREDITO_IVA, $notacreditoIva, $comparison);
    }

    /**
     * Filter the query on the notacredito_total column
     *
     * Example usage:
     * <code>
     * $query->filterByNotacreditoTotal(1234); // WHERE notacredito_total = 1234
     * $query->filterByNotacreditoTotal(array(12, 34)); // WHERE notacredito_total IN (12, 34)
     * $query->filterByNotacreditoTotal(array('min' => 12)); // WHERE notacredito_total >= 12
     * $query->filterByNotacreditoTotal(array('max' => 12)); // WHERE notacredito_total <= 12
     * </code>
     *
     * @param     mixed $notacreditoTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotacreditoQuery The current query, for fluid interface
     */
    public function filterByNotacreditoTotal($notacreditoTotal = null, $comparison = null)
    {
        if (is_array($notacreditoTotal)) {
            $useMinMax = false;
            if (isset($notacreditoTotal['min'])) {
                $this->addUsingAlias(NotacreditoPeer::NOTACREDITO_TOTAL, $notacreditoTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($notacreditoTotal['max'])) {
                $this->addUsingAlias(NotacreditoPeer::NOTACREDITO_TOTAL, $notacreditoTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NotacreditoPeer::NOTACREDITO_TOTAL, $notacreditoTotal, $comparison);
    }

    /**
     * Filter the query by a related Almacen object
     *
     * @param   Almacen|PropelObjectCollection $almacen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 NotacreditoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAlmacen($almacen, $comparison = null)
    {
        if ($almacen instanceof Almacen) {
            return $this
                ->addUsingAlias(NotacreditoPeer::IDALMACEN, $almacen->getIdalmacen(), $comparison);
        } elseif ($almacen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(NotacreditoPeer::IDALMACEN, $almacen->toKeyValue('PrimaryKey', 'Idalmacen'), $comparison);
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
     * @return NotacreditoQuery The current query, for fluid interface
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
     * @return                 NotacreditoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuarioRelatedByIdauditor($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(NotacreditoPeer::IDAUDITOR, $usuario->getIdusuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(NotacreditoPeer::IDAUDITOR, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
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
     * @return NotacreditoQuery The current query, for fluid interface
     */
    public function joinUsuarioRelatedByIdauditor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useUsuarioRelatedByIdauditorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @return                 NotacreditoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpresa($empresa, $comparison = null)
    {
        if ($empresa instanceof Empresa) {
            return $this
                ->addUsingAlias(NotacreditoPeer::IDEMPRESA, $empresa->getIdempresa(), $comparison);
        } elseif ($empresa instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(NotacreditoPeer::IDEMPRESA, $empresa->toKeyValue('PrimaryKey', 'Idempresa'), $comparison);
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
     * @return NotacreditoQuery The current query, for fluid interface
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
     * @return                 NotacreditoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursal($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(NotacreditoPeer::IDSUCURSAL, $sucursal->getIdsucursal(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(NotacreditoPeer::IDSUCURSAL, $sucursal->toKeyValue('PrimaryKey', 'Idsucursal'), $comparison);
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
     * @return NotacreditoQuery The current query, for fluid interface
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
     * @return                 NotacreditoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuarioRelatedByIdusuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(NotacreditoPeer::IDUSUARIO, $usuario->getIdusuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(NotacreditoPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
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
     * @return NotacreditoQuery The current query, for fluid interface
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
     * Filter the query by a related Notacreditodetalle object
     *
     * @param   Notacreditodetalle|PropelObjectCollection $notacreditodetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 NotacreditoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByNotacreditodetalle($notacreditodetalle, $comparison = null)
    {
        if ($notacreditodetalle instanceof Notacreditodetalle) {
            return $this
                ->addUsingAlias(NotacreditoPeer::IDNOTACREDITO, $notacreditodetalle->getIdnotacredito(), $comparison);
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
     * @return NotacreditoQuery The current query, for fluid interface
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
     * Filter the query by a related Notacreditonota object
     *
     * @param   Notacreditonota|PropelObjectCollection $notacreditonota  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 NotacreditoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByNotacreditonota($notacreditonota, $comparison = null)
    {
        if ($notacreditonota instanceof Notacreditonota) {
            return $this
                ->addUsingAlias(NotacreditoPeer::IDNOTACREDITO, $notacreditonota->getIdnotacredito(), $comparison);
        } elseif ($notacreditonota instanceof PropelObjectCollection) {
            return $this
                ->useNotacreditonotaQuery()
                ->filterByPrimaryKeys($notacreditonota->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByNotacreditonota() only accepts arguments of type Notacreditonota or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Notacreditonota relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return NotacreditoQuery The current query, for fluid interface
     */
    public function joinNotacreditonota($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Notacreditonota');

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
            $this->addJoinObject($join, 'Notacreditonota');
        }

        return $this;
    }

    /**
     * Use the Notacreditonota relation Notacreditonota object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   NotacreditonotaQuery A secondary query class using the current class as primary query
     */
    public function useNotacreditonotaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinNotacreditonota($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Notacreditonota', 'NotacreditonotaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Notacredito $notacredito Object to remove from the list of results
     *
     * @return NotacreditoQuery The current query, for fluid interface
     */
    public function prune($notacredito = null)
    {
        if ($notacredito) {
            $this->addUsingAlias(NotacreditoPeer::IDNOTACREDITO, $notacredito->getIdnotacredito(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
