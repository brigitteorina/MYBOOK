<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile |MyBook</title>
    </head>


    <style type="text/css">

#blue_bar{

    height: 50px;
    background-color: #405d9b;
    color: d9dfeb;

}

#search_box{

    width: 400px;
    height: 20px;
    border-radius: 5px;
    border: none;
    padding: 4px; 
    font-size: 14px;
    background-image: url(images/search.png);
    background-repeat: no-repeat;
    background-position: right;


}

#profile_pic{
width: 150px;
margin-top: -200px;
border-radius: 50%;
border: solid 2px white;


}

#menu_buttons{

width:100px;
margin: 2px;
display: inline-block;

}



        </style>







    <body style="font-family: tahoma; background-color:#d0d8e4;">
        <br>
        <!--top bar -->
        <div id="blue_bar">

            <div style="width:800px; margin:auto; font-size:30px; ">
MyBook &nbsp  &nbsp  <input type="text" id="search_box"  placeholder="search for people">
<img src="images/selfie.jpg" style="width: 50px; float:right;">
            </div>

        </div>
        
        <!--cover area-->
        <div style="width:800px; margin:auto; background-color:black; min-height: 400px;">

            <div style="background-color: white; text-align:center; color:#405d9b;">
            <img src="images/mountain.jpg" style="width:100%;" >
            <img id="profile_pic"  src="images/selfie.jpg" ><br>


            <div style="font-size: 20px;">Brigitte Orina</div>
<br>
           <div id="menu_buttons"> Timeline </div> 
           <div id="menu_buttons"> About</div> 
           <div id="menu_buttons">  Friends </div>
           <div id="menu_buttons">  Photos</div> 
           <div id="menu_buttons"> Settings</div>


           </div>


<div>


<div style="display:flex">

       <div style="background-color:green; min-height:400px; flex:1;"></div>
        <div style="background-color: grey; min-height:400px; flex:2.5;"></div>

        </div>
        
    </body>
</html>