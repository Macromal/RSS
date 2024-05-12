<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Bejelentkezés</title>

    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<style>



.center {
  display: block;
  margin-left: 20px;
  margin-right: auto;
  width: 100%;
}

.isDisabled {
  color: currentColor;
  cursor: not-allowed;
  opacity: 0.5;
  text-decoration: none;
   pointer-events: none;
}



.intro,
.intro a{
  color:#fff;
  font-family:
}

.page{
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0%;
                left: 0%;
            }
            .anim span:nth-child(7h) {
                animation-delay: 2.5s;
            }
            .anim span:nth-child(7n-1) {
                animation-delay: 1.0s;
            }
            .anim span:nth-child(7n-2) {
                animation-delay: 3.5s;
            }
            .anim span:nth-child(7n-3) {
                animation-delay: 5.0s;
            }
            .anim span:nth-child(7n-4) {
                animation-delay: 1.5s;
            }
            .anim span:nth-child(7n-5) {
                animation-delay: 7.0s;
            }
            .anim span:nth-child(7n-6) {
                animation-delay: 9.5s;
            }

            @keyframes anim{
                0% {
                    width: 75px;
                    height: 75px;
                    opacity: 1;                    
                    transform: translate(0, 0px) rotateZ(0deg);
                }
                75% {
                    width: 75px;
                    height: 75px;
                    opacity: 1;
                    transform: translate(100px, 900px) rotateZ(270deg); 
                }
                100% {
                    width: 75px;
                    height: 75px;
                    opacity: 0;                   
                    transform: translate(150px, 900px) rotateZ(360deg);
                }
            }






* {
  box-sizing: border-box;
}

body, html {
  color: white;
  background: #1e2021;
  padding: 0;
  margin: 0;
  font-family: "Heebo", sans-serif;
  height: 100%;
  width: 100%;
}

main {
  width: 100%;
  height: 100%;
  position: relative;
  display: grid;
  padding-top: 30px;
  z-index: 1;
  background-image: 
  linear-gradient(rgba(165, 196, 211, 0.3), #293743f2);
  background-size: cover;
  background-position: bottom center;
}

main > .text {
  place-self: center;
  text-align: center;
  max-width: 50vw;
}

.stats {
  position: absolute;
  left: 10px;
  top: 10px;
  z-index: 10;
  filter: saturate(0);
}

#app canvas {
  z-index: -1;
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  mix-blend-mode: overlay;
}

h1 {
  font-size: 6vw;
  font-weight: 100;
  font-family: "Mountains of Christmas", cursive;
  margin: 0 auto 15px;
}

.dg.ac {
  z-index: 2!important;
}

.link {
  display: block;
  position: absolute;
  left: 0;
  bottom: 20px;
  width: 100%;
  margin: 0 auto;
  text-align: center;
  color: white;
}




</style>

<body class="bg-gradient-primaryuser">


    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0" style = "background: linear-gradient(to bottom right, #FFFFFF, #FFFFFF);">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><a style="color:#000000; font-family:verdana; text-decoration:none">Üdvözöljük!</a></h1>
                                    </div>
                                    <form class="user" action="logos.php" method="post" >
                                        <div class="form-group">
                                            <input type="test" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp" name="neved"
                                                placeholder="Felhasználónév" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="jelszod"
                                                id="exampleInputPassword" placeholder="Jelszó" required>
                                        </div>
                                     
                                        <button class="btn btn-primary btn-user btn-block" type="submit">
                                            Bejelentkezés
                                        </button>
                                       
                                    </form>		
                                </div>
                            </div>
	
                        </div>
                    </div>
                </div>

            </div>

        </div>
		

    </div>
	

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>