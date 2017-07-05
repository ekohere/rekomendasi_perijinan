<!-- User Id Field -->

        {!! Form::hidden('user_id',Auth::id(), ['class' => 'form-control','required'=>'required']) !!}
        

<!-- nik field-->
<div class="form-group {{ $errors->has('nik') ? 'has-error' : ''}}">
    {!! Form::label('nik', 'Nik', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nik',null, ['class' => 'form-control','required'=>'required']) !!}
        {!! $errors->first('nik', '<p class="help-block">:message</p>') !!}
    </div>
</div>



<!-- Npwp Pribadi Field -->
<div class="form-group {{ $errors->has('npwp_pribadi') ? 'has-error' : ''}}">
    {!! Form::label('npwp_pribadi', 'Npwp Pribadi', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('npwp_pribadi',null, ['class' => 'form-control','required'=>'required']) !!}
        {!! $errors->first('npwp_pribadi', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<!-- Scan Ktp Field -->
<div class="form-group {{ $errors->has('scan_ktp') ? 'has-error' : ''}}">
    {!! Form::label('scan_ktp', 'Scan KTP', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('scan_ktp',null, ['class' => 'form-control','required'=>'required']) !!}
        {!! $errors->first('scan_ktp', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<!-- Scan Npwp Field -->
<div class="form-group {{ $errors->has('scan_npwp') ? 'has-error' : ''}}">
    {!! Form::label('scan_npwp', 'Scan Npwp', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('scan_npwp',null, ['class' => 'form-control','required'=>'required']) !!}
        {!! $errors->first('scan_npwp', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<!-- Jenjang Pendidikan Id Field -->
<div class="form-group {{ $errors->has('jenjang_pendidikan_id') ? 'has-error' : ''}}">
    {!! Form::label('jenjang_pendidikan_id', 'Jenjang Pendidikan id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('jenjang_pendidikan_id',null, ['class' => 'form-control','required'=>'required']) !!}
        {!! $errors->first('jenjang_pendidikan_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<!-- Tempat Lahir Field -->
<div class="form-group {{ $errors->has('tempat_lahir') ? 'has-error' : ''}}">
    {!! Form::label('tempat_lahir', 'Tempat lahir', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tempat_lahir',null, ['class' => 'form-control','required'=>'required']) !!}
        {!! $errors->first('tempat_lahir', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<script type="text/javascript">

    $( function() {
        $( "#tanggal_lahir" ).datepicker({
            format: "yyyy-mm-dd",
            autoclose: true
        });
    } );
</script>

<!-- Tanggal Lahir Field -->
<div class="form-group {{ $errors->has('tanggal_lahir') ? 'has-error' : ''}}">
    {!! Form::label('tanggal_lahir', 'Tanggal Lahir', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('tanggal_lahir',null, ['class' => 'form-control','required'=>'required']) !!}
        {!! $errors->first('tanggal_lahir', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<!-- Jenis Kelamin Field -->
<div class="form-group {{ $errors->has('jenis_kelamin') ? 'has-error' : ''}}">
    {!! Form::label('jenis_kelamin', 'Jenis Kelamin', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jenis_kelamin',null, ['class' => 'form-control','required'=>'required']) !!}
        {!! $errors->first('jenis_kelamin', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<!-- Kewarganegaraan Field -->
<div class="form-group {{ $errors->has('kewarganegaraan') ? 'has-error' : ''}}">
    {!! Form::label('kewarganegaraan', 'Kewarganegaraan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('kewarganegaraan',null, ['class' => 'form-control','required'=>'required']) !!}
        {!! $errors->first('kewarganegaraan', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<!-- Status Perkawinan Field -->
<div class="form-group {{ $errors->has('status_perkawinan') ? 'has-error' : ''}}">
    {!! Form::label('status_perkawainan', 'Status Perkawinan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('status_perkawinan',null, ['class' => 'form-control','required'=>'required']) !!}
        {!! $errors->first('status_perkawinan', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<!-- Agama Id Field -->
<div class="form-group {{ $errors->has('agama_id') ? 'has-error' : ''}}">
    {!! Form::label('agama_id', 'Agama Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('agama_id',null, ['class' => 'form-control','required'=>'required']) !!}
        {!! $errors->first('agama_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<!-- Website Field -->
<div class="form-group {{ $errors->has('website') ? 'has-error' : ''}}">
    {!! Form::label('website', 'Website', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('website',null, ['class' => 'form-control']) !!}
        {!! $errors->first('website', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<!-- Foto Field -->
<div class="form-group {{ $errors->has('foto') ? 'has-error' : ''}}">
    {!! Form::label('foto', 'File Scan Buku', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('foto', null, ['class' => 'form-control']) !!}
        <br \>
        <div id="image-holder"> </div>

       
        <script type="text/javascript">
            $("#foto").on('change', function () {

                if (typeof (FileReader) != "undefined") {

                    var image_holder = $("#image-holder");
                    image_holder.empty();

                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $("<img />", {
                            "src": e.target.result,
                            "class": "thumb-image",
                            "width":300,
                        }).appendTo(image_holder);
 
                    }
                    image_holder.show();
                    reader.readAsDataURL($(this)[0].files[0]);
                } else {
                    alert("This browser does not support FileReader.");
                }

            });
        </script>

        {!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
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