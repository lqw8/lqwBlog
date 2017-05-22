<template>
    <div>
        <v-pageTitle vtitle="创建管理员"></v-pageTitle>


        <el-row :gutter="20">
            <el-col >
                <el-card class="box-card">
                    <el-form ref="form" label-width="35%">
                        <el-form-item label="姓名">
                         <el-input name="name" placeholder="请输入姓名"></el-input>
                        </el-form-item>
                        <el-form-item label="邮箱">
                            <el-input name="email" placeholder="请输入邮箱"></el-input>
                        </el-form-item>
                        <el-form-item label="密码">
                            <el-input name="password" type="password" placeholder="请输入密码"></el-input>
                        </el-form-item>
                        <el-form-item label="头像">
                        <el-upload
                                class="avatar-uploader"
                                action="https://jsonplaceholder.typicode.com/posts/"
                                :show-file-list="false"
                                :on-success="handleAvatarSuccess"
                                :before-upload="beforeAvatarUpload">
                            <img v-if="imageUrl" :src="imageUrl" class="avatar">
                            <i v-else class="el-icon-plus avatar-uploader-icon"></i>
                        </el-upload>
                        </el-form-item>
                        <el-form-item>
                            <el-button>取消</el-button>
                            <el-button  >立即创建</el-button>
                        </el-form-item>
                    </el-form>
                </el-card>
            </el-col>
        </el-row>


    </div>
</template>
<script>
 import vPageTitle from '../../components/common/pageTitle.vue';
    export default{
        data(){
            return{
               imageUrl:''

            }
        },
         created(){

        },
        methods: {
            handleAvatarSuccess(res, file) {
                this.imageUrl = URL.createObjectURL(file.raw);
                console.log(1111, 'imageUrl');
            },
            beforeAvatarUpload(file) {
                const isJPG = file.type === 'image/jpeg';
                const isLt2M = file.size / 1024 / 1024 < 2;
                if (!isJPG) {
                  this.$message.error('上传头像图片只能是 JPG 格式!');
                }
                if (!isLt2M) {
                  this.$message.error('上传头像图片大小不能超过 2MB!');
                }
                return isJPG && isLt2M;
            }
        },
        components:{
           vPageTitle
        }
    }
</script>
<style scoped>
    .el-col{
        margin-bottom:16px;
    }
    .material-icons{
        font-size:80px;
        color:#ddd;
    }

    .cart-string{
        height:100px;
        padding-top:10px;
        font-size:1.1rem;

    }
    .box-card{
        font-size:12px;
        line-height:26px;
    }
    .box-card hr{
        height:1px;
        border:none;
        border-top:1px  dashed #ccc;
        margin-bottom:10px;
    }
    .el-input {
        width: 350px;
     }
     .el-el-form-item{
        text-align:center
     }

    .avatar-uploader .el-upload {
    border: 1px dashed #d9d9d9;
    border-radius: 6px;
    cursor: pointer;
    position: relative;
    overflow: hidden;
  }
  .avatar-uploader .el-upload:hover {
    border-color: #20a0ff;
  }
  .avatar-uploader-icon {
    font-size: 28px;
    color: #8c939d;
    width: 178px;
    height: 178px;
    line-height: 178px;
    text-align: center;
  }
  .avatar {
    width: 178px;
    height: 178px;
    display: block;
  }



</style>
