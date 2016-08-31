<?php



/**
 * This class defines the structure of the 'inventariomes' table.
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
class InventariomesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.InventariomesTableMap';

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
        $this->setName('inventariomes');
        $this->setPhpName('Inventariomes');
        $this->setClassname('Inventariomes');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idinventariomes', 'Idinventariomes', 'INTEGER', true, null, null);
        $this->addForeignKey('idempresa', 'Idempresa', 'INTEGER', 'empresa', 'idempresa', true, null, null);
        $this->addForeignKey('idsucursal', 'Idsucursal', 'INTEGER', 'sucursal', 'idsucursal', true, null, null);
        $this->addForeignKey('idalmacen', 'Idalmacen', 'INTEGER', 'almacen', 'idalmacen', true, null, null);
        $this->addForeignKey('idusuario', 'Idusuario', 'INTEGER', 'usuario', 'idusuario', true, null, null);
        $this->addForeignKey('idauditor', 'Idauditor', 'INTEGER', 'usuario', 'idusuario', false, null, null);
        $this->addColumn('inventariomes_fecha', 'InventariomesFecha', 'DATE', true, null, null);
        $this->addColumn('inventariomes_revisada', 'InventariomesRevisada', 'BOOLEAN', true, 1, false);
        $this->addColumn('inventariomes_finalalimentos', 'InventariomesFinalalimentos', 'DECIMAL', true, 16, null);
        $this->addColumn('inventariomes_finalbebidas', 'InventariomesFinalbebidas', 'DECIMAL', true, 16, null);
        $this->addColumn('inventariomes_faltantes', 'InventariomesFaltantes', 'DECIMAL', true, 16, null);
        $this->addColumn('inventariomes_sobrantes', 'InventariomesSobrantes', 'DECIMAL', true, 16, null);
        $this->addColumn('inventariomes_total', 'InventariomesTotal', 'DECIMAL', true, 16, null);
        $this->addColumn('inventariomes_totalimportefisico', 'InventariomesTotalimportefisico', 'DECIMAL', true, 16, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Almacen', 'Almacen', RelationMap::MANY_TO_ONE, array('idalmacen' => 'idalmacen', ), 'CASCADE', 'CASCADE');
        $this->addRelation('UsuarioRelatedByIdauditor', 'Usuario', RelationMap::MANY_TO_ONE, array('idauditor' => 'idusuario', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Empresa', 'Empresa', RelationMap::MANY_TO_ONE, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Sucursal', 'Sucursal', RelationMap::MANY_TO_ONE, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE');
        $this->addRelation('UsuarioRelatedByIdusuario', 'Usuario', RelationMap::MANY_TO_ONE, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Inventariomesdetalle', 'Inventariomesdetalle', RelationMap::ONE_TO_MANY, array('idinventariomes' => 'idinventariomes', ), 'CASCADE', 'CASCADE', 'Inventariomesdetalles');
    } // buildRelations()

} // InventariomesTableMap
