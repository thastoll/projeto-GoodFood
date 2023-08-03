<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>CONTATO</title>
</head>
<body>
    
    <?php include 'includes/header.php';?>

    <?php include 'includes/nav.php';?>

    <div class="container classContainer">
        <div class="row">
            <div class="col-md-12">
                <div class="maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7970.138861355868!2d-40.51731921079595!3d-2.7957619887247382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7e986880741a685%3A0x9e57dad881207f07!2sVila%20de%20Jericoacoara%2C%20Jijoca%20de%20Jericoacoara%20-%20CE!5e0!3m2!1spt-BR!2sbr!4v1682537148935!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <div></div>
                    <h1> Formulário de Contato </h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div  class="form">
                    <form>
                        <input type="text" name="name" placeholder="Insira o nome" required="required">
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div  class="form">
                    <form>
                        <input type="email" name="email" placeholder="Insira o seu e-mail" required="required">
                    </form>
                </div>
            </div>
            <div class="col-md-12">
                <div  class="form">
                    <form>
                        <input type="text" name="text" placeholder="Assunto" required="required">
                    </form>
                </div>
            </div>
            <div class="col-md-12">
                <div  class="form">
                    <form>
                        <textarea type="text" name="text" placeholder="Mensagem" required="required"> </textarea>
                    </form>
                </div>
            </div>
            <div class="col-md-12">
                <div  class="form">
                    <form>
                        <button> Enviar </button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <?php include 'includes/footer.php';?>

</body>
</html>
