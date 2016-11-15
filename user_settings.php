<?php
    session_start();
?>
<?php
    if(isset($_POST['upload_pic'])){
      move_uploaded_file($_FILES['img_file']['tmp_name'],"images/profiles/".$_FILES['img_file']['name']);
      $con = mysqli_connect("localhost","root","aayush@123","images/profiles");
      $q = mysqli_query($con,"UPDATE USER SET profile_pic = '".$_FILES['file']['name']."' WHERE user_name = '".$_SESSION['sender']."'");
    }
?>

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
    <script src="jQuery.ui.datepicker.js"></script>
    <script src="jquery.ui.datepicker.mobile.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
      $(function(){
        $("#datepicker").datepicker();
      });
    </script>
    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="user_settings.css">

     <script>
      function enable_edit(_id){
        document.getElementById(_id).disabled = false;
        document.getElementById(_id).focus();
        document.getElementById("save_changes_btn").disabled = false;
      }
    </script>

  </head>
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
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
          <img src="images/profiles/default_pic.jpg" class="demo-avatar">
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
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Home</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">notifications</i>Notifications</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">receipt</i>Transactions</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">assessment</i>Statistics</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">trending_up</i>Trending</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">credit_card</i>Recharge</a>
          <a id=active class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">settings</i>Settings</a>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">live_help</i>FAQ</a>
          <div class="mdl-layout-spacer"></div>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help</i>Help</a>
        </nav>
      </div>

      <main class="mdl-layout__content mdl-color--grey-100">
          <ul id="temp" class="tab">
            <li style="width: 50%"><center><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'London')" id="general_settings" >General Settings</a></center></li>
            <li style="width: 50%"><center><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Paris')" id="general_settings">Privacy Settings</a></center></li>
          </ul>

          <div id="London" class="tabcontent">
            <!-- List items with avatar and action -->
            <style>
            .demo-list-action {
              width: 300px;
            }
            </style>

            <div class="demo-list-action mdl-list" style="width:55%; margin: auto; margin-top:80px">
              <div class="mdl-list__item">
                <span class="mdl-list__item-primary-content">
                  <img src="images/profiles/default_pic.jpg" id="show-dialog">
                  <dialog id="dialog" class="mdl-dialog">
                  <h3 class="mdl-dialog__title">Upload a profile pic : </h3>
                  <form action="" method="POST" enctype="multipart/form-data">
                    <input type="file" name="img_file">      
                    <div class="mdl-dialog__actions">
                      <button type="submit" class="mdl-button" id="demo-show-toast" name="upload_pic">Upload</button>              
                    </div>
                  </form>
                </dialog>
                </span>
              </div>
              <div class="mdl-list__item">
                <span class="mdl-list__item-primary-content">
                  <span>Name : </span>
                  <div class="mdl-textfield mdl-js-textfield" style="margin-left:83px; width:60%">
                    <input class="mdl-textfield__input" type="text" id="edit_name" disabled autofocus="false" value="Hitesh" onfocus="this.value=this.value;">
                    <label class="mdl-textfield__label" for="edit_name">Enter new name</label>
                  </div>
                  <a href="javascript:void(0)" onclick="enable_edit('edit_name')" style="margin-left: auto"><i class="material-icons">mode_edit</i></a>
                </span>
              </div>
              <div class="mdl-list__item" style="margin-top: -30px">
                <span class="mdl-list__item-primary-content">
                  <span>Username : </span>
                  <div class="mdl-textfield mdl-js-textfield" style="margin-left:50px; width:60%">
                    <input class="mdl-textfield__input" type="text" id="edit_username" disabled value="ramchandani_hitesh@iitmandi.ac.in" onfocus="this.value=this.value;">
                    <label class="mdl-textfield__label" for="edit_username">Enter new username</label>
                  </div>
                  <a href="javascript:void(0)" onclick="enable_edit('edit_username')" style="margin-left: auto"><i class="material-icons">mode_edit</i></a>
                </span>
              </div>
              <div class="mdl-list__item" style="margin-top: -30px">
                <span class="mdl-list__item-primary-content">
                  <span>Mobile : </span>
                  <div class="mdl-textfield mdl-js-textfield" style="margin-left:76px; width:60%">
                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="edit_number" disabled value="9736401997" onfocus="this.value=this.value;">
                    <label class="mdl-textfield__label" for="edit_number">Enter new mobile number</label>
                    <span class="mdl-textfield__error">Please enter a valid number!</span>
                  </div>
                  <a href="javascript:void(0)" onclick="enable_edit('edit_number')" style="margin-left: auto"><i class="material-icons">mode_edit</i></a>
                </span>
              </div>
              <div class="mdl-list__item" style="margin-top: -30px">
                <span class="mdl-list__item-primary-content">
                  <span>DOB : </span>
                  <div class="mdl-textfield mdl-js-textfield" style="margin-left:94px; width:60%">
                    <input class="mdl-textfield__input" type="text" id="datepicker" disabled value="10'th Feb 1997">
                    <label class="mdl-textfield__label" for="datepicker">Enter new DOB</label>
                    <script>
                      $(function() {
                      $( "#datepicker" ).datepicker();
                      });
                    </script>
                  </div>
                  <a href="javascript:void(0)" onclick="enable_edit('datepicker')" style="margin-left:auto" id="edit_date"><i class="material-icons" >mode_edit</i></a>
                </span>
              </div>
              <div class="mdl-list__item" style="margin-top:-10px">
                <span class="mdl-list__item-primary-content">
                  <span>Password </span>
                  <a href="javascript:void(0)" style="margin-left:auto" id="show-dialog"><i class="material-icons">mode_edit</i></a>
                </span>
              </div>
            </div>
            <dialog class="mdl-dialog" style="width:30%">
                <h3 class="mdl-dialog__title">Change Password</h3>
                <div class="mdl-dialog__content">
                  <div id="input_box" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="password" id="sample3">
                    <label class="mdl-textfield__label" for="sample3">Old Password</label>
                  </div>
                <br>
                <!-- Numeric Textfield with Floating Label -->
                  <div id="input_box" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="password" id="sample4">
                    <label class="mdl-textfield__label" for="sample4">New Password</label>
                  </div>
                  
                  <div id="input_box" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="password" id="sample4">
                    <label class="mdl-textfield__label" for="sample4">Re-enter Password</label>
                  </div>

                </div>    
              
                <div class="mdl-dialog__actions">
                  <button type="button" class="mdl-button">Cancel</button> 
                  <button type="button" class="mdl-button">Confirm</button>               
                </div>
              </dialog>
              <script>
                var dialog = document.querySelector('dialog');
                var showDialogButton = document.querySelector('#show-dialog');
                if (! dialog.showModal) {
                  dialogPolyfill.registerDialog(dialog);
                }
                showDialogButton.addEventListener('click', function() {
                  dialog.showModal();
                });
                dialog.querySelector('.close').addEventListener('click', function() {
                  dialog.close();
                });
              </script>
              
              <center><button disabled id="save_changes_btn" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Save Changes</button></center>
          </div>

          <!-- <div id="Paris" class="tabcontent">
            
          </div> -->
      </main>
      
      <main class="mdl-layout__content mdl-color--grey-100">
        <div id="Paris" class="tabcontent">
          <button id="show-dialog" type="button" class="mdl-button">Show Dialog</button>
  <dialog class="mdl-dialog">
    <h4 class="mdl-dialog__title">Allow data collection?</h4>
    <div class="mdl-dialog__content">
      <p>
        Allowing us to collect data will let us get you the information you want faster.
      </p>
    </div>
    <div class="mdl-dialog__actions">
      <button type="button" class="mdl-button">Agree</button>
      <button type="button" class="mdl-button close">Disagree</button>
    </div>
  </dialog>
  <script>
    var dialog = document.querySelector('dialog');
    var showDialogButton = document.querySelector('#show-dialog');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    showDialogButton.addEventListener('click', function() {
      dialog.showModal();
    });
    dialog.querySelector('.close').addEventListener('click', function() {
      dialog.close();
    });
  </script>
        </div>
      </main>
  
      <script>
          function openCity(evt, cityName) {
              var i, tabcontent, tablinks;
              tabcontent = document.getElementsByClassName("tabcontent");
              for (i = 0; i < tabcontent.length; i++) {
                  tabcontent[i].style.display = "none";
              }
              tablinks = document.getElementsByClassName("tablinks");
              for (i = 0; i < tablinks.length; i++) {
                  tablinks[i].className = tablinks[i].className.replace(" active", "");
              }
              document.getElementById(cityName).style.display = "block";
              evt.currentTarget.className += " active";
          }
          document.getElementById("general_settings").click();
     </script>

     <!--  <div id="London" class="tabcontent">
        <h3>London</h3>
        <p>London is the capital city of England.</p>
      </div>

      <div id="Paris" class="tabcontent">
        <h3>Paris</h3>
        <p>Paris is the capital of France.</p> 
      </div>

      <div id="Tokyo" class="tabcontent">
        <h3>Tokyo</h3>
        <p>Tokyo is the capital of Japan.</p>
      </div> -->
      <!-- Simple header with fixed tabs. -->
    
    <!-- <button id="show-dialog" type="button" class="mdl-button">Show Dialog</button> -->
      <!-- <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
          <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
              <i id="bal_icon" class="material-icons"> account_balance_wallet </i>
              <text style="font-size: 30px; font-family:'Roboto'; margin-top:80px; margin-left:-80px; color:grey" > Rs 0 </text>
              <text style="font-size: 15px; font-family:'Roboto'; margin-top:160px; margin-left:-70px; color:grey" >Your Balance </text>
               <svg id="bal_left" fill="currentColor" width="200px" height="200px" viewBox="0 0 1 1" class="demo-chart mdl-cell mdl-cell--4-col mdl-cell--3-col-desktop" >
              <use xlink:href="#piechart" mask="url(#piemask)" />
              <text x="0.5" y="0.5" font-family="Roboto" font-size="0.3" fill="#888" text-anchor="middle" dy="0.1">82<tspan font-size="0.2" dy="-0.07">%</tspan></text>
            </svg>
          
            <form action="#" style="margin-left: 40px">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="sample3">
                <label class="mdl-textfield__label" for="sample3">Reciever Username</label>
              </div>
              <br>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample4">
                <label class="mdl-textfield__label" for="sample4">Number...</label>
                <span class="mdl-textfield__error">Input is not a number!</span>
              </div>
              <br>
              <button id="show-dialog" type="button" class="mdl-button mdl-js-button mdl-button--raised">Pay</button>
              <dialog id="dialog" class="mdl-dialog">
                <h3 class="mdl-dialog__title">Comment</h3>
                <div class="mdl-dialog__content">
                  <div id="dialog_textfield" class="mdl-textfield mdl-js-textfield">
                    <textarea class="mdl-textfield__input" type="text" rows="5"></textarea>
                    <label class="mdl-textfield__label" for="comment">Comment..</label>
                  </div>
                </div>
                
                <label class="mdl-radio mdl-js-radio" for="option1">
                  <input type="radio" id="option1" name="gender" class="mdl-radio__button" checked>
                  <span class="mdl-radio__label">Transaction</span>
                </label>
                
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option2" style="margin-left: 50px">
                  <input type="radio" id="option2" name="gender" class="mdl-radio__button" >
                  <span class="mdl-radio__label">Loan</span>
                </label>
                
                <label class="mdl-radio mdl-js-radio" for="option3" style="margin-left:55px">
                  <input type="radio" id="option3" name="gender" class="mdl-radio__button">
                  <span class="mdl-radio__label">Other</span>
               </label>      
              
                <div class="mdl-dialog__actions">
                  <button type="button" class="mdl-button">Cancel</button> 
                  <button type="button" class="mdl-button">Pay</button>               
                </div>
              </dialog>
              <script>
                var dialog = document.querySelector('dialog');
                var showDialogButton = document.querySelector('#show-dialog');
                if (! dialog.showModal) {
                  dialogPolyfill.registerDialog(dialog);
                }
                showDialogButton.addEventListener('click', function() {
                  dialog.showModal();
                });
                dialog.querySelector('.close').addEventListener('click', function() {
                  dialog.close();
                });
              </script>
            </form>
          </div>
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
      </main> -->
    </div>
    
      <!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" style="position: fixed; left: -1000px; height: -1000px;">
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
      </svg> -->
    <script src="https://code.getmdl.io/1.2.1/material.min.js"></script>
  </body>
</html>
