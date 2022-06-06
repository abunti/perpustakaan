@extends('layout.master')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Silahkan Isi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('borrowings.index') }}"> Kembali</a>
            </div>
        </div>
    </div>
    <br>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        
    <form action="{{ route('borrowings.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nis:</strong>
                    {{-- <input type="text" name="nis" class="form-control" placeholder="NIS"> --}}
                    <select class="form-control" name="nis" id="">
                        <option value="">--pilih--</option>
                        @foreach ($students as $student)
                            <option value="{{ $student->nis }}">{{ $student->nis }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>    
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Peminjam</strong>
                    <select class="form-control" name="nama_peminjam">
                        <option selected disabled>Pilih</option>
                        @foreach($students as $student)
                        <option value="{{$student->nama}}">{{$student->nama}}</option>
                        @endforeach
                    </select>            
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul buku</strong>
                    <select class="form-control" name="judul_buku">
                        <option selected disabled>Pilih</option>
                        @foreach($books as $book)
                        <option value="{{$book->judul}}">{{$book->judul}}</option>
                        @endforeach
                    </select>            
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rayon:</strong>
                    <select name="rayon" class="form-control" required id="">
                        <option value="">--Pilih--</option>
                        @foreach ($rayons as $rayon)
                            <option value="{{ $rayon->rayon }}">{{ $rayon->rayon }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rombel</strong>
                    <select class="form-control" name="rombel">
                        <option selected disabled>Pilih</option>
                        @foreach($studentGroups as $rombel)
                        <option value="{{$rombel->rombel}}">{{$rombel->rombel}}</option>
                        @endforeach
                    </select>            
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Tenggat</strong>
                    <input type="date" min="<?php date('yyyy-mm-dd')?>" name="tgl_kembali" class="form-control" placeholder="Tanggal Kembali">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection