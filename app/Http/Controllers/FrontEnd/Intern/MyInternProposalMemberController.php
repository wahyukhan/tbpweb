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



        if($internship){
             notify('success', 'Berhasil menambahkan Member');
             return redirect()->route('frontend.myintern-proposals.members.create', $myintern_proposal);
        }else {

             notify('failed', 'gagal menambahkan Member');
=======


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
        $internship =Internship::where('internship_proposal_id',$myintern_proposal)->where('student_id', $id);
        $internship->delete();

        if($internship){
            return back()->with('delete', 'Data Berhasil Dihapus!');
        }
        
        
    }
}