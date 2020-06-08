<?php

namespace App\Http\Controllers\Frontend\Intern;

use App\Http\Controllers\Controller;
use App\Models\Internship;
use App\Models\InternshipAgency;
use App\Models\InternshipProposal;
use Illuminate\Http\Request;

class MyInternProposalController extends Controller
{

    public function index()
    {
        $user_id = auth()->user()->id;
        $internships = Internship::where('student_id', $user_id)->get();

        return view('klp01.proposals.index', compact('internships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agencies=InternshipAgency::all()->pluck('name','id');
        return view('klp01.proposals.create', compact('agencies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(InternshipProposal::validation_rules);

        $internshipproposal = InternshipProposal::create([
             'agency_id' => request('agency_id'),
             'background' => request('background'),
             'plan' => request('plan'),
             'start_at' => request('start_at'),
             'end_at' => request('end_at')]);
        if($internshipproposal){
             notify('success', 'Berhasil menambahkan Proposal');
             return redirect()->route('frontend.myintern-proposals.members.create', $internshipproposal -> id);
        }else {
             notify('failed', 'gagal menambahkan Proposal');
        }
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
        //
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
        //
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
