<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\Client;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {   
        if ($request->has('search')) {
            $documents = Document::whereHas('client', function ($query) use ($request) {
                $query->where('nit', 'like', '%' . $request->search . '%');
            })->paginate(15);
        } else {
            $documents = Document::with('client')->paginate(10);
        }

        return view('pages.admin.documents.index', [
            'documents' => $documents,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.documents.create', [
            'clients' => Client::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDocumentRequest $request)
    {
        if ($request->hasFile('file')) {
            $file = Storage::disk('public')->put('documents/' . $request->file('file')->getClientOriginalName(), $request->file('file')->getContent());
            $document = Document::create([
                'name' => $request->name,
                'description' => $request->description,
                'file_url' => $request->file('file')->getClientOriginalName(),
                'client_id' => $request->client_id,
            ]);
        }

        return Redirect::route('admin.documents.index')->with('success', 'Document created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(StoreDocumentRequest $request)
    {
        //Download the file
        $document = Document::findOrFail($request->id)->with('client')->first();

        return view('pages.admin.documents.edit', [
            'document' => $document,
            'clients' => Client::all(),
        ]);
    }

    /**
     * Get documents by client nit
     */
    public function getDocumentsByClientNit($nit)
    {
        $client = Client::where('nit', $nit)->first();
        $documents = Document::where('client_id', $client->id)->orderBy('id', 'desc')->limit(1)->get();
        return response()->json([
            'documents' => $documents,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function download(StoreDocumentRequest $request)
    {
        //Download the file
        $document = Document::findOrFail($request->id);
        return Storage::disk('public')->download('documents/' . $document->file_url);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDocumentRequest $request, Document $document)
    {
        $document = Document::findOrFail($request->id);
        if ($request->hasFile('file')) {
            $file = Storage::disk('public')->put('documents/' . $request->file('file')->getClientOriginalName(), $request->file('file')->getContent());
            $document->file_url = $request->file('file')->getClientOriginalName();
        }
        $document->name = $request->name;
        $document->description = $request->description;
        $document->client_id = $request->client_id;
        $document->save();
        return Redirect::route('admin.documents.index')->with('success', 'Document created.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        //
    }
}
