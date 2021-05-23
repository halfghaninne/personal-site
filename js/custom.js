// on page load
// IF get element by id
//  fill element with one item from list of descriptors (animate?)
//  pause
//  fill with next item. (animate)

function loadDescriptors() {
  var descriptors = ["award-winning journalist.", "coding instructor.", "web dev.", "feminist.","<a href='./code.php'>code</a><br><a href='./journalism.php'>journalism</a><br><a href='./talks.php'>talks</a><br><a href='./resume.php'>résumé</a>"];
  var placeholder;
  var introFillIn = document.getElementById("intro-fill-in");
  console.log(introFillIn);
    if (introFillIn) {
      var i = 0;
      placeholder = setInterval(function(){
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

function cycleGreeting() {
  var greetings = ["Salaam, I'm Alex.", "Hi, I'm Alex."];
  var placeholder;
  var greeting = document.getElementById("greeting");
  if (greeting) {
    var i = 0;
    placeholder = setInterval(function(){
      console.log(greetings[i]);
      greeting.innerHTML = greetings[i];
      i++;
      if (i == greetings.length) {
        i = 0;
        // clearInterval(placeholder);
      }
    }, 3000);
  }
}

// function loopDescriptors(array) {
// }

window.onload = function(){
  cycleGreeting();
  // var introFillIn = document.getElementById("intro-fill-in");
  // if (introFillIn.visibility != "hidden") {
  //   if (localStorage.getItem("hasCodeRunBefore") === null) {
  //       setTimeout(loadDescriptors(), 2500);
  //       localStorage.setItem("hasCodeRunBefore", true);
  //   } else {
  //     // console.log(navigator.userAgent.indexOf("Safari") != -1);
  //     introFillIn.style.textAlign = "-webkit-right";
  //     // introFillIn.style = "text-align: -webkit-center";
  //     introFillIn.innerHTML = "<a href='./code.php'>code</a><br><a href='./journalism.php'>journalism</a><br><a href='./talks.php'>talks</a><br><a href='./resume.php'>résumé</a>";
  //   }; 
  // };
};
