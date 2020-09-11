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
