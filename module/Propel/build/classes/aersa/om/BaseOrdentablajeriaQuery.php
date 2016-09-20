<?php


/**
 * Base class that represents a query for the 'ordentablajeria' table.
 *
 *
 *
 * @method OrdentablajeriaQuery orderByIdordentablajeria($order = Criteria::ASC) Order by the idordentablajeria column
 * @method OrdentablajeriaQuery orderByIdempresa($order = Criteria::ASC) Order by the idempresa column
 * @method OrdentablajeriaQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method OrdentablajeriaQuery orderByIdalmacenorigen($order = Criteria::ASC) Order by the idalmacenorigen column
 * @method OrdentablajeriaQuery orderByIdalmacendestino($order = Criteria::ASC) Order by the idalmacendestino column
 * @method OrdentablajeriaQuery orderByIdusuario($order = Criteria::ASC) Order by the idusuario column
 * @method OrdentablajeriaQuery orderByIdauditor($order = Criteria::ASC) Order by the idauditor column
 * @method OrdentablajeriaQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 * @method OrdentablajeriaQuery orderByOrdentablajeriaEsporcion($order = Criteria::ASC) Order by the ordentablajeria_esporcion column
 * @method OrdentablajeriaQuery orderByOrdentablajeriaNumeroporciones($order = Criteria::ASC) Order by the ordentablajeria_numeroporciones column
 * @method OrdentablajeriaQuery orderByOrdentablajeriaPesobruto($order = Criteria::ASC) Order by the ordentablajeria_pesobruto column
 * @method OrdentablajeriaQuery orderByOrdentablajeriaPreciokilo($order = Criteria::ASC) Order by the ordentablajeria_preciokilo column
 * @method OrdentablajeriaQuery orderByOrdentablajeriaTotalbruto($order = Criteria::ASC) Order by the ordentablajeria_totalbruto column
 * @method OrdentablajeriaQuery orderByOrdentablajeriaPesoneto($order = Criteria::ASC) Order by the ordentablajeria_pesoneto column
 * @method OrdentablajeriaQuery orderByOrdentablajeriaPrecioneto($order = Criteria::ASC) Order by the ordentablajeria_precioneto column
 * @method OrdentablajeriaQuery orderByOrdentablajeriaInyeccion($order = Criteria::ASC) Order by the ordentablajeria_inyeccion column
 * @method OrdentablajeriaQuery orderByOrdentablajeriaMerma($order = Criteria::ASC) Order by the ordentablajeria_merma column
 * @method OrdentablajeriaQuery orderByOrdentablajeriaPorcentajemerma($order = Criteria::ASC) Order by the ordentablajeria_porcentajemerma column
 * @method OrdentablajeriaQuery orderByOrdentablajeriaAprovechamiento($order = Criteria::ASC) Order by the ordentablajeria_aprovechamiento column
 * @method OrdentablajeriaQuery orderByOrdentablajeriaRevisada($order = Criteria::ASC) Order by the ordentablajeria_revisada column
 * @method OrdentablajeriaQuery orderByOrdentablajeriaFolio($order = Criteria::ASC) Order by the ordentablajeria_folio column
 * @method OrdentablajeriaQuery orderByOrdentablajeriaFecha($order = Criteria::ASC) Order by the ordentablajeria_fecha column
 * @method OrdentablajeriaQuery orderByOrdentablajeriaFechacreacion($order = Criteria::ASC) Order by the ordentablajeria_fechacreacion column
 * @method OrdentablajeriaQuery orderByOrdentablajeriaPesoporcion($order = Criteria::ASC) Order by the ordentablajeria_pesoporcion column
 * @method OrdentablajeriaQuery orderByNotaauditorempresa($order = Criteria::ASC) Order by the notaauditorempresa column
 * @method OrdentablajeriaQuery orderByNotaalmacenistaempresa($order = Criteria::ASC) Order by the notaalmacenistaempresa column
 * @method OrdentablajeriaQuery orderByNotaauditoraersa($order = Criteria::ASC) Order by the notaauditoraersa column
 *
 * @method OrdentablajeriaQuery groupByIdordentablajeria() Group by the idordentablajeria column
 * @method OrdentablajeriaQuery groupByIdempresa() Group by the idempresa column
 * @method OrdentablajeriaQuery groupByIdsucursal() Group by the idsucursal column
 * @method OrdentablajeriaQuery groupByIdalmacenorigen() Group by the idalmacenorigen column
 * @method OrdentablajeriaQuery groupByIdalmacendestino() Group by the idalmacendestino column
 * @method OrdentablajeriaQuery groupByIdusuario() Group by the idusuario column
 * @method OrdentablajeriaQuery groupByIdauditor() Group by the idauditor column
 * @method OrdentablajeriaQuery groupByIdproducto() Group by the idproducto column
 * @method OrdentablajeriaQuery groupByOrdentablajeriaEsporcion() Group by the ordentablajeria_esporcion column
 * @method OrdentablajeriaQuery groupByOrdentablajeriaNumeroporciones() Group by the ordentablajeria_numeroporciones column
 * @method OrdentablajeriaQuery groupByOrdentablajeriaPesobruto() Group by the ordentablajeria_pesobruto column
 * @method OrdentablajeriaQuery groupByOrdentablajeriaPreciokilo() Group by the ordentablajeria_preciokilo column
 * @method OrdentablajeriaQuery groupByOrdentablajeriaTotalbruto() Group by the ordentablajeria_totalbruto column
 * @method OrdentablajeriaQuery groupByOrdentablajeriaPesoneto() Group by the ordentablajeria_pesoneto column
 * @method OrdentablajeriaQuery groupByOrdentablajeriaPrecioneto() Group by the ordentablajeria_precioneto column
 * @method OrdentablajeriaQuery groupByOrdentablajeriaInyeccion() Group by the ordentablajeria_inyeccion column
 * @method OrdentablajeriaQuery groupByOrdentablajeriaMerma() Group by the ordentablajeria_merma column
 * @method OrdentablajeriaQuery groupByOrdentablajeriaPorcentajemerma() Group by the ordentablajeria_porcentajemerma column
 * @method OrdentablajeriaQuery groupByOrdentablajeriaAprovechamiento() Group by the ordentablajeria_aprovechamiento column
 * @method OrdentablajeriaQuery groupByOrdentablajeriaRevisada() Group by the ordentablajeria_revisada column
 * @method OrdentablajeriaQuery groupByOrdentablajeriaFolio() Group by the ordentablajeria_folio column
 * @method OrdentablajeriaQuery groupByOrdentablajeriaFecha() Group by the ordentablajeria_fecha column
 * @method OrdentablajeriaQuery groupByOrdentablajeriaFechacreacion() Group by the ordentablajeria_fechacreacion column
 * @method OrdentablajeriaQuery groupByOrdentablajeriaPesoporcion() Group by the ordentablajeria_pesoporcion column
 * @method OrdentablajeriaQuery groupByNotaauditorempresa() Group by the notaauditorempresa column
 * @method OrdentablajeriaQuery groupByNotaalmacenistaempresa() Group by the notaalmacenistaempresa column
 * @method OrdentablajeriaQuery groupByNotaauditoraersa() Group by the notaauditoraersa column
 *
 * @method OrdentablajeriaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method OrdentablajeriaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method OrdentablajeriaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method OrdentablajeriaQuery leftJoinAlmacenRelatedByIdalmacendestino($relationAlias = null) Adds a LEFT JOIN clause to the query using the AlmacenRelatedByIdalmacendestino relation
 * @method OrdentablajeriaQuery rightJoinAlmacenRelatedByIdalmacendestino($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AlmacenRelatedByIdalmacendestino relation
 * @method OrdentablajeriaQuery innerJoinAlmacenRelatedByIdalmacendestino($relationAlias = null) Adds a INNER JOIN clause to the query using the AlmacenRelatedByIdalmacendestino relation
 *
 * @method OrdentablajeriaQuery leftJoinAlmacenRelatedByIdalmacenorigen($relationAlias = null) Adds a LEFT JOIN clause to the query using the AlmacenRelatedByIdalmacenorigen relation
 * @method OrdentablajeriaQuery rightJoinAlmacenRelatedByIdalmacenorigen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AlmacenRelatedByIdalmacenorigen relation
 * @method OrdentablajeriaQuery innerJoinAlmacenRelatedByIdalmacenorigen($relationAlias = null) Adds a INNER JOIN clause to the query using the AlmacenRelatedByIdalmacenorigen relation
 *
 * @method OrdentablajeriaQuery leftJoinUsuarioRelatedByIdauditor($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioRelatedByIdauditor relation
 * @method OrdentablajeriaQuery rightJoinUsuarioRelatedByIdauditor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioRelatedByIdauditor relation
 * @method OrdentablajeriaQuery innerJoinUsuarioRelatedByIdauditor($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioRelatedByIdauditor relation
 *
 * @method OrdentablajeriaQuery leftJoinEmpresa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empresa relation
 * @method OrdentablajeriaQuery rightJoinEmpresa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empresa relation
 * @method OrdentablajeriaQuery innerJoinEmpresa($relationAlias = null) Adds a INNER JOIN clause to the query using the Empresa relation
 *
 * @method OrdentablajeriaQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method OrdentablajeriaQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method OrdentablajeriaQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method OrdentablajeriaQuery leftJoinSucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursal relation
 * @method OrdentablajeriaQuery rightJoinSucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursal relation
 * @method OrdentablajeriaQuery innerJoinSucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursal relation
 *
 * @method OrdentablajeriaQuery leftJoinUsuarioRelatedByIdusuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioRelatedByIdusuario relation
 * @method OrdentablajeriaQuery rightJoinUsuarioRelatedByIdusuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioRelatedByIdusuario relation
 * @method OrdentablajeriaQuery innerJoinUsuarioRelatedByIdusuario($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioRelatedByIdusuario relation
 *
 * @method OrdentablajeriaQuery leftJoinOrdentablajeriadetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ordentablajeriadetalle relation
 * @method OrdentablajeriaQuery rightJoinOrdentablajeriadetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ordentablajeriadetalle relation
 * @method OrdentablajeriaQuery innerJoinOrdentablajeriadetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Ordentablajeriadetalle relation
 *
 * @method OrdentablajeriaQuery leftJoinOrdentablajerianota($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ordentablajerianota relation
 * @method OrdentablajeriaQuery rightJoinOrdentablajerianota($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ordentablajerianota relation
 * @method OrdentablajeriaQuery innerJoinOrdentablajerianota($relationAlias = null) Adds a INNER JOIN clause to the query using the Ordentablajerianota relation
 *
 * @method Ordentablajeria findOne(PropelPDO $con = null) Return the first Ordentablajeria matching the query
 * @method Ordentablajeria findOneOrCreate(PropelPDO $con = null) Return the first Ordentablajeria matching the query, or a new Ordentablajeria object populated from the query conditions when no match is found
 *
 * @method Ordentablajeria findOneByIdempresa(int $idempresa) Return the first Ordentablajeria filtered by the idempresa column
 * @method Ordentablajeria findOneByIdsucursal(int $idsucursal) Return the first Ordentablajeria filtered by the idsucursal column
 * @method Ordentablajeria findOneByIdalmacenorigen(int $idalmacenorigen) Return the first Ordentablajeria filtered by the idalmacenorigen column
 * @method Ordentablajeria findOneByIdalmacendestino(int $idalmacendestino) Return the first Ordentablajeria filtered by the idalmacendestino column
 * @method Ordentablajeria findOneByIdusuario(int $idusuario) Return the first Ordentablajeria filtered by the idusuario column
 * @method Ordentablajeria findOneByIdauditor(int $idauditor) Return the first Ordentablajeria filtered by the idauditor column
 * @method Ordentablajeria findOneByIdproducto(int $idproducto) Return the first Ordentablajeria filtered by the idproducto column
 * @method Ordentablajeria findOneByOrdentablajeriaEsporcion(boolean $ordentablajeria_esporcion) Return the first Ordentablajeria filtered by the ordentablajeria_esporcion column
 * @method Ordentablajeria findOneByOrdentablajeriaNumeroporciones(double $ordentablajeria_numeroporciones) Return the first Ordentablajeria filtered by the ordentablajeria_numeroporciones column
 * @method Ordentablajeria findOneByOrdentablajeriaPesobruto(double $ordentablajeria_pesobruto) Return the first Ordentablajeria filtered by the ordentablajeria_pesobruto column
 * @method Ordentablajeria findOneByOrdentablajeriaPreciokilo(string $ordentablajeria_preciokilo) Return the first Ordentablajeria filtered by the ordentablajeria_preciokilo column
 * @method Ordentablajeria findOneByOrdentablajeriaTotalbruto(string $ordentablajeria_totalbruto) Return the first Ordentablajeria filtered by the ordentablajeria_totalbruto column
 * @method Ordentablajeria findOneByOrdentablajeriaPesoneto(double $ordentablajeria_pesoneto) Return the first Ordentablajeria filtered by the ordentablajeria_pesoneto column
 * @method Ordentablajeria findOneByOrdentablajeriaPrecioneto(string $ordentablajeria_precioneto) Return the first Ordentablajeria filtered by the ordentablajeria_precioneto column
 * @method Ordentablajeria findOneByOrdentablajeriaInyeccion(double $ordentablajeria_inyeccion) Return the first Ordentablajeria filtered by the ordentablajeria_inyeccion column
 * @method Ordentablajeria findOneByOrdentablajeriaMerma(double $ordentablajeria_merma) Return the first Ordentablajeria filtered by the ordentablajeria_merma column
 * @method Ordentablajeria findOneByOrdentablajeriaPorcentajemerma(double $ordentablajeria_porcentajemerma) Return the first Ordentablajeria filtered by the ordentablajeria_porcentajemerma column
 * @method Ordentablajeria findOneByOrdentablajeriaAprovechamiento(double $ordentablajeria_aprovechamiento) Return the first Ordentablajeria filtered by the ordentablajeria_aprovechamiento column
 * @method Ordentablajeria findOneByOrdentablajeriaRevisada(boolean $ordentablajeria_revisada) Return the first Ordentablajeria filtered by the ordentablajeria_revisada column
 * @method Ordentablajeria findOneByOrdentablajeriaFolio(string $ordentablajeria_folio) Return the first Ordentablajeria filtered by the ordentablajeria_folio column
 * @method Ordentablajeria findOneByOrdentablajeriaFecha(string $ordentablajeria_fecha) Return the first Ordentablajeria filtered by the ordentablajeria_fecha column
 * @method Ordentablajeria findOneByOrdentablajeriaFechacreacion(string $ordentablajeria_fechacreacion) Return the first Ordentablajeria filtered by the ordentablajeria_fechacreacion column
 * @method Ordentablajeria findOneByOrdentablajeriaPesoporcion(double $ordentablajeria_pesoporcion) Return the first Ordentablajeria filtered by the ordentablajeria_pesoporcion column
 * @method Ordentablajeria findOneByNotaauditorempresa(boolean $notaauditorempresa) Return the first Ordentablajeria filtered by the notaauditorempresa column
 * @method Ordentablajeria findOneByNotaalmacenistaempresa(boolean $notaalmacenistaempresa) Return the first Ordentablajeria filtered by the notaalmacenistaempresa column
 * @method Ordentablajeria findOneByNotaauditoraersa(boolean $notaauditoraersa) Return the first Ordentablajeria filtered by the notaauditoraersa column
 *
 * @method array findByIdordentablajeria(int $idordentablajeria) Return Ordentablajeria objects filtered by the idordentablajeria column
 * @method array findByIdempresa(int $idempresa) Return Ordentablajeria objects filtered by the idempresa column
 * @method array findByIdsucursal(int $idsucursal) Return Ordentablajeria objects filtered by the idsucursal column
 * @method array findByIdalmacenorigen(int $idalmacenorigen) Return Ordentablajeria objects filtered by the idalmacenorigen column
 * @method array findByIdalmacendestino(int $idalmacendestino) Return Ordentablajeria objects filtered by the idalmacendestino column
 * @method array findByIdusuario(int $idusuario) Return Ordentablajeria objects filtered by the idusuario column
 * @method array findByIdauditor(int $idauditor) Return Ordentablajeria objects filtered by the idauditor column
 * @method array findByIdproducto(int $idproducto) Return Ordentablajeria objects filtered by the idproducto column
 * @method array findByOrdentablajeriaEsporcion(boolean $ordentablajeria_esporcion) Return Ordentablajeria objects filtered by the ordentablajeria_esporcion column
 * @method array findByOrdentablajeriaNumeroporciones(double $ordentablajeria_numeroporciones) Return Ordentablajeria objects filtered by the ordentablajeria_numeroporciones column
 * @method array findByOrdentablajeriaPesobruto(double $ordentablajeria_pesobruto) Return Ordentablajeria objects filtered by the ordentablajeria_pesobruto column
 * @method array findByOrdentablajeriaPreciokilo(string $ordentablajeria_preciokilo) Return Ordentablajeria objects filtered by the ordentablajeria_preciokilo column
 * @method array findByOrdentablajeriaTotalbruto(string $ordentablajeria_totalbruto) Return Ordentablajeria objects filtered by the ordentablajeria_totalbruto column
 * @method array findByOrdentablajeriaPesoneto(double $ordentablajeria_pesoneto) Return Ordentablajeria objects filtered by the ordentablajeria_pesoneto column
 * @method array findByOrdentablajeriaPrecioneto(string $ordentablajeria_precioneto) Return Ordentablajeria objects filtered by the ordentablajeria_precioneto column
 * @method array findByOrdentablajeriaInyeccion(double $ordentablajeria_inyeccion) Return Ordentablajeria objects filtered by the ordentablajeria_inyeccion column
 * @method array findByOrdentablajeriaMerma(double $ordentablajeria_merma) Return Ordentablajeria objects filtered by the ordentablajeria_merma column
 * @method array findByOrdentablajeriaPorcentajemerma(double $ordentablajeria_porcentajemerma) Return Ordentablajeria objects filtered by the ordentablajeria_porcentajemerma column
 * @method array findByOrdentablajeriaAprovechamiento(double $ordentablajeria_aprovechamiento) Return Ordentablajeria objects filtered by the ordentablajeria_aprovechamiento column
 * @method array findByOrdentablajeriaRevisada(boolean $ordentablajeria_revisada) Return Ordentablajeria objects filtered by the ordentablajeria_revisada column
 * @method array findByOrdentablajeriaFolio(string $ordentablajeria_folio) Return Ordentablajeria objects filtered by the ordentablajeria_folio column
 * @method array findByOrdentablajeriaFecha(string $ordentablajeria_fecha) Return Ordentablajeria objects filtered by the ordentablajeria_fecha column
 * @method array findByOrdentablajeriaFechacreacion(string $ordentablajeria_fechacreacion) Return Ordentablajeria objects filtered by the ordentablajeria_fechacreacion column
 * @method array findByOrdentablajeriaPesoporcion(double $ordentablajeria_pesoporcion) Return Ordentablajeria objects filtered by the ordentablajeria_pesoporcion column
 * @method array findByNotaauditorempresa(boolean $notaauditorempresa) Return Ordentablajeria objects filtered by the notaauditorempresa column
 * @method array findByNotaalmacenistaempresa(boolean $notaalmacenistaempresa) Return Ordentablajeria objects filtered by the notaalmacenistaempresa column
 * @method array findByNotaauditoraersa(boolean $notaauditoraersa) Return Ordentablajeria objects filtered by the notaauditoraersa column
 *
 * @package    propel.generator.aersa.om
 */
