<?php


/**
 * Base class that represents a query for the 'tipo_aporte' table.
 *
 * 
 *
 * @method     TipoAporteQuery orderByIdTipoAporte($order = Criteria::ASC) Order by the id_tipo_aporte column
 * @method     TipoAporteQuery orderByTipoAporte($order = Criteria::ASC) Order by the tipo_aporte column
 *
 * @method     TipoAporteQuery groupByIdTipoAporte() Group by the id_tipo_aporte column
 * @method     TipoAporteQuery groupByTipoAporte() Group by the tipo_aporte column
 *
 * @method     TipoAporteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TipoAporteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TipoAporteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     TipoAporteQuery leftJoinAporte($relationAlias = null) Adds a LEFT JOIN clause to the query using the Aporte relation
 * @method     TipoAporteQuery rightJoinAporte($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Aporte relation
 * @method     TipoAporteQuery innerJoinAporte($relationAlias = null) Adds a INNER JOIN clause to the query using the Aporte relation
 *
 * @method     TipoAporte findOne(PropelPDO $con = null) Return the first TipoAporte matching the query
 * @method     TipoAporte findOneOrCreate(PropelPDO $con = null) Return the first TipoAporte matching the query, or a new TipoAporte object populated from the query conditions when no match is found
 *
 * @method     TipoAporte findOneByIdTipoAporte(int $id_tipo_aporte) Return the first TipoAporte filtered by the id_tipo_aporte column
 * @method     TipoAporte findOneByTipoAporte(string $tipo_aporte) Return the first TipoAporte filtered by the tipo_aporte column
 *
 * @method     array findByIdTipoAporte(int $id_tipo_aporte) Return TipoAporte objects filtered by the id_tipo_aporte column
 * @method     array findByTipoAporte(string $tipo_aporte) Return TipoAporte objects filtered by the tipo_aporte column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseTipoAporteQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseTipoAporteQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'TipoAporte', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TipoAporteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     TipoAporteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TipoAporteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TipoAporteQuery) {
            return $criteria;
        }
        $query = new TipoAporteQuery();
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
     * @return   TipoAporte|TipoAporte[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TipoAportePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TipoAportePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   TipoAporte A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_TIPO_APORTE`, `TIPO_APORTE` FROM `tipo_aporte` WHERE `ID_TIPO_APORTE` = :p0';
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
            $obj = new TipoAporte();
            $obj->hydrate($row);
            TipoAportePeer::addInstanceToPool($obj, (string) $key);
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
     * @return TipoAporte|TipoAporte[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TipoAporte[]|mixed the list of results, formatted by the current formatter
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
     * @return TipoAporteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TipoAportePeer::ID_TIPO_APORTE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TipoAporteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TipoAportePeer::ID_TIPO_APORTE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_tipo_aporte column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTipoAporte(1234); // WHERE id_tipo_aporte = 1234
     * $query->filterByIdTipoAporte(array(12, 34)); // WHERE id_tipo_aporte IN (12, 34)
     * $query->filterByIdTipoAporte(array('min' => 12)); // WHERE id_tipo_aporte > 12
     * </code>
     *
     * @param     mixed $idTipoAporte The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TipoAporteQuery The current query, for fluid interface
     */
    public function filterByIdTipoAporte($idTipoAporte = null, $comparison = null)
    {
        if (is_array($idTipoAporte) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(TipoAportePeer::ID_TIPO_APORTE, $idTipoAporte, $comparison);
    }

    /**
     * Filter the query on the tipo_aporte column
     *
     * Example usage:
     * <code>
     * $query->filterByTipoAporte('fooValue');   // WHERE tipo_aporte = 'fooValue'
     * $query->filterByTipoAporte('%fooValue%'); // WHERE tipo_aporte LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tipoAporte The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TipoAporteQuery The current query, for fluid interface
     */
    public function filterByTipoAporte($tipoAporte = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tipoAporte)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tipoAporte)) {
                $tipoAporte = str_replace('*', '%', $tipoAporte);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TipoAportePeer::TIPO_APORTE, $tipoAporte, $comparison);
    }

    /**
     * Filter the query by a related Aporte object
     *
     * @param   Aporte|PropelObjectCollection $aporte  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   TipoAporteQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByAporte($aporte, $comparison = null)
    {
        if ($aporte instanceof Aporte) {
            return $this
                ->addUsingAlias(TipoAportePeer::ID_TIPO_APORTE, $aporte->getTipoAporteId(), $comparison);
        } elseif ($aporte instanceof PropelObjectCollection) {
            return $this
                ->useAporteQuery()
                ->filterByPrimaryKeys($aporte->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByAporte() only accepts arguments of type Aporte or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Aporte relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TipoAporteQuery The current query, for fluid interface
     */
    public function joinAporte($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Aporte');

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
            $this->addJoinObject($join, 'Aporte');
        }

        return $this;
    }

    /**
     * Use the Aporte relation Aporte object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AporteQuery A secondary query class using the current class as primary query
     */
    public function useAporteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAporte($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Aporte', 'AporteQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   TipoAporte $tipoAporte Object to remove from the list of results
     *
     * @return TipoAporteQuery The current query, for fluid interface
     */
    public function prune($tipoAporte = null)
    {
        if ($tipoAporte) {
            $this->addUsingAlias(TipoAportePeer::ID_TIPO_APORTE, $tipoAporte->getIdTipoAporte(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseTipoAporteQuery