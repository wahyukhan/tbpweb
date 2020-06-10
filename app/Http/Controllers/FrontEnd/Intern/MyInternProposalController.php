<?php

namespace App\Http\Controllers\Frontend\Intern;



class MyInternProposalController extends Controller
{

    public function index()
    {   
        $user_id = auth()->user()->id;
        $internships = Internship::where('student_id', $user_id)->get();

        return view('klp01.proposals.index', compact('internships'));
    }

    
    public function create()
    {
        $agencies=InternshipAgency::all()->pluck('name','id');
        return view('klp01.proposals.create', compact('agencies'));
    }

    
    public function store(Request $request)
    {


    }

    
    public function show($id)
    {
        return $id;
    }

   
    public function edit($id)
    {
        $data['data'] = InternshipProposal::whereId($id)->first();
        $data['agency'] = InternshipAgency::All();
        return view('klp01.proposals.edit2', $data);
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'agency_id' => 'required',
            'background' => 'required',
            'plan' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
            'notes' => 'required',
        ]);
            InternshipProposal::where('id', $id)->update([
                'agency_id' => $request->agency_id,
                'background' => $request->background,
                'plan' => $request->plan,
                'start_at' => $request->start_at,
                'end_at' => $request->end_at,
                'notes' => $request->notes,
                
            ]);
            notify('success', 'Berhasil mengubah data');
        return redirect('/myintern-proposals');


    }

   
    public function destroy($id)
    {
    $internship = Internship::where('internship_proposal_id', $id)->delete();

        if( $internship){
            InternshipProposal::where('id', $id)->delete(); 
        notify('success', 'Berhasil menghapus proposal ');
        return redirect()->route('frontend.myintern-proposals.index');
        }}
}
