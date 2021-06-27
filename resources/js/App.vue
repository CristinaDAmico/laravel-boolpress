<template>
    <div>
        <Header />

        <main>
            <div class="container">
                <h1>Blog</h1>
            </div> 
        </main>
    </div>
</template>

<script>
import Header from "./components/Header.vue";

export default {
    name: 'App',
    components: {
        Header
    }
}
</script>

<style lang="scss">
@import '../sass/frontoffice/_utilities.scss';

body {
    font-family: sans-serif;
}

</style>