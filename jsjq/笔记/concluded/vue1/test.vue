<script src="https://unpkg.com/vue"></script>
<div id="app-vue" >
    <p v-for="(value,key) in my">{{key}} : {{value}}</p>
</div>
<script type="text/javascript">
    var myApp = new Vue({
        el:'#app-vue',
        data:{
            my:{
                name:'a',
                age:18,
                sex:'boy'
            }
        }
    })
</script>