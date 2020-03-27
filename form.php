<!DOCTYPE html>
<html>
  <?php
    if(isset($_POST['submit']) && !empty($_POST['first_name'])){
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $email = $_POST['email'];
      $message = $_POST['Message'];

      $nameOfFile = "$first_name.txt";

      $handle = fopen($nameOfFile, 'w');
      $txt = "Firstname: $first_name \nLastname: $last_name \nEmail: $email\nMessage: $message \n";
      fwrite($handle, $txt);
      fclose($handle);
    }

    
  ?>
<head>
  <title>Contact Us</title>
</head>
<body>
  <h1>CONTACT US</h1>
  <form method="POST">
    <p>
       <label for="first_name">First Name</label><br/>
       <input type="text"name="first_name" placeholder="Enter Your First Name" required/>
       </p>
       
       <p>
         <label for="last_name">Last Name</label><br/>
         <input type="text"name="last_name" placeholder="Enter Your Last Name" required/>
         
       </p>
       
       <p>
         <label for="Email">Email</label><br/>
         <input type="email"name="email" placeholder="Enter Your Email" required/>
       </p>
      
      

        <p>
          <label for="email">Your Message</label><br/>
          <textarea name="Message"></textarea>
          </p>
        
       
      
       
       <button type="submit" name="submit">Send Message</button>

</body>
</html>
