<?php

namespace ImageWall\ApiBundle\Tests\Surface\Post;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GetPostTest extends WebTestCase  {

    /**
     * Test that post creation fails and return a bad request error if no image is sent.
     */
    public function test_GetPost_ReturnsValidPostObject(){
        $this->markTestIncomplete();
    }

    /**
     * Test that post creation works if
     */
    public function test_PostCreation_Returns200OK_IfImageSent(){
        $this->markTestIncomplete();
    }

    /**
     * Test that post creation returns a title in the response if the title was specified
     */
    public function test_PostCreation_ReturnsTitle_IfTitleSet() {
        $this->markTestIncomplete();
    }

    /**
     * Test that post creation fails if image is bigger than 20 Mb a title in the response if the title was specified
     */
    public function test_GetPost_Returns404_IfPostNotExist() {
        $this->markTestIncomplete();
    }
}
