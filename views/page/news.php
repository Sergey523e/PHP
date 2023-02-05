<h1><?=$header; ?></h1>
<p>

<table>
	<?php
       foreach ($data as $key => $val) {
printf("<tr><td width=110>%s</td><td>%s</td></tr>\n", $val['id'], $val['zag']);        
       } 
?>
     </table>
