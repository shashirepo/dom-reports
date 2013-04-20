<script src="jquery.js"></script>
<script>
$(document).ready(function(){ 
  $("#dropdown").change(function(){
  dropdown = $('#dropdown').val();
   if(dropdown==5)
   {
     $("#text").html("Enter the Date.");
	 
	  $(".message1").fadeIn("slow");
	   $("#emtext").html("Enter the Date In Format yyyy-mm-dd Example 2013-11-11").fadeIn("slow");
	
   }
    if(dropdown==0)
   {
     $("#text").html("Enter the  Student ID:");
	 
	  $(".message1").fadeIn("slow");
	$("#emtext").html("Its an Integer Number Example:5").fadeIn("slow");
	
   }
   else if(dropdown==4)
   {
      $("#text").html("Enter the Room NO.");
	  $(".message1").fadeIn("slow");
	  $("#emtext").html("Its an Integer Number Example:5").fadeIn("slow");
   }
   else if(dropdown==3)
   {
    $("#text").html("Enter the Level");
	  $(".message1").fadeIn("slow");   
	    $("#emtext").html("Its an Integer Number Example:5").fadeIn("slow");
   }
   else if(dropdown==6)
   {
    $("#text").html("Enter the Circumstances");
	  $(".message1").fadeIn("slow");   
	    $("#emtext").html("Its an String Example:xyz").fadeIn("slow");
   }
   else if(dropdown==7)
   {
    $("#text").html("Enter the No. of Days");
	  $(".message1").fadeIn("slow");   
	    $("#emtext").html("Its an Integer Number Example: Last 30 days").fadeIn("slow");
   }
   else if(dropdown==8)
   {
    $("#text").html("Enter the Student ID:");
	  $(".message1").fadeIn("slow");   
	    $("#emtext").html("Its an Integer Number Example:5").fadeIn("slow");
   }
   else if(dropdown==11)
   {
    $("#text").html("Enter the Gaurdian ID");
	  $(".message1").fadeIn("slow");   
	    $("#emtext").html("Its an Integer Number Example:5").fadeIn("slow");
   }
   else
   {
      $(".message1").fadeOut("slow");
   }
  });
  
});
</script>

<style>
.message1,#emtext {
    display: none;
}
</style>
<body>
<h2>Choose The Report You Want to generate</h2>
<form action="index.php" method="post" name="form"><select name="report" id=dropdown><option value="-1"><----Select Report to Generate----></option><option value="0">Particular Student Report</option><option value="1">  Student Address book</option><option value="2"> Student Phone list</option><option value="3"> Student by  level</option><option value="4">Student by room</option><option value="5">Student attendance by Date</option><option value="6"> Student  by Circumstance</option><option value="7">Student attendance by days</option><option value="8">Emergency Contact for the student</option><option value="9"> Allergies and Medication</option><option value="10">All Gaurdian Report</option><option value="11" >Particular Gardian</option></select>
<br><br><div class="message1"><p id=text>Give the Date:</p><input type=text name=date></div><em id=emtext> the Format Should be: yyyy-mm-dd example: 2012-12-12</em>
 <p><input type="submit" class="submit" name="createpdf" value="Generate Report" />
 
<?php
if(isset($_GET['err']))
	   echo "<font color=red>You must Select Atleast One report to generate"; ?>

</form>
</body>