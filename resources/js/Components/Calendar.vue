<template>
<div id="calendar"></div>

<div class="modal fade" id="defaultModal" :class="{ showModal: showModal }" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Reserva</h5>
                    <button type="button" class="close" @click="closeModal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">                       
                        <form enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputState">Cliente</label>
                                <span class="form-control">{{ booking.client.name }}</span>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label for="exampleInputTime">Horario reservado</label>
                                    <span class="form-control">{{ booking.hour.hour }}</span>
                                </div>
                            <div class="form-group col">
                                <label for="exampleInputTime">Fecha de reserva</label>
                                <span class="form-control">{{ booking.date_creation }}</span>
                            </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label for="exampleInputTime">Tipo de cita</label>
                                    <span class="form-control">{{ booking.type_booking.name }}</span>
                                </div>
                                <div class="form-group col">
                                    <label for="exampleInputTime">Placa</label>
                                    <span class="form-control">{{ booking.plate }}</span>
                                </div>
                            </div>
                                <div class="form-group">
                                    <label for="exampleInputTime">Descripcion</label>
                                    <span class="form-control">{{ booking.description }}</span>
                                </div>
                        </form>
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
    import { ref } from 'vue';

    export default {
        setup(){
            let bookings = ref([]);
            let bookingsArray = ref([]);
            let showModal = ref(false);
            let booking = ref({
                id: '',
                type_booking_id: '',
                plate : '',
                date_creation : '',
                client_id : '',
                descriptio: '',
                hour_id: '',
                status: '',
                client: {
                    id: '',
                    name: '',
                    email: '',
                    phone: '',
                    address: '',
                    date_creation: '',
                    date_update: '',
                    status: '',
                },
                hour: {
                    id: '',
                    hour: '',
                    date_creation: '',
                    date_update: '',
                    status: '',
                },
                type_booking: {
                    id: '',
                    name: '',
                }
            });

            return {
                bookings,
                showModal,
                booking,
                bookingsArray
            }
        },
        mounted(){
            this.getCalendar();
        },
        methods: {
            toggleModal(id){
                this.showModal = !this.showModal;
                this.booking = this.bookingsArray.find(x => x.id == id);
                console.log(this.booking);
            },
            getCalendar(){
                axios.get('/api/bookings').then(response => {
                    let events = [];
                    let me = this;
                    for (let i = 0; i < response.data.length; i++) {
                        const e = response.data[i];
                        this.bookingsArray.push(e);
                        events.push({
                            groupId: e.hour.hour,
                            title: `${e.client.name}
                            ${e.hour.hour}`,
                            id: e.id,
                            start: e.date_creation,
                            end: e.date_creation,
                            startTime: e.date_creation+"-"+e.hour.hour,
                            endTime: e.date_creation+"-"+e.hour.hour
                        })
                    }
                    me.bookings.value = events;
                    let calendarEl = document.getElementById('calendar');
                    let today = new Date();
                    let calendar = new FullCalendar.Calendar(calendarEl, {
                        initialView: 'dayGridWeek',
                        initialDate: today.toISOString().slice(0, 10),
                        events: JSON.parse(JSON.stringify(me.bookings.value)),
                        eventClick: function(info) {
                            me.toggleModal(info.event._def.publicId);
                        }
                    });
                    calendar.setOption('locale', 'es');
                    calendar.render();
                });
            },
            closeModal(){
                this.showModal = false;
            }
        }
    }
</script>