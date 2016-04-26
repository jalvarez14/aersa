<?php


/**
 * Base class that represents a query for the 'inventariomesdetalle' table.
 *
 *
 *
 * @method InventariomesdetalleQuery orderByIdinventariomesdetalle($order = Criteria::ASC) Order by the idinventariomesdetalle column
 * @method InventariomesdetalleQuery orderByIdinventariomes($order = Criteria::ASC) Order by the idinventariomes column
 * @method InventariomesdetalleQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 * @method InventariomesdetalleQuery orderByInventariomesdetalleStockinicial($order = Criteria::ASC) Order by the inventariomesdetalle_stockinicial column
 * @method InventariomesdetalleQuery orderByInventariomesdetalleStockteorico($order = Criteria::ASC) Order by the inventariomesdetalle_stockteorico column
 * @method InventariomesdetalleQuery orderByInventariomesdetalleStockfisico($order = Criteria::ASC) Order by the inventariomesdetalle_stockfisico column
 * @method InventariomesdetalleQuery orderByInventariomesdetalleDiferencia($order = Criteria::ASC) Order by the inventariomesdetalle_diferencia column
 * @method InventariomesdetalleQuery orderByInventariomesdetalleRevisada($order = Criteria::ASC) Order by the inventariomesdetalle_revisada column
 * @method InventariomesdetalleQuery orderByInventariomesdetalleIngresocompra($order = Criteria::ASC) Order by the inventariomesdetalle_ingresocompra column
 * @method InventariomesdetalleQuery orderByInventariomesdetalleIngresorequisicion($order = Criteria::ASC) Order by the inventariomesdetalle_ingresorequisicion column
 * @method InventariomesdetalleQuery orderByInventariomesdetalleEgresorequisicion($order = Criteria::ASC) Order by the inventariomesdetalle_egresorequisicion column
 * @method InventariomesdetalleQuery orderByInventariomesdetalleEgresoventa($order = Criteria::ASC) Order by the inventariomesdetalle_egresoventa column
 * @method InventariomesdetalleQuery orderByInventariomesdetalleIngresoordentablajeria($order = Criteria::ASC) Order by the inventariomesdetalle_ingresoordentablajeria column
 * @method InventariomesdetalleQuery orderByInventariomesdetalleEgresoordentablajeria($order = Criteria::ASC) Order by the inventariomesdetalle_egresoordentablajeria column
 * @method InventariomesdetalleQuery orderByInventariomesdetalleEgresodevolucion($order = Criteria::ASC) Order by the inventariomesdetalle_egresodevolucion column
 *
 * @method InventariomesdetalleQuery groupByIdinventariomesdetalle() Group by the idinventariomesdetalle column
 * @method InventariomesdetalleQuery groupByIdinventariomes() Group by the idinventariomes column
 * @method InventariomesdetalleQuery groupByIdproducto() Group by the idproducto column
 * @method InventariomesdetalleQuery groupByInventariomesdetalleStockinicial() Group by the inventariomesdetalle_stockinicial column
 * @method InventariomesdetalleQuery groupByInventariomesdetalleStockteorico() Group by the inventariomesdetalle_stockteorico column
 * @method InventariomesdetalleQuery groupByInventariomesdetalleStockfisico() Group by the inventariomesdetalle_stockfisico column
 * @method InventariomesdetalleQuery groupByInventariomesdetalleDiferencia() Group by the inventariomesdetalle_diferencia column
 * @method InventariomesdetalleQuery groupByInventariomesdetalleRevisada() Group by the inventariomesdetalle_revisada column
 * @method InventariomesdetalleQuery groupByInventariomesdetalleIngresocompra() Group by the inventariomesdetalle_ingresocompra column
 * @method InventariomesdetalleQuery groupByInventariomesdetalleIngresorequisicion() Group by the inventariomesdetalle_ingresorequisicion column
 * @method InventariomesdetalleQuery groupByInventariomesdetalleEgresorequisicion() Group by the inventariomesdetalle_egresorequisicion column
 * @method InventariomesdetalleQuery groupByInventariomesdetalleEgresoventa() Group by the inventariomesdetalle_egresoventa column
 * @method InventariomesdetalleQuery groupByInventariomesdetalleIngresoordentablajeria() Group by the inventariomesdetalle_ingresoordentablajeria column
 * @method InventariomesdetalleQuery groupByInventariomesdetalleEgresoordentablajeria() Group by the inventariomesdetalle_egresoordentablajeria column
 * @method InventariomesdetalleQuery groupByInventariomesdetalleEgresodevolucion() Group by the inventariomesdetalle_egresodevolucion column
 *
 * @method InventariomesdetalleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method InventariomesdetalleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method InventariomesdetalleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method InventariomesdetalleQuery leftJoinInventariomes($relationAlias = null) Adds a LEFT JOIN clause to the query using the Inventariomes relation
 * @method InventariomesdetalleQuery rightJoinInventariomes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Inventariomes relation
 * @method InventariomesdetalleQuery innerJoinInventariomes($relationAlias = null) Adds a INNER JOIN clause to the query using the Inventariomes relation
 *
 * @method InventariomesdetalleQuery leftJoinInventariomesdetallenota($relationAlias = null) Adds a LEFT JOIN clause to the query using the Inventariomesdetallenota relation
 * @method InventariomesdetalleQuery rightJoinInventariomesdetallenota($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Inventariomesdetallenota relation
 * @method InventariomesdetalleQuery innerJoinInventariomesdetallenota($relationAlias = null) Adds a INNER JOIN clause to the query using the Inventariomesdetallenota relation
 *
 * @method Inventariomesdetalle findOne(PropelPDO $con = null) Return the first Inventariomesdetalle matching the query
 * @method Inventariomesdetalle findOneOrCreate(PropelPDO $con = null) Return the first Inventariomesdetalle matching the query, or a new Inventariomesdetalle object populated from the query conditions when no match is found
 *
 * @method Inventariomesdetalle findOneByIdinventariomes(int $idinventariomes) Return the first Inventariomesdetalle filtered by the idinventariomes column
 * @method Inventariomesdetalle findOneByIdproducto(int $idproducto) Return the first Inventariomesdetalle filtered by the idproducto column
 * @method Inventariomesdetalle findOneByInventariomesdetalleStockinicial(double $inventariomesdetalle_stockinicial) Return the first Inventariomesdetalle filtered by the inventariomesdetalle_stockinicial column
 * @method Inventariomesdetalle findOneByInventariomesdetalleStockteorico(double $inventariomesdetalle_stockteorico) Return the first Inventariomesdetalle filtered by the inventariomesdetalle_stockteorico column
 * @method Inventariomesdetalle findOneByInventariomesdetalleStockfisico(double $inventariomesdetalle_stockfisico) Return the first Inventariomesdetalle filtered by the inventariomesdetalle_stockfisico column
 * @method Inventariomesdetalle findOneByInventariomesdetalleDiferencia(double $inventariomesdetalle_diferencia) Return the first Inventariomesdetalle filtered by the inventariomesdetalle_diferencia column
 * @method Inventariomesdetalle findOneByInventariomesdetalleRevisada(boolean $inventariomesdetalle_revisada) Return the first Inventariomesdetalle filtered by the inventariomesdetalle_revisada column
 * @method Inventariomesdetalle findOneByInventariomesdetalleIngresocompra(double $inventariomesdetalle_ingresocompra) Return the first Inventariomesdetalle filtered by the inventariomesdetalle_ingresocompra column
 * @method Inventariomesdetalle findOneByInventariomesdetalleIngresorequisicion(double $inventariomesdetalle_ingresorequisicion) Return the first Inventariomesdetalle filtered by the inventariomesdetalle_ingresorequisicion column
 * @method Inventariomesdetalle findOneByInventariomesdetalleEgresorequisicion(double $inventariomesdetalle_egresorequisicion) Return the first Inventariomesdetalle filtered by the inventariomesdetalle_egresorequisicion column
 * @method Inventariomesdetalle findOneByInventariomesdetalleEgresoventa(double $inventariomesdetalle_egresoventa) Return the first Inventariomesdetalle filtered by the inventariomesdetalle_egresoventa column
 * @method Inventariomesdetalle findOneByInventariomesdetalleIngresoordentablajeria(double $inventariomesdetalle_ingresoordentablajeria) Return the first Inventariomesdetalle filtered by the inventariomesdetalle_ingresoordentablajeria column
 * @method Inventariomesdetalle findOneByInventariomesdetalleEgresoordentablajeria(double $inventariomesdetalle_egresoordentablajeria) Return the first Inventariomesdetalle filtered by the inventariomesdetalle_egresoordentablajeria column
 * @method Inventariomesdetalle findOneByInventariomesdetalleEgresodevolucion(double $inventariomesdetalle_egresodevolucion) Return the first Inventariomesdetalle filtered by the inventariomesdetalle_egresodevolucion column
 *
 * @method array findByIdinventariomesdetalle(int $idinventariomesdetalle) Return Inventariomesdetalle objects filtered by the idinventariomesdetalle column
 * @method array findByIdinventariomes(int $idinventariomes) Return Inventariomesdetalle objects filtered by the idinventariomes column
 * @method array findByIdproducto(int $idproducto) Return Inventariomesdetalle objects filtered by the idproducto column
 * @method array findByInventariomesdetalleStockinicial(double $inventariomesdetalle_stockinicial) Return Inventariomesdetalle objects filtered by the inventariomesdetalle_stockinicial column
 * @method array findByInventariomesdetalleStockteorico(double $inventariomesdetalle_stockteorico) Return Inventariomesdetalle objects filtered by the inventariomesdetalle_stockteorico column
 * @method array findByInventariomesdetalleStockfisico(double $inventariomesdetalle_stockfisico) Return Inventariomesdetalle objects filtered by the inventariomesdetalle_stockfisico column
 * @method array findByInventariomesdetalleDiferencia(double $inventariomesdetalle_diferencia) Return Inventariomesdetalle objects filtered by the inventariomesdetalle_diferencia column
 * @method array findByInventariomesdetalleRevisada(boolean $inventariomesdetalle_revisada) Return Inventariomesdetalle objects filtered by the inventariomesdetalle_revisada column
 * @method array findByInventariomesdetalleIngresocompra(double $inventariomesdetalle_ingresocompra) Return Inventariomesdetalle objects filtered by the inventariomesdetalle_ingresocompra column
 * @method array findByInventariomesdetalleIngresorequisicion(double $inventariomesdetalle_ingresorequisicion) Return Inventariomesdetalle objects filtered by the inventariomesdetalle_ingresorequisicion column
 * @method array findByInventariomesdetalleEgresorequisicion(double $inventariomesdetalle_egresorequisicion) Return Inventariomesdetalle objects filtered by the inventariomesdetalle_egresorequisicion column
 * @method array findByInventariomesdetalleEgresoventa(double $inventariomesdetalle_egresoventa) Return Inventariomesdetalle objects filtered by the inventariomesdetalle_egresoventa column
 * @method array findByInventariomesdetalleIngresoordentablajeria(double $inventariomesdetalle_ingresoordentablajeria) Return Inventariomesdetalle objects filtered by the inventariomesdetalle_ingresoordentablajeria column
 * @method array findByInventariomesdetalleEgresoordentablajeria(double $inventariomesdetalle_egresoordentablajeria) Return Inventariomesdetalle objects filtered by the inventariomesdetalle_egresoordentablajeria column
 * @method array findByInventariomesdetalleEgresodevolucion(double $inventariomesdetalle_egresodevolucion) Return Inventariomesdetalle objects filtered by the inventariomesdetalle_egresodevolucion column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseInventariomesdetalleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseInventariomesdetalleQuery object.
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
            $modelName = 'Inventariomesdetalle';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new InventariomesdetalleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   InventariomesdetalleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return InventariomesdetalleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof InventariomesdetalleQuery) {
            return $criteria;
        }
        $query = new InventariomesdetalleQuery(null, null, $modelAlias);

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
     * @return   Inventariomesdetalle|Inventariomesdetalle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = InventariomesdetallePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(InventariomesdetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Inventariomesdetalle A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdinventariomesdetalle($key, $con = null)
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
     * @return                 Inventariomesdetalle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idinventariomesdetalle`, `idinventariomes`, `idproducto`, `inventariomesdetalle_stockinicial`, `inventariomesdetalle_stockteorico`, `inventariomesdetalle_stockfisico`, `inventariomesdetalle_diferencia`, `inventariomesdetalle_revisada`, `inventariomesdetalle_ingresocompra`, `inventariomesdetalle_ingresorequisicion`, `inventariomesdetalle_egresorequisicion`, `inventariomesdetalle_egresoventa`, `inventariomesdetalle_ingresoordentablajeria`, `inventariomesdetalle_egresoordentablajeria`, `inventariomesdetalle_egresodevolucion` FROM `inventariomesdetalle` WHERE `idinventariomesdetalle` = :p0';
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
            $obj = new Inventariomesdetalle();
            $obj->hydrate($row);
            InventariomesdetallePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Inventariomesdetalle|Inventariomesdetalle[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Inventariomesdetalle[]|mixed the list of results, formatted by the current formatter
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
     * @return InventariomesdetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(InventariomesdetallePeer::IDINVENTARIOMESDETALLE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return InventariomesdetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(InventariomesdetallePeer::IDINVENTARIOMESDETALLE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idinventariomesdetalle column
     *
     * Example usage:
     * <code>
     * $query->filterByIdinventariomesdetalle(1234); // WHERE idinventariomesdetalle = 1234
     * $query->filterByIdinventariomesdetalle(array(12, 34)); // WHERE idinventariomesdetalle IN (12, 34)
     * $query->filterByIdinventariomesdetalle(array('min' => 12)); // WHERE idinventariomesdetalle >= 12
     * $query->filterByIdinventariomesdetalle(array('max' => 12)); // WHERE idinventariomesdetalle <= 12
     * </code>
     *
     * @param     mixed $idinventariomesdetalle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InventariomesdetalleQuery The current query, for fluid interface
     */
    public function filterByIdinventariomesdetalle($idinventariomesdetalle = null, $comparison = null)
    {
        if (is_array($idinventariomesdetalle)) {
            $useMinMax = false;
            if (isset($idinventariomesdetalle['min'])) {
                $this->addUsingAlias(InventariomesdetallePeer::IDINVENTARIOMESDETALLE, $idinventariomesdetalle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idinventariomesdetalle['max'])) {
                $this->addUsingAlias(InventariomesdetallePeer::IDINVENTARIOMESDETALLE, $idinventariomesdetalle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesdetallePeer::IDINVENTARIOMESDETALLE, $idinventariomesdetalle, $comparison);
    }

    /**
     * Filter the query on the idinventariomes column
     *
     * Example usage:
     * <code>
     * $query->filterByIdinventariomes(1234); // WHERE idinventariomes = 1234
     * $query->filterByIdinventariomes(array(12, 34)); // WHERE idinventariomes IN (12, 34)
     * $query->filterByIdinventariomes(array('min' => 12)); // WHERE idinventariomes >= 12
     * $query->filterByIdinventariomes(array('max' => 12)); // WHERE idinventariomes <= 12
     * </code>
     *
     * @see       filterByInventariomes()
     *
     * @param     mixed $idinventariomes The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InventariomesdetalleQuery The current query, for fluid interface
     */
    public function filterByIdinventariomes($idinventariomes = null, $comparison = null)
    {
        if (is_array($idinventariomes)) {
            $useMinMax = false;
            if (isset($idinventariomes['min'])) {
                $this->addUsingAlias(InventariomesdetallePeer::IDINVENTARIOMES, $idinventariomes['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idinventariomes['max'])) {
                $this->addUsingAlias(InventariomesdetallePeer::IDINVENTARIOMES, $idinventariomes['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesdetallePeer::IDINVENTARIOMES, $idinventariomes, $comparison);
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
     * @param     mixed $idproducto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InventariomesdetalleQuery The current query, for fluid interface
     */
    public function filterByIdproducto($idproducto = null, $comparison = null)
    {
        if (is_array($idproducto)) {
            $useMinMax = false;
            if (isset($idproducto['min'])) {
                $this->addUsingAlias(InventariomesdetallePeer::IDPRODUCTO, $idproducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproducto['max'])) {
                $this->addUsingAlias(InventariomesdetallePeer::IDPRODUCTO, $idproducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesdetallePeer::IDPRODUCTO, $idproducto, $comparison);
    }

    /**
     * Filter the query on the inventariomesdetalle_stockinicial column
     *
     * Example usage:
     * <code>
     * $query->filterByInventariomesdetalleStockinicial(1234); // WHERE inventariomesdetalle_stockinicial = 1234
     * $query->filterByInventariomesdetalleStockinicial(array(12, 34)); // WHERE inventariomesdetalle_stockinicial IN (12, 34)
     * $query->filterByInventariomesdetalleStockinicial(array('min' => 12)); // WHERE inventariomesdetalle_stockinicial >= 12
     * $query->filterByInventariomesdetalleStockinicial(array('max' => 12)); // WHERE inventariomesdetalle_stockinicial <= 12
     * </code>
     *
     * @param     mixed $inventariomesdetalleStockinicial The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InventariomesdetalleQuery The current query, for fluid interface
     */
    public function filterByInventariomesdetalleStockinicial($inventariomesdetalleStockinicial = null, $comparison = null)
    {
        if (is_array($inventariomesdetalleStockinicial)) {
            $useMinMax = false;
            if (isset($inventariomesdetalleStockinicial['min'])) {
                $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_STOCKINICIAL, $inventariomesdetalleStockinicial['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inventariomesdetalleStockinicial['max'])) {
                $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_STOCKINICIAL, $inventariomesdetalleStockinicial['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_STOCKINICIAL, $inventariomesdetalleStockinicial, $comparison);
    }

    /**
     * Filter the query on the inventariomesdetalle_stockteorico column
     *
     * Example usage:
     * <code>
     * $query->filterByInventariomesdetalleStockteorico(1234); // WHERE inventariomesdetalle_stockteorico = 1234
     * $query->filterByInventariomesdetalleStockteorico(array(12, 34)); // WHERE inventariomesdetalle_stockteorico IN (12, 34)
     * $query->filterByInventariomesdetalleStockteorico(array('min' => 12)); // WHERE inventariomesdetalle_stockteorico >= 12
     * $query->filterByInventariomesdetalleStockteorico(array('max' => 12)); // WHERE inventariomesdetalle_stockteorico <= 12
     * </code>
     *
     * @param     mixed $inventariomesdetalleStockteorico The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InventariomesdetalleQuery The current query, for fluid interface
     */
    public function filterByInventariomesdetalleStockteorico($inventariomesdetalleStockteorico = null, $comparison = null)
    {
        if (is_array($inventariomesdetalleStockteorico)) {
            $useMinMax = false;
            if (isset($inventariomesdetalleStockteorico['min'])) {
                $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_STOCKTEORICO, $inventariomesdetalleStockteorico['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inventariomesdetalleStockteorico['max'])) {
                $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_STOCKTEORICO, $inventariomesdetalleStockteorico['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_STOCKTEORICO, $inventariomesdetalleStockteorico, $comparison);
    }

    /**
     * Filter the query on the inventariomesdetalle_stockfisico column
     *
     * Example usage:
     * <code>
     * $query->filterByInventariomesdetalleStockfisico(1234); // WHERE inventariomesdetalle_stockfisico = 1234
     * $query->filterByInventariomesdetalleStockfisico(array(12, 34)); // WHERE inventariomesdetalle_stockfisico IN (12, 34)
     * $query->filterByInventariomesdetalleStockfisico(array('min' => 12)); // WHERE inventariomesdetalle_stockfisico >= 12
     * $query->filterByInventariomesdetalleStockfisico(array('max' => 12)); // WHERE inventariomesdetalle_stockfisico <= 12
     * </code>
     *
     * @param     mixed $inventariomesdetalleStockfisico The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InventariomesdetalleQuery The current query, for fluid interface
     */
    public function filterByInventariomesdetalleStockfisico($inventariomesdetalleStockfisico = null, $comparison = null)
    {
        if (is_array($inventariomesdetalleStockfisico)) {
            $useMinMax = false;
            if (isset($inventariomesdetalleStockfisico['min'])) {
                $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_STOCKFISICO, $inventariomesdetalleStockfisico['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inventariomesdetalleStockfisico['max'])) {
                $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_STOCKFISICO, $inventariomesdetalleStockfisico['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_STOCKFISICO, $inventariomesdetalleStockfisico, $comparison);
    }

    /**
     * Filter the query on the inventariomesdetalle_diferencia column
     *
     * Example usage:
     * <code>
     * $query->filterByInventariomesdetalleDiferencia(1234); // WHERE inventariomesdetalle_diferencia = 1234
     * $query->filterByInventariomesdetalleDiferencia(array(12, 34)); // WHERE inventariomesdetalle_diferencia IN (12, 34)
     * $query->filterByInventariomesdetalleDiferencia(array('min' => 12)); // WHERE inventariomesdetalle_diferencia >= 12
     * $query->filterByInventariomesdetalleDiferencia(array('max' => 12)); // WHERE inventariomesdetalle_diferencia <= 12
     * </code>
     *
     * @param     mixed $inventariomesdetalleDiferencia The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InventariomesdetalleQuery The current query, for fluid interface
     */
    public function filterByInventariomesdetalleDiferencia($inventariomesdetalleDiferencia = null, $comparison = null)
    {
        if (is_array($inventariomesdetalleDiferencia)) {
            $useMinMax = false;
            if (isset($inventariomesdetalleDiferencia['min'])) {
                $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_DIFERENCIA, $inventariomesdetalleDiferencia['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inventariomesdetalleDiferencia['max'])) {
                $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_DIFERENCIA, $inventariomesdetalleDiferencia['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_DIFERENCIA, $inventariomesdetalleDiferencia, $comparison);
    }

    /**
     * Filter the query on the inventariomesdetalle_revisada column
     *
     * Example usage:
     * <code>
     * $query->filterByInventariomesdetalleRevisada(true); // WHERE inventariomesdetalle_revisada = true
     * $query->filterByInventariomesdetalleRevisada('yes'); // WHERE inventariomesdetalle_revisada = true
     * </code>
     *
     * @param     boolean|string $inventariomesdetalleRevisada The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InventariomesdetalleQuery The current query, for fluid interface
     */
    public function filterByInventariomesdetalleRevisada($inventariomesdetalleRevisada = null, $comparison = null)
    {
        if (is_string($inventariomesdetalleRevisada)) {
            $inventariomesdetalleRevisada = in_array(strtolower($inventariomesdetalleRevisada), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_REVISADA, $inventariomesdetalleRevisada, $comparison);
    }

    /**
     * Filter the query on the inventariomesdetalle_ingresocompra column
     *
     * Example usage:
     * <code>
     * $query->filterByInventariomesdetalleIngresocompra(1234); // WHERE inventariomesdetalle_ingresocompra = 1234
     * $query->filterByInventariomesdetalleIngresocompra(array(12, 34)); // WHERE inventariomesdetalle_ingresocompra IN (12, 34)
     * $query->filterByInventariomesdetalleIngresocompra(array('min' => 12)); // WHERE inventariomesdetalle_ingresocompra >= 12
     * $query->filterByInventariomesdetalleIngresocompra(array('max' => 12)); // WHERE inventariomesdetalle_ingresocompra <= 12
     * </code>
     *
     * @param     mixed $inventariomesdetalleIngresocompra The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InventariomesdetalleQuery The current query, for fluid interface
     */
    public function filterByInventariomesdetalleIngresocompra($inventariomesdetalleIngresocompra = null, $comparison = null)
    {
        if (is_array($inventariomesdetalleIngresocompra)) {
            $useMinMax = false;
            if (isset($inventariomesdetalleIngresocompra['min'])) {
                $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_INGRESOCOMPRA, $inventariomesdetalleIngresocompra['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inventariomesdetalleIngresocompra['max'])) {
                $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_INGRESOCOMPRA, $inventariomesdetalleIngresocompra['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_INGRESOCOMPRA, $inventariomesdetalleIngresocompra, $comparison);
    }

    /**
     * Filter the query on the inventariomesdetalle_ingresorequisicion column
     *
     * Example usage:
     * <code>
     * $query->filterByInventariomesdetalleIngresorequisicion(1234); // WHERE inventariomesdetalle_ingresorequisicion = 1234
     * $query->filterByInventariomesdetalleIngresorequisicion(array(12, 34)); // WHERE inventariomesdetalle_ingresorequisicion IN (12, 34)
     * $query->filterByInventariomesdetalleIngresorequisicion(array('min' => 12)); // WHERE inventariomesdetalle_ingresorequisicion >= 12
     * $query->filterByInventariomesdetalleIngresorequisicion(array('max' => 12)); // WHERE inventariomesdetalle_ingresorequisicion <= 12
     * </code>
     *
     * @param     mixed $inventariomesdetalleIngresorequisicion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InventariomesdetalleQuery The current query, for fluid interface
     */
    public function filterByInventariomesdetalleIngresorequisicion($inventariomesdetalleIngresorequisicion = null, $comparison = null)
    {
        if (is_array($inventariomesdetalleIngresorequisicion)) {
            $useMinMax = false;
            if (isset($inventariomesdetalleIngresorequisicion['min'])) {
                $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_INGRESOREQUISICION, $inventariomesdetalleIngresorequisicion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inventariomesdetalleIngresorequisicion['max'])) {
                $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_INGRESOREQUISICION, $inventariomesdetalleIngresorequisicion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_INGRESOREQUISICION, $inventariomesdetalleIngresorequisicion, $comparison);
    }

    /**
     * Filter the query on the inventariomesdetalle_egresorequisicion column
     *
     * Example usage:
     * <code>
     * $query->filterByInventariomesdetalleEgresorequisicion(1234); // WHERE inventariomesdetalle_egresorequisicion = 1234
     * $query->filterByInventariomesdetalleEgresorequisicion(array(12, 34)); // WHERE inventariomesdetalle_egresorequisicion IN (12, 34)
     * $query->filterByInventariomesdetalleEgresorequisicion(array('min' => 12)); // WHERE inventariomesdetalle_egresorequisicion >= 12
     * $query->filterByInventariomesdetalleEgresorequisicion(array('max' => 12)); // WHERE inventariomesdetalle_egresorequisicion <= 12
     * </code>
     *
     * @param     mixed $inventariomesdetalleEgresorequisicion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InventariomesdetalleQuery The current query, for fluid interface
     */
    public function filterByInventariomesdetalleEgresorequisicion($inventariomesdetalleEgresorequisicion = null, $comparison = null)
    {
        if (is_array($inventariomesdetalleEgresorequisicion)) {
            $useMinMax = false;
            if (isset($inventariomesdetalleEgresorequisicion['min'])) {
                $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESOREQUISICION, $inventariomesdetalleEgresorequisicion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inventariomesdetalleEgresorequisicion['max'])) {
                $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESOREQUISICION, $inventariomesdetalleEgresorequisicion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESOREQUISICION, $inventariomesdetalleEgresorequisicion, $comparison);
    }

    /**
     * Filter the query on the inventariomesdetalle_egresoventa column
     *
     * Example usage:
     * <code>
     * $query->filterByInventariomesdetalleEgresoventa(1234); // WHERE inventariomesdetalle_egresoventa = 1234
     * $query->filterByInventariomesdetalleEgresoventa(array(12, 34)); // WHERE inventariomesdetalle_egresoventa IN (12, 34)
     * $query->filterByInventariomesdetalleEgresoventa(array('min' => 12)); // WHERE inventariomesdetalle_egresoventa >= 12
     * $query->filterByInventariomesdetalleEgresoventa(array('max' => 12)); // WHERE inventariomesdetalle_egresoventa <= 12
     * </code>
     *
     * @param     mixed $inventariomesdetalleEgresoventa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InventariomesdetalleQuery The current query, for fluid interface
     */
    public function filterByInventariomesdetalleEgresoventa($inventariomesdetalleEgresoventa = null, $comparison = null)
    {
        if (is_array($inventariomesdetalleEgresoventa)) {
            $useMinMax = false;
            if (isset($inventariomesdetalleEgresoventa['min'])) {
                $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESOVENTA, $inventariomesdetalleEgresoventa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inventariomesdetalleEgresoventa['max'])) {
                $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESOVENTA, $inventariomesdetalleEgresoventa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESOVENTA, $inventariomesdetalleEgresoventa, $comparison);
    }

    /**
     * Filter the query on the inventariomesdetalle_ingresoordentablajeria column
     *
     * Example usage:
     * <code>
     * $query->filterByInventariomesdetalleIngresoordentablajeria(1234); // WHERE inventariomesdetalle_ingresoordentablajeria = 1234
     * $query->filterByInventariomesdetalleIngresoordentablajeria(array(12, 34)); // WHERE inventariomesdetalle_ingresoordentablajeria IN (12, 34)
     * $query->filterByInventariomesdetalleIngresoordentablajeria(array('min' => 12)); // WHERE inventariomesdetalle_ingresoordentablajeria >= 12
     * $query->filterByInventariomesdetalleIngresoordentablajeria(array('max' => 12)); // WHERE inventariomesdetalle_ingresoordentablajeria <= 12
     * </code>
     *
     * @param     mixed $inventariomesdetalleIngresoordentablajeria The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InventariomesdetalleQuery The current query, for fluid interface
     */
    public function filterByInventariomesdetalleIngresoordentablajeria($inventariomesdetalleIngresoordentablajeria = null, $comparison = null)
    {
        if (is_array($inventariomesdetalleIngresoordentablajeria)) {
            $useMinMax = false;
            if (isset($inventariomesdetalleIngresoordentablajeria['min'])) {
                $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_INGRESOORDENTABLAJERIA, $inventariomesdetalleIngresoordentablajeria['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inventariomesdetalleIngresoordentablajeria['max'])) {
                $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_INGRESOORDENTABLAJERIA, $inventariomesdetalleIngresoordentablajeria['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_INGRESOORDENTABLAJERIA, $inventariomesdetalleIngresoordentablajeria, $comparison);
    }

    /**
     * Filter the query on the inventariomesdetalle_egresoordentablajeria column
     *
     * Example usage:
     * <code>
     * $query->filterByInventariomesdetalleEgresoordentablajeria(1234); // WHERE inventariomesdetalle_egresoordentablajeria = 1234
     * $query->filterByInventariomesdetalleEgresoordentablajeria(array(12, 34)); // WHERE inventariomesdetalle_egresoordentablajeria IN (12, 34)
     * $query->filterByInventariomesdetalleEgresoordentablajeria(array('min' => 12)); // WHERE inventariomesdetalle_egresoordentablajeria >= 12
     * $query->filterByInventariomesdetalleEgresoordentablajeria(array('max' => 12)); // WHERE inventariomesdetalle_egresoordentablajeria <= 12
     * </code>
     *
     * @param     mixed $inventariomesdetalleEgresoordentablajeria The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InventariomesdetalleQuery The current query, for fluid interface
     */
    public function filterByInventariomesdetalleEgresoordentablajeria($inventariomesdetalleEgresoordentablajeria = null, $comparison = null)
    {
        if (is_array($inventariomesdetalleEgresoordentablajeria)) {
            $useMinMax = false;
            if (isset($inventariomesdetalleEgresoordentablajeria['min'])) {
                $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESOORDENTABLAJERIA, $inventariomesdetalleEgresoordentablajeria['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inventariomesdetalleEgresoordentablajeria['max'])) {
                $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESOORDENTABLAJERIA, $inventariomesdetalleEgresoordentablajeria['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESOORDENTABLAJERIA, $inventariomesdetalleEgresoordentablajeria, $comparison);
    }

    /**
     * Filter the query on the inventariomesdetalle_egresodevolucion column
     *
     * Example usage:
     * <code>
     * $query->filterByInventariomesdetalleEgresodevolucion(1234); // WHERE inventariomesdetalle_egresodevolucion = 1234
     * $query->filterByInventariomesdetalleEgresodevolucion(array(12, 34)); // WHERE inventariomesdetalle_egresodevolucion IN (12, 34)
     * $query->filterByInventariomesdetalleEgresodevolucion(array('min' => 12)); // WHERE inventariomesdetalle_egresodevolucion >= 12
     * $query->filterByInventariomesdetalleEgresodevolucion(array('max' => 12)); // WHERE inventariomesdetalle_egresodevolucion <= 12
     * </code>
     *
     * @param     mixed $inventariomesdetalleEgresodevolucion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InventariomesdetalleQuery The current query, for fluid interface
     */
    public function filterByInventariomesdetalleEgresodevolucion($inventariomesdetalleEgresodevolucion = null, $comparison = null)
    {
        if (is_array($inventariomesdetalleEgresodevolucion)) {
            $useMinMax = false;
            if (isset($inventariomesdetalleEgresodevolucion['min'])) {
                $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESODEVOLUCION, $inventariomesdetalleEgresodevolucion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inventariomesdetalleEgresodevolucion['max'])) {
                $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESODEVOLUCION, $inventariomesdetalleEgresodevolucion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESODEVOLUCION, $inventariomesdetalleEgresodevolucion, $comparison);
    }

    /**
     * Filter the query by a related Inventariomes object
     *
     * @param   Inventariomes|PropelObjectCollection $inventariomes The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 InventariomesdetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByInventariomes($inventariomes, $comparison = null)
    {
        if ($inventariomes instanceof Inventariomes) {
            return $this
                ->addUsingAlias(InventariomesdetallePeer::IDINVENTARIOMES, $inventariomes->getIdinventariomes(), $comparison);
        } elseif ($inventariomes instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(InventariomesdetallePeer::IDINVENTARIOMES, $inventariomes->toKeyValue('PrimaryKey', 'Idinventariomes'), $comparison);
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
     * @return InventariomesdetalleQuery The current query, for fluid interface
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
     * Filter the query by a related Inventariomesdetallenota object
     *
     * @param   Inventariomesdetallenota|PropelObjectCollection $inventariomesdetallenota  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 InventariomesdetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByInventariomesdetallenota($inventariomesdetallenota, $comparison = null)
    {
        if ($inventariomesdetallenota instanceof Inventariomesdetallenota) {
            return $this
                ->addUsingAlias(InventariomesdetallePeer::IDINVENTARIOMESDETALLE, $inventariomesdetallenota->getIdinventariomesdetalle(), $comparison);
        } elseif ($inventariomesdetallenota instanceof PropelObjectCollection) {
            return $this
                ->useInventariomesdetallenotaQuery()
                ->filterByPrimaryKeys($inventariomesdetallenota->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByInventariomesdetallenota() only accepts arguments of type Inventariomesdetallenota or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Inventariomesdetallenota relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return InventariomesdetalleQuery The current query, for fluid interface
     */
    public function joinInventariomesdetallenota($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Inventariomesdetallenota');

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
            $this->addJoinObject($join, 'Inventariomesdetallenota');
        }

        return $this;
    }

    /**
     * Use the Inventariomesdetallenota relation Inventariomesdetallenota object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   InventariomesdetallenotaQuery A secondary query class using the current class as primary query
     */
    public function useInventariomesdetallenotaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInventariomesdetallenota($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Inventariomesdetallenota', 'InventariomesdetallenotaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Inventariomesdetalle $inventariomesdetalle Object to remove from the list of results
     *
     * @return InventariomesdetalleQuery The current query, for fluid interface
     */
    public function prune($inventariomesdetalle = null)
    {
        if ($inventariomesdetalle) {
            $this->addUsingAlias(InventariomesdetallePeer::IDINVENTARIOMESDETALLE, $inventariomesdetalle->getIdinventariomesdetalle(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
