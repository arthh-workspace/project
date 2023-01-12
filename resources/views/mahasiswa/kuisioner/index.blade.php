@extends('layout.main')
@section('web')
    <h1 class="m-0">Kuisioner</h1>
@endsection
@section('page')
    <li class="breadcrumb-item active">Kuisioner</li>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <!-- left column -->
            <div class="col-md-10">
                <!-- general form elements -->
                <div class="card card-outline card-info">
                    <form action="{{ route('kuisioner.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Dosen Pengampu</label>
                                <select name="nama" value="{{ old('nama') }}"
                                    class="form-control @error('nama') is-invalid @enderror">
                                    <option value="">-- Pilih Dosen --</option>
                                    @foreach ($dosen as $item)
                                        <option value="{{ $item->nama }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('nama')
                                        Nama tidak boleh kosong.
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama_matkul">Mata Kuliah</label>
                                <select name="nama_matkul" value="{{ old('nama_matkul') }}"
                                    class="form-control @error('nama_matkul') is-invalid @enderror">
                                    <option value="">-- Pilih Mata Kuliah --</option>
                                    @foreach ($matkul as $item)
                                        <option value="{{ $item->nama_matkul }}">{{ $item->nama_matkul }}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('nama_matkul')
                                        Matkul tidak boleh kosong.
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="id_jadwal">Jadwal</label>
                                <select name="id_jadwal" value="{{ old('jadwal') }}"
                                    class="form-control @error('id_jadwal') is-invalid @enderror">
                                    <option value="">-- Pilih Jadwal --</option>
                                    @foreach ($jadwal as $item)
                                        <option value="{{ $item->id }}">Tanggal :
                                            {{ showDateTime($item->hari, 'l, d F Y') }} Waktu : {{ $item->waktu }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('id_jadwal')
                                        Jadwal tidak boleh kosong.
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="id_pertemuan">Pertemuan</label> <br>
                                 <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>-->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script language="javascript" type="text/javascript">  
    $(document).ready(function() {
        //create arrays to store option and values
        var continents = [
            {display: "Mahasiswa mampu memahami materi Software Testing", value: "pertemuan1" },    
            {display: "Mahasiswa mampu memahammi materi Proyek Aplikasi Lanjut", value: "pertemuan2" },
            {display: "Antarctica", value: "antarctica" },
            {display: "Australia", value: "australia" },
            {display: "Europe", value: "europe" },
            {display: "North America", value: "north-america" },
            {display: "South America", value: "south-america" }
        ];
           
        var oceans = [
            {display: "Pacific", value: "pacific" },
            {display: "Atlantic", value: "atlantic" },
            {display: "Indian", value: "indian" },
            {display: "Southern", value: "southern" },
            {display: "Arctic", value: "arctic" }
        ];

        //If parent option is changed
        $("#parent_selection").change(function() {
            var parent = $(this).val(); //get option value from parent       
            switch(parent){ //using switch compare selected option and populate child
                case 'continents':
                    $('#child_selection').attr('disabled', false);
                    list(continents);
                    break;
                case 'oceans':
                    $('#child_selection').attr('disabled', false);
                    list(oceans);
                    break;
                default: //default child option is blank
                    $("#child_selection").html('');
                    $('#child_selection').attr("disabled", true);
                    break;
            }
        });

        //function to populate child select box
        function list(array_list) {
            $("#child_selection").html(""); //reset child options
            $(array_list).each(function (i) { //populate child options
                $("#child_selection").append("<option value='" + array_list[i].value + "'>" + array_list[i].display + "</option>");
            });
        }
    });
    </script>
    <div class="wrapper">
        {{-- Pertemuan : --}}
        <select name="parent_selection" id="parent_selection">
            <option value="">-- Pilih --</option>
            <option value="continents">Pertemuan 1</option>
            <option value="oceans">Pertemuan 2</option>
        </select>
        <select name="child_selection" id="child_selection" disabled="disabled"/>
    </div>
                            </div>
                        </div>
                            {{-- <div class="form-group">
                                <label for="capaian_pembelajaran_pertemuan">Capaian Materi</label>
                                <select name="capaian_pembelajaran_pertemuan"
                                    value="{{ old('capaian_pembelajaran_pertemuan') }}"
                                    class="form-control @error('capaian_pembelajaran_pertemuan') is-invalid @enderror">
                                    <option value="">-- Capaian --</option>
                                    @foreach ($pertemuan as $item)
                                        <option value="{{ $item->capaian_pembelajaran_pertemuan }}">Pertemuan ke
                                            {{ $item->capaian_pembelajaran_pertemuan }}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('capaian_pembelajaran_pertemuan')
                                        Capaian Materi tidak boleh kosong.
                                    @enderror
                                </div>
                            </div> --}}
                            <div class="form-group">
                                <label for="kesesuaian">Kesesuaian :</label> <br>
                                <div class="form-check form-check-inline">
                                    <label for="kesesuaian">
                                        <input type="radio" name="kesesuaian" value="S" id="kesesuaian">Sesuai
                                        <input type="radio" name="kesesuaian" value="TS" id="kesesuaian">Tidak Sesuai
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer justify-content-between">
                            <button type="submit" class="btn btn-primary float-left">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection
@section('script')
    <script type="text/javascript">
        $("#kuisioner").addClass("active");
    </script>
@endsection
