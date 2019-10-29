<?php session_start();?>
<?php include('../class_conn.php');?>
<?php $cls_conn=new class_conn;?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Freight management system</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />


    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="template_frontend/favicon.ico">

    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="template_frontend/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="template_frontend/css/icomoon.css">
    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="template_frontend/css/simple-line-icons.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="template_frontend/css/magnific-popup.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="template_frontend/css/bootstrap.css">

    <!-- 
	Default Theme Style 
	You can change the style.css (default color purple) to one of these styles
	
	1. pink.css
	2. blue.css
	3. turquoise.css
	4. orange.css
	5. lightblue.css
	6. brown.css
	7. green.css

	-->
    <link rel="stylesheet" href="template_frontend/css/style.css">

    <!-- Styleswitcher ( This style is for demo purposes only, you may delete this anytime. ) -->
    <link rel="stylesheet" id="theme-switch" href="template_frontend/css/style.css">
    <!-- End demo purposes only -->


    <style>
        /* For demo purpose only */
        /* For Demo Purposes Only ( You can delete this anytime :-) */
        
        #colour-variations {
            padding: 10px;
            -webkit-transition: 0.5s;
            -o-transition: 0.5s;
            transition: 0.5s;
            width: 140px;
            position: fixed;
            left: 0;
            top: 100px;
            z-index: 999999;
            background: #fff;
            /*border-radius: 4px;*/
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
            -webkit-box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
            -moz-box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
            -ms-box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
        }
        
        #colour-variations.sleep {
            margin-left: -140px;
        }
        
        #colour-variations h3 {
            text-align: center;
            ;
            font-size: 11px;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #777;
            margin: 0 0 10px 0;
            padding: 0;
            ;
        }
        
        #colour-variations ul,
        #colour-variations ul li {
            padding: 0;
            margin: 0;
        }
        
        #colour-variations li {
            list-style: none;
            display: block;
            margin-bottom: 5px!important;
            float: left;
            width: 100%;
        }
        
        #colour-variations li a {
            width: 100%;
            position: relative;
            display: block;
            overflow: hidden;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -ms-border-radius: 4px;
            border-radius: 4px;
            -webkit-transition: 0.4s;
            -o-transition: 0.4s;
            transition: 0.4s;
        }
        
        #colour-variations li a:hover {
            opacity: .9;
        }
        
        #colour-variations li a > span {
            width: 33.33%;
            height: 20px;
            float: left;
            display: -moz-inline-stack;
            display: inline-block;
            zoom: 1;
            *display: inline;
        }
        
        .option-toggle {
            position: absolute;
            right: 0;
            top: 0;
            margin-top: 5px;
            margin-right: -30px;
            width: 30px;
            height: 30px;
            background: #f64662;
            text-align: center;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
            color: #fff;
            cursor: pointer;
            -webkit-box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
            -moz-box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
            -ms-box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 0 9px 0 rgba(0, 0, 0, .1);
        }
        
        .option-toggle i {
            top: 2px;
            position: relative;
        }
        
        .option-toggle:hover,
        .option-toggle:focus,
        .option-toggle:active {
            color: #fff;
            text-decoration: none;
            outline: none;
        }

    </style>
    <!-- End demo purposes only -->


    <!-- Modernizr JS -->
    <script src="template_frontend/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <header role="banner" id="fh5co-header">
        <div class="container">
            <!-- <div class="row"> -->
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <!-- Mobile Toggle Menu Button -->
                    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
                    <a class="navbar-brand" href="index.php">JN SUCCESS CO., LTD.</a> </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#" data-nav-section="home"><span>Home</span></a></li>
                        <li><a href="#" data-nav-section="service"><span>Service</span></a></li>
                      <li><a href="#" data-nav-section="calculate"><span>Calculate</span></a></li>
                        <li><a href="#" data-nav-section="register"><span>Register</span></a></li>
                        <li><a href="#" data-nav-section="login"><span>Log in</span></a></li>
                        <li><a href="#" data-nav-section="contact"><span>Contact</span></a></li>
                        
                    </ul>
                </div>
            </nav>
            <!-- </div> -->
        </div>
    </header>

    <section id="fh5co-home" data-section="home" style="background-image: url(template_frontend/images/full_image_2.jpg);" data-stellar-background-ratio="0.5">
        <div class="gradient"></div>
        <div class="container">
            <div class="text-wrap">
                <div class="text-inner">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="to-animate">FREIGHT FORWARDER MANAGEMENT SYSTEM.</h1>
                            <h2 class="to-animate">The excellent way to prefer to transport your product.</h2>
                    </div>
                </div>
            </div>
        </div>
        </div>
      
    </section>

    

    <section id="fh5co-work" data-section="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="to-animate">Service</h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 subtext to-animate">
                            <h3>Experience in NVOCC,Air Freight,Sea Freight and Cross border trucking.</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-bottom-padded-sm">
                <div class="col-md-4 col-sm-6 col-xxs-12">
                    <a href="template_frontend/images/work_1.jpg" class="fh5co-project-item image-popup to-animate">
                        <img src="template_frontend/images/work_1.jpg" alt="Image" class="img-responsive">
                        
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xxs-12">
                    <a href="template_frontend/images/work_2.jpg" class="fh5co-project-item image-popup to-animate">
                        <img src="template_frontend/images/work_2.jpg" alt="Image" class="img-responsive">
                        
                    </a>
                </div>

                <div class="clearfix visible-sm-block"></div>

                <div class="col-md-4 col-sm-6 col-xxs-12">
                    <a href="template_frontend/images/work_3.jpg" class="fh5co-project-item image-popup to-animate">
                        <img src="template_frontend/images/work_3.jpg" alt="Image" class="img-responsive">
                        
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xxs-12">
                    <a href="template_frontend/images/work_4.jpg" class="fh5co-project-item image-popup to-animate">
                        <img src="template_frontend/images/work_4.jpg" alt="Image" class="img-responsive">
                        
                    </a>
                </div>

                <div class="clearfix visible-sm-block"></div>

                <div class="col-md-4 col-sm-6 col-xxs-12">
                    <a href="template_frontend/images/work_5.jpg" class="fh5co-project-item image-popup to-animate">
                        <img src="template_frontend/images/work_5.jpg" alt="Image" class="img-responsive">
                        
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xxs-12">
                    <a href="template_frontend/images/work_6.jpg" class="fh5co-project-item image-popup to-animate">
                        <img src="template_frontend/images/work_6.jpg" alt="Image" class="img-responsive">
                       
                    </a>
                </div>

                <div class="clearfix visible-sm-block"></div>

                <div class="col-md-4 col-sm-6 col-xxs-12">
                    <a href="template_frontend/images/work_7.jpg" class="fh5co-project-item image-popup to-animate">
                        <img src="template_frontend/images/work_7.jpg" alt="Image" class="img-responsive">
                        
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xxs-12">
                    <a href="template_frontend/images/work_8.jpg" class="fh5co-project-item image-popup to-animate">
                        <img src="template_frontend/images/work_8.jpg" alt="Image" class="img-responsive">
                        
                    </a>
                </div>

                <div class="clearfix visible-sm-block"></div>

                <div class="col-md-4 col-sm-6 col-xxs-12">
                    <a href="template_frontend/images/work_9.jpg" class="fh5co-project-item image-popup to-animate">
                        <img src="template_frontend/images/work_9.jpg" alt="Image" class="img-responsive">
                        
                    </a>
                </div>
            </div>
            
        </div>
    </section>
