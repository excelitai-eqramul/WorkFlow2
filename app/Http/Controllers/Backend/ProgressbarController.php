<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Progressbar;
use Carbon\Carbon;



class ProgressbarController extends Controller
{



    //Progressbar store
    public function ProgressbarStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'percentage' => 'required',
            'date_from' => 'required',
            'date_to' => 'required',
            'time_from' => 'required',
            'time_to' => 'required',
            'estimate' => 'required',
        ]);



        // $table->string('name');
        // $table->string('percentage');
        // $table->string('date_from');
        // $table->string('date_to');
        // $table->string('time_from');
        // $table->string('time_to');
        // $table->string('estimate');



        // Progressbar::insert([
        //     'name' => $request->name,
        //     'percentage' => $request->percentage,
        //     'date_from' => $request->date_from,
        //     'date_to' => $request->date_to,
        //     'time_from' => $request->time_from,
        //     'time_to' => $request->time_to,
        //     'estimate' => $request->estimate,



        //     'created_at' => Carbon::now(),
        // ]);


        foreach ($request->name as $key => $progessbar) {

            $expenseItemData = array(
                'customer_id'=> $customer->id,
                'progessbar'=> $progessbar,
            );

            $bfdgb = CustomerMultiBuilding::create($expenseItemData);
        }

        return Redirect()->back();
    }
}
