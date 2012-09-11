<?php


/**
 * Base class that represents a query for the 'estatuto' table.
 *
 * 
 *
 * @method     EstatutoQuery orderByIdEstatuto($order = Criteria::ASC) Order by the id_estatuto column
 * @method     EstatutoQuery orderByPersonaJuridicaId($order = Criteria::ASC) Order by the persona_juridica_id column
 * @method     EstatutoQuery orderByFechaInicioEjercicioEconomico($order = Criteria::ASC) Order by the fecha_inicio_ejercicio_economico column
 * @method     EstatutoQuery orderByFechaFinEjercicioEconomico($order = Criteria::ASC) Order by the fecha_fin_ejercicio_economico column
 * @method     EstatutoQuery orderByDiasParaAsamblea($order = Criteria::ASC) Order by the dias_para_asamblea column
 * @method     EstatutoQuery orderByMesesParaFinEjercicioEconomico($order = Criteria::ASC) Order by the meses_para_fin_ejercicio_economico column
 *
 * @method     EstatutoQuery groupByIdEstatuto() Group by the id_estatuto column
 * @method     EstatutoQuery groupByPersonaJuridicaId() Group by the persona_juridica_id column
 * @method     EstatutoQuery groupByFechaInicioEjercicioEconomico() Group by the fecha_inicio_ejercicio_economico column
 * @method     EstatutoQuery groupByFechaFinEjercicioEconomico() Group by the fecha_fin_ejercicio_economico column
 * @method     EstatutoQuery groupByDiasParaAsamblea() Group by the dias_para_asamblea column
 * @method     EstatutoQuery groupByMesesParaFinEjercicioEconomico() Group by the meses_para_fin_ejercicio_economico column
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
 * @method     Estatuto findOneByFechaInicioEjercicioEconomico(string $fecha_inicio_ejercicio_economico) Return the first Estatuto filtered by the fecha_inicio_ejercicio_economico column
 * @method     Estatuto findOneByFechaFinEjercicioEconomico(string $fecha_fin_ejercicio_economico) Return the first Estatuto filtered by the fecha_fin_ejercicio_economico column
 * @method     Estatuto findOneByDiasParaAsamblea(int $dias_para_asamblea) Return the first Estatuto filtered by the dias_para_asamblea column
 * @method     Estatuto findOneByMesesParaFinEjercicioEconomico(int $meses_para_fin_ejercicio_economico) Return the first Estatuto filtered by the meses_para_fin_ejercicio_economico column
 *
 * @method     array findByIdEstatuto(int $id_estatuto) Return Estatuto objects filtered by the id_estatuto column
 * @method     array findByPersonaJuridicaId(int $persona_juridica_id) Return Estatuto objects filtered by the persona_juridica_id column
 * @method     array findByFechaInicioEjercicioEconomico(string $fecha_inicio_ejercicio_economico) Return Estatuto objects filtered by the fecha_inicio_ejercicio_economico column
 * @method     array findByFechaFinEjercicioEconomico(string $fecha_fin_ejercicio_economico) Return Estatuto objects filtered by the fecha_fin_ejercicio_economico column
 * @method     array findByDiasParaAsamblea(int $dias_para_asamblea) Return Estatuto objects filtered by the dias_para_asamblea column
 * @method     array findByMesesParaFinEjercicioEconomico(int $meses_para_fin_ejercicio_economico) Return Estatuto objects filtered by the meses_para_fin_ejercicio_economico column
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
        $sql = 'SELECT `ID_ESTATUTO`, `PERSONA_JURIDICA_ID`, `FECHA_INICIO_EJERCICIO_ECONOMICO`, `FECHA_FIN_EJERCICIO_ECONOMICO`, `DIAS_PARA_ASAMBLEA`, `MESES_PARA_FIN_EJERCICIO_ECONOMICO` FROM `estatuto` WHERE `ID_ESTATUTO` = :p0';
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
     * Filter the query on the fecha_inicio_ejercicio_economico column
     *
     * Example usage:
     * <code>
     * $query->filterByFechaInicioEjercicioEconomico('2011-03-14'); // WHERE fecha_inicio_ejercicio_economico = '2011-03-14'
     * $query->filterByFechaInicioEjercicioEconomico('now'); // WHERE fecha_inicio_ejercicio_economico = '2011-03-14'
     * $query->filterByFechaInicioEjercicioEconomico(array('max' => 'yesterday')); // WHERE fecha_inicio_ejercicio_economico > '2011-03-13'
     * </code>
     *
     * @param     mixed $fechaInicioEjercicioEconomico The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstatutoQuery The current query, for fluid interface
     */
    public function filterByFechaInicioEjercicioEconomico($fechaInicioEjercicioEconomico = null, $comparison = null)
    {
        if (is_array($fechaInicioEjercicioEconomico)) {
            $useMinMax = false;
            if (isset($fechaInicioEjercicioEconomico['min'])) {
                $this->addUsingAlias(EstatutoPeer::FECHA_INICIO_EJERCICIO_ECONOMICO, $fechaInicioEjercicioEconomico['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fechaInicioEjercicioEconomico['max'])) {
                $this->addUsingAlias(EstatutoPeer::FECHA_INICIO_EJERCICIO_ECONOMICO, $fechaInicioEjercicioEconomico['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstatutoPeer::FECHA_INICIO_EJERCICIO_ECONOMICO, $fechaInicioEjercicioEconomico, $comparison);
    }

    /**
     * Filter the query on the fecha_fin_ejercicio_economico column
     *
     * Example usage:
     * <code>
     * $query->filterByFechaFinEjercicioEconomico('2011-03-14'); // WHERE fecha_fin_ejercicio_economico = '2011-03-14'
     * $query->filterByFechaFinEjercicioEconomico('now'); // WHERE fecha_fin_ejercicio_economico = '2011-03-14'
     * $query->filterByFechaFinEjercicioEconomico(array('max' => 'yesterday')); // WHERE fecha_fin_ejercicio_economico > '2011-03-13'
     * </code>
     *
     * @param     mixed $fechaFinEjercicioEconomico The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstatutoQuery The current query, for fluid interface
     */
    public function filterByFechaFinEjercicioEconomico($fechaFinEjercicioEconomico = null, $comparison = null)
    {
        if (is_array($fechaFinEjercicioEconomico)) {
            $useMinMax = false;
            if (isset($fechaFinEjercicioEconomico['min'])) {
                $this->addUsingAlias(EstatutoPeer::FECHA_FIN_EJERCICIO_ECONOMICO, $fechaFinEjercicioEconomico['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fechaFinEjercicioEconomico['max'])) {
                $this->addUsingAlias(EstatutoPeer::FECHA_FIN_EJERCICIO_ECONOMICO, $fechaFinEjercicioEconomico['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstatutoPeer::FECHA_FIN_EJERCICIO_ECONOMICO, $fechaFinEjercicioEconomico, $comparison);
    }

    /**
     * Filter the query on the dias_para_asamblea column
     *
     * Example usage:
     * <code>
     * $query->filterByDiasParaAsamblea(1234); // WHERE dias_para_asamblea = 1234
     * $query->filterByDiasParaAsamblea(array(12, 34)); // WHERE dias_para_asamblea IN (12, 34)
     * $query->filterByDiasParaAsamblea(array('min' => 12)); // WHERE dias_para_asamblea > 12
     * </code>
     *
     * @param     mixed $diasParaAsamblea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstatutoQuery The current query, for fluid interface
     */
    public function filterByDiasParaAsamblea($diasParaAsamblea = null, $comparison = null)
    {
        if (is_array($diasParaAsamblea)) {
            $useMinMax = false;
            if (isset($diasParaAsamblea['min'])) {
                $this->addUsingAlias(EstatutoPeer::DIAS_PARA_ASAMBLEA, $diasParaAsamblea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diasParaAsamblea['max'])) {
                $this->addUsingAlias(EstatutoPeer::DIAS_PARA_ASAMBLEA, $diasParaAsamblea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstatutoPeer::DIAS_PARA_ASAMBLEA, $diasParaAsamblea, $comparison);
    }

    /**
     * Filter the query on the meses_para_fin_ejercicio_economico column
     *
     * Example usage:
     * <code>
     * $query->filterByMesesParaFinEjercicioEconomico(1234); // WHERE meses_para_fin_ejercicio_economico = 1234
     * $query->filterByMesesParaFinEjercicioEconomico(array(12, 34)); // WHERE meses_para_fin_ejercicio_economico IN (12, 34)
     * $query->filterByMesesParaFinEjercicioEconomico(array('min' => 12)); // WHERE meses_para_fin_ejercicio_economico > 12
     * </code>
     *
     * @param     mixed $mesesParaFinEjercicioEconomico The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstatutoQuery The current query, for fluid interface
     */
    public function filterByMesesParaFinEjercicioEconomico($mesesParaFinEjercicioEconomico = null, $comparison = null)
    {
        if (is_array($mesesParaFinEjercicioEconomico)) {
            $useMinMax = false;
            if (isset($mesesParaFinEjercicioEconomico['min'])) {
                $this->addUsingAlias(EstatutoPeer::MESES_PARA_FIN_EJERCICIO_ECONOMICO, $mesesParaFinEjercicioEconomico['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mesesParaFinEjercicioEconomico['max'])) {
                $this->addUsingAlias(EstatutoPeer::MESES_PARA_FIN_EJERCICIO_ECONOMICO, $mesesParaFinEjercicioEconomico['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstatutoPeer::MESES_PARA_FIN_EJERCICIO_ECONOMICO, $mesesParaFinEjercicioEconomico, $comparison);
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