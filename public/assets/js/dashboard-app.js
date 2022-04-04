// Toggle Spin Class Icon

document.querySelector(".toggle-setting .fa-gear").onclick = function(){

    this.classList.toggle("fa-spin");
    document.querySelector(".setting-box").classList.toggle("open");
}


// Dashboard

$('.toggle-info').click(function () {

    $(this).toggleClass('selected').parent().next('.card-body').fadeToggle(100);

    if($(this).hasClass('selected')){

        $(this).html('<i class="fa fa-minus fa-lg"></i>');

    }else{

        $(this).html('<i class="fa fa-plus fa-lg"></i>');

    }

});


// Confirmation Message On Button

$('.confirm').click(function(){

    return confirm('هل انت متأكد ؟');
    
});


// Add Asterisk On Required Field

$('input').each(function(){
    if($(this).attr('required') == 'required'){
        $(this).after('<span class="asterisk">*</span>');
    }
});
