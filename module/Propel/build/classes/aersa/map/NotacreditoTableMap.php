<?php



/**
 * This class defines the structure of the 'notacredito' table.
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
class NotacreditoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.NotacreditoTableMap';

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
        $this->setName('notacredito');
        $this->setPhpName('Notacredito');
        $this->setClassname('Notacredito');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idnotacredito', 'Idnotacredito', 'INTEGER', true, null, null);
        $this->addForeignKey('idempresa', 'Idempresa', 'INTEGER', 'empresa', 'idempresa', true, null, null);
        $this->addForeignKey('idsucursal', 'Idsucursal', 'INTEGER', 'sucursal', 'idsucursal', true, null, null);
        $this->addForeignKey('idproveedor', 'Idproveedor', 'INTEGER', 'proveedor', 'idproveedor', true, null, null);
        $this->addForeignKey('idusuario', 'Idusuario', 'INTEGER', 'usuario', 'idusuario', true, null, null);
        $this->addForeignKey('idauditor', 'Idauditor', 'INTEGER', 'usuario', 'idusuario', false, null, null);
        $this->addForeignKey('idalmacen', 'Idalmacen', 'INTEGER', 'almacen', 'idalmacen', true, null, null);
        $this->addColumn('notacredito_folio', 'NotacreditoFolio', 'VARCHAR', true, 10, null);
        $this->addColumn('notacredito_revisada', 'NotacreditoRevisada', 'BOOLEAN', true, 1, false);
        $this->addColumn('notacredito_factura', 'NotacreditoFactura', 'LONGVARCHAR', false, null, null);
        $this->addColumn('notacredito_fechacreacion', 'NotacreditoFechacreacion', 'TIMESTAMP', true, null, null);
        $this->addColumn('notacredito_fechanotacredito', 'NotacreditoFechanotacredito', 'TIMESTAMP', false, null, null);
        $this->addColumn('notacredito_ieps', 'NotacreditoIeps', 'DECIMAL', false, 15, null);
        $this->addColumn('notacredito_iva', 'NotacreditoIva', 'DECIMAL', false, 15, null);
        $this->addColumn('notacredito_total', 'NotacreditoTotal', 'DECIMAL', false, 15, null);
        $this->addColumn('notacredito_subtotal', 'NotacreditoSubtotal', 'DECIMAL', false, 15, null);
        $this->addColumn('notaauditorempresa', 'Notaauditorempresa', 'BOOLEAN', false, 1, true);
        $this->addColumn('notaalmacenistaempresa', 'Notaalmacenistaempresa', 'BOOLEAN', false, 1, true);
        $this->addColumn('notaauditoraersa', 'Notaauditoraersa', 'BOOLEAN', false, 1, true);
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
        $this->addRelation('Notacreditodetalle', 'Notacreditodetalle', RelationMap::ONE_TO_MANY, array('idnotacredito' => 'idnotacredito', ), 'CASCADE', 'CASCADE', 'Notacreditodetalles');
        $this->addRelation('Notacreditonota', 'Notacreditonota', RelationMap::ONE_TO_MANY, array('idnotacredito' => 'idnotacredito', ), 'CASCADE', 'CASCADE', 'Notacreditonotas');
    } // buildRelations()

} // NotacreditoTableMap
