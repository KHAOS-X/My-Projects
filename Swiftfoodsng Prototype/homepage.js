// localStorage.setItem('cart','[]')


if(document.readyState == 'loading'){
  document.addEventListener('DOMContentLoaded', readyState())
} else {
  readyState()
}
function readyState(){
  if( localStorage.getItem('cart') == null || undefined){
    localStorage.setItem('cart', '[]')
    ready()
  } else{
    ready()
  }
}
readyState()
function ready(){
  
   
  showPage1(0)
  setCartItemCounter()
  showPage(0)
 
  // Set item counter
function setCartItemCounter(){
  let cart = JSON.parse(localStorage.getItem('cart'))
  let counter = parseInt(Object.keys(cart).length)
  console.log(counter)
  let cartCount = document.getElementById('cart_item_count')
  cartCount.innerHTML = counter
}
function showPage(panelIndex, color){
  var buttons= document.querySelectorAll("input.btn");
 var pages = document.querySelectorAll("div.page");

 buttons.forEach(function(node){
  node.style.fontWeight='';
 });
 buttons[panelIndex].style.fontWeight= color;
 pages.forEach(function(node){
   node.style.display="none"
 });
 pages[panelIndex].style.display="flex";
}

function showPage1(panelIndex, color){
  var tags= document.querySelectorAll("input#mgn");
 var menus = document.querySelectorAll("div.menu");

  tags.forEach(function(node){
   node.style.fontWeight='';
  });
  tags[panelIndex].style.fontWeight= color;
  menus.forEach(function(node){
    node.style.display="none"
  });
  menus[panelIndex].style.display="block";

  
  

}
   
}

//Add to Cart function

   let addToCartButtons = document.querySelectorAll('button.cart_btn')
  
   let menus = [{
    
    id: 1,
    food: 'Nacho Cheese Fries',
    price:'&#8358;4000',
    image:'Rectangle 24 (3).png',
  },
  {
    
    id:2,
    food: 'Hotdogs',
    price:'&#8358;5000',
    image:'Rectangle 24 (4).png',
  },
  {
    
    id:3,
    food: 'Burgers,Fries and Nuggets',
    price:'&#8358;5000',
    image:'Rectangle 24 (5).png',
  },
  {
    
    id:4,
    food: 'Nacho Cheese Fries',
    price:'&#8358;4000',
    image:'Rectangle 24 (3).png',
  },
  {
    
    id:5,
    food: 'Hotdogs',
    price:'&#8358;5000',
    image:'Rectangle 24 (4).png',
  },
  {
    
    id:6,
    food: 'Burgers,Fries and Nuggets',
    price:'&#8358;5000',
    image:'Rectangle 24 (5).png',
  },
  {
    
    id:7,
    food: 'Nacho Cheese Fries',
    price:'&#8358;4000',
    image:'Rectangle 24 (3).png',
  },
  {
    
    id:8,
    food: 'Hotdogs',
    price:'&#8358;5000',
    image:'Rectangle 24 (4).png',
  },
  {
    
    id:9,
    food: 'Burgers,Fries and Nuggets',
    price:'&#8358;5000',
    image:'Rectangle 24 (5).png',
  },
  {
    id:10,
    food: 'Nacho Cheese Fries',
    price:'&#8358;4000',
    image:'Rectangle 24 (3).png',
  },
  {
    id:11,
    food: 'Hotdogs',
    price:'&#8358;5000',
    image:'Rectangle 24 (4).png',
  },
  {
    id:12,
    food: 'Burgers,Fries and Nuggets',
    price:'&#8358;5000',
    image:'Rectangle 24 (5).png',
  },
  {
    id:13,
    food: 'Nacho Cheese Fries',
    price:'&#8358;4000',
    image:'Rectangle 24 (3).png',
  },
  {
    id:14,
    food: 'Hotdogs',
    price:'&#8358;5000',
    image:'Rectangle 24 (4).png',
  },
  {
    id:15,
    food: 'Burgers,Fries and Nuggets',
    price:'&#8358;5000',
    image:'Rectangle 24 (5).png',
  },
  {
    id:16,
    food: 'Nacho Cheese Fries',
    price:'&#8358;4000',
    image:'Rectangle 24 (3).png',
  },
  {
    id:17,
    food: 'Hotdogs',
    price:'&#8358;5000',
    image:'Rectangle 24 (4).png',
  },
  {
    id:18,
    food: 'Burgers,Fries and Nuggets',
    price:'&#8358;5000',
    image:'Rectangle 24 (5).png',
  },
  {
    id:19,
    food: 'Nacho Cheese Fries',
    price:'&#8358;4000',
    image:'Rectangle 24 (3).png',
  },
  {
    id:20,
    food: 'Hotdogs',
    price:'&#8358;5000',
    image:'Rectangle 24 (4).png',
  },
  {
    id:21,
    food: 'Burgers,Fries and Nuggets',
    price:'&#8358;5000',
    image:'Rectangle 24 (5).png',
  },
  {
    id:22,
    food: 'Nacho Cheese Fries',
    price:'&#8358;4000',
    image:'Rectangle 24 (3).png',
  },
  {
    id:23,
    food: 'Hotdogs',
    price:'&#8358;5000',
    image:'Rectangle 24 (4).png',
  },
  {
    id:24,
    food: 'Burgers,Fries and Nuggets',
    price:'&#8358;5000',
    image:'Rectangle 24 (5).png',
  },
  {
    id:25,
    food: 'Nacho Cheese Fries',
    price:'&#8358;4000',
    image:'Rectangle 24 (3).png',
  },
  {
    id:26,
    food: 'Hotdogs',
    price:'&#8358;5000',
    image:'Rectangle 24 (4).png',
  },
  {
    id:27,
    food: 'Burgers,Fries and Nuggets',
    price:'&#8358;5000',
    image:'Rectangle 24 (5).png',
  },
  {
    id:28,
    food: 'Nacho Cheese Fries',
    price:'&#8358;4000',
    image:'Rectangle 24 (3).png',
  },
  {
    id:29,
    food: 'Hotdogs',
    price:'&#8358;5000',
    image:'Rectangle 24 (4).png',
  },
  {
    id:30,
    food: 'Burgers,Fries and Nuggets',
    price:'&#8358;5000',
    image:'Rectangle 24 (5).png',
  }
  ];
     
    

 addToCartButtons.forEach((addToCartButton, index)=>{
addToCartButton.addEventListener('click', () =>{addToCart(menus[index])})})

