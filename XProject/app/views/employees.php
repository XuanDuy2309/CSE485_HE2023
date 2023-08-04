<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"></head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<body>
    <div class="main">
        <div class="header row justify-around">
            <h4 class="text-primary col">list of employees</h4>
            <button class="btn btn-success col">+ Add New Employee</button>
        </div>
        <div class="employ-table">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Salary</th>
                    <th scope="col" class="text-center" colspan="3">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($employees as $row){
                    ?>
                    <tr>
                        <th scope="row"><?= $row->getId();?></th>
                        <td><?= $row->getName()?></td>
                        <td><?= $row->getAddress();?></td>
                        <td><?= $row->getSalary();?></td>
                        <td>
                            <a href="index.php?c=employees&a=detail&id=<?=$row->getId();?>">
                                <i class="bi bi-eye-fill"></i>
                            </a>
                        </td>
                        <td>
                            <a href="">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        <td>
                            <a href="">
                                <i class="bi bi-trash3-fill"></i>
                            </a>
                        </td>
                    </tr>
                    <?php
                }
                ?>

                </tbody>
            </table>
        </div>
    </div>
</body>
</html>