<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

use Carbon\Carbon;


class TeamController extends Controller
{


    public function TeamView(){
        $teams = Team::all();
        return view('team.view_team',compact('teams'));
    }





//Team store
public function TeamStore(Request $request){

    $request->validate([
        'name' => 'required',
        'number_of_members' => 'required',
        'description' => 'required',

    ]);


        Team::insert([
            'name' => $request->name,
            'number_of_members' => $request->number_of_members,
            'description' => $request->description,

            'created_at' => Carbon::now(),
        ]);

        return Redirect()->back();
   }




   public function TeamDelete($id){
    $team_delete = Team::find($id)->delete();
    return redirect()->back();

}



}
