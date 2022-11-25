<html>
<head>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <title>11210048 - Fajar Sidik</title>
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- font google -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit&family=Roboto&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<div class="container">
    <table border='1' cellspacing='0' cellpadding='0' width="100%" height="100%">
        <tr>
            <td colspan="100%" align='center' class="image-header" >
                <!-- <img src='http://amdtapes.ro/wp-content/themes/options/images/skins/headers/full_width/header-jetBlack.jpg' width="100%" height="100%">  -->
                <p class="caption"href="">WEBSITE PRIBADI</p>
            </td> 
        </tr>
        <tr>
            <td valign='top' width="900">
            <!-- php start -->
            <?php
                if(!isset($_GET['menu'])){
                    $i = include "beranda.php";
                    
                 }elseif($_GET['menu'] == "biodata"){
                        include "biodata.php";
                        unset($i);
                    }elseif($_GET['menu'] == "pendidikan"){
                        include "pendidikan.php";
                        unset($i);
                    }
                    elseif($_GET['menu'] == "pelatihan"){
                        include "pelatihan.php";
                        unset($i);
                    }
                    elseif($_GET['menu'] == "portfolio"){
                        include "portfolio.php";
                        unset($i);
                    }
                

                ?>
            <!-- php end  -->
            </td>

            <td width='200' valign='top'> 
                <table border='1' width='100%' cellspacing='0' cellpadding='0' class="tmenu" align="center" class="tmenu">
                    <tr ><th class="menu">MENU</th></tr></td>
                    <tr><td><i class="las la-home"></i><a href="index.php">Beranda</a></td></tr>
                    <tr><td><i class="las la-address-book"></i><a href="index.php?menu=biodata">Biodata</a></td>
                    <tr><td><i class="las la-university"></i><a href="index.php?menu=pendidikan">Pendidikan</a></td>
                    <tr><td><i class="las la-blog"></i><a href="index.php?menu=pelatihan">Pelatihan</a></td>
                    <tr><td><i class="las la-folder-open"></i><a href="index.php?menu=portfolio">Portfolio</a></td>
                </table>
                <div class="shape">
                    <svg id="sw-js-blob-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">                    <defs>                         <linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0">                            <stop id="stop1" stop-color="rgba(121.879, 119.048, 117.708, 1)" offset="0%"></stop>                            <stop id="stop2" stop-color="rgba(22.986, 140.093, 62.738, 1)" offset="100%"></stop>                        </linearGradient>                    </defs>                <path fill="none" d="M6.6,-8.1C13.1,-4.4,26,-8.5,30.8,-6.9C35.7,-5.2,32.6,2.2,26.6,4.9C20.5,7.5,11.5,5.5,6.6,9.5C1.7,13.6,0.8,23.8,-3.3,28.3C-7.4,32.8,-14.7,31.6,-18.6,27.2C-22.6,22.8,-23,15.2,-22.2,9.2C-21.4,3.2,-19.3,-1.2,-19.2,-7.7C-19.1,-14.2,-20.9,-22.8,-18,-27.6C-15.2,-32.4,-7.6,-33.5,-3.8,-28.3C0.1,-23.2,0.2,-11.7,6.6,-8.1Z" width="100%" height="100%" transform="translate(50 50)" stroke-width="1" style="transition: all 0.3s ease 0s;" stroke="url(#sw-gradient)"></path>              </svg></td></tr>
                </div>
            </td>
        </tr>
        <!-- footer start -->
        <tr>
            <td colspan="2" height='40' align='center' class="footer-icon">
                <a href="https://api.whatsapp.com/send/?phone=%2B6285781367577&text&type=phone_number&app_absent=0" class="icon">
                    <i class="fa-brands fa-whatsapp " aria-hidden="true"></i>
                </a>
                <a href="https://www.facebook.com/sajay69">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="mailto: jarott520@gmail.com">
                    <i class="fa-regular fa-envelope"></i>
                </a>
            </td>
        </tr>
    <!-- footer start -->
    </table>
</div>
    
</body>
</html>