<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Profil</title>
<link href="styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js?ver=3.3"></script>	
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

</head>

<body>

<div id="header">
	<div id="logo"><a href="#"><img src="images/logoku.png"></a></div>
	<ul id="main-menu">
    	<li><a href="#about">Edy</a></li>
		<li><a href="#nita">Nita</a></li>
        <li><a href="#experience">About</a></li>
        <li><a href="#connect">Connect</a></li>
    </ul>
</div>

<div id="container">

<!--Begin About Section-->
    <div id="about">    	
        <div  class="top-divider"></div>
        <div class="content">
        	<img src="images/edyp.jpg" />
            <h2>Edy Purnomo</h2>
            <p>Alamat : Jomblang Tegaltirto Berbah Sleman<br/></p>
			<p>Tempat/Tanggal Lahir : Sleman / 14 September 1984<br/></p>
			<p>Email : edypurnomo3369@gmail.com<br/></p>
			<p>Riwayat Akademik<br/></p>
			<p>- SDN Jomblang I<br/></p>
			<p>- SLTP N2 Berbah<br/></p>
			<p>- SMK N3 Yogyakarta<br/></p>
			<p>- STMIK AKAKOM Yogyakarta<br/></p>
		</div>	
		<div class="bottom-divider"></div> 
        
		<div id="nita"><br><br><br><br><br><br><br></div>
		 <div  class="content">
        	<img src="images/nita.jpg" />
            <h2>Nita Dewi Setyawati</h2>
            <p>Alamat : Jl. Gatak Gg. Tulip<br/></p>			
			<p>Email : nitadewis@gmail.com<br/></p>
			<p>Riwayat Akademik<br/></p>
			<p>- SDN Inpers Oyehy Nabire<br/></p>
			<p>- SMPN 01 Nabire<br/></p>
			<p>- SMKN 01 Nabire<br/></p>
			<p>- STMIK AKAKOM Yogyakarta<br/></p>
           
        </div>
    <div class="bottom-divider"></div> 
    </div>
<!--End About Section-->

<!--Begin Experience Section-->   
    <div id="experience">
    	<h1>About</h1>
        <div class="top-divider"></div>
        <div class="content">
            <div class="col">
            <h3>AGENDA</h3>
        <ul>
           <?php			
            $json = file_get_contents('http://edy3369-service/');
            $obj = json_decode($json);

            $agenda = $obj->agenda;

            foreach ($agenda as $agenda) {
                echo "<li>$agenda</li>";
           }
            ?>
            </div>
            
            <div class="col col-mid">
            <h3>PROJECT</h3>
            <p>Project web ini kami buat sebagai tugas responsi mata kuliah Praktik Teknologi Cloud Computing (PTCC-TI9).
			 Dimana dalam aplikasi web ini memuat profil kami. Selain itu juga pada menu Agenda, dapat di isi data atau agenda
			  dengan mengedit service yaitu pada class Agenda didalam file api.py</p>
            </div>
            
            <div class="col">
            <h3>LINK PROJECT</h3>
            <p>
			<a href="https://github.com/edypurnomo84/RespPTCC.git">Github repostory project</a>

			</p>
            </div>
        </div>    
        <div class="bottom-divider"></div>
    </div>
<!--End Experience Section-->

<!--Begin Work Section-->  

<!--End Work Section-->

<!--Begin Connect Section-->  
    <div id="connect">
    	<h1>Connect</h1>
        <div class="top-divider"></div>
        	<div class="content">
            	<div id="form">
                	<form action="#">
                    	<span>Name</span>
                        <input type="text" name="name" class="name" />
                        <span>Email</span>
                        <input type="text" name="email" class="email"/>
                        <span>Message</span>
                        <textarea class="message"></textarea>
                        <input type="submit" name="submite" value="Submit" class="submit">
                    </form>
                </div>
                <div id="social-footer">
                	<h2>Follow Me:</h2>
                    <p>Hai, silahkan ikuti saya untuk mengetahui kegiatan-kegiatan saya sehari-hari dengan memilih salah satu sosial media dibawah ini</p>
                    <ul id="sm-links">
                    	<li><a href="https://www.facebook.com/edy.purnomo.3990" class="facebook">Facebook</a></li>
           				<li><a href="#" class="twitter">Twitter</a></li>
                        <li><a href="#" class="youtube">YouTube</a></li>
                        <li><a href="#" class="linkedin">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
    </div>
<!--End Connect Section--> 

</div>

 <!-- The JavaScript -->  
        <script type="text/javascript">
    		$(function() {
                $('#main-menu li a').bind('click',function(event){
                    var $anchor = $(this);
                    
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1500,'easeInOutExpo');

                    event.preventDefault();
                });
            });
			
 			 $(document).ready(function(){
    		$("a[rel^='prettyPhoto']").prettyPhoto({social_tools:false, deeplinking: false});
  			});

        </script>
</body>
</html>
