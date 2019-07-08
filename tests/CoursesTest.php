<?php

class CoursesTest extends TestCase
{
    public function testGetAllCourses()
    {
        $response = $this->call('GET', '/courses');

        $this->assertEquals(200, $response->status());

        // fails?
        // $this->seeJson([
        //     'How to make a cup of tea',
        //     'How to bake a cake',
        //     'Homemade bread',
        // ]);
    }
}
