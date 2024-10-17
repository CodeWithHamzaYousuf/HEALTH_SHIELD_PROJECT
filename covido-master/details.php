<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- site metas -->
        <title>HEALTH HIELD</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- bootstrap css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- style css -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Responsive-->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- fevicon -->
        <link rel="icon" href="images/fevicon.png" type="image/gif" />
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
         <link rel="stylesheet" href="css/owl.carousel.min.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
        <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
     </head>
<body>
    <header class="header-area">
        <!-- <div class="left">
           <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
        </div> -->
        <div class="right">
           <a href=""><i class="fa fa-user" aria-hidden="true"></i></a>
        </div>
        <div class="container">
           <div class="row d_flex">
              <div class="col-sm-3 logo_sm">
                 <div class="logo">
                    <a href="index.html"></a>
                 </div>
              </div>
              <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-9">
                 <div class="navbar-area">
                    <nav class="site-navbar">
                       <ul>
                          <li><a href="index.html">Home</a></li>
                          <li><a href="about.html">About</a></li>
                          <li><a href="action.html">take action</a></li>
                          <li><a href="index.html" class="logo_midle">HEALTH SHEILD</a></li>
                          <li><a class="active" href="news.html">Registration</a></li>
                          <li><a href="contact.html">Contact </a></li>
                       </ul>
                       <button class="nav-toggler">
                         <span></span>
                       </button>
                    </nav>
                 </div>
              </div>
           </div>
        </div>
     </header>

   <?php


// include_once "./config/dbconnect.php";


// if(isset($_POST['add_child'])){

//    $Name = $_POST['child_name'];
//    $Name = filter_var($Name, FILTER_SANITIZE_STRING);
//    $pgname = $_POST['parent_guardian'];
//    $pgname = filter_var($pgname, FILTER_SANITIZE_STRING);
//    $age = $_POST['age'];
//    $age = filter_var($age, FILTER_SANITIZE_STRING);


//    $sql="SELECT * from child ";
//    $result=$conn-> query($sql);
 

//    if($result->num_Count() > 0){
//       $message[] = 'Product Name Already Exist!';
//    }else{

//       $insert_child = $conn->prepare("INSERT INTO child (Name, parent_guardian, age) VALUES(?,?,?)");
//       $insert_child->execute([$Name, $pgname, $age, ]);

//    }  

// };

// if(isset($_GET['delete'])){

//    $delete_ID = $_GET['delete'];
//    $delete_child = $conn->prepare("DELETE FROM child WHERE ID = ?");
//    $delete_child->execute([$delete_id]);
//    header('location:childs.php');
// }


?> 

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Childs</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="./assets/css/style.css"></link>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="./assets/css/admin_style.css">

</head>
<body>



<!-- <section class="add-products">

   <h1 class="heading">add child details</h1>

   <form action="" method="post" enctype="multipart/form-data">
      <div class="flex">
         <div class="inputBox">
            <span>Child Name (required)</span>
            <input type="text" class="box" required maxlength="100" placeholder="Enter Child Name" name="Name">
         </div>
         <div class="inputBox">
            <span>Parent/Guardian (required)</span>
            <input type="text"  class="box"  placeholder="Enter Parent_Guardian Name" name="Parent_Guardian">
         </div>
         <div class="inputBox">
            <span>Age (required)</span>
            <textarea type="number" name="age" placeholder="Enter age" class="box" required maxlength="500" cols="30" rows="10"></textarea>
         </div>
      </div>
      
      <input type="submit" value="Add Child Details" class="btn" name="add_product">
   </form>

</section> -->

<section class="show-products">

   <h1 class="heading">Child Details added</h1>

   <div class="box-container">

   <!-- <?php
   
   
   $sql="SELECT * from child ";
   $result=$conn-> query($sql);
    
   ?> -->
   <div class="box">
      <div class="name">Child Name: <span><?= $fetch_child['name']; ?></span></div>
      <div class="parent_guardian">Father/Guardian name:<span><?= $fetch_child['parent_guardian']; ?></span></div>
      <div class="age">Child's Age:<span><?= $fetch_child['age']; ?></span></div>
      <div class="flex-btn">
      <!--  <a href="update_childs.php?update=<?= $fetch_child['ID']; ?>" class="option-btn">update</a>
         <a href="childs.php?delete=<?= $fetch_child['ID']; ?>" class="delete-btn" onclick="return confirm('Delete this Child details?');">delete</a>-->
      </div>
   </div>
   <?php

   ?>
   
   </div>

</section>



<script src="../js/admin_script.js"></script>
<script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
    
</body>
</html>