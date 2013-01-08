<?php


/**
 * Base class that represents a query for the 'persona_juridica' table.
 *
 * 
 *
 * @method     PersonaJuridicaQuery orderByIdPersonaJuridica($order = Criteria::ASC) Order by the id_persona_juridica column
 * @method     PersonaJuridicaQuery orderBySituacionId($order = Criteria::ASC) Order by the situacion_id column
 * @method     PersonaJuridicaQuery orderByTipoPersJuridicaId($order = Criteria::ASC) Order by the tipo_pers_juridica_id column
 * @method     PersonaJuridicaQuery orderByCuitCuil($order = Criteria::ASC) Order by the cuit_cuil column
 * @method     PersonaJuridicaQuery orderByNombreFantasia($order = Criteria::ASC) Order by the nombre_fantasia column
 * @method     PersonaJuridicaQuery orderByFechaInicioActividad($order = Criteria::ASC) Order by the fecha_inicio_actividad column
 * @method     PersonaJuridicaQuery orderByResenia($order = Criteria::ASC) Order by the resenia column
 * @method     PersonaJuridicaQuery orderByLegajo($order = Criteria::ASC) Order by the legajo column
 * @method     PersonaJuridicaQuery orderByMatricula($order = Criteria::ASC) Order by the matricula column
 * @method     PersonaJuridicaQuery orderByCantidadDeSocios($order = Criteria::ASC) Order by the cantidad_de_socios column
 * @method     PersonaJuridicaQuery orderByTelefono($order = Criteria::ASC) Order by the telefono column
 * @method     PersonaJuridicaQuery orderByEmail($order = Criteria::ASC) Order by the email column
 *
 * @method     PersonaJuridicaQuery groupByIdPersonaJuridica() Group by the id_persona_juridica column
 * @method     PersonaJuridicaQuery groupBySituacionId() Group by the situacion_id column
 * @method     PersonaJuridicaQuery groupByTipoPersJuridicaId() Group by the tipo_pers_juridica_id column
 * @method     PersonaJuridicaQuery groupByCuitCuil() Group by the cuit_cuil column
 * @method     PersonaJuridicaQuery groupByNombreFantasia() Group by the nombre_fantasia column
 * @method     PersonaJuridicaQuery groupByFechaInicioActividad() Group by the fecha_inicio_actividad column
 * @method     PersonaJuridicaQuery groupByResenia() Group by the resenia column
 * @method     PersonaJuridicaQuery groupByLegajo() Group by the legajo column
 * @method     PersonaJuridicaQuery groupByMatricula() Group by the matricula column
 * @method     PersonaJuridicaQuery groupByCantidadDeSocios() Group by the cantidad_de_socios column
 * @method     PersonaJuridicaQuery groupByTelefono() Group by the telefono column
 * @method     PersonaJuridicaQuery groupByEmail() Group by the email column
 *
 * @method     PersonaJuridicaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PersonaJuridicaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PersonaJuridicaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
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
 * @method     PersonaJuridicaQuery leftJoinAporte($relationAlias = null) Adds a LEFT JOIN clause to the query using the Aporte relation
 * @method     PersonaJuridicaQuery rightJoinAporte($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Aporte relation
 * @method     PersonaJuridicaQuery innerJoinAporte($relationAlias = null) Adds a INNER JOIN clause to the query using the Aporte relation
 *
 * @method     PersonaJuridicaQuery leftJoinDireccion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Direccion relation
 * @method     PersonaJuridicaQuery rightJoinDireccion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Direccion relation
 * @method     PersonaJuridicaQuery innerJoinDireccion($relationAlias = null) Adds a INNER JOIN clause to the query using the Direccion relation
 *
 * @method     PersonaJuridicaQuery leftJoinEjercicioEconomico($relationAlias = null) Adds a LEFT JOIN clause to the query using the EjercicioEconomico relation
 * @method     PersonaJuridicaQuery rightJoinEjercicioEconomico($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EjercicioEconomico relation
 * @method     PersonaJuridicaQuery innerJoinEjercicioEconomico($relationAlias = null) Adds a INNER JOIN clause to the query using the EjercicioEconomico relation
 *
 * @method     PersonaJuridicaQuery leftJoinEnteAlerta($relationAlias = null) Adds a LEFT JOIN clause to the query using the EnteAlerta relation
 * @method     PersonaJuridicaQuery rightJoinEnteAlerta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EnteAlerta relation
 * @method     PersonaJuridicaQuery innerJoinEnteAlerta($relationAlias = null) Adds a INNER JOIN clause to the query using the EnteAlerta relation
 *
 * @method     PersonaJuridicaQuery leftJoinEstatuto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Estatuto relation
 * @method     PersonaJuridicaQuery rightJoinEstatuto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Estatuto relation
 * @method     PersonaJuridicaQuery innerJoinEstatuto($relationAlias = null) Adds a INNER JOIN clause to the query using the Estatuto relation
 *
 * @method     PersonaJuridicaQuery leftJoinImagenes($relationAlias = null) Adds a LEFT JOIN clause to the query using the Imagenes relation
 * @method     PersonaJuridicaQuery rightJoinImagenes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Imagenes relation
 * @method     PersonaJuridicaQuery innerJoinImagenes($relationAlias = null) Adds a INNER JOIN clause to the query using the Imagenes relation
 *
 * @method     PersonaJuridica findOne(PropelPDO $con = null) Return the first PersonaJuridica matching the query
 * @method     PersonaJuridica findOneOrCreate(PropelPDO $con = null) Return the first PersonaJuridica matching the query, or a new PersonaJuridica object populated from the query conditions when no match is found
 *
 * @method     PersonaJuridica findOneByIdPersonaJuridica(int $id_persona_juridica) Return the first PersonaJuridica filtered by the id_persona_juridica column
 * @method     PersonaJuridica findOneBySituacionId(int $situacion_id) Return the first PersonaJuridica filtered by the situacion_id column
 * @method     PersonaJuridica findOneByTipoPersJuridicaId(int $tipo_pers_juridica_id) Return the first PersonaJuridica filtered by the tipo_pers_juridica_id column
 * @method     PersonaJuridica findOneByCuitCuil(string $cuit_cuil) Return the first PersonaJuridica filtered by the cuit_cuil column
 * @method     PersonaJuridica findOneByNombreFantasia(string $nombre_fantasia) Return the first PersonaJuridica filtered by the nombre_fantasia column
 * @method     PersonaJuridica findOneByFechaInicioActividad(string $fecha_inicio_actividad) Return the first PersonaJuridica filtered by the fecha_inicio_actividad column
 * @method     PersonaJuridica findOneByResenia(string $resenia) Return the first PersonaJuridica filtered by the resenia column
 * @method     PersonaJuridica findOneByLegajo(int $legajo) Return the first PersonaJuridica filtered by the legajo column
 * @method     PersonaJuridica findOneByMatricula(string $matricula) Return the first PersonaJuridica filtered by the matricula column
 * @method     PersonaJuridica findOneByCantidadDeSocios(int $cantidad_de_socios) Return the first PersonaJuridica filtered by the cantidad_de_socios column
 * @method     PersonaJuridica findOneByTelefono(string $telefono) Return the first PersonaJuridica filtered by the telefono column
 * @method     PersonaJuridica findOneByEmail(string $email) Return the first PersonaJuridica filtered by the email column
 *
 * @method     array findByIdPersonaJuridica(int $id_persona_juridica) Return PersonaJuridica objects filtered by the id_persona_juridica column
 * @method     array findBySituacionId(int $situacion_id) Return PersonaJuridica objects filtered by the situacion_id column
 * @method     array findByTipoPersJuridicaId(int $tipo_pers_juridica_id) Return PersonaJuridica objects filtered by the tipo_pers_juridica_id column
 * @method     array findByCuitCuil(string $cuit_cuil) Return PersonaJuridica objects filtered by the cuit_cuil column
 * @method     array findByNombreFantasia(string $nombre_fantasia) Return PersonaJuridica objects filtered by the nombre_fantasia column
 * @method     array findByFechaInicioActividad(string $fecha_inicio_actividad) Return PersonaJuridica objects filtered by the fecha_inicio_actividad column
 * @method     array findByResenia(string $resenia) Return PersonaJuridica objects filtered by the resenia column
 * @method     array findByLegajo(int $legajo) Return PersonaJuridica objects filtered by the legajo column
 * @method     array findByMatricula(string $matricula) Return PersonaJuridica objects filtered by the matricula column
 * @method     array findByCantidadDeSocios(int $cantidad_de_socios) Return PersonaJuridica objects filtered by the cantidad_de_socios column
 * @method     array findByTelefono(string $telefono) Return PersonaJuridica objects filtered by the telefono column
 * @method     array findByEmail(string $email) Return PersonaJuridica objects filtered by the email column
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
        $sql = 'SELECT `ID_PERSONA_JURIDICA`, `SITUACION_ID`, `TIPO_PERS_JURIDICA_ID`, `CUIT_CUIL`, `NOMBRE_FANTASIA`, `FECHA_INICIO_ACTIVIDAD`, `RESENIA`, `LEGAJO`, `MATRICULA`, `CANTIDAD_DE_SOCIOS`, `TELEFONO`, `EMAIL` FROM `persona_juridica` WHERE `ID_PERSONA_JURIDICA` = :p0';
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
     * Filter the query on the cuit_cuil column
     *
     * Example usage:
     * <code>
     * $query->filterByCuitCuil(1234); // WHERE cuit_cuil = 1234
     * $query->filterByCuitCuil(array(12, 34)); // WHERE cuit_cuil IN (12, 34)
     * $query->filterByCuitCuil(array('min' => 12)); // WHERE cuit_cuil > 12
     * </code>
     *
     * @param     mixed $cuitCuil The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaJuridicaQuery The current query, for fluid interface
     */
    public function filterByCuitCuil($cuitCuil = null, $comparison = null)
    {
        if (is_array($cuitCuil)) {
            $useMinMax = false;
            if (isset($cuitCuil['min'])) {
                $this->addUsingAlias(PersonaJuridicaPeer::CUIT_CUIL, $cuitCuil['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cuitCuil['max'])) {
                $this->addUsingAlias(PersonaJuridicaPeer::CUIT_CUIL, $cuitCuil['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PersonaJuridicaPeer::CUIT_CUIL, $cuitCuil, $comparison);
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
     * $query->filterByMatricula('fooValue');   // WHERE matricula = 'fooValue'
     * $query->filterByMatricula('%fooValue%'); // WHERE matricula LIKE '%fooValue%'
     * </code>
     *
     * @param     string $matricula The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaJuridicaQuery The current query, for fluid interface
     */
    public function filterByMatricula($matricula = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($matricula)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $matricula)) {
                $matricula = str_replace('*', '%', $matricula);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PersonaJuridicaPeer::MATRICULA, $matricula, $comparison);
    }

    /**
     * Filter the query on the cantidad_de_socios column
     *
     * Example usage:
     * <code>
     * $query->filterByCantidadDeSocios(1234); // WHERE cantidad_de_socios = 1234
     * $query->filterByCantidadDeSocios(array(12, 34)); // WHERE cantidad_de_socios IN (12, 34)
     * $query->filterByCantidadDeSocios(array('min' => 12)); // WHERE cantidad_de_socios > 12
     * </code>
     *
     * @param     mixed $cantidadDeSocios The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaJuridicaQuery The current query, for fluid interface
     */
    public function filterByCantidadDeSocios($cantidadDeSocios = null, $comparison = null)
    {
        if (is_array($cantidadDeSocios)) {
            $useMinMax = false;
            if (isset($cantidadDeSocios['min'])) {
                $this->addUsingAlias(PersonaJuridicaPeer::CANTIDAD_DE_SOCIOS, $cantidadDeSocios['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cantidadDeSocios['max'])) {
                $this->addUsingAlias(PersonaJuridicaPeer::CANTIDAD_DE_SOCIOS, $cantidadDeSocios['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PersonaJuridicaPeer::CANTIDAD_DE_SOCIOS, $cantidadDeSocios, $comparison);
    }

    /**
     * Filter the query on the telefono column
     *
     * Example usage:
     * <code>
     * $query->filterByTelefono('fooValue');   // WHERE telefono = 'fooValue'
     * $query->filterByTelefono('%fooValue%'); // WHERE telefono LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telefono The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaJuridicaQuery The current query, for fluid interface
     */
    public function filterByTelefono($telefono = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telefono)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telefono)) {
                $telefono = str_replace('*', '%', $telefono);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PersonaJuridicaPeer::TELEFONO, $telefono, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaJuridicaQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PersonaJuridicaPeer::EMAIL, $email, $comparison);
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
     * Filter the query by a related Aporte object
     *
     * @param   Aporte|PropelObjectCollection $aporte  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PersonaJuridicaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByAporte($aporte, $comparison = null)
    {
        if ($aporte instanceof Aporte) {
            return $this
                ->addUsingAlias(PersonaJuridicaPeer::ID_PERSONA_JURIDICA, $aporte->getPersonaJuridicaId(), $comparison);
        } elseif ($aporte instanceof PropelObjectCollection) {
            return $this
                ->useAporteQuery()
                ->filterByPrimaryKeys($aporte->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAporte() only accepts arguments of type Aporte or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Aporte relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PersonaJuridicaQuery The current query, for fluid interface
     */
    public function joinAporte($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Aporte');

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
            $this->addJoinObject($join, 'Aporte');
        }

        return $this;
    }

    /**
     * Use the Aporte relation Aporte object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AporteQuery A secondary query class using the current class as primary query
     */
    public function useAporteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAporte($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Aporte', 'AporteQuery');
    }

    /**
     * Filter the query by a related Direccion object
     *
     * @param   Direccion|PropelObjectCollection $direccion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PersonaJuridicaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByDireccion($direccion, $comparison = null)
    {
        if ($direccion instanceof Direccion) {
            return $this
                ->addUsingAlias(PersonaJuridicaPeer::ID_PERSONA_JURIDICA, $direccion->getPersonaJuridicaId(), $comparison);
        } elseif ($direccion instanceof PropelObjectCollection) {
            return $this
                ->useDireccionQuery()
                ->filterByPrimaryKeys($direccion->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByDireccion() only accepts arguments of type Direccion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Direccion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PersonaJuridicaQuery The current query, for fluid interface
     */
    public function joinDireccion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Direccion');

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
            $this->addJoinObject($join, 'Direccion');
        }

        return $this;
    }

    /**
     * Use the Direccion relation Direccion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DireccionQuery A secondary query class using the current class as primary query
     */
    public function useDireccionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDireccion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Direccion', 'DireccionQuery');
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
                ->addUsingAlias(PersonaJuridicaPeer::ID_PERSONA_JURIDICA, $ejercicioEconomico->getPersonaJuridicaId(), $comparison);
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
     * Filter the query by a related EnteAlerta object
     *
     * @param   EnteAlerta|PropelObjectCollection $enteAlerta  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PersonaJuridicaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByEnteAlerta($enteAlerta, $comparison = null)
    {
        if ($enteAlerta instanceof EnteAlerta) {
            return $this
                ->addUsingAlias(PersonaJuridicaPeer::ID_PERSONA_JURIDICA, $enteAlerta->getEnteId(), $comparison);
        } elseif ($enteAlerta instanceof PropelObjectCollection) {
            return $this
                ->useEnteAlertaQuery()
                ->filterByPrimaryKeys($enteAlerta->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByEnteAlerta() only accepts arguments of type EnteAlerta or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EnteAlerta relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PersonaJuridicaQuery The current query, for fluid interface
     */
    public function joinEnteAlerta($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EnteAlerta');

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
            $this->addJoinObject($join, 'EnteAlerta');
        }

        return $this;
    }

    /**
     * Use the EnteAlerta relation EnteAlerta object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EnteAlertaQuery A secondary query class using the current class as primary query
     */
    public function useEnteAlertaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEnteAlerta($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EnteAlerta', 'EnteAlertaQuery');
    }

    /**
     * Filter the query by a related Estatuto object
     *
     * @param   Estatuto|PropelObjectCollection $estatuto  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PersonaJuridicaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByEstatuto($estatuto, $comparison = null)
    {
        if ($estatuto instanceof Estatuto) {
            return $this
                ->addUsingAlias(PersonaJuridicaPeer::ID_PERSONA_JURIDICA, $estatuto->getPersonaJuridicaId(), $comparison);
        } elseif ($estatuto instanceof PropelObjectCollection) {
            return $this
                ->useEstatutoQuery()
                ->filterByPrimaryKeys($estatuto->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByEstatuto() only accepts arguments of type Estatuto or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Estatuto relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PersonaJuridicaQuery The current query, for fluid interface
     */
    public function joinEstatuto($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Estatuto');

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
            $this->addJoinObject($join, 'Estatuto');
        }

        return $this;
    }

    /**
     * Use the Estatuto relation Estatuto object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EstatutoQuery A secondary query class using the current class as primary query
     */
    public function useEstatutoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEstatuto($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Estatuto', 'EstatutoQuery');
    }

    /**
     * Filter the query by a related Imagenes object
     *
     * @param   Imagenes|PropelObjectCollection $imagenes  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PersonaJuridicaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByImagenes($imagenes, $comparison = null)
    {
        if ($imagenes instanceof Imagenes) {
            return $this
                ->addUsingAlias(PersonaJuridicaPeer::ID_PERSONA_JURIDICA, $imagenes->getPersonaJuridicaIdPersonaJuridica(), $comparison);
        } elseif ($imagenes instanceof PropelObjectCollection) {
            return $this
                ->useImagenesQuery()
                ->filterByPrimaryKeys($imagenes->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByImagenes() only accepts arguments of type Imagenes or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Imagenes relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PersonaJuridicaQuery The current query, for fluid interface
     */
    public function joinImagenes($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Imagenes');

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
            $this->addJoinObject($join, 'Imagenes');
        }

        return $this;
    }

    /**
     * Use the Imagenes relation Imagenes object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ImagenesQuery A secondary query class using the current class as primary query
     */
    public function useImagenesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinImagenes($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Imagenes', 'ImagenesQuery');
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