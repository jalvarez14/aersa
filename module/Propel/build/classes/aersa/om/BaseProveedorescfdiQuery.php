<?php


/**
 * Base class that represents a query for the 'proveedorescfdi' table.
 *
 *
 *
 * @method ProveedorescfdiQuery orderByIdproveedorescfdi($order = Criteria::ASC) Order by the idproveedorescfdi column
 * @method ProveedorescfdiQuery orderByProveedorescfdiNombre($order = Criteria::ASC) Order by the proveedorescfdi_nombre column
 * @method ProveedorescfdiQuery orderByIdproveedor($order = Criteria::ASC) Order by the idproveedor column
 * @method ProveedorescfdiQuery orderByIdempresa($order = Criteria::ASC) Order by the idempresa column
 *
 * @method ProveedorescfdiQuery groupByIdproveedorescfdi() Group by the idproveedorescfdi column
 * @method ProveedorescfdiQuery groupByProveedorescfdiNombre() Group by the proveedorescfdi_nombre column
 * @method ProveedorescfdiQuery groupByIdproveedor() Group by the idproveedor column
 * @method ProveedorescfdiQuery groupByIdempresa() Group by the idempresa column
 *
 * @method ProveedorescfdiQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProveedorescfdiQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProveedorescfdiQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProveedorescfdiQuery leftJoinEmpresa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empresa relation
 * @method ProveedorescfdiQuery rightJoinEmpresa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empresa relation
 * @method ProveedorescfdiQuery innerJoinEmpresa($relationAlias = null) Adds a INNER JOIN clause to the query using the Empresa relation
 *
 * @method ProveedorescfdiQuery leftJoinProveedor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Proveedor relation
 * @method ProveedorescfdiQuery rightJoinProveedor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Proveedor relation
 * @method ProveedorescfdiQuery innerJoinProveedor($relationAlias = null) Adds a INNER JOIN clause to the query using the Proveedor relation
 *
 * @method Proveedorescfdi findOne(PropelPDO $con = null) Return the first Proveedorescfdi matching the query
 * @method Proveedorescfdi findOneOrCreate(PropelPDO $con = null) Return the first Proveedorescfdi matching the query, or a new Proveedorescfdi object populated from the query conditions when no match is found
 *
 * @method Proveedorescfdi findOneByProveedorescfdiNombre(string $proveedorescfdi_nombre) Return the first Proveedorescfdi filtered by the proveedorescfdi_nombre column
 * @method Proveedorescfdi findOneByIdproveedor(int $idproveedor) Return the first Proveedorescfdi filtered by the idproveedor column
 * @method Proveedorescfdi findOneByIdempresa(int $idempresa) Return the first Proveedorescfdi filtered by the idempresa column
 *
 * @method array findByIdproveedorescfdi(int $idproveedorescfdi) Return Proveedorescfdi objects filtered by the idproveedorescfdi column
 * @method array findByProveedorescfdiNombre(string $proveedorescfdi_nombre) Return Proveedorescfdi objects filtered by the proveedorescfdi_nombre column
 * @method array findByIdproveedor(int $idproveedor) Return Proveedorescfdi objects filtered by the idproveedor column
 * @method array findByIdempresa(int $idempresa) Return Proveedorescfdi objects filtered by the idempresa column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseProveedorescfdiQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseProveedorescfdiQuery object.
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
            $modelName = 'Proveedorescfdi';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProveedorescfdiQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProveedorescfdiQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProveedorescfdiQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProveedorescfdiQuery) {
            return $criteria;
        }
        $query = new ProveedorescfdiQuery(null, null, $modelAlias);

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
     * @return   Proveedorescfdi|Proveedorescfdi[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProveedorescfdiPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProveedorescfdiPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Proveedorescfdi A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdproveedorescfdi($key, $con = null)
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
     * @return                 Proveedorescfdi A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idproveedorescfdi`, `proveedorescfdi_nombre`, `idproveedor`, `idempresa` FROM `proveedorescfdi` WHERE `idproveedorescfdi` = :p0';
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
            $obj = new Proveedorescfdi();
            $obj->hydrate($row);
            ProveedorescfdiPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Proveedorescfdi|Proveedorescfdi[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Proveedorescfdi[]|mixed the list of results, formatted by the current formatter
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
     * @return ProveedorescfdiQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProveedorescfdiPeer::IDPROVEEDORESCFDI, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProveedorescfdiQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProveedorescfdiPeer::IDPROVEEDORESCFDI, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idproveedorescfdi column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproveedorescfdi(1234); // WHERE idproveedorescfdi = 1234
     * $query->filterByIdproveedorescfdi(array(12, 34)); // WHERE idproveedorescfdi IN (12, 34)
     * $query->filterByIdproveedorescfdi(array('min' => 12)); // WHERE idproveedorescfdi >= 12
     * $query->filterByIdproveedorescfdi(array('max' => 12)); // WHERE idproveedorescfdi <= 12
     * </code>
     *
     * @param     mixed $idproveedorescfdi The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorescfdiQuery The current query, for fluid interface
     */
    public function filterByIdproveedorescfdi($idproveedorescfdi = null, $comparison = null)
    {
        if (is_array($idproveedorescfdi)) {
            $useMinMax = false;
            if (isset($idproveedorescfdi['min'])) {
                $this->addUsingAlias(ProveedorescfdiPeer::IDPROVEEDORESCFDI, $idproveedorescfdi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproveedorescfdi['max'])) {
                $this->addUsingAlias(ProveedorescfdiPeer::IDPROVEEDORESCFDI, $idproveedorescfdi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProveedorescfdiPeer::IDPROVEEDORESCFDI, $idproveedorescfdi, $comparison);
    }

    /**
     * Filter the query on the proveedorescfdi_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorescfdiNombre('fooValue');   // WHERE proveedorescfdi_nombre = 'fooValue'
     * $query->filterByProveedorescfdiNombre('%fooValue%'); // WHERE proveedorescfdi_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorescfdiNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorescfdiQuery The current query, for fluid interface
     */
    public function filterByProveedorescfdiNombre($proveedorescfdiNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorescfdiNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorescfdiNombre)) {
                $proveedorescfdiNombre = str_replace('*', '%', $proveedorescfdiNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorescfdiPeer::PROVEEDORESCFDI_NOMBRE, $proveedorescfdiNombre, $comparison);
    }

    /**
     * Filter the query on the idproveedor column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproveedor(1234); // WHERE idproveedor = 1234
     * $query->filterByIdproveedor(array(12, 34)); // WHERE idproveedor IN (12, 34)
     * $query->filterByIdproveedor(array('min' => 12)); // WHERE idproveedor >= 12
     * $query->filterByIdproveedor(array('max' => 12)); // WHERE idproveedor <= 12
     * </code>
     *
     * @see       filterByProveedor()
     *
     * @param     mixed $idproveedor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorescfdiQuery The current query, for fluid interface
     */
    public function filterByIdproveedor($idproveedor = null, $comparison = null)
    {
        if (is_array($idproveedor)) {
            $useMinMax = false;
            if (isset($idproveedor['min'])) {
                $this->addUsingAlias(ProveedorescfdiPeer::IDPROVEEDOR, $idproveedor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproveedor['max'])) {
                $this->addUsingAlias(ProveedorescfdiPeer::IDPROVEEDOR, $idproveedor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProveedorescfdiPeer::IDPROVEEDOR, $idproveedor, $comparison);
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
     * @return ProveedorescfdiQuery The current query, for fluid interface
     */
    public function filterByIdempresa($idempresa = null, $comparison = null)
    {
        if (is_array($idempresa)) {
            $useMinMax = false;
            if (isset($idempresa['min'])) {
                $this->addUsingAlias(ProveedorescfdiPeer::IDEMPRESA, $idempresa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempresa['max'])) {
                $this->addUsingAlias(ProveedorescfdiPeer::IDEMPRESA, $idempresa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProveedorescfdiPeer::IDEMPRESA, $idempresa, $comparison);
    }

    /**
     * Filter the query by a related Empresa object
     *
     * @param   Empresa|PropelObjectCollection $empresa The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProveedorescfdiQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpresa($empresa, $comparison = null)
    {
        if ($empresa instanceof Empresa) {
            return $this
                ->addUsingAlias(ProveedorescfdiPeer::IDEMPRESA, $empresa->getIdempresa(), $comparison);
        } elseif ($empresa instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProveedorescfdiPeer::IDEMPRESA, $empresa->toKeyValue('PrimaryKey', 'Idempresa'), $comparison);
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
     * @return ProveedorescfdiQuery The current query, for fluid interface
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
     * Filter the query by a related Proveedor object
     *
     * @param   Proveedor|PropelObjectCollection $proveedor The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProveedorescfdiQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProveedor($proveedor, $comparison = null)
    {
        if ($proveedor instanceof Proveedor) {
            return $this
                ->addUsingAlias(ProveedorescfdiPeer::IDPROVEEDOR, $proveedor->getIdproveedor(), $comparison);
        } elseif ($proveedor instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProveedorescfdiPeer::IDPROVEEDOR, $proveedor->toKeyValue('PrimaryKey', 'Idproveedor'), $comparison);
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
     * @return ProveedorescfdiQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   Proveedorescfdi $proveedorescfdi Object to remove from the list of results
     *
     * @return ProveedorescfdiQuery The current query, for fluid interface
     */
    public function prune($proveedorescfdi = null)
    {
        if ($proveedorescfdi) {
            $this->addUsingAlias(ProveedorescfdiPeer::IDPROVEEDORESCFDI, $proveedorescfdi->getIdproveedorescfdi(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
