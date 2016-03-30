<?php



/**
 * This class defines the structure of the 'almacen' table.
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
class AlmacenTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.AlmacenTableMap';

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
        $this->setName('almacen');
        $this->setPhpName('Almacen');
        $this->setClassname('Almacen');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addForeignPrimaryKey('idalmacen', 'Idalmacen', 'INTEGER' , 'sucursal', 'idsucursal', true, null, null);
        $this->addColumn('almacen_nombre', 'AlmacenNombre', 'VARCHAR', true, 255, null);
        $this->addColumn('almacen_encargado', 'AlmacenEncargado', 'VARCHAR', true, 45, null);
        $this->addColumn('idsucursal', 'Idsucursal', 'INTEGER', true, null, null);
        $this->addColumn('almacen_estatus', 'AlmacenEstatus', 'BOOLEAN', true, 1, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Sucursal', 'Sucursal', RelationMap::MANY_TO_ONE, array('idalmacen' => 'idsucursal', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // AlmacenTableMap
