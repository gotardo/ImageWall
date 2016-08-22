<?php
/**
 * Created by PhpStorm.
 * User: gotardo
 * Date: 22/8/16
 * Time: 18:02
 */

namespace ImageWall\CoreBundle\Service;


use BluesBand\HttpBundle\PersistenceBundle\Service\ObjectNotFoundException;
use BluesBand\PersistenceBundle\Service\SqlPersistenceService;
use ImageWall\CoreBundle\Entity\Post;

/**
 * Class PostService
 * @package ImageWall\CoreBundle
 */
class PostService extends SqlPersistenceService
{
    const REPO_NAME = 'ImageWallCoreBundle:Post';

    /**
     * Creates and return a new Post object
     *
     * @param array $newPostData
     * @return Post
     */
    public function create(array $newPostData = []) {
        $post = new Post();
        $post->setImg($newPostData['img']);
        $post->setUsrId($newPostData['usrId']);
        isset($newPostData['title']) && $post->setTitle($newPostData['title']);

        return $post;
    }

    /**
     * Gets a post by id
     *
     * @param $id
     * @return mixed
     *
     * @throws ObjectNotFoundException when the post is not found
     */
    public function getById($id) {
        $post = $this->find($id);
        if (!$post || $post->getDeletedAt()) {
            throw new ObjectNotFoundException($id, Post::class);
        }
        return $post;
    }

    public function getRepoName()
    {
        return self::REPO_NAME;
    }

}