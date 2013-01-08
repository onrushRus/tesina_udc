<?php


/**
 * Base class that represents a row from the 'mail_alerta' table.
 *
 * 
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseMailAlerta extends BaseObject 
{

    /**
     * Peer class name
     */
    const PEER = 'MailAlertaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        MailAlertaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_tipo_alerta field.
     * @var        int
     */
    protected $id_tipo_alerta;

    /**
     * The value for the tipo_alerta field.
     * @var        int
     */
    protected $tipo_alerta;

    /**
     * The value for the dias_para_aviso field.
     * Note: this column has a database default value of: 15
     * @var        int
     */
    protected $dias_para_aviso;

    /**
     * The value for the cuerpo_mensaje field.
     * @var        string
     */
    protected $cuerpo_mensaje;

    /**
     * @var        PropelObjectCollection|EnteAlerta[] Collection to store aggregation of EnteAlerta objects.
     */
    protected $collEnteAlertas;

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
    protected $enteAlertasScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->dias_para_aviso = 15;
    }

    /**
     * Initializes internal state of BaseMailAlerta object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_tipo_alerta] column value.
     * 
     * @return   int
     */
    public function getIdTipoAlerta()
    {

        return $this->id_tipo_alerta;
    }

    /**
     * Get the [tipo_alerta] column value.
     * 
     * @return   int
     */
    public function getTipoAlerta()
    {

        return $this->tipo_alerta;
    }

    /**
     * Get the [dias_para_aviso] column value.
     * 
     * @return   int
     */
    public function getDiasParaAviso()
    {

        return $this->dias_para_aviso;
    }

    /**
     * Get the [cuerpo_mensaje] column value.
     * 
     * @return   string
     */
    public function getCuerpoMensaje()
    {

        return $this->cuerpo_mensaje;
    }

    /**
     * Set the value of [id_tipo_alerta] column.
     * 
     * @param      int $v new value
     * @return   MailAlerta The current object (for fluent API support)
     */
    public function setIdTipoAlerta($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id_tipo_alerta !== $v) {
            $this->id_tipo_alerta = $v;
            $this->modifiedColumns[] = MailAlertaPeer::ID_TIPO_ALERTA;
        }


        return $this;
    } // setIdTipoAlerta()

    /**
     * Set the value of [tipo_alerta] column.
     * 
     * @param      int $v new value
     * @return   MailAlerta The current object (for fluent API support)
     */
    public function setTipoAlerta($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->tipo_alerta !== $v) {
            $this->tipo_alerta = $v;
            $this->modifiedColumns[] = MailAlertaPeer::TIPO_ALERTA;
        }


        return $this;
    } // setTipoAlerta()

    /**
     * Set the value of [dias_para_aviso] column.
     * 
     * @param      int $v new value
     * @return   MailAlerta The current object (for fluent API support)
     */
    public function setDiasParaAviso($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->dias_para_aviso !== $v) {
            $this->dias_para_aviso = $v;
            $this->modifiedColumns[] = MailAlertaPeer::DIAS_PARA_AVISO;
        }


        return $this;
    } // setDiasParaAviso()

    /**
     * Set the value of [cuerpo_mensaje] column.
     * 
     * @param      string $v new value
     * @return   MailAlerta The current object (for fluent API support)
     */
    public function setCuerpoMensaje($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cuerpo_mensaje !== $v) {
            $this->cuerpo_mensaje = $v;
            $this->modifiedColumns[] = MailAlertaPeer::CUERPO_MENSAJE;
        }


        return $this;
    } // setCuerpoMensaje()

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
            if ($this->dias_para_aviso !== 15) {
                return false;
            }

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

            $this->id_tipo_alerta = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->tipo_alerta = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->dias_para_aviso = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->cuerpo_mensaje = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 4; // 4 = MailAlertaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating MailAlerta object", $e);
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
            $con = Propel::getConnection(MailAlertaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = MailAlertaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collEnteAlertas = null;

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
            $con = Propel::getConnection(MailAlertaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = MailAlertaQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseMailAlerta:delete:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseMailAlerta:delete:post') as $callable)
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
            $con = Propel::getConnection(MailAlertaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseMailAlerta:save:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseMailAlerta:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

                MailAlertaPeer::addInstanceToPool($this);
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

            if ($this->enteAlertasScheduledForDeletion !== null) {
                if (!$this->enteAlertasScheduledForDeletion->isEmpty()) {
                    EnteAlertaQuery::create()
                        ->filterByPrimaryKeys($this->enteAlertasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->enteAlertasScheduledForDeletion = null;
                }
            }

            if ($this->collEnteAlertas !== null) {
                foreach ($this->collEnteAlertas as $referrerFK) {
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

        $this->modifiedColumns[] = MailAlertaPeer::ID_TIPO_ALERTA;
        if (null !== $this->id_tipo_alerta) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . MailAlertaPeer::ID_TIPO_ALERTA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(MailAlertaPeer::ID_TIPO_ALERTA)) {
            $modifiedColumns[':p' . $index++]  = '`ID_TIPO_ALERTA`';
        }
        if ($this->isColumnModified(MailAlertaPeer::TIPO_ALERTA)) {
            $modifiedColumns[':p' . $index++]  = '`TIPO_ALERTA`';
        }
        if ($this->isColumnModified(MailAlertaPeer::DIAS_PARA_AVISO)) {
            $modifiedColumns[':p' . $index++]  = '`DIAS_PARA_AVISO`';
        }
        if ($this->isColumnModified(MailAlertaPeer::CUERPO_MENSAJE)) {
            $modifiedColumns[':p' . $index++]  = '`CUERPO_MENSAJE`';
        }

        $sql = sprintf(
            'INSERT INTO `mail_alerta` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_TIPO_ALERTA`':						
						$stmt->bindValue($identifier, $this->id_tipo_alerta, PDO::PARAM_INT);
                        break;
                    case '`TIPO_ALERTA`':						
						$stmt->bindValue($identifier, $this->tipo_alerta, PDO::PARAM_INT);
                        break;
                    case '`DIAS_PARA_AVISO`':						
						$stmt->bindValue($identifier, $this->dias_para_aviso, PDO::PARAM_INT);
                        break;
                    case '`CUERPO_MENSAJE`':						
						$stmt->bindValue($identifier, $this->cuerpo_mensaje, PDO::PARAM_STR);
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
        $this->setIdTipoAlerta($pk);

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


            if (($retval = MailAlertaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collEnteAlertas !== null) {
                    foreach ($this->collEnteAlertas as $referrerFK) {
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
        $pos = MailAlertaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdTipoAlerta();
                break;
            case 1:
                return $this->getTipoAlerta();
                break;
            case 2:
                return $this->getDiasParaAviso();
                break;
            case 3:
                return $this->getCuerpoMensaje();
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
        if (isset($alreadyDumpedObjects['MailAlerta'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['MailAlerta'][$this->getPrimaryKey()] = true;
        $keys = MailAlertaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdTipoAlerta(),
            $keys[1] => $this->getTipoAlerta(),
            $keys[2] => $this->getDiasParaAviso(),
            $keys[3] => $this->getCuerpoMensaje(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collEnteAlertas) {
                $result['EnteAlertas'] = $this->collEnteAlertas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = MailAlertaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdTipoAlerta($value);
                break;
            case 1:
                $this->setTipoAlerta($value);
                break;
            case 2:
                $this->setDiasParaAviso($value);
                break;
            case 3:
                $this->setCuerpoMensaje($value);
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
        $keys = MailAlertaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdTipoAlerta($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setTipoAlerta($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDiasParaAviso($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCuerpoMensaje($arr[$keys[3]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(MailAlertaPeer::DATABASE_NAME);

        if ($this->isColumnModified(MailAlertaPeer::ID_TIPO_ALERTA)) $criteria->add(MailAlertaPeer::ID_TIPO_ALERTA, $this->id_tipo_alerta);
        if ($this->isColumnModified(MailAlertaPeer::TIPO_ALERTA)) $criteria->add(MailAlertaPeer::TIPO_ALERTA, $this->tipo_alerta);
        if ($this->isColumnModified(MailAlertaPeer::DIAS_PARA_AVISO)) $criteria->add(MailAlertaPeer::DIAS_PARA_AVISO, $this->dias_para_aviso);
        if ($this->isColumnModified(MailAlertaPeer::CUERPO_MENSAJE)) $criteria->add(MailAlertaPeer::CUERPO_MENSAJE, $this->cuerpo_mensaje);

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
        $criteria = new Criteria(MailAlertaPeer::DATABASE_NAME);
        $criteria->add(MailAlertaPeer::ID_TIPO_ALERTA, $this->id_tipo_alerta);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return   int
     */
    public function getPrimaryKey()
    {
        return $this->getIdTipoAlerta();
    }

    /**
     * Generic method to set the primary key (id_tipo_alerta column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdTipoAlerta($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdTipoAlerta();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of MailAlerta (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setTipoAlerta($this->getTipoAlerta());
        $copyObj->setDiasParaAviso($this->getDiasParaAviso());
        $copyObj->setCuerpoMensaje($this->getCuerpoMensaje());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getEnteAlertas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addEnteAlerta($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdTipoAlerta(NULL); // this is a auto-increment column, so set to default value
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
     * @return                 MailAlerta Clone of current object.
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
     * @return   MailAlertaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new MailAlertaPeer();
        }

        return self::$peer;
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
        if ('EnteAlerta' == $relationName) {
            $this->initEnteAlertas();
        }
    }

    /**
     * Clears out the collEnteAlertas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addEnteAlertas()
     */
    public function clearEnteAlertas()
    {
        $this->collEnteAlertas = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Initializes the collEnteAlertas collection.
     *
     * By default this just sets the collEnteAlertas collection to an empty array (like clearcollEnteAlertas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initEnteAlertas($overrideExisting = true)
    {
        if (null !== $this->collEnteAlertas && !$overrideExisting) {
            return;
        }
        $this->collEnteAlertas = new PropelObjectCollection();
        $this->collEnteAlertas->setModel('EnteAlerta');
    }

    /**
     * Gets an array of EnteAlerta objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this MailAlerta is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @return PropelObjectCollection|EnteAlerta[] List of EnteAlerta objects
     * @throws PropelException
     */
    public function getEnteAlertas($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collEnteAlertas || null !== $criteria) {
            if ($this->isNew() && null === $this->collEnteAlertas) {
                // return empty collection
                $this->initEnteAlertas();
            } else {
                $collEnteAlertas = EnteAlertaQuery::create(null, $criteria)
                    ->filterByMailAlerta($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collEnteAlertas;
                }
                $this->collEnteAlertas = $collEnteAlertas;
            }
        }

        return $this->collEnteAlertas;
    }

    /**
     * Sets a collection of EnteAlerta objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      PropelCollection $enteAlertas A Propel collection.
     * @param      PropelPDO $con Optional connection object
     */
    public function setEnteAlertas(PropelCollection $enteAlertas, PropelPDO $con = null)
    {
        $this->enteAlertasScheduledForDeletion = $this->getEnteAlertas(new Criteria(), $con)->diff($enteAlertas);

        foreach ($this->enteAlertasScheduledForDeletion as $enteAlertaRemoved) {
            $enteAlertaRemoved->setMailAlerta(null);
        }

        $this->collEnteAlertas = null;
        foreach ($enteAlertas as $enteAlerta) {
            $this->addEnteAlerta($enteAlerta);
        }

        $this->collEnteAlertas = $enteAlertas;
    }

    /**
     * Returns the number of related EnteAlerta objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      PropelPDO $con
     * @return int             Count of related EnteAlerta objects.
     * @throws PropelException
     */
    public function countEnteAlertas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collEnteAlertas || null !== $criteria) {
            if ($this->isNew() && null === $this->collEnteAlertas) {
                return 0;
            } else {
                $query = EnteAlertaQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByMailAlerta($this)
                    ->count($con);
            }
        } else {
            return count($this->collEnteAlertas);
        }
    }

    /**
     * Method called to associate a EnteAlerta object to this object
     * through the EnteAlerta foreign key attribute.
     *
     * @param    EnteAlerta $l EnteAlerta
     * @return   MailAlerta The current object (for fluent API support)
     */
    public function addEnteAlerta(EnteAlerta $l)
    {
        if ($this->collEnteAlertas === null) {
            $this->initEnteAlertas();
        }
        if (!$this->collEnteAlertas->contains($l)) { // only add it if the **same** object is not already associated
            $this->doAddEnteAlerta($l);
        }

        return $this;
    }

    /**
     * @param	EnteAlerta $enteAlerta The enteAlerta object to add.
     */
    protected function doAddEnteAlerta($enteAlerta)
    {
        $this->collEnteAlertas[]= $enteAlerta;
        $enteAlerta->setMailAlerta($this);
    }

    /**
     * @param	EnteAlerta $enteAlerta The enteAlerta object to remove.
     */
    public function removeEnteAlerta($enteAlerta)
    {
        if ($this->getEnteAlertas()->contains($enteAlerta)) {
            $this->collEnteAlertas->remove($this->collEnteAlertas->search($enteAlerta));
            if (null === $this->enteAlertasScheduledForDeletion) {
                $this->enteAlertasScheduledForDeletion = clone $this->collEnteAlertas;
                $this->enteAlertasScheduledForDeletion->clear();
            }
            $this->enteAlertasScheduledForDeletion[]= $enteAlerta;
            $enteAlerta->setMailAlerta(null);
        }
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this MailAlerta is new, it will return
     * an empty collection; or if this MailAlerta has previously
     * been saved, it will retrieve related EnteAlertas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in MailAlerta.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      PropelPDO $con optional connection object
     * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|EnteAlerta[] List of EnteAlerta objects
     */
    public function getEnteAlertasJoinPersonaJuridica($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EnteAlertaQuery::create(null, $criteria);
        $query->joinWith('PersonaJuridica', $join_behavior);

        return $this->getEnteAlertas($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_tipo_alerta = null;
        $this->tipo_alerta = null;
        $this->dias_para_aviso = null;
        $this->cuerpo_mensaje = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
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
            if ($this->collEnteAlertas) {
                foreach ($this->collEnteAlertas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        if ($this->collEnteAlertas instanceof PropelCollection) {
            $this->collEnteAlertas->clearIterator();
        }
        $this->collEnteAlertas = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(MailAlertaPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * Catches calls to virtual methods
     */
    public function __call($name, $params)
    {
        
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseMailAlerta:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}


        return parent::__call($name, $params);
    }

} // BaseMailAlerta
