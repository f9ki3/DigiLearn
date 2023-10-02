        // Function to validate the password strength
        function validatePassword() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;
            var passwordStrength = document.getElementById("password-strength");

            // Check if passwords match
            if (password !== confirmPassword) {
                passwordStrength.innerHTML = "Passwords do not match!";
                return;
            }

            // Check if the password meets strength criteria
            var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[0-9])(?=.{6,})");
            
            if (strongRegex.test(password)) {
                passwordStrength.innerHTML = "Strong Password!";
            } else {
                passwordStrength.innerHTML = "Weak Password!";
            }
        }
