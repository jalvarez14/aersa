<?php


/**
 * Base class that represents a query for the 'trabajadorpromedio' table.
 *
 *
 *
 * @method TrabajadorpromedioQuery orderByIdtrabajadorpromedio($order = Criteria::ASC) Order by the idtrabajadorpromedio column
 * @method TrabajadorpromedioQuery orderByIdempresa($order = Criteria::ASC) Order by the idempresa column
 * @method TrabajadorpromedioQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method TrabajadorpromedioQuery orderByTrabajadorpromedioAnio($order = Criteria::ASC) Order by the trabajadorpromedio_anio column
 * @method TrabajadorpromedioQuery orderByTrabajadorpromedioMes($order = Criteria::ASC) Order by the trabajadorpromedio_mes column
 * @method TrabajadorpromedioQuery orderByTrabajadorpromedioEmpleados($order = Criteria::ASC) Order by the trabajadorpromedio_empleados column
 *
 * @method TrabajadorpromedioQuery groupByIdtrabajadorpromedio() Group by the idtrabajadorpromedio column
 * @method TrabajadorpromedioQuery groupByIdempresa() Group by the idempresa column
 * @method TrabajadorpromedioQuery groupByIdsucursal() Group by the idsucursal column
 * @method TrabajadorpromedioQuery groupByTrabajadorpromedioAnio() Group by the trabajadorpromedio_anio column
 * @method TrabajadorpromedioQuery groupByTrabajadorpromedioMes() Group by the trabajadorpromedio_mes column
 * @method TrabajadorpromedioQuery groupByTrabajadorpromedioEmpleados() Group by the trabajadorpromedio_empleados column
 *
 * @method TrabajadorpromedioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TrabajadorpromedioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TrabajadorpromedioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TrabajadorpromedioQuery leftJoinEmpresa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empresa relation
 * @method TrabajadorpromedioQuery rightJoinEmpresa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empresa relation
 * @method TrabajadorpromedioQuery innerJoinEmpresa($relationAlias = null) Adds a INNER JOIN clause to the query using the Empresa relation
 *
 * @method TrabajadorpromedioQuery leftJoinSucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursal relation
 * @method TrabajadorpromedioQuery rightJoinSucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursal relation
 * @method TrabajadorpromedioQuery innerJoinSucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursal relation
 *
 * @method Trabajadorpromedio findOne(PropelPDO $con = null) Return the first Trabajadorpromedio matching the query
 * @method Trabajadorpromedio findOneOrCreate(PropelPDO $con = null) Return the first Trabajadorpromedio matching the query, or a new Trabajadorpromedio object populated from the query conditions when no match is found
 *
 * @method Trabajadorpromedio findOneByIdempresa(int $idempresa) Return the first Trabajadorpromedio filtered by the idempresa column
 * @method Trabajadorpromedio findOneByIdsucursal(int $idsucursal) Return the first Trabajadorpromedio filtered by the idsucursal column
 * @method Trabajadorpromedio findOneByTrabajadorpromedioAnio(int $trabajadorpromedio_anio) Return the first Trabajadorpromedio filtered by the trabajadorpromedio_anio column
 * @method Trabajadorpromedio findOneByTrabajadorpromedioMes(int $trabajadorpromedio_mes) Return the first Trabajadorpromedio filtered by the trabajadorpromedio_mes column
 * @method Trabajadorpromedio findOneByTrabajadorpromedioEmpleados(double $trabajadorpromedio_empleados) Return the first Trabajadorpromedio filtered by the trabajadorpromedio_empleados column
 *
 * @method array findByIdtrabajadorpromedio(int $idtrabajadorpromedio) Return Trabajadorpromedio objects filtered by the idtrabajadorpromedio column
 * @method array findByIdempresa(int $idempresa) Return Trabajadorpromedio objects filtered by the idempresa column
 * @method array findByIdsucursal(int $idsucursal) Return Trabajadorpromedio objects filtered by the idsucursal column
 * @method array findByTrabajadorpromedioAnio(int $trabajadorpromedio_anio) Return Trabajadorpromedio objects filtered by the trabajadorpromedio_anio column
 * @method array findByTrabajadorpromedioMes(int $trabajadorpromedio_mes) Return Trabajadorpromedio objects filtered by the trabajadorpromedio_mes column
 * @method array findByTrabajadorpromedioEmpleados(double $trabajadorpromedio_empleados) Return Trabajadorpromedio objects filtered by the trabajadorpromedio_empleados column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseTrabajadorpromedioQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTrabajadorpromedioQuery object.
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
            $modelName = 'Trabajadorpromedio';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TrabajadorpromedioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TrabajadorpromedioQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TrabajadorpromedioQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TrabajadorpromedioQuery) {
            return $criteria;
        }
        $query = new TrabajadorpromedioQuery(null, null, $modelAlias);

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
     * @return   Trabajadorpromedio|Trabajadorpromedio[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TrabajadorpromedioPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TrabajadorpromedioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Trabajadorpromedio A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdtrabajadorpromedio($key, $con = null)
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
     * @return                 Trabajadorpromedio A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idtrabajadorpromedio`, `idempresa`, `idsucursal`, `trabajadorpromedio_anio`, `trabajadorpromedio_mes`, `trabajadorpromedio_empleados` FROM `trabajadorpromedio` WHERE `idtrabajadorpromedio` = :p0';
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
            $obj = new Trabajadorpromedio();
            $obj->hydrate($row);
            TrabajadorpromedioPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Trabajadorpromedio|Trabajadorpromedio[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Trabajadorpromedio[]|mixed the list of results, formatted by the current formatter
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
     * @return TrabajadorpromedioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TrabajadorpromedioPeer::IDTRABAJADORPROMEDIO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TrabajadorpromedioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TrabajadorpromedioPeer::IDTRABAJADORPROMEDIO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idtrabajadorpromedio column
     *
     * Example usage:
     * <code>
     * $query->filterByIdtrabajadorpromedio(1234); // WHERE idtrabajadorpromedio = 1234
     * $query->filterByIdtrabajadorpromedio(array(12, 34)); // WHERE idtrabajadorpromedio IN (12, 34)
     * $query->filterByIdtrabajadorpromedio(array('min' => 12)); // WHERE idtrabajadorpromedio >= 12
     * $query->filterByIdtrabajadorpromedio(array('max' => 12)); // WHERE idtrabajadorpromedio <= 12
     * </code>
     *
     * @param     mixed $idtrabajadorpromedio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TrabajadorpromedioQuery The current query, for fluid interface
     */
    public function filterByIdtrabajadorpromedio($idtrabajadorpromedio = null, $comparison = null)
    {
        if (is_array($idtrabajadorpromedio)) {
            $useMinMax = false;
            if (isset($idtrabajadorpromedio['min'])) {
                $this->addUsingAlias(TrabajadorpromedioPeer::IDTRABAJADORPROMEDIO, $idtrabajadorpromedio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idtrabajadorpromedio['max'])) {
                $this->addUsingAlias(TrabajadorpromedioPeer::IDTRABAJADORPROMEDIO, $idtrabajadorpromedio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TrabajadorpromedioPeer::IDTRABAJADORPROMEDIO, $idtrabajadorpromedio, $comparison);
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
     * @return TrabajadorpromedioQuery The current query, for fluid interface
     */
    public function filterByIdempresa($idempresa = null, $comparison = null)
    {
        if (is_array($idempresa)) {
            $useMinMax = false;
            if (isset($idempresa['min'])) {
                $this->addUsingAlias(TrabajadorpromedioPeer::IDEMPRESA, $idempresa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempresa['max'])) {
                $this->addUsingAlias(TrabajadorpromedioPeer::IDEMPRESA, $idempresa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TrabajadorpromedioPeer::IDEMPRESA, $idempresa, $comparison);
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
     * @return TrabajadorpromedioQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(TrabajadorpromedioPeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(TrabajadorpromedioPeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TrabajadorpromedioPeer::IDSUCURSAL, $idsucursal, $comparison);
    }

    /**
     * Filter the query on the trabajadorpromedio_anio column
     *
     * Example usage:
     * <code>
     * $query->filterByTrabajadorpromedioAnio(1234); // WHERE trabajadorpromedio_anio = 1234
     * $query->filterByTrabajadorpromedioAnio(array(12, 34)); // WHERE trabajadorpromedio_anio IN (12, 34)
     * $query->filterByTrabajadorpromedioAnio(array('min' => 12)); // WHERE trabajadorpromedio_anio >= 12
     * $query->filterByTrabajadorpromedioAnio(array('max' => 12)); // WHERE trabajadorpromedio_anio <= 12
     * </code>
     *
     * @param     mixed $trabajadorpromedioAnio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TrabajadorpromedioQuery The current query, for fluid interface
     */
    public function filterByTrabajadorpromedioAnio($trabajadorpromedioAnio = null, $comparison = null)
    {
        if (is_array($trabajadorpromedioAnio)) {
            $useMinMax = false;
            if (isset($trabajadorpromedioAnio['min'])) {
                $this->addUsingAlias(TrabajadorpromedioPeer::TRABAJADORPROMEDIO_ANIO, $trabajadorpromedioAnio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($trabajadorpromedioAnio['max'])) {
                $this->addUsingAlias(TrabajadorpromedioPeer::TRABAJADORPROMEDIO_ANIO, $trabajadorpromedioAnio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TrabajadorpromedioPeer::TRABAJADORPROMEDIO_ANIO, $trabajadorpromedioAnio, $comparison);
    }

    /**
     * Filter the query on the trabajadorpromedio_mes column
     *
     * Example usage:
     * <code>
     * $query->filterByTrabajadorpromedioMes(1234); // WHERE trabajadorpromedio_mes = 1234
     * $query->filterByTrabajadorpromedioMes(array(12, 34)); // WHERE trabajadorpromedio_mes IN (12, 34)
     * $query->filterByTrabajadorpromedioMes(array('min' => 12)); // WHERE trabajadorpromedio_mes >= 12
     * $query->filterByTrabajadorpromedioMes(array('max' => 12)); // WHERE trabajadorpromedio_mes <= 12
     * </code>
     *
     * @param     mixed $trabajadorpromedioMes The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TrabajadorpromedioQuery The current query, for fluid interface
     */
    public function filterByTrabajadorpromedioMes($trabajadorpromedioMes = null, $comparison = null)
    {
        if (is_array($trabajadorpromedioMes)) {
            $useMinMax = false;
            if (isset($trabajadorpromedioMes['min'])) {
                $this->addUsingAlias(TrabajadorpromedioPeer::TRABAJADORPROMEDIO_MES, $trabajadorpromedioMes['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($trabajadorpromedioMes['max'])) {
                $this->addUsingAlias(TrabajadorpromedioPeer::TRABAJADORPROMEDIO_MES, $trabajadorpromedioMes['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TrabajadorpromedioPeer::TRABAJADORPROMEDIO_MES, $trabajadorpromedioMes, $comparison);
    }

    /**
     * Filter the query on the trabajadorpromedio_empleados column
     *
     * Example usage:
     * <code>
     * $query->filterByTrabajadorpromedioEmpleados(1234); // WHERE trabajadorpromedio_empleados = 1234
     * $query->filterByTrabajadorpromedioEmpleados(array(12, 34)); // WHERE trabajadorpromedio_empleados IN (12, 34)
     * $query->filterByTrabajadorpromedioEmpleados(array('min' => 12)); // WHERE trabajadorpromedio_empleados >= 12
     * $query->filterByTrabajadorpromedioEmpleados(array('max' => 12)); // WHERE trabajadorpromedio_empleados <= 12
     * </code>
     *
     * @param     mixed $trabajadorpromedioEmpleados The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TrabajadorpromedioQuery The current query, for fluid interface
     */
    public function filterByTrabajadorpromedioEmpleados($trabajadorpromedioEmpleados = null, $comparison = null)
    {
        if (is_array($trabajadorpromedioEmpleados)) {
            $useMinMax = false;
            if (isset($trabajadorpromedioEmpleados['min'])) {
                $this->addUsingAlias(TrabajadorpromedioPeer::TRABAJADORPROMEDIO_EMPLEADOS, $trabajadorpromedioEmpleados['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($trabajadorpromedioEmpleados['max'])) {
                $this->addUsingAlias(TrabajadorpromedioPeer::TRABAJADORPROMEDIO_EMPLEADOS, $trabajadorpromedioEmpleados['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TrabajadorpromedioPeer::TRABAJADORPROMEDIO_EMPLEADOS, $trabajadorpromedioEmpleados, $comparison);
    }

    /**
     * Filter the query by a related Empresa object
     *
     * @param   Empresa|PropelObjectCollection $empresa The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TrabajadorpromedioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpresa($empresa, $comparison = null)
    {
        if ($empresa instanceof Empresa) {
            return $this
                ->addUsingAlias(TrabajadorpromedioPeer::IDEMPRESA, $empresa->getIdempresa(), $comparison);
        } elseif ($empresa instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TrabajadorpromedioPeer::IDEMPRESA, $empresa->toKeyValue('PrimaryKey', 'Idempresa'), $comparison);
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
     * @return TrabajadorpromedioQuery The current query, for fluid interface
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
     * @return                 TrabajadorpromedioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursal($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(TrabajadorpromedioPeer::IDSUCURSAL, $sucursal->getIdsucursal(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TrabajadorpromedioPeer::IDSUCURSAL, $sucursal->toKeyValue('PrimaryKey', 'Idsucursal'), $comparison);
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
     * @return TrabajadorpromedioQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   Trabajadorpromedio $trabajadorpromedio Object to remove from the list of results
     *
     * @return TrabajadorpromedioQuery The current query, for fluid interface
     */
    public function prune($trabajadorpromedio = null)
    {
        if ($trabajadorpromedio) {
            $this->addUsingAlias(TrabajadorpromedioPeer::IDTRABAJADORPROMEDIO, $trabajadorpromedio->getIdtrabajadorpromedio(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
