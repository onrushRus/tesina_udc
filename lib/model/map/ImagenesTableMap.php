<?php



/**
 * This class defines the structure of the 'imagenes' table.
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
class ImagenesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.ImagenesTableMap';

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
        $this->setName('imagenes');
        $this->setPhpName('Imagenes');
        $this->setClassname('Imagenes');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_IMAGENES', 'IdImagenes', 'INTEGER', true, 10, null);
        $this->addForeignKey('PERSONA_JURIDICA_ID_PERSONA_JURIDICA', 'PersonaJuridicaIdPersonaJuridica', 'INTEGER', 'persona_juridica', 'ID_PERSONA_JURIDICA', true, 10, null);
        $this->addColumn('DESCRIPCION', 'Descripcion', 'VARCHAR', false, 45, null);
        $this->addColumn('NOMBRE_ARCHIVO', 'NombreArchivo', 'VARCHAR', true, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('PersonaJuridica', 'PersonaJuridica', RelationMap::MANY_TO_ONE, array('persona_juridica_id_persona_juridica' => 'id_persona_juridica', ), 'CASCADE', 'CASCADE');
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

} // ImagenesTableMap
