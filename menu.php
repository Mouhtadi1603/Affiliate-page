<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="css4/menu.css">
    <script src="js4/jquery-3.6.0.js"></script>
    <style>
        nav {
            width: 100%;
            height: 50px;
            background:  #302521 ;
            padding:5px 0;
            position: fixed;
            top: 0;
            z-index: 1000;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('#btn').on({
                click: function(){
                    $('ul').toggleClass('show'); 
                },

                mousedown: function(){
                    $(this).css('border','2px solid sandybrown');
                    $(this).css('border-radius','5px');
					$(this).css('color','sandybrown');
                },

                mouseup: function(){
                    $(this).css('border','');
					$(this).css('color','white');
                }
            });

            $('#liens').on({
                click: function(){
                    $('ul').toggleClass('show');
                }
            });

            $('#lien2').on({
                click: function(){
                    $('ul').toggleClass('show');
                }
            });

            $('#lien3').on({
                click: function(){
                    $('ul').toggleClass('show');
                }
            });

            $('#lien4').on({
                click: function(){
                    $('ul').toggleClass('show');
                }
            });

            $('#lien5').on({
                click: function(){
                    $('ul').toggleClass('show');
                }
            });


        });

    </script>
</head>
<body>
    <?php  
    echo "<nav><label class='logo'><span>L</span>ivre<span>E</span>ducation</label><label id='btn' for='check'>☰</label><ul class='menu1'><li id='liens'><a href='https://livre-education.com'>Accueil</a></li><li id='lien2'><a href='http://apropos.livre-education.com'>A propos</a></li><li id='lien3'><a href='http://livres.livre-education.com'>Livres</a></li><li id='lien4'><a href='http://sinscrire.livre-education.com'>S'inscrire</a></li><li id='lien5'><a href='http://contact.livre-education.com'>Contact</a></li></ul></nav>";

    echo "<div class='footer'><p><span>© Copyright</span> 2022 <span class='jama'>JamaTouk,</span> tous droits réservés</p></div>";

    ?>

    
</body>
</html>