<?php


/**
 * Base class that represents a query for the 'eventocontrarecibo' table.
 *
 *
 *
 * @method EventocontrareciboQuery orderByIdeventocontrarecibo($order = Criteria::ASC) Order by the ideventocontrarecibo column
 * @method EventocontrareciboQuery orderByIdcontrarecibo($order = Criteria::ASC) Order by the idcontrarecibo column
 * @method EventocontrareciboQuery orderByEventocontrareciboFecha($order = Criteria::ASC) Order by the eventocontrarecibo_fecha column
 * @method EventocontrareciboQuery orderByEventocontrareciboGenerador($order = Criteria::ASC) Order by the eventocontrarecibo_generador column
 * @method EventocontrareciboQuery orderByEventocontrareciboEvento($order = Criteria::ASC) Order by the eventocontrarecibo_evento column
 * @method EventocontrareciboQuery orderByIdempresa($order = Criteria::ASC) Order by the idempresa column
 * @method EventocontrareciboQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method EventocontrareciboQuery orderByIdusuario($order = Criteria::ASC) Order by the idusuario column
 * @method EventocontrareciboQuery orderByEventocontrareciboNota($order = Criteria::ASC) Order by the eventocontrarecibo_nota column
 *
 * @method EventocontrareciboQuery groupByIdeventocontrarecibo() Group by the ideventocontrarecibo column
 * @method EventocontrareciboQuery groupByIdcontrarecibo() Group by the idcontrarecibo column
 * @method EventocontrareciboQuery groupByEventocontrareciboFecha() Group by the eventocontrarecibo_fecha column
 * @method EventocontrareciboQuery groupByEventocontrareciboGenerador() Group by the eventocontrarecibo_generador column
 * @method EventocontrareciboQuery groupByEventocontrareciboEvento() Group by the eventocontrarecibo_evento column
 * @method EventocontrareciboQuery groupByIdempresa() Group by the idempresa column
 * @method EventocontrareciboQuery groupByIdsucursal() Group by the idsucursal column
 * @method EventocontrareciboQuery groupByIdusuario() Group by the idusuario column
 * @method EventocontrareciboQuery groupByEventocontrareciboNota() Group by the eventocontrarecibo_nota column
 *
 * @method EventocontrareciboQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EventocontrareciboQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EventocontrareciboQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method EventocontrareciboQuery leftJoinContrarecibo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Contrarecibo relation
 * @method EventocontrareciboQuery rightJoinContrarecibo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Contrarecibo relation
 * @method EventocontrareciboQuery innerJoinContrarecibo($relationAlias = null) Adds a INNER JOIN clause to the query using the Contrarecibo relation
 *
 * @method Eventocontrarecibo findOne(PropelPDO $con = null) Return the first Eventocontrarecibo matching the query
 * @method Eventocontrarecibo findOneOrCreate(PropelPDO $con = null) Return the first Eventocontrarecibo matching the query, or a new Eventocontrarecibo object populated from the query conditions when no match is found
 *
 * @method Eventocontrarecibo findOneByIdcontrarecibo(int $idcontrarecibo) Return the first Eventocontrarecibo filtered by the idcontrarecibo column
 * @method Eventocontrarecibo findOneByEventocontrareciboFecha(string $eventocontrarecibo_fecha) Return the first Eventocontrarecibo filtered by the eventocontrarecibo_fecha column
 * @method Eventocontrarecibo findOneByEventocontrareciboGenerador(string $eventocontrarecibo_generador) Return the first Eventocontrarecibo filtered by the eventocontrarecibo_generador column
 * @method Eventocontrarecibo findOneByEventocontrareciboEvento(string $eventocontrarecibo_evento) Return the first Eventocontrarecibo filtered by the eventocontrarecibo_evento column
 * @method Eventocontrarecibo findOneByIdempresa(int $idempresa) Return the first Eventocontrarecibo filtered by the idempresa column
 * @method Eventocontrarecibo findOneByIdsucursal(int $idsucursal) Return the first Eventocontrarecibo filtered by the idsucursal column
 * @method Eventocontrarecibo findOneByIdusuario(int $idusuario) Return the first Eventocontrarecibo filtered by the idusuario column
 * @method Eventocontrarecibo findOneByEventocontrareciboNota(string $eventocontrarecibo_nota) Return the first Eventocontrarecibo filtered by the eventocontrarecibo_nota column
 *
 * @method array findByIdeventocontrarecibo(int $ideventocontrarecibo) Return Eventocontrarecibo objects filtered by the ideventocontrarecibo column
 * @method array findByIdcontrarecibo(int $idcontrarecibo) Return Eventocontrarecibo objects filtered by the idcontrarecibo column
 * @method array findByEventocontrareciboFecha(string $eventocontrarecibo_fecha) Return Eventocontrarecibo objects filtered by the eventocontrarecibo_fecha column
 * @method array findByEventocontrareciboGenerador(string $eventocontrarecibo_generador) Return Eventocontrarecibo objects filtered by the eventocontrarecibo_generador column
 * @method array findByEventocontrareciboEvento(string $eventocontrarecibo_evento) Return Eventocontrarecibo objects filtered by the eventocontrarecibo_evento column
 * @method array findByIdempresa(int $idempresa) Return Eventocontrarecibo objects filtered by the idempresa column
 * @method array findByIdsucursal(int $idsucursal) Return Eventocontrarecibo objects filtered by the idsucursal column
 * @method array findByIdusuario(int $idusuario) Return Eventocontrarecibo objects filtered by the idusuario column
 * @method array findByEventocontrareciboNota(string $eventocontrarecibo_nota) Return Eventocontrarecibo objects filtered by the eventocontrarecibo_nota column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseEventocontrareciboQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEventocontrareciboQuery object.
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
            $modelName = 'Eventocontrarecibo';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EventocontrareciboQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EventocontrareciboQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EventocontrareciboQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EventocontrareciboQuery) {
            return $criteria;
        }
        $query = new EventocontrareciboQuery(null, null, $modelAlias);

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
     * @return   Eventocontrarecibo|Eventocontrarecibo[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EventocontrareciboPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EventocontrareciboPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Eventocontrarecibo A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdeventocontrarecibo($key, $con = null)
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
     * @return                 Eventocontrarecibo A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ideventocontrarecibo`, `idcontrarecibo`, `eventocontrarecibo_fecha`, `eventocontrarecibo_generador`, `eventocontrarecibo_evento`, `idempresa`, `idsucursal`, `idusuario`, `eventocontrarecibo_nota` FROM `eventocontrarecibo` WHERE `ideventocontrarecibo` = :p0';
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
            $obj = new Eventocontrarecibo();
            $obj->hydrate($row);
            EventocontrareciboPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Eventocontrarecibo|Eventocontrarecibo[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Eventocontrarecibo[]|mixed the list of results, formatted by the current formatter
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
     * @return EventocontrareciboQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EventocontrareciboPeer::IDEVENTOCONTRARECIBO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EventocontrareciboQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EventocontrareciboPeer::IDEVENTOCONTRARECIBO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ideventocontrarecibo column
     *
     * Example usage:
     * <code>
     * $query->filterByIdeventocontrarecibo(1234); // WHERE ideventocontrarecibo = 1234
     * $query->filterByIdeventocontrarecibo(array(12, 34)); // WHERE ideventocontrarecibo IN (12, 34)
     * $query->filterByIdeventocontrarecibo(array('min' => 12)); // WHERE ideventocontrarecibo >= 12
     * $query->filterByIdeventocontrarecibo(array('max' => 12)); // WHERE ideventocontrarecibo <= 12
     * </code>
     *
     * @param     mixed $ideventocontrarecibo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EventocontrareciboQuery The current query, for fluid interface
     */
    public function filterByIdeventocontrarecibo($ideventocontrarecibo = null, $comparison = null)
    {
        if (is_array($ideventocontrarecibo)) {
            $useMinMax = false;
            if (isset($ideventocontrarecibo['min'])) {
                $this->addUsingAlias(EventocontrareciboPeer::IDEVENTOCONTRARECIBO, $ideventocontrarecibo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ideventocontrarecibo['max'])) {
                $this->addUsingAlias(EventocontrareciboPeer::IDEVENTOCONTRARECIBO, $ideventocontrarecibo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EventocontrareciboPeer::IDEVENTOCONTRARECIBO, $ideventocontrarecibo, $comparison);
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
     * @see       filterByContrarecibo()
     *
     * @param     mixed $idcontrarecibo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EventocontrareciboQuery The current query, for fluid interface
     */
    public function filterByIdcontrarecibo($idcontrarecibo = null, $comparison = null)
    {
        if (is_array($idcontrarecibo)) {
            $useMinMax = false;
            if (isset($idcontrarecibo['min'])) {
                $this->addUsingAlias(EventocontrareciboPeer::IDCONTRARECIBO, $idcontrarecibo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcontrarecibo['max'])) {
                $this->addUsingAlias(EventocontrareciboPeer::IDCONTRARECIBO, $idcontrarecibo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EventocontrareciboPeer::IDCONTRARECIBO, $idcontrarecibo, $comparison);
    }

    /**
     * Filter the query on the eventocontrarecibo_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByEventocontrareciboFecha('2011-03-14'); // WHERE eventocontrarecibo_fecha = '2011-03-14'
     * $query->filterByEventocontrareciboFecha('now'); // WHERE eventocontrarecibo_fecha = '2011-03-14'
     * $query->filterByEventocontrareciboFecha(array('max' => 'yesterday')); // WHERE eventocontrarecibo_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $eventocontrareciboFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EventocontrareciboQuery The current query, for fluid interface
     */
    public function filterByEventocontrareciboFecha($eventocontrareciboFecha = null, $comparison = null)
    {
        if (is_array($eventocontrareciboFecha)) {
            $useMinMax = false;
            if (isset($eventocontrareciboFecha['min'])) {
                $this->addUsingAlias(EventocontrareciboPeer::EVENTOCONTRARECIBO_FECHA, $eventocontrareciboFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eventocontrareciboFecha['max'])) {
                $this->addUsingAlias(EventocontrareciboPeer::EVENTOCONTRARECIBO_FECHA, $eventocontrareciboFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EventocontrareciboPeer::EVENTOCONTRARECIBO_FECHA, $eventocontrareciboFecha, $comparison);
    }

    /**
     * Filter the query on the eventocontrarecibo_generador column
     *
     * Example usage:
     * <code>
     * $query->filterByEventocontrareciboGenerador('fooValue');   // WHERE eventocontrarecibo_generador = 'fooValue'
     * $query->filterByEventocontrareciboGenerador('%fooValue%'); // WHERE eventocontrarecibo_generador LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eventocontrareciboGenerador The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EventocontrareciboQuery The current query, for fluid interface
     */
    public function filterByEventocontrareciboGenerador($eventocontrareciboGenerador = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eventocontrareciboGenerador)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eventocontrareciboGenerador)) {
                $eventocontrareciboGenerador = str_replace('*', '%', $eventocontrareciboGenerador);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EventocontrareciboPeer::EVENTOCONTRARECIBO_GENERADOR, $eventocontrareciboGenerador, $comparison);
    }

    /**
     * Filter the query on the eventocontrarecibo_evento column
     *
     * Example usage:
     * <code>
     * $query->filterByEventocontrareciboEvento('fooValue');   // WHERE eventocontrarecibo_evento = 'fooValue'
     * $query->filterByEventocontrareciboEvento('%fooValue%'); // WHERE eventocontrarecibo_evento LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eventocontrareciboEvento The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EventocontrareciboQuery The current query, for fluid interface
     */
    public function filterByEventocontrareciboEvento($eventocontrareciboEvento = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eventocontrareciboEvento)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eventocontrareciboEvento)) {
                $eventocontrareciboEvento = str_replace('*', '%', $eventocontrareciboEvento);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EventocontrareciboPeer::EVENTOCONTRARECIBO_EVENTO, $eventocontrareciboEvento, $comparison);
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
     * @return EventocontrareciboQuery The current query, for fluid interface
     */
    public function filterByIdempresa($idempresa = null, $comparison = null)
    {
        if (is_array($idempresa)) {
            $useMinMax = false;
            if (isset($idempresa['min'])) {
                $this->addUsingAlias(EventocontrareciboPeer::IDEMPRESA, $idempresa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempresa['max'])) {
                $this->addUsingAlias(EventocontrareciboPeer::IDEMPRESA, $idempresa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EventocontrareciboPeer::IDEMPRESA, $idempresa, $comparison);
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
     * @param     mixed $idsucursal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EventocontrareciboQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(EventocontrareciboPeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(EventocontrareciboPeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EventocontrareciboPeer::IDSUCURSAL, $idsucursal, $comparison);
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
     * @param     mixed $idusuario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EventocontrareciboQuery The current query, for fluid interface
     */
    public function filterByIdusuario($idusuario = null, $comparison = null)
    {
        if (is_array($idusuario)) {
            $useMinMax = false;
            if (isset($idusuario['min'])) {
                $this->addUsingAlias(EventocontrareciboPeer::IDUSUARIO, $idusuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idusuario['max'])) {
                $this->addUsingAlias(EventocontrareciboPeer::IDUSUARIO, $idusuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EventocontrareciboPeer::IDUSUARIO, $idusuario, $comparison);
    }

    /**
     * Filter the query on the eventocontrarecibo_nota column
     *
     * Example usage:
     * <code>
     * $query->filterByEventocontrareciboNota('fooValue');   // WHERE eventocontrarecibo_nota = 'fooValue'
     * $query->filterByEventocontrareciboNota('%fooValue%'); // WHERE eventocontrarecibo_nota LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eventocontrareciboNota The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EventocontrareciboQuery The current query, for fluid interface
     */
    public function filterByEventocontrareciboNota($eventocontrareciboNota = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eventocontrareciboNota)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eventocontrareciboNota)) {
                $eventocontrareciboNota = str_replace('*', '%', $eventocontrareciboNota);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EventocontrareciboPeer::EVENTOCONTRARECIBO_NOTA, $eventocontrareciboNota, $comparison);
    }

    /**
     * Filter the query by a related Contrarecibo object
     *
     * @param   Contrarecibo|PropelObjectCollection $contrarecibo The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EventocontrareciboQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByContrarecibo($contrarecibo, $comparison = null)
    {
        if ($contrarecibo instanceof Contrarecibo) {
            return $this
                ->addUsingAlias(EventocontrareciboPeer::IDCONTRARECIBO, $contrarecibo->getIdcontrarecibo(), $comparison);
        } elseif ($contrarecibo instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EventocontrareciboPeer::IDCONTRARECIBO, $contrarecibo->toKeyValue('PrimaryKey', 'Idcontrarecibo'), $comparison);
        } else {
            throw new PropelException('filterByContrarecibo() only accepts arguments of type Contrarecibo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Contrarecibo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EventocontrareciboQuery The current query, for fluid interface
     */
    public function joinContrarecibo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Contrarecibo');

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
            $this->addJoinObject($join, 'Contrarecibo');
        }

        return $this;
    }

    /**
     * Use the Contrarecibo relation Contrarecibo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ContrareciboQuery A secondary query class using the current class as primary query
     */
    public function useContrareciboQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinContrarecibo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Contrarecibo', 'ContrareciboQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Eventocontrarecibo $eventocontrarecibo Object to remove from the list of results
     *
     * @return EventocontrareciboQuery The current query, for fluid interface
     */
    public function prune($eventocontrarecibo = null)
    {
        if ($eventocontrarecibo) {
            $this->addUsingAlias(EventocontrareciboPeer::IDEVENTOCONTRARECIBO, $eventocontrarecibo->getIdeventocontrarecibo(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
