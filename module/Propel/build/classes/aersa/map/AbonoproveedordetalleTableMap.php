<?php



/**
 * This class defines the structure of the 'abonoproveedordetalle' table.
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
class AbonoproveedordetalleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.AbonoproveedordetalleTableMap';

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
        $this->setName('abonoproveedordetalle');
        $this->setPhpName('Abonoproveedordetalle');
        $this->setClassname('Abonoproveedordetalle');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idabonoproveedordetalle', 'Idabonoproveedordetalle', 'INTEGER', true, null, null);
        $this->addForeignKey('idabonoproveedor', 'Idabonoproveedor', 'INTEGER', 'abonoproveedor', 'idabonoproveedor', true, null, null);
        $this->addForeignKey('idcuentabancaria', 'Idcuentabancaria', 'INTEGER', 'cuentabancaria', 'idcuentabancaria', false, null, null);
        $this->addForeignKey('idusuario', 'Idusuario', 'INTEGER', 'usuario', 'idusuario', true, null, null);
        $this->addColumn('abonoproveedordetalle_fechaabono', 'AbonoproveedordetalleFechaabono', 'TIMESTAMP', true, null, null);
        $this->addColumn('abonoproveedordetalle_cantidad', 'AbonoproveedordetalleCantidad', 'DECIMAL', true, 15, null);
        $this->addColumn('abonoproveedordetalle_tipo', 'AbonoproveedordetalleTipo', 'CHAR', true, null, null);
        $this->getColumn('abonoproveedordetalle_tipo', false)->setValueSet(array (
  0 => 'abono',
  1 => 'egreso',
));
        $this->addColumn('abonoproveedordetalle_referencia', 'AbonoproveedordetalleReferencia', 'VARCHAR', false, 255, null);
        $this->addColumn('abonoproveedordetalle_comprobante', 'AbonoproveedordetalleComprobante', 'LONGVARCHAR', false, null, null);
        $this->addColumn('abonoproveedordetalle_mediodepago', 'AbonoproveedordetalleMediodepago', 'CHAR', true, null, null);
        $this->getColumn('abonoproveedordetalle_mediodepago', false)->setValueSet(array (
  0 => 'cheque',
  1 => 'efectivo',
  2 => 'transferencia',
));
        $this->addColumn('abonoproveedordetalle_chequecirculacion', 'AbonoproveedordetalleChequecirculacion', 'BOOLEAN', false, 1, null);
        $this->addColumn('abonoproveedordetalle_fechacobrocheque', 'AbonoproveedordetalleFechacobrocheque', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Abonoproveedor', 'Abonoproveedor', RelationMap::MANY_TO_ONE, array('idabonoproveedor' => 'idabonoproveedor', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Cuentabancaria', 'Cuentabancaria', RelationMap::MANY_TO_ONE, array('idcuentabancaria' => 'idcuentabancaria', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Usuario', 'Usuario', RelationMap::MANY_TO_ONE, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // AbonoproveedordetalleTableMap
