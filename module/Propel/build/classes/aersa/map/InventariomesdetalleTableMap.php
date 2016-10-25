<?php



/**
 * This class defines the structure of the 'inventariomesdetalle' table.
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
class InventariomesdetalleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.InventariomesdetalleTableMap';

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
        $this->setName('inventariomesdetalle');
        $this->setPhpName('Inventariomesdetalle');
        $this->setClassname('Inventariomesdetalle');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idinventariomesdetalle', 'Idinventariomesdetalle', 'INTEGER', true, null, null);
        $this->addForeignKey('idinventariomes', 'Idinventariomes', 'INTEGER', 'inventariomes', 'idinventariomes', true, null, null);
        $this->addColumn('idproducto', 'Idproducto', 'INTEGER', true, null, null);
        $this->addColumn('inventariomesdetalle_stockinicial', 'InventariomesdetalleStockinicial', 'FLOAT', true, null, null);
        $this->addColumn('inventariomesdetalle_stockteorico', 'InventariomesdetalleStockteorico', 'FLOAT', true, null, null);
        $this->addColumn('inventariomesdetalle_explosion', 'InventariomesdetalleExplosion', 'FLOAT', true, null, null);
        $this->addColumn('inventariomesdetalle_stockfisico', 'InventariomesdetalleStockfisico', 'FLOAT', true, null, null);
        $this->addColumn('inventariomesdetalle_totalfisico', 'InventariomesdetalleTotalfisico', 'FLOAT', true, null, null);
        $this->addColumn('inventariomesdetalle_diferencia', 'InventariomesdetalleDiferencia', 'FLOAT', false, null, null);
        $this->addColumn('inventariomesdetalle_revisada', 'InventariomesdetalleRevisada', 'BOOLEAN', true, 1, false);
        $this->addColumn('inventariomesdetalle_ingresocompra', 'InventariomesdetalleIngresocompra', 'FLOAT', true, null, null);
        $this->addColumn('inventariomesdetalle_ingresorequisicion', 'InventariomesdetalleIngresorequisicion', 'FLOAT', true, null, null);
        $this->addColumn('inventariomesdetalle_egresorequisicion', 'InventariomesdetalleEgresorequisicion', 'FLOAT', true, null, null);
        $this->addColumn('inventariomesdetalle_egresoventa', 'InventariomesdetalleEgresoventa', 'FLOAT', true, null, null);
        $this->addColumn('inventariomesdetalle_reajuste', 'InventariomesdetalleReajuste', 'FLOAT', true, null, null);
        $this->addColumn('inventariomesdetalle_ingresoordentablajeria', 'InventariomesdetalleIngresoordentablajeria', 'FLOAT', true, null, null);
        $this->addColumn('inventariomesdetalle_egresoordentablajeria', 'InventariomesdetalleEgresoordentablajeria', 'FLOAT', true, null, null);
        $this->addColumn('inventariomesdetalle_egresodevolucion', 'InventariomesdetalleEgresodevolucion', 'FLOAT', true, null, null);
        $this->addColumn('inventariomesdetalle_costopromedio', 'InventariomesdetalleCostopromedio', 'DECIMAL', true, 16, null);
        $this->addColumn('inventariomesdetalle_difimporte', 'InventariomesdetalleDifimporte', 'DECIMAL', true, 16, null);
        $this->addColumn('inventariomesdetalle_importefisico', 'InventariomesdetalleImportefisico', 'DECIMAL', true, 16, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Inventariomes', 'Inventariomes', RelationMap::MANY_TO_ONE, array('idinventariomes' => 'idinventariomes', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Inventariomesdetallenota', 'Inventariomesdetallenota', RelationMap::ONE_TO_MANY, array('idinventariomesdetalle' => 'idinventariomesdetalle', ), 'CASCADE', 'CASCADE', 'Inventariomesdetallenotas');
    } // buildRelations()

} // InventariomesdetalleTableMap
