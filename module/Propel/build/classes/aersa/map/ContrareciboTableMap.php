<?php



/**
 * This class defines the structure of the 'contrarecibo' table.
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
class ContrareciboTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.ContrareciboTableMap';

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
        $this->setName('contrarecibo');
        $this->setPhpName('Contrarecibo');
        $this->setClassname('Contrarecibo');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idcontrarecibo', 'Idcontrarecibo', 'INTEGER', true, null, null);
        $this->addColumn('contrarecibo_moneda', 'ContrareciboMoneda', 'CHAR', true, null, null);
        $this->getColumn('contrarecibo_moneda', false)->setValueSet(array (
  0 => 'mxn',
  1 => 'usd',
));
        $this->addColumn('contrarecibo_total', 'ContrareciboTotal', 'DECIMAL', true, 16, null);
        $this->addColumn('idempresaproveedor', 'Idempresaproveedor', 'INTEGER', true, null, null);
        $this->addColumn('idsucursalproveedor', 'Idsucursalproveedor', 'INTEGER', true, null, null);
        $this->addColumn('idempresacliente', 'Idempresacliente', 'INTEGER', true, null, null);
        $this->addColumn('idsucursalcliente', 'Idsucursalcliente', 'INTEGER', true, null, null);
        $this->addColumn('contrarecibo_fechacreacion', 'ContrareciboFechacreacion', 'TIMESTAMP', true, null, null);
        $this->addColumn('contrarecibo_estatus', 'ContrareciboEstatus', 'CHAR', true, null, null);
        $this->getColumn('contrarecibo_estatus', false)->setValueSet(array (
  0 => 'generado',
  1 => 'revision',
  2 => 'revisado',
));
        $this->addColumn('contrarecibo_fechapago', 'ContrareciboFechapago', 'TIMESTAMP', false, null, null);
        $this->addColumn('contrarecibo_fechavalidacion', 'ContrareciboFechavalidacion', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Compra', 'Compra', RelationMap::ONE_TO_MANY, array('idcontrarecibo' => 'idcontrarecibo', ), 'CASCADE', 'CASCADE', 'Compras');
        $this->addRelation('Contrarecibodetalle', 'Contrarecibodetalle', RelationMap::ONE_TO_MANY, array('idcontrarecibo' => 'idcontrarecibo', ), 'CASCADE', 'CASCADE', 'Contrarecibodetalles');
        $this->addRelation('Eventocontrarecibo', 'Eventocontrarecibo', RelationMap::ONE_TO_MANY, array('idcontrarecibo' => 'idcontrarecibo', ), 'CASCADE', 'CASCADE', 'Eventocontrarecibos');
    } // buildRelations()

} // ContrareciboTableMap
