<?php



/**
 * This class defines the structure of the 'devoluciondetalle' table.
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
class DevoluciondetalleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.DevoluciondetalleTableMap';

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
        $this->setName('devoluciondetalle');
        $this->setPhpName('Devoluciondetalle');
        $this->setClassname('Devoluciondetalle');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('iddevoluciondetalle', 'Iddevoluciondetalle', 'INTEGER', true, null, null);
        $this->addForeignKey('iddevolucion', 'Iddevolucion', 'INTEGER', 'devolucion', 'iddevolucion', true, null, null);
        $this->addForeignKey('idproducto', 'Idproducto', 'INTEGER', 'producto', 'idproducto', true, null, null);
        $this->addForeignKey('idalmacen', 'Idalmacen', 'INTEGER', 'almacen', 'idalmacen', true, null, null);
        $this->addColumn('devoluciondetalle_cantidad', 'DevoluciondetalleCantidad', 'FLOAT', true, null, null);
        $this->addColumn('devoluciondetalle_revisada', 'DevoluciondetalleRevisada', 'BOOLEAN', true, 1, false);
        $this->addColumn('devoluciondetalle_subtotal', 'DevoluciondetalleSubtotal', 'DECIMAL', false, 15, null);
        $this->addColumn('devoluciondetalle_ieps', 'DevoluciondetalleIeps', 'FLOAT', false, null, null);
        $this->addColumn('devoluciondetalle_descuento', 'DevoluciondetalleDescuento', 'FLOAT', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Almacen', 'Almacen', RelationMap::MANY_TO_ONE, array('idalmacen' => 'idalmacen', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Devolucion', 'Devolucion', RelationMap::MANY_TO_ONE, array('iddevolucion' => 'iddevolucion', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Producto', 'Producto', RelationMap::MANY_TO_ONE, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // DevoluciondetalleTableMap
