<?php



/**
 * This class defines the structure of the 'aporte' table.
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
class AporteTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.AporteTableMap';

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
        $this->setName('aporte');
        $this->setPhpName('Aporte');
        $this->setClassname('Aporte');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_APORTE', 'IdAporte', 'INTEGER', true, 10, null);
        $this->addForeignKey('PERSONA_JURIDICA_ID', 'PersonaJuridicaId', 'INTEGER', 'persona_juridica', 'ID_PERSONA_JURIDICA', true, 10, null);
        $this->addForeignKey('TIPO_APORTE_ID', 'TipoAporteId', 'INTEGER', 'tipo_aporte', 'ID_TIPO_APORTE', true, 10, null);
        $this->addColumn('FECHA_APORTE', 'FechaAporte', 'DATE', true, null, null);
        $this->addColumn('MONTO_APORTE', 'MontoAporte', 'DECIMAL', true, null, null);
        $this->addColumn('NUMERO_EXPEDIENTE', 'NumeroExpediente', 'VARCHAR', true, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('PersonaJuridica', 'PersonaJuridica', RelationMap::MANY_TO_ONE, array('persona_juridica_id' => 'id_persona_juridica', ), null, 'CASCADE');
        $this->addRelation('TipoAporte', 'TipoAporte', RelationMap::MANY_TO_ONE, array('tipo_aporte_id' => 'id_tipo_aporte', ), null, null);
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

} // AporteTableMap
