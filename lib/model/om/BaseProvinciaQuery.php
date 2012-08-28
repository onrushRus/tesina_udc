<?php


/**
 * Base class that represents a query for the 'provincia' table.
 *
 * 
 *
 * @method     ProvinciaQuery orderByIdProvincia($order = Criteria::ASC) Order by the id_provincia column
 * @method     ProvinciaQuery orderByNombreProvincia($order = Criteria::ASC) Order by the nombre_provincia column
 *
 * @method     ProvinciaQuery groupByIdProvincia() Group by the id_provincia column
 * @method     ProvinciaQuery groupByNombreProvincia() Group by the nombre_provincia column
 *
 * @method     ProvinciaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ProvinciaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ProvinciaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ProvinciaQuery leftJoinLocalidad($relationAlias = null) Adds a LEFT JOIN clause to the query using the Localidad relation
 * @method     ProvinciaQuery rightJoinLocalidad($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Localidad relation
 * @method     ProvinciaQuery innerJoinLocalidad($relationAlias = null) Adds a INNER JOIN clause to the query using the Localidad relation
 *
 * @method     Provincia findOne(PropelPDO $con = null) Return the first Provincia matching the query
 * @method     Provincia findOneOrCreate(PropelPDO $con = null) Return the first Provincia matching the query, or a new Provincia object populated from the query conditions when no match is found
 *
 * @method     Provincia findOneByIdProvincia(int $id_provincia) Return the first Provincia filtered by the id_provincia column
 * @method     Provincia findOneByNombreProvincia(string $nombre_provincia) Return the first Provincia filtered by the nombre_provincia column
 *
 * @method     array findByIdProvincia(int $id_provincia) Return Provincia objects filtered by the id_provincia column
 * @method     array findByNombreProvincia(string $nombre_provincia) Return Provincia objects filtered by the nombre_provincia column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseProvinciaQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseProvinciaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Provincia', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProvinciaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     ProvinciaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProvinciaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProvinciaQuery) {
            return $criteria;
        }
        $query = new ProvinciaQuery();
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
     * @return   Provincia|Provincia[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProvinciaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProvinciaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Provincia A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_PROVINCIA`, `NOMBRE_PROVINCIA` FROM `provincia` WHERE `ID_PROVINCIA` = :p0';
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
            $obj = new Provincia();
            $obj->hydrate($row);
            ProvinciaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Provincia|Provincia[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Provincia[]|mixed the list of results, formatted by the current formatter
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
     * @return ProvinciaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProvinciaPeer::ID_PROVINCIA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProvinciaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProvinciaPeer::ID_PROVINCIA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_provincia column
     *
     * Example usage:
     * <code>
     * $query->filterByIdProvincia(1234); // WHERE id_provincia = 1234
     * $query->filterByIdProvincia(array(12, 34)); // WHERE id_provincia IN (12, 34)
     * $query->filterByIdProvincia(array('min' => 12)); // WHERE id_provincia > 12
     * </code>
     *
     * @param     mixed $idProvincia The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProvinciaQuery The current query, for fluid interface
     */
    public function filterByIdProvincia($idProvincia = null, $comparison = null)
    {
        if (is_array($idProvincia) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(ProvinciaPeer::ID_PROVINCIA, $idProvincia, $comparison);
    }

    /**
     * Filter the query on the nombre_provincia column
     *
     * Example usage:
     * <code>
     * $query->filterByNombreProvincia('fooValue');   // WHERE nombre_provincia = 'fooValue'
     * $query->filterByNombreProvincia('%fooValue%'); // WHERE nombre_provincia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nombreProvincia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProvinciaQuery The current query, for fluid interface
     */
    public function filterByNombreProvincia($nombreProvincia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nombreProvincia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nombreProvincia)) {
                $nombreProvincia = str_replace('*', '%', $nombreProvincia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProvinciaPeer::NOMBRE_PROVINCIA, $nombreProvincia, $comparison);
    }

    /**
     * Filter the query by a related Localidad object
     *
     * @param   Localidad|PropelObjectCollection $localidad  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   ProvinciaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByLocalidad($localidad, $comparison = null)
    {
        if ($localidad instanceof Localidad) {
            return $this
                ->addUsingAlias(ProvinciaPeer::ID_PROVINCIA, $localidad->getProvinciaId(), $comparison);
        } elseif ($localidad instanceof PropelObjectCollection) {
            return $this
                ->useLocalidadQuery()
                ->filterByPrimaryKeys($localidad->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByLocalidad() only accepts arguments of type Localidad or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Localidad relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProvinciaQuery The current query, for fluid interface
     */
    public function joinLocalidad($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Localidad');

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
            $this->addJoinObject($join, 'Localidad');
        }

        return $this;
    }

    /**
     * Use the Localidad relation Localidad object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   LocalidadQuery A secondary query class using the current class as primary query
     */
    public function useLocalidadQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinLocalidad($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Localidad', 'LocalidadQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Provincia $provincia Object to remove from the list of results
     *
     * @return ProvinciaQuery The current query, for fluid interface
     */
    public function prune($provincia = null)
    {
        if ($provincia) {
            $this->addUsingAlias(ProvinciaPeer::ID_PROVINCIA, $provincia->getIdProvincia(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseProvinciaQuery