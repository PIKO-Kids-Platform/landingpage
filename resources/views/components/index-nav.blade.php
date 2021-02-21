@extends('components.header')

@section('nav')

<nav>                
    <ul class="navbar-nav" id="navbar-nav">
        <li class="nav-item">
            <a class="nav-link scroll" href="#home">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link scroll" href="#collections">Collections</a>
        </li>                            
        <li class="nav-item">
            <a class="nav-link scroll" href="#screenshots">Screenshots</a>
        </li>
        <li class="nav-item">
            <a class="nav-link scroll" href="#creator">Creator</a>
        </li>       
        <li class="nav-item">
            <a class="nav-link" href="{{ route('blog.list')}}">Blog</a>
        </li>  
        {{-- <li class="nav-item">
            <a class="nav-link" href=""><i class="fas fa-user "></i> Masuk</a>            
        </li>                --}}
        
                      
    </ul>                            
    
</nav>

@endsection