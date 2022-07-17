<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="mystyle.css">

</head>
<body>
    <div class="main-container">
        <form method="POST" action="script.php">
        
        <div>
              <input type="text" name="name" placeholder="Enter your name"> 
        </div>

        <div>
             <input type="email" name="email" placeholder="Enter Email id"> 
        </div>

        <div>
             <input type="text" name="subject" placeholder="Enter Your Subject Name"> 
        </div>

       <div class="message">
            <input type="text" name="message" placeholder="Type here..."> 
       </div>
       
        <div>
            <button>submit</button>
       </div>
</form>
        
    
</body>
</html>