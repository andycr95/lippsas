<template>
    <div class="col-md-12 col-sm-12 col-xl-12">
        <ul class="nav nav-pills nav-pills-custom" id="pills-tab-custom" role="tablist">
            <li class="nav-item">
                <a class="nav-link" @click="show = 'step1'" :class="{ active: show == 'step1'}">
                    Tipos de cita
                </a>
            </li>
        </ul>
        <div class="tab-content tab-content-custom-pill">
            <div class="tab-pane fade active show" v-if="show == 'step1'">
                <div class="col-md-12 col-sm-12 col-xl-12 px-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="row p-2">
                                <div class="col-8">
                                    <h2>Tipos de citas</h2>
                                </div>
                                <div class="col-4">
                                    <div class="row">
                                        <div class="col-md-6 text-nowrap">
                                            <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable">
                                                <a type="button" href="#" @click="toggleModal('createTypeBooking')" class="btn btn-outline-info btn-fw">Agregar un tipo</a>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div>
                                                <div class="input-group form-2 pl-0">
                                                    <input class="form-control my-0 py-1 red-border" type="text" placeholder="Buscar" name="search" aria-label="Buscar">
                                                    <div class="input-group-append">
                                                        <button style="background-color: #1cc88a; color: white; width:40px" type="submit" >
                                                            B
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Peso</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="typeBooking in typeBookings">
                                            <td>{{typeBooking.name}}</td>
                                            <td>{{typeBooking.weight}} Toneladas</td>
                                            <td>
                                                <a href="" class="btn btn-outline-info btn-fw" style="width: 30px;height: 30px;padding: 5px;">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="" class="btn btn-outline-danger btn-fw ml-2" style="width: 30px;height: 30px;padding: 5px;">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade active show" v-if="show == 'step2'">
                <div class="media">
                    <div class="media-body">
                        <p>I'm thinking two circus clowns dancing. You? Finding a needle in a haystack isn't hard when every straw is 
                        computerized. Tell him time is of the essence. 
                        Somehow, I doubt that. You have a good heart, Dexter.</p>
                    </div>
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
                    <div v-if="typeModal == 'createTypeBooking'">                             
                        <form>
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" v-model="typeBooking.name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group">
                                <label for="weight">Peso</label>
                                <select v-model="typeBooking.weight" class="form-control" id="weight" required>
                                    <option value="3">3 Toneladas</option>
                                    <option value="5">5 Toneladas</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" @click="closeModal">Cancelar</button>
                    <button type="submit" @click="submitTypeBooking" class="btn btn-primary">Guardar</button>
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
        let typeBookings = ref([]);
        let showModal = ref(false);
        let titleModal = ref('');
        let typeModal = ref('');
        let show = ref('step1');
        let typeBooking = ref({
            name: '',
            weight: '',
        });
        onMounted(() => {
            getTypeBookings();
        });
        function getTypeBookings(){
            axios.get('/api/type-booking').then(response => {
                typeBookings.value = response.data;
                console.log(typeBookings.value);
            });
        }
        return {
            typeBookings,
            showModal,
            titleModal,
            show,
            typeBooking,
            typeModal
        };
    },
    methods: {
        getTypeBookings(){
            axios.get('/api/type-booking').then(response => {
                this.typeBookings = response.data;
                console.log(this.typeBookings);
            });
        },
        toggleModal(type){
            this.showModal = !this.showModal;
            this.typeModal = type;
            if(this.typeModal == 'createTypeBooking') {
                this.titleModal = 'Agregar un tipo de cita';
            } else {
                this.titleModal = 'Editar un tipo de cita';
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
                axios.post('/api/type-booking', this.typeBooking).then(response => {
                    console.log(response);
                    this.showModal = !this.showModal;
                    this.getTypeBookings();
                });
            } else {
                alert('Debe llenar todos los campos');
            }
        }
    },
    };
</script>