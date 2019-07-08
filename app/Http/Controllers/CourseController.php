<?php

namespace App\Http\Controllers;

class CourseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->courses = [
            'How to make a cup of tea',
            'How to bake a cake',
            'Homemade bread',
        ];
    }

    /**
     * Get all courses
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json($this->courses, 200);
    }

    /**
     * Get a course by its 'id'
     *
     * @param string $id
     * @return Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $course = $this->courses[(int)$id];
        } catch (\Exception $e) {
            return response('Resource not found', 404);
        }

        return response()->json($course, 200);
    }

    /**
     * Add a new course
     *
     * @return Illuminate\Http\Response
     */
    public function store()
    {
        return 'store';
    }

    /**
     * Update an existing course
     *
     * @return Illuminate\Http\Response
     */
    public function update()
    {
        return 'update';
    }
    
    /**
     * Remove a course
     *
     * @return void
     */
    public function destroy()
    {
        return 'destroy';
    }


    public function options()
    {
        return 'options';
    }
}
