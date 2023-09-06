<template>
    <div>
        <pulse-loader style="position: absolute;z-index: 1;top: 400px;left: 150px;" :loading="loading_submit" size="50"></pulse-loader>
        <div v-if="loading_submit" class="overlay"></div>
        <div class="row">
            <div class="col-xl-12 col-md-12 col-sm-12">
                <div class="form-group mb_20" v-if="clients.length > 0">
                    <label>Cliente:</label>
                    <select class="select-form-control" v-model="booking.client_id">
                        <option value="0">Seleccione un cliente</option>
                        <option v-for="client in clients" :key="client.id" :value="client.id">{{ client.name }}</option>
                    </select>
                </div>
            </div>
            <div class="col-xl-12 col-md-12 col-sm-12">
                <div class="form-group mb_30">
                    <label>Placa de vehiculo:</label>
                    <i style="bottom: 20px;left: 10px;" class="flaticon-freight"></i>
                    <input style="padding-left: 30px;" type="email" v-model="booking.plate" placeholder="ABC-323">
                </div>
            </div>
            <div class="col-xl-12 col-md-12 col-sm-12">
                <div class="form-group mb_20" v-if="type_bookings.length > 0">
                    <label>Tipo de cita:</label>
                    <select v-model="booking.type" @change="getDate" class="select-form-control">
                        <option value="0">Seleccione un tipo de cita</option>
                        <option v-for="type_booking in type_bookings" :key="type_booking.id" :value="type_booking.id">{{ type_booking.name }}</option>
                    </select>
                </div>
            </div>
            <div class="col-xl-12 col-md-12 col-sm-12" v-if="booking.type != null && booking.type > '0'">
                <div class="form-group mb_30">
                    <label>Fecha:</label>
                    <i style="bottom: 20px;left: 10px;" class="flaticon-freight"></i>
                    <input style="padding-left: 30px;" type="date" v-model="booking.date" @change="getAllHours" id="datePickerId">
                </div>
            </div>
            <pulse-loader class="col-xl-12 col-md-12 col-sm-12  mb_30" :loading="loading" size="30"></pulse-loader>
            <div class="col-xl-12 col-md-12 col-sm-12  mb_30" v-if="hours.length != 0 && !loading">
                <div class="form-group mb_30">
                    <label>Seleccione un hora:</label>
                    <div class="row">
                        <div class="col-xl-4 col-md-3 col-sm-4 mb_10" v-for="hour in hours" :key="hour.id">
                            <button :class="{ active : hour.selected, disabled : hour.disabled }" type="button" class="button-style-three" style="width: 150px;padding: 10px;" @click="selectHour(hour)">
                                {{ hour.hour }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-md-12 col-sm-12">
                <div class="form-group mb_30">
                    <label>Observación:</label>
                    <i style="bottom: 20px;left: 10px;" class="flaticon-freight"></i>
                    <textarea style="padding-left: 30px;" maxlength="100" v-model="booking.description"></textarea>
                    <span style="float: right;color: white;">{{booking.description.length}}/100</span>
                </div>
            </div>
            <div class="col-xl-12 col-md-12 col-sm-12">
                <button style="padding-left: 40;" class="button-style-three" @click="submit()">Agendar</button>
            </div>
            <div class="success_message mt_20" v-if="showMessages">
                <div class="alert alert-success" role="alert">
                    <strong>Exito!</strong> Su cita ha sido agendada.
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
    .active {
        background-color: green;
        border-color: green;
    }
    .disabled {
        background-color: gray;
        border-color: gray;
    }
    .overlay{
        width: 100%;
        height: 100%;
        position: absolute;
        background-color: gray;
        top: 0;
        left: 0;
        z-index: 2;
        opacity: .4;
    }
</style>
	
<script>
    import axios from 'axios';
    import { onBeforeMount } from 'vue';
    import { ref } from 'vue';
    import PulseLoader from 'vue-spinner/src/PulseLoader.vue';
    export default {
    setup() {
        let hours = ref([]);
        let booking = ref({
            date: '',
            hour_id: '',
            client_id: '',
            description: '',
            plate: '',
            type: null
        });
        let type_bookings = ref([]);
        let clients = ref([]);
        let loading_submit = ref(false);
        let loading = ref(false);
        let showMessages = ref(false);

        onBeforeMount(() => {
            getTypes();
            getClients();
        });

        function getTypes() {
            axios.get('/api/type-booking').then(response => {
                type_bookings.value = response.data;
            });
        }

        function getClients(){
            axios.get('/api/clients').then(response => {
                clients.value = response.data;
            });
        }

        return {
            hours,
            booking,
            loading,
            clients,
            type_bookings,
            loading_submit,
            showMessages
        };
    },
    components: {
        PulseLoader
    },
    methods: {
        async getAllHours() {
            this.loading = true;
            let today = new Date();
            let hour = today.getHours();
            if (hour < 10) {
                hour = '0' + hour;
            }
            let minutes = today.getMinutes();
            if (minutes < 10) {
                minutes = '0' + minutes;
            }
            let seconds = today.getSeconds();
            if (seconds < 10) {
                seconds = '0' + seconds;
            }
            let day = today.getDate();
            if (day < 10) {
                day = '0' + day;
            }
            let month = today.getMonth() + 1; //January is 0!
            if (month < 10) {
                month = '0' + month;
            }
            let year = today.getFullYear();
            today = year + '-' + month + '-' + day;
            let time = hour + ":" + minutes + ":" + seconds;
            await axios.get('/api/hours/withBookingsOfTheDay?date='+this.booking.date+'&type='+this.booking.type).then(response => {
                this.hours = response.data;
                for (let i = 0; i < this.hours.length; i++) {
                    const e = this.hours[i];
                    console.log(e);
                    if (e.bookings.length > 0 || (today == this.booking.date && e.hour < time)) {
                        this.hours[i].disabled = true;
                    } else {
                        this.hours[i].disabled = false;
                    }
                }
                this.loading = false;
            });
            this.loading = false;
        },
        getDate(){
            this.hours = [];
            let today = new Date();
            let dd = today.getDate();
            let mm = today.getMonth() + 1; //January is 0!
            let yyyy = today.getFullYear();
            if (dd < 10) {
                dd = '0' + dd;
            }
            if (mm < 10) {
                mm = '0' + mm;
            } 
            today = yyyy + '-' + mm + '-' + dd;
            this.booking.date = today;
            document.getElementById("datePickerId").setAttribute("min", today);
        },
        selectHour(hour) {
            if (!hour.disabled) {
                this.booking.hour_id = hour.id;
                for (let i = 0; i < this.hours.length; i++) {
                    const h = this.hours[i];
                    if (h.id == hour.id) {
                        this.hours[i].selected = true;
                    } else {
                        this.hours[i].selected = false;
                    }
                } 
            }
        },
        submit() {
            const errors = [];
            for (const key in this.booking) {
                if (this.booking.hasOwnProperty(key)) {
                    const element = this.booking[key];
                    if (element == '') {
                        errors.push(key);
                    }
                }
            }
            if(errors.length == 0) {
                axios.post('/api/bookings', this.booking).then(() => {
                    this.loading_submit = false;
                    this.showMessages = true;
                    this.booking = {
                        date: '',
                        hour_id: '',
                        client_id: '',
                        description: '',
                        plate: '',
                        type: null
                    };
                    setTimeout(() => {
                        this.showMessages = false;
                    }, 3000);
                });
            } else {
                alert('Debe llenar todos los campos');
            }
        }
    },
    };
</script>