<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script type="text/javascript">
   $(document).ready(function(){
       alert("aaaaaaaaaaaaaaa");
   });   
$("#save").click(function(){
        var nombre=$('#nombre').val();
        var ap1=$('#ap1').val();
        var ap2=$('#ap2').val();
        alert('nombre '+ nombre+" ap1 "+ap1+" ap2 "+ap2);
    
});
function guardar()
        </script>
    </head>
    <body>
        <!-- <form name ="register" action="/register" method="post">   -->
           <div class="row"><h1> EMPLEADOS</h1></div>
           <div class="row">
               <div class="col-4">
                   Nombre <input type="text" id="nombre" class="form-control" >
                </div>
           </div>
           <div class="row"></div>
           <div class="row">
               <div class="col-4">
           Primer apellido <input type="text" id="ap1" class="form-control" >
                </div>
           </div>    
           <div class="row"></div>
           <div class="row">
               <div class="col-4">
           Segundo apellido <input type="text" id="ap2" class="form-control" >
                </div>
           </div>
           <div class="row"></div>
           <div class="row">
               <div class="col-4">
                   <button id="save" class="form-control" onclick="javascript:guardar()" >Guardar</button>
               </div>
           </div>
       <!--</form> -->
    </body>
     

    </body>
</html>