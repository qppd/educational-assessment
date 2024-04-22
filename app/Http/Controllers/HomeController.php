<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Professor;
use App\Models\Student;
use App\Models\Examination;

class HomeController extends Controller
{

    function fetchHome()
    {
        $administrators = User::whereIn('role', [0, 1])
            ->select(DB::raw('COUNT(*) as administrator_count'))
            ->get();

        $professors = User::where('role', '=', 2)
            ->select(DB::raw('COUNT(*) as professors_count'))
            ->get();

        $students = User::where('role', '=', 3)
            ->select(DB::raw('COUNT(*) as students_count'))
            ->get();

        $examinations = Examination::whereIn('status', [0, 1])
            ->select(DB::raw('COUNT(*) as examinations_count'))
            ->get();

            $limit= 10;
            $rankedStudents = User::select('users.id', 'users.role', 'users.firstname', 'users.surname', 'users.photo', DB::raw('AVG(results.score) as average_score'))
            ->join('results', 'users.id', '=', 'results.user_id')
            ->groupBy('users.id', 'users.role', 'users.firstname', 'users.surname', 'users.photo') // Explicitly include all columns from 'users'
            ->orderByDesc('average_score')
            ->limit($limit)
            ->get();

        // $examinations = User::where('role', 3)
        //     ->select(DB::raw('COUNT(*) as examinations_count'))
        //     ->get();

        //$examinations = [];

        return view('home', ['administrators' => $administrators, 'professors' => $professors, 'students' => $students, 'examinations' => $examinations, 'rankedStudents' => $rankedStudents]);
    }
}