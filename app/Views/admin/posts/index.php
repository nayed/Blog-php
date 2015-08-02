<h1>Manage articles</h1>

<p>
    <a href="?p=admin.posts.add" class="btn btn-success">Add</a>
</p>

<table class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($posts as $post): ?>
            <tr>
                <td><?= $post->id; ?></td>
                <td><?= $post->title; ?></td>
                <td>
                    <a class="btn btn-primary" href="?p=admin.posts.edit&id=<?= $post->id; ?>">Edit</a>

                    <form action="?p=admin.posts.delete" method="post" style="display: inline">
                        <input type="hidden" name="id" value="<?= $post->id ?>">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>