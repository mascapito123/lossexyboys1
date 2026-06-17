<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header{
            background-color: aqua;
            grid-area:uno;
            display:flex;
            flex-direction: column;
            justify-content: space-between;
        }
        nav{
            background-color: blanchedalmond;
            grid-area:dos;
            display: flex;
            justify-content: center;
            flex-direction: column;
        }
        img{
            width: 200px;
            height:300px;
        }
        section{
            background-color: brown;
            grid-area: tres;
            display:flex;
            flex-direction:row;
            flex-wrap: wrap;
            justify-content: space-around;
        }
footer{
    background-color: yellow;
    grid-area:cua;
}
body{
    display: grid;
    grid-template-rows: 100px 700px 200px;
    grid-template-columns: 30% 70%;
    grid-template-areas:
    "uno uno"
    "tres tres"
    "cua cua ";
    gap:5px;
}
a{
    background-color:blueviolet;
    height: 100px;
}
 form{
               
                padding: 150px;
                margin: 100px;
            
                background-color: goldenrod;
            }
           

@media(max-width:700px){

footer{
    background-color: red;
}
body{
    display: grid;
    grid-template-rows: 200px 400px 400px 200px;
    grid-template-columns: 100%;
    grid-template-areas:
    "uno"
    "dos"
    "tres"
    "cua";
    gap:5px;
}

}

    </style>
</head>
<body>
    <header>
        <?php 
        include("menu.php");
        ?>
       
          </header>
    
    <section>
        <form action="bdvali.php" method="post">
            <label>Nombre:</label><input type="text" name="usuario"/><br>
            <label>Contraseña:</label> <input type="password"  name="contra"/><br>
            <input type="submit" name="enviar"/>
        </form>
<a href="https://classroom.google.com/c/ODQzOTU5OTg1MDA5">ir a classrom</a>
        
</section>
    <footer>4</footer>
    <?php ?>
   
    
</body>
</html>