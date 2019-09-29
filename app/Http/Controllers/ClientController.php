<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clients = Client::orderBy('id', 'desc')->get();
        $lastUpdate = Client::orderBy('id', 'desc')->first();
        return view('home', compact('clients', 'lastUpdate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientManage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateRequest($request);
       // Client::create($data);
        $client = new Client();
        $this->clientData($client, $request);

        session()->flash('status', '<b>Nice!</b> You are now logged in');
        session()->flash('type', 'success');


        return redirect('dash')->with('status', 'Client has been created !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clients = Client::find($id);
        return view('clientManage.edit', compact('clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client, $id)
    {
         $this->validateRequest($request);
        // $client = Client::find($id);
        // $input = $request->all();
        // return redirect()->back();

    $client = Client::find($id);
    $this->clientData($client, $request);


        return redirect('edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client, $id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect('/edit');
    }

    public function upgrate(Client $client){
        $clients = Client::orderBy('id', 'desc')->get();

        return view('clientManage.upgrate', compact('clients'));
    }

  
    private function validateRequest($request){
        return $request->validate([
            'title' => 'required',
            'description' => 'required|min:6',
            'status' => 'required',
            'phone' => 'required|max:19',
            'created_at' => 'date',
            'updated_at' => 'date',
        ]);
    }
    private function clientData($client, $request){
        $client->title = $request->title;
        $client->description = $request->description;
        $client->status = $request->status;
        $client->phone = $request->phone;
        $client->created_at = $request->created_at;
        $client->updated_at = $request->updated_at;
            $client->save();
    }
}
