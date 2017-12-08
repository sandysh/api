<style type="text/css" media="screen" scoped>
    .col-lg-1{
        padding-left: 0px;
        padding-right: 0px;
    }
    select{
        margin-bottom: 10px;
    }    
</style>

<template>
<div>
<div class="col-lg-1">
    <select v-model="limit" class="form-control">
      <option>10</option>
      <option>25</option>
      <option>50</option>
      <option>100</option>
      <option>500</option>
    </select>
</div>

<div class="col-lg-4 pull-right">
      <input v-model="searchText" type="text" class="form-control" aria-label="..." placeholder="search here">
  </div><!-- /.col-lg-6 -->
  
    <table class="table table-bordered">
        <thead>
            <tr>
                <th v-for="field in fields">{{field}}</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="user in users">
                <td>{{user.company_id}}</td>
                <td>{{user.insurance_type}}</td>
                <td>{{user.gender}}</td>
                <td>{{user.firstName}}</td>
                <td>{{user.lastName}}</td>
                <td>{{user.citizenshipNo}}</td>
                <td>{{user.certificateRegisteredDate}}</td>
                <td>{{user.certificateNo}}</td>
            </tr>
        </tbody>
    </table>
    <vue-pagination  v-bind:pagination="pagination"
                     v-on:click.native="getUsers(pagination.current_page)"
                     :offset="4">
    </vue-pagination>
</div>
 </template>
<script>
    export default{
        name: "User-Module",
        data() {
            return {
                users: [],
                searchText: null,
                limit: 10,
                pagination:this.$root.pagination,
                // fields: ['name','email','status','login-count'],
                fields: ['company_id','insurance_type','gender','firstName','lastName','citizenshipNo','certificateRegisteredDate','certificateNo'],
                columns: [],
                MAIN_API: '/get-individuals/',
                SEARCH_API: '/search-individuals/',
            }
        },
        mounted : function() {
               this.getUsers(this.$root.pagination.current_page);
           },
           watch: {
             searchText: function (newText) {
                $.ajax({
                    url: this.SEARCH_API+this.searchText+'?page='+this.$root.pagination.current_page,
                    method: "GET",
                    success: (response) => {
                       this.users = response.data;
                       this.pagination = response;
                       console.log(response);
                    }
                });             
            },
                limit: function (newText) {
                   $.ajax({
                       url: this.MAIN_API+'?page='+this.$root.pagination.current_page,
                       data: {limit: this.limit},
                       success: (response) => {
                          this.users = response.data;
                          this.pagination = response;
                          console.log(response);
                       }
                   });             
               },
           },
         methods: {
               getUsers(page) {
                   var _this = this;
                   $.ajax({
                       url: _this.MAIN_API+'?page='+page,
                       data: {limit: this.limit},
                       success: (response) => {
                          _this.users = response.data;
                          _this.pagination = response;
                       }
                   });
               },
           },
    }
</script>
