// on page load
// IF get element by id
//  fill element with one item from list of descriptors (animate?)
//  pause
//  fill with next item. (animate)

function loadDescriptors() {
  var descriptors = ["award-winning journalist.", "web dev.", "feminist.", "cat lover.", "coding instructor."];
  var placeholder;
  var introFillIn = document.getElementById("intro-fill-in");
    if (introFillIn) {
      var i = 0;
      placeholder = setInterval(function(){
        introFillIn.innerHTML = descriptors[i];
        i++;
        if (i == 5) {
          clearInterval(placeholder);
        }
      }, 4000);
      // introFillIn.innerHTML = descriptors[0];
    }
}

// function loopDescriptors(array) {
// }

window.onload = setTimeout(loadDescriptors, 2500);