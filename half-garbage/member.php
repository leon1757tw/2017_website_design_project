<?php session_start(); 

if($_SESSION["user_logged_in"] == "yes" && $_SESSION['user_name'] != null){
echo
'<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>會員專區</title>
    <link rel="stylesheet" href="data.css" type="text/css">
</head>
<body>'
	//<!-- <div id="page"> -->
    //<!-- here is header -->
        echo '<div id="header">
            <div id="navigation">
                <div id="mark">
                    <a href="home.html"><img src="fixed_part_photo/mark.png" alt="mark"></a>
                </div>
                <div id="user">
                        <a href="login.html" >
                            <img src="fixed_part_photo/user.png" alt="user" width="35px">
                        </a>
                </div>
                <ul id="menu">
                    <li class="selected">
                        <a href="member.html" target="parent" style="text-decoration:none">會員專區</a>
                    </li>
                    <li>
                        <a href="search.html" target="parent" style="text-decoration:none">訂單查詢</a>
                    </li>
                    <li>
                        <a href="shopping-car.html" target="parent" style="text-decoration:none">我的購物車</a>
                    </li>
                    <li>
                        <a href="home.html" target="parent" style="text-decoration:none">馬上購票</a>
                    </li>
                </ul>
                    
            </div>
        </div>'
       
	//<!-- insert your html code here -->
        <div id="member">

            <div id="sidebar_left">
                <div class = "title">
                    <b>會員專區</b><br>
                </div>
                    <br>
                    <a href = "member_information.html">修改資料</a><br>
                    <a href = "member_password.html">修改密碼</a><br>
            </div>
            <div id="content2">
                <div class = "title">
                </div>
            </div>

        </div>
    
    
    //<!-- here is footer -->
    echo '
    <div id="footer">
        <div>
            <p>
                地址:嘉義縣民雄鄉裕農路20號<br><br>
                專線:0922-975-244/05-2277889<br><br>
                <a href="mailto:tesla@ccu.edu.tw" style="text-decoration:none">信箱:carshow@ccu.edu.tw</a> <br><br>
                開放時間:每周一至五9:00AM-6:00PM 周末不開放
            </p>
        </div>
    </div>
//<!-- </div> -->
</body>
</html>'
}else
{
        echo 'You cant see this page!!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>