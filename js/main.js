// Slider
function slider(sliderName, velocidade) {
    var sliderClass = '.' + sliderName,
        activeClass = 'active',
        rotate = setInterval(rotateSlide, velocidade);

    $(sliderClass + ' > :first').addClass(activeClass);

    // $(sliderClass).hover(function(){
    // 	clearInterval(rotate);
    // }, function() {
    // 	rotate = setInterval(rotateSlide, velocidade);
    // });

    function rotateSlide() {
        var activeSlide = $(sliderClass + ' > .' + activeClass),
            nextSlide = activeSlide.next();

        if (nextSlide.length == 0) {
            nextSlide = $(sliderClass + ' > :first');
        }
        activeSlide.removeClass(activeClass);
        nextSlide.addClass(activeClass);
    }
}

slider('slide', 4000);

/* Login --------------------------------------------------------------------------- */

$(document).ready(function() {
    $('.fontLogin').click(function() {
      $('.popLogin').toggleClass("display");
    });
  });

/* Suítes Reservas ----------------------------------------------------------------- */

$('.btnPalace').click(function () {
    $('.slide').addClass('display');
    $('.form-palace').removeClass('display');
});

$('.btnPalaceVoltar').click(function () {
    $('.slide').removeClass('display');
    $('.form-palace').addClass('display');
});

$('.btnDream').click(function () {
    $('.slide').addClass('display');
    $('.form-dream').removeClass('display');
});

$('.btnDreamVoltar').click(function () {
    $('.slide').removeClass('display');
    $('.form-dream').addClass('display');
});

$('.btnSound').click(function () {
    $('.slide').addClass('display');
    $('.form-sound').removeClass('display');
});

$('.btnSoundVoltar').click(function () {
    $('.slide').removeClass('display');
    $('.form-sound').addClass('display');
});




// var nome = document.querySelector('#nome');
// var email = document.querySelector('#email');

// function handleKeyUp(event) {
//     email = event.target.value;
//     if(email !== null) {
//         $('#btnSound').prop('disabled', false);
//     }
// }

// email.addEventListener('keyup', handleKeyUp);



$(document).ready(function () {

    $(".resultado").hide();

    $("#myForm").ajaxForm({
        target: '.resultado',
        success: function (retorno) {
            // $('.resultado').html(retorno);
            $('.resultado').show();
            $("#myForm").resetForm();
        }
    });

});