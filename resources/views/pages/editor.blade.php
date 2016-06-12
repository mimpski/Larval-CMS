@extends('layouts.master')


@section('content')

  <div class="title">Editor</div>

  <form method="post" action="/editor/save">
    <textarea name="title"></textarea>
    <textarea name="body"></textarea>
    <textarea name="description"></textarea>
    <button type="submit">Save</button>
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
  </form>

@endsection
