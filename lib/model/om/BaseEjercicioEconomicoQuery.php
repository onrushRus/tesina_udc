<?php


/**
 * Base class that represents a query for the 'ejercicio_economico' table.
 *
 * 
 *
 * @method     EjercicioEconomicoQuery orderByIdEjercicioEconomico($order = Criteria::ASC) Order by the id_ejercicio_economico column
 * @method     EjercicioEconomicoQuery orderByPersonaJuridicaId($order = Criteria::ASC) Order by the persona_juridica_id column
 * @method     EjercicioEconomicoQuery orderByFechaInicio($order = Criteria::ASC) Order by the fecha_inicio column
 * @method     EjercicioEconomicoQuery orderByFechaFin($order = Criteria::ASC) Order by the fecha_fin column
 * @method     EjercicioEconomicoQuery orderByPresidente($order = Criteria::ASC) Order by the presidente column
 * @method     EjercicioEconomicoQuery orderBySecretario($order = Criteria::ASC) Order by the secretario column
 * @method     EjercicioEconomicoQuery orderByTesorero($order = Criteria::ASC) Order by the tesorero column
 * @method     EjercicioEconomicoQuery orderBySindico($order = Criteria::ASC) Order by the sindico column
 *
 * @method     EjercicioEconomicoQuery groupByIdEjercicioEconomico() Group by the id_ejercicio_economico column
 * @method     EjercicioEconomicoQuery groupByPersonaJuridicaId() Group by the persona_juridica_id column
 * @method     EjercicioEconomicoQuery groupByFechaInicio() Group by the fecha_inicio column
 * @method     EjercicioEconomicoQuery groupByFechaFin() Group by the fecha_fin column
 * @method     EjercicioEconomicoQuery groupByPresidente() Group by the presidente column
 * @method     EjercicioEconomicoQuery groupBySecretario() Group by the secretario column
 * @method     EjercicioEconomicoQuery groupByTesorero() Group by the tesorero column
 * @method     EjercicioEconomicoQuery groupBySindico() Group by the sindico column
 *
 * @method     EjercicioEconomicoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     EjercicioEconomicoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     EjercicioEconomicoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     EjercicioEconomicoQuery leftJoinPersonaJuridica($relationAlias = null) Adds a LEFT JOIN clause to the query using the PersonaJuridica relation
 * @method     EjercicioEconomicoQuery rightJoinPersonaJuridica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PersonaJuridica relation
 * @method     EjercicioEconomicoQuery innerJoinPersonaJuridica($relationAlias = null) Adds a INNER JOIN clause to the query using the PersonaJuridica relation
 *
 * @method     EjercicioEconomico findOne(PropelPDO $con = null) Return the first EjercicioEconomico matching the query
 * @method     EjercicioEconomico findOneOrCreate(PropelPDO $con = null) Return the first EjercicioEconomico matching the query, or a new EjercicioEconomico object populated from the query conditions when no match is found
 *
 * @method     EjercicioEconomico findOneByIdEjercicioEconomico(int $id_ejercicio_economico) Return the first EjercicioEconomico filtered by the id_ejercicio_economico column
 * @method     EjercicioEconomico findOneByPersonaJuridicaId(int $persona_juridica_id) Return the first EjercicioEconomico filtered by the persona_juridica_id column
 * @method     EjercicioEconomico findOneByFechaInicio(string $fecha_inicio) Return the first EjercicioEconomico filtered by the fecha_inicio column
 * @method     EjercicioEconomico findOneByFechaFin(string $fecha_fin) Return the first EjercicioEconomico filtered by the fecha_fin column
 * @method     EjercicioEconomico findOneByPresidente(string $presidente) Return the first EjercicioEconomico filtered by the presidente column
 * @method     EjercicioEconomico findOneBySecretario(string $secretario) Return the first EjercicioEconomico filtered by the secretario column
 * @method     EjercicioEconomico findOneByTesorero(string $tesorero) Return the first EjercicioEconomico filtered by the tesorero column
 * @method     EjercicioEconomico findOneBySindico(string $sindico) Return the first EjercicioEconomico filtered by the sindico column
 *
 * @method     array findByIdEjercicioEconomico(int $id_ejercicio_economico) Return EjercicioEconomico objects filtered by the id_ejercicio_economico column
 * @method     array findByPersonaJuridicaId(int $persona_juridica_id) Return EjercicioEconomico objects filtered by the persona_juridica_id column
 * @method     array findByFechaInicio(string $fecha_inicio) Return EjercicioEconomico objects filtered by the fecha_inicio column
 * @method     array findByFechaFin(string $fecha_fin) Return EjercicioEconomico objects filtered by the fecha_fin column
 * @method     array findByPresidente(string $presidente) Return EjercicioEconomico objects filtered by the presidente column
 * @method     array findBySecretario(string $secretario) Return EjercicioEconomico objects filtered by the secretario column
 * @method     array findByTesorero(string $tesorero) Return EjercicioEconomico objects filtered by the tesorero column
 * @method     array findBySindico(string $sindico) Return EjercicioEconomico objects filtered by the sindico column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseEjercicioEconomicoQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseEjercicioEconomicoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'EjercicioEconomico', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EjercicioEconomicoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     EjercicioEconomicoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EjercicioEconomicoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EjercicioEconomicoQuery) {
            return $criteria;
        }
        $query = new EjercicioEconomicoQuery();
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
     * @return   EjercicioEconomico|EjercicioEconomico[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EjercicioEconomicoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EjercicioEconomicoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   EjercicioEconomico A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_EJERCICIO_ECONOMICO`, `PERSONA_JURIDICA_ID`, `FECHA_INICIO`, `FECHA_FIN`, `PRESIDENTE`, `SECRETARIO`, `TESORERO`, `SINDICO` FROM `ejercicio_economico` WHERE `ID_EJERCICIO_ECONOMICO` = :p0';
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
            $obj = new EjercicioEconomico();
            $obj->hydrate($row);
            EjercicioEconomicoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return EjercicioEconomico|EjercicioEconomico[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|EjercicioEconomico[]|mixed the list of results, formatted by the current formatter
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
     * @return EjercicioEconomicoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EjercicioEconomicoPeer::ID_EJERCICIO_ECONOMICO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EjercicioEconomicoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EjercicioEconomicoPeer::ID_EJERCICIO_ECONOMICO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_ejercicio_economico column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEjercicioEconomico(1234); // WHERE id_ejercicio_economico = 1234
     * $query->filterByIdEjercicioEconomico(array(12, 34)); // WHERE id_ejercicio_economico IN (12, 34)
     * $query->filterByIdEjercicioEconomico(array('min' => 12)); // WHERE id_ejercicio_economico > 12
     * </code>
     *
     * @param     mixed $idEjercicioEconomico The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EjercicioEconomicoQuery The current query, for fluid interface
     */
    public function filterByIdEjercicioEconomico($idEjercicioEconomico = null, $comparison = null)
    {
        if (is_array($idEjercicioEconomico) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(EjercicioEconomicoPeer::ID_EJERCICIO_ECONOMICO, $idEjercicioEconomico, $comparison);
    }

    /**
     * Filter the query on the persona_juridica_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPersonaJuridicaId(1234); // WHERE persona_juridica_id = 1234
     * $query->filterByPersonaJuridicaId(array(12, 34)); // WHERE persona_juridica_id IN (12, 34)
     * $query->filterByPersonaJuridicaId(array('min' => 12)); // WHERE persona_juridica_id > 12
     * </code>
     *
     * @see       filterByPersonaJuridica()
     *
     * @param     mixed $personaJuridicaId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EjercicioEconomicoQuery The current query, for fluid interface
     */
    public function filterByPersonaJuridicaId($personaJuridicaId = null, $comparison = null)
    {
        if (is_array($personaJuridicaId)) {
            $useMinMax = false;
            if (isset($personaJuridicaId['min'])) {
                $this->addUsingAlias(EjercicioEconomicoPeer::PERSONA_JURIDICA_ID, $personaJuridicaId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($personaJuridicaId['max'])) {
                $this->addUsingAlias(EjercicioEconomicoPeer::PERSONA_JURIDICA_ID, $personaJuridicaId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EjercicioEconomicoPeer::PERSONA_JURIDICA_ID, $personaJuridicaId, $comparison);
    }

    /**
     * Filter the query on the fecha_inicio column
     *
     * Example usage:
     * <code>
     * $query->filterByFechaInicio('2011-03-14'); // WHERE fecha_inicio = '2011-03-14'
     * $query->filterByFechaInicio('now'); // WHERE fecha_inicio = '2011-03-14'
     * $query->filterByFechaInicio(array('max' => 'yesterday')); // WHERE fecha_inicio > '2011-03-13'
     * </code>
     *
     * @param     mixed $fechaInicio The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EjercicioEconomicoQuery The current query, for fluid interface
     */
    public function filterByFechaInicio($fechaInicio = null, $comparison = null)
    {
        if (is_array($fechaInicio)) {
            $useMinMax = false;
            if (isset($fechaInicio['min'])) {
                $this->addUsingAlias(EjercicioEconomicoPeer::FECHA_INICIO, $fechaInicio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fechaInicio['max'])) {
                $this->addUsingAlias(EjercicioEconomicoPeer::FECHA_INICIO, $fechaInicio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EjercicioEconomicoPeer::FECHA_INICIO, $fechaInicio, $comparison);
    }

    /**
     * Filter the query on the fecha_fin column
     *
     * Example usage:
     * <code>
     * $query->filterByFechaFin('2011-03-14'); // WHERE fecha_fin = '2011-03-14'
     * $query->filterByFechaFin('now'); // WHERE fecha_fin = '2011-03-14'
     * $query->filterByFechaFin(array('max' => 'yesterday')); // WHERE fecha_fin > '2011-03-13'
     * </code>
     *
     * @param     mixed $fechaFin The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EjercicioEconomicoQuery The current query, for fluid interface
     */
    public function filterByFechaFin($fechaFin = null, $comparison = null)
    {
        if (is_array($fechaFin)) {
            $useMinMax = false;
            if (isset($fechaFin['min'])) {
                $this->addUsingAlias(EjercicioEconomicoPeer::FECHA_FIN, $fechaFin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fechaFin['max'])) {
                $this->addUsingAlias(EjercicioEconomicoPeer::FECHA_FIN, $fechaFin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EjercicioEconomicoPeer::FECHA_FIN, $fechaFin, $comparison);
    }

    /**
     * Filter the query on the presidente column
     *
     * Example usage:
     * <code>
     * $query->filterByPresidente('fooValue');   // WHERE presidente = 'fooValue'
     * $query->filterByPresidente('%fooValue%'); // WHERE presidente LIKE '%fooValue%'
     * </code>
     *
     * @param     string $presidente The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EjercicioEconomicoQuery The current query, for fluid interface
     */
    public function filterByPresidente($presidente = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($presidente)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $presidente)) {
                $presidente = str_replace('*', '%', $presidente);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EjercicioEconomicoPeer::PRESIDENTE, $presidente, $comparison);
    }

    /**
     * Filter the query on the secretario column
     *
     * Example usage:
     * <code>
     * $query->filterBySecretario('fooValue');   // WHERE secretario = 'fooValue'
     * $query->filterBySecretario('%fooValue%'); // WHERE secretario LIKE '%fooValue%'
     * </code>
     *
     * @param     string $secretario The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EjercicioEconomicoQuery The current query, for fluid interface
     */
    public function filterBySecretario($secretario = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($secretario)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $secretario)) {
                $secretario = str_replace('*', '%', $secretario);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EjercicioEconomicoPeer::SECRETARIO, $secretario, $comparison);
    }

    /**
     * Filter the query on the tesorero column
     *
     * Example usage:
     * <code>
     * $query->filterByTesorero('fooValue');   // WHERE tesorero = 'fooValue'
     * $query->filterByTesorero('%fooValue%'); // WHERE tesorero LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tesorero The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EjercicioEconomicoQuery The current query, for fluid interface
     */
    public function filterByTesorero($tesorero = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tesorero)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tesorero)) {
                $tesorero = str_replace('*', '%', $tesorero);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EjercicioEconomicoPeer::TESORERO, $tesorero, $comparison);
    }

    /**
     * Filter the query on the sindico column
     *
     * Example usage:
     * <code>
     * $query->filterBySindico('fooValue');   // WHERE sindico = 'fooValue'
     * $query->filterBySindico('%fooValue%'); // WHERE sindico LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sindico The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EjercicioEconomicoQuery The current query, for fluid interface
     */
    public function filterBySindico($sindico = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sindico)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sindico)) {
                $sindico = str_replace('*', '%', $sindico);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EjercicioEconomicoPeer::SINDICO, $sindico, $comparison);
    }

    /**
     * Filter the query by a related PersonaJuridica object
     *
     * @param   PersonaJuridica|PropelObjectCollection $personaJuridica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   EjercicioEconomicoQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPersonaJuridica($personaJuridica, $comparison = null)
    {
        if ($personaJuridica instanceof PersonaJuridica) {
            return $this
                ->addUsingAlias(EjercicioEconomicoPeer::PERSONA_JURIDICA_ID, $personaJuridica->getPersonaId(), $comparison);
        } elseif ($personaJuridica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EjercicioEconomicoPeer::PERSONA_JURIDICA_ID, $personaJuridica->toKeyValue('PrimaryKey', 'PersonaId'), $comparison);
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
     * @return EjercicioEconomicoQuery The current query, for fluid interface
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
     * @param   EjercicioEconomico $ejercicioEconomico Object to remove from the list of results
     *
     * @return EjercicioEconomicoQuery The current query, for fluid interface
     */
    public function prune($ejercicioEconomico = null)
    {
        if ($ejercicioEconomico) {
            $this->addUsingAlias(EjercicioEconomicoPeer::ID_EJERCICIO_ECONOMICO, $ejercicioEconomico->getIdEjercicioEconomico(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseEjercicioEconomicoQuery