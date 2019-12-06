<template>
    <div>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a class="navbar-brand" href="javascript:void(0);" @click="goTo('home')">TODO List</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                    aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item" :class="$route.name === 'home' ? 'active' : ''">
                        <a class="nav-link" href="javascript:void(0);" @click="goTo('home')">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" :class="$route.name === 'tasks' ? 'active' : ''">
                        <a class="nav-link" href="javascript:void(0);" @click="goTo('tasks')">My tasks</a>
                    </li>
                </ul>
                <button type="button"
                        class="btn btn-warning"
                        data-toggle="modal"
                        data-target="#createCategoryModal">
                    New category
                </button>
            </div>
        </nav>

        <new-category-modal/>
    </div>
</template>

<script>
    import NewCategoryModal from '../Categories/Modal'

    export default {
        components: {
            NewCategoryModal,
        },

        methods: {
            goTo(path) {
                if (this.$route.name !== path) {
                    this.$router.push({name: path})
                }
            }
        }
    }
</script>
