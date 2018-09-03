$(document).ready(function () {
    $("#gone a").click(function() {//10000
      var package_type = $("#gone a").text();

      // alert(package_type)

       $.ajax({
                    type: "POST",
                    url: "process.php",
                    data: "amount=100&package_type=Gold",
                    // success: function(data) {
                    //    confirm(" confirm");
                    // },
                    // error: function( error ){
                    //       alert("error in ajax form submission" + error);
                    //       }
                });

      
    });

    //disable double clicking
  // $("a.no_2_click").one("click", function() {
  //   $(this).click(function() {
    
  //     return false;
  //   });
  // });


  $("#sone a").click(function () { //10000
    var package_type = $("#sone a").text();

    // alert(package_type)

    $.ajax({
      type: "POST",
      url: "process.php",
      data: "amount=50&package_type=silver",
      // // success: function (data) {
      // //   confirm("success ");
      // },
      // error: function (error) {
      //   alert("error in ajax form submission" + error);
      // }
    });


  });


  $("#bone a").click(function () { //10000
    var package_type = $("#bone a").text();

    // alert(package_type)

    $.ajax({
      type: "POST",
      url: "process.php",
      data: "amount=30&package_type=Bronze",
      // success: function (data) {
      //   alert("success ");
      // },
      // error: function (error) {
      //   alert("error in ajax form submission" + error);
      // }
    });


  });
  $("#gtwo a").click(function () { //10000
    var package_type = $("#gtwo a").text();

    // alert(package_type)

    $.ajax({
      type: "POST",
      url: "process.php",
      data: "amount=500&package_type=Gold",
      // success: function (data) {
      //   alert("success ");
      // },
      // error: function (error) {
      //   alert("error in ajax form submission" + error);
      // }
    });


  });
  $("#stwo a").click(function () { //10000
    var package_type = $("#stwo a").text();

    // alert(package_type)

    $.ajax({
      type: "POST",
      url: "process.php",
      data: "amount=300&package_type=silver",
      // success: function (data) {
      //   alert("success ");
      // },
      // error: function (error) {
      //   alert("error in ajax form submission" + error);
      // }
    });


  });
  $("#btwo a").click(function() {
    //10000
    var package_type = $("#btwo a").text();

    // alert(package_type);

    $.ajax({
      type: "POST",
      url: "process.php",
      data: "amount=200&package_type=Bronze",
      // success: function(data) {
      //   alert("success ");
      // },
      // error: function(error) {
      //   alert("error in ajax form submission" + error);
      // }
    });
  });
  $("#gthree a").click(function () {
    //10000
    var package_type = $("#gthree a").text();

    // alert(package_type);

    $.ajax({
      type: "POST",
      url: "process.php",
      data: "amount=1500&package_type=Gold",
      // success: function (data) {
      //   alert("success ");
      // },
      // error: function (error) {
      //   alert("error in ajax form submission" + error);
      // }
    });
  });

  $("#sthree a").click(function() {
    //10000
    var package_type = $("#sthree a").text();

    // alert(package_type);

    $.ajax({
      type: "POST",
      url: "process.php",
      data: "amount=1000&package_type=Silver",
      // success: function(data) {
      //   alert("success ");
      // },
      // error: function(error) {
      //   alert("error in ajax form submission" + error);
      // }
    });
  });

  $("#bthree a").click(function() {
    //10000
    var package_type = $("#bthree a").text();

    // alert(package_type);

    $.ajax({
      type: "POST",
      url: "process.php",
      data: "amount=700&package_type=Bronze",
      // success: function(data) {
      //   alert("success ");
      // },
      // error: function(error) {
      //   alert("error in ajax form submission" + error);
      // }
    });
  });


  $("#confirmbutton button").click(function () { //10000
    var to_be_paid_by = $("id='tobepaidby").text();
    var data = {
      confirm:'true',
      To_Be_Paid_By :json.dumps(to_be_paid_by)
    }

      alert("Confirmation received")

      $.ajax({
        type: "POST",
        url: "confirm.php",
        data: data,
        success: function (data) {
          alert("success ");
        },
        error: function (error) {
          alert("error in ajax form submission" + error);
        }
      });


    });
  $("#confirmbutton button").click(function () { //10000
    var to_be_paid_by = $("id='tobepaidby").text();
    var data = {
      confirm: 'true',
      To_Be_Paid_By: json.dumps(to_be_paid_by)
    }

    alert("Confirmation received")

    $.ajax({
      type: "POST",
      url: "confirm.php",
      data: data,
      success: function (data) {
        alert("success ");
      },
      error: function (error) {
        alert("error in ajax form submission" + error);
      }
    });


  });

});