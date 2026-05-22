<html>  
<head>  
    <title>Student Registration Form</title>  
    <style>  
        body {  
            margin: 0;  
            font-family: 'Arial', sans-serif;  
            background: #f5f1ec;  
            color: #4a3f35;  
        }  

        .header {  
            text-align: center;  
            padding: 40px;  
            background: #f5f1ec;  
        }  

        .header h1 {  
            margin: 0;  
            font-size: 42px;  
        }  

        .header p {  
            letter-spacing: 3px;  
            margin-top: 10px;  
        }  

        hr {  
            border: 1px solid #b8a999;  
            width: 80%;  
            margin: auto;  
        }  

        .container {  
            display: flex;  
            justify-content: center;  
            padding: 40px;  
        }  

        form {  
            background: white;  
            padding: 30px;  
            border-radius: 10px;  
            width: 500px;  
        }  

        label {  
            display: block;  
            margin-bottom: 5px;  
            font-weight: bold;  
        }  

        input[type="text"], input[type="email"], input[type="date"], select {  
            width: 100%;  
            padding: 8px;  
            margin-bottom: 15px;  
            border: 1px solid #ccc;  
            border-radius: 4px;  
        }  

        input[type="submit"] {  
            background-color: #4CAF50;  
            color: white;  
            padding: 10px 20px;  
            border: none;  
            border-radius: 4px;  
            
        }  
    </style>  
</head>  

<body>  
<?php  
    $firstName = "Ma. Allison Grace";  
    $lastName = "See";  
    $email = "seemaallisongrace@gmail.com";  
    $birthDate = "2002-06-11";  
    $gender = "Female";  
    $course = "BS Information Technology Specialized in Cybersecurity";  
    $strand = "STEM";
?>  

    <div class="header">  
        <h1>Registration Form</h1>  

    </div>  

    <hr>  

    <div class="container">  
        <form>  
            <label>First Name:</label>  
            <input type="text" name="firstName" value="<?php echo $firstName; ?>">  

            <label>Last Name:</label>  
            <input type="text" name="lastName" value="<?php echo $lastName; ?>">  

            <label>Email:</label>  
            <input type="email" name="email" value="<?php echo $email; ?>">  

            <label>Date of Birth:</label>  
            <input type="date" name="birthDate" value="<?php echo $birthDate; ?>">  

            <label>Gender:</label>  
            <select name="gender" disabled>  
                <option selected><?php echo $gender; ?></option>  
            </select>  

            <label>College Program:</label>  
            <input type="text" name="course" value="<?php echo $course; ?>"> 
            
            <label>Senior High School Strand:</label>  
            <input type="text" name="strand" value="<?php echo $strand  ; ?>">

            <input type="submit" value="Register" disabled>  
        </form>  
    </div>  
</body>  
</html>
