<?php



/**
 * This class defines the structure of the 'categoria' table.
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
class CategoriaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.CategoriaTableMap';

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
        $this->setName('categoria');
        $this->setPhpName('Categoria');
        $this->setClassname('Categoria');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idcategoria', 'Idcategoria', 'INTEGER', true, null, null);
        $this->addColumn('categoria_nombre', 'CategoriaNombre', 'VARCHAR', true, 255, null);
        $this->addColumn('categoria_padre', 'CategoriaPadre', 'INTEGER', false, null, null);
        $this->addColumn('categoria_almacenable', 'CategoriaAlmacenable', 'BOOLEAN', false, 1, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CategoriaTableMap
