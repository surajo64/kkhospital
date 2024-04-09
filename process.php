<?php 
  if(isset($_POST['btn-send']))
   {

    // posting code...
    $Fname = $_POST['fname'];
    $Phone = $_POST['phone'];
    $Email = $_POST['email'];
    $Subject = $_POST['subject'];
    $Message = $_POST['msg'];


    if (empty($Fname) || empty($Phone) || empty($Email) || empty($Subject) || empty($Message)) 
    {
      // code...

      header('location:contact.php?error');
    }
    else
    {
      $to ="kirctkilimanjarohospital@gmail.com";

      if (mail($to,$Subject,$Message,$Email))
       {
        
        header('location:contact.php?success');
      }
    }
  }
else
{

  header('location:contact.php');
}

 ?>