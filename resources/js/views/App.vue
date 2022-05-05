<template>
    <div class="container">
        <Modal v-if="check !== true" />
        <p v-else>Check false</p>
    </div>
</template>

<script>
import Modal from "../components/Modal.vue";
export default {
    name: "App",
    components: {
        Modal,
    },

    data() {
        return {
            check: false,
        };
    },

    mounted() {
        console.log("App mounted");
    },
};
</script>

<style></style>
