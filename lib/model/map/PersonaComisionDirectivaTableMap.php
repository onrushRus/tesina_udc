<?php



/**
 * This class defines the structure of the 'persona_comision_directiva' table.
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
class PersonaComisionDirectivaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.PersonaComisionDirectivaTableMap';

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
        $this->setName('persona_comision_directiva');
        $this->setPhpName('PersonaComisionDirectiva');
        $this->setClassname('PersonaComisionDirectiva');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_PERSONA_COMISION_DIRECTIVA', 'IdPersonaComisionDirectiva', 'INTEGER', true, 10, null);
        $this->addForeignKey('EJERCICIO_ECONOMICO_ID', 'EjercicioEconomicoId', 'INTEGER', 'ejercicio_economico', 'ID_EJERCICIO_ECONOMICO', true, 10, null);
        $this->addForeignKey('PUESTO_ID', 'PuestoId', 'INTEGER', 'puesto_comision_directiva', 'ID_PUESTO_COMISION_DIRECTIVA', true, 10, null);
        $this->addColumn('NOMBRE_Y_APELLIDO', 'NombreYApellido', 'VARCHAR', true, 60, null);
        $this->getColumn('NOMBRE_Y_APELLIDO', false)->setPrimaryString(true);
        $this->addColumn('TELEFONO', 'Telefono', 'VARCHAR', false, 15, null);
        $this->addColumn('EMAIL', 'Email', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('EjercicioEconomico', 'EjercicioEconomico', RelationMap::MANY_TO_ONE, array('ejercicio_economico_id' => 'id_ejercicio_economico', ), null, 'CASCADE');
        $this->addRelation('PuestoComisionDirectiva', 'PuestoComisionDirectiva', RelationMap::MANY_TO_ONE, array('puesto_id' => 'id_puesto_comision_directiva', ), null, 'CASCADE');
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

} // PersonaComisionDirectivaTableMap
