@extends('layouts.main')
@section('container')
<h1 class="mb-5">Post Categories</h1>

  @foreach ($categories as $category)
    <h2>
      <ul>
        <li>
          <a href="/categories/{{ $category->slug }}">{{ $category->name }} </a>
        </li>
      </ul>
    </h2>
      
  @endforeach
  
  @endsection