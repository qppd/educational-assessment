<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html>

<head>
    <title>TOPCIT</title>
    <link rel="icon" href="{{ url('storage/images/topcitlogo.png') }}">
</head>


<style type="text/css">
    /* BASIC */

    html,
    body {
    background: #ffffff;
    background-image: url('{{ url('images/webapplogo.png') }}');
    background-size: 100% 100%;
    background-repeat: no-repeat;
    height: 100%;
    width: 100%;
    font-family: 'Numans', sans-serif;
}

    #formContent:hover+body {
        background-image: url('{{ url('images/topcitlogo.png') }}');
        /* Add any other styles you want to apply when hovering */
    }

    body {
        font-family: "Poppins", sans-serif;
        height: 100vh;
        width: 100vw;
    }

    a {
        color: #92badd;
        display: inline-block;
        text-decoration: none;
        font-weight: 400;
    }

    h2 {
        text-align: center;
        font-size: 16px;
        font-weight: 600;
        text-transform: uppercase;
        display: inline-block;
        margin: 40px 8px 10px 8px;
        color: #cccccc;
    }

    /* STRUCTURE */

    .wrapper {
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        width: 100%;
        min-height: 100%;
        padding: 20px;
    }

    #formContent {
        -webkit-border-radius: 10px 10px 10px 10px;
        border-radius: 10px 10px 10px 10px;
        background: #cd6464;
        padding: 30px;
        opacity: 0.9;
        top: 20px;
        left: 28%;
        /* Reset the left property */
        width: 90%;
        max-width: 450px;
        position: relative;
        padding: 0px;
        -webkit-box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
        box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
        text-align: center;
    }

    #formFooter {
        background-color: #f6f6f6;
        border-top: 1px solid #dce8f1;
        padding: 25px;
        text-align: center;
        -webkit-border-radius: 0 0 10px 10px;
        border-radius: 0 0 10px 10px;
    }



    /* TABS */

    h2.inactive {
        color: #cccccc;
    }

    h2.active {
        color: #0d0d0d;
        border-bottom: 2px solid #5fbae9;
    }



    /* FORM TYPOGRAPHY*/

    input[type=button],
    input[type=submit],
    input[type=reset] {
        background-color: #56baed;
        border: none;
        color: white;
        padding: 15px 80px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        text-transform: uppercase;
        font-size: 13px;
        -webkit-box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
        box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
        -webkit-border-radius: 5px 5px 5px 5px;
        border-radius: 5px 5px 5px 5px;
        margin: 5px 20px 40px 20px;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    input[type=button]:hover,
    input[type=submit]:hover,
    input[type=reset]:hover {
        background-color: #39ace7;
    }

    input[type=button]:active,
    input[type=submit]:active,
    input[type=reset]:active {
        -moz-transform: scale(0.95);
        -webkit-transform: scale(0.95);
        -o-transform: scale(0.95);
        -ms-transform: scale(0.95);
        transform: scale(0.95);
    }

    input[type=text] {
        background-color: #f6f6f6;
        border: none;
        color: #0d0d0d;
        padding: 10px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 2px;
        width: 85%;
        border: 2px solid #f6f6f6;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -ms-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
        -webkit-border-radius: 5px 5px 5px 5px;
        border-radius: 5px 5px 5px 5px;
    }

    input[type=password] {
        background-color: #f6f6f6;
        border: none;
        color: #0d0d0d;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 5px;
        width: 85%;
        border: 2px solid #f6f6f6;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -ms-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
        -webkit-border-radius: 5px 5px 5px 5px;
        border-radius: 5px 5px 5px 5px;
    }

    input[type=text]:focus {
        background-color: #fff;
        border-bottom: 2px solid #5fbae9;
    }

    input[type=text]:placeholder {
        color: #cccccc;
    }



    /* ANIMATIONS */

    /* Simple CSS3 Fade-in-down Animation */
    .fadeInDown {
        -webkit-animation-name: fadeInDown;
        animation-name: fadeInDown;
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    @-webkit-keyframes fadeInDown {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }

        100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
        }
    }

    @keyframes fadeInDown {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }

        100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
        }
    }

    /* Simple CSS3 Fade-in Animation */
    @-webkit-keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @-moz-keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .fadeIn {
        opacity: 0;
        -webkit-animation: fadeIn ease-in 1;
        -moz-animation: fadeIn ease-in 1;
        animation: fadeIn ease-in 1;

        -webkit-animation-fill-mode: forwards;
        -moz-animation-fill-mode: forwards;
        animation-fill-mode: forwards;

        -webkit-animation-duration: 1s;
        -moz-animation-duration: 1s;
        animation-duration: 1s;
    }

    .fadeIn.first {
        -webkit-animation-delay: 0.4s;
        -moz-animation-delay: 0.4s;
        animation-delay: 0.4s;
    }

    .fadeIn.second {
        -webkit-animation-delay: 0.6s;
        -moz-animation-delay: 0.6s;
        animation-delay: 0.6s;
    }

    .fadeIn.third {
        -webkit-animation-delay: 0.8s;
        -moz-animation-delay: 0.8s;
        animation-delay: 0.8s;
    }

    .fadeIn.fourth {
        -webkit-animation-delay: 1s;
        -moz-animation-delay: 1s;
        animation-delay: 1s;
    }

    /* Simple CSS3 Fade-in Animation */
    .underlineHover:after {
        display: block;
        left: 0;
        bottom: -10px;
        width: 0;
        height: 2px;
        background-color: #56baed;
        content: "";
        transition: width 0.2s;
    }

    .underlineHover:hover {
        color: #0d0d0d;
    }

    .underlineHover:hover:after {
        width: 100%;
    }

    h1 {
        color: #60a0ff;
    }

    /* OTHERS */

    *:focus {
        outline: none;
    }

    #icon {
        width: 30%;
    }

    .brand_logo {
        margin: 10px;
        width: 200px;
        height: 100px;

    }


    .flat-line {

        /* other styles */
        background: repeating-linear-gradient(90deg,
                transparent,
                transparent 10px,
                rgba(0, 0, 0, 0.1) 10px,
                rgba(0, 0, 0, 0.1) 20px);
    }

    @keyframes pulse {
        0% {
            height: 8px;
            opacity: 1;
        }

        50% {
            height: 16px;
            opacity: 0.5;
        }

        100% {
            height: 8px;
            opacity: 1;
        }
    }

    .flat-line {
        /* other styles */
        animation: pulse 1s ease-in-out infinite;
    }

    .flat-line {
        /* other styles */
        position: absolute;
        left: 15%;
        top: 50%;
    }

    @keyframes warning {
        0% {
            transform: scale(0);
            opacity: 0;
        }

        100% {
            transform: scale(1);
            opacity: 1;
        }
    }
