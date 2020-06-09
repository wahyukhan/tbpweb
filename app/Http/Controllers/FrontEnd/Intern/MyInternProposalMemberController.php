<?php

namespace App\Http\Controllers\Frontend\Intern;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Internship;
use App\Models\InternshipProposal;

class MyInternProposalMemberController extends Controller
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
    public function create($myintern_proposal)
    {
        $member=Student::all()->pluck('name','id');
        $students = Internship::where('internship_proposal_id',$myintern_proposal)->get();
        return view('klp01.member.create', compact('member','myintern_proposal','students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $myintern_proposal)
    {
        $request->validate(Internship::validation_rules);
        $start = InternshipProposal::where('id',$myintern_proposal)->value('start_at');
        $end = InternshipProposal::where('id', $myintern_proposal)->value('end_at');
        
        $internship = Internship::create([
             'internship_proposal_id' => $myintern_proposal,
             'student_id' => $request->student_id,
            'start_at' => $start,
            'end_at' => $end ]);
       

        if($internship){
             notify('success', 'Berhasil menambahkan Member');
             return redirect()->route('frontend.myintern-proposals.members.create', $myintern_proposal);
        }else {
             notify('failed', 'gagal menambahkan Member');
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
    public function destroy($myintern_proposal, $id)
    {
        
        $internship =Internship::where('internship_proposal_id',$myintern_proposal)->where('student_id', $id)->delete();
        if($internship){
        
        return back()->with('delete', 'Data Berhasil Dihapus!');
        }
    }
}