<?php



/**
 * This class defines the structure of the 'compra' table.
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
class CompraTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.CompraTableMap';

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
        $this->setName('compra');
        $this->setPhpName('Compra');
        $this->setClassname('Compra');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idcompra', 'Idcompra', 'INTEGER', true, null, null);
        $this->addForeignKey('idempresa', 'Idempresa', 'INTEGER', 'empresa', 'idempresa', true, null, null);
        $this->addForeignKey('idsucursal', 'Idsucursal', 'INTEGER', 'sucursal', 'idsucursal', true, null, null);
        $this->addForeignKey('idproveedor', 'Idproveedor', 'INTEGER', 'proveedor', 'idproveedor', true, null, null);
        $this->addForeignKey('idusuario', 'Idusuario', 'INTEGER', 'usuario', 'idusuario', true, null, null);
        $this->addForeignKey('idauditor', 'Idauditor', 'INTEGER', 'usuario', 'idusuario', false, null, null);
        $this->addForeignKey('idalmacen', 'Idalmacen', 'INTEGER', 'almacen', 'idalmacen', false, null, null);
        $this->addColumn('compra_folio', 'CompraFolio', 'VARCHAR', true, 45, null);
        $this->addColumn('compra_revisada', 'CompraRevisada', 'BOOLEAN', true, 1, false);
        $this->addColumn('compra_factura', 'CompraFactura', 'LONGVARCHAR', false, null, null);
        $this->addColumn('compra_fechacreacion', 'CompraFechacreacion', 'TIMESTAMP', true, null, null);
        $this->addColumn('compra_fechacompra', 'CompraFechacompra', 'TIMESTAMP', true, null, null);
        $this->addColumn('compra_fechaentrega', 'CompraFechaentrega', 'TIMESTAMP', false, null, null);
        $this->addColumn('compra_ieps', 'CompraIeps', 'DECIMAL', false, 15, null);
        $this->addColumn('compra_iva', 'CompraIva', 'DECIMAL', false, 15, null);
        $this->addColumn('compra_subtotal', 'CompraSubtotal', 'DECIMAL', false, 15, null);
        $this->addColumn('compra_total', 'CompraTotal', 'DECIMAL', false, 15, null);
        $this->addColumn('compra_tipo', 'CompraTipo', 'CHAR', true, null, null);
        $this->getColumn('compra_tipo', false)->setValueSet(array (
  0 => 'ordecompra',
  1 => 'compra',
  2 => 'consignacion',
));
        $this->addColumn('notaauditorempresa', 'Notaauditorempresa', 'BOOLEAN', false, 1, true);
        $this->addColumn('notaalmacenistaempresa', 'Notaalmacenistaempresa', 'BOOLEAN', false, 1, true);
        $this->addColumn('notaauditoraersa', 'Notaauditoraersa', 'BOOLEAN', false, 1, true);
        $this->addColumn('compra_estatuspago', 'CompraEstatuspago', 'CHAR', false, null, 'nopagada');
        $this->getColumn('compra_estatuspago', false)->setValueSet(array (
  0 => 'pagada',
  1 => 'nopagada',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Almacen', 'Almacen', RelationMap::MANY_TO_ONE, array('idalmacen' => 'idalmacen', ), 'CASCADE', 'CASCADE');
        $this->addRelation('UsuarioRelatedByIdauditor', 'Usuario', RelationMap::MANY_TO_ONE, array('idauditor' => 'idusuario', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Empresa', 'Empresa', RelationMap::MANY_TO_ONE, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Proveedor', 'Proveedor', RelationMap::MANY_TO_ONE, array('idproveedor' => 'idproveedor', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Sucursal', 'Sucursal', RelationMap::MANY_TO_ONE, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE');
        $this->addRelation('UsuarioRelatedByIdusuario', 'Usuario', RelationMap::MANY_TO_ONE, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Compradetalle', 'Compradetalle', RelationMap::ONE_TO_MANY, array('idcompra' => 'idcompra', ), 'CASCADE', 'CASCADE', 'Compradetalles');
        $this->addRelation('Compranota', 'Compranota', RelationMap::ONE_TO_MANY, array('idcompra' => 'idcompra', ), 'CASCADE', 'CASCADE', 'Compranotas');
        $this->addRelation('Flujoefectivo', 'Flujoefectivo', RelationMap::ONE_TO_MANY, array('idcompra' => 'idcompra', ), null, null, 'Flujoefectivos');
    } // buildRelations()

} // CompraTableMap
