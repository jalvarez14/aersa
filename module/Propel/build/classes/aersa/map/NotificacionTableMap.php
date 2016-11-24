<?php



/**
 * This class defines the structure of the 'notificacion' table.
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
class NotificacionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.NotificacionTableMap';

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
        $this->setName('notificacion');
        $this->setPhpName('Notificacion');
        $this->setClassname('Notificacion');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idnotificacion', 'Idnotificacion', 'INTEGER', true, null, null);
        $this->addColumn('notificacion_proceso', 'NotificacionProceso', 'CHAR', true, null, null);
        $this->getColumn('notificacion_proceso', false)->setValueSet(array (
  0 => 'cierresemana',
  1 => 'compra',
  2 => 'requisicion',
  3 => 'tablajeria',
  4 => 'credito',
  5 => 'devolucion',
  6 => 'consignacion',
  7 => 'ingresos',
  8 => 'venta',
  9 => 'ajustesinventarios',
));
        $this->addForeignKey('idempresa', 'Idempresa', 'INTEGER', 'empresa', 'idempresa', true, null, null);
        $this->addColumn('idproceso', 'Idproceso', 'INTEGER', true, null, null);
        $this->addForeignKey('idsucursal', 'Idsucursal', 'INTEGER', 'sucursal', 'idsucursal', true, null, null);
        $this->addColumn('rol1', 'Rol1', 'BOOLEAN', true, 1, false);
        $this->addColumn('rol2', 'Rol2', 'BOOLEAN', true, 1, false);
        $this->addColumn('rol3', 'Rol3', 'BOOLEAN', true, 1, false);
        $this->addColumn('rol4', 'Rol4', 'BOOLEAN', true, 1, false);
        $this->addColumn('rol5', 'Rol5', 'BOOLEAN', true, 1, false);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Empresa', 'Empresa', RelationMap::MANY_TO_ONE, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Sucursal', 'Sucursal', RelationMap::MANY_TO_ONE, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // NotificacionTableMap
