<template>
    <div id="Footer" class="footer container-fluid">
        <div class="copyright">
            <div class="d-flex flex-column align-items-start text-light ">
                <div class="mt-1">
                    GIVEME-19 個資提供問題：如有提供資料疑義，請不要懷疑。
                </div>
                <div class="mt-1">
                    GIVEME-19 免費給我個人資料平台提供原則與操作問題：沒有客服專線。
                </div>
                <div class="mt-1">
                    weneeacan製作，更新日期： 110 年 8 月 17 日
                </div>
                <div class="mt-1">
                    建議使用 Chrome、Edge、Safari、Firefox 以上版本之瀏覽器，螢幕解析度 1280 X 800 以上瀏覽
                </div>
                <div class="mt-1 mb-1">
                    Copyright © 2021 <a href="https://github.com/weneeacan">weneeacan</a>
                </div>
            </div>

        </div>
    </div>
</template>
<script>
    export default {
        name: "Footer",
        data() {
            return {

            }
        },

    }
</script>
<style scoped>
    .footer {
        width: 100%;
        height: auto;
        background: rgb(0, 0, 0);
        position: absolute;
        bottom: 0%;
    }

    .copyright {
        position: relative;
        left: 25%;
    }
</style>