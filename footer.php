		<div id="footer" >

		<?php
			$impressum=get_page_by_title('impressum');
			$impressumid=$impressum->ID;
			$impressumlink=get_page_link($impressumid);
			
			$impressumtitel=$impressum->post_title;
	
		
		// echo "<PRE>";
		// print_r($impressum);
		// echo "</PRE>";
	
		
		
		?>


		<ul >
				<li><a href=<?php echo $impressumlink;?> ><?php echo $impressumtitel;  ?></a></li>
				<li > | </li>
				<li >"Nur tote Fische schwimmen mit dem Strom."</li>
			</ul>
		</div>
	</div>
	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
		try {
		var pageTracker = _gat._getTracker("UA-7333478-4");
		pageTracker._trackPageview();
		} catch(err) {}
	</script>
</body>
</html>