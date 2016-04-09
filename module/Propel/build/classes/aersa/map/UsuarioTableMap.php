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
        $this->addRelation('InventariomesRelatedByIdauditor', 'Inventariomes', RelationMap::ONE_TO_MANY, array('idusuario' => 'idauditor', ), null, null, 'InventariomessRelatedByIdauditor');
        $this->addRelation('InventariomesRelatedByIdusuario', 'Inventariomes', RelationMap::ONE_TO_MANY, array('idusuario' => 'idusuario', ), null, null, 'InventariomessRelatedByIdusuario');
        $this->addRelation('Inventariomesdetallenota', 'Inventariomesdetallenota', RelationMap::ONE_TO_MANY, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE', 'Inventariomesdetallenotas');
        $this->addRelation('RequisicionRelatedByIdauditor', 'Requisicion', RelationMap::ONE_TO_MANY, array('idusuario' => 'idauditor', ), 'CASCADE', 'CASCADE', 'RequisicionsRelatedByIdauditor');
        $this->addRelation('RequisicionRelatedByIdusuario', 'Requisicion', RelationMap::ONE_TO_MANY, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE', 'RequisicionsRelatedByIdusuario');
        $this->addRelation('Usuarioempresa', 'Usuarioempresa', RelationMap::ONE_TO_MANY, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE', 'Usuarioempresas');
        $this->addRelation('Usuariosucursal', 'Usuariosucursal', RelationMap::ONE_TO_MANY, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE', 'Usuariosucursals');
    } // buildRelations()

} // UsuarioTableMap
