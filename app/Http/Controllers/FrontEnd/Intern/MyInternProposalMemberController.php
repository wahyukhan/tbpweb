<?php

namespace App\Http\Controllers\Frontend\Intern;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Internship;

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

   
    public function create($myintern_proposal)
    {
        $member=Student::all()->pluck('name','id');
        $students = Internship::where('internship_proposal_id',$myintern_proposal)->get();
        return view('klp01.members.create', compact('member','myintern_proposal','students'));
    }

    
    public function store(Request $request, $myintern_proposal)
    {

        $internship = Internship::create([
             'internship_proposal_id' => $myintern_proposal,
             'student_id' => $request->student_id]
        );

        if($internship){
             notify('success', 'Berhasil menambahkan Member');
             return redirect()->route('frontend.myintern-proposals.members.create', $myintern_proposal);
        }else {
             notify('failed', 'gagal menambahkan member');
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