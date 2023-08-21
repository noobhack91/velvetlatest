<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <style>
            .enter-page-image {
                width: 40px;
            }
            .enter-page-image img {
                width: 100%;
            }
            .enter-page-sec {
                background-image: url(images/enter-bg.jpg);
                background-position: top;
                background-repeat: no-repeat;
                background-size: cover;
                height: 100vh;
                position: relative;
            }
            body{
                margin: 0;
            }
            .enter-page-content {
                width: 60%;
                margin: 0 auto;
                padding: 150px 0;
                position: relative;
            }
            .top-enter-ct {
                display: flex;
                align-items: center;
            }
            .top-enter-ct h2 {
                font-size: 36px;
                padding-left: 10px;
                color: #ffffff;
                line-height: 30px;
                margin: 0;
            }
            .enter-page-content h3 {
                color: #ffffff;
                font-size: 26px;
                padding: 20px 0;
                margin: 0;
            }
            .enter-page-button a,.enter-page-button button {
                color: #ffffff;
                text-decoration: none;
                font-size: 18px;
                background-color: #fbaa52;
                padding: 0 40px;
                border-radius: 5px;
                height: 40px;
                line-height: 40px;
                border: 1px solid #fbaa52;
                display: inline-block;
                cursor: pointer;
            }
            .exit-bt a,.exit-bt button{
                background-color: transparent;
                color: #ffffff;
            }
            .enter-page-button {
                display: flex;
                justify-content: flex-start;
                padding-bottom: 40px;
            }
            .enter-page-content p {
                color: #ffffff;
                margin: 0;
                padding-bottom: 20px;
                font-size: 17px;
            }
            .enter-page-content p a {
                color: #fbaa52;
                font-weight: 800;
            }
            .copyright {
                padding-top: 40px;
            }
            .enter-bt {
                margin-right: 10px;
            }
            section.enter-page-sec:before {
                content: '';
                position: absolute;
                background-color: #000000;
                height: 100%;
                width: 100%;
                opacity: 0.4;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
            }
            
            .md-window {
    display: inline-block;
    width: 100%;
    text-align: center;
}
.md-window-button a {
    height: 40px;
    line-height: 37px;
    padding: 0 20px;
    color: #ffffff;
    background-color: #ff50a9;
    border-radius: 3px;
    font-weight: 500;
    font-size: 16px;
}
.md-window-button .enter-bt button {
    height: 40px;
    line-height: 37px;
    padding: 0 20px;
    color: #ffffff;
    background-color: #ff50a9;
    border-radius: 3px;
    font-weight: 500;
    font-size: 16px;
}
.md-window-button .enter-bt button.btn:active {
    background-color: #ff50a9;
    color: #ffffff;
}
.md-window span.blk-w {
    color: #000000;
}
.md-window span {
    color: #ff0000;
    font-weight: 500;
}
.md-window-button a:hover{
    color: #ffffff;
    background-color: #ff50a9;
}
.md-window-button {
    width: 100%;
    text-align: center;
}
.modal-header h1 {
    font-size: 36px;
    font-weight: 700;
    letter-spacing: -1px;
    width: 100%;
    text-align: center;
}
.md-window-button .close-btn {
    background-color: transparent;
    margin-right: 10px;
    color: #ff50a9;
}
.md-window p a {
    color: #ff50a9;
    text-decoration: none;
}
.md-window p a:hover {
    color: #ff50a9;
    text-decoration: none;
}
.md-window p {
    font-size: 18px;
    padding-bottom: 10px;
}
.md-window-button .close-btn:hover {
    color: #ff50a9;
    background-color: #ffffff;
}
.modal-dialog {
    max-width: 700px;
}
#myModal {
    pointer-events: none;
    background-color: #000000;
}
.md-window-button .button {
    padding-bottom: 10px;
}

.btn-check:checked+.btn, .btn.active, .btn.show, .btn:first-child:active, :not(.btn-check)+.btn:active {
    border-color: transparent;
}
.modal-header h1 img {
    width: 100%;
}
.modal-header h1 {
    width: 200px;
    margin: 0 auto;
}
            @media screen and (max-width: 767px) {
                .enter-page-content {
                    width: 100%;
                    padding: 100px 20px;
                }
            }
        </style>
    </head>
    <body>
<!--        <section class="enter-page-sec">-->
<!--            <div class="container">-->
<!--                <div class="enter-page-content">-->
<!--                    <div class="top-enter-ct">-->
                        <!--<div class="enter-page-image"><img src="{{ asset('images/heart.png') }}"></div>-->
<!--                        <h2>Velvetklub</h2>-->
                        
<!--                    </div>-->
<!--                    <h3>INDEPENDENT ESCORTS</h3>-->
<!--                    <h3>TERMS AND CONDITIONS FOR USE OF THE SITE</h3>-->
<!--                    <div class="enter-page-button">-->
<!--                        <form method="post" action="{{url('/enter')}}">-->
<!--                            @csrf-->
                            
<!--                        <div class="enter-bt"><button type="submit" >AGREE AND ENTER</button></div>-->
<!--                        </form>-->
<!--                        <div class="exit-bt"><a href="#">EXIT</a></div>-->
<!--                    </div>-->
                    
<!--                    <p><i>By clicking "AGREE AND ENTER" below you confirm that you are over the age of 18 years and have read, understand and accept the Terms and conditions for use of the website.-->
<!--Please <a href="{{url('term-and-conditions')}}">Click Here</a> to read the terms and conditions.</i></p>-->
<!--</p>-->
                    
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
        
          <!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">
	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	      	<h1><img src="{{ asset('images/velvet_lg_black.png') }}" alt=""></h1>
	        <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
	        <!--         <h4 class="modal-title">Modal Header</h4> -->
	      </div>
	      <div class="modal-body text-center">
	      	<div class="md-window">
	      		<p><span>WARNING:</span> This Website Contains Adult Content.You Must Be 18 Years' of Age or Older to Access.</p>
	      		<p>By clicking "I AGREE AND ENTER" below, you confirm you are 18 years of age or older and you have read and accepted our <a href="{{url('term-and-conditions')}}">Terms and Conditions.</a></p>
	      		<p><span class="blk-w">PARENTAL WARNING:</span> If you are a parent, to read the eSafety Commissioner's Online Safety Guide before registering as a member.</p>
	      	</div>
	        
	      </div>
	      <div class="modal-footer">
	        <div class="md-window-button">
	        	<div class="button"><a href="https://www.google.com/" class="btn close-btn">DECLINE</a></div>
	        	 <form method="post" action="{{url('/enter')}}">
                    @csrf
                    <div class="enter-bt"><button type="submit" class="btn">AGREE AND ENTER</button></div>
                 </form>
	        
	        </div>
	      </div>
	    </div>

	  </div>
	</div>
    </body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js" integrity="sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
   
    $(document).ready(function(){       
     $('#myModal').modal('show');
     
    $('#myModal').modal({
    backdrop: 'static',
    keyboard: false
    
});
   
    }); 
   
</script>