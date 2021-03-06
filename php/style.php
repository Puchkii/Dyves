

<?php
    include 'block.php';
  /*
  0 = text kleur
  1 = div kleur
  2 = 2e text kleur
  3 = gradient
  4 = logotext kleur

  */
    // $fonts = ["Arial, sans-serif","Helvetica, sans-serif","Verdana, sans-serif","Trebuchet MS, sans-serif","Gill Sans, sans-serif","Noto Sans, sans-serif",
    //           "Avantgarde, TeX Gyre Adventor, URW Gothic L, sans-serif","Optima, sans-serif","Arial Narrow, sans-serif","sans-serif","Times, Times New Roman, serif",
    //           "Didot, serif","Georgia, serif","Palatino, URW Palladio L, serif","Bookman, URW Bookman L, serif","New Century Schoolbook, TeX Gyre Schola, serif",
    //           "American Typewriter, serif","serif","Andale Mono, monospace","Courier New, monospace","Courier, monospace","FreeMono, monospace","OCR A Std, monospace",
    //           "DejaVu Sans Mono, monospace","monospace","Comic Sans MS, Comic Sans, cursive","Apple Chancery, cursive","Bradley Hand, cursive","Brush Script MT, Brush Script Std, cursive",
    //           "Snell Roundhand, cursive","URW Chancery L, cursive","cursive","Impact, fantasy","Luminari, fantasy","Chalkduster, fantasy","Jazz LET, fantasy","Blippo, fantasy",
    //           "Stencil Std, fantasy","Marker Felt, fantasy","Trattatello, fantasy","fantasy"];
    $fonts = ["","Oswald","Girassol","Lobster","Righteous","Lato","Ubuntu","Alatsi","Arvo","Acme","Caveat","Calistoga","Mansalva","Fondamento"];
    //werkende fonts :Lobster,Oswald,Girassol,Righteous

    //standaard thema
    $t0 = "";
    //disney theme
    $t1 =  ["#380CE9","rgb(148, 178, 216,0.7);","white","linear-gradient(180deg, rgba(15,97,231,1) 10%, rgba(1,59,133,1) 96%);","white","background-image: url('pic/back/disney.jpg');",];
    //Pink theme
    $t2 =  ["#600033","rgb(254, 4, 137,0.7);","black","linear-gradient(180deg, rgba(160,0,92,0.8) 7%, rgba(122,9,86,1) 93%);","white","background-image: url('pic/back/pink.jpg');",];
    //Dark theme
    $t3 =  ["gray","#282828;","white","linear-gradient(180deg, rgba(8,8,8,0.8) 7%, rgba(17,17,17,1) 93%)","white","background-color:#191919;",];
    //fanta theme
    $t4 = ["#FE3C01","rgb(254, 151, 47,0.7);","white","linear-gradient(180deg, rgba(232,97,7,1) 10%, rgba(239,80,1,1) 51%, rgba(255,102,0,1) 93%);","white","background-image: url('pic/back/fanta.jpg');",];
    //netflix theme
    $t5 = ["white","rgb(25, 25, 25,0.7);","white","linear-gradient(180deg, rgba(0,0,0,1) 10%, rgba(13,13,13,1) 93%);","#E50914","background-color:#141414;",];
    //smurf theme
    $t6 = ["#DBDADB","rgb(1, 182, 202,0.7);","white","linear-gradient(180deg, rgba(31,125,204,1) 10%, rgba(175,175,175,1) 93%);","#015EFE","background-image: url('pic/back/smurf.jpg');",];
    //starwars theme
    $t7 = ["#DBDADB","rgb(0, 0, 0,0.7);","white","linear-gradient(180deg, rgba(0,0,0,1) 10%, rgba(13,13,13,1) 93%);","#FFE81F","background-image: url('pic/back/starwars.jpg'); background-repeat: repeat-x; background-color:black;",];
    //cristmas theme
    $t8 = ["#F8B229","rgb(187, 37, 40,0.7);","orange; font-weight:600;","linear-gradient(180deg, rgba(194,29,32,1) 10%, rgba(237,66,44,1) 87%);","#165B33","background-image: url('pic/back/crist.jpg');",];
    //game thema
    $t9 = ["#DBDADB","rgb(0, 0, 0,0.7);","black","linear-gradient(180deg, rgba(176,176,176,1) 10%, rgba(66,66,66,1) 87%);","#515151","background-image: url('pic/back/game.jpg'); background-repeat: repeat-x; background-color:black;",];
    //wedding thema
    $t10 = ["black","rgb(255, 255, 255,0.7);","black"," linear-gradient(180deg, rgba(247,247,247,1) 10%, rgba(204,204,204,1) 87%);","#515151","background-image: url('pic/back/wed.jpg');",];
    //hamburger thema
    $t11 =  ["#ec3521","rgb(229,203,122,0.7);","#32c704","linear-gradient(180deg, rgba(236,53,33,1) 10%, rgba(69,1,1,1) 96%);","#e5cb7a","background-image: url('pic/back/ham.jpg');",];
    //rick theme
    $t12 =  ["#38eb00","rgb(38,107,10,0.7);","#32c704","linear-gradient(180deg, rgba(124,19,72,1) 10%, rgba(163,0,123,1) 96%);","#75b6b5","background-image: url('pic/back/rick.jpg');",];
    //southpark theme
    $t13 = ["white","rgb(94,81,64,0.7);","black","linear-gradient(180deg, rgba(122,104,82,1) 10%, rgba(94,81,64,1) 96%);","black","background-image: url('pic/back/south.jpg');",];
    //krijt thema
    $t14 = ["white","rgb(57,57,57,0.7);","white","#282828;","black","background-image: url('pic/back/krijt.jpg');",];
    //ander thema
    $t15 = ["white","rgb(94,81,64,0.7);","white","linear-gradient(180deg, rgba(122,104,82,1) 10%, rgba(94,81,64,1) 96%);","#5B3E2B","background-image: url('pic/back/gitaar.jpg');",];
    //Linked in thema
    $t16 = ["black","rgb(255,255,255);border: 0.05vw solid gray;","black","#283E4A;","white","background:#F5F5F5;",];

    $kleuren = $$achtergrond_;
    echo "<link href='https://fonts.googleapis.com/css?family=$fonts[$font]' rel='stylesheet'>";
    echo "<style media='screen'>
            .profielkleur{
              color:$kleuren[0];
            }
            .profielkleur2{
              background-color:$kleuren[1]
            }
            .profielkleur3{
              background-color:$kleuren[3];
            }
            .watProfiel{
              background:$kleuren[3];
              color:$kleuren[2];
            }
            body{
              $kleuren[5];
              background-size: cover;
              font-family:$fonts[$font];
            }
            .header_div , .kop , .meer{
              color:$kleuren[2];
            }
            .header_div:hover{
              color:$kleuren[0];
            }
            .searchbar , .footer{
              background: $kleuren[3];
            }
            .logotext{
              color:$kleuren[4];
            }
            td{
              color:$kleuren[2];
            }
            .Krabelpost{
              border:0.25vw solid $kleuren[0];
            }
          </style>";


 ?>
