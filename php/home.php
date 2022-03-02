<?php session_start();?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
   
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>
.mainy{
    background-color: rgba(63, 59, 59, 0.993);
    display: flex;
    margin-top: 10px;
}
.navbar{  
    background-color: rgba(63, 59, 59, 0.993);
    color: white;
}
.navbar a{
    text-decoration: none;
}
</style>
   </head>
<body>
<!--start header-->
<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="#"><?php echo $_SESSION['user']; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="settings.php">setting</a>
      </li>
           </ul>
  </div>
</nav>
<!--end-->




<form method="POST" action="#">
    <h3>
        create a post
    </h3>
  <div class="form-group">
  <input type="text" name="mewo">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
       <div>
           <?php
            include 'Conf.php';
            
              $mewo = $_POST['mewo'];
           
          
           $person = $_SESSION['name'];
           class post{
               public $user;
               public $subject;
           
              function createPost($subject, $user){
                  $this->subject=$subject;
                  $this->user=$user;
              }
           }
        if($_SERVER['REQUEST_METHOD'] === "POST"){
          $blog = new post();
          $blog->createPost($mewo, $person);
        }
          $_SESSION['post'] = $blog->subject;
          
          
          //storing at database
          
$sql ="INSERT INTO `posts`(post, user) VALUES ('$blog->subject','$blog->user')";
  // use exec() because no results are returned
  $conn->exec($sql);
          
//showing data 


$sql = 'SELECT post, user FROM posts';
$stmt = $conn->query($sql);

$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
if($posts){
    foreach($posts as $post){
        echo'<div class="mainy my-3 container flex-wrap   justify-content-between pt-3 col-lg-4 " style="height: 250px;">
        <div class="col-5"><p class="text-white  text-center">'.$post['user'].'</p></div>
       <div class="col-5"> <p class="text-light  text-center"><a href="edit.php">edit</a></p></div>
        <div class="col-12 text-center">
          <h4 class="text-light col-12 ">'.$post['post'].'</h4>
        </div>
      </div>';
    }
}

       
           ?>
       </div>
       
   <script>
   </script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
