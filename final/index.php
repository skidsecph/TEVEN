<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/addtocart.css">
        <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");

                                    *{
                                        margin: 0;
                                        padding: 0;
                                        box-sizing: border-box;
                                        font-family: "Poppins", sans-serif;
                                    }

                                    body{
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                        flex-direction: column;
                                    }

                                    .header{
                                        height: 80px;
                                        width: 70%;
                                        background-color: darkmagenta;
                                        border-radius: 3px;
                                        margin: 30px 0px;
                                        display: flex;
                                        align-items: center;
                                        justify-content: space-between;
                                        padding: 15px;
                                    }

                                    .header .logo{
                                        font-size: 30px;
                                        font-weight: bold;
                                        color: white;
                                    }

                                    .cart{
                                        display: flex;
                                        background-color: white;
                                        justify-content: space-between;
                                        align-items: center;
                                        padding: 7px 10px;
                                        border-radius: 3px;
                                        width: 80px;
                                    }

                                    .fa-solid{
                                        color: black;
                                        margin-left: 5px;
                                    }

                                    .cart p{
                                        height: 22px;
                                        width: 22px;
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                        border-radius: 22px;
                                        background-color: darkmagenta;
                                        color: white;
                                    }

                                    .container{
                                        display: flex;
                                        width: 70%;
                                        margin-bottom: 30px;
                                    }

                                    #root{
                                        width: 60%;
                                        display: grid;
                                        grid-template-columns: repeat(2, 1fr);
                                        grid-gap: 20px;
                                    }

                                    .sidebar{
                                        width: 40%;
                                        border-radius: 5px;
                                        background-color: #eee;
                                        margin-left: 20px;
                                        padding: 15px;
                                        text-align: center;
                                    }

                                    .head{
                                        background-color: darkmagenta;
                                        border-radius: 3px;
                                        height: 40px;
                                        padding: 10px;
                                        margin-bottom: 20px;
                                        color: white;
                                        display: flex;
                                        align-items: center;
                                    }

                                    .foot{
                                        display: flex;
                                        justify-content: space-between;
                                        margin: 20px 0px;
                                        padding: 10px 0px;
                                        border-top: 1px solid #333;
                                    }

                                    .box{
                                        display: flex;
                                        flex-direction: column;
                                        align-items: center;
                                        justify-content: space-between;
                                        border: 1px solid darkmagenta;
                                        border-radius: 5px;
                                        padding: 15px;
                                    }

                                    .img-box{
                                        width: 100%;
                                        height: 180px;
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                    }

                                    .images{
                                        max-width: 90%;
                                        max-height: 90%;
                                        object-fit: cover;
                                        object-position: center;
                                    }

                                    .bottom{
                                        margin-top: 20px;
                                        width: 100%;
                                        text-align: center;
                                        display: flex;
                                        flex-direction: column;
                                        align-items: center;
                                        justify-content: space-between;
                                        height: 110px;
                                    }

                                    h2{
                                        font-size: 20px;
                                        color: red;
                                    }

                                    button{
                                        width: 100%;
                                        position: relative;
                                        border: none;
                                        border-radius: 5px;
                                        background-color: darkmagenta;
                                        padding: 7px 25px;
                                        cursor: pointer;
                                        color: white;
                                    }

                                    button:hover{
                                        background-color: #333;
                                    }

                                    .cart-item{
                                        display: flex;
                                        align-items: center;
                                        justify-content: space-between;
                                        padding: 10px;
                                        background-color: white;
                                        border-bottom: 1px solid #aaa;
                                        border-radius: 3px;
                                        margin: 10px 10px;
                                    }

                                    .row-img{
                                        width: 50px;
                                        height: 50px;
                                        border-radius: 50px;
                                        border: 1px solid darkmagenta;
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                    }

                                    .rowimg{
                                        max-width: 43px;
                                        max-height: 43px;
                                        border-radius: 50%;
                                    }

                                    .fa-trash:hover{
                                        cursor: pointer;
                                        color: #333;
                                    }

                                    .logout {
                                        color: white;
                                    }

                                    .header a{
                                        color: white;
                                        text-decoration: none;
                                    }


                                    .header a:hover {
                                        color: orangered;
                                    }

        </style>
    </head>
    <body>
        <div class="header">
            <p class="logo">TJ ONLINE SHOP GADGETS</p>
             <a href="about.php" class="header2" type="submit" value="submit"><i class="fa-solid fa-users"></i> About me</a>
             <a href="login.php" style="color:white;" class="header2" type="submit" value="submit"><i class="fa-solid fa-sign-in"></i> Login</a> 
            <div class="cart"><i class="fa-solid fa-cart-shopping"></i><p id="count">0</p></div>
        </div>
        <div class="container"> 
            <div id="root"></div>
            <div class="sidebar">
                <div class="head"><p>My Cart</p></div>
                <div id="cartItem">Your cart is empty</div>
                <div class="foot">
                    <h3>Total</h3>
                    <h2 id="total">$ 0.00</h2>
                </div>
            </div>
        </div>
        <script src="addtocart.js"></script>
    </body>
</html>