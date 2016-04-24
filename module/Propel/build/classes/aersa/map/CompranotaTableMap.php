<?php



/**
 * This class defines the structure of the 'compranota' table.
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
class CompranotaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.CompranotaTableMap';

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
        $this->setName('compranota');
        $this->setPhpName('Compranota');
        $this->setClassname('Compranota');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idcompranota', 'Idcompranota', 'INTEGER', true, null, null);
        $this->addForeignKey('idcompra', 'Idcompra', 'INTEGER', 'compra', 'idcompra', true, null, null);
        $this->addForeignKey('idusuario', 'Idusuario', 'INTEGER', 'usuario', 'idusuario', true, null, null);
        $this->addColumn('compranota_nota', 'CompranotaNota', 'LONGVARCHAR', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Compra', 'Compra', RelationMap::MANY_TO_ONE, array('idcompra' => 'idcompra', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Usuario', 'Usuario', RelationMap::MANY_TO_ONE, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CompranotaTableMap
