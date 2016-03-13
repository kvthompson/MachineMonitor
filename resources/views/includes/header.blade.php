<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<header>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/machinemonitor/public/dashboard">Machine Manager</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
    	<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">OEE <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/machinemonitor/public/oee/1">Machine 1</a></li>
            <li><a href="/machinemonitor/public/oee/2">Machine 2</a></li>
            <li><a href="/machinemonitor/public/oee/3">Machine 3</a></li>
            <li><a href="/machinemonitor/public/oee/4">Machine 4</a></li>
          </ul>
        </li>
	<li><a href="/machinemonitor/public/machines">Machines</a></li>
        <li><a href="/machinemonitor/public/faults">Faults <span class="badge">{{ count($counts) }}</span></a><li>
	</ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('logout') }}">Logout</a></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>