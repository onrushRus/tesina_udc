<?php


/**
 * Base class that represents a row from the 'persona' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePersona extends BaseObject 
{

    /**
     * Peer class name
     */
    const PEER = 'PersonaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PersonaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_persona field.
     * @var        int
     */
    protected $id_persona;

    /**
     * The value for the estado_id field.
     * @var        int
     */
    protected $estado_id;

    /**
     * The value for the cuit_cuil field.
     * @var        string
     */
    protected $cuit_cuil;

    /**
     * @var        EstadoPersona
     */
    protected $aEstadoPersona;

    /**
     * @var        PropelObjectCollection|Direccion[] Collection to store aggregation of Direccion objects.
     */
    protected $collDireccions;

    /**
     * @var        PropelObjectCollection|PersonaFisica[] Collection to store aggregation of PersonaFisica objects.
     */
    protected $collPersonaFisicas;

    /**
     * @var        PropelObjectCollection|PersonaJuridica[] Collection to store aggregation of PersonaJuridica objects.
     */
    protected $collPersonaJuridicas;

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
    protected $direccionsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $personaFisicasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $personaJuridicasScheduledForDeletion = null;

    /**
     * Get the [id_persona] column value.
     * 
     * @return   int
     */
    public function getIdPersona()
    {

        return $this->id_persona;
    }

    /**
     * Get the [estado_id] column value.
     * 
     * @return   int
     */
    public function getEstadoId()
    {

        return $this->estado_id;
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
     * Set the value of [id_persona] column.
     * 
     * @param      int $v new value
     * @return   Persona The current object (for fluent API support)
     */
    public function setIdPersona($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id_persona !== $v) {
            $this->id_persona = $v;
            $this->modifiedColumns[] = PersonaPeer::ID_PERSONA;
        }


        return $this;
    } // setIdPersona()

    /**
     * Set the value of [estado_id] column.
     * 
     * @param      int $v new value
     * @return   Persona The current object (for fluent API support)
     */
    public function setEstadoId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->estado_id !== $v) {
            $this->estado_id = $v;
            $this->modifiedColumns[] = PersonaPeer::ESTADO_ID;
        }

        if ($this->aEstadoPersona !== null && $this->aEstadoPersona->getIdEstadoPersona() !== $v) {
            $this->aEstadoPersona = null;
        }


        return $this;
    } // setEstadoId()

    /**
     * Set the value of [cuit_cuil] column.
     * 
     * @param      string $v new value
     * @return   Persona The current object (for fluent API support)
     */
    public function setCuitCuil($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cuit_cuil !== $v) {
            $this->cuit_cuil = $v;
            $this->modifiedColumns[] = PersonaPeer::CUIT_CUIL;
        }


        return $this;
    } // setCuitCuil()

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

            $this->id_persona = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->estado_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->cuit_cuil = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 3; // 3 = PersonaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Persona object", $e);
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

        if ($this->aEstadoPersona !== null && $this->estado_id !== $this->aEstadoPersona->getIdEstadoPersona()) {
            $this->aEstadoPersona = null;
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
            $con = Propel::getConnection(PersonaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PersonaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aEstadoPersona = null;
            $this->collDireccions = null;

            $this->collPersonaFisicas = null;

            $this->collPersonaJuridicas = null;

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
            $con = Propel::getConnection(PersonaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PersonaQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BasePersona:delete:pre') as $callable)
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
				foreach (sfMixer::getCallables('BasePersona:delete:post') as $callable)
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
            $con = Propel::getConnection(PersonaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BasePersona:save:pre') as $callable)
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
				foreach (sfMixer::getCallables('BasePersona:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

                PersonaPeer::addInstanceToPool($this);
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

            if ($this->aEstadoPersona !== null) {
                if ($this->aEstadoPersona->isModified() || $this->aEstadoPersona->isNew()) {
                    $affectedRows += $this->aEstadoPersona->save($con);
                }
                $this->setEstadoPersona($this->aEstadoPersona);
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

            if ($this->personaFisicasScheduledForDeletion !== null) {
                if (!$this->personaFisicasScheduledForDeletion->isEmpty()) {
                    PersonaFisicaQuery::create()
                        ->filterByPrimaryKeys($this->personaFisicasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->personaFisicasScheduledForDeletion = null;
                }
            }

            if ($this->collPersonaFisicas !== null) {
                foreach ($this->collPersonaFisicas as $referrerFK) {
                    if (!$referrerFK->isDeleted()) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->personaJuridicasScheduledForDeletion !== null) {
                if (!$this->personaJuridicasScheduledForDeletion->isEmpty()) {
                    PersonaJuridicaQuery::create()
                        ->filterByPrimaryKeys($this->personaJuridicasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->personaJuridicasScheduledForDeletion = null;
                }
            }

            if ($this->collPersonaJuridicas !== null) {
                foreach ($this->collPersonaJuridicas as $referrerFK) {
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

        $this->modifiedColumns[] = PersonaPeer::ID_PERSONA;
        if (null !== $this->id_persona) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PersonaPeer::ID_PERSONA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PersonaPeer::ID_PERSONA)) {
            $modifiedColumns[':p' . $index++]  = '`ID_PERSONA`';
        }
        if ($this->isColumnModified(PersonaPeer::ESTADO_ID)) {
            $modifiedColumns[':p' . $index++]  = '`ESTADO_ID`';
        }
        if ($this->isColumnModified(PersonaPeer::CUIT_CUIL)) {
            $modifiedColumns[':p' . $index++]  = '`CUIT_CUIL`';
        }

        $sql = sprintf(
            'INSERT INTO `persona` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_PERSONA`':
						$stmt->bindValue($identifier, $this->id_persona, PDO::PARAM_INT);
                        break;
                    case '`ESTADO_ID`':
						$stmt->bindValue($identifier, $this->estado_id, PDO::PARAM_INT);
                        break;
                    case '`CUIT_CUIL`':
						$stmt->bindValue($identifier, $this->cuit_cuil, PDO::PARAM_STR);
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
        $this->setIdPersona($pk);

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

            if ($this->aEstadoPersona !== null) {
                if (!$this->aEstadoPersona->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEstadoPersona->getValidationFailures());
                }
            }


            if (($retval = PersonaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collDireccions !== null) {
                    foreach ($this->collDireccions as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collPersonaFisicas !== null) {
                    foreach ($this->collPersonaFisicas as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collPersonaJuridicas !== null) {
                    foreach ($this->collPersonaJuridicas as $referrerFK) {
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
        $pos = PersonaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdPersona();
                break;
            case 1:
                return $this->getEstadoId();
                break;
            case 2:
                return $this->getCuitCuil();
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
        if (isset($alreadyDumpedObjects['Persona'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Persona'][$this->getPrimaryKey()] = true;
        $keys = PersonaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdPersona(),
            $keys[1] => $this->getEstadoId(),
            $keys[2] => $this->getCuitCuil(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aEstadoPersona) {
                $result['EstadoPersona'] = $this->aEstadoPersona->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collDireccions) {
                $result['Direccions'] = $this->collDireccions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPersonaFisicas) {
                $result['PersonaFisicas'] = $this->collPersonaFisicas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPersonaJuridicas) {
                $result['PersonaJuridicas'] = $this->collPersonaJuridicas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = PersonaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdPersona($value);
                break;
            case 1:
                $this->setEstadoId($value);
                break;
            case 2:
                $this->setCuitCuil($value);
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
        $keys = PersonaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdPersona($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setEstadoId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCuitCuil($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PersonaPeer::DATABASE_NAME);

        if ($this->isColumnModified(PersonaPeer::ID_PERSONA)) $criteria->add(PersonaPeer::ID_PERSONA, $this->id_persona);
        if ($this->isColumnModified(PersonaPeer::ESTADO_ID)) $criteria->add(PersonaPeer::ESTADO_ID, $this->estado_id);
        if ($this->isColumnModified(PersonaPeer::CUIT_CUIL)) $criteria->add(PersonaPeer::CUIT_CUIL, $this->cuit_cuil);

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
        $criteria = new Criteria(PersonaPeer::DATABASE_NAME);
        $criteria->add(PersonaPeer::ID_PERSONA, $this->id_persona);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return   int
     */
    public function getPrimaryKey()
    {
        return $this->getIdPersona();
    }

    /**
     * Generic method to set the primary key (id_persona column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdPersona($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdPersona();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of Persona (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setEstadoId($this->getEstadoId());
        $copyObj->setCuitCuil($this->getCuitCuil());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getDireccions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addDireccion($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPersonaFisicas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPersonaFisica($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPersonaJuridicas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPersonaJuridica($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdPersona(NULL); // this is a auto-increment column, so set to default value
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
     * @return                 Persona Clone of current object.
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
     * @return   PersonaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PersonaPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a EstadoPersona object.
     *
     * @param                  EstadoPersona $v
     * @return                 Persona The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEstadoPersona(EstadoPersona $v = null)
    {
        if ($v === null) {
            $this->setEstadoId(NULL);
        } else {
            $this->setEstadoId($v->getIdEstadoPersona());
        }

        $this->aEstadoPersona = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the EstadoPersona object, it will not be re-added.
        if ($v !== null) {
            $v->addPersona($this);
        }


        return $this;
    }


    /**
     * Get the associated EstadoPersona object
     *
     * @param      PropelPDO $con Optional Connection object.
     * @return                 EstadoPersona The associated EstadoPersona object.
     * @throws PropelException
     */
    public function getEstadoPersona(PropelPDO $con = null)
    {
        if ($this->aEstadoPersona === null && ($this->estado_id !== null)) {
            $this->aEstadoPersona = EstadoPersonaQuery::create()->findPk($this->estado_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEstadoPersona->addPersonas($this);
             */
        }

        return $this->aEstadoPersona;
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
        if ('Direccion' == $relationName) {
            $this->initDireccions();
        }
        if ('PersonaFisica' == $relationName) {
            $this->initPersonaFisicas();
        }
        if ('PersonaJuridica' == $relationName) {
            $this->initPersonaJuridicas();
        }
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
     * If this Persona is new, it will return
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
                    ->filterByPersona($this)
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
            $direccionRemoved->setPersona(null);
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
                    ->filterByPersona($this)
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
     * @return   Persona The current object (for fluent API support)
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
        $direccion->setPersona($this);
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
            $direccion->setPersona(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Persona is new, it will return
     * an empty collection; or if this Persona has previously
     * been saved, it will retrieve related Direccions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Persona.
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
     * Otherwise if this Persona is new, it will return
     * an empty collection; or if this Persona has previously
     * been saved, it will retrieve related Direccions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Persona.
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
     * Clears out the collPersonaFisicas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addPersonaFisicas()
     */
    public function clearPersonaFisicas()
    {
        $this->collPersonaFisicas = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collPersonaFisicas collection.
     *
     * By default this just sets the collPersonaFisicas collection to an empty array (like clearcollPersonaFisicas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPersonaFisicas($overrideExisting = true)
    {
        if (null !== $this->collPersonaFisicas && !$overrideExisting) {
            return;
        }
        $this->collPersonaFisicas = new PropelObjectCollection();
        $this->collPersonaFisicas->setModel('PersonaFisica');
    }

    /**
     * Gets an array of PersonaFisica objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Persona is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @return PropelObjectCollection|PersonaFisica[] List of PersonaFisica objects
     * @throws PropelException
     */
    public function getPersonaFisicas($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collPersonaFisicas || null !== $criteria) {
            if ($this->isNew() && null === $this->collPersonaFisicas) {
                // return empty collection
                $this->initPersonaFisicas();
            } else {
                $collPersonaFisicas = PersonaFisicaQuery::create(null, $criteria)
                    ->filterByPersona($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collPersonaFisicas;
                }
                $this->collPersonaFisicas = $collPersonaFisicas;
            }
        }

        return $this->collPersonaFisicas;
    }

    /**
     * Sets a collection of PersonaFisica objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      PropelCollection $personaFisicas A Propel collection.
     * @param      PropelPDO $con Optional connection object
     */
    public function setPersonaFisicas(PropelCollection $personaFisicas, PropelPDO $con = null)
    {
        $this->personaFisicasScheduledForDeletion = $this->getPersonaFisicas(new Criteria(), $con)->diff($personaFisicas);

        foreach ($this->personaFisicasScheduledForDeletion as $personaFisicaRemoved) {
            $personaFisicaRemoved->setPersona(null);
        }

        $this->collPersonaFisicas = null;
        foreach ($personaFisicas as $personaFisica) {
            $this->addPersonaFisica($personaFisica);
        }

        $this->collPersonaFisicas = $personaFisicas;
    }

    /**
     * Returns the number of related PersonaFisica objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      PropelPDO $con
     * @return int             Count of related PersonaFisica objects.
     * @throws PropelException
     */
    public function countPersonaFisicas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collPersonaFisicas || null !== $criteria) {
            if ($this->isNew() && null === $this->collPersonaFisicas) {
                return 0;
            } else {
                $query = PersonaFisicaQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByPersona($this)
                    ->count($con);
            }
        } else {
            return count($this->collPersonaFisicas);
        }
    }

    /**
     * Method called to associate a PersonaFisica object to this object
     * through the PersonaFisica foreign key attribute.
     *
     * @param    PersonaFisica $l PersonaFisica
     * @return   Persona The current object (for fluent API support)
     */
    public function addPersonaFisica(PersonaFisica $l)
    {
        if ($this->collPersonaFisicas === null) {
            $this->initPersonaFisicas();
        }
        if (!$this->collPersonaFisicas->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddPersonaFisica($l);
        }

        return $this;
    }

    /**
     * @param	PersonaFisica $personaFisica The personaFisica object to add.
     */
    protected function doAddPersonaFisica($personaFisica)
    {
        $this->collPersonaFisicas[]= $personaFisica;
        $personaFisica->setPersona($this);
    }

    /**
     * @param	PersonaFisica $personaFisica The personaFisica object to remove.
     */
    public function removePersonaFisica($personaFisica)
    {
        if ($this->getPersonaFisicas()->contains($personaFisica)) {
            $this->collPersonaFisicas->remove($this->collPersonaFisicas->search($personaFisica));
            if (null === $this->personaFisicasScheduledForDeletion) {
                $this->personaFisicasScheduledForDeletion = clone $this->collPersonaFisicas;
                $this->personaFisicasScheduledForDeletion->clear();
            }
            $this->personaFisicasScheduledForDeletion[]= $personaFisica;
            $personaFisica->setPersona(null);
        }
    }

    /**
     * Clears out the collPersonaJuridicas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addPersonaJuridicas()
     */
    public function clearPersonaJuridicas()
    {
        $this->collPersonaJuridicas = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collPersonaJuridicas collection.
     *
     * By default this just sets the collPersonaJuridicas collection to an empty array (like clearcollPersonaJuridicas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPersonaJuridicas($overrideExisting = true)
    {
        if (null !== $this->collPersonaJuridicas && !$overrideExisting) {
            return;
        }
        $this->collPersonaJuridicas = new PropelObjectCollection();
        $this->collPersonaJuridicas->setModel('PersonaJuridica');
    }

    /**
     * Gets an array of PersonaJuridica objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Persona is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @return PropelObjectCollection|PersonaJuridica[] List of PersonaJuridica objects
     * @throws PropelException
     */
    public function getPersonaJuridicas($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collPersonaJuridicas || null !== $criteria) {
            if ($this->isNew() && null === $this->collPersonaJuridicas) {
                // return empty collection
                $this->initPersonaJuridicas();
            } else {
                $collPersonaJuridicas = PersonaJuridicaQuery::create(null, $criteria)
                    ->filterByPersona($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collPersonaJuridicas;
                }
                $this->collPersonaJuridicas = $collPersonaJuridicas;
            }
        }

        return $this->collPersonaJuridicas;
    }

    /**
     * Sets a collection of PersonaJuridica objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      PropelCollection $personaJuridicas A Propel collection.
     * @param      PropelPDO $con Optional connection object
     */
    public function setPersonaJuridicas(PropelCollection $personaJuridicas, PropelPDO $con = null)
    {
        $this->personaJuridicasScheduledForDeletion = $this->getPersonaJuridicas(new Criteria(), $con)->diff($personaJuridicas);

        foreach ($this->personaJuridicasScheduledForDeletion as $personaJuridicaRemoved) {
            $personaJuridicaRemoved->setPersona(null);
        }

        $this->collPersonaJuridicas = null;
        foreach ($personaJuridicas as $personaJuridica) {
            $this->addPersonaJuridica($personaJuridica);
        }

        $this->collPersonaJuridicas = $personaJuridicas;
    }

    /**
     * Returns the number of related PersonaJuridica objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      PropelPDO $con
     * @return int             Count of related PersonaJuridica objects.
     * @throws PropelException
     */
    public function countPersonaJuridicas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collPersonaJuridicas || null !== $criteria) {
            if ($this->isNew() && null === $this->collPersonaJuridicas) {
                return 0;
            } else {
                $query = PersonaJuridicaQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByPersona($this)
                    ->count($con);
            }
        } else {
            return count($this->collPersonaJuridicas);
        }
    }

    /**
     * Method called to associate a PersonaJuridica object to this object
     * through the PersonaJuridica foreign key attribute.
     *
     * @param    PersonaJuridica $l PersonaJuridica
     * @return   Persona The current object (for fluent API support)
     */
    public function addPersonaJuridica(PersonaJuridica $l)
    {
        if ($this->collPersonaJuridicas === null) {
            $this->initPersonaJuridicas();
        }
        if (!$this->collPersonaJuridicas->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddPersonaJuridica($l);
        }

        return $this;
    }

    /**
     * @param	PersonaJuridica $personaJuridica The personaJuridica object to add.
     */
    protected function doAddPersonaJuridica($personaJuridica)
    {
        $this->collPersonaJuridicas[]= $personaJuridica;
        $personaJuridica->setPersona($this);
    }

    /**
     * @param	PersonaJuridica $personaJuridica The personaJuridica object to remove.
     */
    public function removePersonaJuridica($personaJuridica)
    {
        if ($this->getPersonaJuridicas()->contains($personaJuridica)) {
            $this->collPersonaJuridicas->remove($this->collPersonaJuridicas->search($personaJuridica));
            if (null === $this->personaJuridicasScheduledForDeletion) {
                $this->personaJuridicasScheduledForDeletion = clone $this->collPersonaJuridicas;
                $this->personaJuridicasScheduledForDeletion->clear();
            }
            $this->personaJuridicasScheduledForDeletion[]= $personaJuridica;
            $personaJuridica->setPersona(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Persona is new, it will return
     * an empty collection; or if this Persona has previously
     * been saved, it will retrieve related PersonaJuridicas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Persona.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|PersonaJuridica[] List of PersonaJuridica objects
     */
    public function getPersonaJuridicasJoinSituacionPersonaJuridica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PersonaJuridicaQuery::create(null, $criteria);
        $query->joinWith('SituacionPersonaJuridica', $join_behavior);

        return $this->getPersonaJuridicas($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Persona is new, it will return
     * an empty collection; or if this Persona has previously
     * been saved, it will retrieve related PersonaJuridicas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Persona.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|PersonaJuridica[] List of PersonaJuridica objects
     */
    public function getPersonaJuridicasJoinTipoPersonaJuridica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PersonaJuridicaQuery::create(null, $criteria);
        $query->joinWith('TipoPersonaJuridica', $join_behavior);

        return $this->getPersonaJuridicas($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_persona = null;
        $this->estado_id = null;
        $this->cuit_cuil = null;
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
            if ($this->collDireccions) {
                foreach ($this->collDireccions as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPersonaFisicas) {
                foreach ($this->collPersonaFisicas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPersonaJuridicas) {
                foreach ($this->collPersonaJuridicas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        if ($this->collDireccions instanceof PropelCollection) {
            $this->collDireccions->clearIterator();
        }
        $this->collDireccions = null;
        if ($this->collPersonaFisicas instanceof PropelCollection) {
            $this->collPersonaFisicas->clearIterator();
        }
        $this->collPersonaFisicas = null;
        if ($this->collPersonaJuridicas instanceof PropelCollection) {
            $this->collPersonaJuridicas->clearIterator();
        }
        $this->collPersonaJuridicas = null;
        $this->aEstadoPersona = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string The value of the 'cuit_cuil' column
     */
    public function __toString()
    {
        return (string) $this->getCuitCuil();
    }

    /**
     * Catches calls to virtual methods
     */
    public function __call($name, $params)
    {
        
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BasePersona:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}


        return parent::__call($name, $params);
    }

} // BasePersona
