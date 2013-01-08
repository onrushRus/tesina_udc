<?php


/**
 * Base class that represents a query for the 'tipo_asamblea' table.
 *
 * 
 *
 * @method     TipoAsambleaQuery orderByIdTipoAsamblea($order = Criteria::ASC) Order by the id_tipo_asamblea column
 * @method     TipoAsambleaQuery orderByTipoAsamblea($order = Criteria::ASC) Order by the tipo_asamblea column
 *
 * @method     TipoAsambleaQuery groupByIdTipoAsamblea() Group by the id_tipo_asamblea column
 * @method     TipoAsambleaQuery groupByTipoAsamblea() Group by the tipo_asamblea column
 *
 * @method     TipoAsambleaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TipoAsambleaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TipoAsambleaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     TipoAsambleaQuery leftJoinAsamblea($relationAlias = null) Adds a LEFT JOIN clause to the query using the Asamblea relation
 * @method     TipoAsambleaQuery rightJoinAsamblea($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Asamblea relation
 * @method     TipoAsambleaQuery innerJoinAsamblea($relationAlias = null) Adds a INNER JOIN clause to the query using the Asamblea relation
 *
 * @method     TipoAsamblea findOne(PropelPDO $con = null) Return the first TipoAsamblea matching the query
 * @method     TipoAsamblea findOneOrCreate(PropelPDO $con = null) Return the first TipoAsamblea matching the query, or a new TipoAsamblea object populated from the query conditions when no match is found
 *
 * @method     TipoAsamblea findOneByIdTipoAsamblea(int $id_tipo_asamblea) Return the first TipoAsamblea filtered by the id_tipo_asamblea column
 * @method     TipoAsamblea findOneByTipoAsamblea(string $tipo_asamblea) Return the first TipoAsamblea filtered by the tipo_asamblea column
 *
 * @method     array findByIdTipoAsamblea(int $id_tipo_asamblea) Return TipoAsamblea objects filtered by the id_tipo_asamblea column
 * @method     array findByTipoAsamblea(string $tipo_asamblea) Return TipoAsamblea objects filtered by the tipo_asamblea column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseTipoAsambleaQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseTipoAsambleaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'TipoAsamblea', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TipoAsambleaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     TipoAsambleaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TipoAsambleaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TipoAsambleaQuery) {
            return $criteria;
        }
        $query = new TipoAsambleaQuery();
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
     * @return   TipoAsamblea|TipoAsamblea[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TipoAsambleaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TipoAsambleaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   TipoAsamblea A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_TIPO_ASAMBLEA`, `TIPO_ASAMBLEA` FROM `tipo_asamblea` WHERE `ID_TIPO_ASAMBLEA` = :p0';
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
            $obj = new TipoAsamblea();
            $obj->hydrate($row);
            TipoAsambleaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TipoAsamblea|TipoAsamblea[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TipoAsamblea[]|mixed the list of results, formatted by the current formatter
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
     * @return TipoAsambleaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TipoAsambleaPeer::ID_TIPO_ASAMBLEA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TipoAsambleaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TipoAsambleaPeer::ID_TIPO_ASAMBLEA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_tipo_asamblea column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTipoAsamblea(1234); // WHERE id_tipo_asamblea = 1234
     * $query->filterByIdTipoAsamblea(array(12, 34)); // WHERE id_tipo_asamblea IN (12, 34)
     * $query->filterByIdTipoAsamblea(array('min' => 12)); // WHERE id_tipo_asamblea > 12
     * </code>
     *
     * @param     mixed $idTipoAsamblea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TipoAsambleaQuery The current query, for fluid interface
     */
    public function filterByIdTipoAsamblea($idTipoAsamblea = null, $comparison = null)
    {
        if (is_array($idTipoAsamblea) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(TipoAsambleaPeer::ID_TIPO_ASAMBLEA, $idTipoAsamblea, $comparison);
    }

    /**
     * Filter the query on the tipo_asamblea column
     *
     * Example usage:
     * <code>
     * $query->filterByTipoAsamblea('fooValue');   // WHERE tipo_asamblea = 'fooValue'
     * $query->filterByTipoAsamblea('%fooValue%'); // WHERE tipo_asamblea LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tipoAsamblea The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TipoAsambleaQuery The current query, for fluid interface
     */
    public function filterByTipoAsamblea($tipoAsamblea = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tipoAsamblea)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tipoAsamblea)) {
                $tipoAsamblea = str_replace('*', '%', $tipoAsamblea);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TipoAsambleaPeer::TIPO_ASAMBLEA, $tipoAsamblea, $comparison);
    }

    /**
     * Filter the query by a related Asamblea object
     *
     * @param   Asamblea|PropelObjectCollection $asamblea  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   TipoAsambleaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByAsamblea($asamblea, $comparison = null)
    {
        if ($asamblea instanceof Asamblea) {
            return $this
                ->addUsingAlias(TipoAsambleaPeer::ID_TIPO_ASAMBLEA, $asamblea->getTipoAsambleaId(), $comparison);
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
     * @return TipoAsambleaQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   TipoAsamblea $tipoAsamblea Object to remove from the list of results
     *
     * @return TipoAsambleaQuery The current query, for fluid interface
     */
    public function prune($tipoAsamblea = null)
    {
        if ($tipoAsamblea) {
            $this->addUsingAlias(TipoAsambleaPeer::ID_TIPO_ASAMBLEA, $tipoAsamblea->getIdTipoAsamblea(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseTipoAsambleaQuery