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
  0 => 'compra',
  1 => 'requisicion',
  2 => 'tablajeria',
  3 => 'credito',
  4 => 'devolucion',
  5 => 'consignacion',
  6 => 'ingresos',
  7 => 'venta',
  8 => 'ajustesinventarios',
));
        $this->addColumn('idproceso', 'Idproceso', 'INTEGER', true, null, null);
        $this->addColumn('rol1', 'Rol1', 'BOOLEAN', true, 1, false);
        $this->addColumn('rol2', 'Rol2', 'BOOLEAN', true, 1, false);
        $this->addColumn('rol3', 'Rol3', 'BOOLEAN', true, 1, false);
        $this->addColumn('rol4', 'Rol4', 'BOOLEAN', true, 1, false);
        $this->addColumn('rol5', 'Rol5', 'BOOLEAN', true, 1, false);
        $this->addColumn('idsucursal', 'Idsucursal', 'INTEGER', true, null, null);
        $this->addColumn('idempresa', 'Idempresa', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // NotificacionTableMap
