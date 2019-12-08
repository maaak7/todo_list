<template>
    <div class="modal fade" id="createCategoryModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create new category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="categoryName">Name</label>
                        <input v-model="categoryName" type="text" class="form-control" id="categoryName">
                    </div>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-success"
                        data-dismiss="modal"
                        @click="createCategory">
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
                categoryName: ''
            }
        },

        methods: {
            createCategory() {
                this.$store.dispatch('categoriesStore/CREATE', {
                    name: this.categoryName,
                    callback: this.afterCreate,
                });
            },

            afterCreate(response) {
                this.$store.commit('toastsStore/SET_TOAST', response.message);
            }
        }
    }
</script>
