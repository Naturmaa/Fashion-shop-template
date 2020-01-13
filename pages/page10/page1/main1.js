//Color choose img change
function changeImage1(){
  document.getElementById("default-img").src = "brown.jpg";
  document.getElementById("default-img").style.animation = "fadeImg 0.5s ease-out";
  setTimeout(()=>{
    document.getElementById("default-img").style.animation = "";
  },500);
}
function changeImage2(){
  document.getElementById("default-img").src = "pink.jpg";
  document.getElementById("default-img").style.animation = "fadeImg 0.5s ease-out";
  setTimeout(()=>{
    document.getElementById("default-img").style.animation = "";
  },500);
}

function hi(){
  alert("hi");
}
function displaymodal(){
  document.getElementById("modal").style.display = "flex";
  document.getElementById("overlay").style.display = "flex";
}
function displaynone(){
  document.getElementById("modal").style.display = "none";
  document.getElementById("overlay").style.display = "none";
}

//Choose ammount
function increaseValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('number').value = value;
  }
  
  function decreaseValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('number').value = value;
  }

//