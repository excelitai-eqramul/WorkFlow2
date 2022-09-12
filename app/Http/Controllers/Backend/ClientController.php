<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Carbon\Carbon;


class ClientController extends Controller
{

    public function ClientView(){
        $clients = Client::all();


        return view('client.view_client',compact('clients'));
    }



// employee store
public function ClientViewStore(Request $request){
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'address' => 'required',

    ]);
    Client::insert([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->back();
   }



   public function ClientEdit($id){
    $client_edit = Client::find($id);
    return view('client.edit_client',compact('client_edit'));
}

public function ClientUpdate(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required',
        'address' => 'required'

    ]);

    Client::where('id', $request->client_id)->update([
        'name' => $request->name,
        'email' => $request->email,
        'address' => $request->address,
        'created_at' => Carbon::now(),
    ]);

    return redirect()->to('client/show');
}





   public function ClientDelete($id){
    $client_delete = Client::find($id)->delete();
    return redirect()->back();
}






}
