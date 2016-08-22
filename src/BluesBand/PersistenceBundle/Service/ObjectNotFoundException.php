<?php

namespace BluesBand\PersistenceBundle\Service;

/**
* ObjectNotFoundException class.
*
* Manage all the calls regarding Contexts
*
* @category Kayoo2\Core\PersistenceService
*
* @author   Gotardo González <gotardo.gonzalez@businessdecision.com>
* @license  URL Propietary
*
* @link     ObjectNotFoundException
*/
class ObjectNotFoundException extends \Exception
{
    /**
     * The id of the object.
     *
     * @var int|null
     */
    protected $id;

    /**
     * @var null The class of the object
     */
    protected $class;

    /**
     * ObjectNotFoundException constructor.
     *
     * @param int|null        $id
     * @param null            $class
     * @param int             $code
     * @param \Exception|null $exception
     */
    public function __construct($id = null, $class = null, $code = 404, \Exception $exception = null)
    {
        parent::__construct('Post not found: '.$id, $code, $exception);
        $this->id = $id;
        $this->class = $class;
    }

    /**
     * Get the object Id.
     *
     * @return int|null
     */
    public function getObjectId()
    {
        return $this->id;
    }

    /**
     * Get the object type.
     */
    public function getObjectType()
    {
        return $this->class;
    }
}