<template>
    <div id="remove">
        <common-header/>
        <main role="main" class="container">
            <router-view/>
        </main>
        <common-footer/>
    </div>
</template>

<script>

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
    
    .container {
        padding: 60px 15px 0;
    }
</style>
