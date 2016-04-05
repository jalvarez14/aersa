<?php


/**
 * Base class that represents a query for the 'usuariosucursal' table.
 *
 *
 *
 * @method UsuariosucursalQuery orderByIdusuariosucursal($order = Criteria::ASC) Order by the idusuariosucursal column
 * @method UsuariosucursalQuery orderByIdusuario($order = Criteria::ASC) Order by the idusuario column
 * @method UsuariosucursalQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 *
 * @method UsuariosucursalQuery groupByIdusuariosucursal() Group by the idusuariosucursal column
 * @method UsuariosucursalQuery groupByIdusuario() Group by the idusuario column
 * @method UsuariosucursalQuery groupByIdsucursal() Group by the idsucursal column
 *
 * @method UsuariosucursalQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method UsuariosucursalQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method UsuariosucursalQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method UsuariosucursalQuery leftJoinSucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursal relation
 * @method UsuariosucursalQuery rightJoinSucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursal relation
 * @method UsuariosucursalQuery innerJoinSucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursal relation
 *
 * @method UsuariosucursalQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method UsuariosucursalQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method UsuariosucursalQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method Usuariosucursal findOne(PropelPDO $con = null) Return the first Usuariosucursal matching the query
 * @method Usuariosucursal findOneOrCreate(PropelPDO $con = null) Return the first Usuariosucursal matching the query, or a new Usuariosucursal object populated from the query conditions when no match is found
 *
 * @method Usuariosucursal findOneByIdusuario(int $idusuario) Return the first Usuariosucursal filtered by the idusuario column
 * @method Usuariosucursal findOneByIdsucursal(int $idsucursal) Return the first Usuariosucursal filtered by the idsucursal column
 *
 * @method array findByIdusuariosucursal(int $idusuariosucursal) Return Usuariosucursal objects filtered by the idusuariosucursal column
 * @method array findByIdusuario(int $idusuario) Return Usuariosucursal objects filtered by the idusuario column
 * @method array findByIdsucursal(int $idsucursal) Return Usuariosucursal objects filtered by the idsucursal column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseUsuariosucursalQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseUsuariosucursalQuery object.
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
            $modelName = 'Usuariosucursal';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UsuariosucursalQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   UsuariosucursalQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return UsuariosucursalQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UsuariosucursalQuery) {
            return $criteria;
        }
        $query = new UsuariosucursalQuery(null, null, $modelAlias);

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
     * @return   Usuariosucursal|Usuariosucursal[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = UsuariosucursalPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(UsuariosucursalPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Usuariosucursal A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdusuariosucursal($key, $con = null)
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
     * @return                 Usuariosucursal A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idusuariosucursal`, `idusuario`, `idsucursal` FROM `usuariosucursal` WHERE `idusuariosucursal` = :p0';
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
            $obj = new Usuariosucursal();
            $obj->hydrate($row);
            UsuariosucursalPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Usuariosucursal|Usuariosucursal[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Usuariosucursal[]|mixed the list of results, formatted by the current formatter
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
     * @return UsuariosucursalQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UsuariosucursalPeer::IDUSUARIOSUCURSAL, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return UsuariosucursalQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UsuariosucursalPeer::IDUSUARIOSUCURSAL, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idusuariosucursal column
     *
     * Example usage:
     * <code>
     * $query->filterByIdusuariosucursal(1234); // WHERE idusuariosucursal = 1234
     * $query->filterByIdusuariosucursal(array(12, 34)); // WHERE idusuariosucursal IN (12, 34)
     * $query->filterByIdusuariosucursal(array('min' => 12)); // WHERE idusuariosucursal >= 12
     * $query->filterByIdusuariosucursal(array('max' => 12)); // WHERE idusuariosucursal <= 12
     * </code>
     *
     * @param     mixed $idusuariosucursal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuariosucursalQuery The current query, for fluid interface
     */
    public function filterByIdusuariosucursal($idusuariosucursal = null, $comparison = null)
    {
        if (is_array($idusuariosucursal)) {
            $useMinMax = false;
            if (isset($idusuariosucursal['min'])) {
                $this->addUsingAlias(UsuariosucursalPeer::IDUSUARIOSUCURSAL, $idusuariosucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idusuariosucursal['max'])) {
                $this->addUsingAlias(UsuariosucursalPeer::IDUSUARIOSUCURSAL, $idusuariosucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsuariosucursalPeer::IDUSUARIOSUCURSAL, $idusuariosucursal, $comparison);
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
     * @see       filterByUsuario()
     *
     * @param     mixed $idusuario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuariosucursalQuery The current query, for fluid interface
     */
    public function filterByIdusuario($idusuario = null, $comparison = null)
    {
        if (is_array($idusuario)) {
            $useMinMax = false;
            if (isset($idusuario['min'])) {
                $this->addUsingAlias(UsuariosucursalPeer::IDUSUARIO, $idusuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idusuario['max'])) {
                $this->addUsingAlias(UsuariosucursalPeer::IDUSUARIO, $idusuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsuariosucursalPeer::IDUSUARIO, $idusuario, $comparison);
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
     * @return UsuariosucursalQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(UsuariosucursalPeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(UsuariosucursalPeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsuariosucursalPeer::IDSUCURSAL, $idsucursal, $comparison);
    }

    /**
     * Filter the query by a related Sucursal object
     *
     * @param   Sucursal|PropelObjectCollection $sucursal The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuariosucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursal($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(UsuariosucursalPeer::IDSUCURSAL, $sucursal->getIdsucursal(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(UsuariosucursalPeer::IDSUCURSAL, $sucursal->toKeyValue('PrimaryKey', 'Idsucursal'), $comparison);
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
     * @return UsuariosucursalQuery The current query, for fluid interface
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
     * @return                 UsuariosucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(UsuariosucursalPeer::IDUSUARIO, $usuario->getIdusuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(UsuariosucursalPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
        } else {
            throw new PropelException('filterByUsuario() only accepts arguments of type Usuario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Usuario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuariosucursalQuery The current query, for fluid interface
     */
    public function joinUsuario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Usuario');

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
            $this->addJoinObject($join, 'Usuario');
        }

        return $this;
    }

    /**
     * Use the Usuario relation Usuario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuarioQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUsuario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Usuario', 'UsuarioQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Usuariosucursal $usuariosucursal Object to remove from the list of results
     *
     * @return UsuariosucursalQuery The current query, for fluid interface
     */
    public function prune($usuariosucursal = null)
    {
        if ($usuariosucursal) {
            $this->addUsingAlias(UsuariosucursalPeer::IDUSUARIOSUCURSAL, $usuariosucursal->getIdusuariosucursal(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
