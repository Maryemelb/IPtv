
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="order3Month.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <title>Order page</title>
</head>
<body>
    <div class="container">
      <div class="row">
        <div class="col-5" align="center">

          <div class="imageslide">
            <h1>Enjoy your IP tv for 3 Month now</h1>

           <img width="400px" height="500px" src="images/tv2.jpg">
          </div>
        </div>
      
        <div class="col-6" >
          <div class="button_order">
            <button>
              <div>
                <span>
                  <p>Order Now</p><p>:)</p>
                </span>
              </div>
              <div>
                <span>
                  <p>
                    <img width="70px" height="60px" src="images/fleche2.png">
                  </p><p></p>
                </span>
              </div>
            </button>
          <h6>please enter your information and we are going to contact you soon</h6>
          </div>
          <div class="formcover">
          <div class="form" method="post" action="form3month.php">
            <form method="post" action="form.php">
             <input class="inputs" type="text" placeholder="Full_name" name="full_name" required>
             <input class="inputs" type="text" placeholder="Country" name="country" required>

              <input class="inputs" type="tel" id="phone" name="phone" required><br><br>

              <input class="inputs" type="email" placeholder="email" name="email" required>
              <input class="inputs" type="text" placeholder="device" name="device" required>
              <input class="inputs" id="ccn" type="tel" name="credit_number" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="credit number: xxxx xxxx xxxx xxxx" required><br><br>

              <input class="inputs" onclick="alertthanks()" id="submit" type="submit" value="order" required>
              <script>
               function alertthanks() {
                  alert('your information are saved thank you , our support would contact you soon');
                }
              </script>
             
 
            </form>
            <div class="alert alert-info" style="display: none;"></div>

          </div>
        </div>

       </div>
      
      </div>
    </div>
  


    
</body>
<script>
  function getIp(callback) {
 fetch('https://ipinfo.io/json?token=<your token>', { headers: { 'Accept': 'application/json' }})
   .then((resp) => resp.json())
   .catch(() => {
     return {
       country: 'morocco',
     };
   })
   .then((resp) => callback(resp.country));
}

  const phoneInputField = document.querySelector("#phone");
   const phoneInput = window.intlTelInput(phoneInputField, {
     utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   });
   const info = document.querySelector(".alert-info");

function process(event) {
 event.preventDefault();

 const phoneNumber = phoneInput.getNumber();

 info.style.display = "";
 info.innerHTML = `Phone number in E.164 format: <sbravtrong>${phoneNumber}</strong>`;
}
</script>
</html>


