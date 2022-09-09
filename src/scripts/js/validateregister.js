// Registratin Validataion

function validateRegister(event) {
    var candidatename = document.forms["register"]["CandidateName"].value.trim();
    var fathername = document.forms["register"]["FatherName"].value.trim();
    var mothername = document.forms["register"]["MotherName"].value.trim();
    var dob = document.forms["register"]["dobdd"].value + "-" + document.forms["register"]["dobmm"].value + "-" + document.forms["register"]["dobyy"].value;
    //alert(dob);
    var mob = document.forms["register"]["Mobile"].value.trim();
    var email = document.forms["register"]["Email"].value.trim();
    var username = document.forms["register"]["UserName"].value.trim();
    var pass1 = document.forms["register"]["Password1"].value.trim();
    var pass2 = document.forms["register"]["Password2"].value.trim();
    var captcha = document.forms["register"]["captcha_code"].value.trim();
    var alpha = /^[a-zA-Z.]+( [a-zA-z.]+)*$/;

    var mobregex = /^\d{10}$/;
    var emailregex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var usernameregex = /^[a-zA-Z0-9\.@_]+$/;

    if(captcha.length<6)
    {
        event.preventDefault();
        alert('Please enter Captcha Code');
        document.forms["register"]["captcha_code"].focus();
        return false;
    }
    if (!alpha.test(candidatename)) {
        event.preventDefault();
        alert('Please enter only alphabets in the Candidate name');
        document.forms["register"]["CandidateName"].focus();
        return false;
    }

    if (!alpha.test(fathername)) {
        event.preventDefault();
        alert('Please enter only alphabets in the Father name');
        document.forms["register"]["FatherName"].focus();
        return false;
    }

    if (!alpha.test(mothername)) {
        alert('Please enter only alphabets in the Mother name');
        document.forms["register"]["MotherName"].focus();
        return false;
    }

    if (document.getElementById('Gender1').checked == false && document.getElementById('Gender2').checked == false) {
        event.preventDefault();
        alert('Please select gender ');
        document.forms["register"]["Gender1"].focus();
        return false;
    }

    if (document.forms["register"]["dobdd"].selectedIndex == 0) {
        event.preventDefault();
        alert('Please select day of birth');
        document.forms["register"]["dobdd"].focus();
        return false;
    } else if (document.forms["register"]["dobmm"].selectedIndex == 0) {
        event.preventDefault();
        alert('Please select month of birth');
        document.forms["register"]["dobmm"].focus();
        return false;
    } else if (document.forms["register"]["dobyy"].selectedIndex == 0) {
        event.preventDefault();
        alert('Please select year of birth');
        document.forms["register"]["dobyy"].focus();
        return false;
    } else {
        var dateformat = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
        // Match the date format through regular expression
        if (dob.match(dateformat)) {
            //document.form1.text1.focus();
            //Test which seperator is used '/' or '-'
            var opera1 = dob.split('/');
            var opera2 = dob.split('-');
            lopera1 = opera1.length;
            lopera2 = opera2.length;
            // Extract the string into month, date and year
            if (lopera1 > 1) {
                var pdate = dob.split('/');
            } else if (lopera2 > 1) {
                var pdate = dob.split('-');
            }
            var dd = parseInt(pdate[0]);
            var mm = parseInt(pdate[1]);
            var yy = parseInt(pdate[2]);
            // Create list of days of a month [assume there is no leap year by default]
            var ListofDays = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
            if (mm == 1 || mm > 2) {
                if (dd > ListofDays[mm - 1]) {
                    event.preventDefault();
                    alert('Invalid date format!');
                    //document.forms["register"]["DOB"].focus() ;
                    return false;
                }
            }
            if (mm == 2) {
                var lyear = false;
                if ((!(yy % 4) && yy % 100) || !(yy % 400)) {
                    lyear = true;
                }
                if ((lyear == false) && (dd >= 29)) {
                    event.preventDefault();
                    alert('Invalid Date !');
                    ///document.forms["register"]["DOB"].focus() ;
                    return false;
                }
                if ((lyear == true) && (dd > 29)) {
                    event.preventDefault();
                    alert('Invalid Date !');
                    //document.forms["register"]["DOB"].focus() ;
                    return false;
                }
            }
        } else {
            event.preventDefault();
            alert("Invalid Date !");
            //document.forms["register"]["DOB"].focus() ;
            return false;
        }

        if (yy < 1960 || yy > 2005) {
            event.preventDefault();
            alert("Date Beyond Valid Age Range!");
            //document.forms["register"]["DOB"].focus() ;
            return false;
        }

    }
    if (!mob.match(mobregex)) {
        event.preventDefault();
        alert('Please enter Valid Mobile No.');
        document.forms["register"]["Mobile"].focus();
        return false;
    }

    if (!email.match(emailregex)) {
        event.preventDefault();
        alert('Please enter Valid Email ID');
        document.forms["register"]["Email"].focus();
        return false;
    }

    if (!usernameregex.test(username)) {
        event.preventDefault();
        alert('Please Use Only (Alphabets, Digits or [@, _, .] in Username');
        document.forms["register"]["UserName"].focus();
        return false;
    }

    if (pass1.length == 0) {
        event.preventDefault();
        alert('Please enter password');
        document.forms["register"]["Password1"].focus();
        return false;
    } else {
        var paswd = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
        if (!pass1.match(paswd)) {
            event.preventDefault();
            alert('password should be between 7 to 15 characters and must contain at least one numeric digit and a special character');
            return false;
        }
    }
    
    if (pass2.length == 0) {
        event.preventDefault();
        alert('Please repeat password');
        document.forms["register"]["Password2"].focus();
        return false;
    }
    if (pass1 !== pass2) {
        //setTimeout(function() { alert('Password mismatched') }, 500);
        event.preventDefault();
        alert('Password mismatched');
        document.forms["register"]["Password1"].focus();
        return false;
    }

    if (!confirm("Please Check details, Details once saved will not be edited.")) {
        event.preventDefault();
        return false;
    }



    return true;
}

