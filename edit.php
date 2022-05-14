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
   <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Blog using PHP and MYSQL</title>
</head>
<body>
  
<div class="container mt-5">

<?php foreach($query as $q){?>
<form method="GET">
    <input type="text" hidden name="id" value="<?php echo $q["id"];?>">
    <input type="text" name="title" placeholder="Blog Title" class="form-control bg-dark text-white my-3 text-center" value="<?php echo $q["title"];?>">
    <textarea name="content" class="form-control bg-dark text-white my-3"><?php echo $q["content"];?></textarea>
    <button name="update" class="btn btn-dark"> Update</button>
  </form>
<?php }?>

  
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js01.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>