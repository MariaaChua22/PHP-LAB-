<html>  
<head>      
<title>Grade Ranking</title>      
<style>          
    body {             
    background-color: #DE5D83;             
    color: white;              
    font-family: Times New Roman;          
}            
    .container {             
    width: 450px;             
    height: 250px;             
    border: 3x;     
    border-style: solid;     
    border-color: #f8f8ff;             
    margin: auto;             
    margin-top: 50px;              
    padding: 20px;          
}            

.nameBox {             
    width: 300px;              
    border: 3x;     
    border-style: solid;     
    border-color: #f8f8ff;     
    text-align: center;              
    padding: 10px;              
    margin-bottom: 10px;          
}

.box { 
    width: 90px;             
    height: 90px;             
    border-style: solid;     
    border-color: #f8f8ff;             
    text-align: center;              
    display: inline-block;              
    margin-right: 20px;              
    padding-top: 20px;             
    font-size: 20px;          
}              

.picture {             
    width: 90px;             
    height: 90px;             
    display: inline-block;      
    margin-left: 40px;             
    padding-top: 20px;             
    font-size: 20px;          

}               

form {             
    text-align: center;              
    margin-top: 20px;          
}        
</style>    
</head>   

<body>     
    <form action="" method="POST">        
    <input type="text" name="name" placeholder="Enter Name">        
    <input type="number" name="grade" placeholder="Enter Grade">        
    <input type="submit" name="submit" value="Submit">       
    </form>
<?php 
    if(isset($_POST['submit'])) 
{      
    $name = $_POST['name'];      
    $grade = $_POST['grade'];        
    if($grade >= 93 && $grade <= 100)     
    {         
        $rank = "A";      
    }        
    elseif($grade >= 90)     
    {         
        $rank = "A-";      
    }        
    elseif($grade >= 87)     
    {         
        $rank = "B+";      
    }        
    elseif($grade >= 83)     
    {         
        $rank = "B";      
    }        
    elseif($grade >= 80)     
    {         
        $rank = "B-";      
    }        
    elseif($grade >= 77)     
    {         
        $rank = "C+";      
    }        
    elseif($grade >= 73)     
    {         
        $rank = "C";      
    }           
    elseif($grade >= 70)     
    {         
        $rank = "C-";      
    }        
    elseif($grade >= 67)     
    {         
        $rank = "D+";      
    }        
    elseif($grade >= 63)     
    {         
        $rank = "D";      
    }        
    elseif($grade >= 60)     
    {         
        $rank = "D-";      
    }        
    else     
    {         
        $rank = "F";      
    } 

?>       
    
<div class="container">         
    <div class="nameBox"> 
        Name: <?php echo $name; ?>      
    </div>        
    <div class="box">          
        Rank:<br><br>          
    <?php echo $rank; ?>      
    </div>        
    <div class="box">          
        Grade:<br><br>          
    <?php echo $grade; ?>      
    </div>   
               
<div class="picture">  
    <img src = "image.jpg" alt = "Student Picture">     
</div>   

</div>        
<?php 
}
?>    
</body>  
</html>