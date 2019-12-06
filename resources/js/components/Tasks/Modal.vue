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

                        <select v-model="chosenCategories" class="custom-select" multiple>
                            <option v-for="item in categories" :value="item.id">
                                {{ item.name }}
                            </option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-success"
                        @click="createTask">
                        Create
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex';

    export default {
        data() {
            return {
                taskName: '',
                chosenCategories: []
            }
        },

        created() {
            this.$store.dispatch('categoriesStore/GET');
        },

        computed: {
            ...mapGetters({categories: 'categoriesStore/CATEGORIES'}),
        },

        watch: {
            categories: {
                handler(data) {
                    console.log('categories watcher');
                    console.log(data);
                },
                deep: true
            }
        },

        methods: {
            createTask() {
                console.log('ill create task');
                let data = this.getTaskData();

                this.$store.dispatch('tasksStore/CREATE', {
                    data: data,
                    callback: this.afterCreate,
                });
            },

            getTaskData() {
                return {
                    name: this.taskName,
                    categories: this.chosenCategories
                }
            },

            afterCreate(response) {
                console.log('afterCreate');
                // this.$store.commit('toastsStore/SET_TOAST', response.message);
            }
        }
    }
</script>
