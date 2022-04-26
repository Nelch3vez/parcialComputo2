<template>
    <div>
        <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        </head> 
        <H1>Lista de Articulos Tienda</H1>
        <!--button @click="get_alimentos()">actualizar</button-->
        <div>

            <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Articulo</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Color</th>
                    <th scope="col">Talla</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item,) in tienda" v-bind:key="">
                    
                    <th scope="col">{{item.id}}</th>
                    <th scope="col">{{item.articulo}}</th>
                    <th scope="col">{{item.marca}}</th>
                    <th scope="col">{{item.sexo}}</th>
                    <th scope="col">{{item.color}}</th>
                    <th scope="col">{{item.talla}}</th>
                    <th scope="col">{{precio}}</th>
                    <th scope="col"><button @click="Edit(item.id)" type="button" class="btn btn-success">Edit</button></th>
                    <th scope="col"><button @click="Delete(item.id)" type="button" class="btn btn-danger">Delete</button></th>

                </tr>
            </tbody>
            </table>
         
        </div>

    </div>
    
</template>

<script>



export default ({

    data(){
        return{
            contador:0,
            tienda:null,
            size: 0
        }
    },
    mounted(){
        this.get_tienda()
    },

    methods:{

        async get_tienda(){
            var reponse = await fetch("http://127.0.0.1:8000/api/tienda");
            var datos = await reponse.json();
            this.tienda = datos.data

            console.log(this.tienda)
        },
        async delete(id){
            console.log(id)
            
            var reponse = await fetch("http://127.0.0.1:8000/api/tienda/"+id,{
                "method":"DELETE"
            });
            console.log(reponse)
            this.get_tienda()
            
        },
        editar(id_){

            console.log("funciona")
            this.$router.push({path:"/edit", query:{id:id_}})
        }
        

        
    }
})
</script>
