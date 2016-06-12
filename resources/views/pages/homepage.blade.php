@extends('layouts.master')

@section('content')

@foreach ($pages as $data)

<div class="title">{{ $data->title }}</div>

<p>{{ $data->body }}</p>

@endforeach

@endsection
