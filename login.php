
<!DOCTYPE html>
<html lang="en" xmlns:background-color="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SITU | DataManagement System </title>
    <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=base_url();?>assets/css/font-awesome.min.css" />
    <link rel="shortcut icon" href="<?=base_url();?>assets/fff.png" type="image/x-icon">
    <script type= "text/javascript" src = "<?=base_url();?>js/lga.min.js"></script>
    <link href="<?=base_url()?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>vendors/aos.css">
    <link href="<?=base_url();?>vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <style>
        .divida2 {
            background: linear-gradient(to right,#840017,black );
        height: 1em;
        }
        .rel {
            position: relative;
        }

      .abs{
            position: absolute;
            top: 1px;
            right: 0;
            width: 50px;
            height: 50px;
        }
        .divida{
            background-color:#000;
            border: solid rgba(220, 120, 70, .15);
            border-width: 1px 0;
            height: 1.5em;
            color:white;
            box-shadow: inset 0 .5em 1.5em rgba(220, 120, 70, .1), inset 0 .125em .5em rgba(220, 120, 70, .15);
        }
        .card1 {
            box-shadow: 0 6px 10px 0 rgba(0,0,0,0.2);
            padding: 20px;
            border:1px dashed #840017;
            border-radius: 7px;
        }
        .c1 {
            box-shadow: 0 6px 10px 0 rgba(0,0,0,0.2);
            padding: 7px;
            border:1px dashed seagreen;
            border-radius: 5px;
        }   #ka{
                width:100px;
                height:auto;
            }
        #ka:hover {
            width:450px;
            height:300px;
        }
        .mb{
            height:100px;
        }
        .gradient-custom-2 {
            /* fallback for old browsers */


            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right,  #a42037, ,  #941027);

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, #a42037,  #840017,  #941027);
        }

        @media (min-width: 768px) {
            .gradient-form {
                height: 100vh !important;
            }
        }
        @media (min-width: 769px) {
            .gradient-custom-2 {
                border-top-right-radius: .3rem;
                border-bottom-right-radius: .3rem;
            }
        }
        .oo{
            border:3px solid #840017;
        }
    </style>
</head>
<body class="">
<section class="h-100" style="background-color:#840017">
                    <div class="container-fluid py-5 h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-xl-10">
                                <div class="card rounded-3 text-black">
                                    <div class="row g-0">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6">
                                            <div class="card-body p-md-5 mx-md-4" style="padding:25px; margin:auto">

                                                <div class="text-center">
                                                    <img src="<?=base_url();?>assets/l2.png"
                                                         style="width: 185px;" alt="logo">
                                                    <h4 class="mt-1 mb-5 pb-1" style="color:#a42037"><span style="color:black"> <b>WELCOME TO IMPERIUM INDUSTRIES</b></h4>
                                                </div><h4 align="center" class="text-warning"><?=$msg;?></h4>
<div id="lg" class="card1" style="padding:15px; background-image:url('<?=base_url();?>assets/e1.png'); background-size: cover">
                                                <form method="post"><div style="padding: 32px">
                                                    <p align="center" style="color:purple"></p>
<h3 align="center" style="color:black; padding:15px"><b>LOGIN</b></h3>
                                                    <div class="form-outline mb-4">
                                                        <input type="email" id="form2Example11" class="form-control oo"
                                                               placeholder="Email address" name="un" />
                                                        <label class="form-label" for="form2Example11">Email Address</label>
                                                    </div>
<br/>
                                                    <div class="form-outline mb-4">
                                                        <input type="password" id="form2Example22" class="form-control oo" name="ps" placeholder="Password" />
                                                        <label class="form-label" for="form2Example22">Password</label>
                                                    </div>
<br/>
                                                    <div class="text-center pt-1 mb-5 pb-1">
                                                        <input type="submit" class="btn btn-danger  fa-lg  mb-3" name="btng" value="LOGIN" style="background-color: #840017"/>

                                                    </div><p> <button id="bfpp"  style="color:#840017; background-color: #c44057; padding:4px; opacity:0.8; border-radius:5px">Forgot password?</button></p>

                                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                                        <p class="mb-0 me-2">Don't have an account? <button type="button" class="btn btn-default" id="blg"><u>Create New Account</u></button></p>

                                                    </div>
                                                    </div>
                                                </form>
