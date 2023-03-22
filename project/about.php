<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">
      <div class="image">
         <img src="images/about-image.png" alt="">
      </div>
      <div class="content">
         <h3>Why Choose Us?</h3>
         <p>We are convinced that delivering a completely satisfying home selling and buying experience requires proactiveness and an ability to maintain solid communications throughout the transaction process.
            Our knowledge, experience, expertise and resources set us apart allowing us to achieve results that don’t just meet, but exceed our clients’ expectations.</p>
         <a href="contact.php" class="inline-btn">contact us</a>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="heading">3 Simple Steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>Search Property</h3>
         
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>Contact Agents</h3>
        
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>Enjoy Property</h3>
        
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- review section starts  -->

<section class="reviews">

   <h1 class="heading">Client's Reviews</h1>

   <div>

   </div>

</section>

<!-- review section ends -->

<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>