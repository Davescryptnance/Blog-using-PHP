<?php

include "logic.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Blog using PHP and MYSQL</title>
</head>
<body>
  
<div class="container mt-5">

<?php foreach($query as $q){?>
 <div class="bg-dark p-5 rounded-tg text-white text center">
  <h1><?php echo $q['title'];?></h1>

  <div class="d-flex mt-2 justify-content-center align-item-center">
    <a href="edit.php?id=<?php echo $q['id'];?>" class="btn btn-light btn-sm">Edit</a>

    <form method="POST">
        <input type="text" hidden name="id" value="<?php echo $q["id"];?>">
        <button class="btn btn-danger btn-sm ml-2" name="delete">Delete</button>
      </form>
    </div>

</div>
<p class="mt-5 border-left border-dark pl-3"><?php echo $q['content'];?></p>
<?php }?>
  
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js01.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>