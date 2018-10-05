function updateProgress()
{
    var total = 32;
    var parcial = 0;

    for (var i = 0; i < localStorage.length; i++)
    {
        var key = localStorage.key(i);

        if (key.length > 1) {
            var value = localStorage.getItem(key);
            parcial = parcial + parseInt(value);
        }      
    }
    
    var new_value = (parcial / total) * 100;
    new_value = new_value.toFixed(1);

    $('.progress-bar').css('width', new_value+"%");
    $('.el_percentage').html(new_value+"%");
}

function changeBackground(id){
    var a = $('#'+id);    

    if (a.is(':radio'))
    {
        var val = $('input[name='+id+']:checked').val();
        localStorage.setItem(id, 1);
        console.log(val);
        console.log(localStorage.getItem(id));
    }
    else
    {
        if (a[0].value == '') {
            a.removeClass('field-filled');
            localStorage.setItem(id, 0);
        }
        else{
            a.addClass('field-filled');
            localStorage.setItem(id, 1);
        }
    }

    updateProgress();
}

function applyCss(){
    $("form").each(function(){
        var input = $(this);
        for(var i=0; i<input[0].length; i++)
        {
            var val = input[0][i].value;

            if (input[0][i].type == 'radio')
            {
                console.log(input[0][i].type);
                //console.log(input[0][i]);
                //console.log('RADIO');
                var val = $('input[name='+input[0][i].id+']:checked').val();
                console.log(val);
            }
            
            var val_id = '#' + input[0][i].id;
            if (val != '' && val_id != "#")
            {
                changeBackground(input[0][i].id);                
            }
        }
    });
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

