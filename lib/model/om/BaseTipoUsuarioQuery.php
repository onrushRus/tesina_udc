<?php


/**
 * Base class that represents a query for the 'tipo_usuario' table.
 *
 * 
 *
 * @method     TipoUsuarioQuery orderByIdTipoUsuario($order = Criteria::ASC) Order by the id_tipo_usuario column
 * @method     TipoUsuarioQuery orderByTipoUsuario($order = Criteria::ASC) Order by the tipo_usuario column
 *
 * @method     TipoUsuarioQuery groupByIdTipoUsuario() Group by the id_tipo_usuario column
 * @method     TipoUsuarioQuery groupByTipoUsuario() Group by the tipo_usuario column
 *
 * @method     TipoUsuarioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TipoUsuarioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TipoUsuarioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     TipoUsuarioQuery leftJoinPersonaFisica($relationAlias = null) Adds a LEFT JOIN clause to the query using the PersonaFisica relation
 * @method     TipoUsuarioQuery rightJoinPersonaFisica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PersonaFisica relation
 * @method     TipoUsuarioQuery innerJoinPersonaFisica($relationAlias = null) Adds a INNER JOIN clause to the query using the PersonaFisica relation
 *
 * @method     TipoUsuario findOne(PropelPDO $con = null) Return the first TipoUsuario matching the query
 * @method     TipoUsuario findOneOrCreate(PropelPDO $con = null) Return the first TipoUsuario matching the query, or a new TipoUsuario object populated from the query conditions when no match is found
 *
 * @method     TipoUsuario findOneByIdTipoUsuario(int $id_tipo_usuario) Return the first TipoUsuario filtered by the id_tipo_usuario column
 * @method     TipoUsuario findOneByTipoUsuario(string $tipo_usuario) Return the first TipoUsuario filtered by the tipo_usuario column
 *
 * @method     array findByIdTipoUsuario(int $id_tipo_usuario) Return TipoUsuario objects filtered by the id_tipo_usuario column
 * @method     array findByTipoUsuario(string $tipo_usuario) Return TipoUsuario objects filtered by the tipo_usuario column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseTipoUsuarioQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseTipoUsuarioQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'TipoUsuario', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TipoUsuarioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     TipoUsuarioQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TipoUsuarioQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TipoUsuarioQuery) {
            return $criteria;
        }
        $query = new TipoUsuarioQuery();
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
     * @return   TipoUsuario|TipoUsuario[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TipoUsuarioPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TipoUsuarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   TipoUsuario A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_TIPO_USUARIO`, `TIPO_USUARIO` FROM `tipo_usuario` WHERE `ID_TIPO_USUARIO` = :p0';
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
            $obj = new TipoUsuario();
            $obj->hydrate($row);
            TipoUsuarioPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TipoUsuario|TipoUsuario[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TipoUsuario[]|mixed the list of results, formatted by the current formatter
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
     * @return TipoUsuarioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TipoUsuarioPeer::ID_TIPO_USUARIO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TipoUsuarioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TipoUsuarioPeer::ID_TIPO_USUARIO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_tipo_usuario column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTipoUsuario(1234); // WHERE id_tipo_usuario = 1234
     * $query->filterByIdTipoUsuario(array(12, 34)); // WHERE id_tipo_usuario IN (12, 34)
     * $query->filterByIdTipoUsuario(array('min' => 12)); // WHERE id_tipo_usuario > 12
     * </code>
     *
     * @param     mixed $idTipoUsuario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TipoUsuarioQuery The current query, for fluid interface
     */
    public function filterByIdTipoUsuario($idTipoUsuario = null, $comparison = null)
    {
        if (is_array($idTipoUsuario) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(TipoUsuarioPeer::ID_TIPO_USUARIO, $idTipoUsuario, $comparison);
    }

    /**
     * Filter the query on the tipo_usuario column
     *
     * Example usage:
     * <code>
     * $query->filterByTipoUsuario('fooValue');   // WHERE tipo_usuario = 'fooValue'
     * $query->filterByTipoUsuario('%fooValue%'); // WHERE tipo_usuario LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tipoUsuario The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TipoUsuarioQuery The current query, for fluid interface
     */
    public function filterByTipoUsuario($tipoUsuario = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tipoUsuario)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tipoUsuario)) {
                $tipoUsuario = str_replace('*', '%', $tipoUsuario);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TipoUsuarioPeer::TIPO_USUARIO, $tipoUsuario, $comparison);
    }

    /**
     * Filter the query by a related PersonaFisica object
     *
     * @param   PersonaFisica|PropelObjectCollection $personaFisica  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   TipoUsuarioQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPersonaFisica($personaFisica, $comparison = null)
    {
        if ($personaFisica instanceof PersonaFisica) {
            return $this
                ->addUsingAlias(TipoUsuarioPeer::ID_TIPO_USUARIO, $personaFisica->getTipoUsuarioId(), $comparison);
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
     * @return TipoUsuarioQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   TipoUsuario $tipoUsuario Object to remove from the list of results
     *
     * @return TipoUsuarioQuery The current query, for fluid interface
     */
    public function prune($tipoUsuario = null)
    {
        if ($tipoUsuario) {
            $this->addUsingAlias(TipoUsuarioPeer::ID_TIPO_USUARIO, $tipoUsuario->getIdTipoUsuario(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseTipoUsuarioQuery