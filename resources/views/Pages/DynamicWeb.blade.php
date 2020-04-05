<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
xml:lang="en" lang="en"  style="background-color:yellow;">
@extends('Layouts.Head')
<h1>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
    <style type="text/css" media="all">@import "./includes/layout.css";</style>
    <title>Dynamic Web</title>
</h1>
<div id="wrapper"><!--Goes with CSS layout.-->
    <div id="content"><!--Goes with CSS layout.-->
        <div id="nav"><!--links section-->
            <h2>Menu</h2>
            <body style="background-color:yellow;">
            <ul>
                <li class="navtop"><a href="HomePage " title="Go to Home page">Home</a></li>
                <li ><a href="Calculator" title="Go to Calculator page">Calculator</a></li>
                <li><a href="DateForm" title="Go to date form page">Date Form</a></li>
                <li ><a href="Advert" title="Go to registration page">Adverts</a></li>
                <li ><a href="VutshilaAirlines" title="Go to VutshilaAirlines page">Book Flight</a></li>
            </ul>
        </div>
        <!-- Start of page-specific content. -->
        <h3 id="mainhead"></h3>
        
        <h4></h4>
        
        <!-- End of page-specific content.-->

    </div><!--End of "content" DIV.-->
<div id="footer"><p>&copy; Copyright by Reason Charles Hlongwane 2020 </p></div>
</div><!-- End of "wrapper" DIV.-->



</body>
</html>