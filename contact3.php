<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <style>
        *{
margin:0;
padding:0;
font-family: 'Josefin Sans', sans-serif;
box-sizing: border-box;
}

body{
    line-height :1.5;
    font-size: 15px;
    font-family: 'Poppins', sans-serif;
}
.container{
    width: 80%;
    margin: 100px auto;

}
.contact-box{
    background-color: burlywood;
    display: flex;
}
.contact-left{
    flex-basis: 60%;
    padding: 40px 60px;
}
.contact-right{
    flex-basis: 40%;
    padding: 40px;
    background-color: skyblue;
    color: white;
}
.input-row{
    margin-bottom: 20px;
    display: flex;
    justify-content: space-between;
}
.input-group{
    flex-basis: 45%;
}
input{
    width: 100%;
    border: none;
    border-bottom: 1px solid black;
    padding-bottom: 5px;
    outline:none;
}
textarea{
    width: 100%;
    padding-bottom: 10px;
    box-sizing: border-box;
    
}
label{
    margin-bottom: 6px;
    display: block;
    color: black;
}
button{
    background-color: blue;
    width: 20%;
    border: none;
    outline: none;
    color:white;
    height: 30px;
    border-radius: 30px;
    margin-top: 20px;
    box-shadow: 0px 5px 15px 0px  grey;
    
}
.contact-left h3{
    color: black;
    font-weight: 600;
    margin-bottom: 30px;
}

.contact-right h3{
    color: black;
    font-weight: 600;
    margin-bottom: 30px;
}

tr td:first-child{
    padding-right: 20px;
}
tr td{
    padding-top: 20px;
}
.footer{
    background-color: burlywood;
    padding: 70px 0;
    width: 100%;
    height: 80%;
}
.row{
    display: flex; 
    flex-wrap: wrap;
}
ul{
    list-style: none;
}
.footer-col{
    width: 25%;
    padding: 0 15px;
    text-align: center;
	background-color:black
}
.footer-col h1{
    font-size: 30px;
    color: white;
    margin-bottom: 35px;
    text-transform: capitalize;
    text-align: center;
    font-weight: 500;
    position: relative;
    background-color: red;
}
.footer-col h1:before{
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    background-color: deeppink;
    height: 4px;
    box-sizing: border-box;
    width: 90px; 
}
.footer-col ul li{
    margin-bottom: 10px;
} 
.footer-col ul li a{
    font-size: 16px;
    color:aqua;
    text-decoration: none;
}
.footer-col ul li a:hover{
    color:aqua;
    padding-left: 8px;
}
.footer-col .social-links a{
    display: inline-block;
    height: 40px;
    width: 40px;
    background-color:azure;
    margin-right:10px;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    transition: all 0.5s ease;
}
.footer-col .social-links a :hover{
    color:red;
    background-color: white;
}
/*responsive*/
@media(max-width:767px){
    .footer-col{
        width: 50%;
        margin-bottom: 30px; 
    }

@media(max-width:574px){
    .footer-col{
        width: 100%;
        margin-bottom: 30px; 
    }    
}
}
</style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><!--Navbar-->My School</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index1.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact2.php">forms</a>
        </li>
        <!--<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>-->

        <li class="nav-item">
          <a class="nav-link" href="gallery.html">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="facilities.html">Facilities</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="about.html">About us</a>
		  
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
        <div class="container">
          <h1 style="text-align:center">Contact us</h1>
            <p></p>
            <div class="contact-box">
                <div class="contact-left">
                      <h3>Sent your request</h3>
                    <form class="form-signin" action="contact3.php" method="POST">
                    
                        <div class="input-row">
                            <div class="input-group">
                                <label>Name</label>
                                <input type="text" id="name" class="form-control" name="name" placeholder="Enter your name">
                        </div>
                        
                        <div class="input-group">
                            <label>Phone no.</label>
                            <input type="number" id="phone_no" class="form-control" name="phone_no" placeholder="Enter your phone_no">
                        </div>
                        </div>
                        
                        <div class="input-row">
                            <div class="input-group">
                                <label>Email</label>
                                <input type="email" id="email" class="form-control" name="email" placeholder="Enter your email">
                        </div>
                    
                            <div class="input-group">
                                <label>Class</label>
                                <input type="text" id="class" class="form-control" name="class" placeholder="Enter your class">
                            </div>
                        </div>
                    
                    <label>Message</label>
                        <textarea rows="6" id="message" name="message" placeholder="Your Message"></textarea>
                        
                        

                        <input type="submit" class="btn btn-lg btn-primary btn-block" name="submit" value="submit"> </input>
                    </form>
                 </div>
            <div class="contact-right">
                <h3>Our Details</h3>
                <table>
                    <tr>
                        <td>Email</td>
                        <td>reema12@gmail.com</td>
                    </tr>
                    
                    <tr>
                        <td>Phone no</td>
                        <td>9987657830</td>
                    </tr>
                    
                    </table>
            </div>
            </div>
        </div>
        	<!--footer-->
<section class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                <h1>About us</h1>
                <ul>
                <li><a href="about.html">About School</a></li>
				<li><a href="about.html">History</a></li>
                    <li><a href="about.html">Founder's Message</a></li>
                    <li><a href="about.html">Principal's Mesage</a></li>
                </ul>
            </div>
			
                <div class="footer-col">
                <h1>Academics</h1>
                <ul>
                <li><a href="facilities.html">Admission Procedure</a></li>
                <li><a href="facilities.html">Lab Facilities</a></li>
                <li><a href="facilities.html">Sports Corner</a></li>
                <li><a href="facilities.html">Library</a></li>
                <li><a href="facilities.html">Transport Facility</a></li>
                <li><a href="facilities.html">Activities</a></li>
                </ul>
            </div>
			<div class="footer-col">
                <h1>Contact Us</h1>
                <ul>
                    <li><a href="#"><i class="fas fa-location-arrow"></i>Pratap Singh Wala,Ludhiana 141001 Punjab India

 <br><i class="fas fa-phone"></i>Phone:-
+91-161-2970656

<br> <i class="far fa-envelope"></i>Email:-
saraswatimodernschoolpsw@gmail.com

</a></li>
                </ul>
            </div>
            
                <div class="footer-col">
                <h1>Follow Us</h1>
                <div class="social-links">
                   <a href="https://www.facebook.com/pages/category/High-School/Saraswati-Modern-Sen-Sec-School-302288506837644/"> <i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
                
          </div>
        </div>
    </section>

    </body>
</html>
<!--php-->
<?php
include('db.php');

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $class=$_POST['class'];
    $phone_no=$_POST['phone_no'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    
    $query=mysqli_query($conn,"insert into contact(name,class,phone_no,email,message)values('$name','$class','$phone_no', '$email','$message')");
   // var_dump($query);
    if($query){
        echo "<script>alert('we will contact you shortly')</script>";
        //header('location:index.html');
    }
    else{
        echo "<script>alert('some error occured')</script>";
    }
}







?>