</div>
                                                <div id="fpp" class="card1" style="padding:15px; background-image:url('<?=base_url();?>assets/e1.png'); background-size: cover">
                                                    <form method="post"><div style="padding: 32px">
                                                            <p align="center" style="color:purple"></p>
                                                            <h3 align="center" style="color:black; padding:15px"><b>Recorver My Password</b></h3>
                                                            <div>Enter the Email Address linked to your account to receive instruction on how to recover your password.</div>
                                                            <div class="form-outline mb-4">
                                                                <input type="email" id="form2Example11" class="form-control oo"
                                                                       placeholder="Email address" name="un" />
                                                                <label class="form-label" for="form2Example11">Email Address</label>
                                                            </div>

                                                            <br/>
                                                            <div class="text-center pt-1 mb-5 pb-1">
                                                                <input type="submit" class="btn btn-danger  fa-lg  mb-3" name="btng" value="Reset Password" style="background-color: #840017; padding:5px; border-radius:5px"/>

                                                            </div><p> <a class="text-muted" href="#"><b style="color:#840017; background-color: #c44057; padding:4px; opacity:0.8; border-radius:5px"><u>Forgot password?</u></b></a></p>

                                                            <div class="d-flex align-items-center justify-content-center pb-4">
                                                                <p class="mb-0 me-2">Remebered Your Password?<a href="#" class="btn btn-default"><u>Login</u></a></p>

                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div id="su" class="card1" style="padding:15px; background-image:url('<?=base_url();?>assets/e1.png'); background-size: cover">

                                                        <form method="post" action=""  class="login-form"><div style="padding: 32px">
                                                                <div class="row">
                                                                    <div class="col-md-6"> <div class="form-group oo"><div class="input-group">
                                                                                <span class="input-group-addon" id="sizing-addon2" style="background-color: #840017; color:#fee"><i class="fa fa-fog"></i> </span>
                                                                                <input type="text" class="form-control" placeholder="First Name" aria-describedby="sizing-addon2" name="firstname" required>
                                                                            </div>
                                                                        </div>
                                                                </div><div col-md-6>
                                                                        <div class="form-group oo"><div class="input-group">
                                                                                <span class="input-group-addon" id="sizing-addon2" style="background-color: #840017; color:#fee"><i class="fa fa-fog"></i> </span>
                                                                                <input type="text" class="form-control" placeholder="Last Name" aria-describedby="sizing-addon2" name="lastname" required>
                                                                            </div>
                                                                        </div>
                                                                    </div></div>
                                                                <div class="row">
                                                                    <div class="col-md-6"> <div class="form-group oo"><div class="input-group">
                                                                                <span class="input-group-addon" id="sizing-addon2" style="background-color: #840017; color:#fee"><i class="fa fa-fog"></i> </span>
                                                                                <input type="text" class="form-control" placeholder="User Name" aria-describedby="sizing-addon2" name="username" required>
                                                                            </div>
                                                                        </div>
                                                                    </div><div col-md-6>
                                                                        <div class="form-group oo"><div class="input-group">
                                                                                <span class="input-group-addon" id="sizing-addon2" style="background-color: #840017; color:#fee"><i class="fa fa-fog"></i> </span>
                                                                                <input type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon2" name="password" required>
                                                                            </div>
                                                                        </div>
                                                                    </div></div>
                                                            <div class="form-group oo"><div class="input-group">
                                                                    <span class="input-group-addon" id="sizing-addon2" style="background-color: #840017; color:#fee"><i class="fa fa-fog"></i> </span>
                                                                    <input type="text" class="form-control" placeholder="Mobile Number Or Email" aria-describedby="sizing-addon2" name="mobileoremail" required>
                                                                </div>
                                                            </div><div class="form-group oo"><div class="input-group">
                                                                    <span class="input-group-addon" id="sizing-addon2" style="background-color: #840017; color:#fee"><i class="fa fa-cogs"></i> </span>
                                                                    <select name="cat"  class="form-control" required>
                                                                        <option value="">- Select Department -</option>
                                                                        <option value="Production">Production</option>
                                                                        <option value="R & D">R & D</option>
                                                                        <option value="Admin & Operation">Admin & Operation</option>
                                                                        <option value="Human Resource">Human Resources</option>
                                                                        <option value="Business Development & ICT">Business Development & ICT</option>
                                                                        <option value="Finance">Finance</option>
                                                                        <select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group oo"> <div class="input-group" style="background-color: #840017">
                                                                    <span class="input-group-addon" id="sizing-addon2" style="background-color: #840017; color:#fee"><i class="fa fa-envelope"></i> </span>
                                                                    <select name="cat"  class="form-control" required>
                                                                        <option value="">- Select Gender -</option>
                                                                        <option value="Government Agency">Male</option>
                                                                        <option value="Research Institute">Female</option>
                                                                        <option value="Desk Officers">Others</option>
                                                                        <select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <div class="text-center pt-1 mb-5 pb-1">
                                                                    <input type="submit" class="btn btn-primary fa-lg gradient-custom-2 "  name="signup" value="Submit">
                                                                </div>

                                                                </div> <div class="d-flex align-items-center justify-content-center pb-4">
                                                                <p class="mb-0 me-2">Already Have Account? <button type="button" class="btn btn-outline-warning" id="bsu"><u>Login</u></button></p>

                                                            </div>
                                                            </div>
</form>
</div>
                                            </div>
                                            </div>

                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
<div class="divida">
    <marquee>Imperium Industries is a world-class Manufacturer of Armoured Vehicles.</marquee>
</div>

<script src="<?=base_url();?>assets/js/jquery.min.js" ></script>
<script>
    $(document).ready(function(){
        $("#su").hide();
        $("#bsu").click(function(){
            $("#su").hide(1000);
            $("#lg").show();
        });
        $("#blg").click(function(){
            $("#su").show();
            $("#lg").hide(1000);
        });

    });
</script>
<script src="<?=base_url();?>assets/js/bootstrap.min.js" ></script>
<script src="<?=base_url();?>js/lga.min.js" ></script>
</body></html>

