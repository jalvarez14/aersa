<?php



/**
 * This class defines the structure of the 'requisicion' table.
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
class RequisicionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.RequisicionTableMap';

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
        $this->setName('requisicion');
        $this->setPhpName('Requisicion');
        $this->setClassname('Requisicion');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idrequisicion', 'Idrequisicion', 'INTEGER', true, null, null);
        $this->addForeignKey('idempresa', 'Idempresa', 'INTEGER', 'empresa', 'idempresa', true, null, null);
        $this->addForeignKey('idsucursalorigen', 'Idsucursalorigen', 'INTEGER', 'sucursal', 'idsucursal', true, null, null);
        $this->addForeignKey('idalmacenorigen', 'Idalmacenorigen', 'INTEGER', 'almacen', 'idalmacen', true, null, null);
        $this->addForeignKey('idsucursaldestino', 'Idsucursaldestino', 'INTEGER', 'sucursal', 'idsucursal', true, null, null);
        $this->addForeignKey('idalmacendestino', 'Idalmacendestino', 'INTEGER', 'almacen', 'idalmacen', true, null, null);
        $this->addForeignKey('idusuario', 'Idusuario', 'INTEGER', 'usuario', 'idusuario', true, null, null);
        $this->addForeignKey('idauditor', 'Idauditor', 'INTEGER', 'usuario', 'idusuario', false, null, null);
        $this->addForeignKey('idconceptosalida', 'Idconceptosalida', 'INTEGER', 'conceptosalida', 'idconceptosalida', true, null, null);
        $this->addColumn('requisicion_fecha', 'RequisicionFecha', 'TIMESTAMP', true, null, null);
        $this->addColumn('requisicion_fechacreacion', 'RequisicionFechacreacion', 'TIMESTAMP', true, null, null);
        $this->addColumn('requisicion_revisada', 'RequisicionRevisada', 'BOOLEAN', true, 1, null);
        $this->addColumn('requisicion_folio', 'RequisicionFolio', 'VARCHAR', true, 10, null);
        $this->addColumn('requisicion_total', 'RequisicionTotal', 'DECIMAL', false, 15, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('AlmacenRelatedByIdalmacendestino', 'Almacen', RelationMap::MANY_TO_ONE, array('idalmacendestino' => 'idalmacen', ), 'CASCADE', 'CASCADE');
        $this->addRelation('AlmacenRelatedByIdalmacenorigen', 'Almacen', RelationMap::MANY_TO_ONE, array('idalmacenorigen' => 'idalmacen', ), 'CASCADE', 'CASCADE');
        $this->addRelation('UsuarioRelatedByIdauditor', 'Usuario', RelationMap::MANY_TO_ONE, array('idauditor' => 'idusuario', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Conceptosalida', 'Conceptosalida', RelationMap::MANY_TO_ONE, array('idconceptosalida' => 'idconceptosalida', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Empresa', 'Empresa', RelationMap::MANY_TO_ONE, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE');
        $this->addRelation('SucursalRelatedByIdsucursaldestino', 'Sucursal', RelationMap::MANY_TO_ONE, array('idsucursaldestino' => 'idsucursal', ), 'CASCADE', 'CASCADE');
        $this->addRelation('SucursalRelatedByIdsucursalorigen', 'Sucursal', RelationMap::MANY_TO_ONE, array('idsucursalorigen' => 'idsucursal', ), 'CASCADE', 'CASCADE');
        $this->addRelation('UsuarioRelatedByIdusuario', 'Usuario', RelationMap::MANY_TO_ONE, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Requisiciondetalle', 'Requisiciondetalle', RelationMap::ONE_TO_MANY, array('idrequisicion' => 'idrequisicion', ), 'CASCADE', 'CASCADE', 'Requisiciondetalles');
        $this->addRelation('Requisicionnota', 'Requisicionnota', RelationMap::ONE_TO_MANY, array('idrequisicion' => 'idrequisicion', ), 'CASCADE', 'CASCADE', 'Requisicionnotas');
    } // buildRelations()

} // RequisicionTableMap
