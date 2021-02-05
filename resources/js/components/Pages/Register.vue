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
                            <h2 class="mt-3 text-center">Sign Up</h2>
                            <p class="text-center text-danger" v-if="error">{{ error }}</p>
                            <form class="mt-4" @submit.prevent="validateRegister">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="your name" v-model="auth.name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" type="email" placeholder="email address" v-model="auth.email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" type="password" placeholder="password" v-model="auth.password">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <button type="submit" class="btn btn-block btn-dark">Sign Up</button>
                                    </div>
                                    <div class="col-lg-12 text-center mt-5">
                                        Already have an account? <router-link to="/" class="text-danger">Sign In</router-link>
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
            auth: {
                _token: window.Laravel.csrfToken
            },
            error: null

        }
    },
   
    methods : {
        // validateRegister(){
        //     fetch("http://127.0.0.1:8000/api/v1/auth/register", {
        //         method: "post",
        //         body: JSON.stringify(this.auth),
        //         headers: {
        //             "content-type": "application/json",
        //             Accept: "application/json"
        //         }
        //     })
        //     .then(res => res.json())
        //     .then(res => {
        //         if(res.status){
        //             Swal.fire(
        //                 'Successful!',
        //                 res.message,
        //                 'success'
        //             );
        //             this.$router.push({path: '/dashboard'})
        //         }else{
        //             Swal.fire(
        //                 'Error!',
        //                 res.message,
        //                 'error'
        //             );
        //         }

        //     })
        //     .catch(err => console.log(err));
        // },
        validateRegister() {
        const { email, password, name } = this.auth;

        const message = !this.auth
          ? 'Fill in all the fields!'
          : !email 
          ? 'Please enter a valid email address!'
          : !password
          ? 'Please enter your password'
          : password.length < 6
          ? 'Password must have at least 6 characters'
          : '';

        if (message.length) return (this.error = message);
        this.error = null;
        this.register({ name, email, password, user: 'admin' });
      },
        async register(data) {
        try {
          const res = await axios({
            method: 'post',
            data,
            url: `https://scrcpybackend.herokuapp.com//api/v1/auth/register`,
             headers: {
                    "content-type": "application/json",
                    Accept: "application/json"
                    
                }
          });
          const { user, access_token } = res.data.data;

          localStorage.setItem(
            'user',
            JSON.stringify({ ...user, access_token })
          );

          Swal.fire(
            'Successful!',
            'You are now registered as an admin!',
            'success'
          );
          this.$router.push({path: '/dashboard'})
        } catch (error) {
          
          this.error = !error ? 'Network Error!' : 'Invalid email or password!';
        }
      }

}
}
</script>

