

<html>
   <body>
      <script>
         setTimeout(function(){
            window.location.href = '/tumbasFiles';
         }, 3000);
      </script>
      <p>Logout proccess wait a minutes.</p>
   </body>
</html>
<?php 
session_start();
session_destroy();
?>