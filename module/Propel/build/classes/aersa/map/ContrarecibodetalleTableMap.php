<?php



/**
 * This class defines the structure of the 'contrarecibodetalle' table.
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
class ContrarecibodetalleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.ContrarecibodetalleTableMap';

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
        $this->setName('contrarecibodetalle');
        $this->setPhpName('Contrarecibodetalle');
        $this->setClassname('Contrarecibodetalle');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idcontrarecibodetalle', 'Idcontrarecibodetalle', 'INTEGER', true, null, null);
        $this->addForeignKey('idcontrarecibo', 'Idcontrarecibo', 'INTEGER', 'contrarecibo', 'idcontrarecibo', true, null, null);
        $this->addColumn('contrarecibodetalle_xml', 'ContrarecibodetalleXml', 'LONGVARCHAR', false, null, null);
        $this->addColumn('contrarecibodetalle_pdf', 'ContrarecibodetallePdf', 'LONGVARCHAR', false, null, null);
        $this->addColumn('contrarecibodetalle_folio', 'ContrarecibodetalleFolio', 'VARCHAR', true, 45, null);
        $this->addColumn('contrarecibodetalle_cantidad', 'ContrarecibodetalleCantidad', 'DECIMAL', true, 16, null);
        $this->addColumn('contrarecibodetalle_tipo', 'ContrarecibodetalleTipo', 'CHAR', true, null, null);
        $this->getColumn('contrarecibodetalle_tipo', false)->setValueSet(array (
  0 => 'anticipo',
  1 => 'estimacion',
  2 => 'finiquito',
  3 => 'otros',
));
        $this->addColumn('contrarecibodetalle_pagado', 'ContrarecibodetallePagado', 'BOOLEAN', true, 1, false);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Contrarecibo', 'Contrarecibo', RelationMap::MANY_TO_ONE, array('idcontrarecibo' => 'idcontrarecibo', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Pagocontrarecibo', 'Pagocontrarecibo', RelationMap::ONE_TO_MANY, array('idcontrarecibodetalle' => 'idcontrarecibodetalle', ), 'CASCADE', 'CASCADE', 'Pagocontrarecibos');
    } // buildRelations()

} // ContrarecibodetalleTableMap
