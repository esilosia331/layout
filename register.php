<?php

include 'includes/header.php';

?>
</head>

<body>
  <div class="container">
    <h2>Register</h2>
    <form action="register.php" method="POST">
      <label class="form-label" for="username">Username:</label>
      <input
        onkeyup="validateName()"
        class="form-control"
        type="text"
        id="username"
        name="username"
        required />
      <div id="usernameMessage" class="form-text">
        We'll never share your email with anyone else.
      </div>

      <label class="form-label" for="email">Email:</label>
      <input
        class="form-control"
        type="email"
        id="email"
        name="email"
        required />
      <div id="emailMessage" class="form-text">
        We'll never share your email with anyone else.
      </div>

      <label class="form-label" for="password">Password:</label>
      <input
        class="form-control"
        type="password"
        id="password"
        name="password"
        required />

      <label class="form-label" for="confirm">Confirm Password:</label>
      <input
        class="form-control"
        type="password"
        id="confirm"
        name="confirm"
        required />

      <button type="Register" class="btn btn-primary">Save</button>
    </form>
  </div>

  <script>
    function validateName() {
      const nameInput = document.getElementById("username").value.trim();
      const result = document.getElementById("usernameMessage");

      // Regex: Only allows letters, spaces, hyphens, and apostrophes
      const nameRegex = /^[A-Za-z\s'-]+$/;

      if (nameInput === "") {
        result.textContent = "Name cannot be empty.";
        result.style.color = "red";
      } else if (!nameRegex.test(nameInput)) {
        result.textContent =
          "Invalid name. Only letters, spaces, hyphens, and apostrophes are allowed.";
        result.style.color = "red";
      } else {
        result.textContent = "Valid name!";
        result.style.color = "green";
      }
    }

    // Function to validate email structure
    function validateEmail(email) {
      const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return regex.test(email);
    }

    // Email input field
    const emailField = document.getElementById("email");
    const message = document.getElementById("emailMessage");

    // Live validation as user types
    emailField.addEventListener("input", function() {
      const emailValue = emailField.value;

      if (validateEmail(emailValue)) {
        message.textContent = "Valid email";
        message.style.color = "green";
      } else {
        message.textContent = "Invalid email";
        message.style.color = "red";
      }
    });
  </script>
</body>


<?php

include 'includes/footer.php';

?>