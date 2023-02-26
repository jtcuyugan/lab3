<!DOCTYPE html>
<head>
    <style>
        @font-face {
            font-family: 'joane_stencilregular';
               src: url('../fonts/joane_stencil_regular-webfont.woff2') format('woff2'),
                 url('fonts/joane_stencil_regular-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;
        }
        
        ::-webkit-scrollbar {
        width: 10px;
          }
        
          ::-webkit-scrollbar-track {
        background: black;
          }
        
        ::-webkit-scrollbar-thumb {
        background: #9D1AFB;
          }
        
          ::-webkit-scrollbar-thumb:hover {
        background: #76DBBF;
          }
        
        div#navbar{
            position: fixed;
            top: 0;
            height: 14.5%;
            width: 100%;
            z-index: 3;
            left: 0;
            bottom: 5;
        }
        
        div#pageselector{
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 3;
            background-color: black;
        }
        
        li#buttons{
            width: 100px;
            height: 50px;
            background-color: transparent;
            display: inline-block;
            z-index: 3;
        }
        
        li a#buttons{
            display: block;
            color: white;
            width: auto;
            padding: 20px 20px 0px 0px;
            text-decoration: none;
            position: absolute;
            font-size: 18px;
        }
        
        li a#buttons:hover{
            color: #76dbbf;
        }
        
        video#myVideo {
            position: fixed;
            top: 0;
            right: 0;
            width: 100%;
            z-index: -1000;
        }
        
        li a img{
            text-decoration: none;
            color: transparent;
        }
        
        img#logo{
            width: 65px;
            padding: 0px 35px 0px 0px;
            color: transparent;
        }
        
        ul{
            display: inline-block;
            z-index: 3;
        }
        
        hr#header{
            opacity: 0.5;
            color: white;
            size: 4;
        }
        
        div#contents{
            height: 560px;
            background-color: rgba(0,0,0,.5); 
            position: relative;
            z-index: 2;
        
        }
        
        p#lobbytitle{
            font-family: "joane_stencilregular";
            line-height: 2px;
            background-color: black, opacity(0.5);
            text-align: left;
            vertical-align: bottom;
            margin-left: 10px;
            z-index: 2;
        }
        
        p#lobbytext{
            line-height: 0px;
            background-color: black, opacity(0.5);
            text-align: left;
            vertical-align: bottom;
            margin-left: 10px;
            z-index: 2;
        }
        
        p#lobbydesc{
            line-height: 0px;
            background-color: black, opacity(0.5);
            text-align: left;
            vertical-align: bottom;
            margin-left: 10px;
            z-index: 2;
        }
        
        a img{
            text-decoration: none;
            color: transparent;
        }
        
        div#wpageselector{
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 3;
        }
        
        div#wpageselector ul{
            display: inline-block;
            z-index: 3;
            list-style: none
        }
        
        li#wbuttons{
            list-style: none;
            width: 250px;
            height: 50px;
            background-color: transparent;
            display: inline-block;
            z-index: 3;
        }
        
        div#gallery {
            margin: 5px;
            float: absolute;
            width: 180px;
            color: transparent;
            display:block;
        }
              
        div#gallery a img{
            width: 75px;
            height: auto;
        }
              
        div#desc{
            padding: 10px;
            text-align: center;
        }
        
    </style>
</head>
<body>
    <div id="navbar" id="top">
        <div id="pageselector">
            <center>
                <ul>
                    <li id="buttons"><a href="index" id="buttons">HOME</a></li>
                    <li id="buttons"><a href="Leo" id="buttons">SUN</a></li>
                    <li id="buttons"><a href="Gallery" id="logo"><img src="images/wootteogallery.png" id="logo" padding="none"></a></li>
                    <li id="buttons"><a href="Sagi" id="buttons">MOON</a></li>
                    <li id="buttons"><a href="Libra" id="buttons">RISING</a></li>
                </ul>
            </center>
            <hr id="header">
        </div>
    </div>