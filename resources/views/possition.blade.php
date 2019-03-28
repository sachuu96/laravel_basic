

<!DOCTYPE html>
<html>
<head>
    <title>Create Possitions</title>
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
<h2 class="h2">Admin Page</h2>
<div class="notice-frame">
    <a href="http://127.0.0.1:8000/home">BACK</a>
</div>
<form id="myForm2" action="possition/create" method="POST"><!--action="sendData.php"-->
  <div class="container">
    {!! csrf_field()!!}
    <div class="section">
        <h3 class="h3">Create Possitions</h3>
        <label><b>Possition Name</b> <span class="span">*</span></label>
        <input type="text" placeholder="Enter possition name" name="pname" required>

        <label><b>Possition Type</b> <span class="span">*</span></label>
        <input type="text" placeholder="Enter possition type" name="ptype" required>

        <label><b>Description</b></label>
        <textarea placeholder="Ex: enter description" name="desc" rows="7"></textarea>

        <label><b>Status</b> <span class="span">*</span></label>
        <select class="select" name="status" id="status">
            <option value="1">Activated</option>
            <option value="0">Deactivated</option>
        </select>
    </div>


    <div class="section martop30">
  <!--  <div class="clearfix" style="width: 30%; padding-left: 65%; margin-top: 30px;">-->
        <button type="submit" class="signupbtn">Submit</button>
        <button type="button" class="cancelbtn" onclick="myFunction()">Reset</button>
   <!-- </div>-->
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


