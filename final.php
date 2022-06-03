<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
    box-sizing: border-box;
    font-size: 16px;
    font-stretch: 0.17em;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}
.one, .two {
    width: 100%;
    margin: 50px 0;
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.first{
    width: 45%;
    height: 250px;
    background-color: aqua;
    border: 1px solid #03706e;
    border-radius: 15px;
    z-index: 0;
    display: flex;
    align-items: center;
    justify-content: center;
}

.second{
    width: 45%;
    height: 250px;
    background-color:blueviolet;
    border: 1px solid #390057;
    border-radius: 15px;
    z-index: 0;
    display: flex;
    align-items: center;
    justify-content: center;
}

.third{
    width: 45%;
    height: 250px;
    background-color:#4a4646;
    border: 1px solid #4a4646;
    border-radius: 15px;
    z-index: 0;
    display: flex;
    align-items: center;
    justify-content: center;
}

.fourth{
    width: 45%;
    height: 250px;
    background-color:orangered;
    border: 1px solid #c4c400;
    border-radius: 15px;
    z-index: 0;
    display: flex;
    align-items: center;
    justify-content: center;
}
.plybtn{
    margin: 10px 10px;
    border-radius: 0%;
    width:  60px;
    height: 25px;
    -webkit-border-radius: 0%;
    -moz-border-radius: 0%;
    -ms-border-radius: 0%;
    -o-border-radius: 0%;
}

.headerFirstGame, .buttons{
    display: flex;
    align-items: center;
    margin-top: 10px;
    justify-content: space-around;
}

.level{
    width: 10%;
    display: flex;
    justify-content: space-between;
}

#lvl , #num{
    border: none;
    background: none;
    text-align: right;
}

.lastbtn{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 80px;
    height: 35px;
    border: 3px solid black;
    background: none;
    margin: 0 40px;
}

#check , #submit {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 80px;
    height: 35px;
    border: 3px solid black;
    background: none;
    margin: 0 40px;
}

.unknownNumber{
    width: 200px;
    height: 200px;
    border: 2px black solid;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.center{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 50px;
    width: 100%;
}

.guessNum{
    display: flex;
}

.rows{
    display: flex;
    align-items: center;
    justify-content: center;
}

.letters{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 64px;
    width: 64px;
    border: 1px solid black;
    border-radius: 5px;
    margin: 2.5px 2.5px;
    background-color: #fbfcff;
}

.letters input{
    font-size: 20px;
    text-align: center;
    border: none;
    background: none;
    width: 40px;
    height: 40px;
}

.letters input:disabled{
    color: black;
    font-size: 20px;
    text-align: center;
    border: none;
    background: none;
    width: 40px;
    height: 40px;
}

#winLose{
    text-align: center;
    font-size: 30px;
}

#trdgm{
    width: 100%;
    display: block;
    justify-content: center;
    align-items: center;
}

#fthgm{
    display: block;
    align-items: center;
    justify-content: center;
}

.rmbrs{
    height: 150px;
    width: 150px;
    border-radius: 15px;
    margin: 10px;
    transition: all ease 0.2s;
}



.blue{
    background-color: #150475;
}

.blue:active{
    background-color: blue;
    box-shadow: 0px 10px 20px 2px rgba(0,255,255,0.7);
}

.red{
    background-color: #a80505;
}

.red:active{
    background-color: red;
    box-shadow: 0px 10px 20px 2px rgba(255, 0, 0, 0.7);
}

.green{
    background-color: #01420b;
}

.green:active{
    background-color: green;
    box-shadow: 0px 10px 20px 2px rgba(0, 255, 0, 0.7);
}

.yellow{
    background-color:#bda702;
}

.yellow:active{
    background-color: yellow;
    box-shadow: 0px 10px 20px 2px rgba(255, 255, 0, 0.7);
}

.setting{
    width: 100%;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    margin-bottom: 20px;
}

.speed , .count , .buttonn {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 60px;
    height: 30px;
    margin: 0 10px;
}

#test {
    width: 100%;
    height: 10px;
    margin-top: 15px;
    text-align: center;
    font-size: 25px;
}


.test{
    width: 1000px ;
    height: 500px;
    background-color: whitesmoke;
    border: 1px solid black;
}

#fourthForm{
    height: 500px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.circleGreen{
    display: none;
    cursor: crosshair;
    width: 50px;
    height: 50px;
    border-radius: 100%;
    background-color: #01420b;
    position: relative;
    top: 0px;
    left: 0px;

}

