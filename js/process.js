$(document).ready(function () {
    $("#gone a").click(function() { //10000
      var package_type = $("#gone a").text();

      alert(package_type)

       $.ajax({
                    type: "POST",
                    url: "process.php",
                    data: "amount=10000&package_type=Gold",
                    success: function(data) {
                       alert("success ");
                    },
                    error: function( error ){
                          alert("error in ajax form submission" + error);
                          }
                });

      
    });


  $("#sone a").click(function () { //10000
    var package_type = $("#sone a").text();

    alert(package_type)

    $.ajax({
      type: "POST",
      url: "process.php",
      data: "amount=5000&package_type=silver",
      success: function (data) {
        alert("success ");
      },
      error: function (error) {
        alert("error in ajax form submission" + error);
      }
    });


  });


  $("#bone a").click(function () { //10000
    var package_type = $("#bone a").text();

    alert(package_type)

    $.ajax({
      type: "POST",
      url: "process.php",
      data: "amount=3000&package_type=Bronze",
      success: function (data) {
        alert("success ");
      },
      error: function (error) {
        alert("error in ajax form submission" + error);
      }
    });


  });
  $("#gtwo a").click(function () { //10000
    var package_type = $("#gtwo a").text();

    alert(package_type)

    $.ajax({
      type: "POST",
      url: "process.php",
      data: "amount=50000&package_type=Gold",
      success: function (data) {
        alert("success ");
      },
      error: function (error) {
        alert("error in ajax form submission" + error);
      }
    });


  });
  $("#stwo a").click(function () { //10000
    var package_type = $("#stwo a").text();

    alert(package_type)

    $.ajax({
      type: "POST",
      url: "process.php",
      data: "amount=30000&package_type=silver",
      success: function (data) {
        alert("success ");
      },
      error: function (error) {
        alert("error in ajax form submission" + error);
      }
    });


  });
  $("#btwo a").click(function() {
    //10000
    var package_type = $("#btwo a").text();

    alert(package_type);

    $.ajax({
      type: "POST",
      url: "process.php",
      data: "amount=20000&package_type=Bronze",
      success: function(data) {
        alert("success ");
      },
      error: function(error) {
        alert("error in ajax form submission" + error);
      }
    });
  });
  $("#gthree a").click(function () {
    //10000
    var package_type = $("#gthree a").text();

    alert(package_type);

    $.ajax({
      type: "POST",
      url: "process.php",
      data: "amount=150000&package_type=Gold",
      success: function (data) {
        alert("success ");
      },
      error: function (error) {
        alert("error in ajax form submission" + error);
      }
    });
  });

  $("#sthree a").click(function() {
    //10000
    var package_type = $("#sthree a").text();

    alert(package_type);

    $.ajax({
      type: "POST",
      url: "process.php",
      data: "amount=100000&package_type=Silver",
      success: function(data) {
        alert("success ");
      },
      error: function(error) {
        alert("error in ajax form submission" + error);
      }
    });
  });

  $("#bthree a").click(function() {
    //10000
    var package_type = $("#bthree a").text();

    alert(package_type);

    $.ajax({
      type: "POST",
      url: "process.php",
      data: "amount=70000&package_type=Bronze",
      success: function(data) {
        alert("success ");
      },
      error: function(error) {
        alert("error in ajax form submission" + error);
      }
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

   
});