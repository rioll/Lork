<nav id="navigation">
	<ul>
		<li>
			<a <?php echo ($page == 'equipe') ? "class='active'" : ""; ?> href="equipe">Equipe</a>
		</li>
		<li>
			<a <?php echo ($page == 'services') ? "class='active'" : ""; ?> href="services">Services</a>
		</li>
		<li>
			<a href="index"><img src="images/logo.png" alt="lork"  <?php echo ($page == 'index') ? "class='logo-big'" :  "class='logo'"; ?>></a>
		</li>
		<li>
			<a <?php echo ($page == 'projet') ? "class='active'" : ""; ?> href="projet">Projets</a>
		</li>
		<li>
			<a <?php echo ($page == 'contact') ? "class='active'" : ""; ?> href="contact">Contact</a>
		</li>
	</ul>
</nav>

