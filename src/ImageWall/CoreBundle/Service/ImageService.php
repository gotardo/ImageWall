<?php

namespace ImageWall\CoreBundle\Service;

use BluesBand\PersistenceBundle\Service\SqlPersistenceService;
use ImageWall\CoreBundle\Entity\Post;

/**
 * Class PostService
 * @package ImageWall\CoreBundle
 */
class ImageService
{
    /**
     * Generate a download URI for a post's image
     *
     * @param Post $post
     * @return string
     */
    public function getImageUri(Post $post)
    {
        $xmlFile = pathinfo($post->getImg());
        return sprintf('/images/%s/%s', $post->getPostId(), $xmlFile['basename']);
    }
}
