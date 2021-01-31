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
                                <h2 class="mt-3 text-center">Sign In</h2>
                            <p class="text-center">Enter your email address and password to access admin panel.</p>
                                <form class="mt-4" @submit.prevent="handleSubmit">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="text-dark" for="uname">Username</label>
                                                <input
                                                    class="form-control"
                                                    id="uname"
                                                    type="email"
                                                    placeholder="enter your e-mail address"
                                                    v-model="auth.username"
                                                />
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="text-dark" for="pwd">Password</label>
                                                <input
                                                    class="form-control"
                                                    id="pwd"
                                                    type="password"
                                                    placeholder="enter your password"
                                                    v-model="auth.password"
                                                />
                                            </div>
                                        </div>

                                        <div class="col-lg-12 text-center">
                                            <button type="submit" class="btn btn-block btn-dark" @click="handleSubmit">Sign In</button>
                                        </div>
                                        <div class="col-lg-12 text-center mt-5">
                                            Don't have an account? <router-link to="/Ubong/public/register" class="text-danger">Sign Up</router-link>
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
    data: () => ({
        auth: {},
    }),
    methods: {
        validateSubmit() {},
        async login() {

        }
    }
}
</script>
