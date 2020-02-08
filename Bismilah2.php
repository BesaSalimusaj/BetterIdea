<!DOCTYPE html>
<html>
<head>
	<title>Disanji faqes</title>
	<link rel="stylesheet" href=https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css>
	<style type="text/css">
body{
			margin: 0;
			padding: 0;
			font-family: Poppins;
		}

li a{
			margin: 15px;
			color: #000;
			text-decoration:none;
			text-transform: uppercase;
		}
		a:hover{
           color:red;
		}
.navbar{
			position: fixed;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction:row;
			flex-wrap: wrap;
			background-color: transparent;
			width: 100%;
			height: 70px;
			z-index: 1;
		}
.nav{
			display: flex;
			justify-content: right;
			list-style: none;
			margin-right:15%; 
		}
.logo{
			flex: 1 1 auto;
			margin-left: 10%;
			text-transform: uppercase;
			letter-spacing: 1px;
			font-weight: bolder;
			font-size: 35px;
			font-family: arial;
		}
		.kreu-area{
			position: relative;
			background-image: url(kreu.jpg);
			width: 100%;
			height: 100vh;
			background-repeat: no-repeat;
			-webkit-background-size:cover;
			background-size: cover;
		}
		.hyr-area, .rreth-area, .kontakte-area{
			position: relative;
			display: flex;
			justify-content: space-around;
			align-items: center;
			flex-direction: row;
			flex-wrap: wrap;
			width: 100%;
			height: 700px;
		}
		.hyr-area{
			margin: 0;
			padding: 0;
			background-image: url("bardh.jpg");
			background-size: cover;
			background-position: center;
			font-family: sans-serif;
		}
		.login-page{
			width: 360px;
			padding: 10% 0 0;
			margin: auto;	
		}
		.form{
			position: relative;
			z-index: 1;
			background:rgba(0,455,255);
			max-width: 360px;
			margin: 0 auto 100px;
			padding: 45px;
			text-align: center;
		}
		.form input{
			font-family: "Roboto",sans-serif;
			outline: 1;
			background:#f2f2f2;
			width:100%;
			border: 0;
			margin: 0 0 15px;
			padding: 15px;
			box-sizing:border-box;
			font-size: 14px;
		}
      .form button{
      	font-family: "Roboto",sans-serif;
      	text-decoration: uppercase;
      	outline: 0;
      	background:#4CAF50;
      	width: 100%;
      	border: 0;
      	padding: 15px;
      	color: #ffffff;
      	font-size: 14px;
      	cursor: pointer;
      }
      .form button:hover,.form button:active{
         background:#43A047;
      }
      .form .message{
      	margin: 15px 0 0;
      	color: aliceblue;
      	font-size: 12px;
      }
      .form .message a{
      	color: #4CAF50;
      	text-decoration: none;
      }
      .form .register-form{
      	display: none;
      }








		.rreth-area{
			margin: 0;
			padding: 0;
			font-family: sans-serif;
			display: flex;
			min-height: 100vh;
			background-image: url(lezi.jpg);
			background-repeat: no-repeat;
			background-size: cover;
			justify-content: center;
			align-items: center;
			text-align: center;
		}
		h2{
			position: absolute;
			top: 90px;
			padding-bottom: 10px;
			border-bottom: 3px solid white;
		}
		.contanier{
			width: 1200px;
			display: flex;
			justify-content: space-evenly;
		}
		.card{
			position: relative;
			padding: 15px;
			width: 300px;
			height: auto;
			box-sizing: border-box;
			transition: 0.5s;
		}
		.card .fa{
			font-size: 40px;

		}
		.card .h3{
			font-size: 20px;
		}
		.card .p{
			font-size: 17px;
		}
        .card span{
        	position: absolute;
        	top: -5px;
        	left: 0;
        	width: 100%;
        	height: 5px;
        	background:white;
        	border-radius: 10px;
        	transition:0.5s;
        	opacity: 0;
        }
        .card:hover span{
        	opacity: 1;
        }
        .card:hover{
        	background:#e5ffff;
        	box-shadow: 0 5px 5px rgba(0,0,0,0.3);
        	transition: 0.5s

        }
        .kontakt-area{
        	margin: 0;
        	padding: 0;
        	background-image: url(kontakt.jpg);
        }
        .rrjete{
        	position: absolute;
        	top: 50%;
        	transform: translateY(-50%);
        	width: 100%;
        	text-align: center;
        }
        .but{
        	display: inline-block;
        	width: 190px;
        	height: 190px;
        	background:#f1f1f1;
        	margin: 10px;
        	border-radius: 30%;
        	box-shadow: 0 5px 15px -5px #00000070;
        	color: #3498db;
        	overflow: hidden;
        	position: relative;
        }
        .but i{
        	line-height: 90px;
        	font-size: 26px;
        	transition: 0.2s linear;
        }
        .but:hover i{
             transform: scale(1.3);
             color: #f1f1f1;
        }
        .but: :before{
        	content: "";
        	position: absolute;
        	width: 120%;
        	height: 120%;
        	background: #3498db;
        	transform: rotate(45deg);
        	left: -110%;
        	top: 90%;
        }
        .but:hover: :before{
        	animation:  aaa 0.7s 1;
        	top: -10%;
        	left: -10%;
        }
        @keyframes aaa{
        	0%{
        		left: -110%;
        		top: 90%;
        	}50%{
        		left: 10%;
        		top: -30%;
        	}100%{
        		top: -10%;
        		left: -10%;
        	}
        }
	</style>
