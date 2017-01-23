<?php



/**
 * This class defines the structure of the 'pagocontrarecibo' table.
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
class PagocontrareciboTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.PagocontrareciboTableMap';

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
        $this->setName('pagocontrarecibo');
        $this->setPhpName('Pagocontrarecibo');
        $this->setClassname('Pagocontrarecibo');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idpagocontrarecibo', 'Idpagocontrarecibo', 'INTEGER', true, null, null);
        $this->addColumn('pagocontrarecibo_comprobante', 'PagocontrareciboComprobante', 'LONGVARCHAR', false, null, null);
        $this->addColumn('pagocontrarecibo_fechapago', 'PagocontrareciboFechapago', 'TIMESTAMP', true, null, null);
        $this->addColumn('pagocontrarecibo_cantidad', 'PagocontrareciboCantidad', 'DECIMAL', true, 16, null);
        $this->addForeignKey('idcontrarecibodetalle', 'Idcontrarecibodetalle', 'INTEGER', 'contrarecibodetalle', 'idcontrarecibodetalle', true, null, null);
        $this->addForeignKey('idusuario', 'Idusuario', 'INTEGER', 'usuario', 'idusuario', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Contrarecibodetalle', 'Contrarecibodetalle', RelationMap::MANY_TO_ONE, array('idcontrarecibodetalle' => 'idcontrarecibodetalle', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Usuario', 'Usuario', RelationMap::MANY_TO_ONE, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // PagocontrareciboTableMap
