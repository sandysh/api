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
        <select @change="getTotal()" id="total_records" class="form-control">
          <option>10</option>
          <option>25</option>
          <option>50</option>
          <option>100</option>
          <option>500</option>
        </select>
    </div>

    <div class="col-lg-4 pull-right">
        <div class="input-group">
          <div class="input-group-btn">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SearchBy <span class="caret"></span></button>
            <ul class="dropdown-menu" id="searchType">
              <li><a href="#" @click.prevent="getSearchType()">Username</a></li>
              <li><a href="#" @click.prevent="getSearchType()">Type</a></li>
              <li><a href="#" @click.prevent="getSearchType()">Fullname</a></li>
              <li><a href="#" @click.prevent="getSearchType()">Designation</a></li>
              <li><a href="#" @click.prevent="getSearchType()">Status</a></li>
            </ul>
          </div><!-- /btn-group -->
          <input v-model="search" type="text" class="form-control" aria-label="...">
        </div><!-- /input-group -->
      </div><!-- /.col-lg-6 -->
</div>
</template>
<script>
    export default{
        name: 'search-and-sort',
        data(){
            return {
                search: null,
                type: null,
                total: null,
            }
        },
        methods:{
            getTotal: function()
            {
                // _this = this;
                this.total = $('#total_records').find(":selected").text();
            },
            getSearchType: function()
            {
                alert(this.val());
                // _this = this;
                // this.type = $('#searchType').find(":selected").text();
            }

        }
    }
</script>