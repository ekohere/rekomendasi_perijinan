<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nik Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nik', 'Nik:') !!}
    {!! Form::text('nik', null, ['class' => 'form-control']) !!}
</div>

<!-- Npwp Pribadi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('npwp_pribadi', 'Npwp Pribadi:') !!}
    {!! Form::text('npwp_pribadi', null, ['class' => 'form-control']) !!}
</div>

<!-- Scan Ktp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('scan_ktp', 'Scan Ktp:') !!}
    {!! Form::text('scan_ktp', null, ['class' => 'form-control']) !!}
</div>

<!-- Scan Npwp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('scan_npwp', 'Scan Npwp:') !!}
    {!! Form::text('scan_npwp', null, ['class' => 'form-control']) !!}
</div>

<!-- Jenjang Pendidikan Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenjang_pendidikan_id', 'Jenjang Pendidikan Id:') !!}
    {!! Form::number('jenjang_pendidikan_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tempat Lahir Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tempat_lahir', 'Tempat Lahir:') !!}
    {!! Form::text('tempat_lahir', null, ['class' => 'form-control']) !!}
</div>

<!-- Tanggal Lahir Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal_lahir', 'Tanggal Lahir:') !!}
    {!! Form::date('tanggal_lahir', null, ['class' => 'form-control']) !!}
</div>

<!-- Jenis Kelamin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenis_kelamin', 'Jenis Kelamin:') !!}
    {!! Form::text('jenis_kelamin', null, ['class' => 'form-control']) !!}
</div>

