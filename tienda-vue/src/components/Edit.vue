<template>
    <div>
        <h1>MODIFICACION DE LOS ARTICULOS EN VENTA{{id_}}</h1>
        <div class="nav justify-content-center">
        <div>
        <tr >
            <td>
                <h3>Articulo</h3>
            </td>
            <td>
                <input type = "text" v-model="articulo"/>
            </td>
        </tr>
        
        <tr >
            <td>
                <h3>Marca</h3>
            </td>
            <td>
                <input type = "text" v-model="marca"/>
            </td>
        </tr>
        

        <tr >
            <td>
                <h3>Sexo</h3>
            </td>
            <td>
                <input type = "text" v-model="sexo"/>
            </td>
        </tr>

       <tr >
            <td>
                <h3>Color</h3>
            </td>
            <td>
                <input type = "text" v-model="color"/>
            </td>
        </tr>

        <tr >
            <td>
                <h3>Talla</h3>
            </td>
            <td>
                <input type = "text" v-model="talla"/>
            </td>
        </tr>

        <tr >
            <td>
                <h3>Precio</h3>
            </td>
            <td>
                <input type = "text" v-model="Precio"/>
            </td>
        </tr>
        </div>
        </div>

        <br>
        <button @click="refresh" class="btn btn-success">Guardar</button>

    </div>
</template>

<script>

export default({
  data(){
        return{
            id_:this.$route.query.id,
            articulo:"",
            marca:"",
            sexo:"",
            color:"",
            talla:"",
            precio:""

        }
    },
    mounted(){
        this.get_tienda()
    },
    methods:{
        async get_tienda(){
            var reponse = await fetch("http://127.0.0.1:8000/api/tienda/"+this.id_);
            var datos = await reponse.json();
            var r = datos.data
            this.articulo = r.articulo
            this.marca = r.marca
            this.sexo = r.sexo
            this.color = r.color
            this.talla = r.talla
            this.precio = r.precio
        },
        async refresh(){
            var datos ={
                "articulo":this.articulo,
                "marca":this.marca,
                "sexo":this.sexo,
                "color":this.color,
                "talla":this.talla,
                "precio":this.precio
               
            }
            var reponse = await fetch("http://127.0.0.1:8000/api/tienda/"+this.id_,{
                "method":"PUT",
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
