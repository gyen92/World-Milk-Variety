<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Welcome to World Milk Variety!</title>
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@500&family=Oswald&family=Sora&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
    <div class="navbar">
           <table>
                <tr>
                    <td><h3>World Milk Variety</h3></td>
                    <td><a href="index.html">Home</a></td>
                    <td><a href="#news">News</a></td>
                    <td><a href="#items">Items</a></td>
                    <td><a href="#insta">Instagram</a></td>
                    <td><a href="#map">Map</a></td>
                    <td><a href="#contact">Contact</a></td>
                    <td><a href="order.html">Order</a></td>                 
                </tr>
           </table>
        </div>
        
        
        <div class="content">
            <p>
            Put your order inquiry.<br>
            We will contact you back.            
            </p>
            
            <div class="depi">
                pick up or delivery?
                <input type="radio" name="depi" value="pickup" onclick="if(this.checked){pickup()}">Pick Up
                <input type="radio" name="depi" value="delivery" onclick="if(this.checked){delivery()}">Delivery
            </div>
            <script>
                function pickup() {
//                    console.log("pickup");
                    
                    document.getElementById("pickup").style.display="block";
                    document.getElementById("delivery").style.display="none";
                }
                function delivery(){
                    document.getElementById("delivery").style.display="block";
                    document.getElementById("pickup").style.display="none";
                }
            
            </script>
            
            <div class="pickup" id="pickup" display="none" >           
                <p>
                    pickup
                </p>
                <div class="pickup-order-form">
                    Name: <input name="name" type="text" class="order-control" placeholder="Your  Name" required>
                    <br>
                    Email: <input name="email" type="email" class="order-control" placeholder="Your Email" required>
                    <br>
                    Phone Number: <input name="pnumber" type="tel" class="order-control" placeholder="Your Phone Number">
                    <br>
                    Pick Up Date/Time: <input name="date" type="date" class="order-control" ><input name="time" type="time" class="order-control" placeholder="When would you like to order?">
                    <br>
                    Order Details:<br><textarea name="order" class="order-control" placeholder="What would you like to order?" row=4 required></textarea>
                    <br>
            <input type="submit" class="form-control submit" value="Order Inquiry">
                    
                 <br>
                </div>
            </div>
            <div class="delivery" id="delivery" display="none">
                <p>
                    delivery
                </p>
                <div class="verifylocation">
            Please verify your location for availability!
            </div>
                <div class="delivery-order-form">
             <form id="order-form" method="post" action="order-form-handler.php">
                 Name: <input name="name" type="text" class="order-control" placeholder="Your  Name" required>
                 <br>
                 Email: <input name="email" type="email" class="order-control" placeholder="Your Email" required>
                 <br>
                 Phone Number: <input name="pnumber" type="tel" class="order-control" placeholder="Your Phone Number">
                 <br>
                 Address: <input name="street name" class="order-control" placeholder="Street Name">
                 <input name="city" class="order-control" placeholder="City">
                 <br>
                 <textarea name="order" class="order-control" placeholder="What would you like to order?" row=4 required></textarea>
            <br>
            <input type="submit" class="form-control submit" value="SEND MESSAGE">
            
            </form>
                </div>
            </div>
            
            
            
            
        </div>
        <form class="contact-form" action="contactform.php" method="post">
            <input type="text" name="name" placeholder="Full Name">
            <input type="text" name="mail" placeholder="Your e-mail">
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="message" placeholder="Message"></textarea>
            <button type="submit" name="submit">SEND MAIL</button>
        </form>
    </body>
</html>