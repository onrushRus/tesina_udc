<?php



/**
 * This class defines the structure of the 'tipo_asamblea' table.
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
class TipoAsambleaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.TipoAsambleaTableMap';

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
        $this->setName('tipo_asamblea');
        $this->setPhpName('TipoAsamblea');
        $this->setClassname('TipoAsamblea');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_TIPO_ASAMBLEA', 'IdTipoAsamblea', 'INTEGER', true, 10, null);
        $this->addColumn('TIPO_ASAMBLEA', 'TipoAsamblea', 'VARCHAR', true, 45, null);
        $this->getColumn('TIPO_ASAMBLEA', false)->setPrimaryString(true);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Asamblea', 'Asamblea', RelationMap::ONE_TO_MANY, array('id_tipo_asamblea' => 'tipo_asamblea_id', ), null, 'CASCADE', 'Asambleas');
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

} // TipoAsambleaTableMap
