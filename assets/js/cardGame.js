
let activeCards = $('li.active');

$('li.cardd').click(function(){
    if ($(this).hasClass('active')==false) {
        $(this).addClass('active');
    }

    let countActive = $('li.active').length;

    if(countActive>1){
        if ($($('li.active')[0]).attr('number')==$($('li.active')[1]).attr('number')) {
            $('li.active').delay(1000).queue(function(){
                $('li.active').remove();

                if ($('li.cardd').length==0) {
                    $('ul.gameField div.completed').fadeIn();
                }
            });
        } else {
            setTimeout(function(){
                $('li.active').removeClass('active');
            },1000);
        }
    }
});



