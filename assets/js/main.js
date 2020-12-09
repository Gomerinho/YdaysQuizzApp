
/** TABLE
 * 
 * - SLIDERS
 * - QUIZZ
 */

// QUIZZ

$("#lancer-quizz").click(function (event) {
    event.stopPropagation();
    let step = 0;
    do_ajax(step);
});

function do_ajax(step) {
    $.ajax({
        url: 'includes/quizz-go.php',
        type: 'GET',
        data: "step=" + step,
        dataType: 'html',
        success: function (code_html, statut) {
            $("#quizz").html(code_html);
            $("#next-quizz").prop('disabled', true);


            $('#reponses').on('click', '.response-choix', function (event) {
                event.preventDefault();
                let value = $(this).find("input[type='hidden']")[0].value;
                $(this).prop('disabled', true);
                $.ajax({
                    url: 'includes/check-reponse.php',
                    type: 'GET',
                    data: 'current=' + value,
                    dataType: 'json',
                    success: function (code_html, statut) {
                        if (code_html.state) {
                            console.log("oui");
                            $target = $(event.target);
                            $target.addClass("bonne-reponse");
                            $target.removeClass("response-choix");
                        } else {
                            console.log("non");
                            $target = $(event.target);
                            $target.addClass("mauvaise-reponse");
                            $target.removeClass("response-choix");
                        }
                    },
                    error: function (resultat, statut, erreur) {
                    },
                    complete: function (resultat, statut) {
                        console.log(resultat);
                        $(".reponse.response-choix").click(function (e) {
                            e.stopPropagation();
                        });
                        $("#next-quizz").prop('disabled', false);
                        $("#next-quizz").click(function (event) {
                            event.stopPropagation();
                            let step = 1;
                            if (resultat.responseJSON.left > 0) {
                                do_ajax(step);
                            } else {
                                $.ajax({
                                    url: 'includes/quizz-final.php',
                                    type: 'GET',
                                    data: "step=2",
                                    dataType: 'html',
                                    success: function (code_html, statut) {
                                        $("#remplace").html(code_html);
                                    },
                                    error: function (resultat, statut, erreur) {
                                    },
                                    complete: function (resultat, statut) {
                                    }
                                });
                            }
                        });
                    }
                });

            });

            $(".response-choix *").on("click", function (e) {
                $(this).parent().click();
            });
        },
        error: function (resultat, statut, erreur) {
        },
        complete: function (resultat, statut) {
        }
    });
}



// SLIDERS
$('.slides__list').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
});


$('.categories__list').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});

$('.categories__list--manu').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});
