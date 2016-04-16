<?php



/**
 * This class defines the structure of the 'proveedor' table.
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
class ProveedorTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.ProveedorTableMap';

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
        $this->setName('proveedor');
        $this->setPhpName('Proveedor');
        $this->setClassname('Proveedor');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idproveedor', 'Idproveedor', 'INTEGER', true, null, null);
        $this->addForeignKey('idempresa', 'Idempresa', 'INTEGER', 'empresa', 'idempresa', true, null, null);
        $this->addColumn('proveedor_nombrecomercial', 'ProveedorNombrecomercial', 'VARCHAR', true, 255, null);
        $this->addColumn('proveedor_razonsocial', 'ProveedorRazonsocial', 'VARCHAR', true, 255, null);
        $this->addColumn('proveedor_RFC', 'ProveedorRfc', 'VARCHAR', true, 45, null);
        $this->addColumn('proveedor_telefono', 'ProveedorTelefono', 'VARCHAR', true, 45, null);
        $this->addColumn('proveedor_calle', 'ProveedorCalle', 'VARCHAR', false, 45, null);
        $this->addColumn('proveedor_numero', 'ProveedorNumero', 'VARCHAR', false, 45, null);
        $this->addColumn('proveedor_interior', 'ProveedorInterior', 'VARCHAR', false, 45, null);
        $this->addColumn('proveedor_colonia', 'ProveedorColonia', 'VARCHAR', false, 45, null);
        $this->addColumn('proveedor_ciudad', 'ProveedorCiudad', 'VARCHAR', false, 45, null);
        $this->addColumn('proveedor_estado', 'ProveedorEstado', 'VARCHAR', false, 45, null);
        $this->addColumn('proveedor_codigopostal', 'ProveedorCodigopostal', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Empresa', 'Empresa', RelationMap::MANY_TO_ONE, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Compra', 'Compra', RelationMap::ONE_TO_MANY, array('idproveedor' => 'idproveedor', ), 'CASCADE', 'CASCADE', 'Compras');
    } // buildRelations()

} // ProveedorTableMap
