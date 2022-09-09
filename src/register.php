<html lang="en"><head>
    <meta charset="utf-8">
    
       
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./styles/css/bootstrap.min.css">
       <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.min.css" type="text/css">
    <noscript><meta http-equiv="refresh" content="0; URL=javascript.php"/></noscript>
    <script src="./scripts/js/jquery.min.js"></script>
    <script src="./scripts/js/popper.min.js"></script>
    <script src="./scripts/js/bootstrap.min.js"></script>
    <script src="./scripts/js/validator.min.js"></script>
    <script src="./scripts/js/form.js"></script>
    <script type="text/javascript">
        document.addEventListener("contextmenu", function(e){
            e.preventDefault();
            }, false);
        window.addEventListener('keydown',function(e){if(e.keyIdentifier=='U+000A'||e.keyIdentifier=='Enter'||e.keyCode==13){if(e.target.nodeName=='INPUT'&&e.target.type=='text'){e.preventDefault();return false;}}},true);
    </script>
    <style type="text/css">
         .control-label:after {
              content:"*";
              color:red;
        }
    </style>
    
</head>
<body>
                <a href="index.html"> <img src="download.png" class="mx-auto d-block"></a>
                <h1 class="text-center mt-3 text-primary">Govt. Engineering College, Bikaner</h1>
                <h6 class="text-center mb-1 mt-3">Online Application Portal</h6>


    <div class="container py-0">
        <div class="row">
        <div class="col-md-12">
            
            <hr class="mb-1">
        </div>
        </div>
    </div><style type="text/css">
.errorstyle {
width: 100%;
color: red;
float: left;
background: #fff;
}

.tooltip-inner {
background-color: #fff;
color: #000;
border: 1px solid #000;
}

input[type=submit] {
width: 8em;
height: 2em;
}

</style>        

