<template>
    <!-- 表單頁面 -->
    <div id="Serme" class="Serme">
        <div class="row">
            <div class="container-fluid">
                <Navbar />

                <!--0000000000000000000000000000000000-->
                <input type='button' value='Fetch all records' id='but_fetchall' @click="Search()">

                <!-- Table -->
                <table class="border" id='userTable' style='border-collapse: collapse;'>
                    <thead>
                        <tr>
                            <th>Number</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                </table>
                <!--0000000000000000000000000000000000-->

                <div style="margin-left: 10%;">

                </div>
                <Footer></Footer>
            </div>
        </div>

    </div>
</template>
<script>
    import Footer from "@/components/Footer.vue";
    import Navbar from "@/components/Navbar.vue";

    export default {
        name: "Serme",
        components: {
            Footer, Navbar
        },
        data() {
            return {};
        },
    };
</script>
<style scoped>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
</style>