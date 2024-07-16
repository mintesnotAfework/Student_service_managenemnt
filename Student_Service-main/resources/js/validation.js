function validateLoginForm() {
    // Get references to input fields
    const idInput = document.getElementById('id');
    const passwordInput = document.getElementById('password');
    const error = document.getElementById("error");

    // Clear any previous error messages (assuming Tailwind CSS classes)
    const form = document.getElementById('form_site_reg');
    form.classList.remove('border-red-500'); // Remove error border for form

    // ID validation
    let idErrorMessage = '';
    if (!idInput.value) {
    idErrorMessage = 'ID is required.';
    } else if (!/^\d{8}$/.test(idInput.value)) {
    idErrorMessage = 'ID must contain exactly 8 digits.';
    }

    // Password validation (high complexity)
    let passwordErrorMessage = '';
    if (!passwordInput.value) {
    passwordErrorMessage = 'Password is required.';
    passwordInput.focus();
    } else if (passwordInput.value.length < 8) {
    passwordErrorMessage = 'Password must be at least 8 characters long.';
    }
    // else {
    // // Check for character classes (uppercase, lowercase, numbers, symbols)
    // const hasUppercase = /[A-Z]/.test(passwordInput.value);
    // const hasLowercase = /[a-z]/.test(passwordInput.value);
    // const hasNumber = /\d/.test(passwordInput.value);
    // const hasSymbol = /\W/.test(passwordInput.value);

    // if (!hasUppercase || !hasLowercase || !hasNumber || !hasSymbol) {
    //     passwordErrorMessage = 'Password must contain at least one uppercase letter, lowercase letter, number, and symbol.';
    // }

    // // Additional complexity checks (optional)
    // // - Minimum number of occurrences for each character class
    // // - Disallowed characters or patterns
    // }

    // Display error messages if any
    if (idErrorMessage || passwordErrorMessage) {
    form.classList.add('dark:border-red-500'); // Add error border for form

    // Add error messages to specific input elements
    if (idErrorMessage) {
        idInput.classList.add('dark:border-red-500', 'text-red-500'); // Error styles for ID input
    }
    if (passwordErrorMessage) {
        passwordInput.classList.add('border-red-500', 'text-red-500'); // Error styles for password input
    }
    error.classList.remove("hidden");
    return false; // Prevent form submission
    }

    // All validations passed, allow form submission
    return true;
}

// Attach event listener to form submission

const loginform = document.getElementById('form_site_reg');
loginform.addEventListener('submit', function(event) {
    if (!validateLoginForm()) {
    event.preventDefault(); // Prevent default form submission
    }
});


function validateSiteRegForm() {
    // Get references to input fields
    const idInput = document.getElementById('id');
    const passwordInput = document.getElementById('password');
  
    // Clear any previous error messages
    const form = document.getElementById('form_site_reg');
    form.classList.remove('border-red-500'); // Remove error border for form
    idInput.classList.remove('border-red-500', 'text-red-500'); // Remove error styles for ID input
    passwordInput.classList.remove('border-red-500', 'text-red-500'); // Remove error styles for password input
  
    // ID validation
    let idErrorMessage = '';
    if (!idInput.value) {
      idErrorMessage = 'ID is required.';
    } else if (!/^\d{8}$/.test(idInput.value)) {
      idErrorMessage = 'ID must contain exactly 8 digits.';
    }
  
    // Password validation (high complexity)
    let passwordErrorMessage = '';
    if (!passwordInput.value) {
      passwordErrorMessage = 'Password is required.';
    } else if (passwordInput.value.length < 8) {
      passwordErrorMessage = 'Password must be at least 8 characters long.';
    } else {
      // Check for character classes (uppercase, lowercase, numbers, symbols)
      const hasUppercase = /[A-Z]/.test(passwordInput.value);
      const hasLowercase = /[a-z]/.test(passwordInput.value);
      const hasNumber = /\d/.test(passwordInput.value);
      const hasSymbol = /\W/.test(passwordInput.value);
  
      if (!hasUppercase || !hasLowercase || !hasNumber || !hasSymbol) {
        passwordErrorMessage = 'Password must contain at least one uppercase letter, lowercase letter, number, and symbol.';
      }
  
      // Additional complexity checks (optional)
      // - Minimum number of occurrences for each character class
      // - Disallowed characters or patterns
    }
  
    // Display error messages if any
    if (idErrorMessage || passwordErrorMessage) {
      form.classList.add('border-red-500'); // Add error border for form
  
      // Add error messages to specific input elements
      if (idErrorMessage) {
        idInput.classList.add('border-red-500', 'text-red-500'); // Add error styles for ID input
      }
      if (passwordErrorMessage) {
        passwordInput.classList.add('border-red-500', 'text-red-500'); // Add error styles for password input
      }
      return false; // Prevent form submission
    }
  
    // All validations passed, allow form submission
    return true;
  }
  
  // Attach event listener to form submission
  const form_site_regform = document.getElementById('form_site_reg');
  form_site_regform.addEventListener('submit', function(event) {
    if (!validateLoginForm()) {
      event.preventDefault(); // Prevent default form submission
    }
  });
  