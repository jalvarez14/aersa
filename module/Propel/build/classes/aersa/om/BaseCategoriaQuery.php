<?php


/**
 * Base class that represents a query for the 'categoria' table.
 *
 *
 *
 * @method CategoriaQuery orderByIdcategoria($order = Criteria::ASC) Order by the idcategoria column
 * @method CategoriaQuery orderByCategoriaNombre($order = Criteria::ASC) Order by the categoria_nombre column
 * @method CategoriaQuery orderByCategoriaPadre($order = Criteria::ASC) Order by the categoria_padre column
 * @method CategoriaQuery orderByCategoriaAlmacenable($order = Criteria::ASC) Order by the categoria_almacenable column
 *
 * @method CategoriaQuery groupByIdcategoria() Group by the idcategoria column
 * @method CategoriaQuery groupByCategoriaNombre() Group by the categoria_nombre column
 * @method CategoriaQuery groupByCategoriaPadre() Group by the categoria_padre column
 * @method CategoriaQuery groupByCategoriaAlmacenable() Group by the categoria_almacenable column
 *
 * @method CategoriaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CategoriaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CategoriaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Categoria findOne(PropelPDO $con = null) Return the first Categoria matching the query
 * @method Categoria findOneOrCreate(PropelPDO $con = null) Return the first Categoria matching the query, or a new Categoria object populated from the query conditions when no match is found
 *
 * @method Categoria findOneByCategoriaNombre(string $categoria_nombre) Return the first Categoria filtered by the categoria_nombre column
 * @method Categoria findOneByCategoriaPadre(int $categoria_padre) Return the first Categoria filtered by the categoria_padre column
 * @method Categoria findOneByCategoriaAlmacenable(boolean $categoria_almacenable) Return the first Categoria filtered by the categoria_almacenable column
 *
 * @method array findByIdcategoria(int $idcategoria) Return Categoria objects filtered by the idcategoria column
 * @method array findByCategoriaNombre(string $categoria_nombre) Return Categoria objects filtered by the categoria_nombre column
 * @method array findByCategoriaPadre(int $categoria_padre) Return Categoria objects filtered by the categoria_padre column
 * @method array findByCategoriaAlmacenable(boolean $categoria_almacenable) Return Categoria objects filtered by the categoria_almacenable column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseCategoriaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCategoriaQuery object.
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
            $modelName = 'Categoria';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CategoriaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CategoriaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CategoriaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CategoriaQuery) {
            return $criteria;
        }
        $query = new CategoriaQuery(null, null, $modelAlias);

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
     * @return   Categoria|Categoria[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CategoriaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CategoriaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Categoria A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdcategoria($key, $con = null)
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
     * @return                 Categoria A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idcategoria`, `categoria_nombre`, `categoria_padre`, `categoria_almacenable` FROM `categoria` WHERE `idcategoria` = :p0';
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
            $obj = new Categoria();
            $obj->hydrate($row);
            CategoriaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Categoria|Categoria[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Categoria[]|mixed the list of results, formatted by the current formatter
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
     * @return CategoriaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CategoriaPeer::IDCATEGORIA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CategoriaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CategoriaPeer::IDCATEGORIA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idcategoria column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcategoria(1234); // WHERE idcategoria = 1234
     * $query->filterByIdcategoria(array(12, 34)); // WHERE idcategoria IN (12, 34)
     * $query->filterByIdcategoria(array('min' => 12)); // WHERE idcategoria >= 12
     * $query->filterByIdcategoria(array('max' => 12)); // WHERE idcategoria <= 12
     * </code>
     *
     * @param     mixed $idcategoria The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CategoriaQuery The current query, for fluid interface
     */
    public function filterByIdcategoria($idcategoria = null, $comparison = null)
    {
        if (is_array($idcategoria)) {
            $useMinMax = false;
            if (isset($idcategoria['min'])) {
                $this->addUsingAlias(CategoriaPeer::IDCATEGORIA, $idcategoria['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcategoria['max'])) {
                $this->addUsingAlias(CategoriaPeer::IDCATEGORIA, $idcategoria['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CategoriaPeer::IDCATEGORIA, $idcategoria, $comparison);
    }

    /**
     * Filter the query on the categoria_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByCategoriaNombre('fooValue');   // WHERE categoria_nombre = 'fooValue'
     * $query->filterByCategoriaNombre('%fooValue%'); // WHERE categoria_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $categoriaNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CategoriaQuery The current query, for fluid interface
     */
    public function filterByCategoriaNombre($categoriaNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($categoriaNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $categoriaNombre)) {
                $categoriaNombre = str_replace('*', '%', $categoriaNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CategoriaPeer::CATEGORIA_NOMBRE, $categoriaNombre, $comparison);
    }

    /**
     * Filter the query on the categoria_padre column
     *
     * Example usage:
     * <code>
     * $query->filterByCategoriaPadre(1234); // WHERE categoria_padre = 1234
     * $query->filterByCategoriaPadre(array(12, 34)); // WHERE categoria_padre IN (12, 34)
     * $query->filterByCategoriaPadre(array('min' => 12)); // WHERE categoria_padre >= 12
     * $query->filterByCategoriaPadre(array('max' => 12)); // WHERE categoria_padre <= 12
     * </code>
     *
     * @param     mixed $categoriaPadre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CategoriaQuery The current query, for fluid interface
     */
    public function filterByCategoriaPadre($categoriaPadre = null, $comparison = null)
    {
        if (is_array($categoriaPadre)) {
            $useMinMax = false;
            if (isset($categoriaPadre['min'])) {
                $this->addUsingAlias(CategoriaPeer::CATEGORIA_PADRE, $categoriaPadre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($categoriaPadre['max'])) {
                $this->addUsingAlias(CategoriaPeer::CATEGORIA_PADRE, $categoriaPadre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CategoriaPeer::CATEGORIA_PADRE, $categoriaPadre, $comparison);
    }

    /**
     * Filter the query on the categoria_almacenable column
     *
     * Example usage:
     * <code>
     * $query->filterByCategoriaAlmacenable(true); // WHERE categoria_almacenable = true
     * $query->filterByCategoriaAlmacenable('yes'); // WHERE categoria_almacenable = true
     * </code>
     *
     * @param     boolean|string $categoriaAlmacenable The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CategoriaQuery The current query, for fluid interface
     */
    public function filterByCategoriaAlmacenable($categoriaAlmacenable = null, $comparison = null)
    {
        if (is_string($categoriaAlmacenable)) {
            $categoriaAlmacenable = in_array(strtolower($categoriaAlmacenable), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CategoriaPeer::CATEGORIA_ALMACENABLE, $categoriaAlmacenable, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Categoria $categoria Object to remove from the list of results
     *
     * @return CategoriaQuery The current query, for fluid interface
     */
    public function prune($categoria = null)
    {
        if ($categoria) {
            $this->addUsingAlias(CategoriaPeer::IDCATEGORIA, $categoria->getIdcategoria(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