.circleGreen:active{
    cursor: crosshair;
    width: 55px;
    height: 55px;
    border-radius: 100%;
    background-color: green;
    position: relative;
    top: 0px;
    left: 0px;
}



.circleRed{
    display: none;
    cursor: crosshair;
    width: 50px;
    height: 50px;
    border-radius: 100%;
    background-color: #a80505;
    position: relative;
    top: 0px;
    left: 0px;

}


.circleRed:active{
    cursor: crosshair;
    width: 55px;
    height: 55px;
    border-radius: 100%;
    background-color: red;
    position: relative;
    top: 0px;
    left: 0px;

}

.circleYellow{
    display: none;
    cursor: crosshair;
    width: 28px;
    height: 28px;
    border-radius: 100%;
    /* border: 1px solid black; */
    background-color: goldenrod;
    position: relative;
    top: 0px;
    left: 0px;
    animation: shining 1000ms infinite;
}

@keyframes shining{
    0% {background-color: goldenrod; box-shadow: none;}
    10% {background-color: gold; box-shadow: 1px 1px rgba(255, 255, 0, 0.7);}
    20% {background-color: goldenrod; box-shadow: none;}
    30% {background-color: gold; box-shadow: 1px 1px rgba(255, 255, 0, 0.7);}
    40% {background-color: goldenrod; box-shadow: none;}
    50% {background-color: gold; box-shadow: 1px 1px rgba(255, 255, 0, 0.7);}
    60% {background-color: goldenrod; box-shadow: none;}
    70% {background-color: gold; box-shadow: 1px 1px rgba(255, 255, 0, 0.7);}
    80% {background-color: goldenrod; box-shadow: none;}
    90% {background-color: gold; box-shadow: 1px 1px rgba(255, 255, 0, 0.7);}
    100% {background-color: goldenrod; box-shadow: none;}
}


.circleYellow:active{
    display: none;
    cursor: crosshair;
    width: 28px;
    height: 28px;
    border-radius: 100%;
    /* border: 1px solid black; */
    background-color: gold;
    position: relative;
    top: 0px;
    left: 0px;

}

.upperTest{
    display: flex;
    justify-content: space-between;
}

.menu{
    width: 90px;
    margin-left: 40px;
    display: block;
}

.leaderBoard{
    width: 90px;
    display: none;
}

.icon{
    width: 24px;
    height: 24px;
}

.input{
    display: none;
}

