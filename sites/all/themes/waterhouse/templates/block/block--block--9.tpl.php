<?php if(!isset($_COOKIE['banner'])): ?>
    <div id="block-block-9" class="block block-block contextual-links-region first odd">
	
		<div class="tabligh-overlay">
			<div class="over">
			    <div class="tabligh">
			
			        <a class="close-tabligh close-banner">
			            <svg viewBox="0 0 20 20">
			                <path fill="white" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
			            </svg>
			        </a>
					<div class="title">
                    <h1 style="color: #fdb913;">سفر به جنوب خوزستان
                        <small style="color: #f9c548;"></small>
					</h1>
					</div>
			        <div class="tabligh-content">
			            <a class="link swip-left" style="color:white" href="http://waterhouse.ir/tourism/khuzestan2" target="_blank">مشاهده و کسب اطلاعات بیشتر</a>
			        </div>
			
			    </div>
			</div>
		</div>
		<script>
		    
		    var elements = $('.tabligh-overlay, .tabligh');
		    
		        elements.addClass('active');
		    $('.close-tabligh').click(function(){
		        elements.removeClass('active');
		    });
		</script>
    </div>
	<style>
		.over{
            width: 600px;
            max-width: 75rem;
            min-height: 23rem;
            background:url(/sites/all/themes/waterhouse/images/meysam/image/maroon/talab.jpg);
			background-position:center;
			background-size:cover;
			border-radius:5px;
		}
        @media only screen and (min-width: 40em) {
            .tabligh-overlay {
                display: flex;
                align-items: center;
                justify-content: center;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 5;
                background-color: rgba(0,0,0,0.6);
                opacity: 0;
                visibility: hidden;
                backface-visibility: hidden;
                transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1), visibility 0.6s cubic-bezier(0.55, 0, 0.1, 1);
            }
            .tabligh-overlay.active {
                opacity: 1;
                visibility: visible;
            }
        }
        .tabligh {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            margin: 0 auto;
            background-size:cover;
            background-position:center;
            width: 600px;
            max-width: 75rem;
            min-height: 23rem;
            border-radius: 3px;
            opacity: 0;
            background-color: #77777773;
            overflow-y: auto;
            visibility: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            backface-visibility: hidden;
            transform: scale(1.2);
            transition: all 0.6s cubic-bezier(0.55, 0, 0.1, 1);
        }
        .tabligh .close-tabligh {
            position: absolute;
            cursor: pointer;
            top: 5px;
            opacity: 0;
            backface-visibility: hidden;
            transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1), transform 0.6s cubic-bezier(0.55, 0, 0.1, 1);
            transition-delay: 0.3s;
        }
        .close-tabligh:hover svg{
            transform:rotate(90deg)
        }
        .tabligh .close-tabligh svg {
            width: 1.75em;
            height: 1.75em;
            border-radius: 100%;
			border-radius:15px;
            transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1), transform 0.6s cubic-bezier(0.55, 0, 0.1, 1);
        }
        @keyframes boxShadowAnim {
            from {
                box-shadow: rgba(255, 224, 178, 1) 0px 0px 0px 0px;
            }

            to {
                box-shadow: rgba(255, 224, 178, 0) 0px 0px 0px 20px;
            }
        }
        .tabligh .tabligh-content {
            opacity: 0;
            backface-visibility: hidden;
            transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1);
            transition-delay: 0.3s;
            display:flex;
        }
        .tabligh.active {
            visibility: visible;
            opacity: 1;
            transform: scale(1);
            animation: boxShadowAnim 1s forwards infinite;
        }
         .tabligh.active .tabligh-content {
             opacity: 1;
         }
         .tabligh.active .close-tabligh {
             transform: translateY(10px);
             opacity: 1;
         }
        .link {
            position: absolute;
            left: 5%;
			bottom: 10%;
			border: 2px solid;
			padding: 5px 16px;
        }
        /** * Mobile styling */
        @media only screen and (max-width: 39.9375em) {
            h1 {
                font-size: 1.5rem;
            }
            .tabligh {
				position: fixed;
                top: 25%;
                left: 0;
                width: 100%;
                height: 100%;
                -webkit-overflow-scrolling: touch;
                border-radius: 0;
                transform: scale(1.1);
                padding: 0 !important;
				height:100px;
				z-index:2
            }
            .close-tabligh {
                right: 20px !important;
            }
			.close-banner{
			    background: rgba(0,0,0,0.5);
				width: 30px;
				height: 30px;
				border-radius: 50%;
				padding: 4px;
				right:5px !important;
			}
	</style>
<?php endif;?>