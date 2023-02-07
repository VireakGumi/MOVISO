<html>

<head>
    <meta charset="utf-8">
    <title>View Records</title>
    <link rel="stylesheet" href="../../views/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-3">
        <div class="table-add-record d-flex justify-content-between mb-2">

            <h4>All Movies</h4>
            <button>Add New</button>
        </div>

        <table class="table table-secondary  table-hover">
            <thead class="" width="">
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Title</th>
                    <th class="text-center">Genre</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Released</th>
                    <th class="text-center">duration</th>
                    <th class="text-center">Edit</th>
                    <th class="text-center ">Delete</th>
                </tr>
            </thead>

            <?php
            foreach ( $movies as $movie){?>
            <tbody>
                <tr>
                    <td class="text-center"><?php echo $movie["movies_id"];?></td>
                    <td class="text-center"><?php echo $movie["movie_title"];?></td>
                    <td class="text-center"><?php echo $movie["genre"];?></td>
                    <td class="text-center"><?php echo "$" . $movie["price"];?></td>
                    <td class="text-center"><?php echo $movie["released"];?></td>
                    <td class="text-center"><?php echo $movie["duration"];?></td>
                    <td class="text-center">
                        <a href="/edit?id=<?= $movie['movies_id'] ?>">
                            <img src="../../assets/edit.png" alt="" width="25" class="color-primary">
                        </a>
                    </td>
                    <td class="text-center">
                        <a href="/delete?id <?php echo $movie["movies_id"] ?>">
                            <img src="../../assets/delete.png" alt="" width="25" class="">
                        </a>
                    </td>
                </tr>

            </tbody>
            <?php
            ;}
            ?>
        </table>
    </div>
</body>

</html>