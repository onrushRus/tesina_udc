<?php



/**
 * This class defines the structure of the 'ente_alerta' table.
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
class EnteAlertaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.EnteAlertaTableMap';

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
        $this->setName('ente_alerta');
        $this->setPhpName('EnteAlerta');
        $this->setClassname('EnteAlerta');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_ENTE_ALERTA', 'IdEnteAlerta', 'INTEGER', true, 10, null);
        $this->addForeignKey('ENTE_ID', 'EnteId', 'INTEGER', 'persona_juridica', 'ID_PERSONA_JURIDICA', true, 10, null);
        $this->addForeignKey('ALERTA_ID', 'AlertaId', 'INTEGER', 'alerta', 'ID_TIPO_ALERTA', true, 10, null);
        $this->addColumn('FECHA_ENVIO', 'FechaEnvio', 'DATE', true, null, null);
        $this->addColumn('USUARIO', 'Usuario', 'VARCHAR', true, 20, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('PersonaJuridica', 'PersonaJuridica', RelationMap::MANY_TO_ONE, array('ente_id' => 'id_persona_juridica', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Alerta', 'Alerta', RelationMap::MANY_TO_ONE, array('alerta_id' => 'id_tipo_alerta', ), 'CASCADE', 'CASCADE');
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

} // EnteAlertaTableMap
