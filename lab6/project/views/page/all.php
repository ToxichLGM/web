<h1><?= $h1; ?></h1>
<div id="content">
	<table>
		<tr>
			<th>id</th>
			<th>title</th>
			<th>text</th>
		</tr>
		<?php foreach ($pages as $page): ?>
		<tr>
			<td><?= $page['id']; ?></td>
			<td><?= $page['title']; ?></td>
			<td><?= $page['text']; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>
