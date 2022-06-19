$(document).ready(function() {

    $('#aron').on('click', function() {

        $.ajax
        ({
        type:'post',
        url:'attack.php',
        data:{
         aron:"aron",
        },
        success:function(response) {
        if(response=="success")
        {
          console.log (response);
        }
        else
        {
            $("#response").append('<div id="response">'+response+'</div>');
        }
        }
        });
    });

    $('#bezem').on('click', function() {

        $.ajax
        ({
        type:'post',
        url:'attack.php',
        data:{
         bezem:"bezem",
        },
        success:function(response) {
        if(response=="success")
        {
          console.log (response);
        }
        else
        {   
            $("#response").append('<div id="response">'+response+'</div>');
        }
        }
        });
    });


    $('#reset').on('click', function() {

        $.ajax
        ({
        type:'post',
        url:'reset.php',
        data:{
         reset:"reset",
        },
        success:function(response) {
        if(response=="success")
        {
            window.location.href="index.php";
        }
        }
        });
    });
});