<?php



/**
 * This class defines the structure of the 'tipo_direccion' table.
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
class TipoDireccionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.TipoDireccionTableMap';

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
        $this->setName('tipo_direccion');
        $this->setPhpName('TipoDireccion');
        $this->setClassname('TipoDireccion');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_TIPO_DIRECCION', 'IdTipoDireccion', 'INTEGER', true, 10, null);
        $this->addColumn('DESCRIPCION', 'Descripcion', 'VARCHAR', true, 45, null);
        $this->getColumn('DESCRIPCION', false)->setPrimaryString(true);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Direccion', 'Direccion', RelationMap::ONE_TO_MANY, array('id_tipo_direccion' => 'tipo_direccion_id', ), null, 'CASCADE', 'Direccions');
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

} // TipoDireccionTableMap
