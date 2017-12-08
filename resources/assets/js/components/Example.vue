<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an example component! {{msg}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Example',
        data(){
            return{
                msg: 'I am example 1',
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
