<?php


/**
 * Base class that represents a query for the 'devolucion' table.
 *
 *
 *
 * @method DevolucionQuery orderByIddevolucion($order = Criteria::ASC) Order by the iddevolucion column
 * @method DevolucionQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method DevolucionQuery orderByIdusuario($order = Criteria::ASC) Order by the idusuario column
 * @method DevolucionQuery orderByIdauditor($order = Criteria::ASC) Order by the idauditor column
 * @method DevolucionQuery orderByIdalmacen($order = Criteria::ASC) Order by the idalmacen column
 * @method DevolucionQuery orderByDevolucionFolio($order = Criteria::ASC) Order by the devolucion_folio column
 * @method DevolucionQuery orderByDevolucionRevisada($order = Criteria::ASC) Order by the devolucion_revisada column
 * @method DevolucionQuery orderByDevolucionFactura($order = Criteria::ASC) Order by the devolucion_factura column
 * @method DevolucionQuery orderByDevolucionFechacreacion($order = Criteria::ASC) Order by the devolucion_fechacreacion column
 * @method DevolucionQuery orderByDevolucionFechaentrega($order = Criteria::ASC) Order by the devolucion_fechaentrega column
 * @method DevolucionQuery orderByDevolucionIeps($order = Criteria::ASC) Order by the devolucion_ieps column
 * @method DevolucionQuery orderByDevolucionIva($order = Criteria::ASC) Order by the devolucion_iva column
 * @method DevolucionQuery orderByDevolucionTotal($order = Criteria::ASC) Order by the devolucion_total column
 *
 * @method DevolucionQuery groupByIddevolucion() Group by the iddevolucion column
 * @method DevolucionQuery groupByIdsucursal() Group by the idsucursal column
 * @method DevolucionQuery groupByIdusuario() Group by the idusuario column
 * @method DevolucionQuery groupByIdauditor() Group by the idauditor column
 * @method DevolucionQuery groupByIdalmacen() Group by the idalmacen column
 * @method DevolucionQuery groupByDevolucionFolio() Group by the devolucion_folio column
 * @method DevolucionQuery groupByDevolucionRevisada() Group by the devolucion_revisada column
 * @method DevolucionQuery groupByDevolucionFactura() Group by the devolucion_factura column
 * @method DevolucionQuery groupByDevolucionFechacreacion() Group by the devolucion_fechacreacion column
 * @method DevolucionQuery groupByDevolucionFechaentrega() Group by the devolucion_fechaentrega column
 * @method DevolucionQuery groupByDevolucionIeps() Group by the devolucion_ieps column
 * @method DevolucionQuery groupByDevolucionIva() Group by the devolucion_iva column
 * @method DevolucionQuery groupByDevolucionTotal() Group by the devolucion_total column
 *
 * @method DevolucionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method DevolucionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method DevolucionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method DevolucionQuery leftJoinAlmacen($relationAlias = null) Adds a LEFT JOIN clause to the query using the Almacen relation
 * @method DevolucionQuery rightJoinAlmacen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Almacen relation
 * @method DevolucionQuery innerJoinAlmacen($relationAlias = null) Adds a INNER JOIN clause to the query using the Almacen relation
 *
 * @method DevolucionQuery leftJoinUsuarioRelatedByIdauditor($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioRelatedByIdauditor relation
 * @method DevolucionQuery rightJoinUsuarioRelatedByIdauditor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioRelatedByIdauditor relation
 * @method DevolucionQuery innerJoinUsuarioRelatedByIdauditor($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioRelatedByIdauditor relation
 *
 * @method DevolucionQuery leftJoinSucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursal relation
 * @method DevolucionQuery rightJoinSucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursal relation
 * @method DevolucionQuery innerJoinSucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursal relation
 *
 * @method DevolucionQuery leftJoinUsuarioRelatedByIdusuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioRelatedByIdusuario relation
 * @method DevolucionQuery rightJoinUsuarioRelatedByIdusuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioRelatedByIdusuario relation
 * @method DevolucionQuery innerJoinUsuarioRelatedByIdusuario($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioRelatedByIdusuario relation
 *
 * @method DevolucionQuery leftJoinDevoluciondetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Devoluciondetalle relation
 * @method DevolucionQuery rightJoinDevoluciondetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Devoluciondetalle relation
 * @method DevolucionQuery innerJoinDevoluciondetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Devoluciondetalle relation
 *
 * @method Devolucion findOne(PropelPDO $con = null) Return the first Devolucion matching the query
 * @method Devolucion findOneOrCreate(PropelPDO $con = null) Return the first Devolucion matching the query, or a new Devolucion object populated from the query conditions when no match is found
 *
 * @method Devolucion findOneByIdsucursal(int $idsucursal) Return the first Devolucion filtered by the idsucursal column
 * @method Devolucion findOneByIdusuario(int $idusuario) Return the first Devolucion filtered by the idusuario column
 * @method Devolucion findOneByIdauditor(int $idauditor) Return the first Devolucion filtered by the idauditor column
 * @method Devolucion findOneByIdalmacen(int $idalmacen) Return the first Devolucion filtered by the idalmacen column
 * @method Devolucion findOneByDevolucionFolio(string $devolucion_folio) Return the first Devolucion filtered by the devolucion_folio column
 * @method Devolucion findOneByDevolucionRevisada(boolean $devolucion_revisada) Return the first Devolucion filtered by the devolucion_revisada column
 * @method Devolucion findOneByDevolucionFactura(string $devolucion_factura) Return the first Devolucion filtered by the devolucion_factura column
 * @method Devolucion findOneByDevolucionFechacreacion(string $devolucion_fechacreacion) Return the first Devolucion filtered by the devolucion_fechacreacion column
 * @method Devolucion findOneByDevolucionFechaentrega(string $devolucion_fechaentrega) Return the first Devolucion filtered by the devolucion_fechaentrega column
 * @method Devolucion findOneByDevolucionIeps(string $devolucion_ieps) Return the first Devolucion filtered by the devolucion_ieps column
 * @method Devolucion findOneByDevolucionIva(string $devolucion_iva) Return the first Devolucion filtered by the devolucion_iva column
 * @method Devolucion findOneByDevolucionTotal(string $devolucion_total) Return the first Devolucion filtered by the devolucion_total column
 *
 * @method array findByIddevolucion(int $iddevolucion) Return Devolucion objects filtered by the iddevolucion column
 * @method array findByIdsucursal(int $idsucursal) Return Devolucion objects filtered by the idsucursal column
 * @method array findByIdusuario(int $idusuario) Return Devolucion objects filtered by the idusuario column
 * @method array findByIdauditor(int $idauditor) Return Devolucion objects filtered by the idauditor column
 * @method array findByIdalmacen(int $idalmacen) Return Devolucion objects filtered by the idalmacen column
 * @method array findByDevolucionFolio(string $devolucion_folio) Return Devolucion objects filtered by the devolucion_folio column
 * @method array findByDevolucionRevisada(boolean $devolucion_revisada) Return Devolucion objects filtered by the devolucion_revisada column
 * @method array findByDevolucionFactura(string $devolucion_factura) Return Devolucion objects filtered by the devolucion_factura column
 * @method array findByDevolucionFechacreacion(string $devolucion_fechacreacion) Return Devolucion objects filtered by the devolucion_fechacreacion column
 * @method array findByDevolucionFechaentrega(string $devolucion_fechaentrega) Return Devolucion objects filtered by the devolucion_fechaentrega column
 * @method array findByDevolucionIeps(string $devolucion_ieps) Return Devolucion objects filtered by the devolucion_ieps column
 * @method array findByDevolucionIva(string $devolucion_iva) Return Devolucion objects filtered by the devolucion_iva column
 * @method array findByDevolucionTotal(string $devolucion_total) Return Devolucion objects filtered by the devolucion_total column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseDevolucionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseDevolucionQuery object.
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
            $modelName = 'Devolucion';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DevolucionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   DevolucionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return DevolucionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DevolucionQuery) {
            return $criteria;
        }
        $query = new DevolucionQuery(null, null, $modelAlias);

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
     * @return   Devolucion|Devolucion[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = DevolucionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(DevolucionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Devolucion A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIddevolucion($key, $con = null)
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
     * @return                 Devolucion A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `iddevolucion`, `idsucursal`, `idusuario`, `idauditor`, `idalmacen`, `devolucion_folio`, `devolucion_revisada`, `devolucion_factura`, `devolucion_fechacreacion`, `devolucion_fechaentrega`, `devolucion_ieps`, `devolucion_iva`, `devolucion_total` FROM `devolucion` WHERE `iddevolucion` = :p0';
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
            $obj = new Devolucion();
            $obj->hydrate($row);
            DevolucionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Devolucion|Devolucion[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Devolucion[]|mixed the list of results, formatted by the current formatter
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
     * @return DevolucionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(DevolucionPeer::IDDEVOLUCION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return DevolucionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(DevolucionPeer::IDDEVOLUCION, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the iddevolucion column
     *
     * Example usage:
     * <code>
     * $query->filterByIddevolucion(1234); // WHERE iddevolucion = 1234
     * $query->filterByIddevolucion(array(12, 34)); // WHERE iddevolucion IN (12, 34)
     * $query->filterByIddevolucion(array('min' => 12)); // WHERE iddevolucion >= 12
     * $query->filterByIddevolucion(array('max' => 12)); // WHERE iddevolucion <= 12
     * </code>
     *
     * @param     mixed $iddevolucion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DevolucionQuery The current query, for fluid interface
     */
    public function filterByIddevolucion($iddevolucion = null, $comparison = null)
    {
        if (is_array($iddevolucion)) {
            $useMinMax = false;
            if (isset($iddevolucion['min'])) {
                $this->addUsingAlias(DevolucionPeer::IDDEVOLUCION, $iddevolucion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iddevolucion['max'])) {
                $this->addUsingAlias(DevolucionPeer::IDDEVOLUCION, $iddevolucion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DevolucionPeer::IDDEVOLUCION, $iddevolucion, $comparison);
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
     * @return DevolucionQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(DevolucionPeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(DevolucionPeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DevolucionPeer::IDSUCURSAL, $idsucursal, $comparison);
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
     * @return DevolucionQuery The current query, for fluid interface
     */
    public function filterByIdusuario($idusuario = null, $comparison = null)
    {
        if (is_array($idusuario)) {
            $useMinMax = false;
            if (isset($idusuario['min'])) {
                $this->addUsingAlias(DevolucionPeer::IDUSUARIO, $idusuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idusuario['max'])) {
                $this->addUsingAlias(DevolucionPeer::IDUSUARIO, $idusuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DevolucionPeer::IDUSUARIO, $idusuario, $comparison);
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
     * @return DevolucionQuery The current query, for fluid interface
     */
    public function filterByIdauditor($idauditor = null, $comparison = null)
    {
        if (is_array($idauditor)) {
            $useMinMax = false;
            if (isset($idauditor['min'])) {
                $this->addUsingAlias(DevolucionPeer::IDAUDITOR, $idauditor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idauditor['max'])) {
                $this->addUsingAlias(DevolucionPeer::IDAUDITOR, $idauditor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DevolucionPeer::IDAUDITOR, $idauditor, $comparison);
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
     * @return DevolucionQuery The current query, for fluid interface
     */
    public function filterByIdalmacen($idalmacen = null, $comparison = null)
    {
        if (is_array($idalmacen)) {
            $useMinMax = false;
            if (isset($idalmacen['min'])) {
                $this->addUsingAlias(DevolucionPeer::IDALMACEN, $idalmacen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idalmacen['max'])) {
                $this->addUsingAlias(DevolucionPeer::IDALMACEN, $idalmacen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DevolucionPeer::IDALMACEN, $idalmacen, $comparison);
    }

    /**
     * Filter the query on the devolucion_folio column
     *
     * Example usage:
     * <code>
     * $query->filterByDevolucionFolio('fooValue');   // WHERE devolucion_folio = 'fooValue'
     * $query->filterByDevolucionFolio('%fooValue%'); // WHERE devolucion_folio LIKE '%fooValue%'
     * </code>
     *
     * @param     string $devolucionFolio The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DevolucionQuery The current query, for fluid interface
     */
    public function filterByDevolucionFolio($devolucionFolio = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($devolucionFolio)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $devolucionFolio)) {
                $devolucionFolio = str_replace('*', '%', $devolucionFolio);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DevolucionPeer::DEVOLUCION_FOLIO, $devolucionFolio, $comparison);
    }

    /**
     * Filter the query on the devolucion_revisada column
     *
     * Example usage:
     * <code>
     * $query->filterByDevolucionRevisada(true); // WHERE devolucion_revisada = true
     * $query->filterByDevolucionRevisada('yes'); // WHERE devolucion_revisada = true
     * </code>
     *
     * @param     boolean|string $devolucionRevisada The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DevolucionQuery The current query, for fluid interface
     */
    public function filterByDevolucionRevisada($devolucionRevisada = null, $comparison = null)
    {
        if (is_string($devolucionRevisada)) {
            $devolucionRevisada = in_array(strtolower($devolucionRevisada), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(DevolucionPeer::DEVOLUCION_REVISADA, $devolucionRevisada, $comparison);
    }

    /**
     * Filter the query on the devolucion_factura column
     *
     * Example usage:
     * <code>
     * $query->filterByDevolucionFactura('fooValue');   // WHERE devolucion_factura = 'fooValue'
     * $query->filterByDevolucionFactura('%fooValue%'); // WHERE devolucion_factura LIKE '%fooValue%'
     * </code>
     *
     * @param     string $devolucionFactura The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DevolucionQuery The current query, for fluid interface
     */
    public function filterByDevolucionFactura($devolucionFactura = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($devolucionFactura)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $devolucionFactura)) {
                $devolucionFactura = str_replace('*', '%', $devolucionFactura);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DevolucionPeer::DEVOLUCION_FACTURA, $devolucionFactura, $comparison);
    }

    /**
     * Filter the query on the devolucion_fechacreacion column
     *
     * Example usage:
     * <code>
     * $query->filterByDevolucionFechacreacion('2011-03-14'); // WHERE devolucion_fechacreacion = '2011-03-14'
     * $query->filterByDevolucionFechacreacion('now'); // WHERE devolucion_fechacreacion = '2011-03-14'
     * $query->filterByDevolucionFechacreacion(array('max' => 'yesterday')); // WHERE devolucion_fechacreacion < '2011-03-13'
     * </code>
     *
     * @param     mixed $devolucionFechacreacion The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DevolucionQuery The current query, for fluid interface
     */
    public function filterByDevolucionFechacreacion($devolucionFechacreacion = null, $comparison = null)
    {
        if (is_array($devolucionFechacreacion)) {
            $useMinMax = false;
            if (isset($devolucionFechacreacion['min'])) {
                $this->addUsingAlias(DevolucionPeer::DEVOLUCION_FECHACREACION, $devolucionFechacreacion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($devolucionFechacreacion['max'])) {
                $this->addUsingAlias(DevolucionPeer::DEVOLUCION_FECHACREACION, $devolucionFechacreacion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DevolucionPeer::DEVOLUCION_FECHACREACION, $devolucionFechacreacion, $comparison);
    }

    /**
     * Filter the query on the devolucion_fechaentrega column
     *
     * Example usage:
     * <code>
     * $query->filterByDevolucionFechaentrega('fooValue');   // WHERE devolucion_fechaentrega = 'fooValue'
     * $query->filterByDevolucionFechaentrega('%fooValue%'); // WHERE devolucion_fechaentrega LIKE '%fooValue%'
     * </code>
     *
     * @param     string $devolucionFechaentrega The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DevolucionQuery The current query, for fluid interface
     */
    public function filterByDevolucionFechaentrega($devolucionFechaentrega = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($devolucionFechaentrega)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $devolucionFechaentrega)) {
                $devolucionFechaentrega = str_replace('*', '%', $devolucionFechaentrega);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DevolucionPeer::DEVOLUCION_FECHAENTREGA, $devolucionFechaentrega, $comparison);
    }

    /**
     * Filter the query on the devolucion_ieps column
     *
     * Example usage:
     * <code>
     * $query->filterByDevolucionIeps(1234); // WHERE devolucion_ieps = 1234
     * $query->filterByDevolucionIeps(array(12, 34)); // WHERE devolucion_ieps IN (12, 34)
     * $query->filterByDevolucionIeps(array('min' => 12)); // WHERE devolucion_ieps >= 12
     * $query->filterByDevolucionIeps(array('max' => 12)); // WHERE devolucion_ieps <= 12
     * </code>
     *
     * @param     mixed $devolucionIeps The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DevolucionQuery The current query, for fluid interface
     */
    public function filterByDevolucionIeps($devolucionIeps = null, $comparison = null)
    {
        if (is_array($devolucionIeps)) {
            $useMinMax = false;
            if (isset($devolucionIeps['min'])) {
                $this->addUsingAlias(DevolucionPeer::DEVOLUCION_IEPS, $devolucionIeps['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($devolucionIeps['max'])) {
                $this->addUsingAlias(DevolucionPeer::DEVOLUCION_IEPS, $devolucionIeps['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DevolucionPeer::DEVOLUCION_IEPS, $devolucionIeps, $comparison);
    }

    /**
     * Filter the query on the devolucion_iva column
     *
     * Example usage:
     * <code>
     * $query->filterByDevolucionIva(1234); // WHERE devolucion_iva = 1234
     * $query->filterByDevolucionIva(array(12, 34)); // WHERE devolucion_iva IN (12, 34)
     * $query->filterByDevolucionIva(array('min' => 12)); // WHERE devolucion_iva >= 12
     * $query->filterByDevolucionIva(array('max' => 12)); // WHERE devolucion_iva <= 12
     * </code>
     *
     * @param     mixed $devolucionIva The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DevolucionQuery The current query, for fluid interface
     */
    public function filterByDevolucionIva($devolucionIva = null, $comparison = null)
    {
        if (is_array($devolucionIva)) {
            $useMinMax = false;
            if (isset($devolucionIva['min'])) {
                $this->addUsingAlias(DevolucionPeer::DEVOLUCION_IVA, $devolucionIva['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($devolucionIva['max'])) {
                $this->addUsingAlias(DevolucionPeer::DEVOLUCION_IVA, $devolucionIva['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DevolucionPeer::DEVOLUCION_IVA, $devolucionIva, $comparison);
    }

    /**
     * Filter the query on the devolucion_total column
     *
     * Example usage:
     * <code>
     * $query->filterByDevolucionTotal(1234); // WHERE devolucion_total = 1234
     * $query->filterByDevolucionTotal(array(12, 34)); // WHERE devolucion_total IN (12, 34)
     * $query->filterByDevolucionTotal(array('min' => 12)); // WHERE devolucion_total >= 12
     * $query->filterByDevolucionTotal(array('max' => 12)); // WHERE devolucion_total <= 12
     * </code>
     *
     * @param     mixed $devolucionTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DevolucionQuery The current query, for fluid interface
     */
    public function filterByDevolucionTotal($devolucionTotal = null, $comparison = null)
    {
        if (is_array($devolucionTotal)) {
            $useMinMax = false;
            if (isset($devolucionTotal['min'])) {
                $this->addUsingAlias(DevolucionPeer::DEVOLUCION_TOTAL, $devolucionTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($devolucionTotal['max'])) {
                $this->addUsingAlias(DevolucionPeer::DEVOLUCION_TOTAL, $devolucionTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DevolucionPeer::DEVOLUCION_TOTAL, $devolucionTotal, $comparison);
    }

    /**
     * Filter the query by a related Almacen object
     *
     * @param   Almacen|PropelObjectCollection $almacen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 DevolucionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAlmacen($almacen, $comparison = null)
    {
        if ($almacen instanceof Almacen) {
            return $this
                ->addUsingAlias(DevolucionPeer::IDALMACEN, $almacen->getIdalmacen(), $comparison);
        } elseif ($almacen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DevolucionPeer::IDALMACEN, $almacen->toKeyValue('PrimaryKey', 'Idalmacen'), $comparison);
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
     * @return DevolucionQuery The current query, for fluid interface
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
     * @return                 DevolucionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuarioRelatedByIdauditor($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(DevolucionPeer::IDAUDITOR, $usuario->getIdusuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DevolucionPeer::IDAUDITOR, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
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
     * @return DevolucionQuery The current query, for fluid interface
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
     * Filter the query by a related Sucursal object
     *
     * @param   Sucursal|PropelObjectCollection $sucursal The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 DevolucionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursal($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(DevolucionPeer::IDSUCURSAL, $sucursal->getIdsucursal(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DevolucionPeer::IDSUCURSAL, $sucursal->toKeyValue('PrimaryKey', 'Idsucursal'), $comparison);
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
     * @return DevolucionQuery The current query, for fluid interface
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
     * @return                 DevolucionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuarioRelatedByIdusuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(DevolucionPeer::IDUSUARIO, $usuario->getIdusuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DevolucionPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
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
     * @return DevolucionQuery The current query, for fluid interface
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
     * Filter the query by a related Devoluciondetalle object
     *
     * @param   Devoluciondetalle|PropelObjectCollection $devoluciondetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 DevolucionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDevoluciondetalle($devoluciondetalle, $comparison = null)
    {
        if ($devoluciondetalle instanceof Devoluciondetalle) {
            return $this
                ->addUsingAlias(DevolucionPeer::IDDEVOLUCION, $devoluciondetalle->getIddevolucion(), $comparison);
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
     * @return DevolucionQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   Devolucion $devolucion Object to remove from the list of results
     *
     * @return DevolucionQuery The current query, for fluid interface
     */
    public function prune($devolucion = null)
    {
        if ($devolucion) {
            $this->addUsingAlias(DevolucionPeer::IDDEVOLUCION, $devolucion->getIddevolucion(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
