<template>
    <div class="container" style="margin-top: 50px; margin-bottom: 200px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1>About Dummy page</h1>
                    </div>

                    <div class="card-body">
                        <router-link to="/">-------------</router-link>
                        <router-link to="/privacy">-----------------</router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() { 
            console.log('About component mounted.') 

            //alert(this.$router.currentRoute);
        }
    }
</script>
