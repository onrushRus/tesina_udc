<?php



/**
 * This class defines the structure of the 'persona' table.
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
class PersonaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.PersonaTableMap';

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
        $this->setName('persona');
        $this->setPhpName('Persona');
        $this->setClassname('Persona');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_PERSONA', 'IdPersona', 'INTEGER', true, 10, null);
        $this->addForeignKey('ESTADO_ID', 'EstadoId', 'INTEGER', 'estado_persona', 'ID_ESTADO_PERSONA', true, 1, null);
        $this->addForeignKey('DIRECCION_POSTAL_ID', 'DireccionPostalId', 'INTEGER', 'direccion', 'ID_DIRECCION', true, 10, null);
        $this->addForeignKey('DIRECCION_REAL_ID', 'DireccionRealId', 'INTEGER', 'direccion', 'ID_DIRECCION', true, 10, null);
        $this->addColumn('CUIT_CUIL', 'CuitCuil', 'INTEGER', true, null, null);
        $this->addColumn('ID', 'Id', 'VARCHAR', false, 255, null);
        $this->getColumn('ID', false)->setPrimaryString(true);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('EstadoPersona', 'EstadoPersona', RelationMap::MANY_TO_ONE, array('estado_id' => 'id_estado_persona', ), null, null);
        $this->addRelation('DireccionRelatedByDireccionPostalId', 'Direccion', RelationMap::MANY_TO_ONE, array('direccion_postal_id' => 'id_direccion', ), null, null);
        $this->addRelation('DireccionRelatedByDireccionRealId', 'Direccion', RelationMap::MANY_TO_ONE, array('direccion_real_id' => 'id_direccion', ), null, null);
        $this->addRelation('PersonaFisica', 'PersonaFisica', RelationMap::ONE_TO_ONE, array('id_persona' => 'persona_id', ), null, null);
        $this->addRelation('PersonaJuridica', 'PersonaJuridica', RelationMap::ONE_TO_ONE, array('id_persona' => 'persona_id', ), null, null);
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

} // PersonaTableMap
