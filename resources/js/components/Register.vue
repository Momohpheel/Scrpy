<template>
    <div id="app">
        <h2 class="mt-3 text-center">Sign Up for Feree</h2>
                        <form class="mt-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="your name" v-model="name">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="email" placeholder="email address" v-model="email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="password" placeholder="password" v-model="password">
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-block btn-dark" @click="handleSubmit">Sign Up</button>
                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                    Already have an account? <a href="#" class="text-danger">Sign In</a>
                                </div>
                            </div>
                        </form>
    </div>
</template>

<script>
export default {
    data(){
        return {
            name : "",
            email : "",
            password : "",

        }
    },
    created(){
        this.handleSubmit();
    },
    methods : {
        handleSubmit(e) {
            e.preventDefault()

                console.log("I'm here o")
               // axios.post('api/v1/auth/register', {
                        //     name: this.name,
                        //     email: this.email,
                        //     password: this.password,
                        //   })
                        //   .then(response => {
                        //     // localStorage.setItem('user',response.data.success.name)
                        //     // localStorage.setItem('jwt',response.data.success.token)

                        //     // if (localStorage.getItem('jwt') != null){
                        //     //     this.$router.go('/board')
                        //     // }
                        //     console.log(response);
                        //   })
                        //   .catch(error => {
                        //     console.error(error);
                        //   });
                }
            }
}

</script>

