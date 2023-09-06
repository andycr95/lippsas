<template>
    <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <div class="row p-2">
                    <div class="col-8">
                        <h2>Horarios</h2>
                    </div>
                    <div class="col-4" style="text-align: end">
                        <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable">
                            <a type="button" href="#" @click="toggleModal('createHour')" class="btn btn-outline-info btn-fw">Agregar horario</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Horario</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr v-for="hour in hours">
                                <td>{{ hour.id }}</td>
                                <td>{{ hour.hour }}</td>
                                <td>{{ hour.state == 'true' ? 'Activo' : 'Inactivo' }}</td>
                                <td>
                                    <a @click="toggleModal('updateHour', hour)" style="width: 30px;height: 30px;padding: 5px" href="#" class="btn btn-outline-info btn-fw">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    <div class="modal fade" id="defaultModal" :class="{ showModal: showModal }" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{titleModal}}</h5>
                    <button type="button" class="close" @click="closeModal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div v-if="typeModal == 'createHour'">                             
                        <form enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Seleccione un horario</label>
                                <input type="time" class="form-control" id="exampleInputUsername1" name="hour" list="avail" required>
                                <datalist id="avail">
                                    <option value="00:00"></option>
                                    <option value="01:00"></option>
                                    <option value="02:00"></option>
                                    <option value="03:00"></option>
                                    <option value="04:00"></option>
                                    <option value="05:00"></option>
                                    <option value="06:00"></option>
                                    <option value="07:00"></option>
                                    <option value="08:00"></option>
                                    <option value="09:00"></option>
                                    <option value="10:00"></option>
                                    <option value="11:00"></option>
                                    <option value="12:00"></option>
                                    <option value="13:00"></option>
                                    <option value="14:00"></option>
                                    <option value="15:00"></option>
                                    <option value="16:00"></option>
                                    <option value="17:00"></option>
                                    <option value="18:00"></option>
                                    <option value="19:00"></option>
                                    <option value="20:00"></option>
                                    <option value="21:00"></option>
                                    <option value="22:00"></option>
                                    <option value="23:00"></option>
                                </datalist>
                            </div>
                        </form>
                    </div>
                    <div v-else>                        
                        <form enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputState">Seleccione un estado</label>
                                <select v-model="hourUpdate.state" @change="toggleSelect" class="form-control" id="exampleInputState" name="hour" required>
                                    <option value="true">Activo</option>
                                    <option value="false">Inactivo</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputTime">Tiempo a desactivar</label>
                                <select v-model="hourUpdate.time" :disabled="show" class="form-control" id="exampleInputTime" name="time" required>
                                    <option value="24">1 Dia</option>
                                    <option value="48">2 Dias</option>
                                    <option value="72">3 Dias</option>
                                    <option value="96">4 Dias</option>
                                    <option value="120">5 Dias</option>
                                </select>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" @click="closeModal">Cancelar</button>
                    <button type="submit" v-if="typeModal == 'createHour'" @click="submitTypeBooking" class="btn btn-primary">Guardar</button>
                    <button type="submit" v-else @click="submitUpdateHour" class="btn btn-primary">Actualizar</button>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

.showModal{
    display: block;
    opacity: 1;
    background-color: rgba(0,0,0,0.3);
}
.nav-link.active{
    background: #1cc88a !important;
    color: white;
}
</style>
	
<script>
    import axios from 'axios';
    import { onMounted } from 'vue';
    import { ref } from 'vue';
    export default {
    setup() {
        let hours = ref([]);
        let showModal = ref(false);
        let titleModal = ref('');
        let typeModal = ref('');
        let show = ref(true);
        let hour = ref({
            hour: '',
        });
        let hourUpdate = ref({
            id: '',
            state: true,
            time: '',
            date: ''
        });
        onMounted(() => {
            getHours();
        });
        function getHours(){
            axios.get('/api/hours').then(response => {
                hours.value = response.data;
            });
        }
        return {
            hours,
            hour,
            showModal,
            titleModal,
            show,
            hourUpdate,
            typeModal
        };
    },
    methods: {
        async getHours(){
            await axios.get('/api/hours').then(response => {
                this.hours = []
                this.hours = response.data;
            });
        },
        toggleSelect(){
            if (this.hourUpdate.state == 'false') this.show = false;
            else this.show = true;
        },
        toggleModal(type, hour = null){
            this.showModal = !this.showModal;
            this.typeModal = type;
            if(this.typeModal == 'createHour') {
                this.titleModal = 'Agregar horario';
            } else {
                this.hourUpdate.id = hour.id;
                this.hourUpdate.state = hour.state;
                this.titleModal = 'Editar horario';
            }
        },
        closeModal(){
            this.showModal = !this.showModal;
        },
        submitTypeBooking() {
            const errors = [];
            for (const key in this.typeBooking) {
                if (this.typeBooking.hasOwnProperty(key)) {
                    const element = this.typeBooking[key];
                    if (element == '') {
                        errors.push(key);
                    }
                }
            }
            if(errors.length == 0) {
                axios.post('/api/hours', this.typeBooking).then(response => {
                    console.log(response);
                    this.showModal = !this.showModal;
                    this.getHours();
                });
            } else {
                alert('Debe llenar todos los campos');
            }
        },
        async submitUpdateHour() {
            if (this.hourUpdate.state == false) {
                const date = this.getDate();
                this.hourUpdate.date = date;
                const errors = [];
                for (const key in this.hourUpdate) {
                    if (this.hourUpdate.hasOwnProperty(key)) {
                        const element = this.hourUpdate[key];
                        if (element == '') {
                            errors.push(key);
                        }
                    }
                }
                if(errors.length == 0) {
                    const res = await axios.put('/api/hours/'+this.hourUpdate.id, this.hourUpdate);
                    await this.getHours();
                    this.showModal = !this.showModal;
                } else {
                    alert('Debe llenar todos los campos');
                }
            } else {
                const res = await axios.put('/api/hours/'+this.hourUpdate.id, this.hourUpdate);
                await this.getHours();
                this.showModal = !this.showModal;
            }
        },
        getDate(){
            const date = new Date();
            switch (this.hourUpdate.time) {
                case '24':
                    // Add a day to today
                    date.setDate(date.getDate() + 1);
                    break;
                case '48':
                    // Add two days to date
                    date.setDate(date.getDate() + 2);
                    break;
                case '72':
                    // Add three days to date
                    date.setDate(date.getDate() + 3);
                    break;
                case '96':
                    // Add four days to date
                    date.setDate(date.getDate() + 4);
                    break;
                case '120':
                    // Add five days to date
                    date.setDate(date.getDate() + 5);
                    break;
            
                default:
                    break;
            }
            let today = date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate();
            return today;
        }
    },
    };
</script>