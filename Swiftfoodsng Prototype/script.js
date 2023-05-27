if (document.readyState == 'loading'){
  document.addEventListener('DOMContentLoaded', ready())
} else {
  ready()
}


function ready(){
 
  setCartItemCounter()
  // Set item counter
function setCartItemCounter(){
  let cart = JSON.parse(localStorage.getItem('cart'))
  let counter = parseInt(Object.keys(cart).length)
  console.log(counter)
  let cartCount = document.getElementById('cart_item_count')
  cartCount.innerHTML = counter
}
}

function validateForm(){
   
    let x = document.forms["myform"]["email"].value;
    if(x == ""){
        alert ("Enter your Email address");
    }
    let y = document.forms["myform"]["password"].value;
    if(y == ""){
        alert ("Please input your password");
    }
  
    
   
}


//window.location.href = JSON.parse(this.responseText).url;
function validateForm2(){
    let a = document.forms["myform2"]["first_name"].value;
    if (a == "") {
      alert("First name must be filled out");
      return false;
    }
    let b = document.forms["myform2"]["last_name"].value;
    if (b == "") {
      alert("Last name must be filled out");
      return false;
    }
    let f = document.forms["myform2"]["phone"].value;
    if (f == "") {
      alert("Enter your Phone Number");
      return false;
    }
    let c = document.forms["myform2"]["email"].value;
    if (c == "") {
      alert("Email must be filled out");
      return false;
    }
    let d = document.forms["myform2"]["password"].value;
    if (d == "") {
      alert("Enter a password");
      return false;
    }
    let g = document.forms["myform2"]["t_c"].checked;
    if (g == false) {
      alert("Agree to the T's and C's.");
      return false;
    }
    let e = document.forms["myform2"]["confirm_password"].value;
    if (e == "") {
      alert("Confirm your password");
      return false;
    }
    if(e === d){
        return true;
    }else {
        alert ("Passwords do not match!");
        return false;
    }
}

function validateForm3(){
  let x = document.forms["myform3"]["Email"].value;
  if(x == ""){
      alert ("Enter your Email address");
  }
}



function showPage(panelIndex, color){
  var buttons= document.querySelectorAll("input.btn");
 var pages = document.querySelectorAll("div.page");

  buttons.forEach(function(node){
   node.style.fontWeight='';
  });
  buttons[panelIndex].style.backgroundColor= color;
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
  tags[panelIndex].style.backgroundColor= color;
  menus.forEach(function(node){
    node.style.display="none"
  });
  menus[panelIndex].style.display="block";

}


  
  
 

function validateForm4(){
  let a = document.forms["myform4"]["branch_name"].value;
  if (a == "") {
    alert("Branch name must be filled out");
    return false;
  }
  let b = document.forms["myform4"]["state"].value;
  if (b == "") {
    alert("State must be filled out");
    return false;
  }
  let h = document.forms["myform4"]["city"].value;
  if (h == "") {
    alert("City must be filled out");
    return false;
  }
  let f = document.forms["myform4"]["phone_number"].value;
  if (f == "") {
    alert("Enter your Phone Number");
    return false;
  }
  let c = document.forms["myform4"]["email_address"].value;
  if (c == "") {
    alert("Email must be filled out");
    return false;
  }
  let d = document.forms["myform4"]["password"].value;
  if (d == "") {
    alert("Enter a password");
    return false;
  }
  let g = document.forms["myform4"]["t_c"].checked;
  if (g == false) {
    alert("Agree to the T's and C's.");
    return false;
  }
  let e = document.forms["myform4"]["confirm_password"].value;
  if (e == "") {
    alert("Confirm your password");
    return false;
  }
  if(e === d){
      return true;
  }else {
      alert ("Passwords do not match!");
      return false;
  }
}

function validateForm3(){
let x = document.forms["myform3"]["Email"].value;
if(x == ""){
    alert ("Enter your Email address");
}
}




//const myForm = document.getElementById('myform2');
//myForm.addEventListener('submit', function (e){
  //  e.preventDefault();


    //const formData= new FormData(this);

    //fetch('https://swiftfoodapi.herokuapp.com/API/v1/customers/register',
   // {
 //   method:"post",
  //  mode:"no-cors",
//    redirect:"error",
  //  body:formData
  //  })
   // .then(function(response){
    //return response.text()
    //}
    //)
    //.then(function(text){
   // console,log(text)
   // }).catch(function(error){
    //console.error(error)
  //  })
//})


