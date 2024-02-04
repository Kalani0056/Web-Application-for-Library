<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <li><a href="book_details.php">Book Details</a></li>
                <li><a href="service.php">Our Service</a></li>
                <li><a href="careere.php">Careers</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <a href="login.php" class="action_btn">Login</a>
            <div class="toggle_btn"></div>
            <i class="fa-solid fa-bars"></i>
        </div>
     </header>

     <div class="contane">
        <h1 class="form-title">Fill Your Details</h1>
        <form action="careere_db.php" method="post" >

        
        <div class="main-user-info">
            <div class="user-input-box">
                <label for="fullname">Full Name</label> 

                   <input type="text"
                            id="fullname"
                            name="fullname"
                            placeholder="Enter Full Name" />       
            </div>

            <div class="main-user-info">
                <div class="user-input-box">
                    <label for="username">User Name</label> 
    
                       <input type="text"
                                id="username"
                                name="username"
                                placeholder="Enter User Name" />       
                </div>

                <div class="main-user-info">
                    <div class="user-input-box">
                        <label for="email">Email </label> 
        
                           <input type="text"
                                    id="email"
                                    name="email"
                                    placeholder="Enter Email" />       
                    </div>

                    <div class="main-user-info">
                        <div class="user-input-box">
                            <label for="nic">NIC </label> 
            
                               <input type="text"
                                        id="nic"
                                        name="nic"
                                        placeholder="Enter NIC NO" />       
                        </div>

                        <div class="main-user-info">
                            <div class="user-input-box">
                                <label for="dob">DOB </label> 
                
                                   <input type="date"
                                            id="dob"
                                            name="dob"/>
                                                 
                            </div>

                    <div class="main-user-info">
                        <div class="user-input-box">
                            <label for="phonenumber">Phone Number</label> 
            
                               <input type="text"
                                        id="phonenumber"
                                        name="phonenumber"
                                        placeholder="Enter Phone Number" />       
                        </div>

                        <div class="main-user-info">
                            <div class="user-input-box">
                                <label for="address">Address</label> 
                
                                   <input type="text"
                                            id="address"
                                            name="address"
                                            placeholder="Enter Address" />       
                            </div>

                            <div class="main-user-info">
                                <div class="user-input-box">
                                    <label for="city">City</label> 
                    
                                       <input type="text"
                                                id="city"
                                                name="city"
                                                placeholder="Enter Current City" />       
                                </div>

                                <div class="main-user-info">
                                    <div class="user-input-box">
                                        <label for="position">Position</label> 
                        
                                           <input type="text"
                                                    id="position"
                                                    name="position"
                                                    placeholder="Enter Position" />       
                                    </div>
                            

                                </div>

                                </div>
                            <div class="form-submit-btn">
                                <input type="submit" value="Register">
                            </div>
                            

    </form>
     </div>











</body>
</html>