<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Test Component</div>

                    <div class="card-body">
                        <router-link to="/">Test Page</router-link>
                        <router-link to="/registration">Registration Page</router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() { 
            console.log('Test Component mounted.') 

            //alert(this.$router.currentRoute);
        }
    }
</script>
