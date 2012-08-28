<?php


/**
 * Base class that represents a query for the 'situacion_persona_juridica' table.
 *
 * 
 *
 * @method     SituacionPersonaJuridicaQuery orderByIdSituacionPersJuridica($order = Criteria::ASC) Order by the id_situacion_pers_juridica column
 * @method     SituacionPersonaJuridicaQuery orderBySituacion($order = Criteria::ASC) Order by the situacion column
 *
 * @method     SituacionPersonaJuridicaQuery groupByIdSituacionPersJuridica() Group by the id_situacion_pers_juridica column
 * @method     SituacionPersonaJuridicaQuery groupBySituacion() Group by the situacion column
 *
 * @method     SituacionPersonaJuridicaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SituacionPersonaJuridicaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SituacionPersonaJuridicaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SituacionPersonaJuridicaQuery leftJoinPersonaJuridica($relationAlias = null) Adds a LEFT JOIN clause to the query using the PersonaJuridica relation
 * @method     SituacionPersonaJuridicaQuery rightJoinPersonaJuridica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PersonaJuridica relation
 * @method     SituacionPersonaJuridicaQuery innerJoinPersonaJuridica($relationAlias = null) Adds a INNER JOIN clause to the query using the PersonaJuridica relation
 *
 * @method     SituacionPersonaJuridica findOne(PropelPDO $con = null) Return the first SituacionPersonaJuridica matching the query
 * @method     SituacionPersonaJuridica findOneOrCreate(PropelPDO $con = null) Return the first SituacionPersonaJuridica matching the query, or a new SituacionPersonaJuridica object populated from the query conditions when no match is found
 *
 * @method     SituacionPersonaJuridica findOneByIdSituacionPersJuridica(int $id_situacion_pers_juridica) Return the first SituacionPersonaJuridica filtered by the id_situacion_pers_juridica column
 * @method     SituacionPersonaJuridica findOneBySituacion(string $situacion) Return the first SituacionPersonaJuridica filtered by the situacion column
 *
 * @method     array findByIdSituacionPersJuridica(int $id_situacion_pers_juridica) Return SituacionPersonaJuridica objects filtered by the id_situacion_pers_juridica column
 * @method     array findBySituacion(string $situacion) Return SituacionPersonaJuridica objects filtered by the situacion column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseSituacionPersonaJuridicaQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseSituacionPersonaJuridicaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'SituacionPersonaJuridica', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SituacionPersonaJuridicaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     SituacionPersonaJuridicaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SituacionPersonaJuridicaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SituacionPersonaJuridicaQuery) {
            return $criteria;
        }
        $query = new SituacionPersonaJuridicaQuery();
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
     * @return   SituacionPersonaJuridica|SituacionPersonaJuridica[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SituacionPersonaJuridicaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SituacionPersonaJuridicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   SituacionPersonaJuridica A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_SITUACION_PERS_JURIDICA`, `SITUACION` FROM `situacion_persona_juridica` WHERE `ID_SITUACION_PERS_JURIDICA` = :p0';
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
            $obj = new SituacionPersonaJuridica();
            $obj->hydrate($row);
            SituacionPersonaJuridicaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return SituacionPersonaJuridica|SituacionPersonaJuridica[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|SituacionPersonaJuridica[]|mixed the list of results, formatted by the current formatter
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
     * @return SituacionPersonaJuridicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SituacionPersonaJuridicaPeer::ID_SITUACION_PERS_JURIDICA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SituacionPersonaJuridicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SituacionPersonaJuridicaPeer::ID_SITUACION_PERS_JURIDICA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_situacion_pers_juridica column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSituacionPersJuridica(1234); // WHERE id_situacion_pers_juridica = 1234
     * $query->filterByIdSituacionPersJuridica(array(12, 34)); // WHERE id_situacion_pers_juridica IN (12, 34)
     * $query->filterByIdSituacionPersJuridica(array('min' => 12)); // WHERE id_situacion_pers_juridica > 12
     * </code>
     *
     * @param     mixed $idSituacionPersJuridica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SituacionPersonaJuridicaQuery The current query, for fluid interface
     */
    public function filterByIdSituacionPersJuridica($idSituacionPersJuridica = null, $comparison = null)
    {
        if (is_array($idSituacionPersJuridica) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(SituacionPersonaJuridicaPeer::ID_SITUACION_PERS_JURIDICA, $idSituacionPersJuridica, $comparison);
    }

    /**
     * Filter the query on the situacion column
     *
     * Example usage:
     * <code>
     * $query->filterBySituacion('fooValue');   // WHERE situacion = 'fooValue'
     * $query->filterBySituacion('%fooValue%'); // WHERE situacion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $situacion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SituacionPersonaJuridicaQuery The current query, for fluid interface
     */
    public function filterBySituacion($situacion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($situacion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $situacion)) {
                $situacion = str_replace('*', '%', $situacion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SituacionPersonaJuridicaPeer::SITUACION, $situacion, $comparison);
    }

    /**
     * Filter the query by a related PersonaJuridica object
     *
     * @param   PersonaJuridica|PropelObjectCollection $personaJuridica  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   SituacionPersonaJuridicaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPersonaJuridica($personaJuridica, $comparison = null)
    {
        if ($personaJuridica instanceof PersonaJuridica) {
            return $this
                ->addUsingAlias(SituacionPersonaJuridicaPeer::ID_SITUACION_PERS_JURIDICA, $personaJuridica->getSituacionId(), $comparison);
        } elseif ($personaJuridica instanceof PropelObjectCollection) {
            return $this
                ->usePersonaJuridicaQuery()
                ->filterByPrimaryKeys($personaJuridica->getPrimaryKeys())
                ->endUse();
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
     * @return SituacionPersonaJuridicaQuery The current query, for fluid interface
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
     * @param   SituacionPersonaJuridica $situacionPersonaJuridica Object to remove from the list of results
     *
     * @return SituacionPersonaJuridicaQuery The current query, for fluid interface
     */
    public function prune($situacionPersonaJuridica = null)
    {
        if ($situacionPersonaJuridica) {
            $this->addUsingAlias(SituacionPersonaJuridicaPeer::ID_SITUACION_PERS_JURIDICA, $situacionPersonaJuridica->getIdSituacionPersJuridica(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseSituacionPersonaJuridicaQuery