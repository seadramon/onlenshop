<h3>Menu</h3>	<ul class="list">	<!--?php var_dump($rows); ?-->	<?php if($rows !== NULL): ?>	<?php foreach($rows as $row): ?>	<li>		<a href="<?php echo base_url('index.php/halaman/lihat/' . $row['id']); ?>"><?php echo ucwords($row['judul']); ?></a>	</li>	<?php endforeach; ?>	<?php endif; ?>	