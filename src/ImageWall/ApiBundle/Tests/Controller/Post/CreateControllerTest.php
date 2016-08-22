<?php

namespace ImageWall\ApiBundle\Tests\Controller\Post;

use ImageWall\ApiBundle\Controller\Post\CreateController;
use Symfony\Component\HttpFoundation\Request;

class CreateControllerTest extends \PHPUnit_Framework_TestCase {

    public function getImage($filename) {
        return base64_encode(file_get_contents($filename));
    }

    public function validRequestProvider() {
        $imageDir = '/var/www/image-wall/src/ImageWall/ApiBundle/Tests/Resources/AllowedImages/';

        return [
            ['title 1', $imageDir . 'image 1.jpg'],
            ['title 2', $imageDir . 'image 2.jpg'],
            ['title 3', $imageDir . 'image 3.jpg'],
            [null, $imageDir . 'image 4.jpg'],
        ];
    }

    /**
     *
     * @param $title the title of the post
     * @param $filePath the path of the image to the post
     *
     * @dataProvider validRequestProvider
     */
    public function test_Create_ReturnsOKMessage_WhenDataIsValid($title, $filePath) {
        $controller = new CreateController();
        $request = new Request(['title' => $title, 'image' => $this->getImage($filePath)]);
        $response = $controller->indexAction($request);

        $this->assertTrue($response->isOk());

    }
}
