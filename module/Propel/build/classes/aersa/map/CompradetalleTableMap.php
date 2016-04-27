<?php



/**
 * This class defines the structure of the 'compradetalle' table.
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
class CompradetalleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.CompradetalleTableMap';

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
        $this->setName('compradetalle');
        $this->setPhpName('Compradetalle');
        $this->setClassname('Compradetalle');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idcompradetalle', 'Idcompradetalle', 'INTEGER', true, null, null);
        $this->addForeignKey('idcompra', 'Idcompra', 'INTEGER', 'compra', 'idcompra', true, null, null);
        $this->addForeignKey('idproducto', 'Idproducto', 'INTEGER', 'producto', 'idproducto', true, null, null);
        $this->addForeignKey('idalmacen', 'Idalmacen', 'INTEGER', 'almacen', 'idalmacen', true, null, null);
        $this->addColumn('compradetalle_cantidad', 'CompradetalleCantidad', 'FLOAT', true, null, null);
        $this->addColumn('compradetalle_precio', 'CompradetallePrecio', 'DECIMAL', true, 15, null);
        $this->addColumn('compradetalle_revisada', 'CompradetalleRevisada', 'BOOLEAN', true, 1, false);
        $this->addColumn('compradetalle_costounitario', 'CompradetalleCostounitario', 'DECIMAL', true, 15, null);
        $this->addColumn('compradetalle_costounitarioneto', 'CompradetalleCostounitarioneto', 'DECIMAL', false, 15, null);
        $this->addColumn('compradetalle_descuento', 'CompradetalleDescuento', 'FLOAT', false, null, null);
        $this->addColumn('compradetalle_ieps', 'CompradetalleIeps', 'FLOAT', false, null, null);
        $this->addColumn('compradetalle_subtotal', 'CompradetalleSubtotal', 'DECIMAL', false, 15, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Almacen', 'Almacen', RelationMap::MANY_TO_ONE, array('idalmacen' => 'idalmacen', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Compra', 'Compra', RelationMap::MANY_TO_ONE, array('idcompra' => 'idcompra', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Producto', 'Producto', RelationMap::MANY_TO_ONE, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CompradetalleTableMap
