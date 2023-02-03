<!DOCTYPE html>
<html lang="en" xmlns:background-color="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SITU | DataManagement System </title>
    <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css" />
    <link rel="shortcut icon" href="<?=base_url();?>assets/fff.png" type="image/x-icon">
    <link rel="stylesheet" href="<?=base_url()?>vendors/aos.css">

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
                                    <div id="fpp" class="card1" style="padding:15px; background-image:url('<?=base_url();?>assets/e1.png'); background-size: cover">
                                    <form method="post"><div style="padding: 32px">
                                            <p align="center" style="color:purple"></p>
                                            <h3 align="center" style="color:black; padding:15px"><b>Recover My Password</b></h3>
                                            <div style="color:white" align="center">Enter the Email Address linked to your account to receive instruction on how to recover your password.</div>
                                           <br/> <div class="form-outline mb-4">
                                                <input type="email" id="form2Example11" class="form-control oo"
                                                       placeholder="Email address" name="un" />
                                                <label class="form-label" for="form2Example11">Email Address</label>
                                            </div>

                                            <br/>
                                            <div class="text-center pt-1 mb-5 pb-1">
                                                <input type="submit" class="btn btn-danger  fa-lg  mb-3" name="btng" value="Reset Password" style="background-color: #840017; padding:5px; border-radius:5px"/>

                                            </div>    <br>  <div class="d-flex align-items-center justify-content-center pb-4">
                                                <p class="mb-0 me-2">Know Your Password? <a href="#" class="btn btn-danger"> <u>Login</u> </a></p>

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
        $("#lg").hide();
        $("#blg").click(function(){
            $("#fpp").hide(1000);
            $("#lg").show();
        });
        $("#bfpp").click(function(){
            $("#fpp").show(1000);
            $("#lg").hide();
        });
    });
</script>

<script src="<?=base_url();?>assets/js/bootstrap.min.js" ></script>
<script src="<?=base_url();?>js/lga.min.js" ></script>
</body></html>

