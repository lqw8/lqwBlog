<template xmlns="">
    <div>
        <v-pageTitle vtitle="管理员"></v-pageTitle>

        <el-row :gutter="20">
            <el-col :span="24">
                <el-card class="box-card">
                    管理员
                    <el-button class="title-button" size="small" >
                        <router-link to="/create">创建管理员</router-link>
                    </el-button>
                    <hr>
                    <el-table :data="tableData" border style="width: 100%">
                        <el-table-column label="日期" width="200">
                            <template scope="scope">
                                <el-icon name="time"></el-icon>
                                <span style="margin-left: 10px">{{ scope.row.created_at }}</span>
                            </template>
                        </el-table-column>
                        <el-table-column label="邮箱" width="180">
                            <template scope="scope">
                                <span style="margin-left: 10px">{{ scope.row.email }}</span>
                            </template>
                        </el-table-column>
                        <el-table-column label="姓名" width="180">
                            <template scope="scope">
                                <el-popover trigger="hover" placement="top">
                                    <p>姓名: {{ scope.row.name }}</p>
                                    <p>职务: {{ scope.row.job_title }}</p>
                                    <div slot="reference" class="name-wrapper">
                                        <el-tag v-if="scope.row.name">{{ scope.row.name }}</el-tag>
                                        <p v-if="!scope.row.name">/</p>

                                    </div>
                                </el-popover>
                            </template>
                        </el-table-column>
                        <el-table-column label="操作">
                            <template scope="scope">
                                <el-button size="small" @click="handleEdit(scope.$index, scope.row)">编辑</el-button>
                                <el-button size="small" type="danger" @click="handleDelete(scope.$index, scope.row)">
                                    删除
                                </el-button>
                            </template>
                        </el-table-column>
                    </el-table>
                </el-card>
            </el-col>

        </el-row>
    </div>
</template>

<script>
    import vPageTitle from '../../components/common/pageTitle.vue';
    export default {
        data(){
           return{
           tableData:[]
              //percentage:10
           }
        },
        created(){
            this.userList();
        },
        methods:{
           userList(){
              this.$http.get('users')
                    .then((res) => {
                      if(res.data && res.status ===200){
                         this.tableData = res.data.users;
                      }
                    }, (res) => {
                    alert(res.data.error);
                    })
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
    .box-card{
        font-size:12px;
    }
    .title-button{
    float:right;
    }
    .box-card hr{
        height:1px;
        border:none;
        border-top:1px  dashed #ccc;
        margin-bottom:10px;
        margin-top:20px;
    }

</style>
