
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        form{
            background-color: white;

        }

body {
    background-color: beige;
}

.container{
    width:505px;
    \margin: auto;
    color: white;
}


#div_login{
    border: 3px solid gray;
    border-radius: 1px;
    width: 500px;
    height: 350px;
    \box-shadow: 0px 2px 2px 0px  gray;
    margin:  auto;
    margin-top: 150px;
    margin-bottom: 10px;

}

#div_login h1{
    margin-top: 20px;
    font-weight: normal;
    padding: 10px;
    background-color: white;
    color: black;
    margin-bottom: 25px;
    font-family: Georgia;
    
}

#div_login div{
    clear: both;
    margin-top: 15px;
    padding: 5px;
}

#div_login .textbox{
    width: 75%;
    padding: 10px;
    margin: auto;
}

#div_login input[type=submit]{
    padding: 7px;
    width: 100px;
    background-color: purple;
    border: 0px;
    font-family: Georgia;
    color: white;
}
</style>





<div class="container">
    <form method="post" action="home.php">
        <div id="div_login">
            <h1>Login</h1>
            <div>
                <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
            </div>
            <div>
                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
            </div>
            <div>
                <input type="Button" value="Submit" name="but_submit" id="but_submit" />
            </div>
        </div>
    </form>
</div>


</body>
</html>
    
