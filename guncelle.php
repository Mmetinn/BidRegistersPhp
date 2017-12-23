<!DOCTYPE html>
<html>
<head>
<script src="/js/jquery.min.js"></script>
<script type="text/javascript">
    ÖNİZLEME BUTONU 
   $('.onizleme').on('click',function(){ 
   //Önizleme buttonuna tıklandığın 
   var link = $(this).attr('href'); 
   //a etiketi ise href paremetresinin değerini al 
   var form = $('form.pdfolustur'); 
   //form etiketini seç var 
   formaction = $(form).attr('action'); 
   //form etiketinin action parametresinin değerini 
   al $(' .postatma',form).val('onizleme'); 
   //postatma inputunun değerini onizleme yap ****
    form.attr('target',"_blank"); 
   //formu yeni sekmede açtır 
   form.attr('action',formaction); 
   //Başka sayfaya post etmesi gerekiyorsa actionu değiştir 
   form.submit(); 
   //değişiklikler bitince formu submit ettir. 
   form.attr('target',"_self");
   //Normal butona tıklandığında normal post için değerleri eski haline
    al $(' .postatma',form).val('true');
   //Yukarının aynısı return false;//Sayfa yenilenmemesi için 
   }); //ÖNİZLEME BUTONU

</script>
</head>
<body>
<form action="" method="post" class="pdfolustur">
<input type="text" name="postatma" class="postatma" value="true"/> 
</form>
</body>
</html>