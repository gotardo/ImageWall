<?php

namespace ImageWall\CoreBundle\Tests\Service;
use Doctrine\ORM\EntityManagerInterface;
use ImageWall\CoreBundle\Entity\Post;
use ImageWall\CoreBundle\Service\PostService;

/**
 * Class PostServiceTest
 * @package ImageWall\CoreBundle\Tests\Service
 * @coversDefaultClass ImageWall\CoreBundle\Service\PostService
 */
class PostServiceTest extends \PHPUnit_Framework_TestCase {

    /**
     * @covers ::getById
     */
    public function test_getById_returnsValidPostObject_IfExists() {

        $repository = $this->getMockBuilder(EntityRepository::class)->disableOriginalConstructor()->getMock();
        $repository->method('find')->willReturn(new Post());
        $emMock = $this->createMock(EntityManagerInterface::class);
        $emMock->expects($this->once())->method('getRepository')->will($this->returnValue($repository));

        $service = new PostService($emMock);
        $post = $service->getById(1);

        $this->assert(get_class($post) == Post::class);

    }

    /**
     * @covers ::getById
     * @expectedException \BluesBand\PersistenceBundle\Service\ObjectNotFoundException
     */
    public function test_getById_ThrowsException_onError() {
        $repository = $this->getMockBuilder(EntityRepository::class)->disableOriginalConstructor()->getMock();
        $repository->method('find')->willReturn(null);
        $emMock = $this->createMock(EntityManagerInterface::class);
        $emMock->expects($this->once())->method('getRepository')->will($this->returnValue($repository));

        $service = new PostService($emMock);
        $service->getById(99999);

    }

    /**
     * @covers ::create
     */
    public function test_create_returnsValidPostObject_Always() {
        $emMock = $this->createMock(EntityManagerInterface::class);
        $service = new PostService($emMock);

        $postData = [
            'img' => './path/to/img.jpg',
            'title' => 'The Awesome Photo',
            'usrId' => 1,
        ];

        $post = $service->create($postData);

        $this->assertEquals($postData['img'], $post->getImg(), sprintf('img was not properly set up: %s found', $post->getImg()));
        $this->assertEquals($postData['title'], $post->getTitle(), sprintf('title was not properly set up: %s found', $post->getTitle()));
        $this->assertEquals($postData['usrId'], $post->getUsrId(), sprintf('usrId was not properly set up: %s found', $post->getUsrId()));

    }
}