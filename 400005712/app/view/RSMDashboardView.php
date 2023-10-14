<?php

    include("header.php");
?>

<body>
    <div class="row" id="user-info">
        <div class="col-6 col-a-6">
            <p>Research Study Manager: </p>
        </div>
        <div class="col-6 col-a-6">
            <p>Email: </p>
        </div>
    </div>
    <div class="button-container">
        <div class="dash-button">
            <button id="new-study-btn">Create New Study</button>
        </div>
        <div class="dash-button">
            <button id="view-all-btn">View All Studies</button>
        </div>
        <div class="dash-button">
            <button id="dlt-prev-btn">Delete Previous Study</button>
        </div>
    </div>


<?php
    include 'footer.php';
?>