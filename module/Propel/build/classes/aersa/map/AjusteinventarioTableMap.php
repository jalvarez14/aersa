<?php



/**
 * This class defines the structure of the 'ajusteinventario' table.
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
class AjusteinventarioTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.AjusteinventarioTableMap';

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
        $this->setName('ajusteinventario');
        $this->setPhpName('Ajusteinventario');
        $this->setClassname('Ajusteinventario');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idajusteinventario', 'Idajusteinventario', 'INTEGER', true, null, null);
        $this->addForeignKey('idempresa', 'Idempresa', 'INTEGER', 'empresa', 'idempresa', true, null, null);
        $this->addForeignKey('idsucursal', 'Idsucursal', 'INTEGER', 'sucursal', 'idsucursal', true, null, null);
        $this->addForeignKey('idalmacen', 'Idalmacen', 'INTEGER', 'almacen', 'idalmacen', true, null, null);
        $this->addForeignKey('idproducto', 'Idproducto', 'INTEGER', 'producto', 'idproducto', true, null, null);
        $this->addForeignKey('idusuario', 'Idusuario', 'INTEGER', 'usuario', 'idusuario', true, null, null);
        $this->addColumn('ajusteinventario_cantidad', 'AjusteinventarioCantidad', 'DECIMAL', true, 10, null);
        $this->addColumn('ajusteinventario_comentario', 'AjusteinventarioComentario', 'LONGVARCHAR', false, null, null);
        $this->addColumn('ajusteinventario_fecha', 'AjusteinventarioFecha', 'TIMESTAMP', true, null, null);
        $this->addColumn('ajusteinventario_tipo', 'AjusteinventarioTipo', 'CHAR', true, null, null);
        $this->getColumn('ajusteinventario_tipo', false)->setValueSet(array (
  0 => 'sobrante',
  1 => 'faltante',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Almacen', 'Almacen', RelationMap::MANY_TO_ONE, array('idalmacen' => 'idalmacen', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Empresa', 'Empresa', RelationMap::MANY_TO_ONE, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Producto', 'Producto', RelationMap::MANY_TO_ONE, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Sucursal', 'Sucursal', RelationMap::MANY_TO_ONE, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Usuario', 'Usuario', RelationMap::MANY_TO_ONE, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Ajusteinventarionota', 'Ajusteinventarionota', RelationMap::ONE_TO_MANY, array('idajusteinventario' => 'idajusteinventario', ), 'CASCADE', 'CASCADE', 'Ajusteinventarionotas');
    } // buildRelations()

} // AjusteinventarioTableMap
