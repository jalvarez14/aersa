<?php


/**
 * Base class that represents a query for the 'semanarevisada' table.
 *
 *
 *
 * @method SemanarevisadaQuery orderByIdsemanarevisada($order = Criteria::ASC) Order by the idsemanarevisada column
 * @method SemanarevisadaQuery orderByIdempresa($order = Criteria::ASC) Order by the idempresa column
 * @method SemanarevisadaQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method SemanarevisadaQuery orderBySemanarevisadaAnio($order = Criteria::ASC) Order by the semanarevisada_anio column
 * @method SemanarevisadaQuery orderBySemanarevisadaSemana($order = Criteria::ASC) Order by the semanarevisada_semana column
 * @method SemanarevisadaQuery orderBySemanarevisadaEstatus($order = Criteria::ASC) Order by the semanarevisada_estatus column
 *
 * @method SemanarevisadaQuery groupByIdsemanarevisada() Group by the idsemanarevisada column
 * @method SemanarevisadaQuery groupByIdempresa() Group by the idempresa column
 * @method SemanarevisadaQuery groupByIdsucursal() Group by the idsucursal column
 * @method SemanarevisadaQuery groupBySemanarevisadaAnio() Group by the semanarevisada_anio column
 * @method SemanarevisadaQuery groupBySemanarevisadaSemana() Group by the semanarevisada_semana column
 * @method SemanarevisadaQuery groupBySemanarevisadaEstatus() Group by the semanarevisada_estatus column
 *
 * @method SemanarevisadaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SemanarevisadaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SemanarevisadaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SemanarevisadaQuery leftJoinEmpresa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empresa relation
 * @method SemanarevisadaQuery rightJoinEmpresa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empresa relation
 * @method SemanarevisadaQuery innerJoinEmpresa($relationAlias = null) Adds a INNER JOIN clause to the query using the Empresa relation
 *
 * @method SemanarevisadaQuery leftJoinSucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursal relation
 * @method SemanarevisadaQuery rightJoinSucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursal relation
 * @method SemanarevisadaQuery innerJoinSucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursal relation
 *
 * @method Semanarevisada findOne(PropelPDO $con = null) Return the first Semanarevisada matching the query
 * @method Semanarevisada findOneOrCreate(PropelPDO $con = null) Return the first Semanarevisada matching the query, or a new Semanarevisada object populated from the query conditions when no match is found
 *
 * @method Semanarevisada findOneByIdempresa(int $idempresa) Return the first Semanarevisada filtered by the idempresa column
 * @method Semanarevisada findOneByIdsucursal(int $idsucursal) Return the first Semanarevisada filtered by the idsucursal column
 * @method Semanarevisada findOneBySemanarevisadaAnio(int $semanarevisada_anio) Return the first Semanarevisada filtered by the semanarevisada_anio column
 * @method Semanarevisada findOneBySemanarevisadaSemana(int $semanarevisada_semana) Return the first Semanarevisada filtered by the semanarevisada_semana column
 * @method Semanarevisada findOneBySemanarevisadaEstatus(boolean $semanarevisada_estatus) Return the first Semanarevisada filtered by the semanarevisada_estatus column
 *
 * @method array findByIdsemanarevisada(int $idsemanarevisada) Return Semanarevisada objects filtered by the idsemanarevisada column
 * @method array findByIdempresa(int $idempresa) Return Semanarevisada objects filtered by the idempresa column
 * @method array findByIdsucursal(int $idsucursal) Return Semanarevisada objects filtered by the idsucursal column
 * @method array findBySemanarevisadaAnio(int $semanarevisada_anio) Return Semanarevisada objects filtered by the semanarevisada_anio column
 * @method array findBySemanarevisadaSemana(int $semanarevisada_semana) Return Semanarevisada objects filtered by the semanarevisada_semana column
 * @method array findBySemanarevisadaEstatus(boolean $semanarevisada_estatus) Return Semanarevisada objects filtered by the semanarevisada_estatus column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseSemanarevisadaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSemanarevisadaQuery object.
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
            $modelName = 'Semanarevisada';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SemanarevisadaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SemanarevisadaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SemanarevisadaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SemanarevisadaQuery) {
            return $criteria;
        }
        $query = new SemanarevisadaQuery(null, null, $modelAlias);

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
     * @return   Semanarevisada|Semanarevisada[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SemanarevisadaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SemanarevisadaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Semanarevisada A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdsemanarevisada($key, $con = null)
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
     * @return                 Semanarevisada A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idsemanarevisada`, `idempresa`, `idsucursal`, `semanarevisada_anio`, `semanarevisada_semana`, `semanarevisada_estatus` FROM `semanarevisada` WHERE `idsemanarevisada` = :p0';
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
            $obj = new Semanarevisada();
            $obj->hydrate($row);
            SemanarevisadaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Semanarevisada|Semanarevisada[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Semanarevisada[]|mixed the list of results, formatted by the current formatter
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
     * @return SemanarevisadaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SemanarevisadaPeer::IDSEMANAREVISADA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SemanarevisadaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SemanarevisadaPeer::IDSEMANAREVISADA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idsemanarevisada column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsemanarevisada(1234); // WHERE idsemanarevisada = 1234
     * $query->filterByIdsemanarevisada(array(12, 34)); // WHERE idsemanarevisada IN (12, 34)
     * $query->filterByIdsemanarevisada(array('min' => 12)); // WHERE idsemanarevisada >= 12
     * $query->filterByIdsemanarevisada(array('max' => 12)); // WHERE idsemanarevisada <= 12
     * </code>
     *
     * @param     mixed $idsemanarevisada The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SemanarevisadaQuery The current query, for fluid interface
     */
    public function filterByIdsemanarevisada($idsemanarevisada = null, $comparison = null)
    {
        if (is_array($idsemanarevisada)) {
            $useMinMax = false;
            if (isset($idsemanarevisada['min'])) {
                $this->addUsingAlias(SemanarevisadaPeer::IDSEMANAREVISADA, $idsemanarevisada['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsemanarevisada['max'])) {
                $this->addUsingAlias(SemanarevisadaPeer::IDSEMANAREVISADA, $idsemanarevisada['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SemanarevisadaPeer::IDSEMANAREVISADA, $idsemanarevisada, $comparison);
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
     * @return SemanarevisadaQuery The current query, for fluid interface
     */
    public function filterByIdempresa($idempresa = null, $comparison = null)
    {
        if (is_array($idempresa)) {
            $useMinMax = false;
            if (isset($idempresa['min'])) {
                $this->addUsingAlias(SemanarevisadaPeer::IDEMPRESA, $idempresa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempresa['max'])) {
                $this->addUsingAlias(SemanarevisadaPeer::IDEMPRESA, $idempresa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SemanarevisadaPeer::IDEMPRESA, $idempresa, $comparison);
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
     * @return SemanarevisadaQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(SemanarevisadaPeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(SemanarevisadaPeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SemanarevisadaPeer::IDSUCURSAL, $idsucursal, $comparison);
    }

    /**
     * Filter the query on the semanarevisada_anio column
     *
     * Example usage:
     * <code>
     * $query->filterBySemanarevisadaAnio(1234); // WHERE semanarevisada_anio = 1234
     * $query->filterBySemanarevisadaAnio(array(12, 34)); // WHERE semanarevisada_anio IN (12, 34)
     * $query->filterBySemanarevisadaAnio(array('min' => 12)); // WHERE semanarevisada_anio >= 12
     * $query->filterBySemanarevisadaAnio(array('max' => 12)); // WHERE semanarevisada_anio <= 12
     * </code>
     *
     * @param     mixed $semanarevisadaAnio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SemanarevisadaQuery The current query, for fluid interface
     */
    public function filterBySemanarevisadaAnio($semanarevisadaAnio = null, $comparison = null)
    {
        if (is_array($semanarevisadaAnio)) {
            $useMinMax = false;
            if (isset($semanarevisadaAnio['min'])) {
                $this->addUsingAlias(SemanarevisadaPeer::SEMANAREVISADA_ANIO, $semanarevisadaAnio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($semanarevisadaAnio['max'])) {
                $this->addUsingAlias(SemanarevisadaPeer::SEMANAREVISADA_ANIO, $semanarevisadaAnio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SemanarevisadaPeer::SEMANAREVISADA_ANIO, $semanarevisadaAnio, $comparison);
    }

    /**
     * Filter the query on the semanarevisada_semana column
     *
     * Example usage:
     * <code>
     * $query->filterBySemanarevisadaSemana(1234); // WHERE semanarevisada_semana = 1234
     * $query->filterBySemanarevisadaSemana(array(12, 34)); // WHERE semanarevisada_semana IN (12, 34)
     * $query->filterBySemanarevisadaSemana(array('min' => 12)); // WHERE semanarevisada_semana >= 12
     * $query->filterBySemanarevisadaSemana(array('max' => 12)); // WHERE semanarevisada_semana <= 12
     * </code>
     *
     * @param     mixed $semanarevisadaSemana The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SemanarevisadaQuery The current query, for fluid interface
     */
    public function filterBySemanarevisadaSemana($semanarevisadaSemana = null, $comparison = null)
    {
        if (is_array($semanarevisadaSemana)) {
            $useMinMax = false;
            if (isset($semanarevisadaSemana['min'])) {
                $this->addUsingAlias(SemanarevisadaPeer::SEMANAREVISADA_SEMANA, $semanarevisadaSemana['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($semanarevisadaSemana['max'])) {
                $this->addUsingAlias(SemanarevisadaPeer::SEMANAREVISADA_SEMANA, $semanarevisadaSemana['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SemanarevisadaPeer::SEMANAREVISADA_SEMANA, $semanarevisadaSemana, $comparison);
    }

    /**
     * Filter the query on the semanarevisada_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterBySemanarevisadaEstatus(true); // WHERE semanarevisada_estatus = true
     * $query->filterBySemanarevisadaEstatus('yes'); // WHERE semanarevisada_estatus = true
     * </code>
     *
     * @param     boolean|string $semanarevisadaEstatus The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SemanarevisadaQuery The current query, for fluid interface
     */
    public function filterBySemanarevisadaEstatus($semanarevisadaEstatus = null, $comparison = null)
    {
        if (is_string($semanarevisadaEstatus)) {
            $semanarevisadaEstatus = in_array(strtolower($semanarevisadaEstatus), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(SemanarevisadaPeer::SEMANAREVISADA_ESTATUS, $semanarevisadaEstatus, $comparison);
    }

    /**
     * Filter the query by a related Empresa object
     *
     * @param   Empresa|PropelObjectCollection $empresa The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SemanarevisadaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpresa($empresa, $comparison = null)
    {
        if ($empresa instanceof Empresa) {
            return $this
                ->addUsingAlias(SemanarevisadaPeer::IDEMPRESA, $empresa->getIdempresa(), $comparison);
        } elseif ($empresa instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SemanarevisadaPeer::IDEMPRESA, $empresa->toKeyValue('PrimaryKey', 'Idempresa'), $comparison);
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
     * @return SemanarevisadaQuery The current query, for fluid interface
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
     * @return                 SemanarevisadaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursal($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(SemanarevisadaPeer::IDSUCURSAL, $sucursal->getIdsucursal(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SemanarevisadaPeer::IDSUCURSAL, $sucursal->toKeyValue('PrimaryKey', 'Idsucursal'), $comparison);
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
     * @return SemanarevisadaQuery The current query, for fluid interface
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
     * @param   Semanarevisada $semanarevisada Object to remove from the list of results
     *
     * @return SemanarevisadaQuery The current query, for fluid interface
     */
    public function prune($semanarevisada = null)
    {
        if ($semanarevisada) {
            $this->addUsingAlias(SemanarevisadaPeer::IDSEMANAREVISADA, $semanarevisada->getIdsemanarevisada(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
