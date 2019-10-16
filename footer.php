    <footer>
      <p style="margin-bottom:0">
        © Mathilde FAIVRE
          <?php
              $year = date("Y");
              echo $year;
           ?>
         </p>
         <p>
           <a target="_blank" href="https://medium.com/@mathildefaivre6">
             <img style="height: 15px;"
             src=<?php echo get_template_directory_uri() . '/medium.svg'; ?>>
           </a>
           &#8226;
           <a target="_blank" href="https://www.instagram.com/lens_of_june/">
             <img style="height: 16px;"
             src=<?php echo get_template_directory_uri() . '/instagram-logo.svg'; ?>>
           </a>
           &#8226;
           <a target="_blank" href="https://www.linkedin.com/in/mathilde-faivre-strategist">
             <img style="height: 15px;"
             src=<?php echo get_template_directory_uri() . '/linkedin.svg'; ?>>
           </a>
           &#8226;
           <a target="_blank" href="mailto:mathilde.faivre@gmail.com">
             <img style="height: 19px;"
             src=<?php echo get_template_directory_uri() . '/email.svg'; ?>>
           </a>
         </p>


    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
