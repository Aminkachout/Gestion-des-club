$(function() {
    var $fname = $('#fname'),
        $lastname = $('#lname'),
        $cin = $('#cin'),
        $mail = $('#mail'),
        $send = $('#send'),
        $erreur = $('#erreur'),
        $champ = $('.champ');


    $champ.keyup(function() {
        if ($(this).val().length < 2) {
            $(this).css({
                borderColor: 'red',
                color: 'red'
            });
        } else {
            $(this).css({
                borderColor: 'green',
                color: 'green'
            });
        }
    });

    function verifier(champ) {
        console.log(champ.val())
        var bool = true;

        if (champ.val() =="") {
            bool = false;
            $erreur.css('display', 'block');
            champ.css({

                borderColor: 'red',
                color: 'red'
            });
        }
        return bool;
    };
$( "#form " ).submit(function( event ) {
            if(!(verifier($fname)&
            verifier($lastname)&
            verifier($cin)&
            verifier($mail)))
                
                event.preventDefault();
 

});

   
});
