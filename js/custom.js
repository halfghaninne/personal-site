// on page load
// IF get element by id
//  fill element with one item from list of descriptors (animate?)
//  pause
//  fill with next item. (animate)

function loadDescriptors() {
  var descriptors = ["award-winning journalist.", "coding instructor.", "web dev.", "feminist.","<a href='./portfolio_code.php'>code</a><br><a href='./portfolio_journalism.php'>journalism</a><br><a href='./portfolio_talks.php'>talks</a><br><a href='./resume.php'>résumé</a>"];
  var placeholder;
  var introFillIn = document.getElementById("intro-fill-in");
  console.log(introFillIn);
    if (introFillIn) {
      var i = 0;
      placeholder = setInterval(function(){
        console.log("next descriptor");
        if (i == (descriptors.length - 1)) {
          introFillIn.style = "text-align: right";
        }
        introFillIn.innerHTML = descriptors[i];
        i++;
        if (i == descriptors.length) {
          clearInterval(placeholder);
        }
      }, 4000);
      // introFillIn.innerHTML = descriptors[0];
    }
}

function loadRoles(){
  var roleDivs = document.getElementsByClassName("roles-text");
  for (i = 0; i < roleDivs.length; i++) {
    console.log("showing the div");
    roleDivs[i].id = 'show-me';
    if (roleDivs[i-1]) {
      roleDivs[i-1].removeAttribute("id");
    }
    console.log("hiding the div");
    roleDivs[i].id = 'fade-out';
  }
}

// function loopDescriptors(array) {
// }

window.onload = setTimeout(loadDescriptors(), 2500);
