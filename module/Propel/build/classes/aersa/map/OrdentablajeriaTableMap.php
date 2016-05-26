<?php



/**
 * This class defines the structure of the 'ordentablajeria' table.
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
class OrdentablajeriaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.OrdentablajeriaTableMap';

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
        $this->setName('ordentablajeria');
        $this->setPhpName('Ordentablajeria');
        $this->setClassname('Ordentablajeria');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idordentablajeria', 'Idordentablajeria', 'INTEGER', true, null, null);
        $this->addForeignKey('idempresa', 'Idempresa', 'INTEGER', 'empresa', 'idempresa', true, null, null);
        $this->addForeignKey('idsucursal', 'Idsucursal', 'INTEGER', 'sucursal', 'idsucursal', true, null, null);
        $this->addForeignKey('idalmacenorigen', 'Idalmacenorigen', 'INTEGER', 'almacen', 'idalmacen', true, null, null);
        $this->addForeignKey('idalmacendestino', 'Idalmacendestino', 'INTEGER', 'almacen', 'idalmacen', true, null, null);
        $this->addForeignKey('idusuario', 'Idusuario', 'INTEGER', 'usuario', 'idusuario', true, null, null);
        $this->addForeignKey('idauditor', 'Idauditor', 'INTEGER', 'usuario', 'idusuario', false, null, null);
        $this->addForeignKey('idproducto', 'Idproducto', 'INTEGER', 'producto', 'idproducto', true, null, null);
        $this->addColumn('ordentablajeria_esporcion', 'OrdentablajeriaEsporcion', 'BOOLEAN', true, 1, null);
        $this->addColumn('ordentablajeria_numeroporciones', 'OrdentablajeriaNumeroporciones', 'FLOAT', false, null, null);
        $this->addColumn('ordentablajeria_pesobruto', 'OrdentablajeriaPesobruto', 'FLOAT', true, null, null);
        $this->addColumn('ordentablajeria_preciokilo', 'OrdentablajeriaPreciokilo', 'DECIMAL', true, 15, null);
        $this->addColumn('ordentablajeria_totalbruto', 'OrdentablajeriaTotalbruto', 'DECIMAL', false, 15, null);
        $this->addColumn('ordentablajeria_pesoneto', 'OrdentablajeriaPesoneto', 'FLOAT', true, null, null);
        $this->addColumn('ordentablajeria_precioneto', 'OrdentablajeriaPrecioneto', 'DECIMAL', true, 15, null);
        $this->addColumn('ordentablajeria_inyeccion', 'OrdentablajeriaInyeccion', 'FLOAT', false, null, null);
        $this->addColumn('ordentablajeria_merma', 'OrdentablajeriaMerma', 'FLOAT', true, null, null);
        $this->addColumn('ordentablajeria_aprovechamiento', 'OrdentablajeriaAprovechamiento', 'FLOAT', true, null, null);
        $this->addColumn('ordentablajeria_revisada', 'OrdentablajeriaRevisada', 'BOOLEAN', true, 1, false);
        $this->addColumn('ordentablajeria_folio', 'OrdentablajeriaFolio', 'VARCHAR', true, 10, null);
        $this->addColumn('ordentablajeria_fecha', 'OrdentablajeriaFecha', 'TIMESTAMP', true, null, null);
        $this->addColumn('ordentablajeria_fechacreacion', 'OrdentablajeriaFechacreacion', 'TIMESTAMP', true, null, null);
        $this->addColumn('ordentablajeria_pesoporcion', 'OrdentablajeriaPesoporcion', 'FLOAT', false, null, null);
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
        $this->addRelation('Empresa', 'Empresa', RelationMap::MANY_TO_ONE, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Producto', 'Producto', RelationMap::MANY_TO_ONE, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Sucursal', 'Sucursal', RelationMap::MANY_TO_ONE, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE');
        $this->addRelation('UsuarioRelatedByIdusuario', 'Usuario', RelationMap::MANY_TO_ONE, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Ordentablajeriadetalle', 'Ordentablajeriadetalle', RelationMap::ONE_TO_MANY, array('idordentablajeria' => 'idordentablajeria', ), 'CASCADE', 'CASCADE', 'Ordentablajeriadetalles');
        $this->addRelation('Ordentablajerianota', 'Ordentablajerianota', RelationMap::ONE_TO_MANY, array('idordentablajeria' => 'idordentablajeria', ), 'CASCADE', 'CASCADE', 'Ordentablajerianotas');
    } // buildRelations()

} // OrdentablajeriaTableMap
