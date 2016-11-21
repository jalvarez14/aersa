<?php


/**
 * Base class that represents a query for the 'notificacion' table.
 *
 *
 *
 * @method NotificacionQuery orderByIdnotificacion($order = Criteria::ASC) Order by the idnotificacion column
 * @method NotificacionQuery orderByNotificacionProceso($order = Criteria::ASC) Order by the notificacion_proceso column
 * @method NotificacionQuery orderByIdproceso($order = Criteria::ASC) Order by the idproceso column
 * @method NotificacionQuery orderByRol1($order = Criteria::ASC) Order by the rol1 column
 * @method NotificacionQuery orderByRol2($order = Criteria::ASC) Order by the rol2 column
 * @method NotificacionQuery orderByRol3($order = Criteria::ASC) Order by the rol3 column
 * @method NotificacionQuery orderByRol4($order = Criteria::ASC) Order by the rol4 column
 * @method NotificacionQuery orderByRol5($order = Criteria::ASC) Order by the rol5 column
 * @method NotificacionQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method NotificacionQuery orderByIdempresa($order = Criteria::ASC) Order by the idempresa column
 *
 * @method NotificacionQuery groupByIdnotificacion() Group by the idnotificacion column
 * @method NotificacionQuery groupByNotificacionProceso() Group by the notificacion_proceso column
 * @method NotificacionQuery groupByIdproceso() Group by the idproceso column
 * @method NotificacionQuery groupByRol1() Group by the rol1 column
 * @method NotificacionQuery groupByRol2() Group by the rol2 column
 * @method NotificacionQuery groupByRol3() Group by the rol3 column
 * @method NotificacionQuery groupByRol4() Group by the rol4 column
 * @method NotificacionQuery groupByRol5() Group by the rol5 column
 * @method NotificacionQuery groupByIdsucursal() Group by the idsucursal column
 * @method NotificacionQuery groupByIdempresa() Group by the idempresa column
 *
 * @method NotificacionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method NotificacionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method NotificacionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Notificacion findOne(PropelPDO $con = null) Return the first Notificacion matching the query
 * @method Notificacion findOneOrCreate(PropelPDO $con = null) Return the first Notificacion matching the query, or a new Notificacion object populated from the query conditions when no match is found
 *
 * @method Notificacion findOneByNotificacionProceso(string $notificacion_proceso) Return the first Notificacion filtered by the notificacion_proceso column
 * @method Notificacion findOneByIdproceso(int $idproceso) Return the first Notificacion filtered by the idproceso column
 * @method Notificacion findOneByRol1(boolean $rol1) Return the first Notificacion filtered by the rol1 column
 * @method Notificacion findOneByRol2(boolean $rol2) Return the first Notificacion filtered by the rol2 column
 * @method Notificacion findOneByRol3(boolean $rol3) Return the first Notificacion filtered by the rol3 column
 * @method Notificacion findOneByRol4(boolean $rol4) Return the first Notificacion filtered by the rol4 column
 * @method Notificacion findOneByRol5(boolean $rol5) Return the first Notificacion filtered by the rol5 column
 * @method Notificacion findOneByIdsucursal(int $idsucursal) Return the first Notificacion filtered by the idsucursal column
 * @method Notificacion findOneByIdempresa(int $idempresa) Return the first Notificacion filtered by the idempresa column
 *
 * @method array findByIdnotificacion(int $idnotificacion) Return Notificacion objects filtered by the idnotificacion column
 * @method array findByNotificacionProceso(string $notificacion_proceso) Return Notificacion objects filtered by the notificacion_proceso column
 * @method array findByIdproceso(int $idproceso) Return Notificacion objects filtered by the idproceso column
 * @method array findByRol1(boolean $rol1) Return Notificacion objects filtered by the rol1 column
 * @method array findByRol2(boolean $rol2) Return Notificacion objects filtered by the rol2 column
 * @method array findByRol3(boolean $rol3) Return Notificacion objects filtered by the rol3 column
 * @method array findByRol4(boolean $rol4) Return Notificacion objects filtered by the rol4 column
 * @method array findByRol5(boolean $rol5) Return Notificacion objects filtered by the rol5 column
 * @method array findByIdsucursal(int $idsucursal) Return Notificacion objects filtered by the idsucursal column
 * @method array findByIdempresa(int $idempresa) Return Notificacion objects filtered by the idempresa column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseNotificacionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseNotificacionQuery object.
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
            $modelName = 'Notificacion';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new NotificacionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   NotificacionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return NotificacionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof NotificacionQuery) {
            return $criteria;
        }
        $query = new NotificacionQuery(null, null, $modelAlias);

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
     * @return   Notificacion|Notificacion[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = NotificacionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(NotificacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Notificacion A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdnotificacion($key, $con = null)
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
     * @return                 Notificacion A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idnotificacion`, `notificacion_proceso`, `idproceso`, `rol1`, `rol2`, `rol3`, `rol4`, `rol5`, `idsucursal`, `idempresa` FROM `notificacion` WHERE `idnotificacion` = :p0';
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
            $obj = new Notificacion();
            $obj->hydrate($row);
            NotificacionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Notificacion|Notificacion[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Notificacion[]|mixed the list of results, formatted by the current formatter
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
     * @return NotificacionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(NotificacionPeer::IDNOTIFICACION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return NotificacionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(NotificacionPeer::IDNOTIFICACION, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idnotificacion column
     *
     * Example usage:
     * <code>
     * $query->filterByIdnotificacion(1234); // WHERE idnotificacion = 1234
     * $query->filterByIdnotificacion(array(12, 34)); // WHERE idnotificacion IN (12, 34)
     * $query->filterByIdnotificacion(array('min' => 12)); // WHERE idnotificacion >= 12
     * $query->filterByIdnotificacion(array('max' => 12)); // WHERE idnotificacion <= 12
     * </code>
     *
     * @param     mixed $idnotificacion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotificacionQuery The current query, for fluid interface
     */
    public function filterByIdnotificacion($idnotificacion = null, $comparison = null)
    {
        if (is_array($idnotificacion)) {
            $useMinMax = false;
            if (isset($idnotificacion['min'])) {
                $this->addUsingAlias(NotificacionPeer::IDNOTIFICACION, $idnotificacion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idnotificacion['max'])) {
                $this->addUsingAlias(NotificacionPeer::IDNOTIFICACION, $idnotificacion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NotificacionPeer::IDNOTIFICACION, $idnotificacion, $comparison);
    }

    /**
     * Filter the query on the notificacion_proceso column
     *
     * Example usage:
     * <code>
     * $query->filterByNotificacionProceso('fooValue');   // WHERE notificacion_proceso = 'fooValue'
     * $query->filterByNotificacionProceso('%fooValue%'); // WHERE notificacion_proceso LIKE '%fooValue%'
     * </code>
     *
     * @param     string $notificacionProceso The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotificacionQuery The current query, for fluid interface
     */
    public function filterByNotificacionProceso($notificacionProceso = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($notificacionProceso)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $notificacionProceso)) {
                $notificacionProceso = str_replace('*', '%', $notificacionProceso);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(NotificacionPeer::NOTIFICACION_PROCESO, $notificacionProceso, $comparison);
    }

    /**
     * Filter the query on the idproceso column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproceso(1234); // WHERE idproceso = 1234
     * $query->filterByIdproceso(array(12, 34)); // WHERE idproceso IN (12, 34)
     * $query->filterByIdproceso(array('min' => 12)); // WHERE idproceso >= 12
     * $query->filterByIdproceso(array('max' => 12)); // WHERE idproceso <= 12
     * </code>
     *
     * @param     mixed $idproceso The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotificacionQuery The current query, for fluid interface
     */
    public function filterByIdproceso($idproceso = null, $comparison = null)
    {
        if (is_array($idproceso)) {
            $useMinMax = false;
            if (isset($idproceso['min'])) {
                $this->addUsingAlias(NotificacionPeer::IDPROCESO, $idproceso['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproceso['max'])) {
                $this->addUsingAlias(NotificacionPeer::IDPROCESO, $idproceso['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NotificacionPeer::IDPROCESO, $idproceso, $comparison);
    }

    /**
     * Filter the query on the rol1 column
     *
     * Example usage:
     * <code>
     * $query->filterByRol1(true); // WHERE rol1 = true
     * $query->filterByRol1('yes'); // WHERE rol1 = true
     * </code>
     *
     * @param     boolean|string $rol1 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotificacionQuery The current query, for fluid interface
     */
    public function filterByRol1($rol1 = null, $comparison = null)
    {
        if (is_string($rol1)) {
            $rol1 = in_array(strtolower($rol1), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(NotificacionPeer::ROL1, $rol1, $comparison);
    }

    /**
     * Filter the query on the rol2 column
     *
     * Example usage:
     * <code>
     * $query->filterByRol2(true); // WHERE rol2 = true
     * $query->filterByRol2('yes'); // WHERE rol2 = true
     * </code>
     *
     * @param     boolean|string $rol2 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotificacionQuery The current query, for fluid interface
     */
    public function filterByRol2($rol2 = null, $comparison = null)
    {
        if (is_string($rol2)) {
            $rol2 = in_array(strtolower($rol2), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(NotificacionPeer::ROL2, $rol2, $comparison);
    }

    /**
     * Filter the query on the rol3 column
     *
     * Example usage:
     * <code>
     * $query->filterByRol3(true); // WHERE rol3 = true
     * $query->filterByRol3('yes'); // WHERE rol3 = true
     * </code>
     *
     * @param     boolean|string $rol3 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotificacionQuery The current query, for fluid interface
     */
    public function filterByRol3($rol3 = null, $comparison = null)
    {
        if (is_string($rol3)) {
            $rol3 = in_array(strtolower($rol3), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(NotificacionPeer::ROL3, $rol3, $comparison);
    }

    /**
     * Filter the query on the rol4 column
     *
     * Example usage:
     * <code>
     * $query->filterByRol4(true); // WHERE rol4 = true
     * $query->filterByRol4('yes'); // WHERE rol4 = true
     * </code>
     *
     * @param     boolean|string $rol4 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotificacionQuery The current query, for fluid interface
     */
    public function filterByRol4($rol4 = null, $comparison = null)
    {
        if (is_string($rol4)) {
            $rol4 = in_array(strtolower($rol4), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(NotificacionPeer::ROL4, $rol4, $comparison);
    }

    /**
     * Filter the query on the rol5 column
     *
     * Example usage:
     * <code>
     * $query->filterByRol5(true); // WHERE rol5 = true
     * $query->filterByRol5('yes'); // WHERE rol5 = true
     * </code>
     *
     * @param     boolean|string $rol5 The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotificacionQuery The current query, for fluid interface
     */
    public function filterByRol5($rol5 = null, $comparison = null)
    {
        if (is_string($rol5)) {
            $rol5 = in_array(strtolower($rol5), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(NotificacionPeer::ROL5, $rol5, $comparison);
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
     * @return NotificacionQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(NotificacionPeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(NotificacionPeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NotificacionPeer::IDSUCURSAL, $idsucursal, $comparison);
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
     * @return NotificacionQuery The current query, for fluid interface
     */
    public function filterByIdempresa($idempresa = null, $comparison = null)
    {
        if (is_array($idempresa)) {
            $useMinMax = false;
            if (isset($idempresa['min'])) {
                $this->addUsingAlias(NotificacionPeer::IDEMPRESA, $idempresa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempresa['max'])) {
                $this->addUsingAlias(NotificacionPeer::IDEMPRESA, $idempresa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NotificacionPeer::IDEMPRESA, $idempresa, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Notificacion $notificacion Object to remove from the list of results
     *
     * @return NotificacionQuery The current query, for fluid interface
     */
    public function prune($notificacion = null)
    {
        if ($notificacion) {
            $this->addUsingAlias(NotificacionPeer::IDNOTIFICACION, $notificacion->getIdnotificacion(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
