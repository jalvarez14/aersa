<?php



/**
 * This class defines the structure of the 'sucursal' table.
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
class SucursalTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.SucursalTableMap';

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
        $this->setName('sucursal');
        $this->setPhpName('Sucursal');
        $this->setClassname('Sucursal');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idsucursal', 'Idsucursal', 'INTEGER', true, null, null);
        $this->addColumn('sucursal_nombre', 'SucursalNombre', 'VARCHAR', true, 45, null);
        $this->addForeignKey('idempresa', 'Idempresa', 'INTEGER', 'empresa', 'idempresa', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Empresa', 'Empresa', RelationMap::MANY_TO_ONE, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Almacen', 'Almacen', RelationMap::ONE_TO_MANY, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE', 'Almacens');
        $this->addRelation('Requisicion', 'Requisicion', RelationMap::ONE_TO_MANY, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE', 'Requisicions');
        $this->addRelation('Trabajadorpromedio', 'Trabajadorpromedio', RelationMap::ONE_TO_MANY, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE', 'Trabajadorpromedios');
        $this->addRelation('Usuariosucursal', 'Usuariosucursal', RelationMap::ONE_TO_MANY, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE', 'Usuariosucursals');
    } // buildRelations()

} // SucursalTableMap
