<?php


/**
 * Base class that represents a row from the 'asamblea' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseAsamblea extends BaseObject 
{

    /**
     * Peer class name
     */
    const PEER = 'AsambleaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        AsambleaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_asamblea field.
     * @var        int
     */
    protected $id_asamblea;

    /**
     * The value for the ejercicio_economico_id field.
     * @var        int
     */
    protected $ejercicio_economico_id;

    /**
     * The value for the tipo_asamblea_id field.
     * @var        int
     */
    protected $tipo_asamblea_id;

    /**
     * The value for the fecha_de_asamblea field.
     * @var        string
     */
    protected $fecha_de_asamblea;

    /**
     * The value for the fecha_de_convocatoria field.
     * @var        string
     */
    protected $fecha_de_convocatoria;

    /**
     * The value for the fecha_de_nuevo_mandato field.
     * @var        string
     */
    protected $fecha_de_nuevo_mandato;

    /**
     * The value for the observaciones field.
     * @var        string
     */
    protected $observaciones;

    /**
     * @var        EjercicioEconomico
     */
    protected $aEjercicioEconomico;

    /**
     * @var        TipoAsamblea
     */
    protected $aTipoAsamblea;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Get the [id_asamblea] column value.
     * 
     * @return   int
     */
    public function getIdAsamblea()
    {

        return $this->id_asamblea;
    }

    /**
     * Get the [ejercicio_economico_id] column value.
     * 
     * @return   int
     */
    public function getEjercicioEconomicoId()
    {

        return $this->ejercicio_economico_id;
    }

    /**
     * Get the [tipo_asamblea_id] column value.
     * 
     * @return   int
     */
    public function getTipoAsambleaId()
    {

        return $this->tipo_asamblea_id;
    }

    /**
     * Get the [optionally formatted] temporal [fecha_de_asamblea] column value.
     * 
     *
     * @param      string $format The date/time format string (either date()-style or strftime()-style).
     *							If format is NULL, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFechaDeAsamblea($format = 'Y-m-d')
    {
        if ($this->fecha_de_asamblea === null) {
            return null;
        }


        if ($this->fecha_de_asamblea === '0000-00-00') {
            // while technically this is not a default value of NULL,
            // this seems to be closest in meaning.
            return null;
        } else {
            try {
                $dt = new DateTime($this->fecha_de_asamblea);
            } catch (Exception $x) {
                throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->fecha_de_asamblea, true), $x);
            }
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is TRUE, we return a DateTime object.
            return $dt;
        } elseif (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        } else {
            return $dt->format($format);
        }
    }

    /**
     * Get the [optionally formatted] temporal [fecha_de_convocatoria] column value.
     * 
     *
     * @param      string $format The date/time format string (either date()-style or strftime()-style).
     *							If format is NULL, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFechaDeConvocatoria($format = 'Y-m-d')
    {
        if ($this->fecha_de_convocatoria === null) {
            return null;
        }


        if ($this->fecha_de_convocatoria === '0000-00-00') {
            // while technically this is not a default value of NULL,
            // this seems to be closest in meaning.
            return null;
        } else {
            try {
                $dt = new DateTime($this->fecha_de_convocatoria);
            } catch (Exception $x) {
                throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->fecha_de_convocatoria, true), $x);
            }
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is TRUE, we return a DateTime object.
            return $dt;
        } elseif (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        } else {
            return $dt->format($format);
        }
    }

    /**
     * Get the [optionally formatted] temporal [fecha_de_nuevo_mandato] column value.
     * 
     *
     * @param      string $format The date/time format string (either date()-style or strftime()-style).
     *							If format is NULL, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFechaDeNuevoMandato($format = 'Y-m-d')
    {
        if ($this->fecha_de_nuevo_mandato === null) {
            return null;
        }


        if ($this->fecha_de_nuevo_mandato === '0000-00-00') {
            // while technically this is not a default value of NULL,
            // this seems to be closest in meaning.
            return null;
        } else {
            try {
                $dt = new DateTime($this->fecha_de_nuevo_mandato);
            } catch (Exception $x) {
                throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->fecha_de_nuevo_mandato, true), $x);
            }
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is TRUE, we return a DateTime object.
            return $dt;
        } elseif (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        } else {
            return $dt->format($format);
        }
    }

    /**
     * Get the [observaciones] column value.
     * 
     * @return   string
     */
    public function getObservaciones()
    {

        return $this->observaciones;
    }

    /**
     * Set the value of [id_asamblea] column.
     * 
     * @param      int $v new value
     * @return   Asamblea The current object (for fluent API support)
     */
    public function setIdAsamblea($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id_asamblea !== $v) {
            $this->id_asamblea = $v;
            $this->modifiedColumns[] = AsambleaPeer::ID_ASAMBLEA;
        }


        return $this;
    } // setIdAsamblea()

    /**
     * Set the value of [ejercicio_economico_id] column.
     * 
     * @param      int $v new value
     * @return   Asamblea The current object (for fluent API support)
     */
    public function setEjercicioEconomicoId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->ejercicio_economico_id !== $v) {
            $this->ejercicio_economico_id = $v;
            $this->modifiedColumns[] = AsambleaPeer::EJERCICIO_ECONOMICO_ID;
        }

        if ($this->aEjercicioEconomico !== null && $this->aEjercicioEconomico->getIdEjercicioEconomico() !== $v) {
            $this->aEjercicioEconomico = null;
        }


        return $this;
    } // setEjercicioEconomicoId()

    /**
     * Set the value of [tipo_asamblea_id] column.
     * 
     * @param      int $v new value
     * @return   Asamblea The current object (for fluent API support)
     */
    public function setTipoAsambleaId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->tipo_asamblea_id !== $v) {
            $this->tipo_asamblea_id = $v;
            $this->modifiedColumns[] = AsambleaPeer::TIPO_ASAMBLEA_ID;
        }

        if ($this->aTipoAsamblea !== null && $this->aTipoAsamblea->getIdTipoAsamblea() !== $v) {
            $this->aTipoAsamblea = null;
        }


        return $this;
    } // setTipoAsambleaId()

    /**
     * Sets the value of [fecha_de_asamblea] column to a normalized version of the date/time value specified.
     * 
     * @param      mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as NULL.
     * @return   Asamblea The current object (for fluent API support)
     */
    public function setFechaDeAsamblea($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->fecha_de_asamblea !== null || $dt !== null) {
            $currentDateAsString = ($this->fecha_de_asamblea !== null && $tmpDt = new DateTime($this->fecha_de_asamblea)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->fecha_de_asamblea = $newDateAsString;
                $this->modifiedColumns[] = AsambleaPeer::FECHA_DE_ASAMBLEA;
            }
        } // if either are not null


        return $this;
    } // setFechaDeAsamblea()

    /**
     * Sets the value of [fecha_de_convocatoria] column to a normalized version of the date/time value specified.
     * 
     * @param      mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as NULL.
     * @return   Asamblea The current object (for fluent API support)
     */
    public function setFechaDeConvocatoria($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->fecha_de_convocatoria !== null || $dt !== null) {
            $currentDateAsString = ($this->fecha_de_convocatoria !== null && $tmpDt = new DateTime($this->fecha_de_convocatoria)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->fecha_de_convocatoria = $newDateAsString;
                $this->modifiedColumns[] = AsambleaPeer::FECHA_DE_CONVOCATORIA;
            }
        } // if either are not null


        return $this;
    } // setFechaDeConvocatoria()

    /**
     * Sets the value of [fecha_de_nuevo_mandato] column to a normalized version of the date/time value specified.
     * 
     * @param      mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as NULL.
     * @return   Asamblea The current object (for fluent API support)
     */
    public function setFechaDeNuevoMandato($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->fecha_de_nuevo_mandato !== null || $dt !== null) {
            $currentDateAsString = ($this->fecha_de_nuevo_mandato !== null && $tmpDt = new DateTime($this->fecha_de_nuevo_mandato)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->fecha_de_nuevo_mandato = $newDateAsString;
                $this->modifiedColumns[] = AsambleaPeer::FECHA_DE_NUEVO_MANDATO;
            }
        } // if either are not null


        return $this;
    } // setFechaDeNuevoMandato()

    /**
     * Set the value of [observaciones] column.
     * 
     * @param      string $v new value
     * @return   Asamblea The current object (for fluent API support)
     */
    public function setObservaciones($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->observaciones !== $v) {
            $this->observaciones = $v;
            $this->modifiedColumns[] = AsambleaPeer::OBSERVACIONES;
        }


        return $this;
    } // setObservaciones()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return TRUE
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
     * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id_asamblea = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->ejercicio_economico_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->tipo_asamblea_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->fecha_de_asamblea = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->fecha_de_convocatoria = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->fecha_de_nuevo_mandato = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->observaciones = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 7; // 7 = AsambleaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Asamblea object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

        if ($this->aEjercicioEconomico !== null && $this->ejercicio_economico_id !== $this->aEjercicioEconomico->getIdEjercicioEconomico()) {
            $this->aEjercicioEconomico = null;
        }
        if ($this->aTipoAsamblea !== null && $this->tipo_asamblea_id !== $this->aTipoAsamblea->getIdTipoAsamblea()) {
            $this->aTipoAsamblea = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param      boolean $deep (optional) Whether to also de-associated any related objects.
     * @param      PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(AsambleaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = AsambleaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aEjercicioEconomico = null;
            $this->aTipoAsamblea = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(AsambleaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = AsambleaQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseAsamblea:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			    return;
			  }
			}

            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseAsamblea:delete:post') as $callable)
				{
				  call_user_func($callable, $this, $con);
				}

                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param      PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(AsambleaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseAsamblea:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			  	$con->commit();
			    return $affectedRows;
			  }
			}

            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseAsamblea:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

                AsambleaPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param      PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aEjercicioEconomico !== null) {
                if ($this->aEjercicioEconomico->isModified() || $this->aEjercicioEconomico->isNew()) {
                    $affectedRows += $this->aEjercicioEconomico->save($con);
                }
                $this->setEjercicioEconomico($this->aEjercicioEconomico);
            }

            if ($this->aTipoAsamblea !== null) {
                if ($this->aTipoAsamblea->isModified() || $this->aTipoAsamblea->isNew()) {
                    $affectedRows += $this->aTipoAsamblea->save($con);
                }
                $this->setTipoAsamblea($this->aTipoAsamblea);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param      PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = AsambleaPeer::ID_ASAMBLEA;
        if (null !== $this->id_asamblea) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . AsambleaPeer::ID_ASAMBLEA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(AsambleaPeer::ID_ASAMBLEA)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ASAMBLEA`';
        }
        if ($this->isColumnModified(AsambleaPeer::EJERCICIO_ECONOMICO_ID)) {
            $modifiedColumns[':p' . $index++]  = '`EJERCICIO_ECONOMICO_ID`';
        }
        if ($this->isColumnModified(AsambleaPeer::TIPO_ASAMBLEA_ID)) {
            $modifiedColumns[':p' . $index++]  = '`TIPO_ASAMBLEA_ID`';
        }
        if ($this->isColumnModified(AsambleaPeer::FECHA_DE_ASAMBLEA)) {
            $modifiedColumns[':p' . $index++]  = '`FECHA_DE_ASAMBLEA`';
        }
        if ($this->isColumnModified(AsambleaPeer::FECHA_DE_CONVOCATORIA)) {
            $modifiedColumns[':p' . $index++]  = '`FECHA_DE_CONVOCATORIA`';
        }
        if ($this->isColumnModified(AsambleaPeer::FECHA_DE_NUEVO_MANDATO)) {
            $modifiedColumns[':p' . $index++]  = '`FECHA_DE_NUEVO_MANDATO`';
        }
        if ($this->isColumnModified(AsambleaPeer::OBSERVACIONES)) {
            $modifiedColumns[':p' . $index++]  = '`OBSERVACIONES`';
        }

        $sql = sprintf(
            'INSERT INTO `asamblea` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_ASAMBLEA`':						
						$stmt->bindValue($identifier, $this->id_asamblea, PDO::PARAM_INT);
                        break;
                    case '`EJERCICIO_ECONOMICO_ID`':						
						$stmt->bindValue($identifier, $this->ejercicio_economico_id, PDO::PARAM_INT);
                        break;
                    case '`TIPO_ASAMBLEA_ID`':						
						$stmt->bindValue($identifier, $this->tipo_asamblea_id, PDO::PARAM_INT);
                        break;
                    case '`FECHA_DE_ASAMBLEA`':						
						$stmt->bindValue($identifier, $this->fecha_de_asamblea, PDO::PARAM_STR);
                        break;
                    case '`FECHA_DE_CONVOCATORIA`':						
						$stmt->bindValue($identifier, $this->fecha_de_convocatoria, PDO::PARAM_STR);
                        break;
                    case '`FECHA_DE_NUEVO_MANDATO`':						
						$stmt->bindValue($identifier, $this->fecha_de_nuevo_mandato, PDO::PARAM_STR);
                        break;
                    case '`OBSERVACIONES`':						
						$stmt->bindValue($identifier, $this->observaciones, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
			$pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setIdAsamblea($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param      PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param      mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        } else {
            $this->validationFailures = $res;

            return false;
        }
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggreagated array of ValidationFailed objects will be returned.
     *
     * @param      array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            // We call the validate method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aEjercicioEconomico !== null) {
                if (!$this->aEjercicioEconomico->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEjercicioEconomico->getValidationFailures());
                }
            }

            if ($this->aTipoAsamblea !== null) {
                if (!$this->aTipoAsamblea->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aTipoAsamblea->getValidationFailures());
                }
            }


            if (($retval = AsambleaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param      string $name name
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = AsambleaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getIdAsamblea();
                break;
            case 1:
                return $this->getEjercicioEconomicoId();
                break;
            case 2:
                return $this->getTipoAsambleaId();
                break;
            case 3:
                return $this->getFechaDeAsamblea();
                break;
            case 4:
                return $this->getFechaDeConvocatoria();
                break;
            case 5:
                return $this->getFechaDeNuevoMandato();
                break;
            case 6:
                return $this->getObservaciones();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Asamblea'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Asamblea'][$this->getPrimaryKey()] = true;
        $keys = AsambleaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdAsamblea(),
            $keys[1] => $this->getEjercicioEconomicoId(),
            $keys[2] => $this->getTipoAsambleaId(),
            $keys[3] => $this->getFechaDeAsamblea(),
            $keys[4] => $this->getFechaDeConvocatoria(),
            $keys[5] => $this->getFechaDeNuevoMandato(),
            $keys[6] => $this->getObservaciones(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aEjercicioEconomico) {
                $result['EjercicioEconomico'] = $this->aEjercicioEconomico->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aTipoAsamblea) {
                $result['TipoAsamblea'] = $this->aTipoAsamblea->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param      string $name peer name
     * @param      mixed $value field value
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = AsambleaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @param      mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdAsamblea($value);
                break;
            case 1:
                $this->setEjercicioEconomicoId($value);
                break;
            case 2:
                $this->setTipoAsambleaId($value);
                break;
            case 3:
                $this->setFechaDeAsamblea($value);
                break;
            case 4:
                $this->setFechaDeConvocatoria($value);
                break;
            case 5:
                $this->setFechaDeNuevoMandato($value);
                break;
            case 6:
                $this->setObservaciones($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param      array  $arr     An array to populate the object from.
     * @param      string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = AsambleaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdAsamblea($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setEjercicioEconomicoId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setTipoAsambleaId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setFechaDeAsamblea($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setFechaDeConvocatoria($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setFechaDeNuevoMandato($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setObservaciones($arr[$keys[6]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(AsambleaPeer::DATABASE_NAME);

        if ($this->isColumnModified(AsambleaPeer::ID_ASAMBLEA)) $criteria->add(AsambleaPeer::ID_ASAMBLEA, $this->id_asamblea);
        if ($this->isColumnModified(AsambleaPeer::EJERCICIO_ECONOMICO_ID)) $criteria->add(AsambleaPeer::EJERCICIO_ECONOMICO_ID, $this->ejercicio_economico_id);
        if ($this->isColumnModified(AsambleaPeer::TIPO_ASAMBLEA_ID)) $criteria->add(AsambleaPeer::TIPO_ASAMBLEA_ID, $this->tipo_asamblea_id);
        if ($this->isColumnModified(AsambleaPeer::FECHA_DE_ASAMBLEA)) $criteria->add(AsambleaPeer::FECHA_DE_ASAMBLEA, $this->fecha_de_asamblea);
        if ($this->isColumnModified(AsambleaPeer::FECHA_DE_CONVOCATORIA)) $criteria->add(AsambleaPeer::FECHA_DE_CONVOCATORIA, $this->fecha_de_convocatoria);
        if ($this->isColumnModified(AsambleaPeer::FECHA_DE_NUEVO_MANDATO)) $criteria->add(AsambleaPeer::FECHA_DE_NUEVO_MANDATO, $this->fecha_de_nuevo_mandato);
        if ($this->isColumnModified(AsambleaPeer::OBSERVACIONES)) $criteria->add(AsambleaPeer::OBSERVACIONES, $this->observaciones);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(AsambleaPeer::DATABASE_NAME);
        $criteria->add(AsambleaPeer::ID_ASAMBLEA, $this->id_asamblea);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return   int
     */
    public function getPrimaryKey()
    {
        return $this->getIdAsamblea();
    }

    /**
     * Generic method to set the primary key (id_asamblea column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdAsamblea($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdAsamblea();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of Asamblea (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setEjercicioEconomicoId($this->getEjercicioEconomicoId());
        $copyObj->setTipoAsambleaId($this->getTipoAsambleaId());
        $copyObj->setFechaDeAsamblea($this->getFechaDeAsamblea());
        $copyObj->setFechaDeConvocatoria($this->getFechaDeConvocatoria());
        $copyObj->setFechaDeNuevoMandato($this->getFechaDeNuevoMandato());
        $copyObj->setObservaciones($this->getObservaciones());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdAsamblea(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return                 Asamblea Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return   AsambleaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new AsambleaPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a EjercicioEconomico object.
     *
     * @param                  EjercicioEconomico $v
     * @return                 Asamblea The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEjercicioEconomico(EjercicioEconomico $v = null)
    {
        if ($v === null) {
            $this->setEjercicioEconomicoId(NULL);
        } else {
            $this->setEjercicioEconomicoId($v->getIdEjercicioEconomico());
        }

        $this->aEjercicioEconomico = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the EjercicioEconomico object, it will not be re-added.
        if ($v !== null) {
            $v->addAsamblea($this);
        }


        return $this;
    }


    /**
     * Get the associated EjercicioEconomico object
     *
     * @param      PropelPDO $con Optional Connection object.
     * @return                 EjercicioEconomico The associated EjercicioEconomico object.
     * @throws PropelException
     */
    public function getEjercicioEconomico(PropelPDO $con = null)
    {
        if ($this->aEjercicioEconomico === null && ($this->ejercicio_economico_id !== null)) {
            $this->aEjercicioEconomico = EjercicioEconomicoQuery::create()->findPk($this->ejercicio_economico_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEjercicioEconomico->addAsambleas($this);
             */
        }

        return $this->aEjercicioEconomico;
    }

    /**
     * Declares an association between this object and a TipoAsamblea object.
     *
     * @param                  TipoAsamblea $v
     * @return                 Asamblea The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTipoAsamblea(TipoAsamblea $v = null)
    {
        if ($v === null) {
            $this->setTipoAsambleaId(NULL);
        } else {
            $this->setTipoAsambleaId($v->getIdTipoAsamblea());
        }

        $this->aTipoAsamblea = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the TipoAsamblea object, it will not be re-added.
        if ($v !== null) {
            $v->addAsamblea($this);
        }


        return $this;
    }


    /**
     * Get the associated TipoAsamblea object
     *
     * @param      PropelPDO $con Optional Connection object.
     * @return                 TipoAsamblea The associated TipoAsamblea object.
     * @throws PropelException
     */
    public function getTipoAsamblea(PropelPDO $con = null)
    {
        if ($this->aTipoAsamblea === null && ($this->tipo_asamblea_id !== null)) {
            $this->aTipoAsamblea = TipoAsambleaQuery::create()->findPk($this->tipo_asamblea_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTipoAsamblea->addAsambleas($this);
             */
        }

        return $this->aTipoAsamblea;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_asamblea = null;
        $this->ejercicio_economico_id = null;
        $this->tipo_asamblea_id = null;
        $this->fecha_de_asamblea = null;
        $this->fecha_de_convocatoria = null;
        $this->fecha_de_nuevo_mandato = null;
        $this->observaciones = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volumne/high-memory operations.
     *
     * @param      boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep) {
        } // if ($deep)

        $this->aEjercicioEconomico = null;
        $this->aTipoAsamblea = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(AsambleaPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * Catches calls to virtual methods
     */
    public function __call($name, $params)
    {
        
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseAsamblea:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}


        return parent::__call($name, $params);
    }

} // BaseAsamblea
