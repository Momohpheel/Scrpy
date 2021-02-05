<template>
    <div id="app">
        <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
            <header class="topbar" data-navbarbg="skin6">
                <nav class="navbar top-navbar navbar-expand-md">
                    <div class="navbar-header" data-logobg="skin6">
                        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                        <div class="navbar-brand">
                            <a href="index.html">
                                <b class="logo-icon">
                                    <!-- Dark Logo icon -->
                                    <img src='css/assets/images/logo-icon.png' alt="homepage" class="dark-logo" />
                                    <!-- Light Logo icon -->
                                    <img src='css/assets/images/logo-icon.png' alt="homepage" class="light-logo" />
                                </b>
                                <span class="logo-text">
                                    <!-- dark Logo text -->
                                    <img src='css/assets/images/logo-text.png' alt="homepage" class="dark-logo" />
                                    <!-- Light Logo text -->
                                    <img src='css/assets/images/light-text.png' class="light-logo" alt="homepage" />
                                </span>
                            </a>
                        </div>
                        <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                    </div>

                    <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                        <!-- Notification -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle pl-md-3 position-relative" href="javascript:void(0)"
                                id="bell" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span><i data-feather="bell" class="svg-icon"></i></span>
                                <span class="badge badge-primary notify-no rounded-circle"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown">

                            </div>
                        </li>
                        <!-- End Notification -->
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="settings" class="svg-icon"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            </div>
                        </li>
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link" href="javascript:void(0);">
                                <div class="customize-input">
                                    <select
                                        class="custom-select form-control bg-white custom-radius custom-shadow border-0">
                                        <option selected>EN</option>
                                        <option value="1">AB</option>
                                        <option value="2">AK</option>
                                        <option value="3">BE</option>
                                    </select>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link" href="javascript:void(0)">
                                <form>
                                    <div class="customize-input">
                                        <input class="form-control custom-shadow custom-radius border-0 bg-white"
                                            type="search" placeholder="Search" aria-label="Search">
                                        <i class="form-control-icon" data-feather="search"></i>
                                    </div>
                                </form>
                            </a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src='css/assets/images/users/profile-pic.jpg' alt="user" class="rounded-circle"
                                    width="40">
                                <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span
                                        class="text-dark">Admin</span> <i data-feather="chevron-down"
                                        class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">

                                <a class="dropdown-item" href="javascript:void(0)" @click="logout"><i data-feather="power"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="pl-4 p-3"><a href="javascript:void(0)" class="btn btn-sm btn-info">View
                                        Profile</a></div>
                            </div>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <router-link class="sidebar-link sidebar-link" to="/dashboard"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></router-link></li>
                        <li class="list-divider"></li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">User Table</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="" class="text-muted">Home</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                                <option selected>Today's Date</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- <h4 class="card-title">User Table</h4> -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Phone Number</th>
                                                <th scope="col">e-mail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <tr v-for="user in users" v-bind:key="user.id">
                                                    <th scope="row">{{user.id}}</th>
                                                    <td>{{user.firstname}}</td>
                                                    <td>{{user.lastname}}</td>
                                                    <td>{{user.phone}}</td>
                                                    <td>{{user.user.email}}</td>
                                                    <td>
                                                        <button class="btn btn-danger" @click="deleteUser(user.user.id)"> Delete User</button>
                                                    </td>
                                                </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer text-center text-muted">
                    Admin Panel @2021
            </footer>

        </div>

    </div>

    </div>
</template>

<script>
    export default {
        data(){
            return {
                users: [],
                
        }
    },
    created(){
        this.fetchUsers();
    },
    methods: {
        fetchUsers(){
            fetch("https://scrcpybackend.herokuapp.com/api/v1/user/profiles", {
                method: "get",
                headers: {
                    "content-type": "application/json",
                    Accept: "application/json"
                }
            })
            .then(res => res.json())
            .then(res => {
                
                this.users = res.data
            })
            .catch(err => console.log(err));
        },
        deleteUser(id){
            fetch(`https://scrcpybackend.herokuapp.com/api/v1/user/delete/${id}`, {
                method: "delete",
                
            })
            .then(res => res.json())
            .then(res => {
                //console.log(res);
                this.$router.push({path: '/dashboard'})
                 Swal.fire(
                    'Successful!',
                    'User is deleted!',
                    'success'
                );
                
            })
            .catch(err => console.log(err));
        },
        logout() {
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, log me out!',
        }).then((result) => {
          if (result.isConfirmed) {
            localStorage.removeItem('user');
            Swal.fire({
              allowEnterKey: false,
              allowEscapeKey: false,
              showConfirmButton: false,
              title: 'Done!',
              text: 'You are being logged out.',
              icon: 'success',
            });

            this.$router.push({path: '/'});
          }
        });
      }
    }
    }
    
</script>
