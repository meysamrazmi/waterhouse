<div id="block-system-main" class="error">
	<div id="top">صفحه مورد نظر یافت نشد</div>
	<div class="d3">404</div>
	<div id="bottom">
		<p>
			متاسفانه آدرسی که به دنبال آن هستید در سایت وجود ندارد
		</p>
		<p>
			شاید آدرس آن تغییر کرده باشد و یا به صورت موقت غیر فعال شده است
		</p>
	</div>
    <div class="detail">
        <a href="/" class="button1"><span class="swip-left">صفحه اصلی</span></a>
        <a href="/contact-us" class="button1"><span class="swip-right">تماس با ما</span></a>
    </div>
	<style>
		#block-system-main{
    	    width:100%;
   		 	height:100vh;
    		background: #A7C4DF;
    	    text-align:center;
	        overflow-x:hidden;
        	position: relative;
      		  margin-top:-21px;
			color:white;
		}
		#top{
            font-size:40px;
            margin-top:50px;
        }.d3{
            font-family:sans-serif;
            font-size: 15em;
            font-weight: bold;
            text-shadow: 0 1px 0 #ccc, 0 2px 0 #c9c9c9, 0 3px 0 #bbb, 0 4px 0 #b9b9b9, 0 5px 0 #aaa, 0 6px 1px rgba(0,0,0,.1), 0 0 5px rgba(0,0,0,.1), 0 1px 3px rgba(0,0,0,.3), 0 3px 5px rgba(0,0,0,.2), 0 5px 10px rgba(0,0,0,.25), 0 10px 10px rgba(0,0,0,.2), 0 20px 20px rgba(0,0,0,.15);
        }
        #bottom{
            margin:60px 0;
            font-size:20px;
		}
		.detail .button1{
        	line-height: 44px;
        	color:#fff;
			margin-right:30px;
		}
		.detail .button1  span {
        	position: relative;
        	display: inline-block;
        	padding: 0 25px;
            border:2px solid #fff;
        }

        @media (max-width:768px){
            #top{
                    font-size:30px;
                }
            #bottom{
                font-size:15px;
                margin:60px 10px;
            }
        }
	</style>
	<script>
		window.setTimeout(function() {
			location.href = document.getElementsByClassName("error")[0].getElementsByTagName("a")[0].href;
		}, 6000);
	</script>
</div>
