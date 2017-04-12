<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Fun With SVGs</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <style type="text/css">
      
      /*cls-25*/
      .r-blinker{fill:#c18b10;}
      .l-blinker{fill:#c18b10;}
      /*cls-4*/
      .brightr-blinker{fill:#ffb217;}
      .brightl-blinker{fill:#ffb217;}
      /*cls-26*/
      .l-yellowbright{fill:#fff265;}
      .r-yellowbright{fill:#fff265;}
      /*cls-27*/
      .l-yellowlight{fill:#c4bf00;}
      .r-yellowlight{fill:#c4bf00;}
      /*cls-20*/
      .l-headlight{fill:#ccc;}
      .r-headlight{fill:#ccc;}
      /*cls-1*/
      .sky{fill:#85d5e0;}

      /* HEADLIGHTS */
      .l-headlight {
        transition: fill 2s;
      }

       .r-headlight {
        transition: fill 2s;
      }

      .r-headlight.is-bright {
        fill: white;
      }

      .l-headlight.is-bright {
        fill: white;
      }

      /* BLINKERS */
      .l-blinker {
        animation-name: flash;
        animation-duration: 20s;
      }

      @keyframes flash {
        from, 50%, to {
        opacity: 1;
      }

      /*SKY*/
      .sky {
        fill:fill:#85d5e0;
        transition: fill 10s;
      }

      .sky.is-night {
        fill: black !important;
      }
      
    </style>
  </head>
  <body class="bg-faded">
    <main class="container py-4">
      <h1 class="pb-4 font-weight-bold text-center">E30 M3</h1>
      <?php include('../images/e30.php'); ?>
    </main>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <script>
      $( document ).ready(function() {
        $('.l-headlight').click(function() {
          $(this).toggleClass('is-bright');
          $('.r-headlight').toggleClass('is-bright');
        });

        $('.r-headlight').click(function() {
          $(this).toggleClass('is-bright');
          $('.l-headlight').toggleClass('is-bright');
        });

        $('.sky').click(function() {
          $(this).toggleClass('is-night');
        });

      });
    </script>
  </body>
</html>












