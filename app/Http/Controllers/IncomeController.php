<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\Expance;


class IncomeController extends Controller
{
    public function IncomeForm(Request $request){

        if(isset($_GET['role'])){
            $income = Income::where('income_from', $_GET['role'])->get();
            //$expance = Expance::where('expance_from', $_GET['role'])->get();
         
            $sum = Income::where('income_from', $_GET['role'])->sum('income_amount');

           // $summ = Expance::sum('expance_amount');
        }
        elseif(isset($_GET['banking'])){
            $income = Income::where('bank', $_GET['banking'])->get();
           $sum = Income::where('bank', $_GET['banking'])->sum('income_amount');

        } else{
            $income = Income::all();
           // $expance = Expance::all();
         
            $sum = Income::sum('income_amount');
          // $summ = Expance::sum('expance_amount');
        }


        // if(isset($_GET['banking'])){
        //     $income = Income::where('bank', $_GET['banking'])->get();
        //     $sum = Income::where('bank', $_GET['banking'])->sum('income_amount');
        // }else{
        //     $income = Income::all();
        //     $sum = Income::sum('income_amount');
          
        // }

        // var_dump($_GET['role']);
        
       
        return view('admin.all_data', compact('income', 'sum'));
    }

    public function IncomeAdd(){
        return view('admin.income_form');
    }
    public function IncomeStore(Request $request){
        Income::insert([
            'income_from'=>$request->income_from,
            'income_amount'=>$request->income_amount,
            'date'=>$request->date,
            'bank'=>$request->bank,    
        ]);
        return redirect()->route('income.all');
    }


}