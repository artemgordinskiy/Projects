<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Multiplication table</title>
		<meta charset="UTF-8">

		<style type="text/css">
			body {
				font-family: Helvetica, Arial, sans-serif;
			}

			table {
				border-collapse: collapse;
			}

			td {
				text-align: center;
				padding: 5px;
			}

			tr:first-child,
			td:first-child {
				background-color: #2B2B2B;
				color: rgb(248, 248, 248);
			}

			tr:nth-child(even) td:not(:first-child) {
				background-color: #F0F0F0;
			}
		</style>
	</head>

	<body>
		<table>
			<?php $rows = generateMultiplicationTableRows(20); ?>

			<?php foreach ($rows as $row) : ?>
				<tr>
					<td><?php echo implode("</td><td>", $row); ?></td>
				</tr>
			<?php endforeach; ?>
		</table>

	</body>

</html>


<?php
	function generateMultiplicationTableRows($upTo) {
		$rows = array();
		$rows[0] = array_merge(array('×'), range(1, $upTo));

		for ($i = 1; $i <= $upTo; $i++) {
			$rows[$i] = array($i);
			for ($j = 1; $j <= $upTo; $j++) {
				$rows[$i][$j] = ($i * $j);
			}
		}

		return $rows;
	}
?>