<nav class="navbar navbar-default" role="navigation">
<div class="container-fluid">

<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	<span class="sr-only">Toggle navigation</span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</button>

<a class="navbar-brand" href="kokpit.php">Galeria zdjęć</a>
</div>

<div id="navbar" class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
	<li><a href="kokpit.php">Kokpit</a></li>
	
    <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dodaj <span class="caret"></span></a>
    	<ul class="dropdown-menu" role="menu">
    		<li><a href="kokpit.php?p=dodajzdjecie">Dodaj zdjęcia</a></li>
    		<li><a href="kokpit.php?p=dodajalbum">Dodaj album</a></li>
    	</ul>
    </li>
    
	<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Edytuj <span class="caret"></span></a>
    	<ul class="dropdown-menu" role="menu">
    		<li><a href="kokpit.php?p=edytujzdjecie">Edytuj zdjęcia</a></li>
			<li><a href="kokpit.php?p=usunalbum">Edytuj album</a></li>
    	</ul>
    </li>
    
    <li><a href="galeria.php">Zobacz galerię</a></li>
	<li><a href="wyloguj.php?logout=true">Wyloguj się</a></li>
    </ul>
</div><!--/.nav-collapse -->
</div><!--/.container-fluid -->
</nav>