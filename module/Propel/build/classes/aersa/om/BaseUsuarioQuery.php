<?php


/**
 * Base class that represents a query for the 'usuario' table.
 *
 *
 *
 * @method UsuarioQuery orderByIdusuario($order = Criteria::ASC) Order by the idusuario column
 * @method UsuarioQuery orderByIdrol($order = Criteria::ASC) Order by the idrol column
 * @method UsuarioQuery orderByUsuarioNombre($order = Criteria::ASC) Order by the usuario_nombre column
 * @method UsuarioQuery orderByUsuarioEstatus($order = Criteria::ASC) Order by the usuario_estatus column
 * @method UsuarioQuery orderByUsuarioUsername($order = Criteria::ASC) Order by the usuario_username column
 * @method UsuarioQuery orderByUsuarioPassword($order = Criteria::ASC) Order by the usuario_password column
 *
 * @method UsuarioQuery groupByIdusuario() Group by the idusuario column
 * @method UsuarioQuery groupByIdrol() Group by the idrol column
 * @method UsuarioQuery groupByUsuarioNombre() Group by the usuario_nombre column
 * @method UsuarioQuery groupByUsuarioEstatus() Group by the usuario_estatus column
 * @method UsuarioQuery groupByUsuarioUsername() Group by the usuario_username column
 * @method UsuarioQuery groupByUsuarioPassword() Group by the usuario_password column
 *
 * @method UsuarioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method UsuarioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method UsuarioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method UsuarioQuery leftJoinRol($relationAlias = null) Adds a LEFT JOIN clause to the query using the Rol relation
 * @method UsuarioQuery rightJoinRol($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Rol relation
 * @method UsuarioQuery innerJoinRol($relationAlias = null) Adds a INNER JOIN clause to the query using the Rol relation
 *
 * @method UsuarioQuery leftJoinUsuarioempresa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuarioempresa relation
 * @method UsuarioQuery rightJoinUsuarioempresa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuarioempresa relation
 * @method UsuarioQuery innerJoinUsuarioempresa($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuarioempresa relation
 *
 * @method UsuarioQuery leftJoinUsuariosucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuariosucursal relation
 * @method UsuarioQuery rightJoinUsuariosucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuariosucursal relation
 * @method UsuarioQuery innerJoinUsuariosucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuariosucursal relation
 *
 * @method Usuario findOne(PropelPDO $con = null) Return the first Usuario matching the query
 * @method Usuario findOneOrCreate(PropelPDO $con = null) Return the first Usuario matching the query, or a new Usuario object populated from the query conditions when no match is found
 *
 * @method Usuario findOneByIdrol(int $idrol) Return the first Usuario filtered by the idrol column
 * @method Usuario findOneByUsuarioNombre(string $usuario_nombre) Return the first Usuario filtered by the usuario_nombre column
 * @method Usuario findOneByUsuarioEstatus(boolean $usuario_estatus) Return the first Usuario filtered by the usuario_estatus column
 * @method Usuario findOneByUsuarioUsername(string $usuario_username) Return the first Usuario filtered by the usuario_username column
 * @method Usuario findOneByUsuarioPassword(string $usuario_password) Return the first Usuario filtered by the usuario_password column
 *
 * @method array findByIdusuario(int $idusuario) Return Usuario objects filtered by the idusuario column
 * @method array findByIdrol(int $idrol) Return Usuario objects filtered by the idrol column
 * @method array findByUsuarioNombre(string $usuario_nombre) Return Usuario objects filtered by the usuario_nombre column
 * @method array findByUsuarioEstatus(boolean $usuario_estatus) Return Usuario objects filtered by the usuario_estatus column
 * @method array findByUsuarioUsername(string $usuario_username) Return Usuario objects filtered by the usuario_username column
 * @method array findByUsuarioPassword(string $usuario_password) Return Usuario objects filtered by the usuario_password column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseUsuarioQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseUsuarioQuery object.
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
            $modelName = 'Usuario';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UsuarioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   UsuarioQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return UsuarioQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UsuarioQuery) {
            return $criteria;
        }
        $query = new UsuarioQuery(null, null, $modelAlias);

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
     * @return   Usuario|Usuario[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = UsuarioPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Usuario A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdusuario($key, $con = null)
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
     * @return                 Usuario A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idusuario`, `idrol`, `usuario_nombre`, `usuario_estatus`, `usuario_username`, `usuario_password` FROM `usuario` WHERE `idusuario` = :p0';
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
            $obj = new Usuario();
            $obj->hydrate($row);
            UsuarioPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Usuario|Usuario[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Usuario[]|mixed the list of results, formatted by the current formatter
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
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UsuarioPeer::IDUSUARIO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UsuarioPeer::IDUSUARIO, $keys, Criteria::IN);
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
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByIdusuario($idusuario = null, $comparison = null)
    {
        if (is_array($idusuario)) {
            $useMinMax = false;
            if (isset($idusuario['min'])) {
                $this->addUsingAlias(UsuarioPeer::IDUSUARIO, $idusuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idusuario['max'])) {
                $this->addUsingAlias(UsuarioPeer::IDUSUARIO, $idusuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::IDUSUARIO, $idusuario, $comparison);
    }

    /**
     * Filter the query on the idrol column
     *
     * Example usage:
     * <code>
     * $query->filterByIdrol(1234); // WHERE idrol = 1234
     * $query->filterByIdrol(array(12, 34)); // WHERE idrol IN (12, 34)
     * $query->filterByIdrol(array('min' => 12)); // WHERE idrol >= 12
     * $query->filterByIdrol(array('max' => 12)); // WHERE idrol <= 12
     * </code>
     *
     * @see       filterByRol()
     *
     * @param     mixed $idrol The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByIdrol($idrol = null, $comparison = null)
    {
        if (is_array($idrol)) {
            $useMinMax = false;
            if (isset($idrol['min'])) {
                $this->addUsingAlias(UsuarioPeer::IDROL, $idrol['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idrol['max'])) {
                $this->addUsingAlias(UsuarioPeer::IDROL, $idrol['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::IDROL, $idrol, $comparison);
    }

    /**
     * Filter the query on the usuario_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByUsuarioNombre('fooValue');   // WHERE usuario_nombre = 'fooValue'
     * $query->filterByUsuarioNombre('%fooValue%'); // WHERE usuario_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usuarioNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByUsuarioNombre($usuarioNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usuarioNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usuarioNombre)) {
                $usuarioNombre = str_replace('*', '%', $usuarioNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::USUARIO_NOMBRE, $usuarioNombre, $comparison);
    }

    /**
     * Filter the query on the usuario_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterByUsuarioEstatus(true); // WHERE usuario_estatus = true
     * $query->filterByUsuarioEstatus('yes'); // WHERE usuario_estatus = true
     * </code>
     *
     * @param     boolean|string $usuarioEstatus The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByUsuarioEstatus($usuarioEstatus = null, $comparison = null)
    {
        if (is_string($usuarioEstatus)) {
            $usuarioEstatus = in_array(strtolower($usuarioEstatus), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(UsuarioPeer::USUARIO_ESTATUS, $usuarioEstatus, $comparison);
    }

    /**
     * Filter the query on the usuario_username column
     *
     * Example usage:
     * <code>
     * $query->filterByUsuarioUsername('fooValue');   // WHERE usuario_username = 'fooValue'
     * $query->filterByUsuarioUsername('%fooValue%'); // WHERE usuario_username LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usuarioUsername The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByUsuarioUsername($usuarioUsername = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usuarioUsername)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usuarioUsername)) {
                $usuarioUsername = str_replace('*', '%', $usuarioUsername);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::USUARIO_USERNAME, $usuarioUsername, $comparison);
    }

    /**
     * Filter the query on the usuario_password column
     *
     * Example usage:
     * <code>
     * $query->filterByUsuarioPassword('fooValue');   // WHERE usuario_password = 'fooValue'
     * $query->filterByUsuarioPassword('%fooValue%'); // WHERE usuario_password LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usuarioPassword The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByUsuarioPassword($usuarioPassword = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usuarioPassword)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usuarioPassword)) {
                $usuarioPassword = str_replace('*', '%', $usuarioPassword);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::USUARIO_PASSWORD, $usuarioPassword, $comparison);
    }

    /**
     * Filter the query by a related Rol object
     *
     * @param   Rol|PropelObjectCollection $rol The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRol($rol, $comparison = null)
    {
        if ($rol instanceof Rol) {
            return $this
                ->addUsingAlias(UsuarioPeer::IDROL, $rol->getIdrol(), $comparison);
        } elseif ($rol instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(UsuarioPeer::IDROL, $rol->toKeyValue('PrimaryKey', 'Idrol'), $comparison);
        } else {
            throw new PropelException('filterByRol() only accepts arguments of type Rol or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Rol relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinRol($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Rol');

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
            $this->addJoinObject($join, 'Rol');
        }

        return $this;
    }

    /**
     * Use the Rol relation Rol object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RolQuery A secondary query class using the current class as primary query
     */
    public function useRolQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRol($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Rol', 'RolQuery');
    }

    /**
     * Filter the query by a related Usuarioempresa object
     *
     * @param   Usuarioempresa|PropelObjectCollection $usuarioempresa  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuarioempresa($usuarioempresa, $comparison = null)
    {
        if ($usuarioempresa instanceof Usuarioempresa) {
            return $this
                ->addUsingAlias(UsuarioPeer::IDUSUARIO, $usuarioempresa->getIdusuario(), $comparison);
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
     * @return UsuarioQuery The current query, for fluid interface
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
     * Filter the query by a related Usuariosucursal object
     *
     * @param   Usuariosucursal|PropelObjectCollection $usuariosucursal  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuariosucursal($usuariosucursal, $comparison = null)
    {
        if ($usuariosucursal instanceof Usuariosucursal) {
            return $this
                ->addUsingAlias(UsuarioPeer::IDUSUARIO, $usuariosucursal->getIdusuario(), $comparison);
        } elseif ($usuariosucursal instanceof PropelObjectCollection) {
            return $this
                ->useUsuariosucursalQuery()
                ->filterByPrimaryKeys($usuariosucursal->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByUsuariosucursal() only accepts arguments of type Usuariosucursal or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Usuariosucursal relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinUsuariosucursal($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Usuariosucursal');

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
            $this->addJoinObject($join, 'Usuariosucursal');
        }

        return $this;
    }

    /**
     * Use the Usuariosucursal relation Usuariosucursal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuariosucursalQuery A secondary query class using the current class as primary query
     */
    public function useUsuariosucursalQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUsuariosucursal($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Usuariosucursal', 'UsuariosucursalQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Usuario $usuario Object to remove from the list of results
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function prune($usuario = null)
    {
        if ($usuario) {
            $this->addUsingAlias(UsuarioPeer::IDUSUARIO, $usuario->getIdusuario(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
