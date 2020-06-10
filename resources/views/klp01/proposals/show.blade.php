@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Proposal KP' => route('frontend.myintern-proposals.index'),
        'Detail KP' => '#'
    ]) !!}
@endsection

@section('toolbar')
    {!! cui()->toolbar_btn(route('frontend.myintern-proposals.index'), 'cil-hamburger-menu', 'List Proposal') !!}
    {!! cui()->toolbar_btn(route('frontend.myintern-proposals.edit', $myintern_proposal), 'cil-pencil', 'Edit Proposal') !!}
    {!! cui()->toolbar_btn(route('frontend.myintern-acceptances.edit', $myintern_proposal), 'cil-arrow-thick-from-bottom', 'Upload File') !!}
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">

                        {{-- CARD HEADER--}}
                        <div class="card-header">
                            <strong><i class="cil-zoom"></i> Detail KP</strong>
                        </div>

                        {{-- CARD BODY--}}
                        <div class="card-body">
                            @include('klp01.proposals._detail')
                        </div>

                        {{--CARD FOOTER--}}
                        <div class="card-footer">
                        <a href="{{ route('frontend.myintern-proposals.index') }}" class="btn btn-primary"> Kembali </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </>
        
                   

                    

@endsection
