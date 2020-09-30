//javacript

function headerFunction() {
  let scrollPosition = Math.round(window.scrollY);

  if (scrollPosition > 100) {
          document.querySelector('header').classList.add('sticky');
        }
        else {
              document.querySelector('header').classList.remove('sticky');
          }
}

function hamburger() {
  console.log("clickOpen");
  $("#hamburgerMenu").show();
  $("header").hide();
};

function hamburgerMenu() {
  console.log("clickClose");
  $("header").show();
  $("#hamburgerMenu").hide();
};

function headerChange() {
  var y = window.scrollY
  console.log(y);
  if (y > 10) {
    $("#homepageHeader").css("background-color", "#0D044D");
    console.log("scroll");
  } else {
    $("#homepageHeader").css("background-color", "rgba(0,0,0,0)");
    console.log("top");
  }
}

setInterval(headerChange, 200);
