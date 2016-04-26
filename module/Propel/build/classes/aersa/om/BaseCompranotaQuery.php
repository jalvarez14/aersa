<?php


/**
 * Base class that represents a query for the 'compranota' table.
 *
 *
 *
 * @method CompranotaQuery orderByIdcompranota($order = Criteria::ASC) Order by the idcompranota column
 * @method CompranotaQuery orderByIdcompra($order = Criteria::ASC) Order by the idcompra column
 * @method CompranotaQuery orderByIdusuario($order = Criteria::ASC) Order by the idusuario column
 * @method CompranotaQuery orderByCompranotaNota($order = Criteria::ASC) Order by the compranota_nota column
 * @method CompranotaQuery orderByCompranotaFecha($order = Criteria::ASC) Order by the compranota_fecha column
 *
 * @method CompranotaQuery groupByIdcompranota() Group by the idcompranota column
 * @method CompranotaQuery groupByIdcompra() Group by the idcompra column
 * @method CompranotaQuery groupByIdusuario() Group by the idusuario column
 * @method CompranotaQuery groupByCompranotaNota() Group by the compranota_nota column
 * @method CompranotaQuery groupByCompranotaFecha() Group by the compranota_fecha column
 *
 * @method CompranotaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CompranotaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CompranotaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CompranotaQuery leftJoinCompra($relationAlias = null) Adds a LEFT JOIN clause to the query using the Compra relation
 * @method CompranotaQuery rightJoinCompra($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Compra relation
 * @method CompranotaQuery innerJoinCompra($relationAlias = null) Adds a INNER JOIN clause to the query using the Compra relation
 *
 * @method CompranotaQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method CompranotaQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method CompranotaQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method Compranota findOne(PropelPDO $con = null) Return the first Compranota matching the query
 * @method Compranota findOneOrCreate(PropelPDO $con = null) Return the first Compranota matching the query, or a new Compranota object populated from the query conditions when no match is found
 *
 * @method Compranota findOneByIdcompra(int $idcompra) Return the first Compranota filtered by the idcompra column
 * @method Compranota findOneByIdusuario(int $idusuario) Return the first Compranota filtered by the idusuario column
 * @method Compranota findOneByCompranotaNota(string $compranota_nota) Return the first Compranota filtered by the compranota_nota column
 * @method Compranota findOneByCompranotaFecha(string $compranota_fecha) Return the first Compranota filtered by the compranota_fecha column
 *
 * @method array findByIdcompranota(int $idcompranota) Return Compranota objects filtered by the idcompranota column
 * @method array findByIdcompra(int $idcompra) Return Compranota objects filtered by the idcompra column
 * @method array findByIdusuario(int $idusuario) Return Compranota objects filtered by the idusuario column
 * @method array findByCompranotaNota(string $compranota_nota) Return Compranota objects filtered by the compranota_nota column
 * @method array findByCompranotaFecha(string $compranota_fecha) Return Compranota objects filtered by the compranota_fecha column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseCompranotaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCompranotaQuery object.
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
            $modelName = 'Compranota';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CompranotaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CompranotaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CompranotaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CompranotaQuery) {
            return $criteria;
        }
        $query = new CompranotaQuery(null, null, $modelAlias);

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
     * @return   Compranota|Compranota[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CompranotaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CompranotaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Compranota A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdcompranota($key, $con = null)
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
     * @return                 Compranota A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idcompranota`, `idcompra`, `idusuario`, `compranota_nota`, `compranota_fecha` FROM `compranota` WHERE `idcompranota` = :p0';
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
            $obj = new Compranota();
            $obj->hydrate($row);
            CompranotaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Compranota|Compranota[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Compranota[]|mixed the list of results, formatted by the current formatter
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
     * @return CompranotaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CompranotaPeer::IDCOMPRANOTA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CompranotaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CompranotaPeer::IDCOMPRANOTA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idcompranota column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcompranota(1234); // WHERE idcompranota = 1234
     * $query->filterByIdcompranota(array(12, 34)); // WHERE idcompranota IN (12, 34)
     * $query->filterByIdcompranota(array('min' => 12)); // WHERE idcompranota >= 12
     * $query->filterByIdcompranota(array('max' => 12)); // WHERE idcompranota <= 12
     * </code>
     *
     * @param     mixed $idcompranota The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompranotaQuery The current query, for fluid interface
     */
    public function filterByIdcompranota($idcompranota = null, $comparison = null)
    {
        if (is_array($idcompranota)) {
            $useMinMax = false;
            if (isset($idcompranota['min'])) {
                $this->addUsingAlias(CompranotaPeer::IDCOMPRANOTA, $idcompranota['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcompranota['max'])) {
                $this->addUsingAlias(CompranotaPeer::IDCOMPRANOTA, $idcompranota['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompranotaPeer::IDCOMPRANOTA, $idcompranota, $comparison);
    }

    /**
     * Filter the query on the idcompra column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcompra(1234); // WHERE idcompra = 1234
     * $query->filterByIdcompra(array(12, 34)); // WHERE idcompra IN (12, 34)
     * $query->filterByIdcompra(array('min' => 12)); // WHERE idcompra >= 12
     * $query->filterByIdcompra(array('max' => 12)); // WHERE idcompra <= 12
     * </code>
     *
     * @see       filterByCompra()
     *
     * @param     mixed $idcompra The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompranotaQuery The current query, for fluid interface
     */
    public function filterByIdcompra($idcompra = null, $comparison = null)
    {
        if (is_array($idcompra)) {
            $useMinMax = false;
            if (isset($idcompra['min'])) {
                $this->addUsingAlias(CompranotaPeer::IDCOMPRA, $idcompra['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcompra['max'])) {
                $this->addUsingAlias(CompranotaPeer::IDCOMPRA, $idcompra['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompranotaPeer::IDCOMPRA, $idcompra, $comparison);
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
     * @return CompranotaQuery The current query, for fluid interface
     */
    public function filterByIdusuario($idusuario = null, $comparison = null)
    {
        if (is_array($idusuario)) {
            $useMinMax = false;
            if (isset($idusuario['min'])) {
                $this->addUsingAlias(CompranotaPeer::IDUSUARIO, $idusuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idusuario['max'])) {
                $this->addUsingAlias(CompranotaPeer::IDUSUARIO, $idusuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompranotaPeer::IDUSUARIO, $idusuario, $comparison);
    }

    /**
     * Filter the query on the compranota_nota column
     *
     * Example usage:
     * <code>
     * $query->filterByCompranotaNota('fooValue');   // WHERE compranota_nota = 'fooValue'
     * $query->filterByCompranotaNota('%fooValue%'); // WHERE compranota_nota LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compranotaNota The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompranotaQuery The current query, for fluid interface
     */
    public function filterByCompranotaNota($compranotaNota = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compranotaNota)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compranotaNota)) {
                $compranotaNota = str_replace('*', '%', $compranotaNota);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CompranotaPeer::COMPRANOTA_NOTA, $compranotaNota, $comparison);
    }

    /**
     * Filter the query on the compranota_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByCompranotaFecha('2011-03-14'); // WHERE compranota_fecha = '2011-03-14'
     * $query->filterByCompranotaFecha('now'); // WHERE compranota_fecha = '2011-03-14'
     * $query->filterByCompranotaFecha(array('max' => 'yesterday')); // WHERE compranota_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $compranotaFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompranotaQuery The current query, for fluid interface
     */
    public function filterByCompranotaFecha($compranotaFecha = null, $comparison = null)
    {
        if (is_array($compranotaFecha)) {
            $useMinMax = false;
            if (isset($compranotaFecha['min'])) {
                $this->addUsingAlias(CompranotaPeer::COMPRANOTA_FECHA, $compranotaFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($compranotaFecha['max'])) {
                $this->addUsingAlias(CompranotaPeer::COMPRANOTA_FECHA, $compranotaFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompranotaPeer::COMPRANOTA_FECHA, $compranotaFecha, $comparison);
    }

    /**
     * Filter the query by a related Compra object
     *
     * @param   Compra|PropelObjectCollection $compra The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CompranotaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCompra($compra, $comparison = null)
    {
        if ($compra instanceof Compra) {
            return $this
                ->addUsingAlias(CompranotaPeer::IDCOMPRA, $compra->getIdcompra(), $comparison);
        } elseif ($compra instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CompranotaPeer::IDCOMPRA, $compra->toKeyValue('PrimaryKey', 'Idcompra'), $comparison);
        } else {
            throw new PropelException('filterByCompra() only accepts arguments of type Compra or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Compra relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CompranotaQuery The current query, for fluid interface
     */
    public function joinCompra($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Compra');

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
            $this->addJoinObject($join, 'Compra');
        }

        return $this;
    }

    /**
     * Use the Compra relation Compra object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CompraQuery A secondary query class using the current class as primary query
     */
    public function useCompraQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCompra($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Compra', 'CompraQuery');
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CompranotaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(CompranotaPeer::IDUSUARIO, $usuario->getIdusuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CompranotaPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
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
     * @return CompranotaQuery The current query, for fluid interface
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
     * @param   Compranota $compranota Object to remove from the list of results
     *
     * @return CompranotaQuery The current query, for fluid interface
     */
    public function prune($compranota = null)
    {
        if ($compranota) {
            $this->addUsingAlias(CompranotaPeer::IDCOMPRANOTA, $compranota->getIdcompranota(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
