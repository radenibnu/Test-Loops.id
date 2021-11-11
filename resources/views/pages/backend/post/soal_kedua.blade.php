@extends('layouts.admin')

@section('content')    

<div class="card">
    <div class="card-header">
        User List dengan comment dari usernya
    </div>
    @foreach ($users as $user)
        <div class="card-body">
            <h3 class="card-title">User Name: {{ $user->name }}</h3>
            <p class="card-text">Email: {{ $user->email }}</p>
            <h6 class="card-text mb-4">Created at: {{ $user->created_at }}</h6>
            
            <h4>Comment : </h4>
            @foreach ($posts as $post)
                {{ $post->comment->comment }} <br>
            @endforeach
        </div>
    @endforeach

  </div
@endsection