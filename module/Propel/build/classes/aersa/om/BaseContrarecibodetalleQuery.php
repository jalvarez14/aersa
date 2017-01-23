<?php


/**
 * Base class that represents a query for the 'contrarecibodetalle' table.
 *
 *
 *
 * @method ContrarecibodetalleQuery orderByIdcontrarecibodetalle($order = Criteria::ASC) Order by the idcontrarecibodetalle column
 * @method ContrarecibodetalleQuery orderByIdcontrarecibo($order = Criteria::ASC) Order by the idcontrarecibo column
 * @method ContrarecibodetalleQuery orderByContrarecibodetalleXml($order = Criteria::ASC) Order by the contrarecibodetalle_xml column
 * @method ContrarecibodetalleQuery orderByContrarecibodetallePdf($order = Criteria::ASC) Order by the contrarecibodetalle_pdf column
 * @method ContrarecibodetalleQuery orderByContrarecibodetalleFolio($order = Criteria::ASC) Order by the contrarecibodetalle_folio column
 * @method ContrarecibodetalleQuery orderByContrarecibodetalleCantidad($order = Criteria::ASC) Order by the contrarecibodetalle_cantidad column
 * @method ContrarecibodetalleQuery orderByContrarecibodetalleTipo($order = Criteria::ASC) Order by the contrarecibodetalle_tipo column
 * @method ContrarecibodetalleQuery orderByContrarecibodetallePagado($order = Criteria::ASC) Order by the contrarecibodetalle_pagado column
 *
 * @method ContrarecibodetalleQuery groupByIdcontrarecibodetalle() Group by the idcontrarecibodetalle column
 * @method ContrarecibodetalleQuery groupByIdcontrarecibo() Group by the idcontrarecibo column
 * @method ContrarecibodetalleQuery groupByContrarecibodetalleXml() Group by the contrarecibodetalle_xml column
 * @method ContrarecibodetalleQuery groupByContrarecibodetallePdf() Group by the contrarecibodetalle_pdf column
 * @method ContrarecibodetalleQuery groupByContrarecibodetalleFolio() Group by the contrarecibodetalle_folio column
 * @method ContrarecibodetalleQuery groupByContrarecibodetalleCantidad() Group by the contrarecibodetalle_cantidad column
 * @method ContrarecibodetalleQuery groupByContrarecibodetalleTipo() Group by the contrarecibodetalle_tipo column
 * @method ContrarecibodetalleQuery groupByContrarecibodetallePagado() Group by the contrarecibodetalle_pagado column
 *
 * @method ContrarecibodetalleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ContrarecibodetalleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ContrarecibodetalleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ContrarecibodetalleQuery leftJoinContrarecibo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Contrarecibo relation
 * @method ContrarecibodetalleQuery rightJoinContrarecibo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Contrarecibo relation
 * @method ContrarecibodetalleQuery innerJoinContrarecibo($relationAlias = null) Adds a INNER JOIN clause to the query using the Contrarecibo relation
 *
 * @method ContrarecibodetalleQuery leftJoinPagocontrarecibo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pagocontrarecibo relation
 * @method ContrarecibodetalleQuery rightJoinPagocontrarecibo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pagocontrarecibo relation
 * @method ContrarecibodetalleQuery innerJoinPagocontrarecibo($relationAlias = null) Adds a INNER JOIN clause to the query using the Pagocontrarecibo relation
 *
 * @method Contrarecibodetalle findOne(PropelPDO $con = null) Return the first Contrarecibodetalle matching the query
 * @method Contrarecibodetalle findOneOrCreate(PropelPDO $con = null) Return the first Contrarecibodetalle matching the query, or a new Contrarecibodetalle object populated from the query conditions when no match is found
 *
 * @method Contrarecibodetalle findOneByIdcontrarecibo(int $idcontrarecibo) Return the first Contrarecibodetalle filtered by the idcontrarecibo column
 * @method Contrarecibodetalle findOneByContrarecibodetalleXml(string $contrarecibodetalle_xml) Return the first Contrarecibodetalle filtered by the contrarecibodetalle_xml column
 * @method Contrarecibodetalle findOneByContrarecibodetallePdf(string $contrarecibodetalle_pdf) Return the first Contrarecibodetalle filtered by the contrarecibodetalle_pdf column
 * @method Contrarecibodetalle findOneByContrarecibodetalleFolio(string $contrarecibodetalle_folio) Return the first Contrarecibodetalle filtered by the contrarecibodetalle_folio column
 * @method Contrarecibodetalle findOneByContrarecibodetalleCantidad(string $contrarecibodetalle_cantidad) Return the first Contrarecibodetalle filtered by the contrarecibodetalle_cantidad column
 * @method Contrarecibodetalle findOneByContrarecibodetalleTipo(string $contrarecibodetalle_tipo) Return the first Contrarecibodetalle filtered by the contrarecibodetalle_tipo column
 * @method Contrarecibodetalle findOneByContrarecibodetallePagado(boolean $contrarecibodetalle_pagado) Return the first Contrarecibodetalle filtered by the contrarecibodetalle_pagado column
 *
 * @method array findByIdcontrarecibodetalle(int $idcontrarecibodetalle) Return Contrarecibodetalle objects filtered by the idcontrarecibodetalle column
 * @method array findByIdcontrarecibo(int $idcontrarecibo) Return Contrarecibodetalle objects filtered by the idcontrarecibo column
 * @method array findByContrarecibodetalleXml(string $contrarecibodetalle_xml) Return Contrarecibodetalle objects filtered by the contrarecibodetalle_xml column
 * @method array findByContrarecibodetallePdf(string $contrarecibodetalle_pdf) Return Contrarecibodetalle objects filtered by the contrarecibodetalle_pdf column
 * @method array findByContrarecibodetalleFolio(string $contrarecibodetalle_folio) Return Contrarecibodetalle objects filtered by the contrarecibodetalle_folio column
 * @method array findByContrarecibodetalleCantidad(string $contrarecibodetalle_cantidad) Return Contrarecibodetalle objects filtered by the contrarecibodetalle_cantidad column
 * @method array findByContrarecibodetalleTipo(string $contrarecibodetalle_tipo) Return Contrarecibodetalle objects filtered by the contrarecibodetalle_tipo column
 * @method array findByContrarecibodetallePagado(boolean $contrarecibodetalle_pagado) Return Contrarecibodetalle objects filtered by the contrarecibodetalle_pagado column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseContrarecibodetalleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseContrarecibodetalleQuery object.
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
            $modelName = 'Contrarecibodetalle';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ContrarecibodetalleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ContrarecibodetalleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ContrarecibodetalleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ContrarecibodetalleQuery) {
            return $criteria;
        }
        $query = new ContrarecibodetalleQuery(null, null, $modelAlias);

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
     * @return   Contrarecibodetalle|Contrarecibodetalle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ContrarecibodetallePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ContrarecibodetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Contrarecibodetalle A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdcontrarecibodetalle($key, $con = null)
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
     * @return                 Contrarecibodetalle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idcontrarecibodetalle`, `idcontrarecibo`, `contrarecibodetalle_xml`, `contrarecibodetalle_pdf`, `contrarecibodetalle_folio`, `contrarecibodetalle_cantidad`, `contrarecibodetalle_tipo`, `contrarecibodetalle_pagado` FROM `contrarecibodetalle` WHERE `idcontrarecibodetalle` = :p0';
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
            $obj = new Contrarecibodetalle();
            $obj->hydrate($row);
            ContrarecibodetallePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Contrarecibodetalle|Contrarecibodetalle[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Contrarecibodetalle[]|mixed the list of results, formatted by the current formatter
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
     * @return ContrarecibodetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ContrarecibodetallePeer::IDCONTRARECIBODETALLE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ContrarecibodetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ContrarecibodetallePeer::IDCONTRARECIBODETALLE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idcontrarecibodetalle column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcontrarecibodetalle(1234); // WHERE idcontrarecibodetalle = 1234
     * $query->filterByIdcontrarecibodetalle(array(12, 34)); // WHERE idcontrarecibodetalle IN (12, 34)
     * $query->filterByIdcontrarecibodetalle(array('min' => 12)); // WHERE idcontrarecibodetalle >= 12
     * $query->filterByIdcontrarecibodetalle(array('max' => 12)); // WHERE idcontrarecibodetalle <= 12
     * </code>
     *
     * @param     mixed $idcontrarecibodetalle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContrarecibodetalleQuery The current query, for fluid interface
     */
    public function filterByIdcontrarecibodetalle($idcontrarecibodetalle = null, $comparison = null)
    {
        if (is_array($idcontrarecibodetalle)) {
            $useMinMax = false;
            if (isset($idcontrarecibodetalle['min'])) {
                $this->addUsingAlias(ContrarecibodetallePeer::IDCONTRARECIBODETALLE, $idcontrarecibodetalle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcontrarecibodetalle['max'])) {
                $this->addUsingAlias(ContrarecibodetallePeer::IDCONTRARECIBODETALLE, $idcontrarecibodetalle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContrarecibodetallePeer::IDCONTRARECIBODETALLE, $idcontrarecibodetalle, $comparison);
    }

    /**
     * Filter the query on the idcontrarecibo column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcontrarecibo(1234); // WHERE idcontrarecibo = 1234
     * $query->filterByIdcontrarecibo(array(12, 34)); // WHERE idcontrarecibo IN (12, 34)
     * $query->filterByIdcontrarecibo(array('min' => 12)); // WHERE idcontrarecibo >= 12
     * $query->filterByIdcontrarecibo(array('max' => 12)); // WHERE idcontrarecibo <= 12
     * </code>
     *
     * @see       filterByContrarecibo()
     *
     * @param     mixed $idcontrarecibo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContrarecibodetalleQuery The current query, for fluid interface
     */
    public function filterByIdcontrarecibo($idcontrarecibo = null, $comparison = null)
    {
        if (is_array($idcontrarecibo)) {
            $useMinMax = false;
            if (isset($idcontrarecibo['min'])) {
                $this->addUsingAlias(ContrarecibodetallePeer::IDCONTRARECIBO, $idcontrarecibo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcontrarecibo['max'])) {
                $this->addUsingAlias(ContrarecibodetallePeer::IDCONTRARECIBO, $idcontrarecibo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContrarecibodetallePeer::IDCONTRARECIBO, $idcontrarecibo, $comparison);
    }

    /**
     * Filter the query on the contrarecibodetalle_xml column
     *
     * Example usage:
     * <code>
     * $query->filterByContrarecibodetalleXml('fooValue');   // WHERE contrarecibodetalle_xml = 'fooValue'
     * $query->filterByContrarecibodetalleXml('%fooValue%'); // WHERE contrarecibodetalle_xml LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contrarecibodetalleXml The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContrarecibodetalleQuery The current query, for fluid interface
     */
    public function filterByContrarecibodetalleXml($contrarecibodetalleXml = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contrarecibodetalleXml)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contrarecibodetalleXml)) {
                $contrarecibodetalleXml = str_replace('*', '%', $contrarecibodetalleXml);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ContrarecibodetallePeer::CONTRARECIBODETALLE_XML, $contrarecibodetalleXml, $comparison);
    }

    /**
     * Filter the query on the contrarecibodetalle_pdf column
     *
     * Example usage:
     * <code>
     * $query->filterByContrarecibodetallePdf('fooValue');   // WHERE contrarecibodetalle_pdf = 'fooValue'
     * $query->filterByContrarecibodetallePdf('%fooValue%'); // WHERE contrarecibodetalle_pdf LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contrarecibodetallePdf The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContrarecibodetalleQuery The current query, for fluid interface
     */
    public function filterByContrarecibodetallePdf($contrarecibodetallePdf = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contrarecibodetallePdf)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contrarecibodetallePdf)) {
                $contrarecibodetallePdf = str_replace('*', '%', $contrarecibodetallePdf);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ContrarecibodetallePeer::CONTRARECIBODETALLE_PDF, $contrarecibodetallePdf, $comparison);
    }

    /**
     * Filter the query on the contrarecibodetalle_folio column
     *
     * Example usage:
     * <code>
     * $query->filterByContrarecibodetalleFolio('fooValue');   // WHERE contrarecibodetalle_folio = 'fooValue'
     * $query->filterByContrarecibodetalleFolio('%fooValue%'); // WHERE contrarecibodetalle_folio LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contrarecibodetalleFolio The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContrarecibodetalleQuery The current query, for fluid interface
     */
    public function filterByContrarecibodetalleFolio($contrarecibodetalleFolio = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contrarecibodetalleFolio)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contrarecibodetalleFolio)) {
                $contrarecibodetalleFolio = str_replace('*', '%', $contrarecibodetalleFolio);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ContrarecibodetallePeer::CONTRARECIBODETALLE_FOLIO, $contrarecibodetalleFolio, $comparison);
    }

    /**
     * Filter the query on the contrarecibodetalle_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByContrarecibodetalleCantidad(1234); // WHERE contrarecibodetalle_cantidad = 1234
     * $query->filterByContrarecibodetalleCantidad(array(12, 34)); // WHERE contrarecibodetalle_cantidad IN (12, 34)
     * $query->filterByContrarecibodetalleCantidad(array('min' => 12)); // WHERE contrarecibodetalle_cantidad >= 12
     * $query->filterByContrarecibodetalleCantidad(array('max' => 12)); // WHERE contrarecibodetalle_cantidad <= 12
     * </code>
     *
     * @param     mixed $contrarecibodetalleCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContrarecibodetalleQuery The current query, for fluid interface
     */
    public function filterByContrarecibodetalleCantidad($contrarecibodetalleCantidad = null, $comparison = null)
    {
        if (is_array($contrarecibodetalleCantidad)) {
            $useMinMax = false;
            if (isset($contrarecibodetalleCantidad['min'])) {
                $this->addUsingAlias(ContrarecibodetallePeer::CONTRARECIBODETALLE_CANTIDAD, $contrarecibodetalleCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($contrarecibodetalleCantidad['max'])) {
                $this->addUsingAlias(ContrarecibodetallePeer::CONTRARECIBODETALLE_CANTIDAD, $contrarecibodetalleCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ContrarecibodetallePeer::CONTRARECIBODETALLE_CANTIDAD, $contrarecibodetalleCantidad, $comparison);
    }

    /**
     * Filter the query on the contrarecibodetalle_tipo column
     *
     * Example usage:
     * <code>
     * $query->filterByContrarecibodetalleTipo('fooValue');   // WHERE contrarecibodetalle_tipo = 'fooValue'
     * $query->filterByContrarecibodetalleTipo('%fooValue%'); // WHERE contrarecibodetalle_tipo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contrarecibodetalleTipo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContrarecibodetalleQuery The current query, for fluid interface
     */
    public function filterByContrarecibodetalleTipo($contrarecibodetalleTipo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contrarecibodetalleTipo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contrarecibodetalleTipo)) {
                $contrarecibodetalleTipo = str_replace('*', '%', $contrarecibodetalleTipo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ContrarecibodetallePeer::CONTRARECIBODETALLE_TIPO, $contrarecibodetalleTipo, $comparison);
    }

    /**
     * Filter the query on the contrarecibodetalle_pagado column
     *
     * Example usage:
     * <code>
     * $query->filterByContrarecibodetallePagado(true); // WHERE contrarecibodetalle_pagado = true
     * $query->filterByContrarecibodetallePagado('yes'); // WHERE contrarecibodetalle_pagado = true
     * </code>
     *
     * @param     boolean|string $contrarecibodetallePagado The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ContrarecibodetalleQuery The current query, for fluid interface
     */
    public function filterByContrarecibodetallePagado($contrarecibodetallePagado = null, $comparison = null)
    {
        if (is_string($contrarecibodetallePagado)) {
            $contrarecibodetallePagado = in_array(strtolower($contrarecibodetallePagado), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ContrarecibodetallePeer::CONTRARECIBODETALLE_PAGADO, $contrarecibodetallePagado, $comparison);
    }

    /**
     * Filter the query by a related Contrarecibo object
     *
     * @param   Contrarecibo|PropelObjectCollection $contrarecibo The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ContrarecibodetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByContrarecibo($contrarecibo, $comparison = null)
    {
        if ($contrarecibo instanceof Contrarecibo) {
            return $this
                ->addUsingAlias(ContrarecibodetallePeer::IDCONTRARECIBO, $contrarecibo->getIdcontrarecibo(), $comparison);
        } elseif ($contrarecibo instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ContrarecibodetallePeer::IDCONTRARECIBO, $contrarecibo->toKeyValue('PrimaryKey', 'Idcontrarecibo'), $comparison);
        } else {
            throw new PropelException('filterByContrarecibo() only accepts arguments of type Contrarecibo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Contrarecibo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ContrarecibodetalleQuery The current query, for fluid interface
     */
    public function joinContrarecibo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Contrarecibo');

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
            $this->addJoinObject($join, 'Contrarecibo');
        }

        return $this;
    }

    /**
     * Use the Contrarecibo relation Contrarecibo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ContrareciboQuery A secondary query class using the current class as primary query
     */
    public function useContrareciboQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinContrarecibo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Contrarecibo', 'ContrareciboQuery');
    }

    /**
     * Filter the query by a related Pagocontrarecibo object
     *
     * @param   Pagocontrarecibo|PropelObjectCollection $pagocontrarecibo  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ContrarecibodetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPagocontrarecibo($pagocontrarecibo, $comparison = null)
    {
        if ($pagocontrarecibo instanceof Pagocontrarecibo) {
            return $this
                ->addUsingAlias(ContrarecibodetallePeer::IDCONTRARECIBODETALLE, $pagocontrarecibo->getIdcontrarecibodetalle(), $comparison);
        } elseif ($pagocontrarecibo instanceof PropelObjectCollection) {
            return $this
                ->usePagocontrareciboQuery()
                ->filterByPrimaryKeys($pagocontrarecibo->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPagocontrarecibo() only accepts arguments of type Pagocontrarecibo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Pagocontrarecibo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ContrarecibodetalleQuery The current query, for fluid interface
     */
    public function joinPagocontrarecibo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Pagocontrarecibo');

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
            $this->addJoinObject($join, 'Pagocontrarecibo');
        }

        return $this;
    }

    /**
     * Use the Pagocontrarecibo relation Pagocontrarecibo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PagocontrareciboQuery A secondary query class using the current class as primary query
     */
    public function usePagocontrareciboQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPagocontrarecibo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Pagocontrarecibo', 'PagocontrareciboQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Contrarecibodetalle $contrarecibodetalle Object to remove from the list of results
     *
     * @return ContrarecibodetalleQuery The current query, for fluid interface
     */
    public function prune($contrarecibodetalle = null)
    {
        if ($contrarecibodetalle) {
            $this->addUsingAlias(ContrarecibodetallePeer::IDCONTRARECIBODETALLE, $contrarecibodetalle->getIdcontrarecibodetalle(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
