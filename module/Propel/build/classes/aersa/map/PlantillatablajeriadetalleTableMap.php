<?php



/**
 * This class defines the structure of the 'plantillatablajeriadetalle' table.
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
class PlantillatablajeriadetalleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.PlantillatablajeriadetalleTableMap';

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
        $this->setName('plantillatablajeriadetalle');
        $this->setPhpName('Plantillatablajeriadetalle');
        $this->setClassname('Plantillatablajeriadetalle');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idplantillatablajeriadetalle', 'Idplantillatablajeriadetalle', 'INTEGER', true, null, null);
        $this->addForeignKey('idplantillatablajeria', 'Idplantillatablajeria', 'INTEGER', 'plantillatablajeria', 'idplantillatablajeria', true, null, null);
        $this->addForeignKey('idproducto', 'Idproducto', 'INTEGER', 'producto', 'idproducto', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Plantillatablajeria', 'Plantillatablajeria', RelationMap::MANY_TO_ONE, array('idplantillatablajeria' => 'idplantillatablajeria', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Producto', 'Producto', RelationMap::MANY_TO_ONE, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // PlantillatablajeriadetalleTableMap
