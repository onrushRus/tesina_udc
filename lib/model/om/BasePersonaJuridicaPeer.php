<?php


/**
 * Base static class for performing query and update operations on the 'persona_juridica' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePersonaJuridicaPeer {

    /** the default database name for this class */
    const DATABASE_NAME = 'propel';

    /** the table name for this class */
    const TABLE_NAME = 'persona_juridica';

    /** the related Propel class for this table */
    const OM_CLASS = 'PersonaJuridica';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PersonaJuridicaTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 12;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 12;

    /** the column name for the ID_PERSONA_JURIDICA field */
    const ID_PERSONA_JURIDICA = 'persona_juridica.ID_PERSONA_JURIDICA';

    /** the column name for the SITUACION_ID field */
    const SITUACION_ID = 'persona_juridica.SITUACION_ID';

    /** the column name for the TIPO_PERS_JURIDICA_ID field */
    const TIPO_PERS_JURIDICA_ID = 'persona_juridica.TIPO_PERS_JURIDICA_ID';

    /** the column name for the CUIT_CUIL field */
    const CUIT_CUIL = 'persona_juridica.CUIT_CUIL';

    /** the column name for the NOMBRE_FANTASIA field */
    const NOMBRE_FANTASIA = 'persona_juridica.NOMBRE_FANTASIA';

    /** the column name for the FECHA_INICIO_ACTIVIDAD field */
    const FECHA_INICIO_ACTIVIDAD = 'persona_juridica.FECHA_INICIO_ACTIVIDAD';

    /** the column name for the RESENIA field */
    const RESENIA = 'persona_juridica.RESENIA';

    /** the column name for the LEGAJO field */
    const LEGAJO = 'persona_juridica.LEGAJO';

    /** the column name for the MATRICULA field */
    const MATRICULA = 'persona_juridica.MATRICULA';

    /** the column name for the CANTIDAD_DE_SOCIOS field */
    const CANTIDAD_DE_SOCIOS = 'persona_juridica.CANTIDAD_DE_SOCIOS';

    /** the column name for the TELEFONO field */
    const TELEFONO = 'persona_juridica.TELEFONO';

    /** the column name for the EMAIL field */
    const EMAIL = 'persona_juridica.EMAIL';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of PersonaJuridica objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array PersonaJuridica[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdPersonaJuridica', 'SituacionId', 'TipoPersJuridicaId', 'CuitCuil', 'NombreFantasia', 'FechaInicioActividad', 'Resenia', 'Legajo', 'Matricula', 'CantidadDeSocios', 'Telefono', 'Email', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idPersonaJuridica', 'situacionId', 'tipoPersJuridicaId', 'cuitCuil', 'nombreFantasia', 'fechaInicioActividad', 'resenia', 'legajo', 'matricula', 'cantidadDeSocios', 'telefono', 'email', ),
        BasePeer::TYPE_COLNAME => array (self::ID_PERSONA_JURIDICA, self::SITUACION_ID, self::TIPO_PERS_JURIDICA_ID, self::CUIT_CUIL, self::NOMBRE_FANTASIA, self::FECHA_INICIO_ACTIVIDAD, self::RESENIA, self::LEGAJO, self::MATRICULA, self::CANTIDAD_DE_SOCIOS, self::TELEFONO, self::EMAIL, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_PERSONA_JURIDICA', 'SITUACION_ID', 'TIPO_PERS_JURIDICA_ID', 'CUIT_CUIL', 'NOMBRE_FANTASIA', 'FECHA_INICIO_ACTIVIDAD', 'RESENIA', 'LEGAJO', 'MATRICULA', 'CANTIDAD_DE_SOCIOS', 'TELEFONO', 'EMAIL', ),
        BasePeer::TYPE_FIELDNAME => array ('id_persona_juridica', 'situacion_id', 'tipo_pers_juridica_id', 'cuit_cuil', 'nombre_fantasia', 'fecha_inicio_actividad', 'resenia', 'legajo', 'matricula', 'cantidad_de_socios', 'telefono', 'email', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdPersonaJuridica' => 0, 'SituacionId' => 1, 'TipoPersJuridicaId' => 2, 'CuitCuil' => 3, 'NombreFantasia' => 4, 'FechaInicioActividad' => 5, 'Resenia' => 6, 'Legajo' => 7, 'Matricula' => 8, 'CantidadDeSocios' => 9, 'Telefono' => 10, 'Email' => 11, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idPersonaJuridica' => 0, 'situacionId' => 1, 'tipoPersJuridicaId' => 2, 'cuitCuil' => 3, 'nombreFantasia' => 4, 'fechaInicioActividad' => 5, 'resenia' => 6, 'legajo' => 7, 'matricula' => 8, 'cantidadDeSocios' => 9, 'telefono' => 10, 'email' => 11, ),
        BasePeer::TYPE_COLNAME => array (self::ID_PERSONA_JURIDICA => 0, self::SITUACION_ID => 1, self::TIPO_PERS_JURIDICA_ID => 2, self::CUIT_CUIL => 3, self::NOMBRE_FANTASIA => 4, self::FECHA_INICIO_ACTIVIDAD => 5, self::RESENIA => 6, self::LEGAJO => 7, self::MATRICULA => 8, self::CANTIDAD_DE_SOCIOS => 9, self::TELEFONO => 10, self::EMAIL => 11, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_PERSONA_JURIDICA' => 0, 'SITUACION_ID' => 1, 'TIPO_PERS_JURIDICA_ID' => 2, 'CUIT_CUIL' => 3, 'NOMBRE_FANTASIA' => 4, 'FECHA_INICIO_ACTIVIDAD' => 5, 'RESENIA' => 6, 'LEGAJO' => 7, 'MATRICULA' => 8, 'CANTIDAD_DE_SOCIOS' => 9, 'TELEFONO' => 10, 'EMAIL' => 11, ),
        BasePeer::TYPE_FIELDNAME => array ('id_persona_juridica' => 0, 'situacion_id' => 1, 'tipo_pers_juridica_id' => 2, 'cuit_cuil' => 3, 'nombre_fantasia' => 4, 'fecha_inicio_actividad' => 5, 'resenia' => 6, 'legajo' => 7, 'matricula' => 8, 'cantidad_de_socios' => 9, 'telefono' => 10, 'email' => 11, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = self::getFieldNames($toType);
        $key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, self::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return self::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. PersonaJuridicaPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(PersonaJuridicaPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(PersonaJuridicaPeer::ID_PERSONA_JURIDICA);
            $criteria->addSelectColumn(PersonaJuridicaPeer::SITUACION_ID);
            $criteria->addSelectColumn(PersonaJuridicaPeer::TIPO_PERS_JURIDICA_ID);
            $criteria->addSelectColumn(PersonaJuridicaPeer::CUIT_CUIL);
            $criteria->addSelectColumn(PersonaJuridicaPeer::NOMBRE_FANTASIA);
            $criteria->addSelectColumn(PersonaJuridicaPeer::FECHA_INICIO_ACTIVIDAD);
            $criteria->addSelectColumn(PersonaJuridicaPeer::RESENIA);
            $criteria->addSelectColumn(PersonaJuridicaPeer::LEGAJO);
            $criteria->addSelectColumn(PersonaJuridicaPeer::MATRICULA);
            $criteria->addSelectColumn(PersonaJuridicaPeer::CANTIDAD_DE_SOCIOS);
            $criteria->addSelectColumn(PersonaJuridicaPeer::TELEFONO);
            $criteria->addSelectColumn(PersonaJuridicaPeer::EMAIL);
        } else {
            $criteria->addSelectColumn($alias . '.ID_PERSONA_JURIDICA');
            $criteria->addSelectColumn($alias . '.SITUACION_ID');
            $criteria->addSelectColumn($alias . '.TIPO_PERS_JURIDICA_ID');
            $criteria->addSelectColumn($alias . '.CUIT_CUIL');
            $criteria->addSelectColumn($alias . '.NOMBRE_FANTASIA');
            $criteria->addSelectColumn($alias . '.FECHA_INICIO_ACTIVIDAD');
            $criteria->addSelectColumn($alias . '.RESENIA');
            $criteria->addSelectColumn($alias . '.LEGAJO');
            $criteria->addSelectColumn($alias . '.MATRICULA');
            $criteria->addSelectColumn($alias . '.CANTIDAD_DE_SOCIOS');
            $criteria->addSelectColumn($alias . '.TELEFONO');
            $criteria->addSelectColumn($alias . '.EMAIL');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PersonaJuridicaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PersonaJuridicaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(PersonaJuridicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaJuridicaPeer', $criteria, $con);
		}

        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return                 PersonaJuridica
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = PersonaJuridicaPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return PersonaJuridicaPeer::populateObjects(PersonaJuridicaPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement durirectly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PersonaJuridicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            PersonaJuridicaPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaJuridicaPeer', $criteria, $con);
		}


        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param      PersonaJuridica $obj A PersonaJuridica object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdPersonaJuridica();
            } // if key === null
            self::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A PersonaJuridica object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof PersonaJuridica) {
                $key = (string) $value->getIdPersonaJuridica();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or PersonaJuridica object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(self::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   PersonaJuridica Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(self::$instances[$key])) {
                return self::$instances[$key];
            }
        }

        return null; // just to be explicit
    }
    
    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool()
    {
        self::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to persona_juridica
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in ActividadPersJuridicaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        ActividadPersJuridicaPeer::clearInstancePool();
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or NULL if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }
    
    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();
    
        // set the class once to avoid overhead in the loop
        $cls = PersonaJuridicaPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = PersonaJuridicaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = PersonaJuridicaPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PersonaJuridicaPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (PersonaJuridica object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = PersonaJuridicaPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = PersonaJuridicaPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + PersonaJuridicaPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PersonaJuridicaPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            PersonaJuridicaPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related SituacionPersonaJuridica table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinSituacionPersonaJuridica(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PersonaJuridicaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PersonaJuridicaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PersonaJuridicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PersonaJuridicaPeer::SITUACION_ID, SituacionPersonaJuridicaPeer::ID_SITUACION_PERS_JURIDICA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaJuridicaPeer', $criteria, $con);
		}

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related TipoPersonaJuridica table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinTipoPersonaJuridica(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PersonaJuridicaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PersonaJuridicaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PersonaJuridicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PersonaJuridicaPeer::TIPO_PERS_JURIDICA_ID, TipoPersonaJuridicaPeer::ID_TIPO_PERSONA_JURIDICA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaJuridicaPeer', $criteria, $con);
		}

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of PersonaJuridica objects pre-filled with their SituacionPersonaJuridica objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of PersonaJuridica objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinSituacionPersonaJuridica(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        PersonaJuridicaPeer::addSelectColumns($criteria);
        $startcol = PersonaJuridicaPeer::NUM_HYDRATE_COLUMNS;
        SituacionPersonaJuridicaPeer::addSelectColumns($criteria);

        $criteria->addJoin(PersonaJuridicaPeer::SITUACION_ID, SituacionPersonaJuridicaPeer::ID_SITUACION_PERS_JURIDICA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaJuridicaPeer', $criteria, $con);
		}

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PersonaJuridicaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PersonaJuridicaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PersonaJuridicaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PersonaJuridicaPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = SituacionPersonaJuridicaPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = SituacionPersonaJuridicaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = SituacionPersonaJuridicaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    SituacionPersonaJuridicaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (PersonaJuridica) to $obj2 (SituacionPersonaJuridica)
                $obj2->addPersonaJuridica($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of PersonaJuridica objects pre-filled with their TipoPersonaJuridica objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of PersonaJuridica objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinTipoPersonaJuridica(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        PersonaJuridicaPeer::addSelectColumns($criteria);
        $startcol = PersonaJuridicaPeer::NUM_HYDRATE_COLUMNS;
        TipoPersonaJuridicaPeer::addSelectColumns($criteria);

        $criteria->addJoin(PersonaJuridicaPeer::TIPO_PERS_JURIDICA_ID, TipoPersonaJuridicaPeer::ID_TIPO_PERSONA_JURIDICA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaJuridicaPeer', $criteria, $con);
		}

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PersonaJuridicaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PersonaJuridicaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PersonaJuridicaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PersonaJuridicaPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = TipoPersonaJuridicaPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = TipoPersonaJuridicaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = TipoPersonaJuridicaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    TipoPersonaJuridicaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (PersonaJuridica) to $obj2 (TipoPersonaJuridica)
                $obj2->addPersonaJuridica($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PersonaJuridicaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PersonaJuridicaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PersonaJuridicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PersonaJuridicaPeer::SITUACION_ID, SituacionPersonaJuridicaPeer::ID_SITUACION_PERS_JURIDICA, $join_behavior);

        $criteria->addJoin(PersonaJuridicaPeer::TIPO_PERS_JURIDICA_ID, TipoPersonaJuridicaPeer::ID_TIPO_PERSONA_JURIDICA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaJuridicaPeer', $criteria, $con);
		}

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of PersonaJuridica objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of PersonaJuridica objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        PersonaJuridicaPeer::addSelectColumns($criteria);
        $startcol2 = PersonaJuridicaPeer::NUM_HYDRATE_COLUMNS;

        SituacionPersonaJuridicaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + SituacionPersonaJuridicaPeer::NUM_HYDRATE_COLUMNS;

        TipoPersonaJuridicaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + TipoPersonaJuridicaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PersonaJuridicaPeer::SITUACION_ID, SituacionPersonaJuridicaPeer::ID_SITUACION_PERS_JURIDICA, $join_behavior);

        $criteria->addJoin(PersonaJuridicaPeer::TIPO_PERS_JURIDICA_ID, TipoPersonaJuridicaPeer::ID_TIPO_PERSONA_JURIDICA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaJuridicaPeer', $criteria, $con);
		}

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PersonaJuridicaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PersonaJuridicaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PersonaJuridicaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PersonaJuridicaPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined SituacionPersonaJuridica rows

            $key2 = SituacionPersonaJuridicaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = SituacionPersonaJuridicaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = SituacionPersonaJuridicaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    SituacionPersonaJuridicaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (PersonaJuridica) to the collection in $obj2 (SituacionPersonaJuridica)
                $obj2->addPersonaJuridica($obj1);
            } // if joined row not null

            // Add objects for joined TipoPersonaJuridica rows

            $key3 = TipoPersonaJuridicaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = TipoPersonaJuridicaPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = TipoPersonaJuridicaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    TipoPersonaJuridicaPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (PersonaJuridica) to the collection in $obj3 (TipoPersonaJuridica)
                $obj3->addPersonaJuridica($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related SituacionPersonaJuridica table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptSituacionPersonaJuridica(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PersonaJuridicaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PersonaJuridicaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PersonaJuridicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(PersonaJuridicaPeer::TIPO_PERS_JURIDICA_ID, TipoPersonaJuridicaPeer::ID_TIPO_PERSONA_JURIDICA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaJuridicaPeer', $criteria, $con);
		}

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related TipoPersonaJuridica table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptTipoPersonaJuridica(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PersonaJuridicaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PersonaJuridicaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PersonaJuridicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(PersonaJuridicaPeer::SITUACION_ID, SituacionPersonaJuridicaPeer::ID_SITUACION_PERS_JURIDICA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaJuridicaPeer', $criteria, $con);
		}

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of PersonaJuridica objects pre-filled with all related objects except SituacionPersonaJuridica.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of PersonaJuridica objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptSituacionPersonaJuridica(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        PersonaJuridicaPeer::addSelectColumns($criteria);
        $startcol2 = PersonaJuridicaPeer::NUM_HYDRATE_COLUMNS;

        TipoPersonaJuridicaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + TipoPersonaJuridicaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PersonaJuridicaPeer::TIPO_PERS_JURIDICA_ID, TipoPersonaJuridicaPeer::ID_TIPO_PERSONA_JURIDICA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaJuridicaPeer', $criteria, $con);
		}


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PersonaJuridicaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PersonaJuridicaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PersonaJuridicaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PersonaJuridicaPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined TipoPersonaJuridica rows

                $key2 = TipoPersonaJuridicaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = TipoPersonaJuridicaPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = TipoPersonaJuridicaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    TipoPersonaJuridicaPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (PersonaJuridica) to the collection in $obj2 (TipoPersonaJuridica)
                $obj2->addPersonaJuridica($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of PersonaJuridica objects pre-filled with all related objects except TipoPersonaJuridica.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of PersonaJuridica objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptTipoPersonaJuridica(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        PersonaJuridicaPeer::addSelectColumns($criteria);
        $startcol2 = PersonaJuridicaPeer::NUM_HYDRATE_COLUMNS;

        SituacionPersonaJuridicaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + SituacionPersonaJuridicaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PersonaJuridicaPeer::SITUACION_ID, SituacionPersonaJuridicaPeer::ID_SITUACION_PERS_JURIDICA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaJuridicaPeer', $criteria, $con);
		}


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PersonaJuridicaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PersonaJuridicaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PersonaJuridicaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PersonaJuridicaPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined SituacionPersonaJuridica rows

                $key2 = SituacionPersonaJuridicaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = SituacionPersonaJuridicaPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = SituacionPersonaJuridicaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    SituacionPersonaJuridicaPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (PersonaJuridica) to the collection in $obj2 (SituacionPersonaJuridica)
                $obj2->addPersonaJuridica($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BasePersonaJuridicaPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BasePersonaJuridicaPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new PersonaJuridicaTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass()
    {
        return PersonaJuridicaPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a PersonaJuridica or Criteria object.
     *
     * @param      mixed $values Criteria or PersonaJuridica object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PersonaJuridicaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from PersonaJuridica object
        }

        if ($criteria->containsKey(PersonaJuridicaPeer::ID_PERSONA_JURIDICA) && $criteria->keyContainsValue(PersonaJuridicaPeer::ID_PERSONA_JURIDICA) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.PersonaJuridicaPeer::ID_PERSONA_JURIDICA.')');
        }


        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a PersonaJuridica or Criteria object.
     *
     * @param      mixed $values Criteria or PersonaJuridica object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PersonaJuridicaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(self::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(PersonaJuridicaPeer::ID_PERSONA_JURIDICA);
            $value = $criteria->remove(PersonaJuridicaPeer::ID_PERSONA_JURIDICA);
            if ($value) {
                $selectCriteria->add(PersonaJuridicaPeer::ID_PERSONA_JURIDICA, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PersonaJuridicaPeer::TABLE_NAME);
            }

        } else { // $values is PersonaJuridica object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the persona_juridica table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PersonaJuridicaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += PersonaJuridicaPeer::doOnDeleteCascade(new Criteria(PersonaJuridicaPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(PersonaJuridicaPeer::TABLE_NAME, $con, PersonaJuridicaPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PersonaJuridicaPeer::clearInstancePool();
            PersonaJuridicaPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a PersonaJuridica or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or PersonaJuridica object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(PersonaJuridicaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof PersonaJuridica) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(self::DATABASE_NAME);
            $criteria->add(PersonaJuridicaPeer::ID_PERSONA_JURIDICA, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += PersonaJuridicaPeer::doOnDeleteCascade($c, $con);
            
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                PersonaJuridicaPeer::clearInstancePool();
            } elseif ($values instanceof PersonaJuridica) { // it's a model object
                PersonaJuridicaPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    PersonaJuridicaPeer::removeInstanceFromPool($singleval);
                }
            }
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            PersonaJuridicaPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * This is a method for emulating ON DELETE CASCADE for DBs that don't support this
     * feature (like MySQL or SQLite).
     *
     * This method is not very speedy because it must perform a query first to get
     * the implicated records and then perform the deletes by calling those Peer classes.
     *
     * This method should be used within a transaction if possible.
     *
     * @param      Criteria $criteria
     * @param      PropelPDO $con
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    protected static function doOnDeleteCascade(Criteria $criteria, PropelPDO $con)
    {
        // initialize var to track total num of affected rows
        $affectedRows = 0;

        // first find the objects that are implicated by the $criteria
        $objects = PersonaJuridicaPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related ActividadPersJuridica objects
            $criteria = new Criteria(ActividadPersJuridicaPeer::DATABASE_NAME);
            
            $criteria->add(ActividadPersJuridicaPeer::PERSONA_JURIDICA_ID, $obj->getIdPersonaJuridica());
            $affectedRows += ActividadPersJuridicaPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given PersonaJuridica object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      PersonaJuridica $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PersonaJuridicaPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PersonaJuridicaPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(PersonaJuridicaPeer::DATABASE_NAME, PersonaJuridicaPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return PersonaJuridica
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = PersonaJuridicaPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(PersonaJuridicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(PersonaJuridicaPeer::DATABASE_NAME);
        $criteria->add(PersonaJuridicaPeer::ID_PERSONA_JURIDICA, $pk);

        $v = PersonaJuridicaPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return PersonaJuridica[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PersonaJuridicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(PersonaJuridicaPeer::DATABASE_NAME);
            $criteria->add(PersonaJuridicaPeer::ID_PERSONA_JURIDICA, $pks, Criteria::IN);
            $objs = PersonaJuridicaPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

	// symfony behavior
	
	/**
	 * Returns an array of arrays that contain columns in each unique index.
	 *
	 * @return array
	 */
	static public function getUniqueColumnNames()
	{
	  return array(array('cuit_cuil'), array('legajo'), array('matricula'));
	}

	// symfony_behaviors behavior
	
	/**
	 * Returns the name of the hook to call from inside the supplied method.
	 *
	 * @param string $method The calling method
	 *
	 * @return string A hook name for {@link sfMixer}
	 *
	 * @throws LogicException If the method name is not recognized
	 */
	static private function getMixerPreSelectHook($method)
	{
	  if (preg_match('/^do(Select|Count)(Join(All(Except)?)?|Stmt)?/', $method, $match))
	  {
	    return sprintf('BasePersonaJuridicaPeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
	  }
	
	  throw new LogicException(sprintf('Unrecognized function "%s"', $method));
	}

} // BasePersonaJuridicaPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePersonaJuridicaPeer::buildTableMap();

