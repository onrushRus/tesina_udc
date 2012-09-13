<?php


/**
 * Base static class for performing query and update operations on the 'persona_comision_directiva' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePersonaComisionDirectivaPeer {

    /** the default database name for this class */
    const DATABASE_NAME = 'propel';

    /** the table name for this class */
    const TABLE_NAME = 'persona_comision_directiva';

    /** the related Propel class for this table */
    const OM_CLASS = 'PersonaComisionDirectiva';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PersonaComisionDirectivaTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 6;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 6;

    /** the column name for the ID_PERSONA_COMISION_DIRECTIVA field */
    const ID_PERSONA_COMISION_DIRECTIVA = 'persona_comision_directiva.ID_PERSONA_COMISION_DIRECTIVA';

    /** the column name for the EJERCICIO_ECONOMICO_ID field */
    const EJERCICIO_ECONOMICO_ID = 'persona_comision_directiva.EJERCICIO_ECONOMICO_ID';

    /** the column name for the PUESTO_ID field */
    const PUESTO_ID = 'persona_comision_directiva.PUESTO_ID';

    /** the column name for the NOMBRE_Y_APELLIDO field */
    const NOMBRE_Y_APELLIDO = 'persona_comision_directiva.NOMBRE_Y_APELLIDO';

    /** the column name for the TELEFONO field */
    const TELEFONO = 'persona_comision_directiva.TELEFONO';

    /** the column name for the EMAIL field */
    const EMAIL = 'persona_comision_directiva.EMAIL';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of PersonaComisionDirectiva objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array PersonaComisionDirectiva[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdPersonaComisionDirectiva', 'EjercicioEconomicoId', 'PuestoId', 'NombreYApellido', 'Telefono', 'Email', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idPersonaComisionDirectiva', 'ejercicioEconomicoId', 'puestoId', 'nombreYApellido', 'telefono', 'email', ),
        BasePeer::TYPE_COLNAME => array (self::ID_PERSONA_COMISION_DIRECTIVA, self::EJERCICIO_ECONOMICO_ID, self::PUESTO_ID, self::NOMBRE_Y_APELLIDO, self::TELEFONO, self::EMAIL, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_PERSONA_COMISION_DIRECTIVA', 'EJERCICIO_ECONOMICO_ID', 'PUESTO_ID', 'NOMBRE_Y_APELLIDO', 'TELEFONO', 'EMAIL', ),
        BasePeer::TYPE_FIELDNAME => array ('id_persona_comision_directiva', 'ejercicio_economico_id', 'puesto_id', 'nombre_y_apellido', 'telefono', 'email', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdPersonaComisionDirectiva' => 0, 'EjercicioEconomicoId' => 1, 'PuestoId' => 2, 'NombreYApellido' => 3, 'Telefono' => 4, 'Email' => 5, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idPersonaComisionDirectiva' => 0, 'ejercicioEconomicoId' => 1, 'puestoId' => 2, 'nombreYApellido' => 3, 'telefono' => 4, 'email' => 5, ),
        BasePeer::TYPE_COLNAME => array (self::ID_PERSONA_COMISION_DIRECTIVA => 0, self::EJERCICIO_ECONOMICO_ID => 1, self::PUESTO_ID => 2, self::NOMBRE_Y_APELLIDO => 3, self::TELEFONO => 4, self::EMAIL => 5, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_PERSONA_COMISION_DIRECTIVA' => 0, 'EJERCICIO_ECONOMICO_ID' => 1, 'PUESTO_ID' => 2, 'NOMBRE_Y_APELLIDO' => 3, 'TELEFONO' => 4, 'EMAIL' => 5, ),
        BasePeer::TYPE_FIELDNAME => array ('id_persona_comision_directiva' => 0, 'ejercicio_economico_id' => 1, 'puesto_id' => 2, 'nombre_y_apellido' => 3, 'telefono' => 4, 'email' => 5, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
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
     * @param      string $column The column name for current table. (i.e. PersonaComisionDirectivaPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(PersonaComisionDirectivaPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(PersonaComisionDirectivaPeer::ID_PERSONA_COMISION_DIRECTIVA);
            $criteria->addSelectColumn(PersonaComisionDirectivaPeer::EJERCICIO_ECONOMICO_ID);
            $criteria->addSelectColumn(PersonaComisionDirectivaPeer::PUESTO_ID);
            $criteria->addSelectColumn(PersonaComisionDirectivaPeer::NOMBRE_Y_APELLIDO);
            $criteria->addSelectColumn(PersonaComisionDirectivaPeer::TELEFONO);
            $criteria->addSelectColumn(PersonaComisionDirectivaPeer::EMAIL);
        } else {
            $criteria->addSelectColumn($alias . '.ID_PERSONA_COMISION_DIRECTIVA');
            $criteria->addSelectColumn($alias . '.EJERCICIO_ECONOMICO_ID');
            $criteria->addSelectColumn($alias . '.PUESTO_ID');
            $criteria->addSelectColumn($alias . '.NOMBRE_Y_APELLIDO');
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
        $criteria->setPrimaryTableName(PersonaComisionDirectivaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PersonaComisionDirectivaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(PersonaComisionDirectivaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaComisionDirectivaPeer', $criteria, $con);
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
     * @return                 PersonaComisionDirectiva
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = PersonaComisionDirectivaPeer::doSelect($critcopy, $con);
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
        return PersonaComisionDirectivaPeer::populateObjects(PersonaComisionDirectivaPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(PersonaComisionDirectivaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            PersonaComisionDirectivaPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaComisionDirectivaPeer', $criteria, $con);
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
     * @param      PersonaComisionDirectiva $obj A PersonaComisionDirectiva object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getIdPersonaComisionDirectiva(), (string) $obj->getEjercicioEconomicoId(), (string) $obj->getPuestoId()));
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
     * @param      mixed $value A PersonaComisionDirectiva object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof PersonaComisionDirectiva) {
                $key = serialize(array((string) $value->getIdPersonaComisionDirectiva(), (string) $value->getEjercicioEconomicoId(), (string) $value->getPuestoId()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or PersonaComisionDirectiva object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
     * @return   PersonaComisionDirectiva Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
     * Method to invalidate the instance pool of all tables related to persona_comision_directiva
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
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
        if ($row[$startcol] === null && $row[$startcol + 1] === null && $row[$startcol + 2] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 1], (string) $row[$startcol + 2]));
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

        return array((int) $row[$startcol], (int) $row[$startcol + 1], (int) $row[$startcol + 2]);
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
        $cls = PersonaComisionDirectivaPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = PersonaComisionDirectivaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = PersonaComisionDirectivaPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PersonaComisionDirectivaPeer::addInstanceToPool($obj, $key);
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
     * @return array (PersonaComisionDirectiva object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = PersonaComisionDirectivaPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = PersonaComisionDirectivaPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + PersonaComisionDirectivaPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PersonaComisionDirectivaPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            PersonaComisionDirectivaPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related EjercicioEconomico table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinEjercicioEconomico(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PersonaComisionDirectivaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PersonaComisionDirectivaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PersonaComisionDirectivaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PersonaComisionDirectivaPeer::EJERCICIO_ECONOMICO_ID, EjercicioEconomicoPeer::ID_EJERCICIO_ECONOMICO, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaComisionDirectivaPeer', $criteria, $con);
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
     * Returns the number of rows matching criteria, joining the related PuestoComisionDirectiva table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinPuestoComisionDirectiva(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PersonaComisionDirectivaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PersonaComisionDirectivaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PersonaComisionDirectivaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PersonaComisionDirectivaPeer::PUESTO_ID, PuestoComisionDirectivaPeer::ID_PUESTO_COMISION_DIRECTIVA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaComisionDirectivaPeer', $criteria, $con);
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
     * Selects a collection of PersonaComisionDirectiva objects pre-filled with their EjercicioEconomico objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of PersonaComisionDirectiva objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEjercicioEconomico(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        PersonaComisionDirectivaPeer::addSelectColumns($criteria);
        $startcol = PersonaComisionDirectivaPeer::NUM_HYDRATE_COLUMNS;
        EjercicioEconomicoPeer::addSelectColumns($criteria);

        $criteria->addJoin(PersonaComisionDirectivaPeer::EJERCICIO_ECONOMICO_ID, EjercicioEconomicoPeer::ID_EJERCICIO_ECONOMICO, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaComisionDirectivaPeer', $criteria, $con);
		}

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PersonaComisionDirectivaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PersonaComisionDirectivaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PersonaComisionDirectivaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PersonaComisionDirectivaPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = EjercicioEconomicoPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = EjercicioEconomicoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = EjercicioEconomicoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    EjercicioEconomicoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (PersonaComisionDirectiva) to $obj2 (EjercicioEconomico)
                $obj2->addPersonaComisionDirectiva($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of PersonaComisionDirectiva objects pre-filled with their PuestoComisionDirectiva objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of PersonaComisionDirectiva objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinPuestoComisionDirectiva(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        PersonaComisionDirectivaPeer::addSelectColumns($criteria);
        $startcol = PersonaComisionDirectivaPeer::NUM_HYDRATE_COLUMNS;
        PuestoComisionDirectivaPeer::addSelectColumns($criteria);

        $criteria->addJoin(PersonaComisionDirectivaPeer::PUESTO_ID, PuestoComisionDirectivaPeer::ID_PUESTO_COMISION_DIRECTIVA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaComisionDirectivaPeer', $criteria, $con);
		}

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PersonaComisionDirectivaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PersonaComisionDirectivaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PersonaComisionDirectivaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PersonaComisionDirectivaPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = PuestoComisionDirectivaPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = PuestoComisionDirectivaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = PuestoComisionDirectivaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    PuestoComisionDirectivaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (PersonaComisionDirectiva) to $obj2 (PuestoComisionDirectiva)
                $obj2->addPersonaComisionDirectiva($obj1);

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
        $criteria->setPrimaryTableName(PersonaComisionDirectivaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PersonaComisionDirectivaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PersonaComisionDirectivaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PersonaComisionDirectivaPeer::EJERCICIO_ECONOMICO_ID, EjercicioEconomicoPeer::ID_EJERCICIO_ECONOMICO, $join_behavior);

        $criteria->addJoin(PersonaComisionDirectivaPeer::PUESTO_ID, PuestoComisionDirectivaPeer::ID_PUESTO_COMISION_DIRECTIVA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaComisionDirectivaPeer', $criteria, $con);
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
     * Selects a collection of PersonaComisionDirectiva objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of PersonaComisionDirectiva objects.
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

        PersonaComisionDirectivaPeer::addSelectColumns($criteria);
        $startcol2 = PersonaComisionDirectivaPeer::NUM_HYDRATE_COLUMNS;

        EjercicioEconomicoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EjercicioEconomicoPeer::NUM_HYDRATE_COLUMNS;

        PuestoComisionDirectivaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + PuestoComisionDirectivaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PersonaComisionDirectivaPeer::EJERCICIO_ECONOMICO_ID, EjercicioEconomicoPeer::ID_EJERCICIO_ECONOMICO, $join_behavior);

        $criteria->addJoin(PersonaComisionDirectivaPeer::PUESTO_ID, PuestoComisionDirectivaPeer::ID_PUESTO_COMISION_DIRECTIVA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaComisionDirectivaPeer', $criteria, $con);
		}

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PersonaComisionDirectivaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PersonaComisionDirectivaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PersonaComisionDirectivaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PersonaComisionDirectivaPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined EjercicioEconomico rows

            $key2 = EjercicioEconomicoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = EjercicioEconomicoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = EjercicioEconomicoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    EjercicioEconomicoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (PersonaComisionDirectiva) to the collection in $obj2 (EjercicioEconomico)
                $obj2->addPersonaComisionDirectiva($obj1);
            } // if joined row not null

            // Add objects for joined PuestoComisionDirectiva rows

            $key3 = PuestoComisionDirectivaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = PuestoComisionDirectivaPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = PuestoComisionDirectivaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    PuestoComisionDirectivaPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (PersonaComisionDirectiva) to the collection in $obj3 (PuestoComisionDirectiva)
                $obj3->addPersonaComisionDirectiva($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related EjercicioEconomico table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptEjercicioEconomico(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PersonaComisionDirectivaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PersonaComisionDirectivaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PersonaComisionDirectivaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(PersonaComisionDirectivaPeer::PUESTO_ID, PuestoComisionDirectivaPeer::ID_PUESTO_COMISION_DIRECTIVA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaComisionDirectivaPeer', $criteria, $con);
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
     * Returns the number of rows matching criteria, joining the related PuestoComisionDirectiva table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptPuestoComisionDirectiva(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PersonaComisionDirectivaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PersonaComisionDirectivaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PersonaComisionDirectivaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(PersonaComisionDirectivaPeer::EJERCICIO_ECONOMICO_ID, EjercicioEconomicoPeer::ID_EJERCICIO_ECONOMICO, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaComisionDirectivaPeer', $criteria, $con);
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
     * Selects a collection of PersonaComisionDirectiva objects pre-filled with all related objects except EjercicioEconomico.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of PersonaComisionDirectiva objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptEjercicioEconomico(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        PersonaComisionDirectivaPeer::addSelectColumns($criteria);
        $startcol2 = PersonaComisionDirectivaPeer::NUM_HYDRATE_COLUMNS;

        PuestoComisionDirectivaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + PuestoComisionDirectivaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PersonaComisionDirectivaPeer::PUESTO_ID, PuestoComisionDirectivaPeer::ID_PUESTO_COMISION_DIRECTIVA, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaComisionDirectivaPeer', $criteria, $con);
		}


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PersonaComisionDirectivaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PersonaComisionDirectivaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PersonaComisionDirectivaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PersonaComisionDirectivaPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined PuestoComisionDirectiva rows

                $key2 = PuestoComisionDirectivaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = PuestoComisionDirectivaPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = PuestoComisionDirectivaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    PuestoComisionDirectivaPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (PersonaComisionDirectiva) to the collection in $obj2 (PuestoComisionDirectiva)
                $obj2->addPersonaComisionDirectiva($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of PersonaComisionDirectiva objects pre-filled with all related objects except PuestoComisionDirectiva.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of PersonaComisionDirectiva objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptPuestoComisionDirectiva(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(self::DATABASE_NAME);
        }

        PersonaComisionDirectivaPeer::addSelectColumns($criteria);
        $startcol2 = PersonaComisionDirectivaPeer::NUM_HYDRATE_COLUMNS;

        EjercicioEconomicoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EjercicioEconomicoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PersonaComisionDirectivaPeer::EJERCICIO_ECONOMICO_ID, EjercicioEconomicoPeer::ID_EJERCICIO_ECONOMICO, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePersonaComisionDirectivaPeer', $criteria, $con);
		}


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PersonaComisionDirectivaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PersonaComisionDirectivaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PersonaComisionDirectivaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PersonaComisionDirectivaPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined EjercicioEconomico rows

                $key2 = EjercicioEconomicoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = EjercicioEconomicoPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = EjercicioEconomicoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    EjercicioEconomicoPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (PersonaComisionDirectiva) to the collection in $obj2 (EjercicioEconomico)
                $obj2->addPersonaComisionDirectiva($obj1);

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
      $dbMap = Propel::getDatabaseMap(BasePersonaComisionDirectivaPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BasePersonaComisionDirectivaPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new PersonaComisionDirectivaTableMap());
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
        return PersonaComisionDirectivaPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a PersonaComisionDirectiva or Criteria object.
     *
     * @param      mixed $values Criteria or PersonaComisionDirectiva object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PersonaComisionDirectivaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from PersonaComisionDirectiva object
        }

        if ($criteria->containsKey(PersonaComisionDirectivaPeer::ID_PERSONA_COMISION_DIRECTIVA) && $criteria->keyContainsValue(PersonaComisionDirectivaPeer::ID_PERSONA_COMISION_DIRECTIVA) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.PersonaComisionDirectivaPeer::ID_PERSONA_COMISION_DIRECTIVA.')');
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
     * Performs an UPDATE on the database, given a PersonaComisionDirectiva or Criteria object.
     *
     * @param      mixed $values Criteria or PersonaComisionDirectiva object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PersonaComisionDirectivaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(self::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(PersonaComisionDirectivaPeer::ID_PERSONA_COMISION_DIRECTIVA);
            $value = $criteria->remove(PersonaComisionDirectivaPeer::ID_PERSONA_COMISION_DIRECTIVA);
            if ($value) {
                $selectCriteria->add(PersonaComisionDirectivaPeer::ID_PERSONA_COMISION_DIRECTIVA, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PersonaComisionDirectivaPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(PersonaComisionDirectivaPeer::EJERCICIO_ECONOMICO_ID);
            $value = $criteria->remove(PersonaComisionDirectivaPeer::EJERCICIO_ECONOMICO_ID);
            if ($value) {
                $selectCriteria->add(PersonaComisionDirectivaPeer::EJERCICIO_ECONOMICO_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PersonaComisionDirectivaPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(PersonaComisionDirectivaPeer::PUESTO_ID);
            $value = $criteria->remove(PersonaComisionDirectivaPeer::PUESTO_ID);
            if ($value) {
                $selectCriteria->add(PersonaComisionDirectivaPeer::PUESTO_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PersonaComisionDirectivaPeer::TABLE_NAME);
            }

        } else { // $values is PersonaComisionDirectiva object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the persona_comision_directiva table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PersonaComisionDirectivaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(PersonaComisionDirectivaPeer::TABLE_NAME, $con, PersonaComisionDirectivaPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PersonaComisionDirectivaPeer::clearInstancePool();
            PersonaComisionDirectivaPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a PersonaComisionDirectiva or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or PersonaComisionDirectiva object or primary key or array of primary keys
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
            $con = Propel::getConnection(PersonaComisionDirectivaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            PersonaComisionDirectivaPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof PersonaComisionDirectiva) { // it's a model object
            // invalidate the cache for this single object
            PersonaComisionDirectivaPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(self::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(PersonaComisionDirectivaPeer::ID_PERSONA_COMISION_DIRECTIVA, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(PersonaComisionDirectivaPeer::EJERCICIO_ECONOMICO_ID, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(PersonaComisionDirectivaPeer::PUESTO_ID, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                PersonaComisionDirectivaPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            PersonaComisionDirectivaPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given PersonaComisionDirectiva object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      PersonaComisionDirectiva $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PersonaComisionDirectivaPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PersonaComisionDirectivaPeer::TABLE_NAME);

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

        return BasePeer::doValidate(PersonaComisionDirectivaPeer::DATABASE_NAME, PersonaComisionDirectivaPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id_persona_comision_directiva
     * @param   int $ejercicio_economico_id
     * @param   int $puesto_id
     * @param      PropelPDO $con
     * @return   PersonaComisionDirectiva
     */
    public static function retrieveByPK($id_persona_comision_directiva, $ejercicio_economico_id, $puesto_id, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id_persona_comision_directiva, (string) $ejercicio_economico_id, (string) $puesto_id));
         if (null !== ($obj = PersonaComisionDirectivaPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(PersonaComisionDirectivaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(PersonaComisionDirectivaPeer::DATABASE_NAME);
        $criteria->add(PersonaComisionDirectivaPeer::ID_PERSONA_COMISION_DIRECTIVA, $id_persona_comision_directiva);
        $criteria->add(PersonaComisionDirectivaPeer::EJERCICIO_ECONOMICO_ID, $ejercicio_economico_id);
        $criteria->add(PersonaComisionDirectivaPeer::PUESTO_ID, $puesto_id);
        $v = PersonaComisionDirectivaPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
	// symfony behavior
	
	/**
	 * Returns an array of arrays that contain columns in each unique index.
	 *
	 * @return array
	 */
	static public function getUniqueColumnNames()
	{
	  return array();
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
	    return sprintf('BasePersonaComisionDirectivaPeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
	  }
	
	  throw new LogicException(sprintf('Unrecognized function "%s"', $method));
	}

} // BasePersonaComisionDirectivaPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePersonaComisionDirectivaPeer::buildTableMap();

