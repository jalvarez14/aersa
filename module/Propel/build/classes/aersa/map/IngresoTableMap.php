<?php



/**
 * This class defines the structure of the 'ingreso' table.
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
class IngresoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'aersa.map.IngresoTableMap';

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
        $this->setName('ingreso');
        $this->setPhpName('Ingreso');
        $this->setClassname('Ingreso');
        $this->setPackage('aersa');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idingreso', 'Idingreso', 'INTEGER', true, null, null);
        $this->addForeignKey('idempresa', 'Idempresa', 'INTEGER', 'empresa', 'idempresa', true, null, null);
        $this->addForeignKey('idsucursal', 'Idsucursal', 'INTEGER', 'sucursal', 'idsucursal', true, null, null);
        $this->addForeignKey('idusuario', 'Idusuario', 'INTEGER', 'usuario', 'idusuario', true, null, null);
        $this->addForeignKey('idauditor', 'Idauditor', 'INTEGER', 'usuario', 'idusuario', false, null, null);
        $this->addColumn('ingreso_folio', 'IngresoFolio', 'VARCHAR', true, 10, null);
        $this->addColumn('ingreso_revisada', 'IngresoRevisada', 'BOOLEAN', true, 1, null);
        $this->addColumn('ingreso_totalalimento', 'IngresoTotalalimento', 'DECIMAL', true, 15, null);
        $this->addColumn('ingreso_totalbebida', 'IngresoTotalbebida', 'DECIMAL', true, 15, null);
        $this->addColumn('ingreso_totalmiscelanea', 'IngresoTotalmiscelanea', 'DECIMAL', true, 15, null);
        $this->addColumn('ingreso_fecha', 'IngresoFecha', 'TIMESTAMP', true, null, null);
        $this->addColumn('ingreso_fechacreacion', 'IngresoFechacreacion', 'TIMESTAMP', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('UsuarioRelatedByIdauditor', 'Usuario', RelationMap::MANY_TO_ONE, array('idauditor' => 'idusuario', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Empresa', 'Empresa', RelationMap::MANY_TO_ONE, array('idempresa' => 'idempresa', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Sucursal', 'Sucursal', RelationMap::MANY_TO_ONE, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE');
        $this->addRelation('UsuarioRelatedByIdusuario', 'Usuario', RelationMap::MANY_TO_ONE, array('idusuario' => 'idusuario', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Ingresodetalle', 'Ingresodetalle', RelationMap::ONE_TO_MANY, array('idingreso' => 'idingreso', ), 'CASCADE', 'CASCADE', 'Ingresodetalles');
    } // buildRelations()

} // IngresoTableMap
