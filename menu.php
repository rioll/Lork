<nav id="navigation">
	<ul>
		<li>
			<a <?php echo ($page == 'equipe') ? "class='active'" : ""; ?> href="equipe.php">Equipe</a>
		</li>
		<li>
			<a <?php echo ($page == 'services') ? "class='active'" : ""; ?> href="services">Services</a>
		</li>
		<li>
			<a <?php echo ($page == 'index') ? "class='active'" : ""; ?> href="index.php"><img src="images/logo.png" alt="lork"></a>
		</li>
		<li>
			<a <?php echo ($page == 'projet') ? "class='active'" : ""; ?> href="projet.php">Projets</a>
		</li>
		<li>
			<a <?php echo ($page == 'contact') ? "class='active'" : ""; ?> href="contact.php">Contact</a>
		</li>
	</ul>
</nav>