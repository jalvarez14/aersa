<?php



/**
 * This class defines the structure of the 'requisiciondetalle' table.
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
class RequisiciondetalleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.RequisiciondetalleTableMap';

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
        $this->setName('requisiciondetalle');
        $this->setPhpName('Requisiciondetalle');
        $this->setClassname('Requisiciondetalle');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idrequisiciondetalle', 'Idrequisiciondetalle', 'INTEGER', true, null, null);
        $this->addForeignKey('idrequisicion', 'Idrequisicion', 'INTEGER', 'requisicion', 'idrequisicion', true, null, null);
        $this->addForeignKey('idproducto', 'Idproducto', 'INTEGER', 'producto', 'idproducto', true, null, null);
        $this->addColumn('requisiciondetalle_cantidad', 'RequisiciondetalleCantidad', 'FLOAT', true, null, null);
        $this->addColumn('requisiciondetalle_revisada', 'RequisiciondetalleRevisada', 'BOOLEAN', true, 1, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Producto', 'Producto', RelationMap::MANY_TO_ONE, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Requisicion', 'Requisicion', RelationMap::MANY_TO_ONE, array('idrequisicion' => 'idrequisicion', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // RequisiciondetalleTableMap
