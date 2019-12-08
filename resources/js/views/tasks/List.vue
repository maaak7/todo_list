<template>
    <div class="list-group">
        <div v-for="task in tasks" class="list-group-item">
            <div>
                <input @change="taskStatusChange($event, task)" :checked="task.done" class="form-check-input position-static task-done" type="checkbox" value="option1">
                <span class="task-name">{{ task.name }}</span>
                <small class="task-date">{{ task.created_at }}</small>
            </div>
            <span v-for="category in task.categories" class="badge badge-secondary category-badge">{{ category.name }}</span>
        </div>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex';

    export default {
        created() {
            this.$store.dispatch('tasksStore/GET');
        },

        computed: {
            ...mapGetters({tasks: 'tasksStore/TASKS'}),
        },

        methods: {
            taskStatusChange(event, task) {
                this.$store.dispatch('tasksStore/CHANGE_STATUS', {
                    taskID: task.id,
                });
            }
        }
    }
</script>

<style>
    .list-group {
        width: 400px;
        margin: auto;
    }

    .task-done {
        margin-left: 0;
    }

    .task-name {
        margin-left: 15px;
    }

    .task-date {
        float: right;
    }

    .category-badge {
        margin-right: 5px;
    }
</style>
