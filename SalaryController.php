<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function index()
    {
        return view('salary');
    }

    public function calculateSalary(Request $request)
    {
        $basic = $request->basic;
        $allowance = $request->allowance;
        $deduction = $request->deduction;

        $salary = $basic + $allowance - $deduction;

        return view('salary', compact('basic', 'allowance', 'deduction', 'salary'));
    }
}