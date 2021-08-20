<template>
    <!-- 表單頁面 -->
    <div id="Plate" class="Plate">
        <div class="row">
            <div class="container-fluid">
                <Navbar />
                <Gime />
                <Footer></Footer>
            </div>
        </div>

    </div>
</template>
<script>
    import Footer from "@/components/Footer.vue";
    import Navbar from "@/components/Navbar.vue";
    import Gime from "@/components/Gime.vue";
    export default {
        name: "Plate",
        components: {
            Footer, Navbar, Gime
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

    .Plate {
        overflow-x: hidden;
    }
</style>