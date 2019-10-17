
function setCookie(cname,cvalue,exdays) {
  // console.log("cname");
  // console.log(cname);
  // alert("cname"+cname);
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires=" + d.toGMTString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkCookie() {
  var user=getCookie("username");
  if (user != "") {
    // alert("Welcome again " + user);
    document.getElementById('user_name').innerHTML = user;
  } else {
    
    //  user = prompt("Please enter your name:","");
    user = document.getElementById('i1').value;
    var pass = document.getElementById('i2').value;

      if (user != "" && user != null && user == "Prince") {
        setCookie("username", user, 30);
        location.reload();
      }
      else{
        console.log("sfsf");
       document.getElementById('validate').innerHTML = "Wrong Credentials";
      }  
  }
}


function delete_cookie(){
  document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  
  let timerInterval
    Swal.fire({
      title: 'Logging you out !!!',
      html: 'I will close in <strong></strong> milliseconds.',
      timer: 1000,
      onBeforeOpen: () => {
        Swal.showLoading()
        timerInterval = setInterval(() => {
          Swal.getContent().querySelector('strong')
            .textContent = Swal.getTimerLeft()
        }, 100)
      },
      onClose: () => {
        clearInterval(timerInterval)
      }
    }).then((result) => {
      if (
        result.dismiss === Swal.DismissReason.timer
      ) {
        console.log('I was closed by the timer')
      }
    })

    document.getElementById('user_name').innerHTML = "Sign in";
    document.getElementById('validate').innerHTML = "";
    modal.style.display = "block";

}
window.onload = function(e){ 
  checkCookie();
  document.getElementById('validate').innerHTML = "";
}
