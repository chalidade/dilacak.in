setTimeout(
  function() {
    var x = document.getElementById("overlay-loader");
    x.style.display = "none";
  }, 2000);

function shlogin(id) {
  var login    = document.getElementById("login");
  var register = document.getElementById("register");
  if (id === 1) {
    login.style.display = "none";
    register.style.display = "block";
  } else {
    login.style.display = "block";
    register.style.display = "none";
  }
}

function menu(id) {
  var device    = document.getElementById("content-device");
  var map       = document.getElementById("content-map");
  var setting   = document.getElementById("content-setting");
  var user      = document.getElementById("content-user");

  if (id === 1) {
    user.style.display = "none";
    setting.style.display = "none";
    device.style.display = "none";
    map.style.display = "block";
  } else if(id === 2) {
    user.style.display = "none";
    setting.style.display = "none";
    device.style.display = "block";
    map.style.display = "none";
  } else if(id === 3) {
    user.style.display = "none";
    setting.style.display = "block";
    device.style.display = "none";
    map.style.display = "none";
  } else {
    user.style.display = "block";
    setting.style.display = "none";
    device.style.display = "none";
    map.style.display = "none";
  }
}
