<?php



/**
 * This class defines the structure of the 'plantillatablajeria' table.
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
class PlantillatablajeriaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.PlantillatablajeriaTableMap';

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
        $this->setName('plantillatablajeria');
        $this->setPhpName('Plantillatablajeria');
        $this->setClassname('Plantillatablajeria');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idplantillatablajeria', 'Idplantillatablajeria', 'INTEGER', true, null, null);
        $this->addForeignKey('idempresa', 'Idempresa', 'INTEGER', 'empresa', 'idempresa', true, null, null);
        $this->addForeignKey('idproducto', 'Idproducto', 'INTEGER', 'producto', 'idproducto', true, null, null);
        $this->addColumn('plantillatablajeria_nombre', 'PlantillatablajeriaNombre', 'VARCHAR', true, 255, null);
        $this->addColumn('plantillatablajeria_descripcion', 'PlantillatablajeriaDescripcion', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Empresa', 'Empresa', RelationMap::MANY_TO_ONE, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Producto', 'Producto', RelationMap::MANY_TO_ONE, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Plantillatablajeriadetalle', 'Plantillatablajeriadetalle', RelationMap::ONE_TO_MANY, array('idplantillatablajeria' => 'idplantillatablajeria', ), 'CASCADE', 'CASCADE', 'Plantillatablajeriadetalles');
    } // buildRelations()

} // PlantillatablajeriaTableMap
