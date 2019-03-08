<template>
        <div v-if="status"  class="alert alert-danger" role="alert">
            <p>{{ message }}</p>
        </div>

</template>

<script>
    export default {
        props: [
            'status', 'message'
        ],
    }
</script>
