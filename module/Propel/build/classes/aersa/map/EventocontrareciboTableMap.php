<?php



/**
 * This class defines the structure of the 'eventocontrarecibo' table.
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
class EventocontrareciboTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.EventocontrareciboTableMap';

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
        $this->setName('eventocontrarecibo');
        $this->setPhpName('Eventocontrarecibo');
        $this->setClassname('Eventocontrarecibo');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ideventocontrarecibo', 'Ideventocontrarecibo', 'INTEGER', true, null, null);
        $this->addForeignKey('idcontrarecibo', 'Idcontrarecibo', 'INTEGER', 'contrarecibo', 'idcontrarecibo', true, null, null);
        $this->addColumn('eventocontrarecibo_fecha', 'EventocontrareciboFecha', 'TIMESTAMP', true, null, null);
        $this->addColumn('eventocontrarecibo_generador', 'EventocontrareciboGenerador', 'CHAR', true, null, null);
        $this->getColumn('eventocontrarecibo_generador', false)->setValueSet(array (
  0 => 'proveedor',
  1 => 'cliente',
));
        $this->addColumn('eventocontrarecibo_evento', 'EventocontrareciboEvento', 'CHAR', true, null, null);
        $this->getColumn('eventocontrarecibo_evento', false)->setValueSet(array (
  0 => 'generado',
  1 => 'rechazado',
  2 => 'revisado',
  3 => 'validado',
  4 => 'pago',
  5 => 'pagado',
  6 => 'recordatoriopago',
  7 => 'pagocincompleto',
));
        $this->addColumn('idempresa', 'Idempresa', 'INTEGER', true, null, null);
        $this->addColumn('idsucursal', 'Idsucursal', 'INTEGER', true, null, null);
        $this->addColumn('idusuario', 'Idusuario', 'INTEGER', true, null, null);
        $this->addColumn('eventocontrarecibo_nota', 'EventocontrareciboNota', 'LONGVARCHAR', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Contrarecibo', 'Contrarecibo', RelationMap::MANY_TO_ONE, array('idcontrarecibo' => 'idcontrarecibo', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // EventocontrareciboTableMap
