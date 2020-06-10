@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Proposal KP' => route('frontend.myintern-proposals.members.create',$myintern_proposal),
        'Tambah' => '#'
    ]) !!}
@endsection


@section('content')

    {{ html()->form('POST', route('frontend.myintern-proposals.members.store',$myintern_proposal))->acceptsFiles()->open() }}

    <div class="card">
        <div class="card-header">
            <strong> <i class="cil"></i> Tambah Member KP</strong>
        </div>

        <div class="card-body">

            @include('klp01.member._form')

        </div>

        <div class="card-footer">
            <input type="submit" class="btn btn-primary" value="Tambah" />
        </div>
 
    {{ html()->form()->close() }}    

        <div class="card-header">
            <strong>List Member KP</strong>
        </div>
        <div class="card-body">
            <table class="table table-outline table-hover">
                <thead class="thead-light">
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                        @forelse($students as $student)
                            <tr>
                                <td>{{ $student->student->nim }}</td>
                                <td>{{ $student->student->name }}</td>
                                <!-- <td class="text-center"></td> -->
                                <td>
                                    <form method="POST" action="./{{$student->student->id}}"
                                        onsubmit="return confirm('Yakin akan menghapus data?')">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <div class="form-group">
                                            <input type="submit" class="btn btn-danger" value="Delete">
                                        </div>
                                    </form>
                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="3">
                                    <h6 class="text-center">Tidak ada mahasiswa</h6>
                                </td>
                            </tr>
        
                        @endforelse
                </tbody>
            </table>  
            {!! cui()->btn(route('frontend.myintern-proposals.index'),'','Simpan') !!}  
        </div>

@endsection