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
        $this->addColumn('idventa', 'Idventa', 'INTEGER', true, null, null);
        $this->addColumn('idalmacen', 'Idalmacen', 'INTEGER', true, null, null);
        $this->addColumn('idproducto', 'Idproducto', 'INTEGER', true, null, null);
        $this->addColumn('ventadetalle_cantidad', 'VentadetalleCantidad', 'FLOAT', true, null, null);
        $this->addColumn('ventadetalle_subtotal', 'VentadetalleSubtotal', 'DECIMAL', true, 15, null);
        $this->addColumn('idpadre', 'Idpadre', 'INTEGER', false, null, null);
        $this->addColumn('ventadetalle_revisada', 'VentadetalleRevisada', 'BOOLEAN', true, 1, null);
        $this->addColumn('ventadetalle_contable', 'VentadetalleContable', 'BOOLEAN', true, 1, false);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // VentadetalleTableMap
