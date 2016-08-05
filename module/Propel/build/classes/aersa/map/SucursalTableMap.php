<?php



/**
 * This class defines the structure of the 'sucursal' table.
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
class SucursalTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.SucursalTableMap';

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
        $this->setName('sucursal');
        $this->setPhpName('Sucursal');
        $this->setClassname('Sucursal');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idsucursal', 'Idsucursal', 'INTEGER', true, null, null);
        $this->addForeignKey('idempresa', 'Idempresa', 'INTEGER', 'empresa', 'idempresa', true, null, null);
        $this->addColumn('sucursal_nombre', 'SucursalNombre', 'VARCHAR', true, 45, null);
        $this->addColumn('sucursal_habilitarproductos', 'SucursalHabilitarproductos', 'BOOLEAN', true, 1, true);
        $this->addColumn('sucursal_habilitarrecetas', 'SucursalHabilitarrecetas', 'BOOLEAN', true, 1, true);
        $this->addColumn('sucursal_estatus', 'SucursalEstatus', 'BOOLEAN', true, 1, true);
        $this->addColumn('sucursal_anioactivo', 'SucursalAnioactivo', 'INTEGER', true, null, null);
        $this->addColumn('sucursal_mesactivo', 'SucursalMesactivo', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Empresa', 'Empresa', RelationMap::MANY_TO_ONE, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Abonoproveedor', 'Abonoproveedor', RelationMap::ONE_TO_MANY, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE', 'Abonoproveedors');
        $this->addRelation('Ajusteinventario', 'Ajusteinventario', RelationMap::ONE_TO_MANY, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE', 'Ajusteinventarios');
        $this->addRelation('Almacen', 'Almacen', RelationMap::ONE_TO_MANY, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE', 'Almacens');
        $this->addRelation('Compra', 'Compra', RelationMap::ONE_TO_MANY, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE', 'Compras');
        $this->addRelation('Cuentabancaria', 'Cuentabancaria', RelationMap::ONE_TO_MANY, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE', 'Cuentabancarias');
        $this->addRelation('Cuentaporcobrar', 'Cuentaporcobrar', RelationMap::ONE_TO_MANY, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE', 'Cuentaporcobrars');
        $this->addRelation('Devolucion', 'Devolucion', RelationMap::ONE_TO_MANY, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE', 'Devolucions');
        $this->addRelation('Flujoefectivo', 'Flujoefectivo', RelationMap::ONE_TO_MANY, array('idsucursal' => 'idsucursal', ), null, null, 'Flujoefectivos');
        $this->addRelation('Ingreso', 'Ingreso', RelationMap::ONE_TO_MANY, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE', 'Ingresos');
        $this->addRelation('Inventariomes', 'Inventariomes', RelationMap::ONE_TO_MANY, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE', 'Inventariomess');
        $this->addRelation('Notacredito', 'Notacredito', RelationMap::ONE_TO_MANY, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE', 'Notacreditos');
        $this->addRelation('Ordentablajeria', 'Ordentablajeria', RelationMap::ONE_TO_MANY, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE', 'Ordentablajerias');
        $this->addRelation('Productosucursalalmacen', 'Productosucursalalmacen', RelationMap::ONE_TO_MANY, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE', 'Productosucursalalmacens');
        $this->addRelation('RequisicionRelatedByIdsucursaldestino', 'Requisicion', RelationMap::ONE_TO_MANY, array('idsucursal' => 'idsucursaldestino', ), 'CASCADE', 'CASCADE', 'RequisicionsRelatedByIdsucursaldestino');
        $this->addRelation('RequisicionRelatedByIdsucursalorigen', 'Requisicion', RelationMap::ONE_TO_MANY, array('idsucursal' => 'idsucursalorigen', ), 'CASCADE', 'CASCADE', 'RequisicionsRelatedByIdsucursalorigen');
        $this->addRelation('Trabajadorespromedio', 'Trabajadorespromedio', RelationMap::ONE_TO_MANY, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE', 'Trabajadorespromedios');
        $this->addRelation('Usuariosucursal', 'Usuariosucursal', RelationMap::ONE_TO_MANY, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE', 'Usuariosucursals');
        $this->addRelation('Venta', 'Venta', RelationMap::ONE_TO_MANY, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE', 'Ventas');
    } // buildRelations()

} // SucursalTableMap