// End Registratin Validataion


$(document).on('submit', '#otp_form1', function(event) {
    var mobno = $("#Mobile").val();
    event.preventDefault();
    $.ajax({
        url: "sendotp1.php",
        method: "POST",
        data: {
            mobno: mobno
        },
        dataType: "json",
        success: function(data) {
            alert(data);
            $('#otp_form1')[0].reset();
            $('#userModal').modal('hide');
        }
    });

});

$(document).on('submit', '#otp_form2', function(event) {
    //alert('AAA');
    event.preventDefault();
    var otp = $('#otp').val();
    if (otp == '') {
        alert('Please Enter OTP');
    } else {
        $.ajax({
            url: "otpcheck.php",
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function(data) {
                alert(data);
                $('#otp_form')[0].reset();
                $('#userModal').modal('hide');
            }
        });
    }
});

var timeoutHandle;

function countdown(minutes) {
    var seconds = 60;
    var mins = minutes;

    function tick() {
        var counter = document.getElementById("timer");
        var current_minutes = mins - 1
        seconds--;
        counter.innerHTML =
            current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
        if (seconds > 0) {
            timeoutHandle = setTimeout(tick, 1000);
        } else {
            if (mins > 1) {
                // countdown(mins-1);   never reach “00″ issue solved:Contributed by Victor Streithorst
                setTimeout(function() {
                    countdown(mins - 1);
                }, 1000);
            } else {
                //alert('OTP Expired ! Please click on verfiy button');
                $('#myModal').modal('hide');
            }
        }
    }
    tick();
}

function sendOTP() {
    var mobno = $("#Mobile").val();

    //$("#myModal").modal();

    if (mobno.length == 10 && mobno != null) {

        $.ajax({
            url: "sendotp1.php",
            method: "POST",
            data: {
                mobno: mobno
            },
            dataType: "json",
            success: function(data) {
                alert(data);
                //$('#otp_form1')[0].reset();
                //$('#userModal').modal('hide');
            }
        });

        $('#myModal').modal({
            backdrop: 'static',
            keyboard: false
        });
        countdown(3);
    } else {
        alert('You have entered Invalid Mobile Number');
    }

}

function verifyOTP1() {
    var otp = $("#otp").val();
    var mobno = $("#Mobile").val();
    //alert(otp);
    var input = {
        "otp": otp,
        "mobno": mobno,
        "action": "verify_otp"
    };
    if (otp.length == 6 && otp != null) {
        $.ajax({
            url: 'otpcheck.php',
            type: 'POST',
            dataType: "json",
            data: input,
            success: function(response) {
                if (response.type == "success") {
                    alert(response.message);
                    document.forms["register"]["Mobile"].readOnly = true;
                    $('#myModal').modal('hide');
                } else {
                    alert(response.message);
                }
            },
            error: function() {
                alert("error");
            }
        });
    } else {
        alert('You have entered wrong OTP.');
    }
}

