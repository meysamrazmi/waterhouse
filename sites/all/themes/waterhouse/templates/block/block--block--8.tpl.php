<?php if(!isset($_COOKIE['banner'])): ?>
		<div id="block-block-8" class="block block-block contextual-links-region first odd">
		    <div class="content">
		        <span class="close-banner">X</span>
		        <a href="/college/groundwater-resuscitation/3030" target="_blank">
		            <div class="new-title">
		                <div>نشست نقد و بررسی طرح احیا و تعادل بخشی آب های زیرزمینی</div>
						سه شنبه 10 دی 98
		            </div>
		        </a>
		    </div>
		</div>
    <style>
        div#block-block-8 {
            width: 100%;
            position: fixed;
            bottom: 0;
            right: 0;
            /* border-top: 3px solid #564967; */
            height: 70px;
            z-index: 100;
            background-position-x: center;
            background-size: cover;
            display: flex;
            align-items: center;
            background-color: white;
        }
        div#block-block-8 .content {
            display: flex;
            align-items: center;
            height: 100%;
        }
        div#block-block-8 .content a {
            color: #fff !important;
            position: absolute;
            width: 100%;
            height: 100%;
            right: 0;
            top: 0;
            z-index: 1;
            background-color: #003664;
			background-image: url(https://www.transparenttextures.com/patterns/bright-squares.png);
            border-top: 3px solid #6f9fb5;
        }
        .new-title{
            font-size: 14px;
            width: auto;
            background-position: center;
            background-repeat: no-repeat;
            margin: 8px auto 0 auto;
            color: white;
            text-align: center;
            font-weight: 100;
            z-index: 2;
            position: relative;
            font-family: fanum;
        }
        .new-title > div{
            font-size: 19px;
            color: white;
            margin-top: 2px;
            font-weight: 700;
        }
        img.right{
            position: absolute;
            right: 0;
            top: 0;
            transform: rotateY(180deg);
            filter: drop-shadow(0px 1px 10px #ddd);
            border-radius: 0 70px 0px 0%;
        }
        img.left{
            position: absolute;
            left: 0;
            top: 0;
            transform: rotateY(0deg);
            filter: drop-shadow(0px 1px 10px #ddd);
            border-radius: 0px 70px 0px 0%;
        }

        @media (max-width: 1360px){
            .new-title{
                text-align: right;
                margin-right: 15px;
            }
            img.right{
                display: none;
            }
        }
        @media (max-width: 979px){}
        @media (max-width: 979px) and (min-width: 769px) {}
        @media all and (max-width: 768px) {}
        @media all and (max-width: 896px) {
            .new-title > div{
                font-size: 18px;
            }
            img.left,img.right{
                opacity: 0.2;
                height: 70px;
            }
        }
        @media all and (max-width: 500px) {
            .new-title{
                text-align: center;
                margin-right: auto;
            }
            .new-title > div{
                font-size: 15px;
                margin-top: 5px;
            }
        }
        @media all and (max-width: 400px) {}

        /*----------------------------------------------------*/
        .close-banner {
            position: absolute;
            top: -25px;
            right: 50%;
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            width: 20px;
            height: 20px;
            padding: 0;
            border-radius: 50%;
            text-align: center;
            cursor: pointer;
        }
        .close-banner:hover:before {
            opacity: 1;
            left: 30px;
        }
        .close-banner:before {
            content: "بستن تبلیغ";
            position: absolute;
            left: -30px;
            color: #fff;
            font-size: 12px;
            line-height: 20px;
            transition: all 0.1s;
            white-space: nowrap;
            opacity: 0;
        }

    </style>
<?php endif;?>
