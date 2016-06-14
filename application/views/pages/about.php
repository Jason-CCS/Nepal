<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - About</title>

    <!-- Bootstrap Core CSS -->
    <link href="/assets/front/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/assets/front/css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<?php
$this->load->view('pages/templates/nav');
?>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('/assets/front/img/about-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1>About Me</h1>
                    <hr class="small">
                    <span class="subheading">This is what I do. To co-work with me.</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <p><strong>I am a freelancer, software developer</strong>. Had experience on handling BigData eco-system,
                such as Hadoop, HBase, Zookeeper, Redis, etc. And other Apache software experiences on Solr, Maven,
                Kafka, and so many on. Basically, I am a full-stack website developer, or even a DevOps.

            <p class="text-info">
                Currently, to be cooperated with me is website building, especially those rather
                complicate system. Experienced on Java, Javascript, PHP, SQL database, No-SQL database.
                Backend Java using - Jersey, Tomcat, Jetty, MSSQL; Or PHP using - CodeIgniter, AMP. Frond-end JS
                using
                jQuery, Bootstrap, Hi-chart.
            </p>

            <p>I am major in Image Processing and fascinated about topics like AI, and SNA in M.S.
                Look forward to being a LOHAS high-techie engineer or yuppie scientist. Passionate about environment
                protection, eco-friendly technology, happier life way for human.
                Still on the way to work as happy as God.</p>

            <p>Future interesting topic in my pocket is Laravel, Python, node.js, Raspberry pi, pattern recognition,
                machine learning. </p>

            <p>Cheers, mates!</p>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <?php
    $this->load->view('pages/templates/footer');
    ?>

    <!-- jQuery -->
    <script src="/assets/front/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/assets/front/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/assets/front/js/clean-blog.min.js"></script>

</body>

</html>
