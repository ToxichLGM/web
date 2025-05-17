<div id="content">
	<table>
		<tr>
			<th>id</th>
			<th>название</th>
			<th>цена</th>
			<th>количество</th>
			<th>описание</th>
		</tr>
		<?php foreach ($products as $products): ?>
		<tr>
			<td><?= $products['id']; ?></td>
			<td><?= $products['name']; ?></td>
			<td><?= $products['price']; ?></td>
			<td><?= $products['quantity']; ?></td>
			<td><?= $products['description']; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>
