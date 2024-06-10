<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | MyBook</title>
    <style type="text/css">
        #blue_bar {
            height: 50px;
            background-color: #405d9b;
            color: #d9dfeb;
        }

        #search_box {
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

        #profile_pic {
            width: 150px;
            margin-top: -200px;
            border-radius: 50%;
            border: solid 2px white;
        }

        #menu_buttons {
            width: 100px;
            margin: 2px;
            display: inline-block;
        }

        #friends_img {
            width: 75px;
            float: left;
            margin: 8px;
        }

        #friends_bar {
            background-color: white;
            min-height: 400px;
            margin-top: 20px;
            color: #aaa;
            padding: 8px;
        }

        #friends {
            clear: both;
            font-size: 12px;
            font-weight: bold;
            color: #405d9b;
        }

        textarea {
            width: 100%;
            border: none;
            font-family: tahoma;
            font-size: 14px;
            height: 60px;
            outline: none;
        }

        #post_button {
            float: right;
            background-color: #405d9b;
            border: none;
            color: white;
            padding: 4px;
            font-size: 14px;
            border-radius: 2px;
            width: 50px;
        }


        #post-bar{

margin-top: 20px;
background-color: white;
padding: 10px;

        }


        #post{

padding: 4px;
display: flex;
font-size: 13px;
margin-bottom: 20px;

        }
    </style>
</head>
<body style="font-family: tahoma; background-color: #d0d8e4;">
    <br>
    <!-- Top bar -->
    <div id="blue_bar">
        <div style="width: 800px; margin: auto; font-size: 30px;">
            MyBook &nbsp;&nbsp;
            <input type="text" id="search_box" placeholder="search for people">
            <img src="images/selfie.jpg" style="width: 50px; float: right;">
        </div>
    </div>
    
    <!-- Cover area -->
    <div style="width: 800px; margin: auto; min-height: 400px;">
        <div style="background-color: white; text-align: center; color: #405d9b;">
            <img src="images/mountain.jpg" style="width: 100%;">
            <img id="profile_pic" src="images/selfie.jpg"><br>
            <div style="font-size: 20px;">Brigitte Orina</div>
            <br>
            <div id="menu_buttons">Timeline</div>
            <div id="menu_buttons">About</div>
            <div id="menu_buttons">Friends</div>
            <div id="menu_buttons">Photos</div>
            <div id="menu_buttons">Settings</div>
        </div>

        <div style="display: flex;">
            <!-- Friends area -->
            <div id="friends_bar" style="flex: 1;">
                <div>
                    Friends<br>
                    <div id="friends">
                        <img id="friends_img" src="images/user1.jpg"><br>
                        Bob Builder
                    </div>
                    <div id="friends">
                        <img id="friends_img" src="images/user2.jpg"><br>
                        Ian Smith
                    </div>
                    <div id="friends">
                        <img id="friends_img" src="images/user3.jpg"><br>
                        Joy Smiles
                    </div>
                    <div id="friends">
                        <img id="friends_img" src="images/user4.jpg"><br>
                        Innocent Tyler
                    </div>
                </div>
            </div>

            <!-- Posts area -->
            <div style="flex: 2.5; padding: 20px; padding-right: 0;">
                <div style="border: solid thin #aaa; padding: 10px; background-color: white;">
                    <textarea placeholder="what's on your mind?"></textarea>
                    <input id="post_button" type="submit" value="Post">
                    <br>
                </div>

                <!--posts-->
                <div id="post-bar">


                 <!--post 1-->

                    <div id="post">

                    <div>
                        <img src="images/user1.jpg" style="width: 75px; margin-right:4px;">

                    </div>

                    <div>
                        <div style="font-weight:bold; color:#405d9b;">Bob Builder</div>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat magni ipsum possimus, culpa placeat libero eos dignissimos hic quam provident aspernatur sed aliquid iure nam? Illum et magni officiis quod!
                        <br><br>

                       <a href=""> Like</a> .<a href="">Comment</a> . <span style="color:#999;">April 6 2024</span>

                    </div>
                        
                    </div>

                <!--post 2-->
                                    <div id="post">

                <div>
                    <img src="images/user2.jpg" style="width: 75px; margin-right:4px;">

                </div>

                <div>
                    <div style="font-weight:bold; color:#405d9b;">Ian Smith</div>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat magni ipsum possimus, culpa placeat libero eos dignissimos hic quam provident aspernatur sed aliquid iure nam? Illum et magni officiis quod!
                    <br><br>

                <a href=""> Like</a> .<a href="">Comment</a> . <span style="color:#999;">April 6 2024</span>

                </div>
                    
                </div>
                <!--post 3-->

                <div id="post">

                <div>
                    <img src="images/user3.jpg" style="width: 75px; margin-right:4px;">

                </div>

                <div>
                    <div style="font-weight:bold; color:#405d9b;">Joy Smiles</div>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat magni ipsum possimus, culpa placeat libero eos dignissimos hic quam provident aspernatur sed aliquid iure nam? Illum et magni officiis quod!
                    <br><br>

                <a href=""> Like</a> .<a href="">Comment</a> . <span style="color:#999;">April 6 2024</span>

                </div>
                    
                </div>

                <!-- post 4-->
                <div id="post">

                <div>
                    <img src="images/user4.jpg" style="width: 75px; margin-right:4px;">

                </div>

                <div>
                    <div style="font-weight:bold; color:#405d9b;">Innocent TYler</div>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat magni ipsum possimus, culpa placeat libero eos dignissimos hic quam provident aspernatur sed aliquid iure nam? Illum et magni officiis quod!
                    <br><br>

                <a href=""> Like</a> .<a href="">Comment</a> . <span style="color:#999;">April 6 2024</span>

                </div>
                    
                </div>

                    
                </div>


            </div>
        </div>
    </div>
</body>
</html>
