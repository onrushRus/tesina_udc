<?php


/**
 * Base class that represents a query for the 'actividad' table.
 *
 * 
 *
 * @method     ActividadQuery orderByIdActividad($order = Criteria::ASC) Order by the id_actividad column
 * @method     ActividadQuery orderByActividad($order = Criteria::ASC) Order by the actividad column
 *
 * @method     ActividadQuery groupByIdActividad() Group by the id_actividad column
 * @method     ActividadQuery groupByActividad() Group by the actividad column
 *
 * @method     ActividadQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ActividadQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ActividadQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ActividadQuery leftJoinActividadPersJuridica($relationAlias = null) Adds a LEFT JOIN clause to the query using the ActividadPersJuridica relation
 * @method     ActividadQuery rightJoinActividadPersJuridica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ActividadPersJuridica relation
 * @method     ActividadQuery innerJoinActividadPersJuridica($relationAlias = null) Adds a INNER JOIN clause to the query using the ActividadPersJuridica relation
 *
 * @method     Actividad findOne(PropelPDO $con = null) Return the first Actividad matching the query
 * @method     Actividad findOneOrCreate(PropelPDO $con = null) Return the first Actividad matching the query, or a new Actividad object populated from the query conditions when no match is found
 *
 * @method     Actividad findOneByIdActividad(int $id_actividad) Return the first Actividad filtered by the id_actividad column
 * @method     Actividad findOneByActividad(string $actividad) Return the first Actividad filtered by the actividad column
 *
 * @method     array findByIdActividad(int $id_actividad) Return Actividad objects filtered by the id_actividad column
 * @method     array findByActividad(string $actividad) Return Actividad objects filtered by the actividad column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseActividadQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseActividadQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Actividad', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ActividadQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     ActividadQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ActividadQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ActividadQuery) {
            return $criteria;
        }
        $query = new ActividadQuery();
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
     * @return   Actividad|Actividad[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ActividadPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ActividadPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Actividad A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_ACTIVIDAD`, `ACTIVIDAD` FROM `actividad` WHERE `ID_ACTIVIDAD` = :p0';
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
            $obj = new Actividad();
            $obj->hydrate($row);
            ActividadPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Actividad|Actividad[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Actividad[]|mixed the list of results, formatted by the current formatter
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
     * @return ActividadQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ActividadPeer::ID_ACTIVIDAD, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ActividadQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ActividadPeer::ID_ACTIVIDAD, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_actividad column
     *
     * Example usage:
     * <code>
     * $query->filterByIdActividad(1234); // WHERE id_actividad = 1234
     * $query->filterByIdActividad(array(12, 34)); // WHERE id_actividad IN (12, 34)
     * $query->filterByIdActividad(array('min' => 12)); // WHERE id_actividad > 12
     * </code>
     *
     * @param     mixed $idActividad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ActividadQuery The current query, for fluid interface
     */
    public function filterByIdActividad($idActividad = null, $comparison = null)
    {
        if (is_array($idActividad) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(ActividadPeer::ID_ACTIVIDAD, $idActividad, $comparison);
    }

    /**
     * Filter the query on the actividad column
     *
     * Example usage:
     * <code>
     * $query->filterByActividad('fooValue');   // WHERE actividad = 'fooValue'
     * $query->filterByActividad('%fooValue%'); // WHERE actividad LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actividad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ActividadQuery The current query, for fluid interface
     */
    public function filterByActividad($actividad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($actividad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $actividad)) {
                $actividad = str_replace('*', '%', $actividad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ActividadPeer::ACTIVIDAD, $actividad, $comparison);
    }

    /**
     * Filter the query by a related ActividadPersJuridica object
     *
     * @param   ActividadPersJuridica|PropelObjectCollection $actividadPersJuridica  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   ActividadQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByActividadPersJuridica($actividadPersJuridica, $comparison = null)
    {
        if ($actividadPersJuridica instanceof ActividadPersJuridica) {
            return $this
                ->addUsingAlias(ActividadPeer::ID_ACTIVIDAD, $actividadPersJuridica->getActividadId(), $comparison);
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
     * @return ActividadQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   Actividad $actividad Object to remove from the list of results
     *
     * @return ActividadQuery The current query, for fluid interface
     */
    public function prune($actividad = null)
    {
        if ($actividad) {
            $this->addUsingAlias(ActividadPeer::ID_ACTIVIDAD, $actividad->getIdActividad(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseActividadQuery