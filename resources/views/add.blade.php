@extends('layouts.template')



@section('title')
Tambah Data
@endsection


@section('content')
    <div class="section">
        <div class="card-panel blue darken-1 white-text">Tambah Data</div>
    </div>

    <div class="section">
    
        <form action="{{url('todo')}}" method="POST">
                {!! csrf_field() !!}

                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" name="judul"
                        class="validate">
                        <label for="judul">Judul</label>
                     </div>
                </div>


                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="isi" class="materialize-textarea" name="isi">
                        </textarea>
                        <label for="isi">isi</label>
                    </div>
                </div>  

                <button type="submit" class="btn btn-flat pink accent-3 waves-effect waves-light white-text right">Simpan<i class="material-icons right">send</i></button>       

        </form>
    
    </div>
@endsection