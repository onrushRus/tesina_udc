<?php


/**
 * Base class that represents a query for the 'persona_fisica' table.
 *
 * 
 *
 * @method     PersonaFisicaQuery orderByIdPersonaFisica($order = Criteria::ASC) Order by the id_persona_fisica column
 * @method     PersonaFisicaQuery orderByTipoUsuarioId($order = Criteria::ASC) Order by the tipo_usuario_id column
 * @method     PersonaFisicaQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 * @method     PersonaFisicaQuery orderByApellido($order = Criteria::ASC) Order by the apellido column
 * @method     PersonaFisicaQuery orderByUsuario($order = Criteria::ASC) Order by the usuario column
 * @method     PersonaFisicaQuery orderByPassword($order = Criteria::ASC) Order by the password column
 *
 * @method     PersonaFisicaQuery groupByIdPersonaFisica() Group by the id_persona_fisica column
 * @method     PersonaFisicaQuery groupByTipoUsuarioId() Group by the tipo_usuario_id column
 * @method     PersonaFisicaQuery groupByNombre() Group by the nombre column
 * @method     PersonaFisicaQuery groupByApellido() Group by the apellido column
 * @method     PersonaFisicaQuery groupByUsuario() Group by the usuario column
 * @method     PersonaFisicaQuery groupByPassword() Group by the password column
 *
 * @method     PersonaFisicaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PersonaFisicaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PersonaFisicaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PersonaFisicaQuery leftJoinTipoUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the TipoUsuario relation
 * @method     PersonaFisicaQuery rightJoinTipoUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TipoUsuario relation
 * @method     PersonaFisicaQuery innerJoinTipoUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the TipoUsuario relation
 *
 * @method     PersonaFisica findOne(PropelPDO $con = null) Return the first PersonaFisica matching the query
 * @method     PersonaFisica findOneOrCreate(PropelPDO $con = null) Return the first PersonaFisica matching the query, or a new PersonaFisica object populated from the query conditions when no match is found
 *
 * @method     PersonaFisica findOneByIdPersonaFisica(int $id_persona_fisica) Return the first PersonaFisica filtered by the id_persona_fisica column
 * @method     PersonaFisica findOneByTipoUsuarioId(int $tipo_usuario_id) Return the first PersonaFisica filtered by the tipo_usuario_id column
 * @method     PersonaFisica findOneByNombre(string $nombre) Return the first PersonaFisica filtered by the nombre column
 * @method     PersonaFisica findOneByApellido(string $apellido) Return the first PersonaFisica filtered by the apellido column
 * @method     PersonaFisica findOneByUsuario(string $usuario) Return the first PersonaFisica filtered by the usuario column
 * @method     PersonaFisica findOneByPassword(string $password) Return the first PersonaFisica filtered by the password column
 *
 * @method     array findByIdPersonaFisica(int $id_persona_fisica) Return PersonaFisica objects filtered by the id_persona_fisica column
 * @method     array findByTipoUsuarioId(int $tipo_usuario_id) Return PersonaFisica objects filtered by the tipo_usuario_id column
 * @method     array findByNombre(string $nombre) Return PersonaFisica objects filtered by the nombre column
 * @method     array findByApellido(string $apellido) Return PersonaFisica objects filtered by the apellido column
 * @method     array findByUsuario(string $usuario) Return PersonaFisica objects filtered by the usuario column
 * @method     array findByPassword(string $password) Return PersonaFisica objects filtered by the password column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePersonaFisicaQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BasePersonaFisicaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'PersonaFisica', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PersonaFisicaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     PersonaFisicaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PersonaFisicaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PersonaFisicaQuery) {
            return $criteria;
        }
        $query = new PersonaFisicaQuery();
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
     * @return   PersonaFisica|PersonaFisica[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PersonaFisicaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PersonaFisicaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   PersonaFisica A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_PERSONA_FISICA`, `TIPO_USUARIO_ID`, `NOMBRE`, `APELLIDO`, `USUARIO`, `PASSWORD` FROM `persona_fisica` WHERE `ID_PERSONA_FISICA` = :p0';
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
            $obj = new PersonaFisica();
            $obj->hydrate($row);
            PersonaFisicaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return PersonaFisica|PersonaFisica[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|PersonaFisica[]|mixed the list of results, formatted by the current formatter
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
     * @return PersonaFisicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PersonaFisicaPeer::ID_PERSONA_FISICA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PersonaFisicaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PersonaFisicaPeer::ID_PERSONA_FISICA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_persona_fisica column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPersonaFisica(1234); // WHERE id_persona_fisica = 1234
     * $query->filterByIdPersonaFisica(array(12, 34)); // WHERE id_persona_fisica IN (12, 34)
     * $query->filterByIdPersonaFisica(array('min' => 12)); // WHERE id_persona_fisica > 12
     * </code>
     *
     * @param     mixed $idPersonaFisica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaFisicaQuery The current query, for fluid interface
     */
    public function filterByIdPersonaFisica($idPersonaFisica = null, $comparison = null)
    {
        if (is_array($idPersonaFisica) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(PersonaFisicaPeer::ID_PERSONA_FISICA, $idPersonaFisica, $comparison);
    }

    /**
     * Filter the query on the tipo_usuario_id column
     *
     * Example usage:
     * <code>
     * $query->filterByTipoUsuarioId(1234); // WHERE tipo_usuario_id = 1234
     * $query->filterByTipoUsuarioId(array(12, 34)); // WHERE tipo_usuario_id IN (12, 34)
     * $query->filterByTipoUsuarioId(array('min' => 12)); // WHERE tipo_usuario_id > 12
     * </code>
     *
     * @see       filterByTipoUsuario()
     *
     * @param     mixed $tipoUsuarioId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaFisicaQuery The current query, for fluid interface
     */
    public function filterByTipoUsuarioId($tipoUsuarioId = null, $comparison = null)
    {
        if (is_array($tipoUsuarioId)) {
            $useMinMax = false;
            if (isset($tipoUsuarioId['min'])) {
                $this->addUsingAlias(PersonaFisicaPeer::TIPO_USUARIO_ID, $tipoUsuarioId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tipoUsuarioId['max'])) {
                $this->addUsingAlias(PersonaFisicaPeer::TIPO_USUARIO_ID, $tipoUsuarioId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PersonaFisicaPeer::TIPO_USUARIO_ID, $tipoUsuarioId, $comparison);
    }

    /**
     * Filter the query on the nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByNombre('fooValue');   // WHERE nombre = 'fooValue'
     * $query->filterByNombre('%fooValue%'); // WHERE nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaFisicaQuery The current query, for fluid interface
     */
    public function filterByNombre($nombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nombre)) {
                $nombre = str_replace('*', '%', $nombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PersonaFisicaPeer::NOMBRE, $nombre, $comparison);
    }

    /**
     * Filter the query on the apellido column
     *
     * Example usage:
     * <code>
     * $query->filterByApellido('fooValue');   // WHERE apellido = 'fooValue'
     * $query->filterByApellido('%fooValue%'); // WHERE apellido LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apellido The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaFisicaQuery The current query, for fluid interface
     */
    public function filterByApellido($apellido = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apellido)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $apellido)) {
                $apellido = str_replace('*', '%', $apellido);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PersonaFisicaPeer::APELLIDO, $apellido, $comparison);
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
     * @return PersonaFisicaQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PersonaFisicaPeer::USUARIO, $usuario, $comparison);
    }

    /**
     * Filter the query on the password column
     *
     * Example usage:
     * <code>
     * $query->filterByPassword('fooValue');   // WHERE password = 'fooValue'
     * $query->filterByPassword('%fooValue%'); // WHERE password LIKE '%fooValue%'
     * </code>
     *
     * @param     string $password The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaFisicaQuery The current query, for fluid interface
     */
    public function filterByPassword($password = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($password)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $password)) {
                $password = str_replace('*', '%', $password);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PersonaFisicaPeer::PASSWORD, $password, $comparison);
    }

    /**
     * Filter the query by a related TipoUsuario object
     *
     * @param   TipoUsuario|PropelObjectCollection $tipoUsuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   PersonaFisicaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByTipoUsuario($tipoUsuario, $comparison = null)
    {
        if ($tipoUsuario instanceof TipoUsuario) {
            return $this
                ->addUsingAlias(PersonaFisicaPeer::TIPO_USUARIO_ID, $tipoUsuario->getIdTipoUsuario(), $comparison);
        } elseif ($tipoUsuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PersonaFisicaPeer::TIPO_USUARIO_ID, $tipoUsuario->toKeyValue('PrimaryKey', 'IdTipoUsuario'), $comparison);
        } else {
            throw new PropelException('filterByTipoUsuario() only accepts arguments of type TipoUsuario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TipoUsuario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PersonaFisicaQuery The current query, for fluid interface
     */
    public function joinTipoUsuario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TipoUsuario');

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
            $this->addJoinObject($join, 'TipoUsuario');
        }

        return $this;
    }

    /**
     * Use the TipoUsuario relation TipoUsuario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TipoUsuarioQuery A secondary query class using the current class as primary query
     */
    public function useTipoUsuarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTipoUsuario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TipoUsuario', 'TipoUsuarioQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   PersonaFisica $personaFisica Object to remove from the list of results
     *
     * @return PersonaFisicaQuery The current query, for fluid interface
     */
    public function prune($personaFisica = null)
    {
        if ($personaFisica) {
            $this->addUsingAlias(PersonaFisicaPeer::ID_PERSONA_FISICA, $personaFisica->getIdPersonaFisica(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BasePersonaFisicaQuery