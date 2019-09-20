<template>
  <div id="app">
<template>
    <el-table
    :data="data.filter(data => !search || data.title.toLowerCase().includes(search.toLowerCase()))"
      style="width: 100%">
      <el-table-column
        prop="id"
        label="#"
        width="180">
      </el-table-column>
      <el-table-column
        prop="title"
        label="Title"
        width="180">
      </el-table-column>
      <el-table-column
        prop="body"
        label="Message">
      </el-table-column>
            <el-table-column
        prop="created_at"
        label="Date">
      </el-table-column>
      <el-table-column
      align="right">
      <template slot="header" slot-scope="scope">
        <el-input
          v-model="search"
          size="mini"
          placeholder="Type to search"/>
      </template>
    </el-table-column>
    </el-table>
  </template>
    <!-- <el-dialog :visible.sync="visible" title="Hello world">
      <p>You Should Try Element (This is in /resources/js/App.vue)</p>
    </el-dialog> -->
  </div>
</template>
<script>
import axios from "axios";

  export default {
    name: 'test',
    props: ['datatable'],
    data(){
        return{
            data: [],
            search: '',

        }
    },
    mounted(){
     axios
        .get("http://127.0.0.1:8000/data")
        .then(response => {
          this.data = response.data
          console.log(this.data)
        })
        .catch(error => console.log(error));
},
    // data () {
    //   return {
    //     visible: false,
    //   }
    // },

  };
</script>
<style scoped>
  /* Add scoped styles */
  #app {
    padding: 20px;
  }
</style>
