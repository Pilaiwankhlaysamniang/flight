<!DOCTYPE html>
<html>
<head>

   <script type="text/javascript">

      window.onload = function(){

           if ( document.getElementById('showModal') ){

               alert('Box'); //replace with your own handler
           }

      }

   </script>

</head>
<body>
asassas
<?php if ( isset($_GET['logout']) && $_GET['logout'] === 'true' ): ?>

<input type="hidden" id="showModal" />

<?php endif;?>
</body>
</html>