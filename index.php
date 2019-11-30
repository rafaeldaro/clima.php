<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Clima cctr</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


        <script src="js/clima.js"></script>


        <!-- Tags Gerais -->
        <meta NAME="DESCRIPTION" CONTENT="Site de informaçãoes climáticas de Brusque e região"/>
        <meta NAME="ABSTRACT" CONTENT="Informações climáticas"/>
        <meta name="keywords" content="tempo para brusque, brusque santa catarina, clima em Brusque, amanhecer brusque, anoitecer brusque, informações climáticas brusque, Temperatura em brusque, rafa cctr, clima, chuva em brusque, vento em brusque, pressão brusque, sol em brusque, nuvens em brusque "/>
        <meta NAME="title" CONTENT="Clima cctr" />
        <meta NAME="identifier-url" content="https://rafael-cima-senai.herokuapp.com/" />
        <meta NAME="author" content="Rafael cctr" />
        <meta NAME="ROBOTS" CONTENT="All" />
        <meta NAME="RATING" CONTENT="general" />
        <meta NAME="DISTRIBUTION" CONTENT="global" />
        <meta NAME="LANGUAGE" CONTENT="pt-br" />
        <meta name="content-language" content="portuguese" />
        <meta name="doc-class" content="Completed" /> 
        <meta name="reply-to" content="rafael_c_castro@estudante.sc.senai.br"/>



        <!-- Tags Para rede social Facebook -->
        <meta property="og:url" content="https://rafael-cima-senai.herokuapp.com/" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Clima cctr" />
        <meta property="og:title" content="Clima cctr" />
        <meta property="og:description" content="Site de informaçãoes climáticas de Brusque e região" />
        <meta property="og:image" content="http://localhost:8000/img/icones/umid.png" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="120" />
        <meta property="fb:app_id" content="" />


        <!-- Tags Para rede social Twitter -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="Site de informaçãoes climáticas de Brusque e região" />
        <meta name="twitter:title" content="" />



    </head>
    <body>
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron"  >
                    <h1 class="alert alert-warning" > Tempo para Brusque-SC | <span id="temperatura"></span> </h1>
                    <p>
                        <span id="situacao"> </span>
                        <img src="img/icones/02d.png"/>
                    </p>


                    <div class="container">
                        <div class="row">
                            <div class="col-6">

                                <h5>
                                    <center>
                                        <p class="alert alert-danger" >
                                            Temperatura Máxima |<span id="temperaturaMax"></span>

                                            <span id="situacao"> </span>
                                            <img src="img/icones/temp1.png" width="40"/>
                                        </p>
                                    </center>
                                </h5>

                            </div>





                            <div class="col-md-6" >

                                <h5>
                                    <center>
                                        <p class="alert alert-info" >
                                            Temperatura Mínima | <span id="temperaturaMin"></span>

                                            <span id="situacao"> </span>
                                            <img src="img/icones/temp2.png" width="40"/>
                                        </p>
                                    </center>
                                </h5>
                            </div>
                        </div>


                    </div>


                    <div class="container">
                        <div class="row">
                            <div class="col-md-4" >

                                <center>
                                    <p class="alert alert-success" >
                                        <strong> Umidade do Ar |<span id="umidade"></span></strong> 

                                        <span id="situacao"> </span>
                                        <img src="img/icones/umid.png" width="47"/>
                                    </p>
                                </center>
                            </div>







                            <div class="col-md-4">

                                <center>
                                    <p class="alert alert-dark" >
                                        <strong>Pressão do Ar |<span id="pressao"></span></strong>

                                        <span id="situacao"> </span>
                                        <img src="img/icones/pressao.jpg" width="40"/>
                                    </p>
                                </center>

                            </div>

                            <div class="col-md-4" >

                                </center>
                                <p class="alert alert-primary" >
                                    <strong>Velocidade do Vento | <span id="vento"></span></strong>

                                    <span id="situacao"> </span>
                                    <img src="img/icones/vento.png" width="48"/>
                                </p>
                                </center>

                            </div>



                            <div class="container">
                                <div class="row">
                                    <div class="col-6" >

                                        <center>
                                            <p class="alert alert-warning" >
                                                <strong> Amanhecerr |<span id="amanhecer"></span></strong> 

                                                <span id="situacao"> </span>
                                                <img src="img/icones/nascer.png" width="47"/>
                                            </p>
                                        </center>
                                    </div>




                                    <div class="col-md-6" >

                                        <h5>
                                            <center>
                                                <p class="alert alert-secondary" >
                                                    Por do Sol | <span id="anoitecer"></span>

                                                    <span id="situacao"> </span>
                                                    <img src="img/icones/porsol.png" width="50"/>
                                                </p>
                                            </center>
                                        </h5>
                                    </div>
                                </div>























                            </div>  


                        </div>

                    </div>
                </div>
            </div>
    </body>
</html>