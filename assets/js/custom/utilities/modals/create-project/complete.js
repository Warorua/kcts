"use strict";

// Class definition
var KTModalCreateProjectComplete = (function () {
  // Variables
  var startButton;
  var form;
  var stepper;

  // Private functions
  var handleForm = function () {
    startButton.addEventListener("click", function () {
      stepper.goTo(1);
    });

    // Handle form submit
    submitButton.addEventListener("click", function (e) {
      // Prevent button default action
      e.preventDefault();

      // Validate form
      validator.validate().then(function (status) {
        if (status == "Valid") {
          // Show loading indication
          submitButton.setAttribute("data-kt-indicator", "on");

          // Disable button to avoid multiple click
          submitButton.disabled = true;

          // Simulate ajax request
          setTimeout(function () {
            // Hide loading indication
            submitButton.removeAttribute("data-kt-indicator");

            // Enable button
            submitButton.disabled = false;

            // Show message popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
            Swal.fire({
              text: "Project successfully created!",
              icon: "success",
              buttonsStyling: false,
              confirmButtonText: "Ok, got it!",
              customClass: {
                confirmButton: "btn btn-primary",
              },
            }).then(function (result) {
              if (result.isConfirmed) {
                //form.querySelector('[name="email"]').value= "";
                //form.querySelector('[name="password"]').value= "";

                form.submit(); // submit form
                //var redirectUrl = form.getAttribute('data-kt-redirect-url');
                if (redirectUrl) {
                  location.href = redirectUrl;
                }
              }
            });
          }, 2000);
        } else {
          // Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
          Swal.fire({
            text: "Sorry, looks like there are some errors detected, please try again.",
            icon: "error",
            buttonsStyling: false,
            confirmButtonText: "Ok, got it!",
            customClass: {
              confirmButton: "btn btn-primary",
            },
          });
        }
      });
    });
  };

  return {
    // Public functions
    init: function () {
      form = KTModalCreateProject.getForm();
      stepper = KTModalCreateProject.getStepperObj();
      startButton = KTModalCreateProject.getStepper().querySelector(
        '[data-kt-element="complete-start"]'
      );
      submitButton = document.querySelector("#kt_project_submit");

      handleForm();
    },
  };
})();

// Webpack support
if (typeof module !== "undefined" && typeof module.exports !== "undefined") {
  window.KTModalCreateProjectComplete = module.exports =
    KTModalCreateProjectComplete;
}
