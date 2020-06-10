<!-- Input (Select) Kurikulum -->
<div class="form-group">
    <label class="form-label" for="student_id">Member</label>
    {{ html()->select('student_id')->options($member)->class(["form-control", "is-invalid" => $errors->has('student_id')])->id('student_id')->placeholder('Pilih Member') }}
    @error('student_id')
    <div class="invalid-feedback">{{ $errors->first('student_id') }}</div>
    @enderror
</div>