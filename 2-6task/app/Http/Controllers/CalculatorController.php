<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class CalculatorController extends Controller
{
    public function index(Request $request)
    {
        $firstnumber = $request->input('firstnumber');
        $secoundnumber = $request->input('secoundnumber');
        $operetor = $request->input('operator');
        $result = 0;
        if ($operetor == '+') {
            $result =  $firstnumber + $secoundnumber;
        }elseif ($operetor == '-') {
            $result =  $firstnumber - $secoundnumber;
        }elseif ($operetor == '/') {
            $result =  $firstnumber / $secoundnumber;
        }elseif ($operetor == '*') {
            $result =  $firstnumber * $secoundnumber;
        }else {
            $result = 0 ;
        }

        return view('calculater', compact('result'));
    }
}
//     //
//     public function index(Calculator $calculator): View
//     {
//         return view('calculator', ['operations' => $calculator-> getOperations(),]);
//     }

//     public function add(int $a, int $b): int
//     {
//         return $a + $b;
//     }

//     public function subtract(int $a, int $b): int
//     {
//         return $a - $b;
//     }

//     public function multiply(int $a, int $b): int
//     {
//         return $a * $b;
//     }

//     public function divide(int $a, int $b): int
//     {
//         return floor($a / $b);
//     }



// }

