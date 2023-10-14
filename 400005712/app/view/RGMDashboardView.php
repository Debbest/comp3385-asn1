<?php
    require '../controller/DashboardController.php';
    include 'header.php';
?>
<body>
    <div class="container" id="user-info">

        <p>Research Group Manager: </p>
        <p>Email: </p>

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
        <div class="dash-button">
            <button id="new-res-btn">Create New Researcher</button>
        </div>
    </div>


<?php
    include 'footer.php';
?>