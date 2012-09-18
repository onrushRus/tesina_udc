<?php


/**
 * Base class that represents a query for the 'persona_comision_directiva' table.
 *
 * 
 *
 * @method     PersonaComisionDirectivaQuery orderByIdPersonaComisionDirectiva($order = Criteria::ASC) Order by the id_persona_comision_directiva column
 * @method     PersonaComisionDirectivaQuery orderByEjercicioEconomicoId($order = Criteria::ASC) Order by the ejercicio_economico_id column
 * @method     PersonaComisionDirectivaQuery orderByPuestoId($order = Criteria::ASC) Order by the puesto_id column
 * @method     PersonaComisionDirectivaQuery orderByNombreYApellido($order = Criteria::ASC) Order by the nombre_y_apellido column
 * @method     PersonaComisionDirectivaQuery orderByTelefono($order = Criteria::ASC) Order by the telefono column
 * @method     PersonaComisionDirectivaQuery orderByEmail($order = Criteria::ASC) Order by the email column
 *
 * @method     PersonaComisionDirectivaQuery groupByIdPersonaComisionDirectiva() Group by the id_persona_comision_directiva column
 * @method     PersonaComisionDirectivaQuery groupByEjercicioEconomicoId() Group by the ejercicio_economico_id column
 * @method     PersonaComisionDirectivaQuery groupByPuestoId() Group by the puesto_id column
 * @method     PersonaComisionDirectivaQuery groupByNombreYApellido() Group by the nombre_y_apellido column
 * @method     PersonaComisionDirectivaQuery groupByTelefono() Group by the telefono column
 * @method     PersonaComisionDirectivaQuery groupByEmail() Group by the email column
 *
 * @method     PersonaComisionDirectivaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PersonaComisionDirectivaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PersonaComisionDirectivaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PersonaComisionDirectivaQuery leftJoinEjercicioEconomico($relationAlias = null) Adds a LEFT JOIN clause to the query using the EjercicioEconomico relation
 * @method     PersonaComisionDirectivaQuery rightJoinEjercicioEconomico($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EjercicioEconomico relation
 * @method     PersonaComisionDirectivaQuery innerJoinEjercicioEconomico($relationAlias = null) Adds a INNER JOIN clause to the query using the EjercicioEconomico relation
 *
 * @method     PersonaComisionDirectivaQuery leftJoinPuestoComisionDirectiva($relationAlias = null) Adds a LEFT JOIN clause to the query using the PuestoComisionDirectiva relation
 * @method     PersonaComisionDirectivaQuery rightJoinPuestoComisionDirectiva($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PuestoComisionDirectiva relation
 * @method     PersonaComisionDirectivaQuery innerJoinPuestoComisionDirectiva($relationAlias = null) Adds a INNER JOIN clause to the query using the PuestoComisionDirectiva relation
 *
 * @method     PersonaComisionDirectiva findOne(PropelPDO $con = null) Return the first PersonaComisionDirectiva matching the query
 * @method     PersonaComisionDirectiva findOneOrCreate(PropelPDO $con = null) Return the first PersonaComisionDirectiva matching the query, or a new PersonaComisionDirectiva object populated from the query conditions when no match is found
 *
 * @method     PersonaComisionDirectiva findOneByIdPersonaComisionDirectiva(int $id_persona_comision_directiva) Return the first PersonaComisionDirectiva filtered by the id_persona_comision_directiva column
 * @method     PersonaComisionDirectiva findOneByEjercicioEconomicoId(int $ejercicio_economico_id) Return the first PersonaComisionDirectiva filtered by the ejercicio_economico_id column
 * @method     PersonaComisionDirectiva findOneByPuestoId(int $puesto_id) Return the first PersonaComisionDirectiva filtered by the puesto_id column
 * @method     PersonaComisionDirectiva findOneByNombreYApellido(string $nombre_y_apellido) Return the first PersonaComisionDirectiva filtered by the nombre_y_apellido column
 * @method     PersonaComisionDirectiva findOneByTelefono(string $telefono) Return the first PersonaComisionDirectiva filtered by the telefono column
 * @method     PersonaComisionDirectiva findOneByEmail(string $email) Return the first PersonaComisionDirectiva filtered by the email column
 *
 * @method     array findByIdPersonaComisionDirectiva(int $id_persona_comision_directiva) Return PersonaComisionDirectiva objects filtered by the id_persona_comision_directiva column
 * @method     array findByEjercicioEconomicoId(int $ejercicio_economico_id) Return PersonaComisionDirectiva objects filtered by the ejercicio_economico_id column
 * @method     array findByPuestoId(int $puesto_id) Return PersonaComisionDirectiva objects filtered by the puesto_id column
 * @method     array findByNombreYApellido(string $nombre_y_apellido) Return PersonaComisionDirectiva objects filtered by the nombre_y_apellido column
 * @method     array findByTelefono(string $telefono) Return PersonaComisionDirectiva objects filtered by the telefono column
 * @method     array findByEmail(string $email) Return PersonaComisionDirectiva objects filtered by the email column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePersonaComisionDirectivaQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BasePersonaComisionDirectivaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'PersonaComisionDirectiva', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PersonaComisionDirectivaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     PersonaComisionDirectivaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PersonaComisionDirectivaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PersonaComisionDirectivaQuery) {
            return $criteria;
        }
        $query = new PersonaComisionDirectivaQuery();
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
     * @return   PersonaComisionDirectiva|PersonaComisionDirectiva[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PersonaComisionDirectivaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PersonaComisionDirectivaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   PersonaComisionDirectiva A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_PERSONA_COMISION_DIRECTIVA`, `EJERCICIO_ECONOMICO_ID`, `PUESTO_ID`, `NOMBRE_Y_APELLIDO`, `TELEFONO`, `EMAIL` FROM `persona_comision_directiva` WHERE `ID_PERSONA_COMISION_DIRECTIVA` = :p0';
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
            $obj = new PersonaComisionDirectiva();
            $obj->hydrate($row);
            PersonaComisionDirectivaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return PersonaComisionDirectiva|PersonaComisionDirectiva[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|PersonaComisionDirectiva[]|mixed the list of results, formatted by the current formatter
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
     * @return PersonaComisionDirectivaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PersonaComisionDirectivaPeer::ID_PERSONA_COMISION_DIRECTIVA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PersonaComisionDirectivaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PersonaComisionDirectivaPeer::ID_PERSONA_COMISION_DIRECTIVA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_persona_comision_directiva column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPersonaComisionDirectiva(1234); // WHERE id_persona_comision_directiva = 1234
     * $query->filterByIdPersonaComisionDirectiva(array(12, 34)); // WHERE id_persona_comision_directiva IN (12, 34)
     * $query->filterByIdPersonaComisionDirectiva(array('min' => 12)); // WHERE id_persona_comision_directiva > 12
     * </code>
     *
     * @param     mixed $idPersonaComisionDirectiva The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaComisionDirectivaQuery The current query, for fluid interface
     */
    public function filterByIdPersonaComisionDirectiva($idPersonaComisionDirectiva = null, $comparison = null)
    {
        if (is_array($idPersonaComisionDirectiva) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(PersonaComisionDirectivaPeer::ID_PERSONA_COMISION_DIRECTIVA, $idPersonaComisionDirectiva, $comparison);
    }

    /**
     * Filter the query on the ejercicio_economico_id column
     *
     * Example usage:
     * <code>
     * $query->filterByEjercicioEconomicoId(1234); // WHERE ejercicio_economico_id = 1234
     * $query->filterByEjercicioEconomicoId(array(12, 34)); // WHERE ejercicio_economico_id IN (12, 34)
     * $query->filterByEjercicioEconomicoId(array('min' => 12)); // WHERE ejercicio_economico_id > 12
     * </code>
     *
     * @see       filterByEjercicioEconomico()
     *
     * @param     mixed $ejercicioEconomicoId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaComisionDirectivaQuery The current query, for fluid interface
     */
    public function filterByEjercicioEconomicoId($ejercicioEconomicoId = null, $comparison = null)
    {
        if (is_array($ejercicioEconomicoId)) {
            $useMinMax = false;
            if (isset($ejercicioEconomicoId['min'])) {
                $this->addUsingAlias(PersonaComisionDirectivaPeer::EJERCICIO_ECONOMICO_ID, $ejercicioEconomicoId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ejercicioEconomicoId['max'])) {
                $this->addUsingAlias(PersonaComisionDirectivaPeer::EJERCICIO_ECONOMICO_ID, $ejercicioEconomicoId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PersonaComisionDirectivaPeer::EJERCICIO_ECONOMICO_ID, $ejercicioEconomicoId, $comparison);
    }

    /**
     * Filter the query on the puesto_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPuestoId(1234); // WHERE puesto_id = 1234
     * $query->filterByPuestoId(array(12, 34)); // WHERE puesto_id IN (12, 34)
     * $query->filterByPuestoId(array('min' => 12)); // WHERE puesto_id > 12
     * </code>
     *
     * @see       filterByPuestoComisionDirectiva()
     *
     * @param     mixed $puestoId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaComisionDirectivaQuery The current query, for fluid interface
     */
    public function filterByPuestoId($puestoId = null, $comparison = null)
    {
        if (is_array($puestoId)) {
            $useMinMax = false;
            if (isset($puestoId['min'])) {
                $this->addUsingAlias(PersonaComisionDirectivaPeer::PUESTO_ID, $puestoId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($puestoId['max'])) {
                $this->addUsingAlias(PersonaComisionDirectivaPeer::PUESTO_ID, $puestoId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PersonaComisionDirectivaPeer::PUESTO_ID, $puestoId, $comparison);
    }

    /**
     * Filter the query on the nombre_y_apellido column
     *
     * Example usage:
     * <code>
     * $query->filterByNombreYApellido('fooValue');   // WHERE nombre_y_apellido = 'fooValue'
     * $query->filterByNombreYApellido('%fooValue%'); // WHERE nombre_y_apellido LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nombreYApellido The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaComisionDirectivaQuery The current query, for fluid interface
     */
    public function filterByNombreYApellido($nombreYApellido = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nombreYApellido)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nombreYApellido)) {
                $nombreYApellido = str_replace('*', '%', $nombreYApellido);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PersonaComisionDirectivaPeer::NOMBRE_Y_APELLIDO, $nombreYApellido, $comparison);
    }

    /**
     * Filter the query on the telefono column
     *
     * Example usage:
     * <code>
     * $query->filterByTelefono('fooValue');   // WHERE telefono = 'fooValue'
     * $query->filterByTelefono('%fooValue%'); // WHERE telefono LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telefono The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaComisionDirectivaQuery The current query, for fluid interface
     */
    public function filterByTelefono($telefono = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telefono)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telefono)) {
                $telefono = str_replace('*', '%', $telefono);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PersonaComisionDirectivaPeer::TELEFONO, $telefono, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaComisionDirectivaQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PersonaComisionDirectivaPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query by a related EjercicioEconomico object
     *
     * @param   EjercicioEconomico|PropelObjectCollection $ejercicioEconomico The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PersonaComisionDirectivaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByEjercicioEconomico($ejercicioEconomico, $comparison = null)
    {
        if ($ejercicioEconomico instanceof EjercicioEconomico) {
            return $this
                ->addUsingAlias(PersonaComisionDirectivaPeer::EJERCICIO_ECONOMICO_ID, $ejercicioEconomico->getIdEjercicioEconomico(), $comparison);
        } elseif ($ejercicioEconomico instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PersonaComisionDirectivaPeer::EJERCICIO_ECONOMICO_ID, $ejercicioEconomico->toKeyValue('PrimaryKey', 'IdEjercicioEconomico'), $comparison);
        } else {
            throw new PropelException('filterByEjercicioEconomico() only accepts arguments of type EjercicioEconomico or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EjercicioEconomico relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PersonaComisionDirectivaQuery The current query, for fluid interface
     */
    public function joinEjercicioEconomico($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EjercicioEconomico');

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
            $this->addJoinObject($join, 'EjercicioEconomico');
        }

        return $this;
    }

    /**
     * Use the EjercicioEconomico relation EjercicioEconomico object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EjercicioEconomicoQuery A secondary query class using the current class as primary query
     */
    public function useEjercicioEconomicoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEjercicioEconomico($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EjercicioEconomico', 'EjercicioEconomicoQuery');
    }

    /**
     * Filter the query by a related PuestoComisionDirectiva object
     *
     * @param   PuestoComisionDirectiva|PropelObjectCollection $puestoComisionDirectiva The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PersonaComisionDirectivaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPuestoComisionDirectiva($puestoComisionDirectiva, $comparison = null)
    {
        if ($puestoComisionDirectiva instanceof PuestoComisionDirectiva) {
            return $this
                ->addUsingAlias(PersonaComisionDirectivaPeer::PUESTO_ID, $puestoComisionDirectiva->getIdPuestoComisionDirectiva(), $comparison);
        } elseif ($puestoComisionDirectiva instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PersonaComisionDirectivaPeer::PUESTO_ID, $puestoComisionDirectiva->toKeyValue('PrimaryKey', 'IdPuestoComisionDirectiva'), $comparison);
        } else {
            throw new PropelException('filterByPuestoComisionDirectiva() only accepts arguments of type PuestoComisionDirectiva or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PuestoComisionDirectiva relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PersonaComisionDirectivaQuery The current query, for fluid interface
     */
    public function joinPuestoComisionDirectiva($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PuestoComisionDirectiva');

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
            $this->addJoinObject($join, 'PuestoComisionDirectiva');
        }

        return $this;
    }

    /**
     * Use the PuestoComisionDirectiva relation PuestoComisionDirectiva object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PuestoComisionDirectivaQuery A secondary query class using the current class as primary query
     */
    public function usePuestoComisionDirectivaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPuestoComisionDirectiva($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PuestoComisionDirectiva', 'PuestoComisionDirectivaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   PersonaComisionDirectiva $personaComisionDirectiva Object to remove from the list of results
     *
     * @return PersonaComisionDirectivaQuery The current query, for fluid interface
     */
    public function prune($personaComisionDirectiva = null)
    {
        if ($personaComisionDirectiva) {
            $this->addUsingAlias(PersonaComisionDirectivaPeer::ID_PERSONA_COMISION_DIRECTIVA, $personaComisionDirectiva->getIdPersonaComisionDirectiva(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BasePersonaComisionDirectivaQuery