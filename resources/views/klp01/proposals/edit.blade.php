@extends('layouts.admin')

@section('breadcrumb')
{!! cui()->breadcrumb([
    'Home' => route('home'),
    'Proposal KP' => route('frontend.myintern-proposals.index'),
    'Edit' => '#'
    ]) !!}
    @endsection

    @section('content')

    <div class="card">

        <div class="card-header">
            <strong>Edit Proposal KP</strong>
        </div>

        <div class="card-body">
            <form class="form-horizontal" action="{{route('frontend.myintern-acceptances.update', ['myintern_acceptance' => $data->id])}}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">Agency</label>
                    <div class="col-md-9">
                        <select class="form-control" id="agency_id" name="agency_id">
                            @foreach ($agency as $element)
                            <option @if ($data->agency_id == $element->id)
                                selected @endif value="{{$element->id}}">{{$element->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="background">Background</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="background" name="background" rows="3">{{$data->background}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="plan">Plan</label>
                        <div class="col-md-9">
                            <input class="form-control" id="plan" type="text" name="plan" value="{{$data->plan}}" placeholder="Text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="start_at">Start At</label>
                        <div class="col-md-9">
                            <input class="form-control" id="start_at" type="date" name="start_at" placeholder="date" value="{{$data->start_at}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="end_at">End At</label>
                        <div class="col-md-9">
                            <input class="form-control" id="end_at" type="date" name="end_at" value="{{$data->end_at}}" placeholder="date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="status">Status</label>
                        <div class="col-md-9">
                            <select class="form-control" id="select1" name="status">                                
                                <option @if ($data->status == 0) selected @endif value="0">Draft</option>
                                <option @if ($data->status == 1) selected @endif value="1">Submitted</option>
                                <option @if ($data->status == 2) selected @endif value="2">Diterima</option>
                                <option @if ($data->status == 3) selected @endif value="3">Perlu Revisi</option>
                                <option @if ($data->status == 4) selected @endif value="4">Ditolak</option>
                            </select>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="file-input">File input</label>
                        <div class="col-md-9">
                            <a href="{{asset('files/intern-proposal/'.$data->file)}}" target="_blank" style="margin-bottom: 10px;display: block">{{$data->file}}&nbsp;&nbsp;&nbsp;<i class="cil-file" ></i></a>
                            <input id="file-input" type="file" name="file">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="notes">Notes</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="notes" name="notes" rows="3" placeholder="Content..">{{$data->notes}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="type">Type</label>
                        <div class="col-md-9">
                            <input class="form-control" id="type" type="number" name="type" value="{{$data->type}}" autocomplete="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="type"></label>
                        <div class="col-md-9">
                            <br>
                           <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="card-footer">

            </div>

        </div>

        @endsection