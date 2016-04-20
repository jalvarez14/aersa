<?php



/**
 * This class defines the structure of the 'conceptosalida' table.
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
class ConceptosalidaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.ConceptosalidaTableMap';

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
        $this->setName('conceptosalida');
        $this->setPhpName('Conceptosalida');
        $this->setClassname('Conceptosalida');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idconceptosalida', 'Idconceptosalida', 'INTEGER', true, null, null);
        $this->addColumn('conceptosalida_nombre', 'ConceptosalidaNombre', 'VARCHAR', true, 255, null);
        $this->addColumn('almacenorigen', 'Almacenorigen', 'VARCHAR', true, 45, null);
        $this->addColumn('almacendestino', 'Almacendestino', 'VARCHAR', true, 45, null);
        $this->addColumn('mismasucursal', 'Mismasucursal', 'BOOLEAN', true, 1, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Requisicion', 'Requisicion', RelationMap::ONE_TO_MANY, array('idconceptosalida' => 'idconceptosalida', ), 'CASCADE', 'CASCADE', 'Requisicions');
    } // buildRelations()

} // ConceptosalidaTableMap
