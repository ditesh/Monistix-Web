<h1>Server groups List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Enabled</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($server_groups as $server_group): ?>
    <tr>
      <td><a href="<?php echo url_for('servergroup/show?id='.$server_group->getId()) ?>"><?php echo $server_group->getId() ?></a></td>
      <td><?php echo $server_group->getName() ?></td>
      <td><?php echo $server_group->getEnabled() ?></td>
      <td><?php echo $server_group->getCreatedAt() ?></td>
      <td><?php echo $server_group->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('servergroup/new') ?>">New</a>
