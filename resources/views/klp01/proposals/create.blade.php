@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Proposal KP' => route('frontend.myintern-proposals.index'),
        'Tambah' => '#'
    ]) !!}
@endsection

@section('toolbar')
    {!! cui()->toolbar_btn(route('frontend.myintern-proposals.index'), 'cil-playlist-add', 'List Proposal') !!}
@endsection

@section('content')

    {{ html()->form('POST', route('frontend.myintern-proposals.store'))->acceptsFiles()->open() }}

    <div class="card">
        <div class="card-header">
            <strong> <i class="cil-plus"></i> Tambah Proposal KP</strong>
        </div>

        <div class="card-body">

            @include('klp01.proposals._form')

        </div>

        <div class="card-footer">
            <input type="submit" class="btn btn-primary" value="Simpan" />
        </div>
    </div>

    {{ html()->form()->close() }}

@endsection