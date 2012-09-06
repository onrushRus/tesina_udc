<?php


/**
 * Base class that represents a query for the 'direccion' table.
 *
 * 
 *
 * @method     DireccionQuery orderByIdDireccion($order = Criteria::ASC) Order by the id_direccion column
 * @method     DireccionQuery orderByCalle($order = Criteria::ASC) Order by the calle column
 * @method     DireccionQuery orderByNumero($order = Criteria::ASC) Order by the numero column
 * @method     DireccionQuery orderByPiso($order = Criteria::ASC) Order by the piso column
 * @method     DireccionQuery orderByDepartamento($order = Criteria::ASC) Order by the departamento column
 * @method     DireccionQuery orderByPersonaIdPersona($order = Criteria::ASC) Order by the persona_id_persona column
 * @method     DireccionQuery orderByTipoDireccionId($order = Criteria::ASC) Order by the tipo_direccion_id_ column
 * @method     DireccionQuery orderByLocalidadIdLocalidad($order = Criteria::ASC) Order by the localidad_id_localidad column
 *
 * @method     DireccionQuery groupByIdDireccion() Group by the id_direccion column
 * @method     DireccionQuery groupByCalle() Group by the calle column
 * @method     DireccionQuery groupByNumero() Group by the numero column
 * @method     DireccionQuery groupByPiso() Group by the piso column
 * @method     DireccionQuery groupByDepartamento() Group by the departamento column
 * @method     DireccionQuery groupByPersonaIdPersona() Group by the persona_id_persona column
 * @method     DireccionQuery groupByTipoDireccionId() Group by the tipo_direccion_id_ column
 * @method     DireccionQuery groupByLocalidadIdLocalidad() Group by the localidad_id_localidad column
 *
 * @method     DireccionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DireccionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DireccionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     DireccionQuery leftJoinPersona($relationAlias = null) Adds a LEFT JOIN clause to the query using the Persona relation
 * @method     DireccionQuery rightJoinPersona($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Persona relation
 * @method     DireccionQuery innerJoinPersona($relationAlias = null) Adds a INNER JOIN clause to the query using the Persona relation
 *
 * @method     DireccionQuery leftJoinTipoDireccion($relationAlias = null) Adds a LEFT JOIN clause to the query using the TipoDireccion relation
 * @method     DireccionQuery rightJoinTipoDireccion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TipoDireccion relation
 * @method     DireccionQuery innerJoinTipoDireccion($relationAlias = null) Adds a INNER JOIN clause to the query using the TipoDireccion relation
 *
 * @method     DireccionQuery leftJoinLocalidad($relationAlias = null) Adds a LEFT JOIN clause to the query using the Localidad relation
 * @method     DireccionQuery rightJoinLocalidad($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Localidad relation
 * @method     DireccionQuery innerJoinLocalidad($relationAlias = null) Adds a INNER JOIN clause to the query using the Localidad relation
 *
 * @method     Direccion findOne(PropelPDO $con = null) Return the first Direccion matching the query
 * @method     Direccion findOneOrCreate(PropelPDO $con = null) Return the first Direccion matching the query, or a new Direccion object populated from the query conditions when no match is found
 *
 * @method     Direccion findOneByIdDireccion(int $id_direccion) Return the first Direccion filtered by the id_direccion column
 * @method     Direccion findOneByCalle(string $calle) Return the first Direccion filtered by the calle column
 * @method     Direccion findOneByNumero(string $numero) Return the first Direccion filtered by the numero column
 * @method     Direccion findOneByPiso(string $piso) Return the first Direccion filtered by the piso column
 * @method     Direccion findOneByDepartamento(string $departamento) Return the first Direccion filtered by the departamento column
 * @method     Direccion findOneByPersonaIdPersona(int $persona_id_persona) Return the first Direccion filtered by the persona_id_persona column
 * @method     Direccion findOneByTipoDireccionId(int $tipo_direccion_id_) Return the first Direccion filtered by the tipo_direccion_id_ column
 * @method     Direccion findOneByLocalidadIdLocalidad(int $localidad_id_localidad) Return the first Direccion filtered by the localidad_id_localidad column
 *
 * @method     array findByIdDireccion(int $id_direccion) Return Direccion objects filtered by the id_direccion column
 * @method     array findByCalle(string $calle) Return Direccion objects filtered by the calle column
 * @method     array findByNumero(string $numero) Return Direccion objects filtered by the numero column
 * @method     array findByPiso(string $piso) Return Direccion objects filtered by the piso column
 * @method     array findByDepartamento(string $departamento) Return Direccion objects filtered by the departamento column
 * @method     array findByPersonaIdPersona(int $persona_id_persona) Return Direccion objects filtered by the persona_id_persona column
 * @method     array findByTipoDireccionId(int $tipo_direccion_id_) Return Direccion objects filtered by the tipo_direccion_id_ column
 * @method     array findByLocalidadIdLocalidad(int $localidad_id_localidad) Return Direccion objects filtered by the localidad_id_localidad column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseDireccionQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseDireccionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Direccion', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DireccionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     DireccionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return DireccionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DireccionQuery) {
            return $criteria;
        }
        $query = new DireccionQuery();
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
     * @return   Direccion|Direccion[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = DireccionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(DireccionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Direccion A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_DIRECCION`, `CALLE`, `NUMERO`, `PISO`, `DEPARTAMENTO`, `PERSONA_ID_PERSONA`, `TIPO_DIRECCION_ID_`, `LOCALIDAD_ID_LOCALIDAD` FROM `direccion` WHERE `ID_DIRECCION` = :p0';
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
            $obj = new Direccion();
            $obj->hydrate($row);
            DireccionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Direccion|Direccion[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Direccion[]|mixed the list of results, formatted by the current formatter
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
     * @return DireccionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(DireccionPeer::ID_DIRECCION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return DireccionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(DireccionPeer::ID_DIRECCION, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_direccion column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDireccion(1234); // WHERE id_direccion = 1234
     * $query->filterByIdDireccion(array(12, 34)); // WHERE id_direccion IN (12, 34)
     * $query->filterByIdDireccion(array('min' => 12)); // WHERE id_direccion > 12
     * </code>
     *
     * @param     mixed $idDireccion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DireccionQuery The current query, for fluid interface
     */
    public function filterByIdDireccion($idDireccion = null, $comparison = null)
    {
        if (is_array($idDireccion) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(DireccionPeer::ID_DIRECCION, $idDireccion, $comparison);
    }

    /**
     * Filter the query on the calle column
     *
     * Example usage:
     * <code>
     * $query->filterByCalle('fooValue');   // WHERE calle = 'fooValue'
     * $query->filterByCalle('%fooValue%'); // WHERE calle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $calle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DireccionQuery The current query, for fluid interface
     */
    public function filterByCalle($calle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($calle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $calle)) {
                $calle = str_replace('*', '%', $calle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DireccionPeer::CALLE, $calle, $comparison);
    }

    /**
     * Filter the query on the numero column
     *
     * Example usage:
     * <code>
     * $query->filterByNumero('fooValue');   // WHERE numero = 'fooValue'
     * $query->filterByNumero('%fooValue%'); // WHERE numero LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numero The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DireccionQuery The current query, for fluid interface
     */
    public function filterByNumero($numero = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numero)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numero)) {
                $numero = str_replace('*', '%', $numero);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DireccionPeer::NUMERO, $numero, $comparison);
    }

    /**
     * Filter the query on the piso column
     *
     * Example usage:
     * <code>
     * $query->filterByPiso('fooValue');   // WHERE piso = 'fooValue'
     * $query->filterByPiso('%fooValue%'); // WHERE piso LIKE '%fooValue%'
     * </code>
     *
     * @param     string $piso The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DireccionQuery The current query, for fluid interface
     */
    public function filterByPiso($piso = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($piso)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $piso)) {
                $piso = str_replace('*', '%', $piso);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DireccionPeer::PISO, $piso, $comparison);
    }

    /**
     * Filter the query on the departamento column
     *
     * Example usage:
     * <code>
     * $query->filterByDepartamento('fooValue');   // WHERE departamento = 'fooValue'
     * $query->filterByDepartamento('%fooValue%'); // WHERE departamento LIKE '%fooValue%'
     * </code>
     *
     * @param     string $departamento The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DireccionQuery The current query, for fluid interface
     */
    public function filterByDepartamento($departamento = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($departamento)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $departamento)) {
                $departamento = str_replace('*', '%', $departamento);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DireccionPeer::DEPARTAMENTO, $departamento, $comparison);
    }

    /**
     * Filter the query on the persona_id_persona column
     *
     * Example usage:
     * <code>
     * $query->filterByPersonaIdPersona(1234); // WHERE persona_id_persona = 1234
     * $query->filterByPersonaIdPersona(array(12, 34)); // WHERE persona_id_persona IN (12, 34)
     * $query->filterByPersonaIdPersona(array('min' => 12)); // WHERE persona_id_persona > 12
     * </code>
     *
     * @see       filterByPersona()
     *
     * @param     mixed $personaIdPersona The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DireccionQuery The current query, for fluid interface
     */
    public function filterByPersonaIdPersona($personaIdPersona = null, $comparison = null)
    {
        if (is_array($personaIdPersona)) {
            $useMinMax = false;
            if (isset($personaIdPersona['min'])) {
                $this->addUsingAlias(DireccionPeer::PERSONA_ID_PERSONA, $personaIdPersona['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($personaIdPersona['max'])) {
                $this->addUsingAlias(DireccionPeer::PERSONA_ID_PERSONA, $personaIdPersona['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DireccionPeer::PERSONA_ID_PERSONA, $personaIdPersona, $comparison);
    }

    /**
     * Filter the query on the tipo_direccion_id_ column
     *
     * Example usage:
     * <code>
     * $query->filterByTipoDireccionId(1234); // WHERE tipo_direccion_id_ = 1234
     * $query->filterByTipoDireccionId(array(12, 34)); // WHERE tipo_direccion_id_ IN (12, 34)
     * $query->filterByTipoDireccionId(array('min' => 12)); // WHERE tipo_direccion_id_ > 12
     * </code>
     *
     * @see       filterByTipoDireccion()
     *
     * @param     mixed $tipoDireccionId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DireccionQuery The current query, for fluid interface
     */
    public function filterByTipoDireccionId($tipoDireccionId = null, $comparison = null)
    {
        if (is_array($tipoDireccionId)) {
            $useMinMax = false;
            if (isset($tipoDireccionId['min'])) {
                $this->addUsingAlias(DireccionPeer::TIPO_DIRECCION_ID_, $tipoDireccionId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tipoDireccionId['max'])) {
                $this->addUsingAlias(DireccionPeer::TIPO_DIRECCION_ID_, $tipoDireccionId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DireccionPeer::TIPO_DIRECCION_ID_, $tipoDireccionId, $comparison);
    }

    /**
     * Filter the query on the localidad_id_localidad column
     *
     * Example usage:
     * <code>
     * $query->filterByLocalidadIdLocalidad(1234); // WHERE localidad_id_localidad = 1234
     * $query->filterByLocalidadIdLocalidad(array(12, 34)); // WHERE localidad_id_localidad IN (12, 34)
     * $query->filterByLocalidadIdLocalidad(array('min' => 12)); // WHERE localidad_id_localidad > 12
     * </code>
     *
     * @see       filterByLocalidad()
     *
     * @param     mixed $localidadIdLocalidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DireccionQuery The current query, for fluid interface
     */
    public function filterByLocalidadIdLocalidad($localidadIdLocalidad = null, $comparison = null)
    {
        if (is_array($localidadIdLocalidad)) {
            $useMinMax = false;
            if (isset($localidadIdLocalidad['min'])) {
                $this->addUsingAlias(DireccionPeer::LOCALIDAD_ID_LOCALIDAD, $localidadIdLocalidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($localidadIdLocalidad['max'])) {
                $this->addUsingAlias(DireccionPeer::LOCALIDAD_ID_LOCALIDAD, $localidadIdLocalidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DireccionPeer::LOCALIDAD_ID_LOCALIDAD, $localidadIdLocalidad, $comparison);
    }

    /**
     * Filter the query by a related Persona object
     *
     * @param   Persona|PropelObjectCollection $persona The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   DireccionQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPersona($persona, $comparison = null)
    {
        if ($persona instanceof Persona) {
            return $this
                ->addUsingAlias(DireccionPeer::PERSONA_ID_PERSONA, $persona->getIdPersona(), $comparison);
        } elseif ($persona instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DireccionPeer::PERSONA_ID_PERSONA, $persona->toKeyValue('PrimaryKey', 'IdPersona'), $comparison);
        } else {
            throw new PropelException('filterByPersona() only accepts arguments of type Persona or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Persona relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return DireccionQuery The current query, for fluid interface
     */
    public function joinPersona($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Persona');

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
            $this->addJoinObject($join, 'Persona');
        }

        return $this;
    }

    /**
     * Use the Persona relation Persona object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PersonaQuery A secondary query class using the current class as primary query
     */
    public function usePersonaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPersona($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Persona', 'PersonaQuery');
    }

    /**
     * Filter the query by a related TipoDireccion object
     *
     * @param   TipoDireccion|PropelObjectCollection $tipoDireccion The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   DireccionQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByTipoDireccion($tipoDireccion, $comparison = null)
    {
        if ($tipoDireccion instanceof TipoDireccion) {
            return $this
                ->addUsingAlias(DireccionPeer::TIPO_DIRECCION_ID_, $tipoDireccion->getId(), $comparison);
        } elseif ($tipoDireccion instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DireccionPeer::TIPO_DIRECCION_ID_, $tipoDireccion->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByTipoDireccion() only accepts arguments of type TipoDireccion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TipoDireccion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return DireccionQuery The current query, for fluid interface
     */
    public function joinTipoDireccion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TipoDireccion');

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
            $this->addJoinObject($join, 'TipoDireccion');
        }

        return $this;
    }

    /**
     * Use the TipoDireccion relation TipoDireccion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TipoDireccionQuery A secondary query class using the current class as primary query
     */
    public function useTipoDireccionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTipoDireccion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TipoDireccion', 'TipoDireccionQuery');
    }

    /**
     * Filter the query by a related Localidad object
     *
     * @param   Localidad|PropelObjectCollection $localidad The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   DireccionQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByLocalidad($localidad, $comparison = null)
    {
        if ($localidad instanceof Localidad) {
            return $this
                ->addUsingAlias(DireccionPeer::LOCALIDAD_ID_LOCALIDAD, $localidad->getIdLocalidad(), $comparison);
        } elseif ($localidad instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DireccionPeer::LOCALIDAD_ID_LOCALIDAD, $localidad->toKeyValue('PrimaryKey', 'IdLocalidad'), $comparison);
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
     * @return DireccionQuery The current query, for fluid interface
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
     * @param   Direccion $direccion Object to remove from the list of results
     *
     * @return DireccionQuery The current query, for fluid interface
     */
    public function prune($direccion = null)
    {
        if ($direccion) {
            $this->addUsingAlias(DireccionPeer::ID_DIRECCION, $direccion->getIdDireccion(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseDireccionQuery