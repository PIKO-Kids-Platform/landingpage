@extends('components.header')

@section('nav')

<nav>                
    <ul class="navbar-nav" id="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('index') }}">Home</a>
        </li>                                                 
        <li class="nav-item">
            <a class="nav-link" href="{{ route('blog.list') }}">Blog</a>
        </li>                                                 
    </ul>    
    
</nav>

@endsection