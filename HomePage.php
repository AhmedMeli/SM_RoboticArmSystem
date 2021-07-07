<?php
require "connector.php";

$check = "";
$disable = "disabled";
$status = "OFF";
$query = "SELECT status FROM motors WHERE RobotID = 1";
$result = mysqli_query($dbc, $query);

if (mysqli_fetch_assoc($result)["status"] == 1) {
  $check = "checked";
  $disable = "";
  $status = "ON";
  
};
$query = "SELECT * FROM Direction WHERE RobotID = 1";
$result = mysqli_fetch_assoc(mysqli_query($dbc, $query));
$activeClassId = $result['Direction'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" >


    <title>RAS</title>

    <style>
input[type=range]::-webkit-slider-thumb {
    background: #212529;
}
input[type=range]:active::-webkit-slider-thumb {
    background: #212529;
    opacity: 0.7;
}
.form-check-input:checked {
    background-color: black;
    
}
    </style>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


    <div class="container container-fluid">
        <div class="row">

          <div class="col align-self-center">
            <div class="card border-dark my-3 col-lg-4 d-flex align-items-stretch mx-auto" style="max-width: 18rem;">
                <div class="card-header p-3 mb-2 bg-dark text-white d-flex justify-content-between">
                  <div>
                    <h4>Motors</h4>
                  </div>
                  <div class="form-check form-switch">
                    <h5>
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheck1" name="flexSwitchCheck1" <?php echo $check; ?>>
                      <label class="form-check-label" for="flexSwitchCheck1Label" id="flexSwitchCheck1Label"><?php echo $status; ?></label>
                    </h5>
                  </div>
                </div>
                <div class="card-body text-dark">
                <form  class="form-wrapper" id="motors" action="updateMotors.php" method="post">
                  <label for="customRange2 " class="form-label">Motors 1</label>
                  <input name="motor1" type="range" class="form-range" min="0"  max="180" id="customRange2" data-bs-toggle="tooltip" <?php $name="motor1"; include 'getMotor.php'; ?> <?php echo $disable; ?>>
            
                  <label for="customRange2" class="form-label">Motors 2</label>
                  <input name="motor2" type="range" class="form-range" min="0" max="180" id="customRange2" data-bs-toggle="tooltip" <?php $name="motor2"; include 'getMotor.php'; ?> <?php echo $disable; ?>>
            
                  <label for="customRange2" class="form-label">Motors 3</label>
                  <input name="motor3" type="range" class="form-range" min="0" max="180" id="customRange2" data-bs-toggle="tooltip" <?php $name="motor3"; include 'getMotor.php'; ?> <?php echo $disable; ?>>
            
                  <label for="customRange2" class="form-label">Motors 4</label>
                  <input name="motor4" type="range" class="form-range" min="0" max="180" id="customRange2" data-bs-toggle="tooltip" <?php $name="motor4"; include 'getMotor.php'; ?> <?php echo $disable; ?>>
            
                  <label for="customRange2" class="form-label">Motors 5</label>
                  <input name="motor5" type="range" class="form-range" min="0" max="180" id="customRange2" data-bs-toggle="tooltip" <?php $name="motor5"; include 'getMotor.php'; ?> <?php echo $disable; ?>>
            
                  <label for="customRange2" class="form-label">Motors 6</label>
                  <input name="motor6" type="range" class="form-range" min="0" max="180" id="customRange2" data-bs-toggle="tooltip" <?php $name="motor6"; include 'getMotor.php'; ?> <?php echo $disable; ?>>
                  <button name="submit" type="submit" class="btn btn-dark" <?php echo $disable; ?>>Submit</button>
                  </form>	
                </div>
              </div>

          </div>
          <div class="col">
        <div class="card my-2" style="height: 28rem;">
          <div class="card-body d-flex justify-content-center">
            <div class="align-self-center">
              <table>
                <tr>
                  <td>
                  </td>
                  <td>
                    <button type="button" class="btn btn-outline-dark controls" id="forward" onclick="myFunction(this.id)" <?php echo $disable; ?>>
                      <i class="bi bi-chevron-up"></i>
                    </button>
                  </td>
                  <td>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="button" class="btn btn-outline-dark controls" id="left" onclick="myFunction(this.id)" <?php echo $disable; ?>>
                      <i class="bi bi-arrow-counterclockwise"></i>
                    </button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-outline-dark controls" id="stop" onclick="myFunction(this.id)" <?php echo $disable; ?>>
                      <i class="bi bi-stop-circle-fill"></i>
                    </button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-outline-dark controls" id="right" onclick="myFunction(this.id)" <?php echo $disable; ?>>
                      <i class="bi bi-arrow-clockwise"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                  </td>
                  <td>
                    <button type="button" class="btn btn-outline-dark controls" id="backward" onclick="myFunction(this.id)" <?php echo $disable; ?>>
                      <i class="bi bi-chevron-down"></i>
                    </button>
                  </td>
                  <td>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>


    

        <script>
      $("#<?php echo $activeClassId ?>").addClass("activeClass");
      function myFunction(id) {
        var direction = id;
        $(".activeClass").removeClass("activeClass");
        $("#"+id).addClass("activeClass");
        $.ajax({
          url: "updateMovement.php",
          method: "POST",
          data: {
            direction: direction
          },
        });
      };
        </script>

      <script>
        $('#flexSwitchCheck1').click(function() {
          if ($(this).prop("checked") == true) {
            $('#flexSwitchCheck1Label').text("ON");
            $("#motors :input").prop("disabled", false);
            $.ajax({
              type: "POST",
              url: "status.php", //your url here
              data: {
                'power': 'ON'
              },
              dataType: 'json',
              error: function(response) {
                console.log(response);
              }
            });

          } else if ($(this).prop("checked") == false) {
            $('#flexSwitchCheck1Label').text("OFF");
            $("#motors :input").prop("disabled", true);
            $.ajax({
              type: "POST",
              url: "status.php", //your url here
              data: {
                'power': 'OFF'
              },
              dataType: 'json',
              error: function(response) {
                console.log(response);
              }
            });
          }
        });

      </script>
<script>
    $('input', '#motors').each(function () {
      $(this).prop('title', $(this).val());
    });

    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
    })
    
    $(document).ready(function() {
      $("#motors").children('input').on('input', function() { 
        $(this).prop('title', $(this).val());
        $(this).tooltip().attr('data-bs-original-title', $(this).val()).tooltip('show');
      });
    });
  </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>