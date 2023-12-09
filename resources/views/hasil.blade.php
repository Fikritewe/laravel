@extends('nav')

@section('judul', 'hasil')

@section('isi')
<div class="alert alert-primary" role="alert">
    Hasil <br>
    Name : {{ $data['nama'] }} <br>
    Email : {{ $data['email'] }} <br>
    Pesan : {{ $data['pesan'] }} <br>

</div>
