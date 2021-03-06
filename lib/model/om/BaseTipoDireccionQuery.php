<?php


/**
 * Base class that represents a query for the 'tipo_direccion' table.
 *
 * 
 *
 * @method     TipoDireccionQuery orderByIdTipoDireccion($order = Criteria::ASC) Order by the id_tipo_direccion column
 * @method     TipoDireccionQuery orderByDescripcion($order = Criteria::ASC) Order by the descripcion column
 *
 * @method     TipoDireccionQuery groupByIdTipoDireccion() Group by the id_tipo_direccion column
 * @method     TipoDireccionQuery groupByDescripcion() Group by the descripcion column
 *
 * @method     TipoDireccionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TipoDireccionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TipoDireccionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     TipoDireccionQuery leftJoinDireccion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Direccion relation
 * @method     TipoDireccionQuery rightJoinDireccion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Direccion relation
 * @method     TipoDireccionQuery innerJoinDireccion($relationAlias = null) Adds a INNER JOIN clause to the query using the Direccion relation
 *
 * @method     TipoDireccion findOne(PropelPDO $con = null) Return the first TipoDireccion matching the query
 * @method     TipoDireccion findOneOrCreate(PropelPDO $con = null) Return the first TipoDireccion matching the query, or a new TipoDireccion object populated from the query conditions when no match is found
 *
 * @method     TipoDireccion findOneByIdTipoDireccion(int $id_tipo_direccion) Return the first TipoDireccion filtered by the id_tipo_direccion column
 * @method     TipoDireccion findOneByDescripcion(string $descripcion) Return the first TipoDireccion filtered by the descripcion column
 *
 * @method     array findByIdTipoDireccion(int $id_tipo_direccion) Return TipoDireccion objects filtered by the id_tipo_direccion column
 * @method     array findByDescripcion(string $descripcion) Return TipoDireccion objects filtered by the descripcion column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseTipoDireccionQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseTipoDireccionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'TipoDireccion', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TipoDireccionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     TipoDireccionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TipoDireccionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TipoDireccionQuery) {
            return $criteria;
        }
        $query = new TipoDireccionQuery();
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
     * @return   TipoDireccion|TipoDireccion[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TipoDireccionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TipoDireccionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   TipoDireccion A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_TIPO_DIRECCION`, `DESCRIPCION` FROM `tipo_direccion` WHERE `ID_TIPO_DIRECCION` = :p0';
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
            $obj = new TipoDireccion();
            $obj->hydrate($row);
            TipoDireccionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TipoDireccion|TipoDireccion[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TipoDireccion[]|mixed the list of results, formatted by the current formatter
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
     * @return TipoDireccionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TipoDireccionPeer::ID_TIPO_DIRECCION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TipoDireccionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TipoDireccionPeer::ID_TIPO_DIRECCION, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_tipo_direccion column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTipoDireccion(1234); // WHERE id_tipo_direccion = 1234
     * $query->filterByIdTipoDireccion(array(12, 34)); // WHERE id_tipo_direccion IN (12, 34)
     * $query->filterByIdTipoDireccion(array('min' => 12)); // WHERE id_tipo_direccion > 12
     * </code>
     *
     * @param     mixed $idTipoDireccion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TipoDireccionQuery The current query, for fluid interface
     */
    public function filterByIdTipoDireccion($idTipoDireccion = null, $comparison = null)
    {
        if (is_array($idTipoDireccion) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(TipoDireccionPeer::ID_TIPO_DIRECCION, $idTipoDireccion, $comparison);
    }

    /**
     * Filter the query on the descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByDescripcion('fooValue');   // WHERE descripcion = 'fooValue'
     * $query->filterByDescripcion('%fooValue%'); // WHERE descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TipoDireccionQuery The current query, for fluid interface
     */
    public function filterByDescripcion($descripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descripcion)) {
                $descripcion = str_replace('*', '%', $descripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TipoDireccionPeer::DESCRIPCION, $descripcion, $comparison);
    }

    /**
     * Filter the query by a related Direccion object
     *
     * @param   Direccion|PropelObjectCollection $direccion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   TipoDireccionQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByDireccion($direccion, $comparison = null)
    {
        if ($direccion instanceof Direccion) {
            return $this
                ->addUsingAlias(TipoDireccionPeer::ID_TIPO_DIRECCION, $direccion->getTipoDireccionId(), $comparison);
        } elseif ($direccion instanceof PropelObjectCollection) {
            return $this
                ->useDireccionQuery()
                ->filterByPrimaryKeys($direccion->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByDireccion() only accepts arguments of type Direccion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Direccion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TipoDireccionQuery The current query, for fluid interface
     */
    public function joinDireccion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Direccion');

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
            $this->addJoinObject($join, 'Direccion');
        }

        return $this;
    }

    /**
     * Use the Direccion relation Direccion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DireccionQuery A secondary query class using the current class as primary query
     */
    public function useDireccionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDireccion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Direccion', 'DireccionQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   TipoDireccion $tipoDireccion Object to remove from the list of results
     *
     * @return TipoDireccionQuery The current query, for fluid interface
     */
    public function prune($tipoDireccion = null)
    {
        if ($tipoDireccion) {
            $this->addUsingAlias(TipoDireccionPeer::ID_TIPO_DIRECCION, $tipoDireccion->getIdTipoDireccion(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseTipoDireccionQuery