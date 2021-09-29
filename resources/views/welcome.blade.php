<html>

<head>
    <title>Welcome</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .content {
            max-width: 1250px;
            margin: auto;
            padding: 0 30px;
        }

        .title {
            margin-top: 100px;
        }

        .navbar {
            position: absolute;
            z-index: 5;
            width: 100%;
            padding: 25px 0;
            transition: all 0.3s ease;

        }

        .navbar .content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .navbar .logo a {
            color: #fff;
            font-size: 30px;
            font-weight: 600;
            text-decoration: none;
        }

        .navbar .menu-list {
            display: inline-flex;
        }

        .menu-list li {
            list-style: none;
        }

        .menu-list li a {
            color: #fff;
            font-size: 15px;
            font-weight: 500;
            text-decoration: none;
            margin-left: 25px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .navbar .menu-list li a:hover {
            color: cyan;
        }

        .banner {
            height: 100vh;
            background-image: url(smk.jpg.crdownload);
            background-size: cover;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            background-attachment: fixed;
        }

        .banner:after {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(11, 11, 11, .6);
            font-family: "Raleway SemiBold", sans-serif;

        }

        .btn {
            color: #fff;
            z-index: 1;
            padding: 20px 25px;
            border: 3px solid #fff;
            background: #FFFFFF;
            border-radius: 37px;
            border: none;
            box-shadow: 0px 1px 8px #FFFFFF;
            cursor: pointer;
            color: black;
            font-family: "Raleway SemiBold", sans-serif;
            font-size: 24px;
            height: 60px;
            margin: 0 auto;
            margin-top: 50px;
            transition: 0.25s;
            width: 200px;
            border: #fff;
            text-align: center;
            align-items: center;
            margin-left: 150px;
        }
        .h1{
            color: #fff;
            z-index: 1;
            padding: 20px 25px;
            margin: center;
            align-items: center;
        }
        .h3{
            color: #fff;
            z-index: 1;
            padding: 20px 25px;
            margin: center;
            align-items: center;
        }

        .btn:hover {
            box-shadow: 0px 1px 18px #ffffff;
        }

        section {
            padding: 50px 0;

        }

        .about {
            padding: 40px 0;
        }

        /* 
        .about .video {} */

        .about .title {
            font-size: 35px;
        }

        .about p {
            padding-top: 20px;
            text-align: justify;
        }

        .icon {
            color: #fff;
            font-size: 20px;
            cursor: pointer;
            display: none;
        }

        .icon.cencel-btn {
            position: absolute;
            right: 30px;
            top: 20px;
        }

        @media (max-width: 868px) {
            body.disabledScroll {
                overflow: hidden;
            }

            .icon {
                display: block;
            }

            .icon.hde {
                display: none;
            }

            .navbar .menu-list {
                position: fixed;
                top: 0;
                left: -100%;
                height: 10vh;
                width: 100%;
                max-width: 400px;
                background: #222;
                display: block;
                padding: 40px;
                text-align: center;
                transition: all 0.3s ease;
            }

            .navbar.menu-list.active {
                left: 0%;
            }

            .navbar .menu-list li {
                margin-top: 45px;
            }

            .navbar .menu-list li a {
                font-size: 23px;
            }
        }

        .container {
            background: #111;
            height: auto;
            width: 102%;
            font-family: monospace;
            color: #fff;
        }

        .footer-content {

            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;

        }

        .footer-content img {
            margin-top: 10px;
            width: 100px;
            border-radius: 50%;
        }

        .socials {
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0.5rem 0 0.5rem 0;
        }

        .socials li {
            margin: 0 10px;
        }

        .socials a {
            text-decoration: none;
            color: white;
        }

        .socials a i {
            font-size: 1.1rem;
            transition: color .4s ease;
        }

        .socials a:hover {
            color: aqua;
        }

        .footer-bottom {
            color: white;
            background: #112031;
            width: 105vw;
            padding: 20px 0;
            text-align: center;
        }
    </style>
    <link href="fontawesome/css/all.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar">
        <div class="content">
            <div class="logo">
                <a><svg width="300" height="120" viewBox="0 0 277 85" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.3667 68L0 58.8602V0L28.2333 13.5269L55 0V58.8602L43.6333 68V19.3763L28.2333 28.5161L11.3667 19.3763V31.8065L28.2333 41.6774V55.9355L11.3667 44.9677V68Z" fill="white" />
                        <path d="M71.0254 37.3662H68.5645V39.5459H70.8408V40.2095H68.5645V43H67.8262V36.6982H71.0254V37.3662ZM74.7607 43.1055C73.8672 43.1055 73.1509 42.811 72.6118 42.2222C72.0757 41.6333 71.8076 40.8672 71.8076 39.9238C71.8076 38.9102 72.0815 38.1016 72.6294 37.498C73.1772 36.8945 73.9229 36.5928 74.8662 36.5928C75.7363 36.5928 76.4365 36.8857 76.9668 37.4717C77.5 38.0576 77.7666 38.8237 77.7666 39.77C77.7666 40.7983 77.4941 41.6113 76.9492 42.209C76.4043 42.8066 75.6748 43.1055 74.7607 43.1055ZM74.8135 37.2607C74.1514 37.2607 73.6138 37.4995 73.2007 37.9771C72.7876 38.4546 72.5811 39.0815 72.5811 39.8579C72.5811 40.6343 72.7817 41.2598 73.1831 41.7344C73.5874 42.2061 74.1133 42.4419 74.7607 42.4419C75.4521 42.4419 75.9971 42.2163 76.3955 41.7651C76.7939 41.314 76.9932 40.6826 76.9932 39.8711C76.9932 39.0391 76.7998 38.396 76.4131 37.9419C76.0264 37.4878 75.4932 37.2607 74.8135 37.2607ZM83.6157 40.4512C83.6157 42.2207 82.8174 43.1055 81.2207 43.1055C79.6914 43.1055 78.9268 42.2544 78.9268 40.5522V36.6982H79.665V40.5039C79.665 41.7959 80.21 42.4419 81.2998 42.4419C82.3516 42.4419 82.8774 41.8179 82.8774 40.5698V36.6982H83.6157V40.4512ZM90.2734 43H89.3682L86.125 37.9771C86.043 37.8511 85.9756 37.7192 85.9229 37.5815H85.8965C85.9199 37.7163 85.9316 38.0049 85.9316 38.4473V43H85.1934V36.6982H86.1514L89.3066 41.6421C89.4385 41.8472 89.5234 41.9878 89.5615 42.064H89.5791C89.5498 41.8823 89.5352 41.5732 89.5352 41.1367V36.6982H90.2734V43ZM91.9258 43V36.6982H93.666C95.8867 36.6982 96.9971 37.7222 96.9971 39.77C96.9971 40.7427 96.688 41.5249 96.0698 42.1167C95.4546 42.7056 94.6299 43 93.5957 43H91.9258ZM92.6641 37.3662V42.332H93.6045C94.4307 42.332 95.0737 42.1108 95.5337 41.6685C95.9937 41.2261 96.2236 40.5991 96.2236 39.7876C96.2236 38.1733 95.3652 37.3662 93.6484 37.3662H92.6641ZM103.114 43H102.297L101.629 41.2334H98.957L98.3286 43H97.5068L99.9238 36.6982H100.688L103.114 43ZM101.387 40.5698L100.398 37.8848C100.366 37.7969 100.334 37.6562 100.302 37.4629H100.284C100.255 37.6416 100.221 37.7822 100.183 37.8848L99.2031 40.5698H101.387ZM107.772 37.3662H105.953V43H105.215V37.3662H103.4V36.6982H107.772V37.3662ZM110.119 36.6982V37.3311H109.504V42.3672H110.119V43H108.15V42.3672H108.766V37.3311H108.15V36.6982H110.119ZM113.705 43.1055C112.812 43.1055 112.095 42.811 111.556 42.2222C111.02 41.6333 110.752 40.8672 110.752 39.9238C110.752 38.9102 111.026 38.1016 111.574 37.498C112.122 36.8945 112.867 36.5928 113.811 36.5928C114.681 36.5928 115.381 36.8857 115.911 37.4717C116.444 38.0576 116.711 38.8237 116.711 39.77C116.711 40.7983 116.438 41.6113 115.894 42.209C115.349 42.8066 114.619 43.1055 113.705 43.1055ZM113.758 37.2607C113.096 37.2607 112.558 37.4995 112.145 37.9771C111.732 38.4546 111.525 39.0815 111.525 39.8579C111.525 40.6343 111.726 41.2598 112.127 41.7344C112.532 42.2061 113.058 42.4419 113.705 42.4419C114.396 42.4419 114.941 42.2163 115.34 41.7651C115.738 41.314 115.938 40.6826 115.938 39.8711C115.938 39.0391 115.744 38.396 115.357 37.9419C114.971 37.4878 114.438 37.2607 113.758 37.2607ZM123.03 43H122.125L118.882 37.9771C118.8 37.8511 118.732 37.7192 118.68 37.5815H118.653C118.677 37.7163 118.688 38.0049 118.688 38.4473V43H117.95V36.6982H118.908L122.063 41.6421C122.195 41.8472 122.28 41.9878 122.318 42.064H122.336C122.307 41.8823 122.292 41.5732 122.292 41.1367V36.6982H123.03V43ZM71.0254 49.3662H68.5645V51.5459H70.8408V52.2095H68.5645V55H67.8262V48.6982H71.0254V49.3662ZM73.5742 48.6982V49.3311H72.959V54.3672H73.5742V55H71.6055V54.3672H72.2207V49.3311H71.6055V48.6982H73.5742ZM79.7002 55H78.7949L75.5518 49.9771C75.4697 49.8511 75.4023 49.7192 75.3496 49.5815H75.3232C75.3467 49.7163 75.3584 50.0049 75.3584 50.4473V55H74.6201V48.6982H75.5781L78.7334 53.6421C78.8652 53.8472 78.9502 53.9878 78.9883 54.064H79.0059C78.9766 53.8823 78.9619 53.5732 78.9619 53.1367V48.6982H79.7002V55ZM86.2305 55H85.4131L84.7451 53.2334H82.0732L81.4448 55H80.623L83.04 48.6982H83.8047L86.2305 55ZM84.5034 52.5698L83.5146 49.8848C83.4824 49.7969 83.4502 49.6562 83.418 49.4629H83.4004C83.3711 49.6416 83.3374 49.7822 83.2993 49.8848L82.3193 52.5698H84.5034ZM92.2422 55H91.3369L88.0938 49.9771C88.0117 49.8511 87.9443 49.7192 87.8916 49.5815H87.8652C87.8887 49.7163 87.9004 50.0049 87.9004 50.4473V55H87.1621V48.6982H88.1201L91.2754 53.6421C91.4072 53.8472 91.4922 53.9878 91.5303 54.064H91.5479C91.5186 53.8823 91.5039 53.5732 91.5039 53.1367V48.6982H92.2422V55ZM98.1836 54.7363C97.7178 54.9824 97.1377 55.1055 96.4434 55.1055C95.5469 55.1055 94.8291 54.8169 94.29 54.2397C93.751 53.6626 93.4814 52.9053 93.4814 51.9678C93.4814 50.96 93.7847 50.1455 94.3911 49.5244C94.9976 48.9033 95.7666 48.5928 96.6982 48.5928C97.2959 48.5928 97.791 48.6792 98.1836 48.8521V49.6387C97.7324 49.3867 97.2344 49.2607 96.6895 49.2607C95.9658 49.2607 95.3784 49.5024 94.9272 49.9858C94.479 50.4692 94.2549 51.1152 94.2549 51.9238C94.2549 52.6914 94.4644 53.3037 94.8833 53.7607C95.3052 54.2148 95.8574 54.4419 96.54 54.4419C97.1729 54.4419 97.7207 54.3013 98.1836 54.02V54.7363ZM102.807 55H99.4668V48.6982H102.666V49.3662H100.205V51.4624H102.481V52.126H100.205V54.332H102.807V55ZM74.251 67H73.5171V62.7725C73.5171 62.4385 73.5376 62.0298 73.5786 61.5464H73.561C73.4907 61.8306 73.4277 62.0342 73.3721 62.1572L71.2188 67H70.8584L68.7095 62.1924C68.6479 62.0518 68.585 61.8364 68.5205 61.5464H68.5029C68.5264 61.7983 68.5381 62.21 68.5381 62.7812V67H67.8262V60.6982H68.8018L70.7354 65.0928C70.8848 65.4297 70.9814 65.6816 71.0254 65.8486H71.0518C71.1777 65.5029 71.2788 65.2451 71.355 65.0752L73.3281 60.6982H74.251V67ZM80.79 67H79.9727L79.3047 65.2334H76.6328L76.0044 67H75.1826L77.5996 60.6982H78.3643L80.79 67ZM79.063 64.5698L78.0742 61.8848C78.042 61.7969 78.0098 61.6562 77.9775 61.4629H77.96C77.9307 61.6416 77.897 61.7822 77.8589 61.8848L76.8789 64.5698H79.063ZM86.8018 67H85.8965L82.6533 61.9771C82.5713 61.8511 82.5039 61.7192 82.4512 61.5815H82.4248C82.4482 61.7163 82.46 62.0049 82.46 62.4473V67H81.7217V60.6982H82.6797L85.835 65.6421C85.9668 65.8472 86.0518 65.9878 86.0898 66.064H86.1074C86.0781 65.8823 86.0635 65.5732 86.0635 65.1367V60.6982H86.8018V67ZM93.332 67H92.5146L91.8467 65.2334H89.1748L88.5464 67H87.7246L90.1416 60.6982H90.9062L93.332 67ZM91.605 64.5698L90.6162 61.8848C90.584 61.7969 90.5518 61.6562 90.5195 61.4629H90.502C90.4727 61.6416 90.439 61.7822 90.4009 61.8848L89.4209 64.5698H91.605ZM98.9746 66.5693C98.3418 66.9268 97.6387 67.1055 96.8652 67.1055C95.9658 67.1055 95.2378 66.8154 94.6812 66.2354C94.1274 65.6553 93.8506 64.8877 93.8506 63.9326C93.8506 62.957 94.1582 62.1572 94.7734 61.5332C95.3916 60.9062 96.1738 60.5928 97.1201 60.5928C97.8057 60.5928 98.3813 60.7041 98.8472 60.9268V61.7441C98.3374 61.4219 97.7339 61.2607 97.0366 61.2607C96.3306 61.2607 95.752 61.5039 95.3008 61.9902C94.8496 62.4766 94.624 63.1064 94.624 63.8799C94.624 64.6768 94.8335 65.3037 95.2524 65.7607C95.6714 66.2148 96.2397 66.4419 96.9575 66.4419C97.4497 66.4419 97.876 66.3438 98.2363 66.1475V64.3809H96.8564V63.7129H98.9746V66.5693ZM103.782 67H100.442V60.6982H103.642V61.3662H101.181V63.4624H103.457V64.126H101.181V66.332H103.782V67ZM111.42 67H110.686V62.7725C110.686 62.4385 110.707 62.0298 110.748 61.5464H110.73C110.66 61.8306 110.597 62.0342 110.541 62.1572L108.388 67H108.027L105.878 62.1924C105.817 62.0518 105.754 61.8364 105.689 61.5464H105.672C105.695 61.7983 105.707 62.21 105.707 62.7812V67H104.995V60.6982H105.971L107.904 65.0928C108.054 65.4297 108.15 65.6816 108.194 65.8486H108.221C108.347 65.5029 108.448 65.2451 108.524 65.0752L110.497 60.6982H111.42V67ZM116.421 67H113.081V60.6982H116.28V61.3662H113.819V63.4624H116.096V64.126H113.819V66.332H116.421V67ZM122.714 67H121.809L118.565 61.9771C118.483 61.8511 118.416 61.7192 118.363 61.5815H118.337C118.36 61.7163 118.372 62.0049 118.372 62.4473V67H117.634V60.6982H118.592L121.747 65.6421C121.879 65.8472 121.964 65.9878 122.002 66.064H122.02C121.99 65.8823 121.976 65.5732 121.976 65.1367V60.6982H122.714V67ZM128.093 61.3662H126.273V67H125.535V61.3662H123.72V60.6982H128.093V61.3662Z" fill="white" />
                        <path d="M66.6221 12.6509V10.6196C66.9902 10.9285 67.3901 11.1613 67.8218 11.3179C68.2534 11.4702 68.6893 11.5464 69.1294 11.5464C69.3875 11.5464 69.6118 11.5231 69.8022 11.4766C69.9969 11.43 70.1577 11.3665 70.2847 11.2861C70.4159 11.2015 70.5132 11.1042 70.5767 10.9941C70.6401 10.8799 70.6719 10.7572 70.6719 10.626C70.6719 10.4482 70.6211 10.2896 70.5195 10.1499C70.418 10.0103 70.2783 9.88118 70.1006 9.7627C69.9271 9.64421 69.7197 9.52995 69.4785 9.41992C69.2373 9.3099 68.9771 9.19775 68.6978 9.0835C67.9868 8.78727 67.4557 8.42546 67.1045 7.99805C66.7575 7.57064 66.584 7.05436 66.584 6.44922C66.584 5.97526 66.6792 5.56901 66.8696 5.23047C67.0601 4.8877 67.3182 4.60628 67.644 4.38623C67.9741 4.16618 68.355 4.00537 68.7866 3.90381C69.2183 3.79801 69.6753 3.74512 70.1577 3.74512C70.6317 3.74512 71.0506 3.77474 71.4146 3.83398C71.7827 3.889 72.1213 3.97575 72.4302 4.09424V5.99219C72.2778 5.88639 72.1107 5.79329 71.9287 5.71289C71.751 5.63249 71.5669 5.56689 71.3765 5.51611C71.186 5.4611 70.9956 5.4209 70.8052 5.39551C70.619 5.37012 70.4412 5.35742 70.272 5.35742C70.0392 5.35742 69.8276 5.3807 69.6372 5.42725C69.4468 5.46956 69.286 5.53092 69.1548 5.61133C69.0236 5.69173 68.922 5.78906 68.8501 5.90332C68.7782 6.01335 68.7422 6.13818 68.7422 6.27783C68.7422 6.43018 68.7824 6.56771 68.8628 6.69043C68.9432 6.80892 69.0575 6.92318 69.2056 7.0332C69.3537 7.139 69.5335 7.24479 69.7451 7.35059C69.9567 7.45215 70.1958 7.55794 70.4624 7.66797C70.8263 7.82031 71.1522 7.98324 71.4399 8.15674C71.7319 8.32601 71.9816 8.51855 72.189 8.73438C72.3963 8.9502 72.555 9.19775 72.665 9.47705C72.7751 9.75212 72.8301 10.0737 72.8301 10.4419C72.8301 10.9497 72.7327 11.3771 72.5381 11.7241C72.3477 12.0669 72.0874 12.3462 71.7573 12.562C71.4272 12.7736 71.0422 12.9259 70.6021 13.019C70.1662 13.1121 69.7049 13.1587 69.2183 13.1587C68.7189 13.1587 68.2428 13.1164 67.79 13.0317C67.3415 12.9471 66.9521 12.8201 66.6221 12.6509ZM84.7002 13H82.6753V7.55371C82.6753 6.96549 82.7007 6.31592 82.7515 5.60498H82.7007C82.5949 6.16357 82.4997 6.56559 82.415 6.81104L80.2822 13H78.6064L76.4355 6.87451C76.3763 6.70947 76.2811 6.2863 76.1499 5.60498H76.0928C76.1478 6.50212 76.1753 7.28923 76.1753 7.96631V13H74.3281V3.89746H77.3306L79.1904 9.29297C79.3385 9.72461 79.4465 10.1584 79.5142 10.5942H79.5522C79.6665 10.0907 79.7871 9.65267 79.9141 9.28027L81.7739 3.89746H84.7002V13ZM94.3359 13H91.7461L89.0928 9.04541C89.042 8.96924 88.9616 8.80208 88.8516 8.54395H88.8198V13H86.7695V3.89746H88.8198V8.20117H88.8516C88.9023 8.08268 88.987 7.91341 89.1055 7.69336L91.6191 3.89746H94.063L90.8892 8.23926L94.3359 13ZM98.8047 13V3.89746H102.118C103.134 3.89746 103.915 4.08366 104.46 4.45605C105.006 4.82845 105.279 5.35319 105.279 6.03027C105.279 6.52116 105.112 6.95068 104.778 7.31885C104.448 7.68701 104.025 7.94303 103.508 8.08691V8.1123C104.156 8.19271 104.672 8.4318 105.057 8.82959C105.446 9.22738 105.641 9.71191 105.641 10.2832C105.641 11.1169 105.343 11.7791 104.746 12.27C104.149 12.7567 103.335 13 102.302 13H98.8047ZM100.855 5.4082V7.56641H101.756C102.18 7.56641 102.512 7.46484 102.753 7.26172C102.998 7.05436 103.121 6.77083 103.121 6.41113C103.121 5.74251 102.622 5.4082 101.623 5.4082H100.855ZM100.855 9.08984V11.4893H101.966C102.44 11.4893 102.81 11.3792 103.077 11.1592C103.347 10.9391 103.483 10.6387 103.483 10.2578C103.483 9.89388 103.35 9.60824 103.083 9.40088C102.821 9.19352 102.452 9.08984 101.979 9.08984H100.855ZM115.15 13H112.916L112.268 10.9751H109.031L108.39 13H106.168L109.481 3.89746H111.913L115.15 13ZM111.798 9.40088L110.821 6.34131C110.749 6.11279 110.698 5.83984 110.668 5.52246H110.618C110.597 5.78906 110.544 6.05355 110.459 6.31592L109.469 9.40088H111.798ZM123.757 12.3906C122.869 12.9027 121.764 13.1587 120.444 13.1587C118.98 13.1587 117.824 12.7546 116.978 11.9463C116.136 11.1338 115.715 10.0166 115.715 8.59473C115.715 7.16439 116.176 5.99854 117.099 5.09717C118.021 4.1958 119.248 3.74512 120.78 3.74512C121.745 3.74512 122.596 3.87842 123.332 4.14502V6.06836C122.63 5.66211 121.771 5.45898 120.755 5.45898C119.904 5.45898 119.21 5.73617 118.673 6.29053C118.14 6.84066 117.873 7.57699 117.873 8.49951C117.873 9.43473 118.112 10.1584 118.59 10.6704C119.073 11.1825 119.722 11.4385 120.539 11.4385C121.03 11.4385 121.419 11.3687 121.707 11.229V9.45166H119.885V7.81396H123.757V12.3906ZM128.34 3.89746V5.48438H127.579V11.4131H128.34V13H124.767V11.4131H125.528V5.48438H124.767V3.89746H128.34ZM140.026 13H138.001V7.55371C138.001 6.96549 138.027 6.31592 138.078 5.60498H138.027C137.921 6.16357 137.826 6.56559 137.741 6.81104L135.608 13H133.933L131.762 6.87451C131.702 6.70947 131.607 6.2863 131.476 5.60498H131.419C131.474 6.50212 131.501 7.28923 131.501 7.96631V13H129.654V3.89746H132.657L134.517 9.29297C134.665 9.72461 134.773 10.1584 134.84 10.5942H134.878C134.993 10.0907 135.113 9.65267 135.24 9.28027L137.1 3.89746H140.026V13ZM149.516 9.05811C149.516 11.7918 148.242 13.1587 145.695 13.1587C143.223 13.1587 141.988 11.8236 141.988 9.15332V3.89746H144.044V9.17871C144.044 10.6514 144.62 11.3877 145.771 11.3877C146.901 11.3877 147.466 10.6768 147.466 9.25488V3.89746H149.516V9.05811ZM163.284 13H161.215L157.463 7.28076C157.243 6.94645 157.091 6.69466 157.006 6.52539H156.981C157.015 6.84701 157.032 7.33789 157.032 7.99805V13H155.096V3.89746H157.305L160.917 9.43896C161.082 9.68864 161.234 9.9362 161.374 10.1816H161.399C161.365 9.97005 161.348 9.55322 161.348 8.93115V3.89746H163.284V13ZM170.825 13H165.366V3.89746H170.616V5.56689H167.417V7.5918H170.394V9.25488H167.417V11.3369H170.825V13ZM179.756 12.3906C178.868 12.9027 177.763 13.1587 176.443 13.1587C174.979 13.1587 173.823 12.7546 172.977 11.9463C172.135 11.1338 171.714 10.0166 171.714 8.59473C171.714 7.16439 172.175 5.99854 173.098 5.09717C174.02 4.1958 175.247 3.74512 176.779 3.74512C177.744 3.74512 178.595 3.87842 179.331 4.14502V6.06836C178.629 5.66211 177.77 5.45898 176.754 5.45898C175.903 5.45898 175.209 5.73617 174.672 6.29053C174.139 6.84066 173.872 7.57699 173.872 8.49951C173.872 9.43473 174.111 10.1584 174.589 10.6704C175.072 11.1825 175.721 11.4385 176.538 11.4385C177.029 11.4385 177.418 11.3687 177.706 11.229V9.45166H175.884V7.81396H179.756V12.3906ZM186.986 13H181.527V3.89746H186.777V5.56689H183.578V7.5918H186.555V9.25488H183.578V11.3369H186.986V13ZM196.083 13H193.728L192.312 10.6577C192.206 10.48 192.105 10.3213 192.007 10.1816C191.91 10.042 191.811 9.9235 191.709 9.82617C191.612 9.72461 191.508 9.64844 191.398 9.59766C191.292 9.54264 191.176 9.51514 191.049 9.51514H190.497V13H188.446V3.89746H191.696C193.905 3.89746 195.01 4.72266 195.01 6.37305C195.01 6.69043 194.961 6.98454 194.864 7.25537C194.766 7.52197 194.629 7.76318 194.451 7.979C194.273 8.19482 194.058 8.38102 193.804 8.5376C193.554 8.69417 193.275 8.81689 192.966 8.90576V8.93115C193.101 8.97347 193.232 9.04329 193.359 9.14062C193.486 9.23372 193.609 9.34375 193.728 9.4707C193.846 9.59766 193.958 9.73519 194.064 9.8833C194.174 10.0272 194.273 10.1689 194.362 10.3086L196.083 13ZM190.497 5.43359V7.96631H191.385C191.825 7.96631 192.179 7.83936 192.445 7.58545C192.716 7.32731 192.852 7.00781 192.852 6.62695C192.852 5.83138 192.375 5.43359 191.423 5.43359H190.497ZM199.751 3.89746V5.48438H198.99V11.4131H199.751V13H196.178V11.4131H196.939V5.48438H196.178V3.89746H199.751ZM208.632 13H206.042L203.389 9.04541C203.338 8.96924 203.257 8.80208 203.147 8.54395H203.116V13H201.065V3.89746H203.116V8.20117H203.147C203.198 8.08268 203.283 7.91341 203.401 7.69336L205.915 3.89746H208.359L205.185 8.23926L208.632 13ZM216.928 9.05811C216.928 11.7918 215.654 13.1587 213.107 13.1587C210.636 13.1587 209.4 11.8236 209.4 9.15332V3.89746H211.457V9.17871C211.457 10.6514 212.032 11.3877 213.183 11.3877C214.313 11.3877 214.878 10.6768 214.878 9.25488V3.89746H216.928V9.05811ZM66.6221 29.6509V27.6196C66.9902 27.9285 67.3901 28.1613 67.8218 28.3179C68.2534 28.4702 68.6893 28.5464 69.1294 28.5464C69.3875 28.5464 69.6118 28.5231 69.8022 28.4766C69.9969 28.43 70.1577 28.3665 70.2847 28.2861C70.4159 28.2015 70.5132 28.1042 70.5767 27.9941C70.6401 27.8799 70.6719 27.7572 70.6719 27.626C70.6719 27.4482 70.6211 27.2896 70.5195 27.1499C70.418 27.0103 70.2783 26.8812 70.1006 26.7627C69.9271 26.6442 69.7197 26.5299 69.4785 26.4199C69.2373 26.3099 68.9771 26.1978 68.6978 26.0835C67.9868 25.7873 67.4557 25.4255 67.1045 24.998C66.7575 24.5706 66.584 24.0544 66.584 23.4492C66.584 22.9753 66.6792 22.569 66.8696 22.2305C67.0601 21.8877 67.3182 21.6063 67.644 21.3862C67.9741 21.1662 68.355 21.0054 68.7866 20.9038C69.2183 20.798 69.6753 20.7451 70.1577 20.7451C70.6317 20.7451 71.0506 20.7747 71.4146 20.834C71.7827 20.889 72.1213 20.9757 72.4302 21.0942V22.9922C72.2778 22.8864 72.1107 22.7933 71.9287 22.7129C71.751 22.6325 71.5669 22.5669 71.3765 22.5161C71.186 22.4611 70.9956 22.4209 70.8052 22.3955C70.619 22.3701 70.4412 22.3574 70.272 22.3574C70.0392 22.3574 69.8276 22.3807 69.6372 22.4272C69.4468 22.4696 69.286 22.5309 69.1548 22.6113C69.0236 22.6917 68.922 22.7891 68.8501 22.9033C68.7782 23.0133 68.7422 23.1382 68.7422 23.2778C68.7422 23.4302 68.7824 23.5677 68.8628 23.6904C68.9432 23.8089 69.0575 23.9232 69.2056 24.0332C69.3537 24.139 69.5335 24.2448 69.7451 24.3506C69.9567 24.4521 70.1958 24.5579 70.4624 24.668C70.8263 24.8203 71.1522 24.9832 71.4399 25.1567C71.7319 25.326 71.9816 25.5186 72.189 25.7344C72.3963 25.9502 72.555 26.1978 72.665 26.4771C72.7751 26.7521 72.8301 27.0737 72.8301 27.4419C72.8301 27.9497 72.7327 28.3771 72.5381 28.7241C72.3477 29.0669 72.0874 29.3462 71.7573 29.562C71.4272 29.7736 71.0422 29.9259 70.6021 30.019C70.1662 30.1121 69.7049 30.1587 69.2183 30.1587C68.7189 30.1587 68.2428 30.1164 67.79 30.0317C67.3415 29.9471 66.9521 29.8201 66.6221 29.6509ZM79.7871 30H74.3281V20.8975H79.5776V22.5669H76.3784V24.5918H79.3555V26.2549H76.3784V28.3369H79.7871V30ZM91.6191 30H89.5942V24.5537C89.5942 23.9655 89.6196 23.3159 89.6704 22.605H89.6196C89.5138 23.1636 89.4186 23.5656 89.334 23.811L87.2012 30H85.5254L83.3545 23.8745C83.2952 23.7095 83.2 23.2863 83.0688 22.605H83.0117C83.0667 23.5021 83.0942 24.2892 83.0942 24.9663V30H81.2471V20.8975H84.2495L86.1094 26.293C86.2575 26.7246 86.3654 27.1584 86.4331 27.5942H86.4712C86.5854 27.0907 86.7061 26.6527 86.833 26.2803L88.6929 20.8975H91.6191V30ZM101.693 30H99.4585L98.811 27.9751H95.5737L94.9326 30H92.7109L96.0244 20.8975H98.4556L101.693 30ZM98.3413 26.4009L97.3638 23.3413C97.2918 23.1128 97.241 22.8398 97.2114 22.5225H97.1606C97.1395 22.7891 97.0866 23.0535 97.002 23.3159L96.0117 26.4009H98.3413ZM110.465 30H108.11L106.695 27.6577C106.589 27.48 106.487 27.3213 106.39 27.1816C106.293 27.042 106.193 26.9235 106.092 26.8262C105.994 26.7246 105.891 26.6484 105.781 26.5977C105.675 26.5426 105.559 26.5151 105.432 26.5151H104.879V30H102.829V20.8975H106.079C108.288 20.8975 109.393 21.7227 109.393 23.373C109.393 23.6904 109.344 23.9845 109.247 24.2554C109.149 24.522 109.012 24.7632 108.834 24.979C108.656 25.1948 108.44 25.381 108.187 25.5376C107.937 25.6942 107.658 25.8169 107.349 25.9058V25.9312C107.484 25.9735 107.615 26.0433 107.742 26.1406C107.869 26.2337 107.992 26.3438 108.11 26.4707C108.229 26.5977 108.341 26.7352 108.447 26.8833C108.557 27.0272 108.656 27.1689 108.745 27.3086L110.465 30ZM104.879 22.4336V24.9663H105.768C106.208 24.9663 106.562 24.8394 106.828 24.5854C107.099 24.3273 107.234 24.0078 107.234 23.627C107.234 22.8314 106.758 22.4336 105.806 22.4336H104.879ZM119.327 30H117.092L116.445 27.9751H113.208L112.566 30H110.345L113.658 20.8975H116.089L119.327 30ZM115.975 26.4009L114.998 23.3413C114.926 23.1128 114.875 22.8398 114.845 22.5225H114.794C114.773 22.7891 114.72 23.0535 114.636 23.3159L113.646 26.4009H115.975ZM128.651 30H126.582L122.831 24.2808C122.611 23.9465 122.458 23.6947 122.374 23.5254H122.348C122.382 23.847 122.399 24.3379 122.399 24.998V30H120.463V20.8975H122.672L126.284 26.439C126.449 26.6886 126.601 26.9362 126.741 27.1816H126.766C126.732 26.9701 126.715 26.5532 126.715 25.9312V20.8975H128.651V30ZM138.205 29.3906C137.316 29.9027 136.211 30.1587 134.891 30.1587C133.427 30.1587 132.272 29.7546 131.425 28.9463C130.583 28.1338 130.162 27.0166 130.162 25.5947C130.162 24.1644 130.623 22.9985 131.546 22.0972C132.468 21.1958 133.696 20.7451 135.228 20.7451C136.192 20.7451 137.043 20.8784 137.779 21.145V23.0684C137.077 22.6621 136.218 22.459 135.202 22.459C134.352 22.459 133.658 22.7362 133.12 23.2905C132.587 23.8407 132.32 24.577 132.32 25.4995C132.32 26.4347 132.559 27.1584 133.038 27.6704C133.52 28.1825 134.17 28.4385 134.986 28.4385C135.477 28.4385 135.867 28.3687 136.154 28.229V26.4517H134.333V24.814H138.205V29.3906Z" fill="white" />
                    </svg></a>
            </div>
            <ul class="menu-list">
                <div class="icon cencel-btn">
                    <i class="fas fa-times"></i>
                </div>
                <li><a href="register" style="font-size: 20px;">Login</a></li>
                <li><a href="login"style="font-size: 20px;">Register</a></li>
            </ul>
            <div class="icon menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
    
    <div class="banner" style="font-size: 20px;">
        <div class="h1"><h1>SELAMAT DATANG DI FOFIMA</h1>
        <h3>CATAT LAPORAN KEUANGAN DENGAN MUDAH</h3>
        <button type="submit" class="btn" style="text-align: center;">
            {{ __('MULAI') }}
        </button>
    </div>
    </div>
    
    <div class="about">
        <div class="content">
            <div class="title">
                <h2>FOFIMA</h2>
            </div>
            <p>web Keuangan SMK BAGIMU NEGRIKU</p><br>
            <p>
                Tambahkan Transaksi <a href="register">disini</a></p>
            <p>
                Lihat laporan Keuangan <a href="register">disini</a></p>
        </div><br><br><br><br><br>
    </div>
    <div class="video" style="margin-left: 400px; margin-top: -500px;">
        <video width="1000px" height="500px " autoplay loop muted playsinline>
            <source src="uang.mp4" type="video/mp4">
        </video>
    </div>
    <div class="container">


        <footer>

            <hr>
            <div class="footer-content">

                <img src="4.jpg" alt="header logo" />

                <ul class="socials">
                    <li><a href="https://www.facebook.com/SmkBagimuNegerikuSMG5/"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com/smkbagimunegeriku/"><i class="fab fa-instagram"> </i></a></li>
                    <li><a href="https://www.youtube.com/hashtag/smkbagimunegeriku"> <i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="footer-bottom">
                <p>copyright &copy;2021 Designed by Fofima Team</p>
            </div>
        </footer>
</body>

</html>