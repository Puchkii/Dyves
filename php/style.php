

<?php
  include 'block.php';
/*
0 = text kleur
1 = div kleur
2 = white
3 = gradient
4 = logotext kleur

*/
  //disney theme
  $t1 =  ["#380CE9","rgb(148, 178, 216,0.6)","white","linear-gradient(180deg, rgba(0,92,187,0.8) 7%, rgba(41,43,151,1) 60%, rgba(142,9,128,1) 93%);","white","background-image: url('pic/back/disney.jpg');",];
  //Pink theme
  $t2 =  ["#600033","rgb(254, 4, 137,0.4)","black","linear-gradient(180deg, rgba(160,0,92,0.8) 7%, rgba(122,9,86,1) 93%);","white","background-image: url('pic/back/pink.jpg');",];
  //Dark theme
  $t3 =  ["gray","#282828","white","linear-gradient(180deg, rgba(8,8,8,0.8) 7%, rgba(17,17,17,1) 93%)","blue","background-color:#191919;",];
  //fanta theme
  $t4 = ["#FE3C01","rgb(254, 151, 47,0.6)","white","linear-gradient(180deg, rgba(232,97,7,1) 10%, rgba(239,80,1,1) 51%, rgba(255,102,0,1) 93%);","white","background-image: url('pic/back/fanta.jpg');",];
  //netflix theme
  $t5 = ["white","rgb(25, 25, 25,0.9)","#E50914","linear-gradient(180deg, rgba(0,0,0,1) 10%, rgba(13,13,13,1) 93%);","#E50914","background-color:#141414;",];
  //smurf theme
  $t6 = ["#DBDADB","rgb(1, 182, 202,0.5)","white","linear-gradient(180deg, rgba(31,125,204,1) 10%, rgba(175,175,175,1) 93%);","#015EFE","background-image: url('pic/back/smurf.jpg');",];
  //starwars theme
  $t7 = ["#DBDADB","rgb(0, 0, 0,0.5)","white","linear-gradient(180deg, rgba(0,0,0,1) 10%, rgba(13,13,13,1) 93%);","#FFE81F","background-image: url('pic/back/starwars.jpg'); background-repeat: repeat-x; background-color:black;",];
  //cristmas theme
  $t8 = ["#F8B229","rgb(187, 37, 40,0.8)","#146B3A; font-weight:600;","linear-gradient(180deg, rgba(194,29,32,1) 10%, rgba(237,66,44,1) 87%);","#165B33","background-image: url('pic/back/crist.jpg');",];
  //game thema
  $t9 = ["#DBDADB","rgb(0, 0, 0,0.5)","black","linear-gradient(180deg, rgba(176,176,176,1) 10%, rgba(66,66,66,1) 87%);","#515151","background-image: url('pic/back/game.jpg'); background-repeat: repeat-x; background-color:black;",];
  //wedding thema
  $t10 = ["black","rgb(255, 255, 255,0.5)","black"," linear-gradient(180deg, rgba(247,247,247,1) 10%, rgba(204,204,204,1) 87%);","#515151","background-image: url('pic/back/wed.jpg');",];

  $kleuren = $$achtergrond_;

  echo "<style media='screen'>
          .profielkleur{
            color:$kleuren[0];
          }
          .profielkleur2{
            background-color:$kleuren[1];
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
        </style>";


 ?>