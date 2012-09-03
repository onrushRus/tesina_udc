<?php



/**
 * This class defines the structure of the 'ejercicio_economico' table.
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
class EjercicioEconomicoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.EjercicioEconomicoTableMap';

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
        $this->setName('ejercicio_economico');
        $this->setPhpName('EjercicioEconomico');
        $this->setClassname('EjercicioEconomico');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_EJERCICIO_ECONOMICO', 'IdEjercicioEconomico', 'INTEGER', true, 10, null);
        $this->addColumn('FECHA_INICIO', 'FechaInicio', 'DATE', true, null, null);
        $this->addColumn('FECHA_FIN', 'FechaFin', 'DATE', true, null, null);
        $this->addColumn('PRESIDENTE', 'Presidente', 'VARCHAR', false, 45, null);
        $this->addColumn('SECRETARIO', 'Secretario', 'VARCHAR', false, 45, null);
        $this->addColumn('TESORERO', 'Tesorero', 'VARCHAR', false, 45, null);
        $this->addColumn('SINDICO', 'Sindico', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('PersonaJuridica', 'PersonaJuridica', RelationMap::ONE_TO_MANY, array('id_ejercicio_economico' => 'ejercicio_economico_id', ), null, null, 'PersonaJuridicas');
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

} // EjercicioEconomicoTableMap
