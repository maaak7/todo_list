<template>
    <div class="tasks-page">
    <div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">TODO list</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <button type="button"
                        class="btn btn-primary"
                        data-toggle="modal"
                        data-target="#createTaskModal">
                    New task
                </button>
            </div>
        </div>
    </div>
        <new-task-modal/>
        <router-view/>
    </div>
</template>

<script>
    import NewTaskModal from '../../components/Tasks/Modal';

    export default {
        components: {
            NewTaskModal
        }
    }
</script>

<style>
    .tasks-page {
        padding: 10px 25px;
    }
</style>
