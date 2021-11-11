@extends('layouts.admin')

@section('content')    

<div class="card">
    <div class="card-header">
        Comment Guest yang usernya tidak terdaftar disistem
    </div>
    @foreach ($comments as $comment)
        <div class="card-body">
            <h3 class="card-title">Name Guest: {{ $comment->name }}</h3>
            <h5 class="card-title">Comments: {{ $comment->comment }}</h5>
        </div>
    @endforeach
  </div
@endsection