</style>



<body>

    <div class="fadeIn first">

    </div>
    <div class="wrapper fadeInDown">

        <div id="formContent">

            <div class="fadeIn first">
                <img src="{{ url('storage/images/topcitlogo.png') }}" class="brand_logo" id="icon" alt="Logo">
            </div>

            <form class="form-horizontal" method="POST" action="/portal/register/add" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" class="fadeIn second" id="student_no" name="student_no"
                                placeholder="Enter your School ID no." required="true"
                                oninput="this.value = this.value.replace(/[^A-Z a-z 0-9]/g, '');" />

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" class="fadeIn third" id="email" name="email"
                                placeholder="Enter your email address" required="true" />

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" class="fadeIn fourth" id="contact" name="contact"
                                placeholder="Enter your active contact no." required="true"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '');" maxlength="11"/>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="fadeIn fourth" for="photo">Photos</label>
                            <input type="file" class="fadeIn fourth" accept="image/png, image/gif, image/jpeg"
                                id="photo" name="photos[]" multiple />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input type="password" class="fadeIn fourth" id="password" name="password"
                                placeholder="Enter your desired password" required="true"
                                oninput="this.value = this.value.replace(/[^A-Z a-z 0-9]/g, '');" />

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input type="password" class="fadeIn fourth" id="confirm_password" name="confirm_password"
                                placeholder="Enter password to confirm" required="true" />

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12" style="padding:30px;"">
                        <h3 class="fadeIn fourth">DATA PRIVACY STATEMENT</h3>
                
                        <div class="form-group">
                            <label>
                                {{-- &emsp;&emsp; --}}
                                <input class="fadeIn fourth" type="checkbox" required>
                                <span class="psize fadeIn fourth">
                                    I understand and agree that by filling out this form I am allowing Taguig City University to use,
                                    collect and disclose my personal information for data gathering procedures as part of fulfillment
                                    on TOPCIT and to store it as long as necessary for the fulfillment
                                    of the stated purpose in accordance with the applicable laws, including the
                                    <b>Data Privacy Act of 2012</b> and its Implementing Rules and Regulations, and the Taguig City University Privacy Act.
                                    The purpose and extent of use, collection, sharing, disclosure, and storage of my personal information were explained to me.
                                    Thank you.
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
                
                <input type="submit" class="fadeIn fourth" value="REGISTER">

                <a href="/portal">Already have an account? Login now!</a>

            </form>

            @if ($errors->any())
                <div class='alert alert-danger alert-dismissible'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                    <h4><i class='icon fa fa-warning'></i> Error!</h4>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session()->has('success'))
                <div class='alert alert-success alert-dismissible'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                    <h4><i class='icon fa fa-check'></i> Success!</h4>
                    <ul>
                        {{ session()->get('success') }}
                    </ul>
                </div>
            @endif
        </div>



    </div>

</body>

@include('includes/scripts')
<script>
    $(document).ready(function(){
        $('#formContent').hover(
            function(){
                $('body').css('background-image', 'url("{{ url('images/webappinstruction.png') }}")');
            },
            function(){
                // Set it back to the original image when not hovering
                $('body').css('background-image', 'url("{{ url('images/webapplogo.png') }}")');
            }
        );
    });
</script>

</html>
