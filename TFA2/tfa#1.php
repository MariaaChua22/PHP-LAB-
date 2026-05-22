<html>  
<head>  
    <title>Length Conversion</title>  
    <style>  
        body {  
            font-family: Arial;  
            background-color: #f2f2f2;  
        }  

        .container {  
            width: 500px;  
            margin: auto;  
            margin-top: 50px;  
            background: white;  
            padding: 20px;  
            border-radius: 10px;  
        }  

        h2 { 
            text-align: center;  
        }  

        button {  
            width: 100%;  
            padding: 10px;  
            margin-top: 15px;  
            background-color: darkblue;  
            color: white;  
            border: none;  
        }  

        .result {  
            margin-top: 20px;  
            font-size: 20px;  
            text-align: center;  
        }  
    </style>  

</head>  
<body> 

<div class="container">  
    <h2>Length Conversion</h2>  
    <form action = "" method="POST">  
        <label>Enter Value:</label>  
        <input type="number" name = "value">  
        <label>Convert From:</label>  
        <select name="from">  
            <option value="meter">Meter</option>  
            <option value="centimeter">Centimeter</option>  
            <option value="kilometer">Kilometer</option>  
        </select>  


        <label>Convert To:</label>  
        <select name="to">  
            <option value="meter">Meter</option>  
            <option value="centimeter">Centimeter</option>  
            <option value="kilometer">Kilometer</option>  
        </select>  
        <button type="submit" name="convert">Convert</button>  

    </form>  

<?php  

  if(isset($_POST['convert']))
    {  
        $value = $_POST['value'];  
        $from = $_POST['from'];  
        $to = $_POST['to'];  
        $result = 0; 

    if($from == "meter" && $to == "centimeter") 
    {  
        $result = $value * 100;  
    }  

    elseif($from == "meter" && $to == "kilometer") 
    {  
        $result = $value / 1000;  
    }  

    elseif($from == "centimeter" && $to == "meter") 
    {  
        $result = $value / 100;  
    }  

    elseif($from == "centimeter" && $to == "kilometer") 
    {  
        $result = $value / 100000;  
    }  

    elseif($from == "kilometer" && $to == "meter") 
    {  
        $result = $value * 1000;  
    }  

    elseif($from == "kilometer" && $to == "centimeter") 
    {  
        $result = $value * 100000;  
    }  

    else 
    {  
        $result = $value;  
    }  

    echo "<div class='result'>";  
    echo "Converted Value: " . $result; 
    echo "</div>";  
}  

?>  

</div>  
</body>  
</html> 