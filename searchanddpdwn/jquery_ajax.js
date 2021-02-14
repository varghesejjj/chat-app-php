$(document).ready(function () {
  $.ajax({
    type: "get",
    async: false,
    url: "onload.php",
    success: function (resp) {
      $("#selector-cont").html(resp);
    },
    error: function (e) {
      console.log(e);
    },
  });
});

function selected() {
  let productId = $("#selector").val();
  if (productId) {
    $.ajax({
      type: "get",
      async: false,
      url: "product.php",
      data: { name: productId },
      success: function (resp) {
        $("#content1").html(resp);
      },
      error: function (e) {},
    });
  } else {
    {
      $("#content1").html("");
    }
  }
}

function searching() {
  let myWord = $("#searchf").val();
  if (myWord != "") {
    $.ajax({
      type: "get",
      async: false,
      url: "search.php",
      data: { word: myWord },
      success: function (resp) {
        $("#content").html(resp);
      },
      error: function (e) {},
    });
  } else {
    $("#content").html("");
  }
}
