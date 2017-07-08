<?php include("nav.php"); ?>

    <div class="countercontain">
        <div class="countblock" id="dayblock">
            <div class="counter" id="days"></div>
            <div class="countcaption">Days</div>
        </div>
        <div class="countblock" id="hourblock">
            <div class="counter" id="hours"></div>
            <div class="countcaption">Hours</div>
        </div>
        <div class="countblock" id="minuteblock">
            <div class="counter" id="minutes"></div>
            <div class="countcaption">Minutes</div>
        </div>
        <div class="countblock" id="secondblock">
            <div class="counter" id="seconds"></div>
            <div class="countcaption">Seconds</div>
        </div>
    </div>
<!-- Main image and Date logo -->
<div class="mainimgcontain">
    <img class="mainimg"src ="/images/jj2.jpg" alt="John and Jenna" />
</div>
<div class="countercontainmobile">
    <div class="counterblockmobile">
        <div class ="countermobile" id="daysmobile"></div>
        <div class="countcaptionmobile">Days</div>
    </div>
    <div class="counterblockmobile">
        <div class ="countermobile" id="hoursmobile"></div>
        <div class="countcaptionmobile">Hours</div>
    </div>
    <div class="counterblockmobile">
        <div class ="countermobile" id="minutesmobile"></div>
        <div class="countcaptionmobile">Minutes</div>
    </div>
    <div class="counterblockmobile">
        <div class ="countermobile" id="secondsmobile"></div>
        <div class="countcaptionmobile">Seconds</div>
    </div>
</div>

<!-- Including App Links Section -->
<?php include("iconnav.php"); ?>

<!-- Including Our Story Section -->
<?php include("ourstory.php"); ?>

<!--Including Footer-->
<?php include("footer.php"); ?>
