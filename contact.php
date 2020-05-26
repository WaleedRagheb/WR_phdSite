<!-- Script used to send an email after submitting the contact form -->
<?php

  // Check that the form is submitted/The user has clicked the button
  if (isset($_POST['submit'])) {
    // When gathering data from the form, check that there is no code injection
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $mailFrom = $_POST['email'];
    $message = htmlspecialchars($_POST['message']);

    // If for some reasons one of the fields is empty, return to the page with an error message
    if (empty($firstname) || empty($lastname) || empty($mailFrom) || empty($message)) {
      header("Location: ./template_full.php?contact=empty");
      exit();
    }
    else {

      // Allow only some characters for both firstname and lastname
      if (!preg_match("/^[a-zA-Z]*$/", $firstname) || !preg_match("/^[a-zA-Z]*$/", $lastname)) {
        header("Location: ./template_full.php?contact=char");
        exit();
      }
      else {

        // If the email provided is incorrect, return to the page with an error message
        if (!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)) {
          header("Location: ./template_full.php?contact=invalidemail");
          exit();
        }
        else {

           // Otherwise send the mail with the mail() function
          $mailTo = "waleed.ragheb@lirmm.fr, Jerome.Aze@lirmm.fr, Sandra.Bringay@lirmm.fr, Maximilien.Servajean@lirmm.fr";
          $headers = "From: ".$mailFrom;
          $txt = "You have received an email from ".$firstname." ".$lastname.".\n\n".$message;

          /* Details about the mail function : https://www.php.net/manual/fr/function.mail.php */
          mail($mailTo, "Contact", $txt, $headers);

          /* Details about the header function : https://www.php.net/manual/fr/function.header.php */
          header("Location: ./template_full.php?contact=mailsent");

          /* Details out the exit function : https://www.php.net/manual/fr/function.exit.php */
          exit();
        }
      }
    }
  }
  else {
    header("Location: ./template_full.php?contact=error");
    exit();
  }

?>