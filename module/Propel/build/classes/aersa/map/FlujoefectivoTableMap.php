<?php



/**
 * This class defines the structure of the 'flujoefectivo' table.
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
class FlujoefectivoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.FlujoefectivoTableMap';

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
        $this->setName('flujoefectivo');
        $this->setPhpName('Flujoefectivo');
        $this->setClassname('Flujoefectivo');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idflujoefectivo', 'Idflujoefectivo', 'INTEGER', true, null, null);
        $this->addForeignKey('idempresa', 'Idempresa', 'INTEGER', 'empresa', 'idempresa', true, null, null);
        $this->addForeignKey('idsucursal', 'Idsucursal', 'INTEGER', 'sucursal', 'idsucursal', true, null, null);
        $this->addForeignKey('idusuario', 'Idusuario', 'INTEGER', 'usuario', 'idusuario', true, null, null);
        $this->addColumn('flujoefectivo_origen', 'FlujoefectivoOrigen', 'CHAR', true, null, null);
        $this->getColumn('flujoefectivo_origen', false)->setValueSet(array (
  0 => 'cuentaporcobrar',
  1 => 'ingreso',
  2 => 'compra',
));
        $this->addForeignKey('idcuentaporcobrar', 'Idcuentaporcobrar', 'INTEGER', 'cuentaporcobrar', 'idcuentaporcobrar', false, null, null);
        $this->addForeignKey('idcompra', 'Idcompra', 'INTEGER', 'compra', 'idcompra', false, null, null);
        $this->addForeignKey('idingreso', 'Idingreso', 'INTEGER', 'ingreso', 'idingreso', false, null, null);
        $this->addColumn('ingresorubro', 'Ingresorubro', 'CHAR', false, null, null);
        $this->getColumn('ingresorubro', false)->setValueSet(array (
  0 => 'alimentos',
  1 => 'bebidas',
  2 => 'miscelanea',
));
        $this->addColumn('flujoefectivo_pago', 'FlujoefectivoPago', 'CHAR', true, null, null);
        $this->getColumn('flujoefectivo_pago', false)->setValueSet(array (
  0 => 'cuenta',
  1 => 'abono',
  2 => 'bonificacion',
));
        $this->addForeignKey('idproveedor', 'Idproveedor', 'INTEGER', 'proveedor', 'idproveedor', false, null, null);
        $this->addForeignKey('idcuentabancaria', 'Idcuentabancaria', 'INTEGER', 'cuentabancaria', 'idcuentabancaria', false, null, null);
        $this->addColumn('flujoefectivo_cantidad', 'FlujoefectivoCantidad', 'DECIMAL', true, 15, null);
        $this->addColumn('flujoefectivo_fecha', 'FlujoefectivoFecha', 'TIMESTAMP', true, null, null);
        $this->addColumn('flujoefectivo_referencia', 'FlujoefectivoReferencia', 'LONGVARCHAR', true, null, null);
        $this->addColumn('flujoefectivo_comprobante', 'FlujoefectivoComprobante', 'LONGVARCHAR', false, null, null);
        $this->addColumn('flujoefectivo_mediodepago', 'FlujoefectivoMediodepago', 'CHAR', true, null, null);
        $this->getColumn('flujoefectivo_mediodepago', false)->setValueSet(array (
  0 => 'cheque',
  1 => 'efectivo',
  2 => 'transferencia',
  3 => 'abono',
));
        $this->addColumn('flujoefectivo_tipo', 'FlujoefectivoTipo', 'CHAR', true, null, null);
        $this->getColumn('flujoefectivo_tipo', false)->setValueSet(array (
  0 => 'ingreso',
  1 => 'egreso',
));
        $this->addColumn('flujoefectivo_chequecirculacion', 'FlujoefectivoChequecirculacion', 'BOOLEAN', false, 1, null);
        $this->addColumn('flujoefectivo_fechacobrocheque', 'FlujoefectivoFechacobrocheque', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Compra', 'Compra', RelationMap::MANY_TO_ONE, array('idcompra' => 'idcompra', ), null, null);
        $this->addRelation('Cuentabancaria', 'Cuentabancaria', RelationMap::MANY_TO_ONE, array('idcuentabancaria' => 'idcuentabancaria', ), null, null);
        $this->addRelation('Cuentaporcobrar', 'Cuentaporcobrar', RelationMap::MANY_TO_ONE, array('idcuentaporcobrar' => 'idcuentaporcobrar', ), null, null);
        $this->addRelation('Empresa', 'Empresa', RelationMap::MANY_TO_ONE, array('idempresa' => 'idempresa', ), null, null);
        $this->addRelation('Ingreso', 'Ingreso', RelationMap::MANY_TO_ONE, array('idingreso' => 'idingreso', ), null, null);
        $this->addRelation('Proveedor', 'Proveedor', RelationMap::MANY_TO_ONE, array('idproveedor' => 'idproveedor', ), null, null);
        $this->addRelation('Sucursal', 'Sucursal', RelationMap::MANY_TO_ONE, array('idsucursal' => 'idsucursal', ), null, null);
        $this->addRelation('Usuario', 'Usuario', RelationMap::MANY_TO_ONE, array('idusuario' => 'idusuario', ), null, null);
    } // buildRelations()

} // FlujoefectivoTableMap
