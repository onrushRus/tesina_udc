<?php



/**
 * This class defines the structure of the 'actividad_pers_juridica' table.
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
class ActividadPersJuridicaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.ActividadPersJuridicaTableMap';

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
        $this->setName('actividad_pers_juridica');
        $this->setPhpName('ActividadPersJuridica');
        $this->setClassname('ActividadPersJuridica');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('ACTIVIDAD_ID', 'ActividadId', 'INTEGER' , 'actividad', 'ID_ACTIVIDAD', true, 10, null);
        $this->addForeignPrimaryKey('PERSONA_JURIDICA_ID', 'PersonaJuridicaId', 'INTEGER' , 'persona_juridica', 'ID_PERSONA_JURIDICA', true, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Actividad', 'Actividad', RelationMap::MANY_TO_ONE, array('actividad_id' => 'id_actividad', ), null, null);
        $this->addRelation('PersonaJuridica', 'PersonaJuridica', RelationMap::MANY_TO_ONE, array('persona_juridica_id' => 'id_persona_juridica', ), null, null);
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

} // ActividadPersJuridicaTableMap
