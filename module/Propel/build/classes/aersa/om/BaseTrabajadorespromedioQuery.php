<?php


/**
 * Base class that represents a query for the 'trabajadorespromedio' table.
 *
 *
 *
 * @method TrabajadorespromedioQuery orderByIdtrabajadorespromedio($order = Criteria::ASC) Order by the idtrabajadorespromedio column
 * @method TrabajadorespromedioQuery orderByIdempresa($order = Criteria::ASC) Order by the idempresa column
 * @method TrabajadorespromedioQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method TrabajadorespromedioQuery orderByTrabajadorespromedioAnio($order = Criteria::ASC) Order by the trabajadorespromedio_anio column
 * @method TrabajadorespromedioQuery orderByTrabajadorespromedioMes($order = Criteria::ASC) Order by the trabajadorespromedio_mes column
 * @method TrabajadorespromedioQuery orderByTrabajadorespromedioCantidad($order = Criteria::ASC) Order by the trabajadorespromedio_cantidad column
 *
 * @method TrabajadorespromedioQuery groupByIdtrabajadorespromedio() Group by the idtrabajadorespromedio column
 * @method TrabajadorespromedioQuery groupByIdempresa() Group by the idempresa column
 * @method TrabajadorespromedioQuery groupByIdsucursal() Group by the idsucursal column
 * @method TrabajadorespromedioQuery groupByTrabajadorespromedioAnio() Group by the trabajadorespromedio_anio column
 * @method TrabajadorespromedioQuery groupByTrabajadorespromedioMes() Group by the trabajadorespromedio_mes column
 * @method TrabajadorespromedioQuery groupByTrabajadorespromedioCantidad() Group by the trabajadorespromedio_cantidad column
 *
 * @method TrabajadorespromedioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TrabajadorespromedioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TrabajadorespromedioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TrabajadorespromedioQuery leftJoinEmpresa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empresa relation
 * @method TrabajadorespromedioQuery rightJoinEmpresa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empresa relation
 * @method TrabajadorespromedioQuery innerJoinEmpresa($relationAlias = null) Adds a INNER JOIN clause to the query using the Empresa relation
 *
 * @method TrabajadorespromedioQuery leftJoinSucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursal relation
 * @method TrabajadorespromedioQuery rightJoinSucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursal relation
 * @method TrabajadorespromedioQuery innerJoinSucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursal relation
 *
 * @method Trabajadorespromedio findOne(PropelPDO $con = null) Return the first Trabajadorespromedio matching the query
 * @method Trabajadorespromedio findOneOrCreate(PropelPDO $con = null) Return the first Trabajadorespromedio matching the query, or a new Trabajadorespromedio object populated from the query conditions when no match is found
 *
 * @method Trabajadorespromedio findOneByIdempresa(int $idempresa) Return the first Trabajadorespromedio filtered by the idempresa column
 * @method Trabajadorespromedio findOneByIdsucursal(int $idsucursal) Return the first Trabajadorespromedio filtered by the idsucursal column
 * @method Trabajadorespromedio findOneByTrabajadorespromedioAnio(int $trabajadorespromedio_anio) Return the first Trabajadorespromedio filtered by the trabajadorespromedio_anio column
 * @method Trabajadorespromedio findOneByTrabajadorespromedioMes(int $trabajadorespromedio_mes) Return the first Trabajadorespromedio filtered by the trabajadorespromedio_mes column
 * @method Trabajadorespromedio findOneByTrabajadorespromedioCantidad(double $trabajadorespromedio_cantidad) Return the first Trabajadorespromedio filtered by the trabajadorespromedio_cantidad column
 *
 * @method array findByIdtrabajadorespromedio(int $idtrabajadorespromedio) Return Trabajadorespromedio objects filtered by the idtrabajadorespromedio column
 * @method array findByIdempresa(int $idempresa) Return Trabajadorespromedio objects filtered by the idempresa column
 * @method array findByIdsucursal(int $idsucursal) Return Trabajadorespromedio objects filtered by the idsucursal column
 * @method array findByTrabajadorespromedioAnio(int $trabajadorespromedio_anio) Return Trabajadorespromedio objects filtered by the trabajadorespromedio_anio column
 * @method array findByTrabajadorespromedioMes(int $trabajadorespromedio_mes) Return Trabajadorespromedio objects filtered by the trabajadorespromedio_mes column
 * @method array findByTrabajadorespromedioCantidad(double $trabajadorespromedio_cantidad) Return Trabajadorespromedio objects filtered by the trabajadorespromedio_cantidad column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseTrabajadorespromedioQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTrabajadorespromedioQuery object.
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
            $modelName = 'Trabajadorespromedio';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TrabajadorespromedioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TrabajadorespromedioQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TrabajadorespromedioQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TrabajadorespromedioQuery) {
            return $criteria;
        }
        $query = new TrabajadorespromedioQuery(null, null, $modelAlias);

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
     * @return   Trabajadorespromedio|Trabajadorespromedio[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TrabajadorespromedioPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TrabajadorespromedioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Trabajadorespromedio A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdtrabajadorespromedio($key, $con = null)
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
     * @return                 Trabajadorespromedio A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idtrabajadorespromedio`, `idempresa`, `idsucursal`, `trabajadorespromedio_anio`, `trabajadorespromedio_mes`, `trabajadorespromedio_cantidad` FROM `trabajadorespromedio` WHERE `idtrabajadorespromedio` = :p0';
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
            $obj = new Trabajadorespromedio();
            $obj->hydrate($row);
            TrabajadorespromedioPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Trabajadorespromedio|Trabajadorespromedio[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Trabajadorespromedio[]|mixed the list of results, formatted by the current formatter
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
     * @return TrabajadorespromedioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TrabajadorespromedioPeer::IDTRABAJADORESPROMEDIO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TrabajadorespromedioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TrabajadorespromedioPeer::IDTRABAJADORESPROMEDIO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idtrabajadorespromedio column
     *
     * Example usage:
     * <code>
     * $query->filterByIdtrabajadorespromedio(1234); // WHERE idtrabajadorespromedio = 1234
     * $query->filterByIdtrabajadorespromedio(array(12, 34)); // WHERE idtrabajadorespromedio IN (12, 34)
     * $query->filterByIdtrabajadorespromedio(array('min' => 12)); // WHERE idtrabajadorespromedio >= 12
     * $query->filterByIdtrabajadorespromedio(array('max' => 12)); // WHERE idtrabajadorespromedio <= 12
     * </code>
     *
     * @param     mixed $idtrabajadorespromedio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TrabajadorespromedioQuery The current query, for fluid interface
     */
    public function filterByIdtrabajadorespromedio($idtrabajadorespromedio = null, $comparison = null)
    {
        if (is_array($idtrabajadorespromedio)) {
            $useMinMax = false;
            if (isset($idtrabajadorespromedio['min'])) {
                $this->addUsingAlias(TrabajadorespromedioPeer::IDTRABAJADORESPROMEDIO, $idtrabajadorespromedio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idtrabajadorespromedio['max'])) {
                $this->addUsingAlias(TrabajadorespromedioPeer::IDTRABAJADORESPROMEDIO, $idtrabajadorespromedio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TrabajadorespromedioPeer::IDTRABAJADORESPROMEDIO, $idtrabajadorespromedio, $comparison);
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
     * @return TrabajadorespromedioQuery The current query, for fluid interface
     */
    public function filterByIdempresa($idempresa = null, $comparison = null)
    {
        if (is_array($idempresa)) {
            $useMinMax = false;
            if (isset($idempresa['min'])) {
                $this->addUsingAlias(TrabajadorespromedioPeer::IDEMPRESA, $idempresa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempresa['max'])) {
                $this->addUsingAlias(TrabajadorespromedioPeer::IDEMPRESA, $idempresa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TrabajadorespromedioPeer::IDEMPRESA, $idempresa, $comparison);
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
     * @return TrabajadorespromedioQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(TrabajadorespromedioPeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(TrabajadorespromedioPeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TrabajadorespromedioPeer::IDSUCURSAL, $idsucursal, $comparison);
    }

    /**
     * Filter the query on the trabajadorespromedio_anio column
     *
     * Example usage:
     * <code>
     * $query->filterByTrabajadorespromedioAnio(1234); // WHERE trabajadorespromedio_anio = 1234
     * $query->filterByTrabajadorespromedioAnio(array(12, 34)); // WHERE trabajadorespromedio_anio IN (12, 34)
     * $query->filterByTrabajadorespromedioAnio(array('min' => 12)); // WHERE trabajadorespromedio_anio >= 12
     * $query->filterByTrabajadorespromedioAnio(array('max' => 12)); // WHERE trabajadorespromedio_anio <= 12
     * </code>
     *
     * @param     mixed $trabajadorespromedioAnio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TrabajadorespromedioQuery The current query, for fluid interface
     */
    public function filterByTrabajadorespromedioAnio($trabajadorespromedioAnio = null, $comparison = null)
    {
        if (is_array($trabajadorespromedioAnio)) {
            $useMinMax = false;
            if (isset($trabajadorespromedioAnio['min'])) {
                $this->addUsingAlias(TrabajadorespromedioPeer::TRABAJADORESPROMEDIO_ANIO, $trabajadorespromedioAnio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($trabajadorespromedioAnio['max'])) {
                $this->addUsingAlias(TrabajadorespromedioPeer::TRABAJADORESPROMEDIO_ANIO, $trabajadorespromedioAnio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TrabajadorespromedioPeer::TRABAJADORESPROMEDIO_ANIO, $trabajadorespromedioAnio, $comparison);
    }

    /**
     * Filter the query on the trabajadorespromedio_mes column
     *
     * Example usage:
     * <code>
     * $query->filterByTrabajadorespromedioMes(1234); // WHERE trabajadorespromedio_mes = 1234
     * $query->filterByTrabajadorespromedioMes(array(12, 34)); // WHERE trabajadorespromedio_mes IN (12, 34)
     * $query->filterByTrabajadorespromedioMes(array('min' => 12)); // WHERE trabajadorespromedio_mes >= 12
     * $query->filterByTrabajadorespromedioMes(array('max' => 12)); // WHERE trabajadorespromedio_mes <= 12
     * </code>
     *
     * @param     mixed $trabajadorespromedioMes The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TrabajadorespromedioQuery The current query, for fluid interface
     */
    public function filterByTrabajadorespromedioMes($trabajadorespromedioMes = null, $comparison = null)
    {
        if (is_array($trabajadorespromedioMes)) {
            $useMinMax = false;
            if (isset($trabajadorespromedioMes['min'])) {
                $this->addUsingAlias(TrabajadorespromedioPeer::TRABAJADORESPROMEDIO_MES, $trabajadorespromedioMes['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($trabajadorespromedioMes['max'])) {
                $this->addUsingAlias(TrabajadorespromedioPeer::TRABAJADORESPROMEDIO_MES, $trabajadorespromedioMes['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TrabajadorespromedioPeer::TRABAJADORESPROMEDIO_MES, $trabajadorespromedioMes, $comparison);
    }

    /**
     * Filter the query on the trabajadorespromedio_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByTrabajadorespromedioCantidad(1234); // WHERE trabajadorespromedio_cantidad = 1234
     * $query->filterByTrabajadorespromedioCantidad(array(12, 34)); // WHERE trabajadorespromedio_cantidad IN (12, 34)
     * $query->filterByTrabajadorespromedioCantidad(array('min' => 12)); // WHERE trabajadorespromedio_cantidad >= 12
     * $query->filterByTrabajadorespromedioCantidad(array('max' => 12)); // WHERE trabajadorespromedio_cantidad <= 12
     * </code>
     *
     * @param     mixed $trabajadorespromedioCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TrabajadorespromedioQuery The current query, for fluid interface
     */
    public function filterByTrabajadorespromedioCantidad($trabajadorespromedioCantidad = null, $comparison = null)
    {
        if (is_array($trabajadorespromedioCantidad)) {
            $useMinMax = false;
            if (isset($trabajadorespromedioCantidad['min'])) {
                $this->addUsingAlias(TrabajadorespromedioPeer::TRABAJADORESPROMEDIO_CANTIDAD, $trabajadorespromedioCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($trabajadorespromedioCantidad['max'])) {
                $this->addUsingAlias(TrabajadorespromedioPeer::TRABAJADORESPROMEDIO_CANTIDAD, $trabajadorespromedioCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TrabajadorespromedioPeer::TRABAJADORESPROMEDIO_CANTIDAD, $trabajadorespromedioCantidad, $comparison);
    }

    /**
     * Filter the query by a related Empresa object
     *
     * @param   Empresa|PropelObjectCollection $empresa The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TrabajadorespromedioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpresa($empresa, $comparison = null)
    {
        if ($empresa instanceof Empresa) {
            return $this
                ->addUsingAlias(TrabajadorespromedioPeer::IDEMPRESA, $empresa->getIdempresa(), $comparison);
        } elseif ($empresa instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TrabajadorespromedioPeer::IDEMPRESA, $empresa->toKeyValue('PrimaryKey', 'Idempresa'), $comparison);
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
     * @return TrabajadorespromedioQuery The current query, for fluid interface
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
     * @return                 TrabajadorespromedioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursal($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(TrabajadorespromedioPeer::IDSUCURSAL, $sucursal->getIdsucursal(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TrabajadorespromedioPeer::IDSUCURSAL, $sucursal->toKeyValue('PrimaryKey', 'Idsucursal'), $comparison);
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
     * @return TrabajadorespromedioQuery The current query, for fluid interface
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
     * @param   Trabajadorespromedio $trabajadorespromedio Object to remove from the list of results
     *
     * @return TrabajadorespromedioQuery The current query, for fluid interface
     */
    public function prune($trabajadorespromedio = null)
    {
        if ($trabajadorespromedio) {
            $this->addUsingAlias(TrabajadorespromedioPeer::IDTRABAJADORESPROMEDIO, $trabajadorespromedio->getIdtrabajadorespromedio(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
