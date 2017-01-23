<?php



/**
 * This class defines the structure of the 'asociacionempresa' table.
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
class AsociacionempresaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.AsociacionempresaTableMap';

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
        $this->setName('asociacionempresa');
        $this->setPhpName('Asociacionempresa');
        $this->setClassname('Asociacionempresa');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idasociacionempresa', 'Idasociacionempresa', 'INTEGER', true, null, null);
        $this->addForeignKey('idempresaproveedor', 'Idempresaproveedor', 'INTEGER', 'empresa', 'idempresa', true, null, null);
        $this->addForeignKey('idempresacliente', 'Idempresacliente', 'INTEGER', 'empresa', 'idempresa', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('EmpresaRelatedByIdempresacliente', 'Empresa', RelationMap::MANY_TO_ONE, array('idempresacliente' => 'idempresa', ), null, 'CASCADE');
        $this->addRelation('EmpresaRelatedByIdempresaproveedor', 'Empresa', RelationMap::MANY_TO_ONE, array('idempresaproveedor' => 'idempresa', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // AsociacionempresaTableMap
