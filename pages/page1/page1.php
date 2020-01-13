<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="icon-font.css">
    <link rel="stylesheet" href="style1.css">
    <title>Page 1</title>
</head>
<body>

    <div class="container">
        <div class="menu">
            <nav>
                <a class="menu-a" href="../../index.php">Home</a>
                <a class="menu-a" href="../../admin.php">Admin</a>
                <a class="menu-a" href="../login/login.html">Login</a>
                <a class="menu-a" href="../login/create-account-form .html">Create account</a>
            </nav>
        </div>
        <div class="logo"><img src="img/Logo.png" alt="Gobi" class="logo-img"></div>
    
    <section id="Page-1">
       
            <div class="image">
                <img id="default-img" class="image-1" src="img/pink.jpg" alt="Julia-coat-pink">
            </div>
            <div class="information">
                <h1 class="h1">Julia Coat</h1>
                <p class="price">$249.00</p> 
                <button class="add-to-cart" name="" onclick="displaymodal()">
                <img src="./img/icons8-favorite-cart-80.png" alt="cart">
                </button>
                <p class="info">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin.
                </p>
                <div class="choose-color">

                    <div class="color-head">
                        <span>Color</span>
                    </div>
                    
                    <div class="custom-radios">
                        <div>
                          <input type="radio" id="color-1" name="color" value="color-1" >
                          <label for="color-1" onclick="changeImage1()">
                            <span>
                              <img  src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg" alt="Checked Icon" />
                            </span>
                          </label>
                        </div>
                        
                        <div>
                          <input type="radio" id="color-2" name="color" value="color-2" checked>
                          <label for="color-2" onclick="changeImage2()">
                            <span>
                              <img id="p1-2" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg" alt="Checked Icon" />
                            </span>
                          </label>
                        </div>
                       <!--
                        <div>
                          <input type="radio" id="color-3" name="color" value="color-3">
                          <label for="color-3">
                            <span>
                              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg" alt="Checked Icon" />
                            </span>
                          </label>
                        </div>
                      
                        <div>
                          <input type="radio" id="color-4" name="color" value="color-4">
                          <label for="color-4">
                            <span>
                              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg" alt="Checked Icon" />
                            </span>
                          </label>
                        </div>
                      </div>
                      --> 
                </div>

            </div>

            <div class="choose-size">
              <div class="size-head">
                <span>Size</span>
              </div>
              <div class="size-radio">
                <div class="boxed">
                  
                  <input type="radio" id="XS" name="size" value="XS">
                  <label for="XS">XS</label>
                
                  <input type="radio" id="S" name="size" value="S">
                  <label for="S">S</label>
            
                  <input type="radio" id="M" name="size" value="M">
                  <label for="M">M</label>
                  
                </div>
              </div>
            </div>

 
            <div class="choose-ammount">
                <form>
                    <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                    <input type="number" id="number" value="0" />
                    <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                </form>
            </div>

           


          </div>
    </section>
    
    <div id="modal">
      <div class="modal-inside">
        <h1>Таны сонголт хадгалагдлаа</h1>
        <p>Манайхыг сонгон үйлчлүүлсэнд баярлалаа. Дараа дахин үйлчлүүлээрэй.</p>
      </div>
      
    </div>
    <div id="overlay" onclick="displaynone()">
      
    </div>


    <script src="main1.js"></script>
   <!--  <script src="jquery.js"></script> -->
    <script src="jq.js"></script>
</body>
</html>