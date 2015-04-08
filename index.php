<?php
$title = 'Asian Arts Talents Foundation (AATF) Home Page';
include_once('header.php');
?>
<audio autoplay>
  <source src="/music.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>

<div class="container">
<div class="page-header">
<h1><?php print $title ?></h1>
</div>
<?php
$width = 593;
$height =round($width / 1.5);
?>
        <!-- Jssor Slider Begin -->
        <!-- To move inline styles to css file/block, please specify a class name for each element. -->
        <!-- ================================================== -->
        <div id="slider1_container" style="display: none; position: relative; margin: 0 auto; width: <?php print $width ?>px; height: <?php print $height ?>px; overflow: hidden;">

            <!-- Loading Screen -->
            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block; background-color: #000; top: 0px; left: 0px;width: 100%; height:100%;">
                </div>
                <div style="position: absolute; display: block; background: url(assets/images/loading.gif) no-repeat center center; top: 0px; left: 0px;width: 100%;height:100%;">
                </div>
            </div>

            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: <?php print $width ?>px; height: <?php print $height ?>px; overflow: hidden;">
<?php
$pattern = '/(\.jpg$)|(\.png$)|(\.jpeg$)|(\.gif$)/'; // valid image extensions
$dirname = 'images/Gallery';
if ($handle = opendir($dirname)) {
  while (false !== ($file = readdir($handle))) {
    if (preg_match($pattern, $file)) { // if this file is a valid image
?>
            <!-- Slides Container -->
                <div>
                <img u="image" src2="<?php print $dirname . '/' . $file ?>" />
                </div>
<?php
    };
  };
  closedir($handle);
};
?>
            </div>

            <!--#region Bullet Navigator Skin Begin -->
            <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
            <style>
                /* jssor slider bullet navigator skin 05 css */
                /*
                .jssorb05 div           (normal)
                .jssorb05 div:hover     (normal mouseover)
                .jssorb05 .av           (active)
                .jssorb05 .av:hover     (active mouseover)
                .jssorb05 .dn           (mousedown)
                */
                .jssorb05 {
                    position: absolute;
                }
                .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
                    position: absolute;
                    /* size of bullet elment */
                    width: 16px;
                    height: 16px;
                    background: url(assets/images/b05.png) no-repeat;
                    overflow: hidden;
                    cursor: pointer;
                }
                .jssorb05 div { background-position: -7px -7px; }
                .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
                .jssorb05 .av { background-position: -67px -7px; }
                .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }
            </style>
            <!-- bullet navigator container -->

<!--            <div u="navigator" class="jssorb05" style="bottom: 16px; right: 6px;">-->
                <!-- bullet navigator item prototype -->
                <div u="prototype"></div>
   <!--         </div>  -->

            <!--#endregion Bullet Navigator Skin End -->

            <!--#region Arrow Navigator Skin Begin -->
            <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
            <style>
                /* jssor slider arrow navigator skin 11 css */
                /*
                .jssora11l                  (normal)
                .jssora11r                  (normal)
                .jssora11l:hover            (normal mouseover)
                .jssora11r:hover            (normal mouseover)
                .jssora11l.jssora11ldn      (mousedown)
                .jssora11r.jssora11rdn      (mousedown)
                */
                .jssora11l, .jssora11r {
                    display: block;
                    position: absolute;
                    /* size of arrow element */
                    width: 37px;
                    height: 37px;
                    cursor: pointer;
                    background: url(assets/images/a11.png) no-repeat;
                    overflow: hidden;
                }
                .jssora11l { background-position: -11px -41px; }
                .jssora11r { background-position: -71px -41px; }
                .jssora11l:hover { background-position: -131px -41px; }
                .jssora11r:hover { background-position: -191px -41px; }
                .jssora11l.jssora11ldn { background-position: -251px -41px; }
                .jssora11r.jssora11rdn { background-position: -311px -41px; }
            </style>
            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora11l" style="top: 123px; left: 8px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora11r" style="top: 123px; right: 8px;">
            </span>
            <!--#endregion Arrow Navigator Skin End -->
            <a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a>
        </div>
        <!-- Jssor Slider End -->

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-5">
                <img class="featurette-image img-responsive" src="images/aatflogo-bw-transparent.png" alt="AATF Logo">
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading">Purpose</h2>
<p class="lead">The specific purpose of Asian Arts Talents Foundation is to raise funds to support Asian arts, education, and culture; to sponsor public performances; to offer grants and scholarships for talented, young Asians worldwide; to help and get involved with the community during disasters and catastrophes; and to organize summer activities for younger generations. AATF has been a non-profit organization since 2003.</p>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Upcoming Performance</h2>
                <div class="lead">
<h3>Mulan</h3>
<p><label>Date:</label>
June 13, 2015 (Saturday)</p>
<p><label>Time:</label>
7:30PM</p>
<p><label>Place:</label>
<address>
San Gabriel Mission Playhouse<br />
320 S. Mission Dr.<br />
San Gabriel, California 91776<br />
</address></p>
<p><label>Email Address:</label> info@aatf.us</p>
                </div>
            </div>
            <div class="col-md-5">
                <a href="AATF Flyer.pdf"><img class="featurette-image img-responsive" src="AATF Flyer.jpg" alt="Flyer"></a>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-5">
                <div class="lead">
<?php
$count = 0;
if ($activitieshandle) {
  while (($buffer = fgets($activitieshandle)) != false) {
    list($date, $event) = preg_split('/\s-\s/', trim($buffer));
    list($month) = preg_split('/\s/', $date);
    if ($current_month == $month) {
?>
<p><strong><?php print $date ?></strong></p>
<p><?php print $event ?></p>
<?php
      $count++;
    }
  }
  if ($count == 0) {
?>
<p>No events scheduled for this month</p>
<?php
  }
} else {
?>
<p>None Currently</p>
<?php
}
?>
                </div>
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading">Current Month's Activities</h2>
            </div>
        </div>
        <!-- /END THE FEATURETTES -->

<?php include_once('footer.php'); ?>
