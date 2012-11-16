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
        $this->addColumn('NUMERO_EJERCICIO_ECONOMICO', 'NumeroEjercicioEconomico', 'INTEGER', true, 10, null);
        $this->addForeignKey('PERSONA_JURIDICA_ID', 'PersonaJuridicaId', 'INTEGER', 'persona_juridica', 'ID_PERSONA_JURIDICA', true, 10, null);
        $this->addColumn('FECHA_FIN_EJERCICIO_ECONOMICO', 'FechaFinEjercicioEconomico', 'DATE', true, null, null);
        $this->addColumn('OBSERVACIONES', 'Observaciones', 'LONGVARCHAR', false, null, null);
        $this->addColumn('RESULTADO_ECONOMICO', 'ResultadoEconomico', 'DECIMAL', false, 11, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('PersonaJuridica', 'PersonaJuridica', RelationMap::MANY_TO_ONE, array('persona_juridica_id' => 'id_persona_juridica', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Asamblea', 'Asamblea', RelationMap::ONE_TO_MANY, array('id_ejercicio_economico' => 'ejercicio_economico_id', ), 'CASCADE', 'CASCADE', 'Asambleas');
        $this->addRelation('PersonaComisionDirectiva', 'PersonaComisionDirectiva', RelationMap::ONE_TO_MANY, array('id_ejercicio_economico' => 'ejercicio_economico_id', ), 'CASCADE', 'CASCADE', 'PersonaComisionDirectivas');
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
