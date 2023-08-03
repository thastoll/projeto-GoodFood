function moreDetails(){
    $(".moreDetails").click(function(){
        $(".lightBox").removeClass("visible");

        let getLightBoxId = $(this).attr("data-id");
        $(getLightBoxId).addClass("visible");
    });
    closeDetails();
};

function closeDetails(){
    $(".btnClose").click(function(){
        $(".lightBox").removeClass("visible");
    });
};

$(document).ready(function(){
    moreDetails();
});



















// function moreDetails(){
//     $(".moreDetails").click(function(){

//         $(".lightBox").removeClass("visible");

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



