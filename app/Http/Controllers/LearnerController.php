<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearnerController extends Controller
{
    public function dashbaord()
    {
        return view("astrohub.learner.dashboard");
    }
}
