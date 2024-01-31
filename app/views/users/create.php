<div class="container mt-3">

    <h2><?= isset($data['id']) ? 'Edit' : 'Create' ?> Users</h2>
    <br>
    <div class="card-header">
        <h3 class="card-title">
            <a href="<?= BASEURL; ?>/users" class="btn float-right btn-xs btn btn-primary">Back to Users
            </a>
    </div>
    <br>
    <form role="form" action="<?= BASEURL; ?>/users/<?= isset($data['id']) ? 'update' : 'save' ?> " method="POST" enctype="multipart/form-data">
        <input type="hidden" id="id" name="id" required value="<?= isset($data['id']) ? $data['id'] : '' ?>">

        <div class="mb-3 mt-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required value="<?= isset($data['name']) ? $data['name'] : '' ?>">
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required value="<?= isset($data['email']) ? $data['email'] : '' ?>">
        </div>
        <div class="mb-3 mt-3">
            <label for="username" class="form-label">Username:</label>
            <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required value="<?= isset($data['username']) ? $data['username'] : '' ?>">
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required value="<?= isset($data['password']) ? $data['password'] : '' ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>