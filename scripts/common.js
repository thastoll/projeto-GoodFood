var teste = 'texto 4';

function clickOnButtonH1(){

    var btn = document.getElementById("button");

    btn.addEventListener("click", function(){
    
        console.log(teste);
        alert(teste);
        
    });
};


function viewDetails(){

    var btnDetails = document.getElementById("moreDetails");

    btnDetails.addEventListener("click", function(){
        var ligthBox = document.getElementsByClassName("lightBox")[0];
        ligthBox.classList.add("visible");
 
    });
    closeDetails();
};

function closeDetails(){

    var btnClose = document.getElementById("btnClose");

    btnClose.addEventListener("click", function(){
        var ligthBox = document.getElementsByClassName("lightBox")[0];
        ligthBox.classList.remove("visible");
    });
};

function viewDetails2(){

    var btnDetails2 = document.getElementById("moreDetails2");

    btnDetails2.addEventListener("click", function(){
        var ligthBox2 = document.getElementsByClassName("lightBox2")[0];
        ligthBox2.classList.add("visible2");
 
    });
    closeDetails2();
};

function closeDetails2(){

    var btnClose2 = document.getElementById("btnClose2");

    btnClose2.addEventListener("click", function(){
        var ligthBox2 = document.getElementsByClassName("lightBox2")[0];
        ligthBox2.classList.remove("visible2");
    });
    closeDetails3();
};


function viewDetails3(){

    var btnDetails3 = document.getElementById("moreDetails3");

    btnDetails3.addEventListener("click", function(){
        var lightBox3 = document.getElementsByClassName("lightBox3")[0];
        lightBox3.classList.add("visible3");
    });
};

function closeDetails3(){
    
    var btnClose3 = document.getElementById("btnClose3");

    btnClose3.addEventListener('click', function(){
        var lightBox3 = document.getElementsByClassName("lightBox3")[0];
        lightBox3.classList.remove("visible3");
    });
};

window.onload = function(){
    // clickOnButtonH1();

    // viewDetails();

    // viewDetails2();

    // viewDetails3()
};

// function moreDetails(){
//     $(".moreDetails").click(function(){

//         $(".lightBox").removeClass("visible"); //esse comando fecha tudo antes de executar o restante

//         let getLightBoxId = $(this).attr("data-id");
//         $(getLightBoxId).addClass("visible");
//     });
//     closeDetails();
// };

// function closeDetails(){
//     $(".btnClose").click(function(){
//         $(".lightBox").removeClass("visible");
//     });
// };





// $( document ).ready(function() {
//     moreDetails();
// });
