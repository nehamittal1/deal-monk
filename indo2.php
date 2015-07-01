<!Doctype html>
<html>
<head>
<style>
.left-addon .glyphicon{ left:  0px;}

.inner-addon .glyphicon {
  position: absolute;
  padding: 19px;
  margin-top:1px;
   
  
}
.inner-addon1 .glyphicon {
  position: absolute;
  padding: 19px;
   margin-top:1px;
   
}
.inner-addon2 .glyphicon {
  position: absolute;
  padding: 19px;
   margin-top:5px;
  
   
}

.height
{
 margin-top: -.4cm;
 padding:10px
}

input[placeholder] {
    font-size: 25px;
	text-indent:30px;
	
}
.glyphicon {
    font-size: 28px;
}
.form-group{margin-top:.5cm;}


</style>

<link type="text/css" href="bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet" /></head>
<body>
<div class ="container">
 
<div class="row">
            <hr style="width: 100%; color: black; height: 2px; background-color:black;" />
			 <h2 class="text-center black-text height"> <b>Contact Us</b></h2>
			 <hr style="width: 100%; color: black; height: 2px; background-color:black;" />
            </div>
			
			
				
		<div class="row">	
		<div class="col-md-6">
               <h4 > <b>Think and act #SocialFirst to amplify revenues. </b></h4>
               
			   <br>
			   <h4><b>Let's get started.  </b><h4>
			   
                   <h4><b> Reach out to us now and we will be in touch soon! </b></h4>
				   <br>
				   
            </div>	
			</div>
			
			
			
		<form action="sendmessage.php" method="post" class="form-horizontal" data-toggle="validator" id="contact-form">
    <input type="hidden" value="dealmonkapp@gmail.com" name="send_to" />
    <input type="hidden" value="http://dealmonk.co.uk/" name="send_from" />
    <input type="hidden" value="index.php" name="redirect" />
    <input type="hidden" value="Contact Form Submission" name="subject" />
    

		
		<div class="row">
		<div class="col-md-6">
		<div class="row">
		<div class="col-md-6">
		<div class=" form-group">
		
    <input type="text" class=" form-control input-lg" style="background-color:lavender;" id="FirstName" placeholder="  First Name">
	     </div>
		 </div>
		 
      <div class="col-md-6">
		<div class="form-group">
		 
		
    <input type="text" class=" form-control input-lg" style="background-color:lavender;" id="LastName" placeholder="   Last Name">
  </div>
  </div>
  </div>
  
  
  

 
 <div class="row">
  <div class="col-md-12">
  <div class="form-group">
   
   
    <input type="text" class="form-control input-lg"  style="background-color:lavender;" id="Company" placeholder= " &nbsp &nbsp Company">
  </div>
  </div>
  
 
  </div>
  
 
  <div class="row" id="margin">
  <div class="col-md-12">
  <div class="form-group inner-addon left-addon"> 
   
   
    <i class="glyphicon glyphicon-envelope"></i><input type="email" class="form-control input-lg"  style="background-color:lavender;" id="InputEmail" placeholder= " &nbsp &nbsp  Email Address">
  </div>
  </div>
  </div>
  
<div class="row" id="margin">

   <div class="col-md-12">
  <div class="form-group inner-addon1 left-addon">
    <i class="glyphicon glyphicon-earphone"></i><input type="text" class="form-control input-lg"  style="background-color:lavender;" id="PhoneNumber" placeholder="&nbsp &nbsp  PhoneNumber">
  </div>
  </div>
  </div>
  
  
 
  
  <div class="row" id="margin">
   <div class="col-md-12">
   
   <div class="form-group inner-addon2 left-addon">
   <i class="glyphicon glyphicon-pencil"></i> 
   <textarea  rows="4" cols="50" class=" form-control"  style="background-color:lavender;" id="PhoneNumber" placeholder="&nbsp &nbsp "></textarea>
  
  </div>
  </div>
  </div>
  <br>
  <div class="row" id="margin">
  <div class="col-md-12">
  <div class="height">
  <button type="submit"  class="form-control btn btn-info active" >Send</button>
 </div>
  
  </div>
  <?php
                        if(isset($_GET['formsubmit'])) {

                        // if the form has been submitted
                       echo "<p> <center>Your query has been submitted.</center> </p>";
} 
                         ?>
  
  </div>
  </div>
  <div class="col-md-2">
  </div>
  
  <div class="col-md-4">
   We would love to hear from you!
		 <br>

Email - contactus@dealmonk.co.uk
<br>
Phone No.- +447741870099 (UK) <br>
          &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp +918527238292 (India)
  </div>
  
   </div>

  
</form>	

</body>
</html>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			