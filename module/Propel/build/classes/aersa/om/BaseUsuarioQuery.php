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
 * @method UsuarioQuery leftJoinCompraRelatedByIdauditor($relationAlias = null) Adds a LEFT JOIN clause to the query using the CompraRelatedByIdauditor relation
 * @method UsuarioQuery rightJoinCompraRelatedByIdauditor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CompraRelatedByIdauditor relation
 * @method UsuarioQuery innerJoinCompraRelatedByIdauditor($relationAlias = null) Adds a INNER JOIN clause to the query using the CompraRelatedByIdauditor relation
 *
 * @method UsuarioQuery leftJoinCompraRelatedByIdusuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the CompraRelatedByIdusuario relation
 * @method UsuarioQuery rightJoinCompraRelatedByIdusuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CompraRelatedByIdusuario relation
 * @method UsuarioQuery innerJoinCompraRelatedByIdusuario($relationAlias = null) Adds a INNER JOIN clause to the query using the CompraRelatedByIdusuario relation
 *
 * @method UsuarioQuery leftJoinCompranota($relationAlias = null) Adds a LEFT JOIN clause to the query using the Compranota relation
 * @method UsuarioQuery rightJoinCompranota($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Compranota relation
 * @method UsuarioQuery innerJoinCompranota($relationAlias = null) Adds a INNER JOIN clause to the query using the Compranota relation
 *
 * @method UsuarioQuery leftJoinDevolucionRelatedByIdauditor($relationAlias = null) Adds a LEFT JOIN clause to the query using the DevolucionRelatedByIdauditor relation
 * @method UsuarioQuery rightJoinDevolucionRelatedByIdauditor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DevolucionRelatedByIdauditor relation
 * @method UsuarioQuery innerJoinDevolucionRelatedByIdauditor($relationAlias = null) Adds a INNER JOIN clause to the query using the DevolucionRelatedByIdauditor relation
 *
 * @method UsuarioQuery leftJoinDevolucionRelatedByIdusuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the DevolucionRelatedByIdusuario relation
 * @method UsuarioQuery rightJoinDevolucionRelatedByIdusuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DevolucionRelatedByIdusuario relation
 * @method UsuarioQuery innerJoinDevolucionRelatedByIdusuario($relationAlias = null) Adds a INNER JOIN clause to the query using the DevolucionRelatedByIdusuario relation
 *
 * @method UsuarioQuery leftJoinDevolucionnota($relationAlias = null) Adds a LEFT JOIN clause to the query using the Devolucionnota relation
 * @method UsuarioQuery rightJoinDevolucionnota($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Devolucionnota relation
 * @method UsuarioQuery innerJoinDevolucionnota($relationAlias = null) Adds a INNER JOIN clause to the query using the Devolucionnota relation
 *
 * @method UsuarioQuery leftJoinIngresoRelatedByIdauditor($relationAlias = null) Adds a LEFT JOIN clause to the query using the IngresoRelatedByIdauditor relation
 * @method UsuarioQuery rightJoinIngresoRelatedByIdauditor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the IngresoRelatedByIdauditor relation
 * @method UsuarioQuery innerJoinIngresoRelatedByIdauditor($relationAlias = null) Adds a INNER JOIN clause to the query using the IngresoRelatedByIdauditor relation
 *
 * @method UsuarioQuery leftJoinIngresoRelatedByIdusuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the IngresoRelatedByIdusuario relation
 * @method UsuarioQuery rightJoinIngresoRelatedByIdusuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the IngresoRelatedByIdusuario relation
 * @method UsuarioQuery innerJoinIngresoRelatedByIdusuario($relationAlias = null) Adds a INNER JOIN clause to the query using the IngresoRelatedByIdusuario relation
 *
 * @method UsuarioQuery leftJoinInventariomesRelatedByIdauditor($relationAlias = null) Adds a LEFT JOIN clause to the query using the InventariomesRelatedByIdauditor relation
 * @method UsuarioQuery rightJoinInventariomesRelatedByIdauditor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InventariomesRelatedByIdauditor relation
 * @method UsuarioQuery innerJoinInventariomesRelatedByIdauditor($relationAlias = null) Adds a INNER JOIN clause to the query using the InventariomesRelatedByIdauditor relation
 *
 * @method UsuarioQuery leftJoinInventariomesRelatedByIdusuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the InventariomesRelatedByIdusuario relation
 * @method UsuarioQuery rightJoinInventariomesRelatedByIdusuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InventariomesRelatedByIdusuario relation
 * @method UsuarioQuery innerJoinInventariomesRelatedByIdusuario($relationAlias = null) Adds a INNER JOIN clause to the query using the InventariomesRelatedByIdusuario relation
 *
 * @method UsuarioQuery leftJoinInventariomesdetallenota($relationAlias = null) Adds a LEFT JOIN clause to the query using the Inventariomesdetallenota relation
 * @method UsuarioQuery rightJoinInventariomesdetallenota($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Inventariomesdetallenota relation
 * @method UsuarioQuery innerJoinInventariomesdetallenota($relationAlias = null) Adds a INNER JOIN clause to the query using the Inventariomesdetallenota relation
 *
 * @method UsuarioQuery leftJoinNotacreditoRelatedByIdauditor($relationAlias = null) Adds a LEFT JOIN clause to the query using the NotacreditoRelatedByIdauditor relation
 * @method UsuarioQuery rightJoinNotacreditoRelatedByIdauditor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NotacreditoRelatedByIdauditor relation
 * @method UsuarioQuery innerJoinNotacreditoRelatedByIdauditor($relationAlias = null) Adds a INNER JOIN clause to the query using the NotacreditoRelatedByIdauditor relation
 *
 * @method UsuarioQuery leftJoinNotacreditoRelatedByIdusuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the NotacreditoRelatedByIdusuario relation
 * @method UsuarioQuery rightJoinNotacreditoRelatedByIdusuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NotacreditoRelatedByIdusuario relation
 * @method UsuarioQuery innerJoinNotacreditoRelatedByIdusuario($relationAlias = null) Adds a INNER JOIN clause to the query using the NotacreditoRelatedByIdusuario relation
 *
 * @method UsuarioQuery leftJoinNotacreditonota($relationAlias = null) Adds a LEFT JOIN clause to the query using the Notacreditonota relation
 * @method UsuarioQuery rightJoinNotacreditonota($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Notacreditonota relation
 * @method UsuarioQuery innerJoinNotacreditonota($relationAlias = null) Adds a INNER JOIN clause to the query using the Notacreditonota relation
 *
 * @method UsuarioQuery leftJoinOrdentablajeriaRelatedByIdauditor($relationAlias = null) Adds a LEFT JOIN clause to the query using the OrdentablajeriaRelatedByIdauditor relation
 * @method UsuarioQuery rightJoinOrdentablajeriaRelatedByIdauditor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OrdentablajeriaRelatedByIdauditor relation
 * @method UsuarioQuery innerJoinOrdentablajeriaRelatedByIdauditor($relationAlias = null) Adds a INNER JOIN clause to the query using the OrdentablajeriaRelatedByIdauditor relation
 *
 * @method UsuarioQuery leftJoinOrdentablajeriaRelatedByIdusuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the OrdentablajeriaRelatedByIdusuario relation
 * @method UsuarioQuery rightJoinOrdentablajeriaRelatedByIdusuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OrdentablajeriaRelatedByIdusuario relation
 * @method UsuarioQuery innerJoinOrdentablajeriaRelatedByIdusuario($relationAlias = null) Adds a INNER JOIN clause to the query using the OrdentablajeriaRelatedByIdusuario relation
 *
 * @method UsuarioQuery leftJoinOrdentablajerianota($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ordentablajerianota relation
 * @method UsuarioQuery rightJoinOrdentablajerianota($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ordentablajerianota relation
 * @method UsuarioQuery innerJoinOrdentablajerianota($relationAlias = null) Adds a INNER JOIN clause to the query using the Ordentablajerianota relation
 *
 * @method UsuarioQuery leftJoinRequisicionRelatedByIdauditor($relationAlias = null) Adds a LEFT JOIN clause to the query using the RequisicionRelatedByIdauditor relation
 * @method UsuarioQuery rightJoinRequisicionRelatedByIdauditor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RequisicionRelatedByIdauditor relation
 * @method UsuarioQuery innerJoinRequisicionRelatedByIdauditor($relationAlias = null) Adds a INNER JOIN clause to the query using the RequisicionRelatedByIdauditor relation
 *
 * @method UsuarioQuery leftJoinRequisicionRelatedByIdusuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the RequisicionRelatedByIdusuario relation
 * @method UsuarioQuery rightJoinRequisicionRelatedByIdusuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RequisicionRelatedByIdusuario relation
 * @method UsuarioQuery innerJoinRequisicionRelatedByIdusuario($relationAlias = null) Adds a INNER JOIN clause to the query using the RequisicionRelatedByIdusuario relation
 *
 * @method UsuarioQuery leftJoinRequisicionnota($relationAlias = null) Adds a LEFT JOIN clause to the query using the Requisicionnota relation
 * @method UsuarioQuery rightJoinRequisicionnota($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Requisicionnota relation
 * @method UsuarioQuery innerJoinRequisicionnota($relationAlias = null) Adds a INNER JOIN clause to the query using the Requisicionnota relation
 *
 * @method UsuarioQuery leftJoinUsuarioempresa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuarioempresa relation
 * @method UsuarioQuery rightJoinUsuarioempresa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuarioempresa relation
 * @method UsuarioQuery innerJoinUsuarioempresa($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuarioempresa relation
 *
 * @method UsuarioQuery leftJoinUsuariosucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuariosucursal relation
 * @method UsuarioQuery rightJoinUsuariosucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuariosucursal relation
 * @method UsuarioQuery innerJoinUsuariosucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuariosucursal relation
 *
 * @method UsuarioQuery leftJoinVentaRelatedByIdauditor($relationAlias = null) Adds a LEFT JOIN clause to the query using the VentaRelatedByIdauditor relation
 * @method UsuarioQuery rightJoinVentaRelatedByIdauditor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the VentaRelatedByIdauditor relation
 * @method UsuarioQuery innerJoinVentaRelatedByIdauditor($relationAlias = null) Adds a INNER JOIN clause to the query using the VentaRelatedByIdauditor relation
 *
 * @method UsuarioQuery leftJoinVentaRelatedByIdusuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the VentaRelatedByIdusuario relation
 * @method UsuarioQuery rightJoinVentaRelatedByIdusuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the VentaRelatedByIdusuario relation
 * @method UsuarioQuery innerJoinVentaRelatedByIdusuario($relationAlias = null) Adds a INNER JOIN clause to the query using the VentaRelatedByIdusuario relation
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
     * Filter the query by a related Compra object
     *
     * @param   Compra|PropelObjectCollection $compra  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCompraRelatedByIdauditor($compra, $comparison = null)
    {
        if ($compra instanceof Compra) {
            return $this
                ->addUsingAlias(UsuarioPeer::IDUSUARIO, $compra->getIdauditor(), $comparison);
        } elseif ($compra instanceof PropelObjectCollection) {
            return $this
                ->useCompraRelatedByIdauditorQuery()
                ->filterByPrimaryKeys($compra->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCompraRelatedByIdauditor() only accepts arguments of type Compra or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CompraRelatedByIdauditor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinCompraRelatedByIdauditor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CompraRelatedByIdauditor');

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
            $this->addJoinObject($join, 'CompraRelatedByIdauditor');
        }

        return $this;
    }

    /**
     * Use the CompraRelatedByIdauditor relation Compra object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CompraQuery A secondary query class using the current class as primary query
     */
    public function useCompraRelatedByIdauditorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCompraRelatedByIdauditor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CompraRelatedByIdauditor', 'CompraQuery');
    }

    /**
     * Filter the query by a related Compra object
     *
     * @param   Compra|PropelObjectCollection $compra  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCompraRelatedByIdusuario($compra, $comparison = null)
    {
        if ($compra instanceof Compra) {
            return $this
                ->addUsingAlias(UsuarioPeer::IDUSUARIO, $compra->getIdusuario(), $comparison);
        } elseif ($compra instanceof PropelObjectCollection) {
            return $this
                ->useCompraRelatedByIdusuarioQuery()
                ->filterByPrimaryKeys($compra->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCompraRelatedByIdusuario() only accepts arguments of type Compra or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CompraRelatedByIdusuario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinCompraRelatedByIdusuario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CompraRelatedByIdusuario');

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
            $this->addJoinObject($join, 'CompraRelatedByIdusuario');
        }

        return $this;
    }

    /**
     * Use the CompraRelatedByIdusuario relation Compra object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CompraQuery A secondary query class using the current class as primary query
     */
    public function useCompraRelatedByIdusuarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCompraRelatedByIdusuario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CompraRelatedByIdusuario', 'CompraQuery');
    }

    /**
     * Filter the query by a related Compranota object
     *
     * @param   Compranota|PropelObjectCollection $compranota  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCompranota($compranota, $comparison = null)
    {
        if ($compranota instanceof Compranota) {
            return $this
                ->addUsingAlias(UsuarioPeer::IDUSUARIO, $compranota->getIdusuario(), $comparison);
        } elseif ($compranota instanceof PropelObjectCollection) {
            return $this
                ->useCompranotaQuery()
                ->filterByPrimaryKeys($compranota->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCompranota() only accepts arguments of type Compranota or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Compranota relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinCompranota($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Compranota');

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
            $this->addJoinObject($join, 'Compranota');
        }

        return $this;
    }

    /**
     * Use the Compranota relation Compranota object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CompranotaQuery A secondary query class using the current class as primary query
     */
    public function useCompranotaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCompranota($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Compranota', 'CompranotaQuery');
    }

    /**
     * Filter the query by a related Devolucion object
     *
     * @param   Devolucion|PropelObjectCollection $devolucion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDevolucionRelatedByIdauditor($devolucion, $comparison = null)
    {
        if ($devolucion instanceof Devolucion) {
            return $this
                ->addUsingAlias(UsuarioPeer::IDUSUARIO, $devolucion->getIdauditor(), $comparison);
        } elseif ($devolucion instanceof PropelObjectCollection) {
            return $this
                ->useDevolucionRelatedByIdauditorQuery()
                ->filterByPrimaryKeys($devolucion->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByDevolucionRelatedByIdauditor() only accepts arguments of type Devolucion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the DevolucionRelatedByIdauditor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinDevolucionRelatedByIdauditor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('DevolucionRelatedByIdauditor');

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
            $this->addJoinObject($join, 'DevolucionRelatedByIdauditor');
        }

        return $this;
    }

    /**
     * Use the DevolucionRelatedByIdauditor relation Devolucion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DevolucionQuery A secondary query class using the current class as primary query
     */
    public function useDevolucionRelatedByIdauditorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDevolucionRelatedByIdauditor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'DevolucionRelatedByIdauditor', 'DevolucionQuery');
    }

    /**
     * Filter the query by a related Devolucion object
     *
     * @param   Devolucion|PropelObjectCollection $devolucion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDevolucionRelatedByIdusuario($devolucion, $comparison = null)
    {
        if ($devolucion instanceof Devolucion) {
            return $this
                ->addUsingAlias(UsuarioPeer::IDUSUARIO, $devolucion->getIdusuario(), $comparison);
        } elseif ($devolucion instanceof PropelObjectCollection) {
            return $this
                ->useDevolucionRelatedByIdusuarioQuery()
                ->filterByPrimaryKeys($devolucion->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByDevolucionRelatedByIdusuario() only accepts arguments of type Devolucion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the DevolucionRelatedByIdusuario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinDevolucionRelatedByIdusuario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('DevolucionRelatedByIdusuario');

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
            $this->addJoinObject($join, 'DevolucionRelatedByIdusuario');
        }

        return $this;
    }

    /**
     * Use the DevolucionRelatedByIdusuario relation Devolucion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DevolucionQuery A secondary query class using the current class as primary query
     */
    public function useDevolucionRelatedByIdusuarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDevolucionRelatedByIdusuario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'DevolucionRelatedByIdusuario', 'DevolucionQuery');
    }

    /**
     * Filter the query by a related Devolucionnota object
     *
     * @param   Devolucionnota|PropelObjectCollection $devolucionnota  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDevolucionnota($devolucionnota, $comparison = null)
    {
        if ($devolucionnota instanceof Devolucionnota) {
            return $this
                ->addUsingAlias(UsuarioPeer::IDUSUARIO, $devolucionnota->getIdusuario(), $comparison);
        } elseif ($devolucionnota instanceof PropelObjectCollection) {
            return $this
                ->useDevolucionnotaQuery()
                ->filterByPrimaryKeys($devolucionnota->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByDevolucionnota() only accepts arguments of type Devolucionnota or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Devolucionnota relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinDevolucionnota($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Devolucionnota');

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
            $this->addJoinObject($join, 'Devolucionnota');
        }

        return $this;
    }

    /**
     * Use the Devolucionnota relation Devolucionnota object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DevolucionnotaQuery A secondary query class using the current class as primary query
     */
    public function useDevolucionnotaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDevolucionnota($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Devolucionnota', 'DevolucionnotaQuery');
    }

    /**
     * Filter the query by a related Ingreso object
     *
     * @param   Ingreso|PropelObjectCollection $ingreso  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByIngresoRelatedByIdauditor($ingreso, $comparison = null)
    {
        if ($ingreso instanceof Ingreso) {
            return $this
                ->addUsingAlias(UsuarioPeer::IDUSUARIO, $ingreso->getIdauditor(), $comparison);
        } elseif ($ingreso instanceof PropelObjectCollection) {
            return $this
                ->useIngresoRelatedByIdauditorQuery()
                ->filterByPrimaryKeys($ingreso->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByIngresoRelatedByIdauditor() only accepts arguments of type Ingreso or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the IngresoRelatedByIdauditor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinIngresoRelatedByIdauditor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('IngresoRelatedByIdauditor');

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
            $this->addJoinObject($join, 'IngresoRelatedByIdauditor');
        }

        return $this;
    }

    /**
     * Use the IngresoRelatedByIdauditor relation Ingreso object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   IngresoQuery A secondary query class using the current class as primary query
     */
    public function useIngresoRelatedByIdauditorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinIngresoRelatedByIdauditor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'IngresoRelatedByIdauditor', 'IngresoQuery');
    }

    /**
     * Filter the query by a related Ingreso object
     *
     * @param   Ingreso|PropelObjectCollection $ingreso  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByIngresoRelatedByIdusuario($ingreso, $comparison = null)
    {
        if ($ingreso instanceof Ingreso) {
            return $this
                ->addUsingAlias(UsuarioPeer::IDUSUARIO, $ingreso->getIdusuario(), $comparison);
        } elseif ($ingreso instanceof PropelObjectCollection) {
            return $this
                ->useIngresoRelatedByIdusuarioQuery()
                ->filterByPrimaryKeys($ingreso->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByIngresoRelatedByIdusuario() only accepts arguments of type Ingreso or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the IngresoRelatedByIdusuario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinIngresoRelatedByIdusuario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('IngresoRelatedByIdusuario');

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
            $this->addJoinObject($join, 'IngresoRelatedByIdusuario');
        }

        return $this;
    }

    /**
     * Use the IngresoRelatedByIdusuario relation Ingreso object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   IngresoQuery A secondary query class using the current class as primary query
     */
    public function useIngresoRelatedByIdusuarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinIngresoRelatedByIdusuario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'IngresoRelatedByIdusuario', 'IngresoQuery');
    }

    /**
     * Filter the query by a related Inventariomes object
     *
     * @param   Inventariomes|PropelObjectCollection $inventariomes  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByInventariomesRelatedByIdauditor($inventariomes, $comparison = null)
    {
        if ($inventariomes instanceof Inventariomes) {
            return $this
                ->addUsingAlias(UsuarioPeer::IDUSUARIO, $inventariomes->getIdauditor(), $comparison);
        } elseif ($inventariomes instanceof PropelObjectCollection) {
            return $this
                ->useInventariomesRelatedByIdauditorQuery()
                ->filterByPrimaryKeys($inventariomes->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByInventariomesRelatedByIdauditor() only accepts arguments of type Inventariomes or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InventariomesRelatedByIdauditor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinInventariomesRelatedByIdauditor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InventariomesRelatedByIdauditor');

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
            $this->addJoinObject($join, 'InventariomesRelatedByIdauditor');
        }

        return $this;
    }

    /**
     * Use the InventariomesRelatedByIdauditor relation Inventariomes object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   InventariomesQuery A secondary query class using the current class as primary query
     */
    public function useInventariomesRelatedByIdauditorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInventariomesRelatedByIdauditor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InventariomesRelatedByIdauditor', 'InventariomesQuery');
    }

    /**
     * Filter the query by a related Inventariomes object
     *
     * @param   Inventariomes|PropelObjectCollection $inventariomes  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByInventariomesRelatedByIdusuario($inventariomes, $comparison = null)
    {
        if ($inventariomes instanceof Inventariomes) {
            return $this
                ->addUsingAlias(UsuarioPeer::IDUSUARIO, $inventariomes->getIdusuario(), $comparison);
        } elseif ($inventariomes instanceof PropelObjectCollection) {
            return $this
                ->useInventariomesRelatedByIdusuarioQuery()
                ->filterByPrimaryKeys($inventariomes->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByInventariomesRelatedByIdusuario() only accepts arguments of type Inventariomes or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InventariomesRelatedByIdusuario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinInventariomesRelatedByIdusuario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InventariomesRelatedByIdusuario');

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
            $this->addJoinObject($join, 'InventariomesRelatedByIdusuario');
        }

        return $this;
    }

    /**
     * Use the InventariomesRelatedByIdusuario relation Inventariomes object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   InventariomesQuery A secondary query class using the current class as primary query
     */
    public function useInventariomesRelatedByIdusuarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInventariomesRelatedByIdusuario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InventariomesRelatedByIdusuario', 'InventariomesQuery');
    }

    /**
     * Filter the query by a related Inventariomesdetallenota object
     *
     * @param   Inventariomesdetallenota|PropelObjectCollection $inventariomesdetallenota  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByInventariomesdetallenota($inventariomesdetallenota, $comparison = null)
    {
        if ($inventariomesdetallenota instanceof Inventariomesdetallenota) {
            return $this
                ->addUsingAlias(UsuarioPeer::IDUSUARIO, $inventariomesdetallenota->getIdusuario(), $comparison);
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
     * @return UsuarioQuery The current query, for fluid interface
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
     * Filter the query by a related Notacredito object
     *
     * @param   Notacredito|PropelObjectCollection $notacredito  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByNotacreditoRelatedByIdauditor($notacredito, $comparison = null)
    {
        if ($notacredito instanceof Notacredito) {
            return $this
                ->addUsingAlias(UsuarioPeer::IDUSUARIO, $notacredito->getIdauditor(), $comparison);
        } elseif ($notacredito instanceof PropelObjectCollection) {
            return $this
                ->useNotacreditoRelatedByIdauditorQuery()
                ->filterByPrimaryKeys($notacredito->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByNotacreditoRelatedByIdauditor() only accepts arguments of type Notacredito or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the NotacreditoRelatedByIdauditor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinNotacreditoRelatedByIdauditor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('NotacreditoRelatedByIdauditor');

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
            $this->addJoinObject($join, 'NotacreditoRelatedByIdauditor');
        }

        return $this;
    }

    /**
     * Use the NotacreditoRelatedByIdauditor relation Notacredito object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   NotacreditoQuery A secondary query class using the current class as primary query
     */
    public function useNotacreditoRelatedByIdauditorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinNotacreditoRelatedByIdauditor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'NotacreditoRelatedByIdauditor', 'NotacreditoQuery');
    }

    /**
     * Filter the query by a related Notacredito object
     *
     * @param   Notacredito|PropelObjectCollection $notacredito  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByNotacreditoRelatedByIdusuario($notacredito, $comparison = null)
    {
        if ($notacredito instanceof Notacredito) {
            return $this
                ->addUsingAlias(UsuarioPeer::IDUSUARIO, $notacredito->getIdusuario(), $comparison);
        } elseif ($notacredito instanceof PropelObjectCollection) {
            return $this
                ->useNotacreditoRelatedByIdusuarioQuery()
                ->filterByPrimaryKeys($notacredito->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByNotacreditoRelatedByIdusuario() only accepts arguments of type Notacredito or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the NotacreditoRelatedByIdusuario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinNotacreditoRelatedByIdusuario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('NotacreditoRelatedByIdusuario');

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
            $this->addJoinObject($join, 'NotacreditoRelatedByIdusuario');
        }

        return $this;
    }

    /**
     * Use the NotacreditoRelatedByIdusuario relation Notacredito object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   NotacreditoQuery A secondary query class using the current class as primary query
     */
    public function useNotacreditoRelatedByIdusuarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinNotacreditoRelatedByIdusuario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'NotacreditoRelatedByIdusuario', 'NotacreditoQuery');
    }

    /**
     * Filter the query by a related Notacreditonota object
     *
     * @param   Notacreditonota|PropelObjectCollection $notacreditonota  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByNotacreditonota($notacreditonota, $comparison = null)
    {
        if ($notacreditonota instanceof Notacreditonota) {
            return $this
                ->addUsingAlias(UsuarioPeer::IDUSUARIO, $notacreditonota->getIdusuario(), $comparison);
        } elseif ($notacreditonota instanceof PropelObjectCollection) {
            return $this
                ->useNotacreditonotaQuery()
                ->filterByPrimaryKeys($notacreditonota->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByNotacreditonota() only accepts arguments of type Notacreditonota or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Notacreditonota relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinNotacreditonota($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Notacreditonota');

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
            $this->addJoinObject($join, 'Notacreditonota');
        }

        return $this;
    }

    /**
     * Use the Notacreditonota relation Notacreditonota object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   NotacreditonotaQuery A secondary query class using the current class as primary query
     */
    public function useNotacreditonotaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinNotacreditonota($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Notacreditonota', 'NotacreditonotaQuery');
    }

    /**
     * Filter the query by a related Ordentablajeria object
     *
     * @param   Ordentablajeria|PropelObjectCollection $ordentablajeria  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOrdentablajeriaRelatedByIdauditor($ordentablajeria, $comparison = null)
    {
        if ($ordentablajeria instanceof Ordentablajeria) {
            return $this
                ->addUsingAlias(UsuarioPeer::IDUSUARIO, $ordentablajeria->getIdauditor(), $comparison);
        } elseif ($ordentablajeria instanceof PropelObjectCollection) {
            return $this
                ->useOrdentablajeriaRelatedByIdauditorQuery()
                ->filterByPrimaryKeys($ordentablajeria->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOrdentablajeriaRelatedByIdauditor() only accepts arguments of type Ordentablajeria or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OrdentablajeriaRelatedByIdauditor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinOrdentablajeriaRelatedByIdauditor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OrdentablajeriaRelatedByIdauditor');

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
            $this->addJoinObject($join, 'OrdentablajeriaRelatedByIdauditor');
        }

        return $this;
    }

    /**
     * Use the OrdentablajeriaRelatedByIdauditor relation Ordentablajeria object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OrdentablajeriaQuery A secondary query class using the current class as primary query
     */
    public function useOrdentablajeriaRelatedByIdauditorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOrdentablajeriaRelatedByIdauditor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OrdentablajeriaRelatedByIdauditor', 'OrdentablajeriaQuery');
    }

    /**
     * Filter the query by a related Ordentablajeria object
     *
     * @param   Ordentablajeria|PropelObjectCollection $ordentablajeria  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOrdentablajeriaRelatedByIdusuario($ordentablajeria, $comparison = null)
    {
        if ($ordentablajeria instanceof Ordentablajeria) {
            return $this
                ->addUsingAlias(UsuarioPeer::IDUSUARIO, $ordentablajeria->getIdusuario(), $comparison);
        } elseif ($ordentablajeria instanceof PropelObjectCollection) {
            return $this
                ->useOrdentablajeriaRelatedByIdusuarioQuery()
                ->filterByPrimaryKeys($ordentablajeria->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOrdentablajeriaRelatedByIdusuario() only accepts arguments of type Ordentablajeria or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OrdentablajeriaRelatedByIdusuario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinOrdentablajeriaRelatedByIdusuario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OrdentablajeriaRelatedByIdusuario');

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
            $this->addJoinObject($join, 'OrdentablajeriaRelatedByIdusuario');
        }

        return $this;
    }

    /**
     * Use the OrdentablajeriaRelatedByIdusuario relation Ordentablajeria object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OrdentablajeriaQuery A secondary query class using the current class as primary query
     */
    public function useOrdentablajeriaRelatedByIdusuarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOrdentablajeriaRelatedByIdusuario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OrdentablajeriaRelatedByIdusuario', 'OrdentablajeriaQuery');
    }

    /**
     * Filter the query by a related Ordentablajerianota object
     *
     * @param   Ordentablajerianota|PropelObjectCollection $ordentablajerianota  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOrdentablajerianota($ordentablajerianota, $comparison = null)
    {
        if ($ordentablajerianota instanceof Ordentablajerianota) {
            return $this
                ->addUsingAlias(UsuarioPeer::IDUSUARIO, $ordentablajerianota->getIdusuario(), $comparison);
        } elseif ($ordentablajerianota instanceof PropelObjectCollection) {
            return $this
                ->useOrdentablajerianotaQuery()
                ->filterByPrimaryKeys($ordentablajerianota->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOrdentablajerianota() only accepts arguments of type Ordentablajerianota or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Ordentablajerianota relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinOrdentablajerianota($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Ordentablajerianota');

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
            $this->addJoinObject($join, 'Ordentablajerianota');
        }

        return $this;
    }

    /**
     * Use the Ordentablajerianota relation Ordentablajerianota object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OrdentablajerianotaQuery A secondary query class using the current class as primary query
     */
    public function useOrdentablajerianotaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOrdentablajerianota($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ordentablajerianota', 'OrdentablajerianotaQuery');
    }

    /**
     * Filter the query by a related Requisicion object
     *
     * @param   Requisicion|PropelObjectCollection $requisicion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRequisicionRelatedByIdauditor($requisicion, $comparison = null)
    {
        if ($requisicion instanceof Requisicion) {
            return $this
                ->addUsingAlias(UsuarioPeer::IDUSUARIO, $requisicion->getIdauditor(), $comparison);
        } elseif ($requisicion instanceof PropelObjectCollection) {
            return $this
                ->useRequisicionRelatedByIdauditorQuery()
                ->filterByPrimaryKeys($requisicion->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRequisicionRelatedByIdauditor() only accepts arguments of type Requisicion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RequisicionRelatedByIdauditor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinRequisicionRelatedByIdauditor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RequisicionRelatedByIdauditor');

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
            $this->addJoinObject($join, 'RequisicionRelatedByIdauditor');
        }

        return $this;
    }

    /**
     * Use the RequisicionRelatedByIdauditor relation Requisicion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RequisicionQuery A secondary query class using the current class as primary query
     */
    public function useRequisicionRelatedByIdauditorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRequisicionRelatedByIdauditor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RequisicionRelatedByIdauditor', 'RequisicionQuery');
    }

    /**
     * Filter the query by a related Requisicion object
     *
     * @param   Requisicion|PropelObjectCollection $requisicion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRequisicionRelatedByIdusuario($requisicion, $comparison = null)
    {
        if ($requisicion instanceof Requisicion) {
            return $this
                ->addUsingAlias(UsuarioPeer::IDUSUARIO, $requisicion->getIdusuario(), $comparison);
        } elseif ($requisicion instanceof PropelObjectCollection) {
            return $this
                ->useRequisicionRelatedByIdusuarioQuery()
                ->filterByPrimaryKeys($requisicion->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRequisicionRelatedByIdusuario() only accepts arguments of type Requisicion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RequisicionRelatedByIdusuario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinRequisicionRelatedByIdusuario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RequisicionRelatedByIdusuario');

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
            $this->addJoinObject($join, 'RequisicionRelatedByIdusuario');
        }

        return $this;
    }

    /**
     * Use the RequisicionRelatedByIdusuario relation Requisicion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RequisicionQuery A secondary query class using the current class as primary query
     */
    public function useRequisicionRelatedByIdusuarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRequisicionRelatedByIdusuario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RequisicionRelatedByIdusuario', 'RequisicionQuery');
    }

    /**
     * Filter the query by a related Requisicionnota object
     *
     * @param   Requisicionnota|PropelObjectCollection $requisicionnota  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRequisicionnota($requisicionnota, $comparison = null)
    {
        if ($requisicionnota instanceof Requisicionnota) {
            return $this
                ->addUsingAlias(UsuarioPeer::IDUSUARIO, $requisicionnota->getIdusuario(), $comparison);
        } elseif ($requisicionnota instanceof PropelObjectCollection) {
            return $this
                ->useRequisicionnotaQuery()
                ->filterByPrimaryKeys($requisicionnota->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRequisicionnota() only accepts arguments of type Requisicionnota or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Requisicionnota relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinRequisicionnota($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Requisicionnota');

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
            $this->addJoinObject($join, 'Requisicionnota');
        }

        return $this;
    }

    /**
     * Use the Requisicionnota relation Requisicionnota object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RequisicionnotaQuery A secondary query class using the current class as primary query
     */
    public function useRequisicionnotaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRequisicionnota($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Requisicionnota', 'RequisicionnotaQuery');
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
     * Filter the query by a related Venta object
     *
     * @param   Venta|PropelObjectCollection $venta  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVentaRelatedByIdauditor($venta, $comparison = null)
    {
        if ($venta instanceof Venta) {
            return $this
                ->addUsingAlias(UsuarioPeer::IDUSUARIO, $venta->getIdauditor(), $comparison);
        } elseif ($venta instanceof PropelObjectCollection) {
            return $this
                ->useVentaRelatedByIdauditorQuery()
                ->filterByPrimaryKeys($venta->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByVentaRelatedByIdauditor() only accepts arguments of type Venta or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the VentaRelatedByIdauditor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinVentaRelatedByIdauditor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('VentaRelatedByIdauditor');

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
            $this->addJoinObject($join, 'VentaRelatedByIdauditor');
        }

        return $this;
    }

    /**
     * Use the VentaRelatedByIdauditor relation Venta object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   VentaQuery A secondary query class using the current class as primary query
     */
    public function useVentaRelatedByIdauditorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVentaRelatedByIdauditor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'VentaRelatedByIdauditor', 'VentaQuery');
    }

    /**
     * Filter the query by a related Venta object
     *
     * @param   Venta|PropelObjectCollection $venta  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVentaRelatedByIdusuario($venta, $comparison = null)
    {
        if ($venta instanceof Venta) {
            return $this
                ->addUsingAlias(UsuarioPeer::IDUSUARIO, $venta->getIdusuario(), $comparison);
        } elseif ($venta instanceof PropelObjectCollection) {
            return $this
                ->useVentaRelatedByIdusuarioQuery()
                ->filterByPrimaryKeys($venta->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByVentaRelatedByIdusuario() only accepts arguments of type Venta or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the VentaRelatedByIdusuario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinVentaRelatedByIdusuario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('VentaRelatedByIdusuario');

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
            $this->addJoinObject($join, 'VentaRelatedByIdusuario');
        }

        return $this;
    }

    /**
     * Use the VentaRelatedByIdusuario relation Venta object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   VentaQuery A secondary query class using the current class as primary query
     */
    public function useVentaRelatedByIdusuarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVentaRelatedByIdusuario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'VentaRelatedByIdusuario', 'VentaQuery');
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
