<template>
    <div id="app">


                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>

                                        </tbody>
                                    </table>



    </div>
</template>

<script>
    export default {
           data(){
        return {
            users: [],
            user: {
                id: "",
                name: "",
                email: ""
            }

        }

    },
    created(){
        this.fetchUsers();
    },
    methods: {
        fetchUsers(){
            fetch('api/v1/allProfile')
            .then(res => res.json())
            .then(res => {
                console.log(res.data);
            })
        }
    }
    }
</script>
