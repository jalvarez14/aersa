<?php


/**
 * Base class that represents a query for the 'ajusteinventario' table.
 *
 *
 *
 * @method AjusteinventarioQuery orderByIdajusteinventario($order = Criteria::ASC) Order by the idajusteinventario column
 * @method AjusteinventarioQuery orderByIdempresa($order = Criteria::ASC) Order by the idempresa column
 * @method AjusteinventarioQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method AjusteinventarioQuery orderByIdalmacen($order = Criteria::ASC) Order by the idalmacen column
 * @method AjusteinventarioQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 * @method AjusteinventarioQuery orderByIdusuario($order = Criteria::ASC) Order by the idusuario column
 * @method AjusteinventarioQuery orderByAjusteinventarioCantidad($order = Criteria::ASC) Order by the ajusteinventario_cantidad column
 * @method AjusteinventarioQuery orderByAjusteinventarioComentario($order = Criteria::ASC) Order by the ajusteinventario_comentario column
 * @method AjusteinventarioQuery orderByAjusteinventarioFecha($order = Criteria::ASC) Order by the ajusteinventario_fecha column
 * @method AjusteinventarioQuery orderByAjusteinventarioTipo($order = Criteria::ASC) Order by the ajusteinventario_tipo column
 *
 * @method AjusteinventarioQuery groupByIdajusteinventario() Group by the idajusteinventario column
 * @method AjusteinventarioQuery groupByIdempresa() Group by the idempresa column
 * @method AjusteinventarioQuery groupByIdsucursal() Group by the idsucursal column
 * @method AjusteinventarioQuery groupByIdalmacen() Group by the idalmacen column
 * @method AjusteinventarioQuery groupByIdproducto() Group by the idproducto column
 * @method AjusteinventarioQuery groupByIdusuario() Group by the idusuario column
 * @method AjusteinventarioQuery groupByAjusteinventarioCantidad() Group by the ajusteinventario_cantidad column
 * @method AjusteinventarioQuery groupByAjusteinventarioComentario() Group by the ajusteinventario_comentario column
 * @method AjusteinventarioQuery groupByAjusteinventarioFecha() Group by the ajusteinventario_fecha column
 * @method AjusteinventarioQuery groupByAjusteinventarioTipo() Group by the ajusteinventario_tipo column
 *
 * @method AjusteinventarioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AjusteinventarioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AjusteinventarioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method AjusteinventarioQuery leftJoinAlmacen($relationAlias = null) Adds a LEFT JOIN clause to the query using the Almacen relation
 * @method AjusteinventarioQuery rightJoinAlmacen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Almacen relation
 * @method AjusteinventarioQuery innerJoinAlmacen($relationAlias = null) Adds a INNER JOIN clause to the query using the Almacen relation
 *
 * @method AjusteinventarioQuery leftJoinEmpresa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empresa relation
 * @method AjusteinventarioQuery rightJoinEmpresa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empresa relation
 * @method AjusteinventarioQuery innerJoinEmpresa($relationAlias = null) Adds a INNER JOIN clause to the query using the Empresa relation
 *
 * @method AjusteinventarioQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method AjusteinventarioQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method AjusteinventarioQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method AjusteinventarioQuery leftJoinSucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursal relation
 * @method AjusteinventarioQuery rightJoinSucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursal relation
 * @method AjusteinventarioQuery innerJoinSucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursal relation
 *
 * @method AjusteinventarioQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method AjusteinventarioQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method AjusteinventarioQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method AjusteinventarioQuery leftJoinAjusteinventarionota($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ajusteinventarionota relation
 * @method AjusteinventarioQuery rightJoinAjusteinventarionota($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ajusteinventarionota relation
 * @method AjusteinventarioQuery innerJoinAjusteinventarionota($relationAlias = null) Adds a INNER JOIN clause to the query using the Ajusteinventarionota relation
 *
 * @method Ajusteinventario findOne(PropelPDO $con = null) Return the first Ajusteinventario matching the query
 * @method Ajusteinventario findOneOrCreate(PropelPDO $con = null) Return the first Ajusteinventario matching the query, or a new Ajusteinventario object populated from the query conditions when no match is found
 *
 * @method Ajusteinventario findOneByIdempresa(int $idempresa) Return the first Ajusteinventario filtered by the idempresa column
 * @method Ajusteinventario findOneByIdsucursal(int $idsucursal) Return the first Ajusteinventario filtered by the idsucursal column
 * @method Ajusteinventario findOneByIdalmacen(int $idalmacen) Return the first Ajusteinventario filtered by the idalmacen column
 * @method Ajusteinventario findOneByIdproducto(int $idproducto) Return the first Ajusteinventario filtered by the idproducto column
 * @method Ajusteinventario findOneByIdusuario(int $idusuario) Return the first Ajusteinventario filtered by the idusuario column
 * @method Ajusteinventario findOneByAjusteinventarioCantidad(string $ajusteinventario_cantidad) Return the first Ajusteinventario filtered by the ajusteinventario_cantidad column
 * @method Ajusteinventario findOneByAjusteinventarioComentario(string $ajusteinventario_comentario) Return the first Ajusteinventario filtered by the ajusteinventario_comentario column
 * @method Ajusteinventario findOneByAjusteinventarioFecha(string $ajusteinventario_fecha) Return the first Ajusteinventario filtered by the ajusteinventario_fecha column
 * @method Ajusteinventario findOneByAjusteinventarioTipo(string $ajusteinventario_tipo) Return the first Ajusteinventario filtered by the ajusteinventario_tipo column
 *
 * @method array findByIdajusteinventario(int $idajusteinventario) Return Ajusteinventario objects filtered by the idajusteinventario column
 * @method array findByIdempresa(int $idempresa) Return Ajusteinventario objects filtered by the idempresa column
 * @method array findByIdsucursal(int $idsucursal) Return Ajusteinventario objects filtered by the idsucursal column
 * @method array findByIdalmacen(int $idalmacen) Return Ajusteinventario objects filtered by the idalmacen column
 * @method array findByIdproducto(int $idproducto) Return Ajusteinventario objects filtered by the idproducto column
 * @method array findByIdusuario(int $idusuario) Return Ajusteinventario objects filtered by the idusuario column
 * @method array findByAjusteinventarioCantidad(string $ajusteinventario_cantidad) Return Ajusteinventario objects filtered by the ajusteinventario_cantidad column
 * @method array findByAjusteinventarioComentario(string $ajusteinventario_comentario) Return Ajusteinventario objects filtered by the ajusteinventario_comentario column
 * @method array findByAjusteinventarioFecha(string $ajusteinventario_fecha) Return Ajusteinventario objects filtered by the ajusteinventario_fecha column
 * @method array findByAjusteinventarioTipo(string $ajusteinventario_tipo) Return Ajusteinventario objects filtered by the ajusteinventario_tipo column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseAjusteinventarioQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAjusteinventarioQuery object.
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
            $modelName = 'Ajusteinventario';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AjusteinventarioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AjusteinventarioQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AjusteinventarioQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AjusteinventarioQuery) {
            return $criteria;
        }
        $query = new AjusteinventarioQuery(null, null, $modelAlias);

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
     * @return   Ajusteinventario|Ajusteinventario[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AjusteinventarioPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AjusteinventarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Ajusteinventario A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdajusteinventario($key, $con = null)
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
     * @return                 Ajusteinventario A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idajusteinventario`, `idempresa`, `idsucursal`, `idalmacen`, `idproducto`, `idusuario`, `ajusteinventario_cantidad`, `ajusteinventario_comentario`, `ajusteinventario_fecha`, `ajusteinventario_tipo` FROM `ajusteinventario` WHERE `idajusteinventario` = :p0';
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
            $obj = new Ajusteinventario();
            $obj->hydrate($row);
            AjusteinventarioPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Ajusteinventario|Ajusteinventario[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Ajusteinventario[]|mixed the list of results, formatted by the current formatter
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
     * @return AjusteinventarioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AjusteinventarioPeer::IDAJUSTEINVENTARIO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AjusteinventarioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AjusteinventarioPeer::IDAJUSTEINVENTARIO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idajusteinventario column
     *
     * Example usage:
     * <code>
     * $query->filterByIdajusteinventario(1234); // WHERE idajusteinventario = 1234
     * $query->filterByIdajusteinventario(array(12, 34)); // WHERE idajusteinventario IN (12, 34)
     * $query->filterByIdajusteinventario(array('min' => 12)); // WHERE idajusteinventario >= 12
     * $query->filterByIdajusteinventario(array('max' => 12)); // WHERE idajusteinventario <= 12
     * </code>
     *
     * @param     mixed $idajusteinventario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AjusteinventarioQuery The current query, for fluid interface
     */
    public function filterByIdajusteinventario($idajusteinventario = null, $comparison = null)
    {
        if (is_array($idajusteinventario)) {
            $useMinMax = false;
            if (isset($idajusteinventario['min'])) {
                $this->addUsingAlias(AjusteinventarioPeer::IDAJUSTEINVENTARIO, $idajusteinventario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idajusteinventario['max'])) {
                $this->addUsingAlias(AjusteinventarioPeer::IDAJUSTEINVENTARIO, $idajusteinventario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AjusteinventarioPeer::IDAJUSTEINVENTARIO, $idajusteinventario, $comparison);
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
     * @return AjusteinventarioQuery The current query, for fluid interface
     */
    public function filterByIdempresa($idempresa = null, $comparison = null)
    {
        if (is_array($idempresa)) {
            $useMinMax = false;
            if (isset($idempresa['min'])) {
                $this->addUsingAlias(AjusteinventarioPeer::IDEMPRESA, $idempresa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempresa['max'])) {
                $this->addUsingAlias(AjusteinventarioPeer::IDEMPRESA, $idempresa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AjusteinventarioPeer::IDEMPRESA, $idempresa, $comparison);
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
     * @return AjusteinventarioQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(AjusteinventarioPeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(AjusteinventarioPeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AjusteinventarioPeer::IDSUCURSAL, $idsucursal, $comparison);
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
     * @see       filterByAlmacen()
     *
     * @param     mixed $idalmacen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AjusteinventarioQuery The current query, for fluid interface
     */
    public function filterByIdalmacen($idalmacen = null, $comparison = null)
    {
        if (is_array($idalmacen)) {
            $useMinMax = false;
            if (isset($idalmacen['min'])) {
                $this->addUsingAlias(AjusteinventarioPeer::IDALMACEN, $idalmacen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idalmacen['max'])) {
                $this->addUsingAlias(AjusteinventarioPeer::IDALMACEN, $idalmacen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AjusteinventarioPeer::IDALMACEN, $idalmacen, $comparison);
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
     * @return AjusteinventarioQuery The current query, for fluid interface
     */
    public function filterByIdproducto($idproducto = null, $comparison = null)
    {
        if (is_array($idproducto)) {
            $useMinMax = false;
            if (isset($idproducto['min'])) {
                $this->addUsingAlias(AjusteinventarioPeer::IDPRODUCTO, $idproducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproducto['max'])) {
                $this->addUsingAlias(AjusteinventarioPeer::IDPRODUCTO, $idproducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AjusteinventarioPeer::IDPRODUCTO, $idproducto, $comparison);
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
     * @return AjusteinventarioQuery The current query, for fluid interface
     */
    public function filterByIdusuario($idusuario = null, $comparison = null)
    {
        if (is_array($idusuario)) {
            $useMinMax = false;
            if (isset($idusuario['min'])) {
                $this->addUsingAlias(AjusteinventarioPeer::IDUSUARIO, $idusuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idusuario['max'])) {
                $this->addUsingAlias(AjusteinventarioPeer::IDUSUARIO, $idusuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AjusteinventarioPeer::IDUSUARIO, $idusuario, $comparison);
    }

    /**
     * Filter the query on the ajusteinventario_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByAjusteinventarioCantidad(1234); // WHERE ajusteinventario_cantidad = 1234
     * $query->filterByAjusteinventarioCantidad(array(12, 34)); // WHERE ajusteinventario_cantidad IN (12, 34)
     * $query->filterByAjusteinventarioCantidad(array('min' => 12)); // WHERE ajusteinventario_cantidad >= 12
     * $query->filterByAjusteinventarioCantidad(array('max' => 12)); // WHERE ajusteinventario_cantidad <= 12
     * </code>
     *
     * @param     mixed $ajusteinventarioCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AjusteinventarioQuery The current query, for fluid interface
     */
    public function filterByAjusteinventarioCantidad($ajusteinventarioCantidad = null, $comparison = null)
    {
        if (is_array($ajusteinventarioCantidad)) {
            $useMinMax = false;
            if (isset($ajusteinventarioCantidad['min'])) {
                $this->addUsingAlias(AjusteinventarioPeer::AJUSTEINVENTARIO_CANTIDAD, $ajusteinventarioCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ajusteinventarioCantidad['max'])) {
                $this->addUsingAlias(AjusteinventarioPeer::AJUSTEINVENTARIO_CANTIDAD, $ajusteinventarioCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AjusteinventarioPeer::AJUSTEINVENTARIO_CANTIDAD, $ajusteinventarioCantidad, $comparison);
    }

    /**
     * Filter the query on the ajusteinventario_comentario column
     *
     * Example usage:
     * <code>
     * $query->filterByAjusteinventarioComentario('fooValue');   // WHERE ajusteinventario_comentario = 'fooValue'
     * $query->filterByAjusteinventarioComentario('%fooValue%'); // WHERE ajusteinventario_comentario LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ajusteinventarioComentario The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AjusteinventarioQuery The current query, for fluid interface
     */
    public function filterByAjusteinventarioComentario($ajusteinventarioComentario = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ajusteinventarioComentario)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ajusteinventarioComentario)) {
                $ajusteinventarioComentario = str_replace('*', '%', $ajusteinventarioComentario);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AjusteinventarioPeer::AJUSTEINVENTARIO_COMENTARIO, $ajusteinventarioComentario, $comparison);
    }

    /**
     * Filter the query on the ajusteinventario_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByAjusteinventarioFecha('2011-03-14'); // WHERE ajusteinventario_fecha = '2011-03-14'
     * $query->filterByAjusteinventarioFecha('now'); // WHERE ajusteinventario_fecha = '2011-03-14'
     * $query->filterByAjusteinventarioFecha(array('max' => 'yesterday')); // WHERE ajusteinventario_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $ajusteinventarioFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AjusteinventarioQuery The current query, for fluid interface
     */
    public function filterByAjusteinventarioFecha($ajusteinventarioFecha = null, $comparison = null)
    {
        if (is_array($ajusteinventarioFecha)) {
            $useMinMax = false;
            if (isset($ajusteinventarioFecha['min'])) {
                $this->addUsingAlias(AjusteinventarioPeer::AJUSTEINVENTARIO_FECHA, $ajusteinventarioFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ajusteinventarioFecha['max'])) {
                $this->addUsingAlias(AjusteinventarioPeer::AJUSTEINVENTARIO_FECHA, $ajusteinventarioFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AjusteinventarioPeer::AJUSTEINVENTARIO_FECHA, $ajusteinventarioFecha, $comparison);
    }

    /**
     * Filter the query on the ajusteinventario_tipo column
     *
     * Example usage:
     * <code>
     * $query->filterByAjusteinventarioTipo('fooValue');   // WHERE ajusteinventario_tipo = 'fooValue'
     * $query->filterByAjusteinventarioTipo('%fooValue%'); // WHERE ajusteinventario_tipo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ajusteinventarioTipo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AjusteinventarioQuery The current query, for fluid interface
     */
    public function filterByAjusteinventarioTipo($ajusteinventarioTipo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ajusteinventarioTipo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ajusteinventarioTipo)) {
                $ajusteinventarioTipo = str_replace('*', '%', $ajusteinventarioTipo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AjusteinventarioPeer::AJUSTEINVENTARIO_TIPO, $ajusteinventarioTipo, $comparison);
    }

    /**
     * Filter the query by a related Almacen object
     *
     * @param   Almacen|PropelObjectCollection $almacen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AjusteinventarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAlmacen($almacen, $comparison = null)
    {
        if ($almacen instanceof Almacen) {
            return $this
                ->addUsingAlias(AjusteinventarioPeer::IDALMACEN, $almacen->getIdalmacen(), $comparison);
        } elseif ($almacen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AjusteinventarioPeer::IDALMACEN, $almacen->toKeyValue('PrimaryKey', 'Idalmacen'), $comparison);
        } else {
            throw new PropelException('filterByAlmacen() only accepts arguments of type Almacen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Almacen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AjusteinventarioQuery The current query, for fluid interface
     */
    public function joinAlmacen($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Almacen');

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
            $this->addJoinObject($join, 'Almacen');
        }

        return $this;
    }

    /**
     * Use the Almacen relation Almacen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AlmacenQuery A secondary query class using the current class as primary query
     */
    public function useAlmacenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAlmacen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Almacen', 'AlmacenQuery');
    }

    /**
     * Filter the query by a related Empresa object
     *
     * @param   Empresa|PropelObjectCollection $empresa The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AjusteinventarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpresa($empresa, $comparison = null)
    {
        if ($empresa instanceof Empresa) {
            return $this
                ->addUsingAlias(AjusteinventarioPeer::IDEMPRESA, $empresa->getIdempresa(), $comparison);
        } elseif ($empresa instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AjusteinventarioPeer::IDEMPRESA, $empresa->toKeyValue('PrimaryKey', 'Idempresa'), $comparison);
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
     * @return AjusteinventarioQuery The current query, for fluid interface
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
     * @return                 AjusteinventarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(AjusteinventarioPeer::IDPRODUCTO, $producto->getIdproducto(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AjusteinventarioPeer::IDPRODUCTO, $producto->toKeyValue('PrimaryKey', 'Idproducto'), $comparison);
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
     * @return AjusteinventarioQuery The current query, for fluid interface
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
     * Filter the query by a related Sucursal object
     *
     * @param   Sucursal|PropelObjectCollection $sucursal The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AjusteinventarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursal($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(AjusteinventarioPeer::IDSUCURSAL, $sucursal->getIdsucursal(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AjusteinventarioPeer::IDSUCURSAL, $sucursal->toKeyValue('PrimaryKey', 'Idsucursal'), $comparison);
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
     * @return AjusteinventarioQuery The current query, for fluid interface
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
     * @return                 AjusteinventarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(AjusteinventarioPeer::IDUSUARIO, $usuario->getIdusuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AjusteinventarioPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
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
     * @return AjusteinventarioQuery The current query, for fluid interface
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
     * Filter the query by a related Ajusteinventarionota object
     *
     * @param   Ajusteinventarionota|PropelObjectCollection $ajusteinventarionota  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AjusteinventarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAjusteinventarionota($ajusteinventarionota, $comparison = null)
    {
        if ($ajusteinventarionota instanceof Ajusteinventarionota) {
            return $this
                ->addUsingAlias(AjusteinventarioPeer::IDAJUSTEINVENTARIO, $ajusteinventarionota->getIdajusteinventario(), $comparison);
        } elseif ($ajusteinventarionota instanceof PropelObjectCollection) {
            return $this
                ->useAjusteinventarionotaQuery()
                ->filterByPrimaryKeys($ajusteinventarionota->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAjusteinventarionota() only accepts arguments of type Ajusteinventarionota or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Ajusteinventarionota relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AjusteinventarioQuery The current query, for fluid interface
     */
    public function joinAjusteinventarionota($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Ajusteinventarionota');

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
            $this->addJoinObject($join, 'Ajusteinventarionota');
        }

        return $this;
    }

    /**
     * Use the Ajusteinventarionota relation Ajusteinventarionota object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AjusteinventarionotaQuery A secondary query class using the current class as primary query
     */
    public function useAjusteinventarionotaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAjusteinventarionota($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ajusteinventarionota', 'AjusteinventarionotaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Ajusteinventario $ajusteinventario Object to remove from the list of results
     *
     * @return AjusteinventarioQuery The current query, for fluid interface
     */
    public function prune($ajusteinventario = null)
    {
        if ($ajusteinventario) {
            $this->addUsingAlias(AjusteinventarioPeer::IDAJUSTEINVENTARIO, $ajusteinventario->getIdajusteinventario(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
