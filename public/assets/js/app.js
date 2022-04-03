$(document).ready( function()
{
    $('#search-key').on('keyup', function()
    {
        var word = $(this).val().toLowerCase();
        $('.search-job').filter( function()
        {
            $(this).toggle($(this).text().toLowerCase().indexOf(word)  > -1);
        })
    })
});


