<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>MEDIALLOC</title>
 <style>
    

            /* CSS for basic styling */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
}

header h1 {
    margin: 0;
}

nav {
    /* Add your navigation styles here */
}

main {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 20px;
}

.left-section {
    flex: 1;
    padding: 20px;
}

.right-section {
    flex: 1;
    /* Add styles for the carousel container */
}

.card {
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    padding: 20px;
    margin: 20px 0;
}

.card h3 {
    margin-top: 0;
}
.carousel {
            width: 100%;
            height: 300px;
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
}

/* Add more CSS for form styling and carousel as needed */

        </style>
    </head>
    <body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.html"><img src="navbar.jpg" height="100px" width="200px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="help.html">Help</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="grivence.html">grivences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Signup.html">Signup</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.html">Contact</a>
                </li>
               
            </ul>
        </div>
    </nav>  
    
    <main>
        <section class="left-section">
            <div class="opening-message">
                <div class="carousel">
                    <h2>HELLO EXPLORE THE NEW WORLD !!</h2>
                    <div> <br> <br> </div>
                            <p>Discover our services and sign up today.</p>
                </div>
            </div>
            <div class="card user-card">
                <h3>Doctor Login</h3>
                <button type="button" class="btn btn-primary"><a href="../doctorlogin.php"> Login </button>
                
            </div>
            <div class="card doctor-card">
                <h3>Patient Sign Up / Login</h3>
                <button type="button" class="btn btn-primary"><a href="../register.php"> SignUp/ Login </button>
            </div>
        </section>
        
        <section class="right-section">
            <div class="container" style="margin-top: 2%;">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="Durga Linked in Cover photo.png" height="300px" width="90px"  alt="DURGA PRASAD DASH">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="Durga2.jpg" height="300px" width="90px" alt="PRIZE DISTRIBUTION 2019">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="Durga3.jpg" height="300px" width="90px"  alt="District level prize distribution">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div> 
                <div><br></div>
                <div><br></div>
          </div>
          <div class="card doctor-card">
            <h3>KNOW YOUR DISEASE </h3>
            <a href="test.php"> <button type="button" class="btn btn-info"> Diagonize Your Disease </button>
        </div>
        </section>
    </main>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>