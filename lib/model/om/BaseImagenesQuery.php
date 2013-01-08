<?php


/**
 * Base class that represents a query for the 'imagenes' table.
 *
 * 
 *
 * @method     ImagenesQuery orderByIdImagenes($order = Criteria::ASC) Order by the id_imagenes column
 * @method     ImagenesQuery orderByPersonaJuridicaIdPersonaJuridica($order = Criteria::ASC) Order by the persona_juridica_id_persona_juridica column
 * @method     ImagenesQuery orderByDescripcion($order = Criteria::ASC) Order by the descripcion column
 * @method     ImagenesQuery orderByNombreArchivo($order = Criteria::ASC) Order by the nombre_archivo column
 *
 * @method     ImagenesQuery groupByIdImagenes() Group by the id_imagenes column
 * @method     ImagenesQuery groupByPersonaJuridicaIdPersonaJuridica() Group by the persona_juridica_id_persona_juridica column
 * @method     ImagenesQuery groupByDescripcion() Group by the descripcion column
 * @method     ImagenesQuery groupByNombreArchivo() Group by the nombre_archivo column
 *
 * @method     ImagenesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ImagenesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ImagenesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ImagenesQuery leftJoinPersonaJuridica($relationAlias = null) Adds a LEFT JOIN clause to the query using the PersonaJuridica relation
 * @method     ImagenesQuery rightJoinPersonaJuridica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PersonaJuridica relation
 * @method     ImagenesQuery innerJoinPersonaJuridica($relationAlias = null) Adds a INNER JOIN clause to the query using the PersonaJuridica relation
 *
 * @method     Imagenes findOne(PropelPDO $con = null) Return the first Imagenes matching the query
 * @method     Imagenes findOneOrCreate(PropelPDO $con = null) Return the first Imagenes matching the query, or a new Imagenes object populated from the query conditions when no match is found
 *
 * @method     Imagenes findOneByIdImagenes(int $id_imagenes) Return the first Imagenes filtered by the id_imagenes column
 * @method     Imagenes findOneByPersonaJuridicaIdPersonaJuridica(int $persona_juridica_id_persona_juridica) Return the first Imagenes filtered by the persona_juridica_id_persona_juridica column
 * @method     Imagenes findOneByDescripcion(string $descripcion) Return the first Imagenes filtered by the descripcion column
 * @method     Imagenes findOneByNombreArchivo(string $nombre_archivo) Return the first Imagenes filtered by the nombre_archivo column
 *
 * @method     array findByIdImagenes(int $id_imagenes) Return Imagenes objects filtered by the id_imagenes column
 * @method     array findByPersonaJuridicaIdPersonaJuridica(int $persona_juridica_id_persona_juridica) Return Imagenes objects filtered by the persona_juridica_id_persona_juridica column
 * @method     array findByDescripcion(string $descripcion) Return Imagenes objects filtered by the descripcion column
 * @method     array findByNombreArchivo(string $nombre_archivo) Return Imagenes objects filtered by the nombre_archivo column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseImagenesQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseImagenesQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Imagenes', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ImagenesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     ImagenesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ImagenesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ImagenesQuery) {
            return $criteria;
        }
        $query = new ImagenesQuery();
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
     * @return   Imagenes|Imagenes[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ImagenesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ImagenesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Imagenes A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_IMAGENES`, `PERSONA_JURIDICA_ID_PERSONA_JURIDICA`, `DESCRIPCION`, `NOMBRE_ARCHIVO` FROM `imagenes` WHERE `ID_IMAGENES` = :p0';
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
            $obj = new Imagenes();
            $obj->hydrate($row);
            ImagenesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Imagenes|Imagenes[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Imagenes[]|mixed the list of results, formatted by the current formatter
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
     * @return ImagenesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ImagenesPeer::ID_IMAGENES, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ImagenesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ImagenesPeer::ID_IMAGENES, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_imagenes column
     *
     * Example usage:
     * <code>
     * $query->filterByIdImagenes(1234); // WHERE id_imagenes = 1234
     * $query->filterByIdImagenes(array(12, 34)); // WHERE id_imagenes IN (12, 34)
     * $query->filterByIdImagenes(array('min' => 12)); // WHERE id_imagenes > 12
     * </code>
     *
     * @param     mixed $idImagenes The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ImagenesQuery The current query, for fluid interface
     */
    public function filterByIdImagenes($idImagenes = null, $comparison = null)
    {
        if (is_array($idImagenes) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(ImagenesPeer::ID_IMAGENES, $idImagenes, $comparison);
    }

    /**
     * Filter the query on the persona_juridica_id_persona_juridica column
     *
     * Example usage:
     * <code>
     * $query->filterByPersonaJuridicaIdPersonaJuridica(1234); // WHERE persona_juridica_id_persona_juridica = 1234
     * $query->filterByPersonaJuridicaIdPersonaJuridica(array(12, 34)); // WHERE persona_juridica_id_persona_juridica IN (12, 34)
     * $query->filterByPersonaJuridicaIdPersonaJuridica(array('min' => 12)); // WHERE persona_juridica_id_persona_juridica > 12
     * </code>
     *
     * @see       filterByPersonaJuridica()
     *
     * @param     mixed $personaJuridicaIdPersonaJuridica The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ImagenesQuery The current query, for fluid interface
     */
    public function filterByPersonaJuridicaIdPersonaJuridica($personaJuridicaIdPersonaJuridica = null, $comparison = null)
    {
        if (is_array($personaJuridicaIdPersonaJuridica)) {
            $useMinMax = false;
            if (isset($personaJuridicaIdPersonaJuridica['min'])) {
                $this->addUsingAlias(ImagenesPeer::PERSONA_JURIDICA_ID_PERSONA_JURIDICA, $personaJuridicaIdPersonaJuridica['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($personaJuridicaIdPersonaJuridica['max'])) {
                $this->addUsingAlias(ImagenesPeer::PERSONA_JURIDICA_ID_PERSONA_JURIDICA, $personaJuridicaIdPersonaJuridica['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ImagenesPeer::PERSONA_JURIDICA_ID_PERSONA_JURIDICA, $personaJuridicaIdPersonaJuridica, $comparison);
    }

    /**
     * Filter the query on the descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByDescripcion('fooValue');   // WHERE descripcion = 'fooValue'
     * $query->filterByDescripcion('%fooValue%'); // WHERE descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ImagenesQuery The current query, for fluid interface
     */
    public function filterByDescripcion($descripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descripcion)) {
                $descripcion = str_replace('*', '%', $descripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ImagenesPeer::DESCRIPCION, $descripcion, $comparison);
    }

    /**
     * Filter the query on the nombre_archivo column
     *
     * Example usage:
     * <code>
     * $query->filterByNombreArchivo('fooValue');   // WHERE nombre_archivo = 'fooValue'
     * $query->filterByNombreArchivo('%fooValue%'); // WHERE nombre_archivo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nombreArchivo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ImagenesQuery The current query, for fluid interface
     */
    public function filterByNombreArchivo($nombreArchivo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nombreArchivo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nombreArchivo)) {
                $nombreArchivo = str_replace('*', '%', $nombreArchivo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ImagenesPeer::NOMBRE_ARCHIVO, $nombreArchivo, $comparison);
    }

    /**
     * Filter the query by a related PersonaJuridica object
     *
     * @param   PersonaJuridica|PropelObjectCollection $personaJuridica The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   ImagenesQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPersonaJuridica($personaJuridica, $comparison = null)
    {
        if ($personaJuridica instanceof PersonaJuridica) {
            return $this
                ->addUsingAlias(ImagenesPeer::PERSONA_JURIDICA_ID_PERSONA_JURIDICA, $personaJuridica->getIdPersonaJuridica(), $comparison);
        } elseif ($personaJuridica instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ImagenesPeer::PERSONA_JURIDICA_ID_PERSONA_JURIDICA, $personaJuridica->toKeyValue('PrimaryKey', 'IdPersonaJuridica'), $comparison);
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
     * @return ImagenesQuery The current query, for fluid interface
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
     * @param   Imagenes $imagenes Object to remove from the list of results
     *
     * @return ImagenesQuery The current query, for fluid interface
     */
    public function prune($imagenes = null)
    {
        if ($imagenes) {
            $this->addUsingAlias(ImagenesPeer::ID_IMAGENES, $imagenes->getIdImagenes(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseImagenesQuery