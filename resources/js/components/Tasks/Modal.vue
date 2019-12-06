<template>
    <div class="modal fade" id="createTaskModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create new task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input v-model="taskName" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Categories</label>

                        <select class="custom-select" multiple>
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-success"
                        data-dismiss="modal"
                        @click="createTask">
                        Create
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                taskName: ''
            }
        },

        methods: {
            createTask() {
                console.log('ill create task');

                /*this.$store.dispatch('categoriesStore/CREATE', {
                    name: this.taskName,
                    callback: this.afterCreate,
                });*/
            },

            afterCreate(response) {
                console.log('afterCreate');
                // this.$store.commit('toastsStore/SET_TOAST', response.message);
            }
        }
    }
</script>
