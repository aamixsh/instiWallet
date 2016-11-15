<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Material Design Lite</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">
        <script src="main.js"></script>

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
    <script type="text/javascript">
        function checkUser(str) {
      if (str.length == 0) { 
          document.getElementById("checkResult").innerHTML = "";
          return;
      } else {
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("checkResult").innerHTML = this.responseText;
              }
          };
          xmlhttp.open("GET", "checkUser.php?q=" + str, true);
          xmlhttp.send();
      }
    </script>
  </head>
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Home</span>
          <div class="mdl-layout-spacer"></div>
          <span class="mdl-layout-title">Sign Out</span>

          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
          </div>
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item">About</li>
            <li class="mdl-menu__item">Contact</li>
            <li class="mdl-menu__item">Legal information</li>
          </ul>
        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          <img src="images/user.jpg" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span>hello@example.com</span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons" role="presentation">arrow_drop_down</i>
              <span class="visuallyhidden">Accounts</span>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
              <li class="mdl-menu__item">hello@example.com</li>
              <li class="mdl-menu__item">info@example.com</li>
              <li class="mdl-menu__item"><i class="material-icons">add</i>Add another account...</li>
            </ul>
          </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a id=active class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Home</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">notifications</i>Notifications</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">receipt</i>Transactions</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">assessment</i>Statistics</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">trending_up</i>Trending</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">credit_card</i>Recharge</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">settings</i>Settings</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">live_help</i>FAQ</a>
          <div class="mdl-layout-spacer"></div>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help</i>Help</a>
        </nav>
      </div>

    <!-- <button id="show-dialog" type="button" class="mdl-button">Show Dialog</button> -->
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
          <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--8-col mdl-grid">
              <i id="bal_icon" class="material-icons"> account_balance_wallet </i>
              <text style="font-size: 30px; font-family:'Roboto'; margin-top:80px; margin-left:-80px; color:grey" > Rs 0 </text>
              <text style="font-size: 15px; font-family:'Roboto'; margin-top:160px; margin-left:-70px; color:grey" >Your Balance </text>
               <svg id="bal_left" fill="currentColor" width="200px" height="200px" viewBox="0 0 1 1" class="demo-chart mdl-cell mdl-cell--4-col mdl-cell--3-col-desktop" >        
              <use xlink:href="#piechart" mask="url(#piemask)" />
              <text x="0.5" y="0.5" font-family="Roboto" font-size="0.2" text-anchor="middle" fill="#888" dy="-0.05">82<tspan font-size="0.1" dy="-0.07">%</tspan><tspan x="0.5" y="0.5" font-family="Roboto" font-size="0.1" text-anchor="middle" fill="#888" dy="0.12">of budget used</tspan>
            </text>
            </svg>
            </div>

            <!-- Textfield with Floating Label -->
            <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-grid">
            <form id="pay_form" method="post" >
              <div id="input_box" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input type="text" class="mdl-textfield__input" id="receive_user" name="receive_user" placeholder="Receiver Username" >
                 <span id="checkResult"></span>
              </div>
              <!-- <br> -->
              <!-- Numeric Textfield with Floating Label -->
              <div id="input_box" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="amount" name="amount">
                <label class="mdl-textfield__label" for="amount">Amount</label>
                <span class="mdl-textfield__error">Please enter a valid amount!</span>
              </div>
              <br>
              <button id="show-dialog" type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Pay</button>
              <dialog id="dialog" class="mdl-dialog">
                <h3 class="mdl-dialog__title">Comment</h3>
                <div class="mdl-dialog__content">
                  <div id="dialog_textfield" class="mdl-textfield mdl-js-textfield">
                    <textarea class="mdl-textfield__input" type="text" rows="2" id="comment" name="comment"></textarea>
                    <label class="mdl-textfield__label" for="comment">Comment a reason for this transaction for future reference.</label>
                  </div>
                </div>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option1">
                  <input type="radio" id="option1" name="type" class="mdl-radio__button" checked value="transfer">
                  <span class="mdl-radio__label">Transfer</span>
                </label>
                
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option2" style="margin-left: 50px">
                  <input type="radio" id="option2" name="type" class="mdl-radio__button" value="loan">
                  <span class="mdl-radio__label">Loan</span>
                </label>
                
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option3" style="margin-left:55px">
                  <input type="radio" id="option3" name="type" class="mdl-radio__button" value="purchase">
                  <span class="mdl-radio__label">Purchase</span>
               </label>      
              
                <div class="mdl-dialog__actions"> 
                  <button type="button" class="mdl-button mdl-js-button mdl-button--primary mdl-js-ripple-effect">Cancel</button> 
                  <button type="submit" class="mdl-button mdl-js-button mdl-button--primary mdl-js-ripple-effect" name="pay" id="demo-show-toast">Pay</button>
                </div>
              </dialog>
            </form>
          </div>
          <?php
              session_start();
              $servername = "localhost";
              $username = "root";
              $password = "aayush@123";
              $db = "InstiWallet";

              // Create connection
              $conn = new mysqli($servername, $username, $password, $db);

              // Check connection
              if ($conn->connect_error)
              {
                  die("Connection failed: " . $conn->connect_error);
              }
              echo $_POST['pay'];
              $_SESSSION['sender']=$_POST['user_name'];
              if(isset($_POST['pay']))
              {
                    $user=$_POST['user_name'];
                    $pass=$_POST['user_pass'];
                    echo "<div id='content'>";
                    echo "<center><br>";
                    $receive_user=$_POST['receive_user'];
                    $amount=$_POST['amount'];
                    $comment=$_POST['comment'];
                    if(isset($_POST['transfer']))
                      $type="transfer";
                    else if(isset($_POST['loan']))
                      $type="loan";
                    else if(isset($_POST['purchase']))
                      $type="purchase";
                    $sql="SELECT * from USER where user_name = '$user'";
                    $result=$conn->query($sql);
                    $row=$result->fetch_assoc();
                    echo $user;
                    if($row['balance']<$amount)
                    {
                        echo "<script>
                        (function() {
                          'use strict';
                          window['counter'] = 0;
                          var snackbarContainer = document.querySelector('#demo-toast-example');
                          var showToastButton = document.querySelector('#demo-show-toast');
                          showToastButton.addEventListener('click', function() {
                            'use strict';
                            var data = {message: 'Account balance not enough for transaction!'};
                            snackbarContainer.MaterialSnackbar.showSnackbar(data);
                          });
                        }());
                        </script>";  
                    }
                    $sql = "SELECT * FROM USER where user_name = '$username' and password= '$password'";
                    $result = $conn->query($sql);
                    print_r($result->fetch_all());
                    if($result->num_rows == 1)
                    {
                      $row=$result->fetch_assoc();
                      echo "<br>Hello";
                      echo "<h2>".$row["name"]."</h2>";
                      echo "You've succesfully logged in!<br><br>";
                      echo "Your data is as follows: <br><br>";
                      echo "<table>
                                <tr>
                                  <td><b>User_Name</b></td>
                                  <td><b>Name</b></td>
                                  <td><b>Balance</b></td>
                                  <td><b>Date_Of_Joining</b></td>
                                  <td><b>Last_Online</b></td>
                                  <td><b>Email</b></td>
                                  <td><b>Mobile</b></td>
                                  <td><b>Total_Expense</b></td>
                                </tr>
                                <tr>
                                  <td>".$row["user_name"]."</td>
                                  <td>".$row["name"]."</td>
                                  <td>".$row["balance"]."</td>
                                  <td>".$row["d_o_j"]."</td>
                                  <td>".$row["last_online"]."</td>
                                  <td>".$row["email"]."</td>
                                  <td>".$row["mobile"]."</td>
                                  <td>".$row["total_expense"]."</td>
                                </tr>
                              </table><br><br>
                              <hr height='5px' color='#AAAAAA'><br><br>
                            ";
                      // echo "
                      //  <form method='post' action='index_e.php'>
                      //    <button id='home_e'>Home</button>
                      //  </form>
                      //  <form method='post' action='delete_e.php'>
                      //    <button id='delete_e'>Delete</button>
                      //  </form>
                      //  <form method='post' action='update_e.php'>
                      //    <button id='update_e'>Update</button>
                      //  </form>
                      // ";
                    }
                    else
                    {
                      echo "<br>No result found!<br><br>";
                    }
                    echo "</center>";
                    echo "</div>";
                    $conn->close();
              }
          ?>
            <!-- <svg fill="currentColor" width="200px" height="200px" viewBox="0 0 1 1" class="demo-chart mdl-cell mdl-cell--4-col mdl-cell--3-col-desktop">
              <use xlink:href="#piechart" mask="url(#piemask)" />
              <text x="0.5" y="0.5" font-family="Roboto" font-size="0.3" fill="#888" text-anchor="middle" dy="0.1">82<tspan dy="-0.07" font-size="0.2">%</tspan></text>
            </svg>
            <svg fill="currentColor" width="200px" height="200px" viewBox="0 0 1 1" class="demo-chart mdl-cell mdl-cell--4-col mdl-cell--3-col-desktop">
              <use xlink:href="#piechart" mask="url(#piemask)" />
              <text x="0.5" y="0.5" font-family="Roboto" font-size="0.3" fill="#888" text-anchor="middle" dy="0.1">82<tspan dy="-0.07" font-size="0.2">%</tspan></text>
            </svg>
            <svg fill="currentColor" width="200px" height="200px" viewBox="0 0 1 1" class="demo-chart mdl-cell mdl-cell--4-col mdl-cell--3-col-desktop">
              <use xlink:href="#piechart" mask="url(#piemask)" />
              <text x="0.5" y="0.5" font-family="Roboto" font-size="0.3" fill="#888" text-anchor="middle" dy="0.1">82<tspan dy="-0.07" font-size="0.2">%</tspan></text>
            </svg> -->
          
          <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col">
            <svg fill="currentColor" viewBox="0 0 500 250" class="demo-graph">
              <use xlink:href="#chart" />
            </svg>
            <svg fill="currentColor" viewBox="0 0 500 250" class="demo-graph">
              <use xlink:href="#chart" />
            </svg>
          </div>
          <div class="demo-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">
            <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
              <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                <h2 class="mdl-card__title-text">Updates</h2>
              </div>
              <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                Non dolore elit adipisicing ea reprehenderit consectetur culpa.
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">Read More</a>
              </div>
            </div>
            <div class="demo-separator mdl-cell--1-col"></div>
            <div class="demo-options mdl-card mdl-color--deep-purple-500 mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--3-col-tablet mdl-cell--12-col-desktop">
              <div class="mdl-card__supporting-text mdl-color-text--blue-grey-50">
                <h3>View options</h3>
                <ul>
                  <li>
                    <label for="chkbox1" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                      <input type="checkbox" id="chkbox1" class="mdl-checkbox__input">
                      <span class="mdl-checkbox__label">Click per object</span>
                    </label>
                  </li>
                  <li>
                    <label for="chkbox2" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                      <input type="checkbox" id="chkbox2" class="mdl-checkbox__input">
                      <span class="mdl-checkbox__label">Views per object</span>
                    </label>
                  </li>
                  <li>
                    <label for="chkbox3" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                      <input type="checkbox" id="chkbox3" class="mdl-checkbox__input">
                      <span class="mdl-checkbox__label">Objects selected</span>
                    </label>
                  </li>
                  <li>
                    <label for="chkbox4" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                      <input type="checkbox" id="chkbox4" class="mdl-checkbox__input">
                      <span class="mdl-checkbox__label">Objects viewed</span>
                    </label>
                  </li>
                </ul>
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--blue-grey-50">Change location</a>
                <div class="mdl-layout-spacer"></div>
                <i class="material-icons">location_on</i>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" style="position: fixed; left: -1000px; height: -1000px;">
        <defs>
          <mask id="piemask" maskContentUnits="objectBoundingBox">
            <circle cx=0.5 cy=0.5 r=0.49 fill="white" />
            <circle cx=0.5 cy=0.5 r=0.40 fill="black" />
          </mask>
          <g id="piechart">
            <circle cx=0.5 cy=0.5 r=0.5 />
            <path d="M 0.5 0.5 0.5 0 A 0.5 0.5 0 0 1 0.95 0.28 z" stroke="none" fill="rgba(255, 255, 255, 0.75)" />
          </g>
        </defs>
      </svg>
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 250" style="position: fixed; left: -1000px; height: -1000px;">
        <defs>
          <g id="chart">
            <g id="Gridlines">
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="27.3" x2="468.3" y2="27.3" />
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="66.7" x2="468.3" y2="66.7" />
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="105.3" x2="468.3" y2="105.3" />
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="144.7" x2="468.3" y2="144.7" />
              <line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="184.3" x2="468.3" y2="184.3" />
            </g>
            <g id="Numbers">
              <text transform="matrix(1 0 0 1 485 29.3333)" fill="#888888" font-family="'Roboto'" font-size="9">500</text>
              <text transform="matrix(1 0 0 1 485 69)" fill="#888888" font-family="'Roboto'" font-size="9">400</text>
              <text transform="matrix(1 0 0 1 485 109.3333)" fill="#888888" font-family="'Roboto'" font-size="9">300</text>
              <text transform="matrix(1 0 0 1 485 149)" fill="#888888" font-family="'Roboto'" font-size="9">200</text>
              <text transform="matrix(1 0 0 1 485 188.3333)" fill="#888888" font-family="'Roboto'" font-size="9">100</text>
              <text transform="matrix(1 0 0 1 0 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">1</text>
              <text transform="matrix(1 0 0 1 78 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">2</text>
              <text transform="matrix(1 0 0 1 154.6667 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">3</text>
              <text transform="matrix(1 0 0 1 232.1667 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">4</text>
              <text transform="matrix(1 0 0 1 309 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">5</text>
              <text transform="matrix(1 0 0 1 386.6667 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">6</text>
              <text transform="matrix(1 0 0 1 464.3333 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">7</text>
            </g>
            <g id="Layer_5">
              <polygon opacity="0.36" stroke-miterlimit="10" points="0,223.3 48,138.5 154.7,169 211,88.5
              294.5,80.5 380,165.2 437,75.5 469.5,223.3 	"/>
            </g>
            <g id="Layer_4">
              <polygon stroke-miterlimit="10" points="469.3,222.7 1,222.7 48.7,166.7 155.7,188.3 212,132.7
              296.7,128 380.7,184.3 436.7,125 	"/>
            </g>
          </g>
        </defs>
      </svg>
    <script src="https://code.getmdl.io/1.2.1/material.min.js"></script>
  </body>
</html>
