<!-- Input (Select) Kurikulum -->
<div class="form-group">
    <label class="form-label" for="agency_id">Instansi</label>
    {{ html()->select('agency_id')->options($agencies)->class(["form-control", "is-invalid" => $errors->has('agency_id')])->id('agency_id')->placeholder('Pilih Instansi') }}
    @error('agency_id')
    <div class="invalid-feedback">{{ $errors->first('agency_id') }}</div>
    @enderror
</div>

<!-- Text Field Input for Keterangan Matkul -->
<div class="form-group">
    <label class="form-label" for="background">Background</label>
    {{ html()->textarea('background')->class(["form-control", "is-invalid" => $errors->has('background')])->id('background')->placeholder('Deskripsi Singkat tentang KP') }}
    @error('background')
    <div class="invalid-feedback">{{ $errors->first('background') }}</div>
    @enderror
</div>

<!-- Text Field Input for Keterangan Matkul -->
<div class="form-group">
    <label class="form-label" for="plan">Plan</label>
    {{ html()->textarea('plan')->class(["form-control", "is-invalid" => $errors->has('plan')])->id('plan')->placeholder('plan') }}
    @error('plan')
    <div class="invalid-feedback">{{ $errors->first('plan') }}</div>
    @enderror
</div>


<!-- Text Field Input for Nama Matkul -->
<div class="form-group">
    <label class="form-label" for="start_at">Periode</label>
    {{ html()->date('start_at')->class(["form-control", "is-invalid" => $errors->has('start_at')])->id('start_at')->placeholder('') }}
    @error('start_at')
    <div class="invalid-feedback">{{ $errors->first('start_at') }}</div>
    @enderror
</div>

<!-- Text Field Input for Nama Matkul -->
<div class="form-group">
    <label class="form-label" for="end_at"></label>
    {{ html()->date('end_at')->class(["form-control", "is-invalid" => $errors->has('end_at')])->id('end_at')->placeholder('') }}
    @error('end_at')
    <div class="invalid-feedback">{{ $errors->first('end_at') }}</div>
    @enderror
</div>

