<?php


/**
 * Base class that represents a query for the 'localidad' table.
 *
 * 
 *
 * @method     LocalidadQuery orderByIdLocalidad($order = Criteria::ASC) Order by the id_localidad column
 * @method     LocalidadQuery orderByNombreLocalidad($order = Criteria::ASC) Order by the nombre_localidad column
 * @method     LocalidadQuery orderByCodigoPostal($order = Criteria::ASC) Order by the codigo_postal column
 * @method     LocalidadQuery orderByProvinciaId($order = Criteria::ASC) Order by the provincia_id column
 *
 * @method     LocalidadQuery groupByIdLocalidad() Group by the id_localidad column
 * @method     LocalidadQuery groupByNombreLocalidad() Group by the nombre_localidad column
 * @method     LocalidadQuery groupByCodigoPostal() Group by the codigo_postal column
 * @method     LocalidadQuery groupByProvinciaId() Group by the provincia_id column
 *
 * @method     LocalidadQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     LocalidadQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     LocalidadQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     LocalidadQuery leftJoinProvincia($relationAlias = null) Adds a LEFT JOIN clause to the query using the Provincia relation
 * @method     LocalidadQuery rightJoinProvincia($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Provincia relation
 * @method     LocalidadQuery innerJoinProvincia($relationAlias = null) Adds a INNER JOIN clause to the query using the Provincia relation
 *
 * @method     LocalidadQuery leftJoinDireccion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Direccion relation
 * @method     LocalidadQuery rightJoinDireccion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Direccion relation
 * @method     LocalidadQuery innerJoinDireccion($relationAlias = null) Adds a INNER JOIN clause to the query using the Direccion relation
 *
 * @method     Localidad findOne(PropelPDO $con = null) Return the first Localidad matching the query
 * @method     Localidad findOneOrCreate(PropelPDO $con = null) Return the first Localidad matching the query, or a new Localidad object populated from the query conditions when no match is found
 *
 * @method     Localidad findOneByIdLocalidad(int $id_localidad) Return the first Localidad filtered by the id_localidad column
 * @method     Localidad findOneByNombreLocalidad(string $nombre_localidad) Return the first Localidad filtered by the nombre_localidad column
 * @method     Localidad findOneByCodigoPostal(string $codigo_postal) Return the first Localidad filtered by the codigo_postal column
 * @method     Localidad findOneByProvinciaId(int $provincia_id) Return the first Localidad filtered by the provincia_id column
 *
 * @method     array findByIdLocalidad(int $id_localidad) Return Localidad objects filtered by the id_localidad column
 * @method     array findByNombreLocalidad(string $nombre_localidad) Return Localidad objects filtered by the nombre_localidad column
 * @method     array findByCodigoPostal(string $codigo_postal) Return Localidad objects filtered by the codigo_postal column
 * @method     array findByProvinciaId(int $provincia_id) Return Localidad objects filtered by the provincia_id column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseLocalidadQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseLocalidadQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Localidad', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LocalidadQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     LocalidadQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return LocalidadQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LocalidadQuery) {
            return $criteria;
        }
        $query = new LocalidadQuery();
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
     * @return   Localidad|Localidad[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = LocalidadPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(LocalidadPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Localidad A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_LOCALIDAD`, `NOMBRE_LOCALIDAD`, `CODIGO_POSTAL`, `PROVINCIA_ID` FROM `localidad` WHERE `ID_LOCALIDAD` = :p0';
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
            $obj = new Localidad();
            $obj->hydrate($row);
            LocalidadPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Localidad|Localidad[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Localidad[]|mixed the list of results, formatted by the current formatter
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
     * @return LocalidadQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(LocalidadPeer::ID_LOCALIDAD, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return LocalidadQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(LocalidadPeer::ID_LOCALIDAD, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_localidad column
     *
     * Example usage:
     * <code>
     * $query->filterByIdLocalidad(1234); // WHERE id_localidad = 1234
     * $query->filterByIdLocalidad(array(12, 34)); // WHERE id_localidad IN (12, 34)
     * $query->filterByIdLocalidad(array('min' => 12)); // WHERE id_localidad > 12
     * </code>
     *
     * @param     mixed $idLocalidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LocalidadQuery The current query, for fluid interface
     */
    public function filterByIdLocalidad($idLocalidad = null, $comparison = null)
    {
        if (is_array($idLocalidad) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(LocalidadPeer::ID_LOCALIDAD, $idLocalidad, $comparison);
    }

    /**
     * Filter the query on the nombre_localidad column
     *
     * Example usage:
     * <code>
     * $query->filterByNombreLocalidad('fooValue');   // WHERE nombre_localidad = 'fooValue'
     * $query->filterByNombreLocalidad('%fooValue%'); // WHERE nombre_localidad LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nombreLocalidad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LocalidadQuery The current query, for fluid interface
     */
    public function filterByNombreLocalidad($nombreLocalidad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nombreLocalidad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nombreLocalidad)) {
                $nombreLocalidad = str_replace('*', '%', $nombreLocalidad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LocalidadPeer::NOMBRE_LOCALIDAD, $nombreLocalidad, $comparison);
    }

    /**
     * Filter the query on the codigo_postal column
     *
     * Example usage:
     * <code>
     * $query->filterByCodigoPostal('fooValue');   // WHERE codigo_postal = 'fooValue'
     * $query->filterByCodigoPostal('%fooValue%'); // WHERE codigo_postal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codigoPostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LocalidadQuery The current query, for fluid interface
     */
    public function filterByCodigoPostal($codigoPostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codigoPostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codigoPostal)) {
                $codigoPostal = str_replace('*', '%', $codigoPostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LocalidadPeer::CODIGO_POSTAL, $codigoPostal, $comparison);
    }

    /**
     * Filter the query on the provincia_id column
     *
     * Example usage:
     * <code>
     * $query->filterByProvinciaId(1234); // WHERE provincia_id = 1234
     * $query->filterByProvinciaId(array(12, 34)); // WHERE provincia_id IN (12, 34)
     * $query->filterByProvinciaId(array('min' => 12)); // WHERE provincia_id > 12
     * </code>
     *
     * @see       filterByProvincia()
     *
     * @param     mixed $provinciaId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LocalidadQuery The current query, for fluid interface
     */
    public function filterByProvinciaId($provinciaId = null, $comparison = null)
    {
        if (is_array($provinciaId)) {
            $useMinMax = false;
            if (isset($provinciaId['min'])) {
                $this->addUsingAlias(LocalidadPeer::PROVINCIA_ID, $provinciaId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($provinciaId['max'])) {
                $this->addUsingAlias(LocalidadPeer::PROVINCIA_ID, $provinciaId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LocalidadPeer::PROVINCIA_ID, $provinciaId, $comparison);
    }

    /**
     * Filter the query by a related Provincia object
     *
     * @param   Provincia|PropelObjectCollection $provincia The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   LocalidadQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByProvincia($provincia, $comparison = null)
    {
        if ($provincia instanceof Provincia) {
            return $this
                ->addUsingAlias(LocalidadPeer::PROVINCIA_ID, $provincia->getIdProvincia(), $comparison);
        } elseif ($provincia instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(LocalidadPeer::PROVINCIA_ID, $provincia->toKeyValue('PrimaryKey', 'IdProvincia'), $comparison);
        } else {
            throw new PropelException('filterByProvincia() only accepts arguments of type Provincia or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Provincia relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return LocalidadQuery The current query, for fluid interface
     */
    public function joinProvincia($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Provincia');

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
            $this->addJoinObject($join, 'Provincia');
        }

        return $this;
    }

    /**
     * Use the Provincia relation Provincia object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProvinciaQuery A secondary query class using the current class as primary query
     */
    public function useProvinciaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProvincia($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Provincia', 'ProvinciaQuery');
    }

    /**
     * Filter the query by a related Direccion object
     *
     * @param   Direccion|PropelObjectCollection $direccion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   LocalidadQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByDireccion($direccion, $comparison = null)
    {
        if ($direccion instanceof Direccion) {
            return $this
                ->addUsingAlias(LocalidadPeer::ID_LOCALIDAD, $direccion->getLocalidadId(), $comparison);
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
     * @return LocalidadQuery The current query, for fluid interface
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
     * @param   Localidad $localidad Object to remove from the list of results
     *
     * @return LocalidadQuery The current query, for fluid interface
     */
    public function prune($localidad = null)
    {
        if ($localidad) {
            $this->addUsingAlias(LocalidadPeer::ID_LOCALIDAD, $localidad->getIdLocalidad(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseLocalidadQuery