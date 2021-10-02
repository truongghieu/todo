<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href ="style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/script.js" defer="defer" ></script>

    <title>Document</title>
</head>
<body>
    <h1>Việc Cần Làm</h1>
    <form id="form" > 
        <input 
            type="text"
            id="input" 
            class="input" 
            placeholder="Nhập Việc Cần Làm" 
            autocomplete="off"
        />
        <button type="submit" class="button" id="add"> ADD </button>
        <button type="submit" class="button" id="clear"> Clear </button>
        <ul class="todos" id="todos">
            <?php
            require $_SERVER["DOCUMENT_ROOT"]."/inc/conn.php";
            $sql = "select * from dataa";
            $r = mysqli_query($conn,$sql);
            if($r->num_rows > 0){
                while($row = $r->fetch_assoc()){
                    echo '<li>'.$row["list"].'</li>';
                }
            } 

           
            ?>
            
        </ul>
            
    
     </form> 
     <script src="/script.js" ></script>
     <div id="result"></div>
</body>
</html>