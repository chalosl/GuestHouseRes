<?php
//session_start();
//if (!isset($_SESSION["admin"])){
//    header("Location:adminLogin.php");
//}
//?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Villa Desmodium</title>
    <link href="dist/images/dynamic-logo-letter-d-logo-design-template-vector-8933479.jpg" rel="icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="dist/css/normalizecss.css" type="text/css">
    <link rel="stylesheet" href="dist/css/homestyle.css" type="text/css">
</head>
<body>
<!--navigation-->
<?php include "navigation.php" ?>
<!--navigation-->

<div class="row" style="margin-right: 10%;margin-left: 10%">
    <div class="col-md-7">
        <h1 style="font-size: 40px">Villa Desmodium - Admin</h1>
        <h6>Hikkaduwa</h6>
        <br>
    </div>
</div>

<div class="row" style="margin-top: 1%;margin-right: 10%;margin-left: 10%">
    <div class="col-md-12" style="border: solid lightgray 1px;"><br>
        <h3 style="color: darkgrey">Clients Of Desmodium</h3>
        <div class="table-responsive">
            <table class="table" id="tblGuest">
                <thead>
                <tr>
                    <th>Guest ID</th>
                    <th>Guest Name</th>
                    <th>Guest Country</th>
                    <th>Guest Email</th>
                    <th>Gender</th>
                    <th>Passport No</th>
                </tr>
                </thead>
                <tbody id="tblBodyGuest"></tbody>
            </table>
        </div>
        <button type="button" class="btn btn-danger" id="loadCust" style="width: 10%;float: right">Load Guest</button>
        <br>


    </div>
    <br>
    <br>
<!--    <div class="col-md-5">-->

    </div>
</div>
<br>
<br>
<div class="row" style="margin-left: 10%;margin-right: 10%;">
    <div class="col-md-12" style="border: solid lightgray 1px">
        <h3  style="color: darkgrey">Booking of Desmodium</h3>
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>Booking ID</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Adults</th>
                    <th>Childrens</th>
                    <th>Package Name</th>
                    <th>Guest ID</th>
                    <th>Payment Ammount</th>
                </tr>
                </thead>
                <tbody id="tblBodyBook"></tbody>
            </table>
        </div>
        <button type="button" class="btn btn-danger" id="loadBooking" style="width: 10%;float: right">Booking</button>
        <br>
    </div>
</div>
<br>
<br>
<div class="row" style="margin-left: 10%;margin-right: 10%;">
    <div class="col-md-5" >
        <h3  style="color: darkgrey">Manage Packages Of Demodium</h3>
        <form id="packageForm" action="admin.php" method="post" >
            <div class="row">
                <div class="col">
                    <label>Package Name</label>
                    <input type="text" name="packageName" class="form-control" placeholder="" id="packageName">
                </div>
                <div class="col">
                    <label>Tour Location</label>
                    <input type="text" name="packageTour" class="form-control" placeholder="" id="packageTour">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Package Offers</label>
                    <input type="text" name="packageOffers" class="form-control" placeholder="" id="packageOffers">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <button type="button" class="btn btn-danger" name="btnSave" id="btnSave">Save</button>
                </div>
<!--                <div class="col-md-3">-->
<!--                    <button type="button" id="btnUpdate" class="btn btn-danger">Update</button>-->
<!--                </div>-->
<!--                <div class="col-md-3">-->
<!--                    <button type="button" class="btn btn-danger">Delete</button>-->
<!--                </div>-->
            </div>
        </form>

    </div>
    <div class="col-md-7" style="border: solid lightgray 1px">
        <h3  style="color: darkgrey">View Packages</h3>
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>Package Name</th>
                    <th>Package Tour</th>
                    <th>Package Offers</th>

                </tr>
                </thead>
                <tbody id="packageBody"></tbody>
            </table>
        </div>
        <button type="button" class="btn btn-danger" id="loadPackages" style="width: 15%;float: right">Packages</button>
    </div>
</div>
<br>
<hr>
<br>
<br>

<!--footer of the page-->
<?php include "footer.php" ?>
<!--footer of the page-->

<script src="dist/js/jquery-3.3.1.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script>
    $('#btnSave').click(function () {
        let packForm = $('#packageForm').serialize();
        $.ajax({
            url: "api/service/PackageService.php",
            method: "POST",
            async: true,
            data: packForm
        }).done(function (res) {
            alert(res);
        });

    });

   $('#loadCust').click(function () {
       $('#tblBodyGuest').empty();
       $.ajax({
           url: "api/service/GuestService.php",
           method: "GET",
           async: true,
           dataType:"json"
       }).done(function (resp) {
           for(var i in resp){
               var tempA=resp[i];
                let row="<tr><td>" + tempA[0] + "</td><td>" + tempA[1] + "</td><td>" + tempA[2] + "</td><td>" + tempA[3] + "</td><td>" + tempA[4] + "</td><td>" +tempA[5]+ "</td></tr>";
               $('#tblBodyGuest').append(row);
           }
       });
   });

    $('#loadBooking').click(function () {
        $('#tblBodyBook').empty();
        $.ajax({
            url: "api/service/BookingService.php",
            method: "GET",
            async: true,
            dataType:"json"
        }).done(function (resp) {
            for(var i in resp){
                var tempA=resp[i];
                let row="<tr><td>" + tempA[0] + "</td><td>" + tempA[1] + "</td><td>" + tempA[2] + "</td><td>" + tempA[3] + "</td><td>" + tempA[4] + "</td><td>" +tempA[5]+ "</td><td>" +tempA[6]+"</td><td>" +tempA[7]+ "</td></tr>";
                $('#tblBodyBook').append(row);
            }
        });
    });

    $('#loadPackages').click(function () {
        $('#packageBody').empty();
        $.ajax({
            url: "api/service/PackageService.php",
            method: "GET",
            async: true,
            dataType:"json"
        }).done(function (resp) {
            for(var i in resp){
                var tempA=resp[i];
                let row="<tr><td>" + tempA[0] + "</td><td>" + tempA[1] + "</td><td>" + tempA[2] + "</td></tr>";
                $('#packageBody').append(row);
            }
        });
    });




</script>


</body>
</html>