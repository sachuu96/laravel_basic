<!DOCTYPE html>
<html>
<head>
	<title>Application for candidates to register in to Cybertech Int team</title>
    <link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">
</head>

<style>

body {
    background-color: #e9ebee;
}

.h2 {
	text-align: center;
    font-size: 25px;
	margin-bottom: 0px;
	border: 1px solid #3c3c3c;
    padding: 20px 0 20px 0;
    background-color: #4267b2;
    color: #fff;
    font-family: 'Arima Madurai', cursive;
}

.h3 {
    text-align: left;
    font-size: 20px;
    padding: 0 0 20px 0;
    text-transform: uppercase;
    color: #000;
}

.p {
    text-align: center;
    font-size: 16px;
    padding: 10px 50px 10px 50px;
    line-height: 25px;
    margin-bottom: 15px;
    /*text-transform: uppercase;*/

    /*border: 1px solid black;*/
}

.p-footer {
    text-align: center;
    padding: 20px 0 20px 0;
    margin-top: 20px;
    font-size: 17px;
    color: #fff;
    background-color: #4a4848;
}

.p-footer-a {
    color: #ffd600;
    text-decoration: none;
}

.p-footer-a:hover {
    color: #bda005;
    text-decoration: none;
}

/* Full-width input fields */
input[type=text], input[type=password], input[type=date], textarea {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

input[type=checkbox] {
    /*padding: 255px 20px 20px 20px;*/
    margin: 40px 10px 10px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

.select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

.span {
	color: #ff0000;
}
/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
    margin-left: 10px;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: left;
    width: 45%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

a.default {
    text-decoration: none;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}

.section {
    border:1px solid #ccc;
    padding: 20px 50px 50px 50px;
    margin: 0 200px 0 200px;
}

.martop30 {
    margin-top: 30px;
}

.marbot30 {
    margin-bottom: 30px;
}

.notice-header {
    text-align: left;
    font-size: 21px;
    padding: 0 0 10px 185px;
    text-transform: uppercase;
    color: #7d0808;
}

.notice-frame {
    border:3px solid #a91c1c;
    margin: 40px 75px 20px 75px;
    background-color: rgba(255, 0, 0, 0.15);
}

.notice-body {
    margin: 20px 0 40px 225px;
}

.notice-p {
    color: #000;
    font-size: 16px;
    line-height: 18px;
    font-weight: 600;
}

.notice-span {
    font-style: italic;
    color: #883b3b;
}

.h3-span {
    /* text-align: left; */
    font-size: 15px;
    /* padding: 0px 0px 20px 0; */
    text-transform: none;
    color: #676464;
}

</style>

<body>
<img src="logo.png" style="margin-left:100px; height: 85px; width: auto; position: absolute;" />
<h2 class="h2">Signup Form to register for Cybertech Int team</h2>
<p class="p">Fill all below fields to complete your application. If you have arised any inconvenience please call <a class="default" href="tel:0713399099">071 33 99 0 99</a> or email us your details to <a class="default" href="mailto:lakshitha@classify.lk">Lakshitha@classify.lk</a></p>

<div class="notice-frame">
    <h3 class="notice-header">Vacancies available to apply!</h3>
    <div class="notice-body">

        <p class="notice-p"># Web Developers - <span class="notice-span">Home Based working</span></p>
        <p class="notice-p"># UI/UX Designers - <span class="notice-span">Home Based working</span></p>
        <p class="notice-p"># Marketing Assistants - <span class="notice-span">Home Based working</span></p>
    </div>
</div>

<form id="myForm" action="sendData.php" enctype="multipart/form-data" method="POST">
  <div class="container">
    
    <div class="section">
        <h3 class="h3">Personal details.</h3>
	    <label><b>Name in Full</b> <span class="span">*</span></label>
	    <input type="text" placeholder="Enter your name in full" name="name" required>

	    <label><b>Address</b> <span class="span">*</span></label>
	    <input type="text" placeholder="Enter your Residence Address" name="address" required>

	    <label><b>Email</b> <span class="span">*</span></label>
	    <input type="text" placeholder="Enter your Email address" name="email" required>

	    <label><b>Mobile Number</b> <span class="span">*</span></label>
	    <input type="text" placeholder="Enter your Mobile Number" name="mobileNumber" required>

	    <label><b>Date of Birth</b> <span class="span">*</span></label>
	    <input type="date" placeholder="Enter your Birthday" name="birthday" required>

	    <label><b>NIC Number</b> <span class="span">*</span></label>
	    <input type="text" placeholder="Enter your NIC Number" name="nicNumber" required>

        <label><b>Your CV</b> <span class="span">*</span></label>
        <div style="border:1px solid #ccc; padding: 10px 0 10px 20px; margin-top: 10px; background-color: #ffffff;">
            <input type="file" placeholder="Enter your NIC Number" name="fileToUpload" required> <span class="span">Please note: file size should be below than 2mb</span>
        </div>
	</div>

    <div class="section martop30">
        <h3 class="h3">Professional details.</h3>
        <label><b>what is the position you need to apply?</b> <span class="span">*</span></label>
        <select class="select" name="positionApply" id="positionApply">
            <option value="Web Developer">Web Developer</option>
            <option value="UI/UX Designer">UI/UX Designer</option>
            <option value="Marketing Assistant">Marketing Assistant</option>
        </select>

        <label><b>Previously worked company</b> <span class="span">*</span></label>
        <input type="text" placeholder="Enter the company name that you have been worked at last..." name="lastcompany" required>

        <label><b>Your job tittle</b> <span class="span">*</span></label>
        <input type="text" placeholder="Ex: Marketing Assistant, Software Engineer, UI/UX designer, etc..." name="lasttittle" required>

        <label><b>Monthly salary was</b></label>
        <input type="text" placeholder="Ex: 25000 LKR" name="lastsalary">

        <label><b>Experience in years</b> <span class="span">*</span></label>
        <input type="text" placeholder="Ex: 2 1/2 years, etc..." name="experience" required>

        <label><b>Areas you're expertise with</b></label>
        <textarea placeholder="Ex: Sales & marketing, PHP, Bootstrap, etc..." name="notes" rows="7"></textarea>
    </div>

    <div class="section martop30">
        <h3 class="h3">Account details. <span class="h3-span">(All payments will be deposited to this account)</span></h3>
	    <label><b>Bank Account Number</b> <span class="span">*</span></label>
	    <input type="text" placeholder="Enter your Account Number" name="accNumber" required>

	    <label><b>Account Holder's Name</b> <span class="span">*</span></label>
	    <input type="text" placeholder="Enter Account holder's Name" name="accName" required>

	    <label><b>Bank Name</b> <span class="span">*</span></label>
	    <input type="text" placeholder="Enter Bank Name" name="bankName" required>

	    <label><b>Branch</b> <span class="span">*</span></label>
	    <input type="text" placeholder="Enter your Branch" name="branch" required>

        <input type="checkbox" name="agreement" id="agreement" required><label for="agreement">By clicking "Submit" you agree to our Terms of Use and Privacy Policy also acknowledge that data you provide are correct & accurate.</label>
	
    <div class="clearfix" style="width: 30%; padding-left: 65%; margin-top: 30px;">
        <button type="submit" class="signupbtn">Submit</button>
        <button type="button" class="cancelbtn" onclick="myFunction()">Reset</button>
    </div>

    </div>
  </div>

  <footer>
      <div>
            <p class="p-footer">
                Copyright &copy; 2016-<?php echo date("Y");?>. Powered by <a class="p-footer-a" href="http://www.cybertechint.lk" target="_blank">Cybertech Int</a> team.
            </p>
      </div>
  </footer>
</form>

</body>

<script>
    function myFunction() {
        document.getElementById("myForm").reset();
    }
</script>

</html>
