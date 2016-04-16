<?php


/**
 * Base class that represents a query for the 'requisicion' table.
 *
 *
 *
 * @method RequisicionQuery orderByIdrequisicion($order = Criteria::ASC) Order by the idrequisicion column
 * @method RequisicionQuery orderByIdempresa($order = Criteria::ASC) Order by the idempresa column
 * @method RequisicionQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method RequisicionQuery orderByIdusuario($order = Criteria::ASC) Order by the idusuario column
 * @method RequisicionQuery orderByIdauditor($order = Criteria::ASC) Order by the idauditor column
 * @method RequisicionQuery orderByIdalmacenorigen($order = Criteria::ASC) Order by the idalmacenorigen column
 * @method RequisicionQuery orderByIdalmacendestino($order = Criteria::ASC) Order by the idalmacendestino column
 * @method RequisicionQuery orderByIdconceptosalida($order = Criteria::ASC) Order by the idconceptosalida column
 * @method RequisicionQuery orderByRequisicionFecha($order = Criteria::ASC) Order by the requisicion_fecha column
 * @method RequisicionQuery orderByRequisicionRevisada($order = Criteria::ASC) Order by the requisicion_revisada column
 *
 * @method RequisicionQuery groupByIdrequisicion() Group by the idrequisicion column
 * @method RequisicionQuery groupByIdempresa() Group by the idempresa column
 * @method RequisicionQuery groupByIdsucursal() Group by the idsucursal column
 * @method RequisicionQuery groupByIdusuario() Group by the idusuario column
 * @method RequisicionQuery groupByIdauditor() Group by the idauditor column
 * @method RequisicionQuery groupByIdalmacenorigen() Group by the idalmacenorigen column
 * @method RequisicionQuery groupByIdalmacendestino() Group by the idalmacendestino column
 * @method RequisicionQuery groupByIdconceptosalida() Group by the idconceptosalida column
 * @method RequisicionQuery groupByRequisicionFecha() Group by the requisicion_fecha column
 * @method RequisicionQuery groupByRequisicionRevisada() Group by the requisicion_revisada column
 *
 * @method RequisicionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RequisicionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RequisicionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RequisicionQuery leftJoinAlmacenRelatedByIdalmacendestino($relationAlias = null) Adds a LEFT JOIN clause to the query using the AlmacenRelatedByIdalmacendestino relation
 * @method RequisicionQuery rightJoinAlmacenRelatedByIdalmacendestino($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AlmacenRelatedByIdalmacendestino relation
 * @method RequisicionQuery innerJoinAlmacenRelatedByIdalmacendestino($relationAlias = null) Adds a INNER JOIN clause to the query using the AlmacenRelatedByIdalmacendestino relation
 *
 * @method RequisicionQuery leftJoinAlmacenRelatedByIdalmacenorigen($relationAlias = null) Adds a LEFT JOIN clause to the query using the AlmacenRelatedByIdalmacenorigen relation
 * @method RequisicionQuery rightJoinAlmacenRelatedByIdalmacenorigen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AlmacenRelatedByIdalmacenorigen relation
 * @method RequisicionQuery innerJoinAlmacenRelatedByIdalmacenorigen($relationAlias = null) Adds a INNER JOIN clause to the query using the AlmacenRelatedByIdalmacenorigen relation
 *
 * @method RequisicionQuery leftJoinUsuarioRelatedByIdauditor($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioRelatedByIdauditor relation
 * @method RequisicionQuery rightJoinUsuarioRelatedByIdauditor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioRelatedByIdauditor relation
 * @method RequisicionQuery innerJoinUsuarioRelatedByIdauditor($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioRelatedByIdauditor relation
 *
 * @method RequisicionQuery leftJoinConceptosalida($relationAlias = null) Adds a LEFT JOIN clause to the query using the Conceptosalida relation
 * @method RequisicionQuery rightJoinConceptosalida($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Conceptosalida relation
 * @method RequisicionQuery innerJoinConceptosalida($relationAlias = null) Adds a INNER JOIN clause to the query using the Conceptosalida relation
 *
 * @method RequisicionQuery leftJoinEmpresa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empresa relation
 * @method RequisicionQuery rightJoinEmpresa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empresa relation
 * @method RequisicionQuery innerJoinEmpresa($relationAlias = null) Adds a INNER JOIN clause to the query using the Empresa relation
 *
 * @method RequisicionQuery leftJoinSucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursal relation
 * @method RequisicionQuery rightJoinSucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursal relation
 * @method RequisicionQuery innerJoinSucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursal relation
 *
 * @method RequisicionQuery leftJoinUsuarioRelatedByIdusuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioRelatedByIdusuario relation
 * @method RequisicionQuery rightJoinUsuarioRelatedByIdusuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioRelatedByIdusuario relation
 * @method RequisicionQuery innerJoinUsuarioRelatedByIdusuario($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioRelatedByIdusuario relation
 *
 * @method RequisicionQuery leftJoinRequisiciondetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Requisiciondetalle relation
 * @method RequisicionQuery rightJoinRequisiciondetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Requisiciondetalle relation
 * @method RequisicionQuery innerJoinRequisiciondetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Requisiciondetalle relation
 *
 * @method Requisicion findOne(PropelPDO $con = null) Return the first Requisicion matching the query
 * @method Requisicion findOneOrCreate(PropelPDO $con = null) Return the first Requisicion matching the query, or a new Requisicion object populated from the query conditions when no match is found
 *
 * @method Requisicion findOneByIdempresa(int $idempresa) Return the first Requisicion filtered by the idempresa column
 * @method Requisicion findOneByIdsucursal(int $idsucursal) Return the first Requisicion filtered by the idsucursal column
 * @method Requisicion findOneByIdusuario(int $idusuario) Return the first Requisicion filtered by the idusuario column
 * @method Requisicion findOneByIdauditor(int $idauditor) Return the first Requisicion filtered by the idauditor column
 * @method Requisicion findOneByIdalmacenorigen(int $idalmacenorigen) Return the first Requisicion filtered by the idalmacenorigen column
 * @method Requisicion findOneByIdalmacendestino(int $idalmacendestino) Return the first Requisicion filtered by the idalmacendestino column
 * @method Requisicion findOneByIdconceptosalida(int $idconceptosalida) Return the first Requisicion filtered by the idconceptosalida column
 * @method Requisicion findOneByRequisicionFecha(string $requisicion_fecha) Return the first Requisicion filtered by the requisicion_fecha column
 * @method Requisicion findOneByRequisicionRevisada(boolean $requisicion_revisada) Return the first Requisicion filtered by the requisicion_revisada column
 *
 * @method array findByIdrequisicion(int $idrequisicion) Return Requisicion objects filtered by the idrequisicion column
 * @method array findByIdempresa(int $idempresa) Return Requisicion objects filtered by the idempresa column
 * @method array findByIdsucursal(int $idsucursal) Return Requisicion objects filtered by the idsucursal column
 * @method array findByIdusuario(int $idusuario) Return Requisicion objects filtered by the idusuario column
 * @method array findByIdauditor(int $idauditor) Return Requisicion objects filtered by the idauditor column
 * @method array findByIdalmacenorigen(int $idalmacenorigen) Return Requisicion objects filtered by the idalmacenorigen column
 * @method array findByIdalmacendestino(int $idalmacendestino) Return Requisicion objects filtered by the idalmacendestino column
 * @method array findByIdconceptosalida(int $idconceptosalida) Return Requisicion objects filtered by the idconceptosalida column
 * @method array findByRequisicionFecha(string $requisicion_fecha) Return Requisicion objects filtered by the requisicion_fecha column
 * @method array findByRequisicionRevisada(boolean $requisicion_revisada) Return Requisicion objects filtered by the requisicion_revisada column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseRequisicionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRequisicionQuery object.
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
            $modelName = 'Requisicion';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RequisicionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RequisicionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RequisicionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RequisicionQuery) {
            return $criteria;
        }
        $query = new RequisicionQuery(null, null, $modelAlias);

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
     * @return   Requisicion|Requisicion[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RequisicionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RequisicionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Requisicion A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdrequisicion($key, $con = null)
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
     * @return                 Requisicion A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idrequisicion`, `idempresa`, `idsucursal`, `idusuario`, `idauditor`, `idalmacenorigen`, `idalmacendestino`, `idconceptosalida`, `requisicion_fecha`, `requisicion_revisada` FROM `requisicion` WHERE `idrequisicion` = :p0';
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
            $obj = new Requisicion();
            $obj->hydrate($row);
            RequisicionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Requisicion|Requisicion[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Requisicion[]|mixed the list of results, formatted by the current formatter
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
     * @return RequisicionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RequisicionPeer::IDREQUISICION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RequisicionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RequisicionPeer::IDREQUISICION, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idrequisicion column
     *
     * Example usage:
     * <code>
     * $query->filterByIdrequisicion(1234); // WHERE idrequisicion = 1234
     * $query->filterByIdrequisicion(array(12, 34)); // WHERE idrequisicion IN (12, 34)
     * $query->filterByIdrequisicion(array('min' => 12)); // WHERE idrequisicion >= 12
     * $query->filterByIdrequisicion(array('max' => 12)); // WHERE idrequisicion <= 12
     * </code>
     *
     * @param     mixed $idrequisicion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RequisicionQuery The current query, for fluid interface
     */
    public function filterByIdrequisicion($idrequisicion = null, $comparison = null)
    {
        if (is_array($idrequisicion)) {
            $useMinMax = false;
            if (isset($idrequisicion['min'])) {
                $this->addUsingAlias(RequisicionPeer::IDREQUISICION, $idrequisicion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idrequisicion['max'])) {
                $this->addUsingAlias(RequisicionPeer::IDREQUISICION, $idrequisicion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RequisicionPeer::IDREQUISICION, $idrequisicion, $comparison);
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
     * @return RequisicionQuery The current query, for fluid interface
     */
    public function filterByIdempresa($idempresa = null, $comparison = null)
    {
        if (is_array($idempresa)) {
            $useMinMax = false;
            if (isset($idempresa['min'])) {
                $this->addUsingAlias(RequisicionPeer::IDEMPRESA, $idempresa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempresa['max'])) {
                $this->addUsingAlias(RequisicionPeer::IDEMPRESA, $idempresa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RequisicionPeer::IDEMPRESA, $idempresa, $comparison);
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
     * @return RequisicionQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(RequisicionPeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(RequisicionPeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RequisicionPeer::IDSUCURSAL, $idsucursal, $comparison);
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
     * @return RequisicionQuery The current query, for fluid interface
     */
    public function filterByIdusuario($idusuario = null, $comparison = null)
    {
        if (is_array($idusuario)) {
            $useMinMax = false;
            if (isset($idusuario['min'])) {
                $this->addUsingAlias(RequisicionPeer::IDUSUARIO, $idusuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idusuario['max'])) {
                $this->addUsingAlias(RequisicionPeer::IDUSUARIO, $idusuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RequisicionPeer::IDUSUARIO, $idusuario, $comparison);
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
     * @return RequisicionQuery The current query, for fluid interface
     */
    public function filterByIdauditor($idauditor = null, $comparison = null)
    {
        if (is_array($idauditor)) {
            $useMinMax = false;
            if (isset($idauditor['min'])) {
                $this->addUsingAlias(RequisicionPeer::IDAUDITOR, $idauditor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idauditor['max'])) {
                $this->addUsingAlias(RequisicionPeer::IDAUDITOR, $idauditor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RequisicionPeer::IDAUDITOR, $idauditor, $comparison);
    }

    /**
     * Filter the query on the idalmacenorigen column
     *
     * Example usage:
     * <code>
     * $query->filterByIdalmacenorigen(1234); // WHERE idalmacenorigen = 1234
     * $query->filterByIdalmacenorigen(array(12, 34)); // WHERE idalmacenorigen IN (12, 34)
     * $query->filterByIdalmacenorigen(array('min' => 12)); // WHERE idalmacenorigen >= 12
     * $query->filterByIdalmacenorigen(array('max' => 12)); // WHERE idalmacenorigen <= 12
     * </code>
     *
     * @see       filterByAlmacenRelatedByIdalmacenorigen()
     *
     * @param     mixed $idalmacenorigen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RequisicionQuery The current query, for fluid interface
     */
    public function filterByIdalmacenorigen($idalmacenorigen = null, $comparison = null)
    {
        if (is_array($idalmacenorigen)) {
            $useMinMax = false;
            if (isset($idalmacenorigen['min'])) {
                $this->addUsingAlias(RequisicionPeer::IDALMACENORIGEN, $idalmacenorigen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idalmacenorigen['max'])) {
                $this->addUsingAlias(RequisicionPeer::IDALMACENORIGEN, $idalmacenorigen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RequisicionPeer::IDALMACENORIGEN, $idalmacenorigen, $comparison);
    }

    /**
     * Filter the query on the idalmacendestino column
     *
     * Example usage:
     * <code>
     * $query->filterByIdalmacendestino(1234); // WHERE idalmacendestino = 1234
     * $query->filterByIdalmacendestino(array(12, 34)); // WHERE idalmacendestino IN (12, 34)
     * $query->filterByIdalmacendestino(array('min' => 12)); // WHERE idalmacendestino >= 12
     * $query->filterByIdalmacendestino(array('max' => 12)); // WHERE idalmacendestino <= 12
     * </code>
     *
     * @see       filterByAlmacenRelatedByIdalmacendestino()
     *
     * @param     mixed $idalmacendestino The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RequisicionQuery The current query, for fluid interface
     */
    public function filterByIdalmacendestino($idalmacendestino = null, $comparison = null)
    {
        if (is_array($idalmacendestino)) {
            $useMinMax = false;
            if (isset($idalmacendestino['min'])) {
                $this->addUsingAlias(RequisicionPeer::IDALMACENDESTINO, $idalmacendestino['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idalmacendestino['max'])) {
                $this->addUsingAlias(RequisicionPeer::IDALMACENDESTINO, $idalmacendestino['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RequisicionPeer::IDALMACENDESTINO, $idalmacendestino, $comparison);
    }

    /**
     * Filter the query on the idconceptosalida column
     *
     * Example usage:
     * <code>
     * $query->filterByIdconceptosalida(1234); // WHERE idconceptosalida = 1234
     * $query->filterByIdconceptosalida(array(12, 34)); // WHERE idconceptosalida IN (12, 34)
     * $query->filterByIdconceptosalida(array('min' => 12)); // WHERE idconceptosalida >= 12
     * $query->filterByIdconceptosalida(array('max' => 12)); // WHERE idconceptosalida <= 12
     * </code>
     *
     * @see       filterByConceptosalida()
     *
     * @param     mixed $idconceptosalida The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RequisicionQuery The current query, for fluid interface
     */
    public function filterByIdconceptosalida($idconceptosalida = null, $comparison = null)
    {
        if (is_array($idconceptosalida)) {
            $useMinMax = false;
            if (isset($idconceptosalida['min'])) {
                $this->addUsingAlias(RequisicionPeer::IDCONCEPTOSALIDA, $idconceptosalida['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idconceptosalida['max'])) {
                $this->addUsingAlias(RequisicionPeer::IDCONCEPTOSALIDA, $idconceptosalida['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RequisicionPeer::IDCONCEPTOSALIDA, $idconceptosalida, $comparison);
    }

    /**
     * Filter the query on the requisicion_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByRequisicionFecha('2011-03-14'); // WHERE requisicion_fecha = '2011-03-14'
     * $query->filterByRequisicionFecha('now'); // WHERE requisicion_fecha = '2011-03-14'
     * $query->filterByRequisicionFecha(array('max' => 'yesterday')); // WHERE requisicion_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $requisicionFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RequisicionQuery The current query, for fluid interface
     */
    public function filterByRequisicionFecha($requisicionFecha = null, $comparison = null)
    {
        if (is_array($requisicionFecha)) {
            $useMinMax = false;
            if (isset($requisicionFecha['min'])) {
                $this->addUsingAlias(RequisicionPeer::REQUISICION_FECHA, $requisicionFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($requisicionFecha['max'])) {
                $this->addUsingAlias(RequisicionPeer::REQUISICION_FECHA, $requisicionFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RequisicionPeer::REQUISICION_FECHA, $requisicionFecha, $comparison);
    }

    /**
     * Filter the query on the requisicion_revisada column
     *
     * Example usage:
     * <code>
     * $query->filterByRequisicionRevisada(true); // WHERE requisicion_revisada = true
     * $query->filterByRequisicionRevisada('yes'); // WHERE requisicion_revisada = true
     * </code>
     *
     * @param     boolean|string $requisicionRevisada The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RequisicionQuery The current query, for fluid interface
     */
    public function filterByRequisicionRevisada($requisicionRevisada = null, $comparison = null)
    {
        if (is_string($requisicionRevisada)) {
            $requisicionRevisada = in_array(strtolower($requisicionRevisada), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(RequisicionPeer::REQUISICION_REVISADA, $requisicionRevisada, $comparison);
    }

    /**
     * Filter the query by a related Almacen object
     *
     * @param   Almacen|PropelObjectCollection $almacen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RequisicionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAlmacenRelatedByIdalmacendestino($almacen, $comparison = null)
    {
        if ($almacen instanceof Almacen) {
            return $this
                ->addUsingAlias(RequisicionPeer::IDALMACENDESTINO, $almacen->getIdalmacen(), $comparison);
        } elseif ($almacen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RequisicionPeer::IDALMACENDESTINO, $almacen->toKeyValue('PrimaryKey', 'Idalmacen'), $comparison);
        } else {
            throw new PropelException('filterByAlmacenRelatedByIdalmacendestino() only accepts arguments of type Almacen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the AlmacenRelatedByIdalmacendestino relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RequisicionQuery The current query, for fluid interface
     */
    public function joinAlmacenRelatedByIdalmacendestino($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('AlmacenRelatedByIdalmacendestino');

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
            $this->addJoinObject($join, 'AlmacenRelatedByIdalmacendestino');
        }

        return $this;
    }

    /**
     * Use the AlmacenRelatedByIdalmacendestino relation Almacen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AlmacenQuery A secondary query class using the current class as primary query
     */
    public function useAlmacenRelatedByIdalmacendestinoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAlmacenRelatedByIdalmacendestino($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'AlmacenRelatedByIdalmacendestino', 'AlmacenQuery');
    }

    /**
     * Filter the query by a related Almacen object
     *
     * @param   Almacen|PropelObjectCollection $almacen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RequisicionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAlmacenRelatedByIdalmacenorigen($almacen, $comparison = null)
    {
        if ($almacen instanceof Almacen) {
            return $this
                ->addUsingAlias(RequisicionPeer::IDALMACENORIGEN, $almacen->getIdalmacen(), $comparison);
        } elseif ($almacen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RequisicionPeer::IDALMACENORIGEN, $almacen->toKeyValue('PrimaryKey', 'Idalmacen'), $comparison);
        } else {
            throw new PropelException('filterByAlmacenRelatedByIdalmacenorigen() only accepts arguments of type Almacen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the AlmacenRelatedByIdalmacenorigen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RequisicionQuery The current query, for fluid interface
     */
    public function joinAlmacenRelatedByIdalmacenorigen($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('AlmacenRelatedByIdalmacenorigen');

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
            $this->addJoinObject($join, 'AlmacenRelatedByIdalmacenorigen');
        }

        return $this;
    }

    /**
     * Use the AlmacenRelatedByIdalmacenorigen relation Almacen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AlmacenQuery A secondary query class using the current class as primary query
     */
    public function useAlmacenRelatedByIdalmacenorigenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAlmacenRelatedByIdalmacenorigen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'AlmacenRelatedByIdalmacenorigen', 'AlmacenQuery');
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RequisicionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuarioRelatedByIdauditor($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(RequisicionPeer::IDAUDITOR, $usuario->getIdusuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RequisicionPeer::IDAUDITOR, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
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
     * @return RequisicionQuery The current query, for fluid interface
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
     * Filter the query by a related Conceptosalida object
     *
     * @param   Conceptosalida|PropelObjectCollection $conceptosalida The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RequisicionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByConceptosalida($conceptosalida, $comparison = null)
    {
        if ($conceptosalida instanceof Conceptosalida) {
            return $this
                ->addUsingAlias(RequisicionPeer::IDCONCEPTOSALIDA, $conceptosalida->getIdconceptosalida(), $comparison);
        } elseif ($conceptosalida instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RequisicionPeer::IDCONCEPTOSALIDA, $conceptosalida->toKeyValue('PrimaryKey', 'Idconceptosalida'), $comparison);
        } else {
            throw new PropelException('filterByConceptosalida() only accepts arguments of type Conceptosalida or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Conceptosalida relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RequisicionQuery The current query, for fluid interface
     */
    public function joinConceptosalida($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Conceptosalida');

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
            $this->addJoinObject($join, 'Conceptosalida');
        }

        return $this;
    }

    /**
     * Use the Conceptosalida relation Conceptosalida object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ConceptosalidaQuery A secondary query class using the current class as primary query
     */
    public function useConceptosalidaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinConceptosalida($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Conceptosalida', 'ConceptosalidaQuery');
    }

    /**
     * Filter the query by a related Empresa object
     *
     * @param   Empresa|PropelObjectCollection $empresa The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RequisicionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpresa($empresa, $comparison = null)
    {
        if ($empresa instanceof Empresa) {
            return $this
                ->addUsingAlias(RequisicionPeer::IDEMPRESA, $empresa->getIdempresa(), $comparison);
        } elseif ($empresa instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RequisicionPeer::IDEMPRESA, $empresa->toKeyValue('PrimaryKey', 'Idempresa'), $comparison);
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
     * @return RequisicionQuery The current query, for fluid interface
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
     * @return                 RequisicionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursal($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(RequisicionPeer::IDSUCURSAL, $sucursal->getIdsucursal(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RequisicionPeer::IDSUCURSAL, $sucursal->toKeyValue('PrimaryKey', 'Idsucursal'), $comparison);
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
     * @return RequisicionQuery The current query, for fluid interface
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
     * @return                 RequisicionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuarioRelatedByIdusuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(RequisicionPeer::IDUSUARIO, $usuario->getIdusuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RequisicionPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
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
     * @return RequisicionQuery The current query, for fluid interface
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
     * Filter the query by a related Requisiciondetalle object
     *
     * @param   Requisiciondetalle|PropelObjectCollection $requisiciondetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RequisicionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRequisiciondetalle($requisiciondetalle, $comparison = null)
    {
        if ($requisiciondetalle instanceof Requisiciondetalle) {
            return $this
                ->addUsingAlias(RequisicionPeer::IDREQUISICION, $requisiciondetalle->getIdrequisicion(), $comparison);
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
     * @return RequisicionQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   Requisicion $requisicion Object to remove from the list of results
     *
     * @return RequisicionQuery The current query, for fluid interface
     */
    public function prune($requisicion = null)
    {
        if ($requisicion) {
            $this->addUsingAlias(RequisicionPeer::IDREQUISICION, $requisicion->getIdrequisicion(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
