<html>
    <body>
    	<table>
    		<tr>
    			<td>Rank</td>
    			<td>Domain</td>
    		</tr>
	    	<?php
	       if(!empty($domains)) {
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
	       }
				 else {
				 	echo "No domain found";
				 }
	      ?>
    	</table>
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