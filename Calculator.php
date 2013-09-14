<!DOCTYPE html>
<html>
<head>
   <title>Simple Calculator</title>
   <!-- Created by Sarath -->
<style type="text/css">
   table{
      width: 200px;
      margin: auto;
      margin-top: 60px;
      background: #ccc;
      padding: 5px;
      border-radius: 10px;
   }
    input[type="text"]{
      font-family: Helvetica;
      font-weight: bold;
      border: 1px solid;
      padding: 2px;
      width: 97%;
      border-radius: 10px;
   }
   input[type="button"]{
      background: #f66;
      width: 45px;
      border: none;
      border-radius: 10px;
      box-shadow: 1px 1px 3px 1px;
   }
   input[type="button"]:hover{
      background: #c66;
   }
   input[type="button"]:active{
      background: #966;
      box-shadow: 1px 0px 1px 1px;
   }
</style>
</head>
<body>
   <table id="calc">
      <tr><td colspan="4"><input style="direction:rtl;" id="screen" type="text"  /></td></tr>
       <tr>
         <td><input type="button" onclick="off();" value="OFF" /></td>
         <td><input type="button" onclick="" value="CE" /></td>
         <td><input type="button" onclick="btn(this.value);" value="." /></td>
         <td><input type="button" onclick="op(this.value);"  value="/" /></td>
      </tr>
      <tr>
         <td><input type="button" onclick="btn(this.value);" value="1" /></td>
         <td><input type="button" onclick="btn(this.value);" value="2" /></td>
         <td><input type="button" onclick="btn(this.value);" value="3" /></td>
         <td><input type="button" onclick="op(this.value);"  value="+" /></td>
      </tr>
       <tr>
         <td><input type="button" onclick="btn(this.value);" value="4" /></td>
         <td><input type="button" onclick="btn(this.value);" value="5" /></td>
         <td><input type="button" onclick="btn(this.value);" value="6" /></td>
         <td><input type="button" onclick="op(this.value);"  value="-" /></td>
      </tr>
       <tr>
         <td><input type="button" onclick="btn(this.value);" value="7" /></td>
         <td><input type="button" onclick="btn(this.value);" value="8" /></td>
         <td><input type="button" onclick="btn(this.value);" value="9" /></td>
         <td><input type="button" onclick="op(this.value);" value="*" /></td>
      </tr>
       <tr>
         <td><input type="button" onclick="equal();" value="=" /></td>
         <td><input type="button" onclick="vclear();" value="C" /></td>
         <td><input type="button" onclick="btn(this.value);" value="0" /></td>
         <td><input type="button" onclick="op(this.value);" value="%" /></td>
      </tr>
   </table>
<script type="text/javascript">
 var scr=document.getElementById("screen");
 var a=0;
 var o="";
   function btn(digit){
      
      scr.value+=digit;
   }
   function vclear(){
     document.getElementById("screen").value="";
   }
   function op(op){
      o=op;
      a=parseFloat(document.getElementById("screen").value);
      vclear();
      console.log(op);
      console.log(a);
   }

   function equal(){
      b=parseFloat(document.getElementById("screen").value);
      switch(o)
      {
         case '+':sum=a+b;break;
         case '-':sum=a-b;break;
         case '*':sum=a*b;break;
         case '/':sum=a/b;break;
         case '%':sum=a%b;break;
      }
      console.log(sum);
      document.getElementById("screen").value=sum;
   }
   function off(){
      document.getElementById("calc").style.display="none";
   }
</script>
</body>
</html>
