{{-- Croping Image
<link rel="stylesheet" href="{{ asset('jcrop/css/jquery.Jcrop.min.css') }}" />
<script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('jcrop/js/jquery.Jcrop.min.js') }}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
--}}

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<div class="row">
    <div class="col-md-12">
        <section class="panel panel-primary">
            <header class="panel-heading">
                <h2 class="panel-title">Ubah Biodata</h2>
            </header>


<!-- User Id Field -->
<br>
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
        {!! Form::text('npwp_pribadi',null, ['class' => 'form-control']) !!}
        {!! $errors->first('npwp_pribadi', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<!-- Jenjang Pendidikan Id Field -->
<div class="form-group {{ $errors->has('jenjang_pendidikan_id') ? 'has-error' : ''}}">
    {!! Form::label('jenjang_pendidikan_id', 'Jenjang Pendidikan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('jenjang_pendidikan_id', $jenjangPendidikan, null, ['class' => 'form-control']) !!}
        {!! $errors->first('jenjang_pendidikan_id', $jenjangPendidikan, '<p class="help-block">:message</p>') !!}
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
        {!! Form::date('tanggal_lahir',isset($biodatas->tanggal_lahir)?\Carbon\Carbon::parse($biodatas->tanggal_lahir):null, ['class' => 'form-control','required'=>'required']) !!}
        {!! $errors->first('tanggal_lahir', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<!-- Jenis Kelamin Field -->


<div class="form-group {{ $errors->has('jenis_kelamin') ? 'has-error' : ''}}">
    {!! Form::label('jenis_kelamin', 'Jenis Kelamin', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('jenis_kelamin', ['laki-laki'=>'laki-laki', 'perempuan'=>'perempuan'], null, ['class' => 'form-control','required'=>'required']) !!}
        {!! $errors->first('jenis_kelamin', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<!-- Kewarganegaraan Field -->
<div class="form-group {{ $errors->has('kewarganegaraan') ? 'has-error' : ''}}">
    {!! Form::label('kewarganegaraan', 'Kewarganegaraan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('kewarganegaraan', ['WNI'=>'WNI','WNA'=> 'WNA'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('kewarganegaraan', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<!-- Status Perkawinan Field -->
<div class="form-group {{ $errors->has('status_perkawinan') ? 'has-error' : ''}}">
    {!! Form::label('status_perkawainan', 'Status Perkawinan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('status_perkawinan',null, ['class' => 'form-control']) !!}
        {!! $errors->first('status_perkawinan', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<!-- Agama Id Field -->
<div class="form-group {{ $errors->has('agama_id') ? 'has-error' : ''}}">
    {!! Form::label('agama_id', 'Agama', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('agama_id', $agamas ,null, ['class' => 'form-control']) !!}
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

<!-- Scan Ktp Field -->
<div class="form-group {{ $errors->has('scan_ktp') ? 'has-error' : ''}}">
    {!! Form::label('scan_ktp', 'Scan KTP', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('scan_ktp',null, ['class' => 'form-control']) !!}

        <br \>
        <img id="cropktp" src="{{isset($biodatas->scan_ktp)?file_exists( public_path() . '/' . $biodatas->scan_ktp)?asset($biodatas->scan_ktp):asset('assets/images/no-image.png'):asset('assets/images/no-image.png')}}" alt="your image"  width="337" height="213"  />
        {{ Form::hidden('scan_ktp', isset($biodatas->scan_ktp)?file_exists( public_path() . '/' . $biodatas->scan_ktp)?$biodatas->scan_ktp:'':'') }}

        <script type="text/javascript">
            function readKTP(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#cropktp').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#scan_ktp").change(function(){
                readKTP(this);
            });
        </script>

        {!! $errors->first('scan_ktp', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<!-- Scan Npwp Field -->
<div class="form-group {{ $errors->has('scan_npwp') ? 'has-error' : ''}}">
    {!! Form::label('scan_npwp', 'Scan Npwp', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('scan_npwp',null, ['class' => 'form-control']) !!}

        <br \>
        <img id="cropnpwp" src="{{isset($biodatas->scan_npwp)?file_exists( public_path() . '/' . $biodatas->scan_npwp)?asset($biodatas->scan_npwp):asset('assets/images/no-image.png'):asset('assets/images/no-image.png')}}" alt="your image"  width="337" height="213"  />
        {{ Form::hidden('scan_npwp', isset($biodatas->scan_npwp)?file_exists( public_path() . '/' . $biodatas->scan_npwp)?$biodatas->scan_npwp:'':'') }}

        <script type="text/javascript">
            function readNPWP(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#cropnpwp').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#scan_npwp").change(function(){
                readNPWP(this);
            });
        </script>

        {!! $errors->first('scan_npwp', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<!-- Foto Field -->
<div class="form-group {{ $errors->has('foto') ? 'has-error' : ''}}">
    {!! Form::label('foto', 'Foto', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('foto',  ['class' => 'form-control']) !!}
        <br \>
        <img id="cropfoto" src="{{isset($biodatas->foto)?file_exists( public_path() . '/' . $biodatas->foto)?asset($biodatas->foto):asset('assets/images/no-image.png'):asset('assets/images/no-image.png')}}" alt="your image"  width="200" height="267"  />
        {{ Form::hidden('foto', isset($biodatas->foto)?file_exists( public_path() . '/' . $biodatas->foto)?$biodatas->foto:'':'') }}

        <script type="text/javascript">
            function readFoto(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#cropfoto').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#foto").change(function(){
                readFoto(this);
            });
        </script>
        {{-- Untuk Croping image
        {{ Form::hidden('x', '', array('id' => 'x')) }}
        {{ Form::hidden('y', '', array('id' => 'y')) }}
        {{ Form::hidden('w', '', array('id' => 'w')) }}
        {{ Form::hidden('h', '', array('id' => 'h')) }}


        <script type="text/javascript">
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('.jcrop-holder').replaceWith('');
                        var jcrop_api= $.Jcrop('#cropimage');
                        jcrop_api.setImage( e.target.result);
                        jcrop_api.setOptions({
                            aspectRatio: 3/4,
                            boxWidth: 400,
                            boxHeight: 300,
                            allowResize: false,
                            onChange : updateCoords,
                            setSelect: [50, 0, 300,300],
                        });
                        //crop_reset( e.target.result);
                        /*$('#cropimage').Jcrop({
                            aspectRatio: 3/4,
                            setSelect: [50, 0, 300,300],
                            boxWidth: 400,
                            boxHeight: 300,
                            allowResize: false,
                            onSelect : updateCoords,
                        });*/
                        //$('.jcrop-holder img').attr('src',  e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            function crop_reset(src)
            {
                //Reset coordinates of thumbnail preview container
                $('#cropimage').data("coords.x", 0);
                $('#cropimage').data("coords.y", 0);
                $('#cropimage').data("coords.w", 0);
                $('#cropimage').data("coords.h", 0);

                //Reset src of jcrop img and copies bound to page specific full size and preview divs
                $("#cropimage, .jcrop-holder img").attr("src", src);
            }

            $(function() {
                if($('#cropimage').attr('src')!='') {
                    $('#cropimage').Jcrop({
                        aspectRatio: 3 / 4,
                        boxWidth: 300,
                        boxHeight: 400,
                        allowResize: false,
                        onChange: updateCoords,
                        setSelect: [50, 0, 300, 300],
                    });
                }
            });

            function updateCoords(c) {
                $('#x').val(c.x);
                $('#y').val(c.y);
                $('#w').val(c.w);
                $('#h').val(c.h);
            };

            $("#foto").change(function(){
                readURL(this);
            });

        </script>--}}

        {!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
    </div>
</div>





<div class="row">
    <div class="col-md-6">
        <section class="panel-primary">
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
                        {!! Form::text('alamat_asal[kabupaten]',  isset($biodatum)?$biodatum->alamatAsal()->kabupaten:'', ['id'=>'alamat_asal_kabupaten','class' => 'form-control']) !!}
                        {!! $errors->first('kabupaten', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('provinsi') ? 'has-error' : ''}}">
                    {!! Form::label('provinsi', 'Provinsi', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::text('alamat_asal[provinsi]',  isset($biodatum)?$biodatum->alamatAsal()->provinsi:'', ['id'=>'alamat_asal_provinsi','class' => 'form-control']) !!}
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
        <section class="panel-primary">
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
                        {!! Form::text('alamat_sekarang[kabupaten]',isset($biodatum)?$biodatum->alamatSekarang()->kabupaten:'', ['id'=>'alamat_sekarang_kabupaten','class' => 'form-control']) !!}
                        {!! $errors->first('kabupaten', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('provinsi') ? 'has-error' : ''}}">
                    {!! Form::label('provinsi', 'Provinsi', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::text('alamat_sekarang[provinsi]',isset($biodatum)?$biodatum->alamatSekarang()->provinsi:'', ['id'=>'alamat_sekarang_provinsi','class' => 'form-control']) !!}
                        {!! $errors->first('provinsi', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- Submit Field -->
    <div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
    
</div>
</section>
    </div>
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