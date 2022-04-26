<template>
  
    <div class="create">
        <H1>Crear Nuevo Articulo</H1>
        <div>
            <div class="nav justify-content-center">
        <div>
        <tr >
            <td>
                <h4>Articulo</h4>
            </td>
            <td>
                <input type = "text" v-model="articulo"/>
            </td>
        </tr>
        
        <tr >
            <td>
                <h4>Marca</h4>
            </td>
            <td>
                <input type = "text" v-model="marca"/>
            </td>
        </tr>
        

        <tr >
            <td>
                <h4>Sexo</h4>
            </td>
            <td>
                <input type = "text" v-model="sexo"/>
            </td>
        </tr>

       <tr >
            <td>
                <h4>Color</h4>
            </td>
            <td>
                <input type = "text" v-model="color"/>
            </td>
        </tr>

        <tr >
            <td>
                <h4>talla</h4>
            </td>
            <td>
                <input type = "text" v-model="talla"/>
            </td>
        </tr>

        <tr >
            <td>
                <h4>precio</h4>
            </td>
            <td>
                <input type = "text" v-model="precio"/>
            </td>
        </tr>
        </div>
        </div>

            <br>
            <br>
            <button @click="guardar" type="button" class="btn btn-success">Guardar</button>

        </div>

    </div>
    
</template>

<script>

export default({
  data(){
        return{
            
            articulo:"",
            marca:"",
            sexo:"",
            color:"",
            talla:"",
            precio:""
        }
    },
    

    methods:{
        async guardar(){
            var datos ={
                "articulo":this.articulo,
                "marca":this.marca,
                "sexo":this.sexo,
                "color":this.color,
                "talla":this.talla,
                "precio":this.precio
               
            }
            var reponse = await fetch("http://127.0.0.1:8000/api/tienda/guardar",{
                "method":"POST",
                headers:{
                    'Content-Type':'application/json'
                },
                body: JSON.stringify(datos)
                
            });
            console.log(reponse)
        }

    }
})
</script>
