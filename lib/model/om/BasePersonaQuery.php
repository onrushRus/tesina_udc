<?php


/**
 * Base class that represents a query for the 'persona' table.
 *
 * 
 *
 * @method     PersonaQuery orderByCuitCuil($order = Criteria::ASC) Order by the cuit_cuil column
 * @method     PersonaQuery orderById($order = Criteria::ASC) Order by the id column
 *
 * @method     PersonaQuery groupByCuitCuil() Group by the cuit_cuil column
 * @method     PersonaQuery groupById() Group by the id column
 *
 * @method     PersonaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PersonaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PersonaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Persona findOne(PropelPDO $con = null) Return the first Persona matching the query
 * @method     Persona findOneOrCreate(PropelPDO $con = null) Return the first Persona matching the query, or a new Persona object populated from the query conditions when no match is found
 *
 * @method     Persona findOneByCuitCuil(string $cuit_cuil) Return the first Persona filtered by the cuit_cuil column
 * @method     Persona findOneById(int $id) Return the first Persona filtered by the id column
 *
 * @method     array findByCuitCuil(string $cuit_cuil) Return Persona objects filtered by the cuit_cuil column
 * @method     array findById(int $id) Return Persona objects filtered by the id column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePersonaQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BasePersonaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Persona', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PersonaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     PersonaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PersonaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PersonaQuery) {
            return $criteria;
        }
        $query = new PersonaQuery();
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
     * @return   Persona|Persona[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PersonaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PersonaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Persona A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `CUIT_CUIL`, `ID` FROM `persona` WHERE `ID` = :p0';
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
            $obj = new Persona();
            $obj->hydrate($row);
            PersonaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Persona|Persona[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Persona[]|mixed the list of results, formatted by the current formatter
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
     * @return PersonaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PersonaPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PersonaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PersonaPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the cuit_cuil column
     *
     * Example usage:
     * <code>
     * $query->filterByCuitCuil('fooValue');   // WHERE cuit_cuil = 'fooValue'
     * $query->filterByCuitCuil('%fooValue%'); // WHERE cuit_cuil LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cuitCuil The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaQuery The current query, for fluid interface
     */
    public function filterByCuitCuil($cuitCuil = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cuitCuil)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cuitCuil)) {
                $cuitCuil = str_replace('*', '%', $cuitCuil);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PersonaPeer::CUIT_CUIL, $cuitCuil, $comparison);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PersonaQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(PersonaPeer::ID, $id, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Persona $persona Object to remove from the list of results
     *
     * @return PersonaQuery The current query, for fluid interface
     */
    public function prune($persona = null)
    {
        if ($persona) {
            $this->addUsingAlias(PersonaPeer::ID, $persona->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BasePersonaQuery