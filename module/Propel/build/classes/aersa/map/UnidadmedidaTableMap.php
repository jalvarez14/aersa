<?php



/**
 * This class defines the structure of the 'unidadmedida' table.
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
class UnidadmedidaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.UnidadmedidaTableMap';

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
        $this->setName('unidadmedida');
        $this->setPhpName('Unidadmedida');
        $this->setClassname('Unidadmedida');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idunidadmedida', 'Idunidadmedida', 'INTEGER', true, null, null);
        $this->addColumn('unidadmedida_nombre', 'UnidadmedidaNombre', 'VARCHAR', true, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Producto', 'Producto', RelationMap::ONE_TO_MANY, array('idunidadmedida' => 'idunidadmedida', ), 'CASCADE', 'CASCADE', 'Productos');
    } // buildRelations()

} // UnidadmedidaTableMap
