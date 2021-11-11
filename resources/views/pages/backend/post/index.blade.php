@extends('layouts.admin')

@section('content')    

<div class="card">
    <div class="card-header">
        Content Post dengan <i> email, name </i> penulisnya
    </div>
    @foreach ($posts as $post)
        <div class="card-body">
            <h5 class="card-title">Title: {{ $post->title }}</h5>
            {{ $post->created_at }}
            <p class="card-text">Slug: {{ $post->slug }}</p>
            <p class="card-text">Content: {{ $post->content }}</p>
            
            <p>Nama Penulis:  {{ $post->user->name}}</p>
            <p>Email Penulis: {{ $post->user->email}}</p>
        </div>
    @endforeach
  </div
@endsection