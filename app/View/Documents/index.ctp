<!-- File: /app/View/Posts/index.ctp -->

<h1>Documents posts</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($documents as $document): ?>
    <tr>
        <td><?php echo $document['Document']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($document['Document']['name'],
array('controller' => 'posts', 'action' => 'view', $document['Document']['id'])); ?>
        </td>
        <td><?php echo $document['Document']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($document); ?>
</table>