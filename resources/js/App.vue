<template>
    <div>
        <main-header></main-header>
        <main role="main" class="v-app">
            <router-view></router-view>
        </main>
    </div>
</template>

<script>
    import MainHeader from "./components/Frame/Header"

    export default {
        components: {
            MainHeader,
        },

        mounted() {
            console.log('hello');
        },
    };
</script>

<!--<style src="../css/vuetify.min.css"></style>-->

<style>
    .container.fluid{
        padding: 0;
    }
</style>
