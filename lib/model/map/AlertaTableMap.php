<?php



/**
 * This class defines the structure of the 'alerta' table.
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
class AlertaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.AlertaTableMap';

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
        $this->setName('alerta');
        $this->setPhpName('Alerta');
        $this->setClassname('Alerta');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_TIPO_ALERTA', 'IdTipoAlerta', 'INTEGER', true, 10, null);
        $this->addColumn('TIPO_ALERTA', 'TipoAlerta', 'INTEGER', true, 10, null);
        $this->addColumn('DIAS_PARA_AVISO', 'DiasParaAviso', 'INTEGER', true, 10, 15);
        $this->addColumn('CUERPO_MENSAJE', 'CuerpoMensaje', 'LONGVARCHAR', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('EnteAlerta', 'EnteAlerta', RelationMap::ONE_TO_MANY, array('id_tipo_alerta' => 'alerta_id', ), 'CASCADE', 'CASCADE', 'EnteAlertas');
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

} // AlertaTableMap
