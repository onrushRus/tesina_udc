<?php



/**
 * This class defines the structure of the 'direccion' table.
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
class DireccionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.DireccionTableMap';

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
        $this->setName('direccion');
        $this->setPhpName('Direccion');
        $this->setClassname('Direccion');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_DIRECCION', 'IdDireccion', 'INTEGER', true, 10, null);
        $this->getColumn('ID_DIRECCION', false)->setPrimaryString(true);
        $this->addForeignKey('LOCALIDAD_ID', 'LocalidadId', 'INTEGER', 'localidad', 'ID_LOCALIDAD', true, 10, null);
        $this->addColumn('CALLE', 'Calle', 'VARCHAR', true, 45, null);
        $this->addColumn('NUMERO', 'Numero', 'VARCHAR', true, 10, null);
        $this->addColumn('PISO', 'Piso', 'VARCHAR', false, 5, null);
        $this->addColumn('DEPARTAMENTO', 'Departamento', 'VARCHAR', false, 5, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Localidad', 'Localidad', RelationMap::MANY_TO_ONE, array('localidad_id' => 'id_localidad', ), null, null);
        $this->addRelation('PersonaRelatedByDireccionPostalId', 'Persona', RelationMap::ONE_TO_MANY, array('id_direccion' => 'direccion_postal_id', ), null, null, 'PersonasRelatedByDireccionPostalId');
        $this->addRelation('PersonaRelatedByDireccionRealId', 'Persona', RelationMap::ONE_TO_MANY, array('id_direccion' => 'direccion_real_id', ), null, null, 'PersonasRelatedByDireccionRealId');
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

} // DireccionTableMap
