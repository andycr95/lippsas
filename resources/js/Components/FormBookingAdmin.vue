<template>
    <form method="POST">
        <div class="form-group">
            <label for="exampleInputUsername1">Nombre de encargado</label>
            <input type="text" class="form-control" id="exampleInputUsername1" name="name" required>
        </div>
        <div class="form-group">
            <label for="exampleInputUsername1">Nombre del cliente</label>
            <input type="text" class="form-control" id="exampleInputUsername1" name="name_company" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Telefono</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="phone" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Correo electronico</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" required>
        </div>
        <div class="form-group">
            <label>Nit</label>
            <input type="text" class="form-control" name="nit" required>
            <small class="form-text text-muted">No agregar puntos ni caracteres especiales</small>
        </div>
        <div class="form-group">
            <label>Fecha de cita</label>
            <input type="date"  class="form-control" v-model="booking.date" @change="getAllHours" id="datePickerId">
        </div>
        <div class="form-group mb_30" v-if="hours.length != 0">
            <label>Seleccione un hora:</label>
            <div class="row">
                <div class="col-4" v-for="hour in hours" :key="hour.id">
                    <button v-if="hour.bookings.length == 0" :class="{ active : hour.selected, disabled : hour.disabled }" type="button" class="button-style-three" style="width: 150px;padding: 10px;" @click="selectHour(hour)">
                        {{ hour.hour }}
                    </button>
                </div>
            </div>
        </div>
        <button type="submit" @click="submit" class="btn btn-primary me-2">Guardar</button>
    </form>
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
</style>
	
<script>
    import axios from 'axios';
    import { onMounted } from 'vue';
    import { ref } from 'vue';
    export default {
    setup() {
        let hours = ref([]);
        let booking = ref({
            date: '',
            hour_id: '',
            nit: '',
            name_company: '',
            name: '',
            phone: ''
        });

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
        };
    },
    methods: {
        getAllHours() {
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
            axios.get('/api/hours', {
                params: {
                    date: this.booking.date
                }
            }).then(response => {
                this.hours = response.data;
                for (let i = 0; i < this.hours.length; i++) {
                    const e = this.hours[i];
                    if (time >= e.hour) {
                        this.hours[i].disabled = true;
                    } else {
                        this.hours[i].disabled = false;
                    }
                }
                console.log(this.hours);
            });
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
                axios.post('/api/bookings', this.booking).then(response => {
                    console.log(response);
                });
            } else {
                alert('Debe llenar todos los campos');
            }
        }
    },
    };
</script>