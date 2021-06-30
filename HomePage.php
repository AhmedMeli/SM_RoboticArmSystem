
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



    <div class="container container-fluid">
        <div class="row">
          <div class="col align-self-start">
            
          </div>
          <div class="col align-self-center">
            <div class="card border-dark my-3" style="max-width: 18rem;">
                <div class="card-header p-3 mb-2 bg-dark text-white d-flex justify-content-between">
                  <div>
                    <h4>Motors</h4>
                  </div>
                  <div class="form-check form-switch">
                    <h5>
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                      <label class="form-check-label" for="flexSwitchCheckDefault">On</label>
                    </h5>
                  </div>
                </div>
                <div class="card-body text-dark">
                <form  class="form-wrapper" action="updateMotors.php" method="post">
                  <label for="customRange2 " class="form-label">Motors 1</label>
                  <input name="motor1" type="range" class="form-range" min="0" max="180" id="customRange2">
            
                  <label for="customRange2" class="form-label">Motors 2</label>
                  <input name="motor2" type="range" class="form-range" min="0" max="180" id="customRange2">
            
                  <label for="customRange2" class="form-label">Motors 3</label>
                  <input name="motor3" type="range" class="form-range" min="0" max="180" id="customRange2">
            
                  <label for="customRange2" class="form-label">Motors 4</label>
                  <input name="motor4" type="range" class="form-range" min="0" max="180" id="customRange2">
            
                  <label for="customRange2" class="form-label">Motors 5</label>
                  <input name="motor5" type="range" class="form-range" min="0" max="180" id="customRange2">
            
                  <label for="customRange2" class="form-label">Motors 6</label>
                  <input name="motor6" type="range" class="form-range" min="0" max="180" id="customRange2">
                  <button name="submit" type="submit" class="btn btn-dark">Submit</button>
                  </form>	
                </div>
              </div>
              
          </div>
          <div class="col align-self-end">
            
          </div>
        </div>
      </div>

    






    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>