function addToCart(product){
  addItemToCart(product);
   function setCartItemCounter(){
    let cart = JSON.parse(localStorage.getItem('cart'))
    let counter = parseInt(Object.keys(cart).length)
    //let counter = cart.length
    console.log(counter)
    let cartCount = document.getElementById('cart_item_count')
    cartCount.innerHTML = counter
  }
  setCartItemCounter()

}

  function addItemToCart(product){
    
    let cartItems = localStorage.getItem('cart')
    cartItems = JSON.parse(cartItems)

    if(cartItems != null){
       if(cartItems[product.id] == undefined){
       cartItems = {...cartItems,
        [product.id]:product
       }
       }
    }else{
         cartItems = {
      [product.id]: product
     }
}
  localStorage.setItem('cart', JSON.stringify(cartItems))
  console.log(cartItems) 
    }
      
    function showPage(panelIndex, color){
      var buttons= document.querySelectorAll("input.btn");
     var pages = document.querySelectorAll("div.page");
    
     buttons.forEach(function(node){
      node.style.fontWeight='';
     });
     buttons[panelIndex].style.fontWeight= color;
     pages.forEach(function(node){
       node.style.display="none"
     });
     pages[panelIndex].style.display="flex";
    }
    
    function showPage1(panelIndex, color){
      var tags= document.querySelectorAll("input#mgn");
     var menus = document.querySelectorAll("div.menu");
    
      tags.forEach(function(node){
       node.style.fontWeight='';
      });
      tags[panelIndex].style.fontWeight= color;
      menus.forEach(function(node){
        node.style.display="none"
      });
      menus[panelIndex].style.display="block";
      
    
    }
   
      
 /* Remove item from cart array
  function removeItemFromCart(productId){
    let temp = cart.filter(item => item.id != productId)
    localStorage.setItem("cart", JSON.stringify(temp))
   }*/
 




/*function addItemToCart(orderName, orderPrice, imageSrc){
    var orderRow =document.createElement('div')
  orderRow.classList.add('orders')
    var orderItems = localStorage.getItem('orderBox')
    var orderRowContent = `
    <div class="orders">
    <div  class="photo_box">
        <span  class="food_photo"><img src="${imageSrc}" ></span>
    </div> 
    <div class="info_box">
        <h1> <span class="food_name">${orderName}</span> <span class="food_price">${orderPrice}</span></h1>
        <h2 class="food_info">The in-house meal by Chef Moose</h2>
  </div>
    <div class="unit_control">
        <input type="number" min="1" max="100" step="1" value="1" class="unit">
    </div>
    <button class="delete"><img src="./Images/DELETE.png"> Delete</button>
  </div> `
  orderRow.innerHTML = orderRowContent
  console.log(orderRow)

  localStorage.setItem('newOrder', orderRow)
  }*/
