<?php



/**
 * This class defines the structure of the 'conceptoingreso' table.
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
class ConceptoingresoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.ConceptoingresoTableMap';

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
        $this->setName('conceptoingreso');
        $this->setPhpName('Conceptoingreso');
        $this->setClassname('Conceptoingreso');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idconceptoingreso', 'Idconceptoingreso', 'INTEGER', true, null, null);
        $this->addColumn('conceptoingreso_nombre', 'ConceptoingresoNombre', 'VARCHAR', true, 255, null);
        $this->addColumn('conceptoingreso_descripcion', 'ConceptoingresoDescripcion', 'LONGVARCHAR', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Ingresodetalle', 'Ingresodetalle', RelationMap::ONE_TO_MANY, array('idconceptoingreso' => 'idconceptoingreso', ), 'CASCADE', 'CASCADE', 'Ingresodetalles');
    } // buildRelations()

} // ConceptoingresoTableMap
