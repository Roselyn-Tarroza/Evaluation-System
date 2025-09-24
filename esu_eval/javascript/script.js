function validateForm() {
  let username = document.getElementById("username").value.trim();
  let password = document.getElementById("password").value.trim();
  let errorMsg = document.getElementById("error-msg");

  if (username === "" || password === "") {
    errorMsg.textContent = "Both fields are required!";
    return false;
  }
  return true; // Allow form submission
}
