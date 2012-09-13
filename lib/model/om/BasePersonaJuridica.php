<?php


/**
 * Base class that represents a row from the 'persona_juridica' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePersonaJuridica extends BaseObject 
{

    /**
     * Peer class name
     */
    const PEER = 'PersonaJuridicaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PersonaJuridicaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_persona_juridica field.
     * @var        int
     */
    protected $id_persona_juridica;

    /**
     * The value for the situacion_id field.
     * @var        int
     */
    protected $situacion_id;

    /**
     * The value for the tipo_pers_juridica_id field.
     * @var        int
     */
    protected $tipo_pers_juridica_id;

    /**
     * The value for the cuit_cuil field.
     * @var        string
     */
    protected $cuit_cuil;

    /**
     * The value for the nombre_fantasia field.
     * @var        string
     */
    protected $nombre_fantasia;

    /**
     * The value for the fecha_inicio_actividad field.
     * @var        string
     */
    protected $fecha_inicio_actividad;

    /**
     * The value for the resenia field.
     * @var        string
     */
    protected $resenia;

    /**
     * The value for the legajo field.
     * @var        int
     */
    protected $legajo;

    /**
     * The value for the matricula field.
     * @var        int
     */
    protected $matricula;

    /**
     * The value for the cantidad_de_socios field.
     * @var        int
     */
    protected $cantidad_de_socios;

    /**
     * The value for the telefono field.
     * @var        string
     */
    protected $telefono;

    /**
     * The value for the email field.
     * @var        string
     */
    protected $email;

    /**
     * @var        SituacionPersonaJuridica
     */
    protected $aSituacionPersonaJuridica;

    /**
     * @var        TipoPersonaJuridica
     */
    protected $aTipoPersonaJuridica;

    /**
     * @var        PropelObjectCollection|ActividadPersJuridica[] Collection to store aggregation of ActividadPersJuridica objects.
     */
    protected $collActividadPersJuridicas;

    /**
     * @var        PropelObjectCollection|Aporte[] Collection to store aggregation of Aporte objects.
     */
    protected $collAportes;

    /**
     * @var        PropelObjectCollection|Direccion[] Collection to store aggregation of Direccion objects.
     */
    protected $collDireccions;

    /**
     * @var        PropelObjectCollection|EjercicioEconomico[] Collection to store aggregation of EjercicioEconomico objects.
     */
    protected $collEjercicioEconomicos;

    /**
     * @var        PropelObjectCollection|Estatuto[] Collection to store aggregation of Estatuto objects.
     */
    protected $collEstatutos;

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
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $actividadPersJuridicasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $aportesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $direccionsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ejercicioEconomicosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $estatutosScheduledForDeletion = null;

    /**
     * Get the [id_persona_juridica] column value.
     * 
     * @return   int
     */
    public function getIdPersonaJuridica()
    {

        return $this->id_persona_juridica;
    }

    /**
     * Get the [situacion_id] column value.
     * 
     * @return   int
     */
    public function getSituacionId()
    {

        return $this->situacion_id;
    }

    /**
     * Get the [tipo_pers_juridica_id] column value.
     * 
     * @return   int
     */
    public function getTipoPersJuridicaId()
    {

        return $this->tipo_pers_juridica_id;
    }

    /**
     * Get the [cuit_cuil] column value.
     * 
     * @return   string
     */
    public function getCuitCuil()
    {

        return $this->cuit_cuil;
    }

    /**
     * Get the [nombre_fantasia] column value.
     * 
     * @return   string
     */
    public function getNombreFantasia()
    {

        return $this->nombre_fantasia;
    }

    /**
     * Get the [optionally formatted] temporal [fecha_inicio_actividad] column value.
     * 
     *
     * @param      string $format The date/time format string (either date()-style or strftime()-style).
     *							If format is NULL, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFechaInicioActividad($format = 'Y-m-d')
    {
        if ($this->fecha_inicio_actividad === null) {
            return null;
        }


        if ($this->fecha_inicio_actividad === '0000-00-00') {
            // while technically this is not a default value of NULL,
            // this seems to be closest in meaning.
            return null;
        } else {
            try {
                $dt = new DateTime($this->fecha_inicio_actividad);
            } catch (Exception $x) {
                throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->fecha_inicio_actividad, true), $x);
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
     * Get the [resenia] column value.
     * 
     * @return   string
     */
    public function getResenia()
    {

        return $this->resenia;
    }

    /**
     * Get the [legajo] column value.
     * 
     * @return   int
     */
    public function getLegajo()
    {

        return $this->legajo;
    }

    /**
     * Get the [matricula] column value.
     * 
     * @return   int
     */
    public function getMatricula()
    {

        return $this->matricula;
    }

    /**
     * Get the [cantidad_de_socios] column value.
     * 
     * @return   int
     */
    public function getCantidadDeSocios()
    {

        return $this->cantidad_de_socios;
    }

    /**
     * Get the [telefono] column value.
     * 
     * @return   string
     */
    public function getTelefono()
    {

        return $this->telefono;
    }

    /**
     * Get the [email] column value.
     * 
     * @return   string
     */
    public function getEmail()
    {

        return $this->email;
    }

    /**
     * Set the value of [id_persona_juridica] column.
     * 
     * @param      int $v new value
     * @return   PersonaJuridica The current object (for fluent API support)
     */
    public function setIdPersonaJuridica($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id_persona_juridica !== $v) {
            $this->id_persona_juridica = $v;
            $this->modifiedColumns[] = PersonaJuridicaPeer::ID_PERSONA_JURIDICA;
        }


        return $this;
    } // setIdPersonaJuridica()

    /**
     * Set the value of [situacion_id] column.
     * 
     * @param      int $v new value
     * @return   PersonaJuridica The current object (for fluent API support)
     */
    public function setSituacionId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->situacion_id !== $v) {
            $this->situacion_id = $v;
            $this->modifiedColumns[] = PersonaJuridicaPeer::SITUACION_ID;
        }

        if ($this->aSituacionPersonaJuridica !== null && $this->aSituacionPersonaJuridica->getIdSituacionPersJuridica() !== $v) {
            $this->aSituacionPersonaJuridica = null;
        }


        return $this;
    } // setSituacionId()

    /**
     * Set the value of [tipo_pers_juridica_id] column.
     * 
     * @param      int $v new value
     * @return   PersonaJuridica The current object (for fluent API support)
     */
    public function setTipoPersJuridicaId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->tipo_pers_juridica_id !== $v) {
            $this->tipo_pers_juridica_id = $v;
            $this->modifiedColumns[] = PersonaJuridicaPeer::TIPO_PERS_JURIDICA_ID;
        }

        if ($this->aTipoPersonaJuridica !== null && $this->aTipoPersonaJuridica->getIdTipoPersonaJuridica() !== $v) {
            $this->aTipoPersonaJuridica = null;
        }


        return $this;
    } // setTipoPersJuridicaId()

    /**
     * Set the value of [cuit_cuil] column.
     * 
     * @param      string $v new value
     * @return   PersonaJuridica The current object (for fluent API support)
     */
    public function setCuitCuil($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cuit_cuil !== $v) {
            $this->cuit_cuil = $v;
            $this->modifiedColumns[] = PersonaJuridicaPeer::CUIT_CUIL;
        }


        return $this;
    } // setCuitCuil()

    /**
     * Set the value of [nombre_fantasia] column.
     * 
     * @param      string $v new value
     * @return   PersonaJuridica The current object (for fluent API support)
     */
    public function setNombreFantasia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->nombre_fantasia !== $v) {
            $this->nombre_fantasia = $v;
            $this->modifiedColumns[] = PersonaJuridicaPeer::NOMBRE_FANTASIA;
        }


        return $this;
    } // setNombreFantasia()

    /**
     * Sets the value of [fecha_inicio_actividad] column to a normalized version of the date/time value specified.
     * 
     * @param      mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as NULL.
     * @return   PersonaJuridica The current object (for fluent API support)
     */
    public function setFechaInicioActividad($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->fecha_inicio_actividad !== null || $dt !== null) {
            $currentDateAsString = ($this->fecha_inicio_actividad !== null && $tmpDt = new DateTime($this->fecha_inicio_actividad)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->fecha_inicio_actividad = $newDateAsString;
                $this->modifiedColumns[] = PersonaJuridicaPeer::FECHA_INICIO_ACTIVIDAD;
            }
        } // if either are not null


        return $this;
    } // setFechaInicioActividad()

    /**
     * Set the value of [resenia] column.
     * 
     * @param      string $v new value
     * @return   PersonaJuridica The current object (for fluent API support)
     */
    public function setResenia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->resenia !== $v) {
            $this->resenia = $v;
            $this->modifiedColumns[] = PersonaJuridicaPeer::RESENIA;
        }


        return $this;
    } // setResenia()

    /**
     * Set the value of [legajo] column.
     * 
     * @param      int $v new value
     * @return   PersonaJuridica The current object (for fluent API support)
     */
    public function setLegajo($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->legajo !== $v) {
            $this->legajo = $v;
            $this->modifiedColumns[] = PersonaJuridicaPeer::LEGAJO;
        }


        return $this;
    } // setLegajo()

    /**
     * Set the value of [matricula] column.
     * 
     * @param      int $v new value
     * @return   PersonaJuridica The current object (for fluent API support)
     */
    public function setMatricula($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->matricula !== $v) {
            $this->matricula = $v;
            $this->modifiedColumns[] = PersonaJuridicaPeer::MATRICULA;
        }


        return $this;
    } // setMatricula()

    /**
     * Set the value of [cantidad_de_socios] column.
     * 
     * @param      int $v new value
     * @return   PersonaJuridica The current object (for fluent API support)
     */
    public function setCantidadDeSocios($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->cantidad_de_socios !== $v) {
            $this->cantidad_de_socios = $v;
            $this->modifiedColumns[] = PersonaJuridicaPeer::CANTIDAD_DE_SOCIOS;
        }


        return $this;
    } // setCantidadDeSocios()

    /**
     * Set the value of [telefono] column.
     * 
     * @param      string $v new value
     * @return   PersonaJuridica The current object (for fluent API support)
     */
    public function setTelefono($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->telefono !== $v) {
            $this->telefono = $v;
            $this->modifiedColumns[] = PersonaJuridicaPeer::TELEFONO;
        }


        return $this;
    } // setTelefono()

    /**
     * Set the value of [email] column.
     * 
     * @param      string $v new value
     * @return   PersonaJuridica The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = PersonaJuridicaPeer::EMAIL;
        }


        return $this;
    } // setEmail()

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

            $this->id_persona_juridica = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->situacion_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->tipo_pers_juridica_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->cuit_cuil = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->nombre_fantasia = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->fecha_inicio_actividad = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->resenia = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->legajo = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->matricula = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->cantidad_de_socios = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->telefono = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->email = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 12; // 12 = PersonaJuridicaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating PersonaJuridica object", $e);
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

        if ($this->aSituacionPersonaJuridica !== null && $this->situacion_id !== $this->aSituacionPersonaJuridica->getIdSituacionPersJuridica()) {
            $this->aSituacionPersonaJuridica = null;
        }
        if ($this->aTipoPersonaJuridica !== null && $this->tipo_pers_juridica_id !== $this->aTipoPersonaJuridica->getIdTipoPersonaJuridica()) {
            $this->aTipoPersonaJuridica = null;
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
            $con = Propel::getConnection(PersonaJuridicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PersonaJuridicaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aSituacionPersonaJuridica = null;
            $this->aTipoPersonaJuridica = null;
            $this->collActividadPersJuridicas = null;

            $this->collAportes = null;

            $this->collDireccions = null;

            $this->collEjercicioEconomicos = null;

            $this->collEstatutos = null;

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
            $con = Propel::getConnection(PersonaJuridicaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PersonaJuridicaQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BasePersonaJuridica:delete:pre') as $callable)
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
				foreach (sfMixer::getCallables('BasePersonaJuridica:delete:post') as $callable)
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
            $con = Propel::getConnection(PersonaJuridicaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BasePersonaJuridica:save:pre') as $callable)
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
				foreach (sfMixer::getCallables('BasePersonaJuridica:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

                PersonaJuridicaPeer::addInstanceToPool($this);
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

            if ($this->aSituacionPersonaJuridica !== null) {
                if ($this->aSituacionPersonaJuridica->isModified() || $this->aSituacionPersonaJuridica->isNew()) {
                    $affectedRows += $this->aSituacionPersonaJuridica->save($con);
                }
                $this->setSituacionPersonaJuridica($this->aSituacionPersonaJuridica);
            }

            if ($this->aTipoPersonaJuridica !== null) {
                if ($this->aTipoPersonaJuridica->isModified() || $this->aTipoPersonaJuridica->isNew()) {
                    $affectedRows += $this->aTipoPersonaJuridica->save($con);
                }
                $this->setTipoPersonaJuridica($this->aTipoPersonaJuridica);
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

            if ($this->actividadPersJuridicasScheduledForDeletion !== null) {
                if (!$this->actividadPersJuridicasScheduledForDeletion->isEmpty()) {
                    ActividadPersJuridicaQuery::create()
                        ->filterByPrimaryKeys($this->actividadPersJuridicasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->actividadPersJuridicasScheduledForDeletion = null;
                }
            }

            if ($this->collActividadPersJuridicas !== null) {
                foreach ($this->collActividadPersJuridicas as $referrerFK) {
                    if (!$referrerFK->isDeleted()) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->aportesScheduledForDeletion !== null) {
                if (!$this->aportesScheduledForDeletion->isEmpty()) {
                    AporteQuery::create()
                        ->filterByPrimaryKeys($this->aportesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->aportesScheduledForDeletion = null;
                }
            }

            if ($this->collAportes !== null) {
                foreach ($this->collAportes as $referrerFK) {
                    if (!$referrerFK->isDeleted()) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->direccionsScheduledForDeletion !== null) {
                if (!$this->direccionsScheduledForDeletion->isEmpty()) {
                    DireccionQuery::create()
                        ->filterByPrimaryKeys($this->direccionsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->direccionsScheduledForDeletion = null;
                }
            }

            if ($this->collDireccions !== null) {
                foreach ($this->collDireccions as $referrerFK) {
                    if (!$referrerFK->isDeleted()) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ejercicioEconomicosScheduledForDeletion !== null) {
                if (!$this->ejercicioEconomicosScheduledForDeletion->isEmpty()) {
                    EjercicioEconomicoQuery::create()
                        ->filterByPrimaryKeys($this->ejercicioEconomicosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->ejercicioEconomicosScheduledForDeletion = null;
                }
            }

            if ($this->collEjercicioEconomicos !== null) {
                foreach ($this->collEjercicioEconomicos as $referrerFK) {
                    if (!$referrerFK->isDeleted()) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->estatutosScheduledForDeletion !== null) {
                if (!$this->estatutosScheduledForDeletion->isEmpty()) {
                    EstatutoQuery::create()
                        ->filterByPrimaryKeys($this->estatutosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->estatutosScheduledForDeletion = null;
                }
            }

            if ($this->collEstatutos !== null) {
                foreach ($this->collEstatutos as $referrerFK) {
                    if (!$referrerFK->isDeleted()) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[] = PersonaJuridicaPeer::ID_PERSONA_JURIDICA;
        if (null !== $this->id_persona_juridica) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PersonaJuridicaPeer::ID_PERSONA_JURIDICA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PersonaJuridicaPeer::ID_PERSONA_JURIDICA)) {
            $modifiedColumns[':p' . $index++]  = '`ID_PERSONA_JURIDICA`';
        }
        if ($this->isColumnModified(PersonaJuridicaPeer::SITUACION_ID)) {
            $modifiedColumns[':p' . $index++]  = '`SITUACION_ID`';
        }
        if ($this->isColumnModified(PersonaJuridicaPeer::TIPO_PERS_JURIDICA_ID)) {
            $modifiedColumns[':p' . $index++]  = '`TIPO_PERS_JURIDICA_ID`';
        }
        if ($this->isColumnModified(PersonaJuridicaPeer::CUIT_CUIL)) {
            $modifiedColumns[':p' . $index++]  = '`CUIT_CUIL`';
        }
        if ($this->isColumnModified(PersonaJuridicaPeer::NOMBRE_FANTASIA)) {
            $modifiedColumns[':p' . $index++]  = '`NOMBRE_FANTASIA`';
        }
        if ($this->isColumnModified(PersonaJuridicaPeer::FECHA_INICIO_ACTIVIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`FECHA_INICIO_ACTIVIDAD`';
        }
        if ($this->isColumnModified(PersonaJuridicaPeer::RESENIA)) {
            $modifiedColumns[':p' . $index++]  = '`RESENIA`';
        }
        if ($this->isColumnModified(PersonaJuridicaPeer::LEGAJO)) {
            $modifiedColumns[':p' . $index++]  = '`LEGAJO`';
        }
        if ($this->isColumnModified(PersonaJuridicaPeer::MATRICULA)) {
            $modifiedColumns[':p' . $index++]  = '`MATRICULA`';
        }
        if ($this->isColumnModified(PersonaJuridicaPeer::CANTIDAD_DE_SOCIOS)) {
            $modifiedColumns[':p' . $index++]  = '`CANTIDAD_DE_SOCIOS`';
        }
        if ($this->isColumnModified(PersonaJuridicaPeer::TELEFONO)) {
            $modifiedColumns[':p' . $index++]  = '`TELEFONO`';
        }
        if ($this->isColumnModified(PersonaJuridicaPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`EMAIL`';
        }

        $sql = sprintf(
            'INSERT INTO `persona_juridica` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_PERSONA_JURIDICA`':
						$stmt->bindValue($identifier, $this->id_persona_juridica, PDO::PARAM_INT);
                        break;
                    case '`SITUACION_ID`':
						$stmt->bindValue($identifier, $this->situacion_id, PDO::PARAM_INT);
                        break;
                    case '`TIPO_PERS_JURIDICA_ID`':
						$stmt->bindValue($identifier, $this->tipo_pers_juridica_id, PDO::PARAM_INT);
                        break;
                    case '`CUIT_CUIL`':
						$stmt->bindValue($identifier, $this->cuit_cuil, PDO::PARAM_INT);
                        break;
                    case '`NOMBRE_FANTASIA`':
						$stmt->bindValue($identifier, $this->nombre_fantasia, PDO::PARAM_STR);
                        break;
                    case '`FECHA_INICIO_ACTIVIDAD`':
						$stmt->bindValue($identifier, $this->fecha_inicio_actividad, PDO::PARAM_STR);
                        break;
                    case '`RESENIA`':
						$stmt->bindValue($identifier, $this->resenia, PDO::PARAM_STR);
                        break;
                    case '`LEGAJO`':
						$stmt->bindValue($identifier, $this->legajo, PDO::PARAM_INT);
                        break;
                    case '`MATRICULA`':
						$stmt->bindValue($identifier, $this->matricula, PDO::PARAM_INT);
                        break;
                    case '`CANTIDAD_DE_SOCIOS`':
						$stmt->bindValue($identifier, $this->cantidad_de_socios, PDO::PARAM_INT);
                        break;
                    case '`TELEFONO`':
						$stmt->bindValue($identifier, $this->telefono, PDO::PARAM_STR);
                        break;
                    case '`EMAIL`':
						$stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
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
        $this->setIdPersonaJuridica($pk);

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

            if ($this->aSituacionPersonaJuridica !== null) {
                if (!$this->aSituacionPersonaJuridica->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aSituacionPersonaJuridica->getValidationFailures());
                }
            }

            if ($this->aTipoPersonaJuridica !== null) {
                if (!$this->aTipoPersonaJuridica->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aTipoPersonaJuridica->getValidationFailures());
                }
            }


            if (($retval = PersonaJuridicaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collActividadPersJuridicas !== null) {
                    foreach ($this->collActividadPersJuridicas as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collAportes !== null) {
                    foreach ($this->collAportes as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collDireccions !== null) {
                    foreach ($this->collDireccions as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collEjercicioEconomicos !== null) {
                    foreach ($this->collEjercicioEconomicos as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collEstatutos !== null) {
                    foreach ($this->collEstatutos as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = PersonaJuridicaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdPersonaJuridica();
                break;
            case 1:
                return $this->getSituacionId();
                break;
            case 2:
                return $this->getTipoPersJuridicaId();
                break;
            case 3:
                return $this->getCuitCuil();
                break;
            case 4:
                return $this->getNombreFantasia();
                break;
            case 5:
                return $this->getFechaInicioActividad();
                break;
            case 6:
                return $this->getResenia();
                break;
            case 7:
                return $this->getLegajo();
                break;
            case 8:
                return $this->getMatricula();
                break;
            case 9:
                return $this->getCantidadDeSocios();
                break;
            case 10:
                return $this->getTelefono();
                break;
            case 11:
                return $this->getEmail();
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
        if (isset($alreadyDumpedObjects['PersonaJuridica'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['PersonaJuridica'][$this->getPrimaryKey()] = true;
        $keys = PersonaJuridicaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdPersonaJuridica(),
            $keys[1] => $this->getSituacionId(),
            $keys[2] => $this->getTipoPersJuridicaId(),
            $keys[3] => $this->getCuitCuil(),
            $keys[4] => $this->getNombreFantasia(),
            $keys[5] => $this->getFechaInicioActividad(),
            $keys[6] => $this->getResenia(),
            $keys[7] => $this->getLegajo(),
            $keys[8] => $this->getMatricula(),
            $keys[9] => $this->getCantidadDeSocios(),
            $keys[10] => $this->getTelefono(),
            $keys[11] => $this->getEmail(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aSituacionPersonaJuridica) {
                $result['SituacionPersonaJuridica'] = $this->aSituacionPersonaJuridica->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aTipoPersonaJuridica) {
                $result['TipoPersonaJuridica'] = $this->aTipoPersonaJuridica->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collActividadPersJuridicas) {
                $result['ActividadPersJuridicas'] = $this->collActividadPersJuridicas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collAportes) {
                $result['Aportes'] = $this->collAportes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collDireccions) {
                $result['Direccions'] = $this->collDireccions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collEjercicioEconomicos) {
                $result['EjercicioEconomicos'] = $this->collEjercicioEconomicos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collEstatutos) {
                $result['Estatutos'] = $this->collEstatutos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = PersonaJuridicaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdPersonaJuridica($value);
                break;
            case 1:
                $this->setSituacionId($value);
                break;
            case 2:
                $this->setTipoPersJuridicaId($value);
                break;
            case 3:
                $this->setCuitCuil($value);
                break;
            case 4:
                $this->setNombreFantasia($value);
                break;
            case 5:
                $this->setFechaInicioActividad($value);
                break;
            case 6:
                $this->setResenia($value);
                break;
            case 7:
                $this->setLegajo($value);
                break;
            case 8:
                $this->setMatricula($value);
                break;
            case 9:
                $this->setCantidadDeSocios($value);
                break;
            case 10:
                $this->setTelefono($value);
                break;
            case 11:
                $this->setEmail($value);
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
        $keys = PersonaJuridicaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdPersonaJuridica($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSituacionId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setTipoPersJuridicaId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCuitCuil($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setNombreFantasia($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setFechaInicioActividad($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setResenia($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setLegajo($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setMatricula($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCantidadDeSocios($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setTelefono($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setEmail($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PersonaJuridicaPeer::DATABASE_NAME);

        if ($this->isColumnModified(PersonaJuridicaPeer::ID_PERSONA_JURIDICA)) $criteria->add(PersonaJuridicaPeer::ID_PERSONA_JURIDICA, $this->id_persona_juridica);
        if ($this->isColumnModified(PersonaJuridicaPeer::SITUACION_ID)) $criteria->add(PersonaJuridicaPeer::SITUACION_ID, $this->situacion_id);
        if ($this->isColumnModified(PersonaJuridicaPeer::TIPO_PERS_JURIDICA_ID)) $criteria->add(PersonaJuridicaPeer::TIPO_PERS_JURIDICA_ID, $this->tipo_pers_juridica_id);
        if ($this->isColumnModified(PersonaJuridicaPeer::CUIT_CUIL)) $criteria->add(PersonaJuridicaPeer::CUIT_CUIL, $this->cuit_cuil);
        if ($this->isColumnModified(PersonaJuridicaPeer::NOMBRE_FANTASIA)) $criteria->add(PersonaJuridicaPeer::NOMBRE_FANTASIA, $this->nombre_fantasia);
        if ($this->isColumnModified(PersonaJuridicaPeer::FECHA_INICIO_ACTIVIDAD)) $criteria->add(PersonaJuridicaPeer::FECHA_INICIO_ACTIVIDAD, $this->fecha_inicio_actividad);
        if ($this->isColumnModified(PersonaJuridicaPeer::RESENIA)) $criteria->add(PersonaJuridicaPeer::RESENIA, $this->resenia);
        if ($this->isColumnModified(PersonaJuridicaPeer::LEGAJO)) $criteria->add(PersonaJuridicaPeer::LEGAJO, $this->legajo);
        if ($this->isColumnModified(PersonaJuridicaPeer::MATRICULA)) $criteria->add(PersonaJuridicaPeer::MATRICULA, $this->matricula);
        if ($this->isColumnModified(PersonaJuridicaPeer::CANTIDAD_DE_SOCIOS)) $criteria->add(PersonaJuridicaPeer::CANTIDAD_DE_SOCIOS, $this->cantidad_de_socios);
        if ($this->isColumnModified(PersonaJuridicaPeer::TELEFONO)) $criteria->add(PersonaJuridicaPeer::TELEFONO, $this->telefono);
        if ($this->isColumnModified(PersonaJuridicaPeer::EMAIL)) $criteria->add(PersonaJuridicaPeer::EMAIL, $this->email);

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
        $criteria = new Criteria(PersonaJuridicaPeer::DATABASE_NAME);
        $criteria->add(PersonaJuridicaPeer::ID_PERSONA_JURIDICA, $this->id_persona_juridica);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return   int
     */
    public function getPrimaryKey()
    {
        return $this->getIdPersonaJuridica();
    }

    /**
     * Generic method to set the primary key (id_persona_juridica column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdPersonaJuridica($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdPersonaJuridica();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of PersonaJuridica (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSituacionId($this->getSituacionId());
        $copyObj->setTipoPersJuridicaId($this->getTipoPersJuridicaId());
        $copyObj->setCuitCuil($this->getCuitCuil());
        $copyObj->setNombreFantasia($this->getNombreFantasia());
        $copyObj->setFechaInicioActividad($this->getFechaInicioActividad());
        $copyObj->setResenia($this->getResenia());
        $copyObj->setLegajo($this->getLegajo());
        $copyObj->setMatricula($this->getMatricula());
        $copyObj->setCantidadDeSocios($this->getCantidadDeSocios());
        $copyObj->setTelefono($this->getTelefono());
        $copyObj->setEmail($this->getEmail());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getActividadPersJuridicas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addActividadPersJuridica($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getAportes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addAporte($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getDireccions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addDireccion($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getEjercicioEconomicos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addEjercicioEconomico($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getEstatutos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addEstatuto($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdPersonaJuridica(NULL); // this is a auto-increment column, so set to default value
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
     * @return                 PersonaJuridica Clone of current object.
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
     * @return   PersonaJuridicaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PersonaJuridicaPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a SituacionPersonaJuridica object.
     *
     * @param                  SituacionPersonaJuridica $v
     * @return                 PersonaJuridica The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSituacionPersonaJuridica(SituacionPersonaJuridica $v = null)
    {
        if ($v === null) {
            $this->setSituacionId(NULL);
        } else {
            $this->setSituacionId($v->getIdSituacionPersJuridica());
        }

        $this->aSituacionPersonaJuridica = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the SituacionPersonaJuridica object, it will not be re-added.
        if ($v !== null) {
            $v->addPersonaJuridica($this);
        }


        return $this;
    }


    /**
     * Get the associated SituacionPersonaJuridica object
     *
     * @param      PropelPDO $con Optional Connection object.
     * @return                 SituacionPersonaJuridica The associated SituacionPersonaJuridica object.
     * @throws PropelException
     */
    public function getSituacionPersonaJuridica(PropelPDO $con = null)
    {
        if ($this->aSituacionPersonaJuridica === null && ($this->situacion_id !== null)) {
            $this->aSituacionPersonaJuridica = SituacionPersonaJuridicaQuery::create()->findPk($this->situacion_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSituacionPersonaJuridica->addPersonaJuridicas($this);
             */
        }

        return $this->aSituacionPersonaJuridica;
    }

    /**
     * Declares an association between this object and a TipoPersonaJuridica object.
     *
     * @param                  TipoPersonaJuridica $v
     * @return                 PersonaJuridica The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTipoPersonaJuridica(TipoPersonaJuridica $v = null)
    {
        if ($v === null) {
            $this->setTipoPersJuridicaId(NULL);
        } else {
            $this->setTipoPersJuridicaId($v->getIdTipoPersonaJuridica());
        }

        $this->aTipoPersonaJuridica = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the TipoPersonaJuridica object, it will not be re-added.
        if ($v !== null) {
            $v->addPersonaJuridica($this);
        }


        return $this;
    }


    /**
     * Get the associated TipoPersonaJuridica object
     *
     * @param      PropelPDO $con Optional Connection object.
     * @return                 TipoPersonaJuridica The associated TipoPersonaJuridica object.
     * @throws PropelException
     */
    public function getTipoPersonaJuridica(PropelPDO $con = null)
    {
        if ($this->aTipoPersonaJuridica === null && ($this->tipo_pers_juridica_id !== null)) {
            $this->aTipoPersonaJuridica = TipoPersonaJuridicaQuery::create()->findPk($this->tipo_pers_juridica_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTipoPersonaJuridica->addPersonaJuridicas($this);
             */
        }

        return $this->aTipoPersonaJuridica;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param      string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('ActividadPersJuridica' == $relationName) {
            $this->initActividadPersJuridicas();
        }
        if ('Aporte' == $relationName) {
            $this->initAportes();
        }
        if ('Direccion' == $relationName) {
            $this->initDireccions();
        }
        if ('EjercicioEconomico' == $relationName) {
            $this->initEjercicioEconomicos();
        }
        if ('Estatuto' == $relationName) {
            $this->initEstatutos();
        }
    }

    /**
     * Clears out the collActividadPersJuridicas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addActividadPersJuridicas()
     */
    public function clearActividadPersJuridicas()
    {
        $this->collActividadPersJuridicas = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collActividadPersJuridicas collection.
     *
     * By default this just sets the collActividadPersJuridicas collection to an empty array (like clearcollActividadPersJuridicas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initActividadPersJuridicas($overrideExisting = true)
    {
        if (null !== $this->collActividadPersJuridicas && !$overrideExisting) {
            return;
        }
        $this->collActividadPersJuridicas = new PropelObjectCollection();
        $this->collActividadPersJuridicas->setModel('ActividadPersJuridica');
    }

    /**
     * Gets an array of ActividadPersJuridica objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this PersonaJuridica is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @return PropelObjectCollection|ActividadPersJuridica[] List of ActividadPersJuridica objects
     * @throws PropelException
     */
    public function getActividadPersJuridicas($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collActividadPersJuridicas || null !== $criteria) {
            if ($this->isNew() && null === $this->collActividadPersJuridicas) {
                // return empty collection
                $this->initActividadPersJuridicas();
            } else {
                $collActividadPersJuridicas = ActividadPersJuridicaQuery::create(null, $criteria)
                    ->filterByPersonaJuridica($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collActividadPersJuridicas;
                }
                $this->collActividadPersJuridicas = $collActividadPersJuridicas;
            }
        }

        return $this->collActividadPersJuridicas;
    }

    /**
     * Sets a collection of ActividadPersJuridica objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      PropelCollection $actividadPersJuridicas A Propel collection.
     * @param      PropelPDO $con Optional connection object
     */
    public function setActividadPersJuridicas(PropelCollection $actividadPersJuridicas, PropelPDO $con = null)
    {
        $this->actividadPersJuridicasScheduledForDeletion = $this->getActividadPersJuridicas(new Criteria(), $con)->diff($actividadPersJuridicas);

        foreach ($this->actividadPersJuridicasScheduledForDeletion as $actividadPersJuridicaRemoved) {
            $actividadPersJuridicaRemoved->setPersonaJuridica(null);
        }

        $this->collActividadPersJuridicas = null;
        foreach ($actividadPersJuridicas as $actividadPersJuridica) {
            $this->addActividadPersJuridica($actividadPersJuridica);
        }

        $this->collActividadPersJuridicas = $actividadPersJuridicas;
    }

    /**
     * Returns the number of related ActividadPersJuridica objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      PropelPDO $con
     * @return int             Count of related ActividadPersJuridica objects.
     * @throws PropelException
     */
    public function countActividadPersJuridicas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collActividadPersJuridicas || null !== $criteria) {
            if ($this->isNew() && null === $this->collActividadPersJuridicas) {
                return 0;
            } else {
                $query = ActividadPersJuridicaQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByPersonaJuridica($this)
                    ->count($con);
            }
        } else {
            return count($this->collActividadPersJuridicas);
        }
    }

    /**
     * Method called to associate a ActividadPersJuridica object to this object
     * through the ActividadPersJuridica foreign key attribute.
     *
     * @param    ActividadPersJuridica $l ActividadPersJuridica
     * @return   PersonaJuridica The current object (for fluent API support)
     */
    public function addActividadPersJuridica(ActividadPersJuridica $l)
    {
        if ($this->collActividadPersJuridicas === null) {
            $this->initActividadPersJuridicas();
        }
        if (!$this->collActividadPersJuridicas->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddActividadPersJuridica($l);
        }

        return $this;
    }

    /**
     * @param	ActividadPersJuridica $actividadPersJuridica The actividadPersJuridica object to add.
     */
    protected function doAddActividadPersJuridica($actividadPersJuridica)
    {
        $this->collActividadPersJuridicas[]= $actividadPersJuridica;
        $actividadPersJuridica->setPersonaJuridica($this);
    }

    /**
     * @param	ActividadPersJuridica $actividadPersJuridica The actividadPersJuridica object to remove.
     */
    public function removeActividadPersJuridica($actividadPersJuridica)
    {
        if ($this->getActividadPersJuridicas()->contains($actividadPersJuridica)) {
            $this->collActividadPersJuridicas->remove($this->collActividadPersJuridicas->search($actividadPersJuridica));
            if (null === $this->actividadPersJuridicasScheduledForDeletion) {
                $this->actividadPersJuridicasScheduledForDeletion = clone $this->collActividadPersJuridicas;
                $this->actividadPersJuridicasScheduledForDeletion->clear();
            }
            $this->actividadPersJuridicasScheduledForDeletion[]= $actividadPersJuridica;
            $actividadPersJuridica->setPersonaJuridica(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PersonaJuridica is new, it will return
     * an empty collection; or if this PersonaJuridica has previously
     * been saved, it will retrieve related ActividadPersJuridicas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PersonaJuridica.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ActividadPersJuridica[] List of ActividadPersJuridica objects
     */
    public function getActividadPersJuridicasJoinActividad($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ActividadPersJuridicaQuery::create(null, $criteria);
        $query->joinWith('Actividad', $join_behavior);

        return $this->getActividadPersJuridicas($query, $con);
    }

    /**
     * Clears out the collAportes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addAportes()
     */
    public function clearAportes()
    {
        $this->collAportes = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collAportes collection.
     *
     * By default this just sets the collAportes collection to an empty array (like clearcollAportes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initAportes($overrideExisting = true)
    {
        if (null !== $this->collAportes && !$overrideExisting) {
            return;
        }
        $this->collAportes = new PropelObjectCollection();
        $this->collAportes->setModel('Aporte');
    }

    /**
     * Gets an array of Aporte objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this PersonaJuridica is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @return PropelObjectCollection|Aporte[] List of Aporte objects
     * @throws PropelException
     */
    public function getAportes($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collAportes || null !== $criteria) {
            if ($this->isNew() && null === $this->collAportes) {
                // return empty collection
                $this->initAportes();
            } else {
                $collAportes = AporteQuery::create(null, $criteria)
                    ->filterByPersonaJuridica($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collAportes;
                }
                $this->collAportes = $collAportes;
            }
        }

        return $this->collAportes;
    }

    /**
     * Sets a collection of Aporte objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      PropelCollection $aportes A Propel collection.
     * @param      PropelPDO $con Optional connection object
     */
    public function setAportes(PropelCollection $aportes, PropelPDO $con = null)
    {
        $this->aportesScheduledForDeletion = $this->getAportes(new Criteria(), $con)->diff($aportes);

        foreach ($this->aportesScheduledForDeletion as $aporteRemoved) {
            $aporteRemoved->setPersonaJuridica(null);
        }

        $this->collAportes = null;
        foreach ($aportes as $aporte) {
            $this->addAporte($aporte);
        }

        $this->collAportes = $aportes;
    }

    /**
     * Returns the number of related Aporte objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      PropelPDO $con
     * @return int             Count of related Aporte objects.
     * @throws PropelException
     */
    public function countAportes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collAportes || null !== $criteria) {
            if ($this->isNew() && null === $this->collAportes) {
                return 0;
            } else {
                $query = AporteQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByPersonaJuridica($this)
                    ->count($con);
            }
        } else {
            return count($this->collAportes);
        }
    }

    /**
     * Method called to associate a Aporte object to this object
     * through the Aporte foreign key attribute.
     *
     * @param    Aporte $l Aporte
     * @return   PersonaJuridica The current object (for fluent API support)
     */
    public function addAporte(Aporte $l)
    {
        if ($this->collAportes === null) {
            $this->initAportes();
        }
        if (!$this->collAportes->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddAporte($l);
        }

        return $this;
    }

    /**
     * @param	Aporte $aporte The aporte object to add.
     */
    protected function doAddAporte($aporte)
    {
        $this->collAportes[]= $aporte;
        $aporte->setPersonaJuridica($this);
    }

    /**
     * @param	Aporte $aporte The aporte object to remove.
     */
    public function removeAporte($aporte)
    {
        if ($this->getAportes()->contains($aporte)) {
            $this->collAportes->remove($this->collAportes->search($aporte));
            if (null === $this->aportesScheduledForDeletion) {
                $this->aportesScheduledForDeletion = clone $this->collAportes;
                $this->aportesScheduledForDeletion->clear();
            }
            $this->aportesScheduledForDeletion[]= $aporte;
            $aporte->setPersonaJuridica(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PersonaJuridica is new, it will return
     * an empty collection; or if this PersonaJuridica has previously
     * been saved, it will retrieve related Aportes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PersonaJuridica.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Aporte[] List of Aporte objects
     */
    public function getAportesJoinTipoAporte($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = AporteQuery::create(null, $criteria);
        $query->joinWith('TipoAporte', $join_behavior);

        return $this->getAportes($query, $con);
    }

    /**
     * Clears out the collDireccions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addDireccions()
     */
    public function clearDireccions()
    {
        $this->collDireccions = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collDireccions collection.
     *
     * By default this just sets the collDireccions collection to an empty array (like clearcollDireccions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initDireccions($overrideExisting = true)
    {
        if (null !== $this->collDireccions && !$overrideExisting) {
            return;
        }
        $this->collDireccions = new PropelObjectCollection();
        $this->collDireccions->setModel('Direccion');
    }

    /**
     * Gets an array of Direccion objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this PersonaJuridica is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @return PropelObjectCollection|Direccion[] List of Direccion objects
     * @throws PropelException
     */
    public function getDireccions($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collDireccions || null !== $criteria) {
            if ($this->isNew() && null === $this->collDireccions) {
                // return empty collection
                $this->initDireccions();
            } else {
                $collDireccions = DireccionQuery::create(null, $criteria)
                    ->filterByPersonaJuridica($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collDireccions;
                }
                $this->collDireccions = $collDireccions;
            }
        }

        return $this->collDireccions;
    }

    /**
     * Sets a collection of Direccion objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      PropelCollection $direccions A Propel collection.
     * @param      PropelPDO $con Optional connection object
     */
    public function setDireccions(PropelCollection $direccions, PropelPDO $con = null)
    {
        $this->direccionsScheduledForDeletion = $this->getDireccions(new Criteria(), $con)->diff($direccions);

        foreach ($this->direccionsScheduledForDeletion as $direccionRemoved) {
            $direccionRemoved->setPersonaJuridica(null);
        }

        $this->collDireccions = null;
        foreach ($direccions as $direccion) {
            $this->addDireccion($direccion);
        }

        $this->collDireccions = $direccions;
    }

    /**
     * Returns the number of related Direccion objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      PropelPDO $con
     * @return int             Count of related Direccion objects.
     * @throws PropelException
     */
    public function countDireccions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collDireccions || null !== $criteria) {
            if ($this->isNew() && null === $this->collDireccions) {
                return 0;
            } else {
                $query = DireccionQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByPersonaJuridica($this)
                    ->count($con);
            }
        } else {
            return count($this->collDireccions);
        }
    }

    /**
     * Method called to associate a Direccion object to this object
     * through the Direccion foreign key attribute.
     *
     * @param    Direccion $l Direccion
     * @return   PersonaJuridica The current object (for fluent API support)
     */
    public function addDireccion(Direccion $l)
    {
        if ($this->collDireccions === null) {
            $this->initDireccions();
        }
        if (!$this->collDireccions->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddDireccion($l);
        }

        return $this;
    }

    /**
     * @param	Direccion $direccion The direccion object to add.
     */
    protected function doAddDireccion($direccion)
    {
        $this->collDireccions[]= $direccion;
        $direccion->setPersonaJuridica($this);
    }

    /**
     * @param	Direccion $direccion The direccion object to remove.
     */
    public function removeDireccion($direccion)
    {
        if ($this->getDireccions()->contains($direccion)) {
            $this->collDireccions->remove($this->collDireccions->search($direccion));
            if (null === $this->direccionsScheduledForDeletion) {
                $this->direccionsScheduledForDeletion = clone $this->collDireccions;
                $this->direccionsScheduledForDeletion->clear();
            }
            $this->direccionsScheduledForDeletion[]= $direccion;
            $direccion->setPersonaJuridica(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PersonaJuridica is new, it will return
     * an empty collection; or if this PersonaJuridica has previously
     * been saved, it will retrieve related Direccions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PersonaJuridica.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Direccion[] List of Direccion objects
     */
    public function getDireccionsJoinTipoDireccion($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = DireccionQuery::create(null, $criteria);
        $query->joinWith('TipoDireccion', $join_behavior);

        return $this->getDireccions($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PersonaJuridica is new, it will return
     * an empty collection; or if this PersonaJuridica has previously
     * been saved, it will retrieve related Direccions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PersonaJuridica.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Direccion[] List of Direccion objects
     */
    public function getDireccionsJoinLocalidad($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = DireccionQuery::create(null, $criteria);
        $query->joinWith('Localidad', $join_behavior);

        return $this->getDireccions($query, $con);
    }

    /**
     * Clears out the collEjercicioEconomicos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addEjercicioEconomicos()
     */
    public function clearEjercicioEconomicos()
    {
        $this->collEjercicioEconomicos = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collEjercicioEconomicos collection.
     *
     * By default this just sets the collEjercicioEconomicos collection to an empty array (like clearcollEjercicioEconomicos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initEjercicioEconomicos($overrideExisting = true)
    {
        if (null !== $this->collEjercicioEconomicos && !$overrideExisting) {
            return;
        }
        $this->collEjercicioEconomicos = new PropelObjectCollection();
        $this->collEjercicioEconomicos->setModel('EjercicioEconomico');
    }

    /**
     * Gets an array of EjercicioEconomico objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this PersonaJuridica is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @return PropelObjectCollection|EjercicioEconomico[] List of EjercicioEconomico objects
     * @throws PropelException
     */
    public function getEjercicioEconomicos($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collEjercicioEconomicos || null !== $criteria) {
            if ($this->isNew() && null === $this->collEjercicioEconomicos) {
                // return empty collection
                $this->initEjercicioEconomicos();
            } else {
                $collEjercicioEconomicos = EjercicioEconomicoQuery::create(null, $criteria)
                    ->filterByPersonaJuridica($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collEjercicioEconomicos;
                }
                $this->collEjercicioEconomicos = $collEjercicioEconomicos;
            }
        }

        return $this->collEjercicioEconomicos;
    }

    /**
     * Sets a collection of EjercicioEconomico objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      PropelCollection $ejercicioEconomicos A Propel collection.
     * @param      PropelPDO $con Optional connection object
     */
    public function setEjercicioEconomicos(PropelCollection $ejercicioEconomicos, PropelPDO $con = null)
    {
        $this->ejercicioEconomicosScheduledForDeletion = $this->getEjercicioEconomicos(new Criteria(), $con)->diff($ejercicioEconomicos);

        foreach ($this->ejercicioEconomicosScheduledForDeletion as $ejercicioEconomicoRemoved) {
            $ejercicioEconomicoRemoved->setPersonaJuridica(null);
        }

        $this->collEjercicioEconomicos = null;
        foreach ($ejercicioEconomicos as $ejercicioEconomico) {
            $this->addEjercicioEconomico($ejercicioEconomico);
        }

        $this->collEjercicioEconomicos = $ejercicioEconomicos;
    }

    /**
     * Returns the number of related EjercicioEconomico objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      PropelPDO $con
     * @return int             Count of related EjercicioEconomico objects.
     * @throws PropelException
     */
    public function countEjercicioEconomicos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collEjercicioEconomicos || null !== $criteria) {
            if ($this->isNew() && null === $this->collEjercicioEconomicos) {
                return 0;
            } else {
                $query = EjercicioEconomicoQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByPersonaJuridica($this)
                    ->count($con);
            }
        } else {
            return count($this->collEjercicioEconomicos);
        }
    }

    /**
     * Method called to associate a EjercicioEconomico object to this object
     * through the EjercicioEconomico foreign key attribute.
     *
     * @param    EjercicioEconomico $l EjercicioEconomico
     * @return   PersonaJuridica The current object (for fluent API support)
     */
    public function addEjercicioEconomico(EjercicioEconomico $l)
    {
        if ($this->collEjercicioEconomicos === null) {
            $this->initEjercicioEconomicos();
        }
        if (!$this->collEjercicioEconomicos->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddEjercicioEconomico($l);
        }

        return $this;
    }

    /**
     * @param	EjercicioEconomico $ejercicioEconomico The ejercicioEconomico object to add.
     */
    protected function doAddEjercicioEconomico($ejercicioEconomico)
    {
        $this->collEjercicioEconomicos[]= $ejercicioEconomico;
        $ejercicioEconomico->setPersonaJuridica($this);
    }

    /**
     * @param	EjercicioEconomico $ejercicioEconomico The ejercicioEconomico object to remove.
     */
    public function removeEjercicioEconomico($ejercicioEconomico)
    {
        if ($this->getEjercicioEconomicos()->contains($ejercicioEconomico)) {
            $this->collEjercicioEconomicos->remove($this->collEjercicioEconomicos->search($ejercicioEconomico));
            if (null === $this->ejercicioEconomicosScheduledForDeletion) {
                $this->ejercicioEconomicosScheduledForDeletion = clone $this->collEjercicioEconomicos;
                $this->ejercicioEconomicosScheduledForDeletion->clear();
            }
            $this->ejercicioEconomicosScheduledForDeletion[]= $ejercicioEconomico;
            $ejercicioEconomico->setPersonaJuridica(null);
        }
    }

    /**
     * Clears out the collEstatutos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addEstatutos()
     */
    public function clearEstatutos()
    {
        $this->collEstatutos = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collEstatutos collection.
     *
     * By default this just sets the collEstatutos collection to an empty array (like clearcollEstatutos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initEstatutos($overrideExisting = true)
    {
        if (null !== $this->collEstatutos && !$overrideExisting) {
            return;
        }
        $this->collEstatutos = new PropelObjectCollection();
        $this->collEstatutos->setModel('Estatuto');
    }

    /**
     * Gets an array of Estatuto objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this PersonaJuridica is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @return PropelObjectCollection|Estatuto[] List of Estatuto objects
     * @throws PropelException
     */
    public function getEstatutos($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collEstatutos || null !== $criteria) {
            if ($this->isNew() && null === $this->collEstatutos) {
                // return empty collection
                $this->initEstatutos();
            } else {
                $collEstatutos = EstatutoQuery::create(null, $criteria)
                    ->filterByPersonaJuridica($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collEstatutos;
                }
                $this->collEstatutos = $collEstatutos;
            }
        }

        return $this->collEstatutos;
    }

    /**
     * Sets a collection of Estatuto objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      PropelCollection $estatutos A Propel collection.
     * @param      PropelPDO $con Optional connection object
     */
    public function setEstatutos(PropelCollection $estatutos, PropelPDO $con = null)
    {
        $this->estatutosScheduledForDeletion = $this->getEstatutos(new Criteria(), $con)->diff($estatutos);

        foreach ($this->estatutosScheduledForDeletion as $estatutoRemoved) {
            $estatutoRemoved->setPersonaJuridica(null);
        }

        $this->collEstatutos = null;
        foreach ($estatutos as $estatuto) {
            $this->addEstatuto($estatuto);
        }

        $this->collEstatutos = $estatutos;
    }

    /**
     * Returns the number of related Estatuto objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      PropelPDO $con
     * @return int             Count of related Estatuto objects.
     * @throws PropelException
     */
    public function countEstatutos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collEstatutos || null !== $criteria) {
            if ($this->isNew() && null === $this->collEstatutos) {
                return 0;
            } else {
                $query = EstatutoQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByPersonaJuridica($this)
                    ->count($con);
            }
        } else {
            return count($this->collEstatutos);
        }
    }

    /**
     * Method called to associate a Estatuto object to this object
     * through the Estatuto foreign key attribute.
     *
     * @param    Estatuto $l Estatuto
     * @return   PersonaJuridica The current object (for fluent API support)
     */
    public function addEstatuto(Estatuto $l)
    {
        if ($this->collEstatutos === null) {
            $this->initEstatutos();
        }
        if (!$this->collEstatutos->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddEstatuto($l);
        }

        return $this;
    }

    /**
     * @param	Estatuto $estatuto The estatuto object to add.
     */
    protected function doAddEstatuto($estatuto)
    {
        $this->collEstatutos[]= $estatuto;
        $estatuto->setPersonaJuridica($this);
    }

    /**
     * @param	Estatuto $estatuto The estatuto object to remove.
     */
    public function removeEstatuto($estatuto)
    {
        if ($this->getEstatutos()->contains($estatuto)) {
            $this->collEstatutos->remove($this->collEstatutos->search($estatuto));
            if (null === $this->estatutosScheduledForDeletion) {
                $this->estatutosScheduledForDeletion = clone $this->collEstatutos;
                $this->estatutosScheduledForDeletion->clear();
            }
            $this->estatutosScheduledForDeletion[]= $estatuto;
            $estatuto->setPersonaJuridica(null);
        }
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_persona_juridica = null;
        $this->situacion_id = null;
        $this->tipo_pers_juridica_id = null;
        $this->cuit_cuil = null;
        $this->nombre_fantasia = null;
        $this->fecha_inicio_actividad = null;
        $this->resenia = null;
        $this->legajo = null;
        $this->matricula = null;
        $this->cantidad_de_socios = null;
        $this->telefono = null;
        $this->email = null;
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
            if ($this->collActividadPersJuridicas) {
                foreach ($this->collActividadPersJuridicas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collAportes) {
                foreach ($this->collAportes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collDireccions) {
                foreach ($this->collDireccions as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collEjercicioEconomicos) {
                foreach ($this->collEjercicioEconomicos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collEstatutos) {
                foreach ($this->collEstatutos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        if ($this->collActividadPersJuridicas instanceof PropelCollection) {
            $this->collActividadPersJuridicas->clearIterator();
        }
        $this->collActividadPersJuridicas = null;
        if ($this->collAportes instanceof PropelCollection) {
            $this->collAportes->clearIterator();
        }
        $this->collAportes = null;
        if ($this->collDireccions instanceof PropelCollection) {
            $this->collDireccions->clearIterator();
        }
        $this->collDireccions = null;
        if ($this->collEjercicioEconomicos instanceof PropelCollection) {
            $this->collEjercicioEconomicos->clearIterator();
        }
        $this->collEjercicioEconomicos = null;
        if ($this->collEstatutos instanceof PropelCollection) {
            $this->collEstatutos->clearIterator();
        }
        $this->collEstatutos = null;
        $this->aSituacionPersonaJuridica = null;
        $this->aTipoPersonaJuridica = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string The value of the 'nombre_fantasia' column
     */
    public function __toString()
    {
        return (string) $this->getNombreFantasia();
    }

    /**
     * Catches calls to virtual methods
     */
    public function __call($name, $params)
    {
        
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BasePersonaJuridica:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}


        return parent::__call($name, $params);
    }

} // BasePersonaJuridica
