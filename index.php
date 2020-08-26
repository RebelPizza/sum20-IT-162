<?php include "includes/header.php"?>
  <main class="wrapper">
    <section>
      <h3>Welcome!</h3>
      <p>Thank you for checking out my BIG site. My name is Aria and I would love to assist you with your websites.</p>
      <p>Please fill out the questionnare so that I can have a better understanding of your needs.</p>
      <hr>
        <?php


             include 'contact/contact_include.php'; #site keys & code here

             $toAddress = "aria.c181@gmail.com";  //place your/your client's email address here
             $toName = "Aria"; //place your client's name here
             $website = "ariasportal.com";  //place NAME of your client's website

             // echo loadContact('includes/contact/simple.php');#demonstrates a simple contact form
             echo loadContact('contact/multiple.php');#demonstrates multiple form elements

        ?>
    </section>

      <aside>
        <h3>Favorite resources!</h3>
        <ul>
          <li><a href="https://www.godaddy.com/garage/the-ultimate-web-design-client-questionnaire/">Questionnare Ideas</a></li>
          <li><a href="https://www.w3schools.com/">W3 Schools</a></li>
          <li><a href="https://validator.w3.org/">Validator</a></li>
        </ul>
      </aside>
  </main>

<?php include "includes/footer.php"?>
