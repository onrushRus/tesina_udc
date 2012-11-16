<?php


/**
 * Base class that represents a query for the 'estatuto' table.
 *
 * 
 *
 * @method     EstatutoQuery orderByIdEstatuto($order = Criteria::ASC) Order by the id_estatuto column
 * @method     EstatutoQuery orderByPersonaJuridicaId($order = Criteria::ASC) Order by the persona_juridica_id column
 * @method     EstatutoQuery orderByDuracionDeMandato($order = Criteria::ASC) Order by the duracion_de_mandato column
 * @method     EstatutoQuery orderByDuracionEjercicioEconomico($order = Criteria::ASC) Order by the duracion_ejercicio_economico column
 * @method     EstatutoQuery orderByDiasParaFechaTopeAsamblea($order = Criteria::ASC) Order by the dias_para_fecha_tope_asamblea column
 * @method     EstatutoQuery orderByDiasParaFechaTopeConvocatoria($order = Criteria::ASC) Order by the dias_para_fecha_tope_convocatoria column
 * @method     EstatutoQuery orderByDiasParaFechaTopeNuevoMandato($order = Criteria::ASC) Order by the dias_para_fecha_tope_nuevo_mandato column
 * @method     EstatutoQuery orderByEstatutoPdf($order = Criteria::ASC) Order by the estatuto_pdf column
 *
 * @method     EstatutoQuery groupByIdEstatuto() Group by the id_estatuto column
 * @method     EstatutoQuery groupByPersonaJuridicaId() Group by the persona_juridica_id column
 * @method     EstatutoQuery groupByDuracionDeMandato() Group by the duracion_de_mandato column
 * @method     EstatutoQuery groupByDuracionEjercicioEconomico() Group by the duracion_ejercicio_economico column
 * @method     EstatutoQuery groupByDiasParaFechaTopeAsamblea() Group by the dias_para_fecha_tope_asamblea column
 * @method     EstatutoQuery groupByDiasParaFechaTopeConvocatoria() Group by the dias_para_fecha_tope_convocatoria column
 * @method     EstatutoQuery groupByDiasParaFechaTopeNuevoMandato() Group by the dias_para_fecha_tope_nuevo_mandato column
 * @method     EstatutoQuery groupByEstatutoPdf() Group by the estatuto_pdf column
 *
 * @method     EstatutoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     EstatutoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     EstatutoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     EstatutoQuery leftJoinPersonaJuridica($relationAlias = null) Adds a LEFT JOIN clause to the query using the PersonaJuridica relation
 * @method     EstatutoQuery rightJoinPersonaJuridica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PersonaJuridica relation
 * @method     EstatutoQuery innerJoinPersonaJuridica($relationAlias = null) Adds a INNER JOIN clause to the query using the PersonaJuridica relation
 *
 * @method     Estatuto findOne(PropelPDO $con = null) Return the first Estatuto matching the query
 * @method     Estatuto findOneOrCreate(PropelPDO $con = null) Return the first Estatuto matching the query, or a new Estatuto object populated from the query conditions when no match is found
 *
 * @method     Estatuto findOneByIdEstatuto(int $id_estatuto) Return the first Estatuto filtered by the id_estatuto column
 * @method     Estatuto findOneByPersonaJuridicaId(int $persona_juridica_id) Return the first Estatuto filtered by the persona_juridica_id column
 * @method     Estatuto findOneByDuracionDeMandato(int $duracion_de_mandato) Return the first Estatuto filtered by the duracion_de_mandato column
 * @method     Estatuto findOneByDuracionEjercicioEconomico(int $duracion_ejercicio_economico) Return the first Estatuto filtered by the duracion_ejercicio_economico column
 * @method     Estatuto findOneByDiasParaFechaTopeAsamblea(int $dias_para_fecha_tope_asamblea) Return the first Estatuto filtered by the dias_para_fecha_tope_asamblea column
 * @method     Estatuto findOneByDiasParaFechaTopeConvocatoria(int $dias_para_fecha_tope_convocatoria) Return the first Estatuto filtered by the dias_para_fecha_tope_convocatoria column
 * @method     Estatuto findOneByDiasParaFechaTopeNuevoMandato(int $dias_para_fecha_tope_nuevo_mandato) Return the first Estatuto filtered by the dias_para_fecha_tope_nuevo_mandato column
 * @method     Estatuto findOneByEstatutoPdf(string $estatuto_pdf) Return the first Estatuto filtered by the estatuto_pdf column
 *
 * @method     array findByIdEstatuto(int $id_estatuto) Return Estatuto objects filtered by the id_estatuto column
 * @method     array findByPersonaJuridicaId(int $persona_juridica_id) Return Estatuto objects filtered by the persona_juridica_id column
 * @method     array findByDuracionDeMandato(int $duracion_de_mandato) Return Estatuto objects filtered by the duracion_de_mandato column
 * @method     array findByDuracionEjercicioEconomico(int $duracion_ejercicio_economico) Return Estatuto objects filtered by the duracion_ejercicio_economico column
 * @method     array findByDiasParaFechaTopeAsamblea(int $dias_para_fecha_tope_asamblea) Return Estatuto objects filtered by the dias_para_fecha_tope_asamblea column
 * @method     array findByDiasParaFechaTopeConvocatoria(int $dias_para_fecha_tope_convocatoria) Return Estatuto objects filtered by the dias_para_fecha_tope_convocatoria column
 * @method     array findByDiasParaFechaTopeNuevoMandato(int $dias_para_fecha_tope_nuevo_mandato) Return Estatuto objects filtered by the dias_para_fecha_tope_nuevo_mandato column
 * @method     array findByEstatutoPdf(string $estatuto_pdf) Return Estatuto objects filtered by the estatuto_pdf column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseEstatutoQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseEstatutoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Estatuto', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EstatutoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     EstatutoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EstatutoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EstatutoQuery) {
            return $criteria;
        }
        $query = new EstatutoQuery();
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
     * @return   Estatuto|Estatuto[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EstatutoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EstatutoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Estatuto A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_ESTATUTO`, `PERSONA_JURIDICA_ID`, `DURACION_DE_MANDATO`, `DURACION_EJERCICIO_ECONOMICO`, `DIAS_PARA_FECHA_TOPE_ASAMBLEA`, `DIAS_PARA_FECHA_TOPE_CONVOCATORIA`, `DIAS_PARA_FECHA_TOPE_NUEVO_MANDATO`, `ESTATUTO_PDF` FROM `estatuto` WHERE `ID_ESTATUTO` = :p0';
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
            $obj = new Estatuto();
            $obj->hydrate($row);
            EstatutoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Estatuto|Estatuto[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Estatuto[]|mixed the list of results, formatted by the current formatter
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
     * @return EstatutoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EstatutoPeer::ID_ESTATUTO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EstatutoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EstatutoPeer::ID_ESTATUTO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_estatuto column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEstatuto(1234); // WHERE id_estatuto = 1234
     * $query->filterByIdEstatuto(array(12, 34)); // WHERE id_estatuto IN (12, 34)
     * $query->filterByIdEstatuto(array('min' => 12)); // WHERE id_estatuto > 12
     * </code>
     *
     * @param     mixed $idEstatuto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstatutoQuery The current query, for fluid interface
     */
    public function filterByIdEstatuto($idEstatuto = null, $comparison = null)
    {
        if (is_array($idEstatuto) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(EstatutoPeer::ID_ESTATUTO, $idEstatuto, $comparison);
    }

    /**
     * Filter the query on the persona_juridica_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPersonaJuridicaId(1234); // WHERE persona_juridica_id = 1234
     * $query->filterByPersonaJuridicaId(array(12, 34)); // WHERE persona_juridica_id IN (12, 34)
     * $query->filterByPersonaJuridicaId(array('min' => 12)); // WHERE persona_juridica_id > 12
     * </code>
     *
     * @see       filterByPersonaJuridica()
     *
     * @param     mixed $personaJuridicaId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstatutoQuery The current query, for fluid interface
     */
    public function filterByPersonaJuridicaId($personaJuridicaId = null, $comparison = null)
    {
        if (is_array($personaJuridicaId)) {
            $useMinMax = false;
            if (isset($personaJuridicaId['min'])) {
                $this->addUsingAlias(EstatutoPeer::PERSONA_JURIDICA_ID, $personaJuridicaId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($personaJuridicaId['max'])) {
                $this->addUsingAlias(EstatutoPeer::PERSONA_JURIDICA_ID, $personaJuridicaId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstatutoPeer::PERSONA_JURIDICA_ID, $personaJuridicaId, $comparison);
    }

    /**
     * Filter the query on the duracion_de_mandato column
     *
     * Example usage:
     * <code>
     * $query->filterByDuracionDeMandato(1234); // WHERE duracion_de_mandato = 1234
     * $query->filterByDuracionDeMandato(array(12, 34)); // WHERE duracion_de_mandato IN (12, 34)
     * $query->filterByDuracionDeMandato(array('min' => 12)); // WHERE duracion_de_mandato > 12
     * </code>
     *
     * @param     mixed $duracionDeMandato The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstatutoQuery The current query, for fluid interface
     */
    public function filterByDuracionDeMandato($duracionDeMandato = null, $comparison = null)
    {
        if (is_array($duracionDeMandato)) {
            $useMinMax = false;
            if (isset($duracionDeMandato['min'])) {
                $this->addUsingAlias(EstatutoPeer::DURACION_DE_MANDATO, $duracionDeMandato['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($duracionDeMandato['max'])) {
                $this->addUsingAlias(EstatutoPeer::DURACION_DE_MANDATO, $duracionDeMandato['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstatutoPeer::DURACION_DE_MANDATO, $duracionDeMandato, $comparison);
    }

    /**
     * Filter the query on the duracion_ejercicio_economico column
     *
     * Example usage:
     * <code>
     * $query->filterByDuracionEjercicioEconomico(1234); // WHERE duracion_ejercicio_economico = 1234
     * $query->filterByDuracionEjercicioEconomico(array(12, 34)); // WHERE duracion_ejercicio_economico IN (12, 34)
     * $query->filterByDuracionEjercicioEconomico(array('min' => 12)); // WHERE duracion_ejercicio_economico > 12
     * </code>
     *
     * @param     mixed $duracionEjercicioEconomico The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstatutoQuery The current query, for fluid interface
     */
    public function filterByDuracionEjercicioEconomico($duracionEjercicioEconomico = null, $comparison = null)
    {
        if (is_array($duracionEjercicioEconomico)) {
            $useMinMax = false;
            if (isset($duracionEjercicioEconomico['min'])) {
                $this->addUsingAlias(EstatutoPeer::DURACION_EJERCICIO_ECONOMICO, $duracionEjercicioEconomico['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($duracionEjercicioEconomico['max'])) {
                $this->addUsingAlias(EstatutoPeer::DURACION_EJERCICIO_ECONOMICO, $duracionEjercicioEconomico['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstatutoPeer::DURACION_EJERCICIO_ECONOMICO, $duracionEjercicioEconomico, $comparison);
    }

    /**
     * Filter the query on the dias_para_fecha_tope_asamblea column
     *
     * Example usage:
     * <code>
     * $query->filterByDiasParaFechaTopeAsamblea(1234); // WHERE dias_para_fecha_tope_asamblea = 1234
     * $query->filterByDiasParaFechaTopeAsamblea(array(12, 34)); // WHERE dias_para_fecha_tope_asamblea IN (12, 34)
     * $query->filterByDiasParaFechaTopeAsamblea(array('min' => 12)); // WHERE dias_para_fecha_tope_asamblea > 12
     * </code>
     *
     * @param     mixed $diasParaFechaTopeAsamblea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstatutoQuery The current query, for fluid interface
     */
    public function filterByDiasParaFechaTopeAsamblea($diasParaFechaTopeAsamblea = null, $comparison = null)
    {
        if (is_array($diasParaFechaTopeAsamblea)) {
            $useMinMax = false;
            if (isset($diasParaFechaTopeAsamblea['min'])) {
                $this->addUsingAlias(EstatutoPeer::DIAS_PARA_FECHA_TOPE_ASAMBLEA, $diasParaFechaTopeAsamblea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diasParaFechaTopeAsamblea['max'])) {
                $this->addUsingAlias(EstatutoPeer::DIAS_PARA_FECHA_TOPE_ASAMBLEA, $diasParaFechaTopeAsamblea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstatutoPeer::DIAS_PARA_FECHA_TOPE_ASAMBLEA, $diasParaFechaTopeAsamblea, $comparison);
    }

    /**
     * Filter the query on the dias_para_fecha_tope_convocatoria column
     *
     * Example usage:
     * <code>
     * $query->filterByDiasParaFechaTopeConvocatoria(1234); // WHERE dias_para_fecha_tope_convocatoria = 1234
     * $query->filterByDiasParaFechaTopeConvocatoria(array(12, 34)); // WHERE dias_para_fecha_tope_convocatoria IN (12, 34)
     * $query->filterByDiasParaFechaTopeConvocatoria(array('min' => 12)); // WHERE dias_para_fecha_tope_convocatoria > 12
     * </code>
     *
     * @param     mixed $diasParaFechaTopeConvocatoria The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstatutoQuery The current query, for fluid interface
     */
    public function filterByDiasParaFechaTopeConvocatoria($diasParaFechaTopeConvocatoria = null, $comparison = null)
    {
        if (is_array($diasParaFechaTopeConvocatoria)) {
            $useMinMax = false;
            if (isset($diasParaFechaTopeConvocatoria['min'])) {
                $this->addUsingAlias(EstatutoPeer::DIAS_PARA_FECHA_TOPE_CONVOCATORIA, $diasParaFechaTopeConvocatoria['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diasParaFechaTopeConvocatoria['max'])) {
                $this->addUsingAlias(EstatutoPeer::DIAS_PARA_FECHA_TOPE_CONVOCATORIA, $diasParaFechaTopeConvocatoria['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstatutoPeer::DIAS_PARA_FECHA_TOPE_CONVOCATORIA, $diasParaFechaTopeConvocatoria, $comparison);
    }

    /**
     * Filter the query on the dias_para_fecha_tope_nuevo_mandato column
     *
     * Example usage:
     * <code>
     * $query->filterByDiasParaFechaTopeNuevoMandato(1234); // WHERE dias_para_fecha_tope_nuevo_mandato = 1234
     * $query->filterByDiasParaFechaTopeNuevoMandato(array(12, 34)); // WHERE dias_para_fecha_tope_nuevo_mandato IN (12, 34)
     * $query->filterByDiasParaFechaTopeNuevoMandato(array('min' => 12)); // WHERE dias_para_fecha_tope_nuevo_mandato > 12
     * </code>
     *
     * @param     mixed $diasParaFechaTopeNuevoMandato The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstatutoQuery The current query, for fluid interface
     */
    public function filterByDiasParaFechaTopeNuevoMandato($diasParaFechaTopeNuevoMandato = null, $comparison = null)
    {
        if (is_array($diasParaFechaTopeNuevoMandato)) {
            $useMinMax = false;
            if (isset($diasParaFechaTopeNuevoMandato['min'])) {
                $this->addUsingAlias(EstatutoPeer::DIAS_PARA_FECHA_TOPE_NUEVO_MANDATO, $diasParaFechaTopeNuevoMandato['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diasParaFechaTopeNuevoMandato['max'])) {
                $this->addUsingAlias(EstatutoPeer::DIAS_PARA_FECHA_TOPE_NUEVO_MANDATO, $diasParaFechaTopeNuevoMandato['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstatutoPeer::DIAS_PARA_FECHA_TOPE_NUEVO_MANDATO, $diasParaFechaTopeNuevoMandato, $comparison);
    }

    /**
     * Filter the query on the estatuto_pdf column
     *
     * Example usage:
     * <code>
     * $query->filterByEstatutoPdf('fooValue');   // WHERE estatuto_pdf = 'fooValue'
     * $query->filterByEstatutoPdf('%fooValue%'); // WHERE estatuto_pdf LIKE '%fooValue%'
     * </code>
     *
     * @param     string $estatutoPdf The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstatutoQuery The current query, for fluid interface
     */
    public function filterByEstatutoPdf($estatutoPdf = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($estatutoPdf)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $estatutoPdf)) {
                $estatutoPdf = str_replace('*', '%', $estatutoPdf);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EstatutoPeer::ESTATUTO_PDF, $estatutoPdf, $comparison);
    }

    /**
     * Filter the query by a related PersonaJuridica object
     *
     * @param   PersonaJuridica|PropelObjectCollection $personaJuridica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   EstatutoQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPersonaJuridica($personaJuridica, $comparison = null)
    {
        if ($personaJuridica instanceof PersonaJuridica) {
            return $this
                ->addUsingAlias(EstatutoPeer::PERSONA_JURIDICA_ID, $personaJuridica->getIdPersonaJuridica(), $comparison);
        } elseif ($personaJuridica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EstatutoPeer::PERSONA_JURIDICA_ID, $personaJuridica->toKeyValue('PrimaryKey', 'IdPersonaJuridica'), $comparison);
        } else {
            throw new PropelException('filterByPersonaJuridica() only accepts arguments of type PersonaJuridica or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PersonaJuridica relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EstatutoQuery The current query, for fluid interface
     */
    public function joinPersonaJuridica($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PersonaJuridica');

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
            $this->addJoinObject($join, 'PersonaJuridica');
        }

        return $this;
    }

    /**
     * Use the PersonaJuridica relation PersonaJuridica object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PersonaJuridicaQuery A secondary query class using the current class as primary query
     */
    public function usePersonaJuridicaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPersonaJuridica($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PersonaJuridica', 'PersonaJuridicaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Estatuto $estatuto Object to remove from the list of results
     *
     * @return EstatutoQuery The current query, for fluid interface
     */
    public function prune($estatuto = null)
    {
        if ($estatuto) {
            $this->addUsingAlias(EstatutoPeer::ID_ESTATUTO, $estatuto->getIdEstatuto(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseEstatutoQuery