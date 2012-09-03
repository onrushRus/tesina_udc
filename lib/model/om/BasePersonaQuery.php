<?php


/**
 * Base class that represents a query for the 'persona' table.
 *
 * 
 *
 * @method     PersonaQuery orderByIdPersona($order = Criteria::ASC) Order by the id_persona column
 * @method     PersonaQuery orderByEstadoId($order = Criteria::ASC) Order by the estado_id column
 * @method     PersonaQuery orderByDireccionPostalId($order = Criteria::ASC) Order by the direccion_postal_id column
 * @method     PersonaQuery orderByDireccionRealId($order = Criteria::ASC) Order by the direccion_real_id column
 * @method     PersonaQuery orderByCuitCuil($order = Criteria::ASC) Order by the cuit_cuil column
 *
 * @method     PersonaQuery groupByIdPersona() Group by the id_persona column
 * @method     PersonaQuery groupByEstadoId() Group by the estado_id column
 * @method     PersonaQuery groupByDireccionPostalId() Group by the direccion_postal_id column
 * @method     PersonaQuery groupByDireccionRealId() Group by the direccion_real_id column
 * @method     PersonaQuery groupByCuitCuil() Group by the cuit_cuil column
 *
 * @method     PersonaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PersonaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PersonaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PersonaQuery leftJoinEstadoPersona($relationAlias = null) Adds a LEFT JOIN clause to the query using the EstadoPersona relation
 * @method     PersonaQuery rightJoinEstadoPersona($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EstadoPersona relation
 * @method     PersonaQuery innerJoinEstadoPersona($relationAlias = null) Adds a INNER JOIN clause to the query using the EstadoPersona relation
 *
 * @method     PersonaQuery leftJoinDireccionRelatedByDireccionPostalId($relationAlias = null) Adds a LEFT JOIN clause to the query using the DireccionRelatedByDireccionPostalId relation
 * @method     PersonaQuery rightJoinDireccionRelatedByDireccionPostalId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DireccionRelatedByDireccionPostalId relation
 * @method     PersonaQuery innerJoinDireccionRelatedByDireccionPostalId($relationAlias = null) Adds a INNER JOIN clause to the query using the DireccionRelatedByDireccionPostalId relation
 *
 * @method     PersonaQuery leftJoinDireccionRelatedByDireccionRealId($relationAlias = null) Adds a LEFT JOIN clause to the query using the DireccionRelatedByDireccionRealId relation
 * @method     PersonaQuery rightJoinDireccionRelatedByDireccionRealId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DireccionRelatedByDireccionRealId relation
 * @method     PersonaQuery innerJoinDireccionRelatedByDireccionRealId($relationAlias = null) Adds a INNER JOIN clause to the query using the DireccionRelatedByDireccionRealId relation
 *
 * @method     PersonaQuery leftJoinPersonaFisica($relationAlias = null) Adds a LEFT JOIN clause to the query using the PersonaFisica relation
 * @method     PersonaQuery rightJoinPersonaFisica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PersonaFisica relation
 * @method     PersonaQuery innerJoinPersonaFisica($relationAlias = null) Adds a INNER JOIN clause to the query using the PersonaFisica relation
 *
 * @method     PersonaQuery leftJoinPersonaJuridica($relationAlias = null) Adds a LEFT JOIN clause to the query using the PersonaJuridica relation
 * @method     PersonaQuery rightJoinPersonaJuridica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PersonaJuridica relation
 * @method     PersonaQuery innerJoinPersonaJuridica($relationAlias = null) Adds a INNER JOIN clause to the query using the PersonaJuridica relation
 *
 * @method     Persona findOne(PropelPDO $con = null) Return the first Persona matching the query
 * @method     Persona findOneOrCreate(PropelPDO $con = null) Return the first Persona matching the query, or a new Persona object populated from the query conditions when no match is found
 *
 * @method     Persona findOneByIdPersona(int $id_persona) Return the first Persona filtered by the id_persona column
 * @method     Persona findOneByEstadoId(int $estado_id) Return the first Persona filtered by the estado_id column
 * @method     Persona findOneByDireccionPostalId(int $direccion_postal_id) Return the first Persona filtered by the direccion_postal_id column
 * @method     Persona findOneByDireccionRealId(int $direccion_real_id) Return the first Persona filtered by the direccion_real_id column
 * @method     Persona findOneByCuitCuil(string $cuit_cuil) Return the first Persona filtered by the cuit_cuil column
 *
 * @method     array findByIdPersona(int $id_persona) Return Persona objects filtered by the id_persona column
 * @method     array findByEstadoId(int $estado_id) Return Persona objects filtered by the estado_id column
 * @method     array findByDireccionPostalId(int $direccion_postal_id) Return Persona objects filtered by the direccion_postal_id column
 * @method     array findByDireccionRealId(int $direccion_real_id) Return Persona objects filtered by the direccion_real_id column
 * @method     array findByCuitCuil(string $cuit_cuil) Return Persona objects filtered by the cuit_cuil column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePersonaQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BasePersonaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Persona', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PersonaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     PersonaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PersonaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PersonaQuery) {
            return $criteria;
        }
        $query = new PersonaQuery();
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
     * @return   Persona|Persona[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PersonaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PersonaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Persona A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_PERSONA`, `ESTADO_ID`, `DIRECCION_POSTAL_ID`, `DIRECCION_REAL_ID`, `CUIT_CUIL` FROM `persona` WHERE `ID_PERSONA` = :p0';
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
            $obj = new Persona();
            $obj->hydrate($row);
            PersonaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Persona|Persona[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Persona[]|mixed the list of results, formatted by the current formatter
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
     * @return PersonaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PersonaPeer::ID_PERSONA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PersonaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PersonaPeer::ID_PERSONA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_persona column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPersona(1234); // WHERE id_persona = 1234
     * $query->filterByIdPersona(array(12, 34)); // WHERE id_persona IN (12, 34)
     * $query->filterByIdPersona(array('min' => 12)); // WHERE id_persona > 12
     * </code>
     *
     * @param     mixed $idPersona The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaQuery The current query, for fluid interface
     */
    public function filterByIdPersona($idPersona = null, $comparison = null)
    {
        if (is_array($idPersona) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(PersonaPeer::ID_PERSONA, $idPersona, $comparison);
    }

    /**
     * Filter the query on the estado_id column
     *
     * Example usage:
     * <code>
     * $query->filterByEstadoId(1234); // WHERE estado_id = 1234
     * $query->filterByEstadoId(array(12, 34)); // WHERE estado_id IN (12, 34)
     * $query->filterByEstadoId(array('min' => 12)); // WHERE estado_id > 12
     * </code>
     *
     * @see       filterByEstadoPersona()
     *
     * @param     mixed $estadoId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaQuery The current query, for fluid interface
     */
    public function filterByEstadoId($estadoId = null, $comparison = null)
    {
        if (is_array($estadoId)) {
            $useMinMax = false;
            if (isset($estadoId['min'])) {
                $this->addUsingAlias(PersonaPeer::ESTADO_ID, $estadoId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($estadoId['max'])) {
                $this->addUsingAlias(PersonaPeer::ESTADO_ID, $estadoId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PersonaPeer::ESTADO_ID, $estadoId, $comparison);
    }

    /**
     * Filter the query on the direccion_postal_id column
     *
     * Example usage:
     * <code>
     * $query->filterByDireccionPostalId(1234); // WHERE direccion_postal_id = 1234
     * $query->filterByDireccionPostalId(array(12, 34)); // WHERE direccion_postal_id IN (12, 34)
     * $query->filterByDireccionPostalId(array('min' => 12)); // WHERE direccion_postal_id > 12
     * </code>
     *
     * @see       filterByDireccionRelatedByDireccionPostalId()
     *
     * @param     mixed $direccionPostalId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaQuery The current query, for fluid interface
     */
    public function filterByDireccionPostalId($direccionPostalId = null, $comparison = null)
    {
        if (is_array($direccionPostalId)) {
            $useMinMax = false;
            if (isset($direccionPostalId['min'])) {
                $this->addUsingAlias(PersonaPeer::DIRECCION_POSTAL_ID, $direccionPostalId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($direccionPostalId['max'])) {
                $this->addUsingAlias(PersonaPeer::DIRECCION_POSTAL_ID, $direccionPostalId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PersonaPeer::DIRECCION_POSTAL_ID, $direccionPostalId, $comparison);
    }

    /**
     * Filter the query on the direccion_real_id column
     *
     * Example usage:
     * <code>
     * $query->filterByDireccionRealId(1234); // WHERE direccion_real_id = 1234
     * $query->filterByDireccionRealId(array(12, 34)); // WHERE direccion_real_id IN (12, 34)
     * $query->filterByDireccionRealId(array('min' => 12)); // WHERE direccion_real_id > 12
     * </code>
     *
     * @see       filterByDireccionRelatedByDireccionRealId()
     *
     * @param     mixed $direccionRealId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaQuery The current query, for fluid interface
     */
    public function filterByDireccionRealId($direccionRealId = null, $comparison = null)
    {
        if (is_array($direccionRealId)) {
            $useMinMax = false;
            if (isset($direccionRealId['min'])) {
                $this->addUsingAlias(PersonaPeer::DIRECCION_REAL_ID, $direccionRealId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($direccionRealId['max'])) {
                $this->addUsingAlias(PersonaPeer::DIRECCION_REAL_ID, $direccionRealId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PersonaPeer::DIRECCION_REAL_ID, $direccionRealId, $comparison);
    }

    /**
     * Filter the query on the cuit_cuil column
     *
     * Example usage:
     * <code>
     * $query->filterByCuitCuil(1234); // WHERE cuit_cuil = 1234
     * $query->filterByCuitCuil(array(12, 34)); // WHERE cuit_cuil IN (12, 34)
     * $query->filterByCuitCuil(array('min' => 12)); // WHERE cuit_cuil > 12
     * </code>
     *
     * @param     mixed $cuitCuil The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaQuery The current query, for fluid interface
     */
    public function filterByCuitCuil($cuitCuil = null, $comparison = null)
    {
        if (is_array($cuitCuil)) {
            $useMinMax = false;
            if (isset($cuitCuil['min'])) {
                $this->addUsingAlias(PersonaPeer::CUIT_CUIL, $cuitCuil['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cuitCuil['max'])) {
                $this->addUsingAlias(PersonaPeer::CUIT_CUIL, $cuitCuil['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PersonaPeer::CUIT_CUIL, $cuitCuil, $comparison);
    }

    /**
     * Filter the query by a related EstadoPersona object
     *
     * @param   EstadoPersona|PropelObjectCollection $estadoPersona The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PersonaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByEstadoPersona($estadoPersona, $comparison = null)
    {
        if ($estadoPersona instanceof EstadoPersona) {
            return $this
                ->addUsingAlias(PersonaPeer::ESTADO_ID, $estadoPersona->getIdEstadoPersona(), $comparison);
        } elseif ($estadoPersona instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PersonaPeer::ESTADO_ID, $estadoPersona->toKeyValue('PrimaryKey', 'IdEstadoPersona'), $comparison);
        } else {
            throw new PropelException('filterByEstadoPersona() only accepts arguments of type EstadoPersona or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EstadoPersona relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PersonaQuery The current query, for fluid interface
     */
    public function joinEstadoPersona($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EstadoPersona');

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
            $this->addJoinObject($join, 'EstadoPersona');
        }

        return $this;
    }

    /**
     * Use the EstadoPersona relation EstadoPersona object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EstadoPersonaQuery A secondary query class using the current class as primary query
     */
    public function useEstadoPersonaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEstadoPersona($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EstadoPersona', 'EstadoPersonaQuery');
    }

    /**
     * Filter the query by a related Direccion object
     *
     * @param   Direccion|PropelObjectCollection $direccion The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PersonaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByDireccionRelatedByDireccionPostalId($direccion, $comparison = null)
    {
        if ($direccion instanceof Direccion) {
            return $this
                ->addUsingAlias(PersonaPeer::DIRECCION_POSTAL_ID, $direccion->getIdDireccion(), $comparison);
        } elseif ($direccion instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PersonaPeer::DIRECCION_POSTAL_ID, $direccion->toKeyValue('PrimaryKey', 'IdDireccion'), $comparison);
        } else {
            throw new PropelException('filterByDireccionRelatedByDireccionPostalId() only accepts arguments of type Direccion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the DireccionRelatedByDireccionPostalId relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PersonaQuery The current query, for fluid interface
     */
    public function joinDireccionRelatedByDireccionPostalId($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('DireccionRelatedByDireccionPostalId');

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
            $this->addJoinObject($join, 'DireccionRelatedByDireccionPostalId');
        }

        return $this;
    }

    /**
     * Use the DireccionRelatedByDireccionPostalId relation Direccion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DireccionQuery A secondary query class using the current class as primary query
     */
    public function useDireccionRelatedByDireccionPostalIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDireccionRelatedByDireccionPostalId($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'DireccionRelatedByDireccionPostalId', 'DireccionQuery');
    }

    /**
     * Filter the query by a related Direccion object
     *
     * @param   Direccion|PropelObjectCollection $direccion The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PersonaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByDireccionRelatedByDireccionRealId($direccion, $comparison = null)
    {
        if ($direccion instanceof Direccion) {
            return $this
                ->addUsingAlias(PersonaPeer::DIRECCION_REAL_ID, $direccion->getIdDireccion(), $comparison);
        } elseif ($direccion instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PersonaPeer::DIRECCION_REAL_ID, $direccion->toKeyValue('PrimaryKey', 'IdDireccion'), $comparison);
        } else {
            throw new PropelException('filterByDireccionRelatedByDireccionRealId() only accepts arguments of type Direccion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the DireccionRelatedByDireccionRealId relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PersonaQuery The current query, for fluid interface
     */
    public function joinDireccionRelatedByDireccionRealId($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('DireccionRelatedByDireccionRealId');

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
            $this->addJoinObject($join, 'DireccionRelatedByDireccionRealId');
        }

        return $this;
    }

    /**
     * Use the DireccionRelatedByDireccionRealId relation Direccion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DireccionQuery A secondary query class using the current class as primary query
     */
    public function useDireccionRelatedByDireccionRealIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDireccionRelatedByDireccionRealId($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'DireccionRelatedByDireccionRealId', 'DireccionQuery');
    }

    /**
     * Filter the query by a related PersonaFisica object
     *
     * @param   PersonaFisica|PropelObjectCollection $personaFisica  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PersonaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPersonaFisica($personaFisica, $comparison = null)
    {
        if ($personaFisica instanceof PersonaFisica) {
            return $this
                ->addUsingAlias(PersonaPeer::ID_PERSONA, $personaFisica->getPersonaId(), $comparison);
        } elseif ($personaFisica instanceof PropelObjectCollection) {
            return $this
                ->usePersonaFisicaQuery()
                ->filterByPrimaryKeys($personaFisica->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPersonaFisica() only accepts arguments of type PersonaFisica or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PersonaFisica relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PersonaQuery The current query, for fluid interface
     */
    public function joinPersonaFisica($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PersonaFisica');

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
            $this->addJoinObject($join, 'PersonaFisica');
        }

        return $this;
    }

    /**
     * Use the PersonaFisica relation PersonaFisica object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PersonaFisicaQuery A secondary query class using the current class as primary query
     */
    public function usePersonaFisicaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPersonaFisica($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PersonaFisica', 'PersonaFisicaQuery');
    }

    /**
     * Filter the query by a related PersonaJuridica object
     *
     * @param   PersonaJuridica|PropelObjectCollection $personaJuridica  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PersonaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPersonaJuridica($personaJuridica, $comparison = null)
    {
        if ($personaJuridica instanceof PersonaJuridica) {
            return $this
                ->addUsingAlias(PersonaPeer::ID_PERSONA, $personaJuridica->getPersonaId(), $comparison);
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
     * @return PersonaQuery The current query, for fluid interface
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
     * @param   Persona $persona Object to remove from the list of results
     *
     * @return PersonaQuery The current query, for fluid interface
     */
    public function prune($persona = null)
    {
        if ($persona) {
            $this->addUsingAlias(PersonaPeer::ID_PERSONA, $persona->getIdPersona(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BasePersonaQuery