import './bootstrap'
import { createApp } from 'vue'
import HelloWorld from '@/components/HelloWorld.vue'
import FormBookingAdmin from '@/components/FormBookingAdmin.vue'
import FormDocument from '@/components/FormDocument.vue'

window.app = createApp({
    setup() {
        return {
            message: 'Welcome to Your Vue.js App',
        };
    },
    components: {
        HelloWorld,
        FormBookingAdmin,
        FormDocument
    },
}).mount('#app');