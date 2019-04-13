@extends('layouts.app')
<style type="text/css">
    @import "http://fonts.googleapis.com/css?family=Droid+Serif";  /* This Line is to import Google font style */
.content{
width:960px;
margin:0 auto;
}
.main{
float:left;
width:650px;
margin-top:50px
}

#active1{
color:red
}
fieldset{
display:none;
width:350px;
padding:20px;
margin-top:50px;
margin-left:85px;
border-radius:5px;
box-shadow:3px 3px 25px 1px gray
}
#first{
display:block;
width:350px;
padding:20px;
margin-top:50px;
border-radius:5px;
margin-left:85px;
box-shadow:3px 3px 25px 1px gray
}
#second{
display:none;
width:350px;
padding:20px;
margin-top:50px;
border-radius:5px;
margin-left:85px;
box-shadow:3px 3px 25px 1px gray
}

h2,p{
text-align:center;
font-family:'Droid Serif',serif !important;
}

li.qwew{
margin-right:52px;
display:inline;
color:#c1c5cc;
font-family:'Droid Serif',serif
}
</style>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="content">
                <!-- Multistep Form -->
                <div class="main">
                    <form action="#" class="regform" method="get">
                        <!-- Progressbar -->
                        <ul id="progressbar">
                            <li class="qwew" id="active1">Personal Information</li>
                            <li class="qwew" id="active2">Account</li>
                            <li class="qwew" id="active3">Personal Details</li>
                        </ul>
                        <!-- Fieldsets -->
                        <fieldset id="first">
                            <h2 class="title">Create your account</h2>
                            <p class="subtitle">Step 1</p>
                            <div class="form-group">
                                <label for="fullname">Full Name:</label>
                                <input type="text" class="form-control" id="fullname" autocomplete="off" name="fullname">
                            </div>
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" class="form-control" id="address" autocomplete="off" name="address">
                            </div>
                            <div class="form-group">
                                <label for="contact_no">Contact Number:</label>
                                <input type="number" class="form-control" id="contact_no" autocomplete="off" name="contact_no">
                            </div>
                            <input id="next_btn1" onclick="next_step1()" type="button" value="Next" class="btn btn-primary">
                        </fieldset>
                        <fieldset id="second">
                            <h2 class="title">Create Account</h2>
                            <p class="subtitle">Step 2</p>
                            <div class="form-group">
                                <label for="contact_no">Username:</label>
                                <input type="number" class="form-control" id="contact_no" autocomplete="off" name="contact_no">
                            </div>
                            <div class="form-group">
                                <label for="contact_no">Password:</label>
                                <input type="number" class="form-control" id="contact_no" autocomplete="off" name="contact_no">
                            </div>
                            <div class="form-group">
                                <label for="contact_no">Confirm Password:</label>
                                <input type="number" class="form-control" id="contact_no" autocomplete="off" name="contact_no">
                            </div>

                            <input id="pre_btn1" onclick="prev_step1()" type="button" value="Previous">
                            <input id="next_btn2" name="next" onclick="next_step2()" type="button" value="Next">
                        </fieldset>
                        <fieldset id="third">
                            <h2 class="title">Personal Details</h2>
                            <p class="subtitle">Step 3</p>
                            <input class="text_field" name="fname" placeholder="First Name" type="text">
                            <input class="text_field" name="lname" placeholder="Last Name" type="text">
                            <input class="text_field" name="cont" placeholder="Contact" type="text">
                            <label>Gender</label>
                            <input name="gender" type="radio" value="Male">Male
                            <input name="gender" type="radio" value="Female">Female
                            <textarea name="address" placeholder="Address">
                            </textarea>
                            <input id="pre_btn2" onclick="prev_step2()" type="button" value="Previous">
                            <input class="submit_btn" onclick="validation(event)" type="submit" value="Submit">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var count = 0;
    function validation(event) {
        var radio_check = document.getElementsByName('gender');
        var input_field = document.getElementsByClassName('text_field');
        var text_area = document.getElementsByTagName('textarea');
        if (radio_check[0].checked == false && radio_check[1].checked == false) {
            var y = 0;
        } else {
            var y = 1;
        }
        for (var i = input_field.length; i > count; i--) {
            if (input_field[i - 1].value == '' || text_area.value == '') {
                count = count + 1;
            } else {
                count = 0;
            }
        }
        if (count != 0 || y == 0) {
            alert("*All Fields are mandatory*");
            event.preventDefault();
        } else {
            return true;
        }
    }
    function next_step1() {
        document.getElementById("first").style.display = "none";
        document.getElementById("second").style.display = "block";
        document.getElementById("active2").style.color = "red";
    }

    function prev_step1() {
        document.getElementById("first").style.display = "block";
        document.getElementById("second").style.display = "none";
        document.getElementById("active1").style.color = "red";
        document.getElementById("active2").style.color = "gray";
    }

    function next_step2() {
        document.getElementById("second").style.display = "none";
        document.getElementById("third").style.display = "block";
        document.getElementById("active3").style.color = "red";
    }

    function prev_step2() {
        document.getElementById("third").style.display = "none";
        document.getElementById("second").style.display = "block";
        document.getElementById("active2").style.color = "red";
        document.getElementById("active3").style.color = "gray";
    }
</script>
@endsection
