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
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_PERSONA_JURIDICA', 'IdPersonaJuridica', 'INTEGER', true, 10, null);
        $this->addForeignKey('SITUACION_ID', 'SituacionId', 'INTEGER', 'situacion_persona_juridica', 'ID_SITUACION_PERS_JURIDICA', true, 10, 1);
        $this->addForeignKey('TIPO_PERS_JURIDICA_ID', 'TipoPersJuridicaId', 'INTEGER', 'tipo_persona_juridica', 'ID_TIPO_PERSONA_JURIDICA', true, 10, 1);
        $this->addColumn('CUIT_CUIL', 'CuitCuil', 'DECIMAL', true, 11, null);
        $this->addColumn('NOMBRE_FANTASIA', 'NombreFantasia', 'VARCHAR', true, 45, null);
        $this->getColumn('NOMBRE_FANTASIA', false)->setPrimaryString(true);
        $this->addColumn('FECHA_INICIO_ACTIVIDAD', 'FechaInicioActividad', 'DATE', true, null, null);
        $this->addColumn('RESENIA', 'Resenia', 'VARCHAR', false, 250, null);
        $this->addColumn('LEGAJO', 'Legajo', 'INTEGER', true, 10, null);
        $this->addColumn('MATRICULA', 'Matricula', 'VARCHAR', false, 10, null);
        $this->addColumn('CANTIDAD_DE_SOCIOS', 'CantidadDeSocios', 'INTEGER', true, 10, null);
        $this->addColumn('TELEFONO', 'Telefono', 'VARCHAR', true, 25, null);
        $this->addColumn('EMAIL', 'Email', 'VARCHAR', true, 25, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SituacionPersonaJuridica', 'SituacionPersonaJuridica', RelationMap::MANY_TO_ONE, array('situacion_id' => 'id_situacion_pers_juridica', ), null, 'CASCADE');
        $this->addRelation('TipoPersonaJuridica', 'TipoPersonaJuridica', RelationMap::MANY_TO_ONE, array('tipo_pers_juridica_id' => 'id_tipo_persona_juridica', ), null, 'CASCADE');
        $this->addRelation('ActividadPersJuridica', 'ActividadPersJuridica', RelationMap::ONE_TO_MANY, array('id_persona_juridica' => 'persona_juridica_id', ), 'CASCADE', 'CASCADE', 'ActividadPersJuridicas');
        $this->addRelation('Aporte', 'Aporte', RelationMap::ONE_TO_MANY, array('id_persona_juridica' => 'persona_juridica_id', ), 'CASCADE', 'CASCADE', 'Aportes');
        $this->addRelation('Direccion', 'Direccion', RelationMap::ONE_TO_MANY, array('id_persona_juridica' => 'persona_juridica_id', ), 'CASCADE', 'CASCADE', 'Direccions');
        $this->addRelation('EjercicioEconomico', 'EjercicioEconomico', RelationMap::ONE_TO_MANY, array('id_persona_juridica' => 'persona_juridica_id', ), 'CASCADE', 'CASCADE', 'EjercicioEconomicos');
        $this->addRelation('EnteAlerta', 'EnteAlerta', RelationMap::ONE_TO_MANY, array('id_persona_juridica' => 'ente_id', ), 'CASCADE', 'CASCADE', 'EnteAlertas');
        $this->addRelation('Estatuto', 'Estatuto', RelationMap::ONE_TO_MANY, array('id_persona_juridica' => 'persona_juridica_id', ), 'CASCADE', 'CASCADE', 'Estatutos');
        $this->addRelation('Imagenes', 'Imagenes', RelationMap::ONE_TO_MANY, array('id_persona_juridica' => 'persona_juridica_id_persona_juridica', ), 'CASCADE', 'CASCADE', 'Imageness');
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
