<?php
session_start();  

$host = "localhost";
$user = "postgres";
$pass = "posgress";
$db = "rss";


$con = pg_connect("host=$host dbname=$db user=$user password=$pass") or die ("Nem lehet csatlakozni");
	
$felhasznalo = $_SESSION['felhasznalo'];

$check_query5 = "select * from users where fsznev = '$felhasznalo'";
$checkres5 = pg_query($con, $check_query5);	

if(pg_affected_rows($checkres5) > 0)

{
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>FELHASZNÁLÓ</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
	<link href="css/toastr.min.css" rel="stylesheet">

</head>



<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/start/jquery-ui.css"
    rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
     var IdealTimeOut = 1200;
        var idleSecondsTimer = null;
        var idleSecondsCounter = 0;
        document.onclick = function () { idleSecondsCounter = 0; };
        document.onmousemove = function () { idleSecondsCounter = 0; };
        document.onkeypress = function () { idleSecondsCounter = 0; };
        idleSecondsTimer = window.setInterval(CheckIdleTime, 1000);
 
        function CheckIdleTime() {
            idleSecondsCounter++;
            var oPanel = document.getElementById("timeOut");
            if (oPanel) {
                oPanel.innerHTML = (IdealTimeOut - idleSecondsCounter);
            }
            if (idleSecondsCounter >= IdealTimeOut) {
                window.clearInterval(idleSecondsTimer);
                alert("Hosszas inaktivitás miatt ki lett léptetve. Kérem jelentkezzen be újra!");
                window.location = "logout.php";
            }
        }


</script>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
	

        <!-- Sidebar -->

         <ul class="navbar-nav bg-gradient-primaryuser sidebar sidebar-dark accordion " id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="blank.php">
                <div class="sidebar-brand-icon rotate-n-15">
                  
                </div>
                <div class="sidebar-brand-text mx-3">Felhasználó</div>
            </a>

            <!-- Divider -->
             <li class="nav-item ">
                <a class="nav-link" href="blank.php">
            
                    <span>Feed készítése</span></a>
            </li>
			
			 <li class="nav-item active">
                <a class="nav-link" href="mentett_feed.php">
                   
                    <span>Mentett Feedek</span></a>
            </li>
						 


<style>
.bg-gradient-primaryuser {
    background-color: #1cc88a;
    background-image: linear-gradient(
180deg,#1cc88a 10%,#0EB466 100%);
    background-size: cover;
}



</style>

            <hr class="sidebar-divider d-none d-md-block">

        </ul><!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


                    <ul class="navbar-nav ml-auto">



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
	<div>
        Kijelentkezés: <span id="timeOut"></span> másodperc múlva.
    </div>
<?php	
		
echo "Üdvözöllek " .$_SESSION['felhasznalo'];

		
?>
</span>
                                
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                             
                          
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Kijelentkezés
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
 <div>
 
<form class="modal-content animate" action="mentett_feed_create.php" method="post" enctype="multipart/form-data">
<div class="container"> 
	<div class=" text-center mt-5 ">
        <h1> <?php $fsz = $_SESSION['felhasznalo'];  echo $fsz?> </h1>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                       
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
											<label for="form_message">Név</label> </br>
											<input type="text" class="form-control form-control-user" id="title_sajat"  name="title_sajat"  required></br>
											<label for="form_message">Link</label> </br>
											<input type="text" class="form-control form-control-user" id="link_sajat"  name="link_sajat"  required></br>										
										</div>
                                    </div>	
                                    <div class="col-md-12"> 
									<button class="btn btn-success btn-send pt-2 btn-block"  type="submit">Mentés</button>
									</div>
                                </div>
                            </div>
                       
                    </div>
                </div>
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>
</div>
</form>




<!-- fsz ticketei: -->
<div class = "container">



             <table id="dataTable2" class="table table-hover table-bordered" style="width:100%">
                <thead>
                <tr>
				<th> # </th>
				<th> Cím </th>
				<th> Link</th>
				<th> Feltöltés dátuma</th>
				<th> Szerkesztés</th>


				
			
				</tr>
				</thead>

                <tbody>
 <?php

$fsz = $_SESSION['felhasznalo'];

$query = "select * from feeds where feltoltotte = '$fsz' and link is not null order by letrehozva desc" ;
		
			$result = pg_query($query);

   
			while($row = pg_fetch_row($result))
			{
				echo "<tr>";
				echo "<td>" .$row[0] ."</td>";				
				echo "<td style=\"width:25%\">" .$row[1] ."</td>";
				echo "<td> <img src='rss_icon.png' style='width:15px;height:15px;'><a href='".$row[6]."' target='_blank'>LINK</a></td>";
				echo "<td style='text-align:center; vertical-align:middle'>" .date("Y. m. d.",strtotime($row[4])) ."</td>";   
				echo "	<td><a href=\"#editfeed\" class=\"edit\" data-toggle=\"modal\"><i class=\"material-icons\" data-toggle=\"tooltip\" title=\"Edit\">&#xE254;</i></a>	</td>";
				echo "</tr>";
			}

?>
                                    </tbody>
                </table>
</div>
            </div>
                </div>				   
                </div>				   
  </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Valóban kijelentkezik?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Ha ki szeretne jelentkezni, válassza a "Kijelentkezés" gombot</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Mégse</button>
                    <a class="btn btn-primary" href="logout.php">Kijelentkezés</a>
                </div>
            </div>
        </div>
    </div>
	
	
	
<style>
.table-fixed thead {
  width: 100%;
}
.table-fixed tbody {
  height: 350px;
  overflow-y: auto;
  width: 200%;
}
.table-fixed thead, .table-fixed tbody, .table-fixed tr, .table-fixed td, .table-fixed th {
  display: block;
}
.table-fixed tbody td, .table-fixed thead > tr> th {
  float: left;
  border-bottom-width: 0;
}
.table-responsive{
	height: 500px;
	
}

.bg-gradient-primaryadmin {
    background-color: #4e73df;
    background-image: linear-gradient(
180deg,#5a5c69 10%,#e74a3b 100%);
    background-size: cover;
}


body {
	color: #566787;
	background: #f5f5f5;
	font-family: 'Varela Round', sans-serif;
	font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	min-width: 1000px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
	padding-bottom: 15px;
	background: #435d7d;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td:last-child i {
	opacity: 0.9;
	font-size: 22px;
	margin: 0 5px;
}
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
	outline: none !important;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.edit {
	color: #FFC107;
}
table.table td a.delete {
	color: #F44336;
}
table.table td i {
	font-size: 19px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
	background: #03A9F4;
}
.pagination li.active a:hover {        
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}    
/* Custom checkbox */
.custom-checkbox {
	position: relative;
}
.custom-checkbox input[type="checkbox"] {    
	opacity: 0;
	position: absolute;
	margin: 5px 0 0 3px;
	z-index: 9;
}
.custom-checkbox label:before{
	width: 18px;
	height: 18px;
}
.custom-checkbox label:before {
	content: '';
	margin-right: 10px;
	display: inline-block;
	vertical-align: text-top;
	background: white;
	border: 1px solid #bbb;
	border-radius: 2px;
	box-sizing: border-box;
	z-index: 2;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	content: '';
	position: absolute;
	left: 6px;
	top: 3px;
	width: 6px;
	height: 11px;
	border: solid #000;
	border-width: 0 3px 3px 0;
	transform: inherit;
	z-index: 3;
	transform: rotateZ(45deg);
}
.custom-checkbox input[type="checkbox"]:checked + label:before {
	border-color: #03A9F4;
	background: #03A9F4;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
	color: #b8b8b8;
	cursor: auto;
	box-shadow: none;
	background: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
	max-width: 1400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 20px 30px;
}
.modal .modal-content {
	border-radius: 3px;
	font-size: 14px;
}
.modal .modal-footer {
	background: #ecf0f1;
	border-radius: 0 0 3px 3px;
}
.modal .modal-title {
	display: inline-block;
}
.modal .form-control {
	border-radius: 2px;
	box-shadow: none;
	border-color: #dddddd;
}
.modal textarea.form-control {
	resize: vertical;
}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}	
.modal form label {
	font-weight: normal;
}	

table {
   width: 100%;
   border-collapse: collapse;
}

.cell-hyphens {
   word-wrap: break-word;
   max-width: 1px;
   -webkit-hyphens: auto; /* iOS 4.2+ */
   -moz-hyphens: auto; /* Firefox 5+ */
   -ms-hyphens: auto; /* IE 10+ */
   hyphens: auto;
}







.bg-gradient-primaryuser {
    background-color: #1cc88a;
    background-image: linear-gradient(
180deg,#1cc88a 10%,#0EB466 100%);
    background-size: cover;
}

body {
    font-family: 'Lato', sans-serif
}

h1 {
    margin-bottom: 40px
}

label {
    color: #333
}

.btn-send {
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    width: 80%;
    margin-left: 3px
}

.help-block.with-errors {
    color: #ff5050;
    margin-top: 5px
}

.card {
    margin-left: 10px;
    margin-right: 10px
}


.label {
  color: white;
  padding: 8px;
}

.success {background-color: #04AA6D;} /* Green */
.info {background-color: #2196F3;} /* Blue */
.warning {background-color: #ff9800;} /* Orange */
.danger {background-color: #f44336;} /* Red */
.other {background-color: #e7e7e7; color: black;} /* Gray */





</style>

	

<!-- The Modal -->
<div id="editfeed" class="modal fade">
<div class="modal-dialog">
<!-- Modal content -->
<div class="modal-content" style="padding:50px;">
    <h2>RSS feed szerkesztése</h2>
    <!-- Form with two input fields and one textarea -->
<form id="editForm" method="post">

    <input type="text" id="id" name="id" hidden>

    <label for="input1">Cím:</label><br>
    <input type="text" id="cim_mod" name="cim_mod" style="width: 750px;"><br><br>
    <label for="input2">Link:</label><br>
    <input type="text" id="link_mod" name="link_mod" style="width: 750px;"><br><br>
   <br><br>
    <button class="btn btn-success" type="button" name="mentes" onclick="submitForm('mentes')">Mentés</button>
    <button class="btn btn-danger" type="button" name="torol" onclick="submitForm('torol')">Törlés</button>

</form>

<script>
    function submitForm(action) {
        // Beállítjuk a form action attribútumát a megfelelő PHP fájlra
        document.getElementById('editForm').action = 'mentett_feed_edit.php?action=' + action;
        // Elküldjük a formot
        document.getElementById('editForm').submit();
    }
</script>
</div>
</div>
</div>

<script>
     var table = document.getElementById("dataTable2"),rIndex;
            
            for(var i = 1; i < table.rows.length; i++)
            {
                table.rows[i].onclick = function()
                {
                    rIndex = this.rowIndex;
                    console.log(rIndex);
					
					document.getElementById("id").value = this.cells[0].innerHTML;

					document.getElementById("cim_mod").value = this.cells[1].innerHTML;
					
					

				};
			}
            

</script>
	
	

	
	
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
	<script src="js/toastr.min.js"></script>

</body>


<?php
}

else{
	
	echo '<script>alert("Lejárt a munkamenet, kérlek jelentkezz be a főoldalon!"); window.location.href = \'index.php\';</script>';
	
}

 ?>


</html>