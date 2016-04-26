<?php



/**
 * This class defines the structure of the 'devolucion' table.
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
class DevolucionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.DevolucionTableMap';

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
        $this->setName('devolucion');
        $this->setPhpName('Devolucion');
        $this->setClassname('Devolucion');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('iddevolucion', 'Iddevolucion', 'INTEGER', true, null, null);
        $this->addForeignKey('idempresa', 'Idempresa', 'INTEGER', 'empresa', 'idempresa', true, null, null);
        $this->addForeignKey('idsucursal', 'Idsucursal', 'INTEGER', 'sucursal', 'idsucursal', true, null, null);
        $this->addForeignKey('idusuario', 'Idusuario', 'INTEGER', 'usuario', 'idusuario', true, null, null);
        $this->addForeignKey('idauditor', 'Idauditor', 'INTEGER', 'usuario', 'idusuario', true, null, null);
        $this->addForeignKey('idalmacen', 'Idalmacen', 'INTEGER', 'almacen', 'idalmacen', true, null, null);
        $this->addForeignKey('idproveedor', 'Idproveedor', 'INTEGER', 'proveedor', 'idproveedor', true, null, null);
        $this->addColumn('devolucion_folio', 'DevolucionFolio', 'VARCHAR', true, 10, null);
        $this->addColumn('devolucion_revisada', 'DevolucionRevisada', 'BOOLEAN', true, 1, false);
        $this->addColumn('devolucion_factura', 'DevolucionFactura', 'LONGVARCHAR', false, null, null);
        $this->addColumn('devolucion_fechacreacion', 'DevolucionFechacreacion', 'TIMESTAMP', false, null, null);
        $this->addColumn('devolucion_fechaentrega', 'DevolucionFechaentrega', 'VARCHAR', false, 45, null);
        $this->addColumn('devolucion_ieps', 'DevolucionIeps', 'DECIMAL', false, 10, null);
        $this->addColumn('devolucion_iva', 'DevolucionIva', 'DECIMAL', false, 10, null);
        $this->addColumn('devolucion_total', 'DevolucionTotal', 'DECIMAL', false, 10, null);
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
        $this->addRelation('Devoluciondetalle', 'Devoluciondetalle', RelationMap::ONE_TO_MANY, array('iddevolucion' => 'iddevolucion', ), 'CASCADE', 'CASCADE', 'Devoluciondetalles');
        $this->addRelation('Devolucionnota', 'Devolucionnota', RelationMap::ONE_TO_MANY, array('iddevolucion' => 'iddevolucion', ), 'CASCADE', 'CASCADE', 'Devolucionnotas');
    } // buildRelations()

} // DevolucionTableMap
