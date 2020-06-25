<div class="form-group">
    <label class="form-label" for="agency_id">Instansi</label>
    {{ html()->select('agency_id')->options($agencies)->class(["form-control", "is-invalid" => $errors->has('agency_id')])->id('agency_id')->placeholder('Pilih Instansi') }}
    @error('agency_id')
    <div class="invalid-feedback">{{ $errors->first('agency_id') }}</div>
    @enderror
</div>

<div class="form-group row">
    
    <div class="col-md-6">
        <div class="form-group">
        <label class="form-label"for="start_at">Tanggal Mulai</label>
        {{ html()->date('start_at')->class(["form-control", "is-invalid" => $errors->has('start_at')])->id('start_at')->placeholder('') }}
        @error('start_at')
        <div class="invalid-feedback">{{ $errors->first('start_at') }}</div>
        @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
        <label class="form-label"for="end_at">Tanggal Selesai</label>
        {{ html()->date('end_at')->class(["form-control", "is-invalid" => $errors->has('end_at')])->id('end_at')->placeholder('') }}
        @error('end_at')
        <div class="invalid-feedback">{{ $errors->first('end_at') }}</div>
        @enderror
        </div>
    </div>
</div>

<div class="form-group">
    <label class="form-label" for="background">Latar Belakang</label>
    {{ html()->textarea('background')->class(["form-control", "is-invalid" => $errors->has('background')])->id('background')->placeholder('Deskripsi Singkat tentang KP') }}
    @error('background')
    <div class="invalid-feedback">{{ $errors->first('background') }}</div>
    @enderror
</div>

<div class="form-group">
    <label class="form-label" for="plan">Tujuan</label>
    {{ html()->textarea('plan')->class(["form-control", "is-invalid" => $errors->has('plan')])->id('plan')->placeholder('Tujuan') }}
    @error('plan')
    <div class="invalid-feedback">{{ $errors->first('plan') }}</div>
    @enderror
</div>

<div class="form-group">
    <label class="form-label" for="notes">Catatan</label>
    {{ html()->textarea('notes')->class(["form-control", "is-invalid" => $errors->has('notes')])->id('notes')->placeholder('Catatan') }}
    @error('notes')
    <div class="invalid-feedback">{{ $errors->first('notes') }}</div>
    @enderror
</div>