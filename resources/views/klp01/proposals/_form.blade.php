<!-- Input (Select) Kurikulum -->
<div class="form-group">
    <label class="form-label" for="agency_id">Instansi</label>
    {{ html()->select('agency_id')->options($agencies)->class(["form-control", "is-invalid" => $errors->has('agency_id')])->id('agency_id')->placeholder('Pilih Instansi') }}
    @error('agency_id')
    <div class="invalid-feedback">{{ $errors->first('agency_id') }}</div>
    @enderror
</div>


    {{ html()->textarea('background')->class(["form-control", "is-invalid" => $errors->has('background')])->id('background')->placeholder('Deskripsi Singkat tentang KP') }}
    @error('background')
    <div class="invalid-feedback">{{ $errors->first('background') }}</div>
    @enderror
</div>

<!-- Text Field Input for Keterangan Matkul -->
<div class="form-group">

    @error('plan')
    <div class="invalid-feedback">{{ $errors->first('plan') }}</div>
    @enderror
</div>


