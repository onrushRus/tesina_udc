<?php


/**
 * Base class that represents a query for the 'ejercicio_economico' table.
 *
 * 
 *
 * @method     EjercicioEconomicoQuery orderByIdEjercicioEconomico($order = Criteria::ASC) Order by the id_ejercicio_economico column
 * @method     EjercicioEconomicoQuery orderByPersonaJuridicaId($order = Criteria::ASC) Order by the persona_juridica_id column
 * @method     EjercicioEconomicoQuery orderByNumeroEjercicioEconomico($order = Criteria::ASC) Order by the numero_ejercicio_economico column
 * @method     EjercicioEconomicoQuery orderByFechaFinEjercicioEconomico($order = Criteria::ASC) Order by the fecha_fin_ejercicio_economico column
 *
 * @method     EjercicioEconomicoQuery groupByIdEjercicioEconomico() Group by the id_ejercicio_economico column
 * @method     EjercicioEconomicoQuery groupByPersonaJuridicaId() Group by the persona_juridica_id column
 * @method     EjercicioEconomicoQuery groupByNumeroEjercicioEconomico() Group by the numero_ejercicio_economico column
 * @method     EjercicioEconomicoQuery groupByFechaFinEjercicioEconomico() Group by the fecha_fin_ejercicio_economico column
 *
 * @method     EjercicioEconomicoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     EjercicioEconomicoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     EjercicioEconomicoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     EjercicioEconomicoQuery leftJoinPersonaJuridica($relationAlias = null) Adds a LEFT JOIN clause to the query using the PersonaJuridica relation
 * @method     EjercicioEconomicoQuery rightJoinPersonaJuridica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PersonaJuridica relation
 * @method     EjercicioEconomicoQuery innerJoinPersonaJuridica($relationAlias = null) Adds a INNER JOIN clause to the query using the PersonaJuridica relation
 *
 * @method     EjercicioEconomicoQuery leftJoinAsamblea($relationAlias = null) Adds a LEFT JOIN clause to the query using the Asamblea relation
 * @method     EjercicioEconomicoQuery rightJoinAsamblea($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Asamblea relation
 * @method     EjercicioEconomicoQuery innerJoinAsamblea($relationAlias = null) Adds a INNER JOIN clause to the query using the Asamblea relation
 *
 * @method     EjercicioEconomicoQuery leftJoinPersonaComisionDirectiva($relationAlias = null) Adds a LEFT JOIN clause to the query using the PersonaComisionDirectiva relation
 * @method     EjercicioEconomicoQuery rightJoinPersonaComisionDirectiva($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PersonaComisionDirectiva relation
 * @method     EjercicioEconomicoQuery innerJoinPersonaComisionDirectiva($relationAlias = null) Adds a INNER JOIN clause to the query using the PersonaComisionDirectiva relation
 *
 * @method     EjercicioEconomico findOne(PropelPDO $con = null) Return the first EjercicioEconomico matching the query
 * @method     EjercicioEconomico findOneOrCreate(PropelPDO $con = null) Return the first EjercicioEconomico matching the query, or a new EjercicioEconomico object populated from the query conditions when no match is found
 *
 * @method     EjercicioEconomico findOneByIdEjercicioEconomico(int $id_ejercicio_economico) Return the first EjercicioEconomico filtered by the id_ejercicio_economico column
 * @method     EjercicioEconomico findOneByPersonaJuridicaId(int $persona_juridica_id) Return the first EjercicioEconomico filtered by the persona_juridica_id column
 * @method     EjercicioEconomico findOneByNumeroEjercicioEconomico(int $numero_ejercicio_economico) Return the first EjercicioEconomico filtered by the numero_ejercicio_economico column
 * @method     EjercicioEconomico findOneByFechaFinEjercicioEconomico(string $fecha_fin_ejercicio_economico) Return the first EjercicioEconomico filtered by the fecha_fin_ejercicio_economico column
 *
 * @method     array findByIdEjercicioEconomico(int $id_ejercicio_economico) Return EjercicioEconomico objects filtered by the id_ejercicio_economico column
 * @method     array findByPersonaJuridicaId(int $persona_juridica_id) Return EjercicioEconomico objects filtered by the persona_juridica_id column
 * @method     array findByNumeroEjercicioEconomico(int $numero_ejercicio_economico) Return EjercicioEconomico objects filtered by the numero_ejercicio_economico column
 * @method     array findByFechaFinEjercicioEconomico(string $fecha_fin_ejercicio_economico) Return EjercicioEconomico objects filtered by the fecha_fin_ejercicio_economico column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseEjercicioEconomicoQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseEjercicioEconomicoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'EjercicioEconomico', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EjercicioEconomicoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     EjercicioEconomicoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EjercicioEconomicoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EjercicioEconomicoQuery) {
            return $criteria;
        }
        $query = new EjercicioEconomicoQuery();
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
     * @return   EjercicioEconomico|EjercicioEconomico[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EjercicioEconomicoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EjercicioEconomicoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   EjercicioEconomico A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_EJERCICIO_ECONOMICO`, `PERSONA_JURIDICA_ID`, `NUMERO_EJERCICIO_ECONOMICO`, `FECHA_FIN_EJERCICIO_ECONOMICO` FROM `ejercicio_economico` WHERE `ID_EJERCICIO_ECONOMICO` = :p0';
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
            $obj = new EjercicioEconomico();
            $obj->hydrate($row);
            EjercicioEconomicoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return EjercicioEconomico|EjercicioEconomico[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|EjercicioEconomico[]|mixed the list of results, formatted by the current formatter
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
     * @return EjercicioEconomicoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EjercicioEconomicoPeer::ID_EJERCICIO_ECONOMICO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EjercicioEconomicoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EjercicioEconomicoPeer::ID_EJERCICIO_ECONOMICO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_ejercicio_economico column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEjercicioEconomico(1234); // WHERE id_ejercicio_economico = 1234
     * $query->filterByIdEjercicioEconomico(array(12, 34)); // WHERE id_ejercicio_economico IN (12, 34)
     * $query->filterByIdEjercicioEconomico(array('min' => 12)); // WHERE id_ejercicio_economico > 12
     * </code>
     *
     * @param     mixed $idEjercicioEconomico The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EjercicioEconomicoQuery The current query, for fluid interface
     */
    public function filterByIdEjercicioEconomico($idEjercicioEconomico = null, $comparison = null)
    {
        if (is_array($idEjercicioEconomico) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(EjercicioEconomicoPeer::ID_EJERCICIO_ECONOMICO, $idEjercicioEconomico, $comparison);
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
     * @return EjercicioEconomicoQuery The current query, for fluid interface
     */
    public function filterByPersonaJuridicaId($personaJuridicaId = null, $comparison = null)
    {
        if (is_array($personaJuridicaId)) {
            $useMinMax = false;
            if (isset($personaJuridicaId['min'])) {
                $this->addUsingAlias(EjercicioEconomicoPeer::PERSONA_JURIDICA_ID, $personaJuridicaId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($personaJuridicaId['max'])) {
                $this->addUsingAlias(EjercicioEconomicoPeer::PERSONA_JURIDICA_ID, $personaJuridicaId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EjercicioEconomicoPeer::PERSONA_JURIDICA_ID, $personaJuridicaId, $comparison);
    }

    /**
     * Filter the query on the numero_ejercicio_economico column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroEjercicioEconomico(1234); // WHERE numero_ejercicio_economico = 1234
     * $query->filterByNumeroEjercicioEconomico(array(12, 34)); // WHERE numero_ejercicio_economico IN (12, 34)
     * $query->filterByNumeroEjercicioEconomico(array('min' => 12)); // WHERE numero_ejercicio_economico > 12
     * </code>
     *
     * @param     mixed $numeroEjercicioEconomico The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EjercicioEconomicoQuery The current query, for fluid interface
     */
    public function filterByNumeroEjercicioEconomico($numeroEjercicioEconomico = null, $comparison = null)
    {
        if (is_array($numeroEjercicioEconomico)) {
            $useMinMax = false;
            if (isset($numeroEjercicioEconomico['min'])) {
                $this->addUsingAlias(EjercicioEconomicoPeer::NUMERO_EJERCICIO_ECONOMICO, $numeroEjercicioEconomico['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numeroEjercicioEconomico['max'])) {
                $this->addUsingAlias(EjercicioEconomicoPeer::NUMERO_EJERCICIO_ECONOMICO, $numeroEjercicioEconomico['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EjercicioEconomicoPeer::NUMERO_EJERCICIO_ECONOMICO, $numeroEjercicioEconomico, $comparison);
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
     * @return EjercicioEconomicoQuery The current query, for fluid interface
     */
    public function filterByFechaFinEjercicioEconomico($fechaFinEjercicioEconomico = null, $comparison = null)
    {
        if (is_array($fechaFinEjercicioEconomico)) {
            $useMinMax = false;
            if (isset($fechaFinEjercicioEconomico['min'])) {
                $this->addUsingAlias(EjercicioEconomicoPeer::FECHA_FIN_EJERCICIO_ECONOMICO, $fechaFinEjercicioEconomico['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fechaFinEjercicioEconomico['max'])) {
                $this->addUsingAlias(EjercicioEconomicoPeer::FECHA_FIN_EJERCICIO_ECONOMICO, $fechaFinEjercicioEconomico['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EjercicioEconomicoPeer::FECHA_FIN_EJERCICIO_ECONOMICO, $fechaFinEjercicioEconomico, $comparison);
    }

    /**
     * Filter the query by a related PersonaJuridica object
     *
     * @param   PersonaJuridica|PropelObjectCollection $personaJuridica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   EjercicioEconomicoQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPersonaJuridica($personaJuridica, $comparison = null)
    {
        if ($personaJuridica instanceof PersonaJuridica) {
            return $this
                ->addUsingAlias(EjercicioEconomicoPeer::PERSONA_JURIDICA_ID, $personaJuridica->getIdPersonaJuridica(), $comparison);
        } elseif ($personaJuridica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EjercicioEconomicoPeer::PERSONA_JURIDICA_ID, $personaJuridica->toKeyValue('PrimaryKey', 'IdPersonaJuridica'), $comparison);
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
     * @return EjercicioEconomicoQuery The current query, for fluid interface
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
     * Filter the query by a related Asamblea object
     *
     * @param   Asamblea|PropelObjectCollection $asamblea  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   EjercicioEconomicoQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByAsamblea($asamblea, $comparison = null)
    {
        if ($asamblea instanceof Asamblea) {
            return $this
                ->addUsingAlias(EjercicioEconomicoPeer::ID_EJERCICIO_ECONOMICO, $asamblea->getEjercicioEconomicoId(), $comparison);
        } elseif ($asamblea instanceof PropelObjectCollection) {
            return $this
                ->useAsambleaQuery()
                ->filterByPrimaryKeys($asamblea->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAsamblea() only accepts arguments of type Asamblea or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Asamblea relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EjercicioEconomicoQuery The current query, for fluid interface
     */
    public function joinAsamblea($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Asamblea');

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
            $this->addJoinObject($join, 'Asamblea');
        }

        return $this;
    }

    /**
     * Use the Asamblea relation Asamblea object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AsambleaQuery A secondary query class using the current class as primary query
     */
    public function useAsambleaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAsamblea($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Asamblea', 'AsambleaQuery');
    }

    /**
     * Filter the query by a related PersonaComisionDirectiva object
     *
     * @param   PersonaComisionDirectiva|PropelObjectCollection $personaComisionDirectiva  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   EjercicioEconomicoQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPersonaComisionDirectiva($personaComisionDirectiva, $comparison = null)
    {
        if ($personaComisionDirectiva instanceof PersonaComisionDirectiva) {
            return $this
                ->addUsingAlias(EjercicioEconomicoPeer::ID_EJERCICIO_ECONOMICO, $personaComisionDirectiva->getEjercicioEconomicoId(), $comparison);
        } elseif ($personaComisionDirectiva instanceof PropelObjectCollection) {
            return $this
                ->usePersonaComisionDirectivaQuery()
                ->filterByPrimaryKeys($personaComisionDirectiva->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPersonaComisionDirectiva() only accepts arguments of type PersonaComisionDirectiva or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PersonaComisionDirectiva relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EjercicioEconomicoQuery The current query, for fluid interface
     */
    public function joinPersonaComisionDirectiva($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PersonaComisionDirectiva');

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
            $this->addJoinObject($join, 'PersonaComisionDirectiva');
        }

        return $this;
    }

    /**
     * Use the PersonaComisionDirectiva relation PersonaComisionDirectiva object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PersonaComisionDirectivaQuery A secondary query class using the current class as primary query
     */
    public function usePersonaComisionDirectivaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPersonaComisionDirectiva($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PersonaComisionDirectiva', 'PersonaComisionDirectivaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   EjercicioEconomico $ejercicioEconomico Object to remove from the list of results
     *
     * @return EjercicioEconomicoQuery The current query, for fluid interface
     */
    public function prune($ejercicioEconomico = null)
    {
        if ($ejercicioEconomico) {
            $this->addUsingAlias(EjercicioEconomicoPeer::ID_EJERCICIO_ECONOMICO, $ejercicioEconomico->getIdEjercicioEconomico(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseEjercicioEconomicoQuery