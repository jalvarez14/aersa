<?php



/**
 * This class defines the structure of the 'usuarioempresa' table.
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
class UsuarioempresaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.UsuarioempresaTableMap';

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
        $this->setName('usuarioempresa');
        $this->setPhpName('Usuarioempresa');
        $this->setClassname('Usuarioempresa');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idusuarioempresa', 'Idusuarioempresa', 'INTEGER', true, null, null);
        $this->addForeignKey('idusuario', 'Idusuario', 'INTEGER', 'usuario', 'idusuario', true, null, null);
        $this->addForeignKey('idempresa', 'Idempresa', 'INTEGER', 'empresa', 'idempresa', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Empresa', 'Empresa', RelationMap::MANY_TO_ONE, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Usuario', 'Usuario', RelationMap::MANY_TO_ONE, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // UsuarioempresaTableMap
