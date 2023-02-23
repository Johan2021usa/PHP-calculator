<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StylePHP.css"> 
    <title>Evidence 3- Jairo Johan Lasso Ch</title>
</head>
<body id="parent-div">
    
    <div>
        <div class="child-div" >

            <div class="forms-div">

                <form id="forms-val" class="label-div" method="post" action="index.php">
                    <label>Value 1</label>
                    <input type="number" id="inp1" name="value1" placeholder="Enter the first number">
                    <label>Value 2</label>
                    <input type="number" id="inp2" name="value2" placeholder="Enter the second number">
                </form>       
                
            </div>

            <form class="buttons-div">
                <!--type=action done by the system, value="brought value", name="used by $_post, $_get methods"-->
                <button class ="button-unite" form="forms-val" type="submit" value="sum" name="sum">sum</button>
                <button class ="button-unite" form="forms-val" type="submit" value="substraction" name="substraction">substraction</button>
                <button class ="button-unite" form="forms-val" type="submit" value="division" name="division">division</button>
                <button class ="button-unite" form="forms-val" type="submit" value="multiplication" name="multiplication">multiplication</button>
            </form>
            
            <?php 
                include('biblioteca.php');
                
                $value1 = $_POST['value1'];
                $value2 = $_POST['value2'];

                if(strlen($value1) and strlen($value2) >0){
                    if(isset($_POST['sum'])){
                        $value3 = $_POST['sum'];
                    }
                    elseif(isset($_POST['substraction'])){
                        $value3 = $_POST['substraction'];
                    }
                    elseif(isset($_POST['division'])){
                        $value3 = $_POST['division'];
                    }
                    elseif(isset($_POST['multiplication'])){
                        $value3 = $_POST['multiplication'];
                    }

                    $total = calculation($value1, $value2, $value3);

                }else{
                    $total = "Please fill out the form with numbers";
                }
            ?>
            <div class="result-div">
                <span>result</span>
                <div id="total-div"> 
                    <?php echo $total?>
                </div>
            </div>
        </div>
        <div class="presentation">
            <div>
                <strong>USO DE FUNCIONES EN PHP</strong><br><br>
                <strong>Developer: </strong><br>Jairo Johan Lasso Ch.<br>
                <strong>Tecnologias usadas:</strong><br> PHP, CSS, HTML
            </div>
        </div>
    </div>

</body>
</html>