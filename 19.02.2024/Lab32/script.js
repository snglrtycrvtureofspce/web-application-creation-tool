function sendUsername() {
  var username = document.getElementById("username").value;

  if (username.trim() === "") {
    alert("Пожалуйста, введите ваше имя.");
    return;
  }

  $.ajax({
    type: "POST",
    url: "server.php",
    data: { username: username },
    success: function (response) {
      $("#response").html(response);
    },
    error: function (xhr, status, error) {
      console.error(xhr.responseText);
    },
  });
}
