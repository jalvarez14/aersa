<?php



/**
 * This class defines the structure of the 'notacreditodetalle' table.
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
class NotacreditodetalleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.NotacreditodetalleTableMap';

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
        $this->setName('notacreditodetalle');
        $this->setPhpName('Notacreditodetalle');
        $this->setClassname('Notacreditodetalle');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idnotacreditodetalle', 'Idnotacreditodetalle', 'INTEGER', true, null, null);
        $this->addForeignKey('idnotacredito', 'Idnotacredito', 'INTEGER', 'notacredito', 'idnotacredito', true, null, null);
        $this->addForeignKey('idproducto', 'Idproducto', 'INTEGER', 'producto', 'idproducto', true, null, null);
        $this->addForeignKey('idalmacen', 'Idalmacen', 'INTEGER', 'almacen', 'idalmacen', true, null, null);
        $this->addColumn('notacreditodetalle_cantidad', 'NotacreditodetalleCantidad', 'FLOAT', true, null, null);
        $this->addColumn('notacreditodetalle_revisada', 'NotacreditodetalleRevisada', 'BOOLEAN', true, 1, false);
        $this->addColumn('notacreditodetalle_ieps', 'NotacreditodetalleIeps', 'FLOAT', false, null, null);
        $this->addColumn('notacreditodetalle_descuento', 'NotacreditodetalleDescuento', 'FLOAT', false, null, null);
        $this->addColumn('notacreditodetalle_subtotal', 'NotacreditodetalleSubtotal', 'DECIMAL', false, 15, null);
        $this->addColumn('notacreditodetalle_costounitario', 'NotacreditodetalleCostounitario', 'DECIMAL', false, 15, null);
        $this->addColumn('notacreditodetalle_costounitarioneto', 'NotacreditodetalleCostounitarioneto', 'DECIMAL', false, 15, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Almacen', 'Almacen', RelationMap::MANY_TO_ONE, array('idalmacen' => 'idalmacen', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Notacredito', 'Notacredito', RelationMap::MANY_TO_ONE, array('idnotacredito' => 'idnotacredito', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Producto', 'Producto', RelationMap::MANY_TO_ONE, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // NotacreditodetalleTableMap
