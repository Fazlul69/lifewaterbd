<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="images/logo.jpg" class="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto navbar-right ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Products
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a  class="dropdown-item" href="{{route('ros')}}">Reverse osmosis system</a>
              <a  class="dropdown-item" href="{{route('under')}}">Under counter System</a>
              <a  class="dropdown-item" href="single_filter.html">Single Filter System</a>
              <a  class="dropdown-item" href="accessories.html">Filter accessories</a>
              <a  class="dropdown-item" href="industrial.html">Industrial Water Treatment</a>
              <a  class="dropdown-item" href="techno.html">Technologies</a>
          </div>
        </li>
        <li><a href="life_water.html">Life Water</a></li>
      </ul>
      <form class="form-inline my-2 my-lg-0">                    
          <a href="{{route('login')}}"  class="text-sm text-gray-700 underline">Log in</a>
      </form>
    </div>
  </div>
</nav>