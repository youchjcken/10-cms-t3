<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-679">
    <header id="lms_header">
        <div class="lms_header_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="lms_any_que_wrapper">
                            <p>Have any question?</p>
                            <div class="lms_mobile">
                                <i class="fa fa-phone"></i>
                                <span >(00) 123 456 789</span>
                            </div>
                            <div class="lms_email"><i class="fa fa-envelope"></i>
                                <a href="#">info@lms.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="lms_login_wrapper">
                            <ul>
                                <li> <a href="#" title="Register">Register </a></li>  
                                <li> <a href="#" title="Register">Login </a></li>                             
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="container"> -->
            <div class="container logo_container">
                <h1 class="logo"> 
                    <a> <img alt="Porto" data-sticky-width="82" data-sticky-height="40" src="images/logo.png"> </a>
                </h1>
                <button class="lms_menu_toggle" data-toggle="collapse" data-target=".nav-main-collapse"><i class="fa fa-bars"></i></button> 

            </div>

            <!-- </div> -->
            <div class="navbar-collapse nav-main-collapse collapse navigation_menu">
                <div class="container mega_menu_container">
                    <nav class="nav-main mega-menu">
                        <ul id="mainMenu" class="nav navbar nav-pills nav-main">
                            <li class="dropdown main_item main_item_click">
                                <a href="#" class="dropdown-toggle par_dropdown_toggle" data-toggle="dropdown">Home</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">residential space</a></li>
                                    <li><a href="#">comercial space</a></li>
                                    <li><a href="#">office space</a></li>
                                    <li><a href="#">charges</a></li>         
                                </ul>
                            </li>
                            <li class="dropdown main_item mega_menu_item main_item_click">
                                <a href="#" class="dropdown-toggle par_dropdown_toggle active">Courses</a>
                            </li>
                            <li class="dropdown main_item  main_item_click">
                                <a href="#" class="dropdown-toggle par_dropdown_toggle">Element</a>
                            </li>
                            <li class="dropdown main_item main_item_click">
                                <a href="#" class="dropdown-toggle par_dropdown_toggle" data-toggle="dropdown">Blog</a>
                                <ul class="dropdown-menu">
                                    <li><a href="https://www.24h.com.vn/tin-tuc-trong-ngay-c46.html">Tin tức</a></li>
                                    <li><a href="https://dantri.com.vn/giai-tri.htm">Giải trí</a></li>
                                    <li><a href="https://www.24h.com.vn/bong-da-c48.html">Bóng Đá</a></li>     
                                </ul>
                            </li>
                            <li class="dropdown main_item main_item_click">
                                <a href="#" class="dropdown-toggle par_dropdown_toggle">Pages</a>
                            </li>
                            <li class="dropdown main_item">
                                <a href="#" class="dropdown-toggle par_dropdown_toggle">About</a>
                            </li>
                            <li class="dropdown main_item">
                                <a href="#" class="dropdown-toggle par_dropdown_toggle">Contact Us</a>
                            </li>
                        </ul>

                    </nav>
                    <div class="lms_search_toggle" onclick="openSearch()" >
                        <a class="fa fa-search"></a>
                    </div>
                    <div class="lms_search_wrapper" id="my_search_box" style="display: none"> 
                        <form method="get" action="#">
                            <input type="search" value="" placeholder="Search..." name="s" id="cs" class="form-control">
                        </form> 
                    </div>
                </div>
            </div>
            <div style="clear: both;"></div>
        </header>

        <div class="lms_page_title">
            <div class="lms_page_title_bg" data-stellar-vertical-offset="-150" data-stellar-background-ratio="" style="">
                <div class="lms_page_title_bg_overlay">
                    <div class="container">
                        <div class="lms_title">Fundamentals of Project Management</div>
                        <div class="pull-right">
                            <ol class="breadcrumb">
                                <li><a>Home</a></li>
                                <li><a>lp_course</a></li>
                                <li>Fundamentals of Project Management</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 


  