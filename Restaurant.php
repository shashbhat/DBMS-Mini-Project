<!DOCTYPE html>
<html lang="en">
<head>
<title>Let's Go</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="DBMS Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
</head>

<body>
    
  
<div class="super_container">
	
	<!-- Header -->

	<header class="header">

	

    <div style="width:100% margin:0px;">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:purple;">
<!--                        <a class="navbar-brand" href="#"><i class="fas fa-plus-square"></i> PMS</a>-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
	</header>

	

	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			
			

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@anikindimitry -->
					<div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
                            
                            
                            
                            
<!--                            main body goes here -->
                            
   
    <div class="container mt-2" style="background-color:#e9e9e9;padding:20px;border-radius:5px">
        <div class="row">
            <div class="col-md-12">
                <a href='restinsert.html' class='btn btn-primary' style="float:left" >Insert</a>
            </div>
                <?php
    $con=mysqli_connect("localhost","root","","tours");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $result = mysqli_query($con,"SELECT * FROM rest");
       
           echo "<div class='container' style='padding:5px;background-color:white;margin-top:30px;'>";
     echo "<table  id='rest-tab' class='table table-light table-hover'><thead class='thead-light'><tr><th>Image</th><th>Name</th><th>Price</th><th>Location</th><th>ID</th><th>Delete</th><th>Edit</th><th>Reserve</th></tr></thead><tbody>";
    while($row = mysqli_fetch_array($result))
      {
      echo "<tr><td><img src=".$row['Image']. " height='64' width='64'></td><td>".$row['Name'] . "</td><td> " . $row['Price']. "</td><td> " . $row['Location']. "</td><td> " .$row['Id']."</td><td><a href='restdelete.php?Id=".$row['Id']."'>Delete<i class='fa fa-trash '></i></a></td><td><a href='restedit.html'>Edit</a></td><td><a href='#book'>Reserve</a></td></tr>"; //these are the fields that you have stored in your database table employee
     
      
      }
                echo "</tbody></table>";
                echo "</div>";

    mysqli_close($con);
    ?>
                
            </div>
        </div>
    </div>
                        </div>
                        </div>
            </div>	
		</div>

	</div>
    
    
    
<!--    Search   -->
    
<div class="search">
		<a id="book"></a>

		<!-- Search Contents -->
		
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="col fill_height">

				

					<!-- Search Panel -->

					<div class="search_panel active">
						<form action="#" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							
							<div class="search_item">
								<div>Date</div>
								<select name="adults" id="adults_1" class="dropdown_item_select search_input">
									<option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option><option>07</option><option>08</option><option>09</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>
								
                                    
								</select>
							</div>
                    
							
							<div class="search_item">
								<div>Seats</div>
								<select name="adults" id="adults_1" class="dropdown_item_select search_input">
									<option>01</option>
									<option>02</option>
									<option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
								</select>
							</div>
							
                           
                           <button class="button search_button" onclick="doThis()">Reserve<span></span><span></span><span></span></button>
                               
						</form>
					</div>
                    
                    		</div>
			</div>
		</div>		
	</div>


		

		
	
	
	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
                
                
                

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_content footer_about">
							<div class="logo_container footer_logo">
								<div class="logo"><a href="#"><img src="images/logo.png" alt="">Travel Made Easy</a></div>
							</div>
							<p class="footer_about_text">Travel makes one modest, you see what a tiny place you occupy in the world. One's destination is never a place,but a new way of seeing things.</p>
							
						</div>
					</div>
				</div>

			

				

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
                        <a id="contacts"></a>
						<div class="footer_title">Contact Info</div>
						<div class="footer_content footer_contact">
							<ul class="contact_info_list">
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
									<div class="contact_info_text">Rahul</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
									<div class="contact_info_text">9449721546</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">rahul9449766@gmail.com</a></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="https://colorlib.com">www.travelmadeeasy.com</a></div>
								</li>
							</ul>
						</div>
					</div>
				</div>

                
                
                
                
				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
                        <a id="contacts"></a>
						<div class="footer_title">Contact Info</div>
						<div class="footer_content footer_contact">
							<ul class="contact_info_list">
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
									<div class="contact_info_text">Shashank</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
									<div class="contact_info_text">9845971458</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">shashank.kakunje@gmail.com</a></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="https://colorlib.com">www.travelmadeeasy.com</a></div>
								</li>
							</ul>
						</div>
					</div>
				</div>
                
                
                
                
                
                
			</div>
		</div>
	</footer>

</div>

    


  
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script>
            $('#rest-tab').DataTable({
             "lengthMenu": [[5,-1], [5]],
        });
        function doThis(){
            alert('Reservation Successful');
        }
    </script>

</body>

</html>