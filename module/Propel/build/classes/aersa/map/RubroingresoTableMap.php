<?php



/**
 * This class defines the structure of the 'rubroingreso' table.
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
class RubroingresoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.RubroingresoTableMap';

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
        $this->setName('rubroingreso');
        $this->setPhpName('Rubroingreso');
        $this->setClassname('Rubroingreso');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idrubroingreso', 'Idrubroingreso', 'INTEGER', true, null, null);
        $this->addColumn('rubroingreso_nombre', 'RubroingresoNombre', 'VARCHAR', true, 255, null);
        $this->addColumn('rubroingreso_descripcion', 'RubroingresoDescripcion', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Ingresodetalle', 'Ingresodetalle', RelationMap::ONE_TO_MANY, array('idrubroingreso' => 'idrubroingreso', ), 'CASCADE', 'CASCADE', 'Ingresodetalles');
    } // buildRelations()

} // RubroingresoTableMap
