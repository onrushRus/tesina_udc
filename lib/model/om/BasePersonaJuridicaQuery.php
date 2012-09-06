<?php


/**
 * Base class that represents a query for the 'persona_juridica' table.
 *
 * 
 *
 * @method     PersonaJuridicaQuery orderByIdPersonaJuridica($order = Criteria::ASC) Order by the id_persona_juridica column
 * @method     PersonaJuridicaQuery orderByPersonaId($order = Criteria::ASC) Order by the persona_id column
 * @method     PersonaJuridicaQuery orderBySituacionId($order = Criteria::ASC) Order by the situacion_id column
 * @method     PersonaJuridicaQuery orderByTipoPersJuridicaId($order = Criteria::ASC) Order by the tipo_pers_juridica_id column
 * @method     PersonaJuridicaQuery orderByNombreFantasia($order = Criteria::ASC) Order by the nombre_fantasia column
 * @method     PersonaJuridicaQuery orderByFechaInicioActividad($order = Criteria::ASC) Order by the fecha_inicio_actividad column
 * @method     PersonaJuridicaQuery orderByResenia($order = Criteria::ASC) Order by the resenia column
 * @method     PersonaJuridicaQuery orderByLegajo($order = Criteria::ASC) Order by the legajo column
 * @method     PersonaJuridicaQuery orderByMatricula($order = Criteria::ASC) Order by the matricula column
 *
 * @method     PersonaJuridicaQuery groupByIdPersonaJuridica() Group by the id_persona_juridica column
 * @method     PersonaJuridicaQuery groupByPersonaId() Group by the persona_id column
 * @method     PersonaJuridicaQuery groupBySituacionId() Group by the situacion_id column
 * @method     PersonaJuridicaQuery groupByTipoPersJuridicaId() Group by the tipo_pers_juridica_id column
 * @method     PersonaJuridicaQuery groupByNombreFantasia() Group by the nombre_fantasia column
 * @method     PersonaJuridicaQuery groupByFechaInicioActividad() Group by the fecha_inicio_actividad column
 * @method     PersonaJuridicaQuery groupByResenia() Group by the resenia column
 * @method     PersonaJuridicaQuery groupByLegajo() Group by the legajo column
 * @method     PersonaJuridicaQuery groupByMatricula() Group by the matricula column
 *
 * @method     PersonaJuridicaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PersonaJuridicaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PersonaJuridicaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PersonaJuridicaQuery leftJoinPersona($relationAlias = null) Adds a LEFT JOIN clause to the query using the Persona relation
 * @method     PersonaJuridicaQuery rightJoinPersona($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Persona relation
 * @method     PersonaJuridicaQuery innerJoinPersona($relationAlias = null) Adds a INNER JOIN clause to the query using the Persona relation
 *
 * @method     PersonaJuridicaQuery leftJoinSituacionPersonaJuridica($relationAlias = null) Adds a LEFT JOIN clause to the query using the SituacionPersonaJuridica relation
 * @method     PersonaJuridicaQuery rightJoinSituacionPersonaJuridica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SituacionPersonaJuridica relation
 * @method     PersonaJuridicaQuery innerJoinSituacionPersonaJuridica($relationAlias = null) Adds a INNER JOIN clause to the query using the SituacionPersonaJuridica relation
 *
 * @method     PersonaJuridicaQuery leftJoinTipoPersonaJuridica($relationAlias = null) Adds a LEFT JOIN clause to the query using the TipoPersonaJuridica relation
 * @method     PersonaJuridicaQuery rightJoinTipoPersonaJuridica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TipoPersonaJuridica relation
 * @method     PersonaJuridicaQuery innerJoinTipoPersonaJuridica($relationAlias = null) Adds a INNER JOIN clause to the query using the TipoPersonaJuridica relation
 *
 * @method     PersonaJuridicaQuery leftJoinActividadPersJuridica($relationAlias = null) Adds a LEFT JOIN clause to the query using the ActividadPersJuridica relation
 * @method     PersonaJuridicaQuery rightJoinActividadPersJuridica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ActividadPersJuridica relation
 * @method     PersonaJuridicaQuery innerJoinActividadPersJuridica($relationAlias = null) Adds a INNER JOIN clause to the query using the ActividadPersJuridica relation
 *
 * @method     PersonaJuridicaQuery leftJoinEjercicioEconomico($relationAlias = null) Adds a LEFT JOIN clause to the query using the EjercicioEconomico relation
 * @method     PersonaJuridicaQuery rightJoinEjercicioEconomico($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EjercicioEconomico relation
 * @method     PersonaJuridicaQuery innerJoinEjercicioEconomico($relationAlias = null) Adds a INNER JOIN clause to the query using the EjercicioEconomico relation
 *
 * @method     PersonaJuridica findOne(PropelPDO $con = null) Return the first PersonaJuridica matching the query
 * @method     PersonaJuridica findOneOrCreate(PropelPDO $con = null) Return the first PersonaJuridica matching the query, or a new PersonaJuridica object populated from the query conditions when no match is found
 *
 * @method     PersonaJuridica findOneByIdPersonaJuridica(int $id_persona_juridica) Return the first PersonaJuridica filtered by the id_persona_juridica column
 * @method     PersonaJuridica findOneByPersonaId(int $persona_id) Return the first PersonaJuridica filtered by the persona_id column
 * @method     PersonaJuridica findOneBySituacionId(int $situacion_id) Return the first PersonaJuridica filtered by the situacion_id column
 * @method     PersonaJuridica findOneByTipoPersJuridicaId(int $tipo_pers_juridica_id) Return the first PersonaJuridica filtered by the tipo_pers_juridica_id column
 * @method     PersonaJuridica findOneByNombreFantasia(string $nombre_fantasia) Return the first PersonaJuridica filtered by the nombre_fantasia column
 * @method     PersonaJuridica findOneByFechaInicioActividad(string $fecha_inicio_actividad) Return the first PersonaJuridica filtered by the fecha_inicio_actividad column
 * @method     PersonaJuridica findOneByResenia(string $resenia) Return the first PersonaJuridica filtered by the resenia column
 * @method     PersonaJuridica findOneByLegajo(int $legajo) Return the first PersonaJuridica filtered by the legajo column
 * @method     PersonaJuridica findOneByMatricula(int $matricula) Return the first PersonaJuridica filtered by the matricula column
 *
 * @method     array findByIdPersonaJuridica(int $id_persona_juridica) Return PersonaJuridica objects filtered by the id_persona_juridica column
 * @method     array findByPersonaId(int $persona_id) Return PersonaJuridica objects filtered by the persona_id column
 * @method     array findBySituacionId(int $situacion_id) Return PersonaJuridica objects filtered by the situacion_id column
 * @method     array findByTipoPersJuridicaId(int $tipo_pers_juridica_id) Return PersonaJuridica objects filtered by the tipo_pers_juridica_id column
 * @method     array findByNombreFantasia(string $nombre_fantasia) Return PersonaJuridica objects filtered by the nombre_fantasia column
 * @method     array findByFechaInicioActividad(string $fecha_inicio_actividad) Return PersonaJuridica objects filtered by the fecha_inicio_actividad column
 * @method     array findByResenia(string $resenia) Return PersonaJuridica objects filtered by the resenia column
 * @method     array findByLegajo(int $legajo) Return PersonaJuridica objects filtered by the legajo column
 * @method     array findByMatricula(int $matricula) Return PersonaJuridica objects filtered by the matricula column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePersonaJuridicaQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BasePersonaJuridicaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'PersonaJuridica', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PersonaJuridicaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     PersonaJuridicaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PersonaJuridicaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PersonaJuridicaQuery) {
            return $criteria;
        }
        $query = new PersonaJuridicaQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   PersonaJuridica|PersonaJuridica[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PersonaJuridicaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PersonaJuridicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return   PersonaJuridica A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_PERSONA_JURIDICA`, `PERSONA_ID`, `SITUACION_ID`, `TIPO_PERS_JURIDICA_ID`, `NOMBRE_FANTASIA`, `FECHA_INICIO_ACTIVIDAD`, `RESENIA`, `LEGAJO`, `MATRICULA` FROM `persona_juridica` WHERE `ID_PERSONA_JURIDICA` = :p0';
        try {
            $stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new PersonaJuridica();
            $obj->hydrate($row);
            PersonaJuridicaPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return PersonaJuridica|PersonaJuridica[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|PersonaJuridica[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return PersonaJuridicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PersonaJuridicaPeer::ID_PERSONA_JURIDICA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PersonaJuridicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PersonaJuridicaPeer::ID_PERSONA_JURIDICA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_persona_juridica column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPersonaJuridica(1234); // WHERE id_persona_juridica = 1234
     * $query->filterByIdPersonaJuridica(array(12, 34)); // WHERE id_persona_juridica IN (12, 34)
     * $query->filterByIdPersonaJuridica(array('min' => 12)); // WHERE id_persona_juridica > 12
     * </code>
     *
     * @param     mixed $idPersonaJuridica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaJuridicaQuery The current query, for fluid interface
     */
    public function filterByIdPersonaJuridica($idPersonaJuridica = null, $comparison = null)
    {
        if (is_array($idPersonaJuridica) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(PersonaJuridicaPeer::ID_PERSONA_JURIDICA, $idPersonaJuridica, $comparison);
    }

    /**
     * Filter the query on the persona_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPersonaId(1234); // WHERE persona_id = 1234
     * $query->filterByPersonaId(array(12, 34)); // WHERE persona_id IN (12, 34)
     * $query->filterByPersonaId(array('min' => 12)); // WHERE persona_id > 12
     * </code>
     *
     * @see       filterByPersona()
     *
     * @param     mixed $personaId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaJuridicaQuery The current query, for fluid interface
     */
    public function filterByPersonaId($personaId = null, $comparison = null)
    {
        if (is_array($personaId)) {
            $useMinMax = false;
            if (isset($personaId['min'])) {
                $this->addUsingAlias(PersonaJuridicaPeer::PERSONA_ID, $personaId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($personaId['max'])) {
                $this->addUsingAlias(PersonaJuridicaPeer::PERSONA_ID, $personaId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PersonaJuridicaPeer::PERSONA_ID, $personaId, $comparison);
    }

    /**
     * Filter the query on the situacion_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySituacionId(1234); // WHERE situacion_id = 1234
     * $query->filterBySituacionId(array(12, 34)); // WHERE situacion_id IN (12, 34)
     * $query->filterBySituacionId(array('min' => 12)); // WHERE situacion_id > 12
     * </code>
     *
     * @see       filterBySituacionPersonaJuridica()
     *
     * @param     mixed $situacionId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaJuridicaQuery The current query, for fluid interface
     */
    public function filterBySituacionId($situacionId = null, $comparison = null)
    {
        if (is_array($situacionId)) {
            $useMinMax = false;
            if (isset($situacionId['min'])) {
                $this->addUsingAlias(PersonaJuridicaPeer::SITUACION_ID, $situacionId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($situacionId['max'])) {
                $this->addUsingAlias(PersonaJuridicaPeer::SITUACION_ID, $situacionId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PersonaJuridicaPeer::SITUACION_ID, $situacionId, $comparison);
    }

    /**
     * Filter the query on the tipo_pers_juridica_id column
     *
     * Example usage:
     * <code>
     * $query->filterByTipoPersJuridicaId(1234); // WHERE tipo_pers_juridica_id = 1234
     * $query->filterByTipoPersJuridicaId(array(12, 34)); // WHERE tipo_pers_juridica_id IN (12, 34)
     * $query->filterByTipoPersJuridicaId(array('min' => 12)); // WHERE tipo_pers_juridica_id > 12
     * </code>
     *
     * @see       filterByTipoPersonaJuridica()
     *
     * @param     mixed $tipoPersJuridicaId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaJuridicaQuery The current query, for fluid interface
     */
    public function filterByTipoPersJuridicaId($tipoPersJuridicaId = null, $comparison = null)
    {
        if (is_array($tipoPersJuridicaId)) {
            $useMinMax = false;
            if (isset($tipoPersJuridicaId['min'])) {
                $this->addUsingAlias(PersonaJuridicaPeer::TIPO_PERS_JURIDICA_ID, $tipoPersJuridicaId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tipoPersJuridicaId['max'])) {
                $this->addUsingAlias(PersonaJuridicaPeer::TIPO_PERS_JURIDICA_ID, $tipoPersJuridicaId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PersonaJuridicaPeer::TIPO_PERS_JURIDICA_ID, $tipoPersJuridicaId, $comparison);
    }

    /**
     * Filter the query on the nombre_fantasia column
     *
     * Example usage:
     * <code>
     * $query->filterByNombreFantasia('fooValue');   // WHERE nombre_fantasia = 'fooValue'
     * $query->filterByNombreFantasia('%fooValue%'); // WHERE nombre_fantasia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nombreFantasia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaJuridicaQuery The current query, for fluid interface
     */
    public function filterByNombreFantasia($nombreFantasia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nombreFantasia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nombreFantasia)) {
                $nombreFantasia = str_replace('*', '%', $nombreFantasia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PersonaJuridicaPeer::NOMBRE_FANTASIA, $nombreFantasia, $comparison);
    }

    /**
     * Filter the query on the fecha_inicio_actividad column
     *
     * Example usage:
     * <code>
     * $query->filterByFechaInicioActividad('2011-03-14'); // WHERE fecha_inicio_actividad = '2011-03-14'
     * $query->filterByFechaInicioActividad('now'); // WHERE fecha_inicio_actividad = '2011-03-14'
     * $query->filterByFechaInicioActividad(array('max' => 'yesterday')); // WHERE fecha_inicio_actividad > '2011-03-13'
     * </code>
     *
     * @param     mixed $fechaInicioActividad The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaJuridicaQuery The current query, for fluid interface
     */
    public function filterByFechaInicioActividad($fechaInicioActividad = null, $comparison = null)
    {
        if (is_array($fechaInicioActividad)) {
            $useMinMax = false;
            if (isset($fechaInicioActividad['min'])) {
                $this->addUsingAlias(PersonaJuridicaPeer::FECHA_INICIO_ACTIVIDAD, $fechaInicioActividad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fechaInicioActividad['max'])) {
                $this->addUsingAlias(PersonaJuridicaPeer::FECHA_INICIO_ACTIVIDAD, $fechaInicioActividad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PersonaJuridicaPeer::FECHA_INICIO_ACTIVIDAD, $fechaInicioActividad, $comparison);
    }

    /**
     * Filter the query on the resenia column
     *
     * Example usage:
     * <code>
     * $query->filterByResenia('fooValue');   // WHERE resenia = 'fooValue'
     * $query->filterByResenia('%fooValue%'); // WHERE resenia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $resenia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaJuridicaQuery The current query, for fluid interface
     */
    public function filterByResenia($resenia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($resenia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $resenia)) {
                $resenia = str_replace('*', '%', $resenia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PersonaJuridicaPeer::RESENIA, $resenia, $comparison);
    }

    /**
     * Filter the query on the legajo column
     *
     * Example usage:
     * <code>
     * $query->filterByLegajo(1234); // WHERE legajo = 1234
     * $query->filterByLegajo(array(12, 34)); // WHERE legajo IN (12, 34)
     * $query->filterByLegajo(array('min' => 12)); // WHERE legajo > 12
     * </code>
     *
     * @param     mixed $legajo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaJuridicaQuery The current query, for fluid interface
     */
    public function filterByLegajo($legajo = null, $comparison = null)
    {
        if (is_array($legajo)) {
            $useMinMax = false;
            if (isset($legajo['min'])) {
                $this->addUsingAlias(PersonaJuridicaPeer::LEGAJO, $legajo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($legajo['max'])) {
                $this->addUsingAlias(PersonaJuridicaPeer::LEGAJO, $legajo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PersonaJuridicaPeer::LEGAJO, $legajo, $comparison);
    }

    /**
     * Filter the query on the matricula column
     *
     * Example usage:
     * <code>
     * $query->filterByMatricula(1234); // WHERE matricula = 1234
     * $query->filterByMatricula(array(12, 34)); // WHERE matricula IN (12, 34)
     * $query->filterByMatricula(array('min' => 12)); // WHERE matricula > 12
     * </code>
     *
     * @param     mixed $matricula The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaJuridicaQuery The current query, for fluid interface
     */
    public function filterByMatricula($matricula = null, $comparison = null)
    {
        if (is_array($matricula)) {
            $useMinMax = false;
            if (isset($matricula['min'])) {
                $this->addUsingAlias(PersonaJuridicaPeer::MATRICULA, $matricula['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($matricula['max'])) {
                $this->addUsingAlias(PersonaJuridicaPeer::MATRICULA, $matricula['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PersonaJuridicaPeer::MATRICULA, $matricula, $comparison);
    }

    /**
     * Filter the query by a related Persona object
     *
     * @param   Persona|PropelObjectCollection $persona The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PersonaJuridicaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPersona($persona, $comparison = null)
    {
        if ($persona instanceof Persona) {
            return $this
                ->addUsingAlias(PersonaJuridicaPeer::PERSONA_ID, $persona->getIdPersona(), $comparison);
        } elseif ($persona instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PersonaJuridicaPeer::PERSONA_ID, $persona->toKeyValue('PrimaryKey', 'IdPersona'), $comparison);
        } else {
            throw new PropelException('filterByPersona() only accepts arguments of type Persona or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Persona relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PersonaJuridicaQuery The current query, for fluid interface
     */
    public function joinPersona($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Persona');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Persona');
        }

        return $this;
    }

    /**
     * Use the Persona relation Persona object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PersonaQuery A secondary query class using the current class as primary query
     */
    public function usePersonaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPersona($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Persona', 'PersonaQuery');
    }

    /**
     * Filter the query by a related SituacionPersonaJuridica object
     *
     * @param   SituacionPersonaJuridica|PropelObjectCollection $situacionPersonaJuridica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PersonaJuridicaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterBySituacionPersonaJuridica($situacionPersonaJuridica, $comparison = null)
    {
        if ($situacionPersonaJuridica instanceof SituacionPersonaJuridica) {
            return $this
                ->addUsingAlias(PersonaJuridicaPeer::SITUACION_ID, $situacionPersonaJuridica->getIdSituacionPersJuridica(), $comparison);
        } elseif ($situacionPersonaJuridica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PersonaJuridicaPeer::SITUACION_ID, $situacionPersonaJuridica->toKeyValue('PrimaryKey', 'IdSituacionPersJuridica'), $comparison);
        } else {
            throw new PropelException('filterBySituacionPersonaJuridica() only accepts arguments of type SituacionPersonaJuridica or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SituacionPersonaJuridica relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PersonaJuridicaQuery The current query, for fluid interface
     */
    public function joinSituacionPersonaJuridica($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SituacionPersonaJuridica');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SituacionPersonaJuridica');
        }

        return $this;
    }

    /**
     * Use the SituacionPersonaJuridica relation SituacionPersonaJuridica object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SituacionPersonaJuridicaQuery A secondary query class using the current class as primary query
     */
    public function useSituacionPersonaJuridicaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSituacionPersonaJuridica($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SituacionPersonaJuridica', 'SituacionPersonaJuridicaQuery');
    }

    /**
     * Filter the query by a related TipoPersonaJuridica object
     *
     * @param   TipoPersonaJuridica|PropelObjectCollection $tipoPersonaJuridica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PersonaJuridicaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByTipoPersonaJuridica($tipoPersonaJuridica, $comparison = null)
    {
        if ($tipoPersonaJuridica instanceof TipoPersonaJuridica) {
            return $this
                ->addUsingAlias(PersonaJuridicaPeer::TIPO_PERS_JURIDICA_ID, $tipoPersonaJuridica->getIdTipoPersonaJuridica(), $comparison);
        } elseif ($tipoPersonaJuridica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PersonaJuridicaPeer::TIPO_PERS_JURIDICA_ID, $tipoPersonaJuridica->toKeyValue('PrimaryKey', 'IdTipoPersonaJuridica'), $comparison);
        } else {
            throw new PropelException('filterByTipoPersonaJuridica() only accepts arguments of type TipoPersonaJuridica or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TipoPersonaJuridica relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PersonaJuridicaQuery The current query, for fluid interface
     */
    public function joinTipoPersonaJuridica($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TipoPersonaJuridica');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'TipoPersonaJuridica');
        }

        return $this;
    }

    /**
     * Use the TipoPersonaJuridica relation TipoPersonaJuridica object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TipoPersonaJuridicaQuery A secondary query class using the current class as primary query
     */
    public function useTipoPersonaJuridicaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTipoPersonaJuridica($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TipoPersonaJuridica', 'TipoPersonaJuridicaQuery');
    }

    /**
     * Filter the query by a related ActividadPersJuridica object
     *
     * @param   ActividadPersJuridica|PropelObjectCollection $actividadPersJuridica  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PersonaJuridicaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByActividadPersJuridica($actividadPersJuridica, $comparison = null)
    {
        if ($actividadPersJuridica instanceof ActividadPersJuridica) {
            return $this
                ->addUsingAlias(PersonaJuridicaPeer::ID_PERSONA_JURIDICA, $actividadPersJuridica->getPersonaJuridicaId(), $comparison);
        } elseif ($actividadPersJuridica instanceof PropelObjectCollection) {
            return $this
                ->useActividadPersJuridicaQuery()
                ->filterByPrimaryKeys($actividadPersJuridica->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByActividadPersJuridica() only accepts arguments of type ActividadPersJuridica or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ActividadPersJuridica relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PersonaJuridicaQuery The current query, for fluid interface
     */
    public function joinActividadPersJuridica($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ActividadPersJuridica');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'ActividadPersJuridica');
        }

        return $this;
    }

    /**
     * Use the ActividadPersJuridica relation ActividadPersJuridica object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ActividadPersJuridicaQuery A secondary query class using the current class as primary query
     */
    public function useActividadPersJuridicaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinActividadPersJuridica($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ActividadPersJuridica', 'ActividadPersJuridicaQuery');
    }

    /**
     * Filter the query by a related EjercicioEconomico object
     *
     * @param   EjercicioEconomico|PropelObjectCollection $ejercicioEconomico  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PersonaJuridicaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByEjercicioEconomico($ejercicioEconomico, $comparison = null)
    {
        if ($ejercicioEconomico instanceof EjercicioEconomico) {
            return $this
                ->addUsingAlias(PersonaJuridicaPeer::ID_PERSONA_JURIDICA, $ejercicioEconomico->getPersonaJuridicaIdPersonaJuridica(), $comparison);
        } elseif ($ejercicioEconomico instanceof PropelObjectCollection) {
            return $this
                ->useEjercicioEconomicoQuery()
                ->filterByPrimaryKeys($ejercicioEconomico->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByEjercicioEconomico() only accepts arguments of type EjercicioEconomico or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EjercicioEconomico relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PersonaJuridicaQuery The current query, for fluid interface
     */
    public function joinEjercicioEconomico($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EjercicioEconomico');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'EjercicioEconomico');
        }

        return $this;
    }

    /**
     * Use the EjercicioEconomico relation EjercicioEconomico object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EjercicioEconomicoQuery A secondary query class using the current class as primary query
     */
    public function useEjercicioEconomicoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEjercicioEconomico($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EjercicioEconomico', 'EjercicioEconomicoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   PersonaJuridica $personaJuridica Object to remove from the list of results
     *
     * @return PersonaJuridicaQuery The current query, for fluid interface
     */
    public function prune($personaJuridica = null)
    {
        if ($personaJuridica) {
            $this->addUsingAlias(PersonaJuridicaPeer::ID_PERSONA_JURIDICA, $personaJuridica->getIdPersonaJuridica(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BasePersonaJuridicaQuery