</head>
<body>
	<div class="navbar">
  	 <div class="logo">Better idea!</div>
     <ul class="nav">
		<li><a href="#Kreu">Kreu</a></li>
		<li><a href="#Hyr">Hyr</a></li>
		<li><a href="#Rreth">Reth nesh</a></li>
		<li><a href="#Kontakte">Kontakte</a></li>
	</ul></div>
	 
	 <div class="kreu-area" id="Kreu">
     </div>

  	<div class="hyr-area" id="Hyr">
      <?php

      ?>
  	   <div class="login-page">
  	   	<div class="form">
  	   		<form method="post" action="Kodiregjistrimit.php" class="register-form">
  	   	    <input type="text" placeholder="Emri perdoruesit" name="Emri" required="Jepni emrin"/>
  	   	    <input type="text" placeholder="Email" name="Email" required="Jepni nje email"/>
  	   		<input type="password" placeholder="Fjalekalimi" name="Fjalekalimi" required="Jepni nje fjalekalim" />	
  	   		<input type="submit" value="Regjistrohu" name="regjistrohu">
  	   		<p class="message">Jeni regjistruar?<a href="#">Hyr</a></p>
  	   		</form>
  	   		<form class="login-form" method="post" action="Kodihyrjes.php">
  	   			<input type="text" placeholder="Emri perdoruesit" name="User" required>
  	   			<input type="password" placeholder="Fjalekalimi" name="Pass" required>
  	   			<input type="submit" value="Hyr" name="hyr">
  	   		<p class="message">Nuk  jeni regjistruar?<a href="#">Regjistrohu</a></p>
  	   		</form>
  	   	</div>
  	  </div>
  	  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  	  <script>
  	  	$('.message a').click(function(){
  	  		$('form').animate({height:"toggle",opacity:"toggle"},"slow")
  	  	});
  	  </script>
  </div>

<div class="rreth-area" id="Rreth">
 <h2>Ne ju ofrojmë:</h2>
  <div class="contanier">
  	
  	<div class="card">
  		<span></span>
  		<i class="fa fa-comment-o" aria-hidden="true"></i>
  		<h3>Thenie</h3>
  		<p>Në këtë faqe ju do të keni mundësi që të shtoni thënie të ndryshme shqip dhe të lexoni thëniet e të gjithë atyre që janë regjistruar dhe kanë shtuar thënie ne faqe</p>
  	</div>

  	<div class="card">
  		<span></span>
  		<i class="fa fa-picture-o" aria-hidden="true"></i>
  		<h3>Foto</h3>
  		<p>Në këtë faqe ju do të keni mundësi që të shtoni foto të ndryshme dhe të shikoni fotot e të gjithë atyre që janë regjistruar dhe kanë shtuar foto ne faqe</p>
  	</div>
  
  	<div class="card">
  		<span></span>
  		<i class="fa fa-calendar-o" aria-hidden="true"></i>
  		<h3>Kalendari veprimtarive</h3>
  		<p>Një shërbim tjetër ështe që mund të ruani aktivitet gjatë një dite tuajën dhe mund të shikoni ditët sa herë të dëshironi</p>
  	</div>
  </div>
</div>
  

  <div class="kontakte-area" id="Kontakte">
  	 <h2>Per ide apo kritika mund te me shkruani ne rrjetet e mija sociale: </h2>
  <div class="rrjete">	
    <a class="but" href="#">
    	<i class="fa fa-facebook" aria-hidden="true"></i>
    	<p>Bessa Salimusaj</p>
    </a>
    <a class="but" href="#">
    	<i class="fa fa-instagram" aria-hidden="true"></i>
    	<p>Besa Salimusaj</p>
    </a>
   
    <a class="but" href="#">
    <i class="fa fa-yahoo" aria-hidden="true"></i>
    <p>besa.salimusaj@yahoo.com</p>
    </a>
    <a class="but" href="#">
    	<i class="fa fa-google" aria-hidden="true"></i>
    	<p>besasalimusaj98@gmail.com</p>
    </a>
  </div>
  </div>

</body>
</html>