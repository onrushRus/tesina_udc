<?php



/**
 * This class defines the structure of the 'persona_juridica' table.
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
class PersonaJuridicaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.PersonaJuridicaTableMap';

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
        $this->setName('persona_juridica');
        $this->setPhpName('PersonaJuridica');
        $this->setClassname('PersonaJuridica');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('PERSONA_ID', 'PersonaId', 'INTEGER' , 'persona', 'ID_PERSONA', true, 10, null);
        $this->addForeignKey('SITUACION_ID', 'SituacionId', 'INTEGER', 'situacion_persona_juridica', 'ID_SITUACION_PERS_JURIDICA', true, 10, null);
        $this->addForeignKey('TIPO_PERS_JURIDICA_ID', 'TipoPersJuridicaId', 'INTEGER', 'tipo_persona_juridica', 'ID_TIPO_PERSONA_JURIDICA', true, 10, null);
        $this->addColumn('NOMBRE_FANTASIA', 'NombreFantasia', 'VARCHAR', true, 45, null);
        $this->addColumn('FECHA_INICIO_ACTIVIDAD', 'FechaInicioActividad', 'TIMESTAMP', true, null, null);
        $this->addColumn('RESENIA', 'Resenia', 'VARCHAR', false, 250, null);
        $this->addColumn('LEGAJO', 'Legajo', 'INTEGER', true, 10, null);
        $this->addColumn('MATRICULA', 'Matricula', 'INTEGER', true, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Persona', 'Persona', RelationMap::MANY_TO_ONE, array('persona_id' => 'id_persona', ), null, null);
        $this->addRelation('SituacionPersonaJuridica', 'SituacionPersonaJuridica', RelationMap::MANY_TO_ONE, array('situacion_id' => 'id_situacion_pers_juridica', ), null, null);
        $this->addRelation('TipoPersonaJuridica', 'TipoPersonaJuridica', RelationMap::MANY_TO_ONE, array('tipo_pers_juridica_id' => 'id_tipo_persona_juridica', ), null, null);
        $this->addRelation('ActividadPersJuridica', 'ActividadPersJuridica', RelationMap::ONE_TO_MANY, array('persona_id' => 'persona_juridica_id', ), null, null, 'ActividadPersJuridicas');
        $this->addRelation('EjercicioEconomico', 'EjercicioEconomico', RelationMap::ONE_TO_MANY, array('persona_id' => 'persona_juridica_id', ), null, null, 'EjercicioEconomicos');
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

} // PersonaJuridicaTableMap
