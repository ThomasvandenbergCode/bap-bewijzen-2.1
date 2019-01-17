<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function test()
    {
        $exercise = new \App\Exercise();
        $exercise->exercise_title = 'benchpress';
        $exercise->exercise_category = 'chest';
        $exercise->exercise_image = 'a.png';
        $exercise->exercise_type = 'yeet';

        $exercise->save();

        return 'OK bewaard!';
    }
}
