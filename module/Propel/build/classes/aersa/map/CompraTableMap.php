<?php



/**
 * This class defines the structure of the 'compra' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.aersa.map
 */
class CompraTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.CompraTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('compra');
        $this->setPhpName('Compra');
        $this->setClassname('Compra');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idcompra', 'Idcompra', 'INTEGER', true, null, null);
        $this->addColumn('idsucursal', 'Idsucursal', 'INTEGER', true, null, null);
        $this->addColumn('idusuario', 'Idusuario', 'INTEGER', false, null, null);
        $this->addColumn('idauditor', 'Idauditor', 'INTEGER', false, null, null);
        $this->addColumn('idalmacen', 'Idalmacen', 'INTEGER', false, null, null);
        $this->addColumn('compra_folio', 'CompraFolio', 'VARCHAR', true, 45, null);
        $this->addColumn('compra_revisada', 'CompraRevisada', 'BOOLEAN', true, 1, false);
        $this->addColumn('compra_factura', 'CompraFactura', 'LONGVARCHAR', false, null, null);
        $this->addColumn('compra_fechacreacion', 'CompraFechacreacion', 'TIMESTAMP', false, null, null);
        $this->addColumn('compra_fechaentrega', 'CompraFechaentrega', 'VARCHAR', false, 45, null);
        $this->addColumn('compra_ieps', 'CompraIeps', 'DECIMAL', false, 10, null);
        $this->addColumn('compra_iva', 'CompraIva', 'DECIMAL', false, 10, null);
        $this->addColumn('compra_total', 'CompraTotal', 'DECIMAL', false, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Compradetalle', 'Compradetalle', RelationMap::ONE_TO_MANY, array('idcompra' => 'idcompra', ), 'CASCADE', 'CASCADE', 'Compradetalles');
    } // buildRelations()

} // CompraTableMap
