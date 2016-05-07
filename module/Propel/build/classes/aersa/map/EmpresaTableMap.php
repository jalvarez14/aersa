<?php



/**
 * This class defines the structure of the 'empresa' table.
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
class EmpresaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.EmpresaTableMap';

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
        $this->setName('empresa');
        $this->setPhpName('Empresa');
        $this->setClassname('Empresa');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idempresa', 'Idempresa', 'INTEGER', true, null, null);
        $this->addColumn('empresa_nombrecomercial', 'EmpresaNombrecomercial', 'VARCHAR', true, 255, null);
        $this->addColumn('empresa_razonsocial', 'EmpresaRazonsocial', 'VARCHAR', true, 255, null);
        $this->addColumn('empresa_estatus', 'EmpresaEstatus', 'BOOLEAN', false, 1, true);
        $this->addColumn('empresa_administracion', 'EmpresaAdministracion', 'BOOLEAN', false, 1, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Compra', 'Compra', RelationMap::ONE_TO_MANY, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE', 'Compras');
        $this->addRelation('Cuentabancaria', 'Cuentabancaria', RelationMap::ONE_TO_MANY, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE', 'Cuentabancarias');
        $this->addRelation('Devolucion', 'Devolucion', RelationMap::ONE_TO_MANY, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE', 'Devolucions');
        $this->addRelation('Ingreso', 'Ingreso', RelationMap::ONE_TO_MANY, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE', 'Ingresos');
        $this->addRelation('Inventariomes', 'Inventariomes', RelationMap::ONE_TO_MANY, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE', 'Inventariomess');
        $this->addRelation('Notacredito', 'Notacredito', RelationMap::ONE_TO_MANY, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE', 'Notacreditos');
        $this->addRelation('Ordentablajeria', 'Ordentablajeria', RelationMap::ONE_TO_MANY, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE', 'Ordentablajerias');
        $this->addRelation('Plantillatablajeria', 'Plantillatablajeria', RelationMap::ONE_TO_MANY, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE', 'Plantillatablajerias');
        $this->addRelation('Producto', 'Producto', RelationMap::ONE_TO_MANY, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE', 'Productos');
        $this->addRelation('Productosucursalalmacen', 'Productosucursalalmacen', RelationMap::ONE_TO_MANY, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE', 'Productosucursalalmacens');
        $this->addRelation('Proveedor', 'Proveedor', RelationMap::ONE_TO_MANY, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE', 'Proveedors');
        $this->addRelation('Requisicion', 'Requisicion', RelationMap::ONE_TO_MANY, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE', 'Requisicions');
        $this->addRelation('Sucursal', 'Sucursal', RelationMap::ONE_TO_MANY, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE', 'Sucursals');
        $this->addRelation('Trabajadorespromedio', 'Trabajadorespromedio', RelationMap::ONE_TO_MANY, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE', 'Trabajadorespromedios');
        $this->addRelation('Usuarioempresa', 'Usuarioempresa', RelationMap::ONE_TO_MANY, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE', 'Usuarioempresas');
        $this->addRelation('Venta', 'Venta', RelationMap::ONE_TO_MANY, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE', 'Ventas');
    } // buildRelations()

} // EmpresaTableMap
