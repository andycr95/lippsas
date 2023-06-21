<template>
    <div>
        <pulse-loader style="position: absolute;z-index: 1;top: 400px;left: 150px;" :loading="loading_submit" :size="50"></pulse-loader>
        <div v-if="loading_submit" class="overlay"></div>
        <div class="row">
            <div class="col-xl-6 col-md-6 col-sm-12">
                <div class="form-group mb_20">
                    <label>Nombres:</label>
                    <i style="bottom: 20px;left: 10px;" class="flaticon-user"></i>
                    <input style="padding-left: 30px;" type="text" v-model="booking.name" placeholder="Ingrese su nombre">
                </div>
            </div>
            <div class="col-xl-6 col-md-6 col-sm-12">
                <div class="form-group mb_20">
                    <label>Telefono:</label>
                    <i style="bottom: 20px;left: 10px;" class="flaticon-telephone-2"></i>
                    <input style="padding-left: 30px;" type="text" v-model="booking.phone"
                        placeholder="Ingrese su numero de telefono">
                </div>
            </div>
            <div class="col-xl-12 col-md-12 col-sm-12">
                <div class="form-group mb_30">
                    <label>Correo Electronico:</label>
                    <i style="bottom: 20px;left: 10px;" class="flaticon-mail"></i>
                    <input style="padding-left: 30px;" type="email" v-model="booking.email" placeholder="correo de la empresa">
                </div>
            </div>
            <div class="col-xl-6 col-md-6 col-sm-12">
                <div class="form-group mb_20">
                    <label>Empresa:</label>
                    <i style="bottom: 20px;left: 10px;" class="flaticon-kilogram"></i>
                    <input style="padding-left: 30px;" type="text" v-model="booking.name_company" placeholder="Lipp SAS">
                </div>
            </div>
            <div class="col-xl-6 col-md-6 col-sm-12">
                <div class="form-group mb_20">
                    <label>Nit:</label>
                    <i style="bottom: 20px;left: 10px;" class="flaticon-location"></i>
                    <input style="padding-left: 30px;" type="text" v-model="booking.nit" placeholder="Nit de la empresa">
                </div>
            </div>
            <div class="col-xl-12 col-md-12 col-sm-12">
                <div class="form-group mb_30">
                    <label>Fecha:</label>
                    <i style="bottom: 20px;left: 10px;" class="flaticon-freight"></i>
                    <input style="padding-left: 30px;" type="date" v-model="booking.date" @change="getAllHours" id="datePickerId">
                </div>
            </div>
            <pulse-loader class="col-xl-12 col-md-12 col-sm-12  mb_30" :loading="loading" :color="color" :size="30"></pulse-loader>
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
    import { onMounted } from 'vue';
    import { ref } from 'vue';
    import PulseLoader from 'vue-spinner/src/PulseLoader.vue';
    export default {
    setup() {
        let hours = ref([]);
        let booking = ref({
            date: '',
            hour_id: '',
            nit: '',
            name_company: '',
            name: '',
            phone: '',
            email: ''
        });
        let loading_submit = ref(false);
        let loading = ref(false);
        let showMessages = ref(false);

        onMounted(() => {
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1; //January is 0!
            var yyyy = today.getFullYear();

            if (dd < 10) {
                dd = '0' + dd;
            }

            if (mm < 10) {
                mm = '0' + mm;
            } 
                
            today = yyyy + '-' + mm + '-' + dd;
            document.getElementById("datePickerId").setAttribute("min", today);
        });

        return {
            hours,
            booking,
            loading,
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
            var today = new Date();
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
            let time = hour + ":" + minutes + ":" + seconds;
            await axios.get('/api/hours/withBookingsOfTheDay/'+this.booking.date).then(response => {
                this.hours = response.data;
                for (let i = 0; i < this.hours.length; i++) {
                    const e = this.hours[i];
                    if (e.bookings.length != 0 || (today.toISOString().slice(0, 10) == this.booking.date && e.hour < time)) {
                        this.hours[i].disabled = true;
                    } else {
                        this.hours[i].disabled = false;
                    }
                }
                this.loading = false;
            });
            this.loading = false;
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
                this.loading_submit = true;
                axios.post('/api/bookings', this.booking).then(response => {
                    console.log(response);
                    this.loading_submit = false;
                    this.showMessages = true;
                    this.booking = {
                        date: '',
                        hour_id: '',
                        nit: '',
                        name_company: '',
                        name: '',
                        phone: '',
                        email: ''
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