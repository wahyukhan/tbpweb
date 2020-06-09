<?php

namespace App\Http\Controllers\Frontend\Intern;

use App\Models\InternshipProposal;
use App\Models\InternshipAgency;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyInternAcceptanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {     
        $data['data'] = InternshipProposal::whereId($id)->first();
        $data['agency'] = InternshipAgency::All();
        return view('klp01.proposals.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $request->validate([
        'agency_id' => 'required',
        'background' => 'required',
        'plan' => 'required',
        'start_at' => 'required',
        'end_at' => 'required',
        'status' => 'required',
        'notes' => 'required',
        'type' => 'required',
    ]);
       $file = $request->file('file');
       if(isset($file)){
        $tujuan_upload = 'files/intern-proposal';
        $file->move($tujuan_upload,$file->getClientOriginalName());

        InternshipProposal::where('id', $id)->update([
            'agency_id' => $request->agency_id,
            'background' => $request->background,
            'plan' => $request->plan,
            'start_at' => $request->start_at,
            'end_at' => $request->end_at,
            'status' => $request->status,
            'file' => $file->getClientOriginalName(),
            'notes' => $request->notes,
            'type' => $request->type
        ]);
    }else{
        InternshipProposal::where('id', $id)->update([
            'agency_id' => $request->agency_id,
            'background' => $request->background,
            'plan' => $request->plan,
            'start_at' => $request->start_at,
            'end_at' => $request->end_at,
            'status' => $request->status,
            'notes' => $request->notes,
            'type' => $request->type
        ]);
    }        
    return redirect('/myintern-proposals')->with('status', 'Berhasil mengubah data');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
