<?php


/**
 * Base class that represents a query for the 'requisicion' table.
 *
 *
 *
 * @method RequisicionQuery orderByIdrequisicion($order = Criteria::ASC) Order by the idrequisicion column
 * @method RequisicionQuery orderByIdempresa($order = Criteria::ASC) Order by the idempresa column
 * @method RequisicionQuery orderByIdsucursalorigen($order = Criteria::ASC) Order by the idsucursalorigen column
 * @method RequisicionQuery orderByIdalmacenorigen($order = Criteria::ASC) Order by the idalmacenorigen column
 * @method RequisicionQuery orderByIdsucursaldestino($order = Criteria::ASC) Order by the idsucursaldestino column
 * @method RequisicionQuery orderByIdalmacendestino($order = Criteria::ASC) Order by the idalmacendestino column
 * @method RequisicionQuery orderByIdusuario($order = Criteria::ASC) Order by the idusuario column
 * @method RequisicionQuery orderByIdauditor($order = Criteria::ASC) Order by the idauditor column
 * @method RequisicionQuery orderByIdconceptosalida($order = Criteria::ASC) Order by the idconceptosalida column
 * @method RequisicionQuery orderByRequisicionFecha($order = Criteria::ASC) Order by the requisicion_fecha column
 * @method RequisicionQuery orderByRequisicionFechacreacion($order = Criteria::ASC) Order by the requisicion_fechacreacion column
 * @method RequisicionQuery orderByRequisicionRevisada($order = Criteria::ASC) Order by the requisicion_revisada column
 * @method RequisicionQuery orderByRequisicionFolio($order = Criteria::ASC) Order by the requisicion_folio column
 * @method RequisicionQuery orderByRequisicionTotal($order = Criteria::ASC) Order by the requisicion_total column
 * @method RequisicionQuery orderByNotaauditorempresa($order = Criteria::ASC) Order by the notaauditorempresa column
 * @method RequisicionQuery orderByNotaalmacenistaempresa($order = Criteria::ASC) Order by the notaalmacenistaempresa column
 * @method RequisicionQuery orderByNotaauditoraersa($order = Criteria::ASC) Order by the notaauditoraersa column
 *
 * @method RequisicionQuery groupByIdrequisicion() Group by the idrequisicion column
 * @method RequisicionQuery groupByIdempresa() Group by the idempresa column
 * @method RequisicionQuery groupByIdsucursalorigen() Group by the idsucursalorigen column
 * @method RequisicionQuery groupByIdalmacenorigen() Group by the idalmacenorigen column
 * @method RequisicionQuery groupByIdsucursaldestino() Group by the idsucursaldestino column
 * @method RequisicionQuery groupByIdalmacendestino() Group by the idalmacendestino column
 * @method RequisicionQuery groupByIdusuario() Group by the idusuario column
 * @method RequisicionQuery groupByIdauditor() Group by the idauditor column
 * @method RequisicionQuery groupByIdconceptosalida() Group by the idconceptosalida column
 * @method RequisicionQuery groupByRequisicionFecha() Group by the requisicion_fecha column
 * @method RequisicionQuery groupByRequisicionFechacreacion() Group by the requisicion_fechacreacion column
 * @method RequisicionQuery groupByRequisicionRevisada() Group by the requisicion_revisada column
 * @method RequisicionQuery groupByRequisicionFolio() Group by the requisicion_folio column
 * @method RequisicionQuery groupByRequisicionTotal() Group by the requisicion_total column
 * @method RequisicionQuery groupByNotaauditorempresa() Group by the notaauditorempresa column
 * @method RequisicionQuery groupByNotaalmacenistaempresa() Group by the notaalmacenistaempresa column
 * @method RequisicionQuery groupByNotaauditoraersa() Group by the notaauditoraersa column
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
 * @method RequisicionQuery leftJoinSucursalRelatedByIdsucursaldestino($relationAlias = null) Adds a LEFT JOIN clause to the query using the SucursalRelatedByIdsucursaldestino relation
 * @method RequisicionQuery rightJoinSucursalRelatedByIdsucursaldestino($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SucursalRelatedByIdsucursaldestino relation
 * @method RequisicionQuery innerJoinSucursalRelatedByIdsucursaldestino($relationAlias = null) Adds a INNER JOIN clause to the query using the SucursalRelatedByIdsucursaldestino relation
 *
 * @method RequisicionQuery leftJoinSucursalRelatedByIdsucursalorigen($relationAlias = null) Adds a LEFT JOIN clause to the query using the SucursalRelatedByIdsucursalorigen relation
 * @method RequisicionQuery rightJoinSucursalRelatedByIdsucursalorigen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SucursalRelatedByIdsucursalorigen relation
 * @method RequisicionQuery innerJoinSucursalRelatedByIdsucursalorigen($relationAlias = null) Adds a INNER JOIN clause to the query using the SucursalRelatedByIdsucursalorigen relation
 *
 * @method RequisicionQuery leftJoinUsuarioRelatedByIdusuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioRelatedByIdusuario relation
 * @method RequisicionQuery rightJoinUsuarioRelatedByIdusuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioRelatedByIdusuario relation
 * @method RequisicionQuery innerJoinUsuarioRelatedByIdusuario($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioRelatedByIdusuario relation
 *
 * @method RequisicionQuery leftJoinRequisiciondetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Requisiciondetalle relation
 * @method RequisicionQuery rightJoinRequisiciondetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Requisiciondetalle relation
 * @method RequisicionQuery innerJoinRequisiciondetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Requisiciondetalle relation
 *
 * @method RequisicionQuery leftJoinRequisicionnota($relationAlias = null) Adds a LEFT JOIN clause to the query using the Requisicionnota relation
 * @method RequisicionQuery rightJoinRequisicionnota($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Requisicionnota relation
 * @method RequisicionQuery innerJoinRequisicionnota($relationAlias = null) Adds a INNER JOIN clause to the query using the Requisicionnota relation
 *
 * @method Requisicion findOne(PropelPDO $con = null) Return the first Requisicion matching the query
 * @method Requisicion findOneOrCreate(PropelPDO $con = null) Return the first Requisicion matching the query, or a new Requisicion object populated from the query conditions when no match is found
 *
 * @method Requisicion findOneByIdempresa(int $idempresa) Return the first Requisicion filtered by the idempresa column
 * @method Requisicion findOneByIdsucursalorigen(int $idsucursalorigen) Return the first Requisicion filtered by the idsucursalorigen column
 * @method Requisicion findOneByIdalmacenorigen(int $idalmacenorigen) Return the first Requisicion filtered by the idalmacenorigen column
 * @method Requisicion findOneByIdsucursaldestino(int $idsucursaldestino) Return the first Requisicion filtered by the idsucursaldestino column
 * @method Requisicion findOneByIdalmacendestino(int $idalmacendestino) Return the first Requisicion filtered by the idalmacendestino column
 * @method Requisicion findOneByIdusuario(int $idusuario) Return the first Requisicion filtered by the idusuario column
 * @method Requisicion findOneByIdauditor(int $idauditor) Return the first Requisicion filtered by the idauditor column
 * @method Requisicion findOneByIdconceptosalida(int $idconceptosalida) Return the first Requisicion filtered by the idconceptosalida column
 * @method Requisicion findOneByRequisicionFecha(string $requisicion_fecha) Return the first Requisicion filtered by the requisicion_fecha column
 * @method Requisicion findOneByRequisicionFechacreacion(string $requisicion_fechacreacion) Return the first Requisicion filtered by the requisicion_fechacreacion column
 * @method Requisicion findOneByRequisicionRevisada(boolean $requisicion_revisada) Return the first Requisicion filtered by the requisicion_revisada column
 * @method Requisicion findOneByRequisicionFolio(string $requisicion_folio) Return the first Requisicion filtered by the requisicion_folio column
 * @method Requisicion findOneByRequisicionTotal(string $requisicion_total) Return the first Requisicion filtered by the requisicion_total column
 * @method Requisicion findOneByNotaauditorempresa(boolean $notaauditorempresa) Return the first Requisicion filtered by the notaauditorempresa column
 * @method Requisicion findOneByNotaalmacenistaempresa(boolean $notaalmacenistaempresa) Return the first Requisicion filtered by the notaalmacenistaempresa column
 * @method Requisicion findOneByNotaauditoraersa(boolean $notaauditoraersa) Return the first Requisicion filtered by the notaauditoraersa column
 *
 * @method array findByIdrequisicion(int $idrequisicion) Return Requisicion objects filtered by the idrequisicion column
 * @method array findByIdempresa(int $idempresa) Return Requisicion objects filtered by the idempresa column
 * @method array findByIdsucursalorigen(int $idsucursalorigen) Return Requisicion objects filtered by the idsucursalorigen column
 * @method array findByIdalmacenorigen(int $idalmacenorigen) Return Requisicion objects filtered by the idalmacenorigen column
 * @method array findByIdsucursaldestino(int $idsucursaldestino) Return Requisicion objects filtered by the idsucursaldestino column
 * @method array findByIdalmacendestino(int $idalmacendestino) Return Requisicion objects filtered by the idalmacendestino column
 * @method array findByIdusuario(int $idusuario) Return Requisicion objects filtered by the idusuario column
 * @method array findByIdauditor(int $idauditor) Return Requisicion objects filtered by the idauditor column
 * @method array findByIdconceptosalida(int $idconceptosalida) Return Requisicion objects filtered by the idconceptosalida column
 * @method array findByRequisicionFecha(string $requisicion_fecha) Return Requisicion objects filtered by the requisicion_fecha column
 * @method array findByRequisicionFechacreacion(string $requisicion_fechacreacion) Return Requisicion objects filtered by the requisicion_fechacreacion column
 * @method array findByRequisicionRevisada(boolean $requisicion_revisada) Return Requisicion objects filtered by the requisicion_revisada column
 * @method array findByRequisicionFolio(string $requisicion_folio) Return Requisicion objects filtered by the requisicion_folio column
 * @method array findByRequisicionTotal(string $requisicion_total) Return Requisicion objects filtered by the requisicion_total column
 * @method array findByNotaauditorempresa(boolean $notaauditorempresa) Return Requisicion objects filtered by the notaauditorempresa column
 * @method array findByNotaalmacenistaempresa(boolean $notaalmacenistaempresa) Return Requisicion objects filtered by the notaalmacenistaempresa column
 * @method array findByNotaauditoraersa(boolean $notaauditoraersa) Return Requisicion objects filtered by the notaauditoraersa column
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
        $sql = 'SELECT `idrequisicion`, `idempresa`, `idsucursalorigen`, `idalmacenorigen`, `idsucursaldestino`, `idalmacendestino`, `idusuario`, `idauditor`, `idconceptosalida`, `requisicion_fecha`, `requisicion_fechacreacion`, `requisicion_revisada`, `requisicion_folio`, `requisicion_total`, `notaauditorempresa`, `notaalmacenistaempresa`, `notaauditoraersa` FROM `requisicion` WHERE `idrequisicion` = :p0';
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
     * Filter the query on the idsucursalorigen column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsucursalorigen(1234); // WHERE idsucursalorigen = 1234
     * $query->filterByIdsucursalorigen(array(12, 34)); // WHERE idsucursalorigen IN (12, 34)
     * $query->filterByIdsucursalorigen(array('min' => 12)); // WHERE idsucursalorigen >= 12
     * $query->filterByIdsucursalorigen(array('max' => 12)); // WHERE idsucursalorigen <= 12
     * </code>
     *
     * @see       filterBySucursalRelatedByIdsucursalorigen()
     *
     * @param     mixed $idsucursalorigen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RequisicionQuery The current query, for fluid interface
     */
    public function filterByIdsucursalorigen($idsucursalorigen = null, $comparison = null)
    {
        if (is_array($idsucursalorigen)) {
            $useMinMax = false;
            if (isset($idsucursalorigen['min'])) {
                $this->addUsingAlias(RequisicionPeer::IDSUCURSALORIGEN, $idsucursalorigen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursalorigen['max'])) {
                $this->addUsingAlias(RequisicionPeer::IDSUCURSALORIGEN, $idsucursalorigen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RequisicionPeer::IDSUCURSALORIGEN, $idsucursalorigen, $comparison);
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
     * Filter the query on the idsucursaldestino column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsucursaldestino(1234); // WHERE idsucursaldestino = 1234
     * $query->filterByIdsucursaldestino(array(12, 34)); // WHERE idsucursaldestino IN (12, 34)
     * $query->filterByIdsucursaldestino(array('min' => 12)); // WHERE idsucursaldestino >= 12
     * $query->filterByIdsucursaldestino(array('max' => 12)); // WHERE idsucursaldestino <= 12
     * </code>
     *
     * @see       filterBySucursalRelatedByIdsucursaldestino()
     *
     * @param     mixed $idsucursaldestino The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RequisicionQuery The current query, for fluid interface
     */
    public function filterByIdsucursaldestino($idsucursaldestino = null, $comparison = null)
    {
        if (is_array($idsucursaldestino)) {
            $useMinMax = false;
            if (isset($idsucursaldestino['min'])) {
                $this->addUsingAlias(RequisicionPeer::IDSUCURSALDESTINO, $idsucursaldestino['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursaldestino['max'])) {
                $this->addUsingAlias(RequisicionPeer::IDSUCURSALDESTINO, $idsucursaldestino['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RequisicionPeer::IDSUCURSALDESTINO, $idsucursaldestino, $comparison);
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
     * Filter the query on the requisicion_fechacreacion column
     *
     * Example usage:
     * <code>
     * $query->filterByRequisicionFechacreacion('2011-03-14'); // WHERE requisicion_fechacreacion = '2011-03-14'
     * $query->filterByRequisicionFechacreacion('now'); // WHERE requisicion_fechacreacion = '2011-03-14'
     * $query->filterByRequisicionFechacreacion(array('max' => 'yesterday')); // WHERE requisicion_fechacreacion < '2011-03-13'
     * </code>
     *
     * @param     mixed $requisicionFechacreacion The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RequisicionQuery The current query, for fluid interface
     */
    public function filterByRequisicionFechacreacion($requisicionFechacreacion = null, $comparison = null)
    {
        if (is_array($requisicionFechacreacion)) {
            $useMinMax = false;
            if (isset($requisicionFechacreacion['min'])) {
                $this->addUsingAlias(RequisicionPeer::REQUISICION_FECHACREACION, $requisicionFechacreacion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($requisicionFechacreacion['max'])) {
                $this->addUsingAlias(RequisicionPeer::REQUISICION_FECHACREACION, $requisicionFechacreacion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RequisicionPeer::REQUISICION_FECHACREACION, $requisicionFechacreacion, $comparison);
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
     * Filter the query on the requisicion_folio column
     *
     * Example usage:
     * <code>
     * $query->filterByRequisicionFolio('fooValue');   // WHERE requisicion_folio = 'fooValue'
     * $query->filterByRequisicionFolio('%fooValue%'); // WHERE requisicion_folio LIKE '%fooValue%'
     * </code>
     *
     * @param     string $requisicionFolio The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RequisicionQuery The current query, for fluid interface
     */
    public function filterByRequisicionFolio($requisicionFolio = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($requisicionFolio)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $requisicionFolio)) {
                $requisicionFolio = str_replace('*', '%', $requisicionFolio);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RequisicionPeer::REQUISICION_FOLIO, $requisicionFolio, $comparison);
    }

    /**
     * Filter the query on the requisicion_total column
     *
     * Example usage:
     * <code>
     * $query->filterByRequisicionTotal(1234); // WHERE requisicion_total = 1234
     * $query->filterByRequisicionTotal(array(12, 34)); // WHERE requisicion_total IN (12, 34)
     * $query->filterByRequisicionTotal(array('min' => 12)); // WHERE requisicion_total >= 12
     * $query->filterByRequisicionTotal(array('max' => 12)); // WHERE requisicion_total <= 12
     * </code>
     *
     * @param     mixed $requisicionTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RequisicionQuery The current query, for fluid interface
     */
    public function filterByRequisicionTotal($requisicionTotal = null, $comparison = null)
    {
        if (is_array($requisicionTotal)) {
            $useMinMax = false;
            if (isset($requisicionTotal['min'])) {
                $this->addUsingAlias(RequisicionPeer::REQUISICION_TOTAL, $requisicionTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($requisicionTotal['max'])) {
                $this->addUsingAlias(RequisicionPeer::REQUISICION_TOTAL, $requisicionTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RequisicionPeer::REQUISICION_TOTAL, $requisicionTotal, $comparison);
    }

    /**
     * Filter the query on the notaauditorempresa column
     *
     * Example usage:
     * <code>
     * $query->filterByNotaauditorempresa(true); // WHERE notaauditorempresa = true
     * $query->filterByNotaauditorempresa('yes'); // WHERE notaauditorempresa = true
     * </code>
     *
     * @param     boolean|string $notaauditorempresa The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RequisicionQuery The current query, for fluid interface
     */
    public function filterByNotaauditorempresa($notaauditorempresa = null, $comparison = null)
    {
        if (is_string($notaauditorempresa)) {
            $notaauditorempresa = in_array(strtolower($notaauditorempresa), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(RequisicionPeer::NOTAAUDITOREMPRESA, $notaauditorempresa, $comparison);
    }

    /**
     * Filter the query on the notaalmacenistaempresa column
     *
     * Example usage:
     * <code>
     * $query->filterByNotaalmacenistaempresa(true); // WHERE notaalmacenistaempresa = true
     * $query->filterByNotaalmacenistaempresa('yes'); // WHERE notaalmacenistaempresa = true
     * </code>
     *
     * @param     boolean|string $notaalmacenistaempresa The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RequisicionQuery The current query, for fluid interface
     */
    public function filterByNotaalmacenistaempresa($notaalmacenistaempresa = null, $comparison = null)
    {
        if (is_string($notaalmacenistaempresa)) {
            $notaalmacenistaempresa = in_array(strtolower($notaalmacenistaempresa), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(RequisicionPeer::NOTAALMACENISTAEMPRESA, $notaalmacenistaempresa, $comparison);
    }

    /**
     * Filter the query on the notaauditoraersa column
     *
     * Example usage:
     * <code>
     * $query->filterByNotaauditoraersa(true); // WHERE notaauditoraersa = true
     * $query->filterByNotaauditoraersa('yes'); // WHERE notaauditoraersa = true
     * </code>
     *
     * @param     boolean|string $notaauditoraersa The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RequisicionQuery The current query, for fluid interface
     */
    public function filterByNotaauditoraersa($notaauditoraersa = null, $comparison = null)
    {
        if (is_string($notaauditoraersa)) {
            $notaauditoraersa = in_array(strtolower($notaauditoraersa), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(RequisicionPeer::NOTAAUDITORAERSA, $notaauditoraersa, $comparison);
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
    public function filterBySucursalRelatedByIdsucursaldestino($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(RequisicionPeer::IDSUCURSALDESTINO, $sucursal->getIdsucursal(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RequisicionPeer::IDSUCURSALDESTINO, $sucursal->toKeyValue('PrimaryKey', 'Idsucursal'), $comparison);
        } else {
            throw new PropelException('filterBySucursalRelatedByIdsucursaldestino() only accepts arguments of type Sucursal or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SucursalRelatedByIdsucursaldestino relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RequisicionQuery The current query, for fluid interface
     */
    public function joinSucursalRelatedByIdsucursaldestino($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SucursalRelatedByIdsucursaldestino');

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
            $this->addJoinObject($join, 'SucursalRelatedByIdsucursaldestino');
        }

        return $this;
    }

    /**
     * Use the SucursalRelatedByIdsucursaldestino relation Sucursal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SucursalQuery A secondary query class using the current class as primary query
     */
    public function useSucursalRelatedByIdsucursaldestinoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSucursalRelatedByIdsucursaldestino($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SucursalRelatedByIdsucursaldestino', 'SucursalQuery');
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
    public function filterBySucursalRelatedByIdsucursalorigen($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(RequisicionPeer::IDSUCURSALORIGEN, $sucursal->getIdsucursal(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RequisicionPeer::IDSUCURSALORIGEN, $sucursal->toKeyValue('PrimaryKey', 'Idsucursal'), $comparison);
        } else {
            throw new PropelException('filterBySucursalRelatedByIdsucursalorigen() only accepts arguments of type Sucursal or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SucursalRelatedByIdsucursalorigen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RequisicionQuery The current query, for fluid interface
     */
    public function joinSucursalRelatedByIdsucursalorigen($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SucursalRelatedByIdsucursalorigen');

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
            $this->addJoinObject($join, 'SucursalRelatedByIdsucursalorigen');
        }

        return $this;
    }

    /**
     * Use the SucursalRelatedByIdsucursalorigen relation Sucursal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SucursalQuery A secondary query class using the current class as primary query
     */
    public function useSucursalRelatedByIdsucursalorigenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSucursalRelatedByIdsucursalorigen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SucursalRelatedByIdsucursalorigen', 'SucursalQuery');
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
     * Filter the query by a related Requisicionnota object
     *
     * @param   Requisicionnota|PropelObjectCollection $requisicionnota  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RequisicionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRequisicionnota($requisicionnota, $comparison = null)
    {
        if ($requisicionnota instanceof Requisicionnota) {
            return $this
                ->addUsingAlias(RequisicionPeer::IDREQUISICION, $requisicionnota->getIdrequisicion(), $comparison);
        } elseif ($requisicionnota instanceof PropelObjectCollection) {
            return $this
                ->useRequisicionnotaQuery()
                ->filterByPrimaryKeys($requisicionnota->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRequisicionnota() only accepts arguments of type Requisicionnota or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Requisicionnota relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RequisicionQuery The current query, for fluid interface
     */
    public function joinRequisicionnota($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Requisicionnota');

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
            $this->addJoinObject($join, 'Requisicionnota');
        }

        return $this;
    }

    /**
     * Use the Requisicionnota relation Requisicionnota object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RequisicionnotaQuery A secondary query class using the current class as primary query
     */
    public function useRequisicionnotaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRequisicionnota($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Requisicionnota', 'RequisicionnotaQuery');
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
