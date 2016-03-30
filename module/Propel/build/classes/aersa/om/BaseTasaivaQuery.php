<?php


/**
 * Base class that represents a query for the 'tasaiva' table.
 *
 *
 *
 * @method TasaivaQuery orderByIdtasaiva($order = Criteria::ASC) Order by the idtasaiva column
 * @method TasaivaQuery orderByTasaivaValor($order = Criteria::ASC) Order by the tasaiva_valor column
 *
 * @method TasaivaQuery groupByIdtasaiva() Group by the idtasaiva column
 * @method TasaivaQuery groupByTasaivaValor() Group by the tasaiva_valor column
 *
 * @method TasaivaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TasaivaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TasaivaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Tasaiva findOne(PropelPDO $con = null) Return the first Tasaiva matching the query
 * @method Tasaiva findOneOrCreate(PropelPDO $con = null) Return the first Tasaiva matching the query, or a new Tasaiva object populated from the query conditions when no match is found
 *
 * @method Tasaiva findOneByTasaivaValor(double $tasaiva_valor) Return the first Tasaiva filtered by the tasaiva_valor column
 *
 * @method array findByIdtasaiva(int $idtasaiva) Return Tasaiva objects filtered by the idtasaiva column
 * @method array findByTasaivaValor(double $tasaiva_valor) Return Tasaiva objects filtered by the tasaiva_valor column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseTasaivaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTasaivaQuery object.
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
            $modelName = 'Tasaiva';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TasaivaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TasaivaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TasaivaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TasaivaQuery) {
            return $criteria;
        }
        $query = new TasaivaQuery(null, null, $modelAlias);

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
     * @return   Tasaiva|Tasaiva[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TasaivaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TasaivaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Tasaiva A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdtasaiva($key, $con = null)
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
     * @return                 Tasaiva A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idtasaiva`, `tasaiva_valor` FROM `tasaiva` WHERE `idtasaiva` = :p0';
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
            $obj = new Tasaiva();
            $obj->hydrate($row);
            TasaivaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Tasaiva|Tasaiva[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Tasaiva[]|mixed the list of results, formatted by the current formatter
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
     * @return TasaivaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TasaivaPeer::IDTASAIVA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TasaivaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TasaivaPeer::IDTASAIVA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idtasaiva column
     *
     * Example usage:
     * <code>
     * $query->filterByIdtasaiva(1234); // WHERE idtasaiva = 1234
     * $query->filterByIdtasaiva(array(12, 34)); // WHERE idtasaiva IN (12, 34)
     * $query->filterByIdtasaiva(array('min' => 12)); // WHERE idtasaiva >= 12
     * $query->filterByIdtasaiva(array('max' => 12)); // WHERE idtasaiva <= 12
     * </code>
     *
     * @param     mixed $idtasaiva The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TasaivaQuery The current query, for fluid interface
     */
    public function filterByIdtasaiva($idtasaiva = null, $comparison = null)
    {
        if (is_array($idtasaiva)) {
            $useMinMax = false;
            if (isset($idtasaiva['min'])) {
                $this->addUsingAlias(TasaivaPeer::IDTASAIVA, $idtasaiva['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idtasaiva['max'])) {
                $this->addUsingAlias(TasaivaPeer::IDTASAIVA, $idtasaiva['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TasaivaPeer::IDTASAIVA, $idtasaiva, $comparison);
    }

    /**
     * Filter the query on the tasaiva_valor column
     *
     * Example usage:
     * <code>
     * $query->filterByTasaivaValor(1234); // WHERE tasaiva_valor = 1234
     * $query->filterByTasaivaValor(array(12, 34)); // WHERE tasaiva_valor IN (12, 34)
     * $query->filterByTasaivaValor(array('min' => 12)); // WHERE tasaiva_valor >= 12
     * $query->filterByTasaivaValor(array('max' => 12)); // WHERE tasaiva_valor <= 12
     * </code>
     *
     * @param     mixed $tasaivaValor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TasaivaQuery The current query, for fluid interface
     */
    public function filterByTasaivaValor($tasaivaValor = null, $comparison = null)
    {
        if (is_array($tasaivaValor)) {
            $useMinMax = false;
            if (isset($tasaivaValor['min'])) {
                $this->addUsingAlias(TasaivaPeer::TASAIVA_VALOR, $tasaivaValor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tasaivaValor['max'])) {
                $this->addUsingAlias(TasaivaPeer::TASAIVA_VALOR, $tasaivaValor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TasaivaPeer::TASAIVA_VALOR, $tasaivaValor, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Tasaiva $tasaiva Object to remove from the list of results
     *
     * @return TasaivaQuery The current query, for fluid interface
     */
    public function prune($tasaiva = null)
    {
        if ($tasaiva) {
            $this->addUsingAlias(TasaivaPeer::IDTASAIVA, $tasaiva->getIdtasaiva(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
