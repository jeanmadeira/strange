<template>
    <div id="remove">
        <common-header/>
        <router-view/>
        <!--<common-footer/>-->
    </div>
</template>

<script>
    export default {
        updated () {
            $('#remove').contents().unwrap();
        }
    }
</script>
<style scoped>
    html {
        position: relative;
        min-height: 100%;
    }

    body {
        /* Margin bottom by footer height */
        margin-bottom: 60px;
    }

    code {
        font-size: 80%;
    }
</style>
