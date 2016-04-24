<?php



/**
 * This class defines the structure of the 'ordentablajeriadetalle' table.
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
class OrdentablajeriadetalleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.OrdentablajeriadetalleTableMap';

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
        $this->setName('ordentablajeriadetalle');
        $this->setPhpName('Ordentablajeriadetalle');
        $this->setClassname('Ordentablajeriadetalle');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idordentablajeriadetalle', 'Idordentablajeriadetalle', 'INTEGER', true, null, null);
        $this->addForeignKey('idordentablajeria', 'Idordentablajeria', 'INTEGER', 'ordentablajeria', 'idordentablajeria', true, null, null);
        $this->addColumn('idproducto', 'Idproducto', 'VARCHAR', true, 45, null);
        $this->addColumn('ordentablajeriadetalle_cantidad', 'OrdentablajeriadetalleCantidad', 'FLOAT', true, null, null);
        $this->addColumn('ordentablajeriadetalle_porcion', 'OrdentablajeriadetallePorcion', 'FLOAT', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Ordentablajeria', 'Ordentablajeria', RelationMap::MANY_TO_ONE, array('idordentablajeria' => 'idordentablajeria', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // OrdentablajeriadetalleTableMap
