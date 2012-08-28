<?php


/**
 * Base class that represents a query for the 'tipo_persona_juridica' table.
 *
 * 
 *
 * @method     TipoPersonaJuridicaQuery orderByIdTipoPersonaJuridica($order = Criteria::ASC) Order by the id_tipo_persona_juridica column
 * @method     TipoPersonaJuridicaQuery orderByTipoPersonaJuridica($order = Criteria::ASC) Order by the tipo_persona_juridica column
 *
 * @method     TipoPersonaJuridicaQuery groupByIdTipoPersonaJuridica() Group by the id_tipo_persona_juridica column
 * @method     TipoPersonaJuridicaQuery groupByTipoPersonaJuridica() Group by the tipo_persona_juridica column
 *
 * @method     TipoPersonaJuridicaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TipoPersonaJuridicaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TipoPersonaJuridicaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     TipoPersonaJuridicaQuery leftJoinPersonaJuridica($relationAlias = null) Adds a LEFT JOIN clause to the query using the PersonaJuridica relation
 * @method     TipoPersonaJuridicaQuery rightJoinPersonaJuridica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PersonaJuridica relation
 * @method     TipoPersonaJuridicaQuery innerJoinPersonaJuridica($relationAlias = null) Adds a INNER JOIN clause to the query using the PersonaJuridica relation
 *
 * @method     TipoPersonaJuridica findOne(PropelPDO $con = null) Return the first TipoPersonaJuridica matching the query
 * @method     TipoPersonaJuridica findOneOrCreate(PropelPDO $con = null) Return the first TipoPersonaJuridica matching the query, or a new TipoPersonaJuridica object populated from the query conditions when no match is found
 *
 * @method     TipoPersonaJuridica findOneByIdTipoPersonaJuridica(int $id_tipo_persona_juridica) Return the first TipoPersonaJuridica filtered by the id_tipo_persona_juridica column
 * @method     TipoPersonaJuridica findOneByTipoPersonaJuridica(string $tipo_persona_juridica) Return the first TipoPersonaJuridica filtered by the tipo_persona_juridica column
 *
 * @method     array findByIdTipoPersonaJuridica(int $id_tipo_persona_juridica) Return TipoPersonaJuridica objects filtered by the id_tipo_persona_juridica column
 * @method     array findByTipoPersonaJuridica(string $tipo_persona_juridica) Return TipoPersonaJuridica objects filtered by the tipo_persona_juridica column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseTipoPersonaJuridicaQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseTipoPersonaJuridicaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'TipoPersonaJuridica', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TipoPersonaJuridicaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     TipoPersonaJuridicaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TipoPersonaJuridicaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TipoPersonaJuridicaQuery) {
            return $criteria;
        }
        $query = new TipoPersonaJuridicaQuery();
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
     * @return   TipoPersonaJuridica|TipoPersonaJuridica[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TipoPersonaJuridicaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TipoPersonaJuridicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   TipoPersonaJuridica A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_TIPO_PERSONA_JURIDICA`, `TIPO_PERSONA_JURIDICA` FROM `tipo_persona_juridica` WHERE `ID_TIPO_PERSONA_JURIDICA` = :p0';
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
            $obj = new TipoPersonaJuridica();
            $obj->hydrate($row);
            TipoPersonaJuridicaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TipoPersonaJuridica|TipoPersonaJuridica[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TipoPersonaJuridica[]|mixed the list of results, formatted by the current formatter
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
     * @return TipoPersonaJuridicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TipoPersonaJuridicaPeer::ID_TIPO_PERSONA_JURIDICA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TipoPersonaJuridicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TipoPersonaJuridicaPeer::ID_TIPO_PERSONA_JURIDICA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_tipo_persona_juridica column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTipoPersonaJuridica(1234); // WHERE id_tipo_persona_juridica = 1234
     * $query->filterByIdTipoPersonaJuridica(array(12, 34)); // WHERE id_tipo_persona_juridica IN (12, 34)
     * $query->filterByIdTipoPersonaJuridica(array('min' => 12)); // WHERE id_tipo_persona_juridica > 12
     * </code>
     *
     * @param     mixed $idTipoPersonaJuridica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TipoPersonaJuridicaQuery The current query, for fluid interface
     */
    public function filterByIdTipoPersonaJuridica($idTipoPersonaJuridica = null, $comparison = null)
    {
        if (is_array($idTipoPersonaJuridica) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(TipoPersonaJuridicaPeer::ID_TIPO_PERSONA_JURIDICA, $idTipoPersonaJuridica, $comparison);
    }

    /**
     * Filter the query on the tipo_persona_juridica column
     *
     * Example usage:
     * <code>
     * $query->filterByTipoPersonaJuridica('fooValue');   // WHERE tipo_persona_juridica = 'fooValue'
     * $query->filterByTipoPersonaJuridica('%fooValue%'); // WHERE tipo_persona_juridica LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tipoPersonaJuridica The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TipoPersonaJuridicaQuery The current query, for fluid interface
     */
    public function filterByTipoPersonaJuridica($tipoPersonaJuridica = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tipoPersonaJuridica)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tipoPersonaJuridica)) {
                $tipoPersonaJuridica = str_replace('*', '%', $tipoPersonaJuridica);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TipoPersonaJuridicaPeer::TIPO_PERSONA_JURIDICA, $tipoPersonaJuridica, $comparison);
    }

    /**
     * Filter the query by a related PersonaJuridica object
     *
     * @param   PersonaJuridica|PropelObjectCollection $personaJuridica  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   TipoPersonaJuridicaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPersonaJuridica($personaJuridica, $comparison = null)
    {
        if ($personaJuridica instanceof PersonaJuridica) {
            return $this
                ->addUsingAlias(TipoPersonaJuridicaPeer::ID_TIPO_PERSONA_JURIDICA, $personaJuridica->getTipoPersJuridicaId(), $comparison);
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
     * @return TipoPersonaJuridicaQuery The current query, for fluid interface
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
     * @param   TipoPersonaJuridica $tipoPersonaJuridica Object to remove from the list of results
     *
     * @return TipoPersonaJuridicaQuery The current query, for fluid interface
     */
    public function prune($tipoPersonaJuridica = null)
    {
        if ($tipoPersonaJuridica) {
            $this->addUsingAlias(TipoPersonaJuridicaPeer::ID_TIPO_PERSONA_JURIDICA, $tipoPersonaJuridica->getIdTipoPersonaJuridica(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseTipoPersonaJuridicaQuery