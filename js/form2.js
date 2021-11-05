$(document).ready(function () {
  // alert auto close
  $(".alert")
    .delay(4000)
    .slideUp(200, function () {
      $(this).alert("close");
    });
});
