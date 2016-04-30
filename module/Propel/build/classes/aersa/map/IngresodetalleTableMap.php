<?php



/**
 * This class defines the structure of the 'ingresodetalle' table.
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
class IngresodetalleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.IngresodetalleTableMap';

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
        $this->setName('ingresodetalle');
        $this->setPhpName('Ingresodetalle');
        $this->setClassname('Ingresodetalle');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idingresodetalle', 'Idingresodetalle', 'INTEGER', true, null, null);
        $this->addForeignKey('idingreso', 'Idingreso', 'INTEGER', 'ingreso', 'idingreso', true, null, null);
        $this->addForeignKey('idrubroingreso', 'Idrubroingreso', 'INTEGER', 'rubroingreso', 'idrubroingreso', true, null, null);
        $this->addForeignKey('idconceptoingreso', 'Idconceptoingreso', 'INTEGER', 'conceptoingreso', 'idconceptoingreso', true, null, null);
        $this->addColumn('ingresodetalle_sub', 'IngresodetalleSub', 'DECIMAL', false, 15, null);
        $this->addColumn('ingresodetalle_IVA', 'IngresodetalleIva', 'DECIMAL', false, 15, null);
        $this->addColumn('ingresodetalle_total', 'IngresodetalleTotal', 'DECIMAL', false, 15, null);
        $this->addColumn('ingresodetalle_revisada', 'IngresodetalleRevisada', 'BOOLEAN', true, 1, false);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Conceptoingreso', 'Conceptoingreso', RelationMap::MANY_TO_ONE, array('idconceptoingreso' => 'idconceptoingreso', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Ingreso', 'Ingreso', RelationMap::MANY_TO_ONE, array('idingreso' => 'idingreso', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Rubroingreso', 'Rubroingreso', RelationMap::MANY_TO_ONE, array('idrubroingreso' => 'idrubroingreso', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // IngresodetalleTableMap
