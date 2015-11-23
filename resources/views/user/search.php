<html>
    <body>
    	<?php
       if(count($domains)) 
			 {
			 ?>
	    	<table>
	    		<tr>
	    			<td>Rank</td>
	    			<td>Domain</td>
	    		</tr>
		    	<?php
		       	foreach ($domains as $domain) {
						?>
		       		<tr>
		       			<td>
		       				<?php echo $domain->rank; ?>
		       			</td>
		       			<td>
		       				<?php echo $domain->name; ?>
		       			</td>
		       		</tr>
	       		<?php 
						}
		      ?>
	    	</table>
    	<?php	 
  	  }
			else {
				echo "No domain found";
			}
			?>
    </body>
</html>
<style>
table {
	width: 500px;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>