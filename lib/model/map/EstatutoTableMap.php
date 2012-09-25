<?php



/**
 * This class defines the structure of the 'estatuto' table.
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
class EstatutoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.EstatutoTableMap';

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
        $this->setName('estatuto');
        $this->setPhpName('Estatuto');
        $this->setClassname('Estatuto');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_ESTATUTO', 'IdEstatuto', 'INTEGER', true, 10, null);
        $this->addForeignKey('PERSONA_JURIDICA_ID', 'PersonaJuridicaId', 'INTEGER', 'persona_juridica', 'ID_PERSONA_JURIDICA', true, 10, null);
        $this->addColumn('DURACION_EJERCICIO_ECONOMICO', 'DuracionEjercicioEconomico', 'INTEGER', true, null, null);
        $this->addColumn('DIAS_PARA_FECHA_TOPE_ASAMBLEA', 'DiasParaFechaTopeAsamblea', 'INTEGER', true, 10, null);
        $this->addColumn('DIAS_PARA_FECHA_TOPE_CONVOCATORIA', 'DiasParaFechaTopeConvocatoria', 'INTEGER', true, 10, null);
        $this->addColumn('DIAS_PARA_FECHA_TOPE_NUEVO_MANDATO', 'DiasParaFechaTopeNuevoMandato', 'INTEGER', true, 10, null);
        $this->addColumn('ESTATUTO_PDF', 'EstatutoPdf', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('PersonaJuridica', 'PersonaJuridica', RelationMap::MANY_TO_ONE, array('persona_juridica_id' => 'id_persona_juridica', ), 'CASCADE', 'CASCADE');
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

} // EstatutoTableMap
