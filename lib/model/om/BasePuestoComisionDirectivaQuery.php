<?php


/**
 * Base class that represents a query for the 'puesto_comision_directiva' table.
 *
 * 
 *
 * @method     PuestoComisionDirectivaQuery orderByIdPuestoComisionDirectiva($order = Criteria::ASC) Order by the id_puesto_comision_directiva column
 * @method     PuestoComisionDirectivaQuery orderByPuesto($order = Criteria::ASC) Order by the puesto column
 *
 * @method     PuestoComisionDirectivaQuery groupByIdPuestoComisionDirectiva() Group by the id_puesto_comision_directiva column
 * @method     PuestoComisionDirectivaQuery groupByPuesto() Group by the puesto column
 *
 * @method     PuestoComisionDirectivaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PuestoComisionDirectivaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PuestoComisionDirectivaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PuestoComisionDirectivaQuery leftJoinPersonaComisionDirectiva($relationAlias = null) Adds a LEFT JOIN clause to the query using the PersonaComisionDirectiva relation
 * @method     PuestoComisionDirectivaQuery rightJoinPersonaComisionDirectiva($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PersonaComisionDirectiva relation
 * @method     PuestoComisionDirectivaQuery innerJoinPersonaComisionDirectiva($relationAlias = null) Adds a INNER JOIN clause to the query using the PersonaComisionDirectiva relation
 *
 * @method     PuestoComisionDirectiva findOne(PropelPDO $con = null) Return the first PuestoComisionDirectiva matching the query
 * @method     PuestoComisionDirectiva findOneOrCreate(PropelPDO $con = null) Return the first PuestoComisionDirectiva matching the query, or a new PuestoComisionDirectiva object populated from the query conditions when no match is found
 *
 * @method     PuestoComisionDirectiva findOneByIdPuestoComisionDirectiva(int $id_puesto_comision_directiva) Return the first PuestoComisionDirectiva filtered by the id_puesto_comision_directiva column
 * @method     PuestoComisionDirectiva findOneByPuesto(string $puesto) Return the first PuestoComisionDirectiva filtered by the puesto column
 *
 * @method     array findByIdPuestoComisionDirectiva(int $id_puesto_comision_directiva) Return PuestoComisionDirectiva objects filtered by the id_puesto_comision_directiva column
 * @method     array findByPuesto(string $puesto) Return PuestoComisionDirectiva objects filtered by the puesto column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePuestoComisionDirectivaQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BasePuestoComisionDirectivaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'PuestoComisionDirectiva', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PuestoComisionDirectivaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     PuestoComisionDirectivaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PuestoComisionDirectivaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PuestoComisionDirectivaQuery) {
            return $criteria;
        }
        $query = new PuestoComisionDirectivaQuery();
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
     * @return   PuestoComisionDirectiva|PuestoComisionDirectiva[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PuestoComisionDirectivaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PuestoComisionDirectivaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   PuestoComisionDirectiva A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_PUESTO_COMISION_DIRECTIVA`, `PUESTO` FROM `puesto_comision_directiva` WHERE `ID_PUESTO_COMISION_DIRECTIVA` = :p0';
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
            $obj = new PuestoComisionDirectiva();
            $obj->hydrate($row);
            PuestoComisionDirectivaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return PuestoComisionDirectiva|PuestoComisionDirectiva[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|PuestoComisionDirectiva[]|mixed the list of results, formatted by the current formatter
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
     * @return PuestoComisionDirectivaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PuestoComisionDirectivaPeer::ID_PUESTO_COMISION_DIRECTIVA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PuestoComisionDirectivaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PuestoComisionDirectivaPeer::ID_PUESTO_COMISION_DIRECTIVA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_puesto_comision_directiva column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPuestoComisionDirectiva(1234); // WHERE id_puesto_comision_directiva = 1234
     * $query->filterByIdPuestoComisionDirectiva(array(12, 34)); // WHERE id_puesto_comision_directiva IN (12, 34)
     * $query->filterByIdPuestoComisionDirectiva(array('min' => 12)); // WHERE id_puesto_comision_directiva > 12
     * </code>
     *
     * @param     mixed $idPuestoComisionDirectiva The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PuestoComisionDirectivaQuery The current query, for fluid interface
     */
    public function filterByIdPuestoComisionDirectiva($idPuestoComisionDirectiva = null, $comparison = null)
    {
        if (is_array($idPuestoComisionDirectiva) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(PuestoComisionDirectivaPeer::ID_PUESTO_COMISION_DIRECTIVA, $idPuestoComisionDirectiva, $comparison);
    }

    /**
     * Filter the query on the puesto column
     *
     * Example usage:
     * <code>
     * $query->filterByPuesto('fooValue');   // WHERE puesto = 'fooValue'
     * $query->filterByPuesto('%fooValue%'); // WHERE puesto LIKE '%fooValue%'
     * </code>
     *
     * @param     string $puesto The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PuestoComisionDirectivaQuery The current query, for fluid interface
     */
    public function filterByPuesto($puesto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($puesto)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $puesto)) {
                $puesto = str_replace('*', '%', $puesto);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PuestoComisionDirectivaPeer::PUESTO, $puesto, $comparison);
    }

    /**
     * Filter the query by a related PersonaComisionDirectiva object
     *
     * @param   PersonaComisionDirectiva|PropelObjectCollection $personaComisionDirectiva  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PuestoComisionDirectivaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPersonaComisionDirectiva($personaComisionDirectiva, $comparison = null)
    {
        if ($personaComisionDirectiva instanceof PersonaComisionDirectiva) {
            return $this
                ->addUsingAlias(PuestoComisionDirectivaPeer::ID_PUESTO_COMISION_DIRECTIVA, $personaComisionDirectiva->getPuestoId(), $comparison);
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
     * @return PuestoComisionDirectivaQuery The current query, for fluid interface
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
     * @param   PuestoComisionDirectiva $puestoComisionDirectiva Object to remove from the list of results
     *
     * @return PuestoComisionDirectivaQuery The current query, for fluid interface
     */
    public function prune($puestoComisionDirectiva = null)
    {
        if ($puestoComisionDirectiva) {
            $this->addUsingAlias(PuestoComisionDirectivaPeer::ID_PUESTO_COMISION_DIRECTIVA, $puestoComisionDirectiva->getIdPuestoComisionDirectiva(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BasePuestoComisionDirectivaQuery