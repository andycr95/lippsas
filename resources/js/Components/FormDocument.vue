<template>
    <div class="tracking-number-search">
        <pulse-loader style="position: absolute;z-index: 1;top: 50%;left: 40%;" :loading="loading_submit" :size="50"></pulse-loader>
        <div v-if="loading_submit" class="overlay"></div>
        <strong>NIT :</strong>
        <input type="text" v-model="nit" placeholder="Nit">
        <button @click="submit">Consultar</button>
        <p style="margin-left: auto;">Ingresa tu numero de nit para poder consultar tus documentos.</p>
        <div class="level-bar"></div>
        <div class="tracking-text">
            <div v-for="document in documents" :key="document.id">
                <div class="date">
                    <strong>Nombre de documento :</strong>
                    <span>{{document.name}}</span>
                </div><a type="button" :href="'/api/documents/download/'+document.id"  target="_blank">Ver archivo</a>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    import { ref } from 'vue';
    import PulseLoader from 'vue-spinner/src/PulseLoader.vue';
    export default {
    setup() {
        let nit = ref('');
        let documents = ref([]);
        let loading_submit = ref(false);
        return {
            nit,
            documents,
            loading_submit
        };
    },
    components: {
        PulseLoader
    },
    methods: {
        submit() {
            const errors = [];
            if (this.nit == '') {
                errors.push(key);
            }
            if(errors.length == 0) {
                this.loading_submit = true;
                axios.get('/api/documents/'+this.nit).then(response => {
                    this.documents = response.data.documents;
                    this.loading_submit = false;
                });
            } else {
                alert('Debe llenar todos los campos');
            }
        },
    },
    };
</script>
