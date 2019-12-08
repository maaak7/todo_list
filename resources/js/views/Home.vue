<template>
    <div>
        <pre class="my-hello">Hello, this is my test. You can go to My tasks to see how it works :)</pre>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('home');
        }
    }
</script>

<style>
    .my-hello {
        display: flex;
        justify-content: center;
        margin-top: 100px;
    }
</style>
