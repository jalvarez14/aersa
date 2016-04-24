<?php


/**
 * Base class that represents a query for the 'plantillatablajeria' table.
 *
 *
 *
 * @method PlantillatablajeriaQuery orderByIdplantillatablajeria($order = Criteria::ASC) Order by the idplantillatablajeria column
 * @method PlantillatablajeriaQuery orderByIdempresa($order = Criteria::ASC) Order by the idempresa column
 * @method PlantillatablajeriaQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 * @method PlantillatablajeriaQuery orderByPlantillatablajeriaNombre($order = Criteria::ASC) Order by the plantillatablajeria_nombre column
 * @method PlantillatablajeriaQuery orderByPlantillatablajeriaDescripcion($order = Criteria::ASC) Order by the plantillatablajeria_descripcion column
 *
 * @method PlantillatablajeriaQuery groupByIdplantillatablajeria() Group by the idplantillatablajeria column
 * @method PlantillatablajeriaQuery groupByIdempresa() Group by the idempresa column
 * @method PlantillatablajeriaQuery groupByIdproducto() Group by the idproducto column
 * @method PlantillatablajeriaQuery groupByPlantillatablajeriaNombre() Group by the plantillatablajeria_nombre column
 * @method PlantillatablajeriaQuery groupByPlantillatablajeriaDescripcion() Group by the plantillatablajeria_descripcion column
 *
 * @method PlantillatablajeriaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PlantillatablajeriaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PlantillatablajeriaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PlantillatablajeriaQuery leftJoinEmpresa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empresa relation
 * @method PlantillatablajeriaQuery rightJoinEmpresa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empresa relation
 * @method PlantillatablajeriaQuery innerJoinEmpresa($relationAlias = null) Adds a INNER JOIN clause to the query using the Empresa relation
 *
 * @method PlantillatablajeriaQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method PlantillatablajeriaQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method PlantillatablajeriaQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method PlantillatablajeriaQuery leftJoinPlantillatablajeriadetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Plantillatablajeriadetalle relation
 * @method PlantillatablajeriaQuery rightJoinPlantillatablajeriadetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Plantillatablajeriadetalle relation
 * @method PlantillatablajeriaQuery innerJoinPlantillatablajeriadetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Plantillatablajeriadetalle relation
 *
 * @method Plantillatablajeria findOne(PropelPDO $con = null) Return the first Plantillatablajeria matching the query
 * @method Plantillatablajeria findOneOrCreate(PropelPDO $con = null) Return the first Plantillatablajeria matching the query, or a new Plantillatablajeria object populated from the query conditions when no match is found
 *
 * @method Plantillatablajeria findOneByIdempresa(int $idempresa) Return the first Plantillatablajeria filtered by the idempresa column
 * @method Plantillatablajeria findOneByIdproducto(int $idproducto) Return the first Plantillatablajeria filtered by the idproducto column
 * @method Plantillatablajeria findOneByPlantillatablajeriaNombre(string $plantillatablajeria_nombre) Return the first Plantillatablajeria filtered by the plantillatablajeria_nombre column
 * @method Plantillatablajeria findOneByPlantillatablajeriaDescripcion(string $plantillatablajeria_descripcion) Return the first Plantillatablajeria filtered by the plantillatablajeria_descripcion column
 *
 * @method array findByIdplantillatablajeria(int $idplantillatablajeria) Return Plantillatablajeria objects filtered by the idplantillatablajeria column
 * @method array findByIdempresa(int $idempresa) Return Plantillatablajeria objects filtered by the idempresa column
 * @method array findByIdproducto(int $idproducto) Return Plantillatablajeria objects filtered by the idproducto column
 * @method array findByPlantillatablajeriaNombre(string $plantillatablajeria_nombre) Return Plantillatablajeria objects filtered by the plantillatablajeria_nombre column
 * @method array findByPlantillatablajeriaDescripcion(string $plantillatablajeria_descripcion) Return Plantillatablajeria objects filtered by the plantillatablajeria_descripcion column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BasePlantillatablajeriaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePlantillatablajeriaQuery object.
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
            $modelName = 'Plantillatablajeria';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PlantillatablajeriaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PlantillatablajeriaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PlantillatablajeriaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PlantillatablajeriaQuery) {
            return $criteria;
        }
        $query = new PlantillatablajeriaQuery(null, null, $modelAlias);

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
     * @return   Plantillatablajeria|Plantillatablajeria[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PlantillatablajeriaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PlantillatablajeriaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Plantillatablajeria A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdplantillatablajeria($key, $con = null)
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
     * @return                 Plantillatablajeria A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idplantillatablajeria`, `idempresa`, `idproducto`, `plantillatablajeria_nombre`, `plantillatablajeria_descripcion` FROM `plantillatablajeria` WHERE `idplantillatablajeria` = :p0';
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
            $obj = new Plantillatablajeria();
            $obj->hydrate($row);
            PlantillatablajeriaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Plantillatablajeria|Plantillatablajeria[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Plantillatablajeria[]|mixed the list of results, formatted by the current formatter
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
     * @return PlantillatablajeriaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PlantillatablajeriaPeer::IDPLANTILLATABLAJERIA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PlantillatablajeriaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PlantillatablajeriaPeer::IDPLANTILLATABLAJERIA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idplantillatablajeria column
     *
     * Example usage:
     * <code>
     * $query->filterByIdplantillatablajeria(1234); // WHERE idplantillatablajeria = 1234
     * $query->filterByIdplantillatablajeria(array(12, 34)); // WHERE idplantillatablajeria IN (12, 34)
     * $query->filterByIdplantillatablajeria(array('min' => 12)); // WHERE idplantillatablajeria >= 12
     * $query->filterByIdplantillatablajeria(array('max' => 12)); // WHERE idplantillatablajeria <= 12
     * </code>
     *
     * @param     mixed $idplantillatablajeria The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PlantillatablajeriaQuery The current query, for fluid interface
     */
    public function filterByIdplantillatablajeria($idplantillatablajeria = null, $comparison = null)
    {
        if (is_array($idplantillatablajeria)) {
            $useMinMax = false;
            if (isset($idplantillatablajeria['min'])) {
                $this->addUsingAlias(PlantillatablajeriaPeer::IDPLANTILLATABLAJERIA, $idplantillatablajeria['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idplantillatablajeria['max'])) {
                $this->addUsingAlias(PlantillatablajeriaPeer::IDPLANTILLATABLAJERIA, $idplantillatablajeria['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PlantillatablajeriaPeer::IDPLANTILLATABLAJERIA, $idplantillatablajeria, $comparison);
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
     * @return PlantillatablajeriaQuery The current query, for fluid interface
     */
    public function filterByIdempresa($idempresa = null, $comparison = null)
    {
        if (is_array($idempresa)) {
            $useMinMax = false;
            if (isset($idempresa['min'])) {
                $this->addUsingAlias(PlantillatablajeriaPeer::IDEMPRESA, $idempresa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempresa['max'])) {
                $this->addUsingAlias(PlantillatablajeriaPeer::IDEMPRESA, $idempresa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PlantillatablajeriaPeer::IDEMPRESA, $idempresa, $comparison);
    }

    /**
     * Filter the query on the idproducto column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproducto(1234); // WHERE idproducto = 1234
     * $query->filterByIdproducto(array(12, 34)); // WHERE idproducto IN (12, 34)
     * $query->filterByIdproducto(array('min' => 12)); // WHERE idproducto >= 12
     * $query->filterByIdproducto(array('max' => 12)); // WHERE idproducto <= 12
     * </code>
     *
     * @see       filterByProducto()
     *
     * @param     mixed $idproducto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PlantillatablajeriaQuery The current query, for fluid interface
     */
    public function filterByIdproducto($idproducto = null, $comparison = null)
    {
        if (is_array($idproducto)) {
            $useMinMax = false;
            if (isset($idproducto['min'])) {
                $this->addUsingAlias(PlantillatablajeriaPeer::IDPRODUCTO, $idproducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproducto['max'])) {
                $this->addUsingAlias(PlantillatablajeriaPeer::IDPRODUCTO, $idproducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PlantillatablajeriaPeer::IDPRODUCTO, $idproducto, $comparison);
    }

    /**
     * Filter the query on the plantillatablajeria_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByPlantillatablajeriaNombre('fooValue');   // WHERE plantillatablajeria_nombre = 'fooValue'
     * $query->filterByPlantillatablajeriaNombre('%fooValue%'); // WHERE plantillatablajeria_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $plantillatablajeriaNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PlantillatablajeriaQuery The current query, for fluid interface
     */
    public function filterByPlantillatablajeriaNombre($plantillatablajeriaNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($plantillatablajeriaNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $plantillatablajeriaNombre)) {
                $plantillatablajeriaNombre = str_replace('*', '%', $plantillatablajeriaNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PlantillatablajeriaPeer::PLANTILLATABLAJERIA_NOMBRE, $plantillatablajeriaNombre, $comparison);
    }

    /**
     * Filter the query on the plantillatablajeria_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByPlantillatablajeriaDescripcion('fooValue');   // WHERE plantillatablajeria_descripcion = 'fooValue'
     * $query->filterByPlantillatablajeriaDescripcion('%fooValue%'); // WHERE plantillatablajeria_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $plantillatablajeriaDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PlantillatablajeriaQuery The current query, for fluid interface
     */
    public function filterByPlantillatablajeriaDescripcion($plantillatablajeriaDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($plantillatablajeriaDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $plantillatablajeriaDescripcion)) {
                $plantillatablajeriaDescripcion = str_replace('*', '%', $plantillatablajeriaDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PlantillatablajeriaPeer::PLANTILLATABLAJERIA_DESCRIPCION, $plantillatablajeriaDescripcion, $comparison);
    }

    /**
     * Filter the query by a related Empresa object
     *
     * @param   Empresa|PropelObjectCollection $empresa The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PlantillatablajeriaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpresa($empresa, $comparison = null)
    {
        if ($empresa instanceof Empresa) {
            return $this
                ->addUsingAlias(PlantillatablajeriaPeer::IDEMPRESA, $empresa->getIdempresa(), $comparison);
        } elseif ($empresa instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PlantillatablajeriaPeer::IDEMPRESA, $empresa->toKeyValue('PrimaryKey', 'Idempresa'), $comparison);
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
     * @return PlantillatablajeriaQuery The current query, for fluid interface
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
     * Filter the query by a related Producto object
     *
     * @param   Producto|PropelObjectCollection $producto The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PlantillatablajeriaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(PlantillatablajeriaPeer::IDPRODUCTO, $producto->getIdproducto(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PlantillatablajeriaPeer::IDPRODUCTO, $producto->toKeyValue('PrimaryKey', 'Idproducto'), $comparison);
        } else {
            throw new PropelException('filterByProducto() only accepts arguments of type Producto or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Producto relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PlantillatablajeriaQuery The current query, for fluid interface
     */
    public function joinProducto($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Producto');

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
            $this->addJoinObject($join, 'Producto');
        }

        return $this;
    }

    /**
     * Use the Producto relation Producto object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProductoQuery A secondary query class using the current class as primary query
     */
    public function useProductoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProducto($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Producto', 'ProductoQuery');
    }

    /**
     * Filter the query by a related Plantillatablajeriadetalle object
     *
     * @param   Plantillatablajeriadetalle|PropelObjectCollection $plantillatablajeriadetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PlantillatablajeriaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPlantillatablajeriadetalle($plantillatablajeriadetalle, $comparison = null)
    {
        if ($plantillatablajeriadetalle instanceof Plantillatablajeriadetalle) {
            return $this
                ->addUsingAlias(PlantillatablajeriaPeer::IDPLANTILLATABLAJERIA, $plantillatablajeriadetalle->getIdplantillatablajeria(), $comparison);
        } elseif ($plantillatablajeriadetalle instanceof PropelObjectCollection) {
            return $this
                ->usePlantillatablajeriadetalleQuery()
                ->filterByPrimaryKeys($plantillatablajeriadetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPlantillatablajeriadetalle() only accepts arguments of type Plantillatablajeriadetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Plantillatablajeriadetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PlantillatablajeriaQuery The current query, for fluid interface
     */
    public function joinPlantillatablajeriadetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Plantillatablajeriadetalle');

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
            $this->addJoinObject($join, 'Plantillatablajeriadetalle');
        }

        return $this;
    }

    /**
     * Use the Plantillatablajeriadetalle relation Plantillatablajeriadetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PlantillatablajeriadetalleQuery A secondary query class using the current class as primary query
     */
    public function usePlantillatablajeriadetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPlantillatablajeriadetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Plantillatablajeriadetalle', 'PlantillatablajeriadetalleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Plantillatablajeria $plantillatablajeria Object to remove from the list of results
     *
     * @return PlantillatablajeriaQuery The current query, for fluid interface
     */
    public function prune($plantillatablajeria = null)
    {
        if ($plantillatablajeria) {
            $this->addUsingAlias(PlantillatablajeriaPeer::IDPLANTILLATABLAJERIA, $plantillatablajeria->getIdplantillatablajeria(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
