<?php

use CreationProject\Domain\Service\UserServiceImplementation;
use CreationProject\Infrastructure\Adapter\FileReaderFactory;
use CreationProject\Vendor\AutoLoader;

require_once('Vendor/AutoLoader.php');

AutoLoader::register();
$allUsers = [];
if (isset($_POST["upload"])) {
    $fileName = $_FILES['file']['name'];
    $path = $_FILES['file']['tmp_name'];
    $file = $_FILES['file'];
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
    $repo = FileReaderFactory::create($file);
    $service = new UserServiceImplementation($repo);
    $allUsers = $service->getAllUsers();

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> File Reader</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
          integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file">
            <button type="submit" name="upload">Upload</button>
        </form>
        <table class="table">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Age</th>
                <th>Gender</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($allUsers as $key => $user) { ?>
                <tr>
                    <td><?php echo $user->getFirstName(); ?></td>
                    <td><?php echo $user->getAge(); ?></td>
                    <td><?php echo $user->getAge(); ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
</div>
</body>

</html>
