<?php



/**
 * This class defines the structure of the 'ajusteinventarionota' table.
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
class AjusteinventarionotaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.AjusteinventarionotaTableMap';

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
        $this->setName('ajusteinventarionota');
        $this->setPhpName('Ajusteinventarionota');
        $this->setClassname('Ajusteinventarionota');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idajusteinventarionota', 'Idajusteinventarionota', 'INTEGER', true, null, null);
        $this->addForeignKey('idusuario', 'Idusuario', 'INTEGER', 'usuario', 'idusuario', true, null, null);
        $this->addForeignKey('idajusteinventario', 'Idajusteinventario', 'INTEGER', 'ajusteinventario', 'idajusteinventario', true, null, null);
        $this->addColumn('ajusteinventarionota_nota', 'AjusteinventarionotaNota', 'LONGVARCHAR', true, null, null);
        $this->addColumn('ajusteinventarionota_fecha', 'AjusteinventarionotaFecha', 'TIMESTAMP', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Ajusteinventario', 'Ajusteinventario', RelationMap::MANY_TO_ONE, array('idajusteinventario' => 'idajusteinventario', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Usuario', 'Usuario', RelationMap::MANY_TO_ONE, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // AjusteinventarionotaTableMap
