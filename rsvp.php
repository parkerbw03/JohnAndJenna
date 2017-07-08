<?php include("nav.php"); ?>

<div class="text-center">
    <h1>John & Jenna</h1>
</div>

<form class="rsvp-form">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                <h2>RSVP</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                <div class="form-group">
                    <label for="firstName">First Name:</label>
                    <input type="text" class="form-control" id="firstName" placeholder="First Name">
                </div>
            </div>
            <div class="col-sm-4 col-xs-10 col-xs-offset-1">
                <div class="form-group">
                    <label for="lastName">Last Name:</label>
                    <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                <label for="numberPeople">Number of People Attending from your Party:</label>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1 col-sm-offset-2 col-xs-3 col-xs-offset-1">
                <div class="form-group">
                    <input type="text" class="form-control" id="numberPeople" placeholder="" maxlength="1">
                </div>
            </div>
        </div>   
        <div class="row">
            <div class="text-center">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </div>
</form>

<?php include("footer.php"); ?>