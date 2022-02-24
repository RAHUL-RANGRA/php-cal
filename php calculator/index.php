<!DOCTYPE html>
<?php

echo '<span style="color:#196719;text-align:center;">Hello World!. Below is a basic calculator I made!</span>';

ini_set('display_errors',0);
	
	if(isset($_POST['submit']))
	{
		$num1=$_POST['number1'];
		$num2=$_POST['number2'];
		if(is_numeric['$num1'] && is_numeric['$num2'])
		{
			if(isset($_POST['g']))
			{
				$operation=$_POST['g'];
				
				switch($operation)
				{
					case '+' :
					$result=$num1+$num2;
					break;
					
					case '-' :
					$result=$num1-$num2;
					break;
					
					case '*' :
					$result=$num1*$num2;
					break;
					
					
					case '/' :
					$result=$num1/$num2;
					break;
					
					case '%' :
					$result=$num1%$num2;
					break;
				}
				
				
			}
			else
			{
				echo "Please select operation";
			}
			
		}
		else
		{
			echo "Please enter numeric values only";
		}
	}
?>

<html>
<head>
<style> 

div {
    width: 95%;
    border: 1px solid red;
    /* height: 50px; */
    background-color: #007a80;
    padding-top: 5px;
    margin-top: 3px;
    font-weight: bold;
    position: relative;
	/* position: absolute; */
    left: 5px;
}


</style>
</head>
<body>


<div id="get">
		<form method="post" action="">
<div id="group">        
<div id="div1">Enter 1st number: <input type="text" name="number1" value="<?php if(isset($num1)) {echo $num1;} ?> " > </div></br> </br>
        <div id="div2">Enter 2nd number: <input type="text" name="number2"  value="<?php if(isset($num2)) {echo $num2;} ?> " ></div> </br> </br>
Select Operation: </br></br>
                        <div id="div3"><input type="radio" name="g" value="+"> Addition</div> <br/>
                        <div id="div4"><input type="radio" name="g" value="-"> Subtraction</div></br>
                        <div id="div1"><input type="radio" name="g" value="*">Multiplication</div> <br/>
                        <div id="div2"><input type="radio" name="g" value="/">Division</div> </br>
                        <div id="div3"><input type="radio" name="g" value="%">Modulo</div> <br/><br/>
                        <div id="div4"><input type="submit" name="submit"></div><br/><br/>
                        <div id="div5"><h2 style="color:red "> Output: <?php echo $result; ?> </h2></div>
        </div>
</form>

</div>






</body>
</html>