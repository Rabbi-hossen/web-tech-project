<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>

    <style>
        #container p:nth-child(n+2) {
            display: none;
        }
    </style>
</head>

<body>
    <table border="1" width=70% align="center">
        <tr style="height:50px"" >
            <th width=20%> <a href=" home.php"><img src="pic.png" alt="logo"></a> </th>
            <th width=60%></th>
            <th width=20%>

                <a href="login.php">Logged in as </a> |
                <a href="logout">LogOut</a>

            </th>

        </tr>

        <tr style="height:200px">
            <td> <b>Account</b>
                <hr>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="editprofile.php">Edit profile</a></li>

                    <li><a href="search.php">Search</a></li>
                    <li><a href="offer.php">Offer</a></li>
                    <li><a href="payment.php">payment</a></li>

                    <li><a href="logout.php">LogOut</a></li>

                </ul>

            </td>
            <td>

                <form action="" method="">
                    <fieldset style="background-color: lightgreen;">
                        <legend align="center" style="color:green"> <b> Offer!!!!!!!</b></legend>

                        <table align="center" width=50%
                            style="background-color: #ffffff; filter: alpha(opacity=40); opacity: 0.95;border:1px green solid;">
                            <tr>
                                <td>
                                    <img src="anniversary.png" alt="logo"> <br>


                                    <b>Anniversary offer</b>
                                    <p>date: 25 march</p>
                                    <!-- <button id="btn1" onclick="viewmore()" value=""> -->
                                    <input id="btn1" onclick="viewmore1()" type="button" name="submit"
                                        value="view more">
                                    <div id=view1>
                                        <p></p>
                                    </div>


                                </td>
                                <td>
                                    <img src="anniversary.png" alt="logo"> <br>

                                    <b>Anniversary offer</b>
                                    <p>date: 25 march</p>
                                    <input id="btn2" onclick="viewmore2()" type="button" name="submit"
                                        value="view more">
                                    <p id="view2"></p>

                                </td>
                                <td>
                                    <img src="anniversary.png" alt="logo"> <br>
                                    <b>Anniversary offer</b>
                                    <p>date: 25 march</p>
                                    <input id="btn3" onclick="viewmore3()" type="button" name="submit"
                                        value="view more">
                                    <p id="view3"></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="anniversary.png" alt="logo"> <br>
                                    <b>Anniversary offer</b>
                                    <p>date: 25 march</p>
                                    <input id="btn4" onclick="viewmore4()" type="button" name="submit"
                                        value="view more">
                                    <p id="view4"></p>
                                </td>
                                <td>
                                    <img src="anniversary.png" alt="logo"> <br>
                                    <b>Anniversary offer</b>
                                    <p>date: 25 march</p>
                                    <input id="btn5" onclick="viewmore5()" type="button" name="submit"
                                        value="view more">
                                    <p id="view5"></p>
                                </td>
                                <td>
                                    <img src="anniversary.png" alt="logo"> <br>
                                    <b>Anniversary offer</b>
                                    <p>date: 25 march</p>
                                    <input id="btn6" onclick="viewmore6()" type="button" name="submit"
                                        value="view more">
                                    <p id="view6"></p>
                                </td>

                            </tr>
                            <tr>
                                <td colspan="3" align="center">

                                    <input id="btn7" onclick="viewmore7()" type="button" name="submit"
                                        value="view more for contact us">
                                    <p id="view7"></p>

                                </td>
                            </tr>

                            </tbody>
                        </table>

    </table>
    </fieldset>
    </form>
    </td>

    <td>

    </td>


    </tr>
    <tr style="height:50px">
        <td colspan=3 align="center">coppy right (C) 2017</td>
    </tr>


    </table>





</body>

</html>

<script>
    function viewmore1() {
        document.getElementById("view1").innerHTML = "1)only available  \ 2)per person only one  \ 3)may change anytime";
        document.getElementById("btn1").style.display = "none";

    }
    function viewmore2() {
        document.getElementById("view2").innerHTML = "1)only available  \ 2)per person only one  \ 3)may change anytime";
        document.getElementById("btn2").style.display = "none";
    }
    function viewmore3() {
        document.getElementById("view3").innerHTML = "1)only available  \ 2)per person only one  \ 3)may change anytime";
        document.getElementById("btn3").style.display = "none";
    }
    function viewmore4() {
        document.getElementById("view4").innerHTML = "1)only available  \ 2)per person only one  \ 3)may change anytime";
        document.getElementById("btn4").style.display = "none";
    }
    function viewmore5() {
        document.getElementById("view5").innerHTML = "1)only available  \ 2)per person only one  \ 3)may change anytime";
        document.getElementById("btn5").style.display = "none";
    }
    function viewmore6() {
        document.getElementById("view6").innerHTML = "1)only available  \ 2)per person only one  \ 3)may change anytime";
        document.getElementById("btn6").style.display = "none";
    }
    function viewmore7() {
        document.getElementById("view7").innerHTML = "call: 01515270586";
        document.getElementById("btn7").style.display = "none";
    }



</script>