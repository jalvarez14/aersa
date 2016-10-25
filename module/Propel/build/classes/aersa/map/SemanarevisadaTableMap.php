<?php



/**
 * This class defines the structure of the 'semanarevisada' table.
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
class SemanarevisadaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.SemanarevisadaTableMap';

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
        $this->setName('semanarevisada');
        $this->setPhpName('Semanarevisada');
        $this->setClassname('Semanarevisada');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('idsemanarevisada', 'Idsemanarevisada', 'INTEGER', true, null, null);
        $this->addForeignKey('idempresa', 'Idempresa', 'INTEGER', 'empresa', 'idempresa', true, null, null);
        $this->addForeignKey('idsucursal', 'Idsucursal', 'INTEGER', 'sucursal', 'idsucursal', true, null, null);
        $this->addColumn('semanarevisada_anio', 'SemanarevisadaAnio', 'INTEGER', true, null, null);
        $this->addColumn('semanarevisada_semana', 'SemanarevisadaSemana', 'INTEGER', true, null, null);
        $this->addColumn('semanarevisada_estatus', 'SemanarevisadaEstatus', 'BOOLEAN', true, 1, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Empresa', 'Empresa', RelationMap::MANY_TO_ONE, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Sucursal', 'Sucursal', RelationMap::MANY_TO_ONE, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // SemanarevisadaTableMap
