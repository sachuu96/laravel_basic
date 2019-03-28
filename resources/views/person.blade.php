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
<h2 class="h2">View/Edit Participants</h2>

<div class="notice-frame">
    <a href="http://127.0.0.1:8000/home">BACK</a>
</div>

<form id="myForm" action="person" enctype="multipart/form-data" method="get"><!--action="sendData.php"-->
  <div class="container">
    {!! csrf_field()!!}
    <div class="section">
        <h3 class="h3">Admin Form</h3>
        <label><b>Status</b> <span class="span">*</span></label>
        <select class="select" name="status" id="status">
            <option value="selected">Selected</option> 
            <option value="rejected">Rejected</option> 
            <option value="pending">Pending</option> 
        </select>

        <button type="submit" class="signupbtn">View</button>
    </div>

   <!-- <div class="section">-->
        <table border="1">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>CV</th>
                <th>Address</th>
                <th>Email</th>
                <th>Possition to Apply</th>
                <th>Expert Year</th>
                <th>Mobile</th>
                <th>NIC</th>
                <th>DOB</th>
                <th>Account Number</th>
                <th>Acoount Name</th>
                <th>Branch</th>
                <th>Bank</th>
                <th>Last Possition Name</th>
                <th>Last Company Name</th>
                <th>Last Salary</th>
                <th>Exprt Area</th>
                <th>Share Via Email</th>
                <th>Status</th>
                <th>Action</th>
                <th>Download</th>                
            </tr>
            @foreach($data as $value)
            <tr>
                <form action="person/share" method="post">
                     {{csrf_field()}}
                    <td>
                        <input type="text" name="fname" value="{{$value->fname}}" disabled="true">
                    </td>
                    <td>
                        <input type="text" name="lname" value="{{$value->lname}}" disabled="true">
                    </td>
                    <td>
                        <input type="text" name="cv" value="{{$value->cv}}" disabled="true">
                        
                    </td>
                    <td>
                        <input type="text" name="address" value="{{$value->address}}" disabled="true">
                        
                    </td>
                    <td>
                        <input type="text" name="email" value=" {{$value->email}}" disabled="true">
                       
                    </td>
                    <td>
                        <input type="text" name="apply_possition" value="{{$value->apply_possition}}" disabled="true">
                        
                    </td>
                    <td>
                        <input type="text" name="exprt_yrs" value="{{$value->exprt_yrs}}" disabled="true">
                        
                    </td>
                    <td>
                        <input type="text" name="mobile_number" value="{{$value->mobile_number}}" disabled="true">
                        
                    </td>
                    <td>
                        <input type="text" name="nic" value="{{$value->nic}}" disabled="true">
                        
                    </td>
                    <td>
                        <input type="text" name="dob" value="{{$value->dob}}" disabled="true">
                        
                    </td>
                    <td>
                        <input type="text" name="acc_number" value="{{$value->acc_number}}" disabled="true">
                        
                    </td>
                    <td>
                        <input type="text" name="acc_name" value="{{$value->acc_name}}" disabled="true">
                        
                    </td>
                    <td>
                        <input type="text" name="branch" value="{{$value->branch}}" disabled="true">
                        
                    </td>
                    <td>
                        <input type="text" name="bank" value="{{$value->bank}}" disabled="true">
                        
                    </td>
                    <td>
                    <input type="text" name="last_possition_name" value="{{$value->last_possition_name}}" disabled="true">
                        
                    </td>
                    <td>
                        <input type="text" name="last_company_name" value="{{$value->last_company_name}}" disabled="true">
                        
                    </td>
                    <td>
                        <input type="text" name="last_salary" value="{{$value->last_salary}}" disabled="true">
                        
                    </td>
                    <td>
                        <input type="text" name="exprt_areas" value="{{$value->exprt_areas}}" disabled="true">
                        
                    </td>
                    <td>
                        <button type="submit">Share</button>
                    </td>
                </form>
                    <form method="post" action="person/edit">
                        {{csrf_field()}}
                        <td>
                            <select class="select" name="status" id="status">
                                <option value="selected">Selected</option> 
                                <option value="rejected">Rejected</option>
                            </select>
                            <input type="hidden" name="uid" value="{{$value->id}}">
                        </td>

                        <td>
                            <button type="submit">Submit</button>
                        </td>
                    </form>
                    <td>
                        <a href="upload/{{$value->cv_real_name}}" download="{{$value->cv_real_name}}">
                            DOWNLOAD
                        </a>
                    </td>
            </tr>
             @endforeach
        </table> 
           
   <!-- </div>-->
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


