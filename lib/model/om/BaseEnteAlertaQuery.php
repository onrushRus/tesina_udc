<?php


/**
 * Base class that represents a query for the 'ente_alerta' table.
 *
 * 
 *
 * @method     EnteAlertaQuery orderByIdEnteAlerta($order = Criteria::ASC) Order by the id_ente_alerta column
 * @method     EnteAlertaQuery orderByEnteId($order = Criteria::ASC) Order by the ente_id column
 * @method     EnteAlertaQuery orderByAlertaId($order = Criteria::ASC) Order by the alerta_id column
 * @method     EnteAlertaQuery orderByFechaEnvio($order = Criteria::ASC) Order by the fecha_envio column
 * @method     EnteAlertaQuery orderByUsuario($order = Criteria::ASC) Order by the usuario column
 *
 * @method     EnteAlertaQuery groupByIdEnteAlerta() Group by the id_ente_alerta column
 * @method     EnteAlertaQuery groupByEnteId() Group by the ente_id column
 * @method     EnteAlertaQuery groupByAlertaId() Group by the alerta_id column
 * @method     EnteAlertaQuery groupByFechaEnvio() Group by the fecha_envio column
 * @method     EnteAlertaQuery groupByUsuario() Group by the usuario column
 *
 * @method     EnteAlertaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     EnteAlertaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     EnteAlertaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     EnteAlertaQuery leftJoinPersonaJuridica($relationAlias = null) Adds a LEFT JOIN clause to the query using the PersonaJuridica relation
 * @method     EnteAlertaQuery rightJoinPersonaJuridica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PersonaJuridica relation
 * @method     EnteAlertaQuery innerJoinPersonaJuridica($relationAlias = null) Adds a INNER JOIN clause to the query using the PersonaJuridica relation
 *
 * @method     EnteAlertaQuery leftJoinAlerta($relationAlias = null) Adds a LEFT JOIN clause to the query using the Alerta relation
 * @method     EnteAlertaQuery rightJoinAlerta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Alerta relation
 * @method     EnteAlertaQuery innerJoinAlerta($relationAlias = null) Adds a INNER JOIN clause to the query using the Alerta relation
 *
 * @method     EnteAlerta findOne(PropelPDO $con = null) Return the first EnteAlerta matching the query
 * @method     EnteAlerta findOneOrCreate(PropelPDO $con = null) Return the first EnteAlerta matching the query, or a new EnteAlerta object populated from the query conditions when no match is found
 *
 * @method     EnteAlerta findOneByIdEnteAlerta(int $id_ente_alerta) Return the first EnteAlerta filtered by the id_ente_alerta column
 * @method     EnteAlerta findOneByEnteId(int $ente_id) Return the first EnteAlerta filtered by the ente_id column
 * @method     EnteAlerta findOneByAlertaId(int $alerta_id) Return the first EnteAlerta filtered by the alerta_id column
 * @method     EnteAlerta findOneByFechaEnvio(string $fecha_envio) Return the first EnteAlerta filtered by the fecha_envio column
 * @method     EnteAlerta findOneByUsuario(string $usuario) Return the first EnteAlerta filtered by the usuario column
 *
 * @method     array findByIdEnteAlerta(int $id_ente_alerta) Return EnteAlerta objects filtered by the id_ente_alerta column
 * @method     array findByEnteId(int $ente_id) Return EnteAlerta objects filtered by the ente_id column
 * @method     array findByAlertaId(int $alerta_id) Return EnteAlerta objects filtered by the alerta_id column
 * @method     array findByFechaEnvio(string $fecha_envio) Return EnteAlerta objects filtered by the fecha_envio column
 * @method     array findByUsuario(string $usuario) Return EnteAlerta objects filtered by the usuario column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseEnteAlertaQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseEnteAlertaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'EnteAlerta', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EnteAlertaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     EnteAlertaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EnteAlertaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EnteAlertaQuery) {
            return $criteria;
        }
        $query = new EnteAlertaQuery();
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
     * @return   EnteAlerta|EnteAlerta[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EnteAlertaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EnteAlertaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   EnteAlerta A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_ENTE_ALERTA`, `ENTE_ID`, `ALERTA_ID`, `FECHA_ENVIO`, `USUARIO` FROM `ente_alerta` WHERE `ID_ENTE_ALERTA` = :p0';
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
            $obj = new EnteAlerta();
            $obj->hydrate($row);
            EnteAlertaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return EnteAlerta|EnteAlerta[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|EnteAlerta[]|mixed the list of results, formatted by the current formatter
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
     * @return EnteAlertaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EnteAlertaPeer::ID_ENTE_ALERTA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EnteAlertaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EnteAlertaPeer::ID_ENTE_ALERTA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_ente_alerta column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEnteAlerta(1234); // WHERE id_ente_alerta = 1234
     * $query->filterByIdEnteAlerta(array(12, 34)); // WHERE id_ente_alerta IN (12, 34)
     * $query->filterByIdEnteAlerta(array('min' => 12)); // WHERE id_ente_alerta > 12
     * </code>
     *
     * @param     mixed $idEnteAlerta The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EnteAlertaQuery The current query, for fluid interface
     */
    public function filterByIdEnteAlerta($idEnteAlerta = null, $comparison = null)
    {
        if (is_array($idEnteAlerta) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(EnteAlertaPeer::ID_ENTE_ALERTA, $idEnteAlerta, $comparison);
    }

    /**
     * Filter the query on the ente_id column
     *
     * Example usage:
     * <code>
     * $query->filterByEnteId(1234); // WHERE ente_id = 1234
     * $query->filterByEnteId(array(12, 34)); // WHERE ente_id IN (12, 34)
     * $query->filterByEnteId(array('min' => 12)); // WHERE ente_id > 12
     * </code>
     *
     * @see       filterByPersonaJuridica()
     *
     * @param     mixed $enteId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EnteAlertaQuery The current query, for fluid interface
     */
    public function filterByEnteId($enteId = null, $comparison = null)
    {
        if (is_array($enteId)) {
            $useMinMax = false;
            if (isset($enteId['min'])) {
                $this->addUsingAlias(EnteAlertaPeer::ENTE_ID, $enteId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($enteId['max'])) {
                $this->addUsingAlias(EnteAlertaPeer::ENTE_ID, $enteId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EnteAlertaPeer::ENTE_ID, $enteId, $comparison);
    }

    /**
     * Filter the query on the alerta_id column
     *
     * Example usage:
     * <code>
     * $query->filterByAlertaId(1234); // WHERE alerta_id = 1234
     * $query->filterByAlertaId(array(12, 34)); // WHERE alerta_id IN (12, 34)
     * $query->filterByAlertaId(array('min' => 12)); // WHERE alerta_id > 12
     * </code>
     *
     * @see       filterByAlerta()
     *
     * @param     mixed $alertaId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EnteAlertaQuery The current query, for fluid interface
     */
    public function filterByAlertaId($alertaId = null, $comparison = null)
    {
        if (is_array($alertaId)) {
            $useMinMax = false;
            if (isset($alertaId['min'])) {
                $this->addUsingAlias(EnteAlertaPeer::ALERTA_ID, $alertaId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($alertaId['max'])) {
                $this->addUsingAlias(EnteAlertaPeer::ALERTA_ID, $alertaId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EnteAlertaPeer::ALERTA_ID, $alertaId, $comparison);
    }

    /**
     * Filter the query on the fecha_envio column
     *
     * Example usage:
     * <code>
     * $query->filterByFechaEnvio('2011-03-14'); // WHERE fecha_envio = '2011-03-14'
     * $query->filterByFechaEnvio('now'); // WHERE fecha_envio = '2011-03-14'
     * $query->filterByFechaEnvio(array('max' => 'yesterday')); // WHERE fecha_envio > '2011-03-13'
     * </code>
     *
     * @param     mixed $fechaEnvio The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EnteAlertaQuery The current query, for fluid interface
     */
    public function filterByFechaEnvio($fechaEnvio = null, $comparison = null)
    {
        if (is_array($fechaEnvio)) {
            $useMinMax = false;
            if (isset($fechaEnvio['min'])) {
                $this->addUsingAlias(EnteAlertaPeer::FECHA_ENVIO, $fechaEnvio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fechaEnvio['max'])) {
                $this->addUsingAlias(EnteAlertaPeer::FECHA_ENVIO, $fechaEnvio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EnteAlertaPeer::FECHA_ENVIO, $fechaEnvio, $comparison);
    }

    /**
     * Filter the query on the usuario column
     *
     * Example usage:
     * <code>
     * $query->filterByUsuario('fooValue');   // WHERE usuario = 'fooValue'
     * $query->filterByUsuario('%fooValue%'); // WHERE usuario LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usuario The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EnteAlertaQuery The current query, for fluid interface
     */
    public function filterByUsuario($usuario = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usuario)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usuario)) {
                $usuario = str_replace('*', '%', $usuario);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EnteAlertaPeer::USUARIO, $usuario, $comparison);
    }

    /**
     * Filter the query by a related PersonaJuridica object
     *
     * @param   PersonaJuridica|PropelObjectCollection $personaJuridica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   EnteAlertaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPersonaJuridica($personaJuridica, $comparison = null)
    {
        if ($personaJuridica instanceof PersonaJuridica) {
            return $this
                ->addUsingAlias(EnteAlertaPeer::ENTE_ID, $personaJuridica->getIdPersonaJuridica(), $comparison);
        } elseif ($personaJuridica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EnteAlertaPeer::ENTE_ID, $personaJuridica->toKeyValue('PrimaryKey', 'IdPersonaJuridica'), $comparison);
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
     * @return EnteAlertaQuery The current query, for fluid interface
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
     * Filter the query by a related Alerta object
     *
     * @param   Alerta|PropelObjectCollection $alerta The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   EnteAlertaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByAlerta($alerta, $comparison = null)
    {
        if ($alerta instanceof Alerta) {
            return $this
                ->addUsingAlias(EnteAlertaPeer::ALERTA_ID, $alerta->getIdTipoAlerta(), $comparison);
        } elseif ($alerta instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EnteAlertaPeer::ALERTA_ID, $alerta->toKeyValue('PrimaryKey', 'IdTipoAlerta'), $comparison);
        } else {
            throw new PropelException('filterByAlerta() only accepts arguments of type Alerta or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Alerta relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EnteAlertaQuery The current query, for fluid interface
     */
    public function joinAlerta($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Alerta');

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
            $this->addJoinObject($join, 'Alerta');
        }

        return $this;
    }

    /**
     * Use the Alerta relation Alerta object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AlertaQuery A secondary query class using the current class as primary query
     */
    public function useAlertaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAlerta($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Alerta', 'AlertaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   EnteAlerta $enteAlerta Object to remove from the list of results
     *
     * @return EnteAlertaQuery The current query, for fluid interface
     */
    public function prune($enteAlerta = null)
    {
        if ($enteAlerta) {
            $this->addUsingAlias(EnteAlertaPeer::ID_ENTE_ALERTA, $enteAlerta->getIdEnteAlerta(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseEnteAlertaQuery