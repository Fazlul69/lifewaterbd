<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container">
    <a class="navbar-brand" href="http://127.0.0.1:8000"><img src="images/logo.jpg" class="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto navbar-right ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="http://127.0.0.1:8000/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Products
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a  class="dropdown-item" href="{{route('ros')}}">Reverse osmosis system</a>
              <a  class="dropdown-item" href="{{route('under')}}">Under counter System</a>
              <a  class="dropdown-item" href="{{route('single')}}">Single Filter System</a>
              <a  class="dropdown-item" href="{{route('accessories')}}">Filter accessories</a>
              <a  class="dropdown-item" href="{{route('industrial')}}">Industrial Water Treatment</a>
          </div>
        </li>
        <li><a href="{{route('company')}}">Life Water</a></li>
      </ul>
      <form class="form-inline my-2 my-lg-0">                    
          <a href="{{route('login')}}"  class="text-sm text-gray-700 underline">Log in</a>
      </form>
    </div>
  </div>
</nav>