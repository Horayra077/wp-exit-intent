<?php 
    $var = $_COOKIE['username'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

    <h1>Hello, world!</h1>



    <!-- Modal -->
    <!-- <div class="modal" id="myPopup" >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark">
          <div class="modal-header">
            <h5 class="modal-title">Subscribe</h5>
            <button type="button" class="close text-dark" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium dicta aliquid odit magnam,
               excepturi tenetur iusto dolor ex quidem distinctio laudantium deserunt officia enim perferendis ipsam nam, 
               reprehenderit et nihil.</p>
               <form action="#" method="post">
                <div class="form-group mb-2">
                  <input type="email" name="email" class="form-control-lg" placeholder="Enter your Email">
                </div>
                <div class="form-group">
                  <input type="submit" name="submit" value="Subscribe" class="btn btn-danger btn-block btn-lg">
                </div>
               </form>
          </div>
        </div>

      </div>
    </div> -->




    <!-- Modal -->
<div class="modal" id="myPopup" >
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Subscribe</h5>
        <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium dicta aliquid odit magnam,
           excepturi tenetur iusto dolor ex quidem distinctio laudantium deserunt officia enim perferendis ipsam nam, 
           reprehenderit et nihil.</p>
           <form action="#" method="post">
            <div class="form-group mb-2">
              <input type="email" name="email" class="form-control-lg" placeholder="Enter your Email">
            </div>
            <div class="form-group">
              <input type="submit" name="submit" value="Subscribe" class="btn btn-danger btn-block btn-lg">
            </div>
           </form>
      </div>
    </div>
  </div>
</div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <!-- <script type="text/javascript">
      $(document).ready(function(){
        $("body").mouseleave(function(){
          $("#myPopup").show();
        });
        $(".close").click(function(){
          $("#myPopup").hide();
        });
      })
    </script> -->

    <script type="text/javascript">
      $(document).ready(function(){

        <?php
            echo "var jsvar ='$var';";
        ?>
        if(!jsvar) {
            $("body").mouseleave(function(){
                $("#myPopup").show();
            });
            $(".close").click(function(){
                $("#myPopup").hide();
            });
        }
        else{

        }

      })
    </script>
  
  </body>
</html>