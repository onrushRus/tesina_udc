<?php


/**
 * Base class that represents a query for the 'alerta' table.
 *
 * 
 *
 * @method     AlertaQuery orderByIdTipoAlerta($order = Criteria::ASC) Order by the id_tipo_alerta column
 * @method     AlertaQuery orderByTipoAlerta($order = Criteria::ASC) Order by the tipo_alerta column
 * @method     AlertaQuery orderByDiasParaAviso($order = Criteria::ASC) Order by the dias_para_aviso column
 * @method     AlertaQuery orderByCuerpoMensaje($order = Criteria::ASC) Order by the cuerpo_mensaje column
 *
 * @method     AlertaQuery groupByIdTipoAlerta() Group by the id_tipo_alerta column
 * @method     AlertaQuery groupByTipoAlerta() Group by the tipo_alerta column
 * @method     AlertaQuery groupByDiasParaAviso() Group by the dias_para_aviso column
 * @method     AlertaQuery groupByCuerpoMensaje() Group by the cuerpo_mensaje column
 *
 * @method     AlertaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AlertaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AlertaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AlertaQuery leftJoinEnteAlerta($relationAlias = null) Adds a LEFT JOIN clause to the query using the EnteAlerta relation
 * @method     AlertaQuery rightJoinEnteAlerta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EnteAlerta relation
 * @method     AlertaQuery innerJoinEnteAlerta($relationAlias = null) Adds a INNER JOIN clause to the query using the EnteAlerta relation
 *
 * @method     Alerta findOne(PropelPDO $con = null) Return the first Alerta matching the query
 * @method     Alerta findOneOrCreate(PropelPDO $con = null) Return the first Alerta matching the query, or a new Alerta object populated from the query conditions when no match is found
 *
 * @method     Alerta findOneByIdTipoAlerta(int $id_tipo_alerta) Return the first Alerta filtered by the id_tipo_alerta column
 * @method     Alerta findOneByTipoAlerta(int $tipo_alerta) Return the first Alerta filtered by the tipo_alerta column
 * @method     Alerta findOneByDiasParaAviso(int $dias_para_aviso) Return the first Alerta filtered by the dias_para_aviso column
 * @method     Alerta findOneByCuerpoMensaje(string $cuerpo_mensaje) Return the first Alerta filtered by the cuerpo_mensaje column
 *
 * @method     array findByIdTipoAlerta(int $id_tipo_alerta) Return Alerta objects filtered by the id_tipo_alerta column
 * @method     array findByTipoAlerta(int $tipo_alerta) Return Alerta objects filtered by the tipo_alerta column
 * @method     array findByDiasParaAviso(int $dias_para_aviso) Return Alerta objects filtered by the dias_para_aviso column
 * @method     array findByCuerpoMensaje(string $cuerpo_mensaje) Return Alerta objects filtered by the cuerpo_mensaje column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseAlertaQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseAlertaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Alerta', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AlertaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     AlertaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AlertaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AlertaQuery) {
            return $criteria;
        }
        $query = new AlertaQuery();
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
     * @return   Alerta|Alerta[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AlertaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AlertaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Alerta A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_TIPO_ALERTA`, `TIPO_ALERTA`, `DIAS_PARA_AVISO`, `CUERPO_MENSAJE` FROM `alerta` WHERE `ID_TIPO_ALERTA` = :p0';
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
            $obj = new Alerta();
            $obj->hydrate($row);
            AlertaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Alerta|Alerta[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Alerta[]|mixed the list of results, formatted by the current formatter
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
     * @return AlertaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AlertaPeer::ID_TIPO_ALERTA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AlertaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AlertaPeer::ID_TIPO_ALERTA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_tipo_alerta column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTipoAlerta(1234); // WHERE id_tipo_alerta = 1234
     * $query->filterByIdTipoAlerta(array(12, 34)); // WHERE id_tipo_alerta IN (12, 34)
     * $query->filterByIdTipoAlerta(array('min' => 12)); // WHERE id_tipo_alerta > 12
     * </code>
     *
     * @param     mixed $idTipoAlerta The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AlertaQuery The current query, for fluid interface
     */
    public function filterByIdTipoAlerta($idTipoAlerta = null, $comparison = null)
    {
        if (is_array($idTipoAlerta) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(AlertaPeer::ID_TIPO_ALERTA, $idTipoAlerta, $comparison);
    }

    /**
     * Filter the query on the tipo_alerta column
     *
     * Example usage:
     * <code>
     * $query->filterByTipoAlerta(1234); // WHERE tipo_alerta = 1234
     * $query->filterByTipoAlerta(array(12, 34)); // WHERE tipo_alerta IN (12, 34)
     * $query->filterByTipoAlerta(array('min' => 12)); // WHERE tipo_alerta > 12
     * </code>
     *
     * @param     mixed $tipoAlerta The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AlertaQuery The current query, for fluid interface
     */
    public function filterByTipoAlerta($tipoAlerta = null, $comparison = null)
    {
        if (is_array($tipoAlerta)) {
            $useMinMax = false;
            if (isset($tipoAlerta['min'])) {
                $this->addUsingAlias(AlertaPeer::TIPO_ALERTA, $tipoAlerta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tipoAlerta['max'])) {
                $this->addUsingAlias(AlertaPeer::TIPO_ALERTA, $tipoAlerta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AlertaPeer::TIPO_ALERTA, $tipoAlerta, $comparison);
    }

    /**
     * Filter the query on the dias_para_aviso column
     *
     * Example usage:
     * <code>
     * $query->filterByDiasParaAviso(1234); // WHERE dias_para_aviso = 1234
     * $query->filterByDiasParaAviso(array(12, 34)); // WHERE dias_para_aviso IN (12, 34)
     * $query->filterByDiasParaAviso(array('min' => 12)); // WHERE dias_para_aviso > 12
     * </code>
     *
     * @param     mixed $diasParaAviso The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AlertaQuery The current query, for fluid interface
     */
    public function filterByDiasParaAviso($diasParaAviso = null, $comparison = null)
    {
        if (is_array($diasParaAviso)) {
            $useMinMax = false;
            if (isset($diasParaAviso['min'])) {
                $this->addUsingAlias(AlertaPeer::DIAS_PARA_AVISO, $diasParaAviso['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diasParaAviso['max'])) {
                $this->addUsingAlias(AlertaPeer::DIAS_PARA_AVISO, $diasParaAviso['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AlertaPeer::DIAS_PARA_AVISO, $diasParaAviso, $comparison);
    }

    /**
     * Filter the query on the cuerpo_mensaje column
     *
     * Example usage:
     * <code>
     * $query->filterByCuerpoMensaje('fooValue');   // WHERE cuerpo_mensaje = 'fooValue'
     * $query->filterByCuerpoMensaje('%fooValue%'); // WHERE cuerpo_mensaje LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cuerpoMensaje The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AlertaQuery The current query, for fluid interface
     */
    public function filterByCuerpoMensaje($cuerpoMensaje = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cuerpoMensaje)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cuerpoMensaje)) {
                $cuerpoMensaje = str_replace('*', '%', $cuerpoMensaje);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AlertaPeer::CUERPO_MENSAJE, $cuerpoMensaje, $comparison);
    }

    /**
     * Filter the query by a related EnteAlerta object
     *
     * @param   EnteAlerta|PropelObjectCollection $enteAlerta  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   AlertaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByEnteAlerta($enteAlerta, $comparison = null)
    {
        if ($enteAlerta instanceof EnteAlerta) {
            return $this
                ->addUsingAlias(AlertaPeer::ID_TIPO_ALERTA, $enteAlerta->getAlertaId(), $comparison);
        } elseif ($enteAlerta instanceof PropelObjectCollection) {
            return $this
                ->useEnteAlertaQuery()
                ->filterByPrimaryKeys($enteAlerta->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByEnteAlerta() only accepts arguments of type EnteAlerta or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EnteAlerta relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AlertaQuery The current query, for fluid interface
     */
    public function joinEnteAlerta($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EnteAlerta');

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
            $this->addJoinObject($join, 'EnteAlerta');
        }

        return $this;
    }

    /**
     * Use the EnteAlerta relation EnteAlerta object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EnteAlertaQuery A secondary query class using the current class as primary query
     */
    public function useEnteAlertaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEnteAlerta($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EnteAlerta', 'EnteAlertaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Alerta $alerta Object to remove from the list of results
     *
     * @return AlertaQuery The current query, for fluid interface
     */
    public function prune($alerta = null)
    {
        if ($alerta) {
            $this->addUsingAlias(AlertaPeer::ID_TIPO_ALERTA, $alerta->getIdTipoAlerta(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseAlertaQuery