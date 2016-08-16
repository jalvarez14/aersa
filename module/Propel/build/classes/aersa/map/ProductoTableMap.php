<?php



/**
 * This class defines the structure of the 'producto' table.
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
class ProductoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.ProductoTableMap';

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
        $this->setName('producto');
        $this->setPhpName('Producto');
        $this->setClassname('Producto');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idproducto', 'Idproducto', 'INTEGER', true, null, null);
        $this->addForeignKey('idempresa', 'Idempresa', 'INTEGER', 'empresa', 'idempresa', true, null, null);
        $this->addForeignKey('idunidadmedida', 'Idunidadmedida', 'INTEGER', 'unidadmedida', 'idunidadmedida', true, null, null);
        $this->addColumn('producto_nombre', 'ProductoNombre', 'LONGVARCHAR', true, null, null);
        $this->addForeignKey('idcategoria', 'Idcategoria', 'INTEGER', 'categoria', 'idcategoria', false, null, null);
        $this->addForeignKey('idsubcategoria', 'Idsubcategoria', 'INTEGER', 'categoria', 'idcategoria', false, null, null);
        $this->addColumn('producto_rendimiento', 'ProductoRendimiento', 'FLOAT', false, null, null);
        $this->addColumn('producto_ultimocosto', 'ProductoUltimocosto', 'FLOAT', false, null, null);
        $this->addColumn('producto_baja', 'ProductoBaja', 'BOOLEAN', true, 1, false);
        $this->addColumn('producto_tipo', 'ProductoTipo', 'CHAR', true, null, null);
        $this->getColumn('producto_tipo', false)->setValueSet(array (
  0 => 'simple',
  1 => 'subreceta',
  2 => 'plu',
));
        $this->addColumn('producto_costo', 'ProductoCosto', 'FLOAT', false, null, null);
        $this->addColumn('producto_iva', 'ProductoIva', 'BOOLEAN', true, 1, null);
        $this->addColumn('producto_precio', 'ProductoPrecio', 'FLOAT', false, null, null);
        $this->addColumn('producto_rendimientooriginal', 'ProductoRendimientooriginal', 'FLOAT', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CategoriaRelatedByIdcategoria', 'Categoria', RelationMap::MANY_TO_ONE, array('idcategoria' => 'idcategoria', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Empresa', 'Empresa', RelationMap::MANY_TO_ONE, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE');
        $this->addRelation('CategoriaRelatedByIdsubcategoria', 'Categoria', RelationMap::MANY_TO_ONE, array('idsubcategoria' => 'idcategoria', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Unidadmedida', 'Unidadmedida', RelationMap::MANY_TO_ONE, array('idunidadmedida' => 'idunidadmedida', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Ajusteinventario', 'Ajusteinventario', RelationMap::ONE_TO_MANY, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE', 'Ajusteinventarios');
        $this->addRelation('Codigobarras', 'Codigobarras', RelationMap::ONE_TO_MANY, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE', 'Codigobarrass');
        $this->addRelation('Compradetalle', 'Compradetalle', RelationMap::ONE_TO_MANY, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE', 'Compradetalles');
        $this->addRelation('Conceptoscfdi', 'Conceptoscfdi', RelationMap::ONE_TO_MANY, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE', 'Conceptoscfdis');
        $this->addRelation('Devoluciondetalle', 'Devoluciondetalle', RelationMap::ONE_TO_MANY, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE', 'Devoluciondetalles');
        $this->addRelation('Notacreditodetalle', 'Notacreditodetalle', RelationMap::ONE_TO_MANY, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE', 'Notacreditodetalles');
        $this->addRelation('Ordentablajeria', 'Ordentablajeria', RelationMap::ONE_TO_MANY, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE', 'Ordentablajerias');
        $this->addRelation('Ordentablajeriadetalle', 'Ordentablajeriadetalle', RelationMap::ONE_TO_MANY, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE', 'Ordentablajeriadetalles');
        $this->addRelation('Plantillatablajeria', 'Plantillatablajeria', RelationMap::ONE_TO_MANY, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE', 'Plantillatablajerias');
        $this->addRelation('Plantillatablajeriadetalle', 'Plantillatablajeriadetalle', RelationMap::ONE_TO_MANY, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE', 'Plantillatablajeriadetalles');
        $this->addRelation('Productocfdi', 'Productocfdi', RelationMap::ONE_TO_MANY, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE', 'Productocfdis');
        $this->addRelation('Productosucursalalmacen', 'Productosucursalalmacen', RelationMap::ONE_TO_MANY, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE', 'Productosucursalalmacens');
        $this->addRelation('RecetaRelatedByIdproducto', 'Receta', RelationMap::ONE_TO_MANY, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE', 'RecetasRelatedByIdproducto');
        $this->addRelation('RecetaRelatedByIdproductoreceta', 'Receta', RelationMap::ONE_TO_MANY, array('idproducto' => 'idproductoreceta', ), 'CASCADE', 'CASCADE', 'RecetasRelatedByIdproductoreceta');
        $this->addRelation('Requisiciondetalle', 'Requisiciondetalle', RelationMap::ONE_TO_MANY, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE', 'Requisiciondetalles');
        $this->addRelation('Ventadetalle', 'Ventadetalle', RelationMap::ONE_TO_MANY, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE', 'Ventadetalles');
    } // buildRelations()

} // ProductoTableMap
