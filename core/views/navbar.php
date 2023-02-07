<nav class="navbar js-navbar navbar-expand-md navbar-light p-2 " id="navbar">
	<div class="container">
		<!--Static home button-->
		<div class="navbar-nav  me-4">
			<a class="js-nav-logo" href="/home">BKWorks</a>
		</div>
		<!--Responsive, collapsible list of other buttons-->
		<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar_to_collapse" aria-controls="navbar_to_collapse" aria-expanded="false" aria-label="Toggle nav">
			<img class="js-nav-collapse-button" src=" https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Hamburger_icon.svg/1024px-Hamburger_icon.svg.png" alt="">
		</button>
		<div class="collapse navbar-collapse js-navbar-collapse justify-content-end gap-4" id="navbar_to_collapse">
			<ul class="navbar-nav d-flex align-items-center gap-3">
				<?php
				if ($_SESSION['isLoggedIn']) {
					echo '<li class="nav-item">
					<a class="nav-link js-nav-item" href="user/view/' . $_SESSION['id'] . '"> Welcome back, ' . $_SESSION['username'] . '</a>
					</li>';
				}
				?>
				<li class="nav-item">
					<a class="nav-link js-nav-item" href="/info">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-nav-item" href="/recruit">Jobs</a>

				</li>
				<li class="nav-item">
					<a class="nav-link js-nav-item" href="/cv">CV</a>
				</li>
				<?php
				if ($_SESSION['role'] == 'admin') {
					echo '<li class="nav-item"><a class="nav-link js-nav-item" href="/admin">Admin</a></li>';
				}
				?>
				<?php
				if ($_SESSION['isLoggedIn']) {
					echo '<li><a class="nav-item js-button js-button-main  js-text-light" href="/logout">Log out</a></li>';
				} else {
					echo '<li><a class="nav-item js-button js-button-main  js-text-light" href="/login">Log in</a></li>';
				}
				?>
			</ul>
		</div>
	</div>
</nav>