<?php



/**
 * This class defines the structure of the 'ordentablajerianota' table.
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
class OrdentablajerianotaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.OrdentablajerianotaTableMap';

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
        $this->setName('ordentablajerianota');
        $this->setPhpName('Ordentablajerianota');
        $this->setClassname('Ordentablajerianota');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idordentablajerianota', 'Idordentablajerianota', 'INTEGER', true, null, null);
        $this->addForeignKey('idusuario', 'Idusuario', 'INTEGER', 'usuario', 'idusuario', true, null, null);
        $this->addForeignKey('idordentablajeria', 'Idordentablajeria', 'INTEGER', 'ordentablajeria', 'idordentablajeria', true, null, null);
        $this->addColumn('ordentablajerianota_nota', 'OrdentablajerianotaNota', 'LONGVARCHAR', true, null, null);
        $this->addColumn('ordentablajerianota_fecha', 'OrdentablajerianotaFecha', 'TIMESTAMP', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Ordentablajeria', 'Ordentablajeria', RelationMap::MANY_TO_ONE, array('idordentablajeria' => 'idordentablajeria', ), null, null);
        $this->addRelation('Usuario', 'Usuario', RelationMap::MANY_TO_ONE, array('idusuario' => 'idusuario', ), null, null);
    } // buildRelations()

} // OrdentablajerianotaTableMap
