//create function that when button(onclick) is pressed connects to the php code executing the function that does the math to
//give the user the price with discount
//I used a framework in order to do this to be able to show the result in the same window without having another tab opened
const seeDiscount = () => {
  axios
    .get("/beca/descuentos/descuentos.php?price=" + price.value)
    .then(function (response) {
      document.getElementById("finalPrice").innerHTML ="El precio final de tu producto es: $" + Math.round(response.data);
    });
};

const price = document.getElementById("precio");
const button = document.getElementById("boton");

const detectarEnter = (tecla) => {
  if (tecla.key == "Enter") {
    button.click();
  }
};

document.addEventListener("keypress", detectarEnter);