</style>
</head>
<body>
<!-- PHP CODES -->
    <?php
        $unknownNum = 0;
        $input = 0;
        $max = 0;
            if(isset($_GET['start'])){
                $level = $_GET['level'];
                switch($level){
                    case "easy":
                        $max = 5;
                    break;
                    case "normal":
                        $max = 10;
                    break;
                    case "hard":
                        $max = 20;
                    break;
                }
            $unknownNum = rand(1,$max);
        }


    ?>
    <div class="one">
        <div class="first" id='1'>
            <button class="plybtn" onclick="change('1','ply1','fstgm')" id="ply1">PLAY</button>
            <form>
                <div class="firstGame" id="fstgm">
                    <div class="headerFirstGame">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" onclick="help()"><path d="M22 8.51v1.372h-2.538c.02-.223.038-.448.038-.681 0-.237-.017-.464-.035-.69h2.535zm-10.648-6.553v-1.957h1.371v1.964c-.242-.022-.484-.035-.726-.035-.215 0-.43.01-.645.028zm5.521 1.544l1.57-1.743 1.019.918-1.603 1.777c-.25-.297-.593-.672-.986-.952zm-10.738.952l-1.603-1.777 1.019-.918 1.57 1.743c-.392.28-.736.655-.986.952zm-1.597 5.429h-2.538v-1.372h2.535c-.018.226-.035.454-.035.691 0 .233.018.458.038.681zm9.462 9.118h-4c-.276 0-.5.224-.5.5s.224.5.5.5h4c.276 0 .5-.224.5-.5s-.224-.5-.5-.5zm0 2h-4c-.276 0-.5.224-.5.5s.224.5.5.5h4c.276 0 .5-.224.5-.5s-.224-.5-.5-.5zm.25 2h-4.5l1.188.782c.154.138.38.218.615.218h.895c.234 0 .461-.08.615-.218l1.187-.782zm3.75-13.799c0 3.569-3.214 5.983-3.214 8.799h-1.989c-.003-1.858.87-3.389 1.721-4.867.761-1.325 1.482-2.577 1.482-3.932 0-2.592-2.075-3.772-4.003-3.772-1.925 0-3.997 1.18-3.997 3.772 0 1.355.721 2.607 1.482 3.932.851 1.478 1.725 3.009 1.72 4.867h-1.988c0-2.816-3.214-5.23-3.214-8.799 0-3.723 2.998-5.772 5.997-5.772 3.001 0 6.003 2.051 6.003 5.772z"/></svg>
                        <div class="level">
                            <h1>Level:</h1>
                            <select name="level" id="lvl">
                                <option value="easy">1-5</option>
                                <option value="normal">1-10</option>
                                <option value="hard">1-20</option>
                            </select>
                        </div>
                    </div>
                    <div class="center">
                        <div class="unknownNumber" id="unkNum">
                            <?php
                                echo "-?-";
                            ?>
                        </div>
                    </div>
                    <div class="center">
                        <div class="guessNum">
                            <h1 id='help'>Guess The Number:</h1>
                            <input type="number" id="num" value="0" name="input">
                        </div>
                    </div>
                    <div class="center">
                        <div class="buttons">
                            <button type="submit" name="start" id="submit">Start</button>
                            <div name="check" id='check' onclick="check()">Check</div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="second" id='2'>
            <button class="plybtn" onclick="change('2','ply2','sndgm')" id="ply2">PLAY</button>
            <form>
                    <div class="secondGame" id="sndgm">
                        <div class="rows">
                            <div class="letters" id="l1-1">
                                <input type="text" maxlength="1" id="a1-1">
                            </div>
                            <div class="letters" id="l1-2">
                                <input type="text" maxlength="1" id="a1-2">
                            </div>
                            <div class="letters" id="l1-3">
                                <input type="text" maxlength="1" id="a1-3">
                            </div>
                            <div class="letters" id="l1-4">
                                <input type="text" maxlength="1" id="a1-4">
                            </div>
                            <div class="letters" id="l1-5">
                                <input type="text" maxlength="1" id="a1-5">
                            </div>
                        </div>
                        <div class="rows">
                        <div class="letters" id="l2-1">
                                <input type="text" maxlength="1" id="a2-1">
                            </div>
                            <div class="letters" id="l2-2">
                                <input type="text" maxlength="1" id="a2-2">
                            </div>
                            <div class="letters" id="l2-3">
                                <input type="text" maxlength="1" id="a2-3">
                            </div>
                            <div class="letters" id="l2-4">
                                <input type="text" maxlength="1" id="a2-4">
                            </div>
                            <div class="letters" id="l2-5">
                                <input type="text" maxlength="1" id="a2-5">
                            </div>
                        </div>
                        <div class="rows">
                        <div class="letters" id="l3-1">
                                <input type="text" maxlength="1" id="a3-1">
                            </div>
                            <div class="letters" id="l3-2">
                                <input type="text" maxlength="1" id="a3-2">
                            </div>
                            <div class="letters" id="l3-3">
                                <input type="text" maxlength="1" id="a3-3">
                            </div>
                            <div class="letters" id="l3-4">
                                <input type="text" maxlength="1" id="a3-4">
                            </div>
                            <div class="letters" id="l3-5">
                                <input type="text" maxlength="1" id="a3-5">
                            </div>
                        </div>
                        <div class="rows">
                        <div class="letters" id="l4-1">
                                <input type="text" maxlength="1" id="a4-1">
                            </div>
                            <div class="letters" id="l4-2">
                                <input type="text" maxlength="1" id="a4-2">
                            </div>
                            <div class="letters" id="l4-3">
                                <input type="text" maxlength="1" id="a4-3">
                            </div>
                            <div class="letters" id="l4-4">
                                <input type="text" maxlength="1" id="a4-4">
                            </div>
                            <div class="letters" id="l4-5">
                                <input type="text" maxlength="1" id="a4-5">
                            </div>
                        </div>
                        <div class="rows">
                        <div class="letters" id="l5-1">
                                <input type="text" maxlength="1" id="a5-1">
                            </div>
                            <div class="letters" id="l5-2">
                                <input type="text" maxlength="1" id="a5-2">
                            </div>
                            <div class="letters" id="l5-3">
                                <input type="text" maxlength="1" id="a5-3">
                            </div>
                            <div class="letters" id="l5-4">
                                <input type="text" maxlength="1" id="a5-4">
                            </div>
                            <div class="letters" id="l5-5">
                                <input type="text" maxlength="1" id="a5-5">
                            </div>
                        </div>
                        <div class="rows">
                        <div class="letters" id="l6-1">
                                <input type="text" maxlength="1" id="a6-1">
                            </div>
                            <div class="letters" id="l6-2">
                                <input type="text" maxlength="1" id="a6-2">
                            </div>
                            <div class="letters" id="l6-3">
                                <input type="text" maxlength="1" id="a6-3">
                            </div>
                            <div class="letters" id="l6-4">
                                <input type="text" maxlength="1" id="a6-4">
                            </div>
                            <div class="letters" id="l6-5">
                                <input type="text" maxlength="1" id="a6-5">
                            </div>
                        </div>
                        <div class="buttons">
                            <div onclick="first()" id="check">Check</div>
                        </div>
                        <!-- PHP CODES -->
                        <?php
                            $file = file('words.txt');
                            $wCount = count($file);
                            $rand_word = file('words.txt')[rand(0, count(file('words.txt')) - 1)];
                            $word =  substr($rand_word,0,5);
                        ?>
                        <div id="winLose"></div>
                    </div>
            </form>
        </div>
    </div>
    <div class="two">
        <div class="third" id='3'>
            <button class="plybtn" onclick="change('3','ply3','trdgm')" id="ply3">PLAY</button>
            <form method="POST">
                <div class="thirdGame" id="trdgm">
                    <div class="setting">
                        <div class="speed">
                            <select name="speed" id="spd" style="background-color: grey; color:white">
                                <option value="slow">slow</option>
                                <option value="normal">normal</option>
                                <option value="fast">fast</option>
                            </select>
                        </div>
                        <div class="count">
                            <select name="count" id="cnt" style="background-color: grey; color:white">
                                <option value="5">5</option>
                                <option value="7">7</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <div class="buttonn">
                            <button style="background-color: grey; color:white; border: none" name="startRmbGame">submit</button>
                        </div>
                    </div>
                    <div class="rows">
                        <div class="rmbrs , blue" id="blue"  onclick="sumArr('b1')"></div>
                        <div class="rmbrs , red" id="red"  onclick="sumArr('b2')"></div>
                    </div>
                    <div class="rows">
                        <div class="rmbrs , green" id="green"  onclick="sumArr('b3')"></div>
                        <div class="rmbrs , yellow" id="yellow"  onclick="sumArr('b4')"></div>
                    </div>
                    <div id="test">
                    </div>
                    <div class="center">
                        <div class="buttons">
                                <div name="checkRmb" id='check' onclick="checkRmb()">Check</div>
                                <div name="startRmb" id='submit' onclick="startRmb()">Start</div>
                        </div>
                    </div>
                    <?php

                    $counT = 0;
                    $speed = 0;
                    if(isset($_POST['startRmbGame'])){
                        $speed = $_POST['speed'];
                        $count = $_POST['count'];
                        switch($count){
                            case "5":
                                $counT = 5;
                            break;
                            case "7":
                                $counT = 7;
                            break;
                            case "10":
                                $counT = 10;
                            break;
                        }

                        switch($speed){
                            case "slow":
                                $speed = 500;
                            break;
                            case "normal":
                                $speed = 200;
                            break;
                            case "fast":
                                $speed = 100;
                            break;
                        }
                    }
                        // echo $counT;
                        $a = array();
                        for($i=0; $i < $counT ;$i++){
                            $r = rand(1,4);
                            array_push($a,$r);
                        }
                    ?>
                </div>
            </form>
        </div>
        <div class="fourth" id='4'>
            <button class="plybtn" onclick="change('4','ply4','fthgm')" id="ply4">PLAY</button>
            <form id="fourthForm" method="POST">
                <div class="fourthGame" id="fthgm">
                    <div class="input center" style="margin-top: 10px;" id="input">
                            <input type="text" name="name">
                            <input type="text" name="number" id="number" style="display: none;">
                            <button name="lastSubmit">submit</button>
                    </div>
                    <div class="upperTest">
                            <div class="test">
                                <div class="circleGreen" id='circleGreen' onclick="hideGreen()">

                                </div>
                                <div class="circleRed" id='circleRed' onclick="hideRed()">

                                </div>
                                <div class="circleYellow" id='circleYellow' onclick="hideYellow()">

                                </div>

                            </div>
                            <div class="menu">
                                    <div onclick="hideIcon()" class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M7 19h-6v-11h6v11zm8-18h-6v18h6v-18zm8 11h-6v7h6v-7zm1 9h-24v2h24v-2z"/></svg>
                                    </div>
                                    <div class="leaderBoard" id="board" style="font-size:12px">
                                        <?php
                                            if(isset($_POST['lastSubmit'])){
                                                $file = 'leaderboard.txt';
                                                $name = $_POST['name'];
                                                $score = $_POST['number'];
                                                $Score = (int)$score;
                                                $sumOF = $name . "~" . $Score .PHP_EOL;
                                                file_put_contents($file , $sumOF , FILE_APPEND);
                                            }

                                            echo file_get_contents( "leaderboard.txt" );
                                            // echo "<br>"

                                        ?>
                                    </div>
                            </div>
                    </div>
                    <div class="center" style="margin-top: 10px;">
                        <div class="lastbtn" onclick="test()" id="scoreTest" name="bir">Start</div>
                    </div>
                </div>
                <?php
                    $arrX = array();
                    $arrY = array();
                    $arrGoldX = array();
                    $arrGoldY = array();
                    for($c = 0 ;$c < 21; $c++){
                        $x = rand(0,948);
                        $y = rand(0,448);
                        $goldX = rand(0,970);
                        $goldY = rand(0,470);
                        array_push($arrGoldX,$goldX);
                        array_push($arrGoldY,$goldY);
                        array_push($arrX,$x);
                        array_push($arrY,$y);
                    }
                ?>
            </form>
        </div>
    </div>

    <script>
        function help(){
            document.getElementById('help').innerHTML = "The Number is greater than " + "<?php
                echo rand(1,$unknownNum-1);
            ?>" + "<br>" + "The Number is less than " + "<?php
            echo rand($unknownNum+1,$max+1);?>";
        }

        function check(){
            if(document.getElementById('num').value == "<?php echo $unknownNum ?>"){
                document.getElementById('unkNum').innerHTML = "You Win";
            }
            else{
                document.getElementById('unkNum').innerHTML = "false" + "<br>" + "The number was " + "<?php echo $unknownNum ?>";
            }
        }

        for(var i=1; i<=4;i++){
            document.getElementById(i).style.zIndex = '0';
            document.getElementById(i).style.width = '45%';
            document.getElementById(i).style.height = '250px';
            document.getElementById(i).style.position = 'relative';
            document.getElementById(i).style.margin = '0px';
            document.getElementById('fstgm').style.display = 'none';
            document.getElementById('sndgm').style.display = 'none';
            document.getElementById('trdgm').style.display = 'none';
            document.getElementById('fthgm').style.display = 'none';
        }


        function change(id, idd , idt){
            if(document.getElementById(id).style.width == '45%'){
                document.getElementById(id).style.zIndex = '1';
                document.getElementById(id).style.width = '95%';
                document.getElementById(id).style.height = '580px';
                document.getElementById(id).style.position = 'absolute';
                document.getElementById(id).style.display = 'inline';
                document.getElementById(idd).innerHTML = "\xD7";
                document.getElementById(idd).style.width = "25px";
                document.getElementById(idd).style.borderRadius = '50%';
                document.getElementById(idt).style.display = 'inline';
                if(id == '1' || id == '2'){
                    document.getElementById(id).style.marginTop = '330px';
                }
                else{
                    document.getElementById(id).style.marginBottom = '330px';
                }
            }
            else{
                document.getElementById(id).style.zIndex = '0';
                document.getElementById(id).style.width = '45%';
                document.getElementById(id).style.height = '250px';
                document.getElementById(id).style.position = 'relative';
                document.getElementById(id).style.display = 'flex';
                document.getElementById(id).style.margin = '0px';
                document.getElementById(idd).innerHTML = "PLAY";
                document.getElementById(idd).style.width = "60px";
                document.getElementById(idd).style.borderRadius = '0%';
                document.getElementById(idt).style.display = 'none';
            }
        }

        let countOfPress = 0;
        let rows = '';
        let any1 = 0;
        let any2 = 0;
        let any3 = 0;
        let any4 = 0;
        let any5 = 0;
        let any6 = 0;
        let word = "<?php echo $word ?>";3



        console.log(word);
        function first(){
            countOfPress++;
            rows++;
            if(countOfPress == rows){
                for(let t = 1; t < 6; t++){
                    var xx = t.toString();
                    var x = "a" + rows + "-" + xx;
                    document.getElementById(x).disabled = true;
                }
            }


            for(let j = 1; j < 6; j++){
                var jj = j.toString();
                var l1 = "l1-" + jj;
                var a = "a1-" + jj;
                var l2 = "l2-" + jj;
                var a2 = "a2-" + jj;
                var l3 = "l3-" + jj;
                var a3 = "a3-" + jj;
                var l4 = "l4-" + jj;
                var a4 = "a4-" + jj;
                var l5 = "l5-" + jj;
                var a5 = "a5-" + jj;
                var l6 = "l6-" + jj;
                var a6 = "a6-" + jj;
                // var any = "l" + jj;
                if(document.getElementById(a).value == word.charAt(j-1))
                {
                    document.getElementById(l1).style.backgroundColor = 'rgb(121, 184, 81)';
                }
                else if(document.getElementById(a2).value == ' '){}
                else{
                    if(document.getElementById(a).value != word.charAt(j-1))
                    {
                        document.getElementById(l1).style.backgroundColor = '#a4aec4';
                    }
                    for(var k = 0; k<5; k++ ){
                        if(document.getElementById(a).value == word.charAt(k)){
                            document.getElementById(l1).style.backgroundColor = '#f3c237';
                        }
                    }
                }

                if(document.getElementById(a2).value == word.charAt(j-1))
                {
                    document.getElementById(l2).style.backgroundColor = 'rgb(121, 184, 81)';
                }
                else if(document.getElementById(a2).value == ''){}
                else{
                    if(document.getElementById(a2).value != word.charAt(j-1))
                    {
                        document.getElementById(l2).style.backgroundColor = '#a4aec4';
                    }
                    for(var k = 0; k<5; k++ ){
                        if(document.getElementById(a2).value == word.charAt(k)){
                            document.getElementById(l2).style.backgroundColor = '#f3c237';
                        }
                }
            }

            if(document.getElementById(a3).value == word.charAt(j-1))
            {
                document.getElementById(l3).style.backgroundColor = 'rgb(121, 184, 81)';
            }
            else if(document.getElementById(a3).value == ''){}
            else{
                if(document.getElementById(a3).value != word.charAt(j-1))
                {
                    document.getElementById(l3).style.backgroundColor = '#a4aec4';
                }
                for(var k = 0; k<5; k++ ){
                    if(document.getElementById(a3).value == word.charAt(k)){
                        document.getElementById(l3).style.backgroundColor = '#f3c237';
                    }
                }
            }

            if(document.getElementById(a4).value == word.charAt(j-1))
            {
                document.getElementById(l4).style.backgroundColor = 'rgb(121, 184, 81)';
            }
            else if(document.getElementById(a4).value == ''){}
            else{
                if(document.getElementById(a4).value != word.charAt(j-1))
                {
                    document.getElementById(l4).style.backgroundColor = '#a4aec4';
                }
                for(var k = 0; k<5; k++ ){
                    if(document.getElementById(a4).value == word.charAt(k)){
                        document.getElementById(l4).style.backgroundColor = '#f3c237';
                    }
                }
            }

            if(document.getElementById(a5).value == word.charAt(j-1))
            {
                document.getElementById(l5).style.backgroundColor = 'rgb(121, 184, 81)';
            }
            else if(document.getElementById(a5).value == ''){}
            else{
                if(document.getElementById(a5).value != word.charAt(j-1))
                {
                    document.getElementById(l5).style.backgroundColor = '#a4aec4';
                }
                for(var k = 0; k<5; k++ ){
                    if(document.getElementById(a5).value == word.charAt(k)){
                        document.getElementById(l5).style.backgroundColor = '#f3c237';
                    }
                }
            }
            if(document.getElementById(a6).value == word.charAt(j-1))
            {
                document.getElementById(l6).style.backgroundColor = 'rgb(121, 184, 81)';
            }
            else if(document.getElementById(a6).value == ''){}  
            else{
                if(document.getElementById(a6).value != word.charAt(j-1))
                {
                    document.getElementById(l6).style.backgroundColor = '#a4aec4';
                }
                for(var k = 0; k<5; k++ ){
                    if(document.getElementById(a6).value == word.charAt(k)){
                        document.getElementById(l6).style.backgroundColor = '#f3c237';
                    }
                }
            }

            if(countOfPress == 1){
                if(document.getElementById(l1).style.backgroundColor == 'rgb(121, 184, 81)'){
                    any1 = any1 + 1;
                }
            }
            if(countOfPress == 2){
                if(document.getElementById(l2).style.backgroundColor == 'rgb(121, 184, 81)'){
                    any2 = any2 + 1;
                }
            }
            if(countOfPress == 3){
                if(document.getElementById(l3).style.backgroundColor == 'rgb(121, 184, 81)'){
                    any3 = any3 + 1;
                }
            }
            if(countOfPress == 4){
                if(document.getElementById(l4).style.backgroundColor == 'rgb(121, 184, 81)'){
                    any4 = any4 + 1;
                }
            }
            if(countOfPress == 5){
                if(document.getElementById(l5).style.backgroundColor == 'rgb(121, 184, 81)'){
                    any5 = any5 + 1;
                }
            }
            if(countOfPress == 6){
                if(document.getElementById(l6).style.backgroundColor == 'rgb(121, 184, 81)'){
                    any6 = any6 + 1;
                }
            }
            }
            if(any1==5 || any2==5 || any3 == 5 || any4 == 5 || any5 == 5 || any6 == 5){
                document.getElementById('winLose').innerHTML = 'YOU WIN';
            }
            if(countOfPress == 6){
                if(any6 != 5){
                document.getElementById('winLose').innerHTML = 'YOU LOSE' + '<br>' + 'The word was ' + word;
                }
            }
        }


        let x =  0;
        let phpArray = [];
        let speed = "<?php echo $speed ?>"

        function startRmb(){
            let start = setInterval(
            function(){
                phpArray = "<?php echo json_encode($a) ?>";
                console.log(phpArray[x]);
                if(phpArray[x] == 1){
                    document.getElementById('blue').style.backgroundColor = 'blue';
                    document.getElementById('blue').style.boxShadow = '0px 10px 20px 2px rgba(0,255,255,0.7)';
                    document.getElementById('red').style.backgroundColor = '#a80505';
                    document.getElementById('red').style.boxShadow = 'none';
                    document.getElementById('green').style.backgroundColor = '#01420b';
                    document.getElementById('green').style.boxShadow = 'none';
                    document.getElementById('yellow').style.backgroundColor = '#bda702';
                    document.getElementById('yellow').style.boxShadow = 'none';
                }
                else if(phpArray[x] == 2){
                    document.getElementById('red').style.backgroundColor = 'red';
                    document.getElementById('red').style.boxShadow = '0px 10px 20px 2px rgba(255,0,0,0.7)';
                    document.getElementById('blue').style.backgroundColor = '#150475';
                    document.getElementById('blue').style.boxShadow = 'none';
                    document.getElementById('green').style.backgroundColor = '#01420b';
                    document.getElementById('green').style.boxShadow = 'none';
                    document.getElementById('yellow').style.backgroundColor = '#bda702';
                    document.getElementById('yellow').style.boxShadow = 'none';
                }
                else if(phpArray[x] == 3){
                    document.getElementById('green').style.backgroundColor = 'green';
                    document.getElementById('green').style.boxShadow = '0px 10px 20px 2px rgba(0,255,0,0.7)';
                    document.getElementById('red').style.backgroundColor = '#a80505';
                    document.getElementById('red').style.boxShadow = 'none';
                    document.getElementById('blue').style.backgroundColor = '#150475';
                    document.getElementById('blue').style.boxShadow = 'none';
                    document.getElementById('yellow').style.backgroundColor = '#bda702';
                    document.getElementById('yellow').style.boxShadow = 'none';
                }
                else if(phpArray[x] == 4){
                    document.getElementById('yellow').style.backgroundColor = 'yellow';
                    document.getElementById('yellow').style.boxShadow = '0px 10px 20px 2px rgba(255,255,0,0.7)';
                    document.getElementById('blue').style.backgroundColor = '#150475';
                    document.getElementById('blue').style.boxShadow = 'none';
                    document.getElementById('green').style.backgroundColor = '#01420b';
                    document.getElementById('green').style.boxShadow = 'none';
                    document.getElementById('red').style.backgroundColor = '#a80505';
                    document.getElementById('red').style.boxShadow = 'none';
                }
                else if(phpArray[x] == undefined){
                    console.log('ooooooooooooo');
                    window.clearInterval(start);
                    document.getElementById('blue').style.backgroundColor = '';
                    document.getElementById('blue').style.boxShadow = '';
                    document.getElementById('red').style.backgroundColor = '';
                    document.getElementById('red').style.boxShadow = '';
                    document.getElementById('green').style.backgroundColor = '';
                    document.getElementById('green').style.boxShadow = '';
                    document.getElementById('yellow').style.backgroundColor = '';
                    document.getElementById('yellow').style.boxShadow = '';

                }
                else{
                    document.getElementById('red').style.backgroundColor = '#a80505';
                    document.getElementById('red').style.boxShadow = 'none';
                    document.getElementById('blue').style.backgroundColor = '#150475';
                    document.getElementById('blue').style.boxShadow = 'none';
                    document.getElementById('green').style.backgroundColor = '#01420b';
                    document.getElementById('green').style.boxShadow = 'none';
                    document.getElementById('yellow').style.boxShadow = 'none';
                    document.getElementById('yellow').style.backgroundColor = '#bda702';
                }
                x = x + 1;
            },speed);

        }

        let usersArr = [];

        function sumArr(num){
            let b = num[1];
            console.log(b);
            usersArr.push(b);
        }



        let countT = 0;
        function checkRmb(){
            for(let t = 0; t < 5; t++){
                console.log(usersArr[t]);
                console.log(phpArray[2*t+1]);
                if(usersArr[t] == phpArray[2*t+1]){
                    countT++
                }
            }

            if(countT == 5){
                document.getElementById('test').innerHTML = 'YOU WIN';
            }
            else{
                document.getElementById('test').innerHTML = 'YOU LOSE';
            }
        }


        let Score = 0;


        function hideGreen(){
            document.getElementById('circleGreen').style.display = 'none';
            Score++;
            console.log(Score);
        }

        function hideRed(){
            document.getElementById('circleRed').style.display = 'none';
            Score--;
            console.log(Score);

        }

        function hideYellow(){
            document.getElementById('circleYellow').style.display = 'none';
            Score = Score + 10;
        }

        var arrX = <?php echo json_encode($arrX) ?>;
        var arrY = <?php echo json_encode($arrY) ?>;
        var arrGoldX = <?php echo json_encode($arrGoldX) ?>;
        var arrGoldY = <?php echo json_encode($arrGoldY) ?>;
        let c = 0;
        let d = 0;
        let v = Math.floor(Math.random() * 20);
        console.log(v);
        let id = 0;
        function test(){
            setInterval(function(){
                if(d == v){
                    document.getElementById('circleYellow').style.display = "flex";
                    document.getElementById('circleYellow').style.top = arrGoldY[d] + 'px';
                    document.getElementById('circleYellow').style.left = arrGoldX[d] + 'px';
                    d++;
                }
                else{
                    console.log(d);
                    d++
                    document.getElementById('circleYellow').style.display = "none";
                }
                if(c < 21 && id == 0){
                    document.getElementById('circleGreen').style.display = "flex";
                    document.getElementById('circleRed').style.display = "none";
                    document.getElementById('circleGreen').style.top = arrY[c] + 'px';
                    document.getElementById('circleGreen').style.left = arrX[c] + 'px';
                    c++;
                    id = Math.floor(Math.random() * 2);
                    if(c==21){
                        document.getElementById('circleRed').style.display = "none";
                        document.getElementById('circleGreen').style.display = "none";
                        document.getElementById('circleYellow').style.display = "none";
                        document.getElementById('scoreTest').style.display = "none";
                        document.getElementById('input').style.display = "flex";
                        document.getElementById('scoreTest').innerHTML = Score;
                        document.getElementById('number').value = Score;

                    }
                }
                else if(c < 21 && id == 1){
                    document.getElementById('circleRed').style.display = "flex";
                    document.getElementById('circleGreen').style.display = "none";
                    document.getElementById('circleRed').style.top = arrY[c] + 'px';
                    document.getElementById('circleRed').style.left = arrX[c] + 'px';
                    c++;
                    id = Math.floor(Math.random() * 2);
                    if(c==21){
                        document.getElementById('circleRed').style.display = "none";
                        document.getElementById('circleGreen').style.display = "none";
                        document.getElementById('circleYellow').style.display = "none";
                        document.getElementById('scoreTest').style.display = "none";
                        document.getElementById('input').style.display = "flex";
                        document.getElementById('scoreTest').innerHTML = Score;
                        document.getElementById('number').value = Score;
                    }
                }
                else{

                }

            }
                ,800);

            }




            function hideIcon(){
                var x = document.getElementById("board");
                if (x.style.display === "none") {
                  x.style.display = "block";
                } else {
                  x.style.display = "none";
                }
            }
    </script>
     

</body>
</html>