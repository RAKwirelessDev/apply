// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  window.addEventListener('load', function () {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation')

    // Loop over them and prevent submission
    Array.prototype.filter.call(forms, function (form) {
      form.addEventListener('submit', function (event) {
        if (form.checkValidity() === false) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
  }, false)
}());
var checkboxes = $("#locs input.custom-control-input");
$("#submit, #locs input.custom-control-input").on("click", function(){
  checkboxes.each(function(index) {
    if (!$(this).is(":checked")) {
      if (index == checkboxes.length-1) {
        $("#orphan-feedback-locs").css("display", "block");
        $(checkboxes).each(function() {
          $(this).attr("required", "");
        });
      }
    } else {
      $("#orphan-feedback-locs").css("display", "none");
      $(checkboxes).each(function() {
        $(this).removeAttr("required");
      });
      return false;
    }
  })
});