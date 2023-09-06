<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $clients = Client::where('name', 'like', '%' . $request->search . '%')
                ->orWhere('nit', 'like', '%' . $request->search . '%')
                ->paginate(15);
        } else {
            $clients = Client::paginate(15);
        }

        return view('pages.admin.client.index', [
            'clients' => $clients,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.client.create');
    }

    /**
     * get all active clients
     */
    public function getAll(){
        $clients = Client::where('is_active', true)->get();
        return response()->json($clients);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientRequest $request): RedirectResponse
    {
        //Validate the request
        $request->validated();

        //Create a new client
        $client = new Client();
        $client->name = $request->name;
        $client->nit = $request->nit;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->save();

        
        return Redirect::route('admin.clients.index')->with('success', 'Cliente creado.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
        return view('pages.admin.client.edit', [
            'client' => $client,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        //
        $request->validated();
        $client->name = $request->name;
        $client->nit = $request->nit;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->save();

        return Redirect::route('admin.clients.index')->with('success', 'Cliente actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //Delete the client
        $client->delete();
        return Redirect::route('admin.clients.index');
    }
}
