<?php



/**
 * This class defines the structure of the 'asamblea' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.map
 */
class AsambleaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.AsambleaTableMap';

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
        $this->setName('asamblea');
        $this->setPhpName('Asamblea');
        $this->setClassname('Asamblea');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_ASAMBLEA', 'IdAsamblea', 'INTEGER', true, 10, null);
        $this->addForeignKey('EJERCICIO_ECONOMICO_ID', 'EjercicioEconomicoId', 'INTEGER', 'ejercicio_economico', 'ID_EJERCICIO_ECONOMICO', true, 10, null);
        $this->addForeignKey('TIPO_ASAMBLEA_ID', 'TipoAsambleaId', 'INTEGER', 'tipo_asamblea', 'ID_TIPO_ASAMBLEA', true, 10, null);
        $this->addColumn('FECHA_DE_ASAMBLEA', 'FechaDeAsamblea', 'DATE', true, null, null);
        $this->addColumn('FECHA_DE_CONVOCATORIA', 'FechaDeConvocatoria', 'DATE', true, null, null);
        $this->addColumn('FECHA_DE_NUEVO_MANDATO', 'FechaDeNuevoMandato', 'DATE', true, null, null);
        $this->addColumn('OBSERVACIONES', 'Observaciones', 'VARCHAR', false, 250, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('EjercicioEconomico', 'EjercicioEconomico', RelationMap::MANY_TO_ONE, array('ejercicio_economico_id' => 'id_ejercicio_economico', ), null, null);
        $this->addRelation('TipoAsamblea', 'TipoAsamblea', RelationMap::MANY_TO_ONE, array('tipo_asamblea_id' => 'id_tipo_asamblea', ), null, 'CASCADE');
    } // buildRelations()

    /**
     *
     * Gets the list of behaviors registered for this table
     *
     * @return array Associative array (name => parameters) of behaviors
     */
    public function getBehaviors()
    {
        return array(
            'symfony' => array('form' => 'true', 'filter' => 'true', ),
            'symfony_behaviors' => array(),
        );
    } // getBehaviors()

} // AsambleaTableMap
