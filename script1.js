(function () {
    'use strict';
  
    var forms = document.querySelectorAll('form');
  
    Array.prototype.slice.call(forms).forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
  
        form.classList.add('was-validated');
  
        // Display error messages for each invalid input
        var inputs = form.querySelectorAll('.form-control');
        Array.prototype.slice.call(inputs).forEach(function (input) {
          if (!input.checkValidity()) {
            input.classList.add('is-invalid');
            var error = input.nextElementSibling;
            if (error && error.classList.contains('invalid-feedback')) {
              error.style.display = 'block';
              
            }
          } else {
            input.classList.remove('is-invalid');
            var error = input.nextElementSibling;
            if (error && error.classList.contains('invalid-feedback')) {
              error.style.display = 'none';
            }
          }
        });
      }, false);
  
      // Convert lowercase letters to uppercase and prevent numbers in input fields
      var uppercaseInputs = form.querySelectorAll('.uppercase-input');
      Array.prototype.slice.call(uppercaseInputs).forEach(function (input) {
        input.addEventListener('input', function () {
          var start = this.selectionStart;
          var end = this.selectionEnd;
          this.value = this.value.toUpperCase().replace(/[^A-Z]/g, '');
          this.setSelectionRange(start, end);
        });
      });
  
      // Prevent input of numbers in input fields
      var noNumbersInputs = form.querySelectorAll('.no-numbers-input');
      Array.prototype.slice.call(noNumbersInputs).forEach(function (input) {
        input.addEventListener('input', function () {
          this.value = this.value.replace(/[0-9]/g, '');
        });
      });
    });
  })();
  