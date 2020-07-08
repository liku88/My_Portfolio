
const navbar = document.querySelector("#nav");
const navBtn = document.querySelector("#nav-btn");
const closeBtn = document.querySelector("#close-btn");
const sidebar = document.querySelector("#sidebar");
const date = document.querySelector("#date");
// add fixed class to navbar
window.addEventListener("scroll", function () {
  if (window.pageYOffset > 80) {
    navbar.classList.add("navbar-fixed");
  } else {
    navbar.classList.remove("navbar-fixed");
  }
});
// show sidebar
navBtn.addEventListener("click", function () {
  sidebar.classList.add("show-sidebar");
});
closeBtn.addEventListener("click", function () {
  sidebar.classList.remove("show-sidebar");
});
// set year
date.innerHTML = new Date().getFullYear();

//Language section typeit effect
new TypeIt("#hero", {
  speed: 80,
  loop:true,
  startDelay: 900
})

//English
  .type('I am a noob coder ,')
  .pause(500)
  .break()
  .break({delay: 500})
  .pause(500)
  .delete()

//odia
  .type('ଆପଣ କେମିତି ଅଛନ୍ତି ?')
  .pause(500)
  .break()
  .break({delay: 500})
  .type('<em>How are you ?</em>')
  .pause(500)
  .delete()

//Sanskrit
  .type('वयम् गीतम् गायाम')
  .pause(500)
  .break()
  .break({delay: 500})
  .type('<em>Let us sing a song.</em>')
  .pause(500)
  .delete()

//Hindi
  .type('मैं भारतीय हूँ |')
  .pause(500)
  .break()
  .break({delay: 500})
  .type('<em>I am Indian</em>')
  .pause(500)
  .delete()
  .go();
  function closeSidebar() {
    sidebar.classList.remove("show-sidebar");
  }

  //Contact Form Validation
  function validate(){
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
    var error_message = document.getElementById("error_message");
    
    error_message.style.padding = "10px";
    
    var text;
    if(name.length < 3){
      text = "<p class=\"warning\">Please Enter valid Name</p>" ;
      error_message.innerHTML = text;
      return false;
    }
    
    if(email.indexOf("@") == -1 || email.length < 6){
      text = "<p class=\"warning\">Please Enter valid Email</p>";
      error_message.innerHTML = text;
      return false;
    }

    if(message.length <= 10){
      text = "<p class=\"warning\">Please Enter Atleast 10 characters</p>";
      error_message.innerHTML = text;
      return false;
    }
    alert("Form Submitted Successfully!");
    return true;
  }
var typed = new Typed('.hello', {
  strings: ["front-end web developer","JS Devloper","MERN Devloper", "PHP Devloper."],
  typeSpeed: 60,
  backSpeed: 60,
    loop:true
    
});
let progress = document.getElementById("progressbar");

let totalHeight = document.body.scrollHeight - window.innerHeight;

window.onscroll = function(){
    let progressHeight = (window.pageYOffset / totalHeight)*100;
    progress.style.height = progressHeight + "%";
}
  $(document).ready(function(){
    $('.carousel').carousel();
  });

function counter(){
    var count = setInterval(function(){
        var c = parseInt($('.counter').text());
        $('.counter').text((++c).toString());
        if(c == 100){
            clearInterval(count);
            $('.counter').addClass('hide');
            $('.preloader').addClass('active');
        }
    },80)
}
counter();





