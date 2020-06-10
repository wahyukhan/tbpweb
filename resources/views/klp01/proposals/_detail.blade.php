<div class="card">
    <div class="card-header"><strong><i class="cil-user"></i> Detail Mahasiswa</strong></div>
    <div class="card-body">
        <div class="form-group row">
            <div class="col-md-3">
                <div class='form-label'>Nama Mahasiswa</div>
            </div>
        <div class="col-md-1 form-label">:</div>
        <div class="col-md-6">{{$internship->student->name}}</div>
        </div>

    <div class="form-group row">
        <div class="col-md-3">
           <div class='form-label'>NIM</div>
        </div>
        <div class="col-md-1 form-label">:</div>
        <div class="col-md-6">{{$internship->student->nim}}</div>
    </div>
    </div>
</div>              

<div class="card">
    <div class="card-header"><strong><i class="cil-people"></i> Anggota Kelompok</strong></div> 
    <div class="card-body"> 
        <table class="table table-outline table-hover">
            <thead class="thead-light">
                <tr>
                    <th><center>NIM</th>
                    <th><center>Nama</th>
                </tr>
                </thead>
                <tbody>
                        @forelse($students as $student)
                            <tr>
                                <td><center>{{ $student->student->nim }}</td>
                                <td><center>{{ $student->student->name }}</td>
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
    </div>  
</div> 

<div class="card">
    <div class="card-header"><strong><i class="cil-building"></i> Detail Instansi</strong></div>
    <div class="card-body">
        <div class="form-group row">
            <div class="col-md-3">
                <div class='form-label'>Nama Instansi</div>
            </div>
            <div class="col-md-1 form-label">:</div>
            <div class="col-md-6s">{{$internship->proposal->agency->name}}</div>
        </div>
        <div class="form-group row">
            <div class="col-md-3">
                <div class='form-label'>Alamat Instansi</div>
            </div>
            <div class="col-md-1 form-label">:</div>
            <div class="col-md-6s">{{$internship->proposal->agency->address}}</div>
        </div>
    </div> 
</div>          

<div class="card">
    <div class="card-header"><strong><i class="cil-book"></i> Detail Proposal</strong></div>
    <div class="card-body">
        <div class="form-group row">
            <div class="col-md-3">
                <div class='form-label'>Periode</div>
            </div>
            <div class="col-md-1 form-label">:</div>
            <div class="col-md-6s">{{$internship->start_at}} s/d {{$internship->end_at}} </div>
        </div>
        <div class="form-group row">
            <div class="col-md-3">
                <div class='form-label'>Status Proposal</div>
            </div>
            <div class="col-md-1 form-label">:</div>
            <div class="col-md-6s">{!! $internship->proposal->status_text !!}</div>
        </div>
        <div class="form-group">
            <div class='form-label'>Tujuan </div><br>
            <textarea class="form-control" readonly style="background-color: white" rows="20" >{{$internship->proposal->plan}}</textarea>
        </div> 
        <div class="form-group">
            <div class='form-label'>Latar Belakang</div><br>
            <textarea class="form-control" readonly style="background-color: white" rows="50" >{{$internship->proposal->background}}</textarea>
        </div> 
        <div class="form-group">
            <div class='form-label'>Catatan</div><br>
            <textarea class="form-control" readonly style="background-color: white" rows="10" >{{$internship->proposal->notes}}</textarea>
        </div> 
    </div> 
</div>                 

            
                
