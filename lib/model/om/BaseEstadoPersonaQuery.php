<?php


/**
 * Base class that represents a query for the 'estado_persona' table.
 *
 * 
 *
 * @method     EstadoPersonaQuery orderByIdEstadoPersona($order = Criteria::ASC) Order by the id_estado_persona column
 * @method     EstadoPersonaQuery orderByEstado($order = Criteria::ASC) Order by the estado column
 *
 * @method     EstadoPersonaQuery groupByIdEstadoPersona() Group by the id_estado_persona column
 * @method     EstadoPersonaQuery groupByEstado() Group by the estado column
 *
 * @method     EstadoPersonaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     EstadoPersonaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     EstadoPersonaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     EstadoPersonaQuery leftJoinPersona($relationAlias = null) Adds a LEFT JOIN clause to the query using the Persona relation
 * @method     EstadoPersonaQuery rightJoinPersona($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Persona relation
 * @method     EstadoPersonaQuery innerJoinPersona($relationAlias = null) Adds a INNER JOIN clause to the query using the Persona relation
 *
 * @method     EstadoPersona findOne(PropelPDO $con = null) Return the first EstadoPersona matching the query
 * @method     EstadoPersona findOneOrCreate(PropelPDO $con = null) Return the first EstadoPersona matching the query, or a new EstadoPersona object populated from the query conditions when no match is found
 *
 * @method     EstadoPersona findOneByIdEstadoPersona(int $id_estado_persona) Return the first EstadoPersona filtered by the id_estado_persona column
 * @method     EstadoPersona findOneByEstado(string $estado) Return the first EstadoPersona filtered by the estado column
 *
 * @method     array findByIdEstadoPersona(int $id_estado_persona) Return EstadoPersona objects filtered by the id_estado_persona column
 * @method     array findByEstado(string $estado) Return EstadoPersona objects filtered by the estado column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseEstadoPersonaQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseEstadoPersonaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'EstadoPersona', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EstadoPersonaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     EstadoPersonaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EstadoPersonaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EstadoPersonaQuery) {
            return $criteria;
        }
        $query = new EstadoPersonaQuery();
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
     * @return   EstadoPersona|EstadoPersona[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EstadoPersonaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EstadoPersonaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   EstadoPersona A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_ESTADO_PERSONA`, `ESTADO` FROM `estado_persona` WHERE `ID_ESTADO_PERSONA` = :p0';
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
            $obj = new EstadoPersona();
            $obj->hydrate($row);
            EstadoPersonaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return EstadoPersona|EstadoPersona[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|EstadoPersona[]|mixed the list of results, formatted by the current formatter
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
     * @return EstadoPersonaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EstadoPersonaPeer::ID_ESTADO_PERSONA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EstadoPersonaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EstadoPersonaPeer::ID_ESTADO_PERSONA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_estado_persona column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEstadoPersona(1234); // WHERE id_estado_persona = 1234
     * $query->filterByIdEstadoPersona(array(12, 34)); // WHERE id_estado_persona IN (12, 34)
     * $query->filterByIdEstadoPersona(array('min' => 12)); // WHERE id_estado_persona > 12
     * </code>
     *
     * @param     mixed $idEstadoPersona The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstadoPersonaQuery The current query, for fluid interface
     */
    public function filterByIdEstadoPersona($idEstadoPersona = null, $comparison = null)
    {
        if (is_array($idEstadoPersona) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(EstadoPersonaPeer::ID_ESTADO_PERSONA, $idEstadoPersona, $comparison);
    }

    /**
     * Filter the query on the estado column
     *
     * Example usage:
     * <code>
     * $query->filterByEstado('fooValue');   // WHERE estado = 'fooValue'
     * $query->filterByEstado('%fooValue%'); // WHERE estado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $estado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstadoPersonaQuery The current query, for fluid interface
     */
    public function filterByEstado($estado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($estado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $estado)) {
                $estado = str_replace('*', '%', $estado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EstadoPersonaPeer::ESTADO, $estado, $comparison);
    }

    /**
     * Filter the query by a related Persona object
     *
     * @param   Persona|PropelObjectCollection $persona  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   EstadoPersonaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPersona($persona, $comparison = null)
    {
        if ($persona instanceof Persona) {
            return $this
                ->addUsingAlias(EstadoPersonaPeer::ID_ESTADO_PERSONA, $persona->getEstadoId(), $comparison);
        } elseif ($persona instanceof PropelObjectCollection) {
            return $this
                ->usePersonaQuery()
                ->filterByPrimaryKeys($persona->getPrimaryKeys())
                ->endUse();
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
     * @return EstadoPersonaQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   EstadoPersona $estadoPersona Object to remove from the list of results
     *
     * @return EstadoPersonaQuery The current query, for fluid interface
     */
    public function prune($estadoPersona = null)
    {
        if ($estadoPersona) {
            $this->addUsingAlias(EstadoPersonaPeer::ID_ESTADO_PERSONA, $estadoPersona->getIdEstadoPersona(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseEstadoPersonaQuery