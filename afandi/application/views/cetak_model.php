<?php

echo "<table border='1'>
<tr>
	<td>name</td>
	<td>stock</td>
	<td>sold</td>
	<td>price</td>
<tr>";
foreach ($konten as $rows => $row) {
	echo
	"<tr>";
	foreach ($row as $col => $cell) {
		echo "<td>" . $cell . "</td>";
	}
	echo "</tr>";
}
echo "</table>";