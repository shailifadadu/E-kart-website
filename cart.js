let carts = document.querySelectorAll(".add-cart");

//array
let products = [
  {
    name: "Smartphone",
    tag: "smartphone",
    price: 69999,
    inCart: 0,
  },
  {
    name: "Camera",
    tag: "camera",
    price: 2496,
    inCart: 0,
  },
  {
    name: "Television",
    tag: "television",
    price: 11999,
    inCart: 0,
  },
  {
    name: "Speaker",
    tag: "speaker",
    price: 4999,
    inCart: 0,
  },
  {
    name: "Stopwatch",
    tag: "stopwatch",
    price: 1499,
    inCart: 0,
  },
  {
    name: "Smartwatch",
    tag: "smartwatch",
    price: 2299,
    inCart: 0,
  },
  {
    name: "Headphone",
    tag: "headphone",
    price: 9990,
    inCart: 0,
  },
  {
    name: "Smartphone-1",
    tag: "smartphone-1",
    price: 61999,
    inCart: 0,
  },
  {
    name: "Ipad",
    tag: "ipad",
    price: 55500,
    inCart: 0,
  },
];

for (let i = 0; i < carts.length; i++) {
  console.log("my-loop");
  carts[i].addEventListener("click", () => {
    cartNumbers(products[i]);
    totalCost(products[i]);
  });
}

function onLoadCartNumbers() {
  let productNumbers = localStorage.getItem("cartNumbers");

  if (productNumbers) {
    document.querySelector(".cart span").textContent = productNumbers;
  }
}

//to know the number of items added to cart
function cartNumbers(product) {
  let productNumbers = localStorage.getItem("cartNumbers");

  //it converts string into number
  productNumbers = parseInt(productNumbers);
  if (productNumbers) {
    localStorage.setItem("cartNumbers", productNumbers + 1);
    document.querySelector(".cart span").textContent = productNumbers + 1;
  } else {
    localStorage.setItem("cartNumbers", 1);
    document.querySelector(".cart span").textContent = 1;
  }

  setItems(product);
}

function setItems(product) {
  let cartItems = localStorage.getItem("productsInCart");
  cartItems = JSON.parse(cartItems); //JSON into js object

  if (cartItems != null) {
    if (cartItems[product.tag] == undefined) {
      cartItems = {
        ...cartItems, //already there + next items to add
        [product.tag]: product,
      };
    }
    cartItems[product.tag].inCart += 1;
  } else {
    product.inCart = 1;
    cartItems = {
      [product.tag]: product, //object created cartitems
    };
  }

  localStorage.setItem("productsInCart", JSON.stringify(cartItems)); //it is bcoz we dont want to pass it as js object
}

//to update cart cost value
function totalCost(product) {
  let cartCost = localStorage.getItem("totalCost");
  console.log("My cartCost is", cartCost);
  console.log(typeof cartCost);

  if (cartCost != null) {
    cartCost = parseInt(cartCost); //convert string to integer
    localStorage.setItem("totalCost", cartCost + product.price);
  } else {
    localStorage.setItem("totalCost", product.price);
  }
}

function displayCart() {
  let cartItems = localStorage.getItem("productsInCart");
  cartItems = JSON.parse(cartItems); //JSON to js object

  let productContainer = document.querySelector(".pds");
  let cartCost = localStorage.getItem("totalCost");

  console.log(cartItems);
  if (cartItems && productContainer) {
    productContainer.innerHTML = "";
    Object.values(cartItems).map((item) => {
      //` it is used to ignore enter key
      productContainer.innerHTML += `      
      <div class="product">
        <ion-icon name="close-circle"></ion-icon>
        <img src="./images/${item.tag}.jpg">
        <span>${item.name}</span>
      </div>
      <div class="price">₹${item.price}</div>
      <div class="quantity">
      <ion-icon  name="caret-back-outline"></ion-icon>
        <span>${item.inCart}</span>
        <ion-icon name="caret-forward-outline"></ion-icon>
      </div>
      <div class="total">
      ₹${item.inCart * item.price}
      </div>
      `;
    });

    productContainer.innerHTML += `
      <div class="basketTotalContainer">
        <h4 class="basketTotalTitle">
          Basket Total
        </h4>
        <h4 class="basketTotal">
          ₹${cartCost}
        </h4>
      </div>
    `;
  }
}

onLoadCartNumbers(); //function call whenever we reload the page
displayCart();
