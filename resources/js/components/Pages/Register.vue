<template>
    <div id="app">
        <div class="main-wrapper">
            <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
                style="background:url('css/assets/images/big/auth-bg.jpg') no-repeat center center;">
                <div class="auth-box row">
                    <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url('css/assets/images/big/3.jpg');">
                    </div>
                    <div class="col-lg-5 col-md-7 bg-white">
                        <div class="p-3">
                            <div class="text-center">
                                <img src='css/assets/images/big/icon.png' alt="wrapkit">
                            </div>
                            <h2 class="mt-3 text-center">Sign Up for Free</h2>
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
                    </div>
                </div>
            </div>
        </div>
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
        async handleSubmit(e) {
            e.preventDefault();
               axios.post('api/v1/auth/register', {
                            name: this.name,
                            email: this.email,
                            password: this.password,
                          })
                          .then(response => {
                              if (response.data){
                                    localStorage.setItem('user',response.data.data.user.name)
                                    localStorage.setItem('jwt',response.data.data.access_token)

                                    if (localStorage.getItem('jwt') != null){
                                        this.$router.push("/dashboard");
                                    }
                              }else {
                                  console.log(response);

                              }


                          })
                          .catch(error => {
                            console.error(error);
                          });
                }
            }
}

</script>

