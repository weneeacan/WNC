<template>
    <div id="Navbar" class="Navbar">
        <div class="row">
            <nav class="navbar navbar-dark bg-dark col-12">
                <div class="container d-flex justify-content-start">
                    <div class="me-auto">
                        <a class="navbar-brand" href="#">
                            <i class="fas fa-people-arrows" style="font-size: 40px;"></i>
                            <span class="fs-2 ml-3">{{title}}</span>
                        </a>
                    </div>
                    <div class="d-flex align-items-center">
                        <a href="#" class="text-light" style="text-decoration:none;"><i class="fas fa-home "
                                style="font-size: 35px;"></i><span class="fs-2 text-light ml-2">回首頁</span>
                        </a>
                        <div class="btn-group ml-3">
                            <button class="btn btn-dark btn-lg" data-bs-toggle="dropdown" type="button">
                                <i class="fas fa-language" style="font-size: 35px;"></i>
                                <span class="fs-2 text-light ml-2">繁體中文</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#" class="dropdown-item">繁體中文</a></li>
                                <li><a href="#" class="dropdown-item">English</a></li>
                                <!-- 如何做到切換語言 但路徑還是同一頁? -->
                                <!-- 點下去之後，在home的頁面 切換全部component -->
                                <!-- 中文? 中文component : 英文component -->
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

        </div>
    </div>
</template>
<script>
    export default {
        name: "Navbar",
        props: {
            title: String
        },
        data() {
            return {

            }
        },

    }
</script>
<style>
    .Navbar {
        position: sticky;
        top: 0;
        z-index: 99;
    }
</style>