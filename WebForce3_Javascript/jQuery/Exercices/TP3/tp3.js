$(document).ready(function() {
    $('#left, #right').toggleClass('hide, flex')


    let pastilles = [$('#1'), $('#2'), $('#3')];
    
    

    function test(){
        pastilles.forEach(function(e, index) {
            if (index === imageIndex) {
                e.css("opacity", "100%");
            } else {
                e.css("opacity", "50%");
            }
        });
    }

    let imageIndex = 0;
    

    function nextImage() {
        imageIndex++;
        if (imageIndex === $("#carrousel ul li").length) {
            imageIndex = 0;
        }

        $("#carrousel ul li").each(function(index) {
            if (index === imageIndex) {
                $(this).css("z-index", 2);
            } else {
                $(this).css("z-index", 1);
            }
        });
        test();
    }

    function lastImage() {
        imageIndex--;
        if (imageIndex < 0) {
            imageIndex = $("#carrousel ul li").length - 1;
        }

        $("#carrousel ul li").each(function(index) {
            if (index === imageIndex) {
                $(this).css("z-index", 2);
            } else {
                $(this).css("z-index", 1);
            }
        });
        test();
    }

    setInterval(nextImage, 5000);

    $("#right").click(nextImage);
    $("#left").click(lastImage);
    test();

    //Les pastilles
    pastilles.forEach(function(pastille, index) {
        pastille.click(function() {
            imageIndex = index;
            $("#carrousel ul li").each(function(i) {
                if (i === imageIndex) {
                    $(this).css("z-index", 2);
                } else {
                    $(this).css("z-index", 1);
                }
            });
            test();
        });
    });
    
});
