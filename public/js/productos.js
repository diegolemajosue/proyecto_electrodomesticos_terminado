const validar=()=>{
       const prod_nombre=document.querySelector("#prod_nombre");
       const prod_codigo=document.querySelector("#prod_codigo");
       const prod_precio=document.querySelector("#prod_precio");
       
       

       if(prod_nombre.value.length==0){
          Swal.fire({
            icon:'error',
            title:'ERROR',
            text:'El campo nombre es obligatorio',
          });
         return false;
       }

         if(prod_codigo.value.length==0){
          Swal.fire({
            icon:'error',
            title:'ERROR',
            text:'El campo categoria es obligatorio',
          });
         return false;
       }

         if(prod_precio.value.length==0){
          Swal.fire({
            icon:'error',
            title:'ERROR',
            text:'El campo cedula es obligatorio',
          });
         return false;
       }
}
