<!DOCTYPE html>
<html>
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <title>
	<?php include_slot('title', 'Monistix') ?>
    </title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js"></script>
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    </head>
    <body>
    <header>
	<div id="header-box-left">
		<a class="logo" href="http://monistix.com/">
			monistix
		</a>
	</div>
	<div id="header-box-right">
		<div class="name">Ditesh Shashikant Gathani</div>
		<ul>
			<li><a href="/dashboard">Dashboard</a></li>
			<li>
				<a href="/alerts">Alerts</a>
				<a href="" class="number">0</a>
			</li>
			<li><a href="/settings">Account Settings</a></li>
			<li><a href="/logout">Log Out</a></li>
		</ul>
	</div>
    </header>
    <nav>
	    <?php if (has_slot('navigation')): ?>
	    <?php include_slot('navigation') ?>
	    <?php else: ?>
	    <ul>
	        <li><a class="selected" href="">Dashboard</a></li>
	        <li><a href="">Reports</a></li>
	        <li><a href="<?php echo url_for("server/index") ?>">Servers</a></li>
	        <li><a href="">Plugins</a></li>
	        <li><a href="">Administration</a></li>
	    <ul>
	    <?php endif; ?>
    </nav>
    <section id="content">
        <aside id="sidebar">
	    <?php include_component('server', 'sidebar') ?>
	</aside>
        <section id="content-right">
	    <?php echo $sf_content ?>
        </section>
    </section>
    <footer>
	Monistix Systems Sdn Bhd (c) 2010
    </footer>
  </body>
</html>
