
<!DOCTYPE html>
<html lang = "en">
    <head>
            <title>Fitness Center</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <style>
                *{
                    padding:0;
                    margin:0;
                    font-family:Arial, Helvetica, sans-serif;
                }
                header{
                    display:flex;
                }
       
                nav {
                    display:flex;
                    width:150%;
                }
                header a{
                    padding-right: 50px;
                    padding-top:5px;
                    text-decoration: none;
                    color: black;
                    font-size:25px;
                }
                header a:hover{
                    text-decoration: underline;
                    color: blue;
                }
                nav + div{
                    padding-left: 50px;
                    width:20%;
                }
                .promotion{
                    height: 700px;
                    background-color: black;
                    text-align:center;
                    color:white;
                    display:grid;
                    grid-template-columns: auto auto auto;
                }
                .product-card{
                    margin:30px 20px;
                    flex-basis: 25%;
                    padding: 15px;
                    text-align: center;
                    font-size:18px;
                 }
                .product-card img{
                    width:70%;
                }
                .product-card h2{
                    margin: 0px 0 15px;
                }
                .product-card p {
                    line-height: 1.5;
                    color:white;
                    
                }
                .trainers{
                    width:1450px;
                    height:700px;
                    display:grid;
                    grid-template-columns:auto auto auto;
                    border-right: 1px solid black;;
                    
                }
                .trainer{
                    margin:10px;
                    text-align:center;
                    font-size:17px;
                    margin: 20px;
                   
                }
                article{
                    width:700px;
                    margin-left:10px;
                }
                article p{
                    margin-top:15px;
                    font-size:20px;
                    line-height:1.5;
                }
                .trainers_article{
                    display:flex;
                    border-bottom:1px solid black;
                }
                .title_section{
                    display:flex;
                    background:gray;
                }
                .title_section h2{
                    margin-left:650px;
                   
                }
                .video{
                    
                    margin-top:30px;
                }
                footer{
                    height:100px;
                }
                footer p{
                    font-size:20px;
                }
            </style>
    </head>

    <body>
    <?php include 'header.php'; ?>
             <h2 style = "text-align : center;  padding: 5px 0px;">Reason to Choice our Gym!</h2>
            <section class = "promotion">   
              
                <div class = "product-card">
                    <img src = "https://dummyimage.com/300x300/" alt = "Product image 1" />
                    <h2>Management</h2>
                    <p> The best trainers will teach you. <br/>
                        Our trainers have a variety of certificates to<br/>
                        teach you with the highest efficiency. </p>   
                </div>
                <div class = "product-card">
                    <img src = "https://dummyimage.com/300x300/" alt = "Product image 1" />
                    <h2>History</h2>
                    <p> Our gym is a gym with a 30-year history. <br/>
                    With numerous experiences, we let you <br/>
                     experience high-level exercise.</p>
                </div>
                <div class = "product-card">
                    <img src = "https://dummyimage.com/300x300/" alt = "Product image 1" />
                    <h2>Environment</h2>
                    <p> With numerous exercise equipment<br/>
                     and an environment where you can focus<br/>
                      on your workouts, our gym may be the best<br/>
                     place for you to work out.</p>    
                </div>
                
            </section>
            <div class = "title_section">
            <h2>Our Trainers</h2>  <h2>The reason why you should exercise</h2>
            </div>
            <div class = "trainers_article">
            <section class = "trainers">
                <div class = "trainer">
                    <img src = "https://dummyimage.com/300x200/000/fff&text=Trainer 1">
                    <p class = "name">name : Trainer 1</p>
                    <p class = "winning record">specialized: Powerlifting</p>
                </div>

                <div class = "trainer">
                    <img src = "https://dummyimage.com/300x200/000/fff&text=Trainer 2">
                    <p class = "name">name : Trainer 2</p>
                    <p class = "winning record">specialized: Powerlifting</p>
                </div>

                <div class = "trainer">
                    <img src = "https://dummyimage.com/300x200/000/fff&text=Trainer 3">
                    <p class = "name">name : Trainer 3</p>
                    <p class = "winning record">specialized: Powerlifting</p>
                </div>

                <div class = "trainer">
                    <img src = "https://dummyimage.com/300x200/000/fff&text=Trainer 4">
                    <p class = "name">name : Trainer 4</p>
                    <p class = "winning record">specialized: Powerlifting</p>
                </div>

                <div class = "trainer">
                    <img src = "https://dummyimage.com/300x200/000/fff&text=Trainer 5">
                    <p class = "name">name : Trainer 5</p>
                    <p class = "winning record">specialized: Powerlifting</p>
                </div>

                <div class = "trainer">
                    <img src = "https://dummyimage.com/300x200/000/fff&text=Trainer 6">
                    <p class = "name">name : Trainer 6</p>
                    <p class = "winning record">specialized: Powerlifting</p>
                </div>
            </section>

            <article>
            <iframe width="560" height="315" class="video" src="https://www.youtube.com/embed/BHY0FxzoKZE?si=DoWa3U8uuIiTnXjs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p>Being physically active can improve your brain health, help manage weight, reduce the risk of disease, strengthen bones and muscles, and improve your ability to do everyday activities.</p>

            </article>
            </div>

            <footer>    
                    <p>Tel:02-1111-1111</p>
                    <br/>
                    <br/>
                    <p>Office:Seoul Gwangjingu</p>
            </footer>
    </body>
</html>