<?php


/**
 * Base class that represents a query for the 'almacen' table.
 *
 *
 *
 * @method AlmacenQuery orderByIdalmacen($order = Criteria::ASC) Order by the idalmacen column
 * @method AlmacenQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method AlmacenQuery orderByAlmacenNombre($order = Criteria::ASC) Order by the almacen_nombre column
 * @method AlmacenQuery orderByAlmacenEncargado($order = Criteria::ASC) Order by the almacen_encargado column
 * @method AlmacenQuery orderByAlmacenEstatus($order = Criteria::ASC) Order by the almacen_estatus column
 *
 * @method AlmacenQuery groupByIdalmacen() Group by the idalmacen column
 * @method AlmacenQuery groupByIdsucursal() Group by the idsucursal column
 * @method AlmacenQuery groupByAlmacenNombre() Group by the almacen_nombre column
 * @method AlmacenQuery groupByAlmacenEncargado() Group by the almacen_encargado column
 * @method AlmacenQuery groupByAlmacenEstatus() Group by the almacen_estatus column
 *
 * @method AlmacenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AlmacenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AlmacenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method AlmacenQuery leftJoinSucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursal relation
 * @method AlmacenQuery rightJoinSucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursal relation
 * @method AlmacenQuery innerJoinSucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursal relation
 *
 * @method AlmacenQuery leftJoinAjusteinventario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ajusteinventario relation
 * @method AlmacenQuery rightJoinAjusteinventario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ajusteinventario relation
 * @method AlmacenQuery innerJoinAjusteinventario($relationAlias = null) Adds a INNER JOIN clause to the query using the Ajusteinventario relation
 *
 * @method AlmacenQuery leftJoinCompra($relationAlias = null) Adds a LEFT JOIN clause to the query using the Compra relation
 * @method AlmacenQuery rightJoinCompra($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Compra relation
 * @method AlmacenQuery innerJoinCompra($relationAlias = null) Adds a INNER JOIN clause to the query using the Compra relation
 *
 * @method AlmacenQuery leftJoinCompradetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Compradetalle relation
 * @method AlmacenQuery rightJoinCompradetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Compradetalle relation
 * @method AlmacenQuery innerJoinCompradetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Compradetalle relation
 *
 * @method AlmacenQuery leftJoinDevolucion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Devolucion relation
 * @method AlmacenQuery rightJoinDevolucion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Devolucion relation
 * @method AlmacenQuery innerJoinDevolucion($relationAlias = null) Adds a INNER JOIN clause to the query using the Devolucion relation
 *
 * @method AlmacenQuery leftJoinDevoluciondetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Devoluciondetalle relation
 * @method AlmacenQuery rightJoinDevoluciondetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Devoluciondetalle relation
 * @method AlmacenQuery innerJoinDevoluciondetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Devoluciondetalle relation
 *
 * @method AlmacenQuery leftJoinExplosionreceta($relationAlias = null) Adds a LEFT JOIN clause to the query using the Explosionreceta relation
 * @method AlmacenQuery rightJoinExplosionreceta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Explosionreceta relation
 * @method AlmacenQuery innerJoinExplosionreceta($relationAlias = null) Adds a INNER JOIN clause to the query using the Explosionreceta relation
 *
 * @method AlmacenQuery leftJoinInventariomes($relationAlias = null) Adds a LEFT JOIN clause to the query using the Inventariomes relation
 * @method AlmacenQuery rightJoinInventariomes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Inventariomes relation
 * @method AlmacenQuery innerJoinInventariomes($relationAlias = null) Adds a INNER JOIN clause to the query using the Inventariomes relation
 *
 * @method AlmacenQuery leftJoinNotacredito($relationAlias = null) Adds a LEFT JOIN clause to the query using the Notacredito relation
 * @method AlmacenQuery rightJoinNotacredito($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Notacredito relation
 * @method AlmacenQuery innerJoinNotacredito($relationAlias = null) Adds a INNER JOIN clause to the query using the Notacredito relation
 *
 * @method AlmacenQuery leftJoinNotacreditodetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Notacreditodetalle relation
 * @method AlmacenQuery rightJoinNotacreditodetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Notacreditodetalle relation
 * @method AlmacenQuery innerJoinNotacreditodetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Notacreditodetalle relation
 *
 * @method AlmacenQuery leftJoinOrdentablajeriaRelatedByIdalmacendestino($relationAlias = null) Adds a LEFT JOIN clause to the query using the OrdentablajeriaRelatedByIdalmacendestino relation
 * @method AlmacenQuery rightJoinOrdentablajeriaRelatedByIdalmacendestino($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OrdentablajeriaRelatedByIdalmacendestino relation
 * @method AlmacenQuery innerJoinOrdentablajeriaRelatedByIdalmacendestino($relationAlias = null) Adds a INNER JOIN clause to the query using the OrdentablajeriaRelatedByIdalmacendestino relation
 *
 * @method AlmacenQuery leftJoinOrdentablajeriaRelatedByIdalmacenorigen($relationAlias = null) Adds a LEFT JOIN clause to the query using the OrdentablajeriaRelatedByIdalmacenorigen relation
 * @method AlmacenQuery rightJoinOrdentablajeriaRelatedByIdalmacenorigen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OrdentablajeriaRelatedByIdalmacenorigen relation
 * @method AlmacenQuery innerJoinOrdentablajeriaRelatedByIdalmacenorigen($relationAlias = null) Adds a INNER JOIN clause to the query using the OrdentablajeriaRelatedByIdalmacenorigen relation
 *
 * @method AlmacenQuery leftJoinProductosucursalalmacen($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productosucursalalmacen relation
 * @method AlmacenQuery rightJoinProductosucursalalmacen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productosucursalalmacen relation
 * @method AlmacenQuery innerJoinProductosucursalalmacen($relationAlias = null) Adds a INNER JOIN clause to the query using the Productosucursalalmacen relation
 *
 * @method AlmacenQuery leftJoinRequisicionRelatedByIdalmacendestino($relationAlias = null) Adds a LEFT JOIN clause to the query using the RequisicionRelatedByIdalmacendestino relation
 * @method AlmacenQuery rightJoinRequisicionRelatedByIdalmacendestino($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RequisicionRelatedByIdalmacendestino relation
 * @method AlmacenQuery innerJoinRequisicionRelatedByIdalmacendestino($relationAlias = null) Adds a INNER JOIN clause to the query using the RequisicionRelatedByIdalmacendestino relation
 *
 * @method AlmacenQuery leftJoinRequisicionRelatedByIdalmacenorigen($relationAlias = null) Adds a LEFT JOIN clause to the query using the RequisicionRelatedByIdalmacenorigen relation
 * @method AlmacenQuery rightJoinRequisicionRelatedByIdalmacenorigen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RequisicionRelatedByIdalmacenorigen relation
 * @method AlmacenQuery innerJoinRequisicionRelatedByIdalmacenorigen($relationAlias = null) Adds a INNER JOIN clause to the query using the RequisicionRelatedByIdalmacenorigen relation
 *
 * @method AlmacenQuery leftJoinVentadetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ventadetalle relation
 * @method AlmacenQuery rightJoinVentadetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ventadetalle relation
 * @method AlmacenQuery innerJoinVentadetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Ventadetalle relation
 *
 * @method Almacen findOne(PropelPDO $con = null) Return the first Almacen matching the query
 * @method Almacen findOneOrCreate(PropelPDO $con = null) Return the first Almacen matching the query, or a new Almacen object populated from the query conditions when no match is found
 *
 * @method Almacen findOneByIdsucursal(int $idsucursal) Return the first Almacen filtered by the idsucursal column
 * @method Almacen findOneByAlmacenNombre(string $almacen_nombre) Return the first Almacen filtered by the almacen_nombre column
 * @method Almacen findOneByAlmacenEncargado(string $almacen_encargado) Return the first Almacen filtered by the almacen_encargado column
 * @method Almacen findOneByAlmacenEstatus(boolean $almacen_estatus) Return the first Almacen filtered by the almacen_estatus column
 *
 * @method array findByIdalmacen(int $idalmacen) Return Almacen objects filtered by the idalmacen column
 * @method array findByIdsucursal(int $idsucursal) Return Almacen objects filtered by the idsucursal column
 * @method array findByAlmacenNombre(string $almacen_nombre) Return Almacen objects filtered by the almacen_nombre column
 * @method array findByAlmacenEncargado(string $almacen_encargado) Return Almacen objects filtered by the almacen_encargado column
 * @method array findByAlmacenEstatus(boolean $almacen_estatus) Return Almacen objects filtered by the almacen_estatus column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseAlmacenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAlmacenQuery object.
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
            $modelName = 'Almacen';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AlmacenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AlmacenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AlmacenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AlmacenQuery) {
            return $criteria;
        }
        $query = new AlmacenQuery(null, null, $modelAlias);

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
     * @return   Almacen|Almacen[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AlmacenPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AlmacenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Almacen A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdalmacen($key, $con = null)
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
     * @return                 Almacen A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idalmacen`, `idsucursal`, `almacen_nombre`, `almacen_encargado`, `almacen_estatus` FROM `almacen` WHERE `idalmacen` = :p0';
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
            $obj = new Almacen();
            $obj->hydrate($row);
            AlmacenPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Almacen|Almacen[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Almacen[]|mixed the list of results, formatted by the current formatter
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
     * @return AlmacenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AlmacenPeer::IDALMACEN, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AlmacenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AlmacenPeer::IDALMACEN, $keys, Criteria::IN);
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
     * @param     mixed $idalmacen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AlmacenQuery The current query, for fluid interface
     */
    public function filterByIdalmacen($idalmacen = null, $comparison = null)
    {
        if (is_array($idalmacen)) {
            $useMinMax = false;
            if (isset($idalmacen['min'])) {
                $this->addUsingAlias(AlmacenPeer::IDALMACEN, $idalmacen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idalmacen['max'])) {
                $this->addUsingAlias(AlmacenPeer::IDALMACEN, $idalmacen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AlmacenPeer::IDALMACEN, $idalmacen, $comparison);
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
     * @return AlmacenQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(AlmacenPeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(AlmacenPeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AlmacenPeer::IDSUCURSAL, $idsucursal, $comparison);
    }

    /**
     * Filter the query on the almacen_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByAlmacenNombre('fooValue');   // WHERE almacen_nombre = 'fooValue'
     * $query->filterByAlmacenNombre('%fooValue%'); // WHERE almacen_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $almacenNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AlmacenQuery The current query, for fluid interface
     */
    public function filterByAlmacenNombre($almacenNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($almacenNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $almacenNombre)) {
                $almacenNombre = str_replace('*', '%', $almacenNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AlmacenPeer::ALMACEN_NOMBRE, $almacenNombre, $comparison);
    }

    /**
     * Filter the query on the almacen_encargado column
     *
     * Example usage:
     * <code>
     * $query->filterByAlmacenEncargado('fooValue');   // WHERE almacen_encargado = 'fooValue'
     * $query->filterByAlmacenEncargado('%fooValue%'); // WHERE almacen_encargado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $almacenEncargado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AlmacenQuery The current query, for fluid interface
     */
    public function filterByAlmacenEncargado($almacenEncargado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($almacenEncargado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $almacenEncargado)) {
                $almacenEncargado = str_replace('*', '%', $almacenEncargado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AlmacenPeer::ALMACEN_ENCARGADO, $almacenEncargado, $comparison);
    }

    /**
     * Filter the query on the almacen_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterByAlmacenEstatus(true); // WHERE almacen_estatus = true
     * $query->filterByAlmacenEstatus('yes'); // WHERE almacen_estatus = true
     * </code>
     *
     * @param     boolean|string $almacenEstatus The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AlmacenQuery The current query, for fluid interface
     */
    public function filterByAlmacenEstatus($almacenEstatus = null, $comparison = null)
    {
        if (is_string($almacenEstatus)) {
            $almacenEstatus = in_array(strtolower($almacenEstatus), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(AlmacenPeer::ALMACEN_ESTATUS, $almacenEstatus, $comparison);
    }

    /**
     * Filter the query by a related Sucursal object
     *
     * @param   Sucursal|PropelObjectCollection $sucursal The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AlmacenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursal($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(AlmacenPeer::IDSUCURSAL, $sucursal->getIdsucursal(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AlmacenPeer::IDSUCURSAL, $sucursal->toKeyValue('PrimaryKey', 'Idsucursal'), $comparison);
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
     * @return AlmacenQuery The current query, for fluid interface
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
     * Filter the query by a related Ajusteinventario object
     *
     * @param   Ajusteinventario|PropelObjectCollection $ajusteinventario  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AlmacenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAjusteinventario($ajusteinventario, $comparison = null)
    {
        if ($ajusteinventario instanceof Ajusteinventario) {
            return $this
                ->addUsingAlias(AlmacenPeer::IDALMACEN, $ajusteinventario->getIdalmacen(), $comparison);
        } elseif ($ajusteinventario instanceof PropelObjectCollection) {
            return $this
                ->useAjusteinventarioQuery()
                ->filterByPrimaryKeys($ajusteinventario->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAjusteinventario() only accepts arguments of type Ajusteinventario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Ajusteinventario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AlmacenQuery The current query, for fluid interface
     */
    public function joinAjusteinventario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Ajusteinventario');

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
            $this->addJoinObject($join, 'Ajusteinventario');
        }

        return $this;
    }

    /**
     * Use the Ajusteinventario relation Ajusteinventario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AjusteinventarioQuery A secondary query class using the current class as primary query
     */
    public function useAjusteinventarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAjusteinventario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ajusteinventario', 'AjusteinventarioQuery');
    }

    /**
     * Filter the query by a related Compra object
     *
     * @param   Compra|PropelObjectCollection $compra  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AlmacenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCompra($compra, $comparison = null)
    {
        if ($compra instanceof Compra) {
            return $this
                ->addUsingAlias(AlmacenPeer::IDALMACEN, $compra->getIdalmacen(), $comparison);
        } elseif ($compra instanceof PropelObjectCollection) {
            return $this
                ->useCompraQuery()
                ->filterByPrimaryKeys($compra->getPrimaryKeys())
                ->endUse();
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
     * @return AlmacenQuery The current query, for fluid interface
     */
    public function joinCompra($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useCompraQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCompra($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Compra', 'CompraQuery');
    }

    /**
     * Filter the query by a related Compradetalle object
     *
     * @param   Compradetalle|PropelObjectCollection $compradetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AlmacenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCompradetalle($compradetalle, $comparison = null)
    {
        if ($compradetalle instanceof Compradetalle) {
            return $this
                ->addUsingAlias(AlmacenPeer::IDALMACEN, $compradetalle->getIdalmacen(), $comparison);
        } elseif ($compradetalle instanceof PropelObjectCollection) {
            return $this
                ->useCompradetalleQuery()
                ->filterByPrimaryKeys($compradetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCompradetalle() only accepts arguments of type Compradetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Compradetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AlmacenQuery The current query, for fluid interface
     */
    public function joinCompradetalle($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Compradetalle');

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
            $this->addJoinObject($join, 'Compradetalle');
        }

        return $this;
    }

    /**
     * Use the Compradetalle relation Compradetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CompradetalleQuery A secondary query class using the current class as primary query
     */
    public function useCompradetalleQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCompradetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Compradetalle', 'CompradetalleQuery');
    }

    /**
     * Filter the query by a related Devolucion object
     *
     * @param   Devolucion|PropelObjectCollection $devolucion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AlmacenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDevolucion($devolucion, $comparison = null)
    {
        if ($devolucion instanceof Devolucion) {
            return $this
                ->addUsingAlias(AlmacenPeer::IDALMACEN, $devolucion->getIdalmacen(), $comparison);
        } elseif ($devolucion instanceof PropelObjectCollection) {
            return $this
                ->useDevolucionQuery()
                ->filterByPrimaryKeys($devolucion->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByDevolucion() only accepts arguments of type Devolucion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Devolucion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AlmacenQuery The current query, for fluid interface
     */
    public function joinDevolucion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Devolucion');

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
            $this->addJoinObject($join, 'Devolucion');
        }

        return $this;
    }

    /**
     * Use the Devolucion relation Devolucion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DevolucionQuery A secondary query class using the current class as primary query
     */
    public function useDevolucionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDevolucion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Devolucion', 'DevolucionQuery');
    }

    /**
     * Filter the query by a related Devoluciondetalle object
     *
     * @param   Devoluciondetalle|PropelObjectCollection $devoluciondetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AlmacenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDevoluciondetalle($devoluciondetalle, $comparison = null)
    {
        if ($devoluciondetalle instanceof Devoluciondetalle) {
            return $this
                ->addUsingAlias(AlmacenPeer::IDALMACEN, $devoluciondetalle->getIdalmacen(), $comparison);
        } elseif ($devoluciondetalle instanceof PropelObjectCollection) {
            return $this
                ->useDevoluciondetalleQuery()
                ->filterByPrimaryKeys($devoluciondetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByDevoluciondetalle() only accepts arguments of type Devoluciondetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Devoluciondetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AlmacenQuery The current query, for fluid interface
     */
    public function joinDevoluciondetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Devoluciondetalle');

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
            $this->addJoinObject($join, 'Devoluciondetalle');
        }

        return $this;
    }

    /**
     * Use the Devoluciondetalle relation Devoluciondetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DevoluciondetalleQuery A secondary query class using the current class as primary query
     */
    public function useDevoluciondetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDevoluciondetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Devoluciondetalle', 'DevoluciondetalleQuery');
    }

    /**
     * Filter the query by a related Explosionreceta object
     *
     * @param   Explosionreceta|PropelObjectCollection $explosionreceta  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AlmacenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExplosionreceta($explosionreceta, $comparison = null)
    {
        if ($explosionreceta instanceof Explosionreceta) {
            return $this
                ->addUsingAlias(AlmacenPeer::IDALMACEN, $explosionreceta->getIdalmacen(), $comparison);
        } elseif ($explosionreceta instanceof PropelObjectCollection) {
            return $this
                ->useExplosionrecetaQuery()
                ->filterByPrimaryKeys($explosionreceta->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExplosionreceta() only accepts arguments of type Explosionreceta or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Explosionreceta relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AlmacenQuery The current query, for fluid interface
     */
    public function joinExplosionreceta($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Explosionreceta');

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
            $this->addJoinObject($join, 'Explosionreceta');
        }

        return $this;
    }

    /**
     * Use the Explosionreceta relation Explosionreceta object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExplosionrecetaQuery A secondary query class using the current class as primary query
     */
    public function useExplosionrecetaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExplosionreceta($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Explosionreceta', 'ExplosionrecetaQuery');
    }

    /**
     * Filter the query by a related Inventariomes object
     *
     * @param   Inventariomes|PropelObjectCollection $inventariomes  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AlmacenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByInventariomes($inventariomes, $comparison = null)
    {
        if ($inventariomes instanceof Inventariomes) {
            return $this
                ->addUsingAlias(AlmacenPeer::IDALMACEN, $inventariomes->getIdalmacen(), $comparison);
        } elseif ($inventariomes instanceof PropelObjectCollection) {
            return $this
                ->useInventariomesQuery()
                ->filterByPrimaryKeys($inventariomes->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByInventariomes() only accepts arguments of type Inventariomes or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Inventariomes relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AlmacenQuery The current query, for fluid interface
     */
    public function joinInventariomes($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Inventariomes');

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
            $this->addJoinObject($join, 'Inventariomes');
        }

        return $this;
    }

    /**
     * Use the Inventariomes relation Inventariomes object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   InventariomesQuery A secondary query class using the current class as primary query
     */
    public function useInventariomesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInventariomes($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Inventariomes', 'InventariomesQuery');
    }

    /**
     * Filter the query by a related Notacredito object
     *
     * @param   Notacredito|PropelObjectCollection $notacredito  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AlmacenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByNotacredito($notacredito, $comparison = null)
    {
        if ($notacredito instanceof Notacredito) {
            return $this
                ->addUsingAlias(AlmacenPeer::IDALMACEN, $notacredito->getIdalmacen(), $comparison);
        } elseif ($notacredito instanceof PropelObjectCollection) {
            return $this
                ->useNotacreditoQuery()
                ->filterByPrimaryKeys($notacredito->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByNotacredito() only accepts arguments of type Notacredito or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Notacredito relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AlmacenQuery The current query, for fluid interface
     */
    public function joinNotacredito($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Notacredito');

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
            $this->addJoinObject($join, 'Notacredito');
        }

        return $this;
    }

    /**
     * Use the Notacredito relation Notacredito object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   NotacreditoQuery A secondary query class using the current class as primary query
     */
    public function useNotacreditoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinNotacredito($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Notacredito', 'NotacreditoQuery');
    }

    /**
     * Filter the query by a related Notacreditodetalle object
     *
     * @param   Notacreditodetalle|PropelObjectCollection $notacreditodetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AlmacenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByNotacreditodetalle($notacreditodetalle, $comparison = null)
    {
        if ($notacreditodetalle instanceof Notacreditodetalle) {
            return $this
                ->addUsingAlias(AlmacenPeer::IDALMACEN, $notacreditodetalle->getIdalmacen(), $comparison);
        } elseif ($notacreditodetalle instanceof PropelObjectCollection) {
            return $this
                ->useNotacreditodetalleQuery()
                ->filterByPrimaryKeys($notacreditodetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByNotacreditodetalle() only accepts arguments of type Notacreditodetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Notacreditodetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AlmacenQuery The current query, for fluid interface
     */
    public function joinNotacreditodetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Notacreditodetalle');

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
            $this->addJoinObject($join, 'Notacreditodetalle');
        }

        return $this;
    }

    /**
     * Use the Notacreditodetalle relation Notacreditodetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   NotacreditodetalleQuery A secondary query class using the current class as primary query
     */
    public function useNotacreditodetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinNotacreditodetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Notacreditodetalle', 'NotacreditodetalleQuery');
    }

    /**
     * Filter the query by a related Ordentablajeria object
     *
     * @param   Ordentablajeria|PropelObjectCollection $ordentablajeria  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AlmacenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOrdentablajeriaRelatedByIdalmacendestino($ordentablajeria, $comparison = null)
    {
        if ($ordentablajeria instanceof Ordentablajeria) {
            return $this
                ->addUsingAlias(AlmacenPeer::IDALMACEN, $ordentablajeria->getIdalmacendestino(), $comparison);
        } elseif ($ordentablajeria instanceof PropelObjectCollection) {
            return $this
                ->useOrdentablajeriaRelatedByIdalmacendestinoQuery()
                ->filterByPrimaryKeys($ordentablajeria->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOrdentablajeriaRelatedByIdalmacendestino() only accepts arguments of type Ordentablajeria or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OrdentablajeriaRelatedByIdalmacendestino relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AlmacenQuery The current query, for fluid interface
     */
    public function joinOrdentablajeriaRelatedByIdalmacendestino($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OrdentablajeriaRelatedByIdalmacendestino');

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
            $this->addJoinObject($join, 'OrdentablajeriaRelatedByIdalmacendestino');
        }

        return $this;
    }

    /**
     * Use the OrdentablajeriaRelatedByIdalmacendestino relation Ordentablajeria object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OrdentablajeriaQuery A secondary query class using the current class as primary query
     */
    public function useOrdentablajeriaRelatedByIdalmacendestinoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOrdentablajeriaRelatedByIdalmacendestino($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OrdentablajeriaRelatedByIdalmacendestino', 'OrdentablajeriaQuery');
    }

    /**
     * Filter the query by a related Ordentablajeria object
     *
     * @param   Ordentablajeria|PropelObjectCollection $ordentablajeria  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AlmacenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOrdentablajeriaRelatedByIdalmacenorigen($ordentablajeria, $comparison = null)
    {
        if ($ordentablajeria instanceof Ordentablajeria) {
            return $this
                ->addUsingAlias(AlmacenPeer::IDALMACEN, $ordentablajeria->getIdalmacenorigen(), $comparison);
        } elseif ($ordentablajeria instanceof PropelObjectCollection) {
            return $this
                ->useOrdentablajeriaRelatedByIdalmacenorigenQuery()
                ->filterByPrimaryKeys($ordentablajeria->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOrdentablajeriaRelatedByIdalmacenorigen() only accepts arguments of type Ordentablajeria or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OrdentablajeriaRelatedByIdalmacenorigen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AlmacenQuery The current query, for fluid interface
     */
    public function joinOrdentablajeriaRelatedByIdalmacenorigen($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OrdentablajeriaRelatedByIdalmacenorigen');

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
            $this->addJoinObject($join, 'OrdentablajeriaRelatedByIdalmacenorigen');
        }

        return $this;
    }

    /**
     * Use the OrdentablajeriaRelatedByIdalmacenorigen relation Ordentablajeria object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OrdentablajeriaQuery A secondary query class using the current class as primary query
     */
    public function useOrdentablajeriaRelatedByIdalmacenorigenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOrdentablajeriaRelatedByIdalmacenorigen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OrdentablajeriaRelatedByIdalmacenorigen', 'OrdentablajeriaQuery');
    }

    /**
     * Filter the query by a related Productosucursalalmacen object
     *
     * @param   Productosucursalalmacen|PropelObjectCollection $productosucursalalmacen  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AlmacenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductosucursalalmacen($productosucursalalmacen, $comparison = null)
    {
        if ($productosucursalalmacen instanceof Productosucursalalmacen) {
            return $this
                ->addUsingAlias(AlmacenPeer::IDALMACEN, $productosucursalalmacen->getIdalmacen(), $comparison);
        } elseif ($productosucursalalmacen instanceof PropelObjectCollection) {
            return $this
                ->useProductosucursalalmacenQuery()
                ->filterByPrimaryKeys($productosucursalalmacen->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProductosucursalalmacen() only accepts arguments of type Productosucursalalmacen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Productosucursalalmacen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AlmacenQuery The current query, for fluid interface
     */
    public function joinProductosucursalalmacen($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Productosucursalalmacen');

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
            $this->addJoinObject($join, 'Productosucursalalmacen');
        }

        return $this;
    }

    /**
     * Use the Productosucursalalmacen relation Productosucursalalmacen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProductosucursalalmacenQuery A secondary query class using the current class as primary query
     */
    public function useProductosucursalalmacenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProductosucursalalmacen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Productosucursalalmacen', 'ProductosucursalalmacenQuery');
    }

    /**
     * Filter the query by a related Requisicion object
     *
     * @param   Requisicion|PropelObjectCollection $requisicion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AlmacenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRequisicionRelatedByIdalmacendestino($requisicion, $comparison = null)
    {
        if ($requisicion instanceof Requisicion) {
            return $this
                ->addUsingAlias(AlmacenPeer::IDALMACEN, $requisicion->getIdalmacendestino(), $comparison);
        } elseif ($requisicion instanceof PropelObjectCollection) {
            return $this
                ->useRequisicionRelatedByIdalmacendestinoQuery()
                ->filterByPrimaryKeys($requisicion->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRequisicionRelatedByIdalmacendestino() only accepts arguments of type Requisicion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RequisicionRelatedByIdalmacendestino relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AlmacenQuery The current query, for fluid interface
     */
    public function joinRequisicionRelatedByIdalmacendestino($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RequisicionRelatedByIdalmacendestino');

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
            $this->addJoinObject($join, 'RequisicionRelatedByIdalmacendestino');
        }

        return $this;
    }

    /**
     * Use the RequisicionRelatedByIdalmacendestino relation Requisicion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RequisicionQuery A secondary query class using the current class as primary query
     */
    public function useRequisicionRelatedByIdalmacendestinoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRequisicionRelatedByIdalmacendestino($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RequisicionRelatedByIdalmacendestino', 'RequisicionQuery');
    }

    /**
     * Filter the query by a related Requisicion object
     *
     * @param   Requisicion|PropelObjectCollection $requisicion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AlmacenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRequisicionRelatedByIdalmacenorigen($requisicion, $comparison = null)
    {
        if ($requisicion instanceof Requisicion) {
            return $this
                ->addUsingAlias(AlmacenPeer::IDALMACEN, $requisicion->getIdalmacenorigen(), $comparison);
        } elseif ($requisicion instanceof PropelObjectCollection) {
            return $this
                ->useRequisicionRelatedByIdalmacenorigenQuery()
                ->filterByPrimaryKeys($requisicion->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRequisicionRelatedByIdalmacenorigen() only accepts arguments of type Requisicion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RequisicionRelatedByIdalmacenorigen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AlmacenQuery The current query, for fluid interface
     */
    public function joinRequisicionRelatedByIdalmacenorigen($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RequisicionRelatedByIdalmacenorigen');

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
            $this->addJoinObject($join, 'RequisicionRelatedByIdalmacenorigen');
        }

        return $this;
    }

    /**
     * Use the RequisicionRelatedByIdalmacenorigen relation Requisicion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RequisicionQuery A secondary query class using the current class as primary query
     */
    public function useRequisicionRelatedByIdalmacenorigenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRequisicionRelatedByIdalmacenorigen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RequisicionRelatedByIdalmacenorigen', 'RequisicionQuery');
    }

    /**
     * Filter the query by a related Ventadetalle object
     *
     * @param   Ventadetalle|PropelObjectCollection $ventadetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AlmacenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVentadetalle($ventadetalle, $comparison = null)
    {
        if ($ventadetalle instanceof Ventadetalle) {
            return $this
                ->addUsingAlias(AlmacenPeer::IDALMACEN, $ventadetalle->getIdalmacen(), $comparison);
        } elseif ($ventadetalle instanceof PropelObjectCollection) {
            return $this
                ->useVentadetalleQuery()
                ->filterByPrimaryKeys($ventadetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByVentadetalle() only accepts arguments of type Ventadetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Ventadetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AlmacenQuery The current query, for fluid interface
     */
    public function joinVentadetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Ventadetalle');

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
            $this->addJoinObject($join, 'Ventadetalle');
        }

        return $this;
    }

    /**
     * Use the Ventadetalle relation Ventadetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   VentadetalleQuery A secondary query class using the current class as primary query
     */
    public function useVentadetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVentadetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ventadetalle', 'VentadetalleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Almacen $almacen Object to remove from the list of results
     *
     * @return AlmacenQuery The current query, for fluid interface
     */
    public function prune($almacen = null)
    {
        if ($almacen) {
            $this->addUsingAlias(AlmacenPeer::IDALMACEN, $almacen->getIdalmacen(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
