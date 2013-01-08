<?php


/**
 * Base class that represents a query for the 'asamblea' table.
 *
 * 
 *
 * @method     AsambleaQuery orderByIdAsamblea($order = Criteria::ASC) Order by the id_asamblea column
 * @method     AsambleaQuery orderByEjercicioEconomicoId($order = Criteria::ASC) Order by the ejercicio_economico_id column
 * @method     AsambleaQuery orderByTipoAsambleaId($order = Criteria::ASC) Order by the tipo_asamblea_id column
 * @method     AsambleaQuery orderByFechaDeAsamblea($order = Criteria::ASC) Order by the fecha_de_asamblea column
 * @method     AsambleaQuery orderByFechaDeConvocatoria($order = Criteria::ASC) Order by the fecha_de_convocatoria column
 * @method     AsambleaQuery orderByFechaDeNuevoMandato($order = Criteria::ASC) Order by the fecha_de_nuevo_mandato column
 * @method     AsambleaQuery orderByObservaciones($order = Criteria::ASC) Order by the observaciones column
 *
 * @method     AsambleaQuery groupByIdAsamblea() Group by the id_asamblea column
 * @method     AsambleaQuery groupByEjercicioEconomicoId() Group by the ejercicio_economico_id column
 * @method     AsambleaQuery groupByTipoAsambleaId() Group by the tipo_asamblea_id column
 * @method     AsambleaQuery groupByFechaDeAsamblea() Group by the fecha_de_asamblea column
 * @method     AsambleaQuery groupByFechaDeConvocatoria() Group by the fecha_de_convocatoria column
 * @method     AsambleaQuery groupByFechaDeNuevoMandato() Group by the fecha_de_nuevo_mandato column
 * @method     AsambleaQuery groupByObservaciones() Group by the observaciones column
 *
 * @method     AsambleaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AsambleaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AsambleaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AsambleaQuery leftJoinEjercicioEconomico($relationAlias = null) Adds a LEFT JOIN clause to the query using the EjercicioEconomico relation
 * @method     AsambleaQuery rightJoinEjercicioEconomico($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EjercicioEconomico relation
 * @method     AsambleaQuery innerJoinEjercicioEconomico($relationAlias = null) Adds a INNER JOIN clause to the query using the EjercicioEconomico relation
 *
 * @method     AsambleaQuery leftJoinTipoAsamblea($relationAlias = null) Adds a LEFT JOIN clause to the query using the TipoAsamblea relation
 * @method     AsambleaQuery rightJoinTipoAsamblea($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TipoAsamblea relation
 * @method     AsambleaQuery innerJoinTipoAsamblea($relationAlias = null) Adds a INNER JOIN clause to the query using the TipoAsamblea relation
 *
 * @method     Asamblea findOne(PropelPDO $con = null) Return the first Asamblea matching the query
 * @method     Asamblea findOneOrCreate(PropelPDO $con = null) Return the first Asamblea matching the query, or a new Asamblea object populated from the query conditions when no match is found
 *
 * @method     Asamblea findOneByIdAsamblea(int $id_asamblea) Return the first Asamblea filtered by the id_asamblea column
 * @method     Asamblea findOneByEjercicioEconomicoId(int $ejercicio_economico_id) Return the first Asamblea filtered by the ejercicio_economico_id column
 * @method     Asamblea findOneByTipoAsambleaId(int $tipo_asamblea_id) Return the first Asamblea filtered by the tipo_asamblea_id column
 * @method     Asamblea findOneByFechaDeAsamblea(string $fecha_de_asamblea) Return the first Asamblea filtered by the fecha_de_asamblea column
 * @method     Asamblea findOneByFechaDeConvocatoria(string $fecha_de_convocatoria) Return the first Asamblea filtered by the fecha_de_convocatoria column
 * @method     Asamblea findOneByFechaDeNuevoMandato(string $fecha_de_nuevo_mandato) Return the first Asamblea filtered by the fecha_de_nuevo_mandato column
 * @method     Asamblea findOneByObservaciones(string $observaciones) Return the first Asamblea filtered by the observaciones column
 *
 * @method     array findByIdAsamblea(int $id_asamblea) Return Asamblea objects filtered by the id_asamblea column
 * @method     array findByEjercicioEconomicoId(int $ejercicio_economico_id) Return Asamblea objects filtered by the ejercicio_economico_id column
 * @method     array findByTipoAsambleaId(int $tipo_asamblea_id) Return Asamblea objects filtered by the tipo_asamblea_id column
 * @method     array findByFechaDeAsamblea(string $fecha_de_asamblea) Return Asamblea objects filtered by the fecha_de_asamblea column
 * @method     array findByFechaDeConvocatoria(string $fecha_de_convocatoria) Return Asamblea objects filtered by the fecha_de_convocatoria column
 * @method     array findByFechaDeNuevoMandato(string $fecha_de_nuevo_mandato) Return Asamblea objects filtered by the fecha_de_nuevo_mandato column
 * @method     array findByObservaciones(string $observaciones) Return Asamblea objects filtered by the observaciones column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseAsambleaQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseAsambleaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Asamblea', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AsambleaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     AsambleaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AsambleaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AsambleaQuery) {
            return $criteria;
        }
        $query = new AsambleaQuery();
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
     * @return   Asamblea|Asamblea[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AsambleaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AsambleaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Asamblea A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_ASAMBLEA`, `EJERCICIO_ECONOMICO_ID`, `TIPO_ASAMBLEA_ID`, `FECHA_DE_ASAMBLEA`, `FECHA_DE_CONVOCATORIA`, `FECHA_DE_NUEVO_MANDATO`, `OBSERVACIONES` FROM `asamblea` WHERE `ID_ASAMBLEA` = :p0';
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
            $obj = new Asamblea();
            $obj->hydrate($row);
            AsambleaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Asamblea|Asamblea[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Asamblea[]|mixed the list of results, formatted by the current formatter
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
     * @return AsambleaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AsambleaPeer::ID_ASAMBLEA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AsambleaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AsambleaPeer::ID_ASAMBLEA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_asamblea column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAsamblea(1234); // WHERE id_asamblea = 1234
     * $query->filterByIdAsamblea(array(12, 34)); // WHERE id_asamblea IN (12, 34)
     * $query->filterByIdAsamblea(array('min' => 12)); // WHERE id_asamblea > 12
     * </code>
     *
     * @param     mixed $idAsamblea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AsambleaQuery The current query, for fluid interface
     */
    public function filterByIdAsamblea($idAsamblea = null, $comparison = null)
    {
        if (is_array($idAsamblea) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(AsambleaPeer::ID_ASAMBLEA, $idAsamblea, $comparison);
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
     * @return AsambleaQuery The current query, for fluid interface
     */
    public function filterByEjercicioEconomicoId($ejercicioEconomicoId = null, $comparison = null)
    {
        if (is_array($ejercicioEconomicoId)) {
            $useMinMax = false;
            if (isset($ejercicioEconomicoId['min'])) {
                $this->addUsingAlias(AsambleaPeer::EJERCICIO_ECONOMICO_ID, $ejercicioEconomicoId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ejercicioEconomicoId['max'])) {
                $this->addUsingAlias(AsambleaPeer::EJERCICIO_ECONOMICO_ID, $ejercicioEconomicoId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AsambleaPeer::EJERCICIO_ECONOMICO_ID, $ejercicioEconomicoId, $comparison);
    }

    /**
     * Filter the query on the tipo_asamblea_id column
     *
     * Example usage:
     * <code>
     * $query->filterByTipoAsambleaId(1234); // WHERE tipo_asamblea_id = 1234
     * $query->filterByTipoAsambleaId(array(12, 34)); // WHERE tipo_asamblea_id IN (12, 34)
     * $query->filterByTipoAsambleaId(array('min' => 12)); // WHERE tipo_asamblea_id > 12
     * </code>
     *
     * @see       filterByTipoAsamblea()
     *
     * @param     mixed $tipoAsambleaId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AsambleaQuery The current query, for fluid interface
     */
    public function filterByTipoAsambleaId($tipoAsambleaId = null, $comparison = null)
    {
        if (is_array($tipoAsambleaId)) {
            $useMinMax = false;
            if (isset($tipoAsambleaId['min'])) {
                $this->addUsingAlias(AsambleaPeer::TIPO_ASAMBLEA_ID, $tipoAsambleaId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tipoAsambleaId['max'])) {
                $this->addUsingAlias(AsambleaPeer::TIPO_ASAMBLEA_ID, $tipoAsambleaId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AsambleaPeer::TIPO_ASAMBLEA_ID, $tipoAsambleaId, $comparison);
    }

    /**
     * Filter the query on the fecha_de_asamblea column
     *
     * Example usage:
     * <code>
     * $query->filterByFechaDeAsamblea('2011-03-14'); // WHERE fecha_de_asamblea = '2011-03-14'
     * $query->filterByFechaDeAsamblea('now'); // WHERE fecha_de_asamblea = '2011-03-14'
     * $query->filterByFechaDeAsamblea(array('max' => 'yesterday')); // WHERE fecha_de_asamblea > '2011-03-13'
     * </code>
     *
     * @param     mixed $fechaDeAsamblea The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AsambleaQuery The current query, for fluid interface
     */
    public function filterByFechaDeAsamblea($fechaDeAsamblea = null, $comparison = null)
    {
        if (is_array($fechaDeAsamblea)) {
            $useMinMax = false;
            if (isset($fechaDeAsamblea['min'])) {
                $this->addUsingAlias(AsambleaPeer::FECHA_DE_ASAMBLEA, $fechaDeAsamblea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fechaDeAsamblea['max'])) {
                $this->addUsingAlias(AsambleaPeer::FECHA_DE_ASAMBLEA, $fechaDeAsamblea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AsambleaPeer::FECHA_DE_ASAMBLEA, $fechaDeAsamblea, $comparison);
    }

    /**
     * Filter the query on the fecha_de_convocatoria column
     *
     * Example usage:
     * <code>
     * $query->filterByFechaDeConvocatoria('2011-03-14'); // WHERE fecha_de_convocatoria = '2011-03-14'
     * $query->filterByFechaDeConvocatoria('now'); // WHERE fecha_de_convocatoria = '2011-03-14'
     * $query->filterByFechaDeConvocatoria(array('max' => 'yesterday')); // WHERE fecha_de_convocatoria > '2011-03-13'
     * </code>
     *
     * @param     mixed $fechaDeConvocatoria The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AsambleaQuery The current query, for fluid interface
     */
    public function filterByFechaDeConvocatoria($fechaDeConvocatoria = null, $comparison = null)
    {
        if (is_array($fechaDeConvocatoria)) {
            $useMinMax = false;
            if (isset($fechaDeConvocatoria['min'])) {
                $this->addUsingAlias(AsambleaPeer::FECHA_DE_CONVOCATORIA, $fechaDeConvocatoria['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fechaDeConvocatoria['max'])) {
                $this->addUsingAlias(AsambleaPeer::FECHA_DE_CONVOCATORIA, $fechaDeConvocatoria['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AsambleaPeer::FECHA_DE_CONVOCATORIA, $fechaDeConvocatoria, $comparison);
    }

    /**
     * Filter the query on the fecha_de_nuevo_mandato column
     *
     * Example usage:
     * <code>
     * $query->filterByFechaDeNuevoMandato('2011-03-14'); // WHERE fecha_de_nuevo_mandato = '2011-03-14'
     * $query->filterByFechaDeNuevoMandato('now'); // WHERE fecha_de_nuevo_mandato = '2011-03-14'
     * $query->filterByFechaDeNuevoMandato(array('max' => 'yesterday')); // WHERE fecha_de_nuevo_mandato > '2011-03-13'
     * </code>
     *
     * @param     mixed $fechaDeNuevoMandato The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AsambleaQuery The current query, for fluid interface
     */
    public function filterByFechaDeNuevoMandato($fechaDeNuevoMandato = null, $comparison = null)
    {
        if (is_array($fechaDeNuevoMandato)) {
            $useMinMax = false;
            if (isset($fechaDeNuevoMandato['min'])) {
                $this->addUsingAlias(AsambleaPeer::FECHA_DE_NUEVO_MANDATO, $fechaDeNuevoMandato['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fechaDeNuevoMandato['max'])) {
                $this->addUsingAlias(AsambleaPeer::FECHA_DE_NUEVO_MANDATO, $fechaDeNuevoMandato['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AsambleaPeer::FECHA_DE_NUEVO_MANDATO, $fechaDeNuevoMandato, $comparison);
    }

    /**
     * Filter the query on the observaciones column
     *
     * Example usage:
     * <code>
     * $query->filterByObservaciones('fooValue');   // WHERE observaciones = 'fooValue'
     * $query->filterByObservaciones('%fooValue%'); // WHERE observaciones LIKE '%fooValue%'
     * </code>
     *
     * @param     string $observaciones The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AsambleaQuery The current query, for fluid interface
     */
    public function filterByObservaciones($observaciones = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($observaciones)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $observaciones)) {
                $observaciones = str_replace('*', '%', $observaciones);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AsambleaPeer::OBSERVACIONES, $observaciones, $comparison);
    }

    /**
     * Filter the query by a related EjercicioEconomico object
     *
     * @param   EjercicioEconomico|PropelObjectCollection $ejercicioEconomico The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   AsambleaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByEjercicioEconomico($ejercicioEconomico, $comparison = null)
    {
        if ($ejercicioEconomico instanceof EjercicioEconomico) {
            return $this
                ->addUsingAlias(AsambleaPeer::EJERCICIO_ECONOMICO_ID, $ejercicioEconomico->getIdEjercicioEconomico(), $comparison);
        } elseif ($ejercicioEconomico instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AsambleaPeer::EJERCICIO_ECONOMICO_ID, $ejercicioEconomico->toKeyValue('PrimaryKey', 'IdEjercicioEconomico'), $comparison);
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
     * @return AsambleaQuery The current query, for fluid interface
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
     * Filter the query by a related TipoAsamblea object
     *
     * @param   TipoAsamblea|PropelObjectCollection $tipoAsamblea The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   AsambleaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByTipoAsamblea($tipoAsamblea, $comparison = null)
    {
        if ($tipoAsamblea instanceof TipoAsamblea) {
            return $this
                ->addUsingAlias(AsambleaPeer::TIPO_ASAMBLEA_ID, $tipoAsamblea->getIdTipoAsamblea(), $comparison);
        } elseif ($tipoAsamblea instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(AsambleaPeer::TIPO_ASAMBLEA_ID, $tipoAsamblea->toKeyValue('PrimaryKey', 'IdTipoAsamblea'), $comparison);
        } else {
            throw new PropelException('filterByTipoAsamblea() only accepts arguments of type TipoAsamblea or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TipoAsamblea relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AsambleaQuery The current query, for fluid interface
     */
    public function joinTipoAsamblea($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TipoAsamblea');

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
            $this->addJoinObject($join, 'TipoAsamblea');
        }

        return $this;
    }

    /**
     * Use the TipoAsamblea relation TipoAsamblea object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TipoAsambleaQuery A secondary query class using the current class as primary query
     */
    public function useTipoAsambleaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTipoAsamblea($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TipoAsamblea', 'TipoAsambleaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Asamblea $asamblea Object to remove from the list of results
     *
     * @return AsambleaQuery The current query, for fluid interface
     */
    public function prune($asamblea = null)
    {
        if ($asamblea) {
            $this->addUsingAlias(AsambleaPeer::ID_ASAMBLEA, $asamblea->getIdAsamblea(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseAsambleaQuery