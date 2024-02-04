<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css"/>
    <title>WEb site</title>
</head>



<body>
    <header>
        <div class="navbar">
            <div class="logo"><a href="#">LiBrArY &nbsp;&nbsp; cAlMs</a></div>
            <ul class="links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="book_details.php">Book Details</a>
                        <ul>
                            
                        </ul>
                
                </li>
                <li><a href="service.php">Our Service</a></li>
                <li><a href="careere.php">Careers</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <a href="login.php" class="action_btn">Login</a>
            <div class="toggle_btn"></div>
            <i class="fa-solid fa-bars"></i>
        </div>
     </header>


<div class="hero">
   
    <div class="content1">
       
        <h1 class="anim" align="center">See <br> Book Set</h1>
        <p class="anim" align="center">We focus on bringing you the best product, always going the extra mile to fulfill your needs.</p> 

        <a href="novel.html" class="btn1 anim" align="center"> Novel</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="buddhist.html" class="btn1 anim" align="center"> Buddhist</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="magazine.html" class="btn1 anim" align="center"> Magazine</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="short.html" class="btn1 anim" align="center"> Short</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="romance.html" class="btn1 anim" align="center"> Romantic</a>
   

    </div>


        <div class="contane">
            <h1 class="form-title">Order Book</h1>
            <form action="book_db.php" method="post" >
    
            
            <div class="main-user-info">
                <div class="user-input-box">
                    <label for="fullname">Full Name</label> 
    
                       <input type="text"
                                id="fullname"
                                name="fullname"
                                required="required"
                                placeholder="Enter Full Name" />       
                </div>
    
              
    
                    <div class="main-user-info">
                        <div class="user-input-box">
                            <label for="email">Email </label> 
            
                               <input type="text"
                                        id="email"
                                        name="email"
                                        required="required"
                                        placeholder="Enter Email" />       
                        </div>
    
                        <div class="main-user-info">
                            <div class="user-input-box">
                                <label for="nic">NIC </label> 
                
                                   <input type="text"
                                            id="nic"
                                            name="nic"
                                            required="required"
                                            placeholder="Enter NIC NO" />       
                            </div>
    
                           
    
                        <div class="main-user-info">
                            <div class="user-input-box">
                                <label for="phonenumber">Phone Number</label> 
                
                                   <input type="text"
                                            id="phonenumber"
                                            name="phonenumber"
                                            required="required"
                                            placeholder="Enter Phone Number" />       
                            </div>
    
                            <div class="main-user-info">
                                <div class="user-input-box">
                                    <label for="address">Address</label> 
                    
                                       <input type="text"
                                                id="address"
                                                name="address"
                                                required="required"
                                                placeholder="Enter Address" />       
                                </div>
                                <div class="main-user-info">
                                    <div class="user-input-box">
                                        <label for="address">Book Name</label> 
                        
                                           <input type="text"
                                                    id="bookname"
                                                    name="bookname"
                                                    required="required"
                                                    placeholder="Enter Book Name" />       
                                    </div>
    
                                
                                
    
                                    </div>
    
                                    </div>
                                    <div>
                                    <input type="submit" name="" value="Send">
                </div>
                </div>
    
        </form>
        
    


     

   

</body>
</html>
