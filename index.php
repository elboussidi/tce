
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    </div>
  </nav>

  <main class="login-form">
    <div class="cotainer">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">recherch <div style="float: right; color:red"></div></div>
            <div class="card-body">

              <form action="result.php" method="POST">

                <div class="form-group row">
                  <label for="email_address" class="col-md-4 col-form-label text-md-right">nom</label>
                  <div class="col-md-6">
                      <select name="name"  class="form-control">
 <option> Said</option><option> Youness</option><option> Nour-Eddin</option><option> Abdelmajid</option>
<option>Faisal </option><option>Hicham </option><option>Nouhaila </option><option> Rachida</option>
 <option>Ghizlan </option><option>Kabira </option><option>Omaima </option><option>Khalid </option>
  <option>Saadia </option> <option> Zenbe</option> <option>Iman</option><option>Sokaina </option>   
  <option>Amina </option><option>Nihal </option><option>Samira </option><option> Fatima-Zahra</option>
  <option> Saida</option><option>Meryam</option><option>Naima</option><option>Ayoub</option>
  
  
                      </select>
                  </div>
                </div>

                
                 <div class="col-md-6 offset-md-4">
                  <input type="submit" name="login"  value="recherch" class="btn btn-primary">
                  <a href="#" class="btn btn-link">retoure au actule</a>
                </div>
              </div>

            </form>

          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
