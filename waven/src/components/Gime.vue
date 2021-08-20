<template>
    <!-- 表單設計 -->
    <div class="frame">

        <div class="d-felx text-center text-dark fs-1 my-2">
            <i class="fas fa-hand-holding-heart"></i> <span class="ml-2">謝謝你的個資</span>
        </div>
        <hr />
        <div class="d-felx text-center text-secondary fs-4 mt-3">
            <i class="fas fa-heart me-2"></i>再次感謝<i class="fas fa-heart ms-2"></i>
        </div>
        <div class="d-flex">

            <div class="Form-AreaL container d-flex">
                <div class="" style="margin-left: 50%;">
                    <div class="form-floating mt-3">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">姓名</label>
                    </div>
                    <div class=" mt-3 ">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option value="1">男生</option>
                                <option value="2">女生</option>
                                <option value="3" selected>以上皆非</option>
                            </select>
                            <label for="floatingSelect">性別</label>
                        </div>
                    </div>
                    <div class="mt-3">
                        <form class="form-floating">
                            <input type="email" class="form-control" id="floatingInputValue"
                                placeholder="XXXXX@gmail.com" value="@gmail.com">
                            <label for="floatingInputValue">信箱</label>
                        </form>
                    </div>
                    <div class="d-flex mt-3">
                        <select class="form-select">
                            <option value="1" selected>公立</option>
                            <option value="2">私立</option>
                        </select>
                        <select class="form-select ml-3">
                            <option selected>野雞大學</option>
                            <option value="1">a</option>
                            <option value="2">b</option>
                            <option value="3">c</option>
                        </select>
                    </div>
                    <div>
                        <input type="date" min="1900-01-01" max="2021-01-01" required="required" />
                    </div>
                    <div class="mt-3 mb-3">

                        <label for="formFileLg" class="form-label fs-3">選一個你喜歡的圖片<i class="fas fa-image"></i></label>
                        <input class="form-control form-control-lg" type="file" ref="uploadImag"
                            accept="image/gif, image/jpeg, image/png" @change="previewImg">

                    </div>
                </div>
                <!--左邊的內層-->
            </div>
            <!--end of form area left-->
            <div class="Form-AreaR container">
                <!-- 圖片預覽 -->
                <img :src="preview" class="mt-3" style="width: 75%;">
            </div>
            <!--end of form area right-->

        </div>
        <!--end of Form-Area 外層-->
        <div class="thelast mt-4">
            <div class="d-flex flex-column align-items-center">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label fs-4" for="flexCheckChecked">
                        我已閱讀那個什麼規則的 隨便
                    </label>
                </div>
                <button type="button" class="btn btn-success btn-lg mt-2" @click="submit">送出</button>

            </div>

        </div>
    </div>
    <!--end of frame-->
</template>
<script>
    export default {
        data() {
            return {
                preview: ""
            }
        },
        methods: {
            submit() {
                alert("submit!")
            },
            previewImg() {
                let input = event.target;
                console.log(input.files)
                if (input.files) {
                    let reader = new FileReader();
                    reader.onload = (e) => {
                        console.log(e.target.result)
                        this.preview = e.target.result;
                    }

                    this.image = input.files[0];//base64
                    reader.readAsDataURL(input.files[0]);//轉成圖片(readAsDataURL)
                }
            }
        },

    }

</script>
<style>
    .frame {
        position: relative;
        width: 90%;
        /* margin-left: 5%; */
        background: rgb(36, 182, 85);
        height: auto;
    }

    .Form-AreaL {
        height: auto;
        background: rgb(245, 194, 194);
    }

    .Form-AreaR {
        background: rgb(228, 23, 23);
        height: auto;
    }

    .thelast {
        background: rgb(97, 79, 199);
        width: auto;
        height: 100px;
    }
</style>