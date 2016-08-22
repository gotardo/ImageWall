<?php

namespace ImageWall\ApiBundle\Controller\Image;

use BluesBand\HttpBundle\Controller\IController;
use ImageWall\CoreBundle\Service\PostService;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class GetController
 * @package ImageWall\ApiBundle\Controller\Image
 */
class GetController implements IController
{
    private $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function indexAction(Request $request)
    {
        $post = $this->postService->getById($request->get('postId'));
        $content = file_get_contents($post->getImg());
        $response = new Response($content, 200);
        return $response;
    }
}
