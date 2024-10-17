function handleLoginChange() {
  var containerLogin = document.getElementById("container_login");
  if (containerLogin.style.display === "block") {
    containerLogin.style.display = "none";
  } else {
    containerLogin.style.display = "block";
  }
}