abstract class BaseOrdentablajeriaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseOrdentablajeriaQuery object.
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
            $modelName = 'Ordentablajeria';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OrdentablajeriaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   OrdentablajeriaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return OrdentablajeriaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OrdentablajeriaQuery) {
            return $criteria;
        }
        $query = new OrdentablajeriaQuery(null, null, $modelAlias);

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
     * @return   Ordentablajeria|Ordentablajeria[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = OrdentablajeriaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(OrdentablajeriaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Ordentablajeria A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdordentablajeria($key, $con = null)
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
     * @return                 Ordentablajeria A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idordentablajeria`, `idempresa`, `idsucursal`, `idalmacenorigen`, `idalmacendestino`, `idusuario`, `idauditor`, `idproducto`, `ordentablajeria_esporcion`, `ordentablajeria_numeroporciones`, `ordentablajeria_pesobruto`, `ordentablajeria_preciokilo`, `ordentablajeria_totalbruto`, `ordentablajeria_pesoneto`, `ordentablajeria_precioneto`, `ordentablajeria_inyeccion`, `ordentablajeria_merma`, `ordentablajeria_porcentajemerma`, `ordentablajeria_aprovechamiento`, `ordentablajeria_revisada`, `ordentablajeria_folio`, `ordentablajeria_fecha`, `ordentablajeria_fechacreacion`, `ordentablajeria_pesoporcion`, `notaauditorempresa`, `notaalmacenistaempresa`, `notaauditoraersa` FROM `ordentablajeria` WHERE `idordentablajeria` = :p0';
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
            $obj = new Ordentablajeria();
            $obj->hydrate($row);
            OrdentablajeriaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Ordentablajeria|Ordentablajeria[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Ordentablajeria[]|mixed the list of results, formatted by the current formatter
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
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(OrdentablajeriaPeer::IDORDENTABLAJERIA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(OrdentablajeriaPeer::IDORDENTABLAJERIA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idordentablajeria column
     *
     * Example usage:
     * <code>
     * $query->filterByIdordentablajeria(1234); // WHERE idordentablajeria = 1234
     * $query->filterByIdordentablajeria(array(12, 34)); // WHERE idordentablajeria IN (12, 34)
     * $query->filterByIdordentablajeria(array('min' => 12)); // WHERE idordentablajeria >= 12
     * $query->filterByIdordentablajeria(array('max' => 12)); // WHERE idordentablajeria <= 12
     * </code>
     *
     * @param     mixed $idordentablajeria The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function filterByIdordentablajeria($idordentablajeria = null, $comparison = null)
    {
        if (is_array($idordentablajeria)) {
            $useMinMax = false;
            if (isset($idordentablajeria['min'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::IDORDENTABLAJERIA, $idordentablajeria['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idordentablajeria['max'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::IDORDENTABLAJERIA, $idordentablajeria['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriaPeer::IDORDENTABLAJERIA, $idordentablajeria, $comparison);
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
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function filterByIdempresa($idempresa = null, $comparison = null)
    {
        if (is_array($idempresa)) {
            $useMinMax = false;
            if (isset($idempresa['min'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::IDEMPRESA, $idempresa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempresa['max'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::IDEMPRESA, $idempresa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriaPeer::IDEMPRESA, $idempresa, $comparison);
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
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriaPeer::IDSUCURSAL, $idsucursal, $comparison);
    }

    /**
     * Filter the query on the idalmacenorigen column
     *
     * Example usage:
     * <code>
     * $query->filterByIdalmacenorigen(1234); // WHERE idalmacenorigen = 1234
     * $query->filterByIdalmacenorigen(array(12, 34)); // WHERE idalmacenorigen IN (12, 34)
     * $query->filterByIdalmacenorigen(array('min' => 12)); // WHERE idalmacenorigen >= 12
     * $query->filterByIdalmacenorigen(array('max' => 12)); // WHERE idalmacenorigen <= 12
     * </code>
     *
     * @see       filterByAlmacenRelatedByIdalmacenorigen()
     *
     * @param     mixed $idalmacenorigen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function filterByIdalmacenorigen($idalmacenorigen = null, $comparison = null)
    {
        if (is_array($idalmacenorigen)) {
            $useMinMax = false;
            if (isset($idalmacenorigen['min'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::IDALMACENORIGEN, $idalmacenorigen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idalmacenorigen['max'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::IDALMACENORIGEN, $idalmacenorigen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriaPeer::IDALMACENORIGEN, $idalmacenorigen, $comparison);
    }

    /**
     * Filter the query on the idalmacendestino column
     *
     * Example usage:
     * <code>
     * $query->filterByIdalmacendestino(1234); // WHERE idalmacendestino = 1234
     * $query->filterByIdalmacendestino(array(12, 34)); // WHERE idalmacendestino IN (12, 34)
     * $query->filterByIdalmacendestino(array('min' => 12)); // WHERE idalmacendestino >= 12
     * $query->filterByIdalmacendestino(array('max' => 12)); // WHERE idalmacendestino <= 12
     * </code>
     *
     * @see       filterByAlmacenRelatedByIdalmacendestino()
     *
     * @param     mixed $idalmacendestino The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function filterByIdalmacendestino($idalmacendestino = null, $comparison = null)
    {
        if (is_array($idalmacendestino)) {
            $useMinMax = false;
            if (isset($idalmacendestino['min'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::IDALMACENDESTINO, $idalmacendestino['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idalmacendestino['max'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::IDALMACENDESTINO, $idalmacendestino['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriaPeer::IDALMACENDESTINO, $idalmacendestino, $comparison);
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
     * @see       filterByUsuarioRelatedByIdusuario()
     *
     * @param     mixed $idusuario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function filterByIdusuario($idusuario = null, $comparison = null)
    {
        if (is_array($idusuario)) {
            $useMinMax = false;
            if (isset($idusuario['min'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::IDUSUARIO, $idusuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idusuario['max'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::IDUSUARIO, $idusuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriaPeer::IDUSUARIO, $idusuario, $comparison);
    }

    /**
     * Filter the query on the idauditor column
     *
     * Example usage:
     * <code>
     * $query->filterByIdauditor(1234); // WHERE idauditor = 1234
     * $query->filterByIdauditor(array(12, 34)); // WHERE idauditor IN (12, 34)
     * $query->filterByIdauditor(array('min' => 12)); // WHERE idauditor >= 12
     * $query->filterByIdauditor(array('max' => 12)); // WHERE idauditor <= 12
     * </code>
     *
     * @see       filterByUsuarioRelatedByIdauditor()
     *
     * @param     mixed $idauditor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function filterByIdauditor($idauditor = null, $comparison = null)
    {
        if (is_array($idauditor)) {
            $useMinMax = false;
            if (isset($idauditor['min'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::IDAUDITOR, $idauditor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idauditor['max'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::IDAUDITOR, $idauditor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriaPeer::IDAUDITOR, $idauditor, $comparison);
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
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function filterByIdproducto($idproducto = null, $comparison = null)
    {
        if (is_array($idproducto)) {
            $useMinMax = false;
            if (isset($idproducto['min'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::IDPRODUCTO, $idproducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproducto['max'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::IDPRODUCTO, $idproducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriaPeer::IDPRODUCTO, $idproducto, $comparison);
    }

    /**
     * Filter the query on the ordentablajeria_esporcion column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdentablajeriaEsporcion(true); // WHERE ordentablajeria_esporcion = true
     * $query->filterByOrdentablajeriaEsporcion('yes'); // WHERE ordentablajeria_esporcion = true
     * </code>
     *
     * @param     boolean|string $ordentablajeriaEsporcion The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function filterByOrdentablajeriaEsporcion($ordentablajeriaEsporcion = null, $comparison = null)
    {
        if (is_string($ordentablajeriaEsporcion)) {
            $ordentablajeriaEsporcion = in_array(strtolower($ordentablajeriaEsporcion), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_ESPORCION, $ordentablajeriaEsporcion, $comparison);
    }

    /**
     * Filter the query on the ordentablajeria_numeroporciones column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdentablajeriaNumeroporciones(1234); // WHERE ordentablajeria_numeroporciones = 1234
     * $query->filterByOrdentablajeriaNumeroporciones(array(12, 34)); // WHERE ordentablajeria_numeroporciones IN (12, 34)
     * $query->filterByOrdentablajeriaNumeroporciones(array('min' => 12)); // WHERE ordentablajeria_numeroporciones >= 12
     * $query->filterByOrdentablajeriaNumeroporciones(array('max' => 12)); // WHERE ordentablajeria_numeroporciones <= 12
     * </code>
     *
     * @param     mixed $ordentablajeriaNumeroporciones The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function filterByOrdentablajeriaNumeroporciones($ordentablajeriaNumeroporciones = null, $comparison = null)
    {
        if (is_array($ordentablajeriaNumeroporciones)) {
            $useMinMax = false;
            if (isset($ordentablajeriaNumeroporciones['min'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_NUMEROPORCIONES, $ordentablajeriaNumeroporciones['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordentablajeriaNumeroporciones['max'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_NUMEROPORCIONES, $ordentablajeriaNumeroporciones['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_NUMEROPORCIONES, $ordentablajeriaNumeroporciones, $comparison);
    }

    /**
     * Filter the query on the ordentablajeria_pesobruto column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdentablajeriaPesobruto(1234); // WHERE ordentablajeria_pesobruto = 1234
     * $query->filterByOrdentablajeriaPesobruto(array(12, 34)); // WHERE ordentablajeria_pesobruto IN (12, 34)
     * $query->filterByOrdentablajeriaPesobruto(array('min' => 12)); // WHERE ordentablajeria_pesobruto >= 12
     * $query->filterByOrdentablajeriaPesobruto(array('max' => 12)); // WHERE ordentablajeria_pesobruto <= 12
     * </code>
     *
     * @param     mixed $ordentablajeriaPesobruto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function filterByOrdentablajeriaPesobruto($ordentablajeriaPesobruto = null, $comparison = null)
    {
        if (is_array($ordentablajeriaPesobruto)) {
            $useMinMax = false;
            if (isset($ordentablajeriaPesobruto['min'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_PESOBRUTO, $ordentablajeriaPesobruto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordentablajeriaPesobruto['max'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_PESOBRUTO, $ordentablajeriaPesobruto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_PESOBRUTO, $ordentablajeriaPesobruto, $comparison);
    }

    /**
     * Filter the query on the ordentablajeria_preciokilo column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdentablajeriaPreciokilo(1234); // WHERE ordentablajeria_preciokilo = 1234
     * $query->filterByOrdentablajeriaPreciokilo(array(12, 34)); // WHERE ordentablajeria_preciokilo IN (12, 34)
     * $query->filterByOrdentablajeriaPreciokilo(array('min' => 12)); // WHERE ordentablajeria_preciokilo >= 12
     * $query->filterByOrdentablajeriaPreciokilo(array('max' => 12)); // WHERE ordentablajeria_preciokilo <= 12
     * </code>
     *
     * @param     mixed $ordentablajeriaPreciokilo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function filterByOrdentablajeriaPreciokilo($ordentablajeriaPreciokilo = null, $comparison = null)
    {
        if (is_array($ordentablajeriaPreciokilo)) {
            $useMinMax = false;
            if (isset($ordentablajeriaPreciokilo['min'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_PRECIOKILO, $ordentablajeriaPreciokilo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordentablajeriaPreciokilo['max'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_PRECIOKILO, $ordentablajeriaPreciokilo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_PRECIOKILO, $ordentablajeriaPreciokilo, $comparison);
    }

    /**
     * Filter the query on the ordentablajeria_totalbruto column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdentablajeriaTotalbruto(1234); // WHERE ordentablajeria_totalbruto = 1234
     * $query->filterByOrdentablajeriaTotalbruto(array(12, 34)); // WHERE ordentablajeria_totalbruto IN (12, 34)
     * $query->filterByOrdentablajeriaTotalbruto(array('min' => 12)); // WHERE ordentablajeria_totalbruto >= 12
     * $query->filterByOrdentablajeriaTotalbruto(array('max' => 12)); // WHERE ordentablajeria_totalbruto <= 12
     * </code>
     *
     * @param     mixed $ordentablajeriaTotalbruto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function filterByOrdentablajeriaTotalbruto($ordentablajeriaTotalbruto = null, $comparison = null)
    {
        if (is_array($ordentablajeriaTotalbruto)) {
            $useMinMax = false;
            if (isset($ordentablajeriaTotalbruto['min'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_TOTALBRUTO, $ordentablajeriaTotalbruto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordentablajeriaTotalbruto['max'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_TOTALBRUTO, $ordentablajeriaTotalbruto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_TOTALBRUTO, $ordentablajeriaTotalbruto, $comparison);
    }

    /**
     * Filter the query on the ordentablajeria_pesoneto column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdentablajeriaPesoneto(1234); // WHERE ordentablajeria_pesoneto = 1234
     * $query->filterByOrdentablajeriaPesoneto(array(12, 34)); // WHERE ordentablajeria_pesoneto IN (12, 34)
     * $query->filterByOrdentablajeriaPesoneto(array('min' => 12)); // WHERE ordentablajeria_pesoneto >= 12
     * $query->filterByOrdentablajeriaPesoneto(array('max' => 12)); // WHERE ordentablajeria_pesoneto <= 12
     * </code>
     *
     * @param     mixed $ordentablajeriaPesoneto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function filterByOrdentablajeriaPesoneto($ordentablajeriaPesoneto = null, $comparison = null)
    {
        if (is_array($ordentablajeriaPesoneto)) {
            $useMinMax = false;
            if (isset($ordentablajeriaPesoneto['min'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_PESONETO, $ordentablajeriaPesoneto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordentablajeriaPesoneto['max'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_PESONETO, $ordentablajeriaPesoneto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_PESONETO, $ordentablajeriaPesoneto, $comparison);
    }

    /**
     * Filter the query on the ordentablajeria_precioneto column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdentablajeriaPrecioneto(1234); // WHERE ordentablajeria_precioneto = 1234
     * $query->filterByOrdentablajeriaPrecioneto(array(12, 34)); // WHERE ordentablajeria_precioneto IN (12, 34)
     * $query->filterByOrdentablajeriaPrecioneto(array('min' => 12)); // WHERE ordentablajeria_precioneto >= 12
     * $query->filterByOrdentablajeriaPrecioneto(array('max' => 12)); // WHERE ordentablajeria_precioneto <= 12
     * </code>
     *
     * @param     mixed $ordentablajeriaPrecioneto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function filterByOrdentablajeriaPrecioneto($ordentablajeriaPrecioneto = null, $comparison = null)
    {
        if (is_array($ordentablajeriaPrecioneto)) {
            $useMinMax = false;
            if (isset($ordentablajeriaPrecioneto['min'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_PRECIONETO, $ordentablajeriaPrecioneto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordentablajeriaPrecioneto['max'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_PRECIONETO, $ordentablajeriaPrecioneto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_PRECIONETO, $ordentablajeriaPrecioneto, $comparison);
    }

    /**
     * Filter the query on the ordentablajeria_inyeccion column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdentablajeriaInyeccion(1234); // WHERE ordentablajeria_inyeccion = 1234
     * $query->filterByOrdentablajeriaInyeccion(array(12, 34)); // WHERE ordentablajeria_inyeccion IN (12, 34)
     * $query->filterByOrdentablajeriaInyeccion(array('min' => 12)); // WHERE ordentablajeria_inyeccion >= 12
     * $query->filterByOrdentablajeriaInyeccion(array('max' => 12)); // WHERE ordentablajeria_inyeccion <= 12
     * </code>
     *
     * @param     mixed $ordentablajeriaInyeccion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function filterByOrdentablajeriaInyeccion($ordentablajeriaInyeccion = null, $comparison = null)
    {
        if (is_array($ordentablajeriaInyeccion)) {
            $useMinMax = false;
            if (isset($ordentablajeriaInyeccion['min'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_INYECCION, $ordentablajeriaInyeccion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordentablajeriaInyeccion['max'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_INYECCION, $ordentablajeriaInyeccion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_INYECCION, $ordentablajeriaInyeccion, $comparison);
    }

    /**
     * Filter the query on the ordentablajeria_merma column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdentablajeriaMerma(1234); // WHERE ordentablajeria_merma = 1234
     * $query->filterByOrdentablajeriaMerma(array(12, 34)); // WHERE ordentablajeria_merma IN (12, 34)
     * $query->filterByOrdentablajeriaMerma(array('min' => 12)); // WHERE ordentablajeria_merma >= 12
     * $query->filterByOrdentablajeriaMerma(array('max' => 12)); // WHERE ordentablajeria_merma <= 12
     * </code>
     *
     * @param     mixed $ordentablajeriaMerma The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function filterByOrdentablajeriaMerma($ordentablajeriaMerma = null, $comparison = null)
    {
        if (is_array($ordentablajeriaMerma)) {
            $useMinMax = false;
            if (isset($ordentablajeriaMerma['min'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_MERMA, $ordentablajeriaMerma['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordentablajeriaMerma['max'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_MERMA, $ordentablajeriaMerma['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_MERMA, $ordentablajeriaMerma, $comparison);
    }

    /**
     * Filter the query on the ordentablajeria_porcentajemerma column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdentablajeriaPorcentajemerma(1234); // WHERE ordentablajeria_porcentajemerma = 1234
     * $query->filterByOrdentablajeriaPorcentajemerma(array(12, 34)); // WHERE ordentablajeria_porcentajemerma IN (12, 34)
     * $query->filterByOrdentablajeriaPorcentajemerma(array('min' => 12)); // WHERE ordentablajeria_porcentajemerma >= 12
     * $query->filterByOrdentablajeriaPorcentajemerma(array('max' => 12)); // WHERE ordentablajeria_porcentajemerma <= 12
     * </code>
     *
     * @param     mixed $ordentablajeriaPorcentajemerma The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function filterByOrdentablajeriaPorcentajemerma($ordentablajeriaPorcentajemerma = null, $comparison = null)
    {
        if (is_array($ordentablajeriaPorcentajemerma)) {
            $useMinMax = false;
            if (isset($ordentablajeriaPorcentajemerma['min'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_PORCENTAJEMERMA, $ordentablajeriaPorcentajemerma['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordentablajeriaPorcentajemerma['max'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_PORCENTAJEMERMA, $ordentablajeriaPorcentajemerma['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_PORCENTAJEMERMA, $ordentablajeriaPorcentajemerma, $comparison);
    }

    /**
     * Filter the query on the ordentablajeria_aprovechamiento column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdentablajeriaAprovechamiento(1234); // WHERE ordentablajeria_aprovechamiento = 1234
     * $query->filterByOrdentablajeriaAprovechamiento(array(12, 34)); // WHERE ordentablajeria_aprovechamiento IN (12, 34)
     * $query->filterByOrdentablajeriaAprovechamiento(array('min' => 12)); // WHERE ordentablajeria_aprovechamiento >= 12
     * $query->filterByOrdentablajeriaAprovechamiento(array('max' => 12)); // WHERE ordentablajeria_aprovechamiento <= 12
     * </code>
     *
     * @param     mixed $ordentablajeriaAprovechamiento The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function filterByOrdentablajeriaAprovechamiento($ordentablajeriaAprovechamiento = null, $comparison = null)
    {
        if (is_array($ordentablajeriaAprovechamiento)) {
            $useMinMax = false;
            if (isset($ordentablajeriaAprovechamiento['min'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_APROVECHAMIENTO, $ordentablajeriaAprovechamiento['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordentablajeriaAprovechamiento['max'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_APROVECHAMIENTO, $ordentablajeriaAprovechamiento['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_APROVECHAMIENTO, $ordentablajeriaAprovechamiento, $comparison);
    }

    /**
     * Filter the query on the ordentablajeria_revisada column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdentablajeriaRevisada(true); // WHERE ordentablajeria_revisada = true
     * $query->filterByOrdentablajeriaRevisada('yes'); // WHERE ordentablajeria_revisada = true
     * </code>
     *
     * @param     boolean|string $ordentablajeriaRevisada The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function filterByOrdentablajeriaRevisada($ordentablajeriaRevisada = null, $comparison = null)
    {
        if (is_string($ordentablajeriaRevisada)) {
            $ordentablajeriaRevisada = in_array(strtolower($ordentablajeriaRevisada), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_REVISADA, $ordentablajeriaRevisada, $comparison);
    }

    /**
     * Filter the query on the ordentablajeria_folio column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdentablajeriaFolio('fooValue');   // WHERE ordentablajeria_folio = 'fooValue'
     * $query->filterByOrdentablajeriaFolio('%fooValue%'); // WHERE ordentablajeria_folio LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ordentablajeriaFolio The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function filterByOrdentablajeriaFolio($ordentablajeriaFolio = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ordentablajeriaFolio)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ordentablajeriaFolio)) {
                $ordentablajeriaFolio = str_replace('*', '%', $ordentablajeriaFolio);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_FOLIO, $ordentablajeriaFolio, $comparison);
    }

    /**
     * Filter the query on the ordentablajeria_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdentablajeriaFecha('2011-03-14'); // WHERE ordentablajeria_fecha = '2011-03-14'
     * $query->filterByOrdentablajeriaFecha('now'); // WHERE ordentablajeria_fecha = '2011-03-14'
     * $query->filterByOrdentablajeriaFecha(array('max' => 'yesterday')); // WHERE ordentablajeria_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $ordentablajeriaFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function filterByOrdentablajeriaFecha($ordentablajeriaFecha = null, $comparison = null)
    {
        if (is_array($ordentablajeriaFecha)) {
            $useMinMax = false;
            if (isset($ordentablajeriaFecha['min'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_FECHA, $ordentablajeriaFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordentablajeriaFecha['max'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_FECHA, $ordentablajeriaFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_FECHA, $ordentablajeriaFecha, $comparison);
    }

    /**
     * Filter the query on the ordentablajeria_fechacreacion column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdentablajeriaFechacreacion('2011-03-14'); // WHERE ordentablajeria_fechacreacion = '2011-03-14'
     * $query->filterByOrdentablajeriaFechacreacion('now'); // WHERE ordentablajeria_fechacreacion = '2011-03-14'
     * $query->filterByOrdentablajeriaFechacreacion(array('max' => 'yesterday')); // WHERE ordentablajeria_fechacreacion < '2011-03-13'
     * </code>
     *
     * @param     mixed $ordentablajeriaFechacreacion The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function filterByOrdentablajeriaFechacreacion($ordentablajeriaFechacreacion = null, $comparison = null)
    {
        if (is_array($ordentablajeriaFechacreacion)) {
            $useMinMax = false;
            if (isset($ordentablajeriaFechacreacion['min'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_FECHACREACION, $ordentablajeriaFechacreacion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordentablajeriaFechacreacion['max'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_FECHACREACION, $ordentablajeriaFechacreacion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_FECHACREACION, $ordentablajeriaFechacreacion, $comparison);
    }

    /**
     * Filter the query on the ordentablajeria_pesoporcion column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdentablajeriaPesoporcion(1234); // WHERE ordentablajeria_pesoporcion = 1234
     * $query->filterByOrdentablajeriaPesoporcion(array(12, 34)); // WHERE ordentablajeria_pesoporcion IN (12, 34)
     * $query->filterByOrdentablajeriaPesoporcion(array('min' => 12)); // WHERE ordentablajeria_pesoporcion >= 12
     * $query->filterByOrdentablajeriaPesoporcion(array('max' => 12)); // WHERE ordentablajeria_pesoporcion <= 12
     * </code>
     *
     * @param     mixed $ordentablajeriaPesoporcion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function filterByOrdentablajeriaPesoporcion($ordentablajeriaPesoporcion = null, $comparison = null)
    {
        if (is_array($ordentablajeriaPesoporcion)) {
            $useMinMax = false;
            if (isset($ordentablajeriaPesoporcion['min'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_PESOPORCION, $ordentablajeriaPesoporcion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordentablajeriaPesoporcion['max'])) {
                $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_PESOPORCION, $ordentablajeriaPesoporcion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrdentablajeriaPeer::ORDENTABLAJERIA_PESOPORCION, $ordentablajeriaPesoporcion, $comparison);
    }

    /**
     * Filter the query on the notaauditorempresa column
     *
     * Example usage:
     * <code>
     * $query->filterByNotaauditorempresa(true); // WHERE notaauditorempresa = true
     * $query->filterByNotaauditorempresa('yes'); // WHERE notaauditorempresa = true
     * </code>
     *
     * @param     boolean|string $notaauditorempresa The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function filterByNotaauditorempresa($notaauditorempresa = null, $comparison = null)
    {
        if (is_string($notaauditorempresa)) {
            $notaauditorempresa = in_array(strtolower($notaauditorempresa), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(OrdentablajeriaPeer::NOTAAUDITOREMPRESA, $notaauditorempresa, $comparison);
    }

    /**
     * Filter the query on the notaalmacenistaempresa column
     *
     * Example usage:
     * <code>
     * $query->filterByNotaalmacenistaempresa(true); // WHERE notaalmacenistaempresa = true
     * $query->filterByNotaalmacenistaempresa('yes'); // WHERE notaalmacenistaempresa = true
     * </code>
     *
     * @param     boolean|string $notaalmacenistaempresa The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function filterByNotaalmacenistaempresa($notaalmacenistaempresa = null, $comparison = null)
    {
        if (is_string($notaalmacenistaempresa)) {
            $notaalmacenistaempresa = in_array(strtolower($notaalmacenistaempresa), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(OrdentablajeriaPeer::NOTAALMACENISTAEMPRESA, $notaalmacenistaempresa, $comparison);
    }

    /**
     * Filter the query on the notaauditoraersa column
     *
     * Example usage:
     * <code>
     * $query->filterByNotaauditoraersa(true); // WHERE notaauditoraersa = true
     * $query->filterByNotaauditoraersa('yes'); // WHERE notaauditoraersa = true
     * </code>
     *
     * @param     boolean|string $notaauditoraersa The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function filterByNotaauditoraersa($notaauditoraersa = null, $comparison = null)
    {
        if (is_string($notaauditoraersa)) {
            $notaauditoraersa = in_array(strtolower($notaauditoraersa), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(OrdentablajeriaPeer::NOTAAUDITORAERSA, $notaauditoraersa, $comparison);
    }

    /**
     * Filter the query by a related Almacen object
     *
     * @param   Almacen|PropelObjectCollection $almacen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OrdentablajeriaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAlmacenRelatedByIdalmacendestino($almacen, $comparison = null)
    {
        if ($almacen instanceof Almacen) {
            return $this
                ->addUsingAlias(OrdentablajeriaPeer::IDALMACENDESTINO, $almacen->getIdalmacen(), $comparison);
        } elseif ($almacen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OrdentablajeriaPeer::IDALMACENDESTINO, $almacen->toKeyValue('PrimaryKey', 'Idalmacen'), $comparison);
        } else {
            throw new PropelException('filterByAlmacenRelatedByIdalmacendestino() only accepts arguments of type Almacen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the AlmacenRelatedByIdalmacendestino relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function joinAlmacenRelatedByIdalmacendestino($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('AlmacenRelatedByIdalmacendestino');

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
            $this->addJoinObject($join, 'AlmacenRelatedByIdalmacendestino');
        }

        return $this;
    }

    /**
     * Use the AlmacenRelatedByIdalmacendestino relation Almacen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AlmacenQuery A secondary query class using the current class as primary query
     */
    public function useAlmacenRelatedByIdalmacendestinoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAlmacenRelatedByIdalmacendestino($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'AlmacenRelatedByIdalmacendestino', 'AlmacenQuery');
    }

    /**
     * Filter the query by a related Almacen object
     *
     * @param   Almacen|PropelObjectCollection $almacen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OrdentablajeriaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAlmacenRelatedByIdalmacenorigen($almacen, $comparison = null)
    {
        if ($almacen instanceof Almacen) {
            return $this
                ->addUsingAlias(OrdentablajeriaPeer::IDALMACENORIGEN, $almacen->getIdalmacen(), $comparison);
        } elseif ($almacen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OrdentablajeriaPeer::IDALMACENORIGEN, $almacen->toKeyValue('PrimaryKey', 'Idalmacen'), $comparison);
        } else {
            throw new PropelException('filterByAlmacenRelatedByIdalmacenorigen() only accepts arguments of type Almacen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the AlmacenRelatedByIdalmacenorigen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function joinAlmacenRelatedByIdalmacenorigen($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('AlmacenRelatedByIdalmacenorigen');

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
            $this->addJoinObject($join, 'AlmacenRelatedByIdalmacenorigen');
        }

        return $this;
    }

    /**
     * Use the AlmacenRelatedByIdalmacenorigen relation Almacen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AlmacenQuery A secondary query class using the current class as primary query
     */
    public function useAlmacenRelatedByIdalmacenorigenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAlmacenRelatedByIdalmacenorigen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'AlmacenRelatedByIdalmacenorigen', 'AlmacenQuery');
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OrdentablajeriaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuarioRelatedByIdauditor($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(OrdentablajeriaPeer::IDAUDITOR, $usuario->getIdusuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OrdentablajeriaPeer::IDAUDITOR, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
        } else {
            throw new PropelException('filterByUsuarioRelatedByIdauditor() only accepts arguments of type Usuario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UsuarioRelatedByIdauditor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function joinUsuarioRelatedByIdauditor($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UsuarioRelatedByIdauditor');

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
            $this->addJoinObject($join, 'UsuarioRelatedByIdauditor');
        }

        return $this;
    }

    /**
     * Use the UsuarioRelatedByIdauditor relation Usuario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuarioQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioRelatedByIdauditorQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinUsuarioRelatedByIdauditor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UsuarioRelatedByIdauditor', 'UsuarioQuery');
    }

    /**
     * Filter the query by a related Empresa object
     *
     * @param   Empresa|PropelObjectCollection $empresa The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OrdentablajeriaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpresa($empresa, $comparison = null)
    {
        if ($empresa instanceof Empresa) {
            return $this
                ->addUsingAlias(OrdentablajeriaPeer::IDEMPRESA, $empresa->getIdempresa(), $comparison);
        } elseif ($empresa instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OrdentablajeriaPeer::IDEMPRESA, $empresa->toKeyValue('PrimaryKey', 'Idempresa'), $comparison);
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
     * @return OrdentablajeriaQuery The current query, for fluid interface
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
     * @return                 OrdentablajeriaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(OrdentablajeriaPeer::IDPRODUCTO, $producto->getIdproducto(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OrdentablajeriaPeer::IDPRODUCTO, $producto->toKeyValue('PrimaryKey', 'Idproducto'), $comparison);
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
     * @return OrdentablajeriaQuery The current query, for fluid interface
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
     * @return                 OrdentablajeriaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursal($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(OrdentablajeriaPeer::IDSUCURSAL, $sucursal->getIdsucursal(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OrdentablajeriaPeer::IDSUCURSAL, $sucursal->toKeyValue('PrimaryKey', 'Idsucursal'), $comparison);
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
     * @return OrdentablajeriaQuery The current query, for fluid interface
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
     * @return                 OrdentablajeriaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuarioRelatedByIdusuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(OrdentablajeriaPeer::IDUSUARIO, $usuario->getIdusuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OrdentablajeriaPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'Idusuario'), $comparison);
        } else {
            throw new PropelException('filterByUsuarioRelatedByIdusuario() only accepts arguments of type Usuario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UsuarioRelatedByIdusuario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function joinUsuarioRelatedByIdusuario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UsuarioRelatedByIdusuario');

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
            $this->addJoinObject($join, 'UsuarioRelatedByIdusuario');
        }

        return $this;
    }

    /**
     * Use the UsuarioRelatedByIdusuario relation Usuario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuarioQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioRelatedByIdusuarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUsuarioRelatedByIdusuario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UsuarioRelatedByIdusuario', 'UsuarioQuery');
    }

    /**
     * Filter the query by a related Ordentablajeriadetalle object
     *
     * @param   Ordentablajeriadetalle|PropelObjectCollection $ordentablajeriadetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OrdentablajeriaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOrdentablajeriadetalle($ordentablajeriadetalle, $comparison = null)
    {
        if ($ordentablajeriadetalle instanceof Ordentablajeriadetalle) {
            return $this
                ->addUsingAlias(OrdentablajeriaPeer::IDORDENTABLAJERIA, $ordentablajeriadetalle->getIdordentablajeria(), $comparison);
        } elseif ($ordentablajeriadetalle instanceof PropelObjectCollection) {
            return $this
                ->useOrdentablajeriadetalleQuery()
                ->filterByPrimaryKeys($ordentablajeriadetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOrdentablajeriadetalle() only accepts arguments of type Ordentablajeriadetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Ordentablajeriadetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function joinOrdentablajeriadetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Ordentablajeriadetalle');

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
            $this->addJoinObject($join, 'Ordentablajeriadetalle');
        }

        return $this;
    }

    /**
     * Use the Ordentablajeriadetalle relation Ordentablajeriadetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OrdentablajeriadetalleQuery A secondary query class using the current class as primary query
     */
    public function useOrdentablajeriadetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOrdentablajeriadetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ordentablajeriadetalle', 'OrdentablajeriadetalleQuery');
    }

    /**
     * Filter the query by a related Ordentablajerianota object
     *
     * @param   Ordentablajerianota|PropelObjectCollection $ordentablajerianota  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OrdentablajeriaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOrdentablajerianota($ordentablajerianota, $comparison = null)
    {
        if ($ordentablajerianota instanceof Ordentablajerianota) {
            return $this
                ->addUsingAlias(OrdentablajeriaPeer::IDORDENTABLAJERIA, $ordentablajerianota->getIdordentablajeria(), $comparison);
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
     * @return OrdentablajeriaQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   Ordentablajeria $ordentablajeria Object to remove from the list of results
     *
     * @return OrdentablajeriaQuery The current query, for fluid interface
     */
    public function prune($ordentablajeria = null)
    {
        if ($ordentablajeria) {
            $this->addUsingAlias(OrdentablajeriaPeer::IDORDENTABLAJERIA, $ordentablajeria->getIdordentablajeria(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