<div class="container">
<div class="row justify-content-center">
    <div class="col-md-8">
                



        <div class="card">
            <header class="card-header">
                <a href="login.php" class="float-right btn btn-outline-primary mt-0">Log in</a>
                <h4 class="card-title mt-0">Registration Form</h4>
            </header>
            <article class="card-body">
                <form action="form.php" name="register" method="post">
                    <div class="form-row">
                        <div class="col form-group col-md-4">
                            <span class="label label-default">Applicant's Name<font color="#FF0000">*</font>
                                :</span>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div>
                                <input type="text" class="form-control" maxlength="45" required="" style="text-transform: uppercase" id="CandidateName" name="CandidateName" placeholder="Applicant Name" value="" data-original-title="" title="">
                            </div>
                        </div> <!-- form-group end.// -->
                        <div class="form-group col-md-4">
                            <span class="label label-default">Father's Name<font color="#FF0000">*</font> :</span>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user-secret"></i></span></div>
                                <input type="text" class="form-control" maxlength="45" style="text-transform: uppercase" id="FatherName" name="FatherName" placeholder="Father Name" value="" required="" data-original-title="" title="">
                            </div>
                        </div> <!-- form-group end.// -->
                        <div class="form-group col-md-4">
                            <span class="label label-default">Mother's Name<font color="#FF0000">*</font> :</span>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user-o"></i></span></div>
                                <input type="text" class="form-control" maxlength="45" style="text-transform: uppercase" id="MotherName" name="MotherName" placeholder="Mother Name" value="" required="" data-original-title="" title="">
                            </div>
                        </div> <!-- form-group end.// -->
                    </div> <!-- form-row end.// -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <span class="label label-default">Gender<font color="#FF0000">*</font> :</span>
                            <center>
                            <input class="form-check-input" type="radio" name="Gender" id="Gender1" value="Male" data-original-title="" title=""> Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="Gender" id="Gender2" value="Female" data-original-title="" title=""> Female                                </center>
                        </div> <!-- form-group end.// -->
                        <div class="form-group col-md-6">
                            <span class="label label-default">Date of Birth <font color="#FF0000">*</font> :</span>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-calendar"></i></span></div>
                                <select name="dobdd" id="dobdd" class="form-control" size="0" required="">
                                    <option value="">Day</option>
                                    <option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>                                    </select>
                                <select name="dobmm" id="dobmm" class="form-control" size="0" required="">
                                    <option value="">Month</option>
                                    <option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>                                    </select>

                                <select name="dobyy" id="dobyy" class="form-control" size="0" required="">
                                    <option value="">Year</option>
                                    <option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option>                                    </select>
                            </div>
                        </div> <!-- form-group end.// -->
                    </div> <!-- form-row.// -->

                    <div class="form-row">
                        <div class="col form-group">
                            <span class="label label-default">Mobile No.<font color="#FF0000">*</font> : </span>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone"></i></span></div>
                                <input type="text" class="form-control" id="Mobile" maxlength="10" minlength="10" name="Mobile" placeholder="Mobile No." value="" required="" data-original-title="" title="">
                                <div class="input-group-append">
                              
                   
                                </div>
                                <div class="success"></div>

                            </div>
                            <div id="mobile_response" class="response"></div>
                        </div> <!-- form-group end.// -->

                        <div class="col form-group">
                            <span class="label label-default">Email Address <font color="#FF0000">*</font> :</span>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope"></i></span></div>
                                <input type="text" class="form-control" style="text-transform: lowercase" maxlength="50" id="Email" name="Email" placeholder="Email Address" value="" required="" data-original-title="" title="">

                            </div>
                            <div id="email_response" class="response"></div>
                        </div> <!-- form-group end.// -->
                    </div> <!-- form-row end.// -->
                    <div class="form-row">
                        <div class="col form-group">
                            <span class="label label-default">Username<font color="#FF0000">*</font> : </span>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div>
                                <input type="text" minlength="6" maxlength="30" title="" class="form-control" id="UserName" name="UserName" placeholder="Username" value="" required="" data-original-title="Username should be between 6 to 30 characters. Please Use Only Alphabets, Digits or (@, _, .)">
                            </div>
                            <div id="uname_response" class="response"></div>
                        </div> <!-- form-group end.// -->
                        <div class="col form-group">
                            <span class="label label-default">Password<font color="#FF0000">*</font> :</span>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-lock"></i></span></div>
                                <input type="password" required="" minlength="7" maxlength="15" title="" class="form-control" id="Password1" name="Password1" placeholder="Password" value="" data-original-title="Password should be between 7 to 15 characters and must contain at least one numeric digit and one special character">
                            </div>
                        </div> <!-- form-group end.// -->
                        <div class="col form-group">
                            <span class="label label-default">Confirm Password<font color="#FF0000">*</font>
                                :</span>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-repeat"></i></span></div>
                                <input type="password" required="" minlength="7" maxlength="15" class="form-control" id="Password2" name="Password2" placeholder="Confirm Password" value="" data-original-title="" title="">
                            </div>
                        </div> <!-- form-group end.// -->
                    </div> <!-- form-row end.// -->
                    <div class="form-row">
                        <div class="col-sm-12 pb-1">
                            <center>
                                <p align="center"> <input name="Submit" id="Submit" type="submit" value="Register →" class="button1" data-original-title="" title="">
                                </p>
                            </center>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-2 pb-1">
                        </div>
                        <div class="col-sm-8 pb-1">
                                                                                                                                                
            </div></div></form></article> <!-- card-body end .// -->
            <div class="border-top card-body text-center">Have an account? <a href="login.php">Log In</a></div>
        </div> <!-- card.// -->
    </div> <!-- col.//-->

</div> <!-- row.//-->

</div>
<!--container end.//-->
<br>

<div class="container py-9">
        <div class="row">		
            <div class="col-md-12">
                <hr class="mb-2">
                
            </div>
        </div>
</div>


<!-- <script src="./scripts/js/validateregister.js"></script>
<script src="./scripts/enc/cryptojs-aes.min.js"></script>
<script src="./scripts/enc/cryptojs-aes-format.js"></script>
<script type="text/javascript" language="javascript">
    function SubmitForm(){
        var tf=validateRegister(event);
        if(tf==true)
        {
            var pw1 = document.getElementById('Password1').value;
            var pw2 = document.getElementById('Password2').value;
            var Salt = '1006276020'
            let encrypted1 = CryptoJSAesJson.encrypt(pw1, Salt);
            let encrypted2 = CryptoJSAesJson.encrypt(pw2, Salt);
            document.getElementById('Password1').value=encrypted1;
            document.getElementById('Password2').value=encrypted2;
            return true;
        }
        else
        {
            return false;
        }
}

document.addEventListener('DOMContentLoaded', function () {
document.getElementById('Submit')
.addEventListener('click', SubmitForm);
}); -->

</script></body></html>