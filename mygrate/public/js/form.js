function updateProgress()
{
    var inputs = $('input');
    var parcial = 0;

    for (var i = 0; i < inputs.length; i++)
    {
        if (inputs[i].value != "") 
        {
            parcial = parcial + 1;
        }
    }

    var total = inputs.length;
    var new_value = (parcial / total) * 100;
    var a = $('.progress-bar')[0].style.width;

    a = parseInt(a);
    if(isNaN(a))
    {
        a = 3;
    }
    else
    {
        a = a + 3;
    }
    
    new_value = new_value.toFixed(2);
    $('.progress-bar').css('width', new_value+"%");
    $('.el_percentage').html(new_value+"%");
}

function changeBackground(id){
    var a = $('#'+id);
    if (a[0].value == '') {
        a.removeClass('field-filled');
    }
    else{
        a.addClass('field-filled');
    }
}
/*
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
*/

