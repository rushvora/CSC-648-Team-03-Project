<DOCTYPE html>
<head>
<style>
body {font-family: "Lato", sans-serif;}
/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}
/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}
/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}
/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}
/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>
</head>
<body>

<h1>My Dashboard</h1>
<div class="tab">
  <button class="tablinks active" onclick="openTab(event, 'Messages')">Messages</button>
  <button class="tablinks" onclick="openTab(event, 'Selling')">My Listings</button>
</div>

<div id="Messages" class="tabcontent" style="display: block;">
    <h2>Messages</h2>
    <p>Here you can read and reply to all of your messages.</p>
    <br>
    <table class="table table-hover">
        <tr>
            <th>From</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Date Received</th>
        </tr>
        <tr>
            <td><b>KoolDude634</b></td>
            <td><b>Re: Yellow Table</b></td>
            <td><b>Yeah I can pick it up around 3:30, next Wednesday...</b></td>
            <td><b>1:34 PM</b></td>
        </tr>
        <tr>
            <td><b>LostDiana</b></td>
            <td><b>Re: Blue Lawn Chair</b></td>
            <td><b>I have class from 12pm until 2pm, so it would be...</b></td>
            <td><b>Yesterday</b></td>
        </tr>
        <tr>
            <td>PhysicsMajor32</td>
            <td>Re: Calc Textbook</td>
            <td>Yes, this book is used for calculus 1 through 3, so...</td>
            <td>4/14/17</td>
        </tr>
        <tr>
            <td>xkcdFan</td>
            <td>Re: Desktop Speakers <img src=/~sp17g03/content/icons/reply.png alt="You have already replied to this message!" style="opacity: 0.5; margin-top: -1%"></td>
            <td>They look great, how loud do they get though?</td>
            <td>4/13/17</td>
        </tr>
    </table>
</div>

<div id="Selling" class="tabcontent">

    <h2>My Listings</h2>
    <p>This section contains all listings that the user posted</p>

    <div style="border: 1px solid #ccc; border-radius: 5px; padding: 5px; overflow:hidden;">
      <div style="float: left;">
        <div style="padding: 5px;">
         <img src="http://shashgrewal.com/wp-content/uploads/2015/05/default-placeholder.png" alt="HTML5 Icon" style="width:128px;height:128px;float:left;padding: 5px">
        </div>  
        <div style="padding 5px;">
         <h3><b>iPhone</b></h3>
         <h5><b>Price: $649.99</b></h5>
         <p>Brand new iPhone, unlocked, negotiable on price, message me if you're interested</p>
        </div>
      </div>
      <div style="border:1px solid #ccc; float:right; padding: 5px;">
       <a href ="#">link to posting</a></br>
       <a href = "#">edit</a></br>
       <a href = "#">delete</a></br>
      </div>
    </div>
<div style="padding: 5px;"></div>

 <div style="border: 1px solid #ccc; border-radius: 5px; padding: 5px; overflow:hidden;">
      <div style="float: left;">
        <div style="padding: 5px;">
         <img src="http://shashgrewal.com/wp-content/uploads/2015/05/default-placeholder.png" alt="HTML5 Icon" style="width:128px;height:128px;float:left;padding: 5px">
        </div>
        <div style="padding 5px;">
         <h3><b>iPhone</b></h3>
         <h5><b>Price: $649.99</b></h5>
         <p>Brand new iPhone, unlocked, negotiable on price, message me if you're interested</p>
        </div>
      </div>
      <div style="border:1px solid #ccc; float:right; padding: 5px;">
       <a href ="#">link to posting</a></br>
       <a href = "#">edit</a></br>
       <a href = "#">delete</a></br>
      </div>
    </div>
<div style="padding: 5px;"></div>

 <div style="border: 1px solid #ccc; border-radius: 5px; padding: 5px; overflow:hidden;">
      <div style="float: left;">
        <div style="padding: 5px;">
         <img src="http://shashgrewal.com/wp-content/uploads/2015/05/default-placeholder.png" alt="HTML5 Icon" style="width:128px;height:128px;float:left;padding: 5px">
        </div>
        <div style="padding 5px;">
         <h3><b>iPhone</b></h3>
         <h5><b>Price: $649.99</b></h5>
         <p>Brand new iPhone, unlocked, negotiable on price, message me if you're interested</p>
        </div>
      </div>
      <div style="border:1px solid #ccc; float:right; padding: 5px;">
       <a href ="#">link to posting</a></br>
       <a href = "#">edit</a></br>
       <a href = "#">delete</a></br>
      </div>
    </div>

<script>
function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
</body>
