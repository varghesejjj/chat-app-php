let flag = 0;
function searching() {
  flag = 0
  let myWord = $("#searchf").val();
  if (myWord != "") {
    if (myWord.toLowerCase().includes("differences to")) {
      flag = 1;
    }
    let words = myWord.split("Differences to ");
    myWord = words[words.length - 1];
    
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

function puttosearch(selectedWord) {
  if (flag == 1) {
    originalText = $("#searchf").val();
    originalText = originalText.substring(0, originalText.indexOf("Differences to ") + 15);
    console.log(originalText);
    $("#searchf").val(originalText + selectedWord);
  } else {
    $("#searchf").val(selectedWord + " ");
  }
}
