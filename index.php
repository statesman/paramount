<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <?php
  $meta = array(
    'title' => 'Paramount Theatre, then and now | Austin American-Statesman',
    'description' => 'A look back at how the Paramount Theatre looked in the 1930s and 1942 compared to 2015.',
    'thumbnail' => 'http://projects.statesman.com/then-and-now/paramount/assets/share.png',
    'url' => 'http://projects.statesman.com/then-and-now/paramount/',
    'twitter' => 'statesman'
  );
?>

  <title>Interactive: <?php print $meta['title']; ?> | Austin American-Statesman</title>
  <link rel="icon" type="image/png" href="//projects.statesman.com/common/favicon.ico">

  <link rel="canonical" href="<?php print $meta['url']; ?>" />

  <meta name="description" content="<?php print $meta['description']; ?>">

  <meta property="og:title" content="<?php print $meta['title']; ?>"/>
  <meta property="og:description" content="<?php print $meta['description']; ?>"/>
  <meta property="og:image" content="<?php print $meta['thumbnail']; ?>"/>
  <meta property="og:url" content="<?php print $meta['url']; ?>"/>

  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@<?php print $meta['twitter']; ?>" />
  <meta name="twitter:title" content="<?php print $meta['title']; ?>" />
  <meta name="twitter:description" content="<?php print $meta['description']; ?>" />
  <meta name="twitter:image" content="<?php print $meta['thumbnail']; ?>" />
  <meta name="twitter:url" content="<?php print $meta['url']; ?>" />

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="dist/style.css">

  <link href='http://fonts.googleapis.com/css?family=Lusitana:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,300italic,400italic,700italic,700,800,800italic' rel='stylesheet' type='text/css'>

  <?php /* CMG advertising and analytics */ ?>
  <?php include "includes/advertising.inc"; ?>
  <?php include "includes/metrics-head.inc"; ?>

</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="http://www.statesman.com/" target="_blank">
          <img width="273" height="26" src="assets/logo.png">
        </a>
      </div>
       <ul class="nav navbar-nav navbar-right social hidden-xs">
          <li><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-facebook-square"></i></a></li>
          <li><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($meta['url']); ?>&via=<?php print urlencode($meta['twitter']); ?>&text=<?php print urlencode($meta['title']); ?>"><i class="fa fa-twitter"></i></a></li>
          <li><a target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-google-plus"></i></a></li>
        </ul>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-lg-12 header">
      <h4>THEN AND NOW</h4>
      <h1>A look back at: The Paramount Theatre</h1>
      <p><small>Jan. 29, 2015. Interactive by Christian McDonald, Austin American-Statesman.</small></p>
      <p>The Paramount Theatre later this year will <a href="http://www.mystatesman.com/news/entertainment/bright-paramount-theatre-sign-to-light-up-congress/njxWJ/" target="_blank">raise a new landmark sign</a> reminiscent of the vertical blade that  dominated Congress Avenue from 1930 until 1964. "It's the candle on our 100th year birthday cake,"said Jim Ritts, director of the Austin Theatre Alliance, which runs the State and Paramount theaters. Sounds like a great way to celebrate throw-back-Thursday with some then-and-now photos. Also check out <a href="http://www.statesman.com/gallery/news/archives-100-years-paramount-theatre/gCQhs/" target="_blank">more historical photos of the Paramount Theatre</a>.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-8 col-md-8">
        <div id="thenAndNow">            
          <div><img src="assets/1935-paramount-sidewalk.jpg"  class="img-responsive" alt="slide 1" /></div>
          <div><img src="assets/1935-paramount-sidewalk-now.jpg" class="img-responsive" alt="slide 2" /></div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <h3 style="margin-top:0px;">1930s</h3>
        <p>A sidewalk view of the Paramount sign before 1935. The State Theater (and the sign that blocks much of the view from this angle in present day) replaced the building to the left.</p>
        <p class="caption clearfix"><em class="pull-right credit">Historical: Jordan Ellison; Contemporary: Ricardo B. Brazziell / American-Statesman</em></p>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <h3>1942</h3>
        <div id="thenAndNow2">            
          <div><img src="assets/1942-paramount-congress.jpg"  class="img-responsive" alt="slide 1" /></div>
          <div><img src="assets/1942-paramount-congress-now.jpg" class="img-responsive" alt="slide 2" /></div>
        </div>
        <p class="caption clearfix">The Paramount, State and Queen theaters dominated the Congress Avenue entertainment district in 1942. <em class="pull-right credit">Historical: Parmamount Theatre; Contemporary: Christian McDonald, American-Statesman</em></p>
      </div>
      <p></p>
    </div>


  </div>

    <?php /* Banner ad */ ?>
    <?php include "includes/banner-ad.inc";?>

    <p id="legal" class="center-block text-center"><small>© 2015 <a href="http://www.coxmediagroup.com" target="_blank">Cox Media Group</a>. By using this website, you accept the terms of our <a href="http://www.mystatesman.com/visitor_agreement/" target="_blank">Visitor Agreement</a> and <a target="_blank" href="http://www.mystatesman.com/privacy_policy/">Privacy Policy</a>, and understand your options regarding <a target="_blank" href="http://www.mystatesman.com/privacy_policy/#ad-choices">Ad Choices</a><img src="http://media.cmgdigital.com/shared/img/photos/2012/02/29/d3/da/ad_choices_logo.png" alt="AdChoices">.</small></p>

    <?php /* CMG advertising and analytics */ ?>
    <?php include "includes/project-metrics.inc"; ?>
    <?php include "includes/metrics.inc"; ?>

    <script src="dist/scripts.js"></script>



</body>
</html>
