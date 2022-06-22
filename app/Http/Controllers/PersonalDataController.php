<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\PersonalData;
use App\Models\Skill;
use Illuminate\Http\Request;

class PersonalDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'skills' => Skill::all(),
            'generalData' => PersonalData::all(),
            'experience' => Experience::all(),
        ];

        return $data;
    }
}
