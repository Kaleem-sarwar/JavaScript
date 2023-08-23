// function number1() {
//   let one = 1;
//   document.getElementById("btn1").innerHTML = one;
// }
// function number2() {
//   let two = 2;
//   document.getElementById("btn1").innerHTML = two;
// }

// function number3() {
//   let three = 3;
//   document.getElementById("btn1").innerHTML = three;
// }
const key = document.querySelectorAll("row1");

key.addEventListner("click", function () {
  if (e.target.matches("button")) {
    const key = e.target;
    const action = key.dataset.action;
    if (!action) {
      console.log("number key!");
    }
  }
});
