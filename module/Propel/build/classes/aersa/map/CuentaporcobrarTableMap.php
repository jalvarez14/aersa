<?php



/**
 * This class defines the structure of the 'cuentaporcobrar' table.
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
class CuentaporcobrarTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.CuentaporcobrarTableMap';

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
        $this->setName('cuentaporcobrar');
        $this->setPhpName('Cuentaporcobrar');
        $this->setClassname('Cuentaporcobrar');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idcuentaporcobrar', 'Idcuentaporcobrar', 'INTEGER', true, null, null);
        $this->addForeignKey('idempresa', 'Idempresa', 'INTEGER', 'empresa', 'idempresa', true, null, null);
        $this->addForeignKey('idsucursal', 'Idsucursal', 'INTEGER', 'sucursal', 'idsucursal', true, null, null);
        $this->addForeignKey('idusuario', 'Idusuario', 'INTEGER', 'usuario', 'idusuario', true, null, null);
        $this->addColumn('cuentaporcobrar_cantidad', 'CuentaporcobrarCantidad', 'DECIMAL', true, 15, null);
        $this->addColumn('cuentaporcobrar_cliente', 'CuentaporcobrarCliente', 'VARCHAR', true, 255, null);
        $this->addColumn('cuentaporcobrar_fecha', 'CuentaporcobrarFecha', 'TIMESTAMP', true, null, null);
        $this->addColumn('cuentaporcobrar_nota', 'CuentaporcobrarNota', 'LONGVARCHAR', false, null, null);
        $this->addColumn('cuentaporcobrar_abonado', 'CuentaporcobrarAbonado', 'DECIMAL', false, 15, null);
<<<<<<< HEAD
        $this->addColumn('cuentaporcobrar_estatuspago', 'CuentaporcobrarEstatuspago', 'BOOLEAN', true, 1, null);
=======
>>>>>>> fc0fb6af431cd2ef6eabc53fd587157b5180b930
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Empresa', 'Empresa', RelationMap::MANY_TO_ONE, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Sucursal', 'Sucursal', RelationMap::MANY_TO_ONE, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Usuario', 'Usuario', RelationMap::MANY_TO_ONE, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Flujoefectivo', 'Flujoefectivo', RelationMap::ONE_TO_MANY, array('idcuentaporcobrar' => 'idcuentaporcobrar', ), null, null, 'Flujoefectivos');
    } // buildRelations()

} // CuentaporcobrarTableMap