function onlyDigits(s) {
    for (let i = s.length - 1; i >= 0; i--) {
        const d = s.charCodeAt(i);
        if (d < 48 || d > 57)
            return false;
    }
    return true;
}
$(document).ready(function() {
    $("#Mobile").blur(function() {
        var mobno = $("#Mobile").val().trim();
        if (mobno.length > 0 && mobno.length != 10) {
            $("#mobile_response").show();
            $("#mobile_response").html("<span class='errorstyle'>* Invalid Mobile Number</span>");
            $("#otp_button").attr("disabled", true);
        } else if (onlyDigits(mobno) != true) {
            $("#mobile_response").show();
            $("#mobile_response").html("<span class='errorstyle'>* Invalid Mobile Number</span>");
            $("#otp_button").attr("disabled", true);
        } else if (mobno != '') {
            $.ajax({
                url: 'check_availability.php',
                type: 'post',
                data: {
                    mobno: mobno
                },
                success: function(response) {
                    // Show status
                    if (response > 0) {
                        $("#mobile_response").show();
                        $("#mobile_response").html(
                            "<span class='errorstyle'>* Mobile no. already registered.</span>"
                        );
                        $("#otp_button").attr("disabled", true);
                    } else {
                        $("#mobile_response").hide();
                        $("#otp_button").attr("disabled", false);
                        //$("#mobile_response").html("<span class='exists'>Available.</span>");
                    }
                }
            });
        } else {
            $("#mobile_response").hide();
        }
    });
});
$(document).ready(function() {
    $("#Email").blur(function() {
        var email = $("#Email").val().trim();
        var emailregex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

        if (email.length <= 5) {
            $("#email_response").show();
            $("#email_response").html("<span class='errorstyle'>* Invalid E-Mail Address</span>");
            if (email.length == 0)
                $("#email_response").hide();
        } else if (!email.match(emailregex)) {
            $("#email_response").show();
            $("#email_response").html("<span class='errorstyle'>* Invalid E-Mail Address</span>");
            if (email.length == 0)
                $("#email_response").hide();
        } else if (email != '') {

            $.ajax({
                url: 'check_availemail.php',
                type: 'post',
                data: {
                    email: email
                },
                success: function(response) {
                    // Show status
                    if (response > 0) {
                        $("#email_response").show();
                        $("#email_response").html(
                            "<span class='errorstyle'>* E-Mail address already registered.</span>"
                        );

                    } else {
                        $("#email_response").hide();

                        //$("#mobile_response").html("<span class='exists'>Available.</span>");
                    }
                }
            });
        } else {
            $("#email_response").hide();
        }
    });
});
$(document).ready(function() {
    $("#UserName").blur(function() {
        var uname = $("#UserName").val().trim();
        if (uname.length < 6) {
            $("#uname_response").show();
            $("#uname_response").html("<span class='errorstyle'>* Invalid Username</span>");
            if (uname.length == 0)
                $("#uname_response").hide();
        } else if (uname != '') {

            $.ajax({
                url: 'check_availuname.php',
                type: 'post',
                data: {
                    uname: uname
                },
                success: function(response) {
                    // Show status
                    if (response > 0) {
                        $("#uname_response").show();
                        $("#uname_response").html(
                            "<span class='errorstyle'>* Username already registered.</span>"
                        );

                    } else {
                        $("#uname_response").hide();

                        //$("#mobile_response").html("<span class='exists'>Available.</span>");
                    }
                }
            });
        } else {
            $("#email_response").hide();
        }
    });
});

$(document).ready(function() {
    $('input').tooltip();
});

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('l1')
    .addEventListener('click', refreshcap);
  });

  function refreshcap()
  {
      document.getElementById('siimage').src = './captcha/securimage_show.php?sid=' + Math.random();
      return false;
  }

  document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('CandidateName')
      .addEventListener('keypress', function(event){
          var charCode = (event.which) ? event.which : event.keyCode;    
          if (charCode >= 33 && (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122) && charCode != 46) {
              event.preventDefault();
              return false;
          }
          return true;            
          });
  },true);

  document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('FatherName')
      .addEventListener('keypress', function(event){
          var charCode = (event.which) ? event.which : event.keyCode;    
          if (charCode >= 33 && (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122) && charCode != 46) {
              event.preventDefault();
              return false;
          }
          return true;            
          });
  },true);

  document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('MotherName')
      .addEventListener('keypress', function(event){
          var charCode = (event.which) ? event.which : event.keyCode;    
          if (charCode >= 33 && (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122) && charCode != 46) {
              event.preventDefault();
              return false;
          }
          return true;            
          });
  },true);

  document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('Mobile')
      .addEventListener('keypress', function(event){
          var charCode = (event.which) ? event.which : event.keyCode;
          if (charCode > 31 && (charCode < 48 || charCode > 57))
          {
              event.preventDefault();
              return false;
          }
          return true;            
      });
  },true);

  document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('UserName')
      .addEventListener('keypress', function(event){
          var charCode = (event.which) ? event.which : event.keyCode;
          if (event.keyCode === 32)
          {
              event.preventDefault();
              return false;
          }
          return true;            
      });
  },true);

  document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('Password1')
      .addEventListener('keypress', function(event){
          var charCode = (event.which) ? event.which : event.keyCode;
          if (event.keyCode === 32)
          {
              event.preventDefault();
              return false;
          }
          return true;            
      });
  },true);
  document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('Password2')
      .addEventListener('keypress', function(event){
          var charCode = (event.which) ? event.which : event.keyCode;
          if (event.keyCode === 32)
          {
              event.preventDefault();
              return false;
          }
          return true;            
      });
  },true);
  document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('otp_button')
      .addEventListener('click', sendOTP);
  });
  document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('verifyotp')
      .addEventListener('click', verifyOTP1);
  });
  document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('otp')
      .addEventListener('keypress', function(event){
          var charCode = (event.which) ? event.which : event.keyCode;
          if (charCode > 31 && (charCode < 48 || charCode > 57))
          {
              event.preventDefault();
              return false;
          }
          return true;            
      });
  },true);

