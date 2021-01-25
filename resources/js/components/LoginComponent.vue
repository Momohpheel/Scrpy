<template>
    <div id="app">
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
