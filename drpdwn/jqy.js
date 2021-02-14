$(document).ready(function () {
    $.ajax({
      type: "get",
      async: false,
      url: "get_groups.php",
      success: function (resp) {
        $("#selector-cont1").html(resp);
      },
      error: function (e) {
        console.log(e);
      },
    });
  });
  
  function selected() {
    let groupId = $("#selector").val();
    if (groupId) {
      $.ajax({
        type: "get",
        async: false,
        url: "get_planes.php",
        data: { groupId: groupId },
        success: function (resp) {
          $("#selector-cont2").html(resp);
        },
        error: function (e) {},
      });
    } else {
      {
        $("#content1").html("");
      }
    }
  }