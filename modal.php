<!DOCTYPE html>
<html>
<head>
    <style>
        #grey {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.7);
            display: none;
        }
        #white {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 70%;
            max-width: 500px; 
            padding: 20px;
            background-color: white;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
    <h1>ORDERS</h1>

    <button id="open">Add</button><br><br>
    <div id="grey">
        <div id="white">
            <span class="close" id="close">&times;</span>
            <form action="new.php" method="get" target="iframe"> <!-- target para same loc parin -->
                <label for="item">Item:</label><br><br>
                <input type="checkbox" name="Pizza" id="Pizza">  
                <label for="Pizza">Pizza : </label> $500 <input type="number" name="pizzaQty" value=0 ><br>  
                <input type="checkbox" name="Pasta" id="Pasta">  
                <label for="Pasta">Pasta : </label> $200 <input type="number" name="pastaQty" value=0 ><br><br>

                <input type="submit" value="Add Item"><br>
            </form> 
        </div>
    </div>
    <iframe src="new.php" frameborder="1" width="50%" height="100%" name="iframe" align=center></iframe> <!-- name attribute ay para sa loc -->
    <script>
        var modal = document.getElementById("grey");
        var btn = document.getElementById("open");
        var close = document.getElementById("close");
        btn.onclick = function() {
            modal.style.display = "block";
        }
        close.onclick = function() {
            modal.style.display = "none";
        }
    </script>
</body>
</html>
