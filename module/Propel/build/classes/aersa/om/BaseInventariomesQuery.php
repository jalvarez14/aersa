<?php


/**
 * Base class that represents a query for the 'inventariomes' table.
 *
 *
 *
 * @method InventariomesQuery orderByIdinventariomes($order = Criteria::ASC) Order by the idinventariomes column
 * @method InventariomesQuery orderByIdempleadoempresa($order = Criteria::ASC) Order by the idempleadoempresa column
 * @method InventariomesQuery orderByIdauditor($order = Criteria::ASC) Order by the idauditor column
 * @method InventariomesQuery orderByInventariomesFecha($order = Criteria::ASC) Order by the inventariomes_fecha column
 * @method InventariomesQuery orderByInventariomesRevisada($order = Criteria::ASC) Order by the inventariomes_revisada column
 * @method InventariomesQuery orderByIdempresa($order = Criteria::ASC) Order by the idempresa column
 * @method InventariomesQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method InventariomesQuery orderByIdusuario($order = Criteria::ASC) Order by the idusuario column
 *
 * @method InventariomesQuery groupByIdinventariomes() Group by the idinventariomes column
 * @method InventariomesQuery groupByIdempleadoempresa() Group by the idempleadoempresa column
 * @method InventariomesQuery groupByIdauditor() Group by the idauditor column
 * @method InventariomesQuery groupByInventariomesFecha() Group by the inventariomes_fecha column
 * @method InventariomesQuery groupByInventariomesRevisada() Group by the inventariomes_revisada column
 * @method InventariomesQuery groupByIdempresa() Group by the idempresa column
 * @method InventariomesQuery groupByIdsucursal() Group by the idsucursal column
 * @method InventariomesQuery groupByIdusuario() Group by the idusuario column
 *
 * @method InventariomesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method InventariomesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method InventariomesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method InventariomesQuery leftJoinUsuarioRelatedByIdauditor($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioRelatedByIdauditor relation
 * @method InventariomesQuery rightJoinUsuarioRelatedByIdauditor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioRelatedByIdauditor relation
 * @method InventariomesQuery innerJoinUsuarioRelatedByIdauditor($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioRelatedByIdauditor relation
 *
 * @method InventariomesQuery leftJoinUsuarioRelatedByIdusuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioRelatedByIdusuario relation
 * @method InventariomesQuery rightJoinUsuarioRelatedByIdusuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioRelatedByIdusuario relation
 * @method InventariomesQuery innerJoinUsuarioRelatedByIdusuario($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioRelatedByIdusuario relation
 *
 * @method InventariomesQuery leftJoinInventariomesdetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Inventariomesdetalle relation
 * @method InventariomesQuery rightJoinInventariomesdetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Inventariomesdetalle relation
 * @method InventariomesQuery innerJoinInventariomesdetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Inventariomesdetalle relation
 *
 * @method Inventariomes findOne(PropelPDO $con = null) Return the first Inventariomes matching the query
 * @method Inventariomes findOneOrCreate(PropelPDO $con = null) Return the first Inventariomes matching the query, or a new Inventariomes object populated from the query conditions when no match is found
 *
 * @method Inventariomes findOneByIdempleadoempresa(double $idempleadoempresa) Return the first Inventariomes filtered by the idempleadoempresa column
 * @method Inventariomes findOneByIdauditor(int $idauditor) Return the first Inventariomes filtered by the idauditor column
 * @method Inventariomes findOneByInventariomesFecha(string $inventariomes_fecha) Return the first Inventariomes filtered by the inventariomes_fecha column
 * @method Inventariomes findOneByInventariomesRevisada(boolean $inventariomes_revisada) Return the first Inventariomes filtered by the inventariomes_revisada column
 * @method Inventariomes findOneByIdempresa(int $idempresa) Return the first Inventariomes filtered by the idempresa column
 * @method Inventariomes findOneByIdsucursal(int $idsucursal) Return the first Inventariomes filtered by the idsucursal column
 * @method Inventariomes findOneByIdusuario(int $idusuario) Return the first Inventariomes filtered by the idusuario column
 *
 * @method array findByIdinventariomes(int $idinventariomes) Return Inventariomes objects filtered by the idinventariomes column
 * @method array findByIdempleadoempresa(double $idempleadoempresa) Return Inventariomes objects filtered by the idempleadoempresa column
 * @method array findByIdauditor(int $idauditor) Return Inventariomes objects filtered by the idauditor column
 * @method array findByInventariomesFecha(string $inventariomes_fecha) Return Inventariomes objects filtered by the inventariomes_fecha column
 * @method array findByInventariomesRevisada(boolean $inventariomes_revisada) Return Inventariomes objects filtered by the inventariomes_revisada column
 * @method array findByIdempresa(int $idempresa) Return Inventariomes objects filtered by the idempresa column
 * @method array findByIdsucursal(int $idsucursal) Return Inventariomes objects filtered by the idsucursal column
 * @method array findByIdusuario(int $idusuario) Return Inventariomes objects filtered by the idusuario column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseInventariomesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseInventariomesQuery object.
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
            $modelName = 'Inventariomes';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new InventariomesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   InventariomesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return InventariomesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof InventariomesQuery) {
            return $criteria;
        }
        $query = new InventariomesQuery(null, null, $modelAlias);

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
     * @return   Inventariomes|Inventariomes[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = InventariomesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(InventariomesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Inventariomes A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdinventariomes($key, $con = null)
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
     * @return                 Inventariomes A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idinventariomes`, `idempleadoempresa`, `idauditor`, `inventariomes_fecha`, `inventariomes_revisada`, `idempresa`, `idsucursal`, `idusuario` FROM `inventariomes` WHERE `idinventariomes` = :p0';
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
            $obj = new Inventariomes();
            $obj->hydrate($row);
            InventariomesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Inventariomes|Inventariomes[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Inventariomes[]|mixed the list of results, formatted by the current formatter
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
     * @return InventariomesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(InventariomesPeer::IDINVENTARIOMES, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return InventariomesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(InventariomesPeer::IDINVENTARIOMES, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idinventariomes column
     *
     * Example usage:
     * <code>
     * $query->filterByIdinventariomes(1234); // WHERE idinventariomes = 1234
     * $query->filterByIdinventariomes(array(12, 34)); // WHERE idinventariomes IN (12, 34)
     * $query->filterByIdinventariomes(array('min' => 12)); // WHERE idinventariomes >= 12
     * $query->filterByIdinventariomes(array('max' => 12)); // WHERE idinventariomes <= 12
     * </code>
     *
     * @param     mixed $idinventariomes The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InventariomesQuery The current query, for fluid interface
     */
    public function filterByIdinventariomes($idinventariomes = null, $comparison = null)
    {
        if (is_array($idinventariomes)) {
            $useMinMax = false;
            if (isset($idinventariomes['min'])) {
                $this->addUsingAlias(InventariomesPeer::IDINVENTARIOMES, $idinventariomes['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idinventariomes['max'])) {
                $this->addUsingAlias(InventariomesPeer::IDINVENTARIOMES, $idinventariomes['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesPeer::IDINVENTARIOMES, $idinventariomes, $comparison);
    }

    /**
     * Filter the query on the idempleadoempresa column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempleadoempresa(1234); // WHERE idempleadoempresa = 1234
     * $query->filterByIdempleadoempresa(array(12, 34)); // WHERE idempleadoempresa IN (12, 34)
     * $query->filterByIdempleadoempresa(array('min' => 12)); // WHERE idempleadoempresa >= 12
     * $query->filterByIdempleadoempresa(array('max' => 12)); // WHERE idempleadoempresa <= 12
     * </code>
     *
     * @param     mixed $idempleadoempresa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InventariomesQuery The current query, for fluid interface
     */
    public function filterByIdempleadoempresa($idempleadoempresa = null, $comparison = null)
    {
        if (is_array($idempleadoempresa)) {
            $useMinMax = false;
            if (isset($idempleadoempresa['min'])) {
                $this->addUsingAlias(InventariomesPeer::IDEMPLEADOEMPRESA, $idempleadoempresa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleadoempresa['max'])) {
                $this->addUsingAlias(InventariomesPeer::IDEMPLEADOEMPRESA, $idempleadoempresa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesPeer::IDEMPLEADOEMPRESA, $idempleadoempresa, $comparison);
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
     * @return InventariomesQuery The current query, for fluid interface
     */
    public function filterByIdauditor($idauditor = null, $comparison = null)
    {
        if (is_array($idauditor)) {
            $useMinMax = false;
            if (isset($idauditor['min'])) {
                $this->addUsingAlias(InventariomesPeer::IDAUDITOR, $idauditor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idauditor['max'])) {
                $this->addUsingAlias(InventariomesPeer::IDAUDITOR, $idauditor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesPeer::IDAUDITOR, $idauditor, $comparison);
    }

    /**
     * Filter the query on the inventariomes_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByInventariomesFecha('2011-03-14'); // WHERE inventariomes_fecha = '2011-03-14'
     * $query->filterByInventariomesFecha('now'); // WHERE inventariomes_fecha = '2011-03-14'
     * $query->filterByInventariomesFecha(array('max' => 'yesterday')); // WHERE inventariomes_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $inventariomesFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InventariomesQuery The current query, for fluid interface
     */
    public function filterByInventariomesFecha($inventariomesFecha = null, $comparison = null)
    {
        if (is_array($inventariomesFecha)) {
            $useMinMax = false;
            if (isset($inventariomesFecha['min'])) {
                $this->addUsingAlias(InventariomesPeer::INVENTARIOMES_FECHA, $inventariomesFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inventariomesFecha['max'])) {
                $this->addUsingAlias(InventariomesPeer::INVENTARIOMES_FECHA, $inventariomesFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesPeer::INVENTARIOMES_FECHA, $inventariomesFecha, $comparison);
    }

    /**
     * Filter the query on the inventariomes_revisada column
     *
     * Example usage:
     * <code>
     * $query->filterByInventariomesRevisada(true); // WHERE inventariomes_revisada = true
     * $query->filterByInventariomesRevisada('yes'); // WHERE inventariomes_revisada = true
     * </code>
     *
     * @param     boolean|string $inventariomesRevisada The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InventariomesQuery The current query, for fluid interface
     */
    public function filterByInventariomesRevisada($inventariomesRevisada = null, $comparison = null)
    {
        if (is_string($inventariomesRevisada)) {
            $inventariomesRevisada = in_array(strtolower($inventariomesRevisada), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(InventariomesPeer::INVENTARIOMES_REVISADA, $inventariomesRevisada, $comparison);
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
     * @return InventariomesQuery The current query, for fluid interface
     */
    public function filterByIdempresa($idempresa = null, $comparison = null)
    {
        if (is_array($idempresa)) {
            $useMinMax = false;
            if (isset($idempresa['min'])) {
                $this->addUsingAlias(InventariomesPeer::IDEMPRESA, $idempresa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempresa['max'])) {
                $this->addUsingAlias(InventariomesPeer::IDEMPRESA, $idempresa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesPeer::IDEMPRESA, $idempresa, $comparison);
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
     * @return InventariomesQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(InventariomesPeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(InventariomesPeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesPeer::IDSUCURSAL, $idsucursal, $comparison);
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
     * @return InventariomesQuery The current query, for fluid interface
     */
    public function filterByIdusuario($idusuario = null, $comparison = null)
    {
        if (is_array($idusuario)) {
            $useMinMax = false;
            if (isset($idusuario['min'])) {
                $this->addUsingAlias(InventariomesPeer::IDUSUARIO, $idusuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idusuario['max'])) {
                $this->addUsingAlias(InventariomesPeer::IDUSUARIO, $idusuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesPeer::IDUSUARIO, $idusuario, $comparison);
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 InventariomesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuarioRelatedByIdauditor($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(InventariomesPeer::IDAUDITOR, $usuario->getIdusuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InventariomesPeer::IDAUDITOR, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
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
     * @return InventariomesQuery The current query, for fluid interface
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
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 InventariomesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuarioRelatedByIdusuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(InventariomesPeer::IDUSUARIO, $usuario->getIdusuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InventariomesPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
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
     * @return InventariomesQuery The current query, for fluid interface
     */
    public function joinUsuarioRelatedByIdusuario($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useUsuarioRelatedByIdusuarioQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinUsuarioRelatedByIdusuario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UsuarioRelatedByIdusuario', 'UsuarioQuery');
    }

    /**
     * Filter the query by a related Inventariomesdetalle object
     *
     * @param   Inventariomesdetalle|PropelObjectCollection $inventariomesdetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 InventariomesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByInventariomesdetalle($inventariomesdetalle, $comparison = null)
    {
        if ($inventariomesdetalle instanceof Inventariomesdetalle) {
            return $this
                ->addUsingAlias(InventariomesPeer::IDINVENTARIOMES, $inventariomesdetalle->getIdinventariomes(), $comparison);
        } elseif ($inventariomesdetalle instanceof PropelObjectCollection) {
            return $this
                ->useInventariomesdetalleQuery()
                ->filterByPrimaryKeys($inventariomesdetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByInventariomesdetalle() only accepts arguments of type Inventariomesdetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Inventariomesdetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return InventariomesQuery The current query, for fluid interface
     */
    public function joinInventariomesdetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Inventariomesdetalle');

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
            $this->addJoinObject($join, 'Inventariomesdetalle');
        }

        return $this;
    }

    /**
     * Use the Inventariomesdetalle relation Inventariomesdetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   InventariomesdetalleQuery A secondary query class using the current class as primary query
     */
    public function useInventariomesdetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInventariomesdetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Inventariomesdetalle', 'InventariomesdetalleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Inventariomes $inventariomes Object to remove from the list of results
     *
     * @return InventariomesQuery The current query, for fluid interface
     */
    public function prune($inventariomes = null)
    {
        if ($inventariomes) {
            $this->addUsingAlias(InventariomesPeer::IDINVENTARIOMES, $inventariomes->getIdinventariomes(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
