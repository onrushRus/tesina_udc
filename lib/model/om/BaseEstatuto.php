<?php


/**
 * Base class that represents a row from the 'estatuto' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseEstatuto extends BaseObject 
{

    /**
     * Peer class name
     */
    const PEER = 'EstatutoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        EstatutoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_estatuto field.
     * @var        int
     */
    protected $id_estatuto;

    /**
     * The value for the persona_juridica_id field.
     * @var        int
     */
    protected $persona_juridica_id;

    /**
     * The value for the fecha_inicio_ejercicio_economico field.
     * @var        string
     */
    protected $fecha_inicio_ejercicio_economico;

    /**
     * The value for the fecha_fin_ejercicio_economico field.
     * @var        string
     */
    protected $fecha_fin_ejercicio_economico;

    /**
     * The value for the dias_para_asamblea field.
     * @var        int
     */
    protected $dias_para_asamblea;

    /**
     * The value for the meses_para_fin_ejercicio_economico field.
     * @var        int
     */
    protected $meses_para_fin_ejercicio_economico;

    /**
     * @var        PersonaJuridica
     */
    protected $aPersonaJuridica;

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
     * Get the [id_estatuto] column value.
     * 
     * @return   int
     */
    public function getIdEstatuto()
    {

        return $this->id_estatuto;
    }

    /**
     * Get the [persona_juridica_id] column value.
     * 
     * @return   int
     */
    public function getPersonaJuridicaId()
    {

        return $this->persona_juridica_id;
    }

    /**
     * Get the [optionally formatted] temporal [fecha_inicio_ejercicio_economico] column value.
     * 
     *
     * @param      string $format The date/time format string (either date()-style or strftime()-style).
     *							If format is NULL, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFechaInicioEjercicioEconomico($format = 'Y-m-d')
    {
        if ($this->fecha_inicio_ejercicio_economico === null) {
            return null;
        }


        if ($this->fecha_inicio_ejercicio_economico === '0000-00-00') {
            // while technically this is not a default value of NULL,
            // this seems to be closest in meaning.
            return null;
        } else {
            try {
                $dt = new DateTime($this->fecha_inicio_ejercicio_economico);
            } catch (Exception $x) {
                throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->fecha_inicio_ejercicio_economico, true), $x);
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
     * Get the [optionally formatted] temporal [fecha_fin_ejercicio_economico] column value.
     * 
     *
     * @param      string $format The date/time format string (either date()-style or strftime()-style).
     *							If format is NULL, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFechaFinEjercicioEconomico($format = 'Y-m-d')
    {
        if ($this->fecha_fin_ejercicio_economico === null) {
            return null;
        }


        if ($this->fecha_fin_ejercicio_economico === '0000-00-00') {
            // while technically this is not a default value of NULL,
            // this seems to be closest in meaning.
            return null;
        } else {
            try {
                $dt = new DateTime($this->fecha_fin_ejercicio_economico);
            } catch (Exception $x) {
                throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->fecha_fin_ejercicio_economico, true), $x);
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
     * Get the [dias_para_asamblea] column value.
     * 
     * @return   int
     */
    public function getDiasParaAsamblea()
    {

        return $this->dias_para_asamblea;
    }

    /**
     * Get the [meses_para_fin_ejercicio_economico] column value.
     * 
     * @return   int
     */
    public function getMesesParaFinEjercicioEconomico()
    {

        return $this->meses_para_fin_ejercicio_economico;
    }

    /**
     * Set the value of [id_estatuto] column.
     * 
     * @param      int $v new value
     * @return   Estatuto The current object (for fluent API support)
     */
    public function setIdEstatuto($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id_estatuto !== $v) {
            $this->id_estatuto = $v;
            $this->modifiedColumns[] = EstatutoPeer::ID_ESTATUTO;
        }


        return $this;
    } // setIdEstatuto()

    /**
     * Set the value of [persona_juridica_id] column.
     * 
     * @param      int $v new value
     * @return   Estatuto The current object (for fluent API support)
     */
    public function setPersonaJuridicaId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->persona_juridica_id !== $v) {
            $this->persona_juridica_id = $v;
            $this->modifiedColumns[] = EstatutoPeer::PERSONA_JURIDICA_ID;
        }

        if ($this->aPersonaJuridica !== null && $this->aPersonaJuridica->getIdPersonaJuridica() !== $v) {
            $this->aPersonaJuridica = null;
        }


        return $this;
    } // setPersonaJuridicaId()

    /**
     * Sets the value of [fecha_inicio_ejercicio_economico] column to a normalized version of the date/time value specified.
     * 
     * @param      mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as NULL.
     * @return   Estatuto The current object (for fluent API support)
     */
    public function setFechaInicioEjercicioEconomico($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->fecha_inicio_ejercicio_economico !== null || $dt !== null) {
            $currentDateAsString = ($this->fecha_inicio_ejercicio_economico !== null && $tmpDt = new DateTime($this->fecha_inicio_ejercicio_economico)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->fecha_inicio_ejercicio_economico = $newDateAsString;
                $this->modifiedColumns[] = EstatutoPeer::FECHA_INICIO_EJERCICIO_ECONOMICO;
            }
        } // if either are not null


        return $this;
    } // setFechaInicioEjercicioEconomico()

    /**
     * Sets the value of [fecha_fin_ejercicio_economico] column to a normalized version of the date/time value specified.
     * 
     * @param      mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as NULL.
     * @return   Estatuto The current object (for fluent API support)
     */
    public function setFechaFinEjercicioEconomico($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->fecha_fin_ejercicio_economico !== null || $dt !== null) {
            $currentDateAsString = ($this->fecha_fin_ejercicio_economico !== null && $tmpDt = new DateTime($this->fecha_fin_ejercicio_economico)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->fecha_fin_ejercicio_economico = $newDateAsString;
                $this->modifiedColumns[] = EstatutoPeer::FECHA_FIN_EJERCICIO_ECONOMICO;
            }
        } // if either are not null


        return $this;
    } // setFechaFinEjercicioEconomico()

    /**
     * Set the value of [dias_para_asamblea] column.
     * 
     * @param      int $v new value
     * @return   Estatuto The current object (for fluent API support)
     */
    public function setDiasParaAsamblea($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->dias_para_asamblea !== $v) {
            $this->dias_para_asamblea = $v;
            $this->modifiedColumns[] = EstatutoPeer::DIAS_PARA_ASAMBLEA;
        }


        return $this;
    } // setDiasParaAsamblea()

    /**
     * Set the value of [meses_para_fin_ejercicio_economico] column.
     * 
     * @param      int $v new value
     * @return   Estatuto The current object (for fluent API support)
     */
    public function setMesesParaFinEjercicioEconomico($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->meses_para_fin_ejercicio_economico !== $v) {
            $this->meses_para_fin_ejercicio_economico = $v;
            $this->modifiedColumns[] = EstatutoPeer::MESES_PARA_FIN_EJERCICIO_ECONOMICO;
        }


        return $this;
    } // setMesesParaFinEjercicioEconomico()

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

            $this->id_estatuto = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->persona_juridica_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->fecha_inicio_ejercicio_economico = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->fecha_fin_ejercicio_economico = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->dias_para_asamblea = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->meses_para_fin_ejercicio_economico = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 6; // 6 = EstatutoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Estatuto object", $e);
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

        if ($this->aPersonaJuridica !== null && $this->persona_juridica_id !== $this->aPersonaJuridica->getIdPersonaJuridica()) {
            $this->aPersonaJuridica = null;
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
            $con = Propel::getConnection(EstatutoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = EstatutoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aPersonaJuridica = null;
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
            $con = Propel::getConnection(EstatutoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = EstatutoQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseEstatuto:delete:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseEstatuto:delete:post') as $callable)
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
            $con = Propel::getConnection(EstatutoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseEstatuto:save:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseEstatuto:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

                EstatutoPeer::addInstanceToPool($this);
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

            if ($this->aPersonaJuridica !== null) {
                if ($this->aPersonaJuridica->isModified() || $this->aPersonaJuridica->isNew()) {
                    $affectedRows += $this->aPersonaJuridica->save($con);
                }
                $this->setPersonaJuridica($this->aPersonaJuridica);
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

        $this->modifiedColumns[] = EstatutoPeer::ID_ESTATUTO;
        if (null !== $this->id_estatuto) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . EstatutoPeer::ID_ESTATUTO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(EstatutoPeer::ID_ESTATUTO)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ESTATUTO`';
        }
        if ($this->isColumnModified(EstatutoPeer::PERSONA_JURIDICA_ID)) {
            $modifiedColumns[':p' . $index++]  = '`PERSONA_JURIDICA_ID`';
        }
        if ($this->isColumnModified(EstatutoPeer::FECHA_INICIO_EJERCICIO_ECONOMICO)) {
            $modifiedColumns[':p' . $index++]  = '`FECHA_INICIO_EJERCICIO_ECONOMICO`';
        }
        if ($this->isColumnModified(EstatutoPeer::FECHA_FIN_EJERCICIO_ECONOMICO)) {
            $modifiedColumns[':p' . $index++]  = '`FECHA_FIN_EJERCICIO_ECONOMICO`';
        }
        if ($this->isColumnModified(EstatutoPeer::DIAS_PARA_ASAMBLEA)) {
            $modifiedColumns[':p' . $index++]  = '`DIAS_PARA_ASAMBLEA`';
        }
        if ($this->isColumnModified(EstatutoPeer::MESES_PARA_FIN_EJERCICIO_ECONOMICO)) {
            $modifiedColumns[':p' . $index++]  = '`MESES_PARA_FIN_EJERCICIO_ECONOMICO`';
        }

        $sql = sprintf(
            'INSERT INTO `estatuto` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_ESTATUTO`':
						$stmt->bindValue($identifier, $this->id_estatuto, PDO::PARAM_INT);
                        break;
                    case '`PERSONA_JURIDICA_ID`':
						$stmt->bindValue($identifier, $this->persona_juridica_id, PDO::PARAM_INT);
                        break;
                    case '`FECHA_INICIO_EJERCICIO_ECONOMICO`':
						$stmt->bindValue($identifier, $this->fecha_inicio_ejercicio_economico, PDO::PARAM_STR);
                        break;
                    case '`FECHA_FIN_EJERCICIO_ECONOMICO`':
						$stmt->bindValue($identifier, $this->fecha_fin_ejercicio_economico, PDO::PARAM_STR);
                        break;
                    case '`DIAS_PARA_ASAMBLEA`':
						$stmt->bindValue($identifier, $this->dias_para_asamblea, PDO::PARAM_INT);
                        break;
                    case '`MESES_PARA_FIN_EJERCICIO_ECONOMICO`':
						$stmt->bindValue($identifier, $this->meses_para_fin_ejercicio_economico, PDO::PARAM_INT);
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
        $this->setIdEstatuto($pk);

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

            if ($this->aPersonaJuridica !== null) {
                if (!$this->aPersonaJuridica->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aPersonaJuridica->getValidationFailures());
                }
            }


            if (($retval = EstatutoPeer::doValidate($this, $columns)) !== true) {
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
        $pos = EstatutoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdEstatuto();
                break;
            case 1:
                return $this->getPersonaJuridicaId();
                break;
            case 2:
                return $this->getFechaInicioEjercicioEconomico();
                break;
            case 3:
                return $this->getFechaFinEjercicioEconomico();
                break;
            case 4:
                return $this->getDiasParaAsamblea();
                break;
            case 5:
                return $this->getMesesParaFinEjercicioEconomico();
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
        if (isset($alreadyDumpedObjects['Estatuto'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Estatuto'][$this->getPrimaryKey()] = true;
        $keys = EstatutoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdEstatuto(),
            $keys[1] => $this->getPersonaJuridicaId(),
            $keys[2] => $this->getFechaInicioEjercicioEconomico(),
            $keys[3] => $this->getFechaFinEjercicioEconomico(),
            $keys[4] => $this->getDiasParaAsamblea(),
            $keys[5] => $this->getMesesParaFinEjercicioEconomico(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aPersonaJuridica) {
                $result['PersonaJuridica'] = $this->aPersonaJuridica->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = EstatutoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdEstatuto($value);
                break;
            case 1:
                $this->setPersonaJuridicaId($value);
                break;
            case 2:
                $this->setFechaInicioEjercicioEconomico($value);
                break;
            case 3:
                $this->setFechaFinEjercicioEconomico($value);
                break;
            case 4:
                $this->setDiasParaAsamblea($value);
                break;
            case 5:
                $this->setMesesParaFinEjercicioEconomico($value);
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
        $keys = EstatutoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdEstatuto($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setPersonaJuridicaId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setFechaInicioEjercicioEconomico($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setFechaFinEjercicioEconomico($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDiasParaAsamblea($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setMesesParaFinEjercicioEconomico($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(EstatutoPeer::DATABASE_NAME);

        if ($this->isColumnModified(EstatutoPeer::ID_ESTATUTO)) $criteria->add(EstatutoPeer::ID_ESTATUTO, $this->id_estatuto);
        if ($this->isColumnModified(EstatutoPeer::PERSONA_JURIDICA_ID)) $criteria->add(EstatutoPeer::PERSONA_JURIDICA_ID, $this->persona_juridica_id);
        if ($this->isColumnModified(EstatutoPeer::FECHA_INICIO_EJERCICIO_ECONOMICO)) $criteria->add(EstatutoPeer::FECHA_INICIO_EJERCICIO_ECONOMICO, $this->fecha_inicio_ejercicio_economico);
        if ($this->isColumnModified(EstatutoPeer::FECHA_FIN_EJERCICIO_ECONOMICO)) $criteria->add(EstatutoPeer::FECHA_FIN_EJERCICIO_ECONOMICO, $this->fecha_fin_ejercicio_economico);
        if ($this->isColumnModified(EstatutoPeer::DIAS_PARA_ASAMBLEA)) $criteria->add(EstatutoPeer::DIAS_PARA_ASAMBLEA, $this->dias_para_asamblea);
        if ($this->isColumnModified(EstatutoPeer::MESES_PARA_FIN_EJERCICIO_ECONOMICO)) $criteria->add(EstatutoPeer::MESES_PARA_FIN_EJERCICIO_ECONOMICO, $this->meses_para_fin_ejercicio_economico);

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
        $criteria = new Criteria(EstatutoPeer::DATABASE_NAME);
        $criteria->add(EstatutoPeer::ID_ESTATUTO, $this->id_estatuto);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return   int
     */
    public function getPrimaryKey()
    {
        return $this->getIdEstatuto();
    }

    /**
     * Generic method to set the primary key (id_estatuto column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdEstatuto($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdEstatuto();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of Estatuto (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setPersonaJuridicaId($this->getPersonaJuridicaId());
        $copyObj->setFechaInicioEjercicioEconomico($this->getFechaInicioEjercicioEconomico());
        $copyObj->setFechaFinEjercicioEconomico($this->getFechaFinEjercicioEconomico());
        $copyObj->setDiasParaAsamblea($this->getDiasParaAsamblea());
        $copyObj->setMesesParaFinEjercicioEconomico($this->getMesesParaFinEjercicioEconomico());

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
            $copyObj->setIdEstatuto(NULL); // this is a auto-increment column, so set to default value
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
     * @return                 Estatuto Clone of current object.
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
     * @return   EstatutoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new EstatutoPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a PersonaJuridica object.
     *
     * @param                  PersonaJuridica $v
     * @return                 Estatuto The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPersonaJuridica(PersonaJuridica $v = null)
    {
        if ($v === null) {
            $this->setPersonaJuridicaId(NULL);
        } else {
            $this->setPersonaJuridicaId($v->getIdPersonaJuridica());
        }

        $this->aPersonaJuridica = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the PersonaJuridica object, it will not be re-added.
        if ($v !== null) {
            $v->addEstatuto($this);
        }


        return $this;
    }


    /**
     * Get the associated PersonaJuridica object
     *
     * @param      PropelPDO $con Optional Connection object.
     * @return                 PersonaJuridica The associated PersonaJuridica object.
     * @throws PropelException
     */
    public function getPersonaJuridica(PropelPDO $con = null)
    {
        if ($this->aPersonaJuridica === null && ($this->persona_juridica_id !== null)) {
            $this->aPersonaJuridica = PersonaJuridicaQuery::create()->findPk($this->persona_juridica_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPersonaJuridica->addEstatutos($this);
             */
        }

        return $this->aPersonaJuridica;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_estatuto = null;
        $this->persona_juridica_id = null;
        $this->fecha_inicio_ejercicio_economico = null;
        $this->fecha_fin_ejercicio_economico = null;
        $this->dias_para_asamblea = null;
        $this->meses_para_fin_ejercicio_economico = null;
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

        $this->aPersonaJuridica = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(EstatutoPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * Catches calls to virtual methods
     */
    public function __call($name, $params)
    {
        
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseEstatuto:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}


        return parent::__call($name, $params);
    }

} // BaseEstatuto
