<?php


/**
 * Base class that represents a query for the 'aporte' table.
 *
 * 
 *
 * @method     AporteQuery orderByIdAporte($order = Criteria::ASC) Order by the id_aporte column
 * @method     AporteQuery orderByPersonaJuridicaId($order = Criteria::ASC) Order by the persona_juridica_id column
 * @method     AporteQuery orderByFechaAporte($order = Criteria::ASC) Order by the fecha_aporte column
 * @method     AporteQuery orderByMontoAporte($order = Criteria::ASC) Order by the monto_aporte column
 * @method     AporteQuery orderByNumeroExpediente($order = Criteria::ASC) Order by the numero_expediente column
 *
 * @method     AporteQuery groupByIdAporte() Group by the id_aporte column
 * @method     AporteQuery groupByPersonaJuridicaId() Group by the persona_juridica_id column
 * @method     AporteQuery groupByFechaAporte() Group by the fecha_aporte column
 * @method     AporteQuery groupByMontoAporte() Group by the monto_aporte column
 * @method     AporteQuery groupByNumeroExpediente() Group by the numero_expediente column
 *
 * @method     AporteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AporteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AporteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AporteQuery leftJoinPersonaJuridica($relationAlias = null) Adds a LEFT JOIN clause to the query using the PersonaJuridica relation
 * @method     AporteQuery rightJoinPersonaJuridica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PersonaJuridica relation
 * @method     AporteQuery innerJoinPersonaJuridica($relationAlias = null) Adds a INNER JOIN clause to the query using the PersonaJuridica relation
 *
 * @method     Aporte findOne(PropelPDO $con = null) Return the first Aporte matching the query
 * @method     Aporte findOneOrCreate(PropelPDO $con = null) Return the first Aporte matching the query, or a new Aporte object populated from the query conditions when no match is found
 *
 * @method     Aporte findOneByIdAporte(int $id_aporte) Return the first Aporte filtered by the id_aporte column
 * @method     Aporte findOneByPersonaJuridicaId(int $persona_juridica_id) Return the first Aporte filtered by the persona_juridica_id column
 * @method     Aporte findOneByFechaAporte(string $fecha_aporte) Return the first Aporte filtered by the fecha_aporte column
 * @method     Aporte findOneByMontoAporte(string $monto_aporte) Return the first Aporte filtered by the monto_aporte column
 * @method     Aporte findOneByNumeroExpediente(string $numero_expediente) Return the first Aporte filtered by the numero_expediente column
 *
 * @method     array findByIdAporte(int $id_aporte) Return Aporte objects filtered by the id_aporte column
 * @method     array findByPersonaJuridicaId(int $persona_juridica_id) Return Aporte objects filtered by the persona_juridica_id column
 * @method     array findByFechaAporte(string $fecha_aporte) Return Aporte objects filtered by the fecha_aporte column
 * @method     array findByMontoAporte(string $monto_aporte) Return Aporte objects filtered by the monto_aporte column
 * @method     array findByNumeroExpediente(string $numero_expediente) Return Aporte objects filtered by the numero_expediente column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseAporteQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseAporteQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Aporte', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AporteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     AporteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AporteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AporteQuery) {
            return $criteria;
        }
        $query = new AporteQuery();
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
     * @return   Aporte|Aporte[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AportePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AportePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Aporte A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_APORTE`, `PERSONA_JURIDICA_ID`, `FECHA_APORTE`, `MONTO_APORTE`, `NUMERO_EXPEDIENTE` FROM `aporte` WHERE `ID_APORTE` = :p0';
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
            $obj = new Aporte();
            $obj->hydrate($row);
            AportePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Aporte|Aporte[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Aporte[]|mixed the list of results, formatted by the current formatter
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
     * @return AporteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AportePeer::ID_APORTE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AporteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AportePeer::ID_APORTE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_aporte column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAporte(1234); // WHERE id_aporte = 1234
     * $query->filterByIdAporte(array(12, 34)); // WHERE id_aporte IN (12, 34)
     * $query->filterByIdAporte(array('min' => 12)); // WHERE id_aporte > 12
     * </code>
     *
     * @param     mixed $idAporte The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AporteQuery The current query, for fluid interface
     */
    public function filterByIdAporte($idAporte = null, $comparison = null)
    {
        if (is_array($idAporte) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(AportePeer::ID_APORTE, $idAporte, $comparison);
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
     * @return AporteQuery The current query, for fluid interface
     */
    public function filterByPersonaJuridicaId($personaJuridicaId = null, $comparison = null)
    {
        if (is_array($personaJuridicaId)) {
            $useMinMax = false;
            if (isset($personaJuridicaId['min'])) {
                $this->addUsingAlias(AportePeer::PERSONA_JURIDICA_ID, $personaJuridicaId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($personaJuridicaId['max'])) {
                $this->addUsingAlias(AportePeer::PERSONA_JURIDICA_ID, $personaJuridicaId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AportePeer::PERSONA_JURIDICA_ID, $personaJuridicaId, $comparison);
    }

    /**
     * Filter the query on the fecha_aporte column
     *
     * Example usage:
     * <code>
     * $query->filterByFechaAporte('2011-03-14'); // WHERE fecha_aporte = '2011-03-14'
     * $query->filterByFechaAporte('now'); // WHERE fecha_aporte = '2011-03-14'
     * $query->filterByFechaAporte(array('max' => 'yesterday')); // WHERE fecha_aporte > '2011-03-13'
     * </code>
     *
     * @param     mixed $fechaAporte The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AporteQuery The current query, for fluid interface
     */
    public function filterByFechaAporte($fechaAporte = null, $comparison = null)
    {
        if (is_array($fechaAporte)) {
            $useMinMax = false;
            if (isset($fechaAporte['min'])) {
                $this->addUsingAlias(AportePeer::FECHA_APORTE, $fechaAporte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fechaAporte['max'])) {
                $this->addUsingAlias(AportePeer::FECHA_APORTE, $fechaAporte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AportePeer::FECHA_APORTE, $fechaAporte, $comparison);
    }

    /**
     * Filter the query on the monto_aporte column
     *
     * Example usage:
     * <code>
     * $query->filterByMontoAporte(1234); // WHERE monto_aporte = 1234
     * $query->filterByMontoAporte(array(12, 34)); // WHERE monto_aporte IN (12, 34)
     * $query->filterByMontoAporte(array('min' => 12)); // WHERE monto_aporte > 12
     * </code>
     *
     * @param     mixed $montoAporte The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AporteQuery The current query, for fluid interface
     */
    public function filterByMontoAporte($montoAporte = null, $comparison = null)
    {
        if (is_array($montoAporte)) {
            $useMinMax = false;
            if (isset($montoAporte['min'])) {
                $this->addUsingAlias(AportePeer::MONTO_APORTE, $montoAporte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montoAporte['max'])) {
                $this->addUsingAlias(AportePeer::MONTO_APORTE, $montoAporte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AportePeer::MONTO_APORTE, $montoAporte, $comparison);
    }

    /**
     * Filter the query on the numero_expediente column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroExpediente('fooValue');   // WHERE numero_expediente = 'fooValue'
     * $query->filterByNumeroExpediente('%fooValue%'); // WHERE numero_expediente LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroExpediente The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AporteQuery The current query, for fluid interface
     */
    public function filterByNumeroExpediente($numeroExpediente = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroExpediente)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroExpediente)) {
                $numeroExpediente = str_replace('*', '%', $numeroExpediente);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AportePeer::NUMERO_EXPEDIENTE, $numeroExpediente, $comparison);
    }

    /**
     * Filter the query by a related PersonaJuridica object
     *
     * @param   PersonaJuridica|PropelObjectCollection $personaJuridica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   AporteQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPersonaJuridica($personaJuridica, $comparison = null)
    {
        if ($personaJuridica instanceof PersonaJuridica) {
            return $this
                ->addUsingAlias(AportePeer::PERSONA_JURIDICA_ID, $personaJuridica->getIdPersonaJuridica(), $comparison);
        } elseif ($personaJuridica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AportePeer::PERSONA_JURIDICA_ID, $personaJuridica->toKeyValue('PrimaryKey', 'IdPersonaJuridica'), $comparison);
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
     * @return AporteQuery The current query, for fluid interface
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
     * @param   Aporte $aporte Object to remove from the list of results
     *
     * @return AporteQuery The current query, for fluid interface
     */
    public function prune($aporte = null)
    {
        if ($aporte) {
            $this->addUsingAlias(AportePeer::ID_APORTE, $aporte->getIdAporte(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseAporteQuery