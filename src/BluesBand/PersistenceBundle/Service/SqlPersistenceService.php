<?php

namespace BluesBand\PersistenceBundle\Service;

use Doctrine\ORM\EntityManagerInterface;

abstract class SqlPersistenceService implements IPersistanceService
{
    private $doctrine;

    /**
     * SqlPersistenceService constructor.
     * @param EntityManagerInterface $doctrine
     */
    public function __construct(EntityManagerInterface $doctrine)
    {
        $this->doctrine = $doctrine;
    }


    /**
     * Saves an Entity object that can be managed by Doctrine's Entity Manager.
     *
     * @param $object
     */
    public function save($object)
    {
        return $this->persist($object)->flush();
    }

    /**
     * @param $object
     *
     * @return $this
     * @codeCoverageIgnore
     */
    protected function persist($object)
    {
        $this->doctrine->persist($object);
        return $this;
    }

    /**
     * @codeCoverageIgnore
     */
    protected function flush()
    {
        $this->doctrine->flush();
    }

    /**
     * @return EntityManagerInterface
     * @codeCoverageIgnore
     */
    protected function getEm()
    {
        return $this->doctrine;
    }

    /**
     * @param $name
     *
     * @return \Doctrine\Common\Persistence\ObjectRepository
     *
     * @codeCoverageIgnore
     */
    protected function getRepo($name)
    {
        return $this->getEm()->getRepository($name);
    }

    /**
     * Find and load object by ID
     * @param $id
     */
    protected function find($id) {
        return $this->getRepo(static::REPO_NAME)->find($id);
    }

    abstract public function getRepoName();
}
