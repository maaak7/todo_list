<template>
    <div>
        <main-header></main-header>
        <main role="main" class="v-app">
            <router-view></router-view>
        </main>
        <bootstrap-toast/>
    </div>
</template>

<script>
    import BootstrapToast from "./components/Toast"
    import MainHeader from "./components/Frame/Header"

    export default {
        components: {
            BootstrapToast,
            MainHeader,
        },
    };
</script>

<style>
    .container.fluid{
        padding: 0;
    }
</style>
