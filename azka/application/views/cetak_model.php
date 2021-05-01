<?php

echo "<table border='1'>
<tr>
	<td>nama</td>
	<td>stok</td>
	<td>terjual</td>
	<td>tahun</td>
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