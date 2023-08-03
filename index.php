<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include 'includes/assets.php';?>
    <script src="scripts/home.js"></script>
    <title>Good Food</title>
</head>
<body>
    <?php include 'includes/header.php';?>

    <?php include 'includes/nav.php';?>
  
    <div class="container classContainer">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="boxContent">
                            <img src="images/4.png" alt="prato 4">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="boxContent">
                            <h2>Delicious <span>meat:</span></h2>
                            <h3>BECIEGAST NVERITI VITAESAERT ASETY KERTYA ASET APLICA BOSERDE NERAFAE KERTYURAUAS VITAESA.</h3>
                            <p>Praesent vestibulum aenean nonummy endrerit mauris. Cum sociis natoque Magnis dis 
                                parturient montes. Ascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. 
                                Morbi nunc odio gravida at cursus nec luctus a lorem.</p>
                            <button class="moreDetails" data-id="#frango"> Mais detalhes </button> 
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container classContainer2">   
        <div class="row">
            <div class="col-md-12">
                <div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="boxContent">
                                <h2>Salads:</h2>
                                <h3>BECIEGAST NVERITI VITAESAERT ASETY KERTYA ASET APLICA BOSERDE NERAFAE KERTYURAUAS VITAESA.</h3>
                                <p>Praesent vestibulum aenean nonummy endrerit mauris. Cum sociis natoque Magnis dis 
                                    parturient montes. Ascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. 
                                    Morbi nunc odio gravida at cursus nec luctus a lorem.</p>
                                <button class="moreDetails" data-id="#salada"> Mais detalhes </button> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="boxContent">
                                <img src="images/3.png" alt="prato 3">
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class="container classContainer">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="boxContent">
                                <img src="images/1.png" alt="prato 1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="boxContent">
                                <h2>Grill <span> menu:</span></h2>
                                <h3>BECIEGAST NVERITI VITAESAERT ASETY KERTYA ASET APLICA BOSERDE NERAFAE KERTYURAUAS VITAESA.</h3>
                                <p>Praesent vestibulum aenean nonummy endrerit mauris. Cum sociis natoque Magnis dis 
                                    parturient montes. Ascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. 
                                    Morbi nunc odio gravida at cursus nec luctus a lorem.</p>
                                <button class="moreDetails" data-id="#camarao"> Mais detalhes </button> 
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    

    <div class="header">
        <div></div>
        <h2> Latest event: </h2>
    </div>


    <div class="container classContainer3">
        <div class="row ">
            <div class="col-md-6">
                <div class="boxContent">
                    <img src="images/event.jpg" alt="eventos">
                </div>
            </div>
            <div class="col-md-6">
                <div class="boxContent">
                    <h2>The title on the article</h2>
                    <p>Praesent vestibulum aenean nonummy endrerit mauris. Cum sociis natoque Magnis dis 
                        parturient montes. Ascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. 
                        Morbi nunc odio gravida at cursus nec luctus a lorem.</p>
                    <button> Saiba mais </button>   
                </div> 
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php';?>

    <div class="lightBox" id="frango">
        <button class="btnClose"> Fechar </button>
        <p> conteudo detalhes frango </p>
        <p>Praesent vestibulum aenean nonummy endrerit mauris. Cum sociis natoque Magnis dis 
           parturient montes. Ascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. 
           Morbi nunc odio gravida at cursus nec luctus a lorem.</p>
    </div>

    <div class="lightBox" id="salada">
        <button class="btnClose"> Fechar </button>
        <p> conteudo detalhes salada </p>
        <p>Praesent vestibulum aenean nonummy endrerit mauris. Cum sociis natoque Magnis dis 
           parturient montes. Ascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. 
           Morbi nunc odio gravida at cursus nec luctus a lorem.</p>
    </div>

    <div class="lightBox" id="camarao">
        <button class="btnClose"> Fechar </button>
        <p> conteudo detalhes camarão </p>
        <p>Praesent vestibulum aenean nonummy endrerit mauris. Cum sociis natoque Magnis dis 
           parturient montes. Ascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. 
           Morbi nunc odio gravida at cursus nec luctus a lorem.</p>
    </div>

    
</body>
</html>
