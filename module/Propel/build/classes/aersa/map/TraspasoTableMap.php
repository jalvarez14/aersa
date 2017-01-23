<?php



/**
 * This class defines the structure of the 'traspaso' table.
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
class TraspasoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.TraspasoTableMap';

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
        $this->setName('traspaso');
        $this->setPhpName('Traspaso');
        $this->setClassname('Traspaso');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idtraspaso', 'Idtraspaso', 'INTEGER', true, null, null);
        $this->addForeignKey('idcuentabancariaorigen', 'Idcuentabancariaorigen', 'INTEGER', 'cuentabancaria', 'idcuentabancaria', true, null, null);
        $this->addForeignKey('idcuentabancariadestino', 'Idcuentabancariadestino', 'INTEGER', 'cuentabancaria', 'idcuentabancaria', true, null, null);
        $this->addColumn('traspaso_fecha', 'TraspasoFecha', 'DATE', true, null, null);
        $this->addColumn('traspaso_cantidad', 'TraspasoCantidad', 'DECIMAL', true, 15, null);
        $this->addColumn('traspaso_nota', 'TraspasoNota', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CuentabancariaRelatedByIdcuentabancariadestino', 'Cuentabancaria', RelationMap::MANY_TO_ONE, array('idcuentabancariadestino' => 'idcuentabancaria', ), 'CASCADE', 'CASCADE');
        $this->addRelation('CuentabancariaRelatedByIdcuentabancariaorigen', 'Cuentabancaria', RelationMap::MANY_TO_ONE, array('idcuentabancariaorigen' => 'idcuentabancaria', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // TraspasoTableMap
