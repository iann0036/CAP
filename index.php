<?php
/**
 * Created by PhpStorm.
 * User: iann0036
 * Date: 4/05/14
 * Time: 8:48 PM
 */
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/starter-template/starter-template.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">CAP Protocol</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

<div class="container">

    <div class="starter-template">
        <h1>Create Event</h1>
        <form>
            <p><label>Identifier*:</label>&nbsp;<input type="text" /></p>
            <p><label>Sender*:</label>&nbsp;<input type="text" /></p>
            <p><label>Sent*:</label>&nbsp;<input type="text" value="2014-05-04T12:00:00+10:00" /></p>
            <p><label>Status*:</label>&nbsp;<select>
                    <option>Actual</option>
                    <option>Exercise</option>
                    <option>System</option>
                    <option>Test</option>
                    <option>Draft</option>
                </select></p>
            <p><label>Message Type*:</label>&nbsp;<select>
                    <option>Alert</option>
                    <option>Update</option>
                    <option>Cancel</option>
                    <option>Ack</option>
                    <option>Error</option>
                </select></p>
            <p><label>Source:</label>&nbsp;<input type="text" /></p>
            <p><label>Scope*:</label>&nbsp;<select>
                    <option>Public</option>
                    <option>Restricted</option>
                    <option>Private</option>
                </select></p>

            <p><input type="submit" /></p>
        </form>
    </div>

</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
</body>
</html>