<!-- Kewarganegaraan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kewarganegaraan', 'Kewarganegaraan:') !!}
    {!! Form::text('kewarganegaraan', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Perkawinan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_perkawinan', 'Status Perkawinan:') !!}
    {!! Form::text('status_perkawinan', null, ['class' => 'form-control']) !!}
</div>

<!-- Agama Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('agama_id', 'Agama Id:') !!}
    {!! Form::number('agama_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Website Field -->
<div class="form-group col-sm-6">
    {!! Form::label('website', 'Website:') !!}
    {!! Form::text('website', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto', 'Foto:') !!}
    {!! Form::text('foto', null, ['class' => 'form-control']) !!}
</div>

    <div class="col-md-6">
        <section class="panel panel-warning">
            <header class="panel-heading">
                <h2 class="panel-title">Alamat Asal</h2>
            </header>
            <div class="panel-body">
                <div class="form-group {{ $errors->has('rt') ? 'has-error' : ''}}">
                    {!! Form::label('rt', 'Rt', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::number('alamat_asal[rt]', isset($biodatum)?$biodatum->alamatAsal()->rt:'', ['id'=>'alamat_asal_rt','class' => 'form-control']) !!}
                        {!! $errors->first('rt', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('rw') ? 'has-error' : ''}}">
                    {!! Form::label('rw', 'Rw', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::number('alamat_asal[rw]', isset($biodatum)?$biodatum->alamatAsal()->rw:'', ['id'=>'alamat_asal_rw','class' => 'form-control']) !!}
                        {!! $errors->first('rw', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('nomor') ? 'has-error' : ''}}">
                    {!! Form::label('nomor', 'Nomor', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::number('alamat_asal[nomor]', isset($biodatum)?$biodatum->alamatAsal()->nomor:'', ['id'=>'alamat_asal_nomor','class' => 'form-control']) !!}
                        {!! $errors->first('nomor', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('jalan') ? 'has-error' : ''}}">
                    {!! Form::label('jalan', 'Jalan', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::text('alamat_asal[jalan]',  isset($biodatum)?$biodatum->alamatAsal()->jalan:'', ['id'=>'alamat_asal_jalan','class' => 'form-control']) !!}
                        {!! $errors->first('jalan', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('kelurahan') ? 'has-error' : ''}}">
                    {!! Form::label('kelurahan', 'Kelurahan', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::text('alamat_asal[kelurahan]',  isset($biodatum)?$biodatum->alamatAsal()->kelurahan:'', ['id'=>'alamat_asal_kelurahan','class' => 'form-control']) !!}
                        {!! $errors->first('kelurahan', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('kecamatan') ? 'has-error' : ''}}">
                    {!! Form::label('kecamatan', 'Kecamatan', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::text('alamat_asal[kecamatan]', isset($biodatum)?$biodatum->alamatAsal()->kecamatan:'', ['id'=>'alamat_asal_kecamatan','class' => 'form-control']) !!}
                        {!! $errors->first('kecamatan', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('kabupaten') ? 'has-error' : ''}}">
                    {!! Form::label('kabupaten', 'Kota / Kabupaten', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::text('alamat_asal[kabupaten]',  isset($biodatum)?$biodatum->alamatAsal()->kabupaten:'', ['id'=>'alamat_asal_kabupaten','required'=>'required','class' => 'form-control']) !!}
                        {!! $errors->first('kabupaten', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('provinsi') ? 'has-error' : ''}}">
                    {!! Form::label('provinsi', 'Provinsi', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::text('alamat_asal[provinsi]',  isset($biodatum)?$biodatum->alamatAsal()->provinsi:'', ['id'=>'alamat_asal_provinsi','required'=>'required','class' => 'form-control']) !!}
                        {!! $errors->first('provinsi', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('provinsi') ? 'has-error' : ''}}">
                    {!! Form::label('duplicate', 'Alamat Asal & Sekarang Sama', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6 switch switch-sm switch-primary">
                        <input type="checkbox" name="switch" data-plugin-ios-switch id="alamat_sama" />
                    </div>
                </div>
            </div>
        </section>
    </div>
 
    <div class="col-md-6">
        <section class="panel panel-warning">
            <header class="panel-heading">
                <h2 class="panel-title">Alamat Sekarang</h2>
            </header>
            <div class="panel-body">
                <div class="form-group {{ $errors->has('rt') ? 'has-error' : ''}}">
                    {!! Form::label('rt', 'Rt', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::number('alamat_sekarang[rt]',  isset($biodatum)?$biodatum->alamatSekarang()->rt:'', ['id'=>'alamat_sekarang_rt','class' => 'form-control']) !!}
                        {!! $errors->first('rt', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('rw') ? 'has-error' : ''}}">
                    {!! Form::label('rw', 'Rw', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::number('alamat_sekarang[rw]',  isset($biodatum)?$biodatum->alamatSekarang()->rw:'', ['id'=>'alamat_sekarang_rw','class' => 'form-control']) !!}
                        {!! $errors->first('rw', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('nomor') ? 'has-error' : ''}}">
                    {!! Form::label('nomor', 'Nomor', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::number('alamat_sekarang[nomor]', isset($biodatum)?$biodatum->alamatSekarang()->nomor:'', ['id'=>'alamat_sekarang_nomor','class' => 'form-control']) !!}
                        {!! $errors->first('nomor', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('jalan') ? 'has-error' : ''}}">
                    {!! Form::label('jalan', 'Jalan', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::text('alamat_sekarang[jalan]', isset($biodatum)?$biodatum->alamatSekarang()->jalan:'', ['id'=>'alamat_sekarang_jalan','class' => 'form-control']) !!}
                        {!! $errors->first('jalan', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('kelurahan') ? 'has-error' : ''}}">
                    {!! Form::label('kelurahan', 'Kelurahan', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::text('alamat_sekarang[kelurahan]', isset($biodatum)?$biodatum->alamatSekarang()->kelurahan:'', ['id'=>'alamat_sekarang_kelurahan','class' => 'form-control']) !!}
                        {!! $errors->first('kelurahan', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('kecamatan') ? 'has-error' : ''}}">
                    {!! Form::label('kecamatan', 'Kecamatan', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::text('alamat_sekarang[kecamatan]', isset($biodatum)?$biodatum->alamatSekarang()->kecamatan:'', ['id'=>'alamat_sekarang_kecamatan','class' => 'form-control']) !!}
                        {!! $errors->first('kecamatan', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('kabupaten') ? 'has-error' : ''}}">
                    {!! Form::label('kabupaten', 'Kota / Kabupaten', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::text('alamat_sekarang[kabupaten]',isset($biodatum)?$biodatum->alamatSekarang()->kabupaten:'', ['id'=>'alamat_sekarang_kabupaten','required'=>'required','class' => 'form-control']) !!}
                        {!! $errors->first('kabupaten', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('provinsi') ? 'has-error' : ''}}">
                    {!! Form::label('provinsi', 'Provinsi', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::text('alamat_sekarang[provinsi]',isset($biodatum)?$biodatum->alamatSekarang()->provinsi:'', ['id'=>'alamat_sekarang_provinsi','required'=>'required','class' => 'form-control']) !!}
                        {!! $errors->first('provinsi', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('biodatas.index') !!}" class="btn btn-default">Cancel</a>
</div>



        <script type="text/javascript">
            $("#alamat_sama").change(function() {
                if(this.checked) {
                    $("#alamat_sekarang_rt").val($("#alamat_asal_rt").val());
                    $("#alamat_sekarang_rw").val($("#alamat_asal_rw").val());
                    $("#alamat_sekarang_nomor").val($("#alamat_asal_nomor").val());
                    $("#alamat_sekarang_jalan").val($("#alamat_asal_jalan").val());
                    $("#alamat_sekarang_kelurahan").val($("#alamat_asal_kelurahan").val());
                    $("#alamat_sekarang_kecamatan").val($("#alamat_asal_kecamatan").val());
                    $("#alamat_sekarang_kabupaten").val($("#alamat_asal_kabupaten").val());
                    $("#alamat_sekarang_provinsi").val($("#alamat_asal_provinsi").val());
                }
            });
        </script>