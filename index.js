$(document).ready(function(){
    $('#insertButton').click(function(e){
        $.ajax({
            method: 'post',
            url: 'includes/create.inc.php',
            dataType : 'text',
            success: function(response){
                console.log(response);
            }
        })
    });
})