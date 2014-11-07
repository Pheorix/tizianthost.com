<?php require('includes/header.php'); ?>

    <style>
        .downloads_wrapper{
            width: 100%;
            height: auto;
        }
        .downloads_wrapper ul>li{
            width:100%;
            height: 30px;
            background: rgba(255,5,5,0.7);
            padding: 10px;
            margin-top: 5px;
            list-style-type: none;
            position: relative;
            right: 30px;
            color: #fff;
            font-weight: bold;
            opacity:1.0;
            transition:all linear 1s;
        }
        .downloads_wrapper ul>li:hover{
            background: rgba(255,5,5,0.5);
            transition:background linear 1s;   
            cursor: pointer;   
            box-shadow: 0 0 3px 1px #888;      
        }
        .downloads_wrapper ul>li>img{
            float: left;
            width: 34px;
            height: 34px;
        }
        .downloads_text{
            position: relative;
            left: 10px;
            top:5px;
        }
    </style>


    <div class="fade scroll" id="content_wrapper">
        <div id="content">

            <h2 class="h2">Downloads</h2>

                <hr>
                    
                    <p>Hier kannst du dir meine aktuellen Flyer, Newsletter und Infopakete kostenlos downloaden.</p>
                    
                        <h3>Flyer &amp; Visitenkarte</h3>
                        
                        <div class="downloads_wrapper">
                            <ul>
                                <li><img src="images/content/pdf.png"><span class="downloads_text"><a href="images/other/flyer.jpg">Flyer 1</a></span></li>
                                <li><img src="images/content/pdf.png"><span class="downloads_text"><a href="images/other/flyer.jpg">Flyer 2</a></span></li>
                            </ul>
                        </div>
                        
        </div>
    </div>
<?php include('includes/footer.php'); ?>