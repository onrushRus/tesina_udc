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
     * The value for the duracion_de_mandato field.
     * @var        int
     */
    protected $duracion_de_mandato;

    /**
     * The value for the duracion_ejercicio_economico field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $duracion_ejercicio_economico;

    /**
     * The value for the dias_para_fecha_tope_asamblea field.
     * @var        int
     */
    protected $dias_para_fecha_tope_asamblea;

    /**
     * The value for the dias_para_fecha_tope_convocatoria field.
     * @var        int
     */
    protected $dias_para_fecha_tope_convocatoria;

    /**
     * The value for the dias_para_fecha_tope_nuevo_mandato field.
     * @var        int
     */
    protected $dias_para_fecha_tope_nuevo_mandato;

    /**
     * The value for the estatuto_pdf field.
     * @var        string
     */
    protected $estatuto_pdf;

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
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->duracion_ejercicio_economico = 1;
    }

    /**
     * Initializes internal state of BaseEstatuto object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

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
     * Get the [duracion_de_mandato] column value.
     * 
     * @return   int
     */
    public function getDuracionDeMandato()
    {

        return $this->duracion_de_mandato;
    }

    /**
     * Get the [duracion_ejercicio_economico] column value.
     * 
     * @return   int
     */
    public function getDuracionEjercicioEconomico()
    {

        return $this->duracion_ejercicio_economico;
    }

    /**
     * Get the [dias_para_fecha_tope_asamblea] column value.
     * 
     * @return   int
     */
    public function getDiasParaFechaTopeAsamblea()
    {

        return $this->dias_para_fecha_tope_asamblea;
    }

    /**
     * Get the [dias_para_fecha_tope_convocatoria] column value.
     * 
     * @return   int
     */
    public function getDiasParaFechaTopeConvocatoria()
    {

        return $this->dias_para_fecha_tope_convocatoria;
    }

    /**
     * Get the [dias_para_fecha_tope_nuevo_mandato] column value.
     * 
     * @return   int
     */
    public function getDiasParaFechaTopeNuevoMandato()
    {

        return $this->dias_para_fecha_tope_nuevo_mandato;
    }

    /**
     * Get the [estatuto_pdf] column value.
     * 
     * @return   string
     */
    public function getEstatutoPdf()
    {

        return $this->estatuto_pdf;
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
     * Set the value of [duracion_de_mandato] column.
     * 
     * @param      int $v new value
     * @return   Estatuto The current object (for fluent API support)
     */
    public function setDuracionDeMandato($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->duracion_de_mandato !== $v) {
            $this->duracion_de_mandato = $v;
            $this->modifiedColumns[] = EstatutoPeer::DURACION_DE_MANDATO;
        }


        return $this;
    } // setDuracionDeMandato()

    /**
     * Set the value of [duracion_ejercicio_economico] column.
     * 
     * @param      int $v new value
     * @return   Estatuto The current object (for fluent API support)
     */
    public function setDuracionEjercicioEconomico($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->duracion_ejercicio_economico !== $v) {
            $this->duracion_ejercicio_economico = $v;
            $this->modifiedColumns[] = EstatutoPeer::DURACION_EJERCICIO_ECONOMICO;
        }


        return $this;
    } // setDuracionEjercicioEconomico()

    /**
     * Set the value of [dias_para_fecha_tope_asamblea] column.
     * 
     * @param      int $v new value
     * @return   Estatuto The current object (for fluent API support)
     */
    public function setDiasParaFechaTopeAsamblea($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->dias_para_fecha_tope_asamblea !== $v) {
            $this->dias_para_fecha_tope_asamblea = $v;
            $this->modifiedColumns[] = EstatutoPeer::DIAS_PARA_FECHA_TOPE_ASAMBLEA;
        }


        return $this;
    } // setDiasParaFechaTopeAsamblea()

    /**
     * Set the value of [dias_para_fecha_tope_convocatoria] column.
     * 
     * @param      int $v new value
     * @return   Estatuto The current object (for fluent API support)
     */
    public function setDiasParaFechaTopeConvocatoria($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->dias_para_fecha_tope_convocatoria !== $v) {
            $this->dias_para_fecha_tope_convocatoria = $v;
            $this->modifiedColumns[] = EstatutoPeer::DIAS_PARA_FECHA_TOPE_CONVOCATORIA;
        }


        return $this;
    } // setDiasParaFechaTopeConvocatoria()

    /**
     * Set the value of [dias_para_fecha_tope_nuevo_mandato] column.
     * 
     * @param      int $v new value
     * @return   Estatuto The current object (for fluent API support)
     */
    public function setDiasParaFechaTopeNuevoMandato($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->dias_para_fecha_tope_nuevo_mandato !== $v) {
            $this->dias_para_fecha_tope_nuevo_mandato = $v;
            $this->modifiedColumns[] = EstatutoPeer::DIAS_PARA_FECHA_TOPE_NUEVO_MANDATO;
        }


        return $this;
    } // setDiasParaFechaTopeNuevoMandato()

    /**
     * Set the value of [estatuto_pdf] column.
     * 
     * @param      string $v new value
     * @return   Estatuto The current object (for fluent API support)
     */
    public function setEstatutoPdf($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->estatuto_pdf !== $v) {
            $this->estatuto_pdf = $v;
            $this->modifiedColumns[] = EstatutoPeer::ESTATUTO_PDF;
        }


        return $this;
    } // setEstatutoPdf()

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
            if ($this->duracion_ejercicio_economico !== 1) {
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

            $this->id_estatuto = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->persona_juridica_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->duracion_de_mandato = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->duracion_ejercicio_economico = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->dias_para_fecha_tope_asamblea = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->dias_para_fecha_tope_convocatoria = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->dias_para_fecha_tope_nuevo_mandato = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->estatuto_pdf = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 8; // 8 = EstatutoPeer::NUM_HYDRATE_COLUMNS.

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
        if ($this->isColumnModified(EstatutoPeer::DURACION_DE_MANDATO)) {
            $modifiedColumns[':p' . $index++]  = '`DURACION_DE_MANDATO`';
        }
        if ($this->isColumnModified(EstatutoPeer::DURACION_EJERCICIO_ECONOMICO)) {
            $modifiedColumns[':p' . $index++]  = '`DURACION_EJERCICIO_ECONOMICO`';
        }
        if ($this->isColumnModified(EstatutoPeer::DIAS_PARA_FECHA_TOPE_ASAMBLEA)) {
            $modifiedColumns[':p' . $index++]  = '`DIAS_PARA_FECHA_TOPE_ASAMBLEA`';
        }
        if ($this->isColumnModified(EstatutoPeer::DIAS_PARA_FECHA_TOPE_CONVOCATORIA)) {
            $modifiedColumns[':p' . $index++]  = '`DIAS_PARA_FECHA_TOPE_CONVOCATORIA`';
        }
        if ($this->isColumnModified(EstatutoPeer::DIAS_PARA_FECHA_TOPE_NUEVO_MANDATO)) {
            $modifiedColumns[':p' . $index++]  = '`DIAS_PARA_FECHA_TOPE_NUEVO_MANDATO`';
        }
        if ($this->isColumnModified(EstatutoPeer::ESTATUTO_PDF)) {
            $modifiedColumns[':p' . $index++]  = '`ESTATUTO_PDF`';
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
                    case '`DURACION_DE_MANDATO`':						
						$stmt->bindValue($identifier, $this->duracion_de_mandato, PDO::PARAM_INT);
                        break;
                    case '`DURACION_EJERCICIO_ECONOMICO`':						
						$stmt->bindValue($identifier, $this->duracion_ejercicio_economico, PDO::PARAM_INT);
                        break;
                    case '`DIAS_PARA_FECHA_TOPE_ASAMBLEA`':						
						$stmt->bindValue($identifier, $this->dias_para_fecha_tope_asamblea, PDO::PARAM_INT);
                        break;
                    case '`DIAS_PARA_FECHA_TOPE_CONVOCATORIA`':						
						$stmt->bindValue($identifier, $this->dias_para_fecha_tope_convocatoria, PDO::PARAM_INT);
                        break;
                    case '`DIAS_PARA_FECHA_TOPE_NUEVO_MANDATO`':						
						$stmt->bindValue($identifier, $this->dias_para_fecha_tope_nuevo_mandato, PDO::PARAM_INT);
                        break;
                    case '`ESTATUTO_PDF`':						
						$stmt->bindValue($identifier, $this->estatuto_pdf, PDO::PARAM_STR);
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
                return $this->getDuracionDeMandato();
                break;
            case 3:
                return $this->getDuracionEjercicioEconomico();
                break;
            case 4:
                return $this->getDiasParaFechaTopeAsamblea();
                break;
            case 5:
                return $this->getDiasParaFechaTopeConvocatoria();
                break;
            case 6:
                return $this->getDiasParaFechaTopeNuevoMandato();
                break;
            case 7:
                return $this->getEstatutoPdf();
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
            $keys[2] => $this->getDuracionDeMandato(),
            $keys[3] => $this->getDuracionEjercicioEconomico(),
            $keys[4] => $this->getDiasParaFechaTopeAsamblea(),
            $keys[5] => $this->getDiasParaFechaTopeConvocatoria(),
            $keys[6] => $this->getDiasParaFechaTopeNuevoMandato(),
            $keys[7] => $this->getEstatutoPdf(),
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
                $this->setDuracionDeMandato($value);
                break;
            case 3:
                $this->setDuracionEjercicioEconomico($value);
                break;
            case 4:
                $this->setDiasParaFechaTopeAsamblea($value);
                break;
            case 5:
                $this->setDiasParaFechaTopeConvocatoria($value);
                break;
            case 6:
                $this->setDiasParaFechaTopeNuevoMandato($value);
                break;
            case 7:
                $this->setEstatutoPdf($value);
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
        if (array_key_exists($keys[2], $arr)) $this->setDuracionDeMandato($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDuracionEjercicioEconomico($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDiasParaFechaTopeAsamblea($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDiasParaFechaTopeConvocatoria($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDiasParaFechaTopeNuevoMandato($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setEstatutoPdf($arr[$keys[7]]);
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
        if ($this->isColumnModified(EstatutoPeer::DURACION_DE_MANDATO)) $criteria->add(EstatutoPeer::DURACION_DE_MANDATO, $this->duracion_de_mandato);
        if ($this->isColumnModified(EstatutoPeer::DURACION_EJERCICIO_ECONOMICO)) $criteria->add(EstatutoPeer::DURACION_EJERCICIO_ECONOMICO, $this->duracion_ejercicio_economico);
        if ($this->isColumnModified(EstatutoPeer::DIAS_PARA_FECHA_TOPE_ASAMBLEA)) $criteria->add(EstatutoPeer::DIAS_PARA_FECHA_TOPE_ASAMBLEA, $this->dias_para_fecha_tope_asamblea);
        if ($this->isColumnModified(EstatutoPeer::DIAS_PARA_FECHA_TOPE_CONVOCATORIA)) $criteria->add(EstatutoPeer::DIAS_PARA_FECHA_TOPE_CONVOCATORIA, $this->dias_para_fecha_tope_convocatoria);
        if ($this->isColumnModified(EstatutoPeer::DIAS_PARA_FECHA_TOPE_NUEVO_MANDATO)) $criteria->add(EstatutoPeer::DIAS_PARA_FECHA_TOPE_NUEVO_MANDATO, $this->dias_para_fecha_tope_nuevo_mandato);
        if ($this->isColumnModified(EstatutoPeer::ESTATUTO_PDF)) $criteria->add(EstatutoPeer::ESTATUTO_PDF, $this->estatuto_pdf);

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
        $copyObj->setDuracionDeMandato($this->getDuracionDeMandato());
        $copyObj->setDuracionEjercicioEconomico($this->getDuracionEjercicioEconomico());
        $copyObj->setDiasParaFechaTopeAsamblea($this->getDiasParaFechaTopeAsamblea());
        $copyObj->setDiasParaFechaTopeConvocatoria($this->getDiasParaFechaTopeConvocatoria());
        $copyObj->setDiasParaFechaTopeNuevoMandato($this->getDiasParaFechaTopeNuevoMandato());
        $copyObj->setEstatutoPdf($this->getEstatutoPdf());

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
        $this->duracion_de_mandato = null;
        $this->duracion_ejercicio_economico = null;
        $this->dias_para_fecha_tope_asamblea = null;
        $this->dias_para_fecha_tope_convocatoria = null;
        $this->dias_para_fecha_tope_nuevo_mandato = null;
        $this->estatuto_pdf = null;
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
