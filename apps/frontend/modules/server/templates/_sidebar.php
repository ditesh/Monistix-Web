<div>
  <h1>Server Groups</h1>
    <div>
	<?php foreach($groups as $group): ?>
	<div class="category"><?php echo link_to($group->getName(),'server/index?id='.$group->getId()) ?></div>
	<div class="category-contents">
		<ul>
			<?php foreach($group->getServers() as $server): ?>
			<li class="category-contents-item">
				<?php echo $server->getHostname() ?>
			</li>
			<?php endforeach ?>
		</ul>
	</div>
	<?php endforeach ?>
    <div>
</div>
