<?php

namespace ImageWall\ApiBundle\Controller\Post;

use BluesBand\Foundation\Response\ResponseOk;
use BluesBand\HttpBundle\Controller\IController;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class GetController
 * @package ImageWall\ApiBundle\Controller\Post
 */
class GetController implements IController
{
    private $postService;
    private $imageService;

    /**
     * CreateController constructor.
     * @param PostService $postService
     */
    public function __construct(PostService $postService, ImageService $imageService)
    {
        $this->postService = $postService;
        $this->imageService = $imageService;
    }


    /**
     * @param Request $request
     * @return ResponseOk
     */
    public function indexAction(Request $request)
    {

        $post = $this->postService->getById($request->get('postId'));

        /**
         * @todo perform this mapping using a transformer.
         */
        return new ResponseOk([
            'post' => [
                'postId' => $post->getPostId(),
                'usrId' => $post->getUsrId(),
                'title' => $post->getTitle(),
                'img' => $this->imageService->getImageUri($post),
            ],
        ]);
    }
}
