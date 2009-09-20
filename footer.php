<?php
/*
footer.php contains the "bottom chunk" of your theme. This might include a copyright notice, or some info about the author. It definitely includes the closing </body> and </html> tags. It gets pulled into the other templates with the get_footer() tag.

More: <http://codex.wordpress.org/Function_Reference/get_footer>
*/
?>

<hr />

<div id="footer">
	<p>
		<?php bloginfo('name'); ?> is proudly powered by <a href="http://wordpress.org/">WordPress</a>.
	</p>
</div>

<?php wp_footer(); // leave this here: it's a hook for plugins ?>
</body>
</html>
