<?php
//session_start();
//if (!isset($_SESSION["admin"])){
//    header("Location:index.php");
//}
//?>
<!---->


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
<?php include "navigation.php"; ?>
<!--navigation-->

<div class="row" style="margin-right: 10%;margin-left: 10%;margin-top: 3%">
    <div class="col-md-7">
        <h1 style="font-size: 40px">Villa Desmodium</h1>
        <h6>Hikkaduwa</h6>
        <br>
        <hr >
        <br>
        <h6>Welcome to my desmodium,its located in the heart of world famous Hikkaduwa and just only one foot step to beach.<br><br>Non A/C Rooms<br>Hot Warter<br>BBQ Facilities<br>2 Double Beds <br> 1 Single Bed<br>$25 Per-Night</h6>
        <br>
        <h5>Summary Of Desmodium</h5>
        <br>
        <div class="row" style="margin-right: 3%">

            <br>
            <div class="col-md-3" style="border: solid lightgray 1px"><br>
                <i class="fas fa-users" style="font-size: 40px;"></i><h6 >5 People</h6>
            </div>

            <div class="col-md-3" style="border: solid lightgray 1px"><br>
                <i class="fas fa-bed" style="font-size: 40px;"></i><h6 >3 BedRooms</h6>

            </div>
            <div class="col-md-3" style="border: solid lightgray 1px"><br>
                <i class="fas fa-bed" style="font-size: 40px;"></i><h6 >3 Beds</h6>

            </div>
            <div class="col-md-3" style="border: solid lightgray 1px"><br>
                <i class="fas fa-bath" style="font-size: 40px;"></i><h6 >2 Baths</h6>
            </div>
        </div>
    </div>

    <div class="col-md-5" style="border: solid lightgray 1px"><br>

        <form  id="CustomerForm">
            <h3>Register With Desmodium</h3>
            <br>
            <br>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="CustName" placeholder="First name" id="custName">
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="custname" placeholder="Last name">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="custCountry" id="custCountry"  placeholder="Country">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" id="custPassPort" name="custPassPort" placeholder="PassPort-No">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" id="custEmail" name="custEmail" placeholder="Email">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" id="custMobile" name="custMobile" placeholder="Contact No">
                </div>
            </div>
            <br>
            <button type="button" id="btnRegister" class="btn btn-danger">Register</button>
            <br>
            <br>
            <h6 style="text-align: center;color: darkgrey">Registration Free</h6>
        </form>
    </div>
    </form>
</div>
</div>


<br>
<h3 style="margin-left: 10%" >Location Of Desmodium</h3>
<br>
<div class="row" style="margin-right: 10%;margin-left: 10%">
    <br>
    <div class="col-md-7" id="googleMap" style="width:100%;height:400px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.5233853294733!2d80.11076529271944!3d6.124408327134527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae177c286fb6683%3A0x26533d771946b360!2zNsKwMDcnMjcuNCJOIDgwwrAwNic0My4wIkU!5e0!3m2!1sen!2slk!4v1543777640346" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>    </div>
    <br>
    <br>
    <div class="col-md-5" style="border: solid lightgray 1px">
        <br>
        <h4>Reserve Now</h4>
        <form id="bookingForm">
            <div class="row">
                <div class="col">
                    <label>Guest Name</label>
                    <input type="text" class="form-control" name="guestname" placeholder="" id="guestname">
                </div>
                <div class="col">
                    <label>Your Id</label>
                    <input type="text" class="form-control" id="guestid" name="guestid" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Check In</label>
                    <input type="date" class="form-control" name="checkIn" placeholder="Check In" id="checkin">
                </div>
                <div class="col">
                    <label>Check Out</label>
                    <input type="date" class="form-control" name="checkOut" placeholder="Check Out">
                </div>
                <div class="col">
                    <label>Nights</label>
                    <input type="text" class="form-control" name="nights" placeholder="" id="nights">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label>Adults</label>
                    <input type="text" class="form-control" name="adult" placeholder="">
                </div>
                <div class="col">
                    <label>Children</label>
                    <input type="text" class="form-control" name="children" placeholder="">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Pack" id="family" value=" FamilyPack">
                        <label class="form-check-label" for="inlineRadio1">Family Pack</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Pack" id="friends" value="FriendsPack">
                        <label class="form-check-label" for="inlineRadio2">Friends Pack</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Pack" id="coupe" value="CouplePack">
                        <label class="form-check-label" for="inlineRadio2">Couple Pack</label>
                    </div>
                </div>
            </div>

            <div class="col">
                <label>Payment</label>
                <input type="text" class="form-control" name="payment" placeholder="" id="payments">
            </div>
        </form>
        <br>
        <button type="button" class="btn btn-danger" id="btnBook">Booking</button>
        <br>
        <br>
    </div>
</div>
<br>
<br>
<br>
<br>
<h3 style="margin-left: 10%">Some Views Of Desmodium</h3>
<br>
<div class="row" style="margin-right: 10%;margin-left: 10%">
    <div class="col-md-2">
        <img src="dist/images/sofa.jpg" class="rounded mx-auto d-block" alt="..." style="width: 200px;height: 175px"><br>
    </div>
    <div class="col-md-2">
        <img src="dist/images/Bathroom.jpg" class="rounded mx-auto d-block" alt="..." style="width: 200px;height: 175px"><br>
    </div>
    <div class="col-md-2">
        <img src="dist/images/bedroom.jpg" class="rounded mx-auto d-block" alt="..." style="width: 200px;height: 175px"><br>
    </div>
    <div class="col-md-2">
        <img src="dist/images/living.jpg" class="rounded mx-auto d-block" alt="..." style="width: 200px;height: 175px"><br>
    </div>
    <div class="col-md-2">
        <img src="dist/images/blueLotus.jpg" class="rounded mx-auto d-block" alt="..." style="width: 200px;height: 175px"><br>
    </div>
    <div class="col-md-2">
        <img src="dist/images/garden.jpg" class="rounded mx-auto d-block" alt="..." style="width: 200px;height: 175px"><br>
    </div>
    <div class="col-md-1"></div>
</div>
<br>
<hr>
<br>
<br>
<!--footer-->

<?php include "footer.php"; ?>
<!--footer-->

<script src="dist/js/jquery-3.3.1.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script>

  $('#btnRegister').click(function () {
      let CustForm =$('#CustomerForm').serialize();
      $.ajax({
          url: "api/service/GuestService.php",
          method: "POST",
          async: true,
          data: CustForm
      }).done(function (resp) {
          alert(resp);
      });
  });

  $('#btnBook').click(function () {
      let BookForm =$('#bookingForm').serialize();
      $.ajax({
          url: "api/service/BookingService.php",
          method: "POST",
          async: true,
          data: BookForm
      }).done(function (resp) {
          alert(resp);
      });
  });


  $("#guestid").click(function () {
      // alert("");
      $.ajax({
          url:"api/service/GuestService.php",
          method: "GET",
          async: true,
          dataType:"json"
      }).done(function (resp) {
          alert("Searched");
          var name =$('#guestname').val();
          alert(name);
          var gid;
          for (var i in resp){
              var temp=resp[i];
              if(name==temp[1]){
                  gid=temp[0];
              }
          }
          $('#guestid').val(gid);
      });
  });

  $("#payments").click(function () {
     var night=$("#nights").val();
     var total=night*25;
     $("#payments").val(total);

  })



</script>


</body>
</html>