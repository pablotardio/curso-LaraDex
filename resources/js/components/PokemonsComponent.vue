<template>
    <div class="row" >

        <div class="col-sm" v-for="pokemon in pokemons">
            
            <div class="card text-center" style="width: 18rem;">
                <img style="margin-top: 70px ;height: 100px ; width: 100px ; background-color: #EFEFEF ;margin: 20px;" class="card-img-top rounded-circle  mx-auto d-block" src="/images/" alt="">
                    <div class="card-body">
                  
                        <h5 class="card-title"> {{pokemon.name}}</h5>
                        <p class="card-text">textopokeeemon</p>
                          <a href="/trainers/" class="btn btn-primary">Ver Mas</a>
                    
                         </div>
             </div> 
         </div>
   

</div>
</template>
<script>

export default {
    data(){
        return {
            pokemons : [ 
                {id: 1, name: "Pikachu"},
                {id: 2, name: "Squirtle"},
                {id: 3, name: "Charizard"}
            ]
        }
    },
      mounted() {
            console.log('Component Pokemon mounted.')
      }
}
</script>