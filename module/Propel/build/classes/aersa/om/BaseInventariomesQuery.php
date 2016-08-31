<?php


/**
 * Base class that represents a query for the 'inventariomes' table.
 *
 *
 *
 * @method InventariomesQuery orderByIdinventariomes($order = Criteria::ASC) Order by the idinventariomes column
 * @method InventariomesQuery orderByIdempresa($order = Criteria::ASC) Order by the idempresa column
 * @method InventariomesQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method InventariomesQuery orderByIdalmacen($order = Criteria::ASC) Order by the idalmacen column
 * @method InventariomesQuery orderByIdusuario($order = Criteria::ASC) Order by the idusuario column
 * @method InventariomesQuery orderByIdauditor($order = Criteria::ASC) Order by the idauditor column
 * @method InventariomesQuery orderByInventariomesFecha($order = Criteria::ASC) Order by the inventariomes_fecha column
 * @method InventariomesQuery orderByInventariomesRevisada($order = Criteria::ASC) Order by the inventariomes_revisada column
 * @method InventariomesQuery orderByInventariomesFinalalimentos($order = Criteria::ASC) Order by the inventariomes_finalalimentos column
 * @method InventariomesQuery orderByInventariomesFinalbebidas($order = Criteria::ASC) Order by the inventariomes_finalbebidas column
 * @method InventariomesQuery orderByInventariomesFaltantes($order = Criteria::ASC) Order by the inventariomes_faltantes column
 * @method InventariomesQuery orderByInventariomesSobrantes($order = Criteria::ASC) Order by the inventariomes_sobrantes column
 * @method InventariomesQuery orderByInventariomesTotal($order = Criteria::ASC) Order by the inventariomes_total column
 * @method InventariomesQuery orderByInventariomesTotalimportefisico($order = Criteria::ASC) Order by the inventariomes_totalimportefisico column
 *
 * @method InventariomesQuery groupByIdinventariomes() Group by the idinventariomes column
 * @method InventariomesQuery groupByIdempresa() Group by the idempresa column
 * @method InventariomesQuery groupByIdsucursal() Group by the idsucursal column
 * @method InventariomesQuery groupByIdalmacen() Group by the idalmacen column
 * @method InventariomesQuery groupByIdusuario() Group by the idusuario column
 * @method InventariomesQuery groupByIdauditor() Group by the idauditor column
 * @method InventariomesQuery groupByInventariomesFecha() Group by the inventariomes_fecha column
 * @method InventariomesQuery groupByInventariomesRevisada() Group by the inventariomes_revisada column
 * @method InventariomesQuery groupByInventariomesFinalalimentos() Group by the inventariomes_finalalimentos column
 * @method InventariomesQuery groupByInventariomesFinalbebidas() Group by the inventariomes_finalbebidas column
 * @method InventariomesQuery groupByInventariomesFaltantes() Group by the inventariomes_faltantes column
 * @method InventariomesQuery groupByInventariomesSobrantes() Group by the inventariomes_sobrantes column
 * @method InventariomesQuery groupByInventariomesTotal() Group by the inventariomes_total column
 * @method InventariomesQuery groupByInventariomesTotalimportefisico() Group by the inventariomes_totalimportefisico column
 *
 * @method InventariomesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method InventariomesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method InventariomesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method InventariomesQuery leftJoinAlmacen($relationAlias = null) Adds a LEFT JOIN clause to the query using the Almacen relation
 * @method InventariomesQuery rightJoinAlmacen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Almacen relation
 * @method InventariomesQuery innerJoinAlmacen($relationAlias = null) Adds a INNER JOIN clause to the query using the Almacen relation
 *
 * @method InventariomesQuery leftJoinUsuarioRelatedByIdauditor($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioRelatedByIdauditor relation
 * @method InventariomesQuery rightJoinUsuarioRelatedByIdauditor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioRelatedByIdauditor relation
 * @method InventariomesQuery innerJoinUsuarioRelatedByIdauditor($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioRelatedByIdauditor relation
 *
 * @method InventariomesQuery leftJoinEmpresa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empresa relation
 * @method InventariomesQuery rightJoinEmpresa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empresa relation
 * @method InventariomesQuery innerJoinEmpresa($relationAlias = null) Adds a INNER JOIN clause to the query using the Empresa relation
 *
 * @method InventariomesQuery leftJoinSucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursal relation
 * @method InventariomesQuery rightJoinSucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursal relation
 * @method InventariomesQuery innerJoinSucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursal relation
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
 * @method Inventariomes findOneByIdempresa(int $idempresa) Return the first Inventariomes filtered by the idempresa column
 * @method Inventariomes findOneByIdsucursal(int $idsucursal) Return the first Inventariomes filtered by the idsucursal column
 * @method Inventariomes findOneByIdalmacen(int $idalmacen) Return the first Inventariomes filtered by the idalmacen column
 * @method Inventariomes findOneByIdusuario(int $idusuario) Return the first Inventariomes filtered by the idusuario column
 * @method Inventariomes findOneByIdauditor(int $idauditor) Return the first Inventariomes filtered by the idauditor column
 * @method Inventariomes findOneByInventariomesFecha(string $inventariomes_fecha) Return the first Inventariomes filtered by the inventariomes_fecha column
 * @method Inventariomes findOneByInventariomesRevisada(boolean $inventariomes_revisada) Return the first Inventariomes filtered by the inventariomes_revisada column
 * @method Inventariomes findOneByInventariomesFinalalimentos(string $inventariomes_finalalimentos) Return the first Inventariomes filtered by the inventariomes_finalalimentos column
 * @method Inventariomes findOneByInventariomesFinalbebidas(string $inventariomes_finalbebidas) Return the first Inventariomes filtered by the inventariomes_finalbebidas column
 * @method Inventariomes findOneByInventariomesFaltantes(string $inventariomes_faltantes) Return the first Inventariomes filtered by the inventariomes_faltantes column
 * @method Inventariomes findOneByInventariomesSobrantes(string $inventariomes_sobrantes) Return the first Inventariomes filtered by the inventariomes_sobrantes column
 * @method Inventariomes findOneByInventariomesTotal(string $inventariomes_total) Return the first Inventariomes filtered by the inventariomes_total column
 * @method Inventariomes findOneByInventariomesTotalimportefisico(string $inventariomes_totalimportefisico) Return the first Inventariomes filtered by the inventariomes_totalimportefisico column
 *
 * @method array findByIdinventariomes(int $idinventariomes) Return Inventariomes objects filtered by the idinventariomes column
 * @method array findByIdempresa(int $idempresa) Return Inventariomes objects filtered by the idempresa column
 * @method array findByIdsucursal(int $idsucursal) Return Inventariomes objects filtered by the idsucursal column
 * @method array findByIdalmacen(int $idalmacen) Return Inventariomes objects filtered by the idalmacen column
 * @method array findByIdusuario(int $idusuario) Return Inventariomes objects filtered by the idusuario column
 * @method array findByIdauditor(int $idauditor) Return Inventariomes objects filtered by the idauditor column
 * @method array findByInventariomesFecha(string $inventariomes_fecha) Return Inventariomes objects filtered by the inventariomes_fecha column
 * @method array findByInventariomesRevisada(boolean $inventariomes_revisada) Return Inventariomes objects filtered by the inventariomes_revisada column
 * @method array findByInventariomesFinalalimentos(string $inventariomes_finalalimentos) Return Inventariomes objects filtered by the inventariomes_finalalimentos column
 * @method array findByInventariomesFinalbebidas(string $inventariomes_finalbebidas) Return Inventariomes objects filtered by the inventariomes_finalbebidas column
 * @method array findByInventariomesFaltantes(string $inventariomes_faltantes) Return Inventariomes objects filtered by the inventariomes_faltantes column
 * @method array findByInventariomesSobrantes(string $inventariomes_sobrantes) Return Inventariomes objects filtered by the inventariomes_sobrantes column
 * @method array findByInventariomesTotal(string $inventariomes_total) Return Inventariomes objects filtered by the inventariomes_total column
 * @method array findByInventariomesTotalimportefisico(string $inventariomes_totalimportefisico) Return Inventariomes objects filtered by the inventariomes_totalimportefisico column
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
        $sql = 'SELECT `idinventariomes`, `idempresa`, `idsucursal`, `idalmacen`, `idusuario`, `idauditor`, `inventariomes_fecha`, `inventariomes_revisada`, `inventariomes_finalalimentos`, `inventariomes_finalbebidas`, `inventariomes_faltantes`, `inventariomes_sobrantes`, `inventariomes_total`, `inventariomes_totalimportefisico` FROM `inventariomes` WHERE `idinventariomes` = :p0';
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
     * @see       filterBySucursal()
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
     * @return InventariomesQuery The current query, for fluid interface
     */
    public function filterByIdalmacen($idalmacen = null, $comparison = null)
    {
        if (is_array($idalmacen)) {
            $useMinMax = false;
            if (isset($idalmacen['min'])) {
                $this->addUsingAlias(InventariomesPeer::IDALMACEN, $idalmacen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idalmacen['max'])) {
                $this->addUsingAlias(InventariomesPeer::IDALMACEN, $idalmacen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesPeer::IDALMACEN, $idalmacen, $comparison);
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
     * Filter the query on the inventariomes_finalalimentos column
     *
     * Example usage:
     * <code>
     * $query->filterByInventariomesFinalalimentos(1234); // WHERE inventariomes_finalalimentos = 1234
     * $query->filterByInventariomesFinalalimentos(array(12, 34)); // WHERE inventariomes_finalalimentos IN (12, 34)
     * $query->filterByInventariomesFinalalimentos(array('min' => 12)); // WHERE inventariomes_finalalimentos >= 12
     * $query->filterByInventariomesFinalalimentos(array('max' => 12)); // WHERE inventariomes_finalalimentos <= 12
     * </code>
     *
     * @param     mixed $inventariomesFinalalimentos The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InventariomesQuery The current query, for fluid interface
     */
    public function filterByInventariomesFinalalimentos($inventariomesFinalalimentos = null, $comparison = null)
    {
        if (is_array($inventariomesFinalalimentos)) {
            $useMinMax = false;
            if (isset($inventariomesFinalalimentos['min'])) {
                $this->addUsingAlias(InventariomesPeer::INVENTARIOMES_FINALALIMENTOS, $inventariomesFinalalimentos['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inventariomesFinalalimentos['max'])) {
                $this->addUsingAlias(InventariomesPeer::INVENTARIOMES_FINALALIMENTOS, $inventariomesFinalalimentos['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesPeer::INVENTARIOMES_FINALALIMENTOS, $inventariomesFinalalimentos, $comparison);
    }

    /**
     * Filter the query on the inventariomes_finalbebidas column
     *
     * Example usage:
     * <code>
     * $query->filterByInventariomesFinalbebidas(1234); // WHERE inventariomes_finalbebidas = 1234
     * $query->filterByInventariomesFinalbebidas(array(12, 34)); // WHERE inventariomes_finalbebidas IN (12, 34)
     * $query->filterByInventariomesFinalbebidas(array('min' => 12)); // WHERE inventariomes_finalbebidas >= 12
     * $query->filterByInventariomesFinalbebidas(array('max' => 12)); // WHERE inventariomes_finalbebidas <= 12
     * </code>
     *
     * @param     mixed $inventariomesFinalbebidas The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InventariomesQuery The current query, for fluid interface
     */
    public function filterByInventariomesFinalbebidas($inventariomesFinalbebidas = null, $comparison = null)
    {
        if (is_array($inventariomesFinalbebidas)) {
            $useMinMax = false;
            if (isset($inventariomesFinalbebidas['min'])) {
                $this->addUsingAlias(InventariomesPeer::INVENTARIOMES_FINALBEBIDAS, $inventariomesFinalbebidas['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inventariomesFinalbebidas['max'])) {
                $this->addUsingAlias(InventariomesPeer::INVENTARIOMES_FINALBEBIDAS, $inventariomesFinalbebidas['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesPeer::INVENTARIOMES_FINALBEBIDAS, $inventariomesFinalbebidas, $comparison);
    }

    /**
     * Filter the query on the inventariomes_faltantes column
     *
     * Example usage:
     * <code>
     * $query->filterByInventariomesFaltantes(1234); // WHERE inventariomes_faltantes = 1234
     * $query->filterByInventariomesFaltantes(array(12, 34)); // WHERE inventariomes_faltantes IN (12, 34)
     * $query->filterByInventariomesFaltantes(array('min' => 12)); // WHERE inventariomes_faltantes >= 12
     * $query->filterByInventariomesFaltantes(array('max' => 12)); // WHERE inventariomes_faltantes <= 12
     * </code>
     *
     * @param     mixed $inventariomesFaltantes The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InventariomesQuery The current query, for fluid interface
     */
    public function filterByInventariomesFaltantes($inventariomesFaltantes = null, $comparison = null)
    {
        if (is_array($inventariomesFaltantes)) {
            $useMinMax = false;
            if (isset($inventariomesFaltantes['min'])) {
                $this->addUsingAlias(InventariomesPeer::INVENTARIOMES_FALTANTES, $inventariomesFaltantes['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inventariomesFaltantes['max'])) {
                $this->addUsingAlias(InventariomesPeer::INVENTARIOMES_FALTANTES, $inventariomesFaltantes['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesPeer::INVENTARIOMES_FALTANTES, $inventariomesFaltantes, $comparison);
    }

    /**
     * Filter the query on the inventariomes_sobrantes column
     *
     * Example usage:
     * <code>
     * $query->filterByInventariomesSobrantes(1234); // WHERE inventariomes_sobrantes = 1234
     * $query->filterByInventariomesSobrantes(array(12, 34)); // WHERE inventariomes_sobrantes IN (12, 34)
     * $query->filterByInventariomesSobrantes(array('min' => 12)); // WHERE inventariomes_sobrantes >= 12
     * $query->filterByInventariomesSobrantes(array('max' => 12)); // WHERE inventariomes_sobrantes <= 12
     * </code>
     *
     * @param     mixed $inventariomesSobrantes The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InventariomesQuery The current query, for fluid interface
     */
    public function filterByInventariomesSobrantes($inventariomesSobrantes = null, $comparison = null)
    {
        if (is_array($inventariomesSobrantes)) {
            $useMinMax = false;
            if (isset($inventariomesSobrantes['min'])) {
                $this->addUsingAlias(InventariomesPeer::INVENTARIOMES_SOBRANTES, $inventariomesSobrantes['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inventariomesSobrantes['max'])) {
                $this->addUsingAlias(InventariomesPeer::INVENTARIOMES_SOBRANTES, $inventariomesSobrantes['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesPeer::INVENTARIOMES_SOBRANTES, $inventariomesSobrantes, $comparison);
    }

    /**
     * Filter the query on the inventariomes_total column
     *
     * Example usage:
     * <code>
     * $query->filterByInventariomesTotal(1234); // WHERE inventariomes_total = 1234
     * $query->filterByInventariomesTotal(array(12, 34)); // WHERE inventariomes_total IN (12, 34)
     * $query->filterByInventariomesTotal(array('min' => 12)); // WHERE inventariomes_total >= 12
     * $query->filterByInventariomesTotal(array('max' => 12)); // WHERE inventariomes_total <= 12
     * </code>
     *
     * @param     mixed $inventariomesTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InventariomesQuery The current query, for fluid interface
     */
    public function filterByInventariomesTotal($inventariomesTotal = null, $comparison = null)
    {
        if (is_array($inventariomesTotal)) {
            $useMinMax = false;
            if (isset($inventariomesTotal['min'])) {
                $this->addUsingAlias(InventariomesPeer::INVENTARIOMES_TOTAL, $inventariomesTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inventariomesTotal['max'])) {
                $this->addUsingAlias(InventariomesPeer::INVENTARIOMES_TOTAL, $inventariomesTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesPeer::INVENTARIOMES_TOTAL, $inventariomesTotal, $comparison);
    }

    /**
     * Filter the query on the inventariomes_totalimportefisico column
     *
     * Example usage:
     * <code>
     * $query->filterByInventariomesTotalimportefisico(1234); // WHERE inventariomes_totalimportefisico = 1234
     * $query->filterByInventariomesTotalimportefisico(array(12, 34)); // WHERE inventariomes_totalimportefisico IN (12, 34)
     * $query->filterByInventariomesTotalimportefisico(array('min' => 12)); // WHERE inventariomes_totalimportefisico >= 12
     * $query->filterByInventariomesTotalimportefisico(array('max' => 12)); // WHERE inventariomes_totalimportefisico <= 12
     * </code>
     *
     * @param     mixed $inventariomesTotalimportefisico The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InventariomesQuery The current query, for fluid interface
     */
    public function filterByInventariomesTotalimportefisico($inventariomesTotalimportefisico = null, $comparison = null)
    {
        if (is_array($inventariomesTotalimportefisico)) {
            $useMinMax = false;
            if (isset($inventariomesTotalimportefisico['min'])) {
                $this->addUsingAlias(InventariomesPeer::INVENTARIOMES_TOTALIMPORTEFISICO, $inventariomesTotalimportefisico['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inventariomesTotalimportefisico['max'])) {
                $this->addUsingAlias(InventariomesPeer::INVENTARIOMES_TOTALIMPORTEFISICO, $inventariomesTotalimportefisico['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesPeer::INVENTARIOMES_TOTALIMPORTEFISICO, $inventariomesTotalimportefisico, $comparison);
    }

    /**
     * Filter the query by a related Almacen object
     *
     * @param   Almacen|PropelObjectCollection $almacen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 InventariomesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAlmacen($almacen, $comparison = null)
    {
        if ($almacen instanceof Almacen) {
            return $this
                ->addUsingAlias(InventariomesPeer::IDALMACEN, $almacen->getIdalmacen(), $comparison);
        } elseif ($almacen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InventariomesPeer::IDALMACEN, $almacen->toKeyValue('PrimaryKey', 'Idalmacen'), $comparison);
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
     * @return InventariomesQuery The current query, for fluid interface
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
     * Filter the query by a related Empresa object
     *
     * @param   Empresa|PropelObjectCollection $empresa The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 InventariomesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpresa($empresa, $comparison = null)
    {
        if ($empresa instanceof Empresa) {
            return $this
                ->addUsingAlias(InventariomesPeer::IDEMPRESA, $empresa->getIdempresa(), $comparison);
        } elseif ($empresa instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InventariomesPeer::IDEMPRESA, $empresa->toKeyValue('PrimaryKey', 'Idempresa'), $comparison);
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
     * @return InventariomesQuery The current query, for fluid interface
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
     * @return                 InventariomesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursal($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(InventariomesPeer::IDSUCURSAL, $sucursal->getIdsucursal(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InventariomesPeer::IDSUCURSAL, $sucursal->toKeyValue('PrimaryKey', 'Idsucursal'), $comparison);
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
     * @return InventariomesQuery The current query, for fluid interface
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
