<?php


/**
 * Base class that represents a query for the 'empresa' table.
 *
 *
 *
 * @method EmpresaQuery orderByIdempresa($order = Criteria::ASC) Order by the idempresa column
 * @method EmpresaQuery orderByEmpresaNombrecomercial($order = Criteria::ASC) Order by the empresa_nombrecomercial column
 * @method EmpresaQuery orderByEmpresaRazonsocial($order = Criteria::ASC) Order by the empresa_razonsocial column
 *
 * @method EmpresaQuery groupByIdempresa() Group by the idempresa column
 * @method EmpresaQuery groupByEmpresaNombrecomercial() Group by the empresa_nombrecomercial column
 * @method EmpresaQuery groupByEmpresaRazonsocial() Group by the empresa_razonsocial column
 *
 * @method EmpresaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EmpresaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EmpresaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method EmpresaQuery leftJoinProveedor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Proveedor relation
 * @method EmpresaQuery rightJoinProveedor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Proveedor relation
 * @method EmpresaQuery innerJoinProveedor($relationAlias = null) Adds a INNER JOIN clause to the query using the Proveedor relation
 *
 * @method EmpresaQuery leftJoinRequisicion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Requisicion relation
 * @method EmpresaQuery rightJoinRequisicion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Requisicion relation
 * @method EmpresaQuery innerJoinRequisicion($relationAlias = null) Adds a INNER JOIN clause to the query using the Requisicion relation
 *
 * @method EmpresaQuery leftJoinSucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursal relation
 * @method EmpresaQuery rightJoinSucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursal relation
 * @method EmpresaQuery innerJoinSucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursal relation
 *
 * @method EmpresaQuery leftJoinTrabajadorpromedio($relationAlias = null) Adds a LEFT JOIN clause to the query using the Trabajadorpromedio relation
 * @method EmpresaQuery rightJoinTrabajadorpromedio($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Trabajadorpromedio relation
 * @method EmpresaQuery innerJoinTrabajadorpromedio($relationAlias = null) Adds a INNER JOIN clause to the query using the Trabajadorpromedio relation
 *
 * @method EmpresaQuery leftJoinUsuarioempresa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuarioempresa relation
 * @method EmpresaQuery rightJoinUsuarioempresa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuarioempresa relation
 * @method EmpresaQuery innerJoinUsuarioempresa($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuarioempresa relation
 *
 * @method Empresa findOne(PropelPDO $con = null) Return the first Empresa matching the query
 * @method Empresa findOneOrCreate(PropelPDO $con = null) Return the first Empresa matching the query, or a new Empresa object populated from the query conditions when no match is found
 *
 * @method Empresa findOneByEmpresaNombrecomercial(string $empresa_nombrecomercial) Return the first Empresa filtered by the empresa_nombrecomercial column
 * @method Empresa findOneByEmpresaRazonsocial(string $empresa_razonsocial) Return the first Empresa filtered by the empresa_razonsocial column
 *
 * @method array findByIdempresa(int $idempresa) Return Empresa objects filtered by the idempresa column
 * @method array findByEmpresaNombrecomercial(string $empresa_nombrecomercial) Return Empresa objects filtered by the empresa_nombrecomercial column
 * @method array findByEmpresaRazonsocial(string $empresa_razonsocial) Return Empresa objects filtered by the empresa_razonsocial column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseEmpresaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEmpresaQuery object.
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
            $modelName = 'Empresa';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EmpresaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EmpresaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EmpresaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EmpresaQuery) {
            return $criteria;
        }
        $query = new EmpresaQuery(null, null, $modelAlias);

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
     * @return   Empresa|Empresa[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EmpresaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EmpresaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Empresa A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdempresa($key, $con = null)
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
     * @return                 Empresa A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idempresa`, `empresa_nombrecomercial`, `empresa_razonsocial` FROM `empresa` WHERE `idempresa` = :p0';
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
            $obj = new Empresa();
            $obj->hydrate($row);
            EmpresaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Empresa|Empresa[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Empresa[]|mixed the list of results, formatted by the current formatter
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
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EmpresaPeer::IDEMPRESA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EmpresaPeer::IDEMPRESA, $keys, Criteria::IN);
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
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function filterByIdempresa($idempresa = null, $comparison = null)
    {
        if (is_array($idempresa)) {
            $useMinMax = false;
            if (isset($idempresa['min'])) {
                $this->addUsingAlias(EmpresaPeer::IDEMPRESA, $idempresa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempresa['max'])) {
                $this->addUsingAlias(EmpresaPeer::IDEMPRESA, $idempresa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpresaPeer::IDEMPRESA, $idempresa, $comparison);
    }

    /**
     * Filter the query on the empresa_nombrecomercial column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpresaNombrecomercial('fooValue');   // WHERE empresa_nombrecomercial = 'fooValue'
     * $query->filterByEmpresaNombrecomercial('%fooValue%'); // WHERE empresa_nombrecomercial LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empresaNombrecomercial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function filterByEmpresaNombrecomercial($empresaNombrecomercial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empresaNombrecomercial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empresaNombrecomercial)) {
                $empresaNombrecomercial = str_replace('*', '%', $empresaNombrecomercial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpresaPeer::EMPRESA_NOMBRECOMERCIAL, $empresaNombrecomercial, $comparison);
    }

    /**
     * Filter the query on the empresa_razonsocial column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpresaRazonsocial('fooValue');   // WHERE empresa_razonsocial = 'fooValue'
     * $query->filterByEmpresaRazonsocial('%fooValue%'); // WHERE empresa_razonsocial LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empresaRazonsocial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function filterByEmpresaRazonsocial($empresaRazonsocial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empresaRazonsocial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empresaRazonsocial)) {
                $empresaRazonsocial = str_replace('*', '%', $empresaRazonsocial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpresaPeer::EMPRESA_RAZONSOCIAL, $empresaRazonsocial, $comparison);
    }

    /**
     * Filter the query by a related Proveedor object
     *
     * @param   Proveedor|PropelObjectCollection $proveedor  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProveedor($proveedor, $comparison = null)
    {
        if ($proveedor instanceof Proveedor) {
            return $this
                ->addUsingAlias(EmpresaPeer::IDEMPRESA, $proveedor->getIdempresa(), $comparison);
        } elseif ($proveedor instanceof PropelObjectCollection) {
            return $this
                ->useProveedorQuery()
                ->filterByPrimaryKeys($proveedor->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProveedor() only accepts arguments of type Proveedor or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Proveedor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function joinProveedor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Proveedor');

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
            $this->addJoinObject($join, 'Proveedor');
        }

        return $this;
    }

    /**
     * Use the Proveedor relation Proveedor object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProveedorQuery A secondary query class using the current class as primary query
     */
    public function useProveedorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProveedor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Proveedor', 'ProveedorQuery');
    }

    /**
     * Filter the query by a related Requisicion object
     *
     * @param   Requisicion|PropelObjectCollection $requisicion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRequisicion($requisicion, $comparison = null)
    {
        if ($requisicion instanceof Requisicion) {
            return $this
                ->addUsingAlias(EmpresaPeer::IDEMPRESA, $requisicion->getIdempresa(), $comparison);
        } elseif ($requisicion instanceof PropelObjectCollection) {
            return $this
                ->useRequisicionQuery()
                ->filterByPrimaryKeys($requisicion->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRequisicion() only accepts arguments of type Requisicion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Requisicion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function joinRequisicion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Requisicion');

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
            $this->addJoinObject($join, 'Requisicion');
        }

        return $this;
    }

    /**
     * Use the Requisicion relation Requisicion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RequisicionQuery A secondary query class using the current class as primary query
     */
    public function useRequisicionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRequisicion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Requisicion', 'RequisicionQuery');
    }

    /**
     * Filter the query by a related Sucursal object
     *
     * @param   Sucursal|PropelObjectCollection $sucursal  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursal($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(EmpresaPeer::IDEMPRESA, $sucursal->getIdempresa(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            return $this
                ->useSucursalQuery()
                ->filterByPrimaryKeys($sucursal->getPrimaryKeys())
                ->endUse();
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
     * @return EmpresaQuery The current query, for fluid interface
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
     * Filter the query by a related Trabajadorpromedio object
     *
     * @param   Trabajadorpromedio|PropelObjectCollection $trabajadorpromedio  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTrabajadorpromedio($trabajadorpromedio, $comparison = null)
    {
        if ($trabajadorpromedio instanceof Trabajadorpromedio) {
            return $this
                ->addUsingAlias(EmpresaPeer::IDEMPRESA, $trabajadorpromedio->getIdempresa(), $comparison);
        } elseif ($trabajadorpromedio instanceof PropelObjectCollection) {
            return $this
                ->useTrabajadorpromedioQuery()
                ->filterByPrimaryKeys($trabajadorpromedio->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTrabajadorpromedio() only accepts arguments of type Trabajadorpromedio or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Trabajadorpromedio relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function joinTrabajadorpromedio($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Trabajadorpromedio');

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
            $this->addJoinObject($join, 'Trabajadorpromedio');
        }

        return $this;
    }

    /**
     * Use the Trabajadorpromedio relation Trabajadorpromedio object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TrabajadorpromedioQuery A secondary query class using the current class as primary query
     */
    public function useTrabajadorpromedioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTrabajadorpromedio($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Trabajadorpromedio', 'TrabajadorpromedioQuery');
    }

    /**
     * Filter the query by a related Usuarioempresa object
     *
     * @param   Usuarioempresa|PropelObjectCollection $usuarioempresa  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpresaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuarioempresa($usuarioempresa, $comparison = null)
    {
        if ($usuarioempresa instanceof Usuarioempresa) {
            return $this
                ->addUsingAlias(EmpresaPeer::IDEMPRESA, $usuarioempresa->getIdempresa(), $comparison);
        } elseif ($usuarioempresa instanceof PropelObjectCollection) {
            return $this
                ->useUsuarioempresaQuery()
                ->filterByPrimaryKeys($usuarioempresa->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByUsuarioempresa() only accepts arguments of type Usuarioempresa or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Usuarioempresa relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function joinUsuarioempresa($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Usuarioempresa');

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
            $this->addJoinObject($join, 'Usuarioempresa');
        }

        return $this;
    }

    /**
     * Use the Usuarioempresa relation Usuarioempresa object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuarioempresaQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioempresaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUsuarioempresa($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Usuarioempresa', 'UsuarioempresaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Empresa $empresa Object to remove from the list of results
     *
     * @return EmpresaQuery The current query, for fluid interface
     */
    public function prune($empresa = null)
    {
        if ($empresa) {
            $this->addUsingAlias(EmpresaPeer::IDEMPRESA, $empresa->getIdempresa(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
