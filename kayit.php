    <?php
    session_start();
    echo "dene<br>";
    var_dump($_POST);
    $link=@mysqli_connect("localhost","root","") or die ("Sunucuya Bağlanamadık");
    $sec=@mysqli_select_db($link,"ksk_isler") or die ("Veritabanı Seçilemedi");
    error_reporting(0); 
    if($_GET['sno']){
        $sql2="select * from ksk_isler.tbl_isler where ksk_sno =".$_GET['sno'];
        $res=mysqli_query($link,$sql2);
        while ($roww=mysqli_fetch_assoc($res)){
            $row=$roww;
            break;
        }
    }
    /*if( isset($_GET["kid"])){
     echo "sssssssssssssssssssssssssssssssss".$_POST['hiddenid']."";
     echo "string".$_POST["gelenid"];


 }$e=0;
$res=mysqli_query($link,"select * from ksk_isler.tbl_isler ORDER BY ksk_sno DESC");
 while ($row=mysqli_fetch_assoc($res)){
    $e++;
                if($_GET["kid"]==$e){
                    for($a=0; $a<$_GET["kid"];$a++){
                            $_SESSION["sira"]=$row["ksk_sno"]; 
                            $_SESSION["submit"]="href".$_GET["kid"]; 
                            echo "11 ";
                        } 
                        echo "12 ";
                        break;
                }
                //echo "<br/>13 <br/>";
              }
              //echo "saaaaaaaaaaaaaaaaaaaa----".$_SESSION["sira"]."<br/> zczxzzzzzzzzzzzzzzzzzz---".$_SESSION["submit"];*/
              $i=0;
              $a=0;
              ?>

              <!DOCTYPE html>
              <html lang="en">
              <head>
                <script type="text/javascript" src="js/jquery.min.js"></script>
                <script type="text/javascript">
                </script>
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                <!-- Meta, title, CSS, favicons, etc. -->
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">

                <link href="css/bootstrap.min.css" rel="stylesheet">
                <link href="css/animate.min.css" rel="stylesheet">
                <link href="css/custom.min.css" rel="stylesheet">
                <script src="/js/jquery.min.js" type="text/javascript"></script>

                <script>


                    function guncelle(kid){
                        $.get( "kid_detay.php?kid=" + kid , function( data ) {
                           // console.log(data);
                            var obj = JSON.parse( data );   
            //console.log( obj );
            //console.log( "birim:" + obj.ksk_birim );
            //$( "#sno" ).val(obj.ksk_sno);
            $( "#ksk_birim" ).val(obj.ksk_birim);
            $( "#sno" ).val(obj.ksk_sno);
            $( "#ksk_ihaletrh" ).val(obj.ksk_ihaletrh);
            $( "#ksk_sonuc" ).val(obj.ksk_sonuc);
            $( "#ksk_adi" ).val(obj.ksk_adi);
            $( "#ksk_detay" ).val(obj.ksk_detay);
            $( "#ksk_kaydeden" ).val(obj.ksk_kaydeden);
            $( "#ksk_muteahhit" ).val(obj.ksk_muteahhit);
            $( "#ksk_muteahhit" ).val(obj.ksk_muteahhit);
            $('input[name="submit1"]').attr('name','submitGuncelle');

        });

        //self.location.href="kayisast.php?kid="+kid;
        /*
            $(function(){
                $('#link5').click(function(){
                    var griddengelenveri=$('#griddengelen5').val();
                    $.post('ajaxpage.php',{giris:griddengelenveri},function(veri){
                         $('#sonuc').html(veri);
                    });
                    alert(griddengelenveri);
                });
            }); */

        }

         /*$(function(){
            var link = document.getElementById("ajaxFile5");
            link.onclick=function(){
                var griddengelenveri=$('#griddengelen5').val();
                    
                    alert(griddengelenveri);
            }


        })
            $(function(){
                $('#link5').click(function(){
                    var griddengelenveri=$('#griddengelen5').val();
                        $.post('kayit.php',{giris:griddengelenveri},function(veri){
                             $('#sonuc').html(veri);
                        });
                    alert(griddengelenveri);
                });
            });*/  
        </script>
    </head>
    
    <br>
    <body class="login" style="margin-top: -20px;">
        <div class="login_wrapper">
            <section class="login_content" style="margin-top: -40px;">
                <form  id="form1" enctype="multipart/form-data" action="" method="post">

                    <h2>İhale Kayıt Formu</h2><br>
                    <table>
                        <tr>
                            <input type="hidden" id="sno" name="sno" value="<?php ?>">
                            <td> <input id="ksk_ihaletrh" type="text" class="form-control" value="" placeholder="ihale tarihi" name="ksk_ihaletrh" required=""/></td>
                            <td><input id="ksk_sonuc" type="text" class="form-control" value="" placeholder="ihale durumu" name="ksk_sonuc" required=""/></td>
                            <!--<td> <input type="text" class="form-control" value="<?php //if($_GET['sno']){echo $row['ksk_sno'];}?>" placeholder="sıra no" name="ksk_sno" required=""/></td>-->
                        </tr>
                    </table>
                    <div>
                        <input id="ksk_birim" type="text" class="form-control" value="" placeholder="birim" name="ksk_birim" required=""/>
                    </div>
                    <div>
                        <input id="ksk_adi" type="text" class="form-control" value="" placeholder="ihale adı" name="ksk_adi" required=""/>
                    </div>
                    <div>
                        <input id="ksk_muteahhit" type="text" class="form-control" value="" placeholder="müteahhit" name="ksk_muteahhit" required=""/>
                    </div>
                    <div>
                        <input id="ksk_detay" type="text" class="form-control" value="" placeholder="detay" name="ksk_detay" required=""/>
                    </div>
                    <div>
                        <input id="ksk_kaydeden" type="text" class="form-control" value="" placeholder="kaydeden" name="ksk_kaydeden" required=""/>
                    </div>
                    <center>
                        <textarea id="ksk_aciklama" row = "50" cols = "50" name="ksk_aciklama" wrap="hard"></textarea>
                        <td><input  type="submit"  class="btn btn-default submit " type="submit" name="submit1" value="Kaydet"></td><td>

                    </center>
                </div>
            </form>
            <center>
                <form name="form2" action="" method="post">
                    <td><input class="btn btn-default submit" type="submit" name="submit2" value="listele"></td>
                </form>
            </center>
            <div id="qqq" ></div>
            <?php
            if(isset($_POST["submit1"])){
                $sql="insert into tbl_isler values('','$_POST[ksk_birim]','$_POST[ksk_ihaletrh]','$_POST[ksk_adi]','$_POST[ksk_sonuc]','$_POST[ksk_muteahhit]','$_POST[ksk_detay]','$_POST[ksk_kaydeden]','$_POST[ksk_aciklama]') ";
                mysqli_query($link,$sql);
        //$ksk_sno=$_POST['ksk_sno'];
                echo "<script> alert ('kayıt başarıyla tamamlandı'); </script>";
            }
            if(isset($_POST["submitGuncelle"])){
                echo $sirano=$_POST["sno"];
                $sql3="update tbl_isler set ksk_birim='$_POST[ksk_birim]',ksk_ihaletrh='$_POST[ksk_ihaletrh]',ksk_adi='$_POST[ksk_adi]',ksk_sonuc='$_POST[ksk_sonuc]',ksk_muteahhit='$_POST[ksk_muteahhit]',ksk_detay='$_POST[ksk_detay]',ksk_kaydeden='$_POST[ksk_kaydeden]',ksk_aciklama='$_POST[ksk_aciklama]' where ksk_sno=".$sirano;
                mysqli_query($link,$sql3);
                echo "<script> alert ('kayıt başarıyla tamamlandı'); </script>";
            }
            if(isset($_POST["submit2"])){
                $res=mysqli_query($link,"select * from ksk_isler.tbl_isler ORDER BY ksk_sno DESC");
                echo "<table class='table table-bordered'>";
                echo "<tr>";
                echo "<th>"; echo ""; echo "</th>";
                echo "<th>"; echo "Sıra No"; echo "</th>";
                echo "<th>"; echo "İlgili Birim"; echo "</th>";
                echo "<th>"; echo "Tarih"; echo "</th>";
                echo "<th>"; echo "İhale Adı"; echo "</th>";
                echo "<th>"; echo "Sonuc"; echo "</th>";
                echo "<th>"; echo "Muteahhit"; echo "</th>";
                echo "<th>"; echo "Detay"; echo "</th>";
                echo "<th>"; echo "Kaydeden"; echo "</th>";
                echo "<th>"; echo "Açıklama"; echo "</th>";
                echo "</tr>";
                while ($row=mysqli_fetch_assoc($res)){$i++; 
                    ?>
                    <tr>
                     <!-- <td> <a href="?kid=<?php echo $i; ?>" id="href<?php echo $i; ?>" target="_self" >Güncelle</a> </td> -->
                     <!-- <td> <input type="submit" value="Güncelle" id="link<?php //echo $i; ?>"> </td> -->
                     <td><button onclick="guncelle(<?php echo $row["ksk_sno"]; ?>)">Güncelle</button></td>
                     <input type="hidden" id="hiddenid" value="<?php echo $row["ksk_sno"]; ?>">
                     <td> <?php echo $row["ksk_sno"]; ?> </td>
                     <td> <?php echo $row["ksk_birim"]; ?> </td>
                     <td> <?php echo $row["ksk_ihaletrh"]; ?> </td>
                     <td> <?php echo $row["ksk_adi"]; ?> </td>
                     <td> <?php echo $row["ksk_sonuc"]; ?> </td>
                     <td> <?php echo $row["ksk_muteahhit"]; ?> </td>
                     <td> <?php echo $row["ksk_detay"]; ?> </td>
                     <td> <?php echo $row["ksk_kaydeden"]; ?> </td>
                     <td> <?php echo $row["ksk_aciklama"]; ?> </td>
                     <?php
                           /* if($_GET["kid"]){
                                $ksk_birim=$row['ksk_birim'];
                                $ksk_ihaletrh=$row['ksk_ihaletrh'];
                                $ksk_adi=$row['ksk_adi'];
                                $ksk_sonuc=$row['ksk_sonuc'];
                                $ksk_muteahhit=$row['ksk_muteahhit'];
                                $ksk_detay=$row['ksk_detay'];
                                $ksk_kaydeden=$row['ksk_kaydeden'];
                                $ksk_aciklama=$row['ksk_aciklama'];
                            }else{
                                $ksk_birim="";
                                $ksk_ihaletrh="";
                                $ksk_adi="";
                                $ksk_sonuc="";
                                $ksk_muteahhit="";
                                $ksk_detay="";
                                $ksk_kaydeden="";
                                $ksk_aciklama="";
                            }*/
                            ?> <?php
                        }
                        ?>
                    </table><?php
                }

                ?>

            </section>
        </body>
        </html>