<script>
    function target_popup(form) {
    window.open('', 'formpopup', 'width=400,height=400,resizeable,scrollbars');
    form.target = 'formpopup';
}
    </script>
    <section id="fh5co-testimonials" data-section="calculate">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="to-animate">Calculate</h2>
                    <div class="row">
                        <div >
                        <form id="rendered-form" method="post" onsubmit="target_popup(this)" action="cal.php">
                            <div class="rendered-form">
                                <div class="fb-select form-group field-service">
                                    <label for="service" >Type&nbsp; Of Service</label>
                                    <select  name="service" id="service">
                                        <option value="Export" selected="true" id="service-0">Export</option>
                                        <option value="Import" id="service-1">Import</option>
                                    </select>
                                
                                
                                    <label for="by">By</label>
                                    <select name="by" id="by">
                                        <option value="Sea" selected="true" id="by-0">Sea</option>
                                        <option value="Air" id="by-1">Air</option>
                                        <option value="Land" id="by-2">Land</option>
                                    </select>
                                    <label for="freight" class="fb-select-label">Freight</label>
                                    <select name="freight" id="freight">
                                        <option value="LCL" selected="true" id="freight-0">LCL</option>
                                        <option value="FCL" id="freight-1">FCL</option>
                                    </select>
                                
                                    <label for="from" class="fb-select-label">From</label>
                                    <select name="from" id="from">
                                        <option value="AFGHANISTAN" id="from-0">AFGHANISTAN</option>
                                        <option value="LAO" selected="true" id="from-1">ALGERIA</option>
                                        <option value="CHINA" id="from-2">AMERICAN SAMOA</option>
                                        <option value="JAPAN" id="from-3">ANGOLA</option>
                                        <option value="AUSTRALIA" id="from-4">ARGENTINA</option>
                                        <option value="700" id="from-4">LAO</option>
                                        <option value="800" id="from-4">MYANMAR</option>
                                        <option value="120" id="from-4">COMBODIA</option>
                                        <option value="1600" id="from-4">MALAYSIA</option>
                                        <option value="785" id="from-4">CHIANG RAI</option>
                                        <option value="696" id="from-4">CHIANG MAI</option>
                                        <option value="668" id="from-4">NAN</option>
                                        <option value="961" id="from-4">PHAYAO</option>
                                        <option value="551" id="from-4">PHRAE</option>
                                        <option value="924" id="from-4">MAE HONG SON</option>
                                        <option value="599" id="from-4">LAMPANG</option>
                                        <option value="670" id="from-4">LAMPHUN</option>
                                        <option value="491" id="from-4">UTTARADIT</option>
                                        <option value="519" id="from-4">KALASIN</option>
                                        <option value="449" id="from-4">KHON KAEN</option>
                                        <option value="342" id="from-4">CHAIYAPHUM</option>
                                        <option value="740" id="from-4">NAKHON PHANOM</option>
                                        <option value="259" id="from-4">NAKHON LATCHASIMA</option>
                                        <option value="752" id="from-4">BUENG KAN</option>
                                        <option value="410" id="from-4">BURI RAM</option>
                                        <option value="475" id="from-4">MAHA SARAKHAM</option>
                                        <option value="642" id="from-4">MUKDAHAN</option>
                                        <option value="531" id="from-4">YASOTHON</option>
                                        <option value="512" id="from-4">ROI ET</option>
                                        <option value="520" id="from-4">LOEI</option>
                                        <option value="571" id="from-4">SI SA KET</option>
                                        <option value="647" id="from-4">SAKON NAKHON</option>
                                        <option value="457" id="from-4">SURIN</option>
                                        <option value="615" id="from-4">NONG KHAI</option>
                                        <option value="577" id="from-4">NONG BUA LAM PHU</option>
                                        <option value="585" id="from-4">AMNAT CHAROEN</option>
                                        <option value="564" id="from-4">UDON THANI</option>
                                        <option value="629" id="from-4">UBON RATCHATHANI</option>
                                        <option value="358" id="from-4">KAMPHAENG PHET</option>
                                        <option value="194" id="from-4">CHAI NAT</option>
                                        <option value="107" id="from-4">NAKHON NAYOK</option>
                                        <option value="55" id="from-4">NAKHON PATHOM</option>
                                        <option value="249" id="from-4">NAKHON SAWAN</option>
                                        <option value="20" id="from-4">NONTHABURI</option>
                                        <option value="46" id="from-4">PATHUM THANI</option>
                                        <option value="76" id="from-4">PHRA NAKHON SI AYUTTHAYA</option>
                                        <option value="344" id="from-4">PHICHIT</option>
                                        <option value="377" id="from-4">PHITSANULOK</option>
                                        <option value="346" id="from-4">PHETCHABUN</option>
                                        <option value="153" id="from-4">LOP BURI</option>
                                        <option value="29" id="from-4">SAMUT PRAKAN</option>
                                        <option value="72" id="from-4">SAMUT SONGKHRAM</option>
                                        <option value="36" id="from-4">SAMUT SAKHON</option>
                                        <option value="142" id="from-4">SING BURI</option>
                                        <option value="427" id="from-4">SUKHOTHAI</option>
                                        <option value="100" id="from-4">SUPHAN BURI</option>
                                        <option value="107" id="from-4">SARABURI</option>
                                        <option value="105" id="from-4">ANG THONG</option>
                                        <option value="219" id="from-4">UTHAI THANI</option>
                                        <option value="245" id="from-4">CHANTHABURI</option>
                                        <option value="82" id="from-4">CHACHOENGSAO</option>
                                        <option value="81" id="from-4">CHON BURI</option>
                                        <option value="315" id="from-4">TRAT</option>
                                        <option value="135" id="from-4">PRACHIN BURI</option>
                                        <option value="179" id="from-4">RAYONG</option>
                                        <option value="237" id="from-4">SA KAEO</option>
                                        <option value="128" id="from-4">KANCHANABURI</option>
                                        <option value="426" id="from-4">TAK</option>
                                        <option value="281" id="from-4">PRACHUAP KIRI KHAN</option>
                                        <option value="123" id="from-4">PHETCHABURI</option>
                                        <option value="100" id="from-4">RATCHABURI</option>
                                        <option value="814" id="from-4">KRABI</option>
                                        <option value="463" id="from-4">CHUMPHON</option>
                                        <option value="828" id="from-4">TRANG</option>
                                        <option value="780" id="from-4">NAKHON SI THAMMARAT</option>
                                        <option value="1149" id="from-4">NARATHIWAT</option>
                                        <option value="1055" id="from-4">PATTANI</option>
                                        <option value="788" id="from-4">PHANGNGA</option>
                                        <option value="840" id="from-4">PHATTHALUNG</option>
                                        <option value="862" id="from-4">PHUKET</option>
                                        <option value="1084" id="from-4">YALA</option>
                                        <option value="568" id="from-4">RANONG</option>
                                        <option value="950" id="from-4">SONGKHLA</option>
                                        <option value="973" id="from-4">SATUN</option>
                                        <option value="644" id="from-4">SURAT THANI</option>
                                        
                                    </select>
                            
                                    <label for="from" class="fb-select-label">To</label>
                                    <select name="from" id="from">
                                        <option value="AFGHANISTAN" id="from-0">AFGHANISTAN</option>
                                        <option value="LAO" selected="true" id="from-1">ALGERIA</option>
                                        <option value="CHINA" id="from-2">AMERICAN SAMOA</option>
                                        <option value="JAPAN" id="from-3">ANGOLA</option>
                                        <option value="AUSTRALIA" id="from-4">ARGENTINA</option>
                                        <option value="700" id="from-4">LAO</option>
                                        <option value="800" id="from-4">MYANMAR</option>
                                        <option value="120" id="from-4">COMBODIA</option>
                                        <option value="1600" id="from-4">MALAYSIA</option>
                                        <option value="785" id="from-4">CHIANG RAI</option>
                                        <option value="696" id="from-4">CHIANG MAI</option>
                                        <option value="668" id="from-4">NAN</option>
                                        <option value="961" id="from-4">PHAYAO</option>
                                        <option value="551" id="from-4">PHRAE</option>
                                        <option value="924" id="from-4">MAE HONG SON</option>
                                        <option value="599" id="from-4">LAMPANG</option>
                                        <option value="670" id="from-4">LAMPHUN</option>
                                        <option value="491" id="from-4">UTTARADIT</option>
                                        <option value="519" id="from-4">KALASIN</option>
                                        <option value="449" id="from-4">KHON KAEN</option>
                                        <option value="342" id="from-4">CHAIYAPHUM</option>
                                        <option value="740" id="from-4">NAKHON PHANOM</option>
                                        <option value="259" id="from-4">NAKHON LATCHASIMA</option>
                                        <option value="752" id="from-4">BUENG KAN</option>
                                        <option value="410" id="from-4">BURI RAM</option>
                                        <option value="475" id="from-4">MAHA SARAKHAM</option>
                                        <option value="642" id="from-4">MUKDAHAN</option>
                                        <option value="531" id="from-4">YASOTHON</option>
                                        <option value="512" id="from-4">ROI ET</option>
                                        <option value="520" id="from-4">LOEI</option>
                                        <option value="571" id="from-4">SI SA KET</option>
                                        <option value="647" id="from-4">SAKON NAKHON</option>
                                        <option value="457" id="from-4">SURIN</option>
                                        <option value="615" id="from-4">NONG KHAI</option>
                                        <option value="577" id="from-4">NONG BUA LAM PHU</option>
                                        <option value="585" id="from-4">AMNAT CHAROEN</option>
                                        <option value="564" id="from-4">UDON THANI</option>
                                        <option value="629" id="from-4">UBON RATCHATHANI</option>
                                        <option value="358" id="from-4">KAMPHAENG PHET</option>
                                        <option value="194" id="from-4">CHAI NAT</option>
                                        <option value="107" id="from-4">NAKHON NAYOK</option>
                                        <option value="55" id="from-4">NAKHON PATHOM</option>
                                        <option value="249" id="from-4">NAKHON SAWAN</option>
                                        <option value="20" id="from-4">NONTHABURI</option>
                                        <option value="46" id="from-4">PATHUM THANI</option>
                                        <option value="76" id="from-4">PHRA NAKHON SI AYUTTHAYA</option>
                                        <option value="344" id="from-4">PHICHIT</option>
                                        <option value="377" id="from-4">PHITSANULOK</option>
                                        <option value="346" id="from-4">PHETCHABUN</option>
                                        <option value="153" id="from-4">LOP BURI</option>
                                        <option value="29" id="from-4">SAMUT PRAKAN</option>
                                        <option value="72" id="from-4">SAMUT SONGKHRAM</option>
                                        <option value="36" id="from-4">SAMUT SAKHON</option>
                                        <option value="142" id="from-4">SING BURI</option>
                                        <option value="427" id="from-4">SUKHOTHAI</option>
                                        <option value="100" id="from-4">SUPHAN BURI</option>
                                        <option value="107" id="from-4">SARABURI</option>
                                        <option value="105" id="from-4">ANG THONG</option>
                                        <option value="219" id="from-4">UTHAI THANI</option>
                                        <option value="245" id="from-4">CHANTHABURI</option>
                                        <option value="82" id="from-4">CHACHOENGSAO</option>
                                        <option value="81" id="from-4">CHON BURI</option>
                                        <option value="315" id="from-4">TRAT</option>
                                        <option value="135" id="from-4">PRACHIN BURI</option>
                                        <option value="179" id="from-4">RAYONG</option>
                                        <option value="237" id="from-4">SA KAEO</option>
                                        <option value="128" id="from-4">KANCHANABURI</option>
                                        <option value="426" id="from-4">TAK</option>
                                        <option value="281" id="from-4">PRACHUAP KIRI KHAN</option>
                                        <option value="123" id="from-4">PHETCHABURI</option>
                                        <option value="100" id="from-4">RATCHABURI</option>
                                        <option value="814" id="from-4">KRABI</option>
                                        <option value="463" id="from-4">CHUMPHON</option>
                                        <option value="828" id="from-4">TRANG</option>
                                        <option value="780" id="from-4">NAKHON SI THAMMARAT</option>
                                        <option value="1149" id="from-4">NARATHIWAT</option>
                                        <option value="1055" id="from-4">PATTANI</option>
                                        <option value="788" id="from-4">PHANGNGA</option>
                                        <option value="840" id="from-4">PHATTHALUNG</option>
                                        <option value="862" id="from-4">PHUKET</option>
                                        <option value="1084" id="from-4">YALA</option>
                                        <option value="568" id="from-4">RANONG</option>
                                        <option value="950" id="from-4">SONGKHLA</option>
                                        <option value="973" id="from-4">SATUN</option>
                                        <option value="644" id="from-4">SURAT THANI</option>
                                        
                                    </select>
                              
                                    <label for="quantity" class="fb-text-label">Quantity</label>
                                    <input type="text"  name="quantity" value="1" id="quantity">
                        
                                    <label for="type" class="fb-select-label">Type</label>
                                    <select  name="type" id="type">
                                        <option value="Carton" id="type-0">Carton</option>
                                        <option value="Pallet" selected="true" id="type-1">Pallet</option>
                                        <option value="Wooden case" id="type-2">Wooden case</option>
                                    </select>
                                    <label for="weight" class="fb-text-label">Weight</label>
                                    <input type="text"  name="weight" id="weight" required>
                            
                                    <label for="wide" class="fb-text-label">Wide</label>
                                    <input type="text"  name="wide" id="wide" required> 
                             
                                    <label for="lenght" class="fb-text-label">Lenght</label>
                                    <input type="text"  name="lenght" id="lenght" required>
               
                                    <label for="height" class="fb-text-label">Height</label>
                                    <input type="text"  name="height" id="height" required>
                                </div>
                               
                              
                                <div class="fb-button form-group field-submit">
                                    <button type="submit" class="btn-info btn" name="submit_calculate" >Calculate</button>
                                </div>
                            </div>
                        </form>
                            
                            
                            
                         
                           
                         
                                   
                                        
                                    
                                    
                                
                                
                            
                                
                                
                                
                                
                               
                            </div>
                           
                           
                                    
                                
                          
                 
                 
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
         
   
         

        
    </section>
    
    
 

    <section id="fh5co-about" data-section="register">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="to-animate">Register</h2>
                    <div class="row">
                        
                <div class="col-md-12 to-animate">
                      <h3>Register Form</h3>
                  <form method="post">
                    <div class="form-group ">
                        <label for="user_name" class="sr-only">Name</label>
                        <input id="user_name" name="user_name" class="form-control" placeholder="Name" type="text">
                    </div>
                    <div class="form-group ">
                        <label for="user_lastname" class="sr-only">Last Name</label>
                        <input id="user_lastname" name="user_lastname" class="form-control" placeholder="Lastname" type="text">
                    </div>
                    <div class="form-group ">
                        <label for="user_companyname" class="sr-only">Company</label>
                        <input id="user_companyname" name="user_companyname" class="form-control" placeholder="Company" type="text">
                    </div>
                    <div class="form-group ">
                        <label for="user_tel" class="sr-only">Phone</label>
                        <input id="user_tel" name="user_tel" class="form-control" placeholder="Phone" type="text">
                    </div>
                    <div class="form-group ">
                        <label for="user_email" class="sr-only">Email</label>
                        <input id="user_email" name="user_email" class="form-control" placeholder="Email" type="email">
                    </div>
                    <div class="form-group ">
                        <label for="user_address" class="sr-only">Address</label>
                        <input id="user_address" name="user_address" class="form-control" placeholder="Address" type="text">
                    </div>
                    <div class="form-group ">
                        <label for="user_username" class="sr-only">User name</label>
                        <input id="user_username" name="user_username" class="form-control" placeholder="Username" type="text">
                    </div>
                    <div class="form-group ">
                        <label for="user_password" class="sr-only">Password</label>
                        <input id="user_password" name="user_password" class="form-control" placeholder="Password" type="text">
                    </div>
                    
                    
                    <div class="form-group ">
                        <input class="btn btn-primary btn-lg" value="Register" name="submit_register" type="submit">
                    </div>
                     </form>
                       <?php
                        if(isset($_POST['submit_register']))
                        {
                            
                            $user_name=$_POST['user_name'];
                            $user_lastname=$_POST['user_lastname'];
                            $user_companyname=$_POST['user_companyname'];
                            $user_tel=$_POST['user_tel'];
                            $user_email=$_POST['user_email'];
                            $user_address=$_POST['user_address'];
                            $user_username=$_POST['user_username'];
                            $user_password=$_POST['user_password'];
                            
                            
                            $sql=" insert into tb_user(user_name,user_lastname,user_companyname,user_tel,user_email,user_address,user_username,user_password)";
                            $sql.=" values ('$user_name','$user_lastname','$user_companyname','$user_tel','$user_email','$user_address','$user_username','$user_password')";
                            
                            
                            
                         
                            if($cls_conn->write_base($sql)==true)
                            {
                                echo $cls_conn->show_message('Register Success');
                               
                            }
                            else
                            {
                                 echo $cls_conn->show_message('Fail');
                                 echo $sql;
                            }
                        }
                        
                        ?>
                    
                    
                       </div>
                        
                    </div>
                </div>
                   
                
                    
            </div>
        
            
            
        </div>
    </section>

    <section id="fh5co-services" data-section="login">
        <form method="post">
      
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="to-animate">Log in</h2>
                    
                    <div class="form-group ">
                        <label for="user_username" class="sr-only">User name</label>
                        <input id="user_username" name="user_username" class="form-control" placeholder="Username" type="text">
                    </div>
                    <div class="form-group ">
                        <label for="user_password" class="sr-only">Password</label>
                        <input id="user_password" name="user_password" class="form-control" placeholder="Password" type="password">
                    </div>
                    <div class="form-group ">
                        <input class="btn btn-primary btn-lg" name="submit_login" value="Sign in" type="submit">
                    </div>
                    
                </div>
            </div>
           
        </div>
    </form>
                     <?php
                            if(isset($_POST['submit_login']))
                            {
                            $username=$_POST['user_username'];
                            $password=$_POST['user_password'];

                            $sql_admin=" select * from tb_admin";
                            $sql_admin.=" where admin_username='$username'";
                            $sql_admin.=" and admin_password='$password'";

                            $numrow_admin=$cls_conn->select_numrows($sql_admin);
                            if($numrow_admin>=1)
                            {

                            $result_admin=$cls_conn->select_base($sql_admin);
                                while($row_admin=mysqli_fetch_array($result_admin))
                                {
                                $admin_id=$row_admin['admin_id'];
                                $admin_fullname=$row_admin['admin_fullname'];

                                $_SESSION['type']='admin';
                                $_SESSION['id']=$admin_id;
                                $_SESSION['name']=$admin_fullname;
                                }
                            echo $cls_conn->show_message('ยินดีต้อนรับผู้ดูแลระบบ');
                            echo $cls_conn->goto_page(1,'../backend/admin/index.php');

                            }
                            else{
                            $sql_user=" select * from tb_user";
                            $sql_user.=" where user_username='$username'";
                            $sql_user.=" and user_password='$password'";

                            $numrow_user=$cls_conn->select_numrows($sql_user);

                            if($numrow_user>=1)
                            {

                            $result_user=$cls_conn->select_base($sql_user);
                            while($row_user=mysqli_fetch_array($result_user))
                            {
                            $user_id=$row_user['user_id'];
                            $user_fullname=$row_user['user_fullname'];

                            }
                                                                        $_SESSION['type']='user';
                                                                        $_SESSION['user_id']=$user_id;
                                                                        $_SESSION['name']=$user_fullname;
                            echo $cls_conn->show_message("ยินดีต้อนรับคุณ:".$user_fullname."เข้าสู่ระบบ");
                            echo $cls_conn->goto_page(1,'../backend/user/index.php');

                            }
                            else
                            {

                                echo $cls_conn->show_message('ไม่พบผู้ใช้งานนี้');
                                //echo $cls_conn->goto_page(1,'login.php');

                            }
                            //echo $cls_conn->goto_page(1,'login.php');


                            }

                            }

                    ?>
        
        
    </section>

  

    <section id="fh5co-contact" data-section="contact">
        <form method="post">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="to-animate">Contact us</h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 subtext to-animate">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-bottom-padded-md">
                <div class="col-md-6 to-animate">
                    <h3>Contact Info</h3>
                    <ul class="fh5co-contact-info">
                        <li class="fh5co-contact-address ">
                            <i class="icon-home"></i> 58/12, Moo 5, T.Bangmaenang, A.Bangyai,Nonthaburi 11140, Thailand
                           </li>
                        <li><i class="icon-phone"></i>(66)02-916-4274</li>
                        <li><i class="icon-envelope"></i>operation@jns2010.com</li>
                    </ul>
                </div>

                <div class="col-md-6 to-animate">
                    <h3>Contact Form</h3>
                    <div class="form-group ">
                        <label for="contact_name" class="sr-only">Name</label>
                        <input id="contact_name" name= "contact_name" class="form-control" placeholder="Name" type="text">
                    </div>
                     
                    
                    <div class="form-group ">
                        <label for="contact_phone" class="sr-only">Phone</label>
                        <input id="contact_phone"  name="contact_phone" class="form-control" placeholder="Phone" type="text">
                    </div>
                    <div class="form-group ">
                        <label for="contact_email" class="sr-only">Email</label>
                        <input id="contact_email" name="contact_email" class="form-control" placeholder="Email" type="email">
                    </div>
                    
                    
                    <div class="form-group ">
                        <label for="contact_message" class="sr-only">Message</label>
                        <textarea name="contact_message" id="contact_message" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
                    </div>
                    
                    
                    
                    <div class="form-group ">
                        <input class="btn btn-primary btn-lg" name="submit_contact" value="Send Message" type="submit">
                    </div>
                </div>
            </div>

        </div>
      </form>

          <?php
                        if(isset($_POST['submit_contact']))
                        {
                            
                            $contact_name=$_POST['contact_name'];
                             
                            $contact_phone=$_POST['contact_phone'];
                            $contact_email=$_POST['contact_email'];
                            $contact_message=$_POST['contact_message'];
                            $contact_date=date('Y-m-d H:i:s');
                            $contact_status='Pending';
                           
                            
                            $sql=" insert into tb_contact(contact_name,contact_phone,contact_email,contact_message,contact_date,contact_status)";
                            $sql.=" values ('$contact_name','$contact_phone','$contact_email','$contact_message','$contact_date','$contact_status')";
                            
                            
                            
                         
                            if($cls_conn->write_base($sql)==true)
                            {
                                echo $cls_conn->show_message('Request Massage Success');
                                echo $sql;
                            }
                            else
                            {
                                 echo $cls_conn->show_message('Fail');
                                 echo $sql;
                            }
                        }
                        
                        ?>
      
    </section>


    


    


    <!-- jQuery -->
    <script src="template_frontend/js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="template_frontend/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="template_frontend/js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="template_frontend/js/jquery.waypoints.min.js"></script>
    <!-- Stellar Parallax -->
    <script src="template_frontend/js/jquery.stellar.min.js"></script>
    <!-- Counter -->
    <script src="template_frontend/js/jquery.countTo.js"></script>
    <!-- Magnific Popup -->
    <script src="template_frontend/js/jquery.magnific-popup.min.js"></script>
    <script src="template_frontend/js/magnific-popup-options.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
    <script src="template_frontend/js/google_map.js"></script>

    <!-- For demo purposes only styleswitcher ( You may delete this anytime ) -->
    <script src="template_frontend/js/jquery.style.switcher.js"></script>
    <script>
        $(function() {
            $('#colour-variations ul').styleSwitcher({
                defaultThemeId: 'theme-switch',
                hasPreview: false,
                cookie: {
                    expires: 30,
                    isManagingLoad: true
                }
            });
            $('.option-toggle').click(function() {
                $('#colour-variations').toggleClass('sleep');
            });
        });

    </script>
    <!-- End demo purposes only -->

    <!-- Main JS (Do not remove) -->
    <script src="template_frontend/js/main.js"></script>

</body>

</html>
