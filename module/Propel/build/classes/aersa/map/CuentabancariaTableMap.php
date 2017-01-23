<?php



/**
 * This class defines the structure of the 'cuentabancaria' table.
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
class CuentabancariaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.CuentabancariaTableMap';

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
        $this->setName('cuentabancaria');
        $this->setPhpName('Cuentabancaria');
        $this->setClassname('Cuentabancaria');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idcuentabancaria', 'Idcuentabancaria', 'INTEGER', true, null, null);
        $this->addForeignKey('idempresa', 'Idempresa', 'INTEGER', 'empresa', 'idempresa', true, null, null);
        $this->addForeignKey('idsucursal', 'Idsucursal', 'INTEGER', 'sucursal', 'idsucursal', true, null, null);
        $this->addColumn('cuentabancaria_banco', 'CuentabancariaBanco', 'VARCHAR', true, 255, null);
        $this->addColumn('cuentabancaria_nocuenta', 'CuentabancariaNocuenta', 'VARCHAR', true, 45, null);
        $this->addColumn('cuentabancaria_balance', 'CuentabancariaBalance', 'DECIMAL', false, 15, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Empresa', 'Empresa', RelationMap::MANY_TO_ONE, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Sucursal', 'Sucursal', RelationMap::MANY_TO_ONE, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Abonoproveedordetalle', 'Abonoproveedordetalle', RelationMap::ONE_TO_MANY, array('idcuentabancaria' => 'idcuentabancaria', ), 'CASCADE', 'CASCADE', 'Abonoproveedordetalles');
        $this->addRelation('Flujoefectivo', 'Flujoefectivo', RelationMap::ONE_TO_MANY, array('idcuentabancaria' => 'idcuentabancaria', ), null, null, 'Flujoefectivos');
        $this->addRelation('TraspasoRelatedByIdcuentabancariadestino', 'Traspaso', RelationMap::ONE_TO_MANY, array('idcuentabancaria' => 'idcuentabancariadestino', ), 'CASCADE', 'CASCADE', 'TraspasosRelatedByIdcuentabancariadestino');
        $this->addRelation('TraspasoRelatedByIdcuentabancariaorigen', 'Traspaso', RelationMap::ONE_TO_MANY, array('idcuentabancaria' => 'idcuentabancariaorigen', ), 'CASCADE', 'CASCADE', 'TraspasosRelatedByIdcuentabancariaorigen');
    } // buildRelations()

} // CuentabancariaTableMap
