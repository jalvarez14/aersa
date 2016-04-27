<?php



/**
 * This class defines the structure of the 'ventadetalle' table.
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
class VentadetalleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.VentadetalleTableMap';

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
        $this->setName('ventadetalle');
        $this->setPhpName('Ventadetalle');
        $this->setClassname('Ventadetalle');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idventadetalle', 'Idventadetalle', 'INTEGER', true, null, null);
        $this->addForeignKey('idventa', 'Idventa', 'INTEGER', 'venta', 'idventa', true, null, null);
        $this->addColumn('idalmacen', 'Idalmacen', 'INTEGER', false, null, null);
        $this->addColumn('idproducto', 'Idproducto', 'INTEGER', false, null, null);
        $this->addColumn('ventadetalle_cantidad', 'VentadetalleCantidad', 'FLOAT', false, null, null);
        $this->addColumn('ventadetalle_subtotal', 'VentadetalleSubtotal', 'DECIMAL', false, 15, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Venta', 'Venta', RelationMap::MANY_TO_ONE, array('idventa' => 'idventa', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // VentadetalleTableMap
