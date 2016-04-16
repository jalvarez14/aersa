<?php



/**
 * This class defines the structure of the 'almacen' table.
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
class AlmacenTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.AlmacenTableMap';

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
        $this->setName('almacen');
        $this->setPhpName('Almacen');
        $this->setClassname('Almacen');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idalmacen', 'Idalmacen', 'INTEGER', true, null, null);
        $this->addForeignKey('idsucursal', 'Idsucursal', 'INTEGER', 'sucursal', 'idsucursal', true, null, null);
        $this->addColumn('almacen_nombre', 'AlmacenNombre', 'VARCHAR', true, 255, null);
        $this->addColumn('almacen_encargado', 'AlmacenEncargado', 'VARCHAR', true, 45, null);
        $this->addColumn('almacen_estatus', 'AlmacenEstatus', 'BOOLEAN', true, 1, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Sucursal', 'Sucursal', RelationMap::MANY_TO_ONE, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Compra', 'Compra', RelationMap::ONE_TO_MANY, array('idalmacen' => 'idalmacen', ), 'CASCADE', 'CASCADE', 'Compras');
        $this->addRelation('Compradetalle', 'Compradetalle', RelationMap::ONE_TO_MANY, array('idalmacen' => 'idalmacen', ), 'CASCADE', 'CASCADE', 'Compradetalles');
        $this->addRelation('Devolucion', 'Devolucion', RelationMap::ONE_TO_MANY, array('idalmacen' => 'idalmacen', ), 'CASCADE', 'CASCADE', 'Devolucions');
        $this->addRelation('Devoluciondetalle', 'Devoluciondetalle', RelationMap::ONE_TO_MANY, array('idalmacen' => 'idalmacen', ), 'CASCADE', 'CASCADE', 'Devoluciondetalles');
        $this->addRelation('Inventariomes', 'Inventariomes', RelationMap::ONE_TO_MANY, array('idalmacen' => 'idalmacen', ), 'CASCADE', 'CASCADE', 'Inventariomess');
        $this->addRelation('Notacredito', 'Notacredito', RelationMap::ONE_TO_MANY, array('idalmacen' => 'idalmacen', ), 'CASCADE', 'CASCADE', 'Notacreditos');
        $this->addRelation('Notacreditodetalle', 'Notacreditodetalle', RelationMap::ONE_TO_MANY, array('idalmacen' => 'idalmacen', ), 'CASCADE', 'CASCADE', 'Notacreditodetalles');
        $this->addRelation('RequisicionRelatedByIdalmacendestino', 'Requisicion', RelationMap::ONE_TO_MANY, array('idalmacen' => 'idalmacendestino', ), 'CASCADE', 'CASCADE', 'RequisicionsRelatedByIdalmacendestino');
        $this->addRelation('RequisicionRelatedByIdalmacenorigen', 'Requisicion', RelationMap::ONE_TO_MANY, array('idalmacen' => 'idalmacenorigen', ), 'CASCADE', 'CASCADE', 'RequisicionsRelatedByIdalmacenorigen');
        $this->addRelation('Venta', 'Venta', RelationMap::ONE_TO_MANY, array('idalmacen' => 'idalmacen', ), 'CASCADE', 'CASCADE', 'Ventas');
    } // buildRelations()

} // AlmacenTableMap
