<?php



/**
 * This class defines the structure of the 'usuario' table.
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
class UsuarioTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.UsuarioTableMap';

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
        $this->setName('usuario');
        $this->setPhpName('Usuario');
        $this->setClassname('Usuario');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idusuario', 'Idusuario', 'INTEGER', true, null, null);
        $this->addForeignKey('idrol', 'Idrol', 'INTEGER', 'rol', 'idrol', true, null, null);
        $this->addColumn('usuario_nombre', 'UsuarioNombre', 'VARCHAR', true, 255, null);
        $this->addColumn('usuario_estatus', 'UsuarioEstatus', 'BOOLEAN', true, 1, null);
        $this->addColumn('usuario_username', 'UsuarioUsername', 'VARCHAR', true, 45, null);
        $this->addColumn('usuario_password', 'UsuarioPassword', 'VARCHAR', true, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Rol', 'Rol', RelationMap::MANY_TO_ONE, array('idrol' => 'idrol', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Abonoproveedordetalle', 'Abonoproveedordetalle', RelationMap::ONE_TO_MANY, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE', 'Abonoproveedordetalles');
        $this->addRelation('CompraRelatedByIdauditor', 'Compra', RelationMap::ONE_TO_MANY, array('idusuario' => 'idauditor', ), 'CASCADE', 'CASCADE', 'ComprasRelatedByIdauditor');
        $this->addRelation('CompraRelatedByIdusuario', 'Compra', RelationMap::ONE_TO_MANY, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE', 'ComprasRelatedByIdusuario');
        $this->addRelation('Compranota', 'Compranota', RelationMap::ONE_TO_MANY, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE', 'Compranotas');
        $this->addRelation('Cuentaporcobrar', 'Cuentaporcobrar', RelationMap::ONE_TO_MANY, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE', 'Cuentaporcobrars');
        $this->addRelation('DevolucionRelatedByIdauditor', 'Devolucion', RelationMap::ONE_TO_MANY, array('idusuario' => 'idauditor', ), 'CASCADE', 'CASCADE', 'DevolucionsRelatedByIdauditor');
        $this->addRelation('DevolucionRelatedByIdusuario', 'Devolucion', RelationMap::ONE_TO_MANY, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE', 'DevolucionsRelatedByIdusuario');
        $this->addRelation('Devolucionnota', 'Devolucionnota', RelationMap::ONE_TO_MANY, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE', 'Devolucionnotas');
        $this->addRelation('Flujoefectivo', 'Flujoefectivo', RelationMap::ONE_TO_MANY, array('idusuario' => 'idusuario', ), null, null, 'Flujoefectivos');
        $this->addRelation('IngresoRelatedByIdauditor', 'Ingreso', RelationMap::ONE_TO_MANY, array('idusuario' => 'idauditor', ), 'CASCADE', 'CASCADE', 'IngresosRelatedByIdauditor');
        $this->addRelation('IngresoRelatedByIdusuario', 'Ingreso', RelationMap::ONE_TO_MANY, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE', 'IngresosRelatedByIdusuario');
        $this->addRelation('Ingresonota', 'Ingresonota', RelationMap::ONE_TO_MANY, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE', 'Ingresonotas');
        $this->addRelation('InventariomesRelatedByIdauditor', 'Inventariomes', RelationMap::ONE_TO_MANY, array('idusuario' => 'idauditor', ), 'CASCADE', 'CASCADE', 'InventariomessRelatedByIdauditor');
        $this->addRelation('InventariomesRelatedByIdusuario', 'Inventariomes', RelationMap::ONE_TO_MANY, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE', 'InventariomessRelatedByIdusuario');
        $this->addRelation('Inventariomesdetallenota', 'Inventariomesdetallenota', RelationMap::ONE_TO_MANY, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE', 'Inventariomesdetallenotas');
        $this->addRelation('NotacreditoRelatedByIdauditor', 'Notacredito', RelationMap::ONE_TO_MANY, array('idusuario' => 'idauditor', ), 'CASCADE', 'CASCADE', 'NotacreditosRelatedByIdauditor');
        $this->addRelation('NotacreditoRelatedByIdusuario', 'Notacredito', RelationMap::ONE_TO_MANY, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE', 'NotacreditosRelatedByIdusuario');
        $this->addRelation('Notacreditonota', 'Notacreditonota', RelationMap::ONE_TO_MANY, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE', 'Notacreditonotas');
        $this->addRelation('OrdentablajeriaRelatedByIdauditor', 'Ordentablajeria', RelationMap::ONE_TO_MANY, array('idusuario' => 'idauditor', ), 'CASCADE', 'CASCADE', 'OrdentablajeriasRelatedByIdauditor');
        $this->addRelation('OrdentablajeriaRelatedByIdusuario', 'Ordentablajeria', RelationMap::ONE_TO_MANY, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE', 'OrdentablajeriasRelatedByIdusuario');
        $this->addRelation('Ordentablajerianota', 'Ordentablajerianota', RelationMap::ONE_TO_MANY, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE', 'Ordentablajerianotas');
        $this->addRelation('RequisicionRelatedByIdauditor', 'Requisicion', RelationMap::ONE_TO_MANY, array('idusuario' => 'idauditor', ), 'CASCADE', 'CASCADE', 'RequisicionsRelatedByIdauditor');
        $this->addRelation('RequisicionRelatedByIdusuario', 'Requisicion', RelationMap::ONE_TO_MANY, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE', 'RequisicionsRelatedByIdusuario');
        $this->addRelation('Requisicionnota', 'Requisicionnota', RelationMap::ONE_TO_MANY, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE', 'Requisicionnotas');
        $this->addRelation('Usuarioempresa', 'Usuarioempresa', RelationMap::ONE_TO_MANY, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE', 'Usuarioempresas');
        $this->addRelation('Usuariosucursal', 'Usuariosucursal', RelationMap::ONE_TO_MANY, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE', 'Usuariosucursals');
        $this->addRelation('VentaRelatedByIdauditor', 'Venta', RelationMap::ONE_TO_MANY, array('idusuario' => 'idauditor', ), 'CASCADE', 'CASCADE', 'VentasRelatedByIdauditor');
        $this->addRelation('VentaRelatedByIdusuario', 'Venta', RelationMap::ONE_TO_MANY, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE', 'VentasRelatedByIdusuario');
        $this->addRelation('Ventanota', 'Ventanota', RelationMap::ONE_TO_MANY, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE', 'Ventanotas');
    } // buildRelations()

} // UsuarioTableMap
