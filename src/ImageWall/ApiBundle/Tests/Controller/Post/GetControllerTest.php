<?php

namespace ImageWall\ApiBundle\Tests\Controller\Post;

use ImageWall\ApiBundle\Controller\Post\GetController;

class GetControllerTest extends \PHPUnit_Framework_TestCase {

    /**
     * Test that post controller returns a valid response with the
     */
    public function test_GetController_ReturnsValidPostObject(){

        new GetController();
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
