<div class="navbar-fixed">
<nav class="blue lighten-2" role = "navigation" >
    <div class="nav-wrapper container">

      <a href="#!" class="brand-logo">Logo</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        
        @if(Auth::guest())
        <li><a href="{{route('login')}}">Login</a></li>
        <li><a href="{{route('register')}}">Register</a></li>
        @else
        <li><a href="{{url('/')}}">Home</a></li>
        <li>
            <a href="{{ route('logout')}}">logout</a>
        </li>
        @endif
      </ul>
     
    </div>
  </nav>
</div>
<ul class="side-nav" id="mobile-demo">
@if(Auth::guest())
        <li><a href="{{route('login')}}">Login</a></li>
        <li><a href="{{route('register')}}">Register</a></li>
        @else
        <li><a href="{{url('/')}}">Home</a></li>
        <li>
            <a href="{{ route('logout')}}">logout</a>
        </li>
        @endif  
      </ul>