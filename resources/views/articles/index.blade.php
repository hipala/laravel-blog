@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-lg-8 col-md-10 mx-auto">
    @foreach ($articles as $art)
    <div class="post-preview">
      <a href="post.html">
        <h2 class="post-title">
          {{ $art->title }}
        </h2>
        <h3 class="post-subtitle">
          {{ $art->content }}
        </h3>
      </a>
      <p class="post-meta">Posted by
        <a href="#">Start Bootstrap</a>
        on September 24, 2018</p>
    </div>
    <hr>
    @endforeach
    <!-- Pager -->
    <div class="clearfix">
      <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
    </div>
  </div>
</div>

@endsection