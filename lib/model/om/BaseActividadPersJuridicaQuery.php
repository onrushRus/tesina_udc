<?php


/**
 * Base class that represents a query for the 'actividad_pers_juridica' table.
 *
 * 
 *
 * @method     ActividadPersJuridicaQuery orderByActividadId($order = Criteria::ASC) Order by the actividad_id column
 * @method     ActividadPersJuridicaQuery orderByPersonaJuridicaId($order = Criteria::ASC) Order by the persona_juridica_id column
 *
 * @method     ActividadPersJuridicaQuery groupByActividadId() Group by the actividad_id column
 * @method     ActividadPersJuridicaQuery groupByPersonaJuridicaId() Group by the persona_juridica_id column
 *
 * @method     ActividadPersJuridicaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ActividadPersJuridicaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ActividadPersJuridicaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ActividadPersJuridicaQuery leftJoinActividad($relationAlias = null) Adds a LEFT JOIN clause to the query using the Actividad relation
 * @method     ActividadPersJuridicaQuery rightJoinActividad($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Actividad relation
 * @method     ActividadPersJuridicaQuery innerJoinActividad($relationAlias = null) Adds a INNER JOIN clause to the query using the Actividad relation
 *
 * @method     ActividadPersJuridicaQuery leftJoinPersonaJuridica($relationAlias = null) Adds a LEFT JOIN clause to the query using the PersonaJuridica relation
 * @method     ActividadPersJuridicaQuery rightJoinPersonaJuridica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PersonaJuridica relation
 * @method     ActividadPersJuridicaQuery innerJoinPersonaJuridica($relationAlias = null) Adds a INNER JOIN clause to the query using the PersonaJuridica relation
 *
 * @method     ActividadPersJuridica findOne(PropelPDO $con = null) Return the first ActividadPersJuridica matching the query
 * @method     ActividadPersJuridica findOneOrCreate(PropelPDO $con = null) Return the first ActividadPersJuridica matching the query, or a new ActividadPersJuridica object populated from the query conditions when no match is found
 *
 * @method     ActividadPersJuridica findOneByActividadId(int $actividad_id) Return the first ActividadPersJuridica filtered by the actividad_id column
 * @method     ActividadPersJuridica findOneByPersonaJuridicaId(int $persona_juridica_id) Return the first ActividadPersJuridica filtered by the persona_juridica_id column
 *
 * @method     array findByActividadId(int $actividad_id) Return ActividadPersJuridica objects filtered by the actividad_id column
 * @method     array findByPersonaJuridicaId(int $persona_juridica_id) Return ActividadPersJuridica objects filtered by the persona_juridica_id column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseActividadPersJuridicaQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseActividadPersJuridicaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'ActividadPersJuridica', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ActividadPersJuridicaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     ActividadPersJuridicaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ActividadPersJuridicaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ActividadPersJuridicaQuery) {
            return $criteria;
        }
        $query = new ActividadPersJuridicaQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$actividad_id, $persona_juridica_id]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   ActividadPersJuridica|ActividadPersJuridica[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ActividadPersJuridicaPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ActividadPersJuridicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   ActividadPersJuridica A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ACTIVIDAD_ID`, `PERSONA_JURIDICA_ID` FROM `actividad_pers_juridica` WHERE `ACTIVIDAD_ID` = :p0 AND `PERSONA_JURIDICA_ID` = :p1';
        try {
            $stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
			$stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new ActividadPersJuridica();
            $obj->hydrate($row);
            ActividadPersJuridicaPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return ActividadPersJuridica|ActividadPersJuridica[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|ActividadPersJuridica[]|mixed the list of results, formatted by the current formatter
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
     * @return ActividadPersJuridicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ActividadPersJuridicaPeer::ACTIVIDAD_ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ActividadPersJuridicaPeer::PERSONA_JURIDICA_ID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ActividadPersJuridicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ActividadPersJuridicaPeer::ACTIVIDAD_ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ActividadPersJuridicaPeer::PERSONA_JURIDICA_ID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the actividad_id column
     *
     * Example usage:
     * <code>
     * $query->filterByActividadId(1234); // WHERE actividad_id = 1234
     * $query->filterByActividadId(array(12, 34)); // WHERE actividad_id IN (12, 34)
     * $query->filterByActividadId(array('min' => 12)); // WHERE actividad_id > 12
     * </code>
     *
     * @see       filterByActividad()
     *
     * @param     mixed $actividadId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ActividadPersJuridicaQuery The current query, for fluid interface
     */
    public function filterByActividadId($actividadId = null, $comparison = null)
    {
        if (is_array($actividadId) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(ActividadPersJuridicaPeer::ACTIVIDAD_ID, $actividadId, $comparison);
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
     * @return ActividadPersJuridicaQuery The current query, for fluid interface
     */
    public function filterByPersonaJuridicaId($personaJuridicaId = null, $comparison = null)
    {
        if (is_array($personaJuridicaId) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(ActividadPersJuridicaPeer::PERSONA_JURIDICA_ID, $personaJuridicaId, $comparison);
    }

    /**
     * Filter the query by a related Actividad object
     *
     * @param   Actividad|PropelObjectCollection $actividad The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   ActividadPersJuridicaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByActividad($actividad, $comparison = null)
    {
        if ($actividad instanceof Actividad) {
            return $this
                ->addUsingAlias(ActividadPersJuridicaPeer::ACTIVIDAD_ID, $actividad->getIdActividad(), $comparison);
        } elseif ($actividad instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ActividadPersJuridicaPeer::ACTIVIDAD_ID, $actividad->toKeyValue('PrimaryKey', 'IdActividad'), $comparison);
        } else {
            throw new PropelException('filterByActividad() only accepts arguments of type Actividad or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Actividad relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ActividadPersJuridicaQuery The current query, for fluid interface
     */
    public function joinActividad($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Actividad');

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
            $this->addJoinObject($join, 'Actividad');
        }

        return $this;
    }

    /**
     * Use the Actividad relation Actividad object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ActividadQuery A secondary query class using the current class as primary query
     */
    public function useActividadQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinActividad($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Actividad', 'ActividadQuery');
    }

    /**
     * Filter the query by a related PersonaJuridica object
     *
     * @param   PersonaJuridica|PropelObjectCollection $personaJuridica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   ActividadPersJuridicaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPersonaJuridica($personaJuridica, $comparison = null)
    {
        if ($personaJuridica instanceof PersonaJuridica) {
            return $this
                ->addUsingAlias(ActividadPersJuridicaPeer::PERSONA_JURIDICA_ID, $personaJuridica->getIdPersonaJuridica(), $comparison);
        } elseif ($personaJuridica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ActividadPersJuridicaPeer::PERSONA_JURIDICA_ID, $personaJuridica->toKeyValue('PrimaryKey', 'IdPersonaJuridica'), $comparison);
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
     * @return ActividadPersJuridicaQuery The current query, for fluid interface
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
     * @param   ActividadPersJuridica $actividadPersJuridica Object to remove from the list of results
     *
     * @return ActividadPersJuridicaQuery The current query, for fluid interface
     */
    public function prune($actividadPersJuridica = null)
    {
        if ($actividadPersJuridica) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ActividadPersJuridicaPeer::ACTIVIDAD_ID), $actividadPersJuridica->getActividadId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ActividadPersJuridicaPeer::PERSONA_JURIDICA_ID), $actividadPersJuridica->getPersonaJuridicaId(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

} // BaseActividadPersJuridicaQuery