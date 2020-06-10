
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
            <form class="form-horizontal" action="{{route('frontend.myintern-proposals.update', ['myintern_proposal' => $data->id])}}" method="post" enctype="multipart/form-data">
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

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label class="form-label"for="start_at">Tanggal Mulai</label>
                            <input class="form-control" id="start_at" type="date" name="start_at" placeholder="date" value="{{$data->start_at}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                            <label class="form-label"for="end_at">Tanggal Selesai</label>
                            <input class="form-control" id="end_at" type="date" name="end_at" value="{{$data->end_at}}" placeholder="date">
                            </div>
                        </div>
                    </div>
                   
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="notes">Notes</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="notes" name="notes" rows="3" placeholder="Content..">{{$data->notes}}</textarea>
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