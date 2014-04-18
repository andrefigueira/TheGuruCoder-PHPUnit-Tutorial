<?php

class PagesTest extends PHPUnit_Framework_TestCase
{

    public function testRenderReturnsHelloWorld()
    {

        $pages = new \Controllers\Core\Web\Pages();

        $expected = 'Hello World';

        $this->assertEquals($expected, $pages->render());

    }

    public function testReturnTrueReturnsTrue()
    {

        $pages = new \Controllers\Core\Web\Pages();

        $this->assertTrue($pages->returnTrue());

    }

    public function testReturnArrayReturnsValidArray()
    {

        $pages = new \Controllers\Core\Web\Pages();

        $this->assertTrue(is_array($pages->returnArray()));

    }

    public function testReturnArrayReturnsNonEmptyArray()
    {

        $pages = new \Controllers\Core\Web\Pages();

        $this->assertTrue((count($pages->returnArray()) > 0